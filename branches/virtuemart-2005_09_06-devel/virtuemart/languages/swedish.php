<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: swedish.php,v 1.19 2005/06/30 17:42:52 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage languages
*
* @copyright (C) 2004 Soeren Eberhardt

* @translation Partheni Theodoridi, Tome Cvitan ( psxbutiken, http://www.psxbutiken.com/ )
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*/
class phpShopLanguage extends mosAbstractLanguage {

    /*####################
    GENERAL DEFINITIONS
    ####################*/
    
    var $_PHPSHOP_MENU = "Meny";
    var $_PHPSHOP_CATEGORY = "Kategori";
    var $_PHPSHOP_CATEGORIES = "Produktkategorier";
    var $_PHPSHOP_SELECT_CATEGORY = "V�lj en kategori:";
    var $_PHPSHOP_ADMIN = "Administration";
    var $_PHPSHOP_PRODUCT = "Produkt";
    var $_PHPSHOP_LIST = "Lista";
    var $_PHPSHOP_ALL = "Alla";
    var $_PHPSHOP_LIST_ALL_PRODUCTS = "Lista alla produkter";
    var $_PHPSHOP_VIEW = "Visa";
    var $_PHPSHOP_SHOW = "Visa";
    var $_PHPSHOP_ADD = "L�gg till";
    var $_PHPSHOP_UPDATE = "Uppdatera";
    var $_PHPSHOP_DELETE = "Radera";
    var $_PHPSHOP_SELECT = "V�lj";
    var $_PHPSHOP_SUBMIT = "Submit";
    var $_PHPSHOP_RANDOM = "Produkturval";
    var $_PHPSHOP_LATEST = "Senaste produkterna";
    
    /*#####################
    MODULE ACCOUNT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_HOME_TITLE = "Hem";
    var $_PHPSHOP_CART_TITLE = "Varukorg";
    var $_PHPSHOP_CHECKOUT_TITLE = "Kassa";
    var $_PHPSHOP_LOGIN_TITLE = "Logga in";
    var $_PHPSHOP_LOGOUT_TITLE = "Logga ut";
    var $_PHPSHOP_BROWSE_TITLE = "Bl�ddra";
    var $_PHPSHOP_SEARCH_TITLE = "S�k";
    var $_PHPSHOP_ACCOUNT_TITLE = "Ditt konto";
    var $_PHPSHOP_NAVIGATION_TITLE = "Navigation";
    var $_PHPSHOP_DEPARTMENT_TITLE = "Avdelning";
    var $_PHPSHOP_INFO = "Information";
    
    var $_PHPSHOP_BROWSE_LBL = "Bl�ddra";
    var $_PHPSHOP_PRODUCTS_LBL = "Produkter";
    var $_PHPSHOP_PRODUCT_LBL = "Produkt";
    var $_PHPSHOP_SEARCH_LBL = "S�k";
    var $_PHPSHOP_FLYPAGE_LBL = "Detaljer";
    var $_PHPSHOP_PRODUCT_SEARCH_LBL = "S�k produkt";
    
    var $_PHPSHOP_PRODUCT_NAME_TITLE = "Namn";
    var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = "Kategori";
    var $_PHPSHOP_PRODUCT_DESC_TITLE = "Beskrivning";
    
    var $_PHPSHOP_CART_SHOW = "Varukorg";
    var $_PHPSHOP_CART_ADD_TO = "L�gg i varukorg";
    var $_PHPSHOP_CART_NAME = "Namn";
    var $_PHPSHOP_CART_SKU = "Artnr";
    var $_PHPSHOP_CART_PRICE = "Pris";
    var $_PHPSHOP_CART_QUANTITY = "Kvantitet";
    var $_PHPSHOP_CART_SUBTOTAL = "Summa";
    
    # Some messages
    var $_PHPSHOP_ADD_SHIPTO_1 = "L�gg till - ";
    var $_PHPSHOP_ADD_SHIPTO_2 = "Leveransadress";
    var $_PHPSHOP_NO_SEARCH_RESULT = "Din s�kning gav 0 resultat.<br />";
    var $_PHPSHOP_PRICE_LABEL = "Pris: ";
    var $_PHPSHOP_ORDER_BUTTON_LABEL = "K�p";
    var $_PHPSHOP_NO_CUSTOMER = "Du �r inte en registrerad anv�ndare. V�nligen fyll i dina uppgifter.";
    var $_PHPSHOP_DELETE_MSG = "�r du s�ker p� att du vill radera denna post?";
    var $_PHPSHOP_THANKYOU = "Tack f�r din best�llning!";
    var $_PHPSHOP_NOT_SHIPPED = "Ej levererat";
    var $_PHPSHOP_EMAIL_SENDTO = "En orderbekr�ftelse har skickats till";
    var $_PHPSHOP_NO_USER_TO_SELECT = "Vi beklagar,det finns ingen MOS-anv�ndare som du har m�jlighet att l�gga till i anv�ndarlistan f�r com_phpshop";
    
    // FEL messages
    
    var $_PHPSHOP_FEL = "FEL";
    var $_PHPSHOP_MOD_NOT_REG = "Ej registrerad modul.";
    var $_PHPSHOP_MOD_ISNO_REG = "�r ej en giltig phpShop-modul.";
    var $_PHPSHOP_MOD_NO_AUTH = "Du har inte beh�righet till den valda modulen.";
    var $_PHPSHOP_PAGE_404_1 = "Sidan existerar inte";
    var $_PHPSHOP_PAGE_404_2 = "Det angivna filnamnet existerar inte. Kan inte hitta filen:";
    var $_PHPSHOP_PAGE_403 = "Du saknar �tkomstr�ttigheter";
    var $_PHPSHOP_FUNC_NO_EXEC = "Du saknar r�ttigheter att utf�ra";
    var $_PHPSHOP_FUNC_NOT_REG = "Funktionen registrerades inte";
    var $_PHPSHOP_FUNC_ISNO_REG = " �r inte en giltig MOS_com_phpShop funktion.";
    
    /*#####################
    MODULE ADMIN
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADMIN_MOD = "Administration";
    
    
    // User List
    var $_PHPSHOP_USER_LIST_MNU = "Lista anv�ndare";
    var $_PHPSHOP_USER_LIST_LBL = "Anv�ndarlista";
    var $_PHPSHOP_USER_LIST_USERNAME = "Anv�ndarnamn";
    var $_PHPSHOP_USER_LIST_FULL_NAME = "F�rnamn Efternamn";
    var $_PHPSHOP_USER_LIST_GROUP = "Grupp";
    
    // User Form
    var $_PHPSHOP_USER_FORM_MNU = "L�gg till anv�ndare";
    var $_PHPSHOP_USER_FORM_LBL = "L�gg till/uppdatera anv�ndarinformation";
    var $_PHPSHOP_USER_FORM_BILLTO_LBL = "Betalningsinformation";
    var $_PHPSHOP_USER_FORM_SHIPTO_LBL = "Leveransadresser";
    var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = "L�gg till adress";
    var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = "Egen adressben�mning";
    var $_PHPSHOP_USER_FORM_FIRST_NAME = "F�rnamn";
    var $_PHPSHOP_USER_FORM_LAST_NAME = "Efternamn";
    var $_PHPSHOP_USER_FORM_MIDDLE_NAME = "Mellannamn";
    var $_PHPSHOP_USER_FORM_TITLE = "Titel";
    var $_PHPSHOP_USER_FORM_USERNAME = "Anv�ndarnamn";
    var $_PHPSHOP_USER_FORM_PASSWORD_1 = "L�senord";
    var $_PHPSHOP_USER_FORM_PASSWORD_2 = "Bekr�fta l�senord";
    var $_PHPSHOP_USER_FORM_PERMS = "R�ttigheter";
    var $_PHPSHOP_USER_FORM_COMPANY_NAME = "F�retagsnamn";
    var $_PHPSHOP_USER_FORM_ADDRESS_1 = "Adressrad 1";
    var $_PHPSHOP_USER_FORM_ADDRESS_2 = "Adressrad 2";
    var $_PHPSHOP_USER_FORM_CITY = "Stad";
    var $_PHPSHOP_USER_FORM_STATE = "Stat/Provins/Region";
    var $_PHPSHOP_USER_FORM_ZIP = "Postnummer";
    var $_PHPSHOP_USER_FORM_COUNTRY = "Land";
    var $_PHPSHOP_USER_FORM_PHONE = "Telefonnummer";
    var $_PHPSHOP_USER_FORM_FAX = "Fax";
    var $_PHPSHOP_USER_FORM_EMAIL = "E-post";
    
    // Module List
    var $_PHPSHOP_MODULE_LIST_MNU = "Lista moduler";
    var $_PHPSHOP_MODULE_LIST_LBL = "Moduler";
    var $_PHPSHOP_MODULE_LIST_NAME = "Namn";
    var $_PHPSHOP_MODULE_LIST_PERMS = "R�ttigheter";
    var $_PHPSHOP_MODULE_LIST_FUNCTIONS = "Funktioner";
    var $_PHPSHOP_MODULE_LIST_ORDER = "Listordning";
    
    // Module Form
    var $_PHPSHOP_MODULE_FORM_MNU = "L�gg till modul";
    var $_PHPSHOP_MODULE_FORM_LBL = "Ny modul";
    var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = "Modultitel (f�r Toppmeny)";
    var $_PHPSHOP_MODULE_FORM_NAME = "Modulnamn";
    var $_PHPSHOP_MODULE_FORM_PERMS = "R�ttigheter";
    var $_PHPSHOP_MODULE_FORM_HEADER = "Sidhuvud";
    var $_PHPSHOP_MODULE_FORM_FOOTER = "Sidfot";
    var $_PHPSHOP_MODULE_FORM_MENU = "Visa modul i administrationsmenyn?";
    var $_PHPSHOP_MODULE_FORM_ORDER = "Visa order";
    var $_PHPSHOP_MODULE_FORM_DESCRIPTION = "Modulbeskrivning";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = "Spr�kkod";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = "Spr�kfil";
    
    // Function List
    var $_PHPSHOP_FUNCTION_LIST_MNU = "Funktionslista";
    var $_PHPSHOP_FUNCTION_LIST_LBL = "Funktioner";
    var $_PHPSHOP_FUNCTION_LIST_NAME = "Funktionsnamn";
    var $_PHPSHOP_FUNCTION_LIST_CLASS = "Klassnamn";
    var $_PHPSHOP_FUNCTION_LIST_METHOD = "Klassmetod";
    var $_PHPSHOP_FUNCTION_LIST_PERMS = "R�ttigheter";
    
    // Module Form
    var $_PHPSHOP_FUNCTION_FORM_MNU = "L�gg till funktion";
    var $_PHPSHOP_FUNCTION_FORM_LBL = "Funktionsinformation";
    var $_PHPSHOP_FUNCTION_FORM_NAME = "Funktionsnamn";
    var $_PHPSHOP_FUNCTION_FORM_CLASS = "Klassnamn";
    var $_PHPSHOP_FUNCTION_FORM_METHOD = "Klassmetod";
    var $_PHPSHOP_FUNCTION_FORM_PERMS = "Funktionsr�ttigheter";
    var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = "Funktionsbeskrivning";
    
    // Currency form and list
    var $_PHPSHOP_CURRENCY_LIST_MNU = "Lista valutor";
    var $_PHPSHOP_CURRENCY_LIST_LBL = "Valutor";
    var $_PHPSHOP_CURRENCY_LIST_ADD = "L�gg till valuta";
    var $_PHPSHOP_CURRENCY_LIST_NAME = "Valutanamn";
    var $_PHPSHOP_CURRENCY_LIST_CODE = "Valutakod";
    
    // Country form and list
    var $_PHPSHOP_COUNTRY_LIST_MNU = "Lista l�nder";
    var $_PHPSHOP_COUNTRY_LIST_LBL = "L�nder";
    var $_PHPSHOP_COUNTRY_LIST_ADD = "L�gg till land";
    var $_PHPSHOP_COUNTRY_LIST_NAME = "Namn";
    var $_PHPSHOP_COUNTRY_LIST_3_CODE = "Landskod (3)";
    var $_PHPSHOP_COUNTRY_LIST_2_CODE = "Landskod (2)";
    
    /*#####################
    MODULE CHECKOUT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADDRESS = "Adress";
    var $_PHPSHOP_CONTINUE = "Forts�tt";
    
    # Some messages
    var $_PHPSHOP_EMPTY_CART = "Din varukorg �r tom.";
    
    
    /*#####################
    MODULE ISShipping
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ISSHIPPING_MOD = "InterShipper";
    
    
    // Shipping Ping
    var $_PHPSHOP_ISSHIP_PING_MNU = "Pinga InterShipper-server";
    var $_PHPSHOP_ISSHIP_PING_LBL = "InterShipper-server ping ";
    var $_PHPSHOP_ISSHIP_PING_FEL_LBL = "Ping av InterShipper-server misslyckades";
    var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = "Ping av InterShipper-server lyckades";
    var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = "Transport�r";
    var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = "Respons<br/>Tid";
    var $_PHPSHOP_ISSHIP_PING_TIME_LBL = "sek.";
    
    // Shipping List
    var $_PHPSHOP_ISSHIP_LIST_MNU = "Lista leveransmetod";
    var $_PHPSHOP_ISSHIP_LIST_LBL = "Aktiva leveransmetoder";
    var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = "Leveransmetod";
    var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = "Aktiv";
    var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = "Expeditionsavgift";
    var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = "Ledtid";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = "enhetsfrakt";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = "procent";
    var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = "dagar";
    var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = "Tunga kollin";
    
    // Dynamic Shipping Form
    var $_PHPSHOP_ISSHIP_FORM_MNU = "Konfigurera leveranss�tt";
    var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = "L�gg till leveranss�tt";
    var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = "Konfigurera leveranss�tt";
    var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = "Uppdatera";
    var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = "Leveranss�tt";
    var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = "Aktivera";
    var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = "Expeditionsavgift";
    var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = "Ledtid";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = "enhetsfrakt";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = "procent";
    var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = "dagar";
    var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = "Tunga kollin";
    
    /*#####################
    MODULE ORDER
    #####################*/
        
    # Some LABELs
    var $_PHPSHOP_ORDER_MOD = "Order";
    
    // Some menu options 
    var $_PHPSHOP_ORDER_CONFIRM_MNU = "Bekr�fta order";
    var $_PHPSHOP_ORDER_CANCEL_MNU = "Avbryt order";
    var $_PHPSHOP_ORDER_PRINT_MNU = "Skriv ut order";
    var $_PHPSHOP_ORDER_DELETE_MNU = "Radera order";
    
    // Order List
    var $_PHPSHOP_ORDER_LIST_MNU = "Lista order";
    var $_PHPSHOP_ORDER_LIST_LBL = "Order";
    var $_PHPSHOP_ORDER_LIST_ID = "Ordernummer";
    var $_PHPSHOP_ORDER_LIST_CDATE = "Orderdatum";
    var $_PHPSHOP_ORDER_LIST_MDATE = "Senast �ndrad";
    var $_PHPSHOP_ORDER_LIST_STATUS = "Status";
    var $_PHPSHOP_ORDER_LIST_TOTAL = "Totalsumma";
    var $_PHPSHOP_ORDER_ITEM = "Orderartiklar";
    
    // Order print
    var $_PHPSHOP_ORDER_PRINT_PO_LBL = "Order";
    var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = "Ordernummer";
    var $_PHPSHOP_ORDER_PRINT_PO_DATE = "Orderdatum";
    var $_PHPSHOP_ORDER_PRINT_PO_STATUS = "Orderstatus";
    var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = "Kundinformation";
    var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = "Betalningsinformation";
    var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = "Leveransinformation";
    var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = "Faktureras till";
    var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = "Levereras till";
    var $_PHPSHOP_ORDER_PRINT_NAME = "Namn";
    var $_PHPSHOP_ORDER_PRINT_COMPANY = "F�retag";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = "Adressrad 1";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = "Adressrad 2";
    var $_PHPSHOP_ORDER_PRINT_CITY = "Stad";
    var $_PHPSHOP_ORDER_PRINT_STATE = "Stat/Provins/Region";
    var $_PHPSHOP_ORDER_PRINT_ZIP = "Postnummer";
    var $_PHPSHOP_ORDER_PRINT_COUNTRY = "Land";
    var $_PHPSHOP_ORDER_PRINT_PHONE = "Telefonnummer";
    var $_PHPSHOP_ORDER_PRINT_FAX = "Fax";
    var $_PHPSHOP_ORDER_PRINT_EMAIL = "E-post";
    var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = "Orderartiklar";
    var $_PHPSHOP_ORDER_PRINT_QUANTITY = "Antal";
    var $_PHPSHOP_ORDER_PRINT_QTY = "Ant";
    var $_PHPSHOP_ORDER_PRINT_SKU = "Artikelnr";
    var $_PHPSHOP_ORDER_PRINT_PRICE = "Pris";
    var $_PHPSHOP_ORDER_PRINT_TOTAL = "Totalsumma";
    var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = "Summa";
    var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = "Moms";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING = "Leverans- och expeditionsavgifter";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = "Leveransavgift";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = "Betalningsmetod";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = "Kontonamn";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = "Kontonummer";
    var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = "Utg�ngsdatum";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = "Betalningshistorik";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = "Leveransinformation";
    var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = "Betalningsinformation";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = "Transportf�retag";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = "Leveranss�tt";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = "Leveransdatum";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = "Leveranskostnad";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_MNU = "Lista orderstatustyper";
    var $_PHPSHOP_ORDER_STATUS_FORM_MNU = "L�gg till orderstatustyp";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_CODE = "Orderstatuskod";
    var $_PHPSHOP_ORDER_STATUS_LIST_NAME = "Orderstatusnamn";
    
    var $_PHPSHOP_ORDER_STATUS_FORM_LBL = "Orderstatus";
    var $_PHPSHOP_ORDER_STATUS_FORM_CODE = "Orderstatuskod";
    var $_PHPSHOP_ORDER_STATUS_FORM_NAME = "Orderstatusnamn";
    var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = "Listordning";
    
    
    /*#####################
    MODULE PRODUCT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_PRODUCT_MOD = "Produkter";
    
    var $_PHPSHOP_CURRENT_PRODUCT = "Aktuell produkt";
    var $_PHPSHOP_CURRENT_ITEM = "Aktuell artikel";
    
    // Product Inventory
    var $_PHPSHOP_PRODUCT_INVENTORY_LBL = "Varulager";
    var $_PHPSHOP_PRODUCT_INVENTORY_MNU = "Visa lagerstatus";
    var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = "Pris";
    var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = "Lagerv�rde";
    var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = "Vikt";
    // Product List
    var $_PHPSHOP_PRODUCT_LIST_MNU = "Lista produkter";
    var $_PHPSHOP_PRODUCT_LIST_LBL = "Produkter";
    var $_PHPSHOP_PRODUCT_LIST_NAME = "Produktnamn";
    var $_PHPSHOP_PRODUCT_LIST_SKU = "Artnr";
    var $_PHPSHOP_PRODUCT_LIST_PUBLISH = "Visa artiklar";
    
    // Product Form
    var $_PHPSHOP_PRODUCT_FORM_MNU = "L�gg till produkt";
    var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = "Konfiguera denna produkt";
    var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = "F�rhandsgranska produktsida";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = "L�gg till artikel";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = "L�gg till ytterligare en artikel";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = "Ny produkt";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = "Uppdatera produkt";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = "Produktinformation";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = "Produktstatus";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = "Produktdimensioner och vikt";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = "Produktbilder";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = "Ny artikel";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = "Uppdatera artikel";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = "Artikelinformation";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = "Artikelstatus";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = "Artikeldimensioner och vikt";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = "Artikelbilder";
    var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = "G� tillbaka till huvudprodukt";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = "F�r att uppdatera aktuell bild, skriv in k�lla till ny bild.";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = "Skriv \"none\" f�r att radera nuvarande bild.";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = "Produktartiklar";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = "Artikelattribut";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = "�r du s�ker p� att du vill radera denna produkt\\noch tillh�rande artiklar?";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = "�r du s�ker p� att du vill radera denna artikel?";
    var $_PHPSHOP_PRODUCT_FORM_VENDOR = "�terf�rs�ljare";
    var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = "Tillverkare";
    var $_PHPSHOP_PRODUCT_FORM_SKU = "Artnr";
    var $_PHPSHOP_PRODUCT_FORM_NAME = "Namn";
    var $_PHPSHOP_PRODUCT_FORM_URL = "URL";
    var $_PHPSHOP_PRODUCT_FORM_CATEGORY = "Kategori";
    var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = "Butikspris";
    var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = "Product Price (Net)";
    var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = "Beskrivning";
    var $_PHPSHOP_PRODUCT_FORM_S_DESC = "Kort beskrivning";
    var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = "I lager";
    var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = "Inkommande";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = "Tillg�ngligt";
    var $_PHPSHOP_PRODUCT_FORM_SPECIAL = "Kampanjvara";
    var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = "Rabatttyp";
    var $_PHPSHOP_PRODUCT_FORM_PUBLISH = "Publicerad?";
    var $_PHPSHOP_PRODUCT_FORM_LENGTH = "L�ngd";
    var $_PHPSHOP_PRODUCT_FORM_WIDTH = "Bredd";
    var $_PHPSHOP_PRODUCT_FORM_HEIGHT = "H�jd";
    var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = "M�ttenhet";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT = "Vikt";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = "M�ttenhet";
    var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = "Miniatyr";
    var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = "Stor bild";
    
    // Product Display
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = "L�gg till produkt";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = "Uppdatera produkt";
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = "L�gg till artikel";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = "Uppdatera artikel";
    var $_PHPSHOP_PRODUCT_CSV_UPLOAD = "Anv�nd CSV-uppladdning";
    var $_PHPSHOP_PRODUCT_FOLDERS = "Produktmapp";
    
    // Product Category List
    var $_PHPSHOP_CATEGORY_LIST_MNU = "Lista kategorier";
    var $_PHPSHOP_CATEGORY_LIST_LBL = "Produktkategorie";
    
    // Product Category Form
    var $_PHPSHOP_CATEGORY_FORM_MNU = "L�gg till kategori";
    var $_PHPSHOP_CATEGORY_FORM_LBL = "Kategoriinformation";
    var $_PHPSHOP_CATEGORY_FORM_NAME = "KategoriNamn";
    var $_PHPSHOP_CATEGORY_FORM_PARENT = "F�r�lderkategori";
    var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = "Kategoribeskrivning";
    var $_PHPSHOP_CATEGORY_FORM_PUBLISH = "Publicera?";
    var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = "Beskrivningssida f�r kategori";
    
    // Product Attribute List
    var $_PHPSHOP_ATTRIBUTE_LIST_MNU = "Lista attribut";
    var $_PHPSHOP_ATTRIBUTE_LIST_LBL = "Attributlista f�r";
    var $_PHPSHOP_ATTRIBUTE_LIST_NAME = "Attributnamn";
    var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = "Listordning";
    
    // Product Attribute Form
    var $_PHPSHOP_ATTRIBUTE_FORM_MNU = "L�gg till attribut";
    var $_PHPSHOP_ATTRIBUTE_FORM_LBL = "Attribut";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = "Nytt attribut f�r produkt";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = "Uppdatera attribut f�r produkt";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = "Nytt attribut f�r artikel";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = "Uppdatera Attribut f�r Artikel";
    var $_PHPSHOP_ATTRIBUTE_FORM_NAME = "Attributnamn";
    var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = "Listordning";
    
    // Product Price List
    var $_PHPSHOP_PRICE_LIST_MNU = "Lista priser";
    var $_PHPSHOP_PRICE_LIST_LBL = "Prislista";
    var $_PHPSHOP_PRICE_LIST_FOR_LBL = "Pris f�r";
    var $_PHPSHOP_PRICE_LIST_GROUP_NAME = "GruppNamn";
    var $_PHPSHOP_PRICE_LIST_PRICE = "Pris";
    var $_PHPSHOP_PRODUCT_LIST_CURRENCY = "Valuta";
    
    // Product Price Form
    var $_PHPSHOP_PRICE_FORM_MNU = "L�gg till pris";
    var $_PHPSHOP_PRICE_FORM_LBL = "Prisinformation";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = "Nytt pris f�r produkt";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = "Uppdatera pris f�r produkt";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = "Nytt pris f�r artikel";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = "Uppdatera Pris f�r Artikel";
    var $_PHPSHOP_PRICE_FORM_PRICE = "Pris";
    var $_PHPSHOP_PRICE_FORM_CURRENCY = "Valuta";
    var $_PHPSHOP_PRICE_FORM_GROUP = "Kundgrupp";
    
    
    /*#####################
    MODULE REPORT BASIC
    #####################*/
    # Some LABELs
    var $_PHPSHOP_REPORTBASIC_MOD = "Rapporter";
    var $_PHPSHOP_RB_INDIVIDUAL = "Individuell produktlistning";
    var $_PHPSHOP_RB_SALE_TITLE = "F�rs�ljningsrapport";
    
    /* labels for rpt_sales */
    var $_PHPSHOP_RB_SALES_PAGE_TITLE = "�versikt f�r�ljningsaktivitet";
    
    var $_PHPSHOP_RB_INTERVAL_TITLE = "Intervall";
    var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = "M�nadsvis";
    var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = "Veckovis";
    var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = "Dagligen";
    
    var $_PHPSHOP_RB_THISMONTH_BUTTON = "Denna m�nad";
    var $_PHPSHOP_RB_LASTMONTH_BUTTON = "F�reg�ende m�nad";
    var $_PHPSHOP_RB_LAST60_BUTTON = "Senaste 60 dagarna";
    var $_PHPSHOP_RB_LAST90_BUTTON = "Senaste 90 dagarna";
    
    var $_PHPSHOP_RB_START_DATE_TITLE = "Starta p�";
    var $_PHPSHOP_RB_END_DATE_TITLE = "Sluta p�";
    var $_PHPSHOP_RB_SHOW_SEL_RANGE = "Visa urval";
    var $_PHPSHOP_RB_REPORT_FOR = "Rapportera f�r ";
    var $_PHPSHOP_RB_DATE = "Datum";
    var $_PHPSHOP_RB_ORDERS = "Best�llningar";
    var $_PHPSHOP_RB_TOTAL_ITEMS = "Totalt antal s�lda artiklar";
    var $_PHPSHOP_RB_REVENUE = "Oms�ttning";
    var $_PHPSHOP_RB_PRODLIST = "Produktlista";
    
    /*#####################
    MODULE SHOP
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOP_MOD = "Butik";
    var $_PHPSHOP_PRODUCT_THUMB_TITLE = "Bild";
    var $_PHPSHOP_PRODUCT_PRICE_TITLE = "Pris";
    var $_PHPSHOP_ORDER_STATUS_P = "Under behandling";
    var $_PHPSHOP_ORDER_STATUS_C = "Bekr�ftad";
    var $_PHPSHOP_ORDER_STATUS_X = "Avbruten";
    
    
    # Some messages
    var $_PHPSHOP_ORDER_BUTTON = "Order";
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOPPER_MOD = "Kund";
    
    
    
    // Shopper List
    var $_PHPSHOP_SHOPPER_LIST_MNU = "Lista kunder";
    var $_PHPSHOP_SHOPPER_LIST_LBL = "Kundlista";
    var $_PHPSHOP_SHOPPER_LIST_USERNAME = "Anv�ndarnamn";
    var $_PHPSHOP_SHOPPER_LIST_NAME = "Namn Efternamn";
    var $_PHPSHOP_SHOPPER_LIST_GROUP = "Grupp";
    
    // Shopper Form
    var $_PHPSHOP_SHOPPER_FORM_MNU = "L�gg till kund";
    var $_PHPSHOP_SHOPPER_FORM_LBL = "Kundinformation";
    var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = "Betalningsinformation";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = "Information";
    var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = "Leveransinformation";
    var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL =  "L�gg till adress";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = "Egen Adressben�mning";
    var $_PHPSHOP_SHOPPER_FORM_USERNAME = "Anv�ndarnamn";
    var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = "F�rnamn";
    var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = "Efternamn";
    var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = "Mellannamn";
    var $_PHPSHOP_SHOPPER_FORM_TITLE = "Titel";
    var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = "Kundnamn";
        var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = "L�senord";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = "Bekr�fta l�senord";
    var $_PHPSHOP_SHOPPER_FORM_GROUP = "Kundgrupp";
    var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = "F�retagsnamn";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = "Adressrad 1";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = "Adressrad 2";
    var $_PHPSHOP_SHOPPER_FORM_CITY = "Stad";
    var $_PHPSHOP_SHOPPER_FORM_STATE = "Stat/Provins/Region";
    var $_PHPSHOP_SHOPPER_FORM_ZIP = "Postnummer";
    var $_PHPSHOP_SHOPPER_FORM_COUNTRY = "Land";
    var $_PHPSHOP_SHOPPER_FORM_PHONE = "Telefonnummer";
    var $_PHPSHOP_SHOPPER_FORM_FAX = "Fax";
    var $_PHPSHOP_SHOPPER_FORM_EMAIL = "E-post";
    
    // Shopper Group List
    var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = "Lista kundgrupper";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = "Kundgrupper";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = "Gruppnamn";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = "Gruppbeskrivning";
    
    
    // Shopper Group Form
    var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = "Ny kundgrupp";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = "L�gg till kundgrupp";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = "Gruppname";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = "Gruppbeskrivning";
    
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_STORE_MOD = "Butik";
    
    
    // Store Form
    var $_PHPSHOP_STORE_FORM_MNU = "�ndra butik";
    var $_PHPSHOP_STORE_FORM_LBL = "Butiksinformation";
    var $_PHPSHOP_STORE_FORM_CONTACT_LBL = "Kontaktinformation";
    var $_PHPSHOP_STORE_FORM_FULL_IMAGE = "Bild";
    var $_PHPSHOP_STORE_FORM_UPLOAD = "Ladda upp bild";
    var $_PHPSHOP_STORE_FORM_STORE_NAME = "Butiksnamn";
    var $_PHPSHOP_STORE_FORM_COMPANY_NAME = "F�retagsnamn";
    var $_PHPSHOP_STORE_FORM_ADDRESS_1 = "Adressrad 1";
    var $_PHPSHOP_STORE_FORM_ADDRESS_2 = "Adressrad 2";
    var $_PHPSHOP_STORE_FORM_CITY = "Stad";
    var $_PHPSHOP_STORE_FORM_STATE = "Stat/Provins/Region";
    var $_PHPSHOP_STORE_FORM_COUNTRY = "Land";
    var $_PHPSHOP_STORE_FORM_ZIP = "Postnummer";
    var $_PHPSHOP_STORE_FORM_PHONE = "Telefon";
    var $_PHPSHOP_STORE_FORM_CURRENCY = "Valuta";
    var $_PHPSHOP_STORE_FORM_CATEGORY = "Butikskategori";
    var $_PHPSHOP_STORE_FORM_LAST_NAME = "Efternamn";
    var $_PHPSHOP_STORE_FORM_FIRST_NAME = "F�rnamn";
    var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = "Mellannamn";
    var $_PHPSHOP_STORE_FORM_TITLE = "Titel";
    var $_PHPSHOP_STORE_FORM_PHONE_1 = "Telefon 1";
    var $_PHPSHOP_STORE_FORM_PHONE_2 = "Telefon 2";
    var $_PHPSHOP_STORE_FORM_FAX = "Fax";
    var $_PHPSHOP_STORE_FORM_EMAIL = "E-post";
    var $_PHPSHOP_STORE_FORM_IMAGE_PATH = "S�kv�g f�r bilder";
    var $_PHPSHOP_STORE_FORM_DESCRIPTION = "Beskrivning";
    
    
    
    var $_PHPSHOP_PAYMENT = "Betalning";
    // Payment Method List
    var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = "Lista betalningsmetoder";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = "Betalningsmetoder";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = "Namn";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = "Kod";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = "Rabatt";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = "Kundgrupp";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = "Betalningsmetod";
    
    // Payment Method Form
    var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = "L�gg till betalningsmetod";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = "Ny betalningsmetod";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = "Ben�mning";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = "Kundgrupp";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = "Rabatt";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = "Kod";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = "Listordning";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = "Typ av betalningsmetod";
    
    /*#####################
    MODULE TAX
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_TAX_MOD = "Moms";
    
    // User List
    var $_PHPSHOP_TAX_RATE = "Momssats";
    var $_PHPSHOP_TAX_LIST_MNU = "Lista momssatser";
    var $_PHPSHOP_TAX_LIST_LBL = "Momssatser";
    var $_PHPSHOP_TAX_LIST_STATE = "Regional moms";
    var $_PHPSHOP_TAX_LIST_COUNTRY = "Statlig moms";
    var $_PHPSHOP_TAX_LIST_RATE = "Momssats";
    
    // User Form
    var $_PHPSHOP_TAX_FORM_MNU = "L�gg till momssats";
    var $_PHPSHOP_TAX_FORM_LBL = "L�gg till information om momssats";
    var $_PHPSHOP_TAX_FORM_STATE = "Regional moms";
    var $_PHPSHOP_TAX_FORM_COUNTRY = "Statlig moms";
    var $_PHPSHOP_TAX_FORM_RATE = "Momssats (f�r 25% => fyll i 0.25)";
    
    
    
    
    /*#####################
    MODULE VENDOR
    #####################*/
    
    
    
    # Some LABELs
    var $_PHPSHOP_VENDOR_MOD = "S�ljare";
    var $_PHPSHOP_VENDOR_ADMIN = "S�ljare";
    
    
    // Vendor List
    var $_PHPSHOP_VENDOR_LIST_MNU = "Lista s�ljare";
    var $_PHPSHOP_VENDOR_LIST_LBL = "S�ljare";
    var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = "S�ljarens namn";
    var $_PHPSHOP_VENDOR_LIST_ADMIN = "Admin";
    
    // Vendor Form
    var $_PHPSHOP_VENDOR_FORM_MNU = "L�gg till s�ljare";
    var $_PHPSHOP_VENDOR_FORM_LBL = "L�gg till information";
    var $_PHPSHOP_VENDOR_FORM_INFO_LBL = "S�ljarinformation";
    var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = "Kontaktinformation";
    var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = "Stor bild";
    var $_PHPSHOP_VENDOR_FORM_UPLOAD = "Ladda upp bild";
    var $_PHPSHOP_VENDOR_FORM_STORE_NAME = "�terf�rs�ljarnamn";
    var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = "S�ljarens f�retagsnamn";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = "Adressrad 1";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = "Adressrad 2";
    var $_PHPSHOP_VENDOR_FORM_CITY = "Stad";
    var $_PHPSHOP_VENDOR_FORM_STATE = "Landskap/Provins/Region";
    var $_PHPSHOP_VENDOR_FORM_COUNTRY = "Land";
    var $_PHPSHOP_VENDOR_FORM_ZIP = "Postnummer";
    var $_PHPSHOP_VENDOR_FORM_PHONE = "Telefon";
    var $_PHPSHOP_VENDOR_FORM_CURRENCY = "Betalningsmedel/valuta";
    var $_PHPSHOP_VENDOR_FORM_CATEGORY = "S�ljarkategori";
    var $_PHPSHOP_VENDOR_FORM_LAST_NAME = "Efternamn";
    var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = "F�rnamn";
    var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = "Mellannamn";
    var $_PHPSHOP_VENDOR_FORM_TITLE = "Titel";
    var $_PHPSHOP_VENDOR_FORM_PHONE_1 = "Telefon 1";
    var $_PHPSHOP_VENDOR_FORM_PHONE_2 = "Telefon 2";
    var $_PHPSHOP_VENDOR_FORM_FAX = "Fax";
    var $_PHPSHOP_VENDOR_FORM_EMAIL = "E-post";
    var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = "S�kv�g f�r bild";
    var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = "Beskrivning";
    
    
    // Vendor Category List
    var $_PHPSHOP_VENDOR_CAT_LIST_MNU = "Lista s�ljarkategorier";
    var $_PHPSHOP_VENDOR_CAT_LIST_LBL = "S�ljarkategorier";
    var $_PHPSHOP_VENDOR_CAT_NAME = "Kategorinamn";
    var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = "Kategoribeskrivning";
    var $_PHPSHOP_VENDOR_CAT_VENDORS = "S�ljare";
    
    // Vendor Category Form
    var $_PHPSHOP_VENDOR_CAT_FORM_MNU = "L�gg till s�ljarkategori";
    var $_PHPSHOP_VENDOR_CAT_FORM_LBL = "S�ljarkategori";
    var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = "Kategoriinformation";
    var $_PHPSHOP_VENDOR_CAT_FORM_NAME = "Kategorinamn";
    var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = "Kategoribeskrivning";
    
    /*#####################
    MODULE MANUFACTURER
    #####################*/

    # Some LABELs
    var $_PHPSHOP_MANUFACTURER_MOD = "Tillverkare";
    var $_PHPSHOP_MANUFACTURER_ADMIN = "Tillverkare";
    
    
    // Manufacturer List
    var $_PHPSHOP_MANUFACTURER_LIST_MNU = "Lista tillverkare";
    var $_PHPSHOP_MANUFACTURER_LIST_LBL = "Tillverkare";
    var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = "Namn";
    var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = "Administration";
    
    // Manufacturer Form
    var $_PHPSHOP_MANUFACTURER_FORM_MNU = "L�gg till tillverkare";
    var $_PHPSHOP_MANUFACTURER_FORM_LBL = "L�gg till information";
    var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = " Information om tillverkare ";
    var $_PHPSHOP_MANUFACTURER_FORM_NAME = "Tillverkarens namn";
    var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = "Tillverkarkategori";
    var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = "E-post";
    var $_PHPSHOP_MANUFACTURER_FORM_URL = "URL till tillverkares hemsida";
    var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = "Beskrivning";
    
    
    // Manufacturer Category List
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = "Lista tillverkarkategorier";
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = "Tillverkarkategorier";
    var $_PHPSHOP_MANUFACTURER_CAT_NAME = "Kategorinamn";
    var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = "Kategoribeskrivning";
    var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = "Tillverkare";
    
    // Manufacturer Category Form
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = "L�gg till tillverkarkategori";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = "Tillverkarkategori";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = "Kategoriinformation";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = "Kategorinamn";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = "Kategoribeskrivning";
    
    
    /*#####################
    Modul HELP
    #####################*/
    var $_PHPSHOP_HELP_MOD = "Hj�lp (engelska)";
    
    // 210104 start
    
    var $_PHPSHOP_CART_ACTION = "Uppdatera";
    var $_PHPSHOP_CART_UPDATE = "Uppdatera antal";
    var $_PHPSHOP_CART_DELETE = "Ta bort produkten fr�n varukorgen";
    
    //shopbrowse form
    
    var $_PHPSHOP_PRODUCT_PRICETAG = "Pris";
    var $_PHPSHOP_PRODUCT_CALL = "Ring f�r prisuppgift";
    var $_PHPSHOP_PRODUCT_PREVIOUS = "F�reg�ende";
    var $_PHPSHOP_PRODUCT_NEXT = "N�sta";
    
    //ro_basket
    
    var $_PHPSHOP_CART_TAX = "Moms";
    var $_PHPSHOP_CART_SHIPPING = "Frakt och expeditionskostnad";
    var $_PHPSHOP_CART_TOTAL = "Totalt";
    
    //CHECKOUT.INDEX
    
    var $_PHPSHOP_CHECKOUT_NEXT = "N�sta";
    var $_PHPSHOP_CHECKOUT_REGISTER = "Registrera";
    
    //CHECKOUT.CONFIRM
    
    var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = "Fakturainformation";
    var $_PHPSHOP_CHECKOUT_CONF_COMPANY = "F�retag";
    var $_PHPSHOP_CHECKOUT_CONF_NAME = "Namn";
    var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = "Adress";
    var $_PHPSHOP_CHECKOUT_CONF_PHONE = "Telefon";
    var $_PHPSHOP_CHECKOUT_CONF_FAX = "Fax";
    var $_PHPSHOP_CHECKOUT_CONF_EMAIL = "E-post";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = "Leveransinformation";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = "F�retag";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = "Namn";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = "Adress";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = "Telefon";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = "Fax";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = "Betalningsinformation";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = "Namn p� kort";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = "Betalningsmetod";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = "Kreditkortsnummer";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = "Utg�ngsdatum";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = "Slutf�r order";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = "Information som beh�vs n�r betalning via kreditkort �r valt.";
    
    
    var $_PHPSHOP_ZONE_MOD = "Leveranszon";
    
    var $_PHPSHOP_ZONE_LIST_MNU = "Lista �ver zoner";
    var $_PHPSHOP_ZONE_FORM_MNU = "L�gg till zon";
    var $_PHPSHOP_ZONE_ASSIGN_MNU = "Tilldela zoner";
    
    // assign zone List
    var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = "Land";
    var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = "Nuvarande zon";
    var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = "Tilldela till zon";
    var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = "Uppdatera";
    var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = "Tilldela zoner";
    
    // zone Form
    var $_PHPSHOP_ZONE_FORM_NAME_LBL = "Zonnamn";
    var $_PHPSHOP_ZONE_FORM_DESC_LBL = "Zonbeskrivning";
    var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = "Zonkostnad per f�rem�l";
    var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = "Zonkostnadstak";
    
    // List of zones
    var $_PHPSHOP_ZONE_LIST_LBL = "Zonlista";
    var $_PHPSHOP_ZONE_LIST_NAME_LBL = "Zonnamn";
    var $_PHPSHOP_ZONE_LIST_DESC_LBL = "Zonbeskrivning";
    var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = " Zonkostnad per f�rem�l ";
    var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = "Zonkostnadstak";
    
    var $_PHPSHOP_LOGIN_FIRST = "Var v�nlig och logga in p� denna sida (anv�nd Login-modulen) f�rst.<br>Tack.";
    var $_PHPSHOP_STORE_FORM_TOS = "K�pvillkor";
    var $_PHPSHOP_AGREE_TO_TOS = "Var v�nlig och acceptera k�pvillkoren f�rst.";
    var $_PHPSHOP_I_AGREE_TO_TOS = "Jag godk�nner k�pvillkoren";
    
    var $_PHPSHOP_LEAVE_BLANK = "(l�mna TOM om du har <br />ingen individuell php-fil f�r det!)";
    var $_PHPSHOP_RETURN_LOGIN = "Logga in f�r att genomf�ra k�pet";
    var $_PHPSHOP_NEW_CUSTOMER = "Ny kund? Fyll i dina kontouppgifter nedan";
    var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = "Kundsida - ";
    var $_PHPSHOP_ACC_ORDER_INFO = "Orderinformation";
    var $_PHPSHOP_ACC_UPD_BILL = "H�r kan du uppdatera dina uppgifter.";
    var $_PHPSHOP_ACC_UPD_SHIP = "H�r kan du l�gga till och �ndra adresser.";
    var $_PHPSHOP_ACC_ACCOUNT_INFO = "Faktureringsinformation";
    var $_PHPSHOP_ACC_SHIP_INFO = "Leveransinformation";
    var $_PHPSHOP_ACC_NO_ORDERS = "Inga ordrar att visa";
    var $_PHPSHOP_ACC_BILL_DEF = "Faktureringsadress �r leveransadress";
    var $_PHPSHOP_SHIPTO_TEXT = "Du kan l�gga till addresser till ditt konto. Ange ett eget namn f�r adresserna du har angivit.";
    var $_PHPSHOP_CONFIG = "Konfiguration";
    var $_PHPSHOP_USERS = "Anv�ndare";
    var $_PHPSHOP_IS_CC_PAYMENT = "�r det kreditkortsbetalning?";
    
    /*#####################################################
     MODULE SHIPPING
    #######################################################*/
    var $_PHPSHOP_SHIPPING_MOD = "Leverans";
    var $_PHPSHOP_SHIPPING_MENU_LABEL = "Leverans";
    
    var $_PHPSHOP_CARRIER_LIST_MNU = "Lista transportfirmor";
    var $_PHPSHOP_CARRIER_LIST_LBL = "Transportfirma";
    var $_PHPSHOP_RATE_LIST_MNU = "Lista leverandsmetoder";
    var $_PHPSHOP_RATE_LIST_LBL = "Leveransmetod";
    var $_PHPSHOP_CARRIER_LIST_NAME_LBL = "Namn";
    var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = "Listordning";
    
    var $_PHPSHOP_CARRIER_FORM_MNU = "L�gg till transportfirma";
    var $_PHPSHOP_CARRIER_FORM_LBL = "L�gg till/�ndra transportfirma";
    var $_PHPSHOP_RATE_FORM_MNU = "L�gg till leveransmetod";
    var $_PHPSHOP_RATE_FORM_LBL = "L�gg till/�ndra en leveransmetod";
    
    var $_PHPSHOP_RATE_FORM_NAME = "Leveransmetodsbeskrivning";
    var $_PHPSHOP_RATE_FORM_CARRIER = "Transportfirma";
    var $_PHPSHOP_RATE_FORM_COUNTRY = "Land";
    var $_PHPSHOP_RATE_FORM_ZIP_START = "Postnummer fr�n";
    var $_PHPSHOP_RATE_FORM_ZIP_END = "Postnummer till";
    var $_PHPSHOP_RATE_FORM_WEIGHT_START = "L�gsta vikt";
    var $_PHPSHOP_RATE_FORM_WEIGHT_END = "H�gsta vikt";
    var $_PHPSHOP_RATE_FORM_VALUE = "Avgift";
    var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = "Din paketavgift";
    var $_PHPSHOP_RATE_FORM_CURRENCY = "Valuta/betalningsmetod";
    var $_PHPSHOP_RATE_FORM_VAT_ID = "Momssats";
    var $_PHPSHOP_RATE_FORM_LIST_ORDER = "Listordning";
    
    var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = "Transportfirma";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = "Leveransmetodsbeskrivning";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = "Vikt fr�n ...";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = "... till";
    var $_PHPSHOP_CARRIER_FORM_NAME = "Namn";
    var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = "Listordning";
    
    var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = "FEL: Transportfirma-ID finns redan.";
    var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = "FEL: V�lj en transportfirma.";
    var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = "FEL: Minst en leveransmetod finns associerad med transportfirman. Ta bort dessa f�rst.";
    var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = "FEL: Kunde inte hitta en transportfirma med detta ID.";
    
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = "FEL: V�lj en transportfirma.";
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = "FEL: Kunde inte hitta en transportfirma med detta ID.";
    var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = "FEL: En leveransmetodsbeskrivning kr�vs.";
    var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = "FEL: Destinationslandet �r ej godk�nt. Flera l�nder kan avdelas med \";\".";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = "FEL: En l�gsta vikt �r beg�rd";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = "FEL: En h�gsta vikt �r beg�rd";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = "FEL: Den l�gsta vikten m�ste vara l�gre �n den h�gsta vikten";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = "FEL: En leveransmetod efterfr�gas.";
    var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = "FEL: V�lj en valuta/betalningsmetod";
    
    var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = "FEL: En leveransmetod efterfr�gas.";
    
    var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = "v�nligen v�lj";
    var $_PHPSHOP_INFO_MSG_CARRIER = "Transportfirma";
    var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = "Leveransmetod";
    var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = "Pris";
    var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = "0 (-ingen-)";
    /*#####################################################
     END: MODULE SHIPPING
    #######################################################*/
    
    var $_PHPSHOP_PAYMENT_FORM_CC = "Kreditkort";
    var $_PHPSHOP_PAYMENT_FORM_USE_PP = "Anv�nder betalningshanterare";
    var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = "Bankkort";
    var $_PHPSHOP_PAYMENT_FORM_AO = "Postf�rskott";
    var $_PHPSHOP_CHECKOUT_MSG_2 = "V�nligen v�lj en leveransadress!";
    var $_PHPSHOP_CHECKOUT_MSG_3 = "V�nligen v�lj en leveransmetod!";
    var $_PHPSHOP_CHECKOUT_MSG_4 = "v�nligen v�lj en betalningsmetod!";
    var $_PHPSHOP_CHECKOUT_MSG_99 = "G� igenom alla uppgifter och godk�nn sedan k�pet!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = "V�nligen v�lj en leveransmetod!";
    var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = "V�nligen v�lj ytterligare en leveransmetod!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = "V�nligen v�lj en betalningsmetod.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = "V�nligen fyll i ditt kreditkortsnummer.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = "v�nligen och fyll i namnet p� kreditkortet.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = "Kreditkortsnumret du angivit �r inte godk�nt.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = "V�nligen fyll i utg�ngsm�nad f�r kreditkortet";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = "V�nligen fyll i utg�ngs�r f�r kreditkortet.";
    var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = "Utg�ngsdatumet �r ogiltigt.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = "V�nligen v�lj en leveransadress.";
    var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = "Ogiltligt kontonummer.";
    var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = "Din varukorg �r tom!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = "FEL: V�nligen v�l en transportfirma!";
    var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = "FEL: Den valda fraktmetoden hittades ej!";
    var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = "FEL: Din levernasadress hittades ej!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = "FEL: det finns ingen kreditkortsdata...";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = "FEL: Kreditkortsnummer hittades inte!";
    var $_PHPSHOP_CHECKOUT_ERR_TEST = "Kreditkortsnumret du har angivit �r ett testnummer!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = "Anv�ndarnamnet finns inte i v�r databas!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = "Du har inte angivit namnet p� den person som �r registrerad p� bankkonto.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = "Du har inte angivit ditt IBAN-nummer.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = "Du har inte angivit ditt bankkontonummer.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = "Du har inte angivit din/ditt clearingnummer.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = "Du har inte angivit din banks namn.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = "Utcheckningen kr�ver ett giltligt steg!";

    var $_PHPSHOP_CHECKOUT_MSG_LOG = "Betalningsmetod sparad f�r senare anv�ndning.<br />";
    
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = "Du har inte kommit upp till l�gsta orderv�rde �nnu.";
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = "L�gsta orderv�rde �r: xxxx";
    var $_PHPSHOP_CHECKOUT_PAYMENT_CC = "Kreditkortsbetalning";
    var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = "Annan betalningsmetod";
    var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = "V�nligen v�lj en betalningsmetod:";
    
    var $_PHPSHOP_STORE_FORM_MPOV = "L�gsta orderv�rde f�r din aff�r";
    var $_PHPSHOP_ACCOUNT_BANK_TITLE = "Bankkontoinformation";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = "Kontonummer";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = "Clearingnummer";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = "Banknamn";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = "IBAN";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = "Kontoansvarig";
    
    var $_PHPSHOP_MODULES = "Moduler";
    var $_PHPSHOP_FUNCTIONS = "Funktioner";
    var $_PHPSHOP_SPECIAL_PRODUCTS = "Specialprodukter";
    
    var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = "V�nligen fyll i �vrig orderinformation. (valfritt)";
    var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = "Kundens notering";
    var $_PHPSHOP_INCLUDING_TAX = "(inkl. \$tax % moms)";
    var $_PHPSHOP_PLEASE_SEL_ITEM = "V�nligen v�lj en produkt";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = "Produkt";

    // DOWNLOADS
    
    var $_PHPSHOP_DOWNLOADS_TITLE = "Nedladdningsarea";
    var $_PHPSHOP_DOWNLOADS_START = "Starta nedladdning";
    var $_PHPSHOP_DOWNLOADS_INFO = "V�nligen ange din nedladdningskod och klicka p� 'Starta nedladdning'.";
    var $_PHPSHOP_DOWNLOADS_ERR_EXP = "Din nedladdningskod �r tyv�rr utg�ngen.";
    var $_PHPSHOP_DOWNLOADS_ERR_MAX = "Du har tyv�rr f�rbrukat tilldelat antal nedladdningar.";
    var $_PHPSHOP_DOWNLOADS_ERR_INV = "Ogiltlig nedladdningskod!";
    var $_PHPSHOP_DOWNLOADS_ERR_SEND = "Kunde ej skicka meddelande till ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG = "Meddelande skickat till ";
    var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = "Nedladdningsinformation";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = "filerna du har best�llt �r klara f�r nedladdning";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = "V�nligen ange f�ljande nedladdningskoder i v�r Nedladdningsarea: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = "maximalt antal nedladdningar per fil �r: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = "Ladda ner i {expire} dagar efter f�rsta nedladdningen.";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = "Fr�gor? Problem?";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = "Nedladdningsinformation fr�n ";
    var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = "Nedladdningsbar produkt?"; 
    
    var $_PHPSHOP_PAYPAL_THANKYOU = "Tack f�r din betalning. Transaktionen lyckades. 
                                                                         Du kommer att f� ett bekr�ftelsemail av PayPal. 
                                                                         Du kan nu forts�tta eller logga in p� <a href=http://www.paypal.com>www.paypal.com</a> f�r att se transaktionsdetaljer.";
    var $_PHPSHOP_PAYPAL_FEL = "Ett FEL uppstod under transaktionsbearbetningen. Din orderstatus kunde inte uppdateras";
    
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = "Tack f�r att du har handlat hos oss. Din orderinformation f�ljer.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = "V�lkommen �ter!";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = "Fr�gor? Problem?";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = "F�ljande order togs emot.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = "Se ordern genom att klicka p� l�nken nedan.";
    
    var $_PHPSHOP_CART_FEL_NO_NEGATIVE = "Negativa kvantiter �r inte till�tna.";
    var $_PHPSHOP_CART_FEL_NO_VALID_QUANTITY = "V�nligen ange ett giltligt antal f�r produkten.";
    
    var $_PHPSHOP_CART_STOCK_1 = "Det valda �verstiger antal p� lager. ";
    var $_PHPSHOP_CART_STOCK_2 = "Vi har \$product_in_stock st p� lager f�r n�rfarande. ";
    var $_PHPSHOP_CART_STOCK_3 = "Klicka h�r f�r att placeras p� v�r v�ntelista.";
    var $_PHPSHOP_CART_SELECT_ITEM = "V�nligen v�lj en specialprodukt fr�n detaljsidan!";
    
    var $_PHPSHOP_REGISTRATION_FORM_NONE = "ingen";
    var $_PHPSHOP_REGISTRATION_FORM_MR = "Herr";
    var $_PHPSHOP_REGISTRATION_FORM_MRS = "Fru";
    var $_PHPSHOP_REGISTRATION_FORM_DR = "Dr.";
    var $_PHPSHOP_REGISTRATION_FORM_PROF = "Prof.";
    var $_PHPSHOP_DEFAULT = "Standard";
    
  /*#####################################################
    MODULE AFFILIATE
  #######################################################*/
    var $_PHPSHOP_AFFILIATE_MOD   = "Partneradministration";
    
    // Affiliate List
    var $_PHPSHOP_AFFILIATE_LIST_MNU        = "Lista partnerf�retag";
    var $_PHPSHOP_AFFILIATE_LIST_LBL        = "Partners";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = "Namn";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = "Aktiv";
    var $_PHPSHOP_AFFILIATE_LIST_RATE       = "Rate";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = "M�nadstotal";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION ="M�nadsprovision";
    var $_PHPSHOP_AFFILIATE_LIST_ORDERS = "Listordning";
    
    // Affiliate Email
    var $_PHPSHOP_AFFILIATE_EMAIL_MNU       = "E-postutskick partners";
    var $_PHPSHOP_AFFILIATE_EMAIL_LBL       = "E-postutskick partners";
    var $_PHPSHOP_AFFILIATE_EMAIL_WHO   = "Till vem? (* = Alla)";
    var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT       = "Din e-postadress";
    var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = "�mne";
    var $_PHPSHOP_AFFILIATE_EMAIL_STATS  = "Inkludera aktuell statistik";
    
    // Affiliate Form
    var $_PHPSHOP_AFFILIATE_FORM_RATE       = "Provisionsniv� (procent)";
    var $_PHPSHOP_AFFILIATE_FORM_ACTIVE     = "Aktiv?";
    
    var $_PHPSHOP_DELIVERY_TIME = "Ber�knad leveranstid";
    var $_PHPSHOP_DELIVERY_INFORMATION = "Leveransinformation";
    var $_PHPSHOP_MORE_CATEGORIES = "fler kategorier";
    var $_PHPSHOP_AVAILABILITY = "Tillg�nglighet";
    var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = "Denna produkt finns f�r n�rvarande inte p� lager.";
    var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = "Finns p� lager from:";
    
    var $_PHPSHOP_STATISTIC_SUMMARY = "Summering";
    var $_PHPSHOP_STATISTIC_STATISTICS = "Statistik";
    var $_PHPSHOP_STATISTIC_CUSTOMERS = "Kunder";
    var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = "aktiva produkter";
    var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = "inaktiva produkter";
    var $_PHPSHOP_STATISTIC_SUM = "Summa";
    var $_PHPSHOP_STATISTIC_NEW_ORDERS = "Nya ordrar";
    var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = "Nya kunder";
   
      
    //Waiting list : file /administrator/components/com_phpshop/html/shop.waiting_list.php
    var $_PHPSHOP_WAITING_LIST_MESSAGE = "V�nligen ange din e-postadress nedan f�r att bli meddelad n�r produkten �ter �r i lager.
                                          Vi kommer inte att anv�nda din e-postadress i n�got annat syfte �n att 
                                          tala om f�r dig n�r produkten �ter �r i lager.<br /><br />Tack!";
    var $_PHPSHOP_WAITING_LIST_THANKS = "Tack f�r att du v�ntade! <br />Vi h�r av oss s� fort varan kommer in.";
    var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = "Meddela mig!";
    
    //Checkout : file /administrator/components/com_phpshop/html/checkout.thankyou.php
    var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = "F�rhandsgranska utskrift.";
        
    /**************************Admin.show_cfg.php in apparition order ;-)**************************************/
    
    /* PAGE 1 */
    var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = "Var v�nlig och v�lj Authorize.net eller CyberCash";
    var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = "Status p� konfigurationsfil:";
    var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = "�r skrivbar";
    var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = "�r inte skrivbar";
    
    var $_PHPSHOP_ADMIN_CFG_GLOBAL = "Global";
    var $_PHPSHOP_ADMIN_CFG_PATHANDURL = "K�lla & URL";
    var $_PHPSHOP_ADMIN_CFG_SITE = "Hemsida";
    var $_PHPSHOP_ADMIN_CFG_SHIPPING = "Leverans";
    var $_PHPSHOP_ADMIN_CFG_CHECKOUT = "Kassa";
    var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = "Nedladdningar";
    var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = "Betalningss�tt";
    var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = "Anv�nd bara som produktkatalog";
    var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = "Om du v�ljer detta s� inaktiveras alla funktioner i varukorgen.";
    var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = "Visa priser";
    var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = "Visa priser inkl. moms.";
    var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = "St�ller in huruvida kunden ser priset inkl. eller exkl. moms.";
    var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = "Kryssa i f�r att visa priser.";
    var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = "Virtuell moms";
    var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = "Detta avg�r om produkter utan vikt momms�tts eller ej. Modifiera ps_checkout.php->calc_order_taxable() f�r att anpassa detta.";
    var $_PHPSHOP_ADMIN_CFG_TAX_MODE = "Momsl�ge:";
    var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = "Baserat p� leveransadress";
    var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = "Baserat p� tillverkarens adress";
    var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = "Detta avg�r vilken momssats som anv�nds f�r att r�kna ut moms:<br /> 
                                                  <ul><li>den som g�ller i s�ljarens region/land</li><br/> 
                                                  <li>eller den som g�ller i k�parens region/land.</li></ul>";
    var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = "Aktivera multipla momssatser.";
    var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = "V�lj detta om du har produkter med en annan momssats (t.ex 6% f�r b�cker och mat, 12% f�r annat)";
    var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = "R�kna av eventuell rabatt exkl. moms och frakt?";
    var $_PHPSHOP_ADMIN_CFG_REVIEW = "M�jligg�r betygss�ttningsystem";
    var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = "I l�ge \"P�\" till�ts kunderna att <strong>betygs�tta produkter</strong> och att <strong>skriva recensioner</strong> om dem. <br /> 
                                           D�rmed kan kunden tipsa andra om sina erfarenheter av produkten.<br />";
    var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = "R�knar av eventuell rabatt innan moms och fraktkostanader adderas till ordern.";
    var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = "Kunder kan l�mna bankkontoinformation.";
    var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = "Kryssa i om dina kunder ska ha m�jlighet att l�mna bankkontoinformation n�r de registrerar sig.";
  
    var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = "Kunder v�ljer stat/region.";
    var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = " Bocka f�r om dina kunder ska ha m�jligheten att v�lja stat/region n�r de registrerar sig.";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = "Kunden m�ste godk�nna anv�ndaravtal.";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = "Kryssa i om du vill att bes�karen(kunden) ska g� med p� ditt anv�ndaravtal innan han/hon registrerar sig.";
    var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = "Kontrollera lagersaldo.";
    var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = "Kryssa i om du vill att lagersaldo ska kontrolleras n�r en vara l�ggs i varukorgen. 
                                                                                                    Om detta �r inst�llt kan kunden inte l�gga till fler produkter till varukorgen �n vad som finns i lager.";
                                                                                                 
    var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = "Aktivera partnerprogram.";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = "Detta aktiverar partnersp�rning i webbutiken. Aktivera detta om du har lagt in partners.";
    
    var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = "Format p� orderbekr�ftelse:";
    var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = "Endast text";
    var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = "HTML";
    var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = "Detta avg�r format p�  orderbekr�ftelse:<br />
                                                                                          <ul><li>som ett enkelt textmail</li>
                                                                                          <li>eller som ett html-mail med bilder.</li></ul>";
    var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = "Till�t butiksadministration f�r butiksanv�ndare";
    var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = "Med detta aktiverat m�jligg�rs administration av butiken f�r anv�ndare som 
                                              har befogenhet f�r butiksadministration men saknar tillg�ng till administrat�rsgr�nssnittet.";
    
    /* PAGE 2 */
    var $_PHPSHOP_ADMIN_CFG_URL = "URL";
    var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = "URL till din hemsida. Vanligtvis identisk med URL till din Mamboinstallation (med ett / p� slutet)";
    var $_PHPSHOP_ADMIN_CFG_URLSECURE = "S�ker URL";
    var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = "S�ker URL till din hemsida. (https - med ett / p� slutet)";
    var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = "Komponent";
    var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = "URL till komponenten mambo-phpShop. (med ett / p� slutet)";
    var $_PHPSHOP_ADMIN_CFG_URLIMAGE = "Bilder";
    var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = "URL till bildkatalogen f�r komponenten mambo-phpShop.(med ett / p� slutet)";
    var $_PHPSHOP_ADMIN_CFG_ADMINPATH = "Administration";
    var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = "S�kv�g till komponenten mambo-phpShop.";
    var $_PHPSHOP_ADMIN_CFG_CLASSPATH = "Klasser";
    var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = "S�kv�g till katalogen classes.";
    var $_PHPSHOP_ADMIN_CFG_PAGEPATH = "Sidor";
    var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = "S�kv�g till katalogen html.";
    var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = "Bilder";
    var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = "S�kv�g till katalogen shop_image.";
    var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = "Hemsida";
    var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = "Detta �r shoppens startsida.";  
    var $_PHPSHOP_ADMIN_CFG_FELPAGE = "Felsida";
    var $_PHPSHOP_ADMIN_CFG_FELPAGE_EXPLAIN = "Detta �r standardsidan f�r felmeddelanden."; 
    var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = "Debug-sida";
    var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = "Detta �r standardsidan f�r debug-meddelanden.";
    var $_PHPSHOP_ADMIN_CFG_DEBUG = "Debug?";
    var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = "Sl�r p� debug-funktionen l�ngst ner p� sidan som visar data f�r att hj�lpa vid fels�kning.";
  
  
  /* PAGE 3 */
  
    var $_PHPSHOP_ADMIN_CFG_FLYPAGE = "Produktsida";
    var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = "S�kv�g till mallen f�r sidan som visar produktdetaljer.";
    var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = "Kategorimall";
    var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = "S�kv�g till mallen f�r sidan som listar produkte ri en kategori.<br /> 
                                                         Du kan skapa en egen mall genom att anpassa befintliga mallfiler <br /> 
                                                         (som finns i mappen <strong>KOMPONENTS�KV�G/html/templates/</strong> och vars filnamn b�rjar med browse_)";
    var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = "Antal produkter i rad";
    var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = "Detta definierar antal produkter som visas i rad p� samma sida. <br />";
    
    var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = "\"bild saknas\"-bild";
    var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = "Denna bild kommer att visas n�r det inte finns en bild f�r produkten.";
    var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = "S�k rader";
    var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = "Specificerar antal rader per sida som visas i s�kresultat.";
    var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = "S�k f�rg 1";
    var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = "Specificerar f�rgen p� udda rader i en resultatlista. (dvs. varannan rad)";
    var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = "S�K F�RG 2";
    var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = "Specificerar f�rgen p� j�mna rader i en resultatlista.(dvs. varannan rad)";
    var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = "Max antal rader";
    var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = "Specificerar max antal rader i orderlistan.";
    var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = "Visa sidfot \"powered by mambo-phpShop\" ?";
    var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = "Visar en bild i sidfot med texten \"powered by mambo-phpShop\"";
    
    
    /* PAGE 4 */
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = "V�lj leveranstyp f�r din butik";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = "Standard fraktmodul med individuellt inst�llda transportfirmor och leveransmetoder. <strong>REKOMMENDERAS!</strong>";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = "Zone Shipping Module Country version 1.0<br />
                                                                                                              F�r mer information om denna modul bes�k <a href=\"http://ZephWare.com\">http://ZephWare.com</a><br />
                                                                                                              eller kontakta <a href=\"mailto:zephware@devcompany.com\">zephware@devcompany.com</a><br />";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = "UPS fraktverktyg";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = "Beh�rightetskod";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = "Din beh�righetskod fr�n UPS";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = "Anv�ndarid";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = "Ditt anv�ndarid fr�n UPS";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = "L�senord";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = "L�senord f�r ditt UPS-konto";
      
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = "InterShipper modul. V�lj detta om du har ett konto p� Intershipper.com";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = "Inaktivera val av leveranss�tt. V�lj detta om dina kunder k�per nedladdningsbara varor som inte beh�ver skickas.";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = "L�senord";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = "L�senord f�r ditt konto p� Intershipper.com";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = "E-post";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = "E-postadress f�r ditt konto p� Intershipper,com";
    var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = "Kodnyckel";
    var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = "Data i databasen krypteras med denna nyckel, d�rf�r �r det viktigt att kodnyckeln skyddas.";
    
    
    /* PAGE 5 */
    
    var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = "Aktivera orderg�ngslisten";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = "Kryssa i f�r att aktivera orderg�ngslisten som underl�ttar best�llningen f�r kunden ( 1 - 2 - 3 - 4 med bilder).";
    
    var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = "V�lj best�llningsproceduren f�r din butik";
    var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = "<strong>Standard :</strong><br/> 
                1. Beg�ran om leveransdress.<br /> 
                2. Beg�ran om leveranss�tt.<br /> 
                3. Beg�ran om betalningss�tt.<br /> 
                4. Slutf�r best�llningen.";
    var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = "<strong>Process 2:</strong><br/> 
                 1. Beg�ran om leveransadress.<br /> 
                2. Beg�ran om betalningss�tt.<br /> 
                3. Slutf�r best�llningen.";
    var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = "<strong>Process 3:</strong><br/> 
                1. Beg�ran om leveranss�tt.<br /> 
                2. Beg�ran om betalningss�tt.<br /> 
                3. Slutf�r best�llningen."; 
    var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = "<strong>Process 4:</strong><br/> 
                1. Beg�ran om betalningss�tt.<br /> 
                2. Slutf�r best�llningen.";
        
    /* PAGE 6 */
    var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = "Aktivera nedladdningar";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = "Aktiverar nedladdningsarea f�r att s�lja nedladdningsbara produkter.";
    
    var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = "Orderstatus som m�jligg�r nedladdning";
    var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = "V�lj den orderstatus som kunden meddelas via e-post vid nedladdning.";
    
    var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = "Orderstatus som om�jligg�r nedladdningar.";
    var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = "V�lj orderstatus som sp�rrar nedladdningar.";
    
    var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = "Nedladdningsmapp";
    var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = "S�kv�gen till filerna som kan laddas ner. (med / p� slutet!)<br>
          <span class=\"message\">F�r din butiks s�kerhet: Om det �r m�jligt s� anv�nd en mapp N�GONSTANS UTANF�R WEBBPLATSENS ROTMAPP</span>";
    
    
    var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = "Maximal nedladdning";
    var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = "S�tter gr�ns f�r antal nedladdningar som kan ske med ett nedladdnings-ID, (f�r en best�llning)";
    
    var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = "Nedladdningen har upph�rt att g�lla";
    var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = "S�tter tidsgr�ns <strong>i sekunder</strong> som nedladdningen �r m�jlig f�r kunden. 
    Detta intervall b�rjar i och med f�rsta nedladdningen! N�r intervallet har passerats, s� upph�r nedladdnings-ID't att g�lla.<br />Notera : 86400s=24h.";
        
    /* PAGE 7 */
    
    var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = "Anv�nd IPN-betalning genom PayPal";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = "Kryssa i om du vill till�ta dina kunder att anv�nda PayPal som betalningss�tt.";
    var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = "PayPal E-post:";
    var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = "Din butiks e-post f�r PayPal betalningar. Anv�nds �ven f�r mottagna mail.";
    var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = "Orderstatus f�r genomf�rda transaktioner";
    var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = "V�lj orderstatus som aktuell best�llning s�tts till om IPN-betalning via PayPal g�r igenom. 
    Om du anv�nder nedladdningsfunktionen:  v�lj den status som aktiverar nedladdningen (d� f�r kundne genast e-post med nedladdnings-ID)."; 
             var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = "Orderstatus f�r misslyckade transaktioner";
    var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = "V�lj en orderstatur f�r misslyckade PayPal-transaktioner.";
    
    
    var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = "Anv�nd betalning via PayMate";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = "Kryssa i om du vill l�ta dina kunder anv�nda Australian PayMate som betalningss�tt.";
    var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = "Anv�ndarnamn:";
    var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = "Ditt anv�ndarkonto f�r PayMate.";
    
    
    
    var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = "Anv�nd betalning genom Authorize.net";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = "Kryssa i om du vill l�ta dina kunder anv�nda Authorize.net som betalningss�tt.";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = "Testl�ge";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = "Klicka 'JA' vid testning. Klicka 'NEJ' f�r att anv�nda riktiga transaktioner.";
    var $_PHPSHOP_ADMIN_CFG_YES = "JA";
    var $_PHPSHOP_ADMIN_CFG_NO = "NEJ";
    
    var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = "Anv�ndarnamn";
    var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = "�r det h�r ditt Authorize.Net Login ID";
    var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = "Transaktionsnyckel";
    var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = "�r det h�r Authorize.net Transaction Key";
    var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = "Autentiseringstyp";
    var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = "Det h�r �r Authorize.Net authentication typen.";
    
    
    var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = "Anv�nd CyberCash";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = "Kryssa i f�r att anv�nda CyberCash.";
    var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = "Anv�ndar-ID";
    var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = "Anv�ndar-ID f�r CyberCash";
    var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = "Nyckel";
    var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = "Anv�ndarnyckel f�r CyberCash";
    var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = "URL till CyberCash";
    var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = "URL som du har f�tt av Cybercash f�r s�ker betalning";
    var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = "Autentiseringstyp";
    var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = "Autentiseringstyp mottagen av CyberCash";
    

    /** Advanced Search feature ***/
    var $_PHPSHOP_ADVANCED_SEARCH  ="Avancerad s�kning";
    var $_PHPSHOP_SEARCH_ALL_CATEGORIES = "S�k alla kategorier";
    var $_PHPSHOP_SEARCH_ALL_PRODINFO = "S�k all produktinformation";
    var $_PHPSHOP_SEARCH_PRODNAME = "Endast produktnamn";
    var $_PHPSHOP_SEARCH_MANU_VENDOR = "Endast tillverkare";
    var $_PHPSHOP_SEARCH_DESCRIPTION = "Endast produktdetaljer";
    var $_PHPSHOP_SEARCH_AND = "OCH";
    var $_PHPSHOP_SEARCH_NOT = "INTE";
    var $_PHPSHOP_SEARCH_TEXT1 = " i det f�rsta rullf�nstet kan du v�lja en kategori f�r att begr�nsa din s�kning. 
        i det andra rullf�rnstret kan du v�lja att endast s�ka p� en del av produktinformationen (tex namn). 
        N�r du har gjort dessa val (eller anv�nt dig av standardinst�llningen ALLA), kan du skriva in ditt s�kord. ";
    var $_PHPSHOP_SEARCH_TEXT2 = " Du kan f�rfina din s�kning genom att s�ka efter fler ord och anv�nda dig av funktionerna 
            OCH samt INTE. Vid anv�ndning av OCH betyder det att b�da orden m�ste finnas med f�r att produkten ska finnas med i 
                tr�fflistan. Vid anv�ndning av INTE betyder det att produkten syns i tr�fflistan endast om f�rsta ordet finns med, men inte det andra ordet.";
    var $_PHPSHOP_ORDERBY = "Sortera efter";
    
    /*** Review feature ***/
    var $_PHPSHOP_CUSTOMER_RATING  = "Genomsnittligt konsumentbetyg";
    var $_PHPSHOP_TOTAL_VOTES = "Antal r�ster";
    var $_PHPSHOP_CAST_VOTE = "R�sta!";
    var $_PHPSHOP_RATE_BUTTON = "Betygs�tt";
    var $_PHPSHOP_RATE_NOM = "Betyg";
    var $_PHPSHOP_REVIEWS = "Konsumentrecensioner";
    var $_PHPSHOP_NO_REVIEWS = "Det finns �nnu ingen recension p� denna produkt.";
    var $_PHPSHOP_WRITE_FIRST_REVIEW = "Recensera produkten";
    var $_PHPSHOP_REVIEW_LOGIN = "Logga in f�r att skriva en recension.";
    var $_PHPSHOP_REVIEW_ERR_RATE = "V�nligen betygs�tt produkten f�r att fullborda din anm�lan!";
    var $_PHPSHOP_REVIEW_ERR_COMMENT1 = "V�nligen skriv ner fler �sikter i din recension. Minsta antal tecken: 100";
    var $_PHPSHOP_REVIEW_ERR_COMMENT2 = "V�nligen f�rkorta din recension. Maximalt antal tecken: 2000";
    var $_PHPSHOP_WRITE_REVIEW = "Recensera produkten!";
    var $_PHPSHOP_REVIEW_RATE = "F�rst: Betygs�tt produkten. V�lj ett betyg mellan 0 (l�gst) och 5 stj�rnor (h�gst).";
    var $_PHPSHOP_REVIEW_COMMENT = "Skriv nu en kort recension....(min. 100, max. 2000 tecken) ";
    var $_PHPSHOP_REVIEW_COUNT = "Anv�nda tecken: ";
    var $_PHPSHOP_REVIEW_SUBMIT = "Skicka recension";
    var $_PHPSHOP_REVIEW_ALREADYDONE = "Du har redan skrivit en recesion f�r den h�r produkten. Tack";
    var $_PHPSHOP_REVIEW_THANKYOU = "Tack f�r din recension.";
    var $_PHPSHOP_COMMENT= "Kommentar";
    
    var $_PHPSHOP_CREDITCARD_FORM_LBL = "L�gg till kreditkortstyp";
    var $_PHPSHOP_CREDITCARD_NAME = "Kreditkortsnamn";
    var $_PHPSHOP_CREDITCARD_CODE = "Kreditkort � Kortkod";
    var $_PHPSHOP_CREDITCARD_TYPE = "Kreditkortstyp";
    
    var $_PHPSHOP_CREDITCARD_LIST_LBL = "Kreditkortstyper";
    var $_PHPSHOP_UDATE_ADDRESS = "Uppdatera adress";
    var $_PHPSHOP_CONTINUE_SHOPPING = "Forts�tt handla";
    
    var $_PHPSHOP_THANKYOU_SUCCESS = "Ordern �r registrerad";
    var $_PHPSHOP_ORDER_LINK = "Klicka h�r f�r att se orderspecifikation.";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = "orderstatus f�r ordernummer {order_id} har uppdaterats.";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = "Ny status �r:";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = "F�lj l�nken f�r att se din best�llning (eller kopiera l�nken till webbl�sarens adressf�lt):";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = "Uppdaterad orderstatus: Din order {order_id}";
    var $_PHPSHOP_ORDER_LIST_NOTIFY = "Meddela kund?";
    var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = "Uppdatera orderstatus f�rst!";
    
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = "Rabatt p� produktens standardpris (%)";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = "Positivt v�rde: Om produkten saknar ett angivet pris f�r denna kundkategori minskas priset med X %. Ett negativt v�rde har motsatt effekt.";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = "Rabatt";
    var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = "Rabattlista";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = "L�gg till/redigera rabatt";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = "Rabatt";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = "Ange storleken p� rabatten";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = "Rabattyp";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = "Procent";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = "Summa";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = "Skall v�rdet vara en procentsats eller en summa?";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = "Startdatum f�r rabattperiod";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = "Anger startdatum f�r den dag d� rabattperioden b�rjar";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = "Slutdatum f�r rabattperioden";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = "Anger slutdatum f�r rabattperioden";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = "Du kan anv�nda rabattformul�ret f�r att l�gga till rabatter!";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = "Du sparar";
    
    var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = "Visa bild i full storlek";
    
/*********************
Currency Display Style 
***********************/
    var $_PHPSHOP_CURRENCY_DISPLAY = "Valutavisnings stil";
    var $_PHPSHOP_CURRENCY_SYMBOL = "Valuta symbol";
    var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = "Du kan ocks� anv�nda HTML kod h�r (t.ex. &amp;euro;,&amp;pound;,&amp;yen;,...)";
    var $_PHPSHOP_CURRENCY_DECIMALS = "Decimaler";
    var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = "Antal decimaler (kan vara 0)<br><b>Avrundas om v�rdet har annat antal decimaler</b>";
    var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = "Decimaltecken";
    var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = "Tecken att anv�nda som decimaltecken";
    var $_PHPSHOP_CURRENCY_THOUSANDS = "Tusentals separator";
    var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = "Tecken som anv�nds f�r att separera tusental (kan vara tom)";
    var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = "Positivt format";
    var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = "Visa format som anv�nds f�r att visa positiva v�rden.<br>(Symb st�r f�r valuta symbolen)";
    var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = "Negativt format";
    var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = "Visa format som anv�nds f�r att visa negativa v�rden.<br>(Symb st�r f�r valuta symbolen)";
    
    var $_PHPSHOP_OTHER_LISTS = "Andra produktlistor";
/**************
Multiple Images 
****************/
    var $_PHPSHOP_MORE_IMAGES = "Visa fler bilder";
    var $_PHPSHOP_AVAILABLE_IMAGES = "Tillg�ngliga bilder f�r";
    var $_PHPSHOP_BACK_TO_DETAILS = "�ter till produktdetaljer";
    
    /* FILEMANAGER */
    var $_PHPSHOP_FILEMANAGER = "Filhanterare";
    var $_PHPSHOP_FILEMANAGER_LIST = "Filhanterare::Produktlista";
    var $_PHPSHOP_FILEMANAGER_ADD = "L�gg till Bild/Fil";
    var $_PHPSHOP_FILEMANAGER_IMAGES = "Associera bilder";
    var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = "�r nedladdningsbar?";
    var $_PHPSHOP_FILEMANAGER_FILES = "Associerade filer (Produktblad,...)";
    var $_PHPSHOP_FILEMANAGER_PUBLISHED = "Publicerad?";
    
    /* FILE LIST */
    var $_PHPSHOP_FILES_LIST = "Filhanterare::Bilder/filer f�r";
    var $_PHPSHOP_FILES_LIST_FILENAME = "Filnamn";
    var $_PHPSHOP_FILES_LIST_FILETITLE = "Filtitel";
    var $_PHPSHOP_FILES_LIST_FILETYPE = "Fil typ";
    var $_PHPSHOP_FILES_LIST_EDITFILE = "Redigera filinformation";
    var $_PHPSHOP_FILES_LIST_FULL_IMG = "Full bild";
    var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = "Tumnagel";
    
    
    /* FILE FORM */
    var $_PHPSHOP_FILES_FORM = "Ladda upp fil f�r";
    var $_PHPSHOP_FILES_FORM_CURRENT_FILE = "Aktuell fil";
    var $_PHPSHOP_FILES_FORM_FILE = "Fil";
    var $_PHPSHOP_FILES_FORM_IMAGE = "Bild";
    var $_PHPSHOP_FILES_FORM_UPLOAD_TO = "Ladda upp till";
    var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = "Standard produkts�kv�g";
    var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = "Ange filens s�kv�g";
    var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = "S�kv�g till nedladdning(om man s�ljer nedladdningsbara varor!)";
    var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = "Skapa tumnagel automatiskt?";
    var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = "Filen �r publicerad?";
    var $_PHPSHOP_FILES_FORM_FILE_TITLE = "Filtitel (vad kunden ser)";
    var $_PHPSHOP_FILES_FORM_FILE_DESC = "Fil beskrivning";
    var $_PHPSHOP_FILES_FORM_FILE_URL = "Fil URL (valfri)";
    
    /* FILE & IMAGE PROCESSING */
    var $_PHPSHOP_FILES_PATH_ERROR = "V�nligen ange korrekt s�kv�g!";
    var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = "Tumnageln har framg�ngsrikt skapats!";
    var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = "Kunde INTE skapa tumnagel!";
    var $_PHPSHOP_FILES_UPLOAD_FAILURE = "Fil/Bild uppladdningsfel";
    
    var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = "Helbilds filen kunde inte raderas.";
    var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = "Helbilds filen raderad.";
    var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = "Kunde inte radera tumnagel filen (kanske den inte finns): ";
    var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = "Tumnagel filen raderades.";
    var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = "Kunde inte radera filen.";
    var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = "Filen har raderats.";
    
    var $_PHPSHOP_FILES_NOT_FOUND = "Tyv�rr, den beg�rda filen kan inte hittas!";
    var $_PHPSHOP_IMAGE_NOT_FOUND = "Bild saknas!";

    /*#####################
    MODULE COUPON
    #####################*/
    
    var $_PHPSHOP_COUPON_MOD = "Kupong";
    var $_PHPSHOP_COUPONS = "Kuponger";
    var $_PHPSHOP_COUPON_LIST = "Kuponglista";
    var $_PHPSHOP_COUPON_ALREADY_REDEEMED = "Kupongen har redan utnyttjats.";
    var $_PHPSHOP_COUPON_REDEEMED = "Kupongen godk�nd! Tack.";
    var $_PHPSHOP_COUPON_ENTER_HERE = "Om du har en kupongkod, ange den nedan:";
    var $_PHPSHOP_COUPON_SUBMIT_BUTTON = "Skicka";
    var $_PHPSHOP_COUPON_CODE_EXISTS = "Den kupongkoden finns redan. V�nligen f�rs�k igen.";
    var $_PHPSHOP_COUPON_EDIT_HEADER = "Uppdatera kupong";
    var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = "Klicka p� en kupongkod f�r att editera den, eller f�r att radera en kupongkod, v�lj den och klicka p� Radera:";
    var $_PHPSHOP_COUPON_CODE_HEADER = "Kod";
    var $_PHPSHOP_COUPON_PERCENT_TOTAL = "Procent av total";
    var $_PHPSHOP_COUPON_TYPE = "Kupongtyp";
    var $_PHPSHOP_COUPON_TYPE_TOOLTIP = "En g�vokupong raderas efter att ha anv�nts p� en order. En permanent kupong kan anv�ndas s� ofta som kunden vill.";
    var $_PHPSHOP_COUPON_TYPE_GIFT = "G�vokupong";
    var $_PHPSHOP_COUPON_TYPE_PERMANENT = "Permanent kupong";
    var $_PHPSHOP_COUPON_VALUE_HEADER = "V�rde";
    var $_PHPSHOP_COUPON_DELETE_BUTTON = "Radera kod";
    var $_PHPSHOP_COUPON_CONFIRM_DELETE = "�r du s�ker p� att du vill radera denna kupongkod?";
    var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = "V�nligen fyll i alla f�lt.";
    var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = "Kupong v�rde m�ste vara ett nummer.";
    var $_PHPSHOP_COUPON_NEW_HEADER = "Ny kupong";
    var $_PHPSHOP_COUPON_COUPON_HEADER = "Kupongkod";
    var $_PHPSHOP_COUPON_PERCENT = "Procent";
    var $_PHPSHOP_COUPON_TOTAL = "Total";
    var $_PHPSHOP_COUPON_VALUE = "V�rde";
    var $_PHPSHOP_COUPON_CODE_SAVED = "Kupongkod sparad.";
    var $_PHPSHOP_COUPON_SAVE_BUTTON = "Spara kupong";
    var $_PHPSHOP_COUPON_DISCOUNT = "Kupongrabatt";
    var $_PHPSHOP_COUPON_CODE_INVALID = "Kupongkoden hittades inte. F�rs�k igen.";
    var $_PHPSHOP_COUPONS_ENABLE = "Aktivera kuponganv�ndning";
    var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = "Om du aktiverar kuponger till�ter du kunder att ange kupongkoder f�r att f�  rabatt p� sina ink�p.";
    
    /* Free Shipping */
    var $_PHPSHOP_FREE_SHIPPING = "Fraktfritt";
    var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = "Denna order �r fraktfri!";
    var $_PHPSHOP_FREE_SHIPPING_AMOUNT = "Minsta oderv�rde f�r fraktfritt";
    var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = "Orderv�rdet (inklusive moms) som �r minimum f�r fraktfritt
                                                (exempel: <strong>500</strong> betyder fraktfritt betyder att ordern s�nds fraktfritt n�r kunden handlar f�r
                                                 500 kr (inklusive moms) eller mer.";
    var $_PHPSHOP_YOUR_STORE = "Din butik";
    var $_PHPSHOP_CONTROL_PANEL = "Kontrollpanel";
    
    /* Configuration Additions */
    var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = "PDF - knapp";
    var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = "Visa eller d�lj PDF-knappen i butiken";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = "M�ste godk�nna k�pavtalet p� VARJE ORDER?";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = "Markera om du vill att kunden ska godk�nna k�pavtalet p� VARJE ORDER (Innan ordern skickas).";

    // We need this for eCheck.net Payments
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = "Bankkonto typ";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = "Checkkonto";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = "F�retagskonto";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = "Sparkonto";
    
    var $_PHPSHOP_PAYMENT_AN_RECURRING = "�terkommande debiteringar?";
    var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = "Ange om du vill ha �terkommande debiteringar.";
    
    var $_PHPSHOP_INTERNAL_ERROR = "Internt fel vid behandlingen till";
    var $_PHPSHOP_PAYMENT_ERROR = "Fel vid behandlingen av betalningen";
    var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = "Betalning genomf�rd";
    
    /* UPS Shipping Module */
    var $_PHPSHOP_UPS_RESPONSE_ERROR = "UPS kunde inte behandla beg�ran om fraktkostnadsber�kning.";
    var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = "Garanterad leveranstid (dagar)";
    var $_PHPSHOP_UPS_PICKUP_METHOD = "UPS avh�mtningsmetod";
    var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = "Hur ger du paket till UPS?";
    var $_PHPSHOP_UPS_PACKAGE_TYPE = "UPS paketering?";
    var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = "Ange standard f�rpackningss�tt.";
    var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = "Hemleverans?";
    var $_PHPSHOP_UPS_RESIDENTIAL = "Hemleverans (RES)";
    var $_PHPSHOP_UPS_COMMERCIAL    = "PF�retagspaket (COM)";
    var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = "Fr�ga om Hemleverans (RES) eller f�retagspaket (COM).";
    var $_PHPSHOP_UPS_HANDLING_FEE = "Hanteringskostnad";
    var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = "Din hanteringskostnad f�r denna typ av leverans.";
    var $_PHPSHOP_UPS_TAX_CLASS = "Momsklass";
    var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = "Anv�nd f�ljande momsklass p� fraktkostnaden.";
    
    var $_PHPSHOP_ERROR_CODE = "Felkod";
    var $_PHPSHOP_ERROR_DESC = "Felbeskrivning";
    
    var $_PHPSHOP_CHANGE_TRANSACTION_KEY = "Visa / �ndra transaktionsnyckel";
    var $_PHPSHOP_CHANGE_PASSKEY_FORM = "Visa / �ndra L�senord/Transaktionsnyckel";
    var $_PHPSHOP_TYPE_PASSWORD = "Ange ditt anv�ndarl�senord";
    var $_PHPSHOP_CURRENT_PASSWORD = "Aktuellt l�senord";
    var $_PHPSHOP_CURRENT_TRANSACTION_KEY = "Aktuell transaktionsnyckel";
    var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = "Transaktionsnyckeln har �ndrats.";
    
    var $_PHPSHOP_PAYMENT_CVV2 = "Beg�r/inh�mta Kreditkortsvalideringskod (CVV2/CVC2/CID)";
    var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = "Kontrollera giltig CVV2/CVC2/CID kod (tre eller fyrsiffrigt nummer p� baksidan av kreditkortet, p� framsidan av American Express kort)?";
    var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = "V�nligen ange det tre eller fyrsiffriga nummret p� baksidan av ditt kreditkort (p� framsidan av American Express kort)";
    var $_PHPSHOP_CUSTOMER_CVV2_ERROR = "Du m�ste ange din Kreditkortsvalideringskod f�r att forts�tta.";
    
    var $_PHPSHOP_PRODUCT_FORM_FILENAME = "ANTINGEN ange ett filnam";
    var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = "H�r kan du fylla i ett filnamn. <strong>Om du fyller i ett filnamn h�r kommer inga filer att laddas upp!!! Du m�ste d� ladda upp filen via FTP manuellt!</strong>.";
    var $_PHPSHOP_PRODUCT_FORM_UPLOAD = "ELLER skicka upp ny fil";
    var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = "Du kan skicka upp en lokal fil. Denna fil kommer att vara produkten du s�ljer. Existerande fil kommer att ers�ttas.";
    
    var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = "Skriv text h�r som kommer att visas till kunden p� flypage sidan.<br />t.ex: 24tim, 48 timmar, 3 - 5 dagar, efter order.....";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = "ELLER v�lj en bild at visa p� detaljsidan (flypage).<br />Bildrna sparas i biblioteket <i>/components/com_phpshop/shop_image/availability</i><br />";
    var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = "Attributlista";
    var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = "<h4>Exempel p� attributlisteformat:</h4>
        <span class=\"sectionname\"><strong>Storlek</strong>,XL[+20.00],M,S[-15.00]<strong>;F�rg</strong>: R�d,Gr�n,Gul,Exklusiv f�rg[=24.00]<strong>;Och s� vidare</strong>,..,..</span>
        <h4>Integrerade prisjusteringar f�r anv�ndning med \"Advanced Attributes\" modulen:</h4>
        <span class=\"sectionname\">
        <strong>&#43;</strong> == L�gg till denna summa till grundpriset.<br />
        <strong>&#45;</strong> == Ta bort denna summa fr�n grundpriset.<br />
        <strong>&#61;</strong> == Ange som produktpris.
      </span>";
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = "Extra attribut";
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = "<h4>Exemplel p� extra attribut formatet:</h4>
        <span class=\"sectionname\"><strong>Namn;Extra;</strong>...</span>";
        
    var $_PHPSHOP_MULTISELECT = "<i>Flerval: h�ll ner CTRL-tangent n�r du klickar</i>";
        
    var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = "Aktivera eProcessingNetwork.com betalning?";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = "Markera f�r att anv�nda eProcessingNetwork.com med phpShop.";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = "Testl�ge?";
    var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = "V�lj 'Ja' under testfasen. V�lj 'Nej' f�r att aktivera betalningar.";
    
    var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = "eProcessingNetwork.com Login ID";
    var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = "Detta �r ditt eProcessingNetwork.com Login ID";
    var $_PHPSHOP_ADMIN_CFG_EPN_KEY = "eProcessingNetwork.com Transaktionsnyckel";
    var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = "Detta �r din eProcessingNetwork.com transaktionsnyckel";
    var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = "Autentisieringstyp";
    var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = "Detta �r eProcessingNetwork.com's autentisieringstyp.";

    var $_PHPSHOP_RELATED_PRODUCTS = "N�rst�ende produkter";
    var $_PHPSHOP_RELATED_PRODUCTS_TIP = "Du kan ange n�rst�ende produkter med denna lista. Markera en eller flera produkter h�r och dom visas som <strong>N�rst�ende produkter</strong>.";
    
    var $_PHPSHOP_RELATED_PRODUCTS_HEADING = "Du kan ocks� vara intresserad av denna/dessa produkt(er)";
        
    var $_PHPSHOP_IMAGE_ACTION = "Bildfunktion";
    var $_PHPSHOP_NONE = "none";
    
    var $_PHPSHOP_ORDER_HISTORY = "Orderhistorik";
    var $_PHPSHOP_ORDER_HISTORY_COMMENT = "Kommentar";
    var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = "Kommentarer till din order";
    var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = "Inkludera denna kommentar?";
    var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = "Tillagd datum";
    var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = "Kund underr�ttad?";
    var $_PHPSHOP_ORDER_STATUS_CHANGE = "Orderstatus �ndrad";
    
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
    var $_PHPSHOP_PARAMETERS_LBL = "Parametrar";
    var $_PHPSHOP_PRODUCT_TYPE_LBL = "Produkttyp";
    var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = "Produkttyp lista ";
    var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = "L�gg till/Ta bort produkttyp";
    // Product - Product Product Type list
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = "Produkttyp lista f�r";
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = "Lista produkttyper";
    // Product - Product Product Type form
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = "L�gg till produkttyp f�r";
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = "L�gg till produkttyp";
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = "Produkttyp";
    // Product - Product Type form
    var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = "Produkttyp namn";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = "Produkttyp beskrivning";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = "Parametrar";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = "Produkttyp information";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = "Publicera?";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = "Produkttyp bl�ddringsida";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = "Produkttyp detaljsida";
    // Product - Product Type Parameter list
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = "V�rden f�r produkttyp";
    // Product - Product Type Parameter form
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = "Parameterinformation";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = "Produkttyp hittades inte!";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = "Parameter namn";
    VAR $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = "Detta namn blir kolumnrubrik f�r tabellen. M�ste vara unikt och utan mellanslag.<BR>Till exempel: Bygg_materiel";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = "Parameter etikett";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = "Parameter beskrivning";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = "Parameter typ";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = "Heltal";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = "Text";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = "kort text";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = "Flyttal";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = "Tecken";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = "Datum & Tid";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = "Datum";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = "����-MM-DD";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = "Tid";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = "TT:MM:SS";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = "Bryt rad";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = "Multipla v�rden";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = "M�jliga v�rden";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = "Visa M�jliga v�rden som multipla val?";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = "<strong>Om M�jliga v�rden har angetts kan parametrar endast ha dessa v�rden. Exempel p� M�jliga v�rden:</strong><BR><span class=\"sectionname\">St�l;Tr�;Plast;...</span>";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = "Standardv�rde";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = "F�r parametrars standardv�rde anv�nds f�ljande format:<ul><li>Datum: ����-MM-DD</li><li>Tid: TT:MM:SS</li><li>Daum & Tid: ����-MM-DD TT:MM:SS</li></ul>";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = "Enhet";
    
    /************************* FrontEnd ***************************/
    /** shop.parameter_search.php */
    var $_PHPSHOP_PARAMETER_SEARCH = "Avancerad s�kning enligt parametrar";
    var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = "Parameters�kning";
    var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = "Vill du s�ka produkter enligt tekniska specifikationer?<BR>Du kan anv�nda valfri form:";
//  var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = "There's no result matching your query.";
    var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = "Tyv�rr, det finns inga s�kbara kategorier.";
    /** shop.parameter_search_form.php */
    var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = "Tyv�rr, det finns ingen tillg�nglig produkt med detta namn.";
    var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = "Liknar";
    var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = "Liknar INTE";
    var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = "Fulltext s�kning";
    var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = "Alla vald";
    var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = "N�gon vald";
    var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = "Rensa formul�r";
    /** shop.browse.php */
    var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = "S�k i kategori";
    var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = "�ndra parametrar";
    var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = "Fallande ordning";
    var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = "Stigande ordning";
    /** shop.product.detail */
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = "Parametrar f�r kategori";
    /** Changed Product Type - End*/

    // State form and list
    var $_PHPSHOP_STATE_LIST_MNU = "Visa stater";
    var $_PHPSHOP_STATE_LIST_LBL = "Statlista f�r: ";
    var $_PHPSHOP_STATE_LIST_ADD = "L�gg till/uppdatera stat";
    var $_PHPSHOP_STATE_LIST_NAME = "Stat namn";
    var $_PHPSHOP_STATE_LIST_3_CODE = "Stat kod (3)";
    var $_PHPSHOP_STATE_LIST_2_CODE = "Stat kod (2)";
        
    // Opposite of Discount!
    var $_PHPSHOP_FEE = "Avgift";
    
    var $_PHPSHOP_PRODUCT_CLONE = "Kopiera produkt";
    
    var $_PHPSHOP_CSV_SETTINGS = "Inst�llningar";
    var $_PHPSHOP_CSV_DELIMITER = "Avgr�nsare";
    var $_PHPSHOP_CSV_ENCLOSURE = "F�ltavgr�nsare";
    var $_PHPSHOP_CSV_UPLOAD_FILE = "Ladda upp CSV fil";
    var $_PHPSHOP_CSV_SUBMIT_FILE = "Skicka CSV fil";
    var $_PHPSHOP_CSV_FROM_DIRECTORY = "H�mta fr�n bibliotek";
    var $_PHPSHOP_CSV_FROM_SERVER = "H�mta CSV fil fr�n server";
    var $_PHPSHOP_CSV_EXPORT_TO_FILE = "Exportera till CSV fil";
    var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = "V�lj f�ltordningstyp";
    var $_PHPSHOP_CSV_DEFAULT_ORDERING = "Standardordning";
    var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = "Min egen ordning";
    var $_PHPSHOP_CSV_SUBMIT_EXPORT = "Exportera all produkter till CSV fil";
    var $_PHPSHOP_CSV_CONFIGURATION_HEADER = "CSV Import / Export konfiguration";
    var $_PHPSHOP_CSV_SAVE_CHANGES = "Spara �ndringar";
    var $_PHPSHOP_CSV_FIELD_NAME = "F�ltnamn";
    var $_PHPSHOP_CSV_DEFAULT_VALUE = "standardv�rde";
    var $_PHPSHOP_CSV_FIELD_ORDERING = "F�ltordning";
    var $_PHPSHOP_CSV_FIELD_REQUIRED = "F�lt kr�vs?";
    var $_PHPSHOP_CSV_IMPORT_EXPORT = "Import/Export";
    var $_PHPSHOP_CSV_NEW_FIELD = "L�gg till nytt f�lt";
    var $_PHPSHOP_CSV_DOCUMENTATION = "Dokumentation";
    
    var $_PHPSHOP_PRODUCT_NOT_FOUND = "Tyv�rr hittades inte den produkt du s�kte!";
    var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = "Visa proukter som �r slut i lager";
    var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = "Vid vald visas �ven proukter som inte finns i lager. Annars d�ljs dessa produkter.";
    
}
/** @global phpShopLanguage $PHPSHOP_LANG */
$PHPSHOP_LANG =& new phpShopLanguage();
?>