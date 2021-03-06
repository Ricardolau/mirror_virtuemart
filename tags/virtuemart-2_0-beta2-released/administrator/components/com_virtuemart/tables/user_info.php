<?php
/**
*
* User Info Table
*
* @package	VirtueMart
* @subpackage User
* @author 	RickG, RolandD
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
 * User Info table class
 * The class is is used to manage the user_info table.
 *
 * @package	VirtueMart
 * @author 	RickG, RolandD
 */
class TableUser_info extends JTable {


	/** @var int Primary key */
	var $user_id = 0;
	
	/** @var int hidden userkey */
	var $user_info_id = 0;

//	var $user_is_vendor = 0;
	var $address_type = '';
	var $address_type_name;
	var $company = '';
	var $title ='';
 	var $last_name = '';
	var $first_name = '';
	var $middle_name = '';
	var $phone_1 = '';
	var $phone_2 = '';
	var $fax = '';
	var $address_1 = '';
	var $address_2 = '';
	var $city = '';
	var $state_id = '';
	var $country_id = '';
	var $zip = '';
	var $extra_field_1 = '';
	var $extra_field_2 = '';
	var $extra_field_3 = '';
	var $extra_field_4 = '';
	var $extra_field_5 = '';
	var $cdate = '';
	var $mdate = '';
//	var $perms = '';
//	var $bank_account_nr = '';
//	var $bank_name = '';
//	var $bank_sort_code = '';
//	var $bank_iban = '';
//	var $bank_account_holder = '';
//	var $bank_account_type = '';

	/**
	 * @author RickG
	 * @param $db A database connector object
	 */
	function __construct($db) {
		/* Make sure the custom fields are added */
		self::addUserFields();
		parent::__construct('#__vm_user_info', 'user_info_id', $db);
	}

	/**
	* Add the user fields to the table to make sure all gets updated
	*
	* @author RolandD
	*/
	private function addUserFields() {
		$db = JFactory::getDBO();
		/* Collect the table names for the product types */
		$customfields = array();
		$q = "SHOW COLUMNS FROM ".$db->nameQuote('#__vm_user_info');
		$db->setQuery($q);
		$fields = $db->loadObjectList();
		if (count($fields) > 0) {
			foreach ($fields as $key => $field) {
				$customfields[$field->Field] = $field->Default;
			}
			$this->setProperties($customfields);
		}
	}

	/**
	 * Add, change or drop userfields
	 *
	 * @param string $_act Action: ADD, DROP or CHANGE (synonyms available, see the switch cases)
	 * @param string $_col Column name
	 * @param string $_type Fieldtype
	 * @return boolean True on success
	 * @author Oscar van Eijk
	 */
	function _modifyColumn ($_act, $_col, $_type = '')
	{
		$_sql = "ALTER TABLE `#__vm_user_info` ";

		$_check_act = strtoupper(substr($_act, 0, 3));
		switch ($_check_act) {
			case 'ADD':
			case 'CRE': // Create
				$_sql .= "ADD $_col $_type ";
				break;
			case 'DRO': // Drop
			case 'DEL': // Delete
				$_sql .= "DROP $_col ";
				break;
			case 'MOD': // Modify
			case 'UPD': // Update
			case 'CHA': // Change
				$_sql .= "CHANGE $_col $_col $_type ";
				break;
		}

		$this->_db->setQuery($_sql);
		$this->_db->query();
		if ($this->_db->getErrorNum() != 0) {
			$this->setError(get_class( $this ).'::modify table - '.$this->_db->getErrorMsg());
			return false;
		}
		return true;
	} 
	
	/**
	* Stores/Updates a tax rate
	*
	*/
	public function store() {
		$k = $this->check();

		if ($k) $ret = $this->_db->updateObject( $this->_tbl, $this, $this->_tbl_key, false );
		else $ret = $this->_db->insertObject( $this->_tbl, $this, $this->_tbl_key);

		if (!$ret){
			$this->setError(get_class( $this ).'::store failed - '.$this->_db->getErrorMsg());
			return false;
		}
		else return true;
	}

	/**
	* Validates the user info record fields.
	*
	* @author RickG, RolandD
	* @return boolean True if the table buffer is contains valid data, false otherwise.
	*/
	public function check()
	{
		if (!empty($this->user_info_id)) {
			return true;
		}

		/* Check if a record exists */
		$q = "SELECT user_info_id
			FROM #__vm_user_info
			WHERE user_id = ".$this->user_id."
			AND address_type = ".$this->_db->Quote($this->address_type)."
			AND address_type_name = ".$this->_db->Quote($this->address_type_name);
		$this->_db->setQuery($q);
		$total = $this->_db->loadResultArray();

		if (count($total) > 0) {
			$this->user_info_id = $total[0];
			return true;
		} else {
			$this->user_info_id = md5(uniqid($this->user_id));
			$this->cdate = time();
			return false;
		}
	}

	/**
	 * Overloaded delete() to delete a list of user_info_id's based on the user id
	 * @var mixed id
	 * @return boolean True on success
	 * @author Oscar van Eijk
	 */
	function delete($id)
	{
		// TODO If $id is not numeric, assume it's a user_info_id. Validate if this is safe enough 
		if (!is_numeric($id)) {
			return (parent::delete($id));
		}
		// Implicit else
		$this->_db->setQuery('DELETE from `#__vm_user_info` WHERE `user_id` = ' . $id);
		if ($this->_db->query() === false) {
			$this->setError($this->_db->getError());
			return false;
		}
		return true;
	}
	
}

// No Closing tag
