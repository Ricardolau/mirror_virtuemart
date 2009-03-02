<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
*
* @version $Id$
* @package VirtueMart
* @subpackage classes
* @copyright Copyright (C) 2004-2009 VirtueMart Dev Team - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/


class ps_vendor {
	var $_key = 'vendor_id';
	var $_table_name = '#__{vm}_vendor';
	
		/**************************************************************************
	** name: get_vendor_id_by_user_id
	** created by: jep completly changed by Max Milbers
	** description:
	** parameters:
	** returns:
	***************************************************************************/
	function get_vendor_id_by_user_id(&$user_id) {				
		if(empty ($user_id)) return ;
//		global $db;
		$db = new ps_DB();
		/* Test if user has a vendor_Id*/
		$q  = 'SELECT `vendor_id` FROM  `#__{vm}_auth_user_vendor` WHERE `user_id`="' . $user_id .'" ';
		$db->query($q);
		$vendor_id = $db->f('vendor_id');
		unset($db);
		
		return $vendor_id;
		
	}

	/**
	* name: get_user_id_by_vendor_id
	* @author Max Milbers
	* @param ps_DB $db, int $vendor_id
	* returns int $user_id
	*/
	function get_user_id_by_vendor_id(&$vendor_id) {
		if(empty ($vendor_id)) return ;
//		global $db;	
		$db = new ps_DB();
		$q = 'SELECT `user_id` FROM `#__{vm}_auth_user_vendor` WHERE `vendor_id`="'.$vendor_id.'" ';
		$db->query( $q );
		$db->next_record();
		$user_id = $db->f("user_id");
		unset($db);
		return $user_id;
	}
	
	/**
	* name: get_vendor_email_by_nickname
	* @author Max Milbers
	* @param int 
	* returns String $email
	*/
	
	function get_vendor_email_by_nickname(&$nickname){
		if(empty ($nickname)) return ;
//		global $db;
		$db = new ps_DB();
		$q  = 'SELECT `#__users`.`email` FROM  `#__users` WHERE `#__users`.`username`= "'.$nickname.'" ';
				
		$db->query($q);
		$email = $db->f("email");
		$GLOBALS['vmLogger']->info('get_vendor_email_by_nickname '.$email.' und $nickname: '.$nickname);
		unset($db);
		return $email;
	}
	
	/**
	 * Return the name of vendor $id
	 *
	 * @param int $id
	 * @return string
	 */
	function getVendorName( $id ) {

		$db = new ps_DB;
		$q = 'SELECT vendor_name FROM #__{vm}_vendor WHERE vendor_id=`'.(int)$id.'`';
		$db->query($q);
		$db->next_record();
		unset($db);
		return $db->f("vendor_name");

	}
	
	/**
	* name: get_logged_vendor
	* Checks which vendor_id has the just logged in user.
	* @author Max Milbers
	* @param int 
	* returns int $vendor_id
	*/	
	function get_logged_vendor(){
		global $_SESSION;
		$user_id = $_SESSION['auth']["user_id"];
		if(isset($user_id)){
			$vendor_id = ps_vendor::get_vendor_id_by_user_id($user_id);
		}else{
			echo('$user_id empty, no logged User');
			$GLOBALS['vmLogger']->err('$user_id empty, no logged User');
		}
		return $vendor_id;
	}
	
	/**
	 * Retrieves a DB object with the recordset of the specified vendor
	 * and the country it is assigned to    
	 * completly rewritten by Max Milbers
	 * @author Max Milbers
	 * @static 
	 * @param int $vendor_id
	 * @return ps_DB
	 */

	function get_vendor_details($vendor_id) {
		$db = new ps_DB();		
		$user_id = ps_vendor::get_user_id_by_vendor_id($vendor_id);
		if (empty($user_id)) {
				$GLOBALS['vmLogger']->err( 'Failure in Database no user_id for vendor_id '.$vendor_id.' found' );
				return;
		}else{
			$GLOBALS['vmLogger']->debug( 'get_vendor_details user_id for vendor_id found' );
		}
		//Importantlist could be used later plz dont delete
//		$q = "SELECT vendor_id, vendor_nick, vendor_min_pov,vendor_name,vendor_store_name,vendor_full_image, vendor_freeshipping, ";
//		$q .= "	address_1,address_2, vendor_url, city, state, country, title, last_name, first_name, middle_name, phone_1, phone_2, fax, email, ";
//		$q .= "zip, vendor_phone, vendor_store_desc, vendor_currency, vendor_currency_display_style,
//					vendor_accepted_currencies, vendor_address_format, vendor_date_format ";

		$q   = 'SELECT * FROM (`#__{vm}_vendor` v, `#__{vm}_user_info` u) 
				LEFT JOIN #__users ju ON (ju.id = u.user_id) 
				LEFT JOIN #__{vm}_country c ON (u.country=c.country_2_code OR u.country=c.country_3_code) 	
				LEFT JOIN #__{vm}_state s ON (u.state=s.state_2_code AND s.country_id=c.country_id) 
				WHERE `v`.`vendor_id`='.(int)$vendor_id.' AND `u`.`user_id`='.$user_id.' ';
						
		$db->query($q);
		$db->next_record();

		return $db;
	}
	
