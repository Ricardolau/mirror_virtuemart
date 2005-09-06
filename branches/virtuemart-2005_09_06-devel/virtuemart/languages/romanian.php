<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: romanian.php,v 1.12 2005/06/22 19:50:45 soeren_nb Exp $
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
*/
class phpShopLanguage extends mosAbstractLanguage {

    /*####################
    GENERAL DEFINITIONS
    ####################*/
    
    var $_PHPSHOP_MENU = "Meniu";
    var $_PHPSHOP_CATEGORY = "Categorie";
    var $_PHPSHOP_CATEGORIES = "Categorii";
    var $_PHPSHOP_SELECT_CATEGORY = "Selecteaza o Categorie:";
    var $_PHPSHOP_ADMIN = "Administrare";
    var $_PHPSHOP_PRODUCT = "Produs";
    var $_PHPSHOP_LIST = "Lista";
    var $_PHPSHOP_ALL = "Toate";
    var $_PHPSHOP_LIST_ALL_PRODUCTS = "Afiseaza toate produsele";
    var $_PHPSHOP_VIEW = "vizualizeaza";
    var $_PHPSHOP_SHOW = "arata";
    var $_PHPSHOP_ADD = "adauga";
    var $_PHPSHOP_UPDATE = "updateaza";
    var $_PHPSHOP_DELETE = "sterge";
    var $_PHPSHOP_SELECT = "selecteaz";
    var $_PHPSHOP_SUBMIT = "Submit";
    var $_PHPSHOP_RANDOM = "Produse aleatorii";
    var $_PHPSHOP_LATEST = "Cele mai noi produse";
    
