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
	var $_PHPSHOP_WAITING_LIST_MESSAGE = '�r�n stoklarda bulundu�und haberdar olmak i�in l�tfen a�a��ya e-mail adresinizi giriniz. 
                                        E-mail adresinizi hi�kimseyle hi�bir �ekilde payla�mayacak,satmayacak,kiralamayaca��z.
                                        Sadece �r�n stoklara geldi�inde sizi haberdar edece�iz.<br /><br />Te�ekk�r ederiz!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Bekledi�iniz i�in te�ekk�r ederiz! <br />Stoklarla ilgili en ayak�n zamanda sizi haberdar edece�iz.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Beni haberdar et!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Printer ��kt�s�';
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
	var $_PHPSHOP_ADVANCED_SEARCH = 'Kapsaml� Arama';
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
	var $_PHPSHOP_CUSTOMER_RATING = 'Averaj m��teri reytingi';
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
	var $_PHPSHOP_COMMENT = 'Yorum';
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
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Parabirimi g�sterim �ekli';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Parabirimi sembol�';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Buradan HTML giri�i yapabilirsiniz (�rne�in &euro;,&pound;,&yen;,...)';
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
	var $_PHPSHOP_MORE_IMAGES = 'Daha Fazla Resim G�ster';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Etki resimler';
	var $_PHPSHOP_BACK_TO_DETAILS = '�r�n Detaylar�na D�n';
	var $_PHPSHOP_FILEMANAGER = 'Dosya Y�neticisi';
	var $_PHPSHOP_FILEMANAGER_LIST = 'Dosya Y�neticisi: �r�n Listesi';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Dosya/Resim Ekle';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Atanan resimler';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'indirilebilir mi?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Atanan Dosyalar';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Yay�nla?';
	var $_PHPSHOP_FILES_LIST = 'Dosya Y�neticisi::Resim/Dosya Listesi';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Dosya �smi';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'Dosya Ba�l���';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Dosya T�r�';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Dosya Gir�i D�zenle';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Resim';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'K���lt�lm�� Resim';
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
	var $_PHPSHOP_FREE_SHIPPING = 'Bedava Nakliye';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Bu sipari�te nakliye bedava!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Nakliye i�in asgari tutar';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Tutar (Vergiler DAH�L!) Nakliye ��in Asgari
                                                (�rne�in: <strong>50</strong> M��teri 50\$ veya fazla al��veri� yapt���nda
                                                bedava nakliye anlam�na gelir .';
	var $_PHPSHOP_YOUR_STORE = 'Sizin Ma�azan�z';
	var $_PHPSHOP_CONTROL_PANEL = 'Kontrol Panel';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF - Butonu';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'PDF butonunu g�ster/gizle';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Her sipari� i�in �atlar� kabul mecburiyeti olsun mu?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'E�er se�erseniz m��teri her sipari�i i�in servis �artlar�n� kabul etme mecburiyetinde olacak.';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Banka hesap tipi';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = '�ek';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Ticari �ek';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Birikim';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Devirli �deme?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Devirli �deme yapmak istedi�inizi belirtin.';
	var $_PHPSHOP_INTERNAL_ERROR = '�stek yap�l�rken i� hata!';
	var $_PHPSHOP_PAYMENT_ERROR = '�deme yap�l�rken hata olu�tu!';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = '�deme ba�ar� ile ger�ekle�tirildi!';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS istenen nakliye oran�n� ger�ekle�tiremedi.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'G�ndelik Teslimat Garantisi';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'UPS Ta��ma methodu';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Paketler UPS\'e nas�l verilecek?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'UPS Paketleme tipi?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Paketleme i�in varsay�lan t�r� se�iniz.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Bireysel teslimat?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Bireysel (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Ticari Teslimat (COM)';
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
	var $_PHPSHOP_USPS_RESPONSE_ERROR = 'Usps nakliye oran iste�ini i�lemden ge�iremedi ';
	var $_PHPSHOP_PARAMETERS_LBL = 'Parametreler';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = '�r�n T�r�';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = '�r�n T�r� Listesi';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = '�r�n T�r� Ekle/D�zenle';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = '�r�n T�r� Listesi';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = '�r�n T�rlerini Listele';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = '�r�n �e�idini buna ekle ';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = '�r�n �e�idi Ekle';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = '�r�n �e�idi';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = '�r�n �e�idi Ad�';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = '�r�n �e�idi Tan�mlamas�';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Parametreler';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = '�r�n �e�idi Bilgisi';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Yay�nla?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = '�r�n �e�idi Arama Sayfas�';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = '�r�n �e�idi �ng�sterim Sayfas�';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = '�r�n� �e�idi Parametreleri';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Parametre Bilgisi';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = '�r�n �e�idi Bulunamd�!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Parametre �smi';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Bu kolon ismi olacak. Bo�luksuz ve tek olmal�d�r.<BR>Mesela: ana_materyal';
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
	var $_PHPSHOP_PARAMETER_SEARCH = 'Parametreye G�re Ayr�nt�l� Arama';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Parametre Arama';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = '�r�nleri Teknik Parametrelere G�re mi Aramak �stiyorsunuz?<BR>Herhangi bir haz�r formu kullanabilirsiniz:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = '�zg�n�m. Arama i�in kategori bulunamad�.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = '�zg�n�m. Bu isimde yay�nlanan bir �r�n �e�idi yok.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'benzer';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'benzemez';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Tam-yaz� arama';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'T�m� se�ili';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Hi�biri se�ilmemi�';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Reset Form';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Kategoride Ara';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Parametreleri De�i�tir';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Azalan D�zende';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Artan D�zende';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Kategori Parametreleri';
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
        
}
class phpShopLanguage extends vmLanguage { }

/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>