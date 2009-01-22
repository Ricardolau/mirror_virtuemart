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
	'PHPSHOP_MANUFACTURER_LIST_LBL' => 'Listado fabricantes',
	'PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME' => 'Nombre fabricante',
	'PHPSHOP_MANUFACTURER_FORM_LBL' => 'Añadir información',
	'PHPSHOP_MANUFACTURER_FORM_CATEGORY' => 'Categoría del fabricante',
	'PHPSHOP_MANUFACTURER_FORM_EMAIL' => 'Correo electrónico',
	'PHPSHOP_MANUFACTURER_CAT_LIST_LBL' => 'Listado categoría de fabricantes',
	'PHPSHOP_MANUFACTURER_CAT_NAME' => 'Nombre de categoría',
	'PHPSHOP_MANUFACTURER_CAT_DESCRIPTION' => 'Descripción de categoría',
	'PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS' => 'Fabricantes',
	'PHPSHOP_MANUFACTURER_CAT_FORM_LBL' => 'Formulario de categoría de fabricantes',
	'PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL' => 'Información de categoría',
	'PHPSHOP_MANUFACTURER_CAT_FORM_NAME' => 'Nombre de categoría',
	'PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION' => 'Descripción de categoría'
); $VM_LANG->initModule( 'manufacturer', $langvars );
?>
