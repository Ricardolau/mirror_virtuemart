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
	'PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL' => 'Registro de pago',
	'PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL' => 'Precio de env�o',
	'PHPSHOP_ORDER_STATUS_LIST_CODE' => 'C�digo de estado de pedido',
	'PHPSHOP_ORDER_STATUS_LIST_NAME' => 'Nombre de estado de pedido',
	'PHPSHOP_ORDER_STATUS_FORM_LBL' => 'Estado de pedido',
	'PHPSHOP_ORDER_STATUS_FORM_CODE' => 'C�digo de estado de pedido',
	'PHPSHOP_ORDER_STATUS_FORM_NAME' => 'Nombre de estado de pedido',
	'PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER' => 'Ordenar',
	'PHPSHOP_COMMENT' => 'Comentario',
	'PHPSHOP_ORDER_LIST_NOTIFY' => '�Notificar cliente?',
	'PHPSHOP_ORDER_LIST_NOTIFY_ERR' => 'Por favor, �cambia el estado del pedido primero!',
	'PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT' => '�Incluir este comentario?',
	'PHPSHOP_ORDER_HISTORY_DATE_ADDED' => 'Fecha de a�adido',
	'PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED' => '�Cliente notificado?',
	'PHPSHOP_ORDER_STATUS_CHANGE' => 'Cambio estado de pedido',
	'PHPSHOP_ORDER_LIST_PRINT_LABEL' => 'Imprimir etiqueta',
	'PHPSHOP_ORDER_LIST_VOID_LABEL' => 'Etiqueta prohibida',
	'PHPSHOP_ORDER_LIST_TRACK' => 'Seguimiento',
	'VM_DOWNLOAD_STATS' => 'ESTAD�STICA DESCARGAS',
	'VM_DOWNLOAD_NOTHING_LEFT' => 'sin descargas restantes',
	'VM_DOWNLOAD_REENABLE' => 'Reactivar descarga',
	'VM_DOWNLOAD_REMAINING_DOWNLOADS' => 'Descargas pendientes',
	'VM_DOWNLOAD_RESEND_ID' => 'Reenviar ID de descarga',
	'VM_EXPIRY' => 'Expiraci�n',
	'VM_UPDATE_STATUS' => 'Estado actualizaci�n',
	'VM_ORDER_LABEL_ORDERID_NOTVALID' => 'Por favor proporcionar un v�lido, num�rico, ID de pedido, no "{order_id}"',
	'VM_ORDER_LABEL_NOTFOUND' => 'Order record not found in shipping label database.',
	'VM_ORDER_LABEL_NEVERGENERATED' => 'Etiqueta aun no ha sido generada',
	'VM_ORDER_LABEL_CLASSCANNOT' => 'Class {ship_class} cannot get label images, why are we here?',
	'VM_ORDER_LABEL_SHIPPINGLABEL_LBL' => 'Shipping Label',
	'VM_ORDER_LABEL_SIGNATURENEVER' => 'Signature was never retrieved',
	'VM_ORDER_LABEL_TRACK_TITLE' => 'Track',
	'VM_ORDER_LABEL_VOID_TITLE' => 'Void Label',
	'VM_ORDER_LABEL_VOIDED_MSG' => 'Label for waybill {tracking_number} has been voided.',
	'VM_ORDER_PRINT_PO_IPADDRESS' => 'DIRECCI�N-IP',
	'VM_ORDER_STATUS_ICON_ALT' => 'Icono estado',
	'VM_ORDER_PAYMENT_CCV_CODE' => 'C�digo CVV',
	'VM_ORDER_NOTFOUND' => '�Pedido no encontrado! Puede haber sido eliminado',
	'PHPSHOP_ORDER_EDIT_ACTIONS' => 'Acciones',
	'PHPSHOP_ORDER_EDIT' => 'Cambiar detalles pedido',
	'PHPSHOP_ORDER_EDIT_ADD' => 'A�adir',
	'PHPSHOP_ORDER_EDIT_ADD_PRODUCT' => 'A�adir producto',
	'PHPSHOP_ORDER_EDIT_EDIT_ORDER' => 'Cambiar orden',
	'PHPSHOP_ORDER_EDIT_ERROR_QUANTITY_MUST_BE_HIGHER_THAN_0' => 'La cantidad debe ser superior a 0.',
	'PHPSHOP_ORDER_EDIT_PRODUCT_ADDED' => 'El producto ha sido a�adido al pedido',
	'PHPSHOP_ORDER_EDIT_PRODUCT_DELETED' => 'El producto ha sido removido de este pedido',
	'PHPSHOP_ORDER_EDIT_QUANTITY_UPDATED' => 'La cantidad ha sido actualizada',
	'PHPSHOP_ORDER_EDIT_RETURN_PARENTS' => 'volver al producto padre',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT' => 'Selecciona un producto',
	'PHPSHOP_ORDER_CHANGE_UPD_BILL' => 'Cambiar direcci�n de facturaci�n',
	'PHPSHOP_ORDER_CHANGE_UPD_SHIP' => 'Cambiar direcci�n de env�o',
	'PHPSHOP_ORDER_EDIT_SOMETHING_HAS_CHANGED' => 'ha sido cambiado',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT_BY_SKU' => 'Selecciona SKU'
); $VM_LANG->initModule( 'order', $langvars );
?>
