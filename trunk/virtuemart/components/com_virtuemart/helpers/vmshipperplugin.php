<?php

/**
 * Abstract class for shipper plugins
 *
 * @package	VirtueMart
 * @subpackage Plugins
 * @author Oscar van Eijk
 * @author Valérie Isaksen
 * @link http://www.virtuemart.net
 * @copyright Copyright (c) 2004 - 2011 VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id$
 */
// Load the helper functions that are needed by all plugins
if (!class_exists('ShopFunctions'))
    require(JPATH_VM_ADMINISTRATOR . DS . 'helpers' . DS . 'shopfunctions.php');
if (!class_exists('DbScheme'))
    require(JPATH_VM_ADMINISTRATOR . DS . 'helpers' . DS . 'dbscheme.php');
if (!class_exists('vmPlugin'))
    require(JPATH_VM_SITE . DS . 'helpers' . DS . 'vmplugin.php');

// Get the plugin library
jimport('joomla.plugin.plugin');

/**
 * Abstract class for shipper plugins.
 * This class provides some standard and abstract methods that can or must be reimplemented.
 *
 * @tutorial All methods are documented, but to make life easier, here's a short overview
 * how the methods can be used in the process order.
 * 	* _createTable() is called by the constructor. Use this method to create or alter the database table.
 * 	* When a shopper selects a shipper, plgOnSelectShipper() is fired. It displays the shipper and can be used
 * 	for collecting extra - shipper specific - info.
 * 	* After selecting, plgVmShipperSelected() can be used to store extra shipper info in the cart. The selected shipper
 * 	ID will be stored in the cart by the checkout process before this method is fired.
 * 	* plgOnConfirmShipper() is fired when the order is confirmed and stored to the database. It is called
 * 	before the rest of the order or stored, when reimplemented, it *must* include a call to parent::plgOnConfirmShipper()
 * 	(or execute the same steps to put all data in the cart)
 *
 * When a stored order is displayed in the backend, the following events are used:
 * 	* plgVmOnShowOrderShipperBE() displays specific data about (a) shipment(s) (NOTE: this plugin is
 * 	OUTSIDE any form!)
 * 	* plgVmOnShowOrderLineShipperBE() can be used to show information about a single orderline, e.g.
 * 	display a package code at line level when more packages are shipped.
 * 	* plgVmOnEditOrderLineShipperBE() can be used add a package code for an order line when more
 * 	packages are shipped.
 * 	* plgVmOnUpdateOrderShipperBE is fired inside a form. It can be used to add shipper data, like package code.
 * 	* plgVmOnSaveOrderShipperBE() is fired from the backend after the order has been saved. If one of the
 * 	show methods above have to option to add or edit info, this method must be used to save the data.
 * 	* plgVmOnUpdateOrderLine() is fired from the backend after an order line has been saved. This method
 * 	must be reimplemented if plgVmOnEditOrderLineShipperBE() is used.
 *
 * The frontend 1 show method:
 * 	* plgVmOnShowOrderShipperFE() collects and displays specific data about (a) shipment(s)
 *
 * @package	VirtueMart
 * @subpackage Plugins
 * @author Oscar van Eijk
 * @author Valérie Isaksen
 *
 */
abstract class vmShipperPlugin extends vmPlugin {

    //private $_virtuemart_shippermethod_id = 0;
    /**
     * @var string Identification of the shipper. This var must be overwritten by all plugins,
     * by adding this code to the constructor:
     * $this->_pelement = basename(__FILE, '.php');
     */
    protected $_pelement = '';
    protected $_tablename = '';

    /**
     * @var array List with all carriers the have been implemented with the plugin in the format
     * id => name
     */
    protected $shippers;

    /**
     * Constructor
     *
     * @param object $subject The object to observe
     * @param array  $config  An array that holds the plugin configuration
     * @since 1.5
     */
    function __construct(& $subject, $config) {
	$this->_vmplugin = 'shipper';
	parent::__construct($subject, $config);
	$lang = JFactory::getLanguage();
	$filename = 'plg_vm' . $this->_vmplugin . '_' . $this->_pelement;
	$lang->load($filename, JPATH_ADMINISTRATOR);

	if (!class_exists('JParameter'))
	    require(JPATH_VM_LIBRARIES . DS . 'joomla' . DS . 'html' . DS . 'parameter.php' );
    }

