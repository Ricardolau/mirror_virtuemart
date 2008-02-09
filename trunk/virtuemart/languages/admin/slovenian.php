<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translator soeren
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'ISO-8859-1',
	'PHPSHOP_USER_LIST_LBL' => 'Seznam uprabnikov',
	'PHPSHOP_USER_LIST_USERNAME' => 'Uporabnisko ime',
	'PHPSHOP_USER_LIST_FULL_NAME' => 'polno ime',
	'PHPSHOP_USER_LIST_GROUP' => 'Skupina',
	'PHPSHOP_USER_FORM_LBL' => 'Dodaj/posodobi informacije o uporabniku',
	'PHPSHOP_USER_FORM_PERMS' => 'Dovoljenje',
	'PHPSHOP_USER_FORM_CUSTOMER_NUMBER' => 'Customer Number / ID',
	'PHPSHOP_MODULE_LIST_LBL' => 'Seznam enot',
	'PHPSHOP_MODULE_LIST_NAME' => 'Ime enote',
	'PHPSHOP_MODULE_LIST_PERMS' => 'Module Perms',
	'PHPSHOP_MODULE_LIST_FUNCTIONS' => 'Funkcije',
	'PHPSHOP_MODULE_FORM_LBL' => 'Informacije',
	'PHPSHOP_MODULE_FORM_MODULE_LABEL' => 'Module Label (for Topmenu)',
	'PHPSHOP_MODULE_FORM_NAME' => 'Ime enote',
	'PHPSHOP_MODULE_FORM_PERMS' => 'Dovoljenje enote',
	'PHPSHOP_MODULE_FORM_HEADER' => 'Glava enote',
	'PHPSHOP_MODULE_FORM_FOOTER' => 'Noga enote',
	'PHPSHOP_MODULE_FORM_MENU' => 'Prikazi enoto v glavni konzoli?',
	'PHPSHOP_MODULE_FORM_ORDER' => 'Pregled naro�il',
	'PHPSHOP_MODULE_FORM_DESCRIPTION' => 'Opis enote',
	'PHPSHOP_MODULE_FORM_LANGUAGE_CODE' => 'Koda jezika',
	'PHPSHOP_MODULE_FORM_LANGUAGE_FILE' => 'Language File',
	'PHPSHOP_FUNCTION_LIST_LBL' => 'Seznam funkcij',
	'PHPSHOP_FUNCTION_LIST_NAME' => 'Ime funkcije',
	'PHPSHOP_FUNCTION_LIST_CLASS' => 'Ime skupine',
	'PHPSHOP_FUNCTION_LIST_METHOD' => 'Metoda skupine',
	'PHPSHOP_FUNCTION_LIST_PERMS' => 'Dovoljenja',
	'PHPSHOP_FUNCTION_FORM_LBL' => 'Informacije o funkciji',
	'PHPSHOP_FUNCTION_FORM_NAME' => 'Ime funkcije',
	'PHPSHOP_FUNCTION_FORM_CLASS' => 'Kategorija',
	'PHPSHOP_FUNCTION_FORM_METHOD' => 'Seznam kategorije',
	'PHPSHOP_FUNCTION_FORM_PERMS' => 'Dovoljene funkcije',
	'PHPSHOP_FUNCTION_FORM_DESCRIPTION' => 'Opis funkcije',
	'PHPSHOP_CURRENCY_LIST_LBL' => 'Seznam valut',
	'PHPSHOP_CURRENCY_LIST_NAME' => 'Ime valute',
	'PHPSHOP_CURRENCY_LIST_CODE' => 'Koda valute',
	'PHPSHOP_COUNTRY_LIST_LBL' => 'Seznam drzav',
	'PHPSHOP_COUNTRY_LIST_NAME' => 'Ime drzave',
	'PHPSHOP_COUNTRY_LIST_3_CODE' => 'Koda drzave (3)',
	'PHPSHOP_COUNTRY_LIST_2_CODE' => 'Koda drzave (2)',
	'PHPSHOP_STATE_LIST_MNU' => 'List State',
	'PHPSHOP_STATE_LIST_LBL' => 'State List for: ',
	'PHPSHOP_STATE_LIST_ADD' => 'Add/Update a State',
	'PHPSHOP_STATE_LIST_NAME' => 'State Name',
	'PHPSHOP_STATE_LIST_3_CODE' => 'State Code (3)',
	'PHPSHOP_STATE_LIST_2_CODE' => 'State Code (2)',
	'PHPSHOP_ADMIN_CFG_GLOBAL' => 'Global',
	'PHPSHOP_ADMIN_CFG_SITE' => 'Site',
	'PHPSHOP_ADMIN_CFG_SHIPPING' => 'Shipping',
	'PHPSHOP_ADMIN_CFG_CHECKOUT' => 'Checkout',
	'PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS' => 'Downloads',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE' => 'Use only as catalogue',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN' => 'If you check this, you disable all cart functionalities.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES' => 'Show Prices',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN' => 'Check to show prices. If using catalogue functionality, some don\'t want prices to appear on pages.',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX' => 'Virtual Tax',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN' => 'This determines whether items with zero weight are taxed or not. Modify ps_checkout.php->calc_order_taxable() to customize this.',
	'PHPSHOP_ADMIN_CFG_TAX_MODE' => 'Tax mode:',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP' => 'Based on shipping address',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR' => 'Based on vendor address',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN' => 'This determines which tax rate is taken for calculating taxes:<br />
                                                <ul><li>the one from the state / country the store owner comes from</li><br/>
                                                <li>or the one from where the shopper comes from.</li></ul>',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE' => 'Enable multiple tax rates?',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN' => 'Check this, if you have products with different tax rates (e.g. 7% for books and food, 16% for other stuff)',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE' => 'Subtract payment discount before tax/shipping?',
	'PHPSHOP_ADMIN_CFG_REVIEW' => 'Enable Customer Review/Rating System',
	'PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN' => 'If enabled, you allow customers to <strong>rate products</strong> and <strong>write reviews</strong> about them. <br />
                                                                                So customers can write down their experiences with the product for other customers.<br />',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN' => 'Sets the flag whether to subtract the Discount for the selected payment BEFORE (checked) or AFTER tax and shipping.',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS' => 'Must agree to Terms of Service?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN' => 'Check if you want a shopper to agree to your terms of service before registering to the shop.',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK' => 'Check Stock?',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN' => 'Sets whether to check the stock level when a user adds an item to the shopping cart. 
                                                                                          If set, this will not allow user to add more items to the cart than are available in stock.',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE' => 'Enable Affiliate Program?',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN' => 'This enables the affiliate tracking in the shop-frontend. Enable if you have added affiliates in the backend..',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT' => 'Order-mail format:',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT' => 'Text mail',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML' => 'HTML mail',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN' => 'This determines how your order confirmation emails are set up:<br />
                                                                                        <ul><li>as a simple text email</li>
                                                                                        <li>or as a html email with images.</li></ul>',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN' => 'Allow Frontend-Administration for non-Backend Users?',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN' => 'With this setting you can enable the Frontend Administration for users who 
                                                                                              are storeadmins, but can\'t access the Mambo Backend (e.g. Registered / Editor).',
	'PHPSHOP_ADMIN_CFG_URLSECURE' => 'SECUREURL',
	'PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN' => 'The secure URL to your site. (https - with trailing slash at the end!)',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE' => 'HOMEPAGE',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN' => 'This is the page which will be loaded by default.',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE' => 'ERRORPAGE',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN' => 'This is the default page for displaying error messages.',
	'PHPSHOP_ADMIN_CFG_DEBUG' => 'DEBUG ?',
	'PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN' => 'DEBUG?  	   	Turns on the debug output. This causes the DEBUGPAGE to be displayed at the bottom of each page. Very helpful during shop development since it shows the carts contents, form field values, etc.',
	'PHPSHOP_ADMIN_CFG_FLYPAGE' => 'FLYPAGE',
	'PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN' => 'This is the default page for displaying product details.',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE' => 'Category Template',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN' => 'This defines the default category template for displaying products in a category.<br />
                                                                                                      You can create new templates by customizing existing template files <br />
                                                                                                      (which reside in the directory <strong>COMPONENTPATH/html/templates/</strong> and begin with browse_)',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW' => 'Default number of products in a row',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN' => 'This defines the number of products in a row. <br />
                                                                                                      Example: If you set it to 4, the category template will display 4 products per row',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE' => '"no image" image',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN' => 'This image will be shown when no product image is available.',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION' => 'Show footer ',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN' => 'Displays a powered-by-mambo-phpShop footer image.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD' => 'Standard Shipping module with indiviual configured carriers and rates. <strong>RECOMMENDED !</strong>',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE' => '  	Zone Shipping Module Country Version 1.0<br />
                                                                                                            For more information on this module please visit <a href="http://ZephWare.com">http://ZephWare.com</a><br />
                                                                                                            for details or contact <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Check this to enable the zone shipping module',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE' => 'Disable Shipping method selection. Choose if your customers buy downloadable goods which don\'t have to be shipped.',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR' => 'Enable the Checkout Bar',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN' => 'Check this, if you want the \'checkout-bar\' to be displayed to the customer during checkout process ( 1 - 2 - 3 - 4 with graphics).',
	'PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS' => 'Choose your store\'s checkout process',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS' => 'Enable Downloads',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN' => 'Check to enable the download capability. Only If you want sell downloadable goods.',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS' => 'Order Status which enables download',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN' => 'Select the order status at which the customer is notified about the download via e-mail.',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS' => 'Order Status which disables downloads',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN' => 'Sets the order status at which the download is disabled for the customer.',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT' => 'DOWNLOADROOT',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN' => 'The physical path to the files for the custumer download. (trailing slash at the end!)<br>
        <span class="message">For your own shop\'s security: If you can, please use a directory ANYWHERE OUTSIDE OF THE WEBROOT</span>',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX' => 'Download Maximum',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN' => 'Sets the number of downloads which can be made with one Download-ID, (for one order)',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE' => 'Download Expire',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN' => 'Sets the time range <strong>in seconds</strong> in which the download is enabled for the customer. 
  This range begins with the first download! When the time range has expired, the download-ID is disabled.<br />Note : 86400s=24h.',
	'PHPSHOP_COUPONS' => 'Coupons',
	'PHPSHOP_COUPONS_ENABLE' => 'Enable Coupon Usage',
	'PHPSHOP_COUPONS_ENABLE_EXPLAIN' => 'If you enable the Coupon Usage, you allow customers to fill in Coupon Numbers to gain discounts on their purchase.',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON' => 'PDF - Button',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN' => 'Show or Hide the PDF - Button in the Shop',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER' => 'Must agree to Terms of Service on EVERY ORDER?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN' => 'Check if you want a shopper to agree to your terms of service on EVERY ORDER (before placing the order).',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS' => 'Show Products that are out of Stock',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN' => 'When enabled, Products that are currently not in Stock are displayed. Otherwise such Products are hidden.',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE' => 'Shop is offline?',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP' => 'If you check this, the Shop will display an Offline Message.',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG' => 'Offline Message',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX' => 'Table Prefix for Shop Tables',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP' => 'This is <strong>vm</strong> per default',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP' => 'Show Page Navigation at the Top of the Product Listing?',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP' => 'Switches On or Off the Display of Page Navigation at the Top of the Product Listings in the Frontend.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT' => 'Show the Number of Products?',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP' => 'Show the Number of Products in a Category like Category (4)?',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING' => 'Enable Dynamic Thumbnail Resizing?',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP' => 'If checked, you enable dynamic Image Resizing. This means that all Thumbnail Images are resized to fit the Sizes you provide below,
        using PHP\'s GD2 functions (you can check if you have GD2 support by browsing to "System" -> "System Info" -> "PHP Info" -> gd. 
        The Thumbnail Image quality is much better than Images which were "resized" by the browser. The newly generated Images are put into the directory /shop_image/prduct/resized. If the Image has already been resized, this copy will be send to the browser, so no image is resized again and again.',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH' => 'Thumbnail Image Width',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP' => 'The target <strong>width</strong> of the resized Thumbnail Image.',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT' => 'Thumbnail Image Height',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP' => 'The target <strong>height</strong> of the resized Thumbnail Image.',
	'PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION' => 'Please select at least one Checkbox in the Shipping Configuration!',
	'PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION' => 'Price Configuration',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL' => 'Membergroup to show prices to',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP' => 'The selected membergroup and all groups with higher permissions will be able to see the product prices.',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX' => 'Show "(including XX% tax)" when applicable?',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP' => 'When checked, users will see the text "(including xx% tax)" when prices are shown incl. tax.',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL' => 'Show the price label for packaging?',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP' => 'When checked, the price label is derived from the product\'s unit and packaging values:
