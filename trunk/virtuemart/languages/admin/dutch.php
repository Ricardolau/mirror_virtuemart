<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : dutch.php 1071 2007-12-03 08:42:28Z thepisu $
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
$langvars = array (
	'CHARSET' => 'ISO-8859-1',
	'PHPSHOP_USER_LIST_LBL' => 'Gebruikers Lijst',
	'PHPSHOP_USER_LIST_USERNAME' => 'Gebruikersnaal',
	'PHPSHOP_USER_LIST_FULL_NAME' => 'Volledige Naam',
	'PHPSHOP_USER_LIST_GROUP' => 'Groep',
	'PHPSHOP_USER_FORM_LBL' => 'Toevoegen/Update Gebruiker Informatie',
	'PHPSHOP_USER_FORM_PERMS' => 'Permissies',
	'PHPSHOP_USER_FORM_CUSTOMER_NUMBER' => 'Klantnummer / ID',
	'PHPSHOP_MODULE_LIST_LBL' => 'Module Ljist',
	'PHPSHOP_MODULE_LIST_NAME' => 'Module Naam',
	'PHPSHOP_MODULE_LIST_PERMS' => 'Module Permisies',
	'PHPSHOP_MODULE_LIST_FUNCTIONS' => 'Functies',
	'PHPSHOP_MODULE_FORM_LBL' => 'Module Informatie',
	'PHPSHOP_MODULE_FORM_MODULE_LABEL' => 'Module Label (voor Topmenu)',
	'PHPSHOP_MODULE_FORM_NAME' => 'Module Naam',
	'PHPSHOP_MODULE_FORM_PERMS' => 'Module Permissies',
	'PHPSHOP_MODULE_FORM_HEADER' => 'Module Koptekst',
	'PHPSHOP_MODULE_FORM_FOOTER' => 'Module Voettekst',
	'PHPSHOP_MODULE_FORM_MENU' => 'Module tonen in Administratie Menu?',
	'PHPSHOP_MODULE_FORM_ORDER' => 'Volgorde',
	'PHPSHOP_MODULE_FORM_DESCRIPTION' => 'Module Omschrijving',
	'PHPSHOP_MODULE_FORM_LANGUAGE_CODE' => 'Taal Code',
	'PHPSHOP_MODULE_FORM_LANGUAGE_FILE' => 'Language File',
	'PHPSHOP_FUNCTION_LIST_LBL' => 'Functie Lijst',
	'PHPSHOP_FUNCTION_LIST_NAME' => 'Functie Naam',
	'PHPSHOP_FUNCTION_LIST_CLASS' => 'Klasse Naam',
	'PHPSHOP_FUNCTION_LIST_METHOD' => 'Klasse Methode',
	'PHPSHOP_FUNCTION_LIST_PERMS' => 'Permissies',
	'PHPSHOP_FUNCTION_FORM_LBL' => 'Functie Informatie',
	'PHPSHOP_FUNCTION_FORM_NAME' => 'Functie Naam',
	'PHPSHOP_FUNCTION_FORM_CLASS' => 'Klasse Naam',
	'PHPSHOP_FUNCTION_FORM_METHOD' => 'Class Method',
	'PHPSHOP_FUNCTION_FORM_PERMS' => 'Functie Permissies',
	'PHPSHOP_FUNCTION_FORM_DESCRIPTION' => 'Functie Beschrijving',
	'PHPSHOP_CURRENCY_LIST_LBL' => 'Valuta Lijst',
	'PHPSHOP_CURRENCY_LIST_NAME' => 'Valuta Naam',
	'PHPSHOP_CURRENCY_LIST_CODE' => 'Valuta Code',
	'PHPSHOP_COUNTRY_LIST_LBL' => 'Landen Lijst',
	'PHPSHOP_COUNTRY_LIST_NAME' => 'Land Naam',
	'PHPSHOP_COUNTRY_LIST_3_CODE' => 'Land Code (3)',
	'PHPSHOP_COUNTRY_LIST_2_CODE' => 'Land Code (2)',
	'PHPSHOP_STATE_LIST_MNU' => 'Provincie Lijst',
	'PHPSHOP_STATE_LIST_LBL' => 'Provincie Lijst Voor:',
	'PHPSHOP_STATE_LIST_ADD' => 'Provincie Toevoegen/Updaten',
	'PHPSHOP_STATE_LIST_NAME' => 'Provincie Naam',
	'PHPSHOP_STATE_LIST_3_CODE' => 'Provincie Code (3)',
	'PHPSHOP_STATE_LIST_2_CODE' => 'Provincie Code (2)',
	'PHPSHOP_ADMIN_CFG_GLOBAL' => 'Globaal',
	'PHPSHOP_ADMIN_CFG_SITE' => 'Site',
	'PHPSHOP_ADMIN_CFG_SHIPPING' => 'Verzending',
	'PHPSHOP_ADMIN_CFG_CHECKOUT' => 'Afrekenen',
	'PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS' => 'Downloads',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE' => 'Gebruik alleen als catalogus',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN' => 'Met deze keuze schakelt u alle winkel functionaliteit uit.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES' => 'Toon Prijzen',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Toon Prijzen inclusief BTW',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Optie om de klanten prijzen te tonen met of zonder belasting.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN' => 'Optie om prijzen te tonen. Als de catalogus functie wordt gebruikt, dan wil niet iedereen de prijzen laten zien.',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX' => 'Virtuele Belasting',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN' => 'Dit bepaalt of er over artikelen met een gewicht van 0 belasting wordt geheven. Wijzig ps_checkout.php->calc_order_taxable() om dit aan te passen.',
	'PHPSHOP_ADMIN_CFG_TAX_MODE' => 'Belasting modus:',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP' => 'Gebaseerd op leverings adres',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR' => 'Gebaseerd op verkopers adres',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN' => 'Dit bepaalt welk belastingtarief gekozen wordt:<br /><ul><li>de plaats waar de winkel is gevestigd (verkopersadres)</li><br/><li>de plaats waar de klant vandaan komt. (leveringsadres)</li></ul>',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE' => 'Meerdere belastings tarieven gebruiken?',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN' => 'Gebruik deze optie, als er artikelen zijn die in verschillende belastingtarieven vallen zoals boeken 6% en luxe goederen 21%.',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE' => 'Pas korting toe voor belasting/verzending?',
	'PHPSHOP_ADMIN_CFG_REVIEW' => 'Activeer Klant Recensie/Beoordelings Systeem',
	'PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN' => 'Indien geactiveerd, sta je klanten toe om produkten te <strong> beoordelen</strong> en <strong>recensies </strong> er over te schrijven. Klanten kunnen hun ervaringen uiten over een produkt om te delen met andere klanten.<br />
                                                                                So customers can write down their experiences with the product for other customers.<br />',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN' => 'Optie om korting af te trekken voor de gekozen betalingsmethode VOOR (aangevinkt) of NA belasting en verzendkosten berekening.',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS' => 'Moet akkoord gaan met de algemene voorwaarden?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN' => 'Activeer als klanten akkoord moeten gaan met de algemene voorwaarden.',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK' => 'Voorraad controlleren?',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN' => 'Optie om de voorraad te controleren als een klant een artikel aan het mandje toevoegd. Indien geactiveerd, kan een klant niet meer produkten toevoegen aan het mandje dan er op voorraad zijn.',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE' => 'Wederverkopers Activeren?',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN' => 'Dit laat toe wederverkopers te gebruiken in de front-end. Activeer dit alleen als je wederverkopers hebt toegevoegd in de backend',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT' => 'Order-mail formaat:',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT' => 'Tekst mail',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML' => 'HTML mail',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN' => 'Dit bepaalt hoe de bevestigings e-mails worden opgezet:<br /><ul><li>als simpele tekst e-mail</li><li>als een HTML e-mail met plaatjes.</li></ul>',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN' => 'Administratie via de winkelpagina voor niet-backend gebruikers?',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN' => 'Deze optie kan de Administratie via de voorpagina activeren voor gebruikers die winkeleigenaar zijn, maar geen toegang hebben tot de Joomla / Mambo backend (b.v. Geregistreerd / Editor).',
	'PHPSHOP_ADMIN_CFG_URLSECURE' => 'SECUREURL',
	'PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN' => 'De beveiligde URL naar uw website. (https - met een slash op het einde!)',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE' => 'HOMEPAGE',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN' => 'Dit is de pagina die standaard geladen wordt.',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE' => 'ERRORPAGE',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN' => 'Dit is de standaard pagina voor foutmeldingen.',
	'PHPSHOP_ADMIN_CFG_DEBUG' => 'DEBUG ?',
	'PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN' => 'DEBUG? Activeert de debug uitvoer. Dit zorgt ervoor dat de DEBUGPAGE wordt weergegeven onderaan elke pagina. Dit is erg handig tijdens het ontwikkelen van de winkel aangezien het verschillende informatie laat zien zoals inhoud van het mandje, formulier waardes etc.',
	'PHPSHOP_ADMIN_CFG_FLYPAGE' => 'FLYPAGE',
	'PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN' => 'Dit is de standaard pagina voor het weergeven van product informatie.',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE' => 'Categorie Sjabloon',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN' => 'Dit definieerd de standaard categorie sjabloon voor het weergeven van producten in een categorie.<br /> Nieuwe sjablonen kunnen worden gecre�erd door het wijzigen van de bestaande sjablonen.<br />(deze bevinden zich in de directorie <strong>COMPONENTPATH/html/templates/</strong> en beginnen met browse_)',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW' => 'Standaard aantal producten in een rij',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN' => 'Dit definieerd het standaard aantal producten in een rij. <br />Bijvoorbeeld: Als het aantal op 4 staat, dan laat het categorie sjabloon 4 producten per rij zien',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE' => '"geen afbeelding" afbeelding',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN' => 'Deze afbeelding wordt weergegeven als er geen product afbeelding beschikbaar is.',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION' => 'Toon voettekst',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN' => 'Toont een powered-by-VirtueMart voettekst afbeelding.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD' => 'Standaard Verzendings module met individueel geconfigureerde bedrijven en tarieven. <strong>AANBEVOLEN !</strong>',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE' => 'Zone Verzendings Module Landen Versie 1.0<br />Voor meer informatie over deze module bezoek je best <a href="http://ZephWare.com">http://ZephWare.com</a><br />voor details of contact <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Selecteer dit om de zone verzendingsmodule te activeren',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE' => 'Schakel Verzendmethode uit. Kies dit als u alleen goederen verkoopt die niet verscheept hoeven te worden.',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR' => 'Activeer de afreken balk',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN' => 'Activeer dit, indien de \'afreken-balk\' getoond moet worden aan de klant tijdens de afreken procedure ( 1 - 2 - 3 - 4 met afbeeldingen).',
	'PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS' => 'Kies uw winkel\'s afreken procedure',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS' => 'Downloads Toestaan',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN' => 'Kies deze optie om de download mogelijkheden te activeren. Alleen als u artikelen verkoopt die te downloaden zijn.',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS' => 'Order Status die downloaden toelaat',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN' => 'Selecteer de order status die er voor zorgt dat de klant per e-mail verwittigt wordt over de download.',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS' => 'Order Status die downloaden uitschakelt',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN' => 'Selecteer de order status die er voor zorgt dat de download voor de klant niet toegelaten is.',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT' => 'DOWNLOADROOT',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN' => 'Het fysische pad naar de bestanden voor de klanten download. (gevolgd door een slash op het einde!<br>
        <span class="message">Voor de veiligheid van Uw winkel: Indien mogelijk gebruik een directorie BUITEN DE ROOT VAN DE WEBSITE</span>',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX' => 'Maximaal aantal downloads',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN' => 'Dit is het aantal maal een download kan gebeuren met dezelfde Download-ID, (voor 1 bestelling)',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE' => 'Verlooptijd Download',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN' => 'Dit zet de tijd <strong>in seconden</strong> gedurende dewelke de download mogelijk is voor de klant. 
  Deze tijd begint te lopen na de eerste download! Wanneer de tijd is verlopen dan wordt het download-ID uitgeschakelt.<br />Opmerking : 86400 sec. = 24 uur.',
	'PHPSHOP_COUPONS' => 'Kortingsbons',
	'PHPSHOP_COUPONS_ENABLE' => 'Kortingsbon Gebruik Aanzetten',
	'PHPSHOP_COUPONS_ENABLE_EXPLAIN' => 'Wanneer u deze optie aan zet, mogen klanten kortingbon nummers invullen om korting op hun bestelling mogelijk te maken.',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON' => 'PDF - knop',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN' => 'De PDF - knop aan- of uitzetten in de winkel',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER' => 'Moet akkoord gaan met de leveringsvoorwaarden bij elke bestelling?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN' => 'Aanvinken als U wenst dat de klant akkoord moet gaan met de leveringsvoorwaarden bij ELKE bestelling (voor de order geplaatst wordt).',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS' => 'Laat producten die niet op voorraad zijn zien',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN' => 'Wanneer aangevinkt, zullen producten die niet op voorraad zijn getoont worden in de winkel. Anders worden deze verborgen gehouden.',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE' => 'Winkel is offline?',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP' => 'Aangevinkt, zal de winkel een Offline Boodschap tonen',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG' => 'Offline Boodschap',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX' => 'Table Prefix voor de Winkel Tabellen',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP' => 'Standaard is dit <strong>vm</strong>',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP' => 'Toon Pagina Navigatie bovenaan de Product lijst?',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP' => 'Schakelt het tonen van de pagina navigatie bovenaan de product lijst (aan de Frontend van de winkel) aan of uit.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT' => 'Toon het aantal producten?',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP' => 'Toont het aantal prodcuten in een bepaalde categorie, bijvoorbeeld Categorie (4)',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING' => 'Dynamic Thumbnail Resizing aan?',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP' => 'Indien aangevinkt dan laat U het dynamische resizen toe van afbeeldingen. Dit betekent dat alle Thumbnail afbeeldingen geresized worden naar het formaat dat hieronder wordt ingegeven, dit door middel van de GD2 functies in PHP.         U kan nakijken of de GD2 functies beschibaar zijn op Uw website door te klikken op "System" -> "System Info" -> "PHP Info" -> gd.   De kwaliteit van de Thumbnail afbeelding is veel beter dan afbeldingen die geresized worden door de browser. De aangemaakte afbeeldoingen worden geplaatst in de folder /shop_image/prduct/resized. Indien er reeds een thumbnail is aangemaakt dan wordt er geen meer aangemaakt.',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH' => 'Breedte Thumbnail Afbeelding',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP' => 'De <strong>breedte</strong> van de geresizede Thumbnail Afbeelding.',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT' => 'Hoogte Thumbnail Afbeelding',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP' => 'De <strong>hoogte</strong> van de geresizede Thumbnail Afbeelding.',
	'PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION' => 'Selecteer tenminste een verzendingsmethode!',
	'PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION' => 'Prijs Configuratie',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL' => 'Ledengroep aan welke prijzen getoond moeten worden',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP' => 'De geselecteerde ledengroep en alle groepen erboven zijn in de mogelijkheid om de product prijzen te zien.',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX' => 'Toon "(inclusief XX% btw)" waar mogelijk?',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP' => 'Wanneer aangevinkt dan zien de gebruikers de tekst "(inclusief xx% btw)" wanneer de prijzen getoont worden inclusief btw',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL' => 'Toon het prijslabel voor verpakkingen?',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP' => 'Aangevinkt wordt het prijslabel bepaald uit de product eenheid en de verpakkingswaarde:<br/>
<strong>Prijs per Eenheid (10 stukken)</strong><br/>
Wanneer niet aangevinkt dan is de prijslabel zoals gewoonlijk <strong>Prijs: $xx.xx</strong>',
	'PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS' => 'meer Basis Instellingen',
	'PHPSHOP_ADMIN_CFG_CORE_SETTINGS' => 'Basis Instellingen',
	'PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES' => 'Frontend Features',
	'PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION' => 'BTW Configuratie',
	'PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS' => 'Gebruiker Registratie Settings',
	'PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION' => 'Gebruiker registratie toestaan?',
	'PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION' => 'Nieuwe gebruiker activatie nodig?',
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
	'VM_USER_FORM_CONTACTDETAILS_CHANGEBUTTON' => 'Change Contact Details'
); $VM_LANG->initModule( 'admin', $langvars );
?>