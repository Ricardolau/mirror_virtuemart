<?php
/**
*
* View for the shopping cart
*
* @package	VirtueMart
* @subpackage
* @author Max Milbers
* @author Oscar van Eijk
* @author RolandD
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* @version $Id$
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

// Load the view framework
jimport( 'joomla.application.component.view');

/**
* View for the shopping cart
* @package VirtueMart
* @author Max Milbers
* @author Oscar van Eijk
*/
class VirtueMartViewCart extends JView {

	private $_cart;
	private $_user;
	private $_userDetails;
	public $lists;

	public function display($tpl = null) {
		$mainframe = JFactory::getApplication();
		$pathway = $mainframe->getPathway();
		$document = JFactory::getDocument();

		$layoutName = $this->getLayout();
		if(!$layoutName) $layoutName = JRequest::getVar('layout', 'default');
		$this->assignRef('layoutName', $layoutName);
		$format = JRequest::getVar('format');

		if(!class_exists('VirtueMartCart')) require(JPATH_VM_SITE.DS.'helpers'.DS.'cart.php');
		$this->_cart = VirtueMartCart::getCart(false);
		$this->assignRef('cart', $this->_cart);


		if ($format == 'raw') {
			$this->prepareCartData();
			JRequest::setVar( 'layout', 'minicart'  );
			$this->setLayout('minicart');
			$this->prepareContinueLink();
		}

		if($layoutName=='editcoupon'){

			$this->prepareCartData();
			$this->lSelectCoupon();

			$pathway->addItem(JText::_('VM_CART_SELECTCOUPON'));
			$document->setTitle(JText::_('VM_CART_SELECTCOUPON'));

		} else if($layoutName=='selectshipper'){
			if(!class_exists('vmShipperPlugin')) require(JPATH_VM_SITE.DS.'helpers'.DS.'vmshipperplugin.php');
			JPluginHelper::importPlugin('vmshipper');
			$this->lSelectShipper();

			$pathway->addItem(JText::_('VM_CART_SELECTSHIPPER'));
			$document->setTitle(JText::_('VM_CART_SELECTSHIPPER'));

		} else if($layoutName=='selectpayment'){

			/* Load the cart helper */
//			$cartModel = $this->getModel('cart');
			if(!class_exists('vmPaymentPlugin')) require(JPATH_VM_SITE.DS.'helpers'.DS.'vmpaymentplugin.php');
			JPluginHelper::importPlugin('vmpayment');

			$this->lSelectPayment();

			$pathway->addItem(JText::_('VM_CART_SELECTPAYMENT'));
			$document->setTitle(JText::_('VM_CART_SELECTPAYMENT'));

		} else if($layoutName=='orderdone'){

			$this->lOrderDone();

			$pathway->addItem(JText::_('VM_CART_THANKYOU'));
			$document->setTitle(JText::_('VM_CART_THANKYOU'));

		} else if($layoutName=='default' ){

			$this->prepareCartData();

			$this->prepareUserData();

			$this->prepareAddressRadioSelection();

			$this->prepareAddressDataInCart();

			$this->prepareVendor();

			$pathway->addItem(JText::_('VM_CART_OVERVIEW'));
			$document->setTitle(JText::_('VM_CART_OVERVIEW'));

			$this->prepareContinueLink();

			if($this->_cart->getDataValidated()){
				$text = JText::_('VM_ORDER_CONFIRM_MNU');
				$checkout_task = 'confirm';
			} else {
				$text = JText::_('VM_CHECKOUT_TITLE');
				$checkout_task = 'checkout';
			}
			$this->assignRef('checkout_task', $checkout_task);

			$checkout_link_html = '<a class="checkout_link" href="javascript:document.checkoutForm.submit();" /><span>'.$text.'</span></a>';
			$this->assignRef('checkout_link_html', $checkout_link_html);

		} else if($layoutName=='mailshopper' || $layoutName=='mailvendor'){

			$this->prepareCartData();

			$this->prepareUserData();

			$this->prepareMailData();

			//If this is necessary must be tested, I dont know if it would change the look of the email, or has other advantages
//			$pathway->addItem(JText::_('VM_CART_TITLE'));
//			$mainframe->setPageTitle(JText::_('VM_CART_TITLE'));

		}

		$this->assignRef('lists', $this->lists);

		shopFunctionsF::setVmTemplate($this,0,0,$layoutName);
		parent::display($tpl);
	}

