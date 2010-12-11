<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version $Id: norwegian.php 464 2008-08-05 20:13:18Z rued $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* Translation is based on old language file for VM 1.0.
* New translation and cleanup for v1.1 by Odd-Eirik Eriksen (abc@abc-konsult.no) and Rune Rasmussen (syntaxerror.no).
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
	'PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL' => 'Betalingslogg',
	'PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL' => 'Fraktpris',
	'PHPSHOP_ORDER_STATUS_LIST_CODE' => 'Ordrestatuskode',
	'PHPSHOP_ORDER_STATUS_LIST_NAME' => 'Ordrestatusnavn',
	'PHPSHOP_ORDER_STATUS_FORM_LBL' => 'Ordrestatus',
	'PHPSHOP_ORDER_STATUS_FORM_CODE' => 'Ordrestatuskode',
	'PHPSHOP_ORDER_STATUS_FORM_NAME' => 'Ordrestatusnavn',
	'PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER' => 'Ordreliste',
	'PHPSHOP_COMMENT' => 'Kommentar',
	'PHPSHOP_ORDER_LIST_NOTIFY' => 'Varsle kunden?',
	'PHPSHOP_ORDER_LIST_NOTIFY_ERR' => 'Vennligst endre ordrestatus først!',
	'PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT' => 'Inkluder denne kommentaren?',
	'PHPSHOP_ORDER_HISTORY_DATE_ADDED' => 'Lagt til',
	'PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED' => 'Kunde varslet?',
	'PHPSHOP_ORDER_STATUS_CHANGE' => 'Status for ordre endret',
	'PHPSHOP_ORDER_LIST_PRINT_LABEL' => 'Print Label',
	'PHPSHOP_ORDER_LIST_VOID_LABEL' => 'Void Label',
	'PHPSHOP_ORDER_LIST_TRACK' => 'Track',
	'VM_DOWNLOAD_STATS' => 'DOWNLOAD STATS',
	'VM_DOWNLOAD_NOTHING_LEFT' => 'no downloads remaining',
	'VM_DOWNLOAD_REENABLE' => 'Re-Enable Download',
	'VM_DOWNLOAD_REMAINING_DOWNLOADS' => 'Remaining Downloads',
	'VM_DOWNLOAD_RESEND_ID' => 'Resend Download ID',
	'VM_EXPIRY' => 'Expiry',
	'VM_UPDATE_STATUS' => 'Update Status',
	'VM_ORDER_LABEL_ORDERID_NOTVALID' => 'Please provide a valid, numeric, Order ID, not "{order_id}"',
	'VM_ORDER_LABEL_NOTFOUND' => 'Order record not found in shipping label database.',
	'VM_ORDER_LABEL_NEVERGENERATED' => 'Label has not been generated yet',
	'VM_ORDER_LABEL_CLASSCANNOT' => 'Class {ship_class} cannot get label images, why are we here?',
	'VM_ORDER_LABEL_SHIPPINGLABEL_LBL' => 'Shipping Label',
	'VM_ORDER_LABEL_SIGNATURENEVER' => 'Signature was never retrieved',
	'VM_ORDER_LABEL_TRACK_TITLE' => 'Track',
	'VM_ORDER_LABEL_VOID_TITLE' => 'Void Label',
	'VM_ORDER_LABEL_VOIDED_MSG' => 'Label for waybill {tracking_number} has been voided.',
	'VM_ORDER_PRINT_PO_IPADDRESS' => 'IP-adresse',
	'VM_ORDER_STATUS_ICON_ALT' => 'Statusikon',
	'VM_ORDER_PAYMENT_CCV_CODE' => 'CVV-kode',
	'VM_ORDER_NOTFOUND' => 'Kunne ikke finne ordren, den kan ha blitt slettet.',
	'PHPSHOP_ORDER_EDIT_ACTIONS' => 'Handlinger',
	'PHPSHOP_ORDER_EDIT' => 'Endre ordredetaljer',
	'PHPSHOP_ORDER_EDIT_ADD' => 'Legg til',
	'PHPSHOP_ORDER_EDIT_ADD_PRODUCT' => 'Legg til produkt',
	'PHPSHOP_ORDER_EDIT_EDIT_ORDER' => 'Endre ordre',
	'PHPSHOP_ORDER_EDIT_ERROR_QUANTITY_MUST_BE_HIGHER_THAN_0' => 'Antall må være høyere enn 0.',
	'PHPSHOP_ORDER_EDIT_PRODUCT_ADDED' => 'Produktet ble lagt til ordren',
	'PHPSHOP_ORDER_EDIT_PRODUCT_DELETED' => 'Produktet ble fjernet fra ordren',
	'PHPSHOP_ORDER_EDIT_QUANTITY_UPDATED' => 'Antall har blitt oppdatert',
	'PHPSHOP_ORDER_EDIT_RETURN_PARENTS' => 'tilbake til hovedproduktet',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT' => 'Velg et produkt',
	'PHPSHOP_ORDER_CHANGE_UPD_BILL' => 'Endre fakturaadresse',
	'PHPSHOP_ORDER_CHANGE_UPD_SHIP' => 'Endre leveringsadresse',
	'PHPSHOP_ORDER_EDIT_SOMETHING_HAS_CHANGED' => ' har blitt endret',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT_BY_SKU' => 'Velg produktnummer'
); $VM_LANG->initModule( 'order', $langvars );
?>
