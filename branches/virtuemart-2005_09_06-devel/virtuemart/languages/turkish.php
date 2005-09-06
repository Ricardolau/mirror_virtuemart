<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: turkish.php,v 1.18 2005/06/22 19:50:45 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage languages
*
* @copyright (C) 2004 Soeren Eberhardt
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*
* tanslated into turkish by Nihat ANGI- nihat@angi.com.tr
*
* www.web.matik.biz
**/
class phpShopLanguage extends mosAbstractLanguage {

    /*####################
    GENERAL DEFINITIONS
    ####################*/
    
    var $_PHPSHOP_MENU = "Men�";
    var $_PHPSHOP_CATEGORY = "Kategori";
    var $_PHPSHOP_CATEGORIES = "�r�n Kategorileri";
    var $_PHPSHOP_ADMIN = "Y�netim";
    var $_PHPSHOP_PRODUCT = "�r�n";
    var $_PHPSHOP_LIST = "liste";
    var $_PHPSHOP_ALL = "t�m�";
    var $_PHPSHOP_VIEW = "incele";
    var $_PHPSHOP_SHOW = "g�ster";
    var $_PHPSHOP_ADD = "ekle";
    var $_PHPSHOP_UPDATE = "g�ncelle";
    var $_PHPSHOP_DELETE = "sil";
    var $_PHPSHOP_SELECT = "se�";
    var $_PHPSHOP_SUBMIT = "Submit";
    var $_PHPSHOP_RANDOM = "�r�nler";
    var $_PHPSHOP_LATEST = "Son �r�nler";
    
