<?php

defined('_JEXEC') or die('Direct Access to ' . basename(__FILE__) . 'is not allowed.');

/**
 * @version $Id$
 * @package    VirtueMart
 * @subpackage Plugins  - Elements
 * @package VirtueMart
 * @subpackage Payment
 * @author Valérie Isaksen
 * @link http://www.virtuemart.net
 * @copyright Copyright (c) 2004 - ${PHING.VM.RELDATE} VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id: view.html.php 2796 2011-03-01 11:29:16Z Milbo $
 *

 */
if (!class_exists('vmPSPlugin')) {
	require(JPATH_VM_PLUGINS . DS . 'vmpsplugin.php');
}
if (!class_exists('KlikandpayHelperKlikandpay')) {
	require(JPATH_SITE . '/plugins/vmpayment/klikandpay/klikandpay/helpers/klikandpay.php');
}
class plgVmpaymentKlikandpay extends vmPSPlugin {
	const KLIKANDPAY_RESPONSE_SUCCESS = "00";

	function __construct (& $subject, $config) {

		//if (self::$_this)
		//   return self::$_this;
		parent::__construct($subject, $config);

		$this->_loggable = TRUE;
		$this->tableFields = array_keys($this->getTableSQLFields());
		$this->_tablepkey = 'id'; //virtuemart_kap_id';
		$this->_tableId = 'id'; //'virtuemart_kap_id';
		$varsToPush = $this->getVarsToPush();
		//$this->setEncryptedFields(array('params'));
		$this->setConfigParameterable($this->_configTableFieldName, $varsToPush);
		if (!JFactory::getApplication()->isSite()) {
			$doc = JFactory::getDocument();
			$doc->addScript(JURI::root(true) . '/plugins/vmpayment/' . $this->_name . '/' . $this->_name . '/assets/js/admin.js');
		}
		if (method_exists($this, 'setCryptedFields')) {
			$this->setCryptedFields(array('account'));
		}

	}

	protected function getVmPluginCreateTableSQL () {

		return $this->createTableSQL('Payment klikandpay Table');
	}

	function getTableSQLFields () {

		$SQLfields = array(
			'id'                                => 'int(1) unsigned NOT NULL AUTO_INCREMENT',
			'virtuemart_order_id'               => 'int(11) UNSIGNED DEFAULT NULL',
			'order_number'                      => 'char(64) DEFAULT NULL',
			'virtuemart_paymentmethod_id'       => 'mediumint(1) UNSIGNED DEFAULT NULL',
			'payment_name'                      => 'varchar(5000)',
			'payment_order_total'               => 'decimal(15,5) NOT NULL DEFAULT \'0.00000\'',
			'payment_currency'                  => 'smallint(1)',
			'email_currency'                    => 'smallint(1)',
			'recurring'                         => 'varchar(512)',
			'recurring_number'                  => 'smallint(1)',
			'cost_per_transaction'              => 'decimal(10,2) DEFAULT NULL',
			'cost_percent_total'                => 'decimal(10,2) DEFAULT NULL',
			'tax_id'                            => 'smallint(1) DEFAULT NULL',
			'klikandpay_custom'                 => 'varchar(255) DEFAULT NULL',
			'klikandpay_response_RESPONSE'      => 'varchar(2) DEFAULT NULL',
			'klikandpay_response_NUMXKP'        => 'varchar(255) DEFAULT NULL',
			'klikandpay_response_SCOREXKP'      => 'smallint(1) UNSIGNED DEFAULT NULL',
			'klikandpay_response_TRANSACTIONID' => 'smallint(1) UNSIGNED DEFAULT NULL',
			'klikandpay_response_AUTHID'        => 'varchar(32) DEFAULT NULL',
			'klikandpay_response_CERT'          => 'varchar(32) DEFAULT NULL',
			'klikandpay_response_MONTANTXKP'    =>  'decimal(15,5) NOT NULL DEFAULT \'0.00000\'',
			'klikandpay_response_DEVISEXKP'     => 'varchar(3) DEFAULT NULL',
			'klikandpay_response_IPXKP'         => 'varchar(32) DEFAULT NULL',
			'klikandpay_response_PAYSRXKP'      => 'varchar(2) DEFAULT NULL',
			'klikandpay_response_PAYSBXKP'      => 'varchar(2) DEFAULT NULL',
			'klikandpay_response_PAIEMENT'      => 'varchar(16) DEFAULT NULL',
			'klikandpay_fullresponse'           => 'text DEFAULT NULL'
		);
		return $SQLfields;
	}

