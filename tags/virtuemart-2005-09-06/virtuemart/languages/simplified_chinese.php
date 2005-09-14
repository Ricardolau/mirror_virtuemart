<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: simplified_chinese.php,v 1.16 2005/06/22 19:50:45 soeren_nb Exp $
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
*/
class phpShopLanguage extends mosAbstractLanguage {

    /*####################
    GENERAL DEFINITIONS
    ####################*/
    
    var $_PHPSHOP_MENU = "菜单";
    var $_PHPSHOP_CATEGORY = "类别";
    var $_PHPSHOP_CATEGORIES = "类别";
    var $_PHPSHOP_ADMIN = "管理";
    var $_PHPSHOP_PRODUCT = "产品";
    var $_PHPSHOP_LIST = "列表";
    var $_PHPSHOP_ALL = "所有";
    var $_PHPSHOP_VIEW = "查看";
    var $_PHPSHOP_SHOW = "显示";
    var $_PHPSHOP_ADD = "增加";
    var $_PHPSHOP_UPDATE = "更新";
    var $_PHPSHOP_DELETE = "删除";
    var $_PHPSHOP_SELECT = "选择";
    var $_PHPSHOP_RANDOM = "随机产品";
    var $_PHPSHOP_LATEST = "最新产品";
    var $_PHPSHOP_SUBMIT = "Submit";
    var $_PHPSHOP_LIST_ALL_PRODUCTS = "列出所有商品";
    var $_PHPSHOP_SELECT_CATEGORY = "选择一个目录:";