		/**
	 * Retrieves a DB object with the recordset of the specified fields (as array)
	 * of vendor_id and ordered by lastparam 
	 * If no orderby is need just set "" 
	 * the country the vendor is assigned to    
	 * 
	 * @author Max Milbers
	 * @static 
	 * @param int $vendor_id
	 * @param array $fields  "" = Select *
	 * @param String $orderby to order by, just the columnname Without 'ORDER BY '
	 * @return ps_DB
	 */
	 
	function get_vendor_fields($vendor_id, $fields=array(), $oderby="") {
		
		$db = new ps_DB();
		$usertable= false;
		$user_id = ps_vendor::get_user_id_by_vendor_id($vendor_id);
		if (empty($user_id)) {
				$GLOBALS['vmLogger']->err( 'Failure in Database no user_id for vendor_id '.$vendor_id.' found' );
				return;
		}else{
			$GLOBALS['vmLogger']->debug( 'get_vendor_details user_id for vendor_id found' );
		}
		if( empty( $fields )) {
			$fieldstring = '*';
			$usertable = true;
		}
		else {
			$allowedStrings = array('vendor_id', 'vendor_nick', 'vendor_min_pov','vendor_name','vendor_store_name',
			'vendor_full_image', 'vendor_freeshipping','address_1','address_2','vendor_url','city','state', 
			'country', 'title', 'last_name', 'first_name', 'middle_name', 'phone_1',
			'phone_2', 'fax', 'email','zip', 'vendor_phone', 'vendor_store_desc', 'vendor_currency', 
			'vendor_currency_display_style','vendor_accepted_currencies','vendor_address_format',
			'vendor_date_format');
	
			foreach($fields as $field){

				if(!in_array($field, $allowedStrings)){
					echo( 'get_vendor_fields: field not known: '.$field );
					$GLOBALS['vmLogger']->err( 'get_vendor_fields: field not known: '.$field );	
					return;
				}
			}
			
			$fieldstring = '`'. implode( '`,`', $fields ) . '`';
			if(empty($fieldstring)){
				echo( 'get_vendor_fields implode returns empty String: '.$fields[0] );
				return;
			}	
		}    
		
		$q = 'SELECT '.$fieldstring.' FROM (#__{vm}_vendor v, #__{vm}_user_info u) ';
		if($usertable){
			$q .= 'LEFT JOIN #__users ju ON (ju.id = u.user_id) ';
		}	
		$q .= 'LEFT JOIN #__{vm}_country c ON (u.country=c.country_2_code OR u.country=c.country_3_code) 	
				LEFT JOIN #__{vm}_state s ON (u.state=s.state_2_code AND s.country_id=c.country_id) 
				WHERE v.vendor_id = '.(int)$vendor_id.' AND u.user_id = '.(int)$user_id.' ';
		if(!empty($orderby)){
			$q .= 'ORDER BY '.$orderby.' ';
		}				
		$db->query($q);
		
		if( ! $db->next_record() ) {
			print "<h1>Invalid query vendor_id: $vendor_id und user_id: $user_id</h1>" ;
			return ;
		}else{
			return $db;
		}
	}
	
