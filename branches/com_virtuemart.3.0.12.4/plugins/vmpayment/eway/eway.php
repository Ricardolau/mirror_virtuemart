<?php

defined('_JEXEC') or die('Direct Access to ' . basename(__FILE__) . 'is not allowed.');

/**
 * @version $Id$
 * @package    VirtueMart
 * @subpackage Plugins  - Eway
 * @package VirtueMart
 * @subpackage Payment
 * @author Valérie Isaksen
 * @link ${PHING.VM.MAINTAINERURL}
 * @copyright Copyright (c) 2004 - ${PHING.VM.RELDATE} VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id$
 *
 */
if (!class_exists('vmPSPlugin')) {
	require(VMPATH_PLUGINLIBS . DS . 'vmpsplugin.php');
}


/**
 * Class plgVmpaymentEway
 */
class plgVmpaymentEway extends vmPSPlugin {
	// TODO
	/**
	 *
	 */
	const PARTNER_ID = '409c396dadac4df59c8bff82902e9094';

	/**
	 * plgVmpaymentEway constructor.
	 * @param object $subject
	 * @param array $config
	 */
	function __construct(& $subject, $config) {

		//if (self::$_this)
		//   return self::$_this;
		parent::__construct($subject, $config);

		$this->_loggable = TRUE;
		$this->tableFields = array_keys($this->getTableSQLFields());
		$this->_tablepkey = 'id';
		$this->_tableId = 'id';
		$varsToPush = $this->getVarsToPush();

		$this->setConfigParameterable($this->_configTableFieldName, $varsToPush);
		$this->setConvertable(array('min_amount', 'max_amount', 'cost_per_transaction', 'cost_min_transaction'));
		$this->setConvertDecimal(array('min_amount', 'max_amount', 'cost_per_transaction', 'cost_min_transaction', 'cost_percent_total'));

		if (method_exists($this, 'setCryptedFields')) {
			$this->setCryptedFields(array('APIPassword'));
		}

	}

	/**
	 * @return string
	 */
	protected function getVmPluginCreateTableSQL() {

		return $this->createTableSQL('Payment eway Table');
	}


	/**
	 * @return array
	 */
	function getTableSQLFields() {
		$SQLfields = array(
			'id' => 'int(1) UNSIGNED NOT NULL AUTO_INCREMENT',
			'virtuemart_order_id' => 'int(1) UNSIGNED',
			'order_number' => ' char(64)',
			'virtuemart_paymentmethod_id' => 'mediumint(1) UNSIGNED',
			'payment_name' => 'varchar(5000)',
			'payment_order_total' => 'decimal(15,5) NOT NULL DEFAULT \'0.00000\' ',
			'payment_currency' => 'char(3) ',
			'cost_per_transaction' => 'decimal(10,2)',
			'cost_percent_total' => 'char(10)',
			'tax_id' => 'smallint(1)',
			'TransactionID' => 'int(1)',
			'ResponseMessage' => ' text DEFAULT NULL',
			'eway_response_json' => ' text DEFAULT NULL',
			'eway_request_type' => ' char(64)',
			'eway_response_raw' => ' text DEFAULT NULL',
			'eway_request_raw' => ' text DEFAULT NULL'
		);
		return $SQLfields;
	}


	/**
	 * @param $cart
	 * @param $order
	 * @return bool|null
	 */
	function plgVmConfirmedOrder($cart, $order) {

		if (!($method = $this->getVmPluginMethod($order['details']['BT']->virtuemart_paymentmethod_id))) {
			return NULL; // Another method was selected, do nothing
		}
		if (!$this->selectedThisElement($method->payment_element)) {
			return FALSE;
		}

		require_once VMPATH_PLUGINS . '/vmpayment/eway/library/include_eway.php';


		$maskedCard = self::getSelectedMaskedCardFromSession();
		if ($maskedCard) {
			$tokenCustomerIDs = $this->getTokenCustomerIDs(JFactory::getUser()->id);
			foreach ($tokenCustomerIDs as $key => $tokenCustomerID) {
				if ($tokenCustomerID->tokencustomerid) {
					$tokenCustomerIDSelected = $tokenCustomerID->tokencustomerid;
				}
			}
		}
		$tokenCustomerIDSelected = "919446411734";
		$customer = $this->getCustomer($order, $tokenCustomerIDSelected);
		$shippingAddress = $this->getShippingAddress($order);
		$items = $this->getOrderItems($order);

		$this->getPaymentCurrency($method);
		$currency_code_3 = shopFunctions::getCurrencyByID($method->payment_currency, 'currency_code_3');
		$totalInPaymentCurrency = vmPSPlugin::getAmountInCurrency($order['details']['BT']->order_total, $method->payment_currency);
		$cd = CurrencyDisplay::getInstance($cart->pricesCurrency);

		$payment = array();
		$payment['TotalAmount'] = $totalInPaymentCurrency['value'] * 100;
		$payment['InvoiceNumber'] = $order['details']['BT']->order_number;

		$invoiceDescription = $items[0]->order_item_name;
		$invoiceDescription = substr($invoiceDescription, 0, -2);
		if (strlen($invoiceDescription) > 64) {
			$invoiceDescription = substr($invoiceDescription, 0, 61) . '...';
		}
		$payment['InvoiceDescription'] = $invoiceDescription;
		$payment['InvoiceReference'] = '';
		$payment['CurrencyCode'] = $currency_code_3;

		$options = array();

		$transaction = array();
		$transaction ["Customer"] = $customer;
		$transaction ["ShippingAddress"] = $shippingAddress;
		if ($method->payment_type != 'PayPal') {
			$transaction ["Items"] = $items;
		}
		$transaction ["Options"] = $options;
		$transaction ["Payment"] = $payment;
		$transaction ["CustomerIP"] = self::getClientIP();// O: The customer's IP address. When this field is present along with the Customer Country field, any transaction will be processed using Beagle Fraud Alerts
		$transaction ["PartnerID"] = self::PARTNER_ID;
		//$transaction ["SaveCustomer"] =true;

		// NOTE : $transaction ["Method"] is done by the library

		$transaction ["TransactionType"] = Eway\Rapid\Enum\TransactionType::PURCHASE; // Values: Purchase, MOTO, Recurring
		// Rapid SDK Libraries Only Set to true to capture funds immediately (default), set to false to perform an authorisation and only hold funds.
		if ($method->Pre_Auth == 'Capture') {
			$transaction ["Capture"] = true;
		} else {
			$transaction ["Capture"] = false;
		}
		if ($method->save_card_enabled) {
			$transaction ["SaveCustomer"] = true;
		}

		$transaction ["RedirectUrl"] = self::getRedirectUrl($order['details']['BT']->virtuemart_paymentmethod_id); // The web address the customer is redirected to with the result of the action.

		$apiEndpoint = self::getApiEndpoint($method);
		$client = \Eway\Rapid::createClient($method->APIKey, $method->APIPassword, $apiEndpoint);
		$response = $client->createTransaction(\Eway\Rapid\Enum\ApiMethod::TRANSPARENT_REDIRECT, $transaction);

		if (!($response instanceof \Eway\Rapid\Model\Response\AbstractResponse)) {
			self::redirectToCart();
		}

		if ($response->getErrors()) {
			foreach ($response->getErrors() as $error) {
				self::ewayError($method, \Eway\Rapid::getMessage($error));
			}
			self::redirectToCart();
			return;
		}

		// Prepare data that should be stored in the database
		// VM values
		$dbValues['order_number'] = $order['details']['BT']->order_number;
		$dbValues['virtuemart_order_id'] = $order['details']['BT']->virtuemart_order_id;
		$dbValues['payment_name'] = $this->renderPluginName($method);
		$dbValues['virtuemart_paymentmethod_id'] = $cart->virtuemart_paymentmethod_id;
		$dbValues['cost_per_transaction'] = $method->cost_per_transaction;
		$dbValues['cost_percent_total'] = $method->cost_percent_total;
		$dbValues['payment_currency'] = $method->payment_currency;
		$dbValues['email_currency'] = $this->getEmailCurrency($method);
		$dbValues['payment_order_total'] = $totalInPaymentCurrency['value'];
		$dbValues['tax_id'] = $method->tax_id;
		// Eway response Value
		$dbValues['TransactionID'] = $response->TransactionID;
		$dbValues['eway_request_type'] = (string)\Eway\Rapid\Enum\ApiMethod::TRANSPARENT_REDIRECT;

		$dbValues['eway_response_json'] = json_encode(json_decode(json_encode($response, true)));

		// Eway save raw
		$dbValues['eway_request_raw'] = print_r($transaction, true);
		$dbValues['eway_response_raw'] = print_r($response, true);
		$this->storePSPluginInternalData($dbValues);

		$prefill = false;
		if ($method->payment_type == 'Credit Card') {
			if ($method->debug and $method->sandbox) {
				$prefill = true;
			}
			if (!$tokenCustomerIDSelected) {
				$html = $this->renderByLayout('cc_payment_page', array(
					'FormActionURL' => $response->FormActionURL,
					'AccessCode' => $response->AccessCode,
					'payment_type' => $method->payment_type,
					'pageTitle' => vmText::sprintf('VMPAYMENT_EWAY_PAYMENT_PAGE_TITLE', $order['details']['BT']->order_number, $totalInPaymentCurrency['display']),
					'prefill' => $prefill,
					'order_number' => $order['details']['BT']->order_number,
					'sandbox' => $method->sandbox,
				));
			} else {
				$html = $this->renderByLayout('payment_page', array(
					'FormActionURL' => $response->FormActionURL,
					'AccessCode' => $response->AccessCode,
					'payment_type' => $method->payment_type,
					'eway_cardcvn' => '123',
				));
			}
		} else {
			$html = $this->renderByLayout('payment_page', array(
				'FormActionURL' => $response->FormActionURL,
				'AccessCode' => $response->AccessCode,
				'payment_type' => $method->payment_type,
			));
		}

		vRequest::setVar('html', $html);
		vRequest::setVar('display_title', false);
		vRequest::setVar('display_loginform', false);

	}