    /*#####################
    MODULE ACCOUNT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_HOME_TITLE = "主页";
    var $_PHPSHOP_CART_TITLE = "购物车";
    var $_PHPSHOP_CHECKOUT_TITLE = "结帐";
    var $_PHPSHOP_LOGIN_TITLE = "登录";
    var $_PHPSHOP_LOGOUT_TITLE = "注销";
    var $_PHPSHOP_BROWSE_TITLE = "浏览";
    var $_PHPSHOP_SEARCH_TITLE = "查找";
    var $_PHPSHOP_ACCOUNT_TITLE = "帐号维护";
    var $_PHPSHOP_NAVIGATION_TITLE = "导航";
    var $_PHPSHOP_DEPARTMENT_TITLE = "部门";
    var $_PHPSHOP_INFO = "信息";
    
    var $_PHPSHOP_BROWSE_LBL = "浏览";
    var $_PHPSHOP_PRODUCTS_LBL = "商品";
    var $_PHPSHOP_PRODUCT_LBL = "商品";
    var $_PHPSHOP_SEARCH_LBL = "查找";
    var $_PHPSHOP_FLYPAGE_LBL = "商品详情";
     var $_PHPSHOP_PRODUCT_SEARCH_LBL = "商品搜索";
    
    var $_PHPSHOP_PRODUCT_NAME_TITLE = "商品名称";
    var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = "商品类别";
    var $_PHPSHOP_PRODUCT_DESC_TITLE = "商品描述";
    
    var $_PHPSHOP_CART_SHOW = "我的购物车";
    var $_PHPSHOP_CART_ADD_TO = "加入购物车";
    var $_PHPSHOP_CART_NAME = "商品名";
    var $_PHPSHOP_CART_SKU = "SKU";
    var $_PHPSHOP_CART_PRICE = "价格";
    var $_PHPSHOP_CART_QUANTITY = "数量";
    var $_PHPSHOP_CART_SUBTOTAL = "小计";
    
    # Some messages
    var $_PHPSHOP_ADD_SHIPTO_1 = "增加新的";
    var $_PHPSHOP_ADD_SHIPTO_2 = "发货地址";
    var $_PHPSHOP_NO_SEARCH_RESULT = "没有找到您所查询的产品。<BR>";
    var $_PHPSHOP_PRICE_LABEL = "价格: ";
    var $_PHPSHOP_ORDER_BUTTON_LABEL = "加入购物车";
    var $_PHPSHOP_NO_CUSTOMER = "您还没有注册成为会员。请提供您的支付信息。";
    var $_PHPSHOP_DELETE_MSG = "你确认要删除此记录吗?";
    var $_PHPSHOP_THANKYOU = "感谢您的订购！";
    var $_PHPSHOP_NOT_SHIPPED = "还未发货";
    var $_PHPSHOP_EMAIL_SENDTO = "确认邮件已发往";
    var $_PHPSHOP_NO_USER_TO_SELECT = "抱歉, 系统中还没有会员，您不能加入到商城会员列表中";
    
    // Error messages
    
    var $_PHPSHOP_ERROR = "错误";
    var $_PHPSHOP_MOD_NOT_REG = "模块未注册。";
    var $_PHPSHOP_MOD_ISNO_REG = "不是正确的商场模块。";
    var $_PHPSHOP_MOD_NO_AUTH = "你无权进入此模块。";
    var $_PHPSHOP_PAGE_404_1 = "页面不存在";
    var $_PHPSHOP_PAGE_404_2 = "提供的文件名不存在，无法找到文件:";
    var $_PHPSHOP_PAGE_403 = "没有足够的进入权限";
    var $_PHPSHOP_FUNC_NO_EXEC = "你无权执行";
    var $_PHPSHOP_FUNC_NOT_REG = "此功能未注册";
    var $_PHPSHOP_FUNC_ISNO_REG = "不是正确的商场功能。";
    
    /*#####################
    MODULE ADMIN
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADMIN_MOD = "管理";
    
    
    // User List
    var $_PHPSHOP_USER_LIST_MNU = "显示会员列表";
    var $_PHPSHOP_USER_LIST_LBL = "会员列表";
    var $_PHPSHOP_USER_LIST_USERNAME = "会员名称";
    var $_PHPSHOP_USER_LIST_FULL_NAME = "姓名";
    var $_PHPSHOP_USER_LIST_GROUP = "组";
    
    // User Form
    var $_PHPSHOP_USER_FORM_MNU = "增加会员";
    var $_PHPSHOP_USER_FORM_LBL = "增加/更新会员信息";
    var $_PHPSHOP_USER_FORM_BILLTO_LBL = "付款信息";
    var $_PHPSHOP_USER_FORM_SHIPTO_LBL = "送货地址";
    var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = "增加地址";
    var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = "地址别名";
    var $_PHPSHOP_USER_FORM_FIRST_NAME = "名";
    var $_PHPSHOP_USER_FORM_LAST_NAME = "姓";
    var $_PHPSHOP_USER_FORM_MIDDLE_NAME = "中名";
    var $_PHPSHOP_USER_FORM_TITLE = "称呼";
    var $_PHPSHOP_USER_FORM_USERNAME = "会员名称";
    var $_PHPSHOP_USER_FORM_PASSWORD_1 = "密码";
    var $_PHPSHOP_USER_FORM_PASSWORD_2 = "确认密码";
    var $_PHPSHOP_USER_FORM_PERMS = "权限";
    var $_PHPSHOP_USER_FORM_COMPANY_NAME = "公司名";
    var $_PHPSHOP_USER_FORM_ADDRESS_1 = "地址1";
    var $_PHPSHOP_USER_FORM_ADDRESS_2 = "地址2";
    var $_PHPSHOP_USER_FORM_CITY = "城市";
    var $_PHPSHOP_USER_FORM_STATE = "省份/地区";
    var $_PHPSHOP_USER_FORM_ZIP = "邮编";
    var $_PHPSHOP_USER_FORM_COUNTRY = "国家";
    var $_PHPSHOP_USER_FORM_PHONE = "电话";
    var $_PHPSHOP_USER_FORM_FAX = "传真";
    var $_PHPSHOP_USER_FORM_EMAIL = "Email";
    
    // Module List
    var $_PHPSHOP_MODULE_LIST_MNU = "显示模块列表";
    var $_PHPSHOP_MODULE_LIST_LBL = "模块列表";
    var $_PHPSHOP_MODULE_LIST_NAME = "模块名";
    var $_PHPSHOP_MODULE_LIST_PERMS = "模块参数";
    var $_PHPSHOP_MODULE_LIST_FUNCTIONS = "函数";
    var $_PHPSHOP_MODULE_LIST_ORDER = "显示订单列表";
    
    // Module Form
    var $_PHPSHOP_MODULE_FORM_MNU = "增加模块";
    var $_PHPSHOP_MODULE_FORM_LBL = "模块信息";
    var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = "模块标题(用于顶级菜单)";
    var $_PHPSHOP_MODULE_FORM_NAME = "模块名";
    var $_PHPSHOP_MODULE_FORM_PERMS = "模块参数";
    var $_PHPSHOP_MODULE_FORM_HEADER = "模块头";
    var $_PHPSHOP_MODULE_FORM_FOOTER = "模块脚";
    var $_PHPSHOP_MODULE_FORM_MENU = "在管理菜单中显示模块?";
    var $_PHPSHOP_MODULE_FORM_ORDER = "显示顺序";
    var $_PHPSHOP_MODULE_FORM_DESCRIPTION = "模块描述";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = "语言代码";
    var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = "语言文件";
    
    // Function List
    var $_PHPSHOP_FUNCTION_LIST_MNU = "显示函数表";
    var $_PHPSHOP_FUNCTION_LIST_LBL = "函数列表";
    var $_PHPSHOP_FUNCTION_LIST_NAME = "函数名";
    var $_PHPSHOP_FUNCTION_LIST_CLASS = "类名";
    var $_PHPSHOP_FUNCTION_LIST_METHOD = "类方法";
    var $_PHPSHOP_FUNCTION_LIST_PERMS = "参数";
    
    // Module Form
    var $_PHPSHOP_FUNCTION_FORM_MNU = "增加函数";
    var $_PHPSHOP_FUNCTION_FORM_LBL = "函数信息";
    var $_PHPSHOP_FUNCTION_FORM_NAME = "函数名";
    var $_PHPSHOP_FUNCTION_FORM_CLASS = "类名";
    var $_PHPSHOP_FUNCTION_FORM_METHOD = "类方法";
    var $_PHPSHOP_FUNCTION_FORM_PERMS = "函数参数";
    var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = "函数描述";
    
    // Currency form and list
    var $_PHPSHOP_CURRENCY_LIST_MNU = "显示货币列表";
    var $_PHPSHOP_CURRENCY_LIST_LBL = "货币列表";
    var $_PHPSHOP_CURRENCY_LIST_ADD = "增加货币";
    var $_PHPSHOP_CURRENCY_LIST_NAME = "货币名";
    var $_PHPSHOP_CURRENCY_LIST_CODE = "货币代码";
    
    // Country form and list
    var $_PHPSHOP_COUNTRY_LIST_MNU = "显示国家列表";
    var $_PHPSHOP_COUNTRY_LIST_LBL = "国家列表";
    var $_PHPSHOP_COUNTRY_LIST_ADD = "增加国家";
    var $_PHPSHOP_COUNTRY_LIST_NAME = "国家名";
    var $_PHPSHOP_COUNTRY_LIST_3_CODE = "国家代码(3)";
    var $_PHPSHOP_COUNTRY_LIST_2_CODE = "国家代码(2)";
    
    /*#####################
    MODULE CHECKOUT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ADDRESS = "地址";
    var $_PHPSHOP_CONTINUE = "继续";
    
    # Some messages
    var $_PHPSHOP_EMPTY_CART = "你的购物车现在还是空的。";
    
    
    /*#####################
    MODULE ISShipping
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_ISSHIPPING_MOD = "InterShipper";
    
    
    // Shipping Ping
    var $_PHPSHOP_ISSHIP_PING_MNU = "Ping InterShipper的服务器";
    var $_PHPSHOP_ISSHIP_PING_LBL = "InterShipper-Server Ping ";
    var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = "InterShipper Ping不通";
    var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = "InterShipper Ping成功";
    var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = "运输工具";
    var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = "反馈<BR>时间";
    var $_PHPSHOP_ISSHIP_PING_TIME_LBL = "秒";
    
    // Shipping List
    var $_PHPSHOP_ISSHIP_LIST_MNU = "显示发货方式";
    var $_PHPSHOP_ISSHIP_LIST_LBL = "可用的发货方式";
    var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = "发货方式";
    var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = "激活";
    var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = "手续费";
    var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = "运输时间";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = "统一费用";
    var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = "百分比";
    var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = "天数";
    var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = "负荷";
    
    // Dynamic Shipping Form
    var $_PHPSHOP_ISSHIP_FORM_MNU = "确认运输方式";
    var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = "增加运输方式";
    var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = "确认运输方式";
    var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = "刷新";
    var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = "运输方式";
    var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = "可用";
    var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = "手续费";
    var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = "运输时间";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = "统一费用";
    var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = "百分比";
    var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = "天数";
    var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = "负荷";
    
    
    
    /*#####################
    MODULE ORDER
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_ORDER_MOD = "订单";
    
    // Some menu options 
    var $_PHPSHOP_ORDER_CONFIRM_MNU = "确定订单";
    var $_PHPSHOP_ORDER_CANCEL_MNU = "取消订单";
    var $_PHPSHOP_ORDER_PRINT_MNU = "打印订单";
    var $_PHPSHOP_ORDER_DELETE_MNU = "删除订单";
    
    // Order List
    var $_PHPSHOP_ORDER_LIST_MNU = "显示订单列表";
    var $_PHPSHOP_ORDER_LIST_LBL = "订单列表";
    var $_PHPSHOP_ORDER_LIST_ID = "订单号";
    var $_PHPSHOP_ORDER_LIST_CDATE = "订单日期";
    var $_PHPSHOP_ORDER_LIST_MDATE = "最后修改";
    var $_PHPSHOP_ORDER_LIST_STATUS = "状态";
    var $_PHPSHOP_ORDER_LIST_TOTAL = "小计";
    var $_PHPSHOP_ORDER_ITEM = "Item订单";
    
    // Order print
    var $_PHPSHOP_ORDER_PRINT_PO_LBL = "订单";
    var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = "订单号";
    var $_PHPSHOP_ORDER_PRINT_PO_DATE = "订单日期";
    var $_PHPSHOP_ORDER_PRINT_PO_STATUS = "订单状态";
    var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = "客户信息";
    var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = "付款信息";
    var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = "送货信息";
    var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = "付款";
    var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = "发货到";
    var $_PHPSHOP_ORDER_PRINT_NAME = "姓名";
    var $_PHPSHOP_ORDER_PRINT_COMPANY = "公司";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = "地址1";
    var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = "地址2";
    var $_PHPSHOP_ORDER_PRINT_CITY = "城市";
    var $_PHPSHOP_ORDER_PRINT_STATE = "省份/地区";
    var $_PHPSHOP_ORDER_PRINT_ZIP = "邮编";
    var $_PHPSHOP_ORDER_PRINT_COUNTRY = "国家";
    var $_PHPSHOP_ORDER_PRINT_PHONE = "电话";
    var $_PHPSHOP_ORDER_PRINT_FAX = "传真";
    var $_PHPSHOP_ORDER_PRINT_EMAIL = "Email";
    var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = "物品排序";
    var $_PHPSHOP_ORDER_PRINT_QUANTITY = "数量";
    var $_PHPSHOP_ORDER_PRINT_QTY = "数量";
    var $_PHPSHOP_ORDER_PRINT_SKU = "SKU";
    var $_PHPSHOP_ORDER_PRINT_PRICE = "价格";
    var $_PHPSHOP_ORDER_PRINT_TOTAL = "总计";
    var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = "小计";
    var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = "税金总计";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING = "发货";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = "发货税金";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = "付款方式";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = "帐号名";
    var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = "帐号";
    var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = "过期时间";
    var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = "付款记录";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = "发货信息";
    var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = "付款信息";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = "运输工具";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = "发货模式";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = "发货日期";
    var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = "运输费用";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_MNU = "显示订单状态类型";
    var $_PHPSHOP_ORDER_STATUS_FORM_MNU = "增加订单状态类型";
    
    var $_PHPSHOP_ORDER_STATUS_LIST_CODE = "订单状态代码";
    var $_PHPSHOP_ORDER_STATUS_LIST_NAME = "订单状态名";
    
    var $_PHPSHOP_ORDER_STATUS_FORM_LBL = "订单状态";
    var $_PHPSHOP_ORDER_STATUS_FORM_CODE = "订单状态代码";
    var $_PHPSHOP_ORDER_STATUS_FORM_NAME = "订单状态名";
    var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = "订单列表";
    
    
    /*#####################
    MODULE PRODUCT
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_PRODUCT_MOD = "商品";
    
    var $_PHPSHOP_CURRENT_PRODUCT = "现有商品";
    var $_PHPSHOP_CURRENT_ITEM = "现有项目";
    
    // Product Inventory
    var $_PHPSHOP_PRODUCT_INVENTORY_LBL = "商品库存";
    var $_PHPSHOP_PRODUCT_INVENTORY_MNU = "查看库存";
    var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = "价格";
    var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = "数量";
    var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = "重量";
    // Product List
    var $_PHPSHOP_PRODUCT_LIST_MNU = "显示商品列表";
    var $_PHPSHOP_PRODUCT_LIST_LBL = "商品列表";
    var $_PHPSHOP_PRODUCT_LIST_NAME = "商品名";
    var $_PHPSHOP_PRODUCT_LIST_SKU = "SKU";
    var $_PHPSHOP_PRODUCT_LIST_PUBLISH = "发布";
    
    // Product Form
    var $_PHPSHOP_PRODUCT_FORM_MNU = "增加商品";
    var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = "编辑商品";
    var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = "查看商品介绍";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = "增加物品";
    var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = "增加另一个物品";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = "新添商品";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = "更新商品";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = "商品信息";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = "商品状态";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = "商品体积和重量";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = "商品图片";
    
    var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = "新添项目";
    var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = "更新项目";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = "项目信息";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = "项目状态";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = "项目的体积和重量";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = "项目图片";
    var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = "返回上一级商品";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = "要更新现有图片，请输入新图片的地址。";
    var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = "输入 \"none\" 删除现有图片。";
    var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = "商品Items";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = "Item属性";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = "你确定要删除相关的商品和物品吗?";
    var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = "你想删除此物品吗?";
    var $_PHPSHOP_PRODUCT_FORM_VENDOR = "卖主";
    var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = "供货商";
    var $_PHPSHOP_PRODUCT_FORM_SKU = "SKU";
    var $_PHPSHOP_PRODUCT_FORM_NAME = "商品名";
    var $_PHPSHOP_PRODUCT_FORM_URL = "URL";
    var $_PHPSHOP_PRODUCT_FORM_CATEGORY = "类别";
    var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = "零售价";
    var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = "Product Price (Net)";
    var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = "广告页描述";
    var $_PHPSHOP_PRODUCT_FORM_S_DESC = "简短描述";
    var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = "有库存";
    var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = "已订购";
    var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = "有效日期";
    var $_PHPSHOP_PRODUCT_FORM_SPECIAL = "特价出售";
    var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = "折扣类型";
    var $_PHPSHOP_PRODUCT_FORM_PUBLISH = "发布?";
    var $_PHPSHOP_PRODUCT_FORM_LENGTH = "长";
    var $_PHPSHOP_PRODUCT_FORM_WIDTH = "宽";
    var $_PHPSHOP_PRODUCT_FORM_HEIGHT = "高";
    var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = "计量单位";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT = "重量";
    var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = "计量单位";
    var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = "缩略图";
    var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = "完整图片";
    
    // Product Display
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = "商品增加结果";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = "商品更新结果";
    var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = "物品增加结果";
    var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = "物品更新结果";
    var $_PHPSHOP_PRODUCT_CSV_UPLOAD = "用CSV上传";
    var $_PHPSHOP_PRODUCT_FOLDERS = "商品文件夹";
    
    // Product Category List
    var $_PHPSHOP_CATEGORY_LIST_MNU = "类别列表";
    var $_PHPSHOP_CATEGORY_LIST_LBL = "类别树";
    
    // Product Category Form
    var $_PHPSHOP_CATEGORY_FORM_MNU = "增加类别";
    var $_PHPSHOP_CATEGORY_FORM_LBL = "类别信息";
    var $_PHPSHOP_CATEGORY_FORM_NAME = "类别名";
    var $_PHPSHOP_CATEGORY_FORM_PARENT = "父类别";
    var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = "类别描述";
    var $_PHPSHOP_CATEGORY_FORM_PUBLISH = "发布?";
    var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = "类别介绍";
    
    // Product Attribute List
    var $_PHPSHOP_ATTRIBUTE_LIST_MNU = "属性列表";
    var $_PHPSHOP_ATTRIBUTE_LIST_LBL = "属性";
    var $_PHPSHOP_ATTRIBUTE_LIST_NAME = "属性名";
    var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = "订单列表";
    
    // Product Attribute Form
    var $_PHPSHOP_ATTRIBUTE_FORM_MNU = "增加属性";
    var $_PHPSHOP_ATTRIBUTE_FORM_LBL = "属性";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = "为商品增加新的属性";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = "更新商品属性";
    var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = "新建物品属性";
    var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = "更新物品属性";
    var $_PHPSHOP_ATTRIBUTE_FORM_NAME = "属性名";
    var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = "排列顺序";
    
    // Product Price List
    var $_PHPSHOP_PRICE_LIST_MNU = "类别列表";
    var $_PHPSHOP_PRICE_LIST_LBL = "价格树";
    var $_PHPSHOP_PRICE_LIST_FOR_LBL = "价格-";
    var $_PHPSHOP_PRICE_LIST_GROUP_NAME = "组名";
    var $_PHPSHOP_PRICE_LIST_PRICE = "价格";
    var $_PHPSHOP_PRODUCT_LIST_CURRENCY = "货币";
    
    // Product Price Form
    var $_PHPSHOP_PRICE_FORM_MNU = "增加价格";
    var $_PHPSHOP_PRICE_FORM_LBL = "价格信息";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = "新建商品价格";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = "更新商品价格";
    var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = "新建物品价格";
    var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = "更新物品价格";
    var $_PHPSHOP_PRICE_FORM_PRICE = "价格";
    var $_PHPSHOP_PRICE_FORM_CURRENCY = "货币";
    var $_PHPSHOP_PRICE_FORM_GROUP = "购物会员组";
    
    
    /*#####################
    MODULE REPORT BASIC
    #####################*/
    # Some LABELs
    var $_PHPSHOP_REPORTBASIC_MOD = "基本报告";
    var $_PHPSHOP_RB_INDIVIDUAL = "单独产品列表";
    var $_PHPSHOP_RB_SALE_TITLE = "销售报告";
    
