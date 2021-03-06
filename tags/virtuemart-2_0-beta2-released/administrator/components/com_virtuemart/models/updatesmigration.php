<?php
/**
*
* Data module for updates and migrations
*
* @package	VirtueMart
* @subpackage updatesMigration
* @author Max Milbers, RickG
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* @version $Id$
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

// Load the model framework
jimport( 'joomla.application.component.model');
if(!class_exists('VmConnector')) require(JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'helpers'.DS.'connection.php');

/**
 * Model class for updates and migrations
 *
 * @package	VirtueMart
 * @subpackage updatesMigration
 * @author Max Milbers, RickG
 */
class VirtueMartModelUpdatesMigration extends JModel {

    /**
     * Checks the VirtueMart Server for the latest available Version of VirtueMart
     *
     * @return string Example: 1.1.2
     */
    function getLatestVersion() {
	//if (!empty($_SESSION['vmLatestVersion'])) {
	//		return $_SESSION['vmLatestVersion'];
	//	}
	//	$VMVERSION =& new vmVersion();
	$url = "http://virtuemart.net/index2.php?option=com_versions&catid=1&myVersion={".VmConfig::getInstalledVersion()."}&task=latestversionastext";
	$result = VmConnector::handleCommunication($url);
	//if ($result !== false) {
	//	// Cache the result for later use
	//		$_SESSION['vmLatestVersion'] = $result;
	//	}
	return $result;
    }


    /**
     * Add existing Joomla users into the Virtuemart database.
     *
     * @author Max Milbers, RickG
     */
    function integrateJoomlaUsers() {

    $msg = JText::_('Start Syncronizing!');
	$db = JFactory::getDBO();
	$query = "SELECT `id`, `registerDate`, `lastvisitDate` FROM `#__users`";
	$db->setQuery($query);
	$row = $db->loadObjectList();

	foreach ($row as $user) {

		$query = 'INSERT IGNORE INTO `#__vm_users` VALUES ("'. $user->id .'",0, 0,null,"shopper")';
	    $db->setQuery($query);
	    if (!$db->query()) {
			JError::raiseNotice(1, 'integrateJUsers INSERT '.$user->id.' INTO #__vm_users FAILED' );
	    }

		$q = 'SELECT `shopper_group_id` FROM `#__vm_shopper_group` WHERE `default`="1" AND `vendor_id`="1" ';
		$this->_db->setQuery($q);
		$default_shopper_group_id=$this->_db->loadResult();

		$query = 'INSERT IGNORE INTO `#__vm_user_shopper_group_xref` VALUES (null,"' . $user->id . '", "'.$default_shopper_group_id.'")';
	    $db->setQuery($query);
	    if (!$db->query()) {
			JError::raiseNotice(1, 'integrateJUsers INSERT '.$user->id.' INTO #__vm_user_shopper_group_xref FAILED' );
	    }

	    $query = "INSERT IGNORE INTO `#__vm_user_info` (`user_info_id`, `user_id`, `address_type`, `cdate`, `mdate`) ";
	    $query .= "VALUES( '" . md5(uniqid('virtuemart')) . "', '" . $user->id . "', 'BT', UNIX_TIMESTAMP('" . $user->registerDate . "'), UNIX_TIMESTAMP('" . $user->lastvisitDate."'))";
	    $db->setQuery($query);
	    if (!$db->query()) {
			JError::raiseNotice(1, 'integrateJUsers INSERT '.$user->id.' INTO #__vm_user_info FAILED' );
	    }
	}
	$msg = JText::_('Users Syncronized!');
	return $msg;
    }


    /**
     * @author Max Milbers
     */
    function determineStoreOwner() {
		if(!class_exists('VirtueMartModelVendor')) require(JPATH_VM_ADMINISTRATOR.DS.'models'.DS.'vendor.php');
		$user_id = VirtueMartModelVendor::getUserIdByVendorId(1);
		if (isset($user_id)) {
		    $user = JFactory::getUser($user_id);
		}
		else {
		    $user = JFactory::getUser();
		}
		return $user->id;
    }


