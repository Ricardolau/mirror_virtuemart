<?php
/**
*
* Data module for shop coupons
*
* @package	VirtueMart
* @subpackage Coupon
* @author Max Milbers
* @link ${PHING.VM.MAINTAINERURL}
* @copyright Copyright (c) 2018 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* @version $Id$
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

if(!class_exists('VmModel'))require(VMPATH_ADMIN.DS.'helpers'.DS.'vmmodel.php');

/**
 * Model class for shop coupons
 *
 * @package	VirtueMart
 * @subpackage Coupon
 */
class VirtueMartModelInvoice extends VmModel {

	/**
	 * constructs a VmModel
	 * setMainTable defines the maintable of the model
	 */
	function __construct() {
		parent::__construct();
		$this->setMainTable('invoices');
	}

	static function needInvoiceByOrderstatus($order_status, $confName = 'inv_os', $def = array('C')){

		$orderstatusForInvoice = VmConfig::get($confName,$def);
		if(!is_array($orderstatusForInvoice)) $orderstatusForInvoice = array($orderstatusForInvoice);

		$invoiceOrderStatus = false;
		if(in_array($order_status, $orderstatusForInvoice)){
			$invoiceOrderStatus = true;
		}
		 return $invoiceOrderStatus;
	}

	/**
	 * Checks if we need a new invoice and therefore, if we need a new invoice number
	 * @param $orderId
	 * @param bool $orderDetails
	 */
	static function needNewInvoiceNumber($orderId, $order, $layout = 'invoice'){

		$invoiceOrderStatus = self::needInvoiceByOrderstatus($order['details']['BT']->order_status);
		$refundOrderStatus = self::needInvoiceByOrderstatus($order['details']['BT']->order_status,'inv_osr',array('R'));

		if(!$invoiceOrderStatus and !$refundOrderStatus){
			return false;
		}

		$storedOrder = self::getOrder( $orderId );
		if(!$storedOrder){
			return false;
		}

		$hashOrder = self::hashOrder($order);
		$invoice = self::getInvoiceEntry($orderId,true,'*');
		if(!empty($storedOrder->o_hash) and $storedOrder->o_hash == $hashOrder){
			return false;
		} else {

			$path = self::getInvoicePath();
			$path .= shopFunctionsF::getInvoiceName($invoice['invoice_number'], $layout).'.pdf';
			//Last check here, does the invoice already exists? else we can just use the old one
			if(file_exists($path)){
				return true;
			} else {
				return false;
			}

		}
		//Compare hash of orderDetails and stored invoice hash
	}

	static function hashOrder($order){

		$b =vmJsapi::safe_json_encode($order['details']['BT']);
		$s =vmJsapi::safe_json_encode($order['details']['ST']);
		$i =vmJsapi::safe_json_encode($order['items']);
		$h = hash($b + $s + $i);
		vmdebug('hashOrder',$h,$order);
		return $h;
	}

	function createReferencedInvoiceNumber($orderId, $orderDetails = false, $layout = 'invoice') {

		//check if there is already an InvoiceEntry
		$invNu = self::getInvoiceEntry( $orderId, true, '*' );
		vmdebug( 'createReferencedInvoiceNumber', $orderId, $invNu );
		if(!VmConfig::get( 'ChangedInvCreateNewInvNumber', false ) and $invNu) {
			$invT = $this->getTable( 'invoices' );
			$invT->bind( $invNu );
			$invT->virtuemart_invoice_id = 0;
			$invT->created_on = '';
			$invT->created_by = 0;
			$invT->check();
			$invT->store();
			return $invT->invoice_number;
		} else {
			return self::createStoreNewInvoiceNumberById($orderId, $orderDetails);
		}
	}

	function createStoreNewInvoiceNumberById($orderId, $orderDetails = false){
		if(!$orderDetails) {
			$order = $this->getOrder( $orderId );
			$orderDetails = $order['details']['BT'];
		}
		$ret = $this->createStoreNewInvoiceNumber( $orderDetails );
		if(!empty($ret[0])){
			return $ret[0];
		} else {
			return false;
		}
	}