	function plgVmConfirmedOrder ($cart, $order) {

		if (!($this->_currentMethod = $this->getVmPluginMethod($order['details']['BT']->virtuemart_paymentmethod_id))) {
			return NULL; // Another method was selected, do nothing
		}
		if (!$this->selectedThisElement($this->_currentMethod->payment_element)) {
			return FALSE;
		}

		$interface = $this->_loadKlikandpayInterface($this);
		$this->logInfo('plgVmConfirmedOrder order number: ' . $order['details']['BT']->order_number, 'message');

		if (!class_exists('VirtueMartModelOrders')) {
			require(JPATH_VM_ADMINISTRATOR . DS . 'models' . DS . 'orders.php');
		}
		if (!class_exists('VirtueMartModelCurrency')) {
			require(JPATH_VM_ADMINISTRATOR . DS . 'models' . DS . 'currency.php');
		}


		$this->getPaymentCurrency($this->_currentMethod);
		$totalInPaymentCurrency = vmPSPlugin::getAmountInCurrency($order['details']['BT']->order_total, $this->_currentMethod->payment_currency);
		$orderTotalVendorCurrency = $order['details']['BT']->order_total;
		$email_currency = $this->getEmailCurrency($this->_currentMethod);

		$name = $order['details']['BT']->first_name;
		if (isset($order['details']['BT']->middle_name) and $order['details']['BT']->middle_name) {
			$name .= $order['details']['BT']->middle_name;
		}
		$address = $order['details']['BT']->address_1;
		if (isset($order['details']['BT']->address_2) and $order['details']['BT']->address_2) {
			$name .= $order['details']['BT']->address_2;
		}
		$retourParams = $this->setRetourParams($order, $this->getContext());
		$post_variables = Array(
			"SOCIETE"        => $order['details']['BT']->company,
			"NOM"            => $order['details']['BT']->last_name,
			"PRENOM"         => $name,
			"ADRESSE"        => $address,
			"CODEPOSTAL"     => $order['details']['BT']->zip,
			"VILLE"          => $order['details']['BT']->city,
			"PAYS"           => ShopFunctions::getCountryByID($order['details']['BT']->virtuemart_country_id, 'country_2_code'),
			"TEL"            => $order['details']['BT']->phone_1,
			"EMAIL"          => $order['details']['BT']->email,
			"L"              => $interface->getLanguage(),
			"ID"             => $this->_currentMethod->account,
			"MONTANT"        => $totalInPaymentCurrency['value'],
			"DETAILS"        => $interface->getOrderDetails($order),
			"RETOUR"         => $retourParams,
			"RETOURVOK"      => $retourParams,
			"RETOURVHS"      => $retourParams,
			"MODULE"         => 'VirtueMart',
			"MODULE_VERSION" => '${PHING.VM.RELEASE}',
		);

		$subscribe = array();
		$recurring = array();
		if ($this->_currentMethod->integration == "recurring") {
			$recurring = $interface->getRecurringPayments($totalInPaymentCurrency['value']);
			// PBX_TOTAL will be replaced in the array_merge.
			$post_variables = array_merge($post_variables, $recurring);
		} else {
			if ($this->_currentMethod->integration == "subscribe" /*AND ($orderTotalVendorCurrency > $this->_currentMethod->subscribe_min_amount)*/) {
				$subscribe_data = $interface->getSubscribePayments($cart, $interface->getPbxAmount($orderTotalVendorCurrency));
				if ($subscribe_data) {
					// PBX_TOTAL is the order total in this case
					$post_variables["PBX_TOTAL"] = $subscribe_data["PBX_TOTAL"];
					$post_variables["PBX_CMD"] .= $subscribe_data['PBX_CMD'];
				}
			}
		}

		// Prepare data that should be stored in the database
		$dbValues['order_number'] = $order['details']['BT']->order_number;
		$dbValues['virtuemart_order_id'] = $order['details']['BT']->virtuemart_order_id;
		$dbValues['payment_name'] = $this->renderPluginName($this->_currentMethod);
		$dbValues['virtuemart_paymentmethod_id'] = $cart->virtuemart_paymentmethod_id;
		$dbValues['klikandpay_custom'] = $this->getContext();
		$dbValues['cost_per_transaction'] = $this->_currentMethod->cost_per_transaction;
		$dbValues['cost_percent_total'] = $this->_currentMethod->cost_percent_total;
		$dbValues['payment_currency'] = $this->_currentMethod->payment_currency;
		$dbValues['email_currency'] = $email_currency;
		$dbValues['payment_order_total'] = $post_variables["MONTANT"];
		if (!empty($recurring)) {
			$dbValues['recurring'] = json_encode($recurring);
			$dbValues['recurring_number'] = $this->_currentMethod->recurring_number;
			$dbValues['recurring_periodicity'] = $this->_currentMethod->recurring_periodicity;
		} else {
			$dbValues['recurring'] = NULL;
		}
		if (!empty($subscribe)) {
			$dbValues['subscribe'] = json_encode($subscribe);
			//$dbValues['recurring_number'] = $this->_currentMethod->recurring_number;
			//$dbValues['recurring_periodicity'] = $this->_currentMethod->recurring_periodicity;
		} else {
			$dbValues['subscribe'] = NULL;
		}

		$dbValues['tax_id'] = $this->_currentMethod->tax_id;
		$this->storePSPluginInternalData($dbValues);

		$html = $this->getConfirmedHtml($post_variables, $interface);

		// 	2 = don't delete the cart, don't send email and don't redirect
		$cart->_confirmDone = FALSE;
		$cart->_dataValidated = FALSE;
		$cart->setCartIntoSession();
		JRequest::setVar('display_title', false);
		JRequest::setVar('html', $html);

		return;
	}


