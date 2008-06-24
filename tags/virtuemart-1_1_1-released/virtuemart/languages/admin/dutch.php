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
	'PHPSHOP_USER_LIST_LBL' => 'Gebruikerslijst',
	'PHPSHOP_USER_LIST_USERNAME' => 'Gebruikersnaam',
	'PHPSHOP_USER_LIST_FULL_NAME' => 'Volledige naam',
	'PHPSHOP_USER_LIST_GROUP' => 'Groep',
	'PHPSHOP_USER_FORM_LBL' => 'Toevoegen/Update gebruiker informatie',
	'PHPSHOP_USER_FORM_PERMS' => 'Permissies',
	'PHPSHOP_USER_FORM_CUSTOMER_NUMBER' => 'Klantnummer / ID',
	'PHPSHOP_MODULE_LIST_LBL' => 'Modulelijst',
	'PHPSHOP_MODULE_LIST_NAME' => 'Modulenaam',
	'PHPSHOP_MODULE_LIST_PERMS' => 'Modulerechten',
	'PHPSHOP_MODULE_LIST_FUNCTIONS' => 'Functies',
	'PHPSHOP_MODULE_FORM_LBL' => 'Module informatie',
	'PHPSHOP_MODULE_FORM_MODULE_LABEL' => 'Module label (voor Topmenu)',
	'PHPSHOP_MODULE_FORM_NAME' => 'Modulenaam',
	'PHPSHOP_MODULE_FORM_PERMS' => 'Modulerechten',
	'PHPSHOP_MODULE_FORM_HEADER' => 'Module koptekst',
	'PHPSHOP_MODULE_FORM_FOOTER' => 'Module voettekst',
	'PHPSHOP_MODULE_FORM_MENU' => 'Module tonen in administratie menu?',
	'PHPSHOP_MODULE_FORM_ORDER' => 'Volgorde',
	'PHPSHOP_MODULE_FORM_DESCRIPTION' => 'Module omschrijving',
	'PHPSHOP_MODULE_FORM_LANGUAGE_CODE' => 'Taalcode',
	'PHPSHOP_MODULE_FORM_LANGUAGE_FILE' => 'Taalbestand',
	'PHPSHOP_FUNCTION_LIST_LBL' => 'Functie lijst',
	'PHPSHOP_FUNCTION_LIST_NAME' => 'Functie naam',
	'PHPSHOP_FUNCTION_LIST_CLASS' => 'Klasse naam',
	'PHPSHOP_FUNCTION_LIST_METHOD' => 'Klasse methode',
	'PHPSHOP_FUNCTION_LIST_PERMS' => 'Rechten',
	'PHPSHOP_FUNCTION_FORM_LBL' => 'Functie informatie',
	'PHPSHOP_FUNCTION_FORM_NAME' => 'Functienaam',
	'PHPSHOP_FUNCTION_FORM_CLASS' => 'Klassenaam',
	'PHPSHOP_FUNCTION_FORM_METHOD' => 'Klassemethode',
	'PHPSHOP_FUNCTION_FORM_PERMS' => 'Functierechten',
	'PHPSHOP_FUNCTION_FORM_DESCRIPTION' => 'Functiebeschrijving',
	'PHPSHOP_CURRENCY_LIST_LBL' => 'Valutalijst',
	'PHPSHOP_CURRENCY_LIST_NAME' => 'Valutanaam',
	'PHPSHOP_CURRENCY_LIST_CODE' => 'Valutacode',
	'PHPSHOP_COUNTRY_LIST_LBL' => 'Landenlijst',
	'PHPSHOP_COUNTRY_LIST_NAME' => 'Landnaam',
	'PHPSHOP_COUNTRY_LIST_3_CODE' => 'Landcode (3)',
	'PHPSHOP_COUNTRY_LIST_2_CODE' => 'Landcode (2)',
	'PHPSHOP_STATE_LIST_MNU' => 'Provincielijst',
	'PHPSHOP_STATE_LIST_LBL' => 'Provincielijst voor:',
	'PHPSHOP_STATE_LIST_ADD' => 'Provincie toevoegen/aanpassen',
	'PHPSHOP_STATE_LIST_NAME' => 'Provincienaam',
	'PHPSHOP_STATE_LIST_3_CODE' => 'Provinciecode (3)',
	'PHPSHOP_STATE_LIST_2_CODE' => 'Provinciecode (2)',
	'PHPSHOP_ADMIN_CFG_GLOBAL' => 'Globaal',
	'PHPSHOP_ADMIN_CFG_SITE' => 'Site',
	'PHPSHOP_ADMIN_CFG_SHIPPING' => 'Verzending',
	'PHPSHOP_ADMIN_CFG_CHECKOUT' => 'Afrekenen',
	'PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS' => 'Downloads',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE' => 'Gebruik alleen als catalogus',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN' => 'Met deze keuze schakelt u alle winkel functionaliteit uit.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES' => 'Toon prijzen',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN' => 'Optie om prijzen te tonen. Indien u de webwinkel als catalogus (zonder prijzen) wenst te gebruiken, dan moet u deze optie niet inschakelen.',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX' => 'Virtuele belasting',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN' => 'Dit bepaalt of er over artikelen met een gewicht van 0 belasting wordt geheven. Wijzig ps_checkout.php->calc_order_taxable() om dit aan te passen.',
	'PHPSHOP_ADMIN_CFG_TAX_MODE' => 'Belasting modus:',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP' => 'Gebaseerd op afleveradres',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR' => 'Gebaseerd op winkeladres',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN' => 'Dit bepaalt welk belastingtarief gekozen wordt:<br /><ul><li>de plaats waar de winkel is gevestigd (winkeladres)</li><br/><li>Het adres van de klant. (afleveradres)</li></ul>',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE' => 'Meerdere belastingtarieven gebruiken?',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN' => 'Gebruik deze optie, wanneer er artikelen zijn die in verschillende belastingtarieven vallen zoals boeken 6% en luxe goederen 19%.',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE' => 'Pas korting toe voor belasting/verzending?',
	'PHPSHOP_ADMIN_CFG_REVIEW' => 'Activeer recensie systeem',
	'PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN' => 'Indien geactiveerd, staat u uw klanten toe om producten te <strong>beoordelen</strong> door er <strong>recensies</strong>over te schrijven. <br /> Klanten kunnen over hun ervaringen met een produkt schrijven om deze te delen met andere klanten.<br />',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN' => 'Optie om korting af te trekken m.b.t. de gekozen betaalmethode VOOR (aangevinkt) of NA het berekenen van de belasting en verzendkosten.',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS' => 'Moet akkoord gaan met de algemene voorwaarden?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN' => 'Activeer als klanten akkoord moeten gaan met de algemene voorwaarden.',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK' => 'Voorraad controleren?',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN' => 'Optie om de voorraad te controleren als een klant een artikel aan het mandje toevoegd. Indien geactiveerd, kan een klant niet meer producten toevoegen aan het mandje dan er op voorraad zijn.',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE' => 'Wederverkopers activeren?',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN' => 'Dit laat toe wederverkopers te gebruiken in de frontend. Activeer dit alleen als je wederverkopers hebt toegevoegd in de backend',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT' => 'Order-mail formaat:',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT' => 'Tekst e-mail',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML' => 'HTML e-mail',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN' => 'Dit bepaalt hoe de bevestigings-emails worden uitgevoerd:<br /><ul><li>als simpele tekst e-mail</li><li>als een HTML e-mail met plaatjes.</li></ul>',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN' => 'Administratie via de winkelpagina voor niet-backend gebruikers?',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN' => 'Deze optie kan de Administratie via de voorpagina activeren voor gebruikers die winkeleigenaar zijn, maar geen toegang hebben tot de Joomla backend (b.v. Geregistreerd / Editor).',
	'PHPSHOP_ADMIN_CFG_URLSECURE' => 'SECUREURL',
	'PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN' => 'De beveiligde URL naar uw website. (https - met een slash op het einde!)',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE' => 'HOMEPAGE',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN' => 'Dit is de pagina die standaard geladen wordt.',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE' => 'ERRORPAGE',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN' => 'Dit is de standaardpagina voor foutmeldingen.',
	'PHPSHOP_ADMIN_CFG_DEBUG' => 'DEBUG ?',
	'PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN' => 'DEBUG? Activeert het debug proces. Dit zorgt ervoor dat de DEBUGPAGINA wordt weergegeven onderaan elke pagina. Dit is erg handig tijdens het ontwikkelen van de winkel aangezien het verschillende informatie laat zien zoals inhoud van het mandje, formulier waardes etc.',
	'PHPSHOP_ADMIN_CFG_FLYPAGE' => 'FLYPAGE',
	'PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN' => 'Dit is de standaardpagina voor het weergeven van product informatie.',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE' => 'Categorie sjabloon',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN' => 'Dit definieert de standaard categorie sjabloon voor het weergeven van producten in een categorie.<br /> Nieuwe sjablonen kunnen worden gecre�erd door het wijzigen van de bestaande sjablonen.<br />(deze bevinden zich in de directorie <strong>COMPONENTPATH/html/templates/</strong> en beginnen met browse_)',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW' => 'Standaard aantal producten in een rij',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN' => 'Dit definieert het standaard aantal producten in een rij. <br />Bijvoorbeeld: Als het aantal op 4 staat, dan laat het categorie sjabloon 4 producten per rij zien',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE' => '"geen afbeelding" afbeelding',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN' => 'Deze afbeelding wordt weergegeven als er geen afbeelding van een product beschikbaar is.',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION' => 'Toon voettekst',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN' => 'Toont een powered-by-VirtueMart voettekst afbeelding.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD' => 'Standaard verzendmodule met individueel geconfigureerde bedrijven en tarieven. <strong>AANBEVOLEN !</strong>',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE' => 'Zone verzendmodule landen versie 1.0',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE' => 'Schakel verzendmethode uit. Kies dit als u alleen goederen verkoopt die niet verscheept hoeven te worden.',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR' => 'Activeer de afrekenbalk',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN' => 'Activeer, indien de \'afreken-balk\' getoond moet worden aan de klant tijdens de afreken procedure ( 1 - 2 - 3 - 4 met afbeeldingen).',
	'PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS' => 'Kies uw winkel\'s afreken procedure',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS' => 'Downloads inschakelen',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN' => 'Kies deze optie om downloads in te schakelen. Alleen als u producten verkoopt die te downloaden zijn.',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS' => 'Download activeren',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN' => 'Selecteer de status die ervoor zorgt dat de klant het product kan downloaden en hier per email over ingelicht wordt.',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS' => 'Download deactiveren',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN' => 'Selecteer de status waarbij een klant <strong>niet</strong> kan downloaden.',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT' => 'Download pad',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN' => 'Het fysieke pad naar de bestanden waar de downloads staan (gevolgt door een slash op het einde!).<br>
        <span class="message">Voor de veiligheid van uw winkel: maak indien mogelijk gebruik van een map BUITEN DE ROOT VAN DE WEBSITE</span>',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX' => 'Maximaal aantal downloads',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN' => 'Dit is per bestelling het maximaal aantal keren dat een product gedownload kan worden, dit wordt bepaald aan de hand van het Download-ID',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE' => 'Verlooptijd Download',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN' => 'Dit stelt de tijd <strong>in seconden</strong> in, gedurende de download mogelijk is voor de klant. 
  Deze tijd begint te lopen na de eerste download! Wanneer de tijd is verlopen dan wordt het download-ID uitgeschakelt.<br />Opmerking : 86400 sec. = 24 uur.',
	'PHPSHOP_COUPONS' => 'Kortingsbonnen',
	'PHPSHOP_COUPONS_ENABLE' => 'Kortingsbonnen activeren',
	'PHPSHOP_COUPONS_ENABLE_EXPLAIN' => 'Wanneer u deze optie activeert, mogen klanten kortingsbonnen gebruiken (d.m.v. het invullen van een nummer) om korting op hun bestelling mogelijk te maken.',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON' => 'PDF - knop',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN' => 'De PDF - knop aan- of uitzetten in de winkel',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER' => 'Moet akkoord gaan met de leveringsvoorwaarden bij elke bestelling?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN' => 'Aanvinken als u wenst dat de klant akkoord moet gaan met de leveringsvoorwaarden bij ELKE bestelling (voor de order geplaatst wordt).',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS' => 'Geef producten weer, die niet op voorraad zijn',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN' => 'Wanneer aangevinkt, zullen producten die niet op voorraad zijn getoond worden in de winkel. Anders worden deze verborgen gehouden.',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE' => 'Winkel is offline?',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP' => 'Aangevinkt, zal de winkel onderstaand bericht tonen',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG' => 'Offline bericht',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX' => 'Tabel prefix voor de winkel tabellen',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP' => 'Standaard is dit <strong>vm</strong>',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP' => 'Toon pagina navigatie bovenaan de product lijst?',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP' => 'Schakelt het tonen van de pagina navigatie bovenaan de product lijst (aan de frontend van de winkel) aan of uit.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT' => 'Toon het aantal producten?',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP' => 'Toont het aantal producten in een bepaalde categorie, bijvoorbeeld "Categorie (4)"',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING' => 'Automatisch thumbnails aanmaken?',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP' => 'Indien aangevinkt, dan worden alle afbeeldingen verkleind (ook wel thumbnails genoemd) naar het formaat dat hieronder wordt ingegeven, dit door middel van de GD2 functies in PHP.         U kunt controleren of de GD2 functies beschibaar zijn op Uw website door te klikken op "System" -> "System Info" -> "PHP Info" -> gd.   De kwaliteit van de thumbnail afbeelding is veel beter dan afbeldingen die geresized worden door de browser. De aangemaakte afbeeldingen worden geplaatst in de folder /shop_image/prduct/resized. Indien er reeds een thumbnail is aangemaakt dan wordt er geen meer aangemaakt.',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH' => 'Breedte thumbnail',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP' => 'De <strong>breedte</strong> van de verkleinde afbeelding.',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT' => 'Hoogte thumbnail',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP' => 'De <strong>hoogte</strong> van de verkleinde afbeelding.',
	'PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION' => 'Selecteer tenminste ��n verzendmethode!',
	'PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION' => 'Prijs configuratie',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL' => 'Ledengroep aan welke prijzen getoond moeten worden',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP' => 'De geselecteerde ledengroep en alle groepen erboven kunnen de product prijzen te zien.',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX' => 'Toon "(inclusief XX% btw)" waar mogelijk?',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP' => 'Wanneer aangevinkt dan zien de gebruikers de tekst "(inclusief xx% btw)" wanneer de prijzen getoont worden inclusief btw',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL' => 'Toon het aantal per verpakking?',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP' => 'Aangevinkt wordt het aantal per eenheid getoont in het prijslabel:<br/>
