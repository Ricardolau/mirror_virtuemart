<?php
if( !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
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
	'VM_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Show Prices including tax?',
	'VM_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Sets the flag whether the shoppers sees prices including tax or excluding tax.',
	'VM_SHOPPER_FORM_ADDRESS_LABEL' => 'Address Nickname',
	'VM_SHOPPER_GROUP_LIST_LBL' => 'Shopper Group List',
	'VM_SHOPPER_GROUP_LIST_NAME' => 'Group Name',
	'VM_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Group Description',
	'VM_SHOPPER_GROUP_FORM_LBL' => 'Shopper Group Form',
	'VM_SHOPPER_GROUP_FORM_NAME' => 'Group Name',
	'VM_SHOPPER_GROUP_FORM_DESC' => 'Group Description',
	'VM_SHOPPER_GROUP_FORM_DISCOUNT' => 'Price Discount on default Shopper Group (in %)',
	'VM_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'A positive amount X means: If the Product has no Price assigned to THIS Shopper Group, the default Price is decreased by X %. A negative amount has the opposite effect',
	'VM_SHOPPER_GROUP_MISSING_NAME' => 'You must enter a shopper group name.',
	'VM_SHOPPER_GROUP_ALREADY_EXISTS' => 'Shopper group already exists for this vendor.',
	'VM_SHOPPER_GROUP_DELETE_SELECT' => 'Please select a shopper group to delete.',
	'VM_SHOPPER_GROUP_DELETE_PAYMENT_METHODS_ASS' => 'This Shopper Group (Id: {id}) still has Payment Methods assigned to it.',
	'VM_SHOPPER_GROUP_DELETE_USERS_ASS' => 'There are still Users assigned to this Shopper Group (Id: {id})',
	'VM_SHOPPER_GROUP_DELETE_DEFAULT' => 'Cannot delete the default shopper group.',
	'VM_SHOPPER_GROUP_ADDED' => 'The Shopper Group has been added.',
	'VM_SHOPPER_GROUP_ADD_FAILED' => 'Failed to add the Shopper Group',
	'VM_SHOPPER_GROUP_UPDATED' => 'The Shopper Group has been updated.',
	'VM_SHOPPER_GROUP_UPDATE_FAILED' => 'Failed to update the Shopper Group'
); $VM_LANG->initModule( 'shopper', $langvars );
?>