	/**
	 * @param $order
	 * @return mixed
	 */
	private function getCustomer($order, $TokenCustomerID) {
		$name = $order['details']['BT']->first_name;
		if (isset($order['details']['BT']->middle_name) and $order['details']['BT']->middle_name) {
			$name .= $order['details']['BT']->middle_name;
		}
		$customer['FirstName'] = $name;
		$customer['LastName'] = $order['details']['BT']->last_name;
		$customer['CompanyName'] = $order['details']['BT']->company;
		$customer['Street1'] = $order['details']['BT']->address_1;
		if (isset($order['details']['BT']->address_2)) {
			$customer['Street2'] = $order['details']['BT']->address_2;
		}
		$customer['City'] = $order['details']['BT']->city;
		$customer['State'] = isset($address->virtuemart_state_id) ? ShopFunctions::getStateByID($order['details']['BT']->virtuemart_state_id) : '';
		$customer['PostalCode'] = $order['details']['BT']->zip;
		$customer['Country'] = ShopFunctions::getCountryByID($order['details']['BT']->virtuemart_country_id, 'country_2_code');
		$customer['Email'] = $order['details']['BT']->email;
		$customer ["TokenCustomerID"] = $TokenCustomerID;
		return $customer;
	}

	/**
	 * @param $order
	 * @return mixed
	 */
	private function getShippingAddress($order) {
		$name = $order['details']['ST']->first_name;
		if (isset($order['details']['ST']->middle_name) and $order['details']['ST']->middle_name) {
			$name .= $order['details']['ST']->middle_name;
		}
		if (isset($order['details']['ST'])) {
			$shippingAddress['FirstName'] = $name;
			$shippingAddress['LastName'] = $order['details']['ST']->last_name;
			$shippingAddress['CompanyName'] = $order['details']['ST']->company;
			$shippingAddress['Street1'] = $order['details']['ST']->address_1;
			if (isset($order['details']['ST']->address_2)) {
				$shippingAddress['Street2'] = $order['details']['ST']->address_2;
			}
			$shippingAddress['City'] = $order['details']['ST']->city;
			$shippingAddress['State'] = isset($address->virtuemart_state_id) ? ShopFunctions::getStateByID($order['details']['ST']->virtuemart_state_id) : '';
			$shippingAddress['PostalCode'] = $order['details']['ST']->zip;
			$shippingAddress['Country'] = ShopFunctions::getCountryByID($order['details']['ST']->virtuemart_country_id, 'country_2_code');
			$shippingAddress['Email'] = $order['details']['ST']->email;
		}
		return $shippingAddress;
	}

	/**
	 * @param $order
	 * @return array
	 */
	private function getOrderItems($order) {
		$items = array();
		foreach ($order['items'] as $item) {
			$lineItem = array();
			$lineItem['SKU'] = $item->order_item_sku;
			$lineItem['Description'] = $item->order_item_name;
			$lineItem['Quantity'] = $item->product_quantity;
			// TODO product item price
			$lineItem['UnitCost'] = number_format($item->product_item_price, 2, '.', '') * 100;
			$lineItem['Tax'] = number_format($item->product_tax, 2, '.', '') * 100;
			// Total is calculated automatically
			$items[] = $lineItem;
		}

		return $items;
	}

	/**
	 * @param $method
	 * @param $message
	 */
	private static function ewayError($method, $message) {

		$public_msg = '';
		if ($method->debug) {
			$public_msg = $message;
		}
		vmError($message, $public_msg);
	}


	/**
	 * @param $virtuemart_paymentmethod_id
	 * @return string
	 */
	private static function getRedirectUrl($virtuemart_paymentmethod_id) {
		$redirectUrl = JURI::root() . 'index.php?option=com_virtuemart&view=pluginresponse&pm=' . $virtuemart_paymentmethod_id . '&task=pluginresponsereceived';

		return $redirectUrl;
	}

	/**
	 * @param $virtuemart_paymentmethod_id
	 * @return string
	 */
	private static function getCancelUrl($virtuemart_paymentmethod_id) {
		return self::getRedirectUrl($virtuemart_paymentmethod_id);
	}

	/**
	 * @return bool|string
	 */
	private static function getClientIP() {
		$ip = ShopFunctions::getClientIP();
		if (!$ip) {
			if ($_SERVER['REMOTE_ADDR'] == "::1") {
				$ip = "127.0.0.1";
			}
		}
		return $ip;
	}

	/**
	 * @param $virtuemart_paymentmethod_id
	 * @param $paymentCurrencyId
	 * @return bool|null
	 */
	function plgVmGetPaymentCurrency($virtuemart_paymentmethod_id, &$paymentCurrencyId) {

		if (!($method = $this->getVmPluginMethod($virtuemart_paymentmethod_id))) {
			return NULL; // Another method was selected, do nothing
		}
		if (!$this->selectedThisElement($method->payment_element)) {
			return FALSE;
		}
		$this->getPaymentCurrency($method);
		$paymentCurrencyId = $method->payment_currency;
		return TRUE;
	}