	private function prepareContinueLink(){
		// Get a continue link */
		$category_id = shopFunctionsF::getLastVisitedCategoryId();
		$categoryLink='';
		if($category_id){
			$categoryLink='&category_id='.$category_id;
		}
		$continue_link = JRoute::_('index.php?option=com_virtuemart&view=category'.$categoryLink);

		$continue_link_html = '<a class="continue_link" href="'.$continue_link.'" />'.JText::_('VM_CONTINUE_SHOPPING').'</a>';
		$this->assignRef('continue_link_html', $continue_link_html);
		$this->assignRef('continue_link', $continue_link);
	}

	private function prepareAddressRadioSelection(){

		//Just in case
		if(!$this->_user){
			$this->prepareUserData();
		}

		// Shipping address(es)
		if($this->_user){
			$_addressBT = $this->_user->getUserAddressList($this->_userDetails->JUser->get('id') , 'BT');

			// Overwrite the address name for display purposes
			$_addressBT[0]->address_type_name = JText::_('VM_ACC_BILL_DEF');

			$_addressST = $this->_user->getUserAddressList($this->_userDetails->JUser->get('id') , 'ST');

		} else {
			$_addressBT[0]->address_type_name = '<a href="index.php'
					.'?option=com_virtuemart'
					.'&view=user'
					.'&task=editaddresscart'
					.'&addrtype=BT'
				. '">'.JText::_('VM_ACC_BILL_DEF').'</a>'.'<br />';
				$_addressST = array();
		}

		$addressList = array_merge(
			array($_addressBT[0])// More BT addresses can exist for shopowners :-(
			, $_addressST );

		if($this->_user){
			for ($_i = 0; $_i < count($addressList); $_i++) {
				$addressList[$_i]->address_type_name = '<a href="index.php'
									.'?option=com_virtuemart'
									.'&view=user'
									.'&task=editaddresscart'
									.'&addrtype='.(($_i == 0) ? 'BT' : 'ST')
									.'&user_info_id='.(empty($addressList[$_i]->user_info_id)? 0 : $addressList[$_i]->user_info_id)
									. '">'.$addressList[$_i]->address_type_name.'</a>'.'<br />';
			}
//			$_selectedST = JRequest::getVar('shipto');
			$_selectedAddress = (
				empty($this->_cart->selected_shipto)
					? $addressList[0]->user_info_id // Defaults to 1st BillTo
					: $this->_cart->selected_shipto
				);
//			$_selectedAddress = (
//				empty($this->_cart->address_shipto_id)
//					? $addressList[0]->user_info_id // Defaults to 1st BillTo
//					: $this->_cart->address_shipto_id
//				);

			$this->lists['shipTo'] = JHTML::_('select.radiolist', $addressList, 'shipto', null, 'user_info_id', 'address_type_name', $_selectedAddress);
		} else {
			$_selectedAddress = 0;
			$this->lists['shipTo'] = '';
		}

		$this->lists['billTo'] = empty($addressList[0]->user_info_id)? 0 : $addressList[0]->user_info_id;

	}

