<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
*
* @version $Id$
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
	var $_PHPSHOP_MENU = '�����';
	var $_PHPSHOP_CATEGORY = '���������';
	var $_PHPSHOP_CATEGORIES = '����������';
	var $_PHPSHOP_SELECT_CATEGORY = 'Select a Category:';
	var $_PHPSHOP_ADMIN = '����������';
	var $_PHPSHOP_PRODUCT = '������';
	var $_PHPSHOP_LIST = '��������';
	var $_PHPSHOP_ALL = '����';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = '�������� ��� �� ��������';
	var $_PHPSHOP_VIEW = '����������';
	var $_PHPSHOP_SHOW = '��������';
	var $_PHPSHOP_ADD = '��������';
	var $_PHPSHOP_UPDATE = '���������';
	var $_PHPSHOP_DELETE = '��������';
	var $_PHPSHOP_SELECT = '�������';
	var $_PHPSHOP_SUBMIT = 'Submit';
	var $_PHPSHOP_RANDOM = '������ ��������';
	var $_PHPSHOP_LATEST = '��������� ��������';
	var $_PHPSHOP_HOME_TITLE = '������';
	var $_PHPSHOP_CART_TITLE = '������';
	var $_PHPSHOP_CHECKOUT_TITLE = '������';
	var $_PHPSHOP_LOGIN_TITLE = '�������';
	var $_PHPSHOP_LOGOUT_TITLE = '������';
	var $_PHPSHOP_BROWSE_TITLE = '����������';
	var $_PHPSHOP_SEARCH_TITLE = '���������';
	var $_PHPSHOP_ACCOUNT_TITLE = '��������� �����������';
	var $_PHPSHOP_NAVIGATION_TITLE = '��������';
	var $_PHPSHOP_DEPARTMENT_TITLE = '�����';
	var $_PHPSHOP_INFO = '�����������';
	var $_PHPSHOP_BROWSE_LBL = '��������� ��������� OKE HELLAS';
	var $_PHPSHOP_PRODUCTS_LBL = '��������';
	var $_PHPSHOP_PRODUCT_LBL = '������';
	var $_PHPSHOP_SEARCH_LBL = '���������';
	var $_PHPSHOP_FLYPAGE_LBL = '������������ ���������';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = '��������� ���������';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = '����� ���������';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = '��������� ���������';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = '��������� ���������';
	var $_PHPSHOP_CART_SHOW = '�������� ��������';
	var $_PHPSHOP_CART_ADD_TO = '�������� ��� ������';
	var $_PHPSHOP_CART_NAME = '�����';
	var $_PHPSHOP_CART_SKU = '������� - SKU';
	var $_PHPSHOP_CART_PRICE = '����';
	var $_PHPSHOP_CART_QUANTITY = '��������';
	var $_PHPSHOP_CART_SUBTOTAL = '������ ������';
	var $_PHPSHOP_ADD_SHIPTO_1 = '�������� ����';
	var $_PHPSHOP_ADD_SHIPTO_2 = '��������� ���������';
	var $_PHPSHOP_NO_SEARCH_RESULT = '� ��������� ��� ��� ���� ������ ����������.<BR>';
	var $_PHPSHOP_PRICE_LABEL = '����: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = '����������';
	var $_PHPSHOP_NO_CUSTOMER = '��������, ���� ��� ����� ����� ������������� �������. ����������� ����� ��� ��� ����������� �������.';
	var $_PHPSHOP_DELETE_MSG = '����� ������� ��� �� �������� ��� �������� �����;';
	var $_PHPSHOP_THANKYOU = '��� ������������ ��� ��� ���������� ���.';
	var $_PHPSHOP_NOT_SHIPPED = '��� ���� ��������� �����';
	var $_PHPSHOP_EMAIL_SENDTO = '��� e-mail ������������, �������� ����';
	var $_PHPSHOP_NO_USER_TO_SELECT = '��������, ��� ������� ������� ��� site ��� �� ����������
    �� ���������� ����� ������� ��� ������������';
	var $_PHPSHOP_ERROR = '������';
	var $_PHPSHOP_MOD_NOT_REG = '�� module ��� ���� ����������.';
	var $_PHPSHOP_MOD_ISNO_REG = '��� ����� ��� ������ module ��� phpShop.';
	var $_PHPSHOP_MOD_NO_AUTH = '��� ����� �������� ��������� ��� ����� ��� ��������.';
	var $_PHPSHOP_PAGE_404_1 = '� ������ ��� �������';
	var $_PHPSHOP_PAGE_404_2 = '�� ����� ������� ��� ������ ��� �������. ���� ������� � ������
    ��� �������:';
	var $_PHPSHOP_PAGE_403 = '�������� ���������� ���������';
	var $_PHPSHOP_FUNC_NO_EXEC = '��� ����� �������� ��������� ';
	var $_PHPSHOP_FUNC_NOT_REG = '� ��������� ��� ����� ��������������';
	var $_PHPSHOP_FUNC_ISNO_REG = ' ��� ����� ������ MOS_com_phpShop ���������.';
	var $_PHPSHOP_ADMIN_MOD = '������������';
	var $_PHPSHOP_USER_LIST_MNU = '�������� �������';
	var $_PHPSHOP_USER_LIST_LBL = '����� �������';
	var $_PHPSHOP_USER_LIST_USERNAME = '����� ������';
	var $_PHPSHOP_USER_LIST_FULL_NAME = '������ �����';
	var $_PHPSHOP_USER_LIST_GROUP = '�����';
	var $_PHPSHOP_USER_FORM_MNU = '�������� ������';
	var $_PHPSHOP_USER_FORM_LBL = '��������/��������� �������� ������';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = '�������� �������';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = '��������� ���������';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = '�������� ����������';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'No shipping addresses.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = '������������� ����������';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = '�����';
	var $_PHPSHOP_USER_FORM_LAST_NAME = '�������';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = '����� ������';
	var $_PHPSHOP_USER_FORM_TITLE = '������';
	var $_PHPSHOP_USER_FORM_USERNAME = '���������';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = '�������';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = '����������� �������';
	var $_PHPSHOP_USER_FORM_PERMS = '����������';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Customer Number / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = '�������� ���������';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = '��������� 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = '��������� 2';
	var $_PHPSHOP_USER_FORM_CITY = '����';
	var $_PHPSHOP_USER_FORM_STATE = '�������/�����';
	var $_PHPSHOP_USER_FORM_ZIP = '���. �������';
	var $_PHPSHOP_USER_FORM_COUNTRY = '����';
	var $_PHPSHOP_USER_FORM_PHONE = '���.';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Mobile Phone';
	var $_PHPSHOP_USER_FORM_FAX = 'Fax';
	var $_PHPSHOP_USER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_MODULE_LIST_MNU = '��������  Modules';
	var $_PHPSHOP_MODULE_LIST_LBL = '����� Module';
	var $_PHPSHOP_MODULE_LIST_NAME = '����� Module';
	var $_PHPSHOP_MODULE_LIST_PERMS = '���������� Module';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = '�����������';
	var $_PHPSHOP_MODULE_LIST_ORDER = '����� �����������';
	var $_PHPSHOP_MODULE_FORM_MNU = '�������� Module';
	var $_PHPSHOP_MODULE_FORM_LBL = '����������� Module';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = '������� Module (���  ������ �����)';
	var $_PHPSHOP_MODULE_FORM_NAME = '����� Module';
	var $_PHPSHOP_MODULE_FORM_PERMS = '���������� Module';
	var $_PHPSHOP_MODULE_FORM_HEADER = '����������� Module';
	var $_PHPSHOP_MODULE_FORM_FOOTER = '��������� Module';
	var $_PHPSHOP_MODULE_FORM_MENU = '�������� Module ��� ����� �����������;';
	var $_PHPSHOP_MODULE_FORM_ORDER = '����� ���������';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = '��������� Module';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = '������� �������';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = '������ �������';
	var $_PHPSHOP_FUNCTION_LIST_MNU = '�������� Functions';
	var $_PHPSHOP_FUNCTION_LIST_LBL = '����� Function';
	var $_PHPSHOP_FUNCTION_LIST_NAME = '����� Function';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = '����� Class';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Class Method';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = '����������';
	var $_PHPSHOP_FUNCTION_FORM_MNU = '�������� Function';
	var $_PHPSHOP_FUNCTION_FORM_LBL = '����������� Function';
	var $_PHPSHOP_FUNCTION_FORM_NAME = '����� Function';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = '����� Class';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Class Method';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = '���������� Function';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = '��������� Function';
	var $_PHPSHOP_CURRENCY_LIST_MNU = '�������� ����������';
	var $_PHPSHOP_CURRENCY_LIST_LBL = '����� ����������';
	var $_PHPSHOP_CURRENCY_LIST_ADD = '�������� ����������';
	var $_PHPSHOP_CURRENCY_LIST_NAME = '����� ����������';
	var $_PHPSHOP_CURRENCY_LIST_CODE = '������� ����������';
	var $_PHPSHOP_COUNTRY_LIST_MNU = '�������� �����';
	var $_PHPSHOP_COUNTRY_LIST_LBL = '����� �����';
	var $_PHPSHOP_COUNTRY_LIST_ADD = '�������� �����';
	var $_PHPSHOP_COUNTRY_LIST_NAME = '����� �����';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = '������� ����� (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = '������� ����� (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'List State';
	var $_PHPSHOP_STATE_LIST_LBL = 'State List for: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Add/Update a State';
	var $_PHPSHOP_STATE_LIST_NAME = 'State Name';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'State Code (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'State Code (2)';
	var $_PHPSHOP_ADDRESS = '���������';
	var $_PHPSHOP_CONTINUE = '��������';
	var $_PHPSHOP_EMPTY_CART = '�� ������ ��� ����� �����.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Ping InterShipper Server';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'InterShipper-Server Ping ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'InterShipper Ping Failed';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'InterShipper Ping Successful';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Carrier';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = '������<BR>������������';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = '����.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = '�������� ������� ���������';
	var $_PHPSHOP_ISSHIP_LIST_LBL = '������� ������� ���������';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = '������� ���������';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = '�������';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = '����� �������������';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = '������������ ������';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = '������� ������';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = '�������';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = '������';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = '����� ������';
	var $_PHPSHOP_ISSHIP_FORM_MNU = '���������� ������� ���������';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = '�������� ������� ���������';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = '������� ������� ���������';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = '��������';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = '������� ���������';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = '������������';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = '����� �������������';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = '������������ ������';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = '������� ������';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = '�������';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = '������';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = '����� ������';
	var $_PHPSHOP_ORDER_MOD = '�����������';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = '����������� �����������';
	var $_PHPSHOP_ORDER_CANCEL_MNU = '������� �����������';
	var $_PHPSHOP_ORDER_PRINT_MNU = '�������� �����������';
	var $_PHPSHOP_ORDER_DELETE_MNU = '�������� �����������';
	var $_PHPSHOP_ORDER_LIST_MNU = '�������� �����������';
	var $_PHPSHOP_ORDER_LIST_LBL = '����� �����������';
	var $_PHPSHOP_ORDER_LIST_ID = '������� �����������';
	var $_PHPSHOP_ORDER_LIST_CDATE = '���������� �����������';
	var $_PHPSHOP_ORDER_LIST_MDATE = '������. ������';
	var $_PHPSHOP_ORDER_LIST_STATUS = '���������';
	var $_PHPSHOP_ORDER_LIST_TOTAL = '������ ������';
	var $_PHPSHOP_ORDER_ITEM = '���� �����������';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = '������ ������';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = '������� �����������';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = '���������� �����������';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = '��������� �����������';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = '����������� ������';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = '����������� �������';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = '����������� ���������';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = '�� ������';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = '�������� ����';
	var $_PHPSHOP_ORDER_PRINT_NAME = '�����';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = '��������';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = '��������� 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = '��������� 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = '����';
	var $_PHPSHOP_ORDER_PRINT_STATE = '�������/�����';
	var $_PHPSHOP_ORDER_PRINT_ZIP = '���. �������';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = '����';
	var $_PHPSHOP_ORDER_PRINT_PHONE = '���.';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Fax';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'Email';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Order Items';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = '��������';
	var $_PHPSHOP_ORDER_PRINT_QTY = '���.';
	var $_PHPSHOP_ORDER_PRINT_SKU = '���. ��. (SKU)';
	var $_PHPSHOP_ORDER_PRINT_PRICE = '����';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = '������';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = '������ ������';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = '������ �����';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = '����� ��������� ��� �����������';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = '����� ���������';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = '������ ��������';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = '����� �����������';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = '������� �����������';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = '����. �����';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = '�������� ��������';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = '�������� ���������';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = '�������� ��������';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = '����������';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = '������� ���������';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = '���������� ���������';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = '���� ���������';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = '�������� ����������� �����������';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = '�������� ���������� �����������';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = '������� ���������� �����������';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = '����� ���������� �����������';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = '��������� �����������';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = '������� ���������� �����������';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = '����� ���������� �����������';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = '�������� �����������';
	var $_PHPSHOP_PRODUCT_MOD = '��������';
	var $_PHPSHOP_CURRENT_PRODUCT = '������ ������';
	var $_PHPSHOP_CURRENT_ITEM = '������ �����';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = '������� ���������';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = '�������� ��������';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = '����';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = '�������';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = '�����';
	var $_PHPSHOP_PRODUCT_LIST_MNU = '�������� ���������';
	var $_PHPSHOP_PRODUCT_LIST_LBL = '����� ���������';
	var $_PHPSHOP_PRODUCT_LIST_NAME = '����� ���������';
	var $_PHPSHOP_PRODUCT_LIST_SKU = '������� - SKU';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = '����������';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Search Product';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'modyfied';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'with price modyfied';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'without price';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'After';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Before';
	var $_PHPSHOP_PRODUCT_FORM_MNU = '�������� ���������';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = '����������� ���������';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = '������������� ������� ��������� ��� ���������';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = '�������� ������';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = '�������� �� ���� �����';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = '��� ������';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = '��������� ���������';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = '������������ ���������';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = '��������� ���������';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = '���������� ��� ����� ���������';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = '������� ���������';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = '��� �����';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = '��������� ������';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = '����������� ������';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = '��������� ������';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = '���������� ��� ����� ������';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = '������� ������';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = '��������� ��� ������ ������';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = '��� �� ����������� ��� ������, �������� �� �������� ��� ������� ��� ���� �������..';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = '�������� "none" �� �������� ��� ��������� �������.';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = '���� ���������';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = '�������������� ������';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = '����� ������� ��� �� �������� ��� ���������\\n��� ��� ����� ��� ����������� �� ����;';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = '����� ������� ��� ������ �� ���������� ���� �� �����;';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = '�����������';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Manufacturer';
	var $_PHPSHOP_PRODUCT_FORM_SKU = '������� - SKU';
	var $_PHPSHOP_PRODUCT_FORM_NAME = '�����';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = '���������';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Product Price (Gross)';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Product Price (Net)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = '��������� ������� ���������';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = '������� ���������';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = '���������';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = '�� ����������';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = '������. ��������';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = '�� ��������';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = '����� ��������';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = '����������;';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = '�����';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = '������';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = '����';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = '������ ��������';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = '�����';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = '������ ��������';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = '����� ������';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = '������ ������';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'pounds';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'inches';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Unit';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'piece';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Units in Packaging';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Here you can fill in a number unit in packaging. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Units in Box';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Here you can fill in a number unit in box. (max. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = '������������ ��������� ���������';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = '������������ ���������� ���������';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = '������������ ��������� ������';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = '������������ ���������� ������';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = '����� ������� CSV';
	var $_PHPSHOP_PRODUCT_FOLDERS = '������� ���������';
	var $_PHPSHOP_CATEGORY_LIST_MNU = '�������� ����������';
	var $_PHPSHOP_CATEGORY_LIST_LBL = '������ ����������';
	var $_PHPSHOP_CATEGORY_FORM_MNU = '�������� ����������';
	var $_PHPSHOP_CATEGORY_FORM_LBL = '���������������������';
	var $_PHPSHOP_CATEGORY_FORM_NAME = '����� ����������';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = '������';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = '��������� ����������';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = '����������;';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = '������ ����������';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = '�������� ���������';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = '����� ��������� ���';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = '����� ���������';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = '����� ���������';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = '�������� ���������';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = '����� ���������';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = '��� �������� ��� �� ������';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = '��������� ��������� ��� �� ������';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = '��� �������� ��� �� �����';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = '��������� ��������� ��� �� �����';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = '����� ���������';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = '����� ���������';
	var $_PHPSHOP_PRICE_LIST_MNU = '�������� ����������';
	var $_PHPSHOP_PRICE_LIST_LBL = '������ �����';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = '���� ���';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = '����� ������';
	var $_PHPSHOP_PRICE_LIST_PRICE = '����';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = '�������';
	var $_PHPSHOP_PRICE_FORM_MNU = '�������� �����';
	var $_PHPSHOP_PRICE_FORM_LBL = '�������� �����';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = '��� ���� ��� �� ������';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = '��������� ����� ��� �� ������';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = '��� ���� ��� �� �����';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = '��������� ����� ��� �� �����';
	var $_PHPSHOP_PRICE_FORM_PRICE = '����';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = '�������';
	var $_PHPSHOP_PRICE_FORM_GROUP = '����� ���������';
	var $_PHPSHOP_REPORTBASIC_MOD = '��������';
	var $_PHPSHOP_RB_INDIVIDUAL = '��������� ����������� ���������';
	var $_PHPSHOP_RB_SALE_TITLE = '�������� ��������';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = '���������� �������������� ��������';
	var $_PHPSHOP_RB_INTERVAL_TITLE = '������ �������';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = '��� ����';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = '��� ��������';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = '��� �����';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = '������ �����';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = '������������ �����';
	var $_PHPSHOP_RB_LAST60_BUTTON = '������. 60 ������';
	var $_PHPSHOP_RB_LAST90_BUTTON = '������. 90 ������';
	var $_PHPSHOP_RB_START_DATE_TITLE = '������ ����';
	var $_PHPSHOP_RB_END_DATE_TITLE = '���� ����';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = '�������� ����������� ��������';
	var $_PHPSHOP_RB_REPORT_FOR = '������� ��� ';
	var $_PHPSHOP_RB_DATE = '����������';
	var $_PHPSHOP_RB_ORDERS = '�����������';
	var $_PHPSHOP_RB_TOTAL_ITEMS = '������ ����� ��� ���������';
	var $_PHPSHOP_RB_REVENUE = '�����';
	var $_PHPSHOP_RB_PRODLIST = '�������� ���������';
	var $_PHPSHOP_SHOP_MOD = '���������';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = '����� ������';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = '����';
	var $_PHPSHOP_ORDER_STATUS_P = '��������';
	var $_PHPSHOP_ORDER_STATUS_C = '�������������';
	var $_PHPSHOP_ORDER_STATUS_X = '���������';
	var $_PHPSHOP_ORDER_BUTTON = '����������';
	var $_PHPSHOP_SHOPPER_MOD = '���������';
	var $_PHPSHOP_SHOPPER_LIST_MNU = '�������� ���������';
	var $_PHPSHOP_SHOPPER_LIST_LBL = '����� ���������';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = '����� ������';
	var $_PHPSHOP_SHOPPER_LIST_NAME = '�������������';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = '�����';
	var $_PHPSHOP_SHOPPER_FORM_MNU = '�������� ��������';
	var $_PHPSHOP_SHOPPER_FORM_LBL = '�������� ��������';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = '�������� �������';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = '�����������';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = '�������� ���������';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = '�������� ����������';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = '�������������� ����������';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = '���������';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = '�����';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = '�������';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = '����� ������';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = '������';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = '����� ��������';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = '�������';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = '����������� �������';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = '����� ��������';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = '�������� ���������';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = '��������� 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = '��������� 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = '����';
	var $_PHPSHOP_SHOPPER_FORM_STATE = '�������/ �����';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = '���. �������';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = '����';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = '���.';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Mobile phone';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Fax';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'Email';
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
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = '�������� ������ ���������';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = '����� ������ ���������';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = '����� ������';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = '��������� ������';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = '����� ������ ���������';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = '�������� ������ ���������';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = '����� ������';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = '��������� ������';
	var $_PHPSHOP_STORE_MOD = '���������';
	var $_PHPSHOP_STORE_FORM_MNU = '����������� ������������';
	var $_PHPSHOP_STORE_FORM_LBL = '����������� ������������';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = '�������� ������������';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = '������';
	var $_PHPSHOP_STORE_FORM_UPLOAD = '�������� �������';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = '����� ������������';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = '�������� ��������� ������������';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = '��������� 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = '��������� 2';
	var $_PHPSHOP_STORE_FORM_CITY = '����';
	var $_PHPSHOP_STORE_FORM_STATE = '�������/�����';
	var $_PHPSHOP_STORE_FORM_COUNTRY = '����';
	var $_PHPSHOP_STORE_FORM_ZIP = '���. �������';
	var $_PHPSHOP_STORE_FORM_PHONE = '���.';
	var $_PHPSHOP_STORE_FORM_CURRENCY = '�������';
	var $_PHPSHOP_STORE_FORM_CATEGORY = '��������� ������������';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = '�������';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = '�����';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = '����� ������';
	var $_PHPSHOP_STORE_FORM_TITLE = '������';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = '���. 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = '���. 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Fax';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'Email';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = '�������� �������';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = '���������';
	var $_PHPSHOP_PAYMENT = '�������';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = '�������� ������� ��������';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = '����� ������� ��������';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = '�����';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = '�������';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = '�������';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = '����� ���������';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = '����� ������� ��������';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = '�������� ������ ��������';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = '����� ������ ��������';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = '����� ������ ��������';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = '����� ���������';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = '�������';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = '�������';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = '����� ���������';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = '����� ������� ��������';
	var $_PHPSHOP_TAX_MOD = '�����';
	var $_PHPSHOP_TAX_RATE = '����������� �����';
	var $_PHPSHOP_TAX_LIST_MNU = '�������� ����������� �����';
	var $_PHPSHOP_TAX_LIST_LBL = '����� ����������� �����';
	var $_PHPSHOP_TAX_LIST_STATE = '�������� � ������� �����';
	var $_PHPSHOP_TAX_LIST_COUNTRY = '���� �����';
	var $_PHPSHOP_TAX_LIST_RATE = '����������� �����';
	var $_PHPSHOP_TAX_FORM_MNU = '�������� ���������� �����';
	var $_PHPSHOP_TAX_FORM_LBL = '�������� ������������ �����';
	var $_PHPSHOP_TAX_FORM_STATE = '�������� � ������� �����';
	var $_PHPSHOP_TAX_FORM_COUNTRY = '���� �����';
	var $_PHPSHOP_TAX_FORM_RATE = '����������� �����';
	var $_PHPSHOP_VENDOR_MOD = '�����������';
	var $_PHPSHOP_VENDOR_ADMIN = '�����������';
	var $_PHPSHOP_VENDOR_LIST_MNU = '�������� �����������';
	var $_PHPSHOP_VENDOR_LIST_LBL = '����� �����������';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = '�������� ����������';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = '������������';
	var $_PHPSHOP_VENDOR_FORM_MNU = '�������� ����������';
	var $_PHPSHOP_VENDOR_FORM_LBL = '�������� �����������';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = '�������� ����������';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = '�������� ������������';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = '������';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = '�������� �������';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = '����� ������������ ����������';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = '�������� ��������� ����������';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = '��������� 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = '��������� 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = '����';
	var $_PHPSHOP_VENDOR_FORM_STATE = '�������/�����';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = '����';
	var $_PHPSHOP_VENDOR_FORM_ZIP = '���. �������';
	var $_PHPSHOP_VENDOR_FORM_PHONE = '���.';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = '�������';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = '��������� ����������';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = '�������';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = '�����';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = '����� ������';
	var $_PHPSHOP_VENDOR_FORM_TITLE = '������';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = '���.  1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = '���.  2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Fax';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'Email';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = '�������� �������';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = '���������';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = '�������� ���������� �����������';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = '����� ���������� �����������';
	var $_PHPSHOP_VENDOR_CAT_NAME = '����� ����������';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = '��������� ����������';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = '�����������';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = '�������� ���������� �����������';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = '����� ���������� �����������';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = '����������� ����������';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = '����� ����������';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = '��������� ����������';
	var $_PHPSHOP_MANUFACTURER_MOD = '�������������';
	var $_PHPSHOP_MANUFACTURER_ADMIN = '�������������';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = '�������� �������������';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = '����� �������������';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = '����� ������������';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = '������������';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = '�������� ������������';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = '�������� �����������';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = '����������� ������������';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = '����� ������������';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = '��������� ������������';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'URL ���� site ������������';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = '���������';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = '�������� ���������� ������������';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = '����� ���������� �������������';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = '����� ����������';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = '��������� ����������';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = '�������������';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = '�������� ��������� ������������';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = '����� ���������� ������������';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = '����������� ����������';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = '����� ����������';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = '��������� ����������';
	var $_PHPSHOP_HELP_MOD = '�������';
	var $_PHPSHOP_CART_ACTION = '���������';
	var $_PHPSHOP_CART_UPDATE = '��������� ��������� ��� ������';
	var $_PHPSHOP_CART_DELETE = '�������� ��������� ��� �� ������';
	var $_PHPSHOP_PRODUCT_PRICETAG = '����';
	var $_PHPSHOP_PRODUCT_CALL = '������� ��� ����';
	var $_PHPSHOP_PRODUCT_PREVIOUS = '�����.';
	var $_PHPSHOP_PRODUCT_NEXT = '�������';
	var $_PHPSHOP_CART_TAX = '�����';
	var $_PHPSHOP_CART_SHIPPING = '��������';
	var $_PHPSHOP_CART_TOTAL = '������';
	var $_PHPSHOP_CHECKOUT_NEXT = '�������';
	var $_PHPSHOP_CHECKOUT_REGISTER = '�������';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = '����������� �������';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = '��������';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = '�����';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = '���������';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = '���.';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'Email';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = '����������� ���������';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = '��������';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = '�����';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = '���������';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = '���.';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = '����������� ��������';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = '����� ���� �����';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = '������� ��������';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = '������� ���������� ������';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = '������. �����';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = '���������� �����������';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = '����������� ����������� ���� ��������� ������� ���� ���������� ������';
	var $_PHPSHOP_ZONE_MOD = '����� ���������';
	var $_PHPSHOP_ZONE_LIST_MNU = '�������� �����';
	var $_PHPSHOP_ZONE_FORM_MNU = '�������� �����';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = '������������ �����';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = '����';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = '�������� ����';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = '������������ �� ����';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = '���������';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = '������������ �����';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = '����� �����';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = '��������� �����';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = '������ ����� ��� �����';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = '���� ������� �����';
	var $_PHPSHOP_ZONE_LIST_LBL = '����� �����';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = '����� �����';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = '��������� �����';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = '������ ����� ��� �����';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = '���� ������� �����';
	var $_PHPSHOP_LOGIN_FIRST = '����������� ������ ����� ������ � ����� ���������� ��� site (��������������� �� module �������).<br>��� ������������.';
	var $_PHPSHOP_STORE_FORM_TOS = '���� ������������';
	var $_PHPSHOP_AGREE_TO_TOS = '����������� ����������� ����� �� ���� ����� ������������.';
	var $_PHPSHOP_I_AGREE_TO_TOS = '������� �� ���� ����� ������������.';
	var $_PHPSHOP_LEAVE_BLANK = '(������ �� ���� �� ��� �����<br />������ ������ ������ php ��\' ����!)';
	var $_PHPSHOP_RETURN_LOGIN = '������� �������: ����������� ����� ������';
	var $_PHPSHOP_NEW_CUSTOMER = '���� �������; �������� ����� ��� �� �������� �������';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = '����������� ������:';
	var $_PHPSHOP_ACC_ORDER_INFO = '����������� �����������';
	var $_PHPSHOP_ACC_UPD_BILL = '��� �������� �� ����������� ��� ������������� �������.';
	var $_PHPSHOP_ACC_UPD_SHIP = '��� �������� �� ���������� ��� �� ������������� ��� ����������� ���������.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = '����������� �����������';
	var $_PHPSHOP_ACC_SHIP_INFO = '����������� ���������';
	var $_PHPSHOP_ACC_NO_ORDERS = '��� �������� ����������� ���� ��������';
	var $_PHPSHOP_ACC_BILL_DEF = '- ��\' ������� (���� �� ��� ��������� �������)';
	var $_PHPSHOP_SHIPTO_TEXT = '�������� �� ���������� ����������� ��������� ���� ���������� ���. ����������� ��������� ��� ��������� ������������ � ������ ��� ��� ��������� ��������� ��� �� ��������� ��������.';
	var $_PHPSHOP_CONFIG = '���������';
	var $_PHPSHOP_USERS = '�������';
	var $_PHPSHOP_IS_CC_PAYMENT = '��������� ��� ������� �� ��������� �����;';
	var $_PHPSHOP_SHIPPING_MOD = '�����������';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = '�����������';
	var $_PHPSHOP_CARRIER_LIST_MNU = '����������';
	var $_PHPSHOP_CARRIER_LIST_LBL = '����� ����������';
	var $_PHPSHOP_RATE_LIST_MNU = '������ �����������';
	var $_PHPSHOP_RATE_LIST_LBL = '����� ������� �����������';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = '�����';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = '����� ���������';
	var $_PHPSHOP_CARRIER_FORM_MNU = '���������� ���������';
	var $_PHPSHOP_CARRIER_FORM_LBL = '�����������/���������� ���������';
	var $_PHPSHOP_RATE_FORM_MNU = '������������ ������ �����������';
	var $_PHPSHOP_RATE_FORM_LBL = '�����������/���������� ������� �����������';
	var $_PHPSHOP_RATE_FORM_NAME = '��������� ������� �����������';
	var $_PHPSHOP_RATE_FORM_CARRIER = '����������';
	var $_PHPSHOP_RATE_FORM_COUNTRY = '����';
	var $_PHPSHOP_RATE_FORM_ZIP_START = '���� ������ ���. ���.';
	var $_PHPSHOP_RATE_FORM_ZIP_END = '����� ������ ���. ���.';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = '�������� �����';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = '������� �����';
	var $_PHPSHOP_RATE_FORM_VALUE = '����������';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = '���������� ��� ������';
	var $_PHPSHOP_RATE_FORM_CURRENCY = '�������';
	var $_PHPSHOP_RATE_FORM_VAT_ID = '���';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = '����� ���������';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = '����������';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = '��������� ������� �����������';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = '����� ��� ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... ���';
	var $_PHPSHOP_CARRIER_FORM_NAME = '���������� ��������';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = '����� ���������';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = '������: � ������� ��� ��������� ������� ���.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = '������: �������� ��� ���������.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = '������: ������� ���, ����������� ��� ������ �����������, ���������� �� ����� ���� ���������� ��� ���������';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = '������: ��� ����� �� ��� ��������� �� ����� ��� ������.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = '������: �������� ��� ���������.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = '������: ��� ����� �� ��� ��������� �� ����� ��� ������.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = '������: ���������� ��� ��������� ��� �������.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = '������: � ���� ���������� ��� ����� ������. ������������ ��� ��� ����� ������� �� ���������� �� �� ";".';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = '������: ��� ����� ����������� �� �������� �����';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = '������: ��� ����� ����������� �� ������� �����';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = '������: �� �������� ����� ������ �� ����� ��������� ��� �� ������� �����';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = '������: ���������� �� ������������ �� ������ �����������';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = '������: �������� �������';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = '������: ���������� �� ������������ �� ������ �����������';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = '�������� ��������';
	var $_PHPSHOP_INFO_MSG_CARRIER = '���������';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = '������ �����������';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = '����';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-������-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = '��������� �����';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = '������������� ����������� ��������';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = '������ ���������� �����������';
	var $_PHPSHOP_PAYMENT_FORM_AO = '���� ��������� / ������� �� ��� ��������';
	var $_PHPSHOP_CHECKOUT_MSG_2 = '����������� �������� ��� ��������� ���������!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = '����������� �������� ��� ������ ���������!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = '����������� �������� ��� ������ ��������!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = '����������� ������ �� �������� ��� ������������ ��� ���������� ���!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = '����������� �������� ��� ������ ���������.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = '����������� �������� ��� ���� ������ ���������.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = '����������� �������� ��� ������ ��������.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = '����������� �������� ��� ������ ��� ���������� ������.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = '����������� �������� �� ����� ��� �������, ���� ����������� ���� ��������� �����.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = '� ������� ��� ���������� ������ ��� ����� �������.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = '����������� �������� ��� ���� ����� ��� ���������� ������.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = '����������� �������� �� ���� ����� ��� ���������� ������';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = '� ���������� ����� ��� ����� ������.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = '����������� �������� ��� ��������� ���������.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = '�� ������� ������� �����������.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = '�� ������ ������ ��� ����� �����!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = '������: ����������� �������� ��� ���������!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = '������: ��� ������� �� ���������� ������ �����������!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = '������: ��� ������� � ��������� ���������!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = '������: ��� �������� �������� ���������� ������....';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = '������: ��� ������� � ������� ��� ���������� ������!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = '��������, ���� � ������� ��� ��������������� ����� ���� ��� �������!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = '� ������� ������ (user_id) ��� ������� ��� ���� ���������!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = '��� ������������ �� ����� ��� ������� ��� ���������� �����������.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = '��� ������������ ��� ������ IBAN ��� ����������� ���.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = '��� ������������ ��� ������ ��� ���������� ��� �����������.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = '��� ������������ ��� ������ ����������� ��� �������� ���.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = '��� ������������ �� ����� ��� ��������.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = '�� CheckOut ���������� ��� ������ ����!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = '�� ����������� ��� ��� ������� ������������ ��� ��������� �����������.<BR>';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = '��� ���� �������� �� �������� ���� �����������.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = '�� �������� ���� ����������� �����:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = '������� �� ��������� �����';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = '����� ������� ��������';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = '����������� �������� ��� ������ ��������:';
	var $_PHPSHOP_STORE_FORM_MPOV = '�������� ���� ����������� ��� �� ��������� ���';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = '����������� ���������� �����������';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = '������� �����������';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = '������� ������� ����������� ��������';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = '����� ��������';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = '����� �������';
	var $_PHPSHOP_MODULES = 'Modules';
	var $_PHPSHOP_FUNCTIONS = '�����������';
	var $_PHPSHOP_SPECIAL_PRODUCTS = '������ ��������';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = '����������� ������ ��������, �� ������, ������� �� ��� ���������� ���';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = '�������� ������';
	var $_PHPSHOP_INCLUDING_TAX = '(������������ $tax % ����)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = '�������� �������� ��� �����';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = '�����';
	var $_PHPSHOP_DOWNLOADS_TITLE = '������� Download';
	var $_PHPSHOP_DOWNLOADS_START = '������� �� Download';
	var $_PHPSHOP_DOWNLOADS_INFO = '�������� �������� �� ������ Download (Download-ID) ��� ������ �� e-mail ��� ������� "������� �� Download".';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = '��������, ���� ���� �������� � ������ ��� �������� �� ������ Download';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = '��������, ���� ����� ������� �� ������� ������ downloads';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = '�� ������� ������� Download!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = '��� ����� �� ������ ������ ��� ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = '�� ������ ������ ��� ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = '����������� Download';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = '�� ������(�) ��� ������������ ����� ������ ��� ���������';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = '�������� ������ �� �������� Download-ID(s) ���� ������� Downloads: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = '� �������� ������� ��� ������������ ��� ���� ������ �����: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Download ����� {expire} ������ ���� �� ����� download';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = '���������; ����������;';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = '����������� Download ��� ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = '������ ��� download;';
	var $_PHPSHOP_PAYPAL_THANKYOU = '������������ ��� ��� ������� ���. 
        � �������� ���� ��������. �� ������ ��� e-mail ������������ ��� ��� ��������� ��� ��� �� PayPal. 
        �������� �� ���������� � �� ������������ �� <a href=http://www.paypal.com>www.paypal.com</a> ��� �� ����� ��� ������������ ��� ����������.';
	var $_PHPSHOP_PAYPAL_ERROR = '������� ������ ������ ��� ������� ����������� ��� ���������� ���. � ��������� ��� ���������� ��� ��� ������ �� ����������.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = '������������ ��� ��������� ��� ����.  ���������� �� ����������� ��� ��� ���������� ���.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = '������������ ��� ��� ���������� ���.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = '���������; ����������;';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = '������ � �������� ����������.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = '����� ��� ���������� ��������������� ��� ����� ��� ���������.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = '��� ������������ ��������� ���������.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = '�������� �������� ��� ������ �������� ��� ���� �� �����.';
	var $_PHPSHOP_CART_STOCK_1 = '� ���������� �������� ���������� �� ��������� ����. ';
	var $_PHPSHOP_CART_STOCK_2 = '���� �� ����� ������ $product_in_stock ���� ���������.';
	var $_PHPSHOP_CART_STOCK_3 = '������� ��� ��� �� ������ ��� ����� ��������.';
	var $_PHPSHOP_CART_SELECT_ITEM = '�������� �������� ��� ������ ����� ��� �� ������ ������������!';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = '�������';
	var $_PHPSHOP_REGISTRATION_FORM_MR = '�.';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = '��.';
	var $_PHPSHOP_REGISTRATION_FORM_DR = '��.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = '�����.';
	var $_PHPSHOP_DEFAULT = '��\' �������';
	var $_PHPSHOP_AFFILIATE_MOD = '���������� ������������';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = '�������� ������������';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = '����� ������������';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = '����� ������������';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = '�������';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = '����������';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = '������� ������';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = '������� ���������';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = '�������� �����������';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = '�������� Email �� �������������';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = '�������� Email �� �������������';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = '�� ������ �� �������� Email(* = �����)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = '�� Email ���';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = '�� ����';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = '�� �������������� �� ��������� �����������';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = '������� ���������� (���� �����)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = '�������;';
	var $_PHPSHOP_DELIVERY_TIME = '������� ����������� ��';
	var $_PHPSHOP_DELIVERY_INFORMATION = '����������� ���������';
	var $_PHPSHOP_MORE_CATEGORIES = '������������ ����������';
	var $_PHPSHOP_AVAILABILITY = '�������������';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = '�� ������ ���� ��� ����� ����� ���������.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = '�� ����� ���� ��������� ����: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = '��������';
	var $_PHPSHOP_STATISTIC_STATISTICS = '����������';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = '�������';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = '������ ��������';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = '�������� ��������';
	var $_PHPSHOP_STATISTIC_SUM = '��������';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = '���� �����������';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = '���� �������';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = '����������� �������� �� e-mail ��� �������� ��� �� ��� ������������� ���� ���� �� ������ ����� ���� ���������. 
                                                                        ��� �� �����������, ������������, ��������� � ���������������� ���� �� e-mail ��� ������ ���� ����� ���� ��� 
                                                                        �� �� ��� ����� ���� �� ������ �� ����� ���� ���������.<br /><br />������������!';
	var $_PHPSHOP_WAITING_LIST_THANKS = '������������ ��� ����������!<br />�� ��� ������������� ������ ����� ������ ���� ���������.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = '����������� ��!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = '��������';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = '�������� ��������   Authorize.net  � CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' ��������� ������� ���������:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = '���������';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = '�� ���������';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = '������� ���������';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Path & URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = '��������� �����';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = '��������';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = '���� �������';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = '������ ��� ��������� (download)';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = '��������';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = '����� ���� ��� ���������';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = '��� ��������� ����, ��������������� ���� ��� ����������� ��� ��������';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = '������� �����';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = '������� ����� ������������������� �����;';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = '�������� ��� ������� ����� ��� �� �� ������� ������� ��� ����� ������������������� � ��� ��� �����';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = ' ��������  ��� �� ������� ��� �����. ��� �������������� �� ���������� ���������, ������� ���  ������ �� ������������ �� ����� ���� �������.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = ' ��������� �����';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = '���� ������������ ��� �� �������� �� �������� �����, (���������) ������������� � ���. ������������ �� ������ ps_checkout.php->calc_order_taxable() ��� ���������� ���������';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = '��������� �����:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = '���� ���������� ���������';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = '���� ���������� ������������';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = '���� ��������� ����� ����������� �����  ���������� ��� ��� ���������� ��� ����� :<br />
                                                                                    <ul><li>����� ��� �� ����/ ���� ��� ���������� � ���������� ��� ������������</li><br/>
                                                                                    <li>����� ��� ���� � ������� ����������.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = '������������ ��������� ����������� �����?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = '�������� ��, ��� ����� �������� �� ����������� ���������� ����� ( �.� 8% ��� ������ 18% ��� ���� ��������';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = '�������� �������� ������ �� ����/ ����� ���������;';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = '������������ ����������  ��������� �������/���������� ���������';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = '��� �������������, ���������� ����� ������� �� <strong>�� �������� ��� �� ��������</strong> ��� <strong>�� ������� ��������</strong> ��� ����. <br />
                                                                                ���� �� ������� �� ������� �� ������� ��� ��� ��������� ���� ��� �� ������, ��� �� ��� ����������� �� ������ �������.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = '����������� �� �������  ��� �� ��������� ��� �������  ��� �� ������������ ������� ���� � ���� �� ���� ��� �� ����� ���������.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = '������� �� ������� �� ������� ���� �� ����� ���������� �����������;';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = '�������� �� ���  ������� ��� �� ����� ��� ���������� �� ��� �������� �� ���������� �������� ���� ���� ����������� ��� ����������� ���������.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = '�� ������� ������� �� ��������� ����/�������?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = '�������� ���� ��� ��������� �� ����� �� ���������� �� ��������� �� ���� ����/������� ���� ����������� ��� ����������� ���������.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = '����������� ��������� - �������� ������ �� ���� ����� ������;';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = '�������� ��� ������ � ������� �� �������� �� ���� ����� ������ ������ �������� ��� ����������� ���������.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = '������� ���������� ';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = '������������ ������� ���������� ���� � ������� ��������� ��� ������ ��� ������ ������ ���. 
                                                                                         ��� �������������, ��� ��������� ��� ������ �� ��������� �������� �������� ��� ������ ��� ���� ��� ����� ���������.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = '������������  ��������� ����������?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = '���� ����������� ��� ��������� ��� ���������� ���� ������������� �� ���������. ������������� �� ��� ����� ������� ���������� ��� ����������.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = '����� ����������� email:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = '������������ ��������';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML ������������';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = '���� ��������� ��� � ������������ ������������ ����������� (email ) ����������:<br />
                                                                                        <ul><li>email ����� �������� </li>
                                                                                        <li>� html email �� �������.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = '�� ����������� � ���������� ��� Frontend ��� ������� ��� ��� ����� �������� ��� Backend;';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = '�� ����� ��� ������� �������� �� ���������� ��� �������� ����� ������������ ��� ������������ ������������, ���� ��� ���������� �������� ��� ���������� ��� Mambo (e.g. Registered / Editor).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = '�� URL ��� ��� �������� ��� ����.������� ������������� �� �� URL ��� Mambo  (�� �� ������ / ��� �����!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = '������� URL';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = '��  URL ��������� ��� ���������  ��� �����. (https - �� �� ������ / ��� �����!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = '�� URL ��� �� component ';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = '�� URL ��� �� component ��� mambo-phpShop. (�� �� ������ / ��� �����!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'URL �������';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = '�� URL ��� �� mambo-phpShop component (������� �������) (�� �� ������ / ��� �����!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = '������� ADMIN';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = '� �������� ���� �� ������ component mambo-phpShop.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = '������� CLASS';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = '� �������� ���� �� ������ classes ��� mambo-phpShop.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = '�������  mambo-phpShop';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = '� �������� ���� �� ������ html mambo-phpShop.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = '������� �������';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = '� �������� ���� �� ������ ������� mambo-phpShop shop.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = '������ ������';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = '���� ����� � ������ ��� �� ���������� ��� �������������.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = '���������� ������� ������';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = '���� ����� � ������������� ������ ���  ���������� ������� ������.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = '������ ��������������';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = '���� ����� � ������������� ������ �������� ��������� ��������������.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = '�������������?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = '�������������?  ����������� ��� ���������� ����������� ��������������. ��������  �� ����� �������������� (debug) ���  ���� ����� ���� �������. ���������� ���������  ���� ��� ���������� ��������� ��� ehsop ��� ������� �� ����������� ��� ��������, ��� ������  �.�.�..';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'FLYPAGE';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = '���� ����� � ������������� ������ ��� ��� ���������� ��� ������������ ��� ���������.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = '��������� Template';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = '������ ��� ������������� ���������  template ��� ���  ������� ��������� �� ��� ���������.<br />
                                                                                                      �������� �� ������������� ���  templates ������������� �� ���������  ������ ��� template <br />
                                                                                                      (�� ����� ���������� ��� �������� <strong>COMPONENTPATH/html/templates/</strong> ��� �������� �� �� browse_)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = '�������������� ������� �������� ��������� �� ���  ������';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = ' ���� ������ ��� ������������� ������� �������� ��������� �� ���  ������.<br />
                                                                                                      ����������: �� ���������  4, � ��������� template  �� ��������  4 �������� ��� ������';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = '"����� ������" ������';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = '���� � ������ ��  ������������� ���� ��� ������� ��������� ������ ���������.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = '��������� �������';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = '��������� ��� ������ ��� �������  ��� ������ ���� �� ������������ ���������� �������������� �� �����.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = '��������� ����� 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = '���������  �� ����� ��� ����� ������� ������� �� ��� ����� �������������.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = '��������� ����� 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = '���������  �� ����� ��� ����� ������� ������� �� ��� ����� �������������.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = '�������� ������� �������';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = '�������� ��� ������ ��� �������  ��� ���������� �� order list select box.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = '������� "powered by mambo-phpShop" ?';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = '�������� ��� ������ ��� ���� ����� a powered-by-mambo-phpShop .';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = '�������� �� ������ ��� �� ��������� ��� �� ��������� �� ��������.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = '�������� ������  ��������� �� ����������� ���������� ��� ����� �� ���������� ����������������. <strong>������������!</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = ' Zone Shipping Module Country Version 1.0<br />
                                                                                                            ��� ������������ ����������� ��� ���� �� module ����������� ������������: <a href="http://ZephWare.com">http://ZephWare.com</a><br />
                                                                                                            ��� ������������ � ��� �����������: <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Check this to enable the zone shipping module';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '�������� ����������� ����������� UPS ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'UPS  ������� ���������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = '� ������� ��������� ��� ��� ��� UPS ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'UPS �������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = '�� ����� ������ ��� ������ ��� ��� UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = '� �������� ������� ��� ��� ���������� ��� ���� UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'InterShipper ���������. �������� ���� ��� ����� ���������� ���� Intershipper.com ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = '�������������� �������� ������� ���������. �������� �� �� ������� ��� ��������� ��  ����������� ����������� (download) �������� ��� ��� ���������� ��  ����������� - ����������.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'InterShipper ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = '� �������� ������� ��� ��� ���������� ��� ���� intershipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'InterShipper email';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = '��  email  ��� ����� ������� ��� ��� ���������� ��� ���� intershipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = '������ �������������';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = '��������������� ���  ��� ������������� ��������� ���  ����� ����������� ��� ���� ��������� �� ���� �� ������. ���� �������� ��� ���� �� ������  �� ������ �� ������������� ��� ����������� ��������, �������.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = '������������ ��� ������ ������ (checkout)';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = '�������� ����, ��� ������ � \'����� ��� �������\' �� ����������� ���� ������ ���� �� �������� ��� ����������� checkout ( 1 - 2 - 3 - 4 �� �������).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = '�������� �� ���������� ������� ��� ������������ ���';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>������� :</strong><br/>
               1. ������ ���������� ���������<br />
              2. ������ ������� ���������<br />
              3. ������ ������ ��������<br />
              4. ���������� �����������';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>���������� 2:</strong><br/>
               1. ������ ���������� ���������<br />
              2. ������ ������ ��������<br />
              3. ���������� �����������';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>���������� 3:</strong><br/>
               1. ������ ������� ���������<br />
              2. ������ ������ ��������<br />
              3. ���������� �����������';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>���������� 4:</strong><br/>
               1. ������ ������ ��������<br />
              2. ���������� �����������';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = '������������ ������������ ������� (Downloads)';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Check to enable the download capability. Only If you want sell downloadable goods.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Order Status which enables download';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Select the order status at which the customer is notified about the download via e-mail.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Order Status which disables downloads';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Sets the order status at which the download is disabled for the customer.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'DOWNLOADROOT';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'The physical path to the files for the custumer download. (trailing slash at the end!)<br>
        <span class="message">For your own shop\'s security: If you can, please use a directory ANYWHERE OUTSIDE OF THE WEBROOT</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Download Maximum';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Sets the number of downloads which can be made with one Download-ID, (for one order)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Download Expire';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Sets the time range <strong>in seconds</strong> in which the download is enabled for the customer. 
  This range begins with the first download! When the time range has expired, the download-ID is disabled.<br />Note : 86400s=24h.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Enable IPN Payment via PayPal?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Check to let your customers use the PayPal payment system.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'PayPal payment email:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Your business email address for PayPal payments. Also used as receiver_email.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Order Status for successful transactions';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Select the order status to which the actual order is set, if the PayPal IPN was successful. If using download selling options: 
  select the status which enables the download (then the customer is instantly notified about the download via e-mail).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Order Status for failed transactions';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Select an order status for failed PayPal transactions.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Enable Payments via PayMate?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Check to let your customers use the Australian PayMate payment system.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'PayMate username:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Your user account for PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Enable Authorize.net payment?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Check to use Authorize.net with phpShop.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Test mode ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Select \'Yes\' while testing. Select \'No\' for enabling live transactions.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Yes';
	var $_PHPSHOP_ADMIN_CFG_NO = 'No';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Authorize.net Login ID';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'This is your Authorize.Net Login ID';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Authorize.net Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'This is your Authorize.net Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Authentication Type';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'This is the Authorize.Net authentication type.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Enable CyberCash?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Check to use CyberCash with phpShop.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash MERCHANT';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_MERCHANT is the CyberCash Merchant ID';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash Merchant Key';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash Merchant Key is the Merchant Provided by CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash PAYMENT URL';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'CyberCash PAYMENT URL is the URL provided by Cybercash for secure payment';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash AUTH TYPE';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'CyberCash AUTH TYPE is the Cybercash authentication type provided by Cybercase';
	var $_PHPSHOP_ADVANCED_SEARCH = '������� ���������';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = '���� ���� ��� ����������';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = '���� ���� ��� ����������� �����';
	var $_PHPSHOP_SEARCH_PRODNAME = '���� �� ����� ��� ���������';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = '���� �������������/�����������';
	var $_PHPSHOP_SEARCH_DESCRIPTION = '���� ��������� ���������';
	var $_PHPSHOP_SEARCH_AND = '���';
	var $_PHPSHOP_SEARCH_NOT = '���';
	var $_PHPSHOP_SEARCH_TEXT1 = '� ����� ���������� ����� ��� ��������� �� ��������� ��� ��������� ��� �� ����������� �� ���� ��� ���������. 
        � ������� ���������� ����� ��� ��������� �� ������ ��������� �� ��� ������������ ����� ��� ����������� ��� ��������� (�.�. �����). 
        ��� �� ������ ��� ����� ����� ��� �������� ��� (� ������� ��� ��\' ������� ������� ����), �������� ��� ���� ���������, ���� ������. ';
	var $_PHPSHOP_SEARCH_TEXT2 = ' �������� �� ������������� ��������� ��� ��������� ��� ������������ ��� ������� ���� ������ ��� ����������� ��� ����������� ��� ��� ���. 
        ����������� ��� �������� ��� ��� �� ��� ������ ������ �� ����� �������� ��� �� ���������� �� ������. 
        ����������� ��� �������� ��� �� ������ �� ���������� ���� �� � ����� ���� ������ ����� ������� 
        ��� � ������� ��� �����.';
	var $_PHPSHOP_ORDERBY = '���������� ����';
	var $_PHPSHOP_CUSTOMER_RATING = '���� ���������� ������';
	var $_PHPSHOP_TOTAL_VOTES = '��������� �����';
	var $_PHPSHOP_CAST_VOTE = '����������� ����� ��� ���� ���';
	var $_PHPSHOP_RATE_BUTTON = '������������';
	var $_PHPSHOP_RATE_NOM = '����������';
	var $_PHPSHOP_REVIEWS = '�������� �������';
	var $_PHPSHOP_NO_REVIEWS = '��� �������� �������� ��\' ���� �� ������.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = '���� � ������ ��� �� ������ ��� �������...';
	var $_PHPSHOP_REVIEW_LOGIN = '����������� ����� �������� ��� �� ������� ��� �������.';
	var $_PHPSHOP_REVIEW_ERR_RATE = '����������� ������������ �� ������ ��� �� ������������ ��� ������� ���!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = '����������� ������ �������� ����� ���������� ��� ��� ������� ���. ��������� ������������� ������� ����������: 100';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = '����������� ������� �� ����� ��� �������� ���. �������� ������������� ������� ����������: 2000';
	var $_PHPSHOP_WRITE_REVIEW = '������ ��� ������� ��\' ���� �� ������!';
	var $_PHPSHOP_REVIEW_RATE = '�����: ������������ �� ������. ����������� �������� ��� ���������� ������ 0 (������) ��� 5 �������� (�����).';
	var $_PHPSHOP_REVIEW_COMMENT = '�������� ������ ���� ��� ������� �������...(�������� 100, ������� 2000 ����������) ';
	var $_PHPSHOP_REVIEW_COUNT = '���������� ��� ����� ������: ';
	var $_PHPSHOP_REVIEW_SUBMIT = '������� ��������';
	var $_PHPSHOP_REVIEW_ALREADYDONE = '����� ��� ������ ������� ��\' ���� �� ������. ������������.';
	var $_PHPSHOP_REVIEW_THANKYOU = '������������ ��� ��� ������� ���.';
	var $_PHPSHOP_COMMENT = '������';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Add/Edit Credit Card Types';
	var $_PHPSHOP_CREDITCARD_NAME = 'Credit Card Name';
	var $_PHPSHOP_CREDITCARD_CODE = 'Credit Card - Short Code';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Credit Card Type';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Credit Card List';
	var $_PHPSHOP_UDATE_ADDRESS = 'Update Address';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Continue Shopping';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Your order has been successfully placed!';
	var $_PHPSHOP_ORDER_LINK = 'Follow this link to view the Order Details.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'the Status of your Order No. {order_id} has been changed.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'New Status is:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'To view the Order Details, please follow this link (or copy it into your browser):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Order Status Change: Your Order {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Notify Customer?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Please change the Order Status first!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Price Discount on default Shopper Group (in %)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'A positive amount X means: If the Product has no Price assigned to THIS Shopper Group, the default Price is decreased by X %. A negative amount has the opposite effect';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Product Discount';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Product Discount List';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Add/Edit Product Discount';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Discount amount';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Enter the discount amount';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Discount Type';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Percentage';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Total';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Shall the amount be a percentage or a total?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Startdate of discount';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Specifies the day when the discount begins';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'End date of discount';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Specifies the day when the discount ends';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'You can use the Product Discount Form to add discounts!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'You Save';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = '�������� ������� �������';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Currency Display Style';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Currency symbol';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'You can also use HTML Entities here (e.g. �,�,�,...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Decimals';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Number of displayed decimals (can be 0)<br><b>Performs rounding if value has different number of decimals</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Decimal symbol';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Character used as decimal symbol';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Thousands separator';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Character used to separate thousands (can be empty)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Positive format';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Display format used to display positive values.<br>(Symb stands for currency symbol)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Negative format';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Display format used to display negative values.<br>(Symb stands for currency symbol)';
	var $_PHPSHOP_OTHER_LISTS = 'Other Product Lists';
	var $_PHPSHOP_MORE_IMAGES = 'View More Images';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Available Images for';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Back to Product Details';
	var $_PHPSHOP_FILEMANAGER = 'FileManager';
	var $_PHPSHOP_FILEMANAGER_LIST = 'FileManager::Product List';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Add Image/File';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Assigned Images';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'Is Downloadable?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Assigned Files (Datasheets,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Published?';
	var $_PHPSHOP_FILES_LIST = 'FileManager::Image/File List for';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Filename';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'File Title';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'File Type';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Edit File Entry';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Full Image';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Thumbnail Image';
	var $_PHPSHOP_FILES_FORM = 'Upload a File for';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Current File';
	var $_PHPSHOP_FILES_FORM_FILE = 'File';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Image';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Upload to';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'default Product Image Path';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Specify the file location';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Download Path (e.g. for selling downloadables!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Auto-Create Thumbnail?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'File is published?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'File Title (what the Customer sees)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'File Description';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'File URL (optional)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Please provide a valid path!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'The Thumbnail Image has been successfully created!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'Could NOT create Thumbnail Image!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'File/Image Upload Error';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Could not delete the Full Image File.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Full Image successfully deleted.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Could not delete the Thumbnail Image File (maybe didnt exist): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Thumbnail Image successfully deleted.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Could not delete the File.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'File successfully deleted.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Sorry, but the requested file wasn\'t found!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Image not found!';
	var $_PHPSHOP_COUPON_MOD = 'Coupon';
	var $_PHPSHOP_COUPONS = 'Coupons';
	var $_PHPSHOP_COUPON_LIST = 'Coupon List';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Coupon has already been redeemed.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Coupon redeemed! Thank you.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'If you have a coupon code, please enter it below:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Submit';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'That coupon code already exists. Please try again.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Update Coupon';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Click a coupon code to edit it, or to delete a coupon code, select it and click Delete:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Code';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Percent or Total';
	var $_PHPSHOP_COUPON_TYPE = 'Coupon Type';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'A Gift Coupon is deleted after it was used for discounting an order. A permanent coupon can be used as often as the customer wants to.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Gift Coupon';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Permanent Coupon';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Value';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Delete Code';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Are you sure you want to delete this coupon code?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Please complete all fields.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'Coupon value must be a number.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'New Coupon';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Coupon Code';
	var $_PHPSHOP_COUPON_PERCENT = 'Percent';
	var $_PHPSHOP_COUPON_TOTAL = 'Total';
	var $_PHPSHOP_COUPON_VALUE = 'Value';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Coupon code saved.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Save Coupon';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Coupon Discount';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Coupon code not found. Please try again.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Enable Coupon Usage';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'If you enable the Coupon Usage, you allow customers to fill in Coupon Numbers to gain discounts on their purchase.';
	var $_PHPSHOP_FREE_SHIPPING = 'Free Shipping';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Shipping is free on this Order!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Minimum Amount for Free Shipping';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'The amount (INCLUDING TAX!) which is the Minimum for Free Shipping 
                                                (example: <strong>50</strong> means Free Shipping when the customer checks out
                                                with $50 (including tax) or more.';
	var $_PHPSHOP_YOUR_STORE = 'Your Store';
	var $_PHPSHOP_CONTROL_PANEL = 'Control Panel';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF - Button';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Show or Hide the PDF - Button in the Shop';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Must agree to Terms of Service on EVERY ORDER?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Check if you want a shopper to agree to your terms of service on EVERY ORDER (before placing the order).';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Bank Account Type';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Checking';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Business Checking';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Saving';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Recurring Billings?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Define wether you want recurring billings.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Internal Error processing the Request to';
	var $_PHPSHOP_PAYMENT_ERROR = 'Failure in Processing the Payment';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Payment successfully processed';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS was not able to process the Shipping Rate Request.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Guaranteed Day(s) To Delivery';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'UPS Pickup Method';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'How do you give packages to UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'UPS Packaging?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Select the default Type of Packaging.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Residential Delivery?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Residential (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Commercial Delivery (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Quote for Residential (RES) or Commercial Delivery (COM).';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Handling Fee';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Your Handling fee for this shipping method.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Tax Class';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Use the following tax class on the shipping fee.';
	var $_PHPSHOP_ERROR_CODE = 'Error Code';
	var $_PHPSHOP_ERROR_DESC = 'Error Description';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Show / Change the Transaction Key';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Show/Change the Password/Transaction Key';
	var $_PHPSHOP_TYPE_PASSWORD = 'Please type in your User Password';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Current Password';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Current Transaction Key';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'The Transaction key was successfully changed.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Request/Capture Credit Card Code Value (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Check for a valid CVV2/CVC2/CID value (three- or four-digit number on the back of a credit card, on the Front of American Express Cards)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Please type in the three- or four-digit number on the back of your credit card (On the Front of American Express Cards)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'You need to enter your Credit Card Code to proceed.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'EITHER Fill in a Filename';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'NOTE: Here you can fill in a FileName. <strong>If you fill in a Filename here, no Files will be uploaded!!! You will have to upload it via FTP manually!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'OR Upload new File';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'You can upload a local file. This file will be the Product you sell. An existing file will be replaced.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Fill in any text here that will be displayed to the customer on the product flypage.<br />e.g.: 24h, 48 hours, 3 - 5 days, On Order.....';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'OR select an Image to be displayed on the Details Page (flypage).<br />The images reside in the directory <i>/components/com_phpshop/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Attribute List';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Examples for the Attribute List Format:</h4>
        <span class="sectionname"><strong>Size</strong>,XL[+1.99],M,S[-2.99]<strong>;Colour</strong>,Red,Green,Yellow,ExpensiveColor[=24.00]<strong>;AndSoOn</strong>,..,..</span>
        <h4>Inline price adjustments for using the Advanced Attributes modification:</h4>
        <span class="sectionname">
        <strong>+</strong> == Add this amount to the configured price.<br />
        <strong>-</strong> == Subtract this amount from the configured price.<br />
        <strong>=</strong> == Set the product\'s price to this amount.
      </span>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Custom Attribute List';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Examples for the Custom attribute List Format:</h4>
        <span class="sectionname"><strong>Name;Extras;</strong>...</span>';
	var $_PHPSHOP_MULTISELECT = '�������� ������� �� CTRL ��� �������';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'Enable eProcessingNetwork.com payment?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Check to use eProcessingNetwork.com with phpShop.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Test mode ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Select \'Yes\' while testing. Select \'No\' for enabling live transactions.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'eProcessingNetwork.com Login ID';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'This is your eProcessingNetwork.com Login ID';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'eProcessingNetwork.com Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'This is your eProcessingNetwork.com Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Authentication Type';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'This is the eProcessingNetwork.com authentication type.';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Related Products';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'You can build up Product Relations using this List. Just select one or more products here and then they are <strong>Related Products</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'You may also be interested in this/these product(s)';
	var $_PHPSHOP_IMAGE_ACTION = 'Image Action';
	var $_PHPSHOP_NONE = 'none';
	var $_PHPSHOP_ORDER_HISTORY = 'Order History';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Comment';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Comments on your Order';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Include this comment?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Date Added';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Customer Notified?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Order Status Change';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = 'USPS shipping username';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = 'Username that you received from registering at USPS.com.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = 'USPS shipping password';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = 'Password that you received from registering at USPS.com.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER = 'USPS shipping server';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP = 'USPS shipping server, currently only works on live server!  Should be production.shippingapis.com';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH = 'USPS shipping path';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP = 'USPS shipping path, should be /ShippingAPI.dll';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE = 'USPS Package Size';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP = 'Choices are Regular, Large, and Oversize.  This should be set to what you mostly mail and is based on the dimensions of the package.  Normally just Regular.';
	var $_PHPSHOP_USPS_PADDING = 'Percent to pad weight for shipping package. (Include %)';
	var $_PHPSHOP_USPS_PADDING_TOOLTIP = 'Pad the shipping weight to allow additional weight for shipping box and packing. Using this allows you to put actual weight in your items weight settings.  Requires you to have the % sign included.  Example 15%';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_HANDLING_FEE = 'Handling Fee';
	var $_PHPSHOP_USPS_HANDLING_FEE = 'Your Handling fee for this shipping method.';
	var $_PHPSHOP_USPS_HANDLING_FEE_TOOLTIP = 'Do you want to charge extra for users to ship USPS?  In dollar format, example 2.00';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE = 'Your International Handling fee for USPS shipments.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP = 'Do you want to charge extra for users to ship Internationally with USPS.  This is on top of the normal Handling Fee.  Example 2.00';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE = 'Your International per pound rate for USPS shipments.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP = 'Your International per pound rate for USPS shipments.';
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
	var $_PHPSHOP_USPS_RESPONSE_ERROR = 'USPS was not able to process the Shipping Rate Request.';
	var $_PHPSHOP_PARAMETERS_LBL = 'Parameters';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Product Type';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Product Type List';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Add/Edit Product Type';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Product Type List for';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'List Product Types';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Add Product Type for';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Add Product Type';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Product Type';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Product Type Name';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Product Type Description';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Parameters';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Product Type Information';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Publish?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Product Type Browse Page';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Product Type Flypage';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Parameters of Product Type';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Parameter Information';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Product Type not found!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Parameter Name';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'This name will be column name of table. Must be unicate and without space.<BR>For example: main_material';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Parameter Label';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Parameter Description';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Parameter Type';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Integer';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Text';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Short Text';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Float';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Char';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Date & Time';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Date';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'YYYY-MM-DD';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Time';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'HH:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Break Line';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Multiple Values';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Possible Values';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Show Possible Values as Multiple select?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>If Possible Values are set, Parameter can have only this values. Example for Possible Values:</strong><BR><span class="sectionname">Steel;Wood;Plastic;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Default Value';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'For Parameter Default Value use this format:<ul><li>Date: YYYY-MM-DD</li><li>Time: HH:MM:SS</li><li>Date & Time: YYYY-MM-DD HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Unit';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Advanced Search according to Parameters';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Parameters Search';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Do you will find products according to technical parametrs?<BR>You can used any prepared form:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'I am sorry. There is no category for search.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'I am sorry. There is no published Product Type with this name.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'Is Like';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'Is NOT Like';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Full-Text Search';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'All Selected';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Any Selected';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Reset Form';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Search in Category';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Change Parameters';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Descending order';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Ascending order';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Parameters of Category';
	var $_PHPSHOP_FEE = 'Fee';
	var $_PHPSHOP_PRODUCT_CLONE = 'Clone Product';
	var $_PHPSHOP_CSV_SETTINGS = 'Settings';
	var $_PHPSHOP_CSV_DELIMITER = 'Delimiter';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Field Enclosure Char';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Upload a CSV File';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Submit CSV File';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Load from directory';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Load CSV File from Server';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Export to CSV File';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Choose Field Ordering Type';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Default Ordering';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'My customized Ordering';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Export all Products to CSV File';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'CSV Import / Export Configuration';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Save Changes';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Field Name';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'default Value';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Field Ordering';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Field Required?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Import/Export';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Add a new Field';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Documentation';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Sorry, but the Product you\'ve requested wasn\'t found!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Show Products that are out of Stock';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'When enabled, Products that are currently not in Stock are displayed. Otherwise such Products are hidden.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'Number {unit}s in packaging:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'Number {unit}s in box:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Hide out of stock products';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Featured & Discounted Products';
	var $_PHPSHOP_FEATURED = 'Featured';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Back to the country';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Back to the file manager';
	var $_PHPSHOP_ADD_STATE = 'Add a State';
	var $_PHPSHOP_LIST_STATES = 'List States';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'featured AND discounted';
	var $_PHPSHOP_SHOW_FEATURED = 'featured products';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'discounted products';
	var $_PHPSHOP_FILTER = 'Filter';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Back to the Main Site';
	var $_PHPSHOP_EXPAND_TREE = 'Expand Tree';
	var $_PHPSHOP_COLLAPSE_TREE = 'Collapse Tree';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Discounted Price';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Here you can override the discount setting fill in a special discount price for this product.<br/>
The Shop will create a new discount record from the discounted price.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Price per Unit';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'Shop is offline?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'If you check this, the Shop will display an Offline Message.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Offline Message';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Table Prefix for Shop Tables';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'This is <strong>vm</strong> per default';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Show Page Navigation at the Top of the Product Listing?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Switches On or Off the Display of Page Navigation at the Top of the Product Listings in the Frontend.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Show the Number of Products?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Show the Number of Products in a Category like Category (4)?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'Add-to-Cart Button Style';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'Enable Dynamic Thumbnail Resizing?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'If checked, you enable dynamic Image Resizing. This means that all Thumbnail Images are resized to fit the Sizes you provide below,
        using PHP\'s GD2 functions (you can check if you have GD2 support by browsing to "System" -> "System Info" -> "PHP Info" -> gd. 
        The Thumbnail Image quality is much better than Images which were "resized" by the browser. The newly generated Images are put into the directory /shop_image/prduct/resized. If the Image has already been resized, this copy will be send to the browser, so no image is resized again and again.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'Thumbnail Image Width';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'The target <strong>width</strong> of the resized Thumbnail Image.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Thumbnail Image Height';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'The target <strong>height</strong> of the resized Thumbnail Image.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Please select at least one Checkbox in the Shipping Configuration!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Price Configuration';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Membergroup to show prices to';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'The selected membergroup and all groups with higher permissions will be able to see the product prices.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Show "(including XX% tax)" when applicable?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'When checked, users will see the text "(including xx% tax)" when prices are shown incl. tax.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'Show the price label for packaging?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'When checked, the price label is derived from the product\'s unit and packaging values:
<strong>Price per Unit (10 pieces)<strong><br/>
When not checked, price labels look just as usual: <strong>Price: $xx.xx</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'more Core Settings';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Core Settings';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Frontend Features';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Tax Configuration';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Quantity Start';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Quantity End';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'User Registration Settings';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'User registration allowed?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'New account activation necessary?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Use silent (hidden) user registration?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'When enabled, users don\'t need to fill in a username and password for a new account. Instead the email address is used for the new account and a random password is generated. The registration details are mailed to the customer.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Hello %s,
Thank you for registering at %s. Your customer account has been created.
You may login to %s using the following username and password:
Username - %s
Password - %s
';
	var $_PEAR_LOG_CRIT = 'Critical';
	var $_PEAR_LOG_ERR = 'Error';
	var $_PEAR_LOG_WARNING = 'Warning';
	var $_PEAR_LOG_INFO = 'Info';
	var $_PEAR_LOG_TIP = 'Info';
	var $_PEAR_LOG_ALERT = 'Alert';
	var $_PEAR_LOG_EMERG = 'Emergency';
	var $_PEAR_LOG_NOTICE = 'Notice';
	var $_PEAR_LOG_DEBUG = 'Debug';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'Enable PayFlow Pro payment?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'Check to use VeriSign\'s PayFlow Pro with VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'Test mode ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'Select \'Yes\' while testing. Select \'No\' for enabling live transactions.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'VeriSign processing Partner ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'The Partner ID provided to you by the authorized VeriSign Reseller that registered you for the PayFlow Pro service';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'PayFlow Pro Login ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'This is your PayFlow Pro Login ID';
	var $_VM_TAXDETAILS_LABEL = 'Tax Total contains';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'Default product sort order';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'Defines by which field products are ordered by default on the browse pages';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'Available "Sort-by" fields';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'Choose the "Sort-by" fields for the browse page. Each one defines a sort method for the product browse page. If you deselect all, the Order-By-Form will not be shown.';
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
	var $_VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX = 'The Session Save Path %s is not writable. Please correct this! The shop is temporarily trying to use the %s instead.\'';
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
	var $_ITEM_PREVIOUS = 'previous';
	var $_ITEM_NEXT = 'next';
	var $_CMN_OK = 'Ok';
	var $_CMN_CONTINUE = 'Continue';
	var $_CMN_CANCEL = 'Cancel';
	var $_BUTTON_SEND_REG = 'Send Registration';
	var $_CONTACT_FORM_NC = 'Please make sure the form is complete and valid.';
	var $_CMN_REQUIRED = 'Required';
	var $_CMN_NEW = 'New';
	var $_CMN_SAVE = 'Save';
	var $_CMN_NEW_ITEM_LAST = 'New items default to the last place. Ordering can be changed after this item is saved.';
	var $_CMN_OPTIONAL = 'Optional';
	var $_E_APPLY = 'Apply';
	var $_E_IMAGES = 'Images';
	var $_URL = 'URL:';
	var $_SEL_CATEGORY = 'Select a category';
	var $_E_REMOVE = 'Remove';
	var $_PN_LT = '<';
	var $_PN_RT = '>';
	var $_PN_PAGE = 'Page';
	var $_PN_OF = 'of';
	var $_PN_START = 'Start';
	var $_PN_PREVIOUS = 'Prev';
	var $_PN_NEXT = 'Next';
	var $_PN_END = 'End';
	var $_PN_DISPLAY_NR = 'Display #';
	var $_PN_RESULTS = 'Results';
	var $_CMN_PRINT = 'Print';
	var $_CMN_PDF = 'PDF';
	var $_CMN_EMAIL = 'E-mail';
	var $_BACK = 'Back';
	var $_USERNAME = 'Username';
	var $_PASSWORD = 'Password';
	var $_BUTTON_LOGIN = 'Login';
	var $_REGISTER_UNAME = 'Username';
	var $_REGISTER_EMAIL = 'Email';
	var $_REGWARN_NAME = 'Please enter your name.';
	var $_REGWARN_UNAME = 'Please enter a user name.';
	var $_REGWARN_MAIL = 'Please enter a valid e-mail address.';
	var $_SEND_SUB = 'Account details for %s at %s';
	var $_ASEND_MSG = 'Hello %s,
	
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
	var $_CMN_PUBLISHED = 'Published';
	var $_CMN_UNPUBLISHED = 'Unpublished';
	var $_MORE = 'More...';
	var $_EMPTY_CATEGORY = 'This Category is currently empty.';
	var $_BUTTON_LOGOUT = 'Logout';
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
	var $_PHPSHOP_CSV_EXPLANATION_UPLOAD_SETTINGS = '<ul><li><span style="font-weight: bold;">Skip first line</span><br />If the CSV file has a header line at the beginning, choose this option to skip that line. This prevents the header from being added to your database.</li><li><span style="font-weight: bold;">Overwrite existing data</span><br />When adding new products to your database, unchecking this option prevents any existing data to be replaced for products that already exist in your database. Default is to update product data.</li><li><span style="font-weight: bold;">Skip default value</span><br />On the configuration page, a default value can be specified in case the field is empty in the CSV file. Enabling this option, the import will not include the field for updating if there is no value in the CSV file.</li><li><span style="font-weight: bold;">Price list upload only</span><br />The Price list upload only is to be used if you are updating the prices of your products. The layout of the CSV is expected to be 2 columns:<ol><li>product_sku</span></li><li>product_price</li></ol></li>Please note that it does NOT take into account the settings on the configuration page.<li><span style="font-weight: bold;">Use column headers as configuration</span><br />If the CSV file has column headers on the first line, this option can be used to use the column headers as the current configuration. The column headers should match one of the column names defined on the Available Tabs page. This configuration is on a per use basis, nothing is saved. Default values cannot be used with this option.</li><li><span style="font-weight: bold;">Show preview</span><br />Shows a 5 line preview of the file to be imported. The import can then be either cancelled or continued.</li><li><span style="font-weight: bold;">Collect debug information</span><br />In case of problems, use this option to see what happens during the import. At the end of the import a report will be generated with the steps and queries done during the import.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_NAME = 'The name of the manufacturer that is related to the product. This is used in combination with the manufacturer ID. If no manufacturer ID is specified, only the name is checked. New manufacturers will be created wiht incremental IDs. The process of adding/updating manufacturers follows the following guidelines:<ol><li>Name exists, ID exists --> ID is updated if different</li><li>Name exists, ID does not exist --> New manufacturer created with increment ID</li><li>Name does not exist, ID exists --> Generic name added with existing ID</li><li>Name does not exist, ID does not exist --> Do nothing</li></ol>Usage:<ol><li>Select the name "manufacturer_name" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the manufacturer name.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_ID = 'The ID of the manufacturer that is related to the product and must be unique. This is used in combination with the manufacturer name. If no manufacturer name is specified only, the product manufacturer link will be added/updated. Adding/updating manufacturers follows the following process:<ol><li>Name exists, ID exists --> ID is updated if different</li><li>Name exists, ID does not exist --> New manufacturer created with increment ID</li><li>Name does not exist, ID exists --> Generic name added with existing ID</li><li>Name does not exist, ID does not exist --> Do nothing</li></ol>When no name or ID exists nothing is done to prevent numerous generic name manufacturers from being added.<br /><br />Usage:<ol><li>Select the name "manufacturer_id" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the manufacturer ID.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
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
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LIST_ORDER = 'Specify in which order the product parameter is to be displayed.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_list_order" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
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
        
}
class phpShopLanguage extends vmLanguage { }

/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>