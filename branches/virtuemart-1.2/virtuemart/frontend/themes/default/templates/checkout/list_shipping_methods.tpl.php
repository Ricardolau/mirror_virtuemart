<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version $Id$
* @package VirtueMart
* @subpackage templates
* @copyright Copyright (C) 2007-2008 soeren - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
vmPluginHelper::importPlugin('shipping');
$result = $vm_mainframe->triggerEvent('get_shipping_rate_list', array( $vars ));
if( is_array( $result )) {
	foreach( $result as $shipping_module ) {
		if( !empty($shipping_module[0])) {
			echo '<fieldset><legend>'.$shipping_module[0]['carrier'].'</legend>';
		}
		foreach( $shipping_module as $rate ) {
			$id = uniqid($shipping_module[0]['carrier']);
			echo '<input type="radio" name="shipping_rate_id" value="'.$rate['shipping_rate_id'].'" id="'.$id.'" />';
			echo '<label for="'.$id.'">'.$rate['rate_name']. ' - '.$CURRENCY_DISPLAY->getfullvalue($rate['rate']).'</label><br />';
		}
		if( !empty($shipping_module[0])) {
			echo '</fieldset>';
		}
	}
}

?>