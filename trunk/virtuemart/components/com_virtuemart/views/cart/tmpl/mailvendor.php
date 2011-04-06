<?php
/**
*
* Layout for the shopping cart
*
* @package	VirtueMart
* @subpackage Cart
* @author Max Milbers
*
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');
?>
<?php

	//Hello Shopowner
	JText::_('COM_VIRTUEMART_CART_MAIL_VENDOR_TITLE');
	echo $this->store->vendor_store_name;
	echo $this->vendor->images[0]->displayMediaThumb();
//	echo VmImage::getImageByVendor($this->vendor)->displayImage('',JText::_('COM_VIRTUEMART_VENDOR_IMAGE_ALT'),1,1);
//	VmImage::generateImageHtml($this->store->file_ids, VmConfig::get('media_path'), 'alt="Shop Image"', false);

	echo '<br />The shopper '.$this->cart['BT']['first_name'].' '.$this->cart['BT']['last_name'].' bought some stuff';


	//PriceList
include(JPATH_VM_SITE.DS.'views'.DS.'cart'.DS.'tmpl'.DS.'pricelist.php');

include(JPATH_VM_SITE.DS.'views'.DS.'cart'.DS.'tmpl'.DS.'shopperadresses.php');


	?>