INSERT INTO `#__extensions` (`extension_id`, `package_id`, `name`, `type`, `element`, `folder`, `client_id`, `enabled`, `access`, `protected`, `manifest_cache`, `params`, `custom_data`, `system_data`, `checked_out`, `checked_out_time`, `ordering`, `state`) VALUES
	(10000, 0, 'VIRTUEMART', 'component', 'com_virtuemart', '', 1, 1, 0, 0, '{"name":"VIRTUEMART","type":"component","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004 - ${PHING.VM.YEAR} Virtuemart Team. All rights reserved.","authorEmail":"max|at|virtuemart.net","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"","group":"","filename":"virtuemart"}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
	(10001, 10000, 'VirtueMart_allinone', 'component', 'com_virtuemart_allinone', '', 1, 1, 0, 0, '{"name":"VirtueMart_allinone","type":"component","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004-2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
	(10002, 10000, 'VM Payment - Standard', 'plugin', 'standard', 'vmpayment', 0, 1, 1, 0, '{"name":"Standard","type":"plugin","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"Standard payment plugin","group":"","filename":"standard"}', '', '', '', 0, '0000-00-00 00:00:00', 20, 0),
	(10003, 10000, 'VM Payment - Klarna', 'plugin', 'klarna', 'vmpayment', 0, 0, 1, 0, '{"name":"Klarna","type":"plugin","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"Klarna VirtueMart Payment Plugin","group":"","filename":"klarna"}', '', '', '', 0, '0000-00-00 00:00:00', 6, 0),
	(10004, 10000, 'VM Payment - KlarnaCheckout', 'plugin', 'klarnacheckout', 'vmpayment', 0, 0, 1, 0, '{"name":"Klarna Checkout","type":"plugin","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"","group":"","filename":"klarnacheckout"}', '', '', '', 0, '0000-00-00 00:00:00', 20, 0),
	(10005, 10000, 'VM Payment - Sofort Banking/Überweisung', 'plugin', 'sofort', 'vmpayment', 0, 0, 1, 0, '{"name":"Sofort","type":"plugin","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"<a href=\\"http:\\/www.sofort.com\\" target=\\"_blank\\">Sofort<\\/a> is a popular\\n\\tpayment provider and available in many countries. \\n    ","group":"","filename":"sofort"}', '', '', '', 0, '0000-00-00 00:00:00', 4, 0),
	(10006, 10000, 'VM Payment - PayPal', 'plugin', 'paypal', 'vmpayment', 0, 0, 1, 0, '{"name":"PayPal","type":"plugin","creationDate":"July 27 2017","author":"VirtueMart Development Team","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"PayPal","group":"","filename":"paypal"}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
	(10007, 10000, 'VM Payment - Heidelpay', 'plugin', 'heidelpay', 'vmpayment', 0, 0, 1, 0, '{"name":"Heidelpay","type":"plugin","creationDate":"12-Sep-2012","author":"Heidelberger Payment GmbH","copyright":"Copyright Heidelberger Payment GmbH","authorEmail":"info@heidelpay.de","authorUrl":"http:\\/\\/www.heidelpay.de","version":"${PHING.VM.RELEASE}","description":"\\n        <h2>Virtuemart Plugin von:<\\/h2><p><a href=\\"http:\\/\\/www.Heidelpay.de\\" target=\\"_blank\\"><img src=\\"http:\\/\\/www.heidelpay.de\\/gfx\\/logo.gif\\" style=\\"margin-right:20px;\\"\\/><\\/a><\\/p> ","group":"","filename":"heidelpay"}', '', '', '', 0, '0000-00-00 00:00:00', 8, 0),
	(10008, 10000, 'VM Payment - Paybox', 'plugin', 'paybox', 'vmpayment', 0, 0, 1, 0, '{"name":"VM Payment - Paybox","type":"plugin","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"<a href=\\"http:\\/\\/paybox.com\\" target=\\"_blank\\">Paybox<\\/a> \\n    ","group":"","filename":"paybox"}', '', '', '', 0, '0000-00-00 00:00:00', 7, 0),
	(10009, 10000, 'VM Payment - 2Checkout', 'plugin', 'tco', 'vmpayment', 0, 0, 1, 0, '{"name":"2Checkout","type":"plugin","creationDate":"October 2015","author":"Craig Christenson","copyright":"Copyright (C) 2004-2015 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"http:\\/\\/www.2checkout.com","version":"${PHING.VM.RELEASE}","description":"<a href=\\"https:\\/\\/www.2checkout.com\\/referral?r=virtuemart\\" target=\\"_blank\\">2Checkout<\\/a> is a popular payment provider and available in many countries. \\n    ","group":"","filename":"tco"}', '', '', '', 0, '0000-00-00 00:00:00', 1, 0),
	(10010, 10000, 'VM Payment - Pay with Amazon', 'plugin', 'amazon', 'vmpayment', 0, 0, 1, 0, '{"name":"AMAZON","type":"plugin","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"AMAZON PAY plugin","group":"","filename":"amazon"}', '', '', '', 0, '0000-00-00 00:00:00', 2, 0),
	(10011, 10000, 'System - Pay with Amazon', 'plugin', 'amazon', 'system', 0, 0, 1, 0, '{"name":"AMAZON","type":"plugin","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"AMAZON payment SYSTEM plugin","group":"","filename":"amazon"}', '', '', '', 0, '0000-00-00 00:00:00', 2, 0),
	(10012, 10000, 'VM Payment - Realex HPP & API', 'plugin', 'realex_hpp_api', 'vmpayment', 0, 0, 1, 0, '{"name":"realex_hpp_api","type":"plugin","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"Realex HPP and API","group":"","filename":"realex_hpp_api"}', '', '', '', 0, '0000-00-00 00:00:00', 3, 0),
	(10013, 10000, 'VM UserField - Realex HPP & API', 'plugin', 'realex_hpp_api', 'vmuserfield', 0, 0, 1, 0, '{"name":"Realex_hpp_api","type":"plugin","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"Card storage plugin for Realex","group":"","filename":"realex_hpp_api"}', '', '', '', 0, '0000-00-00 00:00:00', 3, 0),
	(10014, 10000, 'VM Payment - Skrill', 'plugin', 'skrill', 'vmpayment', 0, 0, 1, 0, '{"name":"Skrill","type":"plugin","creationDate":"July 27 2017","author":"Skrill Holdings Limited","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"http:\\/\\/www.skrill.com","version":"${PHING.VM.RELEASE}","description":"<a href=\\"http:\\/\\/www.skrill.com\\" target=\\"_blank\\">skrill<\\/a> is a popular\\n\\tpayment provider authorised by the Financial Services Authority of the United Kingdom (FSA). \\n    ","group":"","filename":"skrill"}', '', '', '', 0, '0000-00-00 00:00:00', 9, 0),
	(10015, 10000, 'VM Payment - Authorize.net', 'plugin', 'authorizenet', 'vmpayment', 0, 0, 1, 0, '{"name":"Authorize.net AIM","type":"plugin","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"Authorize.net AIM","group":"","filename":"authorizenet"}', '', '', '', 0, '0000-00-00 00:00:00', 20, 0),
	(10016, 10000, 'VM Payment - Sofort iDeal', 'plugin', 'sofort_ideal', 'vmpayment', 0, 0, 1, 0, '{"name":"Sofort Ideal","type":"plugin","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"<a href=\\"http:\\/www.sofort.com\\" target=\\"_blank\\">Sofort<\\/a> is a popular\\n\\tpayment provider and available in many countries. \\n    ","group":"","filename":"sofort"}', '', '', '', 0, '0000-00-00 00:00:00', 5, 0),
	(10017, 10000, 'VM Payment - Klikandpay', 'plugin', 'klikandpay', 'vmpayment', 0, 0, 1, 0, '{"name":"VM Payment - klikandpay","type":"plugin","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"<a href=\\"http:\\/\\/klikandpay.com\\" target=\\"_blank\\">klikandpay<\\/a> \\n    ","group":"","filename":"klikandpay"}', '', '', '', 0, '0000-00-00 00:00:00', 10, 0),
	(10018, 10000, 'VM Shipment - By weight, ZIP and countries', 'plugin', 'weight_countries', 'vmshipment', 0, 1, 1, 0, '{"name":"By weight, ZIP and countries","type":"plugin","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"VMSHIPMENT_WEIGHT_COUNTRIES_PLUGIN_DESC","group":"","filename":"weight_countries"}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
	(10019, 10000, 'VM Custom - Customer text input', 'plugin', 'textinput', 'vmcustom', 0, 1, 1, 0, '{"name":"VMCustom - textinput","type":"plugin","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004-2014 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"text input plugin for product","group":"","filename":"textinput"}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
	(10020, 10000, 'VM Custom - Product specification', 'plugin', 'specification', 'vmcustom', 0, 1, 1, 0, '{"name":"plgvm_specification","type":"plugin","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004-2014 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"VMCustom - specification; text input plugin for product","group":"","filename":"specification"}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
	(10021, 10000, 'VM Calculation - Avalara Tax', 'plugin', 'avalara', 'vmcalculation', 0, 0, 1, 0, '{"name":"VM - Calculation Avalara Tax","type":"plugin","creationDate":"July 27 2017","author":"Max Milbers","copyright":"Copyright (C) 2013 iStraxx UG (haftungsbeschr\\u00e4nkt). All rights reserved","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"VM - Calculation Avalara Tax; On demand tax calculation for whole U.S.A.","group":"","filename":"avalara"}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
	(10022, 10000, 'VirtueMart Product', 'plugin', 'virtuemart', 'search', 0, 0, 1, 0, '{"name":"Search - VirtueMart","type":"plugin","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"PLG_SEARCH_VIRTUEMART_XML_DESCRIPTION","group":"","filename":"virtuemart"}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
	(10023, 10000, 'mod_vmmenu', 'module', 'mod_vmmenu', '', 1, 1, 3, 0, '{"name":"VirtueMart Administrator Menu","type":"module","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004-2013 Virtuemart Team. All rights reserved.","authorEmail":"max|at|virtuemart.net","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"MOD_VMMENU_XML_DESCRIPTION","group":"","filename":"mod_vmmenu"}', '', '', '', 0, '0000-00-00 00:00:00', 5, 0),
	(10024, 10000, 'mod_virtuemart_currencies', 'module', 'mod_virtuemart_currencies', '', 0, 1, 1, 0, '{"name":"mod_virtuemart_currencies","type":"module","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"MOD_VIRTUEMART_CURRENCIES_DESC","group":"","filename":"mod_virtuemart_currencies"}', '', '', '', 0, '0000-00-00 00:00:00', 5, 0),
	(10025, 10000, 'mod_virtuemart_product', 'module', 'mod_virtuemart_product', '', 0, 1, 1, 0, '{"name":"mod_virtuemart_product","type":"module","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"MOD_VIRTUEMART_PRODUCT_DESC","group":"","filename":"mod_virtuemart_product"}', '', '', '', 0, '0000-00-00 00:00:00', 3, 0),
	(10026, 10000, 'mod_virtuemart_search', 'module', 'mod_virtuemart_search', '', 0, 1, 1, 0, '{"name":"mod_virtuemart_search","type":"module","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"MOD_VIRTUEMART_SEARCH_DESC","group":"","filename":"mod_virtuemart_search"}', '', '', '', 0, '0000-00-00 00:00:00', 2, 0),
	(10027, 10000, 'mod_virtuemart_manufacturer', 'module', 'mod_virtuemart_manufacturer', '', 0, 1, 1, 0, '{"name":"mod_virtuemart_manufacturer","type":"module","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"MOD_VIRTUEMART_MANUFACTURER_DESC","group":"","filename":"mod_virtuemart_manufacturer"}', '', '', '', 0, '0000-00-00 00:00:00', 8, 0),
	(10028, 10000, 'mod_virtuemart_cart', 'module', 'mod_virtuemart_cart', '', 0, 1, 1, 0, '{"name":"mod_virtuemart_cart","type":"module","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"MOD_VIRTUEMART_CART_DESC","group":"","filename":"mod_virtuemart_cart"}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
	(10029, 10000, 'mod_virtuemart_category', 'module', 'mod_virtuemart_category', '', 0, 1, 1, 0, '{"name":"mod_virtuemart_category","type":"module","creationDate":"July 27 2017","author":"The VirtueMart Development Team","copyright":"Copyright (C) 2004 - 2017 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"https:\\/\\/virtuemart.net","version":"${PHING.VM.RELEASE}","description":"MOD_VIRTUEMART_CATEGORY_DESC","group":"","filename":"mod_virtuemart_category"}', '', '', '', 0, '0000-00-00 00:00:00', 4, 0),
	(10030, 10000, 'tcpdf', 'component', 'com_tcpdf', '', 1, 1, 0, 0, '{"name":"tcpdf","type":"component","creationDate":"February 2015","author":"Nicola Asuni, The VirtueMart Development Team","copyright":"Copyright (c) 2001-2013 Nicola Asuni - Tecnick.com LTD - Tutti i diritti riservati - All Rights Reserved. 2015 Virtuemart Team. All rights reserved.","authorEmail":"","authorUrl":"${PHING.VM.MAINTAINERURL}","version":"1.0.4","description":"TCPDF 6.2.12 by Nicola Asuni. Joomla Installer by the VirtueMart Team","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
	(10031, 10000, 'vmbeez3', 'template', 'vmbeez3', '', 0, 1, 1, 0, '{"name":"vmbeez3","type":"template","creationDate":"25 November 2009","author":"Angie Radtke, adapted by the VirtueMart team","copyright":"Copyright (C) 2005 - 2016 Open Source Matters, 2016 Virtuemart Team, Inc. All rights reserved.","authorEmail":"team@virtuemart.net","authorUrl":"http://virtuemart.net","version":"3.1.0","description":"TPL_BEEZ3_XML_DESCRIPTION","group":"","filename":"templateDetails"}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
	(10032, 10000, 'VM Framework Loader during Plugin Updates', 'plugin', 'vmLoaderPluginUpdate', 'system', 0, 1, 1, 0, '{"name":"VM Framework Loader during Plugin Updates","type":"plugin","creationDate":"2017-08-06","author":"Reinhold Kainhofer","copyright":"Copyright (C) 2017 The VirtueMart Team","authorEmail":"office@open-tools.net","authorUrl":"http:\\/\\/www.virtuemart.net\\/","version":"1.0","description":"Makes sure the VirtueMart framework is loaded during automatic plugin updates","group":"","filename":"vmLoaderPluginUpdate"}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0);


INSERT IGNORE INTO `#__menu_types` (`id`, `asset_id`, `menutype`, `title`, `description`, `client_id`) VALUES
	(1, 0, 'mainmenu', 'Main Menu', 'The main menu for the site', 0);
	
INSERT IGNORE INTO `#__modules` (`id`, `asset_id`, `title`, `note`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `publish_up`, `publish_down`, `published`, `module`, `access`, `showtitle`, `params`, `client_id`, `language`) VALUES
	(100, 0, 'VM - Administrator Module', '', '', 5, 'menu', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_vmmenu', 3, 1, '', 1, '*'),
	(101, 0, 'VM - Currencies Selector', '', '', 5, 'position-4', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_virtuemart_currencies', 1, 1, '', 0, '*'),
	(102, 0, 'VM - Featured products', '', '', 3, 'position-4', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_virtuemart_product', 1, 1, '', 0, '*'),
	(103, 0, 'VM - Search in Shop', '', '', 2, 'position-4', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_virtuemart_search', 1, 1, '', 0, '*'),
	(104, 0, 'VM - Manufacturer', '', '', 8, 'position-4', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_virtuemart_manufacturer', 1, 1, '', 0, '*'),
	(105, 0, 'VM - Shopping cart', '', '', 0, 'position-4', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_virtuemart_cart', 1, 1, '', 0, '*'),
	(106, 0, 'VM - Category', '', '', 4, 'position-4', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_virtuemart_category', 1, 1, '', 0, '*');
	
INSERT IGNORE INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES
	(100, 0),
	(101, 0),
	(102, 0),
	(103, 0),
	(104, 0),
	(105, 0),
	(106, 0);

UPDATE `#__template_styles` SET `home`='0' WHERE `client_id`=0 AND `home`=1 LIMIT 1;

INSERT INTO `#__template_styles` (`id`, `template`, `client_id`, `home`, `title`, `params`) VALUES
	(9, 'vmbeez3', 0, '1', 'vmbeez3 - Default', '{"wrapperSmall":53,"wrapperLarge":72,"logo":"","sitetitle":"","sitedescription":"","navposition":"left","bootstrap":"","templatecolor":"personal","headerImage":"","backgroundcolor":"#ffffff","fontsizeselect":"1","change_content_width":"1","content_width":1240,"main_menu_position":"main_menu_top","nav2cont_ratio":20}');


INSERT INTO `#__update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`, `extra_query`) VALUES
	(4, 'VirtueMart3 Update Site', 'extension', 'http://virtuemart.net/releases/vm3/virtuemart_update.xml', 1, 0, ''),
	(5, 'VirtueMart plg_vmpayment_standard Update Site', 'extension', 'http://virtuemart.net/releases/vm3/plg_vmpayment_standard_update.xml', 1, 0, ''),
	(6, 'VirtueMart plg_vmpayment_klarna Update Site', 'extension', 'http://virtuemart.net/releases/vm3/plg_vmpayment_klarna_update.xml', 1, 0, ''),
	(7, 'VirtueMart plg_vmpayment_klarnacheckout Update Site', 'extension', 'http://virtuemart.net/releases/vm3/plg_vmpayment_klarnacheckout_update.xml', 1, 0, ''),
	(8, 'VirtueMart plg_vmpayment_sofort Update Site', 'extension', 'http://virtuemart.net/releases/vm3/plg_vmpayment_sofort_update.xml', 1, 0, ''),
	(9, 'VirtueMart plg_vmpayment_paypal Update Site', 'extension', 'http://virtuemart.net/releases/vm3/plg_vmpayment_paypal_update.xml', 1, 0, ''),
	(10, 'VirtueMart plg_vmpayment_heidelpay Update Site', 'extension', 'http://virtuemart.net/releases/vm3/plg_vmpayment_heidelpay_update.xml', 1, 0, ''),
	(11, 'VirtueMart plg_vmpayment_paybox Update Site', 'extension', 'http://virtuemart.net/releases/vm3/plg_vmpayment_paybox_update.xml', 1, 0, ''),
	(12, 'VirtueMart3 plg_vmpayment_tco Update Site', 'extension', 'http://virtuemart.net/releases/vm3/plg_vmpayment_tco_update.xml', 1, 0, ''),
	(13, 'VirtueMart plg_vmpayment_amazon Update Site', 'extension', 'http://virtuemart.net/releases/vm3/plg_vmpayment_amazon_update.xml', 1, 0, ''),
	(14, 'VirtueMart plg_system_amazon Update Site', 'extension', 'http://virtuemart.net/releases/vm3/plg_system_amazon_update.xml', 1, 0, ''),
	(15, 'VirtueMart plg_vmpayment_realex_hpp_api Update Site', 'extension', 'http://virtuemart.net/releases/vm3/plg_vmpayment_realex_hpp_api_update.xml', 1, 0, ''),
	(16, 'VirtueMart plg_vmuserfield_realex_hpp_api Update Site', 'extension', 'http://virtuemart.net/releases/vm3/plg_vmuserfield_realex_hpp_api_update.xml', 1, 0, ''),
	(17, 'VirtueMart3 plg_vmpayment_skrill Update Site', 'extension', 'http://virtuemart.net/releases/vm3/plg_vmpayment_skrill_update.xml', 1, 0, ''),
	(18, 'VirtueMart plg_vmpayment_authorizenet Update Site', 'extension', 'http://virtuemart.net/releases/vm3/plg_vmpayment_authorisenet_update.xml', 1, 0, ''),
	(19, 'VirtueMart plg_vmpayment_sofort_ideal Update Site', 'extension', 'http://virtuemart.net/releases/vm3/plg_vmpayment_sofort_ideal_update.xml', 1, 0, ''),
	(20, 'VirtueMart plg_vmpayment_klikandpay Update Site', 'extension', 'http://virtuemart.net/releases/vm3/plg_vmpayment_klikandpay_update.xml', 1, 0, ''),
	(21, 'VirtueMart3 plg_vmshipment_weight_countries Update Site', 'extension', 'http://virtuemart.net/releases/vm3/plg_vmshipment_weight_countries_update.xml', 1, 0, ''),
	(22, 'VirtueMart3 plg_vmcustom_textinput Update Site', 'extension', 'http://virtuemart.net/releases/vm3/plg_vmcustom_textinput_update.xml', 1, 0, ''),
	(23, 'VirtueMart3 plg_vmcustom_specification Update Site', 'extension', 'http://virtuemart.net/releases/vm3/plg_vmcustom_specification_update.xml', 1, 0, ''),
	(24, 'VirtueMart3 plg_vmcalculation_avalara Update Site', 'extension', 'http://virtuemart.net/releases/vm3/plg_vmcalculation_avalara_update.xml', 1, 0, ''),
	(25, 'VirtueMart3 plg_search_virtuemart Update Site', 'extension', 'http://virtuemart.net/releases/vm3/plg_search_virtuemart_update.xml', 1, 0, ''),
	(26, 'VirtueMart3 MOD_VMENU Update Site', 'extension', 'http://virtuemart.net/releases/vm3/mod_vmmenu_update.xml', 1, 0, ''),
	(27, 'VirtueMart3 mod_virtuemart_currencies Update Site', 'extension', 'http://virtuemart.net/releases/vm3/mod_virtuemart_currencies_update.xml', 1, 0, ''),
	(28, 'VirtueMart3 mod_virtuemart_product Update Site', 'extension', 'http://virtuemart.net/releases/vm3/mod_virtuemart_product_update.xml', 1, 0, ''),
	(29, 'VirtueMart3 mod_virtuemart_search Update Site', 'extension', 'http://virtuemart.net/releases/vm3/mod_virtuemart_search_update.xml', 1, 0, ''),
	(30, 'VirtueMart3 mod_virtuemart_manufacturer Update Site', 'extension', 'http://virtuemart.net/releases/vm3/mod_virtuemart_manufacturer_update.xml', 1, 0, ''),
	(31, 'VirtueMart3 mod_virtuemart_cart Update Site', 'extension', 'http://virtuemart.net/releases/vm3/mod_virtuemart_cart_update.xml', 1, 0, ''),
	(32, 'VirtueMart3 mod_virtuemart_category Update Site', 'extension', 'http://virtuemart.net/releases/vm3/mod_virtuemart_category_update.xml', 1, 0, ''),
	(33, 'VirtueMart3 AIO Update Site', 'extension', 'http://virtuemart.net/releases/vm3/virtuemart_aio_update.xml', 1, 0, ''),
	(34, 'TCPDF Update Site', 'extension', 'http://virtuemart.net/releases/TCPDF/tcpdf.xml', 1, 0, '');
	
INSERT IGNORE INTO `#__update_sites_extensions` (`update_site_id`, `extension_id`) VALUES
	(4, 10000),
	(5, 10002),
	(6, 10003),
	(7, 10004),
	(8, 10005),
	(9, 10006),
	(10, 10007),
	(11, 10008),
	(12, 10009),
	(13, 10010),
	(14, 10011),
	(15, 10012),
	(16, 10013),
	(17, 10014),
	(18, 10015),
	(19, 10016),
	(20, 10017),
	(21, 10018),
	(22, 10019),
	(23, 10020),
	(24, 10021),
	(25, 10022),
	(26, 10023),
	(27, 10024),
	(28, 10025),
	(29, 10026),
	(30, 10027),
	(31, 10028),
	(32, 10029),
	(33, 10001),
	(34, 10030);