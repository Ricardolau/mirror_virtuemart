<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : swedish.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translators:Stefan Gagner, Mei Ya Service, http://www.mei-ya.se & Mia Steen, 1st Solution http://www.1stsolution.se
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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Visa priser inklusive moms?',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'S Anger om en kund skall se priser inklusive eller exklusive moms.',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Adress-namn',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Kundgrupper',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Grupnamn',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Gruppbeskrivning',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Kundgruppsuppgifter',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Gruppnamn',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Gruppbeskrivning',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Standardrabatt f�r Kundgrupp (i %)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'Ett positivt v�rde X inneb�r: Om produkten inte har ett pris tilldelat till denna grupp s� kommer priset att sjunka med  X %. Ett negativt v�rde har motsatt effekt'
); $VM_LANG->initModule( 'shopper', $langvars );
?>