		/**
	 * Validates the Input Parameters onBeforeVendorAddUpdate
	 *
	 * @param array $d
	 * @return boolean
	 */
	function validate_addUpdateVendor(&$d) {
		global $vmLogger, $perm;
		
		require_once(CLASSPATH . 'imageTools.class.php' );
		if (!vmImageTools::validate_image($d,'vendor_thumb_image','vendor')) {
			return false;
		}
		if (!vmImageTools::validate_image($d,'vendor_full_image','vendor')) {
			return false;
		}

		// convert all "," in prices to decimal points.
		if (stristr($d['vendor_min_pov'],',')) {
			$d['vendor_min_pov'] = str_replace(',', '.', $d['vendor_min_pov']);
		}
		
		if (empty($d['vendor_nick'])) {
			if($perm->check( 'admin' )){
				$vendor_id = 1;
				$d['vendor_id'] = $vendor_id;
				$user_id = ps_vendor::get_user_id_by_vendor_id($vendor_id);
				
				require_once(CLASSPATH. 'ps_user.php');
				$email = ps_user::get_juser_email_by_user_id($user_id);
				$d['email'] = $email;
			}else{
				$vmLogger->err( 'You must enter a nickname for the vendor.' );
				return False;
			}		
		}else{
			require_once(CLASSPATH. 'ps_user.php');
			$userid = ps_user::get_user_id_by_nickname($d['vendor_nick']);
			if(empty($userid)){
				$vmLogger->err( 'You must enter a validate nickname for the vendor.' );
				return false;			
			}
			
			$vendor_id = ps_vendor::get_vendor_id_by_user_id($userid);
			if(empty($vendor_id)){
				$vmLogger->fatal( 'The vendor_id couldnt be found serious Database problem' );
				return False;
			}else{
				if($vendor_id == 1){
					if(!$perm->check( 'admin' )){
						$vmLogger->error( 'You are not allowed to update the store');				
						return false;
					}	
				}else{
					$d['vendor_id'] = $vendor_id;
					$vmLogger->debug( ' vendorAdd  vendor_id '.$vendor_id);
				}		
			}		
		}
		
		if (!$d['email']) {
			$email = ps_vendor::get_vendor_email_by_nickname($d['vendor_nick']);
			if(empty($email)){
				$vmLogger->err( 'You must enter an email address for the vendor contact.');
				return false;			
			}else {
				$d['email'] = $email;
			}
		}
		if( empty( $d['country'])) {
			$vmLogger->err('You must specify a country for this vendor/store');
			return false;
		}
		if (!vmValidateEmail($d['email'])) {
			$vmLogger->err( 'Please provide a valide email address for the vendor contact. '.$d['email'] );
			return False;
		}
		
		if (!$d['vendor_name']) {
			$d['vendor_name'] = $d['vendor_nick'];
		}
		return True;

	}
	
	/**
	 * Validates the Input Parameters onBeforeVendorAdd
	 *
	 * @param array $d
	 * @return boolean
	 */
	function validate_add(&$d) {
		
		return $this->validate_addUpdateVendor($d);
		
//		global $vmLogger;
//		
//		$db = new ps_DB;
//		require_once(CLASSPATH . 'imageTools.class.php' );
//		
//		if (!vmImageTools::validate_image($d,"vendor_thumb_image","vendor")) {
//			return false;
//		}
//		if (!vmImageTools::validate_image($d,"vendor_full_image","vendor")) {
//			return false;
//		}
//		if (!$d["vendor_nick"]) {
//			$vmLogger->err( 'You must enter a nickname for the vendor.' );
//			return False;
//		}else{
//			require_once(CLASSPATH. "ps_user.php");
//			$userid = ps_user::get_user_id_by_nickname($d["vendor_nick"]);
//			if(empty($userid) ){
//				$vmLogger->err( 'You must enter a validate nickname for the vendor.' );
//				return false;			
//			}
//			
//			$vendor_id = ps_vendor::get_vendor_id_by_user_id($userid);
//			$vmLogger->info( 'ps_vendor validate_add $userid '.$userid.'  '.$vendor_id);
//			if($vendor_id!=0){
//				$vmLogger->err( 'The nickname is already a vendor.' );
//				return False;
//			}else{
//				$d["vendor_id"] = $vendor_id;
//				$vmLogger->debug( ' vendorAdd  vendor_id '.$vendor_id);
//			}		
//		}
//		
//		if (!$d["email"]) {
//			$email = ps_vendor::get_vendor_email_by_nickname($d["vendor_nick"]);	
//			if(empty($email)){
//				$vmLogger->err( 'You must enter an email address for the vendor contact.');
//				return false;			
//			}else {
//				$d["email"] = $email;
//			}
//		}
//		if (!vmValidateEmail($d["email"])) {
//			$vmLogger->err( 'Please provide a valide email address for adding the vendor contact. '.$d["email"] );
//			return False;
//		}
//		
//		if (!$d["vendor_name"]) {
//			$d["vendor_name"] = $d["vendor_nick"];
////			$vmLogger->err( 'You must enter a Name for the vendor.' );
////			return False;
//		}
//		
//		return True;

	}
	/**
	 * Validates the Input Parameters onBeforeVendorUpdate
	 *
	 * @param array $d
	 * @return boolean
	 */
	function validate_update(&$d,&$db) {
		
		return ps_user::validate_addUpdateVendor($d);
		
//		global $vmLogger, $perm;
//		require_once(CLASSPATH . 'imageTools.class.php' );
//		if (!vmImageTools::validate_image($d,"vendor_thumb_image","vendor")) {
//			return false;
//		}
//		if (!vmImageTools::validate_image($d,"vendor_full_image","vendor")) {
//			return false;
//		}
//
//		// convert all "," in prices to decimal points.
//		if (stristr($d["vendor_min_pov"],",")) {
//			$d["vendor_min_pov"] = str_replace(',', '.', $d["vendor_min_pov"]);
//		}
//		
//		if (empty($d["vendor_nick"])) {
//			if($perm->check( 'admin' )){
//				$vendor_id = 1;
//				$d["vendor_id"] = $vendor_id;
//				$user_id = ps_vendor::get_user_id_by_vendor_id($vendor_id);
//				
//				require_once(CLASSPATH. "ps_user.php");
//				$email = ps_user::get_juser_email_by_user_id($user_id);
//				$d["email"] = $email;
//				if (!vmValidateEmail($d["email"])) {
//					$vmLogger->err( 'Please provide a valide email address for updating the vendor contact.'.$d["email"] );
//					return false;
//				}else{
//					return true;
//				}
//			}else{
//				$vmLogger->err( 'You must enter a nickname for the vendor.' );
//				return False;
//			}		
//		}else{
//			require_once(CLASSPATH. "ps_user.php");
//			$userid = ps_user::get_user_id_by_nickname( $d["vendor_nick"]);
//			if(empty($userid)|| $userid==0 ){
//				$vmLogger->err( 'You must enter a validate nickname for the vendor.' );
//				return false;			
//			}
//			
//			$vendor_id = ps_vendor::get_vendor_id_by_user_id($userid);
//			if(empty($vendor_id)){
//				$vmLogger->fatal( 'The vendor_id couldnt be found serious Database problem' );
//				return False;
//			}else{
//				if($vendor_id == 1){
//					if(!$perm->check( 'admin' )){
//						$vmLogger->error( 'You are not allowed to update the store');				
//						return false;
//					}	
//				}else{
//					$d["vendor_id"] = $vendor_id;
//					$vmLogger->debug( ' vendorAdd  vendor_id '.$vendor_id);
//				}		
//			}		
//		}
//			
//		if (!$d["email"]) {		
//			$email = ps_vendor::get_vendor_email_by_nickname($d["vendor_nick"]);
////			$vmLogger->err( 'get_vendor_email_by_nickname '.$email );
//			if(empty($email)){
//				$vmLogger->err( 'You must enter an email address for the vendor contact.');
//				return false;			
//			}else {
//				$d["email"] = $email;
//			}
//		}
//		
//		if (!vmValidateEmail($d["email"])) {
//			$vmLogger->err( 'Please provide a valide email address for the vendor contact.'.$d["email"] );
//			return False;
//		}
//		
//		if (!$d["vendor_name"]) {
//			$d["vendor_name"] = $d["vendor_nick"];
////			$vmLogger->err( 'You must enter a username for the vendor.' );
////			return False;
//		}
//		return True;
	}
	

