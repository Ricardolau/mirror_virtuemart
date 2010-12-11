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
	'PHPSHOP_RB_INDIVIDUAL' => 'Spesifisert produktliste',
	'PHPSHOP_RB_SALE_TITLE' => 'Rapportering salg',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Oversikt over salgsaktivitet',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Velg intervall',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Månedlig',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Ukentlig',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Daglig',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Denne mnd.',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Forrige mnd.',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Siste 60 dager',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Siste 90 dager',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Begynn med',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Avslutt med',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Vis dette utvalget',
	'PHPSHOP_RB_REPORT_FOR' => 'Rapport for ',
	'PHPSHOP_RB_DATE' => 'Dato',
	'PHPSHOP_RB_ORDERS' => 'Bestillinger',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Totalt solgte artikler',
	'PHPSHOP_RB_REVENUE' => 'Omsetning',
	'PHPSHOP_RB_PRODLIST' => 'Produktliste'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>