    /*#####################
    MODULE ACCOUNT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_HOME_TITLE = "Anasayfa";
    var $_PHPSHOP_CART_TITLE = "Al��veri�im";
    var $_PHPSHOP_CHECKOUT_TITLE = "Kasa";
    var $_PHPSHOP_LOGIN_TITLE = "Giri�";
    var $_PHPSHOP_LOGOUT_TITLE = "��k��";
    var $_PHPSHOP_BROWSE_TITLE = "G�ster";
    var $_PHPSHOP_SEARCH_TITLE = "Arama";
    var $_PHPSHOP_ACCOUNT_TITLE = "Hesap Bak�m�";
    var $_PHPSHOP_NAVIGATION_TITLE = "Gezinirlik";
    var $_PHPSHOP_DEPARTMENT_TITLE = "B�l�m";
    var $_PHPSHOP_INFO = "Bilgi";
    
    var $_PHPSHOP_BROWSE_LBL = "�r�n Listeleme";
    var $_PHPSHOP_PRODUCTS_LBL = "�r�n";
    var $_PHPSHOP_PRODUCT_LBL = "�r�n";
    var $_PHPSHOP_SEARCH_LBL = "Arama";
    var $_PHPSHOP_FLYPAGE_LBL = "�r�n Detay�";
    
    var $_PHPSHOP_PRODUCT_NAME_TITLE = "�r�n Ad�";
    var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = "�r�n Kategorisi";
    var $_PHPSHOP_PRODUCT_DESC_TITLE = "�r�n A��klamas�";
    
    var $_PHPSHOP_CART_SHOW = "Al��veri�im";
    var $_PHPSHOP_CART_ADD_TO = "Sepete Ekle";
    var $_PHPSHOP_CART_NAME = "Ad�";
    var $_PHPSHOP_CART_SKU = "Stok";
    var $_PHPSHOP_CART_PRICE = "Fiyat";
    var $_PHPSHOP_CART_QUANTITY = "Miktar";
    var $_PHPSHOP_CART_SUBTOTAL = "Ara Toplam";
    
    # Some messages
    var $_PHPSHOP_ADD_SHIPTO_1 = "Yeni ekle";
    var $_PHPSHOP_ADD_SHIPTO_2 = "Nakliye Adresi";
    var $_PHPSHOP_NO_SEARCH_RESULT = "Arama sonucunda 0 kay�t bulundu.<BR>";
    var $_PHPSHOP_PRICE_LABEL = "Fiyat: ";
    var $_PHPSHOP_ORDER_BUTTON_LABEL = "Al��veri�ime Ekle";
    var $_PHPSHOP_NO_CUSTOMER = "Hen�z kay�tl� kulln�c� de�ilsiniz. L�tfen Fatura bilgilerinizi giriniz.";
    var $_PHPSHOP_DELETE_MSG = "Bu kayd� silmek istedi�inizden eminmisiniz?";
    var $_PHPSHOP_THANKYOU = "Sipari�iniz i�in te�ekk�rler.";
    var $_PHPSHOP_NOT_SHIPPED = "Hen�z g�nderilmedi";
    var $_PHPSHOP_EMAIL_SENDTO = "Teyit iletisinin g�nderildi�i e-posta adresi";
    var $_PHPSHOP_NO_USER_TO_SELECT = "�zg�n�z, com_phpshop kullan�c� listesine ekleyebilece�iniz MOS - kullan�c�s� yoktur.";
    
    // Error messages
    
    var $_PHPSHOP_ERROR = "HATA";
    var $_PHPSHOP_MOD_NOT_REG = "Mod�l kaydedilmemi�tir.";
    var $_PHPSHOP_MOD_ISNO_REG = " Ge�erli bir phpShop mod�l� de�il.";
    var $_PHPSHOP_MOD_NO_AUTH = "�stenen mod�le giri� izniniz yok.";
    var $_PHPSHOP_PAGE_404_1 = "Sayfa bulunamad�";
    var $_PHPSHOP_PAGE_404_2 = "Verilen dosya bulunamad�. Bulunamayan dosya:";
    var $_PHPSHOP_PAGE_403 = "Yetersiz giri� hakk�";
    var $_PHPSHOP_FUNC_NO_EXEC = "�al��t�rma yetkiniz yok ";
    var $_PHPSHOP_FUNC_NOT_REG = "Fonksiyon kay�tl� de�ildir.";
    var $_PHPSHOP_FUNC_ISNO_REG = " Ge�erli bir phpShop fonksiyonu de�ildir.";
    
    /*#####################
    MODULE ADMIN
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADMIN_MOD = "Y�netim";
    
    
    // User List
    var $_PHPSHOP_USER_LIST_MNU = "Kullan�c�lar� Listele";
    var $_PHPSHOP_USER_LIST_LBL = "Kullan�c� Listesi";
    var $_PHPSHOP_USER_LIST_USERNAME = "Kullan�c�";
    var $_PHPSHOP_USER_LIST_FULL_NAME = "Tam Ad�";
    var $_PHPSHOP_USER_LIST_GROUP = "Grubu";
    
    // User Form
    var $_PHPSHOP_USER_FORM_MNU = "Kullan�c� ekle";
    var $_PHPSHOP_USER_FORM_LBL = "Kullan�c� Bilgisi Ekleme/G�nleme";
    var $_PHPSHOP_USER_FORM_BILLTO_LBL = "Fatura Bilgileri";
    var $_PHPSHOP_USER_FORM_SHIPTO_LBL = "Nakliye Adresi";
    var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = "Adres Ekleme";
    var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = "Adres Rumuzu";
    var $_PHPSHOP_USER_FORM_FIRST_NAME = "Ad�";
    var $_PHPSHOP_USER_FORM_LAST_NAME = "Soyad�";
    var $_PHPSHOP_USER_FORM_MIDDLE_NAME = "�kinci Ad�";
    var $_PHPSHOP_USER_FORM_TITLE = "�nvan�";
    var $_PHPSHOP_USER_FORM_USERNAME = "Kullan�c� Ad�";
    var $_PHPSHOP_USER_FORM_PASSWORD_1 = "Parola";
    var $_PHPSHOP_USER_FORM_PASSWORD_2 = "Parola Tekrar�";
    var $_PHPSHOP_USER_FORM_PERMS = "Yetkileri";
    var $_PHPSHOP_USER_FORM_COMPANY_NAME = "Firma Ad�";
    var $_PHPSHOP_USER_FORM_ADDRESS_1 = "Adres 1";
    var $_PHPSHOP_USER_FORM_ADDRESS_2 = "Adres 2";
    var $_PHPSHOP_USER_FORM_CITY = "�ehir";
    var $_PHPSHOP_USER_FORM_STATE = "�l�e/Semt";
    var $_PHPSHOP_USER_FORM_ZIP = "Posta Kodu";
    var $_PHPSHOP_USER_FORM_COUNTRY = "�lke";
    var $_PHPSHOP_USER_FORM_PHONE = "Telefon";
    var $_PHPSHOP_USER_FORM_FAX = "Faks";
    var $_PHPSHOP_USER_FORM_EMAIL = "E-posta";
    
    // Module List
    var $_PHPSHOP_MODULE_LIST_MNU = "Mod�l Listeleme";
    var $_PHPSHOP_MODULE_LIST_LBL = "Mod�l Listesi";
    var $_PHPSHOP_MODULE_LIST_NAME = "Mod�l Ad�";
    var $_PHPSHOP_MODULE_LIST_PERMS = "Mod�l Yetkileri";
    var $_PHPSHOP_MODULE_LIST_FUNCTIONS = "Fonksiyonlar";
    var $_PHPSHOP_MODULE_LIST_ORDER = "Sipari� Listeleme";
    
    // Module Form
    var $_PHPSHOP_MODULE_FORM_MNU = "Mod�l Ekle";
    var $_PHPSHOP_MODULE_FORM_LBL = "Mod�l Bilgisi";
    var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = "Mod�l etiketi (�st Men� i�in)";
    var $_PHPSHOP_MODULE_FORM_NAME = "Mod�l Ad�";
    var $_PHPSHOP_MODULE_FORM_PERMS = "Mod�l Yetkileri";
    var $_PHPSHOP_MODULE_FORM_HEADER = "Mod�l Ba�l���";
    var $_PHPSHOP_MODULE_FORM_FOOTER = "Mod�l Dipnotu";
    var $_PHPSHOP_MODULE_FORM_MENU = "Mod� Amir men�s�nde g�sterilsin mi";
    var $_PHPSHOP_MODULE_FORM_ORDER = "Sipari� G�ster";
    var $_PHPSHOP_MODULE_FORM_DESCRIPTION = "Mod�l Tan�m�";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = "Dil Kodu";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = "Dil Dosyas�";
    
    // Function List
    var $_PHPSHOP_FUNCTION_LIST_MNU = "Fonksiyon Listeleme";
    var $_PHPSHOP_FUNCTION_LIST_LBL = "Fonksiyon Listesi";
    var $_PHPSHOP_FUNCTION_LIST_NAME = "Fonksiyon Ad�";
    var $_PHPSHOP_FUNCTION_LIST_CLASS = "S�n�f Ad�";
    var $_PHPSHOP_FUNCTION_LIST_METHOD = "S�n�f Metodu";
    var $_PHPSHOP_FUNCTION_LIST_PERMS = "Yetkiler";
    
    // Module Form
    var $_PHPSHOP_FUNCTION_FORM_MNU = "Fonksiyon Ekleme";
    var $_PHPSHOP_FUNCTION_FORM_LBL = "Fonksiyon Bilgisi";
    var $_PHPSHOP_FUNCTION_FORM_NAME = "Fonksiyon Ad�";
    var $_PHPSHOP_FUNCTION_FORM_CLASS = "S�n�f Ad�";
    var $_PHPSHOP_FUNCTION_FORM_METHOD = "S�n�f Metodu";
    var $_PHPSHOP_FUNCTION_FORM_PERMS = "Fonksiyon Yetkisi";
    var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = "Fonksiyon Tan�m�";
    
    // Currency form and list
    var $_PHPSHOP_CURRENCY_LIST_MNU = "Kur Listeleme";
    var $_PHPSHOP_CURRENCY_LIST_LBL = "Kur Listesi";
    var $_PHPSHOP_CURRENCY_LIST_ADD = "Kur Ekle";
    var $_PHPSHOP_CURRENCY_LIST_NAME = "Kur Ad�";
    var $_PHPSHOP_CURRENCY_LIST_CODE = "Kur Kodu";
    
    // Country form and list
    var $_PHPSHOP_COUNTRY_LIST_MNU = "�lke Listeleme";
    var $_PHPSHOP_COUNTRY_LIST_LBL = "�lke Listesi";
    var $_PHPSHOP_COUNTRY_LIST_ADD = "�lke Ekle";
    var $_PHPSHOP_COUNTRY_LIST_NAME = "�lke Ad�";
    var $_PHPSHOP_COUNTRY_LIST_3_CODE = "�lke Kodu(3)";
    var $_PHPSHOP_COUNTRY_LIST_2_CODE = "�lke Kodu(2)";
    
    /*#####################
    MODULE CHECKOUT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADDRESS = "Adresi";
    var $_PHPSHOP_CONTINUE = "Devam";
    
    # Some messages
    var $_PHPSHOP_EMPTY_CART = "Al��veri� sepetiniz bo�.";
    
    
    /*#####################
    MODULE ISShipping
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ISSHIPPING_MOD = "InterShipper";
    
    
    // Shipping Ping
    var $_PHPSHOP_ISSHIP_PING_MNU = "Ping InterShipper Sunucusu";
    var $_PHPSHOP_ISSHIP_PING_LBL = "InterShipper-Sunucu Ping �ste�i";
    var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = "InterShipper Ping Hatas�";
    var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = "InterShipper Ping Ba�ar�l�";
    var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = "Ta��y�c�";
    var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = "Yan�t (Response)<BR>Zaman�";
    var $_PHPSHOP_ISSHIP_PING_TIME_LBL = "San.";
    
    // Shipping List
    var $_PHPSHOP_ISSHIP_LIST_MNU = "Nakliye Metodu Listeleme";
    var $_PHPSHOP_ISSHIP_LIST_LBL = "Aktif Nakliye Metodu";
    var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = "Nakliye Metodlar�";
    var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = "Aktif";
    var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = "Handling Charge";
    var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = "Ula�t�rma zaman�";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = "d�z de�er";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = "Y�zde";
    var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = "g�n";
    var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = "A��r Y�k";
    
    // Dynamic Shipping Form
    var $_PHPSHOP_ISSHIP_FORM_MNU = "Nakliye Metodu Ayarlar�";
    var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = "Nakliye Metodu Ekleme";
    var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = "Nakliye Metodu Ayar�";
    var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = "Yenileme";
    var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = "Nakliye Metodu";
    var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = "Aktifle�tir";
    var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = "Handling Charge";
    var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = "Lead Time";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = "d�z oran";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = "y�zde";
    var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = "g�n";
    var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = "A��r Y�k";
    
    
    
    /*#####################
    MODULE ORDER
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_ORDER_MOD = "Sipari�";
    
    // Some menu options 
    var $_PHPSHOP_ORDER_CONFIRM_MNU = "Sipari� Teyidi";
    var $_PHPSHOP_ORDER_CANCEL_MNU = "Sipari� �ptali";
    var $_PHPSHOP_ORDER_PRINT_MNU = "Sipari� Yazd�rma";
    var $_PHPSHOP_ORDER_DELETE_MNU = "Sipari� Silme";
    
    // Order List
    var $_PHPSHOP_ORDER_LIST_MNU = "Sipari�leri Listele";
    var $_PHPSHOP_ORDER_LIST_LBL = "Sipari� Listesi";
    var $_PHPSHOP_ORDER_LIST_ID = "Sipari� No";
    var $_PHPSHOP_ORDER_LIST_CDATE = "Sipari� Tarihi";
    var $_PHPSHOP_ORDER_LIST_MDATE = "Son D�zenleme";
    var $_PHPSHOP_ORDER_LIST_STATUS = "Durum";
    var $_PHPSHOP_ORDER_LIST_TOTAL = "Ara Toplam";
    var $_PHPSHOP_ORDER_ITEM = "Sipari�lerim";
    
    // Order print
    var $_PHPSHOP_ORDER_PRINT_PO_LBL = "Al�nan Sipari�";
    var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = "Sipari� No";
    var $_PHPSHOP_ORDER_PRINT_PO_DATE = "Sipari� Tarihi";
    var $_PHPSHOP_ORDER_PRINT_PO_STATUS = "Sipari� Durumu";
    var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = "M��teri Bilgisi";
    var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = "Fatura Bilgisi";
    var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = "Nakliye Bilgisi";
    var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = "Fatura Adresi";
    var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = "Nakliye Adresi";
    var $_PHPSHOP_ORDER_PRINT_NAME = "�sim";
    var $_PHPSHOP_ORDER_PRINT_COMPANY = "Firma";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = "Adres 1";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = "Adres 2";
    var $_PHPSHOP_ORDER_PRINT_CITY = "�ehir";
    var $_PHPSHOP_ORDER_PRINT_STATE = "�l�e/Semt";
    var $_PHPSHOP_ORDER_PRINT_ZIP = "Posta Kodu";
    var $_PHPSHOP_ORDER_PRINT_COUNTRY = "�lke";
    var $_PHPSHOP_ORDER_PRINT_PHONE = "Tel.";
    var $_PHPSHOP_ORDER_PRINT_FAX = "Faks";
    var $_PHPSHOP_ORDER_PRINT_EMAIL = "Eposta";
    var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = "Sipari�lerim";
    var $_PHPSHOP_ORDER_PRINT_QUANTITY = "Miktar";
    var $_PHPSHOP_ORDER_PRINT_QTY = "Mik.";
    var $_PHPSHOP_ORDER_PRINT_SKU = "Stok";
    var $_PHPSHOP_ORDER_PRINT_PRICE = "Fiyat";
    var $_PHPSHOP_ORDER_PRINT_TOTAL = "Toplam";
    var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = "Ara Toplam";
    var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = "Toplam Vergi";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING = "Nakliye";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = "Nakliye Vergisi";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = "�deme Y�ntemi";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = "Hesap Ad�";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = "Hesap  No";
    var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = "Ge�erlilik Tarihi";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = "�deme Logu";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = "Nakliye Bilgisi";
    var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = "�deme Bilgisi";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = "Ta��y�c�";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = "Nakliye Modu";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = "Sevk Tarihi";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = "Nakliye Fiyat�";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_MNU = "Sipari� Durum Tipi Listeleme";
    var $_PHPSHOP_ORDER_STATUS_FORM_MNU = "Sipari� Durum Tipi Ekleme";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_CODE = "Sipari� Durum Kodu";
    var $_PHPSHOP_ORDER_STATUS_LIST_NAME = "Sipari� Durum  Ad�";
    
    var $_PHPSHOP_ORDER_STATUS_FORM_LBL = "Sipari� Durumu";
    var $_PHPSHOP_ORDER_STATUS_FORM_CODE = "Sipari� Durum Kodu";
    var $_PHPSHOP_ORDER_STATUS_FORM_NAME = "Sipari� Durum Ad�";
    var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = "Sipari� Listeleme";
    
    
    /*#####################
    MODULE PRODUCT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_PRODUCT_MOD = "�r�nler";
    
    var $_PHPSHOP_CURRENT_PRODUCT = "Mevcut �r�n";
    var $_PHPSHOP_CURRENT_ITEM = "Mevcut �ge";
    
    // Product Inventory
    var $_PHPSHOP_PRODUCT_INVENTORY_LBL = "Stokta �r�n";
    var $_PHPSHOP_PRODUCT_INVENTORY_MNU = "Stok G�r�nt�le";
    var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = "Fiyat";
    var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = "Adet";
    var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = "A��rl�k";
    // Product List
    var $_PHPSHOP_PRODUCT_LIST_MNU = "�r�n Listeleme";
    var $_PHPSHOP_PRODUCT_LIST_LBL = "�r�n Listesi";
    var $_PHPSHOP_PRODUCT_LIST_NAME = "�r�n  Ad�";
    var $_PHPSHOP_PRODUCT_LIST_SKU = "Stok";
    var $_PHPSHOP_PRODUCT_LIST_PUBLISH = "Yay�nla";
    
    // Product Form
    var $_PHPSHOP_PRODUCT_FORM_MNU = "�r�n Ekle";
    var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = "Bu �r�n� g�nle";
    var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = "Ma�azadaki �r�nleri �nizleme";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = "�ge Ekle";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = "Ba�ka �ge Ekle";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = "Yeni �r�n";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = "�r�n G�nleme";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = "�r�n Bilgisi";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = "�r�n Durumu";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = "�r�n Boyutlar� ve A��rl���";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = "�r�n Resimleri";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = "Yeni �r�n";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = "�r�n G�nleme";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = "�ge Bilgisi";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = "�ge Durumu";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = "�ge Boyutlar� ve A��rl���";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = "�ge Resimleri";
    var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = "BA�l� �r�ne geri d�n";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = "To update actual image, type in path to new image.";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = "Mevcut resmi silmek i�in \"none\" yaz�n.";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = "�r�n �geleri";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = "�ge �zellikleri";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = "Bu �r�n ve �r�ne ba�l� �geleri silmek istedi�inizden eminmisiniz?";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = "Bu �geyi silmek istedi�inizden eminmisiniz?";
    var $_PHPSHOP_PRODUCT_FORM_VENDOR = "Sat�c�";
    var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = "�reticiler";
    var $_PHPSHOP_PRODUCT_FORM_SKU = "Stok";
    var $_PHPSHOP_PRODUCT_FORM_NAME = "Ad�";
    var $_PHPSHOP_PRODUCT_FORM_URL = "URL";
    var $_PHPSHOP_PRODUCT_FORM_CATEGORY = "Kategori";
    var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = "Bay Fiyat�";
    var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = "Product Price (Net)";
    var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = "Flypage Description";
    var $_PHPSHOP_PRODUCT_FORM_S_DESC = "K�sa Tan�mlama";
    var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = "Stokta";
    var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = "Sipari�";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = "Tedarik Tarihi";
    var $_PHPSHOP_PRODUCT_FORM_SPECIAL = "On Special";
    var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = "�ndirim Tipi";
    var $_PHPSHOP_PRODUCT_FORM_PUBLISH = "Yay�nlans�n m�?";
    var $_PHPSHOP_PRODUCT_FORM_LENGTH = "Uzunluk";
    var $_PHPSHOP_PRODUCT_FORM_WIDTH = "Geni�lik";
    var $_PHPSHOP_PRODUCT_FORM_HEIGHT = "Y�kseklik";
    var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = "�l�� Birimi";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT = "A��rl�k";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = "�l�� Birimi";
    var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = "K���k resim";
    var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = "Orijinal Resim";
    
    // Product Display
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = "�r�n Ekleme Sonu�lar�";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = "�r�n G�nleme Sonu�lar�";
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = "�ge Ekleme Sonu�lar�";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = "�ge g�nleme sonu�lar�";
    var $_PHPSHOP_PRODUCT_CSV_UPLOAD = "CSV y�kleme kullan";
    var $_PHPSHOP_PRODUCT_FOLDERS = "�r�n Dizinleri";
    
    // Product Category List
    var $_PHPSHOP_CATEGORY_LIST_MNU = "Kategori Listele";
    var $_PHPSHOP_CATEGORY_LIST_LBL = "Kategori  A�ac�";
    
    // Product Category Form
    var $_PHPSHOP_CATEGORY_FORM_MNU = "Kategori Ekleme";
    var $_PHPSHOP_CATEGORY_FORM_LBL = "Kategori Bilgisi";
    var $_PHPSHOP_CATEGORY_FORM_NAME = "Kategori Ad�";
    var $_PHPSHOP_CATEGORY_FORM_PARENT = "Ba�l�";
    var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = "Kategori Tan�m�";
    var $_PHPSHOP_CATEGORY_FORM_PUBLISH = "Yay�nlans�n m�?";
    var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = "Kategori Flypage";
    
    // Product Attribute List
    var $_PHPSHOP_ATTRIBUTE_LIST_MNU = "Nitelik Listeleme";
    var $_PHPSHOP_ATTRIBUTE_LIST_LBL = "Nitelik Listesi";
    var $_PHPSHOP_ATTRIBUTE_LIST_NAME = "Nitelik Ad�";
    var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = "Sipari� Liteleme";
    
    // Product Attribute Form
    var $_PHPSHOP_ATTRIBUTE_FORM_MNU = "Nitelik Ekle";
    var $_PHPSHOP_ATTRIBUTE_FORM_LBL = "Nitelik Formu";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = "�r�n i�in Yeni nitelik";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = "�r�n i�in nitelik g�nleme";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = "�ge i�in Yeni nitelik";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = "�ge i�in nitelik g�nleme";
    var $_PHPSHOP_ATTRIBUTE_FORM_NAME = "�ge Ad�";
    var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = "Sipari� Liteleme";
    
    // Product Price List
    var $_PHPSHOP_PRICE_LIST_MNU = "Kategori Listeleme";
    var $_PHPSHOP_PRICE_LIST_LBL = "Fiyat A�ac�";
    var $_PHPSHOP_PRICE_LIST_FOR_LBL = "F�yat";
    var $_PHPSHOP_PRICE_LIST_GROUP_NAME = "Grup Ad�";
    var $_PHPSHOP_PRICE_LIST_PRICE = "Fiyat";
    var $_PHPSHOP_PRODUCT_LIST_CURRENCY = "Kur";
    
    // Product Price Form
    var $_PHPSHOP_PRICE_FORM_MNU = "Fiyat Ekleme";
    var $_PHPSHOP_PRICE_FORM_LBL = "Fiyat Bilgisi";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = "�r�n i�in Yeni Fiyat gir";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = "�r�n fiyat� g�nle";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = "�ge i�in Yeni Fiyat gir";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = "�ge i�in Fiyat G�nle";
    var $_PHPSHOP_PRICE_FORM_PRICE = "Fiyat";
    var $_PHPSHOP_PRICE_FORM_CURRENCY = "Kur";
    var $_PHPSHOP_PRICE_FORM_GROUP = "M��teri Grubu";
    
    
    /*#####################
    MODULE REPORT BASIC
    #####################*/
    # Some LABELs
    var $_PHPSHOP_REPORTBASIC_MOD = "Temel Rapor";
    var $_PHPSHOP_RB_INDIVIDUAL = "�zel �r�n Listeleme";
    var $_PHPSHOP_RB_SALE_TITLE = "Sat�� Raporlama";
    
