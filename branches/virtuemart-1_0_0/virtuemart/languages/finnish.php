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
	var $_PHPSHOP_MENU = 'Valikko';
	var $_PHPSHOP_CATEGORY = 'Kategoria';
	var $_PHPSHOP_CATEGORIES = 'Kategoriat';
	var $_PHPSHOP_SELECT_CATEGORY = 'Valitse kategoria:';
	var $_PHPSHOP_ADMIN = 'Hallinta';
	var $_PHPSHOP_PRODUCT = 'Tuote';
	var $_PHPSHOP_LIST = 'Luettelo';
	var $_PHPSHOP_ALL = 'Kaikki';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'N�yt� kaikki tuotteet';
	var $_PHPSHOP_VIEW = 'Katso';
	var $_PHPSHOP_SHOW = 'N�yt�';
	var $_PHPSHOP_ADD = 'Lis��';
	var $_PHPSHOP_UPDATE = 'P�ivit�';
	var $_PHPSHOP_DELETE = 'Poista';
	var $_PHPSHOP_SELECT = 'Valitse';
	var $_PHPSHOP_SUBMIT = 'Lis��';
	var $_PHPSHOP_RANDOM = 'N�yteikkunassa';
	var $_PHPSHOP_LATEST = 'Uusimmat tuotteet';
	var $_PHPSHOP_HOME_TITLE = 'Etusivu';
	var $_PHPSHOP_CART_TITLE = 'Ostoskori';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Osta tuotteet';
	var $_PHPSHOP_LOGIN_TITLE = 'Kirjaudu sis��n';
	var $_PHPSHOP_LOGOUT_TITLE = 'Kirjaudu ulos';
	var $_PHPSHOP_BROWSE_TITLE = 'Selaa';
	var $_PHPSHOP_SEARCH_TITLE = 'Etsi';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Tilin Yll�pito';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Navigaatio';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Osasto';
	var $_PHPSHOP_INFO = 'Informaatio';
	var $_PHPSHOP_BROWSE_LBL = 'Selaa';
	var $_PHPSHOP_PRODUCTS_LBL = 'Tuotteet';
	var $_PHPSHOP_PRODUCT_LBL = 'Tuote';
	var $_PHPSHOP_SEARCH_LBL = 'Etsi';
	var $_PHPSHOP_FLYPAGE_LBL = 'Tuotekuvaus';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Tuotehaku';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Tuotenimi';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Tuoteryhm�';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Tuotekuvaus';
	var $_PHPSHOP_CART_SHOW = 'N�yt� ostoskori';
	var $_PHPSHOP_CART_ADD_TO = 'Lis�� koriin';
	var $_PHPSHOP_CART_NAME = 'Nimi';
	var $_PHPSHOP_CART_SKU = 'Tuotetunnus';
	var $_PHPSHOP_CART_PRICE = 'Hinta';
	var $_PHPSHOP_CART_QUANTITY = 'M��r�';
	var $_PHPSHOP_CART_SUBTOTAL = 'V�lisumma';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Lis�� uusi';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'L�hetysosoite';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Hakusi tuotti 0 tulosta.<BR>';
	var $_PHPSHOP_PRICE_LABEL = 'Hinta: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Tilaa';
	var $_PHPSHOP_NO_CUSTOMER = 'Et ole rekister�itynyt asiakas.<BR>Sinun t�ytyy rekister�ity� ensin.';
	var $_PHPSHOP_DELETE_MSG = 'Haluatko varmasti poistaa t�m�n kohteen?';
	var $_PHPSHOP_THANKYOU = 'Kiitos tilauksesta.';
	var $_PHPSHOP_NOT_SHIPPED = 'L�hett�m�t�n';
	var $_PHPSHOP_EMAIL_SENDTO = 'Vahvistus on l�hetetty s�hk�postilla';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Ei ole Mos/Joomla � k�ytt�j�, jonka voisit lis�t� VirtueMart k�ytt�j�luetteloon';
	var $_PHPSHOP_ERROR = 'VIRHE';
	var $_PHPSHOP_MOD_NOT_REG = 'Moduulia ei ole rekister�ity.';
	var $_PHPSHOP_MOD_ISNO_REG = 'ei ole k�yp� VirtueMart moduuli.';
	var $_PHPSHOP_MOD_NO_AUTH = 'Sinulla ei ole oikeuksia pyydettyyn moduuliin.';
	var $_PHPSHOP_PAGE_404_1 = 'Sivua ei l�ydy';
	var $_PHPSHOP_PAGE_404_2 = 'Annetua tiedostonime� ei l�ydy:';
	var $_PHPSHOP_PAGE_403 = 'Ei tarvittavia oikeuksia';
	var $_PHPSHOP_FUNC_NO_EXEC = 'Sinulla ei ole oikeusia suorittaa';
	var $_PHPSHOP_FUNC_NOT_REG = 'Toimintoa ei ole rekister�ity';
	var $_PHPSHOP_FUNC_ISNO_REG = ' ei ole k�yp� VirtueMart toiminto.';
	var $_PHPSHOP_ADMIN_MOD = 'Hallinta';
	var $_PHPSHOP_USER_LIST_MNU = 'Luettele k�ytt�j�t';
	var $_PHPSHOP_USER_LIST_LBL = 'K�ytt�j�luettelo';
	var $_PHPSHOP_USER_LIST_USERNAME = 'K�ytt�j�nimi';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Koko nimi';
	var $_PHPSHOP_USER_LIST_GROUP = 'Ryhm�';
	var $_PHPSHOP_USER_FORM_MNU = 'Lis�� k�ytt�j�';
	var $_PHPSHOP_USER_FORM_LBL = 'Lis��/P�ivit� k�ytt�j�tiedot';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Laskutustiedot';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'L�hetysosoitteet';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Lis�� osoite';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'Ei l�hetysosoitteita.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Osoitelappu';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Etunimi';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Sukunimi';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Toinen nimi';
	var $_PHPSHOP_USER_FORM_TITLE = 'Titteli';
	var $_PHPSHOP_USER_FORM_USERNAME = 'K�ytt�j�nimi';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Salasana';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Vahvista salasana';
	var $_PHPSHOP_USER_FORM_PERMS = 'Oikeudet';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Asiakas numero / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Yrityksen nimi';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'L�hiosoite';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'L�hiosoite 2.rivi';
	var $_PHPSHOP_USER_FORM_CITY = 'Postitoimipaikka';
	var $_PHPSHOP_USER_FORM_STATE = 'Osavaltio/Alue';
	var $_PHPSHOP_USER_FORM_ZIP = 'Postinumero';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Maa';
	var $_PHPSHOP_USER_FORM_PHONE = 'Puhelin';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Matkapuhelin';
	var $_PHPSHOP_USER_FORM_FAX = 'Faksi';
	var $_PHPSHOP_USER_FORM_EMAIL = 'S�hk�posti';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Luettele moduulit';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Moduuliluettelo';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Moduulin nimi';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Moduulin oikeudet';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Toiminnot';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Luetteloj�rjestys';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Lis�� moduuli';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Moduuli Informaatio';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Moduulin nimi (Yl�valikkoon)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Moduulin nimi';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Moduulin oikeudet';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Moduulin Header';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Moduulin Footer';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Moduulivalikko?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'N�yt� j�rjestys';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Moduulin kuvaus';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'Kielen koodi';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Kielitiedosto';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Luettele toiminnot';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Toimintoluettelo';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Toiminnon nimi';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Luokan nimi';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Luokitustapa';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Oikeudet';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Lis�� toiminto';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Toiminnon tiedot';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Toiminnon nimi';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Luokan nimi';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = ' Luokitustapa';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Toiminon oikeudet';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Toiminnon kuvaus';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Luettele valuutat';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Valuuttaluettelo';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'Lis�� valuutta';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Valuutan nimi';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'Valuutan koodi';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Luettele maat';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Maaluettelo';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Lis�� maa';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Maan nimi';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Maan koodi (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Maan koodi (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Luettele osavaltiot';
	var $_PHPSHOP_STATE_LIST_LBL = 'Osavaltiot: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Lis��/p�ivit� osavaltio';
	var $_PHPSHOP_STATE_LIST_NAME = 'Osavaltion nimi';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'Osavaltion koodi (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'Osavaltion koodi (2)';
	var $_PHPSHOP_ADDRESS = 'Osoite';
	var $_PHPSHOP_CONTINUE = 'Jatka';
	var $_PHPSHOP_EMPTY_CART = 'Ostoskorisi on tyhj�.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Pingaa InterShipper Serveri�';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'InterShipper-Server pingaus';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'InterShipper pingaus ep�onnistui';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'InterShipper pingaus Onnistui';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Huolitsija';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Vastaus<BR>aika';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'sek.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Luettele l�hetystavat';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Toimivat l�hetystavat';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = ' L�hetystavat';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Toimiva';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'K�sittelymaksu';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Toimitusaika';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'kiinte� kurssi';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'prosenttia';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'p�iv��';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Raskaat lastit';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'M��rit� l�hetystavat';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Lis�� l�hetystapa';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'M��rit� l�hetystapa';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Virkist�';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'L�hetystapa';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Aktivoi';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'K�sittelykulut';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Toimitusaika';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'kiinte� kurssi';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'prosentti';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'p�iv��';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = ' Raskaat Lastit';
	var $_PHPSHOP_ORDER_MOD = 'Tilaus';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Vahvista tilaus';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Peruuta tilaus';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Tulosta tilaus';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Poista tilaus';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Luettele tilaukset';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Tuoteluettelo';
	var $_PHPSHOP_ORDER_LIST_ID = 'Tilausnumero';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Tilausp�iv�';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Viimeeksi muokattu';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Tila';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'V�lisumma';
	var $_PHPSHOP_ORDER_ITEM = 'Tilaustuotteet';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Tilaus';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Tilausnumero';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Tilausp�iv�';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Tilauksen tila';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Asiakastiedot';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Laskutustiedot';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'L�hetystiedot';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Laskutettava: ';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Vastaanottaja';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Nimi';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Yritys/yhdistys';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'L�hiosoite';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'L�hiosoite 2.rivi';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Postitoimipaikka';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Osavaltio/Alue';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'Postinumero';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Maa';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Puhelin';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Faksi';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'S�hk�postiosoite';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Tilatut tuotteet';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'M��r�';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Kpl';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'Tuotetunnus';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Hinta';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Summa';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'V�lisumma';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'Alv osuus';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Huolinta';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Huolinnan vero';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Maksutapa';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Tilin nimi';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Tilin numero';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Voimassaoloaika';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Maksuloki';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'L�hetystiedot';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Maksutiedot';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Huolitsija';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Huolintatapa';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Huolintap�iv�';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Huolintakulut';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Luettele tilauksen tilatyypit';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Lis�� tilauksen tilayyppi';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Tilauksen tilan koodi';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Tilauksen tilan nimi';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Tilauksen tila';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Tilauksen tilan koodi';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Tilauksen tilan nimi';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Luettele tilaukset';
	var $_PHPSHOP_PRODUCT_MOD = 'Tuotteet';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Nykyinen tuote';
	var $_PHPSHOP_CURRENT_ITEM = 'Nykyinen artikkeli';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Tuoteinventaario';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Katso inventaario';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Hinta';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Numero';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Paino';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Luettele tuotteet';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Tuoteluettelo';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Tuotenimi';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'Tuotetunnus';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Julkaise';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Etsi tuote';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'muokattu';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'muokattu hinta';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'ilman hintaa';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'J�lkeen';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Ennen';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Lis�� tuote';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Muokaa tuotetta';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Katso tuotetta kaupan sivulla';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Lis�� artikkeli';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Lis�� toinen artikkeli';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Uusi tuote';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'P�ivit� tuote';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Tuotetiedot';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Tuotteen tila';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Tuotteen mitat ja paino';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Tuotekuvat';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Uusi artikkeli';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'P�ivit� artikkeli';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Artikkelin tiedot';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Artikkelin tila';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Artikkelin mitat ja paino';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Artikkelin kuvat';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Palaa p��tuoteeseen';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'P�ivitt��ksesi varsinaista kuvaa, sy�t� polku uuteen kuvaan.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Sy�t� "none" poistaaksesi nykyisen kuvan.';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Tuoteartikkelit';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Artikkelin ominaisuudet';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Oletko varma ett� haluat poistaa t�m�n tuotteen\\nja siihen liittyv�t artikkelit?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Oletko varma ett� haluat poistaa t�m�n artikkelin?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Myyj�';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Valmistaja';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'Tuotetunnus';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Nimi';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Kategoria';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'V�hitt�ishinta';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Veroton hinta';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Tuotteen kuvaus';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Lyhyt kuvaus';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'Varastossa';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'Tilauksessa';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Saatavuusp�iv�';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'Tarjouksessa';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Alennustyyppi';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Julkaise?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Pituus';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Leveys';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Korkeus';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Mittayksikk�';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Paino';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Mittayksikk�';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'N�ytekuva';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Iso kuva';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'grammaa';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'millimetri�';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Yksikk��';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'esim.10';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Kpl. pakkauksessa';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Voit m��ritt�� kuinka monta kappaletta on pakkauksessa. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Pakkausta laatikossa';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Voit m��ritt�� pakkausm��r�n laatikossa. (max. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Tuotteen lis�ystulokset';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Tuotteen p�ivitystulokset';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Artikkelin lis�ystulokset';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Artikkelin p�ivitystulokset';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'K�yt� CSV latausta';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Tuotekansiot';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Luettele kategoriat';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Kategorialista';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Lis�� kategoria';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Kategorian tiedot';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Kategorian nimi';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'P��kategoria';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Kategorian kuvaus';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Julkaise?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Kategorian sivu';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Luettele ominaisuudet';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Ominaisuuslista:';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Ominaisuuden nimi';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Luettele tilaukset';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Lis�� ominaisuus';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Ominaisuuslomake';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Uusi ominaisuus tuotteelle';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'P�ivit� tuotteen ominaisuus';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Uusi ominaisuus artikkelille';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'P�ivit� artikkelin ominaisuus';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Ominaisuuden nimi';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Luettele tilaukset';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Luettele kategoriat';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Hinta *puu*';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Hinta: ';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Ryhm�n nimi';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Hinta';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Valuutta';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Lis�� Hinta';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Hinnan tiedot';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Uusi hinta tuotteelle';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'P�ivit� tuotteen hinta';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Uusi hinta';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'P�ivit� artikkelin hinta';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Hinta';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Valuutta';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Ostajaryhm�';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Perusraportti';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Yksil�lliset tuoteluettelot';
	var $_PHPSHOP_RB_SALE_TITLE = 'Myyntiraportti';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Myyntiaktiviteetti';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Aseta aikav�li';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Kuukausittain';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Viikottain';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'P�ivitt�in';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'T�ss� kuussa';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'Viime kuussa';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'Viimeiset 60 p�iv��';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'Viimeiset 90 p�iv��';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Aloita: ';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Lopeta: ';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'N�yt� valittu alue';
	var $_PHPSHOP_RB_REPORT_FOR = 'Raportti:  ';
	var $_PHPSHOP_RB_DATE = 'P�iv�';
	var $_PHPSHOP_RB_ORDERS = 'Tilaukset';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Kaikki myydyt artikkelit';
	var $_PHPSHOP_RB_REVENUE = 'Tulot';
	var $_PHPSHOP_RB_PRODLIST = 'Tuoteluettelo';
	var $_PHPSHOP_SHOP_MOD = 'Kauppa';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'N�ytekuva';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Hinta';
	var $_PHPSHOP_ORDER_STATUS_P = 'Ratkaisematon';
	var $_PHPSHOP_ORDER_STATUS_C = 'Vahvistettu';
	var $_PHPSHOP_ORDER_STATUS_X = 'Peruutettu';
	var $_PHPSHOP_ORDER_BUTTON = 'Tilaus';
	var $_PHPSHOP_SHOPPER_MOD = 'Ostaja';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Luettele ostajat';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Ostajaluettelo';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'K�ytt�j�nimi';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Koko nimi';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Ryhm�';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Lis�� ostaja';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Ostajan tiedot';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Laskutustiedot';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Osoitetiedot';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'L�hetystiedot';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Lis�� osoite';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Osoite nimike';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'K�ytt�j�nimi';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Etunimi';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Sukunimi';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Toinen nimi';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Titteli';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Ostajan nimi';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Salasana';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Vahvista salasana';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Ostajaryhm�';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Yrityksen nimi';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'L�hiosoite';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'L�hiosoite 2.rivi';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Postitoimipaikka';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Osavaltio/Alue';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'Postinumero';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Maa';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Puhelin';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Matkapuhelin';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Faksi';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'S�hk�posti';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Kyll�';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'Ei';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Luettele ostajaryhm�t';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Ostajaryhm�luettelo';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Ryhm�n nimi';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Ryhm�n kuvaus';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Ostajaryhm�lomake';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Lis�� ostajaryhm�';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Ryhm�n nimi';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Ryhm�n kuvaus';
	var $_PHPSHOP_STORE_MOD = 'Kauppa';
	var $_PHPSHOP_STORE_FORM_MNU = 'Muokaa kauppaa';
	var $_PHPSHOP_STORE_FORM_LBL = 'Kaupan tiedot';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Yhteystiedot';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Iso kuva';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Lataa kuva';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Kaupan nimi';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Kaupan yritysnimi';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'L�hiosoite';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'L�hiosoite 2.rivi';
	var $_PHPSHOP_STORE_FORM_CITY = 'Postitoimipaikka';
	var $_PHPSHOP_STORE_FORM_STATE = 'Osavaltio/Alue';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Maa';
	var $_PHPSHOP_STORE_FORM_ZIP = 'Postinumero';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Puhelin';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Valuutta';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Kauppakategoria';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Sukunimi';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Etunimi';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Toinen nimi';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Titteli';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Puhelin 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Puhelin 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Faksi';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'S�hk�posti';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Kuvan polku';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Kuvaus';
	var $_PHPSHOP_PAYMENT = 'Maksu';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Luettele maksutavat';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Maksutapaluettelo';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Nimi';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Koodi';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Alennus';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Ostajaryhm�';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Cybercash';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Lis�� maksutapa ';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Maksutapalomake';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Maksulomakkeen nimi';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Ostajaryhm�';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Alennus';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Koodi';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Luettele tilaukset';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'K�yt� Cybercash';
	var $_PHPSHOP_TAX_MOD = 'Alv';
	var $_PHPSHOP_TAX_RATE = 'Veroprosentit';
	var $_PHPSHOP_TAX_LIST_MNU = 'Luettele veroprosentit';
	var $_PHPSHOP_TAX_LIST_LBL = 'Veroprosenttiluettelo';
	var $_PHPSHOP_TAX_LIST_STATE = 'Osavaltion tai alueen vero';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Maakohtainen vero';
	var $_PHPSHOP_TAX_LIST_RATE = 'Veroprosentti';
	var $_PHPSHOP_TAX_FORM_MNU = 'Lis�� veroprosentti';
	var $_PHPSHOP_TAX_FORM_LBL = 'Lis�� veron tiedot';
	var $_PHPSHOP_TAX_FORM_STATE = 'Osavaltion tai alueen vero';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Maakohtainen vero';
	var $_PHPSHOP_TAX_FORM_RATE = 'Veroprosentti';
	var $_PHPSHOP_VENDOR_MOD = 'Myyj�';
	var $_PHPSHOP_VENDOR_ADMIN = 'Myyj�t';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Luettele myyj�t';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Myyj�luettelo';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Myyj�n nimi';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Yll�pit�j�';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Lis�� myyj�';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Lis�� tiedot';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Myyj�n tiedot';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Yhteystiedot';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Iso kuva';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Lataa kuva';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Myyj�n kaupan nimi';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Myyj�n yrityksen nimi';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'L�hiosoite';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'L�hiosoite 2.rivi';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Postitoimipaikka';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Osavaltio/Alue';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Maa';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'Postinumero';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Puhelin';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Valuutta';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Myyj�n kategoria';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Sukunimi';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Etunimi';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Toinen nimi';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Titteli';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Puhelin 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Puhelin 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Faksi';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'S�hk�posti';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Kuvan polku';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Kuvaus';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Luettele<BR>myyj�<BR>kategoriat';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Myyj�n kategorialuettelo';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Kategorian nimi';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Kategorian kuvaus';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Myyj�t';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Lis��<BR>myyj�<BR>kategoria';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Myyj�n kategorialomake';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Kategorian tiedot';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Kategorian nimi';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Kategorian kuvaus';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Valmistaja';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Valmistajat';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Luettele valmistajat';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Valmistajaluettelo';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Valmistajan nimi';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Admin';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'Lis�� valmistaja';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Lis�� tiedot';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Valmistajan tiedot';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Valmistajan nimi';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Valmistajan kategoria';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'S�hk�posti';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'URL - valmistajan kotisivuille';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Kuvaus';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Luettelo valmistajakategorioista';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Valmistajakategorialuettelo';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Kategorian nimi';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Kategorian kuvaus';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Valmistajat';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Lis�� valmistajakategoria';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Valmistajan kategorialomake';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Kategorian tiedot';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Kategorian nimi';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Kategorian kuvaus';
	var $_PHPSHOP_HELP_MOD = 'Ohje';
	var $_PHPSHOP_CART_ACTION = 'Toiminnot';
	var $_PHPSHOP_CART_UPDATE = 'P�ivit�';
	var $_PHPSHOP_CART_DELETE = 'Poista';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Hinta';
	var $_PHPSHOP_PRODUCT_CALL = 'Kysy hinta';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Edellinen';
	var $_PHPSHOP_PRODUCT_NEXT = 'Seuraava';
	var $_PHPSHOP_CART_TAX = 'Vero';
	var $_PHPSHOP_CART_SHIPPING = 'Huolinta';
	var $_PHPSHOP_CART_TOTAL = 'Summa';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Seuraava';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'REKISTER�I';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Laskutustiedot';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Yritys';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Nimi';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Osoite';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Puhelin';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Faksi';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'S�hk�posti';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Huolintatiedot';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Yritys';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Nimi';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Osoite';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Puhelin';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Faksi';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Maksutiedot';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Kortinhaltijan nimi';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Maksutapa';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Luottokortin numero';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Voimassaoloaika';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Vahvista tilaus';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'Tiedot luottokortilla maksettaessa';
	var $_PHPSHOP_ZONE_MOD = 'Vy�hyke huolinta';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Luettele vy�hykkeet';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Lis�� vy�hyke';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'M��r�� vy�hyke';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Maa';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Nykyinen vy�hyke';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'M��r�� vy�hykkeeseen';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'P�ivit�';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'M��rit� vy�hykkeet';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Vy�hykkeen nimi';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Vy�hykkeen kuvaus';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Vy�hykkeen kustannus per artikkeli';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Vy�hykkeen kustannusraja';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Vy�hykeluettelo';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Vy�hykkeen nimi';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Vy�hykkeen kuvaus';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Vy�hykkeen kustannus per artikkeli';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Vy�hykkeen kustannusraja';
	var $_PHPSHOP_LOGIN_FIRST = 'Kirjaudu sis��n tai rekister�idy ensin. <br>Kiitos.';
	var $_PHPSHOP_STORE_FORM_TOS = 'Palvelun ehdot';
	var $_PHPSHOP_AGREE_TO_TOS = 'Hyv�ksy palvelun ehdot ensin.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Hyv�ksyn palvelun ehdot';
	var $_PHPSHOP_LEAVE_BLANK = '(j�t� tyhj�ksi , jos sinulla ei ole <br />yksil�llist� php-tiedostoa!)';
	var $_PHPSHOP_RETURN_LOGIN = 'Rekister�itynyt asiakas: Kirjaudu sis��n';
	var $_PHPSHOP_NEW_CUSTOMER = 'Uusi asiakas? Anna laskutus tiedot';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Asiakastiedot:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Tilaustiedot';
	var $_PHPSHOP_ACC_UPD_BILL = 'T�ss� voit p�ivitt�� laskutustiedot.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'T�ss� voit lis�t� ja muuttaa l�hetystietoja.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Asiakastiedot';
	var $_PHPSHOP_ACC_SHIP_INFO = 'L�hetystiedot';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Ei tilauksia';
	var $_PHPSHOP_ACC_BILL_DEF = '- Oletus (samat kuin laskutustiedot)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Voit lis�t� l�hetysosoitteita asiakastietoihin. Keksi sopiva kutsumanimi tai koodi, t�lle l�hetysosoitteelle.';
	var $_PHPSHOP_CONFIG = 'Asetukset';
	var $_PHPSHOP_USERS = 'K�ytt�j�t';
	var $_PHPSHOP_IS_CC_PAYMENT = 'luottokorttimaksu?';
	var $_PHPSHOP_SHIPPING_MOD = 'Huolinnan hallinta';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Huolinta';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Huolitsija';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Huolitsijaluettelo';
	var $_PHPSHOP_RATE_LIST_MNU = 'Rahtitariffi';
	var $_PHPSHOP_RATE_LIST_LBL = 'Tariffiluettelo';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Nimi';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Luetteloj�rjestys';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Luo huolitsija';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Muokkaa/luo huolitsija';
	var $_PHPSHOP_RATE_FORM_MNU = 'Luo tariffi';
	var $_PHPSHOP_RATE_FORM_LBL = 'Muokkaa/luo tariffi';
	var $_PHPSHOP_RATE_FORM_NAME = 'Tariffin kuvaus';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Huolitsija';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Maa<br>Monivalitse, k�yt� Ctrl-nappia ja hiirt�';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'Postinumeroalue alkaa';
	var $_PHPSHOP_RATE_FORM_ZIP_END = ' Postinumeroalue loppuu';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Pienin paino';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Suurin paino';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Maksu';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Pakkausmaksu';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Valuutta';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'ALV-tunnus';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Luetteloj�rjestys';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Huolitsija';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Tariffin kuvaus';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Paino alkaen ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... asti';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Huolinta Yritys';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = ' Luetteloj�rjestys ';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'VIRHE: Huolitsijatunnus on olemassa.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'VIRHE: Valitse huolitsija.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'VIRHE: Ainakin yksi rahtitariffi on olemassa, poista tariffit ennen huolitsijaa';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'VIRHE: T�ll� tunnuksella ei l�ydy huolitsijaa.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'VIRHE: Valitse huolitsija.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'VIRHE: T�ll� tunnuksella ei l�ydy huolitsijaa.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'VIRHE: Tariffikuvausta pyydettiin.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'VIRHE: Kohdemaa on ep�kelpo. Enemm�n kuin yksi maa voidaan jakaa seuraavasti \';\'.';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'VIRHE: Pienint� painoa pyydettiin';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'VIRHE: Suurinta painoa pyydettiin';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'VIRHE: Pienin paino t�ytyy olla pienempi kuin suurin paino';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'VIRHE: Huolintamaksu pyydetty';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'VIRHE: Valitse valuutta';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'VIRHE: Tariffi pyydetty';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Valitse';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Huolitsija';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Tariffi';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Hinta';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-eimit��n-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Luottokortti';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'K�yt� maksuk�sittelij��';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Pankkikortti';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Vain osoite';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Valitse vastaanottajan osoite!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Valitse l�hetystapa!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Valitse maksutapa!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Tarkasta tiedot ja vahvista tilaus!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = ' Valitse l�hetystapa.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = ' Valitse toinen l�hetystapa.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = ' Valitse maksutapa.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Sy�t� luottokortisi numero.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Sy�t� luottokortissa oleva nimi.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'Sy�tetty luottokortti numero ei ole voimassa.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Sy�t� luottokortin voimassaolo kuukausi.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Sy�t� luottokortin voimassaolo vuosi.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'Voimassaoloaika on virheellinen.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Valitse toimitusosoite.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Virheellinen tilinumero.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'Ostoskorisi on tyhj�!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'VIRHE: Valitse huolitsija!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'VIRHE: Valittua tariffia ei l�ydetty!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'VIRHE: Toimitusosoitettasi ei l�ydetty!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'VIRHE: Ei ole luottokorttitietoja... ';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'VIRHE: Luottokorttinumeroa ei l�ydy!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Pahoittelen, k�ytt�m�si luottokorttinnumero on testinumero!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'K�ytt�j�tunnusta ei l�ytynyt tietokannasta!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Et ole antanut pankkitilisi haltijanime�.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Et ole antanut IBAN tunnustasi.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Et ole antanut pankkitilisi numeroa.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Et ole antanut pankkikoodia.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Et ole antanut pankkisi nime�.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Tilauksen seuraava vaihe v��r�!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Maksutiedot tallennettu k�sittely� varten.<BR>';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Ostosten alarajaa ei ole viel� saavutettu.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'Ostosten alaraja on:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Luottokorttimaksu';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'Muut maksutavat';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Valitse maksutapa:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Ostosten alaraja kaupallesi';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Pankkitilitiedot';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Tilinumero';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'Pankkikoodi';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Pankin nimi';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Tilin haltija';
	var $_PHPSHOP_MODULES = 'Moduulit';
	var $_PHPSHOP_FUNCTIONS = 'Toiminnot';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Alennustuotteet';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Voit j�tt�� meille my�s viestin, tilauksesi yhteydess�';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Asiakkaan viesti';
	var $_PHPSHOP_INCLUDING_TAX = '(sis. $tax % alv)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Valitse artikkeli';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Artikkeli';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Latausalue';
	var $_PHPSHOP_DOWNLOADS_START = 'Aloita lataus';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Sy�ta s�hk�postissa saamasi lataus-ID ja paina \'Aloita Lataus\'.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Latauksesi on vanhentunut';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Kaikki latauskertasi on k�ytetty';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Ep�kelpo lataus-ID!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Viesti� ei voitu l�hett�� vastaanottajalle: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Viesti l�hetetty vastaanottajalle: ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Lataustiedot';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'tilaamasi tiedosto(t) ovat valmiita ladattavaksi';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Sy�t� seuraavat lataus-ID(t) latausalueellemme: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'maksimilatauskerrat jokaiselle tiedostolle on: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Lataus voimassa {expire} p�iv�� ensimm�isen latauksen j�lkeen';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Kysymyksi�? Ongelmia?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Lataustiedon toimitti ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'Ladattava tuote?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Kiitos maksusta. Suoritus onnistui. Maksuvahvistus tulee s�hk�postilla PayPal:ista. Voit nyt jatkaa tai kirjautua sis��n <a href=http://www.paypal.com>www.paypal.com</a> n�hd�ksesi maksutiedot.';
	var $_PHPSHOP_PAYPAL_ERROR = 'Suorituksesi k�sittelyn aikana tapahtui VIRHE. Tilauksesi tilaa ei voitu p�ivitt��.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Kiitos tilauksesta.  Ohessa tiedot tilauksestasi.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Kiitos tilauksestasi.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Kysymyksi�? Ongelmia?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'Seuraava tilaus on vastaanotettu.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Katso tilausta seuraamalla allaolevaa linkki�.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Negatiiviset m��r�t eiv�t ole sallittuja.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Sy�t� oikea m��r� t�lle tuotteelle.';
	var $_PHPSHOP_CART_STOCK_1 = 'Valittu m��r� ylitt�� varastom��r�n.';
	var $_PHPSHOP_CART_STOCK_2 = 'T�ll� hetkell� $product_in_stock tuotetta saatavilla.';
	var $_PHPSHOP_CART_STOCK_3 = 'Paina t�st� jos haluat jonotuslistalle.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Valitse erikoistuote yksityiskohtaiselta sivulta!';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'Ei mit��n';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Herra';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Rouva';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Tri';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof';
	var $_PHPSHOP_DEFAULT = 'Oletus';
	var $_PHPSHOP_AFFILIATE_MOD = 'Filiaalien hallinta';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Luettele filiaalit';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Filiaaliluettelo';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Filiaalin nimi';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Aktiivi';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Taksa';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Kuukausi yhteens�';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Kuukauden komissio';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Luettele tilaukset';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'Email Filiaalit';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'Email Filiaalit';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'Kenelle Email(* = ALL)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Sinun Email';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Aihe';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Sis�llyt� t�m�nhetkinen tilasto ';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Komissiotaksa';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Aktiivi?';
	var $_PHPSHOP_DELIVERY_TIME = 'Toimitusaika ';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Toimitustiedot';
	var $_PHPSHOP_MORE_CATEGORIES = 'more categories';
	var $_PHPSHOP_AVAILABILITY = 'Saatavuus';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'T�m� tuote ei ole t�ll� hetkell� saatavilla.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Saamme sit� varastoon uudestaan: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Yhteenveto';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Tilastot';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Asiakkaat';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'aktiivisia tuotteita';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'passiivisia tuotteita';
	var $_PHPSHOP_STATISTIC_SUM = 'Summa';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Uudet tilaukset';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Uudet asiakkaat';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Sy�t� email-osoitteesi, jos haluat tiedon tuotteen tulosta varastoon. Emme k�yt� tai luovuta antaamasi osoitetta mihink��n muuhun tarkoitukseen, kuin ilmoittaaksemme tuotteen saapumisesta varastoon.<br /><br />Kiitos!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Kiitos k�rsiv�llisyydest�! <br />Ilmoitamme heti, kun varastomme on t�ydentynyt.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Ilmoita minulle!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Tulosta n�kym�';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Valitse JOKO Authorize.net TAI CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' Asetustiedoston tila:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'Muokattavissa';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'Ei muokattavissa';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Yleisasetukset';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Polku & URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Sivusto';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'L�hetys';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Kassa';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Lataukset';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Maksut';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'K�yt� vain katalogina';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Jos valitset t�m�n, poistat kaikki ostoskorin toiminnot.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'N�yt� hinnat';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'N�yt� verolliset hinnat?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'M��rittelee haluatko n�ytt�� ostajille hinnat verolla vai et.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Valitse n�ytt��ksesi hinnat. K�ytt�ess��n katalogina, kaikki eiv�t halua n�ytt�� hintojaan sivuillaan.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Virtuaalivero';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'M��rittelee verotetaanko nollapainoiset tuotteet vai ei. Muokkaa ps_checkout.php->calc_order_taxable() sopivaksi.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Veron peruste:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'L�hetysosoite';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Saapumisosoite';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'M��rittelee veroprosentin laskettaessa veroa:<br /><ul><li>l�hett�j�n osavaltion / maan mukaan</li><br/><li>tai vastaanottajan sijainnin mukaan.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Mahdollista useampi veroprosentti?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Valitse t�m� jos sinulla on tuotteita johon sovelletaan eri veroprosentti (esim. 16% kirjoille ja 22% muille)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'V�henn� maksualennus ennen veroa/huolintaa?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Mahdollista asiakkaan tehd� arvostelu/pisteytys';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Jos valittu, asiakkaat voivat <strong>pisteytt��</strong> ja <strong>kirjoittaa arvosteluja</strong> tuotteista. <br />Asiakkaat voivat kirjoittaa kokemuksiaan tuotteista toisille asiakkaille.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Ilmaisee v�hennet��nk� alennus valitulle maksulle ENNEN (ruksattu) vai J�LKEEN veron ja rahdin.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Asiakkaat voivat j�tt�� pankkiyhteystiedot?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Valitse, jos haluat asiakkaasi voivan antaa pankkiyhteystietonsa rekister�ityess��n kauppaan.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Asiakkaat voivat valita osavaltion/alueen?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Valitse jos haluat asiakkaasi voivan valita osavaltion/alueen tiedot rekister�ityess��n kauppaan.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Kaupank�yntiehdot pit�� hyv�ksy�?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Valitse jos haluat asiakkaasi hyv�ksyv�n ehdot ennen rekister�itymist��n kauppaan.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Tarkista varasto?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Asettaa tarkastetaanko varastotilanne kun k�ytt�j� lis�� tuotteen ostoskoriin. Jos asetettu, est�� k�ytt�j�� lis��m�st� enemm�n tuotetteita kuin varastotilanne sallii.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Mahdollista filiaaliohjelma?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Mahdollistaa filiaalien seurannan kaupan etusivulla. Mahdollista, mik�li olet lis�nnyt filiaaleja hallintapuolelta (backend)..';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'S�hk�postitilauksen muoto:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Text mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'M��rittelee miten tilausvahvistuksen s�hk�posti l�hetet��n:<br /><ul><li>yksinkertainen teksti s�hk�posti</li><li>vai html s�hk�posti jossa on kuvia.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Salli hallinta etupuolelta niille, joilla ei ole oikeuksia hallintapuolelle (backend)?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'T�ll� asetuksella voit mahdollistaa (frontend) etupuolelta hallinnan niille k�ytt�jille, jotka ovat kauppa-admineja, mutta joilla ei ole Joomla/Mambo Backend-oikeuksia (esim. Registered ja  Editor).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'URL sivuillesi. Yleens� identtinen Joomla/Mambo URL:in kanssa(kauttaviiva per�ss�!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'SECUREURL';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'Suojattu URL sivuillesi. (https - kauttaviiva per�ss�!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'COMPONENTURL';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'URL VirtueMart-komponentiin. (kauttaviiva per�ss�!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'IMAGEURL';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'URL VirtueMart-komponentin kuvahakemistoon.(kauttaviiva per�ss�!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'ADMINPATH';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'Polku VirtueMart-komponentin hakemistoon.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'CLASSPATH';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'Polku VirtueMart-classes hakemistoon.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'PAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'Polku VirtueMart-html hakemistoon.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'IMAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'Polku VirtueMart-shop_image hakemistoon.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'HOMEPAGE';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'T�m� sivu ladataan oletuksena.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'ERRORPAGE';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Oletussivu virheilmoituksille.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'DEBUGPAGE';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Oletussivu debug-viesteille.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'DEBUG ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'DEBUG? Asettaa p��lle debug tulostuksen. T�m�n ansiosta DEBUGPAGE tulostuu jokaisen sivun alareunaan. Eritt�in hy�dyllinen kaupan kehityksess�, koska n�ytt�� ostoskorin sis�ll�n, kaavakkeiden kentt�arvot jne.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'FLYPAGE';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Oletussivu tuotteen tietojen esitykseen.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Kategoriamallinne';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'M��rittelee oletusmallinnuksen tuotteiden esittelyyn kategoriassa.<br />Voit luoda uusia mallinuksia r��t�l�im�ll� olemassa olevia mallinnustiedostoja <br />(l�ytyv�t hakemistosta <strong>COMPONENTPATH/html/templates/</strong> ja alkavat browse_)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Oletusm��r� tuotteita riviss�';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'M��rittelee tuotteiden m��r�n rivi� kohden. <br />Esimerkki: Jos astetat m��r�ksi 4, kategoriamallinnus n�ytt�� 4 tuotetta per rivi';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = '"no image" kuva';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'T�m� kuva n�kyy, kun tuotteelle ei ole m��ritelty kuvaa.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'Hakurivit';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'M��rittelee rivim��r�n per sivu, kun hakutulokset esitet��n luettelona.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'Hakurivin 1, v�ri';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'M��ritt�� parittomien rivien v�rin etsint� tuloksia esitett�ess� luettelona.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'Hakurivin 2, v�ri';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'M��ritt�� parillisten rivien v�rin etsint� tuloksia esitett�ess� luettelona.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'Enimm�isrivim��r�';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Asettaa rivim��r�n, joka n�ytet��n j�rjestysluettelon valintalaatikossa.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'N�yt� powered-by-VirtueMart kuva';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'N�ytt��  powered-by-VirtueMart kuvan sivujen alaosassa.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Valitse kauppasi huolintatapa';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Standardi huolintamoduuli, jossa erikseen m��ritelt�viss� olevat huolitsijat ja tariffit. <strong>SUOSITELTAVA !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = 'Zone Shipping Module Country Version 1.0<br />Lis�tietoja t�st� moduulista n�et osoitteessa: <a href="http://ZephWare.com">http://ZephWare.com</a><br />tai ota yhteytt� <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Valitse, jos haluat k�ytt�� moduulia.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<a href="http://www.ups.com" target="_blank">UPS Online� Tools</a> L�hetyslaskuri';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'UPS -koodi';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Sinun UPS -koodi';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'UPS -k�ytt�j�n id';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'UPS -k�ytt�j�n ID';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'UPS -salasana';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'Sinun UPS -salasanasi';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'InterShipper -moduuli. Valitse vain, jos sinulla on Intershipper.com -tili';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Poista huolinnan valinta. Valitse mik�li asiakkaasi ostavat ladattavia tuotteita, joita ei tarvitse l�hett��.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'InterShipper -salasana';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Salasanasi Intershipper -tiliisi.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'InterShipper -s�hk�posti';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'S�hk�postiosoitteesi intershipper -tiliisi.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'KOODAUSAVAIN';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'T�ll� avaimella salataan tiedot tietokannassa. T�m�n takia t�m� tiedoston n�kyminen tulisi aina suojata.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'N�yt� maksamispolun(Checkout Bar)';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Aseta p��lle, jos haluat maksamispolun(Checkout-Bar) n�kyv�n asiakaalle maksuprosessin aikana ( 1 - 2 - 3 - 4 graafisesti esitettyn�).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Valitse kauppasi maksuprosessi (checkout)';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Normaali :</strong><br/>
              1. L�hetysosoite<br />
              2. L�hetystapa<br />
              3. Maksutapa<br />
              4. Vahvista tilaus';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Prosessi 2:</strong><br/>
              1. L�hetysosoite<br />
              2. Maksutapa<br />
              3. Vahvista tilaus';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Prosessi 3:</strong><br/>
              1. L�hetystapa<br />
              2. Maksutapa<br />
              3. Vahvista tilaus';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Prosessi 4:</strong><br/>
              1. Maksutapa<br />
              2. Vahvista tilaus';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Salli lataukset tietokoneelle';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Valitse mahdollistaaksesi lataukset. Vain jos haluat myyd� ladattavia tuotteita.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Tilauksen tila(order status), joka mahdollistaa latauksen';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Valitse tilauksen tila(order status), jolla asiakas saa tiedon latausmahdollisuudesta.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Tilauksen tila(order status), joka est�� lataamisen';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Asettaa tilauksen tilan(order status), joka est�� asikasta lataamasta tiedostoa.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'Latauspolku';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'Fyysinen polku ladattavien tiedostojen hakemistoon. (kauttaviiva lopussa!)<br><span class="message">Turvavinkki: Jos voit, niin tallenna lataustiedostot muualle, kuin www-sivustosi juureen!</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Latausten maksimim��r�';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Aseta enimm�ism��r� latauksille, jonka yksi lataustunnus (Download-ID) voi tehd� tilausta kohti';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Latauksen aikaraja';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Aseta aika <strong>sekunneissa</strong>, jonka aikana asiakkaan on suoritettava latauksensa. Aika alkaa ensimm�isest� lataamisesta! Kun aika ylittyy, lataamistunnus  (download-ID) lakkaa olemasta voimassa.<br />Muista: 86400s=24h.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Salli IPN-maksu PayPalin kautta?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Merkitse t�m�, jos haluat asiakkaittesi k�ytt�v�n PayPal-maksutapaa.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'PayPal-maksun s�hk�postiosoite:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Yrityksesi (business email) s�hk�postiosoite PayPal-maksuja varten. K�ytet��n my�s vastaanottajaosoitteena (receiver_email).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Tilaustilanne/vaihe (Order Status), jossa rahansiirto voi onnistua (for successful transactions)';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Valitse tilanne/vaihe, johon tilaus asetetaan, jos PayPal-siirto onnistui. (Select the order status to which the actual order is set, if the PayPal IPN was successful.) Jos latausmahdollisuus on aktivoituna, aseta tilaustilanne/vaihe, jossa lataus voi onnistua (asiakas saa t�st� v�litt�m�sti tiedon s�hk�postitse). (If using download selling options: 
  select the status which enables the download (then the customer is instantly notified about the download via e-mail).)';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Tilaustilanne/vaihe ep�onnistuneita siirtoja varten. (Order Status for failed transactions)';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Valitse tilaustilanne/vaihe ep�onnstuneita PayPal-siirtoja varten. (Select an order status for failed PayPal transactions.)';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Aktivoi maksaminen PayMaten kautta ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Merkitse t�m�, jos aiot sallia asiakkaasi k�ytt�v�n  australialaista PayMate-maksuj�rjestelm��.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'PayMate-k�ytt�j�nimi:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'PayMate-k�ytt�j�tilisi.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Aktivoi Authorize.net-maksuj�rjestelm�?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Merkitse t�h�n, jos aiot k�ytt�� Authorize.net-j�rjestelm��.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Testaustila ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Valitse "Yes" testataksesi. Valitse "No" mahdollistamaan suorat rahansiirrot.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Kyll�';
	var $_PHPSHOP_ADMIN_CFG_NO = 'Ei';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Authorize.net-kirjautumistunnus (Login ID)';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'T�ss� on Authorize.Net-kirjautumistunnuksesi. (Login ID)';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Authorize.net-siirtoavain (Transaction Key)';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'T�ss� on Authorize.net-siirtoavaimesi (Transaction Key)';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Varmistamistapa (Authentication Type)';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'T�ss� on Authorize.Net-varmennustapa. (authentication type).';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Salli CyberCash?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Merkitse t�m�, jos aiot k�ytt�� CyberCash-maksutapaa.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash MERCHANT';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_MERCHANT on CyberCash-kauppiastunnus (Merchant ID)';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash-kauppiasavain (Merchant Key)';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash-kauppiasavain (Merchant Key) on  CyberCashin antama kauppiasoikeus';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash-maksuosoite (PAYMENT URL)';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'CyberCash-maksuosoite (PAYMENT URL) on Cybercashin turvallinen maksuosoite (secure payment)';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash AUTH TYPE';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'CyberCash AUTH TYPE on Cybercash varmennustyyppi (authentication type)';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Tarkennettu haku';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Etsi kaikista tuoteryhmist�';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Etsi kaikista tuotetiedoista';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Vain tuotenimist�';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Vain valmistajista';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Vain tuotetiedoista';
	var $_PHPSHOP_SEARCH_AND = 'JA';
	var $_PHPSHOP_SEARCH_NOT = 'EI';
	var $_PHPSHOP_SEARCH_TEXT1 = 'Ensimm�inen pudotuslista antaa mahdollisuuden rajata haku yhteen tuotekategorian. Toinen pudotuslista antaa mahdollisuuden rajata haku tiettyyn tuotetiedon osaan, esim. tuotenimist�. Kun olet tehnyt n�m� rajaukset (tai pit�ytynyt perusvalinnoissa), tee haku haluamallasi hakusanalla.';
	var $_PHPSHOP_SEARCH_TEXT2 = ' Voit tarkentaa hakua lis�sanoilla sek� k�ytt�m�ll� niiden v�liss� JA- tai EI-operaattoreita. JA-sanan lis�ys merkitsee, ett� kummankin hakusanan on esiinnytt�v� my�s haettavassa kohteessa. EI-sanan k�ytt� merkitsee, ett� valituksi tulee kohde, jossa ensimm�inen hakusana esiintyy mutta toinen ei.';
	var $_PHPSHOP_ORDERBY = 'J�rjestys';
	var $_PHPSHOP_CUSTOMER_RATING = 'Keskim��r�inen asiakasarvio';
	var $_PHPSHOP_TOTAL_VOTES = '��nten m��r�';
	var $_PHPSHOP_CAST_VOTE = '��nest�';
	var $_PHPSHOP_RATE_BUTTON = 'Arvioi';
	var $_PHPSHOP_RATE_NOM = 'Arvio';
	var $_PHPSHOP_REVIEWS = 'Asiakkaiden arvioita';
	var $_PHPSHOP_NO_REVIEWS = 'Ei viel� asiakasarviointeja t�lle tuotteelle.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Jospa olisit ensimm�inen arvionantaja...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Kirjaudu sis��n ja anna arviosi.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Anna viel� arvosana tuotteelle arviosi p��tteeksi!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Kirjoita viel� muutama sana. Minimimerkkim��r�mme on: 100';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Lyhenn� hiukan arviotasi. Enimm�ismerkkim��r�mme on: 2000';
	var $_PHPSHOP_WRITE_REVIEW = 'Kirjoita arviosi t�st� tuotteesta!';
	var $_PHPSHOP_REVIEW_RATE = 'Ensiksi: anna arvosana. Valitse asteikolta 0:sta (huonoin) 5 t�hteen (paras).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Seuraavaksi: kirjoita lyhyt arvioteksti ....(min. 100, max. 2000 merkki�) ';
	var $_PHPSHOP_REVIEW_COUNT = 'Merkkim��r�: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'L�het� arvio';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Meill� on jo aiemmin laatimasi arvio t�lle tuotteelle.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Kiitos arviosta!';
	var $_PHPSHOP_COMMENT = 'Kommentti';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Lis�� tai muokkaa luottokorttityyppej�';
	var $_PHPSHOP_CREDITCARD_NAME = 'Luottokortin nimi';
	var $_PHPSHOP_CREDITCARD_CODE = 'Luottokortti lyhytkoodi';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Luottokortin tyyppi';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Luottokorttilista';
	var $_PHPSHOP_UDATE_ADDRESS = 'P�ivit� osoite';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Jatka ostoksia';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Tilauksesi onnistui ja on tallennettu!';
	var $_PHPSHOP_ORDER_LINK = 'T�st� linkist� p��set tilaustietoihin.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'Tilauksen No. {order_id} ,tila on muutettu.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'Uusi tila on:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'Tarkista tilauksesi tiedot seuraamalla t�t� linkki� tai kopioimalla linkki selaimesi osoitepalkkiin:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Tilauksen tilan muutos: Tilaus {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'L�hetet��nk� tiedotus muutoksesta asiakkaalle?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Vaihda tilauksen tila ensin!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Perusasiakasryhm�n alennusprosentti (%)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Positiivinen luku X tarkoittaa: ellei tuotteelle ole osoitettu t�t� ostajaryhm�� koskevaa hintaa, perushintaa lasketaan X %:lla. Negatiivinen lukema tarkoittaa p�invastaista';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Tuotealennus';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Tuotealennusluettelo';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Lis��/muokkaa tuotealennusta';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Alennuksen m��r�';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Sy�t� alennuksen m��r�';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Alennustyyppi';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Prosentti';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Summa';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Aseta prosentti- tai summa-alennus';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Alennus alkaa';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'M��ritt�� alennuksen aloitusp�iv�m��r�n';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Alennus p��ttyy';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'M��ritt�� alennuksen p��ttymisp�iv�m��r�n';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'K�yt� tuotealennuskaavaketta lis�t�ksesi alennuksia!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'S��st�t';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Suurenna kuvaa';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Valuutan esitystapa';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Valuutan symboli';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Voit k�ytt�� my�s HTML muotoja (esim. &euro;,&pound;,&yen;,...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Desimaalit';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Esitettyjen desimaalien m��r� (voi olla 0)<br><b>Suorittaa py�ristyksen mik�li luvun desimaalien m��r� on eri</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Desimaalin symboli';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Merkki, jota k�ytet��n desimaalin symbolina';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Tuhansien erottaja';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Merkki, jota k�ytet��n tuhansien erottaja (voi olla tyhj�)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Positiivilukujen esitystapa';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'N�ytt�� tavan, jolla esitet��n positiiviset luvut.<br>(Symb tarkoittaa valuutan symbolia)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Negatiivisten lukujen esitystapa';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'N�ytt�� tavan, jolla esitet��n negatiiviset luvut.<br>(Symb tarkoittaa valuutan symbolia)';
	var $_PHPSHOP_OTHER_LISTS = 'Muut tuoteluettelot';
	var $_PHPSHOP_MORE_IMAGES = 'N�yt� lis�� kuvia';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Tuotekuvat kohteelle';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Takaisin tuotetietoihin';
	var $_PHPSHOP_FILEMANAGER = 'Tiedostonhallinta';
	var $_PHPSHOP_FILEMANAGER_LIST = 'Tiedostonhallinta::Tuoteluettelo';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Lis�� Kuva/Tiedosto';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Osoitetut kuvat';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'On ladattavissa?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Osoitetut tiedostot (Datasheets,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Julkaistu?';
	var $_PHPSHOP_FILES_LIST = 'Tiedostonhallinta::Kuva/Tiedosto luettelo kohteelle';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Tiedoston nimi';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'Tiedoston nimike';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Tiedoston tyyppi';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Muokkaa tiedoston kirjausta';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Iso kuva';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'N�ytekuva';
	var $_PHPSHOP_FILES_FORM = 'Lataa tiedosto kohteeseen';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Nykyinen tiedosto';
	var $_PHPSHOP_FILES_FORM_FILE = 'Tiedosto';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Kuva';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Lataa kohteeseen';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'Oletuspolku tuotekuvalle';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'M��rit� tiedoston sijainti';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Latauspolku (esim. ladattavien tuotteiden myyntiin!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Luo n�ytekuva automaattisesti?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Tiedosto on julkaistu?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Tiedoston nimike (mink� asiakas n�kee)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Tiedoston kuvaus';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'Tiedoston URL (valinnainen)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Anna tiedoston polku!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'N�ytekuva onnistuneesti luotu!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'N�ytekuvaa EI voitu luoda!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Kuvan/tiedoston latausvirhe';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Isoa kuvaa ei voitu poistaa.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Iso kuva onnistuneesti poistettu.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'N�ytekuvaa ei voitu poistaa (mahdollisesti ei ole olemassa): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'N�ytekuva onnistuneesti poistettu.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Tiedostoa ei voitu poistaa.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Tiedosto onnistuneesti poistettu.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Pyydetty� tiedostoa ei l�ydetty!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Kuvaa ei l�ydetty!';
	var $_PHPSHOP_COUPON_MOD = 'Kuponki';
	var $_PHPSHOP_COUPONS = 'Kupongit';
	var $_PHPSHOP_COUPON_LIST = 'Kuponkiluettelo';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Kuponki on jo lunastettu.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Kuponki lunastettu! Kiitos.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Jos sinulla on kupongin koodi, sy�t� se t�h�n:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'L�het�';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'L�hett�m�si kuponkikoodi on jo olemassa. Yrit� uudestaan.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'P�ivit� kuponki';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Klikkaa kuponkikoodia muokataksesi sit�, tai poistaaksesi kuponkikoodin, valitse ja klikkaa Poista:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Koodi';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Prosentti tai kiinte� summa';
	var $_PHPSHOP_COUPON_TYPE = 'Kuponkityyppi';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Lahjakuponki poistetaan heti, kun se on hyvitetty ostoksen yhteydess�. Kestokuponki on k�ytett�viss� niin usein kuin asiakas haluaa.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Lahjakuponki';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Kestokuponki';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Arvo';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Poista koodi';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Haluatko varmasti poistaa t�m�n kuponkikoodin?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'T�yt� kaikki kent�t.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'Kupongin arvon on oltava luku.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Uusi kuponki';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Kuponkikoodi';
	var $_PHPSHOP_COUPON_PERCENT = 'Prosentti';
	var $_PHPSHOP_COUPON_TOTAL = 'Kiinte� summa';
	var $_PHPSHOP_COUPON_VALUE = 'Arvo';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Kuponkikoodi talletettu.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Tallenna kuponki';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Kuponkialennus';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Kuponkikoodia ei l�ydetty. Yrit� uudestaan.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Mahdollista kuponkien k�ytt�';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Mik�li mahdollistat kuponkien k�yt�n, asiakkaasi voivat k�ytt�� kuponkien numerot saadakseen alennusta ostoistaan.';
	var $_PHPSHOP_FREE_SHIPPING = 'Ilmainen rahti';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'T�m�n tilaus toimitetaan rahtivapaasti!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Ilmaiseen rahtiin oikeuttava minimisumma on ';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Minimisumma (SIS�LT�EN VERON!) joka oikeuttaa ilmaiseen rahtiin 
                                                (esim: <strong>50</strong> tarkoitaa ilmaista rahtia, kun asikas ostaa v�hint��n
                                                 50 &euro; (sis�lt�en veron) tai suuremmalla summalla.';
	var $_PHPSHOP_YOUR_STORE = 'Sinun kauppasi';
	var $_PHPSHOP_CONTROL_PANEL = 'Hallintapaneeli';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF - Kuvake';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'N�yt� tai piiloita PDF-kuvake kaupassa';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Kaupank�yntiehdot pit�� hyv�ksy� JOKAISESSA TILAUKSESSA?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Valitse jos haluat, ett� asiakkaasi hyv�ksyy kaupanehdot JOKAISESSA TILAUKSESSA (ennen tilauksen tekoa).';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Pankkitilin tyyppi';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Shekki';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Business Shekki';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'S��st�';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Toistuvat maksut?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'M��rit�, mik�li haluat toistuvat maksut.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Sis�inen toimintavirhe';
	var $_PHPSHOP_PAYMENT_ERROR = 'Ep�onnistuminen maksun suorituksessa';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Maksusuoritus hyv�ksytty';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS ei pystynyt antamaan rahtihintatietoa.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Taattu aika (p�ivin�) toimitukseen';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'UPS:in noutotapa';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Kuinka paketit luovutetaan UPS:ille?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'UPS-pakkaustyyppi?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Valitse oletuspakkaustyyppi.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Yksityiseen osoitteeseen toimitus?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Yksityistoimitus (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Yritystoimitus (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Hintailmoitus: yksityistoimitus (RES) tai yritystoimitus (COM).';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'K�sittelymaksu';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'K�sittelymaksusi t�lle rahtitavalle.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Veroluokka';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'K�yt� seuraavaa veroluokkaa rahtimaksulle.';
	var $_PHPSHOP_ERROR_CODE = 'Virhekoodi';
	var $_PHPSHOP_ERROR_DESC = 'Virhekuvaus';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'N�yt�/muuta tapahtuma-avainta';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'N�yt�/muuta salasana/tapahtuma-avainta';
	var $_PHPSHOP_TYPE_PASSWORD = 'Sy�t� salasanasi';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Voimassaoleva salasana';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Voimassaoleva tapahtuma-avain';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'Tapahtuma-avain onnistuneesti muutettu.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Vaadi/poimi luottokortin turvakoodi(CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Tarkista, l�ytyv�tk� CVV2/CVC2/CID -luvut (3- tai 4- numeroiset koodit luottokortin takana, American Express-korteissa etupuolella)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Kirjoita t�h�n 3- tai 4-numeroinen koodi luottokorttisi takaa (American Express-korteissa etupuolella)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'Et p��se eteenp�in lis��m�tt� kortin koodia (Credit Card Code).';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'JOKO lis��t t�h�n tiedostonimen';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'TAI lataat uuden tiedoston';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'HUOM: Voit lis�t� tiedostonimen. <strong>Jos lis��t tiedostonimen t�ss�, mit��n tiedostoa ei ladata!!! Sinun t�ytyy ladata se FTP-ohjelmalla manuaalisesti!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Voit ladata tiedoston omalta koneelta. T�st� tiedostosta tulee se tuote, jota myyt. Se korvaa nykyisen tiedoston.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Kirjoita t�h�n teksti, joka n�kyy tuotetiedoissa toimitusaikana.<br />esim.: 24h, 48 tuntia, 3 - 5 p�iv��';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'TAI valitse kuva, joka n�kyy tuotetiedossa toimitusaikana.<br />Kuvat ovat hakemistossa <i>/components/com_virtuemart/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Piirrelista';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Esimerkkej� piirrelistan nimikkeist� (Attribute List Format):</h4>
        <pre>Koko,S[-2.99],M,XL[+1.99];V�ri,Punainen,Vihre�,Keltainen,Erikoisv�ri[=24.00];jne,..,..</pre>
        <h4>Hintam��ritykset:</h4>
        <pre>
        &#43; == Lis�� t�m� m��r� asetettuun hintaan.<br />
        &#45; == V�henn� t�m� m��r� asetetusta hinnasta.<br />
        &#61; == Aseta tuotteelle t�m� hinta.
      </pre>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Erityispiirrelista (Custom Attribute List)';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Esimerkkej� erityispiirrelistan sis�ll�st�:</h4>
        <pre>Nimi;Ekstra;...</pre>';
	var $_PHPSHOP_MULTISELECT = 'K�yt� monivalintaan Ctrl-nappia ja hiirt�';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'Sallitaanko eProcessingNetwork.com-maksu?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Merkitse t�m�, jos sallit eProcessingNetwork.com-maksutavan.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Testaustila ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Valitse KYLL�  testaamista varten. Valitse EI varsinaista maksutoimintaa varten.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'eProcessingNetwork.com-kirjautumistunnus (Login ID)';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'T�m� on eProcessingNetwork.com-kirjutumistunnuksesi (Login ID)';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'eProcessingNetwork.com-siirtoavain (Transaction Key)';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'T�m� on eProcessingNetwork.com-siirtoavaimesi (Transaction Key)';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Vahvistamistyyppi (Authentication Type)';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'T�m� on eProcessingNetwork.comin vahvistamistyyppi (authentication type).';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Sukulaistuotteet';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Voit t�ll� listalla luoda tuotesukulaisuuksia. Valitse yksi tai useampia tuotteita, joista tulee siten kesken��n <strong>tuotesukulaisia</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Ehk� my�s t�m� tai n�m� tuotteet kiinnnostavat.';
	var $_PHPSHOP_IMAGE_ACTION = 'Kuvan toiminta';
	var $_PHPSHOP_NONE = 'ei mit��n';
	var $_PHPSHOP_ORDER_HISTORY = 'Tilaushistoria';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Kommentti';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Tilaukseen liittyv�t huomiot';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Lis�� t�m� kommentti?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Lis�ysp�iv�m��r�';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Onko asiakkaalle ilmoitettu?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Tilauksen tilan muutos';
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
	var $_PHPSHOP_PARAMETERS_LBL = 'Muuttujat/parametrit';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Tuotetyyppi';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Tuotetyyppilista';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Lis��/muokkaa tuotetyyppi(�)';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Tyyppilista tuotteille:';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Listaa tuotetyypit';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Lis�� tuotetyyppi kohtaan';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Lis�� tuotetyyppi';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Tuotetyyppi';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Tuotetyypin nimi';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Tuotetyypin kuvaus';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Muuttujat/parametrit';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Tuotetyypin tiedot';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Julkaise?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Tuotetyyppien selailusivu';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Tuotetyyppi-ikkuna';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Tuotetyypin muuttujat';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Muuttujatieto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Tuotetyyppi� ei l�ydy!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Muuttujan nimi';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'T�m� nimi toimii taulukon sarakenimen�. Kirjoitetaan yhten�isin kirjaimin ja ilman v�lej�.<BR>Esimerkiksi: main_material';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Muuttujan otsake';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Muuttujan kuvaus';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Muuttujatyyppi';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Numero';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Teksti';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Lyhyt teksti';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Kelluva';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Merkki';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'P�iv�m��r� ja aika';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'P�iv�m��r�';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'YYYY-MM-DD';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Aika';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'HH:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Rivinvaihto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Useita arvoja';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Mahdollisia arvoja';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'N�ytet��nk� mahdollisia arvoja monivalintoja varten?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Jos valitaan mahdolliset arvot -valinta, muuttujat (parametrit) voivat saada vain niit� arvoja. Esimerkki mahdollisista muuttuja-arvoista:</strong><BR><span class="sectionname">ter�s;puu;muovi;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Oletusarvo';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'Muuttujan oletusarvon m��rittelyss� k�ytet��n seuraavaa muotoa:<ul><li>Pvm: YYYY-MM-DD</li><li>Aika: HH:MM:SS</li><li>Pvm & aika: YYYY-MM-DD HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Yksikk�';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Muuttujiin perustuva tehohaku';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Muuttujahaku';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Haluatko hakea tuotteita niiden teknisten muuttujien (parametrien) perusteella?<BR>Voit k�ytt�� mit� tahansa valmista lomaketta:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Haku ei tuottanut tulosta.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Tuotetyyppi� ei l�ydy.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'Kuten';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'Eri kuin';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Koko tekstin haku';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Kaikki valittu';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Mik� tahansa valittu';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Tyhjenn� lomake';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Etsi kategoriasta';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Vaihda muuttujia';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Alenevassa j�rjestyksess�';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Nousevassa j�rjestyksess�';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Kategorian muuttujat';
	var $_PHPSHOP_FEE = 'Pakkauskulut';
	var $_PHPSHOP_PRODUCT_CLONE = 'Kopioi tuote';
	var $_PHPSHOP_CSV_SETTINGS = 'Asetukset';
	var $_PHPSHOP_CSV_DELIMITER = 'CSV-rajausmerkki (Delimiter)';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Kent�n sulkumerkki (Field Enclosure Char)';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Tuo CSV tiedosto';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Tuo CSV tiedosto';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Tuo serverin hakemistosta';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Tuo CSV-tiedosto serverilt�';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Vie CSV tiedostoon';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Valitse kenttien j�rjestys';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Oletusj�rjestys';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'Omaj�rjestys';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Vie kaikki tuotteet CSV-tiedostoon';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'CSV tiedoston asetukset';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Tallenna muutokset';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Kent�n nimi';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'Oletusarvo';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Kenttien j�rjestys';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Vaaditut kent�t?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Tuo/Vie';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Lis�� uusi kentt�';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Ohjeet';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Tuotetta ei l�ydy!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'N�yt� varastosta loppuneet tuotteet';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'T�m� aktivoituna n�ytt�� tuotteet, joita ei nyt juuri ole varastossa. Muussa tapauksessa niit� ei n�ytet�.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = ' {unit} pakkauksessa:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = ' {unit} laatikossa:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = '�l� n�yt� teksti�, "Tuote loppunut varastosta"';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Lis�ominaisuus- ja alennustuotteet';
	var $_PHPSHOP_FEATURED = 'Lis�ominaisuus';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Takaisin maan asetuksiin';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Takaisin tiedostonhallintaan';
	var $_PHPSHOP_ADD_STATE = 'Lis�� osavaltio';
	var $_PHPSHOP_LIST_STATES = 'Luettele osavaltiot';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'Lis�ominaisuus- ja alennustuotteet';
	var $_PHPSHOP_SHOW_FEATURED = 'Lis�ominaisuus tuotteet';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'Alennustuotteet';
	var $_PHPSHOP_FILTER = 'Rajaa';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Takaisin p��sivulle';
	var $_PHPSHOP_EXPAND_TREE = 'Laajenna puu';
	var $_PHPSHOP_COLLAPSE_TREE = 'Supista puu';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Alennettu hinta';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'T�ss� voit lis�t� alennuksen t�lle tuotteelle.<br/>Kaupan alennusasetuksiin lis�t��n t�m� alennus.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Yksikk�hinta';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'Kauppa on offline-tilassa?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'Jos valiset t�m�n, kauppa on Offline-tilassa ja n�ytt�� allaolevan viestin.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Offline-tilan viesti';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Prefix, kaupan tietokantatauluille';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = '<strong>vm</strong> on oletuksena';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'N�yt� sivunavigaatio tuoteluettelon yl�osassa?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Valinta n�ytt�� tai piilottaa sivunavigaation tuoteluettelon yl�osassa *Frontend*.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'N�yt� tuotteiden m��r�?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'N�ytt�� tuotteiden m��r�n kategorioissa. Esim. testituotteet(4)?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = '"Lis�� koriin" painikkeen tyyli';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'Salli dynaamisten n�ytekuvien luonti?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'Kun valittu, sallit dynaamisten n�ytekuvien luonnin. Kaikki n�ytekuvat luodaan valitsemaasi kokoon
        k�ytt�en PHP\'n GD2 funktiota. (Voit tarkistaa GD2 tuen hallintapaneelista "System" -> "System Info" -> "PHP Info" -> gd.) 
        N�ytekuvien laatu on parempi kuin kuvien, jotka ovat "pienennetty" selaimessa. Uudet n�ytekuvat tallenetaan hakemistoon /shop_image/prduct/resized. Jos kuva on jo kerran pienennetty, k�ytet��n sit�. N�in kuvia ei pienennet� aina uudestaan.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'N�ytekuvan leveys';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'Kuvan <strong>leveys</strong> n�ytekuvalle.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'N�ytekuvan korkeus';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'Kuvan <strong>korkeus</strong> n�ytekuvalle.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Tee ainakin yksi valinta l�hetysasetuksissa!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Hinnan asetukset';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Valitse ryhm� joille hinnat n�ytet��n';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'Valittu ryhm� ja kaikki sit� suuremmilla oikeuksilla n�kev�t hinnan.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'N�yt� "(sis. XX% ALV)" hinnan j�lkeen?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'Kun valittu, k�ytt�j�t n�kev�t tekstin (sis. xx% ALV) kun hinnat n�ytet��n veroineen.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'N�yt� hintalappu pakkaukselle?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'Kun valittu, hintalappuun lis�t��n tuotteen yksikk�- ja pakkausarvot:<strong>Esim. Yksikk�hinta (2 litraa): xx.xx<strong><br/>Muussa tapauksessa hinta n�kyy tavallisena: <strong>Hinta: xx.xx</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'Core asetukset';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Core asetukset';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = '"Frontend" ominaisuudet';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Veron asetukset';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Kappalem��r� alkaa';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Kappalem��r� loppuu';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'K�ytt�jien rekister�intiasetukset';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = '*User registration allowed*?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = '*New account activation necessary*?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'K�yt� helppoa rekister�itymist�?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'Kun valittu, rekister�ityjien ei tarvitse t�ytt�� k�ytt�j�nime� ja salasanaa. S�hk�postiosoitetta k�ytet��n k�ytt�j�tunnuksena ja salasana luodaan satunnaisesti. Rekister�intitiedot l�hetet��n s�hk�postitse.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Hei %s,

Kiitos rekister�itymisest�si %s :n sivustolle. Asiakastietosi on tallennettu.

Voit jatkossa k�ytt�� tilauksissa allaolevia tunnuksia.
Sivusto %s 

K�ytt�j�tunnus - %s
Salasana - %s

�l� vastaa t�h�n viestiin, koska se on l�hetetty automaattisesti.
';
	var $_PEAR_LOG_CRIT = 'Kriittinen';
	var $_PEAR_LOG_ERR = 'Virhe';
	var $_PEAR_LOG_WARNING = 'Varoitus';
	var $_PEAR_LOG_INFO = 'Info';
	var $_PEAR_LOG_TIP = 'Info';
	var $_PEAR_LOG_ALERT = 'H�lytys';
	var $_PEAR_LOG_EMERG = 'Vakavah�lytys';
	var $_PEAR_LOG_NOTICE = 'Huom.';
	var $_PEAR_LOG_DEBUG = 'Debug';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'K�yt� PayFlow Pro maksutapaa?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'K�yt� "VeriSign PayFlow Pro" maksutapaa kaupassasi.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'Testaustila ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'Valitse \'Yes\' testataksesi. Valitse \'No\' mahdollistamaan suorat rahansiirrot.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'VeriSign processing Partner ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'The Partner ID provided to you by the authorized VeriSign Reseller that registered you for the PayFlow Pro service';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'PayFlow Pro Login ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'Kirjoita t�h�n "PayFlow Pro Login ID"';
	var $_VM_TAXDETAILS_LABEL = 'Vero sis�lt��';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'Oletusarvo "J�rjestys" valikossa';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'M��ritt��, mik� on tuptteiden oletusj�rjestys tuotesivuilla';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'Valinnaiset "J�rjestys" valinnat';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'Valitse "J�rjestys" valinnat, joilla k�ytt�j�t valitsevat tuotej�rjestyksen tuotesivuilla. Jos et valitse mit��n, "J�rjestys"-kentt�� ei n�ytet� ollenkaan.';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO = 'N�yt� lyhyt ilmoitus "Palautusoikeus", tilausta hyv�ksytt�ess�?';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP = 'Monessa euroopan maassa, kauppiaan on ilmoitettava asiakkailleen tilauksen palautus ja -purkamisehdot. Valinta n�ytt�� viestin.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT = 'Palautuoikeus teksti(lyhyt versio). Jos et k�yt� allaolevaa pitk�� tekstisivua, niin poista lyhyen tekstin lopusta linkkiteksti.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP = 'T�h�n tulee lyhyt viesti palautusoikeudesta. Se n�ytet��n asiakkaalle tilausvahvistuksessa.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK = 'Pitk� versio palautusoikeus-tekstist�(linkki tekstisivulle(content item)).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP = 'Valitse t�st� sivu(content item),jossa on selostus palautusoikeudesta. Jos et ole viel� tehnyt sellaista sivua, 
niin tee sivu hallintapaneelissa ja lis�� sen linkki t�ss�.';
	var $_VM_LEGALINFO_SHORTTEXT = '<h5>Palautusoikeus</h5>
Tuotteilla on 14 vrk:n palautusoikeus edellytt�en, 
ett� tuote palautetaan omassa alkuper�ispakkauksessaan k�ytt�m�tt�m�n�. 
Vaihdoissa ja palautuksissa liit� l�hetyksen mukaan mahdollinen pakkauslista.
Lis�tietoa palautusoikeudesta,  <a href="%s" onclick="%s" target="_blank">Palautusoikeus</a> sivu.';
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
	var $PHPSHOP_CSV_EXPLANATION_PRODUCT_LENGTH = 'The length of the product.<br />Values:<ul><li>Number</li></ul>';
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
        
}
class phpShopLanguage extends vmLanguage { }

/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>