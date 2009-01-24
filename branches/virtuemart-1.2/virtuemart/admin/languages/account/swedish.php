<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : swedish.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translators Mia Steen, First Solutions & Stefan Gagner, Mei Ya Service, http://www.mei-ya.se
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
	'PHPSHOP_ACC_CUSTOMER_ACCOUNT' => 'Kundsida - ',
	'PHPSHOP_ACC_UPD_BILL' => 'H�r kan du uppdatera dina uppgifter.',
	'PHPSHOP_ACC_UPD_SHIP' => 'H�r kan du l�gga till och �ndra adresser.',
	'PHPSHOP_ACC_ACCOUNT_INFO' => 'Faktureringsinformation',
	'PHPSHOP_ACC_SHIP_INFO' => 'Leveransinformation',
	'PHPSHOP_DOWNLOADS_CLICK' => 'Klicka p� en produktnamn f�r att ladda ned.',
	'PHPSHOP_DOWNLOADS_EXPIRED' => 'Du har redan laddat ned filen eller filerna, maximalt antal g�nger eller s� har din nedladdningstid f�rfallit.'
); $VM_LANG->initModule( 'account', $langvars );
?>