	/**
	 * @param $html
	 */
	function plgVmOnPaymentResponseReceived(&$html) {

		if (!class_exists('VirtueMartCart')) {
			require(JPATH_VM_SITE . DS . 'helpers' . DS . 'cart.php');
		}
		if (!class_exists('shopFunctionsF')) {
			require(JPATH_VM_SITE . DS . 'helpers' . DS . 'shopfunctionsf.php');
		}
		if (!class_exists('VirtueMartModelOrders')) {
			require(JPATH_VM_ADMINISTRATOR . DS . 'models' . DS . 'orders.php');
		}

		// the payment itself should send the parameter needed.
		$virtuemart_paymentmethod_id = vRequest::getInt('pm', 0);
		if (!$virtuemart_paymentmethod_id) {
			return;
		}
		if (!($method = $this->getVmPluginMethod($virtuemart_paymentmethod_id))) {
			return NULL; // Another method was selected, do nothing
		}
		if (!$this->selectedThisElement($method->payment_element)) {
			return FALSE;
		}

		$AccessCode = vRequest::get('AccessCode');

		if (!isset($AccessCode)) {
			// should never happen
			self::redirectToCart();
			return;
		}
		require_once VMPATH_PLUGINS . '/vmpayment/eway/library/include_eway.php';

		$apiEndpoint = self::getApiEndpoint($method);
		$client = \Eway\Rapid::createClient($method->APIKey, $method->APIPassword, $apiEndpoint);

		$response = $client->queryTransaction($AccessCode);
		$transactionResponse = $response->Transactions[0];

		$order_number = $transactionResponse->InvoiceNumber;

		$virtuemart_order_id = VirtueMartModelOrders::getOrderIdByOrderNumber($order_number);
		$orderModel = VmModel::getModel('orders');
		$order = $orderModel->getOrder($virtuemart_order_id);


		if (!$transactionResponse->TransactionStatus) {
			$errors = explode(',', $transactionResponse->ResponseMessage);
			foreach ($errors as $error) {
				self::ewayError($method, \Eway\Rapid::getMessage($error));
			}
			self::redirectToCart();
			return;
		}

		if ($transactionResponse->TokenCustomerID) {
			$this->saveTokenCustomerID($order['details']['BT']->virtuemart_user_id, $transactionResponse);
		}

		$orderHistory['customer_notified'] = 1;
		if ($method->Pre_Auth == 'Authorisation') {
			$orderHistory['order_status'] = $method->status_authorisation;
		} else {
			$orderHistory['order_status'] = $method->status_success;
		}

		$orderHistory['comments'] = '';
		$modelOrder = new VirtueMartModelOrders();
		$modelOrder->updateStatusForOneOrder($virtuemart_order_id, $orderHistory, false);

		vmLanguage::loadJLang('com_virtuemart_orders', TRUE);

		if (!class_exists('VirtueMartCart')) {
			require(VMPATH_SITE . DS . 'helpers' . DS . 'cart.php');
		}
		$response_fields['payment_name'] = $this->renderPluginName($method);
		$response_fields['eway_response_raw'] = print_r($response, true);
		$response_fields['order_number'] = $order_number;
		$response_fields['virtuemart_order_id'] = $virtuemart_order_id;
		$response_fields['payment_currency'] = $method->payment_currency;
		$response_fields['email_currency'] = $this->getEmailCurrency($method);
		$response_fields['payment_order_total'] = $transactionResponse->TotalAmount;
		$response_fields['TransactionID'] = $transactionResponse->TransactionID;
		$response_fields['eway_request_type'] = 'queryTransaction';
		$this->storePSPluginInternalData($response_fields);

		$cart = VirtueMartCart::getCart();
		$amountInCurrency = vmPSPlugin::getAmountInCurrency($order['details']['BT']->order_total, $order['details']['BT']->payment_currency_id);
		CurrencyDisplay::getInstance($cart->pricesCurrency);
		$cart = VirtueMartCart::getCart();
		$cart->emptyCart();

		$html = $this->renderByLayout('response_page', array(
			'TransactionID' => $transactionResponse->TransactionID,
			'ResponseCode' => \Eway\Rapid::getMessage($transactionResponse->ResponseCode),
			'ResponseMessage' => \Eway\Rapid::getMessage($transactionResponse->ResponseMessage),
			'pageTitle' => vmText::sprintf(VMPAYMENT_EWAY_RESPONSE_PAGE_TITLE, $order['details']['BT']->order_number, $amountInCurrency['display']),
			'order_number' => $order['details']['BT']->order_number,
			'order_pass' => $order['details']['BT']->order_pass,
		));

		return;

	}

	//TODO
	private function saveTokenCustomerID($virtuemart_user_id, $tokenCustomerID) {
		if (!$virtuemart_user_id) {
			return;
		}
		$tokenCustomerIDTableName = $this->getTokenCustomerIDTableName();

		$db = JFactory::getDBO();
		$query = $db->getQuery(true)
			->select('*')
			->from($db->quoteName($tokenCustomerIDTableName))
			->where($db->quoteName('virtuemart_user_id') . ' = ' . $db->quote($virtuemart_user_id))
			->where($db->quoteName('tokencustomerid') . ' = ' . $db->quote($tokenCustomerID));
		$db->setQuery($query);

		$found = $db->loadResult();
		if ($found) {
			return;
		}
		$obj = new stdClass();
		$obj->virtuemart_user_id = $virtuemart_user_id;
		$obj->tokencustomerid = $tokenCustomerID;
		$date = JFactory::getDate();
		$today = $date->toSQL();
		$obj->created_on = $today;
		$user = JFactory::getUser();
		$obj->created_by = $user->id;

		$db->insertObject($tokenCustomerIDTableName, $obj, 'id');


	}

	/**
	 * Fields to create the payment table
	 * @return string SQL Fileds
	 */
	private function getTokenCustomerIDTableSQLFields() {
		$SQLfields = array(
			'id' => 'int(11) UNSIGNED NOT NULL AUTO_INCREMENT',
			'virtuemart_user_id' => 'int(11) UNSIGNED',
			'$tokenCustomerID' => 'char(32)',
		);
		return $SQLfields;
	}

	/**
	 * @param $tableComment
	 * @return string
	 */
	private function createTokenCustomerIDTable($tablesFields = 0) {
		$tokenCustomerIDTableName = $this->getTokenCustomerIDTableName();
		$query = "CREATE TABLE IF NOT EXISTS `" . $tokenCustomerIDTableName . "` (";

		$SQLfields = $this->getTokenCustomerIDTableSQLFields();
		$loggablefields = $this->getTableSQLLoggablefields();
		foreach ($SQLfields as $fieldname => $fieldtype) {
			$query .= '`' . $fieldname . '` ' . $fieldtype . " , ";
		}
		foreach ($loggablefields as $fieldname => $fieldtype) {
			$query .= '`' . $fieldname . '` ' . $fieldtype . ", ";
		}

		$query .= "	      PRIMARY KEY (`id`)
	    ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Eway TokenCustomerID Table' AUTO_INCREMENT=1 ;";


		$db = JFactory::getDBO();
		$db->setQuery($query);
		if (!$db->execute()) {
			JError::raiseWarning(1, $tokenCustomerIDTableName . '::createTokenCustomerIDTable: ' . vmText::_('COM_VIRTUEMART_SQL_ERROR') . ' ' . $db->stderr(TRUE));
			echo $tokenCustomerIDTableName . '::createTokenCustomerIDTable: ' . vmText::_('COM_VIRTUEMART_SQL_ERROR') . ' ' . $db->stderr(TRUE);
		}

	}

	function getTokenCustomerIDTableName() {
		return $this->_tablename . '_tokencustomerid';
	}

	/**
	 * @param $method
	 * @return string
	 */
	private static function getApiEndpoint($method) {
		if ($method->sandbox) {
			$apiEndpoint = \Eway\Rapid\Client::MODE_SANDBOX;
		} else {
			$apiEndpoint = \Eway\Rapid\Client::MODE_PRODUCTION;
		}
		return $apiEndpoint;
	}


	/**
	 *
	 */
	private static function redirectToCart() {
		$app = JFactory::getApplication();
		// todo VMPAYMENT_EWAY_ERROR_TRY_AGAIN ?? or we are sorry, try another method ...
		$app->redirect(JRoute::_('index.php?option=com_virtuemart&view=cart&lg=&Itemid=' . vRequest::getInt('Itemid'), false), vmText::_('VMPAYMENT_EWAY_ERROR_TRY_AGAIN'));
	}