    /* labels for rpt_sales */
    var $_PHPSHOP_RB_SALES_PAGE_TITLE = "销售活动总览";
    
    var $_PHPSHOP_RB_INTERVAL_TITLE = "设置时间间隔";
    var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = "每月";
    var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = "每周";
    var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = "每天";
    
    var $_PHPSHOP_RB_THISMONTH_BUTTON = "本月";
    var $_PHPSHOP_RB_LASTMONTH_BUTTON = "上月";
    var $_PHPSHOP_RB_LAST60_BUTTON = "最近60天";
    var $_PHPSHOP_RB_LAST90_BUTTON = "最近90天";
    
    var $_PHPSHOP_RB_START_DATE_TITLE = "开始于";
    var $_PHPSHOP_RB_END_DATE_TITLE = "结束于";
    var $_PHPSHOP_RB_SHOW_SEL_RANGE = "显示选择范围内的商品";
    var $_PHPSHOP_RB_REPORT_FOR = "报告关于 ";
    var $_PHPSHOP_RB_DATE = "日期";
    var $_PHPSHOP_RB_ORDERS = "订单";
    var $_PHPSHOP_RB_TOTAL_ITEMS = "卖出商品总数";
    var $_PHPSHOP_RB_REVENUE = "收入";
    var $_PHPSHOP_RB_PRODLIST = "商品列表";
    
    
    
