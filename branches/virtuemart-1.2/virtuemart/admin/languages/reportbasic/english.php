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
	'VM_RB_INDIVIDUAL' => 'Individual Product Listings',
	'VM_RB_SALE_TITLE' => 'Sales Reporting', // not used?
	'VM_RB_SALES_PAGE_TITLE' => 'Sales Activity Overview', // not used?
	'VM_RB_INTERVAL_TITLE' => 'Set Interval',
	'VM_RB_INTERVAL_MONTHLY_TITLE' => 'Monthly',
	'VM_RB_INTERVAL_WEEKLY_TITLE' => 'Weekly',
	'VM_RB_INTERVAL_DAILY_TITLE' => 'Daily',
	'VM_RB_THISMONTH_BUTTON' => 'This Month',
	'VM_RB_LASTMONTH_BUTTON' => 'Last Month',
	'VM_RB_LAST60_BUTTON' => 'Last 60 days',
	'VM_RB_LAST90_BUTTON' => 'Last 90 days',
	'VM_RB_START_DATE_TITLE' => 'Start on',
	'VM_RB_END_DATE_TITLE' => 'End at',
	'VM_RB_SHOW_SEL_RANGE' => 'Show this selected range',
	'VM_RB_REPORT_FOR' => 'Report for ',
	'VM_RB_DATE' => 'Date',
	'VM_RB_ORDERS' => 'Orders',
	'VM_RB_TOTAL_ITEMS' => 'Total Items sold',
	'VM_RB_REVENUE' => 'Revenue',
	'VM_RB_PRODLIST' => 'Product Listing'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>