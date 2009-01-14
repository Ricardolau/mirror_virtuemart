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
	'CHARSET' => 'UTF-8',
	'PHPSHOP_USER_LIST_LBL' => 'Lista Utenti',
	'PHPSHOP_USER_LIST_USERNAME' => 'Nome Utente',
	'PHPSHOP_USER_LIST_FULL_NAME' => 'Nome Completo',
	'PHPSHOP_USER_LIST_GROUP' => 'Gruppo',
	'PHPSHOP_USER_FORM_LBL' => 'Aggiungi/Modifica Informazioni Utente',
	'PHPSHOP_USER_FORM_PERMS' => 'Permessi',
	'PHPSHOP_USER_FORM_CUSTOMER_NUMBER' => 'Numero Cliente / ID',
	'PHPSHOP_MODULE_LIST_LBL' => 'Lista Moduli',
	'PHPSHOP_MODULE_LIST_NAME' => 'Nome Modulo',
	'PHPSHOP_MODULE_LIST_PERMS' => 'Permessi Modulo',
	'PHPSHOP_MODULE_LIST_FUNCTIONS' => 'Funzioni',
	'PHPSHOP_MODULE_FORM_LBL' => 'Informazioni Modulo',
	'PHPSHOP_MODULE_FORM_MODULE_LABEL' => 'Etichetta Modulo (per Topmenu)',
	'PHPSHOP_MODULE_FORM_NAME' => 'Nome Modulo',
	'PHPSHOP_MODULE_FORM_PERMS' => 'Permessi Modulo',
	'PHPSHOP_MODULE_FORM_HEADER' => 'Intestazione Modulo',
	'PHPSHOP_MODULE_FORM_FOOTER' => 'Piè di pagina Modulo',
	'PHPSHOP_MODULE_FORM_MENU' => 'Mostra Modulo nel menu Admin?',
	'PHPSHOP_MODULE_FORM_ORDER' => 'Ordine di visualizzazione',
	'PHPSHOP_MODULE_FORM_DESCRIPTION' => 'Descrizione Modulo',
	'PHPSHOP_MODULE_FORM_LANGUAGE_CODE' => 'Codice Lingua',
	'PHPSHOP_MODULE_FORM_LANGUAGE_FILE' => 'File Lingua',
	'PHPSHOP_FUNCTION_LIST_LBL' => 'Lista Funzioni',
	'PHPSHOP_FUNCTION_LIST_NAME' => 'Nome Funzione',
	'PHPSHOP_FUNCTION_LIST_CLASS' => 'Nome Classe',
	'PHPSHOP_FUNCTION_LIST_METHOD' => 'Metodo Classe',
	'PHPSHOP_FUNCTION_LIST_PERMS' => 'Permessi',
	'PHPSHOP_FUNCTION_FORM_LBL' => 'Informazioni Funzione',
	'PHPSHOP_FUNCTION_FORM_NAME' => 'Nome Funzione',
	'PHPSHOP_FUNCTION_FORM_CLASS' => 'Nome Classe',
	'PHPSHOP_FUNCTION_FORM_METHOD' => 'Metodo Classe',
	'PHPSHOP_FUNCTION_FORM_PERMS' => 'Permessi Funzione',
	'PHPSHOP_FUNCTION_FORM_DESCRIPTION' => 'Descrizione Funzione',
	'PHPSHOP_CURRENCY_LIST_LBL' => 'Lista Valute',
	'PHPSHOP_CURRENCY_LIST_NAME' => 'Nome Valuta',
	'PHPSHOP_CURRENCY_LIST_CODE' => 'Codice Valuta',
	'PHPSHOP_COUNTRY_LIST_LBL' => 'Lista Nazioni',
	'PHPSHOP_COUNTRY_LIST_NAME' => 'Nome Nazione',
	'PHPSHOP_COUNTRY_LIST_3_CODE' => 'Codice Nazione (3)',
	'PHPSHOP_COUNTRY_LIST_2_CODE' => 'Codice Nazione (2)',
	'PHPSHOP_STATE_LIST_MNU' => 'Lista Province',
	'PHPSHOP_STATE_LIST_LBL' => 'Lista Province per:',
	'PHPSHOP_STATE_LIST_ADD' => 'Aggiungi/Aggiorna Provincia',
	'PHPSHOP_STATE_LIST_NAME' => 'Nome Provincia',
	'PHPSHOP_STATE_LIST_3_CODE' => 'Sigla Provincia (3)',
	'PHPSHOP_STATE_LIST_2_CODE' => 'Sigla Provincia (2)',
	'PHPSHOP_ADMIN_CFG_GLOBAL' => 'Opzioni Generali',
	'PHPSHOP_ADMIN_CFG_SITE' => 'Sito',
	'PHPSHOP_ADMIN_CFG_SHIPPING' => 'Spedizione',
	'PHPSHOP_ADMIN_CFG_CHECKOUT' => 'Cassa',
	'PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS' => 'Download',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE' => 'Utilizza solo come catalogo',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN' => 'Se selezioni questa opzione disabiliti tutte le funzioni del carrello della spesa.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES' => 'Mostra Prezzi',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN' => 'Metti il segno di spunta per mostrare i prezzi. Con la funzione catalogo qualche venditore preferisce non mostrare i prezzi.',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX' => 'Imposta virtuale',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN' => 'Determina se si applica o meno l\'imposta agli articoli a peso zero. Modifica ps_checkout.php->calc_order_taxable() per personalizzare questa funzione.',
	'PHPSHOP_ADMIN_CFG_TAX_MODE' => 'Modalità d\'imposta:',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP' => 'In base all\'indirizzo di spedizione',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR' => 'In base all\'indirizzo del commerciante',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN' => 'Determina l\'aliquota IVA da applicare:<br />
        <ul>
        <li>quella del paese dell\'acquirente</li>
        <li>quella del paese del proprietario del negozio</li>
        <li>scegli "Modalità Unione Europea" per applicare un\'unica tassa per prodotto se l\'acquirente è all\'interno dell\'Unione Europea, oppure la tassa specifica del paese dell\'acquirente se fuori dalla U.E.</li>
        </ul>',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE' => 'Consenti aliquote multiple?',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN' => 'Seleziona se hai prodotti con diverse aliquote d\'imposta (es. 4% per libri, 20% per l\'altra merce)',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE' => 'Calcola lo sconto prima di applicare l\'IVA e le spese di spedizione?',
	'PHPSHOP_ADMIN_CFG_REVIEW' => 'Consenti il sistema di Valutazione/Recensione da parte del cliente',
	'PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN' => 'Se abiliti questa funzione, permetti ai clienti di <strong>dare delle valutazioni sui prodotti</strong> e di <strong>scrivere delle recensioni</strong> a riguardo. <br />
        In tal modo i clienti possono raccontare ad altri clienti le loro esperienze con il prodotto.<br />',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN' => 'Determina se lo sconto va applicato PRIMA (selezionato) o DOPO (non selezionato) il calcolo di imposte e spese di spedizione.',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS' => 'Obbligatorio accettare le Condizioni di Vendita?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN' => 'Seleziona se vuoi che il cliente debba accettare le condizioni di vendita prima di iscriversi.',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK' => 'Controlla Scorte di Magazzino?',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN' => 'Determina se viene fatto un controllo sulla disponibilità del prodotto in magazzino quando un utente lo aggiunge al carrello.
        Se selezionato, non consente ad un utente di aggiungere al carrello una quantità di quell\'articolo superiore alle scorte di magazzino.',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE' => 'Consenti Programma Affiliati?',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN' => 'Abilita il tracking per gli affiliati direttamente dalla vetrina del negozio. Abilitalo se hai aggiunto affiliati nel pannello di amministrazione.',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT' => 'Formato mail dell\'ordine:',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT' => 'Mail in formato testo',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML' => 'Mail in formato HTML',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN' => 'Determina come sono impostate le mail di conferma degli ordini:<br />
        <ul><li>come solo testo</li>
        <li>o in html con immagini.</li></ul>',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN' => 'Consenti l\'amministrazione direttamente dalla vetrina del negozio per gli utenti non abilitati al pannello di controllo?',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN' => 'Con questa opzione consenti l\'amministrazione agli utenti che non hanno accesso al pannello di controllo ma sono amministratori del negozio (es. Registered / Editor).',
	'PHPSHOP_ADMIN_CFG_URLSECURE' => 'SECUREURL',
	'PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN' => 'L\'URL sicura del tuo sito. (https - con lo slash alla fine!)',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE' => 'HOMEPAGE',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN' => 'Questa è la pagina che verrà caricata come predefinita.',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE' => 'ERRORPAGE',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN' => 'Questa è la pagina predefinita per la visualizzazione dei messaggi di errore.',
	'PHPSHOP_ADMIN_CFG_DEBUG' => 'DEBUG ?',
	'PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN' => 'DEBUG? Attiva l\'output del debug. Fa sì che la pagina di debug venga visualizzata in fondo ad ogni pagina. Molto utile in fase di sviluppo e collaudo dato che mostra il contenuto del carrello, i valori dei campi ecc.',
	'PHPSHOP_ADMIN_CFG_FLYPAGE' => 'FLYPAGE',
	'PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN' => 'Pagina predefinita per mostrare i dettagli del prodotto.',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE' => 'Modello per la Categoria',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN' => 'Definisce il modello predefinito per visualizzare i prodotti di una determinata categoria.<br />
        Puoi creare modelli nuovi personalizzando i file di modelli esistenti <br />
        (si trovano all\'interno della cartella <strong>COMPONENTPATH/html/templates/</strong> e iniziano con browse_)',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW' => 'Numero predefinito di prodotti per riga',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN' => 'Definisci il numero di prodotti per riga. <br />Esempio: se lo imposti a 4, il Modello di Categoria utilizzato mostrerà 4 prodotti per riga',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE' => 'Immagine "no foto"',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN' => 'Questa immagine verrà mostrata quando al prodotto non è stata associata alcuna immagine.',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION' => 'Mostra piè di pagina ',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN' => 'Visualizza un\'immagine "powered-by-VirtueMart" nel piè di pagina.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD' => 'Modulo di spedizione standard con corrieri e tariffe configurati individualmente. <strong>CONSIGLIATO !</strong>',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE' => 'Modulo di spedizione in base alla nazione Versione 1.0<br />
        Per ulteriori informazioni su questo modulo visita <a href="http://ZephWare.com">http://ZephWare.com</a><br />
        per maggiori dettagli o per entrare in contatto <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Seleziona per abilitare il modulo di spedizione per zona',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE' => 'Disabilita la selezione della modalità di spedizione. Seleziona questo se vendi prodotti scaricabili che non devono essere spediti al cliente.',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR' => 'Abilita la barra della cassa',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN' => 'Seleziona se vuoi che "la barra della cassa" venga visualizzata durante il processo di perfezionamento dell\'acquisto ( 1 - 2 - 3 - 4 con immagini).',
	'PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS' => 'Scegli la procedura di uscita alla cassa',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS' => 'Abilita i Download',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN' => 'Seleziona per abilitare la possibilità di download. Da utilizzare solo se vendi prodotti scaricabili online.',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS' => 'Stato ordine che abilita il download',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN' => 'Seleziona lo stato dell\'ordine che determina quando al cliente vien notificato tramite e-mail il link per il download.',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS' => 'Stato dell\'ordine che disabilita il download',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN' => 'Imposta lo stato dell\'ordine al quale il download per il cliente è disabilitato.',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT' => 'DOWNLOADROOT',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN' => 'Il percorso fisico ai file per il download da parte del cliente. (con lo slash alla fine!)<br>



<span class="message">Per la sicurezza del tuo negozio: se puoi, usa una cartella FUORI DALLA WEBROOT</span>',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX' => 'Limite massimo download',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN' => 'Imposta il numero massimo di download che si possono fare con un Download-ID (per ogni singolo ordine)',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE' => 'Scadenza Download',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN' => 'Imposta l\'intervallo di tempo <strong>in secondi</strong> di validità del download per il cliente.
        Questo intervallo inizia col primo download! Quando l\'intervallo scade, il download-ID viene disabilitato.<br />N.B. : 86400s=24h.',
	'PHPSHOP_COUPONS' => 'Coupon',
	'PHPSHOP_COUPONS_ENABLE' => 'Abilita l\'Uso dei Coupon',
	'PHPSHOP_COUPONS_ENABLE_EXPLAIN' => 'Se si abilita l\'Uso dei Coupon, si consente agli utenti di inserire dei numeri di codice di coupon per ricevere degli sconti sui loro acquisti.',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON' => 'Pulsante PDF',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN' => 'Mostra o Nasconde il Pulsante PDF nel Negozio',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER' => 'Bisogna accettare le condizioni del servizio ad OGNI ORDINE?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN' => 'Attiva se vuoi che un acquirente debba accettare le condizioni del servizio prima di OGNI ORDINE che invia.',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS' => 'Mostra i prodotti non in magazzino',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN' => 'Quando selezionato, i prodotti che non sono presenti a magazzino vengono visualizzati. Altrimenti questi prodotti vengono nascosti.',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE' => 'Il Negozio è offline?',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP' => 'Attivando questa opzione, il Negozio visualizzerà il Messaggio Offline.',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG' => 'Messaggio Offline',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX' => 'Prefisso Tabella per le Tabelle del Negozio',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP' => 'Questo è <strong>vm</strong> per default',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP' => 'Visualizza i pulsanti di navigazione in alto alla lista dei prodotti?',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP' => 'Attiva per visualizzare i pulsanti di navigazione pagine (prev, succ, ...) in alto alla pagina del catalogo prodotti (vengono comunque visualizzati in fondo).',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT' => 'Mostra il Numero dei Prodotti?',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP' => 'Mostra il Numero dei Prodotti presenti in una Categoria; es. Nome_Categoria (4).',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING' => 'Abilita il Ridimensionamento Dinamico delle Immagini?',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP' => 'Se selezionato, abilita il Ridimensionamento Dinamico delle Immagini.<BR> Questo significa che tutte le miniature sono ridimensionate alle dimensioni indicate sotto, attraverso le funzioni PHP GD2 (puoi verificare se hai il supporto GD2 visualizzando "Sistema" -> "Info Sistema" -> "PHP Info" -> gd).<br /> La qualità delle miniature è migliore delle immagini "ridimensionate" dal browser. Le nuove immagini generate vengono inserite nella cartella <strong>/shop_image/product/resized</strong>. Se l\'immagine è già  stata ridimensionata, questa copia verrà inviata al browser (non verrà ridimensionata nuovamente).',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH' => 'Larghezza Miniatura',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP' => 'Il valore <strong>width</strong> (larghezza) in pixel delle miniature ridimensionate.',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT' => 'Altezza Miniatura',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP' => 'Il valore <strong>height</strong> (altezza) in pixel delle miniature ridimensionate.',
	'PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION' => 'Seleziona almeno un\'opzione nella Configurazione Spedizioni!',
	'PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION' => 'Configurazione Prezzi',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL' => 'Gruppo Utenti che può visualizzare i prezzi',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP' => 'Il Gruppo Utenti selezionato e tutti i gruppi con privilegi più alti, saranno abilitati a visualizzare i prezzi dei prodotti.',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX' => 'Mostra "(incluso XX% IVA)" dove applicabile?',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP' => 'Quando selezionato, gli utenti vedranno il testo "(incluso XX% IVA)" per i prezzi visualizzati IVA inclusa.',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL' => 'Mostra l\'etichetta prezzo per imballaggio?',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP' => 'Quando selezionato, l\'etichetta prezzo è derivata dall\'unità del prodotto e dal valore dell\'imballaggio:<br />
        <strong>Prezzo per Unità (10 pezzi)</strong><br />
        Quando non selezionato, l\'etichetta prezzo è quella usuale: <strong>Prezzo:  xx.xx</strong>',
	'PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS' => 'ulteriori Impostazioni Base',
	'PHPSHOP_ADMIN_CFG_CORE_SETTINGS' => 'Impostazioni Base',
	'PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES' => 'Opzioni Frontend',
	'PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION' => 'Configurazione Tasse',
	'PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS' => 'Impostazioni Registrazione Utente',
	'PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION' => 'Registrazione utente abilitata?',
	'PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION' => 'Richiesta attivazione nuovi account?',
	'VM_FIELDMANAGER_NAME' => 'Nome campo',
	'VM_FIELDMANAGER_TITLE' => 'Titolo campo',
	'VM_FIELDMANAGER_TYPE' => 'Tipo campo',
	'VM_FIELDMANAGER_REQUIRED' => 'Richiesto',
	'VM_FIELDMANAGER_PUBLISHED' => 'Pubblicato',
	'VM_FIELDMANAGER_SHOW_ON_REGISTRATION' => 'Mostra nel modulo di registrazione',
	'VM_FIELDMANAGER_SHOW_ON_ACCOUNT' => 'Mostra nella gestione account',
	'VM_USERFIELD_FORM_LBL' => 'Aggiungi/Modifica Campi Utente',
	'VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL' => 'Ordinamento predefinito prodotti',
	'VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP' => 'Definisce per quale campo i prodotti devono essere ordinati, di base, nelle pagina di navigazione',
	'VM_BROWSE_ORDERBY_FIELDS_LBL' => 'Campi "Ordina" disponibili ',
	'VM_BROWSE_ORDERBY_FIELDS_LBL_TIP' => 'Scegli i campi "Ordina" per le pagine di navigazione. Ognuno di essi definisce un metodo di ordinamento per i prodotti. Se vengono tutti deselezionati, l\'opzione per l\'ordinamento non verrà visualizzata.',
	'VM_GENERALLY_PREVENT_HTTPS' => 'Evitare connessioni https generiche?',
	'VM_GENERALLY_PREVENT_HTTPS_TIP' => 'Quando selezionato, il cliente viene reindirizzato all\'indirizzo <strong>http</strong> quando non sta navigando in quelle aree del negozio, dove è obbligatorio usare https.',
	'VM_MODULES_FORCE_HTTPS' => 'Aree del negozio che devono usare https',
	'VM_MODULES_FORCE_HTTPS_TIP' => 'Qui puoi specificare una lista di moduli (Vedi "Amministrazione" => "Lista dei Moduli"), separati da una virgola, che useranno la connessione https.',
	'VM_SHOW_REMEMBER_ME_BOX' => 'Visualizza l\'opzione "Ricordami" sul login?',
	'VM_SHOW_REMEMBER_ME_BOX_TIP' => 'Quando selezionato, viene mostrato l\'opzione "ricordami" durante la procedura di uscita alla cassa. Non è raccomandato quanto si usa SSL condiviso, perchè il cliente  potrebbe scegliere di non utilizzare un cookie utente - ma questi cookie utente sono richiesti per mantenere l\'utente loggato in entrambi i domini.',
	'VM_ADMIN_CFG_REVIEW_MINIMUM_COMMENT_LENGTH' => 'Lunghezza Minima Commento',
	'VM_ADMIN_CFG_REVIEW_MINIMUM_COMMENT_LENGTH_TIP' => 'Questo è il numero di caratteri minimo che deve essere scritto da un cliente per inviare la recensione.',
	'VM_ADMIN_CFG_REVIEW_MAXIMUM_COMMENT_LENGTH' => 'Lunghezza Massima Commento',
	'VM_ADMIN_CFG_REVIEW_MAXIMUM_COMMENT_LENGTH_TIP' => 'Questo è il numero di caratteri massimo che può essere scritto da un cliente in una recensione.',
	'VM_ADMIN_SHOW_EMAILFRIEND' => 'Mostra il link "Segnala a un amico"?',
	'VM_ADMIN_SHOW_EMAILFRIEND_TIP' => 'Quando abilitato, viene visualizzato un piccolo link che permette al cliente di inviare una email di segnalazione per uno specifico prodotto.',
	'VM_ADMIN_SHOW_PRINTICON' => 'Mostra il link "Versione Stampabile"?',
	'VM_ADMIN_SHOW_PRINTICON_TIP' => 'Quanto abilitato, viene visualizzato un piccolo link che apre la pagina corrente in una finestra popup, in versione stampabile.',
	'VM_REVIEWS_AUTOPUBLISH' => 'Auto-Pubblica Recensioni?',
	'VM_REVIEWS_AUTOPUBLISH_TIP' => 'Se selezionato, le recensioni vengon pubblicate automaticamente dopo essere state spedite. Altrimenti, l\'amministratore, deve approvarle e pubblicarle.',
	'VM_ADMIN_CFG_PROXY_SETTINGS' => 'Impostazioni Proxy Globali',
	'VM_ADMIN_CFG_PROXY_URL' => 'URL del server proxy',
	'VM_ADMIN_CFG_PROXY_URL_TIP' => 'Esempio: <strong>http://10.42.21.1</strong>.<br />
Lascia vuoto se non sei sicuro.</strong> 
Questo valore verrà utilizzato per connettersi ad internet dal server del negozio (es. per recuperare le tariffe spedizione da UPS/USPS).',
	'VM_ADMIN_CFG_PROXY_PORT' => 'Porta proxy',
	'VM_ADMIN_CFG_PROXY_PORT_TIP' => 'La porta utilizzata per comunicare con il server proxy (solitamente <b>80</b> o <b>8080</b>).',
	'VM_ADMIN_CFG_PROXY_USER' => 'Nome utente proxy',
	'VM_ADMIN_CFG_PROXY_USER_TIP' => 'Se il proxy richiede l\'autenticazione inserisci qui il nome utente da utilizzare.',
	'VM_ADMIN_CFG_PROXY_PASS' => 'Password proxy',
	'VM_ADMIN_CFG_PROXY_PASS_TIP' => 'Se il proxy richiede l\'autenticazione inserisci qui la password da utilizzare.',
	'VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO' => 'Visualizza una breve nota sulle "Condizioni di restituzione" nella pagina di conferma dell\'ordine?',
	'VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP' => 'In molti Paesi europei è obbligatorio informare i clienti sulle condizioni di restituzione ed annullamento degli ordini. Per questo motivo dovrebbe essere abilitata nella maggior parte dei casi.',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT' => 'Testo informazioni legali (versione breve).',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP' => 'Questo testo spiega brevemente ai clienti le condizioni di restituzione ed annullamento degli ordini. Viene visualizzato nell\'ultima pagina della cassa, subito sopra al pulsante "Conferma Ordine".',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK' => 'Versione dettagliata delle condizioni di restituzione (link ad un contenuto).',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP' => 'Aggiungi un contenuto con i dettagli delle condizioni di restituzione ed annullamento degli ordini, quindi lo potrai selezionare qui.',
	'VM_SELECT_THEME' => 'Seleziona il tema per il tuo negozio',
	'VM_SELECT_THEME_TIP' => 'I temi permettono di personalizzare il design e lo stile del tuo negozio.<br />Se non sono presenti altri temi oltre a "default" significa che non ne hai installati.',
	'VM_CFG_CONTENT_PLUGINS_ENABLE' => 'Abilita i mambot/plugin contenuto nelle descrizioni?',
	'VM_CFG_CONTENT_PLUGINS_ENABLE_TIP' => 'Se abilitato, le descrizioni di prodotti e categorie saranno analizzati da tutti i mambot/plugin contenuto pubblicati.',
	'VM_CFG_CURRENCY_MODULE' => 'Seleziona un modulo di conversione valuta.',
	'VM_CFG_CURRENCY_MODULE_TIP' => 'Consente di selezionare un determinato modulo di conversione valuta. Questi moduli recuperano le tariffe di cambio da un server e convertono una valuta in un\'altra.',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_EU' => 'Modalità Unione Europea',
	'VM_ADMIN_CFG_DOWNLOAD_KEEP_STOCKLEVEL' => 'Mantieni il livello di magazzino all\'acquisto?',
	'VM_ADMIN_CFG_DOWNLOAD_KEEP_STOCKLEVEL_TIP' => 'Se abilitato, il livello di magazzino per un prodotto scaricabile non viene abbassato anche se esso è stato acquistato da clienti.',
	'VM_USERGROUP_FORM_LBL' => 'Aggiungi/Modifica un Gruppo Utenti',
	'VM_USERGROUP_NAME' => 'Nome Gruppo Utenti',
	'VM_USERGROUP_LEVEL' => 'Livello Gruppo Utenti',
	'VM_USERGROUP_LEVEL_TIP' => 'Importante! Un numero maggiore significa <b>meno<b> permessi. Il gruppo <b>admin</b> (amministratori) è <em>livello 0</em>, storeadmin (amministratori negozio) è livello 250, users (utenti) livello 500.',
	'VM_USERGROUP_LIST_LBL' => 'Lista Gruppi Utenti',
	'VM_ADMIN_CFG_COOKIE_CHECK' => 'Abilitare il controllo cookie?',
	'VM_ADMIN_CFG_COOKIE_CHECK_EXPLAIN' => 'Se abilitato, VirtueMart controlla se il browser del cliente accetta i cookie o meno. Questo è user-friendly, ma può avere conseguenze negative sulla scansione del tuo negozio da parte dei motori di ricerca.',
	'VM_CFG_REGISTRATION_TYPE' => 'Tipologia di Registrazione Utenti',
	'VM_CFG_REGISTRATION_TYPE_TIP' => 'Scegli la tipologia di registrazione utenti per il tuo negozio!<br />
<strong>Registrazione Normale</strong><br />
Questo è il tipo di registrazione standard dove i clienti devono registrarsi e scegliere un nome utente e una password.<br /><br />
<strong>Registrazione Silenziosa</strong><br />
\'Registrazione Silenziosa\' significa che i clienti non devono scegliere nome utente e password, che vengono creati automaticamente durante la registrazione ed inviati all\'indirizzo email fornito.
<br /><br />
<strong>Registrazione Opzionale</strong><br />
\'Registrazione Opzionale\' consente ai clienti di decidere se vogliono creare un account oppure no. Se il cliente vuole creare un account, dovrà scegliere un nome utente e una password.
<br /><br />
<strong>Nessuna Registrazione</strong><br />
Con questo tipo di registrazione, i clienti non devono e non possono registrare un account.',
	'VM_CFG_REGISTRATION_TYPE_NORMAL_REGISTRATION' => 'Registrazione Normale',
	'VM_CFG_REGISTRATION_TYPE_SILENT_REGISTRATION' => 'Registrazione Silenziosa',
	'VM_CFG_REGISTRATION_TYPE_OPTIONAL_REGISTRATION' => 'Registrazione Opzionale',
	'VM_CFG_REGISTRATION_TYPE_NO_REGISTRATION' => 'Nessuna Registrazione',
	'VM_ADMIN_CFG_FEED_CONFIGURATION' => 'Configurazione Feed RSS',
	'VM_ADMIN_CFG_FEED_ENABLE' => 'Abilita feed dei prodotti',
	'VM_ADMIN_CFG_FEED_ENABLE_TIP' => 'Se abilitato, i clienti potranno sottoscrivere un feed che fornisce gli ultimi prodotti (tutti o di una certa categoria) del tuo negozio.',
	'VM_ADMIN_CFG_FEED_CACHE' => 'Impostazioni Cache Feed RSS',
	'VM_ADMIN_CFG_FEED_CACHE_ENABLE' => 'Abilitare la cache?',
	'VM_ADMIN_CFG_FEED_CACHETIME' => 'Tempo della cache (secondi)',
	'VM_ADMIN_CFG_FEED_CACHE_TIP' => 'Utilizzare la cache velocizza la distribuzione dei feed e riduce il carico del server, perchè il feed viene creato una volta sola e salvato in un file.',
	'VM_ADMIN_CFG_FEED_SHOWPRICES' => 'Includere il prezzo nella descrizione del prodotto?',
	'VM_ADMIN_CFG_FEED_SHOWPRICES_TIP' => 'Se abilitato, il prezzo standard del prodotto verrà aggiunto alla sua descrizione.',
	'VM_ADMIN_CFG_FEED_SHOWDESC' => 'Includere la descrizione del prodotto?',
	'VM_ADMIN_CFG_FEED_SHOWDESC_TIP' => 'Se abilitato, la descrizione del prodotto verrà inclusa nel feed.',
	'VM_ADMIN_CFG_FEED_SHOWIMAGES' => 'Includere immagini nel feed?',
	'VM_ADMIN_CFG_FEED_SHOWIMAGES_TIP' => 'Se abilitato, le immagini miniature verranno incluse nel feed.',
	'VM_ADMIN_CFG_FEED_DESCRIPTION_TYPE' => 'Tipo di descrizione prodotto',
	'VM_ADMIN_CFG_FEED_DESCRIPTION_TYPE_TIP' => 'Seleziona il tipo di descrizione del prodotto che verrà inclusa nel feed.',
	'VM_ADMIN_CFG_FEED_LIMITTEXT' => 'Limitare la descrizione?',
	'VM_ADMIN_CFG_FEED_MAX_TEXT_LENGTH' => 'Lunghezza massima descrizione',
	'VM_ADMIN_CFG_MAX_TEXT_LENGTH_TIP' => 'Questa è la lunghezza massima della descrizione del prodotto, per ogni oggetto.',
	'VM_ADMIN_CFG_FEED_TITLE_TIP' => 'Titolo del feed (il segnaposto {storename} indica il nome del negozio)',
	'VM_ADMIN_CFG_FEED_TITLE_CATEGORIES_TIP' => 'Titolo dei feed di categoria ({catname} è il segnaposto per il nome della categoria, {storename} indica il nome del negozio)',
	'VM_ADMIN_CFG_FEED_TITLE' => 'Titolo del feed',
	'VM_ADMIN_CFG_FEED_TITLE_CATEGORIES' => 'Titolo dei feed di categoria',
	'VM_ADMIN_SECURITY' => 'Sicurezza',
	'VM_ADMIN_SECURITY_SETTINGS' => 'Impostazioni Sicurezza',
	'VM_CFG_ENABLE_FEATURE' => 'Abilita questa funzionalità',
	'VM_CFG_CHECKOUT_SHOWSTEP_TIP' => 'Qui puoi abilitare, disabilitare o riordinare alcuni passaggi dell\'uscita alla cassa. Puoi mostrare più passaggi nella stessa pagina dando ad essi lo stesso numero.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_FLEX' => 'Spedizione Flessibile. Spese di spedizione fisse fino al valore base fissato, oppure una percentuale della vendita totale se superiore al valore base.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_SHIPVALUE' => 'Spedizione basata sul totale ordine. Spese di spedizione fisse basate su valori immessi nella configurazione.',
	'VM_CFG_CHECKOUT_SHOWSTEPINCHECKOUT' => 'Mostra nel passo: %s dell\'uscita alla cassa',
	'VM_ADMIN_ENCRYPTION_KEY' => 'Chiave Crittografica',
	'VM_ADMIN_ENCRYPTION_KEY_TIP' => 'Utilizzata per memorizzare e recuperare in modo sicuro i dati sensibili (come informazioni sulla carta di credito) crittografati nel database.',
	'VM_ADMIN_STORE_CREDITCARD_DATA' => 'Memorizzare i dati delle carte di credito?',
	'VM_ADMIN_STORE_CREDITCARD_DATA_TIP' => 'VirtueMart memorizza i dati delle carte di credito dei clienti nel database, in modo crittografato. Questo avviene anche se i dati della carta di credito vengono elaborati da un server esterno. <strong>Se non necessiti di elaborare i dati della carta di credito manualmente, dopo l\'inoltro dell\'ordine, dovresti disattivare questa opzione.</strong>',
	'VM_USERFIELDS_URL_ONLY' => 'Solo URL',
	'VM_USERFIELDS_HYPERTEXT_URL' => 'Ipertesto e URL',
	'VM_FIELDS_TEXTFIELD' => 'Campo Testo',
	'VM_FIELDS_CHECKBOX_SINGLE' => 'Casella di controllo (singola)',
	'VM_FIELDS_CHECKBOX_MULTIPLE' => 'Casella di controllo (multipla)',
	'VM_FIELDS_DATE' => 'Data',
	'VM_FIELDS_DROPDOWN_SINGLE' => 'Menu a discesa (selezione sigola)',
	'VM_FIELDS_DROPDOWN_MULTIPLE' => 'Menu a discesa (selezione multipla)',
	'VM_FIELDS_EMAIL' => 'Indirizzo Email',
	'VM_FIELDS_EUVATID' => 'Partita IVA europea (EU VAT ID)',
	'VM_FIELDS_EDITORAREA' => 'Area editor di testo',
	'VM_FIELDS_TEXTAREA' => 'Area testo',
	'VM_FIELDS_RADIOBUTTON' => 'Pulsante di scelta',
	'VM_FIELDS_WEBADDRESS' => 'Indirizzo Web',
	'VM_FIELDS_DELIMITER' => '=== Delimitatore set di campi ===',
	'VM_FIELDS_NEWSLETTER' => 'Sottoscrizione Newsletter',
	'VM_USERFIELDS_READONLY' => 'Sola lettura',
	'VM_USERFIELDS_SIZE' => 'Dimensione campo',
	'VM_USERFIELDS_MAXLENGTH' => 'Lunghezza massima',
	'VM_USERFIELDS_DESCRIPTION' => 'Descrizione, suggerimento del campo: testo o HTML',
	'VM_USERFIELDS_COLUMNS' => 'Colonne',
	'VM_USERFIELDS_ROWS' => 'Righe',
	'VM_USERFIELDS_EUVATID_MOVESHOPPER' => 'Sposta il cliente nel gruppo utente seguente dopo aver verificato con successo la partita IVA europea (EU VAT ID)',
	'VM_USERFIELDS_ADDVALUES_TIP' => 'Utilizza la tabella sottostante per aggiungere nuovi valori.',
	'VM_ADMIN_CFG_DISPLAY' => 'Visualizzazione',
	'VM_ADMIN_CFG_LAYOUT' => 'Disposizione',
	'VM_ADMIN_CFG_THEME_SETTINGS' => 'Impostazioni Tema',
	'VM_ADMIN_CFG_THEME_PARAMETERS' => 'Parametri',
	'VM_ADMIN_ENCRYPTION_FUNCTION' => 'Funzione di crittografia',
	'VM_ADMIN_ENCRYPTION_FUNCTION_TIP' => 'Qui puoi selezionare la funzione di crittografia utilizzata per criptare le informazioni sensibili prima di essere memorizzate nel database. AES_ENCRYPT è raccomandato, perchè molto sicuro. ENCODE non fornisce una vera crittografia.',
	'SAVE_PERMISSIONS' => 'Salva Permessi',
	'VM_ADMIN_THEME_CFG_NOT_EXISTS' => 'Il file di configurazione per questo template non esiste e non può essere creato. Configurazione impossibile.',
	'VM_ADMIN_THEME_NOT_EXISTS' => 'Il tema "{theme}" non esiste.',
	'VM_USERFIELDS_ADDVALUE' => 'Aggiungi un Valore',
	'VM_USERFIELDS_TITLE' => 'Titolo',
	'VM_USERFIELDS_VALUE' => 'Valore',
	'VM_USER_FORM_LASTVISIT_NEVER' => 'Mai',
	'VM_USER_FORM_TAB_GENERALINFO' => 'Informazioni Generali Utente',
	'VM_USER_FORM_LEGEND_USERDETAILS' => 'Dettagli Utente',
	'VM_USER_FORM_LEGEND_PARAMETERS' => 'Parametri',
	'VM_USER_FORM_LEGEND_CONTACTINFO' => 'Informazioni Contatto',
	'VM_USER_FORM_NAME' => 'Nome',
	'VM_USER_FORM_USERNAME' => 'Nome Utente',
	'VM_USER_FORM_EMAIL' => 'E-mail',
	'VM_USER_FORM_NEWPASSWORD' => 'Nuova Password',
	'VM_USER_FORM_VERIFYPASSWORD' => 'Verifica Password',
	'VM_USER_FORM_GROUP' => 'Gruppo',
	'VM_USER_FORM_BLOCKUSER' => 'Blocca Utente',
	'VM_USER_FORM_RECEIVESYSTEMEMAILS' => 'Riceve E-mail di Sistema',
	'VM_USER_FORM_REGISTERDATE' => 'Data Registrazione',
	'VM_USER_FORM_LASTVISITDATE' => 'Data Ultima Visita',
	'VM_USER_FORM_NOCONTACTDETAILS_1' => 'Nessun Contatto collegato a questo Utente:',
	'VM_USER_FORM_NOCONTACTDETAILS_2' => 'Vedi \'Componenti -> Contatti -> Gestione Contatti\' per dettagli.',
	'VM_USER_FORM_CONTACTDETAILS_NAME' => 'Nome',
	'VM_USER_FORM_CONTACTDETAILS_POSITION' => 'Posizione',
	'VM_USER_FORM_CONTACTDETAILS_TELEPHONE' => 'Telefono',
	'VM_USER_FORM_CONTACTDETAILS_FAX' => 'Fax',
	'VM_USER_FORM_CONTACTDETAILS_CHANGEBUTTON' => 'Cambia Dettagli Contatto',
	'VM_ADMIN_CFG_LOGFILE_HEADER' => 'Configurazione File Registro',
	'VM_ADMIN_CFG_LOGFILE_ENABLED' => 'Abilita Registro?',
	'VM_ADMIN_CFG_LOGFILE_ENABLED_EXPLAIN' => 'Se disabilitato, verrà usato un un registratore "nullo", in modo che il file vmFileLogger possa essere comunque invocato senza errori.',
	'VM_ADMIN_CFG_LOGFILE_NAME' => 'Nome File Registro',
	'VM_ADMIN_CFG_LOGFILE_NAME_EXPLAIN' => 'Percorso al file di registro. Deve essere raggiungibile e scrivibile.',
	'VM_ADMIN_CFG_LOGFILE_LEVEL' => 'Livello Registro',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_EXPLAIN' => 'I messaggi sopra questo livello di priorità verranno ignorati.',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_TIP' => 'TIP (CONSIGLIO) - 8',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_DEBUG' => 'DEBUG - 7',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_INFO' => 'INFORMAZIONE - 6',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_NOTICE' => 'AVVISO - 5',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_WARNING' => 'AVVERTIMENTO - 4',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_ERR' => 'ERRORE - 3',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_CRIT' => 'CRITICO - 2',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_ALERT' => 'ALLARME - 1',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_EMERG' => 'EMERGENZA - 0',
	'VM_ADMIN_CFG_LOGFILE_FORMAT' => 'Formato File Registro',
	'VM_ADMIN_CFG_LOGFILE_FORMAT_EXPLAIN' => 'Formato di registrazione delle voci di riga.',
	'VM_ADMIN_CFG_LOGFILE_FORMAT_EXPLAIN_EXTRA' => 'I campi di formato registro possono includere i seguenti tag: %{timestamp} %{ident} [%{priority}] [%{remoteip}] [%{username}] %{message} %{vmsessionid}.',
	'VM_ADMIN_CFG_LOGFILE_ERROR' => 'Impossibile creare o accedere al file di registro. Contatta l\'amministrazione del sito o del sistema.',
	'VM_ADMIN_CFG_DEBUG_MODE_ENABLED' => 'Abilita modalità DEBUG?',
	'VM_ADMIN_CFG_DEBUG_IP_ENABLED' => 'Limita ad un indirizzo IP?',
	'VM_ADMIN_CFG_DEBUG_IP_ENABLED_EXPLAIN' => 'Limita l\'output di debug, ad un client con uno specifico indirizzo IP.',
	'VM_ADMIN_CFG_DEBUG_IP_ADDRESS' => 'Indirizzo IP client',
	'VM_ADMIN_CFG_DEBUG_IP_ADDRESS_EXPLAIN' => 'Se abiliti questa opzione ed inserisci qui un indirizzo IP, l\'output di debug verrà abilitato SOLO per il client con questo indirizzo IP.  Gli altri client non vedranno alcun output di debug.',
	'VM_FIELDMANAGER_SHOW_ON_SHIPPING' => 'Mostra nel modulo spedizione',
	'VM_USER_NOSHIPPINGADDR' => 'Nessun indirizzo spedizione.',
	'VM_UPDATE_CHECK_LBL' => 'Controllo Aggiornamenti VirtueMart',
	'VM_UPDATE_CHECK_VERSION_INSTALLED' => 'Versione VirtueMart installata qui',
	'VM_UPDATE_CHECK_LATEST_VERSION' => 'Ultima Versione VirtueMart',
	'VM_UPDATE_CHECK_CHECKNOW' => 'Controlla ora!',
	'VM_UPDATE_CHECK_DLUPDATE' => 'Scarica Aggiornamento',
	'VM_UPDATE_CHECK_CHECKING' => 'Controllo in corso...',
	'VM_UPDATE_CHECK_CHECK' => 'Controlla',
	'VM_UPDATE_NOTDOWNLOADED' => 'Impossibile scaricare il Pacchetto Aggiornamento.',
	'VM_UPDATE_PREVIEW_LBL' => 'Anteprima Aggiornamento VirtueMart',
	'VM_UPDATE_WARNING_TITLE' => 'Avvertenze Generali',
	'VM_UPDATE_WARNING_TEXT' => 'L\'installazione di un Aggiornamento per VirtueMart utilizzando questo pacchetto può danneggiare il tuo sito se hai precedentemente modificato alcuni file del componente VirtueMart. Il processo di aggiornamento sovrascriverà tutti i file qui elencati - non applica semplicemente piccole modifiche (diff), ma sostituisce i file esistenti con i nuovi. Se hai modificato manualmente i file di VirtueMart, potresti avere problemi di inconsistenza e dipendenza da classi/funzioni mancanti.',
	'VM_UPDATE_PATCH_DETAILS' => 'Dettagli Aggiornamento',
	'VM_UPDATE_PATCH_DESCRIPTION' => 'Descrizione',
	'VM_UPDATE_PATCH_DATE' => 'Data Rilascio',
	'VM_UPDATE_PATCH_FILESTOUPDATE' => 'File da aggiornare',
	'VM_UPDATE_PATCH_STATUS' => 'Stato',
	'VM_UPDATE_PATCH_WRITABLE' => 'Scrivibile',
	'VM_UPDATE_PATCH_UNWRITABLE' => 'File/Cartella non scrivibile',
	'VM_UPDATE_PATCH_QUERYTOEXEC' => 'Query da eseguire sul Database',
	'VM_UPDATE_PATCH_CONFIRM_TEXT' => 'Ho letto le <a href="#warning">Avvertenze</a> e sono sicuro di applicare ora il Pacchetto Aggiornamento alla mia installazione VirtueMart.',
	'VM_UPDATE_PATCH_APPLY' => 'Applica Aggiornamento',
	'VM_UPDATE_PATCH_ERR_UNWRITABLE' => 'Non tutti i file/cartelle da aggiornare sono scrivibili. Prima correggi i permessi.',
	'VM_UPDATE_PATCH_PLEASEMARK' => 'Seleziona la casella di conferma prima di applicare l\'aggiornamento.',
	'VM_UPDATE_RESULT_TITLE' => 'Versione Attualmente Installata',
	'VM_FIELDS_CAPTCHA' => 'Campo Captcha (usando com_securityimages)',
	'VM_FIELDS_AGEVERIFICATION' => 'Controllo Età (campi di selezione data)',
	'VM_FIELDS_AGEVERIFICATION_MINIMUM' => 'Specifica l\'età minima'
); $VM_LANG->initModule( 'admin', $langvars );
?>
