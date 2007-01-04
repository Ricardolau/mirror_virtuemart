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
	var $_PHPSHOP_MENU = 'Valmynd';
	var $_PHPSHOP_CATEGORY = 'Flokkur';
	var $_PHPSHOP_CATEGORIES = 'Flokkar';
	var $_PHPSHOP_SELECT_CATEGORY = 'Veldu flokk:';
	var $_PHPSHOP_ADMIN = 'Kerfisstj�rn';
	var $_PHPSHOP_PRODUCT = 'Vara';
	var $_PHPSHOP_LIST = 'S�na';
	var $_PHPSHOP_ALL = 'Allar';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'S�na allar v�rur';
	var $_PHPSHOP_VIEW = 'sko�a';
	var $_PHPSHOP_SHOW = 's�na';
	var $_PHPSHOP_ADD = 'b�ta vi�';
	var $_PHPSHOP_UPDATE = 'uppf�ra';
	var $_PHPSHOP_DELETE = 'ey�a';
	var $_PHPSHOP_SELECT = 'velja';
	var $_PHPSHOP_SUBMIT = 'Submit';
	var $_PHPSHOP_RANDOM = 'V�rur af handah�fi';
	var $_PHPSHOP_LATEST = 'N�justu v�rurnar';
	var $_PHPSHOP_HOME_TITLE = 'Heim';
	var $_PHPSHOP_CART_TITLE = 'Karfa';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Ganga fr�';
	var $_PHPSHOP_LOGIN_TITLE = 'Skr� inn';
	var $_PHPSHOP_LOGOUT_TITLE = 'Skr� �t';
	var $_PHPSHOP_BROWSE_TITLE = 'Sko�a';
	var $_PHPSHOP_SEARCH_TITLE = 'Leita';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Umsj�n skr�ningar';
	var $_PHPSHOP_NAVIGATION_TITLE = 'St�ring';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Deild';
	var $_PHPSHOP_INFO = 'Uppl�singar';
	var $_PHPSHOP_BROWSE_LBL = 'Browse';
	var $_PHPSHOP_PRODUCTS_LBL = 'V�rur';
	var $_PHPSHOP_PRODUCT_LBL = 'Vara';
	var $_PHPSHOP_SEARCH_LBL = 'Leita';
	var $_PHPSHOP_FLYPAGE_LBL = 'N�nari l�sing';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'V�ruleit';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'V�runafn';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'V�ruflokkur';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'L�sing';
	var $_PHPSHOP_CART_SHOW = 'S�na k�rfu';
	var $_PHPSHOP_CART_ADD_TO = 'Kaupa';
	var $_PHPSHOP_CART_NAME = 'Nafn';
	var $_PHPSHOP_CART_SKU = 'LagerNR:';
	var $_PHPSHOP_CART_PRICE = 'Ver�';
	var $_PHPSHOP_CART_QUANTITY = 'Fj�ldi';
	var $_PHPSHOP_CART_SUBTOTAL = 'Samtals';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'B�ta vi�';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'M�ttakandi';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Leitin skila�i 0 ni�urst��um.<br />';
	var $_PHPSHOP_PRICE_LABEL = 'Ver�: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Setja � k�rfu';
	var $_PHPSHOP_NO_CUSTOMER = '�� ert ekki skr��ur notandi. Settu inn uppl�singar fyrir grei�slu.';
	var $_PHPSHOP_DELETE_MSG = 'Ertu viss um a� �� viljir ey�a �essu?';
	var $_PHPSHOP_THANKYOU = '�akka ��r fyrir a� versla vi� 24/7.';
	var $_PHPSHOP_NOT_SHIPPED = 'Hefur ekki veri� sent en��';
	var $_PHPSHOP_EMAIL_SENDTO = 'Sta�festing hefur veri� send � netfangi�';
	var $_PHPSHOP_NO_USER_TO_SELECT = '�v� mi�ur er engin MOS - notandi sem �� getur b�tt vi� com_phpshop notendalistann';
	var $_PHPSHOP_ERROR = 'Villa';
	var $_PHPSHOP_MOD_NOT_REG = 'Module Ekki skr�� ';
	var $_PHPSHOP_MOD_ISNO_REG = 'er ekki vi�urkennt phpShop module.';
	var $_PHPSHOP_MOD_NO_AUTH = '�� hefur ekki leyfi til a� nota �etta module.';
	var $_PHPSHOP_PAGE_404_1 = 'S��a ekki til';
	var $_PHPSHOP_PAGE_404_2 = 'Skr�rnafn ekki til. Finn ekki skr�nna:';
	var $_PHPSHOP_PAGE_403 = 'Ekki n�gileg r�ttindi';
	var $_PHPSHOP_FUNC_NO_EXEC = '�� hefur ekki r�ttindi til a� r�sa ';
	var $_PHPSHOP_FUNC_NOT_REG = 'A�ger� ekki skr��';
	var $_PHPSHOP_FUNC_ISNO_REG = ' er ekki vi�urkennd_com_phpShop a�ger�.';
	var $_PHPSHOP_ADMIN_MOD = 'Kerfisstj�rn';
	var $_PHPSHOP_USER_LIST_MNU = 'S�na notendur';
	var $_PHPSHOP_USER_LIST_LBL = 'Notendalisti';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Notendanafn';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Fullt nafn';
	var $_PHPSHOP_USER_LIST_GROUP = 'H�pur';
	var $_PHPSHOP_USER_FORM_MNU = 'B�ta notanda vi�';
	var $_PHPSHOP_USER_FORM_LBL = 'B�ta vi� uppl�singum um notanda';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Grei�ist af';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Sendist til';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'B�ta vi� heimilisfangi';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'No shipping addresses.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'G�lunafn fyrir heimilisfang';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Nafn';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Eftirnafn';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Mi�nafn';
	var $_PHPSHOP_USER_FORM_TITLE = 'Titill';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Notanda nafn';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Lykilor�';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Sta�festa lykilor�';
	var $_PHPSHOP_USER_FORM_PERMS = 'Leyfi';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Customer Number / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Fyrirt�ki';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Heimilisfang';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Heimilisfang ef C/O';
	var $_PHPSHOP_USER_FORM_CITY = 'Borg/b�r';
	var $_PHPSHOP_USER_FORM_STATE = 'State/Province/Region';
	var $_PHPSHOP_USER_FORM_ZIP = 'P�stn�mer';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_USER_FORM_PHONE = 'S�mi';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Mobile Phone';
	var $_PHPSHOP_USER_FORM_FAX = 'Fax';
	var $_PHPSHOP_USER_FORM_EMAIL = 'Netfang';
	var $_PHPSHOP_MODULE_LIST_MNU = 'S�na Modules';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Listi yfir Module';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Nafn Module';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Leyfi Module';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'A�ger�ir';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Lista r��';
	var $_PHPSHOP_MODULE_FORM_MNU = 'B�ta vi� Module';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Uppl�singar Module';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Nafn Module (fyrir Topvalmynd)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Module Nafn';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Module Leyfi';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Module Haus';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Module Botn';
	var $_PHPSHOP_MODULE_FORM_MENU = 'S�na Module � valmynd kerfisstj�rnar?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'R��un glugga';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Module L�sing';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'K��i tungum�ls';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Tungum�la skr�';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'S�na a�ger�ir';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'A�ger�ar listi';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Function Name';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Class Nafn';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Class A�fer�';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Leyfi';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'B�ta vi� a�ger�';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Uppl�singar um a�ger�';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Nafn a�ger�ar';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Class Nafn';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Class a�fer�';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Function leyfi';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'a�ger�';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'S�na gjaldmi�la';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Listi yfir gjaldmi�la';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'B�ta vi� gjaldmi�li';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Nafn gjaldmi�ils';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'K��i fyrir gjaldmi�il';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'S�na l�nd';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Listi yfir l�nd';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'B�ta vi� landi';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Nafn lands';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Kenni lands (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Kenni lands (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'List State';
	var $_PHPSHOP_STATE_LIST_LBL = 'State List for: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Add/Update a State';
	var $_PHPSHOP_STATE_LIST_NAME = 'State Name';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'State Code (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'State Code (2)';
	var $_PHPSHOP_ADDRESS = 'Heimili';
	var $_PHPSHOP_CONTINUE = '�fram';
	var $_PHPSHOP_EMPTY_CART = 'Karfan ��n er t�m.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Ping InterShipper Server';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'InterShipper-Server Ping ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'InterShipper Ping Failed';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'InterShipper Ping Successful';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Carrier';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Response<br />Time';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'sec.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'S�na afhendingarm�ta';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Virkar afhendingar';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Afhendingarm�tar';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Virkur';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Sendingarkostna�ur';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Afhendingart�mi';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'Fast gjald';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'hlutfall';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'dagar';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = '�yngri v�rur';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Stilla afhendingarm�ta';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'B�ta vi� afhendingarm�ta';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Stilla afhendingarm�ta';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Endurra�a';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Afhendingarm�ti';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Virkja';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Sendingarkostna�ur';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Afhendingart�mi';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'Fast gjald';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'hlutfall';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'dagar';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = '�yngri v�rur';
	var $_PHPSHOP_ORDER_MOD = 'Pantanir';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Sta�festa p�ntun';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'H�tta vi� p�ntun';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Prenta';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Ey�a p�ntun';
	var $_PHPSHOP_ORDER_LIST_MNU = 'S�na pantanir';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Listi yfir pantanir';
	var $_PHPSHOP_ORDER_LIST_ID = 'P�ntun NR:';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Dags p�ntunar';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'S��ast breytt';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Sta�a';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'Samtals';
	var $_PHPSHOP_ORDER_ITEM = 'P�ntun';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'P�ntun';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'P�ntun NR:';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Dags p�ntunar';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Sta�a p�ntunar';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Uppl�singar um vi�skiptamann';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Uppl�singar um grei�slu';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Uppl�singar um afhendingu';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Grei�ist af';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Sendist til';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Nafn';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Fyrirt�ki';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Heimilisfang 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Heimilisfang 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Sta�ur';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'State/Province/Region';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'P�stn�mer';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Land';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'S�mi';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Fax';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'Netfang';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Hlutir � p�ntun';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Fj�ldi';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Fj�ldi';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'LagerNR:';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Ver�';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Alls';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'Samtals';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'VSK';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Sendingarkostna�ur';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'VSK sending';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Grei�slum�ti';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Notandi';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Kenni notanda';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Expire Date';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Grei�slu yfirlit';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Yfirlit sendingar';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Uppl�singar um grei�slu';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Sent me�';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Afhendingarm�ti';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Dags afhendingar';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Afhendingarkostna�ur';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'S�na virkar st��ur p�ntunar';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'B�ta vi� virkri st��u';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'K��i st��u';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Nafn st��u';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Sta�a p�ntunar';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'K��i st��u';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Nafn st��u';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'S�na r��';
	var $_PHPSHOP_PRODUCT_MOD = 'V�rur';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Valin vara';
	var $_PHPSHOP_CURRENT_ITEM = 'hlutur';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Birg�asta�a';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Sko�a byrg�ast��u';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Ver�';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'N�mer';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = '�yngd';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'S�na v�rur';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'V�rulisti';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Nafn v�ru';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'LagerNR:';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'S�na';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Search Product';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'modyfied';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'with price modyfied';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'without price';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'After';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Before';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'B�ta vi� v�ru';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Breyta v�ru';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Forsko�a � verslun';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'B�ta vi�';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'B�ta vi� aftur';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'N� vara';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Uppf�ra v�ru';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Uppl�singar um v�ru';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Sta�a v�ru';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'St�r� og �yngd v�ru';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Myndir fyrir v�ru';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'N�r hlutur';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Uppf�ra hlut';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Uppl�singar um hlut';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Sta�a';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'St�r� og �yngd';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Myndir';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Bakka til v�ru';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'Til a� uppf�ra myndina, sl��u inn sl��ina a� myndinni.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Skrifa�u ';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Fylgihlutir';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Stillingar v�ru';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Ertu viss um a� vilja ey�a �ssari v�ru\\nog hlutunum sem fylgja henni?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Ertu viss um a� vilja ey�a myndinni?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'S�lua�ili';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Framlei�andi';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'LagerNR:';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Nafn';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'Sl��';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Flokkur';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Product Price (Gross)';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Product Price (Net)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'L�sing � s��u';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Stutt l�sing';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = '� lager';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = '� p�ntun';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Ver�ur til �ann';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = '� tilbo�i';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Afl�ttur ger�';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'S�na?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Lengd';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Breidd';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'H��';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'M�lieining';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = '�yngd';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'M�lieining';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Sm� mynd';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'St�r mynd';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'pounds';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'inches';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Unit';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'piece';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Units in Packaging';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Here you can fill in a number unit in packaging. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Units in Box';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Here you can fill in a number unit in box. (max. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'V�ru var b�tt inn';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Sta�a uppf�rslu';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Sta�a uppf�rslu';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Sta�a uppf�rslu';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Upphala CSV';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Mappa v�ru';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'S�na flokka';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Tr� flokka';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'B�ta inn flokk';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Uppl�singar um flokk';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Nafn flokks';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Fyrir ne�an';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'L�sing flokks';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'S�na?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'S��a flokks';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'S�na merki';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Listi yfir merki';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Nafn merkis';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'S�na eftir';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'B�ta vi� merki';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Merki forms';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'N�tt merki fyrir v�ru';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Uppf�ra merki';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'N�tt merki fyrir v�ru';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Uppf�ra merki';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Nafn merkis';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'S�na eftir';
	var $_PHPSHOP_PRICE_LIST_MNU = 'S�na flokka';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Ver� tr�';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Ver� fyrir';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Nafn h�ps';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Ver�';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Gjaldmi�ill';
	var $_PHPSHOP_PRICE_FORM_MNU = 'B�ta vi� ver�i';
	var $_PHPSHOP_PRICE_FORM_LBL = 'PUppl�singar um ver�';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'N�tt ver� fyrir v�ru';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Uppf�ra ver� fyrir v�ru';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'N�tt ver� fyrir hlut';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Uppf�ra ver� fyrir hlut';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Ver�';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Gjaldmi�ill';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'H�pur notenda';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Yfirlit';
	var $_PHPSHOP_RB_INDIVIDUAL = 'S�na einstakar v�rur';
	var $_PHPSHOP_RB_SALE_TITLE = 'S�lu yfirlit';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Yfirlit s�lu';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Stilla t��ni';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'M�na�arlega';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Vikulega';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Daglega';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = '�essi m�nu�ur';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'S��asti m�nu�ur';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'S��ustu 60 dagar';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'S��ustu 90 dagar';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Byrja �ann';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Endar �ann';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'S�na vali�';
	var $_PHPSHOP_RB_REPORT_FOR = 'Yfirlit fyrir ';
	var $_PHPSHOP_RB_DATE = 'Dags';
	var $_PHPSHOP_RB_ORDERS = 'Pantanir';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Fj�ldi seldra hluta';
	var $_PHPSHOP_RB_REVENUE = 'Innkoma';
	var $_PHPSHOP_RB_PRODLIST = 'V�ru listi';
	var $_PHPSHOP_SHOP_MOD = 'Verslun';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Mynd';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Ver�';
	var $_PHPSHOP_ORDER_STATUS_P = '� bi�';
	var $_PHPSHOP_ORDER_STATUS_C = 'Sta�fest';
	var $_PHPSHOP_ORDER_STATUS_X = 'H�tt vi�';
	var $_PHPSHOP_ORDER_BUTTON = 'P�ntun';
	var $_PHPSHOP_SHOPPER_MOD = 'Notendur';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'S�na r�para';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Listi yfir r�para';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Notendanafn';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Fullt nafn';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'H�pur';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'B�ta vi� notanda';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Uppl�singar um notanda';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Grei�ist af:';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Uppl�singar';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Afhendist til, uppl�singar';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'B�ta vi� heimilisfangi';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Heimilisfang';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Notendanafn';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Nafn';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Eftirnafn';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Middle Name';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Titill';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Notendanafn';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Lykilor�';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Sta�festa lykilor�';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'H�pur r�para';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Nafn fyrirt�kis';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Heimilisfang 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Heimilisfang 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Sta�ur';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'State/Province/Region';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'P�stn�mer';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'S�mi';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Mobile phone';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Fax';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'Netfang';
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
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'S�na h�pa';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Notendalisti';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Nafn h�ps';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'L�sing h�ps';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Form h�ps';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'B�ta vi� h�p';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Nafn h�ps';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'L�sing h�ps';
	var $_PHPSHOP_STORE_MOD = 'Verslun';
	var $_PHPSHOP_STORE_FORM_MNU = 'Breyta verslun';
	var $_PHPSHOP_STORE_FORM_LBL = 'Uppl�singar um verslun';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Uppl�singar um tengili�i';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'St�r mynd';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Ni�urhala mynd';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Nafn verslunar';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Nafn fyrirt�kis';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Heimilisfang 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Heimilisfang 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'Sta�ur';
	var $_PHPSHOP_STORE_FORM_STATE = 'State/Province/Region';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_STORE_FORM_ZIP = 'P�stn�mer';
	var $_PHPSHOP_STORE_FORM_PHONE = 'S�mi';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Gjaldmi�ill';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Flokkur verslunar';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Eftirnafn';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Nafn';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Mi�nafn';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Titill';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'S�mi 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'S�mi 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Fax';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'Netfang';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Sl�� fyrir myndir';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'L�sing';
	var $_PHPSHOP_PAYMENT = 'GGrei�slur';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'S�na grei�slum�ta';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Listi yfir grei�slum�ta';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Nafn';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'K��i';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Afsl�ttur';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'H�pur';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Ger� grei�slu';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'B�ta vi� grei�slum�ta';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Ger� grei�slu';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Nafn grei�slu';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Notenda h�pur';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Afsl�ttur';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'K��i';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'S�na eftir';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Ger� grei�slu';
	var $_PHPSHOP_TAX_MOD = 'VSK';
	var $_PHPSHOP_TAX_RATE = 'VSK hlutfall';
	var $_PHPSHOP_TAX_LIST_MNU = 'S�na hlutf�ll VSK';
	var $_PHPSHOP_TAX_LIST_LBL = 'Listi yfir VSK hlutf�ll';
	var $_PHPSHOP_TAX_LIST_STATE = 'Tax State or Region';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'VSK eftir landi';
	var $_PHPSHOP_TAX_LIST_RATE = 'Hlutfall VSK';
	var $_PHPSHOP_TAX_FORM_MNU = 'B�ta vi� VSK hlutfalli';
	var $_PHPSHOP_TAX_FORM_LBL = 'B�ta vi� uppl�singum um VSK hlutfall';
	var $_PHPSHOP_TAX_FORM_STATE = 'Tax State or Region';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'VSK eftir landi';
	var $_PHPSHOP_TAX_FORM_RATE = 'VSK hlutfall (fyrir 16% => settu �� inn 0.16)';
	var $_PHPSHOP_VENDOR_MOD = 'S�lua�ili';
	var $_PHPSHOP_VENDOR_ADMIN = 'S�lua�ilar';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'S�na s�lua�ila';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Listi yfir s�lua�ila';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Nafn s�lua�ila';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Stj�rnandi';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'B�ta vi� s�lua�ila';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'B�ta inn uppl�singum';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Uppl�singar um s�lua�ila';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Uppl�singar um tengla';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'St�r mynd';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Upphala mynd';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Nafn verslunar';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Nafn fyrirt�kis';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Heimilisfang 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Heimilisfang 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Sta�ur';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'State/Province/Region';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'P�stn�mer';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'S�mi';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Gjaldmi�ill';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Flokkur s�lua�ila';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Nafn';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'First Name';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Middle Name';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Titill';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'S�mi 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'S�mi 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Fax';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'Netfang';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Sl�� fyrir mynd';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'L�sing';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'S�na s�lua�ila (flokka)';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Vendor listi';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Flokkur';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'L�sing';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Vendors';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Add Vendor Category';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Vendor Category Form';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Category Information';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Category Name';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Category Description';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Famlei�andi';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Framlei�endur';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'S�na framlei�endur';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Listi yfir framlei�endur';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Nafn framlei�anda';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Admin';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'B�ta vi� framlei�anda';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'B�ta vi� uppl�singum';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Uppl�singar um framlei�anda';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Nafn framlei�anda';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Flokkur framlei�anda';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'Netfang';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'Sl�� � heimas��u framlei�anda';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'L�sing';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'S�na flokka yfir framlei�endur';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Flokkar framlei�enda';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Nafn flokks';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'L�sing flokks';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Framlei�endur';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'B�ta vi� flokk framlei�enda';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Flokkur framlei�enda form';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Uppl�singar um flokk';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Nafn flokks';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'L�sing flokks';
	var $_PHPSHOP_HELP_MOD = 'Hj�lp';
	var $_PHPSHOP_CART_ACTION = 'Uppf�ra';
	var $_PHPSHOP_CART_UPDATE = 'Uppf�ra fj�lda � k�rfu';
	var $_PHPSHOP_CART_DELETE = 'Ey�a v�ru �r k�rfu';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Ver�';
	var $_PHPSHOP_PRODUCT_CALL = 'Hringja eftir ver�i';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Bakka';
	var $_PHPSHOP_PRODUCT_NEXT = '�fram';
	var $_PHPSHOP_CART_TAX = 'VSK';
	var $_PHPSHOP_CART_SHIPPING = 'Sendingarkostna�ur';
	var $_PHPSHOP_CART_TOTAL = 'Samtals';
	var $_PHPSHOP_CHECKOUT_NEXT = 'N�st';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'SKR�';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Uppl�singar um grei�slu';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Fyrirt�ki';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Nafn';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Heimilisfang';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'S�mi';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'Netfang';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Uppl�singar um afhendingu';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Fyrirt�ki';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Nafn';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Heimilisfang';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'S�mi';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Uppl�singar um grei�slu';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Nafn � korti';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Grei�slum�ti';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Kortan�mer';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Gildist�mi';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Kl�ra p�ntun';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'nau�synlegar uppl�singar ef greitt er me� kreditkorti';
	var $_PHPSHOP_ZONE_MOD = 'Zone Shipping';
	var $_PHPSHOP_ZONE_LIST_MNU = 'List Zones';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Add Zone';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Assign Zones';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Country';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Current Zone';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Assign To Zone';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Update';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Assign Zones';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Nafn sta�ar';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'L�sing';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Kostna�ur � hvern hlut';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'H�marks kostna�ur';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Nafn sta�ar';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Nafn sta�ar';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'L�sing';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Kostna�ur � hvern hlut';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'H�marks kostna�ur';
	var $_PHPSHOP_LOGIN_FIRST = 'Vinsamlegast skr��u inn e�a stofna�u a�gang (use the Login module) fyrst.<br>Takk fyrir.';
	var $_PHPSHOP_STORE_FORM_TOS = 'Skilm�lar';
	var $_PHPSHOP_AGREE_TO_TOS = 'Vinsamlegast sam�ykki� skilm�lana fyrst.';
	var $_PHPSHOP_I_AGREE_TO_TOS = '�g sam�ykki skilm�lana';
	var $_PHPSHOP_LEAVE_BLANK = '(leave BLANK if you have <br />no individual php-file for it!)';
	var $_PHPSHOP_RETURN_LOGIN = 'Skr��ir notendur: Vinsamlegast skr�i� ykkur inn';
	var $_PHPSHOP_NEW_CUSTOMER = 'N�r notandi? Vinsamlegast skr��u uppl�singar fyrir grei�slu';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Reikningur notanda:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'uppl�singar um p�ntun';
	var $_PHPSHOP_ACC_UPD_BILL = 'H�r getur�u uppf�rt uppl�singar um grei�slum�ta.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'H�r getur�u uppf�rt uppl�singar um afhendingarsta�.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Uppl�singar um reikning';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Uppl�singar um afhendingu';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Engar pantanir til a� s�na';
	var $_PHPSHOP_ACC_BILL_DEF = ' Sj�lfvali� (Sama og hj� grei�anda)';
	var $_PHPSHOP_SHIPTO_TEXT = '�� getur b�tt vi� afhendingarst��um h�r. Vinsamlegast b��u til styttingu � sta�arnafninu.';
	var $_PHPSHOP_CONFIG = 'Stillingar';
	var $_PHPSHOP_USERS = 'Notendur';
	var $_PHPSHOP_IS_CC_PAYMENT = 'er kreditkorta grei�sla?';
	var $_PHPSHOP_SHIPPING_MOD = 'Sendingar';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Sendingar';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Flutningsa�ili';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Listi yfir flutningsa�ila';
	var $_PHPSHOP_RATE_LIST_MNU = 'Gjaldskr�';
	var $_PHPSHOP_RATE_LIST_LBL = 'Listi yfir gjaldskr�r';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Nafn';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'S�na eftir';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Create Shipper';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Shipper edit / create';
	var $_PHPSHOP_RATE_FORM_MNU = 'Create a Shipping Rate';
	var $_PHPSHOP_RATE_FORM_LBL = 'Create/Edit a Shipping Rate';
	var $_PHPSHOP_RATE_FORM_NAME = 'Shipping Rate description';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Flutningsa�ili';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Country:<br /><br /><i>Multiselect: use STRG-Key and Mouse</i>';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'ZIP range start';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'ZIP range end';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Lowest Weight';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Highest Weight';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Fee';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Your package fee';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Currency';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'VAT Id';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'List Order';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Flutningsa�ili';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Shipping Rate description';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Weight from ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... to';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Shipper Company';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Listorder';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'ERROR: Shipper ID exists.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'ERROR: Choose a shipper.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'ERROR: At least one Shipping Rate exists, delete rates prior to shipper';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'ERROR: Unable to find a shipper with this ID.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'ERROR: Choose a shipper.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'ERROR: Unable to find a shipper with this ID.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'ERROR: A rate descriptor is requested.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'ERROR: The Destination country is invalid. More than one country could be separated with ";".';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'ERROR: A lowest weight is requested';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'ERROR: A highes weight are requested';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'ERROR: The lowest weight must be smaller than the highes weight';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'ERROR: A shipping fee requested';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'ERROR: Coose a currency';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'ERROR: A Shipping Rate is requested';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Vinsamlegast veldu';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Sendandi';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Afhending';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Ver�';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-none-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Credit Card';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Use Payment Processor';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Bank debit';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Address only / Cash on Delivery';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Vinsamlegast heimilisfang fyrir afhendingu (ef �a� � vi�)!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Vinsamlegast veldu afhendingarm�ta!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Vinsamlegast veldu grei�slum�ta!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Vinsamlegast gangtu �r skugga um a� p�ntunin s� r�tt og sta�festu hana!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Please select a Shipping Method.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Please select another Shipping Method.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Vinsamlegast veldu grei�slum�ta.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Please enter your Credit Card Number.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Please enter the Name on the Credit Card.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'The Credit Card Number entered is not valid.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Please enter the Credit Card expiration month.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Please enter the Credit Card expiration year.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'The expiration date is invalid.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Please select a Ship To address.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Invalid account number.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'There\'s nothing in your cart!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'ERROR: Please select a Shipping Carrier!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'ERROR: The selected Shipping Rate was not found!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'ERROR: Your Shipping Address was not found!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'ERROR: There\'s no CreditCard data...';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'ERROR: Credit Card Number not found!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Sorry, but the Credit Card Number you\'ve used is a testing number!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'The user_id was not found in the database!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'You have actually not provided your bank account holder name.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'You have actually not provided your IBAN.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'You have actually not provided your bank account number.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'You have actually not provided your bank sort code.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'You have actually not provided your bank\'s name.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'CheckOut needs a valid Step!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Payment information captured for later processing.<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Minimum purchase order value has not been reached yet.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'Our minimum purchase order value is:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Credit Card Payment';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'Grei�slum�ti';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Vinsamlegast veldu grei�slum�ta:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'L�gmarks kaupver� � vefverslun';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Banka uppl�singar';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Reikningur NR:';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'Bankan�mer r��un';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Bankanafn';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Eigandi';
	var $_PHPSHOP_MODULES = 'Modules';
	var $_PHPSHOP_FUNCTIONS = 'A�ger�ir';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'V�rur � tilbo�i';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Vinsamlegast skrifa�u athugasemdir ef einhverjar eru';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Athugasemdir kaupanda';
	var $_PHPSHOP_INCLUDING_TAX = '(Me� VSK $tax % tax)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Vinsamlegast veldu';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Hlutur';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Ni�urhal';
	var $_PHPSHOP_DOWNLOADS_START = 'Byrja ni�urhal';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Vinsamlegast sl��u inn kenni fyrir ni�urhali� og smelltu svo � \'Start Download\'.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = '�v� mi�ur er �etta ni�urhal �trunni�';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'heildar fj�lda ni�urhala fyrir �essa v�ru hefur veri� n��';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Rangt kenni fyrir ni�urhal!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Gat ekki sent skilabo� til ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Skilabo� send til ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Uppl�singar um ni�urhal';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'skr�rnar sem �� pannta�ir eru tilb�nar til ni�urhals';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Sl��u inn kenni ni�urhals � ni�urhalssv��inu ��nu: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'heildarfj�ldi ni�urhala fyrir �essa v�ru er: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Ni�urhal til {expire} eftir fyrsta ni�urhal';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Spurningar? Vandam�l?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Uppl�singar um ni�urhal fr� ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'H�gt a� ni�urhala?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Takk fyrir grei�sluna. 
        A�ger�in t�kst. �� f�r� sta�festingu fr� PayPal. 
        �� getur n� skr�� �ig inn hj� <a href=http://www.paypal.com>www.paypal.com</a> to see the transaction details.';
	var $_PHPSHOP_PAYPAL_ERROR = 'Villa kom upp vi� a�ger�ina. Ekki var h�gt a� uppf�ra st��u p�ntunarinnar.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Takk fyrir a� versla vi� 24/7.  Sta�an � p�ntuninni er:.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Thank you for your patronage.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Spurningar? Vandam�l?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'Eftirfarandi p�ntun var ger�.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Sko�a�u p�ntunina h�r >>>.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Neikv��ur fj�ldi er ekki leyf�ur.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Vinsamlega sl��u inn r�ttan fj�lda.';
	var $_PHPSHOP_CART_STOCK_1 = 'Ekki er til n�gilegt magn � lager. ';
	var $_PHPSHOP_CART_STOCK_2 = 'Vi� eigum til $product_in_stock hluti � lager. ';
	var $_PHPSHOP_CART_STOCK_3 = 'Smelltu h�r ef �� vilt vera � bi�lista.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Veldu hlut!';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'engin';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Hr.';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Fr�.';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Dr.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof.';
	var $_PHPSHOP_DEFAULT = 'Sj�lfvali�';
	var $_PHPSHOP_AFFILIATE_MOD = 'Affiliate Administration';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'List Affiliates';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Affiliates List';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Affiliate Name';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Active';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Rate';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Month Total';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Month Commission';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'List Orders';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'Email Affiliates';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'Email Affiliates';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'Who to Email(* = ALL)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Your Email';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'The Subject';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Include Current Statistics';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Commission Rate (percent)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Active?';
	var $_PHPSHOP_DELIVERY_TIME = 'Usually ships in';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Delivery Information';
	var $_PHPSHOP_MORE_CATEGORIES = 'A�rir flokkar';
	var $_PHPSHOP_AVAILABILITY = 'Availability';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'This product is currently not available.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'It will be available again on: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Yfirlit';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Sta�a';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Notendur';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'virkar v�rur';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = '�virkar v�rur';
	var $_PHPSHOP_STATISTIC_SUM = 'Samtals';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'N�jar pantanir';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'N�ir notendur';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Please enter your e-mail address below to be notified when this product comes back in stock. 
                                        We will not share, rent, sell or use this e-mail address for any other purpose other than to 
                                        tell you when the product is back in stock.<br /><br />Thank you!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Thanks for waiting! <br />We will let you know as soon as we get our inventory.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Notify Me!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Print view';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Please choose EITHER Authorize.net OR CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' Sta�a kerfisskr�a:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'er skrifanleg';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'er �skrifanleg';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Global';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Sl��ir';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'S��a';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Sendingar';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Fr�gangur';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Ni�urhal';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'grei�slur';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Nota einungis sem v�rulista';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'If you check this, you disable all cart functionalities.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'S�na ver�';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'S�na ver� me� skatti?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Sets the flag whether the shoppers sees prices including tax or excluding tax.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Check to show prices. If using catalogue functionality, some don\'t want prices to appear on pages.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Virtual Tax';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'This determines whether items with zero weight are taxed or not. Modify ps_checkout.php->calc_order_taxable() to customize this.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Tax mode:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Based on shipping address';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Based on vendor address';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'This determines which tax rate is taken for calculating taxes:<br />
                                                <ul><li>the one from the state / country the store owner comes from</li><br/>
                                                <li>or the one from where the shopper comes from.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Enable multiple tax rates?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Check this, if you have products with different tax rates (e.g. 7% for books and food, 16% for other stuff)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Subtract payment discount before tax/shipping?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Enable Customer Review/Rating System';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'If enabled, you allow customers to <strong>rate products</strong> and <strong>write reviews</strong> about them. <br />
                                                                                So customers can write down their experiences with the product for other customers.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Sets the flag whether to subtract the Discount for the selected payment BEFORE (checked) or AFTER tax and shipping.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Customers can leave bank account data?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Check if your customers shall have the ability to provide their bank account data when registering to the shop.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Customers can select a state/region?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Check if your customers shall have the ability to select their state / region data when registering to the shop.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Must agree to Terms of Service?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Check if you want a shopper to agree to your terms of service before registering to the shop.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Check Stock?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Sets whether to check the stock level when a user adds an item to the shopping cart. 
                                                                                          If set, this will not allow user to add more items to the cart than are available in stock.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Enable Affiliate Program?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'This enables the affiliate tracking in the shop-frontend. Enable if you have added affiliates in the backend..';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Order-mail format:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Text mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'This determines how your order confirmation emails are set up:<br />
                                                                                        <ul><li>as a simple text email</li>
                                                                                        <li>or as a html email with images.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Allow Frontend-Administration for non-Backend Users?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'With this setting you can enable the Frontend Administration for users who 
                                                                                              are storeadmins, but can\'t access the Mambo Backend (e.g. Registered / Editor).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'The URL to your site. Usually identical to your Mambo URL (with trailing slash at the end!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'SECUREURL';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'The secure URL to your site. (https - with trailing slash at the end!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'COMPONENTURL';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'The URL to the mambo-phpShop component. (with trailing slash at the end!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'IMAGEURL';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'The URL to the mambo-phpShop component image directory.(with trailing slash at the end!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'ADMINPATH';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'The path to your mambo-phpShop component directory.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'CLASSPATH';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'The path to your phpShop classes directory.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'PAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'The path to your phpShop html directory.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'IMAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'The path to your phpShop shop_image directory.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'HOMEPAGE';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'This is the page which will be loaded by default.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'ERRORPAGE';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'This is the default page for displaying error messages.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'DEBUGPAGE';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'This is the default page for displaying debug messages.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'DEBUG ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'DEBUG?  	   	Turns on the debug output. This causes the DEBUGPAGE to be displayed at the bottom of each page. Very helpful during shop development since it shows the carts contents, form field values, etc.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'FLYPAGE';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'This is the default page for displaying product details.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Category Template';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'This defines the default category template for displaying products in a category.<br />
                                                                                                      You can create new templates by customizing existing template files <br />
                                                                                                      (which reside in the directory <strong>COMPONENTPATH/html/templates/</strong> and begin with browse_)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Sj�lfvali� number of products in a row';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'This defines the number of products in a row. <br />
                                                                                                      Example: If you set it to 4, the category template will display 4 products per row';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = '"no image" image';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'This image will be shown when no product image is available.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'SEARCH ROWS';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Determines the number of rows per page when search results are displayed in a list.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'SEARCH COLOR 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Specifies the color of the odd numbered rows in a result list.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'SEARCH COLOR 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Specifies the color of the even numbered rows in a result list.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'MAXIMUM ROWS';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Sets the number of rows to show in the order list select box.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Show footer ';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Displays a powered-by-mambo-phpShop footer image.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Choose your store\'s shipping method';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Standard Shipping module with indiviual configured carriers and rates. <strong>RECOMMENDED !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '  	Zone Shipping Module Country Version 1.0<br />
                                                                                                            For more information on this module please visit <a href="http://ZephWare.com">http://ZephWare.com</a><br />
                                                                                                            for details or contact <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Check this to enable the zone shipping module';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = 'UPS Tools Shipping calculation';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'UPS access code';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Your UPS access code';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'UPS user id';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'The user ID you got from UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'UPS password';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'The password for your UPS account';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'InterShipper Module. Check only if you have an Intershipper.com account';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Disable Shipping method selection. Choose if your customers buy downloadable goods which don\'t have to be shipped.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'InterShipper Password';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Your password for your intershipper account.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'InterShipper email';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'Your email address for your intershipper account.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'ENCODE KEY';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Used to encrypt data stored in database with this key. This means that this file should be protected from viewing at all times.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Enable the Checkout Bar';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Check this, if you want the \'checkout-bar\' to be displayed to the customer during checkout process ( 1 - 2 - 3 - 4 with graphics).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Choose your store\'s checkout process';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Standard :</strong><br/>
               1. Shipping address request<br />
              2. Shipping method request<br />
              3. Payment method request<br />
              4. Complete Order';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Process 2:</strong><br/>
               1. Shipping address request<br />
              2. Payment method request<br />
              3. Complete Order';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Process 3:</strong><br/>
               1. Shipping method request<br />
              2. Payment method request<br />
              3. Complete Order';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Process 4:</strong><br/>
               1. Payment method request<br />
              2. Complete Order';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Enable Downloads';
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
	var $_PHPSHOP_ADVANCED_SEARCH = 'N�nari leit';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Leita � �llum flokkum';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Leita � uppl�singum um v�rur';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Leita eftir v�runafni';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Framlei�andi';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'L�sing v�ru';
	var $_PHPSHOP_SEARCH_AND = 'og';
	var $_PHPSHOP_SEARCH_NOT = 'ekki';
	var $_PHPSHOP_SEARCH_TEXT1 = 'Fyrsti ni�urfelldi listinn gefur ��r t�kif�ri til a� velja flokk til a� leita �. 
        Annar ni�urfelldi listinn gefur ��r t�kif�ri til a� velja einhvern �kve�in hluta af v�rul�singu til a� leita eftir (t.d. Nafn). 
        �egar �� hefur vali� (e�a l�ti� forstillingu r��a), sl��u inn or� til a� leita eftir. ';
	var $_PHPSHOP_SEARCH_TEXT2 = ' �� getur �rengt leitina enn frekar me� �vi a� nota OG e�a EKKI. 
        Me� �v� a� velja OG velur�u a� b��i or�in ver�a a� vera til sta�ar til a� vara finnist. 
        Ef �� velur NOT ver�ur van einungis funndin ef fyrra or�i� er til sta�ar 
        en ekki seinna or�i�.';
	var $_PHPSHOP_ORDERBY = 'Finna eftir';
	var $_PHPSHOP_CUSTOMER_RATING = 'D�mar notenda';
	var $_PHPSHOP_TOTAL_VOTES = 'Atk��i';
	var $_PHPSHOP_CAST_VOTE = 'Kj�sa';
	var $_PHPSHOP_RATE_BUTTON = 'Rate';
	var $_PHPSHOP_RATE_NOM = 'Vins�ldir';
	var $_PHPSHOP_REVIEWS = 'Umsagnir';
	var $_PHPSHOP_NO_REVIEWS = '�a� eru engar umsagnir um v�runa enn.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Vertu firstur til a� skrifa ums�gn...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Vinsamlegast skr��u �ig inn e.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Please rate the product to complete your review!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Please write down some more words for your review. Mininum characters allowed: 100';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Please shorten your review. Maximum characters allowed: 2000';
	var $_PHPSHOP_WRITE_REVIEW = 'Write a review for this product!';
	var $_PHPSHOP_REVIEW_RATE = 'First: Rate the product. Please select a rating between 0 (poorest) and 5 stars (best).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Now please write a (short) review....(min. 100, max. 2000 characters) ';
	var $_PHPSHOP_REVIEW_COUNT = 'Characters written: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Submit Review';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'You already have written a review for this product. Thank you.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Thanks for your review.';
	var $_PHPSHOP_COMMENT = 'Comment';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Add/Edit Credit Card Types';
	var $_PHPSHOP_CREDITCARD_NAME = 'Credit Card Name';
	var $_PHPSHOP_CREDITCARD_CODE = 'Credit Card - Short Code';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Credit Card Type';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Credit Card List';
	var $_PHPSHOP_UDATE_ADDRESS = 'Update Address';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Halda �fram a� versla';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'P�ntunin ��n var send!';
	var $_PHPSHOP_ORDER_LINK = 'N�nari uppl�singar um p�ntunina h�r.';
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
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Afsl�ttur';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Sj� st�ra mynd';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Currency Display Style';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Currency symbol';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'You can also use HTML Entities here (e.g. &euro;,&pound;,&yen;,...)';
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
	var $_PHPSHOP_MULTISELECT = 'Multiselect: use CTRL-Key and Mouse';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'Enable eProcessingNetwork.com payment?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Check to use eProcessingNetwork.com with phpShop.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Test mode ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Select ';
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
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Sorry, but the Product you';
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
        
}
class phpShopLanguage extends vmLanguage { }

/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>