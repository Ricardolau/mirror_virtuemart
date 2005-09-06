<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: hungarian_formal.php,v 1.18 2005/06/22 19:50:44 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage languages
*
* @copyright (C) 2004 Soeren Eberhardt
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*
* Hungarian translation by Sz�kely D�nes ( webG�b�, http://www.webgobe.ro/ )
* Tr. ver. 1.40 15.10.2004
*/
class phpShopLanguage extends mosAbstractLanguage {

    /*####################
    GENERAL DEFINITIONS
    ####################*/
    
    var $_PHPSHOP_MENU = "Men�";
    var $_PHPSHOP_CATEGORY = "Kateg�ria";
    var $_PHPSHOP_CATEGORIES = "Kateg�ri�k";
    var $_PHPSHOP_SELECT_CATEGORY = "Kiv�laszt egy kateg�ri�t:";
    var $_PHPSHOP_ADMIN = "Adminisztr�ci�";
    var $_PHPSHOP_PRODUCT = "Term�k";
    var $_PHPSHOP_LIST = "List�z�s";
    var $_PHPSHOP_ALL = "Mind";
    var $_PHPSHOP_LIST_ALL_PRODUCTS = "Valamennyi term�k list�z�sa";
    var $_PHPSHOP_VIEW = "n�z";
    var $_PHPSHOP_SHOW = "mutat";
    var $_PHPSHOP_ADD = "hozz�ad";
    var $_PHPSHOP_UPDATE = "friss�t";
    var $_PHPSHOP_DELETE = "t�r�l";
    var $_PHPSHOP_SELECT = "kiv�laszt";
    var $_PHPSHOP_SUBMIT = "Submit";
    var $_PHPSHOP_RANDOM = "V�letlenszer� term�k";
    var $_PHPSHOP_LATEST = "Leg�jabb term�kek";
    
    /*#####################
    MODULE ACCOUNT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_HOME_TITLE = "F�lap";
    var $_PHPSHOP_CART_TITLE = "Kos�r";
    var $_PHPSHOP_CHECKOUT_TITLE = "Kassza";
    var $_PHPSHOP_LOGIN_TITLE = "Bel�p�s";
    var $_PHPSHOP_LOGOUT_TITLE = "Kil�p�s";
    var $_PHPSHOP_BROWSE_TITLE = "B�ng�sz";
    var $_PHPSHOP_SEARCH_TITLE = "Keres";
    var $_PHPSHOP_ACCOUNT_TITLE = "�gyf�l karbantart�s";
    var $_PHPSHOP_NAVIGATION_TITLE = "Navig�l�s";
    var $_PHPSHOP_DEPARTMENT_TITLE = "R�szleg";
    var $_PHPSHOP_INFO = "Inform�ci�";
    
    var $_PHPSHOP_BROWSE_LBL = "B�ng�sz";
    var $_PHPSHOP_PRODUCTS_LBL = "Term�kek";
    var $_PHPSHOP_PRODUCT_LBL = "Term�k";
    var $_PHPSHOP_SEARCH_LBL = "Keres";
    var $_PHPSHOP_FLYPAGE_LBL = "Term�k r�szletek";
    var $_PHPSHOP_PRODUCT_SEARCH_LBL = "Term�k keres�s";
    
    var $_PHPSHOP_PRODUCT_NAME_TITLE = "Term�k neve";
    var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = "Term�k kateg�ria";
    var $_PHPSHOP_PRODUCT_DESC_TITLE = "Le�r�s";
    
    var $_PHPSHOP_CART_SHOW = "Mutasd a bev�s�rl�-kosarat";
    var $_PHPSHOP_CART_ADD_TO = "Megveszem!";
    var $_PHPSHOP_CART_NAME = "N�v";
    var $_PHPSHOP_CART_SKU = "SKU";
    var $_PHPSHOP_CART_PRICE = "�r";
    var $_PHPSHOP_CART_QUANTITY = "Mennyis�g";
    var $_PHPSHOP_CART_SUBTOTAL = "R�sz�sszeg";
    
    # Some messages
    var $_PHPSHOP_ADD_SHIPTO_1 = "Hozz�ad egy �j";
    var $_PHPSHOP_ADD_SHIPTO_2 = "Sz�ll�t�si c�m";
    var $_PHPSHOP_NO_SEARCH_RESULT = "A keres�se nem eredm�nyezett tal�latot.<br />";
    var $_PHPSHOP_PRICE_LABEL = "�r: ";
    var $_PHPSHOP_ORDER_BUTTON_LABEL = "Hozz�ad a bev�s�rl�-kos�rhoz";
    var $_PHPSHOP_NO_CUSTOMER = "�n m�g nem nyilv�ntartott �gyf�l. K�rem, adja meg a sz�ml�z�si inform�ci�it.";
    var $_PHPSHOP_DELETE_MSG = "Biztosan t�r�lni akarja ezt a bejegyz�st?";
    var $_PHPSHOP_THANKYOU = "K�sz�nj�k a megrendel�st!";
    var $_PHPSHOP_NOT_SHIPPED = "M�g nincs lesz�ll�tva";
    var $_PHPSHOP_EMAIL_SENDTO = "A meger�s�t� e-mail elk�ldve az al�bbi c�mre";
    var $_PHPSHOP_NO_USER_TO_SELECT = "Sajn�lom, nincs olyan  MOS - felhaszn�l� amelyet hozz�adhatn�k a com_phpshop felhaszn�l�-list�hoz";
    
    // Error messages
    
    var $_PHPSHOP_ERROR = "ERROR";
    var $_PHPSHOP_MOD_NOT_REG = "A modul nincs regisztr�lva.";
    var $_PHPSHOP_MOD_ISNO_REG = "nem valid phpShop modul.";
    var $_PHPSHOP_MOD_NO_AUTH = "�nnek nincs joga a k�rt modul haszn�lat�ra.";
    var $_PHPSHOP_PAGE_404_1 = "Az oldal nem l�tezik";
    var $_PHPSHOP_PAGE_404_2 = "Az adott f�jln�v nem l�tezik. Nem tal�lom az al�bbi f�jlt:";
    var $_PHPSHOP_PAGE_403 = "El�gtelen hozz�f�r�si jogok";
    var $_PHPSHOP_FUNC_NO_EXEC = "Nincs jogos�tv�nya v�grehajtani ";
    var $_PHPSHOP_FUNC_NOT_REG = "A funkci� nincs regisztr�lva";
    var $_PHPSHOP_FUNC_ISNO_REG = " nem valid MOS_com_phpShop funkci�.";
    
    /*#####################
    MODULE ADMIN
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADMIN_MOD = "Admin";
    
    
    // User List
    var $_PHPSHOP_USER_LIST_MNU = "Felhaszn�l� list�z�s";
    var $_PHPSHOP_USER_LIST_LBL = "Felhaszn�l� lista";
    var $_PHPSHOP_USER_LIST_USERNAME = "Felhaszn�l�n�v";
    var $_PHPSHOP_USER_LIST_FULL_NAME = "Teljes n�v";
    var $_PHPSHOP_USER_LIST_GROUP = "Csoport";
    
    // User Form
    var $_PHPSHOP_USER_FORM_MNU = "Felhaszn�l�t hozz�ad";
    var $_PHPSHOP_USER_FORM_LBL = "Felhaszn�l�i adatok hozz�ad�sa/friss�t�se";
    var $_PHPSHOP_USER_FORM_BILLTO_LBL = "Sz�ml�z�si inform�ci�";
    var $_PHPSHOP_USER_FORM_SHIPTO_LBL = "Sz�ll�t�si c�mek";
    var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = "C�met hozz�ad";
    var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = "C�m �ln�v";
    var $_PHPSHOP_USER_FORM_FIRST_NAME = "Vezet�kn�v";
    var $_PHPSHOP_USER_FORM_LAST_NAME = "Keresztn�v";
    var $_PHPSHOP_USER_FORM_MIDDLE_NAME = "Csal�dn�v";
    var $_PHPSHOP_USER_FORM_TITLE = "Megsz�l�t�s";
    var $_PHPSHOP_USER_FORM_USERNAME = "Felhaszn�l�n�v";
    var $_PHPSHOP_USER_FORM_PASSWORD_1 = "Jelsz�";
    var $_PHPSHOP_USER_FORM_PASSWORD_2 = "Jelsz� meger�s�t�se";
    var $_PHPSHOP_USER_FORM_PERMS = "Jogos�tv�nyok";
    var $_PHPSHOP_USER_FORM_COMPANY_NAME = "C�g neve";
    var $_PHPSHOP_USER_FORM_ADDRESS_1 = "C�m 1";
    var $_PHPSHOP_USER_FORM_ADDRESS_2 = "C�m 2";
    var $_PHPSHOP_USER_FORM_CITY = "V�ros";
    var $_PHPSHOP_USER_FORM_STATE = "�llam/Tartom�ny/Megye";
    var $_PHPSHOP_USER_FORM_ZIP = "Ir�ny�t�sz�m";
    var $_PHPSHOP_USER_FORM_COUNTRY = "Orsz�g";
    var $_PHPSHOP_USER_FORM_PHONE = "Telefon";
    var $_PHPSHOP_USER_FORM_FAX = "Fax";
    var $_PHPSHOP_USER_FORM_EMAIL = "E-mail";
    
    // Module List
    var $_PHPSHOP_MODULE_LIST_MNU = "Modulok list�z�sa";
    var $_PHPSHOP_MODULE_LIST_LBL = "Modul lista";
    var $_PHPSHOP_MODULE_LIST_NAME = "Modul neve";
    var $_PHPSHOP_MODULE_LIST_PERMS = "Modul jogos�tv�nyok";
    var $_PHPSHOP_MODULE_LIST_FUNCTIONS = "Funkci�k";
    var $_PHPSHOP_MODULE_LIST_ORDER = "Lista sorrend";
    
    // Module Form
    var $_PHPSHOP_MODULE_FORM_MNU = "Modult hozz�ad";
    var $_PHPSHOP_MODULE_FORM_LBL = "Modul inform�ci�k";
    var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = "Modul cimke (a f�men�ben)";
    var $_PHPSHOP_MODULE_FORM_NAME = "Modul neve";
    var $_PHPSHOP_MODULE_FORM_PERMS = "Modul jogos�tv�nyok";
    var $_PHPSHOP_MODULE_FORM_HEADER = "Modul fejl�c";
    var $_PHPSHOP_MODULE_FORM_FOOTER = "Modul l�bl�c";
    var $_PHPSHOP_MODULE_FORM_MENU = "Mutassam a modult az Admin men�ben?";
    var $_PHPSHOP_MODULE_FORM_ORDER = "Megjelen�t�si sorrend";
    var $_PHPSHOP_MODULE_FORM_DESCRIPTION = "Modul le�r�s";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = "Nyelvk�d";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = "Nyelvi f�jl";
    
    // Function List
    var $_PHPSHOP_FUNCTION_LIST_MNU = "Funkci�k list�z�sa";
    var $_PHPSHOP_FUNCTION_LIST_LBL = "Funkci� lista";
    var $_PHPSHOP_FUNCTION_LIST_NAME = "Funkci� neve";
    var $_PHPSHOP_FUNCTION_LIST_CLASS = "Class N�v";
    var $_PHPSHOP_FUNCTION_LIST_METHOD = "Class Elj�r�s";
    var $_PHPSHOP_FUNCTION_LIST_PERMS = "Jogos�tv�nyok";
    
    // Module Form
    var $_PHPSHOP_FUNCTION_FORM_MNU = "Funkci� hozz�ad�sa";
    var $_PHPSHOP_FUNCTION_FORM_LBL = "Funkci� inform�ci�k";
    var $_PHPSHOP_FUNCTION_FORM_NAME = "Funkci� neve";
    var $_PHPSHOP_FUNCTION_FORM_CLASS = "Class N�v";
    var $_PHPSHOP_FUNCTION_FORM_METHOD = "Class Elj�r�s";
    var $_PHPSHOP_FUNCTION_FORM_PERMS = "Funkci� jogos�tv�nyok";
    var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = "Funkci� le�r�s";
    
    // Currency form and list
    var $_PHPSHOP_CURRENCY_LIST_MNU = "P�nznemek list�z�sa";
    var $_PHPSHOP_CURRENCY_LIST_LBL = "P�nznem lista";
    var $_PHPSHOP_CURRENCY_LIST_ADD = "P�nznem hozz�ad�sa";
    var $_PHPSHOP_CURRENCY_LIST_NAME = "P�nznem neve";
    var $_PHPSHOP_CURRENCY_LIST_CODE = "P�nznem k�dja";
    
    // Country form and list
    var $_PHPSHOP_COUNTRY_LIST_MNU = "Orsz�gok list�z�sa";
    var $_PHPSHOP_COUNTRY_LIST_LBL = "Orsz�g lista";
    var $_PHPSHOP_COUNTRY_LIST_ADD = "Orsz�g hozz�ad�sa";
    var $_PHPSHOP_COUNTRY_LIST_NAME = "Orsz�g neve";
    var $_PHPSHOP_COUNTRY_LIST_3_CODE = "Orsz�gk�d (3 bet�s)";
    var $_PHPSHOP_COUNTRY_LIST_2_CODE = "Orsz�gk�d (2 bet�s)";
    
    /*#####################
    MODULE CHECKOUT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADDRESS = "C�m";
    var $_PHPSHOP_CONTINUE = "Folytat�s";
    
    # Some messages
    var $_PHPSHOP_EMPTY_CART = "A bev�s�rl�kosara pillanatnyilag �res.";
    
    
    /*#####################
    MODULE ISShipping
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ISSHIPPING_MOD = "InterShipper";
    
    
    // Shipping Ping
    var $_PHPSHOP_ISSHIP_PING_MNU = "Az InterShipper szerver pingel�se";
    var $_PHPSHOP_ISSHIP_PING_LBL = "InterShipper szerver pingel�s ";
    var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = "Az InterShipper ping sikertelen";
    var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = "Az InterShipper ping sikeres";
    var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = "Hordoz�";
    var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = "V�lasz<br />id�";
    var $_PHPSHOP_ISSHIP_PING_TIME_LBL = "mp.";
    
    // Shipping List
    var $_PHPSHOP_ISSHIP_LIST_MNU = "Sz�ll�t�si m�dszerek list�z�sa";
    var $_PHPSHOP_ISSHIP_LIST_LBL = "Akt�v sz�ll�t�si m�dszerek";
    var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = "Sz�ll�t�si m�dszerek";
    var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = "Akt�v";
    var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = "Kezel�si k�lts�g";
    var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = "�tfut�si id�";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = "�ltal�nyd�j";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = "sz�zal�k";
    var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = "napok";
    var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = "T�ls�lyos k�ldem�ny";
    
    // Dynamic Shipping Form
    var $_PHPSHOP_ISSHIP_FORM_MNU = "Sz�ll�t�si m�dok be�ll�t�sa";
    var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = "Sz�ll�t�si m�d hozz�ad�sa";
    var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = "Sz�ll�t�si m�d be�ll�t�sa";
    var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = "Friss�t�s";
    var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = "Sz�ll�t�si m�d";
    var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = "Aktiv�l�s";
    var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = "Kezel�si k�lts�g";
    var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = "�tfut�si id�";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = "�ltal�nyd�j";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = "sz�zal�k";
    var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = "napok";
    var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = "T�ls�lyos k�ldem�ny";
    
    
    
    /*#####################
    MODULE ORDER
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_ORDER_MOD = "Megrendel�sek";
    
    // Some menu options 
    var $_PHPSHOP_ORDER_CONFIRM_MNU = "Megrendel�s meger�s�t�se";
    var $_PHPSHOP_ORDER_CANCEL_MNU = "Megrendel�s visszavon�sa";
    var $_PHPSHOP_ORDER_PRINT_MNU = "Megrendel�s nyomtat�sa";
    var $_PHPSHOP_ORDER_DELETE_MNU = "Megrendel�s t�rl�se";
    
    // Order List
    var $_PHPSHOP_ORDER_LIST_MNU = "Megrendel�sek list�z�sa";
    var $_PHPSHOP_ORDER_LIST_LBL = "Megrendel�s lista";
    var $_PHPSHOP_ORDER_LIST_ID = "Megrendel�s sz�ma";
    var $_PHPSHOP_ORDER_LIST_CDATE = "Megrendel�s d�tuma";
    var $_PHPSHOP_ORDER_LIST_MDATE = "Utolj�ra m�dos�tva";
    var $_PHPSHOP_ORDER_LIST_STATUS = "St�tus";
    var $_PHPSHOP_ORDER_LIST_TOTAL = "R�sz�sszeg";
    var $_PHPSHOP_ORDER_ITEM = "Megrendel�s t�telek";
    
    // Order print
    var $_PHPSHOP_ORDER_PRINT_PO_LBL = "V�s�rl�si megb�z�s";
    var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = "Megrendel�s sz�ma";
    var $_PHPSHOP_ORDER_PRINT_PO_DATE = "Megrendel�s d�tuma";
    var $_PHPSHOP_ORDER_PRINT_PO_STATUS = "Megrendel�s st�tusa";
    var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = "�gyf�l inform�ci�";
    var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = "Sz�ml�z�si inform�ci�";
    var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = "Sz�ll�t�si inform�ci�";
    var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = "Sz�ml�z�si c�m";
    var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = "Sz�ll�t�si c�m";
    var $_PHPSHOP_ORDER_PRINT_NAME = "N�v";
    var $_PHPSHOP_ORDER_PRINT_COMPANY = "C�g";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = "C�m 1";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = "C�m 2";
    var $_PHPSHOP_ORDER_PRINT_CITY = "V�ros";
    var $_PHPSHOP_ORDER_PRINT_STATE = "�llam/Tartom�ny/Megye";
    var $_PHPSHOP_ORDER_PRINT_ZIP = "Ir�ny�t�sz�m";
    var $_PHPSHOP_ORDER_PRINT_COUNTRY = "Orsz�g";
    var $_PHPSHOP_ORDER_PRINT_PHONE = "Telefon";
    var $_PHPSHOP_ORDER_PRINT_FAX = "Fax";
    var $_PHPSHOP_ORDER_PRINT_EMAIL = "E-mail";
    var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = "Megrendel�s t�telek";
    var $_PHPSHOP_ORDER_PRINT_QUANTITY = "Mennyis�g";
    var $_PHPSHOP_ORDER_PRINT_QTY = "Mennyis�g";
    var $_PHPSHOP_ORDER_PRINT_SKU = "SKU";
    var $_PHPSHOP_ORDER_PRINT_PRICE = "�r";
    var $_PHPSHOP_ORDER_PRINT_TOTAL = "�sszesen";
    var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = "R�sz�sszeg";
    var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = "Ad�k �sszesen";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING = "Sz�ll�t�si �s kezel�si k�lts�g";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = "Sz�ll�t�si ad�";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = "Kifizet�si elj�r�s";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = "�gyf�l megnevez�s";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = "Sz�mlasz�m";
    var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = "Lej�rati id�";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = "Kifizet�si napl�";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = "Sz�ll�t�si inform�ci�";
    var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = "Kifizet�si inform�ci�";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = "Hordoz�";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = "Sz�ll�t�si m�d";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = "Lesz�ll�t�si d�tum";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = "Lesz�ll�t�si �r";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_MNU = "Megrendel�s st�tus t�pusok list�z�sa";
    var $_PHPSHOP_ORDER_STATUS_FORM_MNU = "Megrendel�s st�tus t�pus hozz�ad�sa";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_CODE = "Megrendel�s st�tusk�d";
    var $_PHPSHOP_ORDER_STATUS_LIST_NAME = "Megrendel�s st�tus neve";
    
    var $_PHPSHOP_ORDER_STATUS_FORM_LBL = "Megrendel�s st�tusa";
    var $_PHPSHOP_ORDER_STATUS_FORM_CODE = "Megrendel�s st�tusk�d";
    var $_PHPSHOP_ORDER_STATUS_FORM_NAME = "Megrendel�s st�tus neve";
    var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = "Megrendel�s list�z�s";
    
    
    /*#####################
    MODULE PRODUCT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_PRODUCT_MOD = "Term�kek";
    
    var $_PHPSHOP_CURRENT_PRODUCT = "Foly� term�k";
    var $_PHPSHOP_CURRENT_ITEM = "Foly� t�tel";
    
    // Product Inventory
    var $_PHPSHOP_PRODUCT_INVENTORY_LBL = "Term�k lelt�r";
    var $_PHPSHOP_PRODUCT_INVENTORY_MNU = "Lelt�r megtekint�se";
    var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = "�r";
    var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = "K�szleten";
    var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = "S�ly";
    // Product List
    var $_PHPSHOP_PRODUCT_LIST_MNU = "Term�kek list�z�sa";
    var $_PHPSHOP_PRODUCT_LIST_LBL = "Term�klista";
    var $_PHPSHOP_PRODUCT_LIST_NAME = "Term�k neve";
    var $_PHPSHOP_PRODUCT_LIST_SKU = "SKU";
    var $_PHPSHOP_PRODUCT_LIST_PUBLISH = "K�zz�tesz";
    
    // Product Form
    var $_PHPSHOP_PRODUCT_FORM_MNU = "Term�k hozz�ad�sa";
    var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = "Term�k szerkeszt�se";
    var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = "Term�k r�plap el�n�zete az �zletben";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = "T�tel hozz�ad�sa";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = "�j t�tel hozz�ad�sa";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = "�j term�k";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = "Term�k friss�t�s";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = "Term�k inform�ci�k";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = "Term�k st�tusa";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = "Term�k m�retei �s s�lya";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = "Term�k k�pek";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = "�j t�tel";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = "T�tel friss�t�se";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = "T�tel inform�ci�k";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = "T�tel st�tusa";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = "T�tel m�retei �s s�lya";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = "T�tel k�pek";
    var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = "Visszat�r�s a sz�l�term�khez";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = "A k�p friss�t�s�hez �rja be az �j k�p el�r�si �tvonal�t.";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = "�rja be \"none\" hogy t�r�lje az eddigi k�pet.";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = "Term�k t�telek";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = "T�tel attrib�tumok";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = "Biztosan le akarod t�r�lni ezt a term�ket \\n �s a hozz� kapcsol�d� t�teleket?";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = "Biztosan t�r�lni akarja ezt a t�telt?";
    var $_PHPSHOP_PRODUCT_FORM_VENDOR = "Elad�";
    var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = "Gy�rt�";
    var $_PHPSHOP_PRODUCT_FORM_SKU = "SKU";
    var $_PHPSHOP_PRODUCT_FORM_NAME = "N�v";
    var $_PHPSHOP_PRODUCT_FORM_URL = "URL";
    var $_PHPSHOP_PRODUCT_FORM_CATEGORY = "Kateg�ria";
    var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = "Kiskereskedelmi �r";
    var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = "Product Price (Net)";
    var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = "R�plap le�r�s";
    var $_PHPSHOP_PRODUCT_FORM_S_DESC = "R�vid le�r�s";
    var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = "K�szleten";
    var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = "Megrendelve";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = "Hozz�f�rhet�s�g kezdete";
    var $_PHPSHOP_PRODUCT_FORM_SPECIAL = "Akci�s term�k";
    var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = "�rengedm�ny t�pus";
    var $_PHPSHOP_PRODUCT_FORM_PUBLISH = "K�zz�tesz?";
    var $_PHPSHOP_PRODUCT_FORM_LENGTH = "Hossz�s�g";
    var $_PHPSHOP_PRODUCT_FORM_WIDTH = "Sz�less�g";
    var $_PHPSHOP_PRODUCT_FORM_HEIGHT = "Magass�g";
    var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = "M�rt�kegys�g";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT = "S�ly";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = "M�rt�kegys�g";
    var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = "B�lyegk�p";
    var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = "Teljes k�p";
    
    // Product Display
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = "Term�k hozz�ad�s eredm�nye";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = "Term�k friss�t�s eredm�nye";
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = "T�tel hozz�ad�s eredm�nye";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = "T�tel friss�t�s eredm�nye";
    var $_PHPSHOP_PRODUCT_CSV_UPLOAD = "CSV felt�lt�s haszn�lata";
    var $_PHPSHOP_PRODUCT_FOLDERS = "Term�k k�nyvt�rak";
    
    // Product Category List
    var $_PHPSHOP_CATEGORY_LIST_MNU = "Kateg�ri�k list�z�sa";
    var $_PHPSHOP_CATEGORY_LIST_LBL = "Kateg�ria fastrukt�ra";
    
    // Product Category Form
    var $_PHPSHOP_CATEGORY_FORM_MNU = "Kateg�ria hozz�ad�sa";
    var $_PHPSHOP_CATEGORY_FORM_LBL = "Kateg�ria inform�ci�";
    var $_PHPSHOP_CATEGORY_FORM_NAME = "Kateg�ria neve";
    var $_PHPSHOP_CATEGORY_FORM_PARENT = "Sz�l�kateg�ria";
    var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = "Kateg�ria le�r�s";
    var $_PHPSHOP_CATEGORY_FORM_PUBLISH = "K�zz�tesz?";
    var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = "Kateg�ria r�plap";
    
    // Product Attribute List
    var $_PHPSHOP_ATTRIBUTE_LIST_MNU = "Attrib�tumok list�z�sa";
    var $_PHPSHOP_ATTRIBUTE_LIST_LBL = "Attrib�tum lista";
    var $_PHPSHOP_ATTRIBUTE_LIST_NAME = "Attrib�tum neve";
    var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = "Megrendel�s list�z�s";
    
    // Product Attribute Form
    var $_PHPSHOP_ATTRIBUTE_FORM_MNU = "Attrib�tum hozz�ad�sa";
    var $_PHPSHOP_ATTRIBUTE_FORM_LBL = "Attrib�tum �rlap";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = "�j term�kattrib�tum";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = "Term�k-attrib�tum friss�t�se";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = "�j t�tel-attrib�tum";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = "T�tel-attrib�tum friss�t�se";
    var $_PHPSHOP_ATTRIBUTE_FORM_NAME = "Attrib�tum neve";
    var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = "Megrendel�s list�z�s";
    
    // Product Price List
    var $_PHPSHOP_PRICE_LIST_MNU = "Kateg�ri�k list�z�sa";
    var $_PHPSHOP_PRICE_LIST_LBL = "�r fastrukt�ra";
    var $_PHPSHOP_PRICE_LIST_FOR_LBL = "�ra";
    var $_PHPSHOP_PRICE_LIST_GROUP_NAME = "Csoport n�v";
    var $_PHPSHOP_PRICE_LIST_PRICE = "�r";
    var $_PHPSHOP_PRODUCT_LIST_CURRENCY = "P�nznem";
    
    // Product Price Form
    var $_PHPSHOP_PRICE_FORM_MNU = "�r hozz�ad�sa";
    var $_PHPSHOP_PRICE_FORM_LBL = "�r inform�ci�";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = "Term�k �j �ra";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = "Term�k �r�nak friss�t�se";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = "�j t�tel�r";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = "T�tel �r�nak friss�t�se";
    var $_PHPSHOP_PRICE_FORM_PRICE = "�r";
    var $_PHPSHOP_PRICE_FORM_CURRENCY = "P�nznem";
    var $_PHPSHOP_PRICE_FORM_GROUP = "V�s�rl�csoport";
    
    
    /*#####################
    MODULE REPORT BASIC
    #####################*/
    # Some LABELs
    var $_PHPSHOP_REPORTBASIC_MOD = "Jelent�sek";
    var $_PHPSHOP_RB_INDIVIDUAL = "Egy�ni term�klist�k";
    var $_PHPSHOP_RB_SALE_TITLE = "Elad�si jelent�sek";
    
    /* labels for rpt_sales */
    var $_PHPSHOP_RB_SALES_PAGE_TITLE = "Elad�si adatok �ttekint�se";
    
    var $_PHPSHOP_RB_INTERVAL_TITLE = "�ll�tsa be az intervallumot";
    var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = "Havi";
    var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = "Heti";
    var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = "Napi";
    
    var $_PHPSHOP_RB_THISMONTH_BUTTON = "Ez a h�nap";
    var $_PHPSHOP_RB_LASTMONTH_BUTTON = "A m�lt h�nap";
    var $_PHPSHOP_RB_LAST60_BUTTON = "Utols� 60 nap";
    var $_PHPSHOP_RB_LAST90_BUTTON = "Utols� 90 nap";
    
    var $_PHPSHOP_RB_START_DATE_TITLE = "Kezdet";
    var $_PHPSHOP_RB_END_DATE_TITLE = "V�g";
    var $_PHPSHOP_RB_SHOW_SEL_RANGE = "Mutassa a kiv�lasztott tartom�nyt";
    var $_PHPSHOP_RB_REPORT_FOR = "Jelent�s ";
    var $_PHPSHOP_RB_DATE = "D�tum";
    var $_PHPSHOP_RB_ORDERS = "Megrendel�sek";
    var $_PHPSHOP_RB_TOTAL_ITEMS = "�ssz. eladott t�telek";
    var $_PHPSHOP_RB_REVENUE = "J�vedelem";
    var $_PHPSHOP_RB_PRODLIST = "Term�k list�z�s";
    
    
    
    /*#####################
    MODULE SHOP
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOP_MOD = "�zlet";
    var $_PHPSHOP_PRODUCT_THUMB_TITLE = "K�p";
    var $_PHPSHOP_PRODUCT_PRICE_TITLE = "�r";
    var $_PHPSHOP_ORDER_STATUS_P = "F�gg�";

    var $_PHPSHOP_ORDER_STATUS_C = "Visszaigazolva";
    var $_PHPSHOP_ORDER_STATUS_X = "Visszavonva";
    
    
    # Some messages
    var $_PHPSHOP_ORDER_BUTTON = "Megrendel�s";
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOPPER_MOD = "V�s�rl�";
    
    
    
    // Shopper List
    var $_PHPSHOP_SHOPPER_LIST_MNU = "V�s�rl�k list�z�sa";
    var $_PHPSHOP_SHOPPER_LIST_LBL = "V�s�rl�k list�ja";
    var $_PHPSHOP_SHOPPER_LIST_USERNAME = "Felhaszn�l�n�v";
    var $_PHPSHOP_SHOPPER_LIST_NAME = "Teljes n�v";
    var $_PHPSHOP_SHOPPER_LIST_GROUP = "Csoport";
    
    // Shopper Form
    var $_PHPSHOP_SHOPPER_FORM_MNU = "V�s�rl� hozz�ad�sa";
    var $_PHPSHOP_SHOPPER_FORM_LBL = "V�s�rl� inform�ci�";
    var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = "Sz�ml�z�si inform�ci�";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = "Inform�ci�";
    var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = "Sz�ll�t�si inform�ci�";
    var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = "C�met hozz�ad";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = "C�m �ln�v";
    var $_PHPSHOP_SHOPPER_FORM_USERNAME = "Felhaszn�l�n�v";
    var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = "Vezet�kn�v";
    var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = "Keresztn�v";
    var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = "Csal�dn�v";
    var $_PHPSHOP_SHOPPER_FORM_TITLE = "Megsz�l�t�s";
    var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = "V�s�rl�n�v";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = "Jelsz�";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = "Jelsz� meger�s�t�se";
    var $_PHPSHOP_SHOPPER_FORM_GROUP = "V�s�rl�csoport";
    var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = "C�g neve";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = "C�m 1";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = "C�m 2";
    var $_PHPSHOP_SHOPPER_FORM_CITY = "V�ros";

    var $_PHPSHOP_SHOPPER_FORM_STATE = "�llam/Tartom�ny/Megye";
    var $_PHPSHOP_SHOPPER_FORM_ZIP = "Ir�ny�t�sz�m";
    var $_PHPSHOP_SHOPPER_FORM_COUNTRY = "Orsz�g";
    var $_PHPSHOP_SHOPPER_FORM_PHONE = "Telefon";
    var $_PHPSHOP_SHOPPER_FORM_FAX = "Fax";
    var $_PHPSHOP_SHOPPER_FORM_EMAIL = "E-mail";
    
    // Shopper Group List
    var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = "V�s�rl�csoportok list�z�sa";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = "V�s�rl�csoport lista";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = "Csoport n�v";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = "Csoport le�r�s";
    
    
    // Shopper Group Form
    var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = "V�s�rl�csoport �rlap";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = "V�s�rl�csoport hozz�ad�sa";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = "Csoport n�v";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = "Csoport le�r�s";
    
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_STORE_MOD = "�zlet";
    
    
    // Store Form
    var $_PHPSHOP_STORE_FORM_MNU = "�zlet szerkeszt�se";
    var $_PHPSHOP_STORE_FORM_LBL = "�zlet inform�ci�k";
    var $_PHPSHOP_STORE_FORM_CONTACT_LBL = "El�rhet�s�gi inform�ci�";
    var $_PHPSHOP_STORE_FORM_FULL_IMAGE = "Teljes k�p";
    var $_PHPSHOP_STORE_FORM_UPLOAD = "K�p felt�lt�s";
    var $_PHPSHOP_STORE_FORM_STORE_NAME = "�zlet neve";
    var $_PHPSHOP_STORE_FORM_COMPANY_NAME = "�zlettulajdonos c�g neve";
    var $_PHPSHOP_STORE_FORM_ADDRESS_1 = "C�m 1";
    var $_PHPSHOP_STORE_FORM_ADDRESS_2 = "C�m 2";
    var $_PHPSHOP_STORE_FORM_CITY = "V�ros";
    var $_PHPSHOP_STORE_FORM_STATE = "�llam/Tartom�ny/Megye";
    var $_PHPSHOP_STORE_FORM_COUNTRY = "Orsz�g";
    var $_PHPSHOP_STORE_FORM_ZIP = "Ir�ny�t�sz�m";
    var $_PHPSHOP_STORE_FORM_PHONE = "Telefon";
    var $_PHPSHOP_STORE_FORM_CURRENCY = "P�nznem";
    var $_PHPSHOP_STORE_FORM_CATEGORY = "�zlet kateg�ri�ja";
    var $_PHPSHOP_STORE_FORM_LAST_NAME = "Keresztn�v";
    var $_PHPSHOP_STORE_FORM_FIRST_NAME = "Vezet�kn�v";
    var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = "Csal�dn�v";
    var $_PHPSHOP_STORE_FORM_TITLE = "Megsz�l�t�s";
    var $_PHPSHOP_STORE_FORM_PHONE_1 = "Telefon 1";
    var $_PHPSHOP_STORE_FORM_PHONE_2 = "Telefon 2";
    var $_PHPSHOP_STORE_FORM_FAX = "Fax";
    var $_PHPSHOP_STORE_FORM_EMAIL = "E-mail";
    var $_PHPSHOP_STORE_FORM_IMAGE_PATH = "K�p el�r�si �t";
    var $_PHPSHOP_STORE_FORM_DESCRIPTION = "Le�r�s";
    
    
    
    var $_PHPSHOP_PAYMENT = "Kifizet�s";
    // Payment Method List
    var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = "Kifizet�si m�dszerek list�z�sa";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = "Kifizet�si elj�r�sok list�ja";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = "N�v";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = "K�d";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = "�rengedm�ny";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = "V�s�rl�csoport";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = "Kifizet�si elj�r�s t�pus";
    
    // Payment Method Form
    var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = "Kifizet�si elj�r�s hozz�ad�sa";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = "Kifizet�si elj�r�s �rlap";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = "Kifizet�si elj�r�s neve";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = "V�s�rl�csoport";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = "�rengedm�ny";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = "K�d";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = "Megrendel�s list�z�s";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = "Kifizet�si elj�r�s t�pus";
    
    
    
    /*#####################
    MODULE TAX
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_TAX_MOD = "Ad�";
    
    // User List
    var $_PHPSHOP_TAX_RATE = "Ad�z�si r�t�k";
    var $_PHPSHOP_TAX_LIST_MNU = "Ad�z�si r�t�k list�z�sa";
    var $_PHPSHOP_TAX_LIST_LBL = "Ad�z�si r�t�k list�ja";
    var $_PHPSHOP_TAX_LIST_STATE = "Ad�z�si �llam vagy r�gi�";
    var $_PHPSHOP_TAX_LIST_COUNTRY = "Ad�z�si orsz�g";
    var $_PHPSHOP_TAX_LIST_RATE = "Ad�z�si r�ta";
    
    // User Form
    var $_PHPSHOP_TAX_FORM_MNU = "Ad�z�si r�ta hozz�ad�sa";
    var $_PHPSHOP_TAX_FORM_LBL = "Ad�z�si inform�ci�k hozz�ad�sa";
    var $_PHPSHOP_TAX_FORM_STATE = "Ad�z�si �llam vagy r�gi�";
    var $_PHPSHOP_TAX_FORM_COUNTRY = "Ad�z�si orsz�g";
    var $_PHPSHOP_TAX_FORM_RATE = "Ad�z�si r�ta (16%-os ad� megad�s�hoz 0,16-ot �rjon be)";
    
    
    
    
    /*#####################
    MODULE VENDOR
    #####################*/
    
    
    
    # Some LABELs
    var $_PHPSHOP_VENDOR_MOD = "Elad�";
    var $_PHPSHOP_VENDOR_ADMIN = "Elad�k";
    
    
    // Vendor List
    var $_PHPSHOP_VENDOR_LIST_MNU = "Elad�k list�z�sa";
    var $_PHPSHOP_VENDOR_LIST_LBL = "Elad� lista";
    var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = "Elad� neve";
    var $_PHPSHOP_VENDOR_LIST_ADMIN = "Admin";
    
    // Vendor Form
    var $_PHPSHOP_VENDOR_FORM_MNU = "Elad� hozz�ad�sa";
    var $_PHPSHOP_VENDOR_FORM_LBL = "Inform�ci� hozz�ad�sa";
    var $_PHPSHOP_VENDOR_FORM_INFO_LBL = "Elad� inform�ci�";
    var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = "El�rhet�s�gi inform�ci�";
    var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = "Teljes k�p";
    var $_PHPSHOP_VENDOR_FORM_UPLOAD = "K�p felt�lt�s";
    var $_PHPSHOP_VENDOR_FORM_STORE_NAME = "Elad� �zlet neve";
    var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = "Elad� c�g neve";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = "C�m 1";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = "C�m 2";
    var $_PHPSHOP_VENDOR_FORM_CITY = "V�ros";
    var $_PHPSHOP_VENDOR_FORM_STATE = "�llam/Tartom�ny/Megye";
    var $_PHPSHOP_VENDOR_FORM_COUNTRY = "Orsz�g";
    var $_PHPSHOP_VENDOR_FORM_ZIP = "Ir�ny�t�sz�m";
    var $_PHPSHOP_VENDOR_FORM_PHONE = "Telefon";
    var $_PHPSHOP_VENDOR_FORM_CURRENCY = "P�nznem";
    var $_PHPSHOP_VENDOR_FORM_CATEGORY = "Elad� kateg�ria";
    var $_PHPSHOP_VENDOR_FORM_LAST_NAME = "Keresztn�v";
    var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = "Vezet�kn�v";
    var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = "Csal�dn�v";
    var $_PHPSHOP_VENDOR_FORM_TITLE = "Megsz�l�t�s";
    var $_PHPSHOP_VENDOR_FORM_PHONE_1 = "Telefon 1";
    var $_PHPSHOP_VENDOR_FORM_PHONE_2 = "Telefon 2";
    var $_PHPSHOP_VENDOR_FORM_FAX = "Fax";
    var $_PHPSHOP_VENDOR_FORM_EMAIL = "E-mail";
    var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = "K�p el�r�si �t";
    var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = "Le�r�s";
    
    
    // Vendor Category List
    var $_PHPSHOP_VENDOR_CAT_LIST_MNU = "Elad� kateg�ri�k list�z�sa";
    var $_PHPSHOP_VENDOR_CAT_LIST_LBL = "Elad� kateg�ri�k list�ja";
    var $_PHPSHOP_VENDOR_CAT_NAME = "Kateg�ria neve";
    var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = "Kateg�ria le�r�s";
    var $_PHPSHOP_VENDOR_CAT_VENDORS = "Elad�k";
    
    // Vendor Category Form
    var $_PHPSHOP_VENDOR_CAT_FORM_MNU = "Elad� kateg�ria hozz�ad�sa";
    var $_PHPSHOP_VENDOR_CAT_FORM_LBL = "Elad� kateg�ria �rlap";
    var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = "Kateg�ria inform�ci�";
    var $_PHPSHOP_VENDOR_CAT_FORM_NAME = "Kateg�ria neve";
    var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = "Kateg�ria le�r�s";
    
    /*#####################
    MODULE MANUFACTURER
    #####################*/

    # Some LABELs
    var $_PHPSHOP_MANUFACTURER_MOD = "Gy�rt�";
    var $_PHPSHOP_MANUFACTURER_ADMIN = "Gy�rt�k";
    
    
    // Manufacturer List
    var $_PHPSHOP_MANUFACTURER_LIST_MNU = "Gy�rt�k list�z�sa";
    var $_PHPSHOP_MANUFACTURER_LIST_LBL = "Gy�rt�k list�ja";
    var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = "Gy�rt� neve";
    var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = "Admin";
    
    // Manufacturer Form
    var $_PHPSHOP_MANUFACTURER_FORM_MNU = "Gy�rt� hozz�ad�sa";
    var $_PHPSHOP_MANUFACTURER_FORM_LBL = "Inform�ci� hozz�ad�sa";
    var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = "Gy�rt� inform�ci�k";
    var $_PHPSHOP_MANUFACTURER_FORM_NAME = "Gy�rt� neve";
    var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = "Gy�rt� kateg�ria";
    var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = "E-mail";
    var $_PHPSHOP_MANUFACTURER_FORM_URL = "Gy�rt� honlapj�nak c�me";
    var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = "Le�r�s";
    
    
    // Manufacturer Category List
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = "Gy�rt� kateg�ri�k list�z�sa";
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = "Gy�rt� kateg�ri�k list�ja";
    var $_PHPSHOP_MANUFACTURER_CAT_NAME = "Kateg�ria neve";
    var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = "Kateg�ria le�r�s";
    var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = "Gy�rt�k";
    
    // Manufacturer Category Form
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = "Gy�rt� kateg�ria hozz�ad�sa";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = "Gy�rt� kateg�ria �rlap";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = "Kateg�ria inform�ci�";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = "Kateg�ria neve";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = "Kateg�ria le�r�s";
    
    
    /*#####################
    Modul HELP
    #####################*/
    var $_PHPSHOP_HELP_MOD = "S�g�";
    
    // 210104 start
    
    var $_PHPSHOP_CART_ACTION = "Friss�t";
    var $_PHPSHOP_CART_UPDATE = "Friss�ti a kos�r tartalm�t";
    var $_PHPSHOP_CART_DELETE = "T�rli a term�ket a kos�rb�l";
    
    //shopbrowse form
    
    var $_PHPSHOP_PRODUCT_PRICETAG = "�r";
    var $_PHPSHOP_PRODUCT_CALL = "H�vjon az �r�rt";
    var $_PHPSHOP_PRODUCT_PREVIOUS = "Megel�z�";
    var $_PHPSHOP_PRODUCT_NEXT = "K�vetkez�";
    
    //ro_basket
    
    var $_PHPSHOP_CART_TAX = "Ad�";
    var $_PHPSHOP_CART_SHIPPING = "Sz�ll�t�si �s kezel�si k�lts�g";
    var $_PHPSHOP_CART_TOTAL = "�sszesen";
    
    //CHECKOUT.INDEX
    
    var $_PHPSHOP_CHECKOUT_NEXT = "K�vetkez�";
    var $_PHPSHOP_CHECKOUT_REGISTER = "REGISZTR�L";
    
    //CHECKOUT.CONFIRM
    
    var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = "Sz�ml�z�si inform�ci�";
    var $_PHPSHOP_CHECKOUT_CONF_COMPANY = "C�g";
    var $_PHPSHOP_CHECKOUT_CONF_NAME = "N�v";
    var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = "C�m";
    var $_PHPSHOP_CHECKOUT_CONF_PHONE = "Telefon";
    var $_PHPSHOP_CHECKOUT_CONF_FAX = "Fax";
    var $_PHPSHOP_CHECKOUT_CONF_EMAIL = "E-mail";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = "Sz�ll�t�si inform�ci�";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = "C�g";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = "N�v";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = "C�m";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = "Telefon";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = "Fax";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = "Kifizet�si inform�ci�";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = "N�v a hitelk�rty�n";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = "Kifizet�si elj�r�s";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = "Hitelk�rtya sz�m";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = "Lej�rati d�tum";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = "Teljes megrendel�s";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = "k�rt inform�ci� amikor hitelk�rty�s kifizet�s van kiv�lasztva";
    
    
    var $_PHPSHOP_ZONE_MOD = "Zon�lis sz�ll�t�s";
    
    var $_PHPSHOP_ZONE_LIST_MNU = "Z�n�k list�z�sa";
    var $_PHPSHOP_ZONE_FORM_MNU = "Z�na hozz�ad�sa";
    var $_PHPSHOP_ZONE_ASSIGN_MNU = "Hozz�rendel�s z�n�khoz";
    
    // assign zone List
    var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = "Orsz�g";
    var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = "Kurrens z�na";
    var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = "Rendelje hozz� egy z�n�hoz";
    var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = "Friss�t";
    var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = "Hozz�rendel�s z�n�khoz";
    
    // zone Form
    var $_PHPSHOP_ZONE_FORM_NAME_LBL = "Z�na n�v";
    var $_PHPSHOP_ZONE_FORM_DESC_LBL = "Z�na le�r�s";
    var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = "Z�na k�lts�g t�telenk�nt";
    var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = "Z�na k�lts�ghat�r";
    
    // List of zones
    var $_PHPSHOP_ZONE_LIST_LBL = "Z�na lista";
    var $_PHPSHOP_ZONE_LIST_NAME_LBL = "Z�na n�v";
    var $_PHPSHOP_ZONE_LIST_DESC_LBL = "Z�na le�r�s";
    var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = "Z�na k�lts�g t�telenk�nt";
    var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = "Z�na k�lts�ghat�r";
    
    var $_PHPSHOP_LOGIN_FIRST = "K�rem, jelentkezzen be vagy regisztr�lja mag�t (haszn�lja a bejelentkez�si modult!).<br>K�sz�nj�k.";
    var $_PHPSHOP_STORE_FORM_TOS = "Szolg�ltat�si felt�telek";
    var $_PHPSHOP_AGREE_TO_TOS = "K�rem, fogadja el a  szolg�ltat�si felt�teleinket!";
    var $_PHPSHOP_I_AGREE_TO_TOS = "Elfogadom a szolg�ltat�si felt�teleket.";
    
    var $_PHPSHOP_LEAVE_BLANK = "(hagyja �resen, ha nincs <br />hozz� egy�ni php-f�jl!)";
    var $_PHPSHOP_RETURN_LOGIN = "Visszat�r� fogyaszt�k: K�rem, jelentkezzen be";
    var $_PHPSHOP_NEW_CUSTOMER = "�j? K�rem, adja meg a sz�ml�z�si inform�ci�it";
    var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = "�gyf�l sz�mla:";
    var $_PHPSHOP_ACC_ORDER_INFO = "Megrendel�s inform�ci�k";
    var $_PHPSHOP_ACC_UPD_BILL = "Itt friss�theti a sz�ml�z�si inform�ci�it.";
    var $_PHPSHOP_ACC_UPD_SHIP = "Itt hozz�adhat/karbantarthat sz�ll�t�si c�meket.";
    var $_PHPSHOP_ACC_ACCOUNT_INFO = "�gyf�l inform�ci�";
    var $_PHPSHOP_ACC_SHIP_INFO = "Sz�ll�t�si inform�ci�";
    var $_PHPSHOP_ACC_NO_ORDERS = "Nincs megjelen�thet� megrendel�s";
    var $_PHPSHOP_ACC_BILL_DEF = "- Alap�rtelmezett (ugyanaz mint a sz�ml�z�si c�m)";
    var $_PHPSHOP_SHIPTO_TEXT = "Itt hozz�adhat/karbantarthat  sz�ll�t�si helysz�neket a felhaszn�l�i adataihoz. K�rem, tal�ljon egy megfelel� becenevet vagy k�dot az al�bb kiv�lasztand� sz�ll�t�si c�mnek.";
    var $_PHPSHOP_CONFIG = "Be�ll�t�s";
    var $_PHPSHOP_USERS = "Felhaszn�l�k";
    var $_PHPSHOP_IS_CC_PAYMENT = "Hitelk�rty�s fizet�s?";
    
    /*#####################################################
     MODULE SHIPPING
    #######################################################*/
    var $_PHPSHOP_SHIPPING_MOD = "Sz�ll�t�s";
    var $_PHPSHOP_SHIPPING_MENU_LABEL = "Sz�ll�t�s";
    
    var $_PHPSHOP_CARRIER_LIST_MNU = "Sz�ll�t�";
    var $_PHPSHOP_CARRIER_LIST_LBL = "Sz�ll�t� lista";
    var $_PHPSHOP_RATE_LIST_MNU = "Sz�ll�t�si d�jt�tel";
    var $_PHPSHOP_RATE_LIST_LBL = "Sz�ll�t�si d�jt�tel lista";
    var $_PHPSHOP_CARRIER_LIST_NAME_LBL = "N�v";
    var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = "List�z�si sorrend";
    
    var $_PHPSHOP_CARRIER_FORM_MNU = "Sz�ll�t� l�trehoz�sa";
    var $_PHPSHOP_CARRIER_FORM_LBL = "Sz�ll�t� m�dos�t�sa/l�trehoz�sa";
    var $_PHPSHOP_RATE_FORM_MNU = "Sz�ll�t�si d�jt�telt l�trehoz";
    var $_PHPSHOP_RATE_FORM_LBL = "Sz�ll�t�si d�jt�telt l�trehoz/szerkeszt";
    
    var $_PHPSHOP_RATE_FORM_NAME = "Sz�ll�t�si d�jt�tel le�r�s";
    var $_PHPSHOP_RATE_FORM_CARRIER = "Sz�ll�t�";
    var $_PHPSHOP_RATE_FORM_COUNTRY = "Orsz�g";
    var $_PHPSHOP_RATE_FORM_ZIP_START = "Ir�ny�t�sz�m sorozat kezdete";
    var $_PHPSHOP_RATE_FORM_ZIP_END = "Ir�ny�t�sz�m sorozat v�ge";
    var $_PHPSHOP_RATE_FORM_WEIGHT_START = "Legkisebb s�ly";
    var $_PHPSHOP_RATE_FORM_WEIGHT_END = "Legnagyobb s�ly";
    var $_PHPSHOP_RATE_FORM_VALUE = "Illet�k";
    var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = "A csomagja illet�ke";
    var $_PHPSHOP_RATE_FORM_CURRENCY = "P�nznem";
    var $_PHPSHOP_RATE_FORM_VAT_ID = "TVA azonos�t�";
    var $_PHPSHOP_RATE_FORM_LIST_ORDER = "Megrendel�s list�z�s";
    
    var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = "Sz�ll�t�";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = "Sz�ll�t�si d�jt�tel le�r�s";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = "S�ly  ...-t�l";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = "... ig";
    var $_PHPSHOP_CARRIER_FORM_NAME = "Sz�ll�t� c�g";
    var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = "List�z�si sorrend";
    
    var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = "ERROR: Sz�ll�t� ID m�r l�tezik.";
    var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = "ERROR: V�lasszon egy sz�ll�t�t.";
    var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = "ERROR: Legal�bb egy sz�ll�t�si d�jt�tel l�tezik, el�bb t�r�lje le ezeket, �s csak ut�na a sz�ll�t�t";
    var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = "ERROR: Nem tal�lom a sz�ll�t�t ezzel az ID -vel.";
    
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = "ERROR: V�lasszon egy sz�ll�t�t.";
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = "ERROR: Nem tal�lom a sz�ll�t�t ezzel az ID -vel.";
    var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = "ERROR: A d�jt�tel le�r�s�t meg kell adni.";
    var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = "ERROR: A c�lorsz�g �rv�nytelen. T�bb orsz�g megadhat� az al�bbi elv�laszt� haszn�lat�val  \";\".";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = "ERROR: A legkisebb s�lyt meg kell adni";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = "ERROR: A legnagyobb s�lyt meg kell adni";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = "ERROR: A legkisebb s�ly kisebb kell legyen, mint a legnagyobb s�ly";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = "ERROR: A sz�ll�t�si illet�ket meg kell adni";
    var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = "ERROR: V�lasszon egy p�nznemet";
    
    var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = "ERROR: A sz�ll�t�si d�jt�telt meg kell adni";
    
    var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = "K�rem, v�lasszon";
    var $_PHPSHOP_INFO_MSG_CARRIER = "Sz�ll�t�";
    var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = "Sz�ll�t�si d�jt�tel";
    var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = "�r";
    var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = "0 (-semmi-)";
    /*#####################################################
     END: MODULE SHIPPING
    #######################################################*/
    
    var $_PHPSHOP_PAYMENT_FORM_CC = "Hitelk�rtya";
    var $_PHPSHOP_PAYMENT_FORM_USE_PP = "Haszn�lja a Payment Processort";
    var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = "Banki terhel�s";
    var $_PHPSHOP_PAYMENT_FORM_AO = "Csak c�m, �tv�telkor fizetend� (postai ut�nv�t)";
    var $_PHPSHOP_CHECKOUT_MSG_2 = "K�rem, v�lasszon egy sz�ll�t�si c�met!";
    var $_PHPSHOP_CHECKOUT_MSG_3 = "K�rem, v�lasszon egy sz�ll�t�si elj�r�st!";
    var $_PHPSHOP_CHECKOUT_MSG_4 = "K�rem, v�lasszon kifizet�si elj�r�st!";
    var $_PHPSHOP_CHECKOUT_MSG_99 = "K�rem, n�zze �t a megadott inform�ci�kat �s igazolja visszza a  megrendel�st!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = "K�rem, v�lasszon egy sz�ll�t�si m�dszert.";
    var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = "K�rem, v�lasszon m�s sz�ll�t�si elj�r�st.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = "K�rem, v�lasszon kifizet�si elj�r�st.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = "K�rem, adja meg a hitelk�rtyasz�m�t.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = "K�rem, adja meg a hitelk�rty�n szerepl� nevet.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = "A megadott hitelk�rtya sz�m nem �rv�nyes.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = "K�rem, adja meg a hitelk�rtya lej�rati h�napj�t.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = "K�rem, adja meg a  hitelk�rtya lej�rati �v�t.";
    var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = "A lej�rati d�tum nem �rv�nyes.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = "K�rem, v�lasszon sz�ll�t�si c�met.";
    var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = "�rv�nytelen sz�mlasz�m.";
    var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = "A bev�s�rl�kosara �res!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = "ERROR: K�rem, v�lasszon egy sz�ll�t�t!";
    var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = "ERROR: A kiv�lasztott sz�ll�t�si d�jt�telt nem tal�lom!";
    var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = "ERROR: A sz�ll�t�si c�m�t nem tal�lom!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = "ERROR: Itt nem tal�lhat� semmilyen hitelk�rtya adat...";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = "ERROR: Hitelk�rtya sz�m nem tal�lhat�!";
    var $_PHPSHOP_CHECKOUT_ERR_TEST = "Sajn�ljuk, de a hitelk�rtya sz�m, amit haszn�l, egy tesztel�sekre fenntartott sz�m!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = "Az user_id nem tal�lhat� az adatb�zisban!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = "�n nem adta meg a banksz�ml�ja vezet�j�nek nev�t.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = "�n nem adta meg az IBAN azonos�t�j�t.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = "�n nem adta meg a banksz�ml�ja sz�m�t.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = "�n nem adta meg a bank sorsz�m�t/azonos�t�j�t.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = "�n nem adta meg a bankja nev�t.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = "A v�s�rl�shoz meg kell tenni az �sszes k�rt l�p�st!";

    var $_PHPSHOP_CHECKOUT_MSG_LOG = "A kifizet�si inform�ci�it elmentett�k k�s�bbi feldolgoz�s c�lj�b�l.<br />";
    
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = "A minim�lis v�s�rl�si megb�z�s �rt�k�t m�g nem �rte el.";
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = "A minim�lis v�s�rl�si megb�z�s �rt�ke:";
    var $_PHPSHOP_CHECKOUT_PAYMENT_CC = "Hitelk�rty�s fizet�s";
    var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = "m�s kifizet�si m�dok";
    var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = "K�rem, v�lasszon kifizet�si elj�r�st:";
    
    var $_PHPSHOP_STORE_FORM_MPOV = "Minim�lis v�s�rl�si megb�z�s �rt�ke";
    var $_PHPSHOP_ACCOUNT_BANK_TITLE = "Banksz�mla inform�ci�";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = "Sz�mlasz�m";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = "Bank sorsz�m/azonos�t� k�d";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = "Bank neve";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = "IBAN";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = "Sz�mlatulajdonos";
    
    var $_PHPSHOP_MODULES = "Modulok";
    var $_PHPSHOP_FUNCTIONS = "Funkci�k";
    var $_PHPSHOP_SPECIAL_PRODUCTS = "Speci�lis term�kek";
    
    var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = "K�rj�k, ha �hajtja, hagyjon �zenetet a megrendel�se mellett!";
    var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = "�gyf�l-megjegyz�s";
    var $_PHPSHOP_INCLUDING_TAX = "(bele�rtve \$tax % ad�)";
    var $_PHPSHOP_PLEASE_SEL_ITEM = "K�rem, v�lasszon egy t�telt";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = "T�tel";

    // DOWNLOADS
    
    var $_PHPSHOP_DOWNLOADS_TITLE = "Let�lt�si r�szleg";
    var $_PHPSHOP_DOWNLOADS_START = "Let�lt�s megkezd�se";
    var $_PHPSHOP_DOWNLOADS_INFO = "K�rem, adja meg az e-mailban kapott Download-ID-t �s kattintson  a Let�lt�s megkezd�se gombra.";
    var $_PHPSHOP_DOWNLOADS_ERR_EXP = "Sajn�lom, de a let�lt�sre rendelkez�sre �ll� id� lej�rt!";
    var $_PHPSHOP_DOWNLOADS_ERR_MAX = "Sajn�lom, de el�rte a maxim�lis let�lt�s-sz�mot!";
    var $_PHPSHOP_DOWNLOADS_ERR_INV = "�rv�nytelen  Download-ID!";
    var $_PHPSHOP_DOWNLOADS_ERR_SEND = "Nem tudom elk�ldeni az �zenetet az al�bbi c�mre: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG = "�zenet elk�ldve az al�bbi c�mre: ";
    var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = "Let�lt�si inf�k";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = "a megrendelt f�jl(ok) let�lthet�k";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = "K�rj�k, adja meg az al�bbi  Download-ID-t a Let�lt�si r�szlegen:  ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = "f�jlonk�nt a maxim�lis let�lt�si sz�m: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = "T�ldsd le legfeljebb {expire} nap alatt az els� let�lt�st�l sz�m�tva";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = "K�rd�sek? Probl�m�k?";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = "A let�lt�si inf�k sorbarendez�se az al�bbi krit�rium szerint "; // e.g. Download-Info by "Storename"
    var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = "let�lthet� term�k?"; 
    
    var $_PHPSHOP_PAYPAL_THANKYOU = "K�sz�nj�k a kifizet�st. A tranzakci� sikeres volt. A PayPal e-mailben fogja �rtes�teni a tranzakci� r�szleteir�l. Most folytathatja, vagy bejelentkezhet a <a href=http://www.paypal.com>www.paypal.com</a> -ra hogy megtekintse a tranzakci� r�szleteit.";
    var $_PHPSHOP_PAYPAL_ERROR = "A tranzakci� feldolgoz�sa k�zben hiba t�rt�nt. A megrendel�se st�tus�t nem lehet friss�teni.";
    
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = "K�sz�nj�k, hogy n�lunk v�s�rolt. Az �n megrendel�si inform�ci�i:";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = "K�sz�nj�k a t�mogat�s�t.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = "K�rd�sek? Probl�m�k?";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = "A k�vetkez� megrendel�st k�ldte be:";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = "Tekintse meg a megrendel�s�t a k�vetkez� �l�kapocsra kattintva:";
    
    var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = "Negat�v mennyis�g nem megengedett.";
    var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = "K�rem, v�lasszon ki egy lehets�ges mennyis�get ebb�l a  t�telb�l.";
    
    var $_PHPSHOP_CART_STOCK_1 = "A kiv�lasztott mennyis�g t�ll�pi a k�szletet. ";
    var $_PHPSHOP_CART_STOCK_2 = "Pillanatnyilag \$product_in_stock t�tel el�rhet�. ";
    var $_PHPSHOP_CART_STOCK_3 = "Kattintson ide, hogy felker�lj�n a v�r�list�ra.";
    var $_PHPSHOP_CART_SELECT_ITEM = "K�rem, v�lasszon a speci�lis t�telekb�l a r�szletes le�r� oldalon!";
    
    var $_PHPSHOP_REGISTRATION_FORM_NONE = "semmi";
    var $_PHPSHOP_REGISTRATION_FORM_MR = "Mr.";
    var $_PHPSHOP_REGISTRATION_FORM_MRS = "Mrs.";
    var $_PHPSHOP_REGISTRATION_FORM_DR = "Dr.";
    var $_PHPSHOP_REGISTRATION_FORM_PROF = "Prof.";
    var $_PHPSHOP_DEFAULT = "Alap�rtelmezett";
    
  /*#####################################################
    MODULE AFFILIATE
  #######################################################*/
    var $_PHPSHOP_AFFILIATE_MOD   = "Csatlakozott c�gek adminisztr�ci�ja";
    
    // Affiliate List
    var $_PHPSHOP_AFFILIATE_LIST_MNU		= "Csatlakozott c�gek list�z�sa";
    var $_PHPSHOP_AFFILIATE_LIST_LBL		= "Csatlakozott c�gek list�ja";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME	= "Csatlakozott c�g neve";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = "Akt�v";
    var $_PHPSHOP_AFFILIATE_LIST_RATE		= "Kamatl�b";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = "Havi �sszeg";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION ="Havi jutal�k";
    var $_PHPSHOP_AFFILIATE_LIST_ORDERS = "Megrendel�sek list�z�sa";
    
    // Affiliate Email
    var $_PHPSHOP_AFFILIATE_EMAIL_MNU		= "E-mail k�ld�se a csatlakozott c�geknek";
    var $_PHPSHOP_AFFILIATE_EMAIL_LBL		= "E-mail k�ld�se a csatlakozott c�geknek";
    var $_PHPSHOP_AFFILIATE_EMAIL_WHO	= "Kinek akar e-mailt k�ldeni (* = mind)?";
    var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT		= "E-mail c�me";
    var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = "T�rgy";
    var $_PHPSHOP_AFFILIATE_EMAIL_STATS	 = "Kurrens statisztik�k is befoglalva";
    
    // Affiliate Form
    var $_PHPSHOP_AFFILIATE_FORM_RATE		= "Jutal�k (sz�zal�k)";
    var $_PHPSHOP_AFFILIATE_FORM_ACTIVE		= "Akt�v?";
    
    var $_PHPSHOP_DELIVERY_TIME = "V�rhat� lesz�ll�t�si hat�rid�";
    var $_PHPSHOP_DELIVERY_INFORMATION = "K�zbes�t�si inform�ci�k";
    var $_PHPSHOP_MORE_CATEGORIES = "t�bb kateg�ria";
    var $_PHPSHOP_AVAILABILITY = "Hozz�f�rhet�s�g";
    var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = "Ez a term�k pillanatnyilag nem hozz�f�rhet�.";
    var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = "Ism�t hozz�f�rhet� lesz: ";
    
    var $_PHPSHOP_STATISTIC_SUMMARY = "�sszefoglal�";
    var $_PHPSHOP_STATISTIC_STATISTICS = "Statisztik�k";
    var $_PHPSHOP_STATISTIC_CUSTOMERS = "V�s�rl�k";
    var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = "akt�v term�kek";
    var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = "inakt�v term�kek";
    var $_PHPSHOP_STATISTIC_SUM = "�sszeg";
    var $_PHPSHOP_STATISTIC_NEW_ORDERS = "�j megrendel�sek";
    var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = "�j v�s�rl�k";
    
    
	//Waiting list : file /administrator/components/com_phpshop/html/shop.waiting_list.php
	var $_PHPSHOP_WAITING_LIST_MESSAGE = "K�rj�k, adja meg al�bb az e-mail c�m�t, hogy �rtes�teni tudjuk, amint a keresett term�k ism�t k�szleten lesz. Az e-mail c�m�t nem adjuk ki, nem adjuk el, nem haszn�ljuk m�s c�lra, mint kiz�r�lag arra, hogy �rtes�ts�k �nt,  amint a keresett term�k ism�t k�szleten lesz.<br /><br />K�sz�nj�k!";
	var $_PHPSHOP_WAITING_LIST_THANKS = "K�sz�nj�k, hogy v�r r�nk! <br />R�gt�n �rtes�tj�k, amint �ssze�ll a naprak�sz lelt�r.";
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = "�rtes�ts!";
	
	//Checkout : file /administrator/components/com_phpshop/html/checkout.thankyou.php
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = "Nyomtat�si n�zet";
  
  /**************************Admin.show_cfg.php in apparition order ;-)**************************************/
	
	/* PAGE 1 */
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = "K�rem v�lassza ki valamelyiket a kett� k�z�l: Authorize.net vagy CyberCash";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = " Be�ll�t�si f�jl st�tusa:";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = "�rhat�";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = "nem �rhat�";
	
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = "�ltal�nos";
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = "El�r�si �tvonal �s URL";
	var $_PHPSHOP_ADMIN_CFG_SITE = "Honlap";
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = "Sz�ll�t�s";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = "Kijelentkez�s";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = "Let�lt�sek";
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = "Kifizet�sek";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = "Csak katal�gusk�nt haszn�l";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = "Ha kijel�li, letilt minden bev�s�rl�-kos�r funkci�t.";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = "�rakat mutat";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = "Ad�val egy�tt mutassa az �rakat?";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = "�ll�tsa be, hogy a v�s�rl� az �rakat ad�val egy�tt vagy ad� n�lk�l l�ssa.";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = "Jel�lje be, hogy mutassa az �rakat. Ha katal�gusk�nt haszn�lj�k, egyesek nem szeretik az �rakat megjelen�teni a honlapon.";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = "Virtu�lis ad�";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = "Ez adja meg, hogy a 0 s�ly�k�nt szerepl� t�telekre sz�m�tson-e sz�ll�t�si k�lts�get vagy nem. M�dos�tsa a  ps_checkout.php-&gt;calc_order_taxable()-t, hogy szem�lyre szabja ezt.";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = "Ad�z�si elj�r�s:";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = "A sz�ll�t�si c�m alapj�n";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = "Az elad� c�me alapj�n";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = "Ez adja meg, hogy melyik ad�kulcs lesz figyelembe v�ve az ad�sz�m�t�sn�l:<br />
                                                <ul><li>az �zlettulajdonos sz�khelye szerint �rv�nyes �llami/ter�leti ad�kulcs</li><br/>
                                                <li>vagy a v�s�rl� otthona szerint �rv�nyes �llami/ter�leti ad�kulcs.</li></ul>";
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = "Megengedi t�bb ad�kulcs haszn�lat�t?";
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = "Jel�lje be, ha �nek olyan term�kei is vannak, amelyekhez k�l�nb�z� ad�kulcsok tartoznak (pl. 9% a k�nyvek, 19% az egy�b term�kek sz�m�ra)";
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = "A kifizet�si kedvezm�nyeket vegye-e figyelembe az ad�k �s a sz�ll�t�si illet�kek kisz�m�t�sa el�tt?";
  var $_PHPSHOP_ADMIN_CFG_REVIEW = "Megengedi a Fogyaszt�i szemle/�rt�kel�s rendszer haszn�lat�t";
  var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = "Ha enged�lyezett, �n megengedi a v�s�rl�knak, hogy <strong>�rt�kelj�k a term�keket</strong> �s <strong>szeml�t �rjanak</strong> r�luk. <br />
                                                                                �gy a v�s�rl�k le�rhatj�k a  tapasztalataikat a term�kekkel kapcsolatban m�s v�s�rl�k sz�m�ra.<br />";
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = "�ll�tsd be a jelz�bitet (flag), hogy az �rengedm�nyt/kedvezm�nyt az ad�k �s sz�ll�t�si illet�kek kisz�m�t�sa el�tt vagy ut�n vonjam le az �rb�l.";
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = "A v�s�rl�k megadhatj�k banksz�mla adataikat?";
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = "Jel�lje be, ha a v�s�rl�k megadhatj�k banksz�mla adataikat a regisztr�l�si folyamat alatt.";

	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = "A v�s�rl�k kiv�laszthatnak egy bizonyos �llamot/r�gi�t/megy�t?";
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = "Jel�lje be, ha a v�s�rl�k megadhatj�k orsz�g/r�gi�/megye azonos�t� adataikat a regisztr�l�si folyamat alatt.";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = "El kell fogadni a <strong>Szolg�ltat�si felt�telek</strong>et?";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = "Jel�lje be, ha azt akarja, hogy a v�s�rl�knak k�telez� m�don el kell fogadniuk a  szolg�ltat�si felt�teleket a regisztr�l�s el�tt.";
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = "Ellen�rzi a k�szletet?";
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = "Be�ll�tja, hogy ellen�rizze-e a k�szleten l�v� term�kek sz�m�t, amikor a v�s�rl� beteszi a term�ket a bev�s�rl�kos�rba. Ha be van �ll�tva, nem engedi meg a v�s�rl�nak, hogy egy term�kb�l t�bb darabot tegyen a bev�s�rl�-kosar�ba, mint ah�ny t�nylegesen k�szleten van.";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = "Megengedi a <strong>Csatlakozott c�g</strong> programot?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = "Megengedi a csatlakozott c�gek k�vet�s�t a web�ruh�z honlapj�n. Engedje meg, ha az adminisztr�tori panelben m�r hozz�adott csatlakozott c�geket.";
	
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = "Megrendel�-lev�l form�tum:";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = "Sz�veges e-mail";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = "HTML e-mail";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = "Meghat�rozza, hogyan legyen a megrendel�s visszaigazol�si e-mail be�ll�tva:<br />
                                                                                        <ul><li>mint egy sima text e-mail</li>
                                                                                        <li>vagy mint egy html e-mail k�pekkel.</li></ul>";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = "Megengedi-e a honlapr�l t�rt�n� adminisztr�ci�t azon felhaszn�l�k sz�m�ra, akiknek nincs joguk az Adminisztr�ci�s panel el�r�s�re?";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = "Ezzel a be�ll�t�ssal megengedi a honlapr�l t�rt�n� adminisztr�ci�t azon felhaszn�l�k sz�m�ra, akiknek nincs joguk az Adminisztr�ci�s panel k�zvetlen el�r�s�re, de phpShop adminisztr�ci�s jogaik vannak (pl. Regisztr�lt/Szerkeszt� besorol�suk van).";
	
	/* PAGE 2 */
	var $_PHPSHOP_ADMIN_CFG_URL = "URL";
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = "A honlap URL-je. Rendszerint azonos a Mambo URL-vel (a v�g�n a lez�r� /-el!)";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = "SECUREURL";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = "A honlapja biztons�gos el�r�si URL-je. (https - a v�g�n a lez�r� /-el!)";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = "COMPONENTURL";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = "A mambo-phpShop �sszetev�k URL-je. (a v�g�n a lez�r� /-el!)";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = "IMAGEURL";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = "A mambo-phpShop �sszetev�k k�p-k�nyvt�ra URL-je.  (a v�g�n a lez�r� /-el!)";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = "ADMINPATH";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = "A mambo-phpShop �sszetev�k k�nyvt�r el�r�si �tvonala.";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = "CLASSPATH";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = "A phpShop Class k�nyvt�r el�r�si �tvonala.";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = "PAGEPATH";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = "A phpShop html k�nyvt�r el�r�si �tvonala.";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = "IMAGEPATH";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = "A phpShop shop_image k�nyvt�r el�r�si �tvonala.";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = "HOMEPAGE";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = "Ez az alap�rtelmezett oldal.";	
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = "ERRORPAGE";
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = "Ez az alap�rtelmezett hiba�zenet-oldal.";	
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = "DEBUGPAGE";
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = "Ez az alap�rtelmezett hiba(�s nyom-)k�vet�-oldal.";
	var $_PHPSHOP_ADMIN_CFG_DEBUG = "DEBUG ?";
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = "DEBUG ? Bekapcsolja a nyomk�vet�si kimenetet. Az opci� megjelen�ti a nyomk�vet�si/hibaelh�r�t�si inform�ci�kat (DEBUGPAGE) minden megjelen�tett oldal alj�n. Nagyon hasznos a fejleszt�s sor�n, ugyanis megmutatja a bev�s�rl�kos�r tartalm�t, az �rlap-mez�ket, stb.";


/* PAGE 3 */

	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = "FLYPAGE";
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = "Ez az alap�rtelmezett term�k-le�r� oldal.";
  var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = "Kateg�ria st�luslap";
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = "Meghat�rozza egy bizonyos kateg�ri�ba tartoz� term�kek megjelen�t�s�re haszn�land� alap�rtelmezett kateg�ria st�luslapot.<br />
                                                                                                      �n l�trehozhat �j st�luslapokat a megl�v�k testreszab�s�val <br />
                                                                                                      (amelyek ebben a k�nyvt�rban tal�lhat�k <strong>COMPONENTPATH/html/templates/</strong> �s a nev�k \"browse_\"-vel kezd�dik)";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = "Az egy sorban mutatott term�kek alap�rtelmezett sz�ma";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = "Megadja a soronk�nt megjelen�tend� term�kek sz�m�t. <br />
                                                                                                      P�ld�ul: Ha �n 4-et �r be, a Kateg�ria st�luslap 4 term�ket mutat soronk�nt";
  
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = "\"nem k�p\" k�p";
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = "Ez a k�p lesz mutatva amikor nem �ll rendelkez�sre k�pe a term�kr�l.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = "SEARCH ROWS";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = "Megadja az egy tal�lati oldalon megjelen�tend� sorok sz�m�t, amikor a keres�si eredm�nyeket lista form�ban vannak megjelen�tve.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = "SEARCH COLOR 1";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = "El��rja a p�ratlan sorok sz�n�t az eredm�ny list�ban.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = "SEARCH COLOR 2";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = "El��rja a p�ros sorok sz�n�t az eredm�ny list�ban.";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = "MAXIMUM ROWS";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = "Be�ll�tja a megrendel�s kiv�laszt�s list�ban megjelen�tend� sorok sz�m�t.";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = "Mutassam a l�bl�cben a \"powered by mambo-phpShop\"  �zenetet?";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = "A l�bl�cben megjelen�ti a \"powered by mambo-phpShop\"  �zenetet.";
	
	
	/* PAGE 4 */
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = "V�lassza ki az �zletet's shipping method";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = "Standard Sz�ll�t�si modul  egy�nileg konfigur�lt sz�ll�tm�nyoz�kkal �s d�jt�telekkel. <strong>AJ�NLOTT!</strong>";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = "  	Zon�lis sz�ll�t�s Orsz�g-modul 1.0 Verzi�<br />
                                                                                                            Ha ezzel a modullal kapcsolatban t�bb inform�ci�ra van sz�ks�ge, k�rem l�togasson el a <a href=\"http://ZephWare.com\">http://ZephWare.com</a> c�mre<br />
                                                                                                            a r�szletek�rt l�pjen kapcsolatba a <a href=\"mailto:zephware@devcompany.com\">ZephWare.com</a>-mal<br /> Jel�lje be, hogy lehet�v� tegye a zon�lis sz�ll�t�s modul haszn�lat�t";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = "UPS Tools sz�ll�t�si k�lts�gvet�s";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = "UPS el�r�si k�d";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = "Az �n UPS el�r�si k�dja";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = "UPS felhaszn�l� id";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = "A felhaszn�l� ID amit az UPS-t�l kapott";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = "UPS jelsz�";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = "Az UPS �gyf�l jelszava";
	  
  var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = "InterShipper modul. Csak akkor jel�lje be ha van InterShipper.com sz�ml�ja";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = "Letiltja a Sz�ll�t�si elj�r�s kiv�laszt�s�t. V�lassza ki, ha a v�s�rl�i let�lthet� term�keket v�s�rolnak, amelyeket nem kell post�zni.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = "InterShipper jelsz�";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = "Az intershipper �gyf�l jelszava.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = "InterShipper e-mail";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = "Az �n e-mail c�me az intershipper �gyf�l-sz�ml�hoz.";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = "ENCODE KEY";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = "Az adatb�zisban r�gz�tett adatok titkos�t�s�ra haszn�lt kulcs. Azt jelenti, hogy ezt a f�jlt mindenkor v�deni kell a megtekint�st�l.";
	
	
	/* PAGE 5 */
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = "Megengedi a Kassza elj�r�s k�psor ('checkout-bar') megjelen�t�s�t";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = "Jel�lje be, ha �hajtja a kassza elj�r�s k�psor ('checkout-bar') megjelen�t�s�t a megrendel�s v�gleges�t�se (kassza m�veletsor) alatt ( 1 - 2 - 3 - 4 grafika).";
	
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = "V�lassza ki az �zlete kassza-elj�r�s�t";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = "<strong>Standard:</strong><br/>
               1. Sz�ll�t�si c�m k�r�s<br />
              2. Sz�ll�t�si m�dszer k�r�s<br />
              3. Kifizet�si elj�r�s k�r�s<br />
              4. Teljes megrendel�s";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = "<strong>2. t�pus� elj�r�s:</strong><br/>
               1. Sz�ll�t�si c�m k�r�s<br />
              2. Kifizet�si elj�r�s k�r�s<br />
              3. Teljes megrendel�s";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = "<strong>3. t�pus� elj�r�s:</strong><br/>
               1. Sz�ll�t�si m�dszer k�r�s<br />
              2. Kifizet�si elj�r�s k�r�s<br />
              3. Teljes megrendel�s";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = "<strong>4. t�pus� elj�r�s:</strong><br/>
               1. Kifizet�si elj�r�s k�r�s<br />
              2. Teljes megrendel�s";
	
	
	
	/* PAGE 6 */
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = "Lehet�v� teszi a let�lt�st";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = "Jel�lje be, ha enged�lyezni akarja a let�lt�seket. Csak ha let�lthet� javakat �rul.";
	
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = "Az a megrendel�s-st�tus, amely megengedi a let�lt�st";
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = "V�lassza ki azt a megrendel�s st�tust, amely eset�ben a vev� e-mail �rtes�t�st kap.";
	
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = "Az a megrendel�s-st�tus, amely megtiltja a let�lt�st";
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = "Be�ll�tja azt a megrendel�s st�tust, amelyn�l a let�lt�s a vev� sz�m�ra meg van tiltva.";
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = "DOWNLOADROOT";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = "A let�lthet� f�jlok t�nyleges el�r�si �tvonala. (a v�g�n a lez�r� /-el!)<br>
        <span class=\"message\">A saj�t �s az �zlet biztons�ga �rdek�ben: Ha van r� lehet�s�ge, k�rem haszn�ljon egy, a WEBROOT k�nyvt�ron k�v�li k�nyvt�rt</span>";
	
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = "Let�lt�s maximuma";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = "Be�ll�tja az egy let�lt�si ID-vel enged�lyezett let�lt�sek sz�m�t, (egy megrendel�s sz�m�ra)";
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = "Let�lt�si hat�rid�";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = "Be�ll�tja a let�lt�si id�intervallumot <strong>m�sodpercekben</strong> amelyben  a let�lt�s enged�lyezve van a vev� sz�m�ra. Az id�intervallum az els� let�lt�ssel kezd�dik! Amikor a megengedett id� lej�r, a let�lt�si ID le lesz tiltva.<br />Megjegyz�s : 86400s=24h.";
	
	
	
	
	/* PAGE 7 */
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = "Lehet�v� teszi az IPN kifizet�seket a PayPal-on kereszt�l?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = "Jel�lje be, ha a PayMate kifizet�si rendszer haszn�lat�t akarja enged�lyezni.";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = "PayPal kifizet�si e-mail:";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = "A v�llalati e-mail c�m  PayPal kifizet�s sz�m�ra. Ugyancsak haszn�lva mint receiver_email.";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = "Megrendel�s st�tusa a sikeres  tranzakci�k sz�m�ra";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = "V�lassza ki azt a a Megrendel�s st�tust, amely a t�nyleges megrendel�shez lesz rendeklve, ha a PayPal IPN sikeres volt. Ha let�lt�ssel el�rhet� term�keket �rul: v�lassza ki azt a st�tust amely lehet�v� teszi a let�lt�st (ami ut�n a vev� azonnali e-mail �rtes�t�st kap a let�lt�s enged�lyez�s�r�l).";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = "Megrendel�s st�tusa az elhib�zott tranzakci�k sz�m�ra";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = "V�lasszon ki egy Megrendel�s st�tust az elhib�zott PayPal tranzakci�k sz�m�ra.";
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = "Lehet�v� teszi a PayMate kifizet�seket?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = "Jel�lje be, ha az Ausztr�liai PayMate kifizet�si rendszer haszn�lat�t akarja enged�lyezni.";
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = "PayMate felhaszn�l�n�v:";
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = "Az �n PayMate felhaszn�l�i azonos�t�ja.";
	
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = "Lehet�v� teszi a Authorize.net haszn�lat�t?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = "Jel�lje be, ha az Authorize.net szolg�ltat�sait akarod haszn�lni a phpShop-ban.";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = "Teszt m�d?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = "V�lassza a 'Yes'-t tesztel�si c�lokra, 'No'-t a rendszer �lesben val� haszn�lat�hoz.";
	var $_PHPSHOP_ADMIN_CFG_YES = "Igen";
	var $_PHPSHOP_ADMIN_CFG_NO = "Nem";
	
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = "Authorize.net bejelentkez�si ID";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = "Ez az �n Authorize.net bejelentkez�si ID-je";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = "Authorize.net tranzakci� kulcs";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = "Ez az �n Authorize.net tranzakci�s kulcsa";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = "Hiteles�t�s t�pus";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = "Ez egy Authorize.Net hiteles�t�s t�pus.";
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = "Lehet�v� teszi a CyberCash haszn�lat�t?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = "Jel�lje be, ha a CyberCash szolg�ltat�sait akarja haszn�lni a phpShop-ban.";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = "CyberCash MERCHANT";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = "CC_MERCHANT a CyberCash keresked� ID";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = "CyberCash keresked�i kulcs";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = "CyberCash keresked�i kulcs a CyberCash �ltal megadott MERCHANT k�d";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = "CyberCash PAYMENT URL";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = "A CyberCash PAYMENT URL az az URL, amit a Cybercash adott meg a biztons�gos kifizet�s c�lj�ra.";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = "CyberCash AUTH TYPE";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = "CyberCash AUTH TYPE a Cybercase sz�m�ra megadand� Cybercash hiteles�t�s t�pus";
	

    /** Advanced Search feature ***/
    var $_PHPSHOP_ADVANCED_SEARCH  ="Halad� keres�s";
    var $_PHPSHOP_SEARCH_ALL_CATEGORIES = "Keres valamennyi kateg�ri�ban";
    var $_PHPSHOP_SEARCH_ALL_PRODINFO = "Keres valamennyi term�k inform�ci�ban";
    var $_PHPSHOP_SEARCH_PRODNAME = "Csak term�k neve";
    var $_PHPSHOP_SEARCH_MANU_VENDOR = "Csak gy�rt�/elad�";
    var $_PHPSHOP_SEARCH_DESCRIPTION = "Csak term�k le�r�s";
    var $_PHPSHOP_SEARCH_AND = "�s";
    var $_PHPSHOP_SEARCH_NOT = "nem";
    var $_PHPSHOP_SEARCH_TEXT1 = "A els� lehull�-lista megengedi egy bizonyos kateg�ria fastrukt�ra kiv�laszt�s�t, hogy behat�rolja a keres�s�t. A m�sodik lehull�-lista megengedi a keres�s behat�rol�s�t egy bizonyos term�k-inform�ci�  (pl. N�v) szerint. Miut�n �n kiv�lasztotta ezeket (vagy valamennyit alap�rtelmezett �rt�ken hagyta), �rja be a keres�si kulcssz�t. ";
    var $_PHPSHOP_SEARCH_TEXT2 = " �n tov�bb finom�thatja a keres�st tov�bbi kulcssz� �s az AND vagy NOT logikai oper�torok haszn�lat�val. Az AND haszn�lata azt jelenti, hogy mindk�t sz�nak benne kell lennie a term�k tulajdons�gainak le�r�s�ban ahhoz, hogy a tal�lati list�n megjelenjen. A NOT haszn�lata azt jelenti, hogy az els� sz�nak benne kell lennie a term�k tulajdons�gainak le�r�s�ban, a m�sodiknak meg nem ahhoz, hogy a tal�lati list�n megjelenjen.";
    var $_PHPSHOP_ORDERBY = "Sorbarendez�si elv";
    
    /*** Review feature ***/
    var $_PHPSHOP_CUSTOMER_RATING  = "�tlagos v�s�rl�i �rt�kel�s";
    var $_PHPSHOP_TOTAL_VOTES = "�sszes szavazat";
    var $_PHPSHOP_CAST_VOTE = "K�rj�k, szavazzon";
    var $_PHPSHOP_RATE_BUTTON = "�rt�k";
    var $_PHPSHOP_RATE_NOM = "�rt�kel�s";
    var $_PHPSHOP_REVIEWS = "Fogyaszt�i szemle";
    var $_PHPSHOP_NO_REVIEWS = "M�g senki sem �rt szeml�t err�l a term�kr�l.";
    var $_PHPSHOP_WRITE_FIRST_REVIEW = "Legyen az els�, aki szeml�t �r err�l a term�kr�l!";
    var $_PHPSHOP_REVIEW_LOGIN = "K�rem, jelentkezzen be �s �rjon egy szeml�t.";
    var $_PHPSHOP_REVIEW_ERR_RATE = "K�rem �rt�kelje a term�ket, hogy kieg�sz�tse a szeml�j�t!";
    var $_PHPSHOP_REVIEW_ERR_COMMENT1 = "K�rj�k, �rjon m�g valamit a szeml�be. Legal�bb 100 karakter a megengedett als� hat�r!";
    var $_PHPSHOP_REVIEW_ERR_COMMENT2 = "K�rj�k, r�vid�tse le a szeml�t. Maxim�lisan 2000 karakter terjedelem van megengedve.";
    var $_PHPSHOP_WRITE_REVIEW = "�rjon egy szeml�t err�l a term�kr�l!";
    var $_PHPSHOP_REVIEW_RATE = "Els� l�p�sben �rt�kelje a term�ket. K�rem, v�lasszon egy �rt�ket 5 (lehet� legjobb) �s 0 (nagyon gyenge) k�z�tt.";
    var $_PHPSHOP_REVIEW_COMMENT = "K�rj�k, �rjon egy (r�vid) szeml�t. (legal�bb 100, legt�bb 2000 karakter)";
    var $_PHPSHOP_REVIEW_COUNT = "Be�rt karaktersz�m: ";
    var $_PHPSHOP_REVIEW_SUBMIT = "Szemle bek�ld�se";
    var $_PHPSHOP_REVIEW_ALREADYDONE = "�n m�r �rt szeml�t err�l a term�kr�l. K�sz�nj�k.";
    var $_PHPSHOP_REVIEW_THANKYOU = "K�sz�nj�k a szeml�t.";
    var $_PHPSHOP_COMMENT= "Megjegyz�s";
    
    var $_PHPSHOP_CREDITCARD_FORM_LBL = "Hitelk�rtya t�pusokat hozz�ad/szerkeszt";
    var $_PHPSHOP_CREDITCARD_NAME = "Hitelk�rtya neve";
    var $_PHPSHOP_CREDITCARD_CODE = "Hitelk�rtya - r�vid k�d";
    var $_PHPSHOP_CREDITCARD_TYPE = "Hitelk�rtya t�pus";
    
    var $_PHPSHOP_CREDITCARD_LIST_LBL = "Hitelk�rtya lista";
    var $_PHPSHOP_UDATE_ADDRESS = "C�met friss�t";
    var $_PHPSHOP_CONTINUE_SHOPPING = "A bev�s�rl�s folytat�sa";
    
    var $_PHPSHOP_THANKYOU_SUCCESS = "A megrendel�se sikeresen meg�rkezett!";
    var $_PHPSHOP_ORDER_LINK = "K�vesse ezt az �l�kapcsot ha meg akarja tekinteni a r�szletes megrendel�st.";
    
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = "the Status of your Order No. {order_id} has been changed.";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = "New Status is:";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = "To view the Order Details, please follow this link (or copy it into your browser):";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = "Order Status Change: Your Order {order_id}";
    var $_PHPSHOP_ORDER_LIST_NOTIFY = "Notify Customer?";
    var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = "Please change the Order Status first!";
    
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = "Price Discount on default Shopper Group (in %)";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = "A positive amount X means: If the Product has no Price assigned to THIS Shopper Group, the default Price is decreased by X %. A negative amount has the opposite effect";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = "Product Discount";
    var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = "Product Discount List";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = "Add/Edit Product Discount";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = "Discount amount";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = "Enter the discount amount";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = "Discount Type";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = "Percentage";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = "Total";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = "Shall the amount be a percentage or a total?";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = "Startdate of discount";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = "Specifies the day when the discount begins";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = "End date of discount";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = "Specifies the day when the discount ends";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = "You can use the Product Discount Form to add discounts!";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = "You Save";
    
    var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = "View Full-Size Image";
    
/*********************
Currency Display Style 
***********************/
    var $_PHPSHOP_CURRENCY_DISPLAY = "Currency Display Style";
    var $_PHPSHOP_CURRENCY_SYMBOL = "Currency symbol";
    var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = "You can also use HTML Entities here (e.g. &amp;euro;,&amp;pound;,&amp;yen;,...)";
    var $_PHPSHOP_CURRENCY_DECIMALS = "Decimals";
    var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = "Number of displayed decimals (can be 0)<br><b>Performs rounding if value has different number of decimals</b>";
    var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = "Decimal symbol";
    var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = "Character used as decimal symbol";
    var $_PHPSHOP_CURRENCY_THOUSANDS = "Thousands separator";
    var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = "Character used to separate thousands (can be empty)";
    var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = "Positive format";
    var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = "Display format used to display positive values.<br>(Symb stands for currency symbol)";
    var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = "Negative format";
    var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = "Display format used to display negative values.<br>(Symb stands for currency symbol)";
    
    var $_PHPSHOP_OTHER_LISTS = "Other Product Lists";
/**************
Multiple Images 
****************/
    var $_PHPSHOP_MORE_IMAGES = "View More Images";
    var $_PHPSHOP_AVAILABLE_IMAGES = "Available Images for";
    var $_PHPSHOP_BACK_TO_DETAILS = "Back to Product Details";
    
    /* FILEMANAGER */
    var $_PHPSHOP_FILEMANAGER = "FileManager";
    var $_PHPSHOP_FILEMANAGER_LIST = "FileManager::Product List";
    var $_PHPSHOP_FILEMANAGER_ADD = "Add Image/File";
    var $_PHPSHOP_FILEMANAGER_IMAGES = "Assigned Images";
    var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = "Is Downloadable?";
    var $_PHPSHOP_FILEMANAGER_FILES = "Assigned Files (Datasheets,...)";
    var $_PHPSHOP_FILEMANAGER_PUBLISHED = "Published?";
    
    /* FILE LIST */
    var $_PHPSHOP_FILES_LIST = "FileManager::Image/File List for";
    var $_PHPSHOP_FILES_LIST_FILENAME = "Filename";
    var $_PHPSHOP_FILES_LIST_FILETITLE = "File Title";
    var $_PHPSHOP_FILES_LIST_FILETYPE = "File Type";
    var $_PHPSHOP_FILES_LIST_EDITFILE = "Edit File Entry";
    var $_PHPSHOP_FILES_LIST_FULL_IMG = "Full Image";
    var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = "Thumbnail Image";
    
    
    /* FILE FORM */
    var $_PHPSHOP_FILES_FORM = "Upload a File for";
    var $_PHPSHOP_FILES_FORM_CURRENT_FILE = "Current File";
    var $_PHPSHOP_FILES_FORM_FILE = "File";
    var $_PHPSHOP_FILES_FORM_IMAGE = "Image";
    var $_PHPSHOP_FILES_FORM_UPLOAD_TO = "Upload to";
    var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = "default Product Image Path";
    var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = "Specify the file location";
    var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = "Download Path (e.g. for selling downloadables!)";
    var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = "Auto-Create Thumbnail?";
    var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = "File is published?";
    var $_PHPSHOP_FILES_FORM_FILE_TITLE = "File Title (what the Customer sees)";
    var $_PHPSHOP_FILES_FORM_FILE_DESC = "File Description";
    var $_PHPSHOP_FILES_FORM_FILE_URL = "File URL (optional)";
    
    /* FILE & IMAGE PROCESSING */
    var $_PHPSHOP_FILES_PATH_ERROR = "Please provide a valid path!";
    var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = "The Thumbnail Image has been successfully created!";
    var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = "Could NOT create Thumbnail Image!";
    var $_PHPSHOP_FILES_UPLOAD_FAILURE = "File/Image Upload Error";
    
    var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = "Could not delete the Full Image File.";
    var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = "Full Image successfully deleted.";
    var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = "Could not delete the Thumbnail Image File (maybe didnt exist): ";
    var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = "Thumbnail Image successfully deleted.";
    var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = "Could not delete the File.";
    var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = "File successfully deleted.";
    
    var $_PHPSHOP_FILES_NOT_FOUND = "Sorry, but the requested file wasn't found!";
    var $_PHPSHOP_IMAGE_NOT_FOUND = "Image not found!";

    /*#####################
    MODULE COUPON
    #####################*/
    
    var $_PHPSHOP_COUPON_MOD = "Coupon";
    var $_PHPSHOP_COUPONS = "Coupons";
    var $_PHPSHOP_COUPON_LIST = "Coupon List";
    var $_PHPSHOP_COUPON_ALREADY_REDEEMED = "Coupon has already been redeemed.";
    var $_PHPSHOP_COUPON_REDEEMED = "Coupon redeemed! Thank you.";
    var $_PHPSHOP_COUPON_ENTER_HERE = "If you have a coupon code, please enter it below:";
    var $_PHPSHOP_COUPON_SUBMIT_BUTTON = "Submit";
    var $_PHPSHOP_COUPON_CODE_EXISTS = "That coupon code already exists. Please try again.";
    var $_PHPSHOP_COUPON_EDIT_HEADER = "Update Coupon";
    var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = "Click a coupon code to edit it, or to delete a coupon code, select it and click Delete:";
    var $_PHPSHOP_COUPON_CODE_HEADER = "Code";
    var $_PHPSHOP_COUPON_PERCENT_TOTAL = "Percent or Total";
    var $_PHPSHOP_COUPON_TYPE = "Coupon Type";
    var $_PHPSHOP_COUPON_TYPE_TOOLTIP = "A Gift Coupon is deleted after it was used for discounting an order. A permanent coupon can be used as often as the customer wants to.";
    var $_PHPSHOP_COUPON_TYPE_GIFT = "Gift Coupon";    
    var $_PHPSHOP_COUPON_TYPE_PERMANENT = "Permanent Coupon";    
    var $_PHPSHOP_COUPON_VALUE_HEADER = "Value";
    var $_PHPSHOP_COUPON_DELETE_BUTTON = "Delete Code";
    var $_PHPSHOP_COUPON_CONFIRM_DELETE = "Are you sure you want to delete this coupon code?";
    var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = "Please complete all fields.";
    var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = "Coupon value must be a number.";
    var $_PHPSHOP_COUPON_NEW_HEADER = "New Coupon";
    var $_PHPSHOP_COUPON_COUPON_HEADER = "Coupon Code";
    var $_PHPSHOP_COUPON_PERCENT = "Percent";
    var $_PHPSHOP_COUPON_TOTAL = "Total";
    var $_PHPSHOP_COUPON_VALUE = "Value";
    var $_PHPSHOP_COUPON_CODE_SAVED = "Coupon code saved.";
    var $_PHPSHOP_COUPON_SAVE_BUTTON = "Save Coupon";
    var $_PHPSHOP_COUPON_DISCOUNT = "Coupon Discount";
    var $_PHPSHOP_COUPON_CODE_INVALID = "Coupon code not found. Please try again.";
    var $_PHPSHOP_COUPONS_ENABLE = "Enable Coupon Usage";
    var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = "If you enable the Coupon Usage, you allow customers to fill in Coupon Numbers to gain discounts on their purchase.";
    
    /* Free Shipping */
    var $_PHPSHOP_FREE_SHIPPING = "Free Shipping";
    var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = "Shipping is free on this Order!";
    var $_PHPSHOP_FREE_SHIPPING_AMOUNT = "Minimum Amount for Free Shipping";
    var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = "The amount (INCLUDING TAX!) which is the Minimum for Free Shipping 
                                                (example: <strong>50</strong> means Free Shipping when the customer checks out
                                                with \$50 (including tax) or more.";
    var $_PHPSHOP_YOUR_STORE = "Your Store";
    var $_PHPSHOP_CONTROL_PANEL = "Control Panel";
    
    /* Configuration Additions */
    var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = "PDF - Button";
    var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = "Show or Hide the PDF - Button in the Shop";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = "Must agree to Terms of Service on EVERY ORDER?";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = "Check if you want a shopper to agree to your terms of service on EVERY ORDER (before placing the order).";

    // We need this for eCheck.net Payments
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = "Bank Account Type";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = "Checking";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = "Business Checking";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = "Saving";
    
    var $_PHPSHOP_PAYMENT_AN_RECURRING = "Recurring Billings?";
    var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = "Define wether you want recurring billings.";
    
    var $_PHPSHOP_INTERNAL_ERROR = "Internal Error processing the Request to";
    var $_PHPSHOP_PAYMENT_ERROR = "Failure in Processing the Payment";
    var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = "Payment successfully processed";
    
    /* UPS Shipping Module */
    var $_PHPSHOP_UPS_RESPONSE_ERROR = "UPS was not able to process the Shipping Rate Request.";
    var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = "Guaranteed Day(s) To Delivery";
    var $_PHPSHOP_UPS_PICKUP_METHOD = "UPS Pickup Method";
    var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = "How do you give packages to UPS?";
    var $_PHPSHOP_UPS_PACKAGE_TYPE = "UPS Packaging?";
    var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = "Select the default Type of Packaging.";
    var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = "Residential Delivery?";
    var $_PHPSHOP_UPS_RESIDENTIAL = "Residential (RES)";
    var $_PHPSHOP_UPS_COMMERCIAL    = "Commercial Delivery (COM)";
    var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = "Quote for Residential (RES) or Commercial Delivery (COM).";
    var $_PHPSHOP_UPS_HANDLING_FEE = "Handling Fee";
    var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = "Your Handling fee for this shipping method.";
    var $_PHPSHOP_UPS_TAX_CLASS = "Tax Class";
    var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = "Use the following tax class on the shipping fee.";
    
    var $_PHPSHOP_ERROR_CODE = "Error Code";
    var $_PHPSHOP_ERROR_DESC = "Error Description";
    
    var $_PHPSHOP_CHANGE_TRANSACTION_KEY = "Show / Change the Transaction Key";
    var $_PHPSHOP_CHANGE_PASSKEY_FORM = "Show/Change the Password/Transaction Key";
    var $_PHPSHOP_TYPE_PASSWORD = "Please type in your User Password";
    var $_PHPSHOP_CURRENT_PASSWORD = "Current Password";
    var $_PHPSHOP_CURRENT_TRANSACTION_KEY = "Current Transaction Key";
    var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = "The Transaction key was successfully changed.";
    
    var $_PHPSHOP_PAYMENT_CVV2 = "Request/Capture Credit Card Code Value (CVV2/CVC2/CID)";
    var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = "Check for a valid CVV2/CVC2/CID value (three- or four-digit number on the back of a credit card, on the Front of American Express Cards)?";
    var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = "Please type in the three- or four-digit number on the back of your credit card (On the Front of American Express Cards)";
    var $_PHPSHOP_CUSTOMER_CVV2_ERROR = "You need to enter your Credit Card Code to proceed.";
    
    var $_PHPSHOP_PRODUCT_FORM_FILENAME = "EITHER Fill in a Filename";
    var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = "NOTE: Here you can fill in a FileName. <strong>If you fill in a Filename here, no Files will be uploaded!!! You will have to upload it via FTP manually!</strong>.";
    var $_PHPSHOP_PRODUCT_FORM_UPLOAD = "OR Upload new File";
    var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = "You can upload a local file. This file will be the Product you sell. An existing file will be replaced.";
    
    var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = "Fill in any text here that will be displayed to the customer on the product flypage.<br />e.g.: 24h, 48 hours, 3 - 5 days, On Order.....";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = "OR select an Image to be displayed on the Details Page (flypage).<br />The images reside in the directory <i>/components/com_phpshop/shop_image/availability</i><br />";
    var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = "Attribute List";
    var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = "<h4>Examples for the Attribute List Format:</h4>
        <span class=\"sectionname\"><strong>Size</strong>,XL[+1.99],M,S[-2.99]<strong>;Colour</strong>,Red,Green,Yellow,ExpensiveColor[=24.00]<strong>;AndSoOn</strong>,..,..</span>
        <h4>Inline price adjustments for using the Advanced Attributes modification:</h4>
        <span class=\"sectionname\">
        <strong>&#43;</strong> == Add this amount to the configured price.<br />
        <strong>&#45;</strong> == Subtract this amount from the configured price.<br />
        <strong>&#61;</strong> == Set the product's price to this amount.
      </span>";
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = "Custom Attribute List";
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = "<h4>Examples for the Custom attribute List Format:</h4>
        <span class=\"sectionname\"><strong>Name;Extras;</strong>...</span>";
        
    var $_PHPSHOP_MULTISELECT = "<i>T�bbes kiv�laszt�s a STRG- (CTRL-)gomb �s az eg�r seg�ts�g�vel</i>";
        
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = "Enable eProcessingNetwork.com payment?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = "Check to use eProcessingNetwork.com with phpShop.";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = "Test mode ?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = "Select 'Yes' while testing. Select 'No' for enabling live transactions.";
	
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = "eProcessingNetwork.com Login ID";
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = "This is your eProcessingNetwork.com Login ID";
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = "eProcessingNetwork.com Transaction Key";
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = "This is your eProcessingNetwork.com Transaction Key";
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = "Authentication Type";
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = "This is the eProcessingNetwork.com authentication type.";

    var $_PHPSHOP_RELATED_PRODUCTS = "Related Products";
    var $_PHPSHOP_RELATED_PRODUCTS_TIP = "You can build up Product Relations using this List. Just select one or more products here and then they are <strong>Related Products</strong>.";
    
    var $_PHPSHOP_RELATED_PRODUCTS_HEADING = "You may also be interested in this/these product(s)";
        
    var $_PHPSHOP_IMAGE_ACTION = "Image Action";
    var $_PHPSHOP_NONE = "none";
    
    var $_PHPSHOP_ORDER_HISTORY = "Order History";
    var $_PHPSHOP_ORDER_HISTORY_COMMENT = "Comment";
    var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = "Comments on your Order";
    var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = "Include this comment?";
    var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = "Date Added";
    var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = "Customer Notified?";
    var $_PHPSHOP_ORDER_STATUS_CHANGE = "Order Status Change";
    
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
    var $_PHPSHOP_PARAMETERS_LBL = "Parameters";
    var $_PHPSHOP_PRODUCT_TYPE_LBL = "Product Type";
    var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = "Product Type List";
    var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = "Add/Edit Product Type";
    // Product - Product Product Type list
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = "Product Type List for";
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = "List Product Types";
    // Product - Product Product Type form
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = "Add Product Type for";
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = "Add Product Type";
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = "Product Type";
    // Product - Product Type form
    var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = "Product Type Name";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = "Product Type Description";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = "Parameters";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = "Product Type Information";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = "Publish?";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = "Product Type Browse Page";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = "Product Type Flypage";
    // Product - Product Type Parameter list
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = "Parameters of Product Type";
    // Product - Product Type Parameter form
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = "Parameter Information";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = "Product Type not found!";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = "Parameter Name";
    VAR $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = "This name will be column name of table. Must be unicate and without space.<BR>For example: main_material";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = "Parameter Label";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = "Parameter Description";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = "Parameter Type";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = "Integer";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = "Text";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = "Short Text";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = "Float";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = "Char";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = "Date & Time";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = "Date";
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = "YYYY-MM-DD";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = "Time";
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = "HH:MM:SS";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = "Break Line";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = "Multiple Values";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = "Possible Values";
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = "Show Possible Values as Multiple select?";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = "<strong>If Possible Values are set, Parameter can have only this values. Example for Possible Values:</strong><BR><span class=\"sectionname\">Steel;Wood;Plastic;...</span>";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = "Default Value";
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = "For Parameter Default Value use this format:<ul><li>Date: YYYY-MM-DD</li><li>Time: HH:MM:SS</li><li>Date & Time: YYYY-MM-DD HH:MM:SS</li></ul>";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = "Unit";
    
	/************************* FrontEnd ***************************/
	/** shop.parameter_search.php */
	var $_PHPSHOP_PARAMETER_SEARCH = "Advanced Search according to Parameters";
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = "Parameters Search";
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = "Do you will find products according to technical parametrs?<BR>You can used any prepared form:";
// 	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = "There's no result matching your query.";
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = "I am sorry. There is no category for search.";
	/** shop.parameter_search_form.php */
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = "I am sorry. There is no published Product Type with this name.";
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = "Is Like";
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = "Is NOT Like";
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = "Full-Text Search";
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = "All Selected";
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = "Any Selected";
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = "Reset Form";	
	/** shop.browse.php */
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = "Search in Category";
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = "Change Parameters";
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = "Descending order";
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = "Ascending order";
	/** shop.product.detail */
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = "Parameters of Category";
	/** Changed Product Type - End*/
    
    // State form and list
    var $_PHPSHOP_STATE_LIST_MNU = "List State";
    var $_PHPSHOP_STATE_LIST_LBL = "State List for: ";
    var $_PHPSHOP_STATE_LIST_ADD = "Add/Update a State";
    var $_PHPSHOP_STATE_LIST_NAME = "State Name";
    var $_PHPSHOP_STATE_LIST_3_CODE = "State Code (3)";
    var $_PHPSHOP_STATE_LIST_2_CODE = "State Code (2)";
        
    // Opposite of Discount!
    var $_PHPSHOP_FEE = "Fee";
    
    var $_PHPSHOP_PRODUCT_CLONE = "Clone Product";
	
    var $_PHPSHOP_CSV_SETTINGS = "Settings";
    var $_PHPSHOP_CSV_DELIMITER = "Delimiter";
    var $_PHPSHOP_CSV_ENCLOSURE = "Field Enclosure Char";
    var $_PHPSHOP_CSV_UPLOAD_FILE = "Upload a CSV File";
    var $_PHPSHOP_CSV_SUBMIT_FILE = "Submit CSV File";
    var $_PHPSHOP_CSV_FROM_DIRECTORY = "Load from directory";
    var $_PHPSHOP_CSV_FROM_SERVER = "Load CSV File from Server";
    var $_PHPSHOP_CSV_EXPORT_TO_FILE = "Export to CSV File";
    var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = "Choose Field Ordering Type";
    var $_PHPSHOP_CSV_DEFAULT_ORDERING = "Default Ordering";
    var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = "My customized Ordering";
    var $_PHPSHOP_CSV_SUBMIT_EXPORT = "Export all Products to CSV File";
    var $_PHPSHOP_CSV_CONFIGURATION_HEADER = "CSV Import / Export Configuration";
    var $_PHPSHOP_CSV_SAVE_CHANGES = "Save Changes";
    var $_PHPSHOP_CSV_FIELD_NAME = "Field Name";
    var $_PHPSHOP_CSV_DEFAULT_VALUE = "default Value";
    var $_PHPSHOP_CSV_FIELD_ORDERING = "Field Ordering";
    var $_PHPSHOP_CSV_FIELD_REQUIRED = "Field Required?";
    var $_PHPSHOP_CSV_IMPORT_EXPORT = "Import/Export";
    var $_PHPSHOP_CSV_NEW_FIELD = "Add a new Field";
    var $_PHPSHOP_CSV_DOCUMENTATION = "Documentation";
    
    var $_PHPSHOP_PRODUCT_NOT_FOUND = "Sorry, but the Product you've requested wasn't found!";
    var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = "Show Products that are out of Stock";
    var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = "When enabled, Products that are currently not in Stock are displayed. Otherwise such Products are hidden.";
	
}
/** @global phpShopLanguage $PHPSHOP_LANG */
$PHPSHOP_LANG =& new phpShopLanguage();
?> 
