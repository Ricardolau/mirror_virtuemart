<?php
/* $Id: slovenian.php,v 1.7 2005/06/22 19:50:45 soeren_nb Exp $
* 
* @package mambo-phpShop
* @subpackage languages
* @Copyright (C) 2005 Soeren Eberhardt
* @Translation Matjaz <matjaz@slo-skuter.net>
* @ All rights reserved
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version $Revision: 1.7 $
*
* Distributed under the GNU Public License (GPL)
* 
* www.mambo-phpshop.net
*
**/
class phpShopLanguage extends mosAbstractLanguage {

    /*####################
    GENERAL DEFINITIONS
    ####################*/
    
    var $_PHPSHOP_MENU = "Meni";
    var $_PHPSHOP_CATEGORY = "Kategorija";
    var $_PHPSHOP_CATEGORIES = "Kategorije";
    var $_PHPSHOP_ADMIN = "Administrator";
    var $_PHPSHOP_PRODUCT = "Produkt";
    var $_PHPSHOP_LIST = "Seznam";
    var $_PHPSHOP_ALL = "Vse";
    var $_PHPSHOP_VIEW = "Poglej";
    var $_PHPSHOP_SHOW = "Prikazi";
    var $_PHPSHOP_ADD = "Dodaj";
    var $_PHPSHOP_UPDATE = "Posodobi";
    var $_PHPSHOP_DELETE = "Brisi";
    var $_PHPSHOP_SELECT = "Izberi";
    var $_PHPSHOP_SUBMIT = "Submit";
    var $_PHPSHOP_RANDOM = "Nakljucni produkti";
    var $_PHPSHOP_LATEST = "Novi produkti";
    