	/**
	 * Validates the Input Parameters onBeforeVendorDelete
	 *
	 * @param int $vendor_id
	 * @param array $d
	 * @return boolean
	 */
	function validate_delete( $vendor_id, &$d) {
		global $vmLogger;
		$db = new ps_DB;

//		if (!$d["vendor_id"]) {
		if (empty($vendor_id)) {
			$vmLogger->err( 'Please select a vendor to delete.' );
			return False;
		}

		$q = "SELECT vendor_id FROM #__{vm}_product where vendor_id='$vendor_id'";
		$db->query($q);
		if ($db->next_record()) {
			$vmLogger->err( 'This vendor still has products. Delete all products first.' );
			return False;
		}

		/* Get the image filenames from the database */
		$db = new ps_DB;
		$q  = "SELECT vendor_thumb_image,vendor_full_image " .
				"FROM #__{vm}_vendor WHERE vendor_id='$vendor_id'";
		$db->query($q);
		$db->next_record();
		
		require_once(CLASSPATH . 'imageTools.class.php' );
		/* Validate vendor_thumb_image */
		$d["vendor_thumb_image_curr"] = $db->f("vendor_thumb_image");
		$d["vendor_thumb_image_name"] = "none";
		if (!vmImageTools::validate_image($d,"vendor_thumb_image","vendor")) {
			return false;
		}

		/* Validate vendor_full_image */
		$d["vendor_full_image_curr"] = $db->f("vendor_full_image");
		$d["vendor_full_image_name"] = "none";
		if (!vmImageTools::validate_image($d,"vendor_full_image","vendor")) {
			return false;
		}
		unset($db);
		return True;
	}

