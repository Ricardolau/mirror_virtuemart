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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Listado transportistas',
	'PHPSHOP_RATE_LIST_LBL' => 'Tarifas portes',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Nombre',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Orden en la lista',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Editar/Crear transportista',
	'PHPSHOP_RATE_FORM_LBL' => 'Editar/Crear tarifa portes',
	'PHPSHOP_RATE_FORM_NAME' => 'Descripci�n tarifa portes',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Transportista',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Pa�s',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'Comienzo intervalo c�digo postal',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'Fin intervalo c�digo postal',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Peso m�nimo',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Peso m�ximo',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'Coste por paquete',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Moneda',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Ordenar',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Transportista',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Descripci�n tarifa portes',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Peso desde ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... hasta',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Empresa transportista',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Orden en la lista'
); $VM_LANG->initModule( 'shipping', $langvars );
?>
