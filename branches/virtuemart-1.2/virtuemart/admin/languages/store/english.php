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
	'VM_USER_FORM_FIRST_NAME' => 'First Name',
	'VM_USER_FORM_LAST_NAME' => 'Last Name',
	'VM_USER_FORM_MIDDLE_NAME' => 'Middle Name',
	'VM_USER_FORM_COMPANY_NAME' => 'Company Name',
	'VM_USER_FORM_ADDRESS_1' => 'Address 1',
	'VM_USER_FORM_ADDRESS_2' => 'Address 2',
	'VM_USER_FORM_CITY' => 'City',
	'VM_USER_FORM_STATE' => 'State/Province/Region',
	'VM_USER_FORM_ZIP' => 'Zip/ Postal Code',
	'VM_USER_FORM_COUNTRY' => 'Country',
	'VM_USER_FORM_PHONE' => 'Phone',
	'VM_USER_FORM_PHONE2' => 'Mobile Phone',
	'VM_USER_FORM_FAX' => 'Fax',
	'VM_ISSHIP_LIST_PUBLISH_LBL' => 'Active',
	'VM_ISSHIP_FORM_UPDATE_LBL' => 'Configure Ship Method',
	'VM_STORE_FORM_FULL_IMAGE' => 'Full Image',
	'VM_STORE_FORM_UPLOAD' => 'Upload Image',
	'VM_STORE_FORM_STORE_NAME' => 'Store Name',
	'VM_STORE_FORM_COMPANY_NAME' => 'Store Company Name',
	'VM_STORE_FORM_ADDRESS_1' => 'Address 1',
	'VM_STORE_FORM_ADDRESS_2' => 'Address 2',
	'VM_STORE_FORM_CITY' => 'City',
	'VM_STORE_FORM_STATE' => 'State/Province/Region',
	'VM_STORE_FORM_COUNTRY' => 'Country',
	'VM_STORE_FORM_ZIP' => 'Zip/Postal Code',
	'VM_STORE_FORM_CURRENCY' => 'Currency',
	'VM_STORE_FORM_LAST_NAME' => 'Last Name',
	'VM_STORE_FORM_FIRST_NAME' => 'First Name',
	'VM_STORE_FORM_MIDDLE_NAME' => 'Middle Name',
	'VM_STORE_FORM_TITLE' => 'Title',
	'VM_STORE_FORM_PHONE_1' => 'Phone 1',
	'VM_STORE_FORM_PHONE_2' => 'Phone 2',
	'VM_STORE_FORM_DESCRIPTION' => 'Description',
	'VM_PAYMENT_METHOD_LIST_LBL' => 'Payment Method List',
	'VM_PAYMENT_METHOD_LIST_NAME' => 'Name',
	'VM_PAYMENT_METHOD_LIST_CODE' => 'Code',
	'VM_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Shopper Group',
	'VM_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Payment method type',
	'VM_PAYMENT_METHOD_FORM_LBL' => 'Payment Method Form',
	'VM_PAYMENT_METHOD_FORM_NAME' => 'Payment Method Name',
	'VM_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Shopper Group',
	'VM_PAYMENT_METHOD_FORM_DISCOUNT' => 'Discount',
	'VM_PAYMENT_METHOD_FORM_CODE' => 'Code',
	'VM_PAYMENT_METHOD_FORM_LIST_ORDER' => 'List Order',
	'VM_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Payment method type',
	'VM_PAYMENT_FORM_CC' => 'Credit Card',
	'VM_PAYMENT_FORM_USE_PP' => 'Use Payment Processor',
	'VM_PAYMENT_FORM_BANK_DEBIT' => 'Bank debit',
	'VM_PAYMENT_FORM_AO' => 'Address only / Cash on Delivery',
	'VM_STATISTIC_STATISTICS' => 'Statistics',
	'VM_STATISTIC_CUSTOMERS' => 'Customers',
	'VM_STATISTIC_ACTIVE_PRODUCTS' => 'active Products',
	'VM_STATISTIC_INACTIVE_PRODUCTS' => 'inactive Products',
	'VM_STATISTIC_NEW_ORDERS' => 'New Orders',
	'VM_STATISTIC_NEW_CUSTOMERS' => 'New Customers',
	'VM_CREDITCARD_NAME' => 'Credit Card Name',
	'VM_CREDITCARD_CODE' => 'Credit Card - Short Code',
	'VM_YOUR_STORE' => 'Your Store',
	'VM_CONTROL_PANEL' => 'Control Panel',
	'VM_CHANGE_PASSKEY_FORM' => 'Show/Change the Password/Transaction Key',
	'VM_TYPE_PASSWORD' => 'Please type in your User Password (Your Joomla Password)',
	'VM_CURRENT_TRANSACTION_KEY' => 'Current Transaction Key',
	'VM_CHANGE_PASSKEY_SUCCESS' => 'The Transaction key was successfully changed.',
	'VM_PAYMENT_CLASS_NAME' => 'Payment class name',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(e.g. <strong>ps_netbanx</strong>) :<br />
		default: ps_payment<br />
		<em>Choose ps_payment if you\'re not sure what to choose!</em>',
	'VM_PAYMENT_EXTRAINFO' => 'Payment Extra Info',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'Is shown on the Order Confirmation Page. Can be: HTML Form Code from your Payment Service Provider, Hints to the customer etc.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Accepted Credit Card Types',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'To turn the discount into a fee, use a negative value here (Example: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Maximum discount amount',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Minimum discount amount',
	'VM_PAYMENT_FORM_FORMBASED' => 'HTML-Form based (e.g. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Export Module List',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Name',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Description',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'List of accepted currencies',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'This list defines all those currencies you accept when people are buying something in your store. <strong>Note:</strong> All currencies selected here can be used at checkout! If you don\'t want that, just select your country\'s currency (=default).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Export Module Form',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Export Module Name',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Description',
	'VM_EXPORT_CLASS_NAME' => 'Export Class Name',
	'VM_EXPORT_CLASS_NAME_TIP' => '(e.g. <strong>ps_orders_csv</strong>) :<br /> default: ps_xmlexport<br /> <i>Leave blank if you\'re not sure what to fill in!</i>',
	'VM_EXPORT_CONFIG' => 'Export Extra Configuration',
	'VM_EXPORT_CONFIG_TIP' => 'Define Export configuration for user-defined export modules or define additional configuration. Code must be valid PHP-Code.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Name',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Version',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Author',
	'VM_STORE_ADDRESS_FORMAT' => 'Store Address Format',
	'VM_STORE_ADDRESS_FORMAT_TIP' => 'You can use the following placeholders here',
	'VM_STORE_DATE_FORMAT' => 'Store Date Format',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Error: Payment Method ID was not provided.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Shipping Module Configuration',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Could not instantiate Class {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>
