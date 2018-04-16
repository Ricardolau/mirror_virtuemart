<?php
/**
*
* Order history table
*
* @package	VirtueMart
* @subpackage Orders
* @author RolandD
* @link ${PHING.VM.MAINTAINERURL}
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

if(!class_exists('VmTable'))require(VMPATH_ADMIN.DS.'helpers'.DS.'vmtable.php');

/**
 * Order history table class
 * The class is is used to manage the order history in the shop.
 *
 * @package	VirtueMart
 * @author RolandD
 */
class TableOrder_histories extends VmTable {

	/** @var int Primary key */
	var $virtuemart_order_history_id = 0;
	/** @var int Order ID */
	var $virtuemart_order_id = 0;
	/** @var char Order status code */
	var $order_status_code = 0;

	/** @var int Customer notified */
	var $customer_notified = 0;
	/** @var text Comments */
	var $comments = NULL;
	var $o_hash = NULL;

	/** @var int User ID */
	var $virtuemart_user_id = 0;
	/** @var int Vendor ID */
	var $virtuemart_vendor_id = 0;
	/** @var int Order number */
	var $order_number = NULL;
	var $order_pass = NULL;
	var $order_create_invoice_pass = 0;
	var $customer_number = NULL;
	/** @var decimal Order total */
	var $order_total = 0.00000;
	/** @var decimal Products sales prices */
	var $order_salesPrice = 0.00000;
	/** @var decimal Order Bill Tax amount */
	var $order_billTaxAmount = 0.00000;
	/** @var string Order Bill Tax */
	var $order_billTax = 0;
	/** @var decimal Order Bill Tax amount */
	var $order_billDiscountAmount = 0.00000;
	/** @var decimal Order  Products Discount amount */
	var $order_discountAmount = 0.00000;
	/** @var decimal Order subtotal */
	var $order_subtotal = 0.00000;
	/** @var decimal Order tax */
	var $order_tax = 0.00000;

	/** @var decimal Shipment costs */
	var $order_shipment = 0.00000;
	/** @var decimal Shipment cost tax */
	var $order_shipment_tax = 0.00000;
	/** @var decimal Shipment costs */
	var $order_payment = 0.00000;
	/** @var decimal Shipment cost tax */
	var $order_payment_tax = 0.00000;
	/** @var decimal Coupon value */
	var $coupon_discount = 0.00000;
	/** @var string Coupon code */
	var $coupon_code = NULL;
	/** @var decimal Order discount */
	var $order_discount = 0.00000;
	/** @var string Order currency */
	var $order_currency = NULL;
	/** @var char Order status */
	var $order_status = NULL;
	/** @var char User currency id */
	var $user_currency_id = NULL;
	/** @var char User currency rate */
	var $user_currency_rate = NULL;
	/** @var char User shoppergroups */
	var $user_shoppergroups = NULL;
	/** @var char User currency rate */
	var $payment_currency_id = NULL;
	/** @var char User currency rate */
	var $payment_currency_rate = NULL;

	/** @var int Payment method ID */
	var $virtuemart_paymentmethod_id = NULL;
	/** @var int Shipment method ID */
	var $virtuemart_shipmentmethod_id = NULL;
	/** @var string Users IP Address */
	var $ip_address = 0;
	/** @var char Order language */
	var $order_language = NULL;
	var $delivery_date = NULL;

	/**
	 * @param $db Class constructor; connect to the database
	 */
	function __construct($db) {
		parent::__construct('#__virtuemart_order_histories', 'virtuemart_order_history_id', $db);

		$this->setObligatoryKeys('virtuemart_order_id');
		//$this->setHashable('o_hash');
		$this->setOmittedHashFields(array('virtuemart_order_history_id'));
		$this->setLoggable();
	}

	function check(){

		if(empty($this->order_status_code) and !empty($this->order_status)){
			$this->order_status_code = $this->order_status;
		}
		if(empty($this->order_status) and !empty($this->order_status_code)){
			$this->order_status = $this->order_status_code;
		}
		return parent::check();
	}
}
// pure php no closing tag