<strong>Prijs per Eenheid (10 stuks)</strong><br/>
Wanneer niet aangevinkt dan is de prijslabel zoals gewoonlijk <strong>Prijs: $xx.xx</strong>',
	'PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS' => 'meer basisinstellingen',
	'PHPSHOP_ADMIN_CFG_CORE_SETTINGS' => 'basisinstellingen',
	'PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES' => 'Frontend instellingen',
	'PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION' => 'BTW configuratie',
	'PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS' => 'Gebruikersregistratie instellingen',
	'PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION' => 'Gebruikersregistratie toestaan?',
	'PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION' => 'Nieuwe gebruikersactivatie nodig?',
	'VM_FIELDMANAGER_NAME' => 'Naamveld',
	'VM_FIELDMANAGER_TITLE' => 'Titelveld',
	'VM_FIELDMANAGER_TYPE' => 'Veldtype',
	'VM_FIELDMANAGER_REQUIRED' => 'Benodigd',
	'VM_FIELDMANAGER_PUBLISHED' => 'gepubliceerd',
	'VM_FIELDMANAGER_SHOW_ON_REGISTRATION' => 'Geef weer in registratieformulier',
	'VM_FIELDMANAGER_SHOW_ON_ACCOUNT' => 'Geef weer in accountonderhoud',
	'VM_USERFIELD_FORM_LBL' => 'Wijzig of doe een toevoeging aan de gebruikersvelden',
	'VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL' => 'Standaard productrangschikking',
	'VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP' => 'Definieer via welke veld de producten standaard kunnen besteld worden op de browse pagina\'s',
	'VM_BROWSE_ORDERBY_FIELDS_LBL' => 'Beschikbare sorteervelden',
	'VM_BROWSE_ORDERBY_FIELDS_LBL_TIP' => 'Kies de sorteervelden voor de browse pagina. Ieder veld definieerd een bepaalde sorteer methode voor de product browse pagina. Wanneer u ze allemaal selecteerd, dan zal het Order-By-Form niet worden weergegeven.',
	'VM_GENERALLY_PREVENT_HTTPS' => 'Voorkom zoveel als mogelijk https connecties?',
	'VM_GENERALLY_PREVENT_HTTPS_TIP' => 'Indien aangevinkt, zullen de klanten doorverwezen worden naar <strong>http</strong> urls wanneer deze zich op pagina\'s bevinden waar het niet nodig is https te gebruiken.',
	'VM_MODULES_FORCE_HTTPS' => 'Winkelpagina\'s waarvoor het noodzakelijk is https te gebruiken',
	'VM_MODULES_FORCE_HTTPS_TIP' => 'Hier kunt u uit de lijst winkel core modules kiezen, waarvoor een https connectie moet gebruikt worden (hou Ctrl in om meerdere modules te kunnen selecteren).',
	'VM_SHOW_REMEMBER_ME_BOX' => 'Laat de "Herinner mij" checkbox zien bij het inloggen?',
	'VM_SHOW_REMEMBER_ME_BOX_TIP' => 'Wanneer aangevinkt, zal de klant de "herinner mij" checkbox zien bij het uitloggen. Niet aanbevolen wanneer er van gedeelde ssl gebruik gemaakt wordt, omdat de klant ervoor kan kiezen geen cookie te ontvangen -  de cookie is echter benodigd om de gebruiker op beide domeinen ingelogd te laten blijven.',
	'VM_ADMIN_CFG_REVIEW_MINIMUM_COMMENT_LENGTH' => 'Minimale lengte commentaar',
	'VM_ADMIN_CFG_REVIEW_MINIMUM_COMMENT_LENGTH_TIP' => 'Dit is het aantal leestekens welke minimaal moeten worden ingegeven voordat een klant de review kan toevoegen.',
	'VM_ADMIN_CFG_REVIEW_MAXIMUM_COMMENT_LENGTH' => 'Maximale lengte commentaar',
	'VM_ADMIN_CFG_REVIEW_MAXIMUM_COMMENT_LENGTH_TIP' => 'Dit is de maximale lengte van tekens die een klant kan ingegeven bij een review.