    /*#####################
    MODULE SHOP
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOP_MOD = "商城";
    var $_PHPSHOP_PRODUCT_THUMB_TITLE = "缩略图";
    var $_PHPSHOP_PRODUCT_PRICE_TITLE = "价格";
    var $_PHPSHOP_ORDER_STATUS_P = "为审核";
    var $_PHPSHOP_ORDER_STATUS_C = "确认";
    var $_PHPSHOP_ORDER_STATUS_X = "取消";
    
    
    # Some messages
    var $_PHPSHOP_ORDER_BUTTON = "定购";
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_SHOPPER_MOD = "购物者";
    
    
    
    // Shopper List
    var $_PHPSHOP_SHOPPER_LIST_MNU = "显示购物会员列表";
    var $_PHPSHOP_SHOPPER_LIST_LBL = "购物会员列表";
    var $_PHPSHOP_SHOPPER_LIST_USERNAME = "会员名";
    var $_PHPSHOP_SHOPPER_LIST_NAME = "全名";
    var $_PHPSHOP_SHOPPER_LIST_GROUP = "组";
    
    // Shopper Form
    var $_PHPSHOP_SHOPPER_FORM_MNU = "增加购物会员";
    var $_PHPSHOP_SHOPPER_FORM_LBL = "购物会员信息";
    var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = "付款信息";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = "信息";
    var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = "送货信息";
    var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = "增加地址";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = "地址别名";
    var $_PHPSHOP_SHOPPER_FORM_USERNAME = "用户名";
    var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = "名";
    var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = "姓";
    var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = "中名";
    var $_PHPSHOP_SHOPPER_FORM_TITLE = "称呼";
    var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = "购物时使用的会员名";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = "密码";
    var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = "确认密码";
    var $_PHPSHOP_SHOPPER_FORM_GROUP = "购物会员组";
    var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = "公司名";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = "地址1";
    var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = "地址2";
    var $_PHPSHOP_SHOPPER_FORM_CITY = "城市";
    var $_PHPSHOP_SHOPPER_FORM_STATE = "省份/地区";
    var $_PHPSHOP_SHOPPER_FORM_ZIP = "邮编";
    var $_PHPSHOP_SHOPPER_FORM_COUNTRY = "国家";
    var $_PHPSHOP_SHOPPER_FORM_PHONE = "电话";
    var $_PHPSHOP_SHOPPER_FORM_FAX = "传真";
    var $_PHPSHOP_SHOPPER_FORM_EMAIL = "Email";
    
    // Shopper Group List
    var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = "列出购物会员组";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = "购物会员组列表";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = "组名";
    var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = "组描述";
    
    
    // Shopper Group Form
    var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = "购物会员组表格";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = "增加会员组";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = "组名";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = "组描述";
    
    
    
    
    /*#####################
    MODULE SHOPPER
    #####################*/
    
    # Some LABELs
    var $_PHPSHOP_STORE_MOD = "商城";
    
    
    // Store Form
    var $_PHPSHOP_STORE_FORM_MNU = "编辑商城";
    var $_PHPSHOP_STORE_FORM_LBL = "商城信息";
    var $_PHPSHOP_STORE_FORM_CONTACT_LBL = "联系信息";
    var $_PHPSHOP_STORE_FORM_FULL_IMAGE = "完整图片";
    var $_PHPSHOP_STORE_FORM_UPLOAD = "上传图片";
    var $_PHPSHOP_STORE_FORM_STORE_NAME = "商城名称";
    var $_PHPSHOP_STORE_FORM_COMPANY_NAME = "商城所属公司";
    var $_PHPSHOP_STORE_FORM_ADDRESS_1 = "地址1";
    var $_PHPSHOP_STORE_FORM_ADDRESS_2 = "地址2";
    var $_PHPSHOP_STORE_FORM_CITY = "城市";
    var $_PHPSHOP_STORE_FORM_STATE = "省份/地区";
    var $_PHPSHOP_STORE_FORM_COUNTRY = "国家";
    var $_PHPSHOP_STORE_FORM_ZIP = "邮编";
    var $_PHPSHOP_STORE_FORM_PHONE = "电话";
    var $_PHPSHOP_STORE_FORM_CURRENCY = "货币";
    var $_PHPSHOP_STORE_FORM_CATEGORY = "商城分类";
    var $_PHPSHOP_STORE_FORM_LAST_NAME = "名";
    var $_PHPSHOP_STORE_FORM_FIRST_NAME = "姓";
    var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = "中名";
    var $_PHPSHOP_STORE_FORM_TITLE = "称呼";
    var $_PHPSHOP_STORE_FORM_PHONE_1 = "电话";
    var $_PHPSHOP_STORE_FORM_PHONE_2 = "电话";
    var $_PHPSHOP_STORE_FORM_FAX = "传真";
    var $_PHPSHOP_STORE_FORM_EMAIL = "Email";
    var $_PHPSHOP_STORE_FORM_IMAGE_PATH = "图片路径";
    var $_PHPSHOP_STORE_FORM_DESCRIPTION = "描述";
    
    
    
    var $_PHPSHOP_PAYMENT = "支付";
    // Payment Method List
    var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = "列出支付方式";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = "支付方式列表";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = "名字";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = "代码";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = "折扣";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = "购物会员组";
    var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = "支付方式";
    
    // Payment Method Form
    var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = "增加支付方式";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = "支付方式表";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = "支付表单名";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = "购物会员组";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = "折扣";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = "代码";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = "排列顺序";
    var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = "支付方式";
    
    
    
    /*#####################
    MODULE TAX
    #####################*/
    
    
    # Some LABELs
    var $_PHPSHOP_TAX_MOD = "税费";
    
    // User List
    var $_PHPSHOP_TAX_RATE = "税率";
    var $_PHPSHOP_TAX_LIST_MNU = "税率表";
    var $_PHPSHOP_TAX_LIST_LBL = "税率表";
    var $_PHPSHOP_TAX_LIST_STATE = "省份或地区税费";
    var $_PHPSHOP_TAX_LIST_COUNTRY = "国家税费";
    var $_PHPSHOP_TAX_LIST_RATE = "税率";
    
    // User Form
    var $_PHPSHOP_TAX_FORM_MNU = "增加税率";
    var $_PHPSHOP_TAX_FORM_LBL = "增加税费信息";
    var $_PHPSHOP_TAX_FORM_STATE = "省份或地区税费";
    var $_PHPSHOP_TAX_FORM_COUNTRY = "国家税费";
    var $_PHPSHOP_TAX_FORM_RATE = "税率";
    
    
    
    
    /*#####################
    MODULE VENDOR
    #####################*/
    
    
    
    # Some LABELs
    var $_PHPSHOP_VENDOR_MOD = "卖主";
    var $_PHPSHOP_VENDOR_ADMIN = "卖主";
    
    
    // Vendor List
    var $_PHPSHOP_VENDOR_LIST_MNU = "显示卖主列表";
    var $_PHPSHOP_VENDOR_LIST_LBL = "卖主列表";
    var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = "卖主名";
    var $_PHPSHOP_VENDOR_LIST_ADMIN = "管理";
    
