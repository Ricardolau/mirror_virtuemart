<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
/**
*
* @version $Id$
* @package VirtueMart
* @Danish Language file.                  Updated 04-04-2007 to ver. 1.0.10
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
	var $_PHPSHOP_CATEGORY = 'Varegruppe';
	var $_PHPSHOP_CATEGORIES = 'Varegrupper';
	var $_PHPSHOP_SELECT_CATEGORY = 'Vælg en kategori';
	var $_PHPSHOP_ADMIN = 'Administration';
	var $_PHPSHOP_PRODUCT = 'Vare';
	var $_PHPSHOP_LIST = 'Liste';
	var $_PHPSHOP_ALL = 'Alle';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Vis alle varer';
	var $_PHPSHOP_VIEW = 'Oversigt';
	var $_PHPSHOP_SHOW = 'Vis';
	var $_PHPSHOP_ADD = 'Ny';
	var $_PHPSHOP_UPDATE = 'Opdater';
	var $_PHPSHOP_DELETE = 'Slet';
	var $_PHPSHOP_SELECT = 'Vælg';
	var $_PHPSHOP_SUBMIT = 'Udfør';
	var $_PHPSHOP_RANDOM = 'Tilfældige varer';
	var $_PHPSHOP_LATEST = 'Nyeste varer';
	var $_PHPSHOP_HOME_TITLE = 'Hjem';
	var $_PHPSHOP_CART_TITLE = 'Indkøbskurv';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Kasse';
	var $_PHPSHOP_LOGIN_TITLE = 'Log på';
	var $_PHPSHOP_LOGOUT_TITLE = 'Log af';
	var $_PHPSHOP_BROWSE_TITLE = 'Gennemse';
	var $_PHPSHOP_SEARCH_TITLE = 'Søg';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Kontooplysninger';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Navigation';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Afdeling';
	var $_PHPSHOP_INFO = 'Information';
	var $_PHPSHOP_BROWSE_LBL = 'Gennemse';
	var $_PHPSHOP_PRODUCTS_LBL = 'Varer';
	var $_PHPSHOP_PRODUCT_LBL = 'Vare';
	var $_PHPSHOP_SEARCH_LBL = 'Søg';
	var $_PHPSHOP_FLYPAGE_LBL = 'Vareoplysninger';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Søg efter vare';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Varenavn';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Varegruppe';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Beskrivelse';
	var $_PHPSHOP_CART_SHOW = 'Vis indkøbskurv';
	var $_PHPSHOP_CART_ADD_TO = 'Køb';
	var $_PHPSHOP_CART_NAME = 'Navn';
	var $_PHPSHOP_CART_SKU = 'Varenr';
	var $_PHPSHOP_CART_PRICE = 'Pris';
	var $_PHPSHOP_CART_QUANTITY = 'Antal';
	var $_PHPSHOP_CART_SUBTOTAL = 'Subtotal';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Tilføj ny';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Leveringsadresse';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Din søgning fandt ingen ting.<br />';
	var $_PHPSHOP_PRICE_LABEL = 'Pris: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Køb';
	var $_PHPSHOP_NO_CUSTOMER = 'Du er ikke registreret som kunde. Angiv venligst dine informationer.';
	var $_PHPSHOP_DELETE_MSG = 'Er du sikker på at du vil slette denne post?';
	var $_PHPSHOP_THANKYOU = 'Tak for din ordre.';
	var $_PHPSHOP_NOT_SHIPPED = 'Endnu ikke afsendt';
	var $_PHPSHOP_EMAIL_SENDTO = 'En bekræftelsesemail er blevet sendt til ';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Beklager, men der findes ingen brugere som du kan tilføje til kundelisten i virtuemart.';
	var $_PHPSHOP_ERROR = 'FEJL';
	var $_PHPSHOP_MOD_NOT_REG = 'Modul ikke registreret';
	var $_PHPSHOP_MOD_ISNO_REG = 'er ikke et godkendt Virtuemart modul';
	var $_PHPSHOP_MOD_NO_AUTH = 'Du er ikke logget på og har derfor ikke rettigheder til at tilgå modulet.';
	var $_PHPSHOP_PAGE_404_1 = 'Side findes ikke';
	var $_PHPSHOP_PAGE_404_2 = 'Angivet fil kan ikke findes.';
	var $_PHPSHOP_PAGE_403 = 'Utilstrækkelige brugerrettigheder';
	var $_PHPSHOP_FUNC_NO_EXEC = 'Du har ikke rettigheder til at afvikle ';
	var $_PHPSHOP_FUNC_NOT_REG = 'Funktion er ikke registreret';
	var $_PHPSHOP_FUNC_ISNO_REG = 'er ikke en gyldig MOS_com_phpShop funktion.';
	var $_PHPSHOP_ADMIN_MOD = 'Admin';
	var $_PHPSHOP_USER_LIST_MNU = 'Vis kunder';
	var $_PHPSHOP_USER_LIST_LBL = 'Kundeliste';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Brugernavn';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Fulde navn';
	var $_PHPSHOP_USER_LIST_GROUP = 'Gruppe';
	var $_PHPSHOP_USER_FORM_MNU = 'Ny bruger';
	var $_PHPSHOP_USER_FORM_LBL = 'Ny/ret brugerdata';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Fakturaoplysninger';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Leveringsadresse';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Tilføj adresse';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'Ingen leveringsadresse';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Adresse alias';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Fornavn';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Efternavn';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Mellemnavn';
	var $_PHPSHOP_USER_FORM_TITLE = 'Titel';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Brugernavn';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Password';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Bekræft Password';
	var $_PHPSHOP_USER_FORM_PERMS = 'Rettigheder';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Kundenummer / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Firmanavn';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_USER_FORM_CITY = 'By';
	var $_PHPSHOP_USER_FORM_STATE = 'Region';
	var $_PHPSHOP_USER_FORM_ZIP = 'Postnummer';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_USER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Mobiltelefon';
	var $_PHPSHOP_USER_FORM_FAX = 'Fax';
	var $_PHPSHOP_USER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Vis moduler';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Moduler';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Modulnavn';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Modulrettigheder';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Funktioner';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Rækkefølge';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Nyt modul';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Moduldata';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Modulnavn (til Topmenu)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Modulnavn';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Modulrettigheder';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Modulhovede';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Modulfod';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Vis modulet i Adminmenuen?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Visningsrækkefølge';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Modulbeskrivelse';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'Sprogkode';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Sprogfil';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'List Funktioner';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Funktionsliste';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Funktionsnavn';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Klassenavn';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Klassemetode';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Rettighed.';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Ny funktion';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Funktionsinfo';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Funktionsnavn';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Klassenavn';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Klassemetode';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Funktionsrettighed';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Funktionsbeskrivelse';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Vis valutaer';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Valuta';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'Ny valuta';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Valutanavn';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'Valutakode';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Vis lande';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Lande';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Nyt land';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Landenavn';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Landekode (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Landekode (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Vis stater';
	var $_PHPSHOP_STATE_LIST_LBL = 'Stater for: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Ny/Ret en stat';
	var $_PHPSHOP_STATE_LIST_NAME = 'Statens navn';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'Stat Kode (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'StatsKode (2)';
	var $_PHPSHOP_ADDRESS = 'Adresse';
	var $_PHPSHOP_CONTINUE = 'Fortsæt';
	var $_PHPSHOP_EMPTY_CART = 'Indkøbskurven er tom.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Ping InterShipper Server';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'InterShipper-Server Ping ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'InterShipper Ping Fejlede';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'InterShipper Ping Success';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Fragtfirma';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Svar<br />Tid';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'sek.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Vis fragtmåder';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Aktive fragtmåder';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Fragtmåder';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Aktiv';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Administrationsgebyr';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Leveringstid';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'fast takst';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'procent';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'dage';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Tungt gods';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Konfigurer fragtmetode';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Ny fragtmetode';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Opsætning';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Opfrisk';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Fragtmetode';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Aktiver';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Administrationsgebyr';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Leveringstid';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'fast takst';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'procent';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'dage';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Tungt gods';
	var $_PHPSHOP_ORDER_MOD = 'Ordrer';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Bekræft ordre';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Annuller ordre';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Udskriv ordre';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Slet ordre';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Vis ordrer';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Ordrer';
	var $_PHPSHOP_ORDER_LIST_ID = 'Ordrenummer';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Ordredato';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Sidst rettet';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Status';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'SubTotal';
	var $_PHPSHOP_ORDER_ITEM = 'Ordrens varer';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Indkøbsordre';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Ordrenummer';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Ordredato';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Ordrestatus';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Kundeoplysninger';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Fakturaoplysninger';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Leveringsoplysninger';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Regning til';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Levering til';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Navn';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Firma';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'By';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Region';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'Postnummer';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Land';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Telefon';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Fax';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'Email';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Ordre varer';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Antal';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Antal';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'Varenr';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Pris';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Total';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'SubTotal';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'Heraf Moms';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Fragt incl. administrationsgebyr';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Fragt moms';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Betalingsform';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Kontonavn';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Kontonummer';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Udløbsdato';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Betalingslog';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Fragtoplysninger';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Betalingsinformation';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Fragtfirma';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Forsendelsesmåde';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Forsendelsesdato';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Fragtpris';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Vis ordrestatustyper';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Ny ordrestatustype';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Ordrestatuskode';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Ordrestatusnavn';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Ordrestatus';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Ordrestatuskode';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Ordrestatusnavn';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Rækkefølge';
	var $_PHPSHOP_PRODUCT_MOD = 'Varer';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Aktuel vare';
	var $_PHPSHOP_CURRENT_ITEM = 'Nuværende emne';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Varebeholdning';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Vis beholdning';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Pris';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Nummer';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Vægt';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Vis varer';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Varer';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Varenavn';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'Varenr';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Aktiv';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Søg vare';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'rettet';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'med prisændringer';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'uden pris';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'Nu';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Før';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Ny vare';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Ret vare';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Vis aktuel varebeskrivelse i netbutikken';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Tilføj vare';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Ny vare';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Ny Vare';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Ret vare';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Varedata';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Varestatus';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Varedimensioner';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Varebilleder';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Ny vare';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Ret vare';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Vareoplysninger';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Varestatus';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Varedimensioner og vægt';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Varebilleder';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Returner til forrige vare';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'For at ændre billedet til et andet, angiv da stien til det nye billede.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Slet billede.';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Vareegenskaber';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Varianter';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Er du sikker på at du vil slette dette produkt\\og relaterende varer??';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Er du sikker på at du vil slette varen?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Leverandør';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Producent';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'Varenr';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Navn';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Varegruppe';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Varens bruttopris';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Varens nettopris';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Varebeskrivelse';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Kort beskrivelse';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'På lager';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'I ordre';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'På lager den';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'På Udsalg';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Rabattype';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Aktiv?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Længde';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Bredde';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Højde';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Enhed';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Vægt';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Enhed';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Miniaturebillede';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Billede';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'Kg';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'cm';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Enhed';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'stk';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Enheder pr pakke';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Her kan angives stk pr pakke. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Enheder i pakning';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Her kan angives stk pr pakning (max. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Resultat af oprettelse';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Resultat af opdatering';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Resultat af postoprettelse';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Resultat af postopdatering';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Import CSV fil';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Varemapper';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Vis varegrupper';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Varegrupper';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Ny varegruppe';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Varegruppeoplysninger';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Varegruppenavn';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Forældre';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Varegruppebeskrivelse';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Aktiv?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Varegruppeoversigt';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Vis varianter';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Variantliste for';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Variantnavn';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Rækkefølge';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Ny variant';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Variantformat';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Ny varevariant';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Ret varevariant';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Ny variant';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Ret variant';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Variantnavn';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Rækkefølge';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Vis priser';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Priser';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Pris for';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Gruppenavn';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Pris';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Valuta';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Ny pris';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Prisoplysninger';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Ny varepris';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Ret varepris';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Ny varens pris';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Ret varens pris';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Pris';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Kundegruppe';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Rapporter';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Vareliste';
	var $_PHPSHOP_RB_SALE_TITLE = 'Omsætning';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Salgsaktiviteter';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Vælg periode';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Månedsvis';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Ugevis';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Dagligt';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Denne måned';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'Forrige måned';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'Forrige 60 dage';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'Forrige 90 dage';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Start den';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Slut den';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Vis periode';
	var $_PHPSHOP_RB_REPORT_FOR = 'Rapport for ';
	var $_PHPSHOP_RB_DATE = 'Dato';
	var $_PHPSHOP_RB_ORDERS = 'Ordre';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Total solgte varer';
	var $_PHPSHOP_RB_REVENUE = 'Omsætning';
	var $_PHPSHOP_RB_PRODLIST = 'Vareliste';
	var $_PHPSHOP_SHOP_MOD = 'Butik';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Billede';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Pris';
	var $_PHPSHOP_ORDER_STATUS_P = 'Afventer';
	var $_PHPSHOP_ORDER_STATUS_C = 'Bekræftet';
	var $_PHPSHOP_ORDER_STATUS_X = 'Annulleret';
	var $_PHPSHOP_ORDER_BUTTON = 'Ordre';
	var $_PHPSHOP_SHOPPER_MOD = 'Kunde';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Vis kunder';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Kunder';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Brugernavn';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Fulde navn';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Gruppe';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Ny kunde';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Kundeoplysninger';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Fakturaoplysninger';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Information';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Leveringsoplysninger';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Ny Adresse';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Adresse alias';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Brugernavn';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Fornavn';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Efternavn';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Mellemnavn';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Titel';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Kundenavn';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Password';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Bekræft password';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Kundegruppe';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Firmanavn';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'By';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Region';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'Postnummer';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Mobiltelefon';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Fax';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Ja';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'Nej';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'List kundegrupper';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Kundegruppeliste';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Gruppenavn';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Gruppebeskrivelse';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Kundegruppeformular';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Tilføj kundegruppe';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Gruppenavn';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Gruppebeskrivelse';
	var $_PHPSHOP_STORE_MOD = 'Butik';
	var $_PHPSHOP_STORE_FORM_MNU = 'Butiksopsætning';
	var $_PHPSHOP_STORE_FORM_LBL = 'Butiksinformation';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Kontaktoplysninger';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Billede';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Upload billede';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Butiksnavn';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Virksomheds navn';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'By';
	var $_PHPSHOP_STORE_FORM_STATE = 'Region';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_STORE_FORM_ZIP = 'Postnummer';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Butikskategori';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Efternavn';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Fornavn';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Mellem navn';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Titel';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Telefon 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Telefon 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Fax';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'Email';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Billedsti';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Beskrivelse';
	var $_PHPSHOP_PAYMENT = 'Betaling';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Betalingsmåder';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Betalingsmåder';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Navn';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Kode';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Rabat';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Kundegruppe';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Betalingsmådetype';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Ny betalingsmåde';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Betalingsmådeopsætning';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Betalingsmådenavn';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Kundegruppe';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Rabat';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Kode';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Rækkefølge';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Betalingsmåde type';
	var $_PHPSHOP_TAX_MOD = 'Moms';
	var $_PHPSHOP_TAX_RATE = 'Momssatser';
	var $_PHPSHOP_TAX_LIST_MNU = 'List momssatser';
	var $_PHPSHOP_TAX_LIST_LBL = 'Momssatsliste';
	var $_PHPSHOP_TAX_LIST_STATE = 'Moms stat eller region';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Moms land';
	var $_PHPSHOP_TAX_LIST_RATE = 'Momssats';
	var $_PHPSHOP_TAX_FORM_MNU = 'Tilføj momssats';
	var $_PHPSHOP_TAX_FORM_LBL = 'Tilføj momsinformation';
	var $_PHPSHOP_TAX_FORM_STATE = 'Moms stat/region';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Moms land';
	var $_PHPSHOP_TAX_FORM_RATE = 'Momssats (for 25% => udfyld 0.25)';
	var $_PHPSHOP_VENDOR_MOD = 'Leverandør';
	var $_PHPSHOP_VENDOR_ADMIN = 'Leverandører';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Vis leverandører';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Leverandørliste';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Leverandørnavn';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Admin';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Ny leverandør';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Ny Information';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Leverandøroplysninger';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Kontaktoplysninger';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Billede';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Upload Billede';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Leverandørs butiksnavn';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Leverandørs firmanavn';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'By';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Region';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'Postnummer';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Leverandørvaregruppe';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Efternavn';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Fornavn';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Mellemnavn';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Title';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Telefon 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Telefon 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Fax';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'Email';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Billedsti';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Beskrivelse';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Vis leverandørgrupper';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Leverandørgrupper';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Gruppenavn';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Gruppebeskrivelse';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Leverandører';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Ny leverandørgruppe';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Leverandørgruppe format';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Gruppeoplysninger';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Gruppenavn';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Gruppebeskrivelse';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Producent';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Producenter';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Vis producenter';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Producenter';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Producentnavn';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Admin';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'Ny Producent';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Ny Information';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Producentoplysninger';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Producentnavn';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Producentgruppe';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'URL til Producentens hjemmeside';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Beskrivelse';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Vis producentgrupper';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Producentgrupper';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Gruppenavn';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Gruppebeskrivelse';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Producenter';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Ny producentgruppe';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Producentgruppe format';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Gruppeoplysninger';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Gruppenavn';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Gruppebeskrivelse';
	var $_PHPSHOP_HELP_MOD = 'Hjælp';
	var $_PHPSHOP_CART_ACTION = 'Opdater';
	var $_PHPSHOP_CART_UPDATE = 'Ret antal i indkøbskurv';
	var $_PHPSHOP_CART_DELETE = 'Fjern vare fra indkøbskurv';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Pris';
	var $_PHPSHOP_PRODUCT_CALL = 'Kontakt os for prisen';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Forrige';
	var $_PHPSHOP_PRODUCT_NEXT = 'NÆSTE';
	var $_PHPSHOP_CART_TAX = 'Moms';
	var $_PHPSHOP_CART_SHIPPING = 'Fragt- og administrationsgebyr';
	var $_PHPSHOP_CART_TOTAL = 'Total';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Næste';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'REGISTRER';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Fakturaoplysninger';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Firma';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Navn';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Adresse';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'Email';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Leveringsoplysninger';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Firma';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Navn';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Adresse';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Betalingsoplysninger';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Navn på kortet';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Betalingsform';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Kortnummer';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Udløbsdato';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Afgiv ordre';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'Krævet information ved betaling med kort';
	var $_PHPSHOP_ZONE_MOD = 'Zone forsendelse';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Vis Zoner';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Ny Zone';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Tilmeld Zoner';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Land';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Nuværende Zone';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Tilmeld til Zone';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Opdater';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Tilmeld Zoner';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'ZoneNavn';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'ZoneBeskrivelse';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Zonepris pr vare';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Zoneprisgrænse';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Zoneoplysninger';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Zonenavn';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Zonebeskrivelse';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Zoneomkostning pr vare';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Zoneprisgrænse';
	var $_PHPSHOP_LOGIN_FIRST = 'Du bedes være registreret og logget ind først.<br>Tak.';
	var $_PHPSHOP_STORE_FORM_TOS = 'Handelsbetingelser';
	var $_PHPSHOP_AGREE_TO_TOS = 'Du bedes venligst bekræfte at du accepterer vores handelsbetingelser.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Jeg accepterer handelsbetingelserne';
	var $_PHPSHOP_LEAVE_BLANK = '(Undlad hvis du ikke <br />anvender en individuel php-fil!)';
	var $_PHPSHOP_RETURN_LOGIN = 'Har du handlet her før: Log venligst ind';
	var $_PHPSHOP_NEW_CUSTOMER = 'Ny kunde? Angiv venligst fakturaoplysninger';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Kundekonto:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Ordreoplysninger';
	var $_PHPSHOP_ACC_UPD_BILL = 'Her kan du rette dine fakturaoplysninger.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Her kan du oprette eller vedligeholde leveringsoplysninger.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Kontooplysninger';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Fragtoplysninger';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Ingen ordre at vise';
	var $_PHPSHOP_ACC_BILL_DEF = '- Samme som faktura';
	var $_PHPSHOP_SHIPTO_TEXT = 'Du kan tilføje flere leveringsadresser til din konto.';
	var $_PHPSHOP_CONFIG = 'Opsætning';
	var $_PHPSHOP_USERS = 'Kunder';
	var $_PHPSHOP_IS_CC_PAYMENT = 'er kortbetaling?';
	var $_PHPSHOP_SHIPPING_MOD = 'Fragt';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Fragt';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Fragtfirma';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Fragtfirmaer';
	var $_PHPSHOP_RATE_LIST_MNU = 'Fragtpriser';
	var $_PHPSHOP_RATE_LIST_LBL = 'Fragtpriser';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Navn';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Rækkefølge';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Nyt fragtfirma';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Ret / Opret fragtfirma';
	var $_PHPSHOP_RATE_FORM_MNU = 'Ny fragtpris';
	var $_PHPSHOP_RATE_FORM_LBL = 'Ret / Opret fragtpris';
	var $_PHPSHOP_RATE_FORM_NAME = 'Fragtprisbeskrivelse';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Fragtfirma';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'Fra postnummer';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Til postnummer';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Min vægt';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Maks vægt';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Salgspris';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Kostpris';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'Moms Id';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Rækkefølge';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Fragtfirma';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Fragtprisbeskrivelse';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Vægt fra ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... til';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Fragtfirma';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Rækkefølge';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'FEJL: Fragt ID findes allerede.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'FEJL: Vælg et fragtfirma.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'FEJL: Der eksisterer fragtpriser. Slet fragtpriser først';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'FEJL: Kan ikke finde et fragtfirma med dette ID.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'FEJL: Vælg et fragtfirma.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'FEJL: Kan ikke finde et fragtfirma med dette ID.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'FEJL: Der mangler beskrivelse af fragtpris.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'FEJL: Ugyldigt land. Flere lande kan separeres med ";".';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'Fejl: Angiv mindste vægt';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'Fejl: Angiv maksimum vægt';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'Fejl: Mindste vægt skal være mindre end maks vægt';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'FEJL: Forsendelesesgebyr er påkrævet';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'FEJL: Vælg en valuta';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'FEJL: Fragtpris er påkrævet';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Vælg venligst';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Fragtfirma';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Fragtpris';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Pris';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-ingen-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Kreditkort';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Brug betalingssystem';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Bankoverførsel';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Kun addresse / Betaling ved levering';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Vælg venligst en leveringsadresse!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Vælg venligst en leveringsmåde!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Vælg venligst en betalingsform!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Kontroller venligst din bestilling og bekræft den!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Vælg venligst en leveringsmåde.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Vælg venligst en anden leveringsmåde.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Vælg venligst en betalingsmåde.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Angiv venligst kortnummer.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Angiv navnet på kortet.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'Indtastet kreditkortnummer er forkert.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Angiv venligst udløbsmåned.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Angiv venligst udløbsår.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'Udløbsdatoen er forkert.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Vælg venligst en leveringsadresse.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Ugyldigt kontonummer.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'Din indkøbskurv er tom!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'FEJL: Vælg venligst et fragtfirma!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'FEJL: Den valgte fragtpris blev ikke fundet i systemet!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'Fejl: Din leveringsadresse kunne ikke findes!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'FEJL: Der findes ikke noget kreditkortdata...';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'FEJL: Kreditkortnummer findes ikke!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Beklager, men det brugte kortnummer er et test nummer!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'Bruger id findes ikke i databasen!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Du mangler at angive navn på bankkontoindehaver.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Du mangler at angive IBAN.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Du mangler at angive kontonummer for bankkonto.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Du mangler at angive registreringsnummer for bankkonto.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Du mangler at angive navnet på din bank.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Ordreafgivelse er ikke komplet!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Betalingsinformation er gemt til senere brug.<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Vores grænse for mindste køb er endnu ikke nået..';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'Vi har en mindstekøbs grænse på:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Kreditkort betaling';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'andre betalingsmåder';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Vælg venligst en betalingsmåde:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Mindste købs grænse';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Bankoplysninger';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Konto nummer';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'Registrerings nummer';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Bank navn';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Kontoindehaver';
	var $_PHPSHOP_MODULES = 'Moduler';
	var $_PHPSHOP_FUNCTIONS = 'Funktioner';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Udsalgsvarer';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Eventuelle kommentarer i forbindelse med ordreafgivelse';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Kundekommentar';
	var $_PHPSHOP_INCLUDING_TAX = '(inkl. $tax % moms)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Vælg venligst en variant';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Variant';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Downloadområde';
	var $_PHPSHOP_DOWNLOADS_START = 'Start Download';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Angiv venligst Download-ID som du har modtaget per e-mail og click \'Start Download\'.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Beklager, men din downloadmulighed er forældet';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Beklager, men din grænse for antal downloads er nået.';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Ugyldig Download-ID!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Kunne ikke sende en besked til ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Besked sendt til ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Download-Info';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'Bestilte file(er) er klar til download';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Angiv venligst følgende Download-ID(er) på vores download side: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'Maksimum antal downloads per fil er: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Kan downloades indtil {expire} dage efter den første download er fuldført';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Spørgsmål eller problemer?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Download-Info for ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'downloadbar vare?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Tak for din betaling.
        Din betaling er gennemført. Du vil modtage en bekræftelses e-mail for betalingen fra PayPal.
        Du kan nu fortsætte eller logge på <a href=http://www.paypal.com>www.paypal.com</a> for at se betalings detaljer.';
	var $_PHPSHOP_PAYPAL_ERROR = 'Der skete en fejl i forsøget på at gennemføre betalingen. Ordren er endnu ikke betalt.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Tak fordi du valgte at handle hos os. Information om ordren følger.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Tak for din støtte.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Spørgsmål eller problemer?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'Nedenstående ordre er modtaget';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Se ordren på dette link.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Der kan ikke angives negativt antal.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Angiv venligst et korrekt antal for denne vare.';
	var $_PHPSHOP_CART_STOCK_1 = 'Det valgte antal overstiger beholdningen på vores lager. ';
	var $_PHPSHOP_CART_STOCK_2 = 'Vi har $product_in_stock på lager. ';
	var $_PHPSHOP_CART_STOCK_3 = 'Klik her for at blive sat på venteliste';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Vælg venligst en variant.';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'ingen';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Hr.';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Fru.';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Dr.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof.';
	var $_PHPSHOP_DEFAULT = 'Standard';
	var $_PHPSHOP_AFFILIATE_MOD = 'Selskabsadministration';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Vis selskaber';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Selskaber';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Selskabsnavn';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Aktiv';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Rate';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Månedstotal';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Månedsprovision';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Vis ordre';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'Email selskaber';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'Email selskaber';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'Email til (* = ALL)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Din email';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Emne';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Inkluder aktiv statistik';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Provisionssats (procent)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Aktiv?';
	var $_PHPSHOP_DELIVERY_TIME = 'Forventet leveringstid';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Leveringsoplysninger';
	var $_PHPSHOP_MORE_CATEGORIES = 'flere varegrupper';
	var $_PHPSHOP_AVAILABILITY = 'Lagerstatus';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Varen er udsolgt.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Varen er på lager den: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Oversigt';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Statistik';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Kunder';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'Aktive varer';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'Inaktive varer';
	var $_PHPSHOP_STATISTIC_SUM = 'Sum';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Nye ordrer';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Nye kunder';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Angiv din e-mail adresse nedenfor, for at modtage en e-mail når vi igen har varen på lager.
                                        Vi vil ikke vidergive din e-mail til tredie part. E-mail adressen bruger vi kun så vi kan
                                        informere dig når varen igen er på lager.';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Vi takker for din tålmodighed. <br />Du vil blive kontaktet så snart varen er på lager.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Kontakt mig!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Vis udskrift';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Vælg venligst enten Authorize.net eller CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' Konfigurationsfil status:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'er overskrivbar';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'er skrivebeskyttet';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Generelt';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Sti & URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Hjemmeside';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Fragt';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Kasse';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Download';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Betalinger';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Brug kun som katalog';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Hvis denne markeres, slåes e-handel funktionaliteten fra..';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Vis priser';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Vis priser incl. moms?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Angives hvis kunderne skal se priserne med moms.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Angives hvis priser skal vises. Hvis du kun bruger virtuemart som et katalog og ikke ønsker at priserne skal vises, skal du markere denne.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Virtuel Moms';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Dette afgør om varer uden vægtangivelse pålægges moms. Ret ps_checkout.php->calc_order_taxable() hvis du ønsker at modificere reglen.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Momssystem:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Styret af leveringsadresse';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Styret af afsenderadresse';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Dette styrer hvilken moms sats, der skal anvendes./>
                                                <ul><li>den momssats der anvendes hvor butikken er lokaliseret/li><br/>
                                                <li>eller den momssats der anvendes hvor kunden bor.</li></ul>
												<li>or "EU mode", hvor en pr-produkt momssats bruges hvis den handlende er i den Europæiske Union, ellers bliver momssatsen baseret på den handlendes adresse.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Aktiver differentieret moms?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Angives hvis du har forskellig moms på dine varer (feks aviser og frimærker der er momsfritaget eller lignende)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Fratræk kontant rabat, før moms/fragt beregning';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Kundeanmeldelser';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Hvis angivet, kan kunder angive en <strong>vurdering</strong> og skrive en <strong>kommentar</strong> om varen. <br />
                                                                                Kunderne kan hermed anmelde varen til nytte for andre kunder.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Hvis angivet fratrækkes kontant rabat før moms og fragt.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Kunde bankoplysninger?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Hvis angivet, kan kunderne angive deres bankkonto ved bruger registrering..';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Kunde stat/område/region?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Hvis angivet får kunden mulighed for at angive stat/område/region når de registrere sig. Ikke relevant i Danmark.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Accepter handelsvilkår ved oprettelse?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Hvis angivet skal en kunde kunne acceptere dine handelsvilkår før kunden kan registreres i systemet.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Kontroller beholdning?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Vælges hvis varebeholdning skal tjekkes når en kunde lægger en vare i indkøbsvognen.<br/>Købet kan kun gennemføres hvis varen er på lager.
                                                                                          Hvis valgt, vil det ikke tillade brugeren at tilføje flere varer til kurven end der er tilgængelige på lageret.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Partnerprogram?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Dette aktiver partner tracking i netbutikken. Aktiver denne hvis du har oprettet partnere.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Ordre-mail format:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Tekst mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Hvilket format skal ordrebekræftelsen sendes i.:<br />
                                                                                        <ul><li>som ren tekst email</li>
                                                                                        <li>eller som html email med mulighed for billeder.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Tillad administration via netbutikken?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'Hvis aktiveret kan virtuemart administreres fra websitet, 
                                                                                              og ikke fra Administrator panelet.(Backend).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'URL til butikken. Normalt lig med URL til selve hjemmesiden (efterfulgt af en skråstreg!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'SIMMER URL';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'Netbutikkens https URL. (URL skal slutte med en skråstreg!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'COMPONENTURL';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'URL til Virtuemart komponenten. (skal slutte med en skråstreg!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'IMAGEURL';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'URL til VirtueMart komponentens billedmappe.(skal slutte med en skråstreg!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'ADMINPATH';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'Stien til virtuemart komponenten.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'CLASSPATH';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'Stien til virtuemarts klasse mappe.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'PAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'Stien til virtuemarts html mappe.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'IMAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'Stien til virtuemarts shop_image mappe.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'HOMEPAGE';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Denne side hentes som standard.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'ERRORPAGE';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Denne sides anvendes ved visning af fejl.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'DEBUGPAGE';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Dette er standard siden til visning af debug information.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'DEBUG ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'Viser debug oplysninger i bunden af hver side, som indhold af kurv mm.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'FLYPAGE';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Dette er standard siden for visning af varedetaljer.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Varegruppe skabelon';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Standard varegruppeskabelon, for visning af varer til en varegruppe.<br />
                                                                                                      Du kan oprette nye skabeloner ved at tilpasse de eksisterende skabelon filer <br />
                                                                                                      (findes under <strong>\'Komponentsti\'/html/templates/</strong> og starter med \'browse_\')';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Antal varer pr linie.';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Hvor mange varer skal vises pr linie.
                                                                                                      Eksempel: Hvis du vælger 4, vil varegruppen vise 4 varer pr række.';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = 'Billede hvis "Billede mangler" ';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Dette billede vises hvis varen ikke har et billede tilknyttet.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'SEARCH ROWS';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Angiver antal rækker per side når søge resultater vises.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'SEARCH COLOR 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Når noget vises på listeform, kan hver anden linie få sin egen baggrundsfarve, dette gør listen mere overskuelig<br/>Angiv den første ønskede farve.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'SEARCH COLOR 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Angiv den anden ønskede baggrundsfarve for listeform.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'MAXIMUM ROWS';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Angiver antal rækker der vises i ordrelisten.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Vis fodnote ';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Viser et \'powered-by-VirtueMart\' billede i bunden af netbutikken.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Vælg butikkens forsendelses metode';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Standard fragtmodul med egen opsatte fragtfirmaer og fragt priser. <strong>ANBEFALES !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '  	Zone Shipping Modul Country Version 1.0<br />
                                                                                                            For mere information om dette modul, se <a href="http://ZephWare.com">http://ZephWare.com</a><br />
                                                                                                            for yderligere oplysninger kontakt <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br />';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<a href="http://www.ups.com" target="_blank">UPS Online®</a> Forsendelses beregning';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'UPS adgangskode';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Din UPS adgangskode';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'UPS bruger id.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'Bruger ID du har fået fra UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'UPS kodeord';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'Kodeord til din UPS konto';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'InterShipper Modul. Marker kun denne hvis du har en <a href="http://www.intershipper.com" target="_blank">Intershipper.com</a> konto';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Deaktiver forsendelses måde valg for kunden.Vælg dette hvis du kun sælger download bare varer (som software mm) der ikke kræver fysisk levering.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'InterShipper adgangskode';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Din adgangskode til din intershipper konto.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'InterShipper email';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'Din email adresse til din intershipper konto.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'Krypteringsnøgle';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Anvendes til at kryptere data i systemet. Det er derfor meget vigtigt at virtuemarts konfigurationsfil beskyttes.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Ordre afgivelses process bjælke';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Hvis angivet vil en bjælke blive vist under ordre agivelsen. Denne viser de punkter der skal fuldføres før ordren er afgivet. ( 1 - 2 - 3 - 4 med grafik).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Vælg ordre afgivelses rutine';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Standard :</strong><br/>
               1. Leveringsadresse forespørgsel<br />
               2. Leveringsmåde forespørgsel<br />
               3. Betalingsform forespørgsel<br />
               4. Afgiv Ordre';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Rutine 2:</strong><br/>
               1. Leveringsadresse forespørgsel<br />
               2. Betalingsform forespørgsel<br />
               3. Afgiv Ordre';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Rutine 3:</strong><br/>
               1. Leveringsmåde forespørgsel<br />
               2. Betalingsform forespørgsel<br />
               3. Afgiv Ordre';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Rutine 4:</strong><br/>
               1. Betalingsform forespørgsel<br />
               2. Afgiv ordre';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Aktivér Download';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Hvis angivet aktiveres download systemet til download af varen (Bruges hvis du sælger software som ikke behøver at blive leveret fysisk mm).';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Ordre status der aktiverer download';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Angiv hvilken ordre status der kræves før kunden modtager en email med download oplysninger.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Ordre status der deaktivere download';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Angiv hvilken ordre status der deaktivere kundens mulighed for download.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'DOWNLOAD ROD';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'Den fysisk placering af varer der kan downloades. (Skal slutte med skråstreg!)<br>
        <span class="message">For en sikkerheds skyld: Hvis det er muligt, så vælg en placering uden for websitet, for at undgå at filerne kan hentes direkte uden et gennemført køb.</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Maks. Antal download';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Angiv hvor mange gange der kan downloades på samme Download-Id (for den samme ordre)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Download Udløber';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Angiv hvor lang tid <strong>i sekunder</strong> en købt fil kan downloades.
  Perioden starter når første vare downloades! Når tidsgrænsen er overskredet, deaktiveres download-IDen.<br />Bemærk : 86400s=24h.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Aktiver IPN betaling via PayPal?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Markeres hvis kunderne skal kunne betale via Paypal.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'PayPal betalingsemail:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Emailadresse der anvendes hos Paypal til at modtage betaling.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Ordrestatus ved gennemført betaling';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Vælg hvilken status orden skal have ved gennemført betaling hos PayPal. Anvendes systemet til salg af download bare varer (f.eks software) :
  vælg samme status der også aktivere download. (dermed bliver kunden informeret om køb via email).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Ordrestatus ved fejlende betaling';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Vælg hvilken ordrestatus ordren skal have hvis betalingen fejlede hos PayPal.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Aktiver betaling via PayMate?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Markeres hvis kunderne skal kunne betale via Australske PayMate.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'PayMate brugernavn:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Dit brugernavn hos PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Aktiver Authorize.net betaling?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Marker hvis kunderne skal kunne betale via Authorize.net.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Testtilstand ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Vælg \'Ja\' under test. Vælg \'Nej\' når det skal fungere rigtigt.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Ja';
	var $_PHPSHOP_ADMIN_CFG_NO = 'Nej';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Authorize.net Login ID';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'Her angives Authorize.net login';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Authorize.net Transaktions nøgle';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'Her angives Authorize.net Transaktions nøglen';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Godkendelses Type';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'Her angives Authorize.Net godkendelses type.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Aktiver CyberCash?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Markeres hvis kunderne skal kunne betale via CyberCash.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash MERCHANT';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_MERCHANT er CyberCash Merchant ID';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash Merchant nøgle';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash Merchant nøgle er den merchant nøgle givet af CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash PAYMENT URL';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'CyberCash PAYMENT URL er den URL der er givet af CyberCash for sikker betaling';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash AUTH TYPE';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'CyberCash godkendelelses type er angivet af CyberCash';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Advanceret søgning';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Søg alle varegrupper';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Søg alle varer';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Søg kun på varenavn';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'kun på Producent/Leverandør';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Kun på varebeskrivelse';
	var $_PHPSHOP_SEARCH_AND = 'og';
	var $_PHPSHOP_SEARCH_NOT = 'ikke';
	var $_PHPSHOP_SEARCH_TEXT1 = 'I det første felt angives et varegruppekriterie der skal indgå i søgningen.
        Det andet felt bruges til at angive en vareoplysnings kriterie (f.eks. Navn).
        Efter angivelse af søgekriterier, angiv da ordet der skal søges på. ';
	var $_PHPSHOP_SEARCH_TEXT2 = ' Du kan forfine din søgning ved at søge på flere ord adskildt af en AND eller NOT operator.
        Brug af AND medfører at begge søgeord skal eksistere for at varen tages med i søgningen.
        Brug af NOT medfører at varen kun kun bliver vist hvis det første nøgleord er tilstede
        og det andet ikke er.';
	var $_PHPSHOP_ORDERBY = 'Sorter efter';
	var $_PHPSHOP_CUSTOMER_RATING = 'Kundernes vurdering';
	var $_PHPSHOP_TOTAL_VOTES = 'Antal vurderinger';
	var $_PHPSHOP_CAST_VOTE = 'Venligst vurder varen';
	var $_PHPSHOP_RATE_BUTTON = 'Vurder';
	var $_PHPSHOP_RATE_NOM = 'Karakter';
	var $_PHPSHOP_REVIEWS = 'Kundeanmeldelse';
	var $_PHPSHOP_NO_REVIEWS = 'Denne varer er ikke blevet anmeldt af en kunde.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Du kan være den første der anmelder varen...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Du skal være logget på for at kunne anmelde varer.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Angiv venligst en karakter for at færdiggøre din anmeldelse!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Venligst skriv mere i din anmeldelse, der skal minimum skrives 100 tegn';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Venligst forkort din anmeldelse der kan maksimum skrives 2000 tegn.';
	var $_PHPSHOP_WRITE_REVIEW = 'Skriv en anmeldelse af varen!';
	var $_PHPSHOP_REVIEW_RATE = 'Først: Varen skal gives en karakter. Angiv mellem 0 (dårligst) og 5 stjerne (bedst).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Skriv venligst en (kort) anmeldelse ...(mellem 100 - 2000 tegn) ';
	var $_PHPSHOP_REVIEW_COUNT = 'Antal tegn skrevet: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Anmeld';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Du har allerede anmeldt denne vare.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Tak for din anmeldelse.';
	var $_PHPSHOP_COMMENT = 'Kommentar';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Ny/Ret Kreditkorttype';
	var $_PHPSHOP_CREDITCARD_NAME = 'Kreditkortnavn';
	var $_PHPSHOP_CREDITCARD_CODE = 'Kreditkort - Type nummer';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Kreditkorttype';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Kreditkort';
	var $_PHPSHOP_UDATE_ADDRESS = 'Ret adresse';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Tilbage til butik';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Din ordre er modtaget af butikken!';
	var $_PHPSHOP_ORDER_LINK = 'Klik her for at se ordreoplysninger.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'Status er ændret på din ordre nr {order_id}.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'Ny status er:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'For at se ordreoplysninger, klik venligst dette link (eller kopier det til browserens adresse linie):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Ny ordrestatus: Din ordre {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Besked til kunden?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Ordrestatus skal ændres først!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Rabat for standard kundegruppe (i %)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Et positivt tal betyder: Hvis varen ikke har en pris for denne kundegruppe, vil der gives rabat på normalprisen med det angivet procent. Et negativt beløb bliver til et tillæg';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Varerabat';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Varerabatter';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Ny/ret varerabat';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Rabat';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Angiv rabat';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Rabattype';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Procent';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Beløb';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Er rabatten en procent eller et fast beløb?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Startdato';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Angiver hvornår rabatten starter';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Slutdato';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Angiver hvornår rabatten ophører';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Du kan bruge Produktrabatformularen til at tilføje rabatter !';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Du sparer';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Vis stort billede';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Formatering af priser';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Valutasymbol';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Du kan også bruge HTML speciel tegn her (f.eks. €,£,¥,...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Decimaler';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Antal decimaler<br><b>Der udføres afrunding til angivet antal decimaler</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Decimal separator';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Tegn der bruges som decimal separator';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Tusindtals separator';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Tegn der bruges som tusindtals separator (kan udelades)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Positivt format';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Format der bruges ved positive tal.<br>(Symb betyder valuta symbol)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Negativt format';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Format der bruges ved negative tal.<br>(Symb betyder valuta symbol)';
	var $_PHPSHOP_OTHER_LISTS = 'Vis andre varer';
	var $_PHPSHOP_MORE_IMAGES = 'Vis flere billeder';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Tilgængelige billeder for';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Tilbage til varebeskrivelse';
	var $_PHPSHOP_FILEMANAGER = 'Fil Manager';
	var $_PHPSHOP_FILEMANAGER_LIST = 'Fil Manager::Varer';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Ny billedfil';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Tilknyttede billeder';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'Kan downloades?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Tilknyttede filer (beskrivelser,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Aktiv?';
	var $_PHPSHOP_FILES_LIST = 'Fil Manager::Billedfiler for';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Filnavn';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'Filtitel';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Filtype';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Rediger fil';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Billede';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Miniaturebillede';
	var $_PHPSHOP_FILES_FORM = 'Upload en fil for';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Aktuel Fil';
	var $_PHPSHOP_FILES_FORM_FILE = 'Fil';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Billede';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Upload til';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'standard sti for varebilleder';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Angiv filens placering';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Downloadsti (for varer der kan downloades!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Opret automatisk et miniaturebillede?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Filen er udgivet?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Salgsfilnavn (hvad kunden ser)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Filbeskrivelse';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'Fil URL (valgfri)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Angiv venligst en gyldig sti!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'Miniaturebillede er oprettet!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'Kunne ikke oprette miniaturebillede!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Fil/Billede Upload Fejl';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Kunne ikke slette billedfilen';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Stort billede er slettet.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Kunne ikke slette miniaturebilledet (kunne måske ikke findes): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Miniaturebillede er slettet.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Kunne ikke slette filen.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Filen er slettet.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Den angivne fil kan ikke findes!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Billede ikke fundet!';
	var $_PHPSHOP_COUPON_MOD = 'Rabatkupon';
	var $_PHPSHOP_COUPONS = 'Rabatkuponer';
	var $_PHPSHOP_COUPON_LIST = 'Rabatkuponer';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Kuponen er allerede indløst.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Kuponen er indløst! Mange tak.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Er du i besidelse af en rabatkupon, angiv den venligst nedenfor:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Udfør';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Rabatkuponen eksisterer. Prøv venligst igen.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Ret rabatkupon';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Klik på en rabatkupon for at ændre den. For at slette en rabatkupon, marker den og klik på slet:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Kode';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Procent eller fast værdi';
	var $_PHPSHOP_COUPON_TYPE = 'Rabatkupon type';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Engangs rabatkuponer slettes efter de er indløst. En permanent rabatkupon forbliver aktiv.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Engangs kupon';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Permanent kupon';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Værdi';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Slet kode';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Er du sikker på at du vil slette rabatkuponen?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Udfyld venligst alle felter.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'Kuponværdi skal være et tal.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Ny kupon';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Kuponkode';
	var $_PHPSHOP_COUPON_PERCENT = 'Procent';
	var $_PHPSHOP_COUPON_TOTAL = 'Fast';
	var $_PHPSHOP_COUPON_VALUE = 'Værdi';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Rabatkupon er gemt.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Gem kupon';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Rabatkupon';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Rabatkuponkode kunne ikke findes, prøv venligst igen.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Rabatkuponer';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Hvis angivet kan en kunde opnå en rabat ved at angive et rabatkupon nummer.';
	var $_PHPSHOP_FREE_SHIPPING = 'Gratis levering';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Der er gratis levering for denne ordre!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Købsgrænse for gratis levering';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Købsbeløb (MED MOMS!) der skal købes for, før det udløser gratis levering
                                                (f.eks: <strong>50</strong> betyder at der gives gratis levering når kunden har handlet for
                                                en halvtredser eller mere (med moms).';
	var $_PHPSHOP_YOUR_STORE = 'Netbutik';
	var $_PHPSHOP_CONTROL_PANEL = 'Kontrolpanel';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF - Ikon';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Hvis angivet vises et PDF-icon ved varebeskrivelsn';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Accepter handelsvilkår ved hver handel?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Hvis angivet, skal kunden acceptere handelsvilkårene før en ordre kan afgives.';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Bankkontotype';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Kontrol';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Firma kontrol';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Rabat';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Kræver faktura?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Angiver om kunden skal faktureres (konto køb).';
	var $_PHPSHOP_INTERNAL_ERROR = 'Intern Fejl ved forsøg på ';
	var $_PHPSHOP_PAYMENT_ERROR = 'Fejl ved betalingshåndtering';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Betaling gennemført';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS kunne ikke give et svar på fragt pris forespørgslen.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Antal leverings dage';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'UPS Afleverings måde';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Hvordan får UPS pakkerne?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'UPS Pakke håndtering?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Angiv standard pakke håndterings måde.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Residential levering?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Residential (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Commercial Levering (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Angiv (RES) for Residential eller (COM) for Commercial.';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Administrationsgebyr';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Dit administrationsgebyr for denne forsendelses måde.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Momsgruppe';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Anvend denne momsregel for administrationsgebyret.';
	var $_PHPSHOP_ERROR_CODE = 'Fejlkode';
	var $_PHPSHOP_ERROR_DESC = 'Fejlbeskrivelse';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Vis / Skift transaktionsnøgle';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Vis / Skift password/Transaktionsnøgle';
	var $_PHPSHOP_TYPE_PASSWORD = 'Angiv venligst dit password';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Gældende password';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Gældende transaktionsnøgle';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'Transaktionsnøglen er ændret.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Anmod kortkontrolkode (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Kontroller kortkontrolkode CVV2/CVC2/CID værdi (tre- eller firecifret nummer på bagsiden af kreditkortet, eller på forsiden af American Express Cards)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Angiv venligst den 3 cifrede kontrolkode';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'Du skal angive kontrolkoden for at fortsætte.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'Angiv enten et filnavn';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'BEMÆRK: Her kan angives et filnavn. <strong>Angives et filnavn, udføres ikke upload!!! Du er så nød til at uploade filen via FTP!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'ELLER upload en ny fil';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Du kan uploade en fil. Det er selve varen som skal sælges. En eksisterende fil vil blive overskrevet.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Angiv en tekst som vises under varedetaljer.<br />f.eks.: 24h, 48 timer, 3 - 5 dage, På vej.....';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'Eller vælge et billede der skal vises under varedetaljer.<br />Billeder findes på sti <i>/components/com_virtuemart/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Varianter';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Eksempler for angivelse af varianter:</h4>
        <pre>Str,XL[+14.95],M,S[-24.95];Farver,Rød,Grøn,Gul,Stribet[=24.00];osv,..,..</pre>
        <h4>Prisjusteringer kan angives pr variant:</h4>
        <pre>
        + == Læg dette beløb til.<br />
        - == Træk dette beløb fra.<br />
        = == Overstyr prisen til angivet beløb.
      </pre>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Specifik variantliste';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Eksempler på format af specifikke varianter:</h4>
        <pre>Navn;Ekstra;</strong>...</pre>';
	var $_PHPSHOP_MULTISELECT = 'Der kan vælges flere ved at holde CTRL tasten nede';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'Aktiver eProcessingNetwork.com betalings system?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Marker hvis kunden skal kunne betale via eProcessingNetwork.com.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Testtilstand ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Vælg \'Ja\' under test. Vælg \'Nej\' når det skal fungere rigtigt.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'eProcessingNetwork.com Login bruger id';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'Her angives brugerlogin til eProcessingNetwork.com.';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'eProcessingNetwork.com betalings nøgle';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'This is your eProcessingNetwork.com betalings nøgle';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Kontrol type';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'Her angives eProcessingNetwork.com kontrol type.';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Relaterede varer';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Du kan opsætte varer der relaterer sig til denne. Vælg en eller flere varer.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Se også disse relaterede varer';
	var $_PHPSHOP_IMAGE_ACTION = 'Billedhåndtering';
	var $_PHPSHOP_NONE = 'ingen';
	var $_PHPSHOP_ORDER_HISTORY = 'Ordrehistorik';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Kommentar';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Kommentarer til din ordre';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Medtag kommentar?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Dato oprettet';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Kunde underrettet?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Ny ordrestatus';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = 'USPS shipping brugernavn';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = 'USPS shipping brugernavn';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = 'USPS shipping kodeord';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = 'USPS shipping kodeord';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER = 'USPS shipping server';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP = 'USPS shipping server';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH = 'USPS shipping sti';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP = 'USPS shipping sti';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE = 'USPS Pakke str';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP = 'USPS Pakke størelse';
	var $_PHPSHOP_USPS_PADDING = 'Percent to pad weight for shipping package. (Include %)';
	var $_PHPSHOP_USPS_PADDING_TOOLTIP = 'Pad the shipping weight to allow additional weight for shipping box and packing. Using this allows you to put actual weight in your items weight settings.  Requires you to have the % sign included.  Example 15%';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_HANDLING_FEE = 'Fragt gebyr';
	var $_PHPSHOP_USPS_HANDLING_FEE = 'Dit gebyr for at håndtere denne type fragt.';
	var $_PHPSHOP_USPS_HANDLING_FEE_TOOLTIP = 'Dit gebyr for at håndtere denne type fragt.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE = 'Dit fragt gebyr for internationale ordre gennem USPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP = 'Dit fragt gebyr for internationale ordre gennem USPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE = 'Din pris pr pund (vægt) for internationale ordre gennem USPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP = 'Din pris pr pund (vægt) for internationale ordre gennem USPS.';
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
	var $_PHPSHOP_USPS_RESPONSE_ERROR = 'USPS kunne ikke godkende fragt prisen.';
	var $_PHPSHOP_PARAMETERS_LBL = 'Parametre';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Varetype';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Varetyper';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Ny/Ret varetype';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Varetyper for';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Vis varetyper';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Ny varetype for';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Ny varetype';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Varetype';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Varetypenavn';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Varetypebeskrivelse';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Specifikationer';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Varetype oplysninger';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Udgiv?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Varetype Vis side';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Varetypekort';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Specifikationer for varetyper';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Specifikationsoplysninger';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Varetype findes ikke!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Specifikationsnavn';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Dette bruges til feltnavn i tabel. Skal være unikt og uden mellemrum.';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Specifikationsfelttekst';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Parameterbeskrivelse';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Parametertype';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Heltal';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Tekst';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Kort tekst';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Flyd';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Karakter';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Dato & klokkeslæt';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Dato';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'YYYY-MM-DD';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Klokkeslæt';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'HH:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Ny linie';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Flere værdier';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Faste værdier';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Vis faste værdier?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Hvis fast værdi er valgt, er det kun disse der kan angives. Som eksempel på værdier:</strong><BR><span class="sectionname">Jern;Træ;Plastik;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Standard værdi';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'For standard værdi brug dette format:<ul><li>Dato: YYYY-MM-DD</li><li>Klokkeslæt: HH:MM:SS</li><li>Dato & Klokkeslæt: YYYY-MM-DD HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Enhed';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Advanceret søgning i henhold til specifikationer';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Specifikation Søgning';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Ønsker du søge efter varen på baggrund af varens specifikationer?';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Der er ingen varegruppe til søgning.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Der er ingen udgivet varetype med dette navn.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'Er lig med';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'Er forskellig fra';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Fuld-Tekst Søgning';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Alle valgte';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'En af de valgte';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Nulstil';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Søg i varegrupper';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Ret specifikationer';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Faldende orden';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Stigende orden';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Specifikationer for varegruppe';
	var $_PHPSHOP_FEE = 'Gebyr';
	var $_PHPSHOP_PRODUCT_CLONE = 'Kopier vare';
	var $_PHPSHOP_CSV_SETTINGS = 'Indstillinger';
	var $_PHPSHOP_CSV_DELIMITER = 'Skilletegn';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Tekstskilletegn';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Upload en CSV Fil';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Udfør';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Indlæs fra location';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Indlæs CSV File fra Server';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Eksporter til CSV Fil';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Vælg felt placering';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Standard placering';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'Tilpasset placering';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Eksporter alle varer til en CSV Fil';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'CSV Import / Eksport opsætning';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Gem';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Felt Navn';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'Standard værdi';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Felt placering';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Felt påkrævet?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Import/Eksport';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Nyt felt';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Dokumentation';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Angivet vare kan ikke findes!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Vis udsolgte varer';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Hvis markeret vises udsolgte varer. Alternativt skjules de.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'Antal {unit} pr pakke:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'Antal {unit} pr pakning:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Skjul udsolgte varer';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Udsalgs- og tilbudsvarer';
	var $_PHPSHOP_FEATURED = 'Udsalg';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Tilbage til land';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Tilbage til filmanager';
	var $_PHPSHOP_ADD_STATE = 'Ny Stat/Region';
	var $_PHPSHOP_LIST_STATES = 'Vis Stater/Regioner';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'Udsalg & nedsat';
	var $_PHPSHOP_SHOW_FEATURED = 'Udsalgsvarer';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'Nedsatte varer';
	var $_PHPSHOP_FILTER = 'Filter';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Tilbage til hovedsiden';
	var $_PHPSHOP_EXPAND_TREE = 'Udfold træ';
	var $_PHPSHOP_COLLAPSE_TREE = 'Sammentræk træ';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Rabatpris';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Her kan du overstyre rabatopsætningen, angiv en speciel rabat for denne vare.<br/>
Systemet vil lave en ny post udfra rabatprisen.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Pris per enhed';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'Sæt butik offline?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'Hvis du markere dette, vil der blive vist en Offline besked.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Offline besked';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Tabel Prefix for virtuemart tabeller';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'Er <strong>vm</strong> som standard';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Vis varesti?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Hvis angivet vises varens sti (som side stien) oven over varebeskrivelsen (f.eks Hjem -> Værktøj -> Spade).';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Vis vare antal?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Vis antal af varer i en varegruppe (f.eks. Værktøj(4) )';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'Tilføj til kurv ikon';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'Automatisk billedskalering?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'Hvis angivet, vil varebilleder automatisk blive skaleret ned til et lille varebillede med den størelse du angiver nedenfor.
        Til dette kræves PHP\'s GD2 funktioner. Du kan kontrollere om du har GD2 installeret ved at kigge under "System" -> "System Info" -> "PHP Info" -> gd.
        Det nye skalerede billede bliver gemt på serveren under /shop_image/product/resized. Virtumart vil altid kontrollere om der findes et skaleret billede her, før en eventuel gen-skalering.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'Miniaturebilledbredde';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'Den ønskede <strong>bredde</strong> i pixels af det skalerede billede.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Miniaturebilledhøjde';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'Den ønskede <strong>højde</strong> i pixels af det skalerede billede.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Angiv venligst mindst en leverings måde i Fragt opsætningen!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Priskonfiguration';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Brugergruppe der må se priser';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'Den valgte brugergruppe og følgende brugergrupper med højere rettigheder vil kunne se varepriser.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Vis "(inkl. XX% moms)" ved nettopriser?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'Hvis markeret vil kunden se teksten "(inkl. xx% moms)" når priser vises inkl. moms.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'Vis mængdepris?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'Hvis angivet vises prisen i henhold til varens enhed og pakkestørelse<br/>
<strong>Pris per enhed (10 stk)</strong><br/>
Ellers vises prisen normalt: <strong>Pris: xx.xx</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'Virtuemart';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Grundindstillinger';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Netbutikken';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Momsopsætning';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Antal start';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Antal slut';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'Brugerregistrering';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'Brugerregistrering tilladt?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'Ny bruger skal aktiveres?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Brug skjult brugerregistrering?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'Hvis angivet kræves kunden ikke et brugernavn og password ved ny brugerregistrering. I stedet anvendes angivet email adresse som brugernavn og et tilfældigt kodeord genereres. Oplysningerne sendes til kunden via email.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Kære %s,
Vi takker for din registrering hos %s. Din kundekonto er nu oprettet.
Du kan logge ind på %s ved at bruge nedenstående oplysninger:
Brugernavn  - %s
Password - %s
';
	var $_PEAR_LOG_CRIT = 'Kritisk';
	var $_PEAR_LOG_ERR = 'Fejl';
	var $_PEAR_LOG_WARNING = 'Advarsel';
	var $_PEAR_LOG_INFO = 'Information';
	var $_PEAR_LOG_TIP = 'Information';
	var $_PEAR_LOG_ALERT = 'Alarm';
	var $_PEAR_LOG_EMERG = 'Vigtigt';
	var $_PEAR_LOG_NOTICE = 'Bemærk';
	var $_PEAR_LOG_DEBUG = 'Debug';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'Aktiver PayFlow Pro betalingsmåde?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'Marker hvis kunderne skal kunne betale via VeriSign\'s PayFlow Pro.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'Test tilstand ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'Sæt til \'Ja\' mens opsætningen testes. Sæt til \'Nej\' for at aktivere betalings måden.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'VeriSign Partner ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'Partner ID som du har fået af en autoriseret VeriSign forhandler som skal håndtere PayFlow Pro betalinger';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'PayFlow Pro Login ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'Dette er din PayFlow Pro Login ID';
	var $_VM_TAXDETAILS_LABEL = 'Momstotal indeholder';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'Default produkt sorteringsorden';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'Definerer ved hvilket felt produkter sorteres default på browsesider';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'Tilgængelige "Sortér-ved" felter';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'Vælg "Sortér-ved" felter for browse-siden. Hver definerer en sorteringsmetode for produktet på browse-siden. Hvis fravælger alle, vil Sorter-ved-Formularen ikke blive vist.';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO = 'Vis en kort notits om din "Returpolitik" på ordrekonfirmeringssiden ?';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP = 'I de fleste europæiske lande er butiksejere tvunget ved lov til at informere deres kunder om deres fortrydelses- og afbestillingspolitik. Så denne burde være aktiveret i de fleste tilfælde.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT = 'Legal informationstekst (kort version).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP = 'Denne tekst informerer kort dine kunder om din Fortrydelses og afbestillingspolitik. Den bliver vist på den sidste side af checkout, lige over "Konfirmer Ordre" knappen.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK = 'Lang version af Forretningspolitikken (link til et content item).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP = 'Venligst tilføj et nyt content item om dine forretningsbetingelser.
Herefter kan du vælge den her.';
     var $_VM_LEGALINFO_SHORTTEXT = '<h5>Afbestillings- og fortrydelsespolitik</h5>
Du kan afbestille denne ordre indenfor to uger efter vi har modtaget den.
Du kan returnere nye, uåbnede varer fra en afbestilt ordre indenfor 2 uger efter du har modtaget dem. Varer skal returneres i deres originale indpakning.
For mere information om afbestilling og fortrydelse af ordrer, se venligst<a href="%s" onclick="%s" target="_blank">Vore forretningsbetingelser</a>. ';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EU = 'Den Europæiske Unions mode';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE = 'Mappen til at gemme sessionsdata er ikke skrivbar. Venligst rette dette eller kontakt din host-udbyder.';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX = 'Sessions gemme-stien %s er ikke skrivbar. Venligst ret dette! Butikken prøver midlertidigt at bruge %s istedet.';
	var $_VM_SESSION_COOKIES_NOT_ACCEPTED_TIP = 'Deres browser accepterer ikke cookies. Hvis de ønsker at lægge varer i indkøbsvognen og købe disse skal cookies aktiveres.';
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
	var $_ITEM_PREVIOUS = 'Forudgående';
	var $_ITEM_NEXT = 'næste';
	var $_CMN_OK = 'Ok';
	var $_CMN_CONTINUE = 'Fortsæt';
	var $_CMN_CANCEL = 'Afbryd';
	var $_BUTTON_SEND_REG = 'Send registrering';
	var $_CONTACT_FORM_NC = 'Venligst sikre at formularen er komplet og korrekt udfyldt.';
	var $_CMN_REQUIRED = 'Krævet';
	var $_CMN_NEW = 'Ny';
	var $_CMN_SAVE = 'Gem';
	var $_CMN_NEW_ITEM_LAST = 'Nye emner lægges ind sidst. Ordenen kan ændres efter at emnet er gemt.';
	var $_CMN_OPTIONAL = 'Valgfri';
	var $_E_APPLY = 'Anvend';
	var $_E_IMAGES = 'Billeder';
	var $_URL = 'URL:';
	var $_SEL_CATEGORY = 'Vælg en kategori';
	var $_E_REMOVE = 'Fjern';
	var $_PN_LT = '<';
	var $_PN_RT = '>';
	var $_PN_PAGE = 'Side';
	var $_PN_OF = 'af';
	var $_PN_START = 'Start';
	var $_PN_PREVIOUS = 'Forudgående';
	var $_PN_NEXT = 'Næste';
	var $_PN_END = 'Slut';
	var $_PN_DISPLAY_NR = 'Vis #';
	var $_PN_RESULTS = 'Resultater';
	var $_CMN_PRINT = 'Print';
	var $_CMN_PDF = 'PDF';
	var $_CMN_EMAIL = 'E-mail';
	var $_BACK = 'Tilbage';
	var $_USERNAME = 'Brugernavn';
	var $_PASSWORD = 'Password';
	var $_BUTTON_LOGIN = 'Log ind';
	var $_REGISTER_UNAME = 'Brugernavn';
	var $_REGISTER_EMAIL = 'Email';
	var $_REGWARN_NAME = 'Venligst indtast dit navn.';
	var $_REGWARN_UNAME = 'Venligst indtast dit brugernavn.';
	var $_REGWARN_MAIL = 'Venligst indtast en korrekt e-mail addresse.';
	var $_SEND_SUB = 'Kontodetaljer %s ved %s';
	var $_ASEND_MSG = 'Hallo %s,
	
	En ny kunde har registreret sig ved %s.
	Denne email indeholder vedkommendes detaljer:
	
	Navn - %s
	e-mail - %s
	Brugernavn - %s
	
	Venligst undlad at svare på denne besked da den er automatisk genereret og kun er til information';
	var $_REG_COMPLETE = '<div class="componentheading">Registrering komplet !</div><br />Du kan nu logge ind.';
	var $_REG_COMPLETE_ACTIVATE = '<div class="componentheading">Registrering komplet !</div><br />Din konto er oprettet og et aktiveringslink er blevet sendt til den e-mail addresse du angav. Noter venligst, at du skal aktivere kontoen ved at klikke på aktiverinbgslinket når du får e-mailen før du kan logge ind.';
	var $_DATE_FORMAT_LC = '%A, %d %B %Y';
	var $_LAST_UPDATED = 'Sidst opdateret';
	var $_NOT_AUTH = 'Du er ikke autoriseret til at se denne kilde.';
	var $_DO_LOGIN = 'Venligst log ind.';
	var $_VALID_AZ09 = 'Venligst indtast en korrekt %s. Ingen mellemrum, mere end %d karakterer og indeholde 0-9,a-z,A-Z';
	var $_CMN_PUBLISHED = 'Published';
	var $_CMN_UNPUBLISHED = 'Unpublished';
	var $_MORE = 'Mere...';
	var $_EMPTY_CATEGORY = 'Denne kategori er for nuværende tom.';
	var $_BUTTON_LOGOUT = 'Log ud';
	var $_NO_ACCOUNT = 'Ingen konto endnu ?';
	var $_CREATE_ACCOUNT = 'Registrer';
	var $_REGWARN_PASS = 'Venligst indtast et korrekt Password. Ingen mellemrum, mere end 6 karakterer og indeholde 0-9,a-z,A-Z';
	var $_REGWARN_VPASS1 = 'Venligst verificere password.';
	var $_REGWARN_VPASS2 = 'Password og verificering matcher ikke, venligst prøv igen.';
	var $_USEND_MSG_ACTIVATE = 'Hallo %s,

Tak for din registrering ved %s. Din konto er oprettet og du skal aktivere den før du kan bruge den.
For at aktivere kontoen venligst klikke på følgende link eller kopiér-klistre det ind i din browser:
%s

Efter aktivering kan du logge ind på %s ved at bruge følgende brugernavn og password:

Brugernavn - %s
Password - %s';
	var $_USEND_MSG = 'Hallo %s,

Tak for registreringen ved %s.

Du kan nu logge ind på %s ved at bruge brugernavnet og passwordet du registrerede med.';
	var $_PROMPT_PASSWORD = 'Glemt Password ?';
	var $_HI = 'Hej';
	var $_NEW_USER_MESSAGE_SUBJECT = 'Ny brugerdetalger';
	var $_NEW_USER_MESSAGE = 'Hallo %s,


Du er blevet oprettet som bruger ved %s af en Administrator.

Denne email indeholder dit brugernavn og password, der skal bruges for at logge ind på %s

Brugernavn - %s
Password - %s


Venligst undlad at svare på denne besked, da den er automatisk oprettet og kun er for information';
	var $_REMEMBER_ME = 'Husk mig';
	var $_REGISTER_TITLE = 'Registrering';
	var $_JAN = 'Januar';
	var $_FEB = 'Februar';
	var $_MAR = 'Marts';
	var $_APR = 'April';
	var $_MAY = 'Maj';
	var $_JUN = 'Juni';
	var $_JUL = 'Juli';
	var $_AUG = 'August';
	var $_SEP = 'September';
	var $_OCT = 'Oktober';
	var $_NOV = 'November';
	var $_DEC = 'December';
	var $_PHPSHOP_CSV_VERSION = '0.7';
	var $_PHPSHOP_CSV_ABOUT = 'Om';
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