',
	'VM_ADMIN_SHOW_EMAILFRIEND' => 'Geef e-mail symbool weer?',
	'VM_ADMIN_SHOW_EMAILFRIEND_TIP' => 'Wanneer aangevinkt, zal er een email symbool weergegeven worden, waarmee de klant een email naar iemand kan sturen om hem/haar op de hoogte te brengen van het betreffende product.',
	'VM_ADMIN_SHOW_PRINTICON' => 'Geef print symbool weer?',
	'VM_ADMIN_SHOW_PRINTICON_TIP' => 'Wanneer aangevinkt, zal er een print symbool weergegeven worden, waarmee een nieuwe pagina wordt geopend zodat de klant deze kan uitprinten.',
	'VM_REVIEWS_AUTOPUBLISH' => 'Publiceeer automatisch reviews?',
	'VM_REVIEWS_AUTOPUBLISH_TIP' => 'Wanneer aangevinkt, zullen de reviews direct gepubliceerd worden. Indien niet aangevinkt, zal de administrator deze handmatig moeten goedkeuren/publiceren.',
	'VM_ADMIN_CFG_PROXY_SETTINGS' => 'Globale proxy instellingen',
	'VM_ADMIN_CFG_PROXY_URL' => 'URL van de proxy server',
	'VM_ADMIN_CFG_PROXY_URL_TIP' => 'Bijvoorbeeld: <strong>http://10.42.21.1</strong>.<br />
