<?php

if (!defined('_VALID_MOS') && !defined('_JEXEC'))
    die('Direct Access to ' . basename(__FILE__) . ' is not allowed.');

/**
 *
 * a special type of 'paypal ':
 * @author Max Milbers
 * @author Valérie Isaksen
 * @version $Id$
 * @package VirtueMart
 * @subpackage payment
 * @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
 *
 * http://virtuemart.org
 */
class plgVMPaymentPaypal extends vmPaymentPlugin {

    var $_pelement;
    var $_tablename;

    /**
     * Constructor
     *
     * For php4 compatability we must not use the __constructor as a constructor for plugins
     * because func_get_args ( void ) returns a copy of all passed arguments NOT references.
     * This causes problems with cross-referencing necessary for the observer design pattern.
     *
     * @param object $subject The object to observe
     * @param array  $config  An array that holds the plugin configuration
     * @since 1.5
     */
    function plgVMPaymentPaypal(& $subject, $config) {
	$this->_pelement = basename(__FILE__, '.php');
	$this->_pelement = basename(__FILE__, '.php');
	$this->_tablename = '#__virtuemart_order_payment_' . $this->_pelement;
	$this->_createTable();
	parent::__construct($subject, $config);
	//  JPlugin::loadLanguage( 'plg_vmpayment_paypal', JPATH_ADMINISTRATOR );
    }

    /**
     * Create the table for this plugin if it does not yet exist.
     * @author Oscar van Eijk
     */
    protected function _createTable() {
	$scheme = DbScheme::get_instance();
	$scheme->create_scheme($this->_tablename);
	$schemeCols = array(
	    'id' => array(
		'type' => 'int'
		, 'length' => 11
		, 'auto_inc' => true
		, 'null' => false
	    )
	    , 'virtuemart_order_id' => array(
		'type' => 'int'
		, 'length' => 11
		, 'null' => false
	    )
	    , 'order_number' => array(
		'type' => 'varchar'
		, 'length' => 32
		, 'null' => false
	    )
	    , 'payment_method_id' => array(
		'type' => 'bigint'
		, 'length' => 20
		, 'null' => false
	    )
	    , 'paypal_custom' => array(
		'type' => 'varchar'
		, 'length' => 255
		, 'null' => false
	    )
	    , 'paypal_response_mc_gross' => array(
		'type' => 'text'
		, 'null' => false
	    )
	    , 'paypal_response_invoice' => array(
		'type' => 'text'
		, 'null' => false
	    )
	    , 'paypal_response_protection_eligibility' => array(
		'type' => 'text'
		, 'null' => false
	    ), 'paypal_response_payer_id' => array(
		'type' => 'text'
		, 'null' => false
	    ), 'paypal_response_tax' => array(
		'type' => 'text'
		, 'null' => false
	    )
	    , 'paypal_response_payment_date' => array(
		'type' => 'text'
		, 'null' => false
	    )
	    , 'paypal_response_payment_status' => array(
		'type' => 'text'
		, 'null' => false
	    )
	    , 'paypal_response_first_name' => array(
		'type' => 'text'
		, 'null' => false
	    ), 'paypal_response_mc_fee' => array(
		'type' => 'text'
		, 'null' => false
	    ), 'paypal_response_payer_email' => array(
		'type' => 'text'
		, 'null' => false
	    )
	    , 'paypal_response_payment_status' => array(
		'type' => 'text'
		, 'null' => false
	    )
	    , 'paypal_response_business' => array(
		'type' => 'text'
		, 'null' => false
	    ), 'paypal_response_receiver_email' => array(
		'type' => 'text'
		, 'null' => false
	    ), 'paypal_response_transaction_subject' => array(
		'type' => 'text'
		, 'null' => false
	    ), 'paypal_response_residence_country' => array(
		'type' => 'text'
		, 'null' => false
	    )
	    , 'paypal_response_notification' => array(
		'type' => 'text'
		, 'null' => false
	    )
	);
	$schemeIdx = array(
	    'idx_order_payment' => array(
		'columns' => array('virtuemart_order_id')
		, 'primary' => false
		, 'unique' => false
		, 'type' => null
	    )
	);
	$scheme->define_scheme($schemeCols);
	$scheme->define_index($schemeIdx);
	if (!$scheme->scheme(true)) {
	    JError::raiseWarning(500, $scheme->get_db_error());
	}
	$scheme->reset();
    }