	/**
	 * Inserts or Updates the vendor information
	 * Attention without Validation.
	 * Important use validate_add oder validate_update.
	 * @author Max Milbers
	 * @param $d array like $keyValues = array('email' => $emailvalue, 'last_name' => $lastname);
	 * @param int $vendor_id
	 * @param $and An 'AND' condition like 'AND column = value'
	 */
	function setVendorInfo(&$d, $vendor_id=0, $and=""){
		
		$db = new ps_DB;
		
		$timestamp = time();
		
		//Split the array $d in two, because tha data is on two different tables
		$fields = array('vendor_name' => $d["vendor_name"],
				'vendor_nick' => $d["vendor_nick"],
				'vendor_phone' => $d["vendor_phone"],
				'vendor_store_name' => $d["vendor_store_name"],
				'vendor_store_desc' => $d["vendor_store_desc"],
//				'vendor_category_id' => $d["vendor_category_id"],
//				'vendor_image_path' => $d["vendor_image_path"],
				'vendor_thumb_image' => $d["vendor_thumb_image"],
				'vendor_full_image' => $d["vendor_full_image"],
				'vendor_currency' => $d["vendor_currency"],
				'vendor_url' => $d["vendor_url"],
				'vendor_terms_of_service' => $d["vendor_terms_of_service"],
				'vendor_min_pov' => $d["vendor_min_pov"],
				'vendor_currency_display_style' => $d["display_style"],
				'vendor_freeshipping' => $d["vendor_freeshipping"],
				'vendor_accepted_currencies' => implode( ',', $d["vendor_accepted_currencies"] ),
//				'vendor_address_format' => $d["vendor_address_format"],
//				'vendor_date_format' => $d["vendor_date_format"]
				);
				
		//I think this should stay for Add and Update and deleted in the array init above
		//there are more variables to handle like this to prevent notices
		if (!empty($d["vendor_category_id"])) {
			$fields['vendor_category_id'] = $d["vendor_category_id"];
		}
		if (!empty($d["vendor_image_path"])) {
			$fields['vendor_image_path'] = $d["vendor_image_path"];
		}
		if (!empty($d["vendor_address_format"])) {
			$fields['vendor_address_format'] = $d["vendor_address_format"];
		}
		if (!empty($d["vendor_date_format"])) {
			$fields['vendor_date_format'] = $d["vendor_date_format"];
		}
		
		$fieldsU = array(
						'last_name' => $d["last_name"],
						'first_name' => $d["first_name"],
						'middle_name' => $d["middle_name"],
						'title' => $d["title"],
						'phone_1' => $d["phone_1"],
						'phone_2' => $d["phone_2"],
						'fax' => $d["fax"],
						'email' => $d["email"],
						'address_1' => $d["address_1"],
						'address_2' => $d["address_2"],
						'city' => $d["city"],
						'country' => $d["country"],
						'zip' => $d["zip"],
						'cdate' => $timestamp,
						'mdate' => $timestamp
						);
		if (!empty($d["state"])) {
			$fields['state'] = $d["state"];
		}

		
		//Setting fields empty is senseless people should use a dummy,... makes the life for devs a lot easier
		$fields = array_filter($fields);
		$fieldsU = array_filter($fieldsU);
		
		if( empty( $vendor_id ) ) { // INSERT NEW USER/SHOPPER
			$action = 'INSERT';
			$whereAnd = "";
			$add = true;
		}else{
			$action = 'UPDATE';
			$whereAnd = 'WHERE `vendor_id`="'.$vendor_id.'"'.$and;
			$add = false;
		}
		
		$db->buildQuery( $action, '#__{vm}_vendor', $fields, $whereAnd );
		if( $db->query() === false ) {
			$GLOBALS['vmLogger']->err('setVendorInfo '.$action.' set user_info failed for user_id '.$vendor_id);
			return false;
		}else{
			if($add){
				// Get the assigned vendor_id //
				$_REQUEST['vendor_id'] = $db->last_insert_id();
				require_once(CLASSPATH. "ps_user.php");		
				$userid = ps_user::get_user_id_by_nickname($d["vendor_nick"]);

			} else {
				$user_id = ps_vendor::get_user_id_by_vendor_id($d["vendor_id"]);
			}
			
			if(!empty($userset)){
				//Validation was already done before
				$userset = ps_user::setUserInfoWithEmail($fieldsU,$userid);
				if($userset==0){
					$vmLogger->err( $VM_LANG->_('VM_VENDOR_ADDING_FAILED',false) );
					ps_vendor::delete_vendor_record( $_REQUEST['vendor_id'], $d ); 
					return false;
				}
			}else{
				return false;
			}
			$GLOBALS['vmLogger']->info('The Vendor has been '.($action=='INSERT'?'added':'updated'));
		}
		
	}
	