    /* labels for rpt_sales */
    var $_PHPSHOP_RB_SALES_PAGE_TITLE = "Sat�� Faaliyetleri �zleme";
    
    var $_PHPSHOP_RB_INTERVAL_TITLE = "Aral�k Ayar�";
    var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = "Ayl�k";
    var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = "Haftal�k";
    var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = "G�nl�k";
    
    var $_PHPSHOP_RB_THISMONTH_BUTTON = "Bu Ay";
    var $_PHPSHOP_RB_LASTMONTH_BUTTON = "Son Ay";
    var $_PHPSHOP_RB_LAST60_BUTTON = "Son 60 g�n";
    var $_PHPSHOP_RB_LAST90_BUTTON = "Son 90 g�n";
    
    var $_PHPSHOP_RB_START_DATE_TITLE = "Ba�lama:";
    var $_PHPSHOP_RB_END_DATE_TITLE = "Bitirme:";
    var $_PHPSHOP_RB_SHOW_SEL_RANGE = "Se�ili de�eri g�ster";
    var $_PHPSHOP_RB_REPORT_FOR = "Raporlama:";
    var $_PHPSHOP_RB_DATE = "Tarih";
    var $_PHPSHOP_RB_ORDERS = "Sipari�ler";
    var $_PHPSHOP_RB_TOTAL_ITEMS = "Toplam Sat��lar (Adet)";
    var $_PHPSHOP_RB_REVENUE = "Gelir";
    var $_PHPSHOP_RB_PRODLIST = "�r�n Listeleme";
    
    
    
    /*#####################
    MODULE SHOP
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOP_MOD = "Ma�aza";
    var $_PHPSHOP_PRODUCT_THUMB_TITLE = "K���k Resim";
    var $_PHPSHOP_PRODUCT_PRICE_TITLE = "Fiyat";
    var $_PHPSHOP_ORDER_STATUS_P = "Bekliyor";
    var $_PHPSHOP_ORDER_STATUS_C = "Teyit Edildi";
    var $_PHPSHOP_ORDER_STATUS_X = "�ptal Edildi";
    
    
    # Some messages
    var $_PHPSHOP_ORDER_BUTTON = "Sipari�";
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOPPER_MOD = "Ma�aza Sahibi";
    
    
    
    // Shopper List
    var $_PHPSHOP_SHOPPER_LIST_MNU = "Ma�aza Sahiplerini Listele";
    var $_PHPSHOP_SHOPPER_LIST_LBL = "Ma�azac�lar Listesi";
    var $_PHPSHOP_SHOPPER_LIST_USERNAME = "Kullan�c� Ad�";
    var $_PHPSHOP_SHOPPER_LIST_NAME = "Tam �smi";
    var $_PHPSHOP_SHOPPER_LIST_GROUP = "Grubu";
    
    // Shopper Form
    var $_PHPSHOP_SHOPPER_FORM_MNU = "Ma�aza Sahibi Ekle";
    var $_PHPSHOP_SHOPPER_FORM_LBL = "Sahip Bilgisi";
    var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = "Fatura Bilgisi";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = "Bilgi";
    var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = "Nakliye Bilgisi";
    var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = "Adres Ekleme";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = "Adres Rumuzu";
    var $_PHPSHOP_SHOPPER_FORM_USERNAME = "Kullan�c� Ad�";
    var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = "Ad�";
    var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = "Soyad�";
    var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = "�kinci Ad�";
    var $_PHPSHOP_SHOPPER_FORM_TITLE = "�nvan�";
    var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = "Al��veri� Yapan";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = "Parolas�";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = "Parola Teyidi";
    var $_PHPSHOP_SHOPPER_FORM_GROUP = "M��teri Grubu";
    var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = "Firma Ad�";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = "Adres 1";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = "Adres 2";
    var $_PHPSHOP_SHOPPER_FORM_CITY = "�ehir";
    var $_PHPSHOP_SHOPPER_FORM_STATE = "�l�e/Semt";
    var $_PHPSHOP_SHOPPER_FORM_ZIP = "Posta Kodu";
    var $_PHPSHOP_SHOPPER_FORM_COUNTRY = "�lke";
    var $_PHPSHOP_SHOPPER_FORM_PHONE = "Telefon";
    var $_PHPSHOP_SHOPPER_FORM_FAX = "Faks";
    var $_PHPSHOP_SHOPPER_FORM_EMAIL = "Eposta";
    
    // Shopper Group List
    var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = "M��teri Grubu Listeleme";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = "M��teri Grubu Listesi";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = "Grup Ad�";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = "Grup A��klamas�";
    
    
    // Shopper Group Form
    var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = "Ma�aza Sahibi Grubu Formu";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = "Ma�aza Sahibi Grubu Ekleme";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = "Grup Ad�";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = "Grup A��klamas�";
    
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_STORE_MOD = "Ma�azam";
    
    
    // Store Form
    var $_PHPSHOP_STORE_FORM_MNU = "Ma�aza D�zenleme";
    var $_PHPSHOP_STORE_FORM_LBL = "Ma�aza Bilgisi";
    var $_PHPSHOP_STORE_FORM_CONTACT_LBL = "�leti�im Bilgisi";
    var $_PHPSHOP_STORE_FORM_FULL_IMAGE = "Tam Resim";
    var $_PHPSHOP_STORE_FORM_UPLOAD = "Resim Y�kle";
    var $_PHPSHOP_STORE_FORM_STORE_NAME = "Ma�aza Ad�";
    var $_PHPSHOP_STORE_FORM_COMPANY_NAME = "Ma�aza Firma Ad�";
    var $_PHPSHOP_STORE_FORM_ADDRESS_1 = "Adres 1";
    var $_PHPSHOP_STORE_FORM_ADDRESS_2 = "Adres 2";
    var $_PHPSHOP_STORE_FORM_CITY = "�ehir";
    var $_PHPSHOP_STORE_FORM_STATE = "�l�e/Semt";
    var $_PHPSHOP_STORE_FORM_COUNTRY = "�lke";
    var $_PHPSHOP_STORE_FORM_ZIP = "Posta Kodu";
    var $_PHPSHOP_STORE_FORM_PHONE = "Telefon";
    var $_PHPSHOP_STORE_FORM_CURRENCY = "Kur";
    var $_PHPSHOP_STORE_FORM_CATEGORY = "Ma�aza Kategorisi";
    var $_PHPSHOP_STORE_FORM_LAST_NAME = "Soyad�";
    var $_PHPSHOP_STORE_FORM_FIRST_NAME = "Ad�";
    var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = "�kinci Ad�";
    var $_PHPSHOP_STORE_FORM_TITLE = "�nvan�";
    var $_PHPSHOP_STORE_FORM_PHONE_1 = "TEl 1";
    var $_PHPSHOP_STORE_FORM_PHONE_2 = "TEl 2";
    var $_PHPSHOP_STORE_FORM_FAX = "Faks";
    var $_PHPSHOP_STORE_FORM_EMAIL = "E-posta";
    var $_PHPSHOP_STORE_FORM_IMAGE_PATH = "Resim Yolu";
    var $_PHPSHOP_STORE_FORM_DESCRIPTION = "A��klamalar";
    
    
    
    var $_PHPSHOP_PAYMENT = "�deme";
    // Payment Method List
    var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = "�deme Y�ntemlerini Listeleme";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = "�deme Y�ntemi Listesi";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = "Ad�";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = "Kodu";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = "�ndirim";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = "Ma�azac� Grubu";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = "�deme Y�ntemi Tipi";
    
    // Payment Method Form
    var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = "�deme Y�ntemi Ekle";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = "�deme Y�ntemi Formu";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = "�deme Form Ad�";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = "Al�c� Grubu";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = "�ndirim";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = "Kod";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = "Sipari� Listeleme";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = "�deme Y�ntemi Tipi";
    
    
    
    /*#####################
    MODULE TAX
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_TAX_MOD = "Vergi";
    
    // User List
    var $_PHPSHOP_TAX_RATE = "Vergi Oranlar�";
    var $_PHPSHOP_TAX_LIST_MNU = "Vergi Oranlar� Listeleme";
    var $_PHPSHOP_TAX_LIST_LBL = "Vergi Oranlar� Listesi";
    var $_PHPSHOP_TAX_LIST_STATE = "Cergi Dairesi";
    var $_PHPSHOP_TAX_LIST_COUNTRY = "Vergi �lkesi";
    var $_PHPSHOP_TAX_LIST_RATE = "Vergi Oran�";
    
    // User Form
    var $_PHPSHOP_TAX_FORM_MNU = "Vergi Oran� Ekleme";
    var $_PHPSHOP_TAX_FORM_LBL = "Vergi Bilgisi Ekleme";
    var $_PHPSHOP_TAX_FORM_STATE = "Vergi Dairesi Ekleme";
    var $_PHPSHOP_TAX_FORM_COUNTRY = "Vergi �lkesi";
    var $_PHPSHOP_TAX_FORM_RATE = "Vergi Oran�";
    
    
    
    
    /*#####################
    MODULE VENDOR
    #####################*/
    
    
    
    # Some LABELs
    var $_PHPSHOP_VENDOR_MOD = "Sat�c�";
    var $_PHPSHOP_VENDOR_ADMIN = "Sat�c�lar";
    
    
    // Vendor List
    var $_PHPSHOP_VENDOR_LIST_MNU = "Sat�c�lar� Listeleme";
    var $_PHPSHOP_VENDOR_LIST_LBL = "Sat�c� Listesi";
    var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = "Satucu Ad�";
    var $_PHPSHOP_VENDOR_LIST_ADMIN = "Y�netici";
    
