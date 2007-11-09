<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
*
* @version $Id$
* @ 2006/12/22 05:37:12 updated to VM 1.0.8 by Mauri & shrike
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
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Näytä kaikki tuotteet';
	var $_PHPSHOP_VIEW = 'Katso';
	var $_PHPSHOP_SHOW = 'Näytä';
	var $_PHPSHOP_ADD = 'Lisää';
	var $_PHPSHOP_UPDATE = 'Päivitä';
	var $_PHPSHOP_DELETE = 'Poista';
	var $_PHPSHOP_SELECT = 'Valitse';
	var $_PHPSHOP_SUBMIT = 'Lisää';
	var $_PHPSHOP_RANDOM = 'Näyteikkunassa';
	var $_PHPSHOP_LATEST = 'Uusimmat tuotteet';
	var $_PHPSHOP_HOME_TITLE = 'Etusivu';
	var $_PHPSHOP_CART_TITLE = 'Ostoskori';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Osta tuotteet';
	var $_PHPSHOP_LOGIN_TITLE = 'Kirjaudu sisään';
	var $_PHPSHOP_LOGOUT_TITLE = 'Kirjaudu ulos';
	var $_PHPSHOP_BROWSE_TITLE = 'Selaa';
	var $_PHPSHOP_SEARCH_TITLE = 'Etsi';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Tilin ylläpito';
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
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Tuoteryhmä';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Tuotekuvaus';
	var $_PHPSHOP_CART_SHOW = 'Näytä ostoskori';
	var $_PHPSHOP_CART_ADD_TO = 'Lisää koriin';
	var $_PHPSHOP_CART_NAME = 'Nimi';
	var $_PHPSHOP_CART_SKU = 'Tuotetunnus';
	var $_PHPSHOP_CART_PRICE = 'Hinta';
	var $_PHPSHOP_CART_QUANTITY = 'Määrä';
	var $_PHPSHOP_CART_SUBTOTAL = 'Välisumma';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Lisää uusi';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Lähetysosoite';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Hakusi tuotti 0 tulosta.<BR>';
	var $_PHPSHOP_PRICE_LABEL = 'Hinta: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Tilaa';
	var $_PHPSHOP_NO_CUSTOMER = 'Et ole rekisteröitynyt asiakas.<BR>Sinun täytyy rekisteröityä ensin.';
	var $_PHPSHOP_DELETE_MSG = 'Haluatko varmasti poistaa tämän kohteen?';
	var $_PHPSHOP_THANKYOU = 'Kiitos tilauksesta.';
	var $_PHPSHOP_NOT_SHIPPED = 'Lähettämätön';
	var $_PHPSHOP_EMAIL_SENDTO = 'Vahvistus on lähetetty sähköpostilla';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Ei ole Mos/Joomla – käyttäjä, jonka voisit lisätä VirtueMart käyttäjäluetteloon';
	var $_PHPSHOP_ERROR = 'VIRHE';
	var $_PHPSHOP_MOD_NOT_REG = 'Moduulia ei ole rekisteröity.';
	var $_PHPSHOP_MOD_ISNO_REG = 'ei ole käypä VirtueMart moduuli.';
	var $_PHPSHOP_MOD_NO_AUTH = 'Sinulla ei ole oikeuksia pyydettyyn moduuliin.';
	var $_PHPSHOP_PAGE_404_1 = 'Sivua ei löydy';
	var $_PHPSHOP_PAGE_404_2 = 'Annetua tiedostonimeä ei löydy:';
	var $_PHPSHOP_PAGE_403 = 'Ei tarvittavia oikeuksia';
	var $_PHPSHOP_FUNC_NO_EXEC = 'Sinulla ei ole oikeuksia suorittaa';
	var $_PHPSHOP_FUNC_NOT_REG = 'Toimintoa ei ole rekisteröity';
	var $_PHPSHOP_FUNC_ISNO_REG = ' ei ole käypä VirtueMart toiminto.';
	var $_PHPSHOP_ADMIN_MOD = 'Hallinta';
	var $_PHPSHOP_USER_LIST_MNU = 'Luettele käyttäjät';
	var $_PHPSHOP_USER_LIST_LBL = 'Käyttäjäluettelo';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Käyttäjänimi';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Koko nimi';
	var $_PHPSHOP_USER_LIST_GROUP = 'Ryhmä';
	var $_PHPSHOP_USER_FORM_MNU = 'Lisää käyttäjä';
	var $_PHPSHOP_USER_FORM_LBL = 'Lisää/Päivitä käyttäjätiedot';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Laskutustiedot';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Lähetysosoitteet';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Lisää osoite';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'Ei lähetysosoitteita.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Osoitelappu';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Etunimi';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Sukunimi';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Toinen nimi';
	var $_PHPSHOP_USER_FORM_TITLE = 'Titteli';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Käyttäjänimi';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Salasana';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Vahvista salasana';
	var $_PHPSHOP_USER_FORM_PERMS = 'Oikeudet';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Asiakasnumero / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Yhdistys/Yritys-nimi';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Lähiosoite';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Lähiosoite 2.rivi';
	var $_PHPSHOP_USER_FORM_CITY = 'Postitoimipaikka';
	var $_PHPSHOP_USER_FORM_STATE = 'Osavaltio/Alue';
	var $_PHPSHOP_USER_FORM_ZIP = 'Postinumero';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Maa';
	var $_PHPSHOP_USER_FORM_PHONE = 'Puhelin';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Matkapuhelin';
	var $_PHPSHOP_USER_FORM_FAX = 'Faksi';
	var $_PHPSHOP_USER_FORM_EMAIL = 'Sähköposti';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Luettele moduulit';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Moduuliluettelo';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Moduulin nimi';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Moduulin oikeudet';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Toiminnot';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Luettelojärjestys';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Lisää moduuli';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Moduuli Informaatio';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Moduulin nimi (Ylävalikkoon)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Moduulin nimi';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Moduulin oikeudet';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Moduulin Header';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Moduulin Footer';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Moduulivalikko?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Näytä järjestys';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Moduulin kuvaus';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'Kielen koodi';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Kielitiedosto';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Luettele toiminnot';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Toimintoluettelo';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Toiminnon nimi';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Luokan nimi';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Luokitustapa';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Oikeudet';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Lisää toiminto';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Toiminnon tiedot';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Toiminnon nimi';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Luokan nimi';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = ' Luokitustapa';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Toiminon oikeudet';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Toiminnon kuvaus';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Luettele valuutat';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Valuuttaluettelo';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'Lisää valuutta';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Valuutan nimi';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'Valuutan koodi';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Luettele maat';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Maaluettelo';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Lisää maa';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Maan nimi';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Maan koodi (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Maan koodi (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Luettele osavaltiot';
	var $_PHPSHOP_STATE_LIST_LBL = 'Osavaltiot: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Lisää/päivitä osavaltio';
	var $_PHPSHOP_STATE_LIST_NAME = 'Osavaltion nimi';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'Osavaltion koodi (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'Osavaltion koodi (2)';
	var $_PHPSHOP_ADDRESS = 'Osoite';
	var $_PHPSHOP_CONTINUE = 'Jatka';
	var $_PHPSHOP_EMPTY_CART = 'Ostoskorisi on tyhjä.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Pingaa InterShipper Serveriä';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'InterShipper-Server pingaus';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'InterShipper pingaus epäonnistui';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'InterShipper pingaus Onnistui';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Huolitsija';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Vastaus<BR>aika';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'sek.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Luettele lähetystavat';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Toimivat lähetystavat';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = ' Lähetystavat';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Toimiva';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Käsittelymaksu';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Toimitusaika';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'kiinteä kurssi';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'prosenttia';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'päivää';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Raskaat lastit';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Määritä lähetystavat';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Lisää lähetystapa';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Määritä lähetystapa';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Virkistä';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Lähetystapa';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Aktivoi';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Käsittelykulut';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Toimitusaika';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'kiinteä kurssi';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'prosentti';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'päivää';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = ' Raskaat Lastit';
	var $_PHPSHOP_ORDER_MOD = 'Tilaukset';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Vahvista tilaus';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Peruuta tilaus';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Tulosta tilaus';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Poista tilaus';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Luettele tilaukset';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Tuoteluettelo';
	var $_PHPSHOP_ORDER_LIST_ID = 'Tilausnumero';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Tilauspäivä';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Viimeeksi muokattu';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Tila';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'Välisumma';
	var $_PHPSHOP_ORDER_ITEM = 'Tilaustuotteet';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Tilaus';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Tilausnumero';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Tilauspäivä';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Tilauksen tila';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Asiakastiedot';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Laskutustiedot';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Lähetystiedot';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Laskutettava: ';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Vastaanottaja';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Nimi';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Yritys/yhdistys';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Lähiosoite';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Lähiosoite 2.rivi';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Postitoimipaikka';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Osavaltio/Alue';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'Postinumero';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Maa';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Puhelin';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Faksi';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'Sähköpostiosoite';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Tilatut tuotteet';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Määrä';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Kpl';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'Tuotetunnus';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Hinta';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Summa';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'Välisumma';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'Alv osuus';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Huolinta';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Huolinnan vero';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Maksutapa';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Tilin nimi';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Tilin numero';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Voimassaoloaika';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Maksuloki';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Lähetystiedot';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Maksutiedot';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Huolitsija';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Huolintatapa';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Huolintapäivä';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Huolintakulut';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Luettele tilauksen tilatyypit';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Lisää tilauksen tilayyppi';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Tilauksen tilan koodi';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Tilauksen tilan nimi';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Tilauksen tila';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Tilauksen tilan koodi';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Tilauksen tilan nimi';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Luettelojärjestys';
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
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'Jälkeen';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Ennen';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Lisää tuote';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Muokaa tuotetta';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Katso tuotetta kaupan sivulla';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Lisää artikkeli';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Lisää toinen artikkeli';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Uusi tuote';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Päivitä tuote';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Tuotetiedot';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Tuotteen tila';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Tuotteen mitat ja paino';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Tuotekuvat';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Uusi artikkeli';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Päivitä artikkeli';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Artikkelin tiedot';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Artikkelin tila';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Artikkelin mitat ja paino';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Artikkelin kuvat';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Palaa päätuoteeseen';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'Päivittääksesi varsinaista kuvaa, syötä polku uuteen kuvaan.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Syötä "none" poistaaksesi nykyisen kuvan.';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Tuoteartikkelit';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Artikkelin ominaisuudet';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Oletko varma että haluat poistaa tämän tuotteen\\nja siihen liittyvät artikkelit?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Oletko varma että haluat poistaa tämän artikkelin?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Myyjä';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Valmistaja';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'Tuotetunnus';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Nimi';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Kategoria';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Vähittäishinta';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Veroton hinta';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Tuotteen kuvaus';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Lyhyt kuvaus';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'Varastossa';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'Tilauksessa';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Saatavuuspäivä';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'Erikoistuote(Feature)';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Alennustyyppi';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Julkaise?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Pituus';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Leveys';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Korkeus';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Mittayksikkö';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Paino';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Mittayksikkö';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Näytekuva';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Iso kuva';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'grammaa';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'millimetriä';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Yksikköä';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'esim.10';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Kpl. pakkauksessa';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Voit määrittää kuinka monta kappaletta on pakkauksessa. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Pakkausta laatikossa';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Voit määrittää pakkausmäärän laatikossa. (max. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Tuotteen lisäystulokset';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Tuotteen päivitystulokset';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Artikkelin lisäystulokset';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Artikkelin päivitystulokset';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Käytä CSV latausta';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Tuotekansiot';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Luettele kategoriat';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Kategorialista';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Lisää kategoria';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Kategorian tiedot';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Kategorian nimi';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Pääkategoria';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Kategorian kuvaus';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Julkaise?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Kategorian sivu';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Luettele ominaisuudet';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Ominaisuuslista:';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Ominaisuuden nimi';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Luettelojärjestys';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Lisää ominaisuus';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Ominaisuuslomake';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Uusi ominaisuus tuotteelle';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Päivitä tuotteen ominaisuus';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Uusi ominaisuus artikkelille';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Päivitä artikkelin ominaisuus';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Ominaisuuden nimi';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Luettelojärjestys';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Hintalista';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Hinta *puu*';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Hinta: ';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Ryhmän nimi';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Hinta';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Valuutta';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Lisää Hinta';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Hinnan tiedot';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Uusi hinta tuotteelle';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Päivitä tuotteen hinta';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Uusi hinta';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Päivitä artikkelin hinta';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Hinta';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Valuutta';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Ostajaryhmä';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Perusraportti';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Yksilölliset tuoteluettelot';
	var $_PHPSHOP_RB_SALE_TITLE = 'Myyntiraportti';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Myyntiaktiviteetti';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Aseta aikaväli';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Kuukausittain';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Viikottain';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Päivittäin';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Tässä kuussa';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'Viime kuussa';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'Viimeiset 60 päivää';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'Viimeiset 90 päivää';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Aloita: ';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Lopeta: ';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Näytä valittu alue';
	var $_PHPSHOP_RB_REPORT_FOR = 'Raportti:  ';
	var $_PHPSHOP_RB_DATE = 'Päivä';
	var $_PHPSHOP_RB_ORDERS = 'Tilaukset';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Kaikki myydyt artikkelit';
	var $_PHPSHOP_RB_REVENUE = 'Tulot';
	var $_PHPSHOP_RB_PRODLIST = 'Tuoteluettelo';
	var $_PHPSHOP_SHOP_MOD = 'Kauppa';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Näytekuva';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Hinta';
	var $_PHPSHOP_ORDER_STATUS_P = 'Käsittelemätön';
	var $_PHPSHOP_ORDER_STATUS_C = 'Vahvistettu';
	var $_PHPSHOP_ORDER_STATUS_X = 'Peruutettu';
	var $_PHPSHOP_ORDER_BUTTON = 'Tilaus';
	var $_PHPSHOP_SHOPPER_MOD = 'Ostaja';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Luettele ostajat';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Ostajaluettelo';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Käyttäjänimi';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Koko nimi';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Ryhmä';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Lisää ostaja';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Ostajan tiedot';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Laskutustiedot';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Osoitetiedot';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Lähetystiedot';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Lisää osoite';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Osoite nimike';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Käyttäjänimi';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Etunimi';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Sukunimi';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Toinen nimi';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Titteli';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Ostajan nimi';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Salasana';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Vahvista salasana';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Ostajaryhmä';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Yhdistys/Yritys-nimi';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Lähiosoite';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Lähiosoite 2.rivi';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Postitoimipaikka';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Osavaltio/Alue';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'Postinumero';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Maa';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Puhelin';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Matkapuhelin';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Faksi';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'Sähköposti';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Kyllä';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'Ei';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Luettele ostajaryhmät';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Ostajaryhmäluettelo';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Ryhmän nimi';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Ryhmän kuvaus';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Ostajaryhmälomake';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Lisää ostajaryhmä';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Ryhmän nimi';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Ryhmän kuvaus';
	var $_PHPSHOP_STORE_MOD = 'Kauppa';
	var $_PHPSHOP_STORE_FORM_MNU = 'Muokaa kauppaa';
	var $_PHPSHOP_STORE_FORM_LBL = 'Kaupan tiedot';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Yhteystiedot';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Iso kuva';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Lataa kuva';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Kaupan nimi';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Kaupan yritysnimi';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Lähiosoite';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Lähiosoite 2.rivi';
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
	var $_PHPSHOP_STORE_FORM_EMAIL = 'Sähköposti';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Kuvan polku';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Kuvaus';
	var $_PHPSHOP_PAYMENT = 'Maksu';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Luettele maksutavat';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Maksutapaluettelo';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Nimi';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Koodi';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Alennus';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Ostajaryhmä';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Cybercash';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Lisää maksutapa ';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Maksutapalomake';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Maksulomakkeen nimi';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Ostajaryhmä';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Alennus';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Koodi';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Luettelojärjestys';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Käytä Cybercash';
	var $_PHPSHOP_TAX_MOD = 'Vero';
	var $_PHPSHOP_TAX_RATE = 'Veroprosentit';
	var $_PHPSHOP_TAX_LIST_MNU = 'Luettele veroprosentit';
	var $_PHPSHOP_TAX_LIST_LBL = 'Veroprosenttiluettelo';
	var $_PHPSHOP_TAX_LIST_STATE = 'Osavaltion tai alueen vero';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Maakohtainen vero';
	var $_PHPSHOP_TAX_LIST_RATE = 'Veroprosentti';
	var $_PHPSHOP_TAX_FORM_MNU = 'Lisää veroprosentti';
	var $_PHPSHOP_TAX_FORM_LBL = 'Lisää veron tiedot';
	var $_PHPSHOP_TAX_FORM_STATE = 'Osavaltion tai alueen vero';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Maakohtainen vero';
	var $_PHPSHOP_TAX_FORM_RATE = 'Veroprosentti';
	var $_PHPSHOP_VENDOR_MOD = 'Myyjä';
	var $_PHPSHOP_VENDOR_ADMIN = 'Myyjät';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Luettele myyjät';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Myyjäluettelo';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Myyjän nimi';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Ylläpitäjä';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Lisää myyjä';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Lisää tiedot';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Myyjän tiedot';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Yhteystiedot';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Iso kuva';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Lataa kuva';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Myyjän kaupan nimi';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Myyjän yrityksen nimi';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Lähiosoite';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Lähiosoite 2.rivi';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Postitoimipaikka';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Osavaltio/Alue';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Maa';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'Postinumero';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Puhelin';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Valuutta';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Myyjän kategoria';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Sukunimi';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Etunimi';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Toinen nimi';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Titteli';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Puhelin 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Puhelin 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Faksi';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'Sähköposti';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Kuvan polku';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Kuvaus';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Luettele<BR>myyjä<BR>kategoriat';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Myyjän kategorialuettelo';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Kategorian nimi';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Kategorian kuvaus';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Myyjät';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Lisää<BR>myyjä<BR>kategoria';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Myyjän kategorialomake';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Kategorian tiedot';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Kategorian nimi';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Kategorian kuvaus';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Valmistaja';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Valmistajat';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Luettele valmistajat';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Valmistajaluettelo';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Valmistajan nimi';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Admin';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'Lisää valmistaja';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Lisää tiedot';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Valmistajan tiedot';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Valmistajan nimi';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Valmistajan kategoria';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'Sähköposti';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'URL - valmistajan kotisivuille';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Kuvaus';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Luettelo valmistajakategorioista';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Valmistajakategorialuettelo';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Kategorian nimi';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Kategorian kuvaus';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Valmistajat';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Lisää valmistajakategoria';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Valmistajan kategorialomake';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Kategorian tiedot';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Kategorian nimi';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Kategorian kuvaus';
	var $_PHPSHOP_HELP_MOD = 'Ohje';
	var $_PHPSHOP_CART_ACTION = 'Toiminnot';
	var $_PHPSHOP_CART_UPDATE = 'Päivitä';
	var $_PHPSHOP_CART_DELETE = 'Poista';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Hinta';
	var $_PHPSHOP_PRODUCT_CALL = 'Kysy hinta';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Edellinen';
	var $_PHPSHOP_PRODUCT_NEXT = 'Seuraava';
	var $_PHPSHOP_CART_TAX = 'Alv';
	var $_PHPSHOP_CART_SHIPPING = 'Huolinta';
	var $_PHPSHOP_CART_TOTAL = 'Summa';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Seuraava';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'REKISTERÖI';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Laskutustiedot';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Yritys';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Nimi';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Osoite';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Puhelin';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Faksi';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'Sähköposti';
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
	var $_PHPSHOP_ZONE_MOD = 'Vyöhyke huolinta';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Luettele vyöhykkeet';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Lisää vyöhyke';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Määrää vyöhyke';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Maa';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Nykyinen vyöhyke';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Määrää vyöhykkeeseen';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Päivitä';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Määritä vyöhykkeet';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Vyöhykkeen nimi';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Vyöhykkeen kuvaus';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Vyöhykkeen kustannus per artikkeli';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Vyöhykkeen kustannusraja';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Vyöhykeluettelo';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Vyöhykkeen nimi';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Vyöhykkeen kuvaus';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Vyöhykkeen kustannus per artikkeli';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Vyöhykkeen kustannusraja';
	var $_PHPSHOP_LOGIN_FIRST = 'Kirjaudu sisään tai rekisteröidy ensin. <br>Kiitos.';
	var $_PHPSHOP_STORE_FORM_TOS = 'Palvelun ehdot';
	var $_PHPSHOP_AGREE_TO_TOS = 'Hyväksy palvelun ehdot ensin.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Hyväksyn palvelun ehdot';
	var $_PHPSHOP_LEAVE_BLANK = '(jätä tyhjäksi , jos sinulla ei ole <br />yksilöllistä php-tiedostoa!)';
	var $_PHPSHOP_RETURN_LOGIN = 'Rekisteröitynyt asiakas: Kirjaudu sisään';
	var $_PHPSHOP_NEW_CUSTOMER = 'Uusi asiakas? Anna laskutus tiedot';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Asiakastiedot:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Tilaustiedot';
	var $_PHPSHOP_ACC_UPD_BILL = 'Tässä voit päivittää laskutustiedot.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Tässä voit lisätä ja muuttaa lähetystietoja.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Asiakastiedot';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Lähetystiedot';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Ei tilauksia';
	var $_PHPSHOP_ACC_BILL_DEF = '- Oletus (samat kuin laskutustiedot)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Voit lisätä lähetysosoitteita asiakastietoihin. Keksi sopiva kutsumanimi tai koodi, tälle lähetysosoitteelle.';
	var $_PHPSHOP_CONFIG = 'Asetukset';
	var $_PHPSHOP_USERS = 'Käyttäjät';
	var $_PHPSHOP_IS_CC_PAYMENT = 'luottokorttimaksu?';
	var $_PHPSHOP_SHIPPING_MOD = 'Huolinnan hallinta';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Huolinta';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Huolitsija';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Huolitsijaluettelo';
	var $_PHPSHOP_RATE_LIST_MNU = 'Rahtitariffi';
	var $_PHPSHOP_RATE_LIST_LBL = 'Tariffiluettelo';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Nimi';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Luettelojärjestys';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Luo huolitsija';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Muokkaa/luo huolitsija';
	var $_PHPSHOP_RATE_FORM_MNU = 'Luo tariffi';
	var $_PHPSHOP_RATE_FORM_LBL = 'Muokkaa/luo tariffi';
	var $_PHPSHOP_RATE_FORM_NAME = 'Tariffin kuvaus';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Huolitsija';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Maa<br>Monivalitse, käytä Ctrl-nappia ja hiirtä';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'Postinumeroalue alkaa';
	var $_PHPSHOP_RATE_FORM_ZIP_END = ' Postinumeroalue loppuu';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Pienin paino';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Suurin paino';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Maksu';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Pakkausmaksu';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Valuutta';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'ALV-tunnus';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Luettelojärjestys';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Huolitsija';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Tariffin kuvaus';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Paino alkaen ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... asti';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Huolinta Yritys';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Luettelojärjestys';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'VIRHE: Huolitsijatunnus on olemassa.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'VIRHE: Valitse huolitsija.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'VIRHE: Ainakin yksi rahtitariffi on olemassa, poista tariffit ennen huolitsijaa';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'VIRHE: Tällä tunnuksella ei löydy huolitsijaa.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'VIRHE: Valitse huolitsija.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'VIRHE: Tällä tunnuksella ei löydy huolitsijaa.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'VIRHE: Tariffikuvausta pyydettiin.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'VIRHE: Kohdemaa on epäkelpo. Enemmän kuin yksi maa voidaan jakaa seuraavasti \';\'.';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'VIRHE: Pienintä painoa pyydettiin';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'VIRHE: Suurinta painoa pyydettiin';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'VIRHE: Pienin paino täytyy olla pienempi kuin suurin paino';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'VIRHE: Huolintamaksu pyydetty';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'VIRHE: Valitse valuutta';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'VIRHE: Tariffi pyydetty';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Valitse';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Huolitsija';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Tariffi';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Hinta';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-eimitään-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Luottokortti';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Käytä maksukäsittelijää';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Pankkikortti';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Vain osoite';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Valitse vastaanottajan osoite!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Valitse lähetystapa!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Valitse maksutapa!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Tarkasta tiedot ja vahvista tilaus!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = ' Valitse lähetystapa.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = ' Valitse toinen lähetystapa.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = ' Valitse maksutapa.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Syötä luottokorttisi numero.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Syötä luottokortissa oleva nimi.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'Syötetty luottokortti numero ei ole voimassa.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Syötä luottokortin voimassaolo kuukausi.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Syötä luottokortin voimassaolo vuosi.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'Voimassaoloaika on virheellinen.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Valitse toimitusosoite.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Virheellinen tilinumero.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'Ostoskorisi on tyhjä!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'VIRHE: Valitse huolitsija!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'VIRHE: Valittua tariffia ei löydetty!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'VIRHE: Toimitusosoitettasi ei löydetty!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'VIRHE: Ei ole luottokorttitietoja... ';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'VIRHE: Luottokorttinumeroa ei löydy!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Pahoittelen, käyttämäsi luottokorttinumero on testinumero!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'Käyttäjätunnusta ei löytynyt tietokannasta!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Et ole antanut pankkitilisi haltijanimeä.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Et ole antanut IBAN tunnustasi.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Et ole antanut pankkitilisi numeroa.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Et ole antanut pankkikoodia.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Et ole antanut pankkisi nimeä.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Tilauksen seuraava vaihe väärä!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Maksutiedot tallennettu käsittelyä varten.<BR>';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Ostosten alarajaa ei ole vielä saavutettu.';
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
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Voit jättää meille myös viestin, tilauksesi yhteydessä';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Asiakkaan viesti';
	var $_PHPSHOP_INCLUDING_TAX = '(sis. $tax % alv)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Valitse artikkeli';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Artikkeli';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Latausalue';
	var $_PHPSHOP_DOWNLOADS_START = 'Aloita lataus';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Syötä sähköpostissa saamasi lataus-ID ja paina \'Aloita Lataus\'.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Latauksesi on vanhentunut';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Kaikki latauskertasi on käytetty';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Epäkelpo lataus-ID!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Viestiä ei voitu lähettää vastaanottajalle: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Viesti lähetetty vastaanottajalle: ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Lataustiedot';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'tilaamasi tiedosto(t) ovat valmiita ladattavaksi';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Syötä seuraavat lataus-ID(t) latausalueellemme: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'maksimilatauskerrat jokaiselle tiedostolle on: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Lataus voimassa {expire} päivää ensimmäisen latauksen jälkeen';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Kysymyksiä? Ongelmia?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Lataustiedon toimitti ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'Ladattava tuote?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Kiitos maksusta. Suoritus onnistui. Maksuvahvistus tulee sähköpostilla PayPal:ista. Voit nyt jatkaa tai kirjautua sisään <a href=http://www.paypal.com>www.paypal.com</a> nähdäksesi maksutiedot.';
	var $_PHPSHOP_PAYPAL_ERROR = 'Suorituksesi käsittelyn aikana tapahtui VIRHE. Tilauksesi tilaa ei voitu päivittää.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Kiitos tilauksesta.  Ohessa tiedot tilauksestasi.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Kiitos tilauksestasi.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Kysymyksiä? Ongelmia?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'Seuraava tilaus on vastaanotettu.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Katso tilausta seuraamalla alla olevaa linkkiä.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Negatiiviset määrät eivät ole sallittuja.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Syötä oikea määrä tälle tuotteelle.';
	var $_PHPSHOP_CART_STOCK_1 = 'Valittu määrä ylittää varastomäärän.';
	var $_PHPSHOP_CART_STOCK_2 = 'Tällä hetkellä $product_in_stock tuotetta saatavilla.';
	var $_PHPSHOP_CART_STOCK_3 = 'Paina tästä jos haluat jonotuslistalle.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Valitse tuotteen lisäkentästä esim.Koko tai Tarjous!';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'Ei mitään';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Herra';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Rouva';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Tri';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof';
	var $_PHPSHOP_DEFAULT = 'Oletus';
	var $_PHPSHOP_AFFILIATE_MOD = 'Filiaalien hallinta';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Luettele filiaalit';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Filiaaliluettelo';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Filiaalin nimi';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Aktiivinen';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Taksa';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Kuukausi yhteensä';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Kuukauden komissio';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Luettelojärjestys';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'Email Filiaalit';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'Email Filiaalit';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'Kenelle Email(* = ALL)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Sinun Email';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Aihe';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Sisällytä tämänhetkinen tilasto ';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Komissiotaksa';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Aktiivinen?';
	var $_PHPSHOP_DELIVERY_TIME = 'Toimitusaika ';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Toimitustiedot';
	var $_PHPSHOP_MORE_CATEGORIES = 'Muut kategoriat';
	var $_PHPSHOP_AVAILABILITY = 'Saatavuus';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Tämä tuote ei ole tällä hetkellä saatavilla.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Saamme sitä varastoon uudestaan: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Yhteenveto';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Tilastot';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Asiakkaat';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'aktiivisia tuotteita';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'passiivisia tuotteita';
	var $_PHPSHOP_STATISTIC_SUM = 'Summa';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Uudet tilaukset';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Uudet asiakkaat';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Syötä email-osoitteesi, jos haluat tiedon tuotteen tulosta varastoon. Emme käytä tai luovuta antamaasi osoitetta mihinkään muuhun tarkoitukseen, kuin ilmoittaaksemme tuotteen saapumisesta varastoon.<br /><br />Kiitos!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Kiitos kärsivällisyydestä! <br />Ilmoitamme heti, kun varastomme on täydentynyt.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Ilmoita minulle!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Tulosta näkymä';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Valitse JOKO Authorize.net TAI CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' Asetustiedoston tila:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'Muokattavissa';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'Ei muokattavissa';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Yleisasetukset';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Polku & URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Sivusto';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Lähetys';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Kassa';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Lataukset';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Maksut';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Käytä vain katalogina';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Jos valitset tämän, poistat kaikki ostoskorin toiminnot.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Näytä hinnat';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Näytä verolliset hinnat?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Määrittelee haluatko näyttää ostajille hinnat verolla vai et.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Valitse näyttääksesi hinnat. Käyttäessään katalogina, kaikki eivät halua näyttää hintojaan sivuillaan.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Virtuaalivero';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Määrittelee verotetaanko nollapainoiset tuotteet vai ei. Muokkaa ps_checkout.php->calc_order_taxable() sopivaksi.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Veron peruste:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Lähetysosoite';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Saapumisosoite';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Määrittelee veroprosentin laskettaessa veroa:<br /><ul><li>lähettäjän osavaltion / maan mukaan</li><br/><li>tai vastaanottajan sijainnin mukaan.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Mahdollista useampi veroprosentti?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Valitse tämä jos sinulla on tuotteita johon sovelletaan eri veroprosentti (esim. 16% kirjoille ja 22% muille)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Vähennä maksualennus ennen veroa/huolintaa?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Mahdollista asiakkaan tehdä arvostelu/pisteytys';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Jos valittu, asiakkaat voivat <strong>pisteyttää</strong> ja <strong>kirjoittaa arvosteluja</strong> tuotteista. <br />Asiakkaat voivat kirjoittaa kokemuksiaan tuotteista toisille asiakkaille.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Ilmaisee vähennetäänkö alennus valitulle maksulle ENNEN (ruksattu) vai JÄLKEEN veron ja rahdin.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Asiakkaat voivat jättää pankkiyhteystiedot?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Valitse, jos haluat asiakkaasi voivan antaa pankkiyhteystietonsa rekisteröityessään kauppaan.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Asiakkaat voivat valita osavaltion/alueen?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Valitse jos haluat asiakkaasi voivan valita osavaltion/alueen tiedot rekisteröityessään kauppaan.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Kaupankäyntiehdot pitää hyväksyä?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Valitse jos haluat asiakkaasi hyväksyvän ehdot ennen rekisteröitymistään kauppaan.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Tarkista varasto?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Asettaa tarkastetaanko varastotilanne kun käyttäjä lisää tuotteen ostoskoriin. Jos asetettu, estää käyttäjää lisäämästä enemmän tuotetteita kuin varastotilanne sallii.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Mahdollista filiaaliohjelma?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Mahdollistaa filiaalien seurannan kaupan etusivulla. Mahdollista, mikäli olet lisännyt filiaaleja hallintapuolelta (backend)..';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Sähköpostitilauksen muoto:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Text mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Määrittelee miten tilausvahvistuksen sähköposti lähetetään:<br /><ul><li>yksinkertainen teksti sähköposti</li><li>vai html sähköposti jossa on kuvia.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Salli hallinta etupuolelta niille, joilla ei ole oikeuksia hallintapuolelle (backend)?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'Tällä asetuksella voit mahdollistaa (frontend) etupuolelta hallinnan niille käyttäjille, jotka ovat kauppa-admineja, mutta joilla ei ole Joomla/Mambo Backend-oikeuksia (esim. Registered ja  Editor).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'URL sivuillesi. Yleensä identtinen Joomla/Mambo URL:in kanssa(kauttaviiva rivin lopussa!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'SECUREURL';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'Suojattu URL sivuillesi. (https - kauttaviiva rivin lopussa!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'COMPONENTURL';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'URL VirtueMart-komponenttiin. (kauttaviiva rivin lopussa!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'IMAGEURL';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'URL VirtueMart-komponentin kuvahakemistoon.(kauttaviiva perässä!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'ADMINPATH';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'Polku VirtueMart-komponentin hakemistoon.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'CLASSPATH';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'Polku VirtueMart-classes hakemistoon.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'PAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'Polku VirtueMart-html hakemistoon.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'IMAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'Polku VirtueMart-shop_image hakemistoon.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'HOMEPAGE';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Tämä sivu ladataan oletuksena.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'ERRORPAGE';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Oletussivu virheilmoituksille.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'DEBUGPAGE';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Oletussivu debug-viesteille.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'DEBUG ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'DEBUG? Asettaa päälle debug tulostuksen. Tämän ansiosta DEBUGPAGE tulostuu jokaisen sivun alareunaan. Erittäin hyödyllinen kaupan kehityksessä, koska näyttää ostoskorin sisällön, kaavakkeiden kenttäarvot jne.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'FLYPAGE';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Oletussivu tuotteen tietojen esitykseen.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Kategoriamallinne';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Määrittelee oletusmallinnuksen tuotteiden esittelyyn kategoriassa.<br />Voit luoda uusia mallinnuksia räätälöimällä olemassa olevia mallinnustiedostoja <br />(löytyvät hakemistosta <strong>COMPONENTPATH/html/templates/</strong> ja alkavat browse_)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Oletusmäärä tuotteita rivissä';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Määrittelee tuotteiden määrän riviä kohden. <br />Esimerkki: Jos asetat määräksi 4, kategoriamallinnus näyttää 4 tuotetta per rivi';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = '"no image" kuva';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Tämä kuva näkyy, kun tuotteelle ei ole määritelty kuvaa.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'Hakurivit';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Määrittelee rivimäärän per sivu, kun hakutulokset esitetään luettelona.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'Hakurivin 1, väri';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Määrittää parittomien rivien värin etsintä tuloksia esitettäessä luettelona.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'Hakurivin 2, väri';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Määrittää parillisten rivien värin etsintä tuloksia esitettäessä luettelona.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'Enimmäisrivimäärä';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Asettaa rivimäärän, joka näytetään järjestysluettelon valintalaatikossa.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Näytä powered-by-VirtueMart kuva';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Näyttää  powered-by-VirtueMart kuvan sivujen alaosassa.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Valitse kauppasi huolintatapa';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Standardi huolintamoduuli, jossa erikseen määriteltävissä olevat huolitsijat ja tariffit. <strong>SUOSITELTAVA !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = 'Zone Shipping Module Country Version 1.0<br />Lisätietoja tästä moduulista näet osoitteessa: <a href="http://ZephWare.com">http://ZephWare.com</a><br />tai ota yhteyttä <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Valitse, jos haluat käyttää moduulia.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<a href="http://www.ups.com" target="_blank">UPS Online® Tools</a> Lähetyslaskuri';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'UPS -koodi';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Sinun UPS -koodi';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'UPS -käyttäjän id';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'UPS -käyttäjän ID';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'UPS -salasana';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'Sinun UPS -salasanasi';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'InterShipper -moduuli. Valitse vain, jos sinulla on Intershipper.com -tili';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Poista huolinnan valinta. Valitse mikäli asiakkaasi ostavat ladattavia tuotteita, joita ei tarvitse lähettää.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'InterShipper -salasana';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Salasanasi Intershipper -tiliisi.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'InterShipper -sähköposti';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'Sähköpostiosoitteesi intershipper -tiliisi.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'KOODAUSAVAIN';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Tällä avaimella salataan tiedot tietokannassa. Tämän takia tämä tiedoston näkyminen tulisi aina suojata.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Näytä maksamispolun(Checkout Bar)';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Aseta päälle, jos haluat maksamispolun(Checkout-Bar) näkyvän asiakkaalle maksuprosessin aikana ( 1 - 2 - 3 - 4 graafisesti esitettynä).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Valitse kauppasi maksuprosessi (checkout)';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Normaali :</strong><br/>
              1. Lähetysosoite<br />
              2. Lähetystapa<br />
              3. Maksutapa<br />
              4. Vahvista tilaus';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Prosessi 2:</strong><br/>
              1. Lähetysosoite<br />
              2. Maksutapa<br />
              3. Vahvista tilaus';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Prosessi 3:</strong><br/>
              1. Lähetystapa<br />
              2. Maksutapa<br />
              3. Vahvista tilaus';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Prosessi 4:</strong><br/>
              1. Maksutapa<br />
              2. Vahvista tilaus';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Salli lataukset tietokoneelle';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Valitse mahdollistaaksesi lataukset. Vain jos haluat myydä ladattavia tuotteita.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Tilauksen tila(order status), joka mahdollistaa latauksen';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Valitse tilauksen tila(order status), jolla asiakas saa tiedon latausmahdollisuudesta.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Tilauksen tila(order status), joka estää lataamisen';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Asettaa tilauksen tilan(order status), joka estää asiakasta lataamasta tiedostoa.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'Latauspolku';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'Fyysinen polku ladattavien tiedostojen hakemistoon. (kauttaviiva lopussa!)<br><span class="message">Turvavinkki: Jos voit, niin tallenna lataustiedostot muualle, kuin www-sivustosi juureen!</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Latausten maksimimäärä';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Aseta enimmäismäärä latauksille, jonka yksi lataustunnus (Download-ID) voi tehdä tilausta kohti';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Latauksen aikaraja';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Aseta aika <strong>sekunneissa</strong>, jonka aikana asiakkaan on suoritettava latauksensa. Aika alkaa ensimmäisestä lataamisesta! Kun aika ylittyy, lataamistunnus  (download-ID) lakkaa olemasta voimassa.<br />Muista: 86400s=24h.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Salli IPN-maksu PayPalin kautta?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Merkitse tämä, jos haluat asiakkaittesi käyttävän PayPal-maksutapaa.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'PayPal-maksun sähköpostiosoite:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Yrityksesi (business email) sähköpostiosoite PayPal-maksuja varten. Käytetään myös vastaanottajaosoitteena (receiver_email).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Tilaustilanne/vaihe (Order Status), jossa rahansiirto voi onnistua (for successful transactions)';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Valitse tilanne/vaihe, johon tilaus asetetaan, jos PayPal-siirto onnistui. (Select the order status to which the actual order is set, if the PayPal IPN was successful.) Jos latausmahdollisuus on aktivoituna, aseta tilaustilanne/vaihe, jossa lataus voi onnistua (asiakas saa tästä välittömästi tiedon sähköpostitse). (If using download selling options: 
  select the status which enables the download (then the customer is instantly notified about the download via e-mail).)';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Tilaustilanne/vaihe epäonnistuneita siirtoja varten. (Order Status for failed transactions)';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Valitse tilaustilanne/vaihe epäonnistuneita PayPal-siirtoja varten. (Select an order status for failed PayPal transactions.)';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Aktivoi maksaminen PayMaten kautta ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Merkitse tämä, jos aiot sallia asiakkaasi käyttävän  australialaista PayMate-maksujärjestelmää.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'PayMate-käyttäjänimi:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'PayMate-käyttäjätilisi.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Aktivoi Authorize.net-maksujärjestelmä?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Merkitse tähän, jos aiot käyttää Authorize.net-järjestelmää.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Testaustila ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Valitse "Yes" testataksesi. Valitse "No" mahdollistamaan suorat rahansiirrot.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Kyllä';
	var $_PHPSHOP_ADMIN_CFG_NO = 'Ei';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Authorize.net-kirjautumistunnus (Login ID)';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'Tässä on Authorize.Net-kirjautumistunnuksesi. (Login ID)';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Authorize.net-siirtoavain (Transaction Key)';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'Tässä on Authorize.net-siirtoavaimesi (Transaction Key)';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Varmistamistapa (Authentication Type)';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'Tässä on Authorize.Net-varmennustapa. (authentication type).';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Salli CyberCash?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Merkitse tämä, jos aiot käyttää CyberCash-maksutapaa.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash MERCHANT';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_MERCHANT on CyberCash-kauppiastunnus (Merchant ID)';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash-kauppiasavain (Merchant Key)';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash-kauppiasavain (Merchant Key) on  CyberCashin antama kauppiasoikeus';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash-maksuosoite (PAYMENT URL)';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'CyberCash-maksuosoite (PAYMENT URL) on Cybercashin turvallinen maksuosoite (secure payment)';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash AUTH TYPE';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'CyberCash AUTH TYPE on Cybercash varmennustyyppi (authentication type)';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Tarkennettu haku';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Etsi kaikista tuoteryhmistä';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Etsi kaikista tuotetiedoista';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Vain tuotenimistä';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Vain valmistajista';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Vain tuotetiedoista';
	var $_PHPSHOP_SEARCH_AND = 'JA';
	var $_PHPSHOP_SEARCH_NOT = 'EI';
	var $_PHPSHOP_SEARCH_TEXT1 = 'Ensimmäinen pudotuslista antaa mahdollisuuden rajata haku yhteen tuotekategorian. Toinen pudotuslista antaa mahdollisuuden rajata haku tiettyyn tuotetiedon osaan, esim. tuotenimistä. Kun olet tehnyt nämä rajaukset (tai pitäytynyt perusvalinnoissa), tee haku haluamallasi hakusanalla.';
	var $_PHPSHOP_SEARCH_TEXT2 = ' Voit tarkentaa hakua lisäsanoilla sekä käyttämällä niiden välissä JA- tai EI-operaattoreita. JA-sanan lisäys merkitsee, että kummankin hakusanan on esiinnyttävä myös haettavassa kohteessa. EI-sanan käyttö merkitsee, että valituksi tulee kohde, jossa ensimmäinen hakusana esiintyy mutta toinen ei.';
	var $_PHPSHOP_ORDERBY = 'Järjestys';
	var $_PHPSHOP_CUSTOMER_RATING = 'Keskimääräinen asiakasarvio';
	var $_PHPSHOP_TOTAL_VOTES = 'Äänten määrä';
	var $_PHPSHOP_CAST_VOTE = 'Äänestä';
	var $_PHPSHOP_RATE_BUTTON = 'Arvioi';
	var $_PHPSHOP_RATE_NOM = 'Arvio';
	var $_PHPSHOP_REVIEWS = 'Asiakkaiden arvioita';
	var $_PHPSHOP_NO_REVIEWS = 'Ei vielä asiakasarviointeja tälle tuotteelle.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Jospa olisit ensimmäinen arvionantaja...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Kirjaudu sisään ja anna arviosi.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Anna vielä arvosana tuotteelle arviosi päätteeksi!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Kirjoita vielä muutama sana. Minimimerkkimäärämme on: 100';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Lyhennä hiukan arviotasi. Enimmäismerkkimäärämme on: 2000';
	var $_PHPSHOP_WRITE_REVIEW = 'Kirjoita arviosi tästä tuotteesta!';
	var $_PHPSHOP_REVIEW_RATE = 'Ensiksi: anna arvosana. Valitse asteikolta 0:sta (huonoin) 5 tähteen (paras).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Seuraavaksi: kirjoita lyhyt arvioteksti ....(min. 100, max. 2000 merkkiä) ';
	var $_PHPSHOP_REVIEW_COUNT = 'Merkkimäärä: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Lähetä arvio';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Meillä on jo aiemmin laatimasi arvio tälle tuotteelle.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Kiitos arviosta!';
	var $_PHPSHOP_COMMENT = 'Kommentti';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Lisää tai muokkaa luottokorttityyppejä';
	var $_PHPSHOP_CREDITCARD_NAME = 'Luottokortin nimi';
	var $_PHPSHOP_CREDITCARD_CODE = 'Luottokortti lyhytkoodi';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Luottokortin tyyppi';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Luottokorttilista';
	var $_PHPSHOP_UDATE_ADDRESS = 'Päivitä osoite';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Jatka ostoksia';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Tilauksesi onnistui ja on tallennettu!';
	var $_PHPSHOP_ORDER_LINK = 'Tästä linkistä pääset tilaustietoihin.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'Tilauksen No. {order_id} ,tila on muutettu.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'Uusi tila on:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'Tarkista tilauksesi tiedot seuraamalla tätä linkkiä tai kopioimalla linkki selaimesi osoitepalkkiin:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Tilauksen tilan muutos: Tilaus {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Lähetetäänkö tiedotus muutoksesta asiakkaalle?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Vaihda tilauksen tila ensin!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Perusasiakasryhmän alennusprosentti (%)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Positiivinen luku X tarkoittaa: ellei tuotteelle ole osoitettu tätä ostajaryhmää koskevaa hintaa, perushintaa lasketaan X %:lla. Negatiivinen lukema tarkoittaa päinvastaista';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Tuotealennus';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Tuotealennusluettelo';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Lisää/muokkaa tuotealennusta';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Alennuksen määrä';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Syötä alennuksen määrä';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Alennustyyppi';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Prosentti';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Summa';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Aseta prosentti- tai summa-alennus';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Alennus alkaa';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Määrittää alennuksen aloituspäivämäärän';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Alennus päättyy';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Määrittää alennuksen päättymispäivämäärän';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Käytä tuotealennuskaavaketta lisätäksesi alennuksia!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Säästät';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Suurenna kuvaa';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Valuutan esitystapa';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Valuutan symboli';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Voit käyttää myös HTML muotoja (esim. &euro;,&pound;,&yen;,...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Desimaalit';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Esitettyjen desimaalien määrä (voi olla 0)<br><b>Suorittaa pyöristyksen mikäli luvun desimaalien määrä on eri</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Desimaalin symboli';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Merkki, jota käytetään desimaalin symbolina';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Tuhansien erottaja';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Merkki, jota käytetään tuhansien erottaja (voi olla tyhjä)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Positiivilukujen esitystapa';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Näyttää tavan, jolla esitetään positiiviset luvut.<br>(Symb tarkoittaa valuutan symbolia)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Negatiivisten lukujen esitystapa';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Näyttää tavan, jolla esitetään negatiiviset luvut.<br>(Symb tarkoittaa valuutan symbolia)';
	var $_PHPSHOP_OTHER_LISTS = 'Muut tuoteluettelot';
	var $_PHPSHOP_MORE_IMAGES = 'Näytä lisää kuvia';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Tuotekuvat kohteelle';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Takaisin tuotetietoihin';
	var $_PHPSHOP_FILEMANAGER = 'Tiedostonhallinta';
	var $_PHPSHOP_FILEMANAGER_LIST = 'Tiedostonhallinta::Tuoteluettelo';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Lisää Kuva/Tiedosto';
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
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Näytekuva';
	var $_PHPSHOP_FILES_FORM = 'Lataa tiedosto kohteeseen';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Nykyinen tiedosto';
	var $_PHPSHOP_FILES_FORM_FILE = 'Tiedosto';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Kuva';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Lataa kohteeseen';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'Oletuspolku tuotekuvalle';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Määritä tiedoston sijainti';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Latauspolku (esim. ladattavien tuotteiden myyntiin!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Luo näytekuva automaattisesti?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Tiedosto on julkaistu?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Tiedoston nimike (minkä asiakas näkee)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Tiedoston kuvaus';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'Tiedoston URL (valinnainen)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Anna tiedoston polku!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'Näytekuva luotiin onnistuneesti!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'Näytekuvaa EI voitu luoda!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Kuvan/tiedoston latausvirhe';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Isoa kuvaa ei voitu poistaa.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Iso kuva onnistuneesti poistettu.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Näytekuvaa ei voitu poistaa (mahdollisesti ei ole olemassa): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Näytekuva onnistuneesti poistettu.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Tiedostoa ei voitu poistaa.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Tiedosto onnistuneesti poistettu.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Pyydettyä tiedostoa ei löydetty!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Kuvaa ei löydetty!';
	var $_PHPSHOP_COUPON_MOD = 'Kuponki';
	var $_PHPSHOP_COUPONS = 'Kupongit';
	var $_PHPSHOP_COUPON_LIST = 'Kuponkiluettelo';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Kuponki on jo lunastettu.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Kuponki lunastettu! Kiitos.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Jos sinulla on kupongin koodi, syötä se tähän:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Lähetä';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Lähettämäsi kuponkikoodi on jo olemassa. Yritä uudestaan.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Päivitä kuponki';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Klikkaa kuponkikoodia muokataksesi sitä, tai poistaaksesi kuponkikoodin, valitse ja klikkaa Poista:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Koodi';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Prosentti tai kiinteä summa';
	var $_PHPSHOP_COUPON_TYPE = 'Kuponkityyppi';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Lahjakuponki poistetaan heti, kun se on hyvitetty ostoksen yhteydessä. Kestokuponki on käytettävissä niin usein kuin asiakas haluaa.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Lahjakuponki';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Kestokuponki';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Arvo';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Poista koodi';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Haluatko varmasti poistaa tämän kuponkikoodin?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Täytä kaikki kentät.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'Kupongin arvon on oltava luku.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Uusi kuponki';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Kuponkikoodi';
	var $_PHPSHOP_COUPON_PERCENT = 'Prosentti';
	var $_PHPSHOP_COUPON_TOTAL = 'Kiinteä summa';
	var $_PHPSHOP_COUPON_VALUE = 'Arvo';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Kuponkikoodi talletettu.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Tallenna kuponki';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Kuponkialennus';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Kuponkikoodia ei löydetty. Yritä uudestaan.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Mahdollista kuponkien käyttö';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Mikäli mahdollistat kuponkien käytön, asiakkaasi voivat käyttää kuponkien numerot saadakseen alennusta ostoistaan.';
	var $_PHPSHOP_FREE_SHIPPING = 'Ilmainen rahti';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Tämän tilaus toimitetaan rahtivapaasti!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Ilmaiseen rahtiin oikeuttava minimisumma on ';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Minimisumma (SISÄLTÄEN VERON!) joka oikeuttaa ilmaiseen rahtiin 
                                                (esim: <strong>50</strong> tarkoittaa ilmaista rahtia, kun asiakas ostaa vähintään
                                                 50 &euro; (sisältäen veron) tai suuremmalla summalla.';
	var $_PHPSHOP_YOUR_STORE = 'Sinun kauppasi';
	var $_PHPSHOP_CONTROL_PANEL = 'Hallintapaneeli';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF - Kuvake';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Näytä tai piilota PDF-kuvake kaupassa';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Kaupankäyntiehdot pitää hyväksyä JOKAISESSA TILAUKSESSA?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Valitse jos haluat, että asiakkaasi hyväksyy kaupanehdot JOKAISESSA TILAUKSESSA (ennen tilauksen tekoa).';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Pankkitilin tyyppi';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Shekki';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Business Shekki';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Säästö';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Toistuvat maksut?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Määritä, mikäli haluat toistuvat maksut.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Sisäinen toimintavirhe';
	var $_PHPSHOP_PAYMENT_ERROR = 'Epäonnistuminen maksun suorituksessa';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Maksusuoritus hyväksytty';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS ei pystynyt antamaan rahtihintatietoa.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Taattu aika (päivinä) toimitukseen';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'UPS:in noutotapa';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Kuinka paketit luovutetaan UPS:ille?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'UPS-pakkaustyyppi?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Valitse oletuspakkaustyyppi.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Yksityiseen osoitteeseen toimitus?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Yksityistoimitus (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Yritystoimitus (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Hintailmoitus: yksityistoimitus (RES) tai yritystoimitus (COM).';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Käsittelymaksu';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Käsittelymaksusi tälle rahtitavalle.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Veroluokka';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Käytä seuraavaa veroluokkaa rahtimaksulle.';
	var $_PHPSHOP_ERROR_CODE = 'Virhekoodi';
	var $_PHPSHOP_ERROR_DESC = 'Virhekuvaus';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Näytä/muuta tapahtuma-avainta';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Näytä/muuta salasana/tapahtuma-avainta';
	var $_PHPSHOP_TYPE_PASSWORD = 'Syötä salasanasi';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Voimassaoleva salasana';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Voimassaoleva tapahtuma-avain';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'Tapahtuma-avain onnistuneesti muutettu.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Vaadi/poimi luottokortin turvakoodi(CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Tarkista, löytyvätkö CVV2/CVC2/CID -luvut (3- tai 4- numeroiset koodit luottokortin takana, American Express-korteissa etupuolella)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Kirjoita tähän 3- tai 4-numeroinen koodi luottokorttisi takaa (American Express-korteissa etupuolella)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'Et pääse eteenpäin lisäämättä kortin koodia (Credit Card Code).';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'JOKO lisäät tähän tiedostonimen';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'TAI lataat uuden tiedoston';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'HUOM: Voit lisätä tiedostonimen. <strong>Jos lisäät tiedostonimen tässä, mitään tiedostoa ei ladata!!! Sinun täytyy ladata se FTP-ohjelmalla manuaalisesti!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Voit ladata tiedoston omalta koneelta. Tästä tiedostosta tulee se tuote, jota myyt. Se korvaa nykyisen tiedoston.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Kirjoita tähän teksti, joka näkyy tuotetiedoissa toimitusaikana.<br />esim.: 24h, 48 tuntia, 3 - 5 päivää';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'TAI valitse kuva, joka näkyy tuotetiedossa toimitusaikana.<br />Kuvat ovat hakemistossa <i>/components/com_virtuemart/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Piirrelista';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Esimerkkejä piirrelistan nimikkeistä (Attribute List Format):</h4>
        <pre>Koko,S[-2.99],M,XL[+1.99];Väri,Punainen,Vihreä,Keltainen,Erikoisväri[=24.00];jne,..,..</pre>
        <h4>Hintamääritykset:</h4>
        <pre>
        &#43; == Lisää tämä määrä asetettuun hintaan.<br />
        &#45; == Vähennä tämä määrä asetetusta hinnasta.<br />
        &#61; == Aseta tuotteelle tämä hinta.
      </pre>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Erityispiirrelista (Custom Attribute List)';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Esimerkkejä erityispiirrelistan sisällöstä:</h4>
        <pre>Nimi;Ekstra;...</pre>';
	var $_PHPSHOP_MULTISELECT = 'Käytä monivalintaan Ctrl-nappia ja hiirtä';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'Sallitaanko eProcessingNetwork.com-maksu?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Merkitse tämä, jos sallit eProcessingNetwork.com-maksutavan.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Testaustila ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Valitse KYLLÄ  testaamista varten. Valitse EI varsinaista maksutoimintaa varten.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'eProcessingNetwork.com-kirjautumistunnus (Login ID)';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'Tämä on eProcessingNetwork.com-kirjutumistunnuksesi (Login ID)';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'eProcessingNetwork.com-siirtoavain (Transaction Key)';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'Tämä on eProcessingNetwork.com-siirtoavaimesi (Transaction Key)';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Vahvistamistyyppi (Authentication Type)';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'Tämä on eProcessingNetwork.comin vahvistamistyyppi (authentication type).';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Sukulaistuotteet';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Voit tällä listalla luoda tuotesukulaisuuksia. Valitse yksi tai useampia tuotteita, joista tulee siten keskenään <strong>tuotesukulaisia</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Ehkä myös tämä tai nämä tuotteet kiinnostavat.';
	var $_PHPSHOP_IMAGE_ACTION = 'Kuvan toiminta';
	var $_PHPSHOP_NONE = 'ei mitään';
	var $_PHPSHOP_ORDER_HISTORY = 'Tilaushistoria';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Kommentti';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Tilaukseen liittyvät huomiot';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Lisää tämä kommentti?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Lisäyspäivämäärä';
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
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Lisää/muokkaa tuotetyyppi(ä)';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Tyyppilista tuotteille:';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Listaa tuotetyypit';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Lisää tuotetyyppi kohtaan';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Lisää tuotetyyppi';
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
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Tuotetyyppiä ei löydy!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Muuttujan nimi';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Tämä nimi toimii taulukon sarakenimenä. Kirjoitetaan yhtenäisin kirjaimin ja ilman välejä.<BR>Esimerkiksi: main_material';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Muuttujan otsake';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Muuttujan kuvaus';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Muuttujatyyppi';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Numero';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Teksti';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Lyhyt teksti';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Kelluva';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Merkki';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Päivämäärä ja aika';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Päivämäärä';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'YYYY-MM-DD';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Aika';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'HH:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Rivinvaihto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Useita arvoja';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Mahdollisia arvoja';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Näytetäänkö mahdollisia arvoja monivalintoja varten?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Jos valitaan mahdolliset arvot -valinta, muuttujat (parametrit) voivat saada vain niitä arvoja. Esimerkki mahdollisista muuttuja-arvoista:</strong><BR><span class="sectionname">teräs;puu;muovi;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Oletusarvo';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'Muuttujan oletusarvon määrittelyssä käytetään seuraavaa muotoa:<ul><li>Pvm: YYYY-MM-DD</li><li>Aika: HH:MM:SS</li><li>Pvm & aika: YYYY-MM-DD HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Yksikkö';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Muuttujiin perustuva tehohaku';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Muuttujahaku';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Haluatko hakea tuotteita niiden teknisten muuttujien (parametrien) perusteella?<BR>Voit käyttää mitä tahansa valmista lomaketta:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Haku ei tuottanut tulosta.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Tuotetyyppiä ei löydy.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'Kuten';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'Eri kuin';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Koko tekstin haku';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Kaikki valittu';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Mikä tahansa valittu';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Tyhjennä lomake';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Etsi kategoriasta';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Vaihda muuttujia';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Alenevassa järjestyksessä';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Nousevassa järjestyksessä';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Kategorian muuttujat';
	var $_PHPSHOP_FEE = 'Pakkauskulut';
	var $_PHPSHOP_PRODUCT_CLONE = 'Kopioi tuote';
	var $_PHPSHOP_CSV_SETTINGS = 'Asetukset';
	var $_PHPSHOP_CSV_DELIMITER = 'Kenttien erotinmerkki (Delimiter)';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Tekstin erotinmerkki (Field Enclosure Char)';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Tuo CSV tiedosto';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Tuo CSV tiedosto';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Tuo serverin hakemistosta';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Tuo CSV-tiedosto serveriltä';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Vie CSV tiedostoon';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Valitse kenttien järjestys';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Oletusjärjestys';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'Omajärjestys';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Vie kaikki tuotteet CSV-tiedostoon';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'CSV tiedoston asetukset';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Tallenna muutokset';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Kentän nimi';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'Oletusarvo';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Kenttien järjestys';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Pakolliset kentät?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Tuo/Vie';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Lisää uusi kenttä';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Ohjeet';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Tuotetta ei löydy!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Näytä varastosta loppuneet tuotteet';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Tämä aktivoituna näyttää tuotteet, joita ei nyt juuri ole varastossa. Muussa tapauksessa niitä ei näytetä.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = ' {unit} pakkauksessa:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = ' {unit} laatikossa:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Älä näytä tekstiä, "Tuote loppunut varastosta"';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Lisäominaisuus- ja alennustuotteet';
	var $_PHPSHOP_FEATURED = 'Lisäominaisuus';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Takaisin maan asetuksiin';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Takaisin tiedostonhallintaan';
	var $_PHPSHOP_ADD_STATE = 'Lisää osavaltio';
	var $_PHPSHOP_LIST_STATES = 'Luettele osavaltiot';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'Lisäominaisuus- ja alennustuotteet';
	var $_PHPSHOP_SHOW_FEATURED = 'Lisäominaisuus tuotteet';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'Alennustuotteet';
	var $_PHPSHOP_FILTER = 'Rajaa';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Takaisin pääsivulle';
	var $_PHPSHOP_EXPAND_TREE = 'Laajenna puu';
	var $_PHPSHOP_COLLAPSE_TREE = 'Supista puu';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Alennettu hinta';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Tässä voit lisätä alennuksen tälle tuotteelle.<br/>Kaupan alennusasetuksiin lisätään tämä alennus.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Yksikköhinta';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'Kauppa on offline-tilassa?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'Jos valitset tämän, kauppa on Offline-tilassa ja näyttää alla olevan viestin.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Offline-tilan viesti';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Prefix, kaupan tietokantatauluille';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = '<strong>vm</strong> on oletuksena';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Näytä sivunavigaatio tuoteluettelon yläosassa?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Valinta näyttää tai piilottaa sivunavigaation tuoteluettelon yläosassa *Frontend*.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Näytä tuotteiden määrä?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Näyttää tuotteiden määrän kategorioissa. Esim. testituotteet(4)?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = '"Lisää koriin" painikkeen tyyli';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'Salli dynaamisten näytekuvien luonti?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'Kun valittu, sallit dynaamisten näytekuvien luonnin. Kaikki näytekuvat luodaan valitsemaasi kokoon
        käyttäen PHP\'n GD2 funktiota. (Voit tarkistaa GD2 tuen hallintapaneelista "System" -> "System Info" -> "PHP Info" -> gd.) 
        Näytekuvien laatu on parempi kuin kuvien, jotka ovat "pienennetty" selaimessa. Uudet näytekuvat tallennetaan hakemistoon /shop_image/prduct/resized. Jos kuva on jo kerran pienennetty, käytetään sitä. Näin kuvia ei pienennetä aina uudestaan.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'Näytekuvan leveys';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'Kuvan <strong>leveys</strong> näytekuvalle.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Näytekuvan korkeus';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'Kuvan <strong>korkeus</strong> näytekuvalle.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Tee ainakin yksi valinta lähetysasetuksissa!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Hinnan asetukset';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Valitse ryhmä joille hinnat näytetään';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'Valittu ryhmä ja kaikki sitä suuremmilla oikeuksilla näkevät hinnan.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Näytä "(sis. XX% ALV)" hinnan jälkeen?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'Kun valittu, käyttäjät näkevät tekstin (sis. xx% ALV) kun hinnat näytetään veroineen.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'Näytä hintalappu pakkaukselle?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'Kun valittu, hintalappuun lisätään tuotteen yksikkö- ja pakkausarvot:<strong>Esim. Yksikköhinta (2 litraa): xx.xx<strong><br/>Muussa tapauksessa hinta näkyy tavallisena: <strong>Hinta: xx.xx</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'Core asetukset';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Core asetukset';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = '"Frontend" ominaisuudet';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Veron asetukset';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Kappalemäärä alkaa';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Kappalemäärä loppuu';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'Käyttäjien rekisteröinti asetukset';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = '*User registration allowed*?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = '*New account activation necessary*?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Käytä helppoa rekisteröitymistä?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'Kun valittu, rekisteröityjien ei tarvitse täyttää käyttäjänimeä ja salasanaa. Sähköpostiosoitetta käytetään käyttäjätunnuksena ja salasana luodaan satunnaisesti. Rekisteröintitiedot lähetetään sähköpostitse.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Hei %s,
Kiitos rekisteröitymisestäsi %s :n sivustolle. Asiakastietosi on tallennettu.
Voit jatkossa käyttää tilauksissa alla olevia tunnuksia.
Sivusto %s 
Käyttäjätunnus - %s
Salasana - %s
Älä vastaa tähän viestiin, koska se on lähetetty automaattisesti.
';
	var $_PEAR_LOG_CRIT = 'Kriittinen';
	var $_PEAR_LOG_ERR = 'Virhe';
	var $_PEAR_LOG_WARNING = 'Varoitus';
	var $_PEAR_LOG_INFO = 'Info';
	var $_PEAR_LOG_TIP = 'Info';
	var $_PEAR_LOG_ALERT = 'Hälytys';
	var $_PEAR_LOG_EMERG = 'Vakavahälytys';
	var $_PEAR_LOG_NOTICE = 'Huom.';
	var $_PEAR_LOG_DEBUG = 'Debug';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'Käytä PayFlow Pro maksutapaa?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'Käytä "VeriSign PayFlow Pro" maksutapaa kaupassasi.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'Testaustila ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'Valitse \'Yes\' testataksesi. Valitse \'No\' mahdollistamaan suorat rahansiirrot.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'VeriSign processing Partner ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'The Partner ID provided to you by the authorized VeriSign Reseller that registered you for the PayFlow Pro service';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'PayFlow Pro Login ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'Kirjoita tähän "PayFlow Pro Login ID"';
	var $_VM_TAXDETAILS_LABEL = 'Vero sisältää';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'Oletusarvo "Järjestys" valikossa';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'Määrittää, mikä on tuotteiden oletusjärjestys tuotesivuilla';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'Valinnaiset "Järjestys" valinnat';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'Valitse "Järjestys" valinnat, joilla käyttäjät valitsevat tuotejärjestyksen tuotesivuilla. Jos et valitse mitään, "Järjestys"-kenttää ei näytetä ollenkaan.';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO = 'Näytä lyhyt ilmoitus "Palautusoikeus", tilausta hyväksyttäessä?';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP = 'Monessa Euroopan maassa, kauppiaan on ilmoitettava asiakkailleen tilauksen palautus- ja purkamisehdot. Valinta näyttää viestin.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT = 'Palautusoikeus teksti(lyhyt versio). Jos et käytä alla olevaa pitkää tekstisivua, niin poista lyhyen tekstin lopusta linkkiteksti.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP = 'Tähän tulee lyhyt viesti palautusoikeudesta. Se näytetään asiakkaalle tilausvahvistuksessa.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK = 'Pitkä versio palautusoikeus-tekstistä(linkki tekstisivulle(content item)).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP = 'Valitse tästä sivu(content item),jossa on selostus palautusoikeudesta. Jos et ole vielä tehnyt sellaista sivua, 
niin tee sivu hallintapaneelissa ja lisää sen linkki tässä.';
	var $_VM_LEGALINFO_SHORTTEXT = '<h5>Palautusoikeus</h5>
Tuotteilla on 14 vrk:n palautusoikeus edellyttäen, 
että tuote palautetaan omassa alkuperäispakkauksessaan käyttämättömänä. 
Vaihdoissa ja palautuksissa liitä lähetyksen mukaan mahdollinen pakkauslista.
Lisätietoa palautusoikeudesta,  <a href="%s" onclick="%s" target="_blank">Palautusoikeus</a> sivu.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EU = 'European Union -veromuoto';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE = 'Session data kansio on kirjoitussuojattu. Muuta kirjoitusoikeus, tai ota yhteys palveluntarjoajaan.';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX = 'Session Save Path %s on kirjoitussuojattu. Muuta kirjoitusoikeus! Yritetään tilapäisesti käyttää %s .';
	var $_VM_SESSION_COOKIES_NOT_ACCEPTED_TIP = 'Selaimesi ei salli evästeitä (cookies). Muuta selaimesi asetuksissa, salli evästeet (enable cookies).';
	var $_PHPSHOP_CSV_SKIP_FIRST_LINE = 'Ohita ensimmäinen rivi';
	var $_PHPSHOP_CSV_SKIP_DEFAULT_VALUE = 'Ohita oletusarvot';
	var $_PHPSHOP_CSV_OVERWRITE_EXISTING_DATA = 'Ylikirjoita?';
	var $_PHPSHOP_CSV_INCLUDE_COLUMN_HEADERS = 'Sisällytä sarakkeiden otsikot';
	var $_PHPSHOP_CSV_UPLOAD_SETTINGS = 'Siirron asetukset';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS = 'Käytettävissä olevat kentät';
	var $_PHPSHOP_CSV_OUTPUT_CSV_UPLOAD_MESSAGES = 'CSV siirto viestit:';
	var $_PHPSHOP_CSV_OUTPUT_COUNT = 'Määrä';
	var $_PHPSHOP_CSV_OUTPUT_TOTAL = 'Kokonaismäärä';
	var $_PHPSHOP_CSV_OUTPUT_FILE_IMPORTED = 'CSV tiedosto tuotu';
	var $_PHPSHOP_CSV_OUTPUT_UPDATED = 'Päivitetty';
	var $_PHPSHOP_CSV_OUTPUT_DELETED = 'Poistettu';
	var $_PHPSHOP_CSV_OUTPUT_ADDED = 'Lisätty';
	var $_PHPSHOP_CSV_OUTPUT_SKIPPED = 'Ohitettu';
	var $_PHPSHOP_CSV_OUTPUT_INCORRECT = 'Virheellinen';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS_USE = 'Seuraavat kentät ovat käytettävissä sekä latauksessa että viennissä (import or export).';
	var $_PHPSHOP_CSV_MINIMAL_FIELDS = 'Vähintään nämä kentät vaaditaan: product_sku, product_name ja category_path. Vain product_sku on yksilöllinen, kaksi muuta eivät ole.';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SKU = 'Tuotteen yksilöllinen tunniste.<br /.>Arvot:<ul><li>Numero</li><li>Kirjain</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_NAME = 'Tuotten nimi. Arvot:<ul><li>Teksti: Ei sallita HTML-koodia.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DELETE = 'product_delete kenttä on erikoiskenttä. Tällä kentällä määritellään, poistetaanko tuote vai ei.<br />Käyttö:<ol><li>Lisää teksti "product_delete" asetusnäyttöön. Teksti on kirjoitettava juuri näin (case sensitive) ja pitää olla pienillä kirjaimilla.</li><li>Lisää sarake CSV-tiedostoon arvolla Y. Jos kentässä on joku muu arvo, tuotetta ei poisteta.</li></ol><br /.>Arvot:<ul><li>Y: Kyllä, tuote poistetaan</li><li>N: Ei, tuotetta ei poisteta</li><li>Tyhjä: Tyhjä arvo, tuotetta ei poisteta</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DESC = 'Tuotteen pitkä kuvaus.<br />Arvot:<ul><li>Teksti: Sallitaan HTML-koodia.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_S_DESC = 'Tuotteen lyhyt kuvaus.<br />Arvot:<ul><li>Teksti: Ei sallita HTML-koodia.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PUBLISH = 'Onko tuote julkaistu vai ei.<br />Arvot:<ul><li>Y: Kyllä, tuote on julkaistu</li><li>N: Ei, tuote ei ole julkaistu</li><li>Tyhjä: Tyhjä arvo, tuote on julkaistu.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WIDTH = 'Tuotteen leveys.<br />Arvot:<ul><li>Numero</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_HEIGHT = 'Tuotteen korkeus.<br />Arvot:<ul><li>Numero</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABLE_DATE = 'Päiväys, jolloin tuote on saatavilla. Päiväyksen muoto on oltava päivä/kuukausi/vuosi tai päivä-kuukausi-vuosi. Windows järjestelmässä päiväys menee 19/01/2038 saakka.<br />Käyttö:<ol><li>Lisää teksti "product_available_date" asetusnäyttöön. Teksti on kirjoitettava juuri näin (case sensitive) ja pitää olla pienillä kirjaimilla.</li><li>Lisää sarake CSV-tiedostoon päivämäärä arvolla. Jos kentässä on joku muu arvo, sitä ei huomioida.</li></ol><br />Arvot:<ul><li>Päivämäärä: päivä/kuukausi/vuosi tai päivä-kuukausi-vuosi</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_IN_STOCK = 'Artikkeleiden määrä varastossa.<br /><br />Käyttö:<ol><li>Lisää teksti "product_in_stock" asetusnäyttöön. Teksti on kirjoitettava juuri näin (case sensitive) ja pitää olla pienillä kirjaimilla.</li><li>Lisää sarake CSV-tiedostoon numeroarvolla. Jos kentässä on joku muu arvo, oletusarvoa käytetään.</li></ol><br />Arvot:<ul><li>Numero</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE = 'Tuotteen piirrelista. Käytä tätä, kun annat tuotteelle ominaisuuksia. Esim. t-paidalla on eri kokoja ja värejä. Voit määritellä koot ja värit näin: Koko,XL[+1.99],M,S[-2.99];Väri,Punainen,Vihreä,Keltainen,KallisVäri[=24.00];jne,..,..<br /><br />Voit määrittää hinnan ominaisuudelle, käyttämällä seuraavia vaihtoehtoja:<ul><li>+: Lisää annetun luvun hintaan.</li><li>-: Vähentää annetun luvun hinnasta.</li><li>=: Muuttaa annetun luvun hinnaksi.</li></ul><br />Käyttö:<ol><li>Lisää teksti "attribute" asetusnäyttöön. Teksti on kirjoitettava juuri näin (case sensitive) ja pitää olla pienillä kirjaimilla.</li><li>Lisää sarake CSV-tiedostoon arvolla ominaisuusteksti.</li></ol><br /.>Arvot:<ul><li>Teksti: Ei sallita HTML-koodia.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABILITY = 'Tällä näytetään koska tuote on saatavilla. Arvo voi olla kuvaava teksti tai kuvan nimi. Kuva täytyy olla hakemistossa "shop_image/availability/".<br />Käyttö:<ol><li>Lisää teksti "product_availability" asetusnäyttöön. Teksti on kirjoitettava juuri näin (case sensitive) ja pitää olla pienillä kirjaimilla.</li><li>Lisää sarake CSV-tiedostoon teksti arvolla.</li></ol><br />Arvot:<ul><li>Teksti: Ei sallita HTML-koodia.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_FULL_IMAGE = 'Ison tuotekuvan nimi, "shop_image/product/" hakemistossa. Kuvan nimi voi olla myös URL.<br />HUOM: Jos käytössä on dynaamisten näytekuvien luonti, on täytettävä myös "product_thumb_image" kenttä. VirtueMart luo näytekuvan sinne.<br/><br />Käyttö:<ol><li>Lisää teksti "product_full_image" asetusnäyttöön. Teksti on kirjoitettava juuri näin (case sensitive) ja pitää olla pienillä kirjaimilla.</li><li>Lisää sarake CSV-tiedostoon teksti arvolla.</li></ol><br />Arvot:<ul><li>Teksti:<ul><li>Ei sallita HTML-koodia</li><li>URL on sallittu.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_THUMB_IMAGE = 'Näytekuvan nimi "shop_image/product/" tai "shop_image/product/resized/" hakemistossa. Kuvan nimi voi olla myös URL.<br />HUOM: Jos käytössä on dynaamisten näytekuvien luonti, tämä kenttä on kuitenkin täytettävä. VirtueMart luo näytekuvan tänne.<br /><br />Käyttö:<ol><li>Lisää teksti "product_thumb_image" asetusnäyttöön. Teksti on kirjoitettava juuri näin (case sensitive) ja pitää olla pienillä kirjaimilla.</li><li>Lisää sarake CSV-tiedostoon teksti arvolla.</li></ol><br />Arvot:<ul><li>Teksti:<ul><li>Ei sallita HTML-koodia</li><li>URL on sallittu.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CUSTOM_ATTRIBUTE = 'Tuotteen erityispiirrelista lisää kentän tuotesivulle, ominaisuus kuvauksella. Erityisominaisuudet voi laittaa esim: Nimi;Extra;...<br />Käyttö:<ol><li>Lisää teksti "custom_attribute" asetusnäyttöön. Teksti on kirjoitettava juuri näin (case sensitive) ja pitää olla pienillä kirjaimilla.</li><li>Lisää sarake CSV-tiedostoon ominaisuusarvolla.</li></ol><br /.>Arvot:<ul><li>Teksti: Ei sallita HTML-koodia.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PACKAGING = 'Määrittää kuinka monta kappaletta on pakkauksessa.<br />Käyttö:<ol><li>Lisää teksti "product_packaging" asetusnäyttöön. Teksti on kirjoitettava juuri näin (case sensitive) ja pitää olla pienillä kirjaimilla.</li><li>Lisää sarake CSV-tiedostoon numeroarvolla kappaletta pakkauksessa.</li></ol><br /.>Arvot:<ul><li>Numero</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_BOX = 'Määrittää kuinka monta kappaletta on laatikossa.<br />Käyttö:<ol><li>Lisää teksti "product_box" asetusnäyttöön. Teksti on kirjoitettava juuri näin (case sensitive) ja pitää olla pienillä kirjaimilla.</li><li>Lisää sarake CSV-tiedostoon numeroarvolla kappaletta laatikossa.</li></ol><br /.>Arvot:<ul><li>Numero</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT = 'Määrittää tuotteen alennusprosentin tai määrän. Arvo on täsmällinen, (ei lasketa). Toimii samoin, kuin lisäisit alennuksen tuotteen alennuslistasta. Jos alennus (määrä tai prosentti) on jo olemassa, sitä ei lisätä tietokantaan, mutta tuote linkitetään olemassa olevaan alennukseen. Kriteeri sille, että olemassa oleva alennus havaitaan, seuraavat arvot on oltava tarkalleen samat:<ol><li>Amount, määrä tai prosentti</li><li>Start date</li><li>End date</li></ol>Tämä estää tietokantaan tallentumasta suuren määrän alennuksia.<br /><br />Käyttö:<ol><li>Lisää teksti "product_discount" asetusnäyttöön. Teksti on kirjoitettava juuri näin (case sensitive) ja pitää olla pienillä kirjaimilla.</li><li>Omavalintainen: Lisää teksti "product_discount_date_start" asetusnäyttöön. Teksti on kirjoitettava juuri näin (case sensitive) ja pitää olla pienillä kirjaimilla.</li><li>Omavalintainen: Lisää teksti "product_discount_date_end" asetusnäyttöön. Teksti on kirjoitettava juuri näin (case sensitive) ja pitää olla pienillä kirjaimilla.</li><li>Lisää sarakkeet CSV-tiedostoon vastaavilla arvoilla.</li></ol><br /.>Arvot:<ul><li>product_discount</li><ul><li>Numero<br />esim. 10</li><li>Prosentti: täytyy sisältyä % merkki<br />esim. 10%</li></ul><li>product_discount_date_start</li><ul><li>Päivämäärä: päivä/kuukausi/vuosi tai päivä-kuukausi-vuosi<br />Päivä ja kuukausi voi olla 1 tai 2 numeroinen.<br />Vuosi voi olla 2 tai 4 numeroinen.</li></ul><li>product_discount_date_end</li><ul><li>Päivämäärä: päivä/kuukausi/vuosi tai päivä-kuukausi-vuosi<br />Päivä ja kuukausi voi olla 1 tai 2 numeroinen.<br />Vuosi voi olla 2 tai 4 numeroinen.</li></ul></ul>';
	var $_ITEM_PREVIOUS = 'edellinen';
	var $_ITEM_NEXT = 'seuraava';
	var $_CMN_OK = 'Ok';
	var $_CMN_CONTINUE = 'Jatka';
	var $_CMN_CANCEL = 'Peru';
	var $_BUTTON_SEND_REG = 'Lähetä rekisteröinti';
	var $_CONTACT_FORM_NC = 'Ole hyvä ja tarkista, että olet täyttänyt kaikki kentät.';
	var $_CMN_REQUIRED = 'Pakollinen';
	var $_CMN_NEW = 'Uusi';
	var $_CMN_SAVE = 'Tallenna';
	var $_CMN_NEW_ITEM_LAST = 'Uudet artikkelit tulevat oletusarvoisesti viimeiseksi. Järjestyksen voi muuttaa tallennuksen jälkeen.';
	var $_CMN_OPTIONAL = 'Valinnainen';
	var $_E_APPLY = 'Käytä';
	var $_E_IMAGES = 'Kuvat';
	var $_URL = 'URL:';
	var $_SEL_CATEGORY = 'Valitse kategoria';
	var $_E_REMOVE = 'Poista';
	var $_PN_LT = '&lt;';
	var $_PN_RT = '&gt;';
	var $_PN_PAGE = 'Sivu';
	var $_PN_OF = '/';
	var $_PN_START = 'Alkuun';
	var $_PN_PREVIOUS = 'Edellinen';
	var $_PN_NEXT = 'Seuraava';
	var $_PN_END = 'Loppuun';
	var $_PN_DISPLAY_NR = 'Näyttö #';
	var $_PN_RESULTS = 'Tulokset';
	var $_CMN_PRINT = 'Tulosta';
	var $_CMN_PDF = 'PDF';
	var $_CMN_EMAIL = 'Sähköposti';
	var $_BACK = 'Takaisin';
	var $_USERNAME = 'Käyttäjänimi';
	var $_PASSWORD = 'Salasana';
	var $_BUTTON_LOGIN = 'Kirjaudu';
	var $_REGISTER_UNAME = 'Käyttäjätunnus';
	var $_REGISTER_EMAIL = 'Sähköposti';
	var $_REGWARN_NAME = 'Kirjoita nimesi.';
	var $_REGWARN_UNAME = 'Kirjoita käyttäjätunnuksesi.';
	var $_REGWARN_MAIL = 'Kirjoita sähköpostiosoitteesi oikeassa muodossa.';
	var $_SEND_SUB = 'Asiakkaan %s tiedot sivustolta %s';
	var $_ASEND_MSG = 'Hei %s,
	
	Uusi käyttäjä on rekisteröitynyt %s -sivustolle.
	Alla hänen tietonsa:
	
	Nimi - %s
	Sähköposti - %s
	Käyttäjätunnus - %s
	
	Tämä on automaattinen viesti. Älä vastaa tähän viestiin ';
	var $_REG_COMPLETE = '<div class="componentheading">Rekisteröinti valmis!</div><br />Salasanasi on lähetetty antamaasi sähköpostiosoitteeseen.';
	var $_REG_COMPLETE_ACTIVATE = '<div class="componentheading">Rekisteröinti valmis</div><br />Käyttäjätilisi on luotu ja antamaasi sähköpostiosoitteeseen on lähetetty aktivoimislinkin sisältävä viesti. <br />Tili tulee aktivoida napsauttamalla viestissä olevaa linkkiä ennen kuin voit kirjautua sivustolle.';
	var $_DATE_FORMAT_LC = '%A, %d %B %Y';
	var $_LAST_UPDATED = 'Viimeksi päivitetty';
	var $_NOT_AUTH = 'Sinulla ei ole tarvittavia oikeuksia sivun katsomiseen.';
	var $_DO_LOGIN = 'Sinun tulee kirjautua.';
	var $_VALID_AZ09 = 'Anna %s joka on vähintään %d merkkiä pitkä. Merkit 0-9,a-z,A-Z ovat sallittuja';
	var $_CMN_PUBLISHED = 'Julkaistu';
	var $_CMN_UNPUBLISHED = 'Julkaisematon';
	var $_MORE = 'Lisää...';
	var $_EMPTY_CATEGORY = 'Kategoria on tyhjä.';
	var $_BUTTON_LOGOUT = 'Kirjaudu ulos';
	var $_NO_ACCOUNT = 'Ei vielä käyttäjätunnusta?';
	var $_CREATE_ACCOUNT = 'Luo tunnus';
	var $_REGWARN_PASS = 'Virheellinen salasana. Ei välilyöntejä ja vähintään kuusi merkkiä pitkä. Merkit 0-9,a-z,A-Z ovat sallittuja';
	var $_REGWARN_VPASS1 = 'Vahvista salasana.';
	var $_REGWARN_VPASS2 = 'Salasanat eivät täsmää, yritä uudelleen.';
	var $_USEND_MSG_ACTIVATE = 'Hei %s, 	
Kiitos rekisteröitymisestäsi sivustolle: %s. 	
	
Käyttäjätilisi on luotu, mutta odottaa sen aktivoimista ennen kuin saat sen käyttöösi. Aktivoidaksesi tilisi napsauta alla olevaa linkkiä tai kopioi se selaimesi osoiteriville:	
%s	
	
Aktivoimisen jälkeen voit kirjautua sivustolle %s seuraavilla tiedoilla:	
	
Käyttäjätunnus - %s	
Salasana - %s';
	var $_USEND_MSG = 'Hei %s,	
Sinut on lisätty käyttäjäksi %s -sivustolle.	
Voit nyt kirjautua %s -sivustolle rekisteröitymisen yhteydessä antamillasi tiedoilla.';
	var $_PROMPT_PASSWORD = 'Salasana unohtunut?';
	var $_HI = 'Hei';
	var $_NEW_USER_MESSAGE_SUBJECT = 'Uuden ylläpitäjän tiedot';
	var $_NEW_USER_MESSAGE = 'Hei %s,	
Sinut on luotu käyttäjäksi %s sivustolle ylläpidon toimesta.	
	
Ohessa käyttäjätunnus ja salasana sivustolle %s	
	
Käyttäjätunnus - %s	
Salasana - %s	
	
Älä vastaa tähän viestiin, tämä on järjestelmän automaattisesti lähettämä sähköposti';
	var $_REMEMBER_ME = 'Muista minut';
	var $_REGISTER_TITLE = 'Rekisteröinti';
	var $_JAN = 'Tammikuu';
	var $_FEB = 'Helmikuu';
	var $_MAR = 'Maaliskuu';
	var $_APR = 'Huhtikuu';
	var $_MAY = 'Toukokuu';
	var $_JUN = 'Kesäkuu';
	var $_JUL = 'Heinäkuu';
	var $_AUG = 'Elokuu';
	var $_SEP = 'Syyskuu';
	var $_OCT = 'Lokakuu';
	var $_NOV = 'Marraskuu';
	var $_DEC = 'Joulukuu';
	var $_PHPSHOP_CSV_VERSION = '0.7';
	var $_PHPSHOP_CSV_ABOUT = 'Tiedot';
	var $_PHPSHOP_CSV_PRICE_LIST_ONLY = 'Vain hintalistan siirto palvelimelle';
	var $_PHPSHOP_CSV_MULTIPLE_PRICES_UPLOAD = 'Usean hinnan tuonti';
	var $_PHPSHOP_CSV_IMPORT_CONFIG_CSV_FILE = 'Sarakkeiden otsikot, asetuksena';
	var $_PHPSHOP_CSV_COLLECT_DEBUG_INFO = 'Kerää -debug- tiedot';
	var $_PHPSHOP_CSV_SHOW_PREVIEW = 'Näytä esikatselu';
	var $_PHPSHOP_CSV_REGULAR_UPLOAD = 'Tavallinen siirto';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_UPLOAD = 'Tuotetyypin siirto';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_PARAMETERS_UPLOAD = 'Tuotetyyppien parametrien siirto';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_XREF_UPLOAD = 'Tuotetyypin viitauksien siirto';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_DETAIL_UPLOAD = 'Tuotetyypin kuvauksen siirto';
	var $_PHPSHOP_CSV_EMPTY_DATABASE = 'Poista tuotteet tietokannasta';
	var $_PHPSHOP_CSV_CONTINUE_UPLOAD = 'Jatka siirtoa';
	var $_PHPSHOP_CSV_CANCEL_UPLOAD = 'Lopeta siirto';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION = '<span style="color: #FF0000; font-size: 1.2em;">CSV tiedoston siirto palvelimelle.</span>
										<ol>
										<li>Luo tuotelista CSV tiedostoon joko ilman sarakkeiden otsikoita tai niiden kanssa.
										<br />On suositeltavaa käyttää tekstierottimena ~ (tilde) ja kenttäerottimena^ (caret).
										<br /><span style="font-weight: bold;">Esimerkki tiedosto:</span><br />
										<div class="quote" style="width:600px;overflow:scroll;"><pre>~G01~^~Hand Shovel~^~Hand Tools~^~4.99000~^~<p>Nice hand shovel to dig with in the yard.</p>~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5\~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~8d886c5855770cc01a3b8a2db57f6600.jpg~^~cca3cd5db813ee6badf6a3598832f2fc.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~10~^~1072911600~^~1~^~1~^~2~^~0~^~G01~^~~^~~^~Color::1|Size::2~^~~
~G02~^~Ladder~^~Garden Tools~^~49.99000~^~A really long ladder to reach high places.~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5\~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~ffd5d5ace2840232c8c32de59553cd8d.jpg~^~8cb8d644ef299639b7eab25829d13dbc.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~76~^~1072911600~^~0~^~1~^~2~^~0~^~G02~^~~^~~^~Material::1~^~~
~G03~^~Shovel~^~Garden Tools~^~24.99000~^~Nice shovel.  You can dig your way to China with this one.~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5\~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~8147a3a9666aec0296525dbd81f9705e.jpg~^~520efefd6d7977f91b16fac1149c7438.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~32~^~1072911600~^~0~^~1~^~2~^~0~^~G03~^~Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00]~^~~^~~^~~</pre></div></li>
										<li>Laita CSV tiedoston kentät samaan järjestykseen, kuin "Asetukset" välilehdessä. Kentät täytyy olla samoin kuin CSV tiedostossa.
										<br />Esim. product_sku, product_desc, product_price, category_path<br />
										<br /><span style="font-weight: bold;">Tuotteelle on minimissään annettava nämä tiedot:</span><br />
										product_sku<br />
										product_name<br />
										category_path<br />
										<br /><span style="font-weight: bold;">category_path</span> on vinoviivoilla erotettu rivi, joka alkaa
										pääkategoriasta ja jatkuu alakategorioilla, esim. <br />
										<div class="quote">category/sub-category_1/sub_category_2</div>
										<br />
										Kun tuote lisätään useampaan kategoriaan kuin yhteen, erota
										kategoriat toisistaan,<br />
										merkillä <span style="font-weight: bold;">|</span>
										<div class="quote">Category/Sub-category_1/Sub_category_2|Category2/Subcategory22|Category3/Subcategory33</div>
										</li>
										<li>Valitse erotinmerkit "Tuo/Vie" välilehdestä.</li>
										<li>Valitse palvelimelle siirron asetukset "Tuo/Vie" välilehdestä.</li>
										<li>Valitse siirrätkö tiedoston paikalliselta tietokoneelta (Tuo CSV tiedosto) tai serverillä olevan tiedoston (Tuo serverin hakemistosta).</li>
										<li>Tiedoston tuonti alkaa.</li>
										</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_PRODUCT_TYPES = '<span style="color: #FF0000; font-size: 1.2em;">Tuotetyypit</span><br /><br />
													Lisätäksesi tuotetyyppejä, tarvitset 4 CSV tiedostoa. Näistä jokainen CSV tiedosto esittää osaa tuotetyypistä.
													<ul>
													<li><span style="font-weight: bold;">Tuotetyypit</span><br />
													Tämä CSV tiedosto sisältää perus tuotetyypit, ja pitää näyttää tältä:
													<table border="1">
													<tr style="border: 1px solid #000000;"><td>product_type_name</td><td>product_type_description</td><td>product_type_publish</td><td>product_type_browsepage</td><td>product_type_flypage</td></tr>
													<tr><td>Music track</td><td>Track</td><td>Y</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													<tr><td>Music album</td><td>Album</td><td>Y</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													<tr><td>Music artist</td><td>Artist</td><td>Y</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													</table>
													</li><br />
													<li><span style="font-weight: bold;">Tuotetyypin parametrit</span><br />
													Tämä CSV tiedosto sisältää tuotetyypin parametrit, ja pitää näyttää tältä:
													<div style="width: 50%; overflow: auto; height: 100px;">
													<table border="1">
													<tr><td>product_type_name</td><td>product_type_parameter_name</td><td>product_type_parameter_label</td><td>product_type_parameter_description</td><td>product_type_parameter_list_order</td><td>product_type_parameter_type</td><td>product_type_parameter_values</td><td>product_type_parameter_multiselect</td><td>product_type_parameter_default</td><td>product_type_parameter_unit</td></tr>
													<tr><td>Music artist</td><td>Name</td><td>Name</td><td>Artist Name</td><td>1</td><td>I</td><td>&nbsp;</td><td>N</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													<tr><td>Music artist</td><td>Birth</td><td>Birth</td><td>Artist Birth</td><td>2</td><td>D</td><td>&nbsp;</td><td>N</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													<tr><td>Music album</td><td>Duration</td><td>Duration</td><td>Duration of album</td><td>3</td><td>M</td><td>00:01:00;00:02:00;00:03:00</td><td>Y</td><td>00:02:00</td><td>minutes</td></tr>
													</table>
													</div>
													<br />
													Tuotetyypin parametrityypillä voi olla useita arvoja:
													<ul>
													<li>I: Kokonaisluku</li>
													<li>T: Teksti</li>
													<li>S: Lyhyt Teksti</li>
													<li>F: Kelluva</li>
													<li>C: Char</li>
													<li>D: Päiväys & Aika</li>
													<li>M: Aika</li>
													<li>V: Useat arvot</li>
													<li>B: Viiva</li>
													</ul>
													</li><br />
													<li><span style="font-weight: bold;">Artikkelit tuotetyypin nimellä</span><br />
													Tämä CSV tiedosto sisältää tiedot tuotetyypin parametrin nimellä , ja pitää näyttää tältä:
													<table border="1">
													<tr><td>product_sku</td><td>product_type_name</td><td>product_type_parameter_namex</td><td>product_type_parameter_namex</td></tr>
													<tr><td>1234</td><td>Music artist</td><td>Singing Star</td><td>1975</td></tr>
													<tr><td>5678</td><td>Music artist</td><td>Rocking Band</td><td>1980</td></tr>
													</table><br />
													Tuotetyypin nimelle tarvitaan erillinen CSV tiedosto. Syynä tähän on se että sarakkeiden nimet jokaisessa CSV tiedostossa on erilaiset,johtuen tuotetyypin parametrien tyylistä.
													</li><br />
													<li><span style="font-weight: bold;">Tuotetyypin viittaus(cross reference) tuotenumeroon</span><br />
													Tämä CSV tiedosto sisältää linkin tuotetyyppiin ja tuotenumeroon, ja pitää näyttää tältä:
													<table border="1">
													<tr><td>product_sku</td><td>product_type_name</td></tr>
													<tr><td>1234</td><td>Music artist</td></tr>
													<tr><td>5678</td><td>Music artist</td></tr>
													</table>
													</li>
													</ul><br />
													Prosessi:<br />
													<ol>
													<li>Tuo Tuotetyypit, CSV tiedosto</li>
													<li>Tuo Tuotetyypin parametrit, CSV tiedosto</li>
													<li>Tuo Artikkelit tuotetyypin nimellä, CSV tiedosto</li>
													<li>Tuo Tuotetyypin viittaus, CSV tiedosto</li>
													</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_EMPTY_DATABASE = '<span style="color: #FF0000; font-size: 1.2em;">Poista tuotteet tietokannasta</span><br /><br />
													 <span style="color: #FF0000; font-size: 2em;">KÄYTÄ VAROEN !!! EI VOI PALAUTTAA !!!</span><br /><br />
													 Tämä poistaa kaiken tiedon tietokannasta näistä tauluista:
													 <ul>
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
													 Kaikki muut paitsi ensimmäinen valmistaja poistetaan:
													 <ul>
													 <li>manufacturer</li>
													 </ul>
													 Seuraavat taulut poistetaan kokonaan:
													 <ul>
													 <li>product_type_x</li>
													 </ul>
													  x esittää taulun numeroa. Tämä numero liittyy tuotetyyppiin, joka on systeemissä. Kun tuotetyyppi taulut on tyhjennetty, ne poistetaan. Kun luodaan uusia tuotetyyppejä, taulut luodaan uudestaan.<br /><br />
													 Prosessi:
													 <ol>
													 <li>Valitse pudotusvalikosta "Poista tuotteet tietokannasta", "Siirron asetukset" kohdasta</li>
													 <li>Valitse "Kerää -debug- tiedot", jos tarvitset sitä tietoa</li>
													 <li>Click "Tuo CSV tiedosto" tai "Tuo CSV tiedosto serverin hakemistosta". Ei tarvitse tiedostonimeä.</li>
													 <li>Seuraavaksi kysytään jos haluat tyhjentää tietokannan. Klikkaa OK, jos olet varma, muuten klikkaa Peruuta</li>
													 <li>Tuotteet on nyt poistettu tietokannasta tai olet takaisin CSV sivulla, riippuen mitä valitsit</li>
													 </ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_MULTIPLE_PRICES_UPLOAD = '<span style="color: #FF0000; font-size: 1.2em;">Usean hinnan tuonti</span><br /><br />
														    Prosessi:
														    <ol>
														    <li>Luo CSV tiedosto, jossa on seuraavat kentät:
														    	<ul>
															<li>product_sku</li>
															<li>product_price</li>
															<li>product_currency</li>
															<li>price_quantity_start</li>
															<li>price_quantity_end</li>
															<li>price_delete</li>
															</ul>
														    Katso -Käytettävissä olevat kentät- välilehdestä niiden tiedot. Jos käytät -Sarakkeiden otsikot, asetuksina- , täytä ensimmäinen rivi sarakkeiden otsikoiden nimillä.
														    </li>
														    <li>Laita joko asetuksen kentät, Asetukset välilehden kohdassa 1, tai jos lisäät sarakkeiden nimet CSV tiedostoon, valitse "Sarakkeiden otsikot, asetuksena" tuonnin asetuksina.
														    </li>
														    <li>Valitse "Usean hinnan tuonti" Siirron asetukset kohdasta</li>
														    <li>Valinnaisesti, käytä "Näytä esikatselu" ja/tai "Kerää -debug- tiedot"</li>
														    <li>Valitse tiedosto jonka tuot tietokoneelta tai serverin hakemistosta</li>
														    <li>Valitse "Tuo CSV tiedosto" tai "Tuo CSV serverin hakemistosta"</li>
														    <li>Nyt hinnat tuodaan</li>
														    </ol><br /><br />
														    <span style="font-weight: bold;">Hinnan poisto</span><br />
														    Useiden hintojen tuonnilla, voi myös poistaa hintoja. Hinta poistetaan, kun seuraavien kenttien tiedot, CSV tiedostossa, löytyvät tietokannasta:
														    <ul>
														    <li>product_sku</li>
														    <li>product_price</li>
														    <li>product_currency</li>
														    <li>price_quantity_start</li>
														    <li>price_quantity_end</li>
														    </ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PRICE = 'Tuotteen hinta, ilman valuutta merkkiä.<br /><br />Käyttö:<ol><li>Valitse "product_price" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon hinta-arvona.</li></ol><br />Arvot:<ul><li>Numero</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LENGTH = 'Tuotteen pituus.<br /><br />Käyttö:<ol><li>Valitse "product_length" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon numeerisena.</li></ol><br />Arvot:<ul><li>Numero</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LWH_UOM = 'Tuotteen mitat (pituus, leveys ja korkeus). Voi olla tuumaa, senttejä, millimetrejä, jne.<br /><br />Käyttö:<ol><li>Valitse "product_lwh_uom" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon tekstinä.</li></ol><br />Arvot:<ul><li>Teksti: HTML-koodit ei sallittuja.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT = 'Tuotteen paino.<br /><br />Käyttö:<ol><li>Valitse "product_weight" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon numeerisena.</li></ol><br />Arvot:<ul><li>Numero</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT_UOM = 'Tuotteen painoyksikkö. Voi olla g, kg, jne.<br /><br />Käyttö:<ol><li>Valitse "product_weight_uom" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon tekstinä.</li></ol><br />Arvot:<ul><li>Teksti: HTML-koodit ei sallittuja.</li></ul>';	
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTES = 'Ominaisuudet ovat osia tuotetta ja niitä käytetään alatuotteilla antamaan niille spesifikaatioita.<br />Käyttö:<ol><li>Valitse "attributes" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon ominaisuus tekstinä.</li></ol><br />Arvot:<ul><li>Teksti: HTML-koodit ei sallittuja.<br />Arvot on erotettava toisistaan pystyviiva(|) merkillä. Esim.: attribute_name::list_order|attribute_name::list_order</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE_VALUES = 'Ominaisuus arvot, on alatuotteiden arvoja, jotka liittyvät päätuotteen ominaisuuksiin..<br />Käyttö:<ol><li>Valitse "custom_attribute" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon ominaisuusarvo tekstinä.</li></ol><br />Arvot:<ul><li>Teksti: HTML-koodit ei sallittuja.<br />Arvot on erotettava toisistaan pystyviiva(|) merkillä. Esim.: attribute_name::attribute_value|attribute_name::attribute_value</li></ul>';                                                                                                                                  
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_START = 'Päivä jolloin tuotteen alennus alkaa. Lisää tietoa, katso "product_discount".<br /><br />Käyttö:<ol><li>Valitse "product_discount_date_start" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon päivämääränä.</li></ol><br />Arvot:<ul><li>product_discount_date_start</li><ul><li>Päivämäärä: päivä/kuukausi/vuosi tai päivä-kuukausi-vuosi<br />Päivä ja kuukausi voi olla 1 tai 2 numeroinen.<br />Vuosi voi olla 2 tai 4 numeroinen.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_END = 'Päivä jolloin tuotteen alennus loppuu. Lisää tietoa, katso "product_discount".<br /><br />Käyttö:<ol><li>Valitse "product_discount_date_end" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon päivämääränä.</li></ol><br />Arvot:<ul><li>product_discount_date_end</li><ul><li>Päivämäärä: päivä/kuukausi/vuosi tai päivä-kuukausi-vuosi<br />Päivä ja kuukausi voi olla 1 tai 2 numeroinen.<br />Vuosi voi olla 2 tai 4 numeroinen.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_UPLOAD_SETTINGS = '<ul><li><span style="font-weight: bold;">Ohita ensimmäinen rivi</span><br />Jos CSV tiedoston alussa on otsikkorivi, tällä valinnalla ohitat sen. Tämä estää otsikoiden lisäämistä tietokantaan (tuotetietoina).</li><li><span style="font-weight: bold;">Ylikirjoita tiedot</span><br />Lisättäessä uusia tuotteita tietokantaan, rastin poistaminen tästä kohdasta estää korvaamasta jo olemassa olevat tuotetiedot tietokannassa. Oletuksena päivittää tuotetiedot.</li><li><span style="font-weight: bold;">Ohita oletusarvo</span><br />Asetukset sivulla, oletusarvo voidaan määritellä, jos kenttä on tyhjä CSV-tiedostossa. Valitsemalla tämän, tietojen tuonti ei päivitä kenttää, jos CSV-tiedostossa ei ole mitään arvoa.</li><li><span style="font-weight: bold;">Vain hinnaston tuonti</span><br />Hinnaston tuontia käytetään, kun päivität tuotteiden hintoja. CSV:n ulkoasun odotetaan olevan 2 saraketta:<ol><li>product_sku</span></li><li>product_price</li></ol></li>Huomaa että tämä ei vaikuta asetuksiin, -Asetukset- sivulla.<li><span style="font-weight: bold;">Sarakkeiden otsikot, asetuksena</span><br />Jos CSV-tiedostolla on sarakenimet ensimmäisellä rivillä, tällä voidaan ottaa käyttöön sarakenimet, nykyisenä rakenteena. Sarakenimet pitää myös olla samoja kuin -Käytettävissä olevat kentät- välilehdessä. Asetusta käytetään vain siirron aikana, asetusta ei tallenneta. Oletusarvoja ei voida käyttää tällä optiolla.</li><li><span style="font-weight: bold;">Näytä esikatselu</span><br />Näyttää viidellä rivillä tuotavan tiedoston tiedot. Siirron voi perua tai jatkaa.</li><li><span style="font-weight: bold;">Kerää -debug- tiedot</span><br />Ongelmatilanteissa, käytä tätä nähdäksesi mitä siirron aikana tapahtuu. Siirron loputtua, luodaan raportti tapahtumista.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_NAME = 'Valmistajan nimi, joka liittyy tuotteeseen. Tätä käytetään yhdessä valmistajan ID:n kanssa. Jos valmistajan ID:tä ei ole määritelty, käytetään vain nimeä. Uusille valmistajille luodaan id nousevalla arvolla. Valmistajien lisääminen/päivitys käyttää seuraavanlaista prosessia:<ol><li>Nimi on olemassa, ID on olemassa --> ID päivitetään, jos erilainen</li><li>Nimi on olemassa, ID ei ole olemassa --> Uusi valmistaja luodaan nousevalla ID:llä</li><li>Nimeä ei ole, ID on --> Nimi lisätään olemassa olevalla ID:llä</li><li>Nimeä ei ole, ID ei ole olemassa --> Ei tehdä mitään</li></ol>Käyttö:<ol><li>Valitse "manufacturer_name" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon valmistajan nimellä.</li></ol><br />Arvot:<ul><li>Teksti: HTML-koodi ei sallittu.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_ID = 'Valmistajan ID, joka liittyy tuotteeseen ja täytyy olla yksilöllinen. Tätä käytetään yhdessä valmistajan nimen kanssa. Jos valmistajan nimeä ei ole määritelty, tuotteen valmistajan linkki lisätään/päivitetään. Valmistajien lisääminen/päivitys käyttää seuraavanlaista prosessia:<ol><li>Nimi on olemassa, ID on olemassa  --> ID päivitetään, jos erilainen</li><li>Nimi on olemassa, ID ei ole olemassa --> Uusi valmistaja luodaan nousevalla ID:llä</li><li>Nimeä ei ole, ID on --> Nimi lisätään olemassa olevalla ID:llä</li><li>Nimeä ei ole, ID ei ole olemassa --> Ei tehdä mitään</li></ol>Jos nimeä tai ID:tä ei ole, mitään ei tehdä, tällä estetään lukuisien nimien lisääminen.<br /><br />Käyttö:<ol><li>Valitse "manufacturer_id" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon valmistajan ID.</li></ol><br />Arvot:<ul><li>Numeerinen</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_URL = 'URL joko kuvalle tai tuotteen web-sivulle. Kun linkitetty kuvaan, kuva näkyy tuotesivulla.<br /><br />Käyttö:<ol><li>Valitse "product_url" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon tekstinä.</li></ol><br />Arvot:<ul><li>HTML-koodi ei sallittu</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SALES = 'Tuotteiden määrä, jotka on myyty.<br /><br />Käyttö:<ol><li>Valitse "product_sales" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon numerona.</li></ol><br />Arvot:<ul><li>Numeerinen</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SPECIAL = 'Kun tuote on laitettu "On Special" Erikoistuote(Feature), sillä on lisäominaisuus ja kuuluu myös lisäominaisuus tuoteryhmään.<br />Käyttö:<ol><li>Valitse "product_special" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon arvolla Y.</li></ol><br />Arvot:<ul><li>Y: Kyllä, tuotteella on lisäominaisuus</li><li>N: Ei, tuotteella ei ole lisäominaisuutta</li><li>Tyhjä: Tyhjä kenttä, tuotteella ei ole lisäominaisuutta</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_UNIT = 'Myynnissä oleva tuoteyksikkö. Esim. laatikko, pakkaus, jne.<br />Käyttö:<ol><li>Valitse "product_unit" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon arvolla Y.</li></ol><br />Arvot:<ul><li>HTML-koodi ei sallittu</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CATEGORY_PATH = 'Päätuotteet luokitellaan kategoriapolun mukaan. Kategoriapolku määrittelee, mihin kategoriaan tuote kuuluu. Tämä ottaa huomioon vain päätuotteet, ei alatuotteita koska alatuotteet liittyvät päätuotteisiin, eivätkä kategorioihin. Alatuotteille tämä kenttä täytyy jättää tyhjäksi. product_parent_sku täytyy olla tyhjä päätuotteille, koska ne eivät liity mihinkään muuhun päätuotteisiin.<br /><br />Käyttö:<ol><li>Valitse "category_path" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon polkuna.</li></ol><br />Arvot:<ul><li>HTML-koodi ei sallittu<br />Kategoriat polussa täytyy olla erotettuna vinoviivalla (/). Esim.: Huonekalut/Tuolit/Tiikki</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PARENT_SKU = 'Tuotteen päätuotenumerolla tunnistetaan alatuotteiden päätuote. Huomaa: "category_path" kenttä TÄYTYY olla tyhjä, muuten tuotetta pidetään päätuotteena.<br />Käyttö:<ol><li>Valitse "category_path" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon päätuotteen (product_sku) arvolla.</li></ol><br />Arvot:<ul><li>Numerot</li><li>Kirjaimet</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TAX_ID = 'Tuotteen veroprosentin ID<br />Käyttö:<ol><li>Valitse "product_tax_id" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon product_tax_id veron arvolla.</li></ol><br />Arvot:<ul><li>Numeerinen</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_CURRENCY = 'Eri valuutta voidaan määritellä tuotetta kohti.<br />Käyttö:<ol><li>Valitse "product_currency" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon uuden valuutan arvolla.</li></ol><br />Arvot:<ul><li>HTML-koodi ei sallittu<br />Esim.: EUR, USD, IDR</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_BROWSEPAGE = 'Tämä on erikois-sivu, joka näyttää tuotetyypit. Jätä TYHJÄKSI, jos ei ole mitään yksittäistä php-tiedostoa sitä varten.<br /><br />Käyttö:<ol><li>Valitse "product_type_browsepage" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon tekstinä.</li></ol><br />Arvot:<ul><li>Teksti:<ul><li>HTML-koodit ei sallittuja</li><li>URL on sallittu.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_DESCRIPTION = 'Kuvaus tuotetyypille.<br /><br />Käyttö:<ol><li>Valitse "product_type_description" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon tekstinä.</li></ol><br />Arvot:<ul><li>Teksti: HTML-koodi sallittu</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_FLYPAGE = 'Tämä on erikois-sivu, joka näyttää tuotetyypit. Jätä TYHJÄKSI, jos ei ole mitään yksittäistä php-tiedostoa sitä varten.<br /><br />Käyttö:<ol><li>Valitse "product_type_flypage" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon tekstinä.</li></ol><br />Arvot:<ul><li>Teksti:<ul><li>HTML-koodit ei sallittuja</li><li>URL on sallittu.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_NAME = 'Tuotetyypin nimi. Tämä nimi täytyy olla yksilöllinen, ja ilman välilyöntejä.<br /><br />Käyttö:<ol><li>Valitse "product_type_name" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon tekstinä.</li></ol><br />Arvot:<ul><li>Teksti: HTML-koodit ei sallittuja</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DEFAULT = 'Oletusarvo jota käytetään, jos parametrille ei ole annettu arvoa.<br /><br />Käyttö:<ol><li>Valitse "product_type_parameter_default" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon tekstinä.</li></ol><br />Arvot:<ul><li>Teksti: HTML-koodit ei sallittuja</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DESCRIPTION = 'Tuotetyypin parametrin kuvaus.<br /><br />Käyttö:<ol><li>Valitse "product_type_parameter_description" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon tekstinä.</li></ol><br />Arvot:<ul><li>Teksti: HTML-koodit ei sallittuja</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LABEL = 'Etiketti tuotetyypin paremetrille.<br /><br />Käyttö:<ol><li>Valitse "product_type_parameter_label" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon tekstinä.</li></ol><br />Arvot:<ul><li>Teksti: HTML-koodit ei sallittuja</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LIST_ORDER = 'Määrää missä järjestyksessä tuotteen parametri näytetään.<br /><br />Käyttö:<ol><li>Valitse "product_type_parameter_list_order" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon numeroina.</li></ol><br />Arvot:<ul><li>Numeerinen</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_MULTISELECT = 'Laittamalla Kyllä, mahdolliset parametriarvot näkyvät monivalintaisena<br /><br />Käyttö:<ol><li>Valitse "product_type_parameter_list_multiselect" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon arvolla Y tai N.</li></ol><br />Arvot:<ul><li>Y: Kyllä, arvot ovat monivalintaisia</li><li>N: Ei, arvot eivät ole monivalintaisia</li><li>Tyhjä: Tyhjä kenttä, arvot eivät ole monivalintaisia</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_NAME = 'Tuotetyyppiparametrin nimi. Tämä nimi pitää olla yksilöllinen, ja ilman välilyöntejä, koska sitä käytetään sarakkeen nimenä parametrin tiedoissa.<br /><br />Käyttö:<ol><li>Valitse "product_type_parameter_type" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon tekstinä.</li></ol><br />Arvot:<ul><li>Teksti: HTML-koodit ei sallittuja</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_TYPE = 'Tämä asettaa parametrin tyypin, jota käytetään. Useita eri arvoja, joita voidaan käyttää.<br /><br />Käyttö:<ol><li>Valitse "product_type_parameter_type" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon arvona.</li></ol><br />Arvot:<ul><li>Kirjain:<ul>
													<li>I: Kokonaisluku</li>
													<li>T: Teksti</li>
													<li>S: Lyhyt Teksti</li>
													<li>F: Kelluva</li>
													<li>C: Char</li>
													<li>D: Päiväys & Aika</li>
													<li>M: Aika</li>
													<li>V: Useat arvot</li>
													<li>B: Viiva</li>
													</ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_UNIT = 'Yksikkö, johon tuotetyyppiparametri viittaa.<br /><br />Käyttö:<ol><li>Valitse "product_type_parameter_unit" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon tekstinä.</li></ol><br />Arvot:<ul><li>Teksti: HTML-koodit ei sallittuja</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_VALUES = 'Nämä ovat arvot parametria varten ja ne täytyy täyttää vaatimuksen, joka parametrityypillä on.<br /><br />Käyttö:<ol><li>Valitse "product_type_parameter_values" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon tekstinä.</li></ol><br />Arvot:<ul><li>Tämä riippuu tyypistä, joka on asetettu product_type_parameter_type kenttään. Kaikkien arvojen täytyy olla puolipisteillä (;) erotettu.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PUBLISH = 'Julkaistu tai julkaisematon tila.<br /><br />Käyttö:<ol><li>Valitse "product_type_publish" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon tekstinä.</li></ol><br />Arvot:<ul><li>Y: Kyllä, tuotetyyppi on julkaistu</li><li>N: Ei, tuotetyyppiä ei ole julkaistu</</li><li>Tyhjä: Tyhjä kenttä, tuotetyyppi on julkaistu.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_DELETE = 'price_delete kenttä on erikoiskenttä. Tätä kenttää käytetään määräämään pitäisikö poistaa tuotteen hinta, tai ei. Tätä kenttää käytetään, kun tuodaan useita hintoja. Ennen kuin hinta poistetaan, se täytyy liittyä seuraaviin kenttiin:<ul><li>product_sku</li><li>product_price</li><li>product_currency</li><li>price_quantity_start</li><li>price_quantity_end</li></ul><br />Käyttö:<ol><li>Valitse "price_delete" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon arvolla Y. Jos kentässä on joku muu arvo, hintaa ei poisteta.</li></ol><br />Arvot:<ul><li>Y: Kyllä, hinta poistetaan</li><li>N: hintaa ei poisteta </li><li>Tyhjä: Tyhjä arvo, hintaa ei poisteta </li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_START = 'Määrä, jossa mainittu hinta on käytettävissä.<br /><br />Käyttö:<ol><li>Valitse "price_quantity_start" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon numerona.</li></ol><br />Arvot: Numeerinen</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_END = 'Määrä, jossa mainittu hinta ei ole enää saatavilla.<br /><br />Käyttö:<ol><li>Valitse "price_quantity_end" pudotusvalikosta, asetukset välilehdessä.</li><li>Lisää sarake CSV-tiedostoon numerona.</li></ol><br />Arvot: Numeerinen</li></ul>';
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