    /**
     * Reimplementation of vmPaymentPlugin::plgVmOnCheckoutCheckPaymentData()
     * 	Here have to give all value for the BANK
     * @see components/com_virtuemart/helpers/vmPaymentPlugin::plgVmOnConfirmedOrderStorePaymentData()
     * @author Oscar van Eijk
     */
    function plgVmOnConfirmedOrderStorePaymentData($virtuemart_order_id, $orderData, $priceData) {
	return false;
    }

    function plgVmOnConfirmedOrderGetPaymentForm($order_number, $orderData, $return_context, &$html) {

	if (!$this->selectedThisPayment($this->_pelement, $orderData->virtuemart_paymentmethod_id)) {
	    return null; // Another method was selected, do nothing
	}

	$lang = JFactory::getLanguage();
	$lang->load('plg_vmpayment_paypal', JPATH_ADMINISTRATOR);

	$paramstring = $this->getVmPaymentParams($vendorId = 0, $orderData->virtuemart_paymentmethod_id);
	$params = new JParameter($paramstring);

	if (!class_exists('VirtueMartModelOrders'))
	    require( JPATH_VM_ADMINISTRATOR . DS . 'models' . DS . 'orders.php' );
	if (!class_exists('VirtueMartModelCurrency')
	)
	    require(JPATH_VM_ADMINISTRATOR . DS . 'models' . DS . 'currency.php');

	$usr = & JFactory::getUser();

	$usrBT = $orderData->BT;
	$usrST = (($orderData->ST === null) ? $orderData->BT : $orderData->ST);

	$database = JFactory::getDBO();


	$vendorModel = new VirtueMartModelVendor();
	$vendorModel->setId(1);
	$vendor = $vendorModel->getVendor();

	$currencyModel = new VirtueMartModelCurrency();
	$currency = $currencyModel->getCurrency($orderData->pricesCurrency);

	$merchant_email = $this->_getMerchantEmail($params);

	$testReq = $params->get('DEBUG') == 1 ? 'YES' : 'NO';

	$post_variables = Array(
	    'cmd' => '_ext-enter',
	    'redirect_cmd' => '_xclick',
	    'upload' => '1',
	    'business' => $merchant_email, //Email address or account ID of the payment recipient (i.e., the merchant).
	    'receiver_email' => $merchant_email, //Primary email address of the payment recipient (i.e., the merchant)
	    'item_name' => JText::_('VMPAYMENT_PAYPAL_ORDER_NUMBER') . ': ' . $order_number,
	    'order_number' => $order_number,
	    "order_id" => $order_number,
	    "invoice" => $order_number,
	    'custom' => $return_context,
	    "amount" => $orderData->pricesUnformatted['billTotal'],
	    "currency_code" => $currency->currency_code_3,
	    /*
	     * 1 – L'adresse spécifiée dans les variables pré-remplies remplace l'adresse de livraison enregistrée auprès de PayPal.
	     * Le payeur voit l'adresse qui est transmise mais ne peut pas la modifier.
	     * Aucune adresse n'est affichée si l'adresse n'est pas valable
	     * (par exemple si des champs requis, tel que le pays, sont manquants) ou pas incluse.
	     * Valeurs autorisées : 0, 1. Valeur par défaut : 0
	     */
	    "address_override" => "1", // 0 ??   Paypal does not allow your country of residence to ship to the country you wish to
	    "first_name" => $usrBT['first_name'],
	    "last_name" => $usrBT['last_name'],
	    "address1" => $usrBT['address_1'],
	    "address2" => $usrBT['address_2'],
	    "zip" => $usrBT['zip'],
	    "city" => $usrBT['city'],
	    "state" => ShopFunctions::getCountryByID($usrBT['virtuemart_state_id']),
	    "country" => ShopFunctions::getCountryByID($usrBT['virtuemart_country_id'], 'country_3_code'),
	    "email" => $usrBT['email'],
	    "night_phone_b" => $usrBT['phone_1'],
	    "return" => JROUTE::_(JURI::root() . 'index.php?option=com_virtuemart&view=paymentresponse&task=paymentresponsereceived&pelement=' . $this->_pelement . "&pm=" . $orderData->virtuemart_paymentmethod_id),
	    "notify_url" => JROUTE::_(JURI::root() . 'index.php?option=com_virtuemart&view=paymentresponse&task=paymentnotification&tmpl=component'),
	    "cancel_return" => JROUTE::_(JURI::root() . 'index.php?option=com_virtuemart&view=paymentresponse&task=paymentusercancel&on=' . $order_number . '&pm=' . $orderData->virtuemart_paymentmethod_id),
	    "undefined_quantity" => "0",
	    "ipn_test" => $params->get('debug'),
	    "pal" => "NRUBJXESJTY24",
	    // "image_url" => $vendor_image_url, // TO DO
	    "no_shipping" => "1",
	    "no_note" => "1");


	$qstring = '?';
	foreach ($post_variables AS $k => $v) {
	    $qstring .= ( empty($qstring) ? '' : '&')
		    . urlencode($k) . '=' . urlencode($v);
	}

	// Prepare data that should be stored in the database
	$dbValues['order_number'] = $order_number;
	$dbValues['payment_method_id'] = $orderData->virtuemart_paymentmethod_id;
	$dbValues['paypal_custom'] = $return_context;
	// TODO wait for PAYPAL return ???
	$this->writePaymentData($dbValues, $this->_tablename);

	$url = $this->_getPaypalUrlHttps($params);
	/*
	  // add spin image
	  echo '<form action="' . "https://" . $url . '" method="post" name="vm_paypal_form" >';
	  echo '<input type="image" name="submit" src="https://www.paypal.com/en_US/i/btn/x-click-but6.gif" alt="Click to pay with PayPal - it is fast, free and secure!" />';

	  foreach ($post_variables as $name => $value) {
	  echo '<input type="hidden" name="' . $name . '" value="' . htmlspecialchars($value) . '" />';
	  }
	  echo '</form>';


	  echo ' <script type="text/javascript">';
	  echo ' document.vm_paypal_form.submit();';
	  echo ' </script>';
	 * */

	// we can display the logo, or do the redirect
	$mainframe = JFactory::getApplication();
	$mainframe->redirect("https://" . $url . $qstring);


	return false; // don't delete the cart, don't send email
    }

