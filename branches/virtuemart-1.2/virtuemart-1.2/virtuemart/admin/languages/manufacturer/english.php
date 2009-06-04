<?php
if( !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version $Id: english.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translator soeren
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'ISO-8859-1',
	'VM_MANUFACTURER_LIST_LBL' => 'Manufacturer List',
	'VM_MANUFACTURER_LIST_MANUFACTURER_NAME' => 'Manufacturer Name',
	'VM_MANUFACTURER_FORM_LBL' => 'Add Information',
	'VM_MANUFACTURER_FORM_CATEGORY' => 'Manufacturer Category',
	'VM_MANUFACTURER_FORM_EMAIL' => 'Email',
	'VM_MANUFACTURER_CAT_LIST_LBL' => 'Manufacturer Category List',
	'VM_MANUFACTURER_CAT_NAME' => 'Category Name',
	'VM_MANUFACTURER_CAT_DESCRIPTION' => 'Category Description',
	'VM_MANUFACTURER_CAT_MANUFACTURERS' => 'Manufacturers',
	'VM_MANUFACTURER_CAT_FORM_LBL' => 'Manufacturer Category Form',
	'VM_MANUFACTURER_CAT_FORM_INFO_LBL' => 'Category Information',
	'VM_MANUFACTURER_CAT_FORM_NAME' => 'Category Name',
	'VM_MANUFACTURER_CAT_FORM_DESCRIPTION' => 'Category Description'
); $VM_LANG->initModule( 'manufacturer', $langvars );
?>