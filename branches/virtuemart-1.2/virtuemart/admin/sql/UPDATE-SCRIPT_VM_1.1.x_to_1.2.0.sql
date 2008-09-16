#############################################
# SQL update script for upgrading 
# from VirtueMart 1.1.x to VirtueMart 1.2.0
# $Id$
#############################################
UPDATE `jos_components` SET `params` = 'RELEASE=1.2.0\nDEV_STATUS=alpha' WHERE `name` = 'virtuemart_version';

 # allow manufacturer thumb images
ALTER TABLE `jos_vm_manufacturer` ADD `mf_thumb_image` VARCHAR( 255 ) default NULL ,
ADD `mf_full_image` VARCHAR( 255 ) default NULL ;

# define modules as administrator-relevant or not
ALTER TABLE `jos_vm_module` ADD `is_admin` ENUM( '0', '1' ) NOT NULL AFTER `module_publish` ;
UPDATE `jos_vm_module` SET `is_admin` = '1' 
	WHERE FIND_IN_SET( `module_name` , 'admin,product,vendor,shopper,order,store,tax,repotbasic, zone,shipping,manufacturer,help,coupon' ) >0 

# Remove the buggy affiliate module
DELETE FROM `jos_vm_module` WHERE module_name='affiliate' LIMIT 1;

# Make Admin Menu dynamic
CREATE TABLE `jos_vm_menu_admin` (
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
) TYPE=MyISAM  COMMENT='Administration Menu Items' AUTO_INCREMENT=56 ;

#
# Dumping data for table `jos_vm_menu_admin`
#

