<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: danish.php,v 1.17 2005/06/22 19:50:42 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage languages
*
* @copyright (C) 2004 Soeren Eberhardt
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* Danish Translation: 2004-2005 Kristian Sandrini
* Danish Validation: Julius L. Thy
*
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*/
class phpShopLanguage extends mosAbstractLanguage {

    /*####################
    GENERELLE DEFINITIONER
    ####################*/
    
    var $_PHPSHOP_MENU = "Menu";
    var $_PHPSHOP_CATEGORY = "Kategori";
    var $_PHPSHOP_CATEGORIES = "Kategorier";
    var $_PHPSHOP_SELECT_CATEGORY = "V�lg en kategori:";
    var $_PHPSHOP_ADMIN = "Administration";
    var $_PHPSHOP_PRODUCT = "Produkt";
    var $_PHPSHOP_LIST = "List";
    var $_PHPSHOP_ALL = "Alle";
    var $_PHPSHOP_LIST_ALL_PRODUCTS = "Vis alle produkter";    
    var $_PHPSHOP_VIEW = "gennemse";
    var $_PHPSHOP_SHOW = "vis";
    var $_PHPSHOP_ADD = "tilf�j";
    var $_PHPSHOP_UPDATE = "opdater";
    var $_PHPSHOP_DELETE = "slet";
    var $_PHPSHOP_SELECT = "v�lg";
    var $_PHPSHOP_SUBMIT = "Submit";
    var $_PHPSHOP_RANDOM = "Tilf�ldige produkter";
    var $_PHPSHOP_LATEST = "Nyeste produkter";
    
