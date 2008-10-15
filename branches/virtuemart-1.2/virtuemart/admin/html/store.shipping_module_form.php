<?php 
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
*
* @version $Id$
* @package VirtueMart
* @subpackage html
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
mm_showMyFileName( __FILE__ );

$shipping_module = basename(vmGet($_REQUEST, 'shipping_module', null));

if( $shipping_module ) {
	if( !include( ADMINPATH."plugins/shipping/$shipping_module.php" )) {
		vmRedirect( $_SERVER['PHP_SELF']."?option=com_virtuemart&page=store.shipping_modules", str_replace('{shipping_module}',$shipping_module,$VM_LANG->_('VM_SHIPPING_MODULE_CLASSERROR')));
	}
	else {
		$_SHIPPING = new $shipping_module();
	}
	$ps_html->writableIndicator(ADMINPATH."plugins/shipping/".$shipping_module.'.cfg.php');
	
  ?>
	<table class="adminform">
	<tr>
	<td>
  
  <?php
	// Create the Form Control Object
	$formObj =& new formFactory( $VM_LANG->_('VM_SHIPPING_MODULE_CONFIG_LBL') . ': '. $shipping_module );
	
	// Start the the Form
	$formObj->startForm();

  	$_SHIPPING->show_configuration();
  
  	// Write common hidden input fields
  	$formObj->hiddenField('shipping_class', basename($shipping_module,".php") );
	// and close the form
	$formObj->finishForm( 'shippingmethodSave', 'store.shipping_modules', $option );
	?>
	</td>
	</tr>
	</table>
	<?php
}
else {
	//TODO: Form for new shipping modules
}
?>