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
	var $_PHPSHOP_MENU = 'Menu';
	var $_PHPSHOP_CATEGORY = 'Kategorie';
	var $_PHPSHOP_CATEGORIES = 'Kategorie';
	var $_PHPSHOP_SELECT_CATEGORY = 'Vyberte kategorii:';
	var $_PHPSHOP_ADMIN = 'Administrace';
	var $_PHPSHOP_PRODUCT = 'Zbo��';
	var $_PHPSHOP_LIST = 'Seznam';
	var $_PHPSHOP_ALL = 'V�e';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Seznam ve�ker�ho zbo��';
	var $_PHPSHOP_VIEW = 'Zobrazit';
	var $_PHPSHOP_SHOW = 'Uk�zat';
	var $_PHPSHOP_ADD = 'P�idat';
	var $_PHPSHOP_UPDATE = 'Aktualizovat';
	var $_PHPSHOP_DELETE = 'Smazat';
	var $_PHPSHOP_SELECT = 'Vybrat';
	var $_PHPSHOP_SUBMIT = 'Odeslat';
	var $_PHPSHOP_RANDOM = 'N�hodn� zbo��';
	var $_PHPSHOP_LATEST = 'Posledn� zbo��';
	var $_PHPSHOP_HOME_TITLE = 'Dom�';
	var $_PHPSHOP_CART_TITLE = 'Ko��k';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Zaplatit';
	var $_PHPSHOP_LOGIN_TITLE = 'P�ihl�sit se';
	var $_PHPSHOP_LOGOUT_TITLE = 'Odhl�sit se';
	var $_PHPSHOP_BROWSE_TITLE = 'Prohl��et';
	var $_PHPSHOP_SEARCH_TITLE = 'Hledat';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Va�e �daje';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Navigace';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Odd�len�';
	var $_PHPSHOP_INFO = 'Informace';
	var $_PHPSHOP_BROWSE_LBL = 'Prohl��et';
	var $_PHPSHOP_PRODUCTS_LBL = 'Zbo��';
	var $_PHPSHOP_PRODUCT_LBL = 'Zbo��';
	var $_PHPSHOP_SEARCH_LBL = 'Hledat';
	var $_PHPSHOP_FLYPAGE_LBL = 'Detaily o zbo��';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Hledat zbo��';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'N�zev zbo��';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Kategorie zbo��';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Popis';
	var $_PHPSHOP_CART_SHOW = 'Obsah ko��ku';
	var $_PHPSHOP_CART_ADD_TO = 'P�idat do ko��ku';
	var $_PHPSHOP_CART_NAME = 'Jm�no';
	var $_PHPSHOP_CART_SKU = 'K�d zbo��';
	var $_PHPSHOP_CART_PRICE = 'Cena';
	var $_PHPSHOP_CART_QUANTITY = 'Mno�stv�';
	var $_PHPSHOP_CART_SUBTOTAL = 'Mezisou�et';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'P�idat';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Dodac� adresa';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Nic nebylo nalezeno.<br />';
	var $_PHPSHOP_PRICE_LABEL = 'Cena: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Vlo�it do ko��ku';
	var $_PHPSHOP_NO_CUSTOMER = 'Nejste je�t� registrovan� z�kazn�k, zadejte pros�m faktura�n� �daje.';
	var $_PHPSHOP_DELETE_MSG = 'Opravdu chcete smazat tuto polo�ku?';
	var $_PHPSHOP_THANKYOU = 'D�kujeme v�m za va�i objedn�vku.';
	var $_PHPSHOP_NOT_SHIPPED = 'Je�t� neodesl�no';
	var $_PHPSHOP_EMAIL_SENDTO = 'E-mail s potvrzen�m byl zasl�n na adresu';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Lituji, neexistuje u�ivatel MamboOS, kter�ho byste mohli p�idat do seznamu u�ivatel� com_phpshop';
	var $_PHPSHOP_ERROR = 'Chyba';
	var $_PHPSHOP_MOD_NOT_REG = 'Modul nen� registrov�n.';
	var $_PHPSHOP_MOD_ISNO_REG = 'nen� platn� modul phpShop.';
	var $_PHPSHOP_MOD_NO_AUTH = ' Nem�te opr�vn�n� pracovat s po�adovan�m modulem.';
	var $_PHPSHOP_PAGE_404_1 = 'Str�nka neexistuje';
	var $_PHPSHOP_PAGE_404_2 = 'Zadan� jm�no souboru neexistuje. Nelze nal�zt soubor:';
	var $_PHPSHOP_PAGE_403 = 'Nedostate�n� pr�va';
	var $_PHPSHOP_FUNC_NO_EXEC = 'Nem�te  opr�vn�n� na vykon�n� ';
	var $_PHPSHOP_FUNC_NOT_REG = 'Funkce nen� registrov�na';
	var $_PHPSHOP_FUNC_ISNO_REG = ' nen� platn� funkce MOS_com_phpShop.';
	var $_PHPSHOP_ADMIN_MOD = 'Administrace';
	var $_PHPSHOP_USER_LIST_MNU = 'Seznam u�ivatel�';
	var $_PHPSHOP_USER_LIST_LBL = 'U�ivatel�';
	var $_PHPSHOP_USER_LIST_USERNAME = 'U�ivatel. jm�no';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Pln� jm�no';
	var $_PHPSHOP_USER_LIST_GROUP = 'Skupina';
	var $_PHPSHOP_USER_FORM_MNU = 'P�idat u�ivatele';
	var $_PHPSHOP_USER_FORM_LBL = 'P�idat/zm�nit informaci o u�ivateli';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Informace o pl�tci';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Dodac� adresa';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'P�idat adresu';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = '��dn� dodac� adresa.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Zkratka adresy';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'K�estn� jm�no';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'P��jmen�';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Prost�edn� jm�no';
	var $_PHPSHOP_USER_FORM_TITLE = 'Titul';
	var $_PHPSHOP_USER_FORM_USERNAME = 'U�ivatelsk� jm�no';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Heslo';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Potvrdit heslo';
	var $_PHPSHOP_USER_FORM_PERMS = 'Opr�vn�n�';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = '��slo z�kazn�ka / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'N�zev firmy';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Adresa 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Adresa 2';
	var $_PHPSHOP_USER_FORM_CITY = 'M�sto';
	var $_PHPSHOP_USER_FORM_STATE = 'St�t/Provincie';
	var $_PHPSHOP_USER_FORM_ZIP = 'PS�';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'St�t';
	var $_PHPSHOP_USER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Mobiln� telefon';
	var $_PHPSHOP_USER_FORM_FAX = 'Fax';
	var $_PHPSHOP_USER_FORM_EMAIL = 'e-mail';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Seznam modul�';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Moduly';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Jm�no modulu';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Opr�vn�n� modulu';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Funkce';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Po�ad�';
	var $_PHPSHOP_MODULE_FORM_MNU = 'P�idat modul';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Informace o modulu';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'N�zev modulu (pro horn� menu)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Jm�no modulu';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Pr�va modulu';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Z�hlav� modulu';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Z�pat� modulu';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Zobrazit modul v menu Administrace?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Po�ad� zobrazen�';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Popis modulu';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'K�d jazyka';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Soubor s jazykem';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Seznam funkc�';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Funkce';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Jm�no funkce';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Jm�no t��dy';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Metoda t��dy';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Opr�vn�n�';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'P�idat funkci';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Informace o funkci';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Jm�no funkce';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Jm�no t��dy';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Metoda t��dy';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Opr�vn�n� funkce';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Popis funkce';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Seznam m�n';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'M�ny';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'P�idat m�nu';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'N�zev m�ny';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'K�d m�ny';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Seznam zem�';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Zem�';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'P�idat zemi';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Jm�no zem�';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'K�d zem� (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'K�d zem� (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Seznam st�t�';
	var $_PHPSHOP_STATE_LIST_LBL = 'St�t';
	var $_PHPSHOP_STATE_LIST_ADD = 'P�idat/aktualizovat st�t';
	var $_PHPSHOP_STATE_LIST_NAME = 'Jm�no st�tu';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'K�d st�tu (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'K�d st�tu (2)';
	var $_PHPSHOP_ADDRESS = 'Adresa';
	var $_PHPSHOP_CONTINUE = 'Pokra�ovat';
	var $_PHPSHOP_EMPTY_CART = 'V� ko��k je pr�zdn�';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Ping InterShipper Server';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'InterShipper-Server Ping ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'InterShipper Ping Failed';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'InterShipper Ping Successful';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Carrier';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Response<br />Time';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'sec.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Seznam zp�sob� dopravy';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Aktivn� zp�sob dopravy';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Zp�sob dopravy';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Aktivn�';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Baln�';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Lead Time';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'fixn� sazba';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'procenta';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'dny';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Nadm�rn� z�silky';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Konfigurovat zp�soby dopravy';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'P�idat metodu dopravy';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Konfigurovat metodu dopravy';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Obnovit';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Zp�sob dopravy';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Aktivovat';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Baln�';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Lead Time';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'pevn� sazba';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'procenta';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'dny';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Nadm�rn� z�silky';
	var $_PHPSHOP_ORDER_MOD = 'Objedn�vky';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Potvrdit objedn�vku';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Zru�it objedn�vku';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Vytisknout objedn�vku';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Vymazat objedn�vku';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Seznam objedn�vek';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Seznam objedn�vek';
	var $_PHPSHOP_ORDER_LIST_ID = '��slo objedn�vky';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Datum objedn�vky';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Naposledy zm�n�no';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Stav';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'Mezisou�et';
	var $_PHPSHOP_ORDER_ITEM = 'Objednan� zbo��';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Objedn�vka';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = '��slo objedn�vky';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Datum objedn�vky';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Stav objedn�vky';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = '�daje o z�kazn�kovi';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Faktura�n� �daje';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = '�daje pro dopravu';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Fakturovat';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Dodat';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Jm�no';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Firma';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Adresa 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Adresa 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'M�sto';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'St�t/Provincie';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'PS�';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'St�t';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Telefon';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Fax';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'e-mail';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Objednan� zbo��';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Mno�stv�';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'ks';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'K�d';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Cena';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Celkem';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'Mezisou�et';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'DPH celkem';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Dopravn� a baln�';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'DPH pro dopravn� a baln�';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Zp�sob platby';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Jm�no ��tu';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = '��slo ��tu';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Platnost do';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Z�znam plateb';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Informace o dod�n�';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Informace o platb�';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Dopravce';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Zp�sob dopravy';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Datum expedice';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Dopravn�';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Seznam stav� objedn�vky';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'P�idat stav objedn�vky';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'K�d stavu objedn�vky';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'N�zev stavu objedn�vky';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Stav objedn�vky';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'K�d stavu objedn�vky';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'N�zev stavu objedn�vky';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Po�ad�';
	var $_PHPSHOP_PRODUCT_MOD = 'Zbo��';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Aktu�ln� zbo��';
	var $_PHPSHOP_CURRENT_ITEM = 'Aktu�ln� polo�ka';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Seznam zbo��';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Zobrazit seznam';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Cena';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Po�et';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Hmotnost';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Seznam zbo��';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Seznam zbo��';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'N�zev zbo��';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'K�d';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Publikovat';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Vyhledej zbo��';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'aktualizovan�';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 's aktualizovanou cenou';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'bez zadan� ceny';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'po';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'p�ed';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'P�idat zbo��';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Editovat toto zbo��';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'N�hled str�nky zbo�� v obchod�';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'P�idat polo�ku';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'P�idat dal�� polo�ku';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Nov� zbo��';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Upravit zbo��';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Informace o zbo��';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Stav  zbo��';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Rozm�ry a hmotnost zbo��';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Obr�zky zbo��';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Nov� polo�ka';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Upravit polo�ku';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Informace o polo�ce';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Stav polo�ky';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Rozm�ry a hmotnost polo�ky';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Obr�zky polo�ky';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'N�vrat k nad�azen�mu zbo��';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'Pro aktualizaci obr�zku zadejte cestu k nov�mu obr�zku.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Napi�te "none" pro smaz�n� obr�zku.';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Polo�ky zbo��';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Vlastnosti polo�ky';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Jste si jist �e chcete smazat toto zbo��\\na polo�ky k n�mu p�ipojen�?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Jste si jist �e chcete smazat tuto polo�ku?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Prodejce';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'V�robce';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'K�d';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Jm�no';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Kategorie';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Cena (s DPH)';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Cena (bez DPH)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Popis str�nky zbo��';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Kr�tk� popis';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'Na sklad�';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'Objedn�no';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Bude k dispozici';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'V akci';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Typ slevy';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Publikovat?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'D�lka';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = '���ka';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'V��ka';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Jednotka d�lky';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Hmotnost';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Jednotka hmotnosti';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'N�hled';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Obr�zek';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'kg';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'mm';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Jednotka';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'kus';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Jednotek v balen�';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Zde m��ete vyplnit po�et jednotek v balen�. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Jednotek v krabici';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Zde m��ete vyplnit po�et jednotek v krabici. (max. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'V�sledek p�id�n� zbo��';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'V�sledek �pravy zbo��';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'V�sledek p�id�n� polo�ky';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'V�sledek �pravy polo�ky';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Pou��t upload CSV';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Slo�ky zbo��';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Seznam kategori�';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Strom kategori�';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'P�idat kategorii';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Informace o kategorii';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'N�zev kategorie';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Nad�azen� kategorie';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Popis kategorie';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Publikovat?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Str�nka kategorie';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Seznam atribut�';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Seznam atribut� pro';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'N�zev atributu';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Po�ad� seznamu (list order)';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'P�idat atribut';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Formul�� atributu';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Nov� atribut pro zbo��';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Upravit atribut zbo��';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Nov� atribut pro polo�ku';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Upravit atribut pro polo�ku';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'N�zev atributu';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Po�ad�';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Seznam kategori�';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Strom cen';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Cena za';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'N�zev skupiny';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Cena';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'M�na';
	var $_PHPSHOP_PRICE_FORM_MNU = 'P�idat cenu';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Informace o cen�';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Nov� cena zbo��';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Upravit cenu zbo��';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Nov� cena polo�ky';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Upravit cenu polo�ky';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Cena';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'M�na';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Skupina z�kazn�k�';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Sestavy';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Individu�ln� v�pis zbo��';
	var $_PHPSHOP_RB_SALE_TITLE = 'Sestavy prodeje';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'P�ehled prodeje';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Nastavit interval';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'M�s��n�';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'T�denn�';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Denn�';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Tento m�s�c';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'Minul� m�s�c';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'Posledn�ch 60 dn�';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'Posledn�ch 90 dn�';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Za��tek';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Konec';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Zobrazit vybran� obdob� ';
	var $_PHPSHOP_RB_REPORT_FOR = 'Sestava pro ';
	var $_PHPSHOP_RB_DATE = 'Datum';
	var $_PHPSHOP_RB_ORDERS = 'Objedn�vky';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Celkem prod�no polo�ek';
	var $_PHPSHOP_RB_REVENUE = 'Tr�ba';
	var $_PHPSHOP_RB_PRODLIST = 'V�pis zbo��';
	var $_PHPSHOP_SHOP_MOD = 'Obchod';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Obr�zek';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Cena';
	var $_PHPSHOP_ORDER_STATUS_P = 'Nevy��zeno';
	var $_PHPSHOP_ORDER_STATUS_C = 'Potvrzeno';
	var $_PHPSHOP_ORDER_STATUS_X = 'Zru�eno';
	var $_PHPSHOP_ORDER_BUTTON = 'Objednat';
	var $_PHPSHOP_SHOPPER_MOD = 'Z�kazn�ci';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Seznam z�kazn�k�';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Seznam z�kazn�k�';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'U�ivatelsk� jm�no';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Pln� jm�no';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Skupina';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'P�idat z�kazn�ka';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Informace o z�kazn�kovi';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Faktura�n� informace';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Informace';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Informace o doprav�';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'P�idat adresu';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Zkratka adresy';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'U�ivatelsk� jm�no';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'K�estn� jm�no';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'P��jmen�';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Prost�edn� jm�no';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Titul';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Jm�no z�kazn�ka';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Heslo';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Potvrdit heslo';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Skupina z�kazn�k�';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Firma';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Adresa 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Adresa 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'M�sto';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'St�t/Provincie';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'PS�';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'St�t';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Mobiln� telefon';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Fax';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = 'I�O';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = 'DI�';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Yes';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'No';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Seznam skupin z�kazn�k�';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Seznam skupin z�kazn�k�';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'N�zev skupiny';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Popis skupiny';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Formul�� skupiny z�kazn�k�';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'P�idat skupinu z�kazn�k�';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'N�zev skupiny';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Popis skupiny';
	var $_PHPSHOP_STORE_MOD = 'Obchod';
	var $_PHPSHOP_STORE_FORM_MNU = 'Nastaven� obchodu';
	var $_PHPSHOP_STORE_FORM_LBL = 'Informace o obchod�';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Kontaktn� informace';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Logo firmy v pln� velikosti';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Nahr�t logo';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'N�zev obchodu';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Provozovatel obchodu';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Adresa 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Adresa 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'M�sto';
	var $_PHPSHOP_STORE_FORM_STATE = 'St�t/Provincie';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'St�t';
	var $_PHPSHOP_STORE_FORM_ZIP = 'PS�';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'M�na';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Kategorie obchodu';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'P��jmen�';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'K�estn� jm�no';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Prost�edn� jm�no';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Titul';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Telefon 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Telefon 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Fax';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Cesta k obr�zku';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Popis';
	var $_PHPSHOP_PAYMENT = 'Platby';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Seznam zp�sob� platby';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Zp�soby platby';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'N�zev';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'K�d';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Sleva';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Skupina z�kazn�k�';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Typ platby';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'P�idat zp�sob platby';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'P�idat zp�sob platby';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'N�zev zp�sobu platby';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Skupina z�kazn�k�';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Sleva';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'K�d';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Po�ad�';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Typ zp�sobu platby';
	var $_PHPSHOP_TAX_MOD = 'DPH';
	var $_PHPSHOP_TAX_RATE = 'Sazby DPH';
	var $_PHPSHOP_TAX_LIST_MNU = 'Seznam sazeb DPH';
	var $_PHPSHOP_TAX_LIST_LBL = 'Seznam sazeb DPH';
	var $_PHPSHOP_TAX_LIST_STATE = 'Region pro DPH';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Sazba DPH ve st�t�';
	var $_PHPSHOP_TAX_LIST_RATE = 'Sazba DPH';
	var $_PHPSHOP_TAX_FORM_MNU = 'P�idat sazbu DPH';
	var $_PHPSHOP_TAX_FORM_LBL = 'P�idat informaci o DPH';
	var $_PHPSHOP_TAX_FORM_STATE = 'Tax State or Region';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Sazba DPH ve st�t�';
	var $_PHPSHOP_TAX_FORM_RATE = 'Sazba dan� (pro 19% => vlo�te 0.19)';
	var $_PHPSHOP_VENDOR_MOD = 'Prodejci';
	var $_PHPSHOP_VENDOR_ADMIN = 'Prodejci';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Seznam prodejc�';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Prodejci';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'N�zev prodejce';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Spr�vce';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'P�idat prodejce';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'P�idat �daje';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = '�daje o prodejci';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Kontaktn� �daje';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Logo v pln� velikosti';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Nahr�t logo';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'N�zev obchodu prodejce';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'N�zev firmy prodejce';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Adresa 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Adresa 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'M�sto';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'St�t/Provincie';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'St�t';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'PS�';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'M�na';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Kategorie prodejce';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'P��jmen�';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'K�estn� jm�no';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Prost�edn� jm�no';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Titul';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Telefon 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Telefon 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Fax';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'e-mail';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Cesta k obr�zku';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Popis';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Seznam kategori� prodejc�';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Seznam kategori� prodejc�';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'N�zev kategorie';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Popis kategorie';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Prodejci';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'P�idat kategorii prodejc�';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Formul�� kategorie prodejc�';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = '�daje o kategorii';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'N�zev kategorie';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Popis kategorie';
	var $_PHPSHOP_MANUFACTURER_MOD = 'V�robci';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'V�robci';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Seznam v�robc�';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'V�robci';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'N�zev v�robce';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Administrace';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'P�idat v�robce';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'P�idat �daje';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = '�daje o v�robci';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'N�zev v�robce';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Kategorie v�robce';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'e-mail';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'Odkaz na str�nky v�robce';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Popis';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Seznam kategori� v�robc�';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Kategorie v�robc�';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'N�zev kategorie';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Popis kategorie';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'V�robci';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'P�idat kategorii v�robc�';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Formul�� kategori� v�robc�';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = '�daje o kategorii';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'N�zev kategorie';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Popis kategorie';
	var $_PHPSHOP_HELP_MOD = 'N�pov�da';
	var $_PHPSHOP_CART_ACTION = 'Aktualizovat';
	var $_PHPSHOP_CART_UPDATE = 'Aktualizovat mno�stv� v ko��ku';
	var $_PHPSHOP_CART_DELETE = 'Vyjmout zbo�� z ko��ku';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Cena';
	var $_PHPSHOP_PRODUCT_CALL = 'Cena na zavol�n�';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'P�edchoz�';
	var $_PHPSHOP_PRODUCT_NEXT = 'Dal��';
	var $_PHPSHOP_CART_TAX = 'DPH';
	var $_PHPSHOP_CART_SHIPPING = 'Dopravn� a baln�';
	var $_PHPSHOP_CART_TOTAL = 'Celkem';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Dal��';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'Registrovat';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Faktura�n� �daje';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Firma';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Jm�no';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Adresa';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'e-mail';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = '�daje pro dod�n�';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Firma';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Jm�no';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Adresa';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = '�daje pro platbu';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Jm�no na kart�';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Zp�sob platby';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = '��slo kreditn� karty';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Plat� do';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Dokon�it objedn�vku';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'po�adovan� �daje p�i platb� kreditn� kartou';
	var $_PHPSHOP_ZONE_MOD = 'Dod�vka podle z�n';
	var $_PHPSHOP_ZONE_LIST_MNU = 'V�pis z�n';
	var $_PHPSHOP_ZONE_FORM_MNU = 'P�idat z�nu';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'P�i�adit z�ny';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Zem�';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Vybran� z�na';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'P�i�adit do z�ny';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Aktualizovat';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'P�i�adit z�ny';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'N�zev z�ny';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Popis z�ny';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Cena za polo�ku pro z�nu';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Limit ceny pro z�nu';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Seznam z�n';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'N�zev z�ny';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Popis z�ny';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Cena za polo�ku pro z�nu';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Limit ceny pro z�nu';
	var $_PHPSHOP_LOGIN_FIRST = 'Nejd��ve se pros�m p�ihlate.<br>D�kujeme.';
	var $_PHPSHOP_STORE_FORM_TOS = 'Obchodn� podm�nky';
	var $_PHPSHOP_AGREE_TO_TOS = 'Nejd��ve mus�te souhlasit s na�imi obchodn�mi podm�nkami.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Souhlasn�m s obchodn�mi podm�nkami';
	var $_PHPSHOP_LEAVE_BLANK = '(nechte PR�ZDN� pokud <br /> pro to nem�te ��dn� individu�ln� php soubor!)';
	var $_PHPSHOP_RETURN_LOGIN = 'M�te ji� ��et: P�ihla�te se pros�m';
	var $_PHPSHOP_NEW_CUSTOMER = 'Nov� z�kazn�k? Poskytn�te pros�m va�e faktura�n� �daje';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = '��et z�kazn�ka:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Objedn�vky';
	var $_PHPSHOP_ACC_UPD_BILL = 'Zde m��ete upravit va�e faktura�n� �daje.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Zde m��ete p�idat �i upravit va�e dodac� adresy.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'V� ��et';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Informace o dod�n�';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Nejsou zde ��dn� objedn�vky k zobrazen�';
	var $_PHPSHOP_ACC_BILL_DEF = '- Standardn� (Stejn� jako faktura�n�)';
	var $_PHPSHOP_SHIPTO_TEXT = 'M��ete k va�emu ��tu p�idat dal�� m�sta pro dopravu zbo��. Zvolte si pros�m k�d nebo zkratku dle va�eho uv�en�.';
	var $_PHPSHOP_CONFIG = 'Nastaven� PHPShopu';
	var $_PHPSHOP_USERS = 'U�ivatel�';
	var $_PHPSHOP_IS_CC_PAYMENT = 'je platba kreditn� kartou?';
	var $_PHPSHOP_SHIPPING_MOD = 'Doprava';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Doprava';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Seznam dopravc�';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Dopravci';
	var $_PHPSHOP_RATE_LIST_MNU = 'Seznam dopravn�ho';
	var $_PHPSHOP_RATE_LIST_LBL = 'Dopravn�';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'N�zev';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Po�ad�';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Vytvo�it dopravce';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Vytvo�en� nebo �prava dopravce';
	var $_PHPSHOP_RATE_FORM_MNU = 'Vytvo�it dopravn�';
	var $_PHPSHOP_RATE_FORM_LBL = 'Vytvo�en� nebo �prava dopravn�ho';
	var $_PHPSHOP_RATE_FORM_NAME = 'Detaily dopravn�ho';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Dopravce';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'St�t:<br /><br /><i>Pro v�b�r v�ce st�t�: pou�ijte CTRL a my�</i>';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'PS� odesilatele';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'PS� adres�ta';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Hmotnost od';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Hmotnost do';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Dopravn�';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Va�e baln�';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'M�na';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'DPH';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Po�ad�';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Dopravce';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Popis dopravn�ho';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Hmotnost od ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... do';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Dopravce';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Po�ad�';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'CHYBA: ID dopravce ji� existuje.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'CHYBA: Vyberte dopravce.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'CHYBA: Nejm�n� jedno dopravn� tohoto doprace existuje, sma�te je p�ed odstran�n�m dopravce';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'CHYBA: Nelze nal�zt dopravce s t�mto ID.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'CHYBA: Vyberte dopravce.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'CHYBA: Nelze nal�zt dopravce s t�mto ID.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'CHYBA: Je po�adov�n popisek dopravn�ho.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'CHYBA: C�lov� st�t je neplatn�. V�ce st�t� odd�lujte ';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'CHYBA: Je po�adov�na minim�ln� hmotnost';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'CHYBA: Je po�adov�na maxim�ln� hmotnost';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'CHYBA: Minim�ln� hmotnost mus� b�t ni��� ne� maxim�ln�';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'CHYBA: Zadejte poplatek za dopravn�';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'CHYBA: Vyberte m�nu';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'CHYBA: Dopravn� je vy�adov�no';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Vyberte pros�m';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Dopravce';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Dopravn�';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Cena';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-bez DPH-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Kreditn� karta';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Pou��t prost�edn�ka platby';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Bankovn� p�evod/platba p�edem';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Hotov� / dob�rkou';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Vyberte dodac� adresu!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Vyberte zp�sob dopravy!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Vyberte zp�sob platby!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Zkontrolujte zadan� �daje a potvr�te objedn�vku!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Vyberte zp�sob dopravy.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Vyberte jin� zp�sob dopravy.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Vyberte zp�sob platby.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Zadejte ��slo va�� kreditn� karty.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Zadejte jm�no na kreditn� kart�.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = '��slo kreditn� karty je neplatn�.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Zadejte m�s�c konce platnosti kreditn� karty.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Zadejte rok konce platnosti kreditn� karty.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'Datum platnosti je neplatn�.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Vyberte dodejte na adresu.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Neplatn� ��slo ��tu.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'Nem�te nic v ko��ku!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'CHYBA: Vyberte dopravce!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'CHYBA: Vybran� dopravn� nebylo nalezeno!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'CHYBA: Va�e dodac� adresa nebyla nalezena!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'CHYBA: Chyb� �daje o kreditn� kart�...';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'CHYBA: Chyb� ��slo kreditn� karty!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = '��slo kreditn� karty je testovac� ��slo!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'U�ivatel nebyl nalezen v datab�zi!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Dosud jste nezadal vlastn�ka bankovn�ho ��tu.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Zat�m jste nezadal IBAN k�d sv� banky.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Zat�m jste nezadal ��slo ��tu.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Zat�m jste nezadal k�d banky.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Zat�m jste nezadal n�zev banky.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Pro platbu je nutno zadat po�adovan� �daje!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Informace o platb� byla ulo�ena pro pozd�j�� zpracov�n�.<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Minim�ln� v��e objedn�vky nebyla spln�na.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'Na�e minim�ln� v��e objedn�vky je:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Platba kreditn� kartou';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'dal�� metody platby';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Vyberte metodu platby:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Minim�ln� hodnota objedn�vky v na�em obchod�';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = '�daje o bankovn�m ��tu';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = '��slo ��tu';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'K�d banky';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'N�zev banky';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Vlastn�k ��tu';
	var $_PHPSHOP_MODULES = 'Moduly';
	var $_PHPSHOP_FUNCTIONS = 'Funkce';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Zvl�tn� zbo��';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Napi�te n�m va�i pozn�mku k objedn�vce pokud pot�ebujete.';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Pozn�mka z�kazn�ka';
	var $_PHPSHOP_INCLUDING_TAX = '(v�etn� DPH $tax %)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Vyberte polo�ku';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Polo�ka';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Ke sta�en�';
	var $_PHPSHOP_DOWNLOADS_START = 'St�hnout';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Pros�me vlo�te k�d souboru pro sta�en�, kter� jste obdr�eli e-mailem a klikn�te na \'St�hnout\'.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Litujeme, ale pro sta�en� va�ich soubor� uplynula vymezen� lh�ta';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Litujeme, ale byl dosa�en maxim�ln� po�et sta�en�';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Neplatn� k�d souboru pro sta�en�!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Nemohu poslat zpr�vu na ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Zpr�va odesl�na na ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Informace o stahov�n�';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'soubor(y), kter� jste objednali jsou p�ipraveny ke sta�en�';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Pros�me zadejte n�sleduj�c� k�d(y) soubor� v na�� sekci \'Ke sta�en�\' ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'maxim�ln� po�et sta�en� pro ka�d� soubor je: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'St�hn�te dokud neuplyne lh�ta  {expire} dn� po sta�en� prvn�ho souboru';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Dotazy? Probl�my?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Informace o souborech ke sta�en� od ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'zbo�� ke sta�en�?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'D�kujeme V�m za Va�i platbu. 
        The transaction was successful. You will get a confirmation e-mail for the transaction by PayPal. 
        You can now continue or log in at <a href=http://www.paypal.com>www.paypal.com</a> to see the transaction details.';
	var $_PHPSHOP_PAYPAL_ERROR = 'An error occured while processing your transaction. The status of your order could not be updated.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'D�kujeme za V� n�kup. N�sleduje rekapitulace va�� objedn�vky.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'D�kujeme V�m za p��ze� a t��me se na dal�� spolupr�ci.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'M�te dotazy? Probl�my?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'Byla p�ijata n�sleduj�c� objedn�vka.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'M��ete ji zobrazit kliknut�m na odkaz.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Z�porn� mno�stv� nen� povoleno.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Vlo�te pros�m platn� mno�stv� pro toto zbo��.';
	var $_PHPSHOP_CART_STOCK_1 = '0bjednali jste si v�ce zbo�� ne� m�me na sklad�. ';
	var $_PHPSHOP_CART_STOCK_2 = 'Nyn� m�me $product_in_stock kus� zbo�� skladem. ';
	var $_PHPSHOP_CART_STOCK_3 = 'Klikn�te zde pro um�st�n� na seznam nevy��zen�ch objedn�vek.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Please select a special item from the details page!';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'bez titulu';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Pan';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Pan�.';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Ing.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Mgr.';
	var $_PHPSHOP_DEFAULT = 'V�choz�';
	var $_PHPSHOP_AFFILIATE_MOD = 'Adminjistrace pobo�ek';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Seznam pobo�ek';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Pobo�ky';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'N�zev pobo�ky';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Aktivn�';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Sazba';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Celkem za m�s�c';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'M�s��n� provize';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Seznam objedn�vek';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'Poslat e-mail pobo�k�m';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'E-mail pobo�k�m';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'Komu(* = v�em)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Text zpr�vy';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'P�edm�t';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Vlo�it sou�asnou statistiku';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Provize (%)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Aktivn�?';
	var $_PHPSHOP_DELIVERY_TIME = 'Dod�v�me b�hem';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Informace o dod�vce';
	var $_PHPSHOP_MORE_CATEGORIES = 'dal�� kategorie';
	var $_PHPSHOP_AVAILABILITY = 'Dostupnost';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Toto tzbo�� nen� v sou�asn� dob� k dispozici.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Bude op�t k dispozici: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Ovl�dac� panel';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Statistika';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Z�kazn�ci';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'Aktivn� zbo��';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'Neaktivn� zbo��';
	var $_PHPSHOP_STATISTIC_SUM = 'Celkem';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Nov� objedn�vky';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Nov� z�kazn�ci';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Pros�me zadejte Va�i e-mailovou adresu - za�leme V�m upozorn�n�, a� bude zbo�� op�t k dispozici. 
                                        Ochrana Va�ich osobn�ch �daj� v�etn� e-mailov� adresy podl�h� platn�m z�konn�m ustanoven�m - Va�e 
                                        e-mailov� adresa bude pou�ita pouze pro v��e uveden� ��el. <br /><br />D�kujeme!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'D�kujeme za �ek�n�! <br />D�me V�m v�d�t, jakmile p�ijde zbo��.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Upozorn�te m�!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'N�hled tisku';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Please choose EITHER Authorize.net OR CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' Nastaven� konfigura�n�ho souboru:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'z�pis povolen';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'z�pis nepovolen';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Glob�ln�';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Cesta a URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Website';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Doprava';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Pokladna';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Stahov�n�';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Platby';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Pou��t pouze jako katalog';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Pokud za�ktnete, vypnete ve�ker� funkce ko��ku.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Zobrazit ceny';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Zobrazit ceny v�etn� DPH?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Nastaven�, zda kupuj�c� vid� ceny v�etn� nebo bez DPH.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Za�krtn�te pro zobrazen� cen. Pokud pou��v�te phpshop jako katalog, nemus�te cht�t aby se ceny zobrazily.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Virtu�ln� da�';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Nastaven�, zda polo�ky s nulovou hmotnost� jsou zdan�ny (Pozn: v �R ano -> nechte neza�krtnut�). Upravte p��padn� ps_checkout.php->calc_order_taxable().';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Volby sazby DPH:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Na z�klad� adresy dod�n�';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Na z�klad� adresy prodejce';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Nastaven�, jak� sazba DPH se pou�ije v p��pad�, �e:<br />
                                                <ul><li>sazba st�tu, odkud poch�z� prodejce</li><br/>
                                                <li>sazba st�tu, odkud poch�z� z�kazn�k.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Umo�nit v�ce sazeb DPH?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Za�krtn�te, pokud se pou��v� v�ce sazeb DPH (tj. nap�. 5% na z�kladn� potraviny a 19% na ostatn� zbo��)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Ode��st slevu slevu z ceny BEZ DPH/baln�ho/dopravn�ho?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Povolit koment��e / hodnocen�';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Jestli�e je za�krtnuto, povol�te z�kazn�k�m <strong>hodnotit zbo��</strong> a <strong>ps�t koment��e</strong> ke zbo��, <br />   
                                                                           tak�e z�kazn�ci mohou ps�t koment��e o sv�ch zku�enostech se zbo��m pro ostatn� z�kazn�ky.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Nastaven�, zda ode��st slevu z ceny BEZ DPH/baln�ho/dopravn�ho (za�krtnuto) nebo V�ETN� DPH/baln�ho/dopravn�ho.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Z�kazn�ci mohou zadat sv� bankovn� spojen�?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Jestli�e je za�krtnuto, maj� z�kazn�ci p�i registraci mo�nost zadat sv� banovn� spojen�.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Z�kazn�ci mohou zadat st�t/region?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Jestli�e je za�krtnuto, maj� z�kazn�c� p�i registraci mo�nost zadat st�t/region. (pozn.: pro �R/SR nechte neza�krtnut�)';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Vy�adovat souhlas s obchodn�mi podm�nkami?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Jestli�e je za�krtnuto, z�kazn�c� mus� odsouhlasit obchodn� podm�nky p�ed registrac�.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Kontrolovat sklad?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Nastaven�, zda kontrolovat mno�stv� zbo�� na sklad� p�i p�id�n� polo�ky z�kazn�kem do ko��ku. 
                                                                                          Pokud je ZA�KRTNUTO, nedovol� z�kazn�kovi p�idat v�ce polo�ek, ne� je k dispozici na sklad�.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Povolit program pobo�ek?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'T�mto umo�n�te sledov�n� pobo�ek ve frontendu. Za�krtn�te, opkud jste zadali pobo�ky v backendu..';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Form�t e-mailov� objedn�vky:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Textov�';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'T�mto se nastav�, v jak�m form�tu jsou odes�l�na e-mailov� potvrzen� objedn�vek:<br />
                                                                                        <ul><li>jako prost� text</li>
                                                                                        <li>jako form�tovan� text (HTML s obr�zky).</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Povolit administraci z frontendu pro u�ivatele, kte�� nemaj� p��stup do backendu?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'T�mto nastaven�m umo�n�te administraci z frontendu pro u�ivatele, kte�� 
                                                                                              jsou administr�to�i obchodu, ale nemaj� p��stup do backenu Mamba (tj u�ivatel� ze skupin Registered / Editor).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'URL Va�eho webu. Obvykle stejn� jako URL Mamba (s lom�tkem na konci!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'SECUREURL';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'URL Va�eho zabezpe�en�ho webu. (https - s lom�tkem na konci!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'COMPONENTURL';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'URL komponenty mambo-phpShop. (s lom�tkem na konci!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'IMAGEURL';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'URL adres��e s obr�zky komponenty mambo-phpShop.(s lom�tkem na konci!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'ADMINPATH';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'Cesta k adres��i komponenty mambo-phpShop.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'CLASSPATH';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'Cesta k adres��i \'classes\' komponenty mambo-phpShop.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'PAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'Cesta k adres��i \'html\' komponenty mambo-phpShop.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'IMAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'Cesta k adres��i \'shop_image\' komponenty mambo-phpShop.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'HOMEPAGE';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Str�nka, kter� bude nahr�na jako v�choz�.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'ERRORPAGE';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'V�choz� str�nka pro zobrazen� chybov�ch zpr�v.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'DEBUGPAGE';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'V�choz� str�nka pro zobrazen� lad�c�ch zpr�v.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'LAD�N� ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'LAD�N�?  	   	Zapne v�stup lad�n�. Zp�sob�, �e se na doln� ��sti ka�d� str�nky zobraz� lad�c� informace. Velmi u�ite�n� p�i v�voji shopu, proto�e ukazuje obsah ko��ku, hodnoty pol� ve formul���ch, atd.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'FLYPAGE';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Toto je v�choz� str�nka pro zobrazen� podrobnost� o zbo��.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = '�ablona kategorie';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Definuje v�choz� �ablonu kategoriepro zobrazen� zbo�� v kategorii.<br />
                                                                                                      m��ete si vytvo�it nov� �ablony �pravou existuj�c�ch soubor� �ablon,<br />
                                                                                                      (um�st�n�ch v adres��i <strong>COMPONENTPATH/html/templates/</strong> a za��naj�c�ch browse_)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'V�choz� po�et polo�ek na ��dku';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Definuje po�et polo�ek zbo�� na ��dku. <br />
                                                                                                      Nap�.: Pokud nastav�te 4, �ablona kategorie zobraz� 4 polo�ky na ��dek';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = 'Obr�zek ';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Tento obr�zek bude zobrazen, pokud obr�zek zbo�� nen� k dispozici.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'Po�et ��dk� v�sledk� hled�n�';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Definuje po�et ��dk� v�sledk� hled�n� na str�nku.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'SEARCH COLOR 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Definuje barvu lich�ch ��dk� v�sledk� hled�n�.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'SEARCH COLOR 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Definuje barvu sud�ch ��dk� v�sledk� hled�n�.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'Max. ��dk�';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Definuje po�et zobrazen�ch ��dk� v seznamu objedn�vek (? order list select box).';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Zobrazit ';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Zobraz� obr�zek powered-by-mambo-phpShop v z�pat�.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Vyberte metodu dopravy zbo�� pou�itou pro V� obchod';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Standardn� modul dopravy zbo�� s indiviu�ln�m nastaven�m dopravc� a sazeb. <strong>DOPORU�ENO !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '  	Zone Shipping Module Country Version 1.0<br />
                                                                                                            For more information on this module please visit <a href="http://ZephWare.com">http://ZephWare.com</a><br />
                                                                                                            for details or contact <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Check this to enable the zone shipping module';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<a href="http://www.ups.com" target="_blank">UPS Online(R) Tools</a> Shipping calculation';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'UPS access code';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Your UPS access code';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'UPS user id';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'The user ID you got from UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'UPS password';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'The password for your UPS account';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'InterShipper Module. Check only if you have an <a href="http://www.intershipper.com" target="_blank">Intershipper.com</a> account';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Vypnout v�b�r zp�sobu dopravy. Vyberte, pokud z�kazn�ci kupuj� zbo�� ke sta�en�, kter� k nim nemus� b�t dopraveno.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'InterShipper Password';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Your password for your intershipper account.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'InterShipper email';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'Your email address for your intershipper account.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = '�ifrovac� kl��';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Po��v� se k za�ifrov�n� dat v datab�zi. Znamen� to, �e tento soubor by m�l nastavena p��stupov� pr�va, aby nemohl b�t zobrazen nik�m nepovolan�m.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Zobrazit postup odbaven� objedn�vky?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Za�krtn�te, pokud chcete zobrazit  postup odbaven� objedn�vky ( 1 - 2 - 3 - 4 s obr�zky).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Vyberte postup odbaven� objedn�vky';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Standardn� :</strong><br/>
               1. Zad�n� dodac� adresy<br />
              2. Zad�n� zp�sobu dopravy<br />
              3. Zad�n� zp�sobu platby<br />
              4. Potvrzen� objedn�vky';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Postup 2:</strong><br/>
               1. Zad�n� dodac� adresy<br />
              2. Zad�n� zp�sobu platby<br />
              3. Potvrzen� objedn�vky';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Postup 3:</strong><br/>
               1. Zad�n� zp�sobu dopravy<br />
              2. Zad�n� zp�sobu platby<br />
              3. Potvrzen� objedn�vky';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Postup 4:</strong><br/>
               1. Zad�n� zp�sobu platby<br />
              2. Potvrzen� objedn�vky';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Umo�nit stahov�n� zbo��';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Povol� mo�nost stahov�n� zbo��. Pou�ijte pouze opkud chcete prod�vat zbo�� ke sta�en�.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Stav objedn�vky umo��uj�c� sta�en�';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Vyberte stav objedn�vky p�i kter�m je z�kazn�k e-mailem upozorn�n, �e je zbo�� ke sta�en�.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Stav objedn�vky znemo��uj�c� sta�en�';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Vyberte stav objedn�vky p�i kter�m je sta�en� z�kazn�kovi znemo�n�no.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'DOWNLOADROOT';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'Fyzick� cesta k soubor�m ke sta�en� z�kazn�ky. (lom�tko na konci!)<br>
        <span class="message">V z�jmu zabezpe�en� va�eho obchodu: Pokud m��ete, pou�ijte adres�� KDEKOLIV MIMO KO�ENOV�HO ADRES��E VA�EHO WEBU </span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Maximum sta�en�';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Nastav� max. op�et sta�en� z�kazn�kem na z�klad� jednoho k�du zbo�� ke sta�en� (na jednu objedn�vku)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Lh�ta pro sta�en�';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Nastav� �asov� interval <strong>v sekund�ch</strong> po kter� je z�kazn�kovi umo�n�no sta�en� zbo��. 
  Tento interval za��n� prvn�m sta�en�m! Pokud lh�ta uplyne, k�d zbo�� ke sta�en� ja zablokov�n.<br />Pozn�mka: 86400s=24h.';
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
	var $_PHPSHOP_ADVANCED_SEARCH = 'Roz���en� vyhled�v�n�';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Prohled�vat v�echny kategorie';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Prohled�vat ve�ker� informace o zbo��';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Jen n�zvy zbo��';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Jen v�robce �i prodejce';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Jen popis zbo��';
	var $_PHPSHOP_SEARCH_AND = 'and';
	var $_PHPSHOP_SEARCH_NOT = 'not';
	var $_PHPSHOP_SEARCH_TEXT1 = 'Nejd��ve vyberte z rozbalovac�ho seznamu kategorii pro omezen� vyhled�v�n�. 
        Druh� rozbalovac� seznam umo��uje omezit vyhled�v�n� na ur�itou ��st informace o zbo�� (nap�. N�zev).
        Po vybr�n� t�chto dopl�uj�c�ch �daj� (m��ete je ov�em ponechat na standardn�m nastaven� pro hled�n� ve v�ech �daj�ch) vlo�te slovo, kter� chcete vyhledat.';
	var $_PHPSHOP_SEARCH_TEXT2 = ' M��ete d�le zp�es�it v� v�b�r p�id�n�m druh�ho kl��ov�ho slova a v�b�ru logick�ho oper�toru AND, NOT. 
        A znamen� �e mus� b�t ob� slova v �daj�ch vyhledan�ho zbo�� p��tomna. 
        Ne znamen� �e zbo�� bude vyhled�no, pokud v �daj�ch bude p��tomno prvn� slovo a druh� ne.';
	var $_PHPSHOP_ORDERBY = 'Se�adit podle';
	var $_PHPSHOP_CUSTOMER_RATING = 'Pr�m�rn� hodnocen�';
	var $_PHPSHOP_TOTAL_VOTES = 'Celkem hlas�';
	var $_PHPSHOP_CAST_VOTE = 'Pros�m hodno�te';
	var $_PHPSHOP_RATE_BUTTON = 'Hodnotit';
	var $_PHPSHOP_RATE_NOM = 'Hodnocen�';
	var $_PHPSHOP_REVIEWS = 'Hodnocen� z�kazn�k�';
	var $_PHPSHOP_NO_REVIEWS = 'Zat�m zde nen� ��dn� hodnocen�.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Napi�te prvn� hodnocen�...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Mus�te se p�ihl�sit, abyste mohlI hodnotit.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Ohodno�te pros�m polo�ku!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Napi�te del�� hodnocen�, minim�ln� 100 znak�';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Hodnocen� je p��li� dlouh�, povoleno je maxim�ln� 2000 znak�';
	var $_PHPSHOP_WRITE_REVIEW = 'Napi�te va�e hodnocen� tohoto zbo��!';
	var $_PHPSHOP_REVIEW_RATE = 'Nejd��ve zbo�� ohodno�te. Vyberte mezi 0 (nejhor��) a 5 (nejlep��) hv�zdi�kama.';
	var $_PHPSHOP_REVIEW_COMMENT = 'Nyn� napi�te hodnocen� ....(min. 100, max. 2000 znak�) ';
	var $_PHPSHOP_REVIEW_COUNT = 'Znak� naps�no: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Odeslat hodnocen�';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Hodnocen� tohoto zbo�� jste u� napsal. D�kujeme v�m.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'D�kujeme v�m za ohodnocen�.';
	var $_PHPSHOP_COMMENT = 'Koment��';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'P�idat/Upravit typy kreditn�ch karet';
	var $_PHPSHOP_CREDITCARD_NAME = 'N�zev kreditn� karty';
	var $_PHPSHOP_CREDITCARD_CODE = 'K�d kreditn� karty';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Typ kreditn� karty';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Seznam kreditn�ch karet';
	var $_PHPSHOP_UDATE_ADDRESS = 'Upravit adresu';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Pokra�ovat v nakupov�n�';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Va�e objedn�vka byla �sp�n� p�ijata!';
	var $_PHPSHOP_ORDER_LINK = 'Klikn�te zde pro zobrazen� detail� o objedn�vce.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'stav va�� objedn�vky ��slo {order_id} byl zm�n�n.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'Nov� stav je:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'Pro zobrazen� detail� o objedn�vce klikn�te zde nebo zkop�rujte odkaz do va�eho prohl��e�e:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Zm�na stavu objedn�vky: {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Informovat z�kazn�ka?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Vyberte nejd��ve zm�nu stavu!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Sleva pro v�choz� skupinu z�kazn�k� (v %)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Kladn� hodnota X znamen�: Pokud nem� p�i�azenu cenu pro TUTO skupinu z�kazn�k�, v�choz� cena je sn��ena o X %. Z�porn� hodnota m� opa�n� efekt.';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Sleva';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Seznam slev na zbo��';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'P�idat/upravit slevu';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = '��stka';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Zadejte ��stku';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Typ slevy';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Procento';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Celkem';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Je cena ud�v�na jako procento nebo ��stka?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Za��tek obdob� slevy';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Ud�v� den, kdy sleva za��n�';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Konec obdob� slevy';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Ud�v� den, kdy sleva kon��';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'K p�id�n� slevy pou�ijte formul�� slevy dan�ho zbo��!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'U�et��te';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Zobrazit v pln� velikosti';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Zobrazen� m�ny';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Symbol m�ny';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'M��et zde pou��t i HTML entity  (tj. �,�,�,...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Desetinn� m�sty';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Po�et desetinn�ch m�st (m��e b�t 0)<br><b>Prov�d� se zaokrouhlen�, pokud m� hodnota vy��� po�et desetinn�ch m�st.</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Odd�lova� desetinn�ch m�st';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Symbol pro odd�len� desetinn�ch m�st (obvykle \',\') symbol';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Odd�lova� tis�c�';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Symbol pro odd�len� tis�c�  (obvykle mezera nabo m��e b�t pr�zdn�)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Form�t kladn�ho ��sla';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Form�t pro zobrazen� kladn�ch ��sel.<br>(Symb = symbol m�ny)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Form�t z�porn�ho ��sla';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Form�t pro zobrazen� z�porn�ch ��sel.<br>(Symb = symbol m�ny)';
	var $_PHPSHOP_OTHER_LISTS = 'Dal�� seznamy zbo��';
	var $_PHPSHOP_MORE_IMAGES = 'Zobrazit v�ce obr�zk�';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Dostupn� obr�zky pro';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Zp�t k detail�m o zbo��';
	var $_PHPSHOP_FILEMANAGER = 'Spr�vce soubor�';
	var $_PHPSHOP_FILEMANAGER_LIST = 'Spr�vce soubor�::Seznam zbo��';
	var $_PHPSHOP_FILEMANAGER_ADD = 'P�idat obr�zek/soubor';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'P�i�azen� obr�zky';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'Ke sta�en�?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'P�i�azen� soubory (katalog. listy,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Publikov�no?';
	var $_PHPSHOP_FILES_LIST = 'Spr�vce soubor�::Seznam obr�zk�/soubor� pro:';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Soubor';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'N�zev';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Typ';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Upravit';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Pln� velikost';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'N�hled';
	var $_PHPSHOP_FILES_FORM = 'Nahr�t soubor pro';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Vybran� soubor';
	var $_PHPSHOP_FILES_FORM_FILE = 'Soubor';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Obr�zek';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'nahr�t do';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'v�choz�ho um�st�n� obr�zk�';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Zadejte um�st�n�';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Um�st�n� soubor� ke sta�en� (P�i prodeji zbo�� ke sta�en�!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Automaticky vytvo�it n�hled?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'soubor je publikov�n?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Titulek souboru (co vid� z�kazn�k)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Popis souboru';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'URL souboru (voliteln�)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Zadejte platnou cestu!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'N�hled byl �sp�n� vytvo�en!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'Nemohu vytvo�it n�hled!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'CHYBA p�i nahr�v�n� souboru/obr�zku';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Nemohu smazat soubor obr�zku v pln� velikosti.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Soubor obr�zku v pln� velikosti �sp�n� smaz�n.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Nemohu smazat soubor n�hledu obr�zku (mo�n� neexistuje): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Soubor n�hledu obr�zku �sp�n� smaz�n.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Nemohu smazat soubor.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Soubor �sp�n� smaz�n.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Po�adovan� soubor nebyl nalezen!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Obr�zek nebyl nalezen!';
	var $_PHPSHOP_COUPON_MOD = 'Slevov� kup�ny';
	var $_PHPSHOP_COUPONS = 'Slevov� kup�ny';
	var $_PHPSHOP_COUPON_LIST = 'Seznam slevov�ch kup�n�';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'V� kup�n byl u� pou�it.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Slevov� kup�n byl p�ijat! D�kujeme.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Jestli�e m�te k�d ke slevov�mu kup�nu, vlo�te jej n��e:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Odeslat';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Tento k�d kup�nu u� existuje. Zkuste znova.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Upravit slevov� kup�n';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Klikn�te na k�d kup�nu pro editaci, pro smaz�n� na n�j klikn�te a vyberte Smazat:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'K�d';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Procenta nebo ��stka';
	var $_PHPSHOP_COUPON_TYPE = 'Typ kup�nu';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Jednor�zov� kup�n je vymaz�n po pou�it� a p�izn�n� slevy. Trval� kup�n m��e b�t pou��v�n neomezen�.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Jednor�zov� kup�n';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Trval� kup�n';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Hodnota';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Smazat k�d';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Opravdu smazat tento k�d kup�nu?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Vypl�te pros�m v�echny polo�ky.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'Hodnota kup�nu mus� b�t ��slo.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Nov� kup�n';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'K�d kup�nu';
	var $_PHPSHOP_COUPON_PERCENT = 'Procenta';
	var $_PHPSHOP_COUPON_TOTAL = '��stka';
	var $_PHPSHOP_COUPON_VALUE = 'Hodnota';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'K�d kup�nu byl ulo�en.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Ulo�it kup�n';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Sleva na kup�n';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'K�d kup�nu nenalezen, zkuste jin�.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Povolit pou��v�n� kup�n�';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Jestli�e povol�te pou��v�n� kup�nu, mohou z�kazn�ci zadat k�d kup�nu pro uplatn�n� slevy na objedn�vku.';
	var $_PHPSHOP_FREE_SHIPPING = 'Baln� a doprava zdarma';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Pro tuto objedn�vku je baln� a doprava zdarma!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Minim�ln� objedn�vky pro baln� a dopravu zdarma';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Objedn�vka (V�etn� DPH!),  kter� je minim�ln� pro baln� a dopravu zdarma 
                                                (Nap�.: <strong>5000</strong> znamen� baln� a dopravu zdarma, pokud si z�kazn�k 
                                                 objedn� za 5000 K� (v�. DPH) �i v�ce.';
	var $_PHPSHOP_YOUR_STORE = 'V� obchod';
	var $_PHPSHOP_CONTROL_PANEL = 'Ovl�dac� Panel';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'Tla��tko PDF';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Zobraz� �i schov� tla��tko PDF';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Vy�adovat souhlas s obchodn�mi podm�nkami pro KA�DOU OBJEDN�VKU?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Jestli�e je za�krtnuto, z�kazn�c� mus� odsouhlasit obchodn� podm�nky p�i KA�D� OBJEDN�VCE (p�ed jej�m potvrzen�m).';
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
	var $_PHPSHOP_ERROR_CODE = 'K�d chyby';
	var $_PHPSHOP_ERROR_DESC = 'Popis chyby';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Zobrazit/zm�nit k�d transakce';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Zobrazit/zm�nit heslo/k�d transakce';
	var $_PHPSHOP_TYPE_PASSWORD = 'Vlo�te heslo u�ivatele';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Sou�asn� heslo';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Sou�asn� k�d transakce';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'K�d transakce byl �sp�n� zm�n�n.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Request/Capture Credit Card Code Value (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Check for a valid CVV2/CVC2/CID value (three- or four-digit number on the back of a credit card, on the Front of American Express Cards)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Please type in the three- or four-digit number on the back of your credit card (On the Front of American Express Cards)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'You need to enter your Credit Card Code to proceed.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'BU� zadejte n�zev souboru';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'POZN�MKA: Zde m��ete zadat n�zev souboru. <strong>Pokud jej zad�te, ��dn� soubor nebude nahr�n!!! Mus�te je nahr�t manu�ln� p�es FTP!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'NEBO nahrajte nov� soubor';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'm��ete nahr�t m�stn� soubor. Tento soubor bude zbo��m, kter� prod�v�te. Existuj�c� soubor bude p�eps�n.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Napi�tte jak�koliv text, kter� bude zobrazen z�kazn�kovi na str�nce zbo�� .<br />tj.: 24h, 48h, 3 - 5 dn�, objedn�no.....';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'NEBO vyberte obr�zek, kter� bude zobrazen na str�nce detailn�ho popisu zbo�� .<br />Obr�zky jsou um�st�ny v adres��i <i>/components/com_phpshop/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Seznam atribut�';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>P��klady form�tu seznamu atribut�:</h4>
        <pre>Velikost,XL[+100],M,S[-50];Barva,�erven�,zelen�,�lut�,drah� barva[=999];atd..,..,..</pre>
        <h4>Vlo�en� nastaven� cen pro pokro�il� nastaven� atribut�:</h4>
        <pre>
        + == P�i��st tuto ��stku k v�choz� cen�.<br />
        - == Ode��st tuto ��stku od v�choz� ceny.<br />
        = == Nastavit cenu na tuto ��stku.
       </pre>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Seznam speci�ln�ch atribut�';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>P��klad form�tu seznamu speci�ln�ch atribut�:</h4>
        <pre>N�zev;Dal��;...</pre>';
	var $_PHPSHOP_MULTISELECT = 'V�b�r v�ce polo�ek: pou�ijte kl�vesu CTRL + my�';
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
	var $_PHPSHOP_RELATED_PRODUCTS = 'P��buzn� polo�ky';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Pomoc� tohoto seznamu m��ete definovat p��buzn� polo�ky. Vyberte jednu nebo v�ce (CTRL + my�) polo�ek, ze kter�ch chcete vytvo�it <strong>p��buzn� polo�ky</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Mohlo by V�s zaj�mat i toto zbo��';
	var $_PHPSHOP_IMAGE_ACTION = 'Akce obr�zku';
	var $_PHPSHOP_NONE = 'nic';
	var $_PHPSHOP_ORDER_HISTORY = 'Historie objedn�vek';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Pozn�mka';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Pozn�mka k Va�� objedn�vce';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'P�idat pozn�mku?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'P�id�no dne';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Z�kazn�k upozorn�n?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Zm�na stavu objedn�vky';
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
	var $_PHPSHOP_PARAMETERS_LBL = 'Parametry';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Typ zbo��';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Typy zbo��';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'P�idat/upravit typ zbo��';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Typy zbo�� pro';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Seznam typ� zbo��';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'P�idat typ zbo�� pro';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'P�idat typ zbo��';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Typ zbo��';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'N�zev typu zbo��';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Popis typu zbo��';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Parametry';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Informace o typu zbo��';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Publikovat?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Str�nka (seznam) typ� zbo��';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Str�nka typu zbo��';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Parametry typu zbo��';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Informace o parametru';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Typ zbo�� nebyyl nalezen!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'N�zev parametru';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'This name will be column name of table. Must be unicate and without space.<BR>For example: main_material';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Zkr�cen� popis parametru';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Popis parametru';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Typ parametru';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Cel� ��slo';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Text';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Kr�tk� text';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Float';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Char';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Datum & �as';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Datum';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'RRRR-MM-DD';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = '�as';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'HH:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Break Line';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'V�ce hodnot';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Zadan� hodnoty';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Zobrazit Zadan� hodnoty jako v�b�r vice polo�ek?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Pokud zad�ta Zadan� hodnoty, parametr m��e nab�vat pouze t�chto hodnot. P��klad:</strong><BR><span class="sectionname">D�evo;Kov;Plast;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'V�choz� hodnota';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'Pro v�choz� hodnotu pou�ijte tento form�t:<ul><li>Datum: RRRR-MM-DD</li><li>�as: HH:MM:SS</li><li>Datum & �as: RRRR-MM-DD HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Jednotka';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Pokro�il� vyhled�v�n� podle parametr�';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Pokro�il� vyhled�v�n� podle parametr�';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Chcete vyhled�vat zbo�� podle technick�ch parametr�?<BR>Vyberte typ parametru ze seznamu:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Lituji. Nebyla zad�na kategorie pro vyhled�v�n�.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Lituji. Nebyl publikov�n typ zbo�� s t�mto n�zvem.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'Is Like';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'Is NOT Like';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Fulltextov� vyhled�v�n�';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'V�echny vybran�';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Jak�koliv z vybran�ch';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Vymazat formul��';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Vyhled�vat v kategori�ch';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Zm�nit parametry';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = '�adit sestupn�';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = '�adit vzestupn�';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Parametry kategorie';
	var $_PHPSHOP_FEE = 'Poplatek';
	var $_PHPSHOP_PRODUCT_CLONE = 'Klonovat zbo��';
	var $_PHPSHOP_CSV_SETTINGS = 'Nastaven�';
	var $_PHPSHOP_CSV_DELIMITER = 'Odd�lova�';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Po��te�n�/konc. znak pole';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Upload CSV souboru';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Nahr�t CSV soubor';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Nahr�t z adres��e';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Nahr�t CSV soubor ze serveru';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Export do CSV souboru';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Zp�sob �azen� pol�';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'V�choz�';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'Moje upraven� �azen�';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Exportovat v�echno zbo�� do CSV souboru';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'Nastav� Importu / Exportu CSV';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Ulo�it zm�ny';
	var $_PHPSHOP_CSV_FIELD_NAME = 'N�zev pole';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'v�choz� hodnota';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Po�ad� pole';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Po�adov�no?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Import/Export';
	var $_PHPSHOP_CSV_NEW_FIELD = 'P�idat nov� pole';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Dokumentace';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Litujeme, ale po�adovan� zbo�� nebylo nalezeno!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Zobrazit zbo��, kter� nen� na sklad�';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Pokud je za�krtnuto, jsou zobrazeny i produkty, kter� nejsou na sklad�. Jinak je toto zbo�� skryto.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'Po�et {unit}� v balen�: ';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'Po�et {unit}� v krabici: ';
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