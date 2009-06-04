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
	'CHARSET' => 'GB2312',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => '显示含税价？',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => '无论价格是否含税均设置标志。',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => '地址别名',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => '购物会员组列表',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => '组名',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => '组描述',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => '购物会员组表格',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => '组名',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => '组描述',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => '默认顾客组的折扣量 (以百分比的形式)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => '正值X意味着:商品如果对于该组顾客没有指定价格的话，那么将在默认价格上面减少X%。负值则有相反效果。',
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