    function plgVmOnPaymentResponseReceived(&$virtuemart_order_id, &$html) {
	// the payment itself should send the parameter needed.
	$pm = JRequest::getInt('pm', 0);
	$pelement = JRequest::getWord('pelement');

	if ($this->_pelement != $pelement) {
	    return null;
	}
	$vendorId = 0;
	$paramstring = $this->getVmPaymentParams($vendorId, $virtuemart_paymentmethod_id);
	$params = new JParameter($paramstring);
	$paypal_data = JRequest::get('post');
	$order_number = $paypal_data['invoice'];
	$return_context = $paypal_data['custom'];
	if (!class_exists('VirtueMartModelOrders'))
	    require( JPATH_VM_ADMINISTRATOR . DS . 'models' . DS . 'orders.php' );

	$virtuemart_order_id = VirtueMartModelOrders::getOrderIdByOrderNumber($order_number);

	$payment_name = $this->getThisPaymentName($virtuemart_paymentmethod_id);

	$html = $this->_getPaymentResponseHtml($paypal_data, $payment_name, $virtuemart_order_id);



	return true;
    }

    function plgVmOnPaymentUserCancel(&$virtuemart_order_id) {

	if (!class_exists('VirtueMartModelOrders'))
	    require( JPATH_VM_ADMINISTRATOR . DS . 'models' . DS . 'orders.php' );

	$order_number = JRequest::getVar('on');
	$pm = JRequest::getVar('pm');
	if (!$order_number)
	    return false;
	$db = JFactory::getDBO();
	$query = 'SELECT ' . $this->_tablename . '.`virtuemart_order_id` FROM ' . $this->_tablename
		. " WHERE  `order_number`= '" . $order_number ."'"
		. ' AND  `payment_method_id` = ' . $pm;
	$db->setQuery($query);
	$virtuemart_order_id = $db->loadResult();

	//fwrite($fp, "order" . $virtuemart_order_id);
	if (!$virtuemart_order_id) {
	    return null;
	}


	return true;
    }

    /*
     *   plgVmOnPaymentNotification() - This event is fired by Offline Payment. It can be used to validate the payment data as entered by the user.
     * Return:
     *  Plugins that were not selected must return null, otherwise True of False must be returned indicating Success or Failure.
     * Parameters:
     *  None
     *  @author Valerie Isaksen
     */

