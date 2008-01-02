<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : swedish.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
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
$VM_LANG->initModule('admin',array (
	'CHARSET' => 'ISO-8859-1',
	'PHPSHOP_USER_LIST_LBL' => 'Anv�ndarlista',
	'PHPSHOP_USER_LIST_USERNAME' => 'Anv�ndarnamn',
	'PHPSHOP_USER_LIST_FULL_NAME' => 'F�rnamn Efternamn',
	'PHPSHOP_USER_LIST_GROUP' => 'Grupp',
	'PHPSHOP_USER_FORM_LBL' => 'L�gg till/uppdatera anv�ndarinformation',
	'PHPSHOP_USER_FORM_PERMS' => 'R�ttigheter',
	'PHPSHOP_USER_FORM_CUSTOMER_NUMBER' => 'Customer Number / ID',
	'PHPSHOP_MODULE_LIST_LBL' => 'Moduler',
	'PHPSHOP_MODULE_LIST_NAME' => 'Namn',
	'PHPSHOP_MODULE_LIST_PERMS' => 'R�ttigheter',
	'PHPSHOP_MODULE_LIST_FUNCTIONS' => 'Funktioner',
	'PHPSHOP_MODULE_FORM_LBL' => 'Ny modul',
	'PHPSHOP_MODULE_FORM_MODULE_LABEL' => 'Modultitel (f�r Toppmeny)',
	'PHPSHOP_MODULE_FORM_NAME' => 'Modulnamn',
	'PHPSHOP_MODULE_FORM_PERMS' => 'R�ttigheter',
	'PHPSHOP_MODULE_FORM_HEADER' => 'Sidhuvud',
	'PHPSHOP_MODULE_FORM_FOOTER' => 'Sidfot',
	'PHPSHOP_MODULE_FORM_MENU' => 'Visa modul i administrationsmenyn?',
	'PHPSHOP_MODULE_FORM_ORDER' => 'Visa order',
	'PHPSHOP_MODULE_FORM_DESCRIPTION' => 'Modulbeskrivning',
	'PHPSHOP_MODULE_FORM_LANGUAGE_CODE' => 'Spr�kkod',
	'PHPSHOP_MODULE_FORM_LANGUAGE_FILE' => '',
	'PHPSHOP_FUNCTION_LIST_LBL' => 'Funktioner',
	'PHPSHOP_FUNCTION_LIST_NAME' => 'Funktionsnamn',
	'PHPSHOP_FUNCTION_LIST_CLASS' => 'Klassnamn',
	'PHPSHOP_FUNCTION_LIST_METHOD' => 'Klassmetod',
	'PHPSHOP_FUNCTION_LIST_PERMS' => 'R�ttigheter',
	'PHPSHOP_FUNCTION_FORM_LBL' => 'Funktionsinformation',
	'PHPSHOP_FUNCTION_FORM_NAME' => 'Funktionsnamn',
	'PHPSHOP_FUNCTION_FORM_CLASS' => 'Klassnamn',
	'PHPSHOP_FUNCTION_FORM_METHOD' => 'Klassmetod',
	'PHPSHOP_FUNCTION_FORM_PERMS' => 'Funktionsr�ttigheter',
	'PHPSHOP_FUNCTION_FORM_DESCRIPTION' => 'Funktionsbeskrivning',
	'PHPSHOP_CURRENCY_LIST_LBL' => 'Valutor',
	'PHPSHOP_CURRENCY_LIST_NAME' => 'Valutanamn',
	'PHPSHOP_CURRENCY_LIST_CODE' => 'Valutakod',
	'PHPSHOP_COUNTRY_LIST_LBL' => 'L�nder',
	'PHPSHOP_COUNTRY_LIST_NAME' => 'Namn',
	'PHPSHOP_COUNTRY_LIST_3_CODE' => 'Landskod (3)',
	'PHPSHOP_COUNTRY_LIST_2_CODE' => 'Landskod (2)',
	'PHPSHOP_STATE_LIST_MNU' => 'Visa stater',
	'PHPSHOP_STATE_LIST_LBL' => 'Statlista f�r: ',
	'PHPSHOP_STATE_LIST_ADD' => 'L�gg till/uppdatera stat',
	'PHPSHOP_STATE_LIST_NAME' => 'Stat namn',
	'PHPSHOP_STATE_LIST_3_CODE' => 'Stat kod (3)',
	'PHPSHOP_STATE_LIST_2_CODE' => 'Stat kod (2)',
	'PHPSHOP_ADMIN_CFG_GLOBAL' => 'Global',
	'PHPSHOP_ADMIN_CFG_SITE' => 'Hemsida',
	'PHPSHOP_ADMIN_CFG_SHIPPING' => 'Leverans',
	'PHPSHOP_ADMIN_CFG_CHECKOUT' => 'Kassa',
	'PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS' => 'Nedladdningar',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE' => 'Anv�nd bara som produktkatalog',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN' => 'Om du v�ljer detta s� inaktiveras alla funktioner i varukorgen.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES' => 'Visa priser',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Visa priser inkl. moms.',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'St�ller in huruvida kunden ser priset inkl. eller exkl. moms.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN' => 'Kryssa i f�r att visa priser.',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX' => 'Virtuell moms',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN' => 'Detta avg�r om produkter utan vikt momms�tts eller ej. Modifiera ps_checkout.php->calc_order_taxable() f�r att anpassa detta.',
	'PHPSHOP_ADMIN_CFG_TAX_MODE' => 'Momsl�ge:',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP' => 'Baserat p� leveransadress',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR' => 'Baserat p� tillverkarens adress',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN' => 'Detta avg�r vilken momssats som anv�nds f�r att r�kna ut moms:<br /> 
                                                  <ul><li>den som g�ller i s�ljarens region/land</li><br/> 
                                                  <li>eller den som g�ller i k�parens region/land.</li></ul>',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE' => 'Aktivera multipla momssatser.',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN' => 'V�lj detta om du har produkter med en annan momssats (t.ex 6% f�r b�cker och mat, 12% f�r annat)',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE' => 'R�kna av eventuell rabatt exkl. moms och frakt?',
	'PHPSHOP_ADMIN_CFG_REVIEW' => 'M�jligg�r betygss�ttningsystem',
	'PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN' => 'I l�ge "P�" till�ts kunderna att <strong>betygs�tta produkter</strong> och att <strong>skriva recensioner</strong> om dem. <br /> 
                                           D�rmed kan kunden tipsa andra om sina erfarenheter av produkten.<br />',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN' => 'R�knar av eventuell rabatt innan moms och fraktkostanader adderas till ordern.',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS' => 'Kunden m�ste godk�nna anv�ndaravtal.',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN' => 'Kryssa i om du vill att bes�karen(kunden) ska g� med p� ditt anv�ndaravtal innan han/hon registrerar sig.',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK' => 'Kontrollera lagersaldo.',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN' => 'Kryssa i om du vill att lagersaldo ska kontrolleras n�r en vara l�ggs i varukorgen. 
                                                                                                    Om detta �r inst�llt kan kunden inte l�gga till fler produkter till varukorgen �n vad som finns i lager.',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE' => 'Aktivera partnerprogram.',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN' => 'Detta aktiverar partnersp�rning i webbutiken. Aktivera detta om du har lagt in partners.',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT' => 'Format p� orderbekr�ftelse:',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT' => 'Endast text',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML' => 'HTML',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN' => 'Detta avg�r format p�  orderbekr�ftelse:<br />
                                                                                          <ul><li>som ett enkelt textmail</li>
                                                                                          <li>eller som ett html-mail med bilder.</li></ul>',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN' => 'Till�t butiksadministration f�r butiksanv�ndare',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN' => 'Med detta aktiverat m�jligg�rs administration av butiken f�r anv�ndare som 
                                              har befogenhet f�r butiksadministration men saknar tillg�ng till administrat�rsgr�nssnittet.',
	'PHPSHOP_ADMIN_CFG_URLSECURE' => 'S�ker URL',
	'PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN' => 'S�ker URL till din hemsida. (https - med ett / p� slutet)',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE' => 'Hemsida',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN' => 'Detta �r shoppens startsida.',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE' => 'ERRORPAGE',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN' => 'This is the default page for displaying error messages.',
	'PHPSHOP_ADMIN_CFG_DEBUG' => 'Debug?',
	'PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN' => 'Sl�r p� debug-funktionen l�ngst ner p� sidan som visar data f�r att hj�lpa vid fels�kning.',
	'PHPSHOP_ADMIN_CFG_FLYPAGE' => 'Produktsida',
	'PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN' => 'S�kv�g till mallen f�r sidan som visar produktdetaljer.',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE' => 'Kategorimall',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN' => 'S�kv�g till mallen f�r sidan som listar produkte ri en kategori.<br /> 
                                                         Du kan skapa en egen mall genom att anpassa befintliga mallfiler <br /> 
                                                         (som finns i mappen <strong>KOMPONENTS�KV�G/html/templates/</strong> och vars filnamn b�rjar med browse_)',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW' => 'Antal produkter i rad',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN' => 'Detta definierar antal produkter som visas i rad p� samma sida. <br />',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE' => '"no image" image',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN' => 'Denna bild kommer att visas n�r det inte finns en bild f�r produkten.',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION' => 'Visa sidfot ',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN' => 'Visar en bild i sidfot med texten ',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD' => 'Standard fraktmodul med individuellt inst�llda transportfirmor och leveransmetoder. <strong>REKOMMENDERAS!</strong>',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE' => 'Zone Shipping Module Country version 1.0<br />
                                                                                                              F�r mer information om denna modul bes�k <a href="http://ZephWare.com">http://ZephWare.com</a><br />
                                                                                                              eller kontakta <a href="mailto:zephware@devcompany.com">zephware@devcompany.com</a><br />',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE' => 'Inaktivera val av leveranss�tt. V�lj detta om dina kunder k�per nedladdningsbara varor som inte beh�ver skickas.',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR' => 'Aktivera orderg�ngslisten',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN' => 'Kryssa i f�r att aktivera orderg�ngslisten som underl�ttar best�llningen f�r kunden ( 1 - 2 - 3 - 4 med bilder).',
	'PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS' => 'V�lj best�llningsproceduren f�r din butik',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS' => 'Aktivera nedladdningar',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN' => 'Aktiverar nedladdningsarea f�r att s�lja nedladdningsbara produkter.',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS' => 'Orderstatus som m�jligg�r nedladdning',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN' => 'V�lj den orderstatus som kunden meddelas via e-post vid nedladdning.',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS' => 'Orderstatus som om�jligg�r nedladdningar.',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN' => 'V�lj orderstatus som sp�rrar nedladdningar.',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT' => 'Nedladdningsmapp',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN' => 'S�kv�gen till filerna som kan laddas ner. (med / p� slutet!)<br>
          <span class="message">F�r din butiks s�kerhet: Om det �r m�jligt s� anv�nd en mapp N�GONSTANS UTANF�R WEBBPLATSENS ROTMAPP</span>',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX' => 'Maximal nedladdning',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN' => 'S�tter gr�ns f�r antal nedladdningar som kan ske med ett nedladdnings-ID, (f�r en best�llning)',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE' => 'Nedladdningen har upph�rt att g�lla',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN' => 'S�tter tidsgr�ns <strong>i sekunder</strong> som nedladdningen �r m�jlig f�r kunden. 
    Detta intervall b�rjar i och med f�rsta nedladdningen! N�r intervallet har passerats, s� upph�r nedladdnings-ID\\\'t att g�lla.<br />Notera : 86400s=24h.',
	'PHPSHOP_COUPONS' => 'Kuponger',
	'PHPSHOP_COUPONS_ENABLE' => 'Aktivera kuponganv�ndning',
	'PHPSHOP_COUPONS_ENABLE_EXPLAIN' => 'Om du aktiverar kuponger till�ter du kunder att ange kupongkoder f�r att f�  rabatt p� sina ink�p.',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON' => 'PDF - knapp',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN' => 'Visa eller d�lj PDF-knappen i butiken',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER' => 'M�ste godk�nna k�pavtalet p� VARJE ORDER?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN' => 'Markera om du vill att kunden ska godk�nna k�pavtalet p� VARJE ORDER (Innan ordern skickas).',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS' => 'Visa proukter som �r slut i lager',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN' => 'Vid vald visas �ven proukter som inte finns i lager. Annars d�ljs dessa produkter.',
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
        using PHP\\\'s GD2 functions (you can check if you have GD2 support by browsing to "System" -> "System Info" -> "PHP Info" -> gd. 
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
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP' => 'When checked, the price label is derived from the product\\\'s unit and packaging values:
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
Leave empty if you\\\'re not sure.</strong> This value will be used to connect to the internet from the shop server (e.g. when fetching shipping rates from UPS/USPS).',
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
	'VM_SELECT_THEME_TIP' => 'Themes allow styling and customizing your shop. <br />If no other themes than the "default" one are present you haven\\\'t installed more themes.',
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
Silent Registration means the customer doesn\\\'t need to choose username and password, but those are created automatically during registration and sent to the provided email address.
<br /><br />
<strong>Optional Registration</strong><br />
Opotional Registration let\\\'s the customer choose wether he/she wants to create an account or not. If the customer wants to create an account, a username and password must be chosen.
<br /><br />
<strong>No Registration</strong><br />
Customers don\\\'t need to and are not able to register in this type of registration.',
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
	'VM_ADMIN_CFG_FEED_TITLE_CATEGORIES_TIP' => 'Title of a Category Feed (\\\'{catname}\\\' is the placeholder for the category name, {storename} holds the name of your store)',
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
	'VM_ADMIN_STORE_CREDITCARD_DATA_TIP' => 'VirtueMart stores the Credit Card Information of Customers encrypted in the database. This is done even if the Credit Card Information is processed by an external  server. <strong>If you don\\\'t need to process Credit Card Information manually after the order has been placed, you should turn this option off.</strong>',
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
	'VM_ADMIN_ENCRYPTION_FUNCTION_TIP' => 'Here you can select the encryption function used to encrypt sensible information before being stored in the database. AES_ENCRYPT is recommended, because it is very secure. ENCODE doesn\\\'t provide real encryption.',
	'SAVE_PERMISSIONS' => 'Save Permissions'
	));
?>