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
	'PHPSHOP_USER_LIST_LBL' => 'Brukerliste',
	'PHPSHOP_USER_LIST_USERNAME' => 'Brukernavn',
	'PHPSHOP_USER_LIST_FULL_NAME' => 'Fullt Navn',
	'PHPSHOP_USER_LIST_GROUP' => 'Gruppe',
	'PHPSHOP_USER_FORM_LBL' => 'Legg til/oppdater brukerinformasjon',
	'PHPSHOP_USER_FORM_PERMS' => 'Rettigheter',
	'PHPSHOP_USER_FORM_CUSTOMER_NUMBER' => 'Kundenummer / ID',
	'PHPSHOP_MODULE_LIST_LBL' => 'Modul liste',
	'PHPSHOP_MODULE_LIST_NAME' => 'Modul navn',
	'PHPSHOP_MODULE_LIST_PERMS' => 'Modul Rettigh.',
	'PHPSHOP_MODULE_LIST_FUNCTIONS' => 'Funksjoner',
	'PHPSHOP_MODULE_FORM_LBL' => 'Modul informasjon',
	'PHPSHOP_MODULE_FORM_MODULE_LABEL' => 'Modul tittel (til Toppmenu)',
	'PHPSHOP_MODULE_FORM_NAME' => 'Modul navn',
	'PHPSHOP_MODULE_FORM_PERMS' => 'Modul Rettigh.',
	'PHPSHOP_MODULE_FORM_HEADER' => 'Modul overskrift',
	'PHPSHOP_MODULE_FORM_FOOTER' => 'Modul bunn',
	'PHPSHOP_MODULE_FORM_MENU' => 'Vis modul i admin meny?',
	'PHPSHOP_MODULE_FORM_ORDER' => 'Visnings rekkef�lge',
	'PHPSHOP_MODULE_FORM_DESCRIPTION' => 'Modul beskrivelse',
	'PHPSHOP_MODULE_FORM_LANGUAGE_CODE' => 'Spr�kkode',
	'PHPSHOP_MODULE_FORM_LANGUAGE_FILE' => 'Language File',
	'PHPSHOP_FUNCTION_LIST_LBL' => 'Funksjonsliste',
	'PHPSHOP_FUNCTION_LIST_NAME' => 'Funksjonsnavn',
	'PHPSHOP_FUNCTION_LIST_CLASS' => 'Klassenavn',
	'PHPSHOP_FUNCTION_LIST_METHOD' => 'Klassemetode',
	'PHPSHOP_FUNCTION_LIST_PERMS' => 'Tillatelser',
	'PHPSHOP_FUNCTION_FORM_LBL' => 'Funksjon info',
	'PHPSHOP_FUNCTION_FORM_NAME' => 'Funksjonsnavn',
	'PHPSHOP_FUNCTION_FORM_CLASS' => 'Klassenavn',
	'PHPSHOP_FUNCTION_FORM_METHOD' => 'Klassemetode',
	'PHPSHOP_FUNCTION_FORM_PERMS' => 'Funksjonsrettigheter',
	'PHPSHOP_FUNCTION_FORM_DESCRIPTION' => 'Funksjonsbeskrivelse',
	'PHPSHOP_CURRENCY_LIST_LBL' => 'Valutaliste',
	'PHPSHOP_CURRENCY_LIST_NAME' => 'Valuta navn',
	'PHPSHOP_CURRENCY_LIST_CODE' => 'Valutakode',
	'PHPSHOP_COUNTRY_LIST_LBL' => 'Landsliste',
	'PHPSHOP_COUNTRY_LIST_NAME' => 'Navn land',
	'PHPSHOP_COUNTRY_LIST_3_CODE' => 'Landskode (3)',
	'PHPSHOP_COUNTRY_LIST_2_CODE' => 'Landskode (2)',
	'PHPSHOP_STATE_LIST_MNU' => 'List Stat',
	'PHPSHOP_STATE_LIST_LBL' => 'Stat Liste for: ',
	'PHPSHOP_STATE_LIST_ADD' => 'Legg til/Oppdater Stat',
	'PHPSHOP_STATE_LIST_NAME' => 'Navn p� Stat',
	'PHPSHOP_STATE_LIST_3_CODE' => 'Stat Kode (3)',
	'PHPSHOP_STATE_LIST_2_CODE' => 'Stat Kode (2)',
	'PHPSHOP_ADMIN_CFG_GLOBAL' => 'Global',
	'PHPSHOP_ADMIN_CFG_SITE' => 'Side',
	'PHPSHOP_ADMIN_CFG_SHIPPING' => 'Sending',
	'PHPSHOP_ADMIN_CFG_CHECKOUT' => 'G� til kassen',
	'PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS' => 'Nedlastinger',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE' => 'Bruk kun som katalog',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN' => 'Om du velger denne fjernes handlefunksjonen. Produktene vises p� vanlig m�te.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES' => 'Vis Priser',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN' => 'Velg for � vise priser. N�r katalogvisning uten handlemulighet er valgt �nsker noen � gj�re dette uten at prisene vises.',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX' => 'Virtual MVA',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN' => 'Dette bestemmer om varer med NULL vekt skal v�re med i MVA-beregningen eller ikke. Endre ps_checkout.php->calc_order_taxable() for dine innstillinger.',
	'PHPSHOP_ADMIN_CFG_TAX_MODE' => 'MVA m�te',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP' => 'Basert p� leveringsadresse',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR' => 'Basert p� Butikkadresse',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN' => 'Dette bestemmer om MVA-satsen kalkuleres:<br />
                                                                                    <ul><li>Landet/Staten butikken er registrert i</li><br/>

                                                                                    <li>eller hvor kunden kommer fra.</li></ul>',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE' => 'Mulighet for flere MVA satser?',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN' => 'velg dette dersom du selger varer med forskjellige satser for MVA. (f.eks. 7% matmoms, 25% for annet)',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE' => 'Trekk fra rabatt f�r beregning av MVA/Fraktkostnader?',
	'PHPSHOP_ADMIN_CFG_REVIEW' => 'Muliggj�r for kunder � gi kommentarer/rangering?',
	'PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN' => 'Om valgt, kan kunder <strong>rangere produkter</strong> og <strong>skrive kommentarer</strong> om dem. <br />

