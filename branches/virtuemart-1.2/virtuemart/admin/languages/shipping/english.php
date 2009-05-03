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
	'VM_CARRIER_LIST_LBL' => 'Shipper list',
	'VM_RATE_LIST_LBL' => 'Shipping Rates list',
	'VM_CARRIER_LIST_NAME_LBL' => 'Name',
	'VM_CARRIER_LIST_ORDER_LBL' => 'Listorder',
	'VM_CARRIER_FORM_LBL' => 'Shipper edit / create',
	'VM_RATE_FORM_LBL' => 'Create/Edit a Shipping Rate',
	'VM_RATE_FORM_NAME' => 'Shipping Rate description',
	'VM_RATE_FORM_CARRIER' => 'Shipper',
	'VM_RATE_FORM_COUNTRY' => 'Country',
	'VM_RATE_FORM_ZIP_START' => 'ZIP range start',
	'VM_RATE_FORM_ZIP_END' => 'ZIP range end',
	'VM_RATE_FORM_WEIGHT_START' => 'Lowest Weight',
	'VM_RATE_FORM_WEIGHT_END' => 'Highest Weight',
	'VM_RATE_FORM_PACKAGE_FEE' => 'Your package fee',
	'VM_RATE_FORM_CURRENCY' => 'Currency',
	'VM_RATE_FORM_LIST_ORDER' => 'List Order',
	'VM_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Shipper',
	'VM_SHIPPING_RATE_LIST_RATE_NAME' => 'Shipping Rate description',
	'VM_SHIPPING_RATE_LIST_RATE_WSTART' => 'Weight from ...',
	'VM_SHIPPING_RATE_LIST_RATE_WEND' => '... to',
	'VM_CARRIER_FORM_NAME' => 'Shipper Company',
	'VM_CARRIER_FORM_LIST_ORDER' => 'Listorder'
); $VM_LANG->initModule( 'shipping', $langvars );
?>