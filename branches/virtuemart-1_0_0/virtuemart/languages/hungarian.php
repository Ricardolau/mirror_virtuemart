<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
*
* @version $Id: admin.martlanguages.php 466 2006-11-07 20:40:22 +0100 (Di, 07 Nov 2006) soeren_nb $
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
	var $_PHPSHOP_MENU = 'Men�';
	var $_PHPSHOP_CATEGORY = 'Kateg�ria';
	var $_PHPSHOP_CATEGORIES = 'Kateg�ri�k';
	var $_PHPSHOP_SELECT_CATEGORY = 'Kiv�laszt egy kateg�ri�t:';
	var $_PHPSHOP_ADMIN = 'Adminisztr�ci�';
	var $_PHPSHOP_PRODUCT = 'Term�k';
	var $_PHPSHOP_LIST = 'List�z�s';
	var $_PHPSHOP_ALL = 'Mind';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Az �sszes term�k list�z�sa';
	var $_PHPSHOP_VIEW = 'N�zet';
	var $_PHPSHOP_SHOW = 'Megjelen�t�s';
	var $_PHPSHOP_ADD = 'Hozz�ad�s';
	var $_PHPSHOP_UPDATE = 'Friss�t�s';
	var $_PHPSHOP_DELETE = 'T�rl�s';
	var $_PHPSHOP_SELECT = '- V�lasszon';
	var $_PHPSHOP_SUBMIT = 'K�ld�s';
	var $_PHPSHOP_RANDOM = 'V�letlenszer� term�k';
	var $_PHPSHOP_LATEST = 'Leg�jabb term�kek';
	var $_PHPSHOP_HOME_TITLE = 'F�lap';
	var $_PHPSHOP_CART_TITLE = 'Kos�r';
	var $_PHPSHOP_CHECKOUT_TITLE = 'P�nzt�r';
	var $_PHPSHOP_LOGIN_TITLE = 'Bel�p�s';
	var $_PHPSHOP_LOGOUT_TITLE = 'Kil�p�s';
	var $_PHPSHOP_BROWSE_TITLE = 'Tall�z�s';
	var $_PHPSHOP_SEARCH_TITLE = 'Keresd';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Fi�k karbantart�sa';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Navig�l�s';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'R�szleg';
	var $_PHPSHOP_INFO = 'Inform�ci�';
	var $_PHPSHOP_BROWSE_LBL = 'Tall�z�s';
	var $_PHPSHOP_PRODUCTS_LBL = 'term�k';
	var $_PHPSHOP_PRODUCT_LBL = 'term�k';
	var $_PHPSHOP_SEARCH_LBL = 'Keres';
	var $_PHPSHOP_FLYPAGE_LBL = 'Term�kadatok';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Term�kkeres�';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Term�k neve';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Term�k kateg�ria';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Le�r�s';
	var $_PHPSHOP_CART_SHOW = 'Ugr�s a bev�s�rl�kos�rhoz';
	var $_PHPSHOP_CART_ADD_TO = 'Kos�rba rakom!';
	var $_PHPSHOP_CART_NAME = 'N�v';
	var $_PHPSHOP_CART_SKU = 'Cikksz.';
	var $_PHPSHOP_CART_PRICE = '�r';
	var $_PHPSHOP_CART_QUANTITY = 'Mennyis�g';
	var $_PHPSHOP_CART_SUBTOTAL = 'R�sz�sszeg';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Hozz�ad�s: �j';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Sz�ll�t�si c�m';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'A keres�se nem eredm�nyezett tal�latot.<br />';
	var $_PHPSHOP_PRICE_LABEL = '�r: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Hozz�ad a bev�s�rl�kos�rhoz';
	var $_PHPSHOP_NO_CUSTOMER = '�n m�g nem nyilv�ntartott �gyf�l. K�rj�k, adja meg sz�ml�z�si adatait.';
	var $_PHPSHOP_DELETE_MSG = 'Biztosan t�r�lni akarja ezt a bejegyz�st?';
	var $_PHPSHOP_THANKYOU = 'K�sz�nj�k a megrendel�st!';
	var $_PHPSHOP_NOT_SHIPPED = 'M�g nincs lesz�ll�tva';
	var $_PHPSHOP_EMAIL_SENDTO = 'A meger�s�t� e-mailt elk�ldt�k erre c�mre';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Sajnos nincs olyan MOS - felhaszn�l�, akit �n hozz�adhatna a com_virtuemart felhaszn�l�-list�hoz';
	var $_PHPSHOP_ERROR = 'HIBA';
	var $_PHPSHOP_MOD_NOT_REG = 'A modul nincs regisztr�lva.';
	var $_PHPSHOP_MOD_ISNO_REG = 'nem �rv�nyes phpShop modul.';
	var $_PHPSHOP_MOD_NO_AUTH = '�nnek nincs joga a k�rt modul haszn�lat�hoz.';
	var $_PHPSHOP_PAGE_404_1 = 'Az oldal nem l�tezik';
	var $_PHPSHOP_PAGE_404_2 = 'Az adott f�jln�v nem l�tezik. Nem tal�lhat� az al�bbi f�jl:';
	var $_PHPSHOP_PAGE_403 = 'El�gtelen hozz�f�r�si jogok';
	var $_PHPSHOP_FUNC_NO_EXEC = '�nnek nincs joga v�grehajtani ';
	var $_PHPSHOP_FUNC_NOT_REG = 'A funkci� nincs regisztr�lva';
	var $_PHPSHOP_FUNC_ISNO_REG = ' nem �rv�nyes MOS_com_phpShop funkci�.';
	var $_PHPSHOP_ADMIN_MOD = 'Admin';
	var $_PHPSHOP_USER_LIST_MNU = 'Felhaszn�l� list�z�s';
	var $_PHPSHOP_USER_LIST_LBL = 'Felhaszn�l�k';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Felhaszn�l�n�v';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Teljes n�v';
	var $_PHPSHOP_USER_LIST_GROUP = 'Csoport';
	var $_PHPSHOP_USER_FORM_MNU = 'Felhaszn�l� hozz�ad�sa';
	var $_PHPSHOP_USER_FORM_LBL = 'Felhaszn�l�i adatok hozz�ad�sa/friss�t�se';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Sz�ml�z�si c�m';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Sz�ll�t�si c�mek';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'C�m hozz�ad�sa';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'Nincsenek sz�ll�t�si c�mek.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'C�m becen�v';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Vezet�kn�v';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Ut�n�v';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Csal�dn�v';
	var $_PHPSHOP_USER_FORM_TITLE = 'Megsz�l�t�s';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Felhaszn�l�n�v';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Jelsz�';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Jelsz� meger�s�t�se';
	var $_PHPSHOP_USER_FORM_PERMS = 'Enged�lyek';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = '�gyf�lsz�m / azonos�t�';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'C�g';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'C�m 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'C�m 2';
	var $_PHPSHOP_USER_FORM_CITY = 'V�ros';
	var $_PHPSHOP_USER_FORM_STATE = '�llam/Tartom�ny/Megye';
	var $_PHPSHOP_USER_FORM_ZIP = 'Ir�ny�t�sz�m';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Orsz�g';
	var $_PHPSHOP_USER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Mobiltelefon';
	var $_PHPSHOP_USER_FORM_FAX = 'Fax';
	var $_PHPSHOP_USER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Modulok list�z�sa';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Modulok';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Modul neve';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Modul jogosults�gok';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Funkci�k';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'List�z�si sorrend';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Modul hozz�ad�sa';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Modul tulajdons�gai';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Modul cimke (a f�men�ben)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Modul neve';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Modul jogosults�gok';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Modul fejl�c';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Modul l�bl�c';
	var $_PHPSHOP_MODULE_FORM_MENU = 'L�that� a modul az Admin men�ben?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Megjelen�t�si sorrend';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'A modul le�r�sa';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'Nyelvk�d';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Nyelvi f�jl';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Funkci�k list�z�sa';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Funkci�k';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Funkci� neve';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Oszt�lyn�v';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Oszt�ly met�dus';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Jogosults�gok';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Funkci� hozz�ad�sa';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Funkci� tulajdons�gai';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Funkci� neve';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Oszt�lyn�v';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Oszt�ly met�dus';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Funkci� jogosults�gok';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Funkci� le�r�sa';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'P�nznemek list�z�sa';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'P�nznemek';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'P�nznem hozz�ad�sa';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'P�nznem neve';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'P�nznem k�dja';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Orsz�gok list�z�sa';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Orsz�gok';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Orsz�g hozz�ad�sa';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Orsz�g neve';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Orsz�gk�d (3 bet�s)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Orsz�gk�d (2 bet�s)';
	var $_PHPSHOP_STATE_LIST_MNU = '�llamok list�z�sa';
	var $_PHPSHOP_STATE_LIST_LBL = '�llamok/Tartom�nyok/Megy�k: ';
	var $_PHPSHOP_STATE_LIST_ADD = '�llam/Megye hozz�ad�sa/m�dos�t�sa';
	var $_PHPSHOP_STATE_LIST_NAME = '�llam/megye neve';
	var $_PHPSHOP_STATE_LIST_3_CODE = '�llam/megye k�dja (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = '�llam/megye k�dja (2)';
	var $_PHPSHOP_ADDRESS = 'C�m';
	var $_PHPSHOP_CONTINUE = 'Folytat�s';
	var $_PHPSHOP_EMPTY_CART = 'Jelenleg �res a bev�s�rl�kosara.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Az InterShipper kiszolg�l� pingel�se';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'InterShipper kiszolg�l� pingel�s ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'Az InterShipper pingel�se sikertelen';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'Az InterShipper pingel�se siker�lt';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Hordoz�';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'V�lasz<br />id�';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'mp.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Sz�ll�t�si m�dok list�z�sa';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Akt�v sz�ll�t�si m�dok';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Sz�ll�t�si m�dok';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Akt�v';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Kezel�si k�lts�g';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = '�tfut�si id�';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = '�ltal�nyd�j';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'sz�zal�k';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'napok';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'T�ls�lyos k�ldem�ny';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Sz�ll�t�si m�dok be�ll�t�sa';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Sz�ll�t�si m�d hozz�ad�sa';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Sz�ll�t�si m�d be�ll�t�sa';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Friss�t�s';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Sz�ll�t�si m�d';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Aktiv�l�s';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Kezel�si k�lts�g';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = '�tfut�si id�';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = '�ltal�nyd�j';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'sz�zal�k';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'napok';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'T�ls�lyos k�ldem�ny';
	var $_PHPSHOP_ORDER_MOD = 'Rendel�sek';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Rendel�s j�v�hagy�sa';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Rendel�s visszavon�sa';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Rendel�s nyomtat�sa';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Rendel�s t�rl�se';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Rendel�sek list�z�sa';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Rendel�sek';
	var $_PHPSHOP_ORDER_LIST_ID = 'Rendel�si sz�m';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Rendel�s d�tuma';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'M�dos�tva';
	var $_PHPSHOP_ORDER_LIST_STATUS = '�llapot';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'R�sz�sszeg';
	var $_PHPSHOP_ORDER_ITEM = 'Megrendelt term�kek';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Megrendel�s';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Rendel�si sz�m';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Rendel�s d�tuma';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Rendel�si �llapot';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'V�s�rl� adatai';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Sz�ml�z�si c�m';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Sz�ll�t�si adatok';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Sz�ml�z�si c�m';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Sz�ll�t�si c�m';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'N�v';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'C�g';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'C�m 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'C�m 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'V�ros';
	var $_PHPSHOP_ORDER_PRINT_STATE = '�llam/Megye';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'Ir�ny�t�sz�m';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Orsz�g';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Telefon';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Fax';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'E-mail';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Megrendel�s t�telek';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Mennyis�g';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Mennyis�g';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'Cikksz.';
	var $_PHPSHOP_ORDER_PRINT_PRICE = '�r';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = '�sszesen';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'R�sz�sszeg';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = '�fa �sszesen';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Sz�ll�t�si �s kezel�si k�lts�g';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Sz�ll�t�si ad�';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Fizet�si m�d';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Fi�k neve';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Sz�mlasz�m';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Lej�rati id�';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Kifizet�si napl�';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Sz�ll�t�si inform�ci�';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Fizet�si inform�ci�';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Hordoz�';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Sz�ll�t�si m�d';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Sz�ll�t�s d�tuma';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Sz�ll�t�s �ra';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Rendel�si �llapott�pusok list�z�sa';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Rendel�si �llapott�pus hozz�ad�sa';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Rendel�si �llapot k�dja';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Rendel�si �llapot neve';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Rendel�si �llapot';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Rndel�si �llapot k�dja';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Rndel�si �llapot neve';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'List�z�si sorrend';
	var $_PHPSHOP_PRODUCT_MOD = 'Term�kek';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Jelenlegi term�k';
	var $_PHPSHOP_CURRENT_ITEM = 'Jelenlegi t�tel';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Rakt�rk�szlet';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Rakt�rk�szlet megtekint�se';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = '�r';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Menny.';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'S�ly';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Term�kek list�z�sa';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Term�kek';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Term�k neve';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'Cikksz.';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'K�zz�t�ve';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Term�kkeres�s';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'm�dos�tva';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'm�dos�tott �rral';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = '�r n�lk�l';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'Ut�na';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'El�tte';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Term�k hozz�ad�sa';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Term�k szerkeszt�se';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Term�k r�plap el�n�zete az �zletben';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'T�tel hozz�ad�sa';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = '�j t�tel hozz�ad�sa';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = '�j term�k';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Term�k friss�t�se';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Term�kinform�ci�';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Term�k �llapota';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Term�k m�retei �s s�lya';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Term�kk�pek';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = '�j t�tel';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'T�tel friss�t�se';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'T�tel inform�ci�k';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'T�tel st�tusa';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'T�tel m�retei �s s�lya';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'T�tel k�pek';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Visszat�r�s a sz�l�term�khez';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = '�rja be az �j k�p �tvonal�t a jelenlegi k�p friss�t�s�hez.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'A jelenlegi k�p t�rl�se.';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Term�k t�telek';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'T�tel attrib�tumok';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Biztosan t�r�lni akarja ezt a term�ket,\\n �s a hozz� kapcsol�d� t�teleket?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Biztosan t�r�lni akarja ezt a t�telt?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Elad�';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Gy�rt�';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'Cikksz.';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'N�v';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'Webc�m';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Kateg�ria';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Fogyaszt�i �r (brutt�)';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Fogyaszt�i �r (nett�)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Term�kismertet�';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'R�vid ismertet�';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'Rakt�ron';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'Megrendelve';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Mikort�l kaphat�';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'Akci�s term�k';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = '�rengedm�ny t�pusa';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'K�zz�t�ve?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Hossz�s�g';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Sz�less�g';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Magass�g';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'M�rt�kegys�g';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'S�ly';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'M�rt�kegys�g';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Miniat�r';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Nagy k�p';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'font';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'h�velyk';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'M�rt�kegys�g';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'darab';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Units in Packaging';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Here you can fill in a number unit in packaging. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Units in Box';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Here you can fill in a number unit in box. (max. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Term�k hozz�ad�s eredm�nye';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Term�kfriss�t�s eredm�nye';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'T�tel hozz�ad�s eredm�nye';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'T�tel friss�t�s eredm�nye';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'CSV felt�lt�s haszn�lata';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Term�kcsoportok';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Kateg�ri�k list�z�sa';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Kateg�riafa';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Kateg�ria hozz�ad�sa';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Kateg�ria tulajdons�gai';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Kateg�ria neve';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Sz�l�kateg�ria';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Kateg�ria le�r�sa';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'K�zz�t�ve?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Kateg�ria r�plap';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Attrib�tumok list�z�sa';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Attrib�tumok';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Attrib�tum neve';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'List�z�si sorrend';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Attrib�tum hozz�ad�sa';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Attrib�tum �rlap';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = '�j term�kattrib�tum:';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Term�kattrib�tum friss�t�se';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = '�j t�telattrib�tum:';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'T�telattrib�tum friss�t�se';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Attrib�tum neve';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'List�z�si sorrend';
	var $_PHPSHOP_PRICE_LIST_MNU = '�rlista';
	var $_PHPSHOP_PRICE_LIST_LBL = '�rlista';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = '�ra';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Csoport neve';
	var $_PHPSHOP_PRICE_LIST_PRICE = '�r';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'P�nznem';
	var $_PHPSHOP_PRICE_FORM_MNU = '�r hozz�ad�sa';
	var $_PHPSHOP_PRICE_FORM_LBL = '�rinform�ci�';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'A term�k �j �ra';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'A term�k �r�nak friss�t�se';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = '�j t�tel�r';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'T�tel �r�nak friss�t�se';
	var $_PHPSHOP_PRICE_FORM_PRICE = '�r';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'P�nznem';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'V�s�rl�csoport';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Jelent�sek';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Egy�ni term�klist�k';
	var $_PHPSHOP_RB_SALE_TITLE = 'Elad�si jelent�sek';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Elad�si adatok �ttekint�se';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'V�lassza ki az id�tartamot';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Havi';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Heti';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Napi';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'E havi';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'M�lt havi';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'Utols� 60 nap';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'Utols� 90 nap';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Mett�l';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Meddig';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'A megadott id�tartam mutat�sa';
	var $_PHPSHOP_RB_REPORT_FOR = 'Jelent�s ';
	var $_PHPSHOP_RB_DATE = 'D�tum';
	var $_PHPSHOP_RB_ORDERS = 'Rendel�sek';
	var $_PHPSHOP_RB_TOTAL_ITEMS = '�ssz. eladott t�telek';
	var $_PHPSHOP_RB_REVENUE = 'J�vedelem';
	var $_PHPSHOP_RB_PRODLIST = 'Term�k list�z�s';
	var $_PHPSHOP_SHOP_MOD = '�zlet';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'K�p';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = '�r';
	var $_PHPSHOP_ORDER_STATUS_P = 'F�gg�';
	var $_PHPSHOP_ORDER_STATUS_C = 'Visszaigazolva';
	var $_PHPSHOP_ORDER_STATUS_X = 'Visszavonva';
	var $_PHPSHOP_ORDER_BUTTON = 'Rendel�s';
	var $_PHPSHOP_SHOPPER_MOD = 'V�s�rl�k';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'V�s�rl�k list�z�sa';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'V�s�rl�k list�ja';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Felhaszn�l�n�v';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Teljes n�v';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Csoport';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'V�s�rl� hozz�ad�sa';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'V�s�rl� adatai';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Sz�ml�z�si c�m';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Inform�ci�';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Sz�ll�t�si c�m';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'C�met hozz�ad';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'C�m �ln�v';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Felhaszn�l�n�v';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Vezet�kn�v';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Ut�n�v';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Csal�dn�v';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Megsz�l�t�s';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'V�s�rl�n�v';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Jelsz�';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Jelsz� meger�s�t�se';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'V�s�rl�csoport';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'C�g';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'C�m 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'C�m 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'V�ros';
	var $_PHPSHOP_SHOPPER_FORM_STATE = '�llam/Tartom�ny/Megye';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'Ir�ny�t�sz�m';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Orsz�g';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Mobiltelefon';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Fax';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Igen';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'Nem';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'V�s�rl�csoportok list�z�sa';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'V�s�rl�csoportok';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Csoportn�v';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Csoport le�r�sa';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'V�s�rl�csoport �rlapja';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'V�s�rl�csoport hozz�ad�sa';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Csoport neve';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Csoport le�r�sa';
	var $_PHPSHOP_STORE_MOD = '�zlet';
	var $_PHPSHOP_STORE_FORM_MNU = '�zlet szerkeszt�se';
	var $_PHPSHOP_STORE_FORM_LBL = '�zlet adatai';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Kapcsolattart�';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Nagy k�p';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'K�p felt�lt�se';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = '�zlet neve';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = '�zlettulajdonos c�gneve';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'C�m 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'C�m 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'V�ros';
	var $_PHPSHOP_STORE_FORM_STATE = '�llam/Tartom�ny/Megye';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Orsz�g';
	var $_PHPSHOP_STORE_FORM_ZIP = 'Ir�ny�t�sz�m';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'P�nznem';
	var $_PHPSHOP_STORE_FORM_CATEGORY = '�zlet kateg�ri�ja';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Ut�n�v';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Vezet�kn�v';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Csal�dn�v';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Megsz�l�t�s';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Telefon 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Telefon 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Fax';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'K�p �tvonala';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Le�r�s';
	var $_PHPSHOP_PAYMENT = 'Fizet�s';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Fizet�si m�dok';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Fizet�si m�dok';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'N�v';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'K�d';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = '�rengedm�ny';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'V�s�rl�csoport';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Fizet�si m�d t�pusa';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Fizet�si m�d hozz�ad�sa';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Fizet�si m�d �rlap';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Fizet�si m�d neve';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'V�s�rl�csoport';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = '�rengedm�ny';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'K�d';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'List�z�si sorrend';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Fizet�si m�d t�pusa';
	var $_PHPSHOP_TAX_MOD = 'Ad�z�s';
	var $_PHPSHOP_TAX_RATE = 'Ad�kulcsok';
	var $_PHPSHOP_TAX_LIST_MNU = 'Ad�kulcsok list�z�sa';
	var $_PHPSHOP_TAX_LIST_LBL = 'Ad�kulcsok list�ja';
	var $_PHPSHOP_TAX_LIST_STATE = 'Ad�z�si �llam vagy ter�let';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Ad�z�si orsz�g';
	var $_PHPSHOP_TAX_LIST_RATE = 'Ad�kulcs';
	var $_PHPSHOP_TAX_FORM_MNU = 'Ad�kulcs hozz�ad�sa';
	var $_PHPSHOP_TAX_FORM_LBL = 'Ad�z�si adatok hozz�ad�sa';
	var $_PHPSHOP_TAX_FORM_STATE = 'Ad�z�si �llam vagy ter�let';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Ad�z�si orsz�g';
	var $_PHPSHOP_TAX_FORM_RATE = 'Ad�kulcs (16% eset�n => 0.16-ot �rjon be)';
	var $_PHPSHOP_VENDOR_MOD = 'Elad�k';
	var $_PHPSHOP_VENDOR_ADMIN = 'Elad�k';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Elad�k list�z�sa';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Elad�k';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Elad� neve';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Admin';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Elad� hozz�ad�sa';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Inform�ci� hozz�ad�sa';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Elad� tulajdons�gai';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'El�rhet�s�gi inform�ci�';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Nagy k�p';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'K�p felt�lt�se';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Elad� �zlet neve';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Elad� c�g neve';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'C�m 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'C�m 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'V�ros';
	var $_PHPSHOP_VENDOR_FORM_STATE = '�llam/Tartom�ny/Megye';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Orsz�g';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'Ir�ny�t�sz�m';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'P�nznem';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Elad�-kateg�ria';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Ut�n�v';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Vezet�kn�v';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Csal�dn�v';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Megsz�l�t�s';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Telefon 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Telefon 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Fax';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'K�p �tvonala';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Le�r�s';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Elad�-kateg�ri�k list�z�sa';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Elad�-kateg�ri�k';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Kateg�ria neve';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Kateg�ria le�r�sa';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Elad�k';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Elad�-kateg�ria hozz�ad�sa';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Elad�-kateg�ria �rlap';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Kateg�ria tulajdons�gai';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Kateg�ria neve';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Kateg�ria le�r�sa';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Gy�rt�k';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Gy�rt�k';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Gy�rt�k list�z�sa';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Gy�rt�k';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Gy�rt� neve';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Admin';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'Gy�rt� hozz�ad�sa';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Inform�ci� hozz�ad�sa';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Inform�ci�k a gy�rt�r�l';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Gy�rt� neve';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Gy�rt�-kateg�ria';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'Gy�rt� honlapj�nak c�me';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Le�r�s';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Gy�rt�-kateg�ri�k list�z�sa';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Gy�rt�-kateg�ri�k';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Kateg�ria neve';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Kateg�ria le�r�s';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Gy�rt�k';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Gy�rt�-kateg�ria hozz�ad�sa';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Gy�rt�-kateg�ria �rlap';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Kateg�ria inform�ci�';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Kateg�ria neve';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Kateg�ria le�r�s';
	var $_PHPSHOP_HELP_MOD = 'S�g�';
	var $_PHPSHOP_CART_ACTION = 'Friss�t�s';
	var $_PHPSHOP_CART_UPDATE = 'Friss�ti a kos�r tartalm�t';
	var $_PHPSHOP_CART_DELETE = 'Kiveszi a term�ket a kos�rb�l';
	var $_PHPSHOP_PRODUCT_PRICETAG = '�r';
	var $_PHPSHOP_PRODUCT_CALL = 'H�vjon az �r�rt';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'El�z�';
	var $_PHPSHOP_PRODUCT_NEXT = 'TOV�BB';
	var $_PHPSHOP_CART_TAX = 'Ad�';
	var $_PHPSHOP_CART_SHIPPING = 'Sz�ll�t�si �s kezel�si k�lts�g';
	var $_PHPSHOP_CART_TOTAL = '�sszesen';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Tov�bb';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'REGISZTR�L';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Sz�ml�z�si inform�ci�';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'C�g';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'N�v';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'C�m';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'E-mail';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Sz�ll�t�si inform�ci�';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'C�g';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'N�v';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'C�m';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Fizet�si inform�ci�';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'N�v a hitelk�rty�n';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Fizet�si m�d';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Hitelk�rtya sz�m';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Lej�rati d�tum';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Rendel�s felad�sa';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'k�rt inform�ci� amikor hitelk�rty�s kifizet�s van kiv�lasztva';
	var $_PHPSHOP_ZONE_MOD = 'Zon�lis sz�ll�t�s';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Z�n�k list�z�sa';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Z�na hozz�ad�sa';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Hozz�rendel�s z�n�khoz';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Orsz�g';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Jelenlegi z�na';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Rendelje hozz� egy z�n�hoz';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Friss�t';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Hozz�rendel�s z�n�khoz';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Z�na n�v';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Z�na le�r�s';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Z�na k�lts�g t�telenk�nt';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Z�na k�lts�ghat�r';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Z�na lista';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Z�na n�v';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Z�na le�r�s';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Z�na k�lts�g t�telenk�nt';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Z�na k�lts�ghat�r';
	var $_PHPSHOP_LOGIN_FIRST = 'K�rj�k, jelentkezzen be vagy regisztr�lja mag�t (haszn�lja a bejelentkez�si modult!).<br>K�sz�nj�k.';
	var $_PHPSHOP_STORE_FORM_TOS = 'Haszn�lati felt�telek';
	var $_PHPSHOP_AGREE_TO_TOS = 'K�rj�k, fogadja el a haszn�lati felt�teleinket!';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Elfogadom a haszn�lati felt�teleket.';
	var $_PHPSHOP_LEAVE_BLANK = '(hagyja �resen, ha nincs <br />hozz� egy�ni php-f�jl!)';
	var $_PHPSHOP_RETURN_LOGIN = 'Visszat�r� v�s�rl�k: K�rj�k, jelentkezzen be';
	var $_PHPSHOP_NEW_CUSTOMER = '�j? K�rj�k, adja meg a sz�ml�z�si adatait';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'V�s�rl�i fi�k:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Rendel�si adatok';
	var $_PHPSHOP_ACC_UPD_BILL = 'Itt m�dos�thatja a sz�ml�z�si c�m�t.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Itt adhatja hozz�/tarthatja karban a sz�ll�t�si c�meket.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Fi�k adatai';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Sz�ll�t�si c�m';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Nincs megjelen�thet� megrendel�s';
	var $_PHPSHOP_ACC_BILL_DEF = '- Alap�rtelmezett (azonos a sz�ml�z�si c�mmel)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Itt adhatja hozz� a rendeltet�si helyeket az �n fi�kj�hoz. K�rj�k, tal�ljon ki az al�bb megadand� rendeltet�si hely sz�m�ra alkalmas becenevet vagy k�dot.';
	var $_PHPSHOP_CONFIG = 'Be�ll�t�sok';
	var $_PHPSHOP_USERS = 'Felhaszn�l�k';
	var $_PHPSHOP_IS_CC_PAYMENT = 'Hitelk�rty�s fizet�s?';
	var $_PHPSHOP_SHIPPING_MOD = 'Sz�ll�t�s';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Sz�ll�t�s';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Sz�ll�t�k list�z�sa';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Sz�ll�t�k';
	var $_PHPSHOP_RATE_LIST_MNU = 'Sz�ll�t�si d�jak';
	var $_PHPSHOP_RATE_LIST_LBL = 'Sz�ll�t�si d�jak';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'N�v';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'List�z�si sorrend';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Sz�ll�t� l�trehoz�sa';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Sz�ll�t� m�dos�t�sa/l�trehoz�sa';
	var $_PHPSHOP_RATE_FORM_MNU = 'Sz�ll�t�si d�j l�trehoz�sa';
	var $_PHPSHOP_RATE_FORM_LBL = 'Sz�ll�t�si d�j l�trehoz�sa/m�dos�t�sa';
	var $_PHPSHOP_RATE_FORM_NAME = 'Sz�ll�t�si d�j le�r�sa';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Sz�ll�t�';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Orsz�g';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'Ir�ny�t�sz�m sorozat kezdete';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Ir�ny�t�sz�m sorozat v�ge';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Legkisebb s�ly';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Legnagyobb s�ly';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Illet�k';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'A csomagja illet�ke';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'P�nznem';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'TVA azonos�t�';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'List�z�si sorrend';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Sz�ll�t�';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Sz�ll�t�si d�j le�r�sa';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'S�ly  ...-t�l';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... ig';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Sz�ll�t�c�g';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'List�z�si sorrend';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'HIBA: Sz�ll�t� ID m�r l�tezik.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'HIBA: V�lasszon egy sz�ll�t�t.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'HIBA: Legal�bb egy sz�ll�t�si d�jt�tel l�tezik, el�bb t�r�lje le ezeket, �s csak ut�na a sz�ll�t�t';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'HIBA: Nem tal�lom a sz�ll�t�t ezzel az ID -vel.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'HIBA: V�lasszon egy sz�ll�t�t.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'HIBA: Nem tal�lom a sz�ll�t�t ezzel az ID -vel.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'HIBA: A d�jt�tel le�r�s�t meg kell adni.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'HIBA: A c�lorsz�g �rv�nytelen. T�bb orsz�g megadhat� az al�bbi elv�laszt� haszn�lat�val  ";".';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'HIBA: Meg kell adni a legkisebb s�lyt';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'HIBA: Meg kell adni a legnagyobb s�lyt';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'HIBA: A legkisebb s�ly kisebb kell legyen, mint a legnagyobb s�ly';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'HIBA: Meg kell adni a sz�ll�t�si k�lts�get';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'HIBA: V�lasszon egy p�nznemet';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'HIBA: Meg kell adni a sz�ll�t�si d�jt�telt';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'K�rj�k, v�lasszon';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Sz�ll�t�';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Sz�ll�t�si k�lts�g';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = '�r';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-nincs-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Hitelk�rtya';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Haszn�lja a Payment Processort';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Banki terhel�s';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Csak c�m, �tv�telkor fizetend� (postai ut�nv�t)';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'K�rj�k, v�lasszon egy sz�ll�t�si c�met!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'K�rj�k, v�lassza ki a sz�ll�t�si m�dot!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'K�rj�k, v�lassza ki a fizet�si m�dot!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'K�rj�k, tekintse �t a megadott adatokat, �s hagyja j�v� a rendel�st!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'K�rj�k, v�lassza ki a sz�ll�t�si m�dot.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'K�rj�k, v�lasszon m�sik sz�ll�t�si m�dot.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'K�rj�k, v�lassza ki a fizet�si m�dot.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'K�rj�k, adja meg a hitelk�rtyasz�m�t.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'K�rj�k, adja meg a hitelk�rty�n szerepl� nevet.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'A megadott hitelk�rtya sz�m nem �rv�nyes.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'K�rj�k, adja meg a hitelk�rtya lej�rati h�napj�t.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'K�rj�k, adja meg a  hitelk�rtya lej�rati �v�t.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'A lej�rati d�tum nem �rv�nyes.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'K�rj�k, v�lasszon sz�ll�t�si c�met.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = '�rv�nytelen sz�mlasz�m.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'A bev�s�rl�kosara �res!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'HIBA: K�rj�k, v�lasszon egy sz�ll�t�t!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'HIBA: A kiv�lasztott sz�ll�t�si d�jt�telt nem tal�lom!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'HIBA: Nem tal�lhat� az �n sz�ll�t�si c�me!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'HIBA: Itt nem tal�lhat� semmilyen hitelk�rtya adat...';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'HIBA: Nem tal�lhat� a hitelk�rtyasz�m!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Sajnos az �n �ltal megadott hitelk�rtyasz�m egy tesztel�si sz�m!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'Nem tal�lhat� a user_id az adatb�zisban!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'M�g nem adtad meg a sz�mlavezet� bankfi�k nev�t.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Nem adta meg az IBAN azonos�t�j�t.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Nem adta meg a banksz�mla sz�m�t.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Nem adta meg a bank sorsz�m�t/azonos�t�j�t.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Nem adta meg a bank nev�t.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'A v�s�rl�shoz meg kell tenni az �sszes k�rt l�p�st!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'A fizet�si inform�ci�it elmentett�k k�s�bbi feldolgoz�s c�lj�b�l.<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'A minim�lis v�s�rl�si megb�z�s �rt�k�t m�g nem �rte el.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'A minim�lis v�s�rl�si megb�z�s �rt�ke:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Hitelk�rty�s fizet�s';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'Egy�b fizet�si m�dok';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'K�rj�k, v�lassza ki a fizet�si m�dot:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Minim�lis v�s�rl�si megb�z�s �rt�ke';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Banksz�mla adatai';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Sz�mlasz�m';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'Bank sorsz�m/azonos�t� k�d';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Bank neve';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Sz�mlatulajdonos';
	var $_PHPSHOP_MODULES = 'Modulok';
	var $_PHPSHOP_FUNCTIONS = 'Funkci�k';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Speci�lis term�kek';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'K�rj�k, ha �hajtja, hagyjon �zenetet a rendel�se mellett';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'V�s�rl�i k�zlem�ny';
	var $_PHPSHOP_INCLUDING_TAX = '($tax % �f�val)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'K�rj�k, v�lasszon egy t�telt';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'T�tel';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Let�lt�si r�szleg';
	var $_PHPSHOP_DOWNLOADS_START = 'Let�lt�s megkezd�se';
	var $_PHPSHOP_DOWNLOADS_INFO = 'K�rj�k, adja meg az e-mailban kapott Download-ID-t �s kattintson  a Let�lt�s megkezd�se gombra.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Sajnos lej�rt a let�lt�sre rendelkez�sre �ll� id�!';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Sajnos el�rte a maxim�lis let�lt�s-sz�mot!';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = '�rv�nytelen  Download-ID!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Nem k�ldhet� el az �zenet az al�bbi c�mre: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Az �zenet elk�ldve az al�bbi c�mre: ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Let�lt�si inf�k';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'a megrendelt f�jl(ok) let�lthet�k';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'K�rj�k, adja meg az al�bbi  Download-ID-t a Let�lt�si r�szlegen:  ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'f�jlonk�nt a maxim�lis let�lt�si sz�m: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'T�ltse le legfeljebb {expire} nap alatt az els� let�lt�st�l sz�m�tva';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'K�rd�sek? Probl�m�k?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Let�lt�si inf� �ltal ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'let�lthet� term�k?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'K�sz�nj�k a kifizet�st. 
        A tranzakci� sikeres volt. A PayPal e-mailben fogja �rtes�teni a tranzakci� r�szleteir�l. 
        Most folytathatja, vagy bejelentkezhet a <a href=http://www.paypal.com>www.paypal.com</a> -ra, ahol megtekintheti a tranzakci� r�szleteit.';
	var $_PHPSHOP_PAYPAL_ERROR = 'A tranzakci� feldolgoz�sa k�zben hiba t�rt�nt. A megrendel�se �llapot�t nem lehet friss�teni.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'K�sz�nj�k, hogy n�lunk v�s�rolt. Az �n rendel�si adatai k�vetkeznek.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'K�sz�nj�k a t�mogat�s�t.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'K�rd�sek? Probl�m�k?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'A k�vetkez� rendel�st k�ldte be:';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Tekintse meg a rendel�s�t a k�vetkez� hivatkoz�sra kattintva:';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Negat�v mennyis�g nem megengedett.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'K�rj�k, v�lasszon ki egy lehets�ges mennyis�get ebb�l a  t�telb�l.';
	var $_PHPSHOP_CART_STOCK_1 = 'A kiv�lasztott mennyis�g t�ll�pi a k�szletet. ';
	var $_PHPSHOP_CART_STOCK_2 = 'Pillanatnyilag $product_in_stock t�tel kaphat�. ';
	var $_PHPSHOP_CART_STOCK_3 = 'Kattintson ide az el�jegyz�sbe v�telhez.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'K�rj�k, hogy v�lasszon a speci�lis t�telekb�l a r�szletes le�r� oldalon!';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'nincs';
	var $_PHPSHOP_REGISTRATION_FORM_MR = '�r';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Asszony';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Dr.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof.';
	var $_PHPSHOP_DEFAULT = 'Alap�rtelmezett';
	var $_PHPSHOP_AFFILIATE_MOD = 'Partnerek adminisztr�ci�ja';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'A partnerek list�z�sa';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Partnerek list�ja';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'A partner neve';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Akt�v';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Kamatl�b';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Havi �sszeg';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Havi jutal�k';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Rendel�sek list�z�sa';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'E-mail k�ld�se a partnereknek';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'E-mail k�ld�se a partnereknek';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'Kinek k�ld e-mailt (* = MIND)?';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'E-mail c�me';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'T�rgy';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Tartalmazza a jelenlegi statisztik�t is';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Jutal�k (sz�zal�k)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Akt�v?';
	var $_PHPSHOP_DELIVERY_TIME = 'Sz�ll�t�si hat�rid�';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'K�zbes�t�si inform�ci�k';
	var $_PHPSHOP_MORE_CATEGORIES = 't�bb kateg�ria';
	var $_PHPSHOP_AVAILABILITY = 'Hozz�f�rhet�s�g';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Jelenleg nem kaphat� ez a term�k.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Ism�t kaphat� lesz: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = '�sszegz�s';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Statisztika';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'V�s�rl�k';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'akt�v term�kek';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'inakt�v term�kek';
	var $_PHPSHOP_STATISTIC_SUM = '�sszes';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = '�j rendel�sek';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = '�j v�s�rl�k';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'K�rj�k, adja meg al�bb az e-mail c�m�t, hogy �rtes�teni tudjuk, amint kaphat� lesz a keresett term�k. 
                                         Az e-mail c�m�t nem adjuk ki, nem adjuk el, nem haszn�ljuk fel m�s c�lra, mint kiz�r�lag arra, hogy �rtes�ts�k �nt,
                                         amint a keresett term�k ism�t kaphat� lesz.<br /><br />K�sz�nj�k!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'K�sz�nj�k a t�relm�t! <br />Azonnal �rtes�tj�k, ha a term�k ism�t kaphat� lesz.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = '�rtes�ts!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Nyomtat�si n�zet';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'K�rj�k, v�lasszon VAGY az Authorize.net VAGY a CyberCash k�z�l';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' Konfigur�ci�s f�jl �llapota:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = '�rhat�';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = '�r�sv�dett';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = '�ltal�nos';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = '�tvonal �s webc�m';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Honlap';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Sz�ll�t�s';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'P�nzt�r';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Let�lt�sek';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Fizet�sek';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Haszn�lat csak katal�gusk�nt';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Ha bejel�li, akkor minden bev�s�rl�kos�r funkci� letilt�sra ker�l.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = '�rak megjelen�t�se';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Ad�val egy�tt mutassa az �rakat?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = '�ll�tsa be, hogy a v�s�rl� az �rakat ad�val egy�tt vagy ad� n�lk�l l�ssa.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Jel�lje be az �rak megjelen�t�s�hez. Katal�gusk�nt t�rt�n� haszn�lat eset�n egyesek nem szeretik, hogy l�that�k legyenek az �rak az oldalakon.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Virtu�lis ad�';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Ez adja meg, hogy a 0 s�ly�k�nt szerepl� t�telekre sz�m�tson-e sz�ll�t�si k�lts�get vagy nem. M�dos�tsa a  ps_checkout.php->calc_order_taxable()-t, hogy szem�lyre szabja ezt.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Ad�z�si m�d:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'A sz�ll�t�si c�m alapj�n';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Az elad� c�me alapj�n';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Ez adja meg, hogy melyik ad�kulcs lesz figyelembe v�ve az ad�sz�m�t�sn�l:<br />
                                                <ul><li>az �zlettulajdonos sz�khelye szerint �rv�nyes �llami/ter�leti ad�kulcs</li><br/>
                                                <li>vagy a v�s�rl� otthona szerint �rv�nyes �llami/ter�leti ad�kulcs.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Megengedi t�bb ad�kulcs haszn�lat�t?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Jel�lje be, ha �nnek olyan term�kei is vannak, amelyekhez k�l�nb�z� ad�kulcsok tartoznak (pl. 9% a k�nyvek, 19% az egy�b term�kek sz�m�ra)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'A kifizet�si kedvezm�nyeket vegye-e figyelembe az ad�k �s a sz�ll�t�si illet�kek kisz�m�t�sa el�tt?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'A V�s�rl�i v�lem�nyek/�rt�kel�si rendszer enged�lyez�se';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Ha enged�lyezett, akkor a v�s�rl�k <strong>�rt�kelhetik a term�keket</strong>, �s <strong>meg�rhatj�k a v�lem�ny�ket</strong> r�luk. <br />
                                                                                �gy a v�s�rl�k le�rhatj�k a tapasztalataikat a term�kekkel kapcsolatban m�s v�s�rl�k sz�m�ra.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Be�ll�tja a jelz�t, hogy le kell-e vonni az �rengedm�nyt a kiv�lasztott fizet�shez az ad�z�s �s a sz�ll�t�s EL�TT (bejel�lt) vagy UT�N.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Megadhatj�k a v�s�rl�k a banksz�mla adataikat?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Jel�lje be, ha a v�s�rl�k megadhatj�k a banksz�mla adataikat a regisztr�l�si folyamat alatt.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Kiv�laszthatnak a v�s�rl�k egy �llamot/ter�letet/megy�t?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Jel�lje be, ha a v�s�rl�k megadhatj�k az �zletbe t�rt�n� regisztr�l�skor az �llam/ter�let/megye azonos�t� adataikat.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'El kell fogadni a Haszn�lati felt�teleket?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Jel�lje be, ha azt akarja, hogy a v�s�rl�knak k�telez� m�don el kell fogadniuk a haszn�latii felt�teleket a regisztr�l�s el�tt.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Ellen�rzi a rakt�rat?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Megadja, hogy kell-e ellen�rizni a rakt�ron l�v� term�kek sz�m�t, amikor a v�s�rl� beteszi a term�ket a bev�s�rl�kos�rba. 
                                                                                       Ha be van �ll�tva, akkor nem engedi meg a v�s�rl�nak, hogy egy term�kb�l t�bb darabot tegyen a bev�s�rl�-kosar�ba, mint ah�ny t�nylegesen rakt�ron van.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Enged�lyezi a partnerprogramot?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Ez enged�lyezi a partnerek k�vet�s�t az �zlet felhaszn�l�i oldal�n. Enged�lyezze, ha az adminisztr�tori panelben m�r adott hozz� partnerc�geket.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Megrendel�-lev�l form�tuma:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Sz�veges e-mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML e-mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Ez hat�rozza meg a rendel�st visszaigazol� e-mailek be�ll�t�s�t:<br />
                                                                                        <ul><li>egyszer� sz�veges e-mailk�nt</li>
                                                                                        <li>k�pekkel illusztr�lt HTML e-mailk�nt.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Enged�lyezi a nem kiszolg�l�-oldali felhaszn�l�k sz�m�ra a l�togat�i oldalr�l t�rt�n� adminisztr�ci�t?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'Ezzel a be�ll�t�ssal enged�lyezheti a honlapr�l t�rt�n� adminisztr�ci�t azon felhaszn�l�k sz�m�ra, 
                                                                                            akiknek nincs joguk az Adminisztr�ci�s panel k�zvetlen el�r�s�re, de phpShop adminisztr�ci�s jogaik vannak (pl. Regisztr�lt/Szerkeszt� besorol�suk van).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'A honlap webc�me. Rendszerint azonos a Mambo URL-lel (a v�g�n a lez�r� /-el!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'BIZTONS�GOS URL';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'A hely biztons�gos webc�me. (https - a v�g�n a lez�r� /-el!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'COMPONENTURL';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'A VirtueMart komponens webc�me. (a v�g�n a lez�r� /-el!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'IMAGEURL';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'A VirtueMart �sszetev�k k�p-k�nyvt�ra URL-je.  (a v�g�n a lez�r� /-el!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'ADMINPATH';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'A VirtueMart �sszetev�k k�nyvt�r �tvonala.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'CLASSPATH';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'A VirtueMart classes k�nyvt�r �tvonala.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'PAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'A VirtueMart html k�nyvt�r �tvonala.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'IMAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'A VirtueMart shop_image k�nyvt�r �tvonala.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'KEZD�LAP';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Ez az alap�rtelmezettk�nt bet�ltend� oldal.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'HIBAOLDAL';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Ez a hiba�zenetek megjelen�t�s�nek azz alap�rtelmezett oldala.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'HIBAKERES�OLDAL';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Ez a hibakeres�si �zenetek megjelen�t�s�nek az alap�rtelmezett oldala.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'HIBAKERES�S ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'HIBAKERES�S?   Bekapcsolja a hibakeres�si kimenetet. Ennek hat�s�ra jelenik meg mindegyik oldal alj�n a HIBAKERES� OLDAL. Nagyon hasznos a fejleszt�s sor�n, ugyanis megmutatja a bev�s�rl�kos�r tartalm�t, az �rlapmez�k �rt�keit, stb.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'R�PLAP';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Ez a term�kadatok megjelen�t�s�nek az alap�rtelmezett oldala.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Kateg�riasablon';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Ez hat�rozza meg egy bizonyos kateg�ri�ba tartoz� term�kek megjelen�t�s�re haszn�land� alap�rtelmezett kateg�ria sablont.<br />
                                                                                                      A l�tez� sablonf�jlok testreszab�s�val �j sablonokat k�sz�thet <br />
                                                                                                      (melyek a <strong>KOMPONENS�TVONAL/html/templates/</strong> k�nyvt�rban tal�lhat�k, a nev�k browse_ el�taggal kezd�dik)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Az egy sorban l�v� term�kek alap�rtelmezett sz�ma';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Megadja a soronk�nt megjelen�tend� term�kek sz�m�t. <br />
                                                                                                      P�ld�ul: Ha �n 4-et �r be, a Kateg�ria st�luslap 4 term�ket mutat soronk�nt';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = '"no image" k�p';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Ez a k�p l�that�, ha nincs k�p a term�kr�l.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'KERES�SI SOROK';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Meghat�rozza az oldalank�nti sorok sz�m�t a keres�s tal�latainak list�z�sakor.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'KERES�S 1. SZ�NE';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'A p�ratlan sorok sz�n�t �ll�tja be a tal�latlist�ban.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'KERES�S 2. SZ�NE';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'A p�ros sorok sz�n�t �ll�tja be a tal�latlist�ban.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'SOROK SZ�MA';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Be�ll�tja a megrendel�s kiv�laszt�s list�ban megjelen�tend� sorok sz�m�t.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'A l�bjegyzet megjelen�t�se ';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Megjelen�ti a "powered by VirtueMart" k�pet a l�bjegyzetben.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'V�lassza ki az �zlet sz�ll�t�si m�dj�t';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Standard Sz�ll�t�si modul  egy�nileg konfigur�lt sz�ll�tm�nyoz�kkal �s d�jt�telekkel. <strong>AJ�NLOTT!</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '  	Zon�lis sz�ll�t�s Orsz�g-modul 1.0 Verzi�<br />
                                                                                                            Ha ezzel a modullal kapcsolatban t�bb inform�ci�ra van sz�ks�ge, k�rj�k, l�togasson el a <a href="http://ZephWare.com">http://ZephWare.com</a> c�mre<br />
                                                                                                            a r�szletek�rt l�pjen kapcsolatba a <a href="mailto:zephware@devcompany.com">ZephWare.com</a>-mal<br /> Jel�lje be, hogy lehet�v� tegye a zon�lis sz�ll�t�s modul haszn�lat�t';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<a href="http://www.ups.com" target="_blank">UPS Online? Tools</a> sz�ll�t�si kalkul�tor';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'UPS hozz�f�r�si k�d';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Az �n UPS hozz�f�r�si k�dja';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'UPS felhaszn�l�i azonos�t�';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'Az UPS-t�l kapott felhaszn�l�i azonos�t�';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'UPS jelsz�';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'Az UPS-fi�k jelszava';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'InterShipper modul. Csak akkor jel�lje be, ha van InterShipper.com fi�kja';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Letiltja a Sz�ll�t�si m�d kiv�laszt�s�t. Akkor v�lassza, ha a v�s�rl�i let�lthet� term�keket v�s�rolnak, amelyeket nem kell post�zni.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'InterShipper jelsz�';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Az �n InterShipper fi�kj�nak jelszava.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'InterShipper e-mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'Az �n InterShipper fi�kj�nak e-mail c�me.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'TITKOS�T�SI KULCS';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Az adatb�zisban t�roltt adatok titkos�t�s�ra haszn�lt kulcs. Azt jelenti, hogy ezt a f�jlt mindenkor v�deni kell a megtekint�st�l.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'A P�nzt�r s�v enged�lyez�se';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Akkor jel�lje be, ha meg akarja jelen�teni a \'p�nzt�r s�vot\' a v�s�rl�nak a fizet�si folyamat sor�n (1 - 2 - 3 - 4 grafik�kkal).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'V�lassza ki az �zlet p�nzt�ri folyamat�t';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Szok�sos:</strong><br/>
               1. Sz�ll�t�si c�m k�r�se<br />
              2. Sz�ll�t�si m�d k�r�se<br />
              3. Fizet�si m�d k�r�se<br />
              4. Rendel�s felad�sa';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>2. folyamat:</strong><br/>
               1. Sz�ll�t�si c�m k�r�se<br />
              2. Fizet�si m�d k�r�se<br />
              3. Rendel�s felad�sa';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>3. folyamat:</strong><br/>
               1. Sz�ll�t�si m�d k�r�se<br />
              2. Fizet�si m�d k�r�se<br />
              3. Rendel�s felad�sa';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>4. folyamat:</strong><br/>
               1. Fizet�si m�d k�r�se<br />
              2. Rendel�s felad�sa';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'A let�lt�sek enged�lyez�se';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Jel�lje be, ha enged�lyezni akarja a let�lt�seket. Csak akkor, ha let�lthet� cikkeket akar eladni.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'A let�lt�st enged�lyez� rendel�si �llapot';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'V�lassza ki azt a rendel�si �llapotot, amely eset�ben a v�s�rl� e-mailben �rtes�t�st kap a let�lt�sr�l.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'A let�lt�seket tilt� rendel�si �llapot';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Be�ll�tja azt a rendel�si �llapotot, amelyn�l a let�lt�s letiltott a vev� sz�m�ra.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'LET�LT�SI GY�K�R';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'A let�lthet� f�jlok t�nyleges el�r�si �tvonala. (a v�g�n a lez�r� /-el!)<br>
        <span class="message">A saj�t �zlete biztons�ga �rdek�ben: Ha lehet, akkor k�rj�k, hogy haszn�ljon A WEBGY�K�RT�L K�V�L l�v� k�nyvt�rat</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Let�lt�sek sz�ma';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Be�ll�tja az egy let�lt�si azonos�t�val enged�lyezett let�lt�sek sz�m�t (egy rendel�s sz�m�ra)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Let�lt�si hat�rid�';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Be�ll�tja a let�lt�si id�intervallumot <strong>m�sodpercekben</strong> amelyben  a let�lt�s enged�lyezve van a vev� sz�m�ra. 
  Az id�intervallum az els� let�lt�ssel kezd�dik! Amikor a megengedett id� lej�r, a let�lt�si ID le lesz tiltva.<br />Megjegyz�s : 86400s=24h.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Lehet�v� teszi az IPN kifizet�seket a PayPal-on kereszt�l?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Jel�lje be, ha a PayMate kifizet�si rendszer haszn�lat�t akarja enged�lyezni.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'PayPal kifizet�si e-mail:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'A v�llalati e-mail c�m  PayPal kifizet�s sz�m�ra. Ugyancsak haszn�lva mint receiver_email.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'A sikeres tranzakci�k rendel�si �llapota';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'V�lassza ki azt a rendel�s �llapotot, amely a t�nyleges rendel�shez lesz rendelve, ha a PayPal IPN sikeres volt. Ha let�lt�ssel el�rhet� term�keket �rul: 
  v�lassza ki azt az �llapotot, amely lehet�v� teszi a let�lt�st (ami ut�n a vev� azonnal �rtes�t�st kap e-mailben a let�lt�s enged�lyez�s�r�l).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'A sikertelen tranzakci�k rendel�si �llapota';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'V�lassza ki a sikertelen PayPal-tranzakci�k rendel�si �llapot�t.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Lehet�v� teszi a PayMate kifizet�seket?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Jel�lje be, ha az Ausztr�liai PayMate kifizet�si rendszer haszn�lat�t akarja enged�lyezni.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'PayMate felhaszn�l�n�v:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Az �n PayMate felhaszn�l�i azonos�t�ja.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Lehet�v� teszi az Authorize.net haszn�lat�t?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Jel�lje be, ha az Authorize.net szolg�ltat�sait akarja haszn�lni a VirtueMartban.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Teszt m�d?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'V�lassza a \'Yes\'-t tesztel�si c�lokra, \'No\'-t a rendszer �lesben val� haszn�lat�hoz.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Igen';
	var $_PHPSHOP_ADMIN_CFG_NO = 'Nem';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Authorize.net bejelentkez�si ID';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'Ez az �n Authorize.net bejelentkez�si ID-je';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Authorize.net tranzakci� kulcs';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'Ez az �n Authorize.net tranzakci�s kulcsa';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Hiteles�t�s t�pusa';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'Ez egy Authorize.Net hiteles�t�s t�pus.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Enged�lyezi a CyberCash-t?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Jel�lje be, ha a CyberCash szolg�ltat�sait akarja haszn�lni a VirtueMartban.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash MERCHANT';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'A CC_MERCHANT a CyberCash keresked�i azonos�t�';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash keresked�i kulcs';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash keresked�i kulcs a CyberCash �ltal megadott MERCHANT k�d';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash PAYMENT URL';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'A CyberCash PAYMENT URL az az URL, amit a Cybercash adott meg a biztons�gos kifizet�s c�lj�ra.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash AUTH TYPE';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'CyberCash AUTH TYPE a Cybercase sz�m�ra megadand� Cybercash hiteles�t�s t�pus';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Speci�lis keres�s';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Keres�s minden kateg�ri�ban';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Keres�s minden term�kinform�ci�ban';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Csak a term�kn�v';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Csak a gy�rt�/elad�';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Csak a term�kle�r�s';
	var $_PHPSHOP_SEARCH_AND = '�s';
	var $_PHPSHOP_SEARCH_NOT = 'nem';
	var $_PHPSHOP_SEARCH_TEXT1 = 'Az els� leg�rd�l� list�ban v�laszthatja ki azt a kateg�ri�t, amelyikre korl�tozni k�v�nja a keres�st. 
        A m�sodik leg�rd�l� list�ban egy bizonyos term�kinform�ci�ra (pl. n�v) korl�tozhatja a keres�st. 
        Miut�n kiv�lasztotta ezeket (vagy meghagyta az alap�rtelmezett MINDEN �rt�ket), �rja be a keresend� kulcssz�t. ';
	var $_PHPSHOP_SEARCH_TEXT2 = ' Tov�bbi kulcssz� megad�s�val, valamint az �S vagy a NEM m�veleti jel v�laszt�s�val tov�bb finom�thatja a keres�st. 
        Az �S v�laszt�sa azt jelenti, hogy mindk�t sz�nak benne kell lennie a megjelen�tend� term�k sz�m�ra. 
        A NEM v�laszt�sa azt jelenti, hogy a term�k csak akkor lesz l�that�, ha az els� kulcssz� megtal�lhat�, 
        a m�sodik viszont nem.';
	var $_PHPSHOP_ORDERBY = 'Rendez�si m�d';
	var $_PHPSHOP_CUSTOMER_RATING = '�tlagos v�s�rl�i �rt�kel�s';
	var $_PHPSHOP_TOTAL_VOTES = '�sszes szavazat';
	var $_PHPSHOP_CAST_VOTE = 'K�rj�k, szavazzon';
	var $_PHPSHOP_RATE_BUTTON = '�rt�k';
	var $_PHPSHOP_RATE_NOM = '�rt�kel�s';
	var $_PHPSHOP_REVIEWS = 'V�s�rl�i v�lem�nyek';
	var $_PHPSHOP_NO_REVIEWS = 'M�g senki sem nyilv�n�tott v�lem�nyt err�l a term�kr�l.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Legyen �n az els�, �s �rja meg a v�lem�ny�t...';
	var $_PHPSHOP_REVIEW_LOGIN = 'K�rj�k, jelentkezzen be �s �rja meg a v�lem�ny�t.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'K�rj�k, �rt�kelje a term�ket, hogy kieg�sz�tse a v�lem�ny�t!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'K�rj�k, �rjon m�g valamit a v�lem�ny�hez. Legal�bb 100 karakter a megengedett als� hat�r!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'K�rj�k, r�vid�tse le a v�lem�ny�t. Legfeljebb 2000 karakter enged�lyezett.';
	var $_PHPSHOP_WRITE_REVIEW = '�rja meg a v�lem�ny�t err�l a term�kr�l!';
	var $_PHPSHOP_REVIEW_RATE = 'El�sz�r �rt�kelje a term�ket. K�rj�k, v�lassza ki 5 (kiv�l�) �s 0 (pocs�k) k�z�tt az �rt�kel�st.';
	var $_PHPSHOP_REVIEW_COMMENT = 'Most k�rj�k, �rja meg (r�viden) a v�lem�ny�t... (legal�bb 100, legfeljebb 2000 karakter)';
	var $_PHPSHOP_REVIEW_COUNT = 'Karakterek sz�ma: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'V�lem�ny bek�ld�se';
	var $_PHPSHOP_REVIEW_ALREADYDONE = '�n m�r meg�rta a v�lem�ny�t err�l a term�kr�l. K�sz�nj�k.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'K�sz�nj�k a v�lem�ny�t.';
	var $_PHPSHOP_COMMENT = 'Megjegyz�s';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Hitelk�rtyat�pusok hozz�ad�sa/m�dos�t�sa';
	var $_PHPSHOP_CREDITCARD_NAME = 'Hitelk�rtya neve';
	var $_PHPSHOP_CREDITCARD_CODE = 'Hitelk�rtya - r�vid k�d';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Hitelk�rtyat�pus';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Hitelk�rty�k';
	var $_PHPSHOP_UDATE_ADDRESS = 'C�m friss�t�se';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Tov�bb v�s�rolok';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'A rendel�s felad�sa siker�lt!';
	var $_PHPSHOP_ORDER_LINK = 'Ennek a hivatkoz�snak a k�vet�s�vel megtekintheti a rendel�si adatokat.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'Megv�ltozott az �n {order_id} sz. rendel�s�nek az �llapota.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'Az �j �llapot ez:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'A rendel�si adatok megtekint�s�hez k�rj�k, hogy k�vesse ezt a hivatkoz�st (vagy m�solja �t a b�ng�sz�j�be):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Rendel�si �llapot m�dos�t�sa: Az �n rendel�se {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = '�rtes�ti a v�s�rl�t?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'K�rj�k, hogy el�bb m�dos�tsa a rendel�s �llapot�t!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Az alap�rtelmezett v�s�rl�csoport �rengedm�nye (%-ban)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Pozit�v X �sszeg jelent�se: Ha ENN�L a v�s�rl�csoportn�l nincs �ra a term�knek, akkor X %-kal cs�kkenti az alap�rtelmezett �rat. Negat�v �sszegnek ford�tott a hat�sa.';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = '�rengedm�ny';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = '�rengedm�nyek list�ja';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = '�rengedm�ny hozz�ad�sa/m�dos�t�sa';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Engedm�ny m�rt�ke';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = '�rja be az engedm�ny m�rt�k�t';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Engedm�ny t�pusa';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Sz�zal�k';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = '�sszeg';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Sz�zal�k vagy �sszeg legyen a m�rt�k?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = '�rengedm�ny kezdete';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Meghat�rozza, hogy melyik napon kezd�dik az �rengedm�ny';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = '�rengedm�ny v�ge';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Meghat�rozza, hogy melyik napon fejez�dik be az �rengedm�ny';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'A Term�k �rengedm�ny �rlapon adhatja hozz� az engedm�nyeket!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Megtakar�t�s';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Tekintse meg a nagy k�pet';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'P�nznem megjelen�t�si s�ma';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'P�nznem r�vid�t�se';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'HTML-entit�sokat (pl. ?,?,?,...) is haszn�lhat itt';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Tizedesjegyek';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'A kijelzett tizedesjegyek sz�ma (lehet 0)<br><b>Kerek��t�sre ker�l, ha az �rt�k k�l�nf�le tizedes sz�mjegyekb�l �ll</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Tizedesjel';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'A tizedesjelk�nt haszn�lt karakter';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Ezres elv�laszt�jel';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Az ezresek tagol�s�ra haszn�lt karakter (�res lehet)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Pozit�v form�tum';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'A pozit�v �rt�kek kijelz�s�hez haszn�lt megjelen�t�s-form�tum.<br>(Szimb�lum alatt a p�nznem-szimb�lum �rtend�)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Negat�v form�tum';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'A negat�v �rt�kek kijelz�s�hez haszn�lt megjelen�t�s-form�tum.<br>(Szimb�lum alatt a p�nznem-szimb�lum �rtend�)';
	var $_PHPSHOP_OTHER_LISTS = 'Egy�b term�klist�k';
	var $_PHPSHOP_MORE_IMAGES = 'Tov�bbi k�pek megtekint�se';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'L�tez� k�pek a k�vetkez�h�z:';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Vissza a term�kadatokhoz';
	var $_PHPSHOP_FILEMANAGER = 'F�jlkezel�';
	var $_PHPSHOP_FILEMANAGER_LIST = 'F�jlkezel�::Term�klista';
	var $_PHPSHOP_FILEMANAGER_ADD = 'K�p/f�jl hozz�ad�sa';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Hozz�rendelt k�pek';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'Let�lthet�?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Hozz�rendelt f�jlok (adatlapok, ...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'K�zz�t�ve?';
	var $_PHPSHOP_FILES_LIST = 'F�jlkezel�::K�p/F�jllista a k�vetkez�h�z:';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'F�jln�v';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'F�jlc�m';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'F�jlt�pus';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'F�jlbejegyz�s szerkeszt�se';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Nagy k�p';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Miniat�r k�p';
	var $_PHPSHOP_FILES_FORM = 'F�jl felt�lt�se a k�vetkez�h�z:';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Jelenlegi f�jl';
	var $_PHPSHOP_FILES_FORM_FILE = 'F�jl';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'K�p';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Felt�lt�s ide';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'alap�rtelmezett term�kk�p �tvonal';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Adja meg a f�jl hely�t';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Let�lt�si �tvonal (pl. a let�lthet� term�kek �rt�kes�t�s�hez!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'A miniat�r l�trehoz�sa automatikusan?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'K�zz�tett a f�jl?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'F�jlc�m (amit a v�s�rl� l�t)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'F�jl le�r�sa';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'F�jl webc�me (elhagyhat�)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'K�rj�k, hogy �rv�nyes �tvonalat adjon meg!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'A miniat�r elk�sz�t�se siker�lt!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'NEM k�sz�thet� el a miniat�r k�p!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'F�jl-/K�pfelt�lt�si hiba';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Nem t�r�lhet� a nagy k�p f�jlja.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'A nagy k�p t�rl�se siker�lt.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Nem t�r�lhet� a miniat�r k�pf�jlja (tal�n nem is l�tezik): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'A miniat�r k�p t�rl�se siker�lt.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Nem t�r�lhet� a f�jl.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'A f�jl t�rl�se siker�lt.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Sajnos nem tal�lhat� a k�rt f�jl!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Nem tal�lhat� a k�p!';
	var $_PHPSHOP_COUPON_MOD = 'Kupon';
	var $_PHPSHOP_COUPONS = 'Kuponok';
	var $_PHPSHOP_COUPON_LIST = 'Kuponok list�z�sa';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Mar bev�ltott�k a kupont.';
	var $_PHPSHOP_COUPON_REDEEMED = 'A kupon bev�lt�sa siker�lt! K�sz�nj�k.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Ha van kuponk�dja, akkor k�rj�k, hogy �rja be az al�bbi mez�be:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'K�ld�s';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'M�r van ilyen kuponk�d. K�rj�k, hogy pr�b�lja �jra.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Kupon friss�t�se';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Kattintson egy kuponk�dra a m�dos�t�s�hoz, ill. a kuponk�d t�rl�s�hez jel�lje ki, majd kattintson a T�rl�s gombra:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'K�d';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Sz�zal�k vagy �sszeg';
	var $_PHPSHOP_COUPON_TYPE = 'Kupon t�pusa';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Az aj�nd�kkupon a rendel�s sor�n t�rt�n� felhaszn�l�s ut�n t�rl�sre ker�l. A tart�s kupont annyiszor haszn�lhatja a v�s�rl�, ah�nyszor csak akarja.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Aj�nd�kkupon';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Tart�s kupon';
	var $_PHPSHOP_COUPON_VALUE_HEADER = '�rt�k';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'K�d t�rl�se';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Biztosan t�r�lni akarja ezt a kuponk�dot?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'K�rj�k, hogy t�lts�n ki minden mez�t.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'A kupon �rt�ke sz�m kell, hogy legyen.';
	var $_PHPSHOP_COUPON_NEW_HEADER = '�j kupon';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Kuponk�d';
	var $_PHPSHOP_COUPON_PERCENT = 'Sz�zal�k';
	var $_PHPSHOP_COUPON_TOTAL = '�sszeg';
	var $_PHPSHOP_COUPON_VALUE = '�rt�k';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'A kuponk�d ment�se k�sz.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Kupon ment�se';
	var $_PHPSHOP_COUPON_DISCOUNT = '�rengedm�ny a kuponra';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Nem tal�lhat� a kuponk�d. K�rj�k, hogy pr�b�lja �jra.';
	var $_PHPSHOP_COUPONS_ENABLE = 'A kupon haszn�lat�nak enged�lyez�se';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Ha enged�lyezi a kuponok haszn�lat�t, akkor a v�s�rl�k olyan kuponsz�mokat �rhatnak be, amivel engedm�nyt kapnak a v�s�rl�sukb�l.';
	var $_PHPSHOP_FREE_SHIPPING = 'Ingyenes sz�ll�t�s';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Ingyenes a sz�ll�t�sa ennek a term�knek!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Az ingyenes sz�ll�t�s legkisebb �sszege';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Az az �sszeg (�F�VAL!), amivel ingyenes a sz�ll�t�s 
                                                (p�ld�ul: az <strong>50</strong> akkor jelent ingyenes sz�ll�t�st, ha a v�s�rl�
                                                50 doll�rt (�f�val) vagy t�bbet fizet.';
	var $_PHPSHOP_YOUR_STORE = '�zletem';
	var $_PHPSHOP_CONTROL_PANEL = 'Ir�ny�t� k�zpont';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF-gomb';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Megjelen�ti vagy elrejti a PDF-gombot az �zletben';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'El kell MINDEN RENDEL�SKOR fogadni a haszn�lati felt�teleket?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Akkor jel�lje be, ha azt akarja, hogy a v�s�rl� MINDEN RENDEL�SKOR (a rendel�s felad�sa el�tt) fogadja el a haszn�lati felt�teleket.';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Banksz�mla t�pusa';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Checking';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Business Checking';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Takar�k';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Ism�tl�d� sz�ml�z�sok?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'D�ntse el, hogy sz�ks�ge van-e az ism�tl�d� sz�ml�z�sokra.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Bels� hiba t�rt�nt a k�vetkez� k�r�s feldolgoz�sakor';
	var $_PHPSHOP_PAYMENT_ERROR = 'Hiba t�rt�nt a fizet�s feldolgoz�sakor';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'A fizet�s feldolgoz�sa siker�lt';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'Az UPS nem tudta feldolgozni a sz�ll�t�si k�lts�g k�r�s�t.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Garant�lt nap(ok) a sz�ll�t�sra';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'UPS felv�teli (pickup) m�d';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Hogyan adja le a csomagokat a UPS-nek?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'UPS-csomagol�s?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'V�lassza ki a csomagol�s alap�rtelmezett t�pus�t.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Helybeli sz�ll�t�s?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Helybeli (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Kereskedelmi sz�ll�t�s (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = '�raj�nlat a helybeli (RES) vagy a kereskedelmi (COM) sz�ll�t�sra.';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Kezel�si k�lts�g';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Az �n �ltal felsz�m�tott kezel�si k�lts�g enn�l a sz�ll�t�si m�dn�l.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Ad�oszt�ly';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'A k�vetkez� ad�oszt�ly haszn�lata a sz�ll�t�si k�lts�gre.';
	var $_PHPSHOP_ERROR_CODE = 'Hibak�d';
	var $_PHPSHOP_ERROR_DESC = 'Hibale�r�s';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'A tranzakci�kulcs megjelen�t�se / megv�ltoztat�sa';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'A jelsz�/tranzakci�kulcs megjelen�t�se/megv�ltoztat�sa';
	var $_PHPSHOP_TYPE_PASSWORD = 'K�rj�k, hogy �rja be a felhaszn�l�i jelszav�t';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Jelenlegi jelsz�';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Jelenlegi tranzakci�kulcs';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'A tranzakci�kulcs megv�ltoztat�sa siker�lt.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'A hitelk�rtyak�d �rt�k�nek k�r�se/r�gz�t�se (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Ellen�rzi az �rv�nyes CVV2/CVC2/CID �rt�ket (h�rom vagy n�gy sz�mjegyb�l �ll� sz�m a hitelk�rtya h�tlapj�n, az American Express k�rty�k el�lapj�n)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'K�rj�k, hogy �rja be a hitelk�rtya h�tlapj�n (American Express k�rty�k el�lapj�n) l�v� h�rom vagy n�gy sz�mjegyb�l �ll� sz�mot';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'Be kell �rnia a hitelk�rtya k�dj�t a folytat�shoz.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'VAGY �rja be egy f�jl nev�t';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'MEGJEGYZ�S: Itt �rhatja be a f�jl nev�t. <strong>Ha megadja itt egy f�jl nev�t, akkor egy f�jl sem ker�l felt�lt�sre!!! K�zzel kell FTP-n felt�ltenie!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'VAGY t�lts�n fel egy �j f�jlt';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Felt�lthet egy helyi f�jlt. Ez a f�jl lesz az �n �ltal eladott term�k. Le fogja cser�lni a l�tez� f�jlt.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = '�rjon be valamilyen sz�veget ide, amit a v�s�rl� a term�k r�plapj�n olvashat el.<br />pl.: 24 �, 48 �ra, 3 - 5 nap, Rendel�sre.....';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'VAGY v�lassza ki az adatlapon (r�plapon) l�that� k�pet.<br />A k�pek a <i>/components/com_virtuemart/shop_image/availability</i> k�nyvt�rban tal�lhat�k.<br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Attrib�tumlista';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>P�ld�k az attrib�tumlista form�tum�ra:</h4>
        <pre>M�ret,XL[+1.99],M,S[-2.99];Sz�n,Piros,Z�ld,S�rga,K�lts�gSz�b[=24.00];�s�gyTov�bb,..,..</pre>
        <h4>Be�p�tett �rigaz�t�sok a speci�lis attrib�tumm�dos�t�sok haszn�lat�hoz:</h4>
        <pre>
        + == Hozz�adja ezt az �sszeget a meg�llap�tott �rhoz.<br />
        - == Kivonja ezt az �sszeget a meg�llap�tott �rb�l.<br />
        = == Erre az �sszegre �ll�tja a term�k �r�t.
      </pre>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Egy�ni attrib�tumok list�ja';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>P�ld�k az egy�ni attrib�tumok list�j�nak form�tum�ra:</h4>
        <pre>N�v;Extr�k;</strong>...</pre>';
	var $_PHPSHOP_MULTISELECT = '<i>T�bbsz�r�s kijel�l�s: a CTRL-gombbal �s az eg�rrel';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'Enged�lyezi az eProcessingNetwork.com fizet�st?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Jel�lje be az eProcessingNetwork.com haszn�lat�hoz a VirtueMarttal.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'M�d tesztel�se ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Tesztel�shez v�lassza az \'Igen\' lehet�s�get. Az �l� tranzakci�k enged�lyez�s�hez v�lassza a \'Nem\' lehet�s�get.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'eProcessingNetwork.com felhaszn�l�n�v';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'Ez az �n eProcessingNetwork.com felhaszn�l�neve';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'eProcessingNetwork.com tranzakci�kulcs';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'Ez az �n eProcessingNetwork.com tranzakci�kulcsa';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Hiteles�t�si t�pus';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'Ez az eProcessingNetwork.com hiteles�t�si t�pusa.';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Kapcsol�d� term�kek';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Ezzel a list�val �rukapcsol�sokat hozhat l�tre. V�lasszon csak ki egy vagy t�bb term�ket itt, majd ezek lesznek a <strong>Kapcsol�d� term�kek</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Tal�n ez(ek) a term�k(ek) is �rdeklik �nt';
	var $_PHPSHOP_IMAGE_ACTION = 'K�pm�velet';
	var $_PHPSHOP_NONE = 'nincs';
	var $_PHPSHOP_ORDER_HISTORY = 'Rendel�si el�zm�nyek';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Megjegyz�s';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'A rendel�ssel kapcsolatos megjegyz�s';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Beleveszi ezt a megjegyz�st?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Hozz�ad�s d�tuma';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Kapott �rtes�t�st a vev�?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Rendel�si �llapot megv�ltoztat�sa';
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
	var $_PHPSHOP_USPS_RESPONSE_ERROR = 'Az USPS nem tudta feldolgozni a sz�ll�t�si d�tum k�r�st.';
	var $_PHPSHOP_PARAMETERS_LBL = 'Param�terek';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Term�kt�pus';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Term�kt�pusok';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Term�kt�pus hozz�ad�sa/m�dos�t�sa';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Term�kt�pusok list�ja a k�vetkez�h�z:';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'A term�kt�pusok kilist�z�sa';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Term�kt�pus hozz�ad�sa a k�vetkez�h�z';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Term�kt�pus hozz�ad�sa';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Term�kt�pus';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Term�kt�pus neve';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Term�kt�pus le�r�sa';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Param�terek';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Term�kt�pus tulajdons�gai';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'K�zz�t�ve?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Term�kt�pus b�ng�sz�-lapja';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Term�kt�pus r�plap';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'A term�kt�pus param�terei';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Param�ter inform�ci�ja';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Nem tal�lhat� a term�kt�pus!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Param�ter neve';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Ez a n�v lesz a t�bl�zat oszlop�nak a neve. Egyedinek kell lennie, sz�k�z n�lk�l.<BR>P�ld�ul: alap_anyag';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Param�ter c�mk�je';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Param�ter le�r�sa';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Param�ter t�pusa';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Eg�sz sz�m';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Sz�veg';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'R�vid sz�veg';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Float';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Char';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'D�tum �s id�';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'D�tum';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'YYYY-MM-DD';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Id�pont';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'HH:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Sort�r�s';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'T�bb �rt�k';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Lehets�ges �rt�kek';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'A lehets�ges �rt�kek megjelen�t�se t�bbsz�r�s kijel�l�sk�nt?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Ha meg vannak adva a lehets�ges �rt�kek, akkor a param�ternek csaz ezek az �rt�kei lehetnek. P�lda a lehets�ges �rt�kekre:</strong><BR><span class="sectionname">Ac�l;Fa;M�anyag;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Alap�rt�k';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'A param�ter alap�rtelmezett �rt�k�hez ezt a form�tumot haszn�lja:<ul><li>D�tum: YYYY-MM-DD</li><li>Id�: HH:MM:SS</li><li>D�tum �s id�: YYYY-MM-DD HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Egys�g';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Speci�lis keres�s a param�terek alapj�n';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Param�terek keres�se';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Meg akarja keresni a m�szaki param�terekkel egyez� term�keket?<BR>B�rmilyen el�re elk�sz�tett �rlapot felhaszn�lhat:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Sajnos nincs kateg�ria a keres�shez.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Sajnos nincs ilyen nev� k�zz�tett term�kt�pus.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'Olyan, mint';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'NEM olyan, mint';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Teljes sz�veges keres�s';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Minden kijel�lt';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'B�rmelyik kijel�lt';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = '�rlap ki�r�t�se';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Keres�s kateg�ri�ban';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Param�terek m�dos�t�sa';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Cs�kken� rendez�s';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'N�vekv� rendez�s';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'A kateg�ria param�terei';
	var $_PHPSHOP_FEE = 'D�j';
	var $_PHPSHOP_PRODUCT_CLONE = 'Term�k kl�noz�sa';
	var $_PHPSHOP_CSV_SETTINGS = 'Be�ll�t�sok';
	var $_PHPSHOP_CSV_DELIMITER = 'Hat�rol�jel';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Mez� lez�r� karakter';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'CSV f�jl felt�lt�se';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'A CSV f�jl k�ld�se';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Bet�lt�s k�nyvt�rb�l';
	var $_PHPSHOP_CSV_FROM_SERVER = 'A CSV f�jl bet�lt�se a kiszolg�l�r�l';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Export�l�s CSV f�jlba';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'V�lassza ki a mez� rendez�si t�pus�t';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Alap�rtelmezett rendez�s';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'Saj�t egy�ni rendez�sem';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Az �sszes term�k export�l�sa CSV f�jlba';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'CSV import�l�s / export�l�s be�ll�t�sai';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'V�ltoztat�sok ment�se';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Mez�n�v';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'alap�rtelmezett �rt�k';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Mez�k sorrendje';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'K�telez� a mez�?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Import�l�s/Export�l�s';
	var $_PHPSHOP_CSV_NEW_FIELD = '�j mez� hozz�ad�sa';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Dokument�ci�';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Sajnos az �n �ltal k�rt term�k nem tal�lhat�!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'A nem kaphat� term�kek megjelen�t�se';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Ha enged�lyezi, akkor l�that�k lesznek a jelenleg nem kaphat� term�kek. Egy�b esetben rejtettek maradnak az ilyen term�kek.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'Number {unit}s in packaging:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'Number {unit}s in box:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Az elfogyott term�kek elrejt�se';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Aj�nlott �s akci�s term�kek';
	var $_PHPSHOP_FEATURED = 'Aj�nlat';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Vissza az orsz�ghoz';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Vissza a f�jlkezel�h�z';
	var $_PHPSHOP_ADD_STATE = '�llam hozz�ad�sa';
	var $_PHPSHOP_LIST_STATES = '�llamok list�z�sa';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'aj�nlott �S akci�s';
	var $_PHPSHOP_SHOW_FEATURED = 'aj�nlott term�kek';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'akci�s term�kek';
	var $_PHPSHOP_FILTER = 'Sz�r�';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Vissza a f� webhelyre';
	var $_PHPSHOP_EXPAND_TREE = 'A fa kibont�sa';
	var $_PHPSHOP_COLLAPSE_TREE = 'A fa �sszecsuk�sa';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Akci�s �r';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Itt hat�lytalan�thatja a megadott �rengedm�nyt. �rja be a term�k speci�lis engedm�nyes �r�t.<br/>
Az engedm�nyes �rb�l �j akci�s bejegyz�st fog l�trehozni az �zlet.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Egys�g�r';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'Z�rva az �zlet?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'Ha bejel�li, akkor az �zlet Z�rva �zenetet fog megjelen�teni.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Z�rva �zenet';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Az �zlet t�bl�inak t�bla el�tagja';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'Ez alap�rtelmez�sk�nt a <strong>vm</strong>';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'L�that� az oldalnavig�l�s a term�klista tetej�n?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Be- vagy kikapcsolja az oldalnavig�l�s megjelen�t�s�t a term�klista tetej�n a felhaszn�l�i oldalon.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'L�that� a term�kek sz�ma?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'L�that� a kateg�ri�ban l�v� term�kek sz�ma, mint pl. Kateg�ria (4)?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'A berakom-a-kos�rba gomb s�m�ja';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'A dinamikus miniat�r-�tm�retez�s enged�lyez�se?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'Bejel�l�s�vel enged�lyezi a k�pek dinamikus �tm�retez�s�t. Ez azt jelenti, hogy a PHP GD2 funkci�inak felhaszn�l�s�val az �sszes miniat�r k�p �tm�retez�sre ker�l,
        hogy igazodjon az al�bb megadott m�retekhez (a GD2-t�mogat�st �gy ellen�rizheti, ha a "Rendszer" -> "Rendszerinf�" -> "PHP inf�" -> gd lehet�s�ghez tall�z. 
        A miniat�r k�p min�s�ge sokkal jobb, mint azok�, melyeket a b�ng�sz� "m�retezett �t". Az �jonnan gener�lt k�peket a /shop_image/prduct/resized k�nyvt�rba teszi. Ha a k�pet m�r �tm�retezte, akkor ezt a m�solatot k�ldi a b�ng�sz�nek, vagyis egy k�pet sem m�retez �t �jra meg �jra.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'A miniat�r k�p sz�less�ge';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'Az �tm�retezett miniat�r c�l <strong>sz�less�ge</strong>.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'A miniat�r k�p magass�ga';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'Az �tm�retezett miniat�r c�l <strong>magass�ga</strong>.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Jel�lj�n be legal�bb egy jel�l�n�gyzetet a Sz�ll�t�s be�ll�t�sai lapon!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = '�r be�ll�t�sai';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Az �rak a k�vetkez� tagcsoport sz�m�ra l�that�k';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'A kiv�lasztott tagcsoport, valamint a magasabb szint� jogosults�gokkal rendelkez� tagcsoportok l�thatj�k a fogyaszt�i �rakat.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'A "(XX% �f�val)" megjelen�t�se, ha felsz�m�that�?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'Ha bejel�li, akkor a felhaszn�l�k l�tni fogj�k a "(xx% �f�val)" sz�veget, ha az �rak kijelz�se az �f�val t�rt�nik.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'L�that� a csomagol�s �rc�dul�ja?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'Bejel�l�se eset�n az �rc�dula a term�k egys�g�nek �s csomagol�s�nak �rt�k�b�l sz�rmazik:<br/>
<strong>Egys�g�r (10 darab)<strong><br/>
Ha nem jel�li be, akkor az �rc�dula �gy n�z ki, ahogy szokott: <strong>�ra: xx.xx Ft</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'Tov�bbi alapbe�ll�t�sok';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Alapbe�ll�t�sok';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Felhaszn�l�-oldali funkci�k';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Ad�z�si be�ll�t�sok';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Mennyis�g kezdete';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Mennyis�g v�ge';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'Felhaszn�l�i regisztr�l�s be�ll�t�sai';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'Enged�lyezett a felhaszn�l�k regisztr�l�sa?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = '�j fi�kaktiv�l�sra van sz�ks�g?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Csendes (rejtett) felhaszn�l�i regisztr�l�st haszn�l?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'Enged�lyez�se eset�n nem kell �j fi�k l�trehoz�sakor kit�lteni�k a felhaszn�l�knak a felhaszn�l�nevet �s a jelsz�t. Ehelyett az e-mail c�m ker�l felhaszn�l�sra az �j fi�k l�trehoz�s�hoz, �s v�letlenszer� jelsz�t gener�l a rendszer. A regisztr�ci�s adatokat post�zza a v�s�rl�nak.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Tisztelt %s!

K�sz�nj�k, hogy regisztr�lt a(z) %s tartom�nyon. A felhaszn�l�i fi�kj�t elk�sz�tett�k.
Az al�bbi felhaszn�l�n�vvel �s jelsz�val l�phet be a(z) %s tartom�nyra:

Felhaszn�l�n�v - %s
Jelsz� - %s
';
	var $_PEAR_LOG_CRIT = 'Kritikus';
	var $_PEAR_LOG_ERR = 'Hiba';
	var $_PEAR_LOG_WARNING = 'Figyelmeztet�s';
	var $_PEAR_LOG_INFO = 'Inform�ci�';
	var $_PEAR_LOG_TIP = 'Inform�ci�';
	var $_PEAR_LOG_ALERT = 'Riaszt�s';
	var $_PEAR_LOG_EMERG = 'V�szhelyzet';
	var $_PEAR_LOG_NOTICE = 'K�zlem�ny';
	var $_PEAR_LOG_DEBUG = 'Hibakeres�s';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'Enged�lyezi a PayFlow Pro fizet�st?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'Jel�lje be a VeriSign PayFlow Pro haszn�lat�hoz a VirtueMart-tal.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'M�d tesztel�se ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'Tesztel�s alatt v�lassza az \'Igen\' lehet�s�get. Az �l� tranzakci�k enged�lyez�s�hez v�lassza a \'Nem\' lehet�s�get.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'VeriSign �ltal feldolgozott partnerazonos�t�';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'A partnerazonos�t�, amit az a hivatalos VeriSign-viszontelad� adott, aki bejegyezte �nt a PayFlow Pro szolg�ltat�sba';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'PayFlow Pro felhaszn�l�n�v';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'Ez az �n PayFlow Pro felhaszn�l�neve';
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