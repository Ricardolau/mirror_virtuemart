<?php

/**
 *
 * Controller for the cart
 *
 * @package	VirtueMart
 * @subpackage Cart
 * @author RolandD
 * @author Max Milbers
 * @link http://www.virtuemart.net
 * @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id: cart.php 6502 2012-10-04 13:19:26Z Milbo $
 */
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

// Load the controller framework
jimport('joomla.application.component.controller');

/**
 * Controller for the cart view
 *
 * @package VirtueMart
 * @subpackage Cart
 * @author RolandD
 * @author Max Milbers
 */
class VirtueMartControllerCart extends JController {

	/**
	 * Construct the cart
	 *
	 * @access public
	 * @author Max Milbers
	 */
	public function __construct() {
		parent::__construct();
		if (VmConfig::get('use_as_catalog', 0)) {
			$app = JFactory::getApplication();
			$app->redirect('index.php');
		} else {
			if (!class_exists('VirtueMartCart'))
			require(JPATH_VM_SITE . DS . 'helpers' . DS . 'cart.php');
			if (!class_exists('calculationHelper'))
			require(JPATH_VM_ADMINISTRATOR . DS . 'helpers' . DS . 'calculationh.php');
		}
		$this->useSSL = VmConfig::get('useSSL', 0);
		$this->useXHTML = false;
	}

	/**
	 * Override of display
	 *
	 * @return  JController  A JController object to support chaining.
	 *
	 * @since   11.1
	 */
	public function display($cachable = false, $urlparams = false)
	{
		$document = JFactory::getDocument();
		$viewType = $document->getType();
		$viewName = JRequest::getCmd('view', $this->default_view);
		$viewLayout = JRequest::getCmd('layout', 'default');

		$view = $this->getView($viewName, $viewType, '', array('base_path' => $this->basePath, 'layout' => $viewLayout));

		$view->assignRef('document', $document);

		$view->display();

		return $this;
	}

	/**
	 * Add the product to the cart
	 *
	 * @author Max Milbers
	 * @access public
	 */
	public function add() {
		$mainframe = JFactory::getApplication();
		if (VmConfig::get('use_as_catalog', 0)) {
			$msg = JText::_('COM_VIRTUEMART_PRODUCT_NOT_ADDED_SUCCESSFULLY');
			$type = 'error';
			$mainframe->redirect('index.php', $msg, $type);
		}
		$cart = VirtueMartCart::getCart();
		if ($cart) {
			$virtuemart_product_ids = JRequest::getVar('virtuemart_product_id', array(), 'default', 'array');
			$success = true;
			if ($cart->add($virtuemart_product_ids,$success)) {
				$msg = JText::_('COM_VIRTUEMART_PRODUCT_ADDED_SUCCESSFULLY');
				$type = '';
			} else {
				$msg = JText::_('COM_VIRTUEMART_PRODUCT_NOT_ADDED_SUCCESSFULLY');
				$type = 'error';
			}

			$mainframe->enqueueMessage($msg, $type);
			$mainframe->redirect(JRoute::_('index.php?option=com_virtuemart&view=cart', FALSE));

		} else {
			$mainframe->enqueueMessage('Cart does not exist?', 'error');
		}
	}

	/**
	 * Add the product to the cart, with JS
	 *
	 * @author Max Milbers
	 * @access public
	 */
	public function addJS() {

		$this->json = new stdClass();
		$cart = VirtueMartCart::getCart(false);
		if ($cart) {

			$virtuemart_product_ids = JRequest::getVar('virtuemart_product_id', array(), 'default', 'array');
			$view = $this->getView ('cart', 'json');
			$errorMsg = 0;//JText::_('COM_VIRTUEMART_CART_PRODUCT_ADDED');
			$products = $cart->add($virtuemart_product_ids, $errorMsg );
			if ($products) {
				if(is_array($products) and isset($products[0])){
					$view->assignRef('product',$products[0]);
				}
				$view->setLayout('padded');
				$this->json->stat = '1';
			} else {
				$view->setLayout('perror');
				$this->json->stat = '2';
				$tmp = false;
				$view->assignRef('product',$tmp);
			}
			$view->assignRef('products',$products);
			$view->assignRef('errorMsg',$errorMsg);
			ob_start();
			$view->display ();
			$this->json->msg = ob_get_clean();
		} else {
			$this->json->msg = '<a href="' . JRoute::_('index.php?option=com_virtuemart', FALSE) . '" >' . JText::_('COM_VIRTUEMART_CONTINUE_SHOPPING') . '</a>';
			$this->json->msg .= '<p>' . JText::_('COM_VIRTUEMART_MINICART_ERROR') . '</p>';
			$this->json->stat = '0';
		}
		echo json_encode($this->json);
		jExit();
	}

