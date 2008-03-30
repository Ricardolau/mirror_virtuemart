<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
*
* @version $Id$
* @translated by: Bostjan Laba, June 05 2007
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
	var $_PHPSHOP_CATEGORIES = 'Spletna trgovina MyChi';
	var $_PHPSHOP_SELECT_CATEGORY = 'Izberi skupino:';
	var $_PHPSHOP_ADMIN = 'Administracija';
	var $_PHPSHOP_PRODUCT = 'Izdelek';
	var $_PHPSHOP_LIST = 'Seznam';
	var $_PHPSHOP_ALL = 'Vse';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Prikaži vse izdelke';
	var $_PHPSHOP_VIEW = 'Poglej';
	var $_PHPSHOP_SHOW = 'Pokaži';
	var $_PHPSHOP_ADD = 'Dodaj';
	var $_PHPSHOP_UPDATE = 'Uredi';
	var $_PHPSHOP_DELETE = 'Izbriši';
	var $_PHPSHOP_SELECT = 'Izberi';
	var $_PHPSHOP_SUBMIT = 'Potrdi';
	var $_PHPSHOP_RANDOM = 'Naključni izdelki';
	var $_PHPSHOP_LATEST = 'Zadnji izdelki';
	var $_PHPSHOP_HOME_TITLE = 'Domov';
	var $_PHPSHOP_CART_TITLE = 'Nakupovalna košarica';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Na blagajno';
	var $_PHPSHOP_LOGIN_TITLE = 'Prijava';
	var $_PHPSHOP_LOGOUT_TITLE = 'Odjava';
	var $_PHPSHOP_BROWSE_TITLE = '';
	var $_PHPSHOP_SEARCH_TITLE = 'Išči';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Urejanje računa';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Krmarjenje';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Oddelek';
	var $_PHPSHOP_INFO = 'Informacije';
	var $_PHPSHOP_BROWSE_LBL = '';
	var $_PHPSHOP_PRODUCTS_LBL = 'Izdelki';
	var $_PHPSHOP_PRODUCT_LBL = 'Izdelek';
	var $_PHPSHOP_SEARCH_LBL = 'Išči';
	var $_PHPSHOP_FLYPAGE_LBL = 'Podrobnosti';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Iskanje izdelka';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Naziv izdelka';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Kategorija izdelka';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Opis';
	var $_PHPSHOP_CART_SHOW = 'Odpri košarico';
	var $_PHPSHOP_CART_ADD_TO = 'V košarico';
	var $_PHPSHOP_CART_NAME = 'Ime';
	var $_PHPSHOP_CART_SKU = 'Šifra';
	var $_PHPSHOP_CART_PRICE = 'Cena';
	var $_PHPSHOP_CART_QUANTITY = 'Količina';
	var $_PHPSHOP_CART_SUBTOTAL = 'Skupaj';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Dodaj novo';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Naslov za pošiljanje';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Ni zadetkov!<br />';
	var $_PHPSHOP_PRICE_LABEL = 'Cena: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Dodaj v košaro';
	var $_PHPSHOP_NO_CUSTOMER = 'Niste registriran uporabnik. Prosim, da vnesete vaše podatke za plačilo';
	var $_PHPSHOP_DELETE_MSG = 'Res želite izbrisati ta zapis?';
	var $_PHPSHOP_THANKYOU = 'Hvala za naročilo.';
	var $_PHPSHOP_NOT_SHIPPED = 'Še neposlano';
	var $_PHPSHOP_EMAIL_SENDTO = 'Potrditveno sporočilo poslano na';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Ni MOS. Uporabnik za dodajanje na seznam uporabnikov Virtuemart ni na voljo';
	var $_PHPSHOP_ERROR = 'NAPAKA';
	var $_PHPSHOP_MOD_NOT_REG = 'Modul ni registriran.';
	var $_PHPSHOP_MOD_ISNO_REG = 'ni veljaven Virtuemart modul.';
	var $_PHPSHOP_MOD_NO_AUTH = 'Nimate pravic za dostop do želenega modula.';
	var $_PHPSHOP_PAGE_404_1 = 'Stran ne obstaja';
	var $_PHPSHOP_PAGE_404_2 = 'Vneseno ime datoteke ne obstaja. Ne najdem datoteke:';
	var $_PHPSHOP_PAGE_403 = 'Neustrezne administrativne pravice';
	var $_PHPSHOP_FUNC_NO_EXEC = 'Nimate dovoljenja za izvajanje ';
	var $_PHPSHOP_FUNC_NOT_REG = 'Funkcija ni registirana';
	var $_PHPSHOP_FUNC_ISNO_REG = ' ni veljavna MOS_com_virtuemart funkcija.';
	var $_PHPSHOP_ADMIN_MOD = 'Admin';
	var $_PHPSHOP_USER_LIST_MNU = 'Seznam uporabnikov';
	var $_PHPSHOP_USER_LIST_LBL = 'Seznam uporabnikov';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Uporabniško ime';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Polno ime';
	var $_PHPSHOP_USER_LIST_GROUP = 'Skupina';
	var $_PHPSHOP_USER_FORM_MNU = 'Dodaj uporabnika';
	var $_PHPSHOP_USER_FORM_LBL = 'Dodaj/uredi uporabniške podatke';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Podatki za račun';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Naslov za transport';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Dodaj naslov';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'Ni naslova za transport.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Kratek naziv naslova';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Ime';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Priimek';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Srednje ime';
	var $_PHPSHOP_USER_FORM_TITLE = 'Naziv';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Uporabniško ime';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Geslo';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Potrdi geslo';
	var $_PHPSHOP_USER_FORM_PERMS = 'Dovoljenja';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Šifra kupca / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Naziv podjetja';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Naslov 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Naslov 2';
	var $_PHPSHOP_USER_FORM_CITY = 'Kraj';
	var $_PHPSHOP_USER_FORM_STATE = 'Država/Provinca/Regija';
	var $_PHPSHOP_USER_FORM_ZIP = 'ZIP/Poštna številka';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Država';
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
	var $_PHPSHOP_MODULE_FORM_MENU = 'Prikaži modul v meniju Admin?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Prikaži vrstni red';
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
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Seznam držav';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Seznam držav';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Dodaj državo';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Naziv države';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Koda države (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Koda države (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Seznam držav (USA)';
	var $_PHPSHOP_STATE_LIST_LBL = 'Seznam držav (USA) za: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Dodaj/uredi državo (USA)';
	var $_PHPSHOP_STATE_LIST_NAME = 'Ime države (USA)';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'Koda države (USA) (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'Koda države (USA) (2)';
	var $_PHPSHOP_ADDRESS = 'Naslov';
	var $_PHPSHOP_CONTINUE = 'Nadaljuj';
	var $_PHPSHOP_EMPTY_CART = 'Košara je prazna.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'Mednarodni pošiljatelj';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Ping strežnika pošiljatelja';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'Ping strežnika InterShipper';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'Ping strežnika neuspešen';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'Ping strežnika uspešen';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Prevoznik';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Odzivni<br />čas';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'sek.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Seznam načinov pošiljanja';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Seznam načinov pošiljanja';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Načini pošiljanja';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Aktivni';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Stroški obdelave';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Rok obdelave naročila';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'znesek';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'odstotek';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'dni';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Težki tovori';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Nastavi načine pošiljanja';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Dodaj način pošiljanja';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Uredi način pošiljanja';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Osveži';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Način pošiljanja';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Aktiviraj';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Stroški obdelave';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Rok obdelave naročila';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'znesek';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'odstotek';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'dni';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Težki tovori';
	var $_PHPSHOP_ORDER_MOD = 'Naročila';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Potrdi naročila';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Prekliči naročilo';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Natisni naročilo';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Izbriši naročilo';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Seznam naročil';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Naročila';
	var $_PHPSHOP_ORDER_LIST_ID = 'Številka naročila';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Datum naročila';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Zadnji popravek';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Status';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'Skupaj';
	var $_PHPSHOP_ORDER_ITEM = 'Naročeno blago';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Naročilo';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Številka naročila';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Datum naročila';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Status naročila';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Podatki o kupcu';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Podatki za izdajo računa';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Podatki o prejemniku';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Račun izstaviti:';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Dostaviti:';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Naziv';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Podjetje';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Naslov 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Naslov 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Kraj';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Država/Provinca/Regija';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'Zip/Poštna številka';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Država';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Telefon';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Fax';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'E-naslov';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Naročeno blago';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Količina';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Kol.';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'Šifra';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Cena';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Za plačilo';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'Skupaj';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'Davek skupaj';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Stroški transporta in obdelave';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Davek na transport';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Način plačila';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Naziv računa';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Številka računa';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Rok veljavnosti';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Arhiv plačil';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Podatki za transport';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Podatki o plačniku';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Prevoznik';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Način transporta';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Datum transporta';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Cena dostave';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Seznam vrst statusa naročila';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Dodaj vrsto statusa naročila';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Koda statusa naročila';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Naziv statusa naročila';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Status naročila';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Koda statusa naročila';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Naziv statusa naročila';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Seznam naročil';
	var $_PHPSHOP_PRODUCT_MOD = 'Izdelki';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Trenutni izdelek';
	var $_PHPSHOP_CURRENT_ITEM = 'Trenutni predmet';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Seznam izdelkov';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Poglej seznam';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Cena';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Število';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Teža';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Seznam izdelkov';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Seznam izdelkov';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Naziv izdelka';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'Šifra';
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
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Osveži izdelek';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Podatki o izdelku';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Status izdelka';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Dimenzije in teža izdelka';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Slike izdelka';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Nov izdelek';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Osveži predmet';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Podatki o predmetu';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Status predmeta';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Dimenzije in teža predmeta';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Slike predmeta';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Vrnitev na matični izdelek';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'Če želite posodobiti sliko, vpišite ime nove slike.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Izbriši trenutno sliko.';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Predmeti izdelka';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Lastnosti predmetov';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Resnično želite izbrisati ta izdelek\\nin z njim povezane predmete?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Resnično želite izbrisati ta predmet?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Prodajalec';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Izdelovalec';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'Šifra';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Naziv';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Kategorija';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Cena izdelka (bruto)';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Cena izdelka (neto)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Opis izdelka';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Kratek opis';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'Na zalogi';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'Po naročilu';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Na voljo od';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'Posebna ponudba';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Vrsta popusta';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Objavim?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Dolžina';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Širina';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Višina';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Merska enota';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Širina';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Merska enota';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Predstavitvena slika';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Slika';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'kilogramov';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'centimetrov';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Enota';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'kos';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Enot v paketu';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Tukaj vnesete število enot v paketu. (maks. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Enot v paketu';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Tukaj vnesete število enot v paketu. (maks. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Rezultat dodajanja izdelkov';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Rezultat osvežitve izdelkov';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Rezultat dodajanja predmetov';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Rezultat osvežitve izdelkov';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Uporabi CSV nalaganje na strežnik';
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
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Razvrščanje seznama';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Dodaj lastnost';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Obrazec lastnosti';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Nova lastnost izdelka';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Osveži lastnost izdelka';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Nova lastnost predmeta';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Osveži lastnost predmeta';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Naziv lastnosti';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Razvrščanje seznama';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Seznam cen';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Seznam cen';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Cena za';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Naziv skupine';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Cena';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Valuta';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Dodaj ceno';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Cenovni podatki';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Nova cena izdelka';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Osvežitev cene izdelka';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Nova cena predmeta';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Osvežitev cene izdelka';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Cena';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Skupina kupcev';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Poročila';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Seznam posameznih izdelkov';
	var $_PHPSHOP_RB_SALE_TITLE = 'Prodajno poročilo';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Pregled prodaje';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Nastavi interval';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Mesečno';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Tedensko';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Dnevno';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Ta mesec';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'Prejšnji mesec';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'Zadnjih 60 dni';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'Zadnjih 90 dni';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Začni z';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Končaj z';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Pokaži izbrani razpon';
	var $_PHPSHOP_RB_REPORT_FOR = 'Poročilo za ';
	var $_PHPSHOP_RB_DATE = 'Datum';
	var $_PHPSHOP_RB_ORDERS = 'Navodila';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Skupno prodanih predmetov';
	var $_PHPSHOP_RB_REVENUE = 'Prihodek';
	var $_PHPSHOP_RB_PRODLIST = 'Seznam izdelkov';
	var $_PHPSHOP_SHOP_MOD = 'Trgovina';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Slika';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Cena';
	var $_PHPSHOP_ORDER_STATUS_P = 'Na čakanju';
	var $_PHPSHOP_ORDER_STATUS_C = 'Potrjeno';
	var $_PHPSHOP_ORDER_STATUS_X = 'Preklicano';
	var $_PHPSHOP_ORDER_BUTTON = 'Naročilo';
	var $_PHPSHOP_SHOPPER_MOD = 'Kupec';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Seznam kupcev';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Seznam kupcev';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Ime uporabnika';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Polno ime';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Skupina';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Dodaj kupca';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Podatki o kupcu';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Podatki za izstavo računa';
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
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Država/Provinca/Regija';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'ZIP/Poštna številka';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Država';
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
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Naloži sliko';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Naziv trgovine';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Naziv trgovskega podjetja';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Naslov 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Naslov 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'Kraj';
	var $_PHPSHOP_STORE_FORM_STATE = 'Država/Provinca/Regija';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Država';
	var $_PHPSHOP_STORE_FORM_ZIP = 'ZIP/Poštna številka';
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
	var $_PHPSHOP_PAYMENT = 'Plačilo';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Seznam načinov plačila';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Seznam načinov plačila';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Ime';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Koda';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Popust';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Skupina kupcev';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Vrsta načina plačila';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Dodaj način plačila';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Obrazec načina plačila';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Naziv načina plačila';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Skupina kupcev';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Popust';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Koda';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Razvrščanje seznama';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Vrsta načina plačila';
	var $_PHPSHOP_TAX_MOD = 'Davek';
	var $_PHPSHOP_TAX_RATE = 'Davčne stopnje';
	var $_PHPSHOP_TAX_LIST_MNU = 'Seznam davčnih stopenj';
	var $_PHPSHOP_TAX_LIST_LBL = 'Seznam davčnih stopenj';
	var $_PHPSHOP_TAX_LIST_STATE = 'Država ali regija plačila davka';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Država plačila davka';
	var $_PHPSHOP_TAX_LIST_RATE = 'Davčna stopnja';
	var $_PHPSHOP_TAX_FORM_MNU = 'Dodaj davčno stopnjo';
	var $_PHPSHOP_TAX_FORM_LBL = 'Dodaj davčne podatke';
	var $_PHPSHOP_TAX_FORM_STATE = 'Država ali regija plačila davka';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Država plačila davka';
	var $_PHPSHOP_TAX_FORM_RATE = 'Davčna stopnja (za 16% => vpišite 0.16)';
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
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Naloži sliko';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Naziv trgovine prodajalca';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Naziv podjetja prodajalca';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Naslov 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Naslov 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Kraj';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Država/Provinca/Regija';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Država';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'ZIP/Poštna številka';
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
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'URL domače strani izdelovalca';
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
	var $_PHPSHOP_HELP_MOD = 'Pomoč';
	var $_PHPSHOP_CART_ACTION = 'Osveži';
	var $_PHPSHOP_CART_UPDATE = 'Osveži količino v nakupovalnem vozičku';
	var $_PHPSHOP_CART_DELETE = 'Odstrani izdelek iz nakupovalnega vozička';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Cena';
	var $_PHPSHOP_PRODUCT_CALL = 'Kličite za ceno';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Nazaj';
	var $_PHPSHOP_PRODUCT_NEXT = 'Naprej';
	var $_PHPSHOP_CART_TAX = 'Davek';
	var $_PHPSHOP_CART_SHIPPING = 'Cena transporta';
	var $_PHPSHOP_CART_TOTAL = 'Skupaj';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Naprej';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'REGISTRIRAJTE SE';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Podatki za izdajo računa';
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
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Plačilni podatki';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Ime na kartici';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Način plačila';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Številka kreditne kartice';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Datum veljavnosti';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Zaključi naročilo';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'podatki, potrebni za plačilo s kreditno kartico, so izbrani';
	var $_PHPSHOP_ZONE_MOD = 'Transportna cona';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Seznam con';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Dodaj cono';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Določi cono';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Država';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Trenutna cona';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Dodaj coni';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Osveži';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Določi cone';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Ime cone';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Opis cone';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Stroški na predmet za cono';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Omejitev stroškov za cono';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Seznam con';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Ime cone';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Opis cone';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Stroški na predmet za cono';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Omejitev stroškov za cono';
	var $_PHPSHOP_LOGIN_FIRST = 'Prosim, da se najprej prijavite ali registrirate na tej strani (uporabite okno za prijavo).<br>Hvala!';
	var $_PHPSHOP_STORE_FORM_TOS = 'Pogoji storitev';
	var $_PHPSHOP_AGREE_TO_TOS = 'Prosimo, da najprej potrdite naše pogoje storitev.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Strinjam se s pogoji storitev';
	var $_PHPSHOP_LEAVE_BLANK = '(pustite PRAZNO, če nimate ustrezne <br />php datoteke za predmet!)';
	var $_PHPSHOP_RETURN_LOGIN = 'Redne stranke: Prijavite se, prosim!';
	var $_PHPSHOP_NEW_CUSTOMER = 'Ste novi? Prosim, posredujte nam podatke za izstavitev računa';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Račun stranke:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Podatki naročila';
	var $_PHPSHOP_ACC_UPD_BILL = 'Tukaj osvežite podatke za izstavitev računa.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Tukaj dodajate in upravljate transportne naslove.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Podatki o računu';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Transportni podatki';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Ni naročil';
	var $_PHPSHOP_ACC_BILL_DEF = '- Privzeto (Enako kot za izstavitev računa)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Računu lahko dodate transportne naslove. Za spodaj izbrani transportni naslov si izberite primerno ime ali geslo.';
	var $_PHPSHOP_CONFIG = 'Nastavitve';
	var $_PHPSHOP_USERS = 'Uporabniki';
	var $_PHPSHOP_IS_CC_PAYMENT = 'plačilo s kreditno kartico?';
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
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Država';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'Začetek obsega poštnih številk';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Konec obsega poštnih številk';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Najmanjša teža';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Največja teža';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Plačilo';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Plačilo za paket';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'Davčna št.';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Uredi seznam';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Transportno podjetje';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Opis transportne tarife';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Teža od ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... do';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Transportno podjetje';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Uredi seznam';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'NAPAKA: Oznaka transportnega podjetja že obstaja.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'NAPAKA: Izberite transportno podjetje.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'NAPAKA: Obstaja že najmanj ena transportna tarifa, izbrišite prejšnje tarife transportnega podjetja';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'NAPAKA: Ne najdem transportnega podjetja s to oznako.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'NAPAKA: Izberite transportno podjetje.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'NAPAKA: Ne najdem transportnega podjetja s to oznako.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'NAPAKA: Manjka opis tarife.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'NAPAKA: Ciljna država ni veljavna. Navedbe več držav ločite z ";".';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'NAPAKA: Izberite najmanjšo težo';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'NAPAKA: Izberite največjo težo';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'NAPAKA: Najnižja teža mora biti manjša od najvišje';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'NAPAKA: Izberite transportno tarifo';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'NAPAKA: Izberite valuto';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'NAPAKA: Izberite transportno tarifo';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Prosim, izberite';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Transportno podjetje';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Transportna tarifa';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Cena';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-nič-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Kreditna kartica';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Uporabite obdelavo plačila';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Izstavitev računa banki';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Le naslov/plačilo po povzetju';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Prosim, izberite transportni naslov!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Prosim, izberite način transporta!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Prosim, izberite način plačila!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Prosim, preglejte posredovane podatke in potrdite naročilo!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Prosim, izberite način transporta.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Prosim, izberite drug način transporta.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Prosim, izberite način plačila.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Prosim, vpišite številko kreditne kartice.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Prosim, vpišite ime na kreditni kartici.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'Številka kreditne kartice ni veljavna.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Prosim, vpišite mesec (rok) veljavnosti kreditne kartice.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Prosim, vpišite leto (rok) veljavnosti kreditne kartice.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'Datum veljavnosti kartice je potekel.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Prosim, izberite naslovnika.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Neveljavna številka računa';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'V nakupovalnem vozičku ni ničesar!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'NAPAKA: Prosim, izberite transportno podjetje!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'NAPAKA: Izbrane transportne tarife ne najdem!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'NAPAKA: Izbranega transportnega naslova ne najdem!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'NAPAKA: Manjkajo podatki kreditne kartice ...';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'NAPAKA: Kreditne kartice ne najdem!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Žal je uporabljena številka kreditne kartice testna številka!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'Uporabnikove šifre ni v bazi podatkov!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Manjka ime imetnika bančnega računa.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Manjka koda IBAN.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Manjka številka bančnega računa.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Manjka koda banke.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Manjka ime banke.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Za odjavo je potreben ustrezen korak!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Podatko o plačilu shranjeni za kasnejšo odbelavo.<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Vrednost naročila je manjša od najnižje zahtevane vrednosti.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'Najnižja zahtevana vrednost naročila je:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Plačilo s kreditno kartico';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'Drugi načini plačila';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Prosim, izberite način plačila:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Najnižja zahtevana vrednost naročila trgovine je';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Podatki bančnega računa';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Številka računa';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'Koda banke';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Ime banke';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Imetnik računa';
	var $_PHPSHOP_MODULES = 'Moduli';
	var $_PHPSHOP_FUNCTIONS = 'Funkcije';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Posebni izdelki';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Če želite, lahko naročilu dodate opombe';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Strankine opombe';
	var $_PHPSHOP_INCLUDING_TAX = '(z $tax% DDV)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Prosim, izberite predmet';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Predmet';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Obseg prenosa s spleta';
	var $_PHPSHOP_DOWNLOADS_START = 'Začni prenos s spleta';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Prosim, vpišite šifro za prenos s spleta, ki ste jo prejeli po e-pošti in kliknite na "Začni prenos".';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Žal je vašemu dovoljenju prenosa s spleta potekel rok';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Žal ste dosegli največje dovoljeno število prenosov s spleta';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Neveljaven prenos s spleta!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Sporočila ni bilo mogoče poslati ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Sporočilo poslano  ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Podatki o prenosu s spleta';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'Naročene datoteke so na voljo za prenos';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Prosim, vpišite šifre naslednjih prenosov v naš obseg prenosov s spleta: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'Največje dovoljeno število prenosov na datoteko je: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Dovoljenje za prenos s spleta poteče v določenem roku po prvem prenosu';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Vprašanja? Težave?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Podatki o prenosu:  ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'S spleta prenosljiv izdelek?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Hvala za plačilo. 
        Transakcija je bila uspešna. Podjetje PayPal vam bo po e-pošti poslalo potrdilo transakcije. 
        Lahko nadaljujete ali pa se prijavite na <a href=http://www.paypal.com>www.paypal.com</a>, če si želite ogledati podrobnosti transakcije.';
	var $_PHPSHOP_PAYPAL_ERROR = 'Pri obdelavi transakcije je prišlo do napake. Statusa naročila ni bilo mogoče osvežiti.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Zahvaljujemo se vam za nakup. Podatki o naročilu sledijo.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Hvala za zaupanje.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Vprašanja? Težave?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'Prejeli smo naslednje naročilo.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Če si želite ogledati naročilo, sledite spodnji povezavi.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Negativne vrednosti niso dovoljene.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Prosim, vnesite veljavno količino za ta predmet.';
	var $_PHPSHOP_CART_STOCK_1 = 'Izbrana količina presega trenutno zalogo. ';
	var $_PHPSHOP_CART_STOCK_2 = 'Trenutno je na zalogi $product_in_stock izdelkov. ';
	var $_PHPSHOP_CART_STOCK_3 = 'Če želite, da vas uvrstimo na čakalni seznam, kliknite tukaj.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Prosim, izberite dodatne lastnosti.';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'nič';
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
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Mesečna provizija';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Seznam naročil';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'E-pošta partnerjem';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'E-pošta partnerjem';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'Komu poslati e-pošto(* = VSEM)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Vaša e-pošta';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Zadeva';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Vključno s trenutno statistiko';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Stopnja provizije (odstotki)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Aktivni?';
	var $_PHPSHOP_DELIVERY_TIME = 'Običajni čas dostave';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Podatki od dostavi';
	var $_PHPSHOP_MORE_CATEGORIES = 'Podkategorije:';
	var $_PHPSHOP_AVAILABILITY = 'Razpoložljivost';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Izdelek trenutno ni na voljo.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Na voljo bo: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Povzetek';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Statistika';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Stranke';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'aktivni izdelki';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'pasivni izdelki';
	var $_PHPSHOP_STATISTIC_SUM = 'Vsota';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Nova naročila';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Nove stranke';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Če želite prejeti obvestilo, ko bo izdelek spet na zalogi, spodaj višite svoj e-naslov. 
                                        Vašega naslova ne bomo posredovali, prodali ali uporabili v kakršen koli drug namen, kot da vas obvestimo,
                                        da je izdelek spet na zalogi.<br /><br />Hvala!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Hvala za potrpežljivost! <br />Takoj, ko bomo imeli podatke o zalogi, vas bomo o tem obestili.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Obvestite me!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Natisni pogled';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Izberete lahko Authorize.net ALI CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' Stanje nastavitvene datoteke:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'zapisovanje je mogoče';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'zapisovanje ni mogoče';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Globalno';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Pot in URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Stran';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Transport';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Preverba';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Posredovanja';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Plačila';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Uporabi le kot katalog';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Če okence označite, izključite vse funkcije nakupovalnega vozička.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Pokaži cene';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Pokažem cene z davkom?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Pokaže, ali kupci vidijo cene z davkom ali brez.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Označite, če želite prikaz cen. Pri uporabi funkcij kataloga se nekateri odločijo za prikaz brez cen.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Navidezni davek';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'To določa, ali so predmeti s težo "nič" obdavčeni ali ne. Spremenite ps_checkout.php->calc_order_taxable(), če želite drugačno nastavitev.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Oblika davka:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Glede na naslov naslovnika';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Glede na naslov prodajalca';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'To določa, kateri davek bo uporabljen za izračun:<br />
                                                <ul><li>davek države, kjer je trgovina</li><br/>
                                                <li>ali davek države kupca.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Omogočim različne davčne stopnje?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'To označite, če ponujate izdelke z različnimi davčnimi stopnjami (npr. 7% za knjige in prehrambne izdelke, 16% za druge izdelke)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Odštejem popust pred obračunavanjem davka/transportnih stroškov?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Strankam omogoči sistem ocenjevanja/vrednotenja';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Če je možnost vključena, je strankam omogočeno <strong>ocenjevanje izdelkov</strong> in <strong>pisanje mnenj</strong>. <br />
                                                                                Stranke lahko svoje izkušnje z izdelkom na ta način posredujejo drugim strankam.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Nastavi spremenljivko, na podlagi katere se popust na plačilo odšteje PRED (označeno) ali PO obračunu davka in transportnih stroškov.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Ali stranke lahko pustijo podatke o bančnem računu?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Označite, če želite, da imajo stranke ob registraciji možnost posredovanja podatkov o bančnem računu.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Ali stranke lahko izberejo državo/regijo?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Označite, če želite, da imajo stranke ob registraciji možnost izbire države ali regije.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Ali se morajo stranke strinjati s pogoji storitev?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Označite, če želite, da se stranke pred registracijo strinjajo s pogoji storitev.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Preverjanje zaloge?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Določa, ali naj program preveri zalogo, ko stranka izdelek doda v nakupovalni voziček. 
                                                                                          Če je možnost vključena, strankam ne dovoli, da bi v nakupovalni voziček dodale več izdelkov, kot jih je na zalogi.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Omogoči partnerski program?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'To omogoča beleženje partnerjev na uporabniški strani trgovine. Možnost omogočite, če ste izbrali partnerje, ki imajo dostop v admistrativni del.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Oblika obvestil o naročilih:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Besedilna oblika';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML oblika';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'To določa nastavitve potrdil naročil:<br />
                                                                                        <ul><li>kot preprosto besedilno obvestilo</li>
                                                                                        <li>ali kot html obvestilo s slikami.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Omogočim administracijo uporabniških strani uporabnikom, ki nimajo dostopa do administrativnih strani?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'S to nastavitvijo omogočite administracijo uporabniških strani uporabnikom,
                                                                                              ki so administratorji trgovine, nimajo pa dostopa do administrativnih strani Mambo (npr. Registrirani / urednik).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'URL naslov vaše strani. Običajno enak Mambo URL (s poševnico na koncu naslova!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'VARNI URL';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'Zaščiteni URL naslov vaše strani. (s poševnico na koncu naslova!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'URL KOMPONENTE';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'URL naslov VirtueMart komponente. (s poševnico na koncu naslova!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'URL SLIKE';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'URL naslov slikovnega imenika VirtueMart komponente.(s poševnico na koncu naslova!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'ADMIN POT';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'Pot do imenika VirtueMart komponente.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'POT RAZREDOV';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'Pot do imenika razredov phpShop.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'POT STRANI';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'Pot do html imenika phpShop.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'POT SLIKE';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'Pot do imenika slik trgovine phpShop.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'DOMAČA STRAN';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'To je privzeta stran, ki se bo naložila.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'STRAN NAPAKE';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'To je privzeta stran za sporočila o napakah.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'STRANO DPRAVE NAPAK';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'To je privzeta stran za sporočila za odstranjevanje programskih napak.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'ODSTRANJEVANJE NAPAK ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'ODSTRANJEVANJE NAPAK?  	   	Vključi poročanje za odstranjevanje programskih napak. Na dnu vsake strani se odpre stran STRANODPRAVENAPAK. V veliko pomoč pri razvijanju trgovine, ker prikazuje vsebino nakupovalnih vozičkov, vrednosti v okencih obrazcev itd.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'UPORABNIŠKA STRAN';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'To je privzeta stran za prikaz podrobnosti o izdelkih.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Predloga kategorij';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Določanje privzete predloge kategorij za prikaz izdelkov po kategorijah.<br />
                                                                                                      Nove predloge lahko ustvarjate na podlagi obstoječih datotek predlog,<br />
                                                                                                      (ki so v imeniku <strong>COMPONENTPATH/html/templates/</strong> in se začnejo z browse_)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Privzeto število izdelkov v vrstici';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Določanje števila izdelkov v vrstici.<br />
                                                                                                      Primer: Če je nastavitev 4, bodo v predlogi kategorije prikazani 4 izdelki na vrstico';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = 'slika "ni slike"';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Ta slika bo prikazana, ko slika izdelka ni na voljo.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'VRSTICE ISKANJA';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Določi števila vrstic na stran, ki bodo prikazane, ko bodo rezultati iskanja prikazani v obliki seznama.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'BARVA ISKANJA 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Določi barve lihih vrstic v seznamu rezultatov.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'BARVA ISKANJA 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Določanje barve sodih vrstic v seznamu rezultatov.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'NAJVEČ VRSTIC';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Določanje števila vrstic, ki so prikazane v okencu izbire seznama naročil.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Prikaži nogo ';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'V nogi prikaže sliko powered-by-VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Izberite način transporta za trgovino';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Standardni transportni modul s posamičnimi nastavitvami transportnih podjetij in tarif. <strong>PRIPOROČLJIVO !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '  	Modul transportnih con (Zone Transport Module Country Version 1.0)<br />
                                                                                                            Če želite več podatkov o tem modulu, obiščite <a href="http://ZephWare.com">http://ZephWare.com</a><br />
                                                                                                            ali se obrnite na <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Označite, če želite uporabljati modul transportnih con';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<a href="http://www.ups.com" target="_blank">UPS Online� Tools</a> Izračun transportnih stroškov';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'Vstopna koda UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Vaša vstopna koda UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'Uporabniško ime UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'Uporabniško ime, ki ste ga prejeli od UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'Geslo UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'Geslo računa UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'Modul InterShipper. Označite, le če imate račun <a href="http://www.intershipper.com" target="_blank">Intershipper.com</a>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Onemogoči izbiro načina transporta. Izberite, če vaše stranke naročajo s spleta prenosljive izdelke, za katere transport ni potreben.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'Geslo InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Geslo vašega računa InterShipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'E-naslov InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'E-naslov vašega InterShipper računa.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'KODIRNI KLJUČ';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Kodirni ključ se uporablja za kodiranje v bazi shranjenih podatkov. Dostop do teh datoteke mora biti ves čas zaščiten.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Omogoči odjavno vrstico';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'To označite, če želite, da bo stranka med postopkom odjave videla  "odjavno vrstico" ( 1 - 2 - 3 - 4 z grafično podporo).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Izberite postopek odjave za vašo trgovino';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Standardni :</strong><br/>
               1. Izbira transportnega naslova<br />
              2. Izbira načina transporta<br />
              3. Izbira načina plačila<br />
              4. Zaključek naročila';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Postopek 2:</strong><br/>
               1. Izbira transportnega naslova<br />
              2. Izbira načina transporta<br />
              3. Zaključek naročila';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Postopek 3:</strong><br/>
               1. Izbira načina transporta<br />
              2. Izbira načina plačila<br />
              3. Zaključek naročila';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Postopek 4:</strong><br/>
               1. Izbira načina plačila<br />
              2. Zaključek naročila';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Omogoči prenos s spleta';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Označite, če želite omogočiti prenos s spleta. Velja le za izdelke, ki jih je mogoče prenesti s spleta.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Status naročila, ki omogoča prenos s spleta';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Izberite status naročila, ob katerem stranka preko e-pošte prejme obvestilo o prenosu s spleta.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Status naročila, ki onemogoča prenos s spleta';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Izberite status naročila, ob katerem stranki prenos s spleta ni omogočen.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'KORENSKIIMENIKPRENOSOV';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'Fizična pot do datotek, ki jih stranka lahko prenese s spleta. (s poševnico na koncu!)<br>
        <span class="message">Varnost vaše trgovine: Če je mogoče, uporabite imenik, ki je KJER KOLI, RAZEN V KORENSKEM SPLETNEM IMENIKU</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Zgornja omejitev prenosa';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Določi število prenosov, ki so mogoči z eno šifro (za eno naročilo)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Potek roka prenosov';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Nastavi časovni razpon <strong>v sekundah</strong>, ki je stranki na voljo za prenose s spleta. 
  Čas začne teči s prvim prenosom! Ko rok poteče, šifra prenosa postane neveljavna.<br />Opomba : 86400s=24h.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Omogočim IPN plačila preko sistema PayPal?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Označite, če želite strankam omogočiti plačilo preko sistema PayPal.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'E-naslov za plačila preko sitema PayPal:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Poslovni e-naslov za plačila preko sistema PayPal. Uporablja se tudi kot naslov prejemnika.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Status naročila za uspešne transakcije';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Izberite stanje naročila, ki označuje, da je bila transakcija PayPal IPN uspešna. Če uporabljate nakupe prenosov s spleta: 
  izberite status, ki omogoča prenos s spleta (stranka s tem po e-pošti prejme obvestilo o prenosu).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Status naročila za neuspešne transakcije';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Izberite stanje naročila, ki označuje, da je bila transakcija PayPal IPN neuspešna.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Omogočim IPN plačila preko sistema PayMate?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Označite, če želite strankam omogočiti plačilo preko avstralskega sistema PayMate.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'Uporabniško ime PayMate:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Vaš uporabniški račun pri PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Omogočim plačila preko Authorize.net?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Označite, če želite uporabljati Authorize.net s phpShop.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Testni način ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Izberite \'Da\' med testiranjem. Izberite \'Ne\', če želite omogočiti dejanske transakcije.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Da';
	var $_PHPSHOP_ADMIN_CFG_NO = 'Ne';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Šifra prijave na Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'To je vaša šifra za prijavo na Authorize.Net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Transakcijski ključ Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'To je vaš transakcijski ključ za Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Tip potrditve';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'To je tip potrditve za Authorize.Net.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Omogočim CyberCash?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Označite, če želite uporabljati CyberCash s phpShop.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash TRGOVEC';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_TROVEC je šifra trgovca CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'Trgovski ključ CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'Trgovski ključ CyberCash je trgovec za CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'PLAČILNI URL naslov za CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'PLAČILNI URL naslov za CyberCash URL za varna plačila sistema CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'TIP POT. CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'TIP POT. CyberCash je tip potrditve transakcije sistema CyberCash';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Razširjeno iskanje';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Išči po vseh kategorijah';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Išči po vseh podatkih izdelka';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Le po imenu izdelka';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Le po izdelovalcu/prodajalcu';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Le po opisu izdelka';
	var $_PHPSHOP_SEARCH_AND = 'in';
	var $_PHPSHOP_SEARCH_NOT = 'ne';
	var $_PHPSHOP_SEARCH_TEXT1 = 'Prvi seznam omogoča izbiro kategorije za omejitev iskanja. 
        Drugi seznam omogoča omejitev iskanja na določen podatek izdelka (npr. ime). 
        Ko izberete način iskanja (ali pustite privzeto nastavitev VSE), vpišite ključno besedo iskanja. ';
	var $_PHPSHOP_SEARCH_TEXT2 = ' Iskanje lahko poglobite z dodatkom druge ključne besede in izbiro funkcije IN ali NE. 
        Če izberete IN, morajo podatki izdelka vsebovati obe besedi, da bo prikazan. 
        Če izberete IN, morajo podatki izdelka vsebovati prvo besedo, druge pa ne, da bo izdelek prikazan.';
	var $_PHPSHOP_ORDERBY = 'Uredi po';
	var $_PHPSHOP_CUSTOMER_RATING = 'Povrečna ocena strank';
	var $_PHPSHOP_TOTAL_VOTES = 'Skupno št. glasov';
	var $_PHPSHOP_CAST_VOTE = 'Oddajte glas, prosim';
	var $_PHPSHOP_RATE_BUTTON = 'Ocenite';
	var $_PHPSHOP_RATE_NOM = 'Ocena';
	var $_PHPSHOP_REVIEWS = 'Mnenja strank';
	var $_PHPSHOP_NO_REVIEWS = 'Za ta izdelek ni mnenja.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Napišite prvo mnenje ...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Prijavite se, da boste lahko napisali mnenje.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Ocenite izdelek, da boste lahko oddali mnenje!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Prosimo, da mnenje o izdelku razširite. Najmanjše število znakov: 100';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Prosimo, da mnenje o izdelku skrčite. Največje število znakov: 2000';
	var $_PHPSHOP_WRITE_REVIEW = 'Napišite mnenje o tem izdelku!';
	var $_PHPSHOP_REVIEW_RATE = 'Najprej ocenite izdelek. Prosim, izberite oceno med 0 (najnižja) in 5 zvezdicami(najvišja).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Napišite kratko mnenje ...(min. 100, maks. 2000 znakov) ';
	var $_PHPSHOP_REVIEW_COUNT = 'Znakov: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Oddajte mnenje';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Za ta izdelek ste že oddali mnenje. Hvala!';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Hvala za vaše mnenje.';
	var $_PHPSHOP_COMMENT = 'Opomba';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Dodaj/uredi tipe kreditnih kartic';
	var $_PHPSHOP_CREDITCARD_NAME = 'Ime kreditne kartice';
	var $_PHPSHOP_CREDITCARD_CODE = 'Kreditna kartica - kratka koda';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Tip kreditne kartice';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Seznam kreditnih kartic';
	var $_PHPSHOP_UDATE_ADDRESS = 'Osveži naslov';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Nadaljevanje nakupov';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Naročilo je bilo uspešno!';
	var $_PHPSHOP_ORDER_LINK = 'Če si želite ogledati podrobnosti naročila, kliknite na to povezavo.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'Status naročila št. {order_id} je bil spremenjen.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'Novi status je:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'Če si želite ogledati podrobnosti naročila, kliknite na to povezavo (ali naslov kopirajte v brskalnik):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Sprememba statusa naročila: Vaše naročilo {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Obvestim stranko?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Najprej spremenite stanje naročila, prosim!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Popust za privzeto skupino kupcev (%)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Pozitivna vrednost X pomeni: Če izdelek za TO skupino kupcev nima določene cene, se privzeta cena zmanjša za X %. Negativna vrednost ima obraten učinek';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Popust na izdelek';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Seznam popustov na izdelke';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Dodaj/uredi popust na izdelek';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Znesek popusta';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Vpišite znesek popusta';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Tip popusta';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Odstotkov';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Skupaj';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Naj bo popust znesek ali vrednost?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Začetek popustnega roka';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Določi dan, s katerim se popust začne';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Konec popustnega roka';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Določi dan, s katerim se popust konča';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Obrazec za popuste na izdelke lahko uporabite za dodajanje popustov!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Prihranite';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Prikaz cele slike';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Slog prikaza valute';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Oznaka valute';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Tukaj lahko uporabljate tudi HTML oznake (npr. �,�,�, ...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Decimalna mesta';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Št. prikazanih decimalnih mest (lahko je 0)<br><b>V primeru razlike v decimalnih mestih zaokroži vrednost</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Oznaka decimalke';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Znak za oznako decimalke';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Ločevanje na tisoč';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Znak za ločevanje na tisoč (lahko je prazno)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Pozitivna oblika';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Oblika, ki prikazuje pozitivne vrednosti.<br>(Oznaka označuje valuto)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Negativna oblika';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Oblika, ki prikazuje negativne vrednosti.<br>(Oznaka označuje valuto)';
	var $_PHPSHOP_OTHER_LISTS = 'Drugi seznami izdelkov';
	var $_PHPSHOP_MORE_IMAGES = 'Poglej več slik';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Razpoložljive slike za';
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
	var $_PHPSHOP_FILES_FORM = 'Naloži datoteko za';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Trenutna datoteka';
	var $_PHPSHOP_FILES_FORM_FILE = 'Datoteka';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Slika';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Naloži v';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'Privzeta pot slike izdelka';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Določite lokacijo datoteke';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Pot prenosa (npr. za prodajo prenosljivih datotek!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Samodejno ustvarim predstavitveno sliko?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Je datoteka objavljena?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Naslov datoteke (kar stranka vidi)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Opis datoteke';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'URL naslov datoteke (po izbiri)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Vnesite veljavno pot!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'Predstavitvena slika uspešno ustvarjena!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'Predstavitvene slike ni mogoče ustvariti!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Napaka pri nalaganju slike/datoteke';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Datoteke cele slike ni mogoče izbrisati.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Datoteka cele slike uspešno izbrisana.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Datoteke predstavitvene slike ni mogoče izbrisati (morda ni obstajala): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Predstavitvena slika uspešno izbrisana.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Datoteke ni mogoče izbrisati.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Datoteka uspešno izbrisana.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Žal iskane datoteke ne najdem!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Slike ne najdem!';
	var $_PHPSHOP_COUPON_MOD = 'Kupon';
	var $_PHPSHOP_COUPONS = 'Kuponi';
	var $_PHPSHOP_COUPON_LIST = 'Seznam kuponov';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Kupon je že vnovčen.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Kupon vnovčen! Hvala.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Če imate kodo kupona, jo vpišite spodaj:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Oddaj';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Koda kupona že obstaja. Poskusite še enkrat.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Osveži kupon';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Kliknite na kodo kupona, če ga želite urediti. Če želite kodo kupona izbrisati, jo izberite in kliknite na Izbriši:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Koda';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Odstotek ali znesek';
	var $_PHPSHOP_COUPON_TYPE = 'Vrsta kupona';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Darilni kopon se po uporabi pri naročilu izbriše. Trajni kupon stranka lahko uporabi kadar koli.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Darilni kupon';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Trajni kupon';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Vrednost';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Izbriši kodo';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Resnično želite izbrisati kodo kupona?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Prosim, izpolnite vsa polja.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'Vrednost kupona mora biti število.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Nov kupon';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Koda kupona';
	var $_PHPSHOP_COUPON_PERCENT = 'Odstotkov';
	var $_PHPSHOP_COUPON_TOTAL = 'Skupaj';
	var $_PHPSHOP_COUPON_VALUE = 'Vrednost';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Koda kupona shranjena.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Shrani kupon';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Popust kupona';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Kode kupona ne najdem. Poskusite še enkrat.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Omogoči uporabo kupona';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Če omogočite uporabo kupona, strankam omogočite, da vpišejo kodo kupona in ob nakupu vnovčijo popust.';
	var $_PHPSHOP_FREE_SHIPPING = 'Brezplačen transport';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Transport za to naročilo je brezplačen!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Najnižja vrednost za brezplačen transport';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Najnižja vrednost (VKLJUČNO Z DAVKOM!), ki omogoča brezplačen transport
                                                (primer: <strong>50</strong> pomeni, da stranka, ki naroči nad 50$ (vključno z davkom),
                                                dobi brezplačen transport.';
	var $_PHPSHOP_YOUR_STORE = 'Vaša trgovina';
	var $_PHPSHOP_CONTROL_PANEL = 'Nadzorna plošča';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF - Gumb';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Prikaži ali skrij PDF - gumb v trgovini';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Je strinjanje s pogoji storitev potrebno za VSAKO NAROČILO?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Označite, če želite, da stranka potrdi strinjanje s pogoji storitev ob VSAKEM NAROČILU (pred naročilom).';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Vrsta bančnega računa';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Preverjanje';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Poslovno preverjanje';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Shranjevanje';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Ponavljanje računov?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Določite, če želite ponavljanje računov.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Interna napaka pri obdelavi zahtevka';
	var $_PHPSHOP_PAYMENT_ERROR = 'Napaka pri obdelavi plačila';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Plačilo uspešno obdelano';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS ni mogel obdelati zahtevka za transportno tarifo.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Zagotovljeni rok dostave';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'Metoda prevzema UPS';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Kako UPS izročate pakete?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'Pakiranje UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Izberite privzeto vrsto pakiranja.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Dostava na dom?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Dostava na dom (DOM)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Dostava v podjetje (POD)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Navedek za dostavo na dom (DOM) ali dostavo v podjetje (POD).';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Manipulativna tarifa';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Manipulativna tarifa za ta način transporta.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Davčna stopnja';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Za transportno tarifo uporabi nasledno davčno stopnjo:';
	var $_PHPSHOP_ERROR_CODE = 'Napaka kode';
	var $_PHPSHOP_ERROR_DESC = 'Napaka opisa';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Prikaži / spremeni transakcijski ključ';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Prikaži/spremeni geslo/transakcijski ključ';
	var $_PHPSHOP_TYPE_PASSWORD = 'Prosim, vpišite uporabniško geslo';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Trenutno geslo';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Trenutni transakcijski ključ';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'Transakcijski ključ uspešno spremenjen.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Zahtevek/iskanje kode kreditne kartice (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Preveri, če so vrednosti CVV2/CVC2/CID veljavne (tri- ali štiri-mestno število na hrbtni strani kreditne kartice, pri karticah American Express na sprednji strani)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Prosim, vpišite tri- ali štiri-mestno število na hrbtni strani kreditne kartice (pri karticah  American Express so na sprednji strani)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'Če želite nadaljevati, morate vpisati kodo kreditne kartice.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'ALI vpišite ime datoteke';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'OPOMBA: Tukaj vpišete ime datoteke. <strong>Če tukaj vpišete ime datoteke, datoteke ne bo mogoče samodejno naložiti!!! Datoteko bo potrebno naložiti ročno preko FTP!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'OR naložite datoteko';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Lokalno datoteko lahko naložite na strežnik. Ta datoteka bo prodajni izdelek. Obstoječe datoteke bodo zamenjane.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Vpišite besedilo, ki ga bo stranka videla na strani s podrobnostmi.<br />npr.: 24h, 48h, 3 - 5 dni, Po naročilu ...';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'ALI izberite sliko, ki bo prikazana na strani s podrobnostmi.<br />Slike so v imeniku <i>/components/com_virtuemart/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Seznam lastnosti';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Primeri oblik seznamov lastnosti:</h4>
        <pre>Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00];AndSoOn,..,..</pre>
        <h4>Nastavitve cen za uporabo s spreminjanjem razširjenih lastnosti:</h4>
        <pre>
        + == Dodaj vrednost določeni ceni.<br />
        - == Odštej vrednost od določene cene.<br />
        = == Nastavi ceno izdelka.
      </pre>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Seznam prilagojenih lastnosti';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Primeri oblik seznamov prilagojenih lastnosti:</h4>
        <pre>Ime; Dodatki;</strong>...</pre>';
	var $_PHPSHOP_MULTISELECT = 'Izbira skupine: uporabite tipko CTRL in miško';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'Omogoči plačilo preko eProcessingNetwork.com?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Uporabite, če želite uporabljati eProcessingNetwork.com s phpShop.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Testni način ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Izberite "Da" med testiranjem. Izberite "Ne", da omogočite dejanske transakcije.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'Prijavna šifra za "eProcessingNetwork.com"';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'To je vaša prijavna šifra za eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'Transakcijski ključ za eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'To je vaš transakcijski ključ za eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Tip potrditve';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'To je tip potrditve za eProcessingNetwork.com.';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Sorodni izdelki';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'S pomočjo tega seznama lahko nastavite povezave med izdelki. S tem, ko tukaj izberete izdelke, postanejo <strong>Sorodni izdelki</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Morda vas bodo zanimali tudi naslednji izdelki';
	var $_PHPSHOP_IMAGE_ACTION = 'Postopek slike';
	var $_PHPSHOP_NONE = 'nič';
	var $_PHPSHOP_ORDER_HISTORY = 'Zgodovina naročil';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Opomba';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Opombe k naročilu';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Vključim opombo?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Datum dodan';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Stranka obveščena?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Sprememba statusa naročila';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = 'Uporabniško ime transporta USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = 'Uporabniško ime transporta USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = 'Geslo transporta USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = 'Geslo transporta USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER = 'Strežnik transporta USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP = 'Strežnik transporta USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH = 'Pot transporta USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP = 'Pot transporta USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE = 'Velikost paketa USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP = 'Velikost paketa USPS';
	var $_PHPSHOP_USPS_PADDING = 'Percent to pad weight for shipping package. (Include %)';
	var $_PHPSHOP_USPS_PADDING_TOOLTIP = 'Pad the shipping weight to allow additional weight for shipping box and packing. Using this allows you to put actual weight in your items weight settings.  Requires you to have the % sign included.  Example 15%';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_HANDLING_FEE = 'Manipulacijska tarifa';
	var $_PHPSHOP_USPS_HANDLING_FEE = 'Manipulacijska tarifa za to vrsto transporta.';
	var $_PHPSHOP_USPS_HANDLING_FEE_TOOLTIP = 'Manipulacijska tarifa za to vrsto transporta.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE = 'Mednarodna manipulacijska tarifa za USPS pošiljke.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP = 'Mednarodna manipulacijska tarifa za USPS pošiljke.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE = 'Mednarodna manipulacijska tarifa za USPS pošiljke na kilogram.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP = 'Mednarodna manipulacijska tarifa za USPS pošiljke na kilogram.';
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
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Ta naziv bo naziv stolpca v tabeli. Naziv mora biti edinstven in brez presledkov.<BR>Na primer: splošni_materiali';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Oznaka parametra';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Opis parametra';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Vrsta parametra';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Število';
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
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Več vrednosti';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Možne vrednosti';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Prikažem možne vrednosti kot izbiro za več vrednosti?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Če so možne vrednosti nastavljene, ima parameter lahko le te vrednosti. Primer možnih vrednosti:</strong><BR><span class="sectionname">Jeklo;Les;Plastika;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'privzeta vrednost';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'Za privzeto vrednost parametra uporabi ta format:<ul><li>Datum: LLLL-MM-DD</li><li>Ura: UU:MM:SS</li><li>Date & Time: YYYY-MM-DD HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Enota';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Razširjeno iskanje po parametrih';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Iskanje parametrov';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Želite iskati izdelke po tehničnih parametrih?<BR>Uporabite lahko katerega koli od pripravljenih obrazcev:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Žal za to iskanje ni kategorije.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Žal ni objavljene vrste izdelka s tem imenom.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'JE kot';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'NI kot';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Iskanje polnega besedila';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Vse izbrano';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Kar koli od izbranega';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Izprazni obrazec';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Išči v kategoriji';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Spremeni parametre';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Padajoče urejeno';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Rastoče urejeno';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Parametri kategorije';
	var $_PHPSHOP_FEE = 'Tarifa';
	var $_PHPSHOP_PRODUCT_CLONE = 'Kloniraj izdelek';
	var $_PHPSHOP_CSV_SETTINGS = 'Nastavitve';
	var $_PHPSHOP_CSV_DELIMITER = 'Ločevalec polj';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Znak omejitve polja';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Naloži CSV datoteko';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Predloži CSV datoteko';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Naloži iz imenika';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Naloži CSV datoteko s strežnika';
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
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Žal zahtevanega izdelka ne najdem!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Pokaži izdelke, ki jih ni na zalogi';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Če je možnost označena, bodo prikazani tudi izdelki, ki jih trenutno ni na zalogi. V nasprotnem primeru ti izdelki niso prikazani.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'Število enot v paketu:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'Število enot v škatli:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Skrij izdelke, ki jih ni na zalogi';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Akcijske ponudbe in znižanja';
	var $_PHPSHOP_FEATURED = 'Akcijska ponudba';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Nazaj na državo';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Nazaj v upravitelja datotek';
	var $_PHPSHOP_ADD_STATE = 'Dodaj državo';
	var $_PHPSHOP_LIST_STATES = 'Seznam držav';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'akcije IN znižanja';
	var $_PHPSHOP_SHOW_FEATURED = 'Akcijski izdelki';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'Znižani izdelki';
	var $_PHPSHOP_FILTER = 'Filter';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Nazaj na glavno stran';
	var $_PHPSHOP_EXPAND_TREE = 'Razširi drevo';
	var $_PHPSHOP_COLLAPSE_TREE = 'Skrij drevo';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Znižana cena';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Tukaj lahko ne glede na splošno nastavitev popusta nastavite poseben popust za izdelek.<br/>
Trgovina bo shranila novo nastavitev popusta s popustom izdelka.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Cena na enoto';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'Trgovina ni povezana s spletom?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'Če to označite, bo prikazano sporočilo, ko trgovina ne bo povezana s spletom.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Sporočilo, ko ni povezave';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Poljski zapis tabele za tabele trgovine';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'Privzeta nastavitev je <strong>vm</strong>';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Prikažem krmarjenje po strani na vrhu seznama izdelkov?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Vključi ali izključi prikaz krmarjenja po strani na vrhu seznama izdelkov na uporabniški strani.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Prikažem število izdelkov?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Prikaže število izdelkov v kategoriji v obliki: Kategorija (4)?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'Slog gumba Dodaj v nakupovalni voziček';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'Omogočim dinamično velikost predstavitvenih slik?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'Če je možnost označena, je omogočeno dinamično spreminjanje velikosti predstavitvenih slik. To pomeni, da bo velikost predstavitvenih slik prilagojena spodaj nastavljeni velikosti,
        s pomočjo GD2 PHP (podpiranje GD2 lahko preverite v "System" -> "System Info" -> "PHP Info" -> gd. 
        Kakovost tako spremenjenih predstavitvenih slik bo boljša, kot če jih prilagodi brskalnik. Nove predstavitvene slike se shranijo v /shop_image/prduct/resized. Če je bila velikost slike že spremenjena, bo ta kopija poslana brskalniku, da bo sprememba velikosti le enkratna.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'Širina predstavitvene slike';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'Ciljna <strong>širina</strong> nove predstavitvene slike.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Višina predstavitvene slike';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'Ciljna <strong>višina</strong> nove predstavitvene slike.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'V transportnih nastavitvah označite vsaj eno izbiro!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Nastavitev cene';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Skupine uporabnikov, ki vidijo prikaz cene';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'Izbrana skupina uporabnikov in vse skupine z višjimi pooblastili bodo lahko videle cene izdelkov.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Prikaži "(vključno z davkom XX% )" kjer je mogoče?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'Če je možnost označena, bodo uporabniki videli besedilo "(vključno z davkom xx%)", če cene vključujejo davek.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'Prikažem ceno za paket?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'Če je možnost označena, bo cena samodejno izračunana na podlagi vrednosti na enoto in načinu pakiranja paketa:<br/>
<strong>Cena na enoto (10 kosov)</strong><br/>
Če možnost ni označena, bo prikaz cene običajen: <strong>Cena: $xx.xx</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'Več nastavitev jedra';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Nastavitve jedra';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Lastnosti uporabniške strani';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Nastavitev davkov';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Začetna količina';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Končna koločina';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'Nastavitve registracije uporabnikov';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'Omogočim registracijo uporabnikov?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'Je aktivacija novega računa potrebna?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Omogočim skrito registracijo uporabnikov?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'Če je možnost označena, uporabniki pri registraciji ne potrebujejo uporabniškega imena in gesla za odprtje novega računa. Namesto tega se za račun uporabi uporabnikov e-naslov, geslo pa se ustvari samodejno. Podatke o registraciji uporabnik prejme po e-pošti.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Pozdravljeni %s,

Hvala za vašo registracijo pri %s. Uporabniški račun je bil ustvarjen.
V %s se lahko prijavite s pomočjo uporabniškega imena in gesla:

Uporabniško ime - %s
Geslo - %s
';
	var $_PEAR_LOG_CRIT = 'Kritično';
	var $_PEAR_LOG_ERR = 'Napaka';
	var $_PEAR_LOG_WARNING = 'Opozorilo';
	var $_PEAR_LOG_INFO = 'Podatki';
	var $_PEAR_LOG_TIP = 'Podatki';
	var $_PEAR_LOG_ALERT = 'Opozorilo';
	var $_PEAR_LOG_EMERG = 'Nujno opozorilo';
	var $_PEAR_LOG_NOTICE = 'Obvestilo';
	var $_PEAR_LOG_DEBUG = 'Odpravljanje napak';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'Vključi PayFlow Pro plačevanje?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'Obkljukaj za uporabo VeriSignovega PayFlow Pro z VirtueMartom.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'Testni način ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'Izberi \'Da\' med testiranjem. Izberi \'Ne\' za realne transakcije.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'VeriSign Partner ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'The Partner ID provided to you by the authorized VeriSign Reseller that registered you for the PayFlow Pro service';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'PayFlow Pro Login ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'This is your PayFlow Pro Login ID';
	var $_VM_TAXDETAILS_LABEL = 'Skupni davek vsebuje';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'Privzeto razvrščanje izdelkov';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'Določa, po katerem polju so privzeto razvrščeni izdelki na seznamih';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'Razpoložljiva polja za razvrščanje';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'Izberi polja, ki bodo na razpolago za razvrščanje izdelkov. Vsako polje določa razvrščanje izdelkov na seznam izdelkov. Če ne izbereš nobenega polja, uporabnik ne bo mogel sam razvrščati prikaza izdelkov.';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO = 'Prikažem kratko obvestilo o politiki vračanja izdelkov in preklica naročila na potrditveni strani naročila?';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP = 'V večini evropskih držav morajo trgovine po zakonu prikazati politiko vračanja izdelkov in preklica naročila. Zato je ta možnost večinoma vključena.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT = 'Pravo obvestilo (skrajšana različica).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP = 'To navodilo kupcu pojasnjuje postopek vračila blaga oz. preklica naročila. Navodilo je prikazano na zadnji strani naročanja, tik nad gumbom "Potrdi naročilo".';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK = 'Celotna različica politike vračila blaga in preklica naročila (povezava na vsebino).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP = 'Dodaj novo vsebino (content) s podrobnostmi postopka vračanja blaga ali preklica naročila.
Zatem lahko vsebino izbereš tukaj.';
	var $_VM_LEGALINFO_SHORTTEXT = '<h5>Politika vračanja izdelkov in preklica naročila</h5>
Naročilo lahko prekličete v roku 14 dni od prejema naročila.
Naročene izdelke lahko vrnete v roku 14 dni od prejema le-teh. Izdelki morajo biti nepoškodovani,
neuporabljeni in zaprti v originalni embalaži.
Za več informacij o preklicu naročila in vračilu izdelkov, si oglejte <a href="%s" onclick="%s" target="_blank">Politiko vračanja izdelkov in preklica naročila</a> page.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EU = 'EU način';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE = 'Mapa za shranjevanje podatkov o seji ni zapisljiva. Popravite napako ali kontaktirajte upravitelja portala.';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX = 'Zapisovanje v mapi za shranjevanje sej (%s) ni mogoče. Popravite napako! Začasno skušam uporabiti pot %s.';
	var $_VM_SESSION_COOKIES_NOT_ACCEPTED_TIP = 'Vaš brskalnik ne sprejema piškotkov (cookies). Če želite dodajati izdelke v košarico in jih kupiti, poskrbite, da bo brskalnik sprejemal piškotke.';
	var $_PHPSHOP_CSV_SKIP_FIRST_LINE = 'Preskoči prvo vrstcio';
	var $_PHPSHOP_CSV_SKIP_DEFAULT_VALUE = 'Preskoči privzeto vrednost';
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
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DELETE = 'The product_delete field is a special field. This field is used to determine if a product should be deleted or not.<br />Usage:<ol><li>Add the name "product_delete" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the value Y. If the field contains any other value, the product will not be deleted.</li></ol><br /.>Values:<ul><li>Y: Yes, the product is to be deleted</li><li>N: No, the product is not to be deleted</li><li>Empty: Empty value, the product is not to be deleted</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DESC = 'Long description for the product.<br />Values:<ul><li>Text: HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_S_DESC = 'Short description for the product.<br />Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PUBLISH = 'The status if a product is published or not.<br />Values:<ul><li>Y: Yes, the product is published</li><li>N: No, the product is not published</li><li>Empty: Empty value, the product is published.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WIDTH = 'The width of the product.<br />Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_HEIGHT = 'The height of the product.<br />Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABLE_DATE = 'The date a product will become availabable. For import the date should be in the format of day/month/year or day-month-year. On Windows systems the date goes until 19/01/2038.<br />Usage:<ol><li>Add the name "product_available_date" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a date value. If the field contains any other value, the data will be ignored.</li></ol><br />Values:<ul><li>Date: day/month/year or day-month-year</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_IN_STOCK = 'The number of articles that you have in stock.<br /><br />Usage:<ol><li>Add the name "product_in_stock" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a numeric value. If the field contains any other value, the default value will be used.</li></ol><br />Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE = 'The different choices a product has. Use this to give a product different specifications. For example a t-shirt that comes in different sizes and colours. You can specify the sizes and colours like this: Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00];AndSoOn,..,..<br /><br />You can adjust the prices per attribute by using the following options:<ul><li>+: Add this amount to the configured price.</li><li>-: Subtract this amount from the configured price.</li><li>=: Set the product\\\'s price to this amount.</li></ul><br />Usage:<ol><li>Add the name "attribute" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the attribute text.</li></ol><br /.>Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABILITY = 'This shows when the product is available. The value can be a descriptive text or the name of an image filename. Images must be placed in "shop_image/availability/".<br />Usage:<ol><li>Add the name "product_availability" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_FULL_IMAGE = 'The filename of the image as located in the "shop_image/product/" folder. The filename can also be a URL.<br />NOTE: If you have dynamic resizing enabled, you need to fill the "product_thumb_image" field. VirtueMart resizes the image specified there.<br/><br />Usage:<ol><li>Add the name "product_full_image" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\\\'s are allowed.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_THUMB_IMAGE = 'The filename of the thumbnail image as located in the "shop_image/product/" folder. The filename can also be a URL.<br />NOTE: If you have dynamic resizing enabled, there still needs to be a value in this field. VirtueMart resizes the image that is specified here.<br /><br />Usage:<ol><li>Add the name "product_full_image" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\\\'s are allowed.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CUSTOM_ATTRIBUTE = 'A custom attribute will add an input field to the product page with the description of the attribute supplied. Custom attributes are specified like this: Name;Extras;...<br />Usage:<ol><li>Add the name "custom_attribute" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the attribute text.</li></ol><br /.>Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PACKAGING = 'Specify the number of items in the package.<br />Usage:<ol><li>Add the name "product_packaging" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the number of items in the package.</li></ol><br /.>Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_BOX = 'Specify the number of items in the box.<br />Usage:<ol><li>Add the name "product_box" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the number of items in the box.</li></ol><br /.>Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT = 'Specify the amount or percentage of discount the product has. The values entered are exact values, no calculation is made. This is the same as if you are filling in a discount via the Product Discount List. If the discount already exists, it will not be added to the database but the product will be linked to the existing discount. The criteria for determining if a discount already exists the following values have to be exactly the same:<ol><li>Amount, be it a total or percentage</li><li>Start date</li><li>End date</li></ol>This prevents from filling the database with a huge number of the same discounts.<br /><br />Usage:<ol><li>Add the name "product_discount" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Optional: Add the name "product_discount_date_start" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Optional: Add the name "product_discount_date_end" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add the chosen columns to your CSV file with the corresponding values.</li></ol><br /.>Values:<ul><li>product_discount</li><ul><li>Number<br />e.g. 10</li><li>Percentage: Must include the % sign<br />e.g. 10%</li></ul><li>product_discount_date_start</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul><li>product_discount_date_end</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul></ul>';
	var $_ITEM_PREVIOUS = 'prejšnja';
	var $_ITEM_NEXT = 'naslednja';
	var $_CMN_OK = 'V redu';
	var $_CMN_CONTINUE = 'Nadaljuj';
	var $_CMN_CANCEL = 'Prekliči';
	var $_BUTTON_SEND_REG = 'Pošlji registracijo';
	var $_CONTACT_FORM_NC = 'Poskrbite, da bodo podatki celotni in pravilni.';
	var $_CMN_REQUIRED = 'Zahtevano';
	var $_CMN_NEW = 'Novo';
	var $_CMN_SAVE = 'Shrani';
	var $_CMN_NEW_ITEM_LAST = 'Novi izdelki so vedno na zadnjem mestu. Razvrščanje je mogoče naknadno, po dodajanju izdelka.';
	var $_CMN_OPTIONAL = 'Opcijsko';
	var $_E_APPLY = 'Posodobi';
	var $_E_IMAGES = 'Slike';
	var $_URL = 'URL:';
	var $_SEL_CATEGORY = 'Izberite kategorijo';
	var $_E_REMOVE = 'Odstrani';
	var $_PN_LT = '<';
	var $_PN_RT = '>';
	var $_PN_PAGE = 'Stran';
	var $_PN_OF = 'od';
	var $_PN_START = 'Začetek';
	var $_PN_PREVIOUS = 'Prejšnja';
	var $_PN_NEXT = 'Naslednja';
	var $_PN_END = 'Konec';
	var $_PN_DISPLAY_NR = 'Prikaži #';
	var $_PN_RESULTS = 'Rezultati';
	var $_CMN_PRINT = 'Tiskaj';
	var $_CMN_PDF = 'PDF';
	var $_CMN_EMAIL = 'E-naslov';
	var $_BACK = 'Nazaj';
	var $_USERNAME = 'Uporabniško ime';
	var $_PASSWORD = 'Geslo';
	var $_BUTTON_LOGIN = 'Prijava';
	var $_REGISTER_UNAME = 'Uporabniško ime';
	var $_REGISTER_EMAIL = 'E-naslov';
	var $_REGWARN_NAME = 'Vnesite ime.';
	var $_REGWARN_UNAME = 'Vnesite uporabniško ime.';
	var $_REGWARN_MAIL = 'Vnesite veljaven e-naslov.';
	var $_SEND_SUB = 'Uporabniške podrobnosti za %s pri %s';
	var $_ASEND_MSG = 'Pozdravljeni %s,
	
	Nov uporabnik se je registriral na portalu %s.
	To sporočilo vsebuje njegove podrobnosti:
	
	Ime - %s
	e-naslov - %s
	Uporabniško ime - %s
	
	Ne odgovarjajte na to sporočilo, ker je generirano samodejno in le v informativne namene';
	var $_REG_COMPLETE = '<div class="componentheading">Registracija zaključena!</div><br />Lahko se prijavite.';
	var $_REG_COMPLETE_ACTIVATE = '<div class="componentheading">Registracija zaključena!</div><br />Vaš uporabniški račun je ustvarjen, povezava za aktivacijo je bila poslana na vaš e-naslov. Uporabniški račun morate aktivirati s klikom na povezavo, navedeno v sporočilu preden se želite prijaviti na portal.';
	var $_DATE_FORMAT_LC = '%A, %d %B %Y';
	var $_LAST_UPDATED = 'Zadnja posodobitev';
	var $_NOT_AUTH = 'Nimate pravi za ogled te vsebine.';
	var $_DO_LOGIN = 'Prijavite se.';
	var $_VALID_AZ09 = 'Vnesite veljavno %s.  Brez presledkov, več kot %d znakov, ki so lahko 0-9,a-z,A-Z';
	var $_CMN_PUBLISHED = 'Objavljeno';
	var $_CMN_UNPUBLISHED = 'Neobjavljeno';
	var $_MORE = 'Več...';
	var $_EMPTY_CATEGORY = 'Ta kategorija je prazna.';
	var $_BUTTON_LOGOUT = 'Odjava';
	var $_NO_ACCOUNT = 'Še niste registrirani?';
	var $_CREATE_ACCOUNT = 'Registrirajte se';
	var $_REGWARN_PASS = 'Vnesite veljavno geslo.  Brez presledkov, več kot 6 znakov, ki so lahko 0-9,a-z,A-Z';
	var $_REGWARN_VPASS1 = 'Ponovite geslo.';
	var $_REGWARN_VPASS2 = 'Geslo in ponovitev gesla se ne ujemata, poskusite ponovno.';
	var $_USEND_MSG_ACTIVATE = 'Pozdravljeni %s,

Zahvaljujemo se vam za registracijo na portal %s. Vaš uporabniški račun je ustvarjen, vendar ga morate aktivirati preden se prijavite na portal.
Za aktivacijo računa kliknite na spodnjo povezavo ali jo skopirajte v vaš brskalnik:
%s

Po aktivaciji se boste lahko prijavili na portal %s z uporabo sledečega uporabniškega imena in gesla:

Uporabniško ime - %s
Geslo - %s';
	var $_USEND_MSG = 'Pozdravljeni %s,

Zahvaljujemo se vam za registracijo na portalu %s.

Sedaj se lahko prijavite na portal %s z uporabo imena in gesla, ki ste ju navedli pri registraciji.';
	var $_PROMPT_PASSWORD = 'Ste pozabili geslo?';
	var $_HI = 'Pozdravljeni';
	var $_NEW_USER_MESSAGE_SUBJECT = 'Nove uporabniške podrobnosti';
	var $_NEW_USER_MESSAGE = 'Pozdravljeni %s,


Administrator portala %s vas je dodal med registrirane uporabnike..

To sporočilo vsebuje podatke za prijavo na portal %s

Uporabniško ime - %s
Geslo - %s


Prosimo, ne odgovarjajte na to sporočilo, ker je samodejno generirano in le v informativne namene.';
	var $_REMEMBER_ME = 'Zapomni si me';
	var $_REGISTER_TITLE = 'Registracija';
	var $_JAN = 'Januar';
	var $_FEB = 'Februar';
	var $_MAR = 'Marec';
	var $_APR = 'April';
	var $_MAY = 'Maj';
	var $_JUN = 'Junij';
	var $_JUL = 'Julij';
	var $_AUG = 'Avgust';
	var $_SEP = 'September';
	var $_OCT = 'Oktober';
	var $_NOV = 'November';
	var $_DEC = 'December';
	var $_PHPSHOP_CSV_VERSION = '0.7';
	var $_PHPSHOP_CSV_ABOUT = 'O CSV';
	var $_PHPSHOP_CSV_PRICE_LIST_ONLY = 'Nalaganje samo cenika';
	var $_PHPSHOP_CSV_MULTIPLE_PRICES_UPLOAD = 'Nalaganje več cen na artikel';
	var $_PHPSHOP_CSV_IMPORT_CONFIG_CSV_FILE = 'Uporabi naslove stolpcev za konfiguracijo';
	var $_PHPSHOP_CSV_COLLECT_DEBUG_INFO = 'Zberi podatke o napakah';
	var $_PHPSHOP_CSV_SHOW_PREVIEW = 'Prikaži predogled';
	var $_PHPSHOP_CSV_REGULAR_UPLOAD = 'Običajno nalaganje';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_UPLOAD = 'Nalaganje vrst izdelkov';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_PARAMETERS_UPLOAD = 'Nalaganje parametrov vrst izdelkov';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_XREF_UPLOAD = 'Nalaganje navzkrižnih povezav vrst izdelkov';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_DETAIL_UPLOAD = 'Nalaganje podrobnosti vrst izdelkov';
	var $_PHPSHOP_CSV_EMPTY_DATABASE = 'Prazna datoteka';
	var $_PHPSHOP_CSV_CONTINUE_UPLOAD = 'Nadaljuj nalaganje';
	var $_PHPSHOP_CSV_CANCEL_UPLOAD = 'Prekini nalaganje';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION = '<span style="color: #FF0000; font-size: 1.2em;">Koraki za nalaganje CSV datoteke</span>
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
	var $_PHPSHOP_CSV_EXPLANATION_UPLOAD_SETTINGS = '<ul><li><span style="font-weight: bold;">Skip first line</span><br />If the CSV file has a header line at the beginning, choose this option to skip that line. This prevents the header from being added to your database.</li><li><span style="font-weight: bold;">Overwrite existing data</span><br />When adding new products to your database, unchecking this option prevents any existing data to be replaced for products that already exist in your database. Default is to update product data.</li><li><span style="font-weight: bold;">Skip default value</span><br />On the configuration page, a default value can be specified in case the field is empty in the CSV file. Enabling this option, the import will not include the field for updating if there is no value in the CSV file.</li><li><span style="font-weight: bold;">Price list upload only</span><br />The Price list upload only is to be used if you are updating the prices of your products. The layout of the CSV is expected to be 2 columns:<ol><li>product_sku</span></li><li>product_price</li></ol></li>Please note that it does NOT take into account the settings on the configuration page.<li><span style="font-weight: bold;">Use column headers as configuration</span><br />If the CSV file has column headers on the first line, this option can be used to use the column headers as the current configuration. The column headers should match one of the column names defined on the Available Fields Tab. This configuration is on a per use basis, nothing is saved. Default values cannot be used with this option.</li><li><span style="font-weight: bold;">Show preview</span><br />Shows a 5 line preview of the file to be imported. The import can then be either cancelled or continued.</li><li><span style="font-weight: bold;">Collect debug information</span><br />In case of problems, use this option to see what happens during the import. At the end of the import a report will be generated with the steps and queries done during the import.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_NAME = 'The name of the manufacturer that is related to the product. This is used in combination with the manufacturer ID. If no manufacturer ID is specified, only the name is checked. New manufacturers will be created with incremental IDs. The process of adding/updating manufacturers follows the following guidelines:<ol><li>Name exists, ID exists --> ID is updated if different</li><li>Name exists, ID does not exist --> New manufacturer created with increment ID</li><li>Name does not exist, ID exists --> Generic name added with existing ID</li><li>Name does not exist, ID does not exist --> Do nothing</li></ol>Usage:<ol><li>Select the name "manufacturer_name" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the manufacturer name.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_ID = 'The ID of the manufacturer that is related to the product and must be unique. This is used in combination with the manufacturer name. If no manufacturer name is specified, only the product manufacturer link will be added/updated. Adding/updating manufacturers follows the following process:<ol><li>Name exists, ID exists --> ID is updated if different</li><li>Name exists, ID does not exist --> New manufacturer created with increment ID</li><li>Name does not exist, ID exists --> Generic name added with existing ID</li><li>Name does not exist, ID does not exist --> Do nothing</li></ol>When no name or ID exists nothing is done to prevent numerous generic name manufacturers from being added.<br /><br />Usage:<ol><li>Select the name "manufacturer_id" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the manufacturer ID.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
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
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LIST_ORDER = 'Specify in which order the product parameter is to be displayed.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_list_order" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a numeric value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
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