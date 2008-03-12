<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
*
* @version $Id: admin.martlanguages.php,v 1.6 2006/01/15 19:42:45 soeren_nb Exp $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2005 Soeren Eberhardt. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
class vmLanguage extends vmAbstractLanguage {
	var $_PHPSHOP_MENU = 'ເມນູ';
	var $_PHPSHOP_CATEGORY = 'ຫມວດສິນຄ້າ';
	var $_PHPSHOP_CATEGORIES = 'ຫມວດສິນຄ້າ ';
	var $_PHPSHOP_SELECT_CATEGORY = 'ເລືອກປະເພດ: ';
	var $_PHPSHOP_ADMIN = 'ຜູ້ບໍລິຫານຮ້ານຄ້າ';
	var $_PHPSHOP_PRODUCT = 'ສິນຄ້າ ';
	var $_PHPSHOP_LIST = 'ລາຍການ';
	var $_PHPSHOP_ALL = 'ທັງຫົມດ';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'ລາຍການສິນຄ້າທັງຫົມດ';
	var $_PHPSHOP_VIEW = 'ເບິ່ງ';
	var $_PHPSHOP_SHOW = 'ສະແດງ';
	var $_PHPSHOP_ADD = ' ເພີ່ມ';
	var $_PHPSHOP_UPDATE = 'ປັບປຸງ';
	var $_PHPSHOP_DELETE = 'ລົບ';
	var $_PHPSHOP_SELECT = 'ເລືອກ';
	var $_PHPSHOP_SUBMIT = 'ກະຕ່າ';
	var $_PHPSHOP_RANDOM = 'ສິນຄ້າມື້ນີ້';
	var $_PHPSHOP_LATEST = 'ສິນຄ້າລ່າສຸດ';
	var $_PHPSHOP_HOME_TITLE = 'ໜ້າຮ້ານ';
	var $_PHPSHOP_CART_TITLE = 'ຊຳລະເງິນ';
	var $_PHPSHOP_CHECKOUT_TITLE = 'ສ້າງລາຍການສັ່ງຊື້';
	var $_PHPSHOP_LOGIN_TITLE = 'ເຂົ້າສູ່ລະບົບ';
	var $_PHPSHOP_LOGOUT_TITLE = 'ອອກຈາກລະບົບ';
	var $_PHPSHOP_BROWSE_TITLE = 'ເລືອກ';
	var $_PHPSHOP_SEARCH_TITLE = 'ຄົ້ນຫາ';
	var $_PHPSHOP_ACCOUNT_TITLE = 'ຈັດການບັນຊີຜູ້ໃຊ້ງານ';
	var $_PHPSHOP_NAVIGATION_TITLE = 'ຄວບຄຸມທິດທາງ';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'ຜະແນກ';
	var $_PHPSHOP_INFO = 'ລາຍລະອຽດ';
	var $_PHPSHOP_BROWSE_LBL = 'ເລືອກຊື້';
	var $_PHPSHOP_PRODUCTS_LBL = 'ສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_LBL = 'ສິນຄ້າ';
	var $_PHPSHOP_SEARCH_LBL = 'ຄົ້ນຫາ ';
	var $_PHPSHOP_FLYPAGE_LBL = 'ລາຍລະອຽດສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'ຄົ້ນຫາສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'ຊື່ສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'ໝວດສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'ລາຍລະອຽດ';
	var $_PHPSHOP_CART_SHOW = 'ສະແດງລົດສິນຄ້າ';
	var $_PHPSHOP_CART_ADD_TO = 'ເອາເຄື່ອງໃສລໍ້ຢູ້';
	var $_PHPSHOP_CART_NAME = 'ຊື່';
	var $_PHPSHOP_CART_SKU = 'ລະຫັດສິນຄ້າ] ';
	var $_PHPSHOP_CART_PRICE = 'ຮາຄາ';
	var $_PHPSHOP_CART_QUANTITY = 'ຈຳນວນ';
	var $_PHPSHOP_CART_SUBTOTAL = 'ຍອດລວມ';
	var $_PHPSHOP_ADD_SHIPTO_1 = ' ເພິ່ມ';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'ສະຖານທີ່ຈັດສົ່ງ';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'ບໍ່ພົບລາຍການທີ່ຄົ້ນຫາ<br /> ';
	var $_PHPSHOP_PRICE_LABEL = 'ລາຄາ: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'ເອົາໃສ່ລົດລໍ້ຢູ້';
	var $_PHPSHOP_NO_CUSTOMER = 'ທ່ານຍັງບໍ່ໄດ້ລົງທະບຽນ ກະລຸນາລະບຸລາຍລະອຽດຂອງທ່ານ';
	var $_PHPSHOP_DELETE_MSG = 'ຕ້ອງການລົບລາຍການນີ້? ';
	var $_PHPSHOP_THANKYOU = 'ຂອບໃຈທີ່ສັ່ງຊື້ສິນຄ້າ';
	var $_PHPSHOP_NOT_SHIPPED = 'ຍັງບໍ່ໄດ້ຈັດສົ່ງ';
	var $_PHPSHOP_EMAIL_SENDTO = 'ການຢືນຢັນລາຍການໄດ້ຈັດສົ່ງໃຫ້ທາງອີເມລ໌ແລ້ວ';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'ຂະອໍໄພ ບໍ່ພົບຜູ້ໃຊ້ໃນລະບົບຂອງແມມໂບ້ລາວລາວຈຶ່ງບໍ່ສາມາດເພີ່ມໃນສ່ວນຂອງຜູ້ໃຊ້ງານ com_virtuemart';
	var $_PHPSHOP_ERROR = 'ຜິດພາດ';
	var $_PHPSHOP_MOD_NOT_REG = 'ຍັງບໍ່ໄດ້ລົງທະບຽນໂມດູນ';
	var $_PHPSHOP_MOD_ISNO_REG = 'ບໍ່ແມ່ນໂມດູນຂອງ virtuemart';
	var $_PHPSHOP_MOD_NO_AUTH = 'ທ່ານບໍ່ມີສິດໃນການເຂົ້າເຖິງໂມດູນນີ້';
	var $_PHPSHOP_PAGE_404_1 = 'ຍັງບໍ່ໄດ້ຕິດຕັ້ງ';
	var $_PHPSHOP_PAGE_404_2 = 'ບໍ່ພົບໄຟລ໌ນີ້: ';
	var $_PHPSHOP_PAGE_403 = 'ການເຂົ້າເຖິງບໍ່ຖືກຕ້ອງ';
	var $_PHPSHOP_FUNC_NO_EXEC = 'ທ່ານບໍ່ມີສິດໃຊ້ງານ ';
	var $_PHPSHOP_FUNC_NOT_REG = 'ຍັງບໍ່ໄດ້ລົງທະບຽນຟັງກ໌ຊັນ';
	var $_PHPSHOP_FUNC_ISNO_REG = ' ບໍ່ແມ່ນຟັງກ໌ຊັ່ນຂອງ MOS_com_virtuemart';
	var $_PHPSHOP_ADMIN_MOD = 'ຜູ້ບໍລິຫານຮ້ານຄ້າ';
	var $_PHPSHOP_USER_LIST_MNU = 'ຜູ້ໃຊ້ງານ';
	var $_PHPSHOP_USER_LIST_LBL = 'ຜູ້ໃຊ້ງານ';
	var $_PHPSHOP_USER_LIST_USERNAME = 'ຊື່ຜູ້ໃຊ້';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'ຊື່ເຕັມ';
	var $_PHPSHOP_USER_LIST_GROUP = 'ກຸ່ມ';
	var $_PHPSHOP_USER_FORM_MNU = 'ເພີ່ມຜູ້ໃຊ້ງານ';
	var $_PHPSHOP_USER_FORM_LBL = 'ເພີ່ມ / ແກ້ໄຂລາຍລະອຽດຜູ້ໃຊ້ງານ';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'ທີ່ຢູ່ໃບແຈ້ງຫນີ້';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'ສະຖານທີ່ຈັດສົ່ງ';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'ເພີ່ມທີ່ອຍູ່';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'ບໍ່ມີສະຖານທີ່ຈັດສົ່ງ';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'ຊື່ເລກ';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'ຊື່';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'ນາມສະກຸນ';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'ຊື່ກາງ';
	var $_PHPSHOP_USER_FORM_TITLE = 'ຄຳນຳໜ້າຊື່';
	var $_PHPSHOP_USER_FORM_USERNAME = 'ຊື່ຜູ້ໃຊ້ງານ';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'ລະຫັດຜ່ານ';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'ຢືນຢັນລະຫັດຜ່ານ';
	var $_PHPSHOP_USER_FORM_PERMS = 'ການກຳນົດສິດ';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'ລະຫັດ ຫລື ID ລູກຄ້າ ';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'ບໍລິສັດ';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'ທີ່ຢູ່ 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'ທີ່ຢູ່ 2';
	var $_PHPSHOP_USER_FORM_CITY = 'ເມື່ອງ';
	var $_PHPSHOP_USER_FORM_STATE = 'ແຂວງ';
	var $_PHPSHOP_USER_FORM_ZIP = 'ລະຫັດໄປສະຍີ';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'ປະເທດ';
	var $_PHPSHOP_USER_FORM_PHONE = 'ໂທລະສັບ';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'ໂທລະສັບມືຖື';
	var $_PHPSHOP_USER_FORM_FAX = 'ແຟັກ';
	var $_PHPSHOP_USER_FORM_EMAIL = 'ອີເມລ';
	var $_PHPSHOP_MODULE_LIST_MNU = 'ໂມດູນ';
	var $_PHPSHOP_MODULE_LIST_LBL = 'ໂມດູນ';
	var $_PHPSHOP_MODULE_LIST_NAME = 'ຊື່ໂມດູຂ';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'ຜູ້ມີສິດໃຊ້ງານ';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'ຟັງກ໌ຊັນ';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'ລຽງລຳດັບ';
	var $_PHPSHOP_MODULE_FORM_MNU = 'ເພີ່ມໂມດູນ';
	var $_PHPSHOP_MODULE_FORM_LBL = 'ລາຍລະອຽດໂມດູນ';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'ຊື່ໂມດູນ (ສຳລັບເມນູດ້ານເທິງ) ';
	var $_PHPSHOP_MODULE_FORM_NAME = 'ຊື່ໂມດູນ';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'ຜູ້ມີສິດໃຊ້ງານ';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'ໂມດູນ Header';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'ໂມດູນ Footer';
	var $_PHPSHOP_MODULE_FORM_MENU = 'ສະແດງລາຍການໂມດູນໃນສ່ວນຂອງເມນູຜູ້ເບິ່ງແຍງລະບົບ? ';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'ລຳດັບການສະແດງ';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'ລາຍລະອຽດໂມດູນ';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'ລະຫັດພາສາ';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'ໄຟລ໌ພາສາ';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'ຟັງກ໌ຊັນ';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'ຟັງກ໌ຊັນ';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'ຊື່ຟັງກ໌ຊັນ';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'ຊື່ຄາສ';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'ຄາດເມດທ໋ອດ';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'ຜູ້ມີສິດໃຊ້ງານ';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'ເພີ່ມຟັງກ໌ຊັນ';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'ລາຍລະອຽດຟັງກ໌ຊັນ';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'ຊື່ຟັງກຊັນ';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'ຊື່ຄາສ';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'ຄາດເມດອດ';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'ຜູ້ມີສິດໃຊ້ງານ';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'ລາຍລະອຽດຟັງກ໌ຊັນ';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'ສະກຸນເງິນ';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'ສະກຸນເງິນ';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'ເພີ່ມສະກຸນເງິນ';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'ຊື່ສະກຸນເງິນ';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'ສັນລັກສະນະ';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'ປະເທດ';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'ລາຍຊື່ປະເທດ';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'ເພີ່ມປະເທດ';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'ຊື່ປະເທດ';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'ລະຫັດປະເທດ  (3) ';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'ລະຫັດປະເທດ  (2) ';
	var $_PHPSHOP_STATE_LIST_MNU = 'ລາຍຊື່ເມືອງ';
	var $_PHPSHOP_STATE_LIST_LBL = 'ລາຍຊື່ເມືອງ: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'ເພີ່ມຫຼືແກ້ໄຂຊື່ເມືອງ';
	var $_PHPSHOP_STATE_LIST_NAME = 'ຊື່ເມືອງ';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'ລະຫັດເມືອງ  (3) ';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'ລະຫັດເມືອງ  (2) ';
	var $_PHPSHOP_ADDRESS = 'ທີ່ຢູ່';
	var $_PHPSHOP_CONTINUE = 'ເຮັດລາຍການຕໍ່';
	var $_PHPSHOP_EMPTY_CART = 'ລໍ້ເຄື່ອງຂອງທ່ານຍັງບໍ່ມີລາຍການສິນຄ້າ';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Ping InterShipper Server';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'InterShipper-Server Ping ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'InterShipper Ping ລົ້ມເຫລວ';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'InterShipper Ping ສຳເລັດ';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'ຜູ້ສົ່ງ';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'ຕອບຮັບ <br / > ເວລາ ';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'ວິນາທີ';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'ວິທີການຂົນສົ່ງ';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'ເລືອກ';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'ວິທີການຂົນສົ່ງ';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'ເລືອກ';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'ຄ່າຈັດການ';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'ຊ່ວງເວລາ';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'ອັດຕາຄົງທີ່';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'ເປີລ໌ເຊັນ';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'ວັນ';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'ນ້ຳໜັກບັນທຸກຫຼາຍ';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'ຕັ້ງຄ່າວິທີການຂົນສົ່ງ';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'ເພີ່ມວິທີການຂົນສົ່ງ';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'ຕັ້ງຄ່າວິທີການຂົນສົ່ງ';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'ລີເຟຊ';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'ວິທີການຂົນສົ່ງ';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'ເລືອກ';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'ຄ່າຈັດການ';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'ຊ່ວງເວລາ';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'ອັດຕາຄົງທີ່';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'ເປີລ໌ເຊັນຕ';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'ວັນ';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'ນ້ຳໜັກບັນທຸກຫຼາຍ';
	var $_PHPSHOP_ORDER_MOD = 'ລາຍການສັ່ງຊື້';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'ຢືນຢັນການສັ່ງຊື້';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'ຍົກເລີກການສັ່ງຊື້';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'ພິມລາຍການສັ່ງຊື້';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'ລົບລາຍການສັ່ງຊື້';
	var $_PHPSHOP_ORDER_LIST_MNU = 'ລາຍການສັ່ງຊື້';
	var $_PHPSHOP_ORDER_LIST_LBL = 'ລາຍການສັ່ງຊື້';
	var $_PHPSHOP_ORDER_LIST_ID = 'ເລກທີ່ສັ່ງຊື້';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'ວັນທີ່ສັ່ງຊື້';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'ປັບປຸງລ່າສຸດ';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'ສະຖານະ';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'ຍອດລວມ';
	var $_PHPSHOP_ORDER_ITEM = 'ລາຍການສັ່ງຊື້';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'ລາຍການສັ່ງຊື້';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'ເລກທີ່ໃບສັ່ງຊື້';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'ວັນທີ່ສັ່ງຊື້';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'ສະຖານະການສັ່ງຊື້';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'ລາຍລະອຽດລູກຄ້າ';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'ລາຍລະອຽດໃບແຈ້ງຫນີ້';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'ລາຍລະອຽດສະຖານທີ່ຈັດສົ່ງ';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'ໃບແຈ້ງຫນີ້';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'ສະຖານທີ່ຈັດສົ່ງ';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'ຊື່';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'ບໍລິສັດ';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'ທີ່ຢູ່ 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'ທີ່ຢູ່ 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'ເມື່ອງ';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'ແຂວງ';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'ລະຫັດໄປສະນີ';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'ປະເທດ';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'ໂທລະສັບ';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'ແຟ໋ກ';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'ອີເມລ';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'ລາຍການ';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'ຈຳນວນ';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'ຈຳນວນ';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'ລະຫັດສິນຄ້າ ';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'ລາຄາ';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'ລວມທັງສິ້ນ';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'ຍອດລວມ';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'ຍອດພາສີລວມ';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'ຄ່າຂົນສົ່ງແລະຄ່າຈັດການ';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'ພາສີການຂົນສົ່ງ';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'ວິທີຊຳລະເງິນ';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'ຊື່ບັນຊີ';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'ໝາຍເລກບັນຊີ';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'ມື້ໝົດອາຍຸ';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'ບັນທຶກການຊຳລະເງິນ';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'ລາຍລະອຽດການຂົນສົ່ງ';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'ລາຍລະອຽດການຊຳລະເງິນ';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'ຜູ້ຂົນສົ່ງ';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'ໝວດການຂົນສົ່ງ';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'ວັນທີ່ຈັດສົ່ງ';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'ຄ່າຂົນສົ່ງ';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'ສະຖານະການສັ່ງຊື້';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'ເພີ່ມສະຖານະ';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'ລະຫັດສະຖານະ';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'ຊື່ສະຖານະ';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'ສະຖານະການສັ່ງຊື້';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'ລະຫັດສະຖານະ';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'ຊື່ສະຖານະ';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'ລຽງລຳດັບ';
	var $_PHPSHOP_PRODUCT_MOD = 'ສິນຄ້າ';
	var $_PHPSHOP_CURRENT_PRODUCT = 'ສິນຄ້າປັດຈຸບັນ';
	var $_PHPSHOP_CURRENT_ITEM = 'ລາຍການປັດຈຸບັນ';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'ສິນຄ້າໃນຄັງ';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'ສິນຄ້າໃນຄັງ';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'ລາຄາ';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'ຈຳນວນ';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'ນ້ຳຫນັກ';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'ລາຍການສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'ລາຍການສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'ຊື່ສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'ລະຫັດສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'ເຜີຍແຜ່';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'ຄົ້ນຫາສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'ປັບປຸງ';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'ພ້ອມລາຄາປ່ຽນແປງ';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'ບໍ່ລວມລາຄາ';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'ຫຼັງ';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'ກ່ອນ';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'ເພີ່ມລາຍການສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'ແກ້ໄຂລາຍການສິນຄ້ານີ້';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'ສະແດງສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'ເພີ່ມລາຍການ';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'ເພີ່ມລາຍການອື່ນ ໆ';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'ສິນຄ້າໃຫມ່';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'ປັບປຸງສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'ລາຍລະອຽດສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'ສະຖານະສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'ຂະໜາດແລະນ້ຳຫນັກ';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'ພາບຖ່າຍສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'ລາຍການໃຫມ່';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'ປັບປຸງລາຍການ';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'ລາຍລະອຽດ';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'ສະຖານະ';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'ຂະໜາດແລະນ້ຳຫນັກ';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'ຮູບພາບ';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'ກັບໄປຍັງໜ້າສິນຄ້າຫຼັກ';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'ຕ້ອງການປ່ຽນແປງຮູບພາບ ເລືອກພາບໃຫມ່';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'ລົບຮູບພາບ';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'ລາຍການສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'ຄຸນລັກຊະນະ';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'ຕ້ອງການລົບສິນຄ້າ \\nແລະລາຍລະອຽດທີ່ກ່ຽວຂ້ອງກັບສິນຄ້ານີ້? ';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'ຕ້ອງການລົບລາຍການນີ້ຫລືບໍ່';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'ຜູ້ຂາຍ';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'ໂຮງງານ';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'ລະຫັດສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'ຊື່';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'ເວັບໄຊ້';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'ໝວດສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'ລາຄາສິນຄ້າ (ຍອດລວມ) ';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'ລາຄາສິນຄ້າ (ສຸດທິ) ';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'ລາຍລະອຽດສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'ລາຍລະອຽດ';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'ສິນຄ້າໃນສະຕ໋ອກ';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'ມີຕາມສັ່ງ ແຕ່ຍັງບໍ່ມີສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'ວັນທີ່ມີສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'ລາຍການພິເສດ';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'ປະເພດສ່ວນລົດລາຄາ';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'ເຜີຍແຜ່? ';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'ຢາວ';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'ກວ້າງ';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'ສູງ';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'ຫນ່ວຍນັບ';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'ນ້ຳຫນັກ';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'ຫນ່ວຍນັບ';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'ຮູບຍໍ້';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'ຮູບພາບ';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'ກິໂລແມັດ';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'ເຊັນຕິເມດ';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'ຫນ່ວຍນັບ';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'ອັນ';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'ຫນ່ວຍຕໍ່ແພັກ';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'ສາມາດລະບຸຈຳນວນຕໍ່ແພ໋ກ (ສູງສຸດ 65535) ';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'ຫນ່ວຍຕໍ່ກ໋ອງ';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'ສາມາດລະບຸຈຳນວນຕໍ່ກ່ອງ (ສູງສຸດ 65535) ';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'ຜົນການເພີ່ມສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'ຜົນການປັບປຸງສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'ຜົນການເພີ່ມລາຍການ';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'ຜົນການປັບປຸງລາຍການ';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'ນຳເຂົ້າຂໍ້ມູນຈາກໄຟລ໌ CSV';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'ໂຟນເດີລ໌ໝວດໝູ່ສິນຄ້າ';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'ໝວດສິນຄ້າ';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'ໝວດສິນຄ້າ';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'ເພີ່ມໝວດສິນຄ້າ';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'ລາຍລະອຽດ';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'ຊື່ຫມວດ';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'ໝວດຫລັກ';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'ລາຍລະອຽດ';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'ເຜີຍແຜ່? ';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'ໜ້າຕ່າງສະແດງໝວດສິນຄ້າ';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'ລັກສະນະ';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'ລັກສະນະ ';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'ລັກສະນະ ';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'ລຽງລຳດັບ';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'ເພີ່ມລັກສະນະ ';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'ແບບຟອລ໌ມລັກສະນະ ';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'ເພີ່ມລັກສະນະໃໝ່ສຳລັບສິນຄ້າ ';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'ປັບປຸງລັກສະນະສິນຄ້າ';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'ເພີ່ມລາຍການເຈົ້າຄູນລັກສະນະ';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'ປັບປຸງລາຍການລັກສະນະ“';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'ຊື່ລັກສະນະ';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'ລຽງລຳດັບ';
	var $_PHPSHOP_PRICE_LIST_MNU = 'ລາຍການໝວດສິນຄ້າ';
	var $_PHPSHOP_PRICE_LIST_LBL = 'ລາຍການລາຄາ';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'ລາຄາສຳຫຼັບ';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'ຊື່ຫມວດ';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'ລາຄາ ';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'ສະກຸນເງິນ';
	var $_PHPSHOP_PRICE_FORM_MNU = 'ເພີ່ມລາຄາໃຫມ່';
	var $_PHPSHOP_PRICE_FORM_LBL = 'ລາຍລະອຽດລາຄາ';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'ລາຄາສິນຄ້າໃໝ່ ສຳລັບສິນຄ້າ ';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'ປັບປຸ່ງລາຄາສິນຄ້າ';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'ລາຄາໃຫມ່';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'ປັບປຸ່ງລາຄາ';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'ລາຄາ';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'ສະກຸນເງິນ';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'ກຸ່ມຜູ້ຊື້';
	var $_PHPSHOP_REPORTBASIC_MOD = 'ລາຍງານ';
	var $_PHPSHOP_RB_INDIVIDUAL = 'ສະເພາະລາຍການສິນຄ້າ';
	var $_PHPSHOP_RB_SALE_TITLE = 'ລາຍງານຍອດຂາຍ';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'ລາຍງານຍອດຂາຍ';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'ກຳນົດລະຍະເວລາ';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'ລາຍເດືອນ';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'ລາຍອາທິດ';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'ລາຍວັນ';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'ເດືອນນີ້';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'ເດືອນແລ້ວ';
	var $_PHPSHOP_RB_LAST60_BUTTON = '60 ມື້ສຸດທ້າຍ';
	var $_PHPSHOP_RB_LAST90_BUTTON = '90 ມື້ສຸດທ້າຍ';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'ເລີ່ມມື້ທີ່';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'ຮອດມື້ທີ່';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'ສະແດງລາຍການຕາມທີ່ເລືອກ';
	var $_PHPSHOP_RB_REPORT_FOR = 'ລາຍງານສຳລັບ ';
	var $_PHPSHOP_RB_DATE = 'ມື້ທີ່';
	var $_PHPSHOP_RB_ORDERS = 'ລາຍການສັ່ງຊື້';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'ລາຍການຂາຍລວມ';
	var $_PHPSHOP_RB_REVENUE = 'ລາຍໄດ້';
	var $_PHPSHOP_RB_PRODLIST = 'ລາຍການສິນຄ້າ';
	var $_PHPSHOP_SHOP_MOD = 'ຮ້ານຄ້າ';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'ຮູບພາບ';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'ລາຄາ';
	var $_PHPSHOP_ORDER_STATUS_P = 'ກຳລັງດຳເນີນການ';
	var $_PHPSHOP_ORDER_STATUS_C = 'ຢືນຢັນການສັ່ງຊື້';
	var $_PHPSHOP_ORDER_STATUS_X = 'ຍົກເລີກການສັ່ງຊື້';
	var $_PHPSHOP_ORDER_BUTTON = 'ສັ່ງຊື້';
	var $_PHPSHOP_SHOPPER_MOD = 'ຜູ້ຊື້';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'ຜູ້ຊື້';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'ຜູ້ຊື້';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'ຊື່ຜູ້ໃຊ້';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'ຊື່ເຕັມ';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'ກຸ່ມ';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'ເພີ່ມຜູ້ຊື້';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'ລາຍລະອຽດຜູ້ຊື້';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'ທີ່ຢູ່ໃບແຈ້ງຫນີ້';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'ລາຍລະອຽດ';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'ທີ່ຢູ່ສຳລັບຈັດສົ່ງສິນຄ້າ';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'ເພີ່ມທີ່ຢູ່';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'ຊື່';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'ຊື່ຜູ້ໃຊ້ງານ';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'ຊື່';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'ນາມສະກຸນ';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'ຊື່ກາງ';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'ຄຳນຳໜ້າຊື່';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'ຊື່ຜູ້ຊື່';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'ລະຫັດຜ່ານ';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'ຢືນຢັນລະຫັດຜ່ານ';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'ກຸ່ມຜູ້ຊື້';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'ຊື່ບໍລິສັດ';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'ທີ່ຢູ່ 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'ທີ່ຢູ່ 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'ເມື່ອງ';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'ແຂວງ';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'ລະຫັດໄປສະນີ';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'ປະເທດ';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'ໂທລະສັບ';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'ໂທລະສັບມືຖື';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'ໂທລະສານ';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'ອີເມລ';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Yes';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'No';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'ກຸ່ມຜູ້ຊີ້';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'ກຸ່ມຜູ້ຊື້';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'ຊື່ກຸ່ມ';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'ລາຍລະອຽດກຸ່ມ';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'ແບບຟອລ໌ມະກຸ່ມຜູ້ຊື້';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'ເພີ່ມກຸ່ມຜູ້ຊື້';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'ຊື່ກຸ່ມ';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'ລາຍລະອຽດກຸ່ມ';
	var $_PHPSHOP_STORE_MOD = 'ຮ້ານຄ້າ';
	var $_PHPSHOP_STORE_FORM_MNU = 'ຕັ້ງຄ່າຮ້ານຄ້າ';
	var $_PHPSHOP_STORE_FORM_LBL = 'ລາຍລະອຽດຮ້ານຄ້າ';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'ລາຍລະອຽດການຕິດຕໍ່';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'ຮູບພາບ';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'ອັບໂຫລດຮູບພາບ';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'ຊື່ຮ້ານຄ້າ';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'ຊື່ບໍລິສັດ ຯ';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'ທີ່ຢູ່ 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'ທີ່ຢູ່ 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'ເມື່ອງ';
	var $_PHPSHOP_STORE_FORM_STATE = 'ແຂວງ';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'ປະເທດ';
	var $_PHPSHOP_STORE_FORM_ZIP = 'ລະຫັດໄປສະນີ ';
	var $_PHPSHOP_STORE_FORM_PHONE = 'ໂທລະສັບ ';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'ສະກຸນເງິນ';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'ໝວດຫມູ່';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'ນາມສະກຸນ';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'ຊື່';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'ຊື່ກາງ';
	var $_PHPSHOP_STORE_FORM_TITLE = 'ຄຳນຳໜ້າຊື່';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'ໂທລະສັບ 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'ໂທລະສັບ 2';
	var $_PHPSHOP_STORE_FORM_FAX = ' ໂທລະສານ';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'ອີເມລ';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'ທີ່ເກັບຮູບພາບ';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'ລາຍລະອຽດ';
	var $_PHPSHOP_PAYMENT = 'ການຊຳລະເງິນ';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'ວິທີການຊຳລະເງິນ';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'ວິທີການຊຳລະເງິນ';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'ຊື່';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'ລະຫັດ';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'ສ່ວນລົດ';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'ກຸ່ມຜູ້ຊື້';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'ປະເພດວິທີຊຳລະເງິນ';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'ເພີ່ມວິທີການຊຳລະເງິນ';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'ແບບຟອລ໌ມະວິທີການຊຳລະເງິນ';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'ຊື່ວິທີການຊຳລະເງິນ';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'ກຸ່ມຜູ້ຊຶ້';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'ສ່ວນລົດ';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'ລະຫັດ';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'ລຽງລຳດັບ';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'ປະເພດວິທີຊຳເງິນ';
	var $_PHPSHOP_TAX_MOD = 'ພາສີ';
	var $_PHPSHOP_TAX_RATE = 'ອັດຕາພາສີ';
	var $_PHPSHOP_TAX_LIST_MNU = 'ອັດຕາພາສີ';
	var $_PHPSHOP_TAX_LIST_LBL = 'ອັດຕາພາສີ';
	var $_PHPSHOP_TAX_LIST_STATE = 'ໂຊນພາສີ';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'ປະເທດ';
	var $_PHPSHOP_TAX_LIST_RATE = 'ອັດຕາພາສີ';
	var $_PHPSHOP_TAX_FORM_MNU = 'ເພີ່ມອັດຕາພາສີ';
	var $_PHPSHOP_TAX_FORM_LBL = 'ລາຍລະອຽດອັດຕາພາສີ';
	var $_PHPSHOP_TAX_FORM_STATE = 'ໂຊນພາສີ';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'ປະເທດ';
	var $_PHPSHOP_TAX_FORM_RATE = 'ອັດຕາພາສີ (ເຊັ່ນ 16% => ລະບຸ 0.16) ';
	var $_PHPSHOP_VENDOR_MOD = 'ຜູ້ຂາຍ';
	var $_PHPSHOP_VENDOR_ADMIN = 'ຜູ້ຂາຍ';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'ຜູ້ຂາຍ';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'ຜູ້ຂາຍ';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'ຊື່ຜູ້ຂາຍ';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'ຜູ້ເບິ່ງແຍງລະບົບ';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'ເພີ່ມຊື່ຜູ້ຂາຍ';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'ລະບຸລາຍລະອຽດ';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'ລາຍລະອຽດຜູ້ຂາຍ';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'ຊື່ຜູ້ຕິດຕໍ່';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'ຮູບພາບ';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'ອັບໂຫລດຮູບພາບ';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'ຊື່ຜູ້ຂາຍ';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'ຊື່ບໍລິສັດ';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'ທີ່ຢູ່ 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'ທີ່ຢູ່ 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'ເມື່ອງ';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'ແຂວງ';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'ປະເທດ';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'ລະຫັດໄປສະນີ';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'ໂທລະສັບ';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'ສະກຸນເງິນ';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'ປະເພດຜູ້ຂາຍ';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'ນາມສະກຸນ';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'ຊື່';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'ຊື່ກາງ';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'ຄຳນຳໜ້າຊື່';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'ໂທລະສັບ 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'ໂທລະສັບ 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'ໂທລະສານ';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'ອີເມລ';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'ທີ່ເກັບຮູບພາບ';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'ລາຍລະເອຍດ';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'ໝວດຜູ້ຂາຍ';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'ໝວດຜູ້ຂາຍ';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'ຊື່ຫມວດ';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'ລາຍລະອຽດໝວດຜູ້ຂາຍ';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'ຜູ້ຂາຍ';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'ເພີ່ມໝວດຜູ້ຂາຍ';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'ແບບຟອມໝວດຜູ້ຂາຍ';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'ລາຍລະອຽດໝວດຜູ້ຂາຍ';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'ຊື່ຫມວດ';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'ລາຍລະອຽດ';
	var $_PHPSHOP_MANUFACTURER_MOD = 'ໂຮງງານ';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'ໂຮງງານ';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'ໂຮງງານ';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'ໂຮງງານ';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'ຊື່ໂຮງງານ';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'ຈັດການລະບົບ';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'ເພີ່ມໂຮງງານ';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'ລະບຸລາຍລະອຽດ';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'ຂໍ້ມູນໂຮງງານ';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'ຊື່ໂຮງງານ';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'ໝວດໂຮງງານ';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'ອີເມລ';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'ເວັບໄຊ້';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'ລາຍລະອຽດ';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'ໝວດໂຮງງານ';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'ໝວດໂຮງງານ';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'ຊື່ຫມວດ';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'ລາຍລະອຽດ';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'ໂຮງງານ';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'ເພີ່ມໝວດໂຮງງານ';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'ແບບຟອລ໌ມະໝວດໂຮງງານ';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'ລະບຸຂໍ້ມູນ';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'ຊື່ຫົມວດ';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'ລາຍລະອຽດ';
	var $_PHPSHOP_HELP_MOD = 'ຊ່ວຍເຫລືອ';
	var $_PHPSHOP_CART_ACTION = 'ແກ້ໄຂ';
	var $_PHPSHOP_CART_UPDATE = 'ປັບປຸງຈຳນວນສິນຄ້າໃນລໍ້ເຄື່ອງ';
	var $_PHPSHOP_CART_DELETE = 'ເອົາສິນຄ້າອອກຈາກລໍ້ເຄື່ອງ';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'ລາຄາ ';
	var $_PHPSHOP_PRODUCT_CALL = 'ສອບຖາມລາຄາ ';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'ກ່ອນໜ້າ ';
	var $_PHPSHOP_PRODUCT_NEXT = 'ຖັດໄປ';
	var $_PHPSHOP_CART_TAX = 'ພາສີ';
	var $_PHPSHOP_CART_SHIPPING = 'ຄ່າຂົນສົ່ງແລະການຈັດການ';
	var $_PHPSHOP_CART_TOTAL = 'ລວມ';
	var $_PHPSHOP_CHECKOUT_NEXT = 'ຖັດໄປ';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'ລົງທະບຽນ';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'ໃບແຈ້ງຫນີ້';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'ບໍລິສັດ';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'ຊື່';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'ທີຢູ່';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'ໂທລະສັບ';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'ໂທລະສານ';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'ອີເມລ';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'ລາຍລະອຽດການຈັດສົ່ງ';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'ບໍລິສັດ';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'ຊື່';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'ທີ່ຢູ່';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'ໂທລະສັບ';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'ໂທລະສານ';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'ລາຍລະອຽດການຊຳລະເງິນ';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'ຊື່ເທິງບັດ';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'ວິທີການຊຳລະເງິນ';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'ໝາຍເລກບັດ';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'ມື້ໝົດອາຍຸ';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'ການສັ່ງຊື້ສົມບູນແລ້ວ';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'ລະບຸລາຍລະອຽດເມື່ອເລືອກການຊຳລະເງີນດ້ວຍບັດລະເຄດິດ';
	var $_PHPSHOP_ZONE_MOD = 'ໂຊນຂົນສົ່ງ';
	var $_PHPSHOP_ZONE_LIST_MNU = 'ໂຊນຂົນສົ່ງ';
	var $_PHPSHOP_ZONE_FORM_MNU = ' ເພີ່ມໂຊນ';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'ລະບຸໂຊນ';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'ປະເທດ';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'ໂຊນປັດຈຸບັນ';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'ລະບຸໂຊນ';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'ປັບປຸງ';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'ລະບຸໂຊນ';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'ຊື່ໂຊນ';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'ລາຍລະອຽດໂຊນ';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'ຄ່າໃຊ້ຈ່າຍຕໍ່ລາຍການ';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'ວົງເງີນຄ່າໃຊ້ຈ່າຍ';
	var $_PHPSHOP_ZONE_LIST_LBL = 'ໂຊນ';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'ຊື່ໂຊນ';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'ລາຍລະອຽດໂຊນ';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'ຄ່າໃຊ້ຈ່າຍຕໍ່ລາຍການ';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'ວົງເງີນຄ່າໃຊ້ຈ່າຍ';
	var $_PHPSHOP_LOGIN_FIRST = 'ກະລຸນາລັອກອິນເຂົ້າສູ່ລະບົບ ຫລືລົງທະບຽນກ່ອນ';
	var $_PHPSHOP_STORE_FORM_TOS = 'ຂໍ້ຕົກລົງ';
	var $_PHPSHOP_AGREE_TO_TOS = 'ກະລຸນາຍອມຮັບຂໍ້ຕົກລົງ';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'ຍອມຮັບຂໍ້ຕົກລົງ';
	var $_PHPSHOP_LEAVE_BLANK = ' (ປະວ່າງໄວ້ <br / > ຖ້າບໍ່ມີໄຟລ໌!) ';
	var $_PHPSHOP_RETURN_LOGIN = 'ລູກຄ້າເກົ່າ: ກະລຸນາລັອກອິນ';
	var $_PHPSHOP_NEW_CUSTOMER = 'ລູກຄ້າໃຫມ່?: ກະລຸນາລະບຸລາຍລະອຽດ';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'ບັນຊີລູກຄ້າ: ';
	var $_PHPSHOP_ACC_ORDER_INFO = 'ລາຍລະອຽດການສັ່ງຊື້';
	var $_PHPSHOP_ACC_UPD_BILL = 'ເຈົ້າສາມາດແກ້ໄຂລາຍລະອຽດໃບແຈ້ງຫນີ້';
	var $_PHPSHOP_ACC_UPD_SHIP = 'ເຈົ້າສາມາດແກ້ໄຂລາຍລະອຽດສະຖານທີ່ຈັດສົ່ງ';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'ລາຍລະອຽດບັນຊີ';
	var $_PHPSHOP_ACC_SHIP_INFO = 'ລາຍລະອຽດສະຖານທີ່ຈັດສົ່ງ';
	var $_PHPSHOP_ACC_NO_ORDERS = 'ບໍ່ມີລາຍການສັ່ງຊື້';
	var $_PHPSHOP_ACC_BILL_DEF = '-  (ທີ່ຢູ່ຕາມໃບແຈ້ງໜີ້) ';
	var $_PHPSHOP_SHIPTO_TEXT = 'ທ່ານສາມາດເພີ່ມສະຖານທີ່ຈັດສົ່ງ ກະລຸນາເລືອກຊື່ທີ່ເໝາະສົມ ຫລືລະຫັດສຳລັບສະຖານທີ່ຈັດສົ່ງທີ່ຕ້ອງການ ';
	var $_PHPSHOP_CONFIG = 'ການຕັ້ງຄ່າ';
	var $_PHPSHOP_USERS = 'ຜູ້ໃຊ້ງານ';
	var $_PHPSHOP_IS_CC_PAYMENT = 'ຕ້ອງການຊຳລະດ້ວຍບັດລະເຄດິດ? ';
	var $_PHPSHOP_SHIPPING_MOD = 'ການຂົນສົ່ງ';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'ການຂົນສົ່ງ';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'ຜູ້ຂົນສົ່ງ';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'ຜູ້ຂົນສົ່ງ';
	var $_PHPSHOP_RATE_LIST_MNU = 'ອັດຕາຄ່າຂົນສົ່ງ';
	var $_PHPSHOP_RATE_LIST_LBL = 'ອັດຕາຄ່າຂົນສົ່ງ';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'ຊື່';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'ລຽງລຳດັບ';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'ສ້າງຜູ້ຂົນສົ່ງໃຫມ່';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'ສ້າງ / ແກ້ໄຂຜູ້ຂົນສົ່ງ';
	var $_PHPSHOP_RATE_FORM_MNU = 'ກຳນົດອັດຕາຄ່າຂົນສົ່ງ';
	var $_PHPSHOP_RATE_FORM_LBL = 'ເພີ່ມ / ແກ້ໄຂອັດຕາຄ່າຂົນສົ່ງ';
	var $_PHPSHOP_RATE_FORM_NAME = 'ລາຍລະອຽດອັດຕາຄ່າຂົນສົ່ງ';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'ຜູ້ຂົນສົ່ງ';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'ປະເທດ: <br /> <br /> <i > ເລືອກຫລາຍລາຍການ: ກົດປຸ່ມ Shift ຫລື Ctrl ແລະຄິກເມົ້າ</i> ';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'ຊ່ວງລະຫັດໄປລົດນີຈາກ';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'ເຖິງ';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'ນ້ຳໜັກຕ່ຳສຸດ';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'ນ້ຳໜັກສູງສຸດ';
	var $_PHPSHOP_RATE_FORM_VALUE = 'ຄ່າທຳນຽມ';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'ຄ່າບັນຈຸຫໍ່ເຄື່ອງ';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'ສະກຸນເງິນ';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'ອັດຕາພາສີມູນຄ່າເພິ່ມ';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'ລຽງລຳດັບ';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'ຜູ້ຂົນສົ່ງ';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'ລາຍລະອຽດອັດຕາຄ່າຂົນສົ່ງ';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'ນ້ຳໜັກຂັ້ນຕ່ຳ.. ';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... ເຖິງ';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'ບໍລິສັດຜູ້ຂົນສົ່ງ';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'ລຽງລຳດັບ';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'ຂໍ້ຜິດພາດ: ລະຫັດຜູ້ຂົນສົ່ງມີຢູ່ແລ້ວ';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'ຂໍ້ຜິດພາດ: ເລືອກຜູ້ຂົນສົ່ງ';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'ຂໍ້ຜິດພາດ: ມີອັດຕາຄ່າຂົນສົ່ງຢູ່ແລ້ວ ຕ້ອງລົບອັດຕາເດີມກ່ອນ';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'ຂໍ້ຜິດພາດ: ບໍ່ພົບຜູ້ຂົນສົ່ງໝາຍເລກລະຫັດນີ້';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'ຂໍ້ຜິດພາດ: ເລືອກຜູ້ຂົນສົ່ງ';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'ຂໍ້ຜິດພາດ: ບໍ່ພົບຜູ້ຂົນສົ່ງໝາຍເລກ ID ນີ້';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'ຂໍ້ຜິດພາດ: ຕ້ອງລະບຸອັດຕາຂົນສົ່ງ';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'ຂໍ້ຜິດພາດ: ປະເທດປາຍທາງບໍ່ຖືກຕ້ອງ ຖ້າຫລາຍກວ່າ 1 ປະເທດ ສາມາດຄັ່ນດ້ວຍເຄື່ອງໝາຍ "; "';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'ຂໍ້ຜິດພາດ: ຕ້ອງລະບຸນ້ຳໜັກຕ່ຳສຸດ';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'ຂໍ້ຜິດພາດ: ຕ້ອງລະບຸນ້ຳໜັກສູງສຸດ';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'ຂໍ້ຜິດພາດ: ນ້ຳໜັກຕ່ຳສຸດຕ້ອງນ້ອຍກວ່ານ້ຳໜັກສູງສຸດ';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'ຂໍ້ຜິດພາດ: ຕ້ອງລະບຸຄ່າທຳນຽມຂົນສົ່ງ';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'ຂໍ້ຜິດພາດ: ຕ້ອງເລືອກົດກູນເງິນ';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'ຂໍ້ຜິດພາດ: ຕ້ອງລະບຸອັດຕາຄ່າຂົນສະ [່]ງ';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'ກະລຸນາເລືອກ';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'ຜູ້ຂົນສົ່ງ';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'ອັດຕາຄ່າຂົນສົ່ງ';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'ລາຄາ';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-ບໍ່ມີ-) ';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'ບັດລະເຄດິດ';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'ໃຊ້ຂັ້ນຕອນການຊຳລະເງິນ';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'ບັດລະເດບິດ';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'ຊຳລະເງີນເມື່ອຮັບສິນຄ້າ';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'ກະລຸນາເລືອກສະຖານທີ່ຈັດສົ່ງ! ';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'ກະລຸນາເລືອກວິທີການຂົນສົ່ງ! ';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'ກະລຸນາເລືອກວິທີການຊຳລະເງີນ! ';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'ກະລຸນາກວດສອບລາຍລະອຽດຂໍ້ມູນ ແລະຢືນຢັນການສັ່ງຊື້! ';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'ກະລຸນາເລືອກວິທີການຂົນສົ່ງ';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'ກະລຸນາເລືອກວິທີການຂົນສົ່ງອື່ນ ໆ';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'ກະລຸນາເລືອກວິທີການຊຳລະເງິນ';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'ກະລຸນາລະບຸໝາຍເລກບັດລະເຄດິດ';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'ກະລຸນາລະບຸຊື່ເທິງບັດລະເຄດິຕ';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'ໝາຍເລກບັດລະເຄດິດບໍ່ຖືກຕໍ້ງ';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'ກະລຸນາໃສ່ເດືອນທີ່ໝົດອາຍຸ';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'ກະລຸນາໃສ່ປີທີ່ໝົດອາຍຸ';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'ມື້ໝົດອາຍຸບໍ່ຖືກຕ້ອງ';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'ກະລຸນາເລືອກສະຖານທີ່ຈັດສົ່ງ';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'ໝາຍເລກບັນຊີບໍ່ຖືກຕ້ອງ';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'ບໍ່ມີລາຍການໃນລໍ້ຍູ້! ';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'ຂໍ້ຜິດພາດ: ໂປດເລືອກຜູ້ຈັດສົ່ງ! ';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'ຂໍ້ຜິດພາດ: ບໍ່ພົບອັດຕາຄ່າຂົນສົ່ງທີ່ເລືອກ! ';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'ຂໍ້ຜິດພາດ: ບໍ່ພົບທີ່ຢູ່ສຳລັບການຈັດສົ່ງ! ';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'ຂໍ້ຜິດພາດ: ບໍ່ມີຂໍ້ມູນຂອງບັດລະເຄດິດ... ';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'ຂໍ້ຜິດພາດ: ບໍ່ພົບໝາຍເລກບັດລະເຄດິດ! ';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'ຂະອໍໄພ ເນື່ອງຈາກໝາຍເລກບັດລະເຄດິດທີ່ທ່ານໃຊ້ ເປັນເລກໝາຍສຳລັບການທົດລອງໃຊ້! ';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'ບໍ່ພົບເລກໝາຍຜູ້ໃຊ້ງານ! ';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'ທ່ານບໍ່ໄດ້ລະບຸຊື່ບັນຊີ';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'ທ່ານບໍ່ໄດ້ລະບຸໝາຍເລກ IBAN';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'ທ່ານບໍ່ໄດ້ລະບຸເລກທີ່ບັນຊີ';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'ທ່ານບໍ່ໄດ້ລະບຸໝາຍເລກຂົນລະຫັດແຍກປະເພດ';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'ທ່ານບໍ່ໄດ້ລະບຸຊື່ທະນາຄານ';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'ຂັ້ນຕອນການຊຳລະເງີນບໍ່ຖືກຕ້ອງ! ';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'ລາຍລະອຽດການຊຳລະເງີນສຳລັບການເຮັດລາຍການເທື່ອລ່າສຸດ <br /> ';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'ຍອດສັ່ງຊື້ຍັງບໍ່ຄົບຕາມຈຳນວນຕ່ຳສຸດ';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'ຍອດສັ່ງຊື້ຕ່ຳສຸດ: ';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'ຊຳລະດ້ວຍບັດລະເຄດິດ';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'ວິທີການຊຳລະເງີນແບບອືນ';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'ກະລຸນາເລືອກວິທີການຊຳລະເງີນ: ';
	var $_PHPSHOP_STORE_FORM_MPOV = 'ມູນຄ່າການສັ່ງຊື້ຂັ້ນຕ່ຳ';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'ລາຍລະອຽດບັນຊີທະນາຄານ';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'ເລກທີ່ບັນຊີ';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'ໝາຍເລກລະຫັດແຍກປະເພດ';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'ຊື່ທະນາຄານ';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'ຊື່ບັນຊີ';
	var $_PHPSHOP_MODULES = 'ໂມດູນ';
	var $_PHPSHOP_FUNCTIONS = 'ຟັງກ໌ຊັນ';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'ສິນຄ້າພິເສດ';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'ກະລຸນາຝາກຂໍ້ຄວາມເຖິງເຮົາກ່ຽວກັບລາຍການສັ່ງຊື້ຂອງທ່ານ';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'ຂໍ້ຄວາມຈາກລູກຄ້າ';
	var $_PHPSHOP_INCLUDING_TAX = ' (ລວມພາສີ $tax %) ';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'ເລືອກລາຍການສິນຄ້າທີ່ຕ້ອງການ';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'ລາຍການ';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'ສ່ວນຂອງການດາວນ໌ໂຫລດ';
	var $_PHPSHOP_DOWNLOADS_START = 'ເລີ່ມຕົ້ນດາວນ໌ໂຫລດ';
	var $_PHPSHOP_DOWNLOADS_INFO = 'ກະລຸນາໃສ່ລະຫັດ Download-ID ທີ່ສົ່ງໃຫ້ທ່ານທາງອີເມລ໌ ແລ້ວກົດປຸ່ມ ເລີ່ມຕົ້ນດາວນ໌ໂຫລດ';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'ຂະອໍໄພ ການດາວນ໌ໂຫລດຂອງທ່ານໝົດອາຍຸແລ້ວ';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'ຂະອໍໄພ ທ່ານໃຊ້ຈຳນວນເທື່ອໃນການດາວນ໌ໂຫລດຄົບແລ້ວ';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'ລະຫັດ Download-ID! ບໍ່ຖືກຕ້ອງ! ';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'ບໍ່ສາມາດສົ່ງຂໍ້ຄວາມເຖິງ ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'ສົ່ງຂໍ້ຄວາມເຖິງ ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'ລາຍລະອຽດການດາວນ໌ໂຫລດ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'ທ່ານສາມາດດາວນ໌ໂຫລດໄຟລ໌ທີ່ສັ່ງຊື້ໄດ້ແລ້ວ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'ກະລຸນາໃສ່ລະຫັດ Download-ID ໃນສ່ວນພື້ນທີ່ດາວນ໌ໂຫລດ: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'ຈຳນວນເທື່ອສູງສຸດໃນການດາວນ໌ໂຫລດສູງສຸດຕໍ່ໄຟລ໌: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'ດາວນ໌ໂຫລດໄດ້ອີກ {expire} ມື້ ຫລັງຈາກເລີ່ມດາວນ໌ໂຫລດເທື່ອທຳອິດ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'ຄຳຖາມ? ປັນຫາ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'ລາຍລະອຽດການດາວນ໌ໂຫລດຕາມ ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'ສິນຄ້າທີ່ສາມາດດາວນ໌ໂຫລດໄດ້';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'ຂອບໃຈສຳລັບການຊຳລະເງິນຂອງທ່ານຮຽບຮ້ອຍແລ້ວ <br / > ທ່ານຈະໄດ້ຮັບອີເມລ໌ຢືນຢັນການເຮັດລາຍການຈາກທາງ PayPal ຊຶ່ງທ່ານສາມາດລັອກອິນເຂົ້າເຂົ້າໄປທີ່ <a href=http: //www. paypal. com> www. paypal. com </a> ເພື່ອເບິ່ງລາຍລະອຽດໄດ້';
	var $_PHPSHOP_PAYPAL_ERROR = 'ເກີດຄວາມຜິດພາດລະຫວ່າງການເຮັດລາຍການ ສະຖານະການສັ່ງຊື້ຍັງບໍ່ໄດ້ປ່ຽນແປງ';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'ຂໍຂອບໃຈທີ່ສັ່ງຊື້ສິນຄ້າກັບເຮົາ ລາຍການສັ່ງຊື້ຂອງທ່ານ';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'ຂໍຂອບໃຈທີ່ໃຫ້ການອຸດໜຸນ';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'ຄຳຖາມ? ປັນຫາ? ';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'ໄດ້ຮັບລາຍການສັ່ງຊື້ແລ້ວ';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'ເບິ່ງລາຍລະອຽດການສັ່ງຊື້';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'ຈຳນວນຕິດລົບ ເຮັດລາຍການຕໍ່ບໍ່ໄດ້';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'ກະລຸນາໃສ່ຈຳນວນທີ່ຖືກຕ້ອງສຳລັບລາຍການນີ້';
	var $_PHPSHOP_CART_STOCK_1 = 'ຈຳນວນທີ່ເລືອກຫລາຍກວ່າຂອງທີ່ມີຢູ່ໃນສະຕັອກ ';
	var $_PHPSHOP_CART_STOCK_2 = 'ຂະນະນີ້ມີສິນຄ້າຢູ່ $product_in_stock ລາຍການ ';
	var $_PHPSHOP_CART_STOCK_3 = 'ຄິກທີ່ນີ່ ເພື່ອເຂົ້າຢູ່ໃນລາຍການ';
	var $_PHPSHOP_CART_SELECT_ITEM = 'ກະລຸນາເລືອກລາຍການສິນຄ້າທີ່ຕ້ອງການກ່ອນ! ';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'ບໍ່ລະບຸ';
	var $_PHPSHOP_REGISTRATION_FORM_MR = ' ທ່ານ';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'ນາງ';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'ດ໋ອກເຕີ. ';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'ສາດສະດາຈານ. ';
	var $_PHPSHOP_DEFAULT = 'ກຳນົດເປັນຄ່າປົກຕິ';
	var $_PHPSHOP_AFFILIATE_MOD = 'ຜູ້ເບິ່ງແຍງລະບົບສະມາຊິກເຄືອຂ່າຍ';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'ສະມາຊິກເຄືອຂ່າຍ';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'ສະມາຊິກເຄືອຂ່າຍ';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'ຊື່ສະໝາຊິກ';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'ເລືອກ';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'ອັດຕາ ';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'ຈຳນວນເດືອນ';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'ຄ່າຄອມມິດຊັ່ນຕໍ່ເດືອນ';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'ລຽງລຳດັບ';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'ອີເມລ໌ສະໝາຊິກ';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'ອີເມລ໌ສະໝາຊິກ';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'ອີເມລ໌ເຖິງ (* = ທັງໝົດ) ';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'ອີເມລ໌ຂອງທ່ານ';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'ຫົວຂໍ້';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'ລວມສະຖິຕິດປັດຈຸບັນ';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'ອັດຕາຄ່າຄອມມິດຊັ່ນ (ເປີລ໌ເຊັນຕ໌) ';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'ເລືອກ? ';
	var $_PHPSHOP_DELIVERY_TIME = 'ຈັດສົ່ງພາຍໃນ';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'ລາຍລະອຽດການຈັດສົ່ງ';
	var $_PHPSHOP_MORE_CATEGORIES = 'ສິນຄ້າໝວດອື່ນ ໆ';
	var $_PHPSHOP_AVAILABILITY = 'ສິນຄ້າພ້ອມຈຳຫນ່າຍ';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'ສິນຄ້າບໍ່ມີ';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'ຈະມີສິນຄ້າ: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'ພາບລວມ';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'ສະຖິຕິ';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'ລູກຄ້າ ';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'ສິນຄ້າທີ່ມີການເຄື່ອນໄຫວ';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'ສິນຄ້າທີ່ບໍ່ມີການເຄື່ອນໄຫວ';
	var $_PHPSHOP_STATISTIC_SUM = 'ລວມ';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'ລາຍການສັ່ງຊື້ໃຫມ່ ';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'ລູກຄ້າໃຫມ່';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'ກະລຸນາໃສ່ອີເມລ໌ຂອງທ່ານ ເພື່ອທີ່ຈະໄດ້ແຈ້ງກັບໃຫ້ຮູ້ເມື່ອມີລາຍການສິນຄ້າໃນສະຕັອກ ເຮົາຈະບໍ່ແບ່ງ, ໃຫ້ເຊົ່າ, ຂາຍ ຫລືໃຊ້ອີເມລ໌ຂອງທ່ານສຳລັບລາຍການອື່ນ ໆນອກຈາກແຈ້ງໃຫ້ທ່ານຮູ້ເມື່ອມີສິນຄ້າໃນສະຕ໋ອກ <br /> <br / > ຂໍຂອບໃຈ! ';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'ຂອບໃຈທີ່ກະລຸນາລໍຖ້າ! <br /> ເຮົາຈະແຈ້ງໃຫ້ເຈົ້າຮູ້ເມື່ອມີລາຍການໃນຄັງສິນຄ້າ';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = ' ແຈ້ງໃຫ້ຮູ້! ';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'ມຸມມອງສຳລັບພິມ ';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'ກະລຸນາເລືອກ Authorize. net ຫລື CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' ຕັ້ງຄ່າສະຖານະໄຟລ໌: ';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'ຂຽນທັບໄດ້';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'ບໍ່ສາມາດຂຽນທັບໄດ້';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'ທົ່ວໄປ';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Path & URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'ໄຊ້';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'ການຈັດສົ່ງ';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'ສັ່ງຊື້';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'ດາວນ໌ໂຫລດ';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'ການຊຳລະເງິນ';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'ສະແດງສະເພາະລາຍການແຄດຕາລັອກສິນຄ້າ';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'ຖ້າເລືອກລາຍການນີ້ ຈະສະແດງສະເພາະແຄດຕາລັອກສິນຄ້າ ບໍ່ສາມາດໃຊ້ຟັງກ໌ຊັ່ນລໍ້ຍູ້ຊຳລະເງີນໄດ້';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'ສະແດງລາຄາ';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'ສະແດງລາຄາລວມພາສີ? ';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'ກຳນົດເພື່ອສະແດງໃຫ້ລູກຄ້າເຫັນລາຄາລວມພາສີ ຫລືຍົກເວັ້ນພາສີ';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'ເລືອກເພື່ອໃຫ້ສະແດງລາຄາ ກໍລະນີທີ່ເລືອກສະແດງສະເພາະແຄດຕາລັອກສິນຄ້າຢ່າງດຽວ ອາດຈະບໍ່ຕ້ອງການສະແດງລາຄາ';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'ພາສີຕາມຈິງ';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'ກຳນົດລາຍການທີ່ບໍ່ລະບຸນ້ຳໜັກວ່າຕ້ອງມີພາສີຫລືບໍ່ ໃຫ້ແກ້ໄຂ ps_checkout. php-> calc_order_taxable ()ເພື່ອປ່ຽນແປງຜົນ';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'ຮູບແບບການຄຳນວນພາສີ: ';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'ກຳນົດຕາມສະຖານທີ່ຈັດສົ່ງ';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'ກຳນົດຕາມທີ່ຢູ່ຜູ້ຂາຍ';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'ກຳນົດເພື່ອເລືອກອັດຕາພາສີທີ່ຈະນຳໄປໃຊ້ໃນການຄຳນວນພາສີ: <br /> <ul> <li > ຈາກລັດຫລືປະເທດທີ່ລ້ານຄ້າຕັ້ງຍູ່ </li> <br/> <li > ຫລືຈາກປະເທດທີ່ລູກຄ້າຢູ່ </li> </ul> ';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'ສະແດງພາສີຫຼາຍອັດຕາ? ';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'ເລືອກລາຍການນີ້ ຖ້າມີລາຍການສິນຄ້າທີ່ມີອັດຕາພາສີແຕກຕ່າງກັນ (ເຊັ່ນ ຫນັງສືແລະອາຫານ 7%, ຢ່າງອື່ນ ໆ 16%) ';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'ຫັກສ່ວນລົດກ່ອນຄິດພາສີແລະຄ່າຂົນສົ່ງ? ';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'ອະນຸຍາດໃຫ້ລູກຄ້າສະແດງຄວາມຄິດເຫັນ ຫລືໂຫວດໃຫ້ຄະແນນໄດ້';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'ຖ້າເລືອກລາຍການນີ້ ຈະເຮັດໃຫ້ລູກຄ້າສາມາດໃຫ້ຄະແນນໂຫວດສິນຄ້າ ແລະສະແດງຄວາມຄິດເຫັນໄດ້ <br /> ເພື່ອໃຫ້ລູກຄ້າສາມາດສະແດງຄວາມເຫັນກ່ຽວກັບຕົວສິນຄ້ານັ້ນແກ່ລູກຄ້າລາຍອື່ນ ໆ <br /> ';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'ກຳນົດໃຫ້ຫັກສ່ວນລຸດກ່ອນເລືອກຂັ້ນຕອນຊຳລະເງີນ ຫລືຫລັງຈາກລວມພາສີແລະຄ່າຂົນສົ່ງແລ້ວ';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'ລູກຄ້າສາມາດຍົກເວັ້ນຂໍ້ມູນທາງດ້ານບັນຊີທະນາຄານ? ';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'ເລືອກລາຍການນີ້ ຖ້າຫາກູກຄ້າຕ້ອງການຈະປົກປ້ອງຂໍ້ມູນທາງດ້ານບັນຊີທະນາຄານຕອນລົງທະບຽນ';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'ລູກຄ້າສາມາດເລືອກລັດ ຫລື ພູມມິພາກໄດ້? ';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'ເລືອກລາຍການນີ້ ລູກຄ້າຈະສາມາດເລືອກລາຍການລັດຫລືພູມິພາກໃນຂັ້ນຕອນການລົງທະບຽນ';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'ຕ້ອງເຫັນດີກັບຂໍ້ຕົກລົງການໃຊ້ບໍລິການ? ';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'ເລືອກລາຍການນີ້ ຫາກຕ້ອງການໃຫ້ຜູ້ຊື້ຕ້ອງເຫັນດີກັບຂໍ້ຕົກລົງການໃຊ້ບໍລິການກ່ອນ';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'ກວດນັບສິນຄ້າ? ';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'ກຳນົດໃຫ້ມີການກວດນັບສິນຄ້າ ເມື່ອຜູ້ຊື້ສິນຄ້າໃສລໍ້ເຄື່ອງ ຖ້າເລືອກລາຍການນີ້ຈະເຮັດໃຫ້ລູກຄ້າບໍ່ສາມາດເພີ່ມລາຍການສິນຄ້າໃນລົດເຂັນຖ້າຫາກບໍ່ມີສິນຄ້າໃນສະຕ໋ອກ';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'ອະນຸຍາດໃຫ້ມີລະບົບສະມາຊິກເຄືອຂ່າຍ? ';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'ຖ້າເລືອກລາຍການນີ້ ຈະເປັນການອະນຸຍາດໃຫ້ມີລະບົບການຕິດຕາມສະມາຊິກເຄືອຂ່າຍຈາກໜ້າຮ້ານ.. ';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'ຮູບແບບການຢືນຢັນການສັ່ງຊື້ທີ່ສົ່ງໄປທາງອີເມລ໌: ';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'ແບບອັກສອນທຳມະດາ ';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'ແບບ HTML';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'ລະບຸການຢືນຢັນການສັ່ງຊື້ທາງອີເມລ໌: <br /> <ul> <li > ແບບອັກສອນທຳມະດາ </li> <li > ແບບ HTML ພ້ອມຮູບພາບ </li> </ul> ';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'ອະນຸຍາດໃຫ້ມີຜູ້ເບິ່ງແຍງລະບົບສະເພາະໜ້າຮ້ານ? ';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'ສາມາດກຳນົດໃຫ້ມີຜູ້ເບິ່ງແຍງລະບົບສະເພາະໜ້າຮ້ານ ເຊັ່ນ storeadmins ແຕ່ບໍ່ສາມາດເຂົ້າເຖິງລະບົບການຈັດການຂອງ Mambo ໄດ້ (ເຊັ່ນ Registered / Editor) ';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'URL ສຳລັບ Mambo ໄຊຕ໌ຂອງທ່ານ (ໃສ່ເຄື່ອງໝາຍ / ຕໍ່ທ້າຍພ້ອມ!) ';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'ເຂົ້າລະຫັດປິ່ນປົວຄວາມປອດໄພ';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'URL ສຳລັບການເຂົ້າລະຫັດປິ່ນປົວຄວາມປອດໄພ <br /> (https - ແລະໃສ່ເຄື່ອງໝາຍ / ຕໍ່ທ້າຍພ້ອມ!) "';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'COMPONENTURL';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'URL ສຳລັບຄອມໂພເນ້ນທ໌ຂອງ VirtueMart  (ໃສ່ເຄື່ອງໝາຍ / ຕໍທ້າຍພ້ອມ!) ';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'IMAGEURL';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'URL ສຳລັບເກັບຮູບພາບຄອມໂພເນ້ນທ໌ຂອງ VirtueMart  (ໃສ່ເຄື່ອງໝາຍ / ຕໍ່ທ້າຍພ້ອມ!) ';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'ADMINPATH';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'ໄດເລກທໍລີ່ພາດສຳລັບຄອມໂພເນ້ນທ໌ຂອງ VirtueMart';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'CLASSPATH';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'ໄດເລກທໍລີ່ພາດສຳລັບຄາດຂອງ VirtueMart';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'PAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'ໄດເລກທໍລີ່ພາດສຳລັບເກັບໄຟລ໌ html ຂອງ VirtueMart';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'IMAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'ໄດເລກທໍລີ່ພາດສຳລັບເກັບຮູບພາບຂອງ VirtueMart';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'ໂຮມເພຈ';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'ໜ້າສະແດງຜົນໜ້າທຳອິດ';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'ຂໍ້ຜິດພາດ';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'ໜ້າສະແດງຂໍ້ຄວາມກ່ຽວກັບຂໍ້ຜິດພາດ';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'ດີບັກ';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'ໜ້າສະແດງຜົນຂໍ້ຄວາມການດີບັກ';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'ດີບັກ? ';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'ດີບັກ? ເປີດໃຊ້ງານການສະແດງຜົນການດີບັກ	- ຈະສະແດງຜົນທີ່ທາງລຸມຂອງແຕ່ລະໜ້າ. ຊຶ່ງຈະຊ່ວຍໃນການປັບ-ປຸງແກ້ໄຂລະບົບ ການພັດທະນາຮ້ານຄ້າ ການສະແດງລາຍລະອຽດໃນລໍ້ເຄຶ່ອງ ການສະແດງຄ່າຕ່າງ ໆ ເປັນຕົ້ນ';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'ໜ້າຕ່າງໃຫມ່ ';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'ໜ້າຕ່າງສະແດງລາຍລະອຽດສິນຄ້າ';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'ຮູບແບບໝວດສິນຄ້າ ';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'ກຳນົດຮູບແບບປົກກະຕິສຳລັບການສະແດງສິນຄ້າໃນແຕ່ລະຫົມວດ <br /> ທ່ານສາມາດສ້າງຮູບແບບໃໝ່ຈາກໄຟລ໌ເທມເພດທີ່ມີອຍູ່ <br />  (ຊຶ່ງເກັບຢູ່ໃນໄດເລກທໍລີ່ <strong> COMPONENTPATH/html/templates/ </strong>) ';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'ຈຳນວນປົກກະຕິຂອງສິນຄ້າໃນແຕ່ລະແຖວ';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'ສະແດງຈຳນວນສິນຄ້າໃນແຕ່ລະແຖວ. <br /> ຕົວຢ່າງເຊັ່ນ: ຖ້າກຳນົດເປັນ 4 ກໍຈະສະແດງຈຳນວນສິນຄ້າ 4 ລາຍການຕໍ່ແຖວ';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = 'ຮູບພາບ ';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'ສະແດງພາບນີ້ເມື່ອບໍ່ມີພາບສິນຄ້າ ';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'ຈຳນວນບັນທັດຕໍ່ໜ້າ ';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'ລະບຸຈຳນວນບັນທັດຕໍ່ໜ້າ ຈາກຜົນການຄົ້ນຫາທີ່ໄດ້ ';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'ສີແຖບລາຍການຄົ້ນຫາ 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'ກຳນົດສີຂອງແຖບລາຍການຄົ້ນຫາໃນແຖວເລກຄີ່';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'ສີແຖບລາຍການຄົ້ນຫາ 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'ກຳນົດສີຂອງແຖບລາຍການຄົ້ນຫາໃນແຖວເລກຄູ່';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'ຈຳນວນບັນທັດສູງສຸດ';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'ກຳນົດຈຳນວນບັນທັດທີ່ຈະສະແດງໃນສ່ວນຂອງລາຍການ';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'ສະແດງ footer';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'ສະແດງພາບ powered-by-VirtueMart ທີ່ດ້ານລ່າງ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'ເລືອກວິທີການຂົນສົ່ງ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'ໂມດູນຂົນສົ່ງມາດຕະຖານ ຕາມຜູ້ຂົນສົ່ງ ແລະອັດຕາຄ່າຂົນສົ່ງຂອງແຕ່ລະລາຍການ <strong> ແນະນຳ! </strong> ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '  	Zone Shipping Module Country Version 1.0<br /> ເບິ່ງລາຍລະອຽດເພິ່ມເຕິມ <a href="http: //ZephWare. com"> http: //ZephWare. com </a> <br /> ຫຼືຕ້ອງການຕິດຕໍ່ <a href="mailto: zephware@devcompany. com"> ZephWare. com </a> <br /> ເລືອກໃຊ້ໂມດູນ Zone Shipping';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<a href="http://www.ups.com" target="_blank">UPS Online(R) Tools</a> ຄຳນວນຄ່າຂົນສົ່ງອອນໄລນະ [໌] ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'ລະຫັດປະມວນຜົນຂອງ UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'ລະຫັດປະມວນຜົນຂອງ UPS ຂອງທ່ານ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'ຊື່ຜູ້ໃຊ້ງານ UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'ຊື່ຜູ້ໃຊ້ງານທີ່ທ່ານໄດ້ຮັບຈາກ UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'ລະຫັດຜ່ານ UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'ລະຫັດຜ່ານສຳລັບບັນຊີຜູ້ໃຊ້ງານ UPS ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'ເລືອກໂມດູນ InterShipper ຖ້າທ່ານມີບັນຊີຂອງ <a href="http: //www. intershipper. com" target="_blank"> Intershipper. com </a> ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'ບໍ່ຕ້ອງເລືອກວິທີການຂົນສົ່ງ ກໍລະນີທີ່ລູກຄ້າຊື້ສິນຄ້າທີ່ໃຊ້ວິທີດາວນ໌ໂຫລດ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'ລະຫັດຜ່ານເຂົ້າ InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'ລະຫັດຜ່ານຂອງທ່ານທີ່ໃຊ້ກັບບັນຊີຂອງ InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'InterShipper email';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'ອີເມລ໌ຂອງທ່ານທີ່ໃຊ້ກັບບັນຊີຂອງ InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'ເຂົ້າລະຫັດ ENCODE KEY';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'ສຳລັບໃຊ້ເຂົ້າລະຫັດຂໍ້ມູນທີ່ເກັບໄວ້ໃນລະບົບຖານຂໍ້ມູນ ຊຶ່ງໄຟລ໌ນີ້ຈະໄດ້ຮັບການປ້ອງກັນບໍ່ໃຫ້ມີໃຜມາເບິ່ງຂໍ້ມູນນີ້ໄດ້ ';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'ສະແດງແຖບຂັ້ນຕອນການຊຳລະເງິນ';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'ເລືອກລາຍການນີ້ເພື່ອສະແດງແຖບຂັ້ນຕອນການຊຳລະເງີນ (1 - 2 - 3 - 4 ພ້ອມພາບກກາບຟິກ) ';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'ເລືອກວິທີການຊຳລະເງີນສຳລັບລ້ານຄ້າຂອງທ່ານ';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong> ແບບທົ່ວໄປ: </strong> <br/> 1. ຕ້ອງການສະຖານທີ່ຈັດສົ່ງ <br /> 2. ຕ້ອງການວິທີການຂົນສົ່ງ <br /> 3. ຕ້ອງການວິທີການຊຳລະເງິນ <br /> 4. ການສັ່ງຊື້ສົມບູນ';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong> ແບບທີ່ 2: </strong> <br/> 1. ຕ້ອງການສະຖານທີ່ຈັດສົ່ງ <br /> 2. ຕ້ອງການວິທີການຊຳລະ ເງິນ <br /> 3. ການສັ່ງຊື້ສົມບູນ';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong> ແບບທີ່ 3: </strong> <br/> 1. ຕ້ອງການສະຖານທີ່ຈັດສົ່ງ <br /> 2. ຕ້ອງການວິທີການຊຳລະ ເງິນ <br /> 3. ການສັ່ງຊື້ສົມບູນ';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong> ແບບທີ່ 4: </strong> <br/> 1. ຕ້ອງການວິທີການຊຳລະເງິນ <br /> 2. ການສັ່ງຊື້ສົມບູນ ';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'ອະນຸຍາດໃຫ້ດາວນ໌ໂຫລດໄດ້ ';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'ເລືອກເພື່ອອະນຸຍາດໃຫ້ສາມາດດາວນ໌ໂຫລດໄດ້ ໃຊ້ສຳລັບຈຳໜ່າຍສິນຄ້າທີ່ໃຫ້ບໍລິການແບບດາວໂຫລດ';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'ສະຖານະການສັ່ງຊື້ກໍລະນີອະນຸຍາດໃຫ້ດາວນ໌ໂຫລດໄດ້';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'ເລືອກົດຖານະການສັ່ງຊື້ ໃນກໍລະນີທີ່ລູກຄ້າລະບຸໃຫ້ມີການດາວນ໌ໂຫລດທາງອີເມລະ [໌] ';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'ສະຖານະການສັ່ງຊື້ກໍລະນີບໍ່ອະນຸຍາດໃຫ້ມີການດາວນ໌ໂຫລດ';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'ກຳຫົນດົດຖານະການສັ່ງຊື້ ໃນກໍລະນີທີ່ບໍ່ອະນຸຍາດໃຫ້ລູກຄ້າດາວນ໌ໂຫລດ';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'ພາດທີ່ໃຊ້ເກັບໄຟລ໌ດາວນ໌ໂຫລດ';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'ພາດທີ່ຢູ່ທີ່ໃຊ້ເກັບໄຟລ໌ສຳລັບໃຫ້ລູກຄ້າດາວນ໌ໂຫລດ (ໃສ່ເຄື່ອງໝາຍ / ຕອນທ້າຍດ້ວຍ!) <br> <span class="message"> ເພື່ອຄວາມປອດໄພ: ກະລຸນາຢ່າໃຊ້ພາດທີ່ເປັນ WEBROOT </span> ';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'ຈຳນວນເທື່ອດາວນ໌ໂຫລດສູງສຸດ';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'ກຳນົດຈຳນວນເທື່ອທີ່ສາມາດດາວນ໌ໂຫລດໄດ້ຕໍ່ໜຶ່ງລະຫັດ Download-ID  (ຕໍ່ການສັ່ງຊື້ໜຶ່ງລາຍການ) ';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'ຄົບກຳນົດດາວນ໌ໂຫລດ';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'ກຳນົດລະຍະເວລາເປັນ <strong > ວິນາທີ </strong> ໂດຍຈະຄິດເມື່ອເລີ່ມມີການດາວນ໌ໂຫລດ ເມື່ອຄົບເວລາແລ້ວົນຫັດ download-ID ຈະບໍ່ສາມາດໃຊ້ງານໄດ້ອີກ <br / > ໝາຍເຫດ: 86400 ວິນາທີ = 24 ຊົມ. ';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'ເລືອກໃຊ້ການຊຳລະເງີນດ້ວຍ PayPal? ';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'ເລືອກເພື່ອໃຫ້ລູກຄ້າຂອງທ່ານທີ່ໃຊ້ລະບົບການຊຳລະເງີນຜ່ານລະບົບ PayPal';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'ອີເມລ໌ສຳລັບຊຳລະເງີນຜ່ານ PayPal: ';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'ອີເມລ໌ຂອງທ່ານທີ່ໃຊ້ສຳລັບການຊຳລະເງີນຜ່ານລະບົບຂອງ PayPal';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'ສະຖານະການສັ່ງຊື້ ເມື່ອເຮັດລາຍການສົມບູນນະ [໌] ';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'ເລືອກົດຖານະການສັ່ງຊື້ ເມື່ອເຮັດທຸນກຳຜ່ານ PayPal ຮຽບຮ້ອຍແລ້ວ <br / > ຖ້າໃຊ້ລະບົບການຂາຍແບບໃຫ້ດາວນ໌ໂຫລດ: ໃຫ້ເລືອກົດຖານະພ້ອມໃຫ້ດາວນ໌ໂຫລດ (ຊຶ່ງລູກຄ້າຈະໄດ້ຮັບຂໍ້ຄວາມຕອບຮັບກ່ຽວກັບການດາວນ໌ໂຫລດທາງອີເມລ໌) ';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'ສະຖານະການສັ່ງຊື້ເມື່ອເຮັດທຸນກຳບໍ່ຜ່ານ';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'ເລືອກົດຖານະການສັ່ງຊື້ ເມື່ອບໍ່ສາມາດເຮັດທຸນກຳຜ່ານ PayPal [ໄ]ດະ [້] ';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'ເລືອກໃຊ້ການຊຳລະເງີນດ້ວຍ PayMate? ';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'ເລືອກເພື່ອໃຫ້ລູກຄ້າຂອງທ່ານທີ່ໃຊ້ລະບົບການຊຳລະເງີນຜ່ານລະບົບ Australian PayMate';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'ຊື່ຜູ້ໃຊ້ງານ PayMate: ';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'ຊື່ຜູ້ໃຊ້ງານສຳລັບບັນຊີຂອງ PayMate';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'ເລືອກໃຊ້ການຊຳລະເງີນຂອງ Authorize. net? ';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'ເລືອກໃຊ້ Authorize. net ກັບ VirtueMart';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'ໂໝດທົດສອບ? ';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'ເລືອກ \' Yes \' ເພື່ອເຮັດລາຍການທົດສອບ -- ເລືອກ \' no \' ເພື່ອເຮັດລາຍການຈະລິ້ງ';
	var $_PHPSHOP_ADMIN_CFG_YES = 'YES';
	var $_PHPSHOP_ADMIN_CFG_NO = 'NO ';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'ໝາຍເລກ ID ຂອງ Authorize. net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'ນີ້ຄືໝາຍເລກ ID ຂອງ Authorize. Net ຂອງທ່ານ';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'ເລຂົນຫັດການເຮັດທຸນກຳກັບ Authorize. net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'ນີ້ຄືເລຂົນຫັດສຳລັບໃຊ້ເຮັດທຸນກຳກັບ Authorize. net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'ປະເພດການຮັບລິ້ງ';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'ປະເພດການຮັບຮອງຂອງ Authorize. Net';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'ເລືອກໃຊ້ CyberCash? ';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'ເລືອກໃຊ້ CyberCash ກັບ VirtueMart';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash MERCHANT';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_MERCHANT ເລກໝາຍຜູ້ໃຊ້ງານຂອງ CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash Merchant Key';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash Merchant Key ລະຫັດສຳລັບຜູ້ໃຊ້ງານຊຶ່ງກຳນົດໂດຍ CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash PAYMENT URL';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'CyberCash PAYMENT URL ຄື URL ສຳລັບລະບົບຄວາມປອດໄພໃນການຊຳລະເງີນທີ່ Cybercash ກຳນົດໃຫ້ ';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash AUTH TYPE';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'CyberCash AUTH TYPE ຄືຊະນິດຂອງການຮັບຮອງທີ່ທາງ CyberCase ກຳນົດໃຫ້';
	var $_PHPSHOP_ADVANCED_SEARCH = 'ຄົ້ນຫາແບບລະອຽດ';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'ຄົ້ນຫາຈາກໝວດທັງຫົມດ';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'ຄົ້ນຫາລາຍລະອຽດສິນຄ້າທັງຫົມດ';
	var $_PHPSHOP_SEARCH_PRODNAME = 'ຊື່ສິນຄ້າຢ່າງດຽວ';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'ຜູ້ຂາຍ/ຜູ້ຜະລິດ ຢ່າງດຽວ';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'ລາຍລະອຽດສິນຄ້າຢ່າງດຽວ';
	var $_PHPSHOP_SEARCH_AND = 'ແລະ ';
	var $_PHPSHOP_SEARCH_NOT = ' ບໍ່ ';
	var $_PHPSHOP_SEARCH_TEXT1 = 'ລາຍການທຳອິດສຳລັບການເລືອກໝວດໝູ່. ລາຍການທີ່ສອງສຳລັບເລືອກລາຍລະອຽດ ຫລືສ່ວນປະກອບກ່ຽວກັບສິນຄ້າ (ເຊັ່ນ ຊື່ສິນຄ້າ) ເມື່ອເລືອກລາຍການແລ້ວ ໃຫ້ໃສ່ຄຳທີ່ຕ້ອງການຄົ້ນຫາເພື່ອຄົ້ນຫາສິນຄ້າ ';
	var $_PHPSHOP_SEARCH_TEXT2 = 'ທ່ານສາມາດຄົ້ນຫາແບບເຈາະຈົ່ງຫຼາຍຂຶ້ນ ໂດຍການເພີ່ມຄຳທີ່ຕ້ອງການຄົ້ນຫາ ແລະເລືອກໃຊ້ຄຳສັ່ງ AND ຫລື OR  -  ເລືອກ AND ໝາຍເຖິງຈະຄົ້ນຫາສິນຄ້າທີ່ມີຄຳຄົ້ນຫາທັງສອງຄຳ, ເລືອກ OR ໝາຍເຖິງຈະຄົ້ນຫາສິນຄ້າທີ່ມີຄຳຄົ້ນຫາຄຳທຳອິດ ແລະບໍ່ມີຄຳທີ່ສອງ';
	var $_PHPSHOP_ORDERBY = 'ລຽງລຳດັບ';
	var $_PHPSHOP_CUSTOMER_RATING = 'ຄະແນນໂຫວດ';
	var $_PHPSHOP_TOTAL_VOTES = 'ຄະແນນໂຫວດທັງຫົມດ';
	var $_PHPSHOP_CAST_VOTE = 'ໂປດເລືອກຄະແນນໂຫວດ';
	var $_PHPSHOP_RATE_BUTTON = 'ໂຫວດ';
	var $_PHPSHOP_RATE_NOM = 'ຄະແນນ';
	var $_PHPSHOP_REVIEWS = 'ຄວາມຄິດເຫັນຂອງລູກຄ້າ';
	var $_PHPSHOP_NO_REVIEWS = 'ຍັງບໍ່ມີຄວາມຄິດເຫັນສຳລັບສິນຄ້ານີ້';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'ເຊີນສະແດງຄວາມຄິດເຫັນ.. ';
	var $_PHPSHOP_REVIEW_LOGIN = 'ກະລຸນາເຂົ້າສູ່ລະບົບກ່ອນສະແດງຄວາມຄິດເຫັນ';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'ກະລຸນາໃຫ້ຄະແນນໂຫວດດ້ວຍ! ';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'ກະລຸນາບັນທຶກຄວາມຄິດເຫັນຂອງທ່ານ ຢ່າງນ້ອຍ 100 ຕົວອັກສອນ! ';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'ກະລຸນາສະແດງຄວາມຄິດເຫັນບໍ່ເກີນ 2000 ຕົວອັກສອນ! ';
	var $_PHPSHOP_WRITE_REVIEW = 'ຂຽນແນະນຳສິນຄ້າ! ';
	var $_PHPSHOP_REVIEW_RATE = 'ຂັ້ນທຳອິດ: ໃຫ້ຄະແນນສິນຄ້າ ກະລຸນາລະບຸຄະແນນລະຫວ່າງ 0  (ບໍ່ດີຫລາຍ) ເຖິງ 5 ດາວ (ດີຢ້ຽມ) ';
	var $_PHPSHOP_REVIEW_COMMENT = 'ກະລຸນາສະແດງຄວາມຄິດເຫັນ.... (ຢ່າງນ້ອຍ 100 ຕົວອັກສອນ, ສູງສຸດ 2000 ຕົວອັກສອນ) ';
	var $_PHPSHOP_REVIEW_COUNT = 'ຈຳນວນຕົວອັກສອນ: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'ຕົກລົງ';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'ທ່ານໄດ້ສະແດງຄວາມຄິດເຫັນສຳລັບສິນຄ້ານີ້ແລ້ວ';
	var $_PHPSHOP_REVIEW_THANKYOU = 'ຂອບໃຈສຳລັບຄວາມຄິດເຫັນຂອງທ່ານ';
	var $_PHPSHOP_COMMENT = 'ໝາຍເຫຕ';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'ເພີ່ມ/ແກ້ໄຂປະເພດບັດລະເຄດິດ';
	var $_PHPSHOP_CREDITCARD_NAME = 'ຊື່ບັດລະເຄດິດ';
	var $_PHPSHOP_CREDITCARD_CODE = 'ລະຫັດ';
	var $_PHPSHOP_CREDITCARD_TYPE = 'ປະເພດບັດລະເຄດິດ';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'ບັດລະເຄດິດ';
	var $_PHPSHOP_UDATE_ADDRESS = 'ປັບປຸງ';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'ເລືອກສິນຄ້າ';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'ລາຍການສັ່ງຊື້ຂອງທ່ານໄດ້ຮັບການດຳເນີນການຮຽບຮ້ອຍແລ້ວ! ';
	var $_PHPSHOP_ORDER_LINK = 'ເບິ່ງລາຍລະອຽດການສັ່ງຊື້';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'ສະຖານະການສັ່ງຊື້ຂອງໃບສັ່ງຊື້ເລກທີ່ {order_id} ມີການປ່ຽນແປງ';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'ສະຖານະໃໝ່: ';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'ຕ້ອງການເບິ່ງລາຍລະອຽດການສັ່ງຊື້ ກະລຸນາຄິ໊ກ (ຫຼືຄັດລອກໄປເປີດຍັງບລາວເຊີລ໌ຂອງທ່ານ): ';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'ເປັນຖານະການສັ່ງຊື້: ໃບສັ່ງຊື້ເລກທີ່ {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'ແຈ້ງລູກຄ້າໃຫ້ຮັບຊາບ? ';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'ກະລຸນາປ່ຽນສະຖານະການສັ່ງຊື້ກ່ອນ! ';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'ສ່ວນລຸດສຳລັບກຸ່ມຜູ້ຊື້ທົ່ວໄປ (%) ';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = ' X ທີ່ເປັນຄ່າບວກ ໝາຍເຖິງ: ຖ້າສິນຄ້າບໍ່ໄດ້ມີການລະບຸລາຄາສຳລັບກຸ່ມຜູ້ຊື້ ລາຄາຈະລຸດຕາມຈຳນວນ X % ຈຳນວນຕິດລົບຈະມີຜົນກົງຂ້າມ';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'ສິນຄ້າລຸດລາຄາ';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'ສິນຄ້າລຸດລາຄາ';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'ເພີ່ມ/ແກ້ໄຂລາຍການລຸດລາຄາ';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'ສ່ວນລົດ';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'ລະບຸຈຳນວນສ່ວນລົດ';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'ປະເພດສ່ວນລົດ';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'ເປີລ໌ເຊັນ';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'ຍອດລວມ';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'ລະບຸເປັນເປີລ໌ເຊັນຕ໌ ຫລືຍອດລວມ? ';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'ເລີ່ມລຸດລາຄາມື້ທີ່';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'ກຳນົດວັນທີ່ເລີ່ມລຸດລາຄາ ';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'ສີ້ນສຸດມື້ທີ່';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'ກຳນົດວັນທີ່ສີ້ນສຸດການລຸດລາຄາ ';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'ທ່ານສາມາດໃຊ້ແບບຟອລ໌ມະສ່ວນລຸດສຳລັບເພີ່ມລາຍການສ່ວນລຸດ! ';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'ທ່ານປະຫຍັດໄດ້';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'ເບິ່ງພົກພາ';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'ຮູບແບບການສະແດງສະກຸນເງິນ';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'ສັນຍະລັກສະກຸນເງິນ';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'ທ່ານສາມາດໃຊ້ HTML ໄດ້ (ເຊັ່ນ &euro;, &pound;, &yen;,...) ';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'ຈຸດທົດນິຍົມ';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'ສະແດງຈຳນວນຕຳແໜ່ງທົດນິຍົມ (ລະບຸເປັນ 0 ໄດ້) <br> <b > ຖ້າຄ່າທີ່ລະບຸບໍ່ກົງຕາມຕຳແໜ່ງທົດນິຍົມ ຈະສະແດງເປັນຫລັກຖ້ວນ ໆ </b> ';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'ສັນຍະລັກຈຸດທົດນິຍົມ';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'ສັນຍະລັກທີ່ໃຊ້ສະແດງຈຸດທົດນິຍົມ';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'ເຄື່ອງໝາຍຈຸນພາດ';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'ສັນຍະລັກທີ່ໃຊ້ສະແດງຫລັກພັນ (ສາມາດເວັ້ນວ່າງໄວ້) ';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'ຮູບແບບການສະແດງຄ່າບະຫວກ';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'ຮູບແບບການສະແດງຜົນຄ່າບະຫວກ <br> (Symb: ເຄື່ອງໝາຍົດກຸນ [ເ]  [ິ] ງິນ) ';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'ຮູບແບບການສະແດງຄ່ານັບ';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'ຮູບແບບການສະແດງຜົນຄ່ານັບ <br> (Symb: ເຄື່ອງໝາຍສະກຸນເງິນ) ';
	var $_PHPSHOP_OTHER_LISTS = 'ລາຍການສິນຄ້າອື່ນ ໆ';
	var $_PHPSHOP_MORE_IMAGES = 'ເບິ່ງພາບອື່ນ ໆ';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'ຮູບພາບສຳຫຼັບ';
	var $_PHPSHOP_BACK_TO_DETAILS = 'ລາຍລະອຽດສິນຄ້າ';
	var $_PHPSHOP_FILEMANAGER = 'ການຈັດການໄຟລ໌ຂໍ້ມູນ';
	var $_PHPSHOP_FILEMANAGER_LIST = 'ການຈັດການໄຟລ໌: : ລາຍການສິນຄ້າ';
	var $_PHPSHOP_FILEMANAGER_ADD = 'ເພີ່ມຮູບພາບຫລືໄຟລ ';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'ກຳນົດຮູບພາບ';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'ດາວນ໌ໂຫລດ? ';
	var $_PHPSHOP_FILEMANAGER_FILES = 'ລະບຸໄຟລ໌  (Datasheets,...) ';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'ເຜີຍແຜ່? ';
	var $_PHPSHOP_FILES_LIST = 'ການຈັດການໄຟລ໌: : ຮູບພາບ/ລາຍການໄຟລ໌ຂໍ້ມູນ';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'ຊື່ໄຟລ';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'ຊື່ໄຟລ';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'ປະເພດໄຟລ ';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'ແກ້ໄຂໄຟລ ';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'ຮູບພາບ';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'ຮູບຍໍ້';
	var $_PHPSHOP_FILES_FORM = 'ອັບໂຫລດໄຟລ໌ສຳຫຼັບ';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'ໄຟລ໌ປັດຈຸບັນ';
	var $_PHPSHOP_FILES_FORM_FILE = 'ໄຟລ';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'ຮູບພາພ';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'ອັບໂຫລດໄປທີ່';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'ທີ່ເກັບພາບສິນຄ້າ';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'ທີ່ເກັບໄຟລ໌ສະເພາະ';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'ດາວນ໌ໂຫລດພາດ (ເຊັ່ນ ສິນຄ້າສຳລັບຂາຍທີ່ສາມາດດາວນ໌ໂຫລດໄດ້!) ';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'ສ້າງ Thumbnail ສະແດງພາບຍໍ້ອັດໂນມັດ? ';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'ເຜີຍແຜ່ໄຟລ? ';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'ຊື່ໄຟລ໌ (ທີ່ຕ້ອງການສະແດງໃຫ້ລູກຄ້າເຫັນ) ';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'ລາຍລະອຽດໄຟລ';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'URL  (ເພິ່ມເຕິມ) ';
	var $_PHPSHOP_FILES_PATH_ERROR = 'ກະລຸນາລະບຸທີ່ຢູ່ທີ່ຖືກຕ້ອງ! ';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'ສ້າງ Thumbnail ສະແດງຮູບພາບຮຽບຮ້ອຍແລ້ວ! ';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'ບໍ່ສາມາດສ້າງ Thumbnail ສະແດງຮູບພາບໄດ້! ';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'ອັບໂຫລດຜິດພາດ';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'ບໍ່ສາມາດລົບຮູບພາບໄດ້';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'ລົບພາບຮຽບຮ້ອຍແລ້ວ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'ບໍ່ສາມາດລົບ Thumbnail ສະແດງຮູບພາບໄດ້ (ອາດຈະຍັງບໍ່ໄດ້ມີການສ້າງ): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'ລົບ Thumbnail ສະແດງຮູບພາບຮຽບຮ້ອຍແລ້ວ';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'ບໍ່ສາມາດລົບໄຟລ໌ນີ້ໄດ້';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'ລົບໄຟລ໌ຮຽບຮ້ອຍແລ້ວ';
	var $_PHPSHOP_FILES_NOT_FOUND = 'ບໍ່ພົບໄຟລ໌ທີ່ຕ້ອງການ! ';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'ບໍ່ພົບຮູບພາບ! ';
	var $_PHPSHOP_COUPON_MOD = 'ຄູປອງ';
	var $_PHPSHOP_COUPONS = 'ຄູປອງ';
	var $_PHPSHOP_COUPON_LIST = 'ລາຍການຄູປອງ';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'ຄູປອງຖືກແລກແລ້ວ';
	var $_PHPSHOP_COUPON_REDEEMED = 'ຄູປອງແລກຮຽບຮ້ອຍແລ້ວ';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'ຖ້າທ່ານມີຄູປອງ ໂປດລະບຸໝາຍເລກ: ';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'ຕົກລົງ';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'ລະຫັດຄູປອງນີ້ມີຢູ່ແລ້ວ ກະລຸນາລອງໃໝ່ອີກຄັ້ງ';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'ແກ້ໄຂ';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'ຄິກເທິງຄູປອງເພື່ອລົບຫຼືແກ້ໄຂ';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'ລະຫັດຄູປອງ';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'ເປີລ໌ເຊັນຕ໌ ຫລື ທັງຫົມດ';
	var $_PHPSHOP_COUPON_TYPE = 'ປະເພດຄູບອງ';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = '- ຄູປອງຂອງຂວັນຈະລົບຫລັງຈາກຖືກໃຊ້ແລກສ່ວນລຸດແລ້ວ <br /> - ຄູປອງຖາວອນຈະສາມາດໃຊ້ໄດ້ເທົ່າທີ່ລູກຄ້າຕ້ອງການ';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'ຄູປອງຂອງຂັວນ';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'ຄູປອງຖາວອນ';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'ມູນຄ່າ';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'ລະຫັດ';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'ຕ້ອງກາລົບລະຫັດຄູປອງນີ້? ';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'ກະລຸນາລະບຸທຸກຊ໋ອງ';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'ມູນຄ່າຂອງຄູປອງ ລະບຸສະເພາະຕົວເລກ';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'ເພີ່ມຄູປອງໃຫມ່';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'ລະຫັດຄູບອງ';
	var $_PHPSHOP_COUPON_PERCENT = 'ເປີລ໌ເຊັນ';
	var $_PHPSHOP_COUPON_TOTAL = 'ທັງຫົມດ';
	var $_PHPSHOP_COUPON_VALUE = 'ມູນຄ່າ';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'ບັນທຶກລະຫັດຄູບອງ';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'ບັນທຶກ';
	var $_PHPSHOP_COUPON_DISCOUNT = 'ຄູປອງສ່ວນລົດ';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'ບໍ່ພະບົນຫັດຄູປອງ ກະລຸນາລອງໃໝ່ອີກຄັ້ງ';
	var $_PHPSHOP_COUPONS_ENABLE = 'ອະນຸຍາດໃຫ້ໃຊ້ຄູປອງ';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'ຖ້າອະນຸຍາດໃຫ້ໃຊ້ຄູປອງໄດ້ ລູກຄ້າຈະສາມາດລະບຸໝາຍເພື່ອຮັບສ່ວນລຸດໃນການສັ່ງຊື້ໄດ້';
	var $_PHPSHOP_FREE_SHIPPING = 'ຈັດສົ່ງຟີ';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'ຄ່າຈັດສົ່ງຟີ! ';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'ຈຳນວນຕ່ຳສຸດທີ່ຂົນສົ່ງຟີ';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'ຈຳນວນຕ່ຳສຸດທີ່ຂົນສົ່ງໃຫ້ຟີ (ລວມພາສີແລ້ວ!)  ຕົວຢ່າງເຊັ່ນ: <strong> 50 </strong> ໝາຍເຖິງ ຂົນສົ່ງຟີເມື່ອລູກຄ້າສັ່ງຊື້ສິນຄ້າມູນຄ່າ $50 ຫລືຫຼາຍກວ່າ (ລວມພາສີແລ້ວ) ';
	var $_PHPSHOP_YOUR_STORE = 'ຮ້ານຄ້າ  ';
	var $_PHPSHOP_CONTROL_PANEL = 'ບໍລິຫານຮ້ານຄ້າ';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'ປຸ່ມ - PDF';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'ສະແດງຫຼືຊ່ອນປຸ່ມ - PDF ໃນສ່ວນຮ້ານຄ້າ ';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'ຕ້ອງຍອມຮັບຂໍ້ຕົກລົງທຸກລາຍການສັ່ງຊື້? ';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'ເລືອກລາຍການນີ້ ຫາກຕ້ອງການໃຫ້ລູກຄ້າຕ້ອງຍອມຮັບຂໍ້ຕົກລົງທຸກລາຍການ (ກ່ອນກໍ່ການສັ່ງຊື້) ';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'ປະເພດບັນຊີ';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'ເຊັກສ່ວນຕົວ';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'ເຊັກທຸລະກິດ';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'ສະສົມຊັບ';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = ' ເອກສານໃບແຈ້ງຫນີ້? ';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'ລະບຸຫາກຕ້ອງການເອກະສານໃບແຈ້ງຫນີ້';
	var $_PHPSHOP_INTERNAL_ERROR = 'ເກີດຂໍ້ຜິດພາດລະຫວ່າງການດຳເນີນການ';
	var $_PHPSHOP_PAYMENT_ERROR = 'ບໍ່ສາມາດດຳເນີນການຊຳລະເງິນໄດ້';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'ການຊຳລະເງີນດຳເນີນການຮຽບຮ້ອຍແລ້ວ';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS ບໍ່ສາມາດຄຳນວນອັດຕາຄ່າຂົນສົ່ງທີ່ຕ້ອງການໄດ້';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'ຮັບປະກັນຈັດສົ່ງ';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'ວິທີຈັດສົ່ງຂອງ UPS';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'ທ່ານສົ່ງຫີບຫໍ່ບັນຈຸພັນ໌ໃຫ້ UPS ໄດ້ຢ່າງໃດ? ';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'ແບບບັນຈຸພັນ UPS? ';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'ເລືອກຮູບແບບບັນຈຸພັນ ';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'ການຈັດສົ່ງສຳລັບທີ່ພັກອາໃສ? ';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'ການຈັດສົ່ງສຳລັບທີ່ພັກອາໄສ  (RES) ';
	var $_PHPSHOP_UPS_COMMERCIAL = 'ການຈັດສົ່ງສຳລັບທຸລະກິດ  (COM) ';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'ຕ້ອງການລາຄາສຳລັບ ການຈັດສົ່ງສຳລັບທີ່ພັກອາໄສ  (RES) ຫລື ການຈັດສົ່ງສຳລັບທຸລະກິດ  (COM). ';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'ຄ່າຈັດການ';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'ຄ່າຈັດການສຳລັບການວິທີການຂົນສົ່ງນີ້';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Tax Class';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'ໃຊ້ Tax Class ໃນການຄຳນວນຄ່າທຳນຽມຂົນສົ່ງ';
	var $_PHPSHOP_ERROR_CODE = 'ຂໍ້ຜິດພາດ';
	var $_PHPSHOP_ERROR_DESC = 'ລາຍລະອຽດ';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'ສະແດງ/ແກ້ໄຂ ເລກລະຫັດການຈ່າຍເງິນ';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'ສະແດງ/ແກ້ໄຂ ລະຫັດຜ່ານ/ເລກລະຫັດການຈ່າຍເງິນ';
	var $_PHPSHOP_TYPE_PASSWORD = 'ກະລຸນາປ້ອນລະຫັດຜ່ານ';
	var $_PHPSHOP_CURRENT_PASSWORD = 'ລະຫັດຜ່ານປັດຈຸບັນ';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'ເລຂົນຫັດປະຈຸບັນສຳລັບການຈ່າຍເງິນ';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'ເລຂົນຫັດການເຮັດທຸນກຳໄດ້ຮັບການປ່ຽນຮຽບຮ້ອຍແລ້ວ';
	var $_PHPSHOP_PAYMENT_CVV2 = 'ຕ້ອງການລະຫັດກວດສອບ  (CVV2/CVC2/CID) ';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'ເລືອກເພື່ອໃຊ້ກວດສອບຄ່າ CVV2/CVC2/CID (3 ຫລື 4 ຫລັກເທິງດ້ານຫລັງບັດລະເຄດິດ, ກໍລະນີບັດດ American Express ຈະຢູ່ດ້ານໜ້າ)? ';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'ກະລຸນາລະບຸໝາຍເລກ 3 ຫລື 4 ຫລັກທີ່ຢູ່ເທິງດ້ານຫລັງບັດລະເຄດິດຂອງທ່ານ (ກໍລະນີບັດດ American Express ຈະຢູ່ດ້ານໜ້າ) ';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'ຕ້ອງໃສ່ໝາຍເລກບັດລະເຄດິດເພື່ອດຳເນີນການ';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'ລະບຸຊື່ໄຟລ';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'ໝາຍເຫດ: <strong > ຖ້າລະບຸຊື່ໄຟລ໌ແທນເລືອກໄຟລ໌ ຈະບໍ່ມີການອັບໂຫລດໄຟລ໌ ຕ້ອງກໍ່ການອັບໂຫລດໄຟລ໌ເອງ ໂດຍໃຊ້ FTP! </strong> ';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'ຫຼືເລືອກໄຟລ໌ທີ່ຕ້ອງການອັບໂຫລດ';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'ທ່ານສາມາດອັບໂຫລດໄຟລ໌ ຊຶ່ງຈະເປັນໄຟລ໌ສິນຄ້າທີ່ຈະຂາຍ - ໄຟລ໌ເດີມຈະຖືກຂຽນທັບດ້ວຍໄຟລ໌ໃຫມ່ ';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'ໃສ່ຂໍ້ຄວາມທີ່ຕ້ອງການສະແດງໃຫ້ລູກຄ້າ ໃນໜ້າສະແດງສິນຄະ [້] [າ] <br / > ເຊັ່ນ: 24ຊົມ., 48 ຊົ່ວໂມງ, 3 - 5 ວັນ, ຢູ່ລະຫວ່າງການຈັດຫາ.... ';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'ຫລືເລືອກຮູບພາບທີ່ຕ້ອງການໃຫ້ສະແດງໃນໜ້າລາຍລະອຽດສິນຄະ [້] [າ] <br / > ຮູບພາບຈະຢູ່ໃນໄດເລກທໍລີ່ <i> /components/com_virtuemart/shop_image/availability </i> <br /> ';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'ຄຸນລັກສະນາ ';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4> ຕົວຢ່າງຮູບແບບການກຳນົດຄຸນລັກສະນະ: </h4> <span class="sectionname"> <strong > ຂະໜາດ </strong>, XL [+1.99], M, S [-2.99] <strong>;ສີ </strong>, ແດງ, ຂຽວ, ເຫລືອງ, ສີພິເສດ [=24.00] <strong>; ອື່ນ ໆ </strong>,..,.. </span> <h4 > ວິທີຕັ້ງຄ່າລາຄາສຳລັບສິນຄ້າທີ່ມີເຈົ້າລັກສະນະເພິ່ມເຕິມ: </h4> <pre> + == ເພີ່ມລາຄາຈາກລາຄາສິນຄ້າທີ່ຕັ້ງໄວ້<br /> - == ລຸດລາຄາລົງຈາກລາຄາສິນຄ້າທີ່ຕັ້ງໄວ້  <br /> = == ໃຫ້ລາຄາສິນຄ້າເທົ່າກັບລາຄາທີ່ກຳຫົນດ </pre> ';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'ກຳນົດຄຸນລັກສະນະອື່ນ ໆ';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4> ຕົວຢ່າງຮູບແບບການກຳນົດເຈົ້າລັກສະນະອື່ນ ໆ: </h4> <pre> Name; Extras; </strong>... </pre> ';
	var $_PHPSHOP_MULTISELECT = 'ເລືອກຫລາຍລາຍການ: ກົດປຸ່ມ CTRL ແລະຄິ໊ກເມົ້າ';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'ເລືອກໃຊ້ການຊຳລະເງີນຂອງ eProcessingNetwork. com? ';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'ເລືອກໃຊ້ eProcessingNetwork. com ກັບ VirtueMart. ';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'ໂໝດທົດສອບ? ';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'ເລືອກ \'  yes \' ເພື່ອເຮັດລາຍການທົດສອບ -- ເລືອກ \'  \' ເພື່ອເຮັດລາຍການຈະລິ້ງ';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'ໝາຍເລກ ID ຂອງ eProcessingNetwork. com';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'ນີ້ຄືໝາຍເລກ ID ຂອງ eProcessingNetwork. com ຂອງທ່ານ';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'ເລຂົນຫັດສຳລັບໃຊ້ເຮັດທຸນກຳກັບ eProcessingNetwork. com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'ນີ້ຄືເລກລະຫັດສຳລັບໃຊ້ເຮັດທຸນກຳກັບ eProcessingNetwork. com ຂອງທ່ານ';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'ປະເພດການຮັບລິ້ງ';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'ປະເພດການຮັບຮອງຂອງ eProcessingNetwork. com';
	var $_PHPSHOP_RELATED_PRODUCTS = 'ສິນຄ້າທີ່ກ່ຽວຂ້ອງ';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'ສາມາດເລືອກລາຍການສິນຄ້າທີ່ກ່ຽວຂ້ອງກັບສິນຄ້ານີ້ ໂດຍເລືອກສິນຄ້າໜຶ່ງຫລືຫລາຍກວ່າ ຈາກລາຍການ <strong > ສິນຄ້າທີ່ກ່ຽວຂ້ອງ </strong>. ';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'ທ່ານອາດຈະໃຫ້ຄວາມສົນໃຈກັບລາຍການສິນຄ້ານີ້';
	var $_PHPSHOP_IMAGE_ACTION = 'ຈັດການຮູບພາບ';
	var $_PHPSHOP_NONE = 'ບໍ່ມີ';
	var $_PHPSHOP_ORDER_HISTORY = 'ປະຫວັດການສັ່ງຊື້';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'ຄວາມເຫັນ';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'ສະແດງຄວາມເຫັນໃນລາຍການສັ່ງຊື້';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'ລວມລາຍການຄວາມເຫັນ? ';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'ວັນທີ່ເພີ່ມ';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'ແຈ້ງເຕືອນລູກຄ້າ? ';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'ປ່ຽນແປງສະຖານະລາຍການສັ່ງຊື້';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = 'ຊື່ຜູ້ໃຊ້ງານ USPS shipping';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = 'Username that you received from registering at USPS.com.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = 'ລະຫັດຜ່ານ USPS shipping';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = 'Password that you received from registering at USPS.com.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER = ' ເຊິລ໌ຟະເວີລ໌ USPS shipping';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP = 'USPS shipping server, currently only works on live server!  Should be production.shippingapis.com';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH = 'ພາດ USPS shipping';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP = 'USPS shipping path, should be /ShippingAPI.dll';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE = 'ຂະໜາດບັນຈຸພັນທ໌ຂອງ USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP = 'Choices are Regular, Large, and Oversize.  This should be set to what you mostly mail and is based on the dimensions of the package.  Normally just Regular.';
	var $_PHPSHOP_USPS_PADDING = 'Percent to pad weight for shipping package. (Include %)';
	var $_PHPSHOP_USPS_PADDING_TOOLTIP = 'Pad the shipping weight to allow additional weight for shipping box and packing. Using this allows you to put actual weight in your items weight settings.  Requires you to have the % sign included.  Example 15%';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_HANDLING_FEE = 'ຄ່າທຳນຽມການຈັດການ';
	var $_PHPSHOP_USPS_HANDLING_FEE = 'ຄ່າທຳນຽມສຳລັບການຈັດສົ່ງ. ';
	var $_PHPSHOP_USPS_HANDLING_FEE_TOOLTIP = 'Do you want to charge extra for users to ship USPS?  In dollar format, example 2.00';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE = 'ຄ່າທຳນຽມການຈັດການລະຫວ່າງປະເທດ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP = 'ຄ່າທຳນຽມການຈັດການລະຫວ່າງປະເທດສຳລັບການຈັດສົ່ງດ້ວຍ USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE = 'ອັດຕາຄ່າຈັດສົ່ງລະຫວ່າງປະເທດຕໍ່ນ້ຳຫົນ [ັ]ກ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP = 'ອັດຕາຄ່າຈັດສົ່ງລະຫວ່າງປະເທດຕໍ່ນ້ຳໜັກສຳລັບການຈັດສົ່ງດ້ວຍ USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_MACHINABLE = 'If Parcel Post is used and package is under 6oz & over 35lbs.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_MACHINABLE_TOOLTIP = 'Is this package able to be handled by a machine.  Default should be No.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP = 'USPS Domestic Mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP0 = 'USPS Express Mail PO to Addressee';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP0_TOOLTIP = 'Standard USPS Express Mail.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP1 = 'USPS Express Mail Flat Rate Envelope (12.5" x 9.5")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP1_TOOLTIP = 'Select this if you allow shipping via the USPS Express Mail Flat Rate Envelope. Default should be No as it could come up cheaper than actual shipping and might not fit in the envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP2 = 'USPS Priority Mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP2_TOOLTIP = 'Standard USPS Priority Mail.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP3 = 'USPS Priority Mail Flat Rate Envelope (12.5" x 9.5")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP3_TOOLTIP = 'Select this if you allow shipping via the USPS Priority Mail Flat Rate Envelope.  Default should be No as it could come up cheaper than actual shipping and might not fit in the envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP4 = 'USPS Priority Mail Flat Rate Box (11.25" x 8.75" x 6")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP4_TOOLTIP = 'Select this if you allow shipping via the USPS Priority Mail Flat Rate Box.  Default should be No as it could come up cheaper than actual shipping and might not fit in the box.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP5 = 'USPS Priority Mail Flat Rate Box (14" x 12" x 3.5")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP5_TOOLTIP = 'Select this if you allow shipping via the USPS Priority Mail Flat Rate Box.  Default should be No as it could come up cheaper than actual shipping and might not fit in the box.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP6 = 'USPS First Class (Under 14oz)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP6_TOOLTIP = 'Select this if you allow shipping via USPS First Class Mail.  This will only be displayed if package weight is under .88 pounds.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP7 = 'USPS Parcel post';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP7_TOOLTIP = 'Standard USPS Parcel Post Mail.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP8 = 'USPS Bound Printed Matter';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP8_TOOLTIP = 'Select this if you allow shipping via USPS Bound Printed Matter.  Default should be No unless you ship bound magazines or newspapers in groups.  15 pound limit.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP9 = 'USPS Media Mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP9_TOOLTIP = 'Select this if you allow shipping via USPS Media Mail.  Default should be No.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP10 = 'USPS Library Mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP10_TOOLTIP = 'Select this if you allow shipping via USPS Library Mail.  Default should be No.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL = 'USPS International Mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL0 = 'USPS Global Express Gauranteed Document Service';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL0_TOOLTIP = 'Select this if you allow shipping via USPS Global Express Gauranteed Document Service.  Default should be No.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL1 = 'USPS Global Express Gauranteed Non-Document Service';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL1_TOOLTIP = 'Select this if you allow shipping via USPS Global Express Gauranteed Non-Document Service.  Default should be No.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL2 = 'USPS Global Express Mail (EMS)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL2_TOOLTIP = 'Standard USPS Global Express Mail.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL3 = 'USPS Global Priority Mail Flat Envelope Large';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL3_TOOLTIP = 'Select this if you allow shipping via USPS Global Priority Mail Flat Envelope Large.  Default should be No as it could come up cheaper than actual shipping and might not fit in the envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL4 = 'USPS Global Priority Mail Flat Envelope Small';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL4_TOOLTIP = 'Select this if you allow shipping via USPS Global Priority Mail Flat Envelope Large.  Default should be No as it could come up cheaper than actual shipping and might not fit in the envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL5 = 'USPS Global Priority Mail - Variable Weight';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL5_TOOLTIP = 'Standard USPS Global Priority Mail.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL6 = 'USPS Airmail Letter Post';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL6_TOOLTIP = 'Select this if you allow shipping via USPS Airmail Letter Post.  Default should be No as it could come up cheaper than actual shipping and might not fit in the letter.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL7 = 'USPS Airmail Parcel Post';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL7_TOOLTIP = 'Standard USPS Airmail Parcel Post.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL8 = 'USPS Economy Letter Post';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL8_TOOLTIP = 'Select this if you allow shipping via USPS Economy Letter Post.  Default should be No as it could come up cheaper than actual shipping and might not fit in the letter.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL9 = 'USPS Economy Parcel Post';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL9_TOOLTIP = 'Standard Economy Parcel Post.';
	var $_PHPSHOP_USPS_RESPONSE_ERROR = 'USPS ບໍ່ສາມາດເຮັດລາຍການອັດຕາຄ່າຂົນສົ່ງ [ໄ]ດະ [້] ';
	var $_PHPSHOP_PARAMETERS_LBL = 'ພາລາມິເຕີ';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'ຊະນິດສິນຄ້າ ';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'ຊະນິດສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'ເພີ່ມ/ແກ້ໄຂ ຊະນິດສິນຄ້າ ';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'ຊະນິດສິນຄ້າສຳຫຼັບ';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'ຊະນິດສິນຄ້າ ';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'ເພີ່ມຊະນິດສິນຄ້າສຳຫຼັບ';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'ເພີ່ມຊະນິດສິນຄ້າ ';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'ຊະນິດສິນຄ້າ ';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'ຊື່ຊະນິດສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'ລາຍລະອຽດຊະນິດສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'ພາລາມິເຕີ ';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'ລາຍລະອຽດຊະນິດສິນຄ້າ ';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'ເຜີຍແຜ່? ';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'ສະແດງລາຍການຊະນິດສິນຄ້າ ';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'ໜ້າຕ່າງສະແດງລາຍການຊະນິດສິນຄ້າ ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'ພາລາມິເຕີລ໌ຂອງຊະນິດສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'ລາຍລະອຽດພາລາມິເຕີ ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'ບໍ່ພົບຊະນິດສິນຄ້າ! ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'ຊື່ພາລາມິເຕີ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'ນິ້ເປັນຊື່ສຳລັບຄໍລຳຂອງຕາລາງຂໍ້ມູນ ຕ້ອງເປັນອັກສອນຕົວນ້ອຍແລະຫ້າມເວັ້ນວັນຄ <BR > ຕົວຢ່າງເຊັ່ນ: main_material';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'ພາລາມິເຕີລ໌ ລາເບລ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'ລາຍລະອຽດພາລາມິເຕີ ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'ຊະນິດພາລາມິເຕີ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'ຈຳນວນເຕັມ  (Integer) ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'ຂໍ້ຄວາມ  (Text) ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'ຂໍ້ຄວາມສັ້ນ  (Short Text) ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'ເລກທົດນິຍົມ  (Float) ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'ອັກຂະ  (Char) ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'ວັນທີ່ແລະເວລາ  (Date & Time) ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'ວັນທີ່  (Date) ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'YYYY-MM-DD';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'ເວລາ  (Time) ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'HH:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'ເສັ້ນຈົບ  (Break Line) ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'ຫຼາຍຄ່າ  (Multiple Values) ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'ຄ່າທີ່ເປັນໄປໄດ້ ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'ສະແດງຄ່າທີ່ເປັນໄປໄດ້ແບບຫລາຍຕົວເລືອກ? ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong> ຫາກເລືອກລາຍການນີ້ ຈະສະແດງສະເພາະຄ່າພາລາມິເຕີລ໌ ເຊັ່ນ: </strong> <BR> <span class="sectionname"> Steel; Wood; Plastic;... </span> ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'ຄ່າປົກຕິ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'ສຳລັບຄ່າພາລາມິເຕີລ໌ປົກກະຕິໃຊ້ຮູບແບບນີ້: <ul> <li > ວັນທີ່: YYYY-MM-DD </li> <li > ເວລາ: HH: MM: SS </li> <li > ວັນທີ່ແລະເວລາ: YYYY-MM-DD HH: MM: SS </li> </ul> ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'ໜ່ວຍ';
	var $_PHPSHOP_PARAMETER_SEARCH = 'ຄົ້ນຫາໂດຍກຳນົດພາລາມິເຕີລ໌ເອງ';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'ຄົ້ນຫາພາລາມິເຕີລ໌ແບບຂັ້ນສູງ';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'ຕ້ອງການຄົ້ນຫາສິນຄ້າໂດຍກຳນົດພາລາມິເຕີລ໌ເອງ? <BR > ສາມາດເລືອກລາຍການປຽບທຽບ: ';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'ຂະອໍໄພ ບໍ່ມີໝວດໝູ່ໃຫ້ຄົ້ນຫາ ';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'ຂະອໍໄພ ບໍ່ມີຊື່ປະເພດສິນຄ້ານີ້';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'ຄືກັບ';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'ບໍ່ຄືກັບ';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'ຄົ້ນຫາທັງຂໍ້ຄວາມ';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'ເລືອກທັງຫົມດ';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'ເລືອກເພສາ ';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'ຕັ້ງຄ່າໃຫມ່ ';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'ຄົ້ນຫາໃນໝວດຫມູ່';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'ປ່ຽນພາລາມິເຕີ';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'ຈາກຫຼາຍມາຫານ້ອຍ';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'ຈາກນ້ອຍໄປຫາຫຼາຍ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'ພາລາມິເຕີລ໌ຂອງໝວດຫມູ່';
	var $_PHPSHOP_FEE = 'ຄ່າທຳນຽມ';
	var $_PHPSHOP_PRODUCT_CLONE = 'ກອ໋ປປີ້ສິນຄ້າ ';
	var $_PHPSHOP_CSV_SETTINGS = 'ຕັ້ງຄ່າ ';
	var $_PHPSHOP_CSV_DELIMITER = 'ຕົວຂັ້ນ';
	var $_PHPSHOP_CSV_ENCLOSURE = 'ອັກຂະປິດຟິນດະ [໌] ';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'ອັບໂຫລດໄຟລ໌ CSV';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'ອັບໂຫລດ';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'ໂຫລດຈາກໄດເລກທໍລີ';
	var $_PHPSHOP_CSV_FROM_SERVER = 'ໂຫລດໄຟລ໌ CSV ຈາກ ເຊິລ໌ຟະເວີລ ';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'ສົ່ງອອກເປັນໄຟລ໌ CSV';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'ເລືອກການລຽງລຳດັບຟິວ ';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'ລຽງລຳດັບຕາມປົກຕິ';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'ກຳນົດການລຽງລຳດັບເອງ';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'ສົ່ງອອກສິນຄ້າທັງໝົດເປັນໄຟລ໌ CSV';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'ຕັ້ງຄ່າການນຳເຂົ້າ / ສົ່ງອອກໄຟລ໌ CSV';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'ບັນທຶກການປ່ຽນແປງ';
	var $_PHPSHOP_CSV_FIELD_NAME = 'ຊື່ຟິວ ';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'ຄ່າປົກຕິ';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'ລຽງລຳດັບຟິວ';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'ຕ້ອງລະບຸ? ';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'ນຳເຂົ້າ/ສົ່ງອອກ';
	var $_PHPSHOP_CSV_NEW_FIELD = 'ເພີ່ມຟິວໃຫມ່';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'ເອກສານ';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'ຂະອໍໄພ ບໍ່ພົບລາຍການສິນຄ້າທີ່ຕ້ອງການ! ';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'ສະແດງລາຍການສິນຄ້າທີ່ບໍ່ມີໃນຄັງສິນຄ້າ';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'ຫາກເລືອກລາຍການນີ້ ຈະສະແດງລາຍການສິນຄ້າທີ່ບໍ່ມີເຫລືອໃນຄັງສິນຄ້າ';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'ຈຳນວນ {unit} ໃນບັນຈຸພັນທ໌: ';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'ຈຳນວນ {unit} ໃນກ່ອງ: ';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'ຊ່ອນສິນຄ້າຄົງເຫຼືອ';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'ສິນຄ້າຈັດລາຍການ ແລະລຸດລາກ [າ] ';
	var $_PHPSHOP_FEATURED = 'ຈັດລາຍການ';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'ກັບໄປຍັງປະເທດ';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'ກັບໄປຍັງລະບົບການຈັດການໄຟລ';
	var $_PHPSHOP_ADD_STATE = 'ເພີ່ມເມືອງ';
	var $_PHPSHOP_LIST_STATES = 'ລາຍຊື່ເມືອງ';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'ຈັດລາຍການແລະລຸດລາຄາ ';
	var $_PHPSHOP_SHOW_FEATURED = 'ສິນຄ້າຈັດລາຍການ';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'ສິນຄ້າລຸດລາຄາ ';
	var $_PHPSHOP_FILTER = 'ເລືອກ';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'ກັບໄປຍັງໄຊຕ໌ຫະຫຼັກ';
	var $_PHPSHOP_EXPAND_TREE = 'ສະແດງລາຍການ';
	var $_PHPSHOP_COLLAPSE_TREE = 'ປິດລາຍການ';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'ລາຄາທີ່ລຸດແລ້ວ';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'ສາມາດຍົກເລີກການຕັ້ງຄ່າຕາມປະເພດສ່ວນລຸດ ແລ້ວກຳນົດລາຄາຂາຍສິນຄ້າທີ່ລຸດພິເສດແລ້ວໄດ້ເອງ <br/ > ຊຶ່ງລະບົບຈະເຮັດການສ້າງລາຍການລຸດລາຄາຂຶ້ນໃຫມ່ ';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'ລາຄາຕໍ່ໜ່ວຍ';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'ປິດຮ້ານຊົ່ວຄາວ? ';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'ຫາກເລືອກລາຍການນີ້ ຈະສະແດງຂໍ້ຄວາມປິດລ້ານຊົ່ວຄາວ';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'ຂໍ້ຄວາມປິດລ້ານຊົ່ວຄາວ';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'ຄ່າ Prefix ສຳລັບຕາລາງຂໍ້ມູນຮ້ານຄ້າ';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'ຄ່າປົກກະຕິ ຄື <strong> vm </strong> ';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'ສະແດງປຸ່ມຄວບຄຸມທິດທາງທີ່ດ້ານເທິງຂອງລາຍການສິນຄ້າ? ';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'ເປີດຫຼືປິດການສະແດງປຸ່ມຄວບຄຸມທິດທາງທີ່ດ້ານເທິງຂອງລາຍການສິນຄ້າໃນໜ້າລ້ານ';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'ສະແດງຈຳນວນສິນຄ້າ? ';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'ສະແດງຈຳນວນສິນຄ້າໃນໝວດໝູ່ ເຊັ່ນ ໝວດໝູ່  (4)? ';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'ຮູບແບບຂອງປຸ່ມ Add-to-Cart';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'ເປີດໃຊ້ງານການປ່ຽນແປງຮູບ? ';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'ຫາກເລືອກລາຍການນີ້ ຈະເປີດໃຊ້ງານສ່ວນຂອງການປ່ຽນແປງຂະໜາດຮູບຫຍໍ້ ຕາມທີ່ກຳນົດ ໄວ້, ໃຊ້ຟັງກ໌ຊັ່ນ PHP\'s GD2  (ສາມາດກວດສອບວ່າຮອງຮັບການໃຊ້ງານ GD2 ຫລືບໍ່ ໄປທີ່ "System" -> "System Info" -> "PHP Info" -> gd ຊຶ່ງ	ຄຸນນະພາບຂອງຮູບຫຍໍ້ຈະແຈ້ງກວ່າການປ່ຽນແປງຂະໜາດໂດຍໃຊ້ບະຫລາວເຊີລ໌ ຮູບຫຍໍ້ທີ່ສ້າງໃໝ່ຈະເກັບໄວ້ໃນໄດເລກທໍລີ /shop_image/product/resized ແລະຈະຖືກຮຽກສະແດງແທນການປ່ຽນຂະໜາດຮູບໂດຍລາວເຊີ ';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'ຄວາມກວ້າງຂອງຮູບພາບ';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = '<strong> ຄວາມກວ້າງຫຼາຍສຸດ </strong> ເມື່ອມີການປ່ຽນແປງຂະໜາດຮູບພາບ';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'ຄວາມສູງຂອງຮູບພາບ';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = '<strong> ຄວາມສູງຫຼາຍສຸດ </strong> ເມື່ອມີການປ່ຽນແປງຂະໜາດຮູບພາບ';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'ກະລຸນາເລືອກຢ່າງນ້ອຍ 1 ລາຍການ! ';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'ການຕັ້ງຄ່າລາຄາ';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'ກຸ່ມຜູ້ໃຂ້ງານທີ່ສາມາດເຫັນລາຄາໄດ້';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'ກຸ່ມຜູ້ໃຊ້ງານທີ່ເລືອກ ແລະກຸ່ມທີ່ມີສິດສູງກວ່າຈະສາມາດເຫັນລາຄາສິນຄ້າໄດ້ ';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'ສະແດງ " (ລວມພາສີ XX%) "? ';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'ເມື່ອເລືອກລາຍການນີ້ ຜູ້ໃຊ້ງານຈະເຫັນຂໍ້ຄວາມ " (ລວມພາສີ xx%) " ເມື່ອມີການກຳນົດໃຫ້ລວມພາສີ';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'ສະແດງລາຄາຕໍ່ບັນຈຸພັນ? ';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'ເມື່ອເລືອກລາຍການນີ້ ທາລາຄາຈະປ່ຽນຈາກລາຄາຕໍ່ຫນ່ວຍເປັນຕໍ່ບັນຈຸພັນທ໌: <br/> <strong > ລາຄາຕໍ່ຫນ່ວຍ  (10 ຊິ້ນ) </strong> <br/> ຫາກບໍ່ໄດ້ເລືອກ, ທາລາຄາຈະສະແດງແບບປົກກະຕິ: <strong > ລາຄາ: xx. xx B </strong> ';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'ຕັ້ງຄ່າສ່ວນແກນຫລັກອື່ນ ໆ';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'ຕັ້ງຄ່າສ່ວນແກນຫລັກ';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'ຮູບແບບໜ້າຮ້ານ';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'ຕັ້ງຄ່າພາສີ';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'ຈຳນວນເລີ່ມຕົ້ນ';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'ຈຳນວນສິ້ນສຸດ';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'ຕັ້ງຄ່າການລົງທະບຽນຜູ້ໃຊ້ງານ';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'ອະນຸຍາດໃຫ້ຜູ້ໃຊ້ງານລົງທະບຽນ? ';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'ຈຳເປັນຕ້ອງຢືນຢັນການລົງທະບຽນໃຫມ່? ';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'ເປີດໃຊ້ງານການລົງທະບຽນແບບເຊື່ອງ? ';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'ເມື່ອເລືອກລາຍການນີ້ ຜູ້ໃຊ້ງານບໍ່ຈຳເປັນຕ້ອງໃສ່ຊື່ແລະລະຫັດຜ່ານສຳລັບລົງທະບຽນຜູ້ໃຊ້ງານໃໝ່ ໂດຍໃຊ້ອີເມລ໌ແທນສຳລັບການເປີດບັນຊີ ແລະຈະກຳຫົນດົນຫັດຜ່ານໃຫ້ເອງ ແລ້ວຈະສົ່ງລາຍລະອຽດໃຫ້ທາງອີເມລ ';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'ສະບາຍດີ %s, <br/> <br/>	ບັນຊີລູກຄ້າຂອງທ່ານສ້າງຮຽບຮ້ອຍແລ້ວ <br/ > ຂໍຂອບໃຈທີ່ທ່ານລົງທະບຽນກັບ  %s <br/> <br/> ທ່ານສາມາດລັອກອິນເຂົ້າສູ່ລະບົບຂອງ %s ໂດຍໃຊ້ຊື່ຜູ້ໃຊ້ງານແລະລະຫັດຜ່ານ: <br/> <br/> ຊື່ຜູ້ໃຊ້ງານ - %s <br/>	ລະຫັດຜ່ານ - %s';
	var $_PEAR_LOG_CRIT = 'Critical';
	var $_PEAR_LOG_ERR = 'Error';
	var $_PEAR_LOG_WARNING = 'Warning';
	var $_PEAR_LOG_INFO = 'Info';
	var $_PEAR_LOG_TIP = 'Info';
	var $_PEAR_LOG_ALERT = 'Alert';
	var $_PEAR_LOG_EMERG = 'Emergency';
	var $_PEAR_LOG_NOTICE = 'Notice';
	var $_PEAR_LOG_DEBUG = 'Debug';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'ເລືອກໃຊ້ການຊຳລະເງີນຂອງ PayFlow Pro? ';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'ເລືອກໃຊ້ VeriSign\'s PayFlow Pro ກັບ VirtueMart. ';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'ໂໝດທົດສອບ? ';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'ເລືອກ \' ໃຊ້ \' ເພື່ອເຮັດລາຍການທົດສອບ -- ເລືອກ \'ບໍ່ໃຊ້ \' ເພື່ອເຮັດລາຍການຈະລິ້ງ';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'ໝາຍເລກ VeriSign Partner ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'ໝາຍເລກ Partner ID ທີ່ທາງ VeriSign ອອກໃຫ້ສຳລັບໃຊ້ບໍລິການຂອງ PayFlow Pro';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'ໝາຍເລກ ID ຜູ້ໃຊ້ງານ PayFlow Pro';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'ນີ້ຄືໝາຍເລກ ID ຜູ້ໃຊ້ງານ PayFlow Pro';
	var $_VM_TAXDETAILS_LABEL = 'ລະບຸພາສີທັງຫົມດ';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'ຈັດລຽງສິນຄ້າພື້ນຖານ';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'ຈຳກັດຄວາມໂດຍຟິນຂອງສິນຄ້າທີ່ມີການສັ່ງຊື້ຈາກດ້ານໜ້າເວັບ';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'ສາມາດ "ຈັດລຽງ-ໂດຍ" ຟິລ';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'ເລືອກ "ຈັດລຽງໂດຍ" ຟິມສຳລັບດ້ານໜ້າເວັບ. ຈຳກັດໃນແຕ່ລະວິທີການຈັດລຽງສຳລັບສິນຄ້າດ້ານໜ້າເວັບ. ຖ້າທ່ານບໍ່ມີການເລືອກຈາກລາຍການທັງຫົມດ, ຕົວເລືອກ ຈັດລຽງໂດຍຟອມ ຈະບໍ່ຖືກສະແດງ. ';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO = 'Show a short note about your "Returns Policy" on the order confirmation page?';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP = 'In most european countries store owners are required by law to inform their customers about return and order cancellation policies. So this should be enabled in most cases.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT = 'Legal information text (short version).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP = 'This text instructs your customers in short about your return and order cancellation policy. It is shown on the last page of checkout, just above the "Confirm Order" button.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK = 'Long version of the return policy (link to a content item).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP = 'Please add a new content item about the details of your return and order cancellation policy.
Afterwards you can select it here.';
	var $_VM_LEGALINFO_SHORTTEXT = '<h5>Returns Policy</h5>
You can cancel this order within two weeks after we have received it.
You can return new, unopened items from a cancelled order within 2 weeks after they have been 
delivered to you. Items should be returned in their original packaging.
For more information on cancelling orders and returning items, see the <a href="%s" onclick="%s" target="_blank">Our Returns Policy</a> page.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EU = 'European Union mode';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE = 'The directory to store session data is not writable. Please correct this or contact your provider.';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX = 'The Session Save Path %s is not writable. Please correct this! The shop is temporarily trying to use the %s instead.';
	var $_VM_SESSION_COOKIES_NOT_ACCEPTED_TIP = 'Your browser does not accept cookies. If you want to put products into your cart and purchase them you need to enable cookies.';
	var $_PHPSHOP_CSV_SKIP_FIRST_LINE = 'Skip first line';
	var $_PHPSHOP_CSV_SKIP_DEFAULT_VALUE = 'Skip default value';
	var $_PHPSHOP_CSV_OVERWRITE_EXISTING_DATA = 'Overwrite existing data';
	var $_PHPSHOP_CSV_INCLUDE_COLUMN_HEADERS = 'Include column headers';
	var $_PHPSHOP_CSV_UPLOAD_SETTINGS = 'Upload Settings';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS = 'Available Fields';
	var $_PHPSHOP_CSV_OUTPUT_CSV_UPLOAD_MESSAGES = 'CSV upload messages:';
	var $_PHPSHOP_CSV_OUTPUT_COUNT = 'Count';
	var $_PHPSHOP_CSV_OUTPUT_TOTAL = 'Total';
	var $_PHPSHOP_CSV_OUTPUT_FILE_IMPORTED = 'CSV File Imported';
	var $_PHPSHOP_CSV_OUTPUT_UPDATED = 'Updated';
	var $_PHPSHOP_CSV_OUTPUT_DELETED = 'Deleted';
	var $_PHPSHOP_CSV_OUTPUT_ADDED = 'Added';
	var $_PHPSHOP_CSV_OUTPUT_SKIPPED = 'Skipped';
	var $_PHPSHOP_CSV_OUTPUT_INCORRECT = 'Incorrect';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS_USE = 'The following fields are available for your use to import or export.';
	var $_PHPSHOP_CSV_MINIMAL_FIELDS = 'The minimal required fields are product_sku, product_name and category_path. Except for the product_sku, the other two fields are not unique.';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SKU = 'The unique identifier for a product.<br /.>Values:<ul><li>Number</li><li>Letters</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_NAME = 'The name of the product.Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DELETE = 'The product_delete field is a special field. This field is used to determine if a product should be deleted or not.<br />Usage:<ol><li>Add the the name "product_delete" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the value Y. If the field contains any other value, the product will not be deleted.</li></ol><br /.>Values:<ul><li>Y: Yes, the product is to be deleted</li><li>N: No, the product is not to be deleted</li><li>Empty: Empty value, the product is not to be deleted</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DESC = 'Long description for the product.<br />Values:<ul><li>Text: HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_S_DESC = 'Short description for the product.<br />Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PUBLISH = 'The status if a product is published or not.<br />Values:<ul><li>Y: Yes, the product is published</li><li>N: No, the product is not published</li><li>Empty: Empty value, the product is published.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WIDTH = 'The width of the product.<br />Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_HEIGHT = 'The height of the product.<br />Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABLE_DATE = 'The date a product will become availabable. For import the date should be in the format of day/month/year or day-month-year. On Windows systems the date goes until 19/01/2038.<br />Usage:<ol><li>Add the the name "product_available_date" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a date value. If the field contains any other value, the data will be ignored.</li></ol><br />Values:<ul><li>Date: day/month/year or day-month-year</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_IN_STOCK = 'The number of articles that you have in stock.<br /><br />Usage:<ol><li>Add the the name "product_in_stock" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a numeric value. If the field contains any other value, the default value will be used.</li></ol><br />Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE = 'The different choices a product has. Use this to give a product different specifications. For example a t-shirt that comes in different sizes and colours. You can specify the sizes and colours like this: Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00];AndSoOn,..,..<br /><br />You can adjust the prices per attribute by using the following options:<ul><li>+: Add this amount to the configured price.</li><li>-: Subtract this amount from the configured price.</li><li>=: Set the product\\\'s price to this amount.</li></ul><br />Usage:<ol><li>Add the the name "attribute" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the attribute text.</li></ol><br /.>Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABILITY = 'This shows when the product is available. The value can be a descriptive text or the name of an image filename. Images must be placed in "shop_image/availability/".<br />Usage:<ol><li>Add the the name "product_availability" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_FULL_IMAGE = 'The filename of the image as located in the "shop_image/product/" folder. The filename can also be a URL.<br />NOTE: If you have dynamic resizing enabled, you need to fill the "product_thumb_image" field. VirtueMart resizes the image specified there.<br/><br />Usage:<ol><li>Add the the name "product_full_image" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\\\'s are allowed.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_THUMB_IMAGE = 'The filename of the thumbnail image as located in the "shop_image/product/" folder. The filename can also be a URL.<br />NOTE: If you have dynamic resizing enabled, there still needs to be a value in this field. VirtueMart resizes the image that is specified here.<br /><br />Usage:<ol><li>Add the the name "product_full_image" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\\\'s are allowed.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CUSTOM_ATTRIBUTE = 'A custom attribute will add an input field to the product page with the description of the attribute supplied. Custom attributes are specified like this: Name;Extras;...<br />Usage:<ol><li>Add the the name "custom_attribute" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the attribute text.</li></ol><br /.>Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PACKAGING = 'Specify the number of items in the package.<br />Usage:<ol><li>Add the the name "product_packaging" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the number of items in the package.</li></ol><br /.>Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_BOX = 'Specify the number of items in the box.<br />Usage:<ol><li>Add the the name "product_box" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the number of items in the box.</li></ol><br /.>Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT = 'Specify the amount or percentage of discount the product has. The values entered are exact values, no calculation is made. This is the same as if you are filling in a discount via the Product Discount List. If the discount already exists, it will not be added to the database but the product will be linked to the existing discount. The criteria for determining if a discount already exists the following values have to be exactly the same:<ol><li>Amount, be it a total or percentage</li><li>Start date</li><li>End date</li></ol>This prevents from filling the database with a huge number of the same discounts.<br /><br />Usage:<ol><li>Add the the name "product_discount" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Optional: Add the the name "product_discount_date_start" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Optional: Add the the name "product_discount_date_end" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add the chosen columns to your CSV file with the corresponding values.</li></ol><br /.>Values:<ul><li>product_discount</li><ul><li>Number<br />e.g. 10</li><li>Percentage: Must include the % sign<br />e.g. 10%</li></ul><li>product_discount_date_start</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul><li>product_discount_date_end</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul></ul>';
	var $_ITEM_PREVIOUS = 'ກ່ອນໜ້າ';
	var $_ITEM_NEXT = 'ຖັດໄປ';
	var $_CMN_OK = 'Ok';
	var $_CMN_CONTINUE = 'ເຮັດວຽກຕໍ່';
	var $_CMN_CANCEL = 'ຍົກເລິກ';
	var $_BUTTON_SEND_REG = 'Send Registration';
	var $_CONTACT_FORM_NC = 'Please make sure the form is complete and valid.';
	var $_CMN_REQUIRED = 'ຕ້ອງການ';
	var $_CMN_NEW = 'ສ້າງໃຫມ່';
	var $_CMN_SAVE = 'ບັນທຶກ';
	var $_CMN_NEW_ITEM_LAST = 'New items default to the last place. Ordering can be changed after this item is saved.';
	var $_CMN_OPTIONAL = 'ຂໍ້ກຳນົດເພີ່ມເຕິມ';
	var $_E_APPLY = 'ໃຊ້ງານ';
	var $_E_IMAGES = 'ຮູບພາບ';
	var $_URL = 'URL:';
	var $_SEL_CATEGORY = 'ເລືອກໝວດສິນຄ້າ';
	var $_E_REMOVE = 'ລົບ';
	var $_PN_LT = '<';
	var $_PN_RT = '>';
	var $_PN_PAGE = 'ໜ້າ ';
	var $_PN_OF = 'of';
	var $_PN_START = 'ເລິ່ມ';
	var $_PN_PREVIOUS = 'ກ່ອນໜ້າ ';
	var $_PN_NEXT = 'ຖັດໄປ';
	var $_PN_END = 'ສິ້ນສຸດ';
	var $_PN_DISPLAY_NR = 'ສະແດງ #';
	var $_PN_RESULTS = 'ຜົນລັບ';
	var $_CMN_PRINT = 'Print';
	var $_CMN_PDF = 'PDF';
	var $_CMN_EMAIL = 'E-mail';
	var $_BACK = 'ຍ້ອນກັບ';
	var $_USERNAME = 'ຊື່ຜູ້ໃຊ້ງານ';
	var $_PASSWORD = 'ລະຫັດຜ່ານ';
	var $_BUTTON_LOGIN = 'ເຂົ້າສູ່ລະບົບ';
	var $_REGISTER_UNAME = 'ຊື່ຜູ້ໃຊ້';
	var $_REGISTER_EMAIL = 'Email';
	var $_REGWARN_NAME = 'ກະລຸນາໃສ່ຊື່ທ່ານ. ';
	var $_REGWARN_UNAME = 'ກະລຸນາໃສ່ຊື່ຜູ້ໃຊ້ຂອງທ່ານ. ';
	var $_REGWARN_MAIL = 'Please enter a valid e-mail address.';
	var $_SEND_SUB = 'Account details for %s at %s';
	var $_ASEND_MSG = 'ສະບາຍດີ %s,
	
