<?php
defined( '_VALID_MOS' ) or die( '������ ������ � ������ �������� ��������.' ); 
/**
* @������ $Id: russian.php,v 1.2 2005/09/01 19:58:07 soeren_nb Exp $
* @����� mambo-phpShop
* @�������� languages
*
* @copyright (C) 2005 Soeren Eberhardt
* @copyright (C) 2005 Ru-Mambo, Ը����� ���������, (����� ������� ��� ������������)
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* mambo-phpShop - ��������� ����������� �����������.
* mambo-phpShop ������������ ��� �����-���� ��������.
*
* http://mambo-phpshop.net
* http://ru-mambo.ru
*/
class phpShopLanguage extends mosAbstractLanguage {

    /*####################
    �������� �����������
    ####################*/
    
    var $_PHPSHOP_MENU = "����";
    var $_PHPSHOP_CATEGORY = "���������";
    var $_PHPSHOP_CATEGORIES = "���������";
    var $_PHPSHOP_SELECT_CATEGORY = "����� ���������:";
    var $_PHPSHOP_ADMIN = "�����������������";
    var $_PHPSHOP_PRODUCT = "�����";
    var $_PHPSHOP_LIST = "������";
    var $_PHPSHOP_ALL = "���";
    var $_PHPSHOP_LIST_ALL_PRODUCTS = "��� ������";
    var $_PHPSHOP_VIEW = "��������";
    var $_PHPSHOP_SHOW = "���";
    var $_PHPSHOP_ADD = "�������";
    var $_PHPSHOP_UPDATE = "��������";
    var $_PHPSHOP_DELETE = "�������";
    var $_PHPSHOP_SELECT = "�������";
	var $_PHPSHOP_SUBMIT = "���������";
    var $_PHPSHOP_RANDOM = "��������� �����";
    var $_PHPSHOP_LATEST = "�������";
    
    /*#####################
    ������
    #####################*/
    
    # ��������� �����
    var $_PHPSHOP_HOME_TITLE = "�����";
    var $_PHPSHOP_CART_TITLE = "�������";
    var $_PHPSHOP_CHECKOUT_TITLE = "���������� ������";
    var $_PHPSHOP_LOGIN_TITLE = "����";
    var $_PHPSHOP_LOGOUT_TITLE = "�����";
    var $_PHPSHOP_BROWSE_TITLE = "��������";
    var $_PHPSHOP_SEARCH_TITLE = "�����";
    var $_PHPSHOP_ACCOUNT_TITLE = "��������� ��������";
    var $_PHPSHOP_NAVIGATION_TITLE = "���������";
    var $_PHPSHOP_DEPARTMENT_TITLE = "�����";
    var $_PHPSHOP_INFO = "����������";
    
    var $_PHPSHOP_BROWSE_LBL = "��������";
    var $_PHPSHOP_PRODUCTS_LBL = "������";
    var $_PHPSHOP_PRODUCT_LBL = "�����";
    var $_PHPSHOP_SEARCH_LBL = "�����";
    var $_PHPSHOP_FLYPAGE_LBL = "�������� ������";
    var $_PHPSHOP_PRODUCT_SEARCH_LBL = "����� ������";
    
    var $_PHPSHOP_PRODUCT_NAME_TITLE = "�������� ������";
    var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = "��������� ������";
    var $_PHPSHOP_PRODUCT_DESC_TITLE = "��������";
    
    var $_PHPSHOP_CART_SHOW = "�������� �������";
    var $_PHPSHOP_CART_ADD_TO = "�������� � �������";
    var $_PHPSHOP_CART_NAME = "��������";
    var $_PHPSHOP_CART_SKU = "�������";
    var $_PHPSHOP_CART_PRICE = "����";
    var $_PHPSHOP_CART_QUANTITY = "���-��";
    var $_PHPSHOP_CART_SUBTOTAL = "�����";
    
    # ��������� ���������
    var $_PHPSHOP_ADD_SHIPTO_1 = "�����";
    var $_PHPSHOP_ADD_SHIPTO_2 = "����� ��������";
    var $_PHPSHOP_NO_SEARCH_RESULT = "��� �������.<br />";
    var $_PHPSHOP_PRICE_LABEL = "����: ";
    var $_PHPSHOP_ORDER_BUTTON_LABEL = "� �������!";
    var $_PHPSHOP_NO_CUSTOMER = "�� ��� �� ���������������� ��� ����������. ����������, ������� ���� ��������� ���������.";
    var $_PHPSHOP_DELETE_MSG = "�� �������, ��� ������� ������� ��� ������?";
    var $_PHPSHOP_THANKYOU = "������� �� ��� �����!";
    var $_PHPSHOP_NOT_SHIPPED = "��� �� ��������";
    var $_PHPSHOP_EMAIL_SENDTO = "������������� ������ ���� ���������� �� ����������� ����� � �����";
    var $_PHPSHOP_NO_USER_TO_SELECT = "��������, ��� �� ������ ������������, �������� ����� ���� �� �������� � ������ ������������� phpShop";
    
    // ��������� �� �������
    
    var $_PHPSHOP_ERROR = "������";
    var $_PHPSHOP_MOD_NOT_REG = "������ �� ���������������.";
    var $_PHPSHOP_MOD_ISNO_REG = "��� �� ������ phpShop.";
    var $_PHPSHOP_MOD_NO_AUTH = "� ��� ������������ ���� ��� ������� � ���������� ������.";
    var $_PHPSHOP_PAGE_404_1 = "�������� �� ����������";
    var $_PHPSHOP_PAGE_404_2 = "����������� ���� �� ������:";
    var $_PHPSHOP_PAGE_403 = "������������ ���� �������";
    var $_PHPSHOP_FUNC_NO_EXEC = "� ��� ��� ���� �� ���������� ";
    var $_PHPSHOP_FUNC_NOT_REG = "������� �� ����������������";
    var $_PHPSHOP_FUNC_ISNO_REG = " ��� �� ������� phpShop.";
    var $_PHPSHOP_ADMIN_MOD = "Admin";
    
    
    // User List
    var $_PHPSHOP_USER_LIST_MNU = "���������� ������ ������������� ";
    var $_PHPSHOP_USER_LIST_LBL = "������ �������������";
    var $_PHPSHOP_USER_LIST_USERNAME = "��� ������������";
    var $_PHPSHOP_USER_LIST_FULL_NAME = "������ ���";
    var $_PHPSHOP_USER_LIST_GROUP = "������";
    
    // User Form
    var $_PHPSHOP_USER_FORM_MNU = "�������� ������������";
    var $_PHPSHOP_USER_FORM_LBL = "��������/�������� ���������� � ������������";
    var $_PHPSHOP_USER_FORM_BILLTO_LBL = "����� ������";
    var $_PHPSHOP_USER_FORM_SHIPTO_LBL = " ������ ��������";
    var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = "�������� �����";
    var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = "����. ����� ";
    var $_PHPSHOP_USER_FORM_FIRST_NAME = "���";
    var $_PHPSHOP_USER_FORM_LAST_NAME = "�������";
    var $_PHPSHOP_USER_FORM_MIDDLE_NAME = "��������";
    var $_PHPSHOP_USER_FORM_TITLE = "���������";
    var $_PHPSHOP_USER_FORM_USERNAME = "��� ������������";
    var $_PHPSHOP_USER_FORM_PASSWORD_1 = "������";
    var $_PHPSHOP_USER_FORM_PASSWORD_2 = "������������� ������";
    var $_PHPSHOP_USER_FORM_PERMS = "�����";
    var $_PHPSHOP_USER_FORM_COMPANY_NAME = "�������� ��������";
    var $_PHPSHOP_USER_FORM_ADDRESS_1 = "����� 1";
    var $_PHPSHOP_USER_FORM_ADDRESS_2 = "����� 2";
    var $_PHPSHOP_USER_FORM_CITY = "�����";
    var $_PHPSHOP_USER_FORM_STATE = "�������/�����";
    var $_PHPSHOP_USER_FORM_ZIP = "�������� ������";
    var $_PHPSHOP_USER_FORM_COUNTRY = "������";
    var $_PHPSHOP_USER_FORM_PHONE = "�������";
    var $_PHPSHOP_USER_FORM_FAX = "����";
    var $_PHPSHOP_USER_FORM_EMAIL = "Email";

    
    // Module List
    var $_PHPSHOP_MODULE_LIST_MNU = "���������� ������ �������";
    var $_PHPSHOP_MODULE_LIST_LBL = "������ �������";
    var $_PHPSHOP_MODULE_LIST_NAME = "��� ������";
    var $_PHPSHOP_MODULE_LIST_PERMS = "����� ������";
    var $_PHPSHOP_MODULE_LIST_FUNCTIONS = "�������";
    var $_PHPSHOP_MODULE_LIST_ORDER = "������� �����������";

    // Module Form
    var $_PHPSHOP_MODULE_FORM_MNU = "�������� ������";
    var $_PHPSHOP_MODULE_FORM_LBL = " ���������� � ������";
    var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = "����� ������ (��� Topmenu)";
    var $_PHPSHOP_MODULE_FORM_NAME = "��� ������";
    var $_PHPSHOP_MODULE_FORM_PERMS = "����� ������";
    var $_PHPSHOP_MODULE_FORM_HEADER = "����� ������";
    var $_PHPSHOP_MODULE_FORM_FOOTER = "������ ����� ������";
    var $_PHPSHOP_MODULE_FORM_MENU = "�������� ������ � ���� ������?";
    var $_PHPSHOP_MODULE_FORM_ORDER = "������� �����������";
    var $_PHPSHOP_MODULE_FORM_DESCRIPTION = "�������� ������";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = "�������� ���";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = "�������� ����";
    
    // Function List
    var $_PHPSHOP_FUNCTION_LIST_MNU = "���������� �������� �������";
    var $_PHPSHOP_FUNCTION_LIST_LBL = "�������� �������";
    var $_PHPSHOP_FUNCTION_LIST_NAME = "��� �������";
    var $_PHPSHOP_FUNCTION_LIST_CLASS = "��� ������";
    var $_PHPSHOP_FUNCTION_LIST_METHOD = "����� ������";
    var $_PHPSHOP_FUNCTION_LIST_PERMS = "�����";
    
    // Module Form
    var $_PHPSHOP_FUNCTION_FORM_MNU = "�������� �������";
    var $_PHPSHOP_FUNCTION_FORM_LBL = "���������� � �������";
    var $_PHPSHOP_FUNCTION_FORM_NAME = "��� �������";
    var $_PHPSHOP_FUNCTION_FORM_CLASS = "��� ������";
    var $_PHPSHOP_FUNCTION_FORM_METHOD = "����� ������";
    var $_PHPSHOP_FUNCTION_FORM_PERMS = "����� �������";
    var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = "�������� �������";
    
    // Currency form and list
    var $_PHPSHOP_CURRENCY_LIST_MNU = "���������� �������� �����";
    var $_PHPSHOP_CURRENCY_LIST_LBL = "�������� �����";
    var $_PHPSHOP_CURRENCY_LIST_ADD = "�������� ������";
    var $_PHPSHOP_CURRENCY_LIST_NAME = "�������� ������";
    var $_PHPSHOP_CURRENCY_LIST_CODE = "��� ������";
    
    // Country form and list
    var $_PHPSHOP_COUNTRY_LIST_MNU = "���������� ��������  �����";
    var $_PHPSHOP_COUNTRY_LIST_LBL = "�������� �����";
    var $_PHPSHOP_COUNTRY_LIST_ADD = "�������� ������";
    var $_PHPSHOP_COUNTRY_LIST_NAME = "�������� ������";
    var $_PHPSHOP_COUNTRY_LIST_3_CODE = "��� ������  (3)";
    var $_PHPSHOP_COUNTRY_LIST_2_CODE = "��� ������  (2)";
    
    // State form and list
    var $_PHPSHOP_STATE_LIST_MNU = "���������� �������� ������";
    var $_PHPSHOP_STATE_LIST_LBL = "�������� ������ ���: ";
    var $_PHPSHOP_STATE_LIST_ADD = "��������/�������� ����";
    var $_PHPSHOP_STATE_LIST_NAME = "�������� �����";
    var $_PHPSHOP_STATE_LIST_3_CODE = "��� ����� (3)";
    var $_PHPSHOP_STATE_LIST_2_CODE = "��� ����� (2)";

