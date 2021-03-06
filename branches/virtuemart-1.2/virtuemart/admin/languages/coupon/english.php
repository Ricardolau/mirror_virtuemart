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
	'VM_COUPON_EDIT_HEADER' => 'Update Coupon',
	'VM_COUPON_CODE_HEADER' => 'Code',
	'VM_COUPON_PERCENT_TOTAL' => 'Percent or Total',
	'VM_COUPON_TYPE' => 'Coupon Type',
	'VM_COUPON_TYPE_TOOLTIP' => 'A Gift Coupon is deleted after it was used for discounting an order. A permanent coupon can be used as often as the customer wants to.',
	'VM_COUPON_TYPE_GIFT' => 'Gift Coupon',
	'VM_COUPON_TYPE_PERMANENT' => 'Permanent Coupon',
	'VM_COUPON_VALUE_HEADER' => 'Value',
	'VM_COUPON_PERCENT' => 'Percent',
	'VM_COUPON_TOTAL' => 'Total',
	'VM_COUPON_START' => 'Coupon Start Date',
	'VM_COUPON_EXPIRY' => 'Coupon Expiry Date',
	'VM_COUPON_START_INVALID' => 'You must provide a Start Date',
	'VM_COUPON_EXPIRY_INVALID' => 'You must provide an End Date',
	'VM_COUPON_CODE_INVALID' => 'Coupon code out of date. Please try an alternative.',
	'VM_COUPON_CODE_NOT FOUND' => 'Coupon code not found. Please try again.',
	'VM_COUPON_REMOVED' => 'Coupon removed as order now less than ',
	'VM_COUPON_VALUE_VALID_AT' => 'Order Value to be valid',
	'VM_COUPON_VALUE_VALID_AT_NOT_NUMBER' => 'Invalid Value for Order Value to be valid'
); $VM_LANG->initModule( 'coupon', $langvars );
?>