    // Vendor Form
    var $_PHPSHOP_VENDOR_FORM_MNU = "Sat�c� Ekleme";
    var $_PHPSHOP_VENDOR_FORM_LBL = "Bilgi Ekleme";
    var $_PHPSHOP_VENDOR_FORM_INFO_LBL = "Sat�c� Bilgisi";
    var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = "�leti�im Bilgisi";
    var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = "B�y�k Resim";
    var $_PHPSHOP_VENDOR_FORM_UPLOAD = "Resim Y�kleme";
    var $_PHPSHOP_VENDOR_FORM_STORE_NAME = "Sat�c� Ma�aza Ad�";
    var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = "Satucu �irket Ad�";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = "Adres 1";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = "Adres 2";
    var $_PHPSHOP_VENDOR_FORM_CITY = "�ehir";
    var $_PHPSHOP_VENDOR_FORM_STATE = "�l�e/Semt";
    var $_PHPSHOP_VENDOR_FORM_COUNTRY = "�lke";
    var $_PHPSHOP_VENDOR_FORM_ZIP = "Posta Kodu";
    var $_PHPSHOP_VENDOR_FORM_PHONE = "Telefon";
    var $_PHPSHOP_VENDOR_FORM_CURRENCY = "Kur";
    var $_PHPSHOP_VENDOR_FORM_CATEGORY = "Sat�c� Kategorisi";
    var $_PHPSHOP_VENDOR_FORM_LAST_NAME = "Soyad�";
    var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = "Ad�";
    var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = "�kinci Ad�";
    var $_PHPSHOP_VENDOR_FORM_TITLE = "�nvan";
    var $_PHPSHOP_VENDOR_FORM_PHONE_1 = "Tel 1";
    var $_PHPSHOP_VENDOR_FORM_PHONE_2 = "Tel 2";
    var $_PHPSHOP_VENDOR_FORM_FAX = "Faks";
    var $_PHPSHOP_VENDOR_FORM_EMAIL = "E-posta";
    var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = "Resim Yolu";
    var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = "A��klama";
    
    
    // Vendor Category List
    var $_PHPSHOP_VENDOR_CAT_LIST_MNU = "Sat�c� Kategorileri";
    var $_PHPSHOP_VENDOR_CAT_LIST_LBL = "Sat�c� Kategori Listesi";
    var $_PHPSHOP_VENDOR_CAT_NAME = "Kategori Ad�";
    var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = "Kategori A��klamas�";
    var $_PHPSHOP_VENDOR_CAT_VENDORS = "Sat�c�lar";
    
    // Vendor Category Form
    var $_PHPSHOP_VENDOR_CAT_FORM_MNU = "Sat�c� Kategori Ekleme";
    var $_PHPSHOP_VENDOR_CAT_FORM_LBL = "Sat�c� Kategori Formu";
    var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = "Kategori Bilgisi";
    var $_PHPSHOP_VENDOR_CAT_FORM_NAME = "Kategori Ad�";
    var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = "Kategori A��klamas�";
    
    /*#####################
    MODULE MANUFACTURER
    #####################*/

    # Some LABELs
    var $_PHPSHOP_MANUFACTURER_MOD = "�retici";
    var $_PHPSHOP_MANUFACTURER_ADMIN = "�reticiler";
    
    
    // Manufacturer List
    var $_PHPSHOP_MANUFACTURER_LIST_MNU = "�reticileri Listeleme";
    var $_PHPSHOP_MANUFACTURER_LIST_LBL = "�retici Listesi";
    var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = "�retici Ad�";
    var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = "Y�netim";
    
    // Manufacturer Form
    var $_PHPSHOP_MANUFACTURER_FORM_MNU = "�retici Ekle";
    var $_PHPSHOP_MANUFACTURER_FORM_LBL = "Bilgi Ekle";
    var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = "�retici Bilgisi";
    var $_PHPSHOP_MANUFACTURER_FORM_NAME = "�retici  Ad�";
    var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = "�retici Grubu";
    var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = "E-posta";
    var $_PHPSHOP_MANUFACTURER_FORM_URL = "�retici Web sayfas�na ba�lant� (URL)";
    var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = "Tan�mlama";
    
    
    // Manufacturer Category List
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = "�retici Gruplar�n� Listele";
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = "�retici Grubu Listesi";
    var $_PHPSHOP_MANUFACTURER_CAT_NAME = "Grup Ad�";
    var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = "Grup A��klamas�";
    var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = "�reticiler";
    
    // Manufacturer Category Form
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = "�retici Grubu Ekle";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = "�retici Grup Formu";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = "Grup Bilgisi";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = "Grup Ad�";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = "Grup A��klamas�";
    
    
    /*#####################
    Modul HELP
    #####################*/
    var $_PHPSHOP_HELP_MOD = "Yard�m";
    
    // 210104 start
    
    // basketform
    var $_PHPSHOP_CART_ACTION = "Eylemler";
    var $_PHPSHOP_CART_UPDATE = "G�leme";
    
    //230104
    var $_PHPSHOP_CART_DELETE = "Sil";
    
    //shopbrowse form
    
    var $_PHPSHOP_PRODUCT_PRICETAG = "Fiyat";
    var $_PHPSHOP_PRODUCT_CALL = "Fiyatlar i�in arayabilirsiniz.";
    var $_PHPSHOP_PRODUCT_PREVIOUS = "�nceki";
    var $_PHPSHOP_PRODUCT_NEXT = "SONRAK�";
    
    //ro_basket
    
    var $_PHPSHOP_CART_TAX = "Vergi";
    var $_PHPSHOP_CART_SHIPPING = "Nakliye";
    var $_PHPSHOP_CART_TOTAL = "Toplam";
    
    //CHECKOUT.INDEX
    
    var $_PHPSHOP_CHECKOUT_NEXT = "Sonraki";
    var $_PHPSHOP_CHECKOUT_REGISTER = "KAYIT";
    
    //CHECKOUT.CONFIRM
    
    var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = "�deme Bilgisi";
    var $_PHPSHOP_CHECKOUT_CONF_COMPANY = "Firma";
    var $_PHPSHOP_CHECKOUT_CONF_NAME = "�sim";
    var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = "Adres";
    var $_PHPSHOP_CHECKOUT_CONF_PHONE = "Telefon";
    var $_PHPSHOP_CHECKOUT_CONF_FAX = "Faks";
    var $_PHPSHOP_CHECKOUT_CONF_EMAIL = "E-posta";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = "Nakliye Bilgisi";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = "Firma";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = "�sim";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = "Adres";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = "Tel.";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = "Faks";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = "�deme Bilgisi";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = "Kart Sahibi";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = "�deme Y�ntemi";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = "Kredi Kart No";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = "Ge�erlilik Tarihi";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = "Sipari� Bitirme";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = "Kredi Kart� ile �deme se�ildi�inde istenen bilgi";
    
    
    var $_PHPSHOP_ZONE_MOD = "B�lgesel Nakliye";
    
    var $_PHPSHOP_ZONE_LIST_MNU = "B�lge Listele";
    var $_PHPSHOP_ZONE_FORM_MNU = "B�lge Ekle";
    var $_PHPSHOP_ZONE_ASSIGN_MNU = "B�lgeye Y�nlendirme";
    
    // assign zone List
    var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = "�lke";
    var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = "Mevcut B�lge";
    var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = "B�lgeye Y�nlendir";
    var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = "G�nle";
    var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = "B�lgelere Y�nlendir";
    
    // zone Form
    var $_PHPSHOP_ZONE_FORM_NAME_LBL = "B�lge Ad�";
    var $_PHPSHOP_ZONE_FORM_DESC_LBL = "B�lge Tan�m�";
    var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = "�ge ba��na B�lge Maliyeti";
    var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = "B�lge Maliyet Limiti";
    
    // List of zones
    var $_PHPSHOP_ZONE_LIST_LBL = "B�lge Listesi";
    var $_PHPSHOP_ZONE_LIST_NAME_LBL = "B�lge Ad�";
    var $_PHPSHOP_ZONE_LIST_DESC_LBL = "B�lge Tan�m�";
    var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = "�ge Ba��na B�lge Maliyeti";
    var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = "B�lge Maliyet Limiti";
    
    var $_PHPSHOP_LOGIN_FIRST = "L�tfen, oturum a��n (login) ya da �ncelikle sitemize kay�t olun.(<br>Te�ekk�rler";
    var $_PHPSHOP_STORE_FORM_TOS = "Hzmet Ko�ullar�";
    var $_PHPSHOP_AGREE_TO_TOS = "L�tfen, �ncelikle Hizmet Ko�ullar�m�z� kabul edin.";
    var $_PHPSHOP_I_AGREE_TO_TOS = "Hizmet Ko�ullar�n� kabul ediyorum";
    
    var $_PHPSHOP_LEAVE_BLANK = "(BO�LUK b�rak�n e�er <br />�zel bir Php dosyas� yoksa!)";
    var $_PHPSHOP_RETURN_LOGIN = "Sitemiz �yesi iseniz, L�tfen oturum a��n (Log In)";
    var $_PHPSHOP_NEW_CUSTOMER = "Yeni iseniz? L�tfen �deme Bilginizi girin";
    var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = "M��teri Hesab�:";
    var $_PHPSHOP_ACC_ORDER_INFO = "Sipari� Bilgisi";
    var $_PHPSHOP_ACC_UPD_BILL = "�imdi, �deme bilgilerinizi g�ncelleyebilirsiniz.";
    var $_PHPSHOP_ACC_UPD_SHIP = "�imdi, nakliye adresi ekleyebilir ya da mevcut adresinizi g�ncelleyebilirsiniz.";
    var $_PHPSHOP_ACC_ACCOUNT_INFO = "Hesap Bilgisi";
    var $_PHPSHOP_ACC_SHIP_INFO = "Nakliye Bilgisi";
    var $_PHPSHOP_ACC_NO_ORDERS = "G�r�nt�lenecek Siari� Bulunamad�";
    var $_PHPSHOP_ACC_BILL_DEF = "- Ge�erli (�deme Adresimle Ayn�)";
    var $_PHPSHOP_SHIPTO_TEXT = "Sipari�inizin g�nderilece�i yeni bir adres ekleyebilirsiniz. Bu adres i�in L�tfen, uygun bir rumuz ya da kod kullan�n.";
    var $_PHPSHOP_CONFIG = "Ayarlar";
    var $_PHPSHOP_USERS = "Kullan�c�lar";
    var $_PHPSHOP_IS_CC_PAYMENT = "Kredi Kart�n�zla m� �deyeceksiniz?";
    
    /*#####################################################
     MODULE SHIPPING
    #######################################################*/
    var $_PHPSHOP_SHIPPING_MOD = "Nakliye Y�netimi";
    var $_PHPSHOP_SHIPPING_MENU_LABEL = "Nakliye";
    
    var $_PHPSHOP_CARRIER_LIST_MNU = "Nakliyeci";
    var $_PHPSHOP_CARRIER_LIST_LBL = "Nakliyeci Listesi";
    var $_PHPSHOP_RATE_LIST_MNU = "Nakliye Tarifesi";
    var $_PHPSHOP_RATE_LIST_LBL = "Nakliye Tarife Listesi";
    var $_PHPSHOP_CARRIER_LIST_NAME_LBL = "Ad�";
    var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = "Listorder";
    
    var $_PHPSHOP_CARRIER_FORM_MNU = "Nakliyeci Olu�turma";
    var $_PHPSHOP_CARRIER_FORM_LBL = "Nakliyeci d�zelt / olu�tur";
    var $_PHPSHOP_RATE_FORM_MNU = "Tarife olu�tur";
    var $_PHPSHOP_RATE_FORM_LBL = "Tarife g�nleme / olu�turma";
    
    var $_PHPSHOP_RATE_FORM_NAME = "Tarife A��klamas�";
    var $_PHPSHOP_RATE_FORM_CARRIER = "Nakliyeci";
    var $_PHPSHOP_RATE_FORM_COUNTRY = "�lke";
    var $_PHPSHOP_RATE_FORM_ZIP_START = "Ba�lang�� Posta Kodu";
    var $_PHPSHOP_RATE_FORM_ZIP_END = "Biti� Posta Kodu";
    var $_PHPSHOP_RATE_FORM_WEIGHT_START = "End���k A��rl�k";
    var $_PHPSHOP_RATE_FORM_WEIGHT_END = "Eny�ksek A��rl�k";
    var $_PHPSHOP_RATE_FORM_VALUE = "�cret";
    var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = "Paketleme �cretiniz";
    var $_PHPSHOP_RATE_FORM_CURRENCY = "Kur";
    var $_PHPSHOP_RATE_FORM_VAT_ID = "KDV";
    var $_PHPSHOP_RATE_FORM_LIST_ORDER = "Listorder";
    
    var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = "Nakliyeci";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = "Tarife a��klamas�";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = "A��rl�k den ...";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = "... e";
    var $_PHPSHOP_CARRIER_FORM_NAME = "Nakliye �irketi";
    var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = "Listorder";
    