	/**
	 * Add/Update a User, user information of shopper or vendor
	 * 
	 * @author Max Milbers
	 * @param array $d
	 * @return boolean
	 */
	function addUpdateVendor(&$d) {
	
		global $vendor_currency,$vmLogger,$VM_LANG;
		$db = new ps_DB;
		

		if (!$this->validate_add($d)) {
			return False;
		}
		
		if (!vmImageTools::process_images($d)) {
			return false;
		}
		
		// Update to insert is it important that it is only in the update func? by Max Milbers
		foreach ($d as $key => $value) {
			if (!is_array($value))
			$d[$key] = addslashes($value);
		}
		// Update end
		$d['display_style'][1] = ps_vendor::checkCurrencySymbol( $d['display_style'][1] );		
		$d['display_style'] = implode("|", $d['display_style'] );
		
		if( empty( $d['vendor_accepted_currencies'] )) {
			$d['vendor_accepted_currencies'] = array( $vendor_currency );
		}

		
		//Decide if Update or Add
		$userid = ps_user::get_user_id_by_nickname($d["vendor_nick"]);
		$vendor_id = $this -> get_vendor_id_by_user_id($userid);
	
		if($this -> setVendorInfo($d, $vendor_id)){
			$vmLogger->err( 'setVendorInfo failed' );
			return false;
		}
		
		//Perform an ADD
		if( empty( $vendor_id ) ){
			$q  = "SELECT id FROM  #__users WHERE username = '".$d["vendor_nick"]."'";
			$db->query($q);
			$userid = $db->f('id');
			$vendor_id = $_REQUEST['vendor_id'];
			$GLOBALS['vmLogger']->debug("ps_vendor Add vendor_id= '".$vendor_id."' user_id='".$userid."'");
			if (isset($userid)) {

				$user_update = 'INSERT INTO `#__{vm}_auth_user_vendor` (`vendor_id`,`user_id`) VALUE ("'.$vendor_id.'", "'.$userid.'")';
				$db->query($user_update);
				$user_update = 'UPDATE `#__{vm}_user_info` SET `user_is_vendor` = "1" WHERE `user_id`="'.$userid.'"';
				$db->query($user_update);
			}else {
				$vmLogger->err( 'No matching Virtuemart shopper found' );
			}
			
			/* Insert default- shopper group */
			/* What is the sense behind it? Every shopper is related to one vendor,
			 * but what happens if one user is buying from different vendors? In which group is the user than?
			 * If every vendors has its own products and his own customers the shop could be realized with many 
			 * parallel installations. The trick with multivendor is that the customers dont have any extra effort 
			 * if they buy from different vendors.
			 * That a vendor has the possibilty to get a list of his customers makes a bit sense, but is very
			 * unimportant, very important is a list that the vendor can see all his products, orders, the money he should
			 * get by the shop and the commission he has to pay.   by Max Milbers
			 * 		 */
			$q = "INSERT INTO #__{vm}_shopper_group (";
			$q .= "`vendor_id`,";
			$q .= "`shopper_group_name`,";
			$q .= "`shopper_group_desc`,`default`) VALUES ('";
			$q .= $d["vendor_id"] . "',";
			$q .= "'-default-',";
			$q .= "'Default shopper group for ".$d["vendor_name"]."','1')";
			$db->query($q);
			$GLOBALS['vmLogger']->info($VM_LANG->_('VM_VENDOR_ADDED'));
		}else{  //UPDATE
			if( $d['vendor_id'] == 1 ) {
			$GLOBALS['vmLogger']->info($VM_LANG->_('VM_STORE_UPDATED'));
			} else {
			$GLOBALS['vmLogger']->info($VM_LANG->_('VM_VENDOR_UPDATED'));
			}
		}	
		unset($db);
		return True;	
	}
	
	/**
	 * Adds a Vendor Record
	 * Only for Legacy, use direct addUpdateVendor($d)
	 * 
	 * @param array $d
	 * @return boolean
	 */
	function add(&$d) {		
		return $this -> addUpdateVendor($d);
	}
	
	/**
	 * Updates a Vendor (and the Store) Record
	 * Only for Legacy, use direct addUpdateVendor($d)
	 * 
	 * @param array $d
	 * @return boolean
	 */
	function update(&$d) {	
		return $this -> addUpdateVendor($d);
	}

	/**************************************************************************
	* name: delete()
	* created by: unknown changed by Max Milbers
	* description:
	* parameters:
	* returns:
	**************************************************************************/
	