	/**
	 * @return bool|null
	 */
	function plgVmOnUserPaymentCancel() {

		if (!class_exists('VirtueMartModelOrders')) {
			require(VMPATH_ADMIN . DS . 'models' . DS . 'orders.php');
		}
		$order_number = vRequest::getUword('on');
		if (!$order_number) {
			return FALSE;
		}

		if (!$virtuemart_order_id = VirtueMartModelOrders::getOrderIdByOrderNumber($order_number)) {
			return NULL;
		}
		if (!($paymentTable = $this->getDataByOrderId($virtuemart_order_id))) {
			return NULL;
		}

		$session = JFactory::getSession();
		$return_context = $session->getId();
		$field = $this->_name . '_custom';
		if (strcmp($paymentTable->$field, $return_context) === 0) {
			$this->handlePaymentUserCancel($virtuemart_order_id);
		}
		return TRUE;
	}


	/**
	 * Display stored payment data for an order
	 *
	 * @see components/com_virtuemart/helpers/vmPSPlugin::plgVmOnShowOrderBEPayment()
	 */
	function plgVmOnShowOrderBEPayment($virtuemart_order_id, $payment_method_id) {

		if (!$this->selectedThisByMethodId($payment_method_id)) {
			return NULL; // Another method was selected, do nothing
		}

		$db = JFactory::getDBO();
		$q = 'SELECT * FROM `' . $this->_tablename . '` WHERE ';
		$q .= ' `virtuemart_order_id` = ' . $virtuemart_order_id;

		$db->setQuery($q);
		$payments = $db->loadObjectList();

		$html = '<table class="adminlist table" >' . "\n";
		$html .= $this->getHtmlHeaderBE();
		$first = TRUE;

		foreach ($payments as $payment) {
			$html .= '<tr class="row1"><td><strong>' . vmText::_('VMPAYMENT_EWAY_DATE') . '</strong></td><td align="left"><strong>' . $payment->created_on . '</strong></td></tr>';
			// Now only the first entry has this data when creating the order
			if ($first) {
				$html .= $this->getHtmlRowBE('VMPAYMENT_EWAY_PAYMENT_NAME', $payment->payment_name);
				$html .= $this->getHtmlRowBE('VMPAYMENT_EWAY_PAYMENT_ORDER_TOTAL', ($payment->payment_order_total) . " " . shopFunctions::getCurrencyByID($payment->payment_currency, 'currency_code_3'));
				$first = FALSE;
			}

			if ($payment->eway_request_type) {
				$html .= $this->getHtmlRowBE('VMPAYMENT_EWAY_PAYMENT_REQUEST_TYPE', $payment->eway_request_type);
			}
			if ($payment->TransactionID) {
				$html .= $this->getHtmlRowBE('VMPAYMENT_EWAY_PAYMENT_TRANSACTIONID', $payment->TransactionID);
			}
			if ($payment->ResponseMessage) {
				$html .= $this->getHtmlRowBE('VMPAYMENT_EWAY_PAYMENT_RESPONSEMESSAGE', $payment->ResponseMessage);
			}
			if (!empty($payment->eway_request_raw)) {
				$eway_request_raw = self::getEwayRaw($payment->eway_request_raw);
				$html .= '<tr><td></td><td>';
				$html .= '<a href="#" class="EwayLogOpener" rel="Rq' . $payment->id . '" >';
				$html .= vmText::_('VMPAYMENT_EWAY_VIEW_TRANSACTION_REQUEST_LOG');
				$html .= '  </a>';
				$html .= '<div  id="EwayLog_Rq' . $payment->id . '" style="display: none;">';
				$html .= $eway_request_raw;
				$html .= ' </div>';
				$html .= ' </td></tr>';
			}
			if (!empty($payment->eway_response_raw)) {
				$eway_response_raw = self::getEwayRaw($payment->eway_response_raw);
				$html .= '<tr><td></td><td>';
				$html .= '<a href="#" class="EwayLogOpener" rel="Rp' . $payment->id . '" >';
				$html .= vmText::_('VMPAYMENT_EWAY_VIEW_TRANSACTION_RESPONSE_LOG');
				$html .= '  </a>';
				$html .= '<div  id="EwayLog_Rp' . $payment->id . '" style="display: none;">';
				$html .= $eway_response_raw;
				$html .= ' </div>';
				$html .= ' </td></tr>';
			}
		}

		$html .= '</table>' . "\n";
		$doc = JFactory::getDocument();
		$js = "
jQuery().ready(function($) {
	$('.EwayLogOpener').click(function() {
		var logId = $(this).attr('rel');
		$('#EwayLog_'+logId).toggle();
		return false;
	});
});";
		$doc->addScriptDeclaration($js);


		$html .= '</table>' . "\n";
		return $html;
	}


	/**
	 * @param $raw
	 * @return string
	 */
	private static function getEwayRaw($raw) {

		return "<pre>" . $raw . '</pre>';
	}

	/**
	 * We must reimplement this triggers for joomla 1.7
	 */

	/**
	 * Create the table for this plugin if it does not yet exist.
	 * This functions checks if the called plugin is active one.
	 * When yes it is calling the standard method to create the tables
	 *
	 * @author Valérie Isaksen
	 *
	 */
	function plgVmOnStoreInstallPaymentPluginTable($jplugin_id) {
		if ($jplugin_id != $this->_jid) {
			return FALSE;
		}
		$method = $this->getPluginMethod(vRequest::getInt('virtuemart_paymentmethod_id'));
		if ($method->save_card_enabled) {
			$return = $this->createTokenCustomerIDTable();
		}

		return $this->onStoreInstallPluginTable($jplugin_id);

	}


	/**
	 * This event is fired after the payment method has been selected. It can be used to store
	 * additional payment info in the cart.
	 *
	 * @author Max Milbers
	 * @author Valérie isaksen
	 *
	 * @param VirtueMartCart $cart : the actual cart
	 * @return null if the payment was not selected, true if the data is valid, error message if the data is not vlaid
	 *
	 */
	public function plgVmOnSelectCheckPayment(VirtueMartCart $cart, &$msg) {
		if (!($method = $this->selectedThisByMethodId($cart->virtuemart_paymentmethod_id))) {
			return NULL; // Another method was selected, do nothing
		}
		if (!$method = $this->getVmPluginMethod($cart->virtuemart_paymentmethod_id) or empty($method->virtuemart_paymentmethod_id)) {
			return NULL;
		}

		$maskedCardSelected = vRequest::getVar('eway-selected-' . $method->virtuemart_paymentmethod_id);

		if ($maskedCardSelected) {
			$CVV = vRequest::getVar('CVV' . $cart->virtuemart_paymentmethod_id, '');
			if (!Creditcard::validate_credit_card_cvv('', $CVV, true, $maskedCardSelected)) {
				vmError('VMPAYMENT_EWAY_CARD_CVV_INVALID', 'VMPAYMENT_EWAY_CARD_CVV_INVALID');
				return false;
			}
			$maskedCardSelected->Number = $maskedCardSelected;
			$maskedCards = self::getMaskedCardsFromSession();
			foreach ($maskedCards as $maskedCard) {
				if ($maskedCard->Number == $maskedCardSelected) {
					$maskedCard->IssueNumber = $CVV;
					$maskedCard->selected = true;
				} else {
					$maskedCard->CVV = '';
					$maskedCard->IssueNumber = false;
				}
			}
			self::setMaskedCardsInSession($maskedCards);

		} else {
			self::clearEwaySession();
		}

		return true;
	}