    // Vendor Form
    var $_PHPSHOP_VENDOR_FORM_MNU = "增加卖主";
    var $_PHPSHOP_VENDOR_FORM_LBL = "增加信息";
    var $_PHPSHOP_VENDOR_FORM_INFO_LBL = "卖主信息";
    var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = "联系信息";
    var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = "完整图片";
    var $_PHPSHOP_VENDOR_FORM_UPLOAD = "上传图片";
    var $_PHPSHOP_VENDOR_FORM_STORE_NAME = "卖主商铺名";
    var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = "卖主公司名称";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = "地址1";
    var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = "地址2";
    var $_PHPSHOP_VENDOR_FORM_CITY = "城市";
    var $_PHPSHOP_VENDOR_FORM_STATE = "省份/地区";
    var $_PHPSHOP_VENDOR_FORM_COUNTRY = "国家";
    var $_PHPSHOP_VENDOR_FORM_ZIP = "邮编";
    var $_PHPSHOP_VENDOR_FORM_PHONE = "电话";
    var $_PHPSHOP_VENDOR_FORM_CURRENCY = "货币";
    var $_PHPSHOP_VENDOR_FORM_CATEGORY = "卖主分类";
    var $_PHPSHOP_VENDOR_FORM_LAST_NAME = "名";
    var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = "姓";
    var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = "中间名";
    var $_PHPSHOP_VENDOR_FORM_TITLE = "职务";
    var $_PHPSHOP_VENDOR_FORM_PHONE_1 = "电话1";
    var $_PHPSHOP_VENDOR_FORM_PHONE_2 = "电话2";
    var $_PHPSHOP_VENDOR_FORM_FAX = "传真";
    var $_PHPSHOP_VENDOR_FORM_EMAIL = "Email";
    var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = "图片路径";
    var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = "描述";
    
    
    // Vendor Category List
    var $_PHPSHOP_VENDOR_CAT_LIST_MNU = "列出卖主类别";
    var $_PHPSHOP_VENDOR_CAT_LIST_LBL = "卖主类别列表";
    var $_PHPSHOP_VENDOR_CAT_NAME = "类别名";
    var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = "类别描述";
    var $_PHPSHOP_VENDOR_CAT_VENDORS = "卖主";

// Vendor Category Form
    var $_PHPSHOP_VENDOR_CAT_FORM_MNU = "增加卖主类别";
    var $_PHPSHOP_VENDOR_CAT_FORM_LBL = "卖主类别表单";
    var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = "类别信息";
    var $_PHPSHOP_VENDOR_CAT_FORM_NAME = "类别名";
    var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = "类别描述";
    
    /*#####################
    MODULE MANUFACTURER
    #####################*/

    # Some LABELs
    var $_PHPSHOP_MANUFACTURER_MOD = "制造商";
    var $_PHPSHOP_MANUFACTURER_ADMIN = "销售者";
    
    
    // Manufacturer List
    var $_PHPSHOP_MANUFACTURER_LIST_MNU = "列出制造商";
    var $_PHPSHOP_MANUFACTURER_LIST_LBL = "制造商列表";
    var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = "制造商名称";
    var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = "管理员";
    
    // Manufacturer Form
    var $_PHPSHOP_MANUFACTURER_FORM_MNU = "添加制造商";
    var $_PHPSHOP_MANUFACTURER_FORM_LBL = "添加信息";
    var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = "制造商信息";
    var $_PHPSHOP_MANUFACTURER_FORM_NAME = "制造商名称";
    var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = "制造商类别";
    var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = "Email";
    var $_PHPSHOP_MANUFACTURER_FORM_URL = "制造商网址";
    var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = "说明";
    
    
    // Manufacturer Category List
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = "显示制造商类别列表";
    var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = "制造商类别列表";
    var $_PHPSHOP_MANUFACTURER_CAT_NAME = "类别名称";
    var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = "类别说明";
    var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = "制造商";
    
    // Manufacturer Category Form
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = "添加制造商类别";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = "制造商类别表单";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = "类别信息";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = "类别名称";
    var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = "类别说明";
    
    
    /*#####################
    Modul HELP
    #####################*/
    var $_PHPSHOP_HELP_MOD = "帮助";

// 210104 start

// basketform
    var $_PHPSHOP_CART_ACTION = "功能";
    var $_PHPSHOP_CART_UPDATE = "更新";

//230104
    var $_PHPSHOP_CART_DELETE = "删除";

//shopbrowse form

    var $_PHPSHOP_PRODUCT_PRICETAG = "价格";
    var $_PHPSHOP_PRODUCT_CALL = "电话报价";
    var $_PHPSHOP_PRODUCT_PREVIOUS = "上一个";
    var $_PHPSHOP_PRODUCT_NEXT = "下一个";

//ro_basket

    var $_PHPSHOP_CART_TAX = "税费";
    var $_PHPSHOP_CART_SHIPPING = "送货";
    var $_PHPSHOP_CART_TOTAL = "总数";

//CHECKOUT.INDEX

    var $_PHPSHOP_CHECKOUT_NEXT = "下一个";
    var $_PHPSHOP_CHECKOUT_REGISTER = "注册";

//CHECKOUT.CONFIRM

    var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = "付款信息";
    var $_PHPSHOP_CHECKOUT_CONF_COMPANY = "公司";
    var $_PHPSHOP_CHECKOUT_CONF_NAME = "姓名";
    var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = "地址";
    var $_PHPSHOP_CHECKOUT_CONF_PHONE = "电话";
    var $_PHPSHOP_CHECKOUT_CONF_FAX = "传真";
    var $_PHPSHOP_CHECKOUT_CONF_EMAIL = "Email";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = "送货信息";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = "公司";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = "姓名";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = "地址";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = "电话";
    var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = "传真";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = "付款信息";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = "信用卡上的姓名";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = "付款方式";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = "信用卡号";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = "过期时间";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = "完成订购";
    var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = "当选用信用卡付款时的必填信息";


    var $_PHPSHOP_ZONE_MOD = "地区运送费";

    var $_PHPSHOP_ZONE_LIST_MNU = "列出地区";
    var $_PHPSHOP_ZONE_FORM_MNU = "增加地区";
    var $_PHPSHOP_ZONE_ASSIGN_MNU = "分配地区";
    
    // assign zone List
    var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = "国家";
    var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = "现有地区";
    var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = "分配到地区";
    var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = "更新";
    var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = "分配地区";
    
    // zone Form
    var $_PHPSHOP_ZONE_FORM_NAME_LBL = "地区名";
    var $_PHPSHOP_ZONE_FORM_DESC_LBL = "地区描述";
    var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = "每件商品的地区运费";
    var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = "地区费用限额";
    
    // List of zones
    var $_PHPSHOP_ZONE_LIST_LBL = "地区列表";
    var $_PHPSHOP_ZONE_LIST_NAME_LBL = "地区名";
    var $_PHPSHOP_ZONE_LIST_DESC_LBL = "地区描述";
    var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = "每个物品的地区运费";
    var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = "地区费用限额";
    
    var $_PHPSHOP_LOGIN_FIRST = "请先登录或注册.<br>谢谢.";
    var $_PHPSHOP_STORE_FORM_TOS = "服务条款";
    var $_PHPSHOP_AGREE_TO_TOS = "您必须先接受我们的服务条款。";
    var $_PHPSHOP_I_AGREE_TO_TOS = "我同意此服务条款";
    
    var $_PHPSHOP_LEAVE_BLANK = "(如果您没有分配它一个单独的PHP文件请留空)";
    var $_PHPSHOP_RETURN_LOGIN = "已注册客户：请登录";
    var $_PHPSHOP_NEW_CUSTOMER = "新客户？请提供您的付款信息";
    var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = "客户帐号:";
    var $_PHPSHOP_ACC_ORDER_INFO = "支付信息";
    var $_PHPSHOP_ACC_UPD_BILL = "在此您可以更新您的支付信息.";
    var $_PHPSHOP_ACC_UPD_SHIP = "这里您可以增加或修改支付信息.";
    var $_PHPSHOP_ACC_ACCOUNT_INFO = "付款帐户信息";
    var $_PHPSHOP_ACC_SHIP_INFO = "送货信息";
    var $_PHPSHOP_ACC_NO_ORDERS = "没有可显示的订单";
    var $_PHPSHOP_ACC_BILL_DEF = "- 默认 (与付款信息一致)";
    var $_PHPSHOP_SHIPTO_TEXT = "您可以增加多个送货地址. 请为您选的送货地址取一个合适的别名或代码.";
    var $_PHPSHOP_CONFIG = "配置";
    var $_PHPSHOP_USERS = "会员";
    var $_PHPSHOP_IS_CC_PAYMENT = "是否使用信用卡支付?";
    