    /*#####################
    MODULE ACCOUNT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_HOME_TITLE = "Home";
    var $_PHPSHOP_CART_TITLE = "Cos";
    var $_PHPSHOP_CHECKOUT_TITLE = "Iesire";
    var $_PHPSHOP_LOGIN_TITLE = "Login";
    var $_PHPSHOP_LOGOUT_TITLE = "Logout";
    var $_PHPSHOP_BROWSE_TITLE = "Cauta";
    var $_PHPSHOP_SEARCH_TITLE = "Cauta";
    var $_PHPSHOP_ACCOUNT_TITLE = "Intretinere cont";
    var $_PHPSHOP_NAVIGATION_TITLE = "Navigatie";
    var $_PHPSHOP_DEPARTMENT_TITLE = "Departament";
    var $_PHPSHOP_INFO = "Informatii";
    
    var $_PHPSHOP_BROWSE_LBL = "Browse";
    var $_PHPSHOP_PRODUCTS_LBL = "Produse";
    var $_PHPSHOP_PRODUCT_LBL = "Produs";
    var $_PHPSHOP_SEARCH_LBL = "Cauta";
    var $_PHPSHOP_FLYPAGE_LBL = "Detalii produs";
    var $_PHPSHOP_PRODUCT_SEARCH_LBL = "Cautare produs";
    
    var $_PHPSHOP_PRODUCT_NAME_TITLE = "Nume produs";
    var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = "Categorie produs";
    var $_PHPSHOP_PRODUCT_DESC_TITLE = "Descriere";
    
    var $_PHPSHOP_CART_SHOW = "Afiseaza cosul";
    var $_PHPSHOP_CART_ADD_TO = "Adauga in cos";
    var $_PHPSHOP_CART_NAME = "Nume";
    var $_PHPSHOP_CART_SKU = "SKU";
    var $_PHPSHOP_CART_PRICE = "Pret";
    var $_PHPSHOP_CART_QUANTITY = "Cantitate";
    var $_PHPSHOP_CART_SUBTOTAL = "Subtotal";
    
    # Some messages
    var $_PHPSHOP_ADD_SHIPTO_1 = "Adauga nou";
    var $_PHPSHOP_ADD_SHIPTO_2 = "Adresa destinatiei";
    var $_PHPSHOP_NO_SEARCH_RESULT = "Nu au fost gasite produse.<br />";
    var $_PHPSHOP_PRICE_LABEL = "Pret: ";
    var $_PHPSHOP_ORDER_BUTTON_LABEL = "Adauga in Cos";
    var $_PHPSHOP_NO_CUSTOMER = "Nu sunteti client inregistrat. Va rugam completati cu datele de achitare.";
    var $_PHPSHOP_DELETE_MSG = "Sunteti sigur ca vreti sa renuntati la acest produs?";
    var $_PHPSHOP_THANKYOU = "Va multumim pentru comanda.";
    var $_PHPSHOP_NOT_SHIPPED = "Nu a fost inca livrat";
    var $_PHPSHOP_EMAIL_SENDTO = "Un email de confirmare a fost trimis la";
    var $_PHPSHOP_NO_USER_TO_SELECT = "Ne pare rau, ne exista nici un utilizator pe care sa-l adaugati la lista SHOP-ului";
    
    // Error messages
    
    var $_PHPSHOP_ERROR = "EROARE";
    var $_PHPSHOP_MOD_NOT_REG = "Modul neinregistrat.";
    var $_PHPSHOP_MOD_ISNO_REG = "nu este un modul valid.";
    var $_PHPSHOP_MOD_NO_AUTH = "Nu aveti permisiunea sa accesati acest modul.";
    var $_PHPSHOP_PAGE_404_1 = "Pagina nu exista";
    var $_PHPSHOP_PAGE_404_2 = "Fisierul nu exista.";
    var $_PHPSHOP_PAGE_403 = "Drepturi de acces insuficiente";
    var $_PHPSHOP_FUNC_NO_EXEC = "Nu aveti dreptul de executie asupra ";
    var $_PHPSHOP_FUNC_NOT_REG = "Functie neinregistrata";
    var $_PHPSHOP_FUNC_ISNO_REG = " nu este o functie valida.";
    
    /*#####################
    MODULE ADMIN
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADMIN_MOD = "Admin";
    
    
    // User List
    var $_PHPSHOP_USER_LIST_MNU = "Listeaza Utilizatorii";
    var $_PHPSHOP_USER_LIST_LBL = "Lista utilizatorilor";
    var $_PHPSHOP_USER_LIST_USERNAME = "Username";
    var $_PHPSHOP_USER_LIST_FULL_NAME = "Nume complet";
    var $_PHPSHOP_USER_LIST_GROUP = "Grup";
    
    // User Form
    var $_PHPSHOP_USER_FORM_MNU = "Adauga Utilizator";
    var $_PHPSHOP_USER_FORM_LBL = "Adauga/Modifica Informatii despre utilizator";
    var $_PHPSHOP_USER_FORM_BILLTO_LBL = "Detalii plata";
    var $_PHPSHOP_USER_FORM_SHIPTO_LBL = "Adresa de livrare";
    var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = "Adauga Adresa";
    var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = "Porecla adresa";
    var $_PHPSHOP_USER_FORM_FIRST_NAME = "Nume";
    var $_PHPSHOP_USER_FORM_LAST_NAME = "Prenume";
    var $_PHPSHOP_USER_FORM_MIDDLE_NAME = "Numele tatalui";
    var $_PHPSHOP_USER_FORM_TITLE = "Titlul";
    var $_PHPSHOP_USER_FORM_USERNAME = "Username";
    var $_PHPSHOP_USER_FORM_PASSWORD_1 = "Parola";
    var $_PHPSHOP_USER_FORM_PASSWORD_2 = "Confirma Parola";
    var $_PHPSHOP_USER_FORM_PERMS = "Permisii";
    var $_PHPSHOP_USER_FORM_COMPANY_NAME = "Numele firmei";
    var $_PHPSHOP_USER_FORM_ADDRESS_1 = "Addresa 1";
    var $_PHPSHOP_USER_FORM_ADDRESS_2 = "Addresa 2";
    var $_PHPSHOP_USER_FORM_CITY = "Oras";
    var $_PHPSHOP_USER_FORM_STATE = "Judet";
    var $_PHPSHOP_USER_FORM_ZIP = "Cod Postal";
    var $_PHPSHOP_USER_FORM_COUNTRY = "Tara";
    var $_PHPSHOP_USER_FORM_PHONE = "Telefon";
    var $_PHPSHOP_USER_FORM_FAX = "Fax";
    var $_PHPSHOP_USER_FORM_EMAIL = "Email";
    
    // Module List
    var $_PHPSHOP_MODULE_LIST_MNU = "Listeaza Modulele";
    var $_PHPSHOP_MODULE_LIST_LBL = "Lista Modulelor";
    var $_PHPSHOP_MODULE_LIST_NAME = "Nume Modul";
    var $_PHPSHOP_MODULE_LIST_PERMS = "Permisiuni Modul";
    var $_PHPSHOP_MODULE_LIST_FUNCTIONS = "Functii";
    var $_PHPSHOP_MODULE_LIST_ORDER = "Ordinea afisarii";
    
    // Module Form
    var $_PHPSHOP_MODULE_FORM_MNU = "Adauga Modul";
    var $_PHPSHOP_MODULE_FORM_LBL = "Informatie Modul";
    var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = "Nume modul (pentru Topmenu)";
    var $_PHPSHOP_MODULE_FORM_NAME = "Nume Modul";
    var $_PHPSHOP_MODULE_FORM_PERMS = "Permisiuni modul";
    var $_PHPSHOP_MODULE_FORM_HEADER = "Header Modul";
    var $_PHPSHOP_MODULE_FORM_FOOTER = "Footer modul";
    var $_PHPSHOP_MODULE_FORM_MENU = "Afiseaza modul in meniul Administrativ?";
    var $_PHPSHOP_MODULE_FORM_ORDER = "Ordinea afisarii";
    var $_PHPSHOP_MODULE_FORM_DESCRIPTION = "Descriere modul";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = "Cod Limba";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = "Fisier Limba";
    
    // Function List
    var $_PHPSHOP_FUNCTION_LIST_MNU = "Listeaza Functiile";
    var $_PHPSHOP_FUNCTION_LIST_LBL = "Lista Functiilor";
    var $_PHPSHOP_FUNCTION_LIST_NAME = "Numele Functiilor";
    var $_PHPSHOP_FUNCTION_LIST_CLASS = "Numele Clasei";
    var $_PHPSHOP_FUNCTION_LIST_METHOD = "Metoda clasei";
    var $_PHPSHOP_FUNCTION_LIST_PERMS = "Permisiuni";
    
    // Module Form
    var $_PHPSHOP_FUNCTION_FORM_MNU = "Adauga Functie";
    var $_PHPSHOP_FUNCTION_FORM_LBL = "Informatii Functie";
    var $_PHPSHOP_FUNCTION_FORM_NAME = "Nume Funtie";
    var $_PHPSHOP_FUNCTION_FORM_CLASS = "Nume Clasa";
    var $_PHPSHOP_FUNCTION_FORM_METHOD = "Metoda Clasa";
    var $_PHPSHOP_FUNCTION_FORM_PERMS = "Permisiuni Functie";
    var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = "Descriere Functie";
    
    // Currency form and list
    var $_PHPSHOP_CURRENCY_LIST_MNU = "Afiseaza Monezi";
    var $_PHPSHOP_CURRENCY_LIST_LBL = "Lista Monezilor";
    var $_PHPSHOP_CURRENCY_LIST_ADD = "Adauga Moneda";
    var $_PHPSHOP_CURRENCY_LIST_NAME = "Numele Monedei";
    var $_PHPSHOP_CURRENCY_LIST_CODE = "Codul Monedei";
    
    // Country form and list
    var $_PHPSHOP_COUNTRY_LIST_MNU = "Afiseaza Tarile";
    var $_PHPSHOP_COUNTRY_LIST_LBL = "Lista Tarilor";
    var $_PHPSHOP_COUNTRY_LIST_ADD = "Adauga tara";
    var $_PHPSHOP_COUNTRY_LIST_NAME = "Nume tara";
    var $_PHPSHOP_COUNTRY_LIST_3_CODE = "Cod tara (3)";
    var $_PHPSHOP_COUNTRY_LIST_2_CODE = "Cod tara (2)";
    
    /*#####################
    MODULE CHECKOUT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADDRESS = "Addresa";
    var $_PHPSHOP_CONTINUE = "Continua";
    
    # Some messages
    var $_PHPSHOP_EMPTY_CART = "Cosul DVS. este gol";
    
    
    /*#####################
    MODULE ISShipping
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ISSHIPPING_MOD = "InterShipper";
    
    
    // Shipping Ping
    var $_PHPSHOP_ISSHIP_PING_MNU = "Ping Serverul InterShipper";
    var $_PHPSHOP_ISSHIP_PING_LBL = "InterShipper-Server Ping ";
    var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = "InterShipper Ping a esuat";
    var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = "InterShipper Ping a avut succes";
    var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = "Carrier";
    var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = "Raspuns<br />Time";
    var $_PHPSHOP_ISSHIP_PING_TIME_LBL = "sec.";
    
    // Shipping List
    var $_PHPSHOP_ISSHIP_LIST_MNU = "Afiseaza metodele de expediere";
    var $_PHPSHOP_ISSHIP_LIST_LBL = "Metode de expediere active";
    var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = "Metode de expediere";
    var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = "Active";
    var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = "Taxa manipulare";
    var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = "Lead Time";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = "rata fixa";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = "procent";
    var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = "zile";
    var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = "Incarcatura grea";
    
    // Dynamic Shipping Form
    var $_PHPSHOP_ISSHIP_FORM_MNU = "Configureaza metodele de expediere";
    var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = "Adauga metode de expediere";
    var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = "Configureaza metode de expediere";
    var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = "Refresh";
    var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = "Metoda de expediere";
    var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = "Activeaza";
    var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = "Taxa manipulare";
    var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = "Lead Time";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = "rata fixa";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = "procent";
    var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = "zile";
    var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = "Incarcatura grea";
    
    
    
    /*#####################
    MODULE ORDER
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_ORDER_MOD = "Comenzi";
    
    // Some menu options 
    var $_PHPSHOP_ORDER_CONFIRM_MNU = "Confirma comanda";
    var $_PHPSHOP_ORDER_CANCEL_MNU = "Anuleaza comanda";
    var $_PHPSHOP_ORDER_PRINT_MNU = "Printeaza comanda";
    var $_PHPSHOP_ORDER_DELETE_MNU = "Sterge comanda";
    
    // Order List
    var $_PHPSHOP_ORDER_LIST_MNU = "Listeaza comenzile";
    var $_PHPSHOP_ORDER_LIST_LBL = "Lista comenzilor";
    var $_PHPSHOP_ORDER_LIST_ID = "Numarul comenzii";
    var $_PHPSHOP_ORDER_LIST_CDATE = "Data comenzii";
    var $_PHPSHOP_ORDER_LIST_MDATE = "Data ultimei modificari";
    var $_PHPSHOP_ORDER_LIST_status = "status";
    var $_PHPSHOP_ORDER_LIST_TOTAL = "SubTotal";
    var $_PHPSHOP_ORDER_ITEM = "Produse comandate";
    
    // Order print
    var $_PHPSHOP_ORDER_PRINT_PO_LBL = "Onoreaza comanda";
    var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = "Numarul comenzii";
    var $_PHPSHOP_ORDER_PRINT_PO_DATE = "Data comenzii";
    var $_PHPSHOP_ORDER_PRINT_PO_status = "statusul comenzii";
    var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = "Informatii client";
    var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = "Informatii plata";
    var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = "Informatii expediere";
    var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = "Factureaza catre";
    var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = "Expedierea la";
    var $_PHPSHOP_ORDER_PRINT_NAME = "Nume";
    var $_PHPSHOP_ORDER_PRINT_COMPANY = "Firma";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = "Adresa 1";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = "Adresa 2";
    var $_PHPSHOP_ORDER_PRINT_CITY = "Oras";
    var $_PHPSHOP_ORDER_PRINT_STATE = "Judet";
    var $_PHPSHOP_ORDER_PRINT_ZIP = "Cod Postal";
    var $_PHPSHOP_ORDER_PRINT_COUNTRY = "Tara";
    var $_PHPSHOP_ORDER_PRINT_PHONE = "Telefon";
    var $_PHPSHOP_ORDER_PRINT_FAX = "Fax";
    var $_PHPSHOP_ORDER_PRINT_EMAIL = "Email";
    var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = "Produse comandate";
    var $_PHPSHOP_ORDER_PRINT_QUANTITY = "Cantitatea";
    var $_PHPSHOP_ORDER_PRINT_QTY = "Qty";
    var $_PHPSHOP_ORDER_PRINT_SKU = "SKU";
    var $_PHPSHOP_ORDER_PRINT_PRICE = "Pret";
    var $_PHPSHOP_ORDER_PRINT_TOTAL = "Total";
    var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = "SubTotal";
    var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = "Total cu TVA ";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING = "Taxa de expediere si manipulare";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = "Taxa expediere";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = "Metoda de plata";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = "Nume cont utilizator";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = "Numar cont utilizator";
    var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = "Data expirarii";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = "Jurnal plati";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = "Informatii expediere";
    var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = "Payment Information";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = "Carrier";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = "Metoda de expediere";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = "Data expediere";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = "Pret expediere";
    
    var $_PHPSHOP_ORDER_status_LIST_MNU = "Listeaza tipuri de status pentru comenzi";
    var $_PHPSHOP_ORDER_status_FORM_MNU = "Adauga tipuri de status pentru comenzi";
    
    var $_PHPSHOP_ORDER_status_LIST_CODE = "Cod status comanda";
    var $_PHPSHOP_ORDER_status_LIST_NAME = "Nume status comanda";
    
    var $_PHPSHOP_ORDER_status_FORM_LBL = "status comanda";
    var $_PHPSHOP_ORDER_status_FORM_CODE = "Cod status comanda";
    var $_PHPSHOP_ORDER_status_FORM_NAME = "Nume status comanda";
    var $_PHPSHOP_ORDER_status_FORM_LIST_ORDER = "Listeaz comanda";
    
    
    /*#####################
    MODULE PRODUCT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_PRODUCT_MOD = "Produse";
    
    var $_PHPSHOP_CURRENT_PRODUCT = "Produsul actual";
    var $_PHPSHOP_CURRENT_ITEM = "Produs actual";
    
    // Product Inventory
    var $_PHPSHOP_PRODUCT_INVENTORY_LBL = "Inventar Produse";
    var $_PHPSHOP_PRODUCT_INVENTORY_MNU = "Afiseaza Inventarul";
    var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = "Pret";
    var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = "Numar";
    var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = "Greutate";
    // Product List
    var $_PHPSHOP_PRODUCT_LIST_MNU = "Listeaza Produsele";
    var $_PHPSHOP_PRODUCT_LIST_LBL = "Lista produselor";
    var $_PHPSHOP_PRODUCT_LIST_NAME = "Numele produselor";
    var $_PHPSHOP_PRODUCT_LIST_SKU = "SKU";
    var $_PHPSHOP_PRODUCT_LIST_PUBLISH = "Publica";
    
    // Product Form
    var $_PHPSHOP_PRODUCT_FORM_MNU = "Adauga produs";
    var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = "Editeaza acest produs";
    var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = "Previzualizeaza datele despre produs";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = "Adauga produs";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = "Adauga alt produs";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = "Produs nou";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = "Updateaza Produs";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = "Informatii produs";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_status_LBL = "Status Produs";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = "Dimensiuni si greutate produs";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = "Imagine produs";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = "Produs nou";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = "Updateaza Produs";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = "Informatii Produs";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_status_LBL = "Status produs";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = "Dimensiuni si greutate produs";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = "Imagine produs";
    var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = "Inapoi la produsul principal";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = "Pentru a updata imaginea curenta, introduceti calea catre noua imagine.";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = "Tastati \"none\" pentru a
sterge imaginea curenta";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = "Produse";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = "Atribute produs";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = "Sunteti sigur ca vreti
sa stergeti acest produs?";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = "Sunteti sigur ca vreti
sa stergeti acest produs?";
    var $_PHPSHOP_PRODUCT_FORM_VENDOR = "Distribuitor";
    var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = "Producator";
    var $_PHPSHOP_PRODUCT_FORM_SKU = "SKU";
    var $_PHPSHOP_PRODUCT_FORM_NAME = "Nume";
    var $_PHPSHOP_PRODUCT_FORM_URL = "URL";
    var $_PHPSHOP_PRODUCT_FORM_CATEGORY = "Categorie";
    var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = "Pret Retail";
    var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = "Product Price (Net)";
    var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = "Descriere";
    var $_PHPSHOP_PRODUCT_FORM_S_DESC = "Descriere scurta";
    var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = "Pe stoc";
    var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = "La comanda";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = "Data cand va fi disponibil";
    var $_PHPSHOP_PRODUCT_FORM_SPECIAL = "La comanda speciala";
    var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = "Tip Discount";
    var $_PHPSHOP_PRODUCT_FORM_PUBLISH = "Publica?";
    var $_PHPSHOP_PRODUCT_FORM_LENGTH = "Lungime";
    var $_PHPSHOP_PRODUCT_FORM_WIDTH = "Latime";
    var $_PHPSHOP_PRODUCT_FORM_HEIGHT = "Inaltime";
    var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = "Unitate de masura";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT = "Greutate";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = "Unitate de masura";
    var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = "Thumb Nail";
    var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = "Imagine mare";
    
    // Product Display
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = "Adauga rezultate produs";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = "Updateaza rezultate
produs";
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = "Adauga rezultate obiect";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = "Updateaza rezultate
produs";
    var $_PHPSHOP_PRODUCT_CSV_UPLOAD = "Foloseste CSV upload";
    var $_PHPSHOP_PRODUCT_FOLDERS = "Foldere produs";
    
    // Product Category List
    var $_PHPSHOP_CATEGORY_LIST_MNU = "Listeaza Categoriile";
    var $_PHPSHOP_CATEGORY_LIST_LBL = "Category Tree";
    
    // Product Category Form
    var $_PHPSHOP_CATEGORY_FORM_MNU = "Adauga Categorie";
    var $_PHPSHOP_CATEGORY_FORM_LBL = "Informatii categorie";
    var $_PHPSHOP_CATEGORY_FORM_NAME = "Nume categorie";
    var $_PHPSHOP_CATEGORY_FORM_PARENT = "Parinte";
    var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = "Descriere categorie";
    var $_PHPSHOP_CATEGORY_FORM_PUBLISH = "Publica?";
    var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = "Date Categorie";
    
    // Product Attribute List
    var $_PHPSHOP_ATTRIBUTE_LIST_MNU = "Listeaza atribute";
    var $_PHPSHOP_ATTRIBUTE_LIST_LBL = "Listeaza atributetele pentru";
    var $_PHPSHOP_ATTRIBUTE_LIST_NAME = "Nume atribute";
    var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = "Listeaza comanda";
    
    // Product Attribute Form
    var $_PHPSHOP_ATTRIBUTE_FORM_MNU = "Adauga atribut";
    var $_PHPSHOP_ATTRIBUTE_FORM_LBL = "Formarea atributului";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = "Nou atribut produs";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = "Updatare atribut pentru produs";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = "Nou atribut pentru articol";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = "Updatare atribut pentru articol";
    var $_PHPSHOP_ATTRIBUTE_FORM_NAME = "Nume atribut";
    var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = "Ordine listare";
    
    // Product Price List
    var $_PHPSHOP_PRICE_LIST_MNU = "Categorii listare";
    var $_PHPSHOP_PRICE_LIST_LBL = "Price tree";
    var $_PHPSHOP_PRICE_LIST_FOR_LBL = "Pretul pentru";
    var $_PHPSHOP_PRICE_LIST_GROUP_NAME = "Nume grup";
    var $_PHPSHOP_PRICE_LIST_PRICE = "Pret";
    var $_PHPSHOP_PRODUCT_LIST_CURRENCY = "Valuta";
    
    // Product Price Form
    var $_PHPSHOP_PRICE_FORM_MNU = "Adauga pret";
    var $_PHPSHOP_PRICE_FORM_LBL = "Informatii pret";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = "Pret nou produs";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = "Updatare pret produs";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = "Pret nou pentru articol";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = "Updatare pret articol";
    var $_PHPSHOP_PRICE_FORM_PRICE = "Pret";
    var $_PHPSHOP_PRICE_FORM_CURRENCY = "Valuta";
    var $_PHPSHOP_PRICE_FORM_GROUP = "Grup cumparatori";
    
    
    /*#####################
    MODULE REPORT BASIC
    #####################*/
    # Some LABELs
    var $_PHPSHOP_REPORTBASIC_MOD = "Rapoarte";
    var $_PHPSHOP_RB_INDIVIDUAL = "Listari produse individuale";
    var $_PHPSHOP_RB_SALE_TITLE = "Raport vanzari";
    
