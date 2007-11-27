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
	var $_PHPSHOP_MENU = 'Izbornik';
	var $_PHPSHOP_CATEGORY = 'Kategorija';
	var $_PHPSHOP_CATEGORIES = 'Kategorije';
	var $_PHPSHOP_SELECT_CATEGORY = 'Odabir Kategorije:';
	var $_PHPSHOP_ADMIN = 'Administracija';
	var $_PHPSHOP_PRODUCT = 'Proizvod';
	var $_PHPSHOP_LIST = 'Lista';
	var $_PHPSHOP_ALL = 'Sve';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Lista Svih Proizvoda';
	var $_PHPSHOP_VIEW = 'Pregled';
	var $_PHPSHOP_SHOW = 'Prika�i';
	var $_PHPSHOP_ADD = 'Dodavanje';
	var $_PHPSHOP_UPDATE = 'Izmjena';
	var $_PHPSHOP_DELETE = 'Brisanje';
	var $_PHPSHOP_SELECT = 'Odabir';
	var $_PHPSHOP_SUBMIT = 'Po�alji';
	var $_PHPSHOP_RANDOM = 'Izabrani Proizvodi';
	var $_PHPSHOP_LATEST = 'Najnoviji Proizvodi';
	var $_PHPSHOP_HOME_TITLE = 'Po�etna';
	var $_PHPSHOP_CART_TITLE = 'Ko�arica';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Blagajna';
	var $_PHPSHOP_LOGIN_TITLE = 'Prijava';
	var $_PHPSHOP_LOGOUT_TITLE = 'Odjava';
	var $_PHPSHOP_BROWSE_TITLE = 'Katalog';
	var $_PHPSHOP_SEARCH_TITLE = 'Tra�i';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Korisni�ki ra�un';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Navigacija';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Odjel';
	var $_PHPSHOP_INFO = 'Informacije';
	var $_PHPSHOP_BROWSE_LBL = 'Katalog';
	var $_PHPSHOP_PRODUCTS_LBL = 'Proizvodi';
	var $_PHPSHOP_PRODUCT_LBL = 'Proizvod';
	var $_PHPSHOP_SEARCH_LBL = 'Tra�i';
	var $_PHPSHOP_FLYPAGE_LBL = 'Detaljnije';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Pretra�ivanje: ';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Naziv Proizvoda';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Kategorija Proizvoda';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Opis';
	var $_PHPSHOP_CART_SHOW = 'Ko�arica';
	var $_PHPSHOP_CART_ADD_TO = 'u Ko�aricu';
	var $_PHPSHOP_CART_NAME = 'Naziv';
	var $_PHPSHOP_CART_SKU = '�ifra proizvoda';
	var $_PHPSHOP_CART_PRICE = 'Cijena';
	var $_PHPSHOP_CART_QUANTITY = 'Koli�ina';
	var $_PHPSHOP_CART_SUBTOTAL = 'Zbroj';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Dodavanje ';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Adresa za Dostavu';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Pretra�ivanje nije dalo rezultata.<br />';
	var $_PHPSHOP_PRICE_LABEL = 'Cijena: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'u Ko�aricu';
	var $_PHPSHOP_NO_CUSTOMER = 'Jo� niste registrirani. Molimo vas da upi�ete podatke za slanje ra�una.';
	var $_PHPSHOP_DELETE_MSG = 'Jeste li sigurni da �elite izbrisati ovu stavku?';
	var $_PHPSHOP_THANKYOU = 'Hvala na Va�oj narud�bi.';
	var $_PHPSHOP_NOT_SHIPPED = 'Jo� nije poslano';
	var $_PHPSHOP_EMAIL_SENDTO = 'E-mail sa potvrdom je poslan';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Na�alost nema korisnika koje bi mogli dodati';
	var $_PHPSHOP_ERROR = 'GRE�KA';
	var $_PHPSHOP_MOD_NOT_REG = 'Modul Nije Registriran.';
	var $_PHPSHOP_MOD_ISNO_REG = 'nije valjani VirtueMart modul.';
	var $_PHPSHOP_MOD_NO_AUTH = 'Nemate ovlasti za pristup tom modulu.';
	var $_PHPSHOP_PAGE_404_1 = 'Stranica ne postoji';
	var $_PHPSHOP_PAGE_404_2 = 'Datoteka s takvim imenom ne postoji. Nije prona�ena datoteka:';
	var $_PHPSHOP_PAGE_403 = 'Nedostatno pravo pristupa';
	var $_PHPSHOP_FUNC_NO_EXEC = 'Nemate ovlasti za izvr�avanje ';
	var $_PHPSHOP_FUNC_NOT_REG = 'Neregistrirana funkcija';
	var $_PHPSHOP_FUNC_ISNO_REG = ' Nije valjana VirtueMart funkcija.';
	var $_PHPSHOP_ADMIN_MOD = 'Admin';
	var $_PHPSHOP_USER_LIST_MNU = 'Lista Korisnika';
	var $_PHPSHOP_USER_LIST_LBL = 'Lista Korisnika';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Korisni�ko Ime';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Puno Ime';
	var $_PHPSHOP_USER_LIST_GROUP = 'Grupa';
	var $_PHPSHOP_USER_FORM_MNU = 'Novi Korisnik';
	var $_PHPSHOP_USER_FORM_LBL = 'Dodavanje/Ure�ivanje informacija o korisniku';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Podaci o pla�anju';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Adresa za Dostavu';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Nova Adresa';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'Nema adrese za dostavu.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Druga adresa';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Ime';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Prezime';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Srednje ime';
	var $_PHPSHOP_USER_FORM_TITLE = 'Titula';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Korisni�ko ime';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = '�ifra';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Potvrda �ifre';
	var $_PHPSHOP_USER_FORM_PERMS = 'Dozvole';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Broj Kupca / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Naziv poduze�a';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Adresa 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Adresa 2';
	var $_PHPSHOP_USER_FORM_CITY = 'Grad';
	var $_PHPSHOP_USER_FORM_STATE = 'State';
	var $_PHPSHOP_USER_FORM_ZIP = 'Po�tanski broj';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Dr�ava';
	var $_PHPSHOP_USER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Mobitel';
	var $_PHPSHOP_USER_FORM_FAX = 'Fax';
	var $_PHPSHOP_USER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Lista Modula';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Lista Modula';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Dozvole Modula';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Dozvole Modula';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Funkcije';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Redosljed';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Novi Modul';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Podaci o modulu';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Etiketa modula (za gornji izbornik)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Naziv Modula';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Dozvole Modula';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Zaglavlje modula';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Podno�je modula';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Prika�i modul u administratorskom izborniku?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Redosljed';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Opis modula';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'Jezi�ni Kod';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Jezi�na datoteka';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Lista Funkcija';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Lista Funkcija';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Naziv Funkcije';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Naziv klase';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Metoda klase';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Dozvole';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Nova Funkcija';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Podaci o funkciji';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Naziv funkcije';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Naziv klase';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Metoda klase';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Dozvole funkcije';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Opis funkcije';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Lista Valuta';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Lista Valuta';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'Nova Valuta';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Naziv Valute';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'Oznaka Valute';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Lista Dr�ava';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Lista Dr�ava';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Nova Dr�ava';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Naziv Dr�ave';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Oznaka Dr�ave (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Oznaka Dr�ave (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Lista Regija';
	var $_PHPSHOP_STATE_LIST_LBL = 'Lista Regija ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Dodavanje/Ure�ivanje Regije';
	var $_PHPSHOP_STATE_LIST_NAME = 'Naziv regije';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'Kod regije (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'Kod regije (2)';
	var $_PHPSHOP_ADDRESS = 'Adresa';
	var $_PHPSHOP_CONTINUE = 'Nastavak';
	var $_PHPSHOP_EMPTY_CART = 'Ko�arica je trenutno prazna.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Pingaj InterShipper Server';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'InterShipper-Server Ping ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'InterShipper Ping Neuspje�an';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'InterShipper Ping Uspje�an';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Dostavlja�';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Vrijeme<br />Odgovora';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'sek.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Lista Na�ina Dostave';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Aktivni na�ini dostave';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Na�ini dostave';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Aktivno';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Tro�ak manipulacije';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Glavno vrijeme';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'fiksna cijena';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'postotak';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'dana';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Te�ki tereti';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Konfiguracija na�ina dostave';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Novi Na�in Dostave';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Konfiguracija na�ina dostave';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Osvje�i';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Na�in Dostave';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Aktiviraj';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Tro�ak manipulacije';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Glavno vrijeme';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'fiksna cijena';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'postotak';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'dana';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Te�ki tereti';
	var $_PHPSHOP_ORDER_MOD = 'Narud�be';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Potvrdi narud�bu';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Poni�ti narud�bu';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Ispis Narud�be';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Izbri�i narud�bu';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Lista Narud�bi';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Lista Narud�bi';
	var $_PHPSHOP_ORDER_LIST_ID = 'Broj Narud�be';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Datum Narud�be';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Mijenjano';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Status';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'Ukupno';
	var $_PHPSHOP_ORDER_ITEM = 'Naru�i proizvod';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Narud�ba';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Broj Narud�be';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Datum Narud�be';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Status Narud�be';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Informacije o Kupcu';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Informacije za Naplatu';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Informacije za Dostavu';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Adresa za Naplatu';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Adresa za Dostavu';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Ime';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Poduze�e';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Adresa 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Adresa 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Grad';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'State';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'Po�tanski broj';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Dr�ava';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Telefon';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Fax';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'Email';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Naru�i artikle';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Koli�ina';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Kol';
	var $_PHPSHOP_ORDER_PRINT_SKU = '�ifra proizvoda';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Cijena';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Ukupno';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'Total';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'Porez';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Cijena Dostave';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Porez na Cijenu Dostave';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Na�in Pla�anja';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Korisni�ki ra�un';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Broj korisni�kog ra�una';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Vrijedi do';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Evidencija Pla�anja';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Informacije o Dostavi';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Informacije o Pla�anju';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Dostavlja�';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Na�in Dostave';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Datum Dostave';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Cijena Dostave';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Tipovi Statusa Narud�be';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Novi Tip Statusa Narud�be';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Kod Statusa Narud�be';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Naziv Statusa Narud�be';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Status Narud�be';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Kod Statusa Narud�be';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Naziv Statusa Narud�be';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Redosljed';
	var $_PHPSHOP_PRODUCT_MOD = 'Proizvodi';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Trenutni proizvod';
	var $_PHPSHOP_CURRENT_ITEM = 'Trenutni artikl';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Inventar Proizvoda';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Pregled Inventara';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Cijena';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Broj';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Te�ina';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Lista Proizvoda';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Proizvodi';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Naziv Proizvoda';
	var $_PHPSHOP_PRODUCT_LIST_SKU = '�ifra proizvoda';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Objavljeno';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Pretra�ivanje';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'mjenjano';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'promjena cijene';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'bez cijene';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'Nakon';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Prije';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Dodavanje Proizvoda';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Ure�ivanje ovog Proizvoda';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Prikaz stranice proizvoda u du�anu';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Novi Artikl';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Novi Artikl';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Novi Proizvod';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'A�uriranje Proizvoda';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Informacije o Proizvodu';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Status Proizvoda';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Dimenzije i Te�ina';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Slike Proizvoda';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Novi Artikl';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'A�uriranje Artikla';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Postavke Artikla';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Status';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Dimenzije i te�ina';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Slike';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Mati�ni Proizvod';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'Da bi izmijenili sliku unesite putanju do nove slike.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Izbri�i postoje�u sliku.';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Artikli';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Svojstva';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = '�elite li stvarno izbrisati ovaj proizvod\\ni s njim povezane artikle?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = '�elite li stvarno izbrisati ovaj artikl?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Dobavlja�';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Proizvo�a�';
	var $_PHPSHOP_PRODUCT_FORM_SKU = '�ifra proizvoda';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Naziv';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Kategorija';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Cijena proizvoda (Bruto)';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Cijena proizvoda (Neto)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Opis proizvoda';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Kratki Opis';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'Na skladi�tu';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'Naru�eno';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Datum dostupnosti';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'Akcija';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Vrsta sni�enja';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Objavljeno?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Duljina';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = '�irina';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Visina';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Mjerna jedinica';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Te�ina';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Mjerna Jedinica';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Mini Slika';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Puna Slika';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'kg';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'mm';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Jedinica';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'komad';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Jedinica u Pakovanju';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Ovdje mo�ete unijeti broj jedinica u pakovanju. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Jedinica u Kutiji';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Ovdje mo�ete unijeti broj jedinica u kutiji. (maks. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Rezultati dodavanja proizvoda';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Rezultati izmjene proizvoda';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Rezultati dodavanja artikla';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Rezultati izmjene artikla';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Koristi CSV upload';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Grupe proizvoda';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Lista Kategorija';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Kategorije';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Dodavanje Kategorije';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Informacije o Kategoriji';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Naziv Kategorije';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Roditelj';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Opis Kategorije';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Objavljeno?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Stranica Kategorije';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Lista Atributa';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Lista Atributa za';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Naziv Atributa';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Redosljed';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Novi Atribut';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Atribut';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Dodavanje Atributa za Proizvod ';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Ure�ivanje Atributa za Proizvod ';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Dodavanje Atributa za Artikl ';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Ure�ivanje';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Naziv Atributa';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Redosljed';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Lista Cijena';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Lista Cijena';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Cijena za';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Naziv Grupe';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Cijena';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Valuta';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Nova Cijena';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Informacije o Cijeni';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Nova Cijena Proizvoda';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Izmjena Cijene Proizvoda';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Nova Cijena Artikla';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Izmjena Cijene Artikla';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Cijena';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Grupa Kupaca';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Izvje�taji';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Izlistavanje individualnih proizvoda';
	var $_PHPSHOP_RB_SALE_TITLE = 'Izvje�taji o Prodaji';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Pregled prodaje';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Interval';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Mjese�no';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Tjedno';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Dnevno';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Ovaj mjesec';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'Pro�li mjesec';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'Zadnjih 60 dana';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'Zadnjih 90 dana';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Od';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Do';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Prika�i odabrani raspon';
	var $_PHPSHOP_RB_REPORT_FOR = 'Izvje�taj za ';
	var $_PHPSHOP_RB_DATE = 'Datum';
	var $_PHPSHOP_RB_ORDERS = 'Narud�be';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Ukupno prodanih artikala';
	var $_PHPSHOP_RB_REVENUE = 'Prihod';
	var $_PHPSHOP_RB_PRODLIST = 'Lista proizvoda';
	var $_PHPSHOP_SHOP_MOD = 'Du�an';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Slika';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Cijena';
	var $_PHPSHOP_ORDER_STATUS_P = '�eka';
	var $_PHPSHOP_ORDER_STATUS_C = 'Potvr�eno';
	var $_PHPSHOP_ORDER_STATUS_X = 'Otkazano';
	var $_PHPSHOP_ORDER_BUTTON = 'Narud�ba';
	var $_PHPSHOP_SHOPPER_MOD = 'Kupci';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Lista Kupaca';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Lista Kupaca';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Korisni�ko Ime';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Puno Ime';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Grupa';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Novi Kupac';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Informacije o kupcu';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Informacije o pla�anju';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Informacije';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Informacije o Dostavi';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Nova adresa';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Druga adresa';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Korisni�ko ime';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Ime';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Prezime';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Srednje ime';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Titula';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Ime kupca';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = '�ifra';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Potvrda �ifre';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Grupa kupaca';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Naziv poduze�a';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Adresa 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Adresa 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Grad';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'State';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'Po�tanski broj';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Dr�ava';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Mobitel';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Fax';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'Email';
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
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Grupe Kupaca';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Lista Grupa Kupaca';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Naziv Grupe';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Opis grupe';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Grupa Kupaca';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Nova Grupa Kupaca';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Naziv Grupe';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Opis Grupe';
	var $_PHPSHOP_STORE_MOD = 'Du�an';
	var $_PHPSHOP_STORE_FORM_MNU = 'Postavke Du�ana';
	var $_PHPSHOP_STORE_FORM_LBL = 'Informacije o Du�anu';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Kontaktne Informacije';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Slika';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Upload Slike';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Ime Web Du�ana';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Naziv Mati�nog Poduze�a';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Adresa 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Adresa 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'Grad';
	var $_PHPSHOP_STORE_FORM_STATE = 'State';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Dr�ava';
	var $_PHPSHOP_STORE_FORM_ZIP = 'Po�tanski broj';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Kategorija';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Prezime';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Ime';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Srednje ime';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Titula';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Telefon';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Mobitel';
	var $_PHPSHOP_STORE_FORM_FAX = 'Fax';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'Email';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Putanja do slike';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Opis';
	var $_PHPSHOP_PAYMENT = 'Pla�anje';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Na�ini Pla�anja';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Lista Na�ina Pla�anja';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Naziv';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Kod';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Popust';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Grupa Kupaca';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Tip Na�ina Pla�anja';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Novi Na�in Pla�anja';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Forma Na�ina Pla�anja';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Naziv Na�ina Pla�anja';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Grupa kupaca';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Popust';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Kod';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Redosljed';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Tip Na�ina Pla�anja';
	var $_PHPSHOP_TAX_MOD = 'Porez';
	var $_PHPSHOP_TAX_RATE = 'Porezne stope';
	var $_PHPSHOP_TAX_LIST_MNU = 'Lista Poreznih Stopa';
	var $_PHPSHOP_TAX_LIST_LBL = 'Lista Poreznih Stopa';
	var $_PHPSHOP_TAX_LIST_STATE = 'Regija';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Dr�ava';
	var $_PHPSHOP_TAX_LIST_RATE = 'Porezna stopa';
	var $_PHPSHOP_TAX_FORM_MNU = 'Nova Porezna Stopa';
	var $_PHPSHOP_TAX_FORM_LBL = 'Dodavanje informacija o poreznoj stopi';
	var $_PHPSHOP_TAX_FORM_STATE = 'Regija';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Dr�ava';
	var $_PHPSHOP_TAX_FORM_RATE = 'Porezna stopa (za 22.5% => upi�ite 0.225)';
	var $_PHPSHOP_VENDOR_MOD = 'Dobavlja�i';
	var $_PHPSHOP_VENDOR_ADMIN = 'Dobavlja�i';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Lista Dobavlja�a';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Lista Dobavlja�a';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Naziv dobavlja�a';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Administrator';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Novi Dobavlja�';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Dodavanje informacija';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Informacije o dobavlja�u';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Informacije za kontakt';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Puna slika';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Postavi sliku';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Naziv du�ana dobavlja�a';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Naziv poduze�a dobavlja�a';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Adresa 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Adresa 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Grad';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'State';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Dr�ava';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'Po�tanski broj';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Kategorija dobavlja�a';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Prezime';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Ime';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Srednje ime';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Titula';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Telefon';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Mobitel';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Fax';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'Email';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Putanja do slike';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Opis';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Lista Kategorija Dobavlja�a';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Lista Kategorija Dobavlja�a';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Naziv Kategorije';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Opis Kategorije';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Dobavlja�i';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Nova Kategorija Dobavlja�a';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Forma kategorije dobavlja�a';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Informacije o kategoriji';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Naziv Kategorije';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Opis Kategorije';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Proizvo�a�';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Proizvo�a�';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Lista Proizvo�a�a';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Lista Proizvo�a�a';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Naziv Proizvo�a�a';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Administrator';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'Novi Proizvo�a�';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Dodavanje informacija';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Informacije o proizvo�a�u';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Naziv proizvo�a�a';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Kategorija proizvo�a�a';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'URL Proizvo�a�eve web stranice';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Opis';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Lista Kategorija Proizvo�a�a';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Lista Kategorija Proizvo�a�a';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Naziv Kategorije';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Opis Kategorije';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Proizvo�a�i';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Nova Kategorija Proizvo�a�a';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Forma kategorije proizvo�a�a';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Informacije o kategoriji';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Naziv Kategorije';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Opis Kategorije';
	var $_PHPSHOP_HELP_MOD = 'Pomo�';
	var $_PHPSHOP_CART_ACTION = 'Izmjene';
	var $_PHPSHOP_CART_UPDATE = 'Izmjena Koli�ine Proizvoda u Ko�arici';
	var $_PHPSHOP_CART_DELETE = 'Uklanjanje Proizvoda iz Ko�arice';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Cijena';
	var $_PHPSHOP_PRODUCT_CALL = 'Nazovite za cijenu';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Prethodni';
	var $_PHPSHOP_PRODUCT_NEXT = 'Slijede�i';
	var $_PHPSHOP_CART_TAX = 'Porez';
	var $_PHPSHOP_CART_SHIPPING = 'Cijena dostave';
	var $_PHPSHOP_CART_TOTAL = 'Ukupno';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Nastavak';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'Registracija';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Pla�anje';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Poduze�e';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Naziv';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Adresa';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'Email';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Dostava';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Poduze�e';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Naziv';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Adresa';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Informacije o pla�anju';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Ime na Kartici';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Na�in pla�anja';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Broj Kartice';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Vrijedi do';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Zaklju�i narud�bu';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'potrebne informacije prilikom pla�anja kreditnom karticom';
	var $_PHPSHOP_ZONE_MOD = 'Slanje po zonama';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Lista Zona';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Dodavanje Zone';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Dodjela Zona';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Dr�ava';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Trenutna zona';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Dodijeli zoni';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Izmjeni';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Dodjeli zone';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Naziv zone';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Opis Zone';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Cijena po artiklu za Zonu';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Limit cijene za Zonu';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Popis zona';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Naziv zone';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Opis zone';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Cijena po artiklu za Zonu';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Limit cijene za Zonu';
	var $_PHPSHOP_LOGIN_FIRST = 'Molimo vas da se prvo prijavite ili registrirate na stranicu.<br>Hvala.';
	var $_PHPSHOP_STORE_FORM_TOS = 'Uvjeti kori�tenja';
	var $_PHPSHOP_AGREE_TO_TOS = 'Prihvatite uvjete kori�tenja.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Prihva�am uvjete kori�tenja';
	var $_PHPSHOP_LEAVE_BLANK = '(ostavite prazno ako<br />nema individualne php-datoteke!)';
	var $_PHPSHOP_RETURN_LOGIN = 'Postoje�i korisnik: Prijavite se';
	var $_PHPSHOP_NEW_CUSTOMER = 'Novi korisnik? Molimo unesite podatke za naplatu';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Korisni�ki ra�un:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Informacije o narud�bi';
	var $_PHPSHOP_ACC_UPD_BILL = 'Ovdje mo�ete izmijeniti svoje podatke za naplatu.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Ovdje mo�ete dodavati i mijenjati podatke za dostavu.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Informacije o korisni�kom ra�unu';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Podatci za Dostavu';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Nema narud�bi za prikazati';
	var $_PHPSHOP_ACC_BILL_DEF = ' Primarna (kao za naplatu)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Mo�ete va�em ra�unu dodavati adrese za dostavu. Odaberite prikladan naziv ili kod za dostavnu lokaciju koju odaberete ispod.';
	var $_PHPSHOP_CONFIG = 'Konfiguracija';
	var $_PHPSHOP_USERS = 'Korisnici';
	var $_PHPSHOP_IS_CC_PAYMENT = 'je pla�anje kreditnom karticom?';
	var $_PHPSHOP_SHIPPING_MOD = 'Dostava';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Dostava';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Lista Dostavlja�a';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Lista Dostavlja�a';
	var $_PHPSHOP_RATE_LIST_MNU = 'Dostavne Tarife';
	var $_PHPSHOP_RATE_LIST_LBL = 'Lista Dostavnih Tarifa';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Naziv';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Redosljed';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Novi Dostavlja�';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Dodavanje/Ure�ivanje Dostavlja�a';
	var $_PHPSHOP_RATE_FORM_MNU = 'Nova Dostavna Tarifa ';
	var $_PHPSHOP_RATE_FORM_LBL = 'Dodavanje/Ure�ivanje Dostavne Tarife';
	var $_PHPSHOP_RATE_FORM_NAME = 'Opis Dostavne Tarife';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Dostavlja�';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Dr�ava';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'Po�tanski broj po�etak';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Po�tanski broj kraj';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Najmanja te�ina';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Najve�a te�ina';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Pristojba';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Pristojba za va�u po�iljku';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'Stopa poreza';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Redosljed';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Dostavlja�';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Opis dostavne tarife';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'te�ina od ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... do';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Dostavlja�';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Redosljed';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'GRE�KA: Postoji ID dostavlja�a.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'GRE�KA: Niste odabrali dostavlja�a.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'GRE�KA: Postoji barem jedna dostavna tarifa, izbri�ite dostavne tarife prije brisanja dostavlja�a';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'GRE�KA: Ne mogu prona�i dostavlja�a s tim ID-om.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'GRE�KA: Niste odabrali id dostavlja�a.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'GRE�KA: Nije prona�en dostavlja� s tim ID-om';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'GRE�KA: Tarifa mora imati naziv.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'GRE�KA: Neispravno unesena dr�ava. Vi�e od jedne dr�ave mo�ete odvojiti s ";".';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'GRE�KA: Unesite najmanju te�inu';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'GRE�KA: Unesite najve�u te�inu';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'GRE�KA: Najmanja te�ina mora biti manja od najve�e';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'GRE�KA: Unesite dostavnu tarifu';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'GRE�KA: Odaberite valutu';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'GRE�KA: Unesite dostavnu tarifu.';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Odaberite';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Dostavlja�';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Na�in dostave';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Cijena';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-ni�ta-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Kreditna Kartica';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Koristiti procesor pla�anja';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Debit';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Samo adresa / Pla�anje po dostavi';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Odaberite adresu za dostavu!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Odaberite na�in dostave!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Odaberite na�in pla�anja!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Provjerite podatke i potvrdite narud�bu!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Odaberite na�in dostave.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Odaberite drugi na�in dostave.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Odaberite na�in pla�anja.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Unesite broj va�e kreditne kartice.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Unesite ime na va�oj kreditnoj kartici.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'Broj kartice koji ste unijeli nije ispravan.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Unesite mjesec do kojeg vrijedi kreditna kartica.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Unesite godinu do koje vrijedi kreditna kartica.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'Datum do kojeg vrijedi kartica nije ispravan.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Odaberite adresu za dostavu.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Neispravan broj ra�una.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'Va�a ko�arica je prazna!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'GRE�KA: Niste odabrali dostavlja�a!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'GRE�KA: Nije prona�ena dostavna tarifa koju ste odabrali!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'GRE�KA: Nije prona�ena va�a adresa za dostavu!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'GRE�KA: Nema podataka o kreditnoj kartici...';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'GRE�KA: Neispravan broj kreditne kartice!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Broj kreditne kartice koji ste koristili je broj za testiranje!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'Korisni�ko ime nije prona�eno u bazi!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Niste unjeli ime nositelja bankovnog ra�una.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Niste upisali IBAN.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Niste upisali broj bankovnog ra�una.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Niste upisali bankovni kod.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Niste upisali ime banke.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Za kupnju je potreban valjani korak!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Informacije o pla�anju pohranjene radi kasnije obrade.<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Jo� nije dostignuta minimalna vrijednost narud�be.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'Minimalna vrijednost narud�be je:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Pla�anje kreditnom karticom';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'Ostali na�ini pla�anja';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Odaberite na�in pla�anja:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Minimalna vrijednost narud�be';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Informacije o bankovnom ra�unu';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Broj ra�una';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'Bank sorting code number';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Naziv banke';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Nositelj ra�una';
	var $_PHPSHOP_MODULES = 'Moduli';
	var $_PHPSHOP_FUNCTIONS = 'Funkcije';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Posebne ponude';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Ako �elite, mo�ete nam ostaviti napomenu uz va�u narud�bu';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Napomena kupca';
	var $_PHPSHOP_INCLUDING_TAX = '(uklju�en PDV)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Odaberite opciju';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Artikl';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Download Proizvoda';
	var $_PHPSHOP_DOWNLOADS_START = 'Zapo�ni download';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Molimo vas unesite Download-ID koji ste dobili u e-mailu i kliknite \'Zapo�ni download\'.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Va� download je istekao';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Dostignut je maksimalni broj downloada';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Pogre�an Download-ID!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Nismo mogli poslati poruku na ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Poruka poslana na ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Informacije za Download';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'datoteke koje ste naru�ili spremne su za download';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Molimo vas unesite slijede�i Download-ID u na�em Podru�ju Downloada: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'najve�i broj downloada za svaku datoteku je: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Downloadajte do najdalje {expire} dana nakon prvog downloada';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Imate li pitanja ili problema?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Download-Info ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'Proizvod za download?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Hvala na uplati.
        Transakcija je uspje�no dovr�ena. Primit �ete konfirmacijski Email za transakciju putem PayPala.
        Mo�ete se prijaviti na <a href=http://www.paypal.com>www.paypal.com</a> da vidite detalje transakcije.';
	var $_PHPSHOP_PAYPAL_ERROR = 'Gre�ka prilikom obrade transakcije. Status va�e narud�be nije mogao biti a�uriran.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Hvala �to ste kupovali kod nas. Slijede informacije o va�oj narud�bi.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Hvala na povjerenju.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Pitanja? Problemi?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'Primljena je slijede�a narud�ba.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Pregledajte narud�bu kroz link ispod.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Ne mo�ete imati negativnu koli�inu.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Unesite �eljenu koli�inu.';
	var $_PHPSHOP_CART_STOCK_1 = 'Tra�ena koli�ina prema�uje raspolo�ive zalihe. ';
	var $_PHPSHOP_CART_STOCK_2 = 'Trenutno imamo $product_in_stock raspolo�ivih artikala. ';
	var $_PHPSHOP_CART_STOCK_3 = 'Kliknite ovdje ako �elite biti stavljeni na listu �ekanja.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Ovaj proizvod dolazi u nekoliko varijanti. Molimo, odaberite �eljene opcije!';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'nikakvo';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Gospodin';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Gospo�a';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Dr.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof.';
	var $_PHPSHOP_DEFAULT = 'Primarna';
	var $_PHPSHOP_AFFILIATE_MOD = 'Suradnici';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Lista Suradnika';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Lista Suradnika';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Ime Suradnika';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Aktivan';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Tip Provizije';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Mjese�ni Total';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Mjese�na Provizija';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Narud�be';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'Slanje Emaila Suradnicima';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'Slanje Emaila Suradnicima';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'Primatelj (* = SVI)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Poruka';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Naslov';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Uklju�iti Trenutnu Statistiku';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Provizija (postotak)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Aktivan?';
	var $_PHPSHOP_DELIVERY_TIME = 'Obi�no sti�e za';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Informacije o Dostavi';
	var $_PHPSHOP_MORE_CATEGORIES = 'Ostale kategorije';
	var $_PHPSHOP_AVAILABILITY = 'Dostupnost';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Ovaj proizvod trenutno nije dostupan.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Ponovo �e biti dostupan: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Sa�etak';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Statistika';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Kupci';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'aktivni Proizvodi';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'neaktivni Proizvodi';
	var $_PHPSHOP_STATISTIC_SUM = 'Zbroj';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Nove Narud�be';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Novi Kupci';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Molimo, unesite svoju Email adresu da bi smo vas mogli obavijestiti kada ovaj proizvod opet postane dostupan.
                                        Va�a Email adresa ne�e biti upotrebljavana za ni�ta drugo osim da vas obavijestimo
						    da je proizvod ponovo dostupan.<br /><br />Hvala!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Hvala �to ste odlu�ili pri�ekati! <br />Obavijestit �emo vas �im dobijemo proizvode koji vas interesiraju.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Obavijesti me!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Ispis';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Molimo, odaberite ILI Authorize.net ILI CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' Konfiguracijska datoteka:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'je otvorena za zapisivanje.';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'nije otvorena za zapisivanje.';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Osnovne Postavke';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Putanja i URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Stranica';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Dostava';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Blagajna';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Downloadi';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Pla�anje';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Koristiti samo kao katalog';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Ovime se onemogu�uje funkcionalnost ko�arice.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Prikazati cijene';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Prikazati cijene s porezom';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = '�elite li ura�unati porez u prikazane cijene.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Isklju�ite ovo ako �elite koristiti katalog funkcionalnost - bez prikazivanja cijena.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Virtualni Porez';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = '�elite li ura�unati porez na proizvode �ija je te�ina nula. Ovo mo�ete prilagoditi u ps_checkout.php->calc_order_taxable().';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Porezna stopa:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Bazirano na adresi kupca';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Bazirano na adresi du�ana';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Ovdje odre�ujete po kojoj poreznoj stopi se izra�unava porez:<br />
                                                <ul><li>porez dr�ave iz koje je kupac</li><br/>
                                                <li>porez dr�ave iz koje je vlasnik du�ana.</li></ul>
                                                <li>ili "Metoda Europske Unije", gdje se koristi porezna stopa "po-proizvodu" ako je kupac iz Europske Unije, a u ostali slu�ajevima porezna stopa je sukladno adresama kupaca.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Omogu�iti vi�estruke porezne stope?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Ozna�ite ovo ako imate razli�ite porezne stope za razli�ite proizvode (npr. 7% za knjige i hranu, 16% za ostale stvari)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Odbiti popuste prije ura�unavanja poreza/dostave?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Omogu�iti recenziranje/ocjenjivanje proizvoda';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Ako je uklju�eno, kupci mogu <strong>ocjenjivati proizvode</strong> i napisati <strong>svoje mi�ljenje</strong> o njima. <br />Tako kupci mogu svoje mi�ljenje o proizvodu podijeliti s drugim (potencijalnim) kupcima.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Ako je uklju�eno, odre�uje da se popust odbija od ukupnog iznosa <b>PRIJE</b> ura�unavanja poreza i pristojbe za dostavu.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Informacije o bankovnom ra�unu';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Ozna�ite ako �elite da va�i kupci mogu ostaviti podatke o bankovnom ra�unu prilikom registracije.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Odabir �upanije';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Ozna�ite ako �elite da va�i kupci mogu odabrati US State prilikom registracije.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Obavezni pristanak na uvjete kori�tenja';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Ozna�ite ako �elite da kupac mora pristati na uvjete kori�tenja prilikom registracije.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Provjera zaliha';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Provjerava stanje zaliha pri dodavanju proizvoda u ko�aricu.
                                                     Ako je ovo uklju�eno, kupac ne�e mo�i dodati u ko�aricu vi�e proizvoda nego �to ih je na skladi�tu.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Suradni�ki program';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Ovo omogu�ava pra�enje suradnika u shop-frontendu. Omogu�ite ako ste u backendu dodali suradnike.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Format Emaila narud�be:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Tekst mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML email';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Ovo odre�uje format emaila s detaljima o narud�bi:<br />
                                                      <ul><li>kao jednostavni tekstualni Email</li>
                                                      <li>ili kao html Email sa slikama.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Admin pristup za frontend korisnike';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'Ovime mo�ete omogu�iti Frontend Administriranje korisnicima koji su administratori du�ana, ali ne mogu pristupiti Joomla Administraciji (npr. Registriran / Urednik).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'URL va�e stranice. Obi�no jednak kao va� Joomla! URL ';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'SSL url';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'SSL url va�e stranice.';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'COMPONENTURL';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'URL va�e VirtueMart Komponente.';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'IMAGEURL';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'URL do direktorija sa slikama VirtueMart komponente.';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'ADMINPATH';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'Putanja do VirtueMart component direktorija.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'CLASSPATH';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'Putanja do VirtueMart classes direktorija.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'PAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'Putanja do VirtueMart html direktorija.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'IMAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'Putanja do VirtueMart shop_image direktorija.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'Naslovnica';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Ovo je po�etna stranica du�ana.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'Stranica za Gre�ke';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Ovo je standardna stranica za prikazivanje poruka o gre�kama.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'DEBUGPAGE';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Ovo je standardna stranica za prikazivanje debug poruka.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'DEBUG ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'DEBUG?	Uklju�uje debug output. Zbog ovoga se DEBUGPAGE pojavljuje na dnu svake stranice. Korisno tijekom perioda razvoja jer prikazuje sadr�aj ko�arice, vrijednosti polja u obrascu i sl.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'FLYPAGE';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Standardna stranica za prikazivanje detalja o proizvodima.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Predlo�ak Kategorije';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Ovo definira primarni predlo�ak kategorije za prikaz proizvoda u kategoriji.<br />Mo�ete napraviti nove predlo�ke prilagodbom ve� postoje�ih <br />(koji se nalaze u direktoriju <strong>PUTANJA_KOMPONENTE/html/templates/</strong> i po�inju sa browse_)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Standardni broj proizvoda u retku.';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Ovo odre�uje broj proizvoda u retku. <br />Primjer: Ako ga postavite na 4, Predlo�ak kategorije �e prikazati 4 proizvoda u svakom retku';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = '"no image" slika';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Ova slika se koristi kada slika proizvoda nije dostupna.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'Redaka Rezultata Pretra�ivanja ';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Odre�uje broj redaka po stranici kad se rezultati pretra�ivanja prikazuju u listi.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'Boja Rezultata Pretra�ivanja 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = ' Odre�uje boju neparnih redaka u listi rezultata.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'Boja Rezultata Pretra�ivanja 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Odre�uje boju parnih redaka u listi rezultata.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'Maksimalni Broj Redaka';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Postavlja broj redaka koji �e se prikazati u select box-u liste narud�bi.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Prikazati "powered by VirtueMart" ?';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Prikazuje powered-by-VirtueMart logo na dnu du�ana.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Odabir Na�ina Dostave';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Primarni Dostavni modul sa individualno konfiguriranim dostavlja�ima i transportnim tro�kovima. <strong>PREPORU�ENO !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = 'Zone Shipping Modul Country Version 1.0<br />Za vi�e informacija o ovom modulu posjetite <a href="http://ZephWare.com">http://ZephWare.com</a><br />Za detalje <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Ozna�ite ovo za aktiviranje transportnih zona';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<a href="http://www.ups.com" target="_blank">UPS Online� Alati</a> Izra�un cijene dostave';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'UPS pristupni kod';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Va� UPS pristupni kod';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'UPS korisni�ko ime';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'Korisni�ko ime koje ste dobili od UPS-a';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'UPS �ifra';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = '�ifra za va� UPS ra�un';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'InterShipper Modul. Ozna�ite samo ako imate <a href="http://www.intershipper.com" target="_blank">Intershipper.com</a> korisni�ki ra�un.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Onemogu�uje izbor na�ina dostave. Odaberite ako va�i kupci kupuju usluge ili proizvode koje se ne dostavljaju fizi�ki.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'InterShipper �ifra';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Va�a �ifra za intershipper korisni�ki ra�un.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'InterShipper email';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'Va�a email adresa za intershipper korisni�ki ra�un.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'ENCODE KEY';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Koristi se za enkripciju podataka pohranjenih u bazi. Ovo zna�i da bi ova datoteka trebala uvijek biti za�ti�ena od �itanja.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Omogu�i Checkout Bar';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Ozna�ite ovo ako �elite da \'checkout-bar\' bude prikazan kupcima za vrijeme procesa kupnje ( 1 - 2 - 3 - 4 sa grafikom).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Izaberite na�in kupnje za va� du�an';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Primarni:</strong><br/>
              1. Unos adrese za dostavu<br />

        2. Odabir na�ina dostave<br />
              3. Odabir na�ina pla�anja<br />
              4. Zaklju�ivanje narud�be';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Proces 2:</strong><br/>
              1. Unos adrese za dostavu<br />
              2. Odabir na�ina pla�anja<br />
              3. Zaklju�ivanje narud�be';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Proces 3:</strong><br/>
              1. Odabir na�ina dostave<br />
              2. Odabir na�ina pla�anja<br />
              3. Zaklju�ivanje narud�be';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Proces 4:</strong><br/>
              1. Odabir na�ina pla�anja<br />
              2. Zaklju�ivanje narud�be';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Omogu�i Downloade';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Obavezno ako nudite digitalne proizvode i �elite omogu�iti kupcima da, nakon pla�anja, mogu skinuti (downloadati) kupljeni proizvod sa va�eg servera.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Status narud�be koji omogu�ava download';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Odaberite koji status mora imati narud�ba da bi se kupcu poslala email obavijest da je njihova narud�ba spremna za download.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Status narud�be koji onemogu�ava download';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Odaberite koji status mora imati narud�ba da bi se kupcu onemogu�io download.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'DOWNLOADROOT';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'Fizi�ka putanja do datoteka za download.<br>
        <span class="message">Zbog sigurnosti va�eg du�ana, uvijek kada je to mogu�e, koristite direktorij IZVAN WEBROOT-a</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Maksimalno Downloada';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Odre�uje maksimalni broj dozvoljenih downloada za jednu narud�bu.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Download je Istekao';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Odre�uje vremenski raspon <strong>u sekundama</strong> u kojemu je kupcima omogu�en download.
  Ovaj raspon po�inje prvim downloadom! Kad istekne vrijeme Download-ID se deaktivira.<br />Napomena: 86400sek=24sata.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Omogu�iti IPN Payment preko PayPal-a?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Odaberite ako �elite omogu�iti pla�anje preko PayPal-a.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'PayPal email:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Va�a poslovna email adresa za PayPal pla�anje. Koristi se i kao receiver_email.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Status narud�be za uspje�nu transakciju';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Odaberi status narud�be za koji je postavljena stvarna narud�ba, ako je PayPal IPN bio uspje�an. Ako koristite opcije za Download prodaju:
  odaberite status koji omogu�ava downloade (onda kupac odmah biva obavije�ten o downloadu putem emaila).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Status narud�be za neuspjele transakcije';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Odaberite status narud�be za neuspjele PayPal transakcije.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Omogu�i pla�anje putem PayMate?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Ozna�ite da omogu�ite kupcima kori�tenje Australskog PayMate sustava pla�anja.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'PayMate korisni�ko ime:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Va� korisni�ki ra�un za PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Omogu�i Authorize.net pla�anje?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Ozna�i za kori�tenje Authorize.net sa  VirtueMart-om.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Test mod ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Odaberite \'DA\' dok testirate. Odaberite \'Ne\' za omogu�avanje live transakcija.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Da';
	var $_PHPSHOP_ADMIN_CFG_NO = 'Ne';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Authorize.net Korisni�ko ime';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'Ovo je va�e Authorize.Net korisni�ko ime';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Authorize.net Transakcijski Klju�';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'Ovo je va� Authorize.net Transakcijski Klju�';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Vrsta Autorizacije';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'Ovo je Authorize.Net vrsta autorizacije.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Omogu�i CyberCash?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Ozna�i za kori�tenje CyberCasha sa phpShopom.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash Trgovac';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_TRGOVAC je va�e CyberCash korisni�ko ime';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash  Klju� Trgovca';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash Merchant Key je klju� koji ste dobili od CyberCash-a';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash URL za PLA�ANJE';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'CyberCash PAYMENT URL je URL koji vam je Cybercash dodjelio za sigurno pla�anje';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash VRSTA AUTORIZACIJE';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'CyberCash VRSTA AUTORIZACIJE je Cbercash vrsta autorizacije omogu�ena od Cybercasea';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Napredno Pretra�ivanje';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Sve Kategorije';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Sve informacije o proizvodu';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Samo Imena Proizvoda';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Samo Proizvo�a�e/Prodava�e';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Samo Opise Proizvoda';
	var $_PHPSHOP_SEARCH_AND = 'I';
	var $_PHPSHOP_SEARCH_NOT = 'NE';
	var $_PHPSHOP_SEARCH_TEXT1 = 'Prvi padaju�i izbornik omogu�uje odabir kategorije na koju �elite ograni�iti pretra�ivanje.
        Drugi padaju�i izbornik omogu�uje ograni�avanje pretra�ivanja na odre�eni dio informacija o proizvodu (npr. Opis).
        Ne zaboravite unijeti klju�nu rije� za pretra�ivanje. ';
	var $_PHPSHOP_SEARCH_TEXT2 = 'Pretra�ivanje mo�ete dodatno rafinirati dodavanjem druge klju�ne rije�i i odabirom I ili NE operatora.
        I zna�i da obje rije�i moraju biti sadr�ane da bi se proizvod prikazao.
        Ne zna�i da �e se proizvod prikazati samo ako je prva klju�na rije� prisutna a druga nije.';
	var $_PHPSHOP_ORDERBY = 'Sortiranje';
	var $_PHPSHOP_CUSTOMER_RATING = 'Prosje�na ocjena';
	var $_PHPSHOP_TOTAL_VOTES = 'Ukupno glasova';
	var $_PHPSHOP_CAST_VOTE = 'Glasajte';
	var $_PHPSHOP_RATE_BUTTON = 'Ocijenite';
	var $_PHPSHOP_RATE_NOM = 'Ocjena';
	var $_PHPSHOP_REVIEWS = 'Komentari';
	var $_PHPSHOP_NO_REVIEWS = 'Jo� nema komentara o ovom proizvodu.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Napi�ite prvi svoj komentar...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Pisanje komentara je dostupno samo registriranim korisnicima.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Ocijenite proizvod da bi dovr�ili va� komentar!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Va� komentar je prekratak. Minimalni broj znakova je: %s';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Va� komentar je preduga�ak. Maksimalni broj znakova je: %s';
	var $_PHPSHOP_WRITE_REVIEW = 'Komentirajte proizvod!';
	var $_PHPSHOP_REVIEW_RATE = 'Prvo: Ocijenite proizvod. Odaberite ocjenu izme�u 0 (najlo�ije) i 5 zvjezdica (najbolje).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Ovdje mo�ete napisati svoje mi�ljenje o ovom proizvodu....(min. %s, max. %s znakova) ';
	var $_PHPSHOP_REVIEW_COUNT = 'Uneseno znakova: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Po�alji komentar';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Ve� ste napisali komentar o ovom proizvodu. Hvala.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Hvala na komentaru.';
	var $_PHPSHOP_COMMENT = 'Komentar';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Nova Kreditna kartica';
	var $_PHPSHOP_CREDITCARD_NAME = 'Naziv kreditne kartice';
	var $_PHPSHOP_CREDITCARD_CODE = 'Kreditna kartica - Kratki kod';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Vrsta kreditne kartice';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Popis kreditnih kartica';
	var $_PHPSHOP_UDATE_ADDRESS = 'Ure�ivanje adrese';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Nastavi Kupnju';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Va�a narud�ba je uspje�no primljena!';
	var $_PHPSHOP_ORDER_LINK = 'Slijedite link za vi�e detalja.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'Status va�e narud�be br. {order_id} je promjenjen.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'Novi status je:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'Za pregled detalja narud�be slijedite link:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Promjena statusa narud�be: Va�a narud�ba {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Obavijestiti kupca?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Prvo promijenite status narud�be!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Popust za primarnu grupu kupaca (u %)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Pozitivni iznos X zna�i: Ako OVOJ grupi kupaca nije dodijeljena posebna cijena, osnovna cijena se sni�ava za X%. Negativni iznos ima suprotni u�inak';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Popusti';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Lista Popusta';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Novi Popust';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Iznos popusta';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Unesite iznos popusta';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Vrsta popusta';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Postotak';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Fiksno';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Da li je popust postotak ili fiksni iznos?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Datum po�etka popusta';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Odre�uje kada po�inje popust';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Zavr�ni dan popusta';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Odre�uje kada popust zavr�ava';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Mo�ete upotrebljavati obrazac za dodavanje popusta.';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'U�teda';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 've�a slika';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Na�in prikaza valute';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Simbol valute';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Mo�ete upotrebljavati i HTML entitete (npr. �,&#163;,&#165;,...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Decimale';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Broj prikazanih decimala (mo�e biti 0)<br><b>Automatski zaokru�uje ako vrijednost ima ve�i broj decimala</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Simbol decimale';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Znak za oznaku decimale';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Odjeljiva� tisu�a';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Znak za odijeljivanje tisu�a (mo�e biti prazno)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Pozitivni oblik';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Format prikaza pozitivnih vrijednosti.<br>(Simb je kratica za simbol valute)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Negativni oblik';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Format prikaza negativnih vrijednosti. Npr. popusta<br>(Simb je kratica za simbol valute)';
	var $_PHPSHOP_OTHER_LISTS = 'Ostale Liste Proizvoda';
	var $_PHPSHOP_MORE_IMAGES = 'vi�e slika';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Dostupne slike za';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Nazad na detalje o proizvodima';
	var $_PHPSHOP_FILEMANAGER = 'Upravljanje datotekama';
	var $_PHPSHOP_FILEMANAGER_LIST = 'Upravljanje datotekama :: Lista Proizvoda';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Nova slika/datoteka';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Dodijeljene Slike';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'Mogu�e Download-ati';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Dodjeljene datoteke (Datasheets,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Objavljeno?';
	var $_PHPSHOP_FILES_LIST = 'Upravljanje datotekama :: Lista Slika/Datoteka za';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Naziv Datoteke';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'Naslov Datoteke';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Tip Datoteke';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Ure�ivanje Datoteke';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Slika';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'miniSlika';
	var $_PHPSHOP_FILES_FORM = 'Upload datoteke za';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Trenutna datoteka';
	var $_PHPSHOP_FILES_FORM_FILE = 'Datoteka';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Slika';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Uploadati u';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'Primarna putanja do slike proizvoda';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Odredite lokaciju datoteke';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Download putanja (npr. za prodaju digitalnih proizvoda!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Automatsko kreiranje minislika?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Datoteka je objavljena?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Naslov datoteke (kako je vidi kupac)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Opis datoteke';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'URL datoteke (opcija)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Unesite valjanu putanju!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'miniSlika je uspje�no kreirana!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'Nije uspjelo kreiranje miniSlike!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Gre�ka prilikom uploada Datoteke/Slike';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Ne mo�e se izbrisati slika.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Slika uspje�no izbrisana.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Nije uspjelo brisanje miniSlike (mo�da nije postojala): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'miniSlika je uspje�no izbrisana.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Nije uspjelo brisanje datoteke.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Datoteka uspje�no izbrisana.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Datoteka nije prona�ena!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Slika nije prona�ena!';
	var $_PHPSHOP_COUPON_MOD = 'Kupon';
	var $_PHPSHOP_COUPONS = 'Kuponi';
	var $_PHPSHOP_COUPON_LIST = 'Lista Kupona';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Kupon je ve� upotrebljen.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Kupon je upotrebljen! Hvala.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Ako imate kupon, unesite njegov kod ovdje:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Po�alji';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Taj kupon kod ve� postoji. Molimo, poku�ajte ponovo.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Ure�ivanje Kupona';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Za ure�ivanje kliknite na kod kupona ili za brisanje koda kupona odaberite Izbri�i:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Kod';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Postotak ili Fiksno';
	var $_PHPSHOP_COUPON_TYPE = 'Tip Kupona';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Poklon Kupon se bri�e nakon �to je iskori�ten dok se stalni kupon mo�e koristiti neograni�eno';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Poklon Kupon';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Trajni Kupon';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Vrijednost';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Izbri�i Kod';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Sigurno �elite izbrisati kod ovog kupona?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Popunite sva polja.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'Vrijednost kupona mora biti broj.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Novi Kupon';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Kod Kupona';
	var $_PHPSHOP_COUPON_PERCENT = 'Postotak';
	var $_PHPSHOP_COUPON_TOTAL = 'Fiksno';
	var $_PHPSHOP_COUPON_VALUE = 'Vrijednost';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Kuponski Kod je Spremljen.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Spremi Kupon';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Kuponski Popust';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Kod kupona nije prona�en. Molimo, poku�ajte ponovo.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Uklju�i Kori�tenje Kupona';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Ako uklju�ite upotrebu kupona, dopustit �ete kupcima da upi�u brojeve kupona kako bi ostvarili popust na kupnju.';
	var $_PHPSHOP_FREE_SHIPPING = 'Besplatna Dostava';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Dostava za ovu narud�bu je besplatna!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Minimalni iznos za besplatnu dostavu';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Iznos (SA POREZOM!) koji je minimum za besplatnu dostavu.
                                                (primjer: <strong>50</strong> zna�i Besplatnu Dostavu ako je iznos narud�be
                                                50 kuna (uklju�uju�i porez) ili vi�e.';
	var $_PHPSHOP_YOUR_STORE = 'Va� Du�an';
	var $_PHPSHOP_CONTROL_PANEL = 'Kontrolna Plo�a';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF - Dugme';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'PDF - Dugme u Du�anu';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Uvjeti kori�tenja kod SVAKE NARUD�BE';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Ozna�ite ako �elite da kupac mora pristati na uvjete kori�tenja prilikom SVAKE NARUD�BE.';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Vrsta Bankovnog Ra�una';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = '�ekovni Ra�un';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Poslovni �ekovni Ra�un';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'U�teda';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Obnavljaju�a Naplata?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = '�elite li koristiti obnavljaju�u (recurring) naplatu.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Interna gre�ka prilikom obrade zahtjeva za';
	var $_PHPSHOP_PAYMENT_ERROR = 'Gre�ka prilikom procesuiranja pla�anja.';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Pla�anje uspje�no izvr�eno';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS nije uspio izra�unati transportnu pristojbu.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Jam�eni datum dostave';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'UPS na�in preuzimanja.';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Kako preuzimate UPS pakete?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'UPS Pakiranje?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Odabir primarnoga na�ina pakiranja.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Dostava na ku�nu adresu?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Ku�na adresa (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Poslovna dostava (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Kvota za ku�nu ili poslovnu dostavu.';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Manipulativni tro�kovi';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Va�i manipulativni tro�kovi za ovaj na�in dostave.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Porezna stopa';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Koristiti sljede�u poreznu stopu za ovaj na�in dostave.';
	var $_PHPSHOP_ERROR_CODE = 'Kod gre�ke';
	var $_PHPSHOP_ERROR_DESC = 'Opis gre�ke';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Prika�i / Promjeni �ifru transakcije';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Prika�i / Promjeni �ifru transakcije';
	var $_PHPSHOP_TYPE_PASSWORD = 'Upi�ite va�u �ifru';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Trenutna �ifra';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Trenutni �ifra transakcije';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = '�ifra transakcije je uspje�no promijenjena.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Zatra�i kod kreditne kartice (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'provjeri valjanost CVV2/CVC2/CID koda?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Unesite troznamenkasti ili �etveroznamenkasti broj s pole�ine va�e kreditne kartice (Na prednjoj strani kod American Express kartica )';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'Morate unijeti kod va�e kreditne kartice kako bi mogli nastaviti.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'ILI unesite ime datoteke';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'Obja�njenje: Ovdje mo�ete upisati ime datoteke. <strong>Datoteke ne�e biti automatski uploadane!!! Morat �ete ih uploadati ru�no preko FTP-a!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'ILI dodajte novu datoteku';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Mo�ete uploadati lokalnu datoteku. Ta datoteka �e biti proizvod koji prodajete. Postoje�a datoteka �e biti zamijenjena.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Upi�ite tekst kojim �e se kupcu prikazati vrijeme dostupnost proizvoda.<br />npr.: 24h, 48 sati, 3 - 5 dana, Po narud�bi.....';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'ILI odaberite sliku za prikazati na stranici sa detaljima o proizvodu (flypage).<br />Slike su u direktoriju <i>/components/com_phpshop/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Popis atributa';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Primjeri za format popisa atributa:</h4>
        <pre>Veli�ina,XL[+1.99],M,S[-2.99];Boja,Crvena,Zelena,�uta,SkupaBoja[=24.00];iTakoDalje,..,..</pre>
        <h4>Prilago�avanje cijena uz pomo� Naprednih Atributa:</h4>
        <pre>
        + == Dodaje ovaj iznos konfiguriranoj cijeni.<br />
        - == Oduzima ovaj iznos od konfigurirane cijene.<br />
        = == Pretvara cijenu proizvoda u ovaj iznos.
      </pre>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Dodatni atributi';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Primjer formata dodatnih atributa:</h4>
        <pre>Name;Extras;</strong>...</pre>';
	var $_PHPSHOP_MULTISELECT = 'Vi�estruki odabir: CTRL+klik';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'eProcessingNetwork pla�anje';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Omogu�iti kori�tenje eProcessingNetwork.com procesora za pla�anje u va�em du�anu.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Test mod?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Odaberi \'Da\' prilikom testiranja . Izaberi \'Ne\' za omogu�avanje live transakcija.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'eProcessingNetwork.com Login ID';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'Ovo je va� eProcessingNetwork.com Login ID';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'eProcessingNetwork.com Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'Ovo je va� eProcesssingNetwork.com Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Vrsta autorizacije';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'Ovo je eProcessingNetwork.com vrsta autorizacije.';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Sli�ni proizvodi';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Ovdje mo�ete povezati druge proizvode sa ovim proizvodom. Odaberite jedan ili vi�e proizvoda koji �e se prikazivati kao <strong>Sli�ni proizvodi</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Mo�da ste zainteresirani i za ove proizvode?';
	var $_PHPSHOP_IMAGE_ACTION = 'Rad sa slikama';
	var $_PHPSHOP_NONE = 'ni�ta';
	var $_PHPSHOP_ORDER_HISTORY = 'Povijest narud�bi';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Komentar';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Komentar uz va�u narud�bu';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Uklju�iti ovaj komentar?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Dodano datuma';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Kupac obavije�ten?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Promjena statusa narud�be';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = 'USPS korisni�ko ime za dostavu';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = 'Korisni�ko ime za dostavu koje ste dobili registracijom na USPS.com.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = 'USPS �ifra za dostavu';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = '�ifra za dostavu koju ste dobili registracijom na USPS.com.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER = 'USPS server za dostavu';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP = 'USPS server za dostavu';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH = 'USPS putanja za dostavu';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP = 'USPS putanja za dostavu, trebala bi biti /ShippingAPI.dll';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE = 'USPS Veli�ina paketa';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP = 'Mogu�nosti su: Regular, Large, i Oversize.  Treba korisitit naj�e��e kori�tenu veli�inu koju �aljete i bazira se na dimenzijama paketa.  Naj�e��e se koristi Regular.';
	var $_PHPSHOP_USPS_PADDING = 'Percent to pad weight for shipping package. (Include %)';
	var $_PHPSHOP_USPS_PADDING_TOOLTIP = 'Pad the shipping weight to allow additional weight for shipping box and packing. Using this allows you to put actual weight in your items weight settings.  Requires you to have the % sign included.  Example 15%';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_HANDLING_FEE = 'Manipulativni tro�kovi';
	var $_PHPSHOP_USPS_HANDLING_FEE = 'Tro�kovi za ovaj na�in dostave.';
	var $_PHPSHOP_USPS_HANDLING_FEE_TOOLTIP = '�elite li dodatno naplatiti za mogu�nost UPS dostave?  U dolarskom formatu, primjer 2.00';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE = 'Internacionalni manipulativni tro�kovi za USPS po�iljke.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP = '�elite li dodatno naplatiti Internacionalnu USPS dostavu. Dodaje se normalnim manipulativnim tro�kovima. Npr. 2.00';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE = 'Internacionalni manipulativni tro�kovi za USPS po�iljke po kilogramu';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP = 'Internacionalni manipulativni tro�kovi za USPS po�iljke po kilogramu';
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
	var $_PHPSHOP_USPS_RESPONSE_ERROR = 'USPS nije uspio obraditi zahtjev za izra�unavanje transportnih tro�kova.';
	var $_PHPSHOP_PARAMETERS_LBL = 'Parametri';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Tip Proizvoda';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Lista Tipova Proizvoda';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Novi Tip Proizvoda';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Lista Tipova Proizvoda za';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Lista Tipova Proizvoda';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Dodaj Tip proizvoda za';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Novi Tip';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Tip proizvoda';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Naziv Tipa Proizvoda';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Opis Tipa Proizvoda';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Parametri';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Informacija o Tipu Proizvoda';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Objavljeno?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Browse Page - Tip Proizvoda';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = ' Flypage - Tip Proizvoda';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Parametri Tipa Proizvoda';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Informacije o Parametrima';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Vrsta Proizvoda nije prona�ena!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Naziv Parametra';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Ovo ime �e biti ime stupca u tablici. Mora biti jedinstveno i bez razmaka.<BR>Npr.: glavni_materijal';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Etiketa Parametra';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Opis Parametra';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Vrsta Parametra';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Integer';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Tekst';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Kratki Tekst';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Float';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Char';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Datum & Vrijeme';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Datum';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'DD-MM-YYYY';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Vrijeme';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'HH:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Break Line';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Vi�estruke Vrijednosti';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Mogu�e Vrijednosti';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Prikazati Mogu�e Vrijednosti kao vi�estruki odabir?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Ako su definirane Mogu�e Vrijednosti, Parametri mogu imati samo te vrijednosti. Primjer Mogu�ih Vrijednosti:</strong><BR><span class="sectionname">�elik;Drvo;Plastika;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Primarna Vrijednost';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'Za Parametar Primarna Vrijednost koristite ovaj format:<ul><li>Datum: YYYY-MM-DD</li><li>Vrijeme: HH:MM:SS</li><li>Datum & Vrijeme: YYYY-MM-DD HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Jedinica';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Pretra�ivanje po parametrima';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Parametri pretra�ivanja';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = '�elite li pretra�ivati proizvode po tehni�kim parametrima?<BR>Mo�ete koristiti bilo koji pripremljeni obrazac:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Na�alost, nema kategorije za pretra�ivanje.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Na�alost, nije objavljen nijedan proizvod ovoga imena.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'Je kao';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'Nije kao';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Pretra�ivanje cijelog teksta';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Sve ozna�eno';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Bilo �to ozna�eno';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Poni�ti';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Tra�i u kategoriji';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Promjeni parametre';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Silazni poredak';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Uzlazni poredak';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Parametri kategorije';
	var $_PHPSHOP_FEE = 'Naknada';
	var $_PHPSHOP_PRODUCT_CLONE = 'Kloniraj';
	var $_PHPSHOP_CSV_SETTINGS = 'Postavke';
	var $_PHPSHOP_CSV_DELIMITER = 'Delimiter';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Field Enclosure Char';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Uploadaj CSV datoteku';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Po�alji CSV datoteku';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'U�itaj iz direktorija';
	var $_PHPSHOP_CSV_FROM_SERVER = 'U�itaj CSV datoteku sa servera';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Izvezi u CSV datoteku';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Na�in sortiranja polja';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Primarno sortiranje';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'Prilago�eno sortiranje';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Izvezi sve proizvode u CSV datoteku';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'Konfiguracija CSV Uvoza/Izvoza';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Spremi promjene';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Ime polja';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'Primarna vrijednost';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Sortiranje polja';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Obavezno polje?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Uvoz/Izvoz';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Dodaj novo polje';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Dokumentacija';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Tra�eni proizvod nije prona�en!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Prikazati proizvode kojih nema na zalihama';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Kada je omogu�eno, proizvodi kojih nema na zalihama su ipak prikazani. Ina�e su takvi proizvodi skriveni.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'Broj jedinica u Pakovanju';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'Broj jedinica u Kutiji:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Sakriti proizvode kojih nema na zalihama';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Istaknuti Proizvodi & Sni�enja';
	var $_PHPSHOP_FEATURED = 'Istaknuto';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Natrag';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Natrag';
	var $_PHPSHOP_ADD_STATE = 'Nova Regija';
	var $_PHPSHOP_LIST_STATES = 'Regije';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'istaknuto i sni�eno';
	var $_PHPSHOP_SHOW_FEATURED = 'istaknuti proizvodi';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'proizvodi na sni�enju';
	var $_PHPSHOP_FILTER = 'Filter';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Natrag na Naslovnicu';
	var $_PHPSHOP_EXPAND_TREE = 'Otvori Sve';
	var $_PHPSHOP_COLLAPSE_TREE = 'Zatvori Sve';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Sni�ena Cijena';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Ovdje mo�ete unijeti posebnu sni�enu cijenu za ovaj proizvod i tako premostiti postavke popusta.<br/>
Du�an �e stvoriti novi popust iz sni�ene cijene.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Cijena po Jedinici';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'Du�an je Neaktivan';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'Ako je ovo uklju�eno, Du�an �e prikazivati poruku o neaktivnosti';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Poruka o neaktivnosti';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Prefiks mysql tablica ove komponente';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'Primarni je <strong>vm</strong> ';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Navigacijska Traka na vrhu liste proizvoda?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Mo�ete uklju�iti ili isklju�iti prikazivanje Navigacijske Trake na vrhu liste proizvoda.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Prikazati broj proizvoda';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Prikazati broj proizvoda u kategoriji kao Kategorija (4)?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'Stil dugmeta - u Ko�aricu';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'Dinami�na promjena veli�ine miniSlika?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'Omogu�uje dinami�nu promjenu veli�ine slika. Zna�i da �e sve miniSlike biti one veli�ine koju navedete ispod.
        Koristi se GD2 funkcija (mo�ete provjeriti imate li instaliranu GD2 podr�ku "Sustav" -> "Informacije" -> "PHP Info" -> gd.)
        Na ovaj na�in je kvaliteta miniSlika puno bolja nego kada im veli�inu pode�ava internet preglednik. Novo stvorene slike se spremaju u /shop_image/prduct/resized direktorij.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = '�irina miniSlika';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'Ciljna <strong>�irina</strong> miniSlike.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Visina miniSlika';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'Ciljna <strong>visina</strong> miniSlike.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Popunite bar jednu ku�icu u Konfiguraciji Dostave!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Konfiguracija Cijena';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Grupe korisnika koji mogu vidjeti cijene';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = '�lanovi odabrane grupe i svih grupa iznad mogu vidjeti cijene proizvoda.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Prikazati (uklju�uju�i XX% poreza)';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'Kada je ovo uklju�eno, kupci �e vidjeti tekst "(uklju�uju�i XX% poreza)" uz cijene koje su prikazane s uklju�enim porezom.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'Prikazati cijenu Pakovanja';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'Ako je ovo uklju�eno cijena �e biti izra�unata iz vrijednosti jedinice proizvoda i komada u Pakovanju:<br/>
<strong>Cijena po jedinici (10 komada)</strong><br/>
Ako je ovo isklju�eno cijene se prikazuju normalno: <strong>Cijena: $xx.xx</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'Dodatne Postavke';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Dodatne Postavke';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Frontend Postavke';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Konfiguracija Poreza';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Po�etna koli�ina';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Zavr�na koli�ina';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'Postavke Registracije Korisnika';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'Dozvoliti registraciju novih korisnika?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'Potrebna aktivacija novih korisnika?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Tiha (skrivena) registracija korisnika';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'Kada je ovo uklju�eno, posjetitelji ne trebaju unositi korisni�ko ime i �ifru za novi korisni�ki ra�un. Umjesto toga koristi se email adresa kao korisni�ko ime i automatski se generira �ifra. Tako dobiveni registracijski detalji se potom �alju kupcu.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Po�tovanje %s,
Hvala �to ste se registrirali na %s. Va� korisni�ki ra�un je aktiviran.
Sada se mo�ete prijaviti na %s koriste�i slijede�e korisni�ko ime i �ifru:
Korisni�ko Ime - %s
�ifra - %s
';
	var $_PEAR_LOG_CRIT = 'Kriti�no';
	var $_PEAR_LOG_ERR = 'Gre�ka';
	var $_PEAR_LOG_WARNING = 'Upozorenje';
	var $_PEAR_LOG_INFO = 'Info';
	var $_PEAR_LOG_TIP = 'Info';
	var $_PEAR_LOG_ALERT = 'Upozorenje';
	var $_PEAR_LOG_EMERG = 'Emergency';
	var $_PEAR_LOG_NOTICE = 'Napomena';
	var $_PEAR_LOG_DEBUG = 'Debug';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'Omogu�iti pla�anje kroz PayFlow Pro?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'Omogu�iti kori�tenje VeriSign PayFlow Pro-a sa VirtueMart komponentom.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'Testiranje?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'Odaberite \'Da\' dok testirate i pripremate du�an. Odaberite \'Ne\' za omogu�avanje aktivnih transakcija.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'VeriSign processing Partner ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'Partner ID koju ste dobili kao autorizirani VeriSign Reseller i kojom ste registrirani kao korisnik PayFlow Pro usluge';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'PayFlow Pro Login ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'Ovdje unesite svoje PayFlow Pro korisni�ko ime.';
	var $_VM_TAXDETAILS_LABEL = 'Ukupni porez iznosi';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'Primarni na�in sortiranja proizvoda';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'Definira po kojemu se polju primarno sortiraju proizvodi';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'Dostupni na�ini sortiranja';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'Odaberite polja po kojima �elite omogu�iti sortiranje. Ako ne odaberete niti jedno polje, opcija sortiranja se ne�e koristiti.';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO = 'Prikazati kratka "Pravila povrata robe" na stranici za potvrdu narud�be?';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP = 'U ve�ini europskih zemalja vlasnici web du�ana moraju po zakonu obavijestiti kupca o pravilima povrata i poni�tenja narud�be. Dakle, ovo bi ve�inom trebalo biti uklju�eno.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT = 'Tekst Pravnih informacija (kratki).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP = 'Ovaj tekst ukratko informira kupce o pravilima povrata i poni�tenja narud�be. Prikazuje se na posljednjoj stranici postupka naplate, odmah iznad dugmeta "Potvrdi narud�bu".';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK = 'Du�a verzija pravila povrata (link na stavku sadr�aja).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP = 'Molimo dodajte novu stavku sadr�aja o detaljima pravila povrata i poni�tenja narud�be.
Nakon toga mo�ete je ovdje odabrati.';
	var $_VM_LEGALINFO_SHORTTEXT = '<h5>Pravila povrata robe</h5>
Mo�ete poni�titi ovu narud�bu u roku od dva tjedna nakon �to je zaprimimo.
Mo�ete vratiti nove, neotvorene proizvode iz poni�tene narud�be u roku 2 dva tjedna nakon �to su
Vam isporu�ene. Proizvodi se moraju vratiti u originalnom pakiranju.
Za vi�e informacija o poni�tenju narud�bi i povratu proizvoda pogledajte <a href="%s" onclick="%s" target="_blank">Pravila Povrata Robe</a>.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EU = 'Metoda Europske Unije';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE = 'Direktorij (mapa) za spremanje session informacija nije otvorena za zapisivanje. Molimo ispravite to ili kontaktirajte pru�atelje hosting usluge.';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX = 'Putanja za spremanje session informacija %s ne dozvoljava zapisivanje. Molimo ispravite to! Shop poku�ava koristiti %s kao zamjenu.';
	var $_VM_SESSION_COOKIES_NOT_ACCEPTED_TIP = 'Va� internet preglednik ne prihva�a cookije. Da bi ste bili u mogu�nosti ubaciti proizvode u ko�aricu i kupiti ih, morate uklju�iti podr�ku za cookije.';
	var $_PHPSHOP_CSV_SKIP_FIRST_LINE = 'Presko�i prvu liniju';
	var $_PHPSHOP_CSV_SKIP_DEFAULT_VALUE = 'Presko�i primarnu vrijednost';
	var $_PHPSHOP_CSV_OVERWRITE_EXISTING_DATA = 'Prebri�i postoje�e podatke';
	var $_PHPSHOP_CSV_INCLUDE_COLUMN_HEADERS = 'Uklju�uju�i zaglavlja stupaca';
	var $_PHPSHOP_CSV_UPLOAD_SETTINGS = 'Upload Postavke';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS = 'Dostupna polja';
	var $_PHPSHOP_CSV_OUTPUT_CSV_UPLOAD_MESSAGES = 'CSV upload poruke:';
	var $_PHPSHOP_CSV_OUTPUT_COUNT = 'Broj';
	var $_PHPSHOP_CSV_OUTPUT_TOTAL = 'Ukupno';
	var $_PHPSHOP_CSV_OUTPUT_FILE_IMPORTED = 'CSV datoteka je uvezena';
	var $_PHPSHOP_CSV_OUTPUT_UPDATED = 'A�urirano';
	var $_PHPSHOP_CSV_OUTPUT_DELETED = 'Izbrisano';
	var $_PHPSHOP_CSV_OUTPUT_ADDED = 'Dodano';
	var $_PHPSHOP_CSV_OUTPUT_SKIPPED = 'Presko�eno';
	var $_PHPSHOP_CSV_OUTPUT_INCORRECT = 'Neispravno';
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
	var $_ITEM_PREVIOUS = 'prethodna';
	var $_ITEM_NEXT = 'sljede�a';
	var $_CMN_OK = 'OK';
	var $_CMN_CONTINUE = 'Nastavak';
	var $_CMN_CANCEL = 'Odustani';
	var $_BUTTON_SEND_REG = 'Po�alji Registraciju';
	var $_CONTACT_FORM_NC = 'Provjerite jo� jednom da li je obrazac ispunjen potpuno i ispravno.';
	var $_CMN_REQUIRED = 'Obavezno';
	var $_CMN_NEW = 'Novo';
	var $_CMN_SAVE = 'Spremi';
	var $_CMN_NEW_ITEM_LAST = 'Novi objekti se stavljaju na zadnje mjesto. Redoslijed se mo�e mijenjati nakon spremanja.';
	var $_CMN_OPTIONAL = 'Opcionalno';
	var $_E_APPLY = 'Primjeni';
	var $_E_IMAGES = 'Slike';
	var $_URL = 'URL:';
	var $_SEL_CATEGORY = 'Odabir kategorije';
	var $_E_REMOVE = 'Ukloni';
	var $_PN_LT = '<';
	var $_PN_RT = '>';
	var $_PN_PAGE = 'Stranica';
	var $_PN_OF = 'od';
	var $_PN_START = 'Po�etak';
	var $_PN_PREVIOUS = 'Prethodno';
	var $_PN_NEXT = 'Sljede�e';
	var $_PN_END = 'Kraj';
	var $_PN_DISPLAY_NR = 'Prikazati #';
	var $_PN_RESULTS = 'Resultati';
	var $_CMN_PRINT = 'Ispis';
	var $_CMN_PDF = 'PDF';
	var $_CMN_EMAIL = 'E-mail';
	var $_BACK = 'Natrag';
	var $_USERNAME = 'Korisni�ko Ime';
	var $_PASSWORD = '�ifra';
	var $_BUTTON_LOGIN = 'Prijava';
	var $_REGISTER_UNAME = 'Korisni�ko Ime';
	var $_REGISTER_EMAIL = 'E-mail';
	var $_REGWARN_NAME = 'Molimo, unesite svoje ime.';
	var $_REGWARN_UNAME = 'Molimo unesite korisni�ko ime.';
	var $_REGWARN_MAIL = 'Molimo unesite valjanu e-mail adresu.';
	var $_SEND_SUB = 'Korisni�ki detalji za %s na %s';
	var $_ASEND_MSG = 'Po�tovanje %s,

	Nova registracija na %s.
	Ovdje su korisni�ki detalji:

	Ime - %s
	E-mail - %s
	Korisni�ko Ime - %s

	Molimo ne odgovarajte na ovu poruku jer je automatski generirana i slu�i samo kao informacija';
	var $_REG_COMPLETE = '<div class="componentheading">Registracija je dovr�ena!</div><br />Sada se mo�ete prijaviti.';
	var $_REG_COMPLETE_ACTIVATE = '<div class="componentheading">Registracija je dovr�ena!</div><br />Va� korisni�ki ra�un je kreiran i aktivacijski link je poslan na adresu koju ste unijeli. Klikom na aktivacijski link, va� �e korisni�ki ra�un postati funkcionalan.';
	var $_DATE_FORMAT_LC = '%A, %d %B %Y';
	var $_LAST_UPDATED = 'Zadnja izmjena';
	var $_NOT_AUTH = 'Nemate dopu�tenje za pregled.';
	var $_DO_LOGIN = 'Morate se prijaviti na stranicu.';
	var $_VALID_AZ09 = 'Molimo unesite valjano %s.  Bez razmaka, vi�e od %d znakova i bez posebnih znakova - samo 0-9,a-z,A-Z';
	var $_CMN_PUBLISHED = 'Objavljeno';
	var $_CMN_UNPUBLISHED = 'Neobjavljeno';
	var $_MORE = 'Vi�e...';
	var $_EMPTY_CATEGORY = 'Ova kategorija je trenutno prazna.';
	var $_BUTTON_LOGOUT = 'Odjava';
	var $_NO_ACCOUNT = '';
	var $_CREATE_ACCOUNT = 'Registracija';
	var $_REGWARN_PASS = 'Molimo unesite valjanu �ifru.  Vi�e od 6 znakova, bez razmaka i posebnih znakova - samo 0-9,a-z,A-Z';
	var $_REGWARN_VPASS1 = 'Molimo potvrdite �ifru.';
	var $_REGWARN_VPASS2 = '�ifra i potvrda �ifre se ne podudaraju, molimo poku�ajte ponovo.';
	var $_USEND_MSG_ACTIVATE = 'Po�tovanje %s,

Hvala �to ste se registrirali na %s. Va� korisni�ki ra�un je kreiran i mora biti aktiviran da bi ste ga mogli koristiti.
Aktivaciju mo�ete izvr�iti klikom na sljede�i link:
%s

Nakon aktivacije se mo�ete prijaviti na %s koriste�i sljede�e korisni�ko ime i �ifru:

Korisni�ko Ime - %s
�ifra - %s';
	var $_USEND_MSG = 'Po�tovanje %s,

Hvala �to ste se registrirali na %s.

Sada se mo�ete prijaviti na %s koriste�i korisni�ko ime i �ifru koje ste odabrali pri registraciji.';
	var $_PROMPT_PASSWORD = 'Zaboravili ste �ifru?';
	var $_HI = 'Pozdrav';
	var $_NEW_USER_MESSAGE_SUBJECT = 'Detalji nove registracije';
	var $_NEW_USER_MESSAGE = 'Po�tovanje %s,


Otvoren vam je korisni�ki ra�un na %s

Ovaj email sadr�i va�e Korisni�ko ime i �ifru za prijavu na %s

Korisni�ko Ime - %s
�ifra - %s


Molimo, ne odgovarajte na ovu poruku jer je automatski generirana i slu�i samo kao informacija';
	var $_REMEMBER_ME = 'Zapamti me';
	var $_REGISTER_TITLE = 'Registracija';
	var $_JAN = 'Sije�anj';
	var $_FEB = 'Velja�a';
	var $_MAR = 'O�ujak';
	var $_APR = 'Travanj';
	var $_MAY = 'Svibanj';
	var $_JUN = 'Lipanj';
	var $_JUL = 'Srpanj';
	var $_AUG = 'Kolovoz';
	var $_SEP = 'Rujan';
	var $_OCT = 'Listopad';
	var $_NOV = 'Studeni';
	var $_DEC = 'Prosinac';
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
}
class phpShopLanguage extends vmLanguage { }

/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>