    /*#####################################################
     MODULE SHIPPING
    #######################################################*/
   var $_PHPSHOP_SHIPPING_MOD = "运输管理";
    var $_PHPSHOP_SHIPPING_MENU_LABEL = "运输";
    
    var $_PHPSHOP_CARRIER_LIST_MNU = "发货人";
    var $_PHPSHOP_CARRIER_LIST_LBL = "发货人列表";
    var $_PHPSHOP_RATE_LIST_MNU = "运输单价";
    var $_PHPSHOP_RATE_LIST_LBL = "运输单价列表";
    var $_PHPSHOP_CARRIER_LIST_NAME_LBL = "名称";
    var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = "列表顺序";
    
    var $_PHPSHOP_CARRIER_FORM_MNU = "添加发货人";
    var $_PHPSHOP_CARRIER_FORM_LBL = "添加/编辑发货人";
    var $_PHPSHOP_RATE_FORM_MNU = "添加运输单价";
    var $_PHPSHOP_RATE_FORM_LBL = "添加/编辑运输单价";
    
    var $_PHPSHOP_RATE_FORM_NAME = "运输单价说明";
    var $_PHPSHOP_RATE_FORM_CARRIER = "发货人";
    var $_PHPSHOP_RATE_FORM_COUNTRY = "国家";
    var $_PHPSHOP_RATE_FORM_ZIP_START = "邮编起始数值";
    var $_PHPSHOP_RATE_FORM_ZIP_END = "邮编结束数值";
    var $_PHPSHOP_RATE_FORM_WEIGHT_START = "最小重量";
    var $_PHPSHOP_RATE_FORM_WEIGHT_END = "最大重量";
    var $_PHPSHOP_RATE_FORM_VALUE = "费用";
    var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = "您的包裹费用";
    var $_PHPSHOP_RATE_FORM_CURRENCY = "货币";
    var $_PHPSHOP_RATE_FORM_VAT_ID = "增值税类型";
    var $_PHPSHOP_RATE_FORM_LIST_ORDER = "列表顺序";
    
    var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = "发货人";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = "运输单价说明";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = "重量从 ...";
    var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = "... 到";
    var $_PHPSHOP_CARRIER_FORM_NAME = "运输公司";
    var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = "列表顺序";
    
    var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = "错误: 发货人名称已经存在";
    var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = "错误: 请选择一个发货人";
    var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = "错误: 要删除以前的价格至少保留一个运输单价";
    var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = "错误: 没有找到该发货人";
    
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = "错误: 请选择一个发货人";
    var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = "错误: 没有找到该发货人";
    var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = "错误: 需要添加价格说明";
    var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = "错误: 到达国家不正确。多个国家可以用\";\"分隔";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = "错误: 需要添加最小重量";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = "错误: 需要填写最大重量";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = "错误: 最小重量必须小于最大重量";
    var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = "错误: 需要添加运输单价";
    var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = "错误: 请选择一种货币";
    
    var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = "错误: 需要填写运输单价";
    
    var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = "请选择";
    var $_PHPSHOP_INFO_MSG_CARRIER = "发货人";
    var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = "运输单价";
    var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = "价格";
    var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = "0 (-无-)";
    /*#####################################################
     END: MODULE SHIPPING
    #######################################################*/
    
    var $_PHPSHOP_PAYMENT_FORM_CC = "信用卡";
    var $_PHPSHOP_PAYMENT_FORM_USE_PP = "网上支付";
    var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = "银行汇款";
    var $_PHPSHOP_PAYMENT_FORM_AO = "邮政汇款";
    var $_PHPSHOP_CHECKOUT_MSG_2 = "请选择送货地址";
    var $_PHPSHOP_CHECKOUT_MSG_3 = "请选择送货方式";
    var $_PHPSHOP_CHECKOUT_MSG_4 = "请选择支付方式";
    var $_PHPSHOP_CHECKOUT_MSG_99 = "请查看你所输入的内容并确定你的订单";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = "请选择送货方式";
    var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = "请选择其他送货方式";
    var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = "请选择支付方式";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = "请输入信用卡号码";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = "请输入持卡人姓名.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = "信用卡号码不正确";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = "请输入信用卡的过期月份";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = "请输入信用卡的过期年份";
    var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = "信用卡的过期时间不正确";
    var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = "请选择送货地址";
    var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = "帐户号码不正确";
    var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = "您的购物车是空的";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = "错误: 请选择运输方式";
    var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = "错误: 没有找到所选择的运输单价";
    var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = "错误: 没有找到您的送货地址";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = "错误: 没有信用卡资料";
    var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = "错误: 信用卡号码没有找到!";
    var $_PHPSHOP_CHECKOUT_ERR_TEST = "对不起，你所使用的是测试用信用卡!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = "没有找到该用户!";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = "您没有提供银行开户名";
    var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = "您还没有提供您的IBAN.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = "您没有提供银行帐号";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = "您还没有提供银行类别代码";
    var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = "你还没有提供银行名称.";
    var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = "付款必需有一个正确的步骤!";
    var $_PHPSHOP_CHECKOUT_MSG_LOG = "付款信息记录稍候处理.<BR>";
    
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = "最小订单量目前还未达到.";
    var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = "我们的最小订单是:";
    var $_PHPSHOP_CHECKOUT_PAYMENT_CC = "信用卡支付";
    var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = "其他支付方法";
    var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = "请选择您的支付方法:";
    
    var $_PHPSHOP_STORE_FORM_MPOV = " 商店能接受最少的订购金额";
    var $_PHPSHOP_ACCOUNT_BANK_TITLE = "银行帐户信息";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = "帐号";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = "银行类别号码";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = "银行名称";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = "IBAN";
    var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = "账户持有人";
    
    var $_PHPSHOP_MODULES = "模块";
    var $_PHPSHOP_FUNCTIONS = "功能";
    var $_PHPSHOP_SPECIAL_PRODUCTS = "特别产品";
    
    var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = "如果您愿意，请留下订单记录";
    var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = "客户留言";
    var $_PHPSHOP_INCLUDING_TAX = "(含税 \$tax % tax)";
    var $_PHPSHOP_PLEASE_SEL_ITEM = "请选择一个商品";
    var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = "商品";
    
    // DOWNLOADS
    
    var $_PHPSHOP_DOWNLOADS_TITLE = "下载区域";
    var $_PHPSHOP_DOWNLOADS_START = "开始下载";
    var $_PHPSHOP_DOWNLOADS_INFO = "请输入您在EMAIL中收到的下载ID并点击‘开始下载’.";
    var $_PHPSHOP_DOWNLOADS_ERR_EXP = "对不起，您的下载时间已过期";
    var $_PHPSHOP_DOWNLOADS_ERR_MAX = "对不起，您已经达到了最大下载次数";
    var $_PHPSHOP_DOWNLOADS_ERR_INV = "无效的下载ID!";
    var $_PHPSHOP_DOWNLOADS_ERR_SEND = "不能发送信息到";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG = "信息已经了送到";
    var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = "下载信息Download-Info";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = "你订购的文件已经准备好下载";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = "请在下载区域输入下面的下载ID";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = "每个文件最多的下载次数是: ";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = "在第一次下载后的第{expire}天停止下载";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = "问题?";
    var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = "提供下载信息的是 "; // e.g. Download-Info by "Storename"
    var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = "可下载的商品?"; 
    
    var $_PHPSHOP_PAYPAL_THANKYOU = "谢谢你支付，交易成功。你将会收到发自PayPal的确认邮件。你可以继续或登陆 <a href=http://www.paypal.com>www.paypal.com</a> 查看交易信息";
    var $_PHPSHOP_PAYPAL_ERROR = "处理交易时发生错误，你的订单状态无法更新.";
    
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = "感谢您的惠顾!您的交易信息如下.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = "感谢你的光顾.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = "问题?";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = "以下的定单已经收到.";
    var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = "通过以下链接查看订单信息.";
    
    var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = "不允许负数.";
    var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = "请输入一个有效的商品数量.";
    