    /*#####################
    MODULE ACCOUNT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_HOME_TITLE = "Domov";
    var $_PHPSHOP_CART_TITLE = "Seznam";
    var $_PHPSHOP_CHECKOUT_TITLE = "Ko�arica";
    var $_PHPSHOP_LOGIN_TITLE = "Prijava";
    var $_PHPSHOP_LOGOUT_TITLE = "Odjava";
    var $_PHPSHOP_BROWSE_TITLE = "Katalog";
    var $_PHPSHOP_SEARCH_TITLE = "Isci";
    var $_PHPSHOP_ACCOUNT_TITLE = "Vzdrzevalni racun";
    var $_PHPSHOP_NAVIGATION_TITLE = "Navigacija";
    var $_PHPSHOP_DEPARTMENT_TITLE = "Oddelek";
    var $_PHPSHOP_INFO = "Informacije";
    
    var $_PHPSHOP_BROWSE_LBL = "Katalog";
    var $_PHPSHOP_PRODUCTS_LBL = "Izdelki";
    var $_PHPSHOP_PRODUCT_LBL = "Produkti";
    var $_PHPSHOP_SEARCH_LBL = "Isci";
    var $_PHPSHOP_FLYPAGE_LBL = "s";
    
    var $_PHPSHOP_PRODUCT_NAME_TITLE = "Ime izdelka";
    var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = "Kategorija izdelka";
    var $_PHPSHOP_PRODUCT_DESC_TITLE = "Opis izdelka";
    
    var $_PHPSHOP_CART_SHOW = "Pokazi ko�arico";
    var $_PHPSHOP_CART_ADD_TO = "Dodaj v ko�arico";
    var $_PHPSHOP_CART_NAME = "Ime";
    var $_PHPSHOP_CART_SKU = "Kataloska stevilka";
    var $_PHPSHOP_CART_PRICE = "Cena";
    var $_PHPSHOP_CART_QUANTITY = "Kolicina";
    var $_PHPSHOP_CART_SUBTOTAL = "Skupno";
    
    # Some messages
    var $_PHPSHOP_ADD_SHIPTO_1 = "Dodaj nov";
    var $_PHPSHOP_ADD_SHIPTO_2 = "Dostava";
    var $_PHPSHOP_NO_SEARCH_RESULT = "Vase iskanje je vrnilo 0 zadetkov.<BR>";
    var $_PHPSHOP_PRICE_LABEL = "Cena: ";
    var $_PHPSHOP_ORDER_BUTTON_LABEL = "Dodaj v ko�arico";
    var $_PHPSHOP_NO_CUSTOMER = "Niste se registrerana stranka. Prosimo uredite vase podatke.";
    var $_PHPSHOP_DELETE_MSG = "Ste prepricani, da zelite odstraniti ta zapis?";
    var $_PHPSHOP_THANKYOU = "Hvala za vase narocilo.";
    var $_PHPSHOP_NOT_SHIPPED = "Ni se odposlano";
    var $_PHPSHOP_EMAIL_SENDTO = "E-posta s potrditvijo je bila poslana na vas naslov";
    var $_PHPSHOP_NO_USER_TO_SELECT = "Oprostite tukaj ni MOS - da bi ga dodali na com_phpshop uporabnisko listo";
    
    // Error messages
    
    var $_PHPSHOP_ERROR = "NAPAKA";
    var $_PHPSHOP_MOD_NOT_REG = "Modul je neregistreran.";
    var $_PHPSHOP_MOD_ISNO_REG = "Neveljaven phpShop modul.";
    var $_PHPSHOP_MOD_NO_AUTH = "Nimate dovoljenja za dostop do izbranega modula.";
    var $_PHPSHOP_PAGE_404_1 = "Stran ne obstaja";
    var $_PHPSHOP_PAGE_404_2 = "Dano ime ne obstaja. Ne najdem datoteke:";
    var $_PHPSHOP_PAGE_403 = "Insufficient Access Rights";
    var $_PHPSHOP_FUNC_NO_EXEC = "Nimate dovoljenja za nadaljevanje ";
    var $_PHPSHOP_FUNC_NOT_REG = "Funkcija ni registrerana";
    var $_PHPSHOP_FUNC_ISNO_REG = " Neveljavna MOS_com_phpShop funkcija.";
    
    /*#####################
    MODULE ADMIN
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADMIN_MOD = "Administracija";
    
    
    // User List
    var $_PHPSHOP_USER_LIST_MNU = "Pregled uporabnikov";
    var $_PHPSHOP_USER_LIST_LBL = "Seznam uprabnikov";
    var $_PHPSHOP_USER_LIST_USERNAME = "Uporabnisko ime";
    var $_PHPSHOP_USER_LIST_FULL_NAME = "polno ime";
    var $_PHPSHOP_USER_LIST_GROUP = "Skupina";
    
    // User Form
    var $_PHPSHOP_USER_FORM_MNU = "Dodaj uporabnika";
    var $_PHPSHOP_USER_FORM_LBL = "Dodaj/posodobi informacije o uporabniku";
    var $_PHPSHOP_USER_FORM_BILLTO_LBL = "Informacije o pla�niku";
    var $_PHPSHOP_USER_FORM_SHIPTO_LBL = "Naslov za dostavo";
    var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = "Dodaj naslov";
    var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = "Vzdevek naslova";
    var $_PHPSHOP_USER_FORM_FIRST_NAME = "Ime";
    var $_PHPSHOP_USER_FORM_LAST_NAME = "Priimek";
    var $_PHPSHOP_USER_FORM_MIDDLE_NAME = "Srednje ime";
    var $_PHPSHOP_USER_FORM_TITLE = "Naziv";
    var $_PHPSHOP_USER_FORM_USERNAME = "Uporabnisko ime";
    var $_PHPSHOP_USER_FORM_PASSWORD_1 = "Geslo";
    var $_PHPSHOP_USER_FORM_PASSWORD_2 = "Potrdite geslo";
    var $_PHPSHOP_USER_FORM_PERMS = "Dovoljenje";
    var $_PHPSHOP_USER_FORM_COMPANY_NAME = "podjetje";
    var $_PHPSHOP_USER_FORM_ADDRESS_1 = "Naslov 1";
    var $_PHPSHOP_USER_FORM_ADDRESS_2 = "Naslov 2";
    var $_PHPSHOP_USER_FORM_CITY = "Kraj";
    var $_PHPSHOP_USER_FORM_STATE = "Posta";
    var $_PHPSHOP_USER_FORM_ZIP = "Postna stevilka";
    var $_PHPSHOP_USER_FORM_COUNTRY = "Drzava";
    var $_PHPSHOP_USER_FORM_PHONE = "Telefon";
    var $_PHPSHOP_USER_FORM_FAX = "Fax";
    var $_PHPSHOP_USER_FORM_EMAIL = "E-posta";
    
    // Module List
    var $_PHPSHOP_MODULE_LIST_MNU = "Enote";
    var $_PHPSHOP_MODULE_LIST_LBL = "Seznam enot";
    var $_PHPSHOP_MODULE_LIST_NAME = "Ime enote";
    var $_PHPSHOP_MODULE_LIST_PERMS = "Module Perms";
    var $_PHPSHOP_MODULE_LIST_FUNCTIONS = "Funkcije";
    var $_PHPSHOP_MODULE_LIST_ORDER = "Pregled naro�il";
    
    // Module Form
    var $_PHPSHOP_MODULE_FORM_MNU = "Dodaj enoto";
    var $_PHPSHOP_MODULE_FORM_LBL = "Informacije";
    var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = "Module Label (for Topmenu)";
    var $_PHPSHOP_MODULE_FORM_NAME = "Ime enote";
    var $_PHPSHOP_MODULE_FORM_PERMS = "Dovoljenje enote";
    var $_PHPSHOP_MODULE_FORM_HEADER = "Glava enote";
    var $_PHPSHOP_MODULE_FORM_FOOTER = "Noga enote";
    var $_PHPSHOP_MODULE_FORM_MENU = "Prikazi enoto v glavni konzoli?";
    var $_PHPSHOP_MODULE_FORM_ORDER = "Pregled naro�il";
    var $_PHPSHOP_MODULE_FORM_DESCRIPTION = "Opis enote";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = "Koda jezika";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = "Datoteka jezika";
    
    // Function List
    var $_PHPSHOP_FUNCTION_LIST_MNU = "Funkcije";
    var $_PHPSHOP_FUNCTION_LIST_LBL = "Seznam funkcij";
    var $_PHPSHOP_FUNCTION_LIST_NAME = "Ime funkcije";
    var $_PHPSHOP_FUNCTION_LIST_CLASS = "Ime skupine";
    var $_PHPSHOP_FUNCTION_LIST_METHOD = "Metoda skupine";
    var $_PHPSHOP_FUNCTION_LIST_PERMS = "Dovoljenja";
    
    // Module Form
    var $_PHPSHOP_FUNCTION_FORM_MNU = "Dodaj funkcijo";
    var $_PHPSHOP_FUNCTION_FORM_LBL = "Informacije o funkciji";
    var $_PHPSHOP_FUNCTION_FORM_NAME = "Ime funkcije";
    var $_PHPSHOP_FUNCTION_FORM_CLASS = "Kategorija";
    var $_PHPSHOP_FUNCTION_FORM_METHOD = "Seznam kategorije";
    var $_PHPSHOP_FUNCTION_FORM_PERMS = "Dovoljene funkcije";
    var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = "Opis funkcije";
    
    // Currency form and list
    var $_PHPSHOP_CURRENCY_LIST_MNU = "Valute";
    var $_PHPSHOP_CURRENCY_LIST_LBL = "Seznam valut";
    var $_PHPSHOP_CURRENCY_LIST_ADD = "Dodaj valuto";
    var $_PHPSHOP_CURRENCY_LIST_NAME = "Ime valute";
    var $_PHPSHOP_CURRENCY_LIST_CODE = "Koda valute";
    
    // Country form and list
    var $_PHPSHOP_COUNTRY_LIST_MNU = "Drzave";
    var $_PHPSHOP_COUNTRY_LIST_LBL = "Seznam drzav";
    var $_PHPSHOP_COUNTRY_LIST_ADD = "Dodaj drzavo";
    var $_PHPSHOP_COUNTRY_LIST_NAME = "Ime drzave";
    var $_PHPSHOP_COUNTRY_LIST_3_CODE = "Koda drzave (3)";
    var $_PHPSHOP_COUNTRY_LIST_2_CODE = "Koda drzave (2)";
    
    /*#####################
    MODULE CHECKOUT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADDRESS = "Naslov";
    var $_PHPSHOP_CONTINUE = "Nadaljevanje";
    
    # Some messages
    var $_PHPSHOP_EMPTY_CART = "Vasa ko�arica je trenutno prazna.";
    
    
    /*#####################
    MODULE ISShipping
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ISSHIPPING_MOD = "InterShipper";
    
    
    // Shipping Ping
    var $_PHPSHOP_ISSHIP_PING_MNU = "Ping InterShipper Server";
    var $_PHPSHOP_ISSHIP_PING_LBL = "InterShipper-Server Ping ";
    var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = "InterShipper Ping Failed";
    var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = "InterShipper Ping Successful";
    var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = "Carrier";
    var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = "Response<BR>Time";
    var $_PHPSHOP_ISSHIP_PING_TIME_LBL = "sec.";
    
    // Shipping List
    var $_PHPSHOP_ISSHIP_LIST_MNU = "List Ship Methods";
    var $_PHPSHOP_ISSHIP_LIST_LBL = "Active Ship Methods";
    var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = "Nacin dostave";
    var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = "Active";
    var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = "Handling Charge";
    var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = "Lead Time";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = "flat rate";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = "percent";
    var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = "days";
    var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = "Heavy Loads";
    
    // Dynamic Shipping Form
    var $_PHPSHOP_ISSHIP_FORM_MNU = "Configure Ship Methods";
    var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = "Add Ship Method";
    var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = "Configure Ship Method";
    var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = "Refresh";
    var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = "Ship Method";
    var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = "Activate";
    var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = "Handling Charge";
    var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = "Lead Time";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = "flat rate";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = "percent";
    var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = "days";
    var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = "Heavy Loads";
    
    
    
    /*#####################
    MODULE ORDER
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_ORDER_MOD = "Narocilo";
    
    // Some menu options 
    var $_PHPSHOP_ORDER_CONFIRM_MNU = "Potrdite narocilo";
    var $_PHPSHOP_ORDER_CANCEL_MNU = "Preklicite narocilo";
    var $_PHPSHOP_ORDER_PRINT_MNU = "Natisnite narocilo";
    var $_PHPSHOP_ORDER_DELETE_MNU = "Izbrisite narocilo";
    
    // Order List
    var $_PHPSHOP_ORDER_LIST_MNU = "Preglejte narocila";
    var $_PHPSHOP_ORDER_LIST_LBL = "Razvrstite narocila";
    var $_PHPSHOP_ORDER_LIST_ID = "�tevilka narocila";
    var $_PHPSHOP_ORDER_LIST_CDATE = "Datum narocila";
    var $_PHPSHOP_ORDER_LIST_MDATE = "Zadnjic posodobljeno";
    var $_PHPSHOP_ORDER_LIST_STATUS = "Status";
    var $_PHPSHOP_ORDER_LIST_TOTAL = "Skupno";
    var $_PHPSHOP_ORDER_ITEM = "Naroceni izdelki";
    
    // Order print
    var $_PHPSHOP_ORDER_PRINT_PO_LBL = "Naro�ilo";
    var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = "�tevilka narocila";
    var $_PHPSHOP_ORDER_PRINT_PO_DATE = "Datum narocila";
    var $_PHPSHOP_ORDER_PRINT_PO_STATUS = "Status narocila";
    var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = "Podatki o stranki";
    var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = "Podatki o placniku";
    var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = "Podatki dostave";
    var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = "Placnik";
    var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = "Poslati na";
    var $_PHPSHOP_ORDER_PRINT_NAME = "Ime";
    var $_PHPSHOP_ORDER_PRINT_COMPANY = "Podjetje";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = "Naslov 1";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = "Naslov 2";
    var $_PHPSHOP_ORDER_PRINT_CITY = "Mesto";
    var $_PHPSHOP_ORDER_PRINT_STATE = "Posta";
    var $_PHPSHOP_ORDER_PRINT_ZIP = "Postna stevilka";
    var $_PHPSHOP_ORDER_PRINT_COUNTRY = "Postna stevilka";
    var $_PHPSHOP_ORDER_PRINT_PHONE = "Telefon";
    var $_PHPSHOP_ORDER_PRINT_FAX = "Fax";
    var $_PHPSHOP_ORDER_PRINT_EMAIL = "E-naslov";
    var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = "Naroceni izdelki";
    var $_PHPSHOP_ORDER_PRINT_QUANTITY = "Kolicina";
    var $_PHPSHOP_ORDER_PRINT_QTY = "Kolicina";
    var $_PHPSHOP_ORDER_PRINT_SKU = "Naziv";
    var $_PHPSHOP_ORDER_PRINT_PRICE = "Cena";
    var $_PHPSHOP_ORDER_PRINT_TOTAL = "Skupaj neto";
    var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = "Skupaj bruto";
    var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = "DDV";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING = "Odposiljanje";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = "DDV od odposiljanja";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = "Nacin placila";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = "Ime racuna";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = "�tevilka racuna";
    var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = "Velja do";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = "dnevnik";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = "Informacije o dostavi";
    var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = "Inforacije o placilu";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = "Dostava";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = "Nacin dostave";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = "Datum dostave";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = "Cena dostave";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_MNU = "Preglej status narocila po tipih";
    var $_PHPSHOP_ORDER_STATUS_FORM_MNU = "Dodaj tip naro�ila";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_CODE = "koda narocila";
    var $_PHPSHOP_ORDER_STATUS_LIST_NAME = "ime narocila";
    
    var $_PHPSHOP_ORDER_STATUS_FORM_LBL = "status narocila";
    var $_PHPSHOP_ORDER_STATUS_FORM_CODE = "koda narocila";
    var $_PHPSHOP_ORDER_STATUS_FORM_NAME = "Ime narocila";
    var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = "narocila";
    
    
    /*#####################
    MODULE PRODUCT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_PRODUCT_MOD = "Izdelki";
    
    var $_PHPSHOP_CURRENT_PRODUCT = "Trenutni produkti";
    var $_PHPSHOP_CURRENT_ITEM = "Trenutni produkt";
    
    // Product Inventory
    var $_PHPSHOP_PRODUCT_INVENTORY_LBL = "Zaloga izdelkov";
    var $_PHPSHOP_PRODUCT_INVENTORY_MNU = "Preglej zalogo";
    var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = "Cena";
    var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = "�tevilka";
    var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = "Teza";
    // Product List
    var $_PHPSHOP_PRODUCT_LIST_MNU = "Preglej izdelke";
    var $_PHPSHOP_PRODUCT_LIST_LBL = "Pregled izdelkov";
    var $_PHPSHOP_PRODUCT_LIST_NAME = "Ime izdelka";
    var $_PHPSHOP_PRODUCT_LIST_SKU = "SKU";
    var $_PHPSHOP_PRODUCT_LIST_PUBLISH = "Objavi";
    
    // Product Form
    var $_PHPSHOP_PRODUCT_FORM_MNU = "Dodaj izdelek";
    var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = "Spremeni izdelek";
    var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = "Pregled izdelka na novi strani";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = "Dodaj predmet";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = "Dodaj nov predmet";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = "Nov izdelek";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = "Posodobi izdelek";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = "Informacije o izdelku";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = "Status izdelka";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = "Dimenzije in teza izdelka";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = "Slika izdelka";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = "Nov izdelek";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = "Posodobi izdelek";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = "Informacije o izdelku";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = "Status izdelka";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = "Dimenzije in teza izdelka";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = "Slika izdelka";
    var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = "Nazaj na glavno kategorijo";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = "To update actual image, type in path to new image.";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = "Napisite \"none\" da ibrisete tekoco sliko";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = "Product Items";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = "Lastnosti";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = "Are you sure you want to delete this Product\\nand the Items related to it?";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = "Are you sure you want to delete this Item?";
    var $_PHPSHOP_PRODUCT_FORM_VENDOR = "Prodajalec";
    var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = "Izdelovalec";
    var $_PHPSHOP_PRODUCT_FORM_SKU = "Naziv";
    var $_PHPSHOP_PRODUCT_FORM_NAME = "Ime";
    var $_PHPSHOP_PRODUCT_FORM_URL = "Link";
    var $_PHPSHOP_PRODUCT_FORM_CATEGORY = "Kategorija";
    var $_PHPSHOP_PRODUCT_FORM_CATEGORY2 = "Kategorija 2";
    var $_PHPSHOP_PRODUCT_FORM_PRICE = "Drobno prodajna cena";
    var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = "Opis";
    var $_PHPSHOP_PRODUCT_FORM_S_DESC = "Kratek opis";
    var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = "Na zalogi";
    var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = "Naroceno";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = "Na voljo";
    var $_PHPSHOP_PRODUCT_FORM_SPECIAL = "Akcija";
    var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = "Tip popusta";
    var $_PHPSHOP_PRODUCT_FORM_PUBLISH = "Objavim?";
    var $_PHPSHOP_PRODUCT_FORM_LENGTH = "dolzina";
    var $_PHPSHOP_PRODUCT_FORM_WIDTH = "visina";
    var $_PHPSHOP_PRODUCT_FORM_HEIGHT = "Teza";
    var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = "Merska enota";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT = "Teza";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = "Merska enota";
    var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = "Slika";
    var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = "Celoten zaslon";
    
    // Product Display
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = "Izdelki in rezultati";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = "Product Update Results";
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = "Item Add Results";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = "Item Update Results";
    var $_PHPSHOP_PRODUCT_CSV_UPLOAD = "Use CSV upload";
    var $_PHPSHOP_PRODUCT_FOLDERS = "Product Folders";
    
    // Product Category List
    var $_PHPSHOP_CATEGORY_LIST_MNU = "Preglej kategorije";
    var $_PHPSHOP_CATEGORY_LIST_LBL = "Drevesni pregled kategorije";
    
    // Product Category Form
    var $_PHPSHOP_CATEGORY_FORM_MNU = "Dodaj kategorijo";
    var $_PHPSHOP_CATEGORY_FORM_LBL = "Informacije o kategoriji";
    var $_PHPSHOP_CATEGORY_FORM_NAME = "Ime kategorije";
    var $_PHPSHOP_CATEGORY_FORM_PARENT = "Glavni meni";
    var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = "Opis kategorije";
    var $_PHPSHOP_CATEGORY_FORM_PUBLISH = "Objavim?";
    var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = "Category Flypage";
    
    // Product Attribute List
    var $_PHPSHOP_ATTRIBUTE_LIST_MNU = "Preglej oznacbe";
    var $_PHPSHOP_ATTRIBUTE_LIST_LBL = "Oznacba za";
    var $_PHPSHOP_ATTRIBUTE_LIST_NAME = "Ime oznacbe";
    var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = "Ko�arica";
    
    // Product Attribute Form
    var $_PHPSHOP_ATTRIBUTE_FORM_MNU = "Dodaj oznacbo";
    var $_PHPSHOP_ATTRIBUTE_FORM_LBL = "Obrazec za oznacbo";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = "Nova oznacba nov izdelek";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = "Posodobi oznacbo za izdelek";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = "Nova oznacba za izdelek";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = "Posodobi oznacbo za predmet";
    var $_PHPSHOP_ATTRIBUTE_FORM_NAME = "Ime oznacbee";
    var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = "Ko�arica";
    
    // Product Price List
    var $_PHPSHOP_PRICE_LIST_MNU = "Preglej kategorije";
    var $_PHPSHOP_PRICE_LIST_LBL = "Cenik";
    var $_PHPSHOP_PRICE_LIST_FOR_LBL = "Cena za";
    var $_PHPSHOP_PRICE_LIST_GROUP_NAME = "Ime skupine";
    var $_PHPSHOP_PRICE_LIST_PRICE = "Cena";
    var $_PHPSHOP_PRODUCT_LIST_CURRENCY = "Valuta";
    
    // Product Price Form
    var $_PHPSHOP_PRICE_FORM_MNU = "Dodaj ceno";
    var $_PHPSHOP_PRICE_FORM_LBL = "Informacije o ceni";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = "Nova cena za izdelek";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = "posodobi ceno za izdelek";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = "Nova cena za izdelek";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = "Posodobi ceno za izdelek";
    var $_PHPSHOP_PRICE_FORM_PRICE = "Cena";
    var $_PHPSHOP_PRICE_FORM_CURRENCY = "Valuta";
    var $_PHPSHOP_PRICE_FORM_GROUP = "Skupina kupcev";
    
    
    /*#####################
    MODULE REPORT BASIC
    #####################*/
    # Some LABELs
    var $_PHPSHOP_REPORTBASIC_MOD = "Porocilo";
    var $_PHPSHOP_RB_INDIVIDUAL = "Individualno iskanje izdelka";
    var $_PHPSHOP_RB_SALE_TITLE = "Porocilo prodaje";
    