    /*#####################
    MODULE ACCOUNT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_HOME_TITLE = "Hjem";
    var $_PHPSHOP_CART_TITLE = "Indk�bsvogn";
    var $_PHPSHOP_CHECKOUT_TITLE = "Til kasse";
    var $_PHPSHOP_LOGIN_TITLE = "Log ind";
    var $_PHPSHOP_LOGOUT_TITLE = "Log ud";
    var $_PHPSHOP_BROWSE_TITLE = "Gennemse";
    var $_PHPSHOP_SEARCH_TITLE = "S�g";
    var $_PHPSHOP_ACCOUNT_TITLE = "Konto vedligeholdelse";
    var $_PHPSHOP_NAVIGATION_TITLE = "Navigation";
    var $_PHPSHOP_DEPARTMENT_TITLE = "Afdeling";
    var $_PHPSHOP_INFO = "Information";
    
    var $_PHPSHOP_BROWSE_LBL = "Gennemse";
    var $_PHPSHOP_PRODUCTS_LBL = "Produkter";
    var $_PHPSHOP_PRODUCT_LBL = "Produkt";
    var $_PHPSHOP_SEARCH_LBL = "S�g";
    var $_PHPSHOP_FLYPAGE_LBL = "Produktdetaljer";
    var $_PHPSHOP_PRODUCT_SEARCH_LBL = "Produkts�gning";
    
    var $_PHPSHOP_PRODUCT_NAME_TITLE = "Produktnavn";
    var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = "Produktkategori";
    var $_PHPSHOP_PRODUCT_DESC_TITLE = "Beskrivelse";
    
    var $_PHPSHOP_CART_SHOW = "Vis vogn";
    var $_PHPSHOP_CART_ADD_TO = "L�g i vogn";
    var $_PHPSHOP_CART_NAME = "Navn";
    var $_PHPSHOP_CART_SKU = "Varenr.";
    var $_PHPSHOP_CART_PRICE = "Pris";
    var $_PHPSHOP_CART_QUANTITY = "Antal";
    var $_PHPSHOP_CART_SUBTOTAL = "Subtotal";
    
    # Some messages
    var $_PHPSHOP_ADD_SHIPTO_1 = "Tilf�j en ny";
    var $_PHPSHOP_ADD_SHIPTO_2 = "Leveringsadresse";
    var $_PHPSHOP_NO_SEARCH_RESULT = "Deres s�gning returnerede 0 resultater.<br />";
    var $_PHPSHOP_PRICE_LABEL = "Pris: ";
    var $_PHPSHOP_ORDER_BUTTON_LABEL = "L�g i vogn";
    var $_PHPSHOP_NO_CUSTOMER = "De er endnu ikke registreret som kunde. V�r venlig at indtaste faktureringsoplysningerne.";
    var $_PHPSHOP_DELETE_MSG = "Er De sikker p� at De �nsker at slette denne?";
    var $_PHPSHOP_THANKYOU = "Tak for Deres ordre.";
    var $_PHPSHOP_NOT_SHIPPED = "Endnu ikke afsendt";
    var $_PHPSHOP_EMAIL_SENDTO = "En email der bekr�fter Deres ordre er blevet sendt til";
    var $_PHPSHOP_NO_USER_TO_SELECT = "Beklager, men der er ingen MOS-bruger at tilf�je til com_phpshop brugerlisten";
    
    // Fejlmeldinger
    
    var $_PHPSHOP_ERROR = "FEJL";
    var $_PHPSHOP_MOD_NOT_REG = "Modulet er ikke registreret.";
    var $_PHPSHOP_MOD_ISNO_REG = "er ikke et gyldigt phpShop modul.";
    var $_PHPSHOP_MOD_NO_AUTH = "De har ikke tilladelse til at benytte det �nskede modul.";
    var $_PHPSHOP_PAGE_404_1 = "Siden eksisterer ikke";
    var $_PHPSHOP_PAGE_404_2 = "Filnavnet eksisterer ikke. Kan ikke finde filen:";
    var $_PHPSHOP_PAGE_403 = "Utilstr�kkelige adgangsrettigheder";
    var $_PHPSHOP_FUNC_NO_EXEC = "Du har ikke tilladelse til at afvikle ";
    var $_PHPSHOP_FUNC_NOT_REG = "Funktionen er ikke registreret";
    var $_PHPSHOP_FUNC_ISNO_REG = " er ikke en gyldig MOS_com_phpShop funktion.";
    
    /*#####################
    MODULE ADMIN
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADMIN_MOD = "Admin";
    
    
    // User List
    var $_PHPSHOP_USER_LIST_MNU = "Vis brugere";
    var $_PHPSHOP_USER_LIST_LBL = "Brugerliste";
    var $_PHPSHOP_USER_LIST_USERNAME = "Brugernavn (login navn)";
    var $_PHPSHOP_USER_LIST_FULL_NAME = "Rigtigt navn";
    var $_PHPSHOP_USER_LIST_GROUP = "Gruppe";
    
    // User Form
    var $_PHPSHOP_USER_FORM_MNU = "Tilf�j bruger";
    var $_PHPSHOP_USER_FORM_LBL = "Tilf�j/opdater bruger information";
    var $_PHPSHOP_USER_FORM_BILLTO_LBL = "Bill To Information";
    var $_PHPSHOP_USER_FORM_SHIPTO_LBL = "Leveringsadresse";
    var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = "Tilf�j adresse";
    var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = "Modtagelsessted";
    var $_PHPSHOP_USER_FORM_FIRST_NAME = "Fornavn";
    var $_PHPSHOP_USER_FORM_LAST_NAME = "Efternavn";
    var $_PHPSHOP_USER_FORM_MIDDLE_NAME = "Mellemnavn";
    var $_PHPSHOP_USER_FORM_TITLE = "Titel";
    var $_PHPSHOP_USER_FORM_USERNAME = "Brugernavn";
    var $_PHPSHOP_USER_FORM_PASSWORD_1 = "Kodeord";
    var $_PHPSHOP_USER_FORM_PASSWORD_2 = "Bekr�ft kodeord";
    var $_PHPSHOP_USER_FORM_PERMS = "Permissions";
    var $_PHPSHOP_USER_FORM_COMPANY_NAME = "Firmanavn";
    var $_PHPSHOP_USER_FORM_ADDRESS_1 = "Addresse 1";
    var $_PHPSHOP_USER_FORM_ADDRESS_2 = "Addresse 2";
    var $_PHPSHOP_USER_FORM_CITY = "By";
    var $_PHPSHOP_USER_FORM_STATE = "Stat/Provins/Region";
    var $_PHPSHOP_USER_FORM_ZIP = "Postnr.";
    var $_PHPSHOP_USER_FORM_COUNTRY = "Land";
    var $_PHPSHOP_USER_FORM_PHONE = "Telefon";
    var $_PHPSHOP_USER_FORM_FAX = "Fax";
    var $_PHPSHOP_USER_FORM_EMAIL = "Email";
    
    // Module List
    var $_PHPSHOP_MODULE_LIST_MNU = "Vis moduler";
    var $_PHPSHOP_MODULE_LIST_LBL = "Modul liste";
    var $_PHPSHOP_MODULE_LIST_NAME = "Modul navn";
    var $_PHPSHOP_MODULE_LIST_PERMS = "Modul tilladelser";
    var $_PHPSHOP_MODULE_LIST_FUNCTIONS = "Funktioner";
    var $_PHPSHOP_MODULE_LIST_ORDER = "Visningsr�kkef�lge";
    
    // Module Form
    var $_PHPSHOP_MODULE_FORM_MNU = "Tilf�j modul";
    var $_PHPSHOP_MODULE_FORM_LBL = "Modul information";
    var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = "Modul m�rke (til Topmenu)";
    var $_PHPSHOP_MODULE_FORM_NAME = "Modul Navn";
    var $_PHPSHOP_MODULE_FORM_PERMS = "Modul Tilladelser";
    var $_PHPSHOP_MODULE_FORM_HEADER = "Modul Header";
    var $_PHPSHOP_MODULE_FORM_FOOTER = "Modul Footer";
    var $_PHPSHOP_MODULE_FORM_MENU = "Vis modul i Administrator menu?";
    var $_PHPSHOP_MODULE_FORM_ORDER = "Visningsr�kkef�lge";
    var $_PHPSHOP_MODULE_FORM_DESCRIPTION = "Modul beskrivelse";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = "Sprog kode";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = "Sprog fil";
    
    // Function List
    var $_PHPSHOP_FUNCTION_LIST_MNU = "Vis funktioner";
    var $_PHPSHOP_FUNCTION_LIST_LBL = "Funktion liste";
    var $_PHPSHOP_FUNCTION_LIST_NAME = "Funktion navne";
    var $_PHPSHOP_FUNCTION_LIST_CLASS = "Klasse navn";
    var $_PHPSHOP_FUNCTION_LIST_METHOD = "Klasse metode";
    var $_PHPSHOP_FUNCTION_LIST_PERMS = "Tilladelser";
    
    // Module Form
    var $_PHPSHOP_FUNCTION_FORM_MNU = "Tilf�j funktion";
    var $_PHPSHOP_FUNCTION_FORM_LBL = "Funktion information";
    var $_PHPSHOP_FUNCTION_FORM_NAME = "Funktion navn";
    var $_PHPSHOP_FUNCTION_FORM_CLASS = "Klasse navn";
    var $_PHPSHOP_FUNCTION_FORM_METHOD = "Klasse metode";
    var $_PHPSHOP_FUNCTION_FORM_PERMS = "Funktion Tilladelser";
    var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = "Funktion beskrivelse";
    
    // Currency form and list
    var $_PHPSHOP_CURRENCY_LIST_MNU = "Vis valutaer";
    var $_PHPSHOP_CURRENCY_LIST_LBL = "Valuta liste";
    var $_PHPSHOP_CURRENCY_LIST_ADD = "Tilf�j valuta";
    var $_PHPSHOP_CURRENCY_LIST_NAME = "Valuta navn";
    var $_PHPSHOP_CURRENCY_LIST_CODE = "Valuta kode";
    
    // Country form and list
    var $_PHPSHOP_COUNTRY_LIST_MNU = "Vis lande";
    var $_PHPSHOP_COUNTRY_LIST_LBL = "Lande liste";
    var $_PHPSHOP_COUNTRY_LIST_ADD = "Tilf�j land";
    var $_PHPSHOP_COUNTRY_LIST_NAME = "Landenavn";
    var $_PHPSHOP_COUNTRY_LIST_3_CODE = "Landekode (3)";
    var $_PHPSHOP_COUNTRY_LIST_2_CODE = "Landekode (2)";
    
    /*#####################
    MODULE CHECKOUT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADDRESS = "Adresse";
    var $_PHPSHOP_CONTINUE = "Forts�t";
    
    # Some messages
    var $_PHPSHOP_EMPTY_CART = "Deres indk�bsvogn er tom";
    
    
    /*#####################
    MODULE ISShipping
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ISSHIPPING_MOD = "InterShipper";
    
    
    // Shipping Ping
    var $_PHPSHOP_ISSHIP_PING_MNU = "Ping InterShipper-server";
    var $_PHPSHOP_ISSHIP_PING_LBL = "InterShipper-server ping ";
    var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = "InterShipper ping fejlede";
    var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = "InterShipper ping lykkedes";
    var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = "Transport�r";
    var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = "Respons<br />Tid";
    var $_PHPSHOP_ISSHIP_PING_TIME_LBL = "sec.";
    
    // Shipping List
    var $_PHPSHOP_ISSHIP_LIST_MNU = "Vis forsendelsesmetoder";
    var $_PHPSHOP_ISSHIP_LIST_LBL = "Aktive forsendelsesmetoder";
    var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = "Forsendelsesmetoder";
    var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = "Aktive";
    var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = "Ekspeditonsomkostninger";
    var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = "Leveringstid";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = "enhedstakst";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = "procent";
    var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = "dage";
    var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = "Stor v�gt";
    
    // Dynamic Shipping Form
    var $_PHPSHOP_ISSHIP_FORM_MNU = "Konfigurer forsendelsesmetoder";
    var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = "Tilf�j forsendelsesmetode";
    var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = "Konfigurer forsendelsesmetode";
    var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = "Opdater";
    var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = "Forsendelsesmetode";
    var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = "Aktiver";
    var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = "Ekspeditionsomkostninger";
    var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = "Leveringstid";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = "enhedstakst";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = "procent";
    var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = "dage";
    var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = "Stor v�gt";
    
    
    
    /*#####################
    MODULE ORDER
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_ORDER_MOD = "Ordrer";
    
    // Menu optioner 
    var $_PHPSHOP_ORDER_CONFIRM_MNU = "Bekr�ft ordre";
    var $_PHPSHOP_ORDER_CANCEL_MNU = "Annull�r ordre";
    var $_PHPSHOP_ORDER_PRINT_MNU = "Print ordre";
    var $_PHPSHOP_ORDER_DELETE_MNU = "Slet ordre";
    
    // Ordre Liste
    var $_PHPSHOP_ORDER_LIST_MNU = "Vis ordrer";
    var $_PHPSHOP_ORDER_LIST_LBL = "Ordre liste";
    var $_PHPSHOP_ORDER_LIST_ID = "Ordre nummer";
    var $_PHPSHOP_ORDER_LIST_CDATE = "Ordre dato";
    var $_PHPSHOP_ORDER_LIST_MDATE = "Sidst �ndret";
    var $_PHPSHOP_ORDER_LIST_STATUS = "Status";
    var $_PHPSHOP_ORDER_LIST_TOTAL = "SubTotal";
    var $_PHPSHOP_ORDER_ITEM = "Ordrelinier";
    
    // Ordre print
    var $_PHPSHOP_ORDER_PRINT_PO_LBL = "Ordrebekr�ftelse";
    var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = "Ordre nummer";
    var $_PHPSHOP_ORDER_PRINT_PO_DATE = "Ordre dato";
    var $_PHPSHOP_ORDER_PRINT_PO_STATUS = "Ordre status";
    var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = "Kundeinformation";
    var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = "Faktureringsinformation";
    var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = "Leveringsinformation";
    var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = "Faktureringsadresse";
    var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = "Leveringsadresse";
    var $_PHPSHOP_ORDER_PRINT_NAME = "Navn";
    var $_PHPSHOP_ORDER_PRINT_COMPANY = "Firmanavn";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = "Adresse 1";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = "Adresse 2";
    var $_PHPSHOP_ORDER_PRINT_CITY = "By";
    var $_PHPSHOP_ORDER_PRINT_STATE = "Stat/Provins/Region";
    var $_PHPSHOP_ORDER_PRINT_ZIP = "Postnr.";
    var $_PHPSHOP_ORDER_PRINT_COUNTRY = "Land";
    var $_PHPSHOP_ORDER_PRINT_PHONE = "Telefon";
    var $_PHPSHOP_ORDER_PRINT_FAX = "Fax";
    var $_PHPSHOP_ORDER_PRINT_EMAIL = "Email";
    var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = "Ordrelinier";
    var $_PHPSHOP_ORDER_PRINT_QUANTITY = "Antal";
    var $_PHPSHOP_ORDER_PRINT_QTY = "Antal";
    var $_PHPSHOP_ORDER_PRINT_SKU = "Varenr.";
    var $_PHPSHOP_ORDER_PRINT_PRICE = "Pris";
    var $_PHPSHOP_ORDER_PRINT_TOTAL = "Total";
    var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = "SubTotal";
    var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = "Moms Total";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING = "Levering";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = "Forsendelsesmoms";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = "Betalingsmetode";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = "Kontonavn";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = "Kontonummer";
    var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = "Udl�bsdato";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = "Betalingslog";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = "Leveringsinformation";
    var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = "Betalingsinformation";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = "Transport�r";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = "Forsendelsesm�de";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = "Forsendelsesdato";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = "Forsendelsespris";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_MNU = "Vis ordrestatus typer";
    var $_PHPSHOP_ORDER_STATUS_FORM_MNU = "Tilf�j Ordrestatus typer";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_CODE = "Ordrestatus kode";
    var $_PHPSHOP_ORDER_STATUS_LIST_NAME = "Ordrestatus navn";
    
    var $_PHPSHOP_ORDER_STATUS_FORM_LBL = "Ordrestatus";
    var $_PHPSHOP_ORDER_STATUS_FORM_CODE = "Ordrestatus kode";
    var $_PHPSHOP_ORDER_STATUS_FORM_NAME = "Ordrestatus navn";
    var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = "List Ordre";
    
    
    /*#####################
    MODULE PRODUCT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_PRODUCT_MOD = "Produkter";
    
    var $_PHPSHOP_CURRENT_PRODUCT = "Aktuelt produkt";
    var $_PHPSHOP_CURRENT_ITEM = "Aktuel vare";
    
    // Product Inventory
    var $_PHPSHOP_PRODUCT_INVENTORY_LBL = "Produktkatalog";
    var $_PHPSHOP_PRODUCT_INVENTORY_MNU = "Gennemse katalog";
    var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = "Pris";
    var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = "Antal";
    var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = "V�gt";
    // Product List
    var $_PHPSHOP_PRODUCT_LIST_MNU = "List Produkter";
    var $_PHPSHOP_PRODUCT_LIST_LBL = "Produktliste";
    var $_PHPSHOP_PRODUCT_LIST_NAME = "Produktnavn";
    var $_PHPSHOP_PRODUCT_LIST_SKU = "Varenr.";
    var $_PHPSHOP_PRODUCT_LIST_PUBLISH = "Public�r";
    
    // Product Form
    var $_PHPSHOP_PRODUCT_FORM_MNU = "Tilf�j produkt";
    var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = "Rediger produkt";
    var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = "Gennemse produktdatabladet i shoppen";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = "Tilf�j vare";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = "Tilf�j yderligere varer";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = "Nyt produkt";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = "Opdat�r produkt";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = "Produktinformation";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = "Produktstatus";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = "Produktets m�l og v�gt";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = "Produktbilleder";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = "Ny vare";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = "Opdater vare";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = "Vareinformation";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = "Varestatus";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = "Varens m�l og v�gt";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = "Varebilleder";
    var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = "Tilbage til produktkategori";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = "For at opdatere det aktuelle billede skal du indtaste stien til et nyt billede.";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = "Indtast \"none\" for at slette det aktuelle billede.";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = "Produkt Varer";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = "Vare attributter";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = "Er du sikker p� at du vil slette dette produkt\\nog de varer der er tilknyttet?";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = "Er du sikker p� at du �nsker at slette denne vare?";
    var $_PHPSHOP_PRODUCT_FORM_VENDOR = "Forhandler";
    var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = "Producent";
    var $_PHPSHOP_PRODUCT_FORM_SKU = "Varenr.";
    var $_PHPSHOP_PRODUCT_FORM_NAME = "Navn";
    var $_PHPSHOP_PRODUCT_FORM_URL = "URL";
    var $_PHPSHOP_PRODUCT_FORM_CATEGORY = "Kategori";
    var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = "Udsalgspris";
    var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = "Product Price (Net)";
    var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = "Datablad beskrivelse";
    var $_PHPSHOP_PRODUCT_FORM_S_DESC = "Kort beskrivelse";
    var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = "P� lager";
    var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = "I restordre";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = "Forventet p� lager";
    var $_PHPSHOP_PRODUCT_FORM_SPECIAL = "Special";
    var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = "Rabattype";
    var $_PHPSHOP_PRODUCT_FORM_PUBLISH = "Public�r?";
    var $_PHPSHOP_PRODUCT_FORM_LENGTH = "L�ngde";
    var $_PHPSHOP_PRODUCT_FORM_WIDTH = "Bredde";
    var $_PHPSHOP_PRODUCT_FORM_HEIGHT = "H�jde";
    var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = "M�leenhed";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT = "V�gt";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = "M�leenhed";
    var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = "Thumb Nail";
    var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = "Fuld st�rrelse";
    
    // Product Display
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = "Produkt Tilf�j Resultat";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = "Produkt Opdat�r Resultat";
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = "Vare Tilf�j Resultat";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = "Vare Opdat�r Resultat";
    var $_PHPSHOP_PRODUCT_CSV_UPLOAD = "Benyt CSV-fil";
    var $_PHPSHOP_PRODUCT_FOLDERS = "Produkt Foldere";
    
    // Product Category List
    var $_PHPSHOP_CATEGORY_LIST_MNU = "Vis kategorier";
    var $_PHPSHOP_CATEGORY_LIST_LBL = "Kategoritr�";
    
    // Product Category Form
    var $_PHPSHOP_CATEGORY_FORM_MNU = "Tilf�j Kategori";
    var $_PHPSHOP_CATEGORY_FORM_LBL = "Kategori information";
    var $_PHPSHOP_CATEGORY_FORM_NAME = "Kategorinavn";
    var $_PHPSHOP_CATEGORY_FORM_PARENT = "Tilh�rer";
    var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = "Kategoribeskrivelse";
    var $_PHPSHOP_CATEGORY_FORM_PUBLISH = "Public�r?";
    var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = "Kategori datablad";
    
    // Product Attribute List
    var $_PHPSHOP_ATTRIBUTE_LIST_MNU = "List attributter";
    var $_PHPSHOP_ATTRIBUTE_LIST_LBL = "Attributliste for";
    var $_PHPSHOP_ATTRIBUTE_LIST_NAME = "Attributnavn";
    var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = "R�kkef�lge";
    
    // Product Attribute Form
    var $_PHPSHOP_ATTRIBUTE_FORM_MNU = "Tilf�j attributter";
    var $_PHPSHOP_ATTRIBUTE_FORM_LBL = "Attribut formular";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = "Ny attribut for produkt";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = "Opdat�r attribut for produkt";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = "Ny attribut for vare";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = "Opdat�r attribut for vare";
    var $_PHPSHOP_ATTRIBUTE_FORM_NAME = "Attributnavn";
    var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = "R�kkef�lge";
    
    // Product Price List
    var $_PHPSHOP_PRICE_LIST_MNU = "Vis kategorier";
    var $_PHPSHOP_PRICE_LIST_LBL = "Pristr�";
    var $_PHPSHOP_PRICE_LIST_FOR_LBL = "Pris for";
    var $_PHPSHOP_PRICE_LIST_GROUP_NAME = "Gruppenavn";
    var $_PHPSHOP_PRICE_LIST_PRICE = "Pris";
    var $_PHPSHOP_PRODUCT_LIST_CURRENCY = "Valuta";
    
    // Product Price Form
    var $_PHPSHOP_PRICE_FORM_MNU = "Tilf�j Pris";
    var $_PHPSHOP_PRICE_FORM_LBL = "Prisinformation";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = "Ny pris for produkt";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = "Opdat�r pris for produkt";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = "Ny pris for vare";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = "Opdat�r pris for vare";
    var $_PHPSHOP_PRICE_FORM_PRICE = "Pris";
    var $_PHPSHOP_PRICE_FORM_CURRENCY = "Valuta";
    var $_PHPSHOP_PRICE_FORM_GROUP = "Kundegruppe";
    
    
    /*#####################
    MODULE REPORT BASIC
    #####################*/
    # Some LABELs
    var $_PHPSHOP_REPORTBASIC_MOD = "Rapporter";
    var $_PHPSHOP_RB_INDIVIDUAL = "Individuelle produktlister";
    var $_PHPSHOP_RB_SALE_TITLE = "Salgsrapportering";
    
