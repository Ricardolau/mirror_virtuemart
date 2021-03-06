<?php
/**
 *
 * Description
 *
 * @package	VirtueMart
 * @subpackage
 * @author RolandD
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

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

// Load the model framework
jimport( 'joomla.application.component.model');

/**
 * Model for VirtueMart Orders
 *
 * @package VirtueMart
 * @author RolandD
 */
class VirtueMartModelOrders extends JModel {

	var $_total;
	var $_pagination;

	/**
	 * Constructor
	 */
	function __construct()
	{
		parent::__construct();

		// Get the pagination request variables
		$mainframe = JFactory::getApplication() ;
		$limit = $mainframe->getUserStateFromRequest( 'global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int' );
		$limitstart = $mainframe->getUserStateFromRequest( JRequest::getVar('option').'.limitstart', 'limitstart', 0, 'int' );

		// In case limit has been changed, adjust limitstart accordingly
		$limitstart = ($limit != 0 ? (floor($limitstart / $limit) * $limit) : 0);

		$this->setState('limit', $limit);
		$this->setState('limitstart', $limitstart);
	}

	/**
	 * Loads the pagination
	 */
	public function getPagination()
	{
		if ($this->_pagination == null) {
			jimport('joomla.html.pagination');
			$this->_pagination = new JPagination( $this->getTotal(), $this->getState('limitstart'), $this->getState('limit') );
		}
		return $this->_pagination;
	}

	/**
	 * Gets the total number of products
	 */
	private function getTotal()
	{
		if (empty($this->_total)) {
			$db = JFactory::getDBO();

			$q = "SELECT o.`order_id` ".$this->getOrdersListQuery().$this->getOrdersListFilter();
			$db->setQuery($q);
			$fields = $db->loadObjectList('order_id');
			$this->_total = count($fields);
		}

		return $this->_total;
	}

	/**
	 * Load a single order
	 */
	public function getOrder()
	{
		$db = JFactory::getDBO();
		$order = array();
		$order_id = JRequest::getInt('order_id');

		/* Get the order details */
		$q = "SELECT o.*, u.*,
				IF (isempty(coupon_code), '-', coupon_code) AS coupon_code,
				s.order_status_name
			FROM #__vm_orders o
			LEFT JOIN #__vm_order_status s
			ON s.order_status_code = o.order_status
			LEFT JOIN #__vm_order_user_info u
			ON u.order_id = o.order_id
			WHERE o.order_id=".$order_id;
		$db->setQuery($q);
		$order['details'] = $db->loadObjectList('address_type');

		/* Get the order history */
		$q = "SELECT *
			FROM #__vm_order_history
			WHERE order_id=".$order_id."
			ORDER BY order_status_history_id ASC";
		$db->setQuery($q);
		$order['history'] = $db->loadObjectList();

		/* Get the order items */
		$q = "SELECT order_item_id, product_quantity, order_item_name,
				order_item_sku, i.product_id, product_item_price,
				product_final_price, product_attribute, order_status,
				intnotes
			FROM #__vm_order_item i
			LEFT JOIN #__vm_product p
			ON p.product_id = i.product_id
			WHERE order_id=".$order_id;
		$db->setQuery($q);
		$order['items'] = $db->loadObjectList();

		return $order;
	}

	/**
	 * Select the products to list on the product list page
	 * @param $_uid integer Optional user ID to get the orders of a single user
	 * @param $_ignorePagination boolean If true, ignore the Joomla pagination (for embedded use, default false)
	 */
	public function getOrdersList($_uid = 0, $_ignorePagination = false)
	{
		$db = JFactory::getDBO();
		/* Pagination */
		$this->getPagination();

		/* Build the query */
		$q = "SELECT o.*, CONCAT(u.first_name, ' ', IF(u.middle_name IS NULL, '', CONCAT(u.middle_name, ' ')), u.last_name) AS order_name "
			.',m.paym_name AS payment_method '
			.$this->getOrdersListQuery();
		$_filter = array();
		if ($_uid > 0) {
			$_filter[] = ('u.user_id = ' . $_uid);
		}
		$q .= $this->getOrdersListFilter()."
	";
		if ($_ignorePagination) {
			$db->setQuery($q);
		} else {
			$db->setQuery($q, $this->_pagination->limitstart, $this->_pagination->limit);
		}
		return $db->loadObjectList('order_id');
	}

	/**
	 * List of tables to include for the product query
	 * @author RolandD
	 */
	private function getOrdersListQuery()
	{
		return 'FROM #__vm_orders o
			LEFT JOIN #__vm_order_user_info u
			ON u.order_id = o.order_id 
			LEFT JOIN #__vm_payment_method m
			ON o.payment_method_id = m.paym_id';
	}

