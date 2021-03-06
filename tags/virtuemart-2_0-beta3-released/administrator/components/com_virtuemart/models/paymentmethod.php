<?php
/**
*
* Data module for shop calculation rules
*
* @package	VirtueMart
* @subpackage  Calculation tool
* @author Max Milbers
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

jimport( 'joomla.application.component.model');

class VirtueMartModelPaymentmethod extends JModel
{
	/** @var array Array of Primary keys */
    private $_cid;
	/** @var integer Primary key */
    private $_id;
	/** @var objectlist paymentmethod  data */
    private $_data;
	/** @var integer Total number of paymentmethods in the database */
	private $_total;
	/** @var pagination Pagination for paymentmethod list */
	private $_pagination;


    /**
     * Constructor for the paymentmethod model.
     *
     * The paym id is read and detmimined if it is an array of ids or just one single id.
     *
     * @author Max Milbers
     */
    public function __construct()
    {
        parent::__construct();

		// Get the pagination request variables
		$mainframe = JFactory::getApplication() ;
		$limit = $mainframe->getUserStateFromRequest('global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int');
		$limitstart = $mainframe->getUserStateFromRequest(JRequest::getVar('option').'.limitstart', 'limitstart', 0, 'int');

		// Set the state pagination variables
		$this->setState('limit', $limit);
		$this->setState('limitstart', $limitstart);

        // Get the calc id or array of ids.
		$idArray = JRequest::getVar('cid',  0, '', 'array');
    	$this->setId((int)$idArray[0]);

    }

	/**
	 * Gets the paym_id with a plugin and vendorId
	 *
	 * @author Max Milbers
	 */
	 public function getIdbyCodeAndVendorId($jpluginId,$vendorId=1){
	 	if(!$jpluginId) return 0;
	 	$q = 'SELECT `paym_id` FROM #__vm_payment_method WHERE `paym_jplugin_id` = "'.$jpluginId.'" AND `vendor_id` = "'.$vendorId.'" ';
		$this->_db->setQuery($q);
		return $this->_db->loadResult();
	 }


    /**
     * Resets the paym id and data
     *
     * @author Max Milbers
     */
    public function setId($id)
    {
        $this->_id = $id;
        $this->_data = null;
    }


	/**
	 * Loads the pagination for the country table
	 *
     * @author RickG
     * @return JPagination Pagination for the current list of countries
	 */
    public function getPagination()
    {
		if (empty($this->_pagination)) {
			jimport('joomla.html.pagination');
			$this->_pagination = new JPagination($this->_getTotal(), $this->getState('limitstart'), $this->getState('limit'));
		}
		return $this->_pagination;
	}


	/**
	 * Gets the total number of countries
	 *
     * @author RickG
	 * @return int Total number of countries in the database
	 */
	public function _getTotal()
	{
    	if (empty($this->_total)) {
			$query = 'SELECT `paym_id` FROM `#__vm_payment_method`';
			$this->_total = $this->_getListCount($query);
        }
        return $this->_total;
    }


    /**
     * Retrieve the detail record for the current $id if the data has not already been loaded.
     *
     * @author Max Milbers
     */
	public function getPaym()
	{

//		$db = JFactory::getDBO();

  		if (empty($this->_data)) {
   			$this->_data = $this->getTable('payment_method');
   			$this->_data->load((int)$this->_id);
  		}

  		if (!$this->_data) {
   			$this->_data = new stdClass();
   			$this->_id = 0;
//   			$this->_data = null;
  		}

  		if(empty($this->_data->paym_vendor_id)){
  		   	if(!class_exists('VirtueMartModelVendor')) require(JPATH_VM_ADMINISTRATOR.DS.'models'.DS.'vendor.php');
   			$this->_data->paym_vendor_id = VirtueMartModelVendor::getLoggedVendor();
  		}

  		if(!empty($this->_id)){
			/* Add the paymentmethod shoppergroups */
			$q = 'SELECT `paym_shopper_group` FROM #__vm_payment_method_shoppergroup_xref WHERE `paym_id` = "'.$this->_id.'"';
			$this->_db->setQuery($q);
			$this->_data->paym_shopper_groups = $this->_db->loadResultArray();

			/* Add the accepted credit cards */
			$q = 'SELECT `paym_accepted_credit_card` FROM #__vm_payment_method_acceptedcreditcards_xref WHERE `paym_id` = "'.$this->_id.'"';
			$this->_db->setQuery($q);
			$this->_data->paym_creditcards = $this->_db->loadResultArray();


			if (VmConfig::isJ15()) {
				$table = '#__plugins';
				$ext_id = 'id';
			} else {
				$table = '#__extensions';
				$ext_id = 'extension_id';
			}
			$q = 'SELECT `params` FROM `' . $table . '` WHERE `' . $ext_id . '` = "'.$this->_data->paym_jplugin_id.'"';
			$this->_db->setQuery($q);
			$this->_data->param = $this->_db->loadResult();
  		} else {
  			$this->_data->paym_shopper_groups = '';
  			$this->_data->paym_creditcards = '';
  			$this->_data->param = '';
  		}



  		return $this->_data;
	}

	/**
	 * Retireve a list of calculation rules from the database.
	 *
     * @author Max Milbers
     * @param string $onlyPuiblished True to only retreive the publish Calculation rules, false otherwise
     * @param string $noLimit True if no record count limit is used, false otherwise
	 * @return object List of calculation rule objects
	 */
	public function getPayms($onlyPublished=false, $noLimit=false){
		$query = 'SELECT * FROM `#__vm_payment_method` ';
		if ($onlyPublished) {
			$query .= 'WHERE `#__vm_payment_method`.`published` = 1';
		}
		$query .= ' ORDER BY `#__vm_payment_method`.`paym_name`';
		if ($noLimit) {
			$this->_data = $this->_getList($query);
		} else {
			$this->_data = $this->_getList($query, $this->getState('limitstart'), $this->getState('limit'));
		}

		if(empty($this->_db))  $this->_db = JFactory::getDBO();

		if(isset($this->_data)){

			if(!class_exists('modelfunctions')) require(JPATH_VM_ADMINISTRATOR.DS.'helpers'.DS.'modelfunctions.php');
			foreach ($this->_data as $data){
				/* Add the paymentmethod shoppergroups */
				$q = 'SELECT `paym_shopper_group` FROM #__vm_payment_method_shoppergroup_xref WHERE `paym_id` = "'.$data->paym_id.'"';
				$this->_db->setQuery($q);
				$data->paym_shopper_groups = $this->_db->loadResultArray();

				/* Add the accepted credit cards */
				$q = 'SELECT `paym_accepted_credit_card` FROM #__vm_payment_method_acceptedcreditcards_xref WHERE `paym_id` = "'.$data->paym_id.'"';
				$this->_db->setQuery($q);
				$data->paym_creditcards = $this->_db->loadResultArray();

				/* Write the first 5 shoppergroups in the list */
				$data->paymShoppersList = modelfunctions::buildGuiList('paym_shopper_group','#__vm_payment_method_shoppergroup_xref','paym_id',$data->paym_id,'shopper_group_name','#__vm_shopper_group','shopper_group_id');

				/* Write the first 5 accepted creditcards in the list */
				$data->paymCreditCardList = modelfunctions::buildGuiList('paym_accepted_credit_card','#__vm_payment_method_acceptedcreditcards_xref','paym_id',$data->paym_id,'creditcard_name','#__vm_creditcard','creditcard_id');

				/* Add published from table plugins obsolete */
//				$q = 'SELECT `id` FROM #__plugins WHERE `element` = "'.$data->paym_element.'"';
//				$this->_db->setQuery($q);
//				$paym_jplugin_id = $this->_db->loadResult();
//
//				$q = 'SELECT `published` FROM #__plugins WHERE `id` = "'.$paym_jplugin_id.'"';
//				$this->_db->setQuery($q);
//				$data->published = $this->_db->loadResult();
			}

		}
		return $this->_data;
	}


	/**
	 * Bind the post data to the paymentmethod tables and save it
     *
     * @author Max Milbers
     * @return boolean True is the save was successful, false otherwise.
	 */
    public function store()
	{
		$table = $this->getTable('payment_method');

		$data = JRequest::get('post');

		if(isset($data['params'])){
			$params = new JParameter('');
			$params->bind($data['params']);
			$data['params'] = $params->toString();
		}
		if($data['vendor_id']) $data['paym_vendor_id'] = $data['vendor_id'];

		// Bind the form fields to the calculation table
		if (!$table->bind($data)) {
			$this->setError($table->getError());
//			$this->setError('Table bind didnt worked');
			return false;
		}

		// Make sure the calculation record is valid
		if (!$table->check()) {
			$this->setError($table->getError());
//			$this->setError('Table check didnt worked');
			return false;
		}

		// Save the record to the database
		if (!$table->store()) {
			$this->setError($table->getError());
//			$this->setError('Table store didnt worked');
			return false;
		}

		if(!class_exists('modelfunctions')) require(JPATH_VM_ADMINISTRATOR.DS.'helpers'.DS.'modelfunctions.php');
		modelfunctions::storeArrayData('#__vm_payment_method_shoppergroup_xref','paym_id','paym_shopper_group',$data['paym_id'],$data['shopper_group_id']);
		modelfunctions::storeArrayData('#__vm_payment_method_acceptedcreditcards_xref','paym_id','paym_accepted_credit_card',$data['paym_id'],$data['creditcard_id']);

		return true;
	}


	/**
     * Publish a field
     *
     * @author Max Milbers
     *
     */
	public function published( $row, $i, $variable = 'published' )
	{
		$imgY = 'tick.png';
		$imgX = 'publish_x.png';
		$img 	= $row->$variable ? $imgY : $imgX;
		$task 	= $row->$variable ? 'unpublish' : 'publish';
		$alt 	= $row->$variable ? JText::_( 'Published' ) : JText::_( 'Unpublished' );
		$action = $row->$variable ? JText::_( 'Unpublish Item' ) : JText::_( 'Publish item' );

		$href = '
		<a title="'. $action .'">
		<img src="images/'. $img .'" border="0" alt="'. $alt .'" /></a>'
		;
		return $href;
	}


	/**
	 * Delete all record ids selected
     *
     * @author Max Milbers
     * @return boolean True is the delete was successful, false otherwise.
     */
	public function delete()
	{
		$calcIds = JRequest::getVar('cid',  0, '', 'array');
    	$table = $this->getTable('payment_method');

    	foreach($calcIds as $calcId) {

    		if (!$table->delete($calcId)) {
        		$this->setError($table->getError());
        		return false;
    		}
        	else {
        		//$this->setError('Could not remove country states!');
        		return true;
        	}
    	}

    	return true;
	}


	/**
	 * Publish/Unpublish all the ids selected.
	 * Important !
	 * This function does change the table plugin and NOT the table paymentmethod!
     *
     * @author Max Milbers
     * @param boolean $publish True is the ids should be published, false otherwise.
     * @param the ids to alter
     * @return boolean True is the delete was successful, false otherwise.
     */
	public function publish($publish=false) {

    	if(!class_exists('modelfunctions')) require(JPATH_VM_ADMINISTRATOR.DS.'helpers'.DS.'modelfunctions.php');
		return modelfunctions::publish('cid','payment_method',$publish);

	}


	/**
	 * Publish/Unpublish all the ids selected
     *
     * @author jseros
     *
     * @return int 1 is the publishing action was successful, -1 is the unsharing action was successfully, 0 otherwise.
     */
	public function changeIsPercentagePublish($quotedId){

//		foreach ($categories as $id){

//			$quotedId = $this->_db->Quote($id);
			$query = 'SELECT discount_is_percentage
					  FROM #__vm_payment_method
					  WHERE paym_id = '. $quotedId;

			$this->_db->setQuery($query);
			$calc = $this->_db->loadObject();

			$publish = ($calc->calc_shopper_published > 0) ? 0 : 1;

			$query = 'UPDATE #__vm_payment_method
					  SET discount_is_percentage = '.$publish.'
					  WHERE paym_id = '.$quotedId;

			$this->_db->setQuery($query);

			if( !$this->_db->query() ){
				$this->setError( $this->_db->getErrorMsg() );
				return false;
			}

//		}

		return ($publish ? 1 : -1);
	}


	/**
	 * Due the new plugin system this should be obsolete
	 * function to render the payment plugin list
	 *
	 * @author Max Milbers
	 *
	 * @param radio list of creditcards
	 * @return html
	 */
	public function renderPaymentList($selectedPaym=0,$selecedCC=0){

		$payms = self::getPayms(false,true);
		$listHTML='';
		foreach($payms as $item){
			$checked='';
			if($item->paym_id==$selectedPaym){
				$checked='"checked"';
			}
			$listHTML .= '<input type="radio" name="paym_id" value="'.$item->paym_id.'" '.$checked.'>'.$item->paym_name.' <br />';
			$listHTML .= ' <br />';
		}

		return $listHTML;

	}

	/**
	 * function to render the creditcardlist
	 *
	 * @author Max Milbers
	 *
	 * @param radio list of creditcards
	 * @return html
	 */

	public function renderCreditCardRadioList($selected,$creditcardIds=0){
		$creditcardIds=0;
		if(!$creditcardIds){
			$creditcardIds = self::getPaymentAcceptedCreditCards();
		}

		if(!class_exists('VirtueMartModelCreditcard')) require(JPATH_VM_ADMINISTRATOR.DS.'models'.DS.'creditcard.php');
		$creditcardModel = new VirtueMartModelCreditcard();

		$listHTML='';

		if($creditcardIds){
			foreach($creditcardIds as $ccId){
				$item = $creditcardModel->getCreditCard($ccId);
				$checked='';
	//			foreach($selected as $select){
					if($item->creditcard_id==$selected){
						$checked='"checked"';
					}
	//			}
				$listHTML .= '<input type="radio" name="creditcard" value="'.$item->creditcard_id.'" '.$checked.'>'.$item->creditcard_name.' <br />';
			}
		}
		return $listHTML;
	}

	/**
	 * Gets the ids of accepted creditcards
	 *
	 * @return ids of Creditcards
	 */
	function getPaymentAcceptedCreditCards(){

		$data = array(0);
		if(empty($this->_db))  $this->_db = JFactory::getDBO();

		$query = 'SELECT `paym_accepted_credit_card` FROM `#__vm_payment_method_acceptedcreditcards_xref` ';
		$query .= 'WHERE `paym_id` = "'.$this->_id.'"';

		$this->_db->setQuery($query);
		$data = $this->_db->loadResultArray();

		return $data;
	}

	/**
	 * Check if the current payment method accepts credit cards
	 *
	 * @author Max Milbers
	 * @author Oscar van Eijk
	 *
	 * @param integer $paym_id Payment method ID
	 * @return boolean
	 */
	function hasCreditCard($paym_id)
	{
		$query = 'SELECT COUNT(*) AS c FROM `#__vm_payment_method_acceptedcreditcards_xref` WHERE `paym_id`="'.$paym_id.'"';
		if(empty($this->_db))  $this->_db = JFactory::getDBO();
		$this->_db->setQuery($query);
		$_r = $this->_db->loadAssoc();
		return ($_r['c'] > 0);
	}
}