    /* labels for rpt_sales */
    var $_PHPSHOP_RB_SALES_PAGE_TITLE = "Privire de ansamblu a activitatii de vanzare";
    
    var $_PHPSHOP_RB_INTERVAL_TITLE = "Stabilire interval";
    var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = "Lunar";
    var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = "Saptamanal";
    var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = "Zilnic";
    
    var $_PHPSHOP_RB_THISMONTH_BUTTON = "Luna aceasta";
    var $_PHPSHOP_RB_LASTMONTH_BUTTON = "Luna trecuta";
    var $_PHPSHOP_RB_LAST60_BUTTON = "Ultimele 60 de zile";
    var $_PHPSHOP_RB_LAST90_BUTTON = " Ultimele 90 de zile";
    
    var $_PHPSHOP_RB_START_DATE_TITLE = "Porneste";
    var $_PHPSHOP_RB_END_DATE_TITLE = "Termina la";
    var $_PHPSHOP_RB_SHOW_SEL_RANGE = "Arata seria selectata";
    var $_PHPSHOP_RB_REPORT_FOR = "Raport pentru";
    var $_PHPSHOP_RB_DATE = "Data";
    var $_PHPSHOP_RB_ORDERS = "Comenzi";
    var $_PHPSHOP_RB_TOTAL_ITEMS = "Total articole vandute";
    var $_PHPSHOP_RB_REVENUE = "Castig";
    var $_PHPSHOP_RB_PRODLIST = "Listare produs";
    
    
    