	/**
	 * Collect the filters for the query
	 * @author RolandD
	 */
	private function getOrdersListFilter($filters = array())
	{
		$db = JFactory::getDBO();
		/* Check some filters */
		$filter_order = JRequest::getCmd('filter_order', 'order_id');
		if ($filter_order == '') $filter_order = 'order_id';
		$filter_order_Dir = JRequest::getWord('filter_order_Dir', 'desc');
		if ($filter_order_Dir == '') $filter_order_Dir = 'desc';

		// FIXME Joomla expects an ID field in every query. If might be a default ordering from a previous
		// page here, so this dirty hack makes sure we don't get errors here.
		// Consider it a Joomla bug... but we have to deal with it....
		if ($filter_order == 'id') {
			$filter_order = 'order_id';
		}
		/* Attributes name */
		if (JRequest::getVar('filter_orders', false)) $filters[] = '#__vm_orders.`order_id` LIKE '.$db->Quote('%'.JRequest::getVar('filter_orders').'%');

		if (count($filters) > 0) $filter = ' WHERE '.implode(' AND ', $filters).' ORDER BY '.$filter_order." ".$filter_order_Dir;
		else $filter = ' ORDER BY '.$filter_order." ".$filter_order_Dir;
		return $filter;
	}

	/**
	 * Store an attribute
	 *
	 * @author RolandD
	 */
	public function saveAttribute()
	{
		/* Load an attribute */
		$row = $this->getTable();
		$row->load(JRequest::getInt('attribute_sku_id'));

		/* Update the list order */
		$new_list = JRequest::getInt('listorder', 0);
		$db = JFactory::getDBO();
		if ($new_list == 0) {
			$q = "SELECT IF(MAX(attribute_list) IS NULL, 1, MAX(attribute_list)+1) AS newlist
				FROM #__vm_product_attribute_sku";
			$db->setQuery($q);
			$new_list = $db->loadResult();
		} else {
			if ($new_list > $row->attribute_list) {
				/* First the lists below the new list order */
				$q = "UPDATE #__vm_product_attribute_sku SET attribute_list = attribute_list-1
					 WHERE attribute_list <= ".$new_list;
				$db->setQuery($q);
				$db->query();
			} elseif ($new_list < $row->attribute_list) {
				/* Second the lists above the new list order */
				$q = "UPDATE #__vm_product_attribute_sku SET attribute_list = attribute_list+1
					 WHERE attribute_list >= ".$new_list;
				$db->setQuery($q);
				$db->query();
			}
		}
		$row->bind(JRequest::get('post'));
		$row->attribute_list = $new_list;
		if ($row->store()) {
			return true;
		} else {
			return false;
		}
	}

	/**
	 * Remove an attribute
	 * @author RolandD
	 * @todo Add sanity checks
	 */
	public function removeAttribute()
	{
		/* Get the attribute IDs to remove */
		$cids = JRequest::getVar('cid');
		if (!is_array($cids)) $cids = array($cids);

		/* Start removing */
		foreach ($cids as $key => $attribute_id) {
			/* First copy the product in the product table */
			$row = $this->getTable('attributes');

			/* Delete the attribute */
			$row->delete($attribute_id);
		}
		return true;
	}

	/**
	 * Get a list of order statuses
	 * @author RolandD
	 */
	public function getOrderStatusList()
	{
		$db = JFactory::getDBO();
		$q = "SELECT order_status_code AS value, order_status_name AS text
			FROM #__vm_order_status
			ORDER BY ordering";
		$db->setQuery($q);
		return $db->loadObjectList();
	}

	public function updateOrderStatus()
	{
		// TODO This must be a rewrite of the updateStatus below
	}