	A new user has registered at %s.
	This email contains their details:
	
	Name - %s
	e-mail - %s
	Username - %s
	
	Please do not respond to this message as it is automatically generated and is for information purposes only';
	var $_REG_COMPLETE = '<div class="componentheading">Registration Complete!</div><br />You may now login.';
	var $_REG_COMPLETE_ACTIVATE = '<div class="componentheading">Registration Complete!</div><br />Your account has been created and activation link has been sent to the e-mail address you entered. Note that you must activate the account by clicking on the activation link when you get the e-mail before you can login.';
	var $_DATE_FORMAT_LC = '%A, %d %B %Y';
	var $_LAST_UPDATED = 'Last Updated';
	var $_NOT_AUTH = 'You are not authorized to view this resource.';
	var $_DO_LOGIN = 'You need to login.';
	var $_VALID_AZ09 = 'Please enter a valid %s.  No spaces, more than %d characters and contain 0-9,a-z,A-Z';
	var $_CMN_PUBLISHED = 'ເຜີຍແຜ່';
	var $_CMN_UNPUBLISHED = 'ບໍ່ເຜີຍແຜ່';
	var $_MORE = 'ເພິ່ມເຕິມ... ';
	var $_EMPTY_CATEGORY = 'This Category is currently empty.';
	var $_BUTTON_LOGOUT = 'ອອກຈາກລະບົບ';
	var $_NO_ACCOUNT = 'No account yet?';
	var $_CREATE_ACCOUNT = 'Register';
	var $_REGWARN_PASS = 'Please enter a valid password.  No spaces, more than 6 characters and contain 0-9,a-z,A-Z';
	var $_REGWARN_VPASS1 = 'Please verify the password.';
	var $_REGWARN_VPASS2 = 'Password and verification do not match, please try again.';
	var $_USEND_MSG_ACTIVATE = 'Hello %s,

Thank you for registering at %s. Your account is created and must be activated before you can use it.
To activate the account click on the following link or copy-paste it in your browser:
%s

After activation you may login to %s using the following username and password:

Username - %s
Password - %s';
	var $_USEND_MSG = 'Hello %s,

Thank you for registering at %s.

You may now login to %s using the username and password you registered with.';
	var $_PROMPT_PASSWORD = 'Lost your Password?';
	var $_HI = 'Hi';
	var $_NEW_USER_MESSAGE_SUBJECT = 'New User Details';
	var $_NEW_USER_MESSAGE = 'Hello %s,


You have been added as a user to %s by an Administrator.

This email contains your username and password to log into the %s

Username - %s
Password - %s


Please do not respond to this message as it is automatically generated and is for information purposes only';
	var $_REMEMBER_ME = 'Remember me';
	var $_REGISTER_TITLE = 'Registration';
	var $_JAN = 'January';
	var $_FEB = 'February';
	var $_MAR = 'March';
	var $_APR = 'April';
	var $_MAY = 'May';
	var $_JUN = 'June';
	var $_JUL = 'July';
	var $_AUG = 'August';
	var $_SEP = 'September';
	var $_OCT = 'October';
	var $_NOV = 'November';
	var $_DEC = 'December';
	var $_PHPSHOP_CSV_VERSION = '0.7';
	var $_PHPSHOP_CSV_ABOUT = 'About';
	var $_PHPSHOP_CSV_PRICE_LIST_ONLY = 'Price list upload only';
	var $_PHPSHOP_CSV_MULTIPLE_PRICES_UPLOAD = 'Multiple prices upload';
	var $_PHPSHOP_CSV_IMPORT_CONFIG_CSV_FILE = 'Use column headers as configuration';
	var $_PHPSHOP_CSV_COLLECT_DEBUG_INFO = 'Collect debug information';
	var $_PHPSHOP_CSV_SHOW_PREVIEW = 'Show preview';
	var $_PHPSHOP_CSV_REGULAR_UPLOAD = 'Regular upload';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_UPLOAD = 'Product type upload';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_PARAMETERS_UPLOAD = 'Product type parameters upload';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_XREF_UPLOAD = 'Product type cross reference upload';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_DETAIL_UPLOAD = 'Product type detail upload';
	var $_PHPSHOP_CSV_EMPTY_DATABASE = 'Empty database';
	var $_PHPSHOP_CSV_CONTINUE_UPLOAD = 'Continue upload';
	var $_PHPSHOP_CSV_CANCEL_UPLOAD = 'Cancel upload';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION = '<span style="color: #FF0000; font-size: 1.2em;">Steps to upload a CSV file</span>
										<ol>
										<li>Create a product list as a CSV file either with or without column headers.
										<br />Recommended is to use the text delimiter ~ (tilde) and the field delimiter ^ (caret).
										<br /><span style="font-weight: bold;">Example File:</span><br />
										<div class="quote" style="width:600px;overflow:scroll;"><pre>~G01~^~Hand Shovel~^~Hand Tools~^~4.99000~^~<p>Nice hand shovel to dig with in the yard.</p>~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5\~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~8d886c5855770cc01a3b8a2db57f6600.jpg~^~cca3cd5db813ee6badf6a3598832f2fc.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~10~^~1072911600~^~1~^~1~^~2~^~0~^~G01~^~~^~~^~Color::1|Size::2~^~~
~G02~^~Ladder~^~Garden Tools~^~49.99000~^~A really long ladder to reach high places.~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5\~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~ffd5d5ace2840232c8c32de59553cd8d.jpg~^~8cb8d644ef299639b7eab25829d13dbc.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~76~^~1072911600~^~0~^~1~^~2~^~0~^~G02~^~~^~~^~Material::1~^~~
~G03~^~Shovel~^~Garden Tools~^~24.99000~^~Nice shovel.  You can dig your way to China with this one.~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5\~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~8147a3a9666aec0296525dbd81f9705e.jpg~^~520efefd6d7977f91b16fac1149c7438.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~32~^~1072911600~^~0~^~1~^~2~^~0~^~G03~^~Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00]~^~~^~~^~~</pre></div></li>
										<li>Setup the fields on the "Configuration" tab in the same order as the CSV file. The fields must match the exact place in the CSV file.
										<br />E.g. product_sku, product_desc, product_price, category_path<br />
										<br /><span style="font-weight: bold;">Minimum required information to add a product is:</span><br />
										product_sku<br />
										product_name<br />
										category_path<br />
										<br /><span style="font-weight: bold;">category_path</span> is a slash delimited string which begins
										with a top-level category and follows with sub-categories, e.g. <br />
										<div class="quote">category/sub-category_1/sub_category_2</div>
										<br />
										When the product has to be assigned to more than one category, you can
										provide all categories,<br />
										delimited by a <span style="font-weight: bold;">|</span>
										<div class="quote">Category/Sub-category_1/Sub_category_2|Category2/Subcategory22|Category3/Subcategory33</div>
										</li>
										<li>Choose the delimiters on the "Import/Export" tab.</li>
										<li>Choose the upload settings on the "Import/Export" tab.</li>
										<li>Choose either to upload the file from your local computer (Submit CSV File) or to use a local file (Load CSV File from Server).</li>
										<li>The import starts.</li>
										</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_PRODUCT_TYPES = '<span style="color: #FF0000; font-size: 1.2em;">Product Types</span><br /><br />
													To add product types, you need 4 CSV files. Each CSV file represents a part of the product type.
													<ul>
													<li><span style="font-weight: bold;">Product types</span><br />
													This CSV file contains the main product types and should look like this:
													<table border="1">
													<tr style="border: 1px solid #000000;"><td>product_type_name</td><td>product_type_description</td><td>product_type_publish</td><td>product_type_browsepage</td><td>product_type_flypage</td></tr>
													<tr><td>Music track</td><td>Track</td><td>Y</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													<tr><td>Music album</td><td>Album</td><td>Y</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													<tr><td>Music artist</td><td>Artist</td><td>Y</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													</table>
													</li><br />
													<li><span style="font-weight: bold;">Product type parameters</span><br />
													This CSV file contains the parameters per product type and should look like this:
													<div style="width: 50%; overflow: auto; height: 100px;">
													<table border="1">
													<tr><td>product_type_name</td><td>product_type_parameter_name</td><td>product_type_parameter_label</td><td>product_type_parameter_description</td><td>product_type_parameter_list_order</td><td>product_type_parameter_type</td><td>product_type_parameter_values</td><td>product_type_parameter_multiselect</td><td>product_type_parameter_default</td><td>product_type_parameter_unit</td></tr>
													<tr><td>Music artist</td><td>Name</td><td>Name</td><td>Artist Name</td><td>1</td><td>I</td><td>&nbsp;</td><td>N</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													<tr><td>Music artist</td><td>Birth</td><td>Birth</td><td>Artist Birth</td><td>2</td><td>D</td><td>&nbsp;</td><td>N</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													<tr><td>Music album</td><td>Duration</td><td>Duration</td><td>Duration of album</td><td>3</td><td>M</td><td>00:01:00;00:02:00;00:03:00</td><td>Y</td><td>00:02:00</td><td>minutes</td></tr>
													</table>
													</div>
													<br />
													The product type parameter type can have several values, they are:
													<ul>
													<li>I: Integer</li>
													<li>T: Text</li>
													<li>S: Short Text</li>
													<li>F: Float</li>
													<li>C: Char</li>
													<li>D: Date & Time</li>
													<li>M: Time</li>
													<li>V: Multiple Values</li>
													<li>B: Break Line</li>
													</ul>
													</li><br />
													<li><span style="font-weight: bold;">Items per product type name</span><br />
													This CSV file contains the details per product type parameter name and should look like this:
													<table border="1">
													<tr><td>product_sku</td><td>product_type_name</td><td>product_type_parameter_namex</td><td>product_type_parameter_namex</td></tr>
													<tr><td>1234</td><td>Music artist</td><td>Singing Star</td><td>1975</td></tr>
													<tr><td>5678</td><td>Music artist</td><td>Rocking Band</td><td>1980</td></tr>
													</table><br />
													Per product type name you need a seperate CSV file. The reason for this is that the column names for each CSV file is different because of the set of product type parameters.
													</li><br />
													<li><span style="font-weight: bold;">Product type cross reference to product SKU</span><br />
													This CSV file contains the link between a product type and a product SKU and should look like this:
													<table border="1">
													<tr><td>product_sku</td><td>product_type_name</td></tr>
													<tr><td>1234</td><td>Music artist</td></tr>
													<tr><td>5678</td><td>Music artist</td></tr>
													</table>
													</li>
													</ul><br />
													Procedure:<br />
													<ol>
													<li>Upload Product Types CSV file</li>
													<li>Upload Product Type Parameters CSV file</li>
													<li>Upload Product Type Items CSV file</li>
													<li>Upload Product Type Cross Reference CSV file</li>
													</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_EMPTY_DATABASE = '<span style="color: #FF0000; font-size: 1.2em;">Empty Database</span><br /><br />
													 <span style="color: #FF0000; font-size: 2em;">USE WITH CAUTION !!! NO RESTORE !!!</span><br /><br />
													 Emptying the database will remove ALL data in your database from the following tables:
													 <ul>
													 <li>products</li>
													 <li>products</li>
													 <li>product_price</li>
													 <li>product_mf_xref</li>
													 <li>product_attribute</li>
													 <li>category</li>
													 <li>category_xref</li>
													 <li>product_attribute_sku</li>
													 <li>product_category_xref</li>
													 <li>product_discount</li>
													 <li>product_type</li>
													 <li>product_type_parameter</li>
													 <li>product_product_type_xref</li>
													 </ul>
													 All but the first manufacturer is removed:
													 <ul>
													 <li>manufacturer</li>
													 </ul>
													 The following tables are completely deleted:
													 <ul>
													 <li>product_type_x</li>
													 </ul>
													 The x represents the number of the table. This number relates to the product types that are in the system. Since the product types table is completely emptied, these tables are removed. Uploading new product types will recreate the tables.<br /><br />
													 Procedure:
													 <ol>
													 <li>Choose "Empty Database" from the dropdown on the Upload Settings</li>
													 <li>Check "Collect debug information" if you want additional result information</li>
													 <li>Click "Submit CSV File" or "Load CSV File from Server". No need to enter a filename.</li>
													 <li>You are asked if you are sure you want to empty your database. Click OK if you are sure otherwise click Cancel</li>
													 <li>The database is now emptied or you are returned to the main screen depending on your previous choice</li>
													 </ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_MULTIPLE_PRICES_UPLOAD = '<span style="color: #FF0000; font-size: 1.2em;">Multiple prices upload</span><br /><br />
														    Procedure:
														    <ol>
														    <li>Create a CSV file that contains the following fields:
														    	<ul>
															<li>product_sku</li>
															<li>product_price</li>
															<li>product_currency</li>
															<li>price_quantity_start</li>
															<li>price_quantity_end</li>
															<li>price_delete</li>
															</ul>
														    See the Available Fields tab for what information each field contains. If you want to use the column headers as configuration, fill the first line with the column headers name.
														    </li>
														    <li>Either set the configuration fields, as mentioned in point 1 on the Configuration tab or if you added column headers to your CSV file, select "Use column headers as configuration" at the Upload Settings.
														    </li>
														    <li>Select "Multiple Prices Upload" at the Upload Settings</li>
														    <li>Optionally, choose "Show preview" and/or "Collect debug information"</li>
														    <li>Select a file to upload or to load from directory</li>
														    <li>Select "Submit CSV File" or "Load CSV File from Server" depending if you are uploading a file or loading a file from a directory</li>
														    <li>The prices will now be imported</li>
														    </ol><br /><br />
														    <span style="font-weight: bold;">Price delete</span><br />
														    Using the multiple prices import it is also possible to delete prices. A price is deleted when the following fields in the CSV file match the data in the database:
														    <ul>
														    <li>product_sku</li>
														    <li>product_price</li>
														    <li>product_currency</li>
														    <li>price_quantity_start</li>
														    <li>price_quantity_end</li>
														    </ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PRICE = 'The price for a product without currency denominator.<br /><br />Usage:<ol><li>Select the name "product_price" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a price value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LENGTH = 'The length of the product.<br /><br />Usage:<ol><li>Select the name "product_length" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a numeric value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LWH_UOM = 'The measurement of length, width and height of the product.This can be inches, centimeters, etc.<br /><br />Usage:<ol><li>Select the name "product_lwh_uom" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT = 'The weight of the product.<br /><br />Usage:<ol><li>Select the name "product_weight" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a numeric value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT_UOM = 'The measurement of weight of the product.This can be pounds, kilo, etc.<br /><br />Usage:<ol><li>Select the name "product_weight_uom" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTES = 'Attributes are part of a product and are used by the child products to give them specifications.<br />Usage:<ol><li>Select the name "attributes" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the attributes text.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.<br />The values must be seperated by a pipe symbol (|). E.g.: attribute_name::list_order|attribute_name::list_order</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE_VALUES = 'Attribute values are the values of child products that are linked to the attributes of the parent product.<br />Usage:<ol><li>Select the name "custom_attribute" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the attribute value text.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.<br />The values must be seperated by a pipe symbol (|). E.g.: attribute_name::attribute_value|attribute_name::attribute_value</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_START = 'The day the discount for a product starts. For more information see "product_discount".<br /><br />Usage:<ol><li>Select the name "product_discount_date_start" from the dropdown menu on the configuration screen.</li><li>Add the chosen columns to your CSV file with the date value.</li></ol><br />Values:<ul><li>product_discount_date_start</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_END = 'The day the discount for a product ends. For more information see "product_discount".<br /><br />Usage:<ol><li>Select the name "product_discount_date_end" from the dropdown menu on the configuration screen.</li><li>Add the chosen columns to your CSV file with the date value.</li></ol><br />Values:<ul><li>product_discount_date_end</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_UPLOAD_SETTINGS = '<ul><li><span style="font-weight: bold;">Skip first line</span><br />If the CSV file has a header line at the beginning, choose this option to skip that line. This prevents the header from being added to your database.</li><li><span style="font-weight: bold;">Overwrite existing data</span><br />When adding new products to your database, unchecking this option prevents any existing data to be replaced for products that already exist in your database. Default is to update product data.</li><li><span style="font-weight: bold;">Skip default value</span><br />On the configuration page, a default value can be specified in case the field is empty in the CSV file. Enabling this option, the import will not include the field for updating if there is no value in the CSV file.</li><li><span style="font-weight: bold;">Price list upload only</span><br />The Price list upload only is to be used if you are updating the prices of your products. The layout of the CSV is expected to be 2 columns:<ol><li>product_sku</span></li><li>product_price</li></ol></li>Please note that it does NOT take into account the settings on the configuration page.<li><span style="font-weight: bold;">Use column headers as configuration</span><br />If the CSV file has column headers on the first line, this option can be used to use the column headers as the current configuration. The column headers should match one of the column names defined on the Available Fields Tab. This configuration is on a per use basis, nothing is saved. Default values cannot be used with this option.</li><li><span style="font-weight: bold;">Show preview</span><br />Shows a 5 line preview of the file to be imported. The import can then be either cancelled or continued.</li><li><span style="font-weight: bold;">Collect debug information</span><br />In case of problems, use this option to see what happens during the import. At the end of the import a report will be generated with the steps and queries done during the import.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_NAME = 'The name of the manufacturer that is related to the product. This is used in combination with the manufacturer ID. If no manufacturer ID is specified, only the name is checked. New manufacturers will be created with incremental IDs. The process of adding/updating manufacturers follows the following guidelines:<ol><li>Name exists, ID exists --> ID is updated if different</li><li>Name exists, ID does not exist --> New manufacturer created with increment ID</li><li>Name does not exist, ID exists --> Generic name added with existing ID</li><li>Name does not exist, ID does not exist --> Do nothing</li></ol>Usage:<ol><li>Select the name "manufacturer_name" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the manufacturer name.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_ID = 'The ID of the manufacturer that is related to the product and must be unique. This is used in combination with the manufacturer name. If no manufacturer name is specified, only the product manufacturer link will be added/updated. Adding/updating manufacturers follows the following process:<ol><li>Name exists, ID exists --> ID is updated if different</li><li>Name exists, ID does not exist --> New manufacturer created with increment ID</li><li>Name does not exist, ID exists --> Generic name added with existing ID</li><li>Name does not exist, ID does not exist --> Do nothing</li></ol>When no name or ID exists nothing is done to prevent numerous generic name manufacturers from being added.<br /><br />Usage:<ol><li>Select the name "manufacturer_id" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the manufacturer ID.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_URL = 'A URL to either a picture or webpage of the product. When linked to a picture, the picture will be shown on the product details page.<br /><br />Usage:<ol><li>Select the name "product_url" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SALES = 'The number of products that have been sold.<br /><br />Usage:<ol><li>Select the name "product_sales" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a numeric value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SPECIAL = 'When a product is set to be "On Special" it will be featured in the Featured Products block.<br />Usage:<ol><li>Select the name "product_special" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the value Y.</li></ol><br />Values:<ul><li>Y: Yes, the product is on special</li><li>N: No, the product is not on special</li><li>Empty: Empty value, the product is not on special</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_UNIT = 'The unit of the product as it is sold. I.e. box, bag, etc.<br />Usage:<ol><li>Select the name "product_unit" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the value Y.</li></ol><br />Values:<ul><li>Text: No HTML allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CATEGORY_PATH = 'Parent products are categorized according to the category path. The category path specifies in which category a product belongs. This only counts for main products not for child products since child products relate to parent products, not to categories. For child products this field must be left empty. The product_parent_sku must be empty for main products since they do not relate to any other parent product.<br /><br />Usage:<ol><li>Select the name "category_path" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the path.</li></ol><br />Values:<ul><li>Text: No HTML allowed<br />The category path must be seperated by a forward slash (/). E.g.: Furniture/Chairs/Teak</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PARENT_SKU = 'The product parent sku is needed to identify the parent of child products. Please note: the "category_path" field MUST be empty otherwise the product will be treated as a parent product.<br />Usage:<ol><li>Select the name "category_path" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the product_sku value of the parent product.</li></ol><br />Values:<ul><li>Numeric</li><li>Letters</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TAX_ID = 'The ID of the tax rate that you want to apply to the product<br />Usage:<ol><li>Select the name "product_tax_id" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the product_tax_id value of the appropiate tax.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_CURRENCY = 'A different currency can be specified on a per product basis.<br />Usage:<ol><li>Select the name "product_currency" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the value of the new currency.</li></ol><br />Values:<ul><li>Text: No HTML allowed<br />E.g.: EUR, USD, IDR</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_BROWSEPAGE = 'This is a custom page to show your product types. Leave this BLANK if you have no individual php-file for it.<br /><br />Usage:<ol><li>Select the name "product_type_browsepage" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\'s are allowed.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_DESCRIPTION = 'A description for your product type.<br /><br />Usage:<ol><li>Select the name "product_type_description" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_FLYPAGE = 'This is a custom page to show your product types. Leave this BLANK if you have no individual php-file for it.<br /><br />Usage:<ol><li>Select the name "product_type_flypage" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\'s are allowed.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_NAME = 'The name of the product type. This name must be unique and without spaces.<br /><br />Usage:<ol><li>Select the name "product_type_name" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DEFAULT = 'A default value to show when there is nothing else filled in for the parameter.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_default" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DESCRIPTION = 'A description for your product type parameter.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_description" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LABEL = 'A label for your product type parameter.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_label" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LIST_ORDER = 'Specify in which order the product parameter is to be displayed.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_list_order" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a numeric value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_MULTISELECT = 'Set to yes to show possible parameter values as multiple select items<br /><br />Usage:<ol><li>Select the name "product_type_parameter_list_multiselect" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the value Y or N.</li></ol><br />Values:<ul><li>Y: Yes, the values are multi select</li><li>N: No, the values are not multi select</li><li>Empty: Empty value, the values are not multi select</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_NAME = 'The name of the product type parameter. This name must be unique and without spaces as it will be the column name for the parameter details.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_type" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_TYPE = 'This sets the type of parameter that will be used. There are a number of different values that can be used.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_type" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the value.</li></ol><br />Values:<ul><li>Text:<ul>
													<li>I: Integer</li>
													<li>T: Text</li>
													<li>S: Short Text</li>
													<li>F: Float</li>
													<li>C: Char</li>
													<li>D: Date & Time</li>
													<li>M: Time</li>
													<li>V: Multiple Values</li>
													<li>B: Break Line</li>
													</ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_UNIT = 'The unit the product type parameter refers to.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_unit" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_VALUES = 'These are the values for the parameter and have to meet the requirement set by the parameter type.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_values" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>This depends on the type set in the product_type_parameter_type field. All values have to be semi-colon (;) seperated.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PUBLISH = 'The status if a product type is published or not.<br /><br />Usage:<ol><li>Select the name "product_type_publish" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Y: Yes, the product type is published</li><li>N: No, the product type is not published</li><li>Empty: Empty value, the product type is published.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_DELETE = 'The price_delete field is a special field. This field is used to determine if a price for a product should be deleted or not. This field is used when doing a multiple price upload. Before a price is deleted it needs to match the following fields:<ul><li>product_sku</li><li>product_price</li><li>product_currency</li><li>price_quantity_start</li><li>price_quantity_end</li></ul><br />Usage:<ol><li>Select the name "price_delete" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the value Y. If the field contains any other value, the product will not be deleted.</li></ol><br />Values:<ul><li>Y: Yes, the price is to be deleted</li><li>N: No, the price is not to be deleted</li><li>Empty: Empty value, the price is not to be deleted</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_START = 'The quantity at which the mentioned price is available.<br /><br />Usage:<ol><li>Select the name "price_quantity_start" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a numeric value.</li></ol><br />Values: Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_END = 'The quantity at which the mentioned price is no longer available.<br /><br />Usage:<ol><li>Select the name "price_quantity_end" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a numeric value.</li></ol><br />Values: Numeric</li></ul>';
	var $_VM_UPDATE_STATUS = 'Update Status';
	var $_PRODUCT_WAITING_LIST_EMAIL_SUBJECT = '%s Has Arrived!';
	var $_PRODUCT_WAITING_LIST_EMAIL_TEXT = 'Thank you for your patience.

