<?php
// Joomla Security Check - no direct access to this file 
// Prevents File Path Exposure
defined('_JEXEC') or die('Restricted access');


// load an instance of the VmStoreTemplate framework
$vmStoreTemplate = VmStoreTemplate::getInstance('joomla');



// tests
$vmBootstrapVersionFromConfig = $vmStoreTemplate->getSettingFromVmConfig('bootstrap', NULL);
echo $vmBootstrapVersionFromConfig;
echo "hallo template foundation";