	public function createStoreNewInvoiceNumber($orderDetails){


		//$orderDetails = (array)$orderDetails;

		$data['virtuemart_order_id'] = $orderDetails['virtuemart_order_id'];

		$data['order_status'] = $orderDetails['order_status'];

		$data['virtuemart_vendor_id'] = $orderDetails['virtuemart_vendor_id'];

		JPluginHelper::importPlugin('vmextended');
		JPluginHelper::importPlugin('vmshopper');
		JPluginHelper::importPlugin('vmshipment');
		JPluginHelper::importPlugin('vmpayment');

		$dispatcher = JDispatcher::getInstance();
		// plugin returns invoice number, 0 if it does not want an invoice number to be created by Vm
		$plg_datas = $dispatcher->trigger('plgVmOnUserInvoice',array($orderDetails,&$data));

		if(!isset($data['invoice_number']) ) {
			// check the default configuration
			$orderstatusForInvoice = VmConfig::get('inv_os',array('C'));
			if(!is_array($orderstatusForInvoice)) $orderstatusForInvoice = array($orderstatusForInvoice); //for backward compatibility 2.0.8e
			$pdfInvoice = (int)VmConfig::get('pdf_invoice', 0); // backwards compatible
			$force_create_invoice=vRequest::getCmd('create_invoice', -1);
			// florian : added if pdf invoice are enabled

			if ( in_array($orderDetails['order_status'],$orderstatusForInvoice)  or $pdfInvoice==1  or $force_create_invoice==$orderDetails['order_create_invoice_pass'] ){
				$q = 'SELECT COUNT(1) FROM `#__virtuemart_invoices` WHERE `virtuemart_vendor_id`= "'.$orderDetails['virtuemart_vendor_id'].'" '; // AND `order_status` = "'.$orderDetails->order_status.'" ';
				$db = JFactory::getDBO();
				$db->setQuery($q);

				$count = $db->loadResult()+1;

				if(empty($data['invoice_number'])) {
					$date = date("Y-m-d");
					if(!class_exists('vmCrypt'))
						require(VMPATH_ADMIN.DS.'helpers'.DS.'vmcrypt.php');
					$data['invoice_number'] = str_replace('-', '', substr($date,2,8)).vmCrypt::getHumanToken(4).'0'.$count;
				}
			} else {
				return false;
			}
		}

		$table = $this->getTable('invoices');

		$table->bindChecknStore($data);

		return array($table->invoice_number,$table->created_on);
	}

	/**
	 * @author Valérie Isaksen
	 * @author Max Milbers
	 *
	 * @deprecated: use the function VirtueMartModelOrders::getInvoiceEntry instead
	 *
	 */
	static function getInvoiceNumber($virtuemart_order_id) {
		return self::getInvoiceEntry($virtuemart_order_id, true , '`invoice_number`' );
	}

	function getInvoiceNumbers($virtuemart_order_id){
		return $this->getInvoiceEntry($virtuemart_order_id, false, '`invoice_number`' );
	}

	/**
	 * @author Valérie Isaksen
	 * @author Max Milbers
	 */
	static function getInvoiceEntry($virtuemart_order_id, $last = true, $select = '`invoice_number`' ){

		$db = JFactory::getDBO();
		$q = 'SELECT '.$select.' FROM `#__virtuemart_invoices` WHERE `virtuemart_order_id`= "'.$virtuemart_order_id.'" ORDER BY `created_on` DESC ';
		if($last){
			$q .= ' Limit 1';
		}
		$db->setQuery($q);

		$single = true;
		if($select == '*' or strpos($select,',')!=0){
			$single = false;
		}
		if($last){
			if($single ){
				$res =  $db->loadResult();
			} else {
				$res = $db->loadAssoc();
			}
		} else {
			if($single ){
				$res = $db->loadColumn();
			} else {
				$res = $db->loadAssocList();
			}
		}
		//vmdebug('getInvoiceEntry ',$q,$res);
		return $res;
	}

	/**
	 * has Invoice
	 *
	 * @author Valérie Isaksen
	 * @param $order_id Id of the order
	 * @return  false if there is no invoice, $invoiceTable otherwise
	 */
	function hasInvoice($order_id) {
		$invoiceTable = $this->getTable('invoices');
		$invoiceTable->load($order_id,'virtuemart_order_id');
		if(empty($invoiceTable->invoice_number)){
			return false;
		}
		return $invoiceTable;
	}

	function getOrder($orderId){
		$oM = VmModel::getModel('orders');
		$o = $oM->getOrder( $orderId );
		return $o;
	}

	static function getInvoicePath(){
		$path = VmConfig::get('forSale_path',0);
		if(empty($path) ){
			vmError('No path set to store invoices');
			return false;
		} else {
			if(!class_exists('ShopFunctionsF')) require(VMPATH_SITE.DS.'helpers'.DS.'shopfunctionsf.php');
			$path .= shopFunctionsF::getInvoiceFolderName().DS;
			if(!file_exists($path)){
				vmError('Path wrong to store invoices, folder invoices does not exist '.$path);
				return false;
			} else if(!is_writable( $path )){
				vmError('Cannot store pdf, directory not writeable '.$path);
				return false;
			}
		}
		return $path;
	}
}

// pure php no closing tag