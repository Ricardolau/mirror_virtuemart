<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Priamy prístup k '.basename(__FILE__).' je zablokovaný.' );  
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translator drobec drobec@seznam.cz
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
	'CHARSET' => 'utf-8',
	'PHPSHOP_USER_LIST_LBL' => 'Zoznam užívateľov',
	'PHPSHOP_USER_LIST_USERNAME' => 'Užívateľské meno',
	'PHPSHOP_USER_LIST_FULL_NAME' => 'Celé meno',
	'PHPSHOP_USER_LIST_GROUP' => 'Skupina',
	'PHPSHOP_USER_FORM_LBL' => 'Pridať/Aktualizovať informácie o užívateľovi',
	'PHPSHOP_USER_FORM_PERMS' => 'Oprávnenia',
	'PHPSHOP_USER_FORM_CUSTOMER_NUMBER' => 'Číslo zákazníka / ID',
	'PHPSHOP_MODULE_LIST_LBL' => 'Zoznam modulov',
	'PHPSHOP_MODULE_LIST_NAME' => 'Názov modulu',
	'PHPSHOP_MODULE_LIST_PERMS' => 'Oprávnenia modulu',
	'PHPSHOP_MODULE_LIST_FUNCTIONS' => 'Funkcie',
	'PHPSHOP_MODULE_FORM_LBL' => 'Informácie o module',
	'PHPSHOP_MODULE_FORM_MODULE_LABEL' => 'Menovka modulu (v Topmenu)',
	'PHPSHOP_MODULE_FORM_NAME' => 'Názov modulu',
	'PHPSHOP_MODULE_FORM_PERMS' => 'Oprávnenia modulu',
	'PHPSHOP_MODULE_FORM_HEADER' => 'Záhlavie modulu',
	'PHPSHOP_MODULE_FORM_FOOTER' => 'Pätička modulu',
	'PHPSHOP_MODULE_FORM_MENU' => 'Zobraziť modul v administračnom menu?',
	'PHPSHOP_MODULE_FORM_ORDER' => 'Triedenie',
	'PHPSHOP_MODULE_FORM_DESCRIPTION' => 'Popis modulu',
	'PHPSHOP_MODULE_FORM_LANGUAGE_CODE' => 'Jazykový kód',
	'PHPSHOP_MODULE_FORM_LANGUAGE_FILE' => 'Jazykový súbor',
	'PHPSHOP_FUNCTION_LIST_LBL' => 'Zoznam funkcií',
	'PHPSHOP_FUNCTION_LIST_NAME' => 'Názov funkcie',
	'PHPSHOP_FUNCTION_LIST_CLASS' => 'Názov štýlu',
	'PHPSHOP_FUNCTION_LIST_METHOD' => 'Metóda štýlu',
	'PHPSHOP_FUNCTION_LIST_PERMS' => 'Oprávnenia',
	'PHPSHOP_FUNCTION_FORM_LBL' => 'Informácie o funkcii',
	'PHPSHOP_FUNCTION_FORM_NAME' => 'Názov funkcie',
	'PHPSHOP_FUNCTION_FORM_CLASS' => 'Názov CSS štýlu',
	'PHPSHOP_FUNCTION_FORM_METHOD' => 'Metóda CSS štýlu',
	'PHPSHOP_FUNCTION_FORM_PERMS' => 'Oprávnenia funkcie',
	'PHPSHOP_FUNCTION_FORM_DESCRIPTION' => 'Popis funkcie',
	'PHPSHOP_CURRENCY_LIST_LBL' => 'Zoznam mien',
	'PHPSHOP_CURRENCY_LIST_NAME' => 'Názov meny',
	'PHPSHOP_CURRENCY_LIST_CODE' => 'Kód meny',
	'PHPSHOP_COUNTRY_LIST_LBL' => 'Zoznam štátov',
	'PHPSHOP_COUNTRY_LIST_NAME' => 'Názov štátu',
	'PHPSHOP_COUNTRY_LIST_3_CODE' => 'Kód štátu (3)',
	'PHPSHOP_COUNTRY_LIST_2_CODE' => 'Kód štátu (2)',
	'PHPSHOP_STATE_LIST_MNU' => 'Zoznam štátov',
	'PHPSHOP_STATE_LIST_LBL' => 'Zoznam štátov v: ',
	'PHPSHOP_STATE_LIST_ADD' => 'Pridať/Aktualizovať štát',
	'PHPSHOP_STATE_LIST_NAME' => 'Názov štátu',
	'PHPSHOP_STATE_LIST_3_CODE' => 'Kód štátu (3)',
	'PHPSHOP_STATE_LIST_2_CODE' => 'Kód štátu (2)',
	'PHPSHOP_ADMIN_CFG_GLOBAL' => 'Globálne',
	'PHPSHOP_ADMIN_CFG_SITE' => 'Web',
	'PHPSHOP_ADMIN_CFG_SHIPPING' => 'Preprava',
	'PHPSHOP_ADMIN_CFG_CHECKOUT' => 'Pokladňa',
	'PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS' => 'Stiahnutia',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE' => 'Použiť len ako katalóg',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN' => 'Ak zaškrtneš túto voľbu, vypneš všetky funkcie nákupného košíka.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES' => 'Zobraziť ceny',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN' => 'Zaškrtni pre zobrazenie cien. Ak používaš funkciu katelógu, nie všetci chcú zobrazovať ceny na webe.',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX' => 'Virtuálna daň',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN' => 'Určuje, či sú položky s nulovou hmotnosťou zdaňované alebo nie. Uprav súbor ps_checkout.php->calc_order_taxable() pre úpravu.',
	'PHPSHOP_ADMIN_CFG_TAX_MODE' => 'Druh dane:',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP' => 'Závisí od adresy dodania',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR' => 'Závisí od adresy predajcu',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN' => 'Týmto sa určuje ako bude vypočítavaná sadzba dane:<br />
		<ul><li>daň podľa štátu, odkiaľ pochádza majiteľ obchodu</li>
		<li>alebo štát, z ktorého pochádza nakupujúci.</li>
		<li>alebo "mód EÚ", kde je použitá daň na výrobok pokiaľ je nakupujúci z Európskej únie, inak je sadzba dane založená na adrese príjemcu.</li></ul>',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE' => 'Zapnúť viacero sadzieb daní?',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN' => 'Zaškrtni, ak máš tovary s rôznymi sadzbami dane (napr. 7% na knihy a potraviny, 16% na ostatný tovar)',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE' => 'Oddeliť zľavu z platby pred daňou/prepravným?',
	'PHPSHOP_ADMIN_CFG_REVIEW' => 'Zapnúť Hodnotenie/Známkovanie užívateľmi',
	'PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN' => 'Ak je zapnuté, umožníš zákazníkom <strong>známkovať tovar</strong> a <strong>písať hodnotenia</strong>. <br />
		Takže zákazníci môžu pridať skúsenosti s tovarom pre ďalších zákazníkov.<br />',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN' => 'Nastavuje príznak či sa oddelí zľava zo zvolenej platby PRED (zvolené) alebo PO pridaní dane a prepravného.',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS' => 'Musí súhlastiť s podmienkami používania?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN' => 'Zvoľ, ak chceš, aby zákazník pred registráciou v obchode musel súhlasiť s podmienkami používania.',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK' => 'Kontrolovať sklad?',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN' => 'Nastauje kontrolu množstva tovaru na sklade po jeho pridaní do nákupného košíka. 
		Ak je zvolené, užívateľ si nemôže pridať do košíka viac kusov tovaru, ako je na sklade.',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT' => 'Formát mailu s objednávkou:',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT' => 'Textový email',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML' => 'HTML email',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN' => 'Toto určuje ako bude nastavený potvrdzujúci e-mail:<br />
		<ul><li>ako obyčajný text</li>
		<li>alebo ako html e-mail s obrázkami.</li></ul>',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN' => 'Povoliť Administráciu zo stránok aj pre užívateľov bez prístupu do administrácie?',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN' => 'Zapnutím tejto voľby umožníš administráciu z frontendu užívateľom, ktorí 
		sú správcovia obchodu, ale nemôžu pristupovať do backend Administrácie (napr. Registrovaní / Autori).',
	'PHPSHOP_ADMIN_CFG_URLSECURE' => 'SECUREURL',
	'PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN' => 'Bezpečná URL tvojho webu. (https - aj s lomítkami na konci!)',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE' => 'HLAVNÁ STRÁNKA',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN' => 'Toto je stránka, ktorá sa nahrá ako predvolená.',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE' => 'CHYBOVÁ STRÁNKA',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN' => 'Toto je predvolená stránka pre zobrazenie chybových správ.',
	'PHPSHOP_ADMIN_CFG_DEBUG' => 'LADENIE ?',
	'PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN' => 'LADENIE?  	   	Zapína ladiaci mód. Okrem iného to spôsobí to, že na každej stránke bude dole nápis LADENIE. Je to veľmi dobrá vec počas vývoja webu, kým zobrazuje obsah košíka, polia formulárov atď.)',
	'PHPSHOP_ADMIN_CFG_FLYPAGE' => 'FLYPAGE',
	'PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN' => 'Toto je predvolená stránka na zobrazenie informácií o tovare.',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE' => 'Šablóna kategórie',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN' => 'Toto definuje predvolenú šablónu kategórie, cez ktorú sa budú zobrazovať tovary v kategórii.<br />
		Môžeš si vytvoriť novú šablónu pomocou úprav existujúcich súborov so šablónami <br />
		(sú uložené v adresári <strong>COMPONENTPATH/themes/default/templates/browse/</strong> and begin with browse_)',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW' => 'Predvolený počet tovarov v riadku',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN' => 'Definuje počet zobrazených tovarov v jednom riadku.<br />
		Príklad: Pokiaľ nastavíš na 4, šablóna zobrazenia kategórie zbrazí 4 tovary v riadku',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE' => 'Obrázok "žiaden obrázok"',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN' => 'Tento obráhok sa zobrazí, ak tovar nemá svoj vlastný obrázok.',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION' => 'Zobraziť pätičku ',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN' => 'Zobrazí v pätičke obrázok powered-by-VirtueMart.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD' => 'Klasický doručovací modul s individuálne definovaným prepravcom a cenami. <strong>ODPORÚČANÉ !</strong>',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE' => '  	Modul prepravy v zónach krajín Verzia 1.0<br />
		Pre ďalšie informácie o tomto module navštív <a href="http://ZephWare.com">http://ZephWare.com</a><br />
		pre deaily alebo kontakt  <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Zvoľ toto pre zapnutie modulu prepravy v zónach',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE' => 'Vypnúť výber spôsobu prepravy. Zvoľ, pokiaľ si zákazníci kupujú stiahnuteľný tovar, ktrý nemusí byť prepravovaný.',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR' => 'Zapnúť pole Pokladňa',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN' => 'Zvoľ túto možnosť, ak chceš mať zobrazené pole \'Pokladňa\' počas procedúry platenia  ( 1 - 2 - 3 - 4 s grafikou).',
	'PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS' => 'Zvoľ spôsob zaplatenia v obchode',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS' => 'Zapnúť sťahovanie',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN' => 'Zapni túto monosť, pokiaľ predávaš stiahnuteľný tovar (napr. fotografie, hudbu a pod.).',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS' => 'Stav objednávky, ktorý umožní stiahnutie',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN' => 'Vyber stav objednávky, pri ktorom bude zákazník upozornený e-mailom o možnosti stiahnuť si objednaný súbor.',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS' => 'Stav objednávky, ktorý zruší možnosť sťahovania',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN' => 'Nastav stav objednávky, pri ktorom sa vypne možnosť sťahovania súborov.',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT' => 'DOWNLOADROOT',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN' => 'Fyzická cesta, z ktorej budú zákazníci sťahovať svoj tovar. (aj s lomkou na konci!)<br>
        <span class="message">Pre tvoju vlastnú bezpečnosť a bezpečnosť obchodu: pokiaľ môžeš, použi adresár KDEKOĽVEK MIMO HLAVNÉHO PRIEČINKA WEBU</span>',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX' => 'Maximálny počet stiahnutí',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN' => 'Nastav počet stiahnutí, ktoré môžu byť urobené jedným ID stiahnutia, (na jednu objednávku)',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE' => 'Expirácia stiahnutia',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN' => 'Nastav časový rozsah <strong>v sekundách</strong>, počas ktorého zákazník tovar môže stiahnuť. 
		Tento rozsah začína po prvom stiahnutí! Ak časový rozsah uplynie, vypne sa ID stiahnutia.<br />Pozn. : 86400 s = 24 hod.',
	'PHPSHOP_COUPONS' => 'Kupóny',
	'PHPSHOP_COUPONS_ENABLE' => 'Zapnúť používanie kupónov na zľavu',
	'PHPSHOP_COUPONS_ENABLE_EXPLAIN' => 'Ak zapneš používanie kupónov, umožníš zákazníkom vyplnenie poľa s číslom kupónu na zľavu počas objednávky.',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON' => 'Tlačidlo - PDF',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN' => 'Zobraziť alebo ukryť tlačidlo PDF v obchode',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER' => 'Zákazník musí súhlasiť s Podmienkami používania pri KAŽDEJ OBJEDNÁVKE?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN' => 'Zvoľ, ak chceš, aby zákazník musel súhlasiť s tvojimi podmienkami používania obchodu pri KAŽDEJ OBJEDNÁVKE (ešte pred jej potvrdením).',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS' => 'Zobraziť tovar, ktorý nie je na sklade',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN' => 'Pokiaľ je voľba zapnutá, zobrazia sa tovary, ktoré momentálne nie sú na sklade. Ak nie je zapnuté, tieto tovary sa nebudú zobrazovať.',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE' => 'Obchod je vypnutý?',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP' => 'Ak zvolíš túto možnosť, zobrazí sa správa o tom, že obchod je momentálne vypnutý.',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG' => 'Správa pri vypnutí obchodu',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX' => 'Predpona databázových tabuliek použitých obchodom',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP' => 'Predvolené je <strong>vm</strong>',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP' => 'Zobraziť navigáciu nad zoznamom tovarov?',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP' => 'Prepni na Zap. alebo Vyp. pre zobrazenie navigácie nad zoznamom tovarov na hlavnej stránke obchodu.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT' => 'Zobraziť počet tovarov?',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP' => 'Zobraziť počet tovarov v kategórii, napr. Kategória (4)?',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING' => 'Zapnúť dynamickú zmenu veľkosti náhľadov?',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP' => 'Zapnutím zapnše dynamickú zmenu veľkosti obrázkov. Znamená to, že náhľadové obrázky budú zmenené tak, aby súhlasili s nižšie zadanými rozmermi
        použitím funkcií GD2 v knižnici PHP (môžeš si zistiť, či máš podporu GD2 prejdením na "Systém" -> "Systémové informácie" -> "PHP Info" -> gd. 
        Kvalita náhľadového obrázku je oveľa lepšia, ako pri obrázkoch, ktoré boli "zmenšené" prehliadačom. Novo vygenerované obrázky sú ukladané do adresára /shop_image/prduct/resized. Ak už obrázok bol zmenený, táto kópia sa odošle prehliadaču a tak sa obrázok negeneruje znova.',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH' => 'Šírka náhľadového obrázku',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP' => 'Cieľová <strong>šírka</strong> zmenšeného náhľadového obrázku.',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT' => 'Výška náhľadového obrázku',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP' => 'Cieľová <strong>výška</strong> zmenšeného náhľadového obrázku.',
	'PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION' => 'Zvoľ najmenej jedno pole v konfigurácii doručenia!',
	'PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION' => 'Konfigurácia ceny',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL' => 'Skupina zákazníkov, ktorej sa cena zobrazuje',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP' => 'Zvolená skupina skupina zákazníkov a všetky skupiny s vyššími oprávneniami budú mať zobrazenú cenu tovaru.',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX' => 'Zobraziť "(vrátane XX% DPH)" ak je to používané?',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP' => 'Pokiaľ je voľba zapnutá, užívatelia uvidia text  "(vrátane xx% DPH)", pokiaľ sú ceny zobrazené vrátane dane.',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL' => 'Zobraziť cenovky?',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP' => 'Pri zapntuí, sa cena odvodí z jednotiek množstva a hodnôt balenia:<br/>
		<strong>Cena za jednotku (10 ks)</strong><br/>
		Ak je voľba vypnutá, zobrazia sa cenovky ako zvyčajne: <strong>Cena: $xx.xx</strong>',
	'PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS' => 'viac nastavení jadra',
	'PHPSHOP_ADMIN_CFG_CORE_SETTINGS' => 'Nastavenie jadra',
	'PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES' => 'Možnosti frontendu',
	'PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION' => 'Nastavenie dane',
	'PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS' => 'Nastavenia Registrácie užívateľov',
	'PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION' => 'Povoliť registráciu užívateľov?',
	'PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION' => 'Vyžadovať aktiváciu nových účtov?',
	'VM_FIELDMANAGER_NAME' => 'Názov poľa',
	'VM_FIELDMANAGER_TITLE' => 'Nadpis poľa',
	'VM_FIELDMANAGER_TYPE' => 'Druh poľa',
	'VM_FIELDMANAGER_REQUIRED' => 'Vyžadované',
	'VM_FIELDMANAGER_PUBLISHED' => 'Uverejnené',
	'VM_FIELDMANAGER_SHOW_ON_REGISTRATION' => 'Zobraziť v registračnom formulári',
	'VM_FIELDMANAGER_SHOW_ON_ACCOUNT' => 'Zobraziť v nastaveniach účtu',
	'VM_USERFIELD_FORM_LBL' => 'Pridať / Upraviť polia užívateľa',
	'VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL' => 'Predvolený spôsob triedenia tovaru',
	'VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP' => 'Definuje, podľa ktorých polí sa tovar triedi na stránkach',
	'VM_BROWSE_ORDERBY_FIELDS_LBL' => 'Dostupné polia, podľa ktorých sa "triedi" ',
	'VM_BROWSE_ORDERBY_FIELDS_LBL_TIP' => 'Zvoľ polia, podľa ktorých sa bude triediť tovar. Každé z nich definuje spôsob triedenia na stránkach obchodu. Ak nevyberieš nič, nezobrazí možnosť triedenia tovaru zákazníkom.',
	'VM_GENERALLY_PREVENT_HTTPS' => 'Všeobecne očakávať https spojenie?',
	'VM_GENERALLY_PREVENT_HTTPS_TIP' => 'Pri zapnutí voľby bude zákazník presmerovaný na <strong>http</strong> URL, pokiaľ nie je v tých častiach obchodu, ktoré si vyžadujú https spojenie.',
	'VM_MODULES_FORCE_HTTPS' => 'Miesta obchodu, ktoré musia používať https',
	'VM_MODULES_FORCE_HTTPS_TIP' => 'Tu môžeš použiť čiarkou oddelený zoznam modulov obchodu (viď. "Administrácia" => "Zoznam modulov"), ktoré musia používať https spojenie.',
	'VM_SHOW_REMEMBER_ME_BOX' => 'Zobraziť políčko "Zapamätaj si ma" pri prihlásení?',
	'VM_SHOW_REMEMBER_ME_BOX_TIP' => 'Pri zaškrtnutí sa zobrazí políčko "Zapamätaj si ma". Neodporúča sa pri použití zdieľaného ssl, pretože zákazník si síce voľbu zvolí, ale cookie sa neuloží - nakoľko je potrebné ukladanie užívateľských cookie.',
	'VM_ADMIN_CFG_REVIEW_MINIMUM_COMMENT_LENGTH' => 'Minimálna dĺžka komentára',
	'VM_ADMIN_CFG_REVIEW_MINIMUM_COMMENT_LENGTH_TIP' => 'Najmenší počet znakov, ktoré zákazník MUSÍ napísať pred tým, ako zákazník bude môcť odoslať hodnotenie.',
	'VM_ADMIN_CFG_REVIEW_MAXIMUM_COMMENT_LENGTH' => 'Maximálna dĺžka komentára',
	'VM_ADMIN_CFG_REVIEW_MAXIMUM_COMMENT_LENGTH_TIP' => 'Maximálny počet znakov, ktoré zákazník môže do komentára vložiť.',
	'VM_ADMIN_SHOW_EMAILFRIEND' => 'Zobraziť odkaz "Odporučiť známemu"?',
	'VM_ADMIN_SHOW_EMAILFRIEND_TIP' => 'Pri zapnutí sa zobrazí odkaz umožňujúci odoslať odporúčanie e-mailom na konkrétny tovar.',
	'VM_ADMIN_SHOW_PRINTICON' => 'Zobraziť odkaz "Náhľad pred tlačou"?',
	'VM_ADMIN_SHOW_PRINTICON_TIP' => 'Pri zapnutí sa zobrazí odkaz, ktorý otvorí aktuálnu stránku pripravenú na tlač vo vyskakovacom okne.',
	'VM_REVIEWS_AUTOPUBLISH' => 'Automatické uverejňovanie komentárov?',
	'VM_REVIEWS_AUTOPUBLISH_TIP' => 'Pri zapnutí sa automaticky po pridaní komentára tento komentár uverejní. Ak je voľba vypnutá, administrátor najprv musí schváliť/uverejniť komentár.',
	'VM_ADMIN_CFG_PROXY_SETTINGS' => 'Všeobecné nastavenia proxy',
	'VM_ADMIN_CFG_PROXY_URL' => 'URL adresa proxy servera',
	'VM_ADMIN_CFG_PROXY_URL_TIP' => 'Napr.: <strong>http://10.42.21.1</strong>.<br />
		Ak si nie si istý, nechaj pole prázdne.</strong> Táto hodnota bude použitá pre pripojenie do internetu zo servra s obchodom (napr. pri prenose poplatkov za dopravu z UPS/USPS).',
	'VM_ADMIN_CFG_PROXY_PORT' => 'Proxy Port',
	'VM_ADMIN_CFG_PROXY_PORT_TIP' => 'Používané číslo portu na komunikáciu s proxy serverom (zvyčajne <b>80</b> alebo <b>8080</b>).',
	'VM_ADMIN_CFG_PROXY_USER' => 'Užívateľské meno proxy',
	'VM_ADMIN_CFG_PROXY_USER_TIP' => 'Ak proxy server vyžaduje overenie, napíš tvoje užívateľské meno.',
	'VM_ADMIN_CFG_PROXY_PASS' => 'Heslo do proxy',
	'VM_ADMIN_CFG_PROXY_PASS_TIP' => 'Ak proxy server vyžaduje overenie, napíš sem tvoje heslo.',
	'VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO' => 'Zobraziť informácie o "Podmienkach vrátenia tovaru" na stránke potvrdenia objednávky?',
	'VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP' => 'Majitelia obchodov sú zo zákona povinní informovať svojich zákazníkov o podmienkach dodania, zrušenia objednávky a vrátenia tovaru. Vychádza sa najmä zo smerníc Európskej únie. Takže toto pole musí byť vo väčšine prípadov zapnuté.',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT' => 'Právne informácie (krátky variant).',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP' => 'Tento text poučuje tvojich zákazníkov v krátkosti o ich právach súvisiacich s uzatváranou transakciou a možnostiach jej zrušenia. Zobrazuje sa na ostatnej stránke pred pokladňou, priamo nad tlačidlom "Potvrdiť objednávku".',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK' => 'Dlhá verzia právnych informácií (odkaz n apoložku obsahu).',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP' => 'Prosím, pridaj novú položku s detailami o podmienkach objednávky a spôsoboch vrátenia tovaru, resp. zrušenia objednávky.
		Môžeš si to tu neskôr zvoliť.',
	'VM_SELECT_THEME' => 'Zvoľ názov tvojho obchodu',
	'VM_SELECT_THEME_TIP' => 'Témy ti umožnia upraviť vzhľad obchodu. <br />Ak nie sú dostupné žiadne iné témy, bude použitá "predvolená".',
	'VM_CFG_CONTENT_PLUGINS_ENABLE' => 'Zapnúť obsah mambotov / zásuvných modulov v popisoch?',
	'VM_CFG_CONTENT_PLUGINS_ENABLE_TIP' => 'Ak je voľba zapnutá, popisy tovaru a kategórií sú rozoberané všetkými uverejnenými mambotmi/zásuvnými modulmi.',
	'VM_CFG_CURRENCY_MODULE' => 'Zvoľ modul konverzie mien',
	'VM_CFG_CURRENCY_MODULE_TIP' => 'Umožňuje to zvoliť z modulu niektorú z národných mien. Modul získava prehľad výmenných kurzov zo servra a prepočítava ich do inej meny.',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_EU' => 'Režim Európskej únie',
	'VM_ADMIN_CFG_DOWNLOAD_KEEP_STOCKLEVEL' => 'Nemeniť množstvo tovaru na sklade pri nákupe?',
	'VM_ADMIN_CFG_DOWNLOAD_KEEP_STOCKLEVEL_TIP' => 'Pri zapnutí možnosti sa množstvo tovaru na sklade nezníži aj napriek tomu, že už bol zakúpený zákazníkom.',
	'VM_USERGROUP_FORM_LBL' => 'Pridať/Upraviť užívateľskú skupinu',
	'VM_USERGROUP_NAME' => 'Názov užívateľskej skupiny',
	'VM_USERGROUP_LEVEL' => 'Oprávnenia užívateľskej skupiny',
	'VM_USERGROUP_LEVEL_TIP' => 'Poor! Väčšie číslo znamená <b>menšie</b> oprávnenia. <b>Administrátorská</b> skupina má <em>úroveň 0</em>, správca obchodu má úroveň 250, užívatelia sú na úrovni 500.',
	'VM_USERGROUP_LIST_LBL' => 'Zoznam užívateľských skupínUser Group List',
	'VM_ADMIN_CFG_COOKIE_CHECK' => 'Zapnúť kontrolu cookie?',
	'VM_ADMIN_CFG_COOKIE_CHECK_EXPLAIN' => 'Pri zapnutí VirtueMart skontroluje, či prehliadač zákazníka akceptuje cookie alebo nie. Je to príjemné pre užívateľa, ale môže to mať negatívny vplyv na SEO v obchode.',
	'VM_CFG_REGISTRATION_TYPE' => 'Spôsob registrácie užívateľa',
	'VM_CFG_REGISTRATION_TYPE_TIP' => 'Vyber spôsob registrácie užívateľa v obchode!<br />
		<strong>Normálna registrácia</strong><br />
		Toto je zvyčajný spôsob registrácie, keď sa zákazník musí registrovať a vybrať si užívateľské meno a heslo<br /><br />
		<strong>Tichá registrácia</strong><br />
		Tichá registrácia znamená, že zákazník si nemusí vybrať užívateľské meno a heslo, ale tieto sú vytvorené automaticky počas registrácie a zaslané na zadanú e-mailovú adresu.
		<br /><br />
		<strong>Voliteľná registrácia</strong><br />
		Voliteľná registrácia ponechá užívateľovi možnosť či si chce vytvoriť účet alebo nie. Ak si užívateľ chce vytvoriť účet, musí si zvoliť užívateľské meno a heslo.
		<br /><br />
		<strong>Bez registrácie</strong><br />
		Zákazníci sa nepotrebujú registrovať.',
	'VM_CFG_REGISTRATION_TYPE_NORMAL_REGISTRATION' => 'Normálne vytvorenie účtu',
	'VM_CFG_REGISTRATION_TYPE_SILENT_REGISTRATION' => 'Tiché vytvorenie účtu',
	'VM_CFG_REGISTRATION_TYPE_OPTIONAL_REGISTRATION' => 'Voliteľné vytvorenie účtu',
	'VM_CFG_REGISTRATION_TYPE_NO_REGISTRATION' => 'Bez registrácie',
	'VM_ADMIN_CFG_FEED_CONFIGURATION' => 'Nastavenie feedu',
	'VM_ADMIN_CFG_FEED_ENABLE' => 'Zapnúť feed tovaru',
	'VM_ADMIN_CFG_FEED_ENABLE_TIP' => 'Pri zapntí sa zákazníci môžu zaregistrovať do feedu, ktorý zobrazuje ostatné tovary (zo všetkých alebo zvolenej kategórie) v obchode.',
	'VM_ADMIN_CFG_FEED_CACHE' => 'Nastavenie cache feedu',
	'VM_ADMIN_CFG_FEED_CACHE_ENABLE' => 'Zapnúť cache?',
	'VM_ADMIN_CFG_FEED_CACHETIME' => 'Dĺžka cache (v sekundách)',
	'VM_ADMIN_CFG_FEED_CACHE_TIP' => 'Cachovanie zrýchli doručenie feedu a upraví zaťaženie servra, pretože feed sa vytvorí len raz a uloží sa do súboru.',
	'VM_ADMIN_CFG_FEED_SHOWPRICES' => 'Vrátane ceny tovaru v popise?',
	'VM_ADMIN_CFG_FEED_SHOWPRICES_TIP' => 'Pri zapnutí sa v popise tovaru zobrazí zvyčajná cena tovaru',
	'VM_ADMIN_CFG_FEED_SHOWDESC' => 'Vrátane popisu tovaru?',
	'VM_ADMIN_CFG_FEED_SHOWDESC_TIP' => 'Pri zapnutí sa k položke feedu pripojí aj popis tovaru',
	'VM_ADMIN_CFG_FEED_SHOWIMAGES' => 'Zahrnúť obrázky do feedu?',
	'VM_ADMIN_CFG_FEED_SHOWIMAGES_TIP' => 'Pri zapnutí sa do položky feedu zahrnú aj obrázky.',
	'VM_ADMIN_CFG_FEED_DESCRIPTION_TYPE' => 'Spôsob popisu tovaru',
	'VM_ADMIN_CFG_FEED_DESCRIPTION_TYPE_TIP' => 'Vyber si spôsob popisu tovaru, ktorý bude zahrnutý do feedu.',
	'VM_ADMIN_CFG_FEED_LIMITTEXT' => 'Obmedziť popis?',
	'VM_ADMIN_CFG_FEED_MAX_TEXT_LENGTH' => 'Maximálna dĺžka popisu',
	'VM_ADMIN_CFG_MAX_TEXT_LENGTH_TIP' => 'Maximálna dĺžka popisu tovaru v každej položke feedu.',
	'VM_ADMIN_CFG_FEED_TITLE_TIP' => 'Názov feedu (automatický vkladač {storename} zapíše názov obchodu)',
	'VM_ADMIN_CFG_FEED_TITLE_CATEGORIES_TIP' => 'Názov feedu kategórie (\'{catname}\' je automatický vkladač názvu kategórie, {storename} je automatický vkladač názvu obchodu)',
	'VM_ADMIN_CFG_FEED_TITLE' => 'Názov feedu',
	'VM_ADMIN_CFG_FEED_TITLE_CATEGORIES' => 'Názov feedu pre kategórie',
	'VM_ADMIN_SECURITY' => 'Bezpečnosť',
	'VM_ADMIN_SECURITY_SETTINGS' => 'Nastavenia bezpečnosti',
	'VM_CFG_ENABLE_FEATURE' => 'Zapnúť túto voľbu',
	'VM_CFG_CHECKOUT_SHOWSTEP_TIP' => 'Tu môžeš zapnúť, vypnúť a zmeniť poradie niektorých krokov cesty k pokladni. Môžeš zobraziť viac krokov na jednej strane zadaním rovnakého čísla.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_FLEX' => 'Flex prepravné. Pevné náklady na prepravu nastavené podľa percentuálnej hodnoty z výšky objednávky podľa zadanej sumy ',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_SHIPVALUE' => 'Dodávka založená na celkových výškach objednávky. Pevné ceny za prepravu založené na hodnotách zadaných v konfigurácii.',
	'VM_CFG_CHECKOUT_SHOWSTEPINCHECKOUT' => 'Zobraziť v kroku: %s z procesu platby.',
	'VM_ADMIN_ENCRYPTION_KEY' => 'Kódovací kľúč',
	'VM_ADMIN_ENCRYPTION_KEY_TIP' => 'Používa sa na bezpečné ukladanie a prenos citlivých údajov (napr. informácií o platobnej karte) zakódovaných v databáze.',
	'VM_ADMIN_STORE_CREDITCARD_DATA' => 'Uložiť informácie o platobnej karte?',
	'VM_ADMIN_STORE_CREDITCARD_DATA_TIP' => 'VirtueMart ukladá informácie o platobných kartách do databázy v zakódovanej podobe. Stane sa tak po spracovaní informácií o platobnej karte externým serverom. <strong>Pokiaľ nepotrebuješ spracovávať informácie o platobných kartách ručne po obdržaní objednávky, môžeš túto voľbu pokojne vypnúť.</strong>',
	'VM_USERFIELDS_URL_ONLY' => 'Len URL',
	'VM_USERFIELDS_HYPERTEXT_URL' => 'Hypertextový odkaz a URL',
	'VM_FIELDS_TEXTFIELD' => 'Textové pole',
	'VM_FIELDS_CHECKBOX_SINGLE' => 'Zaškrtávacie pole (Jedno)',
	'VM_FIELDS_CHECKBOX_MULTIPLE' => 'Zaškrtávacie pole (Viacero)',
	'VM_FIELDS_DATE' => 'Dátum',
	'VM_FIELDS_DROPDOWN_SINGLE' => 'Zoznam možností (jeden výber)',
	'VM_FIELDS_DROPDOWN_MULTIPLE' => 'Zoznam možností (viac možností)',
	'VM_FIELDS_EMAIL' => 'Emailová adresa',
	'VM_FIELDS_EUVATID' => 'EÚ DPH ID',
	'VM_FIELDS_EDITORAREA' => 'Editor Text Area',
	'VM_FIELDS_TEXTAREA' => 'Textová oblasť',
	'VM_FIELDS_RADIOBUTTON' => 'Prepínač',
	'VM_FIELDS_WEBADDRESS' => 'Webová adresa',
	'VM_FIELDS_DELIMITER' => '=== oddeľovač polí ===',
	'VM_FIELDS_NEWSLETTER' => 'Odber noviniek',
	'VM_USERFIELDS_READONLY' => 'Len na čítanie',
	'VM_USERFIELDS_SIZE' => 'Veľkosť poľa',
	'VM_USERFIELDS_MAXLENGTH' => 'Max. dĺzka',
	'VM_USERFIELDS_DESCRIPTION' => 'Popis, druh poľa: text alebo HTML',
	'VM_USERFIELDS_COLUMNS' => 'Stĺpce',
	'VM_USERFIELDS_ROWS' => 'Riadky',
	'VM_USERFIELDS_EUVATID_MOVESHOPPER' => 'Presunúť zákazníka do nasledovnej skupiny zákazníkov pred úspešným overením EÚ DPH ID',
	'VM_USERFIELDS_ADDVALUES_TIP' => 'Použi tabuľku nižšie pre pridanie nových hodnôt.',
	'VM_ADMIN_CFG_DISPLAY' => 'Zobraziť',
	'VM_ADMIN_CFG_LAYOUT' => 'Vzhľad',
	'VM_ADMIN_CFG_THEME_SETTINGS' => 'Nastavenia témy',
	'VM_ADMIN_CFG_THEME_PARAMETERS' => 'Parametre',
	'VM_ADMIN_ENCRYPTION_FUNCTION' => 'Funkcie kódovania',
	'VM_ADMIN_ENCRYPTION_FUNCTION_TIP' => 'Tu si môžeš zvoliť použité funkcie na zakódovanie citlivých informácií pred ich uložením do databázy. Odporúčané je kódovanie pomocou AES_ENCRYPT, pretože je veľmi bezpečné. ZAKÓDOVANIE neposkytuje skutočné šifrovanie.',
	'SAVE_PERMISSIONS' => 'Uložiť oprávnenia',
	'VM_ADMIN_THEME_CFG_NOT_EXISTS' => 'Konfiguračný súbor pre túto šablónu neexistuje a ani nemôže byť vytvorený. Konfigurácia nie je možná',
	'VM_ADMIN_THEME_NOT_EXISTS' => 'Téma "{theme}" neexistuje.',
	'VM_USERFIELDS_ADDVALUE' => 'Pridať hodnotu',
	'VM_USERFIELDS_TITLE' => 'Názov',
	'VM_USERFIELDS_VALUE' => 'Hodnota',
	'VM_USER_FORM_LASTVISIT_NEVER' => 'Nikdy',
	'VM_USER_FORM_TAB_GENERALINFO' => 'Základné informácie o užívateľovi',
	'VM_USER_FORM_LEGEND_USERDETAILS' => 'Detaily užívateľa',
	'VM_USER_FORM_LEGEND_PARAMETERS' => 'Parametre',
	'VM_USER_FORM_LEGEND_CONTACTINFO' => 'Kontaktné informácie',
	'VM_USER_FORM_NAME' => 'Meno',
	'VM_USER_FORM_USERNAME' => 'Užívateľské meno',
	'VM_USER_FORM_EMAIL' => 'E-mail',
	'VM_USER_FORM_NEWPASSWORD' => 'Nové heslo',
	'VM_USER_FORM_VERIFYPASSWORD' => 'Overiť heslo',
	'VM_USER_FORM_GROUP' => 'Skupina',
	'VM_USER_FORM_BLOCKUSER' => 'Blokovať užívateľa',
	'VM_USER_FORM_RECEIVESYSTEMEMAILS' => 'Zasielať systémové e-maily',
	'VM_USER_FORM_REGISTERDATE' => 'Dátum registrácie',
	'VM_USER_FORM_LASTVISITDATE' => 'Dátum ostatnej návštevy',
	'VM_USER_FORM_NOCONTACTDETAILS_1' => 'K tomuto užívateľovi neboli priradené žiadne podrobnosti:',
	'VM_USER_FORM_NOCONTACTDETAILS_2' => 'Zobraziť \'Komponenty -> Kontakt -> Správa kontaktov\' pre podrobnosti.',
	'VM_USER_FORM_CONTACTDETAILS_NAME' => 'Mena',
	'VM_USER_FORM_CONTACTDETAILS_POSITION' => 'Pozícia',
	'VM_USER_FORM_CONTACTDETAILS_TELEPHONE' => 'Telefón',
	'VM_USER_FORM_CONTACTDETAILS_FAX' => 'Fax',
	'VM_USER_FORM_CONTACTDETAILS_CHANGEBUTTON' => 'Zmeniť kontaktné detaily',
	'VM_ADMIN_CFG_LOGFILE_HEADER' => 'Nastavenie logovacieho súboru',
	'VM_ADMIN_CFG_LOGFILE_ENABLED' => 'Zapnúť logovanie?',
	'VM_ADMIN_CFG_LOGFILE_ENABLED_EXPLAIN' => 'Pokiaľ je zapnuté, bude použitý "null" log namiesto vmFileLogger, ktorý môže byť použitý na zaznamenanie chyby.',
	'VM_ADMIN_CFG_LOGFILE_NAME' => 'Názov logovacieho súboru',
	'VM_ADMIN_CFG_LOGFILE_NAME_EXPLAIN' => 'Cesta k logovaciemu súboru. Musí byť dosiahnuteľná a zapisovateľná.',
	'VM_ADMIN_CFG_LOGFILE_LEVEL' => 'Úroveň logovania',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_EXPLAIN' => 'Logovacie správy nad touto prioritou budú ignorované.',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_TIP' => 'TIP - 8',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_DEBUG' => 'LADENIE - 7',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_INFO' => 'INFO - 6',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_NOTICE' => 'POZNÁMKA - 5',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_WARNING' => 'VÝSTRAHA - 4',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_ERR' => 'CHYBA - 3',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_CRIT' => 'KRITICKÁ - 2',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_ALERT' => 'VÝSTRAHA - 1',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_EMERG' => 'STAV NÚDZE - 0',
	'VM_ADMIN_CFG_LOGFILE_FORMAT' => 'Formát logovacieho súboru',
	'VM_ADMIN_CFG_LOGFILE_FORMAT_EXPLAIN' => 'Vlastná úprava položiek v logovacom súbore.',
	'VM_ADMIN_CFG_LOGFILE_FORMAT_EXPLAIN_EXTRA' => 'Polia v logovacom súbore môžu obsahovať niektoré z nasledovných položiek: %{timestamp} %{ident} [%{priority}] [%{remoteip}] [%{username}] %{message} %{vmsessionid}.',
	'VM_ADMIN_CFG_LOGFILE_ERROR' => 'Nemôžem vytvoriť alebo pristupovať do log súboru. Spoj sa so správcom webu alebo servra.',
	'VM_ADMIN_CFG_DEBUG_MODE_ENABLED' => 'Zapnúť LADIACI mód?',
	'VM_ADMIN_CFG_DEBUG_IP_ENABLED' => 'Obmedziť podľa IP adresy?',
	'VM_ADMIN_CFG_DEBUG_IP_ENABLED_EXPLAIN' => 'Obmedziť ladiaci výstup na osobitnú IP adresu klienta?',
	'VM_ADMIN_CFG_DEBUG_IP_ADDRESS' => 'IP adresa klienta',
	'VM_ADMIN_CFG_DEBUG_IP_ADDRESS_EXPLAIN' => 'Pokiaľ chceš zapnúť túto možnosť, zadaj IP adresu, ladiaci výstup potom bude zapnutý LEN pre túto IP adresu klienta.  Ostatní klienti neuvidia ladiaci výstup.',
	'VM_FIELDMANAGER_SHOW_ON_SHIPPING' => 'Zobraziť v dodacom formulári',
	'VM_USER_NOSHIPPINGADDR' => 'Žiadna dodacia adresa.',
	'VM_UPDATE_CHECK_LBL' => 'Kontrola aktualizácie VirtueMartu',
	'VM_UPDATE_CHECK_VERSION_INSTALLED' => 'Nainštalovaná verzia VirtueMartu',
	'VM_UPDATE_CHECK_LATEST_VERSION' => 'Ostatná verzia VirtueMartu',
	'VM_UPDATE_CHECK_CHECKNOW' => 'Skontroluj teraz!',
	'VM_UPDATE_CHECK_DLUPDATE' => 'Stiahnuť aktualizáciu',
	'VM_UPDATE_CHECK_CHECKING' => 'Kontrolujem...',
	'VM_UPDATE_CHECK_CHECK' => 'Skontroluj',
	'VM_UPDATE_NOTDOWNLOADED' => 'Balíček s aktualizáciou nemôže byť stiahnutý.',
	'VM_UPDATE_PREVIEW_LBL' => 'Prehľad aktualizácie VirtueMartu',
	'VM_UPDATE_WARNING_TITLE' => 'Všeobecné upozornenie',
	'VM_UPDATE_WARNING_TEXT' => 'Inštalácia aktualizačného balíčka do VirtueMartu môže spôsobiť poškodenie tvojho webu 
pokiaľ si už upravil niektoré súbory komponenty VirtueMart. Aktualiačný proces prepíše všetky súbory vypísané nižšie - pokiaľ nechceš aplikovať malé zmeny (diff), ale len nahradiť existujúci súbor novým. Pokiaľ si si upravil súbory VirtuMartu podľa svojej potreby, môže to spôsobiť nekonzistentnosť súboru alebo chýbajúce vzťahy vo funkciách alebo triedach štýlov.',
	'VM_UPDATE_PATCH_DETAILS' => 'Detaily aktualizácie',
	'VM_UPDATE_PATCH_DESCRIPTION' => 'Popis',
	'VM_UPDATE_PATCH_DATE' => 'Dátum vydania',
	'VM_UPDATE_PATCH_FILESTOUPDATE' => 'Súbory, ktoré budú aktualizované',
	'VM_UPDATE_PATCH_STATUS' => 'Stav',
	'VM_UPDATE_PATCH_WRITABLE' => 'Zapisovateľný',
	'VM_UPDATE_PATCH_UNWRITABLE' => 'Do súboru/adresára sa nedá zapisovať',
	'VM_UPDATE_PATCH_QUERYTOEXEC' => 'Otázky, ktoré budú v databáze spustené',
	'VM_UPDATE_PATCH_CONFIRM_TEXT' => 'Prečítal som si <a href="#warning">Upozornenie</a> a som si absolútne istý, že chcem nainštalovať aktualizačnú záplatu do VirtueMartu hneď teraz.',
	'VM_UPDATE_PATCH_APPLY' => 'Nainštalovať záplatu',
	'VM_UPDATE_PATCH_ERR_UNWRITABLE' => 'Nedá sa zapisovať do všetkých súborov/adresárov, ktoré by mali byť aktualizované. Najprv zmeň oprávnenia, prosím.',
	'VM_UPDATE_PATCH_PLEASEMARK' => 'Prosím, zaškrtni políčko pred inštaláciou záplaty.',
	'VM_UPDATE_RESULT_TITLE' => 'Aktuálne nainštalovaná verzia',
	'VM_FIELDS_CAPTCHA' => 'Pole captcha (pri použití com_securityimages)',
	'VM_FIELDS_AGEVERIFICATION' => 'Overenie veku (Polia výberu dátumu)',
	'VM_FIELDS_AGEVERIFICATION_MINIMUM' => 'Zadaj minimálny vek'
); $VM_LANG->initModule( 'admin', $langvars );
?>
