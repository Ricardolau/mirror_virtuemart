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
	var $_PHPSHOP_CATEGORIES = 'Kategorier';
	var $_PHPSHOP_SELECT_CATEGORY = 'Velg en kategori:';
	var $_PHPSHOP_ADMIN = 'Administrasjon';
	var $_PHPSHOP_PRODUCT = 'Produkt';
	var $_PHPSHOP_LIST = 'List';
	var $_PHPSHOP_ALL = 'Alle';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Vis alle produkter';
	var $_PHPSHOP_VIEW = 'Visning';
	var $_PHPSHOP_SHOW = 'Vis';
	var $_PHPSHOP_ADD = 'Opprett';
	var $_PHPSHOP_UPDATE = 'Oppdater';
	var $_PHPSHOP_DELETE = 'Slett';
	var $_PHPSHOP_SELECT = 'Velg';
	var $_PHPSHOP_SUBMIT = 'Bekreft';
	var $_PHPSHOP_RANDOM = 'Tilfeldige produkter';
	var $_PHPSHOP_LATEST = 'De siste produktene';
	var $_PHPSHOP_HOME_TITLE = 'Startside';
	var $_PHPSHOP_CART_TITLE = 'Handlekurv';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Gå til kassen';
	var $_PHPSHOP_LOGIN_TITLE = 'Logg inn';
	var $_PHPSHOP_LOGOUT_TITLE = 'Logg ut';
	var $_PHPSHOP_BROWSE_TITLE = 'Bla gjennom';
	var $_PHPSHOP_SEARCH_TITLE = 'Søk';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Din konto';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Navigasjon';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Avdeling';
	var $_PHPSHOP_INFO = 'Informasjon';
	var $_PHPSHOP_BROWSE_LBL = 'Oversikt';
	var $_PHPSHOP_PRODUCTS_LBL = 'Produkter';
	var $_PHPSHOP_PRODUCT_LBL = 'Produkt';
	var $_PHPSHOP_SEARCH_LBL = 'Søk';
	var $_PHPSHOP_FLYPAGE_LBL = 'Produktdetaljer';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Produktsøk';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Produktnavn';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Produktkategori';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Produktbeskrivelse';
	var $_PHPSHOP_CART_SHOW = 'Vis handlekurv';
	var $_PHPSHOP_CART_ADD_TO = 'Legg i kurven';
	var $_PHPSHOP_CART_NAME = 'Navn';
	var $_PHPSHOP_CART_SKU = 'Varenummer';
	var $_PHPSHOP_CART_PRICE = 'Pris';
	var $_PHPSHOP_CART_QUANTITY = 'Antall';
	var $_PHPSHOP_CART_SUBTOTAL = 'Sum';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Dersom du vil oppgi en annen leveringsadresse, trykk: ';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Leveringsadresse';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Ditt søk ga ingen treff.<br />';
	var $_PHPSHOP_PRICE_LABEL = 'Pris: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Legg til i kurven';
	var $_PHPSHOP_NO_CUSTOMER = 'Du er enda ikke registrert som kunde. Vennligst fyll inn fakturainformasjon.';
	var $_PHPSHOP_DELETE_MSG = 'Er du sikker på at du vil slette denne posten?';
	var $_PHPSHOP_THANKYOU = 'Takk for bestillingen.';
	var $_PHPSHOP_NOT_SHIPPED = 'Ennå ikke avsendt';
	var $_PHPSHOP_EMAIL_SENDTO = 'Bekreftelse har blitt sendt på e-post til';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Beklager. Det finnes ingen bruker som kunne legges til i vår brukerliste';
	var $_PHPSHOP_ERROR = 'FEIL';
	var $_PHPSHOP_MOD_NOT_REG = 'Modul ikke registrert.';
	var $_PHPSHOP_MOD_ISNO_REG = 'er ikke en gyldig VirtueMart modul.';
	var $_PHPSHOP_MOD_NO_AUTH = 'Du har ikke tilgangsrettigheter til å se denne modulen.';
	var $_PHPSHOP_PAGE_404_1 = 'Siden finnes ikke';
	var $_PHPSHOP_PAGE_404_2 = 'Dette filnavnet finnes ikke. Kan ikke finne filen:';
	var $_PHPSHOP_PAGE_403 = 'Manglende tilgangsrettigheter';
	var $_PHPSHOP_FUNC_NO_EXEC = 'Du har ikke rett til å utføre ';
	var $_PHPSHOP_FUNC_NOT_REG = 'Funksjon ikke registrert';
	var $_PHPSHOP_FUNC_ISNO_REG = ' er ikke en gyldig MOS_com_phpShop-funksjon.';
	var $_PHPSHOP_ADMIN_MOD = 'Administrasjon';
	var $_PHPSHOP_USER_LIST_MNU = 'Vis brukere';
	var $_PHPSHOP_USER_LIST_LBL = 'Brukerliste';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Brukernavn';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Fullt navn';
	var $_PHPSHOP_USER_LIST_GROUP = 'Gruppe';
	var $_PHPSHOP_USER_FORM_MNU = 'Legg til bruker';
	var $_PHPSHOP_USER_FORM_LBL = 'Legg til/oppdater brukerinformasjon';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Fakturainformasjon';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Leveringsinformasjon';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Legg til adresse';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'Ingen leveringsadresse.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Adresse kallenavn';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Fornavn';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Etternavn';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Mellomnavn';
	var $_PHPSHOP_USER_FORM_TITLE = 'Tittel';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Brukernavn';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Passord';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Bekreft passord';
	var $_PHPSHOP_USER_FORM_PERMS = 'Rettigheter';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Kundenummer / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Firmanavn';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_USER_FORM_CITY = 'Poststed';
	var $_PHPSHOP_USER_FORM_STATE = 'Fylke';
	var $_PHPSHOP_USER_FORM_ZIP = 'Postnummer';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_USER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Mobil';
	var $_PHPSHOP_USER_FORM_FAX = 'Telefaks';
	var $_PHPSHOP_USER_FORM_EMAIL = 'E-post';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Vis modulliste';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Modulliste';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Modulnavn';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Modulrettigheter';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Funksjoner';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Rekkefølge';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Legg til modul';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Modulinformasjon';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Modultittel (til Toppmeny)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Modulnavn';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Modulrettigh.';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Moduloverskrift';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Modulbunn';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Vis modul i admin-meny?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Visningsrekkefølge';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Modulbeskrivelse';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'Språkkode';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Språkfil';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Opplisting funksjoner';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Funksjonsliste';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Funksjonsnavn';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Klassenavn';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Klassemetode';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Tillatelser';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Legg til funksjon';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Funksjonsinfo';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Funksjonsnavn';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Klassenavn';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Klassemetode';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Funksjonsrettigheter';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Funksjonsbeskrivelse';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Vis valutaliste';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Valutaliste';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'Opprett valuta';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Valutanavn';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'Valutakode';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Vis land';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Landsliste';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Opprett land';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Landets navn';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Landkode (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Landkode (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Vis fylker';
	var $_PHPSHOP_STATE_LIST_LBL = 'Fylkesliste: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Opprett/Oppdater fylke';
	var $_PHPSHOP_STATE_LIST_NAME = 'Navn på fylke';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'Fylkeskode (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'Fylkeskode (2)';
	var $_PHPSHOP_ADDRESS = 'Adresse';
	var $_PHPSHOP_CONTINUE = 'Fortsett';
	var $_PHPSHOP_EMPTY_CART = 'Kurven din er tom.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Ping Inter Shipper Server';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'Inter Shipper-Server Ping ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'InterShipper Ping mislyktes';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'InterShipper Ping vellykket';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Transportør';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Respons<br/>tid';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'sek.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Vis leveringsmåter';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Aktive leveringsmåter';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Leveringsmåter';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Aktive';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Ekspedisjonsgebyr';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Ledetid';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'flat sats';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'prosent';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'dager';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Tung frakt';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Konfigurer leveringsmåter';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Legg til leveringsmåte';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Konfigurer leveringsmåte';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Oppdater';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Leveringsmåte';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Aktiviser';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Ekspedisjonsgebyr';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Ledetid';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'Flat sats';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'prosent';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'dager';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Tung frakt';
	var $_PHPSHOP_ORDER_MOD = 'Ordredetaljer';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Bekreft ordre';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Avbryt ordre';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Skriv ut ordre';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Slett ordre';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Ordreliste';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Ordreliste';
	var $_PHPSHOP_ORDER_LIST_ID = 'Ordrenummer';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Ordredato';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Sist endret';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Status';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'Sum';
	var $_PHPSHOP_ORDER_ITEM = 'Artikler';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Ordredetaljer';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Ordrenummer';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Ordredato';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Ordrestatus';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Kundeinformasjon';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Betalingsinformasjon';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Leveringsinformasjon';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Faktureres';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Leveres';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Navn';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Firmanavn';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Poststed';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Fylke';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'Postnummer';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Land';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Telefon';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Telefaks';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'E-post';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Ordreartikler';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Antall';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Ant.';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'Varenr.';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Pris';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Totalt';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'Sum';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'Herav mva.';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Frakt';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Mva. på frakt';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Betalingsmetode';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Kontonavn';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Kontonummer';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Utløpsdato';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Betalingslogg';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Fraktinformasjon';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Betalingsinformasjon';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Transportør';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Fraktmodus';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Fraktdato';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Fraktpris';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Ordrestatustyper';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Opprett ordrestatustype';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Ordrestatuskode';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Ordrestatusnavn';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Ordrestatus';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Ordrestatuskode';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Ordrestatusnavn';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Opplisting ordre';
	var $_PHPSHOP_PRODUCT_MOD = 'Produkter';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Gjeldende produkt';
	var $_PHPSHOP_CURRENT_ITEM = 'Gjeldende artikkel';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Produktbeholdning';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Vis produktbeholdning';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Pris';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Nummer';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Vekt';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Vis produktliste';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Produktliste';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Produktnavn';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'Varenr.';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Publiser';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Produktsøk';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'Endret';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'Med endret pris';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'Uten pris';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'Etter';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Før';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Legg til produkt';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Endre dette produktet';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Se produktsiden i butikken';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Legg til artikkel';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Legg til enda en artikkel';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Nytt produkt';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Oppdater produkt';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Produktinformasjon';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Produktstatus';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Produktets dimensjoner og vekt';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Produktbilder';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Ny artikkel';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Oppdater artikkel';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Artikkelinformasjon';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Artikkelstatus';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Artikkelens dimensjoner og vekt';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Artikkelbilder';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Tilbake til tilknyttet produkt';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'Skriv inn stien til aktuelt bilde for å oppdatere det.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Slett bilde';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Produkt artikler';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Artikkel egenskaper';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Er du sikker på at du vil slette dette produktet og artikler relatert til det?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Er du sikker på at du vil slette denne artikkelen?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Salgssted';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Produsent';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'Varenr.';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Navn';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'Nettadresse';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Kategori';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Utsalgspris';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Produktpris (eks. mva)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Produktbeskrivelse';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Kort beskrivelse';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'På lager';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'Restordre';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Tilgjengelig dato';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'På tilbud';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Type rabatt';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Publisere?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Lengde';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Bredde';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Høyde';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Måleenhet';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Vekt';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Måleenhet';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Lite bilde';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Stort bilde';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'gram';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'cm';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Enhet';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'stk';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Stk per pakke';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Her kan du fylle inn et nummer, antall i pakken.(maks 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Ant. i pakken';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Her kan du skrive inn antall i pakken (maks 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Resultater lagt til';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Resultater oppdatert';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Artikkel lagt til resultat';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Artikkel oppdatert resultat';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Bruk CSV opplasting';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Produktmapper';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Vis kategorier';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Kategoritre';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Opprett kategori';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Informasjon om kategorien';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Kategorinavn';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Over';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Kategoribeskrivelse';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Publisere?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Kategoribeskrivelse';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Vis egenskaper';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Egenskapsliste for';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Egenskapsnavn';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Rekkefølge';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Legg til egenskap';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Egenskapsskjema';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Ny egenskap for produkt';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Oppdater egenskap for produkt';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Ny egenskap for artikkel';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Oppdater egenskap for artikkel';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Egenskapsnavn';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Rekkefølge';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Vis kategorier';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Prisliste';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Pris for';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Gruppenavn';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Pris';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Valuta';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Legg til pris';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Prisinformasjon';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Ny pris for produkt';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Oppdater pris for produkt';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Ny pris for artikkel';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Oppdater pris for artikkel';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Pris';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Kjøpergruppe';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Basisrapport';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Spesifisert produktliste';
	var $_PHPSHOP_RB_SALE_TITLE = 'Rapportering salg';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Oversikt over salgsaktivitet';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Velg intervall';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Månedlig';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Ukentlig';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Daglig';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Denne mnd.';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'Forrige mnd.';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'Siste 60 dager';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'Siste 90 dager';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Begynn med';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Avslutt med';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Vis dette utvalget';
	var $_PHPSHOP_RB_REPORT_FOR = 'Rapport for ';
	var $_PHPSHOP_RB_DATE = 'Dato';
	var $_PHPSHOP_RB_ORDERS = 'Bestillinger';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Totalt artikler solgt';
	var $_PHPSHOP_RB_REVENUE = 'Omsetning';
	var $_PHPSHOP_RB_PRODLIST = 'Produktliste';
	var $_PHPSHOP_SHOP_MOD = 'Butikk';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Lite bilde';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Pris';
	var $_PHPSHOP_ORDER_STATUS_P = 'Avventer';
	var $_PHPSHOP_ORDER_STATUS_C = 'Bekreftet';
	var $_PHPSHOP_ORDER_STATUS_X = 'Avbrutt';
	var $_PHPSHOP_ORDER_BUTTON = 'Bestill';
	var $_PHPSHOP_SHOPPER_MOD = 'Kunder';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'List kunder';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Kundeliste';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Brukernavn';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Fullt navn';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Gruppe';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Legg til kunde';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Kundeinformasjon';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Fakturainformasjon';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Informasjon';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Leveringsinformasjon';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Legg til adresse';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Adresse kallenavn';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Brukernavn';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Fornavn';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Etternavn';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Mellomnavn';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Tittel';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Kundenavn';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Passord';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Bekreft passord';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Kundegruppe';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Firmanavn';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Poststed';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Fylke';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'Postnummer';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Mobil';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Telefaks';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'E-post';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Ja';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'Nei';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Vis kundegrupper';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Vis kundegrupper';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Gruppenavn';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Gruppebeskrivelse';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Kundegruppeskjema';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Legg til kundegruppe';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Gruppenavn';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Gruppebeskrivelse';
	var $_PHPSHOP_STORE_MOD = 'Butikk';
	var $_PHPSHOP_STORE_FORM_MNU = 'Butikkinformasjon';
	var $_PHPSHOP_STORE_FORM_LBL = 'Butikkinformasjon';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Kontaktinformasjon';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Stort bilde';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Last opp bilde';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Butikknavn';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Butikkfirmanavn';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'Poststed';
	var $_PHPSHOP_STORE_FORM_STATE = 'Fylke';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_STORE_FORM_ZIP = 'Postnr.';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Butikkategori';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Etternavn';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Fornavn';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Mellomnavn';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Tittel';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Telefon 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Telefon 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Telefaks';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'E-post';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Sti til bilde';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Beskrivelse';
	var $_PHPSHOP_PAYMENT = 'Betaling';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Vis betalingsmetoder';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Betalingsmetodeliste';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Navn';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Kode';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Rabatt';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Kundegruppe';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Betalingstype';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Legg til betalingsmåte';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Skjema betalingsmåter';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Navn betalingsmåte';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Kundegruppe';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Rabatt';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Kode';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Vis bestillinger';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Type betalingsmåte';
	var $_PHPSHOP_TAX_MOD = 'Mva';
	var $_PHPSHOP_TAX_RATE = 'Mva-verdier';
	var $_PHPSHOP_TAX_LIST_MNU = 'Vis mva-verdier';
	var $_PHPSHOP_TAX_LIST_LBL = 'Liste over mva-verdier';
	var $_PHPSHOP_TAX_LIST_STATE = 'Mva-fylke';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Mva-land';
	var $_PHPSHOP_TAX_LIST_RATE = 'Mva-sats';
	var $_PHPSHOP_TAX_FORM_MNU = 'Legg til mva-sats';
	var $_PHPSHOP_TAX_FORM_LBL = 'Legg til info for satsen';
	var $_PHPSHOP_TAX_FORM_STATE = 'Mva-stat eller -region';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Mva-land';
	var $_PHPSHOP_TAX_FORM_RATE = 'Mva-sats';
	var $_PHPSHOP_VENDOR_MOD = 'Leverandør';
	var $_PHPSHOP_VENDOR_ADMIN = 'Leverandører';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Leverandørliste';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Leverandørliste';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Navn leverandør';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Administrer';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Legg til leverandør';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Legg til informasjon';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Leverandørinformasjon';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Kontaktinformasjon';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Stort bilde';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'last opp bilde';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Leverandørs butikknavn';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Leverandørs firmanavn';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Poststed';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Fylke';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'Postnummer';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Leverandørkategori';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Etternavn';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Fornavn';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Mellomnavn';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Tittel';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Telefon 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Telefon2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Telefaks';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'E-post';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Sti til bilde';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Beskrivelse';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Vis leverandørkategorier';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Leverandørkategorier';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Kategorinavn';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Kategoribeskrivelse';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Leverandører';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Legg til leverandørkategori';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Skjema for ny leverandørkategori';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Informasjon om kategorien';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Kategorinavn';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Kategoribeskrivelse';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Produsent';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Produsenter';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Vis produsenter';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Produsentliste';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Produsentnavn';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Admin';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'Legg til produsent';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Legg til informasjon';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Produsentinformasjon';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Produsentnavn';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Produsentkategori';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'E-post';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'URL til produsentens nettside';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Beskrivelse';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Vis produsentkategorier';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Produsentkategorier';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Kategorinavn';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Kategoribeskrivelse';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Produsenter';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Legg til produsentkategori';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Skjema for ny produsentkategori';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Informasjon om kategorien';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Kategorinavn';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Kategoribeskrivelse';
	var $_PHPSHOP_HELP_MOD = 'Hjelp';
	var $_PHPSHOP_CART_ACTION = 'Handlinger';
	var $_PHPSHOP_CART_UPDATE = 'Oppdater';
	var $_PHPSHOP_CART_DELETE = 'Slett';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Pris';
	var $_PHPSHOP_PRODUCT_CALL = 'Spør etter pris';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Forrige';
	var $_PHPSHOP_PRODUCT_NEXT = 'Neste';
	var $_PHPSHOP_CART_TAX = 'Mva';
	var $_PHPSHOP_CART_SHIPPING = 'Frakt';
	var $_PHPSHOP_CART_TOTAL = 'Totalt';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Neste';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'REGISTRER';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Fakturainformasjon';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Firma';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Navn';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Adresse';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Telefaks';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'E-post';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Leveringsinformasjon';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Firma';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Navn';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Adresse';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Telefaks';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Betalingsinformasjon';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Navn på kort';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Betalingsmåte';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Kredittkortnummer';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Utløpsdato';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Fullfør ordre';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'pliktig informasjon når kredittkort er valgt';
	var $_PHPSHOP_ZONE_MOD = 'Leveringssoner';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Vis soner';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Legg til sone';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Sjekk soner';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Land';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Nåværende sone';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Knytt til sone';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'oppdater';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Knytt sammen soner';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Sonenavn';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Sonebeskrivelse';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Sonekost pr. artikkel';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Sonekostnadsgrense';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Soner';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Sonenavn';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Sonebeskrivelse';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Sonekostnad per artikkel';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Sonekostnadsgrense';
	var $_PHPSHOP_LOGIN_FIRST = 'Vennligst logg deg inn for å registrere deg til dette nettstedet (bruk "Logg inn"-modulen) først.<br />Takk.';
	var $_PHPSHOP_STORE_FORM_TOS = 'Leveringsbetingelser';
	var $_PHPSHOP_AGREE_TO_TOS = 'Vennligst bekreft at du godtar våre leveringsbetingelser først.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Jeg godtar leveringsbetingelsene';
	var $_PHPSHOP_LEAVE_BLANK = '(la dette feltet stå tomt om du <br />ikke har en individuell php-fil for det!)';
	var $_PHPSHOP_RETURN_LOGIN = 'Eksisterende kunder: Vennligst logg inn';
	var $_PHPSHOP_NEW_CUSTOMER = 'Ny kunde? Vennligst registrer fakturainformasjon';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Kundekonto:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Ordreoversikt';
	var $_PHPSHOP_ACC_UPD_BILL = 'Her kan du oppdatere din fakturainformasjon.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Her kan du legge til og endre dine leveringsadresser.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Kontoinformasjon';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Leveringsinformasjon';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Ingen bestillinger å vise';
	var $_PHPSHOP_ACC_BILL_DEF = '- Standard (Samme som faktura)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Du kan legge til flere leveringssteder til din konto. Vennligst finn på et kallenavn for leveringsstedet du velger under.';
	var $_PHPSHOP_CONFIG = 'Konfigurasjon';
	var $_PHPSHOP_USERS = 'Brukere';
	var $_PHPSHOP_IS_CC_PAYMENT = 'er kredittkortbetaling?';
	var $_PHPSHOP_SHIPPING_MOD = 'Transport';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Frakt';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Transportører';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Transportørliste';
	var $_PHPSHOP_RATE_LIST_MNU = 'Fraktsatser';
	var $_PHPSHOP_RATE_LIST_LBL = 'Liste over fraktsatser';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Navn';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Sortering';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Legg til transportør';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Opprette / Endre transportør';
	var $_PHPSHOP_RATE_FORM_MNU = 'Legg til fraktsats';
	var $_PHPSHOP_RATE_FORM_LBL = 'Fraktsats endre / legg til';
	var $_PHPSHOP_RATE_FORM_NAME = 'Beskrivelse av transportørsats';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Transportør';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'Poststed start';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Poststed slutt';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Minstevekt';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Maksimalvekt';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Gebyr';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Ditt pakkegebyr';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'Mva ID';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Rekkefølge';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Transportør';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Beskrivelse av transportørsats';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Vekt fra ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... til';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Transportørfirma';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Rekkefølge';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'FEIL: Transportørident eksisterer.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'FEIL: Velg en transportør.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'FEIL: Minst en fraktrate finnes, slett satser for transportør';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'FEIL: Finner ingen transportør med denne ID\'en.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'FEIL: Velg en transportør.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'FEIL: Finner ingen transportør med denne ID\'en.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'FEIL: En satsbeskrivelse er nødvendig.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'FEIL: Kan ikke sende til dette landet. Flere enn et land kan separeres med \';\'.';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'FEIL: Minimumsvekt er påkrevd';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'FEIL: Maksimumsvekt er påkrevd';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'FEIL: Minimumsvekten må være mindre enn maksimumsvekten';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'FEIL: Forsendelsesavgift er påkrevd';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'FEIL: Velg en valuta';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'FEIL: En forsendelsessats er påkrevd';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Vennligst velg';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'transportør';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Fraktsats';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Pris';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-ingen-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Kredittkort';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Bruk betalingssystem';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Bankoverføring';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Kun adresse';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Vennligst velg en leveringsadresse!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Vennligst velg en leveringsmåte!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Vennligst velg en betalingsmåte!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Se gjennom det du har oppgitt og bekreft bestillingen!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Vennligst velg en leveringsmåte.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Vennligst velg en annen leveringsmåte.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Vennligst velg en betalingsmåte.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Vennligst oppgi ditt kredittkortnummer.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Vennligst oppgi navnet på kredittkortet.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'Kredittkortnummeret du oppga er ikke gyldig.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Vennligst oppgi kredittkortets utløpsmåned.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Vennligst oppgi kortets utløpsår.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'Utløpsdatoen er ugyldig.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Vennligst oppgi en leveringsadresse.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Ugyldig kortnummer.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'Handlekurven din er tom!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'FEIL: Vennligst velg en transportør!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'FEIL: Valgt fraktrate ble ikke funnet!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'FEIL: Din leveringsadresse ble ikke funnet!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'FEIL: Det finnes ingen kredittkortdata....';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'FEIL: Kredittkortnummer ble ikke funnet!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Beklager, men kredittkortnummeret du brukte er et testnummer!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'Bruker-ID ble ikke funnet i databasen!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Du har ikke oppgitt ditt navn.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Du har ikke oppgitt din IBAN.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Du har ikke oppgitt ditt bankkontonummer.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Du har ikke oppgitt koden for din banktype.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Du har ikke oppgitt din banks navn.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Utsjekkingen trenger et gyldig steg!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Betalingsinformasjon lagret for senere behandling.<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Verdien på minimumsordre er ikke oppnådd enda.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'Vår minste bestillingsverdi er:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Betal med kredittkort';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'Andre betalingsmetoder';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Vennligst oppgi en betalingsmetode:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Minste bestillingsverdi for din butikk';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Bankkontoinformasjon';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Kontonummer';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'Bankens sorteringskodenummer';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Banknavn';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Kontonavn';
	var $_PHPSHOP_MODULES = 'Moduler';
	var $_PHPSHOP_FUNCTIONS = 'Funksjoner';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Spesialprodukter';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Ønsker du å kommentere noe i forbindelse med din ordre?';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Kommentar';
	var $_PHPSHOP_INCLUDING_TAX = 'inkl. mva';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Velg størrelse eller lengde';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Artikkel';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Nedlastingsområde';
	var $_PHPSHOP_DOWNLOADS_START = 'Start nedlasting';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Venligst skriv inn nedlastings-ID\'en du fikk per e-post. Deretter trykker du \'Start nedlasting\'.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Beklager, nedlastingen er ikke gyldig lenger.';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Beklager, du har nådd maks antall nedlastinger';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Feil nedlastings-ID!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Kunne ikke sende melding til';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Melding sendt til';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Nedlastingsinfo';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'Filen(e) du har bestilt er klare for nedlasting';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Vennligst skriv inn følgende nedlastings-ID(er) på vårt nedlastingsområde: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'Maks antall nedlastinger for hver fil er: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Nedlastbar til {expire} dager etter første nedlasting';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Spørsmål? Problemer?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Nedlastingsinfo av';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'Nedlastbart produkt?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Takk for din betaling.';
	

	var $_PHPSHOP_PAYPAL_ERROR = 'En feil har oppstått under betalingstransaksjonen. Statusen på din ordre kan ikke oppdateres.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Din ordre er som følger:';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Takk for at du handler hos oss!';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Spørsmål? Problemer?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'Følgende ordre er mottatt.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Vis ordren ved å trykke på følgende lenke:';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Minus-antall er ikke tillatt.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Venligst skriv inn et gyldig antall for denne varen.';
	var $_PHPSHOP_CART_STOCK_1 = 'Valgt antall overstiger tilgjengelig antall i butikken';
	var $_PHPSHOP_CART_STOCK_2 = 'Vi har $product_in_stock stk. tilgjengelig.';
	var $_PHPSHOP_CART_STOCK_3 = 'Skriv her for å stå på vår venteliste.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Velg størrelse eller lengde';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'ingen';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Hr.';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Fru';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Dr.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof.';
	var $_PHPSHOP_DEFAULT = 'Standard';
	var $_PHPSHOP_AFFILIATE_MOD = 'Administrer statistikk';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Vis statistikk';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Statistikkliste';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Statistikknavn';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Aktiv';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Sats';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Månedstotal';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Månedsprovisjon';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Vis ordre';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'E-poststatistikk';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'E-poststatistikk';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'Send e-post til hvem(* = ALLE)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Din e-post';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Emne';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Inkluder denne statistikken';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Provisjonssats';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Aktiv?';
	var $_PHPSHOP_DELIVERY_TIME = 'Normalt sendt etter';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Leveringsinformasjon';
	var $_PHPSHOP_MORE_CATEGORIES = 'Flere kategorier';
	var $_PHPSHOP_AVAILABILITY = 'Tilgjengelighet';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Dette produktet er for tiden ikke tilgjengelig';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Vil bli tilgjengelig igjen den: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Kontrollpanel';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Statistikk';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Kunder';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'Aktive produkter';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'Inaktive produkter';
	var $_PHPSHOP_STATISTIC_SUM = 'Sum';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Nye ordre';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Nye kunder';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Venligst skriv inn din e-postadresse for å få beskjed når dette produktet er på lager igjen.';


	var $_PHPSHOP_WAITING_LIST_THANKS = 'Takk for at du venter! <br />Vi vil gi deg beskjed så snart vi får ny vare på lager.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Gi meg melding!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Utskriftsvennlig visning';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Venligst velg enten Authorize.net Eller CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = 'Status for konfigurasjonsfil';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'er overskrivbar';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'er skrivebeskyttet';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Global';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Sti & URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Side';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Sending';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Gå til kassen';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Nedlastinger';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Betaling';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Bruk kun som katalog';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Om du velger denne fjernes handlefunksjonen. Produktene vises på vanlig måte.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Vis priser';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Vis pris inkl. mva?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Angir om kunden ser prisene med eller uten mva.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Velg for å vise priser. Når katalogvisning uten handlemulighet er valgt ønsker noen å gjøre dette uten at prisene vises.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Virtuell MVA';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Dette bestemmer om varer med NULL vekt skal våre med i MVA-beregningen eller ikke. Endre ps_checkout.php->calc_order_taxable() for dine innstillinger.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'MVA måte';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Basert på leveringsadresse';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Basert på Butikkadresse';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Dette bestemmer om MVA-satsen kalkuleres:<br />
                                                                                    <ul><li>Landet/Staten butikken er registrert i</li><br/>
                                                                                    <li>eller hvor kunden kommer fra.</li></ul>';

	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Mulighet for flere MVA-satser?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'velg dette dersom du selger varer med forskjellige satser for MVA. (f.eks. 7% matmoms, 25% for annet)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Trekk fra rabatt før beregning av MVA/fraktkostnader?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Muliggjør for kunder å gi kommentarer/rangering?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Om valgt, kan kunder <strong>rangere produkter</strong> og <strong>skrive kommentarer</strong> om dem, <br />
												slik at kunder kan skrive om sine erfaringer om produktet til andre kunder.';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Bestemmer om rabatt skal trekkes fra før valgt betalingsmåte eller etter MVA og sendekostnader.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Kunder kan legge igjen opplysninger om bankkonto?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Velges dersom kunder skal ha mulighet til å legge inn opplysninger som bankkonto, IBAN osv. når de registrerer sine kundeopplysninger.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Kunder kan velge fylke?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Velges dersom kunder skal ha mulighet for å velge fylke når de registrerer seg som kunde.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Må akseptere Salgs- og leveringsbetingelser?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Velges dersom du vil at kundene må akseptere salgs- og leveringsbetingelsene før de registrerer seg som kunde.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Sjekk varebeholdning?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Velges dersom varebeholdning skal sjekkes når en kunde legger en vare i handlekurven.';

	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Muliggjør statistikk?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Dette gjør statistikk i nettbutikken mulig dersom statistikk er mulig i administrasjonen.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Format på ordren per e-post :';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Ren tekst';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Dette bestemmer hvordan oppsette på ordren via e-post settes opp:<br />
                                                                                        <ul><li>som ren tekst</li>
                                                                                        <li>eller som HTML med bilder.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Tillat administrasjon av butikken for brukere uten administrasjonsrett for portalen?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'Med dette valget kan du gi tilgang til administrasjon av butikken uten at brukeren har tilgang til administrasjon av nettstedet.';

	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'URL til nettbutikken. Normalt lik URL til nettsidene (med "/" til slutt!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'Sikker URL';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'Sikker URL til nettsidene.(https - med "/" til slutt!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'URL til Komponenter';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'URL til nettbutikkomponenten (med "/" til slutt!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'URL til bilder';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'URL til nettbutikkens bildemappe (med "/" til slutt!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'Sti til ADMIN';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'STI til VirtueMart-komponentens mappe';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'CLASS STI';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'STI til nettbutikkens classes-mappe.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'Sti til SIDE';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'STI til nettbutikkens HTML-mappe.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'Sti til BILDE';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'STI til nettbutikkens shop_image-mappe.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'NETTSIDE';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Dette er siden som blir åpnet som standardside.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'FEILMELDINGSSIDE';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Dette er standardside for visning av feilmeldinger.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'DEBUGSIDE';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Dette er standardside for visning av debug meldinger.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'DEBUG ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'DEBUG?  	   	Slår på debug generering. Dette gjør at DEBUGPAGE vises nederst på hver side. Nyttig når butikken opprettes fordi den viser detaljer om handlekurv, skjemaverdier osv.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'FLYPAGE';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Dette er standarside for visning av produktdetaljer.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Kategori';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Dette bestemmer standardmal for visning av produkter i en produktkategori.<br />
        Du kan lage nye maler ved å endre en eksisterende malfil <br />
       (som du finner i <strong>COMPONENTPATH/html/templates/</strong> og starter med browse_)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Standard antall produkter per rad.';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Dette bestemmer antall produkter i en rad. <br />
       Eksempel: Om du setter 4, vil kategorimalen vise 4 produkter per rad.';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = '"ikke bilde" bilde';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Dette bildet vil vises intil du legger til bilde på produktet.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'Søkerader ';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Bestemmer antall rader per side når søkeresultat vises som liste.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'SØKEFARGE 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Spesifiserer fargen i raden med oddetall i resultatlisten.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'SØKEFARGE 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Spesifiserer fargen i raden med partall i resultatlisten.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'MAKSIMUM RADER';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Angir antall rader å vise i ordrelistevelgeren.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Vis fotnote';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Viser "powered-by-Virtuemart"-bilde.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Velg forsendelsesmåte for din butikk.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Standard forsendelsesmodul med forskjellige transportører og kostnader. <strong>ANBEFALES!</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '  	Zone Shipping Module Country Version 1.0<br />
       For more information on this module please visit <a href="http://ZephWare.com">http://ZephWare.com</a><br />
       for details or contact <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Check this to enable the zone shipping module';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = 'UPS Tools Shipping calculation';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'UPS access code';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Your UPS access code';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'UPS user id';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'The user ID you got from UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'UPS password';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'The password for your UPS account';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'InterShipper Module. Check only if you have an Intershipper.com account';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Disable Shipping method selection. Choose if your customers buy downloadable goods which don\'t have to be shipped.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'InterShipper Password';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Your password for your intershipper account.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'InterShipper email';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'Your email address for your intershipper account.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'Krypteringsnøkkel';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Brukes til å kryptere data som er lagret i databasen. Dette betyr at denne filen er beskyttet mot visning for alltid.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Vis symboler når kunden betaler';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Velges dersom du ønsker å vise symboler for hvor i prosessen kunden er når han/hun betaler ( 1 - 2 - 3 - 4 med bilder).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Velg betalingsprosess for din butikk.';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Standard :</strong><br/>
              1. Leveringsadresse<br />
              2. Leveringsmåte<br />
              3. Betalingsmåte<br />
              4. Fullfør ordre';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Valg 2:</strong><br/>
              1. Leveringsadresse<br />
              2. Betalingsmåte<br />
              3. Fullfør ordre';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Valg 3:</strong><br/>
              1. Leveringsmåte<br />
              2. Betalingsmåte<br />
              3. Fullfør ordre';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Valg 4:</strong><br/>
              1. Betalingsmåte<br />
              2. Fullfør ordre';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Tillat nedlasting';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Velges dersom du selger nedlastbare produkter.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Ordrestaus som tillater nedlasting';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Velger ordrestatusen kunden mottar via e-post angående nedlastingen.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Ordrestaus som hindrer nedlasting';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Velger ordrestatusen kunden mottar via e-post angående nedlastingen.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'DOWNLOADROOT';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'The physical path to the files for the custumer download. (trailing slash at the end!)<br />
        <span class="message">For your own shop\'s security: If you can, please use a directory ANYWHERE OUTSIDE OF THE WEBROOT</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Maks nedlastinger';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Angir antall nedlastinger som kan foretas med en nedlastings-ID (per ordre)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Nedlasting utgår';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Angir hvor lenge nedlastingen er tilgjengelig <strong>i sekunder</strong>';

	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Enable IPN Payment via PayPal?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Check to let your customers use the PayPal payment system.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'PayPal payment email:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Your business email address for PayPal payments. Also used as receiver_email.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Ordrestatus for velykket transaksjon';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Angi ordrestatus for gjeldende ordre dersom PayPal IPN var velykket. Dersom du bruker nedlastingsmulighet: Velg statusen som muliggjør nedlasting. Kunden blir da informert om nedlastingen via e-post.';

	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Ordrestatus for feil under transaksjonen';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Velg en ordrestatus for feil under PayPal-transaksjon.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Tillat betaling med PayMate?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Velges for å la kunder betale via australske PayMates betalingssystem.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'PayMate username:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Your user account for PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Enable Authorize.net payment?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Check to use Authorize.net with phpShop.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Test mode ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Select \'Yes\' while testing. Select \'No\' for enabling live transactions.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Ja';
	var $_PHPSHOP_ADMIN_CFG_NO = 'Nei';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Authorize.net Login ID';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'This is your Authorize.Net Login ID';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Authorize.net Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'This is your Authorize.net Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Authentication Type';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'This is the Authorize.Net authentication type.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Enable CyberCash?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Check to use CyberCash with phpShop.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash MERCHANT';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_MERCHANT is the CyberCash Merchant ID';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash Merchant Key';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash Merchant Key is the Merchant Provided by CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash PAYMENT URL';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'CyberCash PAYMENT URL is the URL provided by Cybercash for secure payment';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash AUTH TYPE';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'CyberCash AUTH TYPE is the Cybercash authentication type provided by Cybercase';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Avansert søk';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Velg alle kategorier';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Søk i all produktinfo';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Kun produktnavn';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Kun produsent/leverandør';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Kun produktbeskrivelse';
	var $_PHPSHOP_SEARCH_AND = 'og';
	var $_PHPSHOP_SEARCH_NOT = 'ikke';
	var $_PHPSHOP_SEARCH_TEXT1 = 'Første drop-down-liste lar deg begrense søket til en kategori.';


	var $_PHPSHOP_SEARCH_TEXT2 = 'Du kan videre legge til et nøkkelord  og velg deretter OG eller IKKE.';



	var $_PHPSHOP_ORDERBY = 'Sorter etter';
	var $_PHPSHOP_CUSTOMER_RATING = 'Kunderangering';
	var $_PHPSHOP_TOTAL_VOTES = 'Totale stemmer';
	var $_PHPSHOP_CAST_VOTE = 'Vennligst gi din stemme';
	var $_PHPSHOP_RATE_BUTTON = 'Ranger';
	var $_PHPSHOP_RATE_NOM = 'Rangering';
	var $_PHPSHOP_REVIEWS = 'Kundekommentarer';
	var $_PHPSHOP_NO_REVIEWS = 'Det er foreløpig ingen kommentarer for dette produktet.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Bli den første til å kommentere...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Vennligst logg deg inn for å legge til en kommentar.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Vennligst ranger produktet for å fullføre din rangering!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Vennligst skriv litt mer i din kommentar. Den må inneholde minimum 100 tegn.';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Vennligst skriv litt kortere kommentar - Maksimum 2000 tegn er tillatt!';
	var $_PHPSHOP_WRITE_REVIEW = 'Skriv en kommentar for dette produktet!';
	var $_PHPSHOP_REVIEW_RATE = 'Først: Ranger produktet. Velg fra 0 (dårligst) til 5 stjerner (best).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Skriv en (kort) kommentar... (minst 100, maks 2000 tegn) ';
	var $_PHPSHOP_REVIEW_COUNT = 'Antall tegn skrevet:';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Legg til kommentar';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Du har allerede skrevet en kommentar for dette produktet. Takk skal du ha.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Takk for din kommentar.';
	var $_PHPSHOP_COMMENT = 'Kommentar';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Legg til/endre kredittkorttyper';
	var $_PHPSHOP_CREDITCARD_NAME = 'Kredittkortnavn';
	var $_PHPSHOP_CREDITCARD_CODE = 'Kredittkortkode';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Kredittkorttype';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Kredittkortliste';
	var $_PHPSHOP_UDATE_ADDRESS = 'Oppdater adresse';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Handle mer';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Din ordre er sendt!';
	var $_PHPSHOP_ORDER_LINK = 'Klikk på lenken for å se ordredetaljer.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'Status på din ordre nr.  {order_id} er endret.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'Ny status er:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'For å se ordredetaljer, vennligst klikk på følgende lenke (eller kopier/lim inn adressen i nettleseren):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Ordrestatus endret: Din ordre {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Gi kunden beskjed?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Vennligst endre ordrestatus først!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Rabatt for standard kundegruppe (i %)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'En positiv pris X betyr: Dersom kundegruppen ikke har en pris for dette produktet vil standardpris være beregningsgrunnlaget X %. En negativ pris har motsatt effekt';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Produktrabatt';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Rabatter';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Legg til/endre produktrabatt';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Rabattbeløp';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Skriv rabattbeløpet';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Rabattype';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Prosent';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Totalt';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Skal rabatten være en prosentsats eller et kronebeløp?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Startdato for rabatt';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Bestemmer datoen rabatten starter.';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Sluttdato for rabatt';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Bestemmer datoen rabatten slutter.';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Du kan bruke skjemaet for produktrabatt for å legge til en rabatt!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Du sparer';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Vis stort bilde';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Oppsett for visning av pris';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Symbol for myntenhet';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Du kan også bruke HTML her (eks. ?,?,?,kr,...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Desimaler';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Antall desimaler (kan være 0)<br /><b> Utfører avrunding dersom varen har flere desimaler</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Desimaltegn';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Tegn du ønsker som desimalsymbol';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Tusendelstegn';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Tegn du ønsker som skilletegn for tusen (kan være tomt).';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Positivt format';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Viser formatet som brukes for å vise positive verdier.<br />(Symb står for kroneverdi symbol)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Negativt format';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Viser formatet som brukes for å vise negative verdier.<br />(Symb står for kroneverdi symbol)';
	var $_PHPSHOP_OTHER_LISTS = 'Vis andre produkter';
	var $_PHPSHOP_MORE_IMAGES = 'Vis flere bilder';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Tilgjengelige bilder for';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Tilbake til produktdetaljer';
	var $_PHPSHOP_FILEMANAGER = 'Filkontroll';
	var $_PHPSHOP_FILEMANAGER_LIST = 'Filkontroll::Produktliste';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Legg til bilde/fil';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Tilknyttede bilder';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'Er det nedlastbart?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Tilknyttede filer (dataark,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Publisert?';
	var $_PHPSHOP_FILES_LIST = 'Filkontroll::Bilde/fil liste for';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Filnavn';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'Filtittel';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Filtype';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Rediger filtilgang';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Stort bilde';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Lite bilde';
	var $_PHPSHOP_FILES_FORM = 'Last opp en fil for';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Gjeldende fil';
	var $_PHPSHOP_FILES_FORM_FILE = 'Fil';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Bilde';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Last opp til';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'Standard sti for produktbilde';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Spesifiser hvor filen er';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Nedlastingssti (eks. for når du selger nedlastbare ting!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Autogenerere lite bilde?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Filen er publisert?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Tittel for fil (som kunden ser)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Filbeskrivelse';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'Fil URL (valgfri)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Venligst velg en gyldig sti';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'Lite bilde ble vellykket lagret!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'Kunne ikke lage lite bilde!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Fil/bilde opplastingsfeil';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Kunne ikke slette stort bilde';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Stort bilde ble slettet!';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Kunne ikke slette lite bilde (kanskje det ikke eksisterer?): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Lite bilde ble slettet!';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Kunne ikke slette filen!';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Filen ble slettet!';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Beklager, kan ikke finne filen!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Kan ikke finne bildet!';
	var $_PHPSHOP_COUPON_MOD = 'Rabatt/gavekort';
	var $_PHPSHOP_COUPONS = 'Rabatter/gavekort';
	var $_PHPSHOP_COUPON_LIST = 'Rabatt/gavekortliste';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Rabatten/gavekortet er allerede blitt benyttet.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Rabatt/gavekort benyttet, Takk skal du ha.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Dersom du har en rabatt/gavekortkode, vennligst skriv den inn under:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Send';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Rabatt/gavekortkoden eksisterer, vennligst prøv igjen.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Oppdater rabatt/gavekort';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Velg en rabatt/gavekortkode for å endre/slette den.';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Kode';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Prosent eller totalt';
	var $_PHPSHOP_COUPON_TYPE = 'Rabatt type';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'En gaverabatt slettes når den er brukt på en ordre. En permanent rabatt kan brukes flere ganger.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Gaverabatt';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Permanent rabatt';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Verdi';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Slett kode';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Er du sikker på at du vil slette denne rabatt/gavekortkoden?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Vennligst fullfør alle felt.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'Rabattverdi må være ett tall ';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Ny rabatt/nytt gavekort';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Rabatt/gavekortkode';
	var $_PHPSHOP_COUPON_PERCENT = 'Prosent';
	var $_PHPSHOP_COUPON_TOTAL = 'Totalt';
	var $_PHPSHOP_COUPON_VALUE = 'Verdi';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Rabatt/gavekortkode er lagret';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Lagre rabatt/gavekort';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Rabatter/gavekort';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Finner ikke rabatt/gavekortkode, prøv igjen.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Tillat bruk av rabatter/gavekort';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Om du tillater bruk av rabatter/gavekort kan kunder med et rabattnummer bruke denne når de handler.';
	var $_PHPSHOP_FREE_SHIPPING = 'Gratis frakt';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Frakt er gratis på denne ordren!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Minste beløp for gratis frakt';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Minste beløp (inkludert MVA!) for gratis frakt';


	var $_PHPSHOP_YOUR_STORE = 'Din butikk';
	var $_PHPSHOP_CONTROL_PANEL = 'Kontrollpanel';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF-knapp';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Vis/skjul PDF-knapp i butikken';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Må akseptere salgs- og leveringsbetingelser på alle ordrer?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Velges dersom du vil at kundene må akseptere salgs- og leveringsbetingelser på alle ordrer før "Fullfør ordre".';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Bankkontotype ';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Sjekk';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Firmasjekk';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Besparelse';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Krever fakturering?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Velges dersom fakturering er aktuelt.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Intern feil under forespørsel';
	var $_PHPSHOP_PAYMENT_ERROR = 'Feil under gjennomføring av betaling';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Betaling ble vellykket utført';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS was not able to process the Shipping Rate Request.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Garantert leveringstid';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'UPS Pickup Method';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'How do you give packages to UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'UPS Packaging?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Velg standard forpakning';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Residential Delivery?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Residential (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Commercial Delivery (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Quote for Residential (RES) or Commercial Delivery (COM).';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'behandlings gebyr';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Behandlingsgebyr for denne forsendelsesmåten';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Skatteklasse';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Use the following tax class on the shipping fee.';
	var $_PHPSHOP_ERROR_CODE = 'Feilkode';
	var $_PHPSHOP_ERROR_DESC = 'Feilbeskrivelse';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Show / Change the Transaction Key';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Show/Change the Password/Transaction Key';
	var $_PHPSHOP_TYPE_PASSWORD = 'Please type in your User Password';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Gjeldende passord';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Current Transaction Key';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'The Transaction key was successfully changed.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Request/Capture Credit Card Code Value (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Check for a valid CVV2/CVC2/CID value (three- or four-digit number on the back of a credit card, on the Front of American Express Cards)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Please type in the three- or four-digit number on the back of your credit card (On the Front of American Express Cards)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'You need to enter your Credit Card Code to proceed.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'EITHER Fill in a Filename';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'NOTE: Here you can fill in a FileName. <strong>If you fill in a Filename here, no Files will be uploaded!!! You will have to upload it via FTP manually!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'OR Upload new File';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'You can upload a local file. This file will be the Product you sell. An existing file will be replaced.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Fill in any text here that will be displayed to the customer on the product flypage.<br />e.g.: 24h, 48 hours, 3 - 5 days, On Order.....';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'OR select an Image to be displayed on the Details Page (flypage).<br />The images reside in the directory <i>/components/com_phpshop/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Attribute List';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Examples for the Attribute List Format:</h4>
        <pre>Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00];AndSoOn,..,..</pre>
        <h4>Inline price adjustments for using the Advanced Attributes modification:</h4>
        <pre>
        + == Add this amount to the configured price.<br />
        - == Subtract this amount from the configured price.<br />
        = == Set the product\'s price to this amount.
		</pre>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Custom Attribute List';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Examples for the Custom attribute List Format:</h4>
        <pre>Name;Extras;...</pre>';
	var $_PHPSHOP_MULTISELECT = 'Velg flere ved å holde inne ctrl-tasten mens du klikker';
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
	var $_PHPSHOP_RELATED_PRODUCTS = 'Relaterte produkter';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'You can build up Product Relations using this List. Just select one or more products here and then they are <strong>Related Products</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Relaterte produkter';
	var $_PHPSHOP_IMAGE_ACTION = 'Bildebehandling';
	var $_PHPSHOP_NONE = 'Ingen';
	var $_PHPSHOP_ORDER_HISTORY = 'Ordrehistorikk';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Kommentar';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Kommentar til din ordre';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Inkluder denne kommentaren?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Dato lagt til';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Beskjed til kunde?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Status for ordre endret';
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
	var $_PHPSHOP_PARAMETERS_LBL = 'Parametre';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Produkttype';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Vis produkttyper';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Legg til/endre produkttype';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Produkttype for';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Vis produkttyper';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Legg til produkttype for';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Legg til produkttype';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Produkttype';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Produkttype, navn';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Produkttype, beskrivelse';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Parameter';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Produkttype, informasjon';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Publiser?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Produkttype, side for å bla gjennom';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Produkttype, detaljside (flypage)';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Parameter for produkttype';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Parameterinfo';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Produkttype finnes ikke';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Parameternavn';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Dette vil bli kolonnetittel. Navnet må være unikt, uten mellomrom<br />For eksempel: hoved_type';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Parameter, etikett';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Parameter, beskrivelse';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Parameter, type';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Heltall';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Tekst';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Kort tekst';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Flyt';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Bokstav';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Dato og tid';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Dato';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'ÅÅÅÅ-MM-DD';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Tid';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'TT:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Break Line';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Flere verdier';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Mulige verdier';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Vis mulige verdier som "Velg flere"?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>If Possible Values are set, Parameter can have only this values. Example for Possible Values:</strong><br /><span class="sectionname">Steel;Wood;Plastic;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Standardverdi';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'For Parameter Default Value use this format:<ul><li>Date: YYYY-MM-DD</li><li>Time: HH:MM:SS</li><li>Date & Time: YYYY-MM-DD HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Enhet';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Avansert søk etter parameter';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Parametersøk';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Vil du finne produkter etter tekniske parameter?<br />Du kan bruke en forhåndslaget form:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Beklager, det er ingen kategori for søket.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Beklager, det er ingen publisert produkttype med dette navnet.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'Er lik';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'Er ikke lik';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Fulltekstsøk';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Alle valgte';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'En av de valgte';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Nullstill';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Søk i kategori';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Endre parameter';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Stigende rekkefølge';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Synkende rekkefølge';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Parameter for kategori';
	var $_PHPSHOP_FEE = 'Gebyr';
	var $_PHPSHOP_PRODUCT_CLONE = 'Dupliser produkt';
	var $_PHPSHOP_CSV_SETTINGS = 'Innstillinger';
	var $_PHPSHOP_CSV_DELIMITER = 'Skilletegn';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Lås bokstavfelt';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Last opp en CSV-fil';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Legg til en CSV-fil';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Les fra filmappe';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Les CSV-fil fra tjener';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Eksporter til CSV';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Velg feltsorteringstype';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Standard sortering';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'Min sortering';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Eksporter alle produkter til CSV-fil';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'Innstillinger for CSV-import/eksport ';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Lagre endringer';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Feltnavn';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'Standardverdi';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Feltsortering';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Nødvendig felt?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Import/eksport';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Legg til et nytt felt';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Dokumentasjon';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Beklager, kan ikke finne produktet du søker!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Vis produkter som ikke er på lager';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Når valgt vil produkter som ikke er på lager vises. Om ikke valgt vil disse produktene være usynlige til de er på lager.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'Antall {unit}er i pakken:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'Antall {unit}er i boks:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Skjul produkter som ikke er på lager';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Kampanjeprodukter';
	var $_PHPSHOP_FEATURED = 'Kampanje';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Tilbake til land';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Tilbake til filkontroll';
	var $_PHPSHOP_ADD_STATE = 'Legg til fylke';
	var $_PHPSHOP_LIST_STATES = 'Vis fylker';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'Kampanje- og rabatterte produkter';
	var $_PHPSHOP_SHOW_FEATURED = 'Kampanjeprodukter';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'Rabatterte produkter';
	var $_PHPSHOP_FILTER = 'Filter';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Tilbake til hovedside';
	var $_PHPSHOP_EXPAND_TREE = 'Vis tre';
	var $_PHPSHOP_COLLAPSE_TREE = 'Skjul tre';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Rabattert pris';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Her kan du overstyre rabattinstillingene, fyll inn en spesiell rabatt for dette produktet.<br/>
       Nettbutikken vil automatisk generere en ny post ut fra den rabatterte prisen.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Pris';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'Butikken er nede?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'Om du velger dette vil det komme en melding om at butikken er nede.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Melding når butikken er nede';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Tabellprefiks for butikkens tabeller';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'Dette er <strong>vm</strong> etter standard';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Vis sidenavigasjon over produktlisten?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Slår av eller på sidenavigasjon over listen med produkter.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Vis antall produkter?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Vis antall produkter i en kategori som \"Kategori (4)\"?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'Stil på knappen: \"Legg i kurven\"';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'Tillat dynamisk generering av lite bilde?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'Om valgt lages det automatisk et lite bilde for visning i produktlisten. Dette bildet endres til å passe inn i den størrelsen du angir under.';


	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'Bredde på lite bilde';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'Mål for <strong>bredde</strong> på lite bilde';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Høyde på lite bilde';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'Mål for <strong>høyde</strong> på lite bilde';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Du må velge forsendelsesmåte.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Prisoppsett';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Kundegruppe å vise priser til';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'Valgt kundegruppe og alle grupper med høyere tilgangsnivå vil kunne se produktpriser.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Vis \"inkl. mva\" når valgt?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'Om valgt vil kunden se \"inkl. mva\" Når priser er vist inkl. mva.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'Vis pris for pakking?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'Om valgt vil prisen hentes fra produktets enhets- og pakke-verdi. Om ikke valgt vil prisen vises som normalt: <strong>Pris: kr xxxx.xx</strong>';


	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'Flere kjerneinnstillinger';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Kjerneinnstillinger';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Andre innstillinger';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'MVA-oppsett';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Startantall';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Sluttantall';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'Innstillinger for kunderegistrering';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'Tillat kunderegistrering?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'Ny kontaktaktivering nødvendig?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Bruk skjult kunderegistrering?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'Om valgt trenger ikke kundene å fylle inn brukernavn og passord for ny konto. E-postadressen brukes som brukernavn, og et tilfeldig passord blir tildelt. Opplysningene blir sendt per e-post til kunden.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Hei %s,

Takk for at du regsitrerte deg hos %s. Din kundekonto ble opprettet.
Du kan nå logge deg på hos %s ved å benytte følgende brukernavn og passord:

Brukernavn - %s
Passord - %s 
';
	var $_PEAR_LOG_CRIT = 'Kritisk';
	var $_PEAR_LOG_ERR = 'Feil';
	var $_PEAR_LOG_WARNING = 'Advarsel';
	var $_PEAR_LOG_INFO = 'Info';
	var $_PEAR_LOG_TIP = 'Tips';
	var $_PEAR_LOG_ALERT = 'Alert';
	var $_PEAR_LOG_EMERG = 'Emergency';
	var $_PEAR_LOG_NOTICE = 'Merk';
	var $_PEAR_LOG_DEBUG = 'Feilsøk';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'Aktiver PayFlow Pro betaling?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'Check to use VeriSign\'s PayFlow Pro with VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'Testmodus ?';
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
	var $_VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX = 'The Session Save Path %s is not writable. Please correct this! The shop is temporarily trying to use the %s instead.';
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
	var $_ITEM_PREVIOUS = 'forrige';
	var $_ITEM_NEXT = 'neste';
	var $_CMN_OK = 'Ok';
	var $_CMN_CONTINUE = 'Fortsett';
	var $_CMN_CANCEL = 'Avbryt';
	var $_BUTTON_SEND_REG = 'Send registrering';
	var $_CONTACT_FORM_NC = 'Vennligst sørg for at skjemaet er komplett utfylt, og at opplysningene er korrekte.';
	var $_CMN_REQUIRED = 'Må fylles ut';
	var $_CMN_NEW = 'Ny';
	var $_CMN_SAVE = 'Lagre';
	var $_CMN_NEW_ITEM_LAST = 'New items default to the last place. Ordering can be changed after this item is saved.';
	var $_CMN_OPTIONAL = 'Valgfri';
	var $_E_APPLY = 'Bekreft';
	var $_E_IMAGES = 'Bilder';
	var $_URL = 'URL:';
	var $_SEL_CATEGORY = 'Velg en kategori';
	var $_E_REMOVE = 'Fjern';
	var $_PN_LT = '<';
	var $_PN_RT = '>';
	var $_PN_PAGE = 'Side';
	var $_PN_OF = 'av';
	var $_PN_START = 'Start';
	var $_PN_PREVIOUS = 'Forrige';
	var $_PN_NEXT = 'Neste';
	var $_PN_END = 'Slutt';
	var $_PN_DISPLAY_NR = 'Vis antall';
	var $_PN_RESULTS = 'Resultat';
	var $_CMN_PRINT = 'Utskrift';
	var $_CMN_PDF = 'PDF';
	var $_CMN_EMAIL = 'E-post';
	var $_BACK = 'Tilbake';
	var $_USERNAME = 'Brukernavn';
	var $_PASSWORD = 'Passord';
	var $_BUTTON_LOGIN = 'Logg inn';
	var $_REGISTER_UNAME = 'Brukernavn';
	var $_REGISTER_EMAIL = 'E-post';
	var $_REGWARN_NAME = 'Vennligst registrer ditt navn.';
	var $_REGWARN_UNAME = 'Vennligst velg et brukernavn.';
	var $_REGWARN_MAIL = 'Vennligst skriv en gyldig e-postadresse.';
	var $_SEND_SUB = 'Kontodetaljer for %s ved %s';
	var $_ASEND_MSG = 'Hei %s,
	
	En ny kunde har registrert seg hos %s.
	Informasjon om kunden:
	
	Navn - %s
	E-post - %s
	Brukernavn - %s
	
	Vennligst ikke svar på denne meldingen. Den er automatisk generert, og kun til informasjon.';
	var $_REG_COMPLETE = '<div class="componentheading">Du er nå registrert!</div><br />Nå kan du logge inn.';
	var $_REG_COMPLETE_ACTIVATE = '<div class="componentheading">Du er nå registrert!</div><br />Din kundekonto har blitt opprettet, og en bekreftelse er sendt til deg på e-postadressen du oppga. Kontoen aktiveres ved å klikke på lenken i e-posten.';
	var $_DATE_FORMAT_LC = '%A, %d %B %Y';
	var $_LAST_UPDATED = 'Sist oppdatert';
	var $_NOT_AUTH = 'Ingen tilgang.';
	var $_DO_LOGIN = 'Du må logge deg inn.';
	var $_VALID_AZ09 = 'Vennligst skriv et gyldig %s.  Ingen mellomrom, og mer enn %d tegn (0-9,a-z,A-Z)';
	var $_CMN_PUBLISHED = 'Publisert';
	var $_CMN_UNPUBLISHED = 'Upublisert';
	var $_MORE = 'Mere...';
	var $_EMPTY_CATEGORY = 'Denne kategorien er for øyeblikket tom.';
	var $_BUTTON_LOGOUT = 'Logg ut';
	var $_NO_ACCOUNT = 'Ingen konto ennå?';
	var $_CREATE_ACCOUNT = 'Opprett en';
	var $_REGWARN_PASS = 'Vennligst skriv inn et gyldig passord.  Ingen mellomrom, og mer enn 6 tegn (0-9,a-z,A-Z)';
	var $_REGWARN_VPASS1 = 'Vennligst bekreft passordet.';
	var $_REGWARN_VPASS2 = 'Passord og bekreftelse er ikke lik, vennligst prøv igjen.';
	var $_USEND_MSG_ACTIVATE = 'Hei %s,

Takk for at du registrerte deg på %s. Din konto er opprettet men må aktiveres før du kan bruke den.
Klikk på følgende lenke for å aktivere kontoen, eller kopier og lim den inn i din nettleser:
%s

Etter aktivering kan du logge inn på %s med følgende brukernavn og passord:

Brukernavn - %s
Passord - %s';
	var $_USEND_MSG = 'Hei %s,

Takk for at du registrerte deg ved %s.

Du kan nå logge deg inn til %s ved å benytte brukernavn og passord du registrerte deg med.';
	var $_PROMPT_PASSWORD = 'Glemt passordet?';
	var $_HI = 'Hei';
	var $_NEW_USER_MESSAGE_SUBJECT = 'Detaljer om ny bruker';
	var $_NEW_USER_MESSAGE = 'Hallo %s,


Du har blitt lagt til som en bruker ved %s av en administrator.

Denne e-posten inneholder ditt brukernavn og passord for å logge inn på %s

Brukernavn - %s
Passord - %s


Vennligst ikke svar på denne beskjeden. Den er automatisk generert, og kun til informasjon.';
	var $_REMEMBER_ME = 'Husk meg';
	var $_REGISTER_TITLE = 'Registrering';
	var $_JAN = 'Januar';
	var $_FEB = 'Februar';
	var $_MAR = 'Mars';
	var $_APR = 'April';
	var $_MAY = 'Mai';
	var $_JUN = 'Juni';
	var $_JUL = 'Juli';
	var $_AUG = 'August';
	var $_SEP = 'September';
	var $_OCT = 'Oktober';
	var $_NOV = 'November';
	var $_DEC = 'Desember';
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
