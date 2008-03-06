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
	var $_PHPSHOP_MENU = 'Meni';
	var $_PHPSHOP_CATEGORY = 'Skupina';
	var $_PHPSHOP_CATEGORIES = 'Skupine';
	var $_PHPSHOP_SELECT_CATEGORY = 'Izberi skupino:';
	var $_PHPSHOP_ADMIN = 'Administracija';
	var $_PHPSHOP_PRODUCT = 'Izdelek';
	var $_PHPSHOP_LIST = 'Seznam';
	var $_PHPSHOP_ALL = 'Vse';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Prika�i vse izdelke';
	var $_PHPSHOP_VIEW = 'Poglej';
	var $_PHPSHOP_SHOW = 'Poka�i';
	var $_PHPSHOP_ADD = 'Dodaj';
	var $_PHPSHOP_UPDATE = 'Uredi';
	var $_PHPSHOP_DELETE = 'Izbri�i';
	var $_PHPSHOP_SELECT = 'Izberi';
	var $_PHPSHOP_SUBMIT = 'Potrdi';
	var $_PHPSHOP_RANDOM = 'Naklju�ni izdelki';
	var $_PHPSHOP_LATEST = 'Zadnji izdelki';
	var $_PHPSHOP_HOME_TITLE = 'Domov';
	var $_PHPSHOP_CART_TITLE = 'Nakupovalna ko�arica';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Na blagajno';
	var $_PHPSHOP_LOGIN_TITLE = 'Prijava';
	var $_PHPSHOP_LOGOUT_TITLE = 'Odjava';
	var $_PHPSHOP_BROWSE_TITLE = 'Brskaj';
	var $_PHPSHOP_SEARCH_TITLE = 'I��i';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Urejanje ra�una';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Krmarjenje';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Oddelek';
	var $_PHPSHOP_INFO = 'Informacije';
	var $_PHPSHOP_BROWSE_LBL = 'Brskaj';
	var $_PHPSHOP_PRODUCTS_LBL = 'Izdelki';
	var $_PHPSHOP_PRODUCT_LBL = 'Izdelek';
	var $_PHPSHOP_SEARCH_LBL = 'I��i';
	var $_PHPSHOP_FLYPAGE_LBL = 'Podrobnosti';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Iskanje izdelka';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Naziv izdelka';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Kategorija izdelka';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Opis';
	var $_PHPSHOP_CART_SHOW = 'Odpri ko�arico';
	var $_PHPSHOP_CART_ADD_TO = 'V ko�arico';
	var $_PHPSHOP_CART_NAME = 'Ime';
	var $_PHPSHOP_CART_SKU = '�ifra';
	var $_PHPSHOP_CART_PRICE = 'Cena';
	var $_PHPSHOP_CART_QUANTITY = 'Koli�ina';
	var $_PHPSHOP_CART_SUBTOTAL = 'Skupaj';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Dodaj novo';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Naslov za po�iljanje';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Ni zadetkov!<br />';
	var $_PHPSHOP_PRICE_LABEL = 'Cena: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Dodaj v ko�aro';
	var $_PHPSHOP_NO_CUSTOMER = 'Niste registriran uporabnik. Prosim, da vnesete va�e podatke za pla�ilo';
	var $_PHPSHOP_DELETE_MSG = 'Res �elite izbrisati ta zapis?';
	var $_PHPSHOP_THANKYOU = 'Hvala za naro�ilo.';
	var $_PHPSHOP_NOT_SHIPPED = '�e neposlano';
	var $_PHPSHOP_EMAIL_SENDTO = 'Potrditveno sporo�ilo poslano na';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Ni MOS. Uporabnik za dodajanje na seznam uporabnikov Virtuemart ni na voljo';
	var $_PHPSHOP_ERROR = 'NAPAKA';
	var $_PHPSHOP_MOD_NOT_REG = 'Modul ni registriran.';
	var $_PHPSHOP_MOD_ISNO_REG = 'ni veljaven Virtuemart modul.';
	var $_PHPSHOP_MOD_NO_AUTH = 'Nimate pravic za dostop do �elenega modula.';
	var $_PHPSHOP_PAGE_404_1 = 'Stran ne obstaja';
	var $_PHPSHOP_PAGE_404_2 = 'Vneseno ime datoteke ne obstaja. Ne najdem datoteke:';
	var $_PHPSHOP_PAGE_403 = 'Neustrezne administrativne pravice';
	var $_PHPSHOP_FUNC_NO_EXEC = 'Nimate dovoljenja za izvajanje ';
	var $_PHPSHOP_FUNC_NOT_REG = 'Funkcija ni registirana';
	var $_PHPSHOP_FUNC_ISNO_REG = ' ni veljavna MOS_com_virtuemart funkcija.';
	var $_PHPSHOP_ADMIN_MOD = 'Admin';
	var $_PHPSHOP_USER_LIST_MNU = 'Seznam uporabnikov';
	var $_PHPSHOP_USER_LIST_LBL = 'Seznam uporabnikov';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Uporabni�ko ime';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Polno ime';
	var $_PHPSHOP_USER_LIST_GROUP = 'Skupina';
	var $_PHPSHOP_USER_FORM_MNU = 'Dodaj uporabnika';
	var $_PHPSHOP_USER_FORM_LBL = 'Dodaj/uredi uporabni�ke podatke';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Podatki za ra�un';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Naslov za transport';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Dodaj naslov';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'Ni naslova za transport.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Kratek naziv naslova';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Ime';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Priimek';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Srednje ime';
	var $_PHPSHOP_USER_FORM_TITLE = 'Naziv';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Uporabni�ko ime';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Geslo';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Potrdi geslo';
	var $_PHPSHOP_USER_FORM_PERMS = 'Dovoljenja';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = '�ifra kupca / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Naziv podjetja';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Naslov 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Naslov 2';
	var $_PHPSHOP_USER_FORM_CITY = 'Kraj';
	var $_PHPSHOP_USER_FORM_STATE = 'Dr�ava/Provinca/Regija';
	var $_PHPSHOP_USER_FORM_ZIP = 'ZIP/Po�tna �tevilka';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Dr�ava';
	var $_PHPSHOP_USER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Mobilni telefon';
	var $_PHPSHOP_USER_FORM_FAX = 'Fax';
	var $_PHPSHOP_USER_FORM_EMAIL = 'E-naslov';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Seznam modulov';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Seznam modulov';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Naziv modula';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Parametri';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Funkcije';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Vrstni red';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Dodaj modul';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Podatki o modulu';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Naziv modula (za Topmenu)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Naziv modula';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Dovoljenja za modul';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Glava modula';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Noga modula';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Prika�i modul v meniju Admin?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Prika�i vrstni red';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Opis modula';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'Jezikovna koda';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Jezikovna datoteka';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Seznam funkcij';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Seznam funkcij';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Naziv funkcije';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Ime razreda';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Metoda razreda';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Dovoljenja';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Dodaj funkcijo';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Podatki o funkciji';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Naziv funkcije';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Ime razreda';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Metoda razreda';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Dovoljenja funkcij';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Opis funkcije';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Seznam valut';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Seznam valut';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'Dodaj valuto';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Naziv valute';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'Koda valute';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Seznam dr�av';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Seznam dr�av';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Dodaj dr�avo';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Naziv dr�ave';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Koda dr�ave (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Koda dr�ave (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Seznam dr�av (USA)';
	var $_PHPSHOP_STATE_LIST_LBL = 'Seznam dr�av (USA) za: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Dodaj/uredi dr�avo (USA)';
	var $_PHPSHOP_STATE_LIST_NAME = 'Ime dr�ave (USA)';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'Koda dr�ave (USA) (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'Koda dr�ave (USA) (2)';
	var $_PHPSHOP_ADDRESS = 'Naslov';
	var $_PHPSHOP_CONTINUE = 'Nadaljuj';
	var $_PHPSHOP_EMPTY_CART = 'Ko�ara je prazna.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'Mednarodni po�iljatelj';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Ping stre�nika po�iljatelja';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'Ping stre�nika InterShipper';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'Ping stre�nika neuspe�en';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'Ping stre�nika uspe�en';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Prevoznik';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Odzivni<br />�as';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'sek.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Seznam na�inov po�iljanja';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Seznam na�inov po�iljanja';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Na�ini po�iljanja';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Aktivni';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Stro�ki obdelave';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Rok obdelave naro�ila';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'znesek';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'odstotek';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'dni';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Te�ki tovori';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Nastavi na�ine po�iljanja';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Dodaj na�in po�iljanja';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Uredi na�in po�iljanja';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Osve�i';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Na�in po�iljanja';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Aktiviraj';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Stro�ki obdelave';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Rok obdelave naro�ila';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'znesek';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'odstotek';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'dni';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Te�ki tovori';
	var $_PHPSHOP_ORDER_MOD = 'Naro�ila';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Potrdi naro�ila';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Prekli�i naro�ilo';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Natisni naro�ilo';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Izbri�i naro�ilo';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Seznam naro�il';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Naro�ila';
	var $_PHPSHOP_ORDER_LIST_ID = '�tevilka naro�ila';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Datum naro�ila';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Zadnji popravek';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Status';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'Skupaj';
	var $_PHPSHOP_ORDER_ITEM = 'Naro�eno blago';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Naro�ilo';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = '�tevilka naro�ila';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Datum naro�ila';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Status naro�ila';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Podatki o kupcu';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Podatki za izdajo ra�una';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Podatki o prejemniku';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Ra�un izstaviti:';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Dostaviti:';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Naziv';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Podjetje';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Naslov 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Naslov 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Kraj';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Dr�ava/Provinca/Regija';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'Zip/Po�tna �tevilka';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Dr�ava';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Telefon';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Fax';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'E-naslov';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Naro�eno blago';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Koli�ina';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Kol.';
	var $_PHPSHOP_ORDER_PRINT_SKU = '�ifra';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Cena';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Za pla�ilo';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'Skupaj';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'Davek skupaj';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Stro�ki transporta in obdelave';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Davek na transport';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Na�in pla�ila';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Naziv ra�una';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = '�tevilka ra�una';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Rok veljavnosti';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Arhiv pla�il';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Podatki za transport';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Podatki o pla�niku';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Prevoznik';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Na�in transporta';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Datum transporta';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Cena dostave';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Seznam vrst statusa naro�ila';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Dodaj vrsto statusa naro�ila';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Koda statusa naro�ila';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Naziv statusa naro�ila';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Status naro�ila';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Koda statusa naro�ila';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Naziv statusa naro�ila';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Seznam naro�il';
	var $_PHPSHOP_PRODUCT_MOD = 'Izdelki';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Trenutni izdelek';
	var $_PHPSHOP_CURRENT_ITEM = 'Trenutni predmet';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Seznam izdelkov';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Poglej seznam';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Cena';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = '�tevilo';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Te�a';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Seznam izdelkov';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Seznam izdelkov';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Naziv izdelka';
	var $_PHPSHOP_PRODUCT_LIST_SKU = '�ifra';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Objava';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Iskanje izdelka';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'spremenjeno';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 's spremembo cene';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'brez cene';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'Po';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Pred';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Dodaj izdelek';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Uredi izdelek';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Poglej trenutno predlogo izdelka v trgovini';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Dodaj predmet';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Dodaj nov predmet';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Nov izdelek';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Osve�i izdelek';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Podatki o izdelku';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Status izdelka';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Dimenzije in te�a izdelka';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Slike izdelka';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Nov izdelek';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Osve�i predmet';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Podatki o predmetu';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Status predmeta';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Dimenzije in te�a predmeta';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Slike predmeta';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Vrnitev na mati�ni izdelek';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = '�e �elite posodobiti sliko, vpi�ite ime nove slike.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Izbri�i trenutno sliko.';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Predmeti izdelka';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Lastnosti predmetov';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Resni�no �elite izbrisati ta izdelek\\nin z njim povezane predmete?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Resni�no �elite izbrisati ta predmet?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Prodajalec';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Izdelovalec';
	var $_PHPSHOP_PRODUCT_FORM_SKU = '�ifra';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Naziv';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Kategorija';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Cena izdelka (bruto)';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Cena izdelka (neto)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Opis izdelka';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Kratek opis';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'Na zalogi';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'Po naro�ilu';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Na voljo od';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'Posebna ponudba';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Vrsta popusta';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Objavim?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Dol�ina';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = '�irina';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Vi�ina';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Merska enota';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = '�irina';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Merska enota';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Predstavitvena slika';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Slika';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'kilogramov';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'centimetrov';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Enota';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'kos';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Enot v paketu';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Tukaj vnesete �tevilo enot v paketu. (maks. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Enot v paketu';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Tukaj vnesete �tevilo enot v paketu. (maks. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Rezultat dodajanja izdelkov';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Rezultat osve�itve izdelkov';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Rezultat dodajanja predmetov';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Rezultat osve�itve izdelkov';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Uporabi CSV nalaganje na stre�nik';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Mape izdelkov';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Seznam kategorij';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Drevesni seznam kategorij';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Dodaj kategorijo';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Podatki o kategoriji';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Naziv kategorije';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Glavna kategorija';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Opis kategorije';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Objavim?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Predloga kategorije';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Seznam lastnosti';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Seznam lastnosti za';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Naziv lastnosti';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Razvr��anje seznama';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Dodaj lastnost';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Obrazec lastnosti';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Nova lastnost izdelka';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Osve�i lastnost izdelka';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Nova lastnost predmeta';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Osve�i lastnost predmeta';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Naziv lastnosti';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Razvr��anje seznama';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Seznam cen';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Seznam cen';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Cena za';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Naziv skupine';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Cena';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Valuta';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Dodaj ceno';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Cenovni podatki';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Nova cena izdelka';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Osve�itev cene izdelka';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Nova cena predmeta';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Osve�itev cene izdelka';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Cena';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Skupina kupcev';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Poro�ila';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Seznam posameznih izdelkov';
	var $_PHPSHOP_RB_SALE_TITLE = 'Prodajno poro�ilo';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Pregled prodaje';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Nastavi interval';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Mese�no';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Tedensko';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Dnevno';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Ta mesec';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'Prej�nji mesec';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'Zadnjih 60 dni';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'Zadnjih 90 dni';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Za�ni z';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Kon�aj z';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Poka�i izbrani razpon';
	var $_PHPSHOP_RB_REPORT_FOR = 'Poro�ilo za ';
	var $_PHPSHOP_RB_DATE = 'Datum';
	var $_PHPSHOP_RB_ORDERS = 'Navodila';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Skupno prodanih predmetov';
	var $_PHPSHOP_RB_REVENUE = 'Prihodek';
	var $_PHPSHOP_RB_PRODLIST = 'Seznam izdelkov';
	var $_PHPSHOP_SHOP_MOD = 'Trgovina';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Slika';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Cena';
	var $_PHPSHOP_ORDER_STATUS_P = 'Na �akanju';
	var $_PHPSHOP_ORDER_STATUS_C = 'Potrjeno';
	var $_PHPSHOP_ORDER_STATUS_X = 'Preklicano';
	var $_PHPSHOP_ORDER_BUTTON = 'Naro�ilo';
	var $_PHPSHOP_SHOPPER_MOD = 'Kupec';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Seznam kupcev';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Seznam kupcev';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Ime uporabnika';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Polno ime';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Skupina';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Dodaj kupca';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Podatki o kupcu';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Podatki za izstavo ra�una';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Podatki';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Transportni podatki';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Dodaj naslov';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Kratko ime naslova';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Ime uporabnika';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Ime';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Priimek';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Srednje ime';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Naziv';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Ime kupca';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Geslo';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Potrdi geslo';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Skupina kupcev';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Ime podjetja';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Naslov 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Naslov 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Kraj';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Dr�ava/Provinca/Regija';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'ZIP/Po�tna �tevilka';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Dr�ava';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Mobilni telefon';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Faks';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'E-naslov';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Da';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'Ne';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Seznam skupin kupcev';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Seznam skupin kupcev';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Naziv skupine';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Opis skupine';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Obrazec skupin kupcev';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Dodaj skupino kupcev';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Naziv skupine';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Opis skupine';
	var $_PHPSHOP_STORE_MOD = 'Trgovina';
	var $_PHPSHOP_STORE_FORM_MNU = 'Uredi trgovino';
	var $_PHPSHOP_STORE_FORM_LBL = 'Podatki trgovine';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Kontaktni podatki';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Cela slika';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Nalo�i sliko';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Naziv trgovine';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Naziv trgovskega podjetja';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Naslov 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Naslov 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'Kraj';
	var $_PHPSHOP_STORE_FORM_STATE = 'Dr�ava/Provinca/Regija';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Dr�ava';
	var $_PHPSHOP_STORE_FORM_ZIP = 'ZIP/Po�tna �tevilka';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Kategorija trgovine';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Ime';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Priimek';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Srednje ime';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Naziv';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Telefon 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Telefon 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Faks';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'E-naslov';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Pot slike';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Opis';
	var $_PHPSHOP_PAYMENT = 'Pla�ilo';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Seznam na�inov pla�ila';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Seznam na�inov pla�ila';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Ime';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Koda';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Popust';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Skupina kupcev';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Vrsta na�ina pla�ila';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Dodaj na�in pla�ila';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Obrazec na�ina pla�ila';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Naziv na�ina pla�ila';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Skupina kupcev';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Popust';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Koda';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Razvr��anje seznama';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Vrsta na�ina pla�ila';
	var $_PHPSHOP_TAX_MOD = 'Davek';
	var $_PHPSHOP_TAX_RATE = 'Dav�ne stopnje';
	var $_PHPSHOP_TAX_LIST_MNU = 'Seznam dav�nih stopenj';
	var $_PHPSHOP_TAX_LIST_LBL = 'Seznam dav�nih stopenj';
	var $_PHPSHOP_TAX_LIST_STATE = 'Dr�ava ali regija pla�ila davka';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Dr�ava pla�ila davka';
	var $_PHPSHOP_TAX_LIST_RATE = 'Dav�na stopnja';
	var $_PHPSHOP_TAX_FORM_MNU = 'Dodaj dav�no stopnjo';
	var $_PHPSHOP_TAX_FORM_LBL = 'Dodaj dav�ne podatke';
	var $_PHPSHOP_TAX_FORM_STATE = 'Dr�ava ali regija pla�ila davka';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Dr�ava pla�ila davka';
	var $_PHPSHOP_TAX_FORM_RATE = 'Dav�na stopnja (za 16% => vpi�ite 0.16)';
	var $_PHPSHOP_VENDOR_MOD = 'Prodajalec';
	var $_PHPSHOP_VENDOR_ADMIN = 'Prodajalci';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Seznam prodajalcev';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Seznam prodajalcev';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Naziv prodajalca';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Admin';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Dodaj prodajalca';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Dodaj podatke';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Podatki o prodajalcu';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Kontaktni podatki';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Cela slika';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Nalo�i sliko';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Naziv trgovine prodajalca';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Naziv podjetja prodajalca';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Naslov 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Naslov 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Kraj';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Dr�ava/Provinca/Regija';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Dr�ava';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'ZIP/Po�tna �tevilka';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Kategorija prodajalca';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Ime';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Priimek';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Srednje ime';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Naziv';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Telefon 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Telefon 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Faks';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'E-naslov';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Pot slike';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Opis';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Seznam kategorij prodajalcev';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Seznam kategorij prodajalcev';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Naziv kategorije';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Opis kategorije';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Prodajalci';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Dodaj kategorijo prodajalca';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Obrazec kategorije prodajalca';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Podatki o kategoriji';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Naziv kategorije';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Opis kategorije';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Izdelovalec';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Izdelovalci';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Seznam izdelovalcev';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Seznam izdelovalcev';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Naziv izdelovalca';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Admin';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'Dodaj izdelovalca';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Dodaj podatke';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Podatki o izdelovalcu';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Naziv izdelovalca';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Kategorija izdelovalca';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'E-naslov';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'URL doma�e strani izdelovalca';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Opis';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Seznam kategorij izdelovalcev';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Seznam kategorij izdelovalcev';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Naziv kategorije';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Opis kategorije';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Izdelovalci';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Dodaj kategorijo prodajalca';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Obrazec kategorije prodajalca';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Podatki o kategoriji';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Naziv kategorije';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Opis kategorije';
	var $_PHPSHOP_HELP_MOD = 'Pomo�';
	var $_PHPSHOP_CART_ACTION = 'Osve�i';
	var $_PHPSHOP_CART_UPDATE = 'Osve�i koli�ino v nakupovalnem vozi�ku';
	var $_PHPSHOP_CART_DELETE = 'Odstrani izdelek iz nakupovalnega vozi�ka';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Cena';
	var $_PHPSHOP_PRODUCT_CALL = 'Kli�ite za ceno';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Nazaj';
	var $_PHPSHOP_PRODUCT_NEXT = 'Naprej';
	var $_PHPSHOP_CART_TAX = 'Davek';
	var $_PHPSHOP_CART_SHIPPING = 'Cena transporta';
	var $_PHPSHOP_CART_TOTAL = 'Skupaj';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Naprej';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'REGISTRIRAJTE SE';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Podatki za izdajo ra�una';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Podjetje';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Naziv';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Naslov';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Faks';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'E-naslov';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Transportni podatki';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Podjetje';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Naziv';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Naslov';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Faks';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Pla�ilni podatki';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Ime na kartici';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Na�in pla�ila';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = '�tevilka kreditne kartice';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Datum veljavnosti';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Zaklju�i naro�ilo';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'podatki, potrebni za pla�ilo s kreditno kartico, so izbrani';
	var $_PHPSHOP_ZONE_MOD = 'Transportna cona';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Seznam con';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Dodaj cono';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Dolo�i cono';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Dr�ava';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Trenutna cona';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Dodaj coni';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Osve�i';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Dolo�i cone';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Ime cone';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Opis cone';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Stro�ki na predmet za cono';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Omejitev stro�kov za cono';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Seznam con';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Ime cone';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Opis cone';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Stro�ki na predmet za cono';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Omejitev stro�kov za cono';
	var $_PHPSHOP_LOGIN_FIRST = 'Prosim, da se najprej prijavite ali registrirate na tej strani (uporabite okno za prijavo).<br>Hvala!';
	var $_PHPSHOP_STORE_FORM_TOS = 'Pogoji storitev';
	var $_PHPSHOP_AGREE_TO_TOS = 'Prosimo, da najprej potrdite na�e pogoje storitev.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Strinjam se s pogoji storitev';
	var $_PHPSHOP_LEAVE_BLANK = '(pustite PRAZNO, �e nimate ustrezne <br />php datoteke za predmet!)';
	var $_PHPSHOP_RETURN_LOGIN = 'Redne stranke: Prijavite se, prosim!';
	var $_PHPSHOP_NEW_CUSTOMER = 'Ste novi? Prosim, posredujte nam podatke za izstavitev ra�una';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Ra�un stranke:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Podatki naro�ila';
	var $_PHPSHOP_ACC_UPD_BILL = 'Tukaj osve�ite podatke za izstavitev ra�una.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Tukaj dodajate in upravljate transportne naslove.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Podatki o ra�unu';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Transportni podatki';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Ni naro�il';
	var $_PHPSHOP_ACC_BILL_DEF = '- Privzeto (Enako kot za izstavitev ra�una)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Ra�unu lahko dodate transportne naslove. Za spodaj izbrani transportni naslov si izberite primerno ime ali geslo.';
	var $_PHPSHOP_CONFIG = 'Nastavitve';
	var $_PHPSHOP_USERS = 'Uporabniki';
	var $_PHPSHOP_IS_CC_PAYMENT = 'pla�ilo s kreditno kartico?';
	var $_PHPSHOP_SHIPPING_MOD = 'Transport';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Transport';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Transportno podjetje';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Seznam transportnih podjetij';
	var $_PHPSHOP_RATE_LIST_MNU = 'Transportne tarife';
	var $_PHPSHOP_RATE_LIST_LBL = 'Seznam transportnih tarif';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Naziv';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Uredi seznam';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Dodaj transportno podjetje';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Urejanje/dodajanje transportnega podjetja';
	var $_PHPSHOP_RATE_FORM_MNU = 'Dodajanje transportne tarife';
	var $_PHPSHOP_RATE_FORM_LBL = 'Urejanje/dodajanje transportne tarife';
	var $_PHPSHOP_RATE_FORM_NAME = 'Opis transportne tarife';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Transportno podjetje';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Dr�ava';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'Za�etek obsega po�tnih �tevilk';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Konec obsega po�tnih �tevilk';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Najmanj�a te�a';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Najve�ja te�a';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Pla�ilo';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Pla�ilo za paket';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'Dav�na �t.';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Uredi seznam';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Transportno podjetje';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Opis transportne tarife';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Te�a od ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... do';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Transportno podjetje';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Uredi seznam';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'NAPAKA: Oznaka transportnega podjetja �e obstaja.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'NAPAKA: Izberite transportno podjetje.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'NAPAKA: Obstaja �e najmanj ena transportna tarifa, izbri�ite prej�nje tarife transportnega podjetja';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'NAPAKA: Ne najdem transportnega podjetja s to oznako.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'NAPAKA: Izberite transportno podjetje.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'NAPAKA: Ne najdem transportnega podjetja s to oznako.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'NAPAKA: Manjka opis tarife.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'NAPAKA: Ciljna dr�ava ni veljavna. Navedbe ve� dr�av lo�ite z ";".';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'NAPAKA: Izberite najmanj�o te�o';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'NAPAKA: Izberite najve�jo te�o';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'NAPAKA: Najni�ja te�a mora biti manj�a od najvi�je';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'NAPAKA: Izberite transportno tarifo';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'NAPAKA: Izberite valuto';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'NAPAKA: Izberite transportno tarifo';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Prosim, izberite';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Transportno podjetje';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Transportna tarifa';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Cena';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-ni�-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Kreditna kartica';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Uporabite obdelavo pla�ila';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Izstavitev ra�una banki';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Le naslov/pla�ilo po povzetju';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Prosim, izberite transportni naslov!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Prosim, izberite na�in transporta!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Prosim, izberite na�in pla�ila!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Prosim, preglejte posredovane podatke in potrdite naro�ilo!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Prosim, izberite na�in transporta.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Prosim, izberite drug na�in transporta.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Prosim, izberite na�in pla�ila.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Prosim, vpi�ite �tevilko kreditne kartice.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Prosim, vpi�ite ime na kreditni kartici.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = '�tevilka kreditne kartice ni veljavna.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Prosim, vpi�ite mesec (rok) veljavnosti kreditne kartice.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Prosim, vpi�ite leto (rok) veljavnosti kreditne kartice.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'Datum veljavnosti kartice je potekel.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Prosim, izberite naslovnika.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Neveljavna �tevilka ra�una';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'V nakupovalnem vozi�ku ni ni�esar!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'NAPAKA: Prosim, izberite transportno podjetje!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'NAPAKA: Izbrane transportne tarife ne najdem!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'NAPAKA: Izbranega transportnega naslova ne najdem!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'NAPAKA: Manjkajo podatki kreditne kartice ...';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'NAPAKA: Kreditne kartice ne najdem!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = '�al je uporabljena �tevilka kreditne kartice testna �tevilka!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'Uporabnikove �ifre ni v bazi podatkov!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Manjka ime imetnika ban�nega ra�una.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Manjka koda IBAN.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Manjka �tevilka ban�nega ra�una.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Manjka koda banke.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Manjka ime banke.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Za odjavo je potreben ustrezen korak!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Podatko o pla�ilu shranjeni za kasnej�o odbelavo.<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Vrednost naro�ila je manj�a od najni�je zahtevane vrednosti.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'Najni�ja zahtevana vrednost naro�ila je:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Pla�ilo s kreditno kartico';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'Drugi na�ini pla�ila';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Prosim, izberite na�in pla�ila:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Najni�ja zahtevana vrednost naro�ila trgovine je';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Podatki ban�nega ra�una';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = '�tevilka ra�una';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'Koda banke';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Ime banke';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Imetnik ra�una';
	var $_PHPSHOP_MODULES = 'Moduli';
	var $_PHPSHOP_FUNCTIONS = 'Funkcije';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Posebni izdelki';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = '�e �elite, lahko naro�ilu dodate opombe';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Strankine opombe';
	var $_PHPSHOP_INCLUDING_TAX = '(z $tax% DDV)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Prosim, izberite predmet';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Predmet';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Obseg prenosa s spleta';
	var $_PHPSHOP_DOWNLOADS_START = 'Za�ni prenos s spleta';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Prosim, vpi�ite �ifro za prenos s spleta, ki ste jo prejeli po e-po�ti in kliknite na "Za�ni prenos".';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = '�al je va�emu dovoljenju prenosa s spleta potekel rok';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = '�al ste dosegli najve�je dovoljeno �tevilo prenosov s spleta';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Neveljaven prenos s spleta!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Sporo�ila ni bilo mogo�e poslati ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Sporo�ilo poslano  ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Podatki o prenosu s spleta';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'Naro�ene datoteke so na voljo za prenos';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Prosim, vpi�ite �ifre naslednjih prenosov v na� obseg prenosov s spleta: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'Najve�je dovoljeno �tevilo prenosov na datoteko je: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Dovoljenje za prenos s spleta pote�e v dolo�enem roku po prvem prenosu';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Vpra�anja? Te�ave?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Podatki o prenosu:  ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'S spleta prenosljiv izdelek?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Hvala za pla�ilo. 
        Transakcija je bila uspe�na. Podjetje PayPal vam bo po e-po�ti poslalo potrdilo transakcije. 
        Lahko nadaljujete ali pa se prijavite na <a href=http://www.paypal.com>www.paypal.com</a>, �e si �elite ogledati podrobnosti transakcije.';
	var $_PHPSHOP_PAYPAL_ERROR = 'Pri obdelavi transakcije je pri�lo do napake. Statusa naro�ila ni bilo mogo�e osve�iti.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Zahvaljujemo se vam za nakup. Podatki o naro�ilu sledijo.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Hvala za zaupanje.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Vpra�anja? Te�ave?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'Prejeli smo naslednje naro�ilo.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = '�e si �elite ogledati naro�ilo, sledite spodnji povezavi.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Negativne vrednosti niso dovoljene.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Prosim, vnesite veljavno koli�ino za ta predmet.';
	var $_PHPSHOP_CART_STOCK_1 = 'Izbrana koli�ina presega trenutno zalogo. ';
	var $_PHPSHOP_CART_STOCK_2 = 'Trenutno je na zalogi $product_in_stock izdelkov. ';
	var $_PHPSHOP_CART_STOCK_3 = '�e �elite, da vas uvrstimo na �akalni seznam, kliknite tukaj.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Prosim, izberite posebni predmet.';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'ni�';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'g.';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'ga.';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'dr.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'prof.';
	var $_PHPSHOP_DEFAULT = 'Privzeto';
	var $_PHPSHOP_AFFILIATE_MOD = 'Administracija partnerjev';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Seznam partnerjev';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Seznam partnerjev';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Naziv partnerja';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Aktivni';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Stopnja';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Skupno na mesec';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Mese�na provizija';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Seznam naro�il';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'E-po�ta partnerjem';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'E-po�ta partnerjem';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'Komu poslati e-po�to(* = VSEM)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Va�a e-po�ta';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Zadeva';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Vklju�no s trenutno statistiko';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Stopnja provizije (odstotki)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Aktivni?';
	var $_PHPSHOP_DELIVERY_TIME = 'Obi�ajni �as dostave';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Podatki od dostavi';
	var $_PHPSHOP_MORE_CATEGORIES = 'Podkategorije:';
	var $_PHPSHOP_AVAILABILITY = 'Razpolo�ljivost';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Izdelek trenutno ni na voljo.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Na voljo bo: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Povzetek';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Statistika';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Stranke';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'aktivni izdelki';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'pasivni izdelki';
	var $_PHPSHOP_STATISTIC_SUM = 'Vsota';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Nova naro�ila';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Nove stranke';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = '�e �elite prejeti obvestilo, ko bo izdelek spet na zalogi, spodaj vi�ite svoj e-naslov. 
                                        Va�ega naslova ne bomo posredovali, prodali ali uporabili v kakr�en koli drug namen, kot da vas obvestimo,
                                        da je izdelek spet na zalogi.<br /><br />Hvala!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Hvala za potrpe�ljivost! <br />Takoj, ko bomo imeli podatke o zalogi, vas bomo o tem obestili.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Obvestite me!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Natisni pogled';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Izberete lahko Authorize.net ALI CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' Stanje nastavitvene datoteke:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'zapisovanje je mogo�e';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'zapisovanje ni mogo�e';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Globalno';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Pot in URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Stran';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Transport';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Preverba';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Posredovanja';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Pla�ila';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Uporabi le kot katalog';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = '�e okence ozna�ite, izklju�ite vse funkcije nakupovalnega vozi�ka.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Poka�i cene';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Poka�em cene z davkom?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Poka�e, ali kupci vidijo cene z davkom ali brez.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Ozna�ite, �e �elite prikaz cen. Pri uporabi funkcij kataloga se nekateri odlo�ijo za prikaz brez cen.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Navidezni davek';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'To dolo�a, ali so predmeti s te�o "ni�" obdav�eni ali ne. Spremenite ps_checkout.php->calc_order_taxable(), �e �elite druga�no nastavitev.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Oblika davka:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Glede na naslov naslovnika';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Glede na naslov prodajalca';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'To dolo�a, kateri davek bo uporabljen za izra�un:<br />
                                                <ul><li>davek dr�ave, kjer je trgovina</li><br/>
                                                <li>ali davek dr�ave kupca.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Omogo�im razli�ne dav�ne stopnje?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'To ozna�ite, �e ponujate izdelke z razli�nimi dav�nimi stopnjami (npr. 7% za knjige in prehrambne izdelke, 16% za druge izdelke)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Od�tejem popust pred obra�unavanjem davka/transportnih stro�kov?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Strankam omogo�i sistem ocenjevanja/vrednotenja';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = '�e je mo�nost vklju�ena, je strankam omogo�eno <strong>ocenjevanje izdelkov</strong> in <strong>pisanje mnenj</strong>. <br />
                                                                                Stranke lahko svoje izku�nje z izdelkom na ta na�in posredujejo drugim strankam.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Nastavi spremenljivko, na podlagi katere se popust na pla�ilo od�teje PRED (ozna�eno) ali PO obra�unu davka in transportnih stro�kov.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Ali stranke lahko pustijo podatke o ban�nem ra�unu?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Ozna�ite, �e �elite, da imajo stranke ob registraciji mo�nost posredovanja podatkov o ban�nem ra�unu.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Ali stranke lahko izberejo dr�avo/regijo?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Ozna�ite, �e �elite, da imajo stranke ob registraciji mo�nost izbire dr�ave ali regije.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Ali se morajo stranke strinjati s pogoji storitev?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Ozna�ite, �e �elite, da se stranke pred registracijo strinjajo s pogoji storitev.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Preverjanje zaloge?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Dolo�a, ali naj program preveri zalogo, ko stranka izdelek doda v nakupovalni vozi�ek. 
                                                                                          �e je mo�nost vklju�ena, strankam ne dovoli, da bi v nakupovalni vozi�ek dodale ve� izdelkov, kot jih je na zalogi.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Omogo�i partnerski program?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'To omogo�a bele�enje partnerjev na uporabni�ki strani trgovine. Mo�nost omogo�ite, �e ste izbrali partnerje, ki imajo dostop v admistrativni del.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Oblika obvestil o naro�ilih:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Besedilna oblika';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML oblika';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'To dolo�a nastavitve potrdil naro�il:<br />
                                                                                        <ul><li>kot preprosto besedilno obvestilo</li>
                                                                                        <li>ali kot html obvestilo s slikami.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Omogo�im administracijo uporabni�kih strani uporabnikom, ki nimajo dostopa do administrativnih strani?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'S to nastavitvijo omogo�ite administracijo uporabni�kih strani uporabnikom,
                                                                                              ki so administratorji trgovine, nimajo pa dostopa do administrativnih strani Mambo (npr. Registrirani / urednik).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'URL naslov va�e strani. Obi�ajno enak Mambo URL (s po�evnico na koncu naslova!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'VARNI URL';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'Za��iteni URL naslov va�e strani. (s po�evnico na koncu naslova!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'URL KOMPONENTE';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'URL naslov VirtueMart komponente. (s po�evnico na koncu naslova!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'URL SLIKE';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'URL naslov slikovnega imenika VirtueMart komponente.(s po�evnico na koncu naslova!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'ADMIN POT';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'Pot do imenika VirtueMart komponente.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'POT RAZREDOV';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'Pot do imenika razredov phpShop.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'POT STRANI';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'Pot do html imenika phpShop.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'POT SLIKE';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'Pot do imenika slik trgovine phpShop.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'DOMA�A STRAN';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'To je privzeta stran, ki se bo nalo�ila.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'STRAN NAPAKE';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'To je privzeta stran za sporo�ila o napakah.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'STRANO DPRAVE NAPAK';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'To je privzeta stran za sporo�ila za odstranjevanje programskih napak.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'ODSTRANJEVANJE NAPAK ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'ODSTRANJEVANJE NAPAK?  	   	Vklju�i poro�anje za odstranjevanje programskih napak. Na dnu vsake strani se odpre stran STRANODPRAVENAPAK. V veliko pomo� pri razvijanju trgovine, ker prikazuje vsebino nakupovalnih vozi�kov, vrednosti v okencih obrazcev itd.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'UPORABNI�KA STRAN';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'To je privzeta stran za prikaz podrobnosti o izdelkih.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Predloga kategorij';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Dolo�anje privzete predloge kategorij za prikaz izdelkov po kategorijah.<br />
                                                                                                      Nove predloge lahko ustvarjate na podlagi obstoje�ih datotek predlog,<br />
                                                                                                      (ki so v imeniku <strong>COMPONENTPATH/html/templates/</strong> in se za�nejo z browse_)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Privzeto �tevilo izdelkov v vrstici';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Dolo�anje �tevila izdelkov v vrstici.<br />
                                                                                                      Primer: �e je nastavitev 4, bodo v predlogi kategorije prikazani 4 izdelki na vrstico';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = 'slika "ni slike"';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Ta slika bo prikazana, ko slika izdelka ni na voljo.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'VRSTICE ISKANJA';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Dolo�i �tevila vrstic na stran, ki bodo prikazane, ko bodo rezultati iskanja prikazani v obliki seznama.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'BARVA ISKANJA 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Dolo�i barve lihih vrstic v seznamu rezultatov.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'BARVA ISKANJA 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Dolo�anje barve sodih vrstic v seznamu rezultatov.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'NAJVE� VRSTIC';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Dolo�anje �tevila vrstic, ki so prikazane v okencu izbire seznama naro�il.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Prika�i nogo ';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'V nogi prika�e sliko powered-by-VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Izberite na�in transporta za trgovino';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Standardni transportni modul s posami�nimi nastavitvami transportnih podjetij in tarif. <strong>PRIPORO�LJIVO !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '  	Modul transportnih con (Zone Transport Module Country Version 1.0)<br />
                                                                                                            �e �elite ve� podatkov o tem modulu, obi��ite <a href="http://ZephWare.com">http://ZephWare.com</a><br />
                                                                                                            ali se obrnite na <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Ozna�ite, �e �elite uporabljati modul transportnih con';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<a href="http://www.ups.com" target="_blank">UPS Online? Tools</a> Izra�un transportnih stro�kov';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'Vstopna koda UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Va�a vstopna koda UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'Uporabni�ko ime UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'Uporabni�ko ime, ki ste ga prejeli od UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'Geslo UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'Geslo ra�una UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'Modul InterShipper. Ozna�ite, le �e imate ra�un <a href="http://www.intershipper.com" target="_blank">Intershipper.com</a>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Onemogo�i izbiro na�ina transporta. Izberite, �e va�e stranke naro�ajo s spleta prenosljive izdelke, za katere transport ni potreben.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'Geslo InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Geslo va�ega ra�una InterShipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'E-naslov InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'E-naslov va�ega InterShipper ra�una.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'KODIRNI KLJU�';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Kodirni klju� se uporablja za kodiranje v bazi shranjenih podatkov. Dostop do teh datoteke mora biti ves �as za��iten.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Omogo�i odjavno vrstico';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'To ozna�ite, �e �elite, da bo stranka med postopkom odjave videla  "odjavno vrstico" ( 1 - 2 - 3 - 4 z grafi�no podporo).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Izberite postopek odjave za va�o trgovino';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Standardni :</strong><br/>
               1. Izbira transportnega naslova<br />
              2. Izbira na�ina transporta<br />
              3. Izbira na�ina pla�ila<br />
              4. Zaklju�ek naro�ila';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Postopek 2:</strong><br/>
               1. Izbira transportnega naslova<br />
              2. Izbira na�ina transporta<br />
              3. Zaklju�ek naro�ila';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Postopek 3:</strong><br/>
               1. Izbira na�ina transporta<br />
              2. Izbira na�ina pla�ila<br />
              3. Zaklju�ek naro�ila';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Postopek 4:</strong><br/>
               1. Izbira na�ina pla�ila<br />
              2. Zaklju�ek naro�ila';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Omogo�i prenos s spleta';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Ozna�ite, �e �elite omogo�iti prenos s spleta. Velja le za izdelke, ki jih je mogo�e prenesti s spleta.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Status naro�ila, ki omogo�a prenos s spleta';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Izberite status naro�ila, ob katerem stranka preko e-po�te prejme obvestilo o prenosu s spleta.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Status naro�ila, ki onemogo�a prenos s spleta';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Izberite status naro�ila, ob katerem stranki prenos s spleta ni omogo�en.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'KORENSKIIMENIKPRENOSOV';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'Fizi�na pot do datotek, ki jih stranka lahko prenese s spleta. (s po�evnico na koncu!)<br>
        <span class="message">Varnost va�e trgovine: �e je mogo�e, uporabite imenik, ki je KJER KOLI, RAZEN V KORENSKEM SPLETNEM IMENIKU</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Zgornja omejitev prenosa';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Dolo�i �tevilo prenosov, ki so mogo�i z eno �ifro (za eno naro�ilo)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Potek roka prenosov';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Nastavi �asovni razpon <strong>v sekundah</strong>, ki je stranki na voljo za prenose s spleta. 
  �as za�ne te�i s prvim prenosom! Ko rok pote�e, �ifra prenosa postane neveljavna.<br />Opomba : 86400s=24h.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Omogo�im IPN pla�ila preko sistema PayPal?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Ozna�ite, �e �elite strankam omogo�iti pla�ilo preko sistema PayPal.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'E-naslov za pla�ila preko sitema PayPal:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Poslovni e-naslov za pla�ila preko sistema PayPal. Uporablja se tudi kot naslov prejemnika.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Status naro�ila za uspe�ne transakcije';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Izberite stanje naro�ila, ki ozna�uje, da je bila transakcija PayPal IPN uspe�na. �e uporabljate nakupe prenosov s spleta: 
  izberite status, ki omogo�a prenos s spleta (stranka s tem po e-po�ti prejme obvestilo o prenosu).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Status naro�ila za neuspe�ne transakcije';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Izberite stanje naro�ila, ki ozna�uje, da je bila transakcija PayPal IPN neuspe�na.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Omogo�im IPN pla�ila preko sistema PayMate?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Ozna�ite, �e �elite strankam omogo�iti pla�ilo preko avstralskega sistema PayMate.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'Uporabni�ko ime PayMate:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Va� uporabni�ki ra�un pri PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Omogo�im pla�ila preko Authorize.net?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Ozna�ite, �e �elite uporabljati Authorize.net s phpShop.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Testni na�in ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Izberite \'Da\' med testiranjem. Izberite \'Ne\', �e �elite omogo�iti dejanske transakcije.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Da';
	var $_PHPSHOP_ADMIN_CFG_NO = 'Ne';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = '�ifra prijave na Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'To je va�a �ifra za prijavo na Authorize.Net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Transakcijski klju� Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'To je va� transakcijski klju� za Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Tip potrditve';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'To je tip potrditve za Authorize.Net.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Omogo�im CyberCash?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Ozna�ite, �e �elite uporabljati CyberCash s phpShop.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash TRGOVEC';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_TROVEC je �ifra trgovca CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'Trgovski klju� CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'Trgovski klju� CyberCash je trgovec za CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'PLA�ILNI URL naslov za CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'PLA�ILNI URL naslov za CyberCash URL za varna pla�ila sistema CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'TIP POT. CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'TIP POT. CyberCash je tip potrditve transakcije sistema CyberCash';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Raz�irjeno iskanje';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'I��i po vseh kategorijah';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'I��i po vseh podatkih izdelka';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Le po imenu izdelka';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Le po izdelovalcu/prodajalcu';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Le po opisu izdelka';
	var $_PHPSHOP_SEARCH_AND = 'in';
	var $_PHPSHOP_SEARCH_NOT = 'ne';
	var $_PHPSHOP_SEARCH_TEXT1 = 'Prvi seznam omogo�a izbiro kategorije za omejitev iskanja. 
        Drugi seznam omogo�a omejitev iskanja na dolo�en podatek izdelka (npr. ime). 
        Ko izberete na�in iskanja (ali pustite privzeto nastavitev VSE), vpi�ite klju�no besedo iskanja. ';
	var $_PHPSHOP_SEARCH_TEXT2 = ' Iskanje lahko poglobite z dodatkom druge klju�ne besede in izbiro funkcije IN ali NE. 
        �e izberete IN, morajo podatki izdelka vsebovati obe besedi, da bo prikazan. 
        �e izberete IN, morajo podatki izdelka vsebovati prvo besedo, druge pa ne, da bo izdelek prikazan.';
	var $_PHPSHOP_ORDERBY = 'Uredi po';
	var $_PHPSHOP_CUSTOMER_RATING = 'Povre�na ocena strank';
	var $_PHPSHOP_TOTAL_VOTES = 'Skupno �t. glasov';
	var $_PHPSHOP_CAST_VOTE = 'Oddajte glas, prosim';
	var $_PHPSHOP_RATE_BUTTON = 'Ocenite';
	var $_PHPSHOP_RATE_NOM = 'Ocena';
	var $_PHPSHOP_REVIEWS = 'Mnenja strank';
	var $_PHPSHOP_NO_REVIEWS = 'Za ta izdelek ni mnenja.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Napi�ite prvo mnenje ...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Prijavite se, da boste lahko napisali mnenje.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Ocenite izdelek, da boste lahko oddali mnenje!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Prosimo, da mnenje o izdelku raz�irite. Najmanj�e �tevilo znakov: 100';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Prosimo, da mnenje o izdelku skr�ite. Najve�je �tevilo znakov: 2000';
	var $_PHPSHOP_WRITE_REVIEW = 'Napi�ite mnenje o tem izdelku!';
	var $_PHPSHOP_REVIEW_RATE = 'Najprej ocenite izdelek. Prosim, izberite oceno med 0 (najni�ja) in 5 zvezdicami(najvi�ja).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Napi�ite kratko mnenje ...(min. 100, maks. 2000 znakov) ';
	var $_PHPSHOP_REVIEW_COUNT = 'Znakov: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Oddajte mnenje';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Za ta izdelek ste �e oddali mnenje. Hvala!';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Hvala za va�e mnenje.';
	var $_PHPSHOP_COMMENT = 'Opomba';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Dodaj/uredi tipe kreditnih kartic';
	var $_PHPSHOP_CREDITCARD_NAME = 'Ime kreditne kartice';
	var $_PHPSHOP_CREDITCARD_CODE = 'Kreditna kartica - kratka koda';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Tip kreditne kartice';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Seznam kreditnih kartic';
	var $_PHPSHOP_UDATE_ADDRESS = 'Osve�i naslov';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Nadaljevanje nakupov';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Naro�ilo je bilo uspe�no!';
	var $_PHPSHOP_ORDER_LINK = '�e si �elite ogledati podrobnosti naro�ila, kliknite na to povezavo.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'Status naro�ila �t. {order_id} je bil spremenjen.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'Novi status je:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = '�e si �elite ogledati podrobnosti naro�ila, kliknite na to povezavo (ali naslov kopirajte v brskalnik):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Sprememba statusa naro�ila: Va�e naro�ilo {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Obvestim stranko?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Najprej spremenite stanje naro�ila, prosim!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Popust za privzeto skupino kupcev (%)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Pozitivna vrednost X pomeni: �e izdelek za TO skupino kupcev nima dolo�ene cene, se privzeta cena zmanj�a za X %. Negativna vrednost ima obraten u�inek';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Popust na izdelek';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Seznam popustov na izdelke';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Dodaj/uredi popust na izdelek';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Znesek popusta';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Vpi�ite znesek popusta';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Tip popusta';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Odstotkov';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Skupaj';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Naj bo popust znesek ali vrednost?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Za�etek popustnega roka';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Dolo�i dan, s katerim se popust za�ne';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Konec popustnega roka';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Dolo�i dan, s katerim se popust kon�a';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Obrazec za popuste na izdelke lahko uporabite za dodajanje popustov!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Prihranite';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Prikaz cele slike';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Slog prikaza valute';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Oznaka valute';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Tukaj lahko uporabljate tudi HTML oznake (npr. ?,?,?, ...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Decimalna mesta';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = '�t. prikazanih decimalnih mest (lahko je 0)<br><b>V primeru razlike v decimalnih mestih zaokro�i vrednost</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Oznaka decimalke';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Znak za oznako decimalke';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Lo�evanje na tiso�';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Znak za lo�evanje na tiso� (lahko je prazno)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Pozitivna oblika';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Oblika, ki prikazuje pozitivne vrednosti.<br>(Oznaka ozna�uje valuto)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Negativna oblika';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Oblika, ki prikazuje negativne vrednosti.<br>(Oznaka ozna�uje valuto)';
	var $_PHPSHOP_OTHER_LISTS = 'Drugi seznami izdelkov';
	var $_PHPSHOP_MORE_IMAGES = 'Poglej ve� slik';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Razpolo�ljive slike za';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Nazaj na podrobnosti izdelka';
	var $_PHPSHOP_FILEMANAGER = 'Upravitelj datotek';
	var $_PHPSHOP_FILEMANAGER_LIST = 'Upravitelj datotek::Seznam izdelkov';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Dodaj sliko/datoteko';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Dodeljene slike';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'Je prenosljiva?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Dodeljene datoteke (podatkovni listi,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Objavljeno?';
	var $_PHPSHOP_FILES_LIST = 'Upravitelj Datotek::Seznam slik/datotek za ';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Ime datoteke';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'Naslov datoteke';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Vrsta datoteke';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Uredi vnos datoteke';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Cela slika';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Predstavitvena slika';
	var $_PHPSHOP_FILES_FORM = 'Nalo�i datoteko za';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Trenutna datoteka';
	var $_PHPSHOP_FILES_FORM_FILE = 'Datoteka';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Slika';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Nalo�i v';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'Privzeta pot slike izdelka';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Dolo�ite lokacijo datoteke';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Pot prenosa (npr. za prodajo prenosljivih datotek!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Samodejno ustvarim predstavitveno sliko?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Je datoteka objavljena?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Naslov datoteke (kar stranka vidi)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Opis datoteke';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'URL naslov datoteke (po izbiri)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Vnesite veljavno pot!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'Predstavitvena slika uspe�no ustvarjena!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'Predstavitvene slike ni mogo�e ustvariti!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Napaka pri nalaganju slike/datoteke';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Datoteke cele slike ni mogo�e izbrisati.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Datoteka cele slike uspe�no izbrisana.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Datoteke predstavitvene slike ni mogo�e izbrisati (morda ni obstajala): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Predstavitvena slika uspe�no izbrisana.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Datoteke ni mogo�e izbrisati.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Datoteka uspe�no izbrisana.';
	var $_PHPSHOP_FILES_NOT_FOUND = '�al iskane datoteke ne najdem!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Slike ne najdem!';
	var $_PHPSHOP_COUPON_MOD = 'Kupon';
	var $_PHPSHOP_COUPONS = 'Kuponi';
	var $_PHPSHOP_COUPON_LIST = 'Seznam kuponov';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Kupon je �e vnov�en.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Kupon vnov�en! Hvala.';
	var $_PHPSHOP_COUPON_ENTER_HERE = '�e imate kodo kupona, jo vpi�ite spodaj:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Oddaj';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Koda kupona �e obstaja. Poskusite �e enkrat.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Osve�i kupon';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Kliknite na kodo kupona, �e ga �elite urediti. �e �elite kodo kupona izbrisati, jo izberite in kliknite na Izbri�i:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Koda';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Odstotek ali znesek';
	var $_PHPSHOP_COUPON_TYPE = 'Vrsta kupona';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Darilni kopon se po uporabi pri naro�ilu izbri�e. Trajni kupon stranka lahko uporabi kadar koli.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Darilni kupon';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Trajni kupon';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Vrednost';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Izbri�i kodo';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Resni�no �elite izbrisati kodo kupona?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Prosim, izpolnite vsa polja.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'Vrednost kupona mora biti �tevilo.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Nov kupon';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Koda kupona';
	var $_PHPSHOP_COUPON_PERCENT = 'Odstotkov';
	var $_PHPSHOP_COUPON_TOTAL = 'Skupaj';
	var $_PHPSHOP_COUPON_VALUE = 'Vrednost';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Koda kupona shranjena.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Shrani kupon';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Popust kupona';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Kode kupona ne najdem. Poskusite �e enkrat.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Omogo�i uporabo kupona';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = '�e omogo�ite uporabo kupona, strankam omogo�ite, da vpi�ejo kodo kupona in ob nakupu vnov�ijo popust.';
	var $_PHPSHOP_FREE_SHIPPING = 'Brezpla�en transport';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Transport za to naro�ilo je brezpla�en!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Najni�ja vrednost za brezpla�en transport';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Najni�ja vrednost (VKLJU�NO Z DAVKOM!), ki omogo�a brezpla�en transport
                                                (primer: <strong>50</strong> pomeni, da stranka, ki naro�i nad 50$ (vklju�no z davkom),
                                                dobi brezpla�en transport.';
	var $_PHPSHOP_YOUR_STORE = 'Va�a trgovina';
	var $_PHPSHOP_CONTROL_PANEL = 'Nadzorna plo��a';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF - Gumb';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Prika�i ali skrij PDF - gumb v trgovini';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Je strinjanje s pogoji storitev potrebno za VSAKO NARO�ILO?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Ozna�ite, �e �elite, da stranka potrdi strinjanje s pogoji storitev ob VSAKEM NARO�ILU (pred naro�ilom).';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Vrsta ban�nega ra�una';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Preverjanje';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Poslovno preverjanje';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Shranjevanje';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Ponavljanje ra�unov?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Dolo�ite, �e �elite ponavljanje ra�unov.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Interna napaka pri obdelavi zahtevka';
	var $_PHPSHOP_PAYMENT_ERROR = 'Napaka pri obdelavi pla�ila';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Pla�ilo uspe�no obdelano';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS ni mogel obdelati zahtevka za transportno tarifo.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Zagotovljeni rok dostave';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'Metoda prevzema UPS';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Kako UPS izro�ate pakete?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'Pakiranje UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Izberite privzeto vrsto pakiranja.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Dostava na dom?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Dostava na dom (DOM)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Dostava v podjetje (POD)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Navedek za dostavo na dom (DOM) ali dostavo v podjetje (POD).';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Manipulativna tarifa';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Manipulativna tarifa za ta na�in transporta.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Dav�na stopnja';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Za transportno tarifo uporabi nasledno dav�no stopnjo:';
	var $_PHPSHOP_ERROR_CODE = 'Napaka kode';
	var $_PHPSHOP_ERROR_DESC = 'Napaka opisa';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Prika�i / spremeni transakcijski klju�';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Prika�i/spremeni geslo/transakcijski klju�';
	var $_PHPSHOP_TYPE_PASSWORD = 'Prosim, vpi�ite uporabni�ko geslo';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Trenutno geslo';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Trenutni transakcijski klju�';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'Transakcijski klju� uspe�no spremenjen.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Zahtevek/iskanje kode kreditne kartice (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Preveri, �e so vrednosti CVV2/CVC2/CID veljavne (tri- ali �tiri-mestno �tevilo na hrbtni strani kreditne kartice, pri karticah American Express na sprednji strani)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Prosim, vpi�ite tri- ali �tiri-mestno �tevilo na hrbtni strani kreditne kartice (pri karticah  American Express so na sprednji strani)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = '�e �elite nadaljevati, morate vpisati kodo kreditne kartice.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'ALI vpi�ite ime datoteke';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'OPOMBA: Tukaj vpi�ete ime datoteke. <strong>�e tukaj vpi�ete ime datoteke, datoteke ne bo mogo�e samodejno nalo�iti!!! Datoteko bo potrebno nalo�iti ro�no preko FTP!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'OR nalo�ite datoteko';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Lokalno datoteko lahko nalo�ite na stre�nik. Ta datoteka bo prodajni izdelek. Obstoje�e datoteke bodo zamenjane.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Vpi�ite besedilo, ki ga bo stranka videla na strani s podrobnostmi.<br />npr.: 24h, 48h, 3 - 5 dni, Po naro�ilu ...';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'ALI izberite sliko, ki bo prikazana na strani s podrobnostmi.<br />Slike so v imeniku <i>/components/com_virtuemart/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Seznam lastnosti';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Primeri oblik seznamov lastnosti:</h4>
        <pre>Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00];AndSoOn,..,..</pre>
        <h4>Nastavitve cen za uporabo s spreminjanjem raz�irjenih lastnosti:</h4>
        <pre>
        + == Dodaj vrednost dolo�eni ceni.<br />
        - == Od�tej vrednost od dolo�ene cene.<br />
        = == Nastavi ceno izdelka.
      </pre>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Seznam prilagojenih lastnosti';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Primeri oblik seznamov prilagojenih lastnosti:</h4>
        <pre>Ime; Dodatki;</strong>...</pre>';
	var $_PHPSHOP_MULTISELECT = 'Izbira skupine: uporabite tipko CTRL in mi�ko';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'Omogo�i pla�ilo preko eProcessingNetwork.com?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Uporabite, �e �elite uporabljati eProcessingNetwork.com s phpShop.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Testni na�in ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Izberite "Da" med testiranjem. Izberite "Ne", da omogo�ite dejanske transakcije.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'Prijavna �ifra za "eProcessingNetwork.com"';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'To je va�a prijavna �ifra za eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'Transakcijski klju� za eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'To je va� transakcijski klju� za eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Tip potrditve';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'To je tip potrditve za eProcessingNetwork.com.';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Sorodni izdelki';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'S pomo�jo tega seznama lahko nastavite povezave med izdelki. S tem, ko tukaj izberete izdelke, postanejo <strong>Sorodni izdelki</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Morda vas bodo zanimali tudi naslednji izdelki';
	var $_PHPSHOP_IMAGE_ACTION = 'Postopek slike';
	var $_PHPSHOP_NONE = 'ni�';
	var $_PHPSHOP_ORDER_HISTORY = 'Zgodovina naro�il';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Opomba';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Opombe k naro�ilu';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Vklju�im opombo?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Datum dodan';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Stranka obve��ena?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Sprememba statusa naro�ila';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = 'Uporabni�ko ime transporta USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = 'Uporabni�ko ime transporta USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = 'Geslo transporta USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = 'Geslo transporta USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER = 'Stre�nik transporta USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP = 'Stre�nik transporta USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH = 'Pot transporta USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP = 'Pot transporta USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE = 'Velikost paketa USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP = 'Velikost paketa USPS';
	var $_PHPSHOP_USPS_PADDING = 'Odstotek dodatne obte�itve paketa. (Vklju�i %)';
	var $_PHPSHOP_USPS_PADDING_TOOLTIP = 'Nastavite odstotek dodatne te�e oblog za za��ito paketa med transportom. �e uporabljate to mo�nost, lahko nastavitvah predmetov vnesete dejansko te�o predmeta .  Obvezna je uporaba oznake %.  Na primer: 15%';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_HANDLING_FEE = 'Manipulacijska tarifa';
	var $_PHPSHOP_USPS_HANDLING_FEE = 'Manipulacijska tarifa za to vrsto transporta.';
	var $_PHPSHOP_USPS_HANDLING_FEE_TOOLTIP = 'Manipulacijska tarifa za to vrsto transporta.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE = 'Mednarodna manipulacijska tarifa za USPS po�iljke.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP = 'Mednarodna manipulacijska tarifa za USPS po�iljke.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE = 'Mednarodna manipulacijska tarifa za USPS po�iljke na kilogram.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP = 'Mednarodna manipulacijska tarifa za USPS po�iljke na kilogram.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_MACHINABLE = '�e uporabljate paketno po�iljanje za po�iljke pod 150g ali nad 18kg.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_MACHINABLE_TOOLTIP = 'Ali tak�en paket odpo�iljajte strojno?  Privzeta nastavitev je Ne.';
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
	var $_PHPSHOP_USPS_RESPONSE_ERROR = 'USPS ni mogel obdelati zahtevka za transportno tarifo.';
	var $_PHPSHOP_PARAMETERS_LBL = 'Parametri';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Vrsta izdelka';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Seznam vrst izdelkov';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Dodaj/uredi vrsto izdelka';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Seznam vrst izdelkov za';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Seznam vrst izdelkov';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Dodaj vrsto izdelkov za';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Dodaj vrsto izdelkov ';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Vrsta izdelkov';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Naziv vrste izdelkov';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Opis vrste izdelkov';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Parametri';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Podatki o vrsti izdelka';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Objavim?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Brskalnik vrst izdelkov';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Stran vrst izdelkov';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Parametri vrste izdelkov';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Podatki o parametrih';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Vrste izdelka ne najdem!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Naziv parametra';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Ta naziv bo naziv stolpca v tabeli. Naziv mora biti edinstven in brez presledkov.<BR>Na primer: splo�ni_materiali';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Oznaka parametra';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Opis parametra';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Vrsta parametra';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = '�tevilo';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Besedilo';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Kratko besedilo';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Prosto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Znak';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Datum & ura';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Datum';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'LLLL-MM-DD';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Ura';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'UU:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Prelom vrstice';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Ve� vrednosti';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Mo�ne vrednosti';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Prika�em mo�ne vrednosti kot izbiro za ve� vrednosti?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>�e so mo�ne vrednosti nastavljene, ima parameter lahko le te vrednosti. Primer mo�nih vrednosti:</strong><BR><span class="sectionname">Jeklo;Les;Plastika;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'privzeta vrednost';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'Za privzeto vrednost parametra uporabi ta format:<ul><li>Datum: LLLL-MM-DD</li><li>Ura: UU:MM:SS</li><li>Date & Time: YYYY-MM-DD HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Enota';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Raz�irjeno iskanje po parametrih';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Iskanje parametrov';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = '�elite iskati izdelke po tehni�nih parametrih?<BR>Uporabite lahko katerega koli od pripravljenih obrazcev:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = '�al za to iskanje ni kategorije.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = '�al ni objavljene vrste izdelka s tem imenom.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'JE kot';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'NI kot';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Iskanje polnega besedila';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Vse izbrano';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Kar koli od izbranega';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Izprazni obrazec';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'I��i v kategoriji';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Spremeni parametre';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Padajo�e urejeno';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Rasto�e urejeno';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Parametri kategorije';
	var $_PHPSHOP_FEE = 'Tarifa';
	var $_PHPSHOP_PRODUCT_CLONE = 'Kloniraj izdelek';
	var $_PHPSHOP_CSV_SETTINGS = 'Nastavitve';
	var $_PHPSHOP_CSV_DELIMITER = 'Lo�evalec';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Znak omejitve polja';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Nalo�i CSV datoteko';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Predlo�i CSV datoteko';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Nalo�i iz imenika';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Nalo�i CSV datoteko s stre�nika';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Izvozi v CSV datoteko';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Izberite vrsto ureditve polj';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Prizveta ureditev';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'Moja nastavljena ureditev';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Izvozi vse izdelke v CSV datoteko';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'Nastavitev CSV uvoza / izvoza';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Shrani spremembe';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Ime polja';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'Privzeta vrednost';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Ureditev polja';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Polje potrebno?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Uvoz/izvoz';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Dodaj novo polje';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Dokumentacija';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = '�al zahtevanega izdelka ne najdem!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Poka�i izdelke, ki jih ni na zalogi';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = '�e je mo�nost ozna�ena, bodo prikazani tudi izdelki, ki jih trenutno ni na zalogi. V nasprotnem primeru ti izdelki niso prikazani.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = '�tevilo enot v paketu:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = '�tevilo enot v �katli:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Skrij izdelke, ki jih ni na zalogi';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Akcijske ponudbe in zni�anja';
	var $_PHPSHOP_FEATURED = 'Akcijska ponudba';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Nazaj na dr�avo';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Nazaj v upravitelja datotek';
	var $_PHPSHOP_ADD_STATE = 'Dodaj dr�avo';
	var $_PHPSHOP_LIST_STATES = 'Seznam dr�av';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'akcije IN zni�anja';
	var $_PHPSHOP_SHOW_FEATURED = 'Akcijski izdelki';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'Zni�ani izdelki';
	var $_PHPSHOP_FILTER = 'Filter';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Nazaj na glavno stran';
	var $_PHPSHOP_EXPAND_TREE = 'Raz�iri drevo';
	var $_PHPSHOP_COLLAPSE_TREE = 'Skrij drevo';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Zni�ana cena';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Tukaj lahko ne glede na splo�no nastavitev popusta nastavite poseben popust za izdelek.<br/>
Trgovina bo shranila novo nastavitev popusta s popustom izdelka.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Cena na enoto';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'Trgovina ni povezana s spletom?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = '�e to ozna�ite, bo prikazano sporo�ilo, ko trgovina ne bo povezana s spletom.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Sporo�ilo, ko ni povezave';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Poljski zapis tabele za tabele trgovine';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'Privzeta nastavitev je <strong>vm</strong>';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Prika�em krmarjenje po strani na vrhu seznama izdelkov?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Vklju�i ali izklju�i prikaz krmarjenja po strani na vrhu seznama izdelkov na uporabni�ki strani.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Prika�em �tevilo izdelkov?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Prika�e �tevilo izdelkov v kategoriji v obliki: Kategorija (4)?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'Slog gumba Dodaj v nakupovalni vozi�ek';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'Omogo�im dinami�no velikost predstavitvenih slik?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = '�e je mo�nost ozna�ena, je omogo�eno dinami�no spreminjanje velikosti predstavitvenih slik. To pomeni, da bo velikost predstavitvenih slik prilagojena spodaj nastavljeni velikosti,
        s pomo�jo GD2 PHP (podpiranje GD2 lahko preverite v "System" -> "System Info" -> "PHP Info" -> gd. 
        Kakovost tako spremenjenih predstavitvenih slik bo bolj�a, kot �e jih prilagodi brskalnik. Nove predstavitvene slike se shranijo v /shop_image/prduct/resized. �e je bila velikost slike �e spremenjena, bo ta kopija poslana brskalniku, da bo sprememba velikosti le enkratna.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = '�irina predstavitvene slike';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'Ciljna <strong>�irina</strong> nove predstavitvene slike.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Vi�ina predstavitvene slike';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'Ciljna <strong>vi�ina</strong> nove predstavitvene slike.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'V transportnih nastavitvah ozna�ite vsaj eno izbiro!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Nastavitev cene';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Skupine uporabnikov, ki vidijo prikaz cene';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'Izbrana skupina uporabnikov in vse skupine z vi�jimi pooblastili bodo lahko videle cene izdelkov.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Prika�i "(vklju�no z davkom XX% )" kjer je mogo�e?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = '�e je mo�nost ozna�ena, bodo uporabniki videli besedilo "(vklju�no z davkom xx%)", �e cene vklju�ujejo davek.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'Prika�em ceno za paket?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = '�e je mo�nost ozna�ena, bo cena samodejno izra�unana na podlagi vrednosti na enoto in na�inu pakiranja paketa:<br/>
<strong>Cena na enoto (10 kosov)</strong><br/>
�e mo�nost ni ozna�ena, bo prikaz cene obi�ajen: <strong>Cena: $xx.xx</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'Ve� nastavitev jedra';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Nastavitve jedra';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Lastnosti uporabni�ke strani';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Nastavitev davkov';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Za�etna koli�ina';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Kon�na kolo�ina';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'Nastavitve registracije uporabnikov';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'Omogo�im registracijo uporabnikov?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'Je aktivacija novega ra�una potrebna?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Omogo�im skrito registracijo uporabnikov?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = '�e je mo�nost ozna�ena, uporabniki pri registraciji ne potrebujejo uporabni�kega imena in gesla za odprtje novega ra�una. Namesto tega se za ra�un uporabi uporabnikov e-naslov, geslo pa se ustvari samodejno. Podatke o registraciji uporabnik prejme po e-po�ti.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Pozdravljeni %s,

Hvala za va�o registracijo pri %s. Uporabni�ki ra�un je bil ustvarjen.
V %s se lahko prijavite s pomo�jo uporabni�kega imena in gesla:

Uporabni�ko ime - %s
Geslo - %s
';
	var $_PEAR_LOG_CRIT = 'Kriti�no';
	var $_PEAR_LOG_ERR = 'Napaka';
	var $_PEAR_LOG_WARNING = 'Opozorilo';
	var $_PEAR_LOG_INFO = 'Podatki';
	var $_PEAR_LOG_TIP = 'Podatki';
	var $_PEAR_LOG_ALERT = 'Opozorilo';
	var $_PEAR_LOG_EMERG = 'Nujno opozorilo';
	var $_PEAR_LOG_NOTICE = 'Obvestilo';
	var $_PEAR_LOG_DEBUG = 'Odpravljanje napak';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'Pla�ilo preko sistema PayFlow Pro?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'Izberite, �e �elite uporabljati sistem VeriSign\'s PayFlow Pro z VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'Poskusni na�in ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'Izberite \'Da\' za preizkus pla�il. Izberite \'Ne\' za vklju�itev dejanskih transakcij.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'VeriSign obdeluje Partner ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'Sistem Partner ID vam je izdal potrdilo VeriSign Reseller, s katerim ste se registrirali na storitev PayFlow Pro.';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'Uporabni�ko ime prijave PayFlow Pro';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'To je va�e uporabni�ko ime PayFlow Pro';
	var $_VM_TAXDETAILS_LABEL = 'Skupni davek vsebuje';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'Privzeti ukaz urejanja izdelkov';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'Dolo�i, na podlagi katere lastnosti bodo izdelki urejeni na spletni strani.';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'Vklju�i polja "Uredi po"';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'Izberite polja "Uredi po" na spletni strani. Vsako od njih dolo�a metodo razvr��anja izdelkov na spletni strani. �e odzna�ite vse, obrazec urejanja po lastnosti ne bo prikazan.';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO = 'Prikaz kratkega pojasnila "Vra�ilo izdelkov" na strani potrditve naro�ila?';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP = 'V ve�ini evropskih dr�av zakonodaja prodajalcem predpisuje, da morajo kupce obvestiti o politiki glede vra�ila in opovedi izdelkov. V ve�ini primerov mora biti mo�nost vklju�ena.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT = 'Besedilo pravnega pojasnila (kratka razli�ica).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP = 'Kratko pojasnilo za va�e stranke o politiki glede vra�ila in opovedi izdelkov. Prikazano je na zadnji strani postopka naro�ila, nad gumbom "Potrdi naro�ilo".';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK = 'Dalj�a razli�ica pravnega pojasnila (povezava na vsebino).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP = 'Dodajte vsebino pojasnila o politiki glede vra�ila in opovedi izdelkov .
Ko ga dodate, ga lahko izberete tukaj.';
	var $_VM_LEGALINFO_SHORTTEXT = '<h5>Vra�ilo izdelkov</h5>

Naro�ilo lahko prekli�ete dva tedna po prejemu po�iljke..
Vrnete lahko le nove, neodprte izdelke naro�ila, preklicanega v roku 2 tednov po  
prejemu po�iljke. Izdelke morate vrniti v originalni embala�i..
Ve� informacij o preklicu naro�il in vra�ilu izdelkov poi��ite na strani <a href="%s" onclick="%s" target="_blank">Politika glede vra�ila izdelkov</a>.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EU = 'Evropski na�in obdav�itve';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE = 'V imenik seje trgovine ni mogo�e zapisovati podatkov. Odpravite te�avo ali pa se obrnite na ponudnika.';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX = 'Na lokaciji shranjevanja seje %s ni mogo�e zapisovati podatkov. Odpravite te�avo! Trgovina bo za�asno uporabljala %s.\'';
	var $_VM_SESSION_COOKIES_NOT_ACCEPTED_TIP = 'Va� brskalnik ne dovoljuje uporabe pi�kotkov. �e �elite dodatki izdelke v nakupovalni vozi�ek in jih kupiti, morate omogo�iti uporabo pi�kotkov.';
	var $_PHPSHOP_CSV_SKIP_FIRST_LINE = 'Presko�i prvo vrstico';
	var $_PHPSHOP_CSV_SKIP_DEFAULT_VALUE = 'Presko�i privzeto vrednost';
	var $_PHPSHOP_CSV_OVERWRITE_EXISTING_DATA = 'Prepi�i obstoje�e podatke';
	var $_PHPSHOP_CSV_INCLUDE_COLUMN_HEADERS = 'Vklju�i glave stolpcev';
	var $_PHPSHOP_CSV_UPLOAD_SETTINGS = 'Nastavitve nalaganja';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS = 'Razpolo�ljiva polja';
	var $_PHPSHOP_CSV_OUTPUT_CSV_UPLOAD_MESSAGES = 'Nastavitve nalaganja CSV:';
	var $_PHPSHOP_CSV_OUTPUT_COUNT = '�tetje';
	var $_PHPSHOP_CSV_OUTPUT_TOTAL = 'Skupaj';
	var $_PHPSHOP_CSV_OUTPUT_FILE_IMPORTED = 'CSV datoteka uvo�ena';
	var $_PHPSHOP_CSV_OUTPUT_UPDATED = 'Posodobljeno';
	var $_PHPSHOP_CSV_OUTPUT_DELETED = 'Izbrisano';
	var $_PHPSHOP_CSV_OUTPUT_ADDED = 'Dodano';
	var $_PHPSHOP_CSV_OUTPUT_SKIPPED = 'Presko�eno';
	var $_PHPSHOP_CSV_OUTPUT_INCORRECT = 'Nepravilno';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS_USE = 'Naslednja polja lahko uvozite ali izvozite.';
	var $_PHPSHOP_CSV_MINIMAL_FIELDS = 'Obvezna polja vklju�ujejo product_sku, product_name in category_path. Z izjemo polja product_sku, polja niso edinstvena.';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SKU = 'Edinstvena oznaka izdelka.<br /.>Vrednosti:<ul><li>�tevila</li><li>�rke</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_NAME = 'Ime izdelka.Vrednosti:<ul><li>Besedilo: HTML koda ni dovoljena.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DELETE = 'Polje product_delete je posebno polje. Uporablja se za dolo�ianje, ali naj se izdelek izbri�e ali ne.<br />Uporaba:<ol><li>Na nastavitveni strani dodajte ime "product_delete". Ime mora biti napisano z malimi �rkami.</li><li>V CSV datoteko dodajte stolpec z vrednostjo Y. �e polje vsebuje katero koli drugo vrednost, izdelek ne bo izbrisan.</li></ol><br /.>Vrednosti:<ul><li>Y: Da, izdelek bo izbrisan</li><li>N: Ne, izdelek ne bo izbrisan</li><li>Prazno: Brez vrednosti, izdelek ne bo izbrisan</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DESC = 'Dalj�i opis izdelka.<br />Vrednosti:<ul><li>Besedilo: HTML koda je dovoljena.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_S_DESC = 'Kratek opis izdelka.<br />Vrednosti:<ul><li>Besedilo: HTML koda ni dovoljena.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PUBLISH = 'Stanje, ki opisuje, ali je izdelek objavljen.<br />Vrednosti:<ul><li>Y: Da, izdelek je objavljen</li><li>N: Ne, izdelek ni objavljen</li><li>Prazno: Prazno polje, izdelek je objavljen.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WIDTH = '�irina izdelka.<br />Vrednosti:<ul><li>�tevilo</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_HEIGHT = 'Vi�ina izdelka.<br />Vrednosti:<ul><li>�tevilo</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABLE_DATE = 'Datum, ko bo izdelek na voljo. Zaradi uvoza podatkov mora biti datum v obliki dan/mesec/leto ali dan-mesec-leto. V okoljih Windows je zadnji mogo�i datum 19/01/2038.<br />Uporaba:<ol><li>Na nastavitveni strani dodajte ime "product_available_date". Ime mora biti napisano z malimi �rkami.</li><li>V CSV datoteko dodajte stolpec z vrednostmi datuma. �e polje vsebuje druge podatke, ti ne bodo upo�tevani.</li></ol><br />Vrednosti:<ul><li>Datum: dan/mesec/leto ali dan-mesec-leto</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_IN_STOCK = '�tevilo kosov na zalogi.<br /><br />Uporaba:<ol><li>Na nastavitveni strani dodajte ime "product_in_stock". Ime mora biti napisano z malimi �rkami.</li><li>V CSV datoteko dodajte stolpec s �tevil�nimi vrednostmi. �e polje vsebuje druge podatke, bo uporabljena privzeta vrednost.</li></ol><br />Vrednosti:<ul><li>�tevilo</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE = 'Mo�nosti, ki so na voljo pri izdelku. To polje uporabite za razli�ne lastnosti. Na primer, obla�ila so razli�nih velikosti in barv. Tukaj jih lahko dolo�ite: Velikost,XL[+1.99],M,S[-2.99];Barva,Rde�a,Zelena,Rumena,Drage barve[=24.00];Itd.,..,..<br /><br />Z naslednjimi mo�nosti dolo�ite spremembo cene glede na lastnost:<ul><li>+: Osnovni ceni doda vrednost na podlagi lastnosti.</li><li>-: Osnovni ceni odvzame vrednost na podlagi lastnosti.</li><li>=: Nastavi ceno\\\ izdelka na dolo�eno vrednost.</li></ul><br />Uporaba:<ol><li>Na nastavitveni strani dodajte ime "attribute". Ime mora biti napisano z malimi �rkami.</li><li>V CSV dodajte stolpec z dodanimi lastnostmi.</li></ol><br /.>Vrednosti:<ul><li>Besedilo: HTML koda ni dovoljena.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABILITY = 'Prikazuje, ali je izdelek na voljo. Vrednost je lahko opisno besedilo ali ime datoteke slike. Slike shranite v mapo "shop_image/availability/".<br />Uporaba:<ol><li>Na nastavitveni strani dodajte ime "product_availability". Ime mora biti napisano z malimi �rkami.</li><li>V CSV datoteko dodajte stolpec z besedilno vrednostjo.</li></ol><br />Vrednosti:<ul><li>Besedilo: HTML koda ni dovoljena.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_FULL_IMAGE = 'Ime datoteke slike, ki je shranjena v mapi "shop_image/product/". Ime datoteke je lahko tudi URL.<br />OPOMBA: �e je dinami�na nastavitev velikosti vklju�ena, morate izpolniti polje "product_thumb_image". VirtueMart spremeni velikost slike, kot je dolo�eno.<br/><br />Uporaba:<ol><li>Na nastavitveni strani dodajte ime "product_full_image". Ime mora biti napisano z malimi �rkami.</li><li>V CSV datoteko dodajte stolpec z besedilno vrednostjo.</li></ol><br />Vrednosti:<ul><li>Besedilo:<ul><li>HTML koda ni dovoljena</li><li>URL\\\naslovi so dovoljeni.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_THUMB_IMAGE = 'Ime datoteke predstavitvene slike, ki je shranjena v mapi "shop_image/product/" folder. Ime datoteke je lahko tudi URL.<br />OPOMBA: Tudi �e je dinami�na nastavitev velikosti vklju�ena, mora biti v tem polju vrednost. VirtueMart spremeni velikost slike, kot je dolo�eno.<br /><br />Uporaba:<ol><li>Na nastavitveni strani dodajte ime "product_full_image". Ime mora biti napisano z malimi �rkami.</li><li>V CSV datoteko dodajte stolpec z besedilno vrednostjo.</li></ol><br />Vrednosti:<ul><li>Besedilo:<ul><li>No HTML koda ni dovoljena</li><li>URL\\\naslovi so dovoljeni.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CUSTOM_ATTRIBUTE = 'custom_attribute';
	var $_PN_RESULTS = 'Rezultati';
	var $_CMN_PRINT = 'Natisni';
	var $_CMN_PDF = 'PDF';
	var $_CMN_EMAIL = 'E-po�ta';
	var $_BACK = 'Nazaj';
	var $_USERNAME = 'Uporabni�ko ime';
	var $_PASSWORD = 'Geslo';
	var $_BUTTON_LOGIN = 'Prijava';
	var $_REGISTER_UNAME = 'Uporabni�ko ime';
	var $_REGISTER_EMAIL = 'E-po�ta';
	var $_REGWARN_NAME = 'Vpi�ite svoje ime.';
	var $_REGWARN_UNAME = 'Vpi�ite uporabni�ko ime.';
	var $_REGWARN_MAIL = 'Prosimo, vpi�ite veljaven naslov e-po�te.';
	var $_SEND_SUB = 'Podrobnosti ra�una za %s na %s';
	var $_ASEND_MSG = 'Pozdravljeni, %s,
	
	Na %s se je registriral nov uporabnik.
	Ta e-po�ta vsebuje podatke uporabnika:
	
	Ime - %s
	e-naslov - %s
	Uporabni�ko ime - %s
	
	Prosimo, da na to sporo�ilo ne odgovarjate, ker je poslano samodejno in le informativnega zna�aja';
	var $_REG_COMPLETE = '<div class="componentheading">Registracija je zaklju�ena!</div><br />Lahko se prijavite.';
	var $_REG_COMPLETE_ACTIVATE = '<div class="componentheading">Registracija je zaklju�ena!</div><br />Va� ra�un je sutvarje. Ne e-naslov smo vam poslali sporo�ilo s povezavo za aktivacijo. Pred prijavo morate aktivirato ra�un s klikom na povezavo v e-po�ti..';
	var $_DATE_FORMAT_LC = '%A, %d %B %Y';
	var $_LAST_UPDATED = 'Zadnja posodobitev';
	var $_NOT_AUTH = 'Za ogled tega vira nimate pooblastil.';
	var $_DO_LOGIN = 'Morate se prijaviti.';
	var $_VALID_AZ09 = 'Prosimo, vnestite veljavno %s.  Brez presledkov, ve� kot %d znakov in le 0-9,a-z,A-Z';
	var $_CMN_PUBLISHED = 'Objavljeno';
	var $_CMN_UNPUBLISHED = 'Neobjavljeno';
	var $_MORE = 'Ve�...';
	var $_EMPTY_CATEGORY = 'Ta kategorija je trenutno prazna.';
	var $_BUTTON_LOGOUT = 'Odjava';
	var $_NO_ACCOUNT = '�e nimate ra�una?';
	var $_CREATE_ACCOUNT = 'Registrirajte se';
	var $_REGWARN_PASS = 'Vpi�ite veljavno geslo.  Brez presledkov, ve� kot 6 znakov in le 0-9,a-z,A-Z';
	var $_REGWARN_VPASS1 = 'Potrdite svoje geslo.';
	var $_REGWARN_VPASS2 = 'Geslo in potrditev se ne ujemata. Poskusite znova.';
	var $_USEND_MSG_ACTIVATE = 'Pozdravljeni, %s,



Zahvaljujemo se vam za registracijo na %s. Va� ra�un je ustvarjen in potrebna je le �e aktivacija.

Aktivacijo izvedete s klikom na spodnjo povezavo ali tako, da jo prenesete v naslovno vrstico brskalnika:

%s



Po aktivaciji se lahko prijavite na %s z va�im uporabni�kim imenom in geslom:



Uporabni�ko ime - %s

Geslo - %s';
	var $_USEND_MSG = 'Hello %s,



Zahvaljujemo se vam za registracijo na %s.



Na %s se prijavite z uporabni�kim imenom in geslom, ki ste ju vpisali v registraciji.';
	var $_PROMPT_PASSWORD = 'Ste pozbili geslo?';
	var $_HI = 'Pozdravljeni';
	var $_NEW_USER_MESSAGE_SUBJECT = 'Podatki novega uporabnika';
	var $_NEW_USER_MESSAGE = 'Pozdravljeni, %s,





Kot uporabnika vas je na %s dodal administrator.



Ta e-po�ta vsebuje uporabni�ko ime in geslo za prijavo na %s



Uporabni�ko ime - %s

Geslo - %s





Prosimo, da na to sporo�ilo ne odgovarjate, ker je poslano samodejno in le informativnega zna�aja';
	var $_REMEMBER_ME = 'Zapomni si me';
	var $_REGISTER_TITLE = 'Registracija';
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