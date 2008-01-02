<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : slovenian.php 1071 2007-12-03 08:42:28Z thepisu $
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
$VM_LANG->initModule('affiliate',array (
	'CHARSET' => 'ISO-8859-1',
	'PHPSHOP_USER_FORM_EMAIL' => 'E-posta',
	'PHPSHOP_SHOPPER_LIST_LBL' => 'Seznam kupcev',
	'PHPSHOP_SHOPPER_FORM_BILLTO_LBL' => 'Informacije o placniku',
	'PHPSHOP_SHOPPER_FORM_USERNAME' => 'Uporabnisko ime',
	'PHPSHOP_AFFILIATE_MOD' => 'Administracija clanstev',
	'PHPSHOP_AFFILIATE_LIST_LBL' => 'Seznam clanov',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME' => 'Ime clanov',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE' => 'Aktivni',
	'PHPSHOP_AFFILIATE_LIST_RATE' => 'Odnos',
	'PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL' => 'Skupaj ta mesec',
	'PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION' => 'Mesecna narocila',
	'PHPSHOP_AFFILIATE_LIST_ORDERS' => 'Preglej naro�ila',
	'PHPSHOP_AFFILIATE_EMAIL_WHO' => 'Za kkoga E-posta(* = ALL)',
	'PHPSHOP_AFFILIATE_EMAIL_CONTENT' => 'Vas e-naslov',
	'PHPSHOP_AFFILIATE_EMAIL_SUBJECT' => 'Zadeva',
	'PHPSHOP_AFFILIATE_EMAIL_STATS' => 'Vklju�uje trenutno statistiko',
	'PHPSHOP_AFFILIATE_FORM_RATE' => 'Commission Rate (percent)',
	'PHPSHOP_AFFILIATE_FORM_ACTIVE' => 'Active?'
	));
?>