<strong>Price per Unit (10 pieces)<strong><br/>
When not checked, price labels look just as usual: <strong>Price: $xx.xx</strong>',
	'PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS' => 'more Core Settings',
	'PHPSHOP_ADMIN_CFG_CORE_SETTINGS' => 'Core Settings',
	'PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES' => 'Frontend Features',
	'PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION' => 'Tax Configuration',
	'PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS' => 'User Registration Settings',
	'PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION' => 'User registration allowed?',
	'PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION' => 'New account activation necessary?',
	'VM_FIELDMANAGER_NAME' => 'Field name',
	'VM_FIELDMANAGER_TITLE' => 'Field title',
	'VM_FIELDMANAGER_TYPE' => 'Field type',
	'VM_FIELDMANAGER_REQUIRED' => 'Required',
	'VM_FIELDMANAGER_PUBLISHED' => 'Published',
	'VM_FIELDMANAGER_SHOW_ON_REGISTRATION' => 'Show in registration form',
	'VM_FIELDMANAGER_SHOW_ON_ACCOUNT' => 'Show in account maintenance',
	'VM_USERFIELD_FORM_LBL' => 'Add / Edit User Fields',
	'VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL' => 'Default product sort order',
	'VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP' => 'Defines by which field products are ordered by default on the browse pages',
	'VM_BROWSE_ORDERBY_FIELDS_LBL' => 'Available "Sort-by" fields',
	'VM_BROWSE_ORDERBY_FIELDS_LBL_TIP' => 'Choose the "Sort-by" fields for the browse page. Each one defines a sort method for the product browse page. If you deselect all, the Order-By-Form will not be shown.',
	'VM_GENERALLY_PREVENT_HTTPS' => 'Generally prevent https connections?',
	'VM_GENERALLY_PREVENT_HTTPS_TIP' => 'When checked, the shopper is redirected to the <strong>http</strong> URL when not browsing in those shop areas, which are forced to use https.',
	'VM_MODULES_FORCE_HTTPS' => 'Shop areas which must use https',
	'VM_MODULES_FORCE_HTTPS_TIP' => 'Here you can use a comma-separated list of shop core modules (See "Admin" => "List Modules"), which will be using https connections.',
	'VM_SHOW_REMEMBER_ME_BOX' => 'Show the "Remember me" checkbox on login?',
	'VM_SHOW_REMEMBER_ME_BOX_TIP' => 'When checked, the "remember me" box is shown on checkout. Not recommended when using shared ssl, because the customer could choose not to get a user cookie -  but that user cookie is required to keep the user logged in on both domains.',
	'VM_ADMIN_CFG_REVIEW_MINIMUM_COMMENT_LENGTH' => 'Comment Minimum Length',
	'VM_ADMIN_CFG_REVIEW_MINIMUM_COMMENT_LENGTH_TIP' => 'This is the amount of characters that MUST at least be written by a customer before the review can be submitted.',
	'VM_ADMIN_CFG_REVIEW_MAXIMUM_COMMENT_LENGTH' => 'Comment Maximum Length',
	'VM_ADMIN_CFG_REVIEW_MAXIMUM_COMMENT_LENGTH_TIP' => 'This is the maximum amount of characters that can be written by a customer in a comment.
