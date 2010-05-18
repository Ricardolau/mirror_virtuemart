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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Vis pris inkl mva?',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Angir om kunden ser prisene med eller uten mva.',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Adressealias',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Vis kundegrupper',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Gruppenavn',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Gruppebeskrivelse',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Kundegruppeskjema',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Gruppenavn',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Gruppebeskrivelse',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Rabatt for standard kundgruppe (i %)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'En positiv pris X betyr: Dersom kundegruppen ikke har en pris for dette produktet vil standardpris være beregningsgrunnlaget X %. En negativ pris har motsatt effekt'
); $VM_LANG->initModule( 'shopper', $langvars );
?>
