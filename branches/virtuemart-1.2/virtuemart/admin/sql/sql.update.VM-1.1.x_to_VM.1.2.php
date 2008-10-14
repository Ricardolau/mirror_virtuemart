<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
*
* @version $Id$
* @package VirtueMart
* @subpackage core
* @copyright	Copyright (C) 2008 Greg Perkins. All rights reserved.
* @license		GNU/GPL, http://www.gnu.org/copyleft/gpl.html
* 
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/

// Added the ability to add manufacturer images
$db->query( "ALTER TABLE `#__{vm}_manufacturer` ADD `mf_thumb_image` VARCHAR( 255 ) default NULL ,
ADD `mf_full_image` VARCHAR( 255 ) default NULL");

# define modules as administrator-relevant or not
$db->query( "ALTER TABLE `#__{vm}_module` ADD `is_admin` ENUM( '0', '1' ) NOT NULL AFTER `module_publish`");

$db->query( "UPDATE `#__{vm}_module` SET `is_admin` = '1' 
	WHERE FIND_IN_SET( `module_name` , 'admin,product,vendor,shopper,order,store,tax,repotbasic, zone,shipping,manufacturer,help,coupon' ) >0 ");

# Remove the buggy affiliate module
$db->query( "DELETE FROM `#__{vm}_module` WHERE module_name='affiliate' LIMIT 1");

# Make Admin Menu dynamic
$db->query( "CREATE TABLE IF NOT EXISTS `#__{vm}_menu_admin` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `module_id` int(10) unsigned NOT NULL COMMENT 'The ID of the VM Module, this Item is assigned to',
  `parent_id` int(11) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `depends` text NOT NULL COMMENT 'Names of the Parameters, this Item depends on',
  `icon_class` varchar(255) NOT NULL,
  `ordering` tinyint(4) NOT NULL,
  `published` enum('0','1') NOT NULL,
  `tooltip` text NOT NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM  COMMENT='Administration Menu Items' AUTO_INCREMENT=73 ");

$db->query( "INSERT INTO `#__{vm}_menu_admin` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`) VALUES
(1, 1, 0, 'PHPSHOP_CONFIG', 'page=admin.show_cfg', '', 'vmicon vmicon-16-config', 2, '1', ''),
(2, 1, 0, 'PHPSHOP_USERS', 'page=admin.user_list', '', 'vmicon vmicon-16-user', 4, '1', ''),
(3, 1, 0, 'VM_USERGROUP_LBL', 'page=admin.usergroup_list', '', 'vmicon vmicon-16-user', 6, '1', ''),
(4, 1, 0, 'VM_MANAGE_USER_FIELDS', 'page=admin.user_field_list', '', 'vmicon vmicon-16-content', 8, '1', ''),
(5, 1, 0, 'PHPSHOP_COUNTRY_LIST_MNU', 'page=admin.country_list', '', 'vmicon vmicon-16-content', 10, '1', ''),
(6, 1, 0, 'PHPSHOP_CURRENCY_LIST_MNU', 'page=admin.curr_list', '', 'vmicon vmicon-16-content', 12, '1', ''),
(7, 1, 0, 'PHPSHOP_MODULE_LIST_MNU', 'page=admin.module_list', '', 'vmicon vmicon-16-content', 14, '1', ''),
(8, 1, 0, 'VM_CHECK_UPDATES_MNU', 'page=admin.update_check', '', 'vmicon vmicon-16-content', 16, '1', ''),
(9, 8, 0, 'PHPSHOP_STATISTIC_SUMMARY', 'page=store.index', '', 'vmicon vmicon-16-info', 2, '1', ''),
(10, 8, 0, 'PHPSHOP_STORE_FORM_MNU', 'page=store.store_form', '', 'vmicon vmicon-16-config', 4, '1', ''),
(11, 8, 0, 'PHPSHOP_PAYMENT_METHOD_LIST_MNU', 'page=store.payment_method_list', '', 'vmicon vmicon-16-content', 6, '1', ''),
(12, 8, 0, 'PHPSHOP_PAYMENT_METHOD_FORM_MNU', 'page=store.payment_method_form', '', 'vmicon vmicon-16-editadd', 8, '1', ''),
(13, 8, 0, 'VM_SHIPPING_MODULE_LIST_LBL', 'page=store.shipping_module_list', '', 'vmicon vmicon-16-content', 10, '1', ''),
(14, 8, 0, 'PHPSHOP_CREDITCARD_LIST_LBL', 'page=store.creditcard_list', '', 'vmicon vmicon-16-content', 12, '1', ''),
(15, 8, 0, 'PHPSHOP_CREDITCARD_FORM_LBL', 'page=store.creditcard_form', '', 'vmicon vmicon-16-editadd', 14, '1', ''),
(16, 8, 0, 'VM_ORDER_EXPORT_MODULE_LIST_MNU', 'page=store.export_list', '', 'vmicon vmicon-16-content', 16, '1', ''),
(17, 8, 0, 'VM_ORDER_EXPORT_MODULE_FORM_MNU', 'page=store.export_form', '', 'vmicon vmicon-16-editadd', 18, '1', ''),
(18, 2, 0, 'CSVIMPROVED_TITLE', 'http://www.csvimproved.com/index.php?option=com_ionfiles&Itemid=2', '', 'vmicon vmicon-16-import', 2, '1', 'CSVIMPROVED_NEEDINSTALL'),
(19, 2, 0, 'PHPSHOP_PRODUCT_LIST_MNU', 'page=product.product_list', '', 'vmicon vmicon-16-content', 4, '1', ''),
(20, 2, 0, 'PHPSHOP_PRODUCT_FORM_MNU', 'page=product.product_form', '', 'vmicon vmicon-16-editadd', 6, '1', ''),
(21, 2, 0, 'PHPSHOP_PRODUCT_INVENTORY_MNU', 'page=product.product_inventory', '', 'vmicon vmicon-16-install', 8, '1', ''),
(22, 2, 0, 'PHPSHOP_SPECIAL_PRODUCTS', 'page=product.specialprod', '', 'vmicon vmicon-16-content', 10, '1', ''),
(23, 2, 0, 'PHPSHOP_PRODUCT_FOLDERS', 'page=product.folders', '', 'vmicon vmicon-16-content', 12, '1', ''),
(24, 2, 0, 'PHPSHOP_REVIEWS', 'page=product.review_list', '', 'vmicon vmicon-16-content', 14, '1', ''),
(25, 2, 0, 'PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL', 'page=product.product_discount_list', '', 'vmicon vmicon-16-content', 16, '1', ''),
(26, 2, 0, 'PHPSHOP_PRODUCT_DISCOUNT_FORM_MNU', 'page=product.product_discount_form', '', 'vmicon vmicon-16-editadd', 18, '1', ''),
(27, 2, 0, 'PHPSHOP_PRODUCT_TYPE_LIST_LBL', 'page=product.product_type_list', '', 'vmicon vmicon-16-content', 20, '1', ''),
(28, 2, 0, 'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU', 'page=product.product_type_form', '', 'vmicon vmicon-16-editadd', 22, '1', ''),
(29, 2, 0, 'PHPSHOP_CATEGORY_LIST_MNU', 'page=product.product_category_list', '', 'vmicon vmicon-16-content', 24, '1', ''),
(30, 2, 0, 'PHPSHOP_CATEGORY_FORM_MNU', 'page=product.product_category_form', '', 'vmicon vmicon-16-editadd', 26, '1', ''),
(31, 4, 0, 'PHPSHOP_SHOPPER_GROUP_LIST_MNU', 'page=shopper.shopper_group_list', '', 'vmicon vmicon-16-content', 2, '1', ''),
(32, 4, 0, 'PHPSHOP_SHOPPER_GROUP_FORM_MNU', 'page=shopper.shopper_group_form', '', 'vmicon vmicon-16-editadd', 4, '1', ''),
(33, 5, 0, 'PHPSHOP_ORDER_LIST_MNU', 'page=order.order_list', '', 'vmicon vmicon-16-content', 2, '1', ''),
(34, 5, 0, 'PHPSHOP_ORDER_STATUS_LIST_MNU', 'page=order.order_status_list', '', 'vmicon vmicon-16-content', 4, '1', ''),
(35, 5, 0, 'PHPSHOP_ORDER_STATUS_FORM_MNU', 'page=order.order_status_form', '', 'vmicon vmicon-16-editadd', 6, '1', ''),
(36, 3, 0, 'PHPSHOP_VENDOR_LIST_MNU', 'page=vendor.vendor_list', '', 'vmicon vmicon-16-content', 2, '1', ''),
(37, 3, 0, 'PHPSHOP_VENDOR_FORM_MNU', 'page=vendor.vendor_form', '', 'vmicon vmicon-16-editadd', 4, '1', ''),
(38, 3, 0, 'PHPSHOP_VENDOR_CAT_LIST_MNU', 'page=vendor.vendor_category_list', '', 'vmicon vmicon-16-content', 6, '1', ''),
(39, 3, 0, 'PHPSHOP_VENDOR_CAT_FORM_MNU', 'page=vendor.vendor_category_form', '', 'vmicon vmicon-16-editadd', 8, '1', ''),
(40, 12, 0, 'PHPSHOP_REPORTBASIC_MOD', 'page=reportbasic.index', '', 'vmicon vmicon-16-info', 2, '1', ''),
(41, 11, 0, 'PHPSHOP_TAX_LIST_MNU', 'page=tax.tax_list', '', 'vmicon vmicon-16-content', 2, '1', ''),
(42, 11, 0, 'PHPSHOP_TAX_FORM_MNU', 'page=tax.tax_form', '', 'vmicon vmicon-16-editadd', 4, '1', ''),
(43, 12839, 0, 'PHPSHOP_CARRIER_LIST_MNU', 'page=shipping.carrier_list', '', 'vmicon vmicon-16-content', 2, '1', ''),
(44, 12839, 0, 'PHPSHOP_CARRIER_FORM_MNU', 'page=shipping.carrier_form', '', 'vmicon vmicon-16-editadd', 4, '1', ''),
(45, 12839, 0, 'PHPSHOP_RATE_LIST_MNU', 'page=shipping.rate_list', '', 'vmicon vmicon-16-content', 6, '1', ''),
(46, 12839, 0, 'PHPSHOP_RATE_FORM_MNU', 'page=shipping.rate_form', '', 'vmicon vmicon-16-editadd', 8, '1', ''),
(47, 12843, 0, 'PHPSHOP_COUPON_LIST', 'page=coupon.coupon_list', '', 'vmicon vmicon-16-content', 2, '1', ''),
(48, 12843, 0, 'PHPSHOP_COUPON_NEW_HEADER', 'page=coupon.coupon_form', '', 'vmicon vmicon-16-editadd', 4, '1', ''),
(49, 99, 0, 'PHPSHOP_MANUFACTURER_LIST_MNU', 'page=manufacturer.manufacturer_list', '', 'vmicon vmicon-16-content', 2, '1', ''),
(50, 99, 0, 'PHPSHOP_MANUFACTURER_FORM_MNU', 'page=manufacturer.manufacturer_form', '', 'vmicon vmicon-16-editadd', 4, '1', ''),
(51, 99, 0, 'PHPSHOP_MANUFACTURER_CAT_LIST_MNU', 'page=manufacturer.manufacturer_category_list', '', 'vmicon vmicon-16-content', 6, '1', ''),
(52, 99, 0, 'PHPSHOP_MANUFACTURER_CAT_FORM_MNU', 'page=manufacturer.manufacturer_category_form', '', 'vmicon vmicon-16-editadd', 8, '1', ''),
(53, 12842, 0, 'VM_ABOUT', 'page=help.about', '', 'vmicon vmicon-16-info', 2, '1', ''),
(54, 12842, 0, 'VM_HELP_TOPICS', 'http://virtuemart.net/documentation/User_Manual/index.html', '', 'vmicon vmicon-16-help', 4, '1', ''),
(55, 12842, 0, 'VM_COMMUNITY_FORUM', 'http://forum.virtuemart.net/', '', 'vmicon vmicon-16-language', 6, '1', ''),
(56, 1, 0, '-', '', '', '', 2, '1', ''),
(57, 1, 0, '-', '', '', '', 9, '1', ''),
(58, 1, 0, '-', '', '', '', 11, '1', ''),
(59, 1, 0, '-', '', '', '', 13, '1', ''),
(60, 1, 0, '-', '', '', '', 15, '1', ''),
(61, 2, 0, '-', '', '', '', 7, '1', ''),
(62, 2, 0, '-', '', '', '', 3, '1', ''),
(63, 2, 0, '-', '', '', '', 9, '1', ''),
(64, 2, 0, '-', '', '', '', 11, '1', ''),
(65, 2, 0, '-', '', '', '', 15, '1', ''),
(66, 8, 0, '-', '', '', '', 3, '1', ''),
(67, 8, 0, '-', '', '', '', 9, '1', ''),
(68, 8, 0, '-', '', '', '', 11, '1', ''),
(69, 8, 0, '-', '', '', '', 15, '1', ''),
(70, 8, 0, '-', '', '', '', 5, '1', ''),
(71, 2, 0, '-', '', '', '', 19, '1', ''),
(72, 2, 0, '-', '', '', '', 23, '1', ''),
(73, 1, 0, 'Manage Extensions', 'page=admin.extension_list', '', 'vmicon vmicon-16-content', 15, '1', '')");

# Coupon start and expiry dates, thank you willowtree (http://forum.virtuemart.net/index.php?topic=41066.0)
$db->query( "ALTER TABLE `#__{vm}_coupons` ADD `coupon_start_date` DATETIME NULL ,
ADD `coupon_expiry_date` DATETIME NULL");

//Added for multivendoring 
//shows in Userlist if user is vendor
$db->query("ALTER TABLE `#__{vm}_user_info` ADD `user_is_vendor` TINYINT( 1 ) NOT NULL DEFAULT '0' AFTER `user_id ;`");
//Possibility for the admin to connect a added vendor to a user
$db->query("ALTER TABLE `#__{vm}_vendor` ADD `vendor_nick` VARCHAR( 150 ) NOT NULL ;");
//Sharing of Categories
$db->query("ALTER TABLE `#__{vm}_category_xref` ADD `category_shared` VARCHAR( 1 ) NOT NULL DEFAULT 'Y' ;");

//Set admin to mainshopper
$db->query("REPLACE `#__{vm}_auth_user_vendor` (`user_id`, `vendor_id`) VALUES (62, 1);");
//Not implemented yet
//Sharing of Discounts
//$db->query("ALTER TABLE `#__{vm}_product_discount` ADD `vendor_id` INT( 11 ) NOT NULL DEFAULT '0' AFTER `discount_id` ,
//ADD `discount_shared` CHAR( 1 ) NOT NULL DEFAULT 'N' AFTER `vendor_id` ;");

//Sharing of Producttypes
//$db->query("ALTER TABLE `j#__{vm}_product_type` ADD `vendor_id` INT( 11 ) NOT NULL DEFAULT '0' AFTER `product_type_list_order` ,
//ADD `product_type_shared` CHAR( 1 ) NOT NULL DEFAULT 'N' AFTER `vendor_id` ;");

