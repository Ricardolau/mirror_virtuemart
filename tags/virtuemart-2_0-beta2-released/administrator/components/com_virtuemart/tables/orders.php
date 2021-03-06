<?php
/**
*
* Orders table
*
* @package	VirtueMart
* @subpackage Orders
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

/**
 * Orders table class
 * The class is is used to manage the orders in the shop.
 *
 * @package	VirtueMart
 * @author RolandD
 */
class TableOrders extends JTable {

	/** @var int Primary key */
	var $order_id = 0;
	/** @var int User ID */
	var $user_id = 0;
	/** @var int Vendor ID */
	var $vendor_id = 0;
	/** @var int Order number */
	var $order_number = NULL;
	/** @var int User info ID */
	var $user_info_id = NULL;
	/** @var decimal Order total */
	var $order_total = 0.00000;
	/** @var decimal Order subtotal */
	var $order_subtotal = 0.00000;
	/** @var decimal Order tax */
	var $order_tax = 0.00000;
	/** @var text Serialized tax details */
	var $order_tax_details = null;
	/** @var decimal Shipping costs */
	var $order_shipping = 0.00000;
	/** @var decimal Shipping cost tax */
	var $order_shipping_tax = 0.00000;
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
	/** @var int Creation date */
	var $cdate = NULL;
	/** @var int Last modified date */
	var $mdate = NULL;
	/** @var int Shipping method ID */
	var $ship_method_id = NULL;
	/** @var text Customer note */
	var $customer_note = 0;
	/** @var string Users IP Address */
	var $ip_address = 0;


	/**
	 * @param $db Class constructor; connect to the database
	 */
	function __construct($db) {
		parent::__construct('#__vm_orders', 'order_id', $db);
	}

	/**
	 * Overloaded delete() to delete records from order_user_info and order payment as well,
	 * and write a record to the order history (TODO Or should the hist table be cleaned as well?)
	 * 
	 * @var integer Order id
	 * @return boolean True on success
	 * @author Oscar van Eijk
	 */
	function delete($id)
	{
		$this->_db->setQuery('DELETE from `#__vm_order_user_info` WHERE `order_id` = ' . $id);
		if ($this->_db->query() === false) {
			$this->setError($this->_db->getError());
			return false;
		}
		$this->_db->setQuery('DELETE from `#__vm_order_payment` WHERE `order_id` = ' . $id);
		if ($this->_db->query() === false) {
			$this->setError($this->_db->getError());
			return false;
		}

		$_q = 'INSERT INTO `#__vm_order_history` ('
				.	' order_status_history_id'
				.	',order_id'
				.	',order_status_code'
				.	',date_added'
				.	',customer_notified'
				.	',comments'
				.') VALUES ('
				.	' NULL'
				.	','.$id
				.	",'-'"
				.	',NOW()'
				.	',0'
				.	",'Order deleted'"
			.')';

		$this->_db->setQuery($_q);
		$this->_db->query(); // Ignore error here
		return parent::delete($id);
		
	}
	
}