',
	'VM_ADMIN_SHOW_EMAILFRIEND' => 'Show the "Recommend to a friend" link?',
	'VM_ADMIN_SHOW_EMAILFRIEND_TIP' => 'When enabled, a small link is displayed that allows the customer to send a recommendation email for a specific product.',
	'VM_ADMIN_SHOW_PRINTICON' => 'Show the "Print View" link?',
	'VM_ADMIN_SHOW_PRINTICON_TIP' => 'When enabled, a small link is displayed that opens the current page in a new popup for printing it out.',
	'VM_REVIEWS_AUTOPUBLISH' => 'Auto-Publish Reviews?',
	'VM_REVIEWS_AUTOPUBLISH_TIP' => 'If checked, reviews are automatically published after being posted. If not, the administrator must approve/publish them.',
	'VM_ADMIN_CFG_PROXY_SETTINGS' => 'Global Proxy Settings',
	'VM_ADMIN_CFG_PROXY_URL' => 'URL of the proxy server',
	'VM_ADMIN_CFG_PROXY_URL_TIP' => 'Example: <strong>http://10.42.21.1</strong>.<br />
Leave empty if you\'re not sure.</strong> This value will be used to connect to the internet from the shop server (e.g. when fetching shipping rates from UPS/USPS).',
	'VM_ADMIN_CFG_PROXY_PORT' => 'Proxy Port',
	'VM_ADMIN_CFG_PROXY_PORT_TIP' => 'The port used for communication with the proxy server (mostly <b>80</b> or <b>8080</b>).',
	'VM_ADMIN_CFG_PROXY_USER' => 'Proxy username',
	'VM_ADMIN_CFG_PROXY_USER_TIP' => 'If the proxy requires authentication please fill in your username here.',
	'VM_ADMIN_CFG_PROXY_PASS' => 'Proxy password',
	'VM_ADMIN_CFG_PROXY_PASS_TIP' => 'If the proxy requires authentication please fill in the correct password here.',
	'VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO' => 'Show information about "Return Policy" on the order confirmation page?',
	'VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP' => 'Store owners are required by law to inform their customers about return and order cancellation policies in most european countries. So this should be enabled in most cases.',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT' => 'Legal information text (short version).',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP' => 'This text instructs your customers in short about your return and order cancellation policy. It is shown on the last page of checkout, just above the "Confirm Order" button.',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK' => 'Link to the long version the return policy.',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP' => 'Please add a new content item about the details of your return and order cancellation policy.
