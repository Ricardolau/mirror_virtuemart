<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : spanish.php 1071 2007-12-03 08:42:28Z thepisu $
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
	'CHARSET' => 'ISO-8859-1',
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Nombre',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Apellidos',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Segundo nombre',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Nombre de empresa',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Dirección 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Dirección 2',
	'PHPSHOP_USER_FORM_CITY' => 'Ciudad',
	'PHPSHOP_USER_FORM_STATE' => 'Provincia',
	'PHPSHOP_USER_FORM_ZIP' => 'Código postal',
	'PHPSHOP_USER_FORM_COUNTRY' => 'País',
	'PHPSHOP_USER_FORM_PHONE' => 'Teléfono',
	'PHPSHOP_USER_FORM_PHONE2' => 'Teléfono móbil',
	'PHPSHOP_USER_FORM_FAX' => 'Fax',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Activo',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Configurar método de envío',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Imagen',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Subir imagen',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Nombre de tienda',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Nombre empresa de la tienda',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Dirección 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Dirección 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Ciudad',
	'PHPSHOP_STORE_FORM_STATE' => 'Provincia',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'País',
	'PHPSHOP_STORE_FORM_ZIP' => 'Código postal',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Moneda',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Apellidos',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Nombre',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Segundo nombre',
	'PHPSHOP_STORE_FORM_TITLE' => 'Título',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Teléfono 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Teléfono 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Descripción',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Listado métodos de pago',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Nombre',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Código',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Grupo de comprador',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Tipo de método de pago',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Formulario de método de pago',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Nombre de método de pago',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Grupo de comprador',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Descuento',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Código',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Lista de compras',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Tipo de método de pago',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Tarjeta de crédito',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Usar proceso de pago',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Débito banco',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Solamente dirección / Envío contra reembolso',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Estadísticas',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Clientes',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'Productos activos',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'Productos inactivos',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Nuevos pedidos',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Nuevos clientes',
	'PHPSHOP_CREDITCARD_NAME' => 'Nombre tarjeta de crédito',
	'PHPSHOP_CREDITCARD_CODE' => 'Tarjeta de crédito - código corto',
	'PHPSHOP_YOUR_STORE' => 'Su tienda',
	'PHPSHOP_CONTROL_PANEL' => 'Panel de Control',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Mostrar/cambiar la contraseña/llave de transacción',
	'PHPSHOP_TYPE_PASSWORD' => 'Por favor, introduzca la contraseña de usuario',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Llave de transacción actual',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'Se ha cambiado la llave de transacción con éxito.',
	'VM_PAYMENT_CLASS_NAME' => 'Nombre de la clase de pago',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(e.g. <strong>ps_netbanx</strong>) :<br />
default: ps_payment<br />
<i>Dejalo en blanco si no estás seguro que poner!</i>',
	'VM_PAYMENT_EXTRAINFO' => 'Información extra de pago',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'Is shown on the Order Confirmation Page. Can be: HTML Form Code from your Payment Service Provider, Hints to the customer etc.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Tipo de tarjetas de crédito aceptadas',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'To turn the discount into a fee, use a negative value here (Example: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Maximum discount amount',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Minimum discount amount',
	'VM_PAYMENT_FORM_FORMBASED' => 'Basado en formulario HTML (p.e. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Order Export Module List',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Nombre',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Descripción',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'Listado de monedas aceptadas',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'Esta lista define todas las monedas aceptadas para realizar las compras en tu tienda. <strong>Nota:</strong> Todas las monedas aquí seleccionadas pueden ser usadas en la compra final. Si no deseas eso, solamente selecciona la moneda de tu país (=por defecto).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Export Module Form',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Export Module Name',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Descripción',
	'VM_EXPORT_CLASS_NAME' => 'Export Class Name',
	'VM_EXPORT_CLASS_NAME_TIP' => '(e.g. <strong>ps_orders_csv</strong>) :<br /> default: ps_xmlexport<br /> <i>Leave blank if you\'re not sure what to fill in!</i>',
	'VM_EXPORT_CONFIG' => 'Export Extra Configuration',
	'VM_EXPORT_CONFIG_TIP' => 'Define Export configuration for user-defined export modules or define additional configuration. Code must be valid PHP-Code.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Nombre',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Versión',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Autor',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Formato dirección tienda',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'You can use the following placeholders here',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Formato fecha tienda',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Error: Payment Method ID was not provided.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Shipping Module Configuration',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Could not instantiate Class {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>