    /*#####################
    MODULE SHOP
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOP_MOD = "Magazin";
    var $_PHPSHOP_PRODUCT_THUMB_TITLE = "Imagine";
    var $_PHPSHOP_PRODUCT_PRICE_TITLE = "Pret";
    var $_PHPSHOP_ORDER_status_P = "Neconfirmat";
    var $_PHPSHOP_ORDER_status_C = "Confirmat";
    var $_PHPSHOP_ORDER_status_X = "Anulat";
    
    
    # Some messages
    var $_PHPSHOP_ORDER_BUTTON = "Comanda";
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOPPER_MOD = "Cumparator";
    
    
    
    // Shopper List
    var $_PHPSHOP_SHOPPER_LIST_MNU = "Listeaza cumparatori";
    var $_PHPSHOP_SHOPPER_LIST_LBL = "Lista cumparatorilor";
    var $_PHPSHOP_SHOPPER_LIST_USERNAME = "Nume utilizator";
    var $_PHPSHOP_SHOPPER_LIST_NAME = "Nume intreg";
    var $_PHPSHOP_SHOPPER_LIST_GROUP = "Grup";
    
    // Shopper Form
    var $_PHPSHOP_SHOPPER_FORM_MNU = "Adauga cumparator";
    var $_PHPSHOP_SHOPPER_FORM_LBL = "Informatii cumparator";
    var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = "Inregistreaza la informatii";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = "Informatii";
    var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = "Informatii expediere";
    var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = "Adauga adresa";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = "Adreseaza porecla";
    var $_PHPSHOP_SHOPPER_FORM_USERNAME = "Nume utilizator";
    var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = "Prenume";
    var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = "Nume de familie";
    var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = "Alt prenume";
    var $_PHPSHOP_SHOPPER_FORM_TITLE = "Titlu";
    var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = "Nume cumparator";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = "Parola";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = "Confirma parola";
    var $_PHPSHOP_SHOPPER_FORM_GROUP = "Grup cumparatori";
    var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = "Nume companie";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = "Adresa 1";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = "Adresa 2";
    var $_PHPSHOP_SHOPPER_FORM_CITY = "Oras";
    var $_PHPSHOP_SHOPPER_FORM_STATE = "Judet";
    var $_PHPSHOP_SHOPPER_FORM_ZIP = "Cod postal";
    var $_PHPSHOP_SHOPPER_FORM_COUNTRY = "tara";
    var $_PHPSHOP_SHOPPER_FORM_PHONE = "telefon";
    var $_PHPSHOP_SHOPPER_FORM_FAX = "Fax";
    var $_PHPSHOP_SHOPPER_FORM_EMAIL = "Email";
    
    // Shopper Group List
    var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = "Listeaza grupuri cumparatori";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = "Lista grupului de cumparatori";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = "nume grup";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = "Descriere grup";
    
    
    // Shopper Group Form
    var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = "Tip grup cumparatori";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = "Adauga grup cumparatori";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = "Nume grup";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = "Descriere grup";
    
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_STORE_MOD = "Stocare";
    
    
    // Store Form
    var $_PHPSHOP_STORE_FORM_MNU = "Editeaza stocare";
    var $_PHPSHOP_STORE_FORM_LBL = "Stocare informatii";
    var $_PHPSHOP_STORE_FORM_CONTACT_LBL = "Informatii de contact";
    var $_PHPSHOP_STORE_FORM_FULL_IMAGE = "imagine intreaga";
    var $_PHPSHOP_STORE_FORM_UPLOAD = "incarca imagine";
    var $_PHPSHOP_STORE_FORM_STORE_NAME = "Stocare nume";
    var $_PHPSHOP_STORE_FORM_COMPANY_NAME = "Stocare nume companie";
    var $_PHPSHOP_STORE_FORM_ADDRESS_1 = "Adresa 1";
    var $_PHPSHOP_STORE_FORM_ADDRESS_2 = "Adresa 2";
    var $_PHPSHOP_STORE_FORM_CITY = "Oras";
    var $_PHPSHOP_STORE_FORM_STATE = "Judet";
    var $_PHPSHOP_STORE_FORM_COUNTRY = "tara";
    var $_PHPSHOP_STORE_FORM_ZIP = "Cod postal";
    var $_PHPSHOP_STORE_FORM_PHONE = "Telefon";
    var $_PHPSHOP_STORE_FORM_CURRENCY = "Valuta";
    var $_PHPSHOP_STORE_FORM_CATEGORY = "Categorie stocare";
    var $_PHPSHOP_STORE_FORM_LAST_NAME = "Nume de familie";
    var $_PHPSHOP_STORE_FORM_FIRST_NAME = "Prenume";
    var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = "Alt prenume";
    var $_PHPSHOP_STORE_FORM_TITLE = "Titlu";
    var $_PHPSHOP_STORE_FORM_PHONE_1 = "Telefon 1";
    var $_PHPSHOP_STORE_FORM_PHONE_2 = "Telefon 2";
    var $_PHPSHOP_STORE_FORM_FAX = "Fax";
    var $_PHPSHOP_STORE_FORM_EMAIL = "Email";
    var $_PHPSHOP_STORE_FORM_IMAGE_PATH = "Cale imagine";
    var $_PHPSHOP_STORE_FORM_DESCRIPTION = "Descriere";
    
    
    
    var $_PHPSHOP_PAYMENT = "Payment";
    // Payment Method List
    var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = "Listeaza modalitati plata";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = "Lista modalitati plata";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = "Nume";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = "Cod";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = "Reducere";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = "Grup cumparatori";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = "Tip modalitate plata";
    
    // Payment Method Form
    var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = "Adauga modalitate plata";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = "Formular modalitate plata";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = "Nume modalitate plata";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = "Grup cumparatori";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = "Reducere";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = "Cod";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = "Ordine lista";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = "Tip modalitate plata";
    
    
    
    /*#####################
    MODULE TAX
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_TAX_MOD = "Taxa";
    
    // User List
    var $_PHPSHOP_TAX_RATE = "Impozite";
    var $_PHPSHOP_TAX_LIST_MNU = "Listeaza impozitele";
    var $_PHPSHOP_TAX_LIST_LBL = "lista impozitelor";
    var $_PHPSHOP_TAX_LIST_STATE = "Impozit regional";
    var $_PHPSHOP_TAX_LIST_COUNTRY = "Impozit tara";
    var $_PHPSHOP_TAX_LIST_RATE = "Impozit";
    
    // User Form
    var $_PHPSHOP_TAX_FORM_MNU = "Adauga impozit";
    var $_PHPSHOP_TAX_FORM_LBL = "Adauga informatii impozite";
    var $_PHPSHOP_TAX_FORM_STATE = "Impozit regional";
    var $_PHPSHOP_TAX_FORM_COUNTRY = "Impozit tara";
    var $_PHPSHOP_TAX_FORM_RATE = "Impozit (pentru 16% => completati 0.16)";
    
    
    
    
    /*#####################
    MODULE VENDOR
    #####################*/
    
    
    
    # Some LABELs
    var $_PHPSHOP_VENDOR_MOD = "Vanzator";
    var $_PHPSHOP_VENDOR_ADMIN = "Vanzatori";
    
    
    // Vendor List
    var $_PHPSHOP_VENDOR_LIST_MNU = "Listeaza vanzatori";
    var $_PHPSHOP_VENDOR_LIST_LBL = "Lista vanzatorilor";
    var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = "Nume vanzator";
    var $_PHPSHOP_VENDOR_LIST_ADMIN = "Administrator";
    
    // Vendor Form
    var $_PHPSHOP_VENDOR_FORM_MNU = "Adauga vanzator";
    var $_PHPSHOP_VENDOR_FORM_LBL = "Adauga informatii";
    var $_PHPSHOP_VENDOR_FORM_INFO_LBL = "Informatii vanzator";
    var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = "Informatii de contact";
    var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = "Imagine intreaga";
    var $_PHPSHOP_VENDOR_FORM_UPLOAD = "Incarca imagine";
    var $_PHPSHOP_VENDOR_FORM_STORE_NAME = "Nume magazin";
    var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = "Nume companie-vanzator";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = "Adresa 1";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = "Adresa 2";
    var $_PHPSHOP_VENDOR_FORM_CITY = "Oras";
    var $_PHPSHOP_VENDOR_FORM_STATE = "Judet";
    var $_PHPSHOP_VENDOR_FORM_COUNTRY = "Tara";
    var $_PHPSHOP_VENDOR_FORM_ZIP = "Cod postal";
    var $_PHPSHOP_VENDOR_FORM_PHONE = "Telefon";
    var $_PHPSHOP_VENDOR_FORM_CURRENCY = "Valuta";
    var $_PHPSHOP_VENDOR_FORM_CATEGORY = "Categorie vanzator";
    var $_PHPSHOP_VENDOR_FORM_LAST_NAME = "Nume de familie";
    var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = "Prenume";
    var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = "Alt prenume";
    var $_PHPSHOP_VENDOR_FORM_TITLE = "Titlu";
    var $_PHPSHOP_VENDOR_FORM_PHONE_1 = "Telefon 1";
    var $_PHPSHOP_VENDOR_FORM_PHONE_2 = "Telefon 2";
    var $_PHPSHOP_VENDOR_FORM_FAX = "Fax";
    var $_PHPSHOP_VENDOR_FORM_EMAIL = "Email";
    var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = "Cale imagine";
    var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = "Descriere";
    
    
    // Vendor Category List
    var $_PHPSHOP_VENDOR_CAT_LIST_MNU = "Listeaza categorii vanzatori";
    var $_PHPSHOP_VENDOR_CAT_LIST_LBL = "Lista categoriilor de vanzatori";
    var $_PHPSHOP_VENDOR_CAT_NAME = "Nume categorie";
    var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = "Descriere categorie";
    var $_PHPSHOP_VENDOR_CAT_VENDORS = "Vanzatori";
    
    // Vendor Category Form
    var $_PHPSHOP_VENDOR_CAT_FORM_MNU = "Adauga categorie vanzator";
    var $_PHPSHOP_VENDOR_CAT_FORM_LBL = "Formular categorie vanzator";
    var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = "Informatii categorie";
    var $_PHPSHOP_VENDOR_CAT_FORM_NAME = "Nume categorie";
    var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = "Descriere categorie";
    
    /*#####################
    MODULE MANUFACTURER
    #####################*/

    # Some LABELs
    var $_PHPSHOP_MANUFACTURER_MOD = "Producator";
    var $_PHPSHOP_MANUFACTURER_ADMIN = "Producatori";
    
    
    // Manufacturer List
    var $_PHPSHOP_MANUFACTURER_LIST_MNU = "Listeaza producatori";
    var $_PHPSHOP_MANUFACTURER_LIST_LBL = "Lista producatori";
    var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = "Nume producator";
    var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = "Admin";
    
    // Manufacturer Form
    var $_PHPSHOP_MANUFACTURER_FORM_MNU = "Adauga producator";
    var $_PHPSHOP_MANUFACTURER_FORM_LBL = "Adauga informatii";
    var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = "Informatii producator";
    var $_PHPSHOP_MANUFACTURER_FORM_NAME = "Nume producator";
    var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = "Categorie producator";
    var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = "Email";
    var $_PHPSHOP_MANUFACTURER_FORM_URL = "URL la pagina producatorului";
    var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = "Descriere";
    
    
    // Manufacturer Category List
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = "Listeaza categorii producatori";
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = "Lista categoriilor de producatori";
    var $_PHPSHOP_MANUFACTURER_CAT_NAME = "Nume categorie";
    var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = "Descriere categorie";
    var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = "Producatori";
    
    // Manufacturer Category Form
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = "Adauga categorie producatori";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = "Formular categorie producator";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = "Informatii categorie";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = "Nume categorie";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = "Descriere categorie";
    
    
    /*#####################
    Modul HELP
    #####################*/
    var $_PHPSHOP_HELP_MOD = "Ajutor";
    
    // 210104 start
    