Afterwards you can select it here.',
	'VM_SELECT_THEME' => 'Select the theme for your Shop',
	'VM_SELECT_THEME_TIP' => 'Themes allow styling and customizing your shop. <br />If no other themes than the "default" one are present you haven\'t installed more themes.',
	'VM_CFG_CONTENT_PLUGINS_ENABLE' => 'Enable content mambots / plugins in descriptions?',
	'VM_CFG_CONTENT_PLUGINS_ENABLE_TIP' => 'If enabled, product and category descriptions are parsed by all published content mambots/plugins.',
	'VM_CFG_CURRENCY_MODULE' => 'Select a currency converter module',
	'VM_CFG_CURRENCY_MODULE_TIP' => 'This allows you to select a certain currency converter module. Such modules fetch exchange rates from a server and convert one currency into another.',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_EU' => 'European Union mode',
	'VM_ADMIN_CFG_DOWNLOAD_KEEP_STOCKLEVEL' => 'Keep Product Stock Level on Purchase?',
	'VM_ADMIN_CFG_DOWNLOAD_KEEP_STOCKLEVEL_TIP' => 'When enabled, the stock level for a downloadable product is not lowered although it was purchased by customers.',
	'VM_USERGROUP_FORM_LBL' => 'Add/Edit a User Group',
	'VM_USERGROUP_NAME' => 'User Group Name',
	'VM_USERGROUP_LEVEL' => 'User Group Level',
	'VM_USERGROUP_LEVEL_TIP' => 'Important! A bigger number means <b>less</b> permissions. The <b>admin</b> group is <em>level 0</em>, storeadmin is level 250, users are level 500.',
	'VM_USERGROUP_LIST_LBL' => 'User Group List',
	'VM_ADMIN_CFG_COOKIE_CHECK' => 'Enable the Cookie Check?',
	'VM_ADMIN_CFG_COOKIE_CHECK_EXPLAIN' => 'If enabled, VirtueMart checks wether the browser of the customer accepts cookies or not. This is user-friendly, but it can have negative consequences on the Search-Engine-Friendlyness of your shop.',
	'VM_CFG_REGISTRATION_TYPE' => 'User Registration Type',
	'VM_CFG_REGISTRATION_TYPE_TIP' => 'Choose the type of User Registration for your store!<br />
