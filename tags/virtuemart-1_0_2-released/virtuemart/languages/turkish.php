<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
*
* @version $Id: admin.martlanguages.php,v 1.4 2005/10/15 15:26:14 soeren_nb Exp $
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
	var $_PHPSHOP_MENU = 'Men�';
	var $_PHPSHOP_CATEGORY = 'Kategori';
	var $_PHPSHOP_CATEGORIES = '�r�n Kategorileri';
	var $_PHPSHOP_SELECT_CATEGORY = 'Select a Category:';
	var $_PHPSHOP_ADMIN = 'Y�netim';
	var $_PHPSHOP_PRODUCT = '�r�n';
	var $_PHPSHOP_LIST = 'liste';
	var $_PHPSHOP_ALL = 't�m�';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'List All Products';
	var $_PHPSHOP_VIEW = 'incele';
	var $_PHPSHOP_SHOW = 'g�ster';
	var $_PHPSHOP_ADD = 'ekle';
	var $_PHPSHOP_UPDATE = 'g�ncelle';
	var $_PHPSHOP_DELETE = 'sil';
	var $_PHPSHOP_SELECT = 'se�';
	var $_PHPSHOP_SUBMIT = 'Submit';
	var $_PHPSHOP_RANDOM = '�r�nler';
	var $_PHPSHOP_LATEST = 'Son �r�nler';
	var $_PHPSHOP_HOME_TITLE = 'Anasayfa';
	var $_PHPSHOP_CART_TITLE = 'Al��veri�im';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Kasa';
	var $_PHPSHOP_LOGIN_TITLE = 'Giri�';
	var $_PHPSHOP_LOGOUT_TITLE = '��k��';
	var $_PHPSHOP_BROWSE_TITLE = 'G�ster';
	var $_PHPSHOP_SEARCH_TITLE = 'Arama';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Hesap Bak�m�';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Gezinirlik';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'B�l�m';
	var $_PHPSHOP_INFO = 'Bilgi';
	var $_PHPSHOP_BROWSE_LBL = '�r�n Listeleme';
	var $_PHPSHOP_PRODUCTS_LBL = '�r�n';
	var $_PHPSHOP_PRODUCT_LBL = '�r�n';
	var $_PHPSHOP_SEARCH_LBL = 'Arama';
	var $_PHPSHOP_FLYPAGE_LBL = '�r�n Detay�';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Product Search';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = '�r�n Ad�';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = '�r�n Kategorisi';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = '�r�n A��klamas�';
	var $_PHPSHOP_CART_SHOW = 'Al��veri�im';
	var $_PHPSHOP_CART_ADD_TO = 'Sepete Ekle';
	var $_PHPSHOP_CART_NAME = 'Ad�';
	var $_PHPSHOP_CART_SKU = 'Stok';
	var $_PHPSHOP_CART_PRICE = 'Fiyat';
	var $_PHPSHOP_CART_QUANTITY = 'Miktar';
	var $_PHPSHOP_CART_SUBTOTAL = 'Ara Toplam';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Yeni ekle';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Nakliye Adresi';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Arama sonucunda 0 kay�t bulundu.<BR>';
	var $_PHPSHOP_PRICE_LABEL = 'Fiyat: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Al��veri�ime Ekle';
	var $_PHPSHOP_NO_CUSTOMER = 'Hen�z kay�tl� kulln�c� de�ilsiniz. L�tfen Fatura bilgilerinizi giriniz.';
	var $_PHPSHOP_DELETE_MSG = 'Bu kayd� silmek istedi�inizden eminmisiniz?';
	var $_PHPSHOP_THANKYOU = 'Sipari�iniz i�in te�ekk�rler.';
	var $_PHPSHOP_NOT_SHIPPED = 'Hen�z g�nderilmedi';
	var $_PHPSHOP_EMAIL_SENDTO = 'Teyit iletisinin g�nderildi�i e-posta adresi';
	var $_PHPSHOP_NO_USER_TO_SELECT = '�zg�n�z, com_phpshop kullan�c� listesine ekleyebilece�iniz MOS - kullan�c�s� yoktur.';
	var $_PHPSHOP_ERROR = 'HATA';
	var $_PHPSHOP_MOD_NOT_REG = 'Mod�l kaydedilmemi�tir.';
	var $_PHPSHOP_MOD_ISNO_REG = ' Ge�erli bir phpShop mod�l� de�il.';
	var $_PHPSHOP_MOD_NO_AUTH = '�stenen mod�le giri� izniniz yok.';
	var $_PHPSHOP_PAGE_404_1 = 'Sayfa bulunamad�';
	var $_PHPSHOP_PAGE_404_2 = 'Verilen dosya bulunamad�. Bulunamayan dosya:';
	var $_PHPSHOP_PAGE_403 = 'Yetersiz giri� hakk�';
	var $_PHPSHOP_FUNC_NO_EXEC = '�al��t�rma yetkiniz yok ';
	var $_PHPSHOP_FUNC_NOT_REG = 'Fonksiyon kay�tl� de�ildir.';
	var $_PHPSHOP_FUNC_ISNO_REG = ' Ge�erli bir phpShop fonksiyonu de�ildir.';
	var $_PHPSHOP_ADMIN_MOD = 'Y�netim';
	var $_PHPSHOP_USER_LIST_MNU = 'Kullan�c�lar� Listele';
	var $_PHPSHOP_USER_LIST_LBL = 'Kullan�c� Listesi';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Kullan�c�';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Tam Ad�';
	var $_PHPSHOP_USER_LIST_GROUP = 'Grubu';
	var $_PHPSHOP_USER_FORM_MNU = 'Kullan�c� ekle';
	var $_PHPSHOP_USER_FORM_LBL = 'Kullan�c� Bilgisi Ekleme/G�nleme';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Fatura Bilgileri';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Nakliye Adresi';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Adres Ekleme';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'No shipping addresses.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Adres Rumuzu';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Ad�';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Soyad�';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = '�kinci Ad�';
	var $_PHPSHOP_USER_FORM_TITLE = '�nvan�';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Kullan�c� Ad�';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Parola';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Parola Tekrar�';
	var $_PHPSHOP_USER_FORM_PERMS = 'Yetkileri';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Customer Number / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Firma Ad�';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Adres 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Adres 2';
	var $_PHPSHOP_USER_FORM_CITY = '�ehir';
	var $_PHPSHOP_USER_FORM_STATE = '�l�e/Semt';
	var $_PHPSHOP_USER_FORM_ZIP = 'Posta Kodu';
	var $_PHPSHOP_USER_FORM_COUNTRY = '�lke';
	var $_PHPSHOP_USER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Mobile Phone';
	var $_PHPSHOP_USER_FORM_FAX = 'Faks';
	var $_PHPSHOP_USER_FORM_EMAIL = 'E-posta';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Mod�l Listeleme';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Mod�l Listesi';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Mod�l Ad�';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Mod�l Yetkileri';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Fonksiyonlar';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Sipari� Listeleme';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Mod�l Ekle';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Mod�l Bilgisi';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Mod�l etiketi (�st Men� i�in)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Mod�l Ad�';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Mod�l Yetkileri';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Mod�l Ba�l���';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Mod�l Dipnotu';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Mod� Amir men�s�nde g�sterilsin mi';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Sipari� G�ster';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Mod�l Tan�m�';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'Dil Kodu';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Dil Dosyas�';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Fonksiyon Listeleme';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Fonksiyon Listesi';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Fonksiyon Ad�';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'S�n�f Ad�';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'S�n�f Metodu';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Yetkiler';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Fonksiyon Ekleme';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Fonksiyon Bilgisi';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Fonksiyon Ad�';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'S�n�f Ad�';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'S�n�f Metodu';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Fonksiyon Yetkisi';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Fonksiyon Tan�m�';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Kur Listeleme';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Kur Listesi';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'Kur Ekle';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Kur Ad�';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'Kur Kodu';
	var $_PHPSHOP_COUNTRY_LIST_MNU = '�lke Listeleme';
	var $_PHPSHOP_COUNTRY_LIST_LBL = '�lke Listesi';
	var $_PHPSHOP_COUNTRY_LIST_ADD = '�lke Ekle';
	var $_PHPSHOP_COUNTRY_LIST_NAME = '�lke Ad�';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = '�lke Kodu(3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = '�lke Kodu(2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'List State';
	var $_PHPSHOP_STATE_LIST_LBL = 'State List for: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Add/Update a State';
	var $_PHPSHOP_STATE_LIST_NAME = 'State Name';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'State Code (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'State Code (2)';
	var $_PHPSHOP_ADDRESS = 'Adresi';
	var $_PHPSHOP_CONTINUE = 'Devam';
	var $_PHPSHOP_EMPTY_CART = 'Al��veri� sepetiniz bo�.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Ping InterShipper Sunucusu';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'InterShipper-Sunucu Ping �ste�i';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'InterShipper Ping Hatas�';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'InterShipper Ping Ba�ar�l�';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Ta��y�c�';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Yan�t (Response)<BR>Zaman�';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'San.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Nakliye Metodu Listeleme';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Aktif Nakliye Metodu';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Nakliye Metodlar�';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Aktif';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Handling Charge';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Ula�t�rma zaman�';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'd�z de�er';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'Y�zde';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'g�n';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'A��r Y�k';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Nakliye Metodu Ayarlar�';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Nakliye Metodu Ekleme';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Nakliye Metodu Ayar�';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Yenileme';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Nakliye Metodu';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Aktifle�tir';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Handling Charge';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Lead Time';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'd�z oran';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'y�zde';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'g�n';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'A��r Y�k';
	var $_PHPSHOP_ORDER_MOD = 'Sipari�';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Sipari� Teyidi';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Sipari� �ptali';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Sipari� Yazd�rma';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Sipari� Silme';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Sipari�leri Listele';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Sipari� Listesi';
	var $_PHPSHOP_ORDER_LIST_ID = 'Sipari� No';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Sipari� Tarihi';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Son D�zenleme';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Durum';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'Ara Toplam';
	var $_PHPSHOP_ORDER_ITEM = 'Sipari�lerim';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Al�nan Sipari�';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Sipari� No';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Sipari� Tarihi';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Sipari� Durumu';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'M��teri Bilgisi';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Fatura Bilgisi';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Nakliye Bilgisi';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Fatura Adresi';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Nakliye Adresi';
	var $_PHPSHOP_ORDER_PRINT_NAME = '�sim';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Firma';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Adres 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Adres 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = '�ehir';
	var $_PHPSHOP_ORDER_PRINT_STATE = '�l�e/Semt';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'Posta Kodu';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = '�lke';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Tel.';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Faks';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'Eposta';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Sipari�lerim';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Miktar';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Mik.';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'Stok';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Fiyat';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Toplam';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'Ara Toplam';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'Toplam Vergi';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Nakliye';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Nakliye Vergisi';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = '�deme Y�ntemi';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Hesap Ad�';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Hesap  No';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Ge�erlilik Tarihi';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = '�deme Logu';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Nakliye Bilgisi';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = '�deme Bilgisi';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Ta��y�c�';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Nakliye Modu';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Sevk Tarihi';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Nakliye Fiyat�';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Sipari� Durum Tipi Listeleme';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Sipari� Durum Tipi Ekleme';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Sipari� Durum Kodu';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Sipari� Durum  Ad�';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Sipari� Durumu';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Sipari� Durum Kodu';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Sipari� Durum Ad�';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Sipari� Listeleme';
	var $_PHPSHOP_PRODUCT_MOD = '�r�nler';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Mevcut �r�n';
	var $_PHPSHOP_CURRENT_ITEM = 'Mevcut �ge';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Stokta �r�n';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Stok G�r�nt�le';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Fiyat';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Adet';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'A��rl�k';
	var $_PHPSHOP_PRODUCT_LIST_MNU = '�r�n Listeleme';
	var $_PHPSHOP_PRODUCT_LIST_LBL = '�r�n Listesi';
	var $_PHPSHOP_PRODUCT_LIST_NAME = '�r�n  Ad�';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'Stok';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Yay�nla';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Search Product';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'modyfied';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'with price modyfied';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'without price';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'After';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Before';
	var $_PHPSHOP_PRODUCT_FORM_MNU = '�r�n Ekle';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Bu �r�n� g�nle';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Ma�azadaki �r�nleri �nizleme';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = '�ge Ekle';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Ba�ka �ge Ekle';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Yeni �r�n';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = '�r�n G�nleme';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = '�r�n Bilgisi';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = '�r�n Durumu';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = '�r�n Boyutlar� ve A��rl���';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = '�r�n Resimleri';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Yeni �r�n';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = '�r�n G�nleme';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = '�ge Bilgisi';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = '�ge Durumu';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = '�ge Boyutlar� ve A��rl���';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = '�ge Resimleri';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'BA�l� �r�ne geri d�n';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'To update actual image, type in path to new image.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Mevcut resmi silmek i�in ';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = '�r�n �geleri';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = '�ge �zellikleri';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Bu �r�n ve �r�ne ba�l� �geleri silmek istedi�inizden eminmisiniz?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Bu �geyi silmek istedi�inizden eminmisiniz?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Sat�c�';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = '�reticiler';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'Stok';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Ad�';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Kategori';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Bay Fiyat�';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Product Price (Net)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Flypage Description';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'K�sa Tan�mlama';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'Stokta';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'Sipari�';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Tedarik Tarihi';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'On Special';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = '�ndirim Tipi';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Yay�nlans�n m�?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Uzunluk';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Geni�lik';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Y�kseklik';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = '�l�� Birimi';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'A��rl�k';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = '�l�� Birimi';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'K���k resim';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Orijinal Resim';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'pounds';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'inches';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Unit';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'piece';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Units in Packaging';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Here you can fill in a number unit in packaging. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Units in Box';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Here you can fill in a number unit in box. (max. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = '�r�n Ekleme Sonu�lar�';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = '�r�n G�nleme Sonu�lar�';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = '�ge Ekleme Sonu�lar�';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = '�ge g�nleme sonu�lar�';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'CSV y�kleme kullan';
	var $_PHPSHOP_PRODUCT_FOLDERS = '�r�n Dizinleri';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Kategori Listele';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Kategori  A�ac�';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Kategori Ekleme';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Kategori Bilgisi';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Kategori Ad�';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Ba�l�';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Kategori Tan�m�';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Yay�nlans�n m�?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Kategori Flypage';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Nitelik Listeleme';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Nitelik Listesi';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Nitelik Ad�';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Sipari� Liteleme';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Nitelik Ekle';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Nitelik Formu';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = '�r�n i�in Yeni nitelik';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = '�r�n i�in nitelik g�nleme';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = '�ge i�in Yeni nitelik';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = '�ge i�in nitelik g�nleme';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = '�ge Ad�';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Sipari� Liteleme';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Kategori Listeleme';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Fiyat A�ac�';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'F�yat';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Grup Ad�';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Fiyat';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Kur';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Fiyat Ekleme';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Fiyat Bilgisi';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = '�r�n i�in Yeni Fiyat gir';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = '�r�n fiyat� g�nle';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = '�ge i�in Yeni Fiyat gir';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = '�ge i�in Fiyat G�nle';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Fiyat';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Kur';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'M��teri Grubu';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Temel Rapor';
	var $_PHPSHOP_RB_INDIVIDUAL = '�zel �r�n Listeleme';
	var $_PHPSHOP_RB_SALE_TITLE = 'Sat�� Raporlama';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Sat�� Faaliyetleri �zleme';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Aral�k Ayar�';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Ayl�k';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Haftal�k';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'G�nl�k';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Bu Ay';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'Son Ay';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'Son 60 g�n';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'Son 90 g�n';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Ba�lama:';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Bitirme:';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Se�ili de�eri g�ster';
	var $_PHPSHOP_RB_REPORT_FOR = 'Raporlama:';
	var $_PHPSHOP_RB_DATE = 'Tarih';
	var $_PHPSHOP_RB_ORDERS = 'Sipari�ler';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Toplam Sat��lar (Adet)';
	var $_PHPSHOP_RB_REVENUE = 'Gelir';
	var $_PHPSHOP_RB_PRODLIST = '�r�n Listeleme';
	var $_PHPSHOP_SHOP_MOD = 'Ma�aza';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'K���k Resim';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Fiyat';
	var $_PHPSHOP_ORDER_STATUS_P = 'Bekliyor';
	var $_PHPSHOP_ORDER_STATUS_C = 'Teyit Edildi';
	var $_PHPSHOP_ORDER_STATUS_X = '�ptal Edildi';
	var $_PHPSHOP_ORDER_BUTTON = 'Sipari�';
	var $_PHPSHOP_SHOPPER_MOD = 'Ma�aza Sahibi';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Ma�aza Sahiplerini Listele';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Ma�azac�lar Listesi';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Kullan�c� Ad�';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Tam �smi';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Grubu';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Ma�aza Sahibi Ekle';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Sahip Bilgisi';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Fatura Bilgisi';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Bilgi';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Nakliye Bilgisi';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Adres Ekleme';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Adres Rumuzu';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Kullan�c� Ad�';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Ad�';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Soyad�';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = '�kinci Ad�';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = '�nvan�';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Al��veri� Yapan';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Parolas�';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Parola Teyidi';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'M��teri Grubu';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Firma Ad�';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Adres 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Adres 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = '�ehir';
	var $_PHPSHOP_SHOPPER_FORM_STATE = '�l�e/Semt';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'Posta Kodu';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = '�lke';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Mobile phone';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Faks';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'Eposta';
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
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'M��teri Grubu Listeleme';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'M��teri Grubu Listesi';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Grup Ad�';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Grup A��klamas�';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Ma�aza Sahibi Grubu Formu';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Ma�aza Sahibi Grubu Ekleme';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Grup Ad�';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Grup A��klamas�';
	var $_PHPSHOP_STORE_MOD = 'Ma�azam';
	var $_PHPSHOP_STORE_FORM_MNU = 'Ma�aza D�zenleme';
	var $_PHPSHOP_STORE_FORM_LBL = 'Ma�aza Bilgisi';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = '�leti�im Bilgisi';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Tam Resim';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Resim Y�kle';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Ma�aza Ad�';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Ma�aza Firma Ad�';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Adres 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Adres 2';
	var $_PHPSHOP_STORE_FORM_CITY = '�ehir';
	var $_PHPSHOP_STORE_FORM_STATE = '�l�e/Semt';
	var $_PHPSHOP_STORE_FORM_COUNTRY = '�lke';
	var $_PHPSHOP_STORE_FORM_ZIP = 'Posta Kodu';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Kur';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Ma�aza Kategorisi';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Soyad�';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Ad�';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = '�kinci Ad�';
	var $_PHPSHOP_STORE_FORM_TITLE = '�nvan�';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'TEl 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'TEl 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Faks';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'E-posta';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Resim Yolu';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'A��klamalar';
	var $_PHPSHOP_PAYMENT = '�deme';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = '�deme Y�ntemlerini Listeleme';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = '�deme Y�ntemi Listesi';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Ad�';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Kodu';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = '�ndirim';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Ma�azac� Grubu';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = '�deme Y�ntemi Tipi';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = '�deme Y�ntemi Ekle';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = '�deme Y�ntemi Formu';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = '�deme Form Ad�';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Al�c� Grubu';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = '�ndirim';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Kod';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Sipari� Listeleme';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = '�deme Y�ntemi Tipi';
	var $_PHPSHOP_TAX_MOD = 'Vergi';
	var $_PHPSHOP_TAX_RATE = 'Vergi Oranlar�';
	var $_PHPSHOP_TAX_LIST_MNU = 'Vergi Oranlar� Listeleme';
	var $_PHPSHOP_TAX_LIST_LBL = 'Vergi Oranlar� Listesi';
	var $_PHPSHOP_TAX_LIST_STATE = 'Cergi Dairesi';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Vergi �lkesi';
	var $_PHPSHOP_TAX_LIST_RATE = 'Vergi Oran�';
	var $_PHPSHOP_TAX_FORM_MNU = 'Vergi Oran� Ekleme';
	var $_PHPSHOP_TAX_FORM_LBL = 'Vergi Bilgisi Ekleme';
	var $_PHPSHOP_TAX_FORM_STATE = 'Vergi Dairesi Ekleme';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Vergi �lkesi';
	var $_PHPSHOP_TAX_FORM_RATE = 'Vergi Oran�';
	var $_PHPSHOP_VENDOR_MOD = 'Sat�c�';
	var $_PHPSHOP_VENDOR_ADMIN = 'Sat�c�lar';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Sat�c�lar� Listeleme';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Sat�c� Listesi';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Satucu Ad�';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Y�netici';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Sat�c� Ekleme';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Bilgi Ekleme';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Sat�c� Bilgisi';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = '�leti�im Bilgisi';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'B�y�k Resim';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Resim Y�kleme';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Sat�c� Ma�aza Ad�';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Satucu �irket Ad�';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Adres 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Adres 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = '�ehir';
	var $_PHPSHOP_VENDOR_FORM_STATE = '�l�e/Semt';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = '�lke';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'Posta Kodu';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Kur';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Sat�c� Kategorisi';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Soyad�';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Ad�';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = '�kinci Ad�';
	var $_PHPSHOP_VENDOR_FORM_TITLE = '�nvan';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Tel 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Tel 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Faks';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'E-posta';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Resim Yolu';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'A��klama';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Sat�c� Kategorileri';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Sat�c� Kategori Listesi';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Kategori Ad�';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Kategori A��klamas�';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Sat�c�lar';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Sat�c� Kategori Ekleme';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Sat�c� Kategori Formu';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Kategori Bilgisi';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Kategori Ad�';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Kategori A��klamas�';
	var $_PHPSHOP_MANUFACTURER_MOD = '�retici';
	var $_PHPSHOP_MANUFACTURER_ADMIN = '�reticiler';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = '�reticileri Listeleme';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = '�retici Listesi';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = '�retici Ad�';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Y�netim';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = '�retici Ekle';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Bilgi Ekle';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = '�retici Bilgisi';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = '�retici  Ad�';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = '�retici Grubu';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'E-posta';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = '�retici Web sayfas�na ba�lant� (URL)';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Tan�mlama';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = '�retici Gruplar�n� Listele';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = '�retici Grubu Listesi';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Grup Ad�';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Grup A��klamas�';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = '�reticiler';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = '�retici Grubu Ekle';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = '�retici Grup Formu';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Grup Bilgisi';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Grup Ad�';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Grup A��klamas�';
	var $_PHPSHOP_HELP_MOD = 'Yard�m';
	var $_PHPSHOP_CART_ACTION = 'Eylemler';
	var $_PHPSHOP_CART_UPDATE = 'G�leme';
	var $_PHPSHOP_CART_DELETE = 'Sil';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Fiyat';
	var $_PHPSHOP_PRODUCT_CALL = 'Fiyatlar i�in arayabilirsiniz.';
	var $_PHPSHOP_PRODUCT_PREVIOUS = '�nceki';
	var $_PHPSHOP_PRODUCT_NEXT = 'SONRAK�';
	var $_PHPSHOP_CART_TAX = 'Vergi';
	var $_PHPSHOP_CART_SHIPPING = 'Nakliye';
	var $_PHPSHOP_CART_TOTAL = 'Toplam';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Sonraki';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'KAYIT';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = '�deme Bilgisi';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Firma';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = '�sim';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Adres';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Faks';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'E-posta';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Nakliye Bilgisi';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Firma';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = '�sim';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Adres';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Tel.';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Faks';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = '�deme Bilgisi';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Kart Sahibi';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = '�deme Y�ntemi';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Kredi Kart No';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Ge�erlilik Tarihi';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Sipari� Bitirme';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'Kredi Kart� ile �deme se�ildi�inde istenen bilgi';
	var $_PHPSHOP_ZONE_MOD = 'B�lgesel Nakliye';
	var $_PHPSHOP_ZONE_LIST_MNU = 'B�lge Listele';
	var $_PHPSHOP_ZONE_FORM_MNU = 'B�lge Ekle';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'B�lgeye Y�nlendirme';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = '�lke';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Mevcut B�lge';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'B�lgeye Y�nlendir';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'G�nle';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'B�lgelere Y�nlendir';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'B�lge Ad�';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'B�lge Tan�m�';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = '�ge ba��na B�lge Maliyeti';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'B�lge Maliyet Limiti';
	var $_PHPSHOP_ZONE_LIST_LBL = 'B�lge Listesi';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'B�lge Ad�';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'B�lge Tan�m�';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = '�ge Ba��na B�lge Maliyeti';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'B�lge Maliyet Limiti';
	var $_PHPSHOP_LOGIN_FIRST = 'L�tfen, oturum a��n (login) ya da �ncelikle sitemize kay�t olun.(<br>Te�ekk�rler';
	var $_PHPSHOP_STORE_FORM_TOS = 'Hzmet Ko�ullar�';
	var $_PHPSHOP_AGREE_TO_TOS = 'L�tfen, �ncelikle Hizmet Ko�ullar�m�z� kabul edin.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Hizmet Ko�ullar�n� kabul ediyorum';
	var $_PHPSHOP_LEAVE_BLANK = '(BO�LUK b�rak�n e�er <br />�zel bir Php dosyas� yoksa!)';
	var $_PHPSHOP_RETURN_LOGIN = 'Sitemiz �yesi iseniz, L�tfen oturum a��n (Log In)';
	var $_PHPSHOP_NEW_CUSTOMER = 'Yeni iseniz? L�tfen �deme Bilginizi girin';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'M��teri Hesab�:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Sipari� Bilgisi';
	var $_PHPSHOP_ACC_UPD_BILL = '�imdi, �deme bilgilerinizi g�ncelleyebilirsiniz.';
	var $_PHPSHOP_ACC_UPD_SHIP = '�imdi, nakliye adresi ekleyebilir ya da mevcut adresinizi g�ncelleyebilirsiniz.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Hesap Bilgisi';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Nakliye Bilgisi';
	var $_PHPSHOP_ACC_NO_ORDERS = 'G�r�nt�lenecek Siari� Bulunamad�';
	var $_PHPSHOP_ACC_BILL_DEF = '- Ge�erli (�deme Adresimle Ayn�)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Sipari�inizin g�nderilece�i yeni bir adres ekleyebilirsiniz. Bu adres i�in L�tfen, uygun bir rumuz ya da kod kullan�n.';
	var $_PHPSHOP_CONFIG = 'Ayarlar';
	var $_PHPSHOP_USERS = 'Kullan�c�lar';
	var $_PHPSHOP_IS_CC_PAYMENT = 'Kredi Kart�n�zla m� �deyeceksiniz?';
	var $_PHPSHOP_SHIPPING_MOD = 'Nakliye Y�netimi';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Nakliye';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Nakliyeci';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Nakliyeci Listesi';
	var $_PHPSHOP_RATE_LIST_MNU = 'Nakliye Tarifesi';
	var $_PHPSHOP_RATE_LIST_LBL = 'Nakliye Tarife Listesi';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Ad�';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Listorder';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Nakliyeci Olu�turma';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Nakliyeci d�zelt / olu�tur';
	var $_PHPSHOP_RATE_FORM_MNU = 'Tarife olu�tur';
	var $_PHPSHOP_RATE_FORM_LBL = 'Tarife g�nleme / olu�turma';
	var $_PHPSHOP_RATE_FORM_NAME = 'Tarife A��klamas�';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Nakliyeci';
	var $_PHPSHOP_RATE_FORM_COUNTRY = '�lke';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'Ba�lang�� Posta Kodu';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Biti� Posta Kodu';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'End���k A��rl�k';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Eny�ksek A��rl�k';
	var $_PHPSHOP_RATE_FORM_VALUE = '�cret';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Paketleme �cretiniz';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Kur';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'KDV';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Listorder';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Nakliyeci';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Tarife a��klamas�';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'A��rl�k den ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... e';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Nakliye �irketi';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Listorder';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'HATA: Nakliyeci ID  exists.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'HATA: Nakliyeci Se�in.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'HATA: At least one shipping rate exists, delete rates prior to shipper';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'HATA: Bu ID koduyla bir nakliyeci bulunamad�.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'HATA: Nakiyeci se�in.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'HATA: Bu ID koduyla bir nakliyeci bulunamad�.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'HATA: A rate descriptor is requested.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'HATA: G�nderilecek �lke yanl��. Birden fazla �lke se�ildiyse �lke adlar� ";" ile ayr�lmal�.';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'HATA: En d���k a��rl�k de�eri girin.';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'HATA: En y�ksek a��rl�k de�eri girin';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'HATA: En d���k a��rl�k en y�ksek a��rl�ktan d���k olmal�';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'HATA: Bir nakliye �creti girin';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'HATA: Bir kur se�in';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'HATA: Bir ta��ma �creti girin';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'L�tfen se�iniz';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Nakliyeci';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Nakliye Tarifesi';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Price';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-none-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'KrediKart�';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = '�deme ��lemcisi Kullan�n';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Banka Hesab�';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Sadece adres';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'L�tfen bir nakliye adresi se�in!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'L�tfen bir nakliye y�ntemi se�in!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'L�tfen bir �deme y�ntemi se�in!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'L�tfen, bilgilerinizi g�zden ge�irin ve sipari�inizi teyit edin!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'L�tfen bir nakliye adresi se�in.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'L�tfen di�er Nakliye y�ntemini se�in.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'L�tfen bir �deme y�ntemi se�in.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'L�tfen 16 haneli kredi kart� numaran�z� girin.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'L�tfen kredi kart�n�z �zerindeki ismi girin.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'Girilen Kredi Kart� numaras� ge�ersiz.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'L�tfen kredi kart�n�z �zerindeki ge�erlilik tarihinin ay�n� girin.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'L�tfen kredi kart�n�z �zerindeki ge�erlilik tarihinin y�l�n� girin.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'Ge�erlilik tarihi yanl��.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'L�tfen adresiniz i�in bir nakliye girin.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Ge�ersiz KK numaras�.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'Al��veri� sepetiniz bo�!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'HATA: L�tfen bir nakliyeci se�in!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'HATA: Se�ilen nakliye tarifesi bulunamad�!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'HATA: Nakliye adresiniz bulunamad�!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'HATA: Kredi Kart� bilgisi yok....';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'HATA: Kredi Kart� numaras� bulunamad�!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = '�zg�n�z, girdi�iniz KK numaras� bir test numaras�d�r!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'Kullan�c� veri taban�nda bulunamad�!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Banka hesap sahibi ad� ge�ersiz.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Kullan�lan IBAN vermediniz.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Kullan�lan bir banka hesap numaras� vermediniz.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'You have actually not provided your bank sort code.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Ge�ersiz Banka ad� verdiniz.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Kasa i�lemi ge�erli bir ad�m istiyor!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Sonraki i�leminiz i�in �deme bilgisi alnm��t�r.<BR>';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'End���k sipari� de�erine hen�z ula��lamad�.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'End���k sipari� de�eri:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Kredi Kart� �demesi';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'di�er �deme y�ntemleri';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'L�tfen bir �deme y�ntemi se�in:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Ma�azan�z i�in end���k sipari� de�eri';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Banka Hesap Bilgisi';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Hesap No';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'Banka �ube kodu';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Banka Ad�';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Hesap Sahibi';
	var $_PHPSHOP_MODULES = 'Mod�ller';
	var $_PHPSHOP_FUNCTIONS = 'Fonksiyonlar';
	var $_PHPSHOP_SPECIAL_PRODUCTS = '�zel �r�nler';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Dilerseniz, bize sipari�inizle ilgili bir not b�rakabilirsiniz.';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'M��terinin notu';
	var $_PHPSHOP_INCLUDING_TAX = '($tax % vergi dahildir)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'L�tfen bir �ge se�iniz';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = '�ge';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Dosya �ndirme (Download) Alan�';
	var $_PHPSHOP_DOWNLOADS_START = 'Dosya �ndir';
	var $_PHPSHOP_DOWNLOADS_INFO = 'L�tfen, e-postan�za g�nderilen Download-ID nizi girin ve \'Dosya �ndir\' butonuna t�klay�n.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = '�zg�n�z, dosya indirilemiyor.';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = '�zg�n�z, size tahsis edilen dosya indirme say�s�n� a�t�n�z.';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Ge�ersiz Download-ID!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'G�nderilemeyen ileti adresi: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'G�nderilen ileti adresi:';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Dosya �ndir-Bilgi';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'Sipari� etti�iniz dosya(lar) Download i�in haz�r.';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'L�tfen a�a��daki Download-ID(s) Dosya �ndirme Alan�na giriniz: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'Herbir dosya i�in dosya en�ok indirme say�s�: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = '�lk dosya indirmenizden $expire g�n sonra dosya indirin';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Sorular? Sorunlar?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Dosya indirme bilgisi ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = '�r�nler Internetten indirilebilir mi?';
	var $_PHPSHOP_PAYPAL_THANKYOU = '�demeniz i�in te�ekk�rler. 
        �deme ��leminiz ba�ar�yla ger�ekle�mi�tir. Bu i�leminiz i�in PayPal. taraf�ndan e-posta adresinize bir teyit iletisi g�nderilecektir.
        Al��veri�inize devam edebilir ya da  <a href=http://www.paypal.com>www.paypal.com</a> sitesinde bir oturum a�arak �deme i�leminizin detaylar�n� g�rebilirsiniz.';
	var $_PHPSHOP_PAYPAL_ERROR = '�deme i�leminiz ger�ekle�irken bir HATA olu�tu. Sipari� durumu g�nlenemiyecek.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Bizimle al��veri� yapt���n�z i�in te�ekk�r ederiz.  Sipari� bilginiz a�a��dad�r.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'S�rekli al��veri�iniz i�in te�ekk�r ederiz.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Sorular? Sorunlar?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'A�a��daki sipari� al�nm��t�r..';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'A�a��daki linki izleyerek sipari�inizi inceleyin.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Negatif miktar kabu edilemez.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'L�tfen bu �ge i�in ge�erli bir miktar girin.';
	var $_PHPSHOP_CART_STOCK_1 = 'Stokta bu miktarda �r�n yoktur.';
	var $_PHPSHOP_CART_STOCK_2 = 'Se�ti�iniz �r�nden $product_in_stock adet bulunmaktad�r. ';
	var $_PHPSHOP_CART_STOCK_3 = 'Bu �r�n geldi�inde bilgilenmek ve bekleyenler listesine kay�t olmak i�in t�klay�n�z.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'L�tfen detaylar sayfas�ndan �zel bir �ge se�iniz!';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'hi�biri';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Bay.';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Bayan.';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Dr.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof.';
	var $_PHPSHOP_DEFAULT = 'Default';
	var $_PHPSHOP_AFFILIATE_MOD = 'Affiliate Administration';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = '�yeleri Listeleme';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = '�ye Listesi';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = '�ye ad�';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Aktif';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Oran';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Ayl�k Toplam';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Ayl�k Komisyon';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Sipari�leri Listele';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = '�yelere E-posta';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = '�yelere E-posta';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'E-posta g�nderilecekler(* = ALL)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'E-postan�z';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Konu';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Mevcut �statistikleri i�erir';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Komisyon Oran� (%)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Aktif?';
	var $_PHPSHOP_DELIVERY_TIME = 'Genellikle ta��n�r';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Ta��ma Bilgisi';
	var $_PHPSHOP_MORE_CATEGORIES = 'daha fazla kategori';
	var $_PHPSHOP_AVAILABILITY = 'Availability';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Bu �r�n�n mevcudu kalmam��t�r.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Bu �r�n�n stoklar�m�za girece�i tarih: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = '�zet';
	var $_PHPSHOP_STATISTIC_STATISTICS = '�statistikler';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'M��teriler';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'aktif �r�nler';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'pasif �r�nler';
	var $_PHPSHOP_STATISTIC_SUM = 'Toplam';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Yeni Sipari�ler';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Yeni M��teriler';

	//Waiting list : file /administrator/components/com_phpshop/html/shop.waiting_list.php
	var $_PHPSHOP_WAITING_LIST_MESSAGE = '�r�n stoklarda bulundu�und haberdar olmak i�in l�tfen a�a��ya e-mail adresinizi giriniz. 
                                        E-mail adresinizi hi�kimseyle hi�bir �ekilde payla�mayacak,satmayacak,kiralamayaca��z.
                                        Sadece �r�n stoklara geldi�inde sizi haberdar edece�iz.<br /><br />Te�ekk�r ederiz!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Bekledi�iniz i�in te�ekk�r ederiz! <br />Stoklarla ilgili en ayak�n zamanda sizi haberdar edece�iz.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Beni haberdar et!';
	
	//Checkout : file /administrator/components/com_phpshop/html/checkout.thankyou.php
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Printer ��kt�s�';
  
  /**************************Admin.show_cfg.php in apparition order ;-)**************************************/
	
	/* PAGE 1 */
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'L�tfen Authorize.net veya CyberCash se�iniz';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' D�zenleme dosyas� durumu:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'yaz�labilir';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'yaz�lamaz';
	
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Genel';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Yol & Link';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Site';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Nakliye';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Hesap �deme';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Dosya �ndirme';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = '�demeler';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Sadece katolog olarak g�ster';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Bunu i�aretlerseniz t�m araba fonksiyonlar� kaybolacak.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = '�cretleri g�ster';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = '�cretleri vergi dahil g�ster?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'M��terilerin �cretleri vergi dahilmi yoksa vergisiz haldemi g�sterilece�ini atama yapar.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = '�cretleri g�stermek i�in t�kla. 	Kimileri �cretleri sayfada g�rmek istemeyebilir.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Sanal vergi';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Baz� �r�nlerin vergisiz olup olmayaca��na karar verir. ps_checkout.php->calc_order_taxable() de�i�tirmek i�in ,�zerinde de�i�iklik yap�n�z.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Vergi modu:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Kargo adresinde bulunuyor';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Sat�c� adresinde bulunuyor';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Bu se�enek ile hangi vergi oran�n�n hesaplamaya kat�laca�� belirtilir:<br />
                                                <ul><li>D�kkan sahibinin memleketi </li><br/>
                                                <li>veya m��terinin memleketi.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = '�oklu vergiyi aktif et';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'E�er farkl� vergi oranlar�na sahip �r�nleriniz varsa bunu i�aretleyiniz.';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Vergi ve kargodan �nce hesaptan indirimi yap';
  var $_PHPSHOP_ADMIN_CFG_REVIEW = 'M��teri yorum /�r�n oylama sistemini aktif et';
  var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'E�er aktif ederseniz m��teriler <strong>�r�nleri oylayabilir</strong> ve �r�nlerle ilgili<strong> yorum yazabilir</strong><br />
                                                                                B�ylece m��teriler �r�nle ilgili tecr�belerini d�er m��terilerle payla�abilirler.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = '�ndirimin vergi ve nakliye �creti kesilmeden �nce mi sonram� yap�lmas� gerekti�ini belirler.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'M��teriler banka hesap bilgilerini bo� ge�ebilir mi?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Ma�azaya kay�t olundu�unda banka hesap bilgilerini belirtmesi gerekip gerekmedi�ini belirler.';

	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'M��teriler il�e/b�lge se�ebilir mi?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'E�er se�ilirse m��teriler kay�t olduklar�nda kendi b�lgelerini/il�elerini se�ip se�emeyeceklerini belirler.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Kullan�m ko�ullar�n� kabul zorunlulu�u olsun mu?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'E�er se�ilirse m��teriler ma�azaya kay�t olurken ma�azan�n kullan�m ko�ullar�n� kabul etmeleri mebur k�l�n�r';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Stok kontrol� olsun mu?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'E�er se�ilirse m��teri al��veri�te arabaya bir �r�n att���nda stok kontrol� yap�l�r.
                                                                                          Se�ilmesi halinde m��terinin stokta olmayan �r�n� almas� iptal edilir.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Ortak �irketler program�n� aktif et?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Ortak �irketler program�n� aktif eder,e�er arka planda eklenen �irketler varsa onlar� aktif edebilirsiniz.';
	
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Sipari�-posta fromat�:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'D�z yaz� halinde';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML halinde';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Onay e-mail lerinin format�n� d�zenlemenizi sa�lar:<br />
                                                                                        <ul><li>Sadece d�z yaz� halinde</li>
                                                                                        <li>veya HTML olarak resimlerle beraber</li></ul>';
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Kullan�c�lara admin kullan�m�na izin ver';
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'Bu se�enekle mambo kullan�c�s� olmayan fakat 
                                                                                              ma�aza admini olan kullan�c�lara mambo adminli�i hakk� verilir.';
	
	/* PAGE 2 */
	var $_PHPSHOP_ADMIN_CFG_URL = 'Link';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'Sitenizin internet adresi. Mambo linki ile ayn� olmal�d�r (sonu / ile bitmelidir).';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'G�venli Alan';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'Sitenize g�venli adres (https: �eklinde , sonu / ile bitmelidir)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'PAR�A L�NK�';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'mambo-phpShop Site bile�enlerinin ba�lant�lar�. (sonu / ile bitmelidir)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'Resim Linki';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'mambo-phpShop Resim klas�r�n�n ba�lant�s�d�r.(sonu / ile bitmelidir)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'Y�netici Yolu';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'mambo-phpShop klas�r� yolu.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'S�n�f Yolu';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'phpShop s�n�flar�n�n klas�r�.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'Sayfa Yolu';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'phpShop html klas�r�n�n yolu.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'Resim yolu';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'phpShop shop_image klas�r� resim yolu.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'Ana Sayfa';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Varsay�lan olarak bu sayfa y�klenecektir.';	
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'Hata Sayfas�';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Hata mesajlar� i�in varsay�lan olarak bu sayfa y�klencektir.';	
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'D�zeltme Sayfas�';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Onar�m mesajlar� i�in bu sayfa varsay�lan olarak a��lacakt�r.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'Onarma a��k ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'ONAR?  	   	Onarmay� a�ar. Her sayfan�n sonunda onarma sayfas� a��lacakt�r. Ma�aza yap�m a�amasnda iken �ok faydal�d�r.';


/* PAGE 3 */

	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = '�nizleme Sayfas�';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = '�r�n detaylar� i�in varsay�lan �nizleme sayfas�d�r.';
  var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = '�ablon Kategorisi';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = '�r�nlerin varsay�lan olarak g�sterilece�i kategoridir.<br />
                                                                                                      �nceki �ablonlar� tekrar d�zenleyerek yeni �ablonlar olu�turabilirsiniz.<br />
                                                                                                      (burada bulabilirsiniz <strong>COMPONENTPATH/html/templates/</strong> aramaya _ ile ba�lay�n)';
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Herbir sat�rda g�z�kecek �r�n (varsay�lan)';
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Her sat�rda bulunacak �r�n say�s�n� belirler. <br />
                                                                                                      �rne�in: �� olarak(3) belirlerseniz, kategori �ablonu her sat�rda 3 �r�n g�sterir';
  
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = '\'no image\' resmi';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'E�er �r�nle ilgili hi�bir resim yoksa bu resim g�sterilir.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'Sat�r Arama';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Arama sonunda g�steilecek sat�r say�s�.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'Arama Rengi  1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Sonu� listesindeki tek say� olarak numaralanm�� say�lar�n rengini belirler.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'Arama Rengi 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Sonu� listesindeki �ift say� olarak numaralanm�� say�lar�n rengini belirler.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'Azami S�ra';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Sipari� listesi kutusunda g�sterilecek azami s�ra say�s� .';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'En altta \'powered by mambo-phpShop\' g�sterilsin mi?';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Se�ilmesi halinde en altta ..powered-by-mambo-phpShop.. resmi g�sterilir.';
	
	
	/* PAGE 4 */
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Ma�azan�z�n nakliye t�r�n� se�iniz.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Standart nakliye mod�l� ,d�zenlenmi� ve oylanm�� kargolarla birlikte. <strong>RECOMMENDED !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '  	Alan nakliye mod�l� 1.0<br />
                                                                                                            Daha fazla bilgi i�in :  <a href=\'http://ZephWare.com\'>http://ZephWare.com</a><br />
                                                                                                            �leti�im i�in : <a href=\'mailto:zephware@devcompany.com\'>ZephWare.com</a><br /> Bunu aktif edin';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<a href=\'http://www.ups.com\' target=\'_blank\'>UPS Online&reg; Ara�lar</a> Nakliye hesaplay�c�';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'UPS eri�im kodu';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'U�s eri�im kodunuz';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'UPS kullan�c� kimli�i';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'Ups ten alm�� oldu�unuz kimlik';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'UPS �ifresi';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'Ups hesab�n�z�n �ifresi';
	  
  var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'Uluslararas� nakliye. E�er <a href=\'http://www.intershipper.com\' target=\'_blank\'>Intershipper.com</a> hesab�n�z varsa se�iniz';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Nakliye metodu se�imini iptal et. E�er m��terilerinizin ald��� �r�nlere nakliye gerekmiyorsa se�iniz.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'Uluslararas� nakliye �ifresi';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Uluslararas� nakliye hesab�n�z�n �ifresi.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'Uluslararas� nakliye emaili';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'Uluslararas� nakliye hesab�n�z�n e-mail adresi.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = '�ifreleme anahtar�';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Veritaban�ndaki saklanan bilgileri �ifrelemek i�in kullan�lan anahtar. Dosyan�n g�r�nt�lenmesinden korumak manas�na gelir.';
	
	
	/* PAGE 5 */
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Hesab� �deme �ubu�unu Aktif Et';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'E�er bunu aktif ederseniz m��teriler hesap �deme s�ras�nda bunu g�r�nt�leyeceklerdir.';
	
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Ma�azan�z�n hesap �deme �eklini se�iniz';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Standart :</strong><br/>
               1. Kargo adresi iste�i<br />
              2. Kargo t�r� iste�i<br />
              3. �deme �ekli iste�i<br />
              4. Sipari�i tamamlama';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>��lem 2:</strong><br/>
               1. Kargo adresi iste�i<br />
              2. �deme t�r� iste�i<br />
              3. Sipari�i Tamamla';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>��lem 3:</strong><br/>
               1. Kargo t�r� iste�i<br />
              2. �deme t�r� iste�i<br />
              3. Sipari�i tamamla';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>��lem 4:</strong><br/>
               1. �deme t�r� iste�i<br />
              2. Sipari�i tamamla';
	
	
	
	/* PAGE 6 */
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = '�ndirilebilir �r�n aktif et';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'E�er indirilebilir �r�nler satmak istiyorsan�z bunu aktif ediniz.';
	
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = '�r�n indirme aktif �r�n durumu';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'M��teriye e-mail yoluyla belirtilecek , indirilebilir �r�n durumunu se�iniz .';
	
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = '�r�n indirme pasif �r�n durumu';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = '�ndirilebilir �r�n durumunu pasif hale ge�irmek i�in bu �zelli�i kullanabilirsiniz.';
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'DOWNLOADROOT';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'M��terilerin dosyalar� indirecekleri fiziksel yol.<br>
        <span class=\'message\'>Ma�azan�z�n g�venli�i i�in: E�er yapabiliyorsan�z sitenizin ana klas�r� d���nda bir yer se�iniz</span>';
	
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Azami Dosya �ndirme';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Tek dosya indirme kimli�i ile dosyalar�n indirilmesini sa�lar, (tek sipari� i�in)';
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Dosya �ndirme S�resi';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Dosya indirme s�n�r�n� <strong>saniye</strong> olarak belirleyebilirsiniz. 
  Bu s�n�r ilk dosya indirme ile ba�lar! S�n�r a��ld���nda, Dosya indirme kimli�i iptal olur.<br />Not : 86400sn =24saat.';
	
	
	
	
	/* PAGE 7 */
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'PayPal ile IPN �deme a��k m�?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Kullan�c�lar�n Paypal ile �deme sistemini kullanmas� i�in se�iniz.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'PayPal �demesi i�in email:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Paypal �demeleriniz i�inTicari e-posta adresiniz. Al�c� emaili olarak kullan�l�r.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Ba�ar�l� i�lemler i�in �r�n durumu';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'As�l durumu belirtilmi� �r�n durumu, e�er paypal �deme ba�ar�l� olmu� ise.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Ba�ar�s�z i�lemler i�in �r�n durumu';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Ba�ar�s�z PAYPAL i�lemleri i�in �r�n durumunu se�iniz.';
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'PayMate ile �demeler aktif mi?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Kullan�c�lar�n Paymate ile �deme sistemini kullanmas� i�in se�iniz.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'PayMate kullan�c� ad�:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'PayMate hesab�ndaki kullan�c� ad�.';
	
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Authorize.net �deme sistemini a�?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Authorize.net i phpShop ile kullan.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Test modu ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Test halinde iken \'Evet\' se�in. Canl� i�lemler i�in \'Hay�r\' se�iniz.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Evet';
	var $_PHPSHOP_ADMIN_CFG_NO = 'Hay�r';
	
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Authorize.net Kullan�c� kimli�i';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'Bu sizin Authorize.Net kullan�c� kimli�iniz';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Authorize.net i�lem anahtar�';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'Bu sizin Authorize.net i�lem anahtar�n�z.';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Belgeleme T�r�';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'Bu sizin Authorize.Net belgeleme t�r�n�z.';
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'CyberCash aktif et.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'CyberCash i phpShop ile kullan.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash T�ccar';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_MERCHANT ,CyberCash ticari kimli�i';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash T�ccar Anahtar�';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash taraf�ndan sa�lanan CyberCash t�ccar anahtar�';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash �deme linki';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'CyberCash PAYMENT URL is the URL provided by Cybercash for secure payment';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash Belgeleme t�r�';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'Cybercase taraf�ndan sa�lanan CyberCash belgeleme t�r� ';
	

    /** Advanced Search feature ***/
    var $_PHPSHOP_ADVANCED_SEARCH  ='Kapsaml� Arama';
    var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'T�m kategorileri ara';
    var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'T�m �r�n �zelliklerinde ara';
    var $_PHPSHOP_SEARCH_PRODNAME = 'Sadece �r�n ad�';
    var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Sadece �retici/Sat�c�';
    var $_PHPSHOP_SEARCH_DESCRIPTION = 'Sadece �r�n tan�m�';
    var $_PHPSHOP_SEARCH_AND = 've';
    var $_PHPSHOP_SEARCH_NOT = 'yok';
    var $_PHPSHOP_SEARCH_TEXT1 = 'Birinci a��l�r men� belli bir limitte arama yapmak i�in kategori se�menizi sa�lar . 
        �kinci a��l�r men� �r�nle ilgili belli bir arama yapmak i�in kategori se�menizi sa�lar  (mesela �r�n ad�) .
        Bunlar� se�ip anahtar kelimeyi giriniz. ';
    var $_PHPSHOP_SEARCH_TEXT2 = ' Araman�z� ikinci bir anahtar kelime ekleyerek ve operat�rleri(ve,veya) kullanarak inceltebilirsiniz . 
        Ve anahtar kelimesini se�mek iki kelimeninde �r�nde bulunmas� manas�na gelmektedir. 
        YOk anahtar kelimesini se�mek ilk kelimenin �r�nde bulunmas� manas�na gelmektedir. ';
    var $_PHPSHOP_ORDERBY = 'Sipari�';
    
    /*** Review feature ***/
    var $_PHPSHOP_CUSTOMER_RATING  = 'Averaj m��teri reytingi';
    var $_PHPSHOP_TOTAL_VOTES = 'Toplam Oy';
    var $_PHPSHOP_CAST_VOTE = 'Oyunuzu se�iniz';
    var $_PHPSHOP_RATE_BUTTON = 'Oran';
    var $_PHPSHOP_RATE_NOM = 'Reyting';
    var $_PHPSHOP_REVIEWS = 'M��teri yorumlar�';
    var $_PHPSHOP_NO_REVIEWS = 'Bu �r�n i�in hi� g�r�� belirtilmemi�.';
    var $_PHPSHOP_WRITE_FIRST_REVIEW = '�lk g�r��� siz belirtin';
    var $_PHPSHOP_REVIEW_LOGIN = 'L�tfen g�r�� belirtmek i�in kullan�c� giri�i yap�n.';
    var $_PHPSHOP_REVIEW_ERR_RATE = 'L�tfen yorumunuzu tamamlamak i�in oy verin.';
    var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'L�tfen yorumunuzu yap�n�z. Asgari izin verilen limit 100 karakterdir.';
    var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Yorumunuzu k�salt�n : Azami 2000 karaktere izin veriyoruz ';
    var $_PHPSHOP_WRITE_REVIEW = '�r�n i�in yorum yap�n!';
    var $_PHPSHOP_REVIEW_RATE = '�ne �r�ne oy veriniz. L�tfen 0 (�ok k�t�) ile 5 (S�per) aras� de�er se�iniz.';
    var $_PHPSHOP_REVIEW_COMMENT = 'K�sa bir yorum girin....(asgari  100, azami 2000 characters) ';
    var $_PHPSHOP_REVIEW_COUNT = 'Yaz�lan karakterler: ';
    var $_PHPSHOP_REVIEW_SUBMIT = 'Yorum g�nder';
    var $_PHPSHOP_REVIEW_ALREADYDONE = '�nceden bu �r�nle ilgili inceleme yapm��s�n�z,te�ekk�r ederiz.';
    var $_PHPSHOP_REVIEW_THANKYOU = '�ncelemeniz i�in te�ekk�rler.';
    var $_PHPSHOP_COMMENT= 'Yorum';
    
    var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Kredi Kart� T�r� Ekle/D�zenle';
    var $_PHPSHOP_CREDITCARD_NAME = 'Kredi Kart� Ad�';
    var $_PHPSHOP_CREDITCARD_CODE = 'Kredi Kart� - G�venlik Kodu';
    var $_PHPSHOP_CREDITCARD_TYPE = 'Kredi Kart� T�r�';
    
    var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Kredi Kart� Listesi';
    var $_PHPSHOP_UDATE_ADDRESS = 'Adres G�ncelle';
    var $_PHPSHOP_CONTINUE_SHOPPING = 'Al��veri�e devam et';
    
    var $_PHPSHOP_THANKYOU_SUCCESS = 'Sipari�iniz al�nd�!';
    var $_PHPSHOP_ORDER_LINK = 'Sipari� detaylar� i�in a�a��daki linklerden faydalanabilirsiniz';
    
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = '�r�n�n�z�n {order_id} durumu de�i�ti.';
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'Yeni durum:';
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'Sipari� detaylar� i�in a�a��daki linke t�klay�n:';
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = '�r�n durumu de�i�ti: �r�n�n�z {order_id}';
    var $_PHPSHOP_ORDER_LIST_NOTIFY = 'M��teriyi haberdar et.';
    var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = '�nce sipari� durumunu de�i�tirin';
    
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Varsay�lan m��teri grubu i�in �r�n indirimi (% olarak)';
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Pozitif X : E�er bu �r�n grubuna hi�bir �r�n �creti atanmam��sa, varsay�lan �cretten X y�zde olarak d���l�r. Negatif de�erler tam tersi etki yapar.';
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = '�r�n indirimleri';
    var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = '�ndirimli �r�n Listesi';
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = '�r�n indirimi ekle d�zelt';
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = '�ndirim tutar�';
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = '�ndirim tutar�n� giriniz';
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = '�ndirim tipi';
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Y�zde';
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Toplam';
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Tutar y�zde olarak m� toplam olarak m� g�sterilecek?';
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = '�ndirimin ba�lang�� tarihi';
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = '�ndirimin ba�lad��� g�n� belirler';
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = '�ndirimin biti� tarihi';
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = '�ndirimin bitti�i g�n� belirler';
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = '�r�n indirim formundan indirim ekleyebilirsiniz!';
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Bu kadar kazand�n�z';
    
    var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Resmin t�m�n� g�r�nt�le';
    
/*********************
Currency Display Style 
***********************/
    var $_PHPSHOP_CURRENCY_DISPLAY = 'Parabirimi g�sterim �ekli';
    var $_PHPSHOP_CURRENCY_SYMBOL = 'Parabirimi sembol�';
    var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Buradan HTML giri�i yapabilirsiniz (�rne�in &amp;euro;,&amp;pound;,&amp;yen;,...)';
    var $_PHPSHOP_CURRENCY_DECIMALS = 'Ondal�k K�s�m';
    var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Ka� tane ondal�k basamak g�sterilecek (0 olabilir)<br><b>E�er farkl� bir say� ise yuvarlama yapar</b>';
    var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Ondal�k sembol�';
    var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Ondal�k sembol� i�in kullan�lacak karakter';
    var $_PHPSHOP_CURRENCY_THOUSANDS = 'Binlik ayrac�';
    var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Binler basama��n� ay�rmak i�in kullan�lacak sembol (bo� b�rak�labilir)';
    var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Pozitif De�er Bi�emi';
    var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Pozitif de�erleri g�stermek i�in bi�emi kullan.<br>(Symb stands for currency symbol)';
    var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Negatif De�er Bi�emi';
    var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Negatif de�erleri g�stermek i�in bi�emi kullan.<br>(Symb stands for currency symbol)';
    
    var $_PHPSHOP_OTHER_LISTS = 'Di�er �r�nlerin listesi';
/**************
Multiple Images 
****************/
    var $_PHPSHOP_MORE_IMAGES = 'Daha Fazla Resim G�ster';
    var $_PHPSHOP_AVAILABLE_IMAGES = 'Etki resimler';
    var $_PHPSHOP_BACK_TO_DETAILS = '�r�n Detaylar�na D�n';
    
    /* FILEMANAGER */
    var $_PHPSHOP_FILEMANAGER = 'Dosya Y�neticisi';
    var $_PHPSHOP_FILEMANAGER_LIST = 'Dosya Y�neticisi: �r�n Listesi';
    var $_PHPSHOP_FILEMANAGER_ADD = 'Dosya/Resim Ekle';
    var $_PHPSHOP_FILEMANAGER_IMAGES = 'Atanan resimler';
    var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'indirilebilir mi?';
    var $_PHPSHOP_FILEMANAGER_FILES = 'Atanan Dosyalar';
    var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Yay�nla?';
    
    /* FILE LIST */
    var $_PHPSHOP_FILES_LIST = 'Dosya Y�neticisi::Resim/Dosya Listesi';
    var $_PHPSHOP_FILES_LIST_FILENAME = 'Dosya �smi';
    var $_PHPSHOP_FILES_LIST_FILETITLE = 'Dosya Ba�l���';
    var $_PHPSHOP_FILES_LIST_FILETYPE = 'Dosya T�r�';
    var $_PHPSHOP_FILES_LIST_EDITFILE = 'Dosya Gir�i D�zenle';
    var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Resim';
    var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'K���lt�lm�� Resim';
    
    
    /* FILE FORM */
    var $_PHPSHOP_FILES_FORM = 'Dosya y�kleme';
    var $_PHPSHOP_FILES_FORM_CURRENT_FILE = '�u Anki Dosya';
    var $_PHPSHOP_FILES_FORM_FILE = 'Dosya';
    var $_PHPSHOP_FILES_FORM_IMAGE = 'Resim';
    var $_PHPSHOP_FILES_FORM_UPLOAD_TO = '�uraya y�kle';
    var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'Varsay�lan Resim Yolu';
    var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Dosya yerini belirt';
    var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Dosya �ndirme Yolu';
    var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'K���k resimleri otomatik olu�tur?';
    var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Dosya yay�nlans�n m�?';
    var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Dosya Ba�l���';
    var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Dosya tan�m�';
    var $_PHPSHOP_FILES_FORM_FILE_URL = 'Dosya linki';
    
    /* FILE & IMAGE PROCESSING */
    var $_PHPSHOP_FILES_PATH_ERROR = 'L�tfen do�ru yol belirtiniz!';
    var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'K���lt�lm�� resim olu�turuldu!';
    var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'K���lt�lm�� resim olu�turulamad�!';
    var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Dosya/Rsim Y�kleme Hatas�';
    
    var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Resim dosyas� silinemedi.';
    var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Resim dosyas� Silindi.';
    var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'K���lt�lm�� resim silinemedi (resim olmayabilir) : ';
    var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'K���lt�lm�� resim silindi.';
    var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Dosya silinemedi.';
    var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Dosya ba�ar� ile silindi.';
    
    var $_PHPSHOP_FILES_NOT_FOUND = '�zg�n�z, istenen dosya bulunamad�!';
    var $_PHPSHOP_IMAGE_NOT_FOUND = 'Resim bulunamad�!';
    
    /*#####################
    MODULE COUPON
    #####################*/
    
    var $_PHPSHOP_COUPON_MOD = 'Kupon';
    var $_PHPSHOP_COUPONS = 'Kuponlar';
    var $_PHPSHOP_COUPON_LIST = 'Kupon Listesi';
    var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Kupon �nceden �denmi�.';
    var $_PHPSHOP_COUPON_REDEEMED = 'Kupon �dendi! Te�ekk�r ederiz.';
    var $_PHPSHOP_COUPON_ENTER_HERE = 'Kupon kodunuz varsa, a�a��ya giriniz:';
    var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'G�nder';
    var $_PHPSHOP_COUPON_CODE_EXISTS = 'Bu kupon kodu var ,tekrar deneyin.';
    var $_PHPSHOP_COUPON_EDIT_HEADER = 'Kupon g�ncelle';
    var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'D�zenlemek i�in kupon kodunun �zerine t�klay�n, kupon kodunu silmek i�in, se�in ve silme tu�una bas�n:';
    var $_PHPSHOP_COUPON_CODE_HEADER = 'Kod';
    var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Y�zde veya Toplam';
    var $_PHPSHOP_COUPON_TYPE = 'Kupon Tipi';
    var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'E�er hediye kuponu indirim kuponu olarak kullan�l�rsa silinir. Kal�c� kuponu m��teri istedi�i zaman istedi�i gibi kullanabilir.';
    var $_PHPSHOP_COUPON_TYPE_GIFT = 'Hediye kuponu';    
    var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Kal�c� kupon';    
    var $_PHPSHOP_COUPON_VALUE_HEADER = 'De�eri';
    var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Kodu Sil';
    var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Bu kupon kodunu silmek istedi�inizden emin misiniz?';
    var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'T�m alanlar� giriniz.';
    var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'Kupon de�eri numara olmal�d�r.';
    var $_PHPSHOP_COUPON_NEW_HEADER = 'Yeni Kupon';
    var $_PHPSHOP_COUPON_COUPON_HEADER = 'Kupon Kodu';
    var $_PHPSHOP_COUPON_PERCENT = 'Y�zde';
    var $_PHPSHOP_COUPON_TOTAL = 'Toplam';
    var $_PHPSHOP_COUPON_VALUE = 'De�er';
    var $_PHPSHOP_COUPON_CODE_SAVED = 'Kupon kodu kaydedildi.';
    var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Kuponu kaydet';
    var $_PHPSHOP_COUPON_DISCOUNT = 'Kupon indirimi';
    var $_PHPSHOP_COUPON_CODE_INVALID = 'Kupon kodu bulunamad�,tekrar deneyiniz.';
    var $_PHPSHOP_COUPONS_ENABLE = 'Kupon kullan�m�n� aktif et';
    var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Kupon kullan�m�n� aktif ederseniz,m��terilerin kupon kodlar�n� kullanarak al��veri�lerinde kazan�l� olmalar�n� sa�layabilirsiniz .';
    
    /* Free Shipping */
    var $_PHPSHOP_FREE_SHIPPING = 'Bedava Nakliye';
    var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Bu sipari�te nakliye bedava!';
    var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Nakliye i�in asgari tutar';
    var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Tutar (Vergiler DAH�L!) Nakliye ��in Asgari
                                                (�rne�in: <strong>50</strong> M��teri 50\$ veya fazla al��veri� yapt���nda
                                                bedava nakliye anlam�na gelir .';
    var $_PHPSHOP_YOUR_STORE = 'Sizin Ma�azan�z';
    var $_PHPSHOP_CONTROL_PANEL = 'Kontrol Panel';
    
    /* Configuration Additions */
    var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF - Butonu';
    var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'PDF butonunu g�ster/gizle';
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Her sipari� i�in �atlar� kabul mecburiyeti olsun mu?';
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'E�er se�erseniz m��teri her sipari�i i�in servis �artlar�n� kabul etme mecburiyetinde olacak.';
    
    // We need this for eCheck.net Payments
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Banka hesap tipi';
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = '�ek';
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Ticari �ek';
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Birikim';
    
    var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Devirli �deme?';
    var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Devirli �deme yapmak istedi�inizi belirtin.';
    
    var $_PHPSHOP_INTERNAL_ERROR = '�stek yap�l�rken i� hata!';
    var $_PHPSHOP_PAYMENT_ERROR = '�deme yap�l�rken hata olu�tu!';
    var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = '�deme ba�ar� ile ger�ekle�tirildi!';
    
    /* UPS Shipping Module */
    var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS istenen nakliye oran�n� ger�ekle�tiremedi.';
    var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'G�ndelik Teslimat Garantisi';
    var $_PHPSHOP_UPS_PICKUP_METHOD = 'UPS Ta��ma methodu';
    var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Paketler UPS\'e nas�l verilecek?';
    var $_PHPSHOP_UPS_PACKAGE_TYPE = 'UPS Paketleme tipi?';
    var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Paketleme i�in varsay�lan t�r� se�iniz.';
    var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Bireysel teslimat?';
    var $_PHPSHOP_UPS_RESIDENTIAL = 'Bireysel (RES)';
    var $_PHPSHOP_UPS_COMMERCIAL    = 'Ticari Teslimat (COM)';
    var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Ticari teslimattan al�nt� (COM).';
    var $_PHPSHOP_UPS_HANDLING_FEE = 'Ta��ma �creti';
    var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Bu nakliye �e�idi i�in ta��ma �creti.';
    var $_PHPSHOP_UPS_TAX_CLASS = 'Vergi S�n�f�';
    var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Nakliye �creti vergisi i�in bu de�erleri kullan.';
    
    var $_PHPSHOP_ERROR_CODE = 'Hata Kodu';
    var $_PHPSHOP_ERROR_DESC = 'Hata Tan�m�';
    
    var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Muamele Anahtar� G�ster/De�i�tir';
    var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Muamele Anahtar� �ifresi G�ster/De�i�tir';
    var $_PHPSHOP_TYPE_PASSWORD = 'Kullan�c� �ifrenizi Giriniz';
    var $_PHPSHOP_CURRENT_PASSWORD = '�u Anki �ifre';
    var $_PHPSHOP_CURRENT_TRANSACTION_KEY = '�u Anki Muamele Anahtar�';
    var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'Muamele Anahtar� Ba�ar� ile de�i�tirildi.';
    var $_PHPSHOP_PAYMENT_CVV2 = '�stek/Al�m Kredi Kart� G�venlik Kodu (CVV2/CVC2/CID)';
    var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Ge�erli g�venlik de�erini kontrol edin. (CVV2/CVC2/CID)  (kredi kart�n�z�n arkas�ndaki 3,4 haneli rakam, amerikan expreess kartlar�n �n�nde)';
    var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'L�tfen Kredi kart�n�z�n Arkas�ndaki 3,4 haneli g�venlik de�erini giriniz (American Express kartlar�n �n�ndedir)';
    var $_PHPSHOP_CUSTOMER_CVV2_ERROR = '��lem yapabilmeniz i�in kodu girmeniz gerekmektedir.';
    var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'Dosya ismini giriniz';
    var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'NOT: Dosya ismini girebilirsiniz. <strong>Dosya ismini grerseniz, Hi�bir dosya y�klenmeyecek!!! FTP ile manual olarak y�klemeniz gerekecek!</strong>.';
    var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'Yada yeni dosya y�kleyin';
    var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Yerel dosyay� y�kleyebilirsiniz. Bu dosya satt���n�z �r�n olacak. Varolan dosya ile de�i�tirilecek.';
    var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'M��teri �nizleme sayfas�nda g�sterilecek b�l�m� doldurun.<br />mesala 24 saat 3,5 g�n , sipari�te';
    var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'Yada �r�n detaylar� sayfa�nda g�sterilecek resmi se�iniz.<br />Klas�rde bulunan resim <i>/components/com_phpshop/shop_image/availability</i><br />';
    var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Nitelik Listesi';
    var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Nitelik Liste Format� �rnekleri:</h4>
        <pre>Boyut,XL[+1.99],M,S[-2.99];Renk,K�rm�z�,Ye�il,Sar�,Y�ksekRenk[=24.00];veYak�nda,..,..</pre>
        <h4>�leri D�zey Nitelik D�zenlemesi:</h4>
        <pre>
        &#43; == Bu tutar� d�zenlenen �crete aktar.<br />
        &#45; == Bu tutar� d�zenlenen �cretten ��kar.<br />
        &#61; == Bu tutar� d�zenlenen �r�n �creti olarak ayarla.
      </pre>';
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = '�zel Nitelik Listesi';
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>�zel nitelik format� liste �rnekleri:</h4>
        <pre>�sim;Ekler;</strong>...</pre>';
        
    var $_PHPSHOP_MULTISELECT = '�oklu se�im: CTRL- tu�u ve mouse kullan�n';
        
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'eProcessingNetwork.com �demeyi aktif et?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'eProcessingNetwork.com phpShop ile kullan�m� kontrol et.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Test t�r� ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Test ederken \'evet se�iniz. Canl� muameleler i�in \'Hay�r\' se�iniz.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'eProcessingNetwork.com Kullan�c� kimli�i';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'Bu eProcessingNetwork.com kullan�c� kmili�idir';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'eProcessingNetwork.com mumamele anahtar�';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'Bu sizin eProcessingNetwork.com mumamele anahtar�n�z';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Belgeleme Tipi';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'Bu eProcessingNetwork.com tipi';

    var $_PHPSHOP_RELATED_PRODUCTS = 'Related Products';
    var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Bu listeyi kullanarak �r�n benzer �r�nleri olu�turabilirsiniz. Bir veya birden fazla �r�n se�in ve sonra <strong>benzer �r�nler</strong>.';
    
    var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Bu �r�n� alanlar bunlar�da ald�lar.';
    
    var $_PHPSHOP_IMAGE_ACTION = 'Resim Hareketi';
    var $_PHPSHOP_NONE = 'hi�biri';
    
    var $_PHPSHOP_ORDER_HISTORY = 'Sipari� Ge�mi�i';
    var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Yorum';
    var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Sipari�inize yorum';
    var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Bu yorumu kapsas�n m�?';
    var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Ekleme tarihi';
    var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'M��teri bilgilendirilsin mi?';
    var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Sipari� Durum De�i�ikli�i';
    
     /* USPS Shipping Module */
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = 'Usps nakliye kullan�c� ismi ';
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = 'USPS nakliye kullan�c� ismi';
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = 'USPS nakliye �ifresi';
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = 'USPS nakliye �ifresi';
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER = 'USPS nakliye serveri';
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP = 'USPS nakliye serveri';
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH = 'USPS nakliye yolu';
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP = 'USPS nakliye yolu';
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_CONTAINER = 'USPS nakliye konteyn�r�';
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_CONTAINER_TOOLTIP = 'USPS nakliye konteyn�r�';
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE = 'USPS Paket B�y�kl���';
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP = 'USPS Paket B�y�kl���';
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGEID = 'Usps paket kimlik bilgisi (0 olmal�d�r , �o�ul paketleri desteklemez) ';
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGEID_TOOLTIP = 'Usps paket kimlik bilgisi (0 olmal�d�r ,�o�ul paketleri desteklemez) ';
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIPSERVICE = 'USPS Nakliye Tipi (Express,First Class,Priority,Parcel,BPM,Library,Media)';
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIPSERVICE_TOOLTIP = 'USPS Nakliye Tipi (Express,First Class,Priority,Parcel,BPM,Library,Media)';
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_HANDLING_FEE = 'Ele alan �cret';
    var $_PHPSHOP_USPS_HANDLING_FEE = 'Sizin nakliye y�nteminizdeki �cret tutar�';
    var $_PHPSHOP_USPS_HANDLING_FEE_TOOLTIP = 'Sizin nakliye y�nteminizdeki �cret tutar�';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE = 'Usps uluslararas� sevkiyatlar i�in al�nan �cret';
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP = 'Usps uluslararas� sevkiyatlar i�in al�nan �cret';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE = 'Uluslararas� her sterlininiz usps sevkiyatlar i�in de�erlendirir';
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP = 'Uluslararas� her sterlininiz usps sevkiyatlar i�in de�erlendirir';
    var $_PHPSHOP_USPS_RESPONSE_ERROR = 'Usps nakliye oran iste�ini i�lemden ge�iremedi ';
    
    /** Changed Product Type - Begin*/
    /*** Product Type ***/
    var $_PHPSHOP_PARAMETERS_LBL = 'Parametreler';
    var $_PHPSHOP_PRODUCT_TYPE_LBL = '�r�n T�r�';
    var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = '�r�n T�r� Listesi';
    var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = '�r�n T�r� Ekle/D�zenle';
    // Product - Product Product Type list
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = '�r�n T�r� Listesi';
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = '�r�n T�rlerini Listele';
    // Product - Product Product Type form
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = '�r�n �e�idini buna ekle ';
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = '�r�n �e�idi Ekle';
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = '�r�n �e�idi';
    // Product - Product Type form
    var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = '�r�n �e�idi Ad�';
    var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = '�r�n �e�idi Tan�mlamas�';
    var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Parametreler';
    var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = '�r�n �e�idi Bilgisi';
    var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Yay�nla?';
    var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = '�r�n �e�idi Arama Sayfas�';
    var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = '�r�n �e�idi �ng�sterim Sayfas�';
    // Product - Product Type Parameter list
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = '�r�n� �e�idi Parametreleri';
    // Product - Product Type Parameter form
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Parametre Bilgisi';
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = '�r�n �e�idi Bulunamd�!';
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Parametre �smi';
    VAR $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Bu kolon ismi olacak. Bo�luksuz ve tek olmal�d�r.<BR>Mesela: ana_materyal';
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Parametre Etiketi';
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Parametre Tan�mlamas�';
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Parametre �e�idi';
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Integer Say�';
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Yaz�';
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'K�sa Yaz�';
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Virg�ll� Say�';
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Karakter';
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Tarih Zaman';
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Tarih';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'YYYY-AA-GG';
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Saat';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'SS:DD:SS';
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Kesme Sat�r�';
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = '�oklu De�erler';
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'M�mk�n De�erler';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'M�mk�n de�erleri �oklu der olarak g�ster?';
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>M�mk�n de�erler ayarland�ysa,parametreler sadece kendi de�erlerini alabilirler. M�mk�n de�erler i�in �rnek:</strong><BR><span class=\'sectionname\'>�elik;Ah�ap;Plastik;...</span>';
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Varsay�lan De�er';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'Varsay�lan parametreler i�in bu format� kullan:<ul><li>Tarih: YYYY-AA-GG</li><li>Saat: SS:DD:SS</li><li>Tarih & Saat: YYYY-AA-GG SS:DD:SS</li></ul>';
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Unit';
    
	/************************* FrontEnd ***************************/
	/** shop.parameter_search.php */
	var $_PHPSHOP_PARAMETER_SEARCH = 'Parametreye G�re Ayr�nt�l� Arama';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Parametre Arama';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = '�r�nleri Teknik Parametrelere G�re mi Aramak �stiyorsunuz?<BR>Herhangi bir haz�r formu kullanabilirsiniz:';
// 	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Sorgunuza sonu� bulunamad�.';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = '�zg�n�m. Arama i�in kategori bulunamad�.';
	/** shop.parameter_search_form.php */
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = '�zg�n�m. Bu isimde yay�nlanan bir �r�n �e�idi yok.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'benzer';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'benzemez';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Tam-yaz� arama';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'T�m� se�ili';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Hi�biri se�ilmemi�';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Reset Form';	
	/** shop.browse.php */
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Kategoride Ara';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Parametreleri De�i�tir';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Azalan D�zende';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Artan D�zende';
	/** shop.product.detail */
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Kategori Parametreleri';
	/** De�i�tirilmi� �r�n - son*/
    // �ndirimin kar��t�!
    var $_PHPSHOP_FEE = '�cret';
    
    var $_PHPSHOP_PRODUCT_CLONE = '�r�n Klonla';
    var $_PHPSHOP_CSV_SETTINGS = 'Ayarlar';
    var $_PHPSHOP_CSV_DELIMITER = 'Ayra�';
    var $_PHPSHOP_CSV_ENCLOSURE = '�it karakter';
    var $_PHPSHOP_CSV_UPLOAD_FILE = 'CSV dosyas� y�kle';
    var $_PHPSHOP_CSV_SUBMIT_FILE = 'CSV dosyas�na g�nder';
    var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Klas�rden y�kle';
    var $_PHPSHOP_CSV_FROM_SERVER = 'Serverdaki CSV dosyas�ndan y�kle';
    var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'CSV dosyas�na ver';
    var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Alan d�zeni tipini se�iniz';
    var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Varsay�lan D�zen';
    var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'Benim �zel d�zenim';
    var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'T�m �r�nleri CSV dosyas�na ver';
    var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'CSV Al/Ver/D�zenle';
    var $_PHPSHOP_CSV_SAVE_CHANGES = 'De�i�iklikleri Kaydet';
    var $_PHPSHOP_CSV_FIELD_NAME = 'Alan Ad�';
    var $_PHPSHOP_CSV_DEFAULT_VALUE = 'varsay�lan de�er';
    var $_PHPSHOP_CSV_FIELD_ORDERING = 'Alan D�zeni';
    var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Alan Gerekli mi?';
    var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Al/Ver';
    var $_PHPSHOP_CSV_NEW_FIELD = 'Yeni Alan Ekle';
    var $_PHPSHOP_CSV_DOCUMENTATION = 'D�k�manlar';
    var $_PHPSHOP_PRODUCT_NOT_FOUND = '�zg�n�z, istedi�iniz �r�n bulunamad�!';
    var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Stokta bulunmayan �r�nleri g�ster';
    var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Aktif edildi�inde, stokta bulunmayan �r�nler g�sterilecektir. Aksi halde �r�nler gizli olacakt�r.';
	
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
        
}
class phpShopLanguage extends vmLanguage { }

/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>