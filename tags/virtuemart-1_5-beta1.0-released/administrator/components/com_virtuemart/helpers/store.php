<?php
/**
 * The idea behind this class may work for multistore, but not multivendor
 * Store helper class
 *
 * This class provides functions realting to the store records
 *
 * @package	VirtueMart
 * @subpackage Helpers
 * @author RickG
 * @copyright Copyright (c) 2004-2008 Soeren Eberhardt-Biermann, 2009 VirtueMart Team. All rights reserved.
 */
 
 
//defined('_JEXEC') or die('Restricted access');
//
//class VmStore {
//    /**
//     * Load the store configuration values from the database into a session variable.
//     * This step is done to prevent accessing the database for every configuration variable lookup.
//     *
//     * @author RickG
//     */
//    function loadConfig() {
//	$db = JFactory::getDBO();
//	$params = new JParameter('');
//
//	$juser = JFactory::getUser();
//	if ($juser->username) {
//		//todo This should ask first if the user is a vendor and then look for the vendorId
//	    $query = "SELECT vendor_id FROM #__vm_users ";
//	    $query .= "WHERE user_id = '". $juser->id ."'";
//	    $db->setQuery($query);
//	    $vendorId = $db->loadResult();
//	    if(empty($vendorId)){
//			$vendorId = 1;
//		}
//	    $userId = $juser->id;
//	}
//	else {
//	    $userId = 0;
//	    $vendorId = 1;
//	}
//
//	$query = "SELECT * FROM #__vm_vendor ";
//	$query .= "WHERE vendor_id = '". $vendorId ."'";
//	$db->setQuery($query);
//	$vendorFields = $db->loadObject();
//	foreach ($vendorFields as $k => $v) {
//	    $params->set($k, $v);
//	}
//
//	$query = "SELECT * FROM #__vm_user_info ";
//	$query .= "WHERE user_id = '". $userId ."'";
//	$db->setQuery($query);
//	$userFields = $db->loadObject();
//	if(!empty($userFields)){
//		foreach ($userFields as $k => $v) {
//		    $params->set($k, $v);
//		}		
//	}
//
//
//	$session = JFactory::getSession();
//	$session->set("vmstore", $params->toString());
//    }
//
//
//    /**
//     * Find the configuration value for a given key
//     *
//     * @author RickG
//     * @param string $key Key name to lookup
//     * @return Value for the given key name
//     */
//    function get($key = '', $default='') {
//	$value = '';
//	if ($key) {
//	    $session = JFactory::getSession();
//	    $config = $session->get('vmstore', '');
//
//	    if (!$config) {
//		VmStore::loadConfig();
//		$config = $session->get('vmstore', '');
//	    }
//
//	    if ($config) {
//		$params = new JParameter($config);
//		$value = $params->get($key);
//	    }
//	    else {
//		$params = new JParameter('');
//		$value = '';
//	    }
//
//	    if ($value == '') {
//		$params->set($key, $default);
//		$value = $default;
//	    }
//	}
//
//	return $value;
//    }
//}