<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: polish.php,v 1.16 2005/06/22 19:50:45 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage languages
*
* @copyright (C) 2004 Soeren Eberhardt
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* Polish Translation: Peter �uka�ko <koolavy@tlen.pl>
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
    
    var $_PHPSHOP_MENU = "Menu";
    var $_PHPSHOP_CATEGORY = "Kategoria";
    var $_PHPSHOP_CATEGORIES = "Kategorie";
    var $_PHPSHOP_SELECT_CATEGORY = "Wybierz kategori�:";
    var $_PHPSHOP_ADMIN = "Administracja";
    var $_PHPSHOP_PRODUCT = "Produkt";
    var $_PHPSHOP_LIST = "Listuj";
    var $_PHPSHOP_ALL = "Wszystkie";
    var $_PHPSHOP_LIST_ALL_PRODUCTS = "Lista produkt�w";
    var $_PHPSHOP_VIEW = "widok";
    var $_PHPSHOP_SHOW = "poka�";
    var $_PHPSHOP_ADD = "dodaj";
    var $_PHPSHOP_UPDATE = "aktualizuj";
    var $_PHPSHOP_DELETE = "usu�";
    var $_PHPSHOP_SELECT = "wybierz";
    var $_PHPSHOP_SUBMIT = "Submit";
    var $_PHPSHOP_RANDOM = "Losowo wybrane produkty";
    var $_PHPSHOP_LATEST = "Ostatnio dodane produkty";
    
    /*#####################
    MODULE ACCOUNT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_HOME_TITLE = "Strona g��wna";
    var $_PHPSHOP_CART_TITLE = "Koszyk";
    var $_PHPSHOP_CHECKOUT_TITLE = "Zam�wienie";
    var $_PHPSHOP_LOGIN_TITLE = "Zaloguj si�";
    var $_PHPSHOP_LOGOUT_TITLE = "Wyloguj si�";
    var $_PHPSHOP_BROWSE_TITLE = "Przegl�daj";
    var $_PHPSHOP_SEARCH_TITLE = "Szukaj";
    var $_PHPSHOP_ACCOUNT_TITLE = "Zarz�dzanie kontem";
    var $_PHPSHOP_NAVIGATION_TITLE = "Nawigacja";
    var $_PHPSHOP_DEPARTMENT_TITLE = "Oddzia�";
    var $_PHPSHOP_INFO = "Informacja";
    
    var $_PHPSHOP_BROWSE_LBL = "Przegl�daj";
    var $_PHPSHOP_PRODUCTS_LBL = "Produkty";
    var $_PHPSHOP_PRODUCT_LBL = "Produkt";
    var $_PHPSHOP_SEARCH_LBL = "Szukaj";
    var $_PHPSHOP_FLYPAGE_LBL = "Szczeg�y produktu";
    var $_PHPSHOP_PRODUCT_SEARCH_LBL = "Wyszukiwanie produktu";
    
    var $_PHPSHOP_PRODUCT_NAME_TITLE = "Nazwa produktu";
    var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = "Kategoria produktu";
    var $_PHPSHOP_PRODUCT_DESC_TITLE = "Opis";
    
    var $_PHPSHOP_CART_SHOW = "Poka� koszyk";
    var $_PHPSHOP_CART_ADD_TO = "Dodaj do koszyka";
    var $_PHPSHOP_CART_NAME = "Nazwa";
    var $_PHPSHOP_CART_SKU = "Symbol";
    var $_PHPSHOP_CART_PRICE = "Cena";
    var $_PHPSHOP_CART_QUANTITY = "Ilo��";
    var $_PHPSHOP_CART_SUBTOTAL = "Podsuma";
    
    # Some messages
    var $_PHPSHOP_ADD_SHIPTO_1 = "Dodaj nowy";
    var $_PHPSHOP_ADD_SHIPTO_2 = "Adres wysy�ki";
    var $_PHPSHOP_NO_SEARCH_RESULT = "Nie znaleziono element�w spe�niaj�cych podane kryteria wyszukiwania.<br />";
    var $_PHPSHOP_PRICE_LABEL = "Cena: ";
    var $_PHPSHOP_ORDER_BUTTON_LABEL = "Dodaj do koszyka";
    var $_PHPSHOP_NO_CUSTOMER = "Nie jeste� jeszcze zarejestrowanym klientem. Prosimy o wprowadzenie swoich danych.";
    var $_PHPSHOP_DELETE_MSG = "Czy napewno chcesz usun�� ten zapis?";
    var $_PHPSHOP_THANKYOU = "Dzi�kujemy za zam�wienie.";
    var $_PHPSHOP_NOT_SHIPPED = "Jeszcze nie wys�ano";
    var $_PHPSHOP_EMAIL_SENDTO = "Potwierdzenie zam�wienia zosta�o wys�ane do";
    var $_PHPSHOP_NO_USER_TO_SELECT = "Przepraszamy, ale nie ma �adnego u�ytkownika MOS, kt�ry m�g�by zosta� dodany do listy u�ytkownik�w com_phpshop";
    
    // Error messages
    
    var $_PHPSHOP_ERROR = "B��D";
    var $_PHPSHOP_MOD_NOT_REG = "Modu� nie zarejestrowany.";
    var $_PHPSHOP_MOD_ISNO_REG = "nie jest prawid�owym modu�em phpShop.";
    var $_PHPSHOP_MOD_NO_AUTH = "Nie masz uprawnie� dost�pu do ��danego modu�u.";
    var $_PHPSHOP_PAGE_404_1 = "Strona nie istnieje";
    var $_PHPSHOP_PAGE_404_2 = "Plik o danej nazwie nie istnieje. Nie mo�na znale�� pliku:";
    var $_PHPSHOP_PAGE_403 = "Niewystarczaj�ce prawa dost�pu";
    var $_PHPSHOP_FUNC_NO_EXEC = "Nie masz uprawnie�, aby uruchomi� ";
    var $_PHPSHOP_FUNC_NOT_REG = "Funkcja nie jest zarejestrowana";
    var $_PHPSHOP_FUNC_ISNO_REG = " nie jest prawid�owa funkcj� MOS_com_phpshop.";
    
    /*#####################
    MODULE ADMIN
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADMIN_MOD = "Admin";
    
    
    // User List
    var $_PHPSHOP_USER_LIST_MNU = "Wylistuj u�ytkownik�w";
    var $_PHPSHOP_USER_LIST_LBL = "Lista u�ytkownik�w";
    var $_PHPSHOP_USER_LIST_USERNAME = "Nazwa u�ytkownika";
    var $_PHPSHOP_USER_LIST_FULL_NAME = "Pe�na nazwa";
    var $_PHPSHOP_USER_LIST_GROUP = "Grupa";
    
    // User Form
    var $_PHPSHOP_USER_FORM_MNU = "Dodaj u�ytkownika";
    var $_PHPSHOP_USER_FORM_LBL = "Dodaj/edytuj informacje o u�ytkowniku";
    var $_PHPSHOP_USER_FORM_BILLTO_LBL = "Dane klienta";
    var $_PHPSHOP_USER_FORM_SHIPTO_LBL = "Adresy wysy�ki";
    var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = "Dodaj adres";
    var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = "Alias adresu";
    var $_PHPSHOP_USER_FORM_FIRST_NAME = "Imi�";
    var $_PHPSHOP_USER_FORM_LAST_NAME = "Nazwisko";
    var $_PHPSHOP_USER_FORM_MIDDLE_NAME = "Drugie imi�";
    var $_PHPSHOP_USER_FORM_TITLE = "Tytu�";
    var $_PHPSHOP_USER_FORM_USERNAME = "Nazwa u�ytkownika";
    var $_PHPSHOP_USER_FORM_PASSWORD_1 = "Has�o";
    var $_PHPSHOP_USER_FORM_PASSWORD_2 = "Potwierd� has�o";
    var $_PHPSHOP_USER_FORM_PERMS = "Uprawnienia";
    var $_PHPSHOP_USER_FORM_COMPANY_NAME = "Nazwa firmy";
    var $_PHPSHOP_USER_FORM_ADDRESS_1 = "Adres 1";
    var $_PHPSHOP_USER_FORM_ADDRESS_2 = "Adres 2";
    var $_PHPSHOP_USER_FORM_CITY = "Miasto";
    var $_PHPSHOP_USER_FORM_STATE = "Wojew�dztwo";
    var $_PHPSHOP_USER_FORM_ZIP = "Kod pocztowy";
    var $_PHPSHOP_USER_FORM_COUNTRY = "Kraj";
    var $_PHPSHOP_USER_FORM_PHONE = "Telefon";
    var $_PHPSHOP_USER_FORM_FAX = "Faks";
    var $_PHPSHOP_USER_FORM_EMAIL = "Email";
    
    // Module List
    var $_PHPSHOP_MODULE_LIST_MNU = "Wylistuj modu�y";
    var $_PHPSHOP_MODULE_LIST_LBL = "Lista modu��w";
    var $_PHPSHOP_MODULE_LIST_NAME = "Nazwa modu�u";
    var $_PHPSHOP_MODULE_LIST_PERMS = "Uprawnienia modu�u";
    var $_PHPSHOP_MODULE_LIST_FUNCTIONS = "Funkcje";
    var $_PHPSHOP_MODULE_LIST_ORDER = "Kolejno�� na li�cie";
    
    // Module Form
    var $_PHPSHOP_MODULE_FORM_MNU = "Dodaj modu�";
    var $_PHPSHOP_MODULE_FORM_LBL = "Informacja o module";
    var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = "Etykieta modu�u (dla menu g�rnego)";
    var $_PHPSHOP_MODULE_FORM_NAME = "Nazwa modu�u";
    var $_PHPSHOP_MODULE_FORM_PERMS = "Uprawnienia modu�u";
    var $_PHPSHOP_MODULE_FORM_HEADER = "Nag��wek modu�u";
    var $_PHPSHOP_MODULE_FORM_FOOTER = "Stopka modu�u";
    var $_PHPSHOP_MODULE_FORM_MENU = "Pokazuj modu� w menu administracyjnym?";
    var $_PHPSHOP_MODULE_FORM_ORDER = "Porz�dek wy�wietlania";
    var $_PHPSHOP_MODULE_FORM_DESCRIPTION = "Opis modu�u";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = "Kod j�zyka";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = "Plik j�zyka";
    
    // Function List
    var $_PHPSHOP_FUNCTION_LIST_MNU = "Wylistuj funkcje";
    var $_PHPSHOP_FUNCTION_LIST_LBL = "Lista funkcji";
    var $_PHPSHOP_FUNCTION_LIST_NAME = "Nazwa funkcji";
    var $_PHPSHOP_FUNCTION_LIST_CLASS = "Nazwa klasy";
    var $_PHPSHOP_FUNCTION_LIST_METHOD = "Metoda klasy";
    var $_PHPSHOP_FUNCTION_LIST_PERMS = "Uprawnienia";
    
    // Module Form
    var $_PHPSHOP_FUNCTION_FORM_MNU = "Dodaj fukcj�";
    var $_PHPSHOP_FUNCTION_FORM_LBL = "Informacja o funkcji";
    var $_PHPSHOP_FUNCTION_FORM_NAME = "Nazwa funkcji";
    var $_PHPSHOP_FUNCTION_FORM_CLASS = "Nazwa klasy";
    var $_PHPSHOP_FUNCTION_FORM_METHOD = "Metoda klasy";
    var $_PHPSHOP_FUNCTION_FORM_PERMS = "Uprawnienia funkcji";
    var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = "Opis funkcji";
    
    // Currency form and list
    var $_PHPSHOP_CURRENCY_LIST_MNU = "Wylistuj waluty";
    var $_PHPSHOP_CURRENCY_LIST_LBL = "Lista walut";
    var $_PHPSHOP_CURRENCY_LIST_ADD = "Dodaj walut�";
    var $_PHPSHOP_CURRENCY_LIST_NAME = "Nazwa waluty";
    var $_PHPSHOP_CURRENCY_LIST_CODE = "Kod waluty";
    
    // Country form and list
    var $_PHPSHOP_COUNTRY_LIST_MNU = "Wylistuj kraje";
    var $_PHPSHOP_COUNTRY_LIST_LBL = "Lista kraj�w";
    var $_PHPSHOP_COUNTRY_LIST_ADD = "Dodaj kraj";
    var $_PHPSHOP_COUNTRY_LIST_NAME = "Nazwa kraju";
    var $_PHPSHOP_COUNTRY_LIST_3_CODE = "Kod kraju (3)";
    var $_PHPSHOP_COUNTRY_LIST_2_CODE = "Kod kraju (2)";
    
    /*#####################
    MODULE CHECKOUT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADDRESS = "Adres";
    var $_PHPSHOP_CONTINUE = "Kontynuuj";
    
    # Some messages
    var $_PHPSHOP_EMPTY_CART = "Tw�j koszyk jest pusty.";
    
    
    /*#####################
    MODULE ISShipping
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ISSHIPPING_MOD = "InterShipper";
    
    
    // Shipping Ping
    var $_PHPSHOP_ISSHIP_PING_MNU = "Pinguj serwer InterShippera";
    var $_PHPSHOP_ISSHIP_PING_LBL = "Ping serwera InterShipper";
    var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = "Nieudany ping serwera InterShipper";
    var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = "Ping serwera InterShipper wykonany pomy�lnie";
    var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = "Spedytor";
    var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = "Czas<br />odpowiedzi";
    var $_PHPSHOP_ISSHIP_PING_TIME_LBL = "sek.";
    
    // Shipping List
    var $_PHPSHOP_ISSHIP_LIST_MNU = "Lista metod wysy�ki";
    var $_PHPSHOP_ISSHIP_LIST_LBL = "Aktywne metody wysy�ki";
    var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = "Metody wysy�ki";
    var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = "Aktywny";
    var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = "Op�aty manipulacyjne";
    var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = "Czas realizacji";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = "rycza�t";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = "procent";
    var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = "dni";
    var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = "Ci�kie �adunki";
    
    // Dynamic Shipping Form
    var $_PHPSHOP_ISSHIP_FORM_MNU = "Konfiguruj metody wysy�ki";
    var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = "Dodaj metod� wysy�ki";
    var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = "Konfiguruj metod� wysy�ki";
    var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = "Odw�ie�";
    var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = "Metoda wysy�ki";
    var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = "Aktywuj";
    var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = "Op�ata manipulacyjna";
    var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = "Czas realizacji";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = "rycza�t";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = "procent";
    var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = "dni";
    var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = "Ci�kie �adunki";
    
    
    
    /*#####################
    MODULE ORDER
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_ORDER_MOD = "Zam�wienia";
    
    // Some menu options 
    var $_PHPSHOP_ORDER_CONFIRM_MNU = "Potwierd� zam�wienie";
    var $_PHPSHOP_ORDER_CANCEL_MNU = "Anuluj zam�wienie";
    var $_PHPSHOP_ORDER_PRINT_MNU = "Drukuj zam�wienie";
    var $_PHPSHOP_ORDER_DELETE_MNU = "Usu� zam�wienie";
    
    // Order List
    var $_PHPSHOP_ORDER_LIST_MNU = "Wylistuj zam�wienia";
    var $_PHPSHOP_ORDER_LIST_LBL = "Lista zam�wie�";
    var $_PHPSHOP_ORDER_LIST_ID = "Numer zam�wienia";
    var $_PHPSHOP_ORDER_LIST_CDATE = "Data zam�wienia";
    var $_PHPSHOP_ORDER_LIST_MDATE = "Ostatnia modyfikacja";
    var $_PHPSHOP_ORDER_LIST_STATUS = "Stan";
    var $_PHPSHOP_ORDER_LIST_TOTAL = "Podsuma";
    var $_PHPSHOP_ORDER_ITEM = "Szczeg�y zam�wienia";
    
    // Order print
    var $_PHPSHOP_ORDER_PRINT_PO_LBL = "Zam�wienie";
    var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = "Numer zam�wienia";
    var $_PHPSHOP_ORDER_PRINT_PO_DATE = "Data zam�wienia";
    var $_PHPSHOP_ORDER_PRINT_PO_STATUS = "Stan zam�wienia";
    var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = "Dane klienta";
    var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = "Dane do faktury";
    var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = "Informacje o wysy�ce";
    var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = "Rachunek dla";
    var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = "Wysy�ka do";
    var $_PHPSHOP_ORDER_PRINT_NAME = "Nazwa";
    var $_PHPSHOP_ORDER_PRINT_COMPANY = "Firma";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = "Adres 1";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = "Adres 2";
    var $_PHPSHOP_ORDER_PRINT_CITY = "Miasto";
    var $_PHPSHOP_ORDER_PRINT_STATE = "Wojew�dztwo";
    var $_PHPSHOP_ORDER_PRINT_ZIP = "Kod pocztowy";
    var $_PHPSHOP_ORDER_PRINT_COUNTRY = "Kraj";
    var $_PHPSHOP_ORDER_PRINT_PHONE = "Telefon";
    var $_PHPSHOP_ORDER_PRINT_FAX = "Faks";
    var $_PHPSHOP_ORDER_PRINT_EMAIL = "Email";
    var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = "Szczeg�y zam�wienia";
    var $_PHPSHOP_ORDER_PRINT_QUANTITY = "Ilo��";
    var $_PHPSHOP_ORDER_PRINT_QTY = "Il.";
    var $_PHPSHOP_ORDER_PRINT_SKU = "Symbol";
    var $_PHPSHOP_ORDER_PRINT_PRICE = "Cena";
    var $_PHPSHOP_ORDER_PRINT_TOTAL = "Suma";
    var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = "Podsuma";
    var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = "Podatek";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING = "Koszty wysy�ki";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = "Podatek od wysy�ki";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = "Metoda p�atno�ci";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = "Nazwa rachunku";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = "Numer rachunku";
    var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = "Data wyga�ni�cia";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = "Dziennik p�atno�ci";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = "Informacje o wysy�ce";
    var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = "Informacje o p�atno�ci";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = "Spedytor";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = "Rodzaj wysy�ki";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = "Data wysy�ki";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = "Koszt wysy�ki";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_MNU = "Wylistuj typy stan�w zam�wie�";
    var $_PHPSHOP_ORDER_STATUS_FORM_MNU = "Dodaj typ stanu zam�wienia";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_CODE = "Kod stanu zam�wienia";
    var $_PHPSHOP_ORDER_STATUS_LIST_NAME = "Nazwa stanu zam�wienia";
    
    var $_PHPSHOP_ORDER_STATUS_FORM_LBL = "Stan zam�wienia";
    var $_PHPSHOP_ORDER_STATUS_FORM_CODE = "Kod stanu zam�wienia";
    var $_PHPSHOP_ORDER_STATUS_FORM_NAME = "Nazwa stanu zam�wienia";
    var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = "Kolejno�� na li�cie";
    
    
    /*#####################
    MODULE PRODUCT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_PRODUCT_MOD = "Produkty";
    
    var $_PHPSHOP_CURRENT_PRODUCT = "Aktualny produkt";
    var $_PHPSHOP_CURRENT_ITEM = "Aktualny element";
    
    // Product Inventory
    var $_PHPSHOP_PRODUCT_INVENTORY_LBL = "Spis produkt�w";
    var $_PHPSHOP_PRODUCT_INVENTORY_MNU = "Poka� spis produkt�w";
    var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = "Cena";
    var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = "Numer";
    var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = "Waga";
    // Product List
    var $_PHPSHOP_PRODUCT_LIST_MNU = "Wylistuj produkty";
    var $_PHPSHOP_PRODUCT_LIST_LBL = "Lista produkt�w";
    var $_PHPSHOP_PRODUCT_LIST_NAME = "Nazwa produtku";
    var $_PHPSHOP_PRODUCT_LIST_SKU = "Symbol";
    var $_PHPSHOP_PRODUCT_LIST_PUBLISH = "Publikuj";
    
    // Product Form
    var $_PHPSHOP_PRODUCT_FORM_MNU = "Dodaj produkt";
    var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = "Edytuj ten produtk";
    var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = "Podgl�d produktu w sklepie";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = "Dodaj element";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = "Dodaj nast�pny element";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = "Nowy produkt";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = "Aktualizuj produkt";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = "Informacja o produkcie";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = "Stan produktu";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = "Wymiary i waga produktu";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = "Zdj�cia produktu";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = "Nowy element";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = "Aktualizuj element";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = "Informacja o elemencie";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = "Stan elementu";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = "Wymiary i waga elementu";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = "Zdj�cia elementu";
    var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = "Powr�t do macierzystego produktu";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = "Aby zaktualizowa� zdj�cie, wprowad� scie�k� do nowego zdj�cia.";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = "Wprowad� \"none\", aby skasowa� aktualne zdj�cie.";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = "Elementy produktu";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = "Atrybuty elementu";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = "Czy napewno chcesz usun�� ten produkt\\ni powi�zane z nim elementy?";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = "Czy napewno chcesz usun�� ten element?";
    var $_PHPSHOP_PRODUCT_FORM_VENDOR = "Dostawca";
    var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = "Producent";
    var $_PHPSHOP_PRODUCT_FORM_SKU = "Symbol";
    var $_PHPSHOP_PRODUCT_FORM_NAME = "Nazwa";
    var $_PHPSHOP_PRODUCT_FORM_URL = "URL";
    var $_PHPSHOP_PRODUCT_FORM_CATEGORY = "Kategoria";
    var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = "Cena detaliczn";
    var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = "Product Price (Net)";
    var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = "Pe�ny opis produktu";
    var $_PHPSHOP_PRODUCT_FORM_S_DESC = "Skr�cony opis";
    var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = "Produkt dost�pny";
    var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = "Na zam�wienie";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = "Data dost�pno�ci produktu";
    var $_PHPSHOP_PRODUCT_FORM_SPECIAL = "W promocji";
    var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = "Typ zni�ki";
    var $_PHPSHOP_PRODUCT_FORM_PUBLISH = "Publikowa�?";
    var $_PHPSHOP_PRODUCT_FORM_LENGTH = "D�ugo��";
    var $_PHPSHOP_PRODUCT_FORM_WIDTH = "Szeroko��";
    var $_PHPSHOP_PRODUCT_FORM_HEIGHT = "Wysoko��";
    var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = "Jednostka miary";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT = "Waga";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = "Jednostka miary";
    var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = "Miniaturka";
    var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = "Zdj�cie";
    
    // Product Display
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = "Dodaj wyniki produktu";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = "Aktualizuj wyniki produktu";
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = "Dodaj wyniki elementu";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = "Aktualizuj wyniki elementu";
    var $_PHPSHOP_PRODUCT_CSV_UPLOAD = "Importuj z pliku CSV";
    var $_PHPSHOP_PRODUCT_FOLDERS = "Foldery produkt�w";
    
    // Product Category List
    var $_PHPSHOP_CATEGORY_LIST_MNU = "Wylistuj kategorie";
    var $_PHPSHOP_CATEGORY_LIST_LBL = "Drzewo kategorii";
    
    // Product Category Form
    var $_PHPSHOP_CATEGORY_FORM_MNU = "Dodaj kategori�";
    var $_PHPSHOP_CATEGORY_FORM_LBL = "Informacje o kategorii";
    var $_PHPSHOP_CATEGORY_FORM_NAME = "Nazwa kategorii";
    var $_PHPSHOP_CATEGORY_FORM_PARENT = "Kategoria nadrz�dna";
    var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = "Opis kategorii";
    var $_PHPSHOP_CATEGORY_FORM_PUBLISH = "Publikuj?";
    var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = "Strona kategorii";
    
    // Product Attribute List
    var $_PHPSHOP_ATTRIBUTE_LIST_MNU = "Wylistuj atrybuty";
    var $_PHPSHOP_ATTRIBUTE_LIST_LBL = "Lista atrybut�w dla";
    var $_PHPSHOP_ATTRIBUTE_LIST_NAME = "Nazwa atrybutu";
    var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = "Kolejno�� na li�cie";
    
    // Product Attribute Form
    var $_PHPSHOP_ATTRIBUTE_FORM_MNU = "Dodaj atrybut";
    var $_PHPSHOP_ATTRIBUTE_FORM_LBL = "Formularz atrybutu";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = "Nowy atrybut dla produktu";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = "Aktualizuj atrybut dla produktu";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = "Nowy atrybut dla elementu";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = "Aktualizuj atrybut dla elementu";
    var $_PHPSHOP_ATTRIBUTE_FORM_NAME = "Nazwa atrybutu";
    var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = "Kolejno�� na li�ci";
    
    // Product Price List
    var $_PHPSHOP_PRICE_LIST_MNU = "Wylistuj ceny";
    var $_PHPSHOP_PRICE_LIST_LBL = "Drzewo cen";
    var $_PHPSHOP_PRICE_LIST_FOR_LBL = "Cena dla";
    var $_PHPSHOP_PRICE_LIST_GROUP_NAME = "Nazwa grupy";
    var $_PHPSHOP_PRICE_LIST_PRICE = "Cena";
    var $_PHPSHOP_PRODUCT_LIST_CURRENCY = "Waluta";
    
    // Product Price Form
    var $_PHPSHOP_PRICE_FORM_MNU = "Dodaj cen�";
    var $_PHPSHOP_PRICE_FORM_LBL = "Informacja o cenie";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = "Nowa cena dla produktu";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = "Aktualizuj cen� dla produktu";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = "Nowa cena dla elementu";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = "Aktualizuj cen� dla elementu";
    var $_PHPSHOP_PRICE_FORM_PRICE = "Cena";
    var $_PHPSHOP_PRICE_FORM_CURRENCY = "Waluta";
    var $_PHPSHOP_PRICE_FORM_GROUP = "Grupa klient�w";
    
    
    /*#####################
    MODULE REPORT BASIC
    #####################*/
    # Some LABELs
    var $_PHPSHOP_REPORTBASIC_MOD = "Raporty";
    var $_PHPSHOP_RB_INDIVIDUAL = "Indywidualny wykaz produkt�ws";
    var $_PHPSHOP_RB_SALE_TITLE = "Raporty sprzeda�y";
    
    /* labels for rpt_sales */
    var $_PHPSHOP_RB_SALES_PAGE_TITLE = "Przegl�d przebiegu sprzeda�y";
    
    var $_PHPSHOP_RB_INTERVAL_TITLE = "Ustaw odst�p czasowy";
    var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = "Miesi�czny";
    var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = "Tygodniowy";
    var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = "Dzienny";
    
    var $_PHPSHOP_RB_THISMONTH_BUTTON = "Ten miesi�c";
    var $_PHPSHOP_RB_LASTMONTH_BUTTON = "Ostatni miesi�c";
    var $_PHPSHOP_RB_LAST60_BUTTON = "Ostatnie 60 dni";
    var $_PHPSHOP_RB_LAST90_BUTTON = "Ostatnie 90 dni";
    
    var $_PHPSHOP_RB_START_DATE_TITLE = "Pocz�tek";
    var $_PHPSHOP_RB_END_DATE_TITLE = "Koniec";
    var $_PHPSHOP_RB_SHOW_SEL_RANGE = "Poka� wybrany zakres";
    var $_PHPSHOP_RB_REPORT_FOR = "Raport dla ";
    var $_PHPSHOP_RB_DATE = "Data";
    var $_PHPSHOP_RB_ORDERS = "Zam�wienia";
    var $_PHPSHOP_RB_TOTAL_ITEMS = "Suma sprzedanych artyku��w";
    var $_PHPSHOP_RB_REVENUE = "Dochody";
    var $_PHPSHOP_RB_PRODLIST = "Wykaz produkt�w";
    
    
    
    /*#####################
    MODULE SHOP
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOP_MOD = "Sklep";
    var $_PHPSHOP_PRODUCT_THUMB_TITLE = "Zdj�cie";
    var $_PHPSHOP_PRODUCT_PRICE_TITLE = "Cena";
    var $_PHPSHOP_ORDER_STATUS_P = "Oczekuje";
    var $_PHPSHOP_ORDER_STATUS_C = "Potwierdzone";
    var $_PHPSHOP_ORDER_STATUS_X = "Anulowane";
    
    
    # Some messages
    var $_PHPSHOP_ORDER_BUTTON = "Zam�wienie";
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOPPER_MOD = "Klient";
    
    
    
    // Shopper List
    var $_PHPSHOP_SHOPPER_LIST_MNU = "Wylistuj klient�w";
    var $_PHPSHOP_SHOPPER_LIST_LBL = "Lista klient�w";
    var $_PHPSHOP_SHOPPER_LIST_USERNAME = "Nazwa u�ytkownika";
    var $_PHPSHOP_SHOPPER_LIST_NAME = "Pe�na nazwa";
    var $_PHPSHOP_SHOPPER_LIST_GROUP = "Grupa";
    
    // Shopper Form
    var $_PHPSHOP_SHOPPER_FORM_MNU = "Dodaj klienta";
    var $_PHPSHOP_SHOPPER_FORM_LBL = "Informacje o kliencie";
    var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = "Dane klienta";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = "Informacja";
    var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = "Informacje o wysy�ce";
    var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = "Dodaj adres";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = "Alias adresu";
    var $_PHPSHOP_SHOPPER_FORM_USERNAME = "Nazwa u�ytkownika";
    var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = "Imi�";
    var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = "Nazwisko";
    var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = "Drugie imi�";
    var $_PHPSHOP_SHOPPER_FORM_TITLE = "Tytu�";
    var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = "Nazwa klienta";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = "Has�o";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = "Potwierd� has�o";
    var $_PHPSHOP_SHOPPER_FORM_GROUP = "Grupa klienta";
    var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = "Nazwa firmy";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = "Adres 1";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = "Adres 2";
    var $_PHPSHOP_SHOPPER_FORM_CITY = "Miasto";
    var $_PHPSHOP_SHOPPER_FORM_STATE = "Wojew�dztwo";
    var $_PHPSHOP_SHOPPER_FORM_ZIP = "Kod pocztowy";
    var $_PHPSHOP_SHOPPER_FORM_COUNTRY = "Kraj";
    var $_PHPSHOP_SHOPPER_FORM_PHONE = "Telefon";
    var $_PHPSHOP_SHOPPER_FORM_FAX = "Faks";
    var $_PHPSHOP_SHOPPER_FORM_EMAIL = "Email";
    
    // Shopper Group List
    var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = "Wylistuj grupy klient�w";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = "Lista grup klient�w";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = "Nazwa grupy";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = "Opis grupy";
    
    
    // Shopper Group Form
    var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = "Formularz grupy klient�w";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = "Dodaj grup� klient�w";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = "Nazwa grupy";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = "Opis grupy";
    
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_STORE_MOD = "Sklep";
    
    
    // Store Form
    var $_PHPSHOP_STORE_FORM_MNU = "Edytuj sklep";
    var $_PHPSHOP_STORE_FORM_LBL = "Informacje o sklepie";
    var $_PHPSHOP_STORE_FORM_CONTACT_LBL = "Informacje kontaktowe";
    var $_PHPSHOP_STORE_FORM_FULL_IMAGE = "Logo sklepu";
    var $_PHPSHOP_STORE_FORM_UPLOAD = "Wczytaj logo";
    var $_PHPSHOP_STORE_FORM_STORE_NAME = "Nazwa sklepu";
    var $_PHPSHOP_STORE_FORM_COMPANY_NAME = "Nazwa firmy";
    var $_PHPSHOP_STORE_FORM_ADDRESS_1 = "Adres 1";
    var $_PHPSHOP_STORE_FORM_ADDRESS_2 = "Adres 2";
    var $_PHPSHOP_STORE_FORM_CITY = "Miasto";
    var $_PHPSHOP_STORE_FORM_STATE = "Wojew�dztwo";
    var $_PHPSHOP_STORE_FORM_COUNTRY = "Kraj";
    var $_PHPSHOP_STORE_FORM_ZIP = "Kod pocztowy";
    var $_PHPSHOP_STORE_FORM_PHONE = "Telefon";
    var $_PHPSHOP_STORE_FORM_CURRENCY = "Waluta";
    var $_PHPSHOP_STORE_FORM_CATEGORY = "Kategoria sklepu";
    var $_PHPSHOP_STORE_FORM_LAST_NAME = "Nazwisko";
    var $_PHPSHOP_STORE_FORM_FIRST_NAME = "Imi�";
    var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = "Drugie imi�";
    var $_PHPSHOP_STORE_FORM_TITLE = "Tytu�";
    var $_PHPSHOP_STORE_FORM_PHONE_1 = "Telefon 1";
    var $_PHPSHOP_STORE_FORM_PHONE_2 = "Telefon 2";
    var $_PHPSHOP_STORE_FORM_FAX = "Faks";
    var $_PHPSHOP_STORE_FORM_EMAIL = "Email";
    var $_PHPSHOP_STORE_FORM_IMAGE_PATH = "�cie�ka do obrazka";
    var $_PHPSHOP_STORE_FORM_DESCRIPTION = "Opis";
    
    
    
    var $_PHPSHOP_PAYMENT = "P�atno��";
    // Payment Method List
    var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = "Wylistuj metody p�atno�ci";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = "Lista metod p�atno�ci";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = "Nazwa";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = "Kod";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = "Rabat";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = "Grupa klient�w";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = "Typ metody p�atno�ci";
    
    // Payment Method Form
    var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = "Dodaj metod� p�atno�ci";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = "Formularz metody p�atno�ci";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = "Nazwa metody p�atno�ci";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = "Grupa klient�w";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = "Rabat";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = "Kod";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = "Kolejno�� na li�cie";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = "Typ metody p�atno�ci";
    
    
    
    /*#####################
    MODULE TAX
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_TAX_MOD = "Podatek";
    
    // User List
    var $_PHPSHOP_TAX_RATE = "Stawki podatkowe";
    var $_PHPSHOP_TAX_LIST_MNU = "Wylistuj stawki podatkowe";
    var $_PHPSHOP_TAX_LIST_LBL = "Lista stawek podatkowych";
    var $_PHPSHOP_TAX_LIST_STATE = "Podatek dla regionu lub stanu";
    var $_PHPSHOP_TAX_LIST_COUNTRY = "Podatek dla kraju";
    var $_PHPSHOP_TAX_LIST_RATE = "Stawka podatku";
    
    // User Form
    var $_PHPSHOP_TAX_FORM_MNU = "Dodaj stawk� podatku";
    var $_PHPSHOP_TAX_FORM_LBL = "Dodaj informacj� o podatku";
    var $_PHPSHOP_TAX_FORM_STATE = "Podatek dla regionu lub stanu";
    var $_PHPSHOP_TAX_FORM_COUNTRY = "Podatek dla kraju";
    var $_PHPSHOP_TAX_FORM_RATE = "Stawka podatku (dla 16% => wpisz 0.16)";
    
    
    
    
    /*#####################
    MODULE VENDOR
    #####################*/
    
    
    
    # Some LABELs
    var $_PHPSHOP_VENDOR_MOD = "Dostawca";
    var $_PHPSHOP_VENDOR_ADMIN = "Dostawcy";
    
    
    // Vendor List
    var $_PHPSHOP_VENDOR_LIST_MNU = "Wylistuj dostawc�w";
    var $_PHPSHOP_VENDOR_LIST_LBL = "Lista dostawc�w";
    var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = "Nazwa dostawcy";
    var $_PHPSHOP_VENDOR_LIST_ADMIN = "Admin";
    
    // Vendor Form
    var $_PHPSHOP_VENDOR_FORM_MNU = "Dodaj dostawc�";
    var $_PHPSHOP_VENDOR_FORM_LBL = "Dodaj informacj�";
    var $_PHPSHOP_VENDOR_FORM_INFO_LBL = "Informacja o dostawcy";
    var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = "Informacje kontaktowe";
    var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = "Obrazek";
    var $_PHPSHOP_VENDOR_FORM_UPLOAD = "Wgraj obrazek";
    var $_PHPSHOP_VENDOR_FORM_STORE_NAME = "Nazwa sklepu dostawcy";
    var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = "Nazwa firmy dostawcy";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = "Adres 1";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = "Adres 2";
    var $_PHPSHOP_VENDOR_FORM_CITY = "Miasto";
    var $_PHPSHOP_VENDOR_FORM_STATE = "Wojew�dztwo";
    var $_PHPSHOP_VENDOR_FORM_COUNTRY = "Kraj";
    var $_PHPSHOP_VENDOR_FORM_ZIP = "Kod pocztowy";
    var $_PHPSHOP_VENDOR_FORM_PHONE = "Telefon";
    var $_PHPSHOP_VENDOR_FORM_CURRENCY = "Waluta";
    var $_PHPSHOP_VENDOR_FORM_CATEGORY = "Kategoria dostawcy";
    var $_PHPSHOP_VENDOR_FORM_LAST_NAME = "Nazwisko";
    var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = "Imi�";
    var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = "Drugie imi�";
    var $_PHPSHOP_VENDOR_FORM_TITLE = "Tytu�";
    var $_PHPSHOP_VENDOR_FORM_PHONE_1 = "Telefon 1";
    var $_PHPSHOP_VENDOR_FORM_PHONE_2 = "Telefon 2";
    var $_PHPSHOP_VENDOR_FORM_FAX = "Faks";
    var $_PHPSHOP_VENDOR_FORM_EMAIL = "Email";
    var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = "�cie�ka do obrazka";
    var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = "Opis";
    
    
    // Vendor Category List
    var $_PHPSHOP_VENDOR_CAT_LIST_MNU = "Wylistuj kategorie dostawc�w";
    var $_PHPSHOP_VENDOR_CAT_LIST_LBL = "Lista kategorii dostawc�w";
    var $_PHPSHOP_VENDOR_CAT_NAME = "Nazwa kategorii";
    var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = "Opis kategorii";
    var $_PHPSHOP_VENDOR_CAT_VENDORS = "Dostawcy";
    
    // Vendor Category Form
    var $_PHPSHOP_VENDOR_CAT_FORM_MNU = "Dodaj kategori� dostawc�w";
    var $_PHPSHOP_VENDOR_CAT_FORM_LBL = "Formularz kategorii dostawc�w";
    var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = "Informacje o kategorii";
    var $_PHPSHOP_VENDOR_CAT_FORM_NAME = "Nazwa kategorii";
    var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = "Opis kategorii";
    
    /*#####################
    MODULE MANUFACTURER
    #####################*/

    # Some LABELs
    var $_PHPSHOP_MANUFACTURER_MOD = "Producent";
    var $_PHPSHOP_MANUFACTURER_ADMIN = "Producenci";
    
    
    // Manufacturer List
    var $_PHPSHOP_MANUFACTURER_LIST_MNU = "Wylistuj producent�w";
    var $_PHPSHOP_MANUFACTURER_LIST_LBL = "Lista producent�w";
    var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = "Nazwa producenta";
    var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = "Admin";
    
    // Manufacturer Form
    var $_PHPSHOP_MANUFACTURER_FORM_MNU = "Dodaj producenta";
    var $_PHPSHOP_MANUFACTURER_FORM_LBL = "Dodaj informacj�";
    var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = "Informacje o producencie";
    var $_PHPSHOP_MANUFACTURER_FORM_NAME = "Nazwa producenta";
    var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = "Kategoria producent�w";
    var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = "Email";
    var $_PHPSHOP_MANUFACTURER_FORM_URL = "Adres URL strony producenta";
    var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = "Opis";
    
    
    // Manufacturer Category List
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = "Wylistuj kategorie producent�w";
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = "Lista kategorii producent�w";
    var $_PHPSHOP_MANUFACTURER_CAT_NAME = "Nazwa kategorii";
    var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = "Opis kategorii";
    var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = "Producenci";
    
    // Manufacturer Category Form
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = "Dodaj kategori� producent�w";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = "Formularz kategorii producent�w";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = "Informacje o kategorii";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = "Nazwa kategorii";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = "Opis kategorii";
    
    
    /*#####################
    Modul HELP
    #####################*/
    var $_PHPSHOP_HELP_MOD = "Pomoc";
    
    // 210104 start
    
    var $_PHPSHOP_CART_ACTION = "Aktualizuj";
    var $_PHPSHOP_CART_UPDATE = "Aktualizuj ilo�� produkt�w w koszyku";
    var $_PHPSHOP_CART_DELETE = "Usu� produkt z koszyka";
    
    //shopbrowse form
    
    var $_PHPSHOP_PRODUCT_PRICETAG = "Cena";
    var $_PHPSHOP_PRODUCT_CALL = "Cena przez telefon";
    var $_PHPSHOP_PRODUCT_PREVIOUS = "Poprzedni";
    var $_PHPSHOP_PRODUCT_NEXT = "Nast�pny";
    
    //ro_basket
    
    var $_PHPSHOP_CART_TAX = "Podatek";
    var $_PHPSHOP_CART_SHIPPING = "Koszty wysy�ki";
    var $_PHPSHOP_CART_TOTAL = "Suma";
    
    //CHECKOUT.INDEX
    
    var $_PHPSHOP_CHECKOUT_NEXT = "Nast�pny";
    var $_PHPSHOP_CHECKOUT_REGISTER = "Zarejestruj si�";
    
    //CHECKOUT.CONFIRM
    
    var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = "Dane klienta";
    var $_PHPSHOP_CHECKOUT_CONF_COMPANY = "Firma";
    var $_PHPSHOP_CHECKOUT_CONF_NAME = "Nazwa";
    var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = "Adres";
    var $_PHPSHOP_CHECKOUT_CONF_PHONE = "Telefon";
    var $_PHPSHOP_CHECKOUT_CONF_FAX = "Faks";
    var $_PHPSHOP_CHECKOUT_CONF_EMAIL = "Email";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = "Informacje o wysy�ce";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = "Firma";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = "Nazwa";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = "Adres";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = "Telefon";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = "Faks";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = "Informacje o p�atno�ci";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = "Nazwisko na karcie";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = "Metoda p�atno�ci";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = "Numer karty kredytowej";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = "Data wyga�ni�cia";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = "Potwierdzenie zam�wienia";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = "informacja wymagana je�li wybrana zosta�a p�atno�� kart� kredytow�";
    
    
    var $_PHPSHOP_ZONE_MOD = "Strefa wysy�ki";
    
    var $_PHPSHOP_ZONE_LIST_MNU = "Wylistuj strefy";
    var $_PHPSHOP_ZONE_FORM_MNU = "Dodaj stref�";
    var $_PHPSHOP_ZONE_ASSIGN_MNU = "Przypisz strefy";
    
    // assign zone List
    var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = "Kraj";
    var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = "Aktualna strefa";
    var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = "Przypisz do strefy";
    var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = "Aktualizuj";
    var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = "Przypisz strefy";
    
    // zone Form
    var $_PHPSHOP_ZONE_FORM_NAME_LBL = "Nazwa strefy";
    var $_PHPSHOP_ZONE_FORM_DESC_LBL = "Opis strefy";
    var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = "Koszty na produkt w strefie";
    var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = "Limit koszt�w strefy";
    
    // List of zones
    var $_PHPSHOP_ZONE_LIST_LBL = "Lista stref";
    var $_PHPSHOP_ZONE_LIST_NAME_LBL = "Nazwa strefy";
    var $_PHPSHOP_ZONE_LIST_DESC_LBL = "Opis strefy";
    var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = "Koszty na produkt w strefie";
    var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = "Limit koszt�w strefy";
    
    var $_PHPSHOP_LOGIN_FIRST = "Prosimy o zalogowanie si� lub rejestracj� (u�ywaj�c modu�u logowania).<br>Dzi�kujemy.";
    var $_PHPSHOP_STORE_FORM_TOS = "Zasady u�ytkowania";
    var $_PHPSHOP_AGREE_TO_TOS = "Najpierw prosimy zaakceptowa� nasze zasady u�ytkowania.";
    var $_PHPSHOP_I_AGREE_TO_TOS = "Akceptuj� zasady u�ytkowania";
    
    var $_PHPSHOP_LEAVE_BLANK = "(pozostaw puste je�li nie masz <br /> indywidualnego pliku php!)";
    var $_PHPSHOP_RETURN_LOGIN = "Powracaj�cy klienci: Prosimy o zalogowanie si�";
    var $_PHPSHOP_NEW_CUSTOMER = "Nowi? Prosimy wprowadzi� swoje dane";
    var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = "Konto klienta:";
    var $_PHPSHOP_ACC_ORDER_INFO = "Informacje o zam�wieniu";
    var $_PHPSHOP_ACC_UPD_BILL = "Tutaj mo�esz zaktualizowa� swoje dane.";
    var $_PHPSHOP_ACC_UPD_SHIP = "Tutaj mo�esz doda� lub zarz�dza� adresami do wysy�kis.";
    var $_PHPSHOP_ACC_ACCOUNT_INFO = "Informacje o koncie";
    var $_PHPSHOP_ACC_SHIP_INFO = "Informacje o wysy�ce";
    var $_PHPSHOP_ACC_NO_ORDERS = "Brak zam�wie� do wy�wietlenia";
    var $_PHPSHOP_ACC_BILL_DEF = "- domy�lny (taki sam jak na rachunku)";
    var $_PHPSHOP_SHIPTO_TEXT = "Mo�esz doda� adresy docelowe wysy�ki do swojego konta. Prosimy o zastanowienie si� nad odpowiednim aliasem lub kodem dla lokalizacji, kt�r� wybierzesz poni�ej.";
    var $_PHPSHOP_CONFIG = "Konfiguracja";
    var $_PHPSHOP_USERS = "U�ytkownicy";
    var $_PHPSHOP_IS_CC_PAYMENT = "jest p�atno�ci� kart� kredytow�?";
    
    /*#####################################################
     MODULE SHIPPING
    #######################################################*/
    var $_PHPSHOP_SHIPPING_MOD = "Wysy�ka";
    var $_PHPSHOP_SHIPPING_MENU_LABEL = "Wysy�ka";
    
    var $_PHPSHOP_CARRIER_LIST_MNU = "Spedytor";
    var $_PHPSHOP_CARRIER_LIST_LBL = "Lista spedytor�w";
    var $_PHPSHOP_RATE_LIST_MNU = "Tabela stawek wysy�kowych";
    var $_PHPSHOP_RATE_LIST_LBL = "Lista stawek wysy�kowych";
    var $_PHPSHOP_CARRIER_LIST_NAME_LBL = "Nazwa";
    var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = "Kolejno�� na li�cie";
    
    var $_PHPSHOP_CARRIER_FORM_MNU = "Utw�rz spedytora";
    var $_PHPSHOP_CARRIER_FORM_LBL = "Utw�rz/edytuj spedytora";
    var $_PHPSHOP_RATE_FORM_MNU = "Utw�rz stawk� wysy�kow�";
    var $_PHPSHOP_RATE_FORM_LBL = "Utw�rz/edytuj stawk� wysy�kow�";
    
    var $_PHPSHOP_RATE_FORM_NAME = "Opis stawki wysy�kowej";
    var $_PHPSHOP_RATE_FORM_CARRIER = "Spedytor";
    var $_PHPSHOP_RATE_FORM_COUNTRY = "Kraj";
    var $_PHPSHOP_RATE_FORM_ZIP_START = "pocz�tek zakresu kodu pocztowego";
    var $_PHPSHOP_RATE_FORM_ZIP_END = "koniec zakresu kodu pocztowego";
    var $_PHPSHOP_RATE_FORM_WEIGHT_START = "Najni�sza waga";
    var $_PHPSHOP_RATE_FORM_WEIGHT_END = "Najwy�sza waga";
    var $_PHPSHOP_RATE_FORM_VALUE = "Op�ata";
    var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = "Twoja op�ata za paczk�";
    var $_PHPSHOP_RATE_FORM_CURRENCY = "Waluta";
    var $_PHPSHOP_RATE_FORM_VAT_ID = "Identyfikator VAT";
    var $_PHPSHOP_RATE_FORM_LIST_ORDER = "Kolejno�� na li�cie";
    
    var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = "Spedytor";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = "Opis stawki wysy�kowej";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = "Waga od ...";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = "... do";
    var $_PHPSHOP_CARRIER_FORM_NAME = "Firma spedycyjna";
    var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = "Kolejno�� na li�cie";
    
    var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = "B��D: ID Spedytora ju� istnieje.";
    var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = "B��D: Wybierz spedytora.";
    var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = "B��D: Istnieje przynajmniej jedna stawka wysy�kowa, wpierw usu� stawki przypisane do tego spedytora";
    var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = "B��D: Niemo�liwe odnalezienie spedytora o podanym ID.";
    
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = "B��D: Wybierz spedytora.";
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = "B��D: Niemo�liwe odnalezienie spedytora o podanym ID.";
    var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = "B��D: Deskryptor stawki jest wymagany.";
    var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = "B��D: Kraj docelowy jest niepoprawny. Wi�cej ni� jeden kraj mo�e by� rozdzielony \";\".";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = "B��D: Najni�sza waga jest wymagana";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = "B��D: Najwy�sza waga jes wymagana";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = "B��D: Najni�sza waga musi by� mniejsza od najwy�szej wagi";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = "B��D: Op�ata wysy�kowa jest wymagana";
    var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = "B��D: Wybierz walut�";
    
    var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = "B��D: Stawka wysy�kowa jest wymagana";
    
    var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = "Prosz� wybra�";
    var $_PHPSHOP_INFO_MSG_CARRIER = "Spedytor";
    var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = "Stawka wysy�kowa";
    var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = "Cena";
    var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = "0 (-brak-)";
    /*#####################################################
     END: MODULE SHIPPING
    #######################################################*/
    
    var $_PHPSHOP_PAYMENT_FORM_CC = "Karta kredytowa";
    var $_PHPSHOP_PAYMENT_FORM_USE_PP = "U�yj procesora p�atno�ci";
    var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = "Debet bankowy";
    var $_PHPSHOP_PAYMENT_FORM_AO = "Tylko adres / za pobraniem";
    var $_PHPSHOP_CHECKOUT_MSG_2 = "Prosz� wybra� adres wysy�ki!";
    var $_PHPSHOP_CHECKOUT_MSG_3 = "Prosz� wybra� metod� wysy�ki!";
    var $_PHPSHOP_CHECKOUT_MSG_4 = "Prosz� wybra� metod� p�atno�ci!";
    var $_PHPSHOP_CHECKOUT_MSG_99 = "Prosz� sprawdzi� wprowadzone dane i potwierdzi� zam�wienie!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = "Prosz� wybra� metod� wysy�ki.";
    var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = "Prosz� wybra� inn� metod� wysy�ki.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = "Prosz� wybra� metod� p�atno�ci.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = "Prosz� wpisa� numer swojej karty kredytowej.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = "Prosz� wpisa� nazwisko znajduj�ce si� na karcie kredytowej.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = "Wpisany numer karty kredytowej jest nieprawid�owy.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = "Prosz� wpisa� miesi�c wyga�ni�cia wa�no�ci karty kredytowej.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = "Prosze wpisa� rok wyga�ni�cia wa�no�ci karty kredytowej.";
    var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = "Data wyga�ni�cia jest nieprawid�owa.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = "Prosz� wybra� adres wysy�ki.";
    var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = "Niepoprawny numer konta.";
    var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = "Nie ma nic w koszyku!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = "B��D: Prosz� wybra� spedytora!";
    var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = "B��D: Wybrana stawka wysy�ki nie zosta�a odnaleziona!";
    var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = "B��D: Tw�j adres wysy�ki nie zosta� odnaleziony!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = "B��D: Brak danych o karcie kredytowej...";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = "B��D: Numer karty kredytowej nie znaleziony!";
    var $_PHPSHOP_CHECKOUT_ERR_TEST = "Przepraszamy, ale numer karty kredytowej, kt�ry zosta� u�yty jest numerem testowym!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = "Numer ID u�ytkownika nie zosta� odnaleziony w bazie danych!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = "Nazwa posiadacza Twojego rachunku bankowego nie zosta�a wprowadzona.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = "Numer IBAN nie zosta� wprowadzony.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = "Numer Twojego konta bankowego nie zosta� wprowadzony.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = "Numer rozliczeniowy Twojego banku nie zosta� wprowadzony.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = "Nazwa Twojego banku nie zosta�a wprowadzona.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = "Proces zam�wienia wymaga prawid�owej procedury!";

    var $_PHPSHOP_CHECKOUT_MSG_LOG = "Informacja o p�atno�ci przechwycona dla dalszego przetwarzania.<br />";
    
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = "Minimalna warto�� zam�wienia nie zosta�a jeszcze osi�gni�ta.";
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = "Minimalna warto�� zam�wienia w naszym sklepie wynosi:";
    var $_PHPSHOP_CHECKOUT_PAYMENT_CC = "P�atno�� kart� kredytow�";
    var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = "inne metody p�atno�ci";
    var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = "Prosz� wybra� metod� p�atno�ci:";
    
    var $_PHPSHOP_STORE_FORM_MPOV = "Minimalna warto�� zam�wienia dla Twojego sklepu";
    var $_PHPSHOP_ACCOUNT_BANK_TITLE = "Informacja o rachunku bankowym";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = "Numer rachunku";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = "Krajowy numer rozliczeniowy banku";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = "Nazwa banku";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = "IBAN";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = "Posiadacz rachunku";
    
    var $_PHPSHOP_MODULES = "Modu�y";
    var $_PHPSHOP_FUNCTIONS = "Funkcje";
    var $_PHPSHOP_SPECIAL_PRODUCTS = "Produkty w promocji";
    
    var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = "Je�li chcesz mo�esz zostawi� dla nas notatk� do��czon� do Swojego zam�wienia";
    var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = "Notatka klienta";
    var $_PHPSHOP_INCLUDING_TAX = "(w��czaj�c \$tax % VAT)";
    var $_PHPSHOP_PLEASE_SEL_ITEM = "Prosimy wybra� element";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = "Element";

    // DOWNLOADS
    
    var $_PHPSHOP_DOWNLOADS_TITLE = "Obszar pobierania";
    var $_PHPSHOP_DOWNLOADS_START = "Rozpocznij pobieranie";
    var $_PHPSHOP_DOWNLOADS_INFO = "Prosimy wpisa� numer ID pobierania, otrzymany emailem, a nast�pnie klikn�� 'Rozpocznij pobieranie'.";
    var $_PHPSHOP_DOWNLOADS_ERR_EXP = "Przepraszamy, ale Twoje pobieranie wygas�o";
    var $_PHPSHOP_DOWNLOADS_ERR_MAX = "Przepraszamy, ale zosta�a osi�gni�ta maksymalna liczba pobra�";
    var $_PHPSHOP_DOWNLOADS_ERR_INV = "Niepoprawny numer ID pobierania!";
    var $_PHPSHOP_DOWNLOADS_ERR_SEND = "Niemo�liwe wys�anie wiadomo�ci do ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG = "Wiadomo�� wys�ana do ";
    var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = "Informacje o pobieraniu";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = "zam�wione pliki s� gotowe do pobrania";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = "Prosimy wpisa� nast�puj�cy numer ID pobierania w naszym Obszarze Pobierania: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = "maksymalna liczba pobra� dla ka�dego z plik�w wynosi: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = "Mo�esz pobiera� przez {expire} dni po pierwszym pobraniu";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = "Pytania? Problemy?";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = "Download-Info by "; // e.g. Download-Info by "Storename"
    var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = "produkt udost�pniony do pobierania?"; 
    
    var $_PHPSHOP_PAYPAL_THANKYOU = "Dzi�kujemy za dokonan� p�atno��. 
        Transakcja przebieg�a pomy�lnie. Otrzymasz potwierdzenie transakcji od PayPal poprzez email. 
        Mo�esz teraz kontynuowa� lub zalogowa� si� na <a href=http://www.paypal.com>www.paypal.com</a>, aby zobaczy� szczeg�y transakcji.";
    var $_PHPSHOP_PAYPAL_ERROR = "Podczas transakcji wyst�pi� b��d. Stan Twojego zam�wienia nie mo�e zosta� zaktualizowany.";
    
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = "Dzi�kujmy za dokonane zakupy. Informacje o Twoim zam�wieniu s� nast�puj�ce.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = "Dzi�kujemy za skorzystanie z naszych us�ug.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = "Pytania? Problemy?";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = "Otrzymano nast�puj�ce zam�wienie.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = "Obejrzyj zam�wienie poda�aj�c za poni�szym linkiem.";
    
    var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = "Ujemne warto�ci s� niedozwolone.";
    var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = "Prosimy wpisa� poprawn� ilo�� dla tego produktu.";
    
    var $_PHPSHOP_CART_STOCK_1 = "Wybrana ilo�� przekracza aktualny stan magazynowy tego produktu. ";
    var $_PHPSHOP_CART_STOCK_2 = "Obecnie w magazynie znajduje si� \$product_in_stock produkt(�w). ";
    var $_PHPSHOP_CART_STOCK_3 = "Kliknij tutaj, aby zapisa� na li�cie oczekuj�cych.";
    var $_PHPSHOP_CART_SELECT_ITEM = "Prosimy o wyb�r dodatkowych cech produktu na stronie z jego opisem !";
    
    var $_PHPSHOP_REGISTRATION_FORM_NONE = "brak";
    var $_PHPSHOP_REGISTRATION_FORM_MR = "Pan";
    var $_PHPSHOP_REGISTRATION_FORM_MRS = "Pani";
    var $_PHPSHOP_REGISTRATION_FORM_DR = "Dr";
    var $_PHPSHOP_REGISTRATION_FORM_PROF = "Prof.";
    var $_PHPSHOP_DEFAULT = "Domy�lny";
    
  /*#####################################################
    MODULE AFFILIATE
  #######################################################*/
    var $_PHPSHOP_AFFILIATE_MOD   = "Zarz�dzanie Programem Partnerskim";
    
    // Affiliate List
    var $_PHPSHOP_AFFILIATE_LIST_MNU		= "Wylistuj Partner�w";
    var $_PHPSHOP_AFFILIATE_LIST_LBL		= "Lista Partner�w";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME	= "Nazwa partnera";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = "Aktywny";
    var $_PHPSHOP_AFFILIATE_LIST_RATE		= "Stawka";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = "Miesi�czna suma";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION ="Miesi�czna prowizja";
    var $_PHPSHOP_AFFILIATE_LIST_ORDERS = "Wylistuj zam�wienia";
    
    // Affiliate Email
    var $_PHPSHOP_AFFILIATE_EMAIL_MNU		= "Wy�lij email do Partner�w";
    var $_PHPSHOP_AFFILIATE_EMAIL_LBL		= "Wy�lij email do Partner�w";
    var $_PHPSHOP_AFFILIATE_EMAIL_WHO	= "Do kogo wys�a� email(* = WSZYSCY)";
    var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT		= "Tw�j adres email";
    var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = "Temat";
    var $_PHPSHOP_AFFILIATE_EMAIL_STATS	 = "Za��cz aktualne statystyki";
    
    // Affiliate Form
    var $_PHPSHOP_AFFILIATE_FORM_RATE		= "Stawka prowizji (procent)";
    var $_PHPSHOP_AFFILIATE_FORM_ACTIVE		= "Aktywny?";
    
    var $_PHPSHOP_DELIVERY_TIME = "Przeci�tny czas dostawy";
    var $_PHPSHOP_DELIVERY_INFORMATION = "Informacje o dostawie";
    var $_PHPSHOP_MORE_CATEGORIES = "wi�cej kategorii";
    var $_PHPSHOP_AVAILABILITY = "Dost�pno��";
    var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = "Ten produkt jest obecnie niedost�pny.";
    var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = "B�dzie znowu dost�pny: ";
    
    var $_PHPSHOP_STATISTIC_SUMMARY = "Podsumowanie";
    var $_PHPSHOP_STATISTIC_STATISTICS = "Statystyki";
    var $_PHPSHOP_STATISTIC_CUSTOMERS = "Klienci";
    var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = "aktywnych produkt�w";
    var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = "nieaktywnych produkt�w";
    var $_PHPSHOP_STATISTIC_SUM = "Suma";
    var $_PHPSHOP_STATISTIC_NEW_ORDERS = "Nowe zam�wienia";
    var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = "Nowi klienci";
    
    
	//Waiting list : file /administrator/components/com_phpshop/html/shop.waiting_list.php
	var $_PHPSHOP_WAITING_LIST_MESSAGE = "Prosimy o podanie swojego adresu email, w celu otrzymania powiadomienia o dost�pno�ci produktu. 
                                        Nie b�dziemy udost�pnia�, wypo�ycza�, sprzedawa� lub u�ywa� tego adresu email do �adnych innych cel�w, jak tylko 
                                        do poinformowania kiedy produkt b�dzie zn�w w magazynie.<br /><br />Dzi�kujemy!";
	var $_PHPSHOP_WAITING_LIST_THANKS = "Dzi�kujemy za cierpliwo��! <br />Zostaniesz powiadomiony, jak tylko uzupe�nimy braki magazynowe.";
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = "Powiadom Mnie!";
	
	//Checkout : file /administrator/components/com_phpshop/html/checkout.thankyou.php
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = "Widok do druku";
  
  /**************************Admin.show_cfg.php in apparition order ;-)**************************************/
	
	/* PAGE 1 */
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = "Prosimy wybra� Authorize.net lub CyberCash";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = " Stan pliku konfiguracji:";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = "jest zapisywalny";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = "nie jest zapisywalny";
	
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = "Og�lne";
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = "�cie�ki & adresy URL";
	var $_PHPSHOP_ADMIN_CFG_SITE = "Strona";
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = "Wysy�ka";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = "Zam�wienie";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = "Pobierania";
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = "P�atno�ci";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = "U�yj tylko jako katalogu";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = "Je�li zaznaczysz t� opcj�, wy��czysz wszystkie funkcje koszyka.";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = "Pokazuj ceny";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = "Pokazuj ceny zawieraj�ce podatek?";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = "Ustaw opcj� czy kupuj�cy widzi ceny wraz z podatkiem, czy bez niego.";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = "Zaznacz, aby pokazywa� ceny. Niekt�rzy nie �ycz� sobie, aby ceny by�y pokazywane, w przypadku gdy u�ywa si� funkcji katalogu.";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = "Wirtualny podatek";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = "Okre�la czy artyku�y posiadaj�ce zerow� wag� s� obj�te podatkiem czy nie. Zmodyfikuj ps_checkout.php->calc_order_taxable(), aby to zmieni�.";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = "Forma podatku:";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = "Bazuj�cy na adresie wysy�kowym";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = "Bazuj�cy na adresie sprzedawcy";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = "Okre�la, kt�ra stawka podatkowa jest u�ywana do wyliczenia podatku:<br />
                                                <ul><li>ta ze stanu/kraju z kt�rego pochodzi w�a�ciciel sklepu</li><br/>
                                                <li>lub ta sk�d pochodzi kupuj�cy.</li></ul>";
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = "W��cz r�norodne stawki podatkowe?";
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = "Zaznacz, je�li posiadasz w ofercie produkty obj�te r�nymi stawkami podatkowymi (np. 7% dla ksi��ek i �ywno�ci, 22% dla innych rzeczy)";
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = "Odejmij zni�ki przed naliczeniem podatku/koszt�w przesy�ki?";
  var $_PHPSHOP_ADMIN_CFG_REVIEW = "W��cz System Komentarzy/Oceny produkt�w przez klient�w";
  var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = "Je�li w��czony, zezwalasz klientom na <strong>ocen� </strong> i na <strong>pisanie komentarzy</strong> o produktach. <br />
                                                                                Dzi�ki czemu mog� opisa� swoje wra�enia o produkcie dla innych klient�w.<br />";
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = "Ustaw opcj� czy odejmowa� rabat dla wybranej p�atno�ci PRZED (zaznaczone) lub PO naliczeniu podatku i koszt�w przesy�ki.";
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = "Klienci mog� podawa� dane rachunku bankowego?";
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = "Zaznacz je�li chcesz, by Twoi klienci mieli mo�liwo�� wprowadzania danych, dotycz�cych ich rachunk�w bankowych podczas procesu rejestracji w sklepie.";
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = "Klienci mog� wybiera� stan/region?";
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = "Zaznacz je�li chcesz, by Twoi klienci mieli mo�liwo�� wyboru stanu / regionu podczas procesu rejestracji w sklepie.";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = "Musi zaakceptowa� Zasady U�ytkowania?";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = "Zaznacz je�li chcesz, by klient musia� zaakceptowa� Zasady U�ytkowania zanim zarejestruje sie w Twoim sklepie.";
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = "Sprawd� stany magazynowe?";
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = "Ustaw czy maj� by� sprawdzane stany magazynowe produktu, gdy u�ytkownik doda element do koszyka. 
                                                 Je�li opcja zosta�a ustawiona, u�ytkownik nie b�dzie m�g� doda� wi�cej produkt�w do koszyka ni� znajduje si� w magazynie.";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = "W��cz Program Partnerski?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = "Opcja ta w��cza �ledzenie partner�w w cz�ci u�ytkowej sklepu. W��cz j� je�li doda�e� partner�w w panelu administracyjnym..";
	
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = "Format mail'a z zam�wieniem:";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = "Wiadomo�� tekstowa";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = "Wiadomo�� HTML";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = "Okre�la to w jaki spos�b skonfigurowane s� emaile potwierdzaj�ce zam�wienie:<br />
                                                                                        <ul><li>jako zwyk�y tekst</li>
                                                                                        <li>lub jako wiadomo�� HTML z obrazkami.</li></ul>";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = "Zezwalaj na zarz�dzanie z cz�ci u�ytkowej sklepu u�ytkownikom nie posiadaj�cym dost�pu do panelu administracyjnego?";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = "To ustawienie pozwala na w��czenie zarz�dzania sklepem z cz�ci u�ytkowej, u�ytkownikom posiadaj�cym uprawnienia storeadmin (administrator sklepu), ale nie maj�cym dost�pu do panelu administracyjnego Mambo (np. Registered / Editor).";
	
	/* PAGE 2 */
	var $_PHPSHOP_ADMIN_CFG_URL = "URL";
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = "Adres URL do Twojej strony. Zazwyczaj identyczny z Twoim adresem URL do Mambo (zako�czony znakiem uko�nika (slash)!)";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = "SECUREURL";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = "Bezpieczny adres URL do Twojej strony. (https - zako�czony znakiem uko�nika (slash)!)";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = "COMPONENTURL";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = "Adres URL do komponentu mambo-phpShop. (zako�czony znakiem uko�nika (slash)!)";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = "IMAGEURL";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = "Adres URL do katalogu obrazk�w komponentu mambo-phpShop.(zako�czony znakiem uko�nika (slash)!)";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = "ADMINPATH";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = "�cie�ka do Twojego katalogu komponentu mambo-phpShop.";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = "CLASSPATH";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = "�cie�ka do Twojego katalogu klas phpShop.";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = "PAGEPATH";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = "�cie�ka do Twojego katalogu html phpShop.";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = "IMAGEPATH";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = "�cie�ka do Twojego katalogu shop_image phpShop.";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = "HOMEPAGE";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = "Jest to strona, kt�ra b�dzie �adowana domy�lnie.";	
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = "ERRORPAGE";
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = "Jest to domy�lna strona s�u��ca do wy�wietlania wiadomo�ci o b��dach.";	
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = "DEBUGPAGE";
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = "Jest to domy�lna strona s�u��ca do wy�wietlania wiadomo�ci debuger'a.";
	var $_PHPSHOP_ADMIN_CFG_DEBUG = "DEBUG ?";
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = "DEBUG?  	   	W��cza wyj�cie debugera. Spowoduje to, �e strona DEBUGPAGE b�dzie wy�wietlana na dole ka�dej podstrony. Jest to bardzo pomocne podczas procesu wdra�ania sklepu, gdy� pokazuje zawarto�� koszyka, warto�ci p�l formularzy, itd.";

  /* PAGE 3 */

	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = "FLYPAGE";
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = "Jest to domy�lna strona s�u��ca do wy�wietlania szczeg��w produktu.";
  var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = "Szablon kategorii";
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = "Definiuje domy�lny szablon kategorii s�u��cy do wy�wietlania produkt�w w danej kategorii.<br />
                                                       Mo�esz tworzy� nowe szablony przez przerabianie istniej�cych plik�w <br />
                                                       (kt�re mieszcz� si� w katalogu <strong>COMPONENTPATH/html/templates/</strong> i zaczynaj� od browse_)";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = "Domy�lna liczba produkt�w w rz�dzie";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = "Definiuje liczb� produkt�w w rz�dzie. <br />
                                                     Przyk�ad: Je�li utawisz jej warto�� na 4, szablon kategorii wy�wietli 4 produkty na rz�d";
  
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = "obrazek \"brak obrazka\"";
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = "Ten obrazek zostanie wy�wietlony, je�eli nie jest dost�pny obrazek produktu.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = "SEARCH ROWS";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = "Okre�la liczb� rz�d�w na stronie, podczas wy�wietlania listy wynik�w wyszukiwania.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = "SEARCH COLOR 1";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = "Okre�la kolor nieparzystych rz�d�w na li�cie wynik�w.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = "SEARCH COLOR 2";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = "Okre�la kolor parzystych rz�d�w na li�cie wynik�w.";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = "MAXIMUM ROWS";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = "Ustala liczb� pozycji pokazywanych na li�cie wyboru z dokonanymi zam�wieniami.";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = "Poka� stopk� \"powered by mambo-phpShop\" ?";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = "Wy�wietla w stopce obrazek powered-by-mambo-phpShop.";
	
	
	/* PAGE 4 */
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = "Wybierz metod� wysy�ki dla Twojego sklepu";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = "Standardowy modu� wysy�ki z indywidualnie konfigurowanymi spedytorami i stawkami. <strong>ZALECANY !</strong>";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = "  	Zone Shipping Module Country Version 1.0<br />
                                                            Aby zaczerpn�� wi�cej informacji na temat tego modu�u odwied� stron� <a href=\"http://ZephWare.com\">http://ZephWare.com</a><br />
                                                            lub skontaktuj si� z <a href=\"mailto:zephware@devcompany.com\">ZephWare.com</a><br /> Zaznacz je�li chcesz w��czy� modu� wysy�ek strefowych";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = "Narz�dzia kalkulacji wysy�ek UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = "Kod dost�pu UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = "Tw�j kod dostepu UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = "Id u�ytkownika UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = "ID u�ytkownika, kt�re otrzyma�e� od UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = "Has�o UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = "Has�o do Twojego konta UPS";
	  
  var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = "Modu� InterShipper. Zaznacz wy��cznie je�li posiadasz konto na Intershipper.com";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = "Wy��cz wyb�r metod wysy�ki. Wybierz je�li Twoi klienci kupuj� pobieralne produkty, kt�re nie musz� by� wysy�ane.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = "Has�o InterShipper";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = "Twoje has�o do konta Intershipper.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = "Adres email InterShipper";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = "Tw�j adres email do konta Intershipper.";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = "ENCODE KEY";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = "Klucz u�ywany do szyfrowania danych przechowywanych w bazie. Oznacza to, �e plik ten powinien by� chroniony przed wgl�dem za wszelk� cen�.";
	
	
	/* PAGE 5 */
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = "W��cz graficzny pasek zam�wienia";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = "W��cz, je�li chcesz by podczas procesu zam�wienia wy�wietlany by� graficzny pasek post�pu zam�wienia ( 1 - 2 - 3 - 4 z obrazkami).";
	
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = "Wybierz proces przebiegu zam�wienia dla swojego sklepu";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = "<strong>Tryb standardowy :</strong><br/>
              1. ��dany adres wysy�ki<br />
              2. ��dana metoda wysy�ki<br />
              3. ��dana metoda p�atno�ci<br />
              4. Zako�czenie zam�wienia";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = "<strong>Tryb 2:</strong><br/>
               1. �adany adres wysy�ki<br />
              2. ��dana metoda p�atno�ci<br />
              3. Zako�czenie zam�wienia";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = "<strong>Tryb 3:</strong><br/>
               1. ��dana metoda wysy�ki<br />
              2. ��dana metoda p�atno�ci<br />
              3. Zako�czenie zam�wienia";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = "<strong>Tryb 4:</strong><br/>
               1. ��dana metoda p�atno�ci<br />
              2. Zako�czenie zam�wienia";
	
	
	
	/* PAGE 6 */
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = "W��cz pobierania";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = "Zaznacz, aby w��czy� mo�liwo�� pobierania. Tylko wtedy, gdy sprzedajesz towary pobieralne.";
	
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = "Stan zam�wienia umo�liwiaj�cy pobieranie";
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = "Wybierz stan zam�wienia, przy kt�rym klient jest powiadamiany przez wiadomo�� email o mo�liwo�ci pobrania.";
	
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = "Stan zam�wienia wy��czaj�cy uniemo�liwiaj�cy pobieranie";
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = "Ustawia stan zam�wienia, przy kt�rym pobieranie jest uniemo�liwione dla klienta.";
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = "DOWNLOADROOT";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = "Fizyczna �cie�ka do plik�w przeznaczonych do pobierania przez klient�w. (zako�czona znakiem uko�nika (slash)!)<br>
        <span class=\"message\">Dla bezpiecze�stwa swojego sklepu: je�li tylko mo�esz, u�yj katalogu znajduj�cego si� GDZIEKOLWIEK POZA KATALOGIEM ZE STRON�</span>";
	
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = "Maksymalna liczba pobiera�";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = "Ustawia liczb� pobiera�, kt�re mog� zosta� wykonane za pomoc� jednego ID pobierania, (dla jednego zam�wienia)";
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = "Wyga�ni�cie pobierania";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = "Ustawia przedzia� czasowy <strong>w sekundach</strong>, w kt�rym pobieranie jest w��czone dla klienta. 
  Przedzia� ten rozpoczyna si� przy pierwszym pobieraniu! Kiedy przedzia� czasowy wygasa, ID pobierania zostaje wy��czone.<br />Uwagi : 86400s=24h";
	
	
	
	
	/* PAGE 7 */
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = "W��cz p�atno�ci internetowe przez PayPal?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = "Zaznacz, aby zezwoli� Twoim klientom na u�ywanie systemu p�atno�ci PayPal.";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = "Adres email p�atno�ci PayPal:";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = "Tw�j firmowy adres email dla p�atno�ci PayPal. Tak�e u�ywany jako receiver_email.";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = "Stan zam�wienia dla prawid�owych transakcji";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = "Wybierz stan zam�wienia, kt�ry zostanie ustawiony, je�li transakcja z PayPal zako�czy�a si� pomy�lnie. Je�li u�ywasz opcji sprzeda�y produkt�w pobieralnych: 
  wybierz stan zam�wienia, kt�ry w��cza mo�liwo�� pobierania (nast�pnie klient jest natychmiast informowany poprzez wiadomo�� email o pobieraniu).";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = "Stan zam�wienia dla nieudanych transakcji";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = "Wybierz stan zam�wienia dla nieudanych transakcji PayPal.";
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = "W��cz p�atno�ci przez PayMate?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = "Zaznacz, aby zezwoli� Twoim klientom na u�ywanie australijskiego systemu p�atno�ci PayMate.";
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = "Nazwa u�ytkownika PayMate:";
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = "Twoje konto u�ytkownika dla PayMate.";
	
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = "W��cz p�atno�ci przez Authorize.net?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = "Zaznacz, aby u�ywa� Authorize.net w phpShop'ie.";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = "Tryb testowy ?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = "Wybierz 'Tak' podczas testowania. Wybierz 'Nie', aby w��czy� transakcje na �ywo.";
	var $_PHPSHOP_ADMIN_CFG_YES = "Tak";
	var $_PHPSHOP_ADMIN_CFG_NO = "Nie";
	
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = "ID logowania Authorize.net";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = "To jest Twoje ID logowania w Authorize.Net";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = "Klucz transakcji Authorize.net";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = "To jest Tw�j klucz transakcji Authorize.net";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = "Typ autentykacji";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = "To jest typ autentykacji Authorize.Net.";
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = "W��cz CyberCash?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = "Zaznacz, aby u�ywa� CyberCash w phpShop.";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = "KUPIEC CyberCash (MERCHANT)";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = "CC_MERCHANT jest to ID kupca CyberCash";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = "CyberCash Merchant Key";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = "CyberCash Merchant Key is the Merchant Provided by CyberCash";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = "CyberCash PAYMENT URL";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = "CyberCash PAYMENT URL jest to adres URL udost�pniony przez Cybercash do wykonywania bezpiecznych p�atno�ci";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = "CyberCash AUTH TYPE";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = "CyberCash AUTH TYPE jest to typ autentykacji udost�pniony przez CyberCash";
	

    /** Advanced Search feature ***/
    var $_PHPSHOP_ADVANCED_SEARCH  ="Zaawansowane szukanie";
    var $_PHPSHOP_SEARCH_ALL_CATEGORIES = "Przeszukuj wszystkie kategorie";
    var $_PHPSHOP_SEARCH_ALL_PRODINFO = "Przeszukuj wszystkie informacje o produkcie";
    var $_PHPSHOP_SEARCH_PRODNAME = "Tylko nazwa produktu";
    var $_PHPSHOP_SEARCH_MANU_VENDOR = "Tylko producent/sprzedawca";
    var $_PHPSHOP_SEARCH_DESCRIPTION = "Tylko opis produktu";
    var $_PHPSHOP_SEARCH_AND = "i";
    var $_PHPSHOP_SEARCH_NOT = "nie";
    var $_PHPSHOP_SEARCH_TEXT1 = "Pierwsza lista rozwijana pozwala na wybranie kategori, aby ograniczy� Twoje poszukiwania. 
        Druga lista rozwijana pozwala na ograniczenie Twojego poszukiwania do konkretnej informacji o produkcie (np. Nazwa). 
        Kiedy ju� wybra�e� swoje kryteria wyszukiwania (lub pozostawi�e� domy�lne WSZYSTKO), wprowad� s�owo kluczowe aby rozpocz�� wyszukiwanie. ";
    var $_PHPSHOP_SEARCH_TEXT2 = " Mo�esz dalej udoskonali� swoje poszukiwanie, poprzez dodanie drugiego s�owa kluczowego i wybranie operatora I lub NIE. 
        Wyb�r I oznacza, �e obydwa s�owa musz� by� obecne, aby produkt zosta� wy�wietlony. 
        Wyb�r NIE oznacza, �e produkt b�dzie wy�wietlony tylko wtedy, gdy pierwsze s�owo kluczowe jest obecne, a drugie nie wyst�puje.";
    var $_PHPSHOP_ORDERBY = "Sortuj wed�ug";
    
    /*** Review feature ***/
    var $_PHPSHOP_CUSTOMER_RATING  = "�rednia ocena klient�w";
    var $_PHPSHOP_TOTAL_VOTES = "Suma g�os�w";
    var $_PHPSHOP_CAST_VOTE = "Prosimy o zag�osowanie";
    var $_PHPSHOP_RATE_BUTTON = "G�osuj";
    var $_PHPSHOP_RATE_NOM = "Ocena";
    var $_PHPSHOP_REVIEWS = "Komentarze klient�w";
    var $_PHPSHOP_NO_REVIEWS = "Nie ma jeszcze �adnych komentarzy na temat tego produktu.";
    var $_PHPSHOP_WRITE_FIRST_REVIEW = "Zosta� pierwszym, kt�ry zamie�ci komentarz...";
    var $_PHPSHOP_REVIEW_LOGIN = "Aby napisa� komentarz prosimy o zalogowanie si�.";
    var $_PHPSHOP_REVIEW_ERR_RATE = "Prosimy oceni� produkt, aby uzupe�ni� sw�j komentarz!";
    var $_PHPSHOP_REVIEW_ERR_COMMENT1 = "Prosimy o napisanie wi�kszej ilo�ci s��w w komentarzu. Minimalna ilo�� znak�w: 100";
    var $_PHPSHOP_REVIEW_ERR_COMMENT2 = "Prosimy o skr�cenie komentarza. Maksymalna dozwolona ilo�� znak�w: 2000";
    var $_PHPSHOP_WRITE_REVIEW = "Napisz komentarz do tego produktu!";
    var $_PHPSHOP_REVIEW_RATE = "Najpierw: Oce� produkt. Prosimy wybra� ocen� w skali od 0 (najni�sza) do 5 gwiazdek (najwy�sza).";
    var $_PHPSHOP_REVIEW_COMMENT = "Teraz prosimy o napisanie (kr�tkiego) komentarza....(min. 100, maks. 2000 znak�w) ";
    var $_PHPSHOP_REVIEW_COUNT = "Wpisanych znak�w: ";
    var $_PHPSHOP_REVIEW_SUBMIT = "Wy�lij komentarz";
    var $_PHPSHOP_REVIEW_ALREADYDONE = "Ju� napisa�e� komentarz do tego produktu. Dzi�kujemy.";
    var $_PHPSHOP_REVIEW_THANKYOU = "Dzi�kujemy za komentarz.";
    var $_PHPSHOP_COMMENT= "Komentarz";
    
    var $_PHPSHOP_CREDITCARD_FORM_LBL = "Dodaj/Edytuj rodzaje kart kredytowych";
    var $_PHPSHOP_CREDITCARD_NAME = "Nazwa karty kredytowej";
    var $_PHPSHOP_CREDITCARD_CODE = "Kr�tki kod karty kredytowej";
    var $_PHPSHOP_CREDITCARD_TYPE = "Rodzaj karty kredytowej";
    
    var $_PHPSHOP_CREDITCARD_LIST_LBL = "Lista kart kredytowych";
    var $_PHPSHOP_UDATE_ADDRESS = "Aktualizuj adres";
    var $_PHPSHOP_CONTINUE_SHOPPING = "Kontynuuj zakupy";
    
    var $_PHPSHOP_THANKYOU_SUCCESS = "Twoje zam�wienie zosta�o pomy�lnie wys�ane!";