	/**
	* Controller for Deleting Records.
	*/
	function delete(&$d) {
		global $vars;
		$record_id = $vars["vendor_id"];
//		global $vmLogger, $vars;

		//This was not working and there is no possibilty in the gui to delete more than one vendor at once
//		if( is_array( $record_id)) {
//			foreach( $record_id as $record) {
//				if( !$this->delete_vendor_record( $record, $d ))
//				return false;
//			}
//			return true;
//		}
//		else {
			return $this->delete_vendor_record( $record_id, $d );
//		}
	}
	/**
	* Deletes one Record.
	* @author unknown changed by Max Milbers
	*/
	function delete_vendor_record( $vendor_id, &$d ) {
		global $vmLogger;
		$db = new ps_DB();
		$vmLogger->info( "'delete_record $vendor_id '.$vendor_id" );
		if (!$this->validate_delete( $vendor_id, $d)) {
			$vmLogger->err( 'Deleting of the vendor couldnt be done' );
			return False;
		} 

		/* Delete Image files */
		if (!vmImageTools::process_images($d)) {
			$vmLogger->err( 'Deleting of the vendor couldnt be done' );
			return false;
		}

		$userid = ps_vendor::get_user_id_by_vendor_id($vendor_id);
		
		$user_update = 'UPDATE `#__{vm}_user_info` SET `user_is_vendor` = "0" WHERE `user_id`="'.$userid.'"';
		$db->query($user_update);
		
		$q = 'DELETE FROM `#__{vm}_auth_user_vendor` where `vendor_id`="'.$vendor_id.'"';
		$db->query($q);
		
		$q = 'DELETE FROM `#__{vm}_vendor` where `vendor_id`="'.$vendor_id.'"';
		$db->query($q);
		unset($db);
		return True;
	}
	
	
	/**
	 * 		state_id 	country_id 	state_name 	state_3_code 	state_2_code
	 		1 			223 		Alabama 	ALA 			AL
	 		
	 		
	 		country_id 	zone_id 	country_name 	country_3_code 	country_2_code
			1 			1 			Afghanistan 	AFG 			AF
	 */
	

	/**
	 * Checks a currency symbol wether it is a HTML entity.
	 * When not and $convertToEntity is true, it converts the symbol
	 *
	 * @param string $symbol
	 */
	function checkCurrencySymbol( $symbol, $convertToEntity=true ) {
		
		$symbol = str_replace('&amp;', '&', $symbol );
		
		if( substr( $symbol, 0, 1) == '&' && substr( $symbol, strlen($symbol)-1, 1 ) == ';') {
			return $symbol;
		}
		else {
			if( $convertToEntity ) {
				$symbol = htmlentities( $symbol, ENT_QUOTES, 'utf-8' );
				
				if( substr( $symbol, 0, 1) == '&' && substr( $symbol, strlen($symbol)-1, 1 ) == ';') {
					return $symbol;
				}		
				// Sometimes htmlentities() doesn't return a valid HTML Entity
				switch( ord( $symbol ) ) {
					case 128:
					case 63:
						$symbol = '&euro;';
						break;
				}
						
			}
		}
		
		return $symbol;
	}
	
	/**
	 * Retrieves the name of a vendor specified by $vendor_id
	 *
	 * @param int $vendor_id
	 * @param int $product_id
	 * @return String
	 */
	function get_name($vendor_id,$product_id="") {

		// Returns the vendor name corresponding to a vendor_id;
		$db = new ps_DB;

		if ($vendor_id) {
			$q = "SELECT vendor_name FROM #__{vm}_vendor WHERE vendor_id = '$vendor_id'";
		} elseif ($product_id) {
			$q  = "SELECT vendor_name FROM #__{vm}_product,#__{vm}_vendor ";
			$q .= "WHERE product_id = '$product_id' ";
			$q .= "AND #__{vm}_product.vendor_id = #__{vm}_vendor.vendor_id ";
		} else {
			/* ERROR: No arguments were specified. */
			return 0;
		}

		$db->query($q);
		$db->next_record();
		return $db->f("vendor_name");
	}




	/**
	 * Prints a drop-down list of vendor names and their ids.
	 *
	 * @author unknown changed by Max Milbers
	 * 
	 * @param int $vendor_id
	 */
	function list_vendor($vendor_id='1') {

		$db = new ps_DB;

		$q = "SELECT vendor_id,vendor_name FROM #__{vm}_vendor ORDER BY vendor_name";
		$db->query($q);
		$db->next_record();

		// If only one vendor do not show list
		if ($db->num_rows() == 1) {
			echo '<input type="hidden" name="vendor_id" value="'.$db->f("vendor_id").'" />';
			echo $db->f("vendor_name");
		}
		elseif($db->num_rows() > 1) {
			$db->reset();
			$array = array();
			while ($db->next_record()) {
				$array[$db->f("vendor_id")] = $db->f("vendor_name");
			}
			echo ps_html::selectList('vendor_id', $vendor_id, $array );
		}
		unset($db);
	}

	/**
	 * Prints a drop-down list of vendor names and their ids.
	 * But not if the user is only a normal vendor. 
	 * This is used in product.product_form.php
	 * @author Max Milbers
	 * @param int $vendor_id the vendorID of the logged in user
	 */
	function list_ornot_vendor($vendor_id='1', $product_vendor_id) {

		$db = new ps_DB;
		global $perm;
		
		// If mainvendor or adminrights show whole list
		if($vendor_id==1 || $perm->check( 'admin' )){
			$q = "SELECT vendor_id,vendor_name FROM #__{vm}_vendor ORDER BY vendor_name";
			$db->query($q);
			$db->next_record();
			if ($db->num_rows() == 1) {
				echo '<input type="hidden" name="vendor_id" value="'.$db->f("vendor_id").'" />';
				echo $db->f("vendor_name");
			}
			elseif($db->num_rows() > 1) {
				$db->reset();
				$array = array();
				while ($db->next_record()) {
					$array[$db->f("vendor_id")] = $db->f("vendor_name");
				}
				echo ps_html::selectList('vendor_id', $product_vendor_id, $array );
			}
		}else{
			$db = ps_vendor::get_vendor_fields($product_vendor_id, array("vendor_id","vendor_name"),"");
			echo '<input type="hidden" name="vendor_id" value="'.$db->f("vendor_id").'" />';
			echo $db->f("vendor_name");
			
		}

	}
	
