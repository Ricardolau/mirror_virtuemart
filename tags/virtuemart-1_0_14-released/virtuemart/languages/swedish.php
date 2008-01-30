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
	var $_PHPSHOP_MENU = 'Meny';
	var $_PHPSHOP_CATEGORY = 'Kategori';
	var $_PHPSHOP_CATEGORIES = 'Produktkategorier';
	var $_PHPSHOP_SELECT_CATEGORY = 'V�lj en kategori:';
	var $_PHPSHOP_ADMIN = 'Administration';
	var $_PHPSHOP_PRODUCT = 'Produkt';
	var $_PHPSHOP_LIST = 'Lista';
	var $_PHPSHOP_ALL = 'Alla';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Lista alla produkter';
	var $_PHPSHOP_VIEW = 'Visa';
	var $_PHPSHOP_SHOW = 'Visa';
	var $_PHPSHOP_ADD = 'L�gg till';
	var $_PHPSHOP_UPDATE = 'Uppdatera';
	var $_PHPSHOP_DELETE = 'Radera';
	var $_PHPSHOP_SELECT = 'V�lj';
	var $_PHPSHOP_SUBMIT = 'Submit';
	var $_PHPSHOP_RANDOM = 'Produkturval';
	var $_PHPSHOP_LATEST = 'Senaste produkterna';
	var $_PHPSHOP_HOME_TITLE = 'Hem';
	var $_PHPSHOP_CART_TITLE = 'Varukorg';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Kassa';
	var $_PHPSHOP_LOGIN_TITLE = 'Logga in';
	var $_PHPSHOP_LOGOUT_TITLE = 'Logga ut';
	var $_PHPSHOP_BROWSE_TITLE = 'Bl�ddra';
	var $_PHPSHOP_SEARCH_TITLE = 'S�k';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Ditt konto';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Navigation';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Avdelning';
	var $_PHPSHOP_INFO = 'Information';
	var $_PHPSHOP_BROWSE_LBL = 'Bl�ddra';
	var $_PHPSHOP_PRODUCTS_LBL = 'Produkter';
	var $_PHPSHOP_PRODUCT_LBL = 'Produkt';
	var $_PHPSHOP_SEARCH_LBL = 'S�k';
	var $_PHPSHOP_FLYPAGE_LBL = 'Detaljer';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'S�k produkt';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Namn';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Kategori';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Beskrivning';
	var $_PHPSHOP_CART_SHOW = 'Varukorg';
	var $_PHPSHOP_CART_ADD_TO = 'L�gg i varukorg';
	var $_PHPSHOP_CART_NAME = 'Namn';
	var $_PHPSHOP_CART_SKU = 'Artnr';
	var $_PHPSHOP_CART_PRICE = 'Pris';
	var $_PHPSHOP_CART_QUANTITY = 'Kvantitet';
	var $_PHPSHOP_CART_SUBTOTAL = 'Summa';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'L�gg till - ';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Leveransadress';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Din s�kning gav 0 resultat.<br />';
	var $_PHPSHOP_PRICE_LABEL = 'Pris: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'K�p';
	var $_PHPSHOP_NO_CUSTOMER = 'Du �r inte en registrerad anv�ndare. V�nligen fyll i dina uppgifter.';
	var $_PHPSHOP_DELETE_MSG = '�r du s�ker p� att du vill radera denna post?';
	var $_PHPSHOP_THANKYOU = 'Tack f�r din best�llning!';
	var $_PHPSHOP_NOT_SHIPPED = 'Ej levererat';
	var $_PHPSHOP_EMAIL_SENDTO = 'En orderbekr�ftelse har skickats till';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Vi beklagar,det finns ingen MOS-anv�ndare som du har m�jlighet att l�gga till i anv�ndarlistan f�r com_phpshop';
	var $_PHPSHOP_ERROR = 'ERROR';
	var $_PHPSHOP_MOD_NOT_REG = 'Ej registrerad modul.';
	var $_PHPSHOP_MOD_ISNO_REG = '�r ej en giltig phpShop-modul.';
	var $_PHPSHOP_MOD_NO_AUTH = 'Du har inte beh�righet till den valda modulen.';
	var $_PHPSHOP_PAGE_404_1 = 'Sidan existerar inte';
	var $_PHPSHOP_PAGE_404_2 = 'Det angivna filnamnet existerar inte. Kan inte hitta filen:';
	var $_PHPSHOP_PAGE_403 = 'Du saknar �tkomstr�ttigheter';
	var $_PHPSHOP_FUNC_NO_EXEC = 'Du saknar r�ttigheter att utf�ra';
	var $_PHPSHOP_FUNC_NOT_REG = 'Funktionen registrerades inte';
	var $_PHPSHOP_FUNC_ISNO_REG = ' �r inte en giltig MOS_com_phpShop funktion.';
	var $_PHPSHOP_ADMIN_MOD = 'Administration';
	var $_PHPSHOP_USER_LIST_MNU = 'Lista anv�ndare';
	var $_PHPSHOP_USER_LIST_LBL = 'Anv�ndarlista';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Anv�ndarnamn';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'F�rnamn Efternamn';
	var $_PHPSHOP_USER_LIST_GROUP = 'Grupp';
	var $_PHPSHOP_USER_FORM_MNU = 'L�gg till anv�ndare';
	var $_PHPSHOP_USER_FORM_LBL = 'L�gg till/uppdatera anv�ndarinformation';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Betalningsinformation';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Leveransadresser';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'L�gg till adress';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'No shipping addresses.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Egen adressben�mning';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'F�rnamn';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Efternamn';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Mellannamn';
	var $_PHPSHOP_USER_FORM_TITLE = 'Titel';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Anv�ndarnamn';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'L�senord';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Bekr�fta l�senord';
	var $_PHPSHOP_USER_FORM_PERMS = 'R�ttigheter';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Customer Number / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'F�retagsnamn';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Adressrad 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Adressrad 2';
	var $_PHPSHOP_USER_FORM_CITY = 'Stad';
	var $_PHPSHOP_USER_FORM_STATE = 'Stat/Provins/Region';
	var $_PHPSHOP_USER_FORM_ZIP = 'Postnummer';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_USER_FORM_PHONE = 'Telefonnummer';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Mobile Phone';
	var $_PHPSHOP_USER_FORM_FAX = 'Fax';
	var $_PHPSHOP_USER_FORM_EMAIL = 'E-post';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Lista moduler';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Moduler';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Namn';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'R�ttigheter';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Funktioner';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Listordning';
	var $_PHPSHOP_MODULE_FORM_MNU = 'L�gg till modul';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Ny modul';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Modultitel (f�r Toppmeny)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Modulnamn';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'R�ttigheter';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Sidhuvud';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Sidfot';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Visa modul i administrationsmenyn?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Visa order';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Modulbeskrivning';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'Spr�kkod';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Spr�kfil';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Funktionslista';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Funktioner';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Funktionsnamn';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Klassnamn';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Klassmetod';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'R�ttigheter';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'L�gg till funktion';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Funktionsinformation';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Funktionsnamn';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Klassnamn';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Klassmetod';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Funktionsr�ttigheter';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Funktionsbeskrivning';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Lista valutor';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Valutor';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'L�gg till valuta';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Valutanamn';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'Valutakod';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Lista l�nder';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'L�nder';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'L�gg till land';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Namn';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Landskod (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Landskod (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Visa stater';
	var $_PHPSHOP_STATE_LIST_LBL = 'Statlista f�r: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'L�gg till/uppdatera stat';
	var $_PHPSHOP_STATE_LIST_NAME = 'Stat namn';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'Stat kod (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'Stat kod (2)';
	var $_PHPSHOP_ADDRESS = 'Adress';
	var $_PHPSHOP_CONTINUE = 'Forts�tt';
	var $_PHPSHOP_EMPTY_CART = 'Din varukorg �r tom.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Pinga InterShipper-server';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'InterShipper-server ping ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'InterShipper Ping Failed';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'Ping av InterShipper-server lyckades';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Transport�r';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Respons<br/>Tid';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'sek.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Lista leveransmetod';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Aktiva leveransmetoder';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Leveransmetod';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Aktiv';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Expeditionsavgift';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Ledtid';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'enhetsfrakt';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'procent';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'dagar';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Tunga kollin';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Konfigurera leveranss�tt';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'L�gg till leveranss�tt';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Konfigurera leveranss�tt';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Uppdatera';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Leveranss�tt';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Aktivera';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Expeditionsavgift';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Ledtid';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'enhetsfrakt';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'procent';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'dagar';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Tunga kollin';
	var $_PHPSHOP_ORDER_MOD = 'Order';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Bekr�fta order';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Avbryt order';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Skriv ut order';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Radera order';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Lista order';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Order';
	var $_PHPSHOP_ORDER_LIST_ID = 'Ordernummer';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Orderdatum';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Senast �ndrad';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Status';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'Totalsumma';
	var $_PHPSHOP_ORDER_ITEM = 'Orderartiklar';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Order';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Ordernummer';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Orderdatum';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Orderstatus';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Kundinformation';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Betalningsinformation';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Leveransinformation';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Faktureras till';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Levereras till';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Namn';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'F�retag';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Adressrad 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Adressrad 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Stad';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Stat/Provins/Region';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'Postnummer';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Land';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Telefonnummer';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Fax';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'E-post';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Orderartiklar';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Antal';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Ant';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'Artikelnr';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Pris';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Totalsumma';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'Summa';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'Moms';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Leverans- och expeditionsavgifter';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Leveransavgift';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Betalningsmetod';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Kontonamn';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Kontonummer';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Utg�ngsdatum';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Betalningshistorik';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Leveransinformation';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Betalningsinformation';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Transportf�retag';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Leveranss�tt';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Leveransdatum';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Leveranskostnad';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Lista orderstatustyper';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'L�gg till orderstatustyp';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Orderstatuskod';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Orderstatusnamn';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Orderstatus';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Orderstatuskod';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Orderstatusnamn';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Listordning';
	var $_PHPSHOP_PRODUCT_MOD = 'Produkter';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Aktuell produkt';
	var $_PHPSHOP_CURRENT_ITEM = 'Aktuell artikel';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Varulager';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Visa lagerstatus';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Pris';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Lagerv�rde';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Vikt';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Lista produkter';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Produkter';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Produktnamn';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'Artnr';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Visa artiklar';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Search Product';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'modyfied';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'with price modyfied';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'without price';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'After';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Before';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'L�gg till produkt';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Konfiguera denna produkt';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'F�rhandsgranska produktsida';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'L�gg till artikel';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'L�gg till ytterligare en artikel';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Ny produkt';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Uppdatera produkt';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Produktinformation';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Produktstatus';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Produktdimensioner och vikt';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Produktbilder';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Ny artikel';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Uppdatera artikel';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Artikelinformation';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Artikelstatus';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Artikeldimensioner och vikt';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Artikelbilder';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'G� tillbaka till huvudprodukt';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'F�r att uppdatera aktuell bild, skriv in k�lla till ny bild.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Skriv ';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Produktartiklar';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Artikelattribut';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = '�r du s�ker p� att du vill radera denna produkt\\noch tillh�rande artiklar?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = '�r du s�ker p� att du vill radera denna artikel?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = '�terf�rs�ljare';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Tillverkare';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'Artnr';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Namn';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Kategori';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Butikspris';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Product Price (Net)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Beskrivning';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Kort beskrivning';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'I lager';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'Inkommande';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Tillg�ngligt';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'Kampanjvara';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Rabatttyp';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Publicerad?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'L�ngd';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Bredd';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'H�jd';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'M�ttenhet';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Vikt';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'M�ttenhet';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Miniatyr';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Stor bild';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'pounds';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'inches';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Unit';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'piece';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Units in Packaging';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Here you can fill in a number unit in packaging. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Units in Box';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Here you can fill in a number unit in box. (max. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'L�gg till produkt';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Uppdatera produkt';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'L�gg till artikel';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Uppdatera artikel';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Anv�nd CSV-uppladdning';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Produktmapp';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Lista kategorier';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Produktkategorie';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'L�gg till kategori';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Kategoriinformation';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'KategoriNamn';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'F�r�lderkategori';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Kategoribeskrivning';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Publicera?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Beskrivningssida f�r kategori';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Lista attribut';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Attributlista f�r';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Attributnamn';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Listordning';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'L�gg till attribut';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Attribut';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Nytt attribut f�r produkt';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Uppdatera attribut f�r produkt';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Nytt attribut f�r artikel';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Uppdatera Attribut f�r Artikel';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Attributnamn';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Listordning';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Lista priser';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Prislista';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Pris f�r';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'GruppNamn';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Pris';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Valuta';
	var $_PHPSHOP_PRICE_FORM_MNU = 'L�gg till pris';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Prisinformation';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Nytt pris f�r produkt';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Uppdatera pris f�r produkt';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Nytt pris f�r artikel';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Uppdatera Pris f�r Artikel';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Pris';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Kundgrupp';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Rapporter';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Individuell produktlistning';
	var $_PHPSHOP_RB_SALE_TITLE = 'F�rs�ljningsrapport';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = '�versikt f�r�ljningsaktivitet';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Intervall';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'M�nadsvis';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Veckovis';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Dagligen';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Denna m�nad';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'F�reg�ende m�nad';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'Senaste 60 dagarna';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'Senaste 90 dagarna';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Starta p�';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Sluta p�';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Visa urval';
	var $_PHPSHOP_RB_REPORT_FOR = 'Rapportera f�r ';
	var $_PHPSHOP_RB_DATE = 'Datum';
	var $_PHPSHOP_RB_ORDERS = 'Best�llningar';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Totalt antal s�lda artiklar';
	var $_PHPSHOP_RB_REVENUE = 'Oms�ttning';
	var $_PHPSHOP_RB_PRODLIST = 'Produktlista';
	var $_PHPSHOP_SHOP_MOD = 'Butik';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Bild';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Pris';
	var $_PHPSHOP_ORDER_STATUS_P = 'Under behandling';
	var $_PHPSHOP_ORDER_STATUS_C = 'Bekr�ftad';
	var $_PHPSHOP_ORDER_STATUS_X = 'Avbruten';
	var $_PHPSHOP_ORDER_BUTTON = 'Order';
	var $_PHPSHOP_SHOPPER_MOD = 'Kund';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Lista kunder';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Kundlista';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Anv�ndarnamn';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Namn Efternamn';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Grupp';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'L�gg till kund';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Kundinformation';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Betalningsinformation';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Information';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Leveransinformation';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'L�gg till adress';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Egen Adressben�mning';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Anv�ndarnamn';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'F�rnamn';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Efternamn';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Mellannamn';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Titel';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Kundnamn';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'L�senord';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Bekr�fta l�senord';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Kundgrupp';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'F�retagsnamn';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Adressrad 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Adressrad 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Stad';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Stat/Provins/Region';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'Postnummer';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Telefonnummer';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Mobile phone';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Fax';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'E-post';
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
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Lista kundgrupper';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Kundgrupper';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Gruppnamn';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Gruppbeskrivning';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Ny kundgrupp';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'L�gg till kundgrupp';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Gruppname';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Gruppbeskrivning';
	var $_PHPSHOP_STORE_MOD = 'Butik';
	var $_PHPSHOP_STORE_FORM_MNU = '�ndra butik';
	var $_PHPSHOP_STORE_FORM_LBL = 'Butiksinformation';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Kontaktinformation';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Bild';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Ladda upp bild';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Butiksnamn';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'F�retagsnamn';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Adressrad 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Adressrad 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'Stad';
	var $_PHPSHOP_STORE_FORM_STATE = 'Stat/Provins/Region';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_STORE_FORM_ZIP = 'Postnummer';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Butikskategori';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Efternamn';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'F�rnamn';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Mellannamn';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Titel';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Telefon 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Telefon 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Fax';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'E-post';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'S�kv�g f�r bilder';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Beskrivning';
	var $_PHPSHOP_PAYMENT = 'Betalning';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Lista betalningsmetoder';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Betalningsmetoder';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Namn';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Kod';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Rabatt';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Kundgrupp';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Betalningsmetod';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'L�gg till betalningsmetod';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Ny betalningsmetod';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Ben�mning';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Kundgrupp';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Rabatt';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Kod';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Listordning';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Typ av betalningsmetod';
	var $_PHPSHOP_TAX_MOD = 'Moms';
	var $_PHPSHOP_TAX_RATE = 'Momssats';
	var $_PHPSHOP_TAX_LIST_MNU = 'Lista momssatser';
	var $_PHPSHOP_TAX_LIST_LBL = 'Momssatser';
	var $_PHPSHOP_TAX_LIST_STATE = 'Regional moms';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Statlig moms';
	var $_PHPSHOP_TAX_LIST_RATE = 'Momssats';
	var $_PHPSHOP_TAX_FORM_MNU = 'L�gg till momssats';
	var $_PHPSHOP_TAX_FORM_LBL = 'L�gg till information om momssats';
	var $_PHPSHOP_TAX_FORM_STATE = 'Regional moms';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Statlig moms';
	var $_PHPSHOP_TAX_FORM_RATE = 'Momssats (f�r 25% => fyll i 0.25)';
	var $_PHPSHOP_VENDOR_MOD = 'S�ljare';
	var $_PHPSHOP_VENDOR_ADMIN = 'S�ljare';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Lista s�ljare';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'S�ljare';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'S�ljarens namn';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Admin';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'L�gg till s�ljare';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'L�gg till information';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'S�ljarinformation';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Kontaktinformation';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Stor bild';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Ladda upp bild';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = '�terf�rs�ljarnamn';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'S�ljarens f�retagsnamn';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Adressrad 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Adressrad 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Stad';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Landskap/Provins/Region';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'Postnummer';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Betalningsmedel/valuta';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'S�ljarkategori';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Efternamn';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'F�rnamn';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Mellannamn';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Titel';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Telefon 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Telefon 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Fax';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'E-post';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'S�kv�g f�r bild';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Beskrivning';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Lista s�ljarkategorier';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'S�ljarkategorier';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Kategorinamn';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Kategoribeskrivning';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'S�ljare';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'L�gg till s�ljarkategori';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'S�ljarkategori';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Kategoriinformation';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Kategorinamn';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Kategoribeskrivning';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Tillverkare';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Tillverkare';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Lista tillverkare';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Tillverkare';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Namn';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Administration';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'L�gg till tillverkare';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'L�gg till information';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = ' Information om tillverkare ';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Tillverkarens namn';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Tillverkarkategori';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'E-post';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'URL till tillverkares hemsida';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Beskrivning';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Lista tillverkarkategorier';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Tillverkarkategorier';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Kategorinamn';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Kategoribeskrivning';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Tillverkare';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'L�gg till tillverkarkategori';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Tillverkarkategori';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Kategoriinformation';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Kategorinamn';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Kategoribeskrivning';
	var $_PHPSHOP_HELP_MOD = 'Hj�lp (engelska)';
	var $_PHPSHOP_CART_ACTION = 'Uppdatera';
	var $_PHPSHOP_CART_UPDATE = 'Uppdatera antal';
	var $_PHPSHOP_CART_DELETE = 'Ta bort produkten fr�n varukorgen';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Pris';
	var $_PHPSHOP_PRODUCT_CALL = 'Ring f�r prisuppgift';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'F�reg�ende';
	var $_PHPSHOP_PRODUCT_NEXT = 'N�sta';
	var $_PHPSHOP_CART_TAX = 'Moms';
	var $_PHPSHOP_CART_SHIPPING = 'Frakt och expeditionskostnad';
	var $_PHPSHOP_CART_TOTAL = 'Totalt';
	var $_PHPSHOP_CHECKOUT_NEXT = 'N�sta';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'Registrera';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Fakturainformation';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'F�retag';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Namn';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Adress';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'E-post';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Leveransinformation';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'F�retag';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Namn';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Adress';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Betalningsinformation';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Namn p� kort';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Betalningsmetod';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Kreditkortsnummer';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Utg�ngsdatum';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Slutf�r order';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'Information som beh�vs n�r betalning via kreditkort �r valt.';
	var $_PHPSHOP_ZONE_MOD = 'Leveranszon';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Lista �ver zoner';
	var $_PHPSHOP_ZONE_FORM_MNU = 'L�gg till zon';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Tilldela zoner';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Land';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Nuvarande zon';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Tilldela till zon';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Uppdatera';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Tilldela zoner';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Zonnamn';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Zonbeskrivning';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Zonkostnad per f�rem�l';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Zonkostnadstak';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Zonlista';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Zonnamn';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Zonbeskrivning';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = ' Zonkostnad per f�rem�l ';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Zonkostnadstak';
	var $_PHPSHOP_LOGIN_FIRST = 'Var v�nlig och logga in p� denna sida (anv�nd Login-modulen) f�rst.<br>Tack.';
	var $_PHPSHOP_STORE_FORM_TOS = 'K�pvillkor';
	var $_PHPSHOP_AGREE_TO_TOS = 'Var v�nlig och acceptera k�pvillkoren f�rst.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Jag godk�nner k�pvillkoren';
	var $_PHPSHOP_LEAVE_BLANK = '(l�mna TOM om du har <br />ingen individuell php-fil f�r det!)';
	var $_PHPSHOP_RETURN_LOGIN = 'Logga in f�r att genomf�ra k�pet';
	var $_PHPSHOP_NEW_CUSTOMER = 'Ny kund? Fyll i dina kontouppgifter nedan';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Kundsida - ';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Orderinformation';
	var $_PHPSHOP_ACC_UPD_BILL = 'H�r kan du uppdatera dina uppgifter.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'H�r kan du l�gga till och �ndra adresser.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Faktureringsinformation';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Leveransinformation';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Inga ordrar att visa';
	var $_PHPSHOP_ACC_BILL_DEF = 'Faktureringsadress �r leveransadress';
	var $_PHPSHOP_SHIPTO_TEXT = 'Du kan l�gga till addresser till ditt konto. Ange ett eget namn f�r adresserna du har angivit.';
	var $_PHPSHOP_CONFIG = 'Konfiguration';
	var $_PHPSHOP_USERS = 'Anv�ndare';
	var $_PHPSHOP_IS_CC_PAYMENT = '�r det kreditkortsbetalning?';
	var $_PHPSHOP_SHIPPING_MOD = 'Leverans';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Leverans';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Lista transportfirmor';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Transportfirma';
	var $_PHPSHOP_RATE_LIST_MNU = 'Lista leverandsmetoder';
	var $_PHPSHOP_RATE_LIST_LBL = 'Leveransmetod';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Namn';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Listordning';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'L�gg till transportfirma';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'L�gg till/�ndra transportfirma';
	var $_PHPSHOP_RATE_FORM_MNU = 'L�gg till leveransmetod';
	var $_PHPSHOP_RATE_FORM_LBL = 'L�gg till/�ndra en leveransmetod';
	var $_PHPSHOP_RATE_FORM_NAME = 'Leveransmetodsbeskrivning';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Transportfirma';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'Postnummer fr�n';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Postnummer till';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'L�gsta vikt';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'H�gsta vikt';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Avgift';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Din paketavgift';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Valuta/betalningsmetod';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'Momssats';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Listordning';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Transportfirma';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Leveransmetodsbeskrivning';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Vikt fr�n ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... till';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Namn';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Listordning';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'FEL: Transportfirma-ID finns redan.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'FEL: V�lj en transportfirma.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'FEL: Minst en leveransmetod finns associerad med transportfirman. Ta bort dessa f�rst.';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'FEL: Kunde inte hitta en transportfirma med detta ID.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'FEL: V�lj en transportfirma.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'FEL: Kunde inte hitta en transportfirma med detta ID.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'FEL: En leveransmetodsbeskrivning kr�vs.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'FEL: Destinationslandet �r ej godk�nt. Flera l�nder kan avdelas med ";".';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'FEL: En l�gsta vikt �r beg�rd';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'FEL: En h�gsta vikt �r beg�rd';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'FEL: Den l�gsta vikten m�ste vara l�gre �n den h�gsta vikten';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'FEL: En leveransmetod efterfr�gas.';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'FEL: V�lj en valuta/betalningsmetod';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'FEL: En leveransmetod efterfr�gas.';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'v�nligen v�lj';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Transportfirma';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Leveransmetod';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Pris';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-ingen-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Kreditkort';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Anv�nder betalningshanterare';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Bankkort';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Postf�rskott';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'V�nligen v�lj en leveransadress!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'V�nligen v�lj en leveransmetod!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'v�nligen v�lj en betalningsmetod!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'G� igenom alla uppgifter och godk�nn sedan k�pet!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'V�nligen v�lj en leveransmetod!';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'V�nligen v�lj ytterligare en leveransmetod!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'V�nligen v�lj en betalningsmetod.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'V�nligen fyll i ditt kreditkortsnummer.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'v�nligen och fyll i namnet p� kreditkortet.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'Kreditkortsnumret du angivit �r inte godk�nt.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'V�nligen fyll i utg�ngsm�nad f�r kreditkortet';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'V�nligen fyll i utg�ngs�r f�r kreditkortet.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'Utg�ngsdatumet �r ogiltigt.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'V�nligen v�lj en leveransadress.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Ogiltligt kontonummer.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'Din varukorg �r tom!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'FEL: V�nligen v�l en transportfirma!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'FEL: Den valda fraktmetoden hittades ej!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'FEL: Din levernasadress hittades ej!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'FEL: det finns ingen kreditkortsdata...';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'FEL: Kreditkortsnummer hittades inte!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Kreditkortsnumret du har angivit �r ett testnummer!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'Anv�ndarnamnet finns inte i v�r databas!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Du har inte angivit namnet p� den person som �r registrerad p� bankkonto.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Du har inte angivit ditt IBAN-nummer.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Du har inte angivit ditt bankkontonummer.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Du har inte angivit din/ditt clearingnummer.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Du har inte angivit din banks namn.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Utcheckningen kr�ver ett giltligt steg!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Betalningsmetod sparad f�r senare anv�ndning.<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Du har inte kommit upp till l�gsta orderv�rde �nnu.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'L�gsta orderv�rde �r: xxxx';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Kreditkortsbetalning';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'Annan betalningsmetod';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'V�nligen v�lj en betalningsmetod:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'L�gsta orderv�rde f�r din aff�r';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Bankkontoinformation';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Kontonummer';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'Clearingnummer';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Banknamn';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Kontoansvarig';
	var $_PHPSHOP_MODULES = 'Moduler';
	var $_PHPSHOP_FUNCTIONS = 'Funktioner';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Specialprodukter';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'V�nligen fyll i �vrig orderinformation. (valfritt)';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Kundens notering';
	var $_PHPSHOP_INCLUDING_TAX = '(inkl. $tax % moms)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'V�nligen v�lj en produkt';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Produkt';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Nedladdningsarea';
	var $_PHPSHOP_DOWNLOADS_START = 'Starta nedladdning';
	var $_PHPSHOP_DOWNLOADS_INFO = 'V�nligen ange din nedladdningskod och klicka p� \'Starta nedladdning\'.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Din nedladdningskod �r tyv�rr utg�ngen.';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Du har tyv�rr f�rbrukat tilldelat antal nedladdningar.';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Ogiltlig nedladdningskod!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Kunde ej skicka meddelande till ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Meddelande skickat till ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Nedladdningsinformation';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'filerna du har best�llt �r klara f�r nedladdning';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'V�nligen ange f�ljande nedladdningskoder i v�r Nedladdningsarea: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'maximalt antal nedladdningar per fil �r: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Ladda ner i {expire} dagar efter f�rsta nedladdningen.';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Fr�gor? Problem?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Nedladdningsinformation fr�n ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'Nedladdningsbar produkt?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Tack f�r din betalning. Transaktionen lyckades. 
                                                                         Du kommer att f� ett bekr�ftelsemail av PayPal. 
                                                                         Du kan nu forts�tta eller logga in p� <a href=http://www.paypal.com>www.paypal.com</a> f�r att se transaktionsdetaljer.';
	var $_PHPSHOP_PAYPAL_ERROR = 'An error occured while processing your transaction. The status of your order could not be updated.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Tack f�r att du har handlat hos oss. Din orderinformation f�ljer.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'V�lkommen �ter!';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Fr�gor? Problem?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'F�ljande order togs emot.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Se ordern genom att klicka p� l�nken nedan.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Negative quantities are not allowed.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Please enter a valid quantity for this item.';
	var $_PHPSHOP_CART_STOCK_1 = 'Det valda �verstiger antal p� lager. ';
	var $_PHPSHOP_CART_STOCK_2 = 'Vi har $product_in_stock st p� lager f�r n�rfarande. ';
	var $_PHPSHOP_CART_STOCK_3 = 'Klicka h�r f�r att placeras p� v�r v�ntelista.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'V�nligen v�lj en specialprodukt fr�n detaljsidan!';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'ingen';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Herr';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Fru';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Dr.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof.';
	var $_PHPSHOP_DEFAULT = 'Standard';
	var $_PHPSHOP_AFFILIATE_MOD = 'Partneradministration';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Lista partnerf�retag';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Partners';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Namn';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Aktiv';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Rate';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'M�nadstotal';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'M�nadsprovision';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Listordning';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'E-postutskick partners';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'E-postutskick partners';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'Till vem? (* = Alla)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Din e-postadress';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = '�mne';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Inkludera aktuell statistik';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Provisionsniv� (procent)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Aktiv?';
	var $_PHPSHOP_DELIVERY_TIME = 'Ber�knad leveranstid';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Leveransinformation';
	var $_PHPSHOP_MORE_CATEGORIES = 'fler kategorier';
	var $_PHPSHOP_AVAILABILITY = 'Tillg�nglighet';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Denna produkt finns f�r n�rvarande inte p� lager.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Finns p� lager from:';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Summering';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Statistik';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Kunder';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'aktiva produkter';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'inaktiva produkter';
	var $_PHPSHOP_STATISTIC_SUM = 'Summa';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Nya ordrar';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Nya kunder';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'V�nligen ange din e-postadress nedan f�r att bli meddelad n�r produkten �ter �r i lager.
                                          Vi kommer inte att anv�nda din e-postadress i n�got annat syfte �n att 
                                          tala om f�r dig n�r produkten �ter �r i lager.<br /><br />Tack!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Tack f�r att du v�ntade! <br />Vi h�r av oss s� fort varan kommer in.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Meddela mig!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'F�rhandsgranska utskrift.';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Var v�nlig och v�lj Authorize.net eller CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = 'Status p� konfigurationsfil:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = '�r skrivbar';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = '�r inte skrivbar';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Global';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'K�lla & URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Hemsida';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Leverans';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Kassa';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Nedladdningar';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Betalningss�tt';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Anv�nd bara som produktkatalog';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Om du v�ljer detta s� inaktiveras alla funktioner i varukorgen.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Visa priser';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Visa priser inkl. moms.';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'St�ller in huruvida kunden ser priset inkl. eller exkl. moms.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Kryssa i f�r att visa priser.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Virtuell moms';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Detta avg�r om produkter utan vikt momms�tts eller ej. Modifiera ps_checkout.php->calc_order_taxable() f�r att anpassa detta.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Momsl�ge:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Baserat p� leveransadress';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Baserat p� tillverkarens adress';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Detta avg�r vilken momssats som anv�nds f�r att r�kna ut moms:<br /> 
                                                  <ul><li>den som g�ller i s�ljarens region/land</li><br/> 
                                                  <li>eller den som g�ller i k�parens region/land.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Aktivera multipla momssatser.';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'V�lj detta om du har produkter med en annan momssats (t.ex 6% f�r b�cker och mat, 12% f�r annat)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'R�kna av eventuell rabatt exkl. moms och frakt?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'M�jligg�r betygss�ttningsystem';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'I l�ge "P�" till�ts kunderna att <strong>betygs�tta produkter</strong> och att <strong>skriva recensioner</strong> om dem. <br /> 
                                           D�rmed kan kunden tipsa andra om sina erfarenheter av produkten.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'R�knar av eventuell rabatt innan moms och fraktkostanader adderas till ordern.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Kunder kan l�mna bankkontoinformation.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Kryssa i om dina kunder ska ha m�jlighet att l�mna bankkontoinformation n�r de registrerar sig.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Kunder v�ljer stat/region.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = ' Bocka f�r om dina kunder ska ha m�jligheten att v�lja stat/region n�r de registrerar sig.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Kunden m�ste godk�nna anv�ndaravtal.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Kryssa i om du vill att bes�karen(kunden) ska g� med p� ditt anv�ndaravtal innan han/hon registrerar sig.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Kontrollera lagersaldo.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Kryssa i om du vill att lagersaldo ska kontrolleras n�r en vara l�ggs i varukorgen. 
                                                                                                    Om detta �r inst�llt kan kunden inte l�gga till fler produkter till varukorgen �n vad som finns i lager.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Aktivera partnerprogram.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Detta aktiverar partnersp�rning i webbutiken. Aktivera detta om du har lagt in partners.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Format p� orderbekr�ftelse:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Endast text';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Detta avg�r format p�  orderbekr�ftelse:<br />
                                                                                          <ul><li>som ett enkelt textmail</li>
                                                                                          <li>eller som ett html-mail med bilder.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Till�t butiksadministration f�r butiksanv�ndare';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'Med detta aktiverat m�jligg�rs administration av butiken f�r anv�ndare som 
                                              har befogenhet f�r butiksadministration men saknar tillg�ng till administrat�rsgr�nssnittet.';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'URL till din hemsida. Vanligtvis identisk med URL till din Mamboinstallation (med ett / p� slutet)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'S�ker URL';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'S�ker URL till din hemsida. (https - med ett / p� slutet)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'Komponent';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'URL till komponenten mambo-phpShop. (med ett / p� slutet)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'Bilder';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'URL till bildkatalogen f�r komponenten mambo-phpShop.(med ett / p� slutet)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'Administration';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'S�kv�g till komponenten mambo-phpShop.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'Klasser';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'S�kv�g till katalogen classes.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'Sidor';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'S�kv�g till katalogen html.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'Bilder';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'S�kv�g till katalogen shop_image.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'Hemsida';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Detta �r shoppens startsida.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'ERRORPAGE';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'This is the default page for displaying error messages.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'Debug-sida';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Detta �r standardsidan f�r debug-meddelanden.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'Debug?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'Sl�r p� debug-funktionen l�ngst ner p� sidan som visar data f�r att hj�lpa vid fels�kning.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'Produktsida';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'S�kv�g till mallen f�r sidan som visar produktdetaljer.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Kategorimall';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'S�kv�g till mallen f�r sidan som listar produkte ri en kategori.<br /> 
                                                         Du kan skapa en egen mall genom att anpassa befintliga mallfiler <br /> 
                                                         (som finns i mappen <strong>KOMPONENTS�KV�G/html/templates/</strong> och vars filnamn b�rjar med browse_)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Antal produkter i rad';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Detta definierar antal produkter som visas i rad p� samma sida. <br />';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = '"no image" image';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Denna bild kommer att visas n�r det inte finns en bild f�r produkten.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'S�k rader';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Specificerar antal rader per sida som visas i s�kresultat.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'S�k f�rg 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Specificerar f�rgen p� udda rader i en resultatlista. (dvs. varannan rad)';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'S�K F�RG 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Specificerar f�rgen p� j�mna rader i en resultatlista.(dvs. varannan rad)';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'Max antal rader';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Specificerar max antal rader i orderlistan.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Visa sidfot ';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Visar en bild i sidfot med texten ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'V�lj leveranstyp f�r din butik';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Standard fraktmodul med individuellt inst�llda transportfirmor och leveransmetoder. <strong>REKOMMENDERAS!</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = 'Zone Shipping Module Country version 1.0<br />
                                                                                                              F�r mer information om denna modul bes�k <a href="http://ZephWare.com">http://ZephWare.com</a><br />
                                                                                                              eller kontakta <a href="mailto:zephware@devcompany.com">zephware@devcompany.com</a><br />';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = 'UPS fraktverktyg';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'Beh�rightetskod';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Din beh�righetskod fr�n UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'Anv�ndarid';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'Ditt anv�ndarid fr�n UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'L�senord';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'L�senord f�r ditt UPS-konto';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'InterShipper modul. V�lj detta om du har ett konto p� Intershipper.com';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Inaktivera val av leveranss�tt. V�lj detta om dina kunder k�per nedladdningsbara varor som inte beh�ver skickas.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'L�senord';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'L�senord f�r ditt konto p� Intershipper.com';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'E-post';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'E-postadress f�r ditt konto p� Intershipper,com';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'Kodnyckel';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Data i databasen krypteras med denna nyckel, d�rf�r �r det viktigt att kodnyckeln skyddas.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Aktivera orderg�ngslisten';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Kryssa i f�r att aktivera orderg�ngslisten som underl�ttar best�llningen f�r kunden ( 1 - 2 - 3 - 4 med bilder).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'V�lj best�llningsproceduren f�r din butik';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Standard :</strong><br/> 
                1. Beg�ran om leveransdress.<br /> 
                2. Beg�ran om leveranss�tt.<br /> 
                3. Beg�ran om betalningss�tt.<br /> 
                4. Slutf�r best�llningen.';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Process 2:</strong><br/> 
                 1. Beg�ran om leveransadress.<br /> 
                2. Beg�ran om betalningss�tt.<br /> 
                3. Slutf�r best�llningen.';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Process 3:</strong><br/> 
                1. Beg�ran om leveranss�tt.<br /> 
                2. Beg�ran om betalningss�tt.<br /> 
                3. Slutf�r best�llningen.';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Process 4:</strong><br/> 
                1. Beg�ran om betalningss�tt.<br /> 
                2. Slutf�r best�llningen.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Aktivera nedladdningar';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Aktiverar nedladdningsarea f�r att s�lja nedladdningsbara produkter.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Orderstatus som m�jligg�r nedladdning';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'V�lj den orderstatus som kunden meddelas via e-post vid nedladdning.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Orderstatus som om�jligg�r nedladdningar.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'V�lj orderstatus som sp�rrar nedladdningar.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'Nedladdningsmapp';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'S�kv�gen till filerna som kan laddas ner. (med / p� slutet!)<br>
          <span class="message">F�r din butiks s�kerhet: Om det �r m�jligt s� anv�nd en mapp N�GONSTANS UTANF�R WEBBPLATSENS ROTMAPP</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Maximal nedladdning';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'S�tter gr�ns f�r antal nedladdningar som kan ske med ett nedladdnings-ID, (f�r en best�llning)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Nedladdningen har upph�rt att g�lla';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'S�tter tidsgr�ns <strong>i sekunder</strong> som nedladdningen �r m�jlig f�r kunden. 
    Detta intervall b�rjar i och med f�rsta nedladdningen! N�r intervallet har passerats, s� upph�r nedladdnings-ID\'t att g�lla.<br />Notera : 86400s=24h.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Anv�nd IPN-betalning genom PayPal';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Kryssa i om du vill till�ta dina kunder att anv�nda PayPal som betalningss�tt.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'PayPal E-post:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Din butiks e-post f�r PayPal betalningar. Anv�nds �ven f�r mottagna mail.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Orderstatus f�r genomf�rda transaktioner';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'V�lj orderstatus som aktuell best�llning s�tts till om IPN-betalning via PayPal g�r igenom. 
    Om du anv�nder nedladdningsfunktionen:  v�lj den status som aktiverar nedladdningen (d� f�r kundne genast e-post med nedladdnings-ID).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Orderstatus f�r misslyckade transaktioner';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'V�lj en orderstatur f�r misslyckade PayPal-transaktioner.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Anv�nd betalning via PayMate';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Kryssa i om du vill l�ta dina kunder anv�nda Australian PayMate som betalningss�tt.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'Anv�ndarnamn:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Ditt anv�ndarkonto f�r PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Anv�nd betalning genom Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Kryssa i om du vill l�ta dina kunder anv�nda Authorize.net som betalningss�tt.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Testl�ge';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Klicka \'JA\' vid testning. Klicka \'NEJ\' f�r att anv�nda riktiga transaktioner.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'JA';
	var $_PHPSHOP_ADMIN_CFG_NO = 'NEJ';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Anv�ndarnamn';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = '�r det h�r ditt Authorize.Net Login ID';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Transaktionsnyckel';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = '�r det h�r Authorize.net Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Autentiseringstyp';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'Det h�r �r Authorize.Net authentication typen.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Anv�nd CyberCash';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Kryssa i f�r att anv�nda CyberCash.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'Anv�ndar-ID';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'Anv�ndar-ID f�r CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'Nyckel';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'Anv�ndarnyckel f�r CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'URL till CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'URL som du har f�tt av Cybercash f�r s�ker betalning';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'Autentiseringstyp';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'Autentiseringstyp mottagen av CyberCash';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Avancerad s�kning';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'S�k alla kategorier';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'S�k all produktinformation';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Endast produktnamn';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Endast tillverkare';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Endast produktdetaljer';
	var $_PHPSHOP_SEARCH_AND = 'OCH';
	var $_PHPSHOP_SEARCH_NOT = 'INTE';
	var $_PHPSHOP_SEARCH_TEXT1 = ' i det f�rsta rullf�nstet kan du v�lja en kategori f�r att begr�nsa din s�kning. 
        i det andra rullf�rnstret kan du v�lja att endast s�ka p� en del av produktinformationen (tex namn). 
        N�r du har gjort dessa val (eller anv�nt dig av standardinst�llningen ALLA), kan du skriva in ditt s�kord. ';
	var $_PHPSHOP_SEARCH_TEXT2 = ' Du kan f�rfina din s�kning genom att s�ka efter fler ord och anv�nda dig av funktionerna 
            OCH samt INTE. Vid anv�ndning av OCH betyder det att b�da orden m�ste finnas med f�r att produkten ska finnas med i 
                tr�fflistan. Vid anv�ndning av INTE betyder det att produkten syns i tr�fflistan endast om f�rsta ordet finns med, men inte det andra ordet.';
	var $_PHPSHOP_ORDERBY = 'Sortera efter';
	var $_PHPSHOP_CUSTOMER_RATING = 'Genomsnittligt konsumentbetyg';
	var $_PHPSHOP_TOTAL_VOTES = 'Antal r�ster';
	var $_PHPSHOP_CAST_VOTE = 'R�sta!';
	var $_PHPSHOP_RATE_BUTTON = 'Betygs�tt';
	var $_PHPSHOP_RATE_NOM = 'Betyg';
	var $_PHPSHOP_REVIEWS = 'Konsumentrecensioner';
	var $_PHPSHOP_NO_REVIEWS = 'Det finns �nnu ingen recension p� denna produkt.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Recensera produkten';
	var $_PHPSHOP_REVIEW_LOGIN = 'Logga in f�r att skriva en recension.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'V�nligen betygs�tt produkten f�r att fullborda din anm�lan!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'V�nligen skriv ner fler �sikter i din recension. Minsta antal tecken: 100';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'V�nligen f�rkorta din recension. Maximalt antal tecken: 2000';
	var $_PHPSHOP_WRITE_REVIEW = 'Recensera produkten!';
	var $_PHPSHOP_REVIEW_RATE = 'F�rst: Betygs�tt produkten. V�lj ett betyg mellan 0 (l�gst) och 5 stj�rnor (h�gst).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Skriv nu en kort recension....(min. 100, max. 2000 tecken) ';
	var $_PHPSHOP_REVIEW_COUNT = 'Anv�nda tecken: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Skicka recension';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Du har redan skrivit en recesion f�r den h�r produkten. Tack';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Tack f�r din recension.';
	var $_PHPSHOP_COMMENT = 'Kommentar';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'L�gg till kreditkortstyp';
	var $_PHPSHOP_CREDITCARD_NAME = 'Kreditkortsnamn';
	var $_PHPSHOP_CREDITCARD_CODE = 'Kreditkort � Kortkod';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Kreditkortstyp';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Kreditkortstyper';
	var $_PHPSHOP_UDATE_ADDRESS = 'Uppdatera adress';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Forts�tt handla';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Ordern �r registrerad';
	var $_PHPSHOP_ORDER_LINK = 'Klicka h�r f�r att se orderspecifikation.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'orderstatus f�r ordernummer {order_id} har uppdaterats.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'Ny status �r:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'F�lj l�nken f�r att se din best�llning (eller kopiera l�nken till webbl�sarens adressf�lt):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Uppdaterad orderstatus: Din order {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Meddela kund?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Uppdatera orderstatus f�rst!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Rabatt p� produktens standardpris (%)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Positivt v�rde: Om produkten saknar ett angivet pris f�r denna kundkategori minskas priset med X %. Ett negativt v�rde har motsatt effekt.';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Rabatt';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Rabattlista';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'L�gg till/redigera rabatt';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Rabatt';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Ange storleken p� rabatten';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Rabattyp';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Procent';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Summa';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Skall v�rdet vara en procentsats eller en summa?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Startdatum f�r rabattperiod';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Anger startdatum f�r den dag d� rabattperioden b�rjar';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Slutdatum f�r rabattperioden';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Anger slutdatum f�r rabattperioden';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Du kan anv�nda rabattformul�ret f�r att l�gga till rabatter!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Du sparar';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Visa bild i full storlek';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Valutavisnings stil';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Valuta symbol';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Du kan ocks� anv�nda HTML kod h�r (t.ex. &euro;,&pound;,&yen;,...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Decimaler';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Antal decimaler (kan vara 0)<br><b>Avrundas om v�rdet har annat antal decimaler</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Decimaltecken';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Tecken att anv�nda som decimaltecken';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Tusentals separator';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Tecken som anv�nds f�r att separera tusental (kan vara tom)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Positivt format';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Visa format som anv�nds f�r att visa positiva v�rden.<br>(Symb st�r f�r valuta symbolen)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Negativt format';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Visa format som anv�nds f�r att visa negativa v�rden.<br>(Symb st�r f�r valuta symbolen)';
	var $_PHPSHOP_OTHER_LISTS = 'Andra produktlistor';
	var $_PHPSHOP_MORE_IMAGES = 'Visa fler bilder';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Tillg�ngliga bilder f�r';
	var $_PHPSHOP_BACK_TO_DETAILS = '�ter till produktdetaljer';
	var $_PHPSHOP_FILEMANAGER = 'Filhanterare';
	var $_PHPSHOP_FILEMANAGER_LIST = 'Filhanterare::Produktlista';
	var $_PHPSHOP_FILEMANAGER_ADD = 'L�gg till Bild/Fil';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Associera bilder';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = '�r nedladdningsbar?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Associerade filer (Produktblad,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Publicerad?';
	var $_PHPSHOP_FILES_LIST = 'Filhanterare::Bilder/filer f�r';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Filnamn';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'Filtitel';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Fil typ';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Redigera filinformation';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Full bild';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Tumnagel';
	var $_PHPSHOP_FILES_FORM = 'Ladda upp fil f�r';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Aktuell fil';
	var $_PHPSHOP_FILES_FORM_FILE = 'Fil';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Bild';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Ladda upp till';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'Standard produkts�kv�g';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Ange filens s�kv�g';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'S�kv�g till nedladdning(om man s�ljer nedladdningsbara varor!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Skapa tumnagel automatiskt?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Filen �r publicerad?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Filtitel (vad kunden ser)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Fil beskrivning';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'Fil URL (valfri)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'V�nligen ange korrekt s�kv�g!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'Tumnageln har framg�ngsrikt skapats!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'Kunde INTE skapa tumnagel!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Fil/Bild uppladdningsfel';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Helbilds filen kunde inte raderas.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Helbilds filen raderad.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Kunde inte radera tumnagel filen (kanske den inte finns): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Tumnagel filen raderades.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Kunde inte radera filen.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Filen har raderats.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Tyv�rr, den beg�rda filen kan inte hittas!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Bild saknas!';
	var $_PHPSHOP_COUPON_MOD = 'Kupong';
	var $_PHPSHOP_COUPONS = 'Kuponger';
	var $_PHPSHOP_COUPON_LIST = 'Kuponglista';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Kupongen har redan utnyttjats.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Kupongen godk�nd! Tack.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Om du har en kupongkod, ange den nedan:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Skicka';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Den kupongkoden finns redan. V�nligen f�rs�k igen.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Uppdatera kupong';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Klicka p� en kupongkod f�r att editera den, eller f�r att radera en kupongkod, v�lj den och klicka p� Radera:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Kod';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Procent av total';
	var $_PHPSHOP_COUPON_TYPE = 'Kupongtyp';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'En g�vokupong raderas efter att ha anv�nts p� en order. En permanent kupong kan anv�ndas s� ofta som kunden vill.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'G�vokupong';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Permanent kupong';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'V�rde';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Radera kod';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = '�r du s�ker p� att du vill radera denna kupongkod?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'V�nligen fyll i alla f�lt.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'Kupong v�rde m�ste vara ett nummer.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Ny kupong';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Kupongkod';
	var $_PHPSHOP_COUPON_PERCENT = 'Procent';
	var $_PHPSHOP_COUPON_TOTAL = 'Total';
	var $_PHPSHOP_COUPON_VALUE = 'V�rde';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Kupongkod sparad.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Spara kupong';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Kupongrabatt';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Kupongkoden hittades inte. F�rs�k igen.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Aktivera kuponganv�ndning';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Om du aktiverar kuponger till�ter du kunder att ange kupongkoder f�r att f�  rabatt p� sina ink�p.';
	var $_PHPSHOP_FREE_SHIPPING = 'Fraktfritt';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Denna order �r fraktfri!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Minsta oderv�rde f�r fraktfritt';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Orderv�rdet (inklusive moms) som �r minimum f�r fraktfritt
                                                (exempel: <strong>500</strong> betyder fraktfritt betyder att ordern s�nds fraktfritt n�r kunden handlar f�r
                                                 500 kr (inklusive moms) eller mer.';
	var $_PHPSHOP_YOUR_STORE = 'Din butik';
	var $_PHPSHOP_CONTROL_PANEL = 'Kontrollpanel';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF - knapp';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Visa eller d�lj PDF-knappen i butiken';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'M�ste godk�nna k�pavtalet p� VARJE ORDER?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Markera om du vill att kunden ska godk�nna k�pavtalet p� VARJE ORDER (Innan ordern skickas).';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Bankkonto typ';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Checkkonto';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'F�retagskonto';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Sparkonto';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = '�terkommande debiteringar?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Ange om du vill ha �terkommande debiteringar.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Internt fel vid behandlingen till';
	var $_PHPSHOP_PAYMENT_ERROR = 'Fel vid behandlingen av betalningen';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Betalning genomf�rd';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS kunde inte behandla beg�ran om fraktkostnadsber�kning.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Garanterad leveranstid (dagar)';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'UPS avh�mtningsmetod';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Hur ger du paket till UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'UPS paketering?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Ange standard f�rpackningss�tt.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Hemleverans?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Hemleverans (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'PF�retagspaket (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Fr�ga om Hemleverans (RES) eller f�retagspaket (COM).';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Hanteringskostnad';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Din hanteringskostnad f�r denna typ av leverans.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Momsklass';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Anv�nd f�ljande momsklass p� fraktkostnaden.';
	var $_PHPSHOP_ERROR_CODE = 'Felkod';
	var $_PHPSHOP_ERROR_DESC = 'Felbeskrivning';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Visa / �ndra transaktionsnyckel';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Visa / �ndra L�senord/Transaktionsnyckel';
	var $_PHPSHOP_TYPE_PASSWORD = 'Ange ditt anv�ndarl�senord';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Aktuellt l�senord';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Aktuell transaktionsnyckel';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'Transaktionsnyckeln har �ndrats.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Beg�r/inh�mta Kreditkortsvalideringskod (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Kontrollera giltig CVV2/CVC2/CID kod (tre eller fyrsiffrigt nummer p� baksidan av kreditkortet, p� framsidan av American Express kort)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'V�nligen ange det tre eller fyrsiffriga nummret p� baksidan av ditt kreditkort (p� framsidan av American Express kort)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'Du m�ste ange din Kreditkortsvalideringskod f�r att forts�tta.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'ANTINGEN ange ett filnam';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'H�r kan du fylla i ett filnamn. <strong>Om du fyller i ett filnamn h�r kommer inga filer att laddas upp!!! Du m�ste d� ladda upp filen via FTP manuellt!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'ELLER skicka upp ny fil';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Du kan skicka upp en lokal fil. Denna fil kommer att vara produkten du s�ljer. Existerande fil kommer att ers�ttas.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Skriv text h�r som kommer att visas till kunden p� flypage sidan.<br />t.ex: 24tim, 48 timmar, 3 - 5 dagar, efter order.....';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'ELLER v�lj en bild at visa p� detaljsidan (flypage).<br />Bildrna sparas i biblioteket <i>/components/com_phpshop/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Attributlista';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Exempel p� attributlisteformat:</h4>
        <span class="sectionname"><strong>Storlek</strong>,XL[+20.00],M,S[-15.00]<strong>;F�rg</strong>: R�d,Gr�n,Gul,Exklusiv f�rg[=24.00]<strong>;Och s� vidare</strong>,..,..</span>
        <h4>Integrerade prisjusteringar f�r anv�ndning med "Advanced Attributes" modulen:</h4>
        <span class="sectionname">
        <strong>+</strong> == L�gg till denna summa till grundpriset.<br />
        <strong>-</strong> == Ta bort denna summa fr�n grundpriset.<br />
        <strong>=</strong> == Ange som produktpris.
      </span>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Extra attribut';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Exemplel p� extra attribut formatet:</h4>
        <span class="sectionname"><strong>Namn;Extra;</strong>...</span>';
	var $_PHPSHOP_MULTISELECT = '<i>Flerval: h�ll ner CTRL-tangent n�r du klickar</i>';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'Aktivera eProcessingNetwork.com betalning?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Markera f�r att anv�nda eProcessingNetwork.com med phpShop.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Testl�ge?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'V�lj \'Ja\' under testfasen. V�lj \'Nej\' f�r att aktivera betalningar.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'eProcessingNetwork.com Login ID';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'Detta �r ditt eProcessingNetwork.com Login ID';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'eProcessingNetwork.com Transaktionsnyckel';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'Detta �r din eProcessingNetwork.com transaktionsnyckel';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Autentisieringstyp';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'Detta �r eProcessingNetwork.com\'s autentisieringstyp.';
	var $_PHPSHOP_RELATED_PRODUCTS = 'N�rst�ende produkter';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Du kan ange n�rst�ende produkter med denna lista. Markera en eller flera produkter h�r och dom visas som <strong>N�rst�ende produkter</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Du kan ocks� vara intresserad av denna/dessa produkt(er)';
	var $_PHPSHOP_IMAGE_ACTION = 'Bildfunktion';
	var $_PHPSHOP_NONE = 'none';
	var $_PHPSHOP_ORDER_HISTORY = 'Orderhistorik';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Kommentar';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Kommentarer till din order';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Inkludera denna kommentar?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Tillagd datum';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Kund underr�ttad?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Orderstatus �ndrad';
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
	var $_PHPSHOP_PARAMETERS_LBL = 'Parametrar';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Produkttyp';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Produkttyp lista ';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'L�gg till/Ta bort produkttyp';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Produkttyp lista f�r';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Lista produkttyper';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'L�gg till produkttyp f�r';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'L�gg till produkttyp';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Produkttyp';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Produkttyp namn';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Produkttyp beskrivning';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Parametrar';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Produkttyp information';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Publicera?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Produkttyp bl�ddringsida';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Produkttyp detaljsida';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'V�rden f�r produkttyp';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Parameterinformation';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Produkttyp hittades inte!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Parameter namn';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Detta namn blir kolumnrubrik f�r tabellen. M�ste vara unikt och utan mellanslag.<BR>Till exempel: Bygg_materiel';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Parameter etikett';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Parameter beskrivning';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Parameter typ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Heltal';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Text';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'kort text';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Flyttal';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Tecken';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Datum & Tid';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Datum';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = '����-MM-DD';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Tid';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'TT:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Bryt rad';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Multipla v�rden';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'M�jliga v�rden';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Visa M�jliga v�rden som multipla val?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Om M�jliga v�rden har angetts kan parametrar endast ha dessa v�rden. Exempel p� M�jliga v�rden:</strong><BR><span class="sectionname">St�l;Tr�;Plast;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Standardv�rde';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'F�r parametrars standardv�rde anv�nds f�ljande format:<ul><li>Datum: ����-MM-DD</li><li>Tid: TT:MM:SS</li><li>Daum & Tid: ����-MM-DD TT:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Enhet';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Avancerad s�kning enligt parametrar';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Parameters�kning';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Vill du s�ka produkter enligt tekniska specifikationer?<BR>Du kan anv�nda valfri form:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Tyv�rr, det finns inga s�kbara kategorier.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Tyv�rr, det finns ingen tillg�nglig produkt med detta namn.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'Liknar';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'Liknar INTE';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Fulltext s�kning';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Alla vald';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'N�gon vald';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Rensa formul�r';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'S�k i kategori';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = '�ndra parametrar';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Fallande ordning';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Stigande ordning';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Parametrar f�r kategori';
	var $_PHPSHOP_FEE = 'Avgift';
	var $_PHPSHOP_PRODUCT_CLONE = 'Kopiera produkt';
	var $_PHPSHOP_CSV_SETTINGS = 'Inst�llningar';
	var $_PHPSHOP_CSV_DELIMITER = 'Avgr�nsare';
	var $_PHPSHOP_CSV_ENCLOSURE = 'F�ltavgr�nsare';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Ladda upp CSV fil';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Skicka CSV fil';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'H�mta fr�n bibliotek';
	var $_PHPSHOP_CSV_FROM_SERVER = 'H�mta CSV fil fr�n server';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Exportera till CSV fil';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'V�lj f�ltordningstyp';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Standardordning';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'Min egen ordning';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Exportera all produkter till CSV fil';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'CSV Import / Export konfiguration';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Spara �ndringar';
	var $_PHPSHOP_CSV_FIELD_NAME = 'F�ltnamn';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'standardv�rde';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'F�ltordning';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'F�lt kr�vs?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Import/Export';
	var $_PHPSHOP_CSV_NEW_FIELD = 'L�gg till nytt f�lt';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Dokumentation';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Tyv�rr hittades inte den produkt du s�kte!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Visa proukter som �r slut i lager';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Vid vald visas �ven proukter som inte finns i lager. Annars d�ljs dessa produkter.';
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