    var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = "HATA: Nakliyeci ID  exists.";
    var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = "HATA: Nakliyeci Se�in.";
    var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = "HATA: At least one shipping rate exists, delete rates prior to shipper";
    var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = "HATA: Bu ID koduyla bir nakliyeci bulunamad�.";
    
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = "HATA: Nakiyeci se�in.";
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = "HATA: Bu ID koduyla bir nakliyeci bulunamad�.";
    var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = "HATA: A rate descriptor is requested.";
    var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = "HATA: G�nderilecek �lke yanl��. Birden fazla �lke se�ildiyse �lke adlar� \";\" ile ayr�lmal�.";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = "HATA: En d���k a��rl�k de�eri girin.";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = "HATA: En y�ksek a��rl�k de�eri girin";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = "HATA: En d���k a��rl�k en y�ksek a��rl�ktan d���k olmal�";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = "HATA: Bir nakliye �creti girin";
    var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = "HATA: Bir kur se�in";
    
    var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = "HATA: Bir ta��ma �creti girin";
    
    var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = "L�tfen se�iniz";
    var $_PHPSHOP_INFO_MSG_CARRIER = "Nakliyeci";
    var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = "Nakliye Tarifesi";
    var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = "Price";
    var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = "0 (-none-)";
    /*#####################################################
     END: MODULE SHIPPING
    #######################################################*/
    
    var $_PHPSHOP_PAYMENT_FORM_CC = "KrediKart�";
    var $_PHPSHOP_PAYMENT_FORM_USE_PP = "�deme ��lemcisi Kullan�n";
    var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = "Banka Hesab�";
    var $_PHPSHOP_PAYMENT_FORM_AO = "Sadece adres";
    var $_PHPSHOP_CHECKOUT_MSG_2 = "L�tfen bir nakliye adresi se�in!";
    var $_PHPSHOP_CHECKOUT_MSG_3 = "L�tfen bir nakliye y�ntemi se�in!";
    var $_PHPSHOP_CHECKOUT_MSG_4 = "L�tfen bir �deme y�ntemi se�in!";
    var $_PHPSHOP_CHECKOUT_MSG_99 = "L�tfen, bilgilerinizi g�zden ge�irin ve sipari�inizi teyit edin!";
    
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = "L�tfen bir nakliye adresi se�in.";
    var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = "L�tfen di�er Nakliye y�ntemini se�in.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = "L�tfen bir �deme y�ntemi se�in.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = "L�tfen 16 haneli kredi kart� numaran�z� girin.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = "L�tfen kredi kart�n�z �zerindeki ismi girin.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = "Girilen Kredi Kart� numaras� ge�ersiz.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = "L�tfen kredi kart�n�z �zerindeki ge�erlilik tarihinin ay�n� girin.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = "L�tfen kredi kart�n�z �zerindeki ge�erlilik tarihinin y�l�n� girin.";
    var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = "Ge�erlilik tarihi yanl��.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = "L�tfen adresiniz i�in bir nakliye girin.";
    var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = "Ge�ersiz KK numaras�.";
    var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = "Al��veri� sepetiniz bo�!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = "HATA: L�tfen bir nakliyeci se�in!";
    var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = "HATA: Se�ilen nakliye tarifesi bulunamad�!";
    var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = "HATA: Nakliye adresiniz bulunamad�!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = "HATA: Kredi Kart� bilgisi yok....";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = "HATA: Kredi Kart� numaras� bulunamad�!";
    var $_PHPSHOP_CHECKOUT_ERR_TEST = "�zg�n�z, girdi�iniz KK numaras� bir test numaras�d�r!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = "Kullan�c� veri taban�nda bulunamad�!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = "Banka hesap sahibi ad� ge�ersiz.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = "Kullan�lan IBAN vermediniz.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = "Kullan�lan bir banka hesap numaras� vermediniz.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = "You have actually not provided your bank sort code.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = "Ge�ersiz Banka ad� verdiniz.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = "Kasa i�lemi ge�erli bir ad�m istiyor!";
    var $_PHPSHOP_CHECKOUT_MSG_LOG = "Sonraki i�leminiz i�in �deme bilgisi alnm��t�r.<BR>";
    
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = "End���k sipari� de�erine hen�z ula��lamad�.";
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = "End���k sipari� de�eri:";
    var $_PHPSHOP_CHECKOUT_PAYMENT_CC = "Kredi Kart� �demesi";
    var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = "di�er �deme y�ntemleri";
    var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = "L�tfen bir �deme y�ntemi se�in:";
    
    var $_PHPSHOP_STORE_FORM_MPOV = "Ma�azan�z i�in end���k sipari� de�eri";
    var $_PHPSHOP_ACCOUNT_BANK_TITLE = "Banka Hesap Bilgisi";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = "Hesap No";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = "Banka �ube kodu";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = "Banka Ad�";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = "IBAN";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = "Hesap Sahibi";
    
    var $_PHPSHOP_MODULES = "Mod�ller";
    var $_PHPSHOP_FUNCTIONS = "Fonksiyonlar";
    var $_PHPSHOP_SPECIAL_PRODUCTS = "�zel �r�nler";
    
    var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = "Dilerseniz, bize sipari�inizle ilgili bir not b�rakabilirsiniz.";
    var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = "M��terinin notu";
    var $_PHPSHOP_INCLUDING_TAX = "(\$tax % vergi dahildir)";
    var $_PHPSHOP_PLEASE_SEL_ITEM = "L�tfen bir �ge se�iniz";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = "�ge";
    
    // DOWNLOADS
    
    var $_PHPSHOP_DOWNLOADS_TITLE = "Dosya �ndirme (Download) Alan�";
    var $_PHPSHOP_DOWNLOADS_START = "Dosya �ndir";
    var $_PHPSHOP_DOWNLOADS_INFO = "L�tfen, e-postan�za g�nderilen Download-ID nizi girin ve 'Dosya �ndir' butonuna t�klay�n.";
    var $_PHPSHOP_DOWNLOADS_ERR_EXP = "�zg�n�z, dosya indirilemiyor.";
    var $_PHPSHOP_DOWNLOADS_ERR_MAX = "�zg�n�z, size tahsis edilen dosya indirme say�s�n� a�t�n�z.";
    var $_PHPSHOP_DOWNLOADS_ERR_INV = "Ge�ersiz Download-ID!";
    var $_PHPSHOP_DOWNLOADS_ERR_SEND = "G�nderilemeyen ileti adresi: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG = "G�nderilen ileti adresi:";
    var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = "Dosya �ndir-Bilgi";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = "Sipari� etti�iniz dosya(lar) Download i�in haz�r.";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = "L�tfen a�a��daki Download-ID(s) Dosya �ndirme Alan�na giriniz: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = "Herbir dosya i�in dosya en�ok indirme say�s�: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = "�lk dosya indirmenizden \$expire g�n sonra dosya indirin";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = "Sorular? Sorunlar?";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = "Dosya indirme bilgisi "; // e.g. Download-Info by "Storename"
    var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = "�r�nler Internetten indirilebilir mi?"; 
    
    var $_PHPSHOP_PAYPAL_THANKYOU = "�demeniz i�in te�ekk�rler. 
        �deme ��leminiz ba�ar�yla ger�ekle�mi�tir. Bu i�leminiz i�in PayPal. taraf�ndan e-posta adresinize bir teyit iletisi g�nderilecektir.
        Al��veri�inize devam edebilir ya da  <a href=http://www.paypal.com>www.paypal.com</a> sitesinde bir oturum a�arak �deme i�leminizin detaylar�n� g�rebilirsiniz.";
    var $_PHPSHOP_PAYPAL_ERROR = "�deme i�leminiz ger�ekle�irken bir HATA olu�tu. Sipari� durumu g�nlenemiyecek.";
    
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = "Bizimle al��veri� yapt���n�z i�in te�ekk�r ederiz.  Sipari� bilginiz a�a��dad�r.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = "S�rekli al��veri�iniz i�in te�ekk�r ederiz.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = "Sorular? Sorunlar?";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = "A�a��daki sipari� al�nm��t�r..";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = "A�a��daki linki izleyerek sipari�inizi inceleyin.";
    
    var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = "Negatif miktar kabu edilemez.";
    var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = "L�tfen bu �ge i�in ge�erli bir miktar girin.";
    
    var $_PHPSHOP_CART_STOCK_1 = "Stokta bu miktarda �r�n yoktur.";
    var $_PHPSHOP_CART_STOCK_2 = "Se�ti�iniz �r�nden \$product_in_stock adet bulunmaktad�r. ";
    var $_PHPSHOP_CART_STOCK_3 = "Bu �r�n geldi�inde bilgilenmek ve bekleyenler listesine kay�t olmak i�in t�klay�n�z.";
    var $_PHPSHOP_CART_SELECT_ITEM = "L�tfen detaylar sayfas�ndan �zel bir �ge se�iniz!";
    
    var $_PHPSHOP_REGISTRATION_FORM_NONE = "hi�biri";
    var $_PHPSHOP_REGISTRATION_FORM_MR = "Bay.";
    var $_PHPSHOP_REGISTRATION_FORM_MRS = "Bayan.";
    var $_PHPSHOP_REGISTRATION_FORM_DR = "Dr.";
    var $_PHPSHOP_REGISTRATION_FORM_PROF = "Prof.";
    var $_PHPSHOP_DEFAULT = "Default";
    
  /*#####################################################
    MODULE AFFILIATE
  #######################################################*/
    var $_PHPSHOP_AFFILIATE_MOD   = "Affiliate Administration";
    
    // Affiliate List
    var $_PHPSHOP_AFFILIATE_LIST_MNU		= "�yeleri Listeleme";
    var $_PHPSHOP_AFFILIATE_LIST_LBL		= "�ye Listesi";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME	= "�ye ad�";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = "Aktif";
    var $_PHPSHOP_AFFILIATE_LIST_RATE		= "Oran";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = "Ayl�k Toplam";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION ="Ayl�k Komisyon";
    var $_PHPSHOP_AFFILIATE_LIST_ORDERS = "Sipari�leri Listele";
    
    // Affiliate Email
    var $_PHPSHOP_AFFILIATE_EMAIL_MNU		= "�yelere E-posta";
    var $_PHPSHOP_AFFILIATE_EMAIL_LBL		= "�yelere E-posta";
    var $_PHPSHOP_AFFILIATE_EMAIL_WHO	= "E-posta g�nderilecekler(* = ALL)";
    var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT		= "E-postan�z";
    var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = "Konu";
    var $_PHPSHOP_AFFILIATE_EMAIL_STATS	 = "Mevcut �statistikleri i�erir";
    
    // Affiliate Form
    var $_PHPSHOP_AFFILIATE_FORM_RATE		= "Komisyon Oran� (%)";
    var $_PHPSHOP_AFFILIATE_FORM_ACTIVE		= "Aktif?";
    
    var $_PHPSHOP_DELIVERY_TIME = "Genellikle ta��n�r";
    var $_PHPSHOP_DELIVERY_INFORMATION = "Ta��ma Bilgisi";
    var $_PHPSHOP_MORE_CATEGORIES = "daha fazla kategori";
    var $_PHPSHOP_AVAILABILITY = "Availability";
    var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = "Bu �r�n�n mevcudu kalmam��t�r.";
    var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = "Bu �r�n�n stoklar�m�za girece�i tarih: ";
    
    var $_PHPSHOP_STATISTIC_SUMMARY = "�zet";
    var $_PHPSHOP_STATISTIC_STATISTICS = "�statistikler";
    var $_PHPSHOP_STATISTIC_CUSTOMERS = "M��teriler";
    var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = "aktif �r�nler";
    var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = "pasif �r�nler";
    var $_PHPSHOP_STATISTIC_SUM = "Toplam";
    var $_PHPSHOP_STATISTIC_NEW_ORDERS = "Yeni Sipari�ler";
    var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = "Yeni M��teriler";
    
/*********** new in v 1.2 ***************************************/