    /**
     * @author Max Milbers
     */
    function setStoreOwner($userId=0) {
		if (empty($userId)) {
		    $userId = $this->determineStoreOwner();
		}

		$oldUserId	= "";
		$oldVendorId = "";

		$db = JFactory::getDBO();

		$db->setQuery('SELECT * FROM  `#__vm_users` WHERE `vendor_id`= "1" ');
		$db->query();
		$oldVendorId = $db->loadResult();

		$db->setQuery('SELECT * FROM  `#__vm_users` WHERE `user_id`= "' . $userId . '" ');
		$db->query();
		$oldUserId = $db->loadResult();

		if (!isset($oldVendorId) && !isset($oldUserId)) {
		    $db->setQuery('INSERT `#__vm_users` (`user_id`, `user_is_vendor`, `vendor_id`) VALUES ("' . $userId . '", "1","1")');
		    if ($db->query() == false) {
				JError::raiseWarning(1, 'setStoreOwner was not possible to execute INSERT __vm_users for user_id '.$userId);
		    }
		    else {
		    	return $userId;
		    }
		}
		else {
		    if (!isset($oldUserId)) {
				$db->setQuery( 'UPDATE `#__vm_users` SET `user_id` ="'.$userId.'" AND `user_is_vendor` = "1" WHERE `vendor_id` = "1" ');
		    }
		    else {
				$db->setQuery( 'UPDATE `#__vm_users` SET `vendor_id` = "1" AND `user_is_vendor` = "1" WHERE `user_id` ="'.$userId.'" ');
		    }

		    if ($db->query() == false ) {
				JError::raiseWarning(1, 'UPDATE __vm_users failed for user_id '.$userId);
		    } else {
		    	return $userId;
		    }
		}

    }


    /**
     * @author Max Milbers
     */
    function setUserToPermissionGroup($userId=0) {
	# insert the user <=> group relationship
//	$db = JFactory::getDBO();
//	$db->setQuery("INSERT INTO `#__vm_user_perm_groups`
//				SELECT user_id,
//					CASE `perms`
//					    WHEN 'admin' THEN 0
//					    WHEN 'storeadmin' THEN 1
//					    WHEN 'shopper' THEN 2
//					    WHEN 'demo' THEN 3
//					    ELSE 2
//					END
//				FROM #__vm_user_info
//				WHERE address_type='BT' ");
//	$db->query();
//
//	$db->setQuery( "UPDATE `#__vm_user_perm_groups` SET `group_id` = '0' WHERE `user_id` ='" . $userId . "' ") ;
//	$db->query();
    }


    /**
     * Installs sample data to the current database.
     *
     * @author Max Milbers, RickG
     * @params $userId User Id to add the user_info and vendor sample data to
     */
    function installSampleData($userId = null) {
	if ($userId == null) {
	    $userId = $this->determineStoreOwner();
	}

	$currencyFields = array();
	$currencyFields[0] = '47'; //EUR
	$currencyFields[1] = '144'; //USD

	$fields = array();

//	$fields['user_info_id'] = $db->loadResult();
	$fields['user_id'] =  $userId;
	$fields['address_type'] =  'BT';
	// Don't change this company name; it's used in install_sample_data.sql
	$fields['company'] =  "Washupito's the User";
	$fields['title'] =  'Sire';
	$fields['last_name'] =  'upito';
	$fields['first_name'] =  'Wash';
	$fields['middle_name'] =  'the cheapest';
	$fields['phone_1'] =  '555-555-555';
	$fields['address_1'] =  'vendorra road 8';
	$fields['city'] =  'Canangra';
	$fields['zip'] =  '055555';
	$fields['state_id'] =  '72';
	$fields['country_id'] =  '13';
	//Dont change this, atm everything is mapped to mainvendor with id=1
	$fields['user_is_vendor'] =  '1';
	$fields['vendor_id'] = '1';
	$fields['vendor_name'] =  'Washupito';
	$fields['vendor_phone'] =  '555-555-1212';
	$fields['vendor_store_name'] =  "Washupito's Tiendita";
	$fields['vendor_store_desc'] =  ' <p>We have the best tools for do-it-yourselfers.  Check us out! </p> <p>We were established in 1969 in a time when getting good tools was expensive, but the quality was good.  Now that only a select few of those authentic tools survive, we have dedicated this store to bringing the experience alive for collectors and master mechanics everywhere.</p> 		<p>You can easily find products selecting the category you would like to browse above.</p>	';
	$fields['vendor_full_image'] =  'c19970d6f2970cb0d1b13bea3af3144a.gif';
	$fields['vendor_currency'] =  47;
	$fields['vendor_accepted_currencies'] = $currencyFields;
	$fields['vendor_currency_display_style'] =  '1|&euro;|2|,|.|0|0';
	$fields['vendor_terms_of_service'] =  "<h5>You haven't configured any terms of service yet. Click <a href=administrator/index.php?option=com_virtuemart&view=user&task=editshop>here</a> to change this text.</h5>";
	$fields['vendor_url'] = JURI::root();
	$fields['vendor_name'] =  'Washupito';
	$fields['perms']='admin';

	if(!class_exists('VirtueMartModelUser')) require(JPATH_VM_ADMINISTRATOR.DS.'models'.DS.'user.php');
	$usermodel = new VirtueMartModelUser();
	if (!$usermodel->store($fields)) {
		$this->setError($usermodel->getError());
	    JError::raiseNotice(1, 'Problems saving vendordata of the sample store '.$this->getError());
	}

	$filename = JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'install'.DS.'install_sample_data.sql';
	if(!$this->execSQLFile($filename)){
		$msg = JText::_('Problems execution of SQL File '.$filename);
	} else {
		$msg = JText::_('Sample data installed!!');
	}

	return $msg;

    }


