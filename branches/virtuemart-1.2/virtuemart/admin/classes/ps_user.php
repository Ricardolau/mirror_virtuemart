<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
*
* @version $Id$
* @package VirtueMart
* @subpackage classes
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/

class ps_user {
	/**
	 * Validates the input parameters onBeforeUserAdd
	 *
	 * @param array $d
	 * @return boolean
	 */
	function validate_add(&$d) {
		global $my, $perm, $vmLogger, $VM_LANG;

		$db = new ps_DB;

		$valid = true;
		$missing = "";

		require_once( CLASSPATH . 'ps_userfield.php' );
		$requiredFields = ps_userfield::getUserFields( 'registration', true );
		
		$skipFields = array( 'username', 'password', 'password2', 'email', 'agreed');
		
		foreach( $requiredFields as $field )  {
			if( in_array( $field->name, $skipFields )) {
				continue;
			}
			switch( $field->type ) {
				case 'age_verification':
					// The Age Verification here is just a simple check if the selected date
					// is a birthday older than the minimum age (default: 18)
					$d[$field->name] = vmRequest::getInt('birthday_selector_year')
															.'-'.vmRequest::getInt('birthday_selector_month')
															.'-'.vmRequest::getInt('birthday_selector_day');
					
					break;
				default:
					if( empty( $d[$field->name]) && $field->sys == 1 ) {
						$valid = false;
						$fieldtitle = $field->title;
						if( $VM_LANG->exists($fieldtitle) ) {
							$fieldtitle = $VM_LANG->_($fieldtitle);
						}
						$vmLogger->err( sprintf($VM_LANG->_('VM_USER_ERR_MISSINGVALUE'), $fieldtitle) );
					}
					break;
			}
		}
		if (!vmValidateEmail($d["email"])) {
			$vmLogger->err( 'Please provide a valide email address for the registration.' );
			return False;
		}

		if (!$d['perms']) {
			$vmLogger->warning( $VM_LANG->_('VM_USER_ERR_GROUP') );
			$valid = false;
		}
		else {
			if( !$perm->hasHigherPerms( $d['perms'] )) {
				$vmLogger->err( sprintf($VM_LANG->_('VM_USER_ADD_ERR_NOPERMS'),$d['perms']) );
				$valid = false;
			}

		}
		return $valid;
	}

	/**
	 * Validates the Input Parameters onBeforeUserUpdate
	 *
	 * @param array $d
	 * @return boolean
	 */
	function validate_update(&$d) {
		return $this->validate_add( $d );
	}

	/**
	 * Validates the Input Parameters onBeforeUserDelete
	 *
	 * @param int $id
	 * @return boolean
	 */
	function validate_delete( $id ) {
		global $my, $vmLogger, $perm, $VM_LANG;
		$auth = $_SESSION['auth'];
		$valid = true;

		if( empty( $id ) ) {
			$vmLogger->err( $VM_LANG->_('VM_USER_DELETE_SELECT') );
			return false;
		}
		$db = new ps_DB();
		$q = 'SELECT user_id, perms FROM #__{vm}_user_info WHERE user_id='.(int)$id;
		$db->query( $q );

		// Only check VirtueMart users - the user may be only a CMS user		
		if( $db->num_rows() > 0 ) {
			$perms = $db->f('perms');

			if( !$perm->hasHigherPerms( $perms ) ) {
				$vmLogger->err( sprintf($VM_LANG->_('VM_USER_DELETE_ERR_NOPERMS'),$perms) );
				$valid = false;
			}

			if( $id == $my->id) {
				$vmLogger->err( $VM_LANG->_('VM_USER_DELETE_ERR_YOURSELF') );
				$valid = false;
			}
		}
		
		return $valid;
	}