Laat leeg wanneer u niet zeker bent.</strong> De server zal gebruikt worden om verbindingen aan te gaan met het internet vanaf de winkel server (Bijvoorbeeld om verzendtarieven te importeren van UPS/USPS).',
	'VM_ADMIN_CFG_PROXY_PORT' => 'Proxy poort',
	'VM_ADMIN_CFG_PROXY_PORT_TIP' => 'De poort die gebruikt wordt voor communicatie met de proxy server (meestal <b>80</b> of <b>8080</b>).',
	'VM_ADMIN_CFG_PROXY_USER' => 'Proxy gebruikersnaam',
	'VM_ADMIN_CFG_PROXY_USER_TIP' => 'Wanneer de proxy server een inlog vereist vul dan hier uw gebruikersnaam in.',
	'VM_ADMIN_CFG_PROXY_PASS' => 'Proxy wachtwoord',
	'VM_ADMIN_CFG_PROXY_PASS_TIP' => 'Wanneer de proxy server een inlog vereist vul dan hier uw wachtwoord in.',
	'VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO' => 'Laat informatie zien betreffende de "Algemene leveringsvoorwaarden" op de order bevestigingspagina?',
	'VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP' => 'Webwinkeliers zijn bij wet verplicht om de klant te informeren over hun rechten en plichten en dienen deze duidelijk in hun leveringsvoorwaarden te omschrijven. Dit behoort dus in principe standaard ingeschakeld te staan.',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT' => 'Beknopte omschrijving leveringsvoorwaarden.',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP' => 'Deze tekst informeert uw klanten in beknopte vorm over uw leveringsvoorwaarden. Het wordt weergegeven op de laatste checkout pagina, direct boven de "bevestig bestelling" knop.',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK' => 'Link naar de lange versie van de leveringsvoorwaarden.',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP' => 'Maak een nieuw content item aan, met daarin uw leveringsvoorwaarden.