    function plgVmOnPaymentNotification(&$return_context, &$virtuemart_order_id, &$new_status) {
	//$fp = fopen("paypal.txt", "w");
	//fwrite($fp, "\ndebut");

	if (!class_exists('VirtueMartModelOrders'))
	    require( JPATH_VM_ADMINISTRATOR . DS . 'models' . DS . 'orders.php' );
	$paypal_data = JRequest::get('post');

	$virtuemart_order_id = VirtueMartModelOrders::getOrderIdByOrderNumber($paypal_data['invoice']);
	//fwrite($fp, "order" . $virtuemart_order_id);
	if (!$virtuemart_order_id) {
	    // send an email to admin, and ofc not update the order status: exit  is fine
	    exit;
	}

	$payment = $this->getPaymentDataByOrderId($virtuemart_order_id);

	if (!$payment) {
	    return null;
	}

	//fwrite($fp, $paypal_data);
	// get all know columns of the table
	$db = JFactory::getDBO();
	$query = 'SHOW COLUMNS FROM `' . $this->_tablename . '` ';
	$db->setQuery($query);
	$columns = $db->loadResultArray(0);

	//fwrite($fp, "\napres colums");

	foreach ($paypal_data as $key => $value) {
	    $post_msg .= $key . "=" . $value . "<br />";
	    $table_key = 'paypal_response_' . $key;
	    if (in_array($table_key, $columns)) {
		$response_fields[$table_key] = $value;
	    }
	}

	//$response_fields['paypal_response_notification'] = implode("|", $paypal_data); // raw data
	//fwrite($fp, "\napres notif" . $response_fields['paypal_response_notification']);
	// we want to check that custom param is the same
	// if not should Add a message in the BE,  send an email, and ofc not update the order status
	if (false) {
	    $query = 'SELECT ' . $this->_tablename . '.`payment_id` FROM ' . $this->_tablename
		    . ' LEFT JOIN #__virtuemart_orders ON   ' . $this->_tablename . '.`virtuemart_order_id` = #__virtuemart_orders.`virtuemart_order_id`
                    WHERE #__virtuemart_orders.`order_number`=' . $paypal_data['invoice']
		    . ' AND #__virtuemart_orders.`order_total` = ' . $paypal_data['mc_gross']
		    // . ' AND #__virtuemart_orders.`order_currency` = ' . $paypal_data['mc_currency']
		    . ' AND ' . $this->_tablename . '.`paypal_custom` = "' . $paypal_data['custom'] . '"';


	    $db = JFactory::getDBO();
	    $db->setQuery($query);
	    $result = $db->loadResult();
	}


	//fwrite($fp, "\n" . $payment->payment_method_id);
	$paramstring = $this->getVmPaymentParams($vendorId = 0, $payment->payment_method_id);
	//fwrite($fp, "\nparmastring" . $paramstring);
	$params = new JParameter($paramstring);
	//fwrite($fp, "\n" . $virtuemart_order_id);
	$this->updatePaymentData($response_fields, $this->_tablename, 'virtuemart_order_id', $virtuemart_order_id);

	if (!($error_msg = $this->_processIPN($paypal_data, $params) )) {
	    $new_state = $params->get('status_canceled');
	} else {


	    /*
	     * https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_html_IPNandPDTVariables
	     * The status of the payment:
	     * Canceled_Reversal: A reversal has been canceled. For example, you won a dispute with the customer, and the funds for the transaction that was reversed have been returned to you.
	     * Completed: The payment has been completed, and the funds have been added successfully to your account balance.
	     * Created: A German ELV payment is made using Express Checkout.
	     * Denied: You denied the payment. This happens only if the payment was previously pending because of possible reasons described for the pending_reason variable or the Fraud_Management_Filters_x variable.
	     * Expired: This authorization has expired and cannot be captured.
	     * Failed: The payment has failed. This happens only if the payment was made from your customer’s bank account.
	     * Pending: The payment is pending. See pending_reason for more information.
	     * Refunded: You refunded the payment.
	     * Reversed: A payment was reversed due to a chargeback or other type of reversal. The funds have been removed from your account balance and returned to the buyer. The reason for the reversal is specified in the ReasonCode element.
	     * Processed: A payment has been accepted.
	     * Voided: This authorization has been voided.
	     *
	     */
	    if (empty($paypal_data['payment_status']) || ($paypal_data['payment_status'] != 'Completed' && $paypal_data['payment_status'] != 'Pending')) {
		return false;
	    }
	    if ($paypal_data['payment_status'] == 'Completed') {
		$new_status = $params->get('status_success');
	    }
	}

	//fwrite($fp,"\nreturn");
	return true;
    }

