<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : swedish.php 10:31 2009-07-22
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translators Stefan Gagner, Mei Ya Service, http://www.mei-ya.se and Mia Steen, First Solution, http://www.1solution.se
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
	'CHARSET' => 'UTF-8',
	'PHPSHOP_USER_FORM_EMAIL' => 'E-post',
	'PHPSHOP_SHOPPER_LIST_LBL' => 'Kundlista',
	'PHPSHOP_SHOPPER_FORM_BILLTO_LBL' => 'Betalningsinformation',
	'PHPSHOP_SHOPPER_FORM_USERNAME' => 'Användarnamn',
	'PHPSHOP_AFFILIATE_MOD' => 'Partneradministration',
	'PHPSHOP_AFFILIATE_LIST_LBL' => 'Partners',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME' => 'Namn',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE' => 'Aktiv',
	'PHPSHOP_AFFILIATE_LIST_RATE' => 'Värde',
	'PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL' => 'Månadstotal',
	'PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION' => 'Månadsprovision',
	'PHPSHOP_AFFILIATE_LIST_ORDERS' => 'Listordning',
	'PHPSHOP_AFFILIATE_EMAIL_WHO' => 'Till vem? (* = Alla)',
	'PHPSHOP_AFFILIATE_EMAIL_CONTENT' => 'Din e-postadress',
	'PHPSHOP_AFFILIATE_EMAIL_SUBJECT' => 'Ämne',
	'PHPSHOP_AFFILIATE_EMAIL_STATS' => 'Inkludera aktuell statistik',
	'PHPSHOP_AFFILIATE_FORM_RATE' => 'Provisionsnivå (procent)',
	'PHPSHOP_AFFILIATE_FORM_ACTIVE' => 'Aktiv?',
	'VM_AFFILIATE_SHOWINGDETAILS_FOR' => 'Visa information om',
	'VM_AFFILIATE_LISTORDERS' => 'Orderlista',
	'VM_AFFILIATE_MONTH' => 'Månad',
	'VM_AFFILIATE_CHANGEVIEW' => 'Ändra vy',
	'VM_AFFILIATE_ORDERSUMMARY_LBL' => 'Ordersammandrag',
	'VM_AFFILIATE_ORDERLIST_ORDERREF' => 'Order Ref',
	'VM_AFFILIATE_ORDERLIST_DATEORDERED' => 'Orderdatum',
	'VM_AFFILIATE_ORDERLIST_ORDERTOTAL' => 'Ordersumma',
	'VM_AFFILIATE_ORDERLIST_COMMISSION' => 'Provision',
	'VM_AFFILIATE_ORDERLIST_ORDERSTATUS' => 'Orderstatus'
); $VM_LANG->initModule( 'affiliate', $langvars );
?>