Nadien kunt u deze alhier selecteren.',
	'VM_SELECT_THEME' => 'Selecteer het thema voor uw webwinkel',
	'VM_SELECT_THEME_TIP' => 'Thema\'s geven u de mogelijkheid de layout (het aangezicht) te veranderen van uw webwinkel. <br />Wanneer alleen het standaard thema aanwezig is, dan heeft u nog geen andere thema\'s ge�nstalleerd.',
	'VM_CFG_CONTENT_PLUGINS_ENABLE' => 'Schakel content mambots / plugins in?',
	'VM_CFG_CONTENT_PLUGINS_ENABLE_TIP' => 'Wanneer aangevinkt, dan kunnen omschrijvingen binnen Virtuemart gedaan worden via de ge�nstalleerde mambots/plugins (zoals editors).',
	'VM_CFG_CURRENCY_MODULE' => 'Selecteer een wisselkoers module',
	'VM_CFG_CURRENCY_MODULE_TIP' => 'Hier kunt u een wisselkoers module activeren, om vervolgens via een wisselkoers server valuta te laten omrekenen naar een andere valuta.',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_EU' => 'Europese Unie modus',
	'VM_ADMIN_CFG_DOWNLOAD_KEEP_STOCKLEVEL' => 'Laat de productvoorraad ongewijzigd na een aankoop.',
	'VM_ADMIN_CFG_DOWNLOAD_KEEP_STOCKLEVEL_TIP' => 'Wanneer aangevinkt, zal de voorraad aan downloads ongewijzigd blijven nadat een klant een download heeft "aangekocht" (oftewel een onbeperkte voorraad).',
	'VM_USERGROUP_FORM_LBL' => 'Toevoegen/wijzigen van een gebruikersgroep',
	'VM_USERGROUP_NAME' => 'Gebruikersgroepsnaam',
	'VM_USERGROUP_LEVEL' => 'Gebruikersgroep level',
	'VM_USERGROUP_LEVEL_TIP' => 'Belangrijk! Een hoger nummer betekent <b>minder</b> permissies. De <b>admin</b> groep is <em>level 0</em>, winkel admin is level 250, gebruikers zijn level 500.',
	'VM_USERGROUP_LIST_LBL' => 'Gebruikersgroepslijst',
	'VM_ADMIN_CFG_COOKIE_CHECK' => 'Schakel cookie controle in?',
	'VM_ADMIN_CFG_COOKIE_CHECK_EXPLAIN' => 'Wanneer aangevinkt, zal VirtueMart controleren of de browser van een klant cookies accepteert. Dit is gebruikersvriendelijk, maar kan wel negatieve consequenties hebben op de zoekmachine-vriendelijkheid van uw webwinkel.',
	'VM_CFG_REGISTRATION_TYPE' => 'Gebruikersregistratie',
	'VM_CFG_REGISTRATION_TYPE_TIP' => 'Kies welke soort registratie u wenst voor uw winkel!<br />