	/**
	 * Add the product to the cart, with JS
	 *
	 * @author Max Milbers
	 * @access public
	 */
	public function viewJS() {

		if (!class_exists('VirtueMartCart'))
		require(JPATH_VM_SITE . DS . 'helpers' . DS . 'cart.php');
		$cart = VirtueMartCart::getCart(false);
		$this->data = $cart->prepareAjaxData();

		$extension = 'com_virtuemart';
		VmConfig::loadJLang($extension); //  when AJAX it needs to be loaded manually here >> in case you are outside virtuemart !
 
		if ($this->data->totalProduct > 1)
		$this->data->totalProductTxt = JText::sprintf('COM_VIRTUEMART_CART_X_PRODUCTS', $this->data->totalProduct);
		else if ($this->data->totalProduct == 1)
		$this->data->totalProductTxt = JText::_('COM_VIRTUEMART_CART_ONE_PRODUCT');
		else
		$this->data->totalProductTxt = JText::_('COM_VIRTUEMART_EMPTY_CART');
		if ($this->data->dataValidated == true) {
			$taskRoute = '&task=confirm';
			$linkName = JText::_('COM_VIRTUEMART_ORDER_CONFIRM_MNU');
		} else {
			$taskRoute = '';
			$linkName = JText::_('COM_VIRTUEMART_CART_SHOW');
		}
		$this->data->cart_show = '<a class="floatright" href="' . JRoute::_("index.php?option=com_virtuemart&view=cart" . $taskRoute, $this->useXHTML, $this->useSSL) . '" rel="nofollow">' . $linkName . '</a>';
		$this->data->billTotal = vmText::_('COM_VIRTUEMART_CART_TOTAL') . ' : <strong>' . $this->data->billTotal . '</strong>';
		echo json_encode($this->data);
		Jexit();
	}

	/**
	 * For selecting couponcode to use, opens a new layout
	 *
	 * @author Max Milbers
	 */
	public function edit_coupon() {

		$view = $this->getView('cart', 'html');
		$view->setLayout('edit_coupon');
		$cart = VirtueMartCart::getCart();
		$cart->_inConfirm=false;
		// Display it all
		$view->display();
	}

	/**
	 * Store the coupon code in the cart
	 * @author Max Milbers
	 */
	public function setcoupon() {

		/* Get the coupon_code of the cart */
		$coupon_code = JRequest::getVar('coupon_code', ''); //TODO VAR OR INT OR WORD?
		if ($coupon_code) {

			$cart = VirtueMartCart::getCart();
			if ($cart) {
				$app = JFactory::getApplication();
				$msg = $cart->setCouponCode($coupon_code);

				//$cart->setDataValidation(); //Not needed already done in the getCart function
				if ($cart->getInCheckOut()) {
					$app = JFactory::getApplication();
					$app->redirect(JRoute::_('index.php?option=com_virtuemart&view=cart&task=checkout', FALSE),$msg);
				} else {
					$app->redirect(JRoute::_('index.php?option=com_virtuemart&view=cart', FALSE),$msg);
				}
			}
		}
		$this->display();

	}

	/**
	 * For selecting shipment, opens a new layout
	 *
	 * @author Max Milbers
	 */
	public function edit_shipment() {


		$view = $this->getView('cart', 'html');
		$view->setLayout('select_shipment');

		// Display it all
		$view->display();
	}