	/**
	 * plgVmDisplayListFEPayment
	 * This event is fired to display the pluginmethods in the cart (edit shipment/payment) for exampel
	 *
	 * @param object $cart Cart object
	 * @param integer $selected ID of the method selected
	 * @return boolean True on succes, false on failures, null when this plugin was not selected.
	 * On errors, JError::raiseWarning (or JError::raiseError) must be used to set a message.
	 *
	 * @author Valerie Isaksen
	 */
	public function plgVmDisplayListFEPayment(VirtueMartCart $cart, $selected = 0, &$htmlIn) {

		if ($this->getPluginMethods($cart->vendorId) === 0) {
			if (empty($this->_name)) {
				vmAdminInfo('displayListFE cartVendorId=' . $cart->vendorId);
				$app = JFactory::getApplication();
				$app->enqueueMessage(vmText::_('COM_VIRTUEMART_CART_NO_' . strtoupper($this->_psType)));
				return FALSE;
			} else {
				return FALSE;
			}
		}


		$mname = $this->_psType . '_name';
		$idN = 'virtuemart_' . $this->_psType . 'method_id';
		$maskedIndex = false;
		$ret = FALSE;
		foreach ($this->methods as $method) {
			if (!isset($htmlIn[$this->_psType][$method->$idN])) {
				if ($this->checkConditions($cart, $method, $cart->cartPrices)) {
					$ret=true;
					$prices = $cart->cartPrices;
					$methodSalesPrice = $this->setCartPrices($cart, $prices, $method);
					if (!JFactory::getUser()->guest AND $method->save_card_enabled) {
						$maskedCars = $this->getMaskedCards($method);
						if ($maskedCars) {
							$found = false;
							foreach ($maskedCars as $key => $maskedCard) {
									$found = true;
										///$doc = JFactory::getDocument()->addStyleSheet(JURI::root(true) . '/plugins/vmpayment/eway/assets/css/eway.css');
										$maskedIndex = $method->$idN . '-' . $key;
										$htmlIn[$this->_psType][$maskedIndex] = $this->getPluginHtmlMaskedCard($method, $selected, $methodSalesPrice, $maskedCard);
										if ($maskedCard->selected) $selectedMaskedCard=$maskedCard;
							}
							if ($found) {
								vmJsApi::addJScript('vm.ewaySelect', '
					                jQuery(document).ready(function( $ ) {
					                        jQuery("input.eway-select-' . $method->virtuemart_paymentmethod_id . '").click( function(){
					                            var eway_selected = jQuery(this).data("eway");
					                            if (eway_selected !== undefined ) {
					                                jQuery("#eway-selected-' . $method->virtuemart_paymentmethod_id . '").val(eway_selected) ;
					                            }
					                        });
					                });
							    ');
								$htmlIn[$this->_psType][$maskedIndex] .= '<input type="hidden" name="eway-selected-' . $method->virtuemart_paymentmethod_id . '" id="eway-selected-' . $method->virtuemart_paymentmethod_id . '" value="' . $selectedMaskedCard->Number . '" />';
							}
						}
						//$method->$mname = $this->renderPluginName($method);

						$htmlIn[$this->_psType][$method->$idN] = $this->getPluginHtmlMaskedCard($method, $selected, $methodSalesPrice);
					} else {
						//This makes trouble, because $method->$mname is used in  renderPluginName to render the Name, so it must not be called twice!
						$method->$mname = $this->renderPluginName($method);

						$htmlIn[$this->_psType][$method->$idN] = $this->getPluginHtml($method, $selected, $methodSalesPrice);
					}
				}
			}
		}

		return $ret;
	}

	private function getTokenCustomerIDs($virtuemart_user_id) {
		$tokenCustomerIDTableName = $this->getTokenCustomerIDTableName();
		$db = JFactory::getDBO();
		$query = $db->getQuery(true)
			->select('tokencustomerid')
			->from($db->quoteName($tokenCustomerIDTableName))
			->where($db->quoteName('virtuemart_user_id') . ' = ' . $db->quote($virtuemart_user_id));
		$db->setQuery($query);

		$tokenCustomerIDs = $db->loadObjectList();
		return $tokenCustomerIDs;
	}

	private function getMaskedCards($method) {

		$maskedCards = self::getMaskedCardsFromSession();
		if ($maskedCards) {
			return $maskedCards;
		}

		$tokenCustomerIDs = $this->getTokenCustomerIDs(JFactory::getUser()->id);
		if ($tokenCustomerIDs) {
			foreach ($tokenCustomerIDs as $key => $tokenCustomerID) {
				if ($tokenCustomerID->tokencustomerid) {
					$maskedCards[] = $this->getMaskedCard($method, $tokenCustomerID->tokencustomerid);
				}
			}
		}
		if ($maskedCards) {
			self::setMaskedCardsInSession($maskedCards);
		}
		return $maskedCards;
	}


	private function getMaskedCard($method, $TokenCustomerID) {
		require_once VMPATH_PLUGINS . '/vmpayment/eway/library/include_eway.php';

		$apiEndpoint = self::getApiEndpoint($method);
		$client = \Eway\Rapid::createClient($method->APIKey, $method->APIPassword, $apiEndpoint);

		$response = $client->queryCustomer($TokenCustomerID);
		if (!($response instanceof \Eway\Rapid\Model\Response\AbstractResponse)) {
			return false;
		}

		if ($response->getErrors()) {
			foreach ($response->getErrors() as $error) {
				self::ewayError($method, \Eway\Rapid::getMessage($error));
			}
			return false;
		}

		$maskedCard = new stdClass();
		$maskedCard->Number = $response->Customers[0]->CardDetails->Number;
		$maskedCard->Name = $response->Customers[0]->CardDetails->Name;
		$maskedCard->ExpiryMonth = $response->Customers[0]->CardDetails->ExpiryMonth;
		$maskedCard->ExpiryYear = $response->Customers[0]->CardDetails->ExpiryYear;
		$maskedCard->StartMonth = $response->Customers[0]->CardDetails->StartMonth;
		$maskedCard->StartYear = $response->Customers[0]->CardDetails->StartYear;
		$maskedCard->IssueNumber = $response->Customers[0]->CardDetails->IssueNumber;

		return $maskedCard;

	}

// TODO GetTokenCustomerID
	protected function getPluginHtmlMaskedCard($method, $selected, $pluginSalesPrice,  $maskedCard = NULL) {
		static $index = 0;

		if ($selected == $method->virtuemart_paymentmethod_id  AND $maskedCard == NULL) {
			$checked = 'checked="checked"';
		} elseif ($selected == $method->virtuemart_paymentmethod_id AND $maskedCard->selected ) {
			$checked = 'checked="checked"';
		} else {
			$checked = '';
		}

		if (!class_exists('CurrencyDisplay')) {
			require(VMPATH_ADMIN . DS . 'helpers' . DS . 'currencydisplay.php');
		}
		$currency = CurrencyDisplay::getInstance();
		$costDisplay = "";
		if ($pluginSalesPrice) {
			$costDisplay = $currency->priceDisplay($pluginSalesPrice);
			$t = vmText::_('COM_VIRTUEMART_PLUGIN_COST_DISPLAY');
			if (strpos($t, '/') !== FALSE) {
				list($discount, $fee) = explode('/', vmText::_('COM_VIRTUEMART_PLUGIN_COST_DISPLAY'));
				if ($pluginSalesPrice >= 0) {
					$costDisplay = '<span class="' . $this->_type . '_cost fee"> (' . $fee . ' +' . $costDisplay . ")</span>";
				} else {
					if ($pluginSalesPrice < 0) {
						$costDisplay = '<span class="' . $this->_type . '_cost discount"> (' . $discount . ' -' . $costDisplay . ")</span>";
					}
				}
			} else {
				$costDisplay = '<span class="' . $this->_type . '_cost fee"> (' . $t . ' +' . $costDisplay . ")</span>";
			}
		}
		$dynUpdate = '';
		if (VmConfig::get('oncheckout_ajax', false)) {
			$dynUpdate = ' data-dynamic-update="1" ';
		}

		if ($maskedCard) {
			$pluginName = $maskedCard->Number . ' ' . vmText::_('VMPAYMENT_EWAY_PAYMENT_EXPIRY_DATE') . ' (' . $maskedCard->ExpiryMonth . '/' . $maskedCard->ExpiryYear . ')';
			$extraPluginName = '
			<div class="eway-payment-form">
			<div class="eway-fields eway-cardissuenumber-group">
					<label for="eway-cardissuenumber">' . vmText::_('VMPAYMENT_EWAY_PAYMENT_ISSUE_NUMBER') . '</label>' .
				'<input type="text" name="CVV" 
							id="eway-cardissuenumber" 
							class="eway-input"
						   placeholder="123" maxlength="4"
						   value=""
					/> 
				</div>
				</div>
				';
			$id = 'payment-id-' . $method->virtuemart_paymentmethod_id . '-' . $index;
			$index++;
		} else {
			$pluginName = $method->payment_name;
			$id = 'payment-id-' . $method->virtuemart_paymentmethod_id;
		}

		$html = '<input type="radio"' . $dynUpdate . ' 
				class="eway-select-' . $method->virtuemart_paymentmethod_id . '" 
				name="virtuemart_paymentmethod_id" 
				data-eway="' . $maskedCard->Number . '"
				id="' . $id . '"   
				value="' . $method->virtuemart_paymentmethod_id . '" ' . $checked . ">\n"
			. '<label for="' . $id . '">' . '<span class="vmpayment">' . $pluginName . $costDisplay . $extraPluginName . "</span></label>\n";

		return $html;
	}


	/**
	 * @param $method
	 * @return mixed|string
	 */
	protected function renderPluginName($method) {
		$maskedCard = false;
		if (!JFactory::getUser()->guest AND $method->save_card_enabled) {
			$maskedCard = $this->getSelectedMaskedCardFromSession();
		}
		if ($maskedCard) {
			$pluginName = $maskedCard->Number . ' ' . vmText::_('VMPAYMENT_EWAY_PAYMENT_EXPIRY_DATE') . ' (' . $maskedCard->ExpiryMonth . '/' . $maskedCard->ExpiryYear . ')';
		} else {
			$pluginName = parent::renderPluginName($method);
		}
		if ($method->sandbox) {
			$pluginName .= ' <span style="color:red;font-weight:bold">Sandbox (' . $method->virtuemart_paymentmethod_id . ')</span>';
		}
		return $pluginName;
	}

	/**
	 * Check if the payment conditions are fulfilled for this payment method
	 *
	 * @author: Valerie Isaksen
	 *
	 * @param $cart_prices : cart prices
	 * @param $payment
	 * @return true: if the conditions are fulfilled, false otherwise
	 *
	 */
	protected function checkConditions($cart, $method, $cart_prices) {

		$this->convert_condition_amount($method);
		$amount = $this->getCartAmount($cart_prices);
		$address = (($cart->ST == 0) ? $cart->BT : $cart->ST);

		if ($this->_toConvert) {
			$this->convertToVendorCurrency($method);
		}
		//vmdebug(__CLASS__.' checkConditions',  $amount, $cart_prices['salesPrice'],  $cart_prices['salesPriceCoupon']);
		$amount_cond = ($amount >= $method->min_amount AND $amount <= $method->max_amount
			OR
			($method->min_amount <= $amount AND ($method->max_amount == 0)));
		if (!$amount_cond) {
			return FALSE;
		}
		$countries = array();
		if (!empty($method->countries)) {
			if (!is_array($method->countries)) {
				$countries[0] = $method->countries;
			} else {
				$countries = $method->countries;
			}
		}

		// probably did not gave his BT:ST address
		if (!is_array($address)) {
			$address = array();
			$address['virtuemart_country_id'] = 0;
		}

		if (!isset($address['virtuemart_country_id'])) {
			$address['virtuemart_country_id'] = 0;
		}
		if (count($countries) == 0 || in_array($address['virtuemart_country_id'], $countries)) {
			return TRUE;
		}

		return FALSE;
	}


	/**
	 * @param VirtueMartCart $cart
	 * @param array $cart_prices
	 * @param $cart_prices_name
	 * @return bool|null
	 */
	public function plgVmOnSelectedCalculatePricePayment(VirtueMartCart $cart, array &$cart_prices, &$cart_prices_name) {
		if (!($method = $this->selectedThisByMethodId($cart->virtuemart_paymentmethod_id))) {
			return NULL; // Another method was selected, do nothing
		}
		if (!$method = $this->getVmPluginMethod($cart->virtuemart_paymentmethod_id) or empty($method->virtuemart_paymentmethod_id)) {
			return NULL;
		}

		$maskedCardSelected = vRequest::getVar('eway-selected-' . $method->virtuemart_paymentmethod_id);

		if ($maskedCardSelected) {
			$CVV = vRequest::getVar('CVV' . $cart->virtuemart_paymentmethod_id, '');
			if (!Creditcard::validate_credit_card_cvv('', $CVV, true, $maskedCardSelected)) {
				vmError('VMPAYMENT_EWAY_CARD_CVV_INVALID', 'VMPAYMENT_EWAY_CARD_CVV_INVALID');
				return false;
			}
			$maskedCardSelected->Number = $maskedCardSelected;
			$maskedCards = self::getMaskedCardsFromSession();
			foreach ($maskedCards as $maskedCard) {
				if ($maskedCard->Number == $maskedCardSelected) {
					$maskedCard->IssueNumber = $CVV;
					$maskedCard->selected = true;
				} else {
					$maskedCard->CVV = '';
					$maskedCard->IssueNumber = false;
				}
			}
			self::setMaskedCardsInSession($maskedCards);

		}


		return $this->onSelectedCalculatePrice($cart, $cart_prices, $cart_prices_name);
	}

	/**
	 * plgVmOnCheckAutomaticSelectedPayment
	 * Checks how many plugins are available. If only one, the user will not have the choice. Enter edit_xxx page
	 * The plugin must check first if it is the correct type
	 *
	 * @author Valerie Isaksen
	 * @param VirtueMartCart cart: the cart object
	 * @return null if no plugin was found, 0 if more then one plugin was found,  virtuemart_xxx_id if only one plugin is found
	 *
	 */
	function plgVmOnCheckAutomaticSelectedPayment(VirtueMartCart $cart, array $cart_prices = array()) {

		return $this->onCheckAutomaticSelected($cart, $cart_prices);
	}

	/**
	 * This method is fired when showing the order details in the frontend.
	 * It displays the method-specific data.
	 *
	 * @param integer $order_id The order ID
	 * @return mixed Null for methods that aren't active, text (HTML) otherwise
	 * @author Max Milbers
	 * @author Valerie Isaksen
	 */
	public function plgVmOnShowOrderFEPayment($virtuemart_order_id, $virtuemart_paymentmethod_id, &$payment_name) {

		$this->onShowOrderFE($virtuemart_order_id, $virtuemart_paymentmethod_id, $payment_name);
	}

	/**
	 * This event is fired during the checkout process. It can be used to validate the
	 * method data as entered by the user.
	 *
	 * @return boolean True when the data was valid, false otherwise. If the plugin is not activated, it should return null.
	 * @author Max Milbers
	 *
	 * public function plgVmOnCheckoutCheckDataPayment(VirtueMartCart $cart) {
	 * return null;
	 * }
	 */

	/**
	 * This method is fired when showing when priting an Order
	 * It displays the the payment method-specific data.
	 *
	 * @param integer $_virtuemart_order_id The order ID
	 * @param integer $method_id method used for this order
	 * @return mixed Null when for payment methods that were not selected, text (HTML) otherwise
	 * @author Valerie Isaksen
	 */
	function plgVmonShowOrderPrintPayment($order_number, $method_id) {

		return $this->onShowOrderPrint($order_number, $method_id);
	}

	/**
	 * Save updated order data to the method specific table
	 *
	 * @param array $_formData Form data
	 * @return mixed, True on success, false on failures (the rest of the save-process will be
	 * skipped!), or null when this method is not actived.
	 *
	 * public function plgVmOnUpdateOrderPayment(  $_formData) {
	 * return null;
	 * }
	 */
	public function plgVmOnUpdateOrderPayment(&$order, $old_order_status) {

		//Load the method
		if (!($method = $this->getVmPluginMethod($order->virtuemart_paymentmethod_id))) {
			return NULL; // Another method was selected, do nothing
		}

		if (!$this->selectedThisElement($method->payment_element)) {
			return NULL;
		}

		if (!$this->isStatusRequireEwayAction($order->order_status, $method)) {
			if (!JFactory::getApplication()->isSite()) {
				$orderStatusModel = VmModel::getModel('orderstatus');
				$orderStates = $orderStatusModel->getOrderStatusNames(true);
				vmInfo(vmText::sprintf('VMPAYMENT_EWAY_STATUS_NO_ACTION', $orderStates[$order->order_status]['order_status_name']));
			}
			return true; // it is true because may be the merchant wants still to do it.
		}

		require_once VMPATH_PLUGINS . '/vmpayment/eway/library/include_eway.php';

		//Load the payments
		if (!($payments = $this->getDatasByOrderId($order->virtuemart_order_id))) {
			// JError::raiseWarning(500, $db->getErrorMsg());
			return null;
		}

		$oModel = VmModel::getModel('orders');
		$orderModelData = $oModel->getOrder($order->virtuemart_order_id);

		// let('s try to find out what is the transaction status at eway
		$foundPayment = $this->getTransactionIDPayment($payments);
		$apiEndpoint = self::getApiEndpoint($method);
		$client = \Eway\Rapid::createClient($method->APIKey, $method->APIPassword, $apiEndpoint);
		$client->setVersion(40);
		$response = $client->queryTransaction($foundPayment->TransactionID);

		// save it
		$dbValues['order_number'] = $foundPayment->order_number;
		$dbValues['virtuemart_order_id'] = $foundPayment->virtuemart_order_id;
		$dbValues['virtuemart_paymentmethod_id'] = $foundPayment->virtuemart_paymentmethod_id;
		//$dbValues['payment_order_total'] = $refundItem['TotalAmount'];
		$dbValues['TotalAmount'] = $response->TotalAmount;
		$dbValues['TransactionID'] = $response->TransactionID;
		$dbValues['eway_request_type'] = 'refund';
		$dbValues['eway_request_raw'] = print_r($foundPayment->TransactionID, true);
		$dbValues['eway_response_raw'] = print_r($response, true);
		$this->storePSPluginInternalData($dbValues);

		$transactionResponse = $response->Transactions[0];
		if (count($response->Transactions) > 1) {
			vmError('Programming Error: please report:). Several transactions exists for this transaction ID. Case not handle');
			return false;
		}

		if ($order->order_status == $method->status_refund and $this->canDoRefund($method, $transactionResponse)) {
			return $this->refundPayment($method, $payments, $orderModelData, $response, $old_order_status);
		} elseif ($order->order_status == $method->status_capture and $this->canDoCapture($method, $transactionResponse)) {
			return $this->capturePayment($method, $payments, $orderModelData, $response, $old_order_status);
		} elseif ($order->order_status == $method->status_cancel and $this->canDoCancel($method, $transactionResponse)) {
			return $this->cancelPayment($payments, $orderModelData, $response, $old_order_status);
		}

		return true;
	}


	/**
	 * @param $payments
	 * @param $orderModelData
	 * @return bool
	 */
	private function canDoRefund($method, $transactionResponse) {
		if (!$method->status_refund_enabled) {
			vmInfo(vmText::_('VMPAYMENT_EWAY_STATUS_REFUND_NOT_ENABLED'));
			return false;
		}
		if (!$transactionResponse->TransactionCaptured) {
			vmInfo(vmText::_('VMPAYMENT_EWAY_STATUS_NO_REFUND_NOT_TRANSACTIONCAPTURED'));
			return false;
		}
		return true;
	}


	/**
	 *  Cancel an Authorisation
	 *
	 * @param $payments
	 * @param $order
	 * @param $response
	 * @return bool
	 */
	private function canDoCancel($method, $transactionResponse) {

		if (!$method->status_canceled_enabled) {
			vmInfo(vmText::_('VMPAYMENT_EWAY_STATUS_CANCELED_NOT_ENABLED'));
			return false;
		}
		if ($transactionResponse->TransactionCaptured) {
			vmInfo(vmText::_('VMPAYMENT_EWAY_STATUS_NO_CANCEL_TRANSACTIONCAPTURED'));
			return false;
		}
		return true;
	}

	/**
	 * Capture a Payment: Once a payment has been authorised, the transaction can be completed with a Capture request
	 * @param $payments
	 * @param $order
	 * @param $response
	 * @return bool
	 */
	private function canDoCapture($method, $transactionResponse) {

		if (!$method->status_capture_enabled) {
			vmInfo(vmText::_('VMPAYMENT_EWAY_STATUS_CAPTURE_NOT_ENABLED'));
			return false;
		}
		if ($transactionResponse->TransactionCaptured) {
			vmInfo(vmText::_('VMPAYMENT_EWAY_STATUS_NO_CAPTURE_TRANSACTIONCAPTURED'));
			return false;
		}
		return true;
	}


	private function refundPayment($method, $vmPayments, $order, $response, $old_order_status) {
		$foundPayment = $this->getTransactionIDPayment($vmPayments);
		if (!$foundPayment) {
			vmError(vmText::_('VMPAYMENT_EWAY_TRANSACTION_ID_NOT_FOUND'));
			return;
		}

		$customer = $this->getCustomerFromOrder($order);
		$customer = $this->getCardDetails($foundPayment, $customer);
		$shippingAddress = $this->getShippingAddress($order);
		$items = $this->getOrderItems($order);
		$refund ["Customer"] = $customer;
		$refund ["ShippingAddress"] = $shippingAddress;
		$refund ["Items"] = $items;
		$refund ["Refund"] = $items;
		$refundItem['TransactionID'] = $foundPayment->TransactionID;
		$refundItem['TotalAmount'] = (int)$foundPayment->payment_order_total;
		$refundItem['InvoiceNumber'] = $foundPayment->order_number;
		$refundItem['CurrencyCode'] = shopFunctions::getCurrencyByID($foundPayment->payment_currency, 'currency_code_3');
		$refund ["Refund"] = $refundItem;
		//$refund ["DeviceID"] = $;
		$refund ["PartnerID"] = self::PARTNER_ID;
		$apiEndpoint = self::getApiEndpoint($method);
		$client = \Eway\Rapid::createClient($method->APIKey, $method->APIPassword, $apiEndpoint);
		$response = $client->refund($refund);

		$dbValues['order_number'] = $foundPayment->order_number;
		$dbValues['virtuemart_order_id'] = $foundPayment->virtuemart_order_id;
		$dbValues['virtuemart_paymentmethod_id'] = $foundPayment->virtuemart_paymentmethod_id;
		//$dbValues['payment_order_total'] = $refundItem['TotalAmount'];

		$dbValues['TotalAmount'] = $response->TotalAmount;
		$dbValues['TransactionID'] = $response->TransactionID;
		$dbValues['ResponseCode'] = $response->ResponseCode;
		$dbValues['eway_request_type'] = 'refund';
		$dbValues['eway_request_raw'] = print_r($refund, true);
		$dbValues['eway_response_raw'] = print_r($response, true);

		if (!$response->TransactionStatus) {
			vmError(vmText::_('VMPAYMENT_EWAY_PAYMENT_REFUND_DECLINED'));
			$errors = explode(',', $response->ResponseMessage);
			$errorMessages[] = vmText::_('VMPAYMENT_EWAY_PAYMENT_REFUND_DECLINED');
			foreach ($errors as $error) {
				vmError(\Eway\Rapid::getMessage($error));
				$errorMessages[] = \Eway\Rapid::getMessage($error);
			}
			$dbValues['ResponseMessage'] = implode('<br />', $errorMessages);;
			$this->storePSPluginInternalData($dbValues);
			return false;
		}

		$this->storePSPluginInternalData($dbValues);
		return true;
	}

	/**
	 * Card Details
	 *  The card details section is within the Customer section and is used to pass the customers card details for the refund.
	 * These are only needed if the customer's card expiry date has changed since the purchase.
	 * @param $foundPayment
	 * @param $customer
	 * @return mixed
	 */
	// TODO
	private function getCardDetails($foundPayment, $customer) {
		return $customer;
	}

	/**
	 * @param $payments
	 * @param $orderModelData
	 * @return bool
	 */
	private function capturePayment($method, $vmPayments, $orderModelData) {

		$foundPayment = $this->getTransactionIDPayment($vmPayments);
		if (!$foundPayment) {
			vmError(vmText::_('VMPAYMENT_EWAY_TRANSACTION_ID_NOT_FOUND'));
			return;
		}

		$payment = array();
		$payment['TotalAmount'] = (int)$foundPayment->payment_order_total;
		$payment['InvoiceNumber'] = $foundPayment->order_number;
		$payment['CurrencyCode'] = shopFunctions::getCurrencyByID($foundPayment->payment_currency, 'currency_code_3');
		$transaction = array();
		$transaction ["Payment"] = $payment;
		$transaction ["TransactionID"] = $foundPayment->TransactionID;
		$apiEndpoint = self::getApiEndpoint($method);
		$client = \Eway\Rapid::createClient($method->APIKey, $method->APIPassword, $apiEndpoint);
		$response = $client->createTransaction(\Eway\Rapid\Enum\ApiMethod::AUTHORISATION, $transaction);

		// Prepare data that should be stored in the database
		$dbValues['order_number'] = $foundPayment->order_number;
		$dbValues['virtuemart_order_id'] = $foundPayment->virtuemart_order_id;
		$dbValues['virtuemart_paymentmethod_id'] = $foundPayment->virtuemart_paymentmethod_id;
		$dbValues['payment_order_total'] = $payment['TotalAmount'];
		$dbValues['TransactionID'] = $response->TransactionID;
		$dbValues['eway_request_type'] = (string)\Eway\Rapid\Enum\ApiMethod::AUTHORISATION;
		$dbValues['eway_request_raw'] = print_r($transaction, true);
		$dbValues['eway_response_raw'] = print_r($response, true);
		$this->storePSPluginInternalData($dbValues);

		if (!$response->TransactionStatus) {
			vmError(vmText::_('VMPAYMENT_EWAY_PAYMENT_CAPTURE_DECLINED'));
			$errors = explode(',', $response->ResponseMessage);
			foreach ($errors as $error) {
				vmError(\Eway\Rapid::getMessage($error));
			}
			return false;
		}

		return true;

	}

	/**
	 *
	 * Cancel an Authorisation
	 *
	 * @param $payments
	 * @param $orderModelData
	 * @return bool
	 */
	private function cancelPayment($method, $vmPayments, $orderModelData) {

		$foundPayment = $this->getTransactionIDPayment($vmPayments);
		if (!$foundPayment) {
			vmError(vmText::_('VMPAYMENT_EWAY_TRANSACTION_ID_NOT_FOUND'));
			return;
		}

		$apiEndpoint = self::getApiEndpoint($method);
		$client = \Eway\Rapid::createClient($method->APIKey, $method->APIPassword, $apiEndpoint);
		$response = $client->cancelTransaction($foundPayment->TransactionID);

		// Prepare data that should be stored in the database
		$dbValues['order_number'] = $foundPayment->order_number;
		$dbValues['virtuemart_order_id'] = $foundPayment->virtuemart_order_id;
		$dbValues['payment_name'] = $this->renderPluginName($method);
		$dbValues['TransactionID'] = $response->TransactionID;
		$dbValues['eway_request_type'] = 'cancelTransaction';
		$dbValues['eway_response_raw'] = print_r($response, true);
		$this->storePSPluginInternalData($dbValues);

		if (!$response->TransactionStatus) {
			vmError(vmText::_('VMPAYMENT_EWAY_PAYMENT_CANCEL_DECLINED'));
			$errors = explode(',', $response->ResponseMessage);
			foreach ($errors as $error) {
				vmError(\Eway\Rapid::getMessage($error));
			}
			return false;
		}

		return true;
	}


	/**
	 * @param $vmPayments
	 * @return bool|string
	 */
	private function getTransactionIDPayment($vmPayments) {
		$foundPayment = '';
		foreach ($vmPayments as $vmPayment) {

			if ($vmPayment->eway_request_type == 'queryTransaction') {
				$foundPayment = $vmPayment;
				return $foundPayment;
			}
		}
		return false;
	}


	/**
	 *
	 * Order status that may require an action from the plugin
	 * @param $orderStatus
	 * @param $method
	 * @return bool
	 */
	private static function isStatusRequireEwayAction($orderStatus, $method) {
		$requireAction = array(
			$method->status_capture, // captures the payment when it was a authorisation payment type
			$method->status_refund,
			$method->status_canceled,
		);
		if (!in_array($orderStatus, $requireAction)) {
			return false;
		}

		return true;
	}

	/**
	 * Save updated orderline data to the method specific table
	 *
	 * @param array $_formData Form data
	 * @return mixed, True on success, false on failures (the rest of the save-process will be
	 * skipped!), or null when this method is not actived.
	 *
	 * public function plgVmOnUpdateOrderLine(  $_formData) {
	 * return null;
	 * }
	 */
	/**
	 * plgVmOnEditOrderLineBE
	 * This method is fired when editing the order line details in the backend.
	 * It can be used to add line specific package codes
	 *
	 * @param integer $_orderId The order ID
	 * @param integer $_lineId
	 * @return mixed Null for method that aren't active, text (HTML) otherwise
	 *
	 * public function plgVmOnEditOrderLineBE(  $_orderId, $_lineId) {
	 * return null;
	 * }
	 */

	/**
	 * This method is fired when showing the order details in the frontend, for every orderline.
	 * It can be used to display line specific package codes, e.g. with a link to external tracking and
	 * tracing systems
	 *
	 * @param integer $_orderId The order ID
	 * @param integer $_lineId
	 * @return mixed Null for method that aren't active, text (HTML) otherwise
	 *
	 * public function plgVmOnShowOrderLineFE(  $_orderId, $_lineId) {
	 * return null;
	 * }
	 */
	function plgVmDeclarePluginParamsPaymentVM3(&$data) {
		return $this->declarePluginParams('payment', $data);
	}

	/**
	 * @param $name
	 * @param $id
	 * @param $table
	 * @return bool
	 */
	function plgVmSetOnTablePluginParamsPayment($name, $id, &$table) {
		return $this->setOnTablePluginParams($name, $id, $table);
	}

	private
	static function setMaskedCardsInSession($maskedCards) {
		$session = JFactory::getSession();
		$json = json_encode($maskedCards);
		$session->set('eway', $json, 'vm');
	}


	private function getSelectedMaskedCardFromSession() {
		$maskedCards = self::getMaskedCardsFromSession();
		foreach ($maskedCards as $maskedCard) {
			if ($maskedCard->selected) {
				return $maskedCard;
			}
		}
		return null;
	}

	private
	static function getMaskedCardsFromSession() {

		$session = JFactory::getSession();
		$maskedCardsJson = $session->get('eway', '', 'vm');
		$maskedCards = json_decode($maskedCardsJson);
		return $maskedCards;
	}

	private
	static function clearEwaySession() {
		$session = JFactory::getSession();
		$session->clear('eway', 'vm');

	}
}

// No closing tag
