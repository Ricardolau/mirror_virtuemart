<?php
/**
*
* Description
*
* @package	VirtueMart
* @subpackage Paymentmethod
* @author Max Milbers
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* @version $Id: default.php 2279 2010-01-31 15:15:38Z Milbo $
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access'); 

       	if( $this->paym->paym_element ) {
       		$this->loadHelper('vmHtmlTools');
			$parameters = new vmParameters($this->paym->paym_params, ADMINPATH.'plugins/payment/'.basename($this->paym->paym_element).'.xml', 'payment' );
			echo $parameters->render();
        }else{
        	echo 'No config? '.print_r($this);
        }
        echo '<br />
		<strong>'.JText::_('VM_PAYMENT_EXTRAINFO').':';
		echo JHTML::tooltip(( JText::_('VM_PAYMENT_EXTRAINFO_TIP') ) )
	?>
<br />
<textarea class="inputbox" name="payment_extrainfo" cols="120" rows="20"><?php echo htmlspecialchars( $this->paym->paym_extra_info ); ?></textarea>