	/**
	 * Sets a selected shipment to the cart
	 *
	 * @author Max Milbers
	 */
	public function setshipment($redirect=true) {

		/* Get the shipment ID from the cart */

		$cart = VirtueMartCart::getCart();
		if ($cart) {
			$virtuemart_shipmentmethod_id = JRequest::getInt('virtuemart_shipmentmethod_id', $cart->virtuemart_shipmentmethod_id);
			//Now set the shipment ID into the cart
			if (!class_exists('vmPSPlugin')) require(JPATH_VM_PLUGINS . DS . 'vmpsplugin.php');
			JPluginHelper::importPlugin('vmshipment');
			$cart->setShipment($virtuemart_shipmentmethod_id);
			//Add a hook here for other payment methods, checking the data of the choosed plugin
			$_dispatcher = JDispatcher::getInstance();
			$_retValues = $_dispatcher->trigger('plgVmOnSelectCheckShipment', array(   &$cart));
			$dataValid = true;
			foreach ($_retValues as $_retVal) {
				if ($_retVal === true ) {
					// Plugin completed successfull; nothing else to do
					$cart->setCartIntoSession();
					break;
				} else if ($_retVal === false) {
					if ($redirect) {
						$mainframe = JFactory::getApplication();
						$mainframe->redirect(JRoute::_('index.php?option=com_virtuemart&view=cart&task=edit_shipment',$this->useXHTML,$this->useSSL), $_retVal);
						break;
					} else {
						return;
					}

				
				}
			}

			if ($cart->getInCheckOut() && !VmConfig::get('oncheckout_opc', 1)) {
				if ($redirect) {
					$mainframe = JFactory::getApplication();
					$mainframe->redirect(JRoute::_('index.php?option=com_virtuemart&view=cart&task=checkout', FALSE) );
				} else {
					return;
				}

			}
		}
		if ($redirect) {
			$this->display();
		}

	}

	/**
	 * To select a payment method
	 *
	 * @author Max Milbers
	 */
	public function editpayment() {

		$view = $this->getView('cart', 'html');
		$view->setLayout('select_payment');
		$cart = VirtueMartCart::getCart();
		$cart->_inConfirm=false;
		// Display it all
		$view->display();
	}

	/**
	 * To set a payment method
	 *
	 * @author Max Milbers
	 * @author Oscar van Eijk
	 * @author Valerie Isaksen
	 */
	function setpayment($redirect=true) {

		// Get the payment id of the cart
		//Now set the payment rate into the cart
		$cart = VirtueMartCart::getCart();
		if ($cart) {
			if(!class_exists('vmPSPlugin')) require(JPATH_VM_PLUGINS.DS.'vmpsplugin.php');
			JPluginHelper::importPlugin('vmpayment');
			//Some Paymentmethods needs extra Information like
			$virtuemart_paymentmethod_id = JRequest::getInt('virtuemart_paymentmethod_id', $cart->virtuemart_paymentmethod_id);
			$cart->setPaymentMethod($virtuemart_paymentmethod_id);

			//Add a hook here for other payment methods, checking the data of the choosed plugin
			$msg = '';
			$_dispatcher = JDispatcher::getInstance();
			$_retValues = $_dispatcher->trigger('plgVmOnSelectCheckPayment', array( $cart, &$msg));
			$dataValid = true;
			foreach ($_retValues as $_retVal) {
				if ($_retVal === true ) {
					// Plugin completed succesfull; nothing else to do
					$cart->setCartIntoSession();
					break;
				} else if ($_retVal === false ) {
					if ($redirect) {
			        $app = JFactory::getApplication();
			        $app->redirect(JRoute::_('index.php?option=com_virtuemart&view=cart&task=editpayment',$this->useXHTML,$this->useSSL), $msg);
			        break;
				} else {
					return;
				}
				
				}
			}
			//			$cart->setDataValidation();	//Not needed already done in the getCart function

			if ($cart->getInCheckOut() && !VmConfig::get('oncheckout_opc', 1) ) {
				if ($redirect) {
					$app = JFactory::getApplication();
					$app->redirect(JRoute::_('index.php?option=com_virtuemart&view=cart&task=checkout', FALSE), $msg);
			} else {
				return;
			}
				} 
			}

		if ($redirect) {
			$this->display();
		}
	}