    /* labels for rpt_sales */
    var $_PHPSHOP_RB_SALES_PAGE_TITLE = "Pregled aktivnosti prodaje";
    
    var $_PHPSHOP_RB_INTERVAL_TITLE = "Nastavi interval";
    var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = "Mesecni";
    var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = "Tedenski";
    var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = "Dnevni";
    
    var $_PHPSHOP_RB_THISMONTH_BUTTON = "Tekoci mesec";
    var $_PHPSHOP_RB_LASTMONTH_BUTTON = "Pretekli mesec";
    var $_PHPSHOP_RB_LAST60_BUTTON = "Zadnjih 60 dni";
    var $_PHPSHOP_RB_LAST90_BUTTON = "Zadnih 90 dni";
    
    var $_PHPSHOP_RB_START_DATE_TITLE = "Zacetek";
    var $_PHPSHOP_RB_END_DATE_TITLE = "Konec ob";
    var $_PHPSHOP_RB_SHOW_SEL_RANGE = "Prikazi izbrano lestvico";
    var $_PHPSHOP_RB_REPORT_FOR = "Porocilo za ";
    var $_PHPSHOP_RB_DATE = "Datum";
    var $_PHPSHOP_RB_ORDERS = "Narocila";
    var $_PHPSHOP_RB_TOTAL_ITEMS = "Skupno prodano";
    var $_PHPSHOP_RB_REVENUE = "Dohodek";
    var $_PHPSHOP_RB_PRODLIST = "Pregled izdelkov";
    
    
    