	//Waiting list : file /administrator/components/com_phpshop/html/shop.waiting_list.php
	var $_PHPSHOP_WAITING_LIST_MESSAGE = "Please enter your e-mail address below to be notified when this product comes back in stock. 
                                        We will not share, rent, sell or use this e-mail address for any other purpose other than to 
                                        tell you when the product is back in stock.<br /><br />Thank you!";
	var $_PHPSHOP_WAITING_LIST_THANKS = "Thanks for waiting! <br />We will let you know as soon as we get our inventory.";
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = "Notify Me!";
	
	//Checkout : file /administrator/components/com_phpshop/html/checkout.thankyou.php
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = "Print view";
  
  /**************************Admin.show_cfg.php in apparition order ;-)**************************************/
	
	/* PAGE 1 */
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = "Please choose EITHER Authorize.net OR CyberCash";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = " Configuration file status:";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = "is writeable";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = "is unwriteable";
	
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = "Global";
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = "Path & URL";
	var $_PHPSHOP_ADMIN_CFG_SITE = "Site";
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = "Shipping";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = "Checkout";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = "Downloads";
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = "Payments";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = "Use only as catalogue";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = "If you check this, you disable all cart functionalities.";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = "Show Prices";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = "Show Prices including tax?";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = "Sets the flag whether the shoppers sees prices including tax or excluding tax.";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = "Check to show prices. If using catalogue functionality, some don't want prices to appear on pages.";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = "Virtual Tax";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = "This determines whether items with zero weight are taxed or not. Modify ps_checkout.php->calc_order_taxable() to customize this.";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = "Tax mode:";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = "Based on shipping address";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = "Based on vendor address";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = "This determines which tax rate is taken for calculating taxes:<br />
                                                <ul><li>the one from the state / country the store owner comes from</li><br/>
                                                <li>or the one from where the shopper comes from.</li></ul>";
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = "Enable multiple tax rates?";
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = "Check this, if you have products with different tax rates (e.g. 7% for books and food, 16% for other stuff)";
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = "Subtract payment discount before tax/shipping?";
  var $_PHPSHOP_ADMIN_CFG_REVIEW = "Enable Customer Review/Rating System";
  var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = "If enabled, you allow customers to <strong>rate products</strong> and <strong>write reviews</strong> about them. <br />
                                                                                So customers can write down their experiences with the product for other customers.<br />";
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = "Sets the flag whether to subtract the Discount for the selected payment BEFORE (checked) or AFTER tax and shipping.";
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = "Customers can leave bank account data?";
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = "Check if your customers shall have the ability to provide their bank account data when registering to the shop.";

	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = "Customers can select a state/region?";
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = "Check if your customers shall have the ability to select their state / region data when registering to the shop.";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = "Must agree to Terms of Service?";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = "Check if you want a shopper to agree to your terms of service before registering to the shop.";
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = "Check Stock?";
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = "Sets whether to check the stock level when a user adds an item to the shopping cart. 
                                                                                          If set, this will not allow user to add more items to the cart than are available in stock.";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = "Enable Affiliate Program?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = "This enables the affiliate tracking in the shop-frontend. Enable if you have added affiliates in the backend..";
	
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = "Order-mail format:";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = "Text mail";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = "HTML mail";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = "This determines how your order confirmation emails are set up:<br />
                                                                                        <ul><li>as a simple text email</li>
                                                                                        <li>or as a html email with images.</li></ul>";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = "Allow Frontend-Administration for non-Backend Users?";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = "With this setting you can enable the Frontend Administration for users who 
                                                                                              are storeadmins, but can't access the Mambo Backend (e.g. Registered / Editor).";
	
	/* PAGE 2 */
	var $_PHPSHOP_ADMIN_CFG_URL = "URL";
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = "The URL to your site. Usually identical to your Mambo URL (with trailing slash at the end!)";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = "SECUREURL";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = "The secure URL to your site. (https - with trailing slash at the end!)";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = "COMPONENTURL";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = "The URL to the mambo-phpShop component. (with trailing slash at the end!)";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = "IMAGEURL";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = "The URL to the mambo-phpShop component image directory.(with trailing slash at the end!)";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = "ADMINPATH";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = "The path to your mambo-phpShop component directory.";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = "CLASSPATH";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = "The path to your phpShop classes directory.";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = "PAGEPATH";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = "The path to your phpShop html directory.";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = "IMAGEPATH";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = "The path to your phpShop shop_image directory.";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = "HOMEPAGE";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = "This is the page which will be loaded by default.";	
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = "ERRORPAGE";
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = "This is the default page for displaying error messages.";	
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = "DEBUGPAGE";
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = "This is the default page for displaying debug messages.";
	var $_PHPSHOP_ADMIN_CFG_DEBUG = "DEBUG ?";
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = "DEBUG?  	   	Turns on the debug output. This causes the DEBUGPAGE to be displayed at the bottom of each page. Very helpful during shop development since it shows the carts contents, form field values, etc.";


/* PAGE 3 */

	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = "FLYPAGE";
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = "This is the default page for displaying product details.";
  var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = "Category Template";
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = "This defines the default category template for displaying products in a category.<br />
                                                                                                      You can create new templates by customizing existing template files <br />
                                                                                                      (which reside in the directory <strong>COMPONENTPATH/html/templates/</strong> and begin with browse_)";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = "Default number of products in a row";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = "This defines the number of products in a row. <br />
                                                                                                      Example: If you set it to 4, the category template will display 4 products per row";
  
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = "\"no image\" image";
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = "This image will be shown when no product image is available.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = "SEARCH ROWS";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = "Determines the number of rows per page when search results are displayed in a list.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = "SEARCH COLOR 1";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = "Specifies the color of the odd numbered rows in a result list.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = "SEARCH COLOR 2";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = "Specifies the color of the even numbered rows in a result list.";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = "MAXIMUM ROWS";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = "Sets the number of rows to show in the order list select box.";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = "Show footer \"powered by mambo-phpShop\" ?";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = "Displays a powered-by-mambo-phpShop footer image.";
	
	
	/* PAGE 4 */
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = "Choose your store's shipping method";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = "Standard Shipping module with indiviual configured carriers and rates. <strong>RECOMMENDED !</strong>";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = "  	Zone Shipping Module Country Version 1.0<br />
                                                                                                            For more information on this module please visit <a href=\"http://ZephWare.com\">http://ZephWare.com</a><br />
                                                                                                            for details or contact <a href=\"mailto:zephware@devcompany.com\">ZephWare.com</a><br /> Check this to enable the zone shipping module";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = "UPS Tools Shipping calculation";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = "UPS access code";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = "Your UPS access code";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = "UPS user id";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = "The user ID you got from UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = "UPS password";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = "The password for your UPS account";
	  
  var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = "InterShipper Module. Check only if you have an Intershipper.com account";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = "Disable Shipping method selection. Choose if your customers buy downloadable goods which don't have to be shipped.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = "InterShipper Password";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = "Your password for your intershipper account.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = "InterShipper email";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = "Your email address for your intershipper account.";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = "ENCODE KEY";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = "Used to encrypt data stored in database with this key. This means that this file should be protected from viewing at all times.";
	
	
	/* PAGE 5 */
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = "Enable the Checkout Bar";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = "Check this, if you want the 'checkout-bar' to be displayed to the customer during checkout process ( 1 - 2 - 3 - 4 with graphics).";
	
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = "Choose your store's checkout process";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = "<strong>Standard :</strong><br/>
               1. Shipping address request<br />
              2. Shipping method request<br />
              3. Payment method request<br />
              4. Complete Order";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = "<strong>Process 2:</strong><br/>
               1. Shipping address request<br />
              2. Payment method request<br />
              3. Complete Order";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = "<strong>Process 3:</strong><br/>
               1. Shipping method request<br />
              2. Payment method request<br />
              3. Complete Order";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = "<strong>Process 4:</strong><br/>
               1. Payment method request<br />
              2. Complete Order";
	
	
	
	/* PAGE 6 */
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = "Enable Downloads";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = "Check to enable the download capability. Only If you want sell downloadable goods.";
	
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = "Order Status which enables download";
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = "Select the order status at which the customer is notified about the download via e-mail.";
	
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = "Order Status which disables downloads";
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = "Sets the order status at which the download is disabled for the customer.";
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = "DOWNLOADROOT";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = "The physical path to the files for the custumer download. (trailing slash at the end!)<br>
        <span class=\"message\">For your own shop's security: If you can, please use a directory ANYWHERE OUTSIDE OF THE WEBROOT</span>";
	
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = "Download Maximum";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = "Sets the number of downloads which can be made with one Download-ID, (for one order)";
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = "Download Expire";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = "Sets the time range <strong>in seconds</strong> in which the download is enabled for the customer. 
  This range begins with the first download! When the time range has expired, the download-ID is disabled.<br />Note : 86400s=24h.";
	
	
	
	
	/* PAGE 7 */
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = "Enable IPN Payment via PayPal?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = "Check to let your customers use the PayPal payment system.";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = "PayPal payment email:";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = "Your business email address for PayPal payments. Also used as receiver_email.";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = "Order Status for successful transactions";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = "Select the order status to which the actual order is set, if the PayPal IPN was successful. If using download selling options: 
  select the status which enables the download (then the customer is instantly notified about the download via e-mail).";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = "Order Status for failed transactions";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = "Select an order status for failed PayPal transactions.";
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = "Enable Payments via PayMate?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = "Check to let your customers use the Australian PayMate payment system.";
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = "PayMate username:";
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = "Your user account for PayMate.";
	
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = "Enable Authorize.net payment?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = "Check to use Authorize.net with phpShop.";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = "Test mode ?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = "Select 'Yes' while testing. Select 'No' for enabling live transactions.";
	var $_PHPSHOP_ADMIN_CFG_YES = "Yes";
	var $_PHPSHOP_ADMIN_CFG_NO = "No";
	
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = "Authorize.net Login ID";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = "This is your Authorize.Net Login ID";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = "Authorize.net Transaction Key";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = "This is your Authorize.net Transaction Key";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = "Authentication Type";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = "This is the Authorize.Net authentication type.";
	
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = "Enable CyberCash?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = "Check to use CyberCash with phpShop.";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = "CyberCash MERCHANT";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = "CC_MERCHANT is the CyberCash Merchant ID";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = "CyberCash Merchant Key";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = "CyberCash Merchant Key is the Merchant Provided by CyberCash";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = "CyberCash PAYMENT URL";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = "CyberCash PAYMENT URL is the URL provided by Cybercash for secure payment";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = "CyberCash AUTH TYPE";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = "CyberCash AUTH TYPE is the Cybercash authentication type provided by Cybercase";
	

    /** Advanced Search feature ***/
    var $_PHPSHOP_ADVANCED_SEARCH  ="Advanced Search";
    var $_PHPSHOP_SEARCH_ALL_CATEGORIES = "Search All Categories";
    var $_PHPSHOP_SEARCH_ALL_PRODINFO = "Search all product info";
    var $_PHPSHOP_SEARCH_PRODNAME = "Product name only";
    var $_PHPSHOP_SEARCH_MANU_VENDOR = "Manufacturer/Vendor only";
    var $_PHPSHOP_SEARCH_DESCRIPTION = "Product description only";
    var $_PHPSHOP_SEARCH_AND = "and";
    var $_PHPSHOP_SEARCH_NOT = "not";
    var $_PHPSHOP_SEARCH_TEXT1 = "The first drop-down-list allows you to select a category to limit your search to. 
        The second drop-down-list allows you to limit your search to a particular piece of product information (e.g. Name). 
        Once you have selected these (or left the default ALL), enter the keyword to search for. ";
    var $_PHPSHOP_SEARCH_TEXT2 = " You can further refine your search by adding a second keyword and selecting the AND or NOT operator. 
        Selecting AND means both words must be present for the product to be displayed. 
        Selecting NOT means the product will be displayed only if the first keyword is present 
        and the second is not.";
    var $_PHPSHOP_ORDERBY = "Order by";
    
