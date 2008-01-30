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
	var $_PHPSHOP_MENU = 'メニュー';
	var $_PHPSHOP_CATEGORY = 'カテゴリー';
	var $_PHPSHOP_CATEGORIES = 'カテゴリー';
	var $_PHPSHOP_SELECT_CATEGORY = 'カテゴリ選択:';
	var $_PHPSHOP_ADMIN = 'Administration';
	var $_PHPSHOP_PRODUCT = '商品';
	var $_PHPSHOP_LIST = 'リスト';
	var $_PHPSHOP_ALL = '全て';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = '全ての商品リスト';
	var $_PHPSHOP_VIEW = '見る';
	var $_PHPSHOP_SHOW = '表示';
	var $_PHPSHOP_ADD = '追加';
	var $_PHPSHOP_UPDATE = '更新';
	var $_PHPSHOP_DELETE = '削除';
	var $_PHPSHOP_SELECT = '選択';
	var $_PHPSHOP_SUBMIT = '送信';
	var $_PHPSHOP_RANDOM = 'ランダム商品';
	var $_PHPSHOP_LATEST = '新製品';
	var $_PHPSHOP_HOME_TITLE = 'Home';
	var $_PHPSHOP_CART_TITLE = 'カート';
	var $_PHPSHOP_CHECKOUT_TITLE = '精算';
	var $_PHPSHOP_LOGIN_TITLE = 'ログイン';
	var $_PHPSHOP_LOGOUT_TITLE = 'ログアウト';
	var $_PHPSHOP_BROWSE_TITLE = 'ブラウズ';
	var $_PHPSHOP_SEARCH_TITLE = '検索';
	var $_PHPSHOP_ACCOUNT_TITLE = 'アカウントメンテ';
	var $_PHPSHOP_NAVIGATION_TITLE = 'ナビゲーション';
	var $_PHPSHOP_DEPARTMENT_TITLE = '部門';
	var $_PHPSHOP_INFO = 'インフォメーション';
	var $_PHPSHOP_BROWSE_LBL = 'ブラウズ';
	var $_PHPSHOP_PRODUCTS_LBL = '商品';
	var $_PHPSHOP_PRODUCT_LBL = '商品';
	var $_PHPSHOP_SEARCH_LBL = '検索';
	var $_PHPSHOP_FLYPAGE_LBL = '詳しい情報を見る';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = '商品検索';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = '商品名';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = '商品カテゴリ';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = '詳細';
	var $_PHPSHOP_CART_SHOW = 'カートの中を表示';
	var $_PHPSHOP_CART_ADD_TO = 'カートに入れる';
	var $_PHPSHOP_CART_NAME = '名前';
	var $_PHPSHOP_CART_SKU = '商品コード';
	var $_PHPSHOP_CART_PRICE = '価格';
	var $_PHPSHOP_CART_QUANTITY = '数量';
	var $_PHPSHOP_CART_SUBTOTAL = '小計';
	var $_PHPSHOP_ADD_SHIPTO_1 = '新規';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'お届け先';
	var $_PHPSHOP_NO_SEARCH_RESULT = '検索しましたが見つかりませんでした<br />';
	var $_PHPSHOP_PRICE_LABEL = '価格: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'カートに入れる';
	var $_PHPSHOP_NO_CUSTOMER = 'お客様の情報が全て登録されていません。請求先情報を入力して下さい。';
	var $_PHPSHOP_DELETE_MSG = 'このレコードを削除しますか？';
	var $_PHPSHOP_THANKYOU = '御注文ありがとうございました。';
	var $_PHPSHOP_NOT_SHIPPED = 'まだ発送していません';
	var $_PHPSHOP_EMAIL_SENDTO = 'メール送信確認';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'com_virtuemartに追加するユーザリストがJoomla!にありません。';
	var $_PHPSHOP_ERROR = 'エラー';
	var $_PHPSHOP_MOD_NOT_REG = 'モジュールが登録出来ません';
	var $_PHPSHOP_MOD_ISNO_REG = 'phpShopモジュールを登録して下さい。';
	var $_PHPSHOP_MOD_NO_AUTH = 'あなたには、要求されたモジュールにアクセスする許可がありません。';
	var $_PHPSHOP_PAGE_404_1 = 'ページが見つかりません';
	var $_PHPSHOP_PAGE_404_2 = 'ファイルが見つかりません';
	var $_PHPSHOP_PAGE_403 = 'アクセス権がありません。';
	var $_PHPSHOP_FUNC_NO_EXEC = '実行権限がありません ';
	var $_PHPSHOP_FUNC_NOT_REG = '機能が登録されていません';
	var $_PHPSHOP_FUNC_ISNO_REG = ' 有効なcom_virtuemart機能ではありません';
	var $_PHPSHOP_ADMIN_MOD = '管理';
	var $_PHPSHOP_USER_LIST_MNU = 'ユーザリスト';
	var $_PHPSHOP_USER_LIST_LBL = 'ユーザリスト';
	var $_PHPSHOP_USER_LIST_USERNAME = 'ユーザ名';
	var $_PHPSHOP_USER_LIST_FULL_NAME = '名前';
	var $_PHPSHOP_USER_LIST_GROUP = 'グループ';
	var $_PHPSHOP_USER_FORM_MNU = 'ユーザ追加';
	var $_PHPSHOP_USER_FORM_LBL = 'ユーザ情報 追加/更新';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = '請求先情報';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'お届け先の住所';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = '住所追加';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'お届け先の住所がありません';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = '住所の別名';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = '名前';
	var $_PHPSHOP_USER_FORM_LAST_NAME = '姓名';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'ミドルネーム';
	var $_PHPSHOP_USER_FORM_TITLE = 'タイトル';
	var $_PHPSHOP_USER_FORM_USERNAME = 'ユーザ名';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'パスワード';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'パスワード(確認)';
	var $_PHPSHOP_USER_FORM_PERMS = '権限';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = '顧客番号 / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = '会社名';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = '住所';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'アパート/マンション名/部屋番号';
	var $_PHPSHOP_USER_FORM_CITY = '市町村';
	var $_PHPSHOP_USER_FORM_STATE = '都道府県';
	var $_PHPSHOP_USER_FORM_ZIP = '郵便番号';
	var $_PHPSHOP_USER_FORM_COUNTRY = '国';
	var $_PHPSHOP_USER_FORM_PHONE = '電話番号';
	var $_PHPSHOP_USER_FORM_PHONE2 = '携帯電話番号';
	var $_PHPSHOP_USER_FORM_FAX = 'Fax';
	var $_PHPSHOP_USER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_MODULE_LIST_MNU = 'モジュールリスト';
	var $_PHPSHOP_MODULE_LIST_LBL = 'モジュールリスト';
	var $_PHPSHOP_MODULE_LIST_NAME = 'モジュール名';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Module Perms';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = '機能';
	var $_PHPSHOP_MODULE_LIST_ORDER = '表示順';
	var $_PHPSHOP_MODULE_FORM_MNU = 'モジュール追加';
	var $_PHPSHOP_MODULE_FORM_LBL = 'モジュール 情報';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'モジュール ラベル (トップメニュ用)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'モジュール 名';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Module Perms';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'モジュール ヘッダ';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'モジュール フッタ';
	var $_PHPSHOP_MODULE_FORM_MENU = '管理メニューでモジュールを表示しますか？';
	var $_PHPSHOP_MODULE_FORM_ORDER = '表示順';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'モジュール説明';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'ランゲージコード';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'ランゲージファイル';
	var $_PHPSHOP_FUNCTION_LIST_MNU = '機能リスト';
	var $_PHPSHOP_FUNCTION_LIST_LBL = '機能リスト';
	var $_PHPSHOP_FUNCTION_LIST_NAME = '機能名';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Class Name';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Class Method';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Perms';
	var $_PHPSHOP_FUNCTION_FORM_MNU = '機能追加';
	var $_PHPSHOP_FUNCTION_FORM_LBL = '機能情報';
	var $_PHPSHOP_FUNCTION_FORM_NAME = '機能名';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Class Name';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Class Method';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = '機能パラメータ';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = '機能説明';
	var $_PHPSHOP_CURRENCY_LIST_MNU = '通貨リスト';
	var $_PHPSHOP_CURRENCY_LIST_LBL = '通貨リスト';
	var $_PHPSHOP_CURRENCY_LIST_ADD = '通貨追加';
	var $_PHPSHOP_CURRENCY_LIST_NAME = '通貨名';
	var $_PHPSHOP_CURRENCY_LIST_CODE = '通貨コード';
	var $_PHPSHOP_COUNTRY_LIST_MNU = '国リスト';
	var $_PHPSHOP_COUNTRY_LIST_LBL = '国リスト';
	var $_PHPSHOP_COUNTRY_LIST_ADD = '国追加';
	var $_PHPSHOP_COUNTRY_LIST_NAME = '国名';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = '国コード (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = '国コード (2)';
	var $_PHPSHOP_STATE_LIST_MNU = '都道府県リスト';
	var $_PHPSHOP_STATE_LIST_LBL = '都道府県リスト: ';
	var $_PHPSHOP_STATE_LIST_ADD = '都道府県 追加/更新';
	var $_PHPSHOP_STATE_LIST_NAME = '都道府県名';
	var $_PHPSHOP_STATE_LIST_3_CODE = '都道府県コード (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = '都道府県コード (2)';
	var $_PHPSHOP_ADDRESS = '住所';
	var $_PHPSHOP_CONTINUE = '次へ';
	var $_PHPSHOP_EMPTY_CART = 'カートの中身がありません';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Ping InterShipper Server';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'InterShipper-Server Ping ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'InterShipper Ping Failed';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'InterShipper Ping Successful';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Carrier';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Response<br />Time';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'sec.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'List Ship Methods';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Active Ship Methods';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = '発送方法';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Active';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Handling Charge';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Lead Time';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'flat rate';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'percent';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'days';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Heavy Loads';
	var $_PHPSHOP_ISSHIP_FORM_MNU = '配送方法設定';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = '配送方法追加';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = '配送方法設定';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Refresh';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Ship Method';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Activate';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Handling Charge';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Lead Time';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'flat rate';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'percent';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'days';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Heavy Loads';
	var $_PHPSHOP_ORDER_MOD = '注文';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = '御注文確認';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Cancel Order';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Print Order';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Delete Order';
	var $_PHPSHOP_ORDER_LIST_MNU = '注文リスト';
	var $_PHPSHOP_ORDER_LIST_LBL = '注文リスト';
	var $_PHPSHOP_ORDER_LIST_ID = '注文番号';
	var $_PHPSHOP_ORDER_LIST_CDATE = '注文日時';
	var $_PHPSHOP_ORDER_LIST_MDATE = '最終更新日';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'ステータス';
	var $_PHPSHOP_ORDER_LIST_TOTAL = '小計';
	var $_PHPSHOP_ORDER_ITEM = '注文アイテム';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = '注文書';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = '注文番号';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = '注文日時';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = '注文ステータス';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'お客様情報';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = '請求先情報';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = '発送先住所';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = '請求先';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = '発送先';
	var $_PHPSHOP_ORDER_PRINT_NAME = '名前';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = '会社名';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = '住所';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'アパート/マンション名/部屋番号';
	var $_PHPSHOP_ORDER_PRINT_CITY = '市町村';
	var $_PHPSHOP_ORDER_PRINT_STATE = '都道府県';
	var $_PHPSHOP_ORDER_PRINT_ZIP = '郵便番号';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = '国';
	var $_PHPSHOP_ORDER_PRINT_PHONE = '電話番号';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Fax';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'Email';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Order Items';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = '数量';
	var $_PHPSHOP_ORDER_PRINT_QTY = '数量';
	var $_PHPSHOP_ORDER_PRINT_SKU = '商品コード';
	var $_PHPSHOP_ORDER_PRINT_PRICE = '価格';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = '合計';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = '小計';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = '税金合計';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = '送料と手数料料金';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = '配送税';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = '決算方法';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = '口座名義';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = '口座番号';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = '有効期限';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = '入金ログ';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = '発送先住所';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = '決済情報';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = '配送会社';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = '送料モード';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Ship Date';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = '配送料';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = '注文ステータスリスト';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = '注文ステータスタイプ追加';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = '注文ステータコード';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = '注文ステータ名';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = '注文ステータ';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = '注文ステータコード';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = '注文ステータ名';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = '表示順';
	var $_PHPSHOP_PRODUCT_MOD = '商品';
	var $_PHPSHOP_CURRENT_PRODUCT = '現在の商品';
	var $_PHPSHOP_CURRENT_ITEM = '現在のアイテム';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = '商品在庫';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = '在庫表示';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = '価格';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = '数';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = '重さ';
	var $_PHPSHOP_PRODUCT_LIST_MNU = '商品リスト';
	var $_PHPSHOP_PRODUCT_LIST_LBL = '商品リスト';
	var $_PHPSHOP_PRODUCT_LIST_NAME = '商品名';
	var $_PHPSHOP_PRODUCT_LIST_SKU = '商品コード';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = '公開';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = '商品検索';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = '更新された';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = '価格が更新された';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = '価格以外が';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = '後に';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = '前に';
	var $_PHPSHOP_PRODUCT_FORM_MNU = '商品追加';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'この商品を編集';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = '商品の現在のストア表示';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Add Item';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Add Another Item';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = '新規商品';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = '商品更新';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = '商品情報';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = '商品ステータス';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = '商品寸法と重さ';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = '商品イメージ';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = '新規アイテム';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'アイテム更新';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'アイテム情報';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'アイテムステータス';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'アイテムの大きさと重さ';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'アイテムイメージ';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = '親商品へ戻る';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'To update actual image, type in path to new image.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Delete current image.';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = '商品アイテム';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'アイテム属性';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Are you sure you want to delete this Product\\nand the Items related to it?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Are you sure you want to delete this Item?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'ベンダー';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'メーカー';
	var $_PHPSHOP_PRODUCT_FORM_SKU = '商品コード';
	var $_PHPSHOP_PRODUCT_FORM_NAME = '名前';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'カテゴリ';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = '商品価格(Gross)';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = '商品価格 (Net)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = '商品説明';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = '短い説明';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = '在庫数';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'On Order';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = '発売日';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = '特価商品';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = '割引タイプ';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = '公開';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = '長さ';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = '幅';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = '高さ';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = '測定単位';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = '重量';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = '測定単位';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'イメージ小';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'イメージ大';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = '㎏';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'cm';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = '梱包単位';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = '個';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'パッケージの構成数';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'パッケージ内に梱包されている数 (最大 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = '箱に入る構成数';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = '箱内に梱包されている数 (最大 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = '商品追加';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = '商品更新';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'アイテム追加';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'アイテム更新';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'CSVアップロード';
	var $_PHPSHOP_PRODUCT_FOLDERS = '商品フォルダー';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'カテゴリリスト';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'カテゴリーツリー';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'カテゴリー追加';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'カテゴリ情報';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'カテゴリ名';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = '親カテゴリ';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'カテゴリ説明';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = '公開';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'カテゴリ表示ページ';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = '属性リスト';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = '属性リスト:';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = '属性名';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = '表示順';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = '属性追加';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = '属性入力フォーム';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = '商品の新しい属性';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = '商品属性の更新';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'アイテムの新しい属性';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'アイテム属性の更新';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = '属性名';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = '表示順';
	var $_PHPSHOP_PRICE_LIST_MNU = '価格リスト';
	var $_PHPSHOP_PRICE_LIST_LBL = '価格リスト';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = '価格:';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'グループ名';
	var $_PHPSHOP_PRICE_LIST_PRICE = '価格';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = '通貨';
	var $_PHPSHOP_PRICE_FORM_MNU = '価格追加';
	var $_PHPSHOP_PRICE_FORM_LBL = '価格 情報';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = '商品の新しい価格';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = '商品価格の更新';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'アイテムの新しい価格';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'アイテム価格更新';
	var $_PHPSHOP_PRICE_FORM_PRICE = '価格';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = '通貨';
	var $_PHPSHOP_PRICE_FORM_GROUP = '顧客グループ';
	var $_PHPSHOP_REPORTBASIC_MOD = 'レポート';
	var $_PHPSHOP_RB_INDIVIDUAL = '個々の商品リスト';
	var $_PHPSHOP_RB_SALE_TITLE = 'Sales Reporting';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Sales Activity Overview';
	var $_PHPSHOP_RB_INTERVAL_TITLE = '期間';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = '月';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = '週';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = '日';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = '今月';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = '先月';
	var $_PHPSHOP_RB_LAST60_BUTTON = '過去60日間';
	var $_PHPSHOP_RB_LAST90_BUTTON = '過去90日間';
	var $_PHPSHOP_RB_START_DATE_TITLE = '開始日時';
	var $_PHPSHOP_RB_END_DATE_TITLE = '終了日時';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = '選択期間を表示';
	var $_PHPSHOP_RB_REPORT_FOR = 'このレポートは ';
	var $_PHPSHOP_RB_DATE = '日時';
	var $_PHPSHOP_RB_ORDERS = '注文';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'アイテム販売合計';
	var $_PHPSHOP_RB_REVENUE = 'Revenue';
	var $_PHPSHOP_RB_PRODLIST = '商品リスト';
	var $_PHPSHOP_SHOP_MOD = 'Shop';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Image';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = '価格';
	var $_PHPSHOP_ORDER_STATUS_P = '未確認';
	var $_PHPSHOP_ORDER_STATUS_C = '確認済み';
	var $_PHPSHOP_ORDER_STATUS_X = 'キャンセル';
	var $_PHPSHOP_ORDER_BUTTON = 'Order';
	var $_PHPSHOP_SHOPPER_MOD = '顧客';
	var $_PHPSHOP_SHOPPER_LIST_MNU = '顧客リスト';
	var $_PHPSHOP_SHOPPER_LIST_LBL = '顧客リスト';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'ユーザ名';
	var $_PHPSHOP_SHOPPER_LIST_NAME = '名前';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'グループ';
	var $_PHPSHOP_SHOPPER_FORM_MNU = '顧客追加';
	var $_PHPSHOP_SHOPPER_FORM_LBL = '顧客情報';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = '請求先情報';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Information';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = '発送先住所';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Add Address';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Address Nickname';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'ユーザ名';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = '名前';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = '姓名';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'ミドルネーム';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Title';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Shoppername';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'パスワード';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'パスワード(確認用)';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = '顧客グループ';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = '会社名';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = '住所';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'アパート/マンション名/部屋番号';
	var $_PHPSHOP_SHOPPER_FORM_CITY = '市町村';
	var $_PHPSHOP_SHOPPER_FORM_STATE = '都道府県';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = '郵便番号';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = '国';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = '電話番号';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = '携帯電話番号';
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
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = '顧客グループリスト';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = '顧客グループリスト';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'グループ名';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'グループ説明';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = '顧客グループ入力フォーム';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = '顧客グループ追加';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'グループ名';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'グループ説明';
	var $_PHPSHOP_STORE_MOD = 'ストア';
	var $_PHPSHOP_STORE_FORM_MNU = 'ストア編集';
	var $_PHPSHOP_STORE_FORM_LBL = 'ストア情報';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = '連絡先情報';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'フルイメージ';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'ロゴイメージをアップロード';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'ストア名';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'ストア運営会社名';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = '住所';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'アパート/マンション名/部屋番号';
	var $_PHPSHOP_STORE_FORM_CITY = '市町村';
	var $_PHPSHOP_STORE_FORM_STATE = '都道府県';
	var $_PHPSHOP_STORE_FORM_COUNTRY = '国';
	var $_PHPSHOP_STORE_FORM_ZIP = '郵便番号';
	var $_PHPSHOP_STORE_FORM_PHONE = '電話番号';
	var $_PHPSHOP_STORE_FORM_CURRENCY = '通貨';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'ストアカテゴリ';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = '姓名';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = '名前';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'ミドルネーム';
	var $_PHPSHOP_STORE_FORM_TITLE = 'タイトル';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = '電話番号 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = '電話番号 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Fax';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'Email';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'イメージパス';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = '説明';
	var $_PHPSHOP_PAYMENT = 'Payment';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = '支払方法リスト';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = '支払方法リスト';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = '名前';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'コード';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = '割引';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = '顧客グループ';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = '支払い方法タイプ';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = '支払方法追加';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = '支払方法入力フォーム';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = '支払方法名';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = '顧客グループ';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = '割引';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Code';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = '表示順';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = '支払方法タイプ';
	var $_PHPSHOP_TAX_MOD = '税';
	var $_PHPSHOP_TAX_RATE = '課税率';
	var $_PHPSHOP_TAX_LIST_MNU = '課税率リスト';
	var $_PHPSHOP_TAX_LIST_LBL = '課税率リスト';
	var $_PHPSHOP_TAX_LIST_STATE = '都道府県税';
	var $_PHPSHOP_TAX_LIST_COUNTRY = '国税';
	var $_PHPSHOP_TAX_LIST_RATE = '課税率';
	var $_PHPSHOP_TAX_FORM_MNU = '税率追加';
	var $_PHPSHOP_TAX_FORM_LBL = '税率情報';
	var $_PHPSHOP_TAX_FORM_STATE = '都道府県税';
	var $_PHPSHOP_TAX_FORM_COUNTRY = '国税';
	var $_PHPSHOP_TAX_FORM_RATE = '税率 (例: 消費税 5% => 0.05)';
	var $_PHPSHOP_VENDOR_MOD = 'ベンダー';
	var $_PHPSHOP_VENDOR_ADMIN = 'ベンダー';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'ベンダーリスト';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'ベンダーリスト';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'ベンダー名';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = '管理';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'ベンダー追加';
	var $_PHPSHOP_VENDOR_FORM_LBL = '情報追加';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'ベンダー情報';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = '連絡先情報';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'フルイメージ';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'アップロードイメージ';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'ベンダーストア名';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'ベンダー会社名';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = '住所 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = '住所 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = '市町村';
	var $_PHPSHOP_VENDOR_FORM_STATE = '都道府県';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = '国';
	var $_PHPSHOP_VENDOR_FORM_ZIP = '郵便番号';
	var $_PHPSHOP_VENDOR_FORM_PHONE = '電話番号';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = '通貨';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'ベンダーカテゴリー';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = '姓名';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = '名前';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'ミドルネーム';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'タイトル';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = '電話番号 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = '電話番号 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Fax';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'Email';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'イメージパス';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = '説明';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'ベンダーカテゴリリスト';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'ベンダーカテゴリリスト';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'カテゴリ名';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'カテゴリ説明';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'ベンダー';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'ベンダーカテゴリ追加';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'ベンダーカテゴリ入力フォーム';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'カテゴリ情報';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'カテゴリ名';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'カテゴリ説明';
	var $_PHPSHOP_MANUFACTURER_MOD = 'メーカー';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'メーカー';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'メーカーリスト';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'メーカーリスト';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'メーカー名';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Admin';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'メーカーを追加';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'メーカー情報の追加';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'メーカー情報';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'メーカー名';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'メーカカテゴリ';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'メーカのホームページ';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = '説明';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'メーカーカテゴリリスト';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'メーカーカテゴリリスト';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'カテゴリ名';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'カテゴリ説明';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'メーカー';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'メーカーカテゴリ追加';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'メーカカテゴリ追加フォーム';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'カテゴリ情報';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'カテゴリ名';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'カテゴリ説明';
	var $_PHPSHOP_HELP_MOD = 'Help';
	var $_PHPSHOP_CART_ACTION = '更新';
	var $_PHPSHOP_CART_UPDATE = '数量を変更したら、ここをクリック';
	var $_PHPSHOP_CART_DELETE = 'カートから削除';
	var $_PHPSHOP_PRODUCT_PRICETAG = '価格';
	var $_PHPSHOP_PRODUCT_CALL = '価格はお問合せ下さい';
	var $_PHPSHOP_PRODUCT_PREVIOUS = '前に';
	var $_PHPSHOP_PRODUCT_NEXT = '次へ';
	var $_PHPSHOP_CART_TAX = '税';
	var $_PHPSHOP_CART_SHIPPING = '送料と手数料料金';
	var $_PHPSHOP_CART_TOTAL = '合計';
	var $_PHPSHOP_CHECKOUT_NEXT = '次へ';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'REGISTER';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = '請求先情報';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = '会社名';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = '名前';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Address';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = '電話番号';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'Email';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = '発送先住所';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = '会社名';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = '名前';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Address';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = '電話番号';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Payment Information';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'カード名義人';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Payment Method';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'カード番号';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'カード有効期限';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'ご注文完了';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'required infomation when Payment via Credit Card is selected';
	var $_PHPSHOP_ZONE_MOD = '地域配送料';
	var $_PHPSHOP_ZONE_LIST_MNU = 'List Zones';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Add Zone';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Assign Zones';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = '国';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = '現在のゾーン';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Assign To Zone';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Update';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Assign Zones';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Zone Name';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Zone Description';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Zone Cost Per Item';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Zone Cost Limit';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Zone List';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Zone Name';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Zone Description';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Zone Cost Per Item';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Zone Cost Limit';
	var $_PHPSHOP_LOGIN_FIRST = 'Please log in or register to this site (use the Login module) first.<br>Thank you.';
	var $_PHPSHOP_STORE_FORM_TOS = 'サービス条件';
	var $_PHPSHOP_AGREE_TO_TOS = 'Please agree to our terms of Service first.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'サービス条件に同意する';
	var $_PHPSHOP_LEAVE_BLANK = '(個々のPHPファイルを用意していなければ <br />空欄にして下さい。)';
	var $_PHPSHOP_RETURN_LOGIN = '以前ご利用された方は: ユーザ名とパスワードを入力してログインして下さい';
	var $_PHPSHOP_NEW_CUSTOMER = '初めてのご利用はお客様の情報を入力して登録して下さい。';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'お客様アカウント:';
	var $_PHPSHOP_ACC_ORDER_INFO = '注文情報';
	var $_PHPSHOP_ACC_UPD_BILL = '請求先の変更/更新はこちら';
	var $_PHPSHOP_ACC_UPD_SHIP = 'お届け先の住所の追加はこちら';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'アカウント情報';
	var $_PHPSHOP_ACC_SHIP_INFO = '発送先住所';
	var $_PHPSHOP_ACC_NO_ORDERS = 'No Orders to Display';
	var $_PHPSHOP_ACC_BILL_DEF = '- デフォルト (請求先と同じ)';
	var $_PHPSHOP_SHIPTO_TEXT = 'お届け先の住所を追加します。以下のお届け先は住所の別名で適切に管理してください';
	var $_PHPSHOP_CONFIG = '設定';
	var $_PHPSHOP_USERS = 'ユーザ';
	var $_PHPSHOP_IS_CC_PAYMENT = 'is Credit Card payment?';
	var $_PHPSHOP_SHIPPING_MOD = '配送料';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = '配送料';
	var $_PHPSHOP_CARRIER_LIST_MNU = '配送';
	var $_PHPSHOP_CARRIER_LIST_LBL = '配送リスト';
	var $_PHPSHOP_RATE_LIST_MNU = '配送料';
	var $_PHPSHOP_RATE_LIST_LBL = '配送料リスト';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = '名前';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = '表示順';
	var $_PHPSHOP_CARRIER_FORM_MNU = '配送方法作成';
	var $_PHPSHOP_CARRIER_FORM_LBL = '配送方法 編集/ 作成';
	var $_PHPSHOP_RATE_FORM_MNU = '配送料金作成';
	var $_PHPSHOP_RATE_FORM_LBL = '配送量 作成/変更';
	var $_PHPSHOP_RATE_FORM_NAME = '送料の説明';
	var $_PHPSHOP_RATE_FORM_CARRIER = '配送会社';
	var $_PHPSHOP_RATE_FORM_COUNTRY = '国';
	var $_PHPSHOP_RATE_FORM_ZIP_START = '郵便番号 - 最初';
	var $_PHPSHOP_RATE_FORM_ZIP_END = '郵便番号 - 最後';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = '最低重量';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = '最高重量';
	var $_PHPSHOP_RATE_FORM_VALUE = '料金';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = '包装料';
	var $_PHPSHOP_RATE_FORM_CURRENCY = '通貨';
	var $_PHPSHOP_RATE_FORM_VAT_ID = '適用税Id';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = '表示順';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = '配送会社';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = '送料の説明';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = '最低重量';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '最大重量';
	var $_PHPSHOP_CARRIER_FORM_NAME = '配送会社';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = '表示順';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'ERROR: Shipper ID exists.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'エラー: 配送会社を選択して下さい';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'ERROR: At least one Shipping Rate exists, delete rates prior to shipper';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'ERROR: Unable to find a shipper with this ID.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'エラー: 配送会社を選択して下さい';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'ERROR: Unable to find a shipper with this ID.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'ERROR: A rate descriptor is requested.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'ERROR: The Destination country is invalid. More than one country could be separated with ";".';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'エラー: 最低重量は必要項目です。';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'エラー: 最高重量は必要項目です。';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'ERROR: The lowest weight must be smaller than the highes weight';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'ERROR: A shipping fee requested';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'エラー: 通貨を選択して下さい';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'ERROR: A Shipping Rate is requested';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = '選択して下さい';
	var $_PHPSHOP_INFO_MSG_CARRIER = '配送会社';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = '配送量';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = '価格';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-none-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'クレジットカード';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = '支払プロセッサを使用';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = '銀行引落し';
	var $_PHPSHOP_PAYMENT_FORM_AO = '代金引換';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'お届け先の住所を選択して下さい';
	var $_PHPSHOP_CHECKOUT_MSG_3 = '発送方法を選択して下さい。';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'お支払方法を選択して下さい。';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'ご注文の内容を確認してください。';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Please select a Shipping Method.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Please select another Shipping Method.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Please select a Payment Method.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Please enter your Credit Card Number.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Please enter the Name on the Credit Card.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'The Credit Card Number entered is not valid.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Please enter the Credit Card expiration month.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Please enter the Credit Card expiration year.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'The expiration date is invalid.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Please select a Ship To address.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Invalid account number.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'There\'s nothing in your cart!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'ERROR: Please select a Shipping Carrier!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'ERROR: The selected Shipping Rate was not found!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'ERROR: Your Shipping Address was not found!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'ERROR: There\'s no CreditCard data...';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'ERROR: クレジットカード番号が入力されていません。';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Sorry, but the Credit Card Number you\'ve used is a testing number!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'The user_id was not found in the database!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'You have actually not provided your bank account holder name.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'You have actually not provided your IBAN.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'You have actually not provided your bank account number.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'You have actually not provided your bank sort code.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'You have actually not provided your bank\'s name.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'CheckOut needs a valid Step!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = '後で処理する場合の決算情報<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Minimum purchase order value has not been reached yet.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'Our minimum purchase order value is:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'クレジットカード';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = '別の方法';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Please select a Payment Method:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'ストアの最小購入価格';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = '銀行口座情報';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = '口座番号';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = '銀行番号';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = '銀行名';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = '支店番号';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = '口座名義人';
	var $_PHPSHOP_MODULES = 'モジュール';
	var $_PHPSHOP_FUNCTIONS = '機能';
	var $_PHPSHOP_SPECIAL_PRODUCTS = '特価商品';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = '御注文時のメッセージと要望は以下にお書き下さい';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = '顧客メモ';
	var $_PHPSHOP_INCLUDING_TAX = '($tax %税込み)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'To add this product into your cart you have to select a product variant on the details page.アイテムを選択して下さい';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Item';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'ダウンロードエリア';
	var $_PHPSHOP_DOWNLOADS_START = 'ダウンロード開始';
	var $_PHPSHOP_DOWNLOADS_INFO = 'メールにてお知らせしたダウンロードIDを入力して\'ダウンロード開始\'をクリックして下さい。';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'ダウンロードの有効期限が切れています。';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = '最大ダウンロード回数以上はダウンロード出来ません。';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'ダウンロードIDが無効です';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'メッセージの送信に失敗しました ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'メッセージを送信しました';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'ダウンロードファイルのお知らせ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'ご注文頂きましたダウンロードファイルのURLをお知らせします。';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'ダウンロードエリアに下記のダウンロードIDを入力して下さい: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = '各ファイルの最大ダウンロード回数は: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3_2 = '回です。';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'ダウンロード可能な日数は {expire} 日間となっています。';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = '質問等はお気軽にお問合せ下さい';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = ' をご利用頂きまことにありがとうございます。 ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'ダウンロード商品';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Thanks for your payment. 
        The transaction was successful. You will get a confirmation e-mail for the transaction by PayPal. 
        You can now continue or log in at <a href=http://www.paypal.com>www.paypal.com</a> to see the transaction details.';
	var $_PHPSHOP_PAYPAL_ERROR = 'An error occured while processing your transaction. The status of your order could not be updated.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Thank you for shopping with us.  Your order information follows.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Thank you for your patronage.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Questions? Problems?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'The following order was received.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'View the order by following the link below.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Negative quantities are not allowed.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Please enter a valid quantity for this item.';
	var $_PHPSHOP_CART_STOCK_1 = 'ご希望の商品在庫がありません。 ';
	var $_PHPSHOP_CART_STOCK_2 = '現在の在庫は $product_in_stock です。';
	var $_PHPSHOP_CART_STOCK_3 = 'クリックすると入荷時に連絡致します。';
	var $_PHPSHOP_CART_SELECT_ITEM = 'アイテムを選択して下さい';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'none';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Mr.';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Mrs.';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Dr.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof.';
	var $_PHPSHOP_DEFAULT = 'デフォルト';
	var $_PHPSHOP_AFFILIATE_MOD = 'アフィリエイト管理';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'アフィリエイトリスト';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'アフィリエイトリスト';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'アフィリエイト 名';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = '有効';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = '割合';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = '月合計';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'コミッション';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = '表示順';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'Email アフィリエイト';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'Email アフィリエイト';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'メール送信先(* = ALL)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Your Email';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = '件名';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = '現在の統計情報を挿入';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = '手数料率(パーセント)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = '有効';
	var $_PHPSHOP_DELIVERY_TIME = '発送可能時期';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Delivery Information';
	var $_PHPSHOP_MORE_CATEGORIES = '他のカテゴリ';
	var $_PHPSHOP_AVAILABILITY = '在庫状況';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'この商品は在庫切れです。';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'It will be available again on: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'コントロールパネル';
	var $_PHPSHOP_STATISTIC_STATISTICS = '統計';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = '顧客';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = '有効な商品';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = '無効な商品';
	var $_PHPSHOP_STATISTIC_SUM = 'Sum';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = '新規注文';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = '新規顧客';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Please enter your e-mail address below to be notified when this product comes back in stock. 
                                        We will not share, rent, sell or use this e-mail address for any other purpose other than to 
                                        tell you when the product is back in stock.<br /><br />Thank you!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Thanks for waiting! <br />We will let you know as soon as we get our inventory.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Notify Me!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = '印刷表示';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Please choose EITHER Authorize.net OR CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' Configuration file status:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'は書込み可';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'は書込み不可';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = '全般';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'パス & URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'サイト';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = '配送';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = '精算';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Downloads';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Payments';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'カタログとして使う';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'ここにチェックを入れるとカート機能を無効にします。';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = '価格表示';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = '税込み価格を表示しますか';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = '顧客に表示される価格を税込み価格で表示します。';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'チャックを入れると価格表示します。カタログとして使用する場合は必要なりません';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'バーチャル税';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = '重量がないアイテムに税を追加するか決定します ps_checkout.php->calc_order_taxable() をカスタマイズして下さい。';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = '税 モード:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = '届け先の住所によって';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = '販売者の住所によって';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'これは課税対象が計算方法を決定します:<br />
                                                <ul><li>ストアの住所/国から</li><br/>
                                                <li>顧客の住所/国から</li>
						<li>or "EU mode", where a per-product tax rate is used if the shopper is in the European Union, otherwise the tax rate is based on the shopper\'s address.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = '複数税率を可能にしますか?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = '複数の課税対象がある場合はここをチェックして下さい。 (例 本と食べ物は 7% , 他のものは 16%)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = '配送量/税金を追加する前に割引をしますか？';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = '商品レビュー/評価を使用しますか？';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = '有効にすると <strong>商品の評価</strong> と <strong>レビュー</strong> が書込み出来るようになります <br />
                                                                                顧客は他の顧客の為に商品の購入経験を書込みすることが出来ます。<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = '値引きを税金/配送量の前(チェック)か税金/配送量の合計から値引きするかを決定します。';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = '顧客の銀行口座番号を保存しますか？';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = '顧客をストアに登録する時に銀行口座を保存するチェックボックスが表示されるようになります。';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = '顧客は都道府県/地域を選択しますか？';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = '顧客をストアに登録する時に都道府県/地域を選択するチェックボックスが表示されるようになります。';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'サービス条件に同意は必要ですか？';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = '顧客がストアに登録する時にサービス条件に登録する必要があればチェックして下さい。';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = '在庫管理をしますか？';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'ユーザがショッピングカートにアイテムを入れる時に在庫があるかチェックします。
                                                                                          設定した場合はユーザは在庫数以上はカートに追加できなくなります。';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'アフィリエイトプログラムを使用しますか？';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'フロントエンドのアクセスからアフィリエイトのチェックを追加します。バックエンドでアフィリエイトを追加すると利用できます。';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = '注文確認メールフォーマット:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'テキストmail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = '注文確認メールのフォーマットを設定して下さい:<br />
                                                                                        <ul><li>シンプルなテキストメール</li>
                                                                                        <li>イメージ付きのhtmlメール</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'フロントエンド管理を使用しますか？';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = '管理用エリアにアクセス出来ないストア管理者用にフロントエンド管理を許可します。
                                                                                              Joomla!の管理機能にはアクセスできません (例 ユーザ管理 / 編集).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'The URL to your site. Usually identical to your Mambo URL (with trailing slash at the end!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'セキュアURL';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'サイトのセキュアURL (https - 最後にスラッシュを付けて下さい)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'COMPONENTURL';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'The URL to the VirtueMart component. (with trailing slash at the end!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'IMAGEURL';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'The URL to the VirtueMart component image directory.(with trailing slash at the end!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'ADMINPATH';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'The path to your VirtueMart component directory.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'CLASSPATH';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'The path to your phpShop classes directory.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'PAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'The path to your phpShop html directory.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'IMAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'The path to your phpShop shop_image directory.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'HOMEPAGE';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'これはデフォルトでロードされるページです。';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'ERRORPAGE';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'これはエラーメッセージのデフォルトページです。';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'DEBUGPAGE';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'This is the default page for displaying debug messages.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'DEBUG ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'DEBUG?  	   	デバッグ情報の出力 それぞれのページ下部に DEBUGPAGE を表示します。カートコンテンツ、フォームフィールド等を表示して開店までの開発に有効です。';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'FLYPAGE';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'これは商品の詳細を表示する為のデフォルトページです。';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'カテゴリーテンプレート';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'これはカテゴリ表示で商品を表示する為のデフォルトカテゴリテンプレートを指定します<br />
                                                                                                      現在のテンプレートを元に新しいテンプレートを作成できます。 <br />
                                                                                                      (ディレクトリ <strong>COMPONENTPATH/html/templates/</strong> にあるファイルで browse_xxx です。)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = '一列に表示する商品数';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = '並べて表示する商品数を指定します。<br />
                                                                                                      例: 4に設定すると一列に4個の商品を表示します。';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = '"画像無し"のイメージ';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = '商品画像がない場合はこのイメージが表示されます。';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'SEARCH ROWS';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Determines the number of rows per page when search results are displayed in a list.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'SEARCH COLOR 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = '検索結果リストの奇数アイテム列色を指定します。';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'SEARCH COLOR 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = '検索結果リストの偶数アイテム列色を指定します。';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'MAXIMUM ROWS';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Sets the number of rows to show in the order list select box.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'フッターの表示 ';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'powered-by-VirtueMart フッターイメージを表示します。';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'ストアの配送方法を選択して下さい';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = '標準配送モジュール。配送業者と重量で設定した配送方法を表示します。 <strong>お勧め !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '  	ゾーン配送モジュール 国 Version 1.0<br />
                                                                                                            このモジュールの詳しい情報は <a href="http://ZephWare.com">http://ZephWare.com</a><br />
                                                                                                            を観覧するか <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> に直接メールを送ってください(英語で送る事)。このモジュールは地域別の配送を提供します。';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<a href="http://www.ups.com" target="_blank">UPS</a>オンラインツールを使用';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'UPS access code';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Your UPS access code';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'UPS user id';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'The user ID you got from UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'UPS password';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'The password for your UPS account';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'InterShipperモジュール、<a href="http://www.intershipper.com" target="_blank">Intershipper.com</a>アカウントが必要です。';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = '商品配送は使用しません。顧客に配送する商品を使用しない場合はチェックを入れて下さい。(例：ダウンロード販売店)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'InterShipper Password';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Your password for your intershipper account.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'InterShipper email';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'Your email address for your intershipper account.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'エンコードキー';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'データベースに保存する時にこのキーでコード化します。これはこのファイルが他者に観覧されない事を前提としています。';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = '精算バーを使用する';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'チェックを入れると精算バーを表示します。( 1 - 2 - 3 - 4 グラフィック表示)';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'ストアの精算方法を選択して下さい';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>標準 :</strong><br/>
               1. お届け先の住所入力<br />
              2. 発送方法を選択<br />
              3. お支払い方法を選択<br />
              4. 注文完了';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>プロセス 2:</strong><br/>
               1. お届け先の住所入力<br />
              2. お支払い方法を選択<br />
              3. 注文完了';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>プロセス 3:</strong><br/>
               1. 発送方法を選択<br />
              2. お支払い方法を選択<br />
              3. 注文完了';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>プロセス 4:</strong><br/>
               1. お支払い方法を選択<br />
              2. 注文完了';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'ダウンロードを使用する';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'チェックを入れるとダウンロード販売が可能になります。';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'ダウンロード可能な注文ステータス';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'メールで顧客にダウンロード先に関して通知する注文ステータスを選択して下さい';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'ダウンロード不可能な注文ステータス';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'ダウンロードが無効になる注文ステータスを選択して下さい。';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'DOWNLOADROOT';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = '顧客がダウンロードするファイルへのパス (最後にスラッシュを入れて下さい)<br>
        <span class="message">セキュリティの為:  別の WEBROOT を用意した方がいいでしょう</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = '最大ダウンロード回数';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = '一つの Download-ID(注文毎に変ります)でダウンロード出来る回数を設定します。';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'ダウンロード期間';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = '顧客がダウンロード可能な期間を <strong>秒</strong>で設定します。最初のダウンロードからカウントを開始します。
  この期間を過ぎるとdownload-IDが無効になります。<br />ノート : 86400秒=24時間';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Enable IPN Payment via PayPal?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Check to let your customers use the PayPal payment system.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'PayPal payment email:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Your business email address for PayPal payments. Also used as receiver_email.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Order Status for successful transactions';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Select the order status to which the actual order is set, if the PayPal IPN was successful. If using download selling options: 
  select the status which enables the download (then the customer is instantly notified about the download via e-mail).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Order Status for failed transactions';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Select an order status for failed PayPal transactions.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Enable Payments via PayMate?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Check to let your customers use the Australian PayMate payment system.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'PayMate username:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Your user account for PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Enable Authorize.net payment?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Check to use Authorize.net with phpShop.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Test mode ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Select \'Yes\' while testing. Select \'No\' for enabling live transactions.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Yes';
	var $_PHPSHOP_ADMIN_CFG_NO = 'No';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Authorize.net Login ID';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'This is your Authorize.Net Login ID';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Authorize.net Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'This is your Authorize.net Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Authentication Type';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'This is the Authorize.Net authentication type.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Enable CyberCash?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Check to use CyberCash with phpShop.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash MERCHANT';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_MERCHANT is the CyberCash Merchant ID';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash Merchant Key';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash Merchant Key is the Merchant Provided by CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash PAYMENT URL';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'CyberCash PAYMENT URL is the URL provided by Cybercash for secure payment';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash AUTH TYPE';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'CyberCash AUTH TYPE is the Cybercash authentication type provided by Cybercase';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Advanced Search';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Search All Categories';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Search all product info';
	var $_PHPSHOP_SEARCH_PRODNAME = '商品名だけ';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Manufacturer/Vendor only';
	var $_PHPSHOP_SEARCH_DESCRIPTION = '商品説明だけ';
	var $_PHPSHOP_SEARCH_AND = 'and';
	var $_PHPSHOP_SEARCH_NOT = 'not';
	var $_PHPSHOP_SEARCH_TEXT1 = 'The first drop-down-list allows you to select a category to limit your search to. 
        The second drop-down-list allows you to limit your search to a particular piece of product information (e.g. Name). 
        Once you have selected these (or left the default ALL), enter the keyword to search for. ';
	var $_PHPSHOP_SEARCH_TEXT2 = ' You can further refine your search by adding a second keyword and selecting the AND or NOT operator. 
        Selecting AND means both words must be present for the product to be displayed. 
        Selecting NOT means the product will be displayed only if the first keyword is present 
        and the second is not.';
	var $_PHPSHOP_ORDERBY = '表示順';
	var $_PHPSHOP_CUSTOMER_RATING = 'おすすめ度';
	var $_PHPSHOP_TOTAL_VOTES = '評価総数';
	var $_PHPSHOP_CAST_VOTE = '評価しませんか';
	var $_PHPSHOP_RATE_BUTTON = 'Rate';
	var $_PHPSHOP_RATE_NOM = 'Rating';
	var $_PHPSHOP_REVIEWS = '購入者レビュー';
	var $_PHPSHOP_NO_REVIEWS = 'この商品のレビューはありません';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = '最初のレビューをお待ちしています。';
	var $_PHPSHOP_REVIEW_LOGIN = 'ログインしてレビューを書いてみませんか';
	var $_PHPSHOP_REVIEW_ERR_RATE = '商品のおすすめ度を選択して下さい。';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'レビューは最低 100 文字程度は記入して下さい。';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'レビューは 2000 以内にして下さい。';
	var $_PHPSHOP_WRITE_REVIEW = 'レビューを書いてみませんか？';
	var $_PHPSHOP_REVIEW_RATE = '最初に: 商品のお勧め度を選択して下さい 0 (悪い)～5 星(すごくお勧め).';
	var $_PHPSHOP_REVIEW_COMMENT = '次に商品のレビューを記入して下さい(最低 50, 最大 1000 全角文字) ';
	var $_PHPSHOP_REVIEW_COUNT = '入力数確認: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'レビューを送信';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'この商品のレビューは既に記入済みです。ありがとうございました。';
	var $_PHPSHOP_REVIEW_THANKYOU = 'レビューをお書き頂きありがとうございます。';
	var $_PHPSHOP_COMMENT = 'コメント';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'クレジットカードタイプ 追加/編集';
	var $_PHPSHOP_CREDITCARD_NAME = 'クレジットカード名';
	var $_PHPSHOP_CREDITCARD_CODE = 'クレジットカード - 短いコード';
	var $_PHPSHOP_CREDITCARD_TYPE = 'クレジットカードタイプ';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'クレジットカードリスト';
	var $_PHPSHOP_UDATE_ADDRESS = 'アドレス更新';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'ショッピングを続ける';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'ご注文を承りました。';
	var $_PHPSHOP_ORDER_LINK = 'このリンクからご注文の詳細を確認して下さい。';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = '注文番号 {order_id} の詳細を変更しました。';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = '新しいステータスは:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = '詳細は下記のURLで確認して下さい (ブラウザにコピーして下さい):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'ご注文の詳細を変更しました: 注文番号 {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = '顧客に通知';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = '初めに注文ステータスを変更して下さい。';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = '顧客グループの値引き価格 (%で)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = '正数は以下を意味します:顧客グループに含まれる顧客は指定した%の値引きがされます。';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = '割引商品';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = '割引商品リスト';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = '割引商品 追加/編集';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = '割引額';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = '割引額を入力して下さい';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = '割引タイプ';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'パーセンテージ';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = '合計';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = '割引はパーセンテージか合計からを選択して下さい';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = '割引開始日時';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = '割引を開始する日にちを選択して下さい。';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = '割引終了日時';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = '割引を終了する日にちを選択して下さい。';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = '割引を追加する為に割引商品フォームを使用できます！';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = '特別値引';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = '拡大イメージを表示';
	var $_PHPSHOP_CURRENCY_DISPLAY = '通貨表示スタイル';
	var $_PHPSHOP_CURRENCY_SYMBOL = '通貨シンボル';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'HTML Entities を使用できます (例 &yen;,円)';
	var $_PHPSHOP_CURRENCY_DECIMALS = '小数点以下の桁数';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = '日本円を使用する場合は0です。<br><b>小数点以下を使用する場合は指定して下さい</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = '小数記号';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = '小数を表す記号を指定';
	var $_PHPSHOP_CURRENCY_THOUSANDS = '桁区切り記号';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = '千毎に区切り表示される記号 (空欄も使用できます。)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = '正数フォーマット';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = '正数で表示される表示形式<br>(通貨記号の位置を変更できます)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = '負数フォーマット';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = '負数で表示される表示形式<br>(通貨記号の位置を変更できます)';
	var $_PHPSHOP_OTHER_LISTS = 'その他の商品リスト';
	var $_PHPSHOP_MORE_IMAGES = 'その他のイメージ';
	var $_PHPSHOP_AVAILABLE_IMAGES = '利用可能なイメージ';
	var $_PHPSHOP_BACK_TO_DETAILS = '商品詳細に戻る';
	var $_PHPSHOP_FILEMANAGER = 'ファイルマネージャ';
	var $_PHPSHOP_FILEMANAGER_LIST = 'ファイルマネージャ::商品リスト';
	var $_PHPSHOP_FILEMANAGER_ADD = '画像/ファイル 追加';
	var $_PHPSHOP_FILEMANAGER_IMAGES = '割当イメージ';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'ダウンローダブル';
	var $_PHPSHOP_FILEMANAGER_FILES = '割当ファイル(データシート)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = '公開';
	var $_PHPSHOP_FILES_LIST = 'FileManager::Image/File List for';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'ファイル名';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'ファイルタイトル';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'ファイル タイプ';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Edit File Entry';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Full Image';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Thumbnail Image';
	var $_PHPSHOP_FILES_FORM = 'Upload a File for';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Current File';
	var $_PHPSHOP_FILES_FORM_FILE = 'File';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Image';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Upload to';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'デフォルト商品イメージパス';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Specify the file location';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Download Path (e.g. for selling downloadables!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'サムネイム自動作成';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'File is published?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'File Title (what the Customer sees)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'File Description';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'File URL (optional)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Please provide a valid path!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'The Thumbnail Image has been successfully created!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'Could NOT create Thumbnail Image!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'ファイル/イメージ アップロードエラー';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Could not delete the Full Image File.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Full Image successfully deleted.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Could not delete the Thumbnail Image File (maybe didnt exist): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Thumbnail Image successfully deleted.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Could not delete the File.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'File successfully deleted.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Sorry, but the requested file wasn\'t found!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Image not found!';
	var $_PHPSHOP_COUPON_MOD = 'クーポン';
	var $_PHPSHOP_COUPONS = 'クーポン';
	var $_PHPSHOP_COUPON_LIST = 'クーポンリスト';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'このクーポンは既に使用されています';
	var $_PHPSHOP_COUPON_REDEEMED = 'クーポンを使用しました。';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'クーポンコードがありましたら、以下に入力して下さい:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = '送信';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'クーポンコードは既に使用しています。別ののクーポンコードを入力して下さい';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'クーポン更新';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'クーポンコードをクリックして編集するか選択して削除して下さい。:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'コード';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'パーセンテージ か 合計';
	var $_PHPSHOP_COUPON_TYPE = 'クーポンタイプ';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'A Gift Coupon is deleted after it was used for discounting an order. A permanent coupon can be used as often as the customer wants to.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'ギフトクーポン';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = '常時クーポン';
	var $_PHPSHOP_COUPON_VALUE_HEADER = '割引';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'コード削除';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'このクーポンコードを削除しますか？';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = '全て入力して下さい。';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'クーポンの割引は半角英数で入力して下さい。';
	var $_PHPSHOP_COUPON_NEW_HEADER = '新規クーポン';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'クーポンコード';
	var $_PHPSHOP_COUPON_PERCENT = 'パーセンテージ';
	var $_PHPSHOP_COUPON_TOTAL = '合計';
	var $_PHPSHOP_COUPON_VALUE = '割引';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'クーポンコードを保存しました。';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'クーポン保存';
	var $_PHPSHOP_COUPON_DISCOUNT = 'クーポン割引';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'クーポンコードが見つかりません。';
	var $_PHPSHOP_COUPONS_ENABLE = 'クーポンを使用しますか？';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'クーポンを使用するなら購入時にクーポン番号を入力する画面が表示されます。';
	var $_PHPSHOP_FREE_SHIPPING = 'Free Shipping';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Shipping is free on this Order!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = '送料を無料にする最小購入価格';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = '配送料金を無料にする最小購入価格(税込み)を入力して下さい。
                                                (例: <strong>500</strong>500円以上(税込み)の注文は
                                                送料が無料になります。';
	var $_PHPSHOP_YOUR_STORE = 'あなたのストア';
	var $_PHPSHOP_CONTROL_PANEL = 'コントロールパネル';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF - ボタン';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'ストアにPDFボタンを表示するか';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = '注文時に毎回サービス条件に同意が必要ですか？';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = '顧客が会計時毎回にサービス条件に同意が必要であればチェックして下さい';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = '銀行口座タイプ';
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
	var $_PHPSHOP_UPS_TAX_CLASS = '税クラス';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Use the following tax class on the shipping fee.';
	var $_PHPSHOP_ERROR_CODE = 'Error Code';
	var $_PHPSHOP_ERROR_DESC = 'Error Description';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Show / Change the Transaction Key';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Show/Change the Password/Transaction Key';
	var $_PHPSHOP_TYPE_PASSWORD = 'ユーザパスワードを入力して下さい';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Current Password';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Current Transaction Key';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'The Transaction key was successfully changed.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Request/Capture Credit Card Code Value (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Check for a valid CVV2/CVC2/CID value (three- or four-digit number on the back of a credit card, on the Front of American Express Cards)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Please type in the three- or four-digit number on the back of your credit card (On the Front of American Express Cards)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'You need to enter your Credit Card Code to proceed.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'ファイル名';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = '注意: ファイル名が入力できます。 <strong>ここにファイル名を入力するとファイルアップロードは行われません！ FTPでファイルをアップロードして下さい。</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'かファイルアップロード';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'ローカルにあるファイルをアップロードできます。アップロードしたファイルは販売されるファイルになります。同じファイル名は上書きされます。';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'この商品の紹介ページに表示されるテキストを入力して下さい<br />例: 24時間, 48時間, 3 - 5 日, 受注生産.....';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'これはイメージで発送可能時期を表示します。<br />イメージは<i>/components/com_virtuemart/shop_image/availability</i>にあります。<br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = '属性リスト';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>属性リストの例:</h4>
        <pre>Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00];AndSoOn,..,..</pre>
        <h4>拡張属性使用時の価格設定:</h4>
        <pre>
        + == 商品価格にプラスされる価格<br />
        - == 商品価格からマイナスされる価格<br />
        = == この属性時の商品価格
      </pre>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'カスタム属性リスト';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>カスタム属性のフォーマットリストの例:</h4>
        <pre>Name;Extras;</strong>...</pre>';
	var $_PHPSHOP_MULTISELECT = '複数選択: CTRL-Key+クリックして下さい';
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
	var $_PHPSHOP_RELATED_PRODUCTS = '関連商品';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'You can build up Product Relations using this List. Just select one or more products here and then they are <strong>Related Products</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'You may also be interested in this/these product(s)';
	var $_PHPSHOP_IMAGE_ACTION = 'イメージ操作';
	var $_PHPSHOP_NONE = '無し';
	var $_PHPSHOP_ORDER_HISTORY = '注文履歴';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'コメント';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = '注文コメント';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'コメントを通知しますか？';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = '注文日';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = '顧客に通知？';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = '注文ステータ変更';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = 'USPS shipping username';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = 'USPS shipping username';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = 'USPS shipping password';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = 'USPS shipping password';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER = 'USPS shipping server';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP = 'USPS shipping server';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH = 'USPS shipping path';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP = 'USPS shipping path';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE = 'USPS Package Size';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP = 'USPS Package Size';
	var $_PHPSHOP_USPS_PADDING = 'Percent to pad weight for shipping package. (Include %)';
	var $_PHPSHOP_USPS_PADDING_TOOLTIP = 'Pad the shipping weight to allow additional weight for shipping box and packing. Using this allows you to put actual weight in your items weight settings.  Requires you to have the % sign included.  Example 15%';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_HANDLING_FEE = 'Handling Fee';
	var $_PHPSHOP_USPS_HANDLING_FEE = 'Your Handling fee for this shipping method.';
	var $_PHPSHOP_USPS_HANDLING_FEE_TOOLTIP = 'Your Handling fee for this shipping method.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE = 'Your International Handling fee for USPS shipments.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP = 'Your International Handling fee for USPS shipments.';
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
	var $_PHPSHOP_PARAMETERS_LBL = 'パラメータ';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = '商品タイプ';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = '商品タイプリスト';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = '商品タイプ 追加/編集';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = '商品タイプリスト';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = '商品タイプリスト';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = '商品タイプ追加';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = '商品タイプ追加';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = '商品タイプ';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = '商品タイプ名';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = '商品タイプ説明';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'パラメータ';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = '商品タイプ情報';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = '公開';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = '商品タイプ ブラウズページ';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = '商品タイプ詳細ページ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = '商品タイプのパラメタ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Parameter Information';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = '商品タイプが見つかりません!';
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
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'デフォルト値';
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
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'カテゴリ検索';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Change Parameters';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Descending order';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Ascending order';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'カテゴリパラメータ';
	var $_PHPSHOP_FEE = 'Fee';
	var $_PHPSHOP_PRODUCT_CLONE = 'コピー';
	var $_PHPSHOP_CSV_SETTINGS = '設定';
	var $_PHPSHOP_CSV_DELIMITER = '区切り記号';
	var $_PHPSHOP_CSV_ENCLOSURE = '囲み記号';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'CSVファイルアップロード';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'CSVファイル送信';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'ディレクトリロード';
	var $_PHPSHOP_CSV_FROM_SERVER = 'サーバからCSVファイル読込';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'CSVファイルエクスポート';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = '並び順を選択して下さい';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'デフォルト並び順';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'カスタマイズ並び順';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = '全ての商品をCSVファイルにエクスポート';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'CSV インポート / エクスポート 設定';
	var $_PHPSHOP_CSV_SAVE_CHANGES = '変更を保存';
	var $_PHPSHOP_CSV_FIELD_NAME = 'フィールド名';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'デフォルトの値';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'フィールド並び順';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = '必要フィールド';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'インポート/エクスポート';
	var $_PHPSHOP_CSV_NEW_FIELD = 'フィールド追加';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'ドキュメント';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Sorry, but the Product you\'ve requested wasn\'t found!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Show Products that are out of Stock';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'When enabled, Products that are currently not in Stock are displayed. Otherwise such Products are hidden.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'Number {unit}s in packaging:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'Number {unit}s in box:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = '在庫切れ商品の非表示';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = '特価 & 割引 商品';
	var $_PHPSHOP_FEATURED = '特価';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Back to the country';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Back to the file manager';
	var $_PHPSHOP_ADD_STATE = 'Add a State';
	var $_PHPSHOP_LIST_STATES = 'List States';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = '特価 と 割引';
	var $_PHPSHOP_SHOW_FEATURED = '特価商品';
	var $_PHPSHOP_SHOW_DISCOUNTED = '割引商品';
	var $_PHPSHOP_FILTER = 'フィルター';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Back to the Main Site';
	var $_PHPSHOP_EXPAND_TREE = 'Expand Tree';
	var $_PHPSHOP_COLLAPSE_TREE = 'Collapse Tree';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = '割引価格';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'ここに入力すると商品の特価価格を上書きします。<br/>
新しい割引価格を特価価格に書き込みします。';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = '一個の価格';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'ストアをオフライン';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'ここにチェックを入れるとストアはオフラインメッセージを表示します。';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'オフラインメッセージ';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'ストアテーブル頭文字';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'デフォルトは <strong>vm</strong>です。';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = '商品リストの先頭にページナビゲーションを表示しますか？';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'フロントエンドの商品リストのページナビゲーションを表示するか';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = '商品数を表示しますか？';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'カテゴリ名(4)の様に商品数を表示するか';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'カートに追加ボタンスタイル';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'ダイナミックサムネイム化';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'チェックを入れると動的にイメージをリサイズします。これは全ての商品イメージを設定したサイズにリサイズします。
        PHP\'のGD2機能を使用しています (GD2をサポートしているかは "システム" -> "システム情報" -> "PHP Info" -> でGDを探してください 
        新しい商品イメージはディレクトリ /shop_image/prduct/resizedにファイル化されます。一旦リサイズされたファイルはコピーされるのでアクセスの毎にイメージは作成されません';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'サムネイル画像の幅';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'リサイズするサムネイル <strong>画像の幅</strong>';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'サムネイル画像の高さ';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'リサイズするサムネイル <strong>画像の高さ</strong>';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Please select at least one Checkbox in the Shipping Configuration!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = '価格設定';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = '価格表示するメンバーグループ';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = '選択したグループ以上のユーザグループに商品価格を表示します。';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = '税込み価格 "(税込み XX% 税)" を表示しますか?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'チェックを入れると税込み価格が表示されます。';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = '梱包料の価格ラベルを表示しますか';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'チェックを入れると価格ラベルは商品から重さを取得して梱包料を足します:<br/>
<strong>1ユニットあたりの価格 (10円)</strong><br/>
チェックを外すと価格ラベルは通常表示します。: <strong>価格: \xx.xx</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'その他のコア設定';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'コア設定';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'フロントエンド機能';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = '税設定';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Quantity Start';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Quantity End';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'ユーザ登録設定';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'ユーザ登録は有効は';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = '新規アカウント有効化は';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'サイレントユーザ登録を利用しますか？';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = '有効にすると顧客は新しいアカウントのユーザ名、パスワードを入力する必要はありません。代わりにランダムパスワードをメールアドレスへ送信します。';
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
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'デフォルト商品表示順';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'デフォルトページでの商品の表示順を指定して下さい。';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'Available "Sort-by" fields';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'Choose the "Sort-by" fields for the browse page. Each one defines a sort method for the product browse page. If you deselect all, the Order-By-Form will not be shown.';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO = '注文確認ページで"返品について"を表示しますか？';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP = '多くの国では購入時に返品・交換についてのお知らせをするように法律が整備されています。一般的なオンラインショップでは有効にして下さい。';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT = '返品・交換についてのテキスト (短いバージョン)';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP = 'This text instructs your customers in short about your return and order cancellation policy. It is shown on the last page of checkout, just above the "Confirm Order" button.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK = '返品・交換の条件を記載しているコンテンツ (コンテンツアイテムにリンクします)';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP = '返品と交換についての条件を記載しているコンテンツアイテムを追加して下さい。
先に作成したアイテムを選択して下さい。';
	var $_VM_LEGALINFO_SHORTTEXT = '<h5>返品について</h5>

納品日より14日以内であれば、商品の返品・交換を承ります。
付属品や箱を一緒に発送して下さい。 
付属品や箱がない場合は原則として返品できませんのでご了承下さい。
返品・交換については <a href="%s" onclick="%s" target="_blank">返品と交換について</a>を確認して下さい。';
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