    var $_PHPSHOP_CART_ACTION = "Updateaza";
    var $_PHPSHOP_CART_UPDATE = "Updateaza cantitatea in cos";
    var $_PHPSHOP_CART_DELETE = "Sterge produsul din cos";
    
    //shopbrowse form
    
    var $_PHPSHOP_PRODUCT_PRICETAG = "Pret";
    var $_PHPSHOP_PRODUCT_CALL = "Cerere de pret";
    var $_PHPSHOP_PRODUCT_PREVIOUS = "Anterior";
    var $_PHPSHOP_PRODUCT_NEXT = "Urmatorul";
    
    //ro_basket
    
    var $_PHPSHOP_CART_TAX = "Tax";
    var $_PHPSHOP_CART_SHIPPING = "Taxa expediere si manevrare";
    var $_PHPSHOP_CART_TOTAL = "Total";
    
    //CHECKOUT.INDEX
    
    var $_PHPSHOP_CHECKOUT_NEXT = "Urmatorul";
    var $_PHPSHOP_CHECKOUT_REGISTER = "Inregistreaza";
    
    //CHECKOUT.CONFIRM
    
    var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = "Informatii facturare";
    var $_PHPSHOP_CHECKOUT_CONF_COMPANY = "Companie";
    var $_PHPSHOP_CHECKOUT_CONF_NAME = "Nume";
    var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = "Adresa";
    var $_PHPSHOP_CHECKOUT_CONF_PHONE = "Telefon";
    var $_PHPSHOP_CHECKOUT_CONF_FAX = "Fax";
    var $_PHPSHOP_CHECKOUT_CONF_EMAIL = "Email";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = "Informatii expediere";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = "Companie";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = "Nume";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = "Adresa";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = "Telefon";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = "Fax";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = "Informatii plata";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = "Nume card";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = "Modalitate plata";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = "Numar credit card";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = "Data expirarii";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = "Comanda completa";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = "informatii cerute cand plata se face prin credit card";
    
    
    var $_PHPSHOP_ZONE_MOD = "Zona expediere";
    
    var $_PHPSHOP_ZONE_LIST_MNU = "Listeaza zone";
    var $_PHPSHOP_ZONE_FORM_MNU = "Adauga zona";
    var $_PHPSHOP_ZONE_ASSIGN_MNU = "Precizeaza zona";
    
    // assign zone List
    var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = "Tara";
    var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = "Zona actuala";
    var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = "Referire la zona";
    var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = "Updateaza";
    var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = "Precizeaza zonele";
    
    // zone Form
    var $_PHPSHOP_ZONE_FORM_NAME_LBL = "Nume zona";
    var $_PHPSHOP_ZONE_FORM_DESC_LBL = "Descriere zona";
    var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = "Costul zonei pe articol";
    var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = "Limita cost zona";
    
    // List of zones
    var $_PHPSHOP_ZONE_LIST_LBL = "Lista zona";
    var $_PHPSHOP_ZONE_LIST_NAME_LBL = "Nume zona";
    var $_PHPSHOP_ZONE_LIST_DESC_LBL = "Descriere zona";
    var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = "Costul zonei pe articol";
    var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = "Limita cost zona";
    
    var $_PHPSHOP_LOGIN_FIRST = "Va rugam ca mai intai sa va logati/inregistrati la acest site (folositi modulul Login).<br>Multumim.";
    var $_PHPSHOP_STORE_FORM_TOS = "Termenii serviciului";
    var $_PHPSHOP_AGREE_TO_TOS = "Va rugam ca mai intai sa fiti de acord cu termenii nostri.";
    var $_PHPSHOP_I_AGREE_TO_TOS = "Sunt de acord cu termenii serviciului";
    
    var $_PHPSHOP_LEAVE_BLANK = "(lasati liber daca aveti <br />nu fisier php individual pentru acesta!)";
    var $_PHPSHOP_RETURN_LOGIN = "Clienti care revin: Va rugam sa va logati";
    var $_PHPSHOP_NEW_CUSTOMER = "Nou? Va rugam sa furnizati informatiile dumneavoastra de facturare";
    var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = "Cont client:";
    var $_PHPSHOP_ACC_ORDER_INFO = "Informatii comanda";
    var $_PHPSHOP_ACC_UPD_BILL = "Aici puteti updata informatii facturare.";
    var $_PHPSHOP_ACC_UPD_SHIP = "Aici puteti adauga sau pastra adrese de expediere.";
    var $_PHPSHOP_ACC_ACCOUNT_INFO = "Informatii cont";
    var $_PHPSHOP_ACC_SHIP_INFO = "Informatii expediere";
    var $_PHPSHOP_ACC_NO_ORDERS = "Fara comanda";
    var $_PHPSHOP_ACC_BILL_DEF = "- Default (la fel ca la Facturare)";
    var $_PHPSHOP_SHIPTO_TEXT = "Puteti sa adaugati locatii de expediere in contul dvs. Va rugam sa va ganditi la o porecla sau cod pentru locatia de expediere pe care o alegeti mai jos.";
    var $_PHPSHOP_CONFIG = "Configurare";
    var $_PHPSHOP_USERS = "Utilizatori";
    var $_PHPSHOP_IS_CC_PAYMENT = "Plata se face prin credit card?";
    
    /*#####################################################
     MODULE SHIPPING
    #######################################################*/
    var $_PHPSHOP_SHIPPING_MOD = "Expediere";
    var $_PHPSHOP_SHIPPING_MENU_LABEL = "Expediere";
    
    var $_PHPSHOP_CARRIER_LIST_MNU = "Expeditor";
    var $_PHPSHOP_CARRIER_LIST_LBL = "Lista expeditori";
    var $_PHPSHOP_RATE_LIST_MNU = "Preturi expediere";
    var $_PHPSHOP_RATE_LIST_LBL = "Lista preturi expediere";
    var $_PHPSHOP_CARRIER_LIST_NAME_LBL = "Nume";
    var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = "Ordine lista";
    
    var $_PHPSHOP_CARRIER_FORM_MNU = "Creaza expeditor";
    var $_PHPSHOP_CARRIER_FORM_LBL = "Creaza/editeaza expeditor";
    var $_PHPSHOP_RATE_FORM_MNU = "Creaza pret expediere";
    var $_PHPSHOP_RATE_FORM_LBL = "Creaza/editeaza pret expediere";
    
    var $_PHPSHOP_RATE_FORM_NAME = "Descriere pret expediere";
    var $_PHPSHOP_RATE_FORM_CARRIER = "Expeditor";
    var $_PHPSHOP_RATE_FORM_COUNTRY = "Tara:<br /><br /><i>Multiselect: folositi CTRL si Mouse</i>";
    var $_PHPSHOP_RATE_FORM_ZIP_START = "ZIP range start";
    var $_PHPSHOP_RATE_FORM_ZIP_END = "ZIP range end";
    var $_PHPSHOP_RATE_FORM_WEIGHT_START = "Greutatea minima";
    var $_PHPSHOP_RATE_FORM_WEIGHT_END = "Greutatea maxima";
    var $_PHPSHOP_RATE_FORM_VALUE = "Tarif";
    var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = "Tariful pachetului dvs";
    var $_PHPSHOP_RATE_FORM_CURRENCY = "Valuta";
    var $_PHPSHOP_RATE_FORM_VAT_ID = "TVA";
    var $_PHPSHOP_RATE_FORM_LIST_ORDER = "Ordine lista";
    
    var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = "Expeditor";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = "Descriere pret expediere";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = "Greutatea de la ...";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = "... la";
    var $_PHPSHOP_CARRIER_FORM_NAME = "Compania tranportatoare";
    var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = "Ordine lista";
    
    var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = "EROARE: Identitate expeditor exista.";
    var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = "EROARE: Alegeti un expeditor.";
    var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = "EROARE: Cel putin un pret de expediere exista, stergeti tarifele prior expeditorului";
    var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = "EROARE: Nu poate gasi un expeditor cu aceasta identitate.";
    
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = "EROARE: Alegeti un expeditor.";
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = "EROARE: Nu poate gasi un expeditor cu aceasta identitate.";
    var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = "EROARE: Se cere o descriere a pretului.";
    var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = "EROARE: Destinatia tarii este invalida. Mai multe tari pot fi separate cu \";\".";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = "EROARE: Se cere o greutate minima";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = "EROARE: Se cere o greutate maxima";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = "EROARE: Greutatea minima trebuie sa fie mai mica decat greutatea maxima";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = "EROARE: Se cere tarif de expediere";
    var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = "EROARE: Alegeti o valuta";
    
    var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = "EROARE: Se cere un pret de expediere";
    
    var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = "Va rugam selectati";
    var $_PHPSHOP_INFO_MSG_CARRIER = "Expeditor";
    var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = "Shipping Rate";
    var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = "Pret";
    var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = "0 (-nici unul-)";
    /*#####################################################
     END: MODULE SHIPPING
    #######################################################*/
    