	/**
	 * Update an order status and send e-mail if needed
	 * @author RolandD
	 * @author Oscar van Eijk
	 */
	public function updateStatus()
	{
		$db = JFactory::getDBO();
		$mainframe = JFactory::getApplication();

		/* Get a list of orders to update */
		$update = array_diff_assoc(JRequest::getVar('order_status', array()), JRequest::getVar('current_order_status', array()));

		/* Get the list of orders to notify */
		$notify = JRequest::getVar('notify_customer', array());

		/* See where the lines should be updated too */
		$update_lines = JRequest::getVar('update_lines', array());
		
		/* Get the list of comments */
		$comments = JRequest::getVar('order_comment', array());

		/* Process the orders to update */
		if ($update) {
			$updated = 0;
			$error = 0;
			foreach ($update as $order_id => $new_status) {
				$timestamp = time();
				/* Get customer notification */
				$customer_notified = (@$notify[$order_id] == 1) ? 1 : 0;

				/* Get the comments */
				$comment = (array_key_exists($order_id, $comments)) ? $comments[$order_id] : '';

				/* Update the order */
				$order = $this->getTable();
				$order->load($order_id);
				$order_status_code = $order->order_status;

				// Order updates can be ignored if we're updating only lines
				$order->order_status = $new_status;
				$order->mdate = $timestamp;

				/* When the order is set to "shipped", we can capture the payment */
				if( ($order_status_code == "P" || $order_status_code == "C") && $new_status == "S") {
					JPluginHelper::importPlugin('vmpayment');
					$_dispatcher =& JDispatcher::getInstance();
					$_returnValues = $_dispatcher->trigger('plgVmOnShipOrder',array(
									 $order_id
								)
						);
					foreach ($_returnValues as $_returnValue) {
						if ($_returnValue == true) {
							break; // Plugin was successfull
						} elseif ($_returnValue == false) {
							return false; // Plugin failed
						}
						// Ignore null status and look for the next returnValue
					}
				}

				/**
				 * If an order gets cancelled, fire a plugin event, perhaps
				 * some authorization needs to be voided
				 */
				if ($new_status == "X") {
					JPluginHelper::importPlugin('vmpayment');
					$_dispatcher =& JDispatcher::getInstance();
					$_dispatcher->trigger('plgVmOnCancelOrder',array(
									 $order_id
									,$order_status_code
									,$new_status
							)
					);
				}

				if ($order->store()) {
					/* Update the order history */
					$this->_updateOrderHist($order_id, $new_status, $customer_notified, $comment);

					/* Update stock level */
					require_once(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_virtuemart'.DS.'models'.DS.'orderstatus.php');
					$_updateStock = VirtueMartModelOrderstatus::updateStockAfterStatusChange($new_status, $order_status_code);
					if ($_updateStock != 0) {
						require_once(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_virtuemart'.DS.'models'.DS.'product.php');
						$_productModel = new VirtueMartModelProduct();
						$_q = 'SELECT product_id '
							.', product_quantity '
							.'FROM `#__vm_order_item` '
							."WHERE `order_id` = $order_id";
						$db->setQuery($_q);
						if ($_products = $db->loadObjectList()) {
							foreach ($_products as $_key => $_product) {
								if ($_updateStock > 0) { // Increase
									$_productModel->increaseStockAfterCancel ($_product->product_id, $_product->product_quantity);
								} else { // Decrease
									$_productModel->decreaseStockAfterSales ($_product->product_id, $_product->product_quantity);
								}
							}
						}
					}

					/* Update order item status */
					if (@$update_lines[$order_id]) {
						$q = "SELECT order_item_id
							FROM #__vm_order_item
							WHERE order_id=".$order_id;
						$db->setQuery($q);
						$order_items = $db->loadObjectList();
						if ($order_items) {
							foreach ($order_items as $key => $order_item) {
								$this->updateSingleItemStatus($order_item->order_item_id, $new_status);
							}
						}
					}

					/* Send a download ID */
					//if (VmConfig::get('enable_downloads') == '1') $this->mailDownloadId($order_id);

					/* Check if the customer needs to be informed */
					if (@$notify[$order_id]) $this->notifyCustomer($order, $comments);
					$updated++;
				} else {
					$error++;
				}
			}
		}
		return array('updated' => $updated, 'error' => $error);
	}

	/**
	 * Get the information from the cart and create an order from it
	 *
	 * @author Oscar van Eijk
	 * @param object $_cart The cart data
	 * @return mixed The new ordernumber, false on errors
	 */
	public function createOrderFromCart($_cart = null)
	{
		if ($_cart === null) {
			$this->setError('createOrderFromCart() called without a cart - that\'s a programming bug');
			return false;
		}

		$_usr =& JFactory::getUser();
		$_prices = $_cart->getCartPrices();
		if (($_orderID = $this->_createOrder($_cart, $_usr, $_prices)) == 0) {
			return false;
		}
		if (!$this->_createOrderLines($_orderID, $_cart)) {
			return false;
		}
		$this->_updateOrderHist($_orderID);
		if (!$this->_writeUserInfo($_orderID, $_usr, $_cart)) {
			return false;
		}
		$this->_handlePayment($_orderID, $_cart, $_prices);
		
		return $_orderID;
	}

	/**
	 * Write the order header record
	 *
	 * @author Oscar van Eijk
	 * @param object $_cart The cart data
	 * @param object $_usr User object
	 * @param array $_prices Price data
	 * @return integer The new ordernumber
	 */
	private function _createOrder($_cart, &$_usr, $_prices)
	{
//		TODO We need tablefields for the new values:
//		Shipping:
//		$_prices['shippingValue']		w/out tax
//		$_prices['shippingTax']			Tax
//		$_prices['salesPriceShipping']	Total
//		
//		Payment:
//		$_prices['paymentValue']		w/out tax
//		$_prices['paymentTax']			Tax
//		$_prices['paymentDiscount']		Discount
//		$_prices['salesPricePayment']	Total

		$_orderData =  $this->getTable('orders');
		$_orderData->order_id = null;
		$_orderData->user_id = $_usr->get('id');
		$_orderData->vendor_id = $_cart->vendorId;
		$_orderData->order_number = $this->generateOrderNumber($_usr->get('id'));
		//Note as long we do not have an extra table only storing addresses, the user_info_id is not needed.
		//The user_info_id is just the id of a stored address and is only necessary in the user maintance view or for choosing addresses.
		//the saved order should be an snapshot with plain data written in it.
//		$_orderData->user_info_id = 'TODO'; // $_cart['BT']['user_info_id']; // TODO; Add it in the cart... but where is this used? Obsolete?
		$_orderData->order_total = $_prices['salesPrice'];
		$_orderData->order_subtotal = $_prices['priceWithoutTax'];
		$_orderData->order_tax = $_prices['taxAmount'];
		$_orderData->order_tax_details = null; // TODO What's this?? Which data needs to be serialized?  I dont know also
		$_orderData->order_shipping = $_prices['shippingValue'];
		$_orderData->order_shipping_tax = $_prices['shippingTax'];
		$_orderData->coupon_discount = $_prices['couponValue']; // TODO Coupons not yet implemented
		$_orderData->coupon_code = $_prices['couponName']; // TODO Coupons not yet implemented
		$_orderData->order_discount = $_prices['discountAmount'];
		$_orderData->order_currency = null; // TODO; Max: the currency should be in the cart somewhere!
		$_orderData->order_status = 'P'; // TODO; when flows are implemented (1.6?); look it up
		if (isset($_cart->currency_id)) {
			$_orderData->user_currency_id = $_cart->currency_id;
			$_orderData->user_currency_rate = $_cart->currency_rate;
		}
		$_orderData->payment_method_id = $_cart->paym_id;
		$_orderData->cdate = time();
		$_orderData->mdate = time();
		$_orderData->ship_method_id = $_cart->shipping_rate_id;

		$_filter = &JFilterInput::getInstance (array('br', 'i', 'em', 'b', 'strong'), array(), 0, 0, 1);
		$_orderData->customer_note = $_filter->clean($_cart->customer_comment);
		$_orderData->ip_address = $_SERVER['REMOTE_ADDR'];
		if (!$_orderData->store()){
			$this->setError($_orderData->getError());
			return 0;
		}
		$_orderID = $_orderData->_db->insertid();
		return $_orderID;
	}

	/**
	 * Write the BillTo record, and if set, the ShipTo record
	 * 
	 * @author Oscar van Eijk
	 * @param integer $_id Order ID
	 * @param object $_usr User object
	 * @param object $_cart Cart object
	 * @return boolean True on success
	 */
	private function _writeUserInfo($_id, &$_usr, $_cart)
	{
		$_userInfoData =  $this->getTable('order_user_info');
		require_once(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_virtuemart'.DS.'models'.DS.'userfields.php');
		require_once(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_virtuemart'.DS.'helpers'.DS.'shopfunctions.php');
		$_userFieldsModel = new VirtueMartModelUserfields();
		$_userFieldsBT = $_userFieldsModel->getUserFields('account'
			, array('delimiters'=>true, 'captcha'=>true)
			, array('username', 'password', 'password2', 'agreed', 'user_is_vendor')
		);
		foreach ($_userFieldsBT as $_fld) {
			$_name = $_fld->name;
			if ($_name == 'country_id') {
				$_userInfoData->country = $_cart->BT['country_id'];
//				$_userInfoData->country = shopFunctions::getCountryByID($_cart->BT['country_id']);
			} elseif ($_name == 'state_id') {
				$_userInfoData->state = $_cart->BT['state_id'];
//				$_userInfoData->state = shopFunctions::getStateByID($_cart->BT['state_id']);
			} else {
				$_userInfoData->$_name = $_cart->BT[$_name];
			}
		}
		$_userInfoData->order_id = $_id;
		$_userInfoData->user_id = $_usr->get('id');
		if (!$_userInfoData->store()){
			$this->setError($_userInfoData->getError());
			return false;
		}
		$_userInfoData->order_info_id = null; // Reset key to make sure it doesn't get overwritten by ST
		
		if ($_cart->ST) {
			$_userInfoData->order_info_id = null; // Reset key to make sure it doesn't get overwritten by ST
			$_userFieldsST = $_userFieldsModel->getUserFields('shipping'
				, array('delimiters'=>true, 'captcha'=>true)
				, array('username', 'password', 'password2', 'agreed', 'user_is_vendor')
			);
			foreach ($_userFieldsST as $_fld) {
				$_name = $_fld->name;
				if ($_name == 'country_id') {
					$_userInfoData->country = $_cart->ST['country_id'];
//					$_userInfoData->country = shopFunctions::getCountryByID($_cart->ST['country_id']);
				} elseif ($_name == 'state_id') {
					$_userInfoData->state = $_cart->ST['state_id'];
//					$_userInfoData->state = shopFunctions::getStateByID($_cart->ST['state_id']);
				} else {
					$_userInfoData->$_name = $_cart->ST[$_name];
				}
			}
			$_userInfoData->order_id = $_id;
			$_userInfoData->user_id = $_usr->get('id');
			$_userInfoData->address_type = 'ST';
			if (!$_userInfoData->store()){
				$this->setError($_userInfoData->getError());
				return false;
			}
		}
		return true;
	}

	/**
	 * Handle the selected payment method. If triggered to do so, this method will also
	 * take care of the stock updates.
	 * 
	 * @author Oscar van Eijk
	 * @param int $_orderID Order ID
	 * @param object $_cart Cart object
	 * @param array $_prices Price data
	 */
	private function _handlePayment($_orderID, $_cart, $_prices)
	{
		JPluginHelper::importPlugin('vmpayment');
		$_dispatcher =& JDispatcher::getInstance();
		$_returnValues = $_dispatcher->trigger('plgVmOnConfirmedOrderStorePaymentData',array(
					 $_orderID
					,$_cart
					,$_prices
		));
		foreach ($_returnValues as $_returnValue) {
			if ($_returnValue !== null) {
				// We got a new order status; check if the stock should be updated
				require_once(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_virtuemart'.DS.'models'.DS.'orderstatus.php');
				if (VirtueMartModelOrderstatus::updateStockAfterStatusChange($_returnValue) < 0) {// >0 is not possible for new orders
					require_once(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_virtuemart'.DS.'models'.DS.'product.php');
					$_productModel = new VirtueMartModelProduct();
					foreach ($_cart->products as $_prod) {
						$_productModel->decreaseStockAfterSales ($_prod->product_id, $_prod->quantity);
					}
				}
				break; // This was the active plugin, so there's nothing left to do here.
			}
			// Returnvalue 'null' must be ignored; it's an inactive plugin so look for the next one
		}
	}
	
	/**
	 * Create the ordered item records
	 *
	 * @author Oscar van Eijk
	 * @param integer $_id integer Order ID
	 * @param object $_cart array The cart data
	 * @return boolean True on success
	 */
	private function _createOrderLines($_id, $_cart)
	{
		$_orderItems = $this->getTable('order_item');
//		$_lineCount = 0;
		foreach ($_cart->products as $_prod) {
		// TODO: add fields for the following data:
//    * [double] basePrice = 38.48
//    * [double] basePriceVariant = 38.48
//    * [double] basePriceWithTax = 42.04
//    * [double] discountedPriceWithoutTax = 36.48
//    * [double] priceBeforeTax = 36.48
//    * [double] salesPrice = 39.85
//    * [double] salesPriceTemp = 39.85
//    * [double] taxAmount = 3.37
//    * [double] salesPriceWithDiscount = 0
//    * [double] discountAmount = 2.19
//    * [double] priceWithoutTax = 36.48
//    * [double] variantModification = 0
			$_orderItems->order_item_id = null;
			$_orderItems->order_id = $_id;
			$_orderItems->user_info_id = 'TODO'; //$_cart['BT']['user_info_id']; // TODO; Add it in the cart... but where is this used? Obsolete?
			$_orderItems->vendor_id = $_prod->vendor_id;
			$_orderItems->product_id = $_prod->product_id;
			$_orderItems->order_item_sku = $_prod->product_sku;
			$_orderItems->order_item_name = $_prod->product_name;
			$_orderItems->product_quantity = $_prod->quantity;
			$_orderItems->product_item_price = $_prod->prices['basePriceVariant'];
			$_orderItems->product_final_price = $_prod->prices['salesPrice'];
//			$_orderItems->order_item_currency = $_prices[$_lineCount]['']; // TODO Currency
			$_orderItems->order_status = 'P';
			$_orderItems->cdate = time();
			$_orderItems->mdate = time();
			$_orderItems->product_attribute = '';

			$_variants = array_merge($_prod->variant, $_prod->customvariants);
			foreach ($_variants as $_a => $_v) {
				$_orderItems->product_attribute .= (
					  (empty($_orderItems->product_attribute)?'':"<br/>\n")
					. $_a . ': ' . $_v
				);
			}

			if (!$_orderItems->store()){
				// Stop on first failure, most likely the result of a bug anyway (so in the testphase)
				$this->setError($_orderItems->getError());
				return false;
			}
		}
		return true;
	}

	/**
	 * Update the order history
	 *
	 * @author Oscar van Eijk
	 * @param $_id Order ID
	 * @param $_status New order status (default: P)
	 * @param $_notified 1 (default) if the customer was notified, 0 otherwise
	 * @param $_comment (Customer) comment, default empty
	 */
	private function _updateOrderHist($_id, $_status = 'P', $_notified = 1, $_comment = '')
	{
		$_orderHist = $this->getTable('order_history');
		$_orderHist->order_id = $_id;
		$_orderHist->order_status_code = $_status;
		$_orderHist->date_added = date('Y-m-d G:i:s', time());
		$_orderHist->customer_notified = $_notified;
		$_orderHist->comments = $_comment;
		$_orderHist->store();
	}

	/**
	 * Generate a unique ordernumber. This is done in a similar way as VM1.1.x, although
	 * the reason for this is unclear to me :-S
	 *
	 * @author Oscar van Eijk
	 * @param integer $_uid The user ID. Defaults to 0 for guests
	 * @return string A unique ordernumber
	 */
	private function generateOrderNumber($_uid = 0)
	{
		return substr(
				 $_uid
					.'_'
					.md5(
						 session_id()
						.(string) time()
					)
				,0
				,32
		);
	}

	/**
	 * Update an order item status
	 * @author Oscar van Eijk
	 */
	public function updateSingleItemStatus($_item, $_status)
	{
		$_table = $this->getTable('order_item');
		$_table->load($_item);
		$_table->order_status = $_status;
		$_table->mdate = time();
		$_table->store();
	}

	/**
	 * Update an order item status
	 * @author Oscar van Eijk
	 */
	public function updateSingleItem()
	{
		$_table = $this->getTable('order_item');
		$_item = JRequest::getVar('order_item_id', '');
		$_table->load($_item);
		$_table->order_status = JRequest::getVar('order_status_'.$_item, '');
		$_table->product_quantity = JRequest::getVar('product_quantity_'.$_item, '');
		$_table->product_item_price = JRequest::getVar('product_item_price_'.$_item, '');
		$_table->product_final_price = JRequest::getVar('product_final_price_'.$_item, '');
		$_attribs = JRequest::getVar('product_attribute_'.$_item,  0, '', 'array');
		if ($_attribs != 0) {
			$_attrib = array();
			foreach ($_attribs as $_k => $_v) {
				$_attrib[] = $_k . ': ' . $_v;
			}
			$_table->product_attribute = join("<br>\n", $_attrib);
		}
		$_table->mdate = time();
		$_table->store();
	}
	
	/**
	 * E-mails the Download-ID to the customer
	 * or deletes the Download-ID from the product_downloads table
	 *
	 * @return boolean
	 */
	function mailDownloadId($order_id)
	{
		$mainframe = JFactory::getApplication();
		$url = VmConfig::get('url')."index.php?option=com_virtuemart&page=shop.downloads&Itemid=".$sess->getShopItemid();

		$db = JFactory::getDBO();
		$db->setQuery('SELECT order_status FROM #__vm_orders WHERE order_id='.$order_id);
		$order_status = $db->loadResult();

		if ($order_status == VmConfig::get('enable_download_status')) {
			$q = "SELECT order_id,user_id,download_id,file_name
				FROM #__vm_product_download
				WHERE order_id = '".$order_id."'";
			$db->setQuery($q);
			$downloads = $db->loadObjectList();
			if ($downloads) {
				$vendor_id = 1;
				$dbv = ps_vendor::get_vendor_fields($vendor_id,array("email","vendor_name"),"");

				$q = "SELECT CONCAT(first_name, ' ', IF(middle_name IS NULL, '', CONCAT(middle_name, ' ')), last_name) AS full_name, email
					FROM #__vm_user_info
					LEFT JOIN #__users ju
					ON (ju.id = u.user_id)
					WHERE user_id = '".$downloads[0]->userid."'
					AND address_type='BT'
					LIMIT 1";
				$db->setQuery($q);
				$user = $db->loadObject();

				$message = JText::_('HI',false) .' '.$user->full_name.",\n\n";
				$message .= JText::_('VM_DOWNLOADS_SEND_MSG_1',false).".\n";
				$message .= JText::_('VM_DOWNLOADS_SEND_MSG_2',false)."\n\n";

				foreach ($downloads as $key => $download) {
					$message .= $download->file_name.": ".$download->download_id
					. "\n".$url."&download_id=".$download->download_id."\n\n";
				}

				$message .= JText::_('VM_DOWNLOADS_SEND_MSG_3',false).VmConfig::get('download_max')."\n";
				$expire = ((VmConfig::get('download_expire') / 60) / 60) / 24;
				$message .= str_replace("{expire}", $expire, JText::_('VM_DOWNLOADS_SEND_MSG_4',false));
				$message .= "\n\n____________________________________________________________\n";
				$message .= JText::_('VM_DOWNLOADS_SEND_MSG_5',false)."\n";
				$message .= $dbv->f("vendor_name") . " \n" .VmConfig::get('url')."\n\n".$dbv->f("email") . "\n";
				$message .= "____________________________________________________________\n";
				$message .= JText::_('VM_DOWNLOADS_SEND_MSG_6',false) . $dbv->f("vendor_name");


				$mail_Body = $message;
				$mail_Subject = JText::_('VM_DOWNLOADS_SEND_SUBJ',false);

				$result = vmMail( $dbv->f("email"), $dbv->f("vendor_name"),
				$db->f("email"), $mail_Subject, $mail_Body, '' );

				if ($result) {
					$mainframe->enqueueMessage( JText::_('VM_DOWNLOADS_SEND_MSG',false). " ". $user->full_name. ' '.$user->email);
				}
				else {
					$mainframe->enqueueMessage( JText::_('VM_DOWNLOADS_ERR_SEND',false)." ". $user->full_name. ' '.$user->email, 'error');
				}
			}
		}
		else if ($order_status == VmConfig::get('disable_download_status')) {
			$q = "DELETE FROM #__vm_product_download WHERE order_id=".$order_id;
			$db->setQuery($q);
			$db->query();
		}

		return true;
	}

	/**
	 * Notifies the customer that the Order Status has been changed
	 *
	 * @author RolandD
	 * @todo: Fix URL when we have front-end done
	 */
	function notifyCustomer($order, $_comments) {
		$mainframe = JFactory::getApplication();
		$db = JFactory::getDBO();
		//$url = VmConfig::get('secureurl')."index.php?option=com_virtuemart&page=account.order_details&order_id=".$order->order_id.'&Itemid='.$sess->getShopItemid();
		$url = 'url';

		/* Get the list of comments to include */
		$include_comments = JRequest::getVar('include_comment', array());

		/* Get vendor info */
		require_once(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_virtuemart'.DS.'models'.DS.'vendor.php');
		$vendor_id = VirtueMartModelVendor::getVendorId('order', $order->order_id);
		$vendorModel = new VirtueMartModelVendor();
		$vendorModel->setId($vendor_id);
		$vendor = $vendorModel->getVendor();
		$vendor->email = $vendorModel->getVendorEmail($vendor->vendor_id);
		
		$q = "SELECT CONCAT(first_name, ' ', IF(middle_name IS NULL, '', CONCAT(middle_name, ' ')), last_name) AS full_name, email, order_status_name
			FROM #__vm_order_user_info
			LEFT JOIN #__vm_orders
			ON #__vm_orders.user_id = #__vm_order_user_info.user_id
			LEFT JOIN #__vm_order_status
			ON #__vm_order_status.order_status_code = #__vm_orders.order_status
			WHERE #__vm_orders.order_id = '".$order->order_id."'
			AND #__vm_orders.order_id = #__vm_order_user_info.order_id";
		$db->setQuery($q);
		$user = $db->loadObject();

		/* MAIL BODY */
		$message = JText::_('HI',false) .' '. $user->full_name. ",\n\n";
		$message .= JText::_('VM_ORDER_STATUS_CHANGE_SEND_MSG_1',false)."\n\n";

		/* Check if we need to include the comment in the mail */
		if (array_key_exists($order->order_id, $include_comments) && !empty($_comments)) {
			$message .= JText::_('VM_ORDER_HISTORY_COMMENT_EMAIL',false).":\n";
			$message .= $_comments;
			$message .= "\n____________________________________________________________\n\n";
		}

		/* Add the new status */
		$message .= JText::_('VM_ORDER_STATUS_CHANGE_SEND_MSG_2',false)."\n";
		$message .= "____________________________________________________________\n\n";
		$message .= $user->order_status_name;

		if (VmConfig::get('vm_registration_type') != 'NO_REGISTRATION' ) {
			$message .= "\n____________________________________________________________\n\n";
			$message .= JText::_('VM_ORDER_STATUS_CHANGE_SEND_MSG_3',false)."\n";
			$message .= $url;
		}
		$message .= "\n\n____________________________________________________________\n";
		$message .= $vendor->vendor_name . " \n";
		$message .= VmConfig::get('url')."\n";
		$message .= $vendor->email;

		$mailer = shopFunctions::loadMailer();
		$mailer->From = $vendor->email;
		$mailer->FromName = $vendor->vendor_name;
		$mailer->AddReplyTo(array($vendor->email, $vendor->vendor_name));
		$mailer->AddAddress($user->email);
		$mailer->setBody(nl2br(str_replace( "{order_id}", $order->order_id, $message)));
		$mailer->setSubject(str_replace( "{order_id}", $order->order_id, JText::_('VM_ORDER_STATUS_CHANGE_SEND_SUBJ')));

		$result = $mailer->Send();

		/* Send the email */
		if ($result) {
			$mainframe->enqueueMessage(JText::_('VM_DOWNLOADS_SEND_MSG',false)." ".$user->full_name.", ".$user->email);
		}
		else {
			$mainframe->enqueueMessage( JText::_('VM_DOWNLOADS_ERR_SEND',false).' '.$user->full_name. ', '.$user->email." (". $result->ErrorInfo.")" );
		}

		/* Clear the mail details */
		$mailer->ClearAddresses();
	}


	/**
	 * Retrieve the details for an order line item.
	 *
	 * @author RickG
	 * @param string $orderId Order id number
	 * @param string $orderLineId Order line item number
	 * @return object Object containing the order item details.
	 */
	function getOrderLineDetails($orderId, $orderLineId) {
		$table = $this->getTable('order_item');
		if ($table->load($orderLineId)) {
			return $table;
		}
		else {
			$table->reset();
			$table->cdate = JFactory::getDate()->toMySql();
			$table->order_id = $orderId;
			return $table;
		}
	}


	/**
	 * Save an order line item.
	 *
	 * @author RickG
	 * @return boolean True of remove was successful, false otherwise
	 */
	function saveOrderLineItem() {
		$table = $this->getTable('order_item');

		$data = JRequest::get('post');
		$curDate = JFactory::getDate();
		$data['mdate'] = $curDate->toMySql();

		// Bind the form fields to the order item table
		if (!$table->bind($data)) {
			$this->setError($table->getError());
			return false;
		}

		// Make sure the order item record is valid
		if (!$table->check()) {
			$this->setError($table->getError());
			return false;
		}

		// Save the order item record to the database
		if (!$table->store()) {
			$this->setError($table->getError());
			return false;
		}

		return true;
	}

	/**
	 * Remove an order
	 *
	 * @author Oscar van Eijk
	 * @return boolean True of remove was successful, false otherwise
	 */
	function removeOrder()
	{
		$orderIds = JRequest::getVar('cid',  0, '', 'array');
		$table = $this->getTable('orders');

		foreach($orderIds as $_id) {
			$this->_db->setQuery('SELECT order_item_id '
				. 'FROM #__vm_order_item '
				. 'WHERE order_id='.$_id);
			$order_items = $this->_db->loadObjectList();

			if ($order_items) {
				foreach ($order_items as $key => $_item) {
					if (!self::removeOrderLineItem($_item)) {
						return (false);
					}
				}
			}
			if (!$table->delete($_id)) {
				$this->setError($table->getError());
				return false;
			}
		}
		return true;
	}

	/**
	 * Remove an order line item.
	 *
	 * @author RickG
	 * @param string $orderLineId Order line item number
	 * @return boolean True of remove was successful, false otherwise
	 */
	function removeOrderLineItem($orderLineId) {
		$table = $this->getTable('order_item');

		if ($table->delete($orderLineId)) {
			return true;
		}
		else {
			$this->setError($table->getError());
			return false;
		}
	}


	/**
	 * Create a list of products for JSON return
	 */
	public function getProductListJson() {
		$db = JFactory::getDBO();
		$filter = JRequest::getVar('q', false);
		$q = "SELECT product_id AS id, CONCAT(product_name, '::', product_sku) AS value
			FROM #__vm_product";
		if ($filter) $q .= " WHERE product_name LIKE '%".$filter."%'";
		$db->setQuery($q);
		return $db->loadObjectList();
	}
}


// No closing tag