    /*#####################
    MODULE CHECKOUT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADDRESS = "�����";
    var $_PHPSHOP_CONTINUE = "����������";
    
    # Some messages
    var $_PHPSHOP_EMPTY_CART = "���� ������� �����.";
    
    
    /*#####################
    MODULE ISShipping
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ISSHIPPING_MOD = "����������";
    
    
    // Shipping Ping
   var $_PHPSHOP_ISSHIP_PING_MNU = "��������� ������ �����������";
   var $_PHPSHOP_ISSHIP_PING_LBL = "���� ������� ����������� ";
   var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = "���� ������� ����������� �� ������";
   var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = "���� ������� ����������� ����������";
   var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = "�������";
   var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = "�����<br/>������";
   var $_PHPSHOP_ISSHIP_PING_TIME_LBL = "���.";
    
    // Shipping List
    var $_PHPSHOP_ISSHIP_LIST_MNU = "���������� ������ �������� ��������";
    var $_PHPSHOP_ISSHIP_LIST_LBL = "��������� ������� ��������";
    var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = "������� ��������";
    var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = "��������";
    var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = "����� �� ��������� �����";
    var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = "Lead Time";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = "������������� �����";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = "�������";
    var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = "����";
    var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = "������� �����";
    
    // Dynamic Shipping Form
    var $_PHPSHOP_ISSHIP_FORM_MNU = "���������������� ������� ��������";
    var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = "�������� ������� ��������";
    var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = "���������������� ������ ��������";
    var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = "��������";
    var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = "������ ��������";
    var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = "��������������";
    var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = "����� �� ��������� �����";
    var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = "Lead Time";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = "������������� �����";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = "�������";
    var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = "����";
    var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = "������� �����";
    
    
    
    /*#####################
    MODULE ORDER
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_ORDER_MOD = "������";
    
    // Some menu options 
    var $_PHPSHOP_ORDER_CONFIRM_MNU = "����������� �����";
    var $_PHPSHOP_ORDER_CANCEL_MNU = "�������� �����";
    var $_PHPSHOP_ORDER_PRINT_MNU = "����������� �����";
    var $_PHPSHOP_ORDER_DELETE_MNU = "������� �����";
    
    // Order List
    var $_PHPSHOP_ORDER_LIST_MNU = "���������� �������� �������";
    var $_PHPSHOP_ORDER_LIST_LBL = "�������� �������";
    var $_PHPSHOP_ORDER_LIST_ID = "����� ������";
    var $_PHPSHOP_ORDER_LIST_CDATE = "���� ������";
    var $_PHPSHOP_ORDER_LIST_MDATE = "��������� ���������";
    var $_PHPSHOP_ORDER_LIST_STATUS = "������";
    var $_PHPSHOP_ORDER_LIST_TOTAL = "����� �����";
    var $_PHPSHOP_ORDER_ITEM = "����� � ������";
    
    // Order print
    var $_PHPSHOP_ORDER_PRINT_PO_LBL =  "�������� �����";
    var $_PHPSHOP_ORDER_PRINT_PO_NUMBER =  "����� ������";
    var $_PHPSHOP_ORDER_PRINT_PO_DATE =  "���� ������";
    var $_PHPSHOP_ORDER_PRINT_PO_STATUS =  "������ ������";
    var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL =  "���������� � �������";
    var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL =  "��������� ����������";
    var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL =  "���������� � ��������";
    var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL =  "����������";
    var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL =  "����� ��������";
    var $_PHPSHOP_ORDER_PRINT_NAME =  "���";
    var $_PHPSHOP_ORDER_PRINT_COMPANY =  "������������ ��������";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 =  "����� 1";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 =  "����� 2";
    var $_PHPSHOP_ORDER_PRINT_CITY =  "�����";
    var $_PHPSHOP_ORDER_PRINT_STATE =  "�������/�����";
    var $_PHPSHOP_ORDER_PRINT_ZIP =  "�������� ������";
    var $_PHPSHOP_ORDER_PRINT_COUNTRY =  "������";
    var $_PHPSHOP_ORDER_PRINT_PHONE =  "�������";
    var $_PHPSHOP_ORDER_PRINT_FAX =  "����";
    var $_PHPSHOP_ORDER_PRINT_EMAIL =  "Email";
    var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL =  "����� � ������";
    var $_PHPSHOP_ORDER_PRINT_QUANTITY =  "����������";
    var $_PHPSHOP_ORDER_PRINT_QTY =  "���-��";
    var $_PHPSHOP_ORDER_PRINT_SKU =  "�������";
    var $_PHPSHOP_ORDER_PRINT_PRICE =  "����";
    var $_PHPSHOP_ORDER_PRINT_TOTAL =  "�����";
    var $_PHPSHOP_ORDER_PRINT_SUBTOTAL =  "�������";
    var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX =  "����� ������";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING =  "��������";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX =  "����� �� ��������";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL =  "������ ������";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME =  "������������ ��������";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER =  "����� ��������";
    var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE =  "���� ��������� �����";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL =  "������� ��������";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL =  "���������� �� ��������";
    var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL =  "��������� ����������";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL =  "����������";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL =  "������ ��������";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL =  "���� ��������";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL =  "��������� ��������";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_MNU =  "���������� ���� ��������� ������";
    var $_PHPSHOP_ORDER_STATUS_FORM_MNU =  "�������� ��� ��������� ������";

    var $_PHPSHOP_ORDER_STATUS_LIST_CODE =  "��� ��������� ������";
    var $_PHPSHOP_ORDER_STATUS_LIST_NAME =  "������������ ��������� ������";

    var $_PHPSHOP_ORDER_STATUS_FORM_LBL =  "��������� ������";
    var $_PHPSHOP_ORDER_STATUS_FORM_CODE =  "��� ��������� ������";
    var $_PHPSHOP_ORDER_STATUS_FORM_NAME =  "������������ ��������� ������";
    var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER =  "������� �����������";

    /*#####################
    MODULE PRODUCT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_PRODUCT_MOD = "������";
    
    var $_PHPSHOP_CURRENT_PRODUCT = "������� �����";
    var $_PHPSHOP_CURRENT_ITEM = "������� ������";
    
    // Product Inventory
    var $_PHPSHOP_PRODUCT_INVENTORY_LBL =  "����������� �������";
    var $_PHPSHOP_PRODUCT_INVENTORY_MNU =  "�������� ������������";
    var $_PHPSHOP_PRODUCT_INVENTORY_PRICE =  "����";
    var $_PHPSHOP_PRODUCT_INVENTORY_STOCK =  "�����";
    var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT =  "���";
    // Product List
    var $_PHPSHOP_PRODUCT_LIST_MNU =  "���������� ������";
    var $_PHPSHOP_PRODUCT_LIST_LBL =  "������ �������";
    var $_PHPSHOP_PRODUCT_LIST_NAME =  "������������ ������";
    var $_PHPSHOP_PRODUCT_LIST_SKU =  "�������";
    var $_PHPSHOP_PRODUCT_LIST_PUBLISH =  "������������";
    
    // Product Form
    var $_PHPSHOP_PRODUCT_FORM_MNU =  "�������� �����";
    var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT =  "������������� ���� �����";
    var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE =  "����������� �������� ���������� � ������ � ��������";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU =  "�������� ������";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU =  "�������� ������ ������";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL =  "����� �����";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL =  "�������� ������ � ������";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL =  "���������� � ������";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL =  "��������� ������";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL =  "�������� ������ � ���";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL =  "����������� ������";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL =  "����� ������";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL =  "�������� ������";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL =  "���������� �� �������";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL =  "��������� �������";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL =  "�������� � ��� �������";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL =  "����������� �������";
    var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL =  "��������� � ������������� ������";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL =  "����� �������� ������� �����������, ������� ���� � ������ �����";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL =  "������� ������� �����������.";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL =  "������� ������";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL =  "�������� �������";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG =  "�� �������, ��� ������ ������� ���� �����\\n� ������ ��������� � ���?";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG =  "�� �������, ��� ������ ������� ���� ������?";
    var $_PHPSHOP_PRODUCT_FORM_VENDOR =  "���������";
    var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = "�������������";
    var $_PHPSHOP_PRODUCT_FORM_SKU =  "�������";
    var $_PHPSHOP_PRODUCT_FORM_NAME =  "��������";
    var $_PHPSHOP_PRODUCT_FORM_URL =  "URL";
    var $_PHPSHOP_PRODUCT_FORM_CATEGORY =  "���������";
    var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = "���� ������ (������)";
    var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = "���� ������ (�����)";
    var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION =  "�������� ������";
    var $_PHPSHOP_PRODUCT_FORM_S_DESC =  "������� ��������";
    var $_PHPSHOP_PRODUCT_FORM_IN_STOCK =  "� �������";
    var $_PHPSHOP_PRODUCT_FORM_ON_ORDER =  "�� ������";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE =  "���� ����� ����� � �������";
    var $_PHPSHOP_PRODUCT_FORM_SPECIAL =  "�� ����. ��������";
    var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE =  "��� ������";
    var $_PHPSHOP_PRODUCT_FORM_PUBLISH =  "������������?";
    var $_PHPSHOP_PRODUCT_FORM_LENGTH =  "�����";
    var $_PHPSHOP_PRODUCT_FORM_WIDTH =  "������";
    var $_PHPSHOP_PRODUCT_FORM_HEIGHT =  "������";
    var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM =  "��. ���������";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT =  "���";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM =  "��. ���������";
    var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE =  "����������� �����������";
    var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE =  "�������������� �����������";
    
    // Product Display
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL =  "���������� ���������� ������";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL =  "���������� ���������� ������";
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL =  "���������� ���������� �������";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL =  "���������� ���������� �������";
    var $_PHPSHOP_PRODUCT_CSV_UPLOAD =  "������������ �������� CSV";
    var $_PHPSHOP_PRODUCT_FOLDERS =  "--����� ������-- ������ ������� � ���� ������";
    
    // Product Category List
    var $_PHPSHOP_CATEGORY_LIST_MNU = "���������� ���������";
    var $_PHPSHOP_CATEGORY_LIST_LBL = "������ ���������";
    
    // Product Category Form
    var $_PHPSHOP_CATEGORY_FORM_MNU =  "�������� ���������";
    var $_PHPSHOP_CATEGORY_FORM_LBL =  "���������� � ���������";
    var $_PHPSHOP_CATEGORY_FORM_NAME =  "������������ ���������";
    var $_PHPSHOP_CATEGORY_FORM_PARENT =  "������������ ���������";
    var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION =  "�������� ���������";
    var $_PHPSHOP_CATEGORY_FORM_PUBLISH =  "������������?";
    var $_PHPSHOP_CATEGORY_FORM_FLYPAGE =  "�������� ��������� ���������";
    
    // Product Attribute List
    var $_PHPSHOP_ATTRIBUTE_LIST_MNU =  "���������� ��������";
    var $_PHPSHOP_ATTRIBUTE_LIST_LBL =  "������ ������� ���";
    var $_PHPSHOP_ATTRIBUTE_LIST_NAME =  "������������ ��������";
    var $_PHPSHOP_ATTRIBUTE_LIST_ORDER =  "������� �����������";
    
    // Product Attribute Form
    var $_PHPSHOP_ATTRIBUTE_FORM_MNU =  "�������� ��������";
    var $_PHPSHOP_ATTRIBUTE_FORM_LBL =  "����� ��������";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT =  "����� �������� ��� ������";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT =  "�������� �������� ������";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM =  "����� �������� �������";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM =  "�������� �������� �������";
    var $_PHPSHOP_ATTRIBUTE_FORM_NAME =  "������������ ��������";
    var $_PHPSHOP_ATTRIBUTE_FORM_ORDER =  "������� �����������";
    
    // Product Price List
    var $_PHPSHOP_PRICE_LIST_MNU =  "���������� ����";
    var $_PHPSHOP_PRICE_LIST_LBL =  "������ ���";
    var $_PHPSHOP_PRICE_LIST_FOR_LBL =  "���� ��";
    var $_PHPSHOP_PRICE_LIST_GROUP_NAME =  "������������ ������";
    var $_PHPSHOP_PRICE_LIST_PRICE =  "����";
    var $_PHPSHOP_PRODUCT_LIST_CURRENCY =  "������";
    
    // Product Price Form
    var $_PHPSHOP_PRICE_FORM_MNU =  "�������� ����";
    var $_PHPSHOP_PRICE_FORM_LBL =  "���������� � ����";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT =  "����� ���� ������";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT =  "�������� ���� ������";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM =  "����� ���� �������";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM =  "�������� ���� �������";
    var $_PHPSHOP_PRICE_FORM_PRICE =  "����";
    var $_PHPSHOP_PRICE_FORM_CURRENCY =  "������";
    var $_PHPSHOP_PRICE_FORM_GROUP =  "������ ����������";

    /*#####################
    MODULE REPORT BASIC
    #####################*/
    # Some LABELs
    var $_PHPSHOP_REPORTBASIC_MOD =  "�������� �����";
    var $_PHPSHOP_RB_INDIVIDUAL =  "�������������� �������� ������";
    var $_PHPSHOP_RB_SALE_TITLE =  "����� � ��������";
    