    /*** Review feature ***/
    var $_PHPSHOP_CUSTOMER_RATING  = "Average customer rating";
    var $_PHPSHOP_TOTAL_VOTES = "Total votes";
    var $_PHPSHOP_CAST_VOTE = "Please cast your vote";
    var $_PHPSHOP_RATE_BUTTON = "Rate";
    var $_PHPSHOP_RATE_NOM = "Rating";
    var $_PHPSHOP_REVIEWS = "Customer Reviews";
    var $_PHPSHOP_NO_REVIEWS = "There are yet no reviews for this product.";
    var $_PHPSHOP_WRITE_FIRST_REVIEW = "Be the first to write a review...";
    var $_PHPSHOP_REVIEW_LOGIN = "Please log in to write a review.";
    var $_PHPSHOP_REVIEW_ERR_RATE = "Please rate the product to complete your review!";
    var $_PHPSHOP_REVIEW_ERR_COMMENT1 = "Please write down some more words for your review. Mininum characters allowed: 100";
    var $_PHPSHOP_REVIEW_ERR_COMMENT2 = "Please shorten your review. Maximum characters allowed: 2000";
    var $_PHPSHOP_WRITE_REVIEW = "Write a review for this product!";
    var $_PHPSHOP_REVIEW_RATE = "First: Rate the product. Please select a rating between 0 (poorest) and 5 stars (best).";
    var $_PHPSHOP_REVIEW_COMMENT = "Now please write a (short) review....(min. 100, max. 2000 characters) ";
    var $_PHPSHOP_REVIEW_COUNT = "Characters written: ";
    var $_PHPSHOP_REVIEW_SUBMIT = "Submit Review";
    var $_PHPSHOP_REVIEW_ALREADYDONE = "You already have written a review for this product. Thank you.";
    var $_PHPSHOP_REVIEW_THANKYOU = "Thanks for your review.";
    var $_PHPSHOP_COMMENT= "Comment";
    
    var $_PHPSHOP_CREDITCARD_FORM_LBL = "Add/Edit Credit Card Types";
    var $_PHPSHOP_CREDITCARD_NAME = "Credit Card Name";
    var $_PHPSHOP_CREDITCARD_CODE = "Credit Card - Short Code";
    var $_PHPSHOP_CREDITCARD_TYPE = "Credit Card Type";
    
    var $_PHPSHOP_CREDITCARD_LIST_LBL = "Credit Card List";
    var $_PHPSHOP_UDATE_ADDRESS = "Update Address";
    var $_PHPSHOP_CONTINUE_SHOPPING = "Continue Shopping";
    
    var $_PHPSHOP_THANKYOU_SUCCESS = "Your order has been successfully placed!";
    var $_PHPSHOP_ORDER_LINK = "Follow this link to view the Order Details.";
    
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = "the Status of your Order No. {order_id} has been changed.";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = "New Status is:";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = "To view the Order Details, please follow this link (or copy it into your browser):";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = "Order Status Change: Your Order {order_id}";
    var $_PHPSHOP_ORDER_LIST_NOTIFY = "Notify Customer?";
    var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = "Please change the Order Status first!";
    
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = "Price Discount on default Shopper Group (in %)";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = "A positive amount X means: If the Product has no Price assigned to THIS Shopper Group, the default Price is decreased by X %. A negative amount has the opposite effect";
        
    var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = "Product Discount";
    var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = "Product Discount List";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = "Add/Edit Product Discount";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = "Discount amount";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = "Enter the discount amount";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = "Discount Type";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = "Percentage";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = "Total";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = "Shall the amount be a percentage or a total?";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = "Startdate of discount";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = "Specifies the day when the discount begins";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = "End date of discount";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = "Specifies the day when the discount ends";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = "You can use the Product Discount Form to add discounts!";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = "You Save";
    
    var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = "View Full-Size Image";
    
/*********************
Currency Display Style 
***********************/
    var $_PHPSHOP_CURRENCY_DISPLAY = "Currency Display Style";
    var $_PHPSHOP_CURRENCY_SYMBOL = "Currency symbol";
    var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = "You can also use HTML Entities here (e.g. &amp;euro;,&amp;pound;,&amp;yen;,...)";
    var $_PHPSHOP_CURRENCY_DECIMALS = "Decimals";
    var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = "Number of displayed decimals (can be 0)<br><b>Performs rounding if value has different number of decimals</b>";
    var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = "Decimal symbol";
    var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = "Character used as decimal symbol";
    var $_PHPSHOP_CURRENCY_THOUSANDS = "Thousands separator";
    var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = "Character used to separate thousands (can be empty)";
    var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = "Positive format";
    var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = "Display format used to display positive values.<br>(Symb stands for currency symbol)";
    var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = "Negative format";
    var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = "Display format used to display negative values.<br>(Symb stands for currency symbol)";
    
    var $_PHPSHOP_OTHER_LISTS = "Other Product Lists";
/**************
Multiple Images 
****************/
    var $_PHPSHOP_MORE_IMAGES = "View More Images";
    var $_PHPSHOP_AVAILABLE_IMAGES = "Available Images for";
    var $_PHPSHOP_BACK_TO_DETAILS = "Back to Product Details";
    
    /* FILEMANAGER */
    var $_PHPSHOP_FILEMANAGER = "FileManager";
    var $_PHPSHOP_FILEMANAGER_LIST = "FileManager::Product List";
    var $_PHPSHOP_FILEMANAGER_ADD = "Add Image/File";
    var $_PHPSHOP_FILEMANAGER_IMAGES = "Assigned Images";
    var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = "Is Downloadable?";
    var $_PHPSHOP_FILEMANAGER_FILES = "Assigned Files (Datasheets,...)";
    var $_PHPSHOP_FILEMANAGER_PUBLISHED = "Published?";
    
    /* FILE LIST */
    var $_PHPSHOP_FILES_LIST = "FileManager::Image/File List for";
    var $_PHPSHOP_FILES_LIST_FILENAME = "Filename";
    var $_PHPSHOP_FILES_LIST_FILETITLE = "File Title";
    var $_PHPSHOP_FILES_LIST_FILETYPE = "File Type";
    var $_PHPSHOP_FILES_LIST_EDITFILE = "Edit File Entry";
    var $_PHPSHOP_FILES_LIST_FULL_IMG = "Full Image";
    var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = "Thumbnail Image";
    
    
    /* FILE FORM */
    var $_PHPSHOP_FILES_FORM = "Upload a File for";
    var $_PHPSHOP_FILES_FORM_CURRENT_FILE = "Current File";
    var $_PHPSHOP_FILES_FORM_FILE = "File";
    var $_PHPSHOP_FILES_FORM_IMAGE = "Image";
    var $_PHPSHOP_FILES_FORM_UPLOAD_TO = "Upload to";
    var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = "default Product Image Path";
    var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = "Specify the file location";
    var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = "Download Path (e.g. for selling downloadables!)";
    var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = "Auto-Create Thumbnail?";
    var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = "File is published?";
    var $_PHPSHOP_FILES_FORM_FILE_TITLE = "File Title (what the Customer sees)";
    var $_PHPSHOP_FILES_FORM_FILE_DESC = "File Description";
    var $_PHPSHOP_FILES_FORM_FILE_URL = "File URL (optional)";
    
    /* FILE & IMAGE PROCESSING */
    var $_PHPSHOP_FILES_PATH_ERROR = "Please provide a valid path!";
    var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = "The Thumbnail Image has been successfully created!";
    var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = "Could NOT create Thumbnail Image!";
    var $_PHPSHOP_FILES_UPLOAD_FAILURE = "File/Image Upload Error";
    
    var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = "Could not delete the Full Image File.";
    var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = "Full Image successfully deleted.";
    var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = "Could not delete the Thumbnail Image File (maybe didnt exist): ";
    var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = "Thumbnail Image successfully deleted.";
    var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = "Could not delete the File.";
    var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = "File successfully deleted.";
    
    var $_PHPSHOP_FILES_NOT_FOUND = "Sorry, but the requested file wasn't found!";
    var $_PHPSHOP_IMAGE_NOT_FOUND = "Image not found!";

    /*#####################
    MODULE COUPON
    #####################*/
    
    var $_PHPSHOP_COUPON_MOD = "Coupon";
    var $_PHPSHOP_COUPONS = "Coupons";
    var $_PHPSHOP_COUPON_LIST = "Coupon List";
    var $_PHPSHOP_COUPON_ALREADY_REDEEMED = "Coupon has already been redeemed.";
    var $_PHPSHOP_COUPON_REDEEMED = "Coupon redeemed! Thank you.";
    var $_PHPSHOP_COUPON_ENTER_HERE = "If you have a coupon code, please enter it below:";
    var $_PHPSHOP_COUPON_SUBMIT_BUTTON = "Submit";
    var $_PHPSHOP_COUPON_CODE_EXISTS = "That coupon code already exists. Please try again.";
    var $_PHPSHOP_COUPON_EDIT_HEADER = "Update Coupon";
    var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = "Click a coupon code to edit it, or to delete a coupon code, select it and click Delete:";
    var $_PHPSHOP_COUPON_CODE_HEADER = "Code";
    var $_PHPSHOP_COUPON_PERCENT_TOTAL = "Percent or Total";
    var $_PHPSHOP_COUPON_TYPE = "Coupon Type";
    var $_PHPSHOP_COUPON_TYPE_TOOLTIP = "A Gift Coupon is deleted after it was used for discounting an order. A permanent coupon can be used as often as the customer wants to.";
    var $_PHPSHOP_COUPON_TYPE_GIFT = "Gift Coupon";    
    var $_PHPSHOP_COUPON_TYPE_PERMANENT = "Permanent Coupon";    
    var $_PHPSHOP_COUPON_VALUE_HEADER = "Value";
    var $_PHPSHOP_COUPON_DELETE_BUTTON = "Delete Code";
    var $_PHPSHOP_COUPON_CONFIRM_DELETE = "Are you sure you want to delete this coupon code?";
    var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = "Please complete all fields.";
    var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = "Coupon value must be a number.";
    var $_PHPSHOP_COUPON_NEW_HEADER = "New Coupon";
    var $_PHPSHOP_COUPON_COUPON_HEADER = "Coupon Code";
    var $_PHPSHOP_COUPON_PERCENT = "Percent";
    var $_PHPSHOP_COUPON_TOTAL = "Total";
    var $_PHPSHOP_COUPON_VALUE = "Value";
    var $_PHPSHOP_COUPON_CODE_SAVED = "Coupon code saved.";
    var $_PHPSHOP_COUPON_SAVE_BUTTON = "Save Coupon";
    var $_PHPSHOP_COUPON_DISCOUNT = "Coupon Discount";
    var $_PHPSHOP_COUPON_CODE_INVALID = "Coupon code not found. Please try again.";
    var $_PHPSHOP_COUPONS_ENABLE = "Enable Coupon Usage";
    var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = "If you enable the Coupon Usage, you allow customers to fill in Coupon Numbers to gain discounts on their purchase.";
    
