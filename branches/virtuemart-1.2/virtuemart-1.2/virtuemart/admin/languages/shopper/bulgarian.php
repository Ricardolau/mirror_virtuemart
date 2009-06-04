<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
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
	'CHARSET' => 'cp1251',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Показване на цени с данъци и надценка?',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Ako izberete tazi opcia, potrebitelite shte vijdat cenite s vkl. danuk i nadcenka.',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Етикет за адрес',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Списък на клиентските групи',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Име на групата',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Описание на групата',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Формуляр за клиентска група',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Име на групата',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Описание на групата',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Отстъпка за клиентската група по подразбиране (в %)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'Polojitelna stoinost X oznachava: Ako produktut niama cena za TAZI klientska grupa, cenata mu po podrazbirane se namaliava s X %. Otricatelna stoinost za X shte ima obratnia efekt.',
	'SHOPPER_GROUP_MISSING_NAME' => 'You must enter a shopper group name.',
	'SHOPPER_GROUP_ALREADY_EXISTS' => 'Shopper group already exists for this vendor.',
	'SHOPPER_GROUP_DELETE_SELECT' => 'Please select a shopper group to delete.',
	'SHOPPER_GROUP_DELETE_PAYMENT_METHODS_ASS' => 'This Shopper Group (Id: {id}) still has Payment Methods assigned to it.',
	'SHOPPER_GROUP_DELETE_USERS_ASS' => 'There are still Users assigned to this Shopper Group (Id: {id})',
	'SHOPPER_GROUP_DELETE_DEFAULT' => 'Cannot delete the default shopper group.',
	'SHOPPER_GROUP_ADDED' => 'The Shopper Group has been added.',
	'SHOPPER_GROUP_ADD_FAILED' => 'Failed to add the Shopper Group',
	'SHOPPER_GROUP_UPDATED' => 'The Shopper Group has been updated.',
	'SHOPPER_GROUP_UPDATE_FAILED' => 'Failed to update the Shopper Group'
); $VM_LANG->initModule( 'shopper', $langvars );
?>