    var $_PHPSHOP_PAYMENT_FORM_CC = "Credit Card";
    var $_PHPSHOP_PAYMENT_FORM_USE_PP = "Folositi procesorul de plata";
    var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = "Debit bancar";
    var $_PHPSHOP_PAYMENT_FORM_AO = "Numai adresa / Plata la livrare";
    var $_PHPSHOP_CHECKOUT_MSG_2 = "Va rugam selectati adresa de expediere!";
    var $_PHPSHOP_CHECKOUT_MSG_3 = "Va rugam selectati modalitatea de expediere!";
    var $_PHPSHOP_CHECKOUT_MSG_4 = "Va rugam selectati modalitatea de plata!";
    var $_PHPSHOP_CHECKOUT_MSG_99 = "Va rugam revizuiti datele furnizate si confirmati comanda!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = "Va rugam selectati o modalitate de expediere.";
    var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = "Va rugam selectati o alta modalitate de expediere.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = "Va rugam selectati o modalitate de plata.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = "Va rugam introduceti numarul cartii dvs. de credit.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = "Va rugam sa introduceti numele de pe cartea dvs de credit.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = "Numarul cartii de credit este invalid.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = "Va rugam sa introduceti luna in care expira cartea de credit.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = "Va rugam sa introduceti anul in care expira cartea de credit.";
    var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = "Data expirarii este invalida.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = "Please select a Ship To address.";
    var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = "Numar de cont invalid.";
    var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = "Cosul dvs este gol!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = "ERROR: Please select a Shipping Carrier!";
    var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = "EROARE: Tariful de expediere selectat nu exista!";
    var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = "EROARE: Adresa expeditorului nu exista!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = "EROARE: Nu exista date ale cartii de credit...";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = "EROARE: Numarul cartii de credit nu exista!";
    var $_PHPSHOP_CHECKOUT_ERR_TEST = "Ne pare rau, dar numarul cartii de credit pe care l-ati folosit este un numar de testare!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = "Identitatea utilizatorului nu a fost gasita in baza de date!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = "Nu ati furnizat numele titularului contului bancar.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = "Nu ati furnizat IBAN.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = "Nu ati furnizat numarul contului bancar.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = "Nu ati furnizat your bank sort code.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = "Nu ati furnizat numele bancii.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = "CheckOut needs a valid Step!";

    var $_PHPSHOP_CHECKOUT_MSG_LOG = "Informatii de plata pentru o procesare ulterioara.<br />";
    
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = "Nu s-a atins inca o valoare minima de achizitie.";
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = "valoarea minima de achizitie este:";
    var $_PHPSHOP_CHECKOUT_PAYMENT_CC = "Plata prin credit card";
    var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = "Alte modalitati de plata";
    var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = "Va rugam o modalitate de plata:";
    
    var $_PHPSHOP_STORE_FORM_MPOV = "Valoare minima de achizitie pentru stocul dvs";
    var $_PHPSHOP_ACCOUNT_BANK_TITLE = "informatii cont bancar";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = "Numar cont";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = "Bank sorting code number";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = "Numele bancii";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = "IBAN";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = "Titularul contului";
    
    var $_PHPSHOP_MODULES = "Module";
    var $_PHPSHOP_FUNCTIONS = "Functii";
    var $_PHPSHOP_SPECIAL_PRODUCTS = "Produse speciale";
    
    var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = "va rugam sa ne lasati o nota cu comanda dvs daca doriti";
    var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = "Nota clientului";
    var $_PHPSHOP_INCLUDING_TAX = "(incluzand \$tax % tax)";
    var $_PHPSHOP_PLEASE_SEL_ITEM = "va rugam selectati un articol";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = "Articol";

    // DOWNLOADS
    
    var $_PHPSHOP_DOWNLOADS_TITLE = "Zona de descarcare";
    var $_PHPSHOP_DOWNLOADS_START = "Start descarcare";
    var $_PHPSHOP_DOWNLOADS_INFO = "Va rugam introduceti identitata de descarcare pe care il aveti in e-mail si clic 'Start descarcare'.";
    var $_PHPSHOP_DOWNLOADS_ERR_EXP = "Ne pare rau, dar descarcarea dvs a expirat";
    var $_PHPSHOP_DOWNLOADS_ERR_MAX = "Ne pare rau, dar ati atins numarul maxim de descarcari";
    var $_PHPSHOP_DOWNLOADS_ERR_INV = "Identitate descarcare invalida!";
    var $_PHPSHOP_DOWNLOADS_ERR_SEND = "Puteti sa trimiteti un mesaj la ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG = "Mesaj trimis la ";
    var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = "Informatii descarcare";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = "Fisierele pe care le-ati comandat sunt gata pentru descarcare";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = "Va rugam introduceti urmatoarea/urmatoarele identitate/identitati descarcare in zona de descarcare: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = "Numarul maxim de descarcari pentru fiecare fisier este: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = "Download until {expire} days after the first download";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = "Intrebari? Probleme?";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = "Informatii descarcare de"; // e.g. Download-Info by "Storename"
    var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = "Produs care se poate descarca?"; 
    
    var $_PHPSHOP_PAYPAL_THANKYOU = "Multumim pentru plata. 
        Tranzactia s-a incheiat cu succes. Veti primi un e-mail de confirmare a tranzactiei prin PayPal. 
        Acm puteti continua sau sa va logati la <a href=http://www.paypal.com>www.paypal.com</a> pentru a vedea detaliile tranzactiei.";
    var $_PHPSHOP_PAYPAL_ERROR = "A aparut o eroare in timpul procesarii tranzactiei dvs. Statutul comenzii dvs nu a putut fi updatat.";
    
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = "Multumim pentru ca ati ales sa cumparati de la noi. Urmeaza informatii in legatura cu comanda dvs.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = "multumim pentru participare.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = "Intrebari? Probleme?";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = "Urmatoarea comanda a fost primita.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = "A se vedea comanda urmand link-ul de mai jos.";
    
    var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = "Nu sunt permise cantitatile negative.";
    var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = "Va rugam introduceti o cantitate valida pentru acest articol.";
    
    var $_PHPSHOP_CART_STOCK_1 = "Cantitatea selectata depaseste stocul disponibil. ";
    var $_PHPSHOP_CART_STOCK_2 = "In prezent \$produse disponibile in stoc. ";
    var $_PHPSHOP_CART_STOCK_3 = "Clic aici pentru a fi pusi pe lista de asteptare.";
    var $_PHPSHOP_CART_SELECT_ITEM = "Va rugam sa selectati un articol special de pe pagina cu detalii!";
    
    var $_PHPSHOP_REGISTRATION_FORM_NONE = "nici unul";
    var $_PHPSHOP_REGISTRATION_FORM_MR = "Dl.";
    var $_PHPSHOP_REGISTRATION_FORM_MRS = "D-na.";
    var $_PHPSHOP_REGISTRATION_FORM_DR = "Dr.";
    var $_PHPSHOP_REGISTRATION_FORM_PROF = "Prof.";
    var $_PHPSHOP_DEFAULT = "Default";
    
  /*#####################################################
    MODULE AFFILIATE
  #######################################################*/
    var $_PHPSHOP_AFFILIATE_MOD   = "Administrarea membrilor";
    
    // Affiliate List
    var $_PHPSHOP_AFFILIATE_LIST_MNU		= "Listeaza membrii";
    var $_PHPSHOP_AFFILIATE_LIST_LBL		= "Lista membrilor";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME	= "Nume membru";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = "Activ";
    var $_PHPSHOP_AFFILIATE_LIST_RATE		= "Rate";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = "Total lunar";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION ="Comisie lunara";
    var $_PHPSHOP_AFFILIATE_LIST_ORDERS = "Ordine lista";
    
    // Affiliate Email
    var $_PHPSHOP_AFFILIATE_EMAIL_MNU		= "Email membrii";
    var $_PHPSHOP_AFFILIATE_EMAIL_LBL		= "Email membrii";
    var $_PHPSHOP_AFFILIATE_EMAIL_WHO	= "cui sa trimiteti email(* = ALL)";
    var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT		= "Email-ul dvs";
    var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = "Subiect";
    var $_PHPSHOP_AFFILIATE_EMAIL_STATS	 = "Include statistici curente";
    
    // Affiliate Form
    var $_PHPSHOP_AFFILIATE_FORM_RATE		= "Commission Rate (procentaj)";
    var $_PHPSHOP_AFFILIATE_FORM_ACTIVE		= "Activ?";
    
    var $_PHPSHOP_DELIVERY_TIME = "De obicei se expediaza in ";
    var $_PHPSHOP_DELIVERY_INFORMATION = "Informatii de livrare";
    var $_PHPSHOP_MORE_CATEGORIES = "Mai multe categorii";
    var $_PHPSHOP_AVAILABILITY = "Disponibilitate";
    var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = "Acest produs nu este disponibil in prezent.";
    var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = "Va fi disponibil din nou in: ";
    
    var $_PHPSHOP_STATISTIC_SUMMARY = "Rezumat";
    var $_PHPSHOP_STATISTIC_STATISTICS = "Statistica";
    var $_PHPSHOP_STATISTIC_CUSTOMERS = "Clienti";
    var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = "Produse active";
    var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = "Produse inactive";
    var $_PHPSHOP_STATISTIC_SUM = "Suma";
    var $_PHPSHOP_STATISTIC_NEW_ORDERS = "Noi comenzi";
    var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = "Noi clienti";
    
    
	//Waiting list : file /administrator/components/com_phpshop/html/shop.waiting_list.php
	var $_PHPSHOP_WAITING_LIST_MESSAGE = "Va rugam introduceti adresa dvs de email mai jos pentru a fi anuntati cand produsul se afla din nou in stoc. 
                                        Nu vom imparti, inchiria, vinde sau folosi aceasta adresa de email pentru alt scop decat pentru acela de a va anunta cand produsul se afla din nou in stoc.<br /><br />Multumim!";
	var $_PHPSHOP_WAITING_LIST_THANKS = "Multumim pentru asteptare! <br />Va vom anunta imediat ce facem inventarul.";
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = "Anunta-ma!";
	
	//Checkout : file /administrator/components/com_phpshop/html/checkout.thankyou.php
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = "Imprimare";
  
  /**************************Admin.show_cfg.php in apparition order ;-)**************************************/
	
