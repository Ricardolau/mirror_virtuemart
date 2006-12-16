<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
*
* @version $Id: admin.martlanguages.php 466 2006-11-07 20:40:22 +0100 (Di, 07 Nov 2006) soeren_nb $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2005 Soeren Eberhardt. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
class vmLanguage extends vmAbstractLanguage {
	var $_PHPSHOP_MENU = 'Menu';
	var $_PHPSHOP_CATEGORY = 'Categoria';
	var $_PHPSHOP_CATEGORIES = 'Categorie';
	var $_PHPSHOP_SELECT_CATEGORY = 'Seleziona una Categoria:';
	var $_PHPSHOP_ADMIN = 'Amministrazione';
	var $_PHPSHOP_PRODUCT = 'Prodotto';
	var $_PHPSHOP_LIST = 'Lista';
	var $_PHPSHOP_ALL = 'Tutti';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Tutti i prodotti';
	var $_PHPSHOP_VIEW = 'Visualizza';
	var $_PHPSHOP_SHOW = 'Mostra';
	var $_PHPSHOP_ADD = 'Aggiungi';
	var $_PHPSHOP_UPDATE = 'Aggiorna';
	var $_PHPSHOP_DELETE = 'Cancella';
	var $_PHPSHOP_SELECT = 'Seleziona';
	var $_PHPSHOP_SUBMIT = 'Invia';
	var $_PHPSHOP_RANDOM = 'Prodotti a Caso';
	var $_PHPSHOP_LATEST = 'Ultimi Prodotti';
	var $_PHPSHOP_HOME_TITLE = 'Home';
	var $_PHPSHOP_CART_TITLE = 'Carrello';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Cassa';
	var $_PHPSHOP_LOGIN_TITLE = 'Login';
	var $_PHPSHOP_LOGOUT_TITLE = 'Esci';
	var $_PHPSHOP_BROWSE_TITLE = 'Vedi';
	var $_PHPSHOP_SEARCH_TITLE = 'Cerca';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Gestione Account';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Navigazione';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Reparto';
	var $_PHPSHOP_INFO = 'Informazioni';
	var $_PHPSHOP_BROWSE_LBL = 'Vedi';
	var $_PHPSHOP_PRODUCTS_LBL = 'Prodotti';
	var $_PHPSHOP_PRODUCT_LBL = 'Prodotto';
	var $_PHPSHOP_SEARCH_LBL = 'Cerca';
	var $_PHPSHOP_FLYPAGE_LBL = 'Dettagli';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Cerca prodotto';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Nome Prodotto';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Categoria Prodotto';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Descrizione Prodotto';
	var $_PHPSHOP_CART_SHOW = 'Mostra Carrello';
	var $_PHPSHOP_CART_ADD_TO = 'Aggiungi';
	var $_PHPSHOP_CART_NAME = 'Nome';
	var $_PHPSHOP_CART_SKU = 'Codice';
	var $_PHPSHOP_CART_PRICE = 'Prezzo';
	var $_PHPSHOP_CART_QUANTITY = 'Quantità';
	var $_PHPSHOP_CART_SUBTOTAL = 'Subtotale';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Aggiungi un nuovo';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Indirizzo spedizione';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Nessun risultato per la tua ricerca.<br />';
	var $_PHPSHOP_PRICE_LABEL = 'Prezzo: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Aggiungi';
	var $_PHPSHOP_NO_CUSTOMER = 'Non hai mai acquistato. Inserisci le informazioni per la fatturazione.';
	var $_PHPSHOP_DELETE_MSG = 'Vuoi davvero cancellare questo record?';
	var $_PHPSHOP_THANKYOU = 'Grazie per l´ordine.';
	var $_PHPSHOP_NOT_SHIPPED = 'Non ancora spedito';
	var $_PHPSHOP_EMAIL_SENDTO = 'Un email di conferma è stata spedita a';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Non c´è alcun utente da aggiungere alla lista com_phpshop';
	var $_PHPSHOP_ERROR = 'ERRORE';
	var $_PHPSHOP_MOD_NOT_REG = 'Modulo Non Registrato.';
	var $_PHPSHOP_MOD_ISNO_REG = 'non è un modulo phpShop registrato.';
	var $_PHPSHOP_MOD_NO_AUTH = 'Non hai il permesso di accedere a questo modulo.';
	var $_PHPSHOP_PAGE_404_1 = 'La Pagina Non Esiste';
	var $_PHPSHOP_PAGE_404_2 = 'Il file non esiste. Non riesco a trovare il file:';
	var $_PHPSHOP_PAGE_403 = 'Diritti di Accesso Insufficienti';
	var $_PHPSHOP_FUNC_NO_EXEC = 'Non hai i permessi per eseguire ';
	var $_PHPSHOP_FUNC_NOT_REG = 'Funzione Non Registrata';
	var $_PHPSHOP_FUNC_ISNO_REG = ' non è una funzione valida di MOS_com_phpShop.';
	var $_PHPSHOP_ADMIN_MOD = 'Amministrazione';
	var $_PHPSHOP_USER_LIST_MNU = 'Lista degli Utenti';
	var $_PHPSHOP_USER_LIST_LBL = 'Lista Utenti';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Nome Utente';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Nome Completo';
	var $_PHPSHOP_USER_LIST_GROUP = 'Gruppo';
	var $_PHPSHOP_USER_FORM_MNU = 'Aggiungi Utente';
	var $_PHPSHOP_USER_FORM_LBL = 'Aggiungi/Modifica Informazioni Utente';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Informazioni per la Fatturazione';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Indirizzi per la Spedizione';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Aggiungi Indirizzo';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'Nessun indirizzo per la spedizione.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Indirizzo Nickname';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Nome';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Cognome';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Secondo Nome';
	var $_PHPSHOP_USER_FORM_TITLE = 'Titolo';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Nome Utente';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Password';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Conferma Password';
	var $_PHPSHOP_USER_FORM_PERMS = 'Permessi';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Numero Cliente / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Società';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Indirizzo 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Indirizzo 2';
	var $_PHPSHOP_USER_FORM_CITY = 'Città';
	var $_PHPSHOP_USER_FORM_STATE = 'Provincia';
	var $_PHPSHOP_USER_FORM_ZIP = 'CAP';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Nazione';
	var $_PHPSHOP_USER_FORM_PHONE = 'Telefono';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Cellulare';
	var $_PHPSHOP_USER_FORM_FAX = 'Fax';
	var $_PHPSHOP_USER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Lista dei Moduli';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Lista Moduli';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Nome Modulo';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Permessi Modulo';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Funzioni';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Ordine Lista';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Aggiungi Modulo';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Informazioni Modulo';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Etichetta Modulo (per Topmenu)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Nome Modulo';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Permessi Modulo';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Intestazione Modulo';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Piè di pagina Modulo';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Mostra Modulo nel menu Admin?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Ordine di visualizzazione';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Descrizione Modulo';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'Codice Lingua';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'File Lingua';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Lista delle Funzioni';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Lista Funzioni';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Nome Funzione';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Nome Classe';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Metodo Classe';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Permessi';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Aggiungi Funzione';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Informazioni Funzione';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Nome Funzione';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Nome Classe';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Metodo Classe';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Permessi Funzione';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Descrizione Funzione';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Lista delle Valute';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Lista Valute';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'Aggiungi Valuta';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Nome Valuta';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'Codice Valuta';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Lista delle Nazioni';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Lista Nazioni';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Aggiungi Nazione';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Nome Nazione';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Codice Nazione (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Codice Nazione (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Lista Province';
	var $_PHPSHOP_STATE_LIST_LBL = 'Lista Province per:';
	var $_PHPSHOP_STATE_LIST_ADD = 'Aggiungi/Aggiorna Provincia';
	var $_PHPSHOP_STATE_LIST_NAME = 'Nome Provincia';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'Sigla Provincia (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'Sigla Provincia (2)';
	var $_PHPSHOP_ADDRESS = 'Indirizzo';
	var $_PHPSHOP_CONTINUE = 'Continua';
	var $_PHPSHOP_EMPTY_CART = 'Il carrello è vuoto.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Pinga il Server InterShipper';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'InterShipper-Server Ping ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'Ping a InterShipper Fallito';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'Ping a InterShipper Avvenuto';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Carrier';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Tempo di<br />Risposta';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'sec.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Lista Metodi di Spedizione';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Metodi di Spedizione Attivi';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Metodi di Spedizione';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Attivo';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Costo di Gestione';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Tempistica';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'costo fisso';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'percentuale';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'giorni';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Carico Pesante';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Configura i Tipi di Spedizione';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Aggiungi un Tipo di Spedizione';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Configura un Tipo di Spedizione';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Aggiorna';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Tipo di Spedizione';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Attiva';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Costo di Gestione';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Tempo di Approntamento e Spedizione';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'costo fisso';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'percentuale';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'giorni';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Carico Pesante';
	var $_PHPSHOP_ORDER_MOD = 'Ordina';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Conferma Ordine';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Annulla Ordine';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Stampa Ordine';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Cancella Ordine';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Lista degli Ordini';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Lista Ordine';
	var $_PHPSHOP_ORDER_LIST_ID = 'Numero Ordine';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Data Ordine';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Ultima Modifica';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Stato';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'SubTotale';
	var $_PHPSHOP_ORDER_ITEM = 'Elementi in Ordine';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Ordine di Acquisto';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Numero Ordine';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Data Ordine';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Stato Ordine';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Informazioni Cliente';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Informazioni per la Fatturazione';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Informazioni di Spedizione';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Fattura a';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Spedizione a';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Nome';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Azienda';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Indirizzo 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Indirizzo 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Città';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Provincia';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'CAP';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Nazione';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Tel.';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Fax';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'Email';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Materiali in Ordine';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Quantità';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Qtà';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'COD.';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Prezzo';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Totale';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'SubTotale';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'Totale IVA';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Spedizione';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'IVA Spedizione';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Metodo di Pagamento';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Nome Account';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Numero Account';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Data Scadenza';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Registro dei Pagamenti';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Informazioni di Spedizione';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Informazioni di Pagamento';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Corriere';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Tipo Spedizione';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Data Spedizione';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Prezzo Spedizione';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Lista dei Tipi di Stato Ordine';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Aggiungi un Tipo di Stato Ordine';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Codice Stato Ordine';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Nome Stato Ordine';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Stato Ordine';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Codice Stato Ordine';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Nome Stato Ordine';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Lista Ordine';
	var $_PHPSHOP_PRODUCT_MOD = 'Prodotti';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Prodotto Corrente';
	var $_PHPSHOP_CURRENT_ITEM = 'Articolo Corrente';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Magazzino Prodotti';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Vedi Magazzino';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Prezzo';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Numero';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Peso';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Lista dei Prodotti';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Lista Prodotti';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Nome Prodotto';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'COD.';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Pubblica';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Cerca prodotto';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'modificato';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'per prezzo modificato';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'senza prezzo';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'Successivo';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Precedente';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Aggiungi Prodotto';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Modifica questo Prodotto';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Visualizza l´attuale flypage del prodotto nel negozio';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Aggiungi Elemento';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Aggiungi Altro Elemento';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Nuovo Prodotto';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Modifica Prodotto';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Informazioni Prodotto';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Stato Prodotto';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Dimensioni e Peso Prodotto';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Immagini Prodotto';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Nuovo Elemento';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Modifica Elemento';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Informazioni Elemento';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Stato Elemento';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Dimensioni e Peso Elemento';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Immagini Elemento';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Torna al prodotto principale';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'Per aggiornare l´immagine, inserisci il percorso della nuova.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Elimina immagine corrente';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Elementi Prodotto';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Attributi Elemento';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Sei sicuro di voler cancellare questo prodotto\\ne gli elementi correlati?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Sei sicuro di voler cancellare questo Elemento?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Venditore';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Produttore';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'COD.';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Nome';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Categoria';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Prezzo di Listino';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Prezzo Prodotto (Net)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Descrizione per Negozio';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Descrizione Breve';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'A Magazzino';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'In Arrivo';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Data Disponibilità';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'Promo';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Tipo Sconto';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Pubblico?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Lunghezza';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Larghezza';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Altezza';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Unità di misura';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Peso';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Unità di misura';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Miniatura';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Immagine';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'Kg';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'cm';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Unità';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'pezzi';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Unità per Imballaggio';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Qui potrete inserire una quantità per gli imballaggi. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Quantità nella Scatola';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Qui potrete inserire una quantità per gli oggetti nella scatola. (max. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Risultati Aggiunta Prodotto';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Risultati Modifica Prodotto';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Risultati Aggiunta Elemento';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Risultati Modifica Elemento';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Usa l´upload CSV';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Cartelle Prodotto';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Lista Categorie';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Albero Categorie';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Aggiungi Categoria';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Informazioni Categoria';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Nome Categoria';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Livello superiore';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Descrizione Categoria';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Pubblico?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Flypage Categoria<BR>';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Lista degli Attributi';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Lista degli Attributi per';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Nome Attributo';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Ordine Lista';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Aggiungi Attributo';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Modulo Attributi';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Nuovo Attributo per il Prodotto';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Modifica Attributo per il Prodotto';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Nuovo Attributo per l´Elemento';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Modifica Attributo per l´Elemento';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Nome Attributo';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Ordine Lista';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Lista Categorie';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Albero dei Prezzi';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Prezzo per';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Nome Gruppo';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Prezzo';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Valuta';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Aggiungi Prezzo';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Informazioni Prezzo';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Nuovo Prezzo per il Prodotto';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Modifica Prezzo per il Prodotto';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Nuovo Prezzo per l´Elemento';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Modifica Prezzo per l´Elemento';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Prezzo';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Gruppo di Acquisto';
	var $_PHPSHOP_REPORTBASIC_MOD = ' Reports ';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Lista Individuale dei Prodotti';
	var $_PHPSHOP_RB_SALE_TITLE = 'Rapporto Vendita';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Panoramica Attività di Vendita';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Imposta Intervallo';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Mensile';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Settimanale';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Giornaliero';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Questo Mese';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'Ultimo Mese';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'Ultimi 60 giorni';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'Ultimi 90 giorni';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Data inizio';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Data fine';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Mostra l´intervallo selezionato';
	var $_PHPSHOP_RB_REPORT_FOR = 'Rapporto per ';
	var $_PHPSHOP_RB_DATE = 'Data';
	var $_PHPSHOP_RB_ORDERS = 'Ordini';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Totale Elementi venduti';
	var $_PHPSHOP_RB_REVENUE = 'Ricavo';
	var $_PHPSHOP_RB_PRODLIST = 'Lista Prodotti';
	var $_PHPSHOP_SHOP_MOD = 'Negozio';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Miniatura';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Prezzo';
	var $_PHPSHOP_ORDER_STATUS_P = 'In Attesa';
	var $_PHPSHOP_ORDER_STATUS_C = 'Confermati';
	var $_PHPSHOP_ORDER_STATUS_X = 'Annullati';
	var $_PHPSHOP_ORDER_BUTTON = 'Ordine';
	var $_PHPSHOP_SHOPPER_MOD = 'Clienti';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Lista Clienti';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Lista dei Clienti';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Nome Utente';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Nome Completo';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Gruppo';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Aggiungi Cliente';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Informazioni Cliente';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Info Fatturazione';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Informazioni';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Info Spedizione';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Aggiungi Indirizzo';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Codice Indirizzo';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Nome Utente';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Nome';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Cognome';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Secondo Nome';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Titolo';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Nome acquirente';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Password';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Conferma Password';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Gruppo Cliente';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Azienda';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Indirizzo 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Indirizzo 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Città';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Provincia';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'CAP';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Nazione';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Tel.';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Cellulare';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Fax';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = 'Partita IVA/Codice Fiscale';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Si';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'No';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Lista dei Gruppi Utenti';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Lista Gruppi Utenti';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Nome Gruppo';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Descrizione Gruppo';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Modulo Gruppo Clienti';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Aggiungi Gruppo Clienti';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Nome Gruppo';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Descrizione Gruppo';
	var $_PHPSHOP_STORE_MOD = 'Negozio';
	var $_PHPSHOP_STORE_FORM_MNU = 'Modifica Negozio';
	var $_PHPSHOP_STORE_FORM_LBL = 'Informazioni Negozio';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Contatti';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Immagine';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Carica Immagine';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Nome Negozio';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Nome Azienda';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Indirizzo 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Indirizzo 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'Città';
	var $_PHPSHOP_STORE_FORM_STATE = 'Provincia';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Nazione';
	var $_PHPSHOP_STORE_FORM_ZIP = 'CAP';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Tel.';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Categoria Negozio';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Cognome';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Nome';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Secondo Nome';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Titolo';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Tel. 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Tel. 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Fax';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'Email';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Percorso Immagine';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Descrizione';
	var $_PHPSHOP_PAYMENT = 'Pagamenti';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Tipi di Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Lista Tipi di Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Nome';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Codice';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Sconto';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Gruppo Clienti';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Usare un processore di pagamenti <br/ >(es. authorize.net) ?';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Aggiungi Tipo di Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Modulo Tipo di Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Nome Modulo di Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Gruppo Clienti';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Sconto';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Codice';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Ordine Lista';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Usare un processore di pagamenti <br/ >(es. authorize.net) ?';
	var $_PHPSHOP_TAX_MOD = 'I.V.A.';
	var $_PHPSHOP_TAX_RATE = '% I.V.A.';
	var $_PHPSHOP_TAX_LIST_MNU = 'Lista Aliquote I.V.A.';
	var $_PHPSHOP_TAX_LIST_LBL = 'Lista % I.V.A.';
	var $_PHPSHOP_TAX_LIST_STATE = 'Regione Imposta';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Nazione Imposta';
	var $_PHPSHOP_TAX_LIST_RATE = 'Aliquota I.V.A.';
	var $_PHPSHOP_TAX_FORM_MNU = 'Aggiungi Aliquota I.V.A.';
	var $_PHPSHOP_TAX_FORM_LBL = 'Aggiungi Informazioni I.V.A.';
	var $_PHPSHOP_TAX_FORM_STATE = 'Regione Imposta';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Nazione Imposta';
	var $_PHPSHOP_TAX_FORM_RATE = 'Aliquota I.V.A. (per 20% inserisci 0.20)';
	var $_PHPSHOP_VENDOR_MOD = 'Venditori';
	var $_PHPSHOP_VENDOR_ADMIN = 'Venditori';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Lista dei Venditori';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Lista Venditori';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Nome Venditore';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Amministratore';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Aggiungi Venditore';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Aggiungi Informazioni';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Informazioni Venditore';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Contatto';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Immagine';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Carica Immagine';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Nome Negozio Venditore';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Nome Azienda Venditore';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Indirizzo 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Indirizzo 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Città';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Provincia';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Nazione';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'CAP';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Tel.';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Valuta Venditore';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Cognome';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Nome';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Secondo Nome';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Titolo';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Tel. 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Tel. 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Fax';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'Email';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Percorso Immagine';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Descrizione';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Lista delle Categorie Venditori';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Lista Categorie Venditori';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Nome Categoria';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Descrizione Categoria';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Venditori';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Aggiungi Categoria Venditore';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Modulo Categoria Venditore';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Informazioni Categoria';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Nome Categoria';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Descrizione Categoria';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Produttore';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Produttori';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Lista Produttori';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Lista Produttori';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Nome Produttore';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Amministratore';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'Aggiungi Produttore';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Aggiungi Informazioni';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Informazioni Produttore';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Nome Produttore';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Categoria Produttore';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'URL Homepage Produttore';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Descrizione';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Lista Categorie Produttori';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Lista Categorie Produttori';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Nome Categoria';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Descrizione Categoria';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Produttori';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Aggiungi Categoria Produttore';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Modulo Categoria Produttore';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Informazioni Categoria';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Nome Categoria';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Descrizione Categoria';
	var $_PHPSHOP_HELP_MOD = 'Aiuto';
	var $_PHPSHOP_CART_ACTION = 'Azioni';
	var $_PHPSHOP_CART_UPDATE = 'Aggiornamento';
	var $_PHPSHOP_CART_DELETE = 'Cancella';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Prezzo';
	var $_PHPSHOP_PRODUCT_CALL = 'Chiama per il Prezzo';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Prec';
	var $_PHPSHOP_PRODUCT_NEXT = 'Succ';
	var $_PHPSHOP_CART_TAX = 'I.V.A.';
	var $_PHPSHOP_CART_SHIPPING = 'Spedizione';
	var $_PHPSHOP_CART_TOTAL = 'Totale';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Succ';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'REGISTRA';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Dati Fattura';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Azienda';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Nome';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Indirizzo';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Telefono';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'Email';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Dati Spedizione';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Azienda';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Nome';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Indirizzo';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Telefono';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Dati Pagamento';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Nome sulla Carta';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Tipo di Pagamento';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Numero Carta di Credito';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Data Scadenza';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Ordine Completo';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'informazioni richieste per il Pagamento con Carta di Credito';
	var $_PHPSHOP_ZONE_MOD = 'Zona di Spedizione';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Lista Zone';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Aggiungi Zona';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Assegna Zone';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Nazione';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Zona Corrente';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Assegna alla Zona';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Aggiorna';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Assegna Zone';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Nome Zona';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Descrizione Zona';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Costo per articolo';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Limite Costo della Zona';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Lista Zone';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Nome Zona';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Descrizione Zona';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Costo per Elemento della Zona';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Limite Costo della Zona';
	var $_PHPSHOP_LOGIN_FIRST = 'Fai il login o registrati nel sito (usa il modulo di Login) prima.<br>Grazie.';
	var $_PHPSHOP_STORE_FORM_TOS = 'Termini del Servizio';
	var $_PHPSHOP_AGREE_TO_TOS = 'Devi accettare i Termini del Servizio.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Accetto i Termini del Servizio';
	var $_PHPSHOP_LEAVE_BLANK = '(Lascia VUOTO se non hai un file .php per questo!)';
	var $_PHPSHOP_RETURN_LOGIN = 'Già nostro Cliente? Esegui il Login';
	var $_PHPSHOP_NEW_CUSTOMER = 'Sei un Nuovo Cliente? Inserisci i Dati per la Fattura';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Account Cliente:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Informazioni Ordine';
	var $_PHPSHOP_ACC_UPD_BILL = 'Qui puoi modificare i dati per la fattura.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Qui puoi aggiungere e modificare l´indirizzo di spedizione.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Informazioni Account';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Informazioni di Spedizione';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Nessun Ordine da Visualizzare';
	var $_PHPSHOP_ACC_BILL_DEF = '- Predefinito (Identico alla Fatturazione)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Puoi aggiungere altre destinazioni al tuo account. Pensa ad un nome o codice adatto per la destinazione della spedizione che selezioni qui sotto.';
	var $_PHPSHOP_CONFIG = 'Configurazione';
	var $_PHPSHOP_USERS = 'Utenti';
	var $_PHPSHOP_IS_CC_PAYMENT = 'è un pagamento con Carta di Credito?';
	var $_PHPSHOP_SHIPPING_MOD = 'Spedizioni';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Spedizioni';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Corriere';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Lista Corrieri';
	var $_PHPSHOP_RATE_LIST_MNU = 'Tariffe Corrieri';
	var $_PHPSHOP_RATE_LIST_LBL = 'Lista prezzi Corrieri';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Nome';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Ordine Lista';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Crea Corriere';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Modifica/Crea Corriere';
	var $_PHPSHOP_RATE_FORM_MNU = 'Crea Tariffa Corriere';
	var $_PHPSHOP_RATE_FORM_LBL = 'Modifica/Crea Tariffa Corriere';
	var $_PHPSHOP_RATE_FORM_NAME = 'Descrizione Tariffa Corriere';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Corriere';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Selezione multipla<br>Nazione, usa CTRL e il Mouse';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'Inizio intervallo CAP';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Fine intervallo CAP';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Peso Minimo';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Peso Massimo';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Tariffa';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'La vostra tariffa';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Valuta';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'Partita IVA';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Ordine Lista';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Corriere';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Descrizione Tariffa Corriere';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Peso da ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... a';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Corriere';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Ordine Lista';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'ERRORE: ID Corriere già presente.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'ERRORE: Scegli un Corriere.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'ERRORE: Esiste ancora una tariffa, cancella le tariffe prima del Corriere';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'ERRORE: Non riesco a trovare un Corriere con questo ID.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'ERRORE: Scegli un Corriere.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'ERRORE: Non riesco a trovare un Corriere con questo ID.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'ERRORE: Devi inserire una descrizione tariffa.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'ERRORE: La nazione di destinazione non è valida. Separa le Nazioni con ";".';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'ERRORE: Un peso inferiore è richiesto';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'ERRORE: Un peso maggiore è richiesto';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'ERRORE: Il peso più basso deve essere inferiore al peso massimo';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'ERRORE: Un tariffa di spedizione è richiesta';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'ERRORE: Scegli la Valuta';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'ERRORE: Un tariffa di spedizione è richiesta';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Scegli';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Corriere';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Tariffa Spedizione';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Prezzo';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-niente-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Carta di Credito';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Usa un Processore di Pagamento';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Debito Bancario';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Solo Indirizzo';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Scegli un Indirizzo di Spedizione!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Scegli un Metodo di Spedizione!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Scegli un Metodo di Pagamento!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Controlla i dati e conferma l´ordine!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Scegli un Metodo di Spedizione.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Scegli un altro Metodo di Spedizione.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Scegli un Indirizzo di Spedizione.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Inserisci il Numero della Carta di Credito.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Nome sulla Carta di Credito.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'Il numero di Carta di Credito non è valido.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Mese di scadenza della Carta di Credito.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Anno di scadenza della Carta di Credito.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'La data di scadenza è.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Scegli un Indirizzo di Spedizione.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Numero account non valido.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'Non c´è niente nel carrello!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'ERROR: Scegli un corriere!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'ERROR: Non ho trovato la tariffa!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'ERROR: Non trovo il tuo Indirizzo di Spedizione!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'ERROR: Non ci sono i dati della Carta....';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'ERROR: Non trovo il numero della Carta di Credito!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Hai usato un numero di Carta di Credito di prova!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'Non ho trovato l´utente nel database!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Inserisci il nome della Banca.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Non hai inserito il tuo IBAN.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Non hai inserito il numero di Conto Corrente.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Non hai inserito il codice di ABI/CAB della Banca.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Non hai inserito il nome della Banca.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Devi completare tutte le fasi necessarie alla procedura di uscita alla cassa!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Informazioni di pagamento registrate.<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Non hai raggiunto il minimo d´ordine.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'Il nostro minimo d´ordine è:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Pagamento con Carta di Credito';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'altri Metodi di Pagamento';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Scegli un Metodo di Pagamento:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Minimo d´ordine per il vostro negozio';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Informazioni Bancarie';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Numero Conto Corrente';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'Coordinate bancarie';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Nome Banca';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Titolare Conto';
	var $_PHPSHOP_MODULES = 'Moduli';
	var $_PHPSHOP_FUNCTIONS = 'Funzioni';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Prodotti Speciali';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Se vuoi puoi Aggiungere una Nota all´ordine';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Nota cliente';
	var $_PHPSHOP_INCLUDING_TAX = '(incluso $tax % I.V.A.)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Seleziona articolo';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Articolo';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Download Area';
	var $_PHPSHOP_DOWNLOADS_START = 'Inizia Download';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Inserisci il Download-ID che hai ricevuto nella e-mail e clicca ´Start Download´.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Spiacenti, il tuo Download è scaduto';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Spiacenti, mai hai raggiunto il limite di download';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Download-ID non valido!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Impossibile inviare messaggio a ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Messaggio inviato a ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Download-Info';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'I(l) file che hai ordinato sono/è pronti/o per essere scaricati/o';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Inserisci i(l) seguenti/e Download-ID nella Download Area: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'il limite massimo di download per ogni file è di: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Puoi scaricare fino a {expire} giorni dopo il primo download';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Domande? Problemi?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Download-Info by ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'prodotto scaricabile?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Grazie per il pagamento.

        La transazione ha avuto successo. Riceverai una e-mail di conferma della transazione da parte di PayPal.

        Ora puoi continuare nella navigazione o autenticarti in <a href=http://www.paypal.com>www.paypal.com</a> per controllare i dettagli della transazione.';
	var $_PHPSHOP_PAYPAL_ERROR = 'C´è stato un errore nell´elaborazione della transazione. Lo stato del tuo ordine non può venir aggiornato.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Grazie per avere visitato il nostro negozio.  Di seguito le informazioni sul vostro ordine.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Grazie per la vostra fiducia.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Domande? Problemi?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'E´ stato ricevuto il seguente ordine.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Guarda l´ordine seguendo il link sottostante.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Non sono ammesse quantità negative.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Inserire una quantità valida per questo articolo.';
	var $_PHPSHOP_CART_STOCK_1 = 'La quantità selezionata eccede la disponibilità di magazzino.';
	var $_PHPSHOP_CART_STOCK_2 = 'Al momento ci sono $product_in_stock articoli disponibili.';
	var $_PHPSHOP_CART_STOCK_3 = 'Clicca qui per essere inserito nella nostra lista di attesa.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Selezionare un articolo speciale per la pagina dei dettagli!';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'nessuno';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Sig.';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Sig.ra';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Dott.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof.';
	var $_PHPSHOP_DEFAULT = 'Predefinito';
	var $_PHPSHOP_AFFILIATE_MOD = 'Amministrazione Affiliati';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Lista Affiliati';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Lista Affiliati';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Nome Affiliato';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Attivo';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Percentuale';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Totale mensile';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Commissione Mensile';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Lista Ordini';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'Email Affiliati';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'Email Affiliati';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'Email destinatario (* = TUTTI)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Tua Email';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Oggetto';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Includi Statistiche Attuali';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Percentuale Commissione';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Attivo?';
	var $_PHPSHOP_DELIVERY_TIME = 'Di solito viene spedito in';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Informazioni Consegna';
	var $_PHPSHOP_MORE_CATEGORIES = 'altre categorie';
	var $_PHPSHOP_AVAILABILITY = 'Disponibilità';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Il prodotto al momento non è disponibile.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Sarà nuovamente disponibile il: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Sommario';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Statistiche';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Clienti';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'Prodotti attivi';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'Prodotti non attivi';
	var $_PHPSHOP_STATISTIC_SUM = 'Totale';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Nuovi Ordini';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Nuovi Clienti';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Inserisci di seguito il tuo indirizzo e-mail per essere avvisato quando il prodotto sarà di nuovo disponibile.
                                          Il tuo indirizzo e-mail non verrà ceduto in alcun modo a terzi e verrà utilizzato all´unico scopo di
										  avvisarti che il prodotto richiesto è di nuovo disponibile.<br /><br />Grazie!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Grazie per l´attesa! <br />Ti faremo sapere appena possibile.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Avvisatemi!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Versione stampabile';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Scegli tra Authorize.net e CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' stato file di Configurazione:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'scrivibile';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'non scrivibile';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Opzioni Generali';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Percorso & URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Sito';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Spedizione';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Cassa';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Download';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Pagamenti';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Utilizza solo come catalogo';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Se selezioni questa opzione disabiliti tutte le funzioni del carrello della spesa.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Mostra Prezzi';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Mostra Prezzi IVA inclusa?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Imposta l´opzione se i clienti vedono i prezzi IVA inclusa od esclusa.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Metti il segno di spunta per mostrare i prezzi. Con la funzione catalogo qualche venditore preferisce non mostrare i prezzi.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Imposta virtuale';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Determina se si applica o meno l´imposta agli articoli a peso zero. Modifica ps_checkout.php->calc_order_taxable() per personalizzare questa funzione.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Modalità d´imposta:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'In base all´indirizzo di spedizione';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'In base all´indirizzo del commerciante';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Determina l´aliquota IVA da applicare:<br />
                                                                                    <ul><li>quella del paese dove risiede il proprietario del negozio</li><br/>
                                                                                <li>o quella del paese dell´acquirente.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Consenti aliquote multiple?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Seleziona se hai prodotti con diverse aliquote d´imposta (es. 4% per libri, 20% per l´altra merce)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Calcola lo sconto prima di applicare l´IVA e le spese di spedizione?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Consenti il sistema di Valutazione/Recensione da parte del cliente';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Se abiliti questa funzione, permetti ai clienti di <strong>dare delle valutazioni sui prodotti</strong> e di <strong>scrivere delle recensioni</strong> a riguardo. <br />
                                                                                In tal modo i clienti possono raccontare ad altri clienti le loro esperienze col prodotto.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Determina se lo sconto va applicato PRIMA (selezionato) o DOPO (non selezionato) il calcolo di imposte e spese di spedizione.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Consenti ai clienti di inserire le loro coordinate bancarie?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Seleziona se vuoi consentire ai clienti in fase di iscrizione di fornire le loro coordinate bancarie.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Consenti ai clienti di selezionare la provincia?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Seleziona se vuoi consentire ai clienti di selezionare la provincia in fase di iscrizione.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Obbligatorio accettare le Condizioni di Vendita?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Seleziona se vuoi che il cliente debba accettare le condizioni di vendita prima di iscriversi.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Controlla Scorte di Magazzino?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Determina se viene fatto un controllo sulla disponibilità del prodotto in magazzino quando un utente lo aggiunge al carrello.
                                                                                          Se selezionato, non consente ad un utente di aggiungere al carrello una quantità di quell´articolo superiore alle scorte di magazzino.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Consenti Programma Affiliati?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Abilita il rintracciamento per gli affiliati direttamente dalla vetrina del negozio. Abilitalo se hai aggiunto affiliati nel pannello di amministrazione.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Formato mail dell´ordine:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Mail formato testo';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'Mail in formato HTML';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Determina come sono impostate le mail di conferma degli ordini:<br />
                                                                                        <ul><li>come solo testo</li>
                                                                                        <li>o in html con immagini.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Consenti l´amministrazione direttamente dalla vetrina del negozio per gli utenti non abilitati al pannello di controllo?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'Con questa opzione consenti l´amministrazione agli utenti che non hanno accesso al pannello di controllo
  e che sono amministratori del negozio (es. Registered / Editor).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'L´URL del tuo sito. Di solito è quella corrispondente alla instalalzione di Joomla (con lo slash alla fine!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'SECUREURL';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'L´URL sicura del tuo sito. (https - con lo slash alla fine!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'COMPONENTURL';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'L´URL del componente mambo-phpShop. (con lo slash alla fine!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'IMAGEURL';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'L´URL della directory delle immagini del componente VirtueMart. (con lo slash alla fine!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'ADMINPATH';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'Il percorso della directory del componente VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'CLASSPATH';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'Il percorso della directory classes del componente VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'PAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'Il percorso della directoryhtml del componente VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'IMAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'Il percorso della directory shop-image del componente VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'HOMEPAGE';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Questa è la pagina che verrà caricata come predefinita.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'ERRORPAGE';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Questa pagina mostra gli eventuali errori.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'DEBUGPAGE';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Pagina predefinita per mostrare i messaggi di debug.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'DEBUG ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'DEBUG?  	   	Attiva l´ouput del debug. Fa sì che la pagina di debug venga visualizzata in fondo ad ogni pagina. Molto utile in fase di sviluppo e collaudo dato che mostra il contenuto del carrello, i valori dei campi ecc.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'FLYPAGE';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Pagina predefinita per mostrare i dettagli del prodotto.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Modello per la Categoria';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Definisce il modello predefinito per visualizzare i prodotti di una determinata categoria.<br />
                                                                                                      Puoi creare modelli nuovi personalizzando i file di modelli esistenti <br />
                                                                                                      (all´interno della directory <strong>COMPONENTPATH/html/templates/</strong> e che iniziano con browse_)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Numero predefinito di prodotti per riga';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Definisci il numero di prodotti per riga. <br />Esempio: se lo imposti a 4, il Modello di Categoria utilizzato mostrerà 4 prodotti per riga';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = '"no image" image';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Questa immagine verrà mostrata quando al prodotto non è stata associata alcuna immagine.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'SEARCH ROWS';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Determina il numero di righe per pagina da visualizzare per i risultati di una ricerca.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'SEARCH COLOR 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Indica il colore delle righe dispari nei risultati della ricerca.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'SEARCH COLOR 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Indica il colore delle righe pari nei risultati della ricerca.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'MAXIMUM ROWS';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Imposta il numero massimo di righe da visualizzare nella lista degli ordini.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Mostra piè di pagina ';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Visualizza un´immagine "powered-by-VirtueMart" nel piè di pagina.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Scegli la modalità di spedizione per il negozio';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Modulo di spedizione standard con corrieri e tariffe configurati individualmente. <strong>CONSIGLIATO !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '  	Modalità di spedizione in base alla nazione Versione 1.0<br />
                                                                                                            Per ulteriori informazioni su questo modulo visita <a href="http://ZephWare.com">http://ZephWare.com</a><br />
                                                                                                            per maggiori dettagli o per entrare in contatto <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Metti il segno di spunta per abilitare il modulo di spedizione per zona';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = 'Metodo di calcolo per spedizioni UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'Codice d´accesso UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Il tuo codice di accesso UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'ID utente UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'L´id utente ricevuto da UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'Password UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'La password per il tuo account UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'Modulo InterShipper. Segna solo se hai un account Intershipper.com';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Disabilita la selezione della modalità di spedizione. Seleziona questo se vendi prodotti scaricabili che non devono venir spediti al cliente.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'Password InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'La password per il tuo account InterShipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'Email InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'L´indirizzo email per il tuo account InterShipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'CHIAVE DI CIFRATURA';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Chiave usata per codificare i dati memorizzati nel database. Significa che questo file deve essere sempre prottetto da occhi indiscreti.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Abilita la barra della cassa';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Seleziona se vuoi che "la barra della cassa" venga visualizzata durante il processo di perfezionamento dell´acquisto ( 1 - 2 - 3 - 4 con immagini).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Scegli la procedura di uscita alla cassa';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Standard :</strong><br/>
               1. Richiesta dell´indirizzo per la spedizione<br />
              2. Richiesta della modalità di spedizione<br />
              3. Richiesta del metodo di pagamento<br />
              4. Completa l´ordine';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Procedura 2:</strong><br/>
               1. Richiesta dell´indirizzo per la spedizione<br />
              2. Richiesta del metodo di pagamento<br />
              3. Completa l´ordine';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Procedura 3:</strong><br/>
               1. Richiesta della modalità di spedizione<br />
              2. Richiesta del metodo di pagamento<br />
              3. Completa l´ordine';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Procedura 4:</strong><br/>
               1. Richiesta del metodo di pagamento<br />
              2. Completa l´ordine';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Abilita i Download';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Seleziona per abilitare la possibilità di download. Solo se vendi prodotti scaricabili online.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Stato ordine che abilita il download';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Seleziona lo stato dell´ordine che determina quando al cliente deve essere notificato via e-mail il link per il download.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Stato dell´ordine che disabilita il download';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Imposta lo stato dell´ordine al quale il download per il cliente è disabilitato.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'DOWNLOADROOT';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'Il percorso fisico ai file per il download da parte del cliente. (con lo slash alla fine!)<br>
        <span class="message">Per la sicurezza del tuo negozio: se puoi, usa una directory FUORI DALLA WEBROOT</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Limite massimo download';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Imposta il numero massimo di download che si posson fare con un Download-ID, (per ogni singolo ordine)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Scadenza Download';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Imposta l´intervallo di tempo <strong>in secondi</strong> di validità del download per il cliente.
  Qusto intervallo inizia col primo download! Quando l´intervallo scade, il download-ID viene disabilitato.<br />N.B. : 86400s=24h.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Abilita Pagamento IPN via PayPal?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Seleziona se vuoi permettere ai tuoi clienti di pagare con PayPal.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'Email PayPal:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Il tuo indirizzo email per i pagamenti con PayPal. Usato anche come receiver_email.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'stato dell´ordine che determina se una transazione è andata a buon fine';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Seleziona lo stato dell´ordine al quale il vero ordine è impostato se la procedura PayPal IPN è andata a buon fine. Se vendi prodotti scaricabili:
  seleziona lo stato che abilita il download (al ciente sarà subito notificato via e-mail il link per il download).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'stato dell´ordine per transazioni non andate a buon fine';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Seleziona uno stato dell´ordine per le transazioni PayPal non andate a buon fine.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Abilita pagamenti via PayMate?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Seleziona per attivare il sistema di pagamento australiano Australian PayMate.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'Nome utente PayMate:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Il nome utente del tuo account PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Abilita pagamenti Authorize.net?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Seleziona per utilizzare Authorize.net con phpShop.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Modalità di prova?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Seleziona "Sì" per attivare la modalità di prova. Seleziona "No" per abilitare le transazioni reali.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Sì';
	var $_PHPSHOP_ADMIN_CFG_NO = 'No';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Authorize.net Login ID';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'La tua Login ID di Authorize.Net ';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Authorize.net Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'La chiave per la transazione su Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Tipo di autenticazione';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'Il tipo di autenticazione su Authorize.Net.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Abilita CyberCash?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Seleziona per utilizzare CyberCash con phpShop.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash MERCHANT';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_MERCHANT è il CyberCash Merchant ID';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash Merchant Key';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash Merchant Key è la chiave fornita da CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash PAYMENT URL';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'CyberCash PAYMENT URL è l´URL fornita da Cybercash per i pagamenti sicuri';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash AUTH TYPE';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'CyberCash AUTH TYPE è il tipo di autenticazione fornito da Cybercase';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Ricerca Avanzata';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Cerca in Tutte le Categorie';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Cerca in tutti i campi del prodotto';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Cerca solo nel nome del prodotto';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Solo Produttore/Venditore';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Solo descrizione del prodotto';
	var $_PHPSHOP_SEARCH_AND = 'AND';
	var $_PHPSHOP_SEARCH_NOT = 'NOT';
	var $_PHPSHOP_SEARCH_TEXT1 = 'Il primo menù a tendina permette di selezionare una categoria in modo tale da limitare ad essa la ricerca.
        Il primo menù a tendina permette di limitare la ricerca ad un particolare dato associato al prodotto (es. Nome).
        Una volta selezionati queste opzioni (o lasciato l´opzione predefinita TUTTI), inserisci la parola chiave da cercare. ';
	var $_PHPSHOP_SEARCH_TEXT2 = ' Puoi ulteriormete affinare la ricerca aggiungendo una seconda parola chiave e selezionando gli operatori AND o NOT.
        AND comporta che entrambe le parole devono essere presenti affinchè il prodotto venga visualizzato nei risultati.
        NOT implica che il prodotto viene visualizato solo se la prima parola e presente e la seconda no.';
	var $_PHPSHOP_ORDERBY = 'Ordina per';
	var $_PHPSHOP_CUSTOMER_RATING = 'Valutazione media cliente';
	var $_PHPSHOP_TOTAL_VOTES = 'Voti totali';
	var $_PHPSHOP_CAST_VOTE = 'Dai il tuo voto';
	var $_PHPSHOP_RATE_BUTTON = 'Voto';
	var $_PHPSHOP_RATE_NOM = 'Valutazione';
	var $_PHPSHOP_REVIEWS = 'Recensioni Clienti';
	var $_PHPSHOP_NO_REVIEWS = 'Nessuna recensione disponibile per questo prodotto.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Sii il primo a scrivere una recensione...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Autenticati per poter scrivere una recensione.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Dai un voto al prodotto per completare la tua recensione!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Scrivi qualche parola in più per la tua recensione. Limite minimo caratteri: 100';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Per favore riduci la tua recensione. Limite massimo caratteri: 2000';
	var $_PHPSHOP_WRITE_REVIEW = 'Scrivi una recensione per questo prodotto!';
	var $_PHPSHOP_REVIEW_RATE = 'Primo: Valuta il prodotto. Dai un voto da 0 (peggiore) a 5 stelle (migliore).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Ora scrivi una (breve) recensione ....(min. 100, max. 2000 caratteri) ';
	var $_PHPSHOP_REVIEW_COUNT = 'Caratteri scritti: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Invia recensione';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Hai già recensito questo prodotto. Grazie.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Grazie per la tua recensione.';
	var $_PHPSHOP_COMMENT = 'Commento';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Aggiunti/Modifica tipi di Carta di Credito';
	var $_PHPSHOP_CREDITCARD_NAME = 'Nome Carta di Credito';
	var $_PHPSHOP_CREDITCARD_CODE = 'Carta di Credito - Codice Breve';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Tipo di Carta di Credito';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Lista Carte di Credito';
	var $_PHPSHOP_UDATE_ADDRESS = 'Aggiorna Indirizzo';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Continua lo Shopping';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Il tuo ordine è stato inviato con successo!';
	var $_PHPSHOP_ORDER_LINK = 'Clicca qui per visualizzare l´Ordine nei Dettagli.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'lo Stato dell´Ordine Num. {order_id} è stato modificato.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'Il Nuovo Stato è:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'Per visualizzare i Dettagli dell´Ordine, clicca su questo link (o copialo nel browser):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Modifica Stato Ordine: Ordine Num. {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Avvisa il Cliente?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Prima modifica lo Stato dell´Ordine!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Sconto per Gruppo Clienti di default (in %)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Il valore positivo X indica: Se il Prodotto non ha un Prezzo assegnato a QUESTO Gruppo Clienti, il Prezzo di default è decrementato di X %. Un valore negativo avrà l´effetto opposto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Sconto sul Prodotto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Lista Sconti sul Prodotto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Aggiungi/Modifica Sconto Prodotto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Ammontare dello sconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Inserire l´ammontare dello sconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Tipo di Sconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Percentuale';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Totale';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'L´ammontare deve essere una percentuale od un totale?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Data d´inizio dello sconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Specifica il giorno in cui inizia lo sconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Data di termine dello sconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Specifica il giorno in cui termina lo sconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Puoi utilizzare il Modulo Sconto sui Prodotti per aggiungere sconti!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Risparmia';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Visualizza Immagine a Dimensioni Reali';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Stile Visualizzazione Valuta';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Simbolo valuta';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Puoi anche utilizzare codice HTML (es. €,£,¥,...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Decimali';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Numero di decimali visualizzati (può essere 0)<br><b>Arrotonda se il valore ha un numero di decimali diverso</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Simbolo per i decimali';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Carattere usato come simbolo per i decimali';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Separatore delle migliaia';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Carattere usato per separare le migliaia (può essere vuoto)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Formato positivo';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Formato per visualizzare di valori positivi.<br>(Symb sta per simbolo valuta)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Formato negativo';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Formato per visualizzare i numeri negativi.<br>(Symb sta per simbolo valuta)';
	var $_PHPSHOP_OTHER_LISTS = 'Altri Tipi di Lista Prod.';
	var $_PHPSHOP_MORE_IMAGES = 'Visualizza Più Immagini';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Immagini Disponibili per';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Torna ai Dettagli dei Prodotti';
	var $_PHPSHOP_FILEMANAGER = 'FileManager';
	var $_PHPSHOP_FILEMANAGER_LIST = 'FileManager::Lista prodotti';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Aggiungi Immagine/File';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Immagini Assegnate';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'È Scaricabile?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'File Assegnati (Fogli dati, MP3,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Pubblicato?';
	var $_PHPSHOP_FILES_LIST = 'FileManager::Immagine/Elenco File per';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Nome File';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'Titolo File';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Tipo File';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Modifica Entrata File';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Immagine a Dimensioni Reali';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Miniature Immagini';
	var $_PHPSHOP_FILES_FORM = 'Carica un File per';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'File Attuale';
	var $_PHPSHOP_FILES_FORM_FILE = 'File';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Immagine';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Carica su';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'Percorso predefinito Immagini Prodotto';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Specifica la collocazione del file';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Percorso Download (per i prodotti scaricabili!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Miniatura automatica?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'File pubblicato?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Titolo File (quello che vede il Cliente)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Descrizione File';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'URL File (opzionale)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Inserire un percorso valido!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'La Miniatura dell´Immagine è stata creata con successo!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'Impossibile creare Miniatura Immagine!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Errore di caricamento File/Immagine';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Impossibile eliminare l´Immagine a Dimensioni Reali.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Immagine a Dimensioni Reali eliminata con successo.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Impossibile eliminare File Miniatura Immagine (potrebbe non esistere): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Miniatura Immagine eliminata con successo.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Impossibile eliminare il File.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'File eliminato con successo.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Spiacente, il file richiesto non è stato trovato!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Immagine non trovata!';
	var $_PHPSHOP_COUPON_MOD = 'Coupon';
	var $_PHPSHOP_COUPONS = 'Coupons';
	var $_PHPSHOP_COUPON_LIST = 'Lista Coupon';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Coupon già utilizzato.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Coupon utilizzato! Grazie.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Se hai un codice coupon inseriscilo qui sotto:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Invia';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Codice coupon già esistente. Riprova.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Aggiorna Coupon';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Clicca sul codice coupon per modificarlo o, per eliminarlo, selezionalo e clicca Elimina:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Codice';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Valore Percentuale o Assoluto';
	var $_PHPSHOP_COUPON_TYPE = 'Tipo di Coupon';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Un Buono Regalo viene eliminato dopo che è stato utilizzato come sconto su un ordine. Un Coupon Permanente può venir utilizzato ogni volta che lo si desidera.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Buono Regalo';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Coupon Permanente';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Valore';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Elimina Codice';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Sicuro di voler eliminare questo codice coupon?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Compilare tutti i campi.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'Il valore coupon deve essere un numero.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Nuovo Coupon';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Codice Coupon';
	var $_PHPSHOP_COUPON_PERCENT = 'Percentuale';
	var $_PHPSHOP_COUPON_TOTAL = 'Assoluto';
	var $_PHPSHOP_COUPON_VALUE = 'Valore';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Codice coupon salvato.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Salva Coupon';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Sconto Coupon';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Codice coupon non trovato. Riprova.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Abilita l´Uso di Coupon';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Se si abilita l´Uso dei Coupon, si consente agli utenti di inserire dei numeri di codice di coupon per ricevere degli sconti sui loro acquisti.';
	var $_PHPSHOP_FREE_SHIPPING = 'Spedizione Gratuita';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'La spedizione per questo Ordine è gratuita!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Ordine Minimo per la Spedizione Gratuita';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'L´ammontare (IVA INCLUSA!) minimo che dà diritto alla Spedizione
													Gratuita (es: <strong>50</strong> significa che il cliente ha diritto alla spedizione gratuita
                                                se fa un ordine dai 50 Euro in su (iva inclusa).';
	var $_PHPSHOP_YOUR_STORE = 'Il Tuo Negozio';
	var $_PHPSHOP_CONTROL_PANEL = 'Pannello di Controllo';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'Pulsante PDF';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Mostra o Nasconde il Pulsante PDF nel Negozio';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Bisogna accettare le condizioni del servizio ad OGNI ORDINE?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Attiva se vuoi che un acquirente debba accettare le condizioni del servizio prima di OGNI ORDINE che invia.';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Tipo di Conto Bancario';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Checking';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Business Checking';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Saving';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Fatturazione Periodica?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Definisci se vuoi delle fatturazioni periodiche.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Errore Interno durante l´elaboraziond della Richiesta a';
	var $_PHPSHOP_PAYMENT_ERROR = 'Elaborazione Pagamento Fallita';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Elaborazione pagamento andata a buon fine';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS non ha potuto elaborare la richiesta di tariffa di spedizione.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Giorni Garantiti per la Consegna';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'Modalità di Ritiro UPS';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Come consegni i pacchi ad UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'Imballaggio UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Seleziona il Tipo di Imballaggio predefinito.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Consegna a Domicilio?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Per Privati (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Consegna presso Ditta (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Tariffa per Privati (RES) o per Imprese (COM).';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Spese per il Trattamento';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Le Spese per il Trattamento di questa modalità di consegna.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Classe di Imposta';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Usa questa clase di imposta sulla tariffa di spedizione.';
	var $_PHPSHOP_ERROR_CODE = 'Codice Errore';
	var $_PHPSHOP_ERROR_DESC = 'Descrizione Errore';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Mostra/Modifica la Transaction Key';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Mostra/Modifica la Password/Transaction Key';
	var $_PHPSHOP_TYPE_PASSWORD = 'Inserisci la tua Password Utente';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Password Attuale';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Transaction Key Attuale';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'Transaction key modificata con successo.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Richiedi/Cattura Credit Card Code Value (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Controlla la validità del CVV2/CVC2/CID (numero di tre o quattro cifre sul retro della carta di credito, sul fronte della carta per le carte American Express)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Inserisci il numero di tre o quattro cifre sul retro della tua carta (sul davanti per le carte American Express)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'Devi inserire il Codice della tua Carta di Credito per proseguire.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'Inserisci un Nome File';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'N.B.: Qui puoi inserire un nome file. <strong>Se inserisci un nome file qui, non verrà caricato nessun file!!! Dovrai caricarlo manualmente via FTP!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'OPPURE carica un nuovo File';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Puoi caricare un file locale. Questo file è il prodotto che vuoi vendere. I file esistenti verranno sovrascritti.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Inserisci qui il testo che vuoi venga visualizzato sulla pagina di descrizione del prodotto.<br />es.: 24 ore, 48 ore, 3 - 5 giorni, Su ordinazione.....';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'OPPURE seleziona un´immagine da visualizzare nella pagina di dettaglio del prodotto.<br />Le immagini risiedono nella directory <i>/components/com_phpshop/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Lista Attributi';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Esempi formato lista attributi:</h4>
        <span class="sectionname"><strong>Taglia</strong>,XL[+1.99],M,S[-2.99]<strong>;Colori</strong>,Rosso,Verde,Giallo,ExpensiveColor[=24.00]<strong>;ecc.</strong>,..,..</span>
        <h4>Aggiustamenti sul prezzo per l´utilizzo della modifica degli attributi avanzata:</h4>
        <span class="sectionname">
        <strong>+</strong> == Aggiungi questo ammontare al prezzo configurato.<br />
        <strong>-</strong> == Sottrai questo ammontare dal prezzo configurato.<br />
        <strong>=</strong> == Imposta il prezzo del prodotto a questo ammontare.
      </span>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Lista Attributi Personalizzata';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Esempi per il formato lista attributi personalizzata:</h4>
        <span class="sectionname"><strong>Nome;Extra;</strong>...</span>';
	var $_PHPSHOP_MULTISELECT = 'Selezione Multipla: usa il Tasto CTRL più il Mouse';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'Abilita eProcessingNetwork.com per il pagamento?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Verifica l´uso di eProcessingNetwork.com con VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Modalità di Test?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Seleziona "Si" per testare. Seleziona "No" per abilitare la transizione reale.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'eProcessingNetwork.com Login ID';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'Questo è il tuo Login ID per eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'eProcessingNetwork.com Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'Questa è la Transaction Key per eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Authentication Type';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'Questa è l´Authentication Type per eProcessingNetwork.com';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Prodotti Correlati';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Puoi creare una legame con i Prodotti Correlati utilizzando questa Lista. Basta selezionare uno o più prodotti e questi diverranno <strong>Prodotti Correlati</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Forse potresti essere interessato a questo(i) prodotto(i)';
	var $_PHPSHOP_IMAGE_ACTION = 'Azione per l´immagine';
	var $_PHPSHOP_NONE = 'nessuna';
	var $_PHPSHOP_ORDER_HISTORY = 'Sorico Ordine';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Commento';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Commenti sul tuo Ordine';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Includi questo commento?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Data Inserimento';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Cliente Notificato?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Stato Ordine Cambiato';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = 'USPS shipping username';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = 'Username that you received from registering at USPS.com.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = 'USPS shipping password';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = 'Password that you received from registering at USPS.com.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER = 'USPS shipping server';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP = 'USPS shipping server, currently only works on live server!  Should be production.shippingapis.com';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH = 'USPS shipping path';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP = 'USPS shipping path, should be /ShippingAPI.dll';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE = 'USPS Package Size';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP = 'Choices are Regular, Large, and Oversize.  This should be set to what you mostly mail and is based on the dimensions of the package.  Normally just Regular.';
	var $_PHPSHOP_USPS_PADDING = 'Percent to pad weight for shipping package. (Include %)';
	var $_PHPSHOP_USPS_PADDING_TOOLTIP = 'Pad the shipping weight to allow additional weight for shipping box and packing. Using this allows you to put actual weight in your items weight settings.  Requires you to have the % sign included.  Example 15%';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_HANDLING_FEE = 'Handling Fee';
	var $_PHPSHOP_USPS_HANDLING_FEE = 'Your Handling fee for this shipping method.';
	var $_PHPSHOP_USPS_HANDLING_FEE_TOOLTIP = 'Do you want to charge extra for users to ship USPS?  In dollar format, example 2.00';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE = 'Your International Handling fee for USPS shipments.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP = 'Do you want to charge extra for users to ship Internationally with USPS.  This is on top of the normal Handling Fee.  Example 2.00';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE = 'Your International per pound rate for USPS shipments.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP = 'Your International per pound rate for USPS shipments.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_MACHINABLE = 'If Parcel Post is used and package is under 6oz & over 35lbs.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_MACHINABLE_TOOLTIP = 'Is this package able to be handled by a machine.  Default should be No.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP = 'USPS Domestic Mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP0 = 'USPS Express Mail PO to Addressee';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP0_TOOLTIP = 'Standard USPS Express Mail.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP1 = 'USPS Express Mail Flat Rate Envelope (12.5" x 9.5")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP1_TOOLTIP = 'Select this if you allow shipping via the USPS Express Mail Flat Rate Envelope. Default should be No as it could come up cheaper than actual shipping and might not fit in the envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP2 = 'USPS Priority Mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP2_TOOLTIP = 'Standard USPS Priority Mail.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP3 = 'USPS Priority Mail Flat Rate Envelope (12.5" x 9.5")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP3_TOOLTIP = 'Select this if you allow shipping via the USPS Priority Mail Flat Rate Envelope.  Default should be No as it could come up cheaper than actual shipping and might not fit in the envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP4 = 'USPS Priority Mail Flat Rate Box (11.25" x 8.75" x 6")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP4_TOOLTIP = 'Select this if you allow shipping via the USPS Priority Mail Flat Rate Box.  Default should be No as it could come up cheaper than actual shipping and might not fit in the box.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP5 = 'USPS Priority Mail Flat Rate Box (14" x 12" x 3.5")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP5_TOOLTIP = 'Select this if you allow shipping via the USPS Priority Mail Flat Rate Box.  Default should be No as it could come up cheaper than actual shipping and might not fit in the box.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP6 = 'USPS First Class (Under 14oz)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP6_TOOLTIP = 'Select this if you allow shipping via USPS First Class Mail.  This will only be displayed if package weight is under .88 pounds.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP7 = 'USPS Parcel post';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP7_TOOLTIP = 'Standard USPS Parcel Post Mail.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP8 = 'USPS Bound Printed Matter';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP8_TOOLTIP = 'Select this if you allow shipping via USPS Bound Printed Matter.  Default should be No unless you ship bound magazines or newspapers in groups.  15 pound limit.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP9 = 'USPS Media Mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP9_TOOLTIP = 'Select this if you allow shipping via USPS Media Mail.  Default should be No.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP10 = 'USPS Library Mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP10_TOOLTIP = 'Select this if you allow shipping via USPS Library Mail.  Default should be No.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL = 'USPS International Mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL0 = 'USPS Global Express Gauranteed Document Service';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL0_TOOLTIP = 'Select this if you allow shipping via USPS Global Express Gauranteed Document Service.  Default should be No.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL1 = 'USPS Global Express Gauranteed Non-Document Service';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL1_TOOLTIP = 'Select this if you allow shipping via USPS Global Express Gauranteed Non-Document Service.  Default should be No.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL2 = 'USPS Global Express Mail (EMS)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL2_TOOLTIP = 'Standard USPS Global Express Mail.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL3 = 'USPS Global Priority Mail Flat Envelope Large';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL3_TOOLTIP = 'Select this if you allow shipping via USPS Global Priority Mail Flat Envelope Large.  Default should be No as it could come up cheaper than actual shipping and might not fit in the envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL4 = 'USPS Global Priority Mail Flat Envelope Small';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL4_TOOLTIP = 'Select this if you allow shipping via USPS Global Priority Mail Flat Envelope Large.  Default should be No as it could come up cheaper than actual shipping and might not fit in the envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL5 = 'USPS Global Priority Mail - Variable Weight';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL5_TOOLTIP = 'Standard USPS Global Priority Mail.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL6 = 'USPS Airmail Letter Post';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL6_TOOLTIP = 'Select this if you allow shipping via USPS Airmail Letter Post.  Default should be No as it could come up cheaper than actual shipping and might not fit in the letter.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL7 = 'USPS Airmail Parcel Post';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL7_TOOLTIP = 'Standard USPS Airmail Parcel Post.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL8 = 'USPS Economy Letter Post';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL8_TOOLTIP = 'Select this if you allow shipping via USPS Economy Letter Post.  Default should be No as it could come up cheaper than actual shipping and might not fit in the letter.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL9 = 'USPS Economy Parcel Post';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL9_TOOLTIP = 'Standard Economy Parcel Post.';
	var $_PHPSHOP_USPS_RESPONSE_ERROR = 'USPS was not able to process the Shipping Rate Request.';
	var $_PHPSHOP_PARAMETERS_LBL = 'Parametri';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Tipo Prodotto';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Lista Tipi Prodotto';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Aggiungi/Modifica Tipo Prodotto';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Lista Tipo Prodotto per';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Lista Tipi Prodotto';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Aggiungi Tipo Prodotto per';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Agg. Tipo Prodotto';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Tipo Prodotto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Nome Tipo Prodotto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Descrizione Tipo Prodotto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Parametri';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Informazzioni Tipo Prodotto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Pubblica?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Browse Page Tipo Prodotto<BR>';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Flypage Tipo Prodotto<BR>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Parameteri per Tipo Prodotto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Informazione Parametri';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Tipo Prodotto non trovato!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Nome Parametro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Questo diventerà il titolo colonna della tabella. Dev´essere unico e senza spazi.<BR>Per esempio: materiale_principale';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Etichetta Parametro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Descrizione Parametro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Tipo Parametro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Integer';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Testo';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Testo Abbreviato';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Float';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Char';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Data & Ora';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Data';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'AAAA-MM-GG';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Ora';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'HH:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Interruzione (Break Line)';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Valori Multipli';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Valori Possibili';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Consenti selezioni Multiple?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Se "Valori Possibili" è settato, i Parametri di Ricerca potranno essere solo questi valori predefiniti.<BR>Esempi di Valori Possibili: </strong><span class="sectionname">Ferro;Legno;Plastica;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Valori di Default';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'Per indicare il Parametro e il Valore di Default usa questo formato:<ul><li>Data: AAAA-MM-GG</li><li>Ora: HH:MM:SS</li><li>Data & Ora: AAAA-MM-GG HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Unità di misura';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Ricerca Avanzata (utilizza parametri preimpostati)';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Parametri di Ricerca';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Vuoi cercare i prodotti attraverso parametri predefiniti?<BR>Puoi utilizzare queste form preimpostate:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Ci dispiace. Attualmente non ci sono  criteri di ricerca preimpostati.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Ci dispiace. Non ci sono Prodotti pubblicati che soddisfano questi criteri di ricerca.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'è simile';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'NON è simile';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Ricerca Full-Text';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Tutto Selezionato';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Qualsiasi Selezione';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Reset Form';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Cerca nella Categoria';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Cambia Parametri';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Ordine Decrescente';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Ordine Crescente';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Parametri delle Categorie';
	var $_PHPSHOP_FEE = 'Fee';
	var $_PHPSHOP_PRODUCT_CLONE = 'Clona Prodotto';
	var $_PHPSHOP_CSV_SETTINGS = 'Settaggi';
	var $_PHPSHOP_CSV_DELIMITER = 'Delimitatore';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Field Enclosure Char';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Upload CSV File';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Invia CSV File';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Carica dalla directory';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Carica CSV File dal Server';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Esporta CSV File';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Scegli tipo di ordine';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Ordine di default';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'Mio ordine personalizzato';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Esporta tutti i Prodotti con CSV File';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'Configurazione Importa / Esporta CSV';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Salva i Cambiamenti';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Nome campo';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'Valore di default';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Campo di ordine';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Campo richiesto?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Importa/Esporta';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Aggiungi un nuovo campo';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Documentazione';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Ci dispiace, ma il Prodotto che hai richiesto non è stato trovato!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Mostra i Prodotti che sono fuori Stock';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Quando selezionato, i Prodotti che NON sono presenti a Magazzino vengono visualizzati. Altrimenti questi prodotti vengono nascosti.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'Numero di {unit} in confezione:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'Numero di {unit} in scatola:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Nascondi i prodotti fuori stock';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Featured & Discounted Products';
	var $_PHPSHOP_FEATURED = 'Featured';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Ritorno allo stato';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Ritorno al file manager';
	var $_PHPSHOP_ADD_STATE = 'Aggiungi uno Stato';
	var $_PHPSHOP_LIST_STATES = 'Lista Stati';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'featured AND discounted';
	var $_PHPSHOP_SHOW_FEATURED = 'featured products';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'prodotti scontati';
	var $_PHPSHOP_FILTER = 'Filtro';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Ritorno al sito principale';
	var $_PHPSHOP_EXPAND_TREE = 'Espandi Albero';
	var $_PHPSHOP_COLLAPSE_TREE = 'Compatta Albero';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Prezzo Scontato';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Qui puoi sovrascrivere lo sconto setting fill in a special discount price for this product.<br/>
    Il Negozio crea un nuovo "discount record" dal prezzo scontato.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Prezzo per Unità';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'Il Negozio è offline?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'Selezionando qui, il Negozio visualizzerà il Messaggio Offline';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Messaggio Offline';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Prefisso Tabella per le Tabelle del Negozio';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'Questo è <strong>vm</strong> per default';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Visualizza la Page Navigation all´Inizio della Lista Prodotto?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Seleziona o Deseleziona per Visualizzare la Page Navigation all´Inizio della Lista Prodotto nel Frontend.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Mostra il Numero dei Prodotti?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Mostra il Numero dei Prodotti presenti in una Categoria [es. Nome_Categoria (4)].';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'Stile Pulsante "Aggiungi al Carrello"';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'Abilita il Ridimensionamento Dinamico delle Immagini (Thumbnail)?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'Se selezionato, abilita il Ridimensionamento Dinamico delle Immagini.<BR> Questo significa che tutte le Thumbnail Images sono ridimensionate alle Dimensioni indicate sotto,
        attraverso le funzioni PHP GD2 (puoi verificare se hai il supporto GD2 visualizzando "Sistema" -> "Info Sistema" -> "PHP Info" -> gd).<BR>
        La qualità delle Thumbnail Image è migliore delle Immagini "ridimensionate" dal browser. Le nuove Immagini generate vengono inserite nella directory <strong>/shop_image/prduct/resized</strong>. Se le immagini sono giÃ  state ridimensionate, questa copia verrà inviata al browser (non verrà ridimensionata nuovamente).';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'Thumbnail Image Width';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'Il valore (<strong>width</strong>) in pixel delle Immagini Thumbnail ridimensionate.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Thumbnail Image Height';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'Il valore (<strong>height</strong>) in pixel delle Immagini Thumbnail ridimensionate.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Please select at least one Checkbox in the Shipping Configuration!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Configuratore Prezzi';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Gruppo Utenti che può visualizzare i prezzi';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'Il Gruppo Utenti selezionato e tutti i gruppi con privilegi più alti, saranno abilitati a visualizzare i prezzi prodotto.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Mostra "(incluso XX% IVA)" dove applicabile?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'Quando selezionato, gli utenti vedranno il testo "(incluso XX% IVA)" quanto i prezzi verranno visualizzati inclusi di IVA.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'Mostra l´etichetta prezzo per imballaggio?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'Quando selezionato, l´etichetta prezzo è derivata dal´unità prodotto e il valore dell´imballaggio:<br/>
<strong>Prezzo per Unità (10 pezzi)</strong><br/>
Quando non è selezionato, l´etichetta prezzo è quella usuale: <strong>Prezzo: &euro;xx.xx</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'ulteriori Settaggi Base';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Settaggi Base';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Settaggi Frontend';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Configuratore Tassa';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Quantity Start';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Quantity End';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'Settaggi Registrazone Utente';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'Regist. Utente abilitata?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'Attivazione Nuovi Account richiesta?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Registrazione Utente silenziosa (nascosta)?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'Quando abilitato, gli utenti non dovranno fornire username e password per un nuovo account. In questo caso l´indirizzo mail verrà usato per un nuovo account e una password random verrà generata. I dettagli della registrazione verranno inviati via mail al cliente.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Hello %s,

Grazie per esserti registrato su %s. Il tuo account cliente è stato creato.
Puoi eseguire il login su %s usando il seguente username e password:

Username - %s
Password - %s
';
	var $_PEAR_LOG_CRIT = 'Critico';
	var $_PEAR_LOG_ERR = 'Errore';
	var $_PEAR_LOG_WARNING = 'Avvertimento';
	var $_PEAR_LOG_INFO = 'Info';
	var $_PEAR_LOG_TIP = 'Info';
	var $_PEAR_LOG_ALERT = 'Allarme';
	var $_PEAR_LOG_EMERG = 'Emergenza';
	var $_PEAR_LOG_NOTICE = 'Avviso';
	var $_PEAR_LOG_DEBUG = 'Debug';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'Enable PayFlow Pro payment?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'Check to use VeriSign\'s PayFlow Pro with VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'Test mode ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'Select \'Yes\' while testing. Select \'No\' for enabling live transactions.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'VeriSign processing Partner ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'The Partner ID provided to you by the authorized VeriSign Reseller that registered you for the PayFlow Pro service';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'PayFlow Pro Login ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'This is your PayFlow Pro Login ID';
	var $_VM_TAXDETAILS_LABEL = 'Tax Total contains';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'Default product sort order';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'Defines by which field products are ordered by default on the browse pages';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'Available "Sort-by" fields';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'Choose the "Sort-by" fields for the browse page. Each one defines a sort method for the product browse page. If you deselect all, the Order-By-Form will not be shown.';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO = 'Show a short note about your "Returns Policy" on the order confirmation page?';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP = 'In most european countries store owners are required by law to inform their customers about return and order cancellation policies. So this should be enabled in most cases.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT = 'Legal information text (short version).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP = 'This text instructs your customers in short about your return and order cancellation policy. It is shown on the last page of checkout, just above the "Confirm Order" button.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK = 'Long version of the return policy (link to a content item).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP = 'Please add a new content item about the details of your return and order cancellation policy.
Afterwards you can select it here.';
	var $_VM_LEGALINFO_SHORTTEXT = '<h5>Returns Policy</h5>

You can cancel this order within two weeks after we have received it.
You can return new, unopened items from a cancelled order within 2 weeks after they have been 
delivered to you. Items should be returned in their original packaging.
For more information on cancelling orders and returning items, see the <a href="%s" onclick="%s" target="_blank">Our Returns Policy</a> page.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EU = 'European Union mode';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE = 'The directory to store session data is not writable. Please correct this or contact your provider.';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX = 'The Session Save Path %s is not writable. Please correct this! The shop is temporarily trying to use the %s instead.\'';
	var $_VM_SESSION_COOKIES_NOT_ACCEPTED_TIP = 'Your browser does not accept cookies. If you want to put products into your cart and purchase them you need to enable cookies.';
	var $_PHPSHOP_CSV_SKIP_FIRST_LINE = 'Skip first line';
	var $_PHPSHOP_CSV_SKIP_DEFAULT_VALUE = 'Skip default value';
	var $_PHPSHOP_CSV_OVERWRITE_EXISTING_DATA = 'Overwrite existing data';
	var $_PHPSHOP_CSV_INCLUDE_COLUMN_HEADERS = 'Include column headers';
	var $_PHPSHOP_CSV_UPLOAD_SETTINGS = 'Upload Settings';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS = 'Available Fields';
	var $_PHPSHOP_CSV_OUTPUT_CSV_UPLOAD_MESSAGES = 'CSV upload messages:';
	var $_PHPSHOP_CSV_OUTPUT_COUNT = 'Count';
	var $_PHPSHOP_CSV_OUTPUT_TOTAL = 'Total';
	var $_PHPSHOP_CSV_OUTPUT_FILE_IMPORTED = 'CSV File Imported';
	var $_PHPSHOP_CSV_OUTPUT_UPDATED = 'Updated';
	var $_PHPSHOP_CSV_OUTPUT_DELETED = 'Deleted';
	var $_PHPSHOP_CSV_OUTPUT_ADDED = 'Added';
	var $_PHPSHOP_CSV_OUTPUT_SKIPPED = 'Skipped';
	var $_PHPSHOP_CSV_OUTPUT_INCORRECT = 'Incorrect';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS_USE = 'The following fields are available for your use to import or export.';
	var $_PHPSHOP_CSV_MINIMAL_FIELDS = 'The minimal required fields are product_sku, product_name and category_path. Except for the product_sku, the other two fields are not unique.';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SKU = 'The unique identifier for a product.<br /.>Values:<ul><li>Number</li><li>Letters</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_NAME = 'The name of the product.Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DELETE = 'The product_delete field is a special field. This field is used to determine if a product should be deleted or not.<br />Usage:<ol><li>Add the the name "product_delete" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the value Y. If the field contains any other value, the product will not be deleted.</li></ol><br /.>Values:<ul><li>Y: Yes, the product is to be deleted</li><li>N: No, the product is not to be deleted</li><li>Empty: Empty value, the product is not to be deleted</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DESC = 'Long description for the product.<br />Values:<ul><li>Text: HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_S_DESC = 'Short description for the product.<br />Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PUBLISH = 'The status if a product is published or not.<br />Values:<ul><li>Y: Yes, the product is published</li><li>N: No, the product is not published</li><li>Empty: Empty value, the product is published.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WIDTH = 'The width of the product.<br />Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_HEIGHT = 'The height of the product.<br />Values:<ul><li>Number</li></ul>';
	var $PHPSHOP_CSV_EXPLANATION_PRODUCT_LENGTH = 'The length of the product.<br />Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABLE_DATE = 'The date a product will become availabable. For import the date should be in the format of day/month/year or day-month-year. On Windows systems the date goes until 19/01/2038.<br />Usage:<ol><li>Add the the name "product_available_date" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a date value. If the field contains any other value, the data will be ignored.</li></ol><br />Values:<ul><li>Date: day/month/year or day-month-year</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_IN_STOCK = 'The number of articles that you have in stock.<br /><br />Usage:<ol><li>Add the the name "product_in_stock" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a numeric value. If the field contains any other value, the default value will be used.</li></ol><br />Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE = 'The different choices a product has. Use this to give a product different specifications. For example a t-shirt that comes in different sizes and colours. You can specify the sizes and colours like this: Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00];AndSoOn,..,..<br /><br />You can adjust the prices per attribute by using the following options:<ul><li>+: Add this amount to the configured price.</li><li>-: Subtract this amount from the configured price.</li><li>=: Set the product\\\'s price to this amount.</li></ul><br />Usage:<ol><li>Add the the name "attribute" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the attribute text.</li></ol><br /.>Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABILITY = 'This shows when the product is available. The value can be a descriptive text or the name of an image filename. Images must be placed in "shop_image/availability/".<br />Usage:<ol><li>Add the the name "product_availability" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_FULL_IMAGE = 'The filename of the image as located in the "shop_image/product/" folder. The filename can also be a URL.<br />NOTE: If you have dynamic resizing enabled, you need to fill the "product_thumb_image" field. VirtueMart resizes the image specified there.<br/><br />Usage:<ol><li>Add the the name "product_full_image" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\\\'s are allowed.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_THUMB_IMAGE = 'The filename of the thumbnail image as located in the "shop_image/product/" folder. The filename can also be a URL.<br />NOTE: If you have dynamic resizing enabled, there still needs to be a value in this field. VirtueMart resizes the image that is specified here.<br /><br />Usage:<ol><li>Add the the name "product_full_image" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\\\'s are allowed.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CUSTOM_ATTRIBUTE = 'A custom attribute will add an input field to the product page with the description of the attribute supplied. Custom attributes are specified like this: Name;Extras;...<br />Usage:<ol><li>Add the the name "custom_attribute" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the attribute text.</li></ol><br /.>Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PACKAGING = 'Specify the number of items in the package.<br />Usage:<ol><li>Add the the name "product_packaging" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the number of items in the package.</li></ol><br /.>Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_BOX = 'Specify the number of items in the box.<br />Usage:<ol><li>Add the the name "product_box" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the number of items in the box.</li></ol><br /.>Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT = 'Specify the amount or percentage of discount the product has. The values entered are exact values, no calculation is made. This is the same as if you are filling in a discount via the Product Discount List. If the discount already exists, it will not be added to the database but the product will be linked to the existing discount. The criteria for determining if a discount already exists the following values have to be exactly the same:<ol><li>Amount, be it a total or percentage</li><li>Start date</li><li>End date</li></ol>This prevents from filling the database with a huge number of the same discounts.<br /><br />Usage:<ol><li>Add the the name "product_discount" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Optional: Add the the name "product_discount_date_start" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Optional: Add the the name "product_discount_date_end" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add the chosen columns to your CSV file with the corresponding values.</li></ol><br /.>Values:<ul><li>product_discount</li><ul><li>Number<br />e.g. 10</li><li>Percentage: Must include the % sign<br />e.g. 10%</li></ul><li>product_discount_date_start</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul><li>product_discount_date_end</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul></ul>';
	var $_ITEM_PREVIOUS = 'previous';
	var $_ITEM_NEXT = 'next';
	var $_CMN_OK = 'Ok';
	var $_CMN_CONTINUE = 'Continue';
	var $_CMN_CANCEL = 'Cancel';
	var $_BUTTON_SEND_REG = 'Send Registration';
	var $_CONTACT_FORM_NC = 'Please make sure the form is complete and valid.';
	var $_CMN_REQUIRED = 'Required';
	var $_CMN_NEW = 'New';
	var $_CMN_SAVE = 'Save';
	var $_CMN_NEW_ITEM_LAST = 'New items default to the last place. Ordering can be changed after this item is saved.';
	var $_CMN_OPTIONAL = 'Optional';
	var $_E_APPLY = 'Apply';
	var $_E_IMAGES = 'Images';
	var $_URL = 'URL:';
	var $_SEL_CATEGORY = 'Select a category';
	var $_E_REMOVE = 'Remove';
	var $_PN_LT = '<';
	var $_PN_RT = '>';
	var $_PN_PAGE = 'Page';
	var $_PN_OF = 'of';
	var $_PN_START = 'Start';
	var $_PN_PREVIOUS = 'Prev';
	var $_PN_NEXT = 'Next';
	var $_PN_END = 'End';
	var $_PN_DISPLAY_NR = 'Display #';
	var $_PN_RESULTS = 'Results';
	var $_CMN_PRINT = 'Print';
	var $_CMN_PDF = 'PDF';
	var $_CMN_EMAIL = 'E-mail';
	var $_BACK = 'Back';
	var $_USERNAME = 'Username';
	var $_PASSWORD = 'Password';
	var $_BUTTON_LOGIN = 'Login';
	var $_REGISTER_UNAME = 'Username';
	var $_REGISTER_EMAIL = 'Email';
	var $_REGWARN_NAME = 'Please enter your name.';
	var $_REGWARN_UNAME = 'Please enter a user name.';
	var $_REGWARN_MAIL = 'Please enter a valid e-mail address.';
	var $_SEND_SUB = 'Account details for %s at %s';
	var $_ASEND_MSG = 'Hello %s,
	
	A new user has registered at %s.
	This email contains their details:
	
	Name - %s
	e-mail - %s
	Username - %s
	
	Please do not respond to this message as it is automatically generated and is for information purposes only';
	var $_REG_COMPLETE = '<div class="componentheading">Registration Complete!</div><br />You may now login.';
	var $_REG_COMPLETE_ACTIVATE = '<div class="componentheading">Registration Complete!</div><br />Your account has been created and activation link has been sent to the e-mail address you entered. Note that you must activate the account by clicking on the activation link when you get the e-mail before you can login.';
	var $_DATE_FORMAT_LC = '%A, %d %B %Y';
	var $_LAST_UPDATED = 'Last Updated';
	var $_NOT_AUTH = 'You are not authorized to view this resource.';
	var $_DO_LOGIN = 'You need to login.';
	var $_VALID_AZ09 = 'Please enter a valid %s.  No spaces, more than %d characters and contain 0-9,a-z,A-Z';
	var $_CMN_PUBLISHED = 'Published';
	var $_CMN_UNPUBLISHED = 'Unpublished';
	var $_MORE = 'More...';
	var $_EMPTY_CATEGORY = 'This Category is currently empty.';
	var $_BUTTON_LOGOUT = 'Logout';
	var $_NO_ACCOUNT = 'No account yet?';
	var $_CREATE_ACCOUNT = 'Register';
	var $_REGWARN_PASS = 'Please enter a valid password.  No spaces, more than 6 characters and contain 0-9,a-z,A-Z';
	var $_REGWARN_VPASS1 = 'Please verify the password.';
	var $_REGWARN_VPASS2 = 'Password and verification do not match, please try again.';
	var $_USEND_MSG_ACTIVATE = 'Hello %s,



Thank you for registering at %s. Your account is created and must be activated before you can use it.

To activate the account click on the following link or copy-paste it in your browser:

%s



After activation you may login to %s using the following username and password:



Username - %s

Password - %s';
	var $_USEND_MSG = 'Hello %s,



Thank you for registering at %s.



You may now login to %s using the username and password you registered with.';
	var $_PROMPT_PASSWORD = 'Lost your Password?';
	var $_HI = 'Hi';
	var $_NEW_USER_MESSAGE_SUBJECT = 'New User Details';
	var $_NEW_USER_MESSAGE = 'Hello %s,





You have been added as a user to %s by an Administrator.



This email contains your username and password to log into the %s



Username - %s

Password - %s





Please do not respond to this message as it is automatically generated and is for information purposes only';
	var $_REMEMBER_ME = 'Remember me';
	var $_REGISTER_TITLE = 'Registration';
	var $_JAN = 'January';
	var $_FEB = 'February';
	var $_MAR = 'March';
	var $_APR = 'April';
	var $_MAY = 'May';
	var $_JUN = 'June';
	var $_JUL = 'July';
	var $_AUG = 'August';
	var $_SEP = 'September';
	var $_OCT = 'October';
	var $_NOV = 'November';
	var $_DEC = 'December';
	var $_PHPSHOP_CSV_VERSION = '0.7';
	var $_PHPSHOP_CSV_ABOUT = 'About';
	var $_PHPSHOP_CSV_PRICE_LIST_ONLY = 'Price list upload only';
	var $_PHPSHOP_CSV_MULTIPLE_PRICES_UPLOAD = 'Multiple prices upload';
	var $_PHPSHOP_CSV_IMPORT_CONFIG_CSV_FILE = 'Use column headers as configuration';
	var $_PHPSHOP_CSV_COLLECT_DEBUG_INFO = 'Collect debug information';
	var $_PHPSHOP_CSV_SHOW_PREVIEW = 'Show preview';
	var $_PHPSHOP_CSV_REGULAR_UPLOAD = 'Regular upload';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_UPLOAD = 'Product type upload';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_PARAMETERS_UPLOAD = 'Product type parameters upload';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_XREF_UPLOAD = 'Product type cross reference upload';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_DETAIL_UPLOAD = 'Product type detail upload';
	var $_PHPSHOP_CSV_EMPTY_DATABASE = 'Empty database';
	var $_PHPSHOP_CSV_CONTINUE_UPLOAD = 'Continue upload';
	var $_PHPSHOP_CSV_CANCEL_UPLOAD = 'Cancel upload';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION = '<span style="color: #FF0000; font-size: 1.2em;">Steps to upload a CSV file</span>

										<ol>

										<li>Create a product list as a CSV file either with or without column headers.

										<br />Recommended is to use the text delimiter ~ (tilde) and the field delimiter ^ (caret).

										<br /><span style="font-weight: bold;">Example File:</span><br />

										<div class="quote" style="width:600px;overflow:scroll;"><pre>~G01~^~Hand Shovel~^~Hand Tools~^~4.99000~^~<p>Nice hand shovel to dig with in the yard.</p>~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5\~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~8d886c5855770cc01a3b8a2db57f6600.jpg~^~cca3cd5db813ee6badf6a3598832f2fc.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~10~^~1072911600~^~1~^~1~^~2~^~0~^~G01~^~~^~~^~Color::1|Size::2~^~~

~G02~^~Ladder~^~Garden Tools~^~49.99000~^~A really long ladder to reach high places.~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5\~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~ffd5d5ace2840232c8c32de59553cd8d.jpg~^~8cb8d644ef299639b7eab25829d13dbc.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~76~^~1072911600~^~0~^~1~^~2~^~0~^~G02~^~~^~~^~Material::1~^~~

~G03~^~Shovel~^~Garden Tools~^~24.99000~^~Nice shovel.  You can dig your way to China with this one.~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5\~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~8147a3a9666aec0296525dbd81f9705e.jpg~^~520efefd6d7977f91b16fac1149c7438.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~32~^~1072911600~^~0~^~1~^~2~^~0~^~G03~^~Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00]~^~~^~~^~~</pre></div></li>

										<li>Setup the fields on the "Configuration" tab in the same order as the CSV file. The fields must match the exact place in the CSV file.

										<br />E.g. product_sku, product_desc, product_price, category_path<br />

										<br /><span style="font-weight: bold;">Minimum required information to add a product is:</span><br />

										product_sku<br />

										product_name<br />

										category_path<br />

										<br /><span style="font-weight: bold;">category_path</span> is a slash delimited string which begins

										with a top-level category and follows with sub-categories, e.g. <br />

										<div class="quote">category/sub-category_1/sub_category_2</div>

										<br />

										When the product has to be assigned to more than one category, you can

										provide all categories,<br />

										delimited by a <span style="font-weight: bold;">|</span>

										<div class="quote">Category/Sub-category_1/Sub_category_2|Category2/Subcategory22|Category3/Subcategory33</div>

										</li>

										<li>Choose the delimiters on the "Import/Export" tab.</li>

										<li>Choose the upload settings on the "Import/Export" tab.</li>

										<li>Choose either to upload the file from your local computer (Submit CSV File) or to use a local file (Load CSV File from Server).</li>

										<li>The import starts.</li>

										</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_PRODUCT_TYPES = '<span style="color: #FF0000; font-size: 1.2em;">Product Types</span><br /><br />

													To add product types, you need 4 CSV files. Each CSV file represents a part of the product type.

													<ul>

													<li><span style="font-weight: bold;">Product types</span><br />

													This CSV file contains the main product types and should look like this:

													<table border="1">

													<tr style="border: 1px solid #000000;"><td>product_type_name</td><td>product_type_description</td><td>product_type_publish</td><td>product_type_browsepage</td><td>product_type_flypage</td></tr>

													<tr><td>Music track</td><td>Track</td><td>Y</td><td>&nbsp;</td><td>&nbsp;</td></tr>

													<tr><td>Music album</td><td>Album</td><td>Y</td><td>&nbsp;</td><td>&nbsp;</td></tr>

													<tr><td>Music artist</td><td>Artist</td><td>Y</td><td>&nbsp;</td><td>&nbsp;</td></tr>

													</table>

													</li><br />

													<li><span style="font-weight: bold;">Product type parameters</span><br />

													This CSV file contains the parameters per product type and should look like this:

													<div style="width: 50%; overflow: auto; height: 100px;">

													<table border="1">

													<tr><td>product_type_name</td><td>product_type_parameter_name</td><td>product_type_parameter_label</td><td>product_type_parameter_description</td><td>product_type_parameter_list_order</td><td>product_type_parameter_type</td><td>product_type_parameter_values</td><td>product_type_parameter_multiselect</td><td>product_type_parameter_default</td><td>product_type_parameter_unit</td></tr>

													<tr><td>Music artist</td><td>Name</td><td>Name</td><td>Artist Name</td><td>1</td><td>I</td><td>&nbsp;</td><td>N</td><td>&nbsp;</td><td>&nbsp;</td></tr>

													<tr><td>Music artist</td><td>Birth</td><td>Birth</td><td>Artist Birth</td><td>2</td><td>D</td><td>&nbsp;</td><td>N</td><td>&nbsp;</td><td>&nbsp;</td></tr>

													<tr><td>Music album</td><td>Duration</td><td>Duration</td><td>Duration of album</td><td>3</td><td>M</td><td>00:01:00;00:02:00;00:03:00</td><td>Y</td><td>00:02:00</td><td>minutes</td></tr>

													</table>

													</div>

													<br />

													The product type parameter type can have several values, they are:

													<ul>

													<li>I: Integer</li>

													<li>T: Text</li>

													<li>S: Short Text</li>

													<li>F: Float</li>

													<li>C: Char</li>

													<li>D: Date & Time</li>

													<li>M: Time</li>

													<li>V: Multiple Values</li>

													<li>B: Break Line</li>

													</ul>

													</li><br />

													<li><span style="font-weight: bold;">Items per product type name</span><br />

													This CSV file contains the details per product type parameter name and should look like this:

													<table border="1">

													<tr><td>product_sku</td><td>product_type_name</td><td>product_type_parameter_namex</td><td>product_type_parameter_namex</td></tr>

													<tr><td>1234</td><td>Music artist</td><td>Singing Star</td><td>1975</td></tr>

													<tr><td>5678</td><td>Music artist</td><td>Rocking Band</td><td>1980</td></tr>

													</table><br />

													Per product type name you need a seperate CSV file. The reason for this is that the column names for each CSV file is different because of the set of product type parameters.

													</li><br />

													<li><span style="font-weight: bold;">Product type cross reference to product SKU</span><br />

													This CSV file contains the link between a product type and a product SKU and should look like this:

													<table border="1">

													<tr><td>product_sku</td><td>product_type_name</td></tr>

													<tr><td>1234</td><td>Music artist</td></tr>

													<tr><td>5678</td><td>Music artist</td></tr>

													</table>

													</li>

													</ul><br />

													Procedure:<br />

													<ol>

													<li>Upload Product Types CSV file</li>

													<li>Upload Product Type Parameters CSV file</li>

													<li>Upload Product Type Items CSV file</li>

													<li>Upload Product Type Cross Reference CSV file</li>

													</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_EMPTY_DATABASE = '<span style="color: #FF0000; font-size: 1.2em;">Empty Database</span><br /><br />

													 <span style="color: #FF0000; font-size: 2em;">USE WITH CAUTION !!! NO RESTORE !!!</span><br /><br />

													 Emptying the database will remove ALL data in your database from the following tables:

													 <ul>

													 <li>products</li>

													 <li>products</li>

													 <li>product_price</li>

													 <li>product_mf_xref</li>

													 <li>product_attribute</li>

													 <li>category</li>

													 <li>category_xref</li>

													 <li>product_attribute_sku</li>

													 <li>product_category_xref</li>

													 <li>product_discount</li>

													 <li>product_type</li>

													 <li>product_type_parameter</li>

													 <li>product_product_type_xref</li>

													 </ul>

													 All but the first manufacturer is removed:

													 <ul>

													 <li>manufacturer</li>

													 </ul>

													 The following tables are completely deleted:

													 <ul>

													 <li>product_type_x</li>

													 </ul>

													 The x represents the number of the table. This number relates to the product types that are in the system. Since the product types table is completely emptied, these tables are removed. Uploading new product types will recreate the tables.<br /><br />

													 Procedure:

													 <ol>

													 <li>Choose "Empty Database" from the dropdown on the Upload Settings</li>

													 <li>Check "Collect debug information" if you want additional result information</li>

													 <li>Click "Submit CSV File" or "Load CSV File from Server". No need to enter a filename.</li>

													 <li>You are asked if you are sure you want to empty your database. Click OK if you are sure otherwise click Cancel</li>

													 <li>The database is now emptied or you are returned to the main screen depending on your previous choice</li>

													 </ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_MULTIPLE_PRICES_UPLOAD = '<span style="color: #FF0000; font-size: 1.2em;">Multiple prices upload</span><br /><br />

														    Procedure:

														    <ol>

														    <li>Create a CSV file that contains the following fields:

														    	<ul>

															<li>product_sku</li>

															<li>product_price</li>

															<li>product_currency</li>

															<li>price_quantity_start</li>

															<li>price_quantity_end</li>

															<li>price_delete</li>

															</ul>

														    See the Available Fields tab for what information each field contains. If you want to use the column headers as configuration, fill the first line with the column headers name.

														    </li>

														    <li>Either set the configuration fields, as mentioned in point 1 on the Configuration tab or if you added column headers to your CSV file, select "Use column headers as configuration" at the Upload Settings.

														    </li>

														    <li>Select "Multiple Prices Upload" at the Upload Settings</li>

														    <li>Optionally, choose "Show preview" and/or "Collect debug information"</li>

														    <li>Select a file to upload or to load from directory</li>

														    <li>Select "Submit CSV File" or "Load CSV File from Server" depending if you are uploading a file or loading a file from a directory</li>

														    <li>The prices will now be imported</li>

														    </ol><br /><br />

														    <span style="font-weight: bold;">Price delete</span><br />

														    Using the multiple prices import it is also possible to delete prices. A price is deleted when the following fields in the CSV file match the data in the database:

														    <ul>

														    <li>product_sku</li>

														    <li>product_price</li>

														    <li>product_currency</li>

														    <li>price_quantity_start</li>

														    <li>price_quantity_end</li>

														    </ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PRICE = 'The price for a product without currency denominator.<br /><br />Usage:<ol><li>Select the name "product_price" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a price value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LENGTH = 'The length of the product.<br /><br />Usage:<ol><li>Select the name "product_length" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a numeric value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LWH_UOM = 'The measurement of length, width and height of the product.This can be inches, centimeters, etc.<br /><br />Usage:<ol><li>Select the name "product_lwh_uom" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT = 'The weight of the product.<br /><br />Usage:<ol><li>Select the name "product_weight" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a numeric value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT_UOM = 'The measurement of weight of the product.This can be pounds, kilo, etc.<br /><br />Usage:<ol><li>Select the name "product_weight_uom" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTES = 'Attributes are part of a product and are used by the child products to give them specifications.<br />Usage:<ol><li>Select the name "attributes" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the attributes text.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.<br />The values must be seperated by a pipe symbol (|). E.g.: attribute_name::list_order|attribute_name::list_order</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE_VALUES = 'Attribute values are the values of child products that are linked to the attributes of the parent product.<br />Usage:<ol><li>Select the name "custom_attribute" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the attribute value text.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.<br />The values must be seperated by a pipe symbol (|). E.g.: attribute_name::attribute_value|attribute_name::attribute_value</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_START = 'The day the discount for a product starts. For more information see "product_discount".<br /><br />Usage:<ol><li>Select the name "product_discount_date_start" from the dropdown menu on the configuration screen.</li><li>Add the chosen columns to your CSV file with the date value.</li></ol><br />Values:<ul><li>product_discount_date_start</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_END = 'The day the discount for a product ends. For more information see "product_discount".<br /><br />Usage:<ol><li>Select the name "product_discount_date_end" from the dropdown menu on the configuration screen.</li><li>Add the chosen columns to your CSV file with the date value.</li></ol><br />Values:<ul><li>product_discount_date_end</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_UPLOAD_SETTINGS = '<ul><li><span style="font-weight: bold;">Skip first line</span><br />If the CSV file has a header line at the beginning, choose this option to skip that line. This prevents the header from being added to your database.</li><li><span style="font-weight: bold;">Overwrite existing data</span><br />When adding new products to your database, unchecking this option prevents any existing data to be replaced for products that already exist in your database. Default is to update product data.</li><li><span style="font-weight: bold;">Skip default value</span><br />On the configuration page, a default value can be specified in case the field is empty in the CSV file. Enabling this option, the import will not include the field for updating if there is no value in the CSV file.</li><li><span style="font-weight: bold;">Price list upload only</span><br />The Price list upload only is to be used if you are updating the prices of your products. The layout of the CSV is expected to be 2 columns:<ol><li>product_sku</span></li><li>product_price</li></ol></li>Please note that it does NOT take into account the settings on the configuration page.<li><span style="font-weight: bold;">Use column headers as configuration</span><br />If the CSV file has column headers on the first line, this option can be used to use the column headers as the current configuration. The column headers should match one of the column names defined on the Available Tabs page. This configuration is on a per use basis, nothing is saved. Default values cannot be used with this option.</li><li><span style="font-weight: bold;">Show preview</span><br />Shows a 5 line preview of the file to be imported. The import can then be either cancelled or continued.</li><li><span style="font-weight: bold;">Collect debug information</span><br />In case of problems, use this option to see what happens during the import. At the end of the import a report will be generated with the steps and queries done during the import.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_NAME = 'The name of the manufacturer that is related to the product. This is used in combination with the manufacturer ID. If no manufacturer ID is specified, only the name is checked. New manufacturers will be created wiht incremental IDs. The process of adding/updating manufacturers follows the following guidelines:<ol><li>Name exists, ID exists --> ID is updated if different</li><li>Name exists, ID does not exist --> New manufacturer created with increment ID</li><li>Name does not exist, ID exists --> Generic name added with existing ID</li><li>Name does not exist, ID does not exist --> Do nothing</li></ol>Usage:<ol><li>Select the name "manufacturer_name" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the manufacturer name.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_ID = 'The ID of the manufacturer that is related to the product and must be unique. This is used in combination with the manufacturer name. If no manufacturer name is specified only, the product manufacturer link will be added/updated. Adding/updating manufacturers follows the following process:<ol><li>Name exists, ID exists --> ID is updated if different</li><li>Name exists, ID does not exist --> New manufacturer created with increment ID</li><li>Name does not exist, ID exists --> Generic name added with existing ID</li><li>Name does not exist, ID does not exist --> Do nothing</li></ol>When no name or ID exists nothing is done to prevent numerous generic name manufacturers from being added.<br /><br />Usage:<ol><li>Select the name "manufacturer_id" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the manufacturer ID.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_URL = 'A URL to either a picture or webpage of the product. When linked to a picture, the picture will be shown on the product details page.<br /><br />Usage:<ol><li>Select the name "product_url" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SALES = 'The number of products that have been sold.<br /><br />Usage:<ol><li>Select the name "product_sales" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a numeric value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SPECIAL = 'When a product is set to be "On Special" it will be featured in the Featured Products block.<br />Usage:<ol><li>Select the name "product_special" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the value Y.</li></ol><br />Values:<ul><li>Y: Yes, the product is on special</li><li>N: No, the product is not on special</li><li>Empty: Empty value, the product is not on special</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_UNIT = 'The unit of the product as it is sold. I.e. box, bag, etc.<br />Usage:<ol><li>Select the name "product_unit" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the value Y.</li></ol><br />Values:<ul><li>Text: No HTML allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CATEGORY_PATH = 'Parent products are categorized according to the category path. The category path specifies in which category a product belongs. This only counts for main products not for child products since child products relate to parent products, not to categories. For child products this field must be left empty. The product_parent_sku must be empty for main products since they do not relate to any other parent product.<br /><br />Usage:<ol><li>Select the name "category_path" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the path.</li></ol><br />Values:<ul><li>Text: No HTML allowed<br />The category path must be seperated by a forward slash (/). E.g.: Furniture/Chairs/Teak</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PARENT_SKU = 'The product parent sku is needed to identify the parent of child products. Please note: the "category_path" field MUST be empty otherwise the product will be treated as a parent product.<br />Usage:<ol><li>Select the name "category_path" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the product_sku value of the parent product.</li></ol><br />Values:<ul><li>Numeric</li><li>Letters</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TAX_ID = 'The ID of the tax rate that you want to apply to the product<br />Usage:<ol><li>Select the name "product_tax_id" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the product_tax_id value of the appropiate tax.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_CURRENCY = 'A different currency can be specified on a per product basis.<br />Usage:<ol><li>Select the name "product_currency" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the value of the new currency.</li></ol><br />Values:<ul><li>Text: No HTML allowed<br />E.g.: EUR, USD, IDR</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_BROWSEPAGE = 'This is a custom page to show your product types. Leave this BLANK if you have no individual php-file for it.<br /><br />Usage:<ol><li>Select the name "product_type_browsepage" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\'s are allowed.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_DESCRIPTION = 'A description for your product type.<br /><br />Usage:<ol><li>Select the name "product_type_description" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_FLYPAGE = 'This is a custom page to show your product types. Leave this BLANK if you have no individual php-file for it.<br /><br />Usage:<ol><li>Select the name "product_type_flypage" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\'s are allowed.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_NAME = 'The name of the product type. This name must be unique and without spaces.<br /><br />Usage:<ol><li>Select the name "product_type_name" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DEFAULT = 'A default value to show when there is nothing else filled in for the parameter.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_default" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DESCRIPTION = 'A description for your product type parameter.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_description" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LABEL = 'A label for your product type parameter.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_label" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LIST_ORDER = 'Specify in which order the product parameter is to be displayed.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_list_order" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_MULTISELECT = 'Set to yes to show possible parameter values as multiple select items<br /><br />Usage:<ol><li>Select the name "product_type_parameter_list_multiselect" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the value Y or N.</li></ol><br />Values:<ul><li>Y: Yes, the values are multi select</li><li>N: No, the values are not multi select</li><li>Empty: Empty value, the values are not multi select</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_NAME = 'The name of the product type parameter. This name must be unique and without spaces as it will be the column name for the parameter details.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_type" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_TYPE = 'This sets the type of parameter that will be used. There are a number of different values that can be used.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_type" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the value.</li></ol><br />Values:<ul><li>Text:<ul>

													<li>I: Integer</li>

													<li>T: Text</li>

													<li>S: Short Text</li>

													<li>F: Float</li>

													<li>C: Char</li>

													<li>D: Date & Time</li>

													<li>M: Time</li>

													<li>V: Multiple Values</li>

													<li>B: Break Line</li>

													</ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_UNIT = 'The unit the product type parameter refers to.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_unit" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_VALUES = 'These are the values for the parameter and have to meet the requirement set by the parameter type.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_values" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>This depends on the type set in the product_type_parameter_type field. All values have to be semi-colon (;) seperated.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PUBLISH = 'The status if a product type is published or not.<br /><br />Usage:<ol><li>Select the name "product_type_publish" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Y: Yes, the product type is published</li><li>N: No, the product type is not published</li><li>Empty: Empty value, the product type is published.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_DELETE = 'The price_delete field is a special field. This field is used to determine if a price for a product should be deleted or not. This field is used when doing a multiple price upload. Before a price is deleted it needs to match the following fields:<ul><li>product_sku</li><li>product_price</li><li>product_currency</li><li>price_quantity_start</li><li>price_quantity_end</li></ul><br />Usage:<ol><li>Select the name "price_delete" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the value Y. If the field contains any other value, the product will not be deleted.</li></ol><br />Values:<ul><li>Y: Yes, the price is to be deleted</li><li>N: No, the price is not to be deleted</li><li>Empty: Empty value, the price is not to be deleted</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_START = 'The quantity at which the mentioned price is available.<br /><br />Usage:<ol><li>Select the name "price_quantity_start" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a numeric value.</li></ol><br />Values: Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_END = 'The quantity at which the mentioned price is no longer available.<br /><br />Usage:<ol><li>Select the name "price_quantity_end" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a numeric value.</li></ol><br />Values: Numeric</li></ul>';
        
}
class phpShopLanguage extends vmLanguage { }

/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>