    /* labels for rpt_sales */
    var $_PHPSHOP_RB_SALES_PAGE_TITLE = "Salgsaktivitet - oversigt";
    
    var $_PHPSHOP_RB_INTERVAL_TITLE = "Interval";
    var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = "M�nedlig";
    var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = "Ugenlig";
    var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = "Daglig";
    
    var $_PHPSHOP_RB_THISMONTH_BUTTON = "Denne m�ned";
    var $_PHPSHOP_RB_LASTMONTH_BUTTON = "Sidste m�ned";
    var $_PHPSHOP_RB_LAST60_BUTTON = "Seneste 60 dage";
    var $_PHPSHOP_RB_LAST90_BUTTON = "Seneste 90 dage";
    
    var $_PHPSHOP_RB_START_DATE_TITLE = "Start den";
    var $_PHPSHOP_RB_END_DATE_TITLE = "Slut den";
    var $_PHPSHOP_RB_SHOW_SEL_RANGE = "Vis det valgte interval";
    var $_PHPSHOP_RB_REPORT_FOR = "Rapport for ";
    var $_PHPSHOP_RB_DATE = "Dato";
    var $_PHPSHOP_RB_ORDERS = "Ordrer";
    var $_PHPSHOP_RB_TOTAL_ITEMS = "Antal varer solgt";
    var $_PHPSHOP_RB_REVENUE = "Oms�tning";
    var $_PHPSHOP_RB_PRODLIST = "Produktliste";
    
    
    
    /*#####################
    MODULE SHOP
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOP_MOD = "Butik";
    var $_PHPSHOP_PRODUCT_THUMB_TITLE = "Billede";
    var $_PHPSHOP_PRODUCT_PRICE_TITLE = "Pris";
    var $_PHPSHOP_ORDER_STATUS_P = "Afventer";
    var $_PHPSHOP_ORDER_STATUS_C = "Bekr�ftet";
    var $_PHPSHOP_ORDER_STATUS_X = "Slettet";
    
    
    # Some messages
    var $_PHPSHOP_ORDER_BUTTON = "Bestil";
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOPPER_MOD = "Kunde";
    
    
    
    // Shopper List
    var $_PHPSHOP_SHOPPER_LIST_MNU = "Vis kunder";
    var $_PHPSHOP_SHOPPER_LIST_LBL = "Kundeliste";
    var $_PHPSHOP_SHOPPER_LIST_USERNAME = "Brugernavn";
    var $_PHPSHOP_SHOPPER_LIST_NAME = "Navn";
    var $_PHPSHOP_SHOPPER_LIST_GROUP = "Gruppe";
    
    // Shopper Form
    var $_PHPSHOP_SHOPPER_FORM_MNU = "Tilf�j kunde";
    var $_PHPSHOP_SHOPPER_FORM_LBL = "Kundeinformation";
    var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = "Faktureringsadresse";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = "Information";
    var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = "Leveringsadresse";
    var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = "Tilf�j adresse";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = "Adressenavn";
    var $_PHPSHOP_SHOPPER_FORM_USERNAME = "Brugernavn";
    var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = "Fornavn";
    var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = "Efternavn";
    var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = "Mellemnavn";
    var $_PHPSHOP_SHOPPER_FORM_TITLE = "Titel";
    var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = "Kundenavn";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = "Adgangskode";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = "Bekr�ft adgangskode";
    var $_PHPSHOP_SHOPPER_FORM_GROUP = "Kundegruppe";
    var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = "Firmanavn";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = "Adresse 1";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = "Adresse 2";
    var $_PHPSHOP_SHOPPER_FORM_CITY = "By";
    var $_PHPSHOP_SHOPPER_FORM_STATE = "Stat/Provins/Region";
    var $_PHPSHOP_SHOPPER_FORM_ZIP = "Postnr.";
    var $_PHPSHOP_SHOPPER_FORM_COUNTRY = "Land";
    var $_PHPSHOP_SHOPPER_FORM_PHONE = "Telefon";
    var $_PHPSHOP_SHOPPER_FORM_FAX = "Fax";
    var $_PHPSHOP_SHOPPER_FORM_EMAIL = "Email";
    
    // Shopper Group List
    var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = "Vis kundegrupper";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = "Kundegruppeliste";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = "Gruppenavn";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = "Gruppebeskrivelse";
    
    
    // Shopper Group Form
    var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = "Kundegruppe formular";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = "Tilf�j kundegruppe";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = "Gruppenavn";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = "Gruppebeskrivelse";
    
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_STORE_MOD = "Butik";
    
    
    // Store Form
    var $_PHPSHOP_STORE_FORM_MNU = "Rediger butik";
    var $_PHPSHOP_STORE_FORM_LBL = "Butikinformation";
    var $_PHPSHOP_STORE_FORM_CONTACT_LBL = "Kontaktinformation";
    var $_PHPSHOP_STORE_FORM_FULL_IMAGE = "Fuld st�rrelse";
    var $_PHPSHOP_STORE_FORM_UPLOAD = "Upload billede";
    var $_PHPSHOP_STORE_FORM_STORE_NAME = "Butiknavn";
    var $_PHPSHOP_STORE_FORM_COMPANY_NAME = "Butikkens firmanavn";
    var $_PHPSHOP_STORE_FORM_ADDRESS_1 = "Adresse 1";
    var $_PHPSHOP_STORE_FORM_ADDRESS_2 = "Adresse 2";
    var $_PHPSHOP_STORE_FORM_CITY = "By";
    var $_PHPSHOP_STORE_FORM_STATE = "Stat/Provins/Region";
    var $_PHPSHOP_STORE_FORM_COUNTRY = "Land";
    var $_PHPSHOP_STORE_FORM_ZIP = "Postnr.";
    var $_PHPSHOP_STORE_FORM_PHONE = "Telefon";
    var $_PHPSHOP_STORE_FORM_CURRENCY = "Valuta";
    var $_PHPSHOP_STORE_FORM_CATEGORY = "Butikskategori";
    var $_PHPSHOP_STORE_FORM_LAST_NAME = "Efternavn";
    var $_PHPSHOP_STORE_FORM_FIRST_NAME = "Fornavn";
    var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = "Mellemnavn";
    var $_PHPSHOP_STORE_FORM_TITLE = "Titel";
    var $_PHPSHOP_STORE_FORM_PHONE_1 = "Telefon 1";
    var $_PHPSHOP_STORE_FORM_PHONE_2 = "Telefon 2";
    var $_PHPSHOP_STORE_FORM_FAX = "Fax";
    var $_PHPSHOP_STORE_FORM_EMAIL = "Email";
    var $_PHPSHOP_STORE_FORM_IMAGE_PATH = "Billedsti";
    var $_PHPSHOP_STORE_FORM_DESCRIPTION = "Beskrivelse";
    
    
    
    var $_PHPSHOP_PAYMENT = "Betalingsformer";
    // Payment Method List
    var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = "Vis betalingsformer";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = "Betalingsform liste";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = "Navn";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = "Kode";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = "Rabat ";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = "Kundegruppe";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = "Betalingsform";
    
    // Payment Method Form
    var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = "Tilf�j betalingsform";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = "Betalingsform formular";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = "Betalingsform";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = "Kundegruppe";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = "Rabat ";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = "Kode";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = "R�kkef�lge";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = "Betalingsform type";
    
    
    
    /*#####################
    MODULE TAX
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_TAX_MOD = "Moms";
    
    // User List
    var $_PHPSHOP_TAX_RATE = "Momssats";
    var $_PHPSHOP_TAX_LIST_MNU = "Vis momssatser";
    var $_PHPSHOP_TAX_LIST_LBL = "Momssats liste";
    var $_PHPSHOP_TAX_LIST_STATE = "Moms stat eller region";
    var $_PHPSHOP_TAX_LIST_COUNTRY = "Moms land";
    var $_PHPSHOP_TAX_LIST_RATE = "Momssats";
    
    // User Form
    var $_PHPSHOP_TAX_FORM_MNU = "Tilf�j momssats";
    var $_PHPSHOP_TAX_FORM_LBL = "Tilf�j momsinformation";
    var $_PHPSHOP_TAX_FORM_STATE = "Moms stat eller region";
    var $_PHPSHOP_TAX_FORM_COUNTRY = "Moms land";
    var $_PHPSHOP_TAX_FORM_RATE = "Momssats (for 25% => skriv 0.25)";
    
    
    
    
    /*#####################
    MODULE VENDOR
    #####################*/
    
    
    
    # Some LABELs
    var $_PHPSHOP_VENDOR_MOD = "Forhandler";
    var $_PHPSHOP_VENDOR_ADMIN = "Forhandlere";
    
    
    // Vendor List
    var $_PHPSHOP_VENDOR_LIST_MNU = "Vis forhandlere";
    var $_PHPSHOP_VENDOR_LIST_LBL = "Forhandlerliste";
    var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = "Forhandlernavn";
    var $_PHPSHOP_VENDOR_LIST_ADMIN = "Admin";
    