	/* PAGE 1 */
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = "Va rugam alegeti FIE  Authorize.net FIE CyberCash";
	var $_PHPSHOP_ADMIN_CFG_FILE_status = " Statutul configurarii:";
	var $_PHPSHOP_ADMIN_CFG_FILE_status_WRITEABLE = "Poate fi scris";
	var $_PHPSHOP_ADMIN_CFG_FILE_status_UNWRITEABLE = "Nu poate fi scris";
	
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = "Global";
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = "Path & URL";
	var $_PHPSHOP_ADMIN_CFG_SITE = "Site";
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = "Expediere";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = "Verificare";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = "Descarcari";
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = "Plati";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = "Folositi-l numai ca si catalog";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = "Daca verificati acesta, toate functiile cosului sunt intrerupte.";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = "Arata preturi";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = "Arata preturi incluzand taxe";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = "Sets the flag whether the shoppers sees prices including tax or excluding tax.";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = "Check to show prices. If using catalogue functionality, some don't want prices to appear on pages.";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = "Taxa virtuala";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = "Acesta determina daca articolele care au greutate 0 sunt taxate sau nu. Modificati ps_checkout.php->calc_order_taxable().";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = "Mod de taxare:";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = "Se bazeaza pe adresa de expediere";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = "Se bazeaza pe adresa vanzatorului";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = "Acesta determina ce impozit este luat in considerare pentru calcularea taxelor:<br />
                                                <ul><li> cel din statul/tara proprietarul magazinului provine</li><br/>
                                                <li>ori cel din statul/tara cumparatorul provine.</li></ul>";
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = "Se permit mai multe impozite?";
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = "Verificati daca aveti produse cu impozite diferite (ex. 7% pentru carti si mancare, 16% pentru alte articole)";
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = "Retrageti reducerea de plata inainte de taxare/expediere?";
  var $_PHPSHOP_ADMIN_CFG_REVIEW = "Se permite clientului accesul la sistemul de evaluare/recenzie";
  var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = "Daca se permite, clientii pot sa <strong>evalueze produse</strong> si <strong>sa scrie recenzii</strong> despre acestea. <br />
                                                                                Clientii pot sa scrie altor clienti despre experienta lor cu un produs.<br />";
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = "Sets the flag daca sa retraga reducerea pentru plata selectata INAINTE sau DUPA taxare sau expediere.";
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = "Pot clientii sa lase date ale contului bancar?";
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = "Verifica daca clientii pot sa furnizeze date ale contului bancar cand se inregistreaza.";

	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = "Pot clientii sa selecteze un judet?";
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = "Verifica daca clientii pot selecta date ale judetului cand se inregistreaza.";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = "Trebuie sa fie de acord cu termenii serviciului?";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = "Verifica daca un cumparator vrea sa fie de acord cu termenii registrului cand se inregistreaza.";
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = "Verifica stoc?";
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = "Stabileste daca se verifica nivelul stocului cand un utilizator adauga un articol in cos. 
                                                                                          In cazul in care se stabileste, acest lucru nu va permite utilizatorului sa adauge mai multe articole in stoc decat sunt disponibile in stoc.";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = "Se permite accesul la programul membrilor?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = "Acest lucru permite membrilor sa urmareasca This enables the affiliate tracking in the shop-frontend. Enable if you have added affiliates in the backend..";
	
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = "Order-mail format:";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = "Text mail";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = "HTML mail";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = "Acest lucru determina ordinea de confirmare a email-urilor:<br />
                                                                                        <ul><li>ca un email text simplu</li>
                                                                                        <li>or ca un email html cu imagini.</li></ul>";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = "Allow Frontend-Administration for non-Backend Users?";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = "With this setting you can enable the Frontend Administration for users who 
                                                                                              are storeadmins, but can't access the Mambo Backend (e.g. Registered / Editor).";
	
	/* PAGE 2 */
	var $_PHPSHOP_ADMIN_CFG_URL = "URL";
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = "URL catre site-ul dvs. De obicei identic cu Mambo URL (with trailing slash at the end!)";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = "URL securizat";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = "URL securizat catre site-ul dvs. (https - with trailing slash at the end!)";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = "COMPONENTURL";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = "URL catre mambo-phpShop componenta. (with trailing slash at the end!)";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = "IMAGEURL";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = "URL catre directorul de imagine mambo-phpShop.(with trailing slash at the end!)";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = "ADMINPATH";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = "Calea catre directorul component mambo-phpShop.";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = "Calea catre categorie";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = "Calea catre directorul de categorii phpShop.";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = "Calea catre pagina";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = "Calea catre directorul html phpShop.";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = "Calea catre imagine";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = "Calea catre directorul de imagine phpShop.";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = "HOMEPAGE";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = "Aceasta pagina va aparea ca default.";	
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = "Eroare pagina";
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = "Pagina default pentru afisarea mesajelor eroare.";	
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = "Pagian debug";
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = " Pagina default pentru afisarea mesajelor debug.";	
	var $_PHPSHOP_ADMIN_CFG_DEBUG = "DEBUG ?";
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = "DEBUG?  	   	Deschide output debug. Astfel apare DEBUGPAGE in josul paginii. Foarte folositor in timpul dezvoltarii magazinuluipentru ca arata continutul cosurilor, valorile, etc.";


/* PAGE 3 */

	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = "FLYPAGE";
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = "Aceasta este pagina de prezentare a detaliilor produsului.";
  var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = "Model de categorie";
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = "Aceasta defineste modelul de categorie pentru afisarea produselor intr-o categorie.<br />
                                                                                                      Puteti crea noi modele personalizand fisierele existente <br />
                                                                                                      (care se afla in directorul <strong>COMPONENTPATH/html/templates/</strong> and begin with browse_)";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = "Numarul produselor intr-un rand";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = "Aceasta defineste numarul produselor intr-un rand. <br />
                                                                                                      Exemplu: Daca alegeti 4, modelul de categorie will va afisa 4 produse per rand";
  
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = "\"no image\" imagine";
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = "Aceasta imagine va apare cand nici o imagine a produsului este disponibila.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = "CAUTA RANDURI";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = "Determina numarul de randuri pe pagina cand rezultatele cautarii sunt afisate pe o lista.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = "CAUTA CULOAREA 1";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = " Se refera la culoarea randurilor cu numar impar din lista.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = " CAUTA CULOAREA 2";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = " Se refera la culoarea randurilor cu numar par din lista.";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = "NUMAR MAXIM DE RANDURI";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = "Stabileste numarul de randuri din lista selectata.";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = "Arata antet \"powered by mambo-phpShop\" ?";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = "Arata o imagine antet powered-by-mambo-phpShop.";
	
	
	/* PAGE 4 */
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = "Alege metoda de expediere";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = "Modul de expediere standard cu evaluari configurate individual. <strong>RECOMMENDED !</strong>";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = "  	Zona de expediere Module Country Version 1.0<br />
                                                                                                            Pentru mai multe informatii la acest modul viziteaza <a href=\"http://ZephWare.com\">http://ZephWare.com</a><br />
                                                                                                            for details or contact <a href=\"mailto:zephware@devcompany.com\">ZephWare.com</a><br /> Check this to enable the zone shipping module";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = "Calcul expediere UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = "Cod de acces UPS ";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = "Codul dvs de acces UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = "Identitatea UPS a utilizatorului";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = "Identitatea utilizatorului primita din UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = "Parola UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = "Parola pentru contul UPS";
	  
  var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = "Modulul cumparatorului international. Verifica daca aveti un cont Intershipper.com";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = "Nu permite selectia metodei de expediere. Verifica daca clientii cumpara produse downlodabile care nu trebuie sa fie expediate.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = "Parola cumparatorului international";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = "Parola dvs pentru contul cumparatorului international.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = "Emailul cumparatorului international";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = "Adresa dvs de email pentru cont.";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = "CHEIE DE CODARE";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = "Folosita pentru codarea datelor stocate in baza de date cu aceasta cheie. Aceasta inseamana ca dosarul ar trebui protejat tot timpul.";
	
	
	/* PAGE 5 */
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = "Permite bara de verificare";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = "verifica aceasta, daca vrei ca bara de verificare sa apara clientului in timpul procesului de verificare ( 1 - 2 - 3 - 4 cu grafice).";
	
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = "Alegeti procesul de verificare a magazinului dvs";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = "<strong>Standard :</strong><br/>
               1. Cerere adresa expediere<br />
              2. Cerere metoda expediere<br />
              3. Cerere metoda plata<br />
              4. Comanda completa";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = "<strong>Process 2:</strong><br/>
               1. Cerere adresa expediere<br />
              2. Cerere metoda expediere<br />
              3. Comanda completa";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = "<strong>Process 3:</strong><br/>
               1. Cerere metoda expediere<br />
              2. Cerere metoda plata<br />
              3. Comanda completa";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = "<strong>Process 4:</strong><br/>
               1. Cerere metoda plata<br />
              2. Comanda completa";
	
	
	
