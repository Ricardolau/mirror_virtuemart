<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
*
* @version $Id: admin.martlanguages.php,v 1.6 2006/01/15 19:42:45 soeren_nb Exp $
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
	var $_PHPSHOP_MENU = 'منو';
	var $_PHPSHOP_CATEGORY = 'مجموعه';
	var $_PHPSHOP_CATEGORIES = 'مجموعه ها';
	var $_PHPSHOP_SELECT_CATEGORY = 'انتخاب مجموعه:';
	var $_PHPSHOP_ADMIN = 'مديريت';
	var $_PHPSHOP_PRODUCT = 'كالا';
	var $_PHPSHOP_LIST = 'ليست';
	var $_PHPSHOP_ALL = 'همه';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'ليست تمامي كالاها';
	var $_PHPSHOP_VIEW = 'مشاهده';
	var $_PHPSHOP_SHOW = 'نمايش';
	var $_PHPSHOP_ADD = 'افزودن';
	var $_PHPSHOP_UPDATE = 'بروز رساني';
	var $_PHPSHOP_DELETE = 'حذف';
	var $_PHPSHOP_SELECT = 'انتخاب';
	var $_PHPSHOP_SUBMIT = 'ارسال';
	var $_PHPSHOP_RANDOM = 'انتخاب اتفاقي كالاها';
	var $_PHPSHOP_LATEST = 'آخرين كالاها';
	var $_PHPSHOP_HOME_TITLE = 'صفحه اصلي';
	var $_PHPSHOP_CART_TITLE = 'سبد خريد';
	var $_PHPSHOP_CHECKOUT_TITLE = 'پرداخت';
	var $_PHPSHOP_LOGIN_TITLE = 'ورود';
	var $_PHPSHOP_LOGOUT_TITLE = 'خروج';
	var $_PHPSHOP_BROWSE_TITLE = 'انتخاب';
	var $_PHPSHOP_SEARCH_TITLE = 'جستجو';
	var $_PHPSHOP_ACCOUNT_TITLE = 'نگهداري اكانت';
	var $_PHPSHOP_NAVIGATION_TITLE = 'راهبري';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'دپارتمان';
	var $_PHPSHOP_INFO = 'اطلاعات';
	var $_PHPSHOP_BROWSE_LBL = 'انتخاب';
	var $_PHPSHOP_PRODUCTS_LBL = 'كالاها';
	var $_PHPSHOP_PRODUCT_LBL = 'كالا';
	var $_PHPSHOP_SEARCH_LBL = 'جستجو';
	var $_PHPSHOP_FLYPAGE_LBL = 'جزئيات كالا';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'جستجوي كالا';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'نام كالا';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'مجموعه كالايي';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'شرح';
	var $_PHPSHOP_CART_SHOW = 'نمايش سبد خريد';
	var $_PHPSHOP_CART_ADD_TO = 'افزودن به سبد خريد';
	var $_PHPSHOP_CART_NAME = 'نام';
	var $_PHPSHOP_CART_SKU = 'واحد';
	var $_PHPSHOP_CART_PRICE = 'قيمت';
	var $_PHPSHOP_CART_QUANTITY = 'مقدار';
	var $_PHPSHOP_CART_SUBTOTAL = 'جمع اوليه';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'افزودن مورد جديد براي';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'آدرس پستي';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'نتيجه جستجو 0 مورد مي باشد.<br />';
	var $_PHPSHOP_PRICE_LABEL = 'قيمت : ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'افزودن به سبد خريد';
	var $_PHPSHOP_NO_CUSTOMER = 'مشتري عزيز ، اطلاعات شما در سيستم ثبت نگرديده است. لطفاً اطلاعات  بانكي خود را وارد نماييد. ';
	var $_PHPSHOP_DELETE_MSG = 'آيا مطمئن به حذف اين اطلاعات مي باشيد؟';
	var $_PHPSHOP_THANKYOU = 'از سفارش خريد شما متشكريم.';
	var $_PHPSHOP_NOT_SHIPPED = 'هنوز حمل نشده است';
	var $_PHPSHOP_EMAIL_SENDTO = 'نامه تاييد فرستاده شده است به ';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'با عرض پوزش ، هيچ كاربر MOS براي  افزودن به ليست كاربري  com_virtuemart وجود ندارد.';
	var $_PHPSHOP_ERROR = 'خطا';
	var $_PHPSHOP_MOD_NOT_REG = 'ماژول ثبت نگرديده است.';
	var $_PHPSHOP_MOD_ISNO_REG = 'ماژولي معتبر براي TgShop نمي باشد.';
	var $_PHPSHOP_MOD_NO_AUTH = 'اجازه دسترسي به ماژولهاي درخواست شده را نداريد.';
	var $_PHPSHOP_PAGE_404_1 = 'صفحه مورد نظر موجود نمي باشد';
	var $_PHPSHOP_PAGE_404_2 = 'نام فايل داده شده موجود نمي باشد. قادر به يافتن فايل نمي باشد :';
	var $_PHPSHOP_PAGE_403 = 'اجازه دسترسي كامل وجود ندارد';
	var $_PHPSHOP_FUNC_NO_EXEC = 'اجازه اجرا براي شما وجود ندارد ';
	var $_PHPSHOP_FUNC_NOT_REG = 'عملكرد ثبت نگرديده است.';
	var $_PHPSHOP_FUNC_ISNO_REG = ' عملكردي معتبر براي MOS_com_phpShop نمي باشد.';
	var $_PHPSHOP_ADMIN_MOD = 'مدير';
	var $_PHPSHOP_USER_LIST_MNU = 'ليست  كاربران';
	var $_PHPSHOP_USER_LIST_LBL = 'ليست كاربران';
	var $_PHPSHOP_USER_LIST_USERNAME = 'نام كاربري';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'نام كامل';
	var $_PHPSHOP_USER_LIST_GROUP = 'گروه';
	var $_PHPSHOP_USER_FORM_MNU = 'افزودن كاربر';
	var $_PHPSHOP_USER_FORM_LBL = 'افزودن/بروز رساني اطلاعات كاربر';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'اطلاعات مورد نياز براي صورتحساب';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'آدرسهاي پستي';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'افزودن آدرس';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'هيچ آدرس پستي وجود ندارد.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'نام مستعار آدرس';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'نام';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'نام خانوادگي';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'پسوند';
	var $_PHPSHOP_USER_FORM_TITLE = 'عنوان';
	var $_PHPSHOP_USER_FORM_USERNAME = 'نام كاربري';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'رمز عبور';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'تاييد رمز عبور';
	var $_PHPSHOP_USER_FORM_PERMS = 'سطوح دسترسي';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'شماره مشتري / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'نام شركت';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'سطر اول آدرس';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'سطر دوم آدرس';
	var $_PHPSHOP_USER_FORM_CITY = 'شهر';
	var $_PHPSHOP_USER_FORM_STATE = 'استان/منطقه';
	var $_PHPSHOP_USER_FORM_ZIP = 'كد پستي';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'كشور';
	var $_PHPSHOP_USER_FORM_PHONE = 'تلفن';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'موبايل';
	var $_PHPSHOP_USER_FORM_FAX = 'فكس';
	var $_PHPSHOP_USER_FORM_EMAIL = 'پست الكترونيكي';
	var $_PHPSHOP_MODULE_LIST_MNU = 'ليست  ماژولها';
	var $_PHPSHOP_MODULE_LIST_LBL = 'ليست ماژولها';
	var $_PHPSHOP_MODULE_LIST_NAME = 'نام ماژول';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'سطوح دسترسي ماژول';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'عملكردها';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'ترتيب ليست';
	var $_PHPSHOP_MODULE_FORM_MNU = 'افزودن ماژول';
	var $_PHPSHOP_MODULE_FORM_LBL = 'اطلاعات ماژول';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'برچسب ماژول (براي منوي بالايي)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'نام ماژول';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'سطوح دسترسي ماژول';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'سر صفحه ماژول';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'پايين صفحه ماژول';
	var $_PHPSHOP_MODULE_FORM_MENU = 'نمايش ماژول در منوي مدير؟';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'ترتيب نمايش';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'شرح ماژول';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'كد زبان';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'فايل زبان';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'ليست  عملكردها';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'ليست عملكردها';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'نام عملكرد';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'نام كلاس';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'متد كلاس';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'سطوح دسترسي';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'افزودن عملكرد';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'اطلاعات عملكرد';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'نام عملكرد';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'نام كلاس';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'متد كلاس';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'سطوح دسترسي عملكرد';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'شرح عملكرد';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'ليست  واحدهاي پولي';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'ليست واحدهاي پولي';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'افزودن واحد پولي';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'نام واحد پولي';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'كد واحد پولي';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'ليست  كشورها';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'ليست كشورها';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'افزودن كشور';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'نام كشور';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'كد كشور (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'كد كشور (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'ليست  استانها';
	var $_PHPSHOP_STATE_LIST_LBL = 'ليست استانها براي: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'افزودن/بروز رساني استان';
	var $_PHPSHOP_STATE_LIST_NAME = 'نام استان';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'كد استان (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'كد استان (2)';
	var $_PHPSHOP_ADDRESS = 'آدرس';
	var $_PHPSHOP_CONTINUE = 'ادامه';
	var $_PHPSHOP_EMPTY_CART = 'سبد خريد شما در حال حاضر خالي مي باشد.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Ping InterShipper Server';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'InterShipper-Server Ping ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'InterShipper Ping Failed';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'InterShipper Ping Successful';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'حمل كننده';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'پاسخ<br />زمان';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'ثانيه';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'ليست  روشهاي حمل';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'روشهاي حمل فعال';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'روشهاي حمل';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'فعال';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'هزينه جابجايي';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'زمان ارجاع';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'ميزان ثابت';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'درصد';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'روز';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'بارهاي سنگين';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'پيكربندي روشهاي حمل';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'افزودن روش حمل';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'پيكربندي روش حمل';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'شروع مجدد';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'روش حمل';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'فعالسازي';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'هزينه جابجايي';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'زمان ارجاع';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'ميزان ثابت';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'درصد';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'روز';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'بارهاي سنگين';
	var $_PHPSHOP_ORDER_MOD = 'سفارشات';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'تاييد سفارش';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'فسخ سفارش';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'چاپ سفارش';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'حذف سفارش';
	var $_PHPSHOP_ORDER_LIST_MNU = 'ليست  سفارشات';
	var $_PHPSHOP_ORDER_LIST_LBL = 'ليست سفارش';
	var $_PHPSHOP_ORDER_LIST_ID = 'شماره سفارش';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'تاريخ سفارش';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'آخرين تغييرات اعمال شده';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'وضعيت';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'جمع اوليه';
	var $_PHPSHOP_ORDER_ITEM = 'آيتمهاي سفارش';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'سفارش خريد';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'شماره سفارش';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'تاريخ سفارش';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'وضعيت سفارش';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'اطلاعات مشتري';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'اطلاعات مربوط به صورتحساب';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'اطلاعات پستي';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'صورتحساب به';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'حمل به';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'نام';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'شركت';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'سطر اول آدرس';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'سطر دوم آدرس';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'شهر';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'استان/منطقه';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'كد پستي';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'كشور';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'تلفن';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'فكس';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'پست الكترونيكي';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'آيتمهاي سفارش';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'مقدار';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'مقدار';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'واحد';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'قيمت';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'جمع كل';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'جمع اوليه';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'جمع ماليات';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'هزينه جابجايي و حمل';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'ماليات حمل و نقل';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'روش پرداخت';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'نام حساب';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'شماره حساب';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'تاريخ انقضا';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'گزارش پرداخت';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'اطلاعات حمل و نقل';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'اطلاعات پرداخت';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'حمل كننده';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'شيوه حمل';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'تاريخ حمل';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'قيمت حمل و نقل';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'ليست  انواع وضعيت سفارش';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'افزودن نوع وضعيت سفارش';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'كد وضعيت سفارش';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'نام وضعيت سفارش';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'وضعيت سفارش';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'كد وضعيت سفارش';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'نام وضعيت سفارش';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'ترتيب در ليست';
	var $_PHPSHOP_PRODUCT_MOD = 'كالاها';
	var $_PHPSHOP_CURRENT_PRODUCT = 'كالاي كنوني';
	var $_PHPSHOP_CURRENT_ITEM = 'آيتم كنوني';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'صورت كالاها';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'مشاهده صورت كالاها';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'قيمت';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'شماره';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'وزن';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'ليست  كالاها';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'ليست كالاها';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'نام كالا';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'واحد';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'انتشار';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'جستجوي كالا';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'تغيير يافته';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'با قيمت تغيير داده شده';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'بدون قيمت';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'بعد از';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'قبل از';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'افزودن كالا';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'ويرايش اين كالا';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'مشاهده مشخصات كنوني كالا در فروشگاه';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'افزودن آيتم';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'افزودن آيتم ديگر';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'كالاي جديد';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'بروز رساني كالا';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'اطلاعات كالا';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'وضعيت كالا';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'وزن و ابعاد كالا';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'تصاوير كالا';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'آيتم جديد';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'بروز رساني آيتم';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'اطلاعات آيتم';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'وضعيت آيتم';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'وزن و ابعاد آيتم';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'تصاوير آيتم';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'بازگشت به كالاي مبداء';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'براي بروز رساني تصوير واقعي ، مسير تصوير جديد را وارد نماييد.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'حذف تصوير كنوني.';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'آيتمهاي كالا';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'ويژگيهاي آيتم';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'آيا مطمئن به حذف اين كالا و آيتمهاي مربوط به آن مي باشيد؟ ';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'آيا مطمئن به حذف اين آيتم مي باشيد؟';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'فروشنده';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'توليد كننده';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'واحد';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'نام';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'آدرس اينترنتي';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'مجموعه';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'قيمت كالا (نا خالص)';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'قيمت كالا (خالص)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'شرح كالا';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'شرح كوتاه';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'در انبار';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'بر اساس سفارش';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'تاريخ موجود بودن';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'ويژه';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'نوع تخفيف';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'انتشار؟';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'طول';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'عرض';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'ارتفاع';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'واحد اندازه گيري';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'وزن';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'واحد اندازه گيري';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'تصوير كوچك';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'تصوير كامل';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'پوند (وزن)';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'اينچ';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'واحد';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'عدد';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'تعداد در هر بسته';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'مشخص نمودن تعداد كالا در بسته بندي. (حداكثر. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'تعداد در هر جعبه';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'مشخص نمودن تعداد بسته در هر جعبه. (حداكثر. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'نتايج افزودن كالاها';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'نتايج بروز رساني كالاها';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'نتايج افزودن آيتمها';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'نتايج بروز رساني آيتمها';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'استفاده از انتشار فايل CSV';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'پوشه هاي كالا';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'ليست مجموعه ها';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'شاخه هاي مجموعه';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'افزودن مجموعه';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'اطلاعات مجموعه';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'نام مجموعه';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'مبداء';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'شرح مجموعه';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'انتشار؟';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'صفحه توضيحات مجموعه';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'ليست ويژگيها';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'ليست ويژگيها براي';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'نام ويژگي';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'ترتيب در ليست';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'افزودن ويژگي';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'فرم ويژگي';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'ويژگي جديد براي كالا';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'بروز رساني ويژگيها براي كالا';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'ويژگي جديد براي آيتم';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'بروز رساني ويژگي براي آيتم';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'نام ويژگي';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'ترتيب در ليست';
	var $_PHPSHOP_PRICE_LIST_MNU = 'ليست  قيمتها';
	var $_PHPSHOP_PRICE_LIST_LBL = 'ليست قيمت';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'قيمت براي';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'نام گروه';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'قيمت';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'واحد پولي';
	var $_PHPSHOP_PRICE_FORM_MNU = 'افزودن قيمت';
	var $_PHPSHOP_PRICE_FORM_LBL = 'اطلاعات قيمت';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'قيمت جديد براي كالا';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'بروز رساني قيمت براي كالا';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'قيمت جديد براي آيتم';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'بروز رساني قيمت براي آيتم';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'قيمت';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'واحد پولي';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'گروه خريداران';
	var $_PHPSHOP_REPORTBASIC_MOD = 'گزارشات';
	var $_PHPSHOP_RB_INDIVIDUAL = 'ليست بندي كالاهاي منحصربفرد';
	var $_PHPSHOP_RB_SALE_TITLE = 'گزارش فروش';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'مرور فعاليتهاي فروش';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'نوع گزارش';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'ماهانه';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'هفتگي';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'روزانه';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'اين ماه';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'ماه گذشته';
	var $_PHPSHOP_RB_LAST60_BUTTON = '60 روز اخير';
	var $_PHPSHOP_RB_LAST90_BUTTON = '90 روز اخير';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'شروع در تاريخ';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'اتمام در تاريخ';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'نمايش ميزان انتخاب شده';
	var $_PHPSHOP_RB_REPORT_FOR = 'گزارش ';
	var $_PHPSHOP_RB_DATE = 'تاريخ';
	var $_PHPSHOP_RB_ORDERS = 'سفارشات';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'كليه آيتمهاي فروخته شده';
	var $_PHPSHOP_RB_REVENUE = 'درآمد';
	var $_PHPSHOP_RB_PRODLIST = 'ليست كالا';
	var $_PHPSHOP_SHOP_MOD = 'فروشگاه';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'تصوير';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'قيمت';
	var $_PHPSHOP_ORDER_STATUS_P = 'در حال انتظار';
	var $_PHPSHOP_ORDER_STATUS_C = 'تاييد شده';
	var $_PHPSHOP_ORDER_STATUS_X = 'لغو شده';
	var $_PHPSHOP_ORDER_BUTTON = 'سفارش';
	var $_PHPSHOP_SHOPPER_MOD = 'خريدار';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'ليست  خريداران';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'ليست خريداران';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'نام كاربري';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'نام كامل';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'گروه';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'افزودن خريدار';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'اطلاعات خريدار';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'اطلاعات مربوط به صورتحساب';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'اطلاعات';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'اطلاعات مربوط به حمل و نقل';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'افزودن آدرس';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'نام مستعار آدرس';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'نام كاربري';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'نام';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'نام خانوادگي';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'پسوند';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'عنوان';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'نام خريدار';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'رمز عبور';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'تاييد رمز عبور';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'گروه خريدار';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'نام شركت';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'سطر اول آدرس';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'سطر دوم آدرس';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'شهر';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'استان/منطقه';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'كد پستي';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'كشور';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'تلفن';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'موبايل';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'فكس';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'پست الكترونيكي';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'بله';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'خير';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'ليست  گروههاي خريداران';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'ليست گروههاي خريداران';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'نام گروه';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'شرح گروه';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'فرم گروه خريداران';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'افزودن گروه خريداران';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'نام گروه';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'شرح گروه';
	var $_PHPSHOP_STORE_MOD = 'فروشگاه';
	var $_PHPSHOP_STORE_FORM_MNU = 'ويرايش فروشگاه';
	var $_PHPSHOP_STORE_FORM_LBL = 'اطلاعات فروشگاه';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'اطلاعات تماس';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'تصوير كامل';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'انتشار تصوير';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'نام فروشگاه';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'نام شركت فروشگاه';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'سطر اول آدرس';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'سطر دوم آدرس';
	var $_PHPSHOP_STORE_FORM_CITY = 'شهر';
	var $_PHPSHOP_STORE_FORM_STATE = 'استان/منطقه';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'كشور';
	var $_PHPSHOP_STORE_FORM_ZIP = 'كد پستي';
	var $_PHPSHOP_STORE_FORM_PHONE = 'تلفن';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'واحد پولي';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'مجموعه مربوط به فروشگاه';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'نام خانوادگي';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'نام';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'پسوند';
	var $_PHPSHOP_STORE_FORM_TITLE = 'عنوان';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'تلفن 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'تلفن 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'فكس';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'پست الكترونيكي';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'مسير تصوير';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'شرح';
	var $_PHPSHOP_PAYMENT = 'پرداخت';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'ليست  روشهاي پرداخت';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'ليست روشهاي پرداخت';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'نام';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'كد';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'تخفيف';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'گروه خريداران';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'نوع روش پرداخت';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'افزودن روش پرداخت';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'فرم روش پرداخت';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'نام روش پرداخت';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'گروه خريداران';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'تخفيف';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'كد';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'ترتيب در ليست';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'نوع روش پرداخت';
	var $_PHPSHOP_TAX_MOD = 'ماليات';
	var $_PHPSHOP_TAX_RATE = 'ميزان مالياتها';
	var $_PHPSHOP_TAX_LIST_MNU = 'ليست  ميزانهاي مالياتي';
	var $_PHPSHOP_TAX_LIST_LBL = 'ليست ميزانهاي مالياتي';
	var $_PHPSHOP_TAX_LIST_STATE = 'منطقه ياايالت گيرنده ماليات';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'كشور گيرنده ماليات';
	var $_PHPSHOP_TAX_LIST_RATE = 'ميزان ماليات';
	var $_PHPSHOP_TAX_FORM_MNU = 'افزودن ميزان مالياتي ';
	var $_PHPSHOP_TAX_FORM_LBL = 'افزودن اطلاعات ماليات';
	var $_PHPSHOP_TAX_FORM_STATE = 'منطقه ياايالت گيرنده ماليات';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'كشور گيرنده ماليات';
	var $_PHPSHOP_TAX_FORM_RATE = 'ميزان ماليات (براي 16% => عدد را به اين شكل وارد نماييد 0.16)';
	var $_PHPSHOP_VENDOR_MOD = 'فروشنده';
	var $_PHPSHOP_VENDOR_ADMIN = 'فروشندگان';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'ليست فروشندگان';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'ليست فروشندگان';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'نام فروشنده';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'مدير';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'افزودن فروشنده';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'افزودن اطلاعات';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'اطلاعات فروشنده';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'اطلاعات تماس';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'تصوير كامل';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'انتشار تصوير';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'نام انبار فروشنده';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'نام شركت فروشنده';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'سطر اول آدرس';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'سطر دوم آدرس';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'شهر';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'استان/منطقه';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'كشور';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'كد پستي';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'تلفن';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'واحد پولي';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'مجموعه مربوط به فروشنده';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'نام خانوادگي';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'نام';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'پسوند';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'عنوان';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'تلفن 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'تلفن 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'فكس';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'پست الكترونيكي';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'مسير تصوير';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'شرح';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'ليست مجموعه هاي مربوط به فروشنده';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'ليست مجموعه هاي مربوط به فروشنده';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'نام مجموعه';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'شرح مجموعه';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'فروشندگان';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'افزودن مجموعه براي فروشنده';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'فرم مجموعه فروشندگان';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'اطلاعات مجموعه';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'نام مجموعه';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'شرح مجموعه';
	var $_PHPSHOP_MANUFACTURER_MOD = 'توليد كننده';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'توليدكنندگان';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'ليست توليد كنندگان';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'ليست توليد كنندگان';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'نام توليد كننده';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'مدير';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'افزودن توليد كننده';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'افزودن اطلاعات';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'اطلاعات توليد كننده';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'نام توليد كننده';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'مجموعه مربوط به توليد كننده';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'پست الكترونيكي';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'آدرس صفحه اينترنتي توليد كننده';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'شرح';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'ليست مجموعه هاي مربوط به توليدكنندگان';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'ليست مجموعه هاي مربوط به توليدكنندگان';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'نام مجموعه';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'شرح مجموعه';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'توليد كنندگان';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'افزودن مجموعه مربوط به توليدكنندگان';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'فرم مجموعه توليدكنندگان';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'اطلاعات مجموعه';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'نام مجموعه';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'شرح مجموعه';
	var $_PHPSHOP_HELP_MOD = 'راهنما';
	var $_PHPSHOP_CART_ACTION = 'بروز رساني';
	var $_PHPSHOP_CART_UPDATE = 'بروز رساني مقدار در سبد خريد';
	var $_PHPSHOP_CART_DELETE = 'حذف كالا از سبد خريد';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'قيمت';
	var $_PHPSHOP_PRODUCT_CALL = 'استعلام بهاء';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'قبلي';
	var $_PHPSHOP_PRODUCT_NEXT = 'بعدي';
	var $_PHPSHOP_CART_TAX = 'ماليات';
	var $_PHPSHOP_CART_SHIPPING = 'هزينه جابجايي و حمل';
	var $_PHPSHOP_CART_TOTAL = 'جمع كل';
	var $_PHPSHOP_CHECKOUT_NEXT = 'بعدي';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'ثبت نام';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'اطلاعات صورتحساب';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'شركت';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'نام';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'آدرس';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'تلفن';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'فكس';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'پست الكترونيكي';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'اطلاعات پستي';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'شركت';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'نام';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'آدرس';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'تلفن';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'فكس';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'اطلاعات پرداخت';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'نام روي كارت';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'روش پرداخت';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'شماره كارت اعتباري';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'تاريخ انقضاء';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'تكميل سفارش';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'اطلاعات درخواستي هنگاميكه پرداخت از طريق كارت اعتباري انتخاب شده باشد';
	var $_PHPSHOP_ZONE_MOD = 'حمل منطقه اي';
	var $_PHPSHOP_ZONE_LIST_MNU = 'ليست مناطق';
	var $_PHPSHOP_ZONE_FORM_MNU = 'افزودن منطقه';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'تخصيص مناطق';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'كشور';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'منطقه كنوني';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'تخصيص به منطقه';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'بروز رساني';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'تخصيص مناطق';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'نام منطقه';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'شرح منطقه';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'هزينه منطقه بر هر آيتم';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'محدوده هزينه هاي منطقه';
	var $_PHPSHOP_ZONE_LIST_LBL = 'ليست مناطق';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'نام منطقه';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'شرح منطقه';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'هزينه منطقه بر هر آيتم';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'محدوده هزينه هاي منطقه';
	var $_PHPSHOP_LOGIN_FIRST = 'لطفاً ابتدا وارد سايت شده يا ثبت نام نماييد (از ماژول ورود به سايت استفاده نماييد).<br>متشكريم.';
	var $_PHPSHOP_STORE_FORM_TOS = 'شرايط خدمات';
	var $_PHPSHOP_AGREE_TO_TOS = 'ابتدا بايد موافقت خود را با شرايط خدمات اعلام داريد.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'با شرايط خدمات موافقم.';
	var $_PHPSHOP_LEAVE_BLANK = '(اگر فايل php منحصر بفردي  براي اين بخش نداشته باشيد ، محل آن را خالي بگذاريد !<br />)';
	var $_PHPSHOP_RETURN_LOGIN = 'بازگشت مجدد : لطفاً دوباره وارد شويد';
	var $_PHPSHOP_NEW_CUSTOMER = 'اگر ثبت نام نكرده ايد ، لطفاً اطلاعات مربوط به صورتحساب را وارد نماييد.';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'اكانت مشتري :';
	var $_PHPSHOP_ACC_ORDER_INFO = 'اطلاعات سفارش';
	var $_PHPSHOP_ACC_UPD_BILL = 'در اينجا مي توانيد اطلاعات مربوط به صورتحساب خود را بروز رساني نماييد.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'در اينجا مي توانيد آدرسهاي پستي را اضافه و نگهداري نماييد.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'اطلاعات اكانت';
	var $_PHPSHOP_ACC_SHIP_INFO = 'اطلاعات پستي';
	var $_PHPSHOP_ACC_NO_ORDERS = 'هيچ سفارشي براي نمايش وجود ندارد.';
	var $_PHPSHOP_ACC_BILL_DEF = '- پيش فرض (همانند صورتحساب)';
	var $_PHPSHOP_SHIPTO_TEXT = 'مي توانيد مكانهاي حمل را به اكانت خود اضافه نماييد. لطفاً براي مكان حملي كه در پايين انتخاب مي نماييد كد يا نام مستعار مناسبي برگزينيد.';
	var $_PHPSHOP_CONFIG = 'پيكربندي';
	var $_PHPSHOP_USERS = 'كاربران';
	var $_PHPSHOP_IS_CC_PAYMENT = 'پرداخت با كارت اعتباري مي باشد؟';
	var $_PHPSHOP_SHIPPING_MOD = 'حمل و نقل';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'حمل و نقل';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'حمل كننده';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'ليست حمل كنندگان';
	var $_PHPSHOP_RATE_LIST_MNU = 'ميزانهاي حمل و نقل';
	var $_PHPSHOP_RATE_LIST_LBL = 'ليست ميزانهاي حمل و نقل';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'نام';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'ترتيب ليست';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'تعريف حمل كننده جديد ';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'ويرايش / ايجاد حمل كننده';
	var $_PHPSHOP_RATE_FORM_MNU = 'تعريف ميزان حمل و نقل';
	var $_PHPSHOP_RATE_FORM_LBL = 'ايجاد/ويرايش ميزان حمل و نقل';
	var $_PHPSHOP_RATE_FORM_NAME = 'شرح ميزان حمل و نقل';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'حمل كننده';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'كشور';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'ابتداي كد پستي';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'انتهاي كد پستي';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'كمترين وزن';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'بيشترين وزن';
	var $_PHPSHOP_RATE_FORM_VALUE = 'هزينه';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'هزينه بسته';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'واحد پولي';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'شناسه مالياتي';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'ترتيب در ليست';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'حمل كننده';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'شرح ميزان حمل و نقل';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'ميزان وزن از ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... به';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'شركت حمل و نقل';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'ترتيب ليست';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'خطا : ID حمل كننده موجود مي باشد.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'خطا : يك حمل كننده انتخاب نماييد';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'خطا : حداقل يك ميزان حمل موجود مي باشد. قبل از حمل كننده ميزانها را حذف نماييد.';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'خطا : قادر به يافتن حمل كننده اي با اين ID نمي باشد.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'خطا : يك حمل كننده انتخاب نماييد.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'خطا : قادر به يافتن حمل كننده اي با اين ID نمي باشد.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'خطا : يك توصيفگر ميزان مورد نياز است.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'خطا : كشور مقصد معتبر نمي باشد. براي جدا كردن كشورها مي توان از علامت ";" استفاده نمود.';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'خطا : كمترين ميزان وزن مورد نياز مي باشد';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'خطا : بيشترين ميزان وزن مورد نياز مي باشد';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'خطا : كمترين ميزان وزن بايد كمتر از بيشترين ميزان وزن باشد';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'خطا : وارد كردن هزينه حمل اجباري است';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'خطا : بايد يك واحد پولي انتخاب نماييد';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'خطا : وارد كردن ميزان حمل اجباري است';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'لطفاً انتخاب نماييد';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'حمل كننده';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'ميزان حمل و نقل';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'قيمت';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-هيچكدام-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'كارت اعتباري';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'استفاده از پردازشگر پرداخت';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'دبيت';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'فقط آدرس / پرداخت نقدي هنگام تحويل';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'لطفاً يك آدرس پستي انتخاب نماييد !';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'لطفاً يك روش حمل انتخاب نماييد !';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'لطفاً يك روش پرداخت انتخاب نماييد !';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'لطفاً داده ها را مرور كرده و سفارش را تاييد نماييد !';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'لطفاً يك روش حمل انتخاب نماييد.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'لطفاً روش حمل ديگري انتخاب نماييد.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'لطفاً يك روش پرداخت انتخاب نماييد.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'لطفاً شماره كارت اعتباري خود را وارد نماييد.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'لطفاً نام روي كارت اعتباري را وارد نماييد.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'شماره وارد شده براي كارت اعتباري معتبر نمي باشد.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'لطفاً تاريخ ماه انقضاي كارت اعتباري را وارد نماييد.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'لطفاً تاريخ سال انقضاي كارت اعتباري را وارد نماييد.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'تاريخ انقضا معتبر نمي باشد.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'لطفاً آدرس حملي انتخاب نماييد.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'شماره حساب نا معتبر مي باشد.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'كالايي در سبد خريد شما وجود ندارد !';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'خطا : لطفاً يك شركت حمل انتخاب نماييد !';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'خطا : ميزان حمل انتخاب شده يافت نشد !';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'خطا : آدرس پستي شما يافت نشد !';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'خطا : داده هاي مربوط به كارت اعتباري موجود نمي باشد ...';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'خطا : شماره كارت اعتباري يافت نشد !';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'متاسفانه ، شماره اي كه براي كارت اعتباري وارد نموده ايد شماره اي آزمايشي مي باشد !';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'شناسه كاربري در بانك اطلاعاتي يافت نشد !';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'نام صاحب حساب بانكي را وارد ننموده ايد.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'شماره حساب بانكي بين المللي خود را وارد ننموده ايد.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'شماره حساب بانكي خود را وارد ننموده ايد.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'كد sort بانك خود را وارد ننموده ايد.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'نام بانك خود را وارد ننموده ايد.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'مراحل پيشروي براي پرداخت از طريق CheckOut بايد معتبر باشد !';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'اطلاعات پرداخت براي دفعات بعد خيره گرديد. <br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'هنوز به حداقل ميزان سفارش خريد نرسيده است.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'حداقل ميزان سفارش خريد برابر است با :';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'پرداخت با كارت اعتباري';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'ساير روشهاي پرداخت';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'لطفاً روش پرداختي انتخاب نماييد :';
	var $_PHPSHOP_STORE_FORM_MPOV = 'حداقل ميزان سفارش خريد براي فروشگاه شما';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'اطلاعات حساب بانكي';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'شماره حساب';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'شماره كد سرتينگ بانك';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'نام بانك';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'شماره حساب بانكي بين المللي';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'صاحب حساب';
	var $_PHPSHOP_MODULES = 'ماژولها';
	var $_PHPSHOP_FUNCTIONS = 'عملكردها';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'كالاهاي ويژه';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'اگر مايليد مي توانيد همراه با سفارش خود يادداشتي درج نماييد.';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'يادداشت مشتري';
	var $_PHPSHOP_INCLUDING_TAX = '(شامل $ماليات % ماليات)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'لطفاً آيتمي انتخاب نماييد';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'آيتم';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'فضاي داونلود';
	var $_PHPSHOP_DOWNLOADS_START = 'شروع داونلود';
	var $_PHPSHOP_DOWNLOADS_INFO = 'لطفاً ID داونلودي را كه در پست الكترونيكي خود دريافت نموده ايد وارد كرده و كليد \'شروع داونلود\' را كليك نماييد.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'متاسفانه داونلود شما متوقف شده است.';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'متاسفانه بعلت انجام حداكثر داونلود مجاز ، نمي توانيد داونلود ديگري انجام دهيد.';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'ID داونلود معتبر نمي باشد !';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'ناموفق در ارسال پيام به ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'پيام فرستاده شد به ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'اطلاعات داونلود';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'فايلهايي كه سفارش داده ايد براي داونلود آماده مي باشند.';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'لطفاً ID هاي داونلود زيرين را در فضاي داونلود وارد نماييد : ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'حداكثر تعداد داونلود براي براي هر فايل عبارت است از : ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'داونلود حداكثر تا {expire} بعد از اولين داونلود';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'سئوالات؟ مشكلات؟';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'اطلاعات داونلود از ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'كالاي قابل داونلود؟';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'از پرداخت شما متشكريم. 
        پرداخت با موفقيت انجام پذيرفت. نامه تاييدي از PayPal بدين منظور دريافت خواهيد نمود. اكنون مي توانيد به فعاليت خود در سايت ادامه داده يا براي مشاهده جزئيات پرداخت خود وارد سايت PayPal در
        <a href=http://www.paypal.com>www.paypal.com</a> شويد.';
	var $_PHPSHOP_PAYPAL_ERROR = 'در هنگام پردازش پرداخت شما خطايي رخ داد و وضعيت سفارش شما قابل بروز رساني نمي باشد.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'با تشكر از خريد شما ، اطلاعات سفارش شما در زير آورده مي شود.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'از حمايت شما متشكريم و اميدواريم از خدمات اين سايت كمال رضايت را داشته باشيد.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'سئوالات؟ مشكلات؟';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'سفارش زير دريافت شده است.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'با استفاده از لينك زير مي توانيد محتواي سفارش را مشاهده نماييد.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'وارد كردن مقدار منفي مجاز نمي باشد.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'لطفاً مقدار صحيحي براي اين آيتم وارد نماييد.';
	var $_PHPSHOP_CART_STOCK_1 = 'مقدار انتخاب شده بيشتر از موجودي انبار مي باشد. ';
	var $_PHPSHOP_CART_STOCK_2 = 'مقدار موجودي انبار در حال حاضر $product_in_stock آيتم مي باشد. ';
	var $_PHPSHOP_CART_STOCK_3 = 'براي قرار گرفتن در ليست انتظار كالا اينجا كليك نماييد.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'لطفاً آيتم ويژه اي انتخاب نماييد.';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'هيچكدام';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'آقاي';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'خانم';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'دكتر';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'مهندس';
	var $_PHPSHOP_DEFAULT = 'پيش فرض';
	var $_PHPSHOP_AFFILIATE_MOD = 'مديريت برنامه همكاري';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'ليست همكاري كنندگان';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'ليست همكاري كنندگان';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'نام همكاري كننده';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'فعال';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'ميزان';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'جمع كل ماهانه';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'درصد ماهانه';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'ليست سفارشات';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'ارسال پست الكترونيكي به همكاري كنندگان';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'ارسال پست الكترونيكي به همكاري كنندگان';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'ارسال پست الكترونيكي به(* = همه)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'پست الكترونيكي';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'موضوع';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'در بر گرفتن آمار كنوني';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'ميزان كميسيون (درصد)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'فعال؟';
	var $_PHPSHOP_DELIVERY_TIME = 'زمان حمل معمول در';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'اطلاعات مربوط به تحويل كالا';
	var $_PHPSHOP_MORE_CATEGORIES = 'ساير مجموعه ها';
	var $_PHPSHOP_AVAILABILITY = 'موجودي';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'اين كالا در حال حاضر موجود نمي باشد.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'تارخ موجودي مجدد كالا : ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'خلاصه';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'آمار';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'مشتريان';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'كالاهاي فعال';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'كالاهاي غير فعال';
	var $_PHPSHOP_STATISTIC_SUM = 'جمع';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'سفارشات جديد';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'مشتريان جديد';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'براي اطلاع از زمان موجودي مجدد كالا در انبار ، لطفاً آدرس پست الكترونيكي خود را در پايين وارد نماييد. 
                                        از اين آدرس پست الكترونيكي شما فقط بمنظور اطلاع رساني به شما استفاده شده و هيچ مورد استفاده ديگري نخواهد داشت. <br /><br />متشكريم !';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'با تشكر از انتظار شما ! <br />بمحض دريافت صورت كالاها شما را مطلع خواهيم ساخت.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'مرا مطلع كنيد !';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'نسخه قابل چاپ';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'لطفاً Authorize.net يا CyberCash را انتخاب نماييد.';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' وضعيت فايل پيكربندي :';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'قابل نگارش مي باشد';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'قابل نگارش نمي باشد';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'عمومي';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'مسير و URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'سايت';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'حمل و نقل';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'پرداخت';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'داونلودها';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'پرداختها';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'استفاده فقط بعنوان كاتالوگ';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'با انتخاب اين گزينه تمامي عملكردهاي سبد خريد را غير فعال خواهيد نمود.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'نمايش قيمتها';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'نمايش قيمتها با ماليات افزوده؟';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'تعيين كننده نمايش قيمتها با ماليات افزوده يا بدون ماليات.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'براي نمايش قيمتها بايد اين گزينه را انتخاب نماييد. اگر از كاتولوگ استفاده مي نماييد ، برخي مايل نخواهند بود كه قيمتها در صفحات نمايش داده شوند.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'ماليات مجازي';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'اين گزينه مشخص كننده تخصيص يا عدم تخصيص ماليات به كالاهاي بي وزن مي باشد. براي تغيير اين گزينه بايد ps_checkout.php->calc_order_taxable() را تغيير دهيد.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'شيوه ماليات :';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'بر اساس آدرس پستي';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'بر اساس آدرس فروشنده';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'اين گزينه مشخص كننده ميزان مالياتي براي محاسبه مالياتها مي باشد :<br /> <ul><li>بر اساس كشور يا استان مالك فروشگاه</li><br/> <li>يا بر اساس كشور يا استان خريدار.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'فعالسازي ميزانهاي جندگانه مالياتي؟';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'اگر كالاهايي با ميزانهاي مالياتي متفاوتي داشته باشيد ، اين گزينه را انتخاب نماييد (بعنوان مثال  7% براي كتاب و مواد غذايي و 16% براي ساير اقلام)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'كم كردن ميزان تخفيف قبل از افزودن ماليات و هزينه حمل؟';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'فعالسازي سيستم مرور/رتبه بندي توسط مشتريان؟';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'با فعالسازي اين گزينه به مشتريان امكان <strong>رتبه بندي كالاها </strong> و <strong>نوشتن يادداشت</strong> درباره آنها را فراهم مي آوريد. <br /> با اين امكان مشتريان مي توانيد تجربيات خود را در استفاده از آن كالا در اختيار ديگران نيز قرار دهند. <br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'مشخص كننده كسر تخفيف پرداخت قبل (در اينصورت گزينه بايد انتخاب گردد) يا بعد از افزودن ميزانهاي مالياتي و هزينه هاي حمل و نقل.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'مشتريان مي توانند اطلاعات حساب بانكي خود را وارد نمايند؟';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'با انتخاب اين گزينه مشتريان قادر به وارد كردن اطلاعات حساب بانكي خود در هنگام ثبت نام به فروشگاه خواهند بود.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'انتخاب استان يا منطقه توسط مشتريان؟';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'با انتخاب اين گزينه مشتريان شما قادر به انتخاب داده هاي استان يا منطقه خود در هنگام ثبت نام براي فروشگاه خواهند بود. ';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'اعلام موافقت با شرايط خدمات؟';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'با انتخاب اين گزينه خريدار قبل از ثبت نام در فروشگاه مجبور به موافقت با شرايط خدمات خواهد بود.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'بررسي انبار؟';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'اين گزينه تعيين كننده بررسي يا عدم بررسي موجودي انبار هنگام افزودن آيتمي به سبد خريد توسط كاربر مي باشد. انتخاب اين گزينه باعث خواهد شد كاربران نتوانند مقدار كالاهايي بيشتر از موجودي انبار را به سبد خريد اضافه نمايند.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'فعالسازي برنامه همكاري؟';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'اين برنامه باعث راه اندازي سيستم همكاري در قسمت كاربري مي شود. اگر براي اين برنامه در قسمت مديريت افرادي اضافه نموده ايد ، بايد اين گزينه را انتخاب نماييد.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'فرمت نامه سفارش :';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'نامه بصورت متن';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'نامه بصورت HTML';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'اين گزينه تعيين كننده نحوه تنظيم نامه هاي تاييد سفارش مي باشد :<br />
                                                                                        <ul><li>بصورت متن ساده</li>    <li>يا بصورت نامه html با تصاوير.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'اجازه مديريت در بخش كاربري براي كاربران عادي؟';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'با اين تنظيمات مي توانيد مديريت در بخش كاربري را براي كاربراني كه مدير انبار مي باشند ولي به بخش مديريت دسترسي ندارند (بعنوان مثال : كاربران ثبت شده / ويرايشگر) فعال نماييد.';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'آدرس اينترنتي سايت شما ؛ معمولاً يكسان با آدرس اينترنتي TgCms شما مي باشد (با يك اسلش در انتهاي آن) !)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'URL امنيتي';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'آدرس اينترنتي امنيتي به سايت شما. (https - با يك اسلش در انتها!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'URL كامپوننت';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'URL كامپوننت فروشگاه مجازي. (با يك اسلش در انتها!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'URL تصوير';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'URL دايركتوري تصوير كامپوننت فروشگاه مجازي.(با يك اسلش در انتها!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'مسير مديريت';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'مسير دايركتوري كامپوننت فروشگاه مجازي.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'مسير كلاس';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'مسير دايركتوري كلاسهاي فروشگاه شما.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'مسير صفحه';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'مسير دايركتوري html فروشگاه شما.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'مسير تصوير';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'مسير دايركتوريshop_image فروشگاه شما.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'صفحه اصلي';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'صفحه پيش فرضي كه در اولين گام نمايش داده مي شود.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'صفحه خطا';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'صفحه پيش فرض براي نمايش پيامهاي خطا.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'صفحه اشكال زدايي (debug)';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'صفحه پيش فرض براي نمايش پيامهاي اشكال زدايي.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'اشكال زدايي؟';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'اشكال زدايي؟  باعث فعالسازي ارسال گزارشات اشكال زدايي مي شود. اينكار باعث نمايش داده شدن صفحه اشكال زدايي در پايين هر صفحه مي شود و از آنجايي كه محتويات سبدهاي خريد ، فرمها و غيره را در طول توسعه فروشگاه نمايش مي دهد بسيار مفيد مي باشد.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'صفحه جزئيات';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'صفحه پيش فرض براي نمايش جزئيات كالا.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'الگوي مجموعه';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'اين گزينه تعيين كننده الگوي مجموعه پيش فرض براي نمايش كالاها در مجموعه مي باشد.<br /> با ايجاد تغييرات در فايلهاي موجود الگو مي توانيد الگوهاي جديدي ايجاد نماييد.<br />
                                                                                                      (كه در دايركتوري <strong>COMPONENTPATH/html/templates/</strong> قرار گرفته و با مرورگر شروع مي شود_)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'تعداد پيش فرض كالاها در هر سطر';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'مشخص كننده تعداد كالاها در هر سطر. <br />
                                                                                                      مثال : اگر عدد 4 را وارد نماييد ، الگوي مجموعه 4 كالا را در هر سطر نمايش خواهد داد.';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = 'تصوير "تصوير وجود ندارد"';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'هنگاميكه تصويري براي كالا موجود نباشد اين تصوير نمايش داده خواهد شد.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'سطرهاي جستجو';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'مشخص كننده تعداد سطرها در هر صفحه هنگام نمايش نتايج جستجو در يك ليست.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'رنگ نتايج جستجو 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'مشخص كننده رنك سطور فرد در ليست نتايج جستجو.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'رنگ نتايج جستجو 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'مشخص كننده رنك سطور زوج در ليست نتايج جستجو.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'حداكثر سطر';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'مشخص كننده تعداد رديفها براي نمايش در باكس انتخاب ليست سفارشات.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'نمايش زيرصفحه';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'تصوير طراحي و اجرا توسط شركت مجري را نمايش مي دهد.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'انتخاب روش حمل در فروشگاه';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'ماژول استاندارد حمل و نقل با نرخها و حمل كننده هاي منحصر بفرد. <strong>توصيه مي شود!</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = 'ماژول حمل و نقل منطقه اي نسخه 1.0<br />
                                                                                                            براي كسب اطلاعات بيشتر در مورد اين ماژول لطفاً مراجعه نماييد به <a href="http://wwwbazar.com">http://wwwbazar.com</a><br />
                                                                                                            براي مشاهده جزئيات يا اطلاعات تماس مراجعه نماييد به <a href="http://wwwbazar.com">
	wwwbazar</a><a href="mailto:info@wwwbazar.com">.com</a><br /> براي فعالسازي ماژول حمل و نقل منطقه اي بايد اين گزينه را انتخاب نماييد.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<a href="http://www.wwwbazar.com" target="_blank">UPS Onlineï؟½ ابزار</a> محاسبه هزينه حمل و نقل';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'كد دسترسي UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'كد شما براي دسترسي به UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'كد شما براي دسترسي به UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'كد كاربري كه از UPS دريافت نموده ايد';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'رمز عبور UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'رمز عبور براي اكانت UPS شما';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'InterShipper Module. Check only if you have an <a href="http://www.intershipper.com" target="_blank">Intershipper.com</a> account';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'غير فعال نمودن روش حمل. اگر كالاي فروشي شما قابل داونلود بوده و نيازي به حمل و نقل نداشته باشد ، اين گزينه را انتخاب نماييد.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'رمز عبور InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'رمز عبور شما براي اكانت intershipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'پست الكترونيكي InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'آدرس پست الكترونيكي شما براي اكانت intershipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'كليد رمز گذاري';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'مورد استفاده براي رمزدار كردن داده هاي ذخيره شده در بانك اطلاعاتي. بدان معني كه اين فايل نبايد هميشه نمايش داده شود.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'فعالسازي نوار پرداخت';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'اگر مايليد \'نوار پرداخت\' در طي پروسه پرداخت به مشتري نمايش داده شود ( با گرافيكهاي 1 - 2 - 3 - 4)  ، اين گزينه را انتخاب نماييد.';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'انتخاب پروسه پرداخت فروشگاه';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>استاندارد :</strong><br/>
              1. درخواست آدرس پستي<br />
              2. درخواست روش حمل و نقل<br />
              3. درخواست روش پرداخت<br />
              4. اتمام سفارش';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>پروسه 2 :</strong><br/>
              1. درخواست آدرس پستي<br />
              2. درخواست روش پرداخت<br />
              3. اتمام سفارش';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>پروسه 3 :</strong><br/>
              1. درخواست روش حمل و نقل<br />
              2. درخواست روش پرداخت<br />
              3. اتمام سفارش';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>پروسه 4 :</strong><br/>
              1. درخواست روش پرداخت<br />
              2. اتمام سفارش';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'فعالسازي داونلودها';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'براي فعالسازي داونلودها اين گزينه بايد انتخاب گردد. در اين حالت كالاهاي فروشي بايد قابل داونلود باشند.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'وضعيت سفارشي كه داونلود را فعال مي سازد';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'وضعيت سفارشي را انتخاب نماييد كه در آن مشتري از طريق پست الكترونيكي از داونلود مطلع مي شود.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'وضعيت سفارشي كه داونلود را غير فعال مي سازد';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'وضعيت سفارشي را تنظيم نماييد كه در آن امكان داونلود براي مشتري غير فعال مي شود.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'مسير داونلود';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'مسير دسترسي به فايلها براي داونلود مشتريان. (با يك اسلش در انتها!)<br>
        <span class="message">براي امنيت فروشگاه خود : لطفاً اگر مي توانيد از يك دايركتوري در بيرون از WEBROOT استفاده نماييد.</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'حداكثر داونلود';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'تنظيم كننده تعداد داونلودي كه مي توان با يك شناسه داونلود (براي يك سفارش) انجام داد.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'انقضاي داونلود';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'تنظيم كننده ميزان زمان <strong>به ثانيه</strong> كه در آن مدت امكان داونلود براي مشتريان فعال مي ماند. اين ميزان زماني با اولين داونلود شروع شده و بعد از اتمام زمان شناسه داونلود غير فعال مي شود. 
  <br />توجه : 86400 ثانيه = 24  ساعت.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'فعالسازي پرداخت IPN از طريق PayPal؟';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'براي فراهم نمودن امكان استفاده كاربران از سيستم پرداخت PayPal ، اين گزينه بايد انتخاب گردد.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'پست الكترونيكي پرداخت PayPal :';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'آدرس پست الكترونيكي كاري شما براي پرداخت از طريق PayPal . همچنين بعنوان آدرس دريافت كننده نيز بكار گرفته خواهد شد.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'وضعيت سفارش براي تراكنشهاي موفق';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'اگر PayPal IPN موفقيت آميز باشد ، وضعيت سفارش را به وضعيتي كه سفارش واقعي به آن تنظيم شده است انتخاب نماييد. در صورت استفاده از گزينه هاي فروش كالاهاي قابل داونلود : وضعيتي را انتخاب نماييد كه داونلود را فعال نمايد (در اين حالت مشتري بلافاصله از طريق پست الكترنيكي از داونلود  مطلع مي شود).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'وضعيت سفارش براي براي تراكنشهاي ناموفق';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'وضعيت سفارشي براي تراكنشهاي ناموفق PayPal انتخاب نماييد.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'فعالسازي پرداخت از طريق PayMate؟';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'اين گزينه امكان استفاده از سيستم پرداخت استراليايي PayMate را براي مشتريان فراهم مي سازد.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'نام كاربري PayMate:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'اكانت كاربري شما براي PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'فعالسازي پرداخت از طريق  Authorize.net؟';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'اين گزينه امكان استفاده از سيستم پرداخت Authorize.net را فراهم مي سازد.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'روش آزمايشي؟';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'در هنگام آزمايش گزينه \'بله\' را انتخاب نماييد. براي فعالسازي تراكنشهاي واقعي بايد گزينه \'خير\' انتخاب گردد.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'بله';
	var $_PHPSHOP_ADMIN_CFG_NO = 'خير';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'شناسه ورودي Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'شناسه شما براي ورود به Authorize.Net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'كليد تراكنش Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'كليد تراكنش شما براي Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Authentication Type';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'This is the Authorize.Net authentication type.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'فعالسازي پرداخت از طريق CyberCash؟';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'اين گزينه امكان استفاده از سيستم پرداخت CyberCash  فراهم مي سازد.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash MERCHANT';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_MERCHANT شناسه CyberCash Merchant مي باشد';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'كليد CyberCash Merchant';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'كليد CyberCash Merchant از جانب CyberCash ارائه مي گردد.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'URL پرداخت CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'URL پرداخت CyberCash لينكي است كه از جانب Cybercash براي پرداخت امن ارائه مي گردد.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash AUTH TYPE';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'CyberCash AUTH TYPE is the Cybercash authentication type provided by Cybercase';
	var $_PHPSHOP_ADVANCED_SEARCH = 'جستجوي پيشرفته';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'جستجو در تمام مجموعه ها';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'جستجو در اطلاعات تمامي كالاها';
	var $_PHPSHOP_SEARCH_PRODNAME = 'تنها در نام كالا';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'تنها در توليد كننده/فروشنده';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'تنها در شرح كالا';
	var $_PHPSHOP_SEARCH_AND = 'و';
	var $_PHPSHOP_SEARCH_NOT = 'بجز';
	var $_PHPSHOP_SEARCH_TEXT1 = 'اولين ليست كشويي امكان انتخاب يك مجموعه براي محدود كردن جستجو را فراهم مي آورد و ليست كشويي دوم محدود كردن جستجو به قسمتي از اطلاعات كالا مانند نام كالا را ممكن مي سازد. بعد از انتخاب يكي از ليستها كلمات كليدي مورد نظر خود را وارد كرده و جستجو را آغاز نماييد. ';
	var $_PHPSHOP_SEARCH_TEXT2 = ' همچنين مي توانيد با افزودن كلمه كليدي دوم و انتخاب جدا كننده و يا بجز جستجوي خود را بيش از پيش دقيقتر نماييد. انتخاب و بمعني وجود هر دو كلمه در كالاي مورد جستجو و انتخاب بجز بمنزله وجود كلمه اول و عدم وجود كلمه دوم در كالاي مورد جستجو مي باشد. 
       ';
	var $_PHPSHOP_ORDERBY = 'ترتيب بر اساس';
	var $_PHPSHOP_CUSTOMER_RATING = 'ميانگين رتبه بندي توسط مشتري';
	var $_PHPSHOP_TOTAL_VOTES = 'كل نظرات';
	var $_PHPSHOP_CAST_VOTE = 'لطفاً راي خود را اعلام نماييد';
	var $_PHPSHOP_RATE_BUTTON = 'درجه';
	var $_PHPSHOP_RATE_NOM = 'درجه بندي';
	var $_PHPSHOP_REVIEWS = 'نظرات مشتريان';
	var $_PHPSHOP_NO_REVIEWS = 'تا كنون نظري در مورد اين كالا ارائه نگرديده است.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'اولين نفر براي ارائه نظر مي توانيد شما باشيد...';
	var $_PHPSHOP_REVIEW_LOGIN = 'براي ارائه نظر خود لطفاً وارد سيستم شويد.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'براي تكميل نظر خود ، لطفاً براي كالا رتبه اي مشخص نماييد (تعداد ستاره)!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'لطفاً براي نظر خود از كلمات بيشتري استفاده نماييد. حداقل تعداد كاراكترها برابر است با : 100';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'لطفاً نظر خود را كوتاهتر نماييد. حداكثر كاراكتر مجاز برابر است با : 2000';
	var $_PHPSHOP_WRITE_REVIEW = 'نظر خود را نسبت به اين كالا بنويسيد !';
	var $_PHPSHOP_REVIEW_RATE = '
	ابتدا : براي كالا رتبه اي انتخاب نماييد. رتبه بايد بين صفر (كمترين ميزان) و 5 ستاره (بهترين ميزان) انتخاب گردد.';
	var $_PHPSHOP_REVIEW_COMMENT = '
	اكنون نظري كوتاه در مورد كالا يادداشت نماييد....(حداقل 100 و حداكثر 2000 كاراكتر) ';
	var $_PHPSHOP_REVIEW_COUNT = 'تعداد كاراكتر : ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'ارسال نظر';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'شما قبلاً نظر خود را درباره اين كالا نوشته ايد. متشكريم.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'از يادداشت نظرتان متشكريم.';
	var $_PHPSHOP_COMMENT = 'نظر';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'افزودن/ويرايش نوع كارت اعتباري';
	var $_PHPSHOP_CREDITCARD_NAME = 'نام كارت اعتباري';
	var $_PHPSHOP_CREDITCARD_CODE = 'نام مشخصه كارت اعتباري';
	var $_PHPSHOP_CREDITCARD_TYPE = 'نوع كارت اعتباري';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'ليست كارتهاي اعتباري';
	var $_PHPSHOP_UDATE_ADDRESS = 'بروز رساني آدرس';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'ادامه خريد';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'سفارش شما با موفقيت ارسال گرديد !';
	var $_PHPSHOP_ORDER_LINK = 'براي مشاهده جزئيات سفارش به اين لينك مراجعه نماييد.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'وضعيت سفارش شما بشماره {order_id} تغيير يافت.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'وضعيت جديد عبارت است از :';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'براي مشاهده جزئيات سفارش بر روي اين لينك كليك نموده يا آن را در مرورگر خود كپي نماييد :';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'تغيير وضعيت سفارش : سفارش شما {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'مطلع نمودن مشتري؟';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'لطفاً ابتدا وضعيت سفارش را تغيير دهيد !';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'تخفيف در قيمت براي گروه خريداران پيش فرض (به %)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'مقدار مثبت X بدين معني است كه : اگر كالا قيمتي تعيين شده براي اين گروه خريداران نداشته باشد ، مقدار X % از قيمت پيش فرض كاسته خواهد شد. مقدار منفي اثر مثبت خواهد داشت.';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'تخفيف كالا';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'ليست تخفيف كالا';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'افزودن/ويرايش تخفيف كالا';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'مقدار تخفيف';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'مقدار مورد نظر براي تخفيف را وارد نماييد';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'نوع تخفيف';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'درصد';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'جمع كل';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'مقدار مورد نظر بصورت درصدي از كل باشد يا كل مبلغ؟';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'روز شروع تخفیف';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'مشخص كننده روزي است كه اعمال تخفيف آغاز مي شود';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'روز اتمام تخفيف';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'مشخص كننده روزي است كه اعمال تخفيف تمام مي شود';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'براي افزودن تخفيف مي توانيد از فرم تخفيف كالا استفاده نماييد !';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'تخفيف';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'مشاهده تصوير سايز كامل';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'سبك نمايش واحد پولي';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'نشان واحد پولي';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'مي توانيد از HTML نيز استفاده نماييد (بعنوان مثال : ï؟½,ï؟½,ï؟½,...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'رقم اعشاري';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'تعداد ارقام اعشاري براي نمايش (مي توان از عدد صفر استفاده نمود)<br><b>اگر عدد تعداد ارقام اعشاري متفاوتي داشته باشد ، سيستم عمل گرد كردن را بر روي آن عدد انجام مي دهد.</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'نشان اعشار';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'كاراكتر مورد استفاده بعنوان نشان اعشار';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'جداكننده هزارگان';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'كاراكتر مورد استفاده براي جدا كردن سه رقمي اعداد (مي توان از هيچ نشاني استفاده ننمود)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'شكل اعداد مثبت';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'فرمت مورد استفاده براي نمايش اعداد مثبت.<br>(Symb بيانگر نشان واحد پولي مي باشد)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'شكل اعداد منفي';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'فرمت مورد استفاده براي نمايش اعداد منفي.<br>(Symb بيانگر نشان واحد پولي مي باشد)';
	var $_PHPSHOP_OTHER_LISTS = 'ساير ليستهاي كالايي';
	var $_PHPSHOP_MORE_IMAGES = 'مشاهده تصاوير بيشتر';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'تصاوير موجود براي';
	var $_PHPSHOP_BACK_TO_DETAILS = 'بازگشت به جزئيات كالا';
	var $_PHPSHOP_FILEMANAGER = 'مدير فايل';
	var $_PHPSHOP_FILEMANAGER_LIST = 'مدير فايل::ليست كالا';
	var $_PHPSHOP_FILEMANAGER_ADD = 'افزودن تصوير/فايل';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'تصاوير تخصيص يافته';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'قابل داونلود مي باشد؟';
	var $_PHPSHOP_FILEMANAGER_FILES = 'فايلهاي تخصيص يافته (ديتاشيتها,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'انتشار؟';
	var $_PHPSHOP_FILES_LIST = 'مدير فايل::ليست تصوير/فايل براي';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'نام فايل';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'عنوان فايل';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'نوع فايل';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'ويرايش ورودي فايل';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'تصوير كامل';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'تصوير كوچك';
	var $_PHPSHOP_FILES_FORM = 'انتشار فايل براي';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'فايل كنوني';
	var $_PHPSHOP_FILES_FORM_FILE = 'فايل';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'تصوير';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'انتشار در';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'مسير پيش فرض تصوير كالا';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'محل فايل را مشخص نماييد.';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'مسير داونلود (بعنوان مثال براي فروش كالاهاي قابل داونلود!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'ايجاد تصوير كوچك بصورت خودكار؟';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'انتشار فايل؟';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'عنوان فايل (قابل مشاهده براي مشتريان)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'شرح فايل';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'URL فايل (اختياري)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'لطفاً مسير صحيحي وارد نماييد !';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'تصوير كوچك با موفقيت ايجاد گرديد !';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'قادر به ايجاد تصوير كوچك نمي باشد !';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'خطا در انتشار فايل/تصوير';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'قادر به حذف فايل كامل تصوير نمي باشد.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'تصوير كامل حذف گرديد.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'قادر به حذف فايل تصوير كوچك نمي باشد (ممكن است اين فايل اصلاً وجود نداشته باشد) : ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'تصوير كوچك حذف گرديد.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'قادر به حذف فايل نمي باشد.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'فايل حذف گرديد.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'متاسفانه فايل درخواست شده يافت نشد !';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'تصوير يافت نشد !';
	var $_PHPSHOP_COUPON_MOD = 'كوپن ';
	var $_PHPSHOP_COUPONS = 'كوپن ها';
	var $_PHPSHOP_COUPON_LIST = 'ليست كوپن ها';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'اين كوپن  قبلاً استفاده شده است.';
	var $_PHPSHOP_COUPON_REDEEMED = 'كوپن  پذيرفته شد! متشكريم.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'لطفاً در صورت داشتن كوپن  كد آن را در پايين وارد نماييد :';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'ارسال';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'كد كوپن  وارد شده قبلاً به سيستم وارد شده است. لطفاً مجدداً اقدام نماييد.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'بروز رساني كوپن ';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'براي ويرايش كد كوپن  روي آن كليك نماييد. براي حذف كد كوپن  آن را انتخاب كرده و بر روي كليد حذف كليك نماييد :';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'كد';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'درصد يا كل';
	var $_PHPSHOP_COUPON_TYPE = 'نوع كوپن ';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'كوپن  هديه بعد از اعمال تخفيف آن در سفارش حذف مي گردد ، ولي كوپن  دائمي به دفعات مورد دلخواه قابل استفاده مي باشد.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'كوپن  هديه';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'كوپن  دائمي';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'ارزش';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'حذف كد';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'آيا مطمئن به حذف كد كوپن  مي باشيد؟';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'لطفاً تمامي قسمتها را كامل نماييد.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'ارزش كوپن  با عدد مشخص مي شود.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'كوپن  جديد';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'كد كوپن ';
	var $_PHPSHOP_COUPON_PERCENT = 'درصد';
	var $_PHPSHOP_COUPON_TOTAL = 'كل';
	var $_PHPSHOP_COUPON_VALUE = 'ارزش';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'كد كوپن  ذخيره شد.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'ذخيره كوپن ';
	var $_PHPSHOP_COUPON_DISCOUNT = 'تخفيف كوپن ';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'كد كوپن  يافت نشد. لطفاً دوباره اقدام نماييد.';
	var $_PHPSHOP_COUPONS_ENABLE = 'فعالسازي استفاده از كوپن ';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'با فعالسازي استفاده از كوپن  به كاربران امكان وارد كردن شماره هاي كوپن  براي اخذ تخفيف هنگام خريد را فراهم مي آوريد.';
	var $_PHPSHOP_FREE_SHIPPING = 'حمل رايگان';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'در اين سفارش حمل كالا رايگان است !';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'حداقل مقدار براي حمل رايگان';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'مقدار پرداختي (با احتساب ماليات!) كه حداقل مقدار براي حمل رايگان مي باشد (مثال : <strong>50</strong> بدين معني است كه حمل رايگان زماني صورت مي پذيرد كه مشتري مقدار معادل 50 واحد پولي (با احتساب ماليات) يا بيش از آن پرداخت كرده باشد.';
	var $_PHPSHOP_YOUR_STORE = 'فروشگاه شما';
	var $_PHPSHOP_CONTROL_PANEL = 'كنترل پانل';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'كليد PDF';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'نمايش يا پنهان كردن كليد PDF در فروشگاه';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'اعلام موافقت با شرايط خدمات در هر سفارش؟';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'اگر مي خواهيد خريدار در هر سفارش (قبل از ارسال سفارش) با شرايط خدمات شما موافقت نمايد ، اين گزينه را انتخاب نماييد.';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'نوع حساب بانكي';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'جاري';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'جاري تجاري';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'پس انداز';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Recurring Billings?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Define wether you want recurring billings.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Internal Error processing the Request to';
	var $_PHPSHOP_PAYMENT_ERROR = 'پردازش پرداخت ناموفق بود.';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'پرداخت بدرستي پردازش گرديد';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS قادر به پردازش درخواست نرخ حمل نمي باشد .';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'روز براي تحويل';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'برداشت محموله براي حمل در UPS';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'چگونه بسته را براي حمل به UPS تحويل مي دهيد؟';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'بسته بندي UPS؟';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'نوع پيش فرض بسته بندي را انتخاب نماييد.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'تحويل به منطقه مسكوني؟';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'منطقه مسكوني';
	var $_PHPSHOP_UPS_COMMERCIAL = 'تحويل به مكان تجاري';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'اعلام هزينه براي تحويل به منطقه مسكوني يا مكان تجاري.';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'هزينه جابجايي';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'هزينه جابجايي شما براي اين روش حمل.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'طبقه مالياتي';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'استفاده از اين طبقه مالياتي در هزينه حمل.';
	var $_PHPSHOP_ERROR_CODE = 'كد خطا';
	var $_PHPSHOP_ERROR_DESC = 'توضيح خطا';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'نمايش / تغيير كليد تراكنش';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'نمايش/تغيير كليد رمز عبور/تراكنش';
	var $_PHPSHOP_TYPE_PASSWORD = 'لطفاً رمز عبور كاربري خود را وارد نماييد';
	var $_PHPSHOP_CURRENT_PASSWORD = 'رمز عبور كنوني';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'كليد تراكنش كنوني';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'كليد تراكنش تغيير يافت.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'درخواست/گرفتن ارزش معادل كد كارت اعتباري (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'بررسي اعتبار ارزش معادل CVV2/CVC2/CID (عددي سه يا چهار رقمي در پشت كارتهاي اعتباري يا جلوي كارتهاي آمريكن اكسپرس)؟';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'لطفاً عدد سه يا چهار رقمي در پشت كارتهاي اعتباري يا جلوي كارتهاي آمريكن اكسپرس را وارد نماييد.';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'براي پيشروي بايد حتماً كد كارت اعتباري خود را وارد نماييد.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'نام فايلي وارد كرده';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'توجه : نام فايل را مي توانيد اينجا وارد نماييد. <strong>اگر نام فايلي اينجا وارد نماييد ، هيچ فايلي انتشار نخواهد يافت !!! در اين حالت بايد آن را از طريق طريق FTP بصورت دستي انتشار نماييد!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'يا فايل جديدي انتشار نماييد';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'مي توانيد فايل لوكالي انتشار نماييد. اين فايل كالاي فروشي شما خواهد بود و جايگزين فايل موجود خواهد شد.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'هر متني را كه مايليد در صفحه جزئيات كالا به مشتري نمايش داده شود در اينجا وارد نماييد.<br />بعنوان مثال : 24 ساعت ، 48 ساعت ، 3-5 روز ، و غيره...';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'يا تصويري براي نمايش در صفحه جزئيات انتخاب نماييد.<br />تصاوير در دايركتوري <i>/components/com_virtuemart/shop_image/availability</i>جاي مي گيرند.<br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'ليست ويژگيها';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>مثالهايي براي فرمت ليست ويژگيها :</h4>
        <pre>سايز, XL[+1.99],M,S[-2.99];رنگ ,قرمز, سبز ,زرد ,رنگ تيره[=24.00];و غيره,..,..</pre>
        <h4>تنظيم قيمتها براي استفاده از تغييرات ويژگيهاي پيشرفته :</h4>
        <pre>
        + == افزودن اين مقدار به قيمت تعيين شده.<br />
        - == كاستن اين مقدار از قيمت تعيين شده.<br />
        = == تنظيم قيمت كالا به اين مقدار.</pre>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'ليست ويژگيهاي منحصر';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>مثالهايي براي فرمت ليست ويژگيهاي منحصر :</h4>
        <pre>نام ;امكانات جانبي;</strong>...</pre>';
	var $_PHPSHOP_MULTISELECT = 'انتخاب چند گزينه : كليد CTRL را نگه داشته و با ماوس انتخاب كنيد.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'فعالسازي پرداخت eProcessingNetwork.com؟';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'براي استفاده از پرداخت از طريق eProcessingNetwork.com  در فروشگاه اين گزينه را انتخاب نماييد.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'حالت آزمايشي؟';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'براي انجام تست گزينه \'بله\' و براي فعالسازي تراكنشهاي واقعي گزينه \'خير\' را انتخاب نماييد.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'شناسه ورود به eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'شناسه شما براي ورود به eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'كليد تراكنش eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'كليد شما براي انجام تراكنش در eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Authentication Type';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'This is the eProcessingNetwork.com authentication type.';
	var $_PHPSHOP_RELATED_PRODUCTS = 'كالاهاي مرتبط';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'با استفاده از اين ليست مي توانيد ارتباط كالايي ايجاد نماييد. كافي است يك يا چند كالا در اينجا انتخاب نماييد و اين كالاها <strong>كالاهاي مرتبط</strong> شما هستند.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'همچنين ممكن است به اين كالا / كالاها علاقمند باشيد ';
	var $_PHPSHOP_IMAGE_ACTION = 'اعمال تصوير';
	var $_PHPSHOP_NONE = 'هيچكدام';
	var $_PHPSHOP_ORDER_HISTORY = 'تاريخچه سفارش';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'نظر';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'نظرات نسبت به سفارش شما';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'در بر داشتن اين نظر؟';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'تاريخ افزوده شدن';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'به مشتري اطلاع داده شد؟';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'تغيير وضعيت سفارش';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = 'نام كاربري حمل USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = 'نام كاربري حمل USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = 'رمز عبور حمل USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = 'رمز عبور حمل USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER = 'سرور حمل USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP = 'سرور حمل USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH = 'مسير حمل USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP = 'مسير حمل USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_CONTAINER = 'USPS shipping container';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_CONTAINER_TOOLTIP = 'USPS shipping container';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE = 'اندازه بسته USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP = 'اندازه بسته USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGEID = 'شناسه بسته USPS (بايد صفر باشد ، بسته هاي چندتايي را پشتيباني نمي كند.)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGEID_TOOLTIP = 'شناسه بسته USPS (بايد صفر باشد ، بسته هاي چندتايي را پشتيباني نمي كند.)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIPSERVICE = 'نوع حمل USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIPSERVICE_TOOLTIP = 'نوع حمل USPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_HANDLING_FEE = 'هزينه جابجايي';
	var $_PHPSHOP_USPS_HANDLING_FEE = 'هزينه جابجايي شما براي اين روش حمل.';
	var $_PHPSHOP_USPS_HANDLING_FEE_TOOLTIP = 'هزينه جابجايي شما براي اين روش حمل.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE = 'هزينه جابججايي بين المللي شما براي حملهاي USPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP = 'هزينه جابججايي بين المللي شما براي حملهاي USPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE = 'ميزان بين المللي شما براي هر واحد وزني پوند در حملهاي USPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP = 'ميزان بين المللي شما براي هر واحد وزني پوند در حملهاي USPS.';
	var $_PHPSHOP_USPS_RESPONSE_ERROR = 'UPS قادر به پردازش درخواست نرخ حمل نشد.';
	var $_PHPSHOP_PARAMETERS_LBL = 'پارامترها';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'نوع كالا';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'ليست انواع كالا';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'افزودن/ويرايش نوع كالا';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'ليست انواع كالا براي';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'ليست انواع كالا';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'افزودن نوع كالا براي';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'افزودن نوع كالا';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'نوع كالا';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'نام نوع كالا';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'شرح نوع كالا';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'پارامترها';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'اطلاعات نوع كالا';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'انتشار؟';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'صفحه انتخاب نوع كالا';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'صفحه توضيحات نوع كالا';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'پارامترهاي نوع كالا';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'اطلاعات پارامتر';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'نوع كالا يافت نشد !';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'نام پارامتر';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'اين نام نام ستون جدول نيز خواهد بود و بايد unicate و بدون استفاده از خط فاصله باشد.و<BR>بعنوان مثال : main_material';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'برچسب پارامتر';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'شرح پارامتر';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'نوع پارامتر';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'عدد صحيح';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'متن';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'متن كوتاه';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Float';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Char';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'تاريخ و زمان';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'تاريخ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'سال-ماه-روز';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'زمان';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'ساعت:دقيقه:ثانيه';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'خط جدا كننده';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'ارزشهاي چندگانه';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'ارزشهاي ممكن';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'نمايش ارزشهاي ممكن بعنوان انتخاب چندگانه؟';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>در صورت امكان ارزشها تنظيم مي شوند ، پارامتر تنها مي تواند اين ارزشها را داشته باشد. مثال براي ارزشهاي ممكن :</strong><BR><span class="sectionname">آهن آلات ؛ صنايع چوب ؛ پلاستيك ؛ ... </span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'ارزش پيش فرض';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'براي ارزش پيش فرض پارامتر از اين فرمت استفاده نماييد :<ul><li>تاريخ : سال-ماه-روز</li><li>زمان : ساعت:دقيقه:ثانيه</li><li>تاريخ و زمان: سال-ماه-روز ساعت:دقيقه:ثانيه</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'واحد';
	var $_PHPSHOP_PARAMETER_SEARCH = 'جستجوي پيشرفته مطابق با پارامترها';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'جستجوي پارامترها';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'يافتن كالا مطابق با پارامترهاي فني آن؟ <BR>مي توانيد از فرمهاي آماده استفاده نماييد :';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'با عرض پوزش ، هيچ مجموعه اي براي جستجو وجود ندارد.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'با عرض پوزش ، هيچ نوع كالاعاي انتشار يافته اي با اين نام وجود ندارد.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'مانند';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'بر خلاف';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'جستجوي متن كامل';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'تمامي گزينه هاي انتخاب شده';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'هر يك از گزينه هاي انتخاب شده';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'تنظيم مجدد فرم';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'جستجو در مجموعه';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'تغيير پارامترها';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'ترتيب از پايين به بالا';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'ترتيب از بالا به پايين';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'پارامترهاي مجموعه';
	var $_PHPSHOP_FEE = 'هزينه';
	var $_PHPSHOP_PRODUCT_CLONE = 'كالاها بصورت مجموعه';
	var $_PHPSHOP_CSV_SETTINGS = 'تنظيمات';
	var $_PHPSHOP_CSV_DELIMITER = 'جدا كننده';
	var $_PHPSHOP_CSV_ENCLOSURE = 'كاراكتر پيوست فيلد';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'انتشار فايلCSV';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'ارسال فايل CSV';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'بارگذاري از دايركتوري';
	var $_PHPSHOP_CSV_FROM_SERVER = 'بارگذاري فايل CSV از سرور';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'ارسال ليست به فايل CSV';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'انتخاب نوع ترتيب فيلد';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'ترتيب بندي پيش فرض';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'ترتيب بندي دلخواه خود';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'ارسال تمامي كالاها به فايل CSV';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'پيكربندي ارسال / دريافت CSV';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'ذخيره تغييرات';
	var $_PHPSHOP_CSV_FIELD_NAME = 'نام فيلد';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'ارزش پيش فرض';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'ترتيب بندي فيلد';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'فيلد اجباري؟';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'دريافت/ارسال';
	var $_PHPSHOP_CSV_NEW_FIELD = 'افزودن فيلد جديد';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'مستندات';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'متاسفانه كالاي درخواستي شما يافت نشد!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'نمايش كالاهاي اتمام يافته';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'در صورت فعالسازي اين گزينه ، كالاهايي كه در حال حاضر موجود نمي باشند نمايش داده مي شوند. در صورت عدم انتخاب اين گزينه اين كالاها نمايش داده نخواهند شد.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'تعداد {unit} در هر بسته :';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'تعداد {unit} در هر جعبه :';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'پنهان كردن كالاهاي اتمام يافته';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'كالاها ويژه و داراي تخفيف';
	var $_PHPSHOP_FEATURED = 'ويژه';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'بازگشت به كشور';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'بازگشت به مدير فايل';
	var $_PHPSHOP_ADD_STATE = 'افزودن استان';
	var $_PHPSHOP_LIST_STATES = 'ليست استانها';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'ويژه و داراي تخفيف';
	var $_PHPSHOP_SHOW_FEATURED = 'كالاهاي ويژه';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'كالاهاي داراي تخفيف';
	var $_PHPSHOP_FILTER = 'فيلتر';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'بازگشت به سايت اصلي';
	var $_PHPSHOP_EXPAND_TREE = 'باز كردن شاخه ها';
	var $_PHPSHOP_COLLAPSE_TREE = 'بستن شاخه ها';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'قيمت همراه با تخفيف';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'در اين اينجا مي توانيد با وارد نمودن قيمت تخفيف ويژه اي براي اين كالا تنظيمات سيستم تخفيف دهي قبلي را لغو نماييد.<br/>
فروشگاه بطور خودكار ميزان تخفيف جديدي از قيمت تخفيف داده شده ايجاد خواهد نمود.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'قيمت هر واحد';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'غير فعال نمودن فروشگاه؟';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'اگر اين گزينه را انتخاب نماييد ، پيام غير فعال بودن فروشگاه نمايش داده خواهد شد.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'پيام غير فعال بودن فروشگاه';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'پيشوند جدول براي جداول فروشگاه';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = '<strong>vm</strong> هر پيش فرض';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'نمايش صفحه راهبري در بالاي ليست كالاها؟';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'فعالسازي يا غير فعال نمودن نمايش صفحه راهبري در بالاي ليست كالاها در بخش كاربري.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'نمايش تعداد كالاها؟';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'نمايش تعداد كالاها در هر مجموعه مانند : مجموعه (4)؟';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'قالب كليد افزودن به سبد خريد';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'فعالسازي تغيير اندازه تصوير كوچك بصورت خودكار؟';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'با انتخاب اين گزينه تغيير اندازه تصاوير كوچك بصورت خودكار را فعال مي نماييد. بدين معني كه اندازه تمامي تصاوير كوچك براي متناسب شدن با قالب سايزي كه در پايين مشخص مي نماييد  با استفاده از عملكردهاي GD2 PHP (مي توانيد با مراجعه به مسير "سيستم" -> "اطلاعات سيستم" -> "اطلاعات PHP" -> gd وجود پشتيبانيGD2 را در سيستم خود بررسي نماييد) بطور خودكار تغيير مي يابند. كيفيت تصوير كوچك بسيار بهتر از تصاويري خواهد بود كه توسط مرورگر "تغيير سايز" مي يابند. تصاوير ايجاد شده جديد در دايركتوري /shop_image/prduct/resized قرار مي گيرند. اگر اندازه تصوير قبلاً تغيير يافته باشد كپي آن به مرورگر فرستاده مي شود تا از تغيير اندازه مكرر آن جلوگيري شود.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'عرض تصوير كوچك';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'اندازه مورد نظر براي <strong>عرض</strong> تصوير كوچك تغيير يافته.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'ارتفاع تصوير كوچك';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'اندازه مورد نظر براي <strong>ارتفاع</strong> تصوير كوچك تغيير يافته.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'حداقل يك مورد را در پيكربندي حمل انتخاب نماييد !';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'پيكربندي قيمتها';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'گروههاي اعضايي كه قادر به مشاهده قيمتها باشند';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'گروههاي اعضايي انتخاب شده و تمامي گروههاي داراي اجازه دسترسي بالاتر قادر به مشاهده قيمت كالاها خواهند بود.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'نمايش قيمتها "(با احتساب XX% ماليات)" در صورت تخصيص  ماليات؟';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'در صورت انتخاب اين گزينه كاربران قيمتهاي ارائه شده را با احتساب xx% ماليات مشاهده خواهند نمود. البته ابتدا بايد افزودن ماليات به قيمتها فعال شده باشد.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'نمايش برچسب قيمت براي بسته؟';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'اگر اين گزينه انتخاب گردد ، برچسب قيمت از واحد كالا و تعداد كالا در هر بسته برگرفته مي شود :<br/>
<strong>قيمت هر واحد (10 عدد)</strong><br/>
اگر گزينه انتخاب نگردد ، برچسبهاي قيمت بصورت عادي نمايش داده خواهند شد : <strong>قيمت : $xx.xx</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'تنظيمات بيشتر هسته';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'تنظيمات هسته';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'ويژگيهاي بخش كاربري';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'پيكربندي مالياتها';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'مقدار از';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'مقدار تا';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'تنظيمات ثبت نام كاربر';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'اجازه ثبت نام به كاربر؟';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'لزوم فعالسازي اكانت جديد؟';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'استفاده از ثبت نام پنهان (مخفي)؟';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'در صورت فعالسازي اين گزينه ، نيازي نيست كه كاربران براي ايجاد اكانت جديد نام كاربري و رمز عبوري ايجاد نمايند. بجاي اينكار براي ايجاد اكانت جديد از پست الكترونيكي كاربر استفاده شده و رمز عبوري براي او ايجاد مي گردد . اطلاعات اين اكانت جديد به پست الكترونيكي كاربر فرستاده مي شود.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'كاربر گرامي %s,

با تشكر از ثبت نام شما در %s ، اكانت شما بعنوان مشتري ايجاد گرديد.
با استفاده از نام كاربري و رمز عبور زيرين مي توانيد وارد سيستم %s شويد :

نام كاربري - %s
رمز عبور - %s
';
	var $_PEAR_LOG_CRIT = 'اساسي';
	var $_PEAR_LOG_ERR = 'خطا';
	var $_PEAR_LOG_WARNING = 'هشدار';
	var $_PEAR_LOG_INFO = 'اطلاعات';
	var $_PEAR_LOG_TIP = 'اطلاعات';
	var $_PEAR_LOG_ALERT = 'هشدار';
	var $_PEAR_LOG_EMERG = 'فوري';
	var $_PEAR_LOG_NOTICE = 'توجه';
	var $_PEAR_LOG_DEBUG = 'دي باگ';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'فعالسازي پرداخت از طريق PayFlow Pro؟';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'اين گزينه امكان استفاده از سيستم پرداخت VeriSign PayFlow Pro را فراهم مي سازد.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'روش آزمايشي؟';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'در هنگام آزمايش گزينه \'بله\' را انتخاب نماييد. براي فعالسازي تراكنشهاي واقعي بايد گزينه \'خير\' انتخاب گردد.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'شناسه VeriSign processing Partner';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'شناسه Partner  كه از جانب فروشنده مجاز VeriSign كه شما را براي خدمات  PayFlow Pro ثبت نام نمود.';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'شناسه ورودي PayFlow Pro';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'شناسه شما براي ورود به PayFlow Pro';
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
	var $_VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX = 'The Session Save Path %s is not writable. Please correct this! The shop is temporarily trying to use the %s instead.';
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
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DELETE = 'The product_delete field is a special field. This field is used to determine if a product should be deleted or not.<br />Usage:<ol><li>Add the name "product_delete" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the value Y. If the field contains any other value, the product will not be deleted.</li></ol><br /.>Values:<ul><li>Y: Yes, the product is to be deleted</li><li>N: No, the product is not to be deleted</li><li>Empty: Empty value, the product is not to be deleted</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DESC = 'Long description for the product.<br />Values:<ul><li>Text: HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_S_DESC = 'Short description for the product.<br />Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PUBLISH = 'The status if a product is published or not.<br />Values:<ul><li>Y: Yes, the product is published</li><li>N: No, the product is not published</li><li>Empty: Empty value, the product is published.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WIDTH = 'The width of the product.<br />Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_HEIGHT = 'The height of the product.<br />Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABLE_DATE = 'The date a product will become availabable. For import the date should be in the format of day/month/year or day-month-year. On Windows systems the date goes until 19/01/2038.<br />Usage:<ol><li>Add the name "product_available_date" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a date value. If the field contains any other value, the data will be ignored.</li></ol><br />Values:<ul><li>Date: day/month/year or day-month-year</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_IN_STOCK = 'The number of articles that you have in stock.<br /><br />Usage:<ol><li>Add the name "product_in_stock" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a numeric value. If the field contains any other value, the default value will be used.</li></ol><br />Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE = 'The different choices a product has. Use this to give a product different specifications. For example a t-shirt that comes in different sizes and colours. You can specify the sizes and colours like this: Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00];AndSoOn,..,..<br /><br />You can adjust the prices per attribute by using the following options:<ul><li>+: Add this amount to the configured price.</li><li>-: Subtract this amount from the configured price.</li><li>=: Set the product\\\'s price to this amount.</li></ul><br />Usage:<ol><li>Add the name "attribute" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the attribute text.</li></ol><br /.>Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABILITY = 'This shows when the product is available. The value can be a descriptive text or the name of an image filename. Images must be placed in "shop_image/availability/".<br />Usage:<ol><li>Add the name "product_availability" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_FULL_IMAGE = 'The filename of the image as located in the "shop_image/product/" folder. The filename can also be a URL.<br />NOTE: If you have dynamic resizing enabled, you need to fill the "product_thumb_image" field. VirtueMart resizes the image specified there.<br/><br />Usage:<ol><li>Add the name "product_full_image" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\\\'s are allowed.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_THUMB_IMAGE = 'The filename of the thumbnail image as located in the "shop_image/product/" folder. The filename can also be a URL.<br />NOTE: If you have dynamic resizing enabled, there still needs to be a value in this field. VirtueMart resizes the image that is specified here.<br /><br />Usage:<ol><li>Add the name "product_full_image" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\\\'s are allowed.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CUSTOM_ATTRIBUTE = 'A custom attribute will add an input field to the product page with the description of the attribute supplied. Custom attributes are specified like this: Name;Extras;...<br />Usage:<ol><li>Add the name "custom_attribute" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the attribute text.</li></ol><br /.>Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PACKAGING = 'Specify the number of items in the package.<br />Usage:<ol><li>Add the name "product_packaging" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the number of items in the package.</li></ol><br /.>Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_BOX = 'Specify the number of items in the box.<br />Usage:<ol><li>Add the name "product_box" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the number of items in the box.</li></ol><br /.>Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT = 'Specify the amount or percentage of discount the product has. The values entered are exact values, no calculation is made. This is the same as if you are filling in a discount via the Product Discount List. If the discount already exists, it will not be added to the database but the product will be linked to the existing discount. The criteria for determining if a discount already exists the following values have to be exactly the same:<ol><li>Amount, be it a total or percentage</li><li>Start date</li><li>End date</li></ol>This prevents from filling the database with a huge number of the same discounts.<br /><br />Usage:<ol><li>Add the name "product_discount" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Optional: Add the name "product_discount_date_start" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Optional: Add the name "product_discount_date_end" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add the chosen columns to your CSV file with the corresponding values.</li></ol><br /.>Values:<ul><li>product_discount</li><ul><li>Number<br />e.g. 10</li><li>Percentage: Must include the % sign<br />e.g. 10%</li></ul><li>product_discount_date_start</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul><li>product_discount_date_end</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul></ul>';
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