    /* labels for rpt_sales */
    var $_PHPSHOP_RB_SALES_PAGE_TITLE =  "����� ������";

    var $_PHPSHOP_RB_INTERVAL_TITLE =  "���������� ��������";
    var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE =  "����������";
    var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE =  "�����������";
    var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE =  "���������";
    
    var $_PHPSHOP_RB_THISMONTH_BUTTON =  "������� �����";
    var $_PHPSHOP_RB_LASTMONTH_BUTTON =  "��������� �����";
    var $_PHPSHOP_RB_LAST60_BUTTON =  "��������� 60 ����";
    var $_PHPSHOP_RB_LAST90_BUTTON =  "��������� 90 ����";
    
    var $_PHPSHOP_RB_START_DATE_TITLE =  "������";
    var $_PHPSHOP_RB_END_DATE_TITLE =  "�����";
    var $_PHPSHOP_RB_SHOW_SEL_RANGE =  "�������� ��������� �������";
    var $_PHPSHOP_RB_REPORT_FOR =  "����� �� ";
    var $_PHPSHOP_RB_DATE =  "����";
    var $_PHPSHOP_RB_ORDERS =  "������";
    var $_PHPSHOP_RB_TOTAL_ITEMS =  "����� ���-�� ��������� ��������";
    var $_PHPSHOP_RB_REVENUE =  "�������";
    var $_PHPSHOP_RB_PRODLIST =  "������� �������";
    
    
    
    /*#####################
    MODULE SHOP
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOP_MOD =  "�������";
    var $_PHPSHOP_PRODUCT_THUMB_TITLE =  "�����������";
    var $_PHPSHOP_PRODUCT_PRICE_TITLE =  "����";
    var $_PHPSHOP_ORDER_STATUS_P =  "�������������";
    var $_PHPSHOP_ORDER_STATUS_C =  "�������������";
    var $_PHPSHOP_ORDER_STATUS_X =  "����������";
    
    
    # Some messages
    var $_PHPSHOP_ORDER_BUTTON = "�����";
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOPPER_MOD = "����������";
    
    
    
    // Shopper List
    var $_PHPSHOP_SHOPPER_LIST_MNU =  "���������� �����������";
    var $_PHPSHOP_SHOPPER_LIST_LBL =  "������ ����������";
    var $_PHPSHOP_SHOPPER_LIST_USERNAME =  "��� ������������";
    var $_PHPSHOP_SHOPPER_LIST_NAME =  "������ ���";
    var $_PHPSHOP_SHOPPER_LIST_GROUP =  "������";
    
    // Shopper Form
    var $_PHPSHOP_SHOPPER_FORM_MNU =  "�������� ����������";
    var $_PHPSHOP_SHOPPER_FORM_LBL =  "���������� � ����������";
    var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL =  "��������� ����������";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL =  "����������";
    var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL =  "���������� �� ��������";
    var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL =  "�������� �����";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL =  "����������� ������";
    var $_PHPSHOP_SHOPPER_FORM_USERNAME =  "��� ������������";
    var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME =  "���";
    var $_PHPSHOP_SHOPPER_FORM_LAST_NAME =  "�������";
    var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME =  "��������";
    var $_PHPSHOP_SHOPPER_FORM_TITLE =  "���������";
    var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME =  "��� ����������";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 =  "������";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 =  "����������� ������";
    var $_PHPSHOP_SHOPPER_FORM_GROUP =  "������ ����������";
    var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME =  "������������ ��������";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 =  "����� 1";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 =  "����� 2";
    var $_PHPSHOP_SHOPPER_FORM_CITY =  "�����";
    var $_PHPSHOP_SHOPPER_FORM_STATE =  "�������/�����";
    var $_PHPSHOP_SHOPPER_FORM_ZIP =  "�������� ������";
    var $_PHPSHOP_SHOPPER_FORM_COUNTRY =  "������";
    var $_PHPSHOP_SHOPPER_FORM_PHONE =  "�������";
    var $_PHPSHOP_SHOPPER_FORM_FAX =  "����";
    var $_PHPSHOP_SHOPPER_FORM_EMAIL =  "Email";
    
    // Shopper Group List
    var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU =  "���������� ������ �����������";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL =  "������ ����� �����������";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME =  "������������ ������";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION =  "�������� ������";
    
    
    // Shopper Group Form
    var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL =  "����� ������ �����������";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU =  "�������� ������ �����������";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME =  "������������ ������";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC =  "�������� ������";

    /*#####################
    MODULE SHOPPER - ������ ����������
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_STORE_MOD = "�������";
    
    
    // Store Form
    var $_PHPSHOP_STORE_FORM_MNU = "������������� �������";
    var $_PHPSHOP_STORE_FORM_LBL = "���������� � ��������";
    var $_PHPSHOP_STORE_FORM_CONTACT_LBL = "���������� ����������";
    var $_PHPSHOP_STORE_FORM_FULL_IMAGE = "��������-�������";
    var $_PHPSHOP_STORE_FORM_UPLOAD = "��������� ��������";
    var $_PHPSHOP_STORE_FORM_STORE_NAME = "�������� ��������";
    var $_PHPSHOP_STORE_FORM_COMPANY_NAME = "�������� ��������, ������� ����������� �������";
    var $_PHPSHOP_STORE_FORM_ADDRESS_1 = "���� ��� ������ 1";
    var $_PHPSHOP_STORE_FORM_ADDRESS_2 = "���� ��� ������ 2";
    var $_PHPSHOP_STORE_FORM_CITY = "�����";
    var $_PHPSHOP_STORE_FORM_STATE = "�������/�����/������";
    var $_PHPSHOP_STORE_FORM_COUNTRY = "������";
    var $_PHPSHOP_STORE_FORM_ZIP = "�������� ������";
    var $_PHPSHOP_STORE_FORM_PHONE = "�������";
    var $_PHPSHOP_STORE_FORM_CURRENCY = "������";
    var $_PHPSHOP_STORE_FORM_CATEGORY = "��������� ��������";
    var $_PHPSHOP_STORE_FORM_LAST_NAME = "�������";
    var $_PHPSHOP_STORE_FORM_FIRST_NAME = "���";
    var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = "��������";
    var $_PHPSHOP_STORE_FORM_TITLE = "�����";
    var $_PHPSHOP_STORE_FORM_PHONE_1 = "������� 1";
    var $_PHPSHOP_STORE_FORM_PHONE_2 = "������� 2";
    var $_PHPSHOP_STORE_FORM_FAX = "����";
    var $_PHPSHOP_STORE_FORM_EMAIL = "Email";
    var $_PHPSHOP_STORE_FORM_IMAGE_PATH = "���� � ��������";
    var $_PHPSHOP_STORE_FORM_DESCRIPTION = "��������";
    
    
    
    var $_PHPSHOP_PAYMENT = "������";
    // Payment Method List
    var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = "������ �������� ������";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = "������ �������� ������";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = "��������";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = "���";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = "������";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = "������ �����������";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = "��� ������� ������";
    
    // Payment Method Form
    var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = "�������� ������ ������";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = "����� ������� ������";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = "�������� ������� ������";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = "������ �����������";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = "������";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = "���";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = "������� ������";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = "��� ������� ������";
    
    
    
    /*#####################
    MODULE TAX - ������ ������� � ������
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_TAX_MOD = "�����";
    
    // User List
    var $_PHPSHOP_TAX_RATE = "��������� ������";
    var $_PHPSHOP_TAX_LIST_MNU = "������ ��������� ������";
    var $_PHPSHOP_TAX_LIST_LBL = "������ ��������� ������";
    var $_PHPSHOP_TAX_LIST_STATE = "�������/������";
    var $_PHPSHOP_TAX_LIST_COUNTRY = "������";
    var $_PHPSHOP_TAX_LIST_RATE = "��������� ������";
    
    // User Form
    var $_PHPSHOP_TAX_FORM_MNU = "�������� ��������� ������";
    var $_PHPSHOP_TAX_FORM_LBL = "�������� ����������� � ������";
    var $_PHPSHOP_TAX_FORM_STATE = "�������/������";
    var $_PHPSHOP_TAX_FORM_COUNTRY = "������";
    var $_PHPSHOP_TAX_FORM_RATE = "��������� ������ (��� 16% => ������� 0.16)";

    /*#####################
    MODULE VENDOR - ������ ����������-�������� - ���� �����-������,
                    ������ ������ �� ������������  �� �����������.
    #####################*/
    
    
    
    # ��������� �����������
    var $_PHPSHOP_VENDOR_MOD = "��������";
    var $_PHPSHOP_VENDOR_ADMIN = "��������";
    
    
    // ������ ���������
    var $_PHPSHOP_VENDOR_LIST_MNU = "������ ���������";
    var $_PHPSHOP_VENDOR_LIST_LBL = "������ ���������";
    var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = "��������";
    var $_PHPSHOP_VENDOR_LIST_ADMIN = "�����������������";
    
    // ����� ���������
    var $_PHPSHOP_VENDOR_FORM_MNU = "�������� ��������";
    var $_PHPSHOP_VENDOR_FORM_LBL = "�������� ����������";
    var $_PHPSHOP_VENDOR_FORM_INFO_LBL = "���������� � ��������";
    var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = "���������� ����������";
    var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = "������ �����������";
    var $_PHPSHOP_VENDOR_FORM_UPLOAD = "��������� �����������";
    var $_PHPSHOP_VENDOR_FORM_STORE_NAME = "����� ��������";
    var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = "�������� ��������";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = "����� 1";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = "����� 2";
    var $_PHPSHOP_VENDOR_FORM_CITY = "�����";
    var $_PHPSHOP_VENDOR_FORM_STATE = "�������/�����";
    var $_PHPSHOP_VENDOR_FORM_COUNTRY = "������";
    var $_PHPSHOP_VENDOR_FORM_ZIP = "������";
    var $_PHPSHOP_VENDOR_FORM_PHONE = "�������";
    var $_PHPSHOP_VENDOR_FORM_CURRENCY = "������";
    var $_PHPSHOP_VENDOR_FORM_CATEGORY = "��������� ��������";
    var $_PHPSHOP_VENDOR_FORM_LAST_NAME = "�������";
    var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = "���";
    var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = "��������";
    var $_PHPSHOP_VENDOR_FORM_TITLE = "��������";
    var $_PHPSHOP_VENDOR_FORM_PHONE_1 = "������� 1";
    var $_PHPSHOP_VENDOR_FORM_PHONE_2 = "������� 2";
    var $_PHPSHOP_VENDOR_FORM_FAX = "����";
    var $_PHPSHOP_VENDOR_FORM_EMAIL = "Email";
    var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = "���� �����������";
    var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = "��������";
    
    
    // ������ ��������� ���������
    var $_PHPSHOP_VENDOR_CAT_LIST_MNU = "������ ��������� ���������";
    var $_PHPSHOP_VENDOR_CAT_LIST_LBL = "������ ��������� ���������";
    var $_PHPSHOP_VENDOR_CAT_NAME = "���������";
    var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = "�������� ���������";
    var $_PHPSHOP_VENDOR_CAT_VENDORS = "��������";
    
    // ����� ��������� ���������
    var $_PHPSHOP_VENDOR_CAT_FORM_MNU = "�������� ��������� ���������";
    var $_PHPSHOP_VENDOR_CAT_FORM_LBL = "����� ��������� ���������";
    var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = "���������� � ���������";
    var $_PHPSHOP_VENDOR_CAT_FORM_NAME = "���������";
    var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = "�������� ���������";
    
    /*#####################
    MODULE MANUFACTURER - ������ �������������
    #####################*/

    # ��������� �����������
    var $_PHPSHOP_MANUFACTURER_MOD = "�������������"; //Manufacturer
    var $_PHPSHOP_MANUFACTURER_ADMIN = "�������������"; //Manufacturers
    
    
    // Manufacturer List
    var $_PHPSHOP_MANUFACTURER_LIST_MNU = "������ ��������������"; //List Manufacturers
    var $_PHPSHOP_MANUFACTURER_LIST_LBL = "������ ��������������"; //Manufacturer List
    var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = "�������� �������������"; //Manufacturer Name
    var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = "�����������������"; //Admin
    