    /**
     * This functions gets the used and configured shipping method
     * pelement of this class determines the used jplugin.
     * The right shipping method is determined by the vendor and the jplugin id.
     *
     * This function sets the used shipping plugin as variable of this class
     * @author Max Milbers
     *
     */
    protected function getVmShipperParams($vendorId=0, $shipper_id=0) {

	if (!$vendorId)
	    $vendorId = 1;
	$db = JFactory::getDBO();

	$q = 'SELECT   `shipping_carrier_params` FROM #__virtuemart_shippingcarriers WHERE `virtuemart_shippingcarrier_id` = "' . $shipper_id . '" AND `virtuemart_vendor_id` = "' . $vendorId . '" AND `published`="1" ';
	$db->setQuery($q);
	return $db->loadResult();
    }

    /**
     * getOrderWeight
     * Get the total weight for the order, based on which the proper shipping rate
     * can be selected.
     * @param object VirtueMartCart $cart Cart object
     * @param $to_weight_unit : weight unit
     * @return float Total weight for the order
     * @author Oscar van Eijk
     */
    protected function getOrderWeight(VirtueMartCart $cart, $to_weight_unit) {
	$weight = 0;
	foreach ($cart->products as $prod) {
	    $weight += ( ShopFunctions::convertWeigthUnit($prod->product_weight, $prod->product_weight_unit, $to_weight_unit) * $prod->quantity);
	}
	return $weight;
    }
 /**
     *  @author Valerie Isaksen
     * @param int $shipper_id The shipper method ID

     * @return shipper table
     */
    final protected function getShipper ( $shipper_id) {
	$db = JFactory::getDBO();

	$q = 'SELECT * FROM #__virtuemart_shippingcarriers
        		WHERE `virtuemart_shippingcarrier_id`="' . $shipper_id . '" AND `shipping_carrier_element` = "'.$this->_pelement.'"';

	$db->setQuery($q);
	return  $db->loadObject();
    }
    /**
     * This method checks if the selected payment method matches the current plugin
     * @param string $_pelement Element name, taken from the plugin filename
     * @param int $_pid The payment method ID
     * @author Oscar van Eijk
     * @author Max Milbers
     * @return True if the calling plugin has the given payment ID
     */

