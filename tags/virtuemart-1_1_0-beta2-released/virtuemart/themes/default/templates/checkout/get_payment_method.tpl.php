<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
*
* @version $Id$
* @package VirtueMart
* @subpackage templates
* @copyright Copyright (C) 2007 Soeren Eberhardt. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/

ps_checkout::show_checkout_bar();

echo $basket_html;

echo '<br />';

$varname = '_PHPSHOP_CHECKOUT_MSG_' . CHECK_OUT_GET_PAYMENT_METHOD;
echo '<h4>'. $VM_LANG->$varname . '</h4>';

echo ps_checkout::list_payment_methods( $payment_method_id );
?>