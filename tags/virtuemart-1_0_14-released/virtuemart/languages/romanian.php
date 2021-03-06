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
	var $_PHPSHOP_MENU = 'Meniu';
	var $_PHPSHOP_CATEGORY = 'Categorie';
	var $_PHPSHOP_CATEGORIES = 'Categorii';
	var $_PHPSHOP_SELECT_CATEGORY = 'Selecteaza o Categorie:';
	var $_PHPSHOP_ADMIN = 'Administrare';
	var $_PHPSHOP_PRODUCT = 'Produs';
	var $_PHPSHOP_LIST = 'Lista';
	var $_PHPSHOP_ALL = 'Toate';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Afiseaza toate produsele';
	var $_PHPSHOP_VIEW = 'vizualizeaza';
	var $_PHPSHOP_SHOW = 'arata';
	var $_PHPSHOP_ADD = 'adauga';
	var $_PHPSHOP_UPDATE = 'updateaza';
	var $_PHPSHOP_DELETE = 'sterge';
	var $_PHPSHOP_SELECT = 'selecteaz';
	var $_PHPSHOP_SUBMIT = 'Submit';
	var $_PHPSHOP_RANDOM = 'Produse aleatorii';
	var $_PHPSHOP_LATEST = 'Cele mai noi produse';
	var $_PHPSHOP_HOME_TITLE = 'Home';
	var $_PHPSHOP_CART_TITLE = 'Cos';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Iesire';
	var $_PHPSHOP_LOGIN_TITLE = 'Login';
	var $_PHPSHOP_LOGOUT_TITLE = 'Logout';
	var $_PHPSHOP_BROWSE_TITLE = 'Cauta';
	var $_PHPSHOP_SEARCH_TITLE = 'Cauta';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Intretinere cont';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Navigatie';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Departament';
	var $_PHPSHOP_INFO = 'Informatii';
	var $_PHPSHOP_BROWSE_LBL = 'Browse';
	var $_PHPSHOP_PRODUCTS_LBL = 'Produse';
	var $_PHPSHOP_PRODUCT_LBL = 'Produs';
	var $_PHPSHOP_SEARCH_LBL = 'Cauta';
	var $_PHPSHOP_FLYPAGE_LBL = 'Detalii produs';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Cautare produs';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Nume produs';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Categorie produs';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Descriere';
	var $_PHPSHOP_CART_SHOW = 'Afiseaza cosul';
	var $_PHPSHOP_CART_ADD_TO = 'Adauga in cos';
	var $_PHPSHOP_CART_NAME = 'Nume';
	var $_PHPSHOP_CART_SKU = 'SKU';
	var $_PHPSHOP_CART_PRICE = 'Pret';
	var $_PHPSHOP_CART_QUANTITY = 'Cantitate';
	var $_PHPSHOP_CART_SUBTOTAL = 'Subtotal';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Adauga nou';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Adresa destinatiei';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Nu au fost gasite produse.<br />';
	var $_PHPSHOP_PRICE_LABEL = 'Pret: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Adauga in Cos';
	var $_PHPSHOP_NO_CUSTOMER = 'Nu sunteti client inregistrat. Va rugam completati cu datele de achitare.';
	var $_PHPSHOP_DELETE_MSG = 'Sunteti sigur ca vreti sa renuntati la acest produs?';
	var $_PHPSHOP_THANKYOU = 'Va multumim pentru comanda.';
	var $_PHPSHOP_NOT_SHIPPED = 'Nu a fost inca livrat';
	var $_PHPSHOP_EMAIL_SENDTO = 'Un email de confirmare a fost trimis la';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Ne pare rau, ne exista nici un utilizator pe care sa-l adaugati la lista SHOP-ului';
	var $_PHPSHOP_ERROR = 'EROARE';
	var $_PHPSHOP_MOD_NOT_REG = 'Modul neinregistrat.';
	var $_PHPSHOP_MOD_ISNO_REG = 'nu este un modul valid.';
	var $_PHPSHOP_MOD_NO_AUTH = 'Nu aveti permisiunea sa accesati acest modul.';
	var $_PHPSHOP_PAGE_404_1 = 'Pagina nu exista';
	var $_PHPSHOP_PAGE_404_2 = 'Fisierul nu exista.';
	var $_PHPSHOP_PAGE_403 = 'Drepturi de acces insuficiente';
	var $_PHPSHOP_FUNC_NO_EXEC = 'Nu aveti dreptul de executie asupra ';
	var $_PHPSHOP_FUNC_NOT_REG = 'Functie neinregistrata';
	var $_PHPSHOP_FUNC_ISNO_REG = ' nu este o functie valida.';
	var $_PHPSHOP_ADMIN_MOD = 'Admin';
	var $_PHPSHOP_USER_LIST_MNU = 'Listeaza Utilizatorii';
	var $_PHPSHOP_USER_LIST_LBL = 'Lista utilizatorilor';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Username';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Nume complet';
	var $_PHPSHOP_USER_LIST_GROUP = 'Grup';
	var $_PHPSHOP_USER_FORM_MNU = 'Adauga Utilizator';
	var $_PHPSHOP_USER_FORM_LBL = 'Adauga/Modifica Informatii despre utilizator';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Detalii plata';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Adresa de livrare';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Adauga Adresa';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'No shipping addresses.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Porecla adresa';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Nume';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Prenume';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Numele tatalui';
	var $_PHPSHOP_USER_FORM_TITLE = 'Titlul';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Username';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Parola';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Confirma Parola';
	var $_PHPSHOP_USER_FORM_PERMS = 'Permisii';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Customer Number / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Numele firmei';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Addresa 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Addresa 2';
	var $_PHPSHOP_USER_FORM_CITY = 'Oras';
	var $_PHPSHOP_USER_FORM_STATE = 'Judet';
	var $_PHPSHOP_USER_FORM_ZIP = 'Cod Postal';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Tara';
	var $_PHPSHOP_USER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Mobile Phone';
	var $_PHPSHOP_USER_FORM_FAX = 'Fax';
	var $_PHPSHOP_USER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Listeaza Modulele';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Lista Modulelor';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Nume Modul';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Permisiuni Modul';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Functii';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Ordinea afisarii';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Adauga Modul';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Informatie Modul';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Nume modul (pentru Topmenu)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Nume Modul';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Permisiuni modul';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Header Modul';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Footer modul';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Afiseaza modul in meniul Administrativ?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Ordinea afisarii';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Descriere modul';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'Cod Limba';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Fisier Limba';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Listeaza Functiile';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Lista Functiilor';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Numele Functiilor';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Numele Clasei';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Metoda clasei';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Permisiuni';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Adauga Functie';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Informatii Functie';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Nume Funtie';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Nume Clasa';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Metoda Clasa';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Permisiuni Functie';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Descriere Functie';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Afiseaza Monezi';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Lista Monezilor';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'Adauga Moneda';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Numele Monedei';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'Codul Monedei';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Afiseaza Tarile';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Lista Tarilor';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Adauga tara';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Nume tara';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Cod tara (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Cod tara (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'List State';
	var $_PHPSHOP_STATE_LIST_LBL = 'State List for: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Add/Update a State';
	var $_PHPSHOP_STATE_LIST_NAME = 'State Name';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'State Code (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'State Code (2)';
	var $_PHPSHOP_ADDRESS = 'Addresa';
	var $_PHPSHOP_CONTINUE = 'Continua';
	var $_PHPSHOP_EMPTY_CART = 'Cosul DVS. este gol';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Ping Serverul InterShipper';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'InterShipper-Server Ping ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'InterShipper Ping a esuat';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'InterShipper Ping a avut succes';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Carrier';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Raspuns<br />Time';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'sec.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Afiseaza metodele de expediere';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Metode de expediere active';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Metode de expediere';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Active';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Taxa manipulare';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Lead Time';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'rata fixa';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'procent';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'zile';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Incarcatura grea';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Configureaza metodele de expediere';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Adauga metode de expediere';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Configureaza metode de expediere';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Refresh';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Metoda de expediere';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Activeaza';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Taxa manipulare';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Lead Time';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'rata fixa';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'procent';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'zile';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Incarcatura grea';
	var $_PHPSHOP_ORDER_MOD = 'Comenzi';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Confirma comanda';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Anuleaza comanda';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Printeaza comanda';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Sterge comanda';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Listeaza comenzile';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Lista comenzilor';
	var $_PHPSHOP_ORDER_LIST_ID = 'Numarul comenzii';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Data comenzii';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Data ultimei modificari';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Status';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'SubTotal';
	var $_PHPSHOP_ORDER_ITEM = 'Produse comandate';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Onoreaza comanda';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Numarul comenzii';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Data comenzii';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Order Status';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Informatii client';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Informatii plata';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Informatii expediere';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Factureaza catre';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Expedierea la';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Nume';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Firma';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Adresa 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Adresa 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Oras';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Judet';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'Cod Postal';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Tara';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Telefon';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Fax';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'Email';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Produse comandate';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Cantitatea';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Qty';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'SKU';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Pret';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Total';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'SubTotal';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'Total cu TVA ';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Taxa de expediere si manipulare';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Taxa expediere';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Metoda de plata';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Nume cont utilizator';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Numar cont utilizator';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Data expirarii';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Jurnal plati';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Informatii expediere';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Payment Information';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Carrier';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Metoda de expediere';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Data expediere';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Pret expediere';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'List Order Status Types';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Add Order Status Type';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Order Status Code';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Order Status Name';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Order Status';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Order Status Code';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Order Status Name';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'List Order';
	var $_PHPSHOP_PRODUCT_MOD = 'Produse';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Produsul actual';
	var $_PHPSHOP_CURRENT_ITEM = 'Produs actual';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Inventar Produse';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Afiseaza Inventarul';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Pret';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Numar';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Greutate';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Listeaza Produsele';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Lista produselor';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Numele produselor';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'SKU';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Publica';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Search Product';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'modyfied';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'with price modyfied';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'without price';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'After';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Before';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Adauga produs';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Editeaza acest produs';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Previzualizeaza datele despre produs';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Adauga produs';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Adauga alt produs';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Produs nou';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Updateaza Produs';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Informatii produs';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Product Status';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Dimensiuni si greutate produs';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Imagine produs';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Produs nou';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Updateaza Produs';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Informatii Produs';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Item Status';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Dimensiuni si greutate produs';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Imagine produs';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Inapoi la produsul principal';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'Pentru a updata imaginea curenta, introduceti calea catre noua imagine.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Tastati ';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Produse';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Atribute produs';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Sunteti sigur ca vreti