    /* Free Shipping */
    var $_PHPSHOP_FREE_SHIPPING = "Free Shipping";
    var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = "Shipping is free on this Order!";
    var $_PHPSHOP_FREE_SHIPPING_AMOUNT = "Minimum Amount for Free Shipping";
    var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = "The amount (INCLUDING TAX!) which is the Minimum for Free Shipping 
                                                (example: <strong>50</strong> means Free Shipping when the customer checks out
                                                with \$50 (including tax) or more.";
    var $_PHPSHOP_YOUR_STORE = "Your Store";
    var $_PHPSHOP_CONTROL_PANEL = "Control Panel";
    
    /* Configuration Additions */
    var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = "PDF - Button";
    var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = "Show or Hide the PDF - Button in the Shop";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = "Must agree to Terms of Service on EVERY ORDER?";
    var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = "Check if you want a shopper to agree to your terms of service on EVERY ORDER (before placing the order).";

    // We need this for eCheck.net Payments
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = "Bank Account Type";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = "Checking";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = "Business Checking";
    var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = "Saving";
    
    var $_PHPSHOP_PAYMENT_AN_RECURRING = "Recurring Billings?";
    var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = "Define wether you want recurring billings.";
    
    var $_PHPSHOP_INTERNAL_ERROR = "Internal Error processing the Request to";
    var $_PHPSHOP_PAYMENT_ERROR = "Failure in Processing the Payment";
    var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = "Payment successfully processed";
    
    /* UPS Shipping Module */
    var $_PHPSHOP_UPS_RESPONSE_ERROR = "UPS was not able to process the Shipping Rate Request.";
    var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = "Guaranteed Day(s) To Delivery";
    var $_PHPSHOP_UPS_PICKUP_METHOD = "UPS Pickup Method";
    var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = "How do you give packages to UPS?";
    var $_PHPSHOP_UPS_PACKAGE_TYPE = "UPS Packaging?";
    var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = "Select the default Type of Packaging.";
    var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = "Residential Delivery?";
    var $_PHPSHOP_UPS_RESIDENTIAL = "Residential (RES)";
    var $_PHPSHOP_UPS_COMMERCIAL    = "Commercial Delivery (COM)";
    var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = "Quote for Residential (RES) or Commercial Delivery (COM).";
    var $_PHPSHOP_UPS_HANDLING_FEE = "Handling Fee";
    var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = "Your Handling fee for this shipping method.";
    var $_PHPSHOP_UPS_TAX_CLASS = "Tax Class";
    var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = "Use the following tax class on the shipping fee.";
    
    var $_PHPSHOP_ERROR_CODE = "Error Code";
    var $_PHPSHOP_ERROR_DESC = "Error Description";
    
    var $_PHPSHOP_CHANGE_TRANSACTION_KEY = "Show / Change the Transaction Key";
    var $_PHPSHOP_CHANGE_PASSKEY_FORM = "Show/Change the Password/Transaction Key";
    var $_PHPSHOP_TYPE_PASSWORD = "Please type in your User Password";
    var $_PHPSHOP_CURRENT_PASSWORD = "Current Password";
    var $_PHPSHOP_CURRENT_TRANSACTION_KEY = "Current Transaction Key";
    var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = "The Transaction key was successfully changed.";
    
    var $_PHPSHOP_PAYMENT_CVV2 = "Request/Capture Credit Card Code Value (CVV2/CVC2/CID)";
    var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = "Check for a valid CVV2/CVC2/CID value (three- or four-digit number on the back of a credit card, on the Front of American Express Cards)?";
    var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = "Please type in the three- or four-digit number on the back of your credit card (On the Front of American Express Cards)";
    var $_PHPSHOP_CUSTOMER_CVV2_ERROR = "You need to enter your Credit Card Code to proceed.";
    
    var $_PHPSHOP_PRODUCT_FORM_FILENAME = "EITHER Fill in a Filename";
    var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = "NOTE: Here you can fill in a FileName. <strong>If you fill in a Filename here, no Files will be uploaded!!! You will have to upload it via FTP manually!</strong>.";
    var $_PHPSHOP_PRODUCT_FORM_UPLOAD = "OR Upload new File";
    var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = "You can upload a local file. This file will be the Product you sell. An existing file will be replaced.";
    
    var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = "Fill in any text here that will be displayed to the customer on the product flypage.<br />e.g.: 24h, 48 hours, 3 - 5 days, On Order.....";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = "OR select an Image to be displayed on the Details Page (flypage).<br />The images reside in the directory <i>/components/com_phpshop/shop_image/availability</i><br />";
    var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = "Attribute List";
    var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = "<h4>Examples for the Attribute List Format:</h4>
        <span class=\"sectionname\"><strong>Size</strong>,XL[+1.99],M,S[-2.99]<strong>;Colour</strong>,Red,Green,Yellow,ExpensiveColor[=24.00]<strong>;AndSoOn</strong>,..,..</span>
        <h4>Inline price adjustments for using the Advanced Attributes modification:</h4>
        <span class=\"sectionname\">
        <strong>&#43;</strong> == Add this amount to the configured price.<br />
        <strong>&#45;</strong> == Subtract this amount from the configured price.<br />
        <strong>&#61;</strong> == Set the product's price to this amount.
      </span>";
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = "Custom Attribute List";
    var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = "<h4>Examples for the Custom attribute List Format:</h4>
        <span class=\"sectionname\"><strong>Name;Extras;</strong>...</span>";
        
    var $_PHPSHOP_MULTISELECT = "�oklu se�im i�in STRG-Key ve Fare kullan�n";
        
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = "Enable eProcessingNetwork.com payment?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = "Check to use eProcessingNetwork.com with phpShop.";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = "Test mode ?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = "Select 'Yes' while testing. Select 'No' for enabling live transactions.";
	
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = "eProcessingNetwork.com Login ID";
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = "This is your eProcessingNetwork.com Login ID";
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = "eProcessingNetwork.com Transaction Key";
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = "This is your eProcessingNetwork.com Transaction Key";
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = "Authentication Type";
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = "This is the eProcessingNetwork.com authentication type.";

    var $_PHPSHOP_RELATED_PRODUCTS = "Related Products";
    var $_PHPSHOP_RELATED_PRODUCTS_TIP = "You can build up Product Relations using this List. Just select one or more products here and then they are <strong>Related Products</strong>.";
    
    var $_PHPSHOP_RELATED_PRODUCTS_HEADING = "You may also be interested in this/these product(s)";
    
    var $_PHPSHOP_IMAGE_ACTION = "Image Action";
    var $_PHPSHOP_NONE = "none";
    
    var $_PHPSHOP_ORDER_HISTORY = "Order History";
    var $_PHPSHOP_ORDER_HISTORY_COMMENT = "Comment";
    var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = "Comments on your Order";
    var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = "Include this comment?";
    var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = "Date Added";
    var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = "Customer Notified?";
    var $_PHPSHOP_ORDER_STATUS_CHANGE = "Order Status Change";
    
     /* USPS Shipping Module */
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = "USPS shipping username";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = "USPS shipping username";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = "USPS shipping password";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = "USPS shipping password";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER = "USPS shipping server";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP = "USPS shipping server";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH = "USPS shipping path";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP = "USPS shipping path";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_CONTAINER = "USPS shipping container";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_CONTAINER_TOOLTIP = "USPS shipping container";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE = "USPS Package Size";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP = "USPS Package Size";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGEID = "USPS Package ID (must be 0, does not support multiple packages)";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGEID_TOOLTIP = "USPS Package ID (must be 0, does not support multiple packages)";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIPSERVICE = "USPS Shipping type (Express,First Class,Priority,Parcel,BPM,Library,Media)";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIPSERVICE_TOOLTIP = "USPS Shipping type (Express,First Class,Priority,Parcel,BPM,Library,Media)";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_HANDLING_FEE = "Handling Fee";
    var $_PHPSHOP_USPS_HANDLING_FEE = "Your Handling fee for this shipping method.";
    var $_PHPSHOP_USPS_HANDLING_FEE_TOOLTIP = "Your Handling fee for this shipping method.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE = "Your International Handling fee for USPS shipments.";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP = "Your International Handling fee for USPS shipments.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE = "Your International per pound rate for USPS shipments.";
    var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP = "Your International per pound rate for USPS shipments.";
    var $_PHPSHOP_USPS_RESPONSE_ERROR = "USPS was not able to process the Shipping Rate Request.";
        
    /** Changed Product Type - Begin*/
    /*** Product Type ***/
    var $_PHPSHOP_PARAMETERS_LBL = "Parameters";
    var $_PHPSHOP_PRODUCT_TYPE_LBL = "Product Type";
    var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = "Product Type List";
    var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = "Add/Edit Product Type";
    // Product - Product Product Type list
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = "Product Type List for";
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = "List Product Types";
    // Product - Product Product Type form
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = "Add Product Type for";
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = "Add Product Type";
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = "Product Type";
    // Product - Product Type form
    var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = "Product Type Name";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = "Product Type Description";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = "Parameters";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = "Product Type Information";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = "Publish?";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = "Product Type Browse Page";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = "Product Type Flypage";
    // Product - Product Type Parameter list
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = "Parameters of Product Type";
    // Product - Product Type Parameter form
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = "Parameter Information";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = "Product Type not found!";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = "Parameter Name";
    VAR $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = "This name will be column name of table. Must be unicate and without space.<BR>For example: main_material";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = "Parameter Label";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = "Parameter Description";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = "Parameter Type";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = "Integer";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = "Text";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = "Short Text";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = "Float";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = "Char";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = "Date & Time";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = "Date";
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = "YYYY-MM-DD";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = "Time";
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = "HH:MM:SS";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = "Break Line";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = "Multiple Values";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = "Possible Values";
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = "Show Possible Values as Multiple select?";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = "<strong>If Possible Values are set, Parameter can have only this values. Example for Possible Values:</strong><BR><span class=\"sectionname\">Steel;Wood;Plastic;...</span>";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = "Default Value";
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = "For Parameter Default Value use this format:<ul><li>Date: YYYY-MM-DD</li><li>Time: HH:MM:SS</li><li>Date & Time: YYYY-MM-DD HH:MM:SS</li></ul>";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = "Unit";
    
	/************************* FrontEnd ***************************/
	/** shop.parameter_search.php */
	var $_PHPSHOP_PARAMETER_SEARCH = "Advanced Search according to Parameters";
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = "Parameters Search";
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = "Do you will find products according to technical parametrs?<BR>You can used any prepared form:";
// 	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = "There's no result matching your query.";
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = "I am sorry. There is no category for search.";
	/** shop.parameter_search_form.php */
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = "I am sorry. There is no published Product Type with this name.";
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = "Is Like";
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = "Is NOT Like";
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = "Full-Text Search";
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = "All Selected";
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = "Any Selected";
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = "Reset Form";	
	/** shop.browse.php */
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = "Search in Category";
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = "Change Parameters";
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = "Descending order";
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = "Ascending order";
	/** shop.product.detail */
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = "Parameters of Category";
	/** Changed Product Type - End*/

    // State form and list
    var $_PHPSHOP_STATE_LIST_MNU = "List State";
    var $_PHPSHOP_STATE_LIST_LBL = "State List for: ";
    var $_PHPSHOP_STATE_LIST_ADD = "Add/Update a State";
    var $_PHPSHOP_STATE_LIST_NAME = "State Name";
    var $_PHPSHOP_STATE_LIST_3_CODE = "State Code (3)";
    var $_PHPSHOP_STATE_LIST_2_CODE = "State Code (2)";
        
    // Opposite of Discount!
    var $_PHPSHOP_FEE = "Fee";
    
    var $_PHPSHOP_PRODUCT_CLONE = "Clone Product";
	
    var $_PHPSHOP_CSV_SETTINGS = "Settings";
    var $_PHPSHOP_CSV_DELIMITER = "Delimiter";
    var $_PHPSHOP_CSV_ENCLOSURE = "Field Enclosure Char";
    var $_PHPSHOP_CSV_UPLOAD_FILE = "Upload a CSV File";
    var $_PHPSHOP_CSV_SUBMIT_FILE = "Submit CSV File";
    var $_PHPSHOP_CSV_FROM_DIRECTORY = "Load from directory";
    var $_PHPSHOP_CSV_FROM_SERVER = "Load CSV File from Server";
    var $_PHPSHOP_CSV_EXPORT_TO_FILE = "Export to CSV File";
    var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = "Choose Field Ordering Type";
    var $_PHPSHOP_CSV_DEFAULT_ORDERING = "Default Ordering";
    var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = "My customized Ordering";
    var $_PHPSHOP_CSV_SUBMIT_EXPORT = "Export all Products to CSV File";
    var $_PHPSHOP_CSV_CONFIGURATION_HEADER = "CSV Import / Export Configuration";
    var $_PHPSHOP_CSV_SAVE_CHANGES = "Save Changes";
    var $_PHPSHOP_CSV_FIELD_NAME = "Field Name";
    var $_PHPSHOP_CSV_DEFAULT_VALUE = "default Value";
    var $_PHPSHOP_CSV_FIELD_ORDERING = "Field Ordering";
    var $_PHPSHOP_CSV_FIELD_REQUIRED = "Field Required?";
    var $_PHPSHOP_CSV_IMPORT_EXPORT = "Import/Export";
    var $_PHPSHOP_CSV_NEW_FIELD = "Add a new Field";
    var $_PHPSHOP_CSV_DOCUMENTATION = "Documentation";
    
    var $_PHPSHOP_PRODUCT_NOT_FOUND = "Sorry, but the Product you've requested wasn't found!";
    var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = "Show Products that are out of Stock";
    var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = "When enabled, Products that are currently not in Stock are displayed. Otherwise such Products are hidden.";
	
}
/** @global phpShopLanguage $PHPSHOP_LANG */
$PHPSHOP_LANG =& new phpShopLanguage();
?>
