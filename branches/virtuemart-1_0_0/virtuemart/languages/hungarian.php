<?php
defined( '_VALID_MOS' ) or die( 'A közvetlen hozzáférés ehhez a helyhez nem engedélyezett.' ); 
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
	var $_PHPSHOP_CATEGORY = 'Kategória';
	var $_PHPSHOP_CATEGORIES = 'Kategóriák';
	var $_PHPSHOP_SELECT_CATEGORY = 'Kiválaszt egy kategóriát:';
	var $_PHPSHOP_ADMIN = 'Adminisztráció';
	var $_PHPSHOP_PRODUCT = 'Termék';
	var $_PHPSHOP_LIST = 'Listázás';
	var $_PHPSHOP_ALL = 'Mind';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Az összes termék listázása';
	var $_PHPSHOP_VIEW = 'Nézet';
	var $_PHPSHOP_SHOW = 'Megjelenítés';
	var $_PHPSHOP_ADD = 'Hozzáadás';
	var $_PHPSHOP_UPDATE = 'Frissítés';
	var $_PHPSHOP_DELETE = 'Törlés';
	var $_PHPSHOP_SELECT = '- Válasszon';
	var $_PHPSHOP_SUBMIT = 'Küldés';
	var $_PHPSHOP_RANDOM = 'Véletlenszerû termék';
	var $_PHPSHOP_LATEST = 'Legújabb termékek';
	var $_PHPSHOP_HOME_TITLE = 'Fõlap';
	var $_PHPSHOP_CART_TITLE = 'Kosár';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Pénztár';
	var $_PHPSHOP_LOGIN_TITLE = 'Belépés';
	var $_PHPSHOP_LOGOUT_TITLE = 'Kilépés';
	var $_PHPSHOP_BROWSE_TITLE = 'Tallózás';
	var $_PHPSHOP_SEARCH_TITLE = 'Keresd';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Fiók karbantartása';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Navigálás';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Részleg';
	var $_PHPSHOP_INFO = 'Információ';
	var $_PHPSHOP_BROWSE_LBL = 'Tallózás';
	var $_PHPSHOP_PRODUCTS_LBL = 'termék';
	var $_PHPSHOP_PRODUCT_LBL = 'termék';
	var $_PHPSHOP_SEARCH_LBL = 'Keres';
	var $_PHPSHOP_FLYPAGE_LBL = 'Termékadatok';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Termékkeresõ';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Termék neve';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Termék kategória';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Leírás';
	var $_PHPSHOP_CART_SHOW = 'Ugrás a bevásárlókosárhoz';
	var $_PHPSHOP_CART_ADD_TO = 'Kosárba rakom!';
	var $_PHPSHOP_CART_NAME = 'Név';
	var $_PHPSHOP_CART_SKU = 'Cikksz.';
	var $_PHPSHOP_CART_PRICE = 'Ár';
	var $_PHPSHOP_CART_QUANTITY = 'Mennyiség';
	var $_PHPSHOP_CART_SUBTOTAL = 'Részösszeg';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Hozzáadás: új';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Szállítási cím';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'A keresése nem eredményezett találatot.<br />';
	var $_PHPSHOP_PRICE_LABEL = 'Ár: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Hozzáad a bevásárlókosárhoz';
	var $_PHPSHOP_NO_CUSTOMER = 'Ön még nem nyilvántartott ügyfél. Kérjük, adja meg számlázási adatait.';
	var $_PHPSHOP_DELETE_MSG = 'Biztosan törölni akarja ezt a bejegyzést?';
	var $_PHPSHOP_THANKYOU = 'Köszönjük a megrendelést!';
	var $_PHPSHOP_NOT_SHIPPED = 'Még nincs leszállítva';
	var $_PHPSHOP_EMAIL_SENDTO = 'A megerõsítõ e-mailt elküldtük erre címre';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Sajnos nincs olyan MOS - felhasználó, akit Ön hozzáadhatna a com_virtuemart felhasználó-listához';
	var $_PHPSHOP_ERROR = 'HIBA';
	var $_PHPSHOP_MOD_NOT_REG = 'A modul nincs regisztrálva.';
	var $_PHPSHOP_MOD_ISNO_REG = 'nem érvényes phpShop modul.';
	var $_PHPSHOP_MOD_NO_AUTH = 'Önnek nincs joga a kért modul használatához.';
	var $_PHPSHOP_PAGE_404_1 = 'Az oldal nem létezik';
	var $_PHPSHOP_PAGE_404_2 = 'Az adott fájlnév nem létezik. Nem található az alábbi fájl:';
	var $_PHPSHOP_PAGE_403 = 'Elégtelen hozzáférési jogok';
	var $_PHPSHOP_FUNC_NO_EXEC = 'Önnek nincs joga végrehajtani ';
	var $_PHPSHOP_FUNC_NOT_REG = 'A funkció nincs regisztrálva';
	var $_PHPSHOP_FUNC_ISNO_REG = ' nem érvényes MOS_com_phpShop funkció.';
	var $_PHPSHOP_ADMIN_MOD = 'Admin';
	var $_PHPSHOP_USER_LIST_MNU = 'Felhasználó listázás';
	var $_PHPSHOP_USER_LIST_LBL = 'Felhasználók';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Felhasználónév';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Teljes név';
	var $_PHPSHOP_USER_LIST_GROUP = 'Csoport';
	var $_PHPSHOP_USER_FORM_MNU = 'Felhasználó hozzáadása';
	var $_PHPSHOP_USER_FORM_LBL = 'Felhasználói adatok hozzáadása/frissítése';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Számlázási cím';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Szállítási címek';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Cím hozzáadása';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'Nincsenek szállítási címek.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Cím becenév';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Vezetéknév';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Utónév';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Családnév';
	var $_PHPSHOP_USER_FORM_TITLE = 'Megszólítás';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Felhasználónév';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Jelszó';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Jelszó megerõsítése';
	var $_PHPSHOP_USER_FORM_PERMS = 'Engedélyek';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Ügyfélszám / azonosító';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Cég';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Cím 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Cím 2';
	var $_PHPSHOP_USER_FORM_CITY = 'Város';
	var $_PHPSHOP_USER_FORM_STATE = 'Állam/Tartomány/Megye';
	var $_PHPSHOP_USER_FORM_ZIP = 'Irányítószám';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Ország';
	var $_PHPSHOP_USER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Mobiltelefon';
	var $_PHPSHOP_USER_FORM_FAX = 'Fax';
	var $_PHPSHOP_USER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Modulok listázása';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Modulok';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Modul neve';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Modul jogosultságok';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Funkciók';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Listázási sorrend';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Modul hozzáadása';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Modul tulajdonságai';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Modul cimke (a fõmenüben)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Modul neve';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Modul jogosultságok';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Modul fejléc';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Modul lábléc';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Látható a modul az Admin menüben?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Megjelenítési sorrend';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'A modul leírása';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'Nyelvkód';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Nyelvi fájl';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Funkciók listázása';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Funkciók';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Funkció neve';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Osztálynév';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Osztály metódus';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Jogosultságok';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Funkció hozzáadása';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Funkció tulajdonságai';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Funkció neve';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Osztálynév';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Osztály metódus';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Funkció jogosultságok';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Funkció leírása';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Pénznemek listázása';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Pénznemek';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'Pénznem hozzáadása';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Pénznem neve';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'Pénznem kódja';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Országok listázása';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Országok';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Ország hozzáadása';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Ország neve';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Országkód (3 betûs)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Országkód (2 betûs)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Államok listázása';
	var $_PHPSHOP_STATE_LIST_LBL = 'Államok/Tartományok/Megyék: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Állam/Megye hozzáadása/módosítása';
	var $_PHPSHOP_STATE_LIST_NAME = 'Állam/megye neve';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'Állam/megye kódja (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'Állam/megye kódja (2)';
	var $_PHPSHOP_ADDRESS = 'Cím';
	var $_PHPSHOP_CONTINUE = 'Folytatás';
	var $_PHPSHOP_EMPTY_CART = 'Jelenleg üres a bevásárlókosara.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Az InterShipper kiszolgáló pingelése';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'InterShipper kiszolgáló pingelés ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'Az InterShipper pingelése sikertelen';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'Az InterShipper pingelése sikerült';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Hordozó';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Válasz<br />idõ';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'mp.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Szállítási módok listázása';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Aktív szállítási módok';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Szállítási módok';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Aktív';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Kezelési költség';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Átfutási idõ';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'általánydíj';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'százalák';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'napok';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Túlsúlyos küldemény';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Szállítási módok beállítása';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Szállítási mód hozzáadása';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Szállítási mód beállítása';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Frissítés';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Szállítási mód';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Aktiválás';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Kezelési költség';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Átfutási idõ';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'általánydíj';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'százalék';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'napok';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Túlsúlyos küldemény';
	var $_PHPSHOP_ORDER_MOD = 'Rendelések';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Rendelés jóváhagyása';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Rendelés visszavonása';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Rendelés nyomtatása';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Rendelés törlése';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Rendelések listázása';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Rendelések';
	var $_PHPSHOP_ORDER_LIST_ID = 'Rendelési szám';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Rendelés dátuma';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Módosítva';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Állapot';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'Részösszeg';
	var $_PHPSHOP_ORDER_ITEM = 'Megrendelt termékek';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Megrendelés';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Rendelési szám';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Rendelés dátuma';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Rendelési állapot';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Vásárló adatai';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Számlázási cím';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Szállítási adatok';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Számlázási cím';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Szállítási cím';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Név';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Cég';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Cím 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Cím 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Város';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Állam/Megye';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'Irányítószám';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Ország';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Telefon';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Fax';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'E-mail';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Megrendelés tételek';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Mennyiség';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Mennyiség';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'Cikksz.';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Ár';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Összesen';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'Részösszeg';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'Áfa összesen';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Szállítási és kezelési költség';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Szállítási adó';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Fizetési mód';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Fiók neve';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Számlaszám';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Lejárati idõ';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Kifizetési napló';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Szállítási információ';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Fizetési információ';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Hordozó';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Szállítási mód';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Szállítás dátuma';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Szállítás ára';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Rendelési állapottípusok listázása';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Rendelési állapottípus hozzáadása';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Rendelési állapot kódja';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Rendelési állapot neve';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Rendelési állapot';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Rndelési állapot kódja';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Rndelési állapot neve';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Listázási sorrend';
	var $_PHPSHOP_PRODUCT_MOD = 'Termékek';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Jelenlegi termék';
	var $_PHPSHOP_CURRENT_ITEM = 'Jelenlegi tétel';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Raktárkészlet';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Raktárkészlet megtekintése';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Ár';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Menny.';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Súly';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Termékek listázása';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Termékek';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Termék neve';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'Cikksz.';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Közzétéve';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Termékkeresés';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'módosítva';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'módosított árral';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'ár nélkül';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'Utána';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Elõtte';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Termék hozzáadása';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Termék szerkesztése';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Termék röplap elõnézete az üzletben';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Tétel hozzáadása';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Új tétel hozzáadása';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Új termék';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Termék frissítése';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Termékinformáció';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Termék állapota';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Termék méretei és súlya';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Termékképek';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Új tétel';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Tétel frissítése';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Tétel információk';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Tétel státusa';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Tétel méretei és súlya';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Tétel képek';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Visszatérés a szülõtermékhez';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'Írja be az új kép útvonalát a jelenlegi kép frissítéséhez.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'A jelenlegi kép törlése.';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Termék tételek';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Tétel attribútumok';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Biztosan törölni akarja ezt a terméket,\\n és a hozzá kapcsolódó tételeket?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Biztosan törölni akarja ezt a tételt?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Eladó';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Gyártó';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'Cikksz.';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Név';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'Webcím';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Kategória';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Fogyasztói ár (bruttó)';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Fogyasztói ár (nettó)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Termékismertetõ';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Rövid ismertetõ';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'Raktáron';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'Megrendelve';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Mikortól kapható';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'Akciós termék';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Árengedmény típusa';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Közzétéve?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Hosszúság';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Szélesség';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Magasság';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Mértékegység';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Súly';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Mértékegység';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Miniatûr';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Nagy kép';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'font';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'hüvelyk';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Mértékegység';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'darab';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'A csomagolásban lévõ egységek';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Ide írhatja be a csomagolásban lévõ egységek számát. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'A dobozban lévõ egységek';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Ide írhatja be a dobozban lévõ egységek számát. (max. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Termék hozzáadás eredménye';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Termékfrissítés eredménye';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Tétel hozzáadás eredménye';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Tétel frissítés eredménye';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'CSV feltöltés használata';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Termékcsoportok';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Kategóriák listázása';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Kategóriafa';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Kategória hozzáadása';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Kategória tulajdonságai';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Kategória neve';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Szülõkategória';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Kategória leírása';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Közzétéve?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Kategória röplap';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Attribútumok listázása';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Attribútumok';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Attribútum neve';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Listázási sorrend';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Attribútum hozzáadása';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Attribútum ûrlap';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Új termékattribútum:';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Termékattribútum frissítése';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Új tételattribútum:';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Tételattribútum frissítése';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Attribútum neve';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Listázási sorrend';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Árlista';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Árlista';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Ára';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Csoport neve';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Ár';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Pénznem';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Ár hozzáadása';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Árinformáció';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'A termék új ára';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'A termék árának frissítése';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Új tételár';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Tétel árának frissítése';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Ár';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Pénznem';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Vásárlócsoport';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Jelentések';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Egyéni terméklisták';
	var $_PHPSHOP_RB_SALE_TITLE = 'Eladási jelentések';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Eladási adatok áttekintése';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Válassza ki az idõtartamot';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Havi';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Heti';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Napi';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'E havi';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'Múlt havi';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'Utolsó 60 nap';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'Utolsó 90 nap';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Mettõl';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Meddig';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'A megadott idõtartam mutatása';
	var $_PHPSHOP_RB_REPORT_FOR = 'Jelentés ';
	var $_PHPSHOP_RB_DATE = 'Dátum';
	var $_PHPSHOP_RB_ORDERS = 'Rendelések';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Össz. eladott tételek';
	var $_PHPSHOP_RB_REVENUE = 'Jövedelem';
	var $_PHPSHOP_RB_PRODLIST = 'Termék listázás';
	var $_PHPSHOP_SHOP_MOD = 'Üzlet';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Kép';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Ár';
	var $_PHPSHOP_ORDER_STATUS_P = 'Függõ';
	var $_PHPSHOP_ORDER_STATUS_C = 'Visszaigazolva';
	var $_PHPSHOP_ORDER_STATUS_X = 'Visszavonva';
	var $_PHPSHOP_ORDER_BUTTON = 'Rendelés';
	var $_PHPSHOP_SHOPPER_MOD = 'Vásárlók';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Vásárlók listázása';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Vásárlók listája';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Felhasználónév';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Teljes név';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Csoport';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Vásárló hozzáadása';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Vásárló adatai';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Számlázási cím';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Információ';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Szállítási cím';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Címet hozzáad';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Cím álnév';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Felhasználónév';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Vezetéknév';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Utónév';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Családnév';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Megszólítás';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Vásárlónév';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Jelszó';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Jelszó megerõsítése';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Vásárlócsoport';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Cég';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Cím 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Cím 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Város';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Állam/Tartomány/Megye';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'Irányítószám';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Ország';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Mobiltelefon';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Fax';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Igen';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'Nem';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Vásárlócsoportok listázása';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Vásárlócsoportok';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Csoportnév';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Csoport leírása';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Vásárlócsoport ûrlapja';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Vásárlócsoport hozzáadása';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Csoport neve';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Csoport leírása';
	var $_PHPSHOP_STORE_MOD = 'Üzlet';
	var $_PHPSHOP_STORE_FORM_MNU = 'Üzlet szerkesztése';
	var $_PHPSHOP_STORE_FORM_LBL = 'Üzlet adatai';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Kapcsolattartó';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Nagy kép';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Kép feltöltése';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Üzlet neve';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Üzlettulajdonos cégneve';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Cím 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Cím 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'Város';
	var $_PHPSHOP_STORE_FORM_STATE = 'Állam/Tartomány/Megye';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Ország';
	var $_PHPSHOP_STORE_FORM_ZIP = 'Irányítószám';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Pénznem';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Üzlet kategóriája';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Utónév';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Vezetéknév';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Családnév';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Megszólítás';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Telefon 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Telefon 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Fax';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Kép útvonala';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Leírás';
	var $_PHPSHOP_PAYMENT = 'Fizetés';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Fizetési módok';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Fizetési módok';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Név';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Kód';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Árengedmény';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Vásárlócsoport';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Fizetési mód típusa';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Fizetési mód hozzáadása';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Fizetési mód ûrlap';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Fizetési mód neve';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Vásárlócsoport';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Árengedmény';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Kód';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Listázási sorrend';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Fizetési mód típusa';
	var $_PHPSHOP_TAX_MOD = 'Adózás';
	var $_PHPSHOP_TAX_RATE = 'Adókulcsok';
	var $_PHPSHOP_TAX_LIST_MNU = 'Adókulcsok listázása';
	var $_PHPSHOP_TAX_LIST_LBL = 'Adókulcsok listája';
	var $_PHPSHOP_TAX_LIST_STATE = 'Adózási állam vagy terület';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Adózási ország';
	var $_PHPSHOP_TAX_LIST_RATE = 'Adókulcs';
	var $_PHPSHOP_TAX_FORM_MNU = 'Adókulcs hozzáadása';
	var $_PHPSHOP_TAX_FORM_LBL = 'Adózási adatok hozzáadása';
	var $_PHPSHOP_TAX_FORM_STATE = 'Adózási állam vagy terület';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Adózási ország';
	var $_PHPSHOP_TAX_FORM_RATE = 'Adókulcs (16% esetén => 0.16-ot írjon be)';
	var $_PHPSHOP_VENDOR_MOD = 'Eladók';
	var $_PHPSHOP_VENDOR_ADMIN = 'Eladók';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Eladók listázása';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Eladók';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Eladó neve';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Admin';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Eladó hozzáadása';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Információ hozzáadása';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Eladó tulajdonságai';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Elérhetõségi információ';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Nagy kép';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Kép feltöltése';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Eladó üzlet neve';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Eladó cég neve';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Cím 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Cím 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Város';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Állam/Tartomány/Megye';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Ország';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'Irányítószám';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Pénznem';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Eladó-kategória';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Utónév';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Vezetéknév';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Családnév';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Megszólítás';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Telefon 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Telefon 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Fax';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Kép útvonala';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Leírás';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Eladó-kategóriák listázása';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Eladó-kategóriák';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Kategória neve';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Kategória leírása';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Eladók';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Eladó-kategória hozzáadása';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Eladó-kategória ûrlap';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Kategória tulajdonságai';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Kategória neve';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Kategória leírása';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Gyártók';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Gyártók';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Gyártók listázása';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Gyártók';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Gyártó neve';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Admin';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'Gyártó hozzáadása';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Információ hozzáadása';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Információk a gyártóról';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Gyártó neve';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Gyártó-kategória';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'Gyártó honlapjának címe';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Leírás';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Gyártó-kategóriák listázása';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Gyártó-kategóriák';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Kategória neve';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Kategória leírás';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Gyártók';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Gyártó-kategória hozzáadása';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Gyártó-kategória ûrlap';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Kategória információ';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Kategória neve';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Kategória leírás';
	var $_PHPSHOP_HELP_MOD = 'Súgó';
	var $_PHPSHOP_CART_ACTION = 'Frissítés';
	var $_PHPSHOP_CART_UPDATE = 'Frissíti a kosár tartalmát';
	var $_PHPSHOP_CART_DELETE = 'Kiveszi a terméket a kosárból';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Ár';
	var $_PHPSHOP_PRODUCT_CALL = 'Hívjon az árért';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Elõzõ';
	var $_PHPSHOP_PRODUCT_NEXT = 'TOVÁBB';
	var $_PHPSHOP_CART_TAX = 'Adó';
	var $_PHPSHOP_CART_SHIPPING = 'Szállítási és kezelési költség';
	var $_PHPSHOP_CART_TOTAL = 'Összesen';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Tovább';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'REGISZTRÁL';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Számlázási információ';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Cég';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Név';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Cím';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'E-mail';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Szállítási információ';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Cég';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Név';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Cím';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Fizetési információ';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Név a hitelkártyán';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Fizetési mód';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Hitelkártya szám';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Lejárati dátum';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Rendelés feladása';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'kért információ amikor hitelkártyás kifizetés van kiválasztva';
	var $_PHPSHOP_ZONE_MOD = 'Zonális szállítás';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Zónák listázása';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Zóna hozzáadása';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Hozzárendelés zónákhoz';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Ország';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Jelenlegi zóna';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Rendelje hozzá egy zónához';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Frissít';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Hozzárendelés zónákhoz';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Zóna név';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Zóna leírás';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Zóna költség tételenként';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Zóna költséghatár';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Zóna lista';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Zóna név';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Zóna leírás';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Zóna költség tételenként';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Zóna költséghatár';
	var $_PHPSHOP_LOGIN_FIRST = 'Kérjük, jelentkezzen be vagy regisztrálja magát (használja a bejelentkezési modult!).<br>Köszönjük.';
	var $_PHPSHOP_STORE_FORM_TOS = 'Használati feltételek';
	var $_PHPSHOP_AGREE_TO_TOS = 'Kérjük, fogadja el a használati feltételeinket!';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Elfogadom a használati feltételeket.';
	var $_PHPSHOP_LEAVE_BLANK = '(hagyja üresen, ha nincs <br />hozzá egyéni php-fájl!)';
	var $_PHPSHOP_RETURN_LOGIN = 'Visszatérõ vásárlók: Kérjük, jelentkezzen be';
	var $_PHPSHOP_NEW_CUSTOMER = 'Új? Kérjük, adja meg a számlázási adatait';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Vásárlói fiók:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Rendelési adatok';
	var $_PHPSHOP_ACC_UPD_BILL = 'Itt módosíthatja a számlázási címét.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Itt adhatja hozzá/tarthatja karban a szállítási címeket.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Fiók adatai';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Szállítási cím';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Nincs megjeleníthetõ megrendelés';
	var $_PHPSHOP_ACC_BILL_DEF = '- Alapértelmezett (azonos a számlázási címmel)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Itt adhatja hozzá a rendeltetési helyeket az Ön fiókjához. Kérjük, találjon ki az alább megadandó rendeltetési hely számára alkalmas becenevet vagy kódot.';
	var $_PHPSHOP_CONFIG = 'Beállítások';
	var $_PHPSHOP_USERS = 'Felhasználók';
	var $_PHPSHOP_IS_CC_PAYMENT = 'Hitelkártyás fizetés?';
	var $_PHPSHOP_SHIPPING_MOD = 'Szállítás';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Szállítás';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Szállítók listázása';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Szállítók';
	var $_PHPSHOP_RATE_LIST_MNU = 'Szállítási díjak';
	var $_PHPSHOP_RATE_LIST_LBL = 'Szállítási díjak';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Név';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Listázási sorrend';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Szállító létrehozása';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Szállító módosítása/létrehozása';
	var $_PHPSHOP_RATE_FORM_MNU = 'Szállítási díj létrehozása';
	var $_PHPSHOP_RATE_FORM_LBL = 'Szállítási díj létrehozása/módosítása';
	var $_PHPSHOP_RATE_FORM_NAME = 'Szállítási díj leírása';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Szállító';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Ország';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'Irányítószám sorozat kezdete';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Irányítószám sorozat vége';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Legkisebb súly';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Legnagyobb súly';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Illeték';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'A csomagja illetéke';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Pénznem';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'TVA azonosító';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Listázási sorrend';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Szállító';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Szállítási díj leírása';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Súly  ...-tól';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... ig';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Szállítócég';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Listázási sorrend';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'HIBA: Szállító ID már létezik.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'HIBA: Válasszon egy szállítót.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'HIBA: Legalább egy szállítási díjtétel létezik, elõbb törölje le ezeket, és csak utána a szállítót';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'HIBA: Nem találom a szállítót ezzel az ID -vel.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'HIBA: Válasszon egy szállítót.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'HIBA: Nem találom a szállítót ezzel az ID -vel.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'HIBA: A díjtétel leírását meg kell adni.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'HIBA: A célország érvénytelen. Több ország megadható az alábbi elválasztó használatával  ";".';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'HIBA: Meg kell adni a legkisebb súlyt';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'HIBA: Meg kell adni a legnagyobb súlyt';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'HIBA: A legkisebb súly kisebb kell legyen, mint a legnagyobb súly';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'HIBA: Meg kell adni a szállítási költséget';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'HIBA: Válasszon egy pénznemet';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'HIBA: Meg kell adni a szállítási díjtételt';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Kérjük, válasszon';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Szállító';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Szállítási költség';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Ár';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-nincs-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Hitelkártya';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Használja a Payment Processort';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Banki terhelés';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Csak cím, átvételkor fizetendõ (postai utánvét)';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Kérjük, válasszon egy szállítási címet!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Kérjük, válassza ki a szállítási módot!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Kérjük, válassza ki a fizetési módot!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Kérjük, tekintse át a megadott adatokat, és hagyja jóvá a rendelést!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Kérjük, válassza ki a szállítási módot.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Kérjük, válasszon másik szállítási módot.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Kérjük, válassza ki a fizetési módot.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Kérjük, adja meg a hitelkártyaszámát.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Kérjük, adja meg a hitelkártyán szereplõ nevet.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'A megadott hitelkártya szám nem érvényes.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Kérjük, adja meg a hitelkártya lejárati hónapját.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Kérjük, adja meg a  hitelkártya lejárati évét.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'A lejárati dátum nem érvényes.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Kérjük, válasszon szállítási címet.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Érvénytelen számlaszám.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'A bevásárlókosara üres!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'HIBA: Kérjük, válasszon egy szállítót!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'HIBA: A kiválasztott szállítási díjtételt nem találom!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'HIBA: Nem található az Ön szállítási címe!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'HIBA: Itt nem található semmilyen hitelkártya adat...';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'HIBA: Nem található a hitelkártyaszám!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Sajnos az Ön által megadott hitelkártyaszám egy tesztelési szám!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'Nem található a user_id az adatbázisban!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Még nem adtad meg a számlavezetõ bankfiók nevét.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Nem adta meg az IBAN azonosítóját.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Nem adta meg a bankszámla számát.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Nem adta meg a bank sorszámát/azonosítóját.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Nem adta meg a bank nevét.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'A vásárláshoz meg kell tenni az összes kért lépést!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'A fizetési információit elmentettük késõbbi feldolgozás céljából.<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'A minimális vásárlási megbízás értékét még nem érte el.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'A minimális vásárlási megbízás értéke:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Hitelkártyás fizetés';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'Egyéb fizetési módok';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Kérjük, válassza ki a fizetési módot:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Minimális vásárlási megbízás értéke';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Bankszámla adatai';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Számlaszám';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'Bank sorszám/azonosító kód';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Bank neve';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Számlatulajdonos';
	var $_PHPSHOP_MODULES = 'Modulok';
	var $_PHPSHOP_FUNCTIONS = 'Funkciók';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Speciális termékek';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Kérjük, ha óhajtja, hagyjon üzenetet a rendelése mellett';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Vásárlói közlemény';
	var $_PHPSHOP_INCLUDING_TAX = '($tax % áfával)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Kérjük, válasszon egy tételt';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Tétel';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Letöltési részleg';
	var $_PHPSHOP_DOWNLOADS_START = 'Letöltés megkezdése';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Kérjük, adja meg az e-mailban kapott Download-ID-t és kattintson  a Letöltés megkezdése gombra.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Sajnos lejárt a letöltésre rendelkezésre álló idõ!';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Sajnos elérte a maximális letöltés-számot!';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Érvénytelen  Download-ID!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Nem küldhetõ el az üzenet az alábbi címre: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Az üzenet elküldve az alábbi címre: ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Letöltési infók';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'a megrendelt fájl(ok) letölthetõk';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Kérjük, adja meg az alábbi  Download-ID-t a Letöltési részlegen:  ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'fájlonként a maximális letöltési szám: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Töltse le legfeljebb {expire} nap alatt az elsõ letöltéstõl számítva';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Kérdések? Problémák?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Letöltési infó által ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'letölthetõ termék?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Köszönjük a kifizetést. 
        A tranzakció sikeres volt. A PayPal e-mailben fogja értesíteni a tranzakció részleteirõl. 
        Most folytathatja, vagy bejelentkezhet a <a href=http://www.paypal.com>www.paypal.com</a> -ra, ahol megtekintheti a tranzakció részleteit.';
	var $_PHPSHOP_PAYPAL_ERROR = 'A tranzakció feldolgozása közben hiba történt. A megrendelése állapotát nem lehet frissíteni.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Köszönjük, hogy nálunk vásárolt. Az Ön rendelési adatai következnek.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Köszönjük a támogatását.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Kérdések? Problémák?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'A következõ rendelést küldte be:';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Tekintse meg a rendelését a következõ hivatkozásra kattintva:';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Negatív mennyiség nem megengedett.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Kérjük, válasszon ki egy lehetséges mennyiséget ebbõl a  tételbõl.';
	var $_PHPSHOP_CART_STOCK_1 = 'A kiválasztott mennyiség túllépi a készletet. ';
	var $_PHPSHOP_CART_STOCK_2 = 'Pillanatnyilag $product_in_stock tétel kapható. ';
	var $_PHPSHOP_CART_STOCK_3 = 'Kattintson ide az elõjegyzésbe vételhez.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Kérjük, hogy válasszon a speciális tételekbõl a részletes leíró oldalon!';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'nincs';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Úr';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Asszony';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Dr.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof.';
	var $_PHPSHOP_DEFAULT = 'Alapértelmezett';
	var $_PHPSHOP_AFFILIATE_MOD = 'Partnerek adminisztrációja';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'A partnerek listázása';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Partnerek listája';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'A partner neve';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Aktív';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Kamatláb';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Havi összeg';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Havi jutalék';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Rendelések listázása';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'E-mail küldése a partnereknek';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'E-mail küldése a partnereknek';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'Kinek küld e-mailt (* = MIND)?';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'E-mail címe';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Tárgy';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Tartalmazza a jelenlegi statisztikát is';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Jutalék (százalék)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Aktív?';
	var $_PHPSHOP_DELIVERY_TIME = 'Szállítási határidõ';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Kézbesítési információk';
	var $_PHPSHOP_MORE_CATEGORIES = 'több kategória';
	var $_PHPSHOP_AVAILABILITY = 'Hozzáférhetõség';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Jelenleg nem kapható ez a termék.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Ismét kapható lesz: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Összegzés';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Statisztika';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Vásárlók';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'aktív termékek';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'inaktív termékek';
	var $_PHPSHOP_STATISTIC_SUM = 'Összes';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Új rendelések';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Új vásárlók';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Kérjük, adja meg alább az e-mail címét, hogy értesíteni tudjuk, amint kapható lesz a keresett termék. 
                                         Az e-mail címét nem adjuk ki, nem adjuk el, nem használjuk fel más célra, mint kizárólag arra, hogy értesítsük önt,
                                         amint a keresett termék ismét kapható lesz.<br /><br />Köszönjük!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Köszönjük a türelmét! <br />Azonnal értesítjük, ha a termék ismét kapható lesz.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Értesíts!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Nyomtatási nézet';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Kérjük, válasszon VAGY az Authorize.net VAGY a CyberCash közül';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' Konfigurációs fájl állapota:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'írható';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'írásvédett';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Általános';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Útvonal és webcím';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Honlap';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Szállítás';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Pénztár';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Letöltések';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Fizetések';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Használat csak katalógusként';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Ha bejelöli, akkor minden bevásárlókosár funkció letiltásra kerül.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Árak megjelenítése';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Adóval együtt mutassa az árakat?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Állítsa be, hogy a vásárló az árakat adóval együtt vagy adó nélkül lássa.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Jelölje be az árak megjelenítéséhez. Katalógusként történõ használat esetén egyesek nem szeretik, hogy láthatók legyenek az árak az oldalakon.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Virtuális adó';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Ez adja meg, hogy a 0 súlyúként szereplõ tételekre számítson-e szállítási költséget vagy nem. Módosítsa a  ps_checkout.php->calc_order_taxable()-t, hogy személyre szabja ezt.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Adózási mód:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'A szállítási cím alapján';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Az eladó címe alapján';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Ez adja meg, hogy melyik adókulcs lesz figyelembe véve az adószámításnál:<br />
                                                <ul><li>az üzlettulajdonos székhelye szerint érvényes állami/területi adókulcs</li>
                                                <li>vagy a vásárló otthona szerint érvényes állami/területi adókulcs.</li>
												<li>vagy "EU mód", ahol a termékenkénti adókulcs kerül felhasználásra, ha Európai Unió-beli a vásárló, egyéb esetben az adókulcs alapja a vásárló címe.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Megengedi több adókulcs használatát?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Jelölje be, ha önnek olyan termékei is vannak, amelyekhez különbözõ adókulcsok tartoznak (pl. 9% a könyvek, 19% az egyéb termékek számára)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'A kifizetési kedvezményeket vegye-e figyelembe az adók és a szállítási illetékek kiszámítása elõtt?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'A Vásárlói vélemények/Értékelési rendszer engedélyezése';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Ha engedélyezett, akkor a vásárlók <strong>értékelhetik a termékeket</strong>, és <strong>megírhatják a véleményüket</strong> róluk. <br />
                                                                                Így a vásárlók leírhatják a tapasztalataikat a termékekkel kapcsolatban más vásárlók számára.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Beállítja a jelzõt, hogy le kell-e vonni az árengedményt a kiválasztott fizetéshez az adózás és a szállítás ELÕTT (bejelölt) vagy UTÁN.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Megadhatják a vásárlók a bankszámla adataikat?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Jelölje be, ha a vásárlók megadhatják a bankszámla adataikat a regisztrálási folyamat alatt.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Kiválaszthatnak a vásárlók egy államot/területet/megyét?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Jelölje be, ha a vásárlók megadhatják az üzletbe történõ regisztráláskor az állam/terület/megye azonosító adataikat.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'El kell fogadni a Használati feltételeket?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Jelölje be, ha azt akarja, hogy a vásárlóknak kötelezõ módon el kell fogadniuk a használatii feltételeket a regisztrálás elõtt.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Ellenõrzi a raktárat?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Megadja, hogy kell-e ellenõrizni a raktáron lévõ termékek számát, amikor a vásárló beteszi a terméket a bevásárlókosárba. 
                                                                                       Ha be van állítva, akkor nem engedi meg a vásárlónak, hogy egy termékbõl több darabot tegyen a bevásárló-kosarába, mint ahány ténylegesen raktáron van.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Engedélyezi a partnerprogramot?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Ez engedélyezi a partnerek követését az üzlet felhasználói oldalán. Engedélyezze, ha az adminisztrátori panelben már adott hozzá partnercégeket.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Megrendelõ-levél formátuma:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Szöveges e-mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML e-mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Ez határozza meg a rendelést visszaigazoló e-mailek beállítását:<br />
                                                                                        <ul><li>egyszerû szöveges e-mailként</li>
                                                                                        <li>képekkel illusztrált HTML e-mailként.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Engedélyezi a nem kiszolgáló-oldali felhasználók számára a látogatói oldalról történõ adminisztrációt?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'Ezzel a beállítással engedélyezheti a honlapról történõ adminisztrációt azon felhasználók számára, 
                                                                                            akiknek nincs joguk az Adminisztrációs panel közvetlen elérésére, de phpShop adminisztrációs jogaik vannak (pl. Regisztrált/Szerkesztõ besorolásuk van).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'A honlap webcíme. Rendszerint azonos a Mambo URL-lel (a végén a lezáró /-el!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'BIZTONSÁGOS URL';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'A hely biztonságos webcíme. (https - a végén a lezáró /-el!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'COMPONENTURL';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'A VirtueMart komponens webcíme. (a végén a lezáró /-el!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'IMAGEURL';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'A VirtueMart összetevõk kép-könyvtára URL-je.  (a végén a lezáró /-el!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'ADMINPATH';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'A VirtueMart összetevõk könyvtár útvonala.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'CLASSPATH';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'A VirtueMart classes könyvtár útvonala.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'PAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'A VirtueMart html könyvtár útvonala.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'IMAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'A VirtueMart shop_image könyvtár útvonala.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'KEZDÕLAP';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Ez az alapértelmezettként betöltendõ oldal.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'HIBAOLDAL';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Ez a hibaüzenetek megjelenítésének azz alapértelmezett oldala.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'HIBAKERESÕOLDAL';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Ez a hibakeresési üzenetek megjelenítésének az alapértelmezett oldala.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'HIBAKERESÉS ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'HIBAKERESÉS?   Bekapcsolja a hibakeresési kimenetet. Ennek hatására jelenik meg mindegyik oldal alján a HIBAKERESÕ OLDAL. Nagyon hasznos a fejlesztés során, ugyanis megmutatja a bevásárlókosár tartalmát, az ûrlapmezõk értékeit, stb.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'RÖPLAP';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Ez a termékadatok megjelenítésének az alapértelmezett oldala.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Kategóriasablon';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Ez határozza meg egy bizonyos kategóriába tartozó termékek megjelenítésére használandó alapértelmezett kategória sablont.<br />
                                                                                                      A létezõ sablonfájlok testreszabásával új sablonokat készíthet <br />
                                                                                                      (melyek a <strong>KOMPONENSÚTVONAL/html/templates/</strong> könyvtárban találhatók, a nevük browse_ elõtaggal kezdõdik)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Az egy sorban lévõ termékek alapértelmezett száma';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Megadja a soronként megjelenítendõ termékek számát. <br />
                                                                                                      Például: Ha ön 4-et ír be, a Kategória stíluslap 4 terméket mutat soronként';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = '"no image" kép';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Ez a kép látható, ha nincs kép a termékrõl.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'KERESÉSI SOROK';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Meghatározza az oldalankénti sorok számát a keresés találatainak listázásakor.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'KERESÉS 1. SZÍNE';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'A páratlan sorok színét állítja be a találatlistában.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'KERESÉS 2. SZÍNE';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'A páros sorok színét állítja be a találatlistában.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'SOROK SZÁMA';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Beállítja a megrendelés kiválasztás listában megjelenítendõ sorok számát.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'A lábjegyzet megjelenítése ';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Megjeleníti a "powered by VirtueMart" képet a lábjegyzetben.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Válassza ki az üzlet szállítási módját';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Standard Szállítási modul  egyénileg konfigurált szállítmányozókkal és díjtételekkel. <strong>AJÁNLOTT!</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '  	Zonális szállítás Ország-modul 1.0 Verzió<br />
                                                                                                            Ha ezzel a modullal kapcsolatban több információra van szüksége, kérjük, látogasson el a <a href="http://ZephWare.com">http://ZephWare.com</a> címre<br />
                                                                                                            a részletekért lépjen kapcsolatba a <a href="mailto:zephware@devcompany.com">ZephWare.com</a>-mal<br /> Jelölje be, hogy lehetõvé tegye a zonális szállítás modul használatát';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<a href="http://www.ups.com" target="_blank">UPS Online? Tools</a> szállítási kalkulátor';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'UPS hozzáférési kód';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Az ön UPS hozzáférési kódja';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'UPS felhasználói azonosító';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'Az UPS-tõl kapott felhasználói azonosító';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'UPS jelszó';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'Az UPS-fiók jelszava';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'InterShipper modul. Csak akkor jelölje be, ha van InterShipper.com fiókja';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Letiltja a Szállítási mód kiválasztását. Akkor válassza, ha a vásárlói letölthetõ termékeket vásárolnak, amelyeket nem kell postázni.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'InterShipper jelszó';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Az Ön InterShipper fiókjának jelszava.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'InterShipper e-mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'Az Ön InterShipper fiókjának e-mail címe.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'TITKOSÍTÁSI KULCS';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Az adatbázisban tároltt adatok titkosítására használt kulcs. Azt jelenti, hogy ezt a fájlt mindenkor védeni kell a megtekintéstõl.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'A Pénztár sáv engedélyezése';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Akkor jelölje be, ha meg akarja jeleníteni a \'pénztár sávot\' a vásárlónak a fizetési folyamat során (1 - 2 - 3 - 4 grafikákkal).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Válassza ki az üzlet pénztári folyamatát';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Szokásos:</strong><br/>
               1. Szállítási cím kérése<br />
              2. Szállítási mód kérése<br />
              3. Fizetési mód kérése<br />
              4. Rendelés feladása';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>2. folyamat:</strong><br/>
               1. Szállítási cím kérése<br />
              2. Fizetési mód kérése<br />
              3. Rendelés feladása';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>3. folyamat:</strong><br/>
               1. Szállítási mód kérése<br />
              2. Fizetési mód kérése<br />
              3. Rendelés feladása';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>4. folyamat:</strong><br/>
               1. Fizetési mód kérése<br />
              2. Rendelés feladása';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'A letöltések engedélyezése';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Jelölje be, ha engedélyezni akarja a letöltéseket. Csak akkor, ha letölthetõ cikkeket akar eladni.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'A letöltést engedélyezõ rendelési állapot';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Válassza ki azt a rendelési állapotot, amely esetében a vásárló e-mailben értesítést kap a letöltésrõl.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'A letöltéseket tiltó rendelési állapot';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Beállítja azt a rendelési állapotot, amelynél a letöltés letiltott a vevõ számára.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'LETÖLTÉSI GYÖKÉR';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'A letölthetõ fájlok tényleges elérési útvonala. (a végén a lezáró /-el!)<br>
        <span class="message">A saját üzlete biztonsága érdekében: Ha lehet, akkor kérjük, hogy használjon A WEBGYÖKÉRTÕL KÍVÜL lévõ könyvtárat</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Letöltések száma';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Beállítja az egy letöltési azonosítóval engedélyezett letöltések számát (egy rendelés számára)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Letöltési határidõ';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Beállítja a letöltési idõintervallumot <strong>másodpercekben</strong> amelyben  a letöltés engedélyezve van a vevõ számára. 
  Az idõintervallum az elsõ letöltéssel kezdõdik! Amikor a megengedett idõ lejár, a letöltési ID le lesz tiltva.<br />Megjegyzés : 86400s=24h.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Lehetõvé teszi az IPN kifizetéseket a PayPal-on keresztül?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Jelölje be, ha a PayMate kifizetési rendszer használatát akarja engedélyezni.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'PayPal kifizetési e-mail:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'A vállalati e-mail cím  PayPal kifizetés számára. Ugyancsak használva mint receiver_email.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'A sikeres tranzakciók rendelési állapota';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Válassza ki azt a rendelés állapotot, amely a tényleges rendeléshez lesz rendelve, ha a PayPal IPN sikeres volt. Ha letöltéssel elérhetõ termékeket árul: 
  válassza ki azt az állapotot, amely lehetõvé teszi a letöltést (ami után a vevõ azonnal értesítést kap e-mailben a letöltés engedélyezésérõl).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'A sikertelen tranzakciók rendelési állapota';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Válassza ki a sikertelen PayPal-tranzakciók rendelési állapotát.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Lehetõvé teszi a PayMate kifizetéseket?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Jelölje be, ha az Ausztráliai PayMate kifizetési rendszer használatát akarja engedélyezni.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'PayMate felhasználónév:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Az ön PayMate felhasználói azonosítója.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Lehetõvé teszi az Authorize.net használatát?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Jelölje be, ha az Authorize.net szolgáltatásait akarja használni a VirtueMartban.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Teszt mód?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Válassza a \'Yes\'-t tesztelési célokra, \'No\'-t a rendszer élesben való használatához.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Igen';
	var $_PHPSHOP_ADMIN_CFG_NO = 'Nem';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Authorize.net bejelentkezési ID';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'Ez az ön Authorize.net bejelentkezési ID-je';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Authorize.net tranzakció kulcs';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'Ez az ön Authorize.net tranzakciós kulcsa';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Hitelesítés típusa';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'Ez egy Authorize.Net hitelesítés típus.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Engedélyezi a CyberCash-t?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Jelölje be, ha a CyberCash szolgáltatásait akarja használni a VirtueMartban.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash MERCHANT';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'A CC_MERCHANT a CyberCash kereskedõi azonosító';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash kereskedõi kulcs';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash kereskedõi kulcs a CyberCash által megadott MERCHANT kód';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash PAYMENT URL';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'A CyberCash PAYMENT URL az az URL, amit a Cybercash adott meg a biztonságos kifizetés céljára.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash AUTH TYPE';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'CyberCash AUTH TYPE a Cybercase számára megadandó Cybercash hitelesítés típus';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Speciális keresés';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Keresés minden kategóriában';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Keresés minden termékinformációban';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Csak a terméknév';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Csak a gyártó/eladó';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Csak a termékleírás';
	var $_PHPSHOP_SEARCH_AND = 'és';
	var $_PHPSHOP_SEARCH_NOT = 'nem';
	var $_PHPSHOP_SEARCH_TEXT1 = 'Az elsõ legördülõ listában választhatja ki azt a kategóriát, amelyikre korlátozni kívánja a keresést. 
        A második legördülõ listában egy bizonyos termékinformációra (pl. név) korlátozhatja a keresést. 
        Miután kiválasztotta ezeket (vagy meghagyta az alapértelmezett MINDEN értéket), írja be a keresendõ kulcsszót. ';
	var $_PHPSHOP_SEARCH_TEXT2 = ' További kulcsszó megadásával, valamint az ÉS vagy a NEM mûveleti jel választásával tovább finomíthatja a keresést. 
        Az ÉS választása azt jelenti, hogy mindkét szónak benne kell lennie a megjelenítendõ termék számára. 
        A NEM választása azt jelenti, hogy a termék csak akkor lesz látható, ha az elsõ kulcsszó megtalálható, 
        a második viszont nem.';
	var $_PHPSHOP_ORDERBY = 'Rendezési mód';
	var $_PHPSHOP_CUSTOMER_RATING = 'Átlagos vásárlói értékelés';
	var $_PHPSHOP_TOTAL_VOTES = 'Összes szavazat';
	var $_PHPSHOP_CAST_VOTE = 'Kérjük, szavazzon';
	var $_PHPSHOP_RATE_BUTTON = 'Érték';
	var $_PHPSHOP_RATE_NOM = 'Értékelés';
	var $_PHPSHOP_REVIEWS = 'Vásárlói vélemények';
	var $_PHPSHOP_NO_REVIEWS = 'Még senki sem nyilvánított véleményt errõl a termékrõl.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Legyen Ön az elsõ, és írja meg a véleményét...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Kérjük, jelentkezzen be és írja meg a véleményét.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Kérjük, értékelje a terméket, hogy kiegészítse a véleményét!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Kérjük, írjon még valamit a véleményéhez. Legalább 100 karakter a megengedett alsó határ!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Kérjük, rövidítse le a véleményét. Legfeljebb 2000 karakter engedélyezett.';
	var $_PHPSHOP_WRITE_REVIEW = 'Írja meg a véleményét errõl a termékrõl!';
	var $_PHPSHOP_REVIEW_RATE = 'Elõször értékelje a terméket. Kérjük, válassza ki 5 (kiváló) és 0 (pocsék) között az értékelést.';
	var $_PHPSHOP_REVIEW_COMMENT = 'Most kérjük, írja meg (röviden) a véleményét... (legalább 100, legfeljebb 2000 karakter)';
	var $_PHPSHOP_REVIEW_COUNT = 'Karakterek száma: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Vélemény beküldése';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Ön már megírta a véleményét errõl a termékrõl. Köszönjük.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Köszönjük a véleményét.';
	var $_PHPSHOP_COMMENT = 'Megjegyzés';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Hitelkártyatípusok hozzáadása/módosítása';
	var $_PHPSHOP_CREDITCARD_NAME = 'Hitelkártya neve';
	var $_PHPSHOP_CREDITCARD_CODE = 'Hitelkártya - rövid kód';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Hitelkártyatípus';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Hitelkártyák';
	var $_PHPSHOP_UDATE_ADDRESS = 'Cím frissítése';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Tovább vásárolok';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'A rendelés feladása sikerült!';
	var $_PHPSHOP_ORDER_LINK = 'Ennek a hivatkozásnak a követésével megtekintheti a rendelési adatokat.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'Megváltozott az Ön {order_id} sz. rendelésének az állapota.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'Az új állapot ez:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'A rendelési adatok megtekintéséhez kérjük, hogy kövesse ezt a hivatkozást (vagy másolja át a böngészõjébe):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Rendelési állapot módosítása: Az Ön rendelése {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Értesíti a vásárlót?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Kérjük, hogy elõbb módosítsa a rendelés állapotát!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Az alapértelmezett vásárlócsoport árengedménye (%-ban)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Pozitív X összeg jelentése: Ha ENNÉL a vásárlócsoportnál nincs ára a terméknek, akkor X %-kal csökkenti az alapértelmezett árat. Negatív összegnek fordított a hatása.';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Árengedmény';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Árengedmények listája';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Árengedmény hozzáadása/módosítása';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Engedmény mértéke';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Írja be az engedmény mértékét';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Engedmény típusa';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Százalék';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Összeg';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Százalék vagy összeg legyen a mérték?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Árengedmény kezdete';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Meghatározza, hogy melyik napon kezdõdik az árengedmény';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Árengedmény vége';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Meghatározza, hogy melyik napon fejezõdik be az árengedmény';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'A Termék árengedmény ûrlapon adhatja hozzá az engedményeket!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Megtakarítás';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Tekintse meg a nagy képet';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Pénznem megjelenítési séma';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Pénznem rövidítése';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'HTML-entitásokat (pl. ?,?,?,...) is használhat itt';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Tizedesjegyek';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'A kijelzett tizedesjegyek száma (lehet 0)<br><b>Kerekíítésre kerül, ha az érték különféle tizedes számjegyekbõl áll</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Tizedesjel';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'A tizedesjelként használt karakter';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Ezres elválasztójel';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Az ezresek tagolására használt karakter (üres lehet)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Pozitív formátum';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'A pozitív értékek kijelzéséhez használt megjelenítés-formátum.<br>(Szimbólum alatt a pénznem-szimbólum értendõ)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Negatív formátum';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'A negatív értékek kijelzéséhez használt megjelenítés-formátum.<br>(Szimbólum alatt a pénznem-szimbólum értendõ)';
	var $_PHPSHOP_OTHER_LISTS = 'Egyéb terméklisták';
	var $_PHPSHOP_MORE_IMAGES = 'További képek megtekintése';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Létezõ képek a következõhöz:';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Vissza a termékadatokhoz';
	var $_PHPSHOP_FILEMANAGER = 'Fájlkezelõ';
	var $_PHPSHOP_FILEMANAGER_LIST = 'Fájlkezelõ::Terméklista';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Kép/fájl hozzáadása';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Hozzárendelt képek';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'Letölthetõ?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Hozzárendelt fájlok (adatlapok, ...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Közzétéve?';
	var $_PHPSHOP_FILES_LIST = 'Fájlkezelõ::Kép/Fájllista a következõhöz:';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Fájlnév';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'Fájlcím';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Fájltípus';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Fájlbejegyzés szerkesztése';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Nagy kép';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Miniatûr kép';
	var $_PHPSHOP_FILES_FORM = 'Fájl feltöltése a következõhöz:';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Jelenlegi fájl';
	var $_PHPSHOP_FILES_FORM_FILE = 'Fájl';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Kép';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Feltöltés ide';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'alapértelmezett termékkép útvonal';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Adja meg a fájl helyét';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Letöltési útvonal (pl. a letölthetõ termékek értékesítéséhez!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'A miniatûr létrehozása automatikusan?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Közzétett a fájl?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Fájlcím (amit a vásárló lát)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Fájl leírása';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'Fájl webcíme (elhagyható)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Kérjük, hogy érvényes útvonalat adjon meg!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'A miniatûr elkészítése sikerült!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'NEM készíthetõ el a miniatûr kép!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Fájl-/Képfeltöltési hiba';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Nem törölhetõ a nagy kép fájlja.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'A nagy kép törlése sikerült.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Nem törölhetõ a miniatûr képfájlja (talán nem is létezik): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'A miniatûr kép törlése sikerült.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Nem törölhetõ a fájl.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'A fájl törlése sikerült.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Sajnos nem található a kért fájl!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Nem található a kép!';
	var $_PHPSHOP_COUPON_MOD = 'Kupon';
	var $_PHPSHOP_COUPONS = 'Kuponok';
	var $_PHPSHOP_COUPON_LIST = 'Kuponok listázása';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Mar beváltották a kupont.';
	var $_PHPSHOP_COUPON_REDEEMED = 'A kupon beváltása sikerült! Köszönjük.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Ha van kuponkódja, akkor kérjük, hogy írja be az alábbi mezõbe:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Küldés';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Már van ilyen kuponkód. Kérjük, hogy próbálja újra.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Kupon frissítése';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Kattintson egy kuponkódra a módosításához, ill. a kuponkód törléséhez jelölje ki, majd kattintson a Törlés gombra:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Kód';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Százalék vagy összeg';
	var $_PHPSHOP_COUPON_TYPE = 'Kupon típusa';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Az ajándékkupon a rendelés során történõ felhasználás után törlésre kerül. A tartós kupont annyiszor használhatja a vásárló, ahányszor csak akarja.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Ajándékkupon';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Tartós kupon';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Érték';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Kód törlése';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Biztosan törölni akarja ezt a kuponkódot?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Kérjük, hogy töltsön ki minden mezõt.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'A kupon értéke szám kell, hogy legyen.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Új kupon';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Kuponkód';
	var $_PHPSHOP_COUPON_PERCENT = 'Százalék';
	var $_PHPSHOP_COUPON_TOTAL = 'Összeg';
	var $_PHPSHOP_COUPON_VALUE = 'Érték';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'A kuponkód mentése kész.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Kupon mentése';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Árengedmény a kuponra';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Nem található a kuponkód. Kérjük, hogy próbálja újra.';
	var $_PHPSHOP_COUPONS_ENABLE = 'A kupon használatának engedélyezése';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Ha engedélyezi a kuponok használatát, akkor a vásárlók olyan kuponszámokat írhatnak be, amivel engedményt kapnak a vásárlásukból.';
	var $_PHPSHOP_FREE_SHIPPING = 'Ingyenes szállítás';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Ingyenes a szállítása ennek a terméknek!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Az ingyenes szállítás legkisebb összege';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Az az összeg (ÁFÁVAL!), amivel ingyenes a szállítás 
                                                (például: az <strong>50</strong> akkor jelent ingyenes szállítást, ha a vásárló
                                                50 dollárt (áfával) vagy többet fizet.';
	var $_PHPSHOP_YOUR_STORE = 'Üzletem';
	var $_PHPSHOP_CONTROL_PANEL = 'Irányító központ';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF-gomb';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Megjeleníti vagy elrejti a PDF-gombot az üzletben';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'El kell MINDEN RENDELÉSKOR fogadni a használati feltételeket?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Akkor jelölje be, ha azt akarja, hogy a vásárló MINDEN RENDELÉSKOR (a rendelés feladása elõtt) fogadja el a használati feltételeket.';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Bankszámla típusa';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Checking';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Business Checking';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Takarék';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Ismétlõdõ számlázások?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Döntse el, hogy szüksége van-e az ismétlõdõ számlázásokra.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Belsõ hiba történt a következõ kérés feldolgozásakor';
	var $_PHPSHOP_PAYMENT_ERROR = 'Hiba történt a fizetés feldolgozásakor';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'A fizetés feldolgozása sikerült';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'Az UPS nem tudta feldolgozni a szállítási költség kérését.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Garantált nap(ok) a szállításra';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'UPS felvételi (pickup) mód';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Hogyan adja le a csomagokat a UPS-nek?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'UPS-csomagolás?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Válassza ki a csomagolás alapértelmezett típusát.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Helybeli szállítás?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Helybeli (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Kereskedelmi szállítás (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Árajánlat a helybeli (RES) vagy a kereskedelmi (COM) szállításra.';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Kezelési költség';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Az Ön által felszámított kezelési költség ennél a szállítási módnál.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Adóosztály';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'A következõ adóosztály használata a szállítási költségre.';
	var $_PHPSHOP_ERROR_CODE = 'Hibakód';
	var $_PHPSHOP_ERROR_DESC = 'Hibaleírás';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'A tranzakciókulcs megjelenítése / megváltoztatása';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'A jelszó/tranzakciókulcs megjelenítése/megváltoztatása';
	var $_PHPSHOP_TYPE_PASSWORD = 'Kérjük, hogy írja be a felhasználói jelszavát';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Jelenlegi jelszó';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Jelenlegi tranzakciókulcs';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'A tranzakciókulcs megváltoztatása sikerült.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'A hitelkártyakód értékének kérése/rögzítése (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Ellenõrzi az érvényes CVV2/CVC2/CID értéket (három vagy négy számjegybõl álló szám a hitelkártya hátlapján, az American Express kártyák elõlapján)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Kérjük, hogy írja be a hitelkártya hátlapján (American Express kártyák elõlapján) lévõ három vagy négy számjegybõl álló számot';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'Be kell írnia a hitelkártya kódját a folytatáshoz.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'VAGY írja be egy fájl nevét';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'MEGJEGYZÉS: Itt írhatja be a fájl nevét. <strong>Ha megadja itt egy fájl nevét, akkor egy fájl sem kerül feltöltésre!!! Kézzel kell FTP-n feltöltenie!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'VAGY töltsön fel egy új fájlt';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Feltölthet egy helyi fájlt. Ez a fájl lesz az Ön által eladott termék. Le fogja cserélni a létezõ fájlt.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Írjon be valamilyen szöveget ide, amit a vásárló a termék röplapján olvashat el.<br />pl.: 24 ó, 48 óra, 3 - 5 nap, Rendelésre.....';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'VAGY válassza ki az adatlapon (röplapon) látható képet.<br />A képek a <i>/components/com_virtuemart/shop_image/availability</i> könyvtárban találhatók.<br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Attribútumlista';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Példák az attribútumlista formátumára:</h4>
        <pre>Méret,XL[+1.99],M,S[-2.99];Szín,Piros,Zöld,Sárga,KöltségSzíb[=24.00];ÉsÍgyTovább,..,..</pre>
        <h4>Beépített árigazítások a speciális attribútummódosítások használatához:</h4>
        <pre>
        + == Hozzáadja ezt az összeget a megállapított árhoz.<br />
        - == Kivonja ezt az összeget a megállapított árból.<br />
        = == Erre az összegre állítja a termék árát.
      </pre>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Egyéni attribútumok listája';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Példák az egyéni attribútumok listájának formátumára:</h4>
        <pre>Név;Extrák;</strong>...</pre>';
	var $_PHPSHOP_MULTISELECT = '<i>Többszörös kijelölés: a CTRL-gombbal és az egérrel';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'Engedélyezi az eProcessingNetwork.com fizetést?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Jelölje be az eProcessingNetwork.com használatához a VirtueMarttal.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Mód tesztelése ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Teszteléshez válassza az \'Igen\' lehetõséget. Az élõ tranzakciók engedélyezéséhez válassza a \'Nem\' lehetõséget.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'eProcessingNetwork.com felhasználónév';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'Ez az Ön eProcessingNetwork.com felhasználóneve';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'eProcessingNetwork.com tranzakciókulcs';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'Ez az Ön eProcessingNetwork.com tranzakciókulcsa';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Hitelesítési típus';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'Ez az eProcessingNetwork.com hitelesítési típusa.';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Kapcsolódó termékek';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Ezzel a listával árukapcsolásokat hozhat létre. Válasszon csak ki egy vagy több terméket itt, majd ezek lesznek a <strong>Kapcsolódó termékek</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Talán ez(ek) a termék(ek) is érdeklik Önt';
	var $_PHPSHOP_IMAGE_ACTION = 'Képmûvelet';
	var $_PHPSHOP_NONE = 'nincs';
	var $_PHPSHOP_ORDER_HISTORY = 'Rendelési elõzmények';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Megjegyzés';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'A rendeléssel kapcsolatos megjegyzés';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Beleveszi ezt a megjegyzést?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Hozzáadás dátuma';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Kapott értesítést a vevõ?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Rendelési állapot megváltoztatása';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = 'USPS szállítási felhasználónév';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = 'USPS szállítási felhasználónév';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = 'USPS szállítási jelszó';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = 'USPS szállítási jelszó';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER = 'USPS szállítási kiszolgáló';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP = 'USPS szállítási kiszolgáló';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH = 'USPS szállítási útvonal';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP = 'USPS szállítási útvonal';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE = 'USPS csomagmérete';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP = 'USPS csomagméret';
	var $_PHPSHOP_USPS_PADDING = 'A szállítandó csomag bélése súlyának százaléka. (% megadásával)';
	var $_PHPSHOP_USPS_PADDING_TOOLTIP = 'A szállítási súly bélése, mely a szállítási doboz és a csomagolás kiegészítõ súlyát engedélyez. Használata lehetõvé teszi a tényleges súly megadását az árucikkek súlybeállításainál.  Kötelezõ belevenni a % jelet.  Például: 15%';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_HANDLING_FEE = 'Kezelési költség';
	var $_PHPSHOP_USPS_HANDLING_FEE = 'Eme szállítási mód kezelési költsége.';
	var $_PHPSHOP_USPS_HANDLING_FEE_TOOLTIP = 'Eme szállítási mód kezelési költsége.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE = 'Az USPS-szállítások nemzetközi kezelési költsége.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP = 'Az USPS-szállítások nemzetközi kezelési költsége.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE = 'Az USPS-szállítások nemzetközi fontonkénti tarifája.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP = 'Az USPS-szállítások nemzetközi fontonkénti tarifája.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_MACHINABLE = 'Csomagküldemény esetén, és a csomag 6 uncia alatti és 35 font fölötti.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_MACHINABLE_TOOLTIP = 'Fel tudja gép dolgozni ezt a csomagot?  A Nem legyen az alapértelmezett.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP = 'USPS Domestic Mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP0 = 'USPS expressz levél a címzett terhére';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP0_TOOLTIP = 'Szabványos USPS expressz levél.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP1 = 'USPS expressz levél lapos díjszabásos borítékban (12.5\" x 9.5\")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP1_TOOLTIP = 'Akkor válassza ezt, ha engedélyezni kívánja az USPS expressz levélként töténõ szállítást lapos díjszabásos borítékban. A Nem legyen az alapértelmezett, ugyanis az olcsóbb lehet a tényleges szállításnál, és lehet, hogy nem fér bele a borítékba.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP2 = 'USPS elsõbbségi levél';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP2_TOOLTIP = 'Szabványos USPS elsõbbségi levél.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP3 = 'USPS elsõbbségi levél labos díjszabásos borítékban (12.5\" x 9.5\")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP3_TOOLTIP = 'Akkor válassza ezt, ha engedélyezni kívánja az USPS elsõbbségi levélként történõ szállítást lapos díjszabásos borítékban.  A Nem legyen az alapértelmezett, ugyanis az olcsóbb lehet a tényleges szállításnál, és lehet, hogy nem fér bele a borítékba.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP4 = 'USPS elsõbbségi levél lapos díjszabásos dobozban (11.25\" x 8.75\" x 6\")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP4_TOOLTIP = 'Akkor válassza ezt, ha engedélyezni kívánja az USPS elsõbbségi levélként történõ szállítást lapos díjszabásos dobozban.  A Nem legyen az alapértelmezett, ugyanis az olcsóbb lehet a tényleges szállításnál, és lehet, hogy nem fér bele a dobozba.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP5 = 'USPS elsõbbségi levél lapos díjszabásos dobozban (14\" x 12\" x 3.5\")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP5_TOOLTIP = 'Akkor válassza ezt, ha engedélyezni kívánja az USPS elsõbbségi levélként történõ szállítást lapos díjszabásos dobozban.  A Nem legyen az alapértelmezett, ugyanis az olcsóbb lehet a tényleges szállításnál, és lehet, hogy nem fér bele a dobozba.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP6 = 'USPS elsõ osztályú (14 uncia alatt)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP6_TOOLTIP = 'Akkor válassza ezt, ha engedélyezni kívánja az USPS elsõ osztályú levélként történõ szállítást.  Csak akkor lesz ez látható, ha a csomag súlya .88 font alatti.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP7 = 'USPS csomagküldemény';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP7_TOOLTIP = 'Szabványos USPS csomagküldemény.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP8 = 'USPS fûzött nyomtatvány';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP8_TOOLTIP = 'Akkor válassza ezt, ha engedélyezni kívánja az USPS fûzött nyomtatványként történõ szállítást.  A Nem legyen az alapértelmezett, a fûzött magazinok és újságok csoportos szállításának kivételével.  15 font a határ.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP9 = 'USPS médiaküldemény';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP9_TOOLTIP = 'Akkor válassza ezt, ha engedélyezni kívánja az USPS médiaküldeményként történõ szállítást.  A Nem legyen az alapértelmezett.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP10 = 'USPS könyvküldemény (nonprofit szervezetek)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP10_TOOLTIP = 'Akkor válassza ezt, ha engedélyezni kívánja az USPS könyvküldeményként történõ szállítást.  A Nem legyen az alapértelmezett.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL = 'USPS nemzetközi levél';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL0 = 'USPS globális expressz jótállásos dokumentum szolgáltatás';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL0_TOOLTIP = 'Akkor válassza ezt, ha engedélyezni kívánja az USPS globális expressz jótállásos dokumentum szolgáltatással történõ szállítást.  A Nem legyen az alapértelmezett.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL1 = 'USPS globális expressz jótállásos nem dokumentum szolgáltatás';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL1_TOOLTIP = 'Akkor válassza ezt, ha engedélyezni kívánja az USPS globális expressz jótállásos nem dokumentum szolgáltatással történõ szállítást.  A Nem legyen az alapértelmezett.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL2 = 'USPS globális expressz levél (EMS)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL2_TOOLTIP = 'Szabványos USPS globális expressz levél.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL3 = 'USPS globális elsõbbségi küldemény, nagy lapos boríték';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL3_TOOLTIP = 'Akkor válassza ezt, ha engedélyezni kívánja az USPS globális elsõbbségi küldeményként, nagy lapos borítékban történõ szállítást.  A Nem legyen az alapértelmezett, ugyanis az olcsóbb lehet a tényleges szállításnál, és lehet, hogy nem fér bele a borítékba.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL4 = 'USPS globális elsõbbségi küldemény, kis lapos boríték';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL4_TOOLTIP = 'Akkor válassza ezt, ha engedélyezni kívánja az USPS globális elsõbbségi küldeményként, nagy lapos borítékban történõ szállítást.  A Nem legyen az alapértelmezett, ugyanis az olcsóbb lehet a tényleges szállításnál, és lehet, hogy nem fér bele a borítékba.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL5 = 'USPS globális elsõbbségi küldemény - változó súly';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL5_TOOLTIP = 'Szabványos USPS globális elsõbbségi küldemény.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL6 = 'USPS légipostai levélküldemény';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL6_TOOLTIP = 'Akkor válassza ezt, ha engedélyezni kívánja az USPS légipostai levélküldeményként történõ szállítást.  A Nem legyen az alapértelmezett, ugyanis az olcsóbb lehet a tényleges szállításnál, és lehet, hogy nem fér bele a levélbe.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL7 = 'USPS légipostai csomagküldemény';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL7_TOOLTIP = 'Szabványos USPS légipostai csomagküldemény.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL8 = 'USPS gazdaságos levélküldemény';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL8_TOOLTIP = 'Akkor válassza ezt, ha engedélyezni kívánja az USPS gazdaságos levélküldeményként történõ szállítást.  A Nem legyen az alapértelmezett, ugyanis az olcsóbb lehet a tényleges szállításnál, és lehet, hogy nem fér bele a levélbe.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL9 = 'USPS gazdaságos csomagküldemény';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL9_TOOLTIP = 'Szabványos gazdaságos csomagküldemény.';
	var $_PHPSHOP_USPS_RESPONSE_ERROR = 'Az USPS nem tudta feldolgozni a szállítási dátum kérést.';
	var $_PHPSHOP_PARAMETERS_LBL = 'Paraméterek';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Terméktípus';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Terméktípusok';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Terméktípus hozzáadása/módosítása';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Terméktípusok listája a következõhöz:';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'A terméktípusok kilistázása';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Terméktípus hozzáadása a következõhöz';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Terméktípus hozzáadása';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Terméktípus';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Terméktípus neve';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Terméktípus leírása';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Paraméterek';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Terméktípus tulajdonságai';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Közzétéve?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Terméktípus böngészõ-lapja';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Terméktípus röplap';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'A terméktípus paraméterei';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Paraméter információja';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Nem található a terméktípus!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Paraméter neve';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Ez a név lesz a táblázat oszlopának a neve. Egyedinek kell lennie, szóköz nélkül.<BR>Például: alap_anyag';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Paraméter címkéje';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Paraméter leírása';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Paraméter típusa';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Egész szám';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Szöveg';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Rövid szöveg';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Lebegõ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Kar.';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Dátum és idõ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Dátum';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'YYYY-MM-DD';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Idõpont';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'HH:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Sortörés';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Több érték';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Lehetséges értékek';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'A lehetséges értékek megjelenítése többszörös kijelölésként?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Ha meg vannak adva a lehetséges értékek, akkor a paraméternek csaz ezek az értékei lehetnek. Példa a lehetséges értékekre:</strong><BR><span class="sectionname">Acél;Fa;Mûanyag;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Alapérték';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'A paraméter alapértelmezett értékéhez ezt a formátumot használja:<ul><li>Dátum: YYYY-MM-DD</li><li>Idõ: HH:MM:SS</li><li>Dátum és idõ: YYYY-MM-DD HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Egység';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Speciális keresés a paraméterek alapján';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Paraméterek keresése';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Meg akarja keresni a mûszaki paraméterekkel egyezõ termékeket?<BR>Bármilyen elõre elkészített ûrlapot felhasználhat:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Sajnos nincs kategória a kereséshez.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Sajnos nincs ilyen nevû közzétett terméktípus.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'Olyan, mint';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'NEM olyan, mint';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Teljes szöveges keresés';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Minden kijelölt';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Bármelyik kijelölt';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Ûrlap kiürítése';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Keresés kategóriában';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Paraméterek módosítása';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Csökkenõ rendezés';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Növekvõ rendezés';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'A kategória paraméterei';
	var $_PHPSHOP_FEE = 'Díj';
	var $_PHPSHOP_PRODUCT_CLONE = 'Termék klónozása';
	var $_PHPSHOP_CSV_SETTINGS = 'Beállítások';
	var $_PHPSHOP_CSV_DELIMITER = 'Határolójel';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Mezõ lezáró karakter';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'CSV fájl feltöltése';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'A CSV fájl feltöltése';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Betöltés könyvtárból';
	var $_PHPSHOP_CSV_FROM_SERVER = 'A CSV fájl betöltése a kiszolgálóról';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Exportálás CSV fájlba';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Válassza ki a mezõ rendezési típusát';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Alapértelmezett rendezés';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'Saját egyéni rendezésem';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Az összes termék exportálása CSV fájlba';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'CSV importálás / exportálás beállításai';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Változtatások mentése';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Mezõnév';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'alapértelmezett érték';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Mezõk sorrendje';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Kötelezõ a mezõ?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Importálás/Exportálás';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Új mezõ hozzáadása';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Dokumentáció';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Sajnos az Ön által kért termék nem található!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'A nem kapható termékek megjelenítése';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Ha engedélyezi, akkor láthatók lesznek a jelenleg nem kapható termékek. Egyéb esetben rejtettek maradnak az ilyen termékek.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'A csomagolásban lévõ mennyiség:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'A dobozban lévõ mennyiség:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Az elfogyott termékek elrejtése';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Ajánlott és akciós termékek';
	var $_PHPSHOP_FEATURED = 'Ajánlat';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Vissza az országhoz';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Vissza a fájlkezelõhöz';
	var $_PHPSHOP_ADD_STATE = 'Állam hozzáadása';
	var $_PHPSHOP_LIST_STATES = 'Államok listázása';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'ajánlott ÉS akciós';
	var $_PHPSHOP_SHOW_FEATURED = 'ajánlott termékek';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'akciós termékek';
	var $_PHPSHOP_FILTER = 'Szûrõ';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Vissza a fõ webhelyre';
	var $_PHPSHOP_EXPAND_TREE = 'A fa kibontása';
	var $_PHPSHOP_COLLAPSE_TREE = 'A fa összecsukása';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Akciós ár';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Itt hatálytalaníthatja a megadott árengedményt. Írja be a termék speciális engedményes árát.<br/>
Az engedményes árból új akciós bejegyzést fog létrehozni az üzlet.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Egységár';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'Zárva az üzlet?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'Ha bejelöli, akkor az üzlet Zárva üzenetet fog megjeleníteni.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Zárva üzenet';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Az üzlet tábláinak tábla elõtagja';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'Ez alapértelmezésként a <strong>vm</strong>';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Látható az oldalnavigálás a terméklista tetején?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Be- vagy kikapcsolja az oldalnavigálás megjelenítését a terméklista tetején a felhasználói oldalon.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Látható a termékek száma?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Látható a kategóriában lévõ termékek száma, mint pl. Kategória (4)?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'A berakom-a-kosárba gomb sémája';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'A dinamikus miniatûr-átméretezés engedélyezése?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'Bejelölésével engedélyezi a képek dinamikus átméretezését. Ez azt jelenti, hogy a PHP GD2 funkcióinak felhasználásával az összes miniatûr kép átméretezésre kerül,
        hogy igazodjon az alább megadott méretekhez (a GD2-támogatást úgy ellenõrizheti, ha a "Rendszer" -> "Rendszerinfó" -> "PHP infó" -> gd lehetõséghez tallóz. 
        A miniatûr kép minõsége sokkal jobb, mint azoké, melyeket a böngészõ "méretezett át". Az újonnan generált képeket a /shop_image/prduct/resized könyvtárba teszi. Ha a képet már átméretezte, akkor ezt a másolatot küldi a böngészõnek, vagyis egy képet sem méretez át újra meg újra.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'A miniatûr kép szélessége';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'Az átméretezett miniatûr cél <strong>szélessége</strong>.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'A miniatûr kép magassága';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'Az átméretezett miniatûr cél <strong>magassága</strong>.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Jelöljön be legalább egy jelölõnégyzetet a Szállítás beállításai lapon!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Ár beállításai';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Az árak a következõ tagcsoport számára láthatók';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'A kiválasztott tagcsoport, valamint a magasabb szintû jogosultságokkal rendelkezõ tagcsoportok láthatják a fogyasztói árakat.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'A "(XX% áfával)" megjelenítése, ha felszámítható?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'Ha bejelöli, akkor a felhasználók látni fogják a "(xx% áfával)" szöveget, ha az árak kijelzése az áfával történik.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'Látható a csomagolás árcédulája?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'Bejelölése esetén az árcédula a termék egységének és csomagolásának értékébõl származik:<br/>
<strong>Egységár (10 darab)<strong><br/>
Ha nem jelöli be, akkor az árcédula úgy néz ki, ahogy szokott: <strong>Ára: xx.xx Ft</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'További alapbeállítások';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Alapbeállítások';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Felhasználó-oldali funkciók';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Adózási beállítások';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Mennyiség kezdete';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Mennyiség vége';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'Felhasználói regisztrálás beállításai';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'Engedélyezett a felhasználók regisztrálása?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'Új fiókaktiválásra van szükség?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Csendes (rejtett) felhasználói regisztrálást használ?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'Engedélyezése esetén nem kell új fiók létrehozásakor kitölteniük a felhasználóknak a felhasználónevet és a jelszót. Ehelyett az e-mail cím kerül felhasználásra az új fiók létrehozásához, és véletlenszerû jelszót generál a rendszer. A regisztrációs adatokat postázza a vásárlónak.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Tisztelt %s!
Köszönjük, hogy regisztrált a(z) %s tartományon. A felhasználói fiókját elkészítettük.
Az alábbi felhasználónévvel és jelszóval léphet be a(z) %s tartományra:
Felhasználónév - %s
Jelszó - %s
';
	var $_PEAR_LOG_CRIT = 'Kritikus';
	var $_PEAR_LOG_ERR = 'Hiba';
	var $_PEAR_LOG_WARNING = 'Figyelmeztetés';
	var $_PEAR_LOG_INFO = 'Információ';
	var $_PEAR_LOG_TIP = 'Információ';
	var $_PEAR_LOG_ALERT = 'Riasztás';
	var $_PEAR_LOG_EMERG = 'Vészhelyzet';
	var $_PEAR_LOG_NOTICE = 'Közlemény';
	var $_PEAR_LOG_DEBUG = 'Hibakeresés';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'Engedélyezi a PayFlow Pro fizetést?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'Jelölje be a VeriSign PayFlow Pro használatához a VirtueMart-tal.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'Mód tesztelése ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'Tesztelés alatt válassza az \'Igen\' lehetõséget. Az élõ tranzakciók engedélyezéséhez válassza a \'Nem\' lehetõséget.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'VeriSign által feldolgozott partnerazonosító';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'A partnerazonosító, amit az a hivatalos VeriSign-viszonteladó adott, aki bejegyezte Önt a PayFlow Pro szolgáltatásba';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'PayFlow Pro felhasználónév';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'Ez az Ön PayFlow Pro felhasználóneve';
	var $_VM_TAXDETAILS_LABEL = 'Áfa összesen';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'A termékek alapértelmezett rendezési módja';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'Meghatározza, hogy mely mezõ alapján történik a termékek alapértelmezés szerinti rendezése a tallózó oldalakon';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'Létezõ "Rendezés" mezõk';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'Válassza ki a tallózó oldal "Rendezés" mezõit. Mindegyikük a terméktallózó oldal rendezési módját határozza meg. Ha az öszes kijelölését törli, akkor nem lesz látható a Rendezés ûrlap.';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO = 'Jelenjen meg egy rövid közlemény a "Visszavételi szabályzatról" a rendelés jóváhagyási oldalon?';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP = 'A legtöbb európai ország üzlettulajdonosait jogszabályok kötelezik arra, hogy tájékoztassák a vásárlóikat a visszavételi és visszavonási szabályzatról. Tehát a legtöbb esetben ezt engedélyezni kell.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT = 'Jogi tájékoztató szöveg (rövid változat).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP = 'Ezzel a szöveggel tájékoztatja röviden a vásárlókat a visszavételi és stornírozási szabályokról. A pénztár utolsó oldalán lesz látható, a "Rendelés jóváhagyása" fölött.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK = 'A visszavételi szabályzat hosszú változata (egy tartalmi elemre mutató hivatkozás).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP = 'Kérjük, hogy készítsen egy új tartalmi elemet a visszavételi és visszatérítési szabályzatról.
Ezt követõen itt tudja kijelölni.';
	var $_VM_LEGALINFO_SHORTTEXT = '<h5>Vsszavételi szabályzat</h5>
Rendelését az áltaslunk történõ átvételtõl számított 14 napon belül vonhatja vissza.
A visszavont rendelésbõl az új, felbontatlan árucikkeket az átvételtõl számított 2 héten belül 
küldheti vissza. A cikkeket eredeti csomagolásban kell visszajuttatnia.
A visszavonással és a visszatérítéssel kapcsolatos további tájékoztató a <a href="%s" onclick="%s" target="_blank">Visszavételi szabályzat</a> oldalon.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EU = 'Európai Unió mód';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE = 'A munkamenetek adatait tároló könyvtár nem írható. Kérjük, hogy javítsa, vagy lépjen kapcsolatba a szolgáltatójával.';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX = 'A munkamenet mentési útvonala nem írható. Kérjük, hogy javítsa ezt! Az üzlet megpróbálja addig ideiglenesen a(z) %s útvonalat használni.';
	var $_VM_SESSION_COOKIES_NOT_ACCEPTED_TIP = 'A böngészõje nem támogatja a cookie-k fogadását. Ha szeretne termékeket tenni a kosarába, és meg is vásárolni õket, akkor engedélyezze a cookie-k fogadását.';
	var $_PHPSHOP_CSV_SKIP_FIRST_LINE = 'Az elsõ sor kihagyása';
	var $_PHPSHOP_CSV_SKIP_DEFAULT_VALUE = 'Az alapértelmezett érték kihagyása';
	var $_PHPSHOP_CSV_OVERWRITE_EXISTING_DATA = 'A létezõ adatok felülírása';
	var $_PHPSHOP_CSV_INCLUDE_COLUMN_HEADERS = 'Tartalmazza az oszlopfejléceket';
	var $_PHPSHOP_CSV_UPLOAD_SETTINGS = 'Feltöltés beállításai';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS = 'Választható mezõk';
	var $_PHPSHOP_CSV_OUTPUT_CSV_UPLOAD_MESSAGES = 'CSV feltöltés üzenetei:';
	var $_PHPSHOP_CSV_OUTPUT_COUNT = 'Mennyiség';
	var $_PHPSHOP_CSV_OUTPUT_TOTAL = 'Összesen';
	var $_PHPSHOP_CSV_OUTPUT_FILE_IMPORTED = 'A CSV fájl importálása kész';
	var $_PHPSHOP_CSV_OUTPUT_UPDATED = 'Frissítve';
	var $_PHPSHOP_CSV_OUTPUT_DELETED = 'Törölve';
	var $_PHPSHOP_CSV_OUTPUT_ADDED = 'Hozzáadva';
	var $_PHPSHOP_CSV_OUTPUT_SKIPPED = 'Kihagyva';
	var $_PHPSHOP_CSV_OUTPUT_INCORRECT = 'Hibás';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS_USE = 'A következõ mezõk használhatók az importáláshoz vagy az exportáláshoz.';
	var $_PHPSHOP_CSV_MINIMAL_FIELDS = 'A minimum kötelezõ mezõk a product_sku, a product_name és a kategória útvonal. A product_sku kivételével a másik két mezõ nem egyedi.';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SKU = 'A termék egyedi azonosítója.<br />Értékek:<ul><li>Szám</li><li>Betûk</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_NAME = 'A termék neve.Értékek:<ul><li>Szöveg: HTML-kód használata nem engedélyezett.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DELETE = 'A product_delete mezõ egy speciális mezõ. Ez kerül felhasználásra annak megállapítására, hogy kell-e törölni egy terméket.<br />Használata:<ol><li>A  Beállítások fülön adja hozzá a "product_delete" elemet. A névben a kis- és a nagybetûk különbözõek, kisbetûs legyen.</li><li>Adja hozzá az Y értékkel az oszlopot a CSV fájlhoz. Ha a mezõ másik értéket tartalmaz, akkor a termék nem kerül törlésre.</li></ol><br />Értékek:<ul><li>Y: Igen, a termék törlendõ</li><li>N: Nem, a termék nem törlendõ</li><li>Empty: Üres érték, a termék nem törlendõ</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DESC = 'A termék hosszú leírása.<br />Értékek:<ul><li>Szöveg: HTML-kód használata engedélyezett.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_S_DESC = 'A termék rövid leírása.<br />Értékek:<ul><li>Szöveg: HTML-kód használata nem engedélyezett.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PUBLISH = 'A termék közzétételének állapota.<br />Értékek:<ul><li>Y: Igen, a termék közzé van téve</li><li>N: Nem, a termék nincs közzétéve</li><li>Empty: Üres érték, A termék közzé van téve.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WIDTH = 'A termék szélessége.<br />Értékek:<ul><li>Szám</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_HEIGHT = 'A termék magassága.<br />Értékek:<ul><li>Szám</li></ul>';
	var $PHPSHOP_CSV_EXPLANATION_PRODUCT_LENGTH = 'A termék hossza.<br />Értékek:<ul><li>Szám</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABLE_DATE = 'A dátum, mikortól a termék kapható. Az importáláshoz a dátum nap/hónap/év vagy nap-hónap-év formátumú legyen. Windows rendszereken a dátum 19/01/2038-ig megy.<br />Használata:<ol><li>A Beállítások fülön adja hozzá a "product_available_date" elemet. A névben a kis- és a nagybetûk különbözõek, kisbetûs legyen.</li><li>Adja hozzá dátum értékkel az oszlopot a CSV fájlhoz. Ha a mezõ másik értéket tartalmaz, akkor az adatok kihagyásra kerülnek.</li></ol><br />Értékek:<ul><li>Dátum: nap/hónap/év vagy nap-hónap-év</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_IN_STOCK = 'A készleten lévõ árucikkek száma.<br /><br />Használata:<ol><li>A Beállítások fülön adja hozzá a "product_in_stock" elemet. A névben a kis- és a nagybetûk különbözõek, kisbetûs legyen.</li><li>Adja hozzá numerikus értékkel az oszlopot a CSV fájlhoz. Ha másik értéket tartalmaz a mezõ, akkor az alapértelmezett érték kerül felhasználásra.</li></ol><br />Értékek:<ul><li>Szám</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE = 'A választék, amivel a termék rendelkezik. A termék különféle jellemzõit adhatja meg vele. Egy pólóinget például különféle méretben és színben hoznak forgalomba. A következõképpen adhatja meg a méreteket és a színeket: Méret,XL[+1.99],M,S[-2.99];Szín,Piros,Zöld,Sárga,KifejezõSzín[=24.00];ÉsÍgyTovább,..,..<br /><br />Az attribútumonkénti árakat a következõ lehetõségekkel adhatja meg:<ul><li>+: Hozzáadja ezt az összeget a megadott árhoz.</li><li>-: Levonja ezt az összeget a megadott árból.</li><li>=: Erre az összegre állítja be a termék árát.</li></ul><br />Használata:<ol><li>A Beállítások lapon adja hozzá az "attribute" nevet. A névben a kis- és nagybetûk különbözõek, kisbetûs legyen.</li><li>Adja hozzá az attribútum szövegével az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg: HTML-kód használata nem engedélyezett.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABILITY = 'Ez mutatja, hogy mikortól lesz kapható egy termék. Az érték leíró szöveg vagy egy képfájl neve lehet. A képeket a "shop_image/availability/" könyvtárba töltse fel.<br />Használata:<ol><li>A Beállítások fülön adja hozzá a "product_availability" elemet. A névben a kis- és a nagybetûk különbözõek, kisbetûs legyen.</li><li>Adja hozzá szöveg értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg: HTML-kód használata nem engedélyezett.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_FULL_IMAGE = 'A "shop_image/product/" könyvtárban lévõ képfájl neve. A fájlnév URL is lehet.<br />MEGJEGYZÉS: Ha engedélyezve van a dinamikus átméretezés, akkor töltse ki a "product_thumb_image" mezõt. A VirtueMart átméretezi az ott megadott képet.<br/><br />Használata:<ol><li>A  Beállítások fülön adja hozzá a "product_full_image" elemet. A névben a kis- és a nagybetûk különbözõek, kisbetûs legyen.</li><li>Adja hozzá szöveg értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg:<ul><li>HTML-kód használata nem engedélyezett</li><li>URL-ek használhatók.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_THUMB_IMAGE = 'A "shop_image/product/" könyvtárban lévõ bélyegkép neve. A fájlnév URL is lehet.<br />MEGJEGYZÉS: Ha engedélyezve van a dinamikus átméretezés, akkor még kell lennie értéknek ebben a mezõben. A VirtueMart átméretezi az itt megadott képet.<br /><br />Használata:<ol><li>A  Beállítások fülön adja hozzá a "product_full_image" elemet. A névben a kis- és a nagybetûk különbözõek, kisbetûs legyen.</li><li>Adja hozzá szöveg értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg:<ul><li>HTML-kód használata nem engedélyezett</li><li>URL-ek használhatók.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CUSTOM_ATTRIBUTE = 'Az egyedi attribútum beviteli mezõt helyez el a terméklapon a megadott attribútum leírásával. Az egyedi attribútumok megadása ehhez hasonló: Név;Extrák;...<br />Használata:<ol><li>A Beállítások fülön adja hozzá a "custom_attribute" elemet. A névben a kis- és a nagybetûk különbözõek, kisbetûs legyen.</li><li>Adja hozzá az attribútum szövegével az oszlopot a CSV fájlhoz.</li></ol><br /.>Értékek:<ul><li>Szöveg: HTML-kód használata nem engedélyezett.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PACKAGING = 'Adja meg a csomagban lévõ cikkek számát.<br />Használata:<ol><li>A Beállítások fülön adja hozzá a "product_packaging" elemet. A névben a kis- és a nagybetûk különbözõek, kisbetûs legyen.</li><li>Adja hozzá a csomagban lévõ cikkek számával az oszlopot a CSV fájlhoz.</li></ol><br /.>Értékek:<ul><li>Szám</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_BOX = 'A dobozban lévõ cikkek számát határozza meg.<br />Használata:<ol><li>A Beállítások fülön adja hozzá a "product_box" elemet. A névben a kis- és a nagybetûk különbözõk, lehet kisbetûs.</li><li>Adja hozzá a dobozban lévõ cikkek számával az oszlopot a CSV fájlhoz.</li></ol><br /.>Értékek:<ul><li>Szám</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT = 'Adja meg a termék árengedményének összegét vagy százalékát. A beírt értékek tényleges értékek, nem történik számítás. Ez ugyanolyan, mint a Termék árengedmény listában kitöltött kedvezmény. Ha az árengedmény már létezik, akkor nem kerül be az adatbázisba, viszont a termék hozzácsatolásra kerül a létezõ árengedményhez. Egy már létezõ kedvezmény megállíapításának a feltétele, hogy a következõ értékek pontosan ugyanazok legyenek:<ol><li>Összeg, lehet összes vagy százalék</li><li>Kezdõ dátum</li><li>Záró dátum</li></ol>Ez akadályozza meg, hogy ne kerüljön be nagyon sokszor ugyanaz a kedvezmény az adatbázisba.<br /><br />Használata:<ol><li>A Beállítások fülön adja hozzá a "product_discount" elemet. A névben a kis- és a nagybetûk különbözõek, és kisbetûs legyen.</li><li>Elhagyható: A Beállítások fülön adja hozzá a "product_discount_date_start" elemet. A névben a kis- és a nagybetûk különbözõek, és kisbetûs legyen.</li><li>Elhagyható: A Beállítások fülön adja hozzá a "product_discount_date_end" elemet. A névben a kis- és a nagybetûk különbözõek, és kisbetûs legyen.</li><li>Adja hozzá a megfelelõ értékekkel a kiválasztott oszlopot a CSV fájlhoz.</li></ol><br /.>Értékek:<ul><li>product_discount</li><ul><li>Szám<br />pl. 10</li><li>Százalék: Tartalmaznia kell a % jelet<br />pl. 10%</li></ul><li>product_discount_date_start</li><ul><li>Dátum: nap/hónap/év vagy nap-hónap-év<br />A nap vagy a hónap 1 vagy 2 számjeggyel jelölhetõ.<br />Az év 2 vagy 4 számjeggyel jelölhetõ.</li></ul><li>product_discount_date_end</li><ul><li>Dátum: nap/hónap/év vagy nap-hónap-év<br />A nap és a hónap 1 vagy 2 számjeggyel jelölhetõ.<br />Az év 2 vagy 4 számjeggyel jelölhetõ.</li></ul></ul>';
	var $_ITEM_PREVIOUS = 'elõzõ';
	var $_ITEM_NEXT = 'következõ';
	var $_CMN_OK = 'OK';
	var $_CMN_CONTINUE = 'Folytatés';
	var $_CMN_CANCEL = 'Mégse';
	var $_BUTTON_SEND_REG = 'Regisztráció küldése';
	var $_CONTACT_FORM_NC = 'Kérjük, gyõzõdjön meg róla, hogy kitöltött-e minden adatot, és azok pontosak-e.';
	var $_CMN_REQUIRED = 'Kötelezõ';
	var $_CMN_NEW = 'Új';
	var $_CMN_SAVE = 'Mentés';
	var $_CMN_NEW_ITEM_LAST = 'Az új elemek alapértelmezésként az utolsó helyre kerülnek. A sorrendet e tétel mentése után megváltoztathatja.';
	var $_CMN_OPTIONAL = 'Elhagyható';
	var $_E_APPLY = 'Alkalmaz';
	var $_E_IMAGES = 'Képek';
	var $_URL = 'URL:';
	var $_SEL_CATEGORY = 'Válasszon kategóriát';
	var $_E_REMOVE = 'Eltávolítás';
	var $_PN_LT = '<';
	var $_PN_RT = '>';
	var $_PN_PAGE = 'Oldal';
	var $_PN_OF = '/';
	var $_PN_START = 'Elsõ';
	var $_PN_PREVIOUS = 'Elõzõ';
	var $_PN_NEXT = 'Következõ';
	var $_PN_END = 'Utolsó';
	var $_PN_DISPLAY_NR = 'Tételek #';
	var $_PN_RESULTS = 'Eredmények';
	var $_CMN_PRINT = 'Nyomtatás';
	var $_CMN_PDF = 'PDF';
	var $_CMN_EMAIL = 'Email';
	var $_BACK = 'Vissza';
	var $_USERNAME = 'Felhasználónév';
	var $_PASSWORD = 'Jelszó';
	var $_BUTTON_LOGIN = 'Bejelentkezés';
	var $_REGISTER_UNAME = 'Felhasználónév';
	var $_REGISTER_EMAIL = 'Email';
	var $_REGWARN_NAME = 'Kérjük, hogy írja be a nevét.';
	var $_REGWARN_UNAME = 'Kérjük, hogy írja be a felhasználónevét.';
	var $_REGWARN_MAIL = 'Kérjük, hogy írjon be egy mûködõ email címet.';
	var $_SEND_SUB = '%s fiókadatai a(z) %s weblapon';
	var $_ASEND_MSG = 'Kedves %s!
	
	Egy új felhasználó regisztrált a(z) %s weblapon.
	Ebben az emailben megtekintheti az adatait:
	
	Név: %s
	Email: %s
	Felhasználónév: %s
	
	Kérjük, hogy ne válaszoljon erre az üzenetre, mivel automatikusan készült, és csak tájékoztatásul küldtük';
	var $_REG_COMPLETE = '<div class="componentheading">A regisztrálás befejezõdött!</div><br />Most már be tud jelentkezni.';
	var $_REG_COMPLETE_ACTIVATE = '<div class="componentheading">A regisztrálás befejezõdött!</div><br />A fiókja elkészült, és az aktiváló hivatkozást elküldtük a megadott email címre. Miután megkapta az emailt, a fiókot az aktiváló hivatkozásra kattintással kell aktiválnia, hogy be tudjon aztán jelentkezni.';
	var $_DATE_FORMAT_LC = '%Y. %B. %d., %A';
	var $_LAST_UPDATED = 'Frissítve';
	var $_NOT_AUTH = 'Az erõforrás megtekintése az Ön számára nem engedélyezett.';
	var $_DO_LOGIN = 'Be kell jelentkeznie.';
	var $_VALID_AZ09 = 'Kérjük, hogy érvényes %s-t írjon be.  Ne legyen benne szóköz, több legyen %d karakternél, és 0-9,a-z,A-Z közti karaktereket tartalmazzon.';
	var $_CMN_PUBLISHED = 'Közzétéve';
	var $_CMN_UNPUBLISHED = 'Visszavonva';
	var $_MORE = 'Folytatás...';
	var $_EMPTY_CATEGORY = 'Ez a kategória jelenleg üres.';
	var $_BUTTON_LOGOUT = 'Kijelentkezés';
	var $_NO_ACCOUNT = 'Még nincs fiókja?';
	var $_CREATE_ACCOUNT = 'Regisztráljon';
	var $_REGWARN_PASS = 'Kérjük, hogy érvényes jelszót írjon be.  Ne legyen benne szóköz, több legyen 6 karakternél, és 0-9,a-z,A-Z közti karaktereket tartalmazzon';
	var $_REGWARN_VPASS1 = 'Kérjük, hogy erõsítse meg a jelszavát.';
	var $_REGWARN_VPASS2 = 'Nem egyezik a jelszó és a megerõsítése, kérjük, hogy próbálja újra.';
	var $_USEND_MSG_ACTIVATE = 'Kedves %s!

Köszönjük, hogy regisztrált a(z) %s weblapon. A fiókját elkészítettük, azonban a használatba vétel elõtt aktiválnia kell.
A fiók aktiválásához kattintson az alábbi hivatkozásra, vagy másolja ki a vágólapra, és illessze be a böngészõjébe:
%s

Az aktiválás után jelentkezhet majd be a(z) %s közösségi oldalaira az alábbi felhasználónévvel és jelszóval:

Felhasználónév: %s
Jelszó: %s';
	var $_USEND_MSG = 'Kedves %s!

Köszönjük, hogy regisztrált a(z) %s weblapon.

Most már bejelentkezhet a(z) %s közösségébe a regisztrált felhasználónévvel és jelszóval.';
	var $_PROMPT_PASSWORD = 'Elfelejtette jelszavát?';
	var $_HI = 'Üdv,';
	var $_NEW_USER_MESSAGE_SUBJECT = 'Új felhasználó adatai';
	var $_NEW_USER_MESSAGE = 'Kedves %s!


Egyik munkatársunk felhasználóként nyilvántartásba vette Önt a(z) %s weblapon.

Ebben az emailben találja a felhasználónevét és a jelszavát, amivel be tud a(z) %s weblapon jelentkezni.

Felhasználnév: %s
Jelszó: %s


Kérjük, hogy ne válaszoljon erre az üzenetre, mivel automatikusan készült, és csak tájékoztásul küldtük.';
	var $_REMEMBER_ME = 'Emlékezzen rám';
	var $_REGISTER_TITLE = 'Regisztráció';
	var $_JAN = 'Január';
	var $_FEB = 'Február';
	var $_MAR = 'Március';
	var $_APR = 'Április';
	var $_MAY = 'Május';
	var $_JUN = 'Június';
	var $_JUL = 'Július';
	var $_AUG = 'Augusztus';
	var $_SEP = 'Szeptember';
	var $_OCT = 'Október';
	var $_NOV = 'November';
	var $_DEC = 'December';
	var $_PHPSHOP_CSV_VERSION = '0.7';
	var $_PHPSHOP_CSV_ABOUT = 'Névjegy';
	var $_PHPSHOP_CSV_PRICE_LIST_ONLY = 'Csak árlista feltöltés';
	var $_PHPSHOP_CSV_MULTIPLE_PRICES_UPLOAD = 'Több ár feltöltése';
	var $_PHPSHOP_CSV_IMPORT_CONFIG_CSV_FILE = 'Az oszlopfejlécek használata, mint a beállításokban';
	var $_PHPSHOP_CSV_COLLECT_DEBUG_INFO = 'Hibakeresõ információ gyûjtése';
	var $_PHPSHOP_CSV_SHOW_PREVIEW = 'Elõnézet megjelenítése';
	var $_PHPSHOP_CSV_REGULAR_UPLOAD = 'Hagyományos feltöltés';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_UPLOAD = 'Terméktípus feltöltése';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_PARAMETERS_UPLOAD = 'terméktípus paraméterek feltöltése';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_XREF_UPLOAD = 'Terméktípus kereszthivatkozás feltöltése';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_DETAIL_UPLOAD = 'Terméktípus részl feltöltése';
	var $_PHPSHOP_CSV_EMPTY_DATABASE = 'Adatbázis kiürítése';
	var $_PHPSHOP_CSV_CONTINUE_UPLOAD = 'Feltöltés folytatása';
	var $_PHPSHOP_CSV_CANCEL_UPLOAD = 'Feltöltés megszakítása';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION = '<span style="color: #FF0000; font-size: 1.2em;">A CSV fájl feltöltésének lépései</span>
										<ol>
										<li>Készítse el az oszlopfejléces vagy anélküli CSV formátumú terméklistát.
										<br />A ~ (hullámvonal) szövegelválasztó, és a ^ (kalapjel) mezõelválasztó használatát javasoljuk.
										<br /><span style="font-weight: bold;">Példafájl:</span><br />
										<div class="quote" style="width:600px;overflow:scroll;"><pre>~G01~^~Lapát~^~Kézi szerszámok~^~4.99000~^~<p>Kézreálló lapát, mellyel feláshatja a kertet.</p>~^~<ul>  <li>Könnyen markolható, kézzel faragott nyél  </li><li>Titán hegyû lapát  </li><li>Fél foknyi hajtás a problémák elkerülésére  </li><li>Videó útmutatóval, narrátor: Bob Costas  </li></ul>    <b>Mûszaki jellemzõk</b><br>  5\~ Átmérõ<br>  Volfrám nyélhegy<br>~^~8d886c5855770cc01a3b8a2db57f6600.jpg~^~cca3cd5db813ee6badf6a3598832f2fc.jpg~^~10.0000~^~font~^~0.0000~^~0.0000~^~0.0000~^~hüvelyk~^~10~^~1072911600~^~1~^~1~^~2~^~0~^~G01~^~~^~~^~Szín::1|Méret::2~^~~
~G02~^~Létra~^~Kerti szerszámok~^~49.99000~^~Jó hosszú létre, mellyel magasra mászhat.~^~<ul>  <li>Könnyen markolható, kézzel faragott nyél  </li><li>Titán hegyû lapát  </li><li>Fél foknyi hajtás a problémák elkerülésére  </li><li>Videó útmutatóval, narrátor: Bob Costas  </li></ul>    <b>Mûszaki jellemzõk</b><br>  5\~ Átmérõ<br>  Volfrám nyélhegy<br>~^~ffd5d5ace2840232c8c32de59553cd8d.jpg~^~8cb8d644ef299639b7eab25829d13dbc.jpg~^~10.0000~^~font~^~0.0000~^~0.0000~^~0.0000~^~hüvelyk~^~76~^~1072911600~^~0~^~1~^~2~^~0~^~G02~^~~^~~^~Anyaga::1~^~~
~G03~^~Lapát~^~Kerti szerszámok~^~24.99000~^~Ügyes kis lapát.  Ezzel az eggyel Kínáig is eláshat.~^~<ul>  <li>Könnyen markolható, kézzel faragott nyél  </li><li>Titán hegyû lapát  </li><li>Fél foknyi hajtás a problémák elkerülésére  </li><li>Videó útmutatóval, narrátor: Bob Costas  </li></ul>    <b>Mûszaki jellemzõk</b><br>  5\~ Átmérõ<br>  Volfrám nyélhegy<br>~^~8147a3a9666aec0296525dbd81f9705e.jpg~^~520efefd6d7977f91b16fac1149c7438.jpg~^~10.0000~^~font~^~0.0000~^~0.0000~^~0.0000~^~hüvelyk~^~32~^~1072911600~^~0~^~1~^~2~^~0~^~G03~^~Méret,XL[+1.99],M,S[-2.99];Szín,Piros,Zöld,Sárga,KülönlegesSzín[=24.00]~^~~^~~^~~</pre></div></li>
										<li>A "Beállítások" fülön ugyanabban a sorrendben állítsa be a mezõket, mint a CSV fájlban. A mezõknek pont ugyanott kell lenniük, mint a CSV fájlban.
										<br />Pl. product_sku, product_desc, product_price, category_path<br />
										<br /><span style="font-weight: bold;">Egy termék hozzáadásához legalább szükséges információ:</span><br />
										product_sku<br />
										product_name<br />
										category_path<br />
										<br /><span style="font-weight: bold;">category_path</span> perjellel elválasztott karakterlánc,
										mely felsõ szintû kategóriával kezdõdik, és alkategóriák követik, pl. <br />
										<div class="quote">category/sub-category_1/sub_category_2</div>
										<br />
										Amikor a terméket több kategóriába kell besorolni, akkor
										<span style="font-weight: bold;">|</span> jellel elválasztva
										megadhatja az összes kategóriát.<br />
										<div class="quote">Kategória/Alkategória1/Alkategória2|Kategória2/Alkategória22|Kategória3/Alkategória33</div>
										</li>
										<li>Az "Importálás/Exportálás" fülön válassza ki az elválasztókat.</li>
										<li>Az "Importálás/Exportálás" fülön végezze el a feltöltés tulajdonságainak beállítását.</li>
										<li>Válassza ki, hogy a helyi számítógépérõl tölti fel a fájlt (CSV fájl feltöltése), vagy helyi fájlt használ (CSV fájl betöltése a kiszolgálóról).</li>
										<li>Az importálás megkezdõdik.</li>
										</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_PRODUCT_TYPES = '<span style="color: #FF0000; font-size: 1.2em;">Terméktípusok</span><br /><br />
													A terméktípusok hozzáadásához 4 CSV fájlra van szükség. Mindegyik CSV fájl a terméktípus egy-egy részét jelenti.
													<ul>
													<li><span style="font-weight: bold;">Terméktípusok</span><br />
													Ez a CSV fájl tartalmazza a fõ terméktípusokat, és így kell kinéznie:
													<table border="1">
													<tr style="border: 1px solid #000000;"><td>product_type_name</td><td>product_type_description</td><td>product_type_publish</td><td>product_type_browsepage</td><td>product_type_flypage</td></tr>
													<tr><td>Zeneszám</td><td>Szám</td><td>Y</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													<tr><td>Zenei album</td><td>Album</td><td>Y</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													<tr><td>Zenei elõadó</td><td>Elõadó</td><td>Y</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													</table>
													</li><br />
													<li><span style="font-weight: bold;">Terméktípus paraméterei</span><br />
													Ez a CSV fájl tartalmazza a terméktípusonkénti paramétereket, és így kell kinéznie:
													<div style="width: 50%; overflow: auto; height: 100px;">
													<table border="1">
													<tr><td>product_type_name</td><td>product_type_parameter_name</td><td>product_type_parameter_label</td><td>product_type_parameter_description</td><td>product_type_parameter_list_order</td><td>product_type_parameter_type</td><td>product_type_parameter_values</td><td>product_type_parameter_multiselect</td><td>product_type_parameter_default</td><td>product_type_parameter_unit</td></tr>
													<tr><td>Zenei elõadó</td><td>Név</td><td>Név</td><td>Artist Name</td><td>1</td><td>I</td><td>&nbsp;</td><td>N</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													<tr><td>Zenei elõadó</td><td>Születésnap</td><td>Születésnap</td><td>Elõadó születésnapja</td><td>2</td><td>D</td><td>&nbsp;</td><td>N</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													<tr><td>Zenei album</td><td>Játékidõ</td><td>Játékidõ</td><td>Az album játékideje</td><td>3</td><td>M</td><td>00:01:00;00:02:00;00:03:00</td><td>Y</td><td>00:02:00</td><td>perc</td></tr>
													</table>
													</div>
													<br />
													A terméktípus paramétertípusának több értéke lehet, ezek a következõk:
													<ul>
													<li>I: Egész szám</li>
													<li>T: Szöveg</li>
													<li>S: Rövid szöveg</li>
													<li>F: Lebegõ</li>
													<li>C: Karakter</li>
													<li>D: Dátum és idõpont</li>
													<li>M: Idõ</li>
													<li>V: Több érték</li>
													<li>B: Sortörés</li>
													</ul>
													</li><br />
													<li><span style="font-weight: bold;">Terméktípus nevekénti áricukkek</span><br />
													Ez a CSV fájl tartalmazza a terméktípus paraméternevenkénti részleteit, és így kell kinéznie:
													<table border="1">
													<tr><td>product_sku</td><td>product_type_name</td><td>product_type_parameter_namex</td><td>product_type_parameter_namex</td></tr>
													<tr><td>1234</td><td>Zenei elõadó</td><td>Szóló énekes</td><td>1975</td></tr>
													<tr><td>5678</td><td>Zenei elõadó</td><td>Rockzenekar</td><td>1980</td></tr>
													</table><br />
													Terméktípus nevenként külön CSV fájlra van szükség. Ennek az az oka, hogy mindegyik CSV fájlhoz eltérõek az oszlopnevek a terméktípus paramétereinek megadása miatt.
													</li><br />
													<li><span style="font-weight: bold;">Terméktípus kereszthivatkozás a termék cikkszámához</span><br />
													Ez a CSV fájl tartalmazza egy terméktípus és egy termék cikkszám közti hivatkozást, és így kell kinéznie:
													<table border="1">
													<tr><td>product_sku</td><td>product_type_name</td></tr>
													<tr><td>1234</td><td>Zenei elõadó</td></tr>
													<tr><td>5678</td><td>Zenei elõadó</td></tr>
													</table>
													</li>
													</ul><br />
													Eljárás:<br />
													<ol>
													<li>Töltse fel a terméktípusok CSV fájlját</li>
													<li>Töltse fel a terméktípus paraméterek CSV fájlt</li>
													<li>Töltse fel a terméktípus árucikkei CSV fájlz</li>
													<li>Töltse fel a terméktípus kereszthivatkozás CSV fájlt</li>
													</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_EMPTY_DATABASE = '<span style="color: #FF0000; font-size: 1.2em;">Adatbázis kiürítése</span><br /><br />
													 <span style="color: #FF0000; font-size: 2em;">LEGYEN ÓVATOS !!! NEM ÁLLÍTHATÓ VISSZA !!!</span><br /><br />
													 Az adatbázis kiürítése során az ÖSSZES adat eltávolításra kerül a következõ táblákból:
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
													 Mind, de csak az elsõ gyártó kerül eltávolításra:
													 <ul>
													 <li>manufacturer</li>
													 </ul>
													 A következõ táblák teljesen törlésre kerülnek:
													 <ul>
													 <li>product_type_x</li>
													 </ul>
													 Az x jelenti a tábla számát. Ez a szám vonatkozik a rendszerben lévõ terméktípusokra. Mivel a terméktípusok táblája teljesen kiürítésre kerül, ezek a táblák eltávolításra kerülnek. Új terméktípusok feltöltésekor megtörténik a táblák ismételt létrehozása.<br /><br />
													 Eljárás:
													 <ol>
													 <li>A Feltöltés beállításai fülön válassza az "Adatbázis kiürítése" elemet a legördülõ listában</li>
													 <li>Jelölje be a "Hibakeresési információ gyûjtése" jelölõnégyzetet, ha további információra van szüksége</li>
													 <li>Kattintson a "CSV fájl feltöltése" vagy a "CSV fájl  betöltése a kiszolgálóról" gombra. Fájlnevet nem kell beírnia.</li>
													 <li>Azt kérdezzük meg, hogy biztosan ki akarja-e üríteni az adatbázist. Nyomja meg az OK gombot, ha biztos benne, egyéb esetben a Mégse gombra kattintson</li>
													 <li>Az adatbázis kiürítése most már megtörtént, ill. az elõzõ választástól függõen visszairányítjuk a fõképernyõre</li>
													 </ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_MULTIPLE_PRICES_UPLOAD = '<span style="color: #FF0000; font-size: 1.2em;">Többféle ár feltöltése</span><br /><br />
														    Eljárás:
														    <ol>
														    <li>Hozzon létre egy CSV fájlt, mely a következõ mezõket tartalmazza:
														    	<ul>
															<li>product_sku</li>
															<li>product_price</li>
															<li>product_currency</li>
															<li>price_quantity_start</li>
															<li>price_quantity_end</li>
															<li>price_delete</li>
															</ul>
														    Lásd a Választható mezõk fülön, hogy az egyes mezõk milyen információkat tartalmaznak. Ha beállításként kívánja használni az oszlopfejléceket, akkor az elsõ sorban az oszlopfejlécek neveit adja meg.
														    </li>
														    <li>Vagy adja meg a konfigurációs mezõket, ahogy a Beállítások fül 1. pontjában említettük, vagy ha hozzáadta az oszlopfejléceket a CSV fájlhoz, akkor válassza az "Oszlopfejlécek használata beállításként" lehetõséget a Feltöltés beállításaiban.
														    </li>
														    <li>Válassza a "Többféle ár feltöltése" lehetõséget a Feltöltés beállításaiban</li>
														    <li>Tetszés szerint válassza az "Elõnézet megjelenítése" és/vagy a "Hibakeresési információ gyûjtése" lehetõséget</li>
														    <li>Válassza ki a feltöltendõ, vagy a könyvtárból betöltendõ fájlt</li>
														    <li>Válassza a "CSV fájl feltöltése" vagy a "CSV fájl betöltése a kiszolgálóról" lehetõséget, attól függõen, hogy feltölti-e a fájlt, vagy betölti valamelyik könyvtárból</li>
														    <li>Most kerül sor az árak importálására</li>
														    </ol><br /><br />
														    <span style="font-weight: bold;">Ár törlése</span><br />
														    A többféle ár importálással árak törlésére is mód van. Az ár akkor kerül törlésre, amikor a CSV fájlban lévõ következõ mezõk egyeznek az adatbázisban lévõ adatokkal:
														    <ul>
														    <li>product_sku</li>
														    <li>product_price</li>
														    <li>product_currency</li>
														    <li>price_quantity_start</li>
														    <li>price_quantity_end</li>
														    </ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PRICE = 'Egy termék ára a pénznem megjelölése nélkül.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_price" elemet a legördülõ listában.</li><li>Adja hozzá az ár értékével az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Numerikus</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LENGTH = 'A termék hossza.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_length" elemet a legördülõ listában.</li><li>Adja hozzá a numerikus értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Numerikus</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LWH_UOM = 'A termék hosszának, szélességének és magasságának mérése.Ez lehet hüvelyk, centiméter, stb.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_lwh_uom" elemet a legördülõ listában.</li><li>Adja hozzá szöveg értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg: HTML-kód használata nem engedélyezett</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT = 'A termék súlya.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_weight" elemet a legördülõ listában.</li><li>Adja hozzá numerikus értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Numerikus</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT_UOM = 'A termék súlymértéke. Ez lehet font, kilogram stb.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_weight_uom" elemet a legördülõ listában.</li><li>Adja hozzá szöveg értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg: HTML-kód használata nem engedélyezett</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTES = 'Az attribútumok egy termék részei, és a sarjtermékek használják a jellemzõk megadására.<br />Használata:<ol><li>A Beállítások fülön válassza ki az "attributes" elemet a legördülõ listában.</li><li>Adja hozzá az attribútumok szövegével az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg: HTML-kód használata nem engedélyezett.<br />Az értékeket függõleges vonallal (|) kell elválasztani. Pl.: attribútum_neve::lista sorrend|attribútum_neve::lista_sorrend</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE_VALUES = 'Az attribútumértékek olyan sarjtermékek értékei, melyek hozzá vannak kapcsolva a szülõtermék attribútumaihoz.<br />Használata:<ol><li>A Beállítások fülön válassza ki a "custom_attribute" elemet a legördülõ listában.</li><li>Adja hozzá az attribútumérték szövegével az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg: HTML-kód használata nem engedélyezett.<br />Az értékeket függõleges vonallal (|) kell elválasztani. Pl.: attribútum_neve::attribútum_értéke|attribútum_neve::attribútum_értéke</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_START = 'A termék árengedményének kezdõ napja. További információ a "product_discount" résznél.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_discount_date_start" elemet a legördülõ listában.</li><li>Adja hozzá a dátum értékével a választott oszlopokat a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>product_discount_date_start</li><ul><li>Dátum: nap/hónap/év vagy nap-hónap-év<br />A nap és a hónap 1 vagy 2 számjegybõl állhat.<br />Az év 2 vagy 4 számjegyet tartalmazhat.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_END = 'A termék árengedményének utolsó napja. További információ a "product_discount" résznél.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_discount_date_end" elemet a legördülõ listában.</li><li>Adja hozzá a dátum értékével a kiválasztott oszlopokat a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>product_discount_date_end</li><ul><li>Dátum: nap/hónap/év vagy nap-hónap-év<br />A nap és a hónap 1 vagy 2 számjegybõl állhat.<br />Az év 2 vagy 4 számjegyet tartalmazhat.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_UPLOAD_SETTINGS = '<ul><li><span style="font-weight: bold;">Az elsõ sor kihagyása</span><br />Ha a CSV fájl fejlécsorral kezdõdik, akkor válassza ezt a lehetõséget annak a sornak a kihagyásához. Így megelõzheti, hogy a fejléc hozzáadásra kerüljön az adatbázishoz.</li><li><span style="font-weight: bold;">Létezõ adatok felülírása</span><br />Új termékek adatbázisba történõ hozzáadásakor, ennek a beállításnak a törlése megakadályozza, hogy a létezõ adatok lecserélésre kerüljenek olyan termékekre, melyek már megtalálhatók az adatbázisban. Az alapértelmezés a termékadatok frissítése.</li><li><span style="font-weight: bold;">Alapértelmezett érték kihagyása</span><br />A Beállítások fülön megadható egy alapértelmezés szerinti érték, ha a CSV fájlban üres a mezõ. E beállítás engedélyezésével az importálás nem fogja tartalmazni a mezõt a frissítéshez, ha nincs érték a CSV fájlban.</li><li><span style="font-weight: bold;">Csak árlista feltöltése</span><br />Az árlista feltöltése csak akkor használandó, ha módosítja a termékek árait. A CSV fájl elrendezése 2 oszlopos legyen:<ol><li>product_sku</span></li><li>product_price</li></ol></li>A konfgurációs oldalon lévõ beállítások NEM lesznek figyelembe véve.<li><span style="font-weight: bold;">Oszlopfejlécek használata beállításként</span><br />Ha a CSV fájl elsõ sorában oszlopfejlécek találhatók, akkor ez a lehetõség használható fel az oszlopfejlécek jelenlegi beállításkén történõ használatára. Az oszlopfejléceknek egyezniük kell a Létezõ fülek oldalon megadott egyik oszlopnévvel. Ez a beállítás használatonkénti alapú, semmi sem kerül mentésre. Az alapértelmezett értékek nem használhatók ezzel a lehetõséggel.</li><li><span style="font-weight: bold;">Elõnézet megjelenítése</span><br />Megmutat elõnézetben 5 sort az importálandó fájlból. Az importálást aztán vagy megszakíthatja, vagy folytathatja.</li><li><span style="font-weight: bold;">Hibakeresési információ gyûjtése</span><br />Problémák esetén használja ezt a lehetõséget, és meg tudja tekinteni, hogy mi történik az importálás során. Az importálás végén jelentés készül a végrehajtott lépésekrõl és a lekérdezésekrõl.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_NAME = 'A termék gyártójának a neve. Ez kerül kombináltan felhasználásra a gyártó azonosítójával. Ha nincs megadva a gyártó azonosítója, akkor csak a név kerül ellenõrzésre. Az új gyártók létrehozása növekményes azonosítóval történik. A gyártók hozzáadási/módosítási folyamata a következõ útmutatás alapján történik:<ol><li>Név létezik, azonosító létezik --> Az azonosító módosításra kerül, ha eltérõ</li><li>Név létezik, azonosító nem létezik --> Az új gyártó növekményes azonosítóval kerül létrehozásra</li><li>Név nem létezik, azonosító létezik --> Eredendõ név kerül hozzáadásra létezõ azonosítóval</li><li>Név nem létezik, azonosító nem létezik --> Nincs változás</li></ol>Használata:<ol><li>A Beállítások fülön válassza ki a "manufacturer_name" elemet a legördülõ listában.</li><li>Adjon hozzá egy oszlopot a CSV fájlhoz a gyártó nevével.</li></ol><br />Értékek:<ul><li>Szöveg: HTML-kód használata nem engedélyezett.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_ID = 'A termék gyártójának azonosítója, egyedinek kell lennie. A gyártó nevével kombinálva kerül felhasználásra. Ha csak a gyártó neve nincs megadva, akkor hozzáadásra/frissítésre kerül a termék gyártójának hivatkozása. Gyártók hozzáadása/frissítése a következõ folyamat alapján történik:<ol><li>Név létezik, azonosító létezik --> Az azonosító akkor kerül frissítésre, ha eltérõ</li><li>Név létezik, azonosító nem létezik --> Az új gyártó növekményes azonosítóval kerül létrehozásra</li><li>Név nem létezik, azonosító létezik --> Eredendõ név kerül hozzáadásra létezõ azonosítóval</li><li>Név nem létezik, azonosító nem létezik --> Nincs változás</li></ol>Ha a név vagy az azonosító nem létezik, nem történik semmi, ezáltal megelõzhetõ a nagy számú eredendõ nevû gyártó hozzáadása.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "manufacturer_id" elemet a legördülõ listában.</li><li>Adjon hozzá egy oszlopot a CSV fájlhoz a gyártó azonosítójával.</li></ol><br />Értékek:<ul><li>Numerikus</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_URL = 'A termék képének vagy weboldalának URL-je. Ha képre történik a hivatkozás, akkor a termékadatok lapon látható lesz a kép.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_url" elemet a legördülõ listában.</li><li>Adja hozzá szöveg értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg: A HTML-kd használata nem engedélyezett</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SALES = 'Az eladott termékek száma.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_sales" elemet a legördülõ listában.</li><li>Adja hozzá numerikus értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Numerikus</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SPECIAL = 'Ha egy terméknél bejelölte az "Akciós termék" lehetõséget, akkor kiemelésre kerül a Kiemelt termékek blokkban.<br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_special" elemet a legördülõ listában.</li><li>Adja hozzá az Y értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Y: Igen, a termék akciós termék</li><li>N: Nem, a termék nem akciós termék</li><li>Empty: Üres érték, nem akciós a termék</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_UNIT = 'A termék értékesítési egysége. Pl. doboz, zacskó, stb.<br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_unit" elemet a legördülõ listában.</li><li>Adja hozzá az Y értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg: HTML-kód használata nem engedélyezett</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CATEGORY_PATH = 'A szülõtermékek kategorizálása a kategória útvonala alapján történik. A kategória útvonala határozza meg, hogy melyik kategóriába tartozik a termék. Ez csak a fõtermékek esetén számít, a sarjtermékeknél nem, ugyanis a sarjtermékek a szülõtermékekhez kapcsolódnak, nem kategóriákhoz. Sarjtermékek esetén hagyja üresen ezt a mezõt. A product_parent_sku értéke üres legyen a fõtermékek esetében, mivel nem kapcsolódnak semmilyen másik termékhez.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "category_path" elemet a legördülõ listában.</li><li>Adja hozzá az útvonallal az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg: A HTML-kód használata nem engedélyezett<br />A kategória útvonalát perjellel (/) kell elválasztani. Pl.: Bútorok/Székek/Teak</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PARENT_SKU = 'A termék szülõ cikkszámára van szükség a sarjtermékek szülõinek beazonosítására. Megjegyzés: a "category_path" mezõnek üresnek KELL lennie, mert különben a terméket szülõtermékként fogja kezelni.<br />Használata:<ol><li>A Beállítások fülön válassza ki a "category_path" elemet a legördülõ listában.</li><li>Adja hozzá a szülõtermék cikkszámának értékével az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Numerikus</li><li>Betûk</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TAX_ID = 'A termék felszámítani kívánt adókulcs azonosítója<br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_tax_id" elemet a legördülõ listában.</li><li>Adja hozzá a megfelelõ adó product_tax_id értékével az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Numerikus</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_CURRENCY = 'Termékenkénti alapon eltérõ pénznem adható meg.<br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_currency" elemet a legördülõ listában.</li><li>Adja hozzá az új pénzenm értékével az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg: HTML-kód használata nem engedélyezett<br />Pl.: EUR, USD, HUF</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_BROWSEPAGE = 'Ez egy egyedi oldal a terméktípusok megjelenítéséhez. Hagyja ÜRESEN, ha nincs hozzá egyedi php fájl.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_type_browsepage" elemet a legördülõ listában.</li><li>Adja hozzá szöveg értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg:<ul><li>HTML-kód használata nem engedélyezett</li><li>URL-ek használhatók.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_DESCRIPTION = 'A terméktípus leírása.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_type_description" elemet a legördülõ listában.</li><li>Adja hozzá szöveg értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg: HTML-kód használata nem engedélyezett</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_FLYPAGE = 'Ez egy egyedi oldal a terméktípusok megjelenítéséhez. Hagyja ÜRESEN, ha nincs hozzá egyedi php fájl.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_type_flypage" elemet a legördülõ listában.</li><li>Adja hozzá szöveg értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg:<ul><li>HTML-kód használata nem engedélyezett</li><li>URL-ek használhatók.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_NAME = 'A terméktípus neve. Ennek a névnek egyedinek kell lennie, szóközök nélkül.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_type_name" elemet a legördülõ listában.</li><li>Adja hozzá szöveg értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg: HTML-kód használata nem engedélyezett</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DEFAULT = 'Egy megjelenítendõ alapértelmezett érték, amikor nincs semmi más kitöltve a paraméterhez.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_type_parameter_default" elemet a legördülõ listában.</li><li>Adja hozzá szöveg értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg: HTML-kód használata nem engedélyezett </li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DESCRIPTION = 'A terméktípus paraméterének leírása.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_type_parameter_description" elemet a legördülõ listában.</li><li>Adja hozzá szöveg értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg: HTML-kód használata engedélyezett</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LABEL = 'A terméktípus paraméterének címkéje.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_type_parameter_label" elemet a legördülõ listában.</li><li>Adja hozzá szöveg értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg: HTML-kód használata nem engedélyezett</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LIST_ORDER = 'Határozza meg, hogy milyen sorrendben legyen látható a termék paramétere.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_type_parameter_list_order" elemet a legördülõ listában.</li><li>Adja hozzá szöveg értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Numerikus</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_MULTISELECT = 'Állítsa igenre a lehetséges paraméterértékek többszörösen választható elemekként történõ megjelenítéséhez<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_type_parameter_list_multiselect" elemet a legördülõ listában.</li><li>Adja hozzá Y vagy N értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Y: Igen, az értékek többszörösen kijelölhetõk</li><li>N: Nem, az értékek nem jelölhetõk ki többszörösen</li><li>Empty: Üres érték, az értékek nem jelölhetõk ki többszörösen</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_NAME = 'A terméktípus paraméterének neve. Ennek a névnek egyedinek kell lennie, szóközök nélkül, mivel ez lesz a paraméter részleteinek oszlopneve.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_type_parameter_type" elemet a legördülõ listában.</li><li>Adja hozzá szöveg értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg: HTML-kód használata nem engedélyezett</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_TYPE = 'Ez határozza meg a felhasználandó paraméter típusát. Számos különféle használható érték van.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_type_parameter_type" elemet a legördülõ listában.</li><li>Adja hozzá az értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg:<ul>
													<li>I: Egész szám</li>
													<li>T: Szöveg</li>
													<li>S: Rövid szöveg</li>
													<li>F: Lebegõ</li>
													<li>C: Karakter</li>
													<li>D: Dátum és idõpont</li>
													<li>M: Idõ</li>
													<li>V: Többféle érték</li>
													<li>B: Sortörés</li>
													</ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_UNIT = 'Az egység, amire a terméktípus paramétere hivatkozik.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_type_parameter_unit" elemet a legördülõ listában.</li><li>Adja hozzá szöveg értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Szöveg: HTML-kód használata nem engedélyezett</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_VALUES = 'Ezek a paraméter értékei, és meg kell felelniük a paramétertípus által felállított követelménynek.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_type_parameter_values" elemet a legördülõ listában.</li><li>Adja hozzá szöveg értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Ez a product_type_parameter_type mezõben megadott típustól függ. Valamennyi értéket pontosvesszõvel (;) kell elválasztani.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PUBLISH = 'A terméktípus közzétételének állapota.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "product_type_publish" elemet a legördülõ listában.</li><li>Adja hozzá szöveg értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek:<ul><li>Y: Igen, a terméktípus közzé van téve</li><li>N: Nem, a terméktípus nincs közzétéve</li><li>Empty: Üres érték, a terméktípus közzé van téve.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_DELETE = 'A price_delete mezõ egy speciális mezõ. Ez a mezõ kerül felhasználásra annak megállapítására, hogy törölni kell-e egy termék árát. Ez a mezõ kerül felhasználásra többféle ár feltöltésekor. Mielõtt egy ár törlésre kerül, meg kell felelnie a következõ mezõknek:<ul><li>product_sku</li><li>product_price</li><li>product_currency</li><li>price_quantity_start</li><li>price_quantity_end</li></ul><br />Használata:<ol><li>A Beállítások fülön válassza ki a "price_delete" elemet a legördülõ listában.</li><li>Adja hozzá az Y értékkel az oszlopot a CSV fájlhoz. Ha a mezõ másik értéket tartalmaz, akkor a termék nem kerül törlésre.</li></ol><br />Értékek:<ul><li>Y: Igen, az ár törölhetõ</li><li>N: Nem, az ár nem törölhetõ</li><li>Empty: Üres érték, az ár nem törölhetõ</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_START = 'A mennyiség, amelynél az említett ár elérhetõ.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "price_quantity_start" elemet a legördülõ listában.</li><li>Adja hozzá numerikus értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek: Numerikus</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_END = 'A mennyiség, amelynél az említett ár már nem elérhetõ.<br /><br />Használata:<ol><li>A Beállítások fülön válassza ki a "price_quantity_end" elemet a legördülõ listában.</li><li>Adja hozzá numerikus értékkel az oszlopot a CSV fájlhoz.</li></ol><br />Értékek: Numerikus</li></ul>';
	var $_VM_UPDATE_STATUS = 'Update Status';
	var $_PRODUCT_WAITING_LIST_EMAIL_SUBJECT = '%s Has Arrived!';
	var $_PRODUCT_WAITING_LIST_EMAIL_TEXT = 'Thank you for your patience.

Our %s  is now in stock and can be purchased by following this link:
%s

 This is a one time notice, you will not receive this e-mail again.';
        
}
class phpShopLanguage extends vmLanguage { }
/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>