sa stergeti acest produs?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Sunteti sigur ca vreti
sa stergeti acest produs?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Distribuitor';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Producator';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'SKU';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Nume';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Categorie';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Pret Retail';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Product Price (Net)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Descriere';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Descriere scurta';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'Pe stoc';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'La comanda';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Data cand va fi disponibil';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'La comanda speciala';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Tip Discount';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Publica?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Lungime';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Latime';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Inaltime';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Unitate de masura';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Greutate';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Unitate de masura';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Thumb Nail';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Imagine mare';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'pounds';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'inches';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Unit';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'piece';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Units in Packaging';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Here you can fill in a number unit in packaging. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Units in Box';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Here you can fill in a number unit in box. (max. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Adauga rezultate produs';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Updateaza rezultate
produs';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Adauga rezultate obiect';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Updateaza rezultate
produs';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Foloseste CSV upload';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Foldere produs';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Listeaza Categoriile';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Category Tree';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Adauga Categorie';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Informatii categorie';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Nume categorie';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Parinte';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Descriere categorie';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Publica?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Date Categorie';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Listeaza atribute';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Listeaza atributetele pentru';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Nume atribute';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Listeaza comanda';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Adauga atribut';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Formarea atributului';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Nou atribut produs';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Updatare atribut pentru produs';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Nou atribut pentru articol';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Updatare atribut pentru articol';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Nume atribut';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Ordine listare';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Categorii listare';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Price tree';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Pretul pentru';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Nume grup';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Pret';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Valuta';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Adauga pret';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Informatii pret';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Pret nou produs';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Updatare pret produs';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Pret nou pentru articol';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Updatare pret articol';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Pret';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Grup cumparatori';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Rapoarte';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Listari produse individuale';
	var $_PHPSHOP_RB_SALE_TITLE = 'Raport vanzari';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Privire de ansamblu a activitatii de vanzare';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Stabilire interval';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Lunar';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Saptamanal';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Zilnic';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Luna aceasta';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'Luna trecuta';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'Ultimele 60 de zile';
	var $_PHPSHOP_RB_LAST90_BUTTON = ' Ultimele 90 de zile';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Porneste';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Termina la';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Arata seria selectata';
	var $_PHPSHOP_RB_REPORT_FOR = 'Raport pentru';
	var $_PHPSHOP_RB_DATE = 'Data';
	var $_PHPSHOP_RB_ORDERS = 'Comenzi';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Total articole vandute';
	var $_PHPSHOP_RB_REVENUE = 'Castig';
	var $_PHPSHOP_RB_PRODLIST = 'Listare produs';
	var $_PHPSHOP_SHOP_MOD = 'Magazin';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Imagine';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Pret';
	var $_PHPSHOP_ORDER_STATUS_P = 'Pending';
	var $_PHPSHOP_ORDER_STATUS_C = 'Confirmed';
	var $_PHPSHOP_ORDER_STATUS_X = 'Cancelled';
	var $_PHPSHOP_ORDER_BUTTON = 'Comanda';
	var $_PHPSHOP_SHOPPER_MOD = 'Cumparator';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Listeaza cumparatori';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Lista cumparatorilor';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Nume utilizator';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Nume intreg';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Grup';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Adauga cumparator';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Informatii cumparator';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Inregistreaza la informatii';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Informatii';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Informatii expediere';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Adauga adresa';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Adreseaza porecla';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Nume utilizator';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Prenume';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Nume de familie';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Alt prenume';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Titlu';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Nume cumparator';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Parola';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Confirma parola';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Grup cumparatori';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Nume companie';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Adresa 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Adresa 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Oras';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Judet';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'Cod postal';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'tara';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'telefon';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Mobile phone';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Fax';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Yes';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'No';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Listeaza grupuri cumparatori';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Lista grupului de cumparatori';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'nume grup';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Descriere grup';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Tip grup cumparatori';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Adauga grup cumparatori';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Nume grup';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Descriere grup';
	var $_PHPSHOP_STORE_MOD = 'Stocare';
	var $_PHPSHOP_STORE_FORM_MNU = 'Editeaza stocare';
	var $_PHPSHOP_STORE_FORM_LBL = 'Stocare informatii';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Informatii de contact';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'imagine intreaga';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'incarca imagine';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Stocare nume';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Stocare nume companie';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Adresa 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Adresa 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'Oras';
	var $_PHPSHOP_STORE_FORM_STATE = 'Judet';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'tara';
	var $_PHPSHOP_STORE_FORM_ZIP = 'Cod postal';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Categorie stocare';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Nume de familie';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Prenume';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Alt prenume';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Titlu';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Telefon 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Telefon 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Fax';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'Email';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Cale imagine';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Descriere';
	var $_PHPSHOP_PAYMENT = 'Payment';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Listeaza modalitati plata';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Lista modalitati plata';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Nume';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Cod';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Reducere';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Grup cumparatori';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Tip modalitate plata';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Adauga modalitate plata';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Formular modalitate plata';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Nume modalitate plata';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Grup cumparatori';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Reducere';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Cod';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Ordine lista';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Tip modalitate plata';
	var $_PHPSHOP_TAX_MOD = 'Taxa';
	var $_PHPSHOP_TAX_RATE = 'Impozite';
	var $_PHPSHOP_TAX_LIST_MNU = 'Listeaza impozitele';
	var $_PHPSHOP_TAX_LIST_LBL = 'lista impozitelor';
	var $_PHPSHOP_TAX_LIST_STATE = 'Impozit regional';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Impozit tara';
	var $_PHPSHOP_TAX_LIST_RATE = 'Impozit';
	var $_PHPSHOP_TAX_FORM_MNU = 'Adauga impozit';
	var $_PHPSHOP_TAX_FORM_LBL = 'Adauga informatii impozite';
	var $_PHPSHOP_TAX_FORM_STATE = 'Impozit regional';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Impozit tara';
	var $_PHPSHOP_TAX_FORM_RATE = 'Impozit (pentru 16% => completati 0.16)';
	var $_PHPSHOP_VENDOR_MOD = 'Vanzator';
	var $_PHPSHOP_VENDOR_ADMIN = 'Vanzatori';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Listeaza vanzatori';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Lista vanzatorilor';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Nume vanzator';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Administrator';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Adauga vanzator';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Adauga informatii';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Informatii vanzator';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Informatii de contact';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Imagine intreaga';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Incarca imagine';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Nume magazin';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Nume companie-vanzator';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Adresa 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Adresa 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Oras';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Judet';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Tara';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'Cod postal';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Categorie vanzator';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Nume de familie';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Prenume';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Alt prenume';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Titlu';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Telefon 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Telefon 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Fax';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'Email';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Cale imagine';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Descriere';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Listeaza categorii vanzatori';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Lista categoriilor de vanzatori';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Nume categorie';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Descriere categorie';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Vanzatori';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Adauga categorie vanzator';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Formular categorie vanzator';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Informatii categorie';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Nume categorie';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Descriere categorie';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Producator';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Producatori';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Listeaza producatori';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Lista producatori';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Nume producator';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Admin';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'Adauga producator';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Adauga informatii';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Informatii producator';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Nume producator';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Categorie producator';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'URL la pagina producatorului';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Descriere';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Listeaza categorii producatori';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Lista categoriilor de producatori';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Nume categorie';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Descriere categorie';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Producatori';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Adauga categorie producatori';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Formular categorie producator';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Informatii categorie';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Nume categorie';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Descriere categorie';
	var $_PHPSHOP_HELP_MOD = 'Ajutor';
	var $_PHPSHOP_CART_ACTION = 'Updateaza';
	var $_PHPSHOP_CART_UPDATE = 'Updateaza cantitatea in cos';
	var $_PHPSHOP_CART_DELETE = 'Sterge produsul din cos';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Pret';
	var $_PHPSHOP_PRODUCT_CALL = 'Cerere de pret';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Anterior';
	var $_PHPSHOP_PRODUCT_NEXT = 'Urmatorul';
	var $_PHPSHOP_CART_TAX = 'Tax';
	var $_PHPSHOP_CART_SHIPPING = 'Taxa expediere si manevrare';
	var $_PHPSHOP_CART_TOTAL = 'Total';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Urmatorul';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'Inregistreaza';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Informatii facturare';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Companie';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Nume';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Adresa';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'Email';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Informatii expediere';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Companie';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Nume';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Adresa';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Informatii plata';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Nume card';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Modalitate plata';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Numar credit card';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Data expirarii';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Comanda completa';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'informatii cerute cand plata se face prin credit card';
	var $_PHPSHOP_ZONE_MOD = 'Zona expediere';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Listeaza zone';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Adauga zona';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Precizeaza zona';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Tara';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Zona actuala';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Referire la zona';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Updateaza';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Precizeaza zonele';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Nume zona';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Descriere zona';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Costul zonei pe articol';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Limita cost zona';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Lista zona';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Nume zona';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Descriere zona';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Costul zonei pe articol';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Limita cost zona';
	var $_PHPSHOP_LOGIN_FIRST = 'Va rugam ca mai intai sa va logati/inregistrati la acest site (folositi modulul Login).<br>Multumim.';
	var $_PHPSHOP_STORE_FORM_TOS = 'Termenii serviciului';
	var $_PHPSHOP_AGREE_TO_TOS = 'Va rugam ca mai intai sa fiti de acord cu termenii nostri.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Sunt de acord cu termenii serviciului';
	var $_PHPSHOP_LEAVE_BLANK = '(lasati liber daca aveti <br />nu fisier php individual pentru acesta!)';
	var $_PHPSHOP_RETURN_LOGIN = 'Clienti care revin: Va rugam sa va logati';
	var $_PHPSHOP_NEW_CUSTOMER = 'Nou? Va rugam sa furnizati informatiile dumneavoastra de facturare';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Cont client:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Informatii comanda';
	var $_PHPSHOP_ACC_UPD_BILL = 'Aici puteti updata informatii facturare.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Aici puteti adauga sau pastra adrese de expediere.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Informatii cont';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Informatii expediere';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Fara comanda';
	var $_PHPSHOP_ACC_BILL_DEF = '- Default (la fel ca la Facturare)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Puteti sa adaugati locatii de expediere in contul dvs. Va rugam sa va ganditi la o porecla sau cod pentru locatia de expediere pe care o alegeti mai jos.';
	var $_PHPSHOP_CONFIG = 'Configurare';
	var $_PHPSHOP_USERS = 'Utilizatori';
	var $_PHPSHOP_IS_CC_PAYMENT = 'Plata se face prin credit card?';
	var $_PHPSHOP_SHIPPING_MOD = 'Expediere';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Expediere';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Expeditor';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Lista expeditori';
	var $_PHPSHOP_RATE_LIST_MNU = 'Preturi expediere';
	var $_PHPSHOP_RATE_LIST_LBL = 'Lista preturi expediere';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Nume';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Ordine lista';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Creaza expeditor';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Creaza/editeaza expeditor';
	var $_PHPSHOP_RATE_FORM_MNU = 'Creaza pret expediere';
	var $_PHPSHOP_RATE_FORM_LBL = 'Creaza/editeaza pret expediere';
	var $_PHPSHOP_RATE_FORM_NAME = 'Descriere pret expediere';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Expeditor';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Tara:<br /><br /><i>Multiselect: folositi CTRL si Mouse</i>';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'ZIP range start';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'ZIP range end';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Greutatea minima';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Greutatea maxima';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Tarif';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Tariful pachetului dvs';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'TVA';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Ordine lista';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Expeditor';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Descriere pret expediere';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Greutatea de la ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... la';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Compania tranportatoare';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Ordine lista';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'EROARE: Identitate expeditor exista.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'EROARE: Alegeti un expeditor.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'EROARE: Cel putin un pret de expediere exista, stergeti tarifele prior expeditorului';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'EROARE: Nu poate gasi un expeditor cu aceasta identitate.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'EROARE: Alegeti un expeditor.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'EROARE: Nu poate gasi un expeditor cu aceasta identitate.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'EROARE: Se cere o descriere a pretului.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'EROARE: Destinatia tarii este invalida. Mai multe tari pot fi separate cu ";".';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'EROARE: Se cere o greutate minima';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'EROARE: Se cere o greutate maxima';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'EROARE: Greutatea minima trebuie sa fie mai mica decat greutatea maxima';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'EROARE: Se cere tarif de expediere';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'EROARE: Alegeti o valuta';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'EROARE: Se cere un pret de expediere';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Va rugam selectati';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Expeditor';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Shipping Rate';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Pret';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-nici unul-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Credit Card';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Folositi procesorul de plata';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Debit bancar';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Numai adresa / Plata la livrare';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Va rugam selectati adresa de expediere!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Va rugam selectati modalitatea de expediere!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Va rugam selectati modalitatea de plata!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Va rugam revizuiti datele furnizate si confirmati comanda!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Va rugam selectati o modalitate de expediere.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Va rugam selectati o alta modalitate de expediere.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Va rugam selectati o modalitate de plata.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Va rugam introduceti numarul cartii dvs. de credit.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Va rugam sa introduceti numele de pe cartea dvs de credit.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'Numarul cartii de credit este invalid.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Va rugam sa introduceti luna in care expira cartea de credit.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Va rugam sa introduceti anul in care expira cartea de credit.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'Data expirarii este invalida.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Please select a Ship To address.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Numar de cont invalid.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'Cosul dvs este gol!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'ERROR: Please select a Shipping Carrier!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'EROARE: Tariful de expediere selectat nu exista!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'EROARE: Adresa expeditorului nu exista!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'EROARE: Nu exista date ale cartii de credit...';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'EROARE: Numarul cartii de credit nu exista!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Ne pare rau, dar numarul cartii de credit pe care l-ati folosit este un numar de testare!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'Identitatea utilizatorului nu a fost gasita in baza de date!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Nu ati furnizat numele titularului contului bancar.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Nu ati furnizat IBAN.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Nu ati furnizat numarul contului bancar.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Nu ati furnizat your bank sort code.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Nu ati furnizat numele bancii.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'CheckOut needs a valid Step!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Informatii de plata pentru o procesare ulterioara.<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Nu s-a atins inca o valoare minima de achizitie.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'valoarea minima de achizitie este:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Plata prin credit card';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'Alte modalitati de plata';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Va rugam o modalitate de plata:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Valoare minima de achizitie pentru stocul dvs';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'informatii cont bancar';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Numar cont';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'Bank sorting code number';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Numele bancii';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Titularul contului';
	var $_PHPSHOP_MODULES = 'Module';
	var $_PHPSHOP_FUNCTIONS = 'Functii';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Produse speciale';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'va rugam sa ne lasati o nota cu comanda dvs daca doriti';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Nota clientului';
	var $_PHPSHOP_INCLUDING_TAX = '(incluzand $tax % tax)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'va rugam selectati un articol';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Articol';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Zona de descarcare';
	var $_PHPSHOP_DOWNLOADS_START = 'Start descarcare';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Va rugam introduceti identitata de descarcare pe care il aveti in e-mail si clic \'Start descarcare\'.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Ne pare rau, dar descarcarea dvs a expirat';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Ne pare rau, dar ati atins numarul maxim de descarcari';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Identitate descarcare invalida!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Puteti sa trimiteti un mesaj la ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Mesaj trimis la ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Informatii descarcare';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'Fisierele pe care le-ati comandat sunt gata pentru descarcare';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Va rugam introduceti urmatoarea/urmatoarele identitate/identitati descarcare in zona de descarcare: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'Numarul maxim de descarcari pentru fiecare fisier este: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Download until {expire} days after the first download';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Intrebari? Probleme?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Informatii descarcare de';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'Produs care se poate descarca?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Multumim pentru plata. 
        Tranzactia s-a incheiat cu succes. Veti primi un e-mail de confirmare a tranzactiei prin PayPal. 
        Acm puteti continua sau sa va logati la <a href=http://www.paypal.com>www.paypal.com</a> pentru a vedea detaliile tranzactiei.';
	var $_PHPSHOP_PAYPAL_ERROR = 'A aparut o eroare in timpul procesarii tranzactiei dvs. Statutul comenzii dvs nu a putut fi updatat.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Multumim pentru ca ati ales sa cumparati de la noi. Urmeaza informatii in legatura cu comanda dvs.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'multumim pentru participare.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Intrebari? Probleme?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'Urmatoarea comanda a fost primita.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'A se vedea comanda urmand link-ul de mai jos.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Nu sunt permise cantitatile negative.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Va rugam introduceti o cantitate valida pentru acest articol.';
	var $_PHPSHOP_CART_STOCK_1 = 'Cantitatea selectata depaseste stocul disponibil. ';
	var $_PHPSHOP_CART_STOCK_2 = 'In prezent $produse disponibile in stoc. ';
	var $_PHPSHOP_CART_STOCK_3 = 'Clic aici pentru a fi pusi pe lista de asteptare.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Va rugam sa selectati un articol special de pe pagina cu detalii!';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'nici unul';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Dl.';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'D-na.';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Dr.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof.';
	var $_PHPSHOP_DEFAULT = 'Default';
	var $_PHPSHOP_AFFILIATE_MOD = 'Administrarea membrilor';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Listeaza membrii';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Lista membrilor';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Nume membru';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Activ';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Rate';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Total lunar';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Comisie lunara';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Ordine lista';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'Email membrii';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'Email membrii';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'cui sa trimiteti email(* = ALL)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Email-ul dvs';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Subiect';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Include statistici curente';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Commission Rate (procentaj)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Activ?';
	var $_PHPSHOP_DELIVERY_TIME = 'De obicei se expediaza in ';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Informatii de livrare';
	var $_PHPSHOP_MORE_CATEGORIES = 'Mai multe categorii';
	var $_PHPSHOP_AVAILABILITY = 'Disponibilitate';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Acest produs nu este disponibil in prezent.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Va fi disponibil din nou in: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Rezumat';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Statistica';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Clienti';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'Produse active';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'Produse inactive';
	var $_PHPSHOP_STATISTIC_SUM = 'Suma';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Noi comenzi';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Noi clienti';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Va rugam introduceti adresa dvs de email mai jos pentru a fi anuntati cand produsul se afla din nou in stoc. 
                                        Nu vom imparti, inchiria, vinde sau folosi aceasta adresa de email pentru alt scop decat pentru acela de a va anunta cand produsul se afla din nou in stoc.<br /><br />Multumim!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Multumim pentru asteptare! <br />Va vom anunta imediat ce facem inventarul.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Anunta-ma!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Imprimare';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Va rugam alegeti FIE  Authorize.net FIE CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' Configuration file status:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'is writeable';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'is unwriteable';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Global';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Path & URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Site';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Expediere';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Verificare';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Descarcari';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Plati';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Folositi-l numai ca si catalog';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Daca verificati acesta, toate functiile cosului sunt intrerupte.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Arata preturi';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Arata preturi incluzand taxe';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Sets the flag whether the shoppers sees prices including tax or excluding tax.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Check to show prices. If using catalogue functionality, some don\'t want prices to appear on pages.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Taxa virtuala';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Acesta determina daca articolele care au greutate 0 sunt taxate sau nu. Modificati ps_checkout.php->calc_order_taxable().';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Mod de taxare:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Se bazeaza pe adresa de expediere';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Se bazeaza pe adresa vanzatorului';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Acesta determina ce impozit este luat in considerare pentru calcularea taxelor:<br />
                                                <ul><li> cel din statul/tara proprietarul magazinului provine</li><br/>
                                                <li>ori cel din statul/tara cumparatorul provine.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Se permit mai multe impozite?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Verificati daca aveti produse cu impozite diferite (ex. 7% pentru carti si mancare, 16% pentru alte articole)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Retrageti reducerea de plata inainte de taxare/expediere?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Se permite clientului accesul la sistemul de evaluare/recenzie';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Daca se permite, clientii pot sa <strong>evalueze produse</strong> si <strong>sa scrie recenzii</strong> despre acestea. <br />
                                                                                Clientii pot sa scrie altor clienti despre experienta lor cu un produs.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Sets the flag daca sa retraga reducerea pentru plata selectata INAINTE sau DUPA taxare sau expediere.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Pot clientii sa lase date ale contului bancar?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Verifica daca clientii pot sa furnizeze date ale contului bancar cand se inregistreaza.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Pot clientii sa selecteze un judet?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Verifica daca clientii pot selecta date ale judetului cand se inregistreaza.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Trebuie sa fie de acord cu termenii serviciului?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Verifica daca un cumparator vrea sa fie de acord cu termenii registrului cand se inregistreaza.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Verifica stoc?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Stabileste daca se verifica nivelul stocului cand un utilizator adauga un articol in cos. 
                                                                                          In cazul in care se stabileste, acest lucru nu va permite utilizatorului sa adauge mai multe articole in stoc decat sunt disponibile in stoc.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Se permite accesul la programul membrilor?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Acest lucru permite membrilor sa urmareasca This enables the affiliate tracking in the shop-frontend. Enable if you have added affiliates in the backend..';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Order-mail format:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Text mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Acest lucru determina ordinea de confirmare a email-urilor:<br />
                                                                                        <ul><li>ca un email text simplu</li>
                                                                                        <li>or ca un email html cu imagini.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Allow Frontend-Administration for non-Backend Users?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'With this setting you can enable the Frontend Administration for users who 
                                                                                              are storeadmins, but can\'t access the Mambo Backend (e.g. Registered / Editor).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'URL catre site-ul dvs. De obicei identic cu Mambo URL (with trailing slash at the end!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'URL securizat';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'URL securizat catre site-ul dvs. (https - with trailing slash at the end!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'COMPONENTURL';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'URL catre mambo-phpShop componenta. (with trailing slash at the end!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'IMAGEURL';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'URL catre directorul de imagine mambo-phpShop.(with trailing slash at the end!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'ADMINPATH';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'Calea catre directorul component mambo-phpShop.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'Calea catre categorie';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'Calea catre directorul de categorii phpShop.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'Calea catre pagina';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'Calea catre directorul html phpShop.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'Calea catre imagine';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'Calea catre directorul de imagine phpShop.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'HOMEPAGE';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Aceasta pagina va aparea ca default.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'Eroare pagina';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Pagina default pentru afisarea mesajelor eroare.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'Pagian debug';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = ' Pagina default pentru afisarea mesajelor debug.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'DEBUG ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'DEBUG?  	   	Deschide output debug. Astfel apare DEBUGPAGE in josul paginii. Foarte folositor in timpul dezvoltarii magazinuluipentru ca arata continutul cosurilor, valorile, etc.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'FLYPAGE';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Aceasta este pagina de prezentare a detaliilor produsului.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Model de categorie';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Aceasta defineste modelul de categorie pentru afisarea produselor intr-o categorie.<br />
                                                                                                      Puteti crea noi modele personalizand fisierele existente <br />
                                                                                                      (care se afla in directorul <strong>COMPONENTPATH/html/templates/</strong> and begin with browse_)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Numarul produselor intr-un rand';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Aceasta defineste numarul produselor intr-un rand. <br />
                                                                                                      Exemplu: Daca alegeti 4, modelul de categorie will va afisa 4 produse per rand';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = '"no image" image';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Aceasta imagine va apare cand nici o imagine a produsului este disponibila.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'CAUTA RANDURI';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Determina numarul de randuri pe pagina cand rezultatele cautarii sunt afisate pe o lista.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'CAUTA CULOAREA 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = ' Se refera la culoarea randurilor cu numar impar din lista.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = ' CAUTA CULOAREA 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = ' Se refera la culoarea randurilor cu numar par din lista.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'NUMAR MAXIM DE RANDURI';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Stabileste numarul de randuri din lista selectata.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Arata antet ';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Arata o imagine antet powered-by-mambo-phpShop.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Alege metoda de expediere';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Modul de expediere standard cu evaluari configurate individual. <strong>RECOMMENDED !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '  	Zona de expediere Module Country Version 1.0<br />
                                                                                                            Pentru mai multe informatii la acest modul viziteaza <a href="http://ZephWare.com">http://ZephWare.com</a><br />
                                                                                                            for details or contact <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Check this to enable the zone shipping module';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = 'Calcul expediere UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'Cod de acces UPS ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Codul dvs de acces UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'Identitatea UPS a utilizatorului';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'Identitatea utilizatorului primita din UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'Parola UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'Parola pentru contul UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'Modulul cumparatorului international. Verifica daca aveti un cont Intershipper.com';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Nu permite selectia metodei de expediere. Verifica daca clientii cumpara produse downlodabile care nu trebuie sa fie expediate.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'Parola cumparatorului international';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Parola dvs pentru contul cumparatorului international.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'Emailul cumparatorului international';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'Adresa dvs de email pentru cont.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'CHEIE DE CODARE';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Folosita pentru codarea datelor stocate in baza de date cu aceasta cheie. Aceasta inseamana ca dosarul ar trebui protejat tot timpul.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Permite bara de verificare';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'verifica aceasta, daca vrei ca bara de verificare sa apara clientului in timpul procesului de verificare ( 1 - 2 - 3 - 4 cu grafice).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Alegeti procesul de verificare a magazinului dvs';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Standard :</strong><br/>
               1. Cerere adresa expediere<br />
              2. Cerere metoda expediere<br />
              3. Cerere metoda plata<br />
              4. Comanda completa';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Process 2:</strong><br/>
               1. Cerere adresa expediere<br />
              2. Cerere metoda expediere<br />
              3. Comanda completa';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Process 3:</strong><br/>
               1. Cerere metoda expediere<br />
              2. Cerere metoda plata<br />
              3. Comanda completa';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Process 4:</strong><br/>
               1. Cerere metoda plata<br />
              2. Comanda completa';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Se permite incarcare';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'verifica pentru a permite puterea de descarcare. Numai daca vrei vinde produse care pot fi descarcate.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Statutul comenzii care permite descarcarea';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Selecteaza statutul comenzii la care clientul este anuntat de descarcare prin email.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Statutul comenzii care nu permite descarcarea';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Stabileste statutul comenzii atunci cand descarcarea nu este permisa pentru client.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'DOWNLOADROOT';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'Calea catre fisierele pentru descarcarea clientului. (trailing slash at the end!)<br>
        <span class="message">Pentru securitatea magazinului dvs: Daca puteti, va ruga folositi un director ORIUNDE IN AFARA WEBROOT</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Descarcare maxim';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Stabileste numarul de descarcari care pot fi facute cu o singura identitate, (pentru o singura comanda)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Expirarea descarcarii';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Stabileste timpul <strong>in secunde</strong> la care descarcarea este permisa pentru client. 
  Timpul alocat incepe cu prima descarcare!, cand timpul a expirat, identitatea pentru descarcare nu mai este valabila.<br />Note : 86400s=24h.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Se permit plati IPN  via PayPal?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Verifica pentru a permite clientilor sa foloseasca sistemul de plata PayPal.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'Email pentru plata PayPal:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Adresa de email de afaceri pentru plati PayPal. De asemenea folosit ca email de primire.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Order Status for successful transactions';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Select the order status to which the actual order is set, if the PayPal IPN was successful. If using download selling options: 
  select the status which enables the download (then the customer is instantly notified about the download via e-mail).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Order Status for failed transactions';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Select an order status for failed PayPal transactions.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Se permit plati via PayMate?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Verifica pentru a permite clientilor sa foloseasca sistemul de plata Australian PayMate.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'PayMate username:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Contul utilizatorului pentru PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Se permite plata prin Authorize.net?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Verifica folosirea Authorize.net cu phpShop.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Mode de testare?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Selecteaza \'Da\' in timp de se testeaza. Selecteaza \'Nu\' pentru a permite tranzactii in direct.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Da';
	var $_PHPSHOP_ADMIN_CFG_NO = 'Nu';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Autorizeaza.net Login ID';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'Aceasta este identitatea de logare la Authorize.Net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Cheia de tranzactie la Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'Aceasta este cheia de tranzactie Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Tip de autentificare';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'Acesta este tipul de autentificare Authorize.Net.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Se permite CyberCash?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Verifica pentru a folosi CyberCash cu phpShop.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash MERCHANT';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_MERCHANT is the CyberCash Merchant ID';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash Merchant Key';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash Merchant Key is the Merchant Provided by CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash PAYMENT URL';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'CyberCash PAYMENT URL is the URL provided by Cybercash for secure payment';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash AUTH TYPE';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'CyberCash AUTH TYPE is the Cybercash authentication type provided by Cybercase';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Cautare avansata';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Cauta in toate categoriile';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Cauta dupa informatii produse';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Dupa numele produsului';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Dupa producator/distribuitor';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Dupa descrierea produsului';
	var $_PHPSHOP_SEARCH_AND = 'si';
	var $_PHPSHOP_SEARCH_NOT = 'nu';
	var $_PHPSHOP_SEARCH_TEXT1 = 'The first drop-down-list allows you to select a category to limit your search to. 
        The second drop-down-list allows you to limit your search to a particular piece of product information (e.g. Name). 
        Once you have selected these (or left the default ALL), enter the keyword to search for. ';
	var $_PHPSHOP_SEARCH_TEXT2 = ' You can further refine your search by adding a second keyword and selecting the AND or NOT operator. 
        Selecting AND means both words must be present for the product to be displayed. 
        Selecting NOT means the product will be displayed only if the first keyword is present 
        and the second is not.';
	var $_PHPSHOP_ORDERBY = 'Selecteaza dupa';
	var $_PHPSHOP_CUSTOMER_RATING = 'Media de evaluare a clientului';
	var $_PHPSHOP_TOTAL_VOTES = 'Total voturi';
	var $_PHPSHOP_CAST_VOTE = 'Va rugam votati';
	var $_PHPSHOP_RATE_BUTTON = 'Evalueaza';
	var $_PHPSHOP_RATE_NOM = 'Evaluare';
	var $_PHPSHOP_REVIEWS = 'Comentariiile clientului';
	var $_PHPSHOP_NO_REVIEWS = 'Nu sunt comentarii la acest produs.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Fiti primul care scrie un comentariu...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Va rugam sa va logati pentru a scrie un comentariu.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Va rugam sa evaluati produsul pentru a completa comentariul dvs!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Va rugam adaugati mai multe cuvinte la comentariul dvs. Numarul minim de caractere permise: 100';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Va rugam scurtati comentariul. Numarul maxim de caractere permise: 2000';
	var $_PHPSHOP_WRITE_REVIEW = 'Scrieti un comentariu pentru acest produs!';
	var $_PHPSHOP_REVIEW_RATE = 'Mai intai evaluati produsul> Va rugam sa evaluati intre 0 (cel mai slab)si 5 stele (cel mai bun).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Acum scrieti un scurt comentariu....(min. 100, max. 2000 caractere) ';
	var $_PHPSHOP_REVIEW_COUNT = 'Caractere: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Propune comentarii';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Deja ati facut comentarii in legatura cu acest produs.Multumim.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Multumim pentru comentariile dvs.';
	var $_PHPSHOP_COMMENT = 'Comentarii';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Adauga/editeaza tipuri de carti de credit';
	var $_PHPSHOP_CREDITCARD_NAME = 'Numele cartii de credit';
	var $_PHPSHOP_CREDITCARD_CODE = 'Credit Card ? Cod scurt';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Tip de credit card';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Lista card-urilor de credit';
	var $_PHPSHOP_UDATE_ADDRESS = 'Updateaza adresa';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Continua cumparare';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Comanda dvs a fost luata cu succes!';
	var $_PHPSHOP_ORDER_LINK = 'Urmati link-ul pentru a vedea celelalte detalii.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'the Status of your Order No. {order_id} has been changed.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'New Status is:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'To view the Order Details, please follow this link (or copy it into your browser):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Order Status Change: Your Order {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Sa anuntam clientul?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Va rugam ca mai intai sa schimbati statutul comenzii!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Pretul redus la grupul de cumparatori de baza (in %)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'O cantiate pozitiva X inseamna: Daca produsul nu are pret destinat acestui grup de cumparatori, pretul de baza se scade cu X%. O cantitate negativa are efectul opus';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Reducere la produse';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Lista reducerilor la produse';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Adauga/editeaza reducerea produsului';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Cat se reduce';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Introduceti cat se reduce';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Tip de reducere';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Procentaje';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Total';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'cantitatea sa fie in procentaje sau total?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Inceputul perioadei de reducere';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Specifica data cand reducerea incepe';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Sfarsitul perioadei de reducere';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Specifica data cand reducerea se termina';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Puteti folosi formularul de reducere de preturi pentru a adauga reduceri!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Salvati';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'a se vedea imagine intreaga';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Currency Display Style';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Currency symbol';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'You can also use HTML Entities here (e.g. &euro;,&pound;,&yen;,...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Decimals';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Number of displayed decimals (can be 0)<br><b>Performs rounding if value has different number of decimals</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Decimal symbol';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Character used as decimal symbol';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Thousands separator';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Character used to separate thousands (can be empty)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Positive format';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Display format used to display positive values.<br>(Symb stands for currency symbol)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Negative format';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Display format used to display negative values.<br>(Symb stands for currency symbol)';
	var $_PHPSHOP_OTHER_LISTS = 'Other Product Lists';
	var $_PHPSHOP_MORE_IMAGES = 'View More Images';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Available Images for';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Back to Product Details';
	var $_PHPSHOP_FILEMANAGER = 'FileManager';
	var $_PHPSHOP_FILEMANAGER_LIST = 'FileManager::Product List';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Add Image/File';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Assigned Images';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'Is Downloadable?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Assigned Files (Datasheets,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Published?';
	var $_PHPSHOP_FILES_LIST = 'FileManager::Image/File List for';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Filename';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'File Title';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'File Type';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Edit File Entry';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Full Image';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Thumbnail Image';
	var $_PHPSHOP_FILES_FORM = 'Upload a File for';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Current File';
	var $_PHPSHOP_FILES_FORM_FILE = 'File';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Image';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Upload to';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'default Product Image Path';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Specify the file location';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Download Path (e.g. for selling downloadables!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Auto-Create Thumbnail?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'File is published?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'File Title (what the Customer sees)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'File Description';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'File URL (optional)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Please provide a valid path!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'The Thumbnail Image has been successfully created!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'Could NOT create Thumbnail Image!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'File/Image Upload Error';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Could not delete the Full Image File.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Full Image successfully deleted.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Could not delete the Thumbnail Image File (maybe didnt exist): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Thumbnail Image successfully deleted.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Could not delete the File.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'File successfully deleted.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Sorry, but the requested file wasn\'t found!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Image not found!';
	var $_PHPSHOP_COUPON_MOD = 'Coupon';
	var $_PHPSHOP_COUPONS = 'Coupons';
	var $_PHPSHOP_COUPON_LIST = 'Coupon List';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Coupon has already been redeemed.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Coupon redeemed! Thank you.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'If you have a coupon code, please enter it below:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Submit';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'That coupon code already exists. Please try again.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Update Coupon';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Click a coupon code to edit it, or to delete a coupon code, select it and click Delete:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Code';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Percent or Total';
	var $_PHPSHOP_COUPON_TYPE = 'Coupon Type';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'A Gift Coupon is deleted after it was used for discounting an order. A permanent coupon can be used as often as the customer wants to.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Gift Coupon';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Permanent Coupon';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Value';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Delete Code';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Are you sure you want to delete this coupon code?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Please complete all fields.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'Coupon value must be a number.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'New Coupon';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Coupon Code';
	var $_PHPSHOP_COUPON_PERCENT = 'Percent';
	var $_PHPSHOP_COUPON_TOTAL = 'Total';
	var $_PHPSHOP_COUPON_VALUE = 'Value';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Coupon code saved.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Save Coupon';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Coupon Discount';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Coupon code not found. Please try again.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Enable Coupon Usage';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'If you enable the Coupon Usage, you allow customers to fill in Coupon Numbers to gain discounts on their purchase.';
	var $_PHPSHOP_FREE_SHIPPING = 'Free Shipping';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Shipping is free on this Order!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Minimum Amount for Free Shipping';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'The amount (INCLUDING TAX!) which is the Minimum for Free Shipping 
                                                (example: <strong>50</strong> means Free Shipping when the customer checks out
                                                with $50 (including tax) or more.';
	var $_PHPSHOP_YOUR_STORE = 'Your Store';
	var $_PHPSHOP_CONTROL_PANEL = 'Control Panel';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF - Button';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Show or Hide the PDF - Button in the Shop';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Must agree to Terms of Service on EVERY ORDER?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Check if you want a shopper to agree to your terms of service on EVERY ORDER (before placing the order).';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Bank Account Type';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Checking';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Business Checking';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Saving';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Recurring Billings?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Define wether you want recurring billings.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Internal Error processing the Request to';
	var $_PHPSHOP_PAYMENT_ERROR = 'Failure in Processing the Payment';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Payment successfully processed';
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
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Handling Fee';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Your Handling fee for this shipping method.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Tax Class';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Use the following tax class on the shipping fee.';
	var $_PHPSHOP_ERROR_CODE = 'Error Code';
	var $_PHPSHOP_ERROR_DESC = 'Error Description';
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
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'EITHER Fill in a Filename';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'NOTE: Here you can fill in a FileName. <strong>If you fill in a Filename here, no Files will be uploaded!!! You will have to upload it via FTP manually!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'OR Upload new File';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'You can upload a local file. This file will be the Product you sell. An existing file will be replaced.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Fill in any text here that will be displayed to the customer on the product flypage.<br />e.g.: 24h, 48 hours, 3 - 5 days, On Order.....';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'OR select an Image to be displayed on the Details Page (flypage).<br />The images reside in the directory <i>/components/com_phpshop/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Attribute List';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Examples for the Attribute List Format:</h4>
        <span class="sectionname"><strong>Size</strong>,XL[+1.99],M,S[-2.99]<strong>;Colour</strong>,Red,Green,Yellow,ExpensiveColor[=24.00]<strong>;AndSoOn</strong>,..,..</span>
        <h4>Inline price adjustments for using the Advanced Attributes modification:</h4>
        <span class="sectionname">
        <strong>+</strong> == Add this amount to the configured price.<br />
        <strong>-</strong> == Subtract this amount from the configured price.<br />
        <strong>=</strong> == Set the product\'s price to this amount.
      </span>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Custom Attribute List';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Examples for the Custom attribute List Format:</h4>
        <span class="sectionname"><strong>Name;Extras;</strong>...</span>';
	var $_PHPSHOP_MULTISELECT = 'Multiselect: use STRG-Key and Mouse';
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
	var $_PHPSHOP_RELATED_PRODUCTS = 'Related Products';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'You can build up Product Relations using this List. Just select one or more products here and then they are <strong>Related Products</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'You may also be interested in this/these product(s)';
	var $_PHPSHOP_IMAGE_ACTION = 'Image Action';
	var $_PHPSHOP_NONE = 'none';
	var $_PHPSHOP_ORDER_HISTORY = 'Order History';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Comment';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Comments on your Order';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Include this comment?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Date Added';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Customer Notified?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Order Status Change';
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
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Product Type List';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Add/Edit Product Type';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Product Type List for';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'List Product Types';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Add Product Type for';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Add Product Type';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Product Type';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Product Type Name';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Product Type Description';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Parameters';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Product Type Information';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Publish?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Product Type Browse Page';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Product Type Flypage';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Parameters of Product Type';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Parameter Information';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Product Type not found!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Parameter Name';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'This name will be column name of table. Must be unicate and without space.<BR>For example: main_material';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Parameter Label';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Parameter Description';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Parameter Type';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Integer';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Text';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Short Text';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Float';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Char';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Date & Time';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Date';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'YYYY-MM-DD';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Time';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'HH:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Break Line';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Multiple Values';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Possible Values';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Show Possible Values as Multiple select?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>If Possible Values are set, Parameter can have only this values. Example for Possible Values:</strong><BR><span class="sectionname">Steel;Wood;Plastic;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Default Value';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'For Parameter Default Value use this format:<ul><li>Date: YYYY-MM-DD</li><li>Time: HH:MM:SS</li><li>Date & Time: YYYY-MM-DD HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Unit';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Advanced Search according to Parameters';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Parameters Search';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Do you will find products according to technical parametrs?<BR>You can used any prepared form:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'I am sorry. There is no category for search.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'I am sorry. There is no published Product Type with this name.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'Is Like';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'Is NOT Like';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Full-Text Search';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'All Selected';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Any Selected';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Reset Form';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Search in Category';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Change Parameters';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Descending order';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Ascending order';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Parameters of Category';
	var $_PHPSHOP_FEE = 'Fee';
	var $_PHPSHOP_PRODUCT_CLONE = 'Clone Product';
	var $_PHPSHOP_CSV_SETTINGS = 'Settings';
	var $_PHPSHOP_CSV_DELIMITER = 'Delimiter';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Field Enclosure Char';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Upload a CSV File';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Submit CSV File';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Load from directory';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Load CSV File from Server';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Export to CSV File';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Choose Field Ordering Type';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Default Ordering';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'My customized Ordering';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Export all Products to CSV File';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'CSV Import / Export Configuration';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Save Changes';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Field Name';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'default Value';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Field Ordering';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Field Required?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Import/Export';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Add a new Field';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Documentation';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Sorry, but the Product you\'ve requested wasn\'t found!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Show Products that are out of Stock';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'When enabled, Products that are currently not in Stock are displayed. Otherwise such Products are hidden.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'Number {unit}s in packaging:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'Number {unit}s in box:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Hide out of stock products';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Featured & Discounted Products';
	var $_PHPSHOP_FEATURED = 'Featured';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Back to the country';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Back to the file manager';
	var $_PHPSHOP_ADD_STATE = 'Add a State';
	var $_PHPSHOP_LIST_STATES = 'List States';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'featured AND discounted';
	var $_PHPSHOP_SHOW_FEATURED = 'featured products';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'discounted products';
	var $_PHPSHOP_FILTER = 'Filter';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Back to the Main Site';
	var $_PHPSHOP_EXPAND_TREE = 'Expand Tree';
	var $_PHPSHOP_COLLAPSE_TREE = 'Collapse Tree';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Discounted Price';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Here you can override the discount setting fill in a special discount price for this product.<br/>
The Shop will create a new discount record from the discounted price.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Price per Unit';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'Shop is offline?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'If you check this, the Shop will display an Offline Message.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Offline Message';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Table Prefix for Shop Tables';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'This is <strong>vm</strong> per default';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Show Page Navigation at the Top of the Product Listing?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Switches On or Off the Display of Page Navigation at the Top of the Product Listings in the Frontend.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Show the Number of Products?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Show the Number of Products in a Category like Category (4)?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'Add-to-Cart Button Style';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'Enable Dynamic Thumbnail Resizing?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'If checked, you enable dynamic Image Resizing. This means that all Thumbnail Images are resized to fit the Sizes you provide below,
        using PHP\'s GD2 functions (you can check if you have GD2 support by browsing to "System" -> "System Info" -> "PHP Info" -> gd. 
        The Thumbnail Image quality is much better than Images which were "resized" by the browser. The newly generated Images are put into the directory /shop_image/prduct/resized. If the Image has already been resized, this copy will be send to the browser, so no image is resized again and again.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'Thumbnail Image Width';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'The target <strong>width</strong> of the resized Thumbnail Image.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Thumbnail Image Height';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'The target <strong>height</strong> of the resized Thumbnail Image.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Please select at least one Checkbox in the Shipping Configuration!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Price Configuration';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Membergroup to show prices to';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'The selected membergroup and all groups with higher permissions will be able to see the product prices.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Show "(including XX% tax)" when applicable?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'When checked, users will see the text "(including xx% tax)" when prices are shown incl. tax.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'Show the price label for packaging?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'When checked, the price label is derived from the product\'s unit and packaging values:
<strong>Price per Unit (10 pieces)<strong><br/>
When not checked, price labels look just as usual: <strong>Price: $xx.xx</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'more Core Settings';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Core Settings';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Frontend Features';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Tax Configuration';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Quantity Start';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Quantity End';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'User Registration Settings';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'User registration allowed?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'New account activation necessary?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Use silent (hidden) user registration?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'When enabled, users don\'t need to fill in a username and password for a new account. Instead the email address is used for the new account and a random password is generated. The registration details are mailed to the customer.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Hello %s,

Thank you for registering at %s. Your customer account has been created.
You may login to %s using the following username and password:

Username - %s
Password - %s
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
        
}
class phpShopLanguage extends vmLanguage { }

/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>