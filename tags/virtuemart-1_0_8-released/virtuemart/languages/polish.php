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
	var $_PHPSHOP_MENU = 'Menu';
	var $_PHPSHOP_CATEGORY = 'Kategoria';
	var $_PHPSHOP_CATEGORIES = 'Kategorie';
	var $_PHPSHOP_SELECT_CATEGORY = 'Wybierz kategoriê:';
	var $_PHPSHOP_ADMIN = 'Administracja';
	var $_PHPSHOP_PRODUCT = 'Produkt';
	var $_PHPSHOP_LIST = 'Listuj';
	var $_PHPSHOP_ALL = 'Wszystkie';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Lista produktów';
	var $_PHPSHOP_VIEW = 'widok';
	var $_PHPSHOP_SHOW = 'poka¿';
	var $_PHPSHOP_ADD = 'dodaj';
	var $_PHPSHOP_UPDATE = 'aktualizuj';
	var $_PHPSHOP_DELETE = 'usuñ';
	var $_PHPSHOP_SELECT = 'wybierz';
	var $_PHPSHOP_SUBMIT = 'Wy¶lij';
	var $_PHPSHOP_RANDOM = 'Losowo wybrane produkty';
	var $_PHPSHOP_LATEST = 'Ostatnio dodane produkty';
	var $_PHPSHOP_HOME_TITLE = 'Strona g³ówna';
	var $_PHPSHOP_CART_TITLE = 'Koszyk';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Zamówienie';
	var $_PHPSHOP_LOGIN_TITLE = 'Zaloguj siê';
	var $_PHPSHOP_LOGOUT_TITLE = 'Wyloguj siê';
	var $_PHPSHOP_BROWSE_TITLE = 'Przegl±daj';
	var $_PHPSHOP_SEARCH_TITLE = 'Szukaj';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Zarz±dzanie kontem';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Nawigacja';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Oddzia³';
	var $_PHPSHOP_INFO = 'Informacja';
	var $_PHPSHOP_BROWSE_LBL = 'Przegl±daj';
	var $_PHPSHOP_PRODUCTS_LBL = 'Produkty';
	var $_PHPSHOP_PRODUCT_LBL = 'Produkt';
	var $_PHPSHOP_SEARCH_LBL = 'Szukaj';
	var $_PHPSHOP_FLYPAGE_LBL = 'Szczegó³y produktu';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Wyszukiwanie produktu';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Nazwa produktu';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Kategoria produktu';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Opis';
	var $_PHPSHOP_CART_SHOW = 'Poka¿ koszyk';
	var $_PHPSHOP_CART_ADD_TO = 'Do koszyka';
	var $_PHPSHOP_CART_NAME = 'Nazwa';
	var $_PHPSHOP_CART_SKU = 'Symbol';
	var $_PHPSHOP_CART_PRICE = 'Cena';
	var $_PHPSHOP_CART_QUANTITY = 'Ilo¶æ';
	var $_PHPSHOP_CART_SUBTOTAL = 'Podsuma';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Dodaj nowy';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Adres wysy³ki';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Nie znaleziono elementów spe³niaj±cych podane kryteria wyszukiwania.<br />';
	var $_PHPSHOP_PRICE_LABEL = 'Cena: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Do koszyka';
	var $_PHPSHOP_NO_CUSTOMER = 'Nie jeste¶ jeszcze zarejestrowanym klientem. Prosimy o wprowadzenie swoich danych.';
	var $_PHPSHOP_DELETE_MSG = 'Czy napewno chcesz usun±æ ten zapis?';
	var $_PHPSHOP_THANKYOU = 'Dziêkujemy za zamówienie.';
	var $_PHPSHOP_NOT_SHIPPED = 'Jeszcze nie wys³ano';
	var $_PHPSHOP_EMAIL_SENDTO = 'Potwierdzenie zamówienia zosta³o wys³ane do';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Przepraszamy, ale nie ma ¿adnego u¿ytkownika MOS, który móg³by zostaæ dodany do listy u¿ytkowników com_phpshop';
	var $_PHPSHOP_ERROR = 'B£¡D';
	var $_PHPSHOP_MOD_NOT_REG = 'Modu³ nie zarejestrowany.';
	var $_PHPSHOP_MOD_ISNO_REG = 'nie jest prawid³owym modu³em phpShop.';
	var $_PHPSHOP_MOD_NO_AUTH = 'Nie masz uprawnieñ dostêpu do ¿±danego modu³u.';
	var $_PHPSHOP_PAGE_404_1 = 'Strona nie istnieje';
	var $_PHPSHOP_PAGE_404_2 = 'Plik o danej nazwie nie istnieje. Nie mo¿na znale¼æ pliku:';
	var $_PHPSHOP_PAGE_403 = 'Niewystarczaj±ce prawa dostêpu';
	var $_PHPSHOP_FUNC_NO_EXEC = 'Nie masz uprawnieñ, aby uruchomiæ ';
	var $_PHPSHOP_FUNC_NOT_REG = 'Funkcja nie jest zarejestrowana';
	var $_PHPSHOP_FUNC_ISNO_REG = ' nie jest prawid³owa funkcj± MOS_com_phpshop.';
	var $_PHPSHOP_ADMIN_MOD = 'Admin';
	var $_PHPSHOP_USER_LIST_MNU = 'Wylistuj u¿ytkowników';
	var $_PHPSHOP_USER_LIST_LBL = 'Lista u¿ytkowników';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Nazwa u¿ytkownika';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Pe³na nazwa';
	var $_PHPSHOP_USER_LIST_GROUP = 'Grupa';
	var $_PHPSHOP_USER_FORM_MNU = 'Dodaj u¿ytkownika';
	var $_PHPSHOP_USER_FORM_LBL = 'Dodaj/edytuj informacje o u¿ytkowniku';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Dane klienta';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Adresy wysy³ki';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Dodaj adres';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'Brak adresu wysy³ki.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Alias adresu';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Imiê';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Nazwisko';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Drugie imiê';
	var $_PHPSHOP_USER_FORM_TITLE = 'Tytu³';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Nazwa u¿ytkownika';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Has³o';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Potwierd¼ has³o';
	var $_PHPSHOP_USER_FORM_PERMS = 'Uprawnienia';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Numer klienta / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Nazwa firmy';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Adres 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Adres 2';
	var $_PHPSHOP_USER_FORM_CITY = 'Miasto';
	var $_PHPSHOP_USER_FORM_STATE = 'Województwo';
	var $_PHPSHOP_USER_FORM_ZIP = 'Kod pocztowy';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Kraj';
	var $_PHPSHOP_USER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Tel. komórkowy';
	var $_PHPSHOP_USER_FORM_FAX = 'Faks';
	var $_PHPSHOP_USER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Wylistuj modu³y';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Lista modu³ów';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Nazwa modu³u';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Uprawnienia modu³u';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Funkcje';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Kolejno¶æ na li¶cie';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Dodaj modu³';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Informacja o module';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Etykieta modu³u (dla menu górnego)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Nazwa modu³u';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Uprawnienia modu³u';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Nag³ówek modu³u';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Stopka modu³u';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Pokazuj modu³ w menu administracyjnym?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Porz±dek wy¶wietlania';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Opis modu³u';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'Kod jêzyka';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Plik jêzyka';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Wylistuj funkcje';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Lista funkcji';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Nazwa funkcji';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Nazwa klasy';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Metoda klasy';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Uprawnienia';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Dodaj funkcjê';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Informacja o funkcji';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Nazwa funkcji';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Nazwa klasy';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Metoda klasy';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Uprawnienia funkcji';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Opis funkcji';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Wylistuj waluty';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Lista walut';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'Dodaj walutê';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Nazwa waluty';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'Kod waluty';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Wylistuj kraje';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Lista krajów';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Dodaj kraj';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Nazwa kraju';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Kod kraju (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Kod kraju (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'List State';
	var $_PHPSHOP_STATE_LIST_LBL = 'State List for: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Add/Update a State';
	var $_PHPSHOP_STATE_LIST_NAME = 'State Name';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'State Code (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'State Code (2)';
	var $_PHPSHOP_ADDRESS = 'Adres';
	var $_PHPSHOP_CONTINUE = 'Kontynuuj';
	var $_PHPSHOP_EMPTY_CART = 'Twój koszyk jest pusty.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Pinguj serwer InterShippera';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'Ping serwera InterShipper';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'Nieudany ping serwera InterShipper';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'Ping serwera InterShipper wykonany pomy¶lnie';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Spedytor';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Czas<br />odpowiedzi';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'sek.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Lista metod wysy³ki';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Aktywne metody wysy³ki';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Metody wysy³ki';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Aktywny';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Op³aty manipulacyjne';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Czas realizacji';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'rycza³t';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'procent';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'dni';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Ciê¿kie ³adunki';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Konfiguruj metody wysy³ki';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Dodaj metodê wysy³ki';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Konfiguruj metodê wysy³ki';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Odw¶ie¿';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Metoda wysy³ki';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Aktywuj';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Op³ata manipulacyjna';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Czas realizacji';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'rycza³t';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'procent';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'dni';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Ciê¿kie ³adunki';
	var $_PHPSHOP_ORDER_MOD = 'Zamówienia';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Potwierd¼ zamówienie';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Anuluj zamówienie';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Drukuj zamówienie';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Usuñ zamówienie';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Wylistuj zamówienia';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Lista zamówieñ';
	var $_PHPSHOP_ORDER_LIST_ID = 'Numer zamówienia';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Data zamówienia';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Ostatnia modyfikacja';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Stan';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'Podsuma';
	var $_PHPSHOP_ORDER_ITEM = 'Szczegó³y zamówienia';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Zamówienie';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Numer zamówienia';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Data zamówienia';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Stan zamówienia';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Dane klienta';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Dane do faktury';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Informacje o wysy³ce';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Rachunek dla';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Wysy³ka do';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Nazwa';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Firma';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Adres 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Adres 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Miasto';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Województwo';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'Kod pocztowy';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Kraj';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Telefon';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Faks';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'Email';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Szczegó³y zamówienia';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Ilo¶æ';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Il.';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'Symbol';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Cena';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Suma';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'Podsuma';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'W tym VAT';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Koszty wysy³ki';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Podatek od wysy³ki';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Metoda p³atno¶ci';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Nazwa rachunku';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Numer rachunku';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Data wyga¶niêcia';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Dziennik p³atno¶ci';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Informacje o wysy³ce';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Informacje o p³atno¶ci';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Spedytor';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Rodzaj wysy³ki';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Data wysy³ki';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Koszt wysy³ki';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Wylistuj typy stanów zamówieñ';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Dodaj typ stanu zamówienia';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Kod stanu zamówienia';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Nazwa stanu zamówienia';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Stan zamówienia';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Kod stanu zamówienia';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Nazwa stanu zamówienia';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Kolejno¶æ na li¶cie';
	var $_PHPSHOP_PRODUCT_MOD = 'Produkty';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Aktualny produkt';
	var $_PHPSHOP_CURRENT_ITEM = 'Aktualny element';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Spis produktów';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Poka¿ spis produktów';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Cena';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Numer';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Waga';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Wylistuj produkty';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Lista produktów';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Nazwa produtku';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'Symbol';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Publikuj';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Znajd¼ produkt';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'zmodyfikowany';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'ze zmienion± cen±';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'bez ceny';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'Po';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Przed';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Dodaj produkt';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Edytuj ten produkt';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Podgl±d produktu w sklepie';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Dodaj element';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Dodaj nastêpny element';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Nowy produkt';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Aktualizuj produkt';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Informacja o produkcie';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Stan produktu';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Wymiary i waga produktu';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Zdjêcia produktu';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Nowy element';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Aktualizuj element';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Informacja o elemencie';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Stan elementu';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Wymiary i waga elementu';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Zdjêcia elementu';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Powrót do macierzystego produktu';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'Aby zaktualizowaæ zdjêcie, wprowad¼ ¶cie¿kê do nowego zdjêcia.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Usuñ';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Elementy produktu';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Atrybuty elementu';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Czy napewno chcesz usun±æ ten produkt\\ni powi±zane z nim elementy?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Czy napewno chcesz usun±æ ten element?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Dostawca';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Producent';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'Symbol';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Nazwa';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Kategoria';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Cena detaliczna';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Cena netto';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Pe³ny opis produktu';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Skrócony opis';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'Produkt dostêpny';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'Na zamówienie';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Data dostêpno¶ci produktu';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'W promocji';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Typ zni¿ki';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Publikowaæ?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'D³ugo¶æ';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Szeroko¶æ';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Wysoko¶æ';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Jednostka miary';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Waga';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Jednostka miary';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Miniaturka';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Zdjêcie';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'kilogramy';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'centymetry';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Jednostka';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'sztuka';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Sztuk w opakowaniu';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Tu mo¿esz podaæ liczbê sztuk w opakowaniu (maks. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Sztuk w pude³ku';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Tu mo¿esz podaæ liczbê sztuk w pude³ku(maks. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Dodaj wyniki produktu';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Aktualizuj wyniki produktu';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Dodaj wyniki elementu';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Aktualizuj wyniki elementu';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Importuj z pliku CSV';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Foldery produktów';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Wylistuj kategorie';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Drzewo kategorii';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Dodaj kategoriê';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Informacje o kategorii';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Nazwa kategorii';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Kategoria nadrzêdna';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Opis kategorii';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Publikowaæ?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Strona kategorii';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Wylistuj atrybuty';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Lista atrybutów dla';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Nazwa atrybutu';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Kolejno¶æ na li¶cie';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Dodaj atrybut';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Formularz atrybutu';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Nowy atrybut dla produktu';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Aktualizuj atrybut dla produktu';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Nowy atrybut dla elementu';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Aktualizuj atrybut dla elementu';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Nazwa atrybutu';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Kolejno¶æ na li¶cie';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Wylistuj ceny';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Drzewo cen';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Cena dla';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Nazwa grupy';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Cena';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Waluta';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Dodaj cenê';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Informacja o cenie';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Nowa cena dla produktu';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Aktualizuj cenê dla produktu';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Nowa cena dla elementu';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Aktualizuj cenê dla elementu';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Cena';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Waluta';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Grupa klientów';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Raporty';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Indywidualny wykaz produktów';
	var $_PHPSHOP_RB_SALE_TITLE = 'Raporty sprzeda¿y';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Przegl±d przebiegu sprzeda¿y';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Ustaw odstêp czasowy';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Miesiêczny';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Tygodniowy';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Dzienny';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Ten miesi±c';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'Ostatni miesi±c';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'Ostatnie 60 dni';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'Ostatnie 90 dni';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Pocz±tek';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Koniec';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Poka¿ wybrany zakres';
	var $_PHPSHOP_RB_REPORT_FOR = 'Raport dla ';
	var $_PHPSHOP_RB_DATE = 'Data';
	var $_PHPSHOP_RB_ORDERS = 'Zamówienia';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Suma sprzedanych artyku³ów';
	var $_PHPSHOP_RB_REVENUE = 'Dochody';
	var $_PHPSHOP_RB_PRODLIST = 'Wykaz produktów';
	var $_PHPSHOP_SHOP_MOD = 'Sklep';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Zdjêcie';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Cena';
	var $_PHPSHOP_ORDER_STATUS_P = 'Oczekuje';
	var $_PHPSHOP_ORDER_STATUS_C = 'Potwierdzone';
	var $_PHPSHOP_ORDER_STATUS_X = 'Anulowane';
	var $_PHPSHOP_ORDER_BUTTON = 'Zamówienie';
	var $_PHPSHOP_SHOPPER_MOD = 'Klient';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Wylistuj klientów';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Lista klientów';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Nazwa u¿ytkownika';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Pe³na nazwa';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Grupa';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Dodaj klienta';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Informacje o kliencie';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Dane klienta';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Informacja';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Informacje o wysy³ce';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Dodaj adres';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Alias adresu';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Nazwa u¿ytkownika';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Imiê';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Nazwisko';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Drugie imiê';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Tytu³';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Nazwa klienta';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Has³o';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Potwierd¼ has³o';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Grupa klienta';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Nazwa firmy';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Adres 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Adres 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Miasto';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Województwo';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'Kod pocztowy';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Kraj';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Tel. komórkowy';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Faks';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Tak';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'Nie';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Wylistuj grupy klientów';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Lista grup klientów';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Nazwa grupy';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Opis grupy';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Formularz grupy klientów';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Dodaj grupê klientów';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Nazwa grupy';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Opis grupy';
	var $_PHPSHOP_STORE_MOD = 'Sklep';
	var $_PHPSHOP_STORE_FORM_MNU = 'Edytuj sklep';
	var $_PHPSHOP_STORE_FORM_LBL = 'Informacje o sklepie';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Informacje kontaktowe';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Logo sklepu';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Wczytaj logo';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Nazwa sklepu';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Nazwa firmy';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Adres 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Adres 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'Miasto';
	var $_PHPSHOP_STORE_FORM_STATE = 'Województwo';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Kraj';
	var $_PHPSHOP_STORE_FORM_ZIP = 'Kod pocztowy';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Waluta';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Kategoria sklepu';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Nazwisko';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Imiê';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Drugie imiê';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Tytu³';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Telefon 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Telefon 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Faks';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'Email';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = '¦cie¿ka do obrazka';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Opis';
	var $_PHPSHOP_PAYMENT = 'P³atno¶æ';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Wylistuj metody p³atno¶ci';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Lista metod p³atno¶ci';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Nazwa';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Kod';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Rabat';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Grupa klientów';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Typ metody p³atno¶ci';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Dodaj metodê p³atno¶ci';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Formularz metody p³atno¶ci';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Nazwa metody p³atno¶ci';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Grupa klientów';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Rabat';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Kod';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Kolejno¶æ na li¶cie';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Typ metody p³atno¶ci';
	var $_PHPSHOP_TAX_MOD = 'Podatek';
	var $_PHPSHOP_TAX_RATE = 'Stawki podatkowe';
	var $_PHPSHOP_TAX_LIST_MNU = 'Wylistuj stawki podatkowe';
	var $_PHPSHOP_TAX_LIST_LBL = 'Lista stawek podatkowych';
	var $_PHPSHOP_TAX_LIST_STATE = 'Podatek dla regionu lub stanu';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Podatek dla kraju';
	var $_PHPSHOP_TAX_LIST_RATE = 'Stawka podatku';
	var $_PHPSHOP_TAX_FORM_MNU = 'Dodaj stawkê podatku';
	var $_PHPSHOP_TAX_FORM_LBL = 'Dodaj informacjê o podatku';
	var $_PHPSHOP_TAX_FORM_STATE = 'Podatek dla regionu lub stanu';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Podatek dla kraju';
	var $_PHPSHOP_TAX_FORM_RATE = 'Stawka podatku (dla 16% => wpisz 0.16)';
	var $_PHPSHOP_VENDOR_MOD = 'Dostawca';
	var $_PHPSHOP_VENDOR_ADMIN = 'Dostawcy';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Wylistuj dostawców';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Lista dostawców';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Nazwa dostawcy';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Admin';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Dodaj dostawcê';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Dodaj informacjê';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Informacja o dostawcy';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Informacje kontaktowe';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Obrazek';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Wgraj obrazek';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Nazwa sklepu dostawcy';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Nazwa firmy dostawcy';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Adres 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Adres 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Miasto';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Województwo';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Kraj';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'Kod pocztowy';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Waluta';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Kategoria dostawcy';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Nazwisko';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Imiê';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Drugie imiê';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Tytu³';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Telefon 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Telefon 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Faks';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'Email';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = '¦cie¿ka do obrazka';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Opis';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Wylistuj kategorie dostawców';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Lista kategorii dostawców';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Nazwa kategorii';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Opis kategorii';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Dostawcy';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Dodaj kategoriê dostawców';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Formularz kategorii dostawców';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Informacje o kategorii';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Nazwa kategorii';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Opis kategorii';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Producent';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Producenci';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Wylistuj producentów';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Lista producentów';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Nazwa producenta';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Admin';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'Dodaj producenta';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Dodaj informacjê';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Informacje o producencie';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Nazwa producenta';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Kategoria producentów';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'Adres URL strony producenta';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Opis';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Wylistuj kategorie producentów';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Lista kategorii producentów';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Nazwa kategorii';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Opis kategorii';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Producenci';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Dodaj kategoriê producentów';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Formularz kategorii producentów';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Informacje o kategorii';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Nazwa kategorii';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Opis kategorii';
	var $_PHPSHOP_HELP_MOD = 'Pomoc';
	var $_PHPSHOP_CART_ACTION = 'Aktualizuj';
	var $_PHPSHOP_CART_UPDATE = 'Aktualizuj ilo¶æ produktów w koszyku';
	var $_PHPSHOP_CART_DELETE = 'Usuñ produkt z koszyka';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Cena';
	var $_PHPSHOP_PRODUCT_CALL = 'Cena przez telefon';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Poprzedni';
	var $_PHPSHOP_PRODUCT_NEXT = 'Nastêpny';
	var $_PHPSHOP_CART_TAX = 'Podatek';
	var $_PHPSHOP_CART_SHIPPING = 'Koszty wysy³ki';
	var $_PHPSHOP_CART_TOTAL = 'Suma';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Dalej';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'Zarejestruj siê';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Dane klienta';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Firma';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Nazwa';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Adres';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Faks';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'Email';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Informacje o wysy³ce';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Firma';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Nazwa';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Adres';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Faks';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Informacje o p³atno¶ci';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Nazwisko na karcie';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Metoda p³atno¶ci';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Numer karty kredytowej';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Data wyga¶niêcia';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Potwierdzenie zamówienia';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'informacja wymagana je¶li wybrana zosta³a p³atno¶æ kart± kredytow±';
	var $_PHPSHOP_ZONE_MOD = 'Strefa wysy³ki';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Wylistuj strefy';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Dodaj strefê';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Przypisz strefy';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Kraj';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Aktualna strefa';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Przypisz do strefy';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Aktualizuj';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Przypisz strefy';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Nazwa strefy';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Opis strefy';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Koszty na produkt w strefie';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Limit kosztów strefy';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Lista stref';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Nazwa strefy';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Opis strefy';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Koszty na produkt w strefie';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Limit kosztów strefy';
	var $_PHPSHOP_LOGIN_FIRST = 'Prosimy o zalogowanie siê lub rejestracjê (u¿ywaj±c modu³u logowania).<br>Dziêkujemy.';
	var $_PHPSHOP_STORE_FORM_TOS = 'Zasady u¿ytkowania';
	var $_PHPSHOP_AGREE_TO_TOS = 'Najpierw prosimy zaakceptowaæ nasze zasady u¿ytkowania.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Akceptujê zasady u¿ytkowania';
	var $_PHPSHOP_LEAVE_BLANK = '(pozostaw puste, je¶li nie masz <br /> indywidualnego pliku php!)';
	var $_PHPSHOP_RETURN_LOGIN = 'Powracaj±cy klienci: prosimy o zalogowanie siê';
	var $_PHPSHOP_NEW_CUSTOMER = 'Nowi? Prosimy wprowadziæ swoje dane';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Konto klienta:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Informacje o zamówieniu';
	var $_PHPSHOP_ACC_UPD_BILL = 'Tutaj mo¿esz zaktualizowaæ swoje dane.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Tutaj mo¿esz dodaæ lub zarz±dzaæ adresami do wysy³ki.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Informacje o koncie';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Informacje o wysy³ce';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Brak zamówieñ do wy¶wietlenia';
	var $_PHPSHOP_ACC_BILL_DEF = 'domy¶lny (taki sam jak na rachunku)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Mo¿esz dodaæ adresy docelowe wysy³ki do swojego konta. Prosimy o zastanowienie siê nad odpowiednim aliasem lub kodem dla lokalizacji, któr± wybierzesz poni¿ej.';
	var $_PHPSHOP_CONFIG = 'Konfiguracja';
	var $_PHPSHOP_USERS = 'U¿ytkownicy';
	var $_PHPSHOP_IS_CC_PAYMENT = 'jest p³atno¶ci± kart± kredytow±?';
	var $_PHPSHOP_SHIPPING_MOD = 'Wysy³ka';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Wysy³ka';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Spedytor';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Lista spedytorów';
	var $_PHPSHOP_RATE_LIST_MNU = 'Tabela stawek wysy³kowych';
	var $_PHPSHOP_RATE_LIST_LBL = 'Lista stawek wysy³kowych';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Nazwa';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Kolejno¶æ na li¶cie';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Utwórz spedytora';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Utwórz/edytuj spedytora';
	var $_PHPSHOP_RATE_FORM_MNU = 'Utwórz stawkê wysy³kow±';
	var $_PHPSHOP_RATE_FORM_LBL = 'Utwórz/edytuj stawkê wysy³kow±';
	var $_PHPSHOP_RATE_FORM_NAME = 'Opis stawki wysy³kowej';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Spedytor';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Kraj';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'pocz±tek zakresu kodu pocztowego';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'koniec zakresu kodu pocztowego';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Najni¿sza waga';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Najwy¿sza waga';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Op³ata';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Twoja op³ata za paczkê';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Waluta';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'Identyfikator VAT';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Kolejno¶æ na li¶cie';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Spedytor';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Opis stawki wysy³kowej';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Waga od ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... do';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Firma spedycyjna';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Kolejno¶æ na li¶cie';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'B£¡D: ID Spedytora ju¿ istnieje.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'B£¡D: Wybierz spedytora.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'B£¡D: Istnieje przynajmniej jedna stawka wysy³kowa, wpierw usuñ stawki przypisane do tego spedytora';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'B£¡D: Niemo¿liwe odnalezienie spedytora o podanym ID.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'B£¡D: Wybierz spedytora.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'B£¡D: Niemo¿liwe odnalezienie spedytora o podanym ID.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'B£¡D: Deskryptor stawki jest wymagany.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'B£¡D: Kraj docelowy jest niepoprawny. Wiêcej ni¿ jeden kraj mo¿e byæ rozdzielony ";".';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'B£¡D: Najni¿sza waga jest wymagana';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'B£¡D: Najwy¿sza waga jest wymagana';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'B£¡D: Najni¿sza waga musi byæ mniejsza od najwy¿szej wagi';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'B£¡D: Op³ata wysy³kowa jest wymagana';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'B£¡D: Wybierz walutê';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'B£¡D: Stawka wysy³kowa jest wymagana';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Proszê wybraæ';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Spedytor';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Stawka wysy³kowa';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Cena';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-brak-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Karta kredytowa';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'U¿yj procesora p³atno¶ci';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Debet bankowy';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Tylko adres / za pobraniem';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Proszê wybraæ adres wysy³ki:';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Proszê wybraæ metodê wysy³ki:';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Proszê wybraæ metodê p³atno¶ci:';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Proszê sprawdziæ wprowadzone dane i potwierdziæ zamówienie:';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Proszê wybraæ metodê wysy³ki.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Proszê wybraæ inn± metodê wysy³ki.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Proszê wybraæ metodê p³atno¶ci.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Proszê wpisaæ numer swojej karty kredytowej.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Proszê wpisaæ nazwisko znajduj±ce siê na karcie kredytowej.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'Wpisany numer karty kredytowej jest nieprawid³owy.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Proszê wpisaæ miesi±c wyga¶niêcia wa¿no¶ci karty kredytowej.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Prosze wpisaæ rok wyga¶niêcia wa¿no¶ci karty kredytowej.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'Data wyga¶niêcia jest nieprawid³owa.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Proszê wybraæ adres wysy³ki.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Niepoprawny numer konta.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'Nie ma nic w koszyku!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'B£¡D: Proszê wybraæ spedytora!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'B£¡D: Wybrana stawka wysy³ki nie zosta³a odnaleziona!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'B£¡D: Twój adres wysy³ki nie zosta³ odnaleziony!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'B£¡D: Brak danych o karcie kredytowej...';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'B£¡D: Numer karty kredytowej nie znaleziony!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Przepraszamy, ale numer karty kredytowej, który zosta³ u¿yty, jest numerem testowym!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'Numer ID u¿ytkownika nie zosta³ odnaleziony w bazie danych!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Nazwa posiadacza Twojego rachunku bankowego nie zosta³a wprowadzona.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Numer IBAN nie zosta³ wprowadzony.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Numer Twojego konta bankowego nie zosta³ wprowadzony.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Numer rozliczeniowy Twojego banku nie zosta³ wprowadzony.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Nazwa Twojego banku nie zosta³a wprowadzona.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Proces zamówienia wymaga prawid³owej procedury!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Informacja o p³atno¶ci przechwycona dla dalszego przetwarzania.<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Minimalna warto¶æ zamówienia nie zosta³a jeszcze osi±gniêta.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'Minimalna warto¶æ zamówienia w naszym sklepie wynosi:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'P³atno¶æ kart± kredytow±';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'inne metody p³atno¶ci';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Proszê wybraæ metodê p³atno¶ci:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Minimalna warto¶æ zamówienia dla Twojego sklepu';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Informacja o rachunku bankowym';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Numer rachunku';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'Krajowy numer rozliczeniowy banku';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Nazwa banku';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Posiadacz rachunku';
	var $_PHPSHOP_MODULES = 'Modu³y';
	var $_PHPSHOP_FUNCTIONS = 'Funkcje';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Produkty w promocji';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Je¶li chcesz, mo¿esz zostawiæ dla nas notatkê do³±czon± do swojego zamówienia';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Notatka klienta';
	var $_PHPSHOP_INCLUDING_TAX = '(w tym $tax % VAT)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Prosimy wybraæ element';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Element';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Obszar pobierania';
	var $_PHPSHOP_DOWNLOADS_START = 'Rozpocznij pobieranie';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Prosimy wpisaæ numer ID pobierania otrzymany emailem, a nastêpnie klikn±æ \'Rozpocznij pobieranie\'.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Przepraszamy, ale Twoje pobieranie wygas³o.';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Przepraszamy, ale zosta³a osi±gniêta maksymalna liczba pobrañ.';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Niepoprawny numer ID pobierania!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Niemo¿liwe wys³anie wiadomo¶ci do ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Wiadomo¶æ wys³ana do ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Informacje o pobieraniu';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'zamówione pliki s± gotowe do pobrania';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Prosimy wpisaæ nastêpuj±cy numer ID pobierania w naszym obszarze pobierania: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'maksymalna liczba pobrañ dla ka¿dego z plików wynosi: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Mo¿esz pobieraæ przez {expire} dni po pierwszym pobraniu';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Pytania? Problemy?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Download-Info by ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'produkt udostêpniony do pobierania?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Dziêkujemy za dokonan± p³atno¶æ. 
        Transakcja przebieg³a pomy¶lnie. Otrzymasz potwierdzenie transakcji od PayPal poprzez email. 
        Mo¿esz teraz kontynuowaæ lub zalogowaæ siê na <a href=http://www.paypal.com>www.paypal.com</a>, aby zobaczyæ szczegó³y transakcji.';
	var $_PHPSHOP_PAYPAL_ERROR = 'Podczas transakcji wyst±pi³ b³±d. Stan Twojego zamówienia nie mo¿e zostaæ zaktualizowany.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Dziêkujmy za dokonane zakupy. Informacje o Twoim zamówieniu s± nastêpuj±ce:';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Dziêkujemy za skorzystanie z naszych us³ug.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Pytania? Problemy?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'Otrzymano nastêpuj±ce zamówienie:';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Obejrzyj zamówienie, klikaj±c niniejszy link.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Ujemne warto¶ci s± niedozwolone.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Prosimy wpisaæ poprawn± ilo¶æ dla tego produktu.';
	var $_PHPSHOP_CART_STOCK_1 = 'Wybrana ilo¶æ przekracza aktualny stan magazynowy tego produktu. ';
	var $_PHPSHOP_CART_STOCK_2 = 'Obecnie w magazynie znajduje siê $product_in_stock produkt(ów). ';
	var $_PHPSHOP_CART_STOCK_3 = 'Kliknij tutaj, aby wpisaæ siê na listê oczekuj±cych.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Prosimy o wybór dodatkowych cech produktu na stronie z jego opisem!';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'brak';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Pan';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Pani';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Dr';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof.';
	var $_PHPSHOP_DEFAULT = 'Domy¶lny';
	var $_PHPSHOP_AFFILIATE_MOD = 'Zarz±dzanie Programem partnerskim';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Wylistuj partnerów';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Lista partnerów';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Nazwa partnera';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Aktywny';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Stawka';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Miesiêczna suma';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Miesiêczna prowizja';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Wylistuj zamówienia';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'Wy¶lij email do partnerów';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'Wy¶lij email do partnerów';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'Do kogo wys³aæ email (* = WSZYSCY)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Twój adres email';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Temat';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Za³±cz aktualne statystyki';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Stawka prowizji (procent)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Aktywny?';
	var $_PHPSHOP_DELIVERY_TIME = 'Przeciêtny czas dostawy';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Informacje o dostawie';
	var $_PHPSHOP_MORE_CATEGORIES = 'wiêcej kategorii';
	var $_PHPSHOP_AVAILABILITY = 'Dostêpno¶æ';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Ten produkt jest obecnie niedostêpny.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Bêdzie znowu dostêpny: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Podsumowanie';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Statystyki';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Klienci';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'aktywnych produktów';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'nieaktywnych produktów';
	var $_PHPSHOP_STATISTIC_SUM = 'Suma';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Nowe zamówienia';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Nowi klienci';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Prosimy o podanie swojego adresu email w celu otrzymania powiadomienia o dostêpno¶ci produktu. 
                                        Nie bêdziemy udostêpniaæ, wypo¿yczaæ, sprzedawaæ lub u¿ywaæ tego adresu email do ¿adnych innych celów z wyj±tkiem 
                                        poinformowania o dostêpno¶ci produktu w magazynie.<br /><br />Dziêkujemy!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Dziêkujemy za cierpliwo¶æ! <br />Zostaniesz powiadomiony, gdy tylko uzupe³nimy braki magazynowe.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Powiadom mnie!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Widok do druku';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Prosimy wybraæ Authorize.net lub CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' Stan pliku konfiguracji:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'jest zapisywalny';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'nie jest zapisywalny';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Ogólne';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = '¦cie¿ki i adresy URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Strona';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Wysy³ka';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Zamówienie';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Pobieranie';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'P³atno¶ci';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'U¿yj tylko jako katalogu';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Je¶li zaznaczysz tê opcjê, wy³±czysz wszystkie funkcje koszyka.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Pokazuj ceny';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Pokazywaæ ceny zawieraj±ce podatek?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Zdecyduj, czy kupuj±cy widzi ceny wraz z podatkiem, czy bez niego.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Zaznacz, aby pokazywaæ ceny. Niektórzy nie ¿ycz± sobie, aby ceny by³y pokazywane w przypadku, gdy u¿ywa siê funkcji katalogu.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Wirtualny podatek';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Okre¶la, czy artyku³y posiadaj±ce zerow± wagê s± objête podatkiem czy nie. Zmodyfikuj ps_checkout.php->calc_order_taxable(), aby to zmieniæ.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Forma podatku:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Bazuj±cy na adresie wysy³kowym';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Bazuj±cy na adresie sprzedawcy';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Okre¶la, która stawka podatkowa jest u¿ywana do wyliczenia podatku:<br />
                                                <ul><li>ta ze stanu/kraju z którego pochodzi w³a¶ciciel sklepu</li><br/>
                                                <li>lub ta, sk±d pochodzi kupuj±cy.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'W³±czyæ ró¿norodne stawki podatkowe?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Zaznacz, je¶li posiadasz w ofercie produkty objête ró¿nymi stawkami podatkowymi (np. 7% dla ksi±¿ek i ¿ywno¶ci, 22% dla innych rzeczy)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Odj±æ zni¿ki przed naliczeniem podatku/kosztów przesy³ki?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'W³±cz system komentarzy/oceny produktów przez klientów';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Je¶li w³±czony, zezwalasz klientom na <strong>ocenê </strong> i na <strong>pisanie komentarzy</strong> o produktach. <br />
                                                                                Dziêki temu mog± opisaæ swoje wra¿enia o produkcie dla innych klientów.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Zdecyduj, czy odejmowaæ rabat dla wybranej p³atno¶ci PRZED (zaznaczone) lub PO naliczeniu podatku i kosztów przesy³ki.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Klienci mog± podawaæ dane rachunku bankowego?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Zaznacz, je¶li chcesz, by Twoi klienci mieli mo¿liwo¶æ wprowadzania danych dotycz±cych ich rachunków bankowych podczas procesu rejestracji w sklepie.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Klienci mog± wybieraæ stan/region?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Zaznacz, je¶li chcesz, by Twoi klienci mieli mo¿liwo¶æ wyboru stanu/regionu podczas procesu rejestracji w sklepie.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Musi zaakceptowaæ Zasady u¿ytkowania?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Zaznacz, je¶li chcesz, by klient musia³ zaakceptowaæ Zasady u¿ytkowania zanim zarejestruje sie w Twoim sklepie.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Sprawdzaæ stany magazynowe?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Zdecyduj, czy maj± byæ sprawdzane stany magazynowe produktu, gdy u¿ytkownik doda element do koszyka. 
                                                 Je¶li opcja zosta³a ustawiona, u¿ytkownik nie bêdzie móg³ dodaæ wiêcej produktów do koszyka ni¿ znajduje siê w magazynie.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'W³±cz Program partnerski?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Opcja ta w³±cza ¶ledzenie partnerów w czê¶ci u¿ytkowej sklepu. W³±cz j±, je¶li doda³e¶ partnerów w panelu administracyjnym.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Format maila z zamówieniem:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Wiadomo¶æ tekstowa';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'Wiadomo¶æ HTML';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Okre¶la, w jaki sposób skonfigurowane s± emaile potwierdzaj±ce zamówienie:<br />
                                                                                        <ul><li>jako zwyk³y tekst</li>
                                                                                        <li>lub jako wiadomo¶æ HTML z obrazkami.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Zezwalaæ na zarz±dzanie z czê¶ci u¿ytkowej sklepu u¿ytkownikom nieposiadaj±cym dostêpu do panelu administracyjnego?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'To ustawienie pozwala na w³±czenie zarz±dzania sklepem z czê¶ci u¿ytkowej u¿ytkownikom posiadaj±cym uprawnienia storeadmin (administrator sklepu), ale niemaj±cym dostêpu do panelu administracyjnego Mambo (np. Registered / Editor).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'Adres URL do Twojej strony. Zazwyczaj identyczny z Twoim adresem URL do Mambo (zakoñczony znakiem uko¶nika (slash)!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'SECUREURL';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'Bezpieczny adres URL do Twojej strony. (https - zakoñczony znakiem uko¶nika (slash)!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'COMPONENTURL';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'Adres URL do komponentu mambo-phpShop. (zakoñczony znakiem uko¶nika (slash)!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'IMAGEURL';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'Adres URL do katalogu obrazków komponentu mambo-phpShop.(zakoñczony znakiem uko¶nika (slash)!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'ADMINPATH';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = '¦cie¿ka do Twojego katalogu komponentu mambo-phpShop.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'CLASSPATH';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = '¦cie¿ka do Twojego katalogu klas phpShop.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'PAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = '¦cie¿ka do Twojego katalogu html phpShop.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'IMAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = '¦cie¿ka do Twojego katalogu shop_image phpShop.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'HOMEPAGE';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Jest to strona, która bêdzie ³adowana domy¶lnie.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'ERRORPAGE';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Jest to domy¶lna strona s³u¿±ca do wy¶wietlania wiadomo¶ci o b³êdach.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'DEBUGPAGE';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Jest to domy¶lna strona s³u¿±ca do wy¶wietlania wiadomo¶ci debugera.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'DEBUG?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'DEBUG?  	   	W³±cza wyj¶cie debugera. Spowoduje to, ¿e strona DEBUGPAGE bêdzie wy¶wietlana na dole ka¿dej podstrony. Jest to bardzo pomocne podczas procesu wdra¿ania sklepu, gdy¿ pokazuje zawarto¶æ koszyka, warto¶ci pól formularzy, itd.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'FLYPAGE';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Jest to domy¶lna strona s³u¿±ca do wy¶wietlania szczegó³ów produktu.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Szablon kategorii';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Definiuje domy¶lny szablon kategorii s³u¿±cy do wy¶wietlania produktów w danej kategorii.<br />
                                                       Mo¿esz tworzyæ nowe szablony przez przerabianie istniej±cych plików <br />
                                                       (które mieszcz± siê w katalogu <strong>COMPONENTPATH/html/templates/</strong> i zaczynaj± od browse_)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Domy¶lna liczba produktów w rzêdzie';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Definiuje liczbê produktów w rzêdzie. <br />
                                                     Przyk³ad: Je¶li utawisz jej warto¶æ na 4, szablon kategorii wy¶wietli 4 produkty na rz±d';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = 'obrazek ';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Ten obrazek zostanie wy¶wietlony, je¿eli nie jest dostêpny obrazek produktu.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'SEARCH ROWS';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Okre¶la liczbê rzêdów na stronie podczas wy¶wietlania listy wyników wyszukiwania.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'SEARCH COLOR 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Okre¶la kolor nieparzystych rzêdów na li¶cie wyników.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'SEARCH COLOR 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Okre¶la kolor parzystych rzêdów na li¶cie wyników.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'MAXIMUM ROWS';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Ustala liczbê pozycji pokazywanych na li¶cie wyboru z dokonanymi zamówieniami.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Poka¿ stopkê ';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Wy¶wietla w stopce obrazek powered-by-mambo-phpShop.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Wybierz metodê wysy³ki dla Twojego sklepu';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Standardowy modu³ wysy³ki z indywidualnie konfigurowanymi spedytorami i stawkami. <strong>ZALECANY !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '  	Zone Shipping Module Country Version 1.0<br />
                                                            Aby zaczerpn±æ wiêcej informacji na temat tego modu³u, odwied¼ stronê <a href="http://ZephWare.com">http://ZephWare.com</a><br />
                                                            lub skontaktuj siê z <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Zaznacz, je¶li chcesz w³±czyæ modu³ wysy³ek strefowych.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = 'Narzêdzia kalkulacji wysy³ek UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'Kod dostêpu UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Twój kod dostepu UPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'Id u¿ytkownika UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'ID u¿ytkownika, który otrzyma³e¶ od UPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'Has³o UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'Has³o do Twojego konta UPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'Modu³ InterShipper. Zaznacz wy³±cznie je¶li posiadasz konto na Intershipper.com.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Wy³±cz wybór metod wysy³ki. Wybierz, je¶li Twoi klienci kupuj± pobieralne produkty, które nie musz± byæ wysy³ane.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'Has³o InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Twoje has³o do konta Intershipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'Adres email InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'Twój adres email do konta Intershipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'ENCODE KEY';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Klucz u¿ywany do szyfrowania danych przechowywanych w bazie. Oznacza to, ¿e plik ten powinien byæ chroniony przed wgl±dem za wszelk± cenê.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'W³±cz graficzny pasek zamówienia';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'W³±cz, je¶li chcesz, by podczas procesu zamówienia wy¶wietlany by³ graficzny pasek postêpu zamówienia (1 - 2 - 3 - 4 z obrazkami).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Wybierz proces przebiegu zamówienia dla swojego sklepu';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Tryb standardowy :</strong><br/>
              1. ¯±dany adres wysy³ki<br />
              2. ¯±dana metoda wysy³ki<br />
              3. ¯±dana metoda p³atno¶ci<br />
              4. Zakoñczenie zamówienia';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Tryb 2:</strong><br/>
               1. ¯adany adres wysy³ki<br />
              2. ¯±dana metoda p³atno¶ci<br />
              3. Zakoñczenie zamówienia';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Tryb 3:</strong><br/>
               1. ¯±dana metoda wysy³ki<br />
              2. ¯±dana metoda p³atno¶ci<br />
              3. Zakoñczenie zamówienia';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Tryb 4:</strong><br/>
               1. ¯±dana metoda p³atno¶ci<br />
              2. Zakoñczenie zamówienia';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'W³±cz pobierania';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Zaznacz, aby w³±czyæ mo¿liwo¶æ pobierania. Tylko wtedy, gdy sprzedajesz towary pobieralne.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Stan zamówienia umo¿liwiaj±cy pobieranie';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Wybierz stan zamówienia, przy którym klient jest powiadamiany przez wiadomo¶æ email o mo¿liwo¶ci pobrania.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Stan zamówienia uniemo¿liwiaj±cy pobieranie';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Ustawia stan zamówienia, przy którym pobieranie jest uniemo¿liwione dla klienta.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'DOWNLOADROOT';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'Fizyczna ¶cie¿ka do plików przeznaczonych do pobierania przez klientów (zakoñczona znakiem uko¶nika (slash)!).<br>
        <span class="message">Dla bezpieczeñstwa swojego sklepu: je¶li tylko mo¿esz, u¿yj katalogu znajduj±cego siê GDZIEKOLWIEK POZA KATALOGIEM ZE STRON¡</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Maksymalna liczba pobierañ';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Ustawia liczbê pobierañ, które mog± zostaæ wykonane za pomoc± jednego ID pobierania (dla jednego zamówienia).';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Wyga¶niêcie pobierania';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Ustawia przedzia³ czasowy <strong>w sekundach</strong>, w którym pobieranie jest w³±czone dla klienta. 
  Przedzia³ ten rozpoczyna siê przy pierwszym pobieraniu! Kiedy przedzia³ czasowy wygasa, ID pobierania zostaje wy³±czone.<br />Uwagi: 86400s=24h';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'W³±czyæ p³atno¶ci internetowe przez PayPal?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Zaznacz, aby zezwoliæ Twoim klientom na u¿ywanie systemu p³atno¶ci PayPal.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'Adres email p³atno¶ci PayPal:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Twój firmowy adres email dla p³atno¶ci PayPal. Tak¿e u¿ywany jako receiver_email.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Stan zamówienia dla prawid³owych transakcji';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Wybierz stan zamówienia, który zostanie ustawiony, je¶li transakcja z PayPal zakoñczy³a siê pomy¶lnie. Je¶li u¿ywasz opcji sprzeda¿y produktów pobieralnych: 
  wybierz stan zamówienia, który w³±cza mo¿liwo¶æ pobierania (nastêpnie klient jest natychmiast informowany poprzez wiadomo¶æ email o pobieraniu).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Stan zamówienia dla nieudanych transakcji';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Wybierz stan zamówienia dla nieudanych transakcji PayPal.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'W³±cz p³atno¶ci przez PayMate?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Zaznacz, aby zezwoliæ Twoim klientom na u¿ywanie australijskiego systemu p³atno¶ci PayMate.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'Nazwa u¿ytkownika PayMate:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Twoje konto u¿ytkownika dla PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'W³±cz p³atno¶ci przez Authorize.net?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Zaznacz, aby u¿ywaæ Authorize.net w module phpShop.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Tryb testowy ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Wybierz \'Tak\' podczas testowania. Wybierz \'Nie\', aby w³±czyæ transakcje na ¿ywo.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Tak';
	var $_PHPSHOP_ADMIN_CFG_NO = 'Nie';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'ID logowania Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'To jest Twoje ID logowania w Authorize.Net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Klucz transakcji Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'To jest Twój klucz transakcji Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Typ uwierzytelniania';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'To jest typ uwierzytelniania Authorize.Net.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'W³±czyæ CyberCash?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Zaznacz, aby u¿ywaæ CyberCash w phpShop.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'KUPIEC CyberCash (MERCHANT)';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_MERCHANT jest to ID kupca CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash Merchant Key';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash Merchant Key is the Merchant Provided by CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash PAYMENT URL';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'CyberCash PAYMENT URL jest to adres URL udostêpniony przez Cybercash do wykonywania bezpiecznych p³atno¶ci';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash AUTH TYPE';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'CyberCash AUTH TYPE jest to typ autentykacji udostêpniony przez CyberCash';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Wyszukiwanie zaawansowane';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Przeszukuj wszystkie kategorie';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Przeszukuj wszystkie informacje o produkcie';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Tylko nazwa produktu';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Tylko producent/sprzedawca';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Tylko opis produktu';
	var $_PHPSHOP_SEARCH_AND = 'oraz';
	var $_PHPSHOP_SEARCH_NOT = 'nie';
	var $_PHPSHOP_SEARCH_TEXT1 = 'Pierwsza lista rozwijana pozwala na wybranie kategorii, aby ograniczyæ Twoje poszukiwania. 
        Druga lista rozwijana pozwala na ograniczenie Twojego poszukiwania do konkretnej informacji o produkcie (np. Nazwa). 
        Kiedy ju¿ wybierzesz swoje kryteria wyszukiwania (lub pozostawisz domy¶lne WSZYSTKO), wprowad¼ s³owo kluczowe, aby rozpocz±æ wyszukiwanie. ';
	var $_PHPSHOP_SEARCH_TEXT2 = ' Mo¿esz sprecyzowaæ swoje wyszukiwanie poprzez dodanie drugiego s³owa kluczowego i wybranie operatora ORAZ lub NIE. 
        Wybór I oznacza, ¿e obydwa s³owa musz± byæ obecne, aby produkt zosta³ wy¶wietlony. 
        Wybór NIE oznacza, ¿e produkt bêdzie wy¶wietlony tylko wtedy, gdy pierwsze s³owo kluczowe jest obecne, a drugie nie wystêpuje.';
	var $_PHPSHOP_ORDERBY = 'Sortuj wed³ug';
	var $_PHPSHOP_CUSTOMER_RATING = '¦rednia ocena klientów';
	var $_PHPSHOP_TOTAL_VOTES = 'Suma g³osów';
	var $_PHPSHOP_CAST_VOTE = 'Prosimy o zag³osowanie';
	var $_PHPSHOP_RATE_BUTTON = 'G³osuj';
	var $_PHPSHOP_RATE_NOM = 'Ocena';
	var $_PHPSHOP_REVIEWS = 'Komentarze klientów';
	var $_PHPSHOP_NO_REVIEWS = 'Nie ma jeszcze ¿adnych komentarzy na temat tego produktu.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Zostañ pierwszym, który zamie¶ci komentarz...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Aby napisaæ komentarz, prosimy o zalogowanie siê.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Prosimy oceniæ produkt, aby uzupe³niæ swój komentarz!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Prosimy o napisanie wiêkszej ilo¶ci s³ów w komentarzu. Minimalna ilo¶æ znaków: 100';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Prosimy o skrócenie komentarza. Maksymalna dozwolona ilo¶æ znaków: 2000';
	var $_PHPSHOP_WRITE_REVIEW = 'Napisz komentarz do tego produktu:';
	var $_PHPSHOP_REVIEW_RATE = 'Najpierw oceñ produkt. Prosimy wybraæ ocenê w skali od 0 (najni¿sza) do 5 gwiazdek (najwy¿sza).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Teraz prosimy o napisanie (krótkiego) komentarza (min. 100, maks. 2000 znaków) ';
	var $_PHPSHOP_REVIEW_COUNT = 'Wpisanych znaków: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Wy¶lij komentarz';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Ju¿ napisa³e¶ komentarz do tego produktu. Dziêkujemy.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Dziêkujemy za komentarz.';
	var $_PHPSHOP_COMMENT = 'Komentarz';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Dodaj/Edytuj rodzaje kart kredytowych';
	var $_PHPSHOP_CREDITCARD_NAME = 'Nazwa karty kredytowej';
	var $_PHPSHOP_CREDITCARD_CODE = 'Krótki kod karty kredytowej';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Rodzaj karty kredytowej';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Lista kart kredytowych';
	var $_PHPSHOP_UDATE_ADDRESS = 'Aktualizuj adres';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Kontynuuj zakupy';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Twoje zamówienie zosta³o pomy¶lnie wys³ane!';
	var $_PHPSHOP_ORDER_LINK = 'Kliknij ten link, aby zobaczyæ szczegó³y zamówienia.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'status Twojego zamówienia nr {order_id} zosta³ zmieniony.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'Nowy status to:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'Je¶li chcesz zobaczyæ szczegó³y zamówienia, kliknij ten link (lub skopiuj adres do swojej przegl±darki):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Zmiana statusu zamówienia: Twoje zamówienie {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Powiadomiæ klienta?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Proszê najpierw zmieniæ status zamówienia!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Rabat dla domy¶lnej grupy klientów (w %)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Dodatnia warto¶æ X oznacza: je¿eli produkt nie posiada ceny przypisanej do TEJ grupy klientów, domy¶lna cena jest pomniejszana o X %. Warto¶æ ujemna daje odwrotny rezultat';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Rabaty na produkty';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Lista rabatów na produkty';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Dodaj/edytuj rabaty na produkty';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Warto¶æ rabatu';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Wprowad¼ warto¶æ rabatu';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Typ rabatu';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Procentowy';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Kwotowy';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Czy warto¶c powinna byæ procentowa czy kwotowa?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Rabat obowi±zuje od';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Okre¶l dzieñ od kiedy obowi±zuje rabat';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Rabat obowi±zuje do';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Okre¶l dzieñ do kiedy obowi±zuje rabat';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Mo¿esz u¿yæ Formularza rabatu na produkty, aby dodaæ rabaty!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Oszczêdzasz';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Powiêksz zdjêcie';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Styl wy¶wietlania waluty';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Symbol waluty';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Mo¿esz tu tak¿e u¿ywaæ operatorów HTML (np. &euro;,&pound;,&yen;,...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Dziesiêtne';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Liczba znaków po przecinku (mo¿e wynosiæ 0).<br><b>Dokonuje zaokr±glenia, gdy warto¶æ ma inn± liczbê miejsc dziesiêtnych.</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Znak dziesiêtny';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Znak u¿ywany jako symbol dziesiêtny.';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Separator tysiêcy';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Znak u¿ywany do rozdzielania tysiêcy (mo¿e byæ puste).';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Format dodatni';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Format wy¶wietlania stosowany przy pokazywaniu warto¶ci dodatnich.<br>Symb oznacza symbol waluty.';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Format ujemny';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Format wy¶wietlania stosowany przy pokazywaniu warto¶ci ujemnych.<br>Symb oznacza symbol waluty';
	var $_PHPSHOP_OTHER_LISTS = 'Inne listy produktów';
	var $_PHPSHOP_MORE_IMAGES = 'Poka¿ wiêcej zdjêæ';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Dostêpne zdjêcia dla';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Wróæ do szczegó³ów produktu';
	var $_PHPSHOP_FILEMANAGER = 'FileManager';
	var $_PHPSHOP_FILEMANAGER_LIST = 'FileManager::Lista produktów';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Dodaj zdjêcie/plik';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Przypisane zdjêcia';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'Do pobrania?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Przypisane pliki (specyfikacje,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Opublikowany?';
	var $_PHPSHOP_FILES_LIST = 'FileManager::Lista zdjêæ/plików dla';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Nazwa pliku';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'Tytu³ pliku';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Typ pliku';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Edytuj wpis pliku';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Pe³ny rozmiar';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Miniaturka';
	var $_PHPSHOP_FILES_FORM = 'Wczytaj plik dla';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Bie¿±cy plik';
	var $_PHPSHOP_FILES_FORM_FILE = 'Plik';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Zdjêcie';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Wczytaj do';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'domy¶lnej lokalizacji zdjêæ produktów';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Podaj po³o¿enie pliku';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = '¦cie¿ka pobierania (np. do sprzedawanych plików)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Automatycznie stworzyæ miniaturkê?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Plik jest opublikowany?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Tytu³ pliku (widziany przez klienta)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Opis pliku';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'Adres URL pliku (opcjonalny)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Podaj prawid³ow± ¶cie¿kê!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'Utworzenie miniaturki zakoñczone powodzeniem!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'NIE uda³o siê stworzyæ miniaturki!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'B³±d wczytywania pliku/zdjêcia!';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Nieudane usuniêcie pliku zdjêcia w pe³nym rozmiarze.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Plik zdjêcia w pe³nym rozmiarze usuniêty.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Nieudane usuniêcie pliku miniaturki zdjêcia (byæ mo¿e nie istnia³): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Plik miniaturki usuniêty.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Nieudane usuniêcie pliku.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Plik usuniêty.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Wskazany plik nie zosta³ znaleziony!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Zdjêcie nie znalezione!';
	var $_PHPSHOP_COUPON_MOD = 'Bon';
	var $_PHPSHOP_COUPONS = 'Bony';
	var $_PHPSHOP_COUPON_LIST = 'Lista bonów';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Bon zosta³ ju¿ zrealizowany.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Bon zrealizowany! Dziêkujemy.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Je¿eli masz kod bonu, wprowad¼ go poni¿ej:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Wy¶lij';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Ten kod bonu ju¿ istnieje. Spróbuj ponownie.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Zaktualizuj bon';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Kliknij kod bonu, by go zmieniæ. W celu usuniêcia kodu bonu zaznacz go i kliknij Usuñ:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Kod';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Procentowy czy kwotowy';
	var $_PHPSHOP_COUPON_TYPE = 'Typ bonu';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Bon upominkowy jest anulowany po wykorzystaniu do zni¿kowych zakupów. Bon sta³y mo¿e byæ wykorzystywany wielokrotnie przez klienta.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Bon upominkowy';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Bon sta³y';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Warto¶æ';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Usuñ kod';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Na pewno usun±æ ten kod bonu?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Proszê wype³niæ wszystkie pola.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'Warto¶æ bonu musi byæ liczb±.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Nowy bon';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Kod bonu';
	var $_PHPSHOP_COUPON_PERCENT = 'Procent';
	var $_PHPSHOP_COUPON_TOTAL = 'Kwota';
	var $_PHPSHOP_COUPON_VALUE = 'Warto¶æ';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Kod bonu zapisany.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Zapisz bon';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Zni¿ka na bon';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Kod bonu nie znaleziony. Spróbuj ponownie.';
	var $_PHPSHOP_COUPONS_ENABLE = 'W³±cz stosowanie bonów';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Je¿eli w³±czysz stosowanie bonów, pozwolisz klientom na wpisywanie kodów bonów daj±cych zni¿ki podczas zakupów.';
	var $_PHPSHOP_FREE_SHIPPING = 'Darmowa wysy³ka';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Przy tym zamówieniu wysy³ka jest darmowa!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Minimalna kwota dla darmowej dostawy';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Kwota (WRAZ Z PODATKIEM!) stanowi±ca minimum dla bezp³atnej wysy³ki.
                                                (np. <strong>50</strong> oznacza bezp³atn± dostawê przy zamówieniu o warto¶ci
                                                50 z³ (z podatkiem) lub wiêkszej.';
	var $_PHPSHOP_YOUR_STORE = 'Twój sklep';
	var $_PHPSHOP_CONTROL_PANEL = 'Panel sterowania';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'Przycisk PDF';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Poka¿ lub ukryj przycisk PDF w sklepie.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Musi zgadzaæ siê z Zasadami u¿ytkowania przy KA¯DYM ZAMÓWIENIU?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Zaznacz, je¶li klient musi zgadzaæ siê z warunkami Zasad u¿ytkowania przy ka¿dym zamówieniu (przed jego z³o¿eniem).';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Bank Account Type';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Checking';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Business Checking';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Saving';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Recurring Billings?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Define wether you want recurring billings.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Internal Error processing the Request to';
	var $_PHPSHOP_PAYMENT_ERROR = 'Nieudane przetwarzanie p³atno¶ci';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Udane przetwarzanie p³atno¶ci';
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
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Op³ata manipulacyjna';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Twoja op³ata manipulacyjna dla tej metody wysy³ki.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Klasa podatkowa';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'U¿yj poni¿szej klasy podatkowej dla tej op³aty wysy³kowej.';
	var $_PHPSHOP_ERROR_CODE = 'Kod b³êdu';
	var $_PHPSHOP_ERROR_DESC = 'Opis b³êdu';
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
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'ALBO wpisz tu nazwê pliku';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'UWAGA: Mo¿esz tu podaæ nazwê pliku. <strong>Je¶li j± tu wpiszesz, ¿aden plik nie zostanie wys³any!!! Bêdziesz musia³ go wys³aæ rêcznie przez FTP!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'ALBO wy¶lij nowy plik';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Mo¿esz wys³aæ plik lokalny. Stanie siê wówczas sprzedawanym produktem. Istniej±cy plik zostanie zast±piony.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Wpisz dowolny tekst, który zostanie pokazany klientowi na stronie produktu.<br />Np.: 24h, 48 godzin, 3-5 dni, Na zamówienie.....';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'ALBO wybierz obrazek pokazywany na szczegó³owej stronie produktu.<br />Obrazki znajduj± siê w katalogu  <i>/components/com_phpshop/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Lista atrybutów';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Przyk³ady formatu listy atrybutów:</h4>
        <span class="sectionname"><strong>Rozmiar</strong>,XL[+1.99],M,S[-2.99]<strong>;Kolor</strong>,czerwony,zielony,¿ó³ty,lansiarski[=24.00]<strong>;Itakdalej</strong>,..,..</span>
        <h4>Zmiany ceny za pomoc± atrybutów zaawansowanych:</h4>
        <span class="sectionname">
        <strong>+</strong> == dodaj tê kwotê do ustalonej ceny.<br />
        <strong>-</strong> == odejmij tê kwotê od ustalonej ceny.<br />
        <strong>=</strong> == zmieñ cenê produktu na tê warto¶æ.
      </span>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'W³asna lista atrybutów:';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Przyk³ady formatu w³asnej listy atrybutów:</h4>
        <span class="sectionname"><strong>Nazwa;Dodatki;</strong>...</span>';
	var $_PHPSHOP_MULTISELECT = '<i>Wielokrotny wybór: u¿yj klawisza CTRL i myszki</i>';
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
	var $_PHPSHOP_RELATED_PRODUCTS = 'Produkty pokrewne';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Za pomoc± tej listy mo¿esz tworzyæ powi±zania miêdzy produktami. Wystarczy wybraæ tu jeden lub wiêcej produktów, które stan± siê <strong>produktami pokrewnymi</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Poni¿sze produkty tak¿e mog± Ciê zainteresowaæ:';
	var $_PHPSHOP_IMAGE_ACTION = 'Dzia³anie na zdjêciu';
	var $_PHPSHOP_NONE = 'Brak';
	var $_PHPSHOP_ORDER_HISTORY = 'Historia zamówienia';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Komentarz';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Uwagi odno¶nie Twego zamówienia';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Dodaæ ten komentarz?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Data dodania';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Klient poinformowany?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Zmiana statusu zamówienia';
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
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Typ produktu';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Lista typów produktu';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Dodaj/edytuj typ produktu';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Lista typu produktu dla';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Wylistuj typy produktu';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Dodaj typ produktu dla';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Dodaj typ produktu';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Typ produktu';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Nazwa typu produktu';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Opis typu produktu';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Parametry';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Informacja o typie produktu';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Publikowaæ?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Przegl±d typów produktu';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Szczegó³y typu produktu';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Parametry typu produktu';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Informacja o parametrze';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Typ produktu nie znaleziony!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Nazwa parametru';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Nazwa ta bêdzie nazw± kolumny tabeli. Musi byæ unikatowa i nie zawieraæ spacji.<BR>Na przyk³ad: materia³_g³ówny';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Etykieta parametu';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Opis parametru';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Typ parametru';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Liczba ca³kowita';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Tekst';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Krótki tekst';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Liczba zmiennoprzecinkowa';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Znak';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Data i czas';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Data';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'RRRR-MM-DD';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Czas';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'HH:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Podzia³ wiersza';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Wiele warto¶ci';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Dopuszczalne warto¶ci';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Pokazywaæ dopuszczalne warto¶ci jako wielokrotny wybór?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Je¿eli w³±czysz Dopuszczalne warto¶ci, Parametr mo¿e byæ tylko jedn± z tych warto¶ci. Przyk³ad dopuszczalnych warto¶ci:</strong><BR><span class="sectionname">Stal;Drewno;Plastik;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Domy¶lna warto¶æ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'W domy¶lnej warto¶ci parametru u¿ywaj tego formatu:<ul><li>Data: RRRR-MM-DD</li><li>Czas: HH:MM:SS</li><li>Data i Czas: RRRR-MM-DD HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Sztuka';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Wyszukiwanie zaawansowane wg parametrów';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Wyszukiwanie wg parametrów';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Chcesz znale¼æ produkt wed³ug parametrów technicznych?<BR>Mo¿esz skorzystaæ z poni¿szych wzorców:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Przepraszamy, nie istnieje kategoria do przeszukiwania.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Przepraszamy, nie istnieje opublikowany typ produktu o tej nazwie.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'jest jak';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'NIE jest jak';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Wyszukiwanie z ca³ym tekstem';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Wszystkie zaznaczone';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Dowolne zaznaczone';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Resetuj formularz';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Wyszukuj w kategorii';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Zmieñ parametry';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Kolejno¶æ malej±ca';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Kolejno¶æ rosn±ca';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Parametry kategorii';
	var $_PHPSHOP_FEE = 'Op³ata';
	var $_PHPSHOP_PRODUCT_CLONE = 'Klonuj produkt';
	var $_PHPSHOP_CSV_SETTINGS = 'Ustawienia';
	var $_PHPSHOP_CSV_DELIMITER = 'Separator';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Znak pola';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Wczytaj plik CSV';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Pobierz plik CSV';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Wczytaj z folderu';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Wczytaj plik CSV z serwera';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Eksportuj do pliku CSV';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Wybierz kolejno¶æ pól';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Kolejno¶æ domy¶lna';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'Kolejno¶æ w³asna';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Wyeksportuj wszystkie produkty do pliku CSV';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'Konfiguracja importu/eksportu CSV';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Zapisz zmiany';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Nazwa pola';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'Warto¶æ domy¶lna';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Kolejno¶æ pól';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Pole wymagane?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Import/eksport';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Dodaj nowe pole';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Dokumentacja';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Przepraszamy, ale ¿±dany produkt nie zosta³ odnaleziony!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Poka¿ produkty niedostêpne w magazynie';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Gdy w³±czone, produkty aktualnie niedostêpne w magazynie bêd± widoczne. W przeciwnym razie bêd± ukryte.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'W opakowaniu (jednostka: {unit}):';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'W pude³ku (jednostka: {unit}):';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Ukryj produkty niedostêpne w magazynie';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Produkty w promocji i ze zni¿k±';
	var $_PHPSHOP_FEATURED = 'W promocji';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Powrót do kraju';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Powrót do zarz¹dzania plikami';
	var $_PHPSHOP_ADD_STATE = 'Dodaj stan';
	var $_PHPSHOP_LIST_STATES = 'Poka¿ stany';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'w promocji ORAZ ze zni¿k±';
	var $_PHPSHOP_SHOW_FEATURED = 'produkty w promocji';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'produkty ze zni¿k±';
	var $_PHPSHOP_FILTER = 'Filtr';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Powrót do strony g³ównej';
	var $_PHPSHOP_EXPAND_TREE = 'Rozwiñ drzewo';
	var $_PHPSHOP_COLLAPSE_TREE = 'Zwiñ drzewo';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Cena po zni¿ce';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Tu mo¿na wpisaæ bezpo¶rednio cenê po zni¿ce, pomijaj±c ustalone rabaty.<br/>
Z tej ceny sklep automatycznie utworzy now± kwotê zni¿ki.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Cena za sztukê';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'Sklep jest offline?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'Je¶li to zaznaczysz, sklep wy¶wietli komunikat o trybie offline.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Komunikat o trybie offline';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Przedrostek dla tabel sklepu';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'Domy¶lnie jest to <strong>vm</strong>.';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Pokazywaæ ¶cie¿kê strony na górze listy produktów?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'W³±cza i wy³±cza wy¶wietlanie ¶cie¿ki strony na górze listy produktów w witrynie.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Pokazywaæ liczbê produktów?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Czy pokazywaæ liczbê produktów w kategorii, np Kategoria (4)?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'Styl przycisku Do koszyka';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'W³±czyæ dynamiczn± zmianê rozmiaru obrazka?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'Gdy zaznaczone, uaktywniasz dynamiczn± zmianê rozmiaru obrazka. Oznacza to, ¿e wszystkie miniaturki s± dopasowywane rozmiarem do podanych ni¿ej warto¶ci z u¿yciem funkcji PHP GD2 (dostêpno¶æ tej funkcji sprawdzisz w menu "System" -> "Informacje o systemie" -> "PHP" -> gd. 
        Jako¶æ miniaturki jest wówczas znacznie lepsza ni¿ w sytuacji, gdy zmiana rozmiaru dokonywana jest przez przegl±darkê. Nowe miniaturki umieszczane s± w katalogu /shop_image/product/resized. Je¿eli istnieje ju¿ miniaturka obrazu, jej kopia zostanie przes³ana do przegl±darki, wiêc oryginalny obraz nie bêdzie ponownie zmniejszany.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'Szeroko¶æ miniaturki';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'Docelowa <strong>szeroko¶æ</strong> miniaturki.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Wysoko¶æ miniaturki';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'Docelowa <strong>wysoko¶æ</strong> miniaturki.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Zaznacz co najmniej jedno pole w konfiguracji wysy³ki!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Konfiguracja ceny';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Grupa u¿ytkowników z dostêpem do cen';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'Wybrana grupa oraz grupy o wy¿szych uprawnieniach, które maj± dostêp do cen.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Pokazywaæ "(w tym XX% VAT)", gdy jest podatek?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'Gdy zaznaczone, u¿ytkownicy zobacz± tekst "(w tym xx% VAT)" dla cen zawieraj±cych podatek.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'Pokazywaæ cenê dla opakowania?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'Gdy zaznaczone, informacja o cenie sk³ada siê z jednostki produktu i ilo¶ci w opakowaniu:
<strong>Cena za jednostkê (10 sztuk)</strong><br/>
Gdy nie jest zaznaczone, ceny pokazywane s± klasycznie: <strong>Cena: PLN xx,xx</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'Wiêcej ustawieñ wewnêtrznych';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Ustawienia wewnêtrzne';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Funkcje interfejsu';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Konfiguracja podatku';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Quantity Start';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Quantity End';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'Ustawienia rejestracji u¿ytkownika';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'Rejestracja u¿ytkownika dozwolona?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'Konieczna aktywacja nowego konta?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'U¿yæ cichej (niejawnej) rejestracji u¿ytkownika?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'Gdy w³±czona, u¿ytkownik nie musi podawaæ swej nazwy ani has³a. Do utworzenia konta wykorzystywany jest wówczas adres email u¿ytkownika i has³o generowane losowo. Informacje te s± nastêpnie przesy³ane emailem.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Witaj, %s!

Dziêkujemy za rejestracjê w %s. Twoje konto klienta zosta³o utworzone.
Mo¿esz siê zalogowaæ w %s, korzystaj¹c z poni¿szej nazwy i has³a:

Nazwa u¿ytkownika - %s
Has³o - %s
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
	var $_VM_TAXDETAILS_LABEL = 'Suma podatku zawiera';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'Domy¶lna kolejno¶æ sortowania produktów';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'Okre¶la pole, wed³ug którego produkty s± domy¶lnie sortowane na stronie katalogowej.';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'Dostêpne pola kryterium sortowania';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'Wybierz pola kryterium sortowania na stronie katalogu produktów. Ka¿de okre¶la metodê sortowania na stronie katalogu produktów. Je¶li wy³±czysz wszystkie, formularz sortowania nie bêdzie wy¶wietlany.';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO = 'Pokazywaæ krótk± informacjê o zasadach zwrotu na stronie potwierdzenia zamówienia?';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP = 'W wiêkszo¶ci krajów europejskich w³a¶ciciele sklepów s± prawnie zobowi±zani do poinformowania klientów o zasadach anulowania zamówienia i zwrotu towaru. Powinno wiêc byæ w³±czone.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT = 'Tekst notki prawnej (wersja skrócona).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP = 'Ten tekst w skrócie informuje klientów o zasadach anulowania zamówienia i zwrotu towaru w Twym sklepie. Pokazywany jest na ostatniej stronie procesu zamówienia, tu¿ nad przyciskiem "Potwierd¼ zamówienie".';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK = 'Pe³na wersja zasad zwrotu (³±cze do elementu artyku³).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP = 'Najpierw dodaj artyku³ z dok³adnym opisem zasad anulowania zamówienia i zwrotu towaru, a nastêpnie wska¿ go tutaj.';
	var $_VM_LEGALINFO_SHORTTEXT = '<h5>Zasady zwrotu</h5>

Zgodnie z art. 7.1. Ustawy o ochronie niektórych praw konsumenckich masz prawo do anulowania zamówienia w ci±gu 10 dni od wys³ania przesy³ki. W takim wypadku musisz na w³asny koszt odes³aæ towar w oryginalnym, nienaruszonym opakowaniu. Pieni±dze zostan± zwrócone na Twoje konto natychmiast po otrzymaniu przez nas towaru. Pe³ne informacje znajdziesz na stronie naszych <a href="%s" onclick="%s" target="_blank">Warunków zakupu</a>.';
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
	var $_PHPSHOP_CSV_SKIP_FIRST_LINE = 'Skip first line';
	var $_PHPSHOP_CSV_SKIP_DEFAULT_VALUE = 'Skip default value';
	var $_PHPSHOP_CSV_OVERWRITE_EXISTING_DATA = 'Overwrite existing data';
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
	var $_PHPSHOP_CSV_INCLUDE_COLUMN_HEADERS = 'Include column headers';
	var $_PHPSHOP_CSV_UPLOAD_SETTINGS = 'Upload Settings';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS = 'Available Fields';
	var $_PHPSHOP_CSV_CONTINUE_UPLOAD = 'Continue upload';
	var $_PHPSHOP_CSV_CANCEL_UPLOAD = 'Cancel upload';
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
	var $_PHPSHOP_CSV_MINIMAL_FIELDS = 'IMPORTANT PLEASE NOTE:  The minimal required fields  to ADD a NEW PRODUCT are product_sku, product_name and category_path.  The product_sku, is the only field that is required to be UNIQUE and it must be included in every CSV file for the system to work correctly.';
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
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SKU = 'The unique identifier for a product.<br /><br />Usage:<ol><li>Select the name "product_sku" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Numeric</li><li>Letters</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PRICE = 'The price for a product without currency denominator.<br /><br />Usage:<ol><li>Select the name "product_price" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a price value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_NAME = 'The name of the product.<br /><br />Usage:<ol><li>Select the name "product_name" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol>Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DELETE = 'The product_delete field is a special field. This field is used to determine if a product should be deleted or not.<br />Usage:<ol><li>Select the name "product_delete" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the value Y. If the field contains any other value, the product will not be deleted.</li></ol><br />Values:<ul><li>Y: Yes, the product is to be deleted</li><li>N: No, the product is not to be deleted</li><li>Empty: Empty value, the product is not to be deleted</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DESC = 'Long description for the product.<br /><br />Usage:<ol><li>Select the name "product_desc" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_S_DESC = 'Short description for the product.<br /><br />Usage:<ol><li>Select the name "product_s_desc" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PUBLISH = 'The status if a product is published or not.<br /><br />Usage:<ol><li>Select the name "product_publish" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Y: Yes, the product is published</li><li>N: No, the product is not published</li><li>Empty: Empty value, the product is published.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WIDTH = 'The width of the product.<br /><br />Usage:<ol><li>Select the name "product_width" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a numeric value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_HEIGHT = 'The height of the product.<br /><br />Usage:<ol><li>Select the name "product_height" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a numeric value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LENGTH = 'The length of the product.<br /><br />Usage:<ol><li>Select the name "product_length" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a numeric value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LWH_UOM = 'The measurement of length, width and height of the product.This can be inches, centimeters, etc.<br /><br />Usage:<ol><li>Select the name "product_lwh_uom" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT = 'The weight of the product.<br /><br />Usage:<ol><li>Select the name "product_weight" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a numeric value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT_UOM = 'The measurement of weight of the product.This can be pounds, kilo, etc.<br /><br />Usage:<ol><li>Select the name "product_weight_uom" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABLE_DATE = 'The date a product will become availabable. For import the date should be in the format of day/month/year or day-month-year. On Windows systems the date goes until 19/01/2038.<br />Usage:<ol><li>Select the name "product_available_date" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a date value. If the field contains any other value, the data will be ignored.</li></ol><br />Values:<ul><li>Date: day/month/year or day-month-year</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE = 'The different choices a product has. Use this to give a product different specifications. For example a t-shirt that comes in different sizes and colours.<br /><br />You can adjust the prices per attribute by using the following options:<ul><li>+: Add this amount to the configured price.</li><li>-: Subtract this amount from the configured price.</li><li>=: Set the product\'s price to this amount.</li></ul><br />Usage:<ol><li>Select the name "attribute" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the attribute text.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.<br />The descriptors must be seperated by a semi-colon (;) while the values must be seperated by a comma (,). E.g.: Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00];</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABILITY = 'This shows when the product is available. The value can be a descriptive text or the name of an image filename. Images must be placed in "shop_image/availability/".<br />Usage:<ol><li>Select the name "product_availability" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_FULL_IMAGE = 'The filename of the image as located in the "shop_image/product/" folder. The filename can also be a URL. You will need to FTP the image directly to the <span style="font-style: italic;">/shop_image/product</span> folder.<br />NOTE: If you have dynamic resizing enabled, you need to fill the "product_thumb_image" field. VirtueMart resizes the image specified there.<br/><br />Usage:<ol><li>Select the name "product_full_image" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\'s are allowed.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_THUMB_IMAGE = 'The filename of the thumbnail image as located in the "shop_image/product/" folder. The filename can also be a URL. You will need to FTP the image directly to the <span style="font-style: italic;">/shop_image/product</span> folder.<br />NOTE: If you have dynamic resizing enabled, there still needs to be a value in this field. VirtueMart resizes the image that is specified here.<br /><br />Usage:<ol><li>Select the name "product_full_image" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\'s are allowed.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CUSTOM_ATTRIBUTE = 'A custom attribute will add an input field to the product page with the description of the attribute supplied.<br />Usage:<ol><li>Select the name "custom_attribute" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the attribute text.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.<br />The values must be seperated by a semi-colon (;). E.g.: Name;Extras;</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTES = 'Attributes are part of a product and are used by the child products to give them specifications.<br />Usage:<ol><li>Select the name "attributes" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the attributes text.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.<br />The values must be seperated by a pipe symbol (|). E.g.: attribute_name::list_order|attribute_name::list_order</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE_VALUES = 'Attribute values are the values of child products that are linked to the attributes of the parent product.<br />Usage:<ol><li>Select the name "custom_attribute" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the attribute value text.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.<br />The values must be seperated by a pipe symbol (|). E.g.: attribute_name::attribute_value|attribute_name::attribute_value</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PACKAGING = 'Specify the number of items in the package.<br />Usage:<ol><li>Select the name "product_packaging" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the numeric of items in the package.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_BOX = 'Specify the number of items in the box.<br />Usage:<ol><li>Select the name "product_box" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the numeric of items in the box.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT = 'Specify the amount or percentage of discount the product has. The values entered are exact values, no calculation is made. This is the same as if you are filling in a discount via the Product Discount List. If the discount already exists, it will not be added to the database but the product will be linked to the existing discount. The criteria for determining if a discount already exists the following values have to be exactly the same:<ol><li>Amount, be it a total or percentage</li><li>Start date</li><li>End date</li></ol>This prevents from filling the database with a huge number of the same discounts.<br /><br />Usage:<ol><li>Select the name "product_discount" from the dropdown menu on the configuration screen.</li><li>Optional: Select the name "product_discount_date_start" from the dropdown menu on the configuration screen.</li><li>Optional: Select the name "product_discount_date_end" from the dropdown menu on the configuration screen.</li><li>Add the chosen columns to your CSV file with the corresponding values.</li></ol><br />Values:<ul><li>product_discount</li><ul><li>Numeric<br />e.g. 10</li><li>Percentage: Must include the % sign<br />e.g. 10%</li></ul><li>product_discount_date_start</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul><li>product_discount_date_end</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_START = 'The day the discount for a product starts. For more information see "product_discount".<br /><br />Usage:<ol><li>Select the name "product_discount_date_start" from the dropdown menu on the configuration screen.</li><li>Add the chosen columns to your CSV file with the date value.</li></ol><br />Values:<ul><li>product_discount_date_start</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_END = 'The day the discount for a product ends. For more information see "product_discount".<br /><br />Usage:<ol><li>Select the name "product_discount_date_end" from the dropdown menu on the configuration screen.</li><li>Add the chosen columns to your CSV file with the date value.</li></ol><br />Values:<ul><li>product_discount_date_end</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_UPLOAD_SETTINGS = '<ul><li><span style="font-weight: bold;">Skip first line</span><br />If the CSV file has a header line at the beginning, choose this option to skip that line. This prevents the header from being added to your database.</li><li><span style="font-weight: bold;">Overwrite existing data</span><br />When adding new products to your database, unchecking this option prevents any existing data to be replaced for products that already exist in your database. Default is to update product data.</li><li><span style="font-weight: bold;">Skip default value</span><br />On the configuration page, a default value can be specified in case the field is empty in the CSV file. Enabling this option, the import will not include the field for updating if there is no value in the CSV file.</li><li><span style="font-weight: bold;">Price list upload only</span><br />The Price list upload only is to be used if you are updating the prices of your products. The layout of the CSV is expected to be 2 columns:<ol><li>product_sku</span></li><li>product_price</li></ol></li>Please note that it does NOT take into account the settings on the configuration page.<li><span style="font-weight: bold;">Use column headers as configuration</span><br />If the CSV file has column headers on the first line, this option can be used to use the column headers as the current configuration. The column headers should match one of the column names defined on the Available Tabs page. This configuration is on a per use basis, nothing is saved. Default values cannot be used with this option.</li><li><span style="font-weight: bold;">Show preview</span><br />Shows a 5 line preview of the file to be imported. The import can then be either cancelled or continued.</li><li><span style="font-weight: bold;">Collect debug information</span><br />In case of problems, use this option to see what happens during the import. At the end of the import a report will be generated with the steps and queries done during the import.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_NAME = 'The name of the manufacturer that is related to the product. This is used in combination with the manufacturer ID. If no manufacturer ID is specified, only the name is checked. New manufacturers will be created wiht incremental IDs. The process of adding/updating manufacturers follows the following guidelines:<ol><li>Name exists, ID exists --> ID is updated if different</li><li>Name exists, ID does not exist --> New manufacturer created with increment ID</li><li>Name does not exist, ID exists --> Generic name added with existing ID</li><li>Name does not exist, ID does not exist --> Do nothing</li></ol>Usage:<ol><li>Select the name "manufacturer_name" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the manufacturer name.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_ID = 'The ID of the manufacturer that is related to the product and must be unique. This is used in combination with the manufacturer name. If no manufacturer name is specified only, the product manufacturer link will be added/updated. Adding/updating manufacturers follows the following process:<ol><li>Name exists, ID exists --> ID is updated if different</li><li>Name exists, ID does not exist --> New manufacturer created with increment ID</li><li>Name does not exist, ID exists --> Generic name added with existing ID</li><li>Name does not exist, ID does not exist --> Do nothing</li></ol>When no name or ID exists nothing is done to prevent numerous generic name manufacturers from being added.<br /><br />Usage:<ol><li>Select the name "manufacturer_id" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the manufacturer ID.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_URL = 'A URL to either a picture or webpage of the product. When linked to a picture, the picture will be shown on the product details page.<br /><br />Usage:<ol><li>Select the name "product_url" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_IN_STOCK = 'The number of products that are still in stock.<br /><br />Usage:<ol><li>Select the name "product_in_stock" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a number value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
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