    // Vendor Form
    var $_PHPSHOP_VENDOR_FORM_MNU = "Tilf�j forhandler";
    var $_PHPSHOP_VENDOR_FORM_LBL = "Tilf�j information";
    var $_PHPSHOP_VENDOR_FORM_INFO_LBL = "Forhandlerinformation";
    var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = "Kontaktinformation";
    var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = "Fuld st�rrelse";
    var $_PHPSHOP_VENDOR_FORM_UPLOAD = "Upload billede";
    var $_PHPSHOP_VENDOR_FORM_STORE_NAME = "Forhandlers butiksnavn";
    var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = "Forhandlers firmanavn";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = "Adresse 1";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = "Adresse 2";
    var $_PHPSHOP_VENDOR_FORM_CITY = "By";
    var $_PHPSHOP_VENDOR_FORM_STATE = "Stat/Provins/Region";
    var $_PHPSHOP_VENDOR_FORM_COUNTRY = "Land";
    var $_PHPSHOP_VENDOR_FORM_ZIP = "Postnr.";
    var $_PHPSHOP_VENDOR_FORM_PHONE = "Telefon";
    var $_PHPSHOP_VENDOR_FORM_CURRENCY = "Valuta";
    var $_PHPSHOP_VENDOR_FORM_CATEGORY = "Forhandlerkategori";
    var $_PHPSHOP_VENDOR_FORM_LAST_NAME = "Efternavn";
    var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = "Fornavn";
    var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = "Mellemnavn";
    var $_PHPSHOP_VENDOR_FORM_TITLE = "Titel";
    var $_PHPSHOP_VENDOR_FORM_PHONE_1 = "Telefon 1";
    var $_PHPSHOP_VENDOR_FORM_PHONE_2 = "Telefon 2";
    var $_PHPSHOP_VENDOR_FORM_FAX = "Fax";
    var $_PHPSHOP_VENDOR_FORM_EMAIL = "Email";
    var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = "Billedsti";
    var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = "Beskrivelse";
    
    
    // Vendor Category List
    var $_PHPSHOP_VENDOR_CAT_LIST_MNU = "Vis forhandlerkategorier";
    var $_PHPSHOP_VENDOR_CAT_LIST_LBL = "Forhandlerkategoriliste";
    var $_PHPSHOP_VENDOR_CAT_NAME = "Kategorinavn";
    var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = "Kategoribeskrivelse";
    var $_PHPSHOP_VENDOR_CAT_VENDORS = "Forhandlere";
    
    // Vendor Category Form
    var $_PHPSHOP_VENDOR_CAT_FORM_MNU = "Tilf�j forhandlerkategori";
    var $_PHPSHOP_VENDOR_CAT_FORM_LBL = "Forhandlerkategori formular";
    var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = "Kategori information";
    var $_PHPSHOP_VENDOR_CAT_FORM_NAME = "Kategorinavn";
    var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = "Kategoribeskrivelse";
    
    /*#####################
    MODULE MANUFACTURER
    #####################*/

    # Some LABELs
    var $_PHPSHOP_MANUFACTURER_MOD = "Producent";
    var $_PHPSHOP_MANUFACTURER_ADMIN = "Producenter";
    
    
    // Manufacturer List
    var $_PHPSHOP_MANUFACTURER_LIST_MNU = "Vis producenter";
    var $_PHPSHOP_MANUFACTURER_LIST_LBL = "Producentliste";
    var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = "Producentnavn";
    var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = "Admin";
    
    // Manufacturer Form
    var $_PHPSHOP_MANUFACTURER_FORM_MNU = "Tilf�j producent";
    var $_PHPSHOP_MANUFACTURER_FORM_LBL = "Tilf�j information";
    var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = "Producentinformation";
    var $_PHPSHOP_MANUFACTURER_FORM_NAME = "Producentnavn";
    var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = "Producentkategori";
    var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = "Email";
    var $_PHPSHOP_MANUFACTURER_FORM_URL = "URL til producentens website";
    var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = "Beskrivelse";
    
    
    // Manufacturer Category List
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = "Vis producentkategorier";
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = "Producentkategori liste";
    var $_PHPSHOP_MANUFACTURER_CAT_NAME = "Kategorinavn";
    var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = "Kategoribeskrivelse";
    var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = "Producenter";
    
    // Manufacturer Category Form
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = "Tilf�j producentkategori";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = "Producentkategoriformular";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = "Kategoriinformation";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = "Kategorinavn";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = "Kategoribeskrivelse";
    
    
    /*#####################
    Modul HELP
    #####################*/
    var $_PHPSHOP_HELP_MOD = "Hj�lp";
    
    // 210104 start
    
    var $_PHPSHOP_CART_ACTION = "Opdat�r";
    var $_PHPSHOP_CART_UPDATE = "Opdat�r antal i vogn";
    var $_PHPSHOP_CART_DELETE = "Slet produkt fra vogn";
    
    //shopbrowse form
    
    var $_PHPSHOP_PRODUCT_PRICETAG = "Pris";
    var $_PHPSHOP_PRODUCT_CALL = "Ring for pris";
    var $_PHPSHOP_PRODUCT_PREVIOUS = "Forrige";
    var $_PHPSHOP_PRODUCT_NEXT = "N�STE";
    
    //ro_basket
    
    var $_PHPSHOP_CART_TAX = "Moms";
    var $_PHPSHOP_CART_SHIPPING = "Levering";
    var $_PHPSHOP_CART_TOTAL = "Total";
    
    //CHECKOUT.INDEX
    
    var $_PHPSHOP_CHECKOUT_NEXT = "N�ste";
    var $_PHPSHOP_CHECKOUT_REGISTER = "REGISTR�R";
    
    //CHECKOUT.CONFIRM
    
    var $_PHPSHOP_CHECOUT_CONF_BILLINFO = "Faktureringsinformation";
    var $_PHPSHOP_CHECKOUT_CONF_COMPANY = "Firma";
    var $_PHPSHOP_CHECKOUT_CONF_NAME = "Navn";
    var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = "Adresse";
    var $_PHPSHOP_CHECKOUT_CONF_PHONE = "Telefon";
    var $_PHPSHOP_CHECKOUT_CONF_FAX = "Fax";
    var $_PHPSHOP_CHECKOUT_CONF_EMAIL = "Email";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = "Leveringsinformation";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = "Firma";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = "Navn";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = "Adresse";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = "Telefon";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = "Fax";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = "Betalingsform";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = "Navn p� kort";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = "Betalingsform";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = "Kortnummer";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = "Udl�bsdato";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = "Fuldf�r ordre";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = "kr�vet information n�r betaling via betalingskort er valgt";
    
    
    var $_PHPSHOP_ZONE_MOD = "Zone forsendelse";
    
    var $_PHPSHOP_ZONE_LIST_MNU = "List Zoner";
    var $_PHPSHOP_ZONE_FORM_MNU = "Tilf�j Zone";
    var $_PHPSHOP_ZONE_ASSIGN_MNU = "Tildel Zoner";
    
    // assign zone List
    var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = "Land";
    var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = "Aktuel Zone";
    var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = "Tildel til Zone";
    var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = "Opdat�r";
    var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = "Tildel Zoner";
    
    // zone Form
    var $_PHPSHOP_ZONE_FORM_NAME_LBL = "Zonenavn";
    var $_PHPSHOP_ZONE_FORM_DESC_LBL = "Zonebeskrivelse";
    var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = "Zonepris pr. vare";
    var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = "Zone max pris";
    
    // List of zones
    var $_PHPSHOP_ZONE_LIST_LBL = "Zoneliste";
    var $_PHPSHOP_ZONE_LIST_NAME_LBL = "Zonenavn";
    var $_PHPSHOP_ZONE_LIST_DESC_LBL = "Zonebeskrivelse";
    var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = "Zonepris pr. vare";
    var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = "Zone max pris";
    
    var $_PHPSHOP_LOGIN_FIRST = "Log ind eller registr�r Dem som bruger (benyt login modulet i h�jre side).<br>Tak.";
    var $_PHPSHOP_STORE_FORM_TOS = "Salgs- og leveringsbetingelser";
    var $_PHPSHOP_AGREE_TO_TOS = "De skal acceptere vores salgs- og leveringsbetingelser f�rst.";
    var $_PHPSHOP_I_AGREE_TO_TOS = "Jeg accepterer salgsbetingelserne";
    
    var $_PHPSHOP_LEAVE_BLANK = "(efterlad BLANK hvis du ikke har<br />en individuel php-fil til den!)";
    var $_PHPSHOP_RETURN_LOGIN = "Allerede oprettet? Log ind!";
    var $_PHPSHOP_NEW_CUSTOMER = "Ny kunde? Udfyld skemaet!";
    var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = "Kundekonto:";
    var $_PHPSHOP_ACC_ORDER_INFO = "Ordreinformation";
    var $_PHPSHOP_ACC_UPD_BILL = "Her kan De opdatere Deres faktureringsoplysninger.";
    var $_PHPSHOP_ACC_UPD_SHIP = "Her kan De tilf�je og vedligeholde leveringsoplysninger.";
    var $_PHPSHOP_ACC_ACCOUNT_INFO = "Kontoinformation";
    var $_PHPSHOP_ACC_SHIP_INFO = "Leveringsinformation";
    var $_PHPSHOP_ACC_NO_ORDERS = "Ingen ordrer at vise";
    var $_PHPSHOP_ACC_BILL_DEF = "- Standard (Samme som faktureringsadresse)";
    var $_PHPSHOP_SHIPTO_TEXT = "For at g�re det lettere for Dem at f� leveret varer til flere forskellige adresser, kan De nu tilf�je flere leveringsadresser til Deres konto. De bedes give hver leveringsadresse et passende navn.";
    var $_PHPSHOP_CONFIG = "Konfiguration";
    var $_PHPSHOP_USERS = "Brugere";
    var $_PHPSHOP_IS_CC_PAYMENT = "er betalingskort betaling?";
    
    /*#####################################################
     MODULE SHIPPING
    #######################################################*/
    var $_PHPSHOP_SHIPPING_MOD = "Forsendelse";
    var $_PHPSHOP_SHIPPING_MENU_LABEL = "Forsendelse";
    
    var $_PHPSHOP_CARRIER_LIST_MNU = "Transport�r";
    var $_PHPSHOP_CARRIER_LIST_LBL = "Transport�r liste";
    var $_PHPSHOP_RATE_LIST_MNU = "Forsendelsestarif";
    var $_PHPSHOP_RATE_LIST_LBL = "Tarifliste";
    var $_PHPSHOP_CARRIER_LIST_NAME_LBL = "Navn";
    var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = "R�kkef�lge";
    
    var $_PHPSHOP_CARRIER_FORM_MNU = "Opret transport�r";
    var $_PHPSHOP_CARRIER_FORM_LBL = "Opret/rediger transport�r";
    var $_PHPSHOP_RATE_FORM_MNU = "Opret forsendelsestarif";
    var $_PHPSHOP_RATE_FORM_LBL = "Opret/rediger en forsendelsestarif";
    
