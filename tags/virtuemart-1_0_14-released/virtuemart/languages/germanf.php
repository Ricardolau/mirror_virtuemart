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
	var $_PHPSHOP_MENU = 'Menü';
	var $_PHPSHOP_CATEGORY = 'Kategorie';
	var $_PHPSHOP_CATEGORIES = 'Kategorien';
	var $_PHPSHOP_SELECT_CATEGORY = 'Kategorie auswählen:';
	var $_PHPSHOP_ADMIN = 'Administration';
	var $_PHPSHOP_PRODUCT = 'Produkt';
	var $_PHPSHOP_LIST = 'auflisten';
	var $_PHPSHOP_ALL = 'alle';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Zeige alle Produkte';
	var $_PHPSHOP_VIEW = 'Zeigen';
	var $_PHPSHOP_SHOW = 'Zeigen';
	var $_PHPSHOP_ADD = 'hinzufügen';
	var $_PHPSHOP_UPDATE = 'aktualisieren';
	var $_PHPSHOP_DELETE = 'löschen';
	var $_PHPSHOP_SELECT = 'auswählen';
	var $_PHPSHOP_SUBMIT = 'Absenden';
	var $_PHPSHOP_RANDOM = 'Ausgewählte Produkte';
	var $_PHPSHOP_LATEST = 'Neueste Produkte';
	var $_PHPSHOP_HOME_TITLE = 'Startseite';
	var $_PHPSHOP_CART_TITLE = 'Warenkorb';
	var $_PHPSHOP_CHECKOUT_TITLE = 'zur Bestellung';
	var $_PHPSHOP_LOGIN_TITLE = 'Anmelden';
	var $_PHPSHOP_LOGOUT_TITLE = 'Abmelden';
	var $_PHPSHOP_BROWSE_TITLE = 'Übersicht';
	var $_PHPSHOP_SEARCH_TITLE = 'Suchen';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Account Verwaltung';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Navigation';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Abteilung';
	var $_PHPSHOP_INFO = 'Information';
	var $_PHPSHOP_BROWSE_LBL = 'Übersicht';
	var $_PHPSHOP_PRODUCTS_LBL = 'Produkte';
	var $_PHPSHOP_PRODUCT_LBL = 'Produkt';
	var $_PHPSHOP_SEARCH_LBL = 'Suchen';
	var $_PHPSHOP_FLYPAGE_LBL = 'Produktdetails';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Produktsuche';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Produktname';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Produktkategorie';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Produktbeschreibung';
	var $_PHPSHOP_CART_SHOW = 'Warenkorb zeigen';
	var $_PHPSHOP_CART_ADD_TO = 'bestellen';
	var $_PHPSHOP_CART_NAME = 'Name';
	var $_PHPSHOP_CART_SKU = 'Artikelnummer';
	var $_PHPSHOP_CART_PRICE = 'Preis';
	var $_PHPSHOP_CART_QUANTITY = 'Anzahl';
	var $_PHPSHOP_CART_SUBTOTAL = 'Zwischensumme';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Eine neue';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Lieferadresse';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Keine Suchergebnisse.<br />';
	var $_PHPSHOP_PRICE_LABEL = 'Preis: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'in den Warenkorb';
	var $_PHPSHOP_NO_CUSTOMER = 'Sie sind leider noch kein registrierter Kunde. Bitte hinterlassen Sie uns Ihre Rechnungsadresse.';
	var $_PHPSHOP_DELETE_MSG = 'Soll dieser Datensatz wirklich gelöscht werden?';
	var $_PHPSHOP_THANKYOU = 'Danke für Ihre Bestellung.';
	var $_PHPSHOP_NOT_SHIPPED = 'Noch nicht geliefert.';
	var $_PHPSHOP_EMAIL_SENDTO = 'Eine Bestätigungs-email wurde versandt an';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Es existiert kein MOS-user, <br />den Sie zur com_phpshop Nutzerliste hinzufügen könnten.';
	var $_PHPSHOP_ERROR = 'FEHLER';
	var $_PHPSHOP_MOD_NOT_REG = 'Modul ist nicht registriert.';
	var $_PHPSHOP_MOD_ISNO_REG = ' ist kein gültiges Shop-Modul.';
	var $_PHPSHOP_MOD_NO_AUTH = 'Sie haben keine Berechtigung, auf dieses Modul zuzugreifen.';
	var $_PHPSHOP_PAGE_404_1 = 'Die angeforderte Seite existiert nicht';
	var $_PHPSHOP_PAGE_404_2 = 'Folgende Datei wurde nicht gefunden:';
	var $_PHPSHOP_PAGE_403 = 'Unzureichende Rechte';
	var $_PHPSHOP_FUNC_NO_EXEC = 'Es besteht keine Berechtigung zum Ausführen der Funktion ';
	var $_PHPSHOP_FUNC_NOT_REG = 'Funktion nicht registriert.';
	var $_PHPSHOP_FUNC_ISNO_REG = ' ist keine gültige Shop-Funktion.';
	var $_PHPSHOP_ADMIN_MOD = 'Administration';
	var $_PHPSHOP_USER_LIST_MNU = 'Nutzer auflisten';
	var $_PHPSHOP_USER_LIST_LBL = 'Nutzerliste';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Nutzername';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Voller Name';
	var $_PHPSHOP_USER_LIST_GROUP = 'Gruppe';
	var $_PHPSHOP_USER_FORM_MNU = 'Neu: Nutzer';
	var $_PHPSHOP_USER_FORM_LBL = 'Hinzufügen/Aktualisieren von Nutzern';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Rechnungsinformation';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Lieferadressen';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Eine Adresse hinzufügen';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'Keine Lieferadressen.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Adressen-Abkürzung';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Vorname';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Nachname';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'mittlerer Name';
	var $_PHPSHOP_USER_FORM_TITLE = 'Titel';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Nutzername';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Passwort';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Passwort bestätigen';
	var $_PHPSHOP_USER_FORM_PERMS = 'Nutzertyp';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Kundennummer';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Firmenname';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_USER_FORM_CITY = 'Stadt';
	var $_PHPSHOP_USER_FORM_STATE = 'Bundesland';
	var $_PHPSHOP_USER_FORM_ZIP = 'PLZ';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_USER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Handy-Nr.';
	var $_PHPSHOP_USER_FORM_FAX = 'Fax';
	var $_PHPSHOP_USER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Module auflisten';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Modulliste';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Modulname';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Modulbeschränkung';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Funktionen';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Reihenfolge';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Neu: Modul';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Modul Information';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Modulbezeichnung (für Top-Menü)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Modulname';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Modulbeschränkungen';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Modulkopf';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Modulfuß';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Modul sichtbar im Top-Menü?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Reihenfolge';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Modulbeschreibung';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'Sprache';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Sprachdatei';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Funktionen auflisten';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Funktionsliste';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Funktionsname';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Klassenname';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Klassenmethode';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Beschränkungen';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Neu: Funktion';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Funktionsinformation';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Funktionsname';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Klassenname';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Klassenmethode';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Funktionsbeschränkungen';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Funktionsbeschreibung';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Währungen auflisten';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Währungsliste';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'Neu: Währung';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Währungsname';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'Währungssymbol/-kürzel';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Länder auflisten';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Länderliste';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Land hinzufügen';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Ländername';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Länderkürzel (3 Zeichen)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Länderkürzel (2 Zeichen)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Bundesländer auflisten';
	var $_PHPSHOP_STATE_LIST_LBL = 'Bundesländerliste für: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Hinzufgüen/Aktualisieren eines Bundeslandes';
	var $_PHPSHOP_STATE_LIST_NAME = 'Name des Bundeslandes';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'Abkürzung (3 Zeichen)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'Abkürzung (2 Zeichen)';
	var $_PHPSHOP_ADDRESS = 'Adresse';
	var $_PHPSHOP_CONTINUE = 'Weiter';
	var $_PHPSHOP_EMPTY_CART = 'Ihr Warenkorb ist derzeit leer.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Ping InterShipper Server';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'InterShipper-Server anpingen ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'InterShipper Ping fehlgeschlagen';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'InterShipper Ping erfolgreich';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Paketdienst';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Anwortzeit';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'Sek.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Versandarten auflisten';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Versandarten';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Versandart';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Aktiv';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Versandkosten';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Lieferdauer';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'Pauschalpreis';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'Prozent';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'Tage';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'schwere Lasten';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Versandarten konfigurieren';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Versandart hinzufügen';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Versandarten konfigurieren';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Aktualisieren';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Versandart';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Aktivieren';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Versandkosten';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Lieferdauer';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'Pauschalpreis';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'Prozent';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'Tage';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'schwere Lasten';
	var $_PHPSHOP_ORDER_MOD = 'Bestellungen';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Bestellung bestätigen';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Bestellung ablehnen';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Bestellung ausdrucken';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Bestellung löschen';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Bestellungen auflisten';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Liste aller Bestellungen';
	var $_PHPSHOP_ORDER_LIST_ID = 'Bestellnummer';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Bestelldatum';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'zuletzt geändert';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Status';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'Zwischensumme';
	var $_PHPSHOP_ORDER_ITEM = 'Bestellte Artikel';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Auftrag';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Bestellnummer';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Bestelldatum';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Bestellstatus';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Kundeninformation';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Rechnungsinformation';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Informationen zur Lieferung';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Rechnungsadresse';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Lieferadresse';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Name';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Firma';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Stadt';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Bundesland';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'PLZ';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Land';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Telefon';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Fax';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'Email';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Bestellte Artikel';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Anzahl';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Anz.';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'Artikelnummer';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Preis';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Endsumme';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'Zwischensumme';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'MwSt.';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Versandkosten';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Steuern auf Porto/Verpackung';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Bezahlung per';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Name auf d. Kreditkarte';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Kreditkartennummer';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Gültigkeitsdatum';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Daten zur Bezahlung';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Lieferinformation';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Zahlungsart';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Versand per';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Lieferart';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Lieferdatum';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Lieferung Preis';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Bestellstatustypen auflisten';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Neu: Bestellstatustyp';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Bestellstatus-Code';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Name des Bestellstatus';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Bestellstatus';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Bestellstatus Code';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Bestellstatus Name';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Reihenfolge';
	var $_PHPSHOP_PRODUCT_MOD = 'Produkte';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Aktuelles Produkt';
	var $_PHPSHOP_CURRENT_ITEM = 'Aktueller Artikel';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Produktinventar';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Inventar anzeigen';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Preis';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Anzahl';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Gewicht';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Produkte auflisten';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Produktliste';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Produktname';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'Artikelnummer';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Veröffentlicht';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Produkt suchen';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'geändert';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'mit Preis geändert';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'ohne Preis';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'Nach';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Vor';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Neues Produkt';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Dieses Produkt ändern';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Produkt-Detailseite im shop zeigen';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Neuer Artikel';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'neuer Artikel';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Neues Produkt';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Produkt aktualisieren';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Produktinformation';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Produktstatus';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Produktdimensionen und -gewicht';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Produktbilder';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Neuer Artikel';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Artikel aktualisieren';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Artikelinformation';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Artikelstatus';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Artikel Dimensionen und Gewicht';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Artikelbilder';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'zurück zum Elternprodukt';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'Um das aktuelle Bild zu aktualisieren, bitte Pfad zum neuen Bild angeben.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Das aktuelle Bild löschen.';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Produkt-Artikel';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Artikelattribute';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Soll dieses Produkt\\nund die damit verbundenen Artikel wirklich gelöscht werden?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Soll dieser Artikel wirklich gelöscht werden?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Verkäufer/Produktverwalter';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Hersteller';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'Artikelnummer';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Name';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Kategorie';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Artikelpreis (Brutto)';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Artikelpreis (Netto)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'ausführliche Beschreibung';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Kurzbeschreibung';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'vorrätig';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'auf Bestellung';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Verfügbarkeitsdatum';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'Aktionsprodukt?';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Discounttyp';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Veröffentlichen?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Länge';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Breite';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Höhe';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Maßeinheit';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Gewicht';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Maßeinheit';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'kleines Bild';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Großes Bild';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'Kilogramm';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'Meter';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Einheit';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'Stück';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Einheiten pro Verpackung';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Füllen Sie bitte die Anzahl der Einheiten pro Verpackung ein. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Einheiten pro Paket';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Füllen Sie bitte die Anzahl der Verpackungseinheiten pro Paket ein. (max. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Resultate: Produkt hinzufügen';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Resultate: Produkt aktualisieren';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Resultate: neuer Artikel';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Resultate: Artikel aktualisieren';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Produkte per CSV-Datei einfügen';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Produkt-Ordneransicht';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Kategorien auflisten';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Kategoriebaum';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Neue Kategorie';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Kategorie Information';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Kategoriename';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Elternprodukt';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Kategoriebeschreibung';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Veröffentlichen?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Kategorie-Übersichtsseite';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Attribute auflisten';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Attributliste für';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Attributname';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Reihenfolge';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Neues Attribut';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Attributformular';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Neues Attribut für Produkt';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Attribut für Produkt aktualisieren';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Neues Attribut für Artikel';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Attribute für Artikel aktualisieren';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Attributname';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Reihenfolge';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Preise auflisten';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Preisliste';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Preis für';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Gruppenname';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Preis';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Währung';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Preis hinzufügen';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Preisinformation';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Preis für Produkt hinzufügen';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Preis für Produkt aktualisieren';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Neuen Preis für Artikel';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Preis für Artikel aktualisieren';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Preis';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Währung';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Kundengruppe';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Reporte';
	var $_PHPSHOP_RB_INDIVIDUAL = 'einzelne Produkte auflisten';
	var $_PHPSHOP_RB_SALE_TITLE = 'Verkaufsreporte';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Übersicht zu Verkaufsaktivitäten';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Intervall setzen';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Monatlich';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Wöchentlich';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Täglich';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Diesen Monat';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'Letzten Monat';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'Letzte 60 Tage';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'Letzte 90 Tage';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Beginn am';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Ende am';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Zeige den ausgewählten Zeitraum';
	var $_PHPSHOP_RB_REPORT_FOR = 'Report für ';
	var $_PHPSHOP_RB_DATE = 'Datum';
	var $_PHPSHOP_RB_ORDERS = 'Bestellungen';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Anzahl verkaufter Artikel';
	var $_PHPSHOP_RB_REVENUE = 'Erlös';
	var $_PHPSHOP_RB_PRODLIST = 'Produktliste';
	var $_PHPSHOP_SHOP_MOD = 'Shop';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'kleines Bild';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Preis';
	var $_PHPSHOP_ORDER_STATUS_P = 'noch nicht bestätigt';
	var $_PHPSHOP_ORDER_STATUS_C = 'Bestätigt';
	var $_PHPSHOP_ORDER_STATUS_X = 'Storniert';
	var $_PHPSHOP_ORDER_BUTTON = 'Bestellen';
	var $_PHPSHOP_SHOPPER_MOD = 'Kunden';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Kunden auflisten';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Kundenliste';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Nutzername';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Voller Name';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Gruppe';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Kunden hinzufügen';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Kundeninformation';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Informationen zur Rechnungsadresse';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Information';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Informationen zur Lieferadresse';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Neue Adresse';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Kurzname für Adresse';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Nutzername';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Vorname';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Nachname';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'mittlerer Name';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Titel';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Name';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Passwort';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Passwort bestätigen';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Kundengruppe';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Firmenname';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Stadt';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Bundesland';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'PLZ';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Handy-Nr.';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Fax';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Ja';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'Nein';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Kundengruppen auflisten';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Kundengruppenliste';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Gruppenname';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Gruppenbeschreibung';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Kundengruppenformular';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Neue Kundengruppe';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Gruppenname';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Gruppenbeschreibung';
	var $_PHPSHOP_STORE_MOD = 'Ihr Shop';
	var $_PHPSHOP_STORE_FORM_MNU = 'Shopdaten bearbeiten';
	var $_PHPSHOP_STORE_FORM_LBL = 'Shopinformation';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Kontaktinformation';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Großes Bild';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Bild hochladen';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Shopname';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Shop Firmenname';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'Stadt';
	var $_PHPSHOP_STORE_FORM_STATE = 'Bundesland';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_STORE_FORM_ZIP = 'PLZ';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Währung';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Shopkategorie';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Nachname';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Vorname';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'mittlerer Name';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Titel';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Telefon 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Telefon 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Fax';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'Email';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Bildpfad';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Beschreibung';
	var $_PHPSHOP_PAYMENT = 'Bezahlung';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Zahlungsarten auflisten';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Zahlungsartenliste';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Name';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Code';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Rabatt';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Shopper Gruppe';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Typ der Zahlungsart';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Neue Zahlungsarten';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Zahlungsarten-Formular';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Name der Zahlungsarten';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'für Shoppergruppe';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Rabatt';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Code';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Reihenfolge';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Typ der Zahlungsart';
	var $_PHPSHOP_TAX_MOD = 'Steuern';
	var $_PHPSHOP_TAX_RATE = 'Steuersätze';
	var $_PHPSHOP_TAX_LIST_MNU = 'Steuersätze auflisten';
	var $_PHPSHOP_TAX_LIST_LBL = 'Steuersatzliste';
	var $_PHPSHOP_TAX_LIST_STATE = 'Steuer Bundesland/Region';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Steuer Land';
	var $_PHPSHOP_TAX_LIST_RATE = 'Steuersatz';
	var $_PHPSHOP_TAX_FORM_MNU = 'Neu: Steuersatz';
	var $_PHPSHOP_TAX_FORM_LBL = 'Neu: Steuer Information';
	var $_PHPSHOP_TAX_FORM_STATE = 'Steuer Bundesland/Region';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Steuer Land';
	var $_PHPSHOP_TAX_FORM_RATE = 'Steuersatz';
	var $_PHPSHOP_VENDOR_MOD = 'Lieferant';
	var $_PHPSHOP_VENDOR_ADMIN = 'Lieferant';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Lieferanten auflisten';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Lieferantenliste';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Lieferantenname';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Eintrag ändern';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Neuer Lieferant';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Neu: Lieferanteninformation';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Lieferanteninformation';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Kontaktinformation';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Großes Bild';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Bild hochladen';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Name des Lieferanten-Shops';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Lieferanten-Firmenname';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Stadt';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Bundesland';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Land';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'PLZ';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Währung';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Lieferantenkategorie';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Nachname';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Vorname';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'mittlerer Name';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Titel';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Telefon 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Telefon 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Fax';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'Email';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Bildpfad';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Beschreibung';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Lieferantenkategorien auflisten';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Lieferantenkategorieliste';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Kategoriename';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Kategoriebeschreibung';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Lieferanten';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Neu: Lieferantenkategorie';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Lieferantenkategorie-Formular';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Kategorieinformation';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Kategoriename';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Kategoriebeschreibung';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Hersteller';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Hersteller';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Hersteller auflisten';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Herstellerliste';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Herstellername';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Eintrag ändern';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'Neu: Hersteller';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Neu: Herstellerinformation';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Hersteller Information';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Hersteller-Name';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Herstellerkategorie';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'Link zur Hersteller-Homepage';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Beschreibung';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Herstellerkategorien auflisten';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Herstellerkategorieliste';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Kategoriename';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Kategoriebeschreibung';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Hersteller';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Neu: Herstellerkategorie';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Herstellerkategorie ändern/hinzufügen';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Kategorieinformation';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Kategoriename';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Kategoriebeschreibung';
	var $_PHPSHOP_HELP_MOD = 'Hilfe';
	var $_PHPSHOP_CART_ACTION = 'Aktionen';
	var $_PHPSHOP_CART_UPDATE = 'aktualisieren';
	var $_PHPSHOP_CART_DELETE = 'Löschen';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Preis';
	var $_PHPSHOP_PRODUCT_CALL = 'Preis bitte erfragen';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'VORHERIGE';
	var $_PHPSHOP_PRODUCT_NEXT = 'NÄCHSTE';
	var $_PHPSHOP_CART_TAX = 'MwSt.';
	var $_PHPSHOP_CART_SHIPPING = 'Versandkosten';
	var $_PHPSHOP_CART_TOTAL = 'Endsumme';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Weiter';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'REGISTRIEREN';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Rechnungsinformationen';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Firma';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Name';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Adresse';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'Email';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Lieferinformationen';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Firma';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Name';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Adresse';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Bezahlung';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Name auf der Karte';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Bezahlung per';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Kreditkartennummer';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Gültigkeitsdatum';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Bestellung absenden';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'nur notwendig, falls Zahlung per Kreditkarte gewählt wird.';
	var $_PHPSHOP_ZONE_MOD = 'Lieferzonen';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Lieferzonen auflisten';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Lieferzone hinzufügen';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Lieferzonen zuordnen';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Land';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'aktuelle Zone';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'zu Zone zuordnen';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Aktualisieren';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Zonen zuordnen';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Zonenname';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Zonenbeschreibung';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Kosten pro Artikel';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Kostenobergrenze';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Zonenliste';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Zonenname';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Zonenbeschreibung';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Kosten pro Artikel';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Kostenobergrenze';
	var $_PHPSHOP_LOGIN_FIRST = 'Melden Sie sich bitte zuerst an oder registrieren Sie sich <br>als Nutzer dieser Seite. Vielen Dank.';
	var $_PHPSHOP_STORE_FORM_TOS = 'Allgemeine Geschäftsbedingungen';
	var $_PHPSHOP_AGREE_TO_TOS = 'Vor der Registrierung ist eine Zustimmung zu den Allgemeinen Geschäftsbedingungen erforderlich.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Ich stimme den Allgemeinen Geschäftsbedingungen zu.';
	var $_PHPSHOP_LEAVE_BLANK = '(Bitte nichts eintragen, bevor<br />keine abweichende Detail-php-seite erstellt wurde!)';
	var $_PHPSHOP_RETURN_LOGIN = 'Bereits registriert? Bitte melden Sie sich an.';
	var $_PHPSHOP_NEW_CUSTOMER = 'Neu hier? Dann füllen Sie bitte nachfolgende Felder aus. Die Angaben werden gespeichert und ersparen Ihnen eine Neueingabe. Als registrierter Benutzer haben Sie auch Zugriff auf Ihre Bestellinformationen.';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Kundeninformationen von:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Bestellungen';
	var $_PHPSHOP_ACC_UPD_BILL = 'Hier können Sie ihre Rechnungsadressdaten ändern';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Hier können Sie Lieferadressen hinzufügen oder vorhandene ändern.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Rechnungsadresse';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Lieferadressen';
	var $_PHPSHOP_ACC_NO_ORDERS = 'keine Bestellungen vorhanden';
	var $_PHPSHOP_ACC_BILL_DEF = '- Standard (wie Rechnungsadresse)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Sie können unbegrenzt Lieferadressen zu Ihrem Kundenkonto hinzufügen. Bitte benutzen Sie eine Abkürzung für die Lieferadresse, um diese später wiedererkennen zu können.';
	var $_PHPSHOP_CONFIG = 'Konfiguration';
	var $_PHPSHOP_USERS = 'Nutzer';
	var $_PHPSHOP_IS_CC_PAYMENT = 'Kreditkarten-Bezahlart?';
	var $_PHPSHOP_SHIPPING_MOD = 'Versandkosten';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Versandkosten';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Versender auflisten';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Versenderliste';
	var $_PHPSHOP_RATE_LIST_MNU = 'Versandarten auflisten';
	var $_PHPSHOP_RATE_LIST_LBL = 'Versandartenliste';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Name';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Reihenfolge';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Versender erstellen';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Versender bearbeiten / erstellen';
	var $_PHPSHOP_RATE_FORM_MNU = 'Versandart erstellen';
	var $_PHPSHOP_RATE_FORM_LBL = 'Versandart bearbeiten / erstellen';
	var $_PHPSHOP_RATE_FORM_NAME = 'Versandartname';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Versender';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Land/Länder';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'PLZ-Bereich Anfang';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'PLZ-Bereich Ende';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Untere Gewichtsgrenze';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Obere Gewichtsgrenze';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Versandkosten';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Verpackungskosten';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Währung';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'MwSt.-Satz';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Reihenfolge';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Versender';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Versandbezeichnung';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Gewicht von ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... bis';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Versender Firmenname';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Reihenfolge';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'Ein Versender mit dieser ID existiert bereits.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'Wählen Sie einen Versender aus.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'Zum Versender existiert wenigstens eine Versandkosteneinheit. Löschen Sie zunächst diese Referenz';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'Kein Versender mit dieser ID vorhanden.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'Wählen Sie einen Versender aus.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'Kein Versender mit dieser ID vorhanden.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'Geben Sie der Versandkosteneinheit einen Name.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'Das Zielland ist ungültig. Mehrere Länder können durch ";" getrennt werden.';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'Eine untere Gewichtsangabe ist erforderlich';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'Eine obere Gewichtsangabe ist erforderlich';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'Die untere Gewichtsangabe muss kleiner als die Obere sein';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'Es muss ein Transportpreis angegeben werden';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'Es muss eine Währung angegeben werden';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'Es muss eine Versandkosteneinheit ausgweählt werden';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Bitte wählen Sie';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Versender';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Versandart';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Preis';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-keine-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Kreditkarte';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Nutzung mit Internet-Bezahlsystem';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Bankeinzug';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Nachnahme/Vorkasse';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Bitte wählen Sie eine Lieferadresse aus!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Bitte wählen Sie eine Versandart aus!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Bitte wählen Sie eine Zahlungsweise aus!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Bitte überprüfen Sie alle Angaben und bestätigen die Bestellung!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Bitte wählen Sie eine Versandart aus!';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Bitte wählen Sie eine andere Versandart aus!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Bitte wählen Sie eine Zahlungsart!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Bitte geben Sie Ihre Kreditkartennummer an!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Bitte geben Sie den Name auf der Kreditkarte an!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'Die Kreditkartennummer ist leider ungültig!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Bitte geben Sie den Monat der Kreditkartenlaufzeit an!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Bitte geben Sie das Jahr der Kreditkartenlaufzeit an!';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'Das Datum der Kreditkartenlaufzeit ist ungültig!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Bitte wählen Sie eine Lieferadresse aus!';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Die Kreditkartennummer ist leider ungültig!';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'Es befindet sich nichts in Ihrem Warenkorb!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'Bitte wählen Sie einen Versender aus!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'Die ausgewählte Versandmethode wurde nicht gefunden!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'Ihre Versandadresse wurde nicht gefunden!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'Fehler beim Behandeln der Kreditkartendaten!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'Keine Kreditkartennummer gefunden!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Achtung, die eingegebene Kreditkartennummer ist nur für Testzwecke!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'Die Nutzer-ID wurde in der Datenbank nicht gefunden!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Bitte teilen Sie uns den Kontoinhaber mit!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Bitte teilen Sie uns die IBAN ihrer Bank mit!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Bitte hinterlassen Sie ihre Kontonummer.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Bitte hinterlassen Sie vorher ihre Bankleitzahl.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Bitte hinterlassen Sie vorher den Namen ihrer Bank.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Fehler im Bestellablauf (es wurde kein gültiger Step gefunden)';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Zahlungsinformationen wurden für spätere Bearbeitung gespeichert.<br/>';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Der Mindestbestellwert ist leider noch nicht erreicht!';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'Unser Mindestbestellwert beträgt:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Bezahlung per Kreditkarte';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'andere Zahlungsarten';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Wählen Sie eine Zahlungsart:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Mindestbestellwert';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Bankkonto Informationen';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Kontonummer';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'Bankleitzahl';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Bankname';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Kontoinhaber';
	var $_PHPSHOP_MODULES = 'Module';
	var $_PHPSHOP_FUNCTIONS = 'Funktionen';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Aktionsprodukte auflisten';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Falls Sie Anmerkungen zur Bestellung haben, teilen Sie uns diese mit';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Anmerkungen des Kunden zur Bestellung';
	var $_PHPSHOP_INCLUDING_TAX = '(inkl. $tax % MwSt.)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Bitte wählen Sie einen Artikel aus';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Artikel';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Download-Bereich';
	var $_PHPSHOP_DOWNLOADS_START = 'Download starten';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Bitte geben Sie hier Ihre per e-mail erhaltene Download-ID ein und klicken Sie anschließend auf "Download starten".';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Das maximale Download-Datum ist leider abgelaufen';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Download-Anzahl abgelaufen';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Download-ID ungültig';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Kann Benachrichtigung nicht senden an ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Info gesendet an ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Informationen zum Download der bestellten Datei(en)';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'die von Ihnen bestellte Datei steht zum Download bereit';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Bitte  geben Sie im Shop folgende Download-ID  ein: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'mögliche Download-Versuche: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Download bis {expire} Tage nach dem 1.Versuch';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Fragen? Probleme?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Download-Info von ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'downloadbares Produkt?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Danke für Ihre Zahlung. 
        Ihre Transaktion wurde abgeschlossen und Sie erhalten per E-Mail eine Quittung für Ihren Kauf. 
        Sie können sich unter <a href=http://www.paypal.com>www.paypal.com</a> in Ihr Konto einloggen, um die Transaktionsdetails anzuzeigen.';
	var $_PHPSHOP_PAYPAL_ERROR = 'Achtung, bei der Transaktion ist möglicherweise ein Fehler aufgetreten. Der Status der Bestellung
        konnte nicht aktualisiert werden.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Danke für Ihre Bestellung. Ihre Bestell-Informationen finden Sie nachfolgend.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Vielen Dank für Ihr Vertrauen, wir hoffen Sie bald wieder in unserem Shop begrüßen zu können.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Fragen? Probleme?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'Eine neue Bestellung ist eingetroffen.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Die Bestellung können Sie durch diesen Link ansehen.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Negative Mengen sind nicht gestattet.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Bitte geben Sie eine gültige Menge an.';
	var $_PHPSHOP_CART_STOCK_1 = 'Die von Ihnen angegebene Menge ist leider nicht vorhanden.';
	var $_PHPSHOP_CART_STOCK_2 = 'Wir haben zur Zeit $product_in_stock Artikel dieses Produktes auf Lager.';
	var $_PHPSHOP_CART_STOCK_3 = 'Bitte klicken Sie hier, um auf eine Warteliste für dieses Produkt gesetzt zu werden.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Bitte wählen Sie zunächst eine Produktvariante über die Detailseite aus';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'keiner';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Herr';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Frau';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Dr.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof.';
	var $_PHPSHOP_DEFAULT = 'Standard';
	var $_PHPSHOP_AFFILIATE_MOD = 'Affiliate';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Affiliates auflisten';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Affiliates Liste';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Affiliate - Name';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'aktiv';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Rate';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Monatsumsatz';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'monatliche Kommission';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Bestellungen auflisten';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'Email Affiliates';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'Email Affiliates';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'Wem eine Email senden? (* = allen)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Ihre Email-Adresse';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Der Betreff';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'aktuelle Statistiken einbinden?';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Commission Rate';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Aktiv?';
	var $_PHPSHOP_DELIVERY_TIME = 'Lieferzeit';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Informationen zur Lieferung';
	var $_PHPSHOP_MORE_CATEGORIES = 'weitere Unterkategorien';
	var $_PHPSHOP_AVAILABILITY = 'Verfügbarkeit';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Dieses Produkt ist zur Zeit leider nicht verfügbar.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Voraussichtlich wieder lieferbar ab: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Zusammenfassung';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Statistik';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Kunden';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'aktive Produkte';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'inaktive Produkte';
	var $_PHPSHOP_STATISTIC_SUM = 'Summe';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Neue Bestellungen';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Neue Kunden';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Bitte tragen Sie Ihre email-Adresse ein, um benachrichtigt zu werden, wenn das Produkt wieder verfügbar ist. 
                                                                        Wir werden Ihre email-Adresse ausschließlich zum Zwecke der Benachrichtigung verwenden.
                                                                        <br /><br />Vielen Dank!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Vielen Dank! <br />Wir werden Sie benachrichtigen, sobald das Produkt wieder verfügbar ist.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Benachrichtigen Sie mich';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Druckansicht';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Bitte wählen Sie entweder Authorize.net oder CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = 'Die Konfigurationsdatei ';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'ist beschreibbar.';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'ist schreibgeschützt.';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Global';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Pfade / URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Seite';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Lieferung';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Bestellung';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Downloads';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Bezahlung';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Ausschließlich als Katalog benutzen';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Falls aktiviert, sind alle Warenkorb- und Bestellfunktionen deaktiviert.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Preise zeigen';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Preise inkl. MwSt. zeigen?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Falls aktiviert, werden alle Preise im Shop einschließlich Umsatzsteuern angezeigt.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Wenn aktiviert, werden Preise angezeigt. Im Katalog-Modus ist es manchmal sinnvoll, die Preise von Produkten nicht zu zeigen.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Virtuelle Steuern?';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Wenn aktiviert, werden auf Produkte mit einem Gewicht von 0 besteuert (Standard). Die Datei ps_checkout.php->calc_order_taxable() kann hierbei angepasst werden.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Steuer-Modus:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Basierend auf der Lieferadresse';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Basierend auf der Betreiberadresse';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Hiermit wird bestimmt, welche Steuerrate zur Anwendung kommt:<br />
                                                                                    <ul><li>die, die dem Herkunftsland des Kunden entspricht</li>
                                                                                    <li>die, die dem Herkunftsland des Shop-Betreibers entspricht</li>
																					<li>oder "EU Modus", bei dem ein pro-Produkt-Steuersatz verwendet wird wenn der Kunde aus der Europäischen Union stammt, ansonsten aber - falls vorhanden! - der Steuersatz des Landes verwendet wird, aus dem der Kunde kommt.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Mehrere Steuerraten benutzen?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Wenn aktiviert, können verschiedene Produkte jeweils eigene Steuerraten erhalten (z.B. 7% für Bücher, 16% für andere Waren)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Rabatt für Zahlungarten vor Steuern und Lieferkosten abziehen?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Kunden-Rezensionen und Produktbewertungen nutzen/erlauben?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Wenn aktiviert, können registrierte Nutzer <strong>Produkte bewerten</strong> und <strong>Rezensionen schreiben</strong>.<br />
                                                                                Kunden wird es so ermöglicht, die eigenen Erfahrungen mit Produkten mit anderen Kunden zu teilen.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Wenn aktiviert, werden Rabatte auf bestimmte Zahlungsarten vor Steuern und Lieferkosten abgezogen.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Die Eingabe von Bankverbindungsdaten ermöglichem?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Falls aktiviert, besteht für Kunden die Möglichkeit, ihre Daten zur Bankverbindung zu hinterlassen.
                                                                                      Erforderlich bei der Nutzung von Zahlungsarten wie Bankeinzug o.ä.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Die Eingabe/Auswahl von Bundesländern ermöglichem?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Falls aktiviert, können Kunden bei der Registrierung aus einer Auswahlliste Bundesländer auswählen. 
                                                                                  (standardmäßig sind nur Bundesländer der USA vorgegeben. Die Liste von Bundesländern kann in der Datei ps_html.php geändert werden.)';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Zustimmung zu Geschäftsbedingungen erforderlich?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Falls aktiviert, können sich Kunden nur im Shop registrieren, wenn Sie vorher den Geschäftsbedingungen zustimmen.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Inventarverwaltung nutzen?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Falls aktiviert, wird stets überprüft, ob das Produkt, welches ein Kunde in den Warenkorb legen möchte,
                                                                                        noch im Bestand ist. Zudem wird bei jedem Produkt die noch vorhandene Stückzahl angezeigt.
                                                                                          Falls nicht aktiviert, kann der Kunde mehr Produkte in den Warenkorb legen, als angegeben (Standard).';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Affiliate-Programm aktivieren?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Dies aktiviert die Nutzung des Shops durch sog. \'affiliates\'. Sollte nur aktiviert werden, falls man bestimmt Shopper zur \'Affiliate\'-Liste hinzugefügt hat.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Bestell-Email Format:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Text email';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML email';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Dies bestimmt, wie die Bestätigungs-emails aufgemacht sind:<br />
                                                                                        <ul><li>als a einfache Text-email</li>
                                                                                        <li>oder als eine formatierte HTML-email mit Bildern.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Frontend-Administration für nicht-Backend Nutzer erlauben?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'Mit dieser Einstellung kann es nicht-Backend-Nutzern (mit storeadmin oder admin Rechten) ermöglicht werden, 
                                                                                              die Frontend Administration zu nutzen (z.B. für registrierte Nutzer / Autoren).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'Die Web-Adresse zur Seite. Normalerweise identisch mit der Mambo URL (mit einem Schrägstrich am Ende!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'Sichere URL';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'The sichere Web-Adresse zur Seite. (Beginnt mit https - mit einem Schrägstrich am Ende!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'COMPONENTURL';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'Die Web-Adresse zur VirtueMart Komponente. (mit einem Schrägstrich am Ende!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'IMAGEURL';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'Die Web-Adresse zum Bildverzeichnis der mambo-phpShop Komponente. (mit einem Schrägstrich am Ende!!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'ADMINPATH';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'Der Pfad zum mambo-phpShop /com_phpshop Administrationsverzeichnis.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'CLASSPATH';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'Der Pfad zum mambo-phpShop /classes Verzeichnis.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'PAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'Der Pfad zum mambo-phpShop /html Verzeichnis.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'IMAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'Der Pfad zum mambo-phpShop /shop_image Verzeichnis.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'HOMEPAGE';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Dies ist die Seite, die geladen wird, falls kein page= Parameter angegeben ist.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'ERRORPAGE';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Dies ist die Standard-Detail-Seite für Fehlermeldungen (veraltet).';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'DEBUGPAGE';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Die ist die Standardseite für Debugging-Meldungen.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'DEBUG ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'Schaltet den Debugging-Modus zur Fehlersuche an.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'FLYPAGE';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Dies ist die Standardseite, um Produktdetails anzuzeigen.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Standard - Kategorie-Vorlage';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Hiermit wird die standardmäßig zu ladende Vorlagendatei (template) angegeben,
                                                                                                      die Produkte in einer Übersicht anzeigt.<br />
                                                                                                      Es können durch Anpassung der vorhandenen neue Vorlagen erstellt werden.<br />
                                                                                                      Diese Vorlagen befinden sich im Verzeichnis <strong>COMPONENTPATH/html/templates/</strong> 
                                                                                                      und fangen mit \'browse_\' an';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Produkte pro Zeile';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Die legt die Standardmäßige Anzahl von Produkte in einer Tabellenzeile fest. <br />
                                                                                                      Beispiel: Ist 4 eingetragen, werden standardmäßig (falls keine spezielle Kategorie angegeben ist,
                                                                                                      4 Produkte pro Zeile angezeigt.';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = '"kein Bild vorhanden" - Bild';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Dies Bild wird gezeigt, falls kein eigenes Produktbild vorhanden ist.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'Anzahl der Zeilen von Suchergebnissen';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Gibt die Anzahl der Zeilen einer Liste pro Seite einer Liste eines Suchergebnisses an.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'Suchfarbe 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Gibt die Farbe der ungeraden Zeilen einer Liste an.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'Suchfarbe 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Gibt die Farbe der geraden Zeilen einer Liste an.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'Maximale Zeilen';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Gibt die Anzahl der Zeilen an, die in der Bestell-Auswahlliste auftauchen.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Fußzeile ';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Zeigt ein Bild \'powered-by-mambo-phpShop\' in der Fußzeile.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'LIEFERMODUL';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Standard Liefermodul mit individuell konfigurierbaren Transportunternehmen und Lieferarten. <strong>Empfohlen!</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = 'Zonen-Liefermodul, Country Version 1.0<br />
                                                                                                          Für weitere Informationen zu diesem Modul steht <a href="http://ZephWare.com">http://ZephWare.com</a><br />
                                                                                                          zur Verfügung oder kontaktieren Sie <a href="mailto:zephware@devcompany.com">ZephWare.com</a>.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = 'UPS Tools Versandkostenberechnung';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'UPS Zugangs-Code';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Der von UPS mitgeteilte Zugangs-Code';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'UPS User ID';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'Die von UPS mitgeteilte Nutzerkennung.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'UPS Passwort';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'Das Passwort für den UPS Account';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'InterShipper-Modul. Nur nutzen, wenn Sie einen Intershipper.com account haben.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Liefermodule NICHT nutzen. Z.B. wenn Sie Downloadbare Güter verkaufen, die nicht ausgeliefert werden müssen.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'InterShipper Passwort';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Das Passwort for Ihren Intershipper Account.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'InterShipper email';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'Die email adresse für Ihren intershipper Account.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'Sicherheits-Schlüsselwort';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Wird genutzt, um Daten in der Datenbank verschlüsselt zu hinterlegen. Diese Datei sollte daher nicht von Unauthorisierten eingesehen werden können.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Bestellbegleitende Übersicht aktivieren?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Falls aktiviert, wird dem Kunden während der verschiedenen Schritte der Bestellung jederzeit visuell signalisiert, 
                                                                                                        an welcher Stelle er/sie sich gerade befindet ( 1 - 2 - 3 - 4 mit Graphiken).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Bestellprozess auswählen';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Standard :</strong><br/>
               1. Auswahl der Lieferadresse<br />
              2. Auswahl der Lieferart<br />
              3. Auswahl der Zahlungsart<br />
              4. Bestätigung der Bestellung';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Prozess 2:</strong><br/>
               1. Auswahl der Lieferadresse<br />
              2. Auswahl der Zahlungsart<br />
              3. Bestätigung der Bestellung';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Prozess 3:</strong><br/>
               1. Auswahl der Lieferart<br />
              2. Auswahl der Zahlungsart<br />
              3. Bestätigung der Bestellung';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Prozess 4:</strong><br/>
               1. Auswahl der Zahlungsart<br />
              2. Bestätigung der Bestellung';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Download-Feature aktivieren';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Dies muss aktiviert werden, falls downloadbare Güter verkauft werden sollen.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Bestellstatus, mit dem der Download ermöglicht wird.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Wählen Sie den Bestellstatus aus, bei dem der Kunde über den Download per e-mail benachrichtigt wird.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Bestellstatus mit dem der Download deaktiviert wird.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Bestellstatus, mit dem der Download für den Kunden deaktiviert wird.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'DOWNLOAD-Pfad';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'Das physikalische Verzeichnis (keine URL!) zu den Dateien, die Kunden per ID herunterladen können (Schrägstrich am Ende!)<br>
        <span class="message">Aus Sicherheitsgründen sollte dieses Verzeichnis in jedem Fall außerhalb des Web-Wurzelverzeichnisses liegen.</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Download-Maximum';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Gibt die Anzahl von Dowloads an, die mit einer Download-ID durchgeführt werden können.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Download-Zeitspanne';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Gibt die Zeitspanne <strong>in Sekunden</strong> an, in der der Kunde den Download durchführen kann. 
  Die Zeitspanne läuft ab dem ersten Download. Ist diese abgelaufen, wird die Download-ID deaktiviert.<br />Hinweis : 86400s=24h, 432000=5d.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'IPN (Sofortige Zahlungsbestätigung - PayPal) nutzen?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Falls aktiviert, können Kunden die Zahlung über einen kostenlosen PayPal Account abwickeln.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'PayPal Email:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Die email adresse für PayPal Zahlungen. Ihre Empfänger-Email-Adresse.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Bestellstatus for erfolgreiche Transaktionen';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Wählen Sie den Bestellstatus aus, auf den die Bestellung gesetzt wird, wenn die Zahlunge über PayPal erfolgreich war. 
                                                                                                            Falls Sie das Download-Feature aktiviert haben, wählen Sie den Status aus, bei dem der Download aktiviert wird und der Kunde
                                                                                                            die Download-ID mitgeteilt bekommt.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Bestellstatus für fehlgeschlagene Transaktionen';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Wählen Sie den Bestellstatus für fehlgeschlagene PayPal Transaktionen.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'PayMate Zahlungen für Kunden ermöglichen?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Falls aktiviert, können Kunden die Zahlung über den kostenlosen AUSTRALISCHEN PayMate Service Account abwickeln.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'PayMate Nutzername:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Ihr Nutzeraccount für PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Authorize.net Zahlungen aktivieren?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Anhaken, falls Sie Kreditkartenzahlungen über Authorize.net abwickeln wollen.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Test modus?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Wählen Sie \'Ja\' während des Testens und \'Nein\', um live Transaktionen zu ermöglichen.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Ja';
	var $_PHPSHOP_ADMIN_CFG_NO = 'Nein';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Authorize.net Login ID';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'Ihre Authorize.Net Login ID';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Authorize.net Transaktionsschlüssel';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'Ihr Authorize.net Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Authentifizierungstyp';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'Dies ist der Authorize.Net Authentifizierungstyp.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'CyberCash-Zahlungen aktivieren?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Anhaken, falls Sie Kreditkartenzahlungen über CyberCash-Zahlungen abwickeln wollen. (veraltet!)';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash MERCHANT';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_MERCHANT ist Ihre CyberCash Merchant ID';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash Merchant Key';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash Merchant Key ist Ihr Merchant Schlüssel für CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash PAYMENT URL';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'CyberCash PAYMENT URL ist die URL, mitgeteilt von Cybercash für sichere Zahlungen.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash AUTH TYPE';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'Dies ist der CyberCash Authentifizierungstyp';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Erweiterte Suche';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Alle Kategorien durchsuchen';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Alle Produktinformationen durchsuchen';
	var $_PHPSHOP_SEARCH_PRODNAME = 'nur nach Produktnamen';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'nur nach Hersteller-Webseite';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'nur nach Produktbeschreibung';
	var $_PHPSHOP_SEARCH_AND = 'und';
	var $_PHPSHOP_SEARCH_NOT = 'nicht';
	var $_PHPSHOP_SEARCH_TEXT1 = 'Die erste Auswahlliste lässt Sie eine Kategorie wählen, in der Sie ausschließlich suchen wollen. 
        In der zweiten Auswahlliste können Sie angeben, nach welcher Art von Produktdetails Sie suchen wollen.';
	var $_PHPSHOP_SEARCH_TEXT2 = 'Sie können die Suche durch Angabe eines zweiten Suchwortes verfeinern.
    Durch Auswahl von UND oder NICHT bestimmen Sie, ob das zweite Suchwort in den Produktdetails vorkommen muss,
    oder ob nur Produkte angezeigt werden sollen, die das zweite Suchwort NICHT enthalten.';
	var $_PHPSHOP_ORDERBY = 'Sortieren nach';
	var $_PHPSHOP_CUSTOMER_RATING = 'Durchschnittliche Kundenbewertung';
	var $_PHPSHOP_TOTAL_VOTES = 'Anzahl der Kundenbewertungen';
	var $_PHPSHOP_CAST_VOTE = 'Bitte bewerten Sie das Produkt';
	var $_PHPSHOP_RATE_BUTTON = 'Bewerten';
	var $_PHPSHOP_RATE_NOM = 'Bewertung';
	var $_PHPSHOP_REVIEWS = 'Kundenrezensionen';
	var $_PHPSHOP_NO_REVIEWS = 'Für dieses Produkt wurde noch keine Bewertung abgegeben.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Schreiben Sie als erster eine Rezension...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Bitte melden Sie sich an, um eine Rezension über dieses Produkt zu schreiben.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Bitte geben Sie eine Bewertung für das Produkt ab!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Bitte haben Sie Verständnis dafür, dass für eine Rezension \\n die Eingabe von mindestens 100 Zeichen erforderlich sind.';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Bitte haben Sie Verständnis dafür, dass das Maximum \\n für Rezensionen 2000 Zeichen beträgt.';
	var $_PHPSHOP_WRITE_REVIEW = 'Teilen Sie uns Ihre Meinung über dieses Produkt mit!';
	var $_PHPSHOP_REVIEW_RATE = 'Zunächst wählen Sie zur Bewertung einen Wert aus! <br />Möglich sind Bewertungen von 5 Sternen (ausgezeichnet) bis 0 Sterne (sehr schlecht).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Schreiben Sie nun Ihre Meinung / Rezension....(min. 100, max. 2000 Zeichen) ';
	var $_PHPSHOP_REVIEW_COUNT = 'Anzahl Zeichen: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Rezension abschicken';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Sie haben für dieses Produkt bereits eine Rezension geschrieben. Vielen Dank.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Vielen Dank, dass Sie uns Ihre Meinung mitgeteilt haben. Die Rezension wurde erfolgreich gespeichert.';
	var $_PHPSHOP_COMMENT = 'Kommentar';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Kreditkartentypen ändern/hinzufügen';
	var $_PHPSHOP_CREDITCARD_NAME = 'Kreditkartenname';
	var $_PHPSHOP_CREDITCARD_CODE = 'Kreditkarten - Code';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Kreditkartentyp';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Kreditkartenliste';
	var $_PHPSHOP_UDATE_ADDRESS = 'Adresse aktualisieren';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'zurück zum Shop';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Ihre Bestellung wurde erfolgreich gespeichert! Wir werdem umgehend mit der Bearbeitung der Bestellung beginnen.';
	var $_PHPSHOP_ORDER_LINK = 'Folgen Sie dieser Verknüpfung, um sich die Details der Bestellung anzeigen zu lassen.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'der Status Ihrer Bestellung Nr. {order_id} hat sich geändert.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'Neuer Status ist:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'Um die Details der Bestellung anzusehen, folgen Sie bitte dieser Verknüpfung (oder kopieren Sie die Adresse in Ihren Browser):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Änderung des Bestellstatus: Bestell-Nr. {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Kunden benachrichtigen?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Bitte erst den Status ändern!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Preis-Nachlass auf die Standard-Shoppergruppe (in %)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Ein positiver Betrag X.xx bedeutet: Falls ein Produkt keinen Preis für DIESE Shoppergruppe hat, wird der Preis der Standard-Shoppergruppe um X.xx % vermindert. Ein negativer Betrag erwirkt das Gegenteil.';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Produkt-Rabatt';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Produkt-Rabatte Liste';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Produktrabatt hinzufügen/ändern';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Rabttbetrag';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Tragen Sie den Rabattbetrag ein';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Rabatt-Typ';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Prozentwert';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Geldbetrag';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Geben Sie an, ob der angegebene Rabattbetrag ein Prozentwert oder ein Abzugsbetrag vom Preis sein soll.';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Anfangsdatum des Rabattes';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Bestimmt den Tag, ab dem der Rabatt gültig ist.';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Enddatum des Rabattes';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Bestimmt den Tag, bis zu dem der Rabatt gültig ist.';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Benutzen Sie das Rabattformular um Rabatte hinzuzufügen!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Sie sparen';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'größeres Bild anzeigen';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Darstellung von Beträgen';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Währungssymbol';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Es können auch HTML Entities benutzt werden (z.B. €,£,¥,...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Nachkommastellen';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Anzahl der Nachkommastellen (kann 0 sein)<br/><b>Führt eine implizite Rundung durch!</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Nachkomma - Trennzeichen';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Das Trennzeichen, um die Nachkommastellen vom Restbetrag hervorzuheben (, oder .)';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Tausender - Trennzeichen';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Das Trennzeichen, um die Tausenderstellen hervorzuheben (kann leergelassen werden)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Format positiver Beträge';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Format zur Anzeige von positiven Beträgen.<br>(<i>Symb</i> steht für das Währungssymbol)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Format negativer Beträge';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Format zur Anzeige von negativen Beträgen.<br>(<i>Symb</i> steht für das Währungssymbol)';
	var $_PHPSHOP_OTHER_LISTS = 'sonstige Produktlisten';
	var $_PHPSHOP_MORE_IMAGES = 'weitere Bilder';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Verfügbare Bilder für';
	var $_PHPSHOP_BACK_TO_DETAILS = 'zurück zu den Produktdetails';
	var $_PHPSHOP_FILEMANAGER = 'Datei-Manager';
	var $_PHPSHOP_FILEMANAGER_LIST = 'Datei-Manager::Produktliste';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Bild/Datei hinzufügen';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'zugewiesene Bilder';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'Ist downloadbar?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'zugewiesene Dateien (Datenblätter, Katalogauszüge,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Veröffentlicht?';
	var $_PHPSHOP_FILES_LIST = 'Datei-Manager::Bild-/Dateiliste für';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Dateiname';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'Datei - Titel';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Dateityp';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Dateieintrag ändern';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Vollbild';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'kleines Bild';
	var $_PHPSHOP_FILES_FORM = 'Datei hinzufügen/aktualisieren für';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Derzeitige Datei';
	var $_PHPSHOP_FILES_FORM_FILE = 'Datei';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Bild';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Speichern in...';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'Standard-Produktbildpfad';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Pfad angeben';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Download Verzeichnis (z.B. für Downloadbare Güter)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Automatisch kleines Bild erzeugen?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Datei veröffntlicht?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Datei-Titel (Anzeige für den Kunden)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Datei-Beschreibung';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'Datei - URL (optional)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Bitte einen gültigen Pfad angeben!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'Das Bild wurde erfolreich verkleinert!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'Das kleine Bild konnte nicht automatisch verkleinert werden!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Datei/Bild Upload Fehler';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Das große Bild konnte nicht gelöscht werden.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Großes Bild erfolgreich gelöscht.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Das kleine Bild konnte nicht gelöscht werden (möglicherweise Datei nicht vorhanden): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Kleines Bild erfolgreich gelöscht.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Die Datei konnte nicht gelöscht werden.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Datei erfolgreich gelöscht.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Die angeforderte Datei wurde leider nicht gefunden!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Bild leider nicht gefunden!';
	var $_PHPSHOP_COUPON_MOD = 'Gutschein';
	var $_PHPSHOP_COUPONS = 'Gutscheine';
	var $_PHPSHOP_COUPON_LIST = 'Gutschein List';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Der Gutschein wurde bereits eingelöst.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Der Gutschein wurde eingelöst! Vielen Dank.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Falls Sie einen Gutschein haben, tragen Sie den Code bitte hier ein:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Absenden';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Dieser Gutschein Code existiert bereits. Bitte wählen Sie einen anderen.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Gutschein aktualisieren';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Klicken Sie auf einen Gutschein Code um diesen zu aktualisieren';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Code';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Prozent oder Betrag';
	var $_PHPSHOP_COUPON_TYPE = 'Gutscheintyp';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Ein Geschenk-Gutschein wird gelöscht, nachdem er vom Kunden in einer Bestellung eingelöst wurde. Ein permanenter Gutschein kann vom Kunden mehr als einmal genutzt werden.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Geschenk-Gutschein';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Permanenter Gutschein';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Prozentsatz/Betrag';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Gutschein Code Löschen';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Wollen Sie diesen Gutschein wirklich löschen?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Bitte füllen Sie alle Felder aus!';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'Der Betrag für den Gutschein muss eine Zahl sein.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Neuer Gutschein';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Gutschein-Code';
	var $_PHPSHOP_COUPON_PERCENT = 'Prozent';
	var $_PHPSHOP_COUPON_TOTAL = 'Betrag';
	var $_PHPSHOP_COUPON_VALUE = 'Wert';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Der Gutschein Code wurde gespeichert.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Gutschein speichern';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Gutschein-Rabatt';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Gutschein Code nicht gefunden. Bitte versuchen Sie es erneut.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Gutschein-Benutzung aktivieren';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Wird die Gutschein-Benutzung aktiviert, wird es dem Kunden erlaubt, während des Bestellvorgangs einen Gutschein-Code einzugeben.';
	var $_PHPSHOP_FREE_SHIPPING = 'Versandkostenfrei';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Diese Bestellung ist versandkostenfrei!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Mindestbetrag für Wegfall der Versandkosten';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Dieser Betrag (inkl. MwSt.!) gibt an, ab wann die Versandkosten komplett wegfallen 
                                                (Beispiel: <strong>50</strong> bedeutet versandkostenfreue Bestellung ab einem Bestellwert
                                                von 50€ (inkl. MwSt.)';
	var $_PHPSHOP_YOUR_STORE = 'Ihr Shop';
	var $_PHPSHOP_CONTROL_PANEL = 'Startseite';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF - Button';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Den PDF - Button im Shop anzeigen / nicht anzeigen';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Zu JEDER Bestellung Zustimmung zu AGB verlangen?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Aktivieren, falls vom Kunden zu JEDER Bestellung eine Zustimmung zu den AGB verlangt werden soll.';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Bankkonto-Typ';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Giro-Konto';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'geschäftliches Giro-Konto';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Sparkonto/Sparbuch';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Regelmäßige Zahlungen?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Ermöglicht die Einrichtung von regelmäßigen Zahlungen.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Interner Fehler bei Herstellung einer Verbindung zu';
	var $_PHPSHOP_PAYMENT_ERROR = 'Fehler bei der Bearbeitung der Zahlung';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Die Zahlung wurde erfolgreich durchgeführt';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS konnte die Anfrage zu den Versandarten nicht bearbeiten.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'garantierte(r) Tag(e) zur Lieferung';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'UPS Abhol-Methode';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Gibt an, wie Sie Pakete zu/von UPS geben/abholen lassen.';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'UPS Verpackung?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Wählen Sie die standardmäßige Verpackung für UPS.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Lieferung an Privatpersonen?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Privatperson (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Kommerzielle Leiferung (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Von UPS Versandarten für Lieferung an Privatpersonen ODER kommerzielle Adressen erfragen?';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Bearbeitungsgebühr';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Ihre Bearbeitungsgebühr für diese Versandmethode.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Steuerrate';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Die gewählte Steuerrate auf die Versandkosten berechnen.';
	var $_PHPSHOP_ERROR_CODE = 'Fehlercode';
	var $_PHPSHOP_ERROR_DESC = 'Fehlerbeschreibung';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Transaction Key anzeigen/ändern';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Passwort/Transaction Key anzeigen/ändern';
	var $_PHPSHOP_TYPE_PASSWORD = 'Bitte geben Sie Ihr Nutzerpasswort ein';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Aktuelles Passwort';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Aktueller Transaction Key';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'Der Transaction Key wurde erfolgreich geändert.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Sicherheits-Code auf der Kredikarte abfragen (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Soll der Kunde den Sicherheits-Code auf der Kredikarte eintragen (3- oder 4-stellige Zahl auf der Rückseite von Kreditkarten, auf der Vorderseite bei American Express Karten)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Bitte geben Sie den 3- oder 4-stelligen Sicherheits-Code ein. (auf der Rückseite von Kreditkarten, auf der Vorderseite bei American Express Karten)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'Bitte geben Sie den 3- oder 4-stelligen Kredikarten-Sicherheits-Code ein.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'ENTWEDER einen Dateiname angeben';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'Achtung: Wird hier ein Dateiname (bitte ohne Pfadangabe!) eingegeben, wird eine zum Upload angegebene Datei nicht gespeichert!!! Die in diesem Feld angegebene Datei muss per FTP hochgeladen werden.</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'ODER eine neue Datei Uploaden';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Diese Datei wird hochgeladen und stellt das zu verkaufende Produkt dar. Eine Vorhandene Datei wird gelösct.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Geben Sie hier Text ein, der dem Kunden zur Verfügbarkeit der Produktes angezeit wird.<br />z.B.: 24h, 48 Stunden, 3 - 5 Tage, auf Anfrage.....';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'Order wählen Sie ein Bild, um die Verfügbarkeit visuell darzustellen.<br />Die Bilder hier sind eine automatische Auflistung aller vorhandenen Bilder in Ihrem Verzeichnis <i>/components/com_phpshop/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Attributsliste';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Beispiel für das Attributslisten-Format:</h4>
        <pre>Größe,XL[+1.99],M,S[-2.99];Farbe,Rot,Grün,Gelb,TeureFarbe[=24.00];WeiteresAttribut,..,..</pre>
        <h4>Preisanpassungen/-abweichungen sind möglich:</h4>
        <span class="sectionname">
        <strong>+</strong> bedeutet: Den angegebenen Betrag zum Preis hinzufügen.<br />
        <strong>-</strong> bedeutet: Den angegebenen Betrag zum Preis abzuziehen.<br />
        <strong>=</strong> bedeutet: Ersetze den Preis mit dem angegebenen Betrag.
      </span>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Individual-Attributsliste';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Beispiel für die Individual-Attributsliste:</h4>
        <pre>Name;Spruch;Extras;...</pre>';
	var $_PHPSHOP_MULTISELECT = 'Mehrfachauswahl mit STRG-Taste und Mausklick';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'Das eProcessingNetwork.com Bezahlsystem aktivieren?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Anklicken, um eProcessingNetwork.com zu nutzen.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Test Modus?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Wärhend einer Testpahse, bitte \'Ja\' wählen. \'Nein\' aktiviert Live-Transaktionen.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'eProcessingNetwork.com Login ID';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'Dies ist die eProcessingNetwork.com Login ID';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'eProcessingNetwork.com Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'This is your eProcessingNetwork.com Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Authentication Type';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'This is the eProcessingNetwork.com authentication Typ.';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Verwandte Produkte';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Anhand dieser Liste können Produkt-Verbindungen aufgebaut werden. Durch die Auswahl eines oder mehrerer Produkte werden diese als \'verwandt\' mit diesem Produkt gekennzeichnet.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Verwandte Produkte...';
	var $_PHPSHOP_IMAGE_ACTION = 'Bild ändern?';
	var $_PHPSHOP_NONE = 'nein';
	var $_PHPSHOP_ORDER_HISTORY = 'Ereignisse dieser Bestellung';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Kommentar';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Kommentare zur Bestellung';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Diesen Kommentar einbinden?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Datum';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Kunde benachrichtigt?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Änderung des Bestellstatus';
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
	var $_PHPSHOP_PARAMETERS_LBL = 'Parameter';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Produkttyp';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Produkttypenliste';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Add/Edit Produkttyp';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Produkttyp-Liste für';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Produkttypen auflisten';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Produkttyp hinzufügen for';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Produkttyp hinzufügen';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Produkttyp';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Produkttyp - Name';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Produkttyp - Beschreibung';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Parameter';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Produkttyp - Information';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Veröffentlicht?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Produkttyp - Übersichtsseite';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Produkttyp - Detailseite';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Parameter dieses Produkttyps';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Parameter Information';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Produkttyp nicht gefunden!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Parametername';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Dies wird der Name der neu anzulegenden Tabelle in der Datenbank sein. Must also einmalig und ohne Leerzeichen sein.<br/>Beispiel: main_material';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Parameterlabel';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Parameterbeschreibung';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Parametertype';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'ganze Zahl';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Text';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Kurztext';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Fließkommazahl';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Buchstaben';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Datum & Zeit';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Datum';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'YYYY-MM-DD';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Zeit';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'HH:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Break Line';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'mehrere Werte';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'mögliche Werte';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'die möglichen Werte als Mehrfachauswahl anzeigen?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Wenn mögliche Werte eingetragen sind, können die Parameter nur diese Werte haben. Beispiel für mögliche Werte:</strong><br/><span class="sectionname">Stahl;Holz;Plastik;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Standard-Wert';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'Beispiel für den Parameter Standard-Wert:<ul><li>Datum: YYYY-MM-DD</li><li>Zeit: HH:MM:SS</li><li>Datum & Zeit: YYYY-MM-DD HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Einheit';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Erweiterte Suche anhand von Parametern';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Parameters Search';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Anhand der Parametersuche kann man technische Parameter zum Filtern der Suchergebnisse verwenden. Bitte benutzen Sie dazu folgendes Formular:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Es wurde keine Kategorie zum durchsuchen gefunden.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Es wurde leider kein Produkttyp mit dem angegebenen Namen gefunden.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'ist wie';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'ist nicht wie';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Volltextsuche';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Alle ausgewählten';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Einzelne oder alle von den ausgewählten';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Formular zurücksetzen';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Suche in Kategorie';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Parameter ändern';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'absteigende Sortierung';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'aufsteigende Sortierung';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Parameter der Kategorie';
	var $_PHPSHOP_FEE = 'Gebühren';
	var $_PHPSHOP_PRODUCT_CLONE = 'Produkt klonen';
	var $_PHPSHOP_CSV_SETTINGS = 'Einstellungen';
	var $_PHPSHOP_CSV_DELIMITER = 'Trennzeichen';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Feldbegrenzer';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Eine CSV Datei hochladen';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'CSV Datei absenden';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'aus Verzeichnis laden';
	var $_PHPSHOP_CSV_FROM_SERVER = 'CSV Datei vom Server laden';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'CSV-Datei Export';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Feld-Reihenfolge auswählen:';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Standard-Reihenfolge';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'eigene, angepasste Reihenfolge';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Alle Produkte in eine CSV-Datei exportieren';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'CSV Import / Export Konfiguration';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Änderungen speichern';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Feldname';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'Standardwert';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Reihenfolge';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Pflichtfeld?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Import/Export';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Ein neues Feld anfügen';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Dokumentation';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Das angeforderte Produkt wurde nicht gefunden!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Produkte zeigen, die nicht verfügbar sind?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Falls angehakt,  werden auch solche Produkte gezeigt, deren Inventarmenge 0 beträgt. Ansonsten werden die Produkte nicht angezeigt.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'Anzahl {unit} in der Verpackung';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'Anzahl {unit} pr Paket:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'vergriffene Produkte verstecken';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Aktionsprodukte & Rabattierte Produkte';
	var $_PHPSHOP_FEATURED = 'Aktionsprodukte';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'zurück zum Lande';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'zurück zum Dateimanager';
	var $_PHPSHOP_ADD_STATE = 'Ein Bundesland hinzufügen';
	var $_PHPSHOP_LIST_STATES = 'Bundesländer auflisten';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'Aktionsprodukte UND rabattierte Produkte';
	var $_PHPSHOP_SHOW_FEATURED = 'Aktionsprodukte';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'Rabattierte Produkte';
	var $_PHPSHOP_FILTER = 'Filter';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'zurück zur Hauptseite';
	var $_PHPSHOP_EXPAND_TREE = 'Baum ausklappen';
	var $_PHPSHOP_COLLAPSE_TREE = 'Baum einklappen';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'rabattierter Preis';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Hier kann ein rabattierter Endpreis angegeben werden. Es wird beim Speichern aus dem Rabattpreis automatisch ein Rabatt erzeugt und diesem Produkt zugewiesen.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Preis pro Einheit';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'Shop OFFLINE schalten?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'Solange aktiviert, ist der Shop durch Kunden nicht nutzbar. Es wird die Offline-Nachricht angezeigt';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Offline-Nachricht';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Tabellenpräfix für Shop-Tabellen';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'Standard ist: <strong>vm</strong>.';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Seitennavigation über der Produktliste?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Soll über der Auflistung von Produkten im Frontend eine Seitennavigation auch ÜBER der Liste angezeigt werden?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Anzahl der Produkte zeigen?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Soll die Anzahl von Produkte innerhalb einer Kategorie angezeigt werden? Beispiel: Gartengeräte (4)';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'Stil der "Bestellen" Buttos';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'Dynamisches Verkleinern von Produktbildern aktivieren?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'Falls aktiviert, werden Produktbilder automatisch auf die unten angebenen Maße verkleinert. 
Hierzu wird zwingend die GD1 / GD2 Bibliothek benötigt. Das Vorhandensein der GD2 Unterstützung kann unter "System" -> "System Info" -> "PHP Info" -> gd angezeigt werden. 
Die Qualität der erzeugten Bilder ist viel besser, als wenn die Bilder vom Browser des Kunden verkleinert dargestellt würden. Die verkleinerten Bilder sind im Verzeichnis /shop_image/prduct/resized/ zu finden. Falls das Bild bereits verkleinert wurde, wird immer wieder die vorhandene Kopie genutzt.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'Breite des verkleinerten Bildes';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'Die Ziel<strong>breite</strong> des verkleinerten Bildes.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Höhe des verkleinerten Bildes';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'Die Ziel<strong>höhe</strong> des verkleinerten Bildes.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Bitte mindestens EINE Versandart auswählen!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Preiskonfiguration';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Nutzergruppe, die Preise sehen darf.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'Die ausgewählte Nutzergruppe und alle Nutzergruppen mit höheren Nutzerrechten können die Produktpreise sehen.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Anzeigen von "(inkl. XX% MwSt.)"? (falls anwendbar)';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'Falls aktiviert, wird hinter Preisen "(inkl. xx% MwSt.)" angezeigt (falls Preise denn auch inkl. Steuern angezeigt werden).';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'Preis-Label für Verpackungseinheiten verwenden?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'Falls aktiviert, wird das Preis-Label durch die Verpackungseinheit vorgegeben:
<strong>Preis pro Paket (10 Stück)<strong><br/>
<br/>
Falls nicht aktiviert, sehen Preis-Labels wie immer aus:<br/>
<strong>Preis: $xx.xx</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'mehr Haupteinstellungen';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Haupteinstellungen';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = '(De-)Aktivieren von Features';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Steuerkonfiguration';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Startanzahl';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Endanzahl';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'Einstellungen zur Nutzerregistrierung';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'Nutzerregistrierung erlaubt?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'Aktivierung von neuen Kundenaccounts notwendig?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Stille (versteckte) Nutzerregistrierung nutzen?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'Falls aktiviert, müssen Neukunden keinen Nutzernamen und Passwort eintragen. Stattdessen wird die Email-Adresse als Nutzername genutzt und ein zufällig gewähltes Passwort per Email verschickt.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Hallo %s,
vielen Dank für die Registrierung bei %s. Ihr Kunden-Account wurde angelegt.
Sie können sich ab sofort unter %s anmelden. Dazu nutzen Sie bitte folgende Nutzerdaten:
Nutzername - %s
Passwort - %s
';
	var $_PEAR_LOG_CRIT = 'Kritisch';
	var $_PEAR_LOG_ERR = 'Fehler';
	var $_PEAR_LOG_WARNING = 'Warnung';
	var $_PEAR_LOG_INFO = 'Info';
	var $_PEAR_LOG_TIP = 'Info';
	var $_PEAR_LOG_ALERT = 'Alarm';
	var $_PEAR_LOG_EMERG = 'Notfall';
	var $_PEAR_LOG_NOTICE = 'Mitteilung';
	var $_PEAR_LOG_DEBUG = 'Debug';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'Enable PayFlow Pro payment?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'Check to use VeriSign\'s PayFlow Pro with VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'Test mode ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'Select \'Yes\' while testing. Select \'No\' for enabling live transactions.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'VeriSign processing Partner ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'The Partner ID provided to you by the authorized VeriSign Reseller that registered you for the PayFlow Pro service';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'PayFlow Pro Login ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'This is your PayFlow Pro Login ID';
	var $_VM_TAXDETAILS_LABEL = 'im MwSt.-Betrag enthalten:';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'Sortiere Produkte nach...';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'Hier wird festgelegt, welches Feld als Standard für die Sortierung der Produkte auf der Übersichtsseite genutzt wird.';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'Verfügbare "Sortiere nach..." Felder';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'Bitte auswählen, welche Felder auf der Produkt-Übersichtsseite angezeigt werden sollen (diese erlauben das Sortieren nach bestimmten Kriterien). Falls keines ausgewählt ist, wird keine Auswahlliste angezeigt und nach dem weiter oben gewählten Standard-Sortierungsfeld sortiert.';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO = 'Verbraucherhinweis zum Widerrufs- oder Rückgaberecht anzeigen?';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP = 'In Deutschland besteht die Verpflichtung, den Verbraucher bereits vor Abschluss eines unter ausschließlicher Verwendung von Fernkommunikationsmitteln geschlossenen Vertrages auf sein unabdingbares Rückgabe- bzw Widerrufsrecht hinzuweisen. Daher sollte dieser Konfigurationspunkt unbedingt aktiviert werden.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT = 'Widerrufs- und Rückgabebelehrung (Kurzversion).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP = 'Dieser Text informiert den Kunden über dessen Widerrufs- und Rückgaberecht (wird über der Schaltfläche "Bestellung absenden" auf der letzten Seite des Bestellvorgangs angezeigt).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK = 'Ausführliche Version der Widerrufs- und Rückgabebelehrung (Link zu einem Artikel).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP = 'Hier kann ein Artikel ausgewählt werden, der den Kunden ausführlich über dessen Widerrufs- und Rückgaberecht informiert.
Bitte hier einen Artikel auswählen!';
	var $_VM_LEGALINFO_SHORTTEXT = '<strong>Ihr Widerrufs- und Rückgaberecht:</strong><br />
Sie können diese Bestellung innerhalb von zwei Wochen ohne Angabe von Gründen 
schriftlich widerrufen. Bereits ausgelieferte Ware können Sie innerhalb von zwei Wochen ab 
Erhalt der Lieferung ohne Angabe von Gründen an uns zurücksenden. Detaillierte Informationen zu 
Ihrem Widerrufs- und Rückgaberecht finden Sie <a href="%s" onclick="%s" target="_blank">hier</a> und in der Bestätigungs-Mail, die Ihnen wenige 
Minuten nach dem Absenden dieser Bestellung zugehen wird.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EU = 'EU-Modus';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE = 'Das Verzeichnis zum Speichern der Sitzungsdaten ist nicht beschreibbar - bitte korrigieren Sie das oder kontaktieren Sie Ihren Provider.';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX = 'Das Verzeichnis zum Speichern der Sitzungsdaten (%s ) ist nicht beschreibbar. Der Shop wird alternativ das %s nutzen.\'';
	var $_VM_SESSION_COOKIES_NOT_ACCEPTED_TIP = 'Ihr Browser akzeptiert sog. Cookies nicht. Diese sind zum Speichern von Produkten in Ihrem Warenkorb notwendig. Bitte erlauben Sie Cookies, so dass Sie auch Bestellungen auf dieser Seite ausführen können.';
	var $_PHPSHOP_CSV_SKIP_FIRST_LINE = 'Erste Zeile überspringen';
	var $_PHPSHOP_CSV_SKIP_DEFAULT_VALUE = 'Standardwert ignorieren';
	var $_PHPSHOP_CSV_OVERWRITE_EXISTING_DATA = 'bestehende Inhalte überschreiben';
	var $_PHPSHOP_CSV_INCLUDE_COLUMN_HEADERS = 'Spaltenüberschriften einbinden';
	var $_PHPSHOP_CSV_UPLOAD_SETTINGS = 'Upload-Einstellungen';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS = 'Verfügbare Felder';
	var $_PHPSHOP_CSV_OUTPUT_CSV_UPLOAD_MESSAGES = 'CSV Upload-Nachrichten';
	var $_PHPSHOP_CSV_OUTPUT_COUNT = 'Resultate';
	var $_PHPSHOP_CSV_OUTPUT_TOTAL = 'Insgesamt';
	var $_PHPSHOP_CSV_OUTPUT_FILE_IMPORTED = 'CSV Datei importiert';
	var $_PHPSHOP_CSV_OUTPUT_UPDATED = 'aktualisiert';
	var $_PHPSHOP_CSV_OUTPUT_DELETED = 'gelöscht';
	var $_PHPSHOP_CSV_OUTPUT_ADDED = 'hinzugefügt';
	var $_PHPSHOP_CSV_OUTPUT_SKIPPED = 'übersprungen';
	var $_PHPSHOP_CSV_OUTPUT_INCORRECT = 'fehlerhaft';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS_USE = 'Die folgenden Felder sind verfügbar für den Im- und Export.';
	var $_PHPSHOP_CSV_MINIMAL_FIELDS = 'Pflichtfelder sind product_sku, product_name und category_path. Der Wert des Feldes product_sku muss einmalig sein, die anderen zwei Felder können sich wiederholende Werte haben.';
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
	var $_ITEM_PREVIOUS = 'vorherige';
	var $_ITEM_NEXT = 'nächste';
	var $_CMN_OK = 'Ok';
	var $_CMN_CONTINUE = 'Weiter';
	var $_CMN_CANCEL = 'Abbrechen';
	var $_BUTTON_SEND_REG = 'Registrierung absenden';
	var $_CONTACT_FORM_NC = 'Bitte vergewissern Sie sich, dass alles ausgefüllt ist.';
	var $_CMN_REQUIRED = 'Pflichtfeld';
	var $_CMN_NEW = 'Neu';
	var $_CMN_SAVE = 'Speichern';
	var $_CMN_NEW_ITEM_LAST = 'Neue Beiträge standardmäßig am Ende. Reihenfolge kann geändert werden, nachdem der Begriff gespeichert wurde.';
	var $_CMN_OPTIONAL = 'Optional';
	var $_E_APPLY = 'Anwenden';
	var $_E_IMAGES = 'Bilder';
	var $_URL = 'URL:';
	var $_SEL_CATEGORY = 'Wählen Sie eine Kategorie aus';
	var $_E_REMOVE = 'Löschen';
	var $_PN_LT = '<';
	var $_PN_RT = '&g;';
	var $_PN_PAGE = 'Seite';
	var $_PN_OF = 'von';
	var $_PN_START = 'Anfang';
	var $_PN_PREVIOUS = 'Vorherige';
	var $_PN_NEXT = 'Nächste';
	var $_PN_END = 'Ende';
	var $_PN_DISPLAY_NR = 'Anzeige #';
	var $_PN_RESULTS = 'Ergebnisse';
	var $_CMN_PRINT = 'Drucken';
	var $_CMN_PDF = 'PDF';
	var $_CMN_EMAIL = 'E-Mail';
	var $_BACK = 'zurück';
	var $_USERNAME = 'Nutzername';
	var $_PASSWORD = 'Passwort';
	var $_BUTTON_LOGIN = 'Anmelden';
	var $_REGISTER_UNAME = 'Nutzername';
	var $_REGISTER_EMAIL = 'E-Mail';
	var $_REGWARN_NAME = 'Bitte geben Sie Ihren Namen an.';
	var $_REGWARN_UNAME = 'Bitte geben Sie einen Nutzernamen ein.';
	var $_REGWARN_MAIL = 'Bitte geben Sie eine gültige E-Mail Adresse ein.';
	var $_SEND_SUB = 'Benutzerdetails für %s at %s';
	var $_ASEND_MSG = 'Hallo %s,
Ein neuer Benutzer wurde auf %s registriert.
Diese E-Mail enthält die Anmeldedaten:
Name - %s
E-Mail - %s
Benutzername - %s
Bitte nicht auf diese Nachricht antworten, da sie automatisch generiert wurde und nur Ihrer Information dient';
	var $_REG_COMPLETE = '<div class="componentheading">Registrierung abgeschlossen!</div><br />Sie können sich jetzt anmelden.';
	var $_REG_COMPLETE_ACTIVATE = '<div class="componentheading">Registrierung abgeschlossen!</div><br />Ihr Benutzerkonto wurde erstellt und ein Aktivierungslink zu der von Ihnen angegebenen E-Mailadresse zugesandt. Sie müssen nach dem Erhalt dieser E-Mail durch Klick auf den Aktivierungslink Ihr Benutzerkonto freischalten, bevor Sie sich mit Ihren Benutzerdaten anmelden können.';
	var $_DATE_FORMAT_LC = '%A, %d %B %Y';
	var $_LAST_UPDATED = 'zuletzt aktualisiert';
	var $_NOT_AUTH = 'Sie sind nicht berechtigt, diesen Bereich zu sehen.';
	var $_DO_LOGIN = 'Sie müssen sich anmelden.';
	var $_VALID_AZ09 = 'Bitte geben Sie ein gütiges %s ein. Keine Leerzeichen, mehr als %d Zeichen und nur 0-9,a-z,A-Z verwenden.';
	var $_CMN_PUBLISHED = 'Veröffentlicht';
	var $_CMN_UNPUBLISHED = 'Unveröffentlicht';
	var $_MORE = 'mehr...';
	var $_EMPTY_CATEGORY = 'Diese Kategorie ist derzeit leer.';
	var $_BUTTON_LOGOUT = 'Abmelden';
	var $_NO_ACCOUNT = 'Noch kein Benutzerkonto?';
	var $_CREATE_ACCOUNT = 'Registrieren';
	var $_REGWARN_PASS = 'Bitte geben Sie ein gültiges Passwort ein. Es darf keine Leerzeichen enthalten, ist mehr als 6 Zeichen lang und besteht nur aus 0-9, a-z oder A-Z';
	var $_REGWARN_VPASS1 = 'Bitte bestätigen Sie das Passwort.';
	var $_REGWARN_VPASS2 = 'Die eingegebenen Passwörter stimmen nicht überein, bitte versuchen Sie es noch einmal.';
	var $_USEND_MSG_ACTIVATE = 'Hallo %s,
Vielen Dank für Ihre Registrierung bei %s. Ihr Benutzerkonto wurde erstellt und muss vor der ersten Benutzung aktiviert werden.
Um Ihr Benutzerkonto zu aktivieren, klicken Sie auf die folgende Verknüpfung oder kopieren Sie ihn und fügen ihn in Ihren Browser ein:
%s
Nach der Aktivierung müssen Sie sich auf %s mit folgendem Benutzernamen und Passwort anmelden:
Benutzername - %s
Passwort - %s
';
	var $_USEND_MSG = 'Hallo %s,
Vielen Dank, dass Sie sich auf %s registriert haben.
Sie können sich nun auf %s mit Ihrem bei der Registrierung verwendeten Benutzernamen und Passwort anmelden.
';
	var $_PROMPT_PASSWORD = 'Passwort vergessen?';
	var $_HI = 'Hallo';
	var $_NEW_USER_MESSAGE_SUBJECT = 'Neue Benutzerdetails';
	var $_NEW_USER_MESSAGE = 'Hallo %s,

Sie wurden vom Administrator auf der Website von %s als Benutzer registriert.
Diese E-Mail beinhaltet Ihren Benutzernamen und Passwort, damit Sie sich auf %s anmelden können: 
Benutzername - %s
Passwort - %s

Bitte nicht auf diese Nachricht antworten, da sie automatisch generiert wurde und nur Ihrer Information dient.';
	var $_REMEMBER_ME = 'Angemeldet bleiben';
	var $_REGISTER_TITLE = 'Registrierung';
	var $_JAN = 'Januar';
	var $_FEB = 'Februar';
	var $_MAR = 'März';
	var $_APR = 'April';
	var $_MAY = 'Mai';
	var $_JUN = 'Juni';
	var $_JUL = 'Juli';
	var $_AUG = 'August';
	var $_SEP = 'September';
	var $_OCT = 'Oktober';
	var $_NOV = 'November';
	var $_DEC = 'Dezember';
	var $_PHPSHOP_CSV_VERSION = '0.7';
	var $_PHPSHOP_CSV_ABOUT = 'Über';
	var $_PHPSHOP_CSV_PRICE_LIST_ONLY = 'nur eine Preisliste hochladen';
	var $_PHPSHOP_CSV_MULTIPLE_PRICES_UPLOAD = 'mehrere Preise hochladen';
	var $_PHPSHOP_CSV_IMPORT_CONFIG_CSV_FILE = 'Spaltenüberschrift als Import-Konfiguration nutzen';
	var $_PHPSHOP_CSV_COLLECT_DEBUG_INFO = 'Fehlermeldungen anzeigen';
	var $_PHPSHOP_CSV_SHOW_PREVIEW = 'Import-Vorschau anzeigen';
	var $_PHPSHOP_CSV_REGULAR_UPLOAD = 'Normaler Upload';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_UPLOAD = 'Produkttyp Upload';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_PARAMETERS_UPLOAD = 'Produkttyp-Parameter Upload';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_XREF_UPLOAD = 'Produkt - Produkttyp Zuweisung Upload';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_DETAIL_UPLOAD = 'Produkttyp Details Upload';
	var $_PHPSHOP_CSV_EMPTY_DATABASE = 'Produktdatenbank leeren';
	var $_PHPSHOP_CSV_CONTINUE_UPLOAD = 'Upload fortsetzen';
	var $_PHPSHOP_CSV_CANCEL_UPLOAD = 'Upload abbrechen';
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
        
}
class phpShopLanguage extends vmLanguage { }

/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>