    /**
     * Display stored payment data for an order
     * @see components/com_virtuemart/helpers/vmPaymentPlugin::plgVmOnShowOrderPaymentBE()
     */
    function plgVmOnShowOrderPaymentBE($virtuemart_order_id, $paymethod_id) {

	if (!$this->selectedThisPayment($this->_pelement, $paymethod_id)) {
	    return null; // Another method was selected, do nothing
	}
	$db = JFactory::getDBO();
	$q = 'SELECT * FROM `' . $this->_tablename . '` '
		. 'WHERE `virtuemart_order_id` = ' . $virtuemart_order_id;
	$db->setQuery($q);
	if (!($paymentTable = $db->loadObject())) {
	    JError::raiseWarning(500, $db->getErrorMsg());
	    return '';
	}

	$html = '<table class="admintable">' . "\n"
		. '	<thead>' . "\n"
		. '		<tr>' . "\n"
		. '			<td class="key" style="text-align: center;" colspan="2">' . JText::_('COM_VIRTUEMART_ORDER_PRINT_PAYMENT_LBL') . '</td>' . "\n"
		. '		</tr>' . "\n"
		. '	</thead>' . "\n"
		. '	<tr>' . "\n"
		. '		<td class="key">' . JText::_('VMPAYMENT_PAYPAL_NAME') . ': </td>' . "\n"
		. '		<td align="left">' . /* $this->getShippingName($shipper)  . */'</td>' . "\n"
		. '	</tr>' . "\n";
	foreach ($paymentTable as $key => $value) {
	    if (substr($key, 0, 6) == "paypal") {
		$html .= $this->getHtmlRowBE($key, $value);
	    }
	}
	$html .= '</table>' . "\n";
	return $html;
    }

    /**
     * Get ipn data, send verification to PayPal, run corresponding handler
     *
     * @param array $data
     * @return string Empty string if data is valid and an error message otherwise
     * @access protected
     */
    function _processIPN($paypal_data, $params) {
	$secure_post = $params->get('secure_post', '0');
	$paypal_url = $this->_getPaypalURL($params);
	// read the post from PayPal system and add 'cmd'
	$post_msg = 'cmd=_notify-validate';
	foreach ($data as $key => $value) {
	    if ($key != 'view' && $key != 'layout') {
		$value = urlencode($value);
		$post_msg .= "&$key=$value";
	    }
	}


	$this->checkPaypalIps($paypal_data['ipn_test']);

	// post back to PayPal system to validate
	$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
	$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$header .= "Content-Length: " . strlen($post_msg) . "\r\n\r\n";

	if ($secure_post) {
	    // If possible, securely post back to paypal using HTTPS
	    // Your PHP server will need to be SSL enabled
	    $fps = fsockopen('ssl://' . $paypal_url, 443, $errno, $errstr, 30);
	} else {
	    $fps = fsockopen($paypal_url, 80, $errno, $errstr, 30);
	}

	if (!$fps) {

	    return JText::sprintf('COM_VIRTUEMART_PAYPAL_ERROR_POSTING_IPN', $errstr, $errno); // send email
	} else {
	    fputs($fps, $header . $post_msg);
	    while (!feof($fps)) {
		$res = fgets($fps, 1024);

		if (strcmp($res, 'VERIFIED') == 0) {
		    return '';
		} elseif (strcmp($res, 'INVALID') == 0) {

		    return JText::_('COM_VIRTUEMART_PAYPAL_ERROR_IPN_VALIDATION');
		}
	    }
	}

	fclose($fps);
	return '';
    }

    function _getMerchantEmail($params) {
	return $params->get('sandbox') ? $params->get('sandbox_merchant_email') : $params->get('paypal_merchant_email');
    }

    function _getPaypalUrl($params) {

	$url = $params->get('sandbox') ? 'www.sandbox.paypal.com' : 'www.paypal.com';

	return $url;
    }