    var $_PHPSHOP_RATE_FORM_NAME = "Forsendelsestarif beskrivelse";
    var $_PHPSHOP_RATE_FORM_CARRIER = "Transport�r";
    var $_PHPSHOP_RATE_FORM_COUNTRY = "Land";
    var $_PHPSHOP_RATE_FORM_ZIP_START = "Postnr. interval start";
    var $_PHPSHOP_RATE_FORM_ZIP_END = "Postnr. interval slut";
    var $_PHPSHOP_RATE_FORM_WEIGHT_START = "Laveste v�gt";
    var $_PHPSHOP_RATE_FORM_WEIGHT_END = "H�jeste v�gt";
    var $_PHPSHOP_RATE_FORM_VALUE = "Forsendelsesomkostning";
    var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = "Ekspeditionsomkostning";
    var $_PHPSHOP_RATE_FORM_CURRENCY = "Valuta";
    var $_PHPSHOP_RATE_FORM_VAT_ID = "Moms Id";
    var $_PHPSHOP_RATE_FORM_LIST_ORDER = "R�kkef�lge";
    
    var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = "Transport�r";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = "Forsendelsestarif beskrivelse";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = "V�gt fra ...";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = "... til";
    var $_PHPSHOP_CARRIER_FORM_NAME = "Transport�r";
    var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = "R�kkef�lge";
    
    var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = "ERROR: Transport�r ID eksisterer.";
    var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = "ERROR: V�lg en transport�r.";
    var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = "ERROR: Der eksisterer mindst en forsendelsestarif, slet tariffer f�r transport�r";
    var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = "ERROR: Kan ikke finde en transport�r med dette ID.";
    
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = "FJEL: V�lg en transport�r.";
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = "FEJL: Kan ikke finde en transp�rt�r med dette ID.";
    var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = "FEJL: Tarif er p�kr�vet.";
    var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = "FEJL: Fejl i destinationsland. Mere end et land skal adskilles med \";\".";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = "FEJL: En lavere v�gt er p�kr�vet";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = "FEJL: En h�jere v�gt er p�kr�vet";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = "FEJL: Den laveste v�gt skal v�re lavere end den h�jeste v�gt.";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = "FEJL: Forsendelsespris p�kr�vet.";
    var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = "FEJL: V�lg et land";
    
    var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = "FEJL: En forsendelsespris er p�kr�vet";
    
    var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = "V�lg venligst";
    var $_PHPSHOP_INFO_MSG_CARRIER = "Transport�r";
    var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = "Forsendelsestarif";
    var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = "Pris";
    var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = "0 (-ingen-)";
    /*#####################################################
     END: MODULE SHIPPING
    #######################################################*/
    
    var $_PHPSHOP_PAYMENT_FORM_CC = "Betalingskort";
    var $_PHPSHOP_PAYMENT_FORM_USE_PP = "Benyt betalingsformidler";
    var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = "Bank debit";
    var $_PHPSHOP_PAYMENT_FORM_AO = "Efterkrav";
    var $_PHPSHOP_CHECKOUT_MSG_2 = "V�lg en leveringsadresse!";
    var $_PHPSHOP_CHECKOUT_MSG_3 = "V�lg en forsendelsesm�de!";
    var $_PHPSHOP_CHECKOUT_MSG_4 = "V�lg betalingsm�de!";
    var $_PHPSHOP_CHECKOUT_MSG_99 = "Gennemse venligst det indtastede og bekr�ft derefter ordren!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = "V�lg en forsendelsesm�de.";
    var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = "V�lg en anden forsendelsesm�de.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = "V�lg betalingsm�de.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = "Indtast kortnummer.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = "Indtast navnet som betalingskortet er udstedt til.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = "Det indtastede kortnummer er ikke gyldigt.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = "Indtast kortets udl�bsm�ned.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = "Indtast kortets udl�bs�r.";
    var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = "Udl�bsdatoen er ikke gyldig.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = "V�lg leveringsadresse.";
    var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = "Kontonummeret eksisterer ikke.";
    var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = "Der er ingen varer i vognen!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = "FEJL: V�lg en transport�r!";
    var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = "FEJL: Den valgte transporttarif blev ikke fundet!";
    var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = "FEJL: Deres leveringsadresse blev ikke fundet!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = "FEJL: Der er ingen betalingskort informationer...";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = "FEJL: Betalingskort nummeret blev ikke fundet!";
    var $_PHPSHOP_CHECKOUT_ERR_TEST = "Beklager, men kortnummeret som blev benyttet er et testnummer!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = "Bruger ID kan ikke findes!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = "Navnet p� kontoindehaveren er ikke oplyst.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = "IBAN nummer er ikke oplyst.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = "Bankkonto nummer er ikke oplyst.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = "Bankens reg.nr er ikke oplyst.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = "Bankens navn er ikke oplyst.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = "For at g� gennem kasselinien skal alle trin v�re afsluttet korrekt!";

    var $_PHPSHOP_CHECKOUT_MSG_LOG = "Betalingsinformation er gemt til senere behandling.<br />";
    
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = "Minimum ordrev�rdi er endnu ikke opn�et.";
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = "Minimum ordrev�rdi ved k�b er:";
    var $_PHPSHOP_CHECKOUT_PAYMENT_CC = "Betaling med betalingskort";
    var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = "Andre betalingsm�der";
    var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = "V�lg en betalingsm�de:";
    
    var $_PHPSHOP_STORE_FORM_MPOV = "Minimum ordrev�rdi for din butik";
    var $_PHPSHOP_ACCOUNT_BANK_TITLE = "Bankkonto information";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = "Kontonummer";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = "Reg.nr";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = "Bankens navn";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = "IBAN";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = "Kontoindehaver";
    
    var $_PHPSHOP_MODULES = "Moduler";
    var $_PHPSHOP_FUNCTIONS = "Funktioner";
    var $_PHPSHOP_SPECIAL_PRODUCTS = "Specielle produkter";
    
    var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = "Her er De velkommen til at skrive en p�tegning til ordren";
    var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = "Kundens p�tegning";
    var $_PHPSHOP_INCLUDING_TAX = "(including \$tax % moms)";
    var $_PHPSHOP_PLEASE_SEL_ITEM = "V�lg en vare";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = "Vare";

    // DOWNLOADS
    
    var $_PHPSHOP_DOWNLOADS_TITLE = "Download omr�de";
    var $_PHPSHOP_DOWNLOADS_START = "Start Download";
    var $_PHPSHOP_DOWNLOADS_INFO = "Indtast download-ID'et som De har modtaget pr. e-mail og klik 'Start Download'.";
    var $_PHPSHOP_DOWNLOADS_ERR_EXP = "Beklager, men Deres downloadperiode er udl�bet";
    var $_PHPSHOP_DOWNLOADS_ERR_MAX = "Beklager, men Deres maksimum antal af downloads er n�et";
    var $_PHPSHOP_DOWNLOADS_ERR_INV = "Ugyldigt download-ID!";
    var $_PHPSHOP_DOWNLOADS_ERR_SEND = "Kunne ikke sende en besked til ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG = "Besked sendt til ";
    var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = "Download-Info";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = "fil(erne) De har bestilt er klar til download";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = "Indtast de(t) f�lgende Download-ID(er) i Deres Downloads Omr�de: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = "det maksimale antal downloads for hver fil er: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = "Download indtil {expire} dag(e) efter det f�rste download";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = "Sp�rgsm�l? Kommentarer?";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = "Download-Info af "; // e.g. Download-Info by "Storename"
    var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = "Produkt kan downloades"; 
    
    var $_PHPSHOP_PAYPAL_THANKYOU = "Tak for Deres betaling. 
        Overf�rslen lykkedes. De vil modtage en bekr�ftelsese-mail for transaktionen fra PayPal. 
        De kan nu v�lge at forts�tte eller at logge ind p� <a href=http://www.paypal.com>www.paypal.com</a> for at se transaktionsdetaljerne.";
    var $_PHPSHOP_PAYPAL_ERROR = "Der opstod en fejl under overf�rslen. Ordrestatus for Deres ordre kunne ikke opdateres.";
    
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = "Tak for Deres ordre. Detaljerne for Deres ordre fremg�r af nedenst�ende.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = "Tak fordi De valgte at handle hos os.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = "Kontakt os venligst s�fremt De har sp�rgsm�l til ordrebekr�ftelsen.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = "Den f�lgende ordre er modtaget.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = "Se Deres ordre ved at klikke p� linket nedenfor.";
    
    var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = "Negative antal er ikke tilladt.";
    var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = "Indtast en v�rdi for denne vare.";
    
    var $_PHPSHOP_CART_STOCK_1 = "Det valgte antal overskrider antal p� lager. ";
    var $_PHPSHOP_CART_STOCK_2 = "Wi har i �jeblikket \$product_in_stock varer p� lager. ";
    var $_PHPSHOP_CART_STOCK_3 = "Klik her for at reserver varen";
    var $_PHPSHOP_CART_SELECT_ITEM = "V�lg en speciel vare fra detalje visningen!";
    
    var $_PHPSHOP_REGISTRATION_FORM_NONE = "ingen";
    var $_PHPSHOP_REGISTRATION_FORM_MR = "Hr.";
    var $_PHPSHOP_REGISTRATION_FORM_MRS = "Fru.";
    var $_PHPSHOP_REGISTRATION_FORM_DR = "Dr.";
    var $_PHPSHOP_REGISTRATION_FORM_PROF = "Prof.";
    var $_PHPSHOP_DEFAULT = "Default";
    
  /*#####################################################
    MODULE AFFILIATE
  #######################################################*/
    var $_PHPSHOP_AFFILIATE_MOD   = "Partner Administration";
    
    // Affiliate List
    var $_PHPSHOP_AFFILIATE_LIST_MNU		= "List partnere";
    var $_PHPSHOP_AFFILIATE_LIST_LBL		= "Partnerliste";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME	= "Partner navn";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = "Aktiv";
    var $_PHPSHOP_AFFILIATE_LIST_RATE		= "Rate";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = "M�neds total";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION ="M�nedskommission";
    var $_PHPSHOP_AFFILIATE_LIST_ORDERS = "R�kkef�lge";
    
    // Affiliate Email
    var $_PHPSHOP_AFFILIATE_EMAIL_MNU		= "Email partnere";
    var $_PHPSHOP_AFFILIATE_EMAIL_LBL		= "Email partnere";
    var $_PHPSHOP_AFFILIATE_EMAIL_WHO	= "Hvem skal emailes(* = alle)";
    var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT		= "Din emailadresse";
    var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = "Emne";
    var $_PHPSHOP_AFFILIATE_EMAIL_STATS	 = "Indklud�r nuv�rende statistik";
    
    // Affiliate Form
    var $_PHPSHOP_AFFILIATE_FORM_RATE		= "Kommissionsrate (procent)";
    var $_PHPSHOP_AFFILIATE_FORM_ACTIVE		= "Aktiv?";
    
    var $_PHPSHOP_DELIVERY_TIME = "Leveres normalt";
    var $_PHPSHOP_DELIVERY_INFORMATION = "Leveringsinformation";
    var $_PHPSHOP_MORE_CATEGORIES = "flere kategorier";
    var $_PHPSHOP_AVAILABILITY = "Lagerstatus";
    var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = "Dette produkt er pt ikke p� lager.";
    var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = "Produktet forventes p� lager igen den: ";
    
