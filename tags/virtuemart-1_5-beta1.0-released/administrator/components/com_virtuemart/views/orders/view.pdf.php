<?php
/**
 * Generate orderdetails in PDF format
 *
 * @package	VirtueMart
 * @subpackage Orders
 * @author Oscar van Eijk
 * @link http://www.virtuemart.net
 * @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id$
 */

// FIXME the PDF format does not work currently. It needs a good template

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

// Load the view framework
jimport( 'joomla.application.component.view');

/**
 * HTML View class for the VirtueMart Component
 *
 * @package		VirtueMart
 * @author
 */
class VirtuemartViewOrders extends JView {

	function display($tpl = null) {

		$mainframe = JFactory::getApplication();
		$option = JRequest::getVar('option');
		$lists = array();

		/* Load helpers */
		$this->loadHelper('adminMenu');
		$this->loadHelper('currencydisplay');
		$this->loadHelper('shopFunctions');
		$this->loadHelper('html');

		require_once(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_virtuemart'.DS.'models'.DS.'vendor.php');

		// Load addl models
		$userFieldsModel = $this->getModel('userfields');
		$productModel = $this->getModel('product');

		/* Get the data */
		$order = $this->get('Order');
		$_orderID = $order['details']['BT']->order_id;
		$orderbt = $order['details']['BT'];
		$orderst = (array_key_exists('ST', $order['details'])) ? $order['details']['ST'] : $orderbt;

		$currency = VirtueMartModelVendor::getCurrencyDisplay($order['details']['BT']->vendor_id);
		$this->assignRef('currency', $currency);

		$_userFields = $userFieldsModel->getUserFields(
				 'registration'
				, array('captcha' => true, 'delimiters' => true) // Ignore these types
				, array('delimiter_userinfo','user_is_vendor' ,'username', 'email', 'password', 'password2', 'agreed', 'address_type') // Skips
		);
		$userfields = $userFieldsModel->getUserFieldsByUser(
				 $_userFields
				,$orderbt
		);
		$_userFields = $userFieldsModel->getUserFields(
				 'shipping'
				, array() // Default switches
				, array('delimiter_userinfo', 'username', 'email', 'password', 'password2', 'agreed', 'address_type') // Skips
		);
		$shippingfields = $userFieldsModel->getUserFieldsByUser(
				 $_userFields
				,$orderst
		);

		// Create an array to allow orderlinestatuses to be translated
		// We'll probably want to put this somewhere in ShopFunctions...
		$_orderStats = $this->get('OrderStatusList');
		$_orderStatusList = array();
		foreach ($_orderStats as $_ordStat) {
			$_orderStatusList[$_ordStat->value] = $_ordStat->text;
		}

		foreach($order['items'] as $_item) {
			if (!empty($_item->product_attribute)) {
				$_attribs = preg_split('/\s?<br\s*\/?>\s?/i', $_item->product_attribute);

				$product = $productModel->getProduct($_item->product_id);
				$_productAttributes = array();
				$_prodAttribs = explode(';', $product->attribute);
				foreach ($_prodAttribs as $_pAttr) {
					$_list = explode(',', $_pAttr);
					$_name = array_shift($_list);
					$_productAttributes[$_item->order_item_id][$_name] = array();
					foreach ($_list as $_opt) {
						$_optObj = new stdClass();
						$_optObj->option = $_opt;
						$_productAttributes[$_item->order_item_id][$_name][] = $_optObj;
					}
				}
			}
		}
		$_shippingInfo = ShopFunctions::getShippingRateDetails($orderbt->ship_method_id);

		/* Assign the data */
		$this->assignRef('order', $order);
		$this->assignRef('orderID', $_orderID);
		$this->assignRef('userfields', $userfields);
		$this->assignRef('shippingfields', $shippingfields);
		$this->assignRef('orderstatuslist', $_orderStatusList);
		$this->assignRef('orderbt', $orderbt);
		$this->assignRef('orderst', $orderst);
		$this->assignRef('shippingInfo', $_shippingInfo);

		$_doc = JFactory::getDocument();
		$_doc->setTitle(JText::_('VM_ORDER_PRINT_PO_LBL'). ' ' . $_orderID);
		$_doc->setName('Order' . $_orderID);

		error_reporting(0);
		parent::display($tpl);
	}
}

