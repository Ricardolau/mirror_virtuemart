<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version $Id: norwegian.php 458 2008-08-05 10:47:28Z rued $
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
	'PHPSHOP_COUPON_EDIT_HEADER' => 'Oppdater rabatt/gavekort',
	'PHPSHOP_COUPON_CODE_HEADER' => 'Kode',
	'PHPSHOP_COUPON_PERCENT_TOTAL' => 'Prosent eller totalt',
	'PHPSHOP_COUPON_TYPE' => 'Rabattype',
	'PHPSHOP_COUPON_TYPE_TOOLTIP' => 'En gaverabatt slettes når den er brukt på en ordre. En permanent rabatt kan brukes flere ganger.',
	'PHPSHOP_COUPON_TYPE_GIFT' => 'Gaverabatt',
	'PHPSHOP_COUPON_TYPE_PERMANENT' => 'Permanent rabatt',
	'PHPSHOP_COUPON_VALUE_HEADER' => 'Verdi',
	'PHPSHOP_COUPON_PERCENT' => 'Prosent',
	'PHPSHOP_COUPON_TOTAL' => 'Totalt'
); $VM_LANG->initModule( 'coupon', $langvars );
?>