var $_PHPSHOP_ORDER_LINK = "Kliknij ten link, aby zobaczy� szczeg�y zam�wienia.";

    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = "status Twojego zam�wienia nr {order_id} zosta� zmieniony.";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = "Nowy status to:";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = "Je�li chcesz zobaczy� szczeg�y zam�wienia, kliknij ten link (lub skopiuj zdres do swojej przegl�darki):";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = "Zmiana statusu zam�wienia: Twoje zam�wienie {order_id}";
    var $_PHPSHOP_ORDER_LIST_NOTIFY = "Powiadom klienta?";
    var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = "Prosz� wpierw zmieni� status zam�wienia!";
    
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = "Rabat dla domy�lnej grupy klient�w (w %)";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = "Dodatnia warto�� X oznacza: je�eli produkt nie posiada ceny przypisanej do TEJ grupy klient�w, domy�lna cena jest pomniejszana o X %. Warto�� ujemna daje odwrotny rezultat";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = "Rabaty na produkty";
    var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = "Lista rabat�w na produkty";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = "Dodaj/edytuj rabaty na produkty";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = "Warto�� rabatu";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = "Wprowad� warto�� rabatu";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = "Typ rabatu";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = "Procentowy";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = "Kwotowy";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = "Czy warto�c powinna by� procentowa czy kwotowa?";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = "Rabat obowi�zuje od";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = "Okre�l dzie� od kiedy obowi�zuje rabat";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = "Rabat obowi�zuje do";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = "Okre�l dzie� do kiedy obowi�zuje rabat";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = "Mo�esz u�y� Formularza rabatu na produkty, aby doda� rabaty!";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = "Oszcz�dzasz";
    
    var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = "Powi�ksz zdj�cie";
    
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
        
    var $_PHPSHOP_MULTISELECT = "<i>Wielokrotny wyb�r: u�yj klawicza CTRL i myszki</i>";
        
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
