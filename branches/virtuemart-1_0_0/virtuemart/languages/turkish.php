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
	var $_PHPSHOP_CATEGORY = 'Kategori';
	var $_PHPSHOP_CATEGORIES = 'Ürün Kategorileri';
	var $_PHPSHOP_SELECT_CATEGORY = 'Select a Category:';
	var $_PHPSHOP_ADMIN = 'Yönetim';
	var $_PHPSHOP_PRODUCT = 'ürün';
	var $_PHPSHOP_LIST = 'liste';
	var $_PHPSHOP_ALL = 'tümü';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'List All Products';
	var $_PHPSHOP_VIEW = 'incele';
	var $_PHPSHOP_SHOW = 'göster';
	var $_PHPSHOP_ADD = 'ekle';
	var $_PHPSHOP_UPDATE = 'güncelle';
	var $_PHPSHOP_DELETE = 'sil';
	var $_PHPSHOP_SELECT = 'seç';
	var $_PHPSHOP_SUBMIT = 'Submit';
	var $_PHPSHOP_RANDOM = 'Ürünler';
	var $_PHPSHOP_LATEST = 'Son Ürünler';
	var $_PHPSHOP_HOME_TITLE = 'Anasayfa';
	var $_PHPSHOP_CART_TITLE = 'Alýþveriþim';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Kasa';
	var $_PHPSHOP_LOGIN_TITLE = 'Giriþ';
	var $_PHPSHOP_LOGOUT_TITLE = 'Çýkýþ';
	var $_PHPSHOP_BROWSE_TITLE = 'Göster';
	var $_PHPSHOP_SEARCH_TITLE = 'Arama';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Hesap Bakýmý';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Gezinirlik';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Bölüm';
	var $_PHPSHOP_INFO = 'Bilgi';
	var $_PHPSHOP_BROWSE_LBL = 'Ürün Listeleme';
	var $_PHPSHOP_PRODUCTS_LBL = 'Ürün';
	var $_PHPSHOP_PRODUCT_LBL = 'Ürün';
	var $_PHPSHOP_SEARCH_LBL = 'Arama';
	var $_PHPSHOP_FLYPAGE_LBL = 'Ürün Detayý';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Product Search';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Ürün Adý';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Ürün Kategorisi';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Ürün Açýklamasý';
	var $_PHPSHOP_CART_SHOW = 'Alýþveriþim';
	var $_PHPSHOP_CART_ADD_TO = 'Sepete Ekle';
	var $_PHPSHOP_CART_NAME = 'Adý';
	var $_PHPSHOP_CART_SKU = 'Stok';
	var $_PHPSHOP_CART_PRICE = 'Fiyat';
	var $_PHPSHOP_CART_QUANTITY = 'Miktar';
	var $_PHPSHOP_CART_SUBTOTAL = 'Ara Toplam';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Yeni ekle';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Nakliye Adresi';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Arama sonucunda 0 kayýt bulundu.<BR>';
	var $_PHPSHOP_PRICE_LABEL = 'Fiyat: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Alýþveriþime Ekle';
	var $_PHPSHOP_NO_CUSTOMER = 'Henüz kayýtlý kullnýcý deðilsiniz. Lütfen Fatura bilgilerinizi giriniz.';
	var $_PHPSHOP_DELETE_MSG = 'Bu kaydý silmek istediðinizden eminmisiniz?';
	var $_PHPSHOP_THANKYOU = 'Sipariþiniz için teþekkürler.';
	var $_PHPSHOP_NOT_SHIPPED = 'Henüz gönderilmedi';
	var $_PHPSHOP_EMAIL_SENDTO = 'Teyit iletisinin gönderildiði e-posta adresi';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Üzgünüz, com_phpshop kullanýcý listesine ekleyebileceðiniz MOS - kullanýcýsý yoktur.';
	var $_PHPSHOP_ERROR = 'HATA';
	var $_PHPSHOP_MOD_NOT_REG = 'Modül kaydedilmemiþtir.';
	var $_PHPSHOP_MOD_ISNO_REG = ' Geçerli bir phpShop modülü deðil.';
	var $_PHPSHOP_MOD_NO_AUTH = 'Ýstenen modüle giriþ izniniz yok.';
	var $_PHPSHOP_PAGE_404_1 = 'Sayfa bulunamadý';
	var $_PHPSHOP_PAGE_404_2 = 'Verilen dosya bulunamadý. Bulunamayan dosya:';
	var $_PHPSHOP_PAGE_403 = 'Yetersiz giriþ hakký';
	var $_PHPSHOP_FUNC_NO_EXEC = 'Çalýþtýrma yetkiniz yok ';
	var $_PHPSHOP_FUNC_NOT_REG = 'Fonksiyon kayýtlý deðildir.';
	var $_PHPSHOP_FUNC_ISNO_REG = ' Geçerli bir phpShop fonksiyonu deðildir.';
	var $_PHPSHOP_ADMIN_MOD = 'Yönetim';
	var $_PHPSHOP_USER_LIST_MNU = 'Kullanýcýlarý Listele';
	var $_PHPSHOP_USER_LIST_LBL = 'Kullanýcý Listesi';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Kullanýcý';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Tam Adý';
	var $_PHPSHOP_USER_LIST_GROUP = 'Grubu';
	var $_PHPSHOP_USER_FORM_MNU = 'Kullanýcý ekle';
	var $_PHPSHOP_USER_FORM_LBL = 'Kullanýcý Bilgisi Ekleme/Günleme';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Fatura Bilgileri';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Nakliye Adresi';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Adres Ekleme';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'No shipping addresses.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Adres Rumuzu';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Adý';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Soyadý';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Ýkinci Adý';
	var $_PHPSHOP_USER_FORM_TITLE = 'Ünvaný';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Kullanýcý Adý';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Parola';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Parola Tekrarý';
	var $_PHPSHOP_USER_FORM_PERMS = 'Yetkileri';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Customer Number / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Firma Adý';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Adres 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Adres 2';
	var $_PHPSHOP_USER_FORM_CITY = 'Þehir';
	var $_PHPSHOP_USER_FORM_STATE = 'Ýlçe/Semt';
	var $_PHPSHOP_USER_FORM_ZIP = 'Posta Kodu';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Ülke';
	var $_PHPSHOP_USER_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Mobile Phone';
	var $_PHPSHOP_USER_FORM_FAX = 'Faks';
	var $_PHPSHOP_USER_FORM_EMAIL = 'E-posta';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Modül Listeleme';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Modül Listesi';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Modül Adý';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Modül Yetkileri';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Fonksiyonlar';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Sipariþ Listeleme';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Modül Ekle';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Modül Bilgisi';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Modül etiketi (Üst Menü için)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Modül Adý';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Modül Yetkileri';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Modül Baþlýðý';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Modül Dipnotu';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Modü Amir menüsünde gösterilsin mi';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Sipariþ Göster';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Modül Tanýmý';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'Dil Kodu';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Dil Dosyasý';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Fonksiyon Listeleme';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Fonksiyon Listesi';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Fonksiyon Adý';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Sýnýf Adý';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Sýnýf Metodu';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Yetkiler';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Fonksiyon Ekleme';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Fonksiyon Bilgisi';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Fonksiyon Adý';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Sýnýf Adý';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Sýnýf Metodu';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Fonksiyon Yetkisi';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Fonksiyon Tanýmý';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Kur Listeleme';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Kur Listesi';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'Kur Ekle';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Kur Adý';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'Kur Kodu';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Ülke Listeleme';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Ülke Listesi';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Ülke Ekle';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Ülke Adý';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Ülke Kodu(3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Ülke Kodu(2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'List State';
	var $_PHPSHOP_STATE_LIST_LBL = 'State List for: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Add/Update a State';
	var $_PHPSHOP_STATE_LIST_NAME = 'State Name';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'State Code (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'State Code (2)';
	var $_PHPSHOP_ADDRESS = 'Adresi';
	var $_PHPSHOP_CONTINUE = 'Devam';
	var $_PHPSHOP_EMPTY_CART = 'Alýþveriþ sepetiniz boþ.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Ping InterShipper Sunucusu';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'InterShipper-Sunucu Ping Ýsteði';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'InterShipper Ping Hatasý';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'InterShipper Ping Baþarýlý';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Taþýyýcý';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Yanýt (Response)<BR>Zamaný';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'San.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Nakliye Metodu Listeleme';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Aktif Nakliye Metodu';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Nakliye Metodlarý';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Aktif';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Handling Charge';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Ulaþtýrma zamaný';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'düz deðer';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'Yüzde';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'gün';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Aðýr Yük';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Nakliye Metodu Ayarlarý';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Nakliye Metodu Ekleme';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Nakliye Metodu Ayarý';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Yenileme';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Nakliye Metodu';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Aktifleþtir';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Handling Charge';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Lead Time';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'düz oran';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'yüzde';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'gün';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Aðýr Yük';
	var $_PHPSHOP_ORDER_MOD = 'Sipariþ';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Sipariþ Teyidi';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Sipariþ Ýptali';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Sipariþ Yazdýrma';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Sipariþ Silme';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Sipariþleri Listele';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Sipariþ Listesi';
	var $_PHPSHOP_ORDER_LIST_ID = 'Sipariþ No';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Sipariþ Tarihi';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Son Düzenleme';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Durum';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'Ara Toplam';
	var $_PHPSHOP_ORDER_ITEM = 'Sipariþlerim';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Alýnan Sipariþ';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Sipariþ No';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Sipariþ Tarihi';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Sipariþ Durumu';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Müþteri Bilgisi';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Fatura Bilgisi';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Nakliye Bilgisi';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Fatura Adresi';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Nakliye Adresi';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Ýsim';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Firma';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Adres 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Adres 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Þehir';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Ýlçe/Semt';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'Posta Kodu';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Ülke';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Tel.';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Faks';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'Eposta';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Sipariþlerim';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Miktar';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Mik.';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'Stok';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Fiyat';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Toplam';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'Ara Toplam';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'Toplam Vergi';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Nakliye';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Nakliye Vergisi';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Ödeme Yöntemi';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Hesap Adý';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Hesap  No';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Geçerlilik Tarihi';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Ödeme Logu';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Nakliye Bilgisi';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Ödeme Bilgisi';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Taþýyýcý';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Nakliye Modu';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Sevk Tarihi';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Nakliye Fiyatý';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Sipariþ Durum Tipi Listeleme';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Sipariþ Durum Tipi Ekleme';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Sipariþ Durum Kodu';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Sipariþ Durum  Adý';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Sipariþ Durumu';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Sipariþ Durum Kodu';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Sipariþ Durum Adý';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Sipariþ Listeleme';
	var $_PHPSHOP_PRODUCT_MOD = 'Ürünler';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Mevcut Ürün';
	var $_PHPSHOP_CURRENT_ITEM = 'Mevcut Öge';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Stokta Ürün';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Stok Görüntüle';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Fiyat';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Adet';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Aðýrlýk';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Ürün Listeleme';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Ürün Listesi';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Ürün  Adý';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'Stok';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Yayýnla';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Search Product';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'modyfied';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'with price modyfied';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'without price';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'After';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Before';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Ürün Ekle';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Bu ürünü günle';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Maðazadaki ürünleri Önizleme';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Öge Ekle';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Baþka Öge Ekle';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Yeni Ürün';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Ürün Günleme';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Ürün Bilgisi';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Ürün Durumu';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Ürün Boyutlarý ve Aðýrlýðý';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Ürün Resimleri';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Yeni Ürün';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Ürün Günleme';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Öge Bilgisi';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Öge Durumu';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Öge Boyutlarý ve Aðýrlýðý';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Öge Resimleri';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'BAðlý ürüne geri dön';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'To update actual image, type in path to new image.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Mevcut resmi silmek için ';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Ürün ögeleri';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Öge Özellikleri';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Bu ürün ve ürüne baðlý ögeleri silmek istediðinizden eminmisiniz?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Bu ögeyi silmek istediðinizden eminmisiniz?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Satýcý';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Üreticiler';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'Stok';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Adý';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Kategori';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Bay Fiyatý';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Product Price (Net)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Flypage Description';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Kýsa Tanýmlama';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'Stokta';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'Sipariþ';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Tedarik Tarihi';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'On Special';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Ýndirim Tipi';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Yayýnlansýn mý?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Uzunluk';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Geniþlik';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Yükseklik';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Ölçü Birimi';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Aðýrlýk';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Ölçü Birimi';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Küçük resim';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Orijinal Resim';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'pounds';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'inches';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Unit';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'piece';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Units in Packaging';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Here you can fill in a number unit in packaging. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Units in Box';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Here you can fill in a number unit in box. (max. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Ürün Ekleme Sonuçlarý';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Ürün Günleme Sonuçlarý';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Öge Ekleme Sonuçlarý';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Öge günleme sonuçlarý';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'CSV yükleme kullan';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Ürün Dizinleri';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Kategori Listele';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Kategori  Aðacý';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Kategori Ekleme';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Kategori Bilgisi';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Kategori Adý';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Baðlý';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Kategori Tanýmý';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Yayýnlansýn mý?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Kategori Flypage';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Nitelik Listeleme';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Nitelik Listesi';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Nitelik Adý';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Sipariþ Liteleme';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Nitelik Ekle';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Nitelik Formu';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Ürün için Yeni nitelik';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Ürün için nitelik günleme';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Öge için Yeni nitelik';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Öge için nitelik günleme';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Öge Adý';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Sipariþ Liteleme';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Kategori Listeleme';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Fiyat Aðacý';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'FÝyat';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Grup Adý';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Fiyat';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Kur';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Fiyat Ekleme';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Fiyat Bilgisi';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Ürün için Yeni Fiyat gir';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Ürün fiyatý günle';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Öge için Yeni Fiyat gir';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Öge için Fiyat Günle';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Fiyat';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Kur';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Müþteri Grubu';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Temel Rapor';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Özel Ürün Listeleme';
	var $_PHPSHOP_RB_SALE_TITLE = 'Satýþ Raporlama';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Satýþ Faaliyetleri Ýzleme';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Aralýk Ayarý';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Aylýk';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Haftalýk';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Günlük';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Bu Ay';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'Son Ay';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'Son 60 gün';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'Son 90 gün';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Baþlama:';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Bitirme:';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Seçili deðeri göster';
	var $_PHPSHOP_RB_REPORT_FOR = 'Raporlama:';
	var $_PHPSHOP_RB_DATE = 'Tarih';
	var $_PHPSHOP_RB_ORDERS = 'Sipariþler';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Toplam Satýþlar (Adet)';
	var $_PHPSHOP_RB_REVENUE = 'Gelir';
	var $_PHPSHOP_RB_PRODLIST = 'Ürün Listeleme';
	var $_PHPSHOP_SHOP_MOD = 'Maðaza';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Küçük Resim';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Fiyat';
	var $_PHPSHOP_ORDER_STATUS_P = 'Bekliyor';
	var $_PHPSHOP_ORDER_STATUS_C = 'Teyit Edildi';
	var $_PHPSHOP_ORDER_STATUS_X = 'Ýptal Edildi';
	var $_PHPSHOP_ORDER_BUTTON = 'Sipariþ';
	var $_PHPSHOP_SHOPPER_MOD = 'Maðaza Sahibi';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Maðaza Sahiplerini Listele';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Maðazacýlar Listesi';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Kullanýcý Adý';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Tam Ýsmi';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Grubu';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Maðaza Sahibi Ekle';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Sahip Bilgisi';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Fatura Bilgisi';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Bilgi';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Nakliye Bilgisi';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Adres Ekleme';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Adres Rumuzu';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Kullanýcý Adý';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Adý';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Soyadý';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Ýkinci Adý';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Ünvaný';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Alýþveriþ Yapan';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Parolasý';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Parola Teyidi';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Müþteri Grubu';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Firma Adý';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Adres 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Adres 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Þehir';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Ýlçe/Semt';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'Posta Kodu';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Ülke';
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
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Müþteri Grubu Listeleme';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Müþteri Grubu Listesi';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Grup Adý';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Grup Açýklamasý';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Maðaza Sahibi Grubu Formu';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Maðaza Sahibi Grubu Ekleme';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Grup Adý';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Grup Açýklamasý';
	var $_PHPSHOP_STORE_MOD = 'Maðazam';
	var $_PHPSHOP_STORE_FORM_MNU = 'Maðaza Düzenleme';
	var $_PHPSHOP_STORE_FORM_LBL = 'Maðaza Bilgisi';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Ýletiþim Bilgisi';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Tam Resim';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Resim Yükle';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Maðaza Adý';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Maðaza Firma Adý';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Adres 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Adres 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'Þehir';
	var $_PHPSHOP_STORE_FORM_STATE = 'Ýlçe/Semt';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Ülke';
	var $_PHPSHOP_STORE_FORM_ZIP = 'Posta Kodu';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Kur';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Maðaza Kategorisi';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Soyadý';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Adý';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Ýkinci Adý';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Ünvaný';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'TEl 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'TEl 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Faks';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'E-posta';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Resim Yolu';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Açýklamalar';
	var $_PHPSHOP_PAYMENT = 'Ödeme';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Ödeme Yöntemlerini Listeleme';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Ödeme Yöntemi Listesi';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Adý';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Kodu';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Ýndirim';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Maðazacý Grubu';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Ödeme Yöntemi Tipi';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Ödeme Yöntemi Ekle';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Ödeme Yöntemi Formu';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Ödeme Form Adý';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Alýcý Grubu';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Ýndirim';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Kod';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Sipariþ Listeleme';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Ödeme Yöntemi Tipi';
	var $_PHPSHOP_TAX_MOD = 'Vergi';
	var $_PHPSHOP_TAX_RATE = 'Vergi Oranlarý';
	var $_PHPSHOP_TAX_LIST_MNU = 'Vergi Oranlarý Listeleme';
	var $_PHPSHOP_TAX_LIST_LBL = 'Vergi Oranlarý Listesi';
	var $_PHPSHOP_TAX_LIST_STATE = 'Cergi Dairesi';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Vergi Ülkesi';
	var $_PHPSHOP_TAX_LIST_RATE = 'Vergi Oraný';
	var $_PHPSHOP_TAX_FORM_MNU = 'Vergi Oraný Ekleme';
	var $_PHPSHOP_TAX_FORM_LBL = 'Vergi Bilgisi Ekleme';
	var $_PHPSHOP_TAX_FORM_STATE = 'Vergi Dairesi Ekleme';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Vergi Ülkesi';
	var $_PHPSHOP_TAX_FORM_RATE = 'Vergi Oraný';
	var $_PHPSHOP_VENDOR_MOD = 'Satýcý';
	var $_PHPSHOP_VENDOR_ADMIN = 'Satýcýlar';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Satýcýlarý Listeleme';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Satýcý Listesi';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Satucu Adý';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Yönetici';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Satýcý Ekleme';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Bilgi Ekleme';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Satýcý Bilgisi';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Ýletiþim Bilgisi';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Büyük Resim';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Resim Yükleme';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Satýcý Maðaza Adý';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Satucu Þirket Adý';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Adres 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Adres 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Þehir';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Ýlçe/Semt';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Ülke';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'Posta Kodu';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Telefon';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Kur';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Satýcý Kategorisi';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Soyadý';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Adý';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Ýkinci Adý';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Ünvan';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Tel 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Tel 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Faks';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'E-posta';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Resim Yolu';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Açýklama';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Satýcý Kategorileri';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Satýcý Kategori Listesi';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Kategori Adý';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Kategori Açýklamasý';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Satýcýlar';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Satýcý Kategori Ekleme';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Satýcý Kategori Formu';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Kategori Bilgisi';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Kategori Adý';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Kategori Açýklamasý';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Üretici';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Üreticiler';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Üreticileri Listeleme';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Üretici Listesi';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Üretici Adý';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Yönetim';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'Üretici Ekle';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Bilgi Ekle';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Üretici Bilgisi';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Üretici  Adý';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Üretici Grubu';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'E-posta';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'Üretici Web sayfasýna baðlantý (URL)';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Tanýmlama';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Üretici Gruplarýný Listele';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Üretici Grubu Listesi';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Grup Adý';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Grup Açýklamasý';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Üreticiler';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Üretici Grubu Ekle';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Üretici Grup Formu';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Grup Bilgisi';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Grup Adý';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Grup Açýklamasý';
	var $_PHPSHOP_HELP_MOD = 'Yardým';
	var $_PHPSHOP_CART_ACTION = 'Eylemler';
	var $_PHPSHOP_CART_UPDATE = 'Güleme';
	var $_PHPSHOP_CART_DELETE = 'Sil';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Fiyat';
	var $_PHPSHOP_PRODUCT_CALL = 'Fiyatlar için arayabilirsiniz.';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Önceki';
	var $_PHPSHOP_PRODUCT_NEXT = 'SONRAKÝ';
	var $_PHPSHOP_CART_TAX = 'Vergi';
	var $_PHPSHOP_CART_SHIPPING = 'Nakliye';
	var $_PHPSHOP_CART_TOTAL = 'Toplam';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Sonraki';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'KAYIT';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Ödeme Bilgisi';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Firma';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Ýsim';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Adres';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Telefon';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Faks';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'E-posta';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Nakliye Bilgisi';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Firma';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Ýsim';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Adres';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Tel.';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Faks';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Ödeme Bilgisi';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Kart Sahibi';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Ödeme Yöntemi';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Kredi Kart No';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Geçerlilik Tarihi';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Sipariþ Bitirme';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'Kredi Kartý ile Ödeme seçildiðinde istenen bilgi';
	var $_PHPSHOP_ZONE_MOD = 'Bölgesel Nakliye';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Bölge Listele';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Bölge Ekle';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Bölgeye Yönlendirme';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Ülke';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Mevcut Bölge';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Bölgeye Yönlendir';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Günle';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Bölgelere Yönlendir';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Bölge Adý';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Bölge Tanýmý';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Öge baþýna Bölge Maliyeti';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Bölge Maliyet Limiti';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Bölge Listesi';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Bölge Adý';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Bölge Tanýmý';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Öge Baþýna Bölge Maliyeti';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Bölge Maliyet Limiti';
	var $_PHPSHOP_LOGIN_FIRST = 'Lütfen, oturum açýn (login) ya da öncelikle sitemize kayýt olun.(<br>Teþekkürler';
	var $_PHPSHOP_STORE_FORM_TOS = 'Hzmet Koþullarý';
	var $_PHPSHOP_AGREE_TO_TOS = 'Lütfen, öncelikle Hizmet Koþullarýmýzý kabul edin.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Hizmet Koþullarýný kabul ediyorum';
	var $_PHPSHOP_LEAVE_BLANK = '(BOÞLUK býrakýn eðer <br />özel bir Php dosyasý yoksa!)';
	var $_PHPSHOP_RETURN_LOGIN = 'Sitemiz üyesi iseniz, Lütfen oturum açýn (Log In)';
	var $_PHPSHOP_NEW_CUSTOMER = 'Yeni iseniz? Lütfen Ödeme Bilginizi girin';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Müþteri Hesabý:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Sipariþ Bilgisi';
	var $_PHPSHOP_ACC_UPD_BILL = 'Þimdi, ödeme bilgilerinizi güncelleyebilirsiniz.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Þimdi, nakliye adresi ekleyebilir ya da mevcut adresinizi güncelleyebilirsiniz.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Hesap Bilgisi';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Nakliye Bilgisi';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Görüntülenecek Siariþ Bulunamadý';
	var $_PHPSHOP_ACC_BILL_DEF = '- Geçerli (Ödeme Adresimle Ayný)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Sipariþinizin gönderileceði yeni bir adres ekleyebilirsiniz. Bu adres için Lütfen, uygun bir rumuz ya da kod kullanýn.';
	var $_PHPSHOP_CONFIG = 'Ayarlar';
	var $_PHPSHOP_USERS = 'Kullanýcýlar';
	var $_PHPSHOP_IS_CC_PAYMENT = 'Kredi Kartýnýzla mý Ödeyeceksiniz?';
	var $_PHPSHOP_SHIPPING_MOD = 'Nakliye Yönetimi';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Nakliye';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Nakliyeci';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Nakliyeci Listesi';
	var $_PHPSHOP_RATE_LIST_MNU = 'Nakliye Tarifesi';
	var $_PHPSHOP_RATE_LIST_LBL = 'Nakliye Tarife Listesi';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Adý';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Listorder';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Nakliyeci Oluþturma';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Nakliyeci düzelt / oluþtur';
	var $_PHPSHOP_RATE_FORM_MNU = 'Tarife oluþtur';
	var $_PHPSHOP_RATE_FORM_LBL = 'Tarife günleme / oluþturma';
	var $_PHPSHOP_RATE_FORM_NAME = 'Tarife Açýklamasý';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Nakliyeci';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Ülke';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'Baþlangýç Posta Kodu';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Bitiþ Posta Kodu';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Endüþük Aðýrlýk';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Enyüksek Aðýrlýk';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Ücret';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Paketleme ücretiniz';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Kur';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'KDV';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Listorder';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Nakliyeci';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Tarife açýklamasý';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Aðýrlýk den ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... e';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Nakliye Þirketi';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Listorder';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'HATA: Nakliyeci ID  exists.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'HATA: Nakliyeci Seçin.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'HATA: At least one shipping rate exists, delete rates prior to shipper';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'HATA: Bu ID koduyla bir nakliyeci bulunamadý.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'HATA: Nakiyeci seçin.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'HATA: Bu ID koduyla bir nakliyeci bulunamadý.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'HATA: A rate descriptor is requested.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'HATA: Gönderilecek ülke yanlýþ. Birden fazla ülke seçildiyse ülke adlarý ";" ile ayrýlmalý.';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'HATA: En düþük aðýrlýk deðeri girin.';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'HATA: En yüksek aðýrlýk deðeri girin';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'HATA: En düþük aðýrlýk en yüksek aðýrlýktan düþük olmalý';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'HATA: Bir nakliye ücreti girin';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'HATA: Bir kur seçin';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'HATA: Bir taþýma ücreti girin';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Lütfen seçiniz';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Nakliyeci';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Nakliye Tarifesi';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Price';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-none-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'KrediKartý';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Ödeme Ýþlemcisi Kullanýn';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Banka Hesabý';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Sadece adres';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Lütfen bir nakliye adresi seçin!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Lütfen bir nakliye yöntemi seçin!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Lütfen bir ödeme yöntemi seçin!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Lütfen, bilgilerinizi gözden geçirin ve sipariþinizi teyit edin!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Lütfen bir nakliye adresi seçin.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Lütfen diðer Nakliye yöntemini seçin.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Lütfen bir ödeme yöntemi seçin.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Lütfen 16 haneli kredi kartý numaranýzý girin.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Lütfen kredi kartýnýz üzerindeki ismi girin.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'Girilen Kredi Kartý numarasý geçersiz.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Lütfen kredi kartýnýz üzerindeki geçerlilik tarihinin ayýný girin.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Lütfen kredi kartýnýz üzerindeki geçerlilik tarihinin yýlýný girin.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'Geçerlilik tarihi yanlýþ.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Lütfen adresiniz için bir nakliye girin.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Geçersiz KK numarasý.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'Alýþveriþ sepetiniz boþ!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'HATA: Lütfen bir nakliyeci seçin!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'HATA: Seçilen nakliye tarifesi bulunamadý!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'HATA: Nakliye adresiniz bulunamadý!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'HATA: Kredi Kartý bilgisi yok....';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'HATA: Kredi Kartý numarasý bulunamadý!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Üzgünüz, girdiðiniz KK numarasý bir test numarasýdýr!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'Kullanýcý veri tabanýnda bulunamadý!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Banka hesap sahibi adý geçersiz.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Kullanýlan IBAN vermediniz.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Kullanýlan bir banka hesap numarasý vermediniz.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'You have actually not provided your bank sort code.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Geçersiz Banka adý verdiniz.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Kasa iþlemi geçerli bir adým istiyor!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Sonraki iþleminiz için Ödeme bilgisi alnmýþtýr.<BR>';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Endüþük sipariþ deðerine henüz ulaþýlamadý.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'Endüþük sipariþ deðeri:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Kredi Kartý Ödemesi';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'diðer ödeme yöntemleri';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Lütfen bir ödeme yöntemi seçin:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Maðazanýz için endüþük sipariþ deðeri';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Banka Hesap Bilgisi';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Hesap No';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'Banka þube kodu';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Banka Adý';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Hesap Sahibi';
	var $_PHPSHOP_MODULES = 'Modüller';
	var $_PHPSHOP_FUNCTIONS = 'Fonksiyonlar';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Özel ürünler';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Dilerseniz, bize sipariþinizle ilgili bir not býrakabilirsiniz.';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Müþterinin notu';
	var $_PHPSHOP_INCLUDING_TAX = '($tax % vergi dahildir)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Lütfen bir öge seçiniz';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Öge';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Dosya Ýndirme (Download) Alaný';
	var $_PHPSHOP_DOWNLOADS_START = 'Dosya Ýndir';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Lütfen, e-postanýza gönderilen Download-ID nizi girin ve \'Dosya Ýndir\' butonuna týklayýn.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Üzgünüz, dosya indirilemiyor.';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Üzgünüz, size tahsis edilen dosya indirme sayýsýný aþtýnýz.';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Geçersiz Download-ID!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Gönderilemeyen ileti adresi: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Gönderilen ileti adresi:';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Dosya Ýndir-Bilgi';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'Sipariþ ettiðiniz dosya(lar) Download için hazýr.';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Lütfen aþaðýdaki Download-ID(s) Dosya Ýndirme Alanýna giriniz: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'Herbir dosya için dosya ençok indirme sayýsý: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Ýlk dosya indirmenizden $expire gün sonra dosya indirin';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Sorular? Sorunlar?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Dosya indirme bilgisi ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'Ürünler Internetten indirilebilir mi?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Ödemeniz için teþekkürler. 
        Ödeme Ýþleminiz baþarýyla gerçekleþmiþtir. Bu iþleminiz için PayPal. tarafýndan e-posta adresinize bir teyit iletisi gönderilecektir.
        Alýþveriþinize devam edebilir ya da  <a href=http://www.paypal.com>www.paypal.com</a> sitesinde bir oturum açarak ödeme iþleminizin detaylarýný görebilirsiniz.';
	var $_PHPSHOP_PAYPAL_ERROR = 'Ödeme iþleminiz gerçekleþirken bir HATA oluþtu. Sipariþ durumu günlenemiyecek.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Bizimle alýþveriþ yaptýðýnýz için teþekkür ederiz.  Sipariþ bilginiz aþaðýdadýr.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Sürekli alýþveriþiniz için teþekkür ederiz.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Sorular? Sorunlar?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'Aþaðýdaki sipariþ alýnmýþtýr..';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Aþaðýdaki linki izleyerek sipariþinizi inceleyin.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Negatif miktar kabu edilemez.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Lütfen bu öge için geçerli bir miktar girin.';
	var $_PHPSHOP_CART_STOCK_1 = 'Stokta bu miktarda ürün yoktur.';
	var $_PHPSHOP_CART_STOCK_2 = 'Seçtiðiniz üründen $product_in_stock adet bulunmaktadýr. ';
	var $_PHPSHOP_CART_STOCK_3 = 'Bu ürün geldiðinde bilgilenmek ve bekleyenler listesine kayýt olmak için týklayýnýz.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Lütfen detaylar sayfasýndan özel bir öge seçiniz!';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'hiçbiri';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Bay.';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Bayan.';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Dr.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof.';
	var $_PHPSHOP_DEFAULT = 'Default';
	var $_PHPSHOP_AFFILIATE_MOD = 'Affiliate Administration';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Üyeleri Listeleme';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Üye Listesi';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Üye adý';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Aktif';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Oran';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Aylýk Toplam';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Aylýk Komisyon';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Sipariþleri Listele';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'Üyelere E-posta';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'Üyelere E-posta';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'E-posta gönderilecekler(* = ALL)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'E-postanýz';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Konu';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Mevcut Ýstatistikleri içerir';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Komisyon Oraný (%)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Aktif?';
	var $_PHPSHOP_DELIVERY_TIME = 'Genellikle taþýnýr';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Taþýma Bilgisi';
	var $_PHPSHOP_MORE_CATEGORIES = 'daha fazla kategori';
	var $_PHPSHOP_AVAILABILITY = 'Availability';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Bu ürünün mevcudu kalmamýþtýr.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Bu ürünün stoklarýmýza gireceði tarih: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Özet';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Ýstatistikler';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Müþteriler';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'aktif Ürünler';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'pasif Ürünler';
	var $_PHPSHOP_STATISTIC_SUM = 'Toplam';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Yeni Sipariþler';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Yeni Müþteriler';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Ürün stoklarda bulunduðund haberdar olmak için lütfen aþaðýya e-mail adresinizi giriniz. 
                                        E-mail adresinizi hiçkimseyle hiçbir þekilde paylaþmayacak,satmayacak,kiralamayacaðýz.
                                        Sadece ürün stoklara geldiðinde sizi haberdar edeceðiz.<br /><br />Teþekkür ederiz!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Beklediðiniz için teþekkür ederiz! <br />Stoklarla ilgili en ayakýn zamanda sizi haberdar edeceðiz.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Beni haberdar et!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Printer çýktýsý';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Lütfen Authorize.net veya CyberCash seçiniz';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' Düzenleme dosyasý durumu:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'yazýlabilir';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'yazýlamaz';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Genel';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Yol & Link';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Site';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Nakliye';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Hesap Ödeme';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Dosya Ýndirme';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Ödemeler';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Sadece katolog olarak göster';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Bunu iþaretlerseniz tüm araba fonksiyonlarý kaybolacak.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Ücretleri göster';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Ücretleri vergi dahil göster?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Müþterilerin ücretleri vergi dahilmi yoksa vergisiz haldemi gösterileceðini atama yapar.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Ücretleri göstermek için týkla. 	Kimileri ücretleri sayfada görmek istemeyebilir.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Sanal vergi';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Bazý ürünlerin vergisiz olup olmayacaðýna karar verir. ps_checkout.php->calc_order_taxable() deðiþtirmek için ,üzerinde deðiþiklik yapýnýz.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Vergi modu:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Kargo adresinde bulunuyor';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Satýcý adresinde bulunuyor';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Bu seçenek ile hangi vergi oranýnýn hesaplamaya katýlacaðý belirtilir:<br />
                                                <ul><li>Dükkan sahibinin memleketi </li><br/>
                                                <li>veya müþterinin memleketi.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Çoklu vergiyi aktif et';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Eðer farklý vergi oranlarýna sahip ürünleriniz varsa bunu iþaretleyiniz.';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Vergi ve kargodan önce hesaptan indirimi yap';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Müþteri yorum /ürün oylama sistemini aktif et';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Eðer aktif ederseniz müþteriler <strong>ürünleri oylayabilir</strong> ve ürünlerle ilgili<strong> yorum yazabilir</strong><br />
                                                                                Böylece müþteriler ürünle ilgili tecrübelerini dðer müþterilerle paylaþabilirler.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Ýndirimin vergi ve nakliye ücreti kesilmeden önce mi sonramý yapýlmasý gerektiðini belirler.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Müþteriler banka hesap bilgilerini boþ geçebilir mi?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Maðazaya kayýt olunduðunda banka hesap bilgilerini belirtmesi gerekip gerekmediðini belirler.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Müþteriler ilçe/bölge seçebilir mi?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Eðer seçilirse müþteriler kayýt olduklarýnda kendi bölgelerini/ilçelerini seçip seçemeyeceklerini belirler.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Kullaným koþullarýný kabul zorunluluðu olsun mu?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Eðer seçilirse müþteriler maðazaya kayýt olurken maðazanýn kullaným koþullarýný kabul etmeleri mebur kýlýnýr';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Stok kontrolü olsun mu?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Eðer seçilirse müþteri alýþveriþte arabaya bir ürün attýðýnda stok kontrolü yapýlýr.
                                                                                          Seçilmesi halinde müþterinin stokta olmayan ürünü almasý iptal edilir.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Ortak þirketler programýný aktif et?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Ortak þirketler programýný aktif eder,eðer arka planda eklenen þirketler varsa onlarý aktif edebilirsiniz.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Sipariþ-posta fromatý:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Düz yazý halinde';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML halinde';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Onay e-mail lerinin formatýný düzenlemenizi saðlar:<br />
                                                                                        <ul><li>Sadece düz yazý halinde</li>
                                                                                        <li>veya HTML olarak resimlerle beraber</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Kullanýcýlara admin kullanýmýna izin ver';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'Bu seçenekle mambo kullanýcýsý olmayan fakat 
                                                                                              maðaza admini olan kullanýcýlara mambo adminliði hakký verilir.';
	var $_PHPSHOP_ADMIN_CFG_URL = 'Link';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'Sitenizin internet adresi. Mambo linki ile ayný olmalýdýr (sonu / ile bitmelidir).';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'Güvenli Alan';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'Sitenize güvenli adres (https: þeklinde , sonu / ile bitmelidir)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'PARÇA LÝNKÝ';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'mambo-phpShop Site bileþenlerinin baðlantýlarý. (sonu / ile bitmelidir)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'Resim Linki';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'mambo-phpShop Resim klasörünün baðlantýsýdýr.(sonu / ile bitmelidir)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'Yönetici Yolu';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'mambo-phpShop klasörü yolu.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'Sýnýf Yolu';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'phpShop sýnýflarýnýn klasörü.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'Sayfa Yolu';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'phpShop html klasörünün yolu.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'Resim yolu';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'phpShop shop_image klasörü resim yolu.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'Ana Sayfa';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Varsayýlan olarak bu sayfa yüklenecektir.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'Hata Sayfasý';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Hata mesajlarý için varsayýlan olarak bu sayfa yüklencektir.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'Düzeltme Sayfasý';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Onarým mesajlarý için bu sayfa varsayýlan olarak açýlacaktýr.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'Onarma açýk ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'ONAR?  	   	Onarmayý açar. Her sayfanýn sonunda onarma sayfasý açýlacaktýr. Maðaza yapým aþamasnda iken çok faydalýdýr.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'Önizleme Sayfasý';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Ürün detaylarý için varsayýlan önizleme sayfasýdýr.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Þablon Kategorisi';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Ürünlerin varsayýlan olarak gösterileceði kategoridir.<br />
                                                                                                      Önceki þablonlarý tekrar düzenleyerek yeni þablonlar oluþturabilirsiniz.<br />
                                                                                                      (burada bulabilirsiniz <strong>COMPONENTPATH/html/templates/</strong> aramaya _ ile baþlayýn)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Herbir satýrda gözükecek ürün (varsayýlan)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Her satýrda bulunacak ürün sayýsýný belirler. <br />
                                                                                                      Örneðin: Üç olarak(3) belirlerseniz, kategori þablonu her satýrda 3 ürün gösterir';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = '\'no image\' resmi';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Eðer ürünle ilgili hiçbir resim yoksa bu resim gösterilir.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'Satýr Arama';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Arama sonunda gösteilecek satýr sayýsý.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'Arama Rengi  1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Sonuç listesindeki tek sayý olarak numaralanmýþ sayýlarýn rengini belirler.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'Arama Rengi 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Sonuç listesindeki çift sayý olarak numaralanmýþ sayýlarýn rengini belirler.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'Azami Sýra';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Sipariþ listesi kutusunda gösterilecek azami sýra sayýsý .';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'En altta \'powered by mambo-phpShop\' gösterilsin mi?';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Seçilmesi halinde en altta ..powered-by-mambo-phpShop.. resmi gösterilir.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Maðazanýzýn nakliye türünü seçiniz.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Standart nakliye modülü ,düzenlenmiþ ve oylanmýþ kargolarla birlikte. <strong>RECOMMENDED !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '  	Alan nakliye modülü 1.0<br />
                                                                                                            Daha fazla bilgi için :  <a href=\'http://ZephWare.com\'>http://ZephWare.com</a><br />
                                                                                                            Ýletiþim için : <a href=\'mailto:zephware@devcompany.com\'>ZephWare.com</a><br /> Bunu aktif edin';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<a href=\'http://www.ups.com\' target=\'_blank\'>UPS Online&reg; Araçlar</a> Nakliye hesaplayýcý';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'UPS eriþim kodu';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Uðs eriþim kodunuz';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'UPS kullanýcý kimliði';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'Ups ten almýþ olduðunuz kimlik';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'UPS þifresi';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'Ups hesabýnýzýn þifresi';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'Uluslararasý nakliye. Eðer <a href=\'http://www.intershipper.com\' target=\'_blank\'>Intershipper.com</a> hesabýnýz varsa seçiniz';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Nakliye metodu seçimini iptal et. Eðer müþterilerinizin aldýðý ürünlere nakliye gerekmiyorsa seçiniz.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'Uluslararasý nakliye þifresi';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Uluslararasý nakliye hesabýnýzýn þifresi.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'Uluslararasý nakliye emaili';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'Uluslararasý nakliye hesabýnýzýn e-mail adresi.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'Þifreleme anahtarý';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Veritabanýndaki saklanan bilgileri þifrelemek için kullanýlan anahtar. Dosyanýn görüntülenmesinden korumak manasýna gelir.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Hesabý Ödeme Çubuðunu Aktif Et';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Eðer bunu aktif ederseniz müþteriler hesap ödeme sýrasýnda bunu görüntüleyeceklerdir.';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Maðazanýzýn hesap ödeme þeklini seçiniz';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Standart :</strong><br/>
               1. Kargo adresi isteði<br />
              2. Kargo türü isteði<br />
              3. Ödeme þekli isteði<br />
              4. Sipariþi tamamlama';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Ýþlem 2:</strong><br/>
               1. Kargo adresi isteði<br />
              2. Ödeme türü isteði<br />
              3. Sipariþi Tamamla';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Ýþlem 3:</strong><br/>
               1. Kargo türü isteði<br />
              2. Ödeme türü isteði<br />
              3. Sipariþi tamamla';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Ýþlem 4:</strong><br/>
               1. Ödeme türü isteði<br />
              2. Sipariþi tamamla';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Ýndirilebilir ürün aktif et';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Eðer indirilebilir ürünler satmak istiyorsanýz bunu aktif ediniz.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Ürün indirme aktif ürün durumu';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Müþteriye e-mail yoluyla belirtilecek , indirilebilir ürün durumunu seçiniz .';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Ürün indirme pasif ürün durumu';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Ýndirilebilir ürün durumunu pasif hale geçirmek için bu özelliði kullanabilirsiniz.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'DOWNLOADROOT';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'Müþterilerin dosyalarý indirecekleri fiziksel yol.<br>
        <span class=\'message\'>Maðazanýzýn güvenliði için: Eðer yapabiliyorsanýz sitenizin ana klasörü dýþýnda bir yer seçiniz</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Azami Dosya Ýndirme';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Tek dosya indirme kimliði ile dosyalarýn indirilmesini saðlar, (tek sipariþ için)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Dosya Ýndirme Süresi';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Dosya indirme sýnýrýný <strong>saniye</strong> olarak belirleyebilirsiniz. 
  Bu sýnýr ilk dosya indirme ile baþlar! Sýnýr aþýldýðýnda, Dosya indirme kimliði iptal olur.<br />Not : 86400sn =24saat.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'PayPal ile IPN ödeme açýk mý?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Kullanýcýlarýn Paypal ile ödeme sistemini kullanmasý için seçiniz.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'PayPal ödemesi için email:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Paypal ödemeleriniz içinTicari e-posta adresiniz. Alýcý emaili olarak kullanýlýr.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Baþarýlý iþlemler için ürün durumu';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Asýl durumu belirtilmiþ ürün durumu, eðer paypal ödeme baþarýlý olmuþ ise.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Baþarýsýz iþlemler için ürün durumu';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Baþarýsýz PAYPAL iþlemleri için ürün durumunu seçiniz.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'PayMate ile ödemeler aktif mi?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Kullanýcýlarýn Paymate ile ödeme sistemini kullanmasý için seçiniz.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'PayMate kullanýcý adý:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'PayMate hesabýndaki kullanýcý adý.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Authorize.net ödeme sistemini aç?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Authorize.net i phpShop ile kullan.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Test modu ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Test halinde iken \'Evet\' seçin. Canlý iþlemler için \'Hayýr\' seçiniz.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Evet';
	var $_PHPSHOP_ADMIN_CFG_NO = 'Hayýr';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Authorize.net Kullanýcý kimliði';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'Bu sizin Authorize.Net kullanýcý kimliðiniz';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Authorize.net iþlem anahtarý';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'Bu sizin Authorize.net iþlem anahtarýnýz.';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Belgeleme Türü';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'Bu sizin Authorize.Net belgeleme türünüz.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'CyberCash aktif et.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'CyberCash i phpShop ile kullan.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash Tüccar';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_MERCHANT ,CyberCash ticari kimliði';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash Tüccar Anahtarý';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash tarafýndan saðlanan CyberCash tüccar anahtarý';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash ödeme linki';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'CyberCash PAYMENT URL is the URL provided by Cybercash for secure payment';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash Belgeleme türü';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'Cybercase tarafýndan saðlanan CyberCash belgeleme türü ';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Kapsamlý Arama';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Tüm kategorileri ara';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Tüm ürün özelliklerinde ara';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Sadece ürün adý';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Sadece üretici/Satýcý';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Sadece ürün tanýmý';
	var $_PHPSHOP_SEARCH_AND = 've';
	var $_PHPSHOP_SEARCH_NOT = 'yok';
	var $_PHPSHOP_SEARCH_TEXT1 = 'Birinci açýlýr menü belli bir limitte arama yapmak için kategori seçmenizi saðlar . 
        Ýkinci açýlýr menü ürünle ilgili belli bir arama yapmak için kategori seçmenizi saðlar  (mesela ürün adý) .
        Bunlarý seçip anahtar kelimeyi giriniz. ';
	var $_PHPSHOP_SEARCH_TEXT2 = ' Aramanýzý ikinci bir anahtar kelime ekleyerek ve operatörleri(ve,veya) kullanarak inceltebilirsiniz . 
        Ve anahtar kelimesini seçmek iki kelimeninde üründe bulunmasý manasýna gelmektedir. 
        YOk anahtar kelimesini seçmek ilk kelimenin üründe bulunmasý manasýna gelmektedir. ';
	var $_PHPSHOP_ORDERBY = 'Sipariþ';
	var $_PHPSHOP_CUSTOMER_RATING = 'Averaj müþteri reytingi';
	var $_PHPSHOP_TOTAL_VOTES = 'Toplam Oy';
	var $_PHPSHOP_CAST_VOTE = 'Oyunuzu seçiniz';
	var $_PHPSHOP_RATE_BUTTON = 'Oran';
	var $_PHPSHOP_RATE_NOM = 'Reyting';
	var $_PHPSHOP_REVIEWS = 'Müþteri yorumlarý';
	var $_PHPSHOP_NO_REVIEWS = 'Bu ürün için hiç görüþ belirtilmemiþ.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Ýlk görüþü siz belirtin';
	var $_PHPSHOP_REVIEW_LOGIN = 'Lütfen görüþ belirtmek için kullanýcý giriþi yapýn.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Lütfen yorumunuzu tamamlamak için oy verin.';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Lütfen yorumunuzu yapýnýz. Asgari izin verilen limit 100 karakterdir.';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Yorumunuzu kýsaltýn : Azami 2000 karaktere izin veriyoruz ';
	var $_PHPSHOP_WRITE_REVIEW = 'Ürün için yorum yapýn!';
	var $_PHPSHOP_REVIEW_RATE = 'Öne ürüne oy veriniz. Lütfen 0 (Çok kötü) ile 5 (Süper) arasý deðer seçiniz.';
	var $_PHPSHOP_REVIEW_COMMENT = 'Kýsa bir yorum girin....(asgari  100, azami 2000 characters) ';
	var $_PHPSHOP_REVIEW_COUNT = 'Yazýlan karakterler: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Yorum gönder';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Önceden bu ürünle ilgili inceleme yapmýþsýnýz,teþekkür ederiz.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Ýncelemeniz için teþekkürler.';
	var $_PHPSHOP_COMMENT = 'Yorum';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Kredi Kartý Türü Ekle/Düzenle';
	var $_PHPSHOP_CREDITCARD_NAME = 'Kredi Kartý Adý';
	var $_PHPSHOP_CREDITCARD_CODE = 'Kredi Kartý - Güvenlik Kodu';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Kredi Kartý Türü';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Kredi Kartý Listesi';
	var $_PHPSHOP_UDATE_ADDRESS = 'Adres Güncelle';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Alýþveriþe devam et';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Sipariþiniz alýndý!';
	var $_PHPSHOP_ORDER_LINK = 'Sipariþ detaylarý için aþaðýdaki linklerden faydalanabilirsiniz';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'Ürününüzün {order_id} durumu deðiþti.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'Yeni durum:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'Sipariþ detaylarý için aþaðýdaki linke týklayýn:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Ürün durumu deðiþti: Ürününüz {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Müþteriyi haberdar et.';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Önce sipariþ durumunu deðiþtirin';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Varsayýlan müþteri grubu için ürün indirimi (% olarak)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Pozitif X : Eðer bu ürün grubuna hiçbir ürün ücreti atanmamýþsa, varsayýlan ücretten X yüzde olarak düþülür. Negatif deðerler tam tersi etki yapar.';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Ürün indirimleri';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Ýndirimli Ürün Listesi';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Ürün indirimi ekle düzelt';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Ýndirim tutarý';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Ýndirim tutarýný giriniz';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Ýndirim tipi';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Yüzde';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Toplam';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Tutar yüzde olarak mý toplam olarak mý gösterilecek?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Ýndirimin baþlangýç tarihi';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Ýndirimin baþladýðý günü belirler';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Ýndirimin bitiþ tarihi';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Ýndirimin bittiði günü belirler';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Ürün indirim formundan indirim ekleyebilirsiniz!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Bu kadar kazandýnýz';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Resmin tümünü görüntüle';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Parabirimi gösterim þekli';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Parabirimi sembolü';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Buradan HTML giriþi yapabilirsiniz (örneðin &euro;,&pound;,&yen;,...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Ondalýk Kýsým';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Kaç tane ondalýk basamak gösterilecek (0 olabilir)<br><b>Eðer farklý bir sayý ise yuvarlama yapar</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Ondalýk sembolü';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Ondalýk sembolü için kullanýlacak karakter';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Binlik ayracý';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Binler basamaðýný ayýrmak için kullanýlacak sembol (boþ býrakýlabilir)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Pozitif Deðer Biçemi';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Pozitif deðerleri göstermek için biçemi kullan.<br>(Symb stands for currency symbol)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Negatif Deðer Biçemi';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Negatif deðerleri göstermek için biçemi kullan.<br>(Symb stands for currency symbol)';
	var $_PHPSHOP_OTHER_LISTS = 'Diðer ürünlerin listesi';
	var $_PHPSHOP_MORE_IMAGES = 'Daha Fazla Resim Göster';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Etki resimler';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Ürün Detaylarýna Dön';
	var $_PHPSHOP_FILEMANAGER = 'Dosya Yöneticisi';
	var $_PHPSHOP_FILEMANAGER_LIST = 'Dosya Yöneticisi: Ürün Listesi';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Dosya/Resim Ekle';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Atanan resimler';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'indirilebilir mi?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Atanan Dosyalar';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Yayýnla?';
	var $_PHPSHOP_FILES_LIST = 'Dosya Yöneticisi::Resim/Dosya Listesi';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Dosya Ýsmi';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'Dosya Baþlýðý';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Dosya Türü';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Dosya Girþi Düzenle';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Resim';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Küçültülmüþ Resim';
	var $_PHPSHOP_FILES_FORM = 'Dosya yükleme';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Þu Anki Dosya';
	var $_PHPSHOP_FILES_FORM_FILE = 'Dosya';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Resim';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Þuraya yükle';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'Varsayýlan Resim Yolu';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Dosya yerini belirt';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Dosya Ýndirme Yolu';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Küçük resimleri otomatik oluþtur?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Dosya yayýnlansýn mý?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Dosya Baþlýðý';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Dosya tanýmý';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'Dosya linki';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Lütfen doðru yol belirtiniz!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'Küçültülmüþ resim oluþturuldu!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'Küçültülmüþ resim oluþturulamadý!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Dosya/Rsim Yükleme Hatasý';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Resim dosyasý silinemedi.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Resim dosyasý Silindi.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Küçültülmüþ resim silinemedi (resim olmayabilir) : ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Küçültülmüþ resim silindi.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Dosya silinemedi.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Dosya baþarý ile silindi.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Üzgünüz, istenen dosya bulunamadý!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Resim bulunamadý!';
	var $_PHPSHOP_COUPON_MOD = 'Kupon';
	var $_PHPSHOP_COUPONS = 'Kuponlar';
	var $_PHPSHOP_COUPON_LIST = 'Kupon Listesi';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Kupon önceden ödenmiþ.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Kupon ödendi! Teþekkür ederiz.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Kupon kodunuz varsa, aþaðýya giriniz:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Gönder';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Bu kupon kodu var ,tekrar deneyin.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Kupon güncelle';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Düzenlemek için kupon kodunun üzerine týklayýn, kupon kodunu silmek için, seçin ve silme tuþuna basýn:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Kod';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Yüzde veya Toplam';
	var $_PHPSHOP_COUPON_TYPE = 'Kupon Tipi';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Eðer hediye kuponu indirim kuponu olarak kullanýlýrsa silinir. Kalýcý kuponu müþteri istediði zaman istediði gibi kullanabilir.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Hediye kuponu';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Kalýcý kupon';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Deðeri';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Kodu Sil';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Bu kupon kodunu silmek istediðinizden emin misiniz?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Tüm alanlarý giriniz.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'Kupon deðeri numara olmalýdýr.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Yeni Kupon';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Kupon Kodu';
	var $_PHPSHOP_COUPON_PERCENT = 'Yüzde';
	var $_PHPSHOP_COUPON_TOTAL = 'Toplam';
	var $_PHPSHOP_COUPON_VALUE = 'Deðer';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Kupon kodu kaydedildi.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Kuponu kaydet';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Kupon indirimi';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Kupon kodu bulunamadý,tekrar deneyiniz.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Kupon kullanýmýný aktif et';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Kupon kullanýmýný aktif ederseniz,müþterilerin kupon kodlarýný kullanarak alýþveriþlerinde kazançlý olmalarýný saðlayabilirsiniz .';
	var $_PHPSHOP_FREE_SHIPPING = 'Bedava Nakliye';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Bu sipariþte nakliye bedava!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Nakliye için asgari tutar';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Tutar (Vergiler DAHÝL!) Nakliye Ýçin Asgari
                                                (örneðin: <strong>50</strong> Müþteri 50\$ veya fazla alýþveriþ yaptýðýnda
                                                bedava nakliye anlamýna gelir .';
	var $_PHPSHOP_YOUR_STORE = 'Sizin Maðazanýz';
	var $_PHPSHOP_CONTROL_PANEL = 'Kontrol Panel';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF - Butonu';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'PDF butonunu göster/gizle';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Her sipariþ için þatlarý kabul mecburiyeti olsun mu?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Eðer seçerseniz müþteri her sipariþi için servis þartlarýný kabul etme mecburiyetinde olacak.';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Banka hesap tipi';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Çek';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Ticari Çek';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Birikim';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Devirli Ödeme?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Devirli ödeme yapmak istediðinizi belirtin.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Ýstek yapýlýrken iç hata!';
	var $_PHPSHOP_PAYMENT_ERROR = 'Ödeme yapýlýrken hata oluþtu!';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Ödeme baþarý ile gerçekleþtirildi!';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS istenen nakliye oranýný gerçekleþtiremedi.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Gündelik Teslimat Garantisi';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'UPS Taþýma methodu';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Paketler UPS\'e nasýl verilecek?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'UPS Paketleme tipi?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Paketleme için varsayýlan türü seçiniz.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Bireysel teslimat?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Bireysel (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Ticari Teslimat (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Ticari teslimattan alýntý (COM).';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Taþýma ücreti';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Bu nakliye çeþidi için taþýma ücreti.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Vergi Sýnýfý';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Nakliye ücreti vergisi için bu deðerleri kullan.';
	var $_PHPSHOP_ERROR_CODE = 'Hata Kodu';
	var $_PHPSHOP_ERROR_DESC = 'Hata Tanýmý';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Muamele Anahtarý Göster/Deðiþtir';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Muamele Anahtarý Þifresi Göster/Deðiþtir';
	var $_PHPSHOP_TYPE_PASSWORD = 'Kullanýcý þifrenizi Giriniz';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Þu Anki Þifre';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Þu Anki Muamele Anahtarý';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'Muamele Anahtarý Baþarý ile deðiþtirildi.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Ýstek/Alým Kredi Kartý Güvenlik Kodu (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Geçerli güvenlik deðerini kontrol edin. (CVV2/CVC2/CID)  (kredi kartýnýzýn arkasýndaki 3,4 haneli rakam, amerikan expreess kartlarýn önünde)';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Lütfen Kredi kartýnýzýn Arkasýndaki 3,4 haneli güvenlik deðerini giriniz (American Express kartlarýn önündedir)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'Ýþlem yapabilmeniz için kodu girmeniz gerekmektedir.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'Dosya ismini giriniz';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'NOT: Dosya ismini girebilirsiniz. <strong>Dosya ismini grerseniz, Hiçbir dosya yüklenmeyecek!!! FTP ile manual olarak yüklemeniz gerekecek!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'Yada yeni dosya yükleyin';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Yerel dosyayý yükleyebilirsiniz. Bu dosya sattýðýnýz ürün olacak. Varolan dosya ile deðiþtirilecek.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Müþteri önizleme sayfasýnda gösterilecek bölümü doldurun.<br />mesala 24 saat 3,5 gün , sipariþte';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'Yada ürün detaylarý sayfaýnda gösterilecek resmi seçiniz.<br />Klasörde bulunan resim <i>/components/com_phpshop/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Nitelik Listesi';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Nitelik Liste Formatý Örnekleri:</h4>
        <pre>Boyut,XL[+1.99],M,S[-2.99];Renk,Kýrmýzý,Yeþil,Sarý,YüksekRenk[=24.00];veYakýnda,..,..</pre>
        <h4>Ýleri Düzey Nitelik Düzenlemesi:</h4>
        <pre>
        &#43; == Bu tutarý düzenlenen ücrete aktar.<br />
        &#45; == Bu tutarý düzenlenen ücretten çýkar.<br />
        &#61; == Bu tutarý düzenlenen ürün ücreti olarak ayarla.
      </pre>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Özel Nitelik Listesi';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Özel nitelik formatý liste örnekleri:</h4>
        <pre>Ýsim;Ekler;</strong>...</pre>';
	var $_PHPSHOP_MULTISELECT = 'Çoklu seçim: CTRL- tuþu ve mouse kullanýn';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'eProcessingNetwork.com ödemeyi aktif et?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'eProcessingNetwork.com phpShop ile kullanýmý kontrol et.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Test türü ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Test ederken \'evet seçiniz. Canlý muameleler için \'Hayýr\' seçiniz.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'eProcessingNetwork.com Kullanýcý kimliði';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'Bu eProcessingNetwork.com kullanýcý kmiliðidir';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'eProcessingNetwork.com mumamele anahtarý';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'Bu sizin eProcessingNetwork.com mumamele anahtarýnýz';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Belgeleme Tipi';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'Bu eProcessingNetwork.com tipi';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Related Products';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Bu listeyi kullanarak ürün benzer ürünleri oluþturabilirsiniz. Bir veya birden fazla ürün seçin ve sonra <strong>benzer ürünler</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Bu ürünü alanlar bunlarýda aldýlar.';
	var $_PHPSHOP_IMAGE_ACTION = 'Resim Hareketi';
	var $_PHPSHOP_NONE = 'hiçbiri';
	var $_PHPSHOP_ORDER_HISTORY = 'Sipariþ Geçmiþi';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Yorum';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Sipariþinize yorum';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Bu yorumu kapsasýn mý?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Ekleme tarihi';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Müþteri bilgilendirilsin mi?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Sipariþ Durum Deðiþikliði';
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
	var $_PHPSHOP_USPS_RESPONSE_ERROR = 'Usps nakliye oran isteðini iþlemden geçiremedi ';
	var $_PHPSHOP_PARAMETERS_LBL = 'Parametreler';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Ürün Türü';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Ürün Türü Listesi';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Ürün Türü Ekle/Düzenle';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Ürün Türü Listesi';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Ürün Türlerini Listele';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Ürün çeþidini buna ekle ';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Ürün Çeþidi Ekle';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Ürün Çeþidi';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Ürün Çeþidi Adý';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Ürün Çeþidi Tanýmlamasý';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Parametreler';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Ürün Çeþidi Bilgisi';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Yayýnla?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Ürün Çeþidi Arama Sayfasý';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Ürün Çeþidi Öngösterim Sayfasý';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Ürünü Çeþidi Parametreleri';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Parametre Bilgisi';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Ürün Çeþidi Bulunamdý!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Parametre Ýsmi';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Bu kolon ismi olacak. Boþluksuz ve tek olmalýdýr.<BR>Mesela: ana_materyal';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Parametre Etiketi';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Parametre Tanýmlamasý';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Parametre Çeþidi';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Integer Sayý';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Yazý';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Kýsa Yazý';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Virgüllü Sayý';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Karakter';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Tarih Zaman';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Tarih';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'YYYY-AA-GG';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Saat';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'SS:DD:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Kesme Satýrý';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Çoklu Deðerler';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Mümkün Deðerler';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Mümkün deðerleri çoklu der olarak göster?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Mümkün deðerler ayarlandýysa,parametreler sadece kendi deðerlerini alabilirler. Mümkün deðerler için örnek:</strong><BR><span class=\'sectionname\'>Çelik;Ahþap;Plastik;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Varsayýlan Deðer';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'Varsayýlan parametreler için bu formatý kullan:<ul><li>Tarih: YYYY-AA-GG</li><li>Saat: SS:DD:SS</li><li>Tarih & Saat: YYYY-AA-GG SS:DD:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Unit';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Parametreye Göre Ayrýntýlý Arama';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Parametre Arama';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Ürünleri Teknik Parametrelere Göre mi Aramak Ýstiyorsunuz?<BR>Herhangi bir hazýr formu kullanabilirsiniz:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Üzgünüm. Arama için kategori bulunamadý.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Üzgünüm. Bu isimde yayýnlanan bir ürün çeþidi yok.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'benzer';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'benzemez';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Tam-yazý arama';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Tümü seçili';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Hiçbiri seçilmemiþ';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Reset Form';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Kategoride Ara';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Parametreleri Deðiþtir';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Azalan Düzende';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Artan Düzende';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Kategori Parametreleri';
	var $_PHPSHOP_FEE = 'Ücret';
	var $_PHPSHOP_PRODUCT_CLONE = 'Ürün Klonla';
	var $_PHPSHOP_CSV_SETTINGS = 'Ayarlar';
	var $_PHPSHOP_CSV_DELIMITER = 'Ayraç';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Çit karakter';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'CSV dosyasý yükle';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'CSV dosyasýna gönder';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Klasörden yükle';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Serverdaki CSV dosyasýndan yükle';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'CSV dosyasýna ver';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Alan düzeni tipini seçiniz';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Varsayýlan Düzen';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'Benim özel düzenim';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Tüm ürünleri CSV dosyasýna ver';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'CSV Al/Ver/Düzenle';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Deðiþiklikleri Kaydet';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Alan Adý';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'varsayýlan deðer';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Alan Düzeni';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Alan Gerekli mi?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Al/Ver';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Yeni Alan Ekle';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Dökümanlar';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Üzgünüz, istediðiniz ürün bulunamadý!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Stokta bulunmayan ürünleri göster';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Aktif edildiðinde, stokta bulunmayan ürünler gösterilecektir. Aksi halde ürünler gizli olacaktýr.';
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
}
class phpShopLanguage extends vmLanguage { }

/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>