    /*#####################
    MODULE SHOP
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOP_MOD = "Trgovina";
    var $_PHPSHOP_PRODUCT_THUMB_TITLE = "Slika";
    var $_PHPSHOP_PRODUCT_PRICE_TITLE = "Cena";
    var $_PHPSHOP_ORDER_STATUS_P = "V kosarici";
    var $_PHPSHOP_ORDER_STATUS_C = "Potrjeno";
    var $_PHPSHOP_ORDER_STATUS_X = "Preklicano";
    
    
    # Some messages
    var $_PHPSHOP_ORDER_BUTTON = "Narocilo";
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOPPER_MOD = "Kupec";
    
    
    
    // Shopper List
    var $_PHPSHOP_SHOPPER_LIST_MNU = "Pregled kupcev";
    var $_PHPSHOP_SHOPPER_LIST_LBL = "Seznam kupcev";
    var $_PHPSHOP_SHOPPER_LIST_USERNAME = "Uporabnisko ime";
    var $_PHPSHOP_SHOPPER_LIST_NAME = "Polno ime";
    var $_PHPSHOP_SHOPPER_LIST_GROUP = "Skupina";
    
    // Shopper Form
    var $_PHPSHOP_SHOPPER_FORM_MNU = "Dodaj kupca";
    var $_PHPSHOP_SHOPPER_FORM_LBL = "Informacije o kupcu";
    var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = "Informacije o placniku";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = "Informacije";
    var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = "Informacije o dostavi";
    var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = "Dodaj naslov";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = "Vzdevek naslova";
    var $_PHPSHOP_SHOPPER_FORM_USERNAME = "Uporabnisko ime";
    var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = "Ime";
    var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = "Priimek";
    var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = "Srednje ime";
    var $_PHPSHOP_SHOPPER_FORM_TITLE = "Naziv";
    var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = "Ime kupca";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = "Geslo";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = "Potrditev gesla";
    var $_PHPSHOP_SHOPPER_FORM_GROUP = "Skupina kupca";
    var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = "Podjetje";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = "Naslov 1";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = "Naslov 2";
    var $_PHPSHOP_SHOPPER_FORM_CITY = "Kraj";
    var $_PHPSHOP_SHOPPER_FORM_STATE = "Posta";
    var $_PHPSHOP_SHOPPER_FORM_ZIP = "Postna stevilka";
    var $_PHPSHOP_SHOPPER_FORM_COUNTRY = "Drzava";
    var $_PHPSHOP_SHOPPER_FORM_PHONE = "Telefon";
    var $_PHPSHOP_SHOPPER_FORM_FAX = "Fax";
    var $_PHPSHOP_SHOPPER_FORM_EMAIL = "E-naslov";
    
    // Shopper Group List
    var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = "Pregled kupcevega seznama";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = "Seznam kupceve skupine";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = "Ime skupine";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = "Opis skupine";
    
    
    // Shopper Group Form
    var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = "Seznam skupine kupcev";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = "Dodaj skupino kupcev";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = "Ime skupine";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = "Opis skupine";
    
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_STORE_MOD = "E-trgovina";
    
    
    // Store Form
    var $_PHPSHOP_STORE_FORM_MNU = "Uredi trgovino";
    var $_PHPSHOP_STORE_FORM_LBL = "Informacije o trgovini";
    var $_PHPSHOP_STORE_FORM_CONTACT_LBL = "Kontaktne informacije";
    var $_PHPSHOP_STORE_FORM_FULL_IMAGE = "Celotna slika";
    var $_PHPSHOP_STORE_FORM_UPLOAD = "Nalozi sliko";
    var $_PHPSHOP_STORE_FORM_STORE_NAME = "Ime trgovine";
    var $_PHPSHOP_STORE_FORM_COMPANY_NAME = "Podjetje";
    var $_PHPSHOP_STORE_FORM_ADDRESS_1 = "Naslov 1";
    var $_PHPSHOP_STORE_FORM_ADDRESS_2 = "Naslov 2";
    var $_PHPSHOP_STORE_FORM_CITY = "Kraj";
    var $_PHPSHOP_STORE_FORM_STATE = "Posta";
    var $_PHPSHOP_STORE_FORM_COUNTRY = "Drzava";
    var $_PHPSHOP_STORE_FORM_ZIP = "Postna stevilka";
    var $_PHPSHOP_STORE_FORM_PHONE = "Telefon";
    var $_PHPSHOP_STORE_FORM_CURRENCY = "Valuta";
    var $_PHPSHOP_STORE_FORM_CATEGORY = "Kategorija trgovine";
    var $_PHPSHOP_STORE_FORM_LAST_NAME = "Priimek";
    var $_PHPSHOP_STORE_FORM_FIRST_NAME = "Ime";
    var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = "Srednje ime";
    var $_PHPSHOP_STORE_FORM_TITLE = "Naziv";
    var $_PHPSHOP_STORE_FORM_PHONE_1 = "Telefon";
    var $_PHPSHOP_STORE_FORM_PHONE_2 = "GSM";
    var $_PHPSHOP_STORE_FORM_FAX = "Fax";
    var $_PHPSHOP_STORE_FORM_EMAIL = "E-naslov";
    var $_PHPSHOP_STORE_FORM_IMAGE_PATH = "SLika";
    var $_PHPSHOP_STORE_FORM_DESCRIPTION = "Opis";
    
    
    
    var $_PHPSHOP_PAYMENT = "Payment";
    // Payment Method List
    var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = "Na�in pla�ila";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = "Seznam pla�il";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = "Ime";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = "Koda";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = "Popust";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = "Skupina kupca";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = "Na�in pla�ila";
    
    // Payment Method Form
    var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = "Dodaj na�in pla�ila";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = "Obrazec za na�in pla�ila";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = "Payment Form Name";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = "Grupa uporabnika";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = "Popust";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = "Koda";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = "Seznam naro�il";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = "Tip pla�ilnih metod";
    
    
    
    /*#####################
    MODULE TAX
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_TAX_MOD = "Tax";
    
    // User List
    var $_PHPSHOP_TAX_RATE = "Stopnja davka";
    var $_PHPSHOP_TAX_LIST_MNU = "Seznam stopenj davka";
    var $_PHPSHOP_TAX_LIST_LBL = "Davki";
    var $_PHPSHOP_TAX_LIST_STATE = "Regija davka (us)";
    var $_PHPSHOP_TAX_LIST_COUNTRY = "Davek drzave";
    var $_PHPSHOP_TAX_LIST_RATE = "Davek";
    
    // User Form
    var $_PHPSHOP_TAX_FORM_MNU = "Dodaj davek";
    var $_PHPSHOP_TAX_FORM_LBL = "Dodaj informacijo o davku";
    var $_PHPSHOP_TAX_FORM_STATE = "Tax State or Region";
    var $_PHPSHOP_TAX_FORM_COUNTRY = "Tax Country";
    var $_PHPSHOP_TAX_FORM_RATE = "Davek";
    
    
    
    
    /*#####################
    MODULE VENDOR
    #####################*/
    
    
    
    # Some LABELs
    var $_PHPSHOP_VENDOR_MOD = "Prodajalec";
    var $_PHPSHOP_VENDOR_ADMIN = "Prodajalec";
    
    
    // Vendor List
    var $_PHPSHOP_VENDOR_LIST_MNU = "Prodajalci";
    var $_PHPSHOP_VENDOR_LIST_LBL = "Seznam prodajalcev";
    var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = "Naziv prodajalca";
    var $_PHPSHOP_VENDOR_LIST_ADMIN = "Admin";
    
