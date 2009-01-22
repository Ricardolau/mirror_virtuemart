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
	'PHPSHOP_ACC_CUSTOMER_ACCOUNT' => 'Cuenta de Cliente:',
	'PHPSHOP_ACC_UPD_BILL' => 'Aqu� se puede actualizar sus datos de facturaci�n.',
	'PHPSHOP_ACC_UPD_SHIP' => 'Aqu� se puede a�adir y mantener las direcciones de env�o.',
	'PHPSHOP_ACC_ACCOUNT_INFO' => 'Informaci�n de Cuenta',
	'PHPSHOP_ACC_SHIP_INFO' => 'Informaci�n de Env�o',
	'PHPSHOP_DOWNLOADS_CLICK' => 'Pulsar en el Nomber del Producto para Descargar Archivo(s)',
	'PHPSHOP_DOWNLOADS_EXPIRED' => 'Ya has descargado el archivo(s) el n�mero m�ximo de veces, o el per�odo para realizar la descarga ha finalizado. '
); $VM_LANG->initModule( 'account', $langvars );
?>