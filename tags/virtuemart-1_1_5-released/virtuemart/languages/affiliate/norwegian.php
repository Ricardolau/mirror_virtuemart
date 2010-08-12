<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version $Id: norwegian.php 458 2008-08-05 10:47:28Z rued $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* Translation is based on old language file for VM 1.0.
* New translation and cleanup for v1.1 by Odd-Eirik Eriksen (abc@abc-konsult.no) and Rune Rasmussen (syntaxerror.no).
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
	'PHPSHOP_SHOPPER_LIST_LBL' => 'Kundeliste',
	'PHPSHOP_SHOPPER_FORM_BILLTO_LBL' => 'Fakturainformasjon',
	'PHPSHOP_SHOPPER_FORM_USERNAME' => 'Brukernavn',
	'PHPSHOP_AFFILIATE_MOD' => 'Administrer statistikk',
	'PHPSHOP_AFFILIATE_LIST_LBL' => 'Statistikkliste',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME' => 'Statistikknavn',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE' => 'Aktiv',
	'PHPSHOP_AFFILIATE_LIST_RATE' => 'Sats',
	'PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL' => 'Månedstotal',
	'PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION' => 'Månedsprovisjon',
	'PHPSHOP_AFFILIATE_LIST_ORDERS' => 'Vis ordrer',
	'PHPSHOP_AFFILIATE_EMAIL_WHO' => 'Send e-post til hvem(* = ALLE)',
	'PHPSHOP_AFFILIATE_EMAIL_CONTENT' => 'Din e-post',
	'PHPSHOP_AFFILIATE_EMAIL_SUBJECT' => 'Emne',
	'PHPSHOP_AFFILIATE_EMAIL_STATS' => 'Inkluder denne statistikken',
	'PHPSHOP_AFFILIATE_FORM_RATE' => 'Provisjonsats',
	'PHPSHOP_AFFILIATE_FORM_ACTIVE' => 'Aktiv?',
	'VM_AFFILIATE_SHOWINGDETAILS_FOR' => 'Viser detaljer for',
	'VM_AFFILIATE_LISTORDERS' => 'Ordrer',
	'VM_AFFILIATE_MONTH' => 'Måned',
	'VM_AFFILIATE_CHANGEVIEW' => 'Endre visning',
	'VM_AFFILIATE_ORDERSUMMARY_LBL' => 'Ordreoversikt',
	'VM_AFFILIATE_ORDERLIST_ORDERREF' => 'Ordreref.',
	'VM_AFFILIATE_ORDERLIST_DATEORDERED' => 'Ordredato',
	'VM_AFFILIATE_ORDERLIST_ORDERTOTAL' => 'Ordretotal',
	'VM_AFFILIATE_ORDERLIST_COMMISSION' => 'Provisjon (sats)',
	'VM_AFFILIATE_ORDERLIST_ORDERSTATUS' => 'Ordrestatus'
); $VM_LANG->initModule( 'affiliate', $langvars );
?>
