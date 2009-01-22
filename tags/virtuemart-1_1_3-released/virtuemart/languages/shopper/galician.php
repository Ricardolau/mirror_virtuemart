<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translator Miguel Pan Fidalgo
* @mail panfidalgo@gmail.com
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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Mostrar Prezos IVA Incluido?',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Define se os clientes ven os prezos con ou sen IVA.',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Enderezo 2',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Lista de Grupos de Clientes',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Nome',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Descripción',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Formulario de Grupos de Clientes',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Nome',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Descripción',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Desconto sobre prezo no grupo de Clientes (em %)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'Un valor positivo X significa: Se o producto non ten prezo atribuído ao Grupo de clientes PRESENTE, o Prezo por Defecto é diminuido un X%. Un montante negativo ten o efecto oposto'
); $VM_LANG->initModule( 'shopper', $langvars );
?>