	function plgVmgetPaymentCurrency ($virtuemart_paymentmethod_id, &$paymentCurrencyId) {

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


	function plgVmOnPaymentResponseReceived (&$html) {

		if (!class_exists('VirtueMartCart')) {
			require(JPATH_VM_SITE . DS . 'helpers' . DS . 'cart.php');
		}
		if (!class_exists('shopFunctionsF')) {
			require(JPATH_VM_SITE . DS . 'helpers' . DS . 'shopfunctionsf.php');
		}
		if (!class_exists('VirtueMartModelOrders')) {
			require(JPATH_VM_ADMINISTRATOR . DS . 'models' . DS . 'orders.php');
		}

		VmConfig::loadJLang('com_virtuemart_orders', TRUE);

		$po = vRequest::getString('po', '');

		if (!$po) {
			return NULL;
		}
		$klikandpayData = $this->getRetourParams($po);

		$virtuemart_paymentmethod_id = $klikandpayData['virtuemart_paymentmethod_id'];
		$order_number = $klikandpayData['order_number'];
		$context = $klikandpayData['context'];
		if (!$this->isValidContext($context)) {
			return NULL;
		}
		if (!($this->_currentMethod = $this->getVmPluginMethod($virtuemart_paymentmethod_id))) {
			return NULL; // Another method was selected, do nothing
		}
		if (!$this->selectedThisElement($this->_currentMethod->payment_element)) {
			return NULL;
		}

		if (!($virtuemart_order_id = VirtueMartModelOrders::getOrderIdByOrderNumber($order_number))) {
			return FALSE;
		}

		if (!($payments = $this->getDatasByOrderId($virtuemart_order_id))) {
			$this->debugLog('no payments found', 'getDatasByOrderId', 'debug', false);
			return FALSE;
		}

		$orderModel = VmModel::getModel('orders');
		$order = $orderModel->getOrder($virtuemart_order_id);
		$extra_comment = "";

		$html = $this->getResponseHTML($order, $extra_comment);
		//$cart = VirtueMartCart::getCart();
		//$cart->emptyCart();
		JRequest::setVar('display_title', false);
		JRequest::setVar('html', $html);

		return TRUE;

	}


	function redirectToCart () {
		$app = JFactory::getApplication();
		$app->redirect(JRoute::_('index.php?option=com_virtuemart&view=cart&lg=&Itemid=' . vRequest::getInt('Itemid'), false), vmText::_('VMPAYMENT_KLIKANDPAY_ERROR_TRY_AGAIN'));
	}

	function plgVmOnUserPaymentCancel () {

		if (!class_exists('VirtueMartModelOrders')) {
			require(JPATH_VM_ADMINISTRATOR . DS . 'models' . DS . 'orders.php');
		}
		//  $order_number = pbxRequest::getUword('on');
		$order_number = vRequest::getUword('on');
		if (!$order_number) {
			return FALSE;
		}
		$numerr = JRequest::getString('E', '');
		if ($numerr) {
			VmInfo('VMPAYMENT_KLIKANDPAY_PBX_NUMERR_' . abs($numerr));
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
	 *   plgVmOnPaymentNotification() - This event is fired by Offline Payment. It can be used to validate the payment data as entered by the user.
	 * Return:
	 * Parameters:
	 *  None
	 * @author Valerie Isaksen
	 */

	function plgVmOnPaymentNotification () {

		if (!class_exists('VirtueMartModelOrders')) {
			require(JPATH_VM_ADMINISTRATOR . DS . 'models' . DS . 'orders.php');
		}
		$po = vRequest::getString('po', '');
		if (!$po) return;

		$retourParams = $this->getRetourParams($po);

		$virtuemart_paymentmethod_id = $retourParams['virtuemart_paymentmethod_id'];
		$order_number = $retourParams['order_number'];
		$context = $retourParams['context'];

		$this->_currentMethod = $this->getVmPluginMethod($virtuemart_paymentmethod_id);
		if (!$this->selectedThisElement($this->_currentMethod->payment_element)) {
			//$this->debugLog('Not this one', 'selectedThisElement', 'debug', false);
			return;
		}
		$this->debugLog(var_export($retourParams, true), 'plgVmOnPaymentNotification getRetourParams', 'debug', false);
		$interface = $this->_loadKlikandpayInterface($this);

		if (!($virtuemart_order_id = VirtueMartModelOrders::getOrderIdByOrderNumber($order_number))) {
			return FALSE;
		}

		if (!($payments = $this->getDatasByOrderId($virtuemart_order_id))) {
			$this->debugLog('no payments found', 'getDatasByOrderId', 'debug', false);
			return FALSE;
		}
		if ($payments[0]->klikandpay_custom != $context) {
			$this->debugLog('Wrong context', 'plgVmOnPaymentNotification', 'debug', false);
			return NULL;
		}
		$orderModel = VmModel::getModel('orders');
		$order = $orderModel->getOrder($virtuemart_order_id);
		$extra_comment = "";
		$klikandpay_data = vRequest::getGet();
		$order_history = $this->updateOrderStatus($interface, $klikandpay_data, $order, $payments);
		if (isset($order_history['extra_comment'])) {
			$extra_comment = $order_history['extra_comment'];
		}

		$this->emptyCart($payments[0]->klikandpay_custom, $order['details']['BT']->order_number);
		$this->setEmptyCartDone($payments[0]);


		return TRUE;
	}


	/**
	 * @param $firstPayment
	 */
	function setEmptyCartDone ($firstPayment) {
		$firstPayment = (array)$firstPayment;
		$firstPayment['klikandpay_custom'] = NULL;
		$this->storePSPluginInternalData($firstPayment, $this->_tablepkey, true);
	}

	/**
	 * @param $interface     * @param $klikandpay_data
	 * @param $order
	 * @return bool
	 */
	function updateOrderStatus ($interface, $klikandpay_data, $order, $payments) {

		if ($klikandpay_data['RESPONSE'] == self::KLIKANDPAY_RESPONSE_SUCCESS) {
			$order_history = $interface->getOrderHistory($klikandpay_data, $order, $payments);

		} else {
			$order_history['comments'] = JText::sprintf('VMPAYMENT_KLIKANDPAY_PAYMENT_STATUS_CANCELLED', $order['details']['BT']->order_number);
			$order_history['order_status'] = $this->_currentMethod->status_canceled;
			$order_history['customer_notified'] = true;
		}
		//	$this->debugLog($success, 'updateOrderStatus', 'error', false);


		$db_values['virtuemart_order_id'] = $order['details']['BT']->virtuemart_order_id;
		$db_values['order_number'] = $order['details']['BT']->order_number;
		$db_values['virtuemart_paymentmethod_id'] = $this->_currentMethod->virtuemart_paymentmethod_id;
		// get all know columns of the table
		$db = JFactory::getDBO();
		$query = 'SHOW COLUMNS FROM `' . $this->_tablename . '` ';
		$db->setQuery($query);
		$columns = $db->loadResultArray(0);
		foreach ($klikandpay_data as $key => $value) {
			$table_key = 'klikandpay_response_' . $key;
			if (in_array($table_key, $columns)) {
				$db_values[$table_key] = $value;
			}
		}
		$db_values['klikandpay_fullresponse'] = json_encode($klikandpay_data);

		$this->debugLog('updateOrderStatus storePSPluginInternalData:' . var_export($db_values, true), 'debug');

		$this->storePSPluginInternalData($db_values);

		$modelOrder = VmModel::getModel('orders');
		$modelOrder->updateStatusForOneOrder($order['details']['BT']->virtuemart_order_id, $order_history, TRUE);
		return $order_history;
	}


	/**
	 * Display stored payment data for an order
	 *
	 * @see components/com_virtuemart/helpers/vmPSPlugin::plgVmOnShowOrderBEPayment()
	 */
	function plgVmOnShowOrderBEPayment ($virtuemart_order_id, $payment_method_id) {

		if (!$this->selectedThisByMethodId($payment_method_id)) {
			return NULL; // Another method was selected, do nothing
		}

		$db = JFactory::getDBO();
		$q = 'SELECT * FROM `' . $this->_tablename . '` WHERE ';
		$q .= ' `virtuemart_order_id` = ' . $virtuemart_order_id;

		$db->setQuery($q);
		$payments = $db->loadObjectList();

		$html = '<table class="adminlist" width="50%">' . "\n";
		$html .= $this->getHtmlHeaderBE();
		$first = TRUE;
		$lang = JFactory::getLanguage();
		foreach ($payments as $payment) {
			$html .= '<tr class="row1"><td>' . JText::_('VMPAYMENT_KLIKANDPAY_DATE') . '</td><td align="left">' . $payment->created_on . '</td></tr>';
			// Now only the first entry has this data when creating the order
			if ($first) {
				$html .= $this->getHtmlRowBE('KLIKANDPAY_PAYMENT_NAME', $payment->payment_name);
				// keep that test to have it backwards compatible. Old version was deleting that column  when receiving an IPN notification
				if ($payment->payment_order_total and  $payment->payment_order_total != 0.00) {
					$html .= $this->getHtmlRowBE('KLIKANDPAY_PAYMENT_ORDER_TOTAL', ($payment->payment_order_total * 0.01) . " " . shopFunctions::getCurrencyByID($payment->payment_currency, 'currency_code_3'));
				}
				if ($payment->email_currency and  $payment->email_currency != 0) {
					//$html .= $this->getHtmlRowBE('KLIKANDPAY_PAYMENT_EMAIL_CURRENCY', shopFunctions::getCurrencyByID($payment->email_currency, 'currency_code_3'));
				}
				if ($payment->recurring) {

					$recurring_html = '<table class="adminlist">' . "\n";
					$recurring = json_decode($payment->recurring);
					$recurring_html .= $this->getHtmlRowBE('KLIKANDPAY_CONF_RECURRING_PERIODICTY', $payment->recurring_periodicity);
					$recurring_html .= $this->getHtmlRowBE('KLIKANDPAY_CONF_RECURRING_NUMBER', $payment->recurring_number);
					//$recurring_html .= $this->getHtmlRowBE(VmText::_('VMPAYMENT_KLIKANDPAY_CONF_RECURRING_PERIODICTY').' '. $payment->recurring_periodicity, VmText::_('VMPAYMENT_KLIKANDPAY_CONF_RECURRING_NUMBER').' '. $payment->recurring_number);
					for ($i = 1; $i < $payment->recurring_number; $i++) {
						$index_mont = "PBX_2MONT" . $i;
						$index_date = "PBX_DATE" . $i;
						$text_mont = vmText::_('VMPAYMENT_KLIKANDPAY_PAYMENT_RECURRING_2MONT') . " " . $i;
						$text_date = vmText::_('VMPAYMENT_KLIKANDPAY_PAYMENT_RECURRING_DATE') . " " . $i;
						//$recurring_html .= $this->getHtmlRowBE($text_date, $recurring->$index_date);
						//$recurring_html .= $this->getHtmlRowBE($text_mont, ($recurring->$index_mont * 0.01) . " " . shopFunctions::getCurrencyByID($payment->payment_currency, 'currency_code_3'));
						$recurring_html .= $this->getHtmlRowBE($recurring->$index_date, ($recurring->$index_mont * 0.01) . " " . shopFunctions::getCurrencyByID($payment->payment_currency, 'currency_code_3'));
					}
					$recurring_html .= '</table>' . "\n";
					$html .= $this->getHtmlRowBE('KLIKANDPAY_RECURRING', $recurring_html);
				}
				$first = FALSE;
			} else {
					$showOrderBEFields = $this->getOrderBEFields();
					$keyPrefix = 'KLIKANDPAY_RESPONSE_';
					$dbPrefix = 'klikandpay_response_';
					foreach ($showOrderBEFields as $showOrderBEField) {
						$orderField=$dbPrefix.$showOrderBEField;
						if (isset($payment->$orderField) and !empty($payment->$orderField)) {
							$key = $keyPrefix . $showOrderBEField;
							if (method_exists($this, 'getValueBE_' . $orderField)) {
								$function = 'getValueBE_' . $orderField;
								$payment->$orderField = $this->$function($payment->$orderField);
							}
							$html .= $this->getHtmlRowBE($key, $payment->$orderField);
						}
					}
					$html .= '<tr><td></td><td>
    <a href="#" class="KlikandpayLogOpener" rel="' . $payment->id . '" >
        <div style="background-color: white; z-index: 100; right:0; display: none; border:solid 2px; padding:10px;" class="vm-absolute" id="KlikandpayLog_' . $payment->id . '">';
				$klikandpay_data = json_decode($payment->klikandpay_fullresponse);
				foreach ($klikandpay_data as $key => $value) {
						$langKey = 'VMPAYMENT_' . $keyPrefix . $key;
						if ($lang->hasKey($langKey)) {
							$label = vmText::_($langKey);
						} else {
							$label = $key;
						}
						$html .= ' <b>' . $label . '</b>:&nbsp;' . wordwrap($value, 50, "\n", true) . '<br />';
					}

					$html .= ' </div>
        <span class="icon-nofloat vmicon vmicon-16-xml"></span>&nbsp;';
					$html .= vmText::_('VMPAYMENT_KLIKANDPAY_VIEW_TRANSACTION_LOG');
					$html .= '  </a>';
					$html .= ' </td></tr>';
			}
		}

		$html .= '</table>' . "\n";
		$doc = JFactory::getDocument();
		$js = "
	jQuery().ready(function($) {
		$('.KlikandpayLogOpener').click(function() {
			var logId = $(this).attr('rel');
			$('#KlikandpayLog_'+logId).toggle();
			return false;
		});
	});";
		$doc->addScriptDeclaration($js);

		return $html;
	}


	private function getExtraPluginNameInfo ($activeMethod) {
		$this->_currentMethod = $activeMethod;

		$klikandpayInterface = $this->_loadKlikandpayInterface();
		$extraInfo = $klikandpayInterface->getExtraPluginNameInfo();

		return $extraInfo;

	}

	/**
	 * @param plugin $method
	 * @return mixed|string
	 */
	protected function renderPluginName ($method) {
		$logos = $method->payment_logos;
		$display_logos = '';
		if (!empty($logos)) {
			$display_logos = $this->displayLogos($logos) . ' ';
		}
		$payment_name = $method->payment_name;
		if (!class_exists('VirtueMartCart')) {
			require(JPATH_VM_SITE . DS . 'helpers' . DS . 'cart.php');
		}
		$this->_currentMethod = $method;
		$extraInfo = $this->getExtraPluginNameInfo($method);

		$html = $this->renderByLayout('render_pluginname', array(
		                                                        'shop_mode'                   => $method->shop_mode,
		                                                        'virtuemart_paymentmethod_id' => $method->virtuemart_paymentmethod_id,
		                                                        'logo'                        => $display_logos,
		                                                        'payment_name'                => $payment_name,
		                                                        'payment_description'         => $method->payment_desc,
		                                                        'extraInfo'                   => $extraInfo,
		                                                   ));
		$html = $this->rmspace($html);
		return $html;
	}

	private function rmspace ($buffer) {
		return preg_replace('~>\s*\n\s*<~', '><', $buffer);
	}

	function getCosts (VirtueMartCart $cart, $method, $cart_prices) {

		if (preg_match('/%$/', $method->cost_percent_total)) {
			$cost_percent_total = substr($method->cost_percent_total, 0, -1);
		} else {
			$cost_percent_total = $method->cost_percent_total;
		}
		return ($method->cost_per_transaction + ($cart_prices['salesPrice'] * $cost_percent_total * 0.01));
	}

	/**
	 * Check if the payment conditions are fulfilled for this payment method
	 *
	 * @author: Valerie Isaksen
	 *
	 * @param $cart_prices: cart prices
	 * @param $payment
	 * @return true: if the conditions are fulfilled, false otherwise
	 *
	 */
	protected function checkConditions ($cart, $method, $cart_prices) {
		//vmTrace('checkConditions', true);
		//$this->debugLog( $cart_prices['salesPrice'], 'checkConditions','debug');
		$this->_currentMethod = $method;
		$klikandpayInterface = $this->_loadKlikandpayInterface();

		$this->convert_condition_amount($method);
		$address = (($cart->ST == 0) ? $cart->BT : $cart->ST);

		$amount = $this->getCartAmount($cart_prices);
		$amount_cond = ($amount >= $this->_currentMethod->min_amount AND $amount <= $this->_currentMethod->max_amount
			OR
			($this->_currentMethod->min_amount <= $amount AND ($this->_currentMethod->max_amount == 0)));


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
		if (in_array($address['virtuemart_country_id'], $countries) || count($countries) == 0) {
			if ($amount_cond) {
				return TRUE;
			}
		}
		$this->debugLog(' FALSE', 'checkConditions', 'debug');
		return FALSE;
	}

	function convert_condition_amount (&$method) {
		$method->min_amount = (float)str_replace(',', '.', $method->min_amount);
		$method->max_amount = (float)str_replace(',', '.', $method->max_amount);
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
	function plgVmOnStoreInstallPaymentPluginTable ($jplugin_id) {

		return $this->onStoreInstallPluginTable($jplugin_id);
	}


	/**
	 * This event is fired after the payment method has been selected. It can be used to store
	 * additional payment info in the cart.
	 *
	 * @author Max Milbers
	 * @author Valérie isaksen
	 *
	 * @param VirtueMartCart $cart: the actual cart
	 * @return null if the payment was not selected, true if the data is valid, error message if the data is not vlaid
	 *
	 */
	public function plgVmOnSelectCheckPayment (VirtueMartCart $cart, &$msg) {

		return $this->OnSelectCheck($cart);
	}

	/**
	 * plgVmDisplayListFEPayment
	 * This event is fired to display the pluginmethods in the cart (edit shipment/payment) for exampel
	 *
	 * @param object  $cart Cart object
	 * @param integer $selected ID of the method selected
	 * @return boolean True on succes, false on failures, null when this plugin was not selected.
	 * On errors, JError::raiseWarning (or JError::raiseError) must be used to set a message.
	 *
	 * @author Valerie Isaksen
	 */
	public function plgVmDisplayListFEPayment (VirtueMartCart $cart, $selected = 0, &$htmlIn) {

		return $this->displayListFE($cart, $selected, $htmlIn);
	}

	/*
* plgVmonSelectedCalculatePricePayment
* Calculate the price (value, tax_id) of the selected method
* It is called by the calculator
* This function does NOT to be reimplemented. If not reimplemented, then the default values from this function are taken.
* @author Valerie Isaksen
* @cart: VirtueMartCart the current cart
* @cart_prices: array the new cart prices
* @return null if the method was not selected, false if the shiiping rate is not valid any more, true otherwise
*
*
*/

	public function plgVmonSelectedCalculatePricePayment (VirtueMartCart $cart, array &$cart_prices, &$cart_prices_name) {

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
	function plgVmOnCheckAutomaticSelectedPayment (VirtueMartCart $cart, array $cart_prices = array()) {

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
	public function plgVmOnShowOrderFEPayment ($virtuemart_order_id, $virtuemart_paymentmethod_id, &$payment_name) {

		$this->onShowOrderFE($virtuemart_order_id, $virtuemart_paymentmethod_id, $payment_name);
	}

	/**
	 * This event is fired during the checkout process. It can be used to validate the
	 * method data as entered by the user.
	 *
	 * @return boolean True when the data was valid, false otherwise. If the plugin is not activated, it should return null.
	 * @author Max Milbers
	 */
	public function plgVmOnCheckoutCheckDataPayment (VirtueMartCart $cart) {
		return true;
	}


	/**
	 * This method is fired when showing when priting an Order
	 * It displays the the payment method-specific data.
	 *
	 * @param integer $_virtuemart_order_id The order ID
	 * @param integer $method_id  method used for this order
	 * @return mixed Null when for payment methods that were not selected, text (HTML) otherwise
	 * @author Valerie Isaksen
	 */
	function plgVmonShowOrderPrintPayment ($order_number, $method_id) {

		return $this->onShowOrderPrint($order_number, $method_id);
	}

	/**
	 * Save updated order data to the method specific table
	 *
	 * @param array $_formData Form data
	 * @return mixed, True on success, false on failures (the rest of the save-process will be
	 * skipped!), or null when this method is not actived.

	public function plgVmOnUpdateOrderPayment(  $_formData) {
	return null;
	}
	 */
	/**
	 * Save updated orderline data to the method specific table
	 *
	 * @param array $_formData Form data
	 * @return mixed, True on success, false on failures (the rest of the save-process will be
	 * skipped!), or null when this method is not actived.

	public function plgVmOnUpdateOrderLine(  $_formData) {
	return null;
	}
	 */
	/**
	 * plgVmOnEditOrderLineBE
	 * This method is fired when editing the order line details in the backend.
	 * It can be used to add line specific package codes
	 *
	 * @param integer $_orderId The order ID
	 * @param integer $_lineId
	 * @return mixed Null for method that aren't active, text (HTML) otherwise

	public function plgVmOnEditOrderLineBE(  $_orderId, $_lineId) {
	return null;
	}
	 */

	/**
	 * This method is fired when showing the order details in the frontend, for every orderline.
	 * It can be used to display line specific package codes, e.g. with a link to external tracking and
	 * tracing systems
	 *
	 * @param integer $_orderId The order ID
	 * @param integer $_lineId
	 * @return mixed Null for method that aren't active, text (HTML) otherwise

	public function plgVmOnShowOrderLineFE(  $_orderId, $_lineId) {
	return null;
	}
	 */
	function plgVmDeclarePluginParamsPayment ($name, $id, &$data) {
		return $this->declarePluginParams('payment', $name, $id, $data);
	}

	function plgVmSetOnTablePluginParamsPayment ($name, $id, &$table) {
		return $this->setOnTablePluginParams($name, $id, $table);
	}


	/**
	 * @param $post_variables
	 * @return string
	 */
	function getConfirmedHtml ($post_variables, $interface) {
		$server = $interface->getKlikandpayServerUrl();
		$this->debugLog(var_export($post_variables, true), 'getConfirmedHtml', 'debug', false);
		// add spin image
		$html = '<html><head><title>Redirection</title></head><body><div style="margin: auto; text-align: center;">';
		if ($this->_currentMethod->debug) {
			$html .= '<form action="' . $server . '" method="post" name="vm_klikandpay_form" target="klikandpay">';
		} else {
			$html .= '<form action="' . $server . '" method="post" name="vm_klikandpay_form" >';
		}

		foreach ($post_variables as $name => $value) {
			$html .= '<input type="hidden" name="' . $name . '" value="' . $value . '" />';
		}

		if ($this->_currentMethod->debug) {
			$this->debugLog($this->_currentMethod->virtuemart_paymentmethod_id, 'sendPostRequest: payment method', 'debug');
			$html .= '<div style="background-color:red;color:white;padding:10px;">
						<input type="submit"  value="The method is in debug mode. Click here to be redirected to Klikandpay" />
						</div>';
			$this->debugLog($post_variables, 'sendPostRequest:', 'debug');

		} else {

			$html .= '<input type="submit"  value="' . JText::_('VMPAYMENT_KLIKANDPAY_REDIRECT_MESSAGE') . '" />
					<script type="text/javascript">';
			$html .= '		document.vm_klikandpay_form.submit();';
			$html .= '	</script>';
		}
		$html .= '</form></div>';
		$html .= '</body></html>';

		return $html;
	}


	function verif_ip ($method) {

		$ip_adresses = explode("-", $method->ips);
		if (is_array($ip_adresses)) {
			foreach ($ip_adresses as $ip_adresse) {
				if (trim($ip_adresse) == $_SERVER['REMOTE_ADDR']) {
					return TRUE;
				}
			}
			return FALSE;
		}
		// it is not an array: the customer does not want ot check for IP
		return TRUE;
	}


	/**
	 * @param $response
	 * @param $order
	 * @return null|string
	 */
	function getResponseHTML ($order, $payments, $extra_comment) {
		$transactionId='';
		$success=false;
		if (count($payments)>1){
			$last_payment=end($payments);
			$transactionId= $last_payment->klikandpay_response_TRANSACTIONID;
			$success= $this->isResponseSuccess( $last_payment->klikandpay_response_RESPONSE);
		}

		$payment_name = $this->renderPluginName($this->_currentMethod);
		VmConfig::loadJLang('com_virtuemart_orders', TRUE);
		$q = 'SELECT `currency_code_3` FROM `#__virtuemart_currencies` WHERE `virtuemart_currency_id`="' . $order['details']['BT']->order_currency . '" ';
		$db = JFactory::getDBO();
		$db->setQuery($q);
		$currency_numeric_code = $db->loadResult();
		$html = $this->renderByLayout('response', array(
		                                               "success"       => $success,
		                                               "payment_name"  => $payment_name,
		                                               "transactionId" => $transactionId,
		                                               "amount"        =>  $order['details']['BT']->order_total,
		                                               "extra_comment" => $extra_comment,
		                                               "currency"      => $currency_numeric_code,
		                                               "order_number"  => $order['details']['BT']->order_number,
		                                               "order_pass"    => $order['details']['BT']->order_pass,
		                                          ));
		return $html;


	}
	function  isResponseSuccess ($response) {
		$success = ($response == self::KLIKANDPAY_RESPONSE_SUCCESS);
		return $success;
	}
	/*********************/
	/* Private functions */
	/*********************/
	private function _loadKlikandpayInterface () {

		if ($this->_currentMethod->integration == 'recurring') {
			if (!class_exists('KlikandpayHelperKlikandpayRecurring')) {
				require(JPATH_SITE . '/plugins/vmpayment/klikandpay/klikandpay/helpers/recurring.php');
			}
			$klikandpayInterface = new KlikandpayHelperKlikandpayRecurring($this->_currentMethod, $this);
		} elseif ($this->_currentMethod->integration == 'subscribe') {
			if (!class_exists('KlikandpayHelperKlikandpaySubscribe')) {
				require(JPATH_SITE . '/plugins/vmpayment/klikandpay/klikandpay/helpers/subscribe.php');
			}
			$klikandpayInterface = new KlikandpayHelperKlikandpaySubscribe($this->_currentMethod, $this);
		} else {
			$klikandpayInterface = new KlikandpayHelperKlikandpay($this->_currentMethod, $this);
		}
		return $klikandpayInterface;
	}


	function getEmailCurrency (&$method) {

		if (!isset($method->email_currency)  or $method->email_currency == 'vendor') {
			// 	    if (!class_exists('VirtueMartModelVendor')) require(JPATH_VM_ADMINISTRATOR . DS . 'models' . DS . 'vendor.php');
			$vendorId = 1; //VirtueMartModelVendor::getLoggedVendor();
			$db = JFactory::getDBO();

			$q = 'SELECT   `vendor_currency` FROM `#__virtuemart_vendors` WHERE `virtuemart_vendor_id`=' . $vendorId;
			$db->setQuery($q);
			return $db->loadResult();
		} else {
			return $method->payment_currency; // either the vendor currency, either same currency as payment
		}
	}


	private function setRetourParams ($order, $context) {
		$params = $order['details']['BT']->virtuemart_paymentmethod_id . ':' . $order['details']['BT']->order_number . ':' . $context;
		if (!class_exists('vmCrypt')) {
			require(JPATH_VM_ADMINISTRATOR . DS . 'helpers' . DS . 'vmcrypt.php');
		}
		$cryptedParams = vmCrypt::encrypt($params);
		$cryptedParams = base64_encode($cryptedParams);
		return $cryptedParams;
	}

	private function getRetourParams ($cryptedParams) {
		if (!class_exists('vmCrypt')) {
			require(JPATH_VM_ADMINISTRATOR . DS . 'helpers' . DS . 'vmcrypt.php');
		}
		$cryptedParams = base64_decode($cryptedParams);
		$params = vmCrypt::decrypt($cryptedParams);
		$paramsArray = explode(":", $params);
		$retourParams['virtuemart_paymentmethod_id'] = $paramsArray[0];
		$retourParams['order_number'] = $paramsArray[1];
		$retourParams['context'] = $paramsArray[2];
		return $retourParams;
	}


	private function getContext () {

		$session = JFactory::getSession();
		return $session->getId();
	}

	private function isValidContext ($context) {
		if ($this->getContext() == $context) {
			return true;
		}
		return false;
	}
	function getOrderBEFields () {
		$fields = array('RESPONSE', 'NUMXKP','SCOREXKP','TRANSACTIONID','AUTHID');
		return $fields;

	}

	/**
	 * @param string $message
	 * @param string $title
	 * @param string $type
	 * @param bool   $echo
	 * @param bool   $doVmDebug
	 */
	public function debugLog ($message, $title = '', $type = 'message', $echo = false, $doVmDebug = false) {

		if ($this->_currentMethod->debug) {
			$this->debug($message, $title, true);
		}

		if ($echo) {
			echo $message . '<br/>';
		}


		parent::debugLog($message, $title, $type, $doVmDebug);
	}

	public function debug ($subject, $title = '', $echo = true) {

		$debug = '<div style="display:block; margin-bottom:5px; border:1px solid red; padding:5px; text-align:left; font-size:10px;white-space:nowrap; overflow:scroll;">';
		$debug .= ($title) ? '<br /><strong>' . $title . ':</strong><br />' : '';
		//$debug .= '<pre>';
		if (is_array($subject)) {
			$debug .= str_replace("=>", "&#8658;", str_replace("Array", "<font color=\"red\"><b>Array</b></font>", nl2br(str_replace(" ", " &nbsp; ", print_r($subject, true)))));
		} else {
			//$debug .= str_replace("=>", "&#8658;", str_replace("Array", "<font color=\"red\"><b>Array</b></font>", (str_replace(" ", " &nbsp; ", print_r($subject, true)))));
			$debug .= str_replace("=>", "&#8658;", str_replace("Array", "<font color=\"red\"><b>Array</b></font>", print_r($subject, true)));

		}

		//$debug .= '</pre>';
		$debug .= '</div>';
		if ($echo) {
			echo $debug;
		} else {
			return $debug;
		}
	}

}

// No closing tag
