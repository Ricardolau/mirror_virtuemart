<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
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
	'PHPSHOP_COUPON_EDIT_HEADER' => 'Uppdatera kupong',
	'PHPSHOP_COUPON_CODE_HEADER' => 'Kod',
	'PHPSHOP_COUPON_PERCENT_TOTAL' => 'Procent av total',
	'PHPSHOP_COUPON_TYPE' => 'Kupongtyp',
	'PHPSHOP_COUPON_TYPE_TOOLTIP' => 'En gåvokupong raderas efter att ha använts på en order. En permanent kupong kan användas så ofta som kunden vill.',
	'PHPSHOP_COUPON_TYPE_GIFT' => 'Gåvokupong',
	'PHPSHOP_COUPON_TYPE_PERMANENT' => 'Permanent kupong',
	'PHPSHOP_COUPON_VALUE_HEADER' => 'Värde',
	'PHPSHOP_COUPON_PERCENT' => 'Procent',
	'PHPSHOP_COUPON_TOTAL' => 'Total',
	'PHPSHOP_COUPON_START' => 'Coupon Start Date',
	'PHPSHOP_COUPON_EXPIRY' => 'Coupon Expiry Date',
	'PHPSHOP_COUPON_CODE_INVALID' => 'Coupon code out of date. Please try an alternative.',
	'PHPSHOP_COUPON_CODE_NOT FOUND' => 'Coupon code not found. Please try again.'
); $VM_LANG->initModule( 'coupon', $langvars );
?>