    var $_PHPSHOP_STATISTIC_SUMMARY = "Resume";
    var $_PHPSHOP_STATISTIC_STATISTICS = "Statistik";
    var $_PHPSHOP_STATISTIC_CUSTOMERS = "Kunder";
    var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = "aktive produkter";
    var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = "inaktive produkter";
    var $_PHPSHOP_STATISTIC_SUM = "Sum";
    var $_PHPSHOP_STATISTIC_NEW_ORDERS = "Nye ordrer";
    var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = "Nye kunder";
    
    
	//Waiting list : file /administrator/components/com_phpshop/html/shop.waiting_list.php
	var $_PHPSHOP_WAITING_LIST_MESSAGE = "Indtast Deres emailadresse nedenfor for at f� besked n�r dette produkt er p� lager igen.
                                        Vi hverken deler, udlejer, s�lger eller p� anden m�de benytter Deres emailadresse til andre form�l end at holde
                                        Dem orienteret om hvorn�r produktet igen er p� lager.<br /><br />Tak!";
	var $_PHPSHOP_WAITING_LIST_THANKS = "Tak for Deres t�lmodighed <br />De f�r besked s� snart vi kan give en leveringsdato.";

	//Checkout : file /administrator/components/com_phpshop/html/checkout.thankyou.php
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = "Vis udskrift";
  
  /**************************Admin.show_cfg.php in apparition order ;-)**************************************/
	
	/* PAGE 1 */
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = "V�lg ENTEN Authorize.net ELLER CyberCash";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = " Konfigurationsfil status:";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = "er skrivbar";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = "er skrivebeskyttet";
	
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = "Global";
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = "Sti & URL";
	var $_PHPSHOP_ADMIN_CFG_SITE = "WebSite";
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = "Forsendelse";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = "Kasse";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = "Downloads";
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = "Betalinger";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = "Benyt kun som katalog";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = "Hvis du afkrydser dette disables al indk�bsvognfunktionalitet.";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = "Vis priser";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = "Vis priser med moms?";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = "Bestemmer om kunderne ser priser med eller uden moms.";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = "Mark�r for at vise priserne. S�fremt du benytter katalogfunktionen er det muligt du ikke �nsker at priserne fremg�r";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = "Virtuel moms";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = "Bestemmer om varer med 0-v�gt er momsbelagt eller ej. Modificer ps_checkout.php->calc_order_taxable() to customize this.";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = "Momsangivelse:";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = "Baseret p� leveringsadresse";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = "Baseret p� s�lgeradresse";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = "Dette bestemmer hvilken momssats der benyttes ved momsberegning:<br />
                                                <ul><li>satsen for landet hvor k�ber har hjemsted</li><br/>
                                                <li>eller satsen for landet hvor s�lger har hjemsted.</li></ul>";
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = "Aktiver flere momssatser?";
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = "Mark�r dette hvis du har produkter med forskellige momssatser (eks. 7% for b�ger og mad og 16% for andre varer)";
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = "Fratr�k betalingstype rabat f�r moms og forsendelse?";
	var $_PHPSHOP_ADMIN_CFG_REVIEW = "Aktiver varebed�mmelsessystem for kunder";
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = "Hvis systemet er aktiveret tillader du kunder at <strong>bed�mme produkter</strong> og <strong>skrive anmeldelser</strong> af disse. <br />
                                                                                Dine kunder kan s�ledes skrive deres egne oplevelser med dine produkter s� andre kan se dem.<br />";
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = "Bestemmer om rabatten for den valgte betalingsform skal fratr�kkes F�R (markeret) eller EFTER moms og forsendelse.";
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = "Skal kunder kunne opgive bankkonto data n�r de registrerer sig?";
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = "Mark�r hvis dine kunder skal kunne opgive bankkonto data n�r de registrerer sig som brugere af butikken.";

	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = "Skal kunder kunne anf�re stat/region?";
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = "Mark�r hvis dine kunder skal have mulighed for at v�lge stat/region ved registrering.";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = "Skal kunden acceptere salgs- og leveringsbetingelser?";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = "Mark�r hvis kunden skal acceptere salgs- og leveringsbetingelserne f�r han registrerer sig i butikken.";
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = "Check Lager?";
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = "Bestemmer om der skal kontrolleres for lagerbeholdning n�r en kunde v�lger at k�be en vare. 
                                                                                          Hvis markeret vil kunden ikke kunne tilf�je flere varer til vognen end der er varer p� lageret.";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = "Aktiv�r partnerprogram?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = "Dette aktiverer partner tracking i butikken. Aktiv�r hvis du har tilf�jet partnere i backend'en..";
	
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = "Format p� ordrebekr�ftelsesmail:";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = "Tekst mail";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = "HTML mail";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = "Bestemmer hvordan dine ordrebekr�ftelser ops�ttes:<br />
                                                                                        <ul><li>som simpel tekst email</li>
                                                                                        <li>eller som en html email med billeder.</li></ul>";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = "Tillad Frontend-administration for ikke-Backend brugere?";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = "Med denne indstilling kan du aktivere Frontend Administrationen for brugere der
                                                                                              er butiksadmins, men som ikke har adgang til Mambo Backend (f.eks. Registreret/Redakt�r).";
	
	/* PAGE 2 */
	var $_PHPSHOP_ADMIN_CFG_URL = "URL";
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = "URL til dit website. Normalt identisk med dit Mambo URL (med afsluttende skr�streg i slutningen!)";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = "SECUREURL";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = "Den sikre URL to dit website. (https - med afsluttende skr�streg.)";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = "COMPONENTURL";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = "URL til mambo-phpShop komponenten. (med afsluttende skr�streg i slutningen!)";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = "IMAGEURL";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = "URL til mambo-pspShop komponent billed bibliotek.";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = "ADMINPATH";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = "URL til mambo-phpShop komponent biblioteket.";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = "CLASSPATH";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = "URL til mambo-phpShop classes directory.";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = "PAGEPATH";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = "URL til mambo-phpShop html directory.";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = "IMAGEPATH";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = "URL til mambo-phpShop shop_image directory.";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = "HOMEPAGE";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = "Denne side vil blive loaded som standard.";	
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = "ERRORPAGE";
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = "Dette er standardsiden for fejlmeldinger.";	
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = "DEBUGPAGE";
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = "Dette er standardsiden for visning af fejlretningsmeddelelser.";
	var $_PHPSHOP_ADMIN_CFG_DEBUG = "DEBUG ?";
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = "DEBUG?  	   	Aktiverer fejretningsudskrift. Dette aktiverer DEBUGSIDEN for display i bunden af sk�rmen. Meget v�rdifuld i f.m. butikudvikling.";


/* PAGE 3 */

	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = "PRODUKTBLAD";
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = "Dette er standardsiden til visning af produktdetaljer.";
  var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = "Kategoriskabelon";
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = "Denne definerer standard katagoriskabelonen til visning af produkter i en kategori.<br />
                                                                                                      Du kan oprette nye skabeloner ved at tilpasse eksisterende skabelonfiler <br />
                                                                                                      (som findes i biblioteket <strong>COMPONENTPATH/html/templates/</strong> og begynder med browse_)";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = "Standard antal produkter p� en r�kke";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = "Definerer antallet af produkter pr. linie. <br />
                                                                                                      Eksempel: Hvis v�rdien s�ttes til 4, viser kategoriskabelonen 4 produkter pr. linie";
  
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = "\"no image\" billede";
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = "Dette billede vises n�r der ikke eksisterer et produktbillede.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = "S�GERESULTAT";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = "Angiver antal af linier pr. side n�r s�geresultatet vises.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = "RESULTATFARVE 1";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = "Angiver farven p� de ulige nummererede linier i resultatlisten.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = "RESULTATFARVE 2";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = "Angiver farven p� de lige nummererede linier i resultatlisten.";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = "MAKS. ANTAL LINIER";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = "Angiver antallet af linier som skal vises i ordrelistens listeboks.";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = "Vis footer \"powered by mambo-phpShop\" ?";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = "Viser et powered-by-mambo-phpShop footer billede.";
	
	
	/* PAGE 4 */
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = "V�lg din butiks forsendelsesm�de";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = "Standard forsendelsesmodul med individuelt konfigurerede transport�rer og priser. <strong>ANBEFALES !</strong>";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = "  	Zone Forsendelsesmodul Land Version 1.0<br />
                                                                                                            For flere oplysninger om dette modul bes�g da: <a href=\"http://ZephWare.com\">http://ZephWare.com</a><br />
                                                                                                            eller kontakt <a href=\"mailto:zephware@devcompany.com\">ZephWare.com</a><br /> Mark�r her for at aktivere zone forsendelsesmodulet.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = "UPS forsendelseskalkulation";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = "UPS adgangskode";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = "Din UPS adgangskode";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = "UPS bruger id";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = "BrugerID som du har modtaget fra UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = "UPS kodeord";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = "Kodeordet til din UPS konto";
	  
  var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = "InterShipper Modul. Mark�r kun hvis du har en Intershipper.com konto";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = "Deaktiv�r muligheden for at v�lge forsendelsesm�de. Deaktiv�r hvis dine kunder k�ber ting som kan downloades og derfor ikke kr�ver forsendelse.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = "InterShipper kodeord";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = "Kodeordet til din Intershipper konto.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = "InterShipper email";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = "Email adressen til din Intershipper konto.";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = "KRYPTERINGSN�GLE";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = "Denne n�gle bruges til at kryptere data i databasen. Denne fil m� derfor ikke kunne ses af andre.";
	
	
	/* PAGE 5 */
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = "Aktiv�r step-o-meter";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = "Mark�r s�fremt du �nsker at det enkelte step i k�bsprocessen ( 1 - 2 - 3 - 4 med grafik) skal vises.";
	
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = "V�lg k�bsprocedure der skal f�lges i butikken";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = "<strong>Standard :</strong><br/>
               1. Leveringsadresse angives<br />
              2. Leveringsm�de angives<br />
              3. Betalingsform angives<br />
              4. Ordren bekr�ftes";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = "<strong>Procedure 2:</strong><br/>
               1. Leveringsadresse angives<br />
              2. Betalingsform angives<br />
              3. Ordren bekr�ftes";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = "<strong>Procedure 3:</strong><br/>
               1. Leveringsm�de angives<br />
              2. Betalingsform angives<br />
              3. Ordren bekr�ftes";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = "<strong>Procedure 4:</strong><br/>
               1. Betalingsform angives<br />
              2. Ordren bekr�ftes";
	
	
	
