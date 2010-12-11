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
	'PHPSHOP_ACC_CUSTOMER_ACCOUNT' => 'Kundekonto:',
	'PHPSHOP_ACC_UPD_BILL' => 'Her kan du oppdatere din fakturainformasjon.',
	'PHPSHOP_ACC_UPD_SHIP' => 'Her kan du legge til og endre dine leveringsadresser.',
	'PHPSHOP_ACC_ACCOUNT_INFO' => 'Kontoinformasjon',
	'PHPSHOP_ACC_SHIP_INFO' => 'Leveringsinformasjon',
	'PHPSHOP_DOWNLOADS_CLICK' => 'Klikk på produktnavnet for å laste ned filen(e).',
	'PHPSHOP_DOWNLOADS_EXPIRED' => 'Du har allerede lastet ned filen(e) maksimalt tillatte ganger, eller nedlastingsperioden har utløpt.'
); $VM_LANG->initModule( 'account', $langvars );
?>