	/**
	 * Delete a product from the cart
	 *
	 * @author RolandD
	 * @access public
	 */
	public function delete() {
		$mainframe = JFactory::getApplication();
		/* Load the cart helper */
		$cart = VirtueMartCart::getCart();
		if ($cart->removeProductCart())
		$mainframe->enqueueMessage(JText::_('COM_VIRTUEMART_PRODUCT_REMOVED_SUCCESSFULLY'));
		else
		$mainframe->enqueueMessage(JText::_('COM_VIRTUEMART_PRODUCT_NOT_REMOVED_SUCCESSFULLY'), 'error');

		$mainframe->redirect(JRoute::_('index.php?option=com_virtuemart&view=cart', FALSE));
	}

	/**
	 * Delete a product from the cart
	 *
	 * @author RolandD
	 * @access public
	 */
	public function update() {
		$mainframe = JFactory::getApplication();
		/* Load the cart helper */
		$cartModel = VirtueMartCart::getCart();
		if ($cartModel->updateProductCart())
		$mainframe->enqueueMessage(JText::_('COM_VIRTUEMART_PRODUCT_UPDATED_SUCCESSFULLY'));
		else
		$mainframe->enqueueMessage(JText::_('COM_VIRTUEMART_PRODUCT_NOT_UPDATED_SUCCESSFULLY'), 'error');

		$mainframe->redirect(JRoute::_('index.php?option=com_virtuemart&view=cart', FALSE));
	}

	/**
	 * Change the shopper
	 *
	 * @author Maik K�nnemann
	 *
	 */
	public function changeShopper() {

		JRequest::checkToken () or jexit ('Invalid Token');

		//get data of current and new user
		$usermodel = VmModel::getModel('user');
		$user = $usermodel->getCurrentUser();

		//check for permissions
		if(!JFactory::getUser(JFactory::getSession()->get('vmAdminID'))->authorise('core.admin', 'com_virtuemart') || !VmConfig::get ('oncheckout_change_shopper')){
			$mainframe = JFactory::getApplication();
			$mainframe->enqueueMessage(JText::sprintf('COM_VIRTUEMART_CART_CHANGE_SHOPPER_NO_PERMISSIONS', $user->name .' ('.$user->username.')'), 'error');
			$mainframe->redirect(JRoute::_('index.php?option=com_virtuemart&view=cart'));
		}

		$newUser = JFactory::getUser(JRequest::getCmd('userID'));

		//update session
		$session = JFactory::getSession();
		$adminID = $session->get('vmAdminID');
		if(!isset($adminID)) $session->set('vmAdminID', $user->virtuemart_user_id);
		$session->set('user', $newUser);

		//update cart data
		$cart = VirtueMartCart::getCart();
		$data = $usermodel->getUserAddressList(JRequest::getCmd('userID'), 'BT');
		foreach($data[0] as $k => $v) {
			$data[$k] = $v;
		}
		$cart->BT['email'] = $newUser->email;
		$cart->ST = 0;
		$cart->STsameAsBT = 1;
		$cart->saveAddressInCart($data, 'BT');

		$mainframe = JFactory::getApplication();
		$mainframe->enqueueMessage(JText::sprintf('COM_VIRTUEMART_CART_CHANGED_SHOPPER_SUCCESSFULLY', $newUser->name .' ('.$newUser->username.')'), 'info');
		$mainframe->redirect(JRoute::_('index.php?option=com_virtuemart&view=cart'));
	}
	/**
	 * Checks for the data that is needed to process the order
	 *
	 * @author Max Milbers
	 *
	 */
	public function checkout() {

		$cart = VirtueMartCart::getCart();
		$cart->getFilterCustomerComment();
		$cart->tosAccepted = JRequest::getInt('tosAccepted', $cart->tosAccepted);
		$task = JRequest::getString('task');

		$update = vRequest::getString('update',false);
		$cart->_inConfirm=false;
		if(($update and is_array($update)) or $task=='update'){
			reset($update);
			$key = key($update);
			$quantity = vRequest::getInt('quantity');
			$cart->updateProductCart(key($update),$quantity[$key]);
			$this->display();
		} else if(isset($_POST['setcoupon']) or $task=='setcoupon'){
			$this->setcoupon();
		} else if(isset($_POST['setshipment']) or $task=='setshipment'){
			$this->setshipment();
		} else if(isset($_POST['setpayment']) or $task=='setpayment'){
			$this->setpayment();
		} else {
			if (VmConfig::get('oncheckout_opc', 1) && $cart->virtuemart_shipmentmethod_id != JRequest::getInt('virtuemart_shipmentmethod_id',0)) {
				$this->setshipment();
			}
			if (VmConfig::get('oncheckout_opc', 1) && $cart->virtuemart_paymentmethod_id != JRequest::getInt('virtuemart_paymentmethod_id',0)) {
				$this->setpayment();
			}
			if ($cart && !VmConfig::get('use_as_catalog', 0)) {
				$cart->checkout();
			}
		}
	}




