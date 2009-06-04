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
	'PHPSHOP_NO_CUSTOMER' => 'Aun no eres un cliente registrado. Por favor, registrate en nuestra tienda para proseguir.',
	'PHPSHOP_THANKYOU' => 'Gracias por tu pedido.',
	'PHPSHOP_EMAIL_SENDTO' => 'Un email de confirmación te ha sido enviado a',
	'PHPSHOP_CHECKOUT_NEXT' => 'Siguiente',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'Información de Factura',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'Empresa',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'Nombre',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'Dirección',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'Correo electrónico',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'Información de envío',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'Empresa',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'Nombre',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'Dirección',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'Teléfono',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'Fax',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'Método de pago',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'información requerida cuando el pago con tarjeta de crédito es seleccionado',
	'PHPSHOP_PAYPAL_THANKYOU' => 'Gracias, la transacción ha sido aceptada. Recibirás un email de confirmación de la transacción de parte de PayPal. Ahora puedes continuar o iniciar sesión en <a href=http://www.paypal.com>www.paypal.com</a> para ver los detalles de la transacción.',
	'PHPSHOP_PAYPAL_ERROR' => 'Un error ha ocurrido durante el proceso de la transacción. El estado de tu pedido no puede ser actualizado.',
	'PHPSHOP_THANKYOU_SUCCESS' => '¡Se ha grabado correctamente su pedido!',
	'VM_CHECKOUT_TITLE_TAG' => 'Procesando pedido: Paso %s de %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => '¡El ID del pedido no ha sido establecido o está vacío!',
	'VM_CHECKOUT_FAILURE' => 'Fallo',
	'VM_CHECKOUT_SUCCESS' => 'Éxito',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'This page is located on the webshop\'s website.',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'The gateway execute the page on the website, and the shows the result SSL Encrypted.',
	'VM_CHECKOUT_CCV_CODE' => 'Código de validación de la tarjeta de crédito',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => '¿Qué es el código de validación de la tarjeta de crédito?',
	'VM_CHECKOUT_MD5_FAILED' => 'Fallo en la comprobación del MD5',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'Pedido no encontrado',
	'PHPSHOP_EPAY_PAYMENT_CARDTYPE' => 'El pago es creado por %s <img
src="/components/com_virtuemart/shop_image/ps_image/epay_images/%s"
border="0">'
); $VM_LANG->initModule( 'checkout', $langvars );
?>