<strong>Normale registratie</strong><br />
Dit is de standaard registratie, waar de klant een gebruikersnaam en wachtwoord moet kiezen <br />
<strong>Stille registratie</strong><br />
Stille registratie betekent dat de klant geen gebruikersnaam of wachtwoord hoeft te kiezen. Deze worden automatisch aangemaakt na het invullen van de adresgegevens bij de checkout en naar het opgegegeven emailadres gestuurd.
<br /><br />
<strong>Optionele registratie</strong><br />
Optionele registratie laat de klant zelf kiezen of deze een account wil cre�ren of niet. Wanneer de klant een account wil cre�eren, dan zal deze een gebruikersnaam en wachtwoord moeten kiezen.
<br /><br />
<strong>Geen registratie</strong><br />
Klanten kunnen en hoeven zich bij deze optie niet te registreren.',
	'VM_CFG_REGISTRATION_TYPE_NORMAL_REGISTRATION' => 'Normale account registratie',
	'VM_CFG_REGISTRATION_TYPE_SILENT_REGISTRATION' => 'Stille account registratie',
	'VM_CFG_REGISTRATION_TYPE_OPTIONAL_REGISTRATION' => 'Optionele account registratie',
	'VM_CFG_REGISTRATION_TYPE_NO_REGISTRATION' => 'Geen account registratie',
	'VM_ADMIN_CFG_FEED_CONFIGURATION' => 'Nieuwsbrief configuratie',
	'VM_ADMIN_CFG_FEED_ENABLE' => 'Schakel product nieuwsbrieven in',
	'VM_ADMIN_CFG_FEED_ENABLE_TIP' => 'Wanneer ingeschakeld, kunnen klanten zich abonneren op een nieuwsbrief over de nieuwste producten (in elke of een bepaalde categorie).',
	'VM_ADMIN_CFG_FEED_CACHE' => 'Nieuwsbrief cache instellingen',
	'VM_ADMIN_CFG_FEED_CACHE_ENABLE' => 'Schakel cache in?',
	'VM_ADMIN_CFG_FEED_CACHETIME' => 'Cache tijd (seconden)',
	'VM_ADMIN_CFG_FEED_CACHE_TIP' => 'Cache zorgt voor een snelle aflevering van de nieuwsbrieven en verminderd de druk op de server, omdat de nieuwsbrief slechts ��n keer wordt gemaakt en bewaart wordt in een bestand.',
	'VM_ADMIN_CFG_FEED_SHOWPRICES' => 'Voeg prijzen toe?',
	'VM_ADMIN_CFG_FEED_SHOWPRICES_TIP' => 'Wanneer aangevinkt, zullen er productprijzen worden toegevoegd aan de nieuwsbrief.',
	'VM_ADMIN_CFG_FEED_SHOWDESC' => 'Voeg productomschrijvingen toe?',
	'VM_ADMIN_CFG_FEED_SHOWDESC_TIP' => 'Wanneer aangevinkt, zullen de productomschrijvingen worden toegevoegd aan de nieuwsbrief',
	'VM_ADMIN_CFG_FEED_SHOWIMAGES' => 'Voeg productafbeeldingen toe?',
	'VM_ADMIN_CFG_FEED_SHOWIMAGES_TIP' => 'Wanneer aangevinkt, zullen er productafbeeldingen (thumbnails) worden toegevoegd aan de omschrijving.',
	'VM_ADMIN_CFG_FEED_DESCRIPTION_TYPE' => 'Productomschrijving',
	'VM_ADMIN_CFG_FEED_DESCRIPTION_TYPE_TIP' => 'Kies het type productomschrijving wat gebruikt dient te worden in de nieuwsbrief.',
	'VM_ADMIN_CFG_FEED_LIMITTEXT' => 'Beperk de omschrijving?',
	'VM_ADMIN_CFG_FEED_MAX_TEXT_LENGTH' => 'Maximale lengte van de omschrijving',
	'VM_ADMIN_CFG_MAX_TEXT_LENGTH_TIP' => 'Dit is de maximale lengte (in leestekens), van de productomschrijving van elk product item in de nieuwsbrief.',
	'VM_ADMIN_CFG_FEED_TITLE_TIP' => 'Titel van de nieuwsbrief (de placeholder {storename} bevat de naam van uw webwinkel)',
	'VM_ADMIN_CFG_FEED_TITLE_CATEGORIES_TIP' => 'Titel van een categorie in een nieuwsbrief (\'{catname}\' is de placeholder voor de naam van de categorie, {storename} geeft de naam van uw webwinkel weer)',
	'VM_ADMIN_CFG_FEED_TITLE' => 'Nieuwsbrief titel',
	'VM_ADMIN_CFG_FEED_TITLE_CATEGORIES' => 'Nieuwsbrief titels voor categori�n',
	'VM_ADMIN_SECURITY' => 'Beveiliging',
	'VM_ADMIN_SECURITY_SETTINGS' => 'Beveiligingsinstellingen',
	'VM_CFG_ENABLE_FEATURE' => 'Schakel deze optie in',
	'VM_CFG_CHECKOUT_SHOWSTEP_TIP' => 'Hier kunt u de bepaalde checkout onderdelen in- en uitschakelen of opnieuw rangschikken. U kunt meerdere checkout onderdelen op ��n pagina weergeven door ze hetzelfde onderdeelnummer te geven.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_FLEX' => 'Flexibele verzending. Verzendkosten worden gebaseerd op het eindbedrag van de bestelling. Beneden een aangegeven bedrag wordt er een vast tarief gehanteerd, erboven kan er een bepaald percentage ingegeven worden. Configuratie kan gedaan worden bij Virtuemart > winkel > verzendmodulen lijst > Flex',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_SHIPVALUE' => 'Verzending gebaseerd op de totaal bestelling. Vaste verzendkosten gebaseerd op de in de configuratie opgegeven waardes.',
	'VM_CFG_CHECKOUT_SHOWSTEPINCHECKOUT' => 'Laat zien bij stap: %s van het checkout proces.',
	'VM_ADMIN_ENCRYPTION_KEY' => 'Encryptie sleutel',
	'VM_ADMIN_ENCRYPTION_KEY_TIP' => 'De encryptie (versleuteling) wordt gebruikt om veilig gevoelige data op te vragen en op te slaan (zoals credit card informatie) in de database.',
	'VM_ADMIN_STORE_CREDITCARD_DATA' => 'Bewaar creditcard informatie?',
	'VM_ADMIN_STORE_CREDITCARD_DATA_TIP' => 'VirtueMart bewaart creditcard informatie van klanten versleuteld in de database. Dit wordt tevens uitgevoerd, wannneer de credit card informatie verder wordt afgehandeld door een externe server. <strong>Wanneer u niet handmatig de credit card informatie hoeft te verwerken nadat een bestelling is geplaatst, dan behoort u deze optie uit te schakelen.</strong>',
	'VM_USERFIELDS_URL_ONLY' => 'Alleen URL',
	'VM_USERFIELDS_HYPERTEXT_URL' => 'Hypertext en URL',
	'VM_FIELDS_TEXTFIELD' => 'Tekstveld',
	'VM_FIELDS_CHECKBOX_SINGLE' => 'Checkbox (Enkel)',
	'VM_FIELDS_CHECKBOX_MULTIPLE' => 'Checkbox (Meerdere)',
	'VM_FIELDS_DATE' => 'Datum',
	'VM_FIELDS_DROPDOWN_SINGLE' => 'Drop Down (Enkele selectie)',
	'VM_FIELDS_DROPDOWN_MULTIPLE' => 'Drop Down (Meervoudige selectie)',
	'VM_FIELDS_EMAIL' => 'E-mailadres',
	'VM_FIELDS_EUVATID' => 'BTW nummer',
	'VM_FIELDS_EDITORAREA' => 'Editor tekstveld',
	'VM_FIELDS_TEXTAREA' => 'Tekstveld',
	'VM_FIELDS_RADIOBUTTON' => 'Radio button',
	'VM_FIELDS_WEBADDRESS' => 'Domeinnaam',
	'VM_FIELDS_DELIMITER' => '=== Fieldset scheidingsteken ===',
	'VM_FIELDS_NEWSLETTER' => 'Nieuwsbrief abbonement',
	'VM_USERFIELDS_READONLY' => 'Alleen lezen',
	'VM_USERFIELDS_SIZE' => 'Veldgrootte',
	'VM_USERFIELDS_MAXLENGTH' => 'Maximale lengte',
	'VM_USERFIELDS_DESCRIPTION' => 'Omschrijving, veld-tip: text of HTML',
	'VM_USERFIELDS_COLUMNS' => 'Kolommen',
	'VM_USERFIELDS_ROWS' => 'Rijen',
	'VM_USERFIELDS_EUVATID_MOVESHOPPER' => 'Verplaats de klant naar de volgende kopersgroep na succesvolle validatie van het BTW nummer',
	'VM_USERFIELDS_ADDVALUES_TIP' => 'Gebruik de onderstaande tabel om nieuwe waardes toe te voegen.',
	'VM_ADMIN_CFG_DISPLAY' => 'Weergave',
	'VM_ADMIN_CFG_LAYOUT' => 'Opmaak',
	'VM_ADMIN_CFG_THEME_SETTINGS' => 'Thema instellingen',
	'VM_ADMIN_CFG_THEME_PARAMETERS' => 'Parameters',
	'VM_ADMIN_ENCRYPTION_FUNCTION' => 'Encryptie functie',
	'VM_ADMIN_ENCRYPTION_FUNCTION_TIP' => 'Hier kunt u de encryptie functie kiezen, welke gebruikt wordt om gevoelige informatie te versleutelen voordat deze in de database wordt opgeslagenon. AES_ENCRYPT is aanbevolen, omdat het een zeer hoge mate van veiligheid biedt. ENCODE biedt geen echte versleuteling.',
	'SAVE_PERMISSIONS' => 'Bewaar permissies',
	'VM_ADMIN_THEME_CFG_NOT_EXISTS' => 'Het configuratie bestand voor deze template bestaat niet en kan niet worden gecre�erd. Configuratie is niet mogelijk',
	'VM_ADMIN_THEME_NOT_EXISTS' => 'Het thema "{theme}" bestaat niet.',
	'VM_USERFIELDS_ADDVALUE' => 'Voeg een waarde toe',
	'VM_USERFIELDS_TITLE' => 'Titel',
	'VM_USERFIELDS_VALUE' => 'Waarde',
	'VM_USER_FORM_LASTVISIT_NEVER' => 'Nooit',
	'VM_USER_FORM_TAB_GENERALINFO' => 'Algemene gebruikers informatie',
	'VM_USER_FORM_LEGEND_USERDETAILS' => 'Gebruikers details',
	'VM_USER_FORM_LEGEND_PARAMETERS' => 'Parameters',
	'VM_USER_FORM_LEGEND_CONTACTINFO' => 'Contact informatie',
	'VM_USER_FORM_NAME' => 'Naam',
	'VM_USER_FORM_USERNAME' => 'Gebruikersnaam',
	'VM_USER_FORM_EMAIL' => 'E-mail',
	'VM_USER_FORM_NEWPASSWORD' => 'Nieuw wachtwoord',
	'VM_USER_FORM_VERIFYPASSWORD' => 'Bevestig wachtwoord',
	'VM_USER_FORM_GROUP' => 'Groep',
	'VM_USER_FORM_BLOCKUSER' => 'Blokkeer gebruiker',
	'VM_USER_FORM_RECEIVESYSTEMEMAILS' => 'Ontvang systeem emails',
	'VM_USER_FORM_REGISTERDATE' => 'Registreer Datum',
	'VM_USER_FORM_LASTVISITDATE' => 'Datum laatste bezoek',
	'VM_USER_FORM_NOCONTACTDETAILS_1' => 'Er zijn geen contact details voorhanden van deze gebruiker:',
	'VM_USER_FORM_NOCONTACTDETAILS_2' => 'Zie \'Componenten -> Contacten -> Contactpersoon beheer\' voor meer details.',
	'VM_USER_FORM_CONTACTDETAILS_NAME' => 'Naam',
	'VM_USER_FORM_CONTACTDETAILS_POSITION' => 'Positie',
	'VM_USER_FORM_CONTACTDETAILS_TELEPHONE' => 'Telefoon',
	'VM_USER_FORM_CONTACTDETAILS_FAX' => 'Fax',
	'VM_USER_FORM_CONTACTDETAILS_CHANGEBUTTON' => 'Verander contactinformatie',
	'VM_ADMIN_CFG_LOGFILE_HEADER' => 'Logbestand configuratie',
	'VM_ADMIN_CFG_LOGFILE_ENABLED' => 'Loggen inschakelen?',
	'VM_ADMIN_CFG_LOGFILE_ENABLED_EXPLAIN' => 'Indien uitgeschakeld, zal een "null" logger ingeschakeld worden zodat de vmFileLogger geactiveerd kan worden zonder foutmeldingen.',
	'VM_ADMIN_CFG_LOGFILE_NAME' => 'Naam logbestand',
	'VM_ADMIN_CFG_LOGFILE_NAME_EXPLAIN' => 'Pad naar logbestand. Moet bereikbaar en beschrijfbaar zijn.',
	'VM_ADMIN_CFG_LOGFILE_LEVEL' => 'Loglevel',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_EXPLAIN' => 'Log boodschappen boven deze drempel worden genegeerd.',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_TIP' => 'Tip - 8',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_DEBUG' => 'Foutopsporing - 7',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_INFO' => 'Informatie - 6',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_NOTICE' => 'Inlichten - 5',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_WARNING' => 'Waarschuwing - 4',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_ERR' => 'Fout - 3',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_CRIT' => 'Kritisch - 2',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_ALERT' => 'Aalarm - 1',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_EMERG' => 'Noodgeval - 0',
	'VM_ADMIN_CFG_LOGFILE_FORMAT' => 'Logbestand bestandsformaat',
	'VM_ADMIN_CFG_LOGFILE_FORMAT_EXPLAIN' => 'Bestandsformaat voor individuele logvelden.',
	'VM_ADMIN_CFG_LOGFILE_FORMAT_EXPLAIN_EXTRA' => 'Logbestanden kunnen de navolgende velden bevatten: %{timestamp} %{ident} [%{priority}] [%{remoteip}] [%{username}] %{message} %{vmsessionid}.',
	'VM_ADMIN_CFG_LOGFILE_ERROR' => 'Kan het logbestand niet aanroepen of cre�ren. Neem alstublieft contact op met de systeembeheerder.',
	'VM_ADMIN_CFG_DEBUG_MODE_ENABLED' => 'DEBUG modus inschakelen?',
	'VM_ADMIN_CFG_DEBUG_IP_ENABLED' => 'Enkel IP adres inschakelen?',
	'VM_ADMIN_CFG_DEBUG_IP_ENABLED_EXPLAIN' => 'Wanneer u deze optie inschakeld dan wordt het debug proces alleen aan een specifiek IP adres weergegeven?',
	'VM_ADMIN_CFG_DEBUG_IP_ADDRESS' => 'IP adres',
	'VM_ADMIN_CFG_DEBUG_IP_ADDRESS_EXPLAIN' => 'Vul hier het IP adres in waaraan het debug proces aan moet worden weergegeven, buiten dit adres is voor niemand anders het debug proces zichtbaar.',
	'VM_FIELDMANAGER_SHOW_ON_SHIPPING' => 'Getoond in verzend formulier',
	'VM_USER_NOSHIPPINGADDR' => 'Geen verzend adressen',
	'VM_UPDATE_CHECK_LBL' => 'VirtueMart update controle',
	'VM_UPDATE_CHECK_VERSION_INSTALLED' => 'VirtueMart versie geinstalleerd',
	'VM_UPDATE_CHECK_LATEST_VERSION' => 'Laatste VirtueMart versie',
	'VM_UPDATE_CHECK_CHECKNOW' => 'Controleer nu!',
	'VM_UPDATE_CHECK_DLUPDATE' => 'Download update',
	'VM_UPDATE_CHECK_CHECKING' => 'Aan het controleren...',
	'VM_UPDATE_CHECK_CHECK' => 'Controleer',
	'VM_UPDATE_NOTDOWNLOADED' => 'Het update pakket kan niet gedownload worden.',
	'VM_UPDATE_PREVIEW_LBL' => 'VirtueMart update preview',
	'VM_UPDATE_WARNING_TITLE' => 'Algemene waarschuwing',
	'VM_UPDATE_WARNING_TEXT' => 'Het installeren van een update voor VirtueMart d.m.v. een patch, kan schade aan uw website toebrengen