    // Vendor Form
    var $_PHPSHOP_VENDOR_FORM_MNU = "Dodaj trgovca";
    var $_PHPSHOP_VENDOR_FORM_LBL = "Dodaj informacije";
    var $_PHPSHOP_VENDOR_FORM_INFO_LBL = "Informacije o trgovcu";
    var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = "Kontaktne informacije";
    var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = "Celotna slika";
    var $_PHPSHOP_VENDOR_FORM_UPLOAD = "Nalozi sliko";
    var $_PHPSHOP_VENDOR_FORM_STORE_NAME = "Ime prodajalne";
    var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = "Podjetje";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = "Naslov 1";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = "Naslov 2";
    var $_PHPSHOP_VENDOR_FORM_CITY = "Kraj";
    var $_PHPSHOP_VENDOR_FORM_STATE = "Posta";
    var $_PHPSHOP_VENDOR_FORM_COUNTRY = "Drzava";
    var $_PHPSHOP_VENDOR_FORM_ZIP = "Postna stevilka";
    var $_PHPSHOP_VENDOR_FORM_PHONE = "Telefon";
    var $_PHPSHOP_VENDOR_FORM_CURRENCY = "Valuta";
    var $_PHPSHOP_VENDOR_FORM_CATEGORY = "Kategorija trgovca";
    var $_PHPSHOP_VENDOR_FORM_LAST_NAME = "Priimek";
    var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = "Ime";
    var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = "Srednje ime";
    var $_PHPSHOP_VENDOR_FORM_TITLE = "Naziv";
    var $_PHPSHOP_VENDOR_FORM_PHONE_1 = "Telefon";
    var $_PHPSHOP_VENDOR_FORM_PHONE_2 = "GSM";
    var $_PHPSHOP_VENDOR_FORM_FAX = "Fax";
    var $_PHPSHOP_VENDOR_FORM_EMAIL = "E-naslov";
    var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = "SLika";
    var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = "Opis";
    
    
    // Vendor Category List
    var $_PHPSHOP_VENDOR_CAT_LIST_MNU = "Prodajalci";
    var $_PHPSHOP_VENDOR_CAT_LIST_LBL = "Seznam prodajalcev";
    var $_PHPSHOP_VENDOR_CAT_NAME = "Ime kategorije";
    var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = "Opis kategorije";
    var $_PHPSHOP_VENDOR_CAT_VENDORS = "Prodajalci";
    
    // Vendor Category Form
    var $_PHPSHOP_VENDOR_CAT_FORM_MNU = "Dodaj kategorijo prodajalcev";
    var $_PHPSHOP_VENDOR_CAT_FORM_LBL = "Obrazec prodajalcev";
    var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = "Informacije o kategoriji";
    var $_PHPSHOP_VENDOR_CAT_FORM_NAME = "Ime kategorije";
    var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = "Opis kategorije";
    
    /*#####################
    MODUL PROIZVAJALEC
    #####################*/

    # Some LABELs
    var $_PHPSHOP_MANUFACTURER_MOD = "Proizvajalec";
    var $_PHPSHOP_MANUFACTURER_ADMIN = "Proizvajalci";
    
    
    // Manufacturer List
    var $_PHPSHOP_MANUFACTURER_LIST_MNU = "Seznam proizvajalcev";
    var $_PHPSHOP_MANUFACTURER_LIST_LBL = "List proizvajalcev";
    var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = "Ime proizvajalca";
    var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = "Admin";
    
    // Manufacturer Form
    var $_PHPSHOP_MANUFACTURER_FORM_MNU = "Dodaj poizvajalca";
    var $_PHPSHOP_MANUFACTURER_FORM_LBL = "Dodaj informacijo";
    var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = "Proizvajal�eve informacije";
    var $_PHPSHOP_MANUFACTURER_FORM_NAME = "Ime proizvajalca";
    var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = "Kategorija proizvajalca";
    var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = "E-naslov";
    var $_PHPSHOP_MANUFACTURER_FORM_URL = "Spletna stran";
    var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = "Opis";
    
    
    // Manufacturer Category List
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = "Seznam proizvajal�evih kategorij";
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = "Preglej proizvajal�ev seznam";
    var $_PHPSHOP_MANUFACTURER_CAT_NAME = "Ime kategorije";
    var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = "Opis kategorije";
    var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = "Proizvajalci";
    
    // Manufacturer Category Form
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = "Dodaj proizvajal�evo kategorijo";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = "Obrazec proizvajal�eve kategorije";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = "Informacije o kategoriji";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = "Ime kategorije";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = "Opis kategorije";
    
    
    /*#####################
    Modul HELP
    #####################*/
    var $_PHPSHOP_HELP_MOD = "Pomoc";
    
    // 210104 start
    
    // basketform
    var $_PHPSHOP_CART_ACTION = "Uredi";
    var $_PHPSHOP_CART_UPDATE = "Posodobi";
    
    //230104
    var $_PHPSHOP_CART_DELETE = "Izbrisi";
    
    //shopbrowse form
    
    var $_PHPSHOP_PRODUCT_PRICETAG = "Cena";
    var $_PHPSHOP_PRODUCT_CALL = "Pokli�i za ceno";
    var $_PHPSHOP_PRODUCT_PREVIOUS = "Prejsnje";
    var $_PHPSHOP_PRODUCT_NEXT = "Naslednje";
    
    //ro_basket
    
    var $_PHPSHOP_CART_TAX = "DDV";
    var $_PHPSHOP_CART_SHIPPING = "Dostava";
    var $_PHPSHOP_CART_TOTAL = "Skupaj";
    
    //CHECKOUT.INDEX
    
    var $_PHPSHOP_CHECKOUT_NEXT = "Naslednje";
    var $_PHPSHOP_CHECKOUT_REGISTER = "REGISTER";
    
    //CHECKOUT.CONFIRM
    
    var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = "Informacije o pla�niku";
    var $_PHPSHOP_CHECKOUT_CONF_COMPANY = "Podjetje";
    var $_PHPSHOP_CHECKOUT_CONF_NAME = "Ime";
    var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = "Naslov";
    var $_PHPSHOP_CHECKOUT_CONF_PHONE = "Telefon";
    var $_PHPSHOP_CHECKOUT_CONF_FAX = "Fax";
    var $_PHPSHOP_CHECKOUT_CONF_EMAIL = "E-naslov";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = "Informacije o prejemniku";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = "Podjetje";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = "Ime";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = "Naslov";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = "Telefon";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = "Fax";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = "Informacije o pla�ilu";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = "Ime na kartici";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = "Na�in pla�ila";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = "�tevilka kreditne kartice";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = "Datum veljavnosti";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = "Zaklju�i naro�ilo";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = "Zahtevane informacije ko je izbran na�in pla�ila s kreditno kartico";
    
    
    var $_PHPSHOP_ZONE_MOD = "Cona dostave";
    
    var $_PHPSHOP_ZONE_LIST_MNU = "Preglej cone";
    var $_PHPSHOP_ZONE_FORM_MNU = "Dodaj cono";
    var $_PHPSHOP_ZONE_ASSIGN_MNU = "Assign Zones";
    
    // assign zone List
    var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = "Drzava";
    var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = "Valuta";
    var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = "Assign To Zone";
    var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = "Posodobi";
    var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = "Assign Zones";
    
    // zone Form
    var $_PHPSHOP_ZONE_FORM_NAME_LBL = "Ime cone";
    var $_PHPSHOP_ZONE_FORM_DESC_LBL = "Opis cone";
    var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = "Zone Cost Per Item";
    var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = "Zone Cost Limit";
    
    // List of zones
    var $_PHPSHOP_ZONE_LIST_LBL = "Seznam con";
    var $_PHPSHOP_ZONE_LIST_NAME_LBL = "Ime cone";
    var $_PHPSHOP_ZONE_LIST_DESC_LBL = "Opis cone";
    var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = "Cena cone za izdelek";
    var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = "Limit cone";
    
    var $_PHPSHOP_LOGIN_FIRST = "Prosim prijavite se na stran (modul za prijavo) first.<br>Hvala.";
    var $_PHPSHOP_STORE_FORM_TOS = "Pogoji uporabe";
    var $_PHPSHOP_AGREE_TO_TOS = "Napaka pri izpolnjevanju.";
    var $_PHPSHOP_I_AGREE_TO_TOS = "Strinjam se z danimi pogoji.";
    
    var $_PHPSHOP_LEAVE_BLANK = "(leave BLANK if you have <br />no individual php-file for it!)";
    var $_PHPSHOP_RETURN_LOGIN = "�e obstoje�a stranka: Prsim prijavite se";
    var $_PHPSHOP_NEW_CUSTOMER = "Nov? Prosimo izpolnite spodnji obrazec";
    var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = "Ra�un kupca:";
    var $_PHPSHOP_ACC_ORDER_INFO = "Informacije o naro�ilu";
    var $_PHPSHOP_ACC_UPD_BILL = "Tukaj lahko posodobite va�e podatke.";
    var $_PHPSHOP_ACC_UPD_SHIP = "Tukaj lahko dodate naslov dostave.";
    var $_PHPSHOP_ACC_ACCOUNT_INFO = "Informacije o ra�unu";
    var $_PHPSHOP_ACC_SHIP_INFO = "Informacije o dostavi";
    var $_PHPSHOP_ACC_NO_ORDERS = "Brez naro�il";
    var $_PHPSHOP_ACC_BILL_DEF = "- Enako kot naslov placnika";
    var $_PHPSHOP_SHIPTO_TEXT = "Lahko dodate naslov dostave k va�em ra�unu. Please think of a suitable nickname or code for the shipping location you select below.";
    var $_PHPSHOP_CONFIG = "Konfiguracija";
    var $_PHPSHOP_USERS = "Uporabniki";
    var $_PHPSHOP_IS_CC_PAYMENT = "pla�ilo s kreditno kartico?";
    