Our %s  is now in stock and can be purchased by following this link:
%s
        
 This is a one time notice, you will not receive this e-mail again.';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_EXTRA = 'Payment Extra Info';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_EXTRA_TIP = 'Is shown on the Order Confirmation Page. Can be: HTML Form Code from your Payment Service Provider, Hints to the customer etc.';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CLASSNAME = 'Payment class name (e.g. <strong>ps_netbanx</strong>)';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CLASSNAME_TIP = 'Leave blank if you\'re not sure what to fill in!';
	var $_CMN_PUBLISH = 'Publish';
	var $_CMN_UNPUBLISH = 'Unpublish';
	var $_VM_MENUBAR_PLEASESELECT_PUBLISH = 'Please make a selection from the list to publish';
	var $_VM_MENUBAR_PLEASESELECT_UNPUBLISH = 'Please make a selection from the list to unpublish';
	var $_VM_MENUBAR_PLEASESELECT_DELETE = 'Please make a selection from the list to delete';
	var $_VM_MENUBAR_CONFIRM_DELETE = 'Are you sure you want to delete selected items?';
	var $_VM_MENUBAR_PLEASESELECT_TO = 'Please make a selection from the list to';
	var $_VM_CANADAPOST_SEND_LANGUAGE_CODE = 'EN';
	var $_VM_CANADAPOST_FORM_HANDLING_DATE = 'Expected Date of Arrival';
	var $_VM_CANADAPOST_FORM_HANDLING_LBL = 'Handling Charge';
	var $_VM_SHIPPING_METHOD_CANADAPOST_MERCHANT_CPCID = 'Canada Post Merchant ID';
	var $_VM_SHIPPING_METHOD_CANADAPOST_MERCHANT_CPCID_EXPLAIN = 'Your Canada Post Merchant ID';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_SERVER = 'Canada Post Server IP';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_SERVER_EXPLAIN = 'This is the Canada Post Server IP Address - default is 206.191.4.228';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_PORT = 'Canada Post Server Port';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_PORT_EXPLAIN = 'This is the Canada Post Server Port<br /> The server port must be 30000<br /> If you cannot use this port, you will not be able to use this module<br /> check with your hosting company to see if you can access this port first';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_FEDERAL_TAX = 'Canada Post Federal Tax Amount';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_FEDERAL_TAX_EXPLAIN = 'Federal Tax Amount goes here';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_PROVINCIAL_TAX = 'Canada Post Provincal Tax Amount';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_PROVINCIAL_TAX_EXPLAIN = 'Provincal Tax Amount goes here';
	var $_VM_SHIPPING_METHOD_CANADAPOST_ARRIVAL_DATE_EXPLAIN = 'Arrival Date Description';
	var $_VM_SHIPPING_METHOD_CANADAPOST_ARRIVAL_DATE_EXPLAIN_I = 'Description for Arrival Dates';
	var $_VM_SHIPPING_METHOD_CANADAPOST_HANDLING_CHARGE_EXPLAIN = 'Handling Charge Description';
	var $_VM_SHIPPING_METHOD_CANADAPOST_HANDLING_CHARGE_EXPLAIN_I = 'Description for Handling Carges';
        
}
class phpShopLanguage extends vmLanguage { }

/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>