Slik at kunder kan skrive om sine erfaringer om produktet til andre kunder.',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN' => 'Bestemmer om rabatt skal trekkes fra f�r valgt betalingsm�te eller etter MVA og sendekostnader.',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS' => 'M� akseptere Slags- og Leveringsbetingelser?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN' => 'Velges dersom du vil at kundene m� akseptere salgs- og leveringsbetingelsene f�r de registrerer seg som kunde.',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK' => 'Sjekk Varebeholdning?',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN' => 'Velges dersom varebeholdning skal sjekkes n�r en kunde legger en vare i handlekurven.
',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE' => 'Muliggj�r Statistikk?',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN' => 'Dette gj�r statistikk i nettbutikken mulig dersom Statistikk er mulig i Administrasjonen.',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT' => 'Format p� ordren per E-post :',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT' => 'Ren Tekst',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML' => 'HTML',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN' => 'Dette bestemmer hvordan oppsette p� ordren via Epost settes opp:<br />

                                                                                        <ul><li>som ren tekst</li>

                                                                                        <li>eller som HTML med bilder.</li></ul>',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN' => 'Tillat administrasjon av butikken for bruker uten administrasjonsrett for portalen?',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN' => 'Med dette valget kan du gi tilgang til administrasjon av butikken uten at brukeren har tilgang til administrasjon av nettstedet.',
	'PHPSHOP_ADMIN_CFG_URLSECURE' => 'Sikker URL',
	'PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN' => 'Sikker URL til nettsidene.(https - med "/" til slutt!)',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE' => 'NETTSIDE',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN' => 'Dette er siden som blir �pnet som standard side.',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE' => 'FEILMELDING SIDE',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN' => 'Dette er standard side for visning av feilmeldinger.',
	'PHPSHOP_ADMIN_CFG_DEBUG' => 'DEBUG ?',
	'PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN' => 'DEBUG?  	   	Sl�r p� debug generering. Dette gj�r at DEBUGPAGE vises nederst p� hver side. Nyttig n�r butikken opprettes fordi da vises detaljer om handlekurv, formular felt verdier osv.',
	'PHPSHOP_ADMIN_CFG_FLYPAGE' => 'FLYPAGE',
	'PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN' => 'Dette er standarside for visning av produkt detaljer.',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE' => 'Kategori',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN' => 'Dette avgj�r standard mal for visning av produkter i en produktkategori.<br />

                                                                                                      Du kan lage nye maler ved � endre p� en eksisterende malfil <br />

                                                                                                      (som du finner i <strong>COMPONENTPATH/html/templates/</strong> og starter med browse_)',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW' => 'Standar antall produkter per rekke.',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN' => 'Dette bestemmer antall produkter i en rad. <br />

                                                                                                      Eksempel: Om du setter 4, vil kategori malen vise 4 produkter per rad.',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE' => '"ikke bilde" bilde',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN' => 'Dette bildet vil vises intill du legger til bilde p� produktet.',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION' => 'Vis Fotnote',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN' => 'Viser "powered-by-Virtuemart" bilde.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD' => 'Standar forsendelses modul med forskjellige transport�rer ok kostnader. <strong>ANBEFALES!</strong>',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE' => '  	Zone Shipping Module Country Version 1.0<br />

                                                                                                            For more information on this module please visit <a href="http://ZephWare.com">http://ZephWare.com</a><br />

                                                                                                            for details or contact <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Check this to enable the zone shipping module',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE' => 'Disable Shipping method selection. Choose if your customers buy downloadable goods which don\'t have to be shipped.',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR' => 'Vis symboler n�r kunden betaler',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN' => 'Velges dersom du �nsker � vise symboler for hvor i prosessen kunden er n�r han betaler ( 1 - 2 - 3 - 4 med bilder).',
	'PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS' => 'Velg betalings prosess for din butikk.',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS' => 'Tillat Nedlasting',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN' => 'Velges dersom du selger nedlastbare produkter.',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS' => 'Ordrestaus som tillater nedlasting',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN' => 'Velger ordrestatusen kunden mottar via epost ang�ende nedlastingen.',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS' => 'Ordrestaus som hindrer nedlasting',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN' => 'Velger ordrestatusen kunden mottar via epost ang�ende nedlastingen.',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT' => 'DOWNLOADROOT',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN' => 'The physical path to the files for the custumer download. (trailing slash at the end!)<br>

        <span class="message">For your own shop\'s security: If you can, please use a directory ANYWHERE OUTSIDE OF THE WEBROOT</span>',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX' => 'Maks nedlasting',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN' => 'Angir antall nedlastinger som kan foretas med Nedlastings-ID (per ordre)',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE' => 'Nedlasting utg�r',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN' => 'Angir hvor lenge nedlastingen er tilgjengelig <strong>i sekunder</strong>