	/**
	 * Print the name of vendor $vend_id
	 *
	 * @param int $vend_id
	 */
	function show_vendorname($vend_id) {

		echo $this->getVendorName( $vend_id );

	}



	/**************************************************************************
	** name: get_field   DANGEROUS function need to rewritten
	** created by: pablo
	** description:
	** parameters:
	** returns:
	***************************************************************************/
	function get_field($vendor_id, $field_name) {
		$db = new ps_DB;

		$q = "SELECT $field_name FROM #__{vm}_vendor WHERE vendor_id='$vendor_id'";
		$db->query($q);
		if ($db->next_record()) {
			return $db->f($field_name);
		}
		else {
			return False;
		}
	}


	/**************************************************************************
	** name: show_image()
	** created by: pablo
	** description:  Shows the image send in the $image field.
	**               $args are appended to the IMG tag.
	** parameters:
	** returns:
	***************************************************************************/
	function show_image($image, $args="") {

		$ps_vendor_id = $args;
		
		$url = IMAGEURL;
		$path = ps_vendor::get_field($ps_vendor_id,"vendor_image_path");
		if (!empty($path))
		$url = str_replace( "shop_image/", $path, $url );

		$url .= "vendor/";
		$url .= $image;
		echo "<img src=\"".$url ."\" ". $args ." />\n";

		return True;
	}
	/**
	* @param string The vendor_currency_display_code
	*   FORMAT: 
    1: id, 
    2: CurrencySymbol, 
    3: NumberOfDecimalsAfterDecimalSymbol,
    4: DecimalSymbol,
    5: Thousands separator
    6: Currency symbol position with Positive values :
									// 0 = '00Symb'
									// 1 = '00 Symb'
									// 2 = 'Symb00'
									// 3 = 'Symb 00'
    7: Currency symbol position with Negative values :
									// 0 = '(Symb00)'
									// 1 = '-Symb00'
									// 2 = 'Symb-00'
									// 3 = 'Symb00-'
									// 4 = '(00Symb)'
									// 5 = '-00Symb'
									// 6 = '00-Symb'
									// 7 = '00Symb-'
									// 8 = '-00 Symb'
									// 9 = '-Symb 00'
									// 10 = '00 Symb-'
									// 11 = 'Symb 00-'
									// 12 = 'Symb -00'
									// 13 = '00- Symb'
									// 14 = '(Symb 00)'
									// 15 = '(00 Symb)'
    	EXAMPLE: ||&euro;|2|,||1|8
	* @return string
	*/
	function get_currency_display_style( $style ) {
	
		$array = explode( "|", $style );
		$display = Array();
		$display["id"] = @$array[0];
		$display["symbol"] = @$array[1];
		$display["nbdecimal"] = @$array[2];
		$display["sdecimal"] = @$array[3];
		$display["thousands"] = @$array[4];
		$display["positive"] = @$array[5];
		$display["negative"] = @$array[6];
		return $display;
	}
	/**
	 * 
	 * MUST-TO , functions calls need to be rewritten !!!
	 * mosttime $vendor_id is set to 1;
	 * Returns the formatted Store Address
	 *	@author someone, completly rewritten by Max Milbers
	 * @param boolean $use_html
	 * @return String
	 */
	function formatted_store_address( $use_html=false, $vendor_id ) {
		
		if(empty($vendor_id)){
			$GLOBALS['vmLogger']->err( 'formatted_store_address no vendor_id given' );
			return;
		}
		
		$db = ps_vendor::get_vendor_details($vendor_id);
		
		$address_details['name'] = $db->f("vendor_store_name");;
		$address_details['address_1'] = $db->f("address_1");
		$address_details['address_2'] = $db->f("address_2");
		$address_details['state'] = $db->f("state");
		$address_details['state_name'] = $db->f("state_name");
		$address_details['city'] = $db->f("city");
		$address_details['zip'] = $db->f("zip");
		$address_details['country'] = $db->f("country");
		$address_details['phone'] = $db->f("vendor_phone");
		$address_details['email'] = $db->f("email");
		$address_details['fax'] = $db->f("fax");
		$address_details['url'] = $db->f("url");
		
		return vmFormatAddress( $address_details, $use_html );
	}
}
?>