<strong>Normal Registration</strong><br />
This is the standard registration type where the customer must register and choose an username and password<br /><br />
<strong>Silent Registration</strong><br />
Silent Registration means the customer doesn\'t need to choose username and password, but those are created automatically during registration and sent to the provided email address.
<br /><br />
<strong>Optional Registration</strong><br />
Opotional Registration let\'s the customer choose wether he/she wants to create an account or not. If the customer wants to create an account, a username and password must be chosen.
<br /><br />
<strong>No Registration</strong><br />
Customers don\'t need to and are not able to register in this type of registration.',
	'VM_CFG_REGISTRATION_TYPE_NORMAL_REGISTRATION' => 'Normal Account Creation',
	'VM_CFG_REGISTRATION_TYPE_SILENT_REGISTRATION' => 'Silent Account Creation',
	'VM_CFG_REGISTRATION_TYPE_OPTIONAL_REGISTRATION' => 'Optional Account Creation',
	'VM_CFG_REGISTRATION_TYPE_NO_REGISTRATION' => 'No Account Creation',
	'VM_ADMIN_CFG_FEED_CONFIGURATION' => 'Feed Configuration',
	'VM_ADMIN_CFG_FEED_ENABLE' => 'Enable Product Feeds',
	'VM_ADMIN_CFG_FEED_ENABLE_TIP' => 'If enabled, customers can subscribe to a feed that provides the latest products (of all or of a certain category) in your store.',
	'VM_ADMIN_CFG_FEED_CACHE' => 'Feed Cache Settings',
	'VM_ADMIN_CFG_FEED_CACHE_ENABLE' => 'Enable Cache?',
	'VM_ADMIN_CFG_FEED_CACHETIME' => 'Cache Time (seconds)',
	'VM_ADMIN_CFG_FEED_CACHE_TIP' => 'Caching speeds up the feed delivery and reduces the server load, because the feed is only created once and saved to a file.',
	'VM_ADMIN_CFG_FEED_SHOWPRICES' => 'Include the Product Price into the description?',
	'VM_ADMIN_CFG_FEED_SHOWPRICES_TIP' => 'If enabled, the standard Product Price will be added to the Product Description',
	'VM_ADMIN_CFG_FEED_SHOWDESC' => 'Include the Product Description?',
	'VM_ADMIN_CFG_FEED_SHOWDESC_TIP' => 'If enabled, the Product Description will be added to the feed item',
	'VM_ADMIN_CFG_FEED_SHOWIMAGES' => 'Include Images into the feed?',
	'VM_ADMIN_CFG_FEED_SHOWIMAGES_TIP' => 'If enabled, the thumb images will be included with the feed item.',
	'VM_ADMIN_CFG_FEED_DESCRIPTION_TYPE' => 'Type of Product Description',
	'VM_ADMIN_CFG_FEED_DESCRIPTION_TYPE_TIP' => 'Choose the type of product description that will be included with the feed.',
	'VM_ADMIN_CFG_FEED_LIMITTEXT' => 'Limit the Description?',
	'VM_ADMIN_CFG_FEED_MAX_TEXT_LENGTH' => 'Maximum Description Length',
	'VM_ADMIN_CFG_MAX_TEXT_LENGTH_TIP' => 'This is the maximum length of the product description for each feed item.',
	'VM_ADMIN_CFG_FEED_TITLE_TIP' => 'Title of the Feed (the placeholder {storename} holds the name of your store)',
	'VM_ADMIN_CFG_FEED_TITLE_CATEGORIES_TIP' => 'Title of a Category Feed (\'{catname}\' is the placeholder for the category name, {storename} holds the name of your store)',
	'VM_ADMIN_CFG_FEED_TITLE' => 'Feed Title',
	'VM_ADMIN_CFG_FEED_TITLE_CATEGORIES' => 'Feed Title for Categories',
	'VM_ADMIN_SECURITY' => 'Security',
	'VM_ADMIN_SECURITY_SETTINGS' => 'Security Settings',
	'VM_CFG_ENABLE_FEATURE' => 'Enable this Feature',
	'VM_CFG_CHECKOUT_SHOWSTEP_TIP' => 'Here you can enable, disable and reorder certain Checkout Steps. You can show multiple Steps on one Page by giving them the same Step Number.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_FLEX' => 'Flex Shipping. Fixed shipping cost to set base value of order with percentage of total sale above base value',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_SHIPVALUE' => 'Shipping based on order totals. Fixed shipping costs based on values entered in configuration.',
	'VM_CFG_CHECKOUT_SHOWSTEPINCHECKOUT' => 'Show on Step: %s of the Checkout Process.',
	'VM_ADMIN_ENCRYPTION_KEY' => 'Encryption Key',
	'VM_ADMIN_ENCRYPTION_KEY_TIP' => 'Used to safely store and retrieve sensible data (like credit card information) encrypted in the database.',
	'VM_ADMIN_STORE_CREDITCARD_DATA' => 'Store Credit Card Information?',
	'VM_ADMIN_STORE_CREDITCARD_DATA_TIP' => 'VirtueMart stores the Credit Card Information of Customers encrypted in the database. This is done even if the Credit Card Information is processed by an external  server. <strong>If you don\'t need to process Credit Card Information manually after the order has been placed, you should turn this option off.</strong>',
	'VM_USERFIELDS_URL_ONLY' => 'URL only',
	'VM_USERFIELDS_HYPERTEXT_URL' => 'Hypertext and URL',
	'VM_FIELDS_TEXTFIELD' => 'Text Field',
	'VM_FIELDS_CHECKBOX_SINGLE' => 'Check Box (Single)',
	'VM_FIELDS_CHECKBOX_MULTIPLE' => 'Check Box (Muliple)',
	'VM_FIELDS_DATE' => 'Date',
	'VM_FIELDS_DROPDOWN_SINGLE' => 'Drop Down (Single Select)',
	'VM_FIELDS_DROPDOWN_MULTIPLE' => 'Drop Down (Multi-Select)',
	'VM_FIELDS_EMAIL' => 'Email Address',
	'VM_FIELDS_EUVATID' => 'EU VAT ID',
	'VM_FIELDS_EDITORAREA' => 'Editor Text Area',
	'VM_FIELDS_TEXTAREA' => 'Text Area',
	'VM_FIELDS_RADIOBUTTON' => 'Radio Button',
	'VM_FIELDS_WEBADDRESS' => 'Web Address',
	'VM_FIELDS_DELIMITER' => '=== Fieldset delimiter ===',
	'VM_FIELDS_NEWSLETTER' => 'Newsletter Subscription',
	'VM_USERFIELDS_READONLY' => 'Read-Only',
	'VM_USERFIELDS_SIZE' => 'Field Size',
	'VM_USERFIELDS_MAXLENGTH' => 'Max Length',
	'VM_USERFIELDS_DESCRIPTION' => 'Description, field-tip: text or HTML',
	'VM_USERFIELDS_COLUMNS' => 'Columns',
	'VM_USERFIELDS_ROWS' => 'Rows',
	'VM_USERFIELDS_EUVATID_MOVESHOPPER' => 'Move the customer into the following shopper group upon successful validation of the EU VAT ID',
	'VM_USERFIELDS_ADDVALUES_TIP' => 'Use the table below to add new values.',
	'VM_ADMIN_CFG_DISPLAY' => 'Display',
	'VM_ADMIN_CFG_LAYOUT' => 'Layout',
	'VM_ADMIN_CFG_THEME_SETTINGS' => 'Theme Settings',
	'VM_ADMIN_CFG_THEME_PARAMETERS' => 'Parameters',
	'VM_ADMIN_ENCRYPTION_FUNCTION' => 'Encryption Function',
	'VM_ADMIN_ENCRYPTION_FUNCTION_TIP' => 'Here you can select the encryption function used to encrypt sensible information before being stored in the database. AES_ENCRYPT is recommended, because it is very secure. ENCODE doesn\'t provide real encryption.',
	'SAVE_PERMISSIONS' => 'Save Permissions',
	'VM_ADMIN_THEME_CFG_NOT_EXISTS' => 'The configuration file for this template does not exist and can\'t be created. Configuration is not possible',
	'VM_ADMIN_THEME_NOT_EXISTS' => 'The theme "{theme}" does not exist.',
	'VM_USERFIELDS_ADDVALUE' => 'Add a Value',
	'VM_USERFIELDS_TITLE' => 'Title',
	'VM_USERFIELDS_VALUE' => 'Value',
	'VM_USER_FORM_LASTVISIT_NEVER' => 'Never',
	'VM_USER_FORM_TAB_GENERALINFO' => 'General User Information',
	'VM_USER_FORM_LEGEND_USERDETAILS' => 'User Details',
	'VM_USER_FORM_LEGEND_PARAMETERS' => 'Parameters',
	'VM_USER_FORM_LEGEND_CONTACTINFO' => 'Contact Information',
	'VM_USER_FORM_NAME' => 'Name',
	'VM_USER_FORM_USERNAME' => 'Username',
	'VM_USER_FORM_EMAIL' => 'Email',
	'VM_USER_FORM_NEWPASSWORD' => 'New Password',
	'VM_USER_FORM_VERIFYPASSWORD' => 'Verify Password',
	'VM_USER_FORM_GROUP' => 'Group',
	'VM_USER_FORM_BLOCKUSER' => 'Block User',
	'VM_USER_FORM_RECEIVESYSTEMEMAILS' => 'Receive System Emails',
	'VM_USER_FORM_REGISTERDATE' => 'Register Date',
	'VM_USER_FORM_LASTVISITDATE' => 'Last Visit Date',
	'VM_USER_FORM_NOCONTACTDETAILS_1' => 'No Contact details linked to this User:',
	'VM_USER_FORM_NOCONTACTDETAILS_2' => 'See \'Components -> Contact -> Manage Contacts\' for details.',
	'VM_USER_FORM_CONTACTDETAILS_NAME' => 'Name',
	'VM_USER_FORM_CONTACTDETAILS_POSITION' => 'Position',
	'VM_USER_FORM_CONTACTDETAILS_TELEPHONE' => 'Telephone',
	'VM_USER_FORM_CONTACTDETAILS_FAX' => 'Fax',
	'VM_USER_FORM_CONTACTDETAILS_CHANGEBUTTON' => 'Change Contact Details',
	'VM_ADMIN_CFG_LOGFILE_HEADER' => 'Logfile Configuration',
	'VM_ADMIN_CFG_LOGFILE_ENABLED' => 'Enable logging?',
	'VM_ADMIN_CFG_LOGFILE_ENABLED_EXPLAIN' => 'If disabled, a "null" logger will be instantiated instead, so that the vmFileLogger can still be invoked without error.',
	'VM_ADMIN_CFG_LOGFILE_NAME' => 'Logfile Name',
	'VM_ADMIN_CFG_LOGFILE_NAME_EXPLAIN' => 'Path to logfile. Must be reachable and writeable.',
	'VM_ADMIN_CFG_LOGFILE_LEVEL' => 'Logging level',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_EXPLAIN' => 'Log messages above this priority threshold will be ignored.',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_TIP' => 'TIP - 8',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_DEBUG' => 'DEBUG - 7',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_INFO' => 'INFO - 6',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_NOTICE' => 'NOTICE - 5',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_WARNING' => 'WARNING - 4',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_ERR' => 'ERROR - 3',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_CRIT' => 'CRITICAL - 2',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_ALERT' => 'ALERT - 1',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_EMERG' => 'EMERGENCY - 0',
	'VM_ADMIN_CFG_LOGFILE_FORMAT' => 'Logfile format',
	'VM_ADMIN_CFG_LOGFILE_FORMAT_EXPLAIN' => 'Format for individual logfile line entries.',
	'VM_ADMIN_CFG_LOGFILE_FORMAT_EXPLAIN_EXTRA' => 'Logfile format fields can include any of the following: %{timestamp} %{ident} [%{priority}] [%{remoteip}] [%{username}] %{message} %{vmsessionid}.',
	'VM_ADMIN_CFG_LOGFILE_ERROR' => 'Cannot create or access log file.  Please contact the system or website administrator.',
	'VM_ADMIN_CFG_DEBUG_MODE_ENABLED' => 'Enable DEBUG mode?',
	'VM_ADMIN_CFG_DEBUG_IP_ENABLED' => 'Limit by IP address?',
	'VM_ADMIN_CFG_DEBUG_IP_ENABLED_EXPLAIN' => 'Limit debugging output to a specific client IP address?',
	'VM_ADMIN_CFG_DEBUG_IP_ADDRESS' => 'Client IP address',
	'VM_ADMIN_CFG_DEBUG_IP_ADDRESS_EXPLAIN' => 'If you enable this option and enter an IP address here, then debug output will be enabled ONLY for this client IP address.  Other clients will not see the debugging output.',
	'VM_FIELDMANAGER_SHOW_ON_SHIPPING' => 'Show in shipping form'
); $VM_LANG->initModule( 'admin', $langvars );
?>