    // Manufacturer Form
    var $_PHPSHOP_MANUFACTURER_FORM_MNU = "�������� �������������"; //Add Manufacturer
    var $_PHPSHOP_MANUFACTURER_FORM_LBL = "�������� ����������"; //Add Information
    var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = "���������� �������������"; //Manufacturer Information
    var $_PHPSHOP_MANUFACTURER_FORM_NAME = "�������� �������������"; //Manufacturer Name
    var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = "��������� �������������"; //Manufacturer Category
    var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = "Email";
    var $_PHPSHOP_MANUFACTURER_FORM_URL = "������ �� ���� �������������"; //URL to Manufacturer Homepage
    var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = "��������"; //Description
    
    
    // Manufacturer Category List
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = "������ ��������� ��������������"; //List Manufacturer Categories
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = "������ ��������� ��������������"; //Manufacturer Category List
    var $_PHPSHOP_MANUFACTURER_CAT_NAME = "�������� ���������"; //Category Name
    var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = "�������� ���������"; //Category Description
    var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = "�������������"; //Manufacturers
    
    // Manufacturer Category Form
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = "�������� ��������� �������������"; //Add Manufacturer Category
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = "����� ��������� �������������"; //Manufacturer Category Form
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = "���������� � ���������"; //Category Information
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = "�������� ���������"; //Category Name
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = "�������� ���������"; //Category Description
    /*#####################
    Modul HELP
    #####################*/
    var $_PHPSHOP_HELP_MOD = "������";
    
    // 210104 start
    
    var $_PHPSHOP_CART_ACTION = "��������";
    var $_PHPSHOP_CART_UPDATE = "�������� �������";
    var $_PHPSHOP_CART_DELETE = "������� ����� �� �������";
    
    //shopbrowse form
    
    var $_PHPSHOP_PRODUCT_PRICETAG =  "����";
    var $_PHPSHOP_PRODUCT_CALL =  "--���������, ����� �������� ����-- ��� ��������� ����, ��������� � ����";
    var $_PHPSHOP_PRODUCT_PREVIOUS =  "����������";
    var $_PHPSHOP_PRODUCT_NEXT =  "���������";
    
    //ro_basket
    
    var $_PHPSHOP_CART_TAX =  "�����";
    var $_PHPSHOP_CART_SHIPPING =  "--���� �� ��������-- ��������� ��������";
    var $_PHPSHOP_CART_TOTAL =  "�����";
    
    //CHECKOUT.INDEX
    
    var $_PHPSHOP_CHECKOUT_NEXT =  "���������";
    var $_PHPSHOP_CHECKOUT_REGISTER =  "������������������";
    
    //CHECKOUT.CONFIRM
    
    var $_PHPSHOP_CHECKOUT_CONF_BILLINFO =  "��������� ����������";
    var $_PHPSHOP_CHECKOUT_CONF_COMPANY =  "��������";
    var $_PHPSHOP_CHECKOUT_CONF_NAME =  "���";
    var $_PHPSHOP_CHECKOUT_CONF_ADDRESS =  "�����";
    var $_PHPSHOP_CHECKOUT_CONF_PHONE =  "�������";
    var $_PHPSHOP_CHECKOUT_CONF_FAX =  "����";
    var $_PHPSHOP_CHECKOUT_CONF_EMAIL =  "Email";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO =  "���������� � ��������";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY =  "��������";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME =  "���";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS =  "�����";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE =  "�������";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX =  "����";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO =  "��������� ����������";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD =  "��� � ������� �� ��������� �����";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD =  "����� ������";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM =  "����� ��������� �����";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE =  "���� �������� �����";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER =  "��������� �����";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO =  "������������ ���������� ��� ������ ��������� ������";
    
    
    var $_PHPSHOP_ZONE_MOD =  "���� ��������";

    var $_PHPSHOP_ZONE_LIST_MNU =  "���������� ����";
    var $_PHPSHOP_ZONE_FORM_MNU =  "�������� ����";
    var $_PHPSHOP_ZONE_ASSIGN_MNU =  "��������� ����";
    
    // assign zone List
    var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL =  "������";
    var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL =  "������� ����";
    var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL =  "��������� ����";
    var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL =  "��������";
    var $_PHPSHOP_ASSIGN_ZONE_PG_LBL =  "��������� ����";
    
    // zone Form
    var $_PHPSHOP_ZONE_FORM_NAME_LBL =  "�������� ����";
    var $_PHPSHOP_ZONE_FORM_DESC_LBL =  "�������� ����";
    var $_PHPSHOP_ZONE_FORM_COST_PER_LBL =  "��������� ��������� �� ������";
    var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL =  "����� ��������� ����";
    
    // List of zones
    var $_PHPSHOP_ZONE_LIST_LBL =  "������ ���";
    var $_PHPSHOP_ZONE_LIST_NAME_LBL =  "�������� ����";
    var $_PHPSHOP_ZONE_LIST_DESC_LBL =  "�������� ����";
    var $_PHPSHOP_ZONE_LIST_COST_PER_LBL =  "��������� ��������� �� ������";
    var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL =  "����� ��������� ����";
    
    var $_PHPSHOP_LOGIN_FIRST = "����������, ������� ����������������� �� ���� ����� (����������� ������ �����).<br>�������.";
    var $_PHPSHOP_STORE_FORM_TOS = "������� ������";
    var $_PHPSHOP_AGREE_TO_TOS = "����������, ������� ������� ���� ������� ������.";
    var $_PHPSHOP_I_AGREE_TO_TOS = "� ���������� � ������� ��������� ������";
    
    var $_PHPSHOP_LEAVE_BLANK = "(�������� ������, ���� � ���<br />��� ��� ����� ���������� php �����!)";
    var $_PHPSHOP_RETURN_LOGIN = "���������� �������: ���������� �������� �����������";
    var $_PHPSHOP_NEW_CUSTOMER = "����� ������? ���������� ������������ ���� ��������� ����������";
    var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = "������� �������:";
    var $_PHPSHOP_ACC_ORDER_INFO = "���������� � ������";
    var $_PHPSHOP_ACC_UPD_BILL = "����� �� ������ �������� ���� ��������� ����������.";
    var $_PHPSHOP_ACC_UPD_SHIP = "����� �� ������ �������� ��� �������� ����� ��������.";
    var $_PHPSHOP_ACC_ACCOUNT_INFO = "���������� �� ��������";
    var $_PHPSHOP_ACC_SHIP_INFO = "���������� � ��������";
    var $_PHPSHOP_ACC_NO_ORDERS = "��� �������";
    var $_PHPSHOP_ACC_BILL_DEF = "- �� ��������� (��� �� ��� � ���������)";
    var $_PHPSHOP_SHIPTO_TEXT = "�� ������ �������� ������ �������� � ��� �������. ���������� ���������� ���������� ����������� ��� ��� ��� ������� �������� ������� �� �������� ����.";
    var $_PHPSHOP_CONFIG = "������������";
    var $_PHPSHOP_USERS = "������������";
    var $_PHPSHOP_IS_CC_PAYMENT = "������ ��������� ������?";
    /*#####################################################
     MODULE SHIPPING - ������ ��������
    #######################################################*/
    var $_PHPSHOP_SHIPPING_MOD = "��������";
    var $_PHPSHOP_SHIPPING_MENU_LABEL = "��������";
    
    var $_PHPSHOP_CARRIER_LIST_MNU = "������ ��������";
    var $_PHPSHOP_CARRIER_LIST_LBL = "������ ����� ��������";
    var $_PHPSHOP_RATE_LIST_MNU = "������ ��������";
    var $_PHPSHOP_RATE_LIST_LBL = "������ ������� ��������";
    var $_PHPSHOP_CARRIER_LIST_NAME_LBL = "��������";
    var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = "������� ������";
    
    var $_PHPSHOP_CARRIER_FORM_MNU = "������� ������ ��������";
    var $_PHPSHOP_CARRIER_FORM_LBL = "��������������/�������� ������ ��������";
    var $_PHPSHOP_RATE_FORM_MNU = "������� ����� ��������";
    var $_PHPSHOP_RATE_FORM_LBL = "��������������/�������� ������ ��������";
    
    var $_PHPSHOP_RATE_FORM_NAME = "�������� ������ ��������";
    var $_PHPSHOP_RATE_FORM_CARRIER = "������ ��������";
    var $_PHPSHOP_RATE_FORM_COUNTRY = "������";
    var $_PHPSHOP_RATE_FORM_ZIP_START = "������ ��������� �������� ��������";
    var $_PHPSHOP_RATE_FORM_ZIP_END = "����� ��������� �������� ��������";
    var $_PHPSHOP_RATE_FORM_WEIGHT_START = "���������� ���";
    var $_PHPSHOP_RATE_FORM_WEIGHT_END = "���������� ���";
    var $_PHPSHOP_RATE_FORM_VALUE = "���������";
    var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = "��������� ����� ��������";
    var $_PHPSHOP_RATE_FORM_CURRENCY = "������";
    var $_PHPSHOP_RATE_FORM_VAT_ID = "���";
    var $_PHPSHOP_RATE_FORM_LIST_ORDER = "������� ������";
    
    var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = "������ ��������";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = "�������� ������ ��������";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = "��� �� ...";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = "... ��";
    var $_PHPSHOP_CARRIER_FORM_NAME = "�������� ������ ��������";
    var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = "������� ������";
    
    var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = "������: ����� ������������� ������ �������� ��� ����������.";
    var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = "������: �������� ������ ��������.";
    var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = "������: ����� ��������� ������ �������� ������� ��������� � ��� ������ ��������.";
    var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = "������: ���������� ����� ������ �������� � ����� ���������������.";
    
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = "������: �������� ������ ��������.";
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = "������: ���������� ����� ������ �������� � ����� ���������������.";
    var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = "������: ���������� ������ �������� ������.";
    var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = "������: ������� ������� ������ ����������. ��� �������� ���������� ����� ����������� ����������� \";\".";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = "������: ���������� ������� ���������� ���";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = "������: ���������� ������� ���������� ���";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = "������: ���������� ��� ������ ���� ������ �����������";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = "������: ���������� ������� ��������� ��������";
    var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = "������: �������� ������";
    
    var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = "������: ���������� ������� ����� ��������";
    
    var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = "����������, ��������";
    var $_PHPSHOP_INFO_MSG_CARRIER = "������ ��������";
    var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = "����� ��������";
    var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = "���������";
    var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = "0 (-���-)";
    /*#####################################################
     END: MODULE SHIPPING - ����� ������ ��������
    #######################################################*/
    
    var $_PHPSHOP_PAYMENT_FORM_CC = "��������� �����";
    var $_PHPSHOP_PAYMENT_FORM_USE_PP = "������������ ��������� ���������. Use Payment Processor";
    var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = "����. Bank debit";
    var $_PHPSHOP_PAYMENT_FORM_AO = "������ ����� / ������ ��� ���������";
    var $_PHPSHOP_CHECKOUT_MSG_2 = "����������, �������� ����� ��������!";
    var $_PHPSHOP_CHECKOUT_MSG_3 = "����������, �������� ������ ��������!";
    var $_PHPSHOP_CHECKOUT_MSG_4 = "����������, �������� ������ ������!";
    var $_PHPSHOP_CHECKOUT_MSG_99 = "����������, ��������� ��������� ������ � ����������� �����!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = "����������, �������� ������ ��������.";
    var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = "����������, �������� ������ ������ ��������.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = "����������, �������� ������ ������.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = "����������, ������� ����� ����� ��������� �����.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = "����������, ������� ���, ��������� �� ��������� �����.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = "��������� ����� ��������� ����� ��������������.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = "����������, ������� ����� ��������� ����� �������� ��������� �����.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = "����������, ������� ��� ��������� ����� �������� ��������� �����.";
    var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = "������������ ���� ��������� ����� �������� �����.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = "����������, �������� ����� ��������.";
    var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = "������������ ����� ��������� �����. Invalid account number.";
    var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = "���� ������� �����!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = "������: ����������, �������� ������ ��������!";
    var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = "������: �� ������ ��������� ����� ��������!";
    var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = "������: �� ������ ��� ����� ��������!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = "������: ����������� ������ ��������� �����...";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = "������: �� ������ ����� ��������� �����!";
    var $_PHPSHOP_CHECKOUT_ERR_TEST = "��������, �� ��������� ����� ��������� ����� �������� ��������!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = "������������� ������������ user_id �� ������ � ���� ������!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = "�� �� ������������ ��� ��������� ������ ����������� �����.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = "�� �� ������������ IBAN ������ �����.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = "�� �� ������������ ����� ������ ����������� �����.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = "�� �� ������������ ��� ������ �����. You have actually not provided your bank sort code.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = "�� �� ������������ �������� ������ �����.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = "��� ������ ���������� ���������� ��������!";