    /*#####################################################
     MODULE SHIPPING
    #######################################################*/
    var $_PHPSHOP_SHIPPING_MOD = "Dostava";
    var $_PHPSHOP_SHIPPING_MENU_LABEL = "Dostavljalec";
    
    var $_PHPSHOP_CARRIER_LIST_MNU = "Dostavljalec";
    var $_PHPSHOP_CARRIER_LIST_LBL = "Dostavljalci";
    var $_PHPSHOP_RATE_LIST_MNU = "Cena dostave";
    var $_PHPSHOP_RATE_LIST_LBL = "Seznam posiljk";
    var $_PHPSHOP_CARRIER_LIST_NAME_LBL = "Ime";
    var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = "Pregled";
    
    var $_PHPSHOP_CARRIER_FORM_MNU = "Nov dostavljalec";
    var $_PHPSHOP_CARRIER_FORM_LBL = "Dostavljalec uredi / dostavi";
    var $_PHPSHOP_RATE_FORM_MNU = "Ustvari ceno dostave";
    var $_PHPSHOP_RATE_FORM_LBL = "Ustvari/dodaj posiljko";
    
    var $_PHPSHOP_RATE_FORM_NAME = "Opis posiljke";
    var $_PHPSHOP_RATE_FORM_CARRIER = "Dostavljalec";
    var $_PHPSHOP_RATE_FORM_COUNTRY = "Drzava<br>Ve�izbor uporabi STRG-tipko ter misko";
    var $_PHPSHOP_RATE_FORM_ZIP_START = "Kraj odposiljanja";
    var $_PHPSHOP_RATE_FORM_ZIP_END = "Kraj dostave";
    var $_PHPSHOP_RATE_FORM_WEIGHT_START = "Najnizja teza";
    var $_PHPSHOP_RATE_FORM_WEIGHT_END = "Najvisja teza";
    var $_PHPSHOP_RATE_FORM_VALUE = "Strosek";
    var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = "Strosek priprave";
    var $_PHPSHOP_RATE_FORM_CURRENCY = "Valuta";
    var $_PHPSHOP_RATE_FORM_VAT_ID = "Davek";
    var $_PHPSHOP_RATE_FORM_LIST_ORDER = "Seznam";
    
    var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = "Dostava";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = "Opis dostave";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = "Teza od ...";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = "... do";
    var $_PHPSHOP_CARRIER_FORM_NAME = "Podjetje";
    var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = "Seznam";
    
    var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = "ERROR: Shipper ID exists.";
    var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = "ERROR: Choose a shipper.";
    var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = "ERROR: At least one shipping rate exists, delete rates prior to shipper";
    var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = "ERROR: Unable to find a shipper with this ID.";
    
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = "ERROR: Choose a shipper.";
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = "ERROR: Unable to find a shipper with this ID.";
    var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = "ERROR: A rate descriptor is requested.";
    var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = "ERROR: The Destination country is invalid. More than one country could be separated with \";\".";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = "ERROR: A lowest weight is requested";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = "ERROR: A highes weight are requested";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = "ERROR: The lowest weight must be smaller than the highes weight";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = "ERROR: A shipping fee requested";
    var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = "ERROR: Coose a currency";
    
    var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = "ERROR: A shipping rate is requested";
    
    var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = "Prosimo izberite";
    var $_PHPSHOP_INFO_MSG_CARRIER = "Dostava";
    var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = "Strosek dostave";
    var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = "Cena";
    var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = "0 (-nic-)";
    /*#####################################################
     END: MODULE SHIPPING
    #######################################################*/
    
    var $_PHPSHOP_PAYMENT_FORM_CC = "Kreditna kartica";
    var $_PHPSHOP_PAYMENT_FORM_USE_PP = "Uporabi procesni center";
    var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = "Ban�ni depozit";
    var $_PHPSHOP_PAYMENT_FORM_AO = "Pla�ilo po povzetju";
    var $_PHPSHOP_CHECKOUT_MSG_2 = "Prosimo izberite naslov dostave!";
    var $_PHPSHOP_CHECKOUT_MSG_3 = "Prosimo izberite na�in dostave!";
    var $_PHPSHOP_CHECKOUT_MSG_4 = "Prosimo izberite na�in pla�ila!";
    var $_PHPSHOP_CHECKOUT_MSG_99 = "Prosimo preglejte podatke in potrdite naro�ilo!";
    
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = "Prosim izberite na�in dostave.";
    var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = "Prosim izberite drug na�in dostave.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = "Prosim izberite na�in pla�ila.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = "Prosimo vnesite stevilko vase kreditne kartice.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = "Prosimo vnesite ime, ki je na kreditni kartici.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = "�tevilka kreditne kartice je neveljavna.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = "Prosim vnesite datum veljavnosti kartice.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = "Please enter the credit card expiration year.";
    var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = "The expiration date is invalid.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = "Please select a ship to address.";
    var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = "Invalid account number.";
    var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = "There\'s nothing in your cart!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = "ERROR: Please select a shipping carrier!";
    var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = "ERROR: The selected a shipping rate was not found!";
    var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = "ERROR: Your shipping address was not found!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = "ERROR: There's no CC data....";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = "ERROR: Credit Card number not found!";
    var $_PHPSHOP_CHECKOUT_ERR_TEST = "Sorry, but the cc number you've used is a testing number!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = "The user_id was not found in the database!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = "You have actually not provided your bank account holder name.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = "You have actually not provided your IBAN.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = "You have actually not provided your bank account number.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = "You have actually not provided your bank sort code.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = "You have actually not provided your bank's name.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = "CheckOut need a valid Step!";
    var $_PHPSHOP_CHECKOUT_MSG_LOG = "Payment information captured for later processing.<BR>";
    
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = "Minimalen znesek naro�ila se ni dosezen.";
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = "Minimalen znesek naro�ila je:";
    var $_PHPSHOP_CHECKOUT_PAYMENT_CC = "Pla�ilo s kreditno kartico";
    var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = "drugi na�ini pla�ila";
    var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = "Prosim izberite na�in pla�ila:";
    
    var $_PHPSHOP_STORE_FORM_MPOV = "Minimum purchase order value for your store";
    var $_PHPSHOP_ACCOUNT_BANK_TITLE = "Bank Account Info";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = "Account Number";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = "Bank sorting code number";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = "Bank Name";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = "IBAN";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = "Account Holder";
    
    var $_PHPSHOP_MODULES = "Modul";
    var $_PHPSHOP_FUNCTIONS = "Funkcije";
    var $_PHPSHOP_SPECIAL_PRODUCTS = "Izdelki v akciji";
    
    var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = "Prosimo vnesite tip, vrsto, ter znamko vasega motorja:";
    var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = "Kup�evo sporo�ilo";
    var $_PHPSHOP_INCLUDING_TAX = "(Vklju�en 20% davek)";
    var $_PHPSHOP_PLEASE_SEL_ITEM = "Please select an item";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = "Item";
    
    // DOWNLOADS
    
    var $_PHPSHOP_DOWNLOADS_TITLE = "Download Area";
    var $_PHPSHOP_DOWNLOADS_START = "Start Download";
    var $_PHPSHOP_DOWNLOADS_INFO = "Please enter the Download-ID you\'ve got in the e-mail and click 'Start Download'.";
    var $_PHPSHOP_DOWNLOADS_ERR_EXP = "Sorry, but your Download has expired";
    var $_PHPSHOP_DOWNLOADS_ERR_MAX = "Sorry, but your maximum number of downloads has been reached";
    var $_PHPSHOP_DOWNLOADS_ERR_INV = "Invalid Download-ID!";
    var $_PHPSHOP_DOWNLOADS_ERR_SEND = "Could not send a message to ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG = "Message sent to ";
    var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = "Download-Info";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = "the file(s) you ordered are ready for your download";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = "Please enter the following Download-ID(s) in our Downloads Area: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = "the maximum number of downloads for each file is: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = "Download until \$expire days after the first download";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = "Questions? Problems?";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = "Download-Info by "; // e.g. Download-Info by "Storename"
    var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = "downloadable product?"; 
    
