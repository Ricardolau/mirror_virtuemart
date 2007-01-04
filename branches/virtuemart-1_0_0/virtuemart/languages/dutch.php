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
* to the GNu General Public License, and as distributed it includes or
* is derivative of works licensed under the GNu General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
class vmLanguage extends vmAbstractLanguage {
	var $_PHPSHOP_MENU = 'Menu';
	var $_PHPSHOP_CATEGORY = 'Categorie';
	var $_PHPSHOP_CATEGORIES = 'Categorieën';
	var $_PHPSHOP_SELECT_CATEGORY = 'Selecteer een categorie:';
	var $_PHPSHOP_ADMIN = 'Administratie';
	var $_PHPSHOP_PRODUCT = 'Product';
	var $_PHPSHOP_LIST = 'Lijst';
	var $_PHPSHOP_ALL = 'Alles';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Toon alle producten';
	var $_PHPSHOP_VIEW = 'Bekijk';
	var $_PHPSHOP_SHOW = 'Toon';
	var $_PHPSHOP_ADD = 'Toevoegen';
	var $_PHPSHOP_UPDATE = 'Update';
	var $_PHPSHOP_DELETE = 'Verwijder';
	var $_PHPSHOP_SELECT = 'Selecteer';
	var $_PHPSHOP_SUBMIT = 'Verstuur';
	var $_PHPSHOP_RANDOM = 'Willekeurige Producten';
	var $_PHPSHOP_LATEST = 'Nieuwste Producten';
	var $_PHPSHOP_HOME_TITLE = 'Home';
	var $_PHPSHOP_CART_TITLE = 'Mandje';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Afrekenen';
	var $_PHPSHOP_LOGIN_TITLE = 'Aanmelden';
	var $_PHPSHOP_LOGOUT_TITLE = 'Afmelden';
	var $_PHPSHOP_BROWSE_TITLE = 'Bladeren';
	var $_PHPSHOP_SEARCH_TITLE = 'Zoeken';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Account Onderhoud';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Navigatie';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Afdeling';
	var $_PHPSHOP_INFO = 'Informatie';
	var $_PHPSHOP_BROWSE_LBL = 'Overzicht';
	var $_PHPSHOP_PRODUCTS_LBL = 'Producten';
	var $_PHPSHOP_PRODUCT_LBL = 'Product';
	var $_PHPSHOP_SEARCH_LBL = 'Zoek';
	var $_PHPSHOP_FLYPAGE_LBL = 'Meer informatie';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Product Zoeken';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Product Naam';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Product Categorie';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Omschrijving';
	var $_PHPSHOP_CART_SHOW = 'Bekijk Mandje';
	var $_PHPSHOP_CART_ADD_TO = 'Toevoegen';
	var $_PHPSHOP_CART_NAME = 'Naam';
	var $_PHPSHOP_CART_SKU = 'Art.Nr.';
	var $_PHPSHOP_CART_PRICE = 'Prijs';
	var $_PHPSHOP_CART_QUANTITY = 'Aantal';
	var $_PHPSHOP_CART_SUBTOTAL = 'Subtotaal';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Toevoegen';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Afleveradres';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'uw zoekopdracht heeft geen resultaten opgeleverd.<br />';
	var $_PHPSHOP_PRICE_LABEL = 'Prijs: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Toevoegen';
	var $_PHPSHOP_NO_CUSTOMER = 'Sorry, maar u bent geen geregistreerde klant. Registreert u zich eerst voordat u verder winkelt.';
	var $_PHPSHOP_DELETE_MSG = 'Weet u zeker dat u dit wenst te verwijderen?';
	var $_PHPSHOP_THANKYOU = 'Bedankt voor uw bestelling.';
	var $_PHPSHOP_NOT_SHIPPED = 'Nog niet verzonden.';
	var $_PHPSHOP_EMAIL_SENDTO = 'Een bevestigingsemail is verzonden naar';
	var $_PHPSHOP_ERROR = 'ERROR';
	var $_PHPSHOP_MOD_NOT_REG = 'Module niet geregistreerd.';
	var $_PHPSHOP_MOD_ISNO_REG = 'is geen geldige VirtueMart module.';
	var $_PHPSHOP_MOD_NO_AUTH = 'uw heeft geen bevoegdheid om de gewenste module op te vragen.';
	var $_PHPSHOP_PAGE_404_1 = 'Pagina bestaat niet.';
	var $_PHPSHOP_PAGE_404_2 = 'De opgegeven bestandsnaam bestaat niet. Kan het bestand niet vinden:';
	var $_PHPSHOP_PAGE_403 = 'Niet genoeg toegangsrechten';
	var $_PHPSHOP_FUNC_NO_EXEC = 'u heeft geen bevoegdheid om de handeling uit te voeren';
	var $_PHPSHOP_FUNC_NOT_REG = 'Functie niet geregistreerd';
	var $_PHPSHOP_FUNC_ISNO_REG = 'is geen geldige VirtueMart functie.';
	var $_PHPSHOP_ADMIN_MOD = 'Administratie';
	var $_PHPSHOP_USER_LIST_MNU = 'Toon de gebruikers';
	var $_PHPSHOP_USER_LIST_LBL = 'Gebruikerslijst';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Gebruikersnaam';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Volledige naam';
	var $_PHPSHOP_USER_LIST_GROUP = 'Groep';
	var $_PHPSHOP_USER_FORM_MNU = 'Gebruiker Toevoegen';
	var $_PHPSHOP_USER_FORM_LBL = 'Toevoegen/Update Gebruiker Informatie';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Facturatiegegevens';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Afleveradressen';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Adres Toevoegen';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'Geen afleveradressen';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Verkorte Code';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Voornaam';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Achternaam';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Tussenvoegsel';
	var $_PHPSHOP_USER_FORM_TITLE = 'Titel';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Gebruikersnaam';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Wachtwoord';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Bevestig wachtwoord';
	var $_PHPSHOP_USER_FORM_PERMS = 'Permissies';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Klantnummer / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Bedrijfsnaam';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Adres 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Adres 2';
	var $_PHPSHOP_USER_FORM_CITY = 'Woonplaats';
	var $_PHPSHOP_USER_FORM_STATE = 'Provincie';
	var $_PHPSHOP_USER_FORM_ZIP = 'Postcode';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_USER_FORM_PHONE = 'Telefoon';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'GSM';
	var $_PHPSHOP_USER_FORM_FAX = 'Fax';
	var $_PHPSHOP_USER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Toon Modules';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Module Ljist';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Module Naam';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Module Permisies';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Functies';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Lijst Volgorde';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Module Toevoegen';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Module Informatie';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Module Label (voor Topmenu)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Module Naam';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Module Permissies';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Module Koptekst';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Module Voettekst';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Module tonen in Administratie Menu?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Volgorde';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Module Omschrijving';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'Taal Code';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Taal Bestand';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Laat Functies Zien';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Functie Lijst';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Functie Naam';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Klasse Naam';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Klasse Methode';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Permissies';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Functie Toevoegen';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Functie Informatie';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Functie Naam';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Klasse Naam';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Class Method';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Functie Permissies';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Functie Beschrijving';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Laat Valuta Zien';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Valuta Lijst';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'Valuta Toevoegen';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Valuta Naam';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'Valuta Code';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Laat Landen Zien';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Landen Lijst';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Land Toevoegen';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Land Naam';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Land Code (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Land Code (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Provincie Lijst';
	var $_PHPSHOP_STATE_LIST_LBL = 'Provincie Lijst Voor:';
	var $_PHPSHOP_STATE_LIST_ADD = 'Provincie Toevoegen/Updaten';
	var $_PHPSHOP_STATE_LIST_NAME = 'Provincie Naam';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'Provincie Code (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'Provincie Code (2)';
	var $_PHPSHOP_ADDRESS = 'Adres';
	var $_PHPSHOP_CONTINUE = 'Doorgaan';
	var $_PHPSHOP_EMPTY_CART = 'uw mandje is momenteel leeg.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Ping InterShipper Server';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'InterShipper-Server Ping ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'InterShipper Ping Mislukt';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'InterShipper Ping Succesvol';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Vervoerder';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Reactie<BR>Tijd';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'sec.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Bekijk Verzendmethoden';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Actieve Verzendmethoden';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Verzendmethoden';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Actief';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Verwerkingskosten';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Verwerkingstermijn';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'vaste prijs';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'procent';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'dagen';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Zware Pakketten';
	var $_PHPSHOP_ISSHIP_FORM_MNU = ' Configureren van de Verzendmethoden';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Verzendmethode toevoegen';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Verzendmethode configureren';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Vernieuwen';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Verzendmethode';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Activeren';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Verwerkingskosten';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Verwerkingstermijn';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'vaste prijs';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'procent';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'dagen';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Zware Pakketten';
	var $_PHPSHOP_ORDER_MOD = 'Bestellingen';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Bevestig Bestelling';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Annuleer Bestelling';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Print Bestelling';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Verwijder Bestelling';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Bekijk Bestellingen';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Bestellingen Lijst';
	var $_PHPSHOP_ORDER_LIST_ID = 'Ordernummer';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Orderdatum';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Laatste Wijziging';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Status';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'SubTotaal';
	var $_PHPSHOP_ORDER_ITEM = 'Order Items';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Koop Order';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Ordernummer';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Orderdatum';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Orderstatus';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Klantinformatie';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Factuurinformatie';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Verzendinformatie';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Factuur Aan:';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Verzend Naar';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Naam';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Bedrijf';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Adres 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Adres 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Woonplaats';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Provincie';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'Postcode';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Land';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Telefoon';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Fax';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'E-mail';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Order Items';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Aantal';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Aantal';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'Art. Nr.';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Prijs';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Totaal';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'SubTotaal';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'BTW';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Verzending- en afhandelingskosten';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Verzendingsbelasting';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Betalingsmethode';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Account Naam';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Account Nummer';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Verloop Datum';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Betalingslog';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Verzend Informatie';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Betalingsinformatie';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Vervoerder';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Verzendingsmethode';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Verzendingsdatum';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Verzendingsprijs';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Bekijk Order Status Types';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Order Status Type Toevoegen';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Order Status Code';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Order Status Naam';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Order Status';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Order Status Code';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Order Status Naam';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Bekijk Order';
	var $_PHPSHOP_PRODUCT_MOD = 'Producten';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Huidig Product';
	var $_PHPSHOP_CURRENT_ITEM = 'Huidig Item';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Product Inventaris';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Bekijk Inventaris';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Prijs';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Nummer';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Gewicht';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Bekijk Producten';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Producten Lijst';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Producten Naam';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'Art. Nr.';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Toon';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Zoek Producten';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'gewijzigd';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'met gewijzigde prijs';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'zonder prijs';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'Na';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Voor';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Product Toevoegen';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Wijzig dit product';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Bekijk de huidige product pagina in de winkel';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Voeg Item Toe';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Voeg een ander Item Toe';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Nieuw Product';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Product Wijzigen';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Product Informatie';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Product Status';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Product Afmetingen en Gewicht';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Product Afbeeldingen';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Nieuw Item';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Item Wijzigen';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Item Informatie';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Item Status';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Item Afmetingen en Gawicht';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Item Afbeeldingen';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Terug naar het Hoofd Product';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'Om huidige afbeelding te veranderen, type het pad naar nieuwe afbeelding.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Verwijder huidige afbeelding';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Product Items';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Item Attributen';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Weet u zeker dat u het product wilt verwijderen\\\\en de Items die er bij horen?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Weet u zeker dat u het item wilt verwijderen?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Verkoper';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Fabrikant';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'Art. Nr.';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Naam';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Categorie';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Product Prijs (incl.)';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Product Prijs (excl.)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Product Omschrijving';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Korte Omschrijving';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'In Voorraad';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'Op Bestelling';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Beschikbaarheids Datum';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'Speciaal aan';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Kortingstype';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Tonen?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Lengte';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Breedte';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Hoogte';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Maateenheid';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Gewicht';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Maateenheid';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Kleine afbeelding';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Grote Afbeelding';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'kilogram';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'centimeter';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Eenheid';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'stuk';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Aantal in de Verpakking';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Hier kan u het aantal eenheden in de verpakking invullen. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Eenheden in Doos';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Hier kan u het aantal eenheden in een doos invullen. (max. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Product Toevoeging Resultaat';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Product Update Resultaat';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Item Toevoeging Resultaat';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Item Update Resultaat';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Gebruik CSV upload';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Product Mappen';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Bekijk Categorieën';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Categorie Overzicht';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Categorie Toevoegen';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Categorie Informatie';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Categorie Naam';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Hoofd';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Categorie Omschrijving';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Publiceren?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Categorie Pagina';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Bekijk Opties';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Optie Lijst voor';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Optie Naam';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Volgorde';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Optie Toevoegen';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Optie Formulier';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Nieuwe Optie voor Product';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Optie voor Product updaten';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Nieuwe Optie voor Item';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Update Optie voor Item';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Optie Naam';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Bekijk Orders';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Bekijk Prijzen';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Prijs Lijst';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Prijs voor';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Groep Naam';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Prijs';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Valuta';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Prijs Toevoegen';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Prijs Informatie';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Nieuwe Prijs voor Product';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Prijs Updaten voor Product';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Nieuwe Prijs voor Item';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Update Prijs voor Item';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Prijs';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Kopers Groep';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Rapporten';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Individuele Product Overzicht';
	var $_PHPSHOP_RB_SALE_TITLE = 'Verkoop Overzicht';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Verkoopsactiviteit Overzicht';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Bepaal Periode';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Maandelijks';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Wekelijks';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Dagelijks';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Deze Maand';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'Vorige Maand';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'Laatste 60 dagen';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'Laatste 90 dagen';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Start op';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Tot en met';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Bekijk geselecteerde periode';
	var $_PHPSHOP_RB_REPORT_FOR = 'Verslag voor';
	var $_PHPSHOP_RB_DATE = 'Datum';
	var $_PHPSHOP_RB_ORDERS = 'Bestellingen';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Totaal items verkocht';
	var $_PHPSHOP_RB_REVENUE = 'Omzet';
	var $_PHPSHOP_RB_PRODLIST = 'Product Lijst';
	var $_PHPSHOP_SHOP_MOD = 'Winkel';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Kleine Afbeelding';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Prijs';
	var $_PHPSHOP_ORDER_STATUS_P = 'In behandeling';
	var $_PHPSHOP_ORDER_STATUS_C = 'Bevestigd';
	var $_PHPSHOP_ORDER_STATUS_X = 'Geannuleerd';
	var $_PHPSHOP_ORDER_BUTTON = 'Bestel';
	var $_PHPSHOP_SHOPPER_MOD = 'Klanten';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Bekijk Klanten';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Klanten Lijst';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Gebruikersnaam';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Volledige naam';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Groep';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Klant Toevoegen';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Klant Informatie';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Facturatiegegevens';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Informatie';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Verzendingsgegevens';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Adres Toevoegen';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Nickname Adres';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Gebruikersnaam';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Voornaam';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Achternaam';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Tussenvoegsel';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Titel';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Klantnaam';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Wachtwoord';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Bevestig wachtwoord';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Klant Groep';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Bedrijfsnaam';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Adres 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Adres 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Stad';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Provincie';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'Postcode';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Telefoon';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'GSM';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Fax';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Ja';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'Nee';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Bekijk Klantgroepen';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Klantgroep Lijst';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Groep Naam';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Groep Omschrijving';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Klantengroep Formulier';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Klantgroep Toevoegen';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Groep Naam';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Groep Omschrijving';
	var $_PHPSHOP_STORE_MOD = 'Winkel';
	var $_PHPSHOP_STORE_FORM_MNU = 'Bewerk Winkel';
	var $_PHPSHOP_STORE_FORM_LBL = 'Winkel Informatie';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Contact Informatie';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Grote Afbeelding';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Afbeelding uploaden';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Winkel Naam';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Bedrijfsnaam';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Adres 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Adres 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'Stad';
	var $_PHPSHOP_STORE_FORM_STATE = 'Provincie';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_STORE_FORM_ZIP = 'Postcode';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Telefoon';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Winkel Categorie';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Achternaam';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Voornaam';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Tussenvoegsel';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Titel';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Telefoon 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Telefoon 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Fax';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Afbeelding Pad';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Omschrijving';
	var $_PHPSHOP_PAYMENT = 'Betaling';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Bekijk Betalingsmethode';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Betalingsmethode Lijst';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Naam';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Code';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Korting';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Klantgroep';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Betalingsmethode Type';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Betalingsmethode Toevoegen';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Betalingsmethode Formulier';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Betalingsmethode Naam';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Klantgroep';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Korting';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Code';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Volgorde';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Payment methode type';
	var $_PHPSHOP_TAX_MOD = 'Belasting';
	var $_PHPSHOP_TAX_RATE = 'Belasting Tarieven';
	var $_PHPSHOP_TAX_LIST_MNU = 'Bekijk Belastingstarieven';
	var $_PHPSHOP_TAX_LIST_LBL = 'Belastingstarieven Lijst';
	var $_PHPSHOP_TAX_LIST_STATE = 'Belastingsregio';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Belasting Land';
	var $_PHPSHOP_TAX_LIST_RATE = 'Belastingstarief';
	var $_PHPSHOP_TAX_FORM_MNU = 'Belastingstarief toevoegen';
	var $_PHPSHOP_TAX_FORM_LBL = 'Belastingsinformatie Toevoegen';
	var $_PHPSHOP_TAX_FORM_STATE = 'Belastingsregio';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Belastingsland';
	var $_PHPSHOP_TAX_FORM_RATE = 'Belastingstarief (voor 21% => vul 0.21 in)';
	var $_PHPSHOP_VENDOR_MOD = 'Verkoper';
	var $_PHPSHOP_VENDOR_ADMIN = 'Verkopers';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Bekijk Verkopers';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Verkopers Lijst';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Verkoper Naam';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Administratie';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Verkoper Toevoegen';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Informatie Toevoegen';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Verkoper Informatie';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Contact Informatie';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Afbeelding';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Afbeelding Uploaden';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Winkelnaam Verkoper';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Bedrijfsnaam Verkoper';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Adres 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Adres 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Stad';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Provincie';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'Postcode';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Telefoon';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Verkoper Categorie';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Achternaam';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Voornaam';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Tussenvoegsel';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Titel';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Telefoon 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Telefoon 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Fax';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Afbeelding Pad';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Omschrijving';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Bekijk Verkoper Categorieën';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Verkoper Categorie Lijst';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Categorie Naam';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Categorie Omschrijving';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Verkopers';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Verkoper Categorie Toevoegen';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Verkoper Categorie Formulier';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Categorie Informatie';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Categorie Naam';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Categorie Omschrijving';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Fabrikant';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Fabrikanten';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Bekijk Fabrikanten';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Fabrikanten Lijst';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Fabrikanten Lijst';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Administratie';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'Fabrikant Toevoegen';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Informatie Toevoegen';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Fabrikant Informatie';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Fabrikant Naam';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Fabrikant Categorie';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'URL naar website Fabrikant';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Omschrijving';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Bekijk Fabrikant Categorieën';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Fabrikanten Categorie Lijst';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Categorie Naam';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Categorie Omschrijving';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Fabrikanten';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Fabrikant Categorie Toevoegen';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Fabrikant Categorie Formulier';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Categorie Informatie';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Categorie Naam';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Categorie Omschrijving';
	var $_PHPSHOP_HELP_MOD = 'Help';
	var $_PHPSHOP_CART_ACTION = 'Vernieuwen';
	var $_PHPSHOP_CART_UPDATE = 'Vernieuw de hoeveelheid in het mandje';
	var $_PHPSHOP_CART_DELETE = 'Verwijder Product uit Mandje';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Prijs';
	var $_PHPSHOP_PRODUCT_CALL = 'Contacteer ons voor een prijsopgave';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Terug';
	var $_PHPSHOP_PRODUCT_NEXT = 'Volgende';
	var $_PHPSHOP_CART_TAX = 'Belasting (BTW)';
	var $_PHPSHOP_CART_SHIPPING = 'Verzendings- en Behandelingskosten';
	var $_PHPSHOP_CART_TOTAL = 'Totaal';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Volgende';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'Registreer';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Rekeningsinformatie';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Bedrijf';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Naam';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Adres';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Telefoon';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'E-mail';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Verzendingsinformatie';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Bedrijf';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Naam';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Adres';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Telefoon';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Facturatiegegevens';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Naam creditcard houder';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Betalingsmethode';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Creditcard nummer';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Geldig tot';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Bestelling Versturen';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'Verplichte informatie wanneer men kiest voor betaling met creditcard';
	var $_PHPSHOP_ZONE_MOD = 'Zone Verzendkosten';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Bekijk Zones';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Zone Toevoegen';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Zone Toewijzen';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Land';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Huidige Zone';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Toewijzen aan Zone';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Update';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Zones Toewijzen';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Zone Naam';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Zone Omschrijving';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Zone kosten per item';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Zone kost limiet';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Zone Lijst';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Zone Naam';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Zone Omschrijving';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Zone kosten per item';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Zone kost limiet';
	var $_PHPSHOP_LOGIN_FIRST = 'Log in of registreer tot deze site eerst, a.u.b. Bedankt!';
	var $_PHPSHOP_STORE_FORM_TOS = 'Leveringsvoorwaarden';
	var $_PHPSHOP_AGREE_TO_TOS = 'Ga a.u.b. eerst akkoord met onze leveringsvoorwaarden.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Ik ga akkoord met de leveringsvoorwaarden';
	var $_PHPSHOP_LEAVE_BLANK = '(Laat leeg wanneer u hier geen eigen <br />php-file voor heeft!)';
	var $_PHPSHOP_RETURN_LOGIN = 'Terugkerende Klanten: Log In a.u.b.';
	var $_PHPSHOP_NEW_CUSTOMER = 'Nieuw hier? Vul hier a.u.b. eerst uw gegevens in';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Klant Account:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Order Informatie';
	var $_PHPSHOP_ACC_UPD_BILL = 'Hier kan u uw facturatie gegevens aanpassen.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Hier kan u uw verzendgegevens aanpassen.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Account Informatie';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Verzend Informatie';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Geen Orders Aanwezig';
	var $_PHPSHOP_ACC_BILL_DEF = '- Standaard (zelfde als facturatiegegevens)';
	var $_PHPSHOP_SHIPTO_TEXT = 'u kan verzend adressen toevoegen aan uw account. Bedenk een geschikte code of sleutelwoord (nicknaam) voor uw verzend adres.';
	var $_PHPSHOP_CONFIG = 'Configuratie';
	var $_PHPSHOP_USERS = 'Klanten';
	var $_PHPSHOP_IS_CC_PAYMENT = 'is creditcard betaling?';
	var $_PHPSHOP_SHIPPING_MOD = 'Verzending';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Verzending';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Bekijk Vervoerders';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Vervoerder Lijst';
	var $_PHPSHOP_RATE_LIST_MNU = 'Bekijk Verzendingstarieven';
	var $_PHPSHOP_RATE_LIST_LBL = 'Verzendingstarieven Lijst';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Naam';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Volgorde';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Vervoerder Toevoegen';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Vervoerder Wijzigen / Aanmaken';
	var $_PHPSHOP_RATE_FORM_MNU = 'Verzendtarief Toevoegen';
	var $_PHPSHOP_RATE_FORM_LBL = 'Verzendtarief Wijzigen / Aanmaken';
	var $_PHPSHOP_RATE_FORM_NAME = 'Verzendingstarief Beschrijving';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Vervoerder';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'Start Postcode Bereik';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Einde Postcode Bereik';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Minimaal Gewicht';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Maximum Gewicht';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Kosten';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Pakket Kosten';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'BTW nr.';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Volgorde';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Vervoerder';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Verzendingstarief omschrijving';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Gewicht van ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... tot';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Vervoerder Bedrijf';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Volgorde';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'ERROR: Vervoerders ID bestaat reeds.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'ERROR: Kies een vervoerder.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'ERROR: Tenminste een verzendtarief bestaat, verwijder deze voor het verwijderen van de vervoerder.';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'ERROR: Kan geen vervoerder vinden met deze ID.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'ERROR: Kies een vervoerder.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'ERROR: Kan geen vervoerder vinden met deze ID.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'ERROR: Een verzendingstarief beschrijving is nodig.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'ERROR: Het land van bestemming is verkeerd. Meerdere landen moeten gescheiden worden door gebruik te maken van ";".';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'ERROR: Minimum gewicht is nodig';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'ERROR: Maximum gewicht is nodig';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'ERROR: Het minimum gewicht moet lager zijn dan het maximum gewicht';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'ERROR: Een verzendkost is nodig';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'ERROR: Kies een valuta';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'ERROR: Een verzendtarief is nodig';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Selecteer a.u.b.';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Vervoerder';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Verzendingstarief';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Prijs';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-geen-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Creditcard';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Gebruik Betalingsverwerker';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Bank debit';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Enkel Adres (betaling bij levering)';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Selecteer een afleveradres!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Selecteer een verzendingsmethode!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Selecteer een betalingsmethode!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Controleer de gegevens en bevestig de bestelling!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Selecteer een verzendmethode.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Selecteer een andere verzendmethode.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Selecteer een betalingsmethode.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Vul uw creditcard nummer in.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Vul de naam van de creditcard houder in.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'Het creditcardnummer dat u ingaf is ongeldig';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Vul de verval maand van uw creditcard in.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Vul het verval jaar van uw creditcard in.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'De vervaldatum is ongeldig.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Selecteer het afleveradres.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Verkeerd rekeningsnummer.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'Er is niets in uw mandje!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'ERROR: Selecteer een vervoerder!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'ERROR: Het geselecteerde verzendtarief was niet gevonden!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'ERROR: uw afleveradres werd niet gevonden';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'ERROR: Er zijn geen creditcard gegevens...';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'ERROR: creditcardnummer niet gevonden';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Sorry, maar het creditcardnummer dat u gebruikte is een Test nummer!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'De gebruikers naam is niet gevonden in de database';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'u heeft geen eigenaarsnaam van de bankrekening opgegeven.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'u heeft geen IBAN nummer opgegeven.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'u heeft uw banknummer niet opgegeven';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'u heeft geen BIC code opgegeven';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'u heeft de banknaam niet opgegeven';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'De uitcheck module heeft een geldige stap nodig!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Betalings informatie opgeslagen voor latere verwerking.<BR>';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Minimum bestedings bedrag voor onze winkel is nog niet bereikt';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'Het minimum bestedings bedrag voor deze winkel is:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Creditcard Betaling';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'andere betalingsmethoden';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Selecteer a.u.b. een betalingsmethode:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Minimum bestedings bedrag voor uw winkel';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Bankrekening informatie';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Rekeningnummer';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'BIC nummer';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Naam van de bank';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Rekeninghouder';
	var $_PHPSHOP_MODULES = 'Modules';
	var $_PHPSHOP_FUNCTIONS = 'Functies';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Speciale Producten';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'u kan een bericht toevoegen aan uw bestelling';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Opmerking / Vraag van de klant';
	var $_PHPSHOP_INCLUDING_TAX = '(incl. $tax % btw)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Selecteer a.u.b. een item';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Item';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Download omgeving';
	var $_PHPSHOP_DOWNLOADS_START = 'Begin met de Download';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Vul Download-ID in die u heeft gekregen via e-mail en klik \'Begin met de Download\'.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Sorry, maar uw download periode is verlopen.';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Sorry, maar het maximaal aantal downloads is bereikt';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Ongeldig Download-ID!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Kan geen bericht verzenden naar';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Bericht verzonden naar';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Download-Info';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'uw bestelling is klaar voor Download';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Gebruikt de volgende Download-ID(s) in onze Download omgeving: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'het maximale aantal downloads voor elk bestand is:';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Download tot {expire} dagen na de eerste download';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Vragen? Problemen?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Download-Info van ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'downloadable product?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Bedankt voor de betaling. 
        De transactie was succesvol. u krijgt een bevestigings e-mail voor deze transactie van PayPal. 
        u kan doorgaan of u aanmelden op <a href=http://www.paypal.com>www.paypal.com</a> om de details van de transactie te bekijken.';
	var $_PHPSHOP_PAYPAL_ERROR = 'Een fout is opgetreden bij de verwerking van uw transactie. De status van de bestelling kan niet aangepast worden.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Dank u voor de bestelling. De informatie van uw bestelling volgt.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Nogmaals bedankt voor uw bezoek.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Vragen? Problemen?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'De volgende bestelling is ontvangen.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Bekijk de bestelling door middel van de link hieronder.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Negatieve hoeveelheden zijn niet toegestaan.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Geef een geldige hoeveelheid voor dit item.';
	var $_PHPSHOP_CART_STOCK_1 = 'De geselecteerde hoeveelheid is groter dan de huidige voorraad.';
	var $_PHPSHOP_CART_STOCK_2 = 'Momenteel zijn er $product_in_stock items beschikbaar.';
	var $_PHPSHOP_CART_STOCK_3 = 'Klik hier om op onze wachtlijst voor dit product geplaatst te worden.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Selecteer a.u.b. een speciaal item.';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'geen';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Meneer';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Mevrouw';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Dr.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof.';
	var $_PHPSHOP_DEFAULT = 'Standaard';
	var $_PHPSHOP_AFFILIATE_MOD = 'Wederverkopers Administratie';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Bekijk Wederverkopers';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Wederverkopers Lijst';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Wederverkoper Naam';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Actief';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Percentage';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Maand Totaal';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Maandelijkse Commissie';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Bekijk Orders';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'Bekijk E-mail Wederverkopers';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'E-mail Wederverkopers';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'E-mail naar wie (* = Allemaal)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'uw E-mail';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Het onderwerp';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Invoegen huidige statistieken';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Commisie percentage';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Actief?';
	var $_PHPSHOP_DELIVERY_TIME = 'Normaal verzonden na';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Afleverinformatie';
	var $_PHPSHOP_MORE_CATEGORIES = 'meer categorieën';
	var $_PHPSHOP_AVAILABILITY = 'Beschikbaarheid';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Dit product is momenteel niet beschikbaar.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Het is weer beschikbaar op:';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Samenvatting';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Statistieken';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Klanten';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'actieve Producten';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'inactieve Producten';
	var $_PHPSHOP_STATISTIC_SUM = 'Som';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Nieuwe Orders';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Nieuwe Klanten';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Voer uw e-mail adres in om bericht te krijgen wanneer dit product weer beschikbaar is. Wij zullen niet uw e-mail adres delen, verhuren, verkopen of voor andere doeleinden gebruiken dan alleen u op de hoogte te stellen wanneer het product weer beschikbaar is.<br /><br />Hartelijk dank!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Bedankt voor het wachten! <br />We zullen u zo snel mogelijk op de hoogte stellen als het product binnen is.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Verwittig me!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Print scherm';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Kies OF Authorize.net OF CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' Configuratie bestand status:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'iis schrijfbaar';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'is niet schrijfbaar';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Globaal';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Pad & URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Site';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Verzending';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Afrekenen';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Downloads';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Betalingen';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Gebruik alleen als catalogus';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Met deze keuze schakelt u alle winkel functionaliteit uit.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Toon Prijzen';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Toon Prijzen inclusief BTW';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Optie om de klanten prijzen te tonen met of zonder belasting.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Optie om prijzen te tonen. Als de catalogus functie wordt gebruikt, dan wil niet iedereen de prijzen laten zien.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Virtuele Belasting';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Dit bepaalt of er over artikelen met een gewicht van 0 belasting wordt geheven. Wijzig ps_checkout.php->calc_order_taxable() om dit aan te passen.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Belasting modus:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Gebaseerd op afleveradres';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Gebaseerd op verkopers adres';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Dit bepaalt welk belastingtarief gekozen wordt:<br /><ul><li>de plaats waar de winkel is gevestigd (verkopersadres)</li><br/><li>de plaats waar de klant vandaan komt. (afleveradres)</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Meerdere belastingstarieven gebruiken?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Gebruik deze optie, als er artikelen zijn die in verschillende belastingtarieven vallen zoals boeken 6% en luxe goederen 21%.';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Pas korting toe voor belasting/verzending?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Activeer Klant Recensie/Beoordelings Systeem';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Indien geactiveerd, sta je klanten toe om produkten te <strong> beoordelen</strong> en <strong>recensies </strong> er over te schrijven. Klanten kunnen hun ervaringen uiten over een produkt om te delen met andere klanten.<br />
                                                                                So customers can write down their experiences with the product for other customers.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Optie om korting af te trekken voor de gekozen betalingsmethode VOOR (aangevinkt) of NA belasting en verzendkosten berekening.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Klanten kunnen bankgegevens invoeren?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Activeer als klanten hun bank gegevens kunnen invoeren als ze zich registreren bij de winkel.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Klanten kunnen hun provincie selecteren?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Activeer als klanten hun provincie kunnen selecteren als ze zich registreren bij de winkel.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Moet akkoord gaan met de algemene voorwaarden?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Activeer als klanten akkoord moeten gaan met de algemene voorwaarden.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Voorraad controlleren?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Optie om de voorraad te controleren als een klant een artikel aan het mandje toevoegd. Indien geactiveerd, kan een klant niet meer produkten toevoegen aan het mandje dan er op voorraad zijn.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Wederverkopers Activeren?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Dit laat toe wederverkopers te gebruiken in de front-end. Activeer dit alleen als je wederverkopers hebt toegevoegd in de backend';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Order-mail formaat:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Tekst mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Dit bepaalt hoe de bevestigings e-mails worden opgezet:<br /><ul><li>als simpele tekst e-mail</li><li>als een HTML e-mail met plaatjes.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Administratie via de winkelpagina voor niet-backend gebruikers?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'Deze optie kan de Administratie via de voorpagina activeren voor gebruikers die winkeleigenaar zijn, maar geen toegang hebben tot de Joomla / Mambo backend (b.v. Geregistreerd / Editor).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'e URL naar uw website. Normaal gesproken identiek aan de Joomla / Mambo URL (met een slash op het einde!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'SECUREURL';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'De beveiligde URL naar uw website. (https - met een slash op het einde!)';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'HOMEPAGE';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Dit is de pagina die standaard geladen wordt.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'ERRORPAGE';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Dit is de standaard pagina voor foutmeldingen.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'DEBUGPAGE';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Dit is de standaard pagina voor het weergeven van debug informatie.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'DEBUG ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'DEBUG? Activeert de debug uitvoer. Dit zorgt ervoor dat de DEBUGPAGE wordt weergegeven onderaan elke pagina. Dit is erg handig tijdens het ontwikkelen van de winkel aangezien het verschillende informatie laat zien zoals inhoud van het mandje, formulier waardes etc.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'FLYPAGE';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Dit is de standaard pagina voor het weergeven van product informatie.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Categorie Sjabloon';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Dit definieerd de standaard categorie sjabloon voor het weergeven van producten in een categorie.<br /> Nieuwe sjablonen kunnen worden gecreëerd door het wijzigen van de bestaande sjablonen.<br />(deze bevinden zich in de directorie <strong>COMPONENTPATH/html/templates/</strong> en beginnen met browse_)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Standaard aantal producten in een rij';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Dit definieerd het standaard aantal producten in een rij. <br />Bijvoorbeeld: Als het aantal op 4 staat, dan laat het categorie sjabloon 4 producten per rij zien';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = '"geen afbeelding" afbeelding';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Deze afbeelding wordt weergegeven als er geen product afbeelding beschikbaar is.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Bepaald het aantal rijen die getoond worden in het bestellingslijst selectie scherm.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Toon voettekst';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Toont een powered-by-VirtueMart voettekst afbeelding.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Kies de verzendingsmethode van uw winkel';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Standaard Verzendings module met individueel geconfigureerde bedrijven en tarieven. <strong>AANBEVOLEN !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = 'Zone Verzendings Module Landen Versie 1.0<br />Voor meer informatie over deze module bezoek je best <a href="http://ZephWare.com">http://ZephWare.com</a><br />voor details of contact <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Selecteer dit om de zone verzendingsmodule te activeren';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<a href="http://www.ups.com" target="_blank">UPS Online Tools</a> Shipping calculation';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'UPS toegangs code';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'uw UPS toegangs code';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'UPS gebruikersnaam';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'De gebruikersnaam die u van UPS gekregen heeft';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'UPS wachtwoord';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'Het wachtwoord voor uw UPS account';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'InterShipper Module. Alleen kiezen als u een <a href="http://www.intershipper.com" target="_blank">Intershipper.com</a> account heeft.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Schakel verzendmethode uit. Kies dit als u alleen goederen verkoopt die niet verscheept hoeven te worden.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'InterShipper Wachtwoord';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Het wachtwoord van uw InterShipper account';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'InterShipper e-mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'uw e-mail adres voor uw InterShipper account';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'ENCODE KEY';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Wordt gebruikt om data die wordt opgeslagen in de database te vergrendelen met deze sleutel. Dit betekent dat dit bestand ten alle tijden beschermd moet zijn tegen lezen.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Activeer de afreken balk';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Activeer dit, indien de \'afreken-balk\' getoond moet worden aan de klant tijdens de afreken procedure ( 1 - 2 - 3 - 4 met afbeeldingen).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Kies uw winkel\'s afreken procedure';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Standaard :</strong><br/>
               1. Verzoek verzendingsadres<br />
              2. Verzoek verzendingsmethode<br />
              3. Verzoek betalingsmethode<br />
              4. Bevestig bestelling';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Procedure 2:</strong><br/>
               1. Verzoek verzendingsadres<br />
              2. Verzoek betalingsmethode<br />
              3. Bevestig bestelling';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Procedure 3:</strong><br/>
               1. Verzoek verzendingsmethode<br />
              2. Verzoek betalingsmethode<br />
              3. Bevestig bestelling';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Procedure 4:</strong><br/>
               1. Verzoek betalingsmethode<br />
              2. Bevestig bestelling';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Downloads Toestaan';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Kies deze optie om de download mogelijkheden te activeren. Alleen als u artikelen verkoopt die te downloaden zijn.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Order Status die downloaden toelaat';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Selecteer de order status die er voor zorgt dat de klant per e-mail verwittigt wordt over de download.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Order Status die downloaden uitschakelt';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Selecteer de order status die er voor zorgt dat de download voor de klant niet toegelaten is.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'DOWNLOADROOT';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'Het fysische pad naar de bestanden voor de klanten download. (gevolgd door een slash op het einde!<br>
        <span class="message">Voor de veiligheid van uw winkel: Indien mogelijk gebruik een directorie BUITEN DE ROOT VAN DE WEBSITE</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Maximaal aantal downloads';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Dit is het aantal maal een download kan gebeuren met dezelfde Download-ID, (voor 1 bestelling)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Verlooptijd Download';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Dit zet de tijd <strong>in seconden</strong> gedurende dewelke de download mogelijk is voor de klant. 
  Deze tijd begint te lopen na de eerste download! Wanneer de tijd is verlopen dan wordt het download-ID uitgeschakelt.<br />Opmerking : 86400 sec. = 24 uur.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Betaling via PayPal toelaten?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Aanvinken om uw klanten toe te laten te betalen via PayPal.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'PayPal e-mail:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Het e-mail adres dat u gebruikt voor PayPal betalingen.Dit adres wordt ook gebruikt als ontvanger_email.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Order status voor succesvolle transacties';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Selecteer de order status die de bestelling krijgt nar een succesvolle PayPal betaling. Indien u downloadable producten gebruikt: selecteer de status die de download toelaat (de klant wordt onmiddelijk op de hoogte gebracht via e-mail.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Order status voor mislukte PayPal transacties';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Selecteer de order status voor mislukte PayPal transacties';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Betaling via PayMate toelaten?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Aanvinken om uw klanten toe te laten te betalen via het Australische PayMate systeem.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'PayMate gebruikersnaam:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'uw gebruikersaccount voor PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Betaling via Authorize.net toelaten?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Aanvinken om uw klanten toe te laten te betalen via het Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Test mode ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Selecteer \'Ja\' om te testen. Selecteer \'Nee\' om live transacties toe te laten.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Ja';
	var $_PHPSHOP_ADMIN_CFG_NO = 'Nee';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Authorize.net Login Id';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'Dit is uw Authorize.Net login ID';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Authorize.net Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'Dit is uw  Authorize.net Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Authenticatie Type';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'Dit is het Authorize.Net authenticatie type';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'CyberCash toelaten?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Aanvinken om uw klanten toe te laten te betalen via het CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash VERKOPER';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'De CC_MERCHANT is het CyberCash Verkopers ID';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash Verkoper Key';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'De CyberCash Verkoper Key is de Verkoper welke door CyberCash is gegeven';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash Betalings URL';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'De CyberCash Betalings URL is de URL die door Cybercash is gegeven voor beveiligde betalingen.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash AUTH TYPE';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'Het CyberCash AUTH TYPE is het Cybercash authentication type dat door Cybercase is voorgesteld.';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Uitgebreid Zoeken';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Doorzoek alle categorieën';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Doorzoek alle product informatie';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Alleen product naam';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Alleen Fabrikant/Verkoper';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Alleen product omschrijving';
	var $_PHPSHOP_SEARCH_AND = 'en';
	var $_PHPSHOP_SEARCH_NOT = 'niet';
	var $_PHPSHOP_SEARCH_TEXT1 = 'De eerste drop-down-lijst geeft u de mogelijkheid om een categorie te selecteren waarin u wilt zoeken. 
        Met de tweede drop-down-lijst kunt u aangeven in welke product informatie u wilt zoeken (bv. Naam). 
        Wanneer u een keuze genaakt heeft (of het bij de standaard ALLES laat), vult u een zoekwoord in.';
	var $_PHPSHOP_SEARCH_TEXT2 = 'u kunt u zoek aktie nog verder verfijnen door een extra zoekwoord toe te voegen en een keuze te maken uit de EN of NIET operator. 
        Selecteren van EN houdt in dat beide woorden aanwezig moeten zijn voordat een product gevonden wordt. 
        Selecteren van NIET houdt in dat alleen producten getoont worden waar het eerste zoekwoord zich in bevind en het tweede zoekwoord niet.';
	var $_PHPSHOP_ORDERBY = 'Sorteer op';
	var $_PHPSHOP_CUSTOMER_RATING = 'Gemiddelde klant waardering';
	var $_PHPSHOP_TOTAL_VOTES = 'Aantal stemmen';
	var $_PHPSHOP_CAST_VOTE = 'Geef uw stem';
	var $_PHPSHOP_RATE_BUTTON = 'Stem';
	var $_PHPSHOP_RATE_NOM = 'Waardering';
	var $_PHPSHOP_REVIEWS = 'Klant recensies';
	var $_PHPSHOP_NO_REVIEWS = 'Er zijn nog geen recensies geschreven voor dit product.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Wees de eerste om een recensie te schrijven...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Gelieve u aan te melden om een recensie te schrijven.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Geeft u een waardering voor dit produkt om uw recensie te voltooien!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Schrijf a.u.b. een langere recensie. Mininum aantal tekens vereist: 100';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Schrijf a.u.b. een kortere recensie. Maximum aantal tekens toegestaan: 2000';
	var $_PHPSHOP_WRITE_REVIEW = 'Schrijf een recensie voor dit produkt!';
	var $_PHPSHOP_REVIEW_RATE = 'Stap 1: Geef een waardering voor dit product. Kies een waardering tussen 0 (slechtste) en 5 sterren (beste).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Stap 2: Schrijf een (korte) recensie....(minimaal 100, maximaal 2000 tekens)';
	var $_PHPSHOP_REVIEW_COUNT = 'Aantal geschreven tekens: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Verstuur Recensie';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'u heeft reeds een recensie geschreven voor dit product. Dank u wel.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Bedankt voor uw recensie.';
	var $_PHPSHOP_COMMENT = 'Commentaar';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Toevoegen/Wijzigen creditcard Types';
	var $_PHPSHOP_CREDITCARD_NAME = 'Creditcardnaam';
	var $_PHPSHOP_CREDITCARD_CODE = 'Creditcard - Afkorting';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Creditcard Type';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Creditcard lijst';
	var $_PHPSHOP_UDATE_ADDRESS = 'Adres Bijwerken';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Verder Winkelen';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'uw bestelling is succesvol geplaatst';
	var $_PHPSHOP_ORDER_LINK = 'Klik hier om de details van uw bestelling te zien.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'De status van uw order nr. {order_id} is gewijzigd.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'De nieuwe status is:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'Om de details van uw bestelling te zien, klik hier (of kopieer het in uw browser):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Bestelling status wijziging: uw bestelling {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Klant informeren?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Wijzig eerst de status van de bestelling!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Prijs Korting op standaard Klant Groep (in %)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Een positief getal X betekent: Als het product geen prijs heeft toegewezen gekregen aan DEZE Klant Groep, de standaard prijs wordt verminderd met X %. Een negatief getal heeft het tegenovergestelde effect.';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Product Korting';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Product Korting Lijst';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Toevoegen/Wijzigen Product Korting';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Kortings bedrag';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Voer het kortings bedrag in';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Kortings Type';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Percentage';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Totaal';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Is het bedrag een percentage of een totaal?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Start datum van de korting';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Geef de dag waarop de korting begint';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Eind datum van de korting';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Geef de dag waarop de korting eindigt';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'u kan het Product Kortings Formulier gebruiken om kortingen toe te voegen.!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'u bespaart';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Bekijk grote afbeelding';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Valuta Weergave Stijl';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Valuta symbool';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'u kunt ook HTML Entities gebruiken (e.g. €,£,¥,...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Decimalen';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Aantal getoonde decimalen (mag 0 zijn)<br><b>Wordt afgerond wanneer getal is ingegeven met een ander aantal decimalen</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Decimaal symbool';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Karakter wat gebruikt wordt als decimaal symbool';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Duizendtal scheiding';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Karakter wat gebruikt wordt om duizentallen te scheiden (mag leeg zijn)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Positieve weergave';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Weergave stijl die gebruikt wordt voor positieve getallen.<br>(Symb staat voor valuta symbool)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Negatieve weergave';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Weergave stijl die gebruikt wordt voor negatiev getallen.<br>(Symb taat voor valuta symbool)';
	var $_PHPSHOP_OTHER_LISTS = 'Andere Product Lijsten';
	var $_PHPSHOP_MORE_IMAGES = 'Meer voorbeelden';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Beschikbare Afbeeldingen voor';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Terug naar Product Details';
	var $_PHPSHOP_FILEMANAGER = 'BestandManager';
	var $_PHPSHOP_FILEMANAGER_LIST = 'BestandManager::Product Lijst';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Toevoegen Afbeelding/Bestand';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Toegewezen Afbeeldingen';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'Is te Downloaden?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Toegewezen Bestanden (Datasheets,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Gepubliseerd?';
	var $_PHPSHOP_FILES_LIST = 'BestandManager::Afbeelding/Bestands Lijst voor';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Bestandsnaam';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'Bestand Titel';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Bestand Type';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Bewerken';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Grote Afbeelding';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Thumbnail Afbeelding';
	var $_PHPSHOP_FILES_FORM = 'Upload een bestand voor';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Huidig bestand';
	var $_PHPSHOP_FILES_FORM_FILE = 'Bestand';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Afbeelding';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Upload naar';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'standaard Product Afbeelding Pad';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Specificeer bestandslokatie';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Download Pad (bv. voor verkoop van te downloaden producten!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Automatisch Thumbnail aanmaken?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Bestand is gepubliseerd?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Bestand Titel (wat de klant ziet)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Bestand Omschrijving';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'Bestand URL (optie)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Geef a.u.b. een bestaande serverpad op!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'De Thumbnail Afbeelding is met succes aangemaakt!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'Kon geen Thumbnail Afbeelding maken!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Bestand/afbeelding Upload Error';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Kon de grote afbeelding niet verwijderen.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Grote Afbeelding met succes verwijderd.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Kon Thumbnail Afbeelding niet verwijderen (bestaat misschien niet): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Thumbnail Afbeelding met succes verwijderd.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Bestand kon niet verwijderd worden.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Bestand met succes verwijderd.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Sorry, maar het gevraagde bestand is niet gevonden!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Afbeedling niet gevonden!';
	var $_PHPSHOP_COUPON_MOD = 'Kortingsbon';
	var $_PHPSHOP_COUPONS = 'Kortingsbonnen';
	var $_PHPSHOP_COUPON_LIST = 'Kortingbon Lijst';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Kortingsbon is al een keer gebruikt.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Kortingsbon ingediend! Bedankt.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Heeft u een kortingscode, vul hem hieronder in:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Verzend';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Die kortingscode bestaat reeds. Probeer het nog een keer.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Kortingsbon Updaten';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Klik op een kortingscode om hem te wijzigen, om een kortingscode te verwijderen, eerst selecteren en dan op Delete klikken:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Code';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Procent of Totaal';
	var $_PHPSHOP_COUPON_TYPE = 'Krotings Type';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Een cadeau kortingsbon wordt verwijderd zodra deze is gebruikt. Een permanente kortingsbon kan onbeperkt gebruikt worden door klanten.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Cadeau kortingsbon';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Permanente Kortingsbon';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Waarde';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Verwijder code';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Weet u zeker dat u deze kortingscode wenst te verwijderen?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Alle velden moeten ingevuld wijn.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'Kortingsbon waarde moet een getal zijn.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Nieuwe kortingsbon';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Kortingscode';
	var $_PHPSHOP_COUPON_PERCENT = 'Procent';
	var $_PHPSHOP_COUPON_TOTAL = 'Totaal';
	var $_PHPSHOP_COUPON_VALUE = 'Waarde';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Kortingscode opgeslagen.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Bewaard kortingsbon';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Korting';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Kortingscode niet gevonden. Probeer het nog eens.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Kortingsbon Gebruik Aanzetten';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Wanneer u deze optie aan zet, mogen klanten kortingbon nummers invullen om korting op hun bestelling mogelijk te maken.';
	var $_PHPSHOP_FREE_SHIPPING = 'Geen verzendkosten';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Er zijn geen verzendkosten bij deze bestelling!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Minimum Bedrag voor gratis verzending';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Het bedrag (INCL. BTW!) vanwaar geen verzendkosten worden berekend 
                                                (bijvoorbeeld: <strong>50</strong> betekent geen verzendkosten wanneer een klant een bestelling plaatst
                                                van € 50 (incl. BTW) of meer.';
	var $_PHPSHOP_YOUR_STORE = 'uw winkel';
	var $_PHPSHOP_CONTROL_PANEL = 'Controle Paneel';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF - knop';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'De PDF - knop aan- of uitzetten in de winkel';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Moet akkoord gaan met de leveringsvoorwaarden bij elke bestelling?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Aanvinken als u wenst dat de klant akkoord moet gaan met de leveringsvoorwaarden bij ELKE bestelling (voor de order geplaatst wordt).';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Bankrekening Type';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Zichtrekening';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Zichtrekening';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Spaarrekening';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Terugkerende betalingen?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Definieer of u terugkerende betalingen toelaat.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Interne Error tijdens het verwerken voor de Request naar';
	var $_PHPSHOP_PAYMENT_ERROR = 'Fout in het verwerken van de betaling';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Betaling succesvol verwerkt.';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS was niet in staat de Verzending te verwerken';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Gegarendeerde levering binnen (dagen)';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'UPS Pickup Methode';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Hoe geeft u pakjes aan UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'UPS Verpakking?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Selecteer de standaard verpakkingswijze';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Residentiele Aflevering?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Residentieel (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Commerciele aflevering  (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Prijsopgave voor Residentiele (RES) en commerciele (COM) aflevering .';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Behandelings kost';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'De behandelings kost voor de door u geselecteerde verzendingsmethode.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Belastings Klasse';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Gebruik de volgende belastingsklasse voor de verzendigsprijs.';
	var $_PHPSHOP_ERROR_CODE = 'Fout Code';
	var $_PHPSHOP_ERROR_DESC = 'Fout Beschrijving';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Toon / Wijzig de Transactie Sleutel';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Toon/ Wijzig  wachtwoord/Transacite Sleutel';
	var $_PHPSHOP_TYPE_PASSWORD = 'Vul a.u.b. uw wachtwoord in';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Huidig wachtwoord';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Huidige Transactie Sleutel';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'De Transactie Sleutel werd succesvol gewijzigd.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Vraag de creditcard Code waarde (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Controleer of er een geldige CVV2/CVC2/CID waarde (3 of 4 cijfers op de achterzijde van een creditcard, op de voorzijde bij American Express kaarten)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Geef a.u.b. de 3 (of 4) cijfers van de CVV2/CVC2/CID op de achterzijde van uw creditcard (American Express kaarten hebben deze code op de voorzijde).';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'u moet de creditcard code ingeven om verder te kunnen.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'Vul een bestandnaam in';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'Opm.: Hier kunt u een bestandsnaam invullen. <strong>Wanneer u dat doet worden er geen bestanden ge-upload!!! Dit moet u dan doen via FTP!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'OF upload een nieuw bestand';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'u kunt een bestand van uw pc uploaden. Dit is dan het product wat u verkoopt. Een reeds bestaande bestand wordt vervangen.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Type een tekst wat getoond wordt aan de klant op de product flypage.<br />Bijvoorbeeld: 24u, 48 uur , 3 - 5 dagen, Op bestelling.....';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'OF selecteer een afbeelding.<br />De afbeeldingen bevinden zich in de directory <i>/components/com_phpshop/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Specificatie Lijst';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Voorbeelden van Specificatie lijst opbouw:</h4>
        <span class="sectionname"><strong>Grote</strong>,XL[+1.99],M,S[-2.99]<strong>;Kleur</strong>,Rood,Groen,Geel,Dure Kleur[=24.00]<strong>;Enz</strong>,..,..</span>
        <h4>Prijs verwerking van de Specificatie aanpassing/toevoeging:</h4>
        <span class="sectionname">
        <strong>+</strong> == Tel deze hoeveelheid op bij de standaard prijs.<br />
        <strong>-</strong> == Trek deze hoeveelheid af van de standaard prijs.<br />
        <strong>=</strong> == Maak dit de nieuwe product prijs.
      </span>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Bijzondere Specificatie Lijst';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Voorbeelden van Bijzondere Specificatie lijst opbouw:</h4>
        <span class="sectionname"><strong>Naam;Extras;</strong>...</span>';
	var $_PHPSHOP_MULTISELECT = 'Selecteer meerdere door ctrl en muisklik';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'eProceesingNetwork.com gebruiken?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Aanvinken om uw klanten toe te laten te betalen via het eProceesingNetwork.com.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Test mode ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Selecteer \'Ja\' om te testen, \'Nee\' voert effectief betalingen uit.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'eProcessingNetwork.com Login ID';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'Dit is uw eProcessingNetwork.com Login ID';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'eProcessingNetwork.com Transactie Sleutel';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'Dit is uw eProcessingNetwork.com Transactie Sleutel';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Authenticatie Type';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'Dit is het eProcessingNetwork.com authenticatie type.';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Verwante Producten';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'u kan met de lijst Product relaties opbouwen. Selecteer een of meer producten hier en dan zijn deze <strong>Verwante Producten</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Misschien ook iets voor u';
	var $_PHPSHOP_IMAGE_ACTION = 'Afbeelding actie';
	var $_PHPSHOP_NONE = 'niets';
	var $_PHPSHOP_ORDER_HISTORY = 'Bestelling Historiek';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Commentaar';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Commentaar bij uw bestelling';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Commentaar toevoegen?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Toegevoegd op Datum';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Klant op de hoogte gebracht?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Order Status Wijziging';
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
	var $_PHPSHOP_PARAMETERS_LBL = 'Parameters';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Product Type';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Product Type Lijst';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Toevoegen/Bewerk Produkt Type';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Product Type Lijst voor';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Bekijk Product Types';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Product Type Toevoegen voor';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Product Type Toevoegen';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Product Type';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Product Type Naam';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Product Type Omschrijving';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Parameters';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Product Type Informatie';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Publiseren?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Product Type Overzicht Pagina';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Product Type Pagina';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Parameters van Product Type';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Parameter Informatie';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Product Type niet gevonden!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Parameter Naam';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Deze naam wordt de kolomnaam van de tabel, deze naam moet uniek en zonder spaties zijn.<BR>Bijvoorbeeld: hoofd_materiaal';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Parameter Label';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Parameter Omschrijving';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Parameter Type';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Integer';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Tekst';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Korte Tekst';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Zwevend';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Karakter';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Datum & Tijd';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Datum';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'JJJJ-MM-DD';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Tijd';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'HH:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Onderbroken lijn';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Meerdere Waarden';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Mogelijke Waarden';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Laat Mogelijke Waarden als selectielijst zien?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Indien er Mogelijke Waarden zijn, dan kan de Parameter enkel dze waarden krijgen. Voorbeelden van mogelijke waarden zijns:</strong><BR><span class="sectionname">Staal, Hout,...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Standaard waarde';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'Voor de standaard waarde gebruikt u het volgende formaat:<ul><li>Datum: JJJJ-MM-DD</li><li>Tijd: HH:MM:SS</li><li>Datum & Tijd: JJJJ-MM-DD HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Eenheid';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Geavanceerd zoeken volgens Parameters';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Parameters Zoeken';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'u kunt producten zoeken m.b.v. van technische parameters?<BR>u kunt elk gewenst formulier gebruiken:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Er is geen resultaat wat met u zoekopdracht overeen komt.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Er is geen gepubliseerd product type met deze naam.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'Zelfde als';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'Is niet zelfde als';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Volledige tekst doorzoeken';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Alle geselecteerde';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Enkel geselecteerde';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Reset Formulier';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Zoek in categorie';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Wijzig parameters';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Oplopende volgorde';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Aflopende volgorde';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Parameters of Categorie';
	var $_PHPSHOP_FEE = 'Toeslag';
	var $_PHPSHOP_PRODUCT_CLONE = 'Kopieer Product';
	var $_PHPSHOP_CSV_SETTINGS = 'Instelingen';
	var $_PHPSHOP_CSV_DELIMITER = 'Scheidingsteken';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Veld afscheidings teken';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Laad een CSV bestand op';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Verzend een CSV bestand';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Laad vanuit directory';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Laad CSV bestand van de Server';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Exporteer naar CSV bestand';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Kies het Veld Volgorde Type';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Standaard volgorde';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'Mijn eigen volgorde';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Exporteer alle Producten naar een CSV bestand';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'CSV Import / Export Configuratie';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Bewaar wijzigingen';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Veld naam';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'standaard waarde';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Veld Volgorde';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Veld Verplicht?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Import/Export';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Nieuw veld toevoegen';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Documentatie';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Sorry, maar het product wat u zoekt is niet gevonden!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Laat producten die niet op voorraad zijn zien';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Wanneer aangevinkt, zullen producten die niet op voorraad zijn getoont worden in de winkel. Anders worden deze verborgen gehouden.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'Aantal (eenheden) in verpakking:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'Aantal (eenheden) in doos:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Verberg de prodcuten die niet voorradig zijn';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Producten in aanbieding en met verminderde prijs';
	var $_PHPSHOP_FEATURED = 'Aanbieding';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Terug naar het land';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Terug naar de bestands manager';
	var $_PHPSHOP_ADD_STATE = 'Voeg een provincie toe';
	var $_PHPSHOP_LIST_STATES = 'Toon Provincies';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'aanbieding EN korting';
	var $_PHPSHOP_SHOW_FEATURED = 'producten in aanbieding';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'producten met korting';
	var $_PHPSHOP_FILTER = 'Filter';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Terug naar de hoofdsite';
	var $_PHPSHOP_EXPAND_TREE = 'Expand Tree';
	var $_PHPSHOP_COLLAPSE_TREE = 'Collapse Tree';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Verminderde Prijs';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Hier kan u een speciale korting geven aan dit product. Deze heeft voorrang over andere kortingstypen (en de laatste worden dus niet gebruikt).<br/>';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Prijs per Eenheid';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'Winkel is offline?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'Aangevinkt, zal de winkel een Offline Boodschap tonen';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Offline Boodschap';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Table Prefix voor de Winkel Tabellen';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'Standaard is dit <strong>vm</strong>';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Toon Pagina Navigatie bovenaan de Product lijst?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Schakelt het tonen van de pagina navigatie bovenaan de product lijst (aan de Frontend van de winkel) aan of uit.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Toon het aantal producten?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Toont het aantal prodcuten in een bepaalde categorie, bijvoorbeeld Categorie (4)';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'Aan-winkelwagentje Button Stijl';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'Dynamic Thumbnail Resizing aan?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'Indien aangevinkt dan laat u het dynamische resizen toe van afbeeldingen. Dit betekent dat alle Thumbnail afbeeldingen geresized worden naar het formaat dat hieronder wordt ingegeven, dit door middel van de GD2 functies in PHP.         u kan nakijken of de GD2 functies beschibaar zijn op uw website door te klikken op "System" -> "System Info" -> "PHP Info" -> gd.   De kwaliteit van de Thumbnail afbeelding is veel beter dan afbeldingen die geresized worden door de browser. De aangemaakte afbeeldoingen worden geplaatst in de folder /shop_image/prduct/resized. Indien er reeds een thumbnail is aangemaakt dan wordt er geen meer aangemaakt.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'Breedte Thumbnail Afbeelding';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'De <strong>breedte</strong> van de geresizede Thumbnail Afbeelding.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Hoogte Thumbnail Afbeelding';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'De <strong>hoogte</strong> van de geresizede Thumbnail Afbeelding.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Selecteer tenminste een verzendingsmethode!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Prijs Configuratie';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Ledengroep aan welke prijzen getoond moeten worden';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'De geselecteerde ledengroep en alle groepen erboven zijn in de mogelijkheid om de product prijzen te zien.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Toon "(inclusief XX% btw)" waar mogelijk?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'Wanneer aangevinkt dan zien de gebruikers de tekst "(inclusief xx% btw)" wanneer de prijzen getoont worden inclusief btw';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'Toon het prijslabel voor verpakkingen?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'Aangevinkt wordt het prijslabel bepaald uit de product eenheid en de verpakkingswaarde:<br/>
<strong>Prijs per Eenheid (10 stukken)</strong><br/>
Wanneer niet aangevinkt dan is de prijslabel zoals gewoonlijk <strong>Prijs: $xx.xx</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'meer Basis Instellingen';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Basis Instellingen';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Frontend Features';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'BTW Configuratie';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Quantity Start';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Quantity End';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'Gebruiker Registratie Settings';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'Gebruiker registratie toestaan?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'Nieuwe gebruiker activatie nodig?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Gebruik verborgen gebruiker registratie?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'Wanneer dit selecteerd dan hoeven de gebruikers geen gebruikersnaam en wachtwoord in te geven voor een nieuwe account. Het e-mail adres wordt gebruikt voor de nieuwe gebruiker en een random wachtwoord wordt gegenereerd. De registratie details worden verzonden naar de klant.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Hallo %s,

Dank u om te registeren bij %s. Uw gebruikersaccount is net gecreëerd.
u kan zich aanmelden bij %s door gebruik te maken van de volgende gebruikersnaam en wachtwoord:

Gebruikersnaam - %s
Wachtwoord - %s
';
	var $_PEAR_LOG_CRIT = 'Kritisch';
	var $_PEAR_LOG_ERR = 'Error';
	var $_PEAR_LOG_WARNING = 'Waarschuwing';
	var $_PEAR_LOG_INFO = 'Informatie';
	var $_PEAR_LOG_TIP = 'Informatie';
	var $_PEAR_LOG_ALERT = 'Alarm';
	var $_PEAR_LOG_EMERG = 'Noodgeval';
	var $_PEAR_LOG_NOTICE = 'Opmerking';
	var $_PEAR_LOG_DEBUG = 'Debug';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'Enable PayFlow Pro payment?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'Check to use VeriSign\'s PayFlow Pro with VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'Test mode ?';
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
	var $_VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX = 'The Session Save Path %s is not writable. Please correct this! The shop is temporarily trying to use the %s instead.\'';
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
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DELETE = 'The product_delete field is a special field. This field is used to determine if a product should be deleted or not.<br />Usage:<ol><li>Add the the name "product_delete" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the value Y. If the field contains any other value, the product will not be deleted.</li></ol><br /.>Values:<ul><li>Y: Yes, the product is to be deleted</li><li>N: No, the product is not to be deleted</li><li>Empty: Empty value, the product is not to be deleted</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DESC = 'Long description for the product.<br />Values:<ul><li>Text: HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_S_DESC = 'Short description for the product.<br />Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PUBLISH = 'The status if a product is published or not.<br />Values:<ul><li>Y: Yes, the product is published</li><li>N: No, the product is not published</li><li>Empty: Empty value, the product is published.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WIDTH = 'The width of the product.<br />Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_HEIGHT = 'The height of the product.<br />Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABLE_DATE = 'The date a product will become availabable. For import the date should be in the format of day/month/year or day-month-year. On Windows systems the date goes until 19/01/2038.<br />Usage:<ol><li>Add the the name "product_available_date" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a date value. If the field contains any other value, the data will be ignored.</li></ol><br />Values:<ul><li>Date: day/month/year or day-month-year</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_IN_STOCK = 'The number of articles that you have in stock.<br /><br />Usage:<ol><li>Add the the name "product_in_stock" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a numeric value. If the field contains any other value, the default value will be used.</li></ol><br />Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE = 'The different choices a product has. Use this to give a product different specifications. For example a t-shirt that comes in different sizes and colours. You can specify the sizes and colours like this: Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00];AndSoOn,..,..<br /><br />You can adjust the prices per attribute by using the following options:<ul><li>+: Add this amount to the configured price.</li><li>-: Subtract this amount from the configured price.</li><li>=: Set the product\\\'s price to this amount.</li></ul><br />Usage:<ol><li>Add the the name "attribute" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the attribute text.</li></ol><br /.>Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABILITY = 'This shows when the product is available. The value can be a descriptive text or the name of an image filename. Images must be placed in "shop_image/availability/".<br />Usage:<ol><li>Add the the name "product_availability" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_FULL_IMAGE = 'The filename of the image as located in the "shop_image/product/" folder. The filename can also be a URL.<br />NOTE: If you have dynamic resizing enabled, you need to fill the "product_thumb_image" field. VirtueMart resizes the image specified there.<br/><br />Usage:<ol><li>Add the the name "product_full_image" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\\\'s are allowed.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_THUMB_IMAGE = 'The filename of the thumbnail image as located in the "shop_image/product/" folder. The filename can also be a URL.<br />NOTE: If you have dynamic resizing enabled, there still needs to be a value in this field. VirtueMart resizes the image that is specified here.<br /><br />Usage:<ol><li>Add the the name "product_full_image" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\\\'s are allowed.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CUSTOM_ATTRIBUTE = 'A custom attribute will add an input field to the product page with the description of the attribute supplied. Custom attributes are specified like this: Name;Extras;...<br />Usage:<ol><li>Add the the name "custom_attribute" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the attribute text.</li></ol><br /.>Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PACKAGING = 'Specify the number of items in the package.<br />Usage:<ol><li>Add the the name "product_packaging" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the number of items in the package.</li></ol><br /.>Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_BOX = 'Specify the number of items in the box.<br />Usage:<ol><li>Add the the name "product_box" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the number of items in the box.</li></ol><br /.>Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT = 'Specify the amount or percentage of discount the product has. The values entered are exact values, no calculation is made. This is the same as if you are filling in a discount via the Product Discount List. If the discount already exists, it will not be added to the database but the product will be linked to the existing discount. The criteria for determining if a discount already exists the following values have to be exactly the same:<ol><li>Amount, be it a total or percentage</li><li>Start date</li><li>End date</li></ol>This prevents from filling the database with a huge number of the same discounts.<br /><br />Usage:<ol><li>Add the the name "product_discount" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Optional: Add the the name "product_discount_date_start" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Optional: Add the the name "product_discount_date_end" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add the chosen columns to your CSV file with the corresponding values.</li></ol><br /.>Values:<ul><li>product_discount</li><ul><li>Number<br />e.g. 10</li><li>Percentage: Must include the % sign<br />e.g. 10%</li></ul><li>product_discount_date_start</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul><li>product_discount_date_end</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul></ul>';
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
	var $_USERNAME = 'Gebruikersnaam';
	var $_PASSWORD = 'Password';
	var $_BUTTON_LOGIN = 'Login';
	var $_REGISTER_UNAME = 'Gebruikersnaam';
	var $_REGISTER_EMAIL = 'Email';
	var $_REGWARN_NAME = 'Please enter your name.';
	var $_REGWARN_UNAME = 'Please enter a user name.';
	var $_REGWARN_MAIL = 'Please enter a valid e-mail address.';
	var $_SEND_SUB = 'Account details for %s at %s';
	var $_ASEND_MSG = 'Hello %s,
	
	A new user has registered at %s.
	This email contains their details:
	
	Naam - %s
	E-mail - %s
	Gebruikersnaam - %s
	
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



After activation you may login to %s using the following Gebruikersnaam and password:



Gebruikersnaam - %s

Password - %s';
	var $_USEND_MSG = 'Hello %s,



Thank you for registering at %s.



You may now login to %s using the gebruikersnaam and password you registered with.';
	var $_PROMPT_PASSWORD = 'Lost your Password?';
	var $_HI = 'Hi';
	var $_NEW_USER_MESSAGE_SUBJECT = 'New User Details';
	var $_NEW_USER_MESSAGE = 'Hello %s,





You have been added as a user to %s by an Administrator.



This email contains your gebruikersnaam and password to log into the %s



Gebruikersnaam - %s

Password - %s





Please do not respond to this message as it is automatically generated and is for information purposes only';
	var $_REMEMBER_ME = 'Gegevens ounthouden';
	var $_REGISTER_TITLE = 'Registratie';
	var $_JAN = 'januari';
	var $_FEB = 'februari';
	var $_MAR = 'maart';
	var $_APR = 'april';
	var $_MAY = 'mei';
	var $_JUN = 'juni';
	var $_JUL = 'juli';
	var $_AUG = 'augustus';
	var $_SEP = 'september';
	var $_OCT = 'oktober';
	var $_NOV = 'november';
	var $_DEC = 'december';
	var $_PHPSHOP_CSV_VERSION = '0.7';
	var $_PHPSHOP_CSV_ABOUT = 'About';
	var $_PHPSHOP_CSV_PRICE_LIST_ONLY = 'Alleen deze prijstlijst uploaden';
	var $_PHPSHOP_CSV_MULTIPLE_PRICES_UPLOAD = 'Meedere prijslijsten uploaden';
	var $_PHPSHOP_CSV_IMPORT_CONFIG_CSV_FILE = 'Kolomkoppen gebruiken';
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

													This CSV file contains the link between a product type and a product SKu and should look like this:

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
        
}
class phpShopLanguage extends vmLanguage { }

/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>