wanneer u zelf al enige Virtuemart bestanden heeft gemodificeerd. De patch zal alle onderstaande bestanden volledig overschrijven - en dus niet alleen de veranderde regels toevoegen. Wanneer u zelf al enige veranderingen heeft aangebracht aan deze bestanden, kan het overschrijven hiervan leiden tot foutmeldingen.',
	'VM_UPDATE_PATCH_DETAILS' => 'Patch details',
	'VM_UPDATE_PATCH_DESCRIPTION' => 'Omschrijving',
	'VM_UPDATE_PATCH_DATE' => 'Release Datum',
	'VM_UPDATE_PATCH_FILESTOUPDATE' => 'Bestanden die worden geupdate',
	'VM_UPDATE_PATCH_STATUS' => 'Status',
	'VM_UPDATE_PATCH_WRITABLE' => 'Beschrijfbaar',
	'VM_UPDATE_PATCH_UNWRITABLE' => 'Bestand/map niet beschrijfbaar',
	'VM_UPDATE_PATCH_QUERYTOEXEC' => 'Queries welke op de database worden uitgevoerd',
	'VM_UPDATE_PATCH_CONFIRM_TEXT' => 'Ik heb de <a href="#warning">waarschuwing</a> gelezen en ik wil nu de patch toepassen.',
	'VM_UPDATE_PATCH_APPLY' => 'Pas de patch nu toe',
	'VM_UPDATE_PATCH_ERR_UNWRITABLE' => 'Niet al de bestanden/mappen die geupdate moeten worden, zijn beschrijfbaar. Stel alstublieft eerst de juiste bestandsrechten in.',
	'VM_UPDATE_PATCH_PLEASEMARK' => 'Vink alstulieft eerst de checkbox aan voordat u de patch toepast.',
	'VM_UPDATE_RESULT_TITLE' => 'Huidig ge�nstalleerde versie',
	'VM_FIELDS_CAPTCHA' => 'Captcha veld (maakt gebruik van com_securityimages)',
	'VM_FIELDS_AGEVERIFICATION' => 'Leeftijd verificatie (datum selectie velden)',
	'VM_FIELDS_AGEVERIFICATION_MINIMUM' => 'Specifeer de minimum leeftijd'
); $VM_LANG->initModule( 'admin', $langvars );
?>