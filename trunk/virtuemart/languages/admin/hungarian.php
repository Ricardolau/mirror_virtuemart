<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : hungarian.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'CHARSET' => 'UTF-8',
	'PHPSHOP_USER_LIST_LBL' => 'Felhasználó lista',
	'PHPSHOP_USER_LIST_USERNAME' => 'Felhasználónév',
	'PHPSHOP_USER_LIST_FULL_NAME' => 'Teljes név',
	'PHPSHOP_USER_LIST_GROUP' => 'Csoport',
	'PHPSHOP_USER_FORM_LBL' => 'Felhasználói adatok hozzáadása/frissítése',
	'PHPSHOP_USER_FORM_PERMS' => 'Jogosítványok',
	'PHPSHOP_USER_FORM_CUSTOMER_NUMBER' => 'Ügyfél szám/ ID',
	'PHPSHOP_MODULE_LIST_LBL' => 'Modulok lista',
	'PHPSHOP_MODULE_LIST_NAME' => 'Modul neve',
	'PHPSHOP_MODULE_LIST_PERMS' => 'Modul jogosítványok',
	'PHPSHOP_MODULE_LIST_FUNCTIONS' => 'Funkciók',
	'PHPSHOP_MODULE_FORM_LBL' => 'Modul információk',
	'PHPSHOP_MODULE_FORM_MODULE_LABEL' => 'Modul cimke (a Topmenüben)',
	'PHPSHOP_MODULE_FORM_NAME' => 'Modul neve',
	'PHPSHOP_MODULE_FORM_PERMS' => 'Modul jogosítványok',
	'PHPSHOP_MODULE_FORM_HEADER' => 'Modul fejléc',
	'PHPSHOP_MODULE_FORM_FOOTER' => 'Modul lábléc',
	'PHPSHOP_MODULE_FORM_MENU' => 'Mutassam a modult az Admin menüben?',
	'PHPSHOP_MODULE_FORM_ORDER' => 'Megjelenítési sorrend',
	'PHPSHOP_MODULE_FORM_DESCRIPTION' => 'Modul leírás',
	'PHPSHOP_MODULE_FORM_LANGUAGE_CODE' => 'Nyelvkód',
	'PHPSHOP_MODULE_FORM_LANGUAGE_FILE' => 'Language File',
	'PHPSHOP_FUNCTION_LIST_LBL' => 'Funkció lista',
	'PHPSHOP_FUNCTION_LIST_NAME' => 'Funkció neve',
	'PHPSHOP_FUNCTION_LIST_CLASS' => 'Class Név',
	'PHPSHOP_FUNCTION_LIST_METHOD' => 'Class Eljárás',
	'PHPSHOP_FUNCTION_LIST_PERMS' => 'Jogosítványok',
	'PHPSHOP_FUNCTION_FORM_LBL' => 'Funkció információk',
	'PHPSHOP_FUNCTION_FORM_NAME' => 'Funkció neve',
	'PHPSHOP_FUNCTION_FORM_CLASS' => 'Class Név',
	'PHPSHOP_FUNCTION_FORM_METHOD' => 'Class Eljárás',
	'PHPSHOP_FUNCTION_FORM_PERMS' => 'Funkció jogosítványok',
	'PHPSHOP_FUNCTION_FORM_DESCRIPTION' => 'Funkció leírás',
	'PHPSHOP_CURRENCY_LIST_LBL' => 'Pénznem-lista',
	'PHPSHOP_CURRENCY_LIST_NAME' => 'Pénznem neve',
	'PHPSHOP_CURRENCY_LIST_CODE' => 'Pénznem kódja',
	'PHPSHOP_COUNTRY_LIST_LBL' => 'Ország lista',
	'PHPSHOP_COUNTRY_LIST_NAME' => 'Ország neve',
	'PHPSHOP_COUNTRY_LIST_3_CODE' => 'Országkód (3)',
	'PHPSHOP_COUNTRY_LIST_2_CODE' => 'Országkód (2)',
	'PHPSHOP_STATE_LIST_MNU' => 'Listázás: Államok',
	'PHPSHOP_STATE_LIST_LBL' => 'Állam lista: ',
	'PHPSHOP_STATE_LIST_ADD' => 'Hozzáad/frissít egy államot',
	'PHPSHOP_STATE_LIST_NAME' => 'Állam név',
	'PHPSHOP_STATE_LIST_3_CODE' => 'Állam kód (3)',
	'PHPSHOP_STATE_LIST_2_CODE' => 'Állam kód (2)',
	'PHPSHOP_ADMIN_CFG_GLOBAL' => 'Általános',
	'PHPSHOP_ADMIN_CFG_SITE' => 'Honlap',
	'PHPSHOP_ADMIN_CFG_SHIPPING' => 'Szállítás',
	'PHPSHOP_ADMIN_CFG_CHECKOUT' => 'Kassza',
	'PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS' => 'Letöltések',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE' => 'Csak katalógusként használ',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN' => 'Ha kijelöli, letilt minden bevásárló-kosár funkciót.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES' => 'Árakat mutat',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN' => 'Jelölje be, hogy mutassa az árakat. Ha katalógusként akarod használni, akkor lehetoség van az árak elrejtésére.',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX' => 'Virtuális adó',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN' => 'Ez adja meg, hogy a 0 súlyúként szereplo tételekre számítson-e szállítási költséget vagy nem. Módosítsa a  ps_checkout.php->calc_order_taxable()-t, hogy személyre szabja ezt.',
	'PHPSHOP_ADMIN_CFG_TAX_MODE' => 'Adózási eljárás:',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP' => 'A szállítási cím alapján',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR' => 'Az eladó címe alapján',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN' => 'Ez adja meg, hogy melyik adókulcs lesz figyelembe véve az adószámításnál:<br />
                                                <ul><li>az üzlettulajdonos székhelye szerint érvényes állami/területi adókulcs</li><br/>

                                                <li>vagy a vásárló otthona szerint érvényes állami/területi adókulcs.</li></ul>',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE' => 'Megengedi több adókulcs használatát?',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN' => 'Jelölje be, ha ön olyan termékei is vannak, amelyekhez különbözo adókulcsok tartoznak (pl. 9% a könyvek, 19% az egyéb számára)',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE' => 'A kifizetési kedvezményeket vegye-e figyelembe az adók és a szállítási illetékek kiszámítása elott?',
	'PHPSHOP_ADMIN_CFG_REVIEW' => 'Megengedi a Fogyasztói szemle/Értékelés rendszer használatát',
	'PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN' => 'Ha engedélyezett, ön megengedi a vásárlóknak, hogy <strong>értékeljék a termékeket</strong> és <strong>szemlét írjanak</strong>róluk. <br />
                                                                                Így a vásárlók leírhatják a  tapasztalataikat a termékekkel kapcsolatban más vásárlók számára.<br />',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN' => 'Állítsd be a jelzobitet (flag), hogy az árengedményt/kedvezményt az adók és szállítási illetékek kiszámítása elott vagy után vonjam le az árból.',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS' => 'El kell fogadni a Szolgáltatási feltételeket?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN' => 'Jelölje be, ha azt akarja, hogy a vásárlóknak kötelezo módon el kell fogadniuk a  szolgáltatási feltételeket a regisztrálás elott.',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK' => 'Ellenorzi a készletet?',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN' => 'Beállítja, hogy ellenorizze-e a készleten lévo termékek számát, amikor a vásárló beteszi a terméket a bevásárlókosárba.. Ha be van állítva, nem engedi meg a vásárlónak, hogy egy termékbol több darabot tegyen a bevásárló-kosarába, mint ahány ténylegesen készleten van.',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE' => 'Megengedi a Csatlakozott cég Programot?',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN' => 'Megengedi a csatlakozott cégek követését a webáruház honlapján. Engedje meg, ha az adminisztrátori panelben már hozzáadott csatlakozott cégeket.',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT' => 'Megrendelo-levél formátum:',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT' => 'Szöveg posta',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML' => 'HTML e-mail',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN' => 'Meghatározza, hogyan legyen a megrendelés visszaigazolási e-mail beállítva:<br />
                                                                                        <ul><li>mint egy sima text e-mail</li>
                                                                                        <li>vagy mint egy html e-mail képekkel.</li></ul>',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN' => 'Megengedi-e a honlapról történo adminisztrációt azon felhasználók számára, akiknek nincs joguk az Adminisztrációs panel elérésére?',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN' => 'Ezzel a beállítással megengedi a honlapról történo adminisztrációt azon felhasználók számára, akiknek nincs joguk az Adminisztrációs panel közvetlen elérésére, de adminisztrációs jogaik vannak (pl. Regisztrált/ Szerkeszto besorolásuk van).',
	'PHPSHOP_ADMIN_CFG_URLSECURE' => 'SECUREURL',
	'PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN' => 'A honlapja biztonságos elérési URL-je. (https - a végén a lezáró /-el!)',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE' => 'HOMEPAGE',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN' => 'Ez az alapértelmezett oldal.',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE' => 'ERRORPAGE',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN' => 'Ez az alapértelmezett hibaüzenet-oldal.',
	'PHPSHOP_ADMIN_CFG_DEBUG' => 'DEBUG ?',
	'PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN' => 'DEBUG ? Bekapcsolja a nyomkövetési kimenetet. Az opció megjeleníti a nyomkövetési/hibaelhárítási információkat (DEBUGPAGE) minden megjelenített oldal alján. Nagyon hasznos a fejlesztés során, ugyanis megmutatja a bevásárlókosár tartalmát, az urlap-mezoket, stb.',
	'PHPSHOP_ADMIN_CFG_FLYPAGE' => 'FLYPAGE',
	'PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN' => 'Ez az alapértelmezett termék-leíró oldal.',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE' => 'Kategória stíluslap',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN' => 'Meghatározza egy bizonyos kategóriába tartozó termékek megjelenítésére használandó alapértelmezett kategória stíluslapot.<br />

                                                                                                      Ön létrehozhat új stíluslapokat a meglévok testreszabásával <br />
                                                                                                      (amelyek ebben a könyvtárban találhatók <strong>COMPONENTPATH/html/templates/</strong> és a nevük "browse_"-vel kezdodik)',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW' => 'Az egy sorban mutatott termékek alapértelmezett száma',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN' => 'Megadja a soronként megjelenítendo termékek számát. <br />
                                                                                                      Példa:  Ha ön 4-et ír be, a Kategória stíluslap 4 terméket mutat soronként',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE' => '"nincs kép" image',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN' => 'Ez a kép lesz mutatva amikor nem áll rendelkezésre képe a termékrol.',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION' => 'Mutasd a láblécet ',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN' => 'A láblécben megjeleníti a "powered by VirtueMart"  üzenetet.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD' => 'Standard Szállítási modul  egyénileg konfigurált szállítmányozókkal és díjtételekkel. <strong>AJÁNLOTT!</strong>',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE' => '  	Zonális szállítás Ország-modul 1.0 Verzió<br />
                                                                                                            Ha ezzel a modullal kapcsolatban több információra van szüksége, kérem látogasson el a <a href="http://ZephWare.com címre">http://ZephWare.com</a><br />

                                                                                                            az elérhetoségekért vagy egyéb részletekért  <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Jelölje be, hogy lehetové tegye a zonális szállítás modul használatát',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE' => 'Letiltja a Szállítási eljárás kiválasztását. Válassza ki, ha a vásárlói letöltheto termékeket vásárolnak, amelyeket nem kell postázni.',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR' => 'Megengedi a Kassza eljárás képsor megjelenítését',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN' => 'Jelölje be, ha óhajtja a kassza eljárás képsor  megjelenítését a megrendelés véglegesítése (kassza muveletsor) alatt ( 1 - 2 - 3 - 4 grafika).',
	'PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS' => 'Válassza ki az üzlet kassza folyamatát',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS' => 'Lehetové teszi a letöltést',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN' => 'Jelölje be, ha engedélyezni akarja a letöltéseket. Csak ha letöltheto javakat árul. Csak ha letöltheto javakat árul.',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS' => 'Az a megrendelés-státus, amely megengedi a letöltést',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN' => 'Válassza ki azt a megrendelés státust, amely esetében a vevo  e-mail értesítést kap.',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS' => 'Az a megrendelés-státus, amely megtiltja a letöltést',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN' => 'Beállítja a megrendelés státust,  amelynél a letöltés a vevo számára le van tiltva.',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT' => 'DOWNLOADROOT',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN' => 'A fizikai útvonal a letöltheto állományok számára. (a végén a lezáró / kötelezo!)<br>
        <span class="üzenet">A saját (és az üzlet) biztonsága érdekében: Ha van rá lehetosége, kérem használjon egy, a WEBROOT könyvtáron kívüli könyvtárt</span>',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX' => 'Letöltés maximuma',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN' => 'Beállítja az egy letöltési ID-vel engedélyezett letöltések számát, (egy megrendelés számára)',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE' => 'Letöltési határido',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN' => 'Beállítja a letöltési idointervallumot <strong>másodpercekben</strong> amelyben  a letöltés engedélyezve van a vevo számára. Az idointervallum az elso letöltéssel kezdodik!! Amikor a megengedett ido lejár, a letöltési ID le lesz tiltva.<br />Megjegyzés : 86400s=24h.',
	'PHPSHOP_COUPONS' => 'Szelvények',
	'PHPSHOP_COUPONS_ENABLE' => 'Megengedi a szelvények használatát',
	'PHPSHOP_COUPONS_ENABLE_EXPLAIN' => 'Ha megengeded a szelvények használatát, megengeded a vásárlóknak, hogy beírják a szelvényszámokat, hogy kedvezményesen vásárolhassanak.',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON' => 'PDF - Nyomógomb',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN' => 'Mutatja vagy elrejti a PDF - nyomógombot',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER' => 'El kell fogadni a Szolgáltatási feltételeket ismételten minden megrendelés esetében?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN' => 'Jegyezd be, ha azt akarod, hogy a vásárló elfogadja a szolgáltatási feltételeket minden megrendelés esetén (azt megelozoen hogy véglegesítené a megrendelését).',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS' => 'Mutatja azokat a termékeket, amelyek pillanatnyilag nincsenek készleten',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN' => 'Amikor engedélyezett, azok a termékek is megjelennek, amelyek jelenleg nincsenek készleten. Másképp az ilyen termékek el lesznek rejtve.',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE' => 'Az üzlet offline van?',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP' => 'Ha ezt bejelöli, a honlapon az "Offline" üzenet fog megjelenni.',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG' => 'Offline üzenet',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX' => 'Az adatbázis tábla nevek elotagja',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP' => 'Ez alapértelmezés szerint <strong>vm</strong>',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP' => 'Mutassa az oldal navigációt a terméklista tetején?',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP' => 'Ki- és bekapcsolja az oldal navigációt a terméklista tetején a felhasználói kírnyezetben.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT' => 'Megmutassam a termékek számát?',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP' => 'Megmutassam a kategóriában lévo termékek számát? (mint pl. Kategória (4) )?',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING' => 'Megengedi a dinamikus bélyegkép átméretezést?',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP' => 'Ha bejelölöd, engedélyezed a dinamikus kép átméretezést. Ez azt jelenti, hogy valamennyi bélyegkép át lesz méretezve az alább megadott értékekre a PHP GD2 függvényei segítségével (Ellenorizheted, hogy van-e GD2 támogatásod a \\Rendszer\\Rendszer információ\\PHP információ\\gd lapon. A bélyegkép minosége sokkal jobb, mint a böngészo által  "átméretezett" képeké. Az újonnan létrehozott képek a /shop_image/product/resized könyvtárba kerülnek. Ha a kép már át van méretezve, ez a másolat lesz megjelenítve a böngészoben, tehát a kép nem lesz mindegyre átméretezve.',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH' => 'Bélyegkép fájl szélesség',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP' => 'Az átméretezett bélyegkép állomány <strong>szélessége</strong>.',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT' => 'Bélyegkép fájl magasság',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP' => 'Az átméretezett bélyegkép fájl <strong>magassága</strong>.',
	'PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION' => 'Kérem, válasszon ki legalább egy jelölodobozt  ebben a szállítási beállításban!',
	'PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION' => 'Ár beállítás',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL' => 'A felhasználócsoport akiknek ezeket az árakat kell megmutatni',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP' => 'A kiválasztott vásárlócsoport, és mindenki, akinek ennél magasabb besorolása van ezt a  termékárat fogja látni.',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX' => 'Mutassa "(beleértve XX% adót)" amikor alkalmazható?',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP' => 'Amikor be van jelölve, a felhasználók látni fogják a"(beleértve xx% adó)"  szöveget, amikor árak adóval egyött kerülnek kijelzésre.',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL' => 'Mutatja az árat a csomagoláshoz?',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP' => 'Amikor be van jelölve, a termék ára az egységárból és a csomagonkénti darabszámból lesz kiszámítva:<br/> <strong>Egységár (10 darab)</strong><br/> Amikor nincs bejelölve, az árak a megszokott formában jelennek meg: <strong>Ár</strong> : USD xx.xx ',
	'PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS' => 'több Lényeges beállítás',
	'PHPSHOP_ADMIN_CFG_CORE_SETTINGS' => 'Lényeges beállítások',
	'PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES' => 'Frontend tulajdonságok',
	'PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION' => 'Adó beállítás',
	'PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS' => 'Felhasználó regisztrálás beállítások',
	'PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION' => 'Felhasználó regisztrálás megengedve?',
	'PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION' => 'Új számla aktíválás szükséges?',
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
    'VM_ADMIN_CFG_LOGFILE_HEADER'       => 'Logfile Configuration',
    'VM_ADMIN_CFG_LOGFILE_ENABLED'      => 'Enable logging?',
    'VM_ADMIN_CFG_LOGFILE_ENABLED_EXPLAIN' => 'If disabled, a "null" logger will be instantiated instead, so that the vmFileLogger can still be invoked without error.',
    'VM_ADMIN_CFG_LOGFILE_NAME'         => 'Logfile Name',
    'VM_ADMIN_CFG_LOGFILE_NAME_EXPLAIN'  => 'Path to logfile. Must be reachable and writeable.',
    'VM_ADMIN_CFG_LOGFILE_LEVEL'        => 'Logging level',
    'VM_ADMIN_CFG_LOGFILE_LEVEL_EXPLAIN' => 'Log messages above this priority threshold will be ignored.',
    'VM_ADMIN_CFG_LOGFILE_LEVEL_TIP'    => 'TIP - 8',
    'VM_ADMIN_CFG_LOGFILE_LEVEL_DEBUG'  => 'DEBUG - 7',
    'VM_ADMIN_CFG_LOGFILE_LEVEL_INFO'   => 'INFO - 6',
    'VM_ADMIN_CFG_LOGFILE_LEVEL_NOTICE' => 'NOTICE - 5',
    'VM_ADMIN_CFG_LOGFILE_LEVEL_WARNING'=> 'WARNING - 4',
    'VM_ADMIN_CFG_LOGFILE_LEVEL_ERR'    => 'ERROR - 3',
    'VM_ADMIN_CFG_LOGFILE_LEVEL_CRIT'   => 'CRITICAL - 2',
    'VM_ADMIN_CFG_LOGFILE_LEVEL_ALERT'  => 'ALERT - 1',
    'VM_ADMIN_CFG_LOGFILE_LEVEL_EMERG'  => 'EMERGENCY - 0',
    'VM_ADMIN_CFG_LOGFILE_FORMAT'         => 'Logfile format',
    'VM_ADMIN_CFG_LOGFILE_FORMAT_EXPLAIN' => 'Format for individual logfile line entries.',
    'VM_ADMIN_CFG_LOGFILE_FORMAT_EXPLAIN_EXTRA' => 'Logfile format fields can include any of the following: %{timestamp} %{ident} [%{priority}] [%{remoteip}] [%{username}] %{message} %{vmsessionid}.',
    'VM_ADMIN_CFG_LOGFILE_ERROR'        => 'Cannot create or access log file.  Please contact the system or website administrator.',
    'VM_ADMIN_CFG_DEBUG_MODE_ENABLED'        => 'Enable DEBUG mode?',
    'VM_ADMIN_CFG_DEBUG_IP_ENABLED'          => 'Limit by IP address?',
    'VM_ADMIN_CFG_DEBUG_IP_ENABLED_EXPLAIN'  => 'Limit debugging output to a specific client IP address?',
    'VM_ADMIN_CFG_DEBUG_IP_ADDRESS'        => 'Client IP address',
    'VM_ADMIN_CFG_DEBUG_IP_ADDRESS_EXPLAIN' => 'If you enable this option and enter an IP address here, then debug output will be enabled ONLY for this client IP address.  Other clients will not see the debugging output.'
); $VM_LANG->initModule( 'admin', $langvars );
?>
