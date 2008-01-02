<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : hungarian_formal.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'PHPSHOP_USER_LIST_LBL' => 'Felhaszn�l� lista',
	'PHPSHOP_USER_LIST_USERNAME' => 'Felhaszn�l�n�v',
	'PHPSHOP_USER_LIST_FULL_NAME' => 'Teljes n�v',
	'PHPSHOP_USER_LIST_GROUP' => 'Csoport',
	'PHPSHOP_USER_FORM_LBL' => 'Felhaszn�l�i adatok hozz�ad�sa/friss�t�se',
	'PHPSHOP_USER_FORM_PERMS' => 'Jogos�tv�nyok',
	'PHPSHOP_USER_FORM_CUSTOMER_NUMBER' => 'Customer Number / ID',
	'PHPSHOP_MODULE_LIST_LBL' => 'Modul lista',
	'PHPSHOP_MODULE_LIST_NAME' => 'Modul neve',
	'PHPSHOP_MODULE_LIST_PERMS' => 'Modul jogos�tv�nyok',
	'PHPSHOP_MODULE_LIST_FUNCTIONS' => 'Funkci�k',
	'PHPSHOP_MODULE_FORM_LBL' => 'Modul inform�ci�k',
	'PHPSHOP_MODULE_FORM_MODULE_LABEL' => 'Modul cimke (a f�men�ben)',
	'PHPSHOP_MODULE_FORM_NAME' => 'Modul neve',
	'PHPSHOP_MODULE_FORM_PERMS' => 'Modul jogos�tv�nyok',
	'PHPSHOP_MODULE_FORM_HEADER' => 'Modul fejl�c',
	'PHPSHOP_MODULE_FORM_FOOTER' => 'Modul l�bl�c',
	'PHPSHOP_MODULE_FORM_MENU' => 'Mutassam a modult az Admin men�ben?',
	'PHPSHOP_MODULE_FORM_ORDER' => 'Megjelen�t�si sorrend',
	'PHPSHOP_MODULE_FORM_DESCRIPTION' => 'Modul le�r�s',
	'PHPSHOP_MODULE_FORM_LANGUAGE_CODE' => 'Nyelvk�d',
	'PHPSHOP_MODULE_FORM_LANGUAGE_FILE' => '',
	'PHPSHOP_FUNCTION_LIST_LBL' => 'Funkci� lista',
	'PHPSHOP_FUNCTION_LIST_NAME' => 'Funkci� neve',
	'PHPSHOP_FUNCTION_LIST_CLASS' => 'Class N�v',
	'PHPSHOP_FUNCTION_LIST_METHOD' => 'Class Elj�r�s',
	'PHPSHOP_FUNCTION_LIST_PERMS' => 'Jogos�tv�nyok',
	'PHPSHOP_FUNCTION_FORM_LBL' => 'Funkci� inform�ci�k',
	'PHPSHOP_FUNCTION_FORM_NAME' => 'Funkci� neve',
	'PHPSHOP_FUNCTION_FORM_CLASS' => 'Class N�v',
	'PHPSHOP_FUNCTION_FORM_METHOD' => 'Class Elj�r�s',
	'PHPSHOP_FUNCTION_FORM_PERMS' => 'Funkci� jogos�tv�nyok',
	'PHPSHOP_FUNCTION_FORM_DESCRIPTION' => 'Funkci� le�r�s',
	'PHPSHOP_CURRENCY_LIST_LBL' => 'P�nznem lista',
	'PHPSHOP_CURRENCY_LIST_NAME' => 'P�nznem neve',
	'PHPSHOP_CURRENCY_LIST_CODE' => 'P�nznem k�dja',
	'PHPSHOP_COUNTRY_LIST_LBL' => 'Orsz�g lista',
	'PHPSHOP_COUNTRY_LIST_NAME' => 'Orsz�g neve',
	'PHPSHOP_COUNTRY_LIST_3_CODE' => 'Orsz�gk�d (3 bet�s)',
	'PHPSHOP_COUNTRY_LIST_2_CODE' => 'Orsz�gk�d (2 bet�s)',
	'PHPSHOP_STATE_LIST_MNU' => 'List State',
	'PHPSHOP_STATE_LIST_LBL' => 'State List for: ',
	'PHPSHOP_STATE_LIST_ADD' => 'Add/Update a State',
	'PHPSHOP_STATE_LIST_NAME' => 'State Name',
	'PHPSHOP_STATE_LIST_3_CODE' => 'State Code (3)',
	'PHPSHOP_STATE_LIST_2_CODE' => 'State Code (2)',
	'PHPSHOP_ADMIN_CFG_GLOBAL' => '�ltal�nos',
	'PHPSHOP_ADMIN_CFG_SITE' => 'Honlap',
	'PHPSHOP_ADMIN_CFG_SHIPPING' => 'Sz�ll�t�s',
	'PHPSHOP_ADMIN_CFG_CHECKOUT' => 'Kijelentkez�s',
	'PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS' => 'Let�lt�sek',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE' => 'Csak katal�gusk�nt haszn�l',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN' => 'Ha kijel�li, letilt minden bev�s�rl�-kos�r funkci�t.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES' => '�rakat mutat',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Ad�val egy�tt mutassa az �rakat?',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => '�ll�tsa be, hogy a v�s�rl� az �rakat ad�val egy�tt vagy ad� n�lk�l l�ssa.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN' => 'Jel�lje be, hogy mutassa az �rakat. Ha katal�gusk�nt haszn�lj�k, egyesek nem szeretik az �rakat megjelen�teni a honlapon.',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX' => 'Virtu�lis ad�',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN' => 'Ez adja meg, hogy a 0 s�ly�k�nt szerepl� t�telekre sz�m�tson-e sz�ll�t�si k�lts�get vagy nem. M�dos�tsa a  ps_checkout.php->calc_order_taxable()-t, hogy szem�lyre szabja ezt.',
	'PHPSHOP_ADMIN_CFG_TAX_MODE' => 'Ad�z�si elj�r�s:',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP' => 'A sz�ll�t�si c�m alapj�n',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR' => 'Az elad� c�me alapj�n',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN' => 'Ez adja meg, hogy melyik ad�kulcs lesz figyelembe v�ve az ad�sz�m�t�sn�l:<br />
                                                <ul><li>az �zlettulajdonos sz�khelye szerint �rv�nyes �llami/ter�leti ad�kulcs</li><br/>
                                                <li>vagy a v�s�rl� otthona szerint �rv�nyes �llami/ter�leti ad�kulcs.</li></ul>',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE' => 'Megengedi t�bb ad�kulcs haszn�lat�t?',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN' => 'Jel�lje be, ha �nek olyan term�kei is vannak, amelyekhez k�l�nb�z� ad�kulcsok tartoznak (pl. 9% a k�nyvek, 19% az egy�b term�kek sz�m�ra)',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE' => 'A kifizet�si kedvezm�nyeket vegye-e figyelembe az ad�k �s a sz�ll�t�si illet�kek kisz�m�t�sa el�tt?',
	'PHPSHOP_ADMIN_CFG_REVIEW' => 'Megengedi a Fogyaszt�i szemle/�rt�kel�s rendszer haszn�lat�t',
	'PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN' => 'Ha enged�lyezett, �n megengedi a v�s�rl�knak, hogy <strong>�rt�kelj�k a term�keket</strong> �s <strong>szeml�t �rjanak</strong> r�luk. <br />
                                                                                �gy a v�s�rl�k le�rhatj�k a  tapasztalataikat a term�kekkel kapcsolatban m�s v�s�rl�k sz�m�ra.<br />',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN' => '�ll�tsd be a jelz�bitet (flag), hogy az �rengedm�nyt/kedvezm�nyt az ad�k �s sz�ll�t�si illet�kek kisz�m�t�sa el�tt vagy ut�n vonjam le az �rb�l.',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS' => 'El kell fogadni a <strong>Szolg�ltat�si felt�telek</strong>et?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN' => 'Jel�lje be, ha azt akarja, hogy a v�s�rl�knak k�telez� m�don el kell fogadniuk a  szolg�ltat�si felt�teleket a regisztr�l�s el�tt.',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK' => 'Ellen�rzi a k�szletet?',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN' => 'Be�ll�tja, hogy ellen�rizze-e a k�szleten l�v� term�kek sz�m�t, amikor a v�s�rl� beteszi a term�ket a bev�s�rl�kos�rba. Ha be van �ll�tva, nem engedi meg a v�s�rl�nak, hogy egy term�kb�l t�bb darabot tegyen a bev�s�rl�-kosar�ba, mint ah�ny t�nylegesen k�szleten van.',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE' => 'Megengedi a <strong>Csatlakozott c�g</strong> programot?',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN' => 'Megengedi a csatlakozott c�gek k�vet�s�t a web�ruh�z honlapj�n. Engedje meg, ha az adminisztr�tori panelben m�r hozz�adott csatlakozott c�geket.',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT' => 'Megrendel�-lev�l form�tum:',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT' => 'Sz�veges e-mail',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML' => 'HTML e-mail',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN' => 'Meghat�rozza, hogyan legyen a megrendel�s visszaigazol�si e-mail be�ll�tva:<br />
                                                                                        <ul><li>mint egy sima text e-mail</li>
                                                                                        <li>vagy mint egy html e-mail k�pekkel.</li></ul>',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN' => 'Megengedi-e a honlapr�l t�rt�n� adminisztr�ci�t azon felhaszn�l�k sz�m�ra, akiknek nincs joguk az Adminisztr�ci�s panel el�r�s�re?',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN' => 'Ezzel a be�ll�t�ssal megengedi a honlapr�l t�rt�n� adminisztr�ci�t azon felhaszn�l�k sz�m�ra, akiknek nincs joguk az Adminisztr�ci�s panel k�zvetlen el�r�s�re, de phpShop adminisztr�ci�s jogaik vannak (pl. Regisztr�lt/Szerkeszt� besorol�suk van).',
	'PHPSHOP_ADMIN_CFG_URLSECURE' => 'SECUREURL',
	'PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN' => 'A honlapja biztons�gos el�r�si URL-je. (https - a v�g�n a lez�r� /-el!)',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE' => 'HOMEPAGE',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN' => 'Ez az alap�rtelmezett oldal.',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE' => 'ERRORPAGE',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN' => 'Ez az alap�rtelmezett hiba�zenet-oldal.',
	'PHPSHOP_ADMIN_CFG_DEBUG' => 'DEBUG ?',
	'PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN' => 'DEBUG ? Bekapcsolja a nyomk�vet�si kimenetet. Az opci� megjelen�ti a nyomk�vet�si/hibaelh�r�t�si inform�ci�kat (DEBUGPAGE) minden megjelen�tett oldal alj�n. Nagyon hasznos a fejleszt�s sor�n, ugyanis megmutatja a bev�s�rl�kos�r tartalm�t, az �rlap-mez�ket, stb.',
	'PHPSHOP_ADMIN_CFG_FLYPAGE' => 'FLYPAGE',
	'PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN' => 'Ez az alap�rtelmezett term�k-le�r� oldal.',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE' => 'Kateg�ria st�luslap',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN' => 'Meghat�rozza egy bizonyos kateg�ri�ba tartoz� term�kek megjelen�t�s�re haszn�land� alap�rtelmezett kateg�ria st�luslapot.<br />
                                                                                                      �n l�trehozhat �j st�luslapokat a megl�v�k testreszab�s�val <br />
                                                                                                      (amelyek ebben a k�nyvt�rban tal�lhat�k <strong>COMPONENTPATH/html/templates/</strong> �s a nev�k "browse_"-vel kezd�dik)',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW' => 'Az egy sorban mutatott term�kek alap�rtelmezett sz�ma',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN' => 'Megadja a soronk�nt megjelen�tend� term�kek sz�m�t. <br />
                                                                                                      P�ld�ul: Ha �n 4-et �r be, a Kateg�ria st�luslap 4 term�ket mutat soronk�nt',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE' => '"no image" image',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN' => 'Ez a k�p lesz mutatva amikor nem �ll rendelkez�sre k�pe a term�kr�l.',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION' => 'Mutassam a l�bl�cben a "powered by mambo-phpShop"  �zenetet?',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN' => 'A l�bl�cben megjelen�ti a "powered by mambo-phpShop"  �zenetet.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD' => 'Standard Sz�ll�t�si modul  egy�nileg konfigur�lt sz�ll�tm�nyoz�kkal �s d�jt�telekkel. <strong>AJ�NLOTT!</strong>',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE' => '  	Zon�lis sz�ll�t�s Orsz�g-modul 1.0 Verzi�<br />
                                                                                                            Ha ezzel a modullal kapcsolatban t�bb inform�ci�ra van sz�ks�ge, k�rem l�togasson el a <a href="http://ZephWare.com">http://ZephWare.com</a> c�mre<br />
                                                                                                            a r�szletek�rt l�pjen kapcsolatba a <a href="mailto:zephware@devcompany.com">ZephWare.com</a>-mal<br /> Jel�lje be, hogy lehet�v� tegye a zon�lis sz�ll�t�s modul haszn�lat�t',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE' => 'Letiltja a Sz�ll�t�si elj�r�s kiv�laszt�s�t. V�lassza ki, ha a v�s�rl�i let�lthet� term�keket v�s�rolnak, amelyeket nem kell post�zni.',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR' => 'Megengedi a Kassza elj�r�s k�psor (\\\'checkout-bar\\\') megjelen�t�s�t',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN' => 'Jel�lje be, ha �hajtja a kassza elj�r�s k�psor (\\\'checkout-bar\\\') megjelen�t�s�t a megrendel�s v�gleges�t�se (kassza m�veletsor) alatt ( 1 - 2 - 3 - 4 grafika).',
	'PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS' => 'V�lassza ki az �zlete kassza-elj�r�s�t',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS' => 'Lehet�v� teszi a let�lt�st',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN' => 'Jel�lje be, ha enged�lyezni akarja a let�lt�seket. Csak ha let�lthet� javakat �rul.',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS' => 'Az a megrendel�s-st�tus, amely megengedi a let�lt�st',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN' => 'V�lassza ki azt a megrendel�s st�tust, amely eset�ben a vev� e-mail �rtes�t�st kap.',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS' => 'Az a megrendel�s-st�tus, amely megtiltja a let�lt�st',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN' => 'Be�ll�tja azt a megrendel�s st�tust, amelyn�l a let�lt�s a vev� sz�m�ra meg van tiltva.',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT' => 'DOWNLOADROOT',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN' => 'A let�lthet� f�jlok t�nyleges el�r�si �tvonala. (a v�g�n a lez�r� /-el!)<br>
        <span class="message">A saj�t �s az �zlet biztons�ga �rdek�ben: Ha van r� lehet�s�ge, k�rem haszn�ljon egy, a WEBROOT k�nyvt�ron k�v�li k�nyvt�rt</span>',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX' => 'Let�lt�s maximuma',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN' => 'Be�ll�tja az egy let�lt�si ID-vel enged�lyezett let�lt�sek sz�m�t, (egy megrendel�s sz�m�ra)',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE' => 'Let�lt�si hat�rid�',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN' => 'Be�ll�tja a let�lt�si id�intervallumot <strong>m�sodpercekben</strong> amelyben  a let�lt�s enged�lyezve van a vev� sz�m�ra. Az id�intervallum az els� let�lt�ssel kezd�dik! Amikor a megengedett id� lej�r, a let�lt�si ID le lesz tiltva.<br />Megjegyz�s : 86400s=24h.',
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