',
	'PHPSHOP_COUPONS' => 'Rabatter',
	'PHPSHOP_COUPONS_ENABLE' => 'Tillat bruk av rabatt',
	'PHPSHOP_COUPONS_ENABLE_EXPLAIN' => 'Om du tillater bruk av rabatt kan kunder med ett rabattnummer bruke denne n�r de handler.',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON' => 'PDF - Knapp',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN' => 'Vis/Skul PDF-knapp i butikken',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER' => 'M� akseptere Salgs- og Leveringsbetingelser p� alle ordrer?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN' => 'Velges dersom du vil at kundene m� akseptere Salgs- og Leveringsbetingelser p� alle ordrer f�r "Fullf�r ordre".',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS' => 'Vis produkter som ikke er p� lager',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN' => 'N�r valgt vil produkter som ikke er p� lager vises. Om ikke valgt vil disse produkter v�re usynlige til de er p� lager.',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE' => 'Butikken er nede?',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP' => 'Om du velger dette vil det komme en melding om at butikken er nede.',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG' => 'Melding n�r butikken er nede',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX' => 'Tabell prefiks for butikk tabeller',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP' => 'Dette er <strong>vm</strong> etter standard',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP' => 'Vis side navigasjon over produktlisten?',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP' => 'Sl�r av eller p� sidenavigasjon over listen med produkter.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT' => 'Vis antall produkter?',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP' => 'Vis antall produkter i en kategori som Kategori (4)?',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING' => 'Tillat dynamisk generering av lite bilde?',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP' => 'Om valgt lages det automatisk et lite bilde for visning i produktlisten. Dette bildet endres til � passe inn i den st�rrelsen du angir under.',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH' => 'Lite bilde bredde',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP' => 'M�l for <strong>bredde</strong> p� lite bilde',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT' => 'Lite bilde h�yde',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP' => 'M�l for <strong>h�yde</strong> p� lite bilde',
	'PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION' => 'Du m� velge minst en forsendelses m�te.',
	'PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION' => 'Prisoppsett',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL' => 'Kundegruppe � vise priser til',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP' => 'Valgt kundegruppe og alle grupper med h�yere tilgangsniv� vil kunne se produktpriser.',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX' => 'Vis "inkl. mva" n�r valgt?',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP' => 'Om valgt vil kunden se "inkl. mva" N�r priser er vist inkl. mva.',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL' => 'Vis pris for pakking?',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP' => 'Om valgt vil pris hentes fra produkt enhet/antall og Pris per enhet. Om ikke valgt vil prisen vises som normalt: <strong>Pris: kr xxxx.xx</strong>',
	'PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS' => 'Flere Core innstillinger',
	'PHPSHOP_ADMIN_CFG_CORE_SETTINGS' => 'Core Innstillinger',
	'PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES' => 'Andre innstillinger',
	'PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION' => 'MVA oppsett',
	'PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS' => 'Innstillinger for kunderegistrering',
	'PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION' => 'Tillat kunderegistrering?',
	'PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION' => 'Ny kontaktivering n�dvendig?',
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