    function restoreSystemDefaults() {

		$filename = JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'install'.DS.'uninstall_essential_data.sql';
		$this->execSQLFile($filename);
		$filename = JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'install'.DS.'uninstall_required_data.sql';
		$this->execSQLFile($filename);
	 	$filename = JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'install'.DS.'install.sql';
		$this->execSQLFile($filename);
		$filename = JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'install'.DS.'install_essential_data.sql';
		$this->execSQLFile($filename);
		$filename = JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'install'.DS.'install_required_data.sql';
		$this->execSQLFile($filename);

    }

    function restoreSystemCompletly() {

		$this -> removeAllVMTables();
	 	$filename = JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'install'.DS.'install.sql';
		$this->execSQLFile($filename);
		$filename = JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'install'.DS.'install_essential_data.sql';
		$this->execSQLFile($filename);
		$filename = JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'install'.DS.'install_required_data.sql';
		$this->execSQLFile($filename);

    }

    /**
     * Parse a sql file executing each sql statement found.
     *
     * @author Max Milbers
     */
    function execSQLFile($sqlfile) {
	// Check that sql files exists before reading. Otherwise raise error for rollback
	if ( !file_exists($sqlfile) ) {
	    $this->setError('No SQL file provided!');
	    return false;
	}

	// Create an array of queries from the sql file
	jimport('joomla.installer.helper');
	$queries = JInstallerHelper::splitSql(file_get_contents($sqlfile));

	if (count($queries) == 0) {
	    $this->setError('SQL file has no queries!');
	    return false;
	}

	$db = JFactory::getDBO();
	// Process each query in the $queries array (split out of sql file).
	foreach ($queries as $query) {
	    $query = trim($query);
	    if ($query != '' && $query{0} != '#') {
		$db->setQuery($query);
		if (!$db->query()) {
		    JError::raiseWarning(1, 'JInstaller::install: '.JText::_('SQL Error')." ".$db->stderr(true));
		    return false;
		}
	    }
	}

	return true;
    }


    function uploadAndInstallUpdate($packageName) {
	if (!$packageName) {
	    $this->_error = 'No package name provided!';
	    return false;
	}

	jimport('joomla.filesystem.file');
	jimport('joomla.filesystem.archive');

	$config = JFactory::getConfig();
	$destn = $config->getValue('config.tmp_path').DS.basename($packageName);

	if (!JFile::upload($packageName, $destn)) {
	    $this->setError('Error uploading update package!');
	    return false;
	}

	jimport('joomla.installer.installer');
	$jinstaller = JInstaller::getInstance();
	die($destn);
	$jinstaller->install($destn);
    }


    /**
     * Delete all Virtuemart tables.
     *
     * @return True if successful, false otherwise
     */
    function removeAllVMTables() {
	$db = JFactory::getDBO();
	$config = JFactory::getConfig();
	$db->setQuery("SHOW TABLES LIKE '".$config->getValue('config.dbprefix')."vm_%'");
	if (!$tables = $db->loadResultArray()) {
	    $this->setError = $db->getErrorMsg();
	    return false;
	}

	foreach ($tables as $table) {
	    $db->setQuery('DROP TABLE ' . $table);
	    $db->query();
	}

	return true;
    }


    /**
     * Remove all the data from all Virutmeart tables.
     *
     * @return boolean True if successful, false otherwise.
     */
    function removeAllVMData() {
	$filename = JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'install'.DS.'uninstall_data.sql';
	$this->execSQLFile($filename);

	return true;
    }
}

//pure php no tag