	/**
	 * Add/Update a User, user information of shopper or vendor
	 * 
	 * @author Max Milbers
	 * @param array $d
	 * @return boolean
	 */
	function addUpdateUser(&$d) {
		global $VM_LANG, $perm, $vmLogger;
		
		//Should be extended to a relation of the vendor_id in the order
		$vendor_id = 1;

		$db = new ps_DB;
		$timestamp = time();

		if (!$this->validate_add($d)) {
			return false;
		}
		
				// Joomla User Information stuff
		if( vmIsJoomla( '1.5' ) ) {
			$uid = $this->save();
		} else {
			$uid = $this->saveUser( $d );
		}
		if( empty( $uid ) && empty( $d['id'] ) ) {
			$vmLogger->err( $VM_LANG->_('VM_USER_ADD_FAILED') );
			return false;
		}
		elseif( !empty( $d['id'])) {
			$uid = $d['id'];
		}
		
		// Get all fields which where shown to the user
		$userFields = ps_userfield::getUserFields('account', false, '', true);
		$skipFields = ps_userfield::getSkipFields();
		
		$user_id = intval( $d['id'] );
		
		$add = false;
		if(isset($user_id)){
			$db->query( "SELECT COUNT(user_info_id) AS num_rows 
					FROM #__{vm}_user_info WHERE user_id='" . $user_id . "'" );
			if( $db->f('num_rows') < 1 ) {
				$add = true;
			}
		}else{
			$add = true;
		}
		
		$fields = array();
		
		if($add>0){
			// Insert billto;		
			$hash_secret = "VirtueMartIsCool";
			
			$fields['user_info_id'] = md5(uniqid( $hash_secret));
			$fields['user_id'] =  $uid;
			$fields['address_type'] =  'BT';
			$fields['address_type_name'] =  '-default-';
			$fields['cdate'] =  $timestamp;
			$fields['mdate'] =  $timestamp;
			$fields['perms'] =  $d['perms'];
	
		}else{
			$fields['mdate'] = time();
			$fields['perms'] = $d['perms'];		
		}

		foreach( $userFields as $userField ) {
			if( !in_array($userField->name, $skipFields )) {
				$fields[$userField->name] = ps_userfield::prepareFieldDataSave( $userField->type, $userField->name, @$d[$userField->name]);
			}
		}
		for ($x = 0; $x < sizeof($fields); ++$x){
			$vmLogger->info("key: ".key($fields)."  value: ".current($fields));
			next($fields);
		}
		
		ps_user::setUserInfoWithEmail($fields,$user_id);
		
		if($add>0){
			$_REQUEST['id'] = $_REQUEST['user_id'] = $uid;
			$vmLogger->info( $VM_LANG->_('VM_USER_ADDED') );
			
		}else{
			$vmLogger->info( $VM_LANG->_('VM_USER_UPDATED') );
		}
		return true;
	}
	/**
	 * Adds a new User to the CMS and VirtueMart
	 *
	 * @param array $d
	 * @return boolean
	 */
	function add(&$d) {
		return $this->addUpdateUser( $d );
	}
//		global $my, $VM_LANG, $perm, $vmLogger;
//		
//		//Should be extended to a relation of the vendor_id in the order
//		$vendor_id = 1;
//
//		$hash_secret = "VirtueMartIsCool";
//		$db = new ps_DB;
//		$timestamp = time();
//
//		if (!$this->validate_add($d)) {
//			return False;
//		}
//
//		// Joomla User Information stuff
//		if( vmIsJoomla( '1.5' ) ) {
//			$uid = $this->save();
//		} else {
//			$uid = $this->saveUser( $d );
//		}
//		if( empty( $uid ) && empty( $d['id'] ) ) {
//			$vmLogger->err( $VM_LANG->_('VM_USER_ADD_FAILED') );
//			return false;
//		}
//		elseif( !empty( $d['id'])) {
//			$uid = $d['id'];
//		}
//		
//		// Get all fields which where shown to the user
//		$userFields = ps_userfield::getUserFields('account', false, '', true);
//		$skipFields = ps_userfield::getSkipFields();
//		
//		// Insert billto;
//		$fields = array();
//		
//		$fields['user_info_id'] = md5(uniqid( $hash_secret));
//		$fields['user_id'] =  $uid;
//		$fields['address_type'] =  'BT';
//		$fields['address_type_name'] =  '-default-';
//		$fields['cdate'] =  $timestamp;
//		$fields['mdate'] =  $timestamp;
//		$fields['perms'] =  $d['perms'];
//
//		$values = array();
//		foreach( $userFields as $userField ) {
//			if( !in_array($userField->name, $skipFields )) {
//				$fields[$userField->name] = ps_userfield::prepareFieldDataSave( $userField->type, $userField->name, @$d[$userField->name]);
//			}
//		}
//
//		ps_user::setUserInfoWithEmail($fields);
		


		//TODO In this table is stored the information of the userid of the vendor
		//so this must be worked out in a completly other way by Max Milbers
		// Insert vendor relationship
//		$q = "INSERT INTO #__{vm}_auth_user_vendor (user_id,vendor_id)";
//		$q .= " VALUES ";
//		$q .= "('" . $uid . "','$vendor_id') ";
//		$db->query($q);

//		if( $perm->check("admin")) {
//			$vendor_id = $d['vendor_id'];
//		}
//		else {
//			$vendor_id = $ps_vendor_id;
//		}
		//TODO not clear which vendor_id should be taken
		// Insert Shopper -ShopperGroup - Relationship
		//not useful here,... this relationship must be based on the bought products.
//		$q  = "INSERT INTO #__{vm}_shopper_vendor_xref ";
//		$q .= "(user_id,vendor_id,shopper_group_id,customer_number) ";
//		$q .= "VALUES ('$uid', '$vendor_id','".$d['shopper_group_id']."', '".$d['customer_number']."')";
//		$db->query($q);
//		
//		$_REQUEST['id'] = $_REQUEST['user_id'] = $uid;
//		$vmLogger->info( $VM_LANG->_('VM_USER_ADDED') );
//		
//		return True;
//
//	}


	/**
	 * Updates a User Record
	 *
	 * @param array $d
	 * @return boolean
	 */
	function update(&$d) {
		
		return $this->addUpdateUser( $d );
	}	
//		global $my, $VM_LANG, $perm, $vmLogger;
//		
//		//Should be extended to a relation of the vendor_id in the order
//		$vendor_id = 1;
//
//		$db = new ps_DB;
//		$timestamp = time();
//
//		if (!$this->validate_update($d)) {
//			return False;
//		}
//
//		// Joomla User Information stuff
//		if( vmIsJoomla( '1.5', '>=' ) ) {
//			$this->save();
//		} else {
//			$this->saveUser( $d );
//		}
//
//		// Update Bill To
//
//		// Get all fields which where shown to the user
//		$userFields = ps_userfield::getUserFields('account', false, '', true);
//
//		$user_id = intval( $d['id'] );
//
//		// Building the query: PART ONE
//		// The first 7 fields are FIX and not built dynamically
//		$db->query( "SELECT COUNT(user_info_id) AS num_rows 
//					FROM #__{vm}_user_info WHERE user_id='" . $user_id . "'" );
//		if( $db->f('num_rows') < 1 ) {
//			// The user is registered in Joomla, but not in VirtueMart; so, insert the bill to information
//			return $this->add($d);
//		}
//		else {
//			
//			$fields['mdate'] = time();
//			$fields['perms'] = $d['perms'];
//			
//			$skip_fields = ps_userfield::getSkipFields();
//			foreach( $userFields as $userField ) {
//				if( !in_array($userField->name,$skip_fields)) {
//					$d[$userField->name] = ps_userfield::prepareFieldDataSave( $userField->type, $userField->name, @$d[$userField->name]);
////					$fields[] = "`".$userField->name."`='".$d[$userField->name]."'";
//					$fields[$userField->name]=$d[$userField->name];
//				}
//			}
//			for ($x = 0; $x < sizeof($fields); ++$x){
//				$GLOBALS['vmLogger']->info("key: ".key($fields)."  value: ".current($fields));
//				next($fields);
//			}
//			
//			ps_user::setUserInfoWithEmail($fields, $user_id);
//		}	
//		
//		
//		//The whole rest is just for history, will be deleted within the next committs by Max Milbers
////			$qu = 'UPDATE `#__users` SET `email`="'.$d['email'].'" WHERE `id`="' .$user_id. '"';
////			$db->query($qu);
////			unset ($fields['email']);
//			
//			
////			$q = "UPDATE #__{vm}_user_info SET
////	                                `mdate` = '".time()."',
////	                                `perms` = '".$d['perms']."', ";
////			$fields = array();
////			$skip_fields = ps_userfield::getSkipFields();
////			foreach( $userFields as $userField ) {
////				if( !in_array($userField->name,$skip_fields)) {
////					$d[$userField->name] = ps_userfield::prepareFieldDataSave( $userField->type, $userField->name, @$d[$userField->name]);
////					$fields[] = "`".$userField->name."`='".$d[$userField->name]."'";
////				}
////			}
////
////
////			$qu = 'UPDATE `#__users` SET `email`="'.$d['email'].'" WHERE `id`="' .$user_id. '"';
////			$db->query($qu);
////
////			//Necessary email is in joomla table now
////			unset ($fields['email']);
////			
////			$q .= implode( ",\n", $fields );
////			$q .= " WHERE user_id=".$user_id." AND address_type='BT'";
////			$db->query($q);
////			echo('Die User_id ist hier: '.$user_id);
////			// Run the query now!
//
//
////		}
//		
//		//TODO In this table is stored the information of the userid of the vendor
//		//so this must be worked out in a completly other way by Max Milbers
////		if( $perm->check("admin")) {
////			$vendor_id = $d['vendor_id'];
////		}
////		else {
////			$vendor_id = $ps_vendor_id;
////		}
////
////		$db->query( "SELECT COUNT(user_id) as num_rows FROM #__{vm}_auth_user_vendor WHERE vendor_id='".$vendor_id."' AND user_id='" . $d["user_id"] . "'" );
////		if( $db->f('num_rows') < 1 ) {
////			// Insert vendor relationship
////			$q = "INSERT INTO #__{vm}_auth_user_vendor (user_id,vendor_id)";
////			$q .= " VALUES ";
////			$q .= "('" . $d['user_id'] . "','$vendor_id') ";
////			$db->query($q);
////		}
////		else {
////			// Update the User- Vendor  relationship
////			$q = "UPDATE #__{vm}_auth_user_vendor set ";
////			$q .= "vendor_id='".$d['vendor_id']."' ";
////			$q .= "WHERE user_id='" . $d["user_id"] . "'";
////			$db->query($q);
////		}
//
//		//not useful here,... this relationship must be based on the bought products.
////		$db->query( "SELECT COUNT(user_id) as num_rows FROM #__{vm}_shopper_vendor_xref WHERE vendor_id='".$vendor_id."' AND user_id='" . $d["user_id"] . "'" );
////		if( $db->f('num_rows') < 1 ) {
////			// Insert Shopper -ShopperGroup - Relationship
////			$q  = "INSERT INTO #__{vm}_shopper_vendor_xref ";
////			$q .= "(user_id,vendor_id,shopper_group_id,customer_number) ";
////			$q .= "VALUES ('".$d['user_id']."', '$vendor_id','".$d['shopper_group_id']."', '".$d['customer_number']."')";
////		}
////		else {
////			// Update the Shopper Group Entry for this user
////			$q = "UPDATE #__{vm}_shopper_vendor_xref SET ";
////			$q .= "shopper_group_id='".$d['shopper_group_id']."' ";
////			$q.= ",vendor_id ='".$vendor_id."' ";
////			$q .= "WHERE user_id='" . $d["user_id"] . "' ";
////		}
////		$db->query($q);
//		
//		$vmLogger->info( $VM_LANG->_('VM_USER_UPDATED') );
//		
//		return True;
//	}

	/**************************************************************************
	* name: delete()
	* created by:
	* description:
	* parameters:
	* returns:
	**************************************************************************/
	function delete(&$d) {
		$db = new ps_DB;
		$ps_vendor_id = 1;

		if( !is_array( $d['user_id'] )) {
			$d['user_id'] = array( $d['user_id'] );
		}

		foreach( $d['user_id'] as $user ) {
			if( !$this->validate_delete( $user ) ) {
				return false;
			}
			
			$user = (int) $user;
			
			// remove the CMS user
			if( !$this->removeUsers( $user ) ) {
				return false;
			}
			
			// Delete ALL user_info entries (billing and shipping addresses)
			$q  = "DELETE FROM #__{vm}_user_info WHERE user_id=" . $user;
			$db->query($q);

			$q = "DELETE FROM #__{vm}_shopper_vendor_xref where user_id=$user AND vendor_id=$ps_vendor_id";
			$db->query($q);
		}

		return True;
	}

	/**
        * Function to save User Information
        * into Joomla
        */
	function saveUser( &$d ) {
		global $database, $my, $_VERSION, $VM_LANG;
		global $mosConfig_live_site, $mosConfig_mailfrom, $mosConfig_fromname, $mosConfig_sitename;

		$aro_id = 'aro_id';
		$group_id = 'group_id';
		// Column names have changed since J! 1.5
		if( vmIsJoomla('1.5', '>=')) {
			$aro_id = 'id';
			$group_id = 'id';
		}

		$row = new mosUser( $database );
		if (!$row->bind( $_POST )) {
			echo "<script type=\"text/javascript\">alert('".vmHtmlEntityDecode($row->getError())."');</script>\n";
		}

		$isNew 	= !$row->id;
		$pwd 	= '';

		// MD5 hash convert passwords
		if ($isNew) {
			// new user stuff
			if ($row->password == '') {
				$pwd = vmGenRandomPassword();
				$row->password = md5( $pwd );
			} else {
				$pwd = $row->password;
				$row->password = md5( $row->password );
			}
			$row->registerDate = date( 'Y-m-d H:i:s' );
		} else {
			// existing user stuff
			if ($row->password == '') {
				// password set to null if empty
				$row->password = null;
			} else {
				if( !empty( $_POST['password'] )) {
					if( $row->password != @$_POST['password2'] ) {
						$d['error'] = vmHtmlEntityDecode($VM_LANG->_('REGWARN_VPASS2',false));
						return false;
					}
				}
				$row->password = md5( $row->password );
			}
		}

		// save usertype to usetype column
		$query = "SELECT name"
		. "\n FROM #__core_acl_aro_groups"
		. "\n WHERE `$group_id` = $row->gid"
		;
		$database->setQuery( $query );
		$usertype = $database->loadResult();
		$row->usertype = $usertype;

		// save params
		$params = vmGet( $_POST, 'params', '' );
		if (is_array( $params )) {
			$txt = array();
			foreach ( $params as $k=>$v) {
				$txt[] = "$k=$v";
			}
			$row->params = implode( "\n", $txt );
		}

		if (!$row->check()) {
			echo "<script type=\"text/javascript\"> alert('".vmHtmlEntityDecode($row->getError())."');</script>\n";
			return false;
		}
		if (!$row->store()) {
			echo "<script type=\"text/javascript\"> alert('".vmHtmlEntityDecode($row->getError())."');</script>\n";
			return false;
		}
		if ( $isNew ) {
			$newUserId = $row->id;
		}
		else
		$newUserId = false;

		$row->checkin();

		$_SESSION['session_user_params']= $row->params;

		// update the ACL
		if ( !$isNew ) {
			$query = "SELECT `$aro_id`"
			. "\n FROM #__core_acl_aro"
			. "\n WHERE value = '$row->id'"
			;
			$database->setQuery( $query );
			$aro_id = $database->loadResult();

			$query = "UPDATE #__core_acl_groups_aro_map"
			. "\n SET group_id = $row->gid"
			. "\n WHERE aro_id = $aro_id"
			;
			$database->setQuery( $query );
			$database->query() or die( $database->stderr() );
		}

		// for new users, email username and password
		if ($isNew) {
			// Send the notification emails
			$name = $row->name;
			$email = $row->email;
			$username = $row->username;
			$password = $pwd;
			$this->_sendMail( $name, $email, $username, $password );
		}
		
		return $newUserId;
	}
	
	/**
	 * Saves a user into Joomla! 1.5 
	 *
	 * @return int An integer user_id if the user was saved successfully, false if not
	 */
	function save()
	{
		global $mainframe, $vmLogger, $VM_LANG;

		$option = JRequest::getCmd( 'option');

		// Initialize some variables
		$db			= & JFactory::getDBO();
		$me			= & JFactory::getUser();
		$MailFrom	= $mainframe->getCfg('mailfrom');
		$FromName	= $mainframe->getCfg('fromname');
		$SiteName	= $mainframe->getCfg('sitename');

 		// Create a new JUser object
		$user = new JUser(JRequest::getVar( 'id', 0, 'post', 'int'));
		$original_gid = $user->get('gid');

		$post = JRequest::get('post');
		$post['username']	= JRequest::getVar('username', '', 'post', 'username');
		$post['password']	= JRequest::getVar('password', '', 'post', 'string', JREQUEST_ALLOWRAW);
		$post['password2']	= JRequest::getVar('password2', '', 'post', 'string', JREQUEST_ALLOWRAW);

		if (!$user->bind($post))
		{
			echo "<script type=\"text/javascript\"> alert('".vmHtmlEntityDecode( $user->getError() )."');</script>\n";
			return false;
		}

		// Are we dealing with a new user which we need to create?
		$isNew 	= ($user->get('id') < 1);
		if (!$isNew)
		{
			// if group has been changed and where original group was a Super Admin
			if ( $user->get('gid') != $original_gid && $original_gid == 25 )
			{
				// count number of active super admins
				$query = 'SELECT COUNT( id )'
					. ' FROM #__users'
					. ' WHERE gid = 25'
					. ' AND block = 0'
				;
				$db->setQuery( $query );
				$count = $db->loadResult();

				if ( $count <= 1 )
				{
					// disallow change if only one Super Admin exists
					$vmLogger->err( $VM_LANG->_('VM_USER_ERR_ONLYSUPERADMIN') );
					return false;
				}
			}
		}

		/*
	 	 * Lets save the JUser object
	 	 */
		if (!$user->save())
		{
			echo "<script type=\"text/javascript\"> alert('".vmHtmlEntityDecode( $user->getError() )."');</script>\n";
			return false;
		}

		// For new users, email username and password
		if ($isNew)
		{
			$name = $user->get( 'name' );
			$email = $user->get( 'email' );
			$username = $user->get( 'username' );
			$password = $user->password_clear;
		 	$this->_sendMail( $name, $email, $username, $password );
		}
	 	
		// Capture the new user id
		if( $isNew ) {
			$newUserId = $user->get('id');
		} else {
			$newUserId = false;
		}

		return $newUserId;
	}
	
	/**
	 * Sends new/updated user notification emails 
	 *
	 * @param string $name - The name of the newly created/updated user
	 * @param string $email - The email address of the newly created/updated user
	 * @param string $username - The username of the newly created/updated user
	 * @param string $password - The plain text password of the newly created/updated user
	 */
	function _sendMail( $name, $email, $username, $password ) {
		global $database, $VM_LANG;
		global $my, $mosConfig_mailfrom, $mosConfig_fromname, $mosConfig_sitename, $mosConfig_live_site;
		
		$query = "SELECT email"
			. "\n FROM #__users"
			. "\n WHERE id = $my->id"
			;
		$database->setQuery( $query );
		$adminEmail = $database->loadResult();
		
		$subject = $VM_LANG->_('NEW_USER_MESSAGE_SUBJECT',false);
		$message = sprintf ( $VM_LANG->_('NEW_USER_MESSAGE',false), $name, $mosConfig_sitename, $mosConfig_live_site, $username, $password );
		
		if ($mosConfig_mailfrom != "" && $mosConfig_fromname != "") {
			$adminName 	= $mosConfig_fromname;
			$adminEmail = $mosConfig_mailfrom;
		} else {
			$query = "SELECT name, email"
				. "\n FROM #__users"
				// administrator
				. "\n WHERE gid = 25"
				;
			$database->setQuery( $query );
			$admins = $database->loadObjectList();
			$admin 		= $admins[0];
			$adminName 	= $admin->name;
			$adminEmail = $admin->email;
		}

		vmMail( $adminEmail, $adminName, $email, $subject, $message );
	}


	/**
	* Function to remove a user from Joomla
	*/
	function removeUsers( $cid ) {
		global $database, $acl, $my, $vmLogger, $VM_LANG;

		if (!is_array( $cid ) ) {
			$cid = array( $cid );
		}

		//TODO vendorrelationships are not deleted
		if ( count( $cid ) ) {
			$obj = new mosUser( $database );
			foreach ($cid as $id) {
				// check for a super admin ... can't delete them
				//TODO: Find out the group name of the User to be deleted
//				$groups 	= $acl->get_object_groups( 'users', $id, 'ARO' );
//				$this_group = strtolower( $acl->get_group_name( $groups[0], 'ARO' ) );
				$obj->load( $id );
				$this_group = strtolower( $obj->get('usertype') );
				if ( $this_group == 'super administrator' ) {
					$vmLogger->err( $VM_LANG->_('VM_USER_DELETE_ERR_SUPERADMIN') );
					return false;
				} else if ( $id == $my->id ){
					$vmLogger->err( $VM_LANG->_('VM_USER_DELETE_ERR_YOURSELF') );
					return false;
				} else if ( ( $this_group == 'administrator' ) && ( $my->gid == 24 ) ){
					$vmLogger->err( $VM_LANG->_('VM_USER_DELETE_ERR_ADMIN') );
					return false;
				} else {
					$obj->delete( $id );
					$err = $obj->getError();
					if( $err ) {
						$vmLogger->err( $err );
						return false;
					}
					
					return true;
				}
			}
		}
	}
	
	/**
	 * 
	 * @author Max Milbers
	 */
	 
	function get_juser_email_by_user_id(&$db, &$user_id){
		if(empty ($user_id))return;
		$q  = "SELECT email FROM  #__users ";
		$q .= "WHERE id = '".$user_id."'";
		$db->query($q);
		$email = $db->f('email');
		return $email;
	}
	
		/**
	* name: get_user_id_by_nickname
	* created by: Max Milbers
	* @param 
	* returns int $user_id
	*/
	
	function get_user_id_by_nickname(&$db, &$nickname){
		if(empty ($nickname))return;
		$q  = 'SELECT `id` FROM `#__users` WHERE `username` = "'.$nickname.'"';
		$db->query($q);
		$userid = $db->f('id');
		return $userid;
	}
	
	function get_UserEmail_by_order_id(&$db, &$order_id){
		if(empty ($order_id))return;
		$q  = 'SELECT `user_id` FROM `#__{vm}_order_user_info` WHERE `order_id`="'.$order_id.'"';
		$db->query( $q );
		$db->next_record();
		$user_id = $db->f('user_id');
		$email = ps_user::get_juser_email_by_user_id($db, $user_id);
		return $email;
	}
	
	function get_User_id_by_order_id(&$db, &$order_id){
		if(empty ($order_id))return;
		$q  = "SELECT user_id FROM `#__{vm}_orders` WHERE `order_id`='$order_id'";
		$db->query( $q );
		if($db->next_record()){
					$user_id = $db->f('user_id');
			return $user_id;
		}else{
			$GLOBALS['vmLogger']->err('Error in DB $order_id '.$order_id.' dont have a user_id');
			return 0;
		}

	}
	
	/**
	 * Gets the user details, it joins 
	 * #__users ju, #__{vm}_user_info u, #__{vm}_country c and #__{vm}_state s
	 * @author Max Milbers
	 * @param int $user_id user_id of the user same ID for joomla and VM
	 * @param array $fields Columns to get
	 * @param String $orderby should be ordered by $field
	 * @param String $and this is for an additional AND condition
	 * @param Boolean $nextRecord if the nextRecord should give back or only the queryResult
	 */
	 
	function get_user_details( $user_id, $fields=array(), $orderby="", $and="", $nextRecord=true ) {

		$db = new ps_DB();		
		if( empty( $fields )) {
			$selector = '*';
		}else {
			$selector = implode(",",$fields);
		}
		$q = "SELECT ".$selector." FROM (#__{vm}_user_info u , #__users ju) " .
		"LEFT JOIN #__{vm}_country c ON (u.country = c.country_2_code OR u.country = c.country_3_code) ".		
		"LEFT JOIN #__{vm}_state s ON (u.state = s.state_2_code AND s.country_id = c.country_id) ".
		"WHERE u.user_id = ".(int)$user_id." AND ju.id = ".(int)$user_id." ";
		if(!empty($and)){
			$q .= $and." ";
		}
		if(!empty($orderby)){
			$q .= "ORDER BY ".$orderby." ";
		}
		$GLOBALS['vmLogger']->info('get_user_details query '.$q);				
		$db->query($q);
		if($nextRecord){
			if( ! $db->next_record() ) {
				print "<h1>Invalid query user id: $user_id</h1>" ;
				print "<h2>Query user id: $q</h2>" ;
			return ;
			}else{
				return $db;
			}
		}else{
			return $db;
		}
	}
	
	/**
	 * Inserts or Updates the user information
	 * Attention without Validation.
	 * Important use validate_add oder validate_update.
	 * @author Max Milbers (completly rewritten
	 * @param $user_info array like $keyValues = array('email' => $emailvalue, 'last_name' => $lastname);
	 * @param int $user_id
	 * @param $and An 'AND' condition like 'AND column = value'
	 */
	function setUserInfoWithEmail( $user_info, $user_id=0, $and="" ) {
	
		$db = new ps_DB;
		
		//will probably removed later prevents form to overwrite existing data
		//Unsetting a user information is not allowed, users should write in this case a dummy
		$user_info = array_filter($user_info); 

		//Insert/Update mail
		if(array_key_exists('email',$user_info)){					
			if(!empty($user_id)){ // UPDATES EXISTING USER
				//Test if user exists in Joomla table
				$where =  'WHERE `id`="'.$user_id.'"';
				$q = 'SELECT `id` FROM #__users '.$where;
				$db->query($q);
				if($db->f('id')>0){
					$emailvalue = $user_info['email'];
					$keyValues = array('email' => $emailvalue);
					$db->buildQuery( 'UPDATE', '#__users', $keyValues, $where);
					if( $db->query() === false ) {
						$GLOBALS['vmLogger']->err('setUserInfoWithEmail UPDATE email failed for user_id '.$user_id);
						return false;
					}
				}else{		//No joomla user exists					
					$GLOBALS['vmLogger']->err('setUserInfoWithEmail THIS IS NOT SUPPOSED TO HAPPEN no joomla user found for user_id '.$user_id);
					if( vmIsJoomla( '1.5', '>=' ) ) {
						$user_id = $this->save();
					} else {
						$user_id = $this->saveUser( $user_info );
					}
					$GLOBALS['vmLogger']->err('setUserInfoWithEmail THIS IS NOT SUPPOSED TO HAPPEN no joomla user found NEW user_id '.$user_id);
				}
			}else{ // INSERT NEW USER
				if( vmIsJoomla( '1.5', '>=' ) ) {
					$user_id = $this->save();
				} else {
					$user_id = $this->saveUser( $user_info );
				}
				$GLOBALS['vmLogger']->err('setUserInfoWithEmail THIS IS NOT SUPPOSED TO HAPPEN no joomla user found NEW user_id '.$user_id);
				
			}				
		}
		unset ($user_info['email']);
		if( empty( $user_id ) ) { // INSERT NEW USER/SHOPPER
			$action = 'INSERT';
			$whereAnd = "";
		}else{
			$action = 'UPDATE';
			$whereAnd = 'WHERE `user_id`="'.$user_id.'"'.$and;
		}
		
		$db->buildQuery( $action, '#__{vm}_user_info', $user_info, $whereAnd );
		if( $db->query() === false ) {
			$GLOBALS['vmLogger']->err('setUserInfoWithEmail '.$action.' set user_info failed for user_id '.$user_id);
			return false;
		}else{
			return true;
		}
	}
	
//	/**
//	 * Inserts or Updates the user information
//	 * Attention without Validation, should only be used
//	 * Important use validate add oder validate_update
//	 * @param array $user_info
//	 * @param int $user_id
//	 */
//	function setUserInfoWithEmail( $user_info, $user_id=0, $and="" ) {
//
//		$db = new ps_DB;
//		
//		$action ="";
//		$where ="";
//		if( empty( $user_id ) ) { // INSERT NEW USER
//			$action = 'INSERT';
//			$where = "";
//		}else{
//			$action = 'UPDATE';
//			$where = 'WHERE `id`='.$user_id;
//		}
//		if(array_key_exists("email",$user_info)){
//			$emailvalue = $user_info['email'];
//			$mail = array('email' => $emailvalue);
//			unset ($user_info['email']);
//			$db->buildQuery( 'UPDATE', '#__users', $mail, $where);
//			if( $db->query() === false ) {
//				$GLOBALS['vmLogger']->err('setUserInfoWithEmail '.$action.' email failed ');
//				return false;
//			}else{
//				$db->buildQuery( $action, '#__{vm}_user_info', $user_info, ' '.$where.' '.$and );
//				if( $db->query() === false ) {
//					$GLOBALS['vmLogger']->err('setUserInfoWithEmail '.$action.' set user_info failed');
//					return false;
//				}else{
//					return true;
//				}
//			}		
//		}else{
//			$GLOBALS['vmLogger']->err('setUserInfoWithEmail email empty ');
//			return false;
//		}
		
//		if( empty( $user_id ) ) { // INSERT NEW USER
////			if(array_key_exists("email",$user_info)){
//				$emailvalue = $user_info['email'];
//				$mail = array("email" => $emailvalue);
//				unset ($user_info['email']);
//				$db->buildQuery( 'INSERT', '#__users', $mail );
//				$db->query();
////			}
//			$db->buildQuery( 'INSERT', '#__{vm}_user_info', $user_info );
//			$db->query();
//			
//		}
//		else { // UPDATE EXISTING USER
//			if(array_key_exists("email",$user_info)){
//				$emailvalue = $user_info['email'];
//				$mail = array("email" => $emailvalue);
//				unset ($user_info['email']);
//				$db->buildQuery( 'UPDATE', '#__users', $mail, 'WHERE `id`='.$user_id);
//				$db->query();
//				$GLOBALS['vmLogger']->err('$mail'.$emailvalue.' $user_id '.$user_id);
//			} else{
//				$GLOBALS['vmLogger']->err('setUserInfoWithEmail email empty ');
//			}
//			$db->buildQuery( 'UPDATE', '#__{vm}_user_info', $user_info, 'WHERE `user_id`='.$user_id.' '.$and );
//			if( $db->query() === false ) {
//				return false;
//			}else{
//				return true;
//			}
//		}
//	}
	
	/**
	 * Logs in a customer
	 *
	 * @param unknown_type $username
	 * @param unknown_type $password
	 */
	function login($username, $password) {
		//not used
	}
	/**
	 * Logs out a customer from the store
	 *
	 */
	function logout($complete_logout=true) {
		global $auth, $sess, $mainframe, $page;
		$auth = array();
		$_SESSION['auth'] = array();
		if( $complete_logout ) {
			$mainframe->logout();
		}
		vmRedirect($sess->url('index.php?page='.HOMEPAGE, true, false));
	}
}

?>