    var $_PHPSHOP_CART_STOCK_1 = "选择的数量超过库存. ";
    var $_PHPSHOP_CART_STOCK_2 = "我们现在有\$product_in_stock商品在售";
    var $_PHPSHOP_CART_STOCK_3 = "点击此处把商品添加到等待列单.";
    var $_PHPSHOP_CART_SELECT_ITEM = "请从商品详细资料中选择一个款式或类型!";
    
    var $_PHPSHOP_REGISTRATION_FORM_NONE = "无";
    var $_PHPSHOP_REGISTRATION_FORM_MR = "Mr.";
    var $_PHPSHOP_REGISTRATION_FORM_MRS = "Mrs.";
    var $_PHPSHOP_REGISTRATION_FORM_DR = "Dr.";
    var $_PHPSHOP_REGISTRATION_FORM_PROF = "Prof.";
    var $_PHPSHOP_DEFAULT = "默认";
    
  /*#####################################################
    MODULE AFFILIATE
  #######################################################*/
    var $_PHPSHOP_AFFILIATE_MOD = "代理商管理";
    
    // Affiliate List
    var $_PHPSHOP_AFFILIATE_LIST_MNU = "列出代理商";
    var $_PHPSHOP_AFFILIATE_LIST_LBL = "会员代理商";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = "代理商姓名";
    var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = "已激活";
    var $_PHPSHOP_AFFILIATE_LIST_RATE = "价格";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = "月总计";
    var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION ="月佣金";
    var $_PHPSHOP_AFFILIATE_LIST_ORDERS = "订单列表";
    
    // Affiliate Email
    var $_PHPSHOP_AFFILIATE_EMAIL_MNU = "发送代理商邮件";
    var $_PHPSHOP_AFFILIATE_EMAIL_LBL = "发送代理商邮件";
    var $_PHPSHOP_AFFILIATE_EMAIL_WHO = "发送对象(* = 全部代理商)";
    var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = "Email";
    var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = "主题";
    var $_PHPSHOP_AFFILIATE_EMAIL_STATS = "包括目前的统计";
    
    // Affiliate Form
    var $_PHPSHOP_AFFILIATE_FORM_RATE = "佣金比例(百分比)";
    var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = "激活?";
    
    var $_PHPSHOP_DELIVERY_TIME = "通常发货至";
    var $_PHPSHOP_DELIVERY_INFORMATION = "交货信息";
    var $_PHPSHOP_MORE_CATEGORIES = "更多类型";
    var $_PHPSHOP_AVAILABILITY = "有效";
    var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = "这种产品现在没有库存";
    var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = "再次供应时间: ";
    
    var $_PHPSHOP_STATISTIC_SUMMARY = "摘要";
    var $_PHPSHOP_STATISTIC_STATISTICS = "统计";
    var $_PHPSHOP_STATISTIC_CUSTOMERS = "顾客";
    var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = "畅销的产品";
    var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = "滞销的货品";
    var $_PHPSHOP_STATISTIC_SUM = "总数";
    var $_PHPSHOP_STATISTIC_NEW_ORDERS = "新订单";
    var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = "新顾客";

	//Waiting list : file /administrator/components/com_phpshop/html/shop.waiting_list.php
	var $_PHPSHOP_WAITING_LIST_MESSAGE = "Please enter your e-mail address below to be notified when this product comes back in stock. 
                                        We will not share, rent, sell or use this e-mail address for any other purpose other than to 
                                        tell you when the product is back in stock.<br /><br />Thank you!";
	var $_PHPSHOP_WAITING_LIST_THANKS = "感谢您的等待！ <br />如有存货，我们将尽快通知您。";
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = "提醒我";
	
	//Checkout : file /administrator/components/com_phpshop/html/checkout.thankyou.php
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = "打印视图";
  
  /**************************Admin.show_cfg.php in apparition order ;-)**************************************/
	
	/* PAGE 1 */
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = "请任选Authorize.net或者CyberCash中的一个";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = " 配置文件状态:";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = "可写";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = "不可写";
	
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = "全局";
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = "路径与地址";
	var $_PHPSHOP_ADMIN_CFG_SITE = "站点";
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = "送货";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = "结帐";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = "下载";
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = "支付";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = "仅用于目录";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = "如果你选择了这个，将会取消所有购物车功能。";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = "显示价格";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = "显示含税价？";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = "无论价格是否含税均设置标志。";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = "选择以显示价格。 如果使用了目录功能, 有些情况下可能不需要在页面上显示价格。";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = "实际税款";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = "这将决定零重量物品是否含税。 修改 ps_checkout.php->calc_order_taxable()以自定义。";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = "税金模式:";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = "基于购物者地址";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = "基于销售者地址";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = "这将决定了计算税金的时候采用何种税率: 
                                                这取决于销商者与顾客分别来自哪个国家。
                                                ";
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = "启用多重税率?";
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = "如果你所销售的商品税率不同的话，选择此项。 (比如说图书是7%的税率，而其它商品是16%的税率)";
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = "计算税金/运费之前减去折扣?";
  var $_PHPSHOP_ADMIN_CFG_REVIEW = "启用客户评价系统";
  var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = "如果启用的话, 你将允许顾客 <strong>评价产品</strong> 以及 <strong>撰写评论</strong> 。 <br />
                                                                                这样顾客可以写下他们的体验，为别的顾客提供参考。 <br />";
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = "设定这个标记来决定计算税金/运费之前减去折扣还是之后再减去折扣。";
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = "客户可以留下他们的银行帐户信息?";
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = "如果你的顾客愿意在注册的时候填写他们的银行账户信息的话，选择此项。";

	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = "顾客可以选择国家/地区?";
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = "如果你的顾客愿意在注册的时候填写他们的国家/地区的话，选择此项。";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = "必须同意服务条款?";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = "如果你想让你的顾客注册的时候同意服务条款，选择此项。";
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = "检查存货?";
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = "设置在用户将物品添加到购物车的时候，是否检查存货等级。
                                                                                          如果设置了，商场将不允许顾客添加超出存货级别的商品。";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = "启用代理商程序?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = "如果你在商场后台设置代理商的话，这将会在商场前端启用代理商跟踪。";
	
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = "订单邮件格式:";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = "文本邮件";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = "HTML邮件";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = "这决定了你的订单确认邮件将以何种方式投递:<br />
                                                                                        <ul><li>简单的文本邮件</li>
                                                                                        <li>或者是带有图片的HTML邮件。</li></ul>";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = "允许非后台用户使用前端管理程序?";
  var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = "这个设置项可以为那些无法访问后台管理程序(比如.Registered和Editor)的商场管理员启用前台管理。";
	
	/* PAGE 2 */
	var $_PHPSHOP_ADMIN_CFG_URL = "URL";
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = "站点地址 (以反斜杠结尾)";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = "SECUREURL";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = "站点的安全地址. (https开头， 以反斜杠结尾)";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = "COMPONENTURL";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = "PHPshop地址 (以反斜杠结尾)";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = "IMAGEURL";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = "PHPshop图片目录的地址(以反斜杠结尾)";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = "ADMINPATH";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = "PHPshop组件目录的地址";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = "CLASSPATH";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = "PHPshop类目录的地址";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = "PAGEPATH";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = "PHPshop HTML页面目录的地址";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = "IMAGEPATH";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = "PHPshop商场logo目录的地址";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = "HOMEPAGE";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = "此页面在默认情况下会被加载";	
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = "ERRORPAGE";
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = "此页面在出错时会默认加载";	
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = "DEBUGPAGE";
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = "此页面在调试时会默认加载";
	var $_PHPSHOP_ADMIN_CFG_DEBUG = "调试 ?";
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = "调试?  	   	会打开调试的输出. 这将会把调试页面显示在每个正常页面的底部。此信息在商场调试阶段非常有用。";


/* PAGE 3 */

	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = "商品介绍";
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = "这是显示商品详情的默认页面.";
  var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = "目录模板";
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = "这定义了在目录中显示商品默认的目录模板。<br />
                                                                                                      您可以修改已有模板以创建新模版文件。<br />
                                                                                                      (位于<strong>COMPONENTPATH/html/templates/</strong> 目录下面，名称以“browse_”起始)";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = "每行中默认商品数目";
  var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = "这里定义了每行中显示商品的数目 <br />
                                                                                                      例如，如果你设置为4,那么目录模板中就会在每列显示四个商品。";
  
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = "“无图片”的图片";
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = "在商品无图片可用时，显示此图片。";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = "搜索行数";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = "决定了搜索结果在每页中显示的行数。";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = "搜索颜色 1";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = "指定结果列表中奇数行的背景色。";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = "搜索颜色 2";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = "指定结果列表中偶数行的背景色。";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = "最大行数";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = "设置在订单列表选择框里面显示的行数。";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = "显示脚标“powered by mambo-phpShop” ?";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = "显示一个powered-by-mambo-phpShop的脚标图片。";
	
	
	/* PAGE 4 */
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = "选择商场送货方式";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = "使单独配置的运输者与运费的标准送货模块。<strong>推荐 !</strong>";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = "  	Zone Shipping Module Country Version 1.0<br />
                                                                                                            For more information on this module please visit <a href=\"http://ZephWare.com\">http://ZephWare.com</a><br />
                                                                                                            for details or contact <a href=\"mailto:zephware@devcompany.com\">ZephWare.com</a> ";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = "UPS Tools Shipping calculation";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = "UPS access code";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = "Your UPS access code";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = "UPS user id";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = "The user ID you got from UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = "UPS password";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = "The password for your UPS account";
	  