    var $_PHPSHOP_CHECKOUT_MSG_LOG = "�������� ���������� ��������� ��� ���������� ���������.<br />";
    
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = "����������� ����� ������ ��� �� ����������.";
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = "����������� ����� ������:";
    var $_PHPSHOP_CHECKOUT_PAYMENT_CC = "������ ��������� ������";
    var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = "������ ������� ������";
    var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = "����������, �������� ������ ������:";
    
    var $_PHPSHOP_STORE_FORM_MPOV = "����������� ����� ������ ��� ������ ��������";
    var $_PHPSHOP_ACCOUNT_BANK_TITLE = "���������� � ���������� �����";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = "����� ����������� �����";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = "��� �����. Bank sorting code number";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = "�������� �����";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = "IBAN";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = "�������� �����";
    
    var $_PHPSHOP_MODULES = "������";
    var $_PHPSHOP_FUNCTIONS = "�������";
    var $_PHPSHOP_SPECIAL_PRODUCTS = "������ � �������������";
    
    var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = "�� ������ ������������ � ����� ������ ���� ����������� ��� ���������";
    var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = "����������� �������";
    var $_PHPSHOP_INCLUDING_TAX = "(������� \$tax % tax)";
    var $_PHPSHOP_PLEASE_SEL_ITEM = "����� ������:<br>����������, �������� �����";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = "�����";

    // DOWNLOADS
    
    var $_PHPSHOP_DOWNLOADS_TITLE = "������� �������� ������";
    var $_PHPSHOP_DOWNLOADS_START = "������ ��������";
    var $_PHPSHOP_DOWNLOADS_INFO = "����������, ������� ������������� �������� (Download-ID), ������� �� �������� �� e-mail � ������� '������ ��������'.";
    var $_PHPSHOP_DOWNLOADS_ERR_EXP = "��������, �� ���� ���������� ������ �����";
    var $_PHPSHOP_DOWNLOADS_ERR_MAX = "��������, ���������� ������������ ���������� ����������";
    var $_PHPSHOP_DOWNLOADS_ERR_INV = "������������ ������������� �������� (Download-ID) !";
    var $_PHPSHOP_DOWNLOADS_ERR_SEND = "���������� ��������� ��������� ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG = "��������� ���������� ";
    var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = "���������� � ���������";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = "���������� ���� ����� ������ ��� ����������";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = "����������, ������� ��������� ������������� �������� (Download-ID) � ����� ������� �������� ������: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = "����������� ���������� ���������� ������� �����: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = "������� �������� � ������� {expire} ��. ����� ������ ����������. Download until {expire} days after the first download";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = "�������? ��������?";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = "���������� � ���������: "; // e.g. Download-Info by "Storename"
    var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = "����� �����������?"; 
    
    var $_PHPSHOP_PAYPAL_THANKYOU = "���������� �� ������. ���������� ��������� �������. �� �������� �� PayPal ������������� ���������� �� ����������� ����� (e-mail). ������ �� ������ ���������� ��� ����� �� <a href=http://www.paypal.com>www.paypal.com</a> ����� ���������� ������ ����������.";
    var $_PHPSHOP_PAYPAL_ERROR = "�� ����� ���������� ����� ���������� ��������� ������. ��� ����� �� �����������. (The status of your order could not be updated.)";
    
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = "������� �� ������� � ����� ��������! ���� �� ������� ���������� �� ������ ������.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = "������� ���, �� ��, ��� ����� ��������� ��� �������.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = "�������? ��������?";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = "������� ��������� �����.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = "����� ����������� �����, ����������� �� ������ ����.";
    
    var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = "������ ��������� ������������� ���������� ������.";
    var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = "����������, ������� ���������� ���������� ������.";
    
    var $_PHPSHOP_CART_STOCK_1 = "��������� ���� ���������� ������ ������ ���������� �� ������. ";
    var $_PHPSHOP_CART_STOCK_2 = "���������� ������ �� ������: \$product_in_stock . ";
    var $_PHPSHOP_CART_STOCK_3 = "������� �����, ����� ������� � ��� ������ �����������.";
    var $_PHPSHOP_CART_SELECT_ITEM = "����������, �������� �� ����������� ������, ���� �� ��������, ����������� ��������� ������!";
    
    var $_PHPSHOP_REGISTRATION_FORM_NONE = "---";
    var $_PHPSHOP_REGISTRATION_FORM_MR = "�-�";
    var $_PHPSHOP_REGISTRATION_FORM_MRS = "�-��";
    var $_PHPSHOP_REGISTRATION_FORM_DR = "�-�";
    var $_PHPSHOP_REGISTRATION_FORM_PROF = "����.";
    var $_PHPSHOP_DEFAULT = "�� ���������";
  /*#####################################################
    MODULE AFFILIATE - ������ ����������� ��������
  #######################################################*/
    var $_PHPSHOP_AFFILIATE_MOD   = "����������������� ����������� ��������";
    
    // ������ ����������� ��������
    var $_PHPSHOP_AFFILIATE_LIST_MNU = "������ ���������";
    var $_PHPSHOP_AFFILIATE_LIST_LBL        = "������ ���������";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME    = "�������";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = "�������";
    var $_PHPSHOP_AFFILIATE_LIST_RATE        = "�������";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = "����� � �����";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION ="�������� � �����";
    var $_PHPSHOP_AFFILIATE_LIST_ORDERS = "������ �������";
    
    // Email
    var $_PHPSHOP_AFFILIATE_EMAIL_MNU = "Email ���������";
    var $_PHPSHOP_AFFILIATE_EMAIL_LBL        = "Email ���������";
    var $_PHPSHOP_AFFILIATE_EMAIL_WHO    = "������� (* = ����)";
    var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT        = "��� Email";
    var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = "����";
    var $_PHPSHOP_AFFILIATE_EMAIL_STATS     = "�������� ������� ����������";
    
    // ����� ��������
    var $_PHPSHOP_AFFILIATE_FORM_RATE = "������������ �������";
    var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = "�������?";
    
    var $_PHPSHOP_DELIVERY_TIME = "������ ����������� � ������� ";
    var $_PHPSHOP_DELIVERY_INFORMATION = "���������� � ��������";
    var $_PHPSHOP_MORE_CATEGORIES = "������ ���������";
    var $_PHPSHOP_AVAILABILITY = "�����������";
    var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = "� ��������� ������ ������� ������ ��� � �������.";
    var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = "����� � �������: ";
    
    var $_PHPSHOP_STATISTIC_SUMMARY = "������";
    var $_PHPSHOP_STATISTIC_STATISTICS = "����������";
    var $_PHPSHOP_STATISTIC_CUSTOMERS = "���������";
    var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = "�������� ������";
    var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = "���������� ������"; 
    var $_PHPSHOP_STATISTIC_SUM = "�����";
    var $_PHPSHOP_STATISTIC_NEW_ORDERS = "����� ������";
    var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = "����� ���������";
    
    
    //���� ��������: ���� /administrator/components/com_phpshop/html/shop.waiting_list.php
    var $_PHPSHOP_WAITING_LIST_MESSAGE = "����������, ������� ���� ����� ����������� �����, ����� �� ����� ��������� ��� ����� ����� �������� �� ������. �� �� ����� ���������� ���� ����� ������� ����� � ������������ ��� ��� �����-���� �����, ����� ����������� � ������� ������.<br /><br />�������!";
    var $_PHPSHOP_WAITING_LIST_THANKS = "������� �� �������� <br />�� ������ �� ��������� ��� � ���, ��� �� ����� �������� ������ ��� �����.";
    var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = "��������� ����!";
    
    //���������� ������: file /administrator/components/com_phpshop/html/checkout.thankyou.php
    var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = "��� ��� ������";
  
  /**************************Admin.show_cfg.php in apparition order ;-)**************************************/
    
    /* �������� 1 */
    var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = "����������, �������� Authorize.net ��� CyberCash";
    var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = " ������ ����������������� �����:";
    var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = "�������� ��� ������";
    var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = "���������� ��� ������";
    
    var $_PHPSHOP_ADMIN_CFG_GLOBAL = "������";
    var $_PHPSHOP_ADMIN_CFG_PATHANDURL = "���� & URL";
    var $_PHPSHOP_ADMIN_CFG_SITE = "����";
    var $_PHPSHOP_ADMIN_CFG_SHIPPING = "��������";
    var $_PHPSHOP_ADMIN_CFG_CHECKOUT = "����������";
    var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = "��������";
    var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = "�������";
    var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = "������������ ������ ��� �������";
    var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = "� ���� ������ ����������� ��� ������� ����������� �������.";
    var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = "�������� ����";
    var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = "�������� ���� ��� ������������� �������� � �������� ��������.";
    var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = "�������� ���� ������� ������?";
    var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = "���������� ����� ������ ���� ������� ��� �������� ������.";
    var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = "����� �� '�����������' ������";
    var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = "This determines whether items with zero weight are taxed or not. Modify ps_checkout.php->calc_order_taxable() to customize this.";
    var $_PHPSHOP_ADMIN_CFG_TAX_MODE = "Tax mode:";
    var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = "Based on shipping address";
    var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = "Based on vendor address";
    var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = "This determines which tax rate is taken for calculating taxes:<br />
                                                <ul><li>the one from the state / country the store owner comes from</li><br/>
                                                <li>or the one from where the shopper comes from.</li></ul>";
    var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = "Enable multiple tax rates?";
    var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = "Check this, if you have products with different tax rates (e.g. 7% for books and food, 16% for other stuff)";
    var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = "Subtract payment discount before tax/shipping?";
  var $_PHPSHOP_ADMIN_CFG_REVIEW = "Enable Customer Review/Rating System";
  var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = "If enabled, you allow customers to <strong>rate products</strong> and <strong>write reviews</strong> about them. <br />
                                                                                So customers can write down their experiences with the product for other customers.<br />";
    var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = "Sets the flag whether to subtract the Discount for the selected payment BEFORE (checked) or AFTER tax and shipping.";
    var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = "Customers can leave bank account data?";
    var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = "Check if your customers shall have the ability to provide their bank account data when registering to the shop.";

    var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = "Customers can select a state/region?";
    var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = "Check if your customers shall have the ability to select their state / region data when registering to the shop.";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = "Must agree to Terms of Service?";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = "Check if you want a shopper to agree to your terms of service before registering to the shop.";
    var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = "Check Stock?";
    var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = "Sets whether to check the stock level when a user adds an item to the shopping cart. 
                                                                                          If set, this will not allow user to add more items to the cart than are available in stock.";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = "Enable Affiliate Program?";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = "This enables the affiliate tracking in the shop-frontend. Enable if you have added affiliates in the backend..";
    
    var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = "Order-mail format:";
    var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = "Text mail";
    var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = "HTML mail";
    var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = "This determines how your order confirmation emails are set up:<br />
                                                                                        <ul><li>as a simple text email</li>
                                                                                        <li>or as a html email with images.</li></ul>";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = "Allow Frontend-Administration for non-Backend Users?";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = "With this setting you can enable the Frontend Administration for users who 
                                                                                              are storeadmins, but can't access the Mambo Backend (e.g. Registered / Editor).";
    
    /* PAGE 2 */
    var $_PHPSHOP_ADMIN_CFG_URL = "URL";
    var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = "URL ������ �����. ������ ���������� URL � Mambo (����������� �� ������ � �����!))";
    var $_PHPSHOP_ADMIN_CFG_URLSECURE = "SECUREURL";
    var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = "���������� URL ������ �����. (������ https - �� ������ � �����!)";
    var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = "COMPONENTURL";
    var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = "URL ���������� mambo-phpShop (�� ������ � �����!)";
    var $_PHPSHOP_ADMIN_CFG_URLIMAGE = "IMAGEURL";
    var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = "URL � ����� � ���������� ��� ���������� mambo-phpShop. (�� ������ � �����!)";
    var $_PHPSHOP_ADMIN_CFG_ADMINPATH = "ADMINPATH";
    var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = "���� � ����� ���������� mambo-phpShop.";
    var $_PHPSHOP_ADMIN_CFG_CLASSPATH = "CLASSPATH";
    var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = "���� � ����� ������� 'classes' ������ phpShop'a.";
    var $_PHPSHOP_ADMIN_CFG_PAGEPATH = "PAGEPATH";
    var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = "���� � ����� 'html'  ������ phpShop'a.";
    var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = "IMAGEPATH";
    var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = "���� � ����� 'shop_image' ���������� phpSop.";
    var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = "HOMEPAGE";
    var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = "��������, ����������� �� ���������.";    
    var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = "ERRORPAGE";
    var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = "��� �������� ����������� �� ��������� ��� ����������� ���������� �� �������.";    
    var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = "DEBUGPAGE";
    var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = "��� �������� ����������� �� ��������� ��� ����������� ���������� ���������.";
    var $_PHPSHOP_ADMIN_CFG_DEBUG = "DEBUG ?";
    var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = "DEBUG?             ��������� ������ ���������� ����������. � ���� ������ ����� ������ �������� ���������� ���������� ���������� - DEBUGPAGE. ��� ����� ������� ��� ���������� � ������� ��������, ��������� ���������� ���������� ������, �������� ����� ���� � �.�.";


/* PAGE 3 */