    function _getPaypalUrlHttps($params) {
	$url = $this->_getPaypalUrl($params);
	$url = $url . '/cgi-bin/webscr';

	return $url;
    }

    /*
     * CheckPaypalIPs
     * Cannot be checked with Sandbox
     * From VM1.1
     */

    function checkPaypalIps($test_ipn) {
	return;
	// Get the list of IP addresses for www.paypal.com and notify.paypal.com
	$paypal_iplist = array();
	$paypal_iplist = gethostbynamel('www.paypal.com');
	$paypal_iplist2 = array();
	$paypal_iplist2 = gethostbynamel('notify.paypal.com');
	$paypal_iplist3 = array();
	$paypal_iplist3 = array('216.113.188.202', '216.113.188.203', '216.113.188.204', '66.211.170.66');
	$paypal_iplist = array_merge($paypal_iplist, $paypal_iplist2, $paypal_iplist3);

	$paypal_sandbox_hostname = 'ipn.sandbox.paypal.com';
	$remote_hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

	$valid_ip = false;

	if ($paypal_sandbox_hostname == $remote_hostname) {
	    $valid_ip = true;
	    $hostname = 'www.sandbox.paypal.com';
	} else {
	    $ips = "";
	    // Loop through all allowed IPs and test if the remote IP connected here
	    // is a valid IP address
	    if (in_array($_SERVER['REMOTE_ADDR'], $paypal_iplist)) {
		$valid_ip = true;
	    }
	    $hostname = 'www.paypal.com';
	}

	if (!$valid_ip) {


	    $mailsubject = "PayPal IPN Transaction on your site: Possible fraud";
	    $mailbody = "Error code 506. Possible fraud. Error with REMOTE IP ADDRESS = " . $_SERVER['REMOTE_ADDR'] . ".
                        The remote address of the script posting to this notify script does not match a valid PayPal ip address\n
            These are the valid IP Addresses: $ips

            The Order ID received was: $invoice";
	    //vmMail( $mosConfig_mailfrom, $mosConfig_fromname, $debug_email_address, $mailsubject, $mailbody );

	    exit();
	}

	if (!($hostname == "www.sandbox.paypal.com" && $test_ipn == 1 )) {
	    $res = "FAILED";

	    $mailsubject = "PayPal Sandbox Transaction without Debug-Mode";
	    $mailbody = "Hello,
		A fatal error occured while processing a paypal transaction.
		----------------------------------
		Hostname: $hostname
		URI: $uri
		A Paypal transaction was made using the sandbox without your site in Paypal-Debug-Mode";
	    //vmMail($mosConfig_mailfrom, $mosConfig_fromname, $debug_email_address, $mailsubject, $mailbody );
	}
    }

    function _getPaymentResponseHtmlTr($col1, $col2) {
	$html = " <tr>
                                        <td class=\"key\" style=\"text-align: center;\" >" . $col1 . "</td>
                                        <td class=\"key\" style=\"text-align: center;\" >" . $col2 . "</td>
                                </tr>";
	return $html;
    }

    function _getPaymentResponseHtml($paypal_data, $payment_name, $orderId) {

	$html = " <table>
                        <thead>"
		. $this->_getPaymentResponseHTMLTr(JText::_('VMPAYMENT_PAYPAL_PAYMENT_INFO'), $payment_name)
		. "</thead>"
		. $this->_getPaymentResponseHTMLTr(JText::_('VMPAYMENT_PAYPAL_INVOICE'), $paypal_data['invoice'])
		. $this->_getPaymentResponseHTMLTr(JText::_('VMPAYMENT_PAYPAL_AMOUNT'), $paypal_data['mc_gross'] . " " . $paypal_data['mc_currency'])
		. "</table>";


	return $html;
    }

    function getPaymentValue($params) {
	return $params->get('payment_value', 0);
    }

    function getPaymentTaxId($params) {
	return $params->get('payment_tax_id', 0);
    }

    function getPaymentCost($params, $cart) {
	return $params->get('payment_value', 0);
    }

    function getHtmlRowBE($key, $value) {
	$html = "<tr>\n<td class='key'>" . JText::_('VMPAYMENT_PAYPAL_' . strtoupper($key)) . "</td>\n <td align='left'>" . $value . "</td>\n</tr>\n";
	return $html;
    }

}

// No closing tag