  var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = "InterShipper Module. ";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = "取消送货模块选择。";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = "InterShipper Password";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = "Your password for your intershipper account.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = "InterShipper email";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = "Your email address for your intershipper account.";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = "编码密匙";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = "用于加密存储在数据库的数据。这意味着数据将不能被随意查看。";
	
	
	/* PAGE 5 */
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = "启用结帐条";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = "如果你想在顾客结账过程中显示结帐进度条(显示1-2-3-4的图片进度条)，选择此项。";
	
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = "显示您商店的结帐进度条";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = "<strong>标准过程 :</strong><br/>
               1. 确定送货地址<br />
              2. 确定送货方式<br />
              3. 确定支付方式<br />
              4. 完成订单";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = "<strong>过程二</strong><br/>
               1.  确定送货地址<br />
              2. 确定支付方式t<br />
              3. 完成订单";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = "<strong>过程三:</strong><br/>
               1. 确定送货方式<br />
              2. 确定支付方式<br />
              3. 完成订单";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = "<strong>过程四:</strong><br/>
               1. 确定支付方式<br />
              2. 完成订单";
	
	
	
	/* PAGE 6 */
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = "启用下载";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = "选择此项会启用下载功能。适用于销售可下载商品的情况。";
	
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
    var $_PHPSHOP_ADVANCED_SEARCH  ="高级搜索";
    var $_PHPSHOP_SEARCH_ALL_CATEGORIES = "选择所有目录";
    var $_PHPSHOP_SEARCH_ALL_PRODINFO = "搜索所有商品信息";
    var $_PHPSHOP_SEARCH_PRODNAME = "只搜索商品名称";
    var $_PHPSHOP_SEARCH_MANU_VENDOR = "只搜索制造者/销售者";
    var $_PHPSHOP_SEARCH_DESCRIPTION = "只搜索商品描述";
    var $_PHPSHOP_SEARCH_AND = "与";
    var $_PHPSHOP_SEARCH_NOT = "非";
    var $_PHPSHOP_SEARCH_TEXT1 = "第一个下拉列表框可以让您选择商品目录以限制搜索范围， 
        第二个下拉列表框可以将您的搜索范围限制到商品信息特定位置。 (比如说商品名称)。 
        无论您选择与否，请先输入搜索关键字，以便我们为您查找相应的信息。 ";
    var $_PHPSHOP_SEARCH_TEXT2 = " 您可以添加额外的搜索关键字并设置“与”，“非”操作符以提高搜索结果命中率。
        选择“与” 意味着同时包含两个关键字商品都将出现在搜索结果之中。
        而选择“非”则意味着搜索结果将会是所有包含第一个关键字而不包括第二个关键字的商品。";
    var $_PHPSHOP_ORDERBY = "Order by";
    
    /*** Review feature ***/
    var $_PHPSHOP_CUSTOMER_RATING  = "顾客平均评价";
    var $_PHPSHOP_TOTAL_VOTES = "总体评价";
    var $_PHPSHOP_CAST_VOTE = "请投票";
    var $_PHPSHOP_RATE_BUTTON = "评价";
    var $_PHPSHOP_RATE_NOM = "评价";
    var $_PHPSHOP_REVIEWS = "顾客评论";
    var $_PHPSHOP_NO_REVIEWS = "此商品暂无评论。";
    var $_PHPSHOP_WRITE_FIRST_REVIEW = "您是第一个为此商品撰写评论的顾客。";
    var $_PHPSHOP_REVIEW_LOGIN = "请登陆以撰写评论。";
    var $_PHPSHOP_REVIEW_ERR_RATE = "请评价此产品以完成您的评论";
    var $_PHPSHOP_REVIEW_ERR_COMMENT1 = "请再多写几句评论，最少字数: 100";
    var $_PHPSHOP_REVIEW_ERR_COMMENT2 = "请简化您的评论，最多字数: 2000";
    var $_PHPSHOP_WRITE_REVIEW = "为此商品撰写评论";
    var $_PHPSHOP_REVIEW_RATE = "首先: 请对此商品做出评价。请在0(最差)到5(最好)之间做出评价。";
    var $_PHPSHOP_REVIEW_COMMENT = "现在请做出一个评论。(最少字数 100，最多字数:2000 ) ";
    var $_PHPSHOP_REVIEW_COUNT = "字数: ";
    var $_PHPSHOP_REVIEW_SUBMIT = "提交评论";
    var $_PHPSHOP_REVIEW_ALREADYDONE = "感谢您撰写了此商品的评论。";
    var $_PHPSHOP_REVIEW_THANKYOU = "感谢您的评价";
    var $_PHPSHOP_COMMENT= "评论";
    
    var $_PHPSHOP_CREDITCARD_FORM_LBL = "添加/编辑信用卡类型";
    var $_PHPSHOP_CREDITCARD_NAME = "信用卡名称";
    var $_PHPSHOP_CREDITCARD_CODE = "信用卡短写代码";
    var $_PHPSHOP_CREDITCARD_TYPE = "信用卡类型";
    
    var $_PHPSHOP_CREDITCARD_LIST_LBL = "信用卡列表";
    var $_PHPSHOP_UDATE_ADDRESS = "更新地址";
    var $_PHPSHOP_CONTINUE_SHOPPING = "继续购物";
    
    var $_PHPSHOP_THANKYOU_SUCCESS = "您的订单已经成功提交";
    var $_PHPSHOP_ORDER_LINK = "点击此链接查看订单详情";
    
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = "你的第 {order_id}号订单状态已经改变。";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = "新的状态是:";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = "请点击下列链接以查看订单细节:";
    var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = "变更订单状态: 你的第 {order_id}号订单";
    var $_PHPSHOP_ORDER_LIST_NOTIFY = "提醒顾客?";
    var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = "请先改变订单状态!";
    
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = "默认顾客组的折扣量 (以百分比的形式)";
    var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = "正值X意味着:商品如果对于该组顾客没有指定价格的话，那么将在默认价格上面减少X%。负值则有相反效果。";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = "商品折扣";
    var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = "商品折扣列表";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = "添加/编辑商品折扣";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = "折扣量";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = "输入折扣量";
    var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = "折扣类型";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = "百分比";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = "总共";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = "数量是百分比折扣还是总共折扣?";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = "折扣起始日期";
    var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = "指定折扣起始日期";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = "折扣结束日期";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = "指定折扣结束日期";
    var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = "您可以使用商品折扣表以增加折扣！";
    
    var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = "您节省了";
    
    var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = "查看全尺寸图片";
    
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
        
    var $_PHPSHOP_MULTISELECT = "用STRG-Key 和鼠标多选";
        
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