    var $_PHPSHOP_PAYPAL_THANKYOU = "Thanks for your payment. 
        The transaction was successful. You will get a confirmation e-mail for the transaction by PayPal. 
        You can now continue or log in at <a href=http://www.paypal.com>www.paypal.com</a> to see the transaction details.";
    var $_PHPSHOP_PAYPAL_ERROR = "An error occured while processing your transaction. The status of your order could not be updated.";
    
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = "Hvala, ker ste se odlo�ili za nakup v nasi spletni poslovalnici.  Vasi podatki so naslednji.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = "Hvala za nakup! Se priporo�amo.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = "Vprasanja? Problemi?";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = "Naslednje naro�ilo je bilo sprejeto.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = "Preglejte naro�ilo tako, da kliknete na slede�o povezavo.";
    
    var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = "Negativna koli�ina ni dovoljena.";
    var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = "Prosim vnesite veljavno koli�ino za ta izdelek.";
    
    var $_PHPSHOP_CART_STOCK_1 = "The selected quantity exceeds available stock. ";
    var $_PHPSHOP_CART_STOCK_2 = "Trenutno imamo \$na_zalogi. ";
    var $_PHPSHOP_CART_STOCK_3 = "Kliknite tukaj, da vas uvrstimo na �akalno listo.";
    var $_PHPSHOP_CART_SELECT_ITEM = "Please select a special item from the details page!";
    
    var $_PHPSHOP_REGISTRATION_FORM_NONE = "prazno";
    var $_PHPSHOP_REGISTRATION_FORM_MR = "G.";
    var $_PHPSHOP_REGISTRATION_FORM_MRS = "Gos.";
    var $_PHPSHOP_REGISTRATION_FORM_DR = "Dr.";
    var $_PHPSHOP_REGISTRATION_FORM_PROF = "Mag.";
    var $_PHPSHOP_DEFAULT = "Prednastavljeno";
    
  /*#####################################################
    MODULE AFFILIATE
  #######################################################*/
    var $_PHPSHOP_AFFILIATE_MOD   = "Administracija clanstev";
    
    // Affiliate List
    var $_PHPSHOP_AFFILIATE_LIST_MNU		= "Clani";
    var $_PHPSHOP_AFFILIATE_LIST_LBL		= "Seznam clanov";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME	= "Ime clanov";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = "Aktivni";
    var $_PHPSHOP_AFFILIATE_LIST_RATE		= "Odnos";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = "Skupaj ta mesec";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION ="Mesecna narocila";
    var $_PHPSHOP_AFFILIATE_LIST_ORDERS = "Preglej naro�ila";
    
    // Affiliate Email
    var $_PHPSHOP_AFFILIATE_EMAIL_MNU		= "Email Affiliates";
    var $_PHPSHOP_AFFILIATE_EMAIL_LBL		= "Email Affiliates";
    var $_PHPSHOP_AFFILIATE_EMAIL_WHO	= "Za kkoga E-posta(* = ALL)";
    var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT		= "Vas e-naslov";
    var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = "Zadeva";
    var $_PHPSHOP_AFFILIATE_EMAIL_STATS	 = "Vklju�uje trenutno statistiko";
    
    // Affiliate Form
    var $_PHPSHOP_AFFILIATE_FORM_RATE		= "Commission Rate (percent)";
    var $_PHPSHOP_AFFILIATE_FORM_ACTIVE		= "Active?";
    
    var $_PHPSHOP_DELIVERY_TIME = "Navadno odposlano na";
    var $_PHPSHOP_DELIVERY_INFORMATION = "Informacije o dostavi";
    var $_PHPSHOP_MORE_CATEGORIES = "ve� kategorij";
    var $_PHPSHOP_AVAILABILITY = "na razpolago";
    var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = "Ta izdelek trenutno ni na voljo.";
    var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = "Na voljo bo zopet: ";
    
    var $_PHPSHOP_STATISTIC_SUMMARY = "Pregled";
    var $_PHPSHOP_STATISTIC_STATISTICS = "Statistika";
    var $_PHPSHOP_STATISTIC_CUSTOMERS = "Kupci";
    var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = "aktivni izdelki";
    var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = "inaktivni izdelki";
    var $_PHPSHOP_STATISTIC_SUM = "Skupaj";
    var $_PHPSHOP_STATISTIC_NEW_ORDERS = "Nova naro�ila";
    var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = "Nova stranka";

    
	//Waiting list : file /administrator/components/com_phpshop/html/shop.waiting_list.php
	var $_PHPSHOP_WAITING_LIST_MESSAGE = "Please enter your e-mail address below to be notified when this product comes back in stock. 
                                        We will not share, rent, sell or use this e-mail address for any other purpose other than to 
                                        tell you when the product is back in stock.<br /><br />Thank you!";
	var $_PHPSHOP_WAITING_LIST_THANKS = "Thanks for waiting! <br />We will let you know as soon as we get our inventory.";
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = "Notify Me!";
	
	//Checkout : file /administrator/components/com_phpshop/html/checkout.thankyou.php
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = "Print view";
  
  /**************************Admin.show_cfg.php in apparition order ;-)**************************************/
	
	/* PAGE 1 */
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = "Please choose EITHER Authorize.net OR CyberCash";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = " Configuration file status:";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = "is writeable";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = "is unwriteable";
	
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = "Global";
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = "Path & URL";
	var $_PHPSHOP_ADMIN_CFG_SITE = "Site";
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = "Shipping";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = "Checkout";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = "Downloads";
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = "Payments";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = "Use only as catalogue";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = "If you check this, you disable all cart functionalities.";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = "Show Prices";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = "Show Prices including tax?";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = "Sets the flag whether the shoppers sees prices including tax or excluding tax.";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = "Check to show prices. If using catalogue functionality, some don't want prices to appear on pages.";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = "Virtual Tax";
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
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = "The URL to your site. Usually identical to your Mambo URL (with trailing slash at the end!)";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = "SECUREURL";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = "The secure URL to your site. (https - with trailing slash at the end!)";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = "COMPONENTURL";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = "The URL to the mambo-phpShop component. (with trailing slash at the end!)";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = "IMAGEURL";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = "The URL to the mambo-phpShop component image directory.(with trailing slash at the end!)";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = "ADMINPATH";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = "The path to your mambo-phpShop component directory.";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = "CLASSPATH";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = "The path to your phpShop classes directory.";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = "PAGEPATH";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = "The path to your phpShop html directory.";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = "IMAGEPATH";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = "The path to your phpShop shop_image directory.";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = "HOMEPAGE";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = "This is the page which will be loaded by default.";	
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = "ERRORPAGE";
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = "This is the default page for displaying error messages.";	
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = "DEBUGPAGE";
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = "This is the default page for displaying debug messages.";
	var $_PHPSHOP_ADMIN_CFG_DEBUG = "DEBUG ?";
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = "DEBUG?  	   	Turns on the debug output. This causes the DEBUGPAGE to be displayed at the bottom of each page. Very helpful during shop development since it shows the carts contents, form field values, etc.";


/* PAGE 3 */

	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = "FLYPAGE";
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = "This is the default page for displaying product details.";
  var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = "Category Template";
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = "This defines the default category template for displaying products in a category.<br />
                                                                                                      You can create new templates by customizing existing template files <br />
                                                                                                      (which reside in the directory <strong>COMPONENTPATH/html/templates/</strong> and begin with browse_)";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = "Default number of products in a row";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = "This defines the number of products in a row. <br />
                                                                                                      Example: If you set it to 4, the category template will display 4 products per row";
  
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = "\"no image\" image";
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = "This image will be shown when no product image is available.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = "SEARCH ROWS";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = "Determines the number of rows per page when search results are displayed in a list.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = "SEARCH COLOR 1";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = "Specifies the color of the odd numbered rows in a result list.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = "SEARCH COLOR 2";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = "Specifies the color of the even numbered rows in a result list.";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = "MAXIMUM ROWS";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = "Sets the number of rows to show in the order list select box.";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = "Show footer \"powered by mambo-phpShop\" ?";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = "Displays a powered-by-mambo-phpShop footer image.";
	
	
	/* PAGE 4 */
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = "Choose your store's shipping method";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = "Standard Shipping module with indiviual configured carriers and rates. <strong>RECOMMENDED !</strong>";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = "  	Zone Shipping Module Country Version 1.0<br />
                                                                                                            For more information on this module please visit <a href=\"http://ZephWare.com\">http://ZephWare.com</a><br />
                                                                                                            for details or contact <a href=\"mailto:zephware@devcompany.com\">ZephWare.com</a><br /> Check this to enable the zone shipping module";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = "<a href=\"http://www.ups.com\" target=\"_blank\">UPS Online&reg; Tools</a> Shipping calculation";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = "UPS access code";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = "Your UPS access code";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = "UPS user id";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = "The user ID you got from UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = "UPS password";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = "The password for your UPS account";
	  
