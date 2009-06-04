<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : swedish.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translators:Stefan Gagner, Mei Ya Service, http://www.mei-ya.se & Mia Steen, 1st Solution http://www.1stsolution.se
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
	'PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL' => 'Betalningshistorik',
	'PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL' => 'Fraktpris',
	'PHPSHOP_ORDER_STATUS_LIST_CODE' => 'Orderstatuskod',
	'PHPSHOP_ORDER_STATUS_LIST_NAME' => 'Orderstatusnamn',
	'PHPSHOP_ORDER_STATUS_FORM_LBL' => 'Orderstatus',
	'PHPSHOP_ORDER_STATUS_FORM_CODE' => 'Orderstatuskod',
	'PHPSHOP_ORDER_STATUS_FORM_NAME' => 'Orderstatusnamn',
	'PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER' => 'Sortering',
	'PHPSHOP_COMMENT' => 'Kommentarer',
	'PHPSHOP_ORDER_LIST_NOTIFY' => 'Meddela kund?',
	'PHPSHOP_ORDER_LIST_NOTIFY_ERR' => 'Var god �ndra orderstaus f�rst!',
	'PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT' => 'Infoga denna kommentar?',
	'PHPSHOP_ORDER_HISTORY_DATE_ADDED' => 'Tillagd datum',
	'PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED' => 'Kunden meddelad?',
	'PHPSHOP_ORDER_STATUS_CHANGE' => '�ndring Orderstatus',
	'PHPSHOP_ORDER_LIST_PRINT_LABEL' => 'Utskr etikett',
	'PHPSHOP_ORDER_LIST_VOID_LABEL' => 'F�rsegling',
	'PHPSHOP_ORDER_LIST_TRACK' => 'Sp�rning',
	'VM_DOWNLOAD_STATS' => 'NEDLADD STAT',
	'VM_DOWNLOAD_NOTHING_LEFT' => 'inga nedladdninagr kvar',
	'VM_DOWNLOAD_REENABLE' => '�teraktivera nedladdning',
	'VM_DOWNLOAD_REMAINING_DOWNLOADS' => 'Nedladdningar kvar',
	'VM_DOWNLOAD_RESEND_ID' => 'Skicka Nedladdn-ID p� nytt',
	'VM_EXPIRY' => 'F�rfaller',
	'VM_UPDATE_STATUS' => 'Uppdateringsstatus',
	'VM_ORDER_LABEL_ORDERID_NOTVALID' => 'Ange ett giltigt numeriskt Order-ID, inte "{order_id}"',
	'VM_ORDER_LABEL_NOTFOUND' => 'Orderposten ej funnen i databas f�r fraktetikett.',
	'VM_ORDER_LABEL_NEVERGENERATED' => 'Etiketten �nnu ej skapad',
	'VM_ORDER_LABEL_CLASSCANNOT' => 'Klassen {ship_class} kan inte erh�lla etikettbilder, varf�r �r vi h�r?',
	'VM_ORDER_LABEL_SHIPPINGLABEL_LBL' => 'Fraktetikett',
	'VM_ORDER_LABEL_SIGNATURENEVER' => 'Signaturen ej erh�llen',
	'VM_ORDER_LABEL_TRACK_TITLE' => 'Sp�rning',
	'VM_ORDER_LABEL_VOID_TITLE' => 'F�rsegling',
	'VM_ORDER_LABEL_VOIDED_MSG' => 'Etiketten f�r frakt {tracking_number} har annullerats.',
	'VM_ORDER_PRINT_PO_IPADDRESS' => 'IP-ADRESS',
	'VM_ORDER_STATUS_ICON_ALT' => 'StatusIcon',
	'VM_ORDER_PAYMENT_CCV_CODE' => 'CVV-Kod',
	'VM_ORDER_NOTFOUND' => 'Kunde inte hitta order! Den kan vara borttagen.',
	'PHPSHOP_ORDER_EDIT_ACTIONS' => 'Aktiviteter',
	'PHPSHOP_ORDER_EDIT' => '�ndra orderinformation',
	'PHPSHOP_ORDER_EDIT_ADD' => 'Ny',
	'PHPSHOP_ORDER_EDIT_ADD_PRODUCT' => 'Ny Produkt',
	'PHPSHOP_ORDER_EDIT_EDIT_ORDER' => '�ndra Order',
	'PHPSHOP_ORDER_EDIT_ERROR_QUANTITY_MUST_BE_HIGHER_THAN_0' => 'Antalet m�ste vara st�rre �n 0.',
	'PHPSHOP_ORDER_EDIT_PRODUCT_ADDED' => 'Produkten har lagts till ordern',
	'PHPSHOP_ORDER_EDIT_PRODUCT_DELETED' => 'Produkten har tagits bort fr�n ordern',
	'PHPSHOP_ORDER_EDIT_QUANTITY_UPDATED' => 'Antalet har uppdaterats',
	'PHPSHOP_ORDER_EDIT_RETURN_PARENTS' => 'tillbaka till �verordnad Produkt',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT' => 'V�lj en Produkt',
	'PHPSHOP_ORDER_CHANGE_UPD_BILL' => '�ndra faktureringsadress',
	'PHPSHOP_ORDER_CHANGE_UPD_SHIP' => '�ndra leveransadress',
	'PHPSHOP_ORDER_EDIT_SOMETHING_HAS_CHANGED' => ' har �ndrats',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT_BY_SKU' => 'V�lj produktnr'
); $VM_LANG->initModule( 'order', $langvars );
?>