	/**
	 * Checks for the data that is needed to process the order
	 *
	 * @author Valérie Isaksen
	 *
	 */
	public function checkoutJS() {
		$json = new stdClass();
		$cart = VirtueMartCart::getCart();
		$cart->getFilterCustomerComment();
		$cart->tosAccepted = JRequest::getInt('tosAccepted', $cart->tosAccepted);
		$task = JRequest::getString('task');
		$setShipment="";
		$setPayment="";
		$checkout="";
		$view = $this->getView ('cart','html');

		$update = vRequest::getString('update',false);
		$cart->_inConfirm=false;
		if(($update and is_array($update)) or $task=='update'){
			reset($update);
			$key = key($update);
			$quantity = vRequest::getInt('quantity');
			$cart->updateProductCart(key($update),$quantity[$key]);
			//$this->display();

		 } else if(isset($_POST['setcoupon']) or $task=='setcoupon'){
			$this->setcoupon();
		} else if(isset($_POST['setshipment']) or $task=='setshipment'){
			$this->setshipment();
		} else if(isset($_POST['setpayment']) or $task=='setpayment'){
			$this->setpayment();

		} else {
			if (vRequest::getInt('forceMethods',false) or (VmConfig::get('oncheckout_opc', 1)  && vRequest::getInt('virtuemart_shipmentmethod_id',false) && $cart->virtuemart_shipmentmethod_id != vRequest::getInt('virtuemart_shipmentmethod_id'))) {
				$setShipment = $this->setshipment(false);
			}
			if (VmConfig::get('oncheckout_opc', 1) && vRequest::getInt('virtuemart_paymentmethod_id',false) && $cart->virtuemart_paymentmethod_id != vRequest::getInt('virtuemart_paymentmethod_id')) {
				$setPayment = $this->setpayment(false);
			}

			if ($cart && !VmConfig::get('use_as_catalog', 0)) {
				$checkout =$cart->checkout(false);
			}
		}
		ob_start();
		$view->display ();
		$json->msg = ob_get_clean();
		echo json_encode($json);
		jExit();

	}

	/**
	 * Executes the confirmDone task,
	 * cart object checks itself, if the data is valid
	 *
	 * @author Max Milbers
	 *
	 */
	public function confirm() {

		$cart = VirtueMartCart::getCart();
		$cart->getFilterCustomerComment();
		$cart->tosAccepted = JRequest::getInt('tosAccepted', $cart->tosAccepted);
		$task = JRequest::getString('task');
		$update = vRequest::getString('update',false);

		if(($update and is_array($update)) or $task=='update'){
			reset($update);
			$key = key($update);
			$quantity = vRequest::getInt('quantity');
			$cart->updateProductCart(key($update),$quantity[$key]);
			$cart->_inConfirm=false;
			$this->display();
		} else if(isset($_POST['setcoupon']) or $task=='setcoupon'){
			$cart->_inConfirm=false;
			$this->setcoupon();
		} else if(isset($_POST['setshipment']) or $task=='setshipment'){
			$cart->_inConfirm=false;
			$this->setshipment();
		} else if(isset($_POST['setpayment']) or $task=='setpayment'){
			$cart->_inConfirm=false;
			$this->setpayment();
		} else if($task=='confirm'){

			$cart->confirmDone();
			$view = $this->getView('cart', 'html');
			$view->setLayout('order_done');
			$view->display();
		}

	}

	function cancel() {

		$cart = VirtueMartCart::getCart();
		if ($cart) {
			$cart->setOutOfCheckout();
		}
		$this->display();
		//$mainframe = JFactory::getApplication();
		//$mainframe->redirect(JRoute::_('index.php?option=com_virtuemart&view=cart', FALSE), 'Cancelled');
	}

}

//pure php no Tag