INSERT INTO `jos_vm_menu_admin` (`id`, `module_id`, `parent_id`, `name`, `link`, `depends`, `icon_class`, `ordering`, `published`, `tooltip`) VALUES
(1, 1, 0, 'PHPSHOP_CONFIG', 'page=admin.show_cfg', '', 'vmicon vmicon-16-config', 1, '1', ''),
(2, 1, 0, 'PHPSHOP_USERS', 'page=admin.user_list', '', 'vmicon vmicon-16-user', 2, '1', ''),
(3, 1, 0, 'VM_USERGROUP_LBL', 'page=admin.usergroup_list', '', 'vmicon vmicon-16-user', 3, '1', ''),
(4, 1, 0, 'VM_MANAGE_USER_FIELDS', 'page=admin.user_field_list', '', 'vmicon vmicon-16-content', 4, '1', ''),
(5, 1, 0, 'PHPSHOP_COUNTRY_LIST_MNU', 'page=admin.country_list', '', 'vmicon vmicon-16-content', 5, '1', ''),
(6, 1, 0, 'PHPSHOP_CURRENCY_LIST_MNU', 'page=admin.curr_list', '', 'vmicon vmicon-16-content', 6, '1', ''),
(7, 1, 0, 'PHPSHOP_MODULE_LIST_MNU', 'page=admin.module_list', '', 'vmicon vmicon-16-content', 7, '1', ''),
(8, 1, 0, 'VM_CHECK_UPDATES_MNU', 'page=admin.update_check', '', 'vmicon vmicon-16-content', 8, '1', ''),
(9, 8, 0, 'PHPSHOP_STATISTIC_SUMMARY', 'page=store.index', '', 'vmicon vmicon-16-info', 1, '1', ''),
(10, 8, 0, 'PHPSHOP_STORE_FORM_MNU', 'page=store.store_form', '', 'vmicon vmicon-16-config', 2, '1', ''),
(11, 8, 0, 'PHPSHOP_PAYMENT_METHOD_LIST_MNU', 'page=store.payment_method_list', '', 'vmicon vmicon-16-content', 3, '1', ''),
(12, 8, 0, 'PHPSHOP_PAYMENT_METHOD_FORM_MNU', 'page=store.payment_method_form', '', 'vmicon vmicon-16-editadd', 4, '1', ''),
(13, 8, 0, 'VM_SHIPPING_MODULE_LIST_LBL', 'page=store.shipping_module_list', '', 'vmicon vmicon-16-content', 5, '1', ''),
(14, 8, 0, 'PHPSHOP_CREDITCARD_LIST_LBL', 'page=store.creditcard_list', '', 'vmicon vmicon-16-content', 6, '1', ''),
(15, 8, 0, 'PHPSHOP_CREDITCARD_FORM_LBL', 'page=store.creditcard_form', '', 'vmicon vmicon-16-editadd', 7, '1', ''),
(16, 8, 0, 'VM_ORDER_EXPORT_MODULE_LIST_MNU', 'page=store.export_list', '', 'vmicon vmicon-16-content', 8, '1', ''),
(17, 8, 0, 'VM_ORDER_EXPORT_MODULE_FORM_MNU', 'page=store.export_form', '', 'vmicon vmicon-16-editadd', 9, '1', ''),
(18, 2, 0, 'CSVIMPROVED_TITLE', 'http://www.csvimproved.com/index.php?option=com_ionfiles&Itemid=2', '', 'vmicon vmicon-16-import', 1, '1', 'CSVIMPROVED_NEEDINSTALL'),
(19, 2, 0, 'PHPSHOP_PRODUCT_LIST_MNU', 'page=product.product_list', '', 'vmicon vmicon-16-content', 2, '1', ''),
(20, 2, 0, 'PHPSHOP_PRODUCT_FORM_MNU', 'page=product.product_form', '', 'vmicon vmicon-16-editadd', 3, '1', ''),
(21, 2, 0, 'PHPSHOP_PRODUCT_INVENTORY_MNU', 'page=product.product_inventory', '', 'vmicon vmicon-16-install', 4, '1', ''),
(22, 2, 0, 'PHPSHOP_SPECIAL_PRODUCTS', 'page=product.specialprod', '', 'vmicon vmicon-16-content', 5, '1', ''),
(23, 2, 0, 'PHPSHOP_PRODUCT_FOLDERS', 'page=product.folders', '', 'vmicon vmicon-16-content', 6, '1', ''),
(24, 2, 0, 'PHPSHOP_REVIEWS', 'page=product.review_list', '', 'vmicon vmicon-16-content', 7, '1', ''),
(25, 2, 0, 'PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL', 'page=product.product_discount_list', '', 'vmicon vmicon-16-content', 8, '1', ''),
(26, 2, 0, 'PHPSHOP_PRODUCT_DISCOUNT_FORM_MNU', 'page=product.product_discount_form', '', 'vmicon vmicon-16-editadd', 9, '1', ''),
(27, 2, 0, 'PHPSHOP_PRODUCT_TYPE_LIST_LBL', 'page=product.product_type_list', '', 'vmicon vmicon-16-content', 10, '1', ''),
(28, 2, 0, 'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU', 'page=product.product_type_form', '', 'vmicon vmicon-16-editadd', 11, '1', ''),
(29, 2, 0, 'PHPSHOP_CATEGORY_LIST_MNU', 'page=product.product_category_list', '', 'vmicon vmicon-16-content', 12, '1', ''),
(30, 2, 0, 'PHPSHOP_CATEGORY_FORM_MNU', 'page=product.product_category_form', '', 'vmicon vmicon-16-editadd', 13, '1', ''),
(31, 4, 0, 'PHPSHOP_SHOPPER_GROUP_LIST_MNU', 'page=shopper.shopper_group_list', '', 'vmicon vmicon-16-content', 1, '1', ''),
(32, 4, 0, 'PHPSHOP_SHOPPER_GROUP_FORM_MNU', 'page=shopper.shopper_group_form', '', 'vmicon vmicon-16-editadd', 2, '1', ''),
(33, 5, 0, 'PHPSHOP_ORDER_LIST_MNU', 'page=order.order_list', '', 'vmicon vmicon-16-content', 1, '1', ''),
(34, 5, 0, 'PHPSHOP_ORDER_STATUS_LIST_MNU', 'page=order.order_status_list', '', 'vmicon vmicon-16-content', 2, '1', ''),
(35, 5, 0, 'PHPSHOP_ORDER_STATUS_FORM_MNU', 'page=order.order_status_form', '', 'vmicon vmicon-16-editadd', 3, '1', ''),
(36, 3, 0, 'PHPSHOP_VENDOR_LIST_MNU', 'page=vendor.vendor_list', '', 'vmicon vmicon-16-content', 1, '1', ''),
(37, 3, 0, 'PHPSHOP_VENDOR_FORM_MNU', 'page=vendor.vendor_form', '', 'vmicon vmicon-16-editadd', 2, '1', ''),
(38, 3, 0, 'PHPSHOP_VENDOR_CAT_LIST_MNU', 'page=vendor.vendor_category_list', '', 'vmicon vmicon-16-content', 3, '1', ''),
(39, 3, 0, 'PHPSHOP_VENDOR_CAT_FORM_MNU', 'page=vendor.vendor_category_form', '', 'vmicon vmicon-16-editadd', 4, '1', ''),
(40, 12, 0, 'PHPSHOP_REPORTBASIC_MOD', 'page=reportbasic.index', '', 'vmicon vmicon-16-info', 1, '1', ''),
(41, 11, 0, 'PHPSHOP_TAX_LIST_MNU', 'page=tax.tax_list', '', 'vmicon vmicon-16-content', 1, '1', ''),
(42, 11, 0, 'PHPSHOP_TAX_FORM_MNU', 'page=tax.tax_form', '', 'vmicon vmicon-16-editadd', 2, '1', ''),
(43, 12839, 0, 'PHPSHOP_CARRIER_LIST_MNU', 'page=shipping.carrier_list', '', 'vmicon vmicon-16-content', 1, '1', ''),
(44, 12839, 0, 'PHPSHOP_CARRIER_FORM_MNU', 'page=shipping.carrier_form', '', 'vmicon vmicon-16-editadd', 2, '1', ''),
(45, 12839, 0, 'PHPSHOP_RATE_LIST_MNU', 'page=shipping.rate_list', '', 'vmicon vmicon-16-content', 3, '1', ''),
(46, 12839, 0, 'PHPSHOP_RATE_FORM_MNU', 'page=shipping.rate_form', '', 'vmicon vmicon-16-editadd', 4, '1', ''),
(47, 12843, 0, 'PHPSHOP_COUPON_LIST', 'page=coupon.coupon_list', '', 'vmicon vmicon-16-content', 1, '1', ''),
(48, 12843, 0, 'PHPSHOP_COUPON_NEW_HEADER', 'page=coupon.coupon_form', '', 'vmicon vmicon-16-editadd', 2, '1', ''),
(49, 99, 0, 'PHPSHOP_MANUFACTURER_LIST_MNU', 'page=manufacturer.manufacturer_list', '', 'vmicon vmicon-16-content', 1, '1', ''),
(50, 99, 0, 'PHPSHOP_MANUFACTURER_FORM_MNU', 'page=manufacturer.manufacturer_form', '', 'vmicon vmicon-16-editadd', 2, '1', ''),
(51, 99, 0, 'PHPSHOP_MANUFACTURER_CAT_LIST_MNU', 'page=manufacturer.manufacturer_category_list', '', 'vmicon vmicon-16-content', 3, '1', ''),
(52, 99, 0, 'PHPSHOP_MANUFACTURER_CAT_FORM_MNU', 'page=manufacturer.manufacturer_category_form', '', 'vmicon vmicon-16-editadd', 4, '1', ''),
(53, 12842, 0, 'VM_ABOUT', 'page=help.about', '', 'vmicon vmicon-16-info', 1, '1', ''),
(54, 12842, 0, 'VM_HELP_TOPICS', 'http://virtuemart.net/documentation/User_Manual/index.html', '', 'vmicon vmicon-16-help', 2, '1', ''),
(55, 12842, 0, 'VM_COMMUNITY_FORUM', 'http://forum.virtuemart.net/', '', 'vmicon vmicon-16-language', 3, '1', '');