    var $_PHPSHOP_ADMIN_CFG_FLYPAGE = "FLYPAGE";
    var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = "�������� �� ��������� ��� ����������� ��������� ���������� � ������.";
  var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = "������ ���������";
    var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = "���������� ������ ��������� �� ��������� ��� ����������� ������� � ���� ���������.<br />
                                                                                                      �� ������ ��������� ����� �������, ������� ������������ ����� �������� <br />
                                                                                                      (������� �������� � ����� <strong>COMPONENTPATH/html/templates/</strong> � ���������� � browse_)";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = "���������� ������� � ������ �� ���������";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = "���������� ���������� ������� � ������ �� ���������.<br />������: ���� �� ���������� 4, �� ������ ��������� ��������� 4 ������ � ������";
  
    var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = "�������� \"����������� �����������\"";
    var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = "��������, ������������, ����� � ������ ����������� ���� �����������.";
    var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = "���-�� ����� ������";
    var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = "���������� ���������� ����� �� �������� ������  ����������� .";
    var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = "���� ������ 1";
    var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = "���������� ���� �������� ������� �� �������� ��������� ������.";
    var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = "���� ������ 2";
    var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = "���������� ���� ������ ������� �� �������� ��������� ������.";
    var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = "����������� �����";
    var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = "������������� ���������� �����, ������������ � ������ ������ (select box).";
    var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = "���������� ����� �������� �������� \"powered by mambo-phpShop\"?";
    var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = "���������� ����� �������� �������� \"powered by mambo-phpShop\" � ���������.";
    
    
    /* PAGE 4 */
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = "�������� ������ �������� ������ ��������";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = "����������� ������ �������� � ������������� ������������������� ��������� ��������� � ��������. <strong>�������������!</strong>";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = "������ ��������, ��������� �� ���� ��������. ������ 1.0<br />�� ����������� �� ���� ������, ����������, ����������� �� ���� <a href=\"http://ZephWare.com\">http://ZephWare.com</a><br />������������ ������� ��� ��������� ����������� �� ������: <a href=\"mailto:zephware@devcompany.com\">ZephWare@devcompany.com</a><br />�������� ���� �����, ����� �������� ������ �������� �� �����";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = "<<a href=\"http://www.ups.com\" target=\"_blank\">UPS Online(R) Tools</a> ������ ��������� ��������";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = "��� ������� UPS";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = "��� ��� ������� UPS";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = "ID ������������ UPS";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = "ID ������������, ���������� �� UPS";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = "������ UPS";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = "������ ��� ������ UPS-��������";
      
  var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = "������ InterShipper. ��������� ������ � ��� ������, �� ������ ������� <a href=\"http://www.intershipper.com\" target=\"_blank\">Intershipper.com</a>";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = "��������� ����� ������� ��������. ��������, ���� ���� ������� �������� ����������� �� ���� ������ , ������� �� ���� ����������.";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = "������ InterShipper";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = "��� ������ ��� InterShipper-��������.";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = "InterShipper e-mail";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = "��� e-mail ��� InterShipper-��������.";
    var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = "���� ���������";
    var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = "������������ ��� ����������� ������, �������� � ����. ��� ��������, ��� ���� ���� ����� ������ ������� �� ���������.";
    
    
    /* PAGE 5 */
    
    var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = "�������� Checkout Bar";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = "��������, ���� ������, ����� �� ����� �������� ���������� ������ ����������� Checkout Bar (1 - 2 - 3 - 4 � ��������).";
    
    var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = "�������� ������� ���������� ������ � ����� ��������";
    var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = "<strong>�����������:</strong><br/>
                1. ������ ������ ��������<br />
                2. ������ ������� ��������<br />
                3. ������ ������� ������<br />
                4. ���������� ������";
    var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = "<strong>������� 2:</strong><br/>
               1. ������ ������ ��������<br />
              2. ������ ������� ������<br />
              3. ���������� ������";
    var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = "<strong>������� 3:</strong><br/>
               1. ������ ������� ��������<br />
              2. ������ ������� ������<br />
              3. ���������� ������";
    var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = "<strong>������� 4:</strong><br/>
               1. ������ ������� ������<br />
              2. ���������� ������";
    
    
    
    /* PAGE 6 */
    var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = "��������� ��������";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = "���������� ������ ��� ��������� ����������� ����������� ��������� ������. �������������� ������, ���� �� ������ ��������� ������������ ��������.";
    
    var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = "������ ������, ����������� ��������.";
    var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = "�������� ������ ������, ��� ������� ������ ���������� �� e-mail � ����������� �������� ������.";
    
    var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = "������ ������, ����������� ��������";
    var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = "���������� ������ ������, ��� ������� �������� ������� ��� ������� ���������.";
    
    var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = "�������� ����� ��� ����������� ������ - DOWNLOADROOT";
    var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = "���������� ���� � ����������� ������������ ������. (� ����� - ����!)<br><span class=\"message\">��� ������������ ������ ��������, ����������, ����������� �����, ����������� �� ���� ����� ������ �����.</span>";
    
    
    var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = "������������ ���-�� ��������";
    var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = "������������� ���������� ��������, ������� ����� ���� ������� � ��������� ������ �������������� �������� - Download-ID (��� ������ ������)";
    
    var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = "���� �������� ��������";
    var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = "���������� ������ ������� <strong>� ��������</strong>, � ������� �������� �������� �������� ��� �������. ������ ������� ���������� � ������ ��������! ����� ����� �������, ������������� �������� (download-ID) ���������� ����������������.<br/> ����������: 86400 ���. = 24 �.";
    /* PAGE 7 */
    
    var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = "��������� IPN-������� ����� PayPal?";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = "��������, ����� ��������� �������� ������������� �������� ������� PayPal.";
    var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = "E-mail ��� PayPal:";
    var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = "��� ������� e-mail ����� ��� �������� PayPal, ����� ������������, ��� e-mail ���������� (receiver_email).";
    var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = "������ ������ ��� �������� ����������";
    var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = "�������� ������, ������� ������ ����� ��� �������� �������� ����� ����� PayPal IPN. ���� ���������� ������� ����������� �� ���� ������� - �������� ������, ��� ������� ����������� �������� ������ (��� ������� ������ ����� ���������� �� ����������� ����� � ����������� �������).";
    var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = "������ ������ ��� ��������� ����������";
    var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = "�������� ������, ������� ������ ����� ��� ��������� �������� ����� ����� PayPal.";
    
    
    var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = "��������� ������� ����� PayMate?";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = "��������, ����� ��������� �������� ������������� ������������� ��������� ������� PayMate.";
    var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = "��� ������������ PayMate:";
    var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = "��� ������� ������������ PayMate.";
    
    
    
    var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = "��������� ������� ����� Authorize.net?";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = "�������� ����� ������������ Authorize.net � phpShop.";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = "�������� �����?";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = "��������  '��' ��� ������������. �������� '���' ��� ��������� ������ �������� ����������.";
    var $_PHPSHOP_ADMIN_CFG_YES = "��";
    var $_PHPSHOP_ADMIN_CFG_NO = "���";
    
    var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = "Login ID ��� Authorize.net";
    var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = "������� ���� Login ID ��� Authorize.net";
    var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = "���� ���������� ��� Authorize.net";
    var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = "������� ���� ���� ���������� ��� Authorize.net";
    var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = "��� ��������������";
    var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = "������� ��� �������������� ��� Authorize.Net.";
    
    
    var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = "��������� ������� ����� CyberCash?";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = "��������, ����� ������������ CyberCash � phpShop.";
    var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = "�������� CyberCash";    
    var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = "�������� CyberCash - ��� CyberCash Merchant ID";    
    var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = "���� �������� CyberCash";    
    var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = "���� �������� CyberCash ������������ �������� CyberCash";    
    var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = "URL ������ CyberCash";    
    var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = "URL ������ CyberCash - ��� URL, ��������������� CyberCash ��� ����������� ������������ ��������";    
    var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = "��� ����������� CyberCash";    
    var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = "��� ����������� CyberCash ������������ �������� CyberCash";    

    /** Advanced Search feature ***/
    var $_PHPSHOP_ADVANCED_SEARCH  ="����������� �����";
    var $_PHPSHOP_SEARCH_ALL_CATEGORIES = "�� ���� ����������";
    var $_PHPSHOP_SEARCH_ALL_PRODINFO = "�� ���� ���������� � ������";
    var $_PHPSHOP_SEARCH_PRODNAME = "������ � �������� ������";
    var $_PHPSHOP_SEARCH_MANU_VENDOR = "������ � URL ������";
    var $_PHPSHOP_SEARCH_DESCRIPTION = "������ � �������� ������";
    var $_PHPSHOP_SEARCH_AND = "�";
    var $_PHPSHOP_SEARCH_NOT = "��";
    var $_PHPSHOP_SEARCH_TEXT1 = "������ ���������� ������ ��������� ��� ������ ������ � �������� ���������. ������ ���������� ������ ��������� ��� ������ ������ � ���������� ����� ���������� � ������ (��������, � ��������). ����� ����, ��� �� �������� ����������� ������ � ���� ������� (��� �������� ��� ��� ����), �� ������� ������ �������� ����� � ������ ������ ������.";
    var $_PHPSHOP_SEARCH_TEXT2 = "�� ������ ��� ������ �������� �������� ������, ������� �������� ����� ����� ������ ������ ������ ��� � �� ������ � ������ �������� '�' ��� '��'. 
        ����� ��������� '�' ��������, ��� ��� ����� ������ ���� �������, ����� ����� ��� ������� � ����������� ������.
        ����� ��������� '��' ��������, ��� ����������� ������ ����� ������ �� ������, � ���������� � ������� ������ �������� ����� ������������, � ������ - ���.";
    var $_PHPSHOP_ORDERBY = "���������� ��:";
    
    /*** Review feature ***/
    var $_PHPSHOP_CUSTOMER_RATING  = "������� ������� �� �����������";
    var $_PHPSHOP_TOTAL_VOTES = "����� �������";
    var $_PHPSHOP_CAST_VOTE = "����������, ������������";
    var $_PHPSHOP_RATE_BUTTON = "�������";
    var $_PHPSHOP_RATE_NOM = "�������";
    var $_PHPSHOP_REVIEWS = "������ �����������";
    var $_PHPSHOP_NO_REVIEWS = "��� ����� ������ ���� ��� �������.";
    var $_PHPSHOP_WRITE_FIRST_REVIEW = "������� ������, ��� ������� �����...";
    var $_PHPSHOP_REVIEW_LOGIN = "����� �������� ����� �� ������ ����� � ������� ��� ������������.";
    var $_PHPSHOP_REVIEW_ERR_RATE = "����������, ��������� ������ ������, ����� ��������� ��� �����!";
    var $_PHPSHOP_REVIEW_ERR_COMMENT1 = "����������, �������� ���� ������ ���� � ���� ������. ����������� ���������� ��������: 100";
    var $_PHPSHOP_REVIEW_ERR_COMMENT2 = "����������, ��������� ��� �����. ������������ ���������� ��������: 2000";
    var $_PHPSHOP_WRITE_REVIEW = "�������� ����� �� ���� ������!";
    var $_PHPSHOP_REVIEW_RATE = "������ ���: ��������� ���� ������ ������. ����������, �������� ������� ����� 0 (������) � 5 ������� (������).";
    var $_PHPSHOP_REVIEW_COMMENT = "������, ����������, �������� ��������� �����...<br />(������� 100, �������� 2000 ��������)";
    var $_PHPSHOP_REVIEW_COUNT = "���������� ��������: ";
    var $_PHPSHOP_REVIEW_SUBMIT = "��������� �����";
    var $_PHPSHOP_REVIEW_ALREADYDONE = "�� ��� �������� ���� ����� �� ���� ������. ���������� ���...";
    var $_PHPSHOP_REVIEW_THANKYOU = "������� �� ��� �����.";
    var $_PHPSHOP_COMMENT= "�����������";
    