  var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = "InterShipper Module. Check only if you have an <a href=\"http://www.intershipper.com\" target=\"_blank\">Intershipper.com</a> account";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = "Disable Shipping method selection. Choose if your customers buy downloadable goods which don't have to be shipped.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = "InterShipper Password";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = "Your password for your intershipper account.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = "InterShipper email";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = "Your email address for your intershipper account.";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = "ENCODE KEY";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = "Used to encrypt data stored in database with this key. This means that this file should be protected from viewing at all times.";
	
	
	/* PAGE 5 */
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = "Enable the Checkout Bar";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = "Check this, if you want the 'checkout-bar' to be displayed to the customer during checkout process ( 1 - 2 - 3 - 4 with graphics).";
	
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = "Choose your store's checkout process";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = "<strong>Standard :</strong><br/>
               1. Shipping address request<br />
              2. Shipping method request<br />
              3. Payment method request<br />
              4. Complete Order";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = "<strong>Process 2:</strong><br/>
               1. Shipping address request<br />
              2. Payment method request<br />
              3. Complete Order";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = "<strong>Process 3:</strong><br/>
               1. Shipping method request<br />
              2. Payment method request<br />
              3. Complete Order";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = "<strong>Process 4:</strong><br/>
               1. Payment method request<br />
              2. Complete Order";
	
	
	
	/* PAGE 6 */
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = "Enable Downloads";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = "Check to enable the download capability. Only If you want sell downloadable goods.";
	
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = "Order Status which enables download";
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = "Select the order status at which the customer is notified about the download via e-mail.";
	
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = "Order Status which disables downloads";
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = "Sets the order status at which the download is disabled for the customer.";
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = "DOWNLOADROOT";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = "The physical path to the files for the custumer download. (trailing slash at the end!)<br>
        <span class=\"message\">For your own shop's security: If you can, please use a directory ANYWHERE OUTSIDE OF THE WEBROOT</span>";
	
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = "Download Maximum";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = "Sets the number of downloads which can be made with one Download-ID, (for one order)";
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = "Download Expire";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = "Sets the time range <strong>in seconds</strong> in which the download is enabled for the customer. 
  This range begins with the first download! When the time range has expired, the download-ID is disabled.<br />Note : 86400s=24h.";
	
	
	
	
	/* PAGE 7 */
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = "Enable IPN Payment via PayPal?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = "Check to let your customers use the PayPal payment system.";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = "PayPal payment email:";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = "Your business email address for PayPal payments. Also used as receiver_email.";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = "Order Status for successful transactions";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = "Select the order status to which the actual order is set, if the PayPal IPN was successful. If using download selling options: 
  select the status which enables the download (then the customer is instantly notified about the download via e-mail).";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = "Order Status for failed transactions";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = "Select an order status for failed PayPal transactions.";
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = "Enable Payments via PayMate?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = "Check to let your customers use the Australian PayMate payment system.";
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = "PayMate username:";
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = "Your user account for PayMate.";
	
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = "Enable Authorize.net payment?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = "Check to use Authorize.net with phpShop.";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = "Test mode ?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = "Select 'Yes' while testing. Select 'No' for enabling live transactions.";
	var $_PHPSHOP_ADMIN_CFG_YES = "Yes";
	var $_PHPSHOP_ADMIN_CFG_NO = "No";
	
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = "Authorize.net Login ID";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = "This is your Authorize.Net Login ID";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = "Authorize.net Transaction Key";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = "This is your Authorize.net Transaction Key";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = "Authentication Type";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = "This is the Authorize.Net authentication type.";
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = "Enable CyberCash?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = "Check to use CyberCash with phpShop.";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = "CyberCash MERCHANT";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = "CC_MERCHANT is the CyberCash Merchant ID";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = "CyberCash Merchant Key";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = "CyberCash Merchant Key is the Merchant Provided by CyberCash";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = "CyberCash PAYMENT URL";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = "CyberCash PAYMENT URL is the URL provided by Cybercash for secure payment";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = "CyberCash AUTH TYPE";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = "CyberCash AUTH TYPE is the Cybercash authentication type provided by Cybercase";
	

    /** Advanced Search feature ***/
    var $_PHPSHOP_ADVANCED_SEARCH  ="Advanced Search";
    var $_PHPSHOP_SEARCH_ALL_CATEGORIES = "Search All Categories";
    var $_PHPSHOP_SEARCH_ALL_PRODINFO = "Search all product info";
    var $_PHPSHOP_SEARCH_PRODNAME = "Product name only";
    var $_PHPSHOP_SEARCH_MANU_VENDOR = "Manufacturer/Vendor only";
    var $_PHPSHOP_SEARCH_DESCRIPTION = "Product description only";
    var $_PHPSHOP_SEARCH_AND = "and";
    var $_PHPSHOP_SEARCH_NOT = "not";
    var $_PHPSHOP_SEARCH_TEXT1 = "The first drop-down-list allows you to select a category to limit your search to. 
        The second drop-down-list allows you to limit your search to a particular piece of product information (e.g. Name). 
        Once you have selected these (or left the default ALL), enter the keyword to search for. ";
    var $_PHPSHOP_SEARCH_TEXT2 = " You can further refine your search by adding a second keyword and selecting the AND or NOT operator. 
        Selecting AND means both words must be present for the product to be displayed. 
        Selecting NOT means the product will be displayed only if the first keyword is present 
        and the second is not.";
    var $_PHPSHOP_ORDERBY = "Order by";
    
    /*** Review feature ***/
    var $_PHPSHOP_CUSTOMER_RATING  = "Average customer rating";
    var $_PHPSHOP_TOTAL_VOTES = "Total votes";
    var $_PHPSHOP_CAST_VOTE = "Please cast your vote";
    var $_PHPSHOP_RATE_BUTTON = "Rate";
    var $_PHPSHOP_RATE_NOM = "Rating";
    var $_PHPSHOP_REVIEWS = "Customer Reviews";
    var $_PHPSHOP_NO_REVIEWS = "There are yet no reviews for this product.";
    var $_PHPSHOP_WRITE_FIRST_REVIEW = "Be the first to write a review...";
    var $_PHPSHOP_REVIEW_LOGIN = "Please log in to write a review.";
    var $_PHPSHOP_REVIEW_ERR_RATE = "Please rate the product to complete your review!";
    var $_PHPSHOP_REVIEW_ERR_COMMENT1 = "Please write down some more words for your review. Mininum characters allowed: 100";
    var $_PHPSHOP_REVIEW_ERR_COMMENT2 = "Please shorten your review. Maximum characters allowed: 2000";
    var $_PHPSHOP_WRITE_REVIEW = "Write a review for this product!";
    var $_PHPSHOP_REVIEW_RATE = "First: Rate the product. Please select a rating between 0 (poorest) and 5 stars (best).";
    var $_PHPSHOP_REVIEW_COMMENT = "Now please write a (short) review....(min. 100, max. 2000 characters) ";
    var $_PHPSHOP_REVIEW_COUNT = "Characters written: ";
    var $_PHPSHOP_REVIEW_SUBMIT = "Submit Review";
    var $_PHPSHOP_REVIEW_ALREADYDONE = "You already have written a review for this product. Thank you.";
    var $_PHPSHOP_REVIEW_THANKYOU = "Thanks for your review.";
    var $_PHPSHOP_COMMENT= "Comment";
    
    var $_PHPSHOP_CREDITCARD_FORM_LBL = "Add/Edit Credit Card Types";
    var $_PHPSHOP_CREDITCARD_NAME = "Credit Card Name";
    var $_PHPSHOP_CREDITCARD_CODE = "Credit Card - Short Code";
    var $_PHPSHOP_CREDITCARD_TYPE = "Credit Card Type";
    
    var $_PHPSHOP_CREDITCARD_LIST_LBL = "Credit Card List";
    var $_PHPSHOP_UDATE_ADDRESS = "Update Address";
    var $_PHPSHOP_CONTINUE_SHOPPING = "Continue Shopping";
    
    var $_PHPSHOP_THANKYOU_SUCCESS = "Your order has been successfully placed!";
    var $_PHPSHOP_ORDER_LINK = "Follow this link to view the Order Details.";
    
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
        <pre>Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00];AndSoOn,..,..</pre>
        <h4>Inline price adjustments for using the Advanced Attributes modification:</h4>
        <pre>
        &#43; == Add this amount to the configured price.<br />
        &#45; == Subtract this amount from the configured price.<br />
        &#61; == Set the product's price to this amount.
      </pre>";
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = "Custom Attribute List";
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = "<h4>Examples for the Custom attribute List Format:</h4>
        <pre>Name;Extras;</strong>...</pre>";
        
    var $_PHPSHOP_MULTISELECT = "Multiselect: use CTRL-Key and Mouse";
        
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