	private function prepareUserData(){

		//For User address
		$_currentUser =& JFactory::getUser();
		$this->lists['current_id'] = $_currentUser->get('id');
//		$this->assignRef('user_id', $this->lists['current_id']);
		if($this->lists['current_id']){
			$this->_user = $this->getModel('user');
			$this->_user->setCurrent();
			if(!$this->_user){

			}else{
				$this->assignRef('user', $this->_user);

				$this->_userDetails = $this->_user->getUser();

				//This are other contact details, like used in CB or so.
	//			$_contactDetails = $this->_user->getContactDetails();

				$this->assignRef('userDetails', $this->_userDetails);
			}
		}
	}

	private function prepareCartData(){

		/* Get the products for the cart */
		$prepareCartData = $this->_cart->prepareCartData();

		$this->assignRef('prices', $prepareCartData->prices);

		$this->assignRef('cartData',$prepareCartData->cartData);
		$this->assignRef('calculator',$prepareCartData->calculator);

	}

	private function prepareVendor(){

		$vendor = $this->getModel('vendor','VirtuemartModel');
		$vendor->setId($this->_cart->vendorId);
		$_vendor = $vendor->getVendor();
		$this->assignRef('vendor',$_vendor);
	}

	private function prepareMailData(){

		if(empty($this->vendor)) $this->prepareVendor();
		//TODO add orders, for the orderId
		//TODO add registering userdata
		// In general we need for every mail the shopperdata (with group), the vendor data, shopperemail, shopperusername, and so on
	}

	private function lSelectCoupon(){
		$_couponCode = (isset($this->cartData['couponCode']) ? $this->cartData['couponCode'] : '');
		$this->assignRef('couponCode',$_couponCode);
	}

	private function lSelectShipper(){
		$_selectedShipper = (empty($this->_cart->shipper_id) ? 0 : $this->_cart->shipper_id);
		$this->assignRef('selectedShipper',$_selectedShipper);
	}

	private function lSelectPayment(){

		//For the selection of the payment method we need the total amount to pay.
		$paymentModel = $this->getModel('paymentmethod');

		$selectedPaym = empty($this->_cart->paym_id) ? 0 : $this->_cart->paym_id;
		$this->assignRef('selectedPaym',$selectedPaym);

		$payments = $paymentModel->getPayms(false,true);
//		$withCC=false;
//		foreach($payments as $item){
//			if(isset($item->accepted_creditcards)){
//				$withCC=true;
//			}
//		}
//		$this->assignRef('withCC',$withCC);

		$this->assignRef('paymentModel',$paymentModel);
		$this->assignRef('payments',$payments);

	}

	private function lOrderDone(){

		//Show Thank you page or error due payment plugins like paypal express


	}

	private function prepareAddressDataInCart(){

		$userFieldsModel = $this->getModel('userfields', 'VirtuemartModel');

		//Here we define the fields to skip
		$skips = array('delimiter_userinfo', 'delimiter_billto', 'username', 'password', 'password2'
						, 'agreed', 'address_type', 'bank');

		$BTaddress['fields']= array();
		if(!empty($this->_cart->BT)){
			if(!class_exists('user_info'))require(JPATH_VM_SITE.DS.'helpers'.DS.'user_info.php');
			//Here we get the fields
			$_userFieldsBT = $userFieldsModel->getUserFields(
				 'account'
				, array() // Default toggles
				,  $skips// Skips
			);

			$BTaddress = user_info::getAddress(
				 $userFieldsModel
				,$_userFieldsBT
				,'BT'
			);
		}

		$this->assignRef('BTaddress',$BTaddress['fields']);

		$STaddress['fields']= array();
		if(!empty($this->_cart->ST)){
			if(!class_exists('user_info'))require(JPATH_VM_SITE.DS.'helpers'.DS.'user_info.php');
			$_userFieldsST = $userFieldsModel->getUserFields(
				'shipping'
				, array() // Default toggles
				, $skips
			);

			$STaddress = user_info::getAddress(
				 $userFieldsModel
				,$_userFieldsST
				,'ST'
			);

		}

		$this->assignRef('STaddress',$STaddress['fields']);
	}

}

//no closing tag