    var $_PHPSHOP_CREDITCARD_FORM_LBL = "��������/�������� ��� ��������� �����";
    var $_PHPSHOP_CREDITCARD_NAME = "�������� ��������� �����";
    var $_PHPSHOP_CREDITCARD_CODE = "�������� ��� ��������� �����";
    var $_PHPSHOP_CREDITCARD_TYPE = "��� ��������� �����";
    
    var $_PHPSHOP_CREDITCARD_LIST_LBL = "������ ��������� ����";
    var $_PHPSHOP_UDATE_ADDRESS = "�������� �����";
    var $_PHPSHOP_CONTINUE_SHOPPING = "���������� �������";
    
    var $_PHPSHOP_THANKYOU_SUCCESS = "��� ����� ������!";
    var $_PHPSHOP_ORDER_LINK = "������� ��� ������ ��� ��������� ������������ ������.";
    
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = "������ ������ ������ � {order_id} ��� �������.";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = "����� ������:";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = "����� ����������� ����������� ������, ����������, ��������� �� ���� ������ (��� ���������� � � ��� ������� � ������� Enter):";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = "��������� ������� ������: ��� ����� {order_id}";
    var $_PHPSHOP_ORDER_LIST_NOTIFY = "��������� ����������?";
    var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = "����������, ������� �������� ������ ������!";
    
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = "������ �� ��������� ��� ������ ����������� (� %)";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = "������������� �������� � ��������: ���� ������ �� ��������� ���� ��� ���� ������ �����������, �� ���� �� ��������� ����������� �� � %. ������������� �������� ����� ��������������� ������";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = "������ �� �����";
    var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = "������ ������ �� ������";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = "��������/�������� ������ �� �����";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = "������ ������";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = "������� ������ ������";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = "��� ������";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = "����������";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = "����������";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = "������ ����� ���������� �� ����, ��� ������� ��� ��� ���������� ��������?";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = "��������� ���� ������";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = "���������� ���� ������ �������� ������";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = "�������� ���� ������";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = "���������� ���� ��������� �������� ������";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = "��� ���������� ������ ����������� ������ ������ �� ������!";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = "�� ����������";
    
    var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = "���������� ������� �����������";
/*********************
Currency Display Style 
***********************/
    var $_PHPSHOP_CURRENCY_DISPLAY = "����� ����������� ������";
    var $_PHPSHOP_CURRENCY_SYMBOL = "������ ������";
    var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = "����� �� ������ ������������ HTML-������� (��������, &amp;euro;,&amp;pound;,&amp;yen;,...)";
    var $_PHPSHOP_CURRENCY_DECIMALS = "���������� ������";
    var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = "���������� ���������� ������ ����� ������� (����� ���� 0)<br><b>���� ���� ����� ������� ���������� ���������� ������, ���������� ����������.</b>";
    var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = "���������� �����������";
    var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = "������ ������������, ��� ���������� �����������";
    var $_PHPSHOP_CURRENCY_THOUSANDS = "����������� �����";
    var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = "������ ������������, ��� ���������� ����� (����� ���� ������)";
    var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = "������������� ������";
    var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = "������, ������������ ��� ����������� ������������� �������� ����.<br>(������ Symb ������������� ������ ������)";
    var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = "������������� ������";
    var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = "������, ������������ ��� ����������� ������������� �������� ����.<br>(������ Symb ������������� ������ ������)";
    
    var $_PHPSHOP_OTHER_LISTS = "������ ������ �������";
/**************
Multiple Images 
****************/
    var $_PHPSHOP_MORE_IMAGES = "���������� ������ ��������";
    var $_PHPSHOP_AVAILABLE_IMAGES = "��������� �������� ���";
    var $_PHPSHOP_BACK_TO_DETAILS = "��������� � ������������ ������";
    
    /* FILEMANAGER */
    var $_PHPSHOP_FILEMANAGER = "�������� ��������";
    var $_PHPSHOP_FILEMANAGER_LIST = "�������� ��������: ������ �������";
    var $_PHPSHOP_FILEMANAGER_ADD = "�������� ��������/����";
    var $_PHPSHOP_FILEMANAGER_IMAGES = "��������� ��������";
    var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = "�����������?";
    var $_PHPSHOP_FILEMANAGER_FILES = "��������� ������ (����,..)";
    var $_PHPSHOP_FILEMANAGER_PUBLISHED = "�����������?";
    
    /* FILE LIST */
    var $_PHPSHOP_FILES_LIST = "�������� ��������: ������ ��������/������ ���";
    var $_PHPSHOP_FILES_LIST_FILENAME = "��� �����";
    var $_PHPSHOP_FILES_LIST_FILETITLE = "���������";
    var $_PHPSHOP_FILES_LIST_FILETYPE = "��� �����";
    var $_PHPSHOP_FILES_LIST_EDITFILE = "�������� ������ �����";
    var $_PHPSHOP_FILES_LIST_FULL_IMG = "������� ��������";
    var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = "��������� ��������";
    
    
    /* FILE FORM */
    var $_PHPSHOP_FILES_FORM = "��������� ���� ���";
    var $_PHPSHOP_FILES_FORM_CURRENT_FILE = "������� ����";
    var $_PHPSHOP_FILES_FORM_FILE = "����";
    var $_PHPSHOP_FILES_FORM_IMAGE = "��������";
    var $_PHPSHOP_FILES_FORM_UPLOAD_TO = "��������� �";
    var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = "����� �������� ������ �� ���������";
    var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = "������� ������������ �����";
    var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = "����� �����-��������  (��� ����������� �������!)";
    var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = "������������� ������� ��������� ��������?";
    var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = "������������ ����?";
    var $_PHPSHOP_FILES_FORM_FILE_TITLE = "��������� (��� ����� ����������)";
    var $_PHPSHOP_FILES_FORM_FILE_DESC = "�������� �����";
    var $_PHPSHOP_FILES_FORM_FILE_URL = "URL ����� (�������������)";
    
/* FILE & IMAGE PROCESSING */
    var $_PHPSHOP_FILES_PATH_ERROR = "����������, ������� ���������� ����!";
    var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = "��������� �������� ���� ������� �������!";
    var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = "�� ������� ������� ��������� ��������!";
    var $_PHPSHOP_FILES_UPLOAD_FAILURE = "������ �������� �����/��������";
    
    var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = "���������� ������� ������� ��������.";
    var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = "������� �������� ������� �������.";
    var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = "���������� ������� ��������� �������� (��������, ��� �� ����������): ";
    var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = "��������� �������� ������� �������.";
    var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = "���������� ������� ����.";
    var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = "���� ������� �����.";
    
    var $_PHPSHOP_FILES_NOT_FOUND = "��������, �� ������������� ���� �� ��� ������!";
    var $_PHPSHOP_IMAGE_NOT_FOUND = "�������� �� �������!";
    
    /*#####################
    MODULE COUPON
    #####################*/
    
    var $_PHPSHOP_COUPON_MOD = "�����";
    var $_PHPSHOP_COUPONS = "������";
    var $_PHPSHOP_COUPON_LIST = "������ �������";
    var $_PHPSHOP_COUPON_ALREADY_REDEEMED = "����� ��� ��� �����������.";
    var $_PHPSHOP_COUPON_REDEEMED = "����� �����������! ���������� ���.";
    var $_PHPSHOP_COUPON_ENTER_HERE = "���� � ��� ���� ��� ������, ����������, ������� ���:";
    var $_PHPSHOP_COUPON_SUBMIT_BUTTON = "���������";
    var $_PHPSHOP_COUPON_CODE_EXISTS = "��������� ��� ������ ��� ����������. ����������, ������ ������.";
    var $_PHPSHOP_COUPON_EDIT_HEADER = "�������� �����";
    var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = "ٸ������ �� ���� ������, ����� �������� ���. ��� �������� ���� ������ �������� ��� � ������� �������:";
    var $_PHPSHOP_COUPON_CODE_HEADER = "���";
    var $_PHPSHOP_COUPON_PERCENT_TOTAL = "���������� ��� ����������";
    var $_PHPSHOP_COUPON_TYPE = "��� ������";
    var $_PHPSHOP_COUPON_TYPE_TOOLTIP = "������� ����� ��������� ����� ����� ������������� ��� ��������� ������ � ������. ���������� ����� ����� ���� ����������� ��� �����, ��� ������� ����������.";
    var $_PHPSHOP_COUPON_TYPE_GIFT = "������� �����";    
    var $_PHPSHOP_COUPON_TYPE_PERMANENT = "���������� �����";    
    var $_PHPSHOP_COUPON_VALUE_HEADER = "�������� ������";
    var $_PHPSHOP_COUPON_DELETE_BUTTON = "������� ���";
    var $_PHPSHOP_COUPON_CONFIRM_DELETE = "�� �������, ��� ������ ������� ��� ����� ������?";
    var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = "����������, ��������� ��� ����.";
    var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = "�������� ������ ������ ���� ������.";
     var $_PHPSHOP_COUPON_NEW_HEADER = "����� �����";
    var $_PHPSHOP_COUPON_COUPON_HEADER = "��� ������";
    var $_PHPSHOP_COUPON_PERCENT = "����������";
    var $_PHPSHOP_COUPON_TOTAL = "����������";
    var $_PHPSHOP_COUPON_VALUE = "��������";
    var $_PHPSHOP_COUPON_CODE_SAVED = "��� ������ ������� ��������.";
    var $_PHPSHOP_COUPON_SAVE_BUTTON = "��������� �����";
    var $_PHPSHOP_COUPON_DISCOUNT = "������ �� ������";
    var $_PHPSHOP_COUPON_CODE_INVALID = "��� ������ �� ������. ����������, ������� ��� ��� ���.";
    var $_PHPSHOP_COUPONS_ENABLE = "��������� ������������� ������";
    var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = "���� �� ��������� ������������� ������, �� ������� ������ �������� ������ �� ������� �� ���� ������.";
    
    /* Free Shipping */
    var $_PHPSHOP_FREE_SHIPPING = "���������� ��������";
    var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = "��� ������ ������ �������� ����������!";
    var $_PHPSHOP_FREE_SHIPPING_AMOUNT = "����������� ����� ��� ���������� ��������";
    var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = "����� (������� �����!), ������� �������� ����������� ��� ���������� �������� (������: <strong>50</strong> ��������, ��� ���������� �������� ����� �������� ��� �������, ����������� ������� �� ����� 50 �������� ������ ��� ����� (������� �����).";
    var $_PHPSHOP_YOUR_STORE = "��� �������";
    var $_PHPSHOP_CONTROL_PANEL = "������ ����������";

    /* Configuration Additions */
    var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = "PDF-������";
    var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = "���������� ��� ��� PDF-������ � ��������";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = "���������� �� ����������� � ��������� �������������� ����� ��� ������ ������?";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = "��������, ���� ������, ����� ���������� ���������� � ���������  �������������� ����� ��� ������ ������ (����� ����������� ������).";
    
    // We need this for eCheck.net Payments
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = "��� ����� � ����� Bank Account Type";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = "�� ������������� Checking";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = "Business Checking";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = "Saving";
    
    var $_PHPSHOP_PAYMENT_AN_RECURRING = "Recurring Billings?";
    var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = "�������, ������ �� �� recurring billings.";
    
    var $_PHPSHOP_INTERNAL_ERROR = "��������� ������ ��������� �������";
    var $_PHPSHOP_PAYMENT_ERROR = "���� ��� ��������� �������";
    var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = "����� ������� ��������";
    
    /* UPS Shipping Module */
    var $_PHPSHOP_UPS_RESPONSE_ERROR = "UPS �� ���� ���������� ������ � ������ ��������.";
    var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = "��������������� ����� �������� (���)";
    var $_PHPSHOP_UPS_PICKUP_METHOD = "������ ������ UPS";
    var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = "��� �� ���������� ������� �� UPS?";
    var $_PHPSHOP_UPS_PACKAGE_TYPE = "�������� UPS?";
    var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = "�������� ��� �������� �� ���������.";
    var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = "���������� (�������) ��������? Residential Delivery?";
    var $_PHPSHOP_UPS_RESIDENTIAL = "���������� (�������) (RES)";
    var $_PHPSHOP_UPS_COMMERCIAL    = "������������ �������� (COM)";
    var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = "����� ��� ���������� (RES) ��� ������������ �������� (COM).";
    var $_PHPSHOP_UPS_HANDLING_FEE = "������ �� ��������/��������� (���������) Handling Fee";
    var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = "���� ������ �� ��������/��������� ��� ����� ������� ��������.";
    var $_PHPSHOP_UPS_TAX_CLASS = "����� ������";
    var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = "������������ ��������� ����� ������ ��� ��������� ��������.";
    
    var $_PHPSHOP_ERROR_CODE = "��� ������";
    var $_PHPSHOP_ERROR_DESC = "�������� ������";
    
    var $_PHPSHOP_CHANGE_TRANSACTION_KEY = "��������/�������� ���� ����������";
    var $_PHPSHOP_CHANGE_PASSKEY_FORM = "��������/�������� ������/���� ����������";
    var $_PHPSHOP_TYPE_PASSWORD = "����������, ������� ��� ������ ������������";
    var $_PHPSHOP_CURRENT_PASSWORD = "������� ������";
    var $_PHPSHOP_CURRENT_TRANSACTION_KEY = "������� ���� ����������";
    var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = "���� ���������� ��� ������� �������.";

    var $_PHPSHOP_PAYMENT_CVV2 = "����� ���� Request/Capture (CVV2/CVC2/CID) �� ��������� ��������";
    var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = "��������, ��� ����������� �������� CVV2/CVC2/CID (���- ��� �������������� ����� �� �������� ������� ��������� �����, �� ������� ������� ���� American Express)?";
    var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = "����������, ������� ���- ��� ��������������� ����� �� �������� ������� ����� ��������� ����� (�� ������� ������� ���� American Express)";
    var $_PHPSHOP_CUSTOMER_CVV2_ERROR = "��� ����������� ��� ����� ������ ��� ��������� �����.";    
    
    var $_PHPSHOP_PRODUCT_FORM_FILENAME = "��� ������� ��� �����";
    var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = "����������: ����� �� ������ ��������� ��� �����. <strong>���� � ��������� ����� ������ �� ����� �������� �������������!!! �� ������ ��������� ��� �� FTP �������!</strong>.";
    var $_PHPSHOP_PRODUCT_FORM_UPLOAD = "��� ��������� ����� ����";
    var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = "�� ������ ��������� �� ������ ���� � ������ �����. ���� ���� ����� �������, ������� �� �������. ������������ ���� ����� �������.";
    
    var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = "������� ����� ����� �����, ������� ����� ������������ ��� ���������� �� ��������-������ ������ ��� ������ ��������.<br />��������: 24�, 48 �����, 3-5 ����, �� ������, ...";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = "��� �������� ��������, ������� ����� ������������ ����� �� �������� ������������ (������) ������.<br />�������� ��������� � ����� <i>/components/com_phpshop/shop_image/availability</i><br />";
    var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = "������ ���������";
    var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = "
	<h4>������� ������� ������ ���������:</h4>
    <pre>
<strong>������</strong>,XL[+1.99],M,S[-2.99];<strong>����</strong>,�������,������,Ƹ����[=24.00];���������,..,..</pre>
    <h4>������������� ��� ��� ������������� � ���������� ���������� ������������ ���:</h4>
    <strong>&#43;</strong> (����)  - �������� ��� �������� � �������� ���� ������.<br />
    <strong>&#45;</strong> (�����) - ������� ��� �������� �� �������� ���� ������.<br />
    <strong>&#61;</strong> (�����) - ���������� ���� ������ ������ ����� ��������.
    </pre>";
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = "������ ����������� ���������";
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = "<h4>������ ������� ������ ����������� ���������:</h4>
        <pre><strong>   ��������;��������������;</strong>...<br />
����� �������� ��� �������������� ���� �������� � ��������������, ������������ ��� ����������.</pre>";
          
    var $_PHPSHOP_MULTISELECT = "��� ������ ����������, ��������� CTRL, ��������� �����";
        
    var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = "��������� ������� �����  eProcessingNetwork.com?";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = "��������, ����� ������������ eProcessingNetwork.com � phpShop.";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = "�������� ����� ?";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = "�������� '��' ��� ��������� ������ ������������. �������� '���' ��� ��������� �������� ����������.";
    
    var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = "eProcessingNetwork.com Login ID";
    var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = "������� ��� Login ID � ������� eProcessingNetwork.com";
    var $_PHPSHOP_ADMIN_CFG_EPN_KEY = "���� ���������� � eProcessingNetwork.com";
    var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = "������� ���� ���������� � ������� eProcessingNetwork.com";
    var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = "��� ��������������";
    var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = "������� ��� �������������� � ������� eProcessingNetwork.com.";

    var $_PHPSHOP_RELATED_PRODUCTS = "������������� ������";
    var $_PHPSHOP_RELATED_PRODUCTS_TIP = "�� ������ ������� ������������� (���������) ������ ��������� ���� ������. ������ �������� ���� ��� ��������� ������� � ������ � ��� ������  <strong>�������������� ��������</strong>.";
    
    var $_PHPSHOP_RELATED_PRODUCTS_HEADING = "��� ����� ����� �������������� � ��� ������";
    
    var $_PHPSHOP_IMAGE_ACTION = "�������� ��� ���������";
    var $_PHPSHOP_NONE = "�� ����������� ��������";
    
    var $_PHPSHOP_ORDER_HISTORY = "������� ������";
    var $_PHPSHOP_ORDER_HISTORY_COMMENT = "�����������";
    var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = "����������� � ������ ������";
    var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = "������������ ���� �����������?";
    var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = "���� ����������";
    var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = "��������� ����������?";
    var $_PHPSHOP_ORDER_STATUS_CHANGE = "��������� ������� ������";
        
     /* USPS Shipping Module */
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = "USPS shipping username";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = "USPS shipping username";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = "USPS shipping password";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = "USPS shipping password";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER = "USPS shipping server";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP = "USPS shipping server";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH = "USPS shipping path";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP = "USPS shipping path";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_CONTAINER = "USPS shipping container";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_CONTAINER_TOOLTIP = "USPS shipping container";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE = "USPS Package Size";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP = "USPS Package Size";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGEID = "USPS Package ID (must be 0, does not support multiple packages)";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGEID_TOOLTIP = "USPS Package ID (must be 0, does not support multiple packages)";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIPSERVICE = "USPS Shipping type (Express,First Class,Priority,Parcel,BPM,Library,Media)";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIPSERVICE_TOOLTIP = "USPS Shipping type (Express,First Class,Priority,Parcel,BPM,Library,Media)";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_HANDLING_FEE = "Handling Fee";
    var $_PHPSHOP_USPS_HANDLING_FEE = "Your Handling fee for this shipping method.";
    var $_PHPSHOP_USPS_HANDLING_FEE_TOOLTIP = "Your Handling fee for this shipping method.";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE = "Your International Handling fee for USPS shipments.";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP = "Your International Handling fee for USPS shipments.";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE = "Your International per pound rate for USPS shipments.";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP = "Your International per pound rate for USPS shipments.";
    var $_PHPSHOP_USPS_RESPONSE_ERROR = "USPS was not able to process the Shipping Rate Request.";

    /** Changed Product Type - Begin*/
    /*** Product Type ***/
    var $_PHPSHOP_PARAMETERS_LBL = "���������";
    var $_PHPSHOP_PRODUCT_TYPE_LBL = "��� ������";
    var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = "������ ����� ������";
    var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = "��������/������������� ��� ������";
    // Product - Product Product Type list
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = "������ ����� ������ ���";
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = "������ ����� ������";
    // Product - Product Product Type form
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = "�������� ��� ������ ���";
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = "�������� ��� ������";
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = "��� ������";
    // Product - Product Type form
    var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = "�������� ���� ������";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = "�������� ���� ������";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = "���������";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = "���������� � ���� ������";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = "�����������?";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = "�������� ����������� ���� ������ (Browse Page)";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = "����� ���� ������ (Flypage)";
    // Product - Product Type Parameter list
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = "��������� ���� �������";
    // Product - Product Type Parameter form
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = "���������� � ����������";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = "��� �������� �� ������!";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = "�������� ��������� � ����";
    VAR $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = "��� �������� �������� ��������� ������� � ������� ���� � ������ ���� ���������� � �� ��������� ��������.<BR>��������: main_material";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = "�������� ���������";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = "�������� ���������";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = "��� ���������";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = "�����";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = "�����";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = "�������� �����";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = "�������";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = "������";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = "���� � �����";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = "����";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = "����-��-��";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = "�����";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = "��:��:��";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = "����������� �����";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = "������ ��������";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = "��������� ��������";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = "��������� �������� ���������<br />��������� ��������?<br />(���� �������� ������ - <br />����� ����� ������� ������ ����)";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = "<strong>���� ����� ��� ������ ��������, �� �������� ����� ��������� ������ ��������� ��������.<BR />������ ��� ��������� ��������:</strong> �����;������;�������;...";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = "�������� �� ���������";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = "��� �������� ��������� �� ��������� ����������� ��������� �������:<ul><li>����: ����-��-��</li><li>�����: ��:��:��</li><li>���� � �����: ����-��-�� ��:��:��</li></ul>";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = "������� ���������";
    
    /************************* FrontEnd ***************************/
    /** shop.parameter_search.php */
    var $_PHPSHOP_PARAMETER_SEARCH = "����������� ����� �� �������������� ����������";
    var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = "����������� ����� �� �������������� ����������";
    var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = "��� ������ ������ �� �������������� ����������<BR>�������� ��������� ������, ����������:";
    var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = "�� ������ ������� ������ �� �������.";
    /** shop.parameter_search_form.php */
    
    var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = "�����";
    var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = "�� �����";
    var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = "�������������� �����";
    var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = "�������� ��� ����";    
    /** shop.browse.php */
    var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = "����� � ���������";
    var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = "�������� ���������";
    var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = "�� ���������";
    var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = "�� ������������";
    /** shop.product.detail */
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = "��������� ���������";
    /** Changed Product Type - End*/
    
    // Opposite of Discount!
    var $_PHPSHOP_FEE = "Fee";
    
    var $_PHPSHOP_PRODUCT_CLONE = "����������� �����";
    
    var $_PHPSHOP_CSV_SETTINGS = "���������";
    var $_PHPSHOP_CSV_DELIMITER = "�����������";
    var $_PHPSHOP_CSV_ENCLOSURE = "������-������������ �����";
    var $_PHPSHOP_CSV_UPLOAD_FILE = "�������� CSV �����";
    var $_PHPSHOP_CSV_SUBMIT_FILE = "��������� CSV ����";
    var $_PHPSHOP_CSV_FROM_DIRECTORY = "�������� �� �����";
    var $_PHPSHOP_CSV_FROM_SERVER = "��������� CSV ���� � �������";
    var $_PHPSHOP_CSV_EXPORT_TO_FILE = "�������������� � CSV ����";
    var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = "������� ����������� ����� CSV-�����";
    var $_PHPSHOP_CSV_DEFAULT_ORDERING = "����������� �� ���������";
    var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = "��� ����������� �����������";
    var $_PHPSHOP_CSV_SUBMIT_EXPORT = "�������������� ��� ������ � CSV ����";
    var $_PHPSHOP_CSV_CONFIGURATION_HEADER = "������������ �������/�������� CSV";
    var $_PHPSHOP_CSV_SAVE_CHANGES = "��������� ���������";
    var $_PHPSHOP_CSV_FIELD_NAME = "�������� ����";
    var $_PHPSHOP_CSV_DEFAULT_VALUE = "�������� �� ���������";
    var $_PHPSHOP_CSV_FIELD_ORDERING = "����������� �����";
    var $_PHPSHOP_CSV_FIELD_REQUIRED = "���� ������������?";
    var $_PHPSHOP_CSV_IMPORT_EXPORT = "�������/�������";
    var $_PHPSHOP_CSV_NEW_FIELD = "�������� ����� ����";
    var $_PHPSHOP_CSV_DOCUMENTATION = "������������";
    
    var $_PHPSHOP_PRODUCT_NOT_FOUND = "��������, �� ����������� ���� ����� �� ������!";
    var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = "���������� ������, ������� ��� ���� �� ������";
    var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = "���� ��������, �� ������, � �������� ���������� �� ������ ����� ���� ����� ������������ � ��������. ����� ����� �������� ������������ �� �����.";
    var $_PHPSHOP_PARAMETERS_SEARCH  = "����� �� ����������";
    
}
/** @global phpShopLanguage $PHPSHOP_LANG */
$PHPSHOP_LANG =& new phpShopLanguage();
?> 

























