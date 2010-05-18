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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Transportørliste',
	'PHPSHOP_RATE_LIST_LBL' => 'Liste over fraktsatser',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Navn',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Sortering',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Opprette / Endre transportør',
	'PHPSHOP_RATE_FORM_LBL' => 'Fraktsats endre / legg til',
	'PHPSHOP_RATE_FORM_NAME' => 'Beskrivelse av transportørsats',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Transportør',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Land',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'Poststed start',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'Poststed slutt',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Minstevekt',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Maksimalvekt',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'Ditt pakkegebyr',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Valuta',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Rekkefølge',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Transportør',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Beskrivelse av transportørsats',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Vekt fra ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... til',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Transportørfirma',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Rekkefølge'
); $VM_LANG->initModule( 'shipping', $langvars );
?>