	/* PAGE 6 */
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = "Aktiv�r Downloads";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = "Mark�r for at aktivere downloadfunktionaliteten. (Kun hvis du s�lger produkter som kan downloades)";
	
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = "Ordre status der �bner for download";
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = "V�lg den ordrestatus der iv�rks�tter notifikation af kunden pr. email om at download nu er mulig.";
	
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = "Ordre status der lukker for download";
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = "V�lg den ordrestatus der lukker for kundens mulighed for at downloade.";
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = "DOWNLOAD ROD";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = "Den fysiske sti til filerne som kunden kan downloade. (afsluttende skr�streg i slutningen!)<br>
        <span class=\"message\">For at �ge sikkerheden, benyt da venligst et directory som ikke ligger i webfolderen</span>";
	
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = "Download Maksimum";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = "Angiver antallet af downloads der kan gennemf�res med et Download-ID, (for en ordre)";
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = "Download Udl�b";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = "Angiver tidsperioden <strong>i sekunder</strong> hvor download er aktiveret for kunden. 
  Perioden begynder ved den f�rste download! N�r perioden er udl�bet deaktiveres download-ID'et.<br />Bem�rk : 86400s=24t.";
	
	
	
	
	/* PAGE 7 */
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = "Aktiv�r IPN betaling via PayPal?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = "Mark�r for at lade dine kunder benytte PayPal betalingssystemet.";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = "PayPal betalings email:";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = "Din email som benyttes til PayPal betalinger. Benyttes ogs� som modtager_email.";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = "Ordrestatus ved gennemf�rt transaktion";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = "V�lg den ordrestatus der automatisk gives n�r PayPal betalingen er gennemf�rt. Hvis du s�lger downloads: 
  V�lg den ordrestatus der tillader download (kunden bliver �jeblikkeligt meddelt at han kan downloade produktet via en email fra butikken).";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = "Ordrestatus ved fejl i transaktionen";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = "V�lg den ordrestatus der automatisk gives hvis PayPal betalingen ikke kan gennemf�res.";
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = "Aktiv�r betaling via PayMate?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = "Mark�r for at lade dine kunder benytte det australske PayMate system.";
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = "PayMate brugernavn:";
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = "Din brugerkonto til PayMate.";
	
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = "Aktiv�r Authorize.net betalinger?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = "Mark�r for at benytte Authorize.net sammen med phpShop.";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = "Test status ?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = "V�lg 'Ja' mens du tester. V�lg 'Nej' for at aktivere live transaktioner.";
	var $_PHPSHOP_ADMIN_CFG_YES = "Ja";
	var $_PHPSHOP_ADMIN_CFG_NO = "Nej";
	
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = "Authorize.net Login ID";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = "Dette er dit Authorize.Net Login ID";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = "Authorize.net Transaktionsn�gle";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = "Dette er din Authorize.net transaktions n�gle (Transaction Key)";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = "Autorisationstype";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = "Dette er Authorize.Net autorisationstype.";
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = "Aktiv�r CyberCash?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = "Mark�r for at aktivere CyberCash til phpShop.";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = "CyberCash MERCHANT";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = "CC_MERCHANT er CyberCash Merchant ID";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = "CyberCash Merchant N�gle";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = "CyberCash Merchant n�gle er n�glen givet af CyberCash";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = "CyberCash Betalings URL";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = "CyberCash betalings URL er den af Cybercash oplyste URL til sikre betalinger";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = "CyberCash AUTH TYPE";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = "CyberCash AUTH TYPE er Cybercash autorisationstype som oplyst af CyberCash";
	

    /** Advanced Search feature ***/
    var $_PHPSHOP_ADVANCED_SEARCH  ="Avanceret S�gning";
    var $_PHPSHOP_SEARCH_ALL_CATEGORIES = "S�g i alle kategorier";
    var $_PHPSHOP_SEARCH_ALL_PRODINFO = "S�g i alle produktinformationer";
    var $_PHPSHOP_SEARCH_PRODNAME = "Kun produktnavn";
    var $_PHPSHOP_SEARCH_MANU_VENDOR = "Kun producent/s�lger";
    var $_PHPSHOP_SEARCH_DESCRIPTION = "Kun produktbeskrivelse";
    var $_PHPSHOP_SEARCH_AND = "og";
    var $_PHPSHOP_SEARCH_NOT = "undtagen";
    var $_PHPSHOP_SEARCH_TEXT1 = "I den f�rste drop-down-liste kan De begr�nse s�gningen til en bestemt kategori. 
        I den anden drop-down-liste kan De begr�nse s�gningen til en bestemt type produktinformation (f.eks. Navn). 
        N�r De har valgt disse (eller valgt standard), indtast da hvad der skal s�ges efter. ";
    var $_PHPSHOP_SEARCH_TEXT2 = " De kan specificere s�gningen yderligere ved at tilf�je yderligere s�geord og v�lge 'OG' eller 'UNDTAGEN' operatoren. 
        Hvis De v�lger 'OG' skal begge ord findes for at et produkt vises. 
        Hvis De v�lger 'UNDTAGEN' vises kun s�geresultater indeholdende det f�rste s�geord hvor det andet s�geord ikke findes i sammenh�ngen.";
    var $_PHPSHOP_ORDERBY = "R�kkef�lge";
    
    /*** Review feature ***/
    var $_PHPSHOP_CUSTOMER_RATING  = "Gennemsnitlig bed�mmelse";
    var $_PHPSHOP_TOTAL_VOTES = "Antal bed�mmelser";
    var $_PHPSHOP_CAST_VOTE = "Afgiv Deres bed�mmelse";
    var $_PHPSHOP_RATE_BUTTON = "Bed�m";
    var $_PHPSHOP_RATE_NOM = "Bed�mmelse";
    var $_PHPSHOP_REVIEWS = "Kundeanmeldelser";
    var $_PHPSHOP_NO_REVIEWS = "Der er ingen bed�mmelser af dette produkt.";
    var $_PHPSHOP_WRITE_FIRST_REVIEW = "V�r den f�rste der bed�mmer produktet...";
    var $_PHPSHOP_REVIEW_LOGIN = "Log venligst ind for at skrive en bed�mmelse.";
    var $_PHPSHOP_REVIEW_ERR_RATE = "Giv venligst produktet en karakter for at afslutte Deres bed�mmelse!";
    var $_PHPSHOP_REVIEW_ERR_COMMENT1 = "En bed�mmelse skal l�ngere end 100 tegn.";
    var $_PHPSHOP_REVIEW_ERR_COMMENT2 = "En bed�mmelse m� ikke v�re l�ngere end 2000";
    var $_PHPSHOP_WRITE_REVIEW = "Skriv en bed�mmelse af dette produkt!";
    var $_PHPSHOP_REVIEW_RATE = "F�rst skal De give karakter. Giv venligst en karakter mellem 0 (d�rligst) og 5 (bedst).";
    var $_PHPSHOP_REVIEW_COMMENT = "Skriv nu venligst Deres (korte) bed�mmelse....(min. 100, maks. 2000 tegn) ";
    var $_PHPSHOP_REVIEW_COUNT = "Skrevne tegn: ";
    var $_PHPSHOP_REVIEW_SUBMIT = "Send bed�mmelse";
    var $_PHPSHOP_REVIEW_ALREADYDONE = "De har allerede skrevet en bed�mmelse af dette produkt. Tak!";
    var $_PHPSHOP_REVIEW_THANKYOU = "Tak for Deres bed�mmelse.";
    var $_PHPSHOP_COMMENT= "Kommentar";
    
    var $_PHPSHOP_CREDITCARD_FORM_LBL = "Tilf�j/Redig�r betalingskorttyper";
    var $_PHPSHOP_CREDITCARD_NAME = "Betalingskortnavn";
    var $_PHPSHOP_CREDITCARD_CODE = "Betalingskort - forkortelse";
    var $_PHPSHOP_CREDITCARD_TYPE = "Betalingskort type";
    
    var $_PHPSHOP_CREDITCARD_LIST_LBL = "Betalingskort liste";
    var $_PHPSHOP_UDATE_ADDRESS = "Opdat�r adresse";
    var $_PHPSHOP_CONTINUE_SHOPPING = "Forts�t indk�b";
    
    var $_PHPSHOP_THANKYOU_SUCCESS = "Deres ordre er modtaget!";
    var $_PHPSHOP_ORDER_LINK = "F�lg dette link for at se ordrebekr�ftelsen.";
    
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = "Den aktuelle status for Deres ordre {order_id} er opdateret.";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = "Ny status er:";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = "For at se ordredetaljerne, klik da venligst p� dette link (eller kopier/inds�t det i Deres browser):";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = "Ordre status opdatering: Deres ordre {order_id}";
    var $_PHPSHOP_ORDER_LIST_NOTIFY = "Advis�r kunde?";
    var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = "Opdat�r venligst ordre status f�rst!";
    
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = "Rabat til standard kundegruppe (i %)";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = "En positiv v�rdi X betyder: S�fremt produktet ikke har en pris tilknyttet DENNE kundegruppe, s� reduceres standardprisen med X %. En negativ v�rdi har den modsatte effekt";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = "Produktrabat";
    var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = "Produktrabat visning";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = "Tilf�j/rediger produktrabat";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = "Rabat v�rdi";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = "Indtast rabatten";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = "Rabat type";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = "Procentdel";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = "Total";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = "Skal v�rdien v�re en procentdel eller en total?";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = "Startdato for rabat";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = "Angiver hvilken dag rabatten gives fra";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = "Slutdato for rabat";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = "Angiver hvilken dag rabatten ender";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = "Du kan benytte Produktrabat formularen til at tilf�je rabatter!";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = "De sparer";
    
    var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = "Se fuldst�rrelse billede";
    
/*********************
Currency Display Style 
***********************/
    var $_PHPSHOP_CURRENCY_DISPLAY = "Valuta visning";
    var $_PHPSHOP_CURRENCY_SYMBOL = "Valuta symbol";
    var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = "Du kan ogs� benytte HTML koder her (f.eks. &amp;euro;,&amp;pound;,&amp;yen;,...)";
    var $_PHPSHOP_CURRENCY_DECIMALS = "Decimaler";
    var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = "Antal af viste decimaler (kan v�re 0)<br><b>Afrunding foretages hvis v�rdien har et andet antal decimaler</b>";
    var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = "Decimal tegn";
    var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = "Tegn der benyttes som decimal afgr�nser";
    var $_PHPSHOP_CURRENCY_THOUSANDS = "Tusindtals separator";
    var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = "Tegn der benyttes som tusindtals separator (kan efterlades blank)";
    var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = "Positivt format";
    var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = "Visningsformat for positive v�rdier.<br>(Symb betyder valutasymbol)";
    var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = "Negativt format";
    var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = "Visningsformat for negative v�rdier.<br>(Symb betyder valutasymbol)";
    
    var $_PHPSHOP_OTHER_LISTS = "Andre produktlister";
/**************
Multiple Images 
****************/
    var $_PHPSHOP_MORE_IMAGES = "Se flere billeder";
    var $_PHPSHOP_AVAILABLE_IMAGES = "Tilg�ngelige billeder for";
    var $_PHPSHOP_BACK_TO_DETAILS = "Tilbage til produktdetaljer";
    
    /* FILEMANAGER */
    var $_PHPSHOP_FILEMANAGER = "FilH�ndtering";
    var $_PHPSHOP_FILEMANAGER_LIST = "Filh�ndtering::Produktvisning";
    var $_PHPSHOP_FILEMANAGER_ADD = "Tilf�j billede/fil";
    var $_PHPSHOP_FILEMANAGER_IMAGES = "Tilknyttede billeder";
    var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = "Kan downloades?";
    var $_PHPSHOP_FILEMANAGER_FILES = "Tilf�jede filer (Datablade,...)";
    var $_PHPSHOP_FILEMANAGER_PUBLISHED = "Offentliggjort?";
    
