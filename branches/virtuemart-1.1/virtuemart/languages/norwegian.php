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
	'PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL' => 'Land',
	'PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL' => 'Knytt til sone',
	'PHPSHOP_ASSIGN_ZONE_PG_LBL' => 'Knytt sammen soner',
	'PHPSHOP_ZONE_FORM_NAME_LBL' => 'Sonenavn',
	'PHPSHOP_ZONE_FORM_DESC_LBL' => 'Sonebeskrivelse',
	'PHPSHOP_ZONE_FORM_COST_PER_LBL' => 'Sonekost pr. artikkel',
	'PHPSHOP_ZONE_FORM_COST_LIMIT_LBL' => 'Sonekostnadsgrense',
	'PHPSHOP_ZONE_LIST_LBL' => 'Soner',
	'PHPSHOP_ZONE_LIST_NAME_LBL' => 'Sonenavn',
	'PHPSHOP_ZONE_LIST_DESC_LBL' => 'Sonebeskrivelse',
	'PHPSHOP_ZONE_LIST_COST_PER_LBL' => 'Sonekostnad per artikkel',
	'PHPSHOP_ZONE_LIST_COST_LIMIT_LBL' => 'Sonekostnadsgrense',
	'VM_ZONE_ASSIGN_PERITEM' => 'Per artikkel',
	'VM_ZONE_ASSIGN_LIMIT' => 'Grense',
	'VM_ZONE_EDITZONE' => 'Rediger sone'
); $VM_LANG->initModule( 'zone', $langvars );
?>