	/* PAGE 6 */
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = "Se permite incarcare";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = "verifica pentru a permite puterea de descarcare. Numai daca vrei vinde produse care pot fi descarcate.";
	
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = "Statutul comenzii care permite descarcarea";
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = "Selecteaza statutul comenzii la care clientul este anuntat de descarcare prin email.";
	
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = "Statutul comenzii care nu permite descarcarea";
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = "Stabileste statutul comenzii atunci cand descarcarea nu este permisa pentru client.";
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = "DOWNLOADROOT";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = "Calea catre fisierele pentru descarcarea clientului. (trailing slash at the end!)<br>
        <span class=\"message\">Pentru securitatea magazinului dvs: Daca puteti, va ruga folositi un director ORIUNDE IN AFARA WEBROOT</span>";
	
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = "Descarcare maxim";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = "Stabileste numarul de descarcari care pot fi facute cu o singura identitate, (pentru o singura comanda)";
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = "Expirarea descarcarii";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = "Stabileste timpul <strong>in secunde</strong> la care descarcarea este permisa pentru client. 
  Timpul alocat incepe cu prima descarcare!, cand timpul a expirat, identitatea pentru descarcare nu mai este valabila.<br />Note : 86400s=24h.";
	
	
	
	
	/* PAGE 7 */
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = "Se permit plati IPN  via PayPal?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = "Verifica pentru a permite clientilor sa foloseasca sistemul de plata PayPal.";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = "Email pentru plata PayPal:";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = "Adresa de email de afaceri pentru plati PayPal. De asemenea folosit ca email de primire.";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_status_SUCCESS = "Statutul comenzii pentru tranzactii de succes";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_status_SUCCESS_EXPLAIN = "Selectati statutul comenzii daca PayPal IPN a avut succes. Daca folositii incarcarea cu optiuni de vanzare: 
  selectati statutul care permite incarcarea (apoi clientul este anuntat pe loc in legatura cu incarcarea via email).";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_status_FAILED = "Statutul comenzii in caz de esec al tranzactiilor";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_status_FAILED_EXPLAIN = "Selectati statutul comenzii in caz de esec al tranzactiilor PayPal";

	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = "Se permit plati via PayMate?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = "Verifica pentru a permite clientilor sa foloseasca sistemul de plata Australian PayMate.";
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = "PayMate username:";
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = "Contul utilizatorului pentru PayMate.";
	
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = "Se permite plata prin Authorize.net?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = "Verifica folosirea Authorize.net cu phpShop.";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = "Mode de testare?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = "Selecteaza 'Da' in timp de se testeaza. Selecteaza 'Nu' pentru a permite tranzactii in direct.";
	var $_PHPSHOP_ADMIN_CFG_YES = "Da";
	var $_PHPSHOP_ADMIN_CFG_NO = "Nu";
	
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = "Autorizeaza.net Login ID";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = "Aceasta este identitatea de logare la Authorize.Net";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = "Cheia de tranzactie la Authorize.net";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = "Aceasta este cheia de tranzactie Authorize.net";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = "Tip de autentificare";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = "Acesta este tipul de autentificare Authorize.Net.";
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = "Se permite CyberCash?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = "Verifica pentru a folosi CyberCash cu phpShop.";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = "CyberCash MERCHANT";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = "CC_MERCHANT is the CyberCash Merchant ID";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = "CyberCash Merchant Key";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = "CyberCash Merchant Key is the Merchant Provided by CyberCash";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = "CyberCash PAYMENT URL";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = "CyberCash PAYMENT URL is the URL provided by Cybercash for secure payment";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = "CyberCash AUTH TYPE";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = "CyberCash AUTH TYPE is the Cybercash authentication type provided by Cybercase";
	

    /** Advanced Search feature ***/
    var $_PHPSHOP_ADVANCED_SEARCH  ="Cautare avansata";
    var $_PHPSHOP_SEARCH_ALL_CATEGORIES = "Cauta in toate categoriile";
    var $_PHPSHOP_SEARCH_ALL_PRODINFO = "Cauta dupa informatii produse";
    var $_PHPSHOP_SEARCH_PRODNAME = "Dupa numele produsului";
    var $_PHPSHOP_SEARCH_MANU_VENDOR = "Dupa producator/distribuitor";
    var $_PHPSHOP_SEARCH_DESCRIPTION = "Dupa descrierea produsului";
    var $_PHPSHOP_SEARCH_AND = "si";
    var $_PHPSHOP_SEARCH_NOT = "nu";
//    var $_PHPSHOP_SEARCH_TEXT1 = "Prima lista va permite selectarea categoriei pentru a va limita cautarea. 
//        Cea de-a doua lista permite limitarea cautarii la anumite informatii ale unui produs (ex. Numele). 
//        Odata ce ati selectatacestea (sau TOT), introduceti cuvantul pentru cautare. ";
//    var $_PHPSHOP_SEARCH_TEXT2 = " Mai departe puteti perfectiona cautarea adaugand un al doilea cuvant si selectand SI si NU. 
//        Selectand SI inseaman ca amblele cuvinte trebuie sa apara pentru ca produsul sa fie afisat. 
//        Selectand NU inseaman ca produsul va fi afisat numai daca un cuvant apare 
//       si al doilea nu.";
    var $_PHPSHOP_ORDERBY = "Selecteaza dupa";
    
    /*** Review feature ***/
    var $_PHPSHOP_CUSTOMER_RATING  = "Media de evaluare a clientului";
    var $_PHPSHOP_TOTAL_VOTES = "Total voturi";
    var $_PHPSHOP_CAST_VOTE = "Va rugam votati";
    var $_PHPSHOP_RATE_BUTTON = "Evalueaza";
    var $_PHPSHOP_RATE_NOM = "Evaluare";
    var $_PHPSHOP_REVIEWS = "Comentariiile clientului";
    var $_PHPSHOP_NO_REVIEWS = "Nu sunt comentarii la acest produs.";
    var $_PHPSHOP_WRITE_FIRST_REVIEW = "Fiti primul care scrie un comentariu...";
    var $_PHPSHOP_REVIEW_LOGIN = "Va rugam sa va logati pentru a scrie un comentariu.";
    var $_PHPSHOP_REVIEW_ERR_RATE = "Va rugam sa evaluati produsul pentru a completa comentariul dvs!";
    var $_PHPSHOP_REVIEW_ERR_COMMENT1 = "Va rugam adaugati mai multe cuvinte la comentariul dvs. Numarul minim de caractere permise: 100";
    var $_PHPSHOP_REVIEW_ERR_COMMENT2 = "Va rugam scurtati comentariul. Numarul maxim de caractere permise: 2000";
    var $_PHPSHOP_WRITE_REVIEW = "Scrieti un comentariu pentru acest produs!";
    var $_PHPSHOP_REVIEW_RATE = "Mai intai evaluati produsul> Va rugam sa evaluati intre 0 (cel mai slab)si 5 stele (cel mai bun).";
    var $_PHPSHOP_REVIEW_COMMENT = "Acum scrieti un scurt comentariu....(min. 100, max. 2000 caractere) ";
    var $_PHPSHOP_REVIEW_COUNT = "Caractere: ";
    var $_PHPSHOP_REVIEW_SUBMIT = "Propune comentarii";
    var $_PHPSHOP_REVIEW_ALREADYDONE = "Deja ati facut comentarii in legatura cu acest produs.Multumim.";
    var $_PHPSHOP_REVIEW_THANKYOU = "Multumim pentru comentariile dvs.";
    var $_PHPSHOP_COMMENT= "Comentarii";
    
    var $_PHPSHOP_CREDITCARD_FORM_LBL = "Adauga/editeaza tipuri de carti de credit";
    var $_PHPSHOP_CREDITCARD_NAME = "Numele cartii de credit";
    var $_PHPSHOP_CREDITCARD_CODE = "Credit Card ? Cod scurt";
    var $_PHPSHOP_CREDITCARD_TYPE = "Tip de credit card";
    
    var $_PHPSHOP_CREDITCARD_LIST_LBL = "Lista card-urilor de credit";
    var $_PHPSHOP_UDATE_ADDRESS = "Updateaza adresa";
    var $_PHPSHOP_CONTINUE_SHOPPING = "Continua cumparare";
    
    var $_PHPSHOP_THANKYOU_SUCCESS = "Comanda dvs a fost luata cu succes!";
    var $_PHPSHOP_ORDER_LINK = "Urmati link-ul pentru a vedea celelalte detalii.";
    
    var $_PHPSHOP_ORDER_status_CHANGE_SEND_MSG_1 = "Statutul comenzii dvs no.{order_id} a fost schimbat.";
    var $_PHPSHOP_ORDER_status_CHANGE_SEND_MSG_2 = "Noul statutu este:";
    var $_PHPSHOP_ORDER_status_CHANGE_SEND_MSG_3 = "Pentru a vedea detaliile comenzii, urmati acest link(sau copiati-l in browser-ul dvs):";
    var $_PHPSHOP_ORDER_status_CHANGE_SEND_SUBJ = "Schimbarea statutului comenzii: Comanda dvs{order_id}";
    var $_PHPSHOP_ORDER_LIST_NOTIFY = "Sa anuntam clientul?";
    var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = "Va rugam ca mai intai sa schimbati statutul comenzii!";
    
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = "Pretul redus la grupul de cumparatori de baza (in %)";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = "O cantiate pozitiva X inseamna: Daca produsul nu are pret destinat acestui grup de cumparatori, pretul de baza se scade cu X%. O cantitate negativa are efectul opus";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = "Reducere la produse";
    var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = "Lista reducerilor la produse";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = "Adauga/editeaza reducerea produsului";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = "Cat se reduce";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = "Introduceti cat se reduce";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = "Tip de reducere";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = "Procentaje";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = "Total";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = "cantitatea sa fie in procentaje sau total?";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = "Inceputul perioadei de reducere";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = "Specifica data cand reducerea incepe";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = "Sfarsitul perioadei de reducere";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = "Specifica data cand reducerea se termina";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = "Puteti folosi formularul de reducere de preturi pentru a adauga reduceri!";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = "Salvati";
    
    var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = "a se vedea imagine intreaga";
    
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

    var $_PHPSHOP_MULTISELECT = "Multiselect: use STRG-Key and Mouse";
        
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