    /* FILE LIST */
    var $_PHPSHOP_FILES_LIST = "Filh�ndtering::Billede-/filvisning for";
    var $_PHPSHOP_FILES_LIST_FILENAME = "Filnavn";
    var $_PHPSHOP_FILES_LIST_FILETITLE = "Fil titel";
    var $_PHPSHOP_FILES_LIST_FILETYPE = "Fil type";
    var $_PHPSHOP_FILES_LIST_EDITFILE = "Rediger fil-data";
    var $_PHPSHOP_FILES_LIST_FULL_IMG = "Stort billede";
    var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = "Lille billede";
    
    
    /* FILE FORM */
    var $_PHPSHOP_FILES_FORM = "Upload en fil til";
    var $_PHPSHOP_FILES_FORM_CURRENT_FILE = "Aktuel fil";
    var $_PHPSHOP_FILES_FORM_FILE = "Fil";
    var $_PHPSHOP_FILES_FORM_IMAGE = "Billede";
    var $_PHPSHOP_FILES_FORM_UPLOAD_TO = "Upload til";
    var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = "standard Produkt Billede Sti";
    var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = "Angiv filplacering";
    var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = "Download Sti (Til salgsbare downloadfiler)";
    var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = "Auto-Opretning af lille visning?";
    var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = "Er filen publiceret?";
    var $_PHPSHOP_FILES_FORM_FILE_TITLE = "Fil titel (Det kunden ser)";
    var $_PHPSHOP_FILES_FORM_FILE_DESC = "Fil beskrivelse";
    var $_PHPSHOP_FILES_FORM_FILE_URL = "Fil URL (ikke p�kr�vet)";
    
    /* FILE & IMAGE PROCESSING */
    var $_PHPSHOP_FILES_PATH_ERROR = "Indtast venligst en korrekt sti!";
    var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = "Lille visning af billede er oprettet!";
    var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = "Kunne IKKE oprette lille-visning af billede!";
    var $_PHPSHOP_FILES_UPLOAD_FAILURE = "Fil/Billede Upload Fejl";
    
    var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = "Kunne ikke slette den store version af billedet.";
    var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = "Stor version af billede er slettet.";
    var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = "Kunne ikke slette den lille visning af billedet (eksisterer muligvis ikke): ";
    var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = "Lille visning af billede er oprettet.";
    var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = "Kunne ikke slette filen.";
    var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = "Filen er slettet.";
    
    var $_PHPSHOP_FILES_NOT_FOUND = "Beklager, men den forespurgte fil eksisterer ikke!";
    var $_PHPSHOP_IMAGE_NOT_FOUND = "Billede er ikke fundet!";

    /*#####################
    MODULE COUPON
    #####################*/
    
    var $_PHPSHOP_COUPON_MOD = "Kupon";
    var $_PHPSHOP_COUPONS = "Kuponer";
    var $_PHPSHOP_COUPON_LIST = "Kupon visning";
    var $_PHPSHOP_COUPON_ALREADY_REDEEMED = "Kuponen er allerede blevet indl�st.";
    var $_PHPSHOP_COUPON_REDEEMED = "Kupon indl�st! Tak.";
    var $_PHPSHOP_COUPON_ENTER_HERE = "S�fremt Du har en kuponkode, indtast den da nedenfor:";
    var $_PHPSHOP_COUPON_SUBMIT_BUTTON = "Send";
    var $_PHPSHOP_COUPON_CODE_EXISTS = "Kuponkoden eksisterer allerede. Gentag venligst indtastningen.";
    var $_PHPSHOP_COUPON_EDIT_HEADER = "Opdat�r kupon";
    var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = "Klik p� en kuponkode for at redigere den, eller v�lg en kuponkode og klik p� Slet for at slette den:";
    var $_PHPSHOP_COUPON_CODE_HEADER = "Kode";
    var $_PHPSHOP_COUPON_PERCENT_TOTAL = "Procent eller Total";
    var $_PHPSHOP_COUPON_TYPE = "Kupontype";
    var $_PHPSHOP_COUPON_TYPE_TOOLTIP = "En gavekupon slettes umiddelbart efter den er indl�st. En permanent kupon kan genbruges liges� ofte en kunde �nsker det.";
    var $_PHPSHOP_COUPON_TYPE_GIFT = "Gave kupon";    
    var $_PHPSHOP_COUPON_TYPE_PERMANENT = "Permanent kupon";    
    var $_PHPSHOP_COUPON_VALUE_HEADER = "V�rdi";
    var $_PHPSHOP_COUPON_DELETE_BUTTON = "Slet kode";
    var $_PHPSHOP_COUPON_CONFIRM_DELETE = "Er du sikker p� at du �nsker at slette denne kuponkode?";
    var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = "Udfyld venligst alle felter.";
    var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = "Kuponv�rdi skal v�re et tal";
    var $_PHPSHOP_COUPON_NEW_HEADER = "Ny kupon";
    var $_PHPSHOP_COUPON_COUPON_HEADER = "Kuponkode";
    var $_PHPSHOP_COUPON_PERCENT = "Procent";
    var $_PHPSHOP_COUPON_TOTAL = "Total";
    var $_PHPSHOP_COUPON_VALUE = "V�rdi";
    var $_PHPSHOP_COUPON_CODE_SAVED = "Kuponkode er gemt.";
    var $_PHPSHOP_COUPON_SAVE_BUTTON = "Gem kupon";
    var $_PHPSHOP_COUPON_DISCOUNT = "Kupon rabat";
    var $_PHPSHOP_COUPON_CODE_INVALID = "Kuponkode kunne ikke findes. Gentag venligst indtastningen.";
    var $_PHPSHOP_COUPONS_ENABLE = "Aktiv�r brugen af kupon�r";
    var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = "S�fremt du aktiverer brugen af kupon�r, s� giver du dine kunder mulighed for at benytte kuponer for at f� rabat p� deres k�b.";
    
    /* Free Shipping */
    var $_PHPSHOP_FREE_SHIPPING = "Frit leveret";
    var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = "Levering er gratis p� denne ordre!";
    var $_PHPSHOP_FREE_SHIPPING_AMOUNT = "Minimum bel�b for fri levering";
    var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = "Bel�b (INCL. MOMS!) som er minimum s�fremt fri levering skal opn�s 
                                                (eksempel: <strong>50</strong> betyder fri levering n�r kunden gennemf�rer
                                                en handel med \$50 (inkl. moms) eller mere.)";
    var $_PHPSHOP_YOUR_STORE = "Din butik";
    var $_PHPSHOP_CONTROL_PANEL = "Kontrolpanel";
    
    /* Configuration Additions */
    var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = "PDF - Knap";
    var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = "Vis eller skjul PDF - knappen i butikken";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = "Skal kunden acceptere salgsbetingelser ved HVER ordre?";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = "Afkryds s�fremt du �nsker at en kunde skal acceptere salgsbetingelserne ved HVER ordre (f�r ordren oprettes).";

    // We need this for eCheck.net Payments
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = "Bankkonto type";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = "Kontrollerer";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = "Kontrollerer handel";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = "Gemmer";
    
    var $_PHPSHOP_PAYMENT_AN_RECURRING = "Periodiske regninger?";
    var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = "Angiv hvorvidt du �nsker periodiske regninger.";
    
    var $_PHPSHOP_INTERNAL_ERROR = "Intern fejl under behandling af foresp�rgsel om";
    var $_PHPSHOP_PAYMENT_ERROR = "Fejl under behandling af betalingen";
    var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = "Betalingen er gennemf�rt korrekt";
    
    /* UPS Shipping Module */
    var $_PHPSHOP_UPS_RESPONSE_ERROR = "UPS kunne ikke behandle foresp�rgslen om fragtpris.";
    var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = "Garanterede dag(e) til levering";
    var $_PHPSHOP_UPS_PICKUP_METHOD = "UPS afhentningsmetode";
    var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = "Hvordan leverer du pakker til UPS?";
    var $_PHPSHOP_UPS_PACKAGE_TYPE = "UPS emballering?";
    var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = "V�lg standard emballering.";
    var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = "Levering til privatadresse?";
    var $_PHPSHOP_UPS_RESIDENTIAL = "Privatadresse (RES)";
    var $_PHPSHOP_UPS_COMMERCIAL    = "Levering til virksomhedsadresse (COM)";
    var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = "Tilbud for levering til privatadresse (RES) eller virksomhedsadresse (COM).";
    var $_PHPSHOP_UPS_HANDLING_FEE = "H�ndteringsomkostninger";
    var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = "Dine h�ndteringsomkostninger for denne forsendelsesmetode.";
    var $_PHPSHOP_UPS_TAX_CLASS = "Moms sats";
    var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = "Brug denne moms sats p� forsendelsesomkostningerne.";
    
    var $_PHPSHOP_ERROR_CODE = "Fejlkode";
    var $_PHPSHOP_ERROR_DESC = "Fejlbeskrivelse";
    
    var $_PHPSHOP_CHANGE_TRANSACTION_KEY = "Vis/Rediger overf�rselsn�glen";
    var $_PHPSHOP_CHANGE_PASSKEY_FORM = "Vis/Rediger kodeord/overf�rselsn�glen";
    var $_PHPSHOP_TYPE_PASSWORD = "Indtast dit kodeord";
    var $_PHPSHOP_CURRENT_PASSWORD = "Nuv�rende kodeord";
    var $_PHPSHOP_CURRENT_TRANSACTION_KEY = "Nuv�rende overf�rselsn�gle";
    var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = "Overf�rselsn�glen blev �ndret.";
    
    var $_PHPSHOP_PAYMENT_CVV2 = "Anmod om kreditkort kontrolcifre (CVV2/CVC2/CID)";
    var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = "Valid�r CVV2/CVC2/CID v�rdien (tre- eller firecifret nummer bag p� kreditkortet (p� forsiden af American Kort))?";
    var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = "Indtast venligst det tre- eller firecifrede kontrolnummer. Nummeret findes bag p� kreditkortet (p� forsiden af American Express Kort)";
    var $_PHPSHOP_CUSTOMER_CVV2_ERROR = "Indtast kreditkort koden for at forts�tte.";
    
    var $_PHPSHOP_PRODUCT_FORM_FILENAME = "Indtast ENTEN et filnavn";
    var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = "NOTE: Her kan indtastes et filnavn. <strong>S�fremt et filnavn indtastes vil ingen filer blive uploaded!!! Filen skal derefter uploades manuelt via FTP!</strong>.";
    var $_PHPSHOP_PRODUCT_FORM_UPLOAD = "ELLER upload en ny fil";
    var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = "Du kan uploade en lokal fil. Denne vil vil v�re det produkt du s�lger. En evt. eksisterende fil vil blive overskrevet.";
    
    var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = "Indtast her den tekst som kunden skal kunne se p� produktarket.<br />f.eks.: 24t, 48 timer, 3 - 5 dage, Restordre.....";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = "ELLER v�lg et billede der skal vises p� produktsiden.<br />Billederne findes i biblioteket <i>/components/com_phpshop/shop_image/availability</i><br />";
    var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = "Attributliste";
    var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = "<h4>Eksemper p� attributliste formatet:</h4>
        <pre>Str.,XL[+2.00],M,S[-1.00];Farve,R�d,Gr�n,Gul,SpecielFarve[=54.00];Osv.,..,..</pre>
        <h4>Prisjusteringer ved hj�lp af de avancerede attributter:</h4>
        <pre>&#43; == L�g bel�bet til standardprisen.<br />
        &#45; == Tr�k bel�bet fra standardprisen.<br />
        &#61; == S�t produktets pris til dette bel�b.
      </pre>";
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = "Brugerdefineret attributliste";
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = "<h4>Eksempler p� brugerattributliste formatet:</h4>
        <pre>Navn;Ekstra;...</pre>";
        
    var $_PHPSHOP_MULTISELECT = "<i>Multivalg: Brug CTRL-tasten og museknappen</i>";
        
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