    protected function getShippers($vendorId) {
	if (!class_exists('VirtueMartModelUser'))
	    require(JPATH_VM_ADMINISTRATOR . DS . 'models' . DS . 'user.php');

	$usermodel = new VirtueMartModelUser();
	$user = $usermodel->getUser();
	$user->shopper_groups = (array) $user->shopper_groups;

	if (VmConfig::isJ15()) {
	    $extPlgTable = '#__plugins';
	    $extField1 = 'id';
	    $extField2 = 'element';
	} else {
	    $extPlgTable = '#__extensions';
	    $extField1 = 'extension_id';
	    $extField2 = 'element';
	}

	$db = JFactory::getDBO();

	$select = 'SELECT v.*,j.*,s.virtuemart_shoppergroup_id ';

	$q = $select . ' FROM   #__virtuemart_shippingcarriers AS v ';

	$q.= 'LEFT JOIN ' . $extPlgTable . ' as j ON j.`' . $extField1 . '` =  v.`shipping_carrier_jplugin_id` ';

	$q.= 'LEFT OUTER JOIN #__virtuemart_shippingcarrier_shoppergroups AS s ON v.`virtuemart_shippingcarrier_id` = s.`virtuemart_shippingcarrier_id` ';

	$q.= ' WHERE v.`published` = "1"  AND j.`' . $extField2 . '` = "' . $this->_pelement . '"
					AND  (v.`virtuemart_vendor_id` = "' . $vendorId . '" OR   v.`virtuemart_vendor_id` = "0")
					AND  (';

	foreach ($user->shopper_groups as $groups) {
	    $q .= 's.`virtuemart_shoppergroup_id`= "' . (int) $groups . '" OR';
	}
	$q .= ' ISNULL(s.`virtuemart_shoppergroup_id`) ) ORDER BY v.`ordering`';

	$db->setQuery($q);
	if (!$results = $db->loadObjectList()) {
	    // 			vmdebug(JText::_('COM_VIRTUEMART_CART_NO_CARRIER'),$db->getQuery());
	    return false;
	}
	$this->shippers = $results;
	return true;
    }

    /**
     * validateVendor
     * Check if this shipper has carriers for the current vendor.
     * @author Oscar van Eijk
     * @param integer $_vendorId The vendor ID taken from the cart.
     * @return True when a shipper_id was found for this vendor, false otherwise
     */
    protected function validateVendor($_vendorId) {

	if (!$_vendorId) {
	    $_vendorId = 1;
	}

	$_db = JFactory::getDBO();

	if (VmConfig::isJ15()) {
	    $_q = 'SELECT 1 '
		    . 'FROM   #__virtuemart_shippingcarriers v '
		    . ',      #__plugins             j '
		    . 'WHERE j.`element` = "' . $this->_pelement . '" '
		    . 'AND   v.`shipping_carrier_jplugin_id` = j.`id` '
		    . 'AND   v.`virtuemart_vendor_id` = "' . $_vendorId . '" '
		    . 'AND   v.`published` = 1 '
	    ;
	} else {
	    $_q = 'SELECT 1 '
		    . 'FROM   #__virtuemart_shippingcarriers AS v '
		    . ',      #__extensions   AS     j '
		    . 'WHERE j.`folder` = "vmshipper" '
		    . 'AND j.`element` = "' . $this->_pelement . '" '
		    . 'AND   v.`shipping_carrier_jplugin_id` = j.`extension_id` '
		    . 'AND   v.`virtuemart_vendor_id` = "' . $_vendorId . '" '
		    . 'AND   v.`published` = 1 '
	    ;
	}

	$_db->setQuery($_q);
	$_r = $_db->loadAssoc();

	if ($_r) {
	    return true;
	} else {
	    return false;
	}
    }

    /**
     * Method to create te plugin specific table; must be reimplemented.
     * @example
     * 	$_scheme = DbScheme::get_instance();
     * 	$_scheme->create_scheme('#__vm_order_shipper_'.$this->_pelement);
     * 	$_schemeCols = array(
     * 		 'id' => array (
     * 				 'type' => 'int'
     * 				,'length' => 11
     * 				,'auto_inc' => true
     * 				,'null' => false
     * 		)
     * 		,'virtuemart_order_id' => array (
     * 				 'type' => 'int'
     * 				,'length' => 11
     * 				,'null' => false
     * 		)
     * 		,    'order_number' => array (
     * 				 'type' => 'varchar'
     * 				,'length' => 32
     * 				,'null' => false
     * 		)
     * 		,'shipper_id' => array (
     * 				 'type' => 'text'
     * 				,'null' => false
     * 		)
     * 	);
     * 	$_schemeIdx = array(
     * 		 'idx_order_s' => array(
     * 				 'columns' => array ('virtuemart_order_id')
     * 				,'primary' => false
     * 				,'unique' => false
     * 				,'type' => null
     * 		)
     * 	);
     * 	$_scheme->define_scheme($_schemeCols);
     * 	$_scheme->define_index($_schemeIdx);
     * 	if (!$_scheme->scheme()) {
     * 		JError::raiseWarning(500, $_scheme->get_db_error());
     * 	}
     * 	$_scheme->reset();
     * @author Oscar van Eijk
     */
    abstract protected function _createTable();

    /**
     * This event is fired during the checkout process. It allows the shopper to select
     * one of the available shippers.
     * It should display a radio button (name: shipper_id) to select the shipper. In the description,
     * the shipping cost can also be displayed, based on the total order weight and the shipto
     * country (this wil be calculated again during order confirmation)
     *
     * @param object $cart the cart object
     * @param integer $selectedShipper ID of the shipper currently selected
     * @return HTML array. Each row contains the code to display in the form
     * @author Oscar van Eijk
     */
    public function plgVmOnSelectShipper(VirtueMartCart $cart, $selectedShipper = 0) {

	if ($this->getShippers($cart->vendorId) === false) {
	    return false;
	}
	$html = array();
	foreach ($this->shippers as $shipper) {
	    //vmdebug('plgVmOnSelectShipper', $shipper->shipping_carrier_params);
	    if ($this->checkShippingConditions($cart, $shipper)) {
		$params = new JParameter($shipper->shipping_carrier_params);
		$salesPrice = $this->calculateSalesPriceShipping($this->getShippingValue($params, $cart->pricesUnformatted), $this->getShippingTaxId($params));
		$shipper->shipping_carrier_name = $this->getShippingName($shipper);

		$html[] = $this->getShippingHtml($shipper, $selectedShipper, $salesPrice);
	    }
	}
	return $html;
    }

    /**
     * plgVmOnShipperSelected
     * This event is fired after the shipping method has been selected. It can be used to store
     * additional shipper info in the cart.
     *
     * @param object $cart Cart object
     * @param integer $selectedShipper ID of the shipper selected
     * @return boolean True on succes, false on failures, null when this plugin was not selected.
     * On errors, JError::raiseWarning (or JError::raiseError) must be used to set a message.
     * @author Oscar van Eijk
     */
    public function plgVmOnShipperSelected(VirtueMartCart $cart, $selectedShipper = 0) {

	if (!$this->selectedThisShipper($this->_pelement, $selectedShipper)) {
	    return null; // Another shipper was selected, do nothing
	}
	// should return $shipping rates for this
	$cart->setShippingRate($this->selectShippingRate($cart));
	return true;
    }

    /**
     * plgVmOnCheckoutCheckShipperData
     * This event is fired after the payment has been processed; it selects the actual shipping rate
     * based on the shipto (country, zip) and/or order weight, and optionally writes extra info
     * to the database (in which case this method must be reimplemented).
     * Reimplementation is not required, but when done, the following check MUST be made:
     * 	if (!$this->selectedThisShipper($this->_pelement, $_cart->shipper_id)) {
     * 		return null;
     * 	}
     *
     * Returing parent::plgVmOnCheckoutCheckShipperData($_cart) is valid but will produce extra overhead!
     *
     * @param object $cart Cart object
     * @return integer The shipping rate ID
     * @author Oscar van Eijk
     */
    public function plgVmOnCheckoutCheckShipperData(VirtueMartCart $cart) {
	return $this->selectShippingRate($cart);
    }

    /**
     * This method is fired when showing the order details in the backend.
     * It displays the shipper-specific data.
     * NOTE, this plugin should NOT be used to display form fields, since it's called outside
     * a form! Use plgVmOnUpdateOrderBE() instead!
     *
     * @param integer $_orderId The order ID
     * @param integer $_vendorId Vendor ID
     * @param object $_shipInfo Object with the properties 'carrier' and 'name'
     * @return mixed Null for shippers that aren't active, text (HTML) otherwise
     * @author Oscar van Eijk
     */
    public function plgVmOnShowOrderShipperBE($_orderId, $_vendorId, $_shipInfo) {
	if (!($this->selectedThisShipper($this->_pelement, $this->getShipperIDForOrder($_orderId)))) {
	    return null;
	}
	/*
	  if (!class_exists('CurrencyDisplay')

	  )require(JPATH_VM_ADMINISTRATOR . DS . 'helpers' . DS . 'currencydisplay.php');
	  $_currency = CurrencyDisplay::getInstance();  //Todo, set currency of shopper or user?
	  //		$_currency = VirtueMartModelVendor::getCurrencyDisplay($_vendorId);
	  $_html = '<table class="admintable">' . "\n"
	  . '	<thead>' . "\n"
	  . '		<tr>' . "\n"
	  . '			<td class="key" style="text-align: center;" colspan="2">' . JText::_('COM_VIRTUEMART_ORDER_PRINT_SHIPPING_LBL') . '</td>' . "\n"
	  . '		</tr>' . "\n"
	  . '	</thead>' . "\n"
	  . '	<tr>' . "\n"
	  . '		<td class="key">' . JText::_('COM_VIRTUEMART_ORDER_PRINT_SHIPPING_CARRIER_LBL') . ': </td>' . "\n"
	  . '		<td align="left">' . $_shipInfo->carrier . '</td>' . "\n"
	  . '	</tr>' . "\n"
	  . '	<tr>' . "\n"
	  . '		<td class="key">' . JText::_('COM_VIRTUEMART_ORDER_PRINT_SHIPPING_MODE_LBL') . ': </td>' . "\n"
	  . '		<td>' . $_shipInfo->name . '</td>' . "\n"
	  . '	</tr>' . "\n"
	  . '	<tr>' . "\n"
	  . '		<td class="key">' . JText::_('COM_VIRTUEMART_ORDER_PRINT_SHIPPING_PRICE_LBL') . ': </td>' . "\n"
	  . '		<td align="left">' . $_currency->priceDisplay($this->getShippingRate($this->getShippingRateIDForOrder($_orderId))) . '</td>' . "\n"
	  . '	</tr>' . "\n"
	  . '</table>' . "\n"
	  ;
	 *
	 *
	 */
	return $_html;
    }

    /**
     * plgVmOnEditOrderLineShipperBE
     * This method is fired when editing the order line details in the backend.
     * It can be used to add line specific package codes
     *
     * @param integer $_orderId The order ID
     * @param integer $_lineId
     * @return mixed Null for shippers that aren't active, text (HTML) otherwise
     * @author Oscar van Eijk
     */
    public function plgVmOnEditOrderLineShipperBE($_orderId, $_lineId) {
	return null;
    }

    /**
     * Save updated order data to the shipper specific table
     *
     * @param array $_formData Form data
     * @return mixed, True on success, false on failures (the rest of the save-process will be
     * skipped!), or null when this shipper is not actived.
     * @author Oscar van Eijk
     */
    public function plgVmOnUpdateOrderShipper($_formData) {
	return null;
    }

    /**
     * Save updated orderline data to the shipper specific table
     *
     * @param array $_formData Form data
     * @return mixed, True on success, false on failures (the rest of the save-process will be
     * skipped!), or null when this shipper is not actived.
     * @author Oscar van Eijk
     */
    public function plgVmOnUpdateOrderLineShipper($_formData) {
	return null;
    }

    /**
     * This method is fired when showing the order details in the frontend.
     * It displays the shipper-specific data.
     *
     * @param integer $order_id The order ID
     * @return mixed Null for shippers that aren't active, text (HTML) otherwise
     * @author Oscar van Eijk
     */
    public function plgVmOnShowOrderShipperFE($order_id) {
	return;
    }

    /**
     * This method is fired when showing the order details in the frontend, for every orderline.
     * It can be used to display line specific package codes, e.g. with a link to external tracking and
     * tracing systems
     *
     * @param integer $_orderId The order ID
     * @param integer $_lineId
     * @return mixed Null for shippers that aren't active, text (HTML) otherwise
     * @author Oscar van Eijk
     */
    public function plgVmOnShowOrderLineShipperFE($_orderId, $_lineId) {
	return null;
    }

    /**
     * Get the shipping rate ID for a given order number
     * @access protected
     * @author Oscar van Eijk
     * @param int $_id The order ID
     * @return int The shipping rate ID, or -1 when not found
     */
    protected function getShippingRateIDForOrder($_id) {
	$_db = JFactory::getDBO();
	$_q = 'SELECT `ship_method_id` '
		. 'FROM #__virtuemart_orders '
		. "WHERE virtuemart_order_id = $_id";
	$_db->setQuery($_q);
	if (!($_r = $_db->loadAssoc())) {
	    return -1;
	}
	return $_r['ship_method_id'];
    }

    /**
     * Display stored payment data for an order
     * @see components/com_virtuemart/helpers/vmPaymentPlugin::plgVmOnShowOrderPaymentBE()
     */
    function plgVmOnShowOrderPrintShipper($order_number, $shipper_method_id) {
	if (! ($order_shipper_name= $this->getOrderShipperName($order_number, $shipper_method_id)) ) {
	    return null;
	}

	JFactory::getLanguage()->load('com_virtuemart');
	$html = '<table class="admintable">' . "\n"
		. '	<thead>' . "\n"
		. '		<tr>' . "\n"
		. '			<td class="key" style="text-align: center;" colspan="2">' . JText::_('COM_VIRTUEMART_ORDER_PRINT_SHIPPING_CARRIER_LBL') . '</td>' . "\n"
		. '		</tr>' . "\n"
		. '	</thead>' . "\n"
		. '	<tr>' . "\n"
		. '		<td class="key">' . JText::_('COM_VIRTUEMART_ORDER_PRINT_' . $this->_vmplugin . '_LBL')  . ': </td>' . "\n"
		. '		<td align="left">' . $order_shipper_name . '</td>' . "\n"
		. '	</tr>' . "\n";

	$html .= '</table>' . "\n";
	return $html;
    }
    /**
     * Check the order total to see if this order is valid for free shipping.
     * @access protected
     * @final
     * @return boolean; true when shipping is free
     * @author Oscar van Eijk
     * @deprecated
     */
    final protected function freeShipping() {
	if (!class_exists('VirtueMartCart'))
	    require(JPATH_VM_SITE . DS . 'helpers' . DS . 'cart.php');
	$_cart = VirtueMartCart::getCart();
	if (!class_exists('VirtueMartModelVendor'))
	    require(JPATH_VM_ADMINISTRATOR . DS . 'models' . DS . 'vendor.php');
	$_vendor = new VirtueMartModelVendor();
	$_vendor->setId($_cart->vendorId);
	$_store = $_vendor->getVendor();

	if ($_store->vendor_freeshipping > 0) {
	    $_prices = $_cart->getCartPrices();
	    if ($_prices['salesPrice'] > $_store->vendor_freeshipping) {
		return true;
	    }
	}
	return false;
    }

    /**
     * Get the shipper ID for a given order number
     * @access protected
     * @author Oscar van Eijk
     * @param int $_id The order ID
     * @return int The shipper ID, or -1 when not found
     */
    protected function getShipperIDForOrder($order_id) {
	/*
	  $_db = &JFactory::getDBO();
	  $_q = 'SELECT s.`shipping_rate_carrier_id` AS shipper_id '
	  . 'FROM #__virtuemart_orders        AS o '

	  . "WHERE o.`virtuemart_order_id` = $_id "
	  . 'AND   o.`ship_method_id` = s.`virtuemart_shippingrate_id`';
	  $_db->setQuery($_q);
	  if (!($_r = $_db->loadAssoc())) {
	  return -1;
	  }
	  return $_r['shipper_id'];
	 * */
    }

    /**
     * Select the shipping rate ID, based on the selected shipper in combination with the
     * shipto address (country and zipcode)  .
     * @param object $_cart Cart object
     * @param int $_shipperID Shipper ID, by default taken from the cart
     * @return int Shipping rate ID, -1 when no match is found. Only 1 selected ID will be returned;
     * if more ID's match, the cheapest will be selected. ????
     */
    protected function selectShippingRate(VirtueMartCart $_cart, $_shipperId = 0) {

    }

    /**
     * This method checks if the selected shipper matches the current plugin
     * @param string $_pelement Element name, taken from the plugin filename
     * @param int $_sid The shipper ID
     * @author Oscar van Eijk
     * @return True if the calling plugin has the given payment ID
     *
     */
    final protected function selectedThisShipper($pelement, $sid) {
	$db = JFactory::getDBO();

	if (VmConfig::isJ15()) {
	    $q = 'SELECT COUNT(*) AS c '
		    . 'FROM #__virtuemart_shippingcarriers AS vm '
		    . ',    #__plugins AS j '
		    . "WHERE vm.virtuemart_shippingcarrier_id = '$sid' "
		    . 'AND   vm.shipping_carrier_jplugin_id = j.id '
		    . "AND   j.element = '$pelement'";
	} else {
	    $q = 'SELECT COUNT(*) AS c '
		    . 'FROM #__virtuemart_shippingcarriers AS vm '
		    . ',      #__extensions    AS      j '
		    . 'WHERE j.`folder` = "vmshipper" '
		    . "AND vm.virtuemart_shippingcarrier_id = '$sid' "
		    . 'AND   vm.shipping_carrier_jplugin_id = j.extension_id '
		    . "AND   j.element = '$pelement'";
	}


	$db->setQuery($q);
	return $db->loadResult(); // TODO Error check
    }

    /*
     * ShippingSelected
     * @param int $virtuemart_shippingcarrier_id
     * return $shipper if found
     * return null otherwise
     *
     * @author Valérie Isaksen
     */

    function ShippingSelected($virtuemart_shippingcarrier_id) {
	foreach ($this->shippers as $shipper) {
	    if ($shipper->virtuemart_shippingcarrier_id == $virtuemart_shippingcarrier_id) {
		return $shipper;
	    }
	}
	return null;
    }

    /**
     * getThisShipperNameById
     * Get the name of the shipper
     * @param int $id The Shipper ID
     * @author Valérie Isaksen
     * @return string Shipper name
     */
    final protected function getThisShipperName($virtuemart_shippingcarrier_id) {
	$db = JFactory::getDBO();
	$q = 'SELECT `shipping_carrier_name` '
		. 'FROM #__virtuemart_shippingcarriers '
		. "WHERE virtuemart_shippingcarrier_id ='$virtuemart_shippingcarrier_id' ";
	$db->setQuery($q);
	return $db->loadResult(); // TODO Error check
    }



    /*
     * calculateSalesPriceShipping
     * @param $shipping_value
     * @param $tax_id: tax id
     * @return $salesPriceShipping
     */

    protected function calculateSalesPriceShipping($shipping_value, $tax_id) {

	if (!class_exists('calculationHelper'))
	    require(JPATH_VM_ADMINISTRATOR . DS . 'helpers' . DS . 'calculationh.php');
	if (!class_exists('CurrencyDisplay'))
	    require(JPATH_VM_ADMINISTRATOR . DS . 'helpers' . DS . 'currencydisplay.php');

	if (!class_exists('VirtueMartModelVendor'))
	    require(JPATH_VM_ADMINISTRATOR . DS . 'models' . DS . 'vendor.php');
	$vendor_id = 1;
	$vendor_currency = VirtueMartModelVendor::getVendorCurrency($vendor_id);


	$db = JFactory::getDBO();
	$calculator = calculationHelper::getInstance();
	$currency = CurrencyDisplay::getInstance();

	$shipping_value = $currency->convertCurrencyTo($vendor_currency->virtuemart_currency_id, $shipping_value);

	$taxrules = array();
	if (!empty($tax_id)) {
	    $q = 'SELECT * FROM #__virtuemart_calcs WHERE `virtuemart_calc_id`="' . $tax_id . '" ';
	    $db->setQuery($q);
	    $taxrules = $db->loadAssocList();
	}

	if (count($taxrules) > 0) {
	    $salesPriceShipping = $calculator->roundDisplay($calculator->executeCalculation($taxrules, $shipping_value));
	} else {
	    $salesPriceShipping = $shipping_value;
	}

	return $salesPriceShipping;
    }

    /*
     * plgVmOnShipperSelectedCalculatePrice
     * Calculate the price (value, tax_id) of the selected Shipper
     * It is called by the calculator
     * This function does NOT to be reimplemented. If not reimplemented, then the default values from this function are taken.
     * @author Valerie Isaksen
     * @cart: VirtueMartCart the current cart
     * @cart_prices: array the new cart prices
     * @shippingTable ShippingCarriers: shipping carrier rate description
     * @return null if the shipper was not selected, false if the shiiping rate is not valid any more, true otherwise
     *
     *
     */

    public function plgVmOnShipperSelectedCalculatePrice(VirtueMartCart $cart, array $cart_prices, $shipping_name) {

	if (!$this->selectedThisShipper($this->_pelement, $cart->virtuemart_shippingcarrier_id)) {
	    return null; // Another shipper was selected, do nothing
	}

	$shipper = $this->getthisShipperData($cart->virtuemart_shippingcarrier_id);
	if (!$shipper) {
	    return null;
	}

	$shipping_name = '';
	$cart_prices['shipping_tax_id'] = 0;
	$cart_prices['shipping_value'] = 0;

	if (!$this->checkShippingConditions($cart, $shipper)) {
	    return false;
	}
	$params = new JParameter($shipper->shipping_carrier_params);
	$shipping_name = $this->getShippingName($shipper);
	$shipping_value = $this->getShippingValue($params, $cart_prices);
	$shipping_tax_id = $this->getShippingTaxId($params);

	$this->setCartPrices($cart_prices, $shipping_value, $shipping_tax_id);

	return true;
    }

    /*
     * plgVmOnCheckAutomaticSelectedShipping
     * Checks how many shipping rates are available. If only one, the user will not have the choice. Enter edit_shipping page
     * @author Valerie Isaksen
     * @param VirtueMartCart cart: the cart object
     * @return null if no shipper was found, 0 if more then one shipping rate was found,  virtuemart_shipping if only one shipping rate is found
     *
     *
     */

    function plgVmOnCheckAutomaticSelectedShipping(VirtueMartCart $cart) {

	$nbShipper = 0;
	$virtuemart_shippingcarrier_id = 0;
	$nbShipper = $this->getSelectableShipping($cart, $virtuemart_shippingcarrier_id);
	if ($nbShipper == null)
	    return null;
	return ($nbShipper == 1) ? $virtuemart_shippingcarrier_id : 0;
    }

    /*
     * CheckShippingIsValid
     * @author Valérie Isaksen
     * @deprecated
     */

    function CheckShippingIsValid(VirtueMartCart $cart) {
	if (!$this->selectedThisShipper($this->_pelement, $cart->virtuemart_shippingcarrier_id)) {
	    return null; // Another shipper was selected, do nothing
	}
	$shipper = $this->getThisShipperData($cart->virtuemart_shippingcarrier_id);
	return $this->checkShippingConditions($cart, $shipper);
    }

    function getParamShippings(VirtueMartCart $cart, &$nbShipper, &$virtuemart_shippingcarrier_id, $selectedShipper=0) {
	return null;
    }

    /*
     * getSelectableShipping
     * This method returns the number of shipping methods valid
     * @param VirtueMartCart cart: the cart object
     * @param $virtuemart_shippingcarrier_id
     *
     */

    function getSelectableShipping(VirtueMartCart $cart, &$virtuemart_shippingcarrier_id) {
	$nbShipper = 0;
	if ($this->getShippers($cart->vendorId) === false) {
	    return false;
	}

	foreach ($this->shippers as $shipper) {
	    if ($this->checkShippingConditions($cart, $shipper)) {
		$nbShipper++;
		$virtuemart_shippingcarrier_id = $shipper->virtuemart_shippingcarrier_id;
	    }
	}
	return $nbShipper;
    }

    /*
     * displayTaxRule
     * @param int $tax_id
     * @return string $html:
     */

    function displayTaxRule($tax_id) {
	$html = '';
	$db = JFactory::getDBO();
	if (!empty($tax_id)) {
	    $q = 'SELECT * FROM #__virtuemart_calcs WHERE `virtuemart_calc_id`="' . $tax_id . '" ';
	    $db->setQuery($q);
	    $taxrule = $db->loadObject();

	    $html = $taxrule->calc_name . '(' . $taxrule->calc_kind . ':' . $taxrule->calc_value_mathop . $taxrule->calc_value . ')';
	}
	return $html;
    }

    /**
     * Get Shipper Data for a go given Shipper ID
     * @author Valérie Isaksen
     * @param int $virtuemart_shippingcarrier_id The Shipper ID
     * @return  Shipper data
     */
    final protected function getThisShipperData($virtuemart_shippingcarrier_id) {
	$db = JFactory::getDBO();
	$q = 'SELECT * '
		. 'FROM #__virtuemart_shippingcarriers '
		. "WHERE `virtuemart_shippingcarrier_id` ='" . $virtuemart_shippingcarrier_id . "' ";
	$db->setQuery($q);
	$result = $db->loadObject();
	return $result;
    }

    /*
     * getShippingHtml
     */

    protected function getShippingHtml($shipper, $selectedShipper, $shippingSalesPrice) {
	if ($selectedShipper == $shipper->virtuemart_shippingcarrier_id) {
	    $checked = 'checked';
	} else {
	    $checked = '';
	}

	if (!class_exists('CurrencyDisplay'))
	    require(JPATH_VM_ADMINISTRATOR . DS . 'helpers' . DS . 'currencydisplay.php');
	$currency = CurrencyDisplay::getInstance();

	$shippingCostDisplay = $currency->priceDisplay($shippingSalesPrice);
	$html = '<input type="radio" name="shipper_id" id="shipper_id_' . $shipper->virtuemart_shippingcarrier_id . '" value="' . $shipper->virtuemart_shippingcarrier_id . '" ' . $checked . '>'
		. '<label for="shipper_id_' . $shipper->virtuemart_shippingcarrier_id . '">' . $shipper->shipping_carrier_name . " (" . $shippingCostDisplay . ")</label>\n";
	return $html;
    }

    /*
     * setCartPrices
     *
     * @author Valérie Isaksen
     */

    function setCartPrices(&$cart_prices, $shipping_value, $shipping_tax_id) {
	if (!isset($shipping_value))
	    $shipping->shipping_value = '';
	$cart_prices['shippingValue'] = $shipping_value;


	$taxrules = array();
	if (!empty($shipping_tax_id)) {
	    $db = JFactory::getDBO();
	    $q = 'SELECT * FROM #__virtuemart_calcs WHERE `virtuemart_calc_id`="' . $shipping_tax_id . '" ';
	    $db->setQuery($q);
	    $taxrules = $db->loadAssocList();
	}
	if (!class_exists('calculationHelper'))
	    require(JPATH_VM_ADMINISTRATOR . DS . 'helpers' . DS . 'calculationh.php');
	$calculator = calculationHelper::getInstance();
	if (count($taxrules) > 0) {
	    $cart_prices['salesPriceShipping'] = $calculator->roundDisplay($calculator->executeCalculation($taxrules, $cart_prices['shippingValue']));
	    $cart_prices['shippingTax'] = $calculator->roundDisplay($cart_prices['salesPriceShipping']) - $cart_prices['shippingValue'];
	} else {
	    $cart_prices['salesPriceShipping'] = $cart_prices['shippingValue'];
	    $cart_prices['shippingTax'] = 0;
	}
    }

    function getShippingValue($params, $cart_prices) {
	return 0;
    }

    function getShippingTaxId($params) {
	return 0;
    }

    /**
     * Get the name of the shipper method
     *
     * @author Valerie Isaksen
     * @param stdClass $shipping
     * @return string Shipping method name
     */
    function getShippingName($shipping) {

	$return = '';
	$params = new JParameter($shipping->shipping_carrier_params);
	$shipperLogo = $params->get('shipper_logos');
	$shipperDescription = $params->get('shipper_description', '');
	if (!empty($shipperLogo)) {
	    $return = $this->displayLogos( $shipperLogo  ) . ' ';
	}
	if (!empty($shipperDescription)) {
	    $shipperDescription = '<span class="vmshipper_description">' . $shipperDescription . '</span>';
	}

	return $return . '<span class="vmshipper_name">' . $shipping->shipping_carrier_name . '</span>' . $shipperDescription;
    }

    /**
   *
     */


    function getOrderShipperName($order_number, $shipper_method_id) {


	$db = JFactory::getDBO();
	$q = 'SELECT * FROM `' . $this->_tablename . '` '
		. 'WHERE `order_number` = "' . $order_number . '"  AND `shipper_id` =' . $shipper_method_id;
	$db->setQuery($q);
	if (!($order_shipper = $db->loadObject())) {
	    return null;
	}
	JFactory::getLanguage()->load('com_virtuemart');
	 return $order_shipper->shipper_name  ;

    }

}
