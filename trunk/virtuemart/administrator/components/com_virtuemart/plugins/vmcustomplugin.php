<?php

/**
 * Abstract class for shipment plugins
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
 * @version $Id: vmpsplugin.php 4007 2011-08-31 07:31:35Z alatak $
 */
// Load the helper functions that are needed by all plugins
if (!class_exists('VmHTML')) require(JPATH_VM_ADMINISTRATOR . DS . 'helpers' . DS . 'html.php');
if (!class_exists('vmPlugin')) require(JPATH_VM_PLUGINS . DS . 'vmplugin.php');

// Get the plugin library
jimport('joomla.plugin.plugin');

if (!class_exists('vmPlugin'))
require(JPATH_VM_PLUGINS . DS . 'vmplugin.php');

/**
 * @package	VirtueMart
 * @subpackage Plugins
 * @author Oscar van Eijk
 * @author Patrick Kohl
 * @author Max Milbers
 */
abstract class vmCustomPlugin extends VmPlugin {


    /**
     * @var array List with all carriers the have been implemented with the plugin in the format
     * id => name
     */
    protected $customs;

	function __construct(& $subject, $config) {

		parent::__construct($subject, $config);

		$this->_tablepkey = 'virtuemart_product_id';
		$this->_tablename = '#__virtuemart_product_'.$this->_psType .'_plg_'. $this->_name;
		$this->_idName = 'virtuemart_custom_id';
		$this->_configTableFileName = $this->_psType.'s';
		$this->_configTableClassName = 'Table'.ucfirst($this->_psType).'s'; //TablePaymentmethods
		$this->_configTable = '#__virtuemart_customs';

	}

	function getActiveCustomPlugin($virtuemart_custom_id, &$customPlugin){

		//if($this->plugin = $this->selectedThisByMethodId($this->_psType,$virtuemart_custom_id)){
		if($this->plugin = $this->selectedThisByMethodId( $virtuemart_custom_id)){

		if (empty($this->plugin)) {
			$this->plugin->custom_jplugin_id = null;
			return $this->plugin ;
		}

		//Must use here the table to get valid params
		$this->plugin = $this->getVmPluginMethod($this->plugin->virtuemart_custom_id);

  		if(empty($this->plugin->virtuemart_vendor_id)){
  		   	if(!class_exists('VirtueMartModelVendor')) require(JPATH_VM_ADMINISTRATOR.DS.'models'.DS.'vendor.php');
   			$this->plugin->virtuemart_vendor_id = VirtueMartModelVendor::getLoggedVendor();
  		}
  		$customPlugin = $this->plugin;
//   		return $this->plugin;
		return true;
		}
	}

	/*
	 * helper to parse plugin parameters as object
	 *
	 */
	public function parseCustomParams(&$field) {

    	VmTable::bindParameterable($field,'custom_params',$this->_varsToPushParam);

    	if (empty($field->custom_value)) return 0 ;
    	if (!empty($field->custom_param) && is_string($field->custom_param)) $custom_param = json_decode($field->custom_param,true);
    	else $custom_param = array();
    	$field->custom_param = $custom_param;
    	foreach($field->custom_param as $k => $v){
    		if(!empty($v)){
    			$field->$k = $v;
    		}
    	}

	}
	protected function plgVmGetPluginInternalDataCustom(&$field){

	 	$datas = $this->getPluginInternalData($field->virtuemart_custom_id,'virtuemart_custom_id');

		if($datas){
			$attribsCalc = get_object_vars($datas);

			unset($attribsCalc['virtuemart_calc_id']);
			foreach($attribsCalc as $k=>$v){
				$calcData->$k = $v;
			}
		}

	}
	/**
	 * This is the actions which take place, when a product gets stored
	 *
	 * @param string $type atm valid 'product'
	 * @param array $data form data
	 * @param int $id virtuemart_product_id
	 */
    function OnStoreProduct($data,$plugin_param){

		if (key($plugin_param)!==$this->_name) return ;
		$key = key($plugin_param) ;
		$plugin_param[$key]['virtuemart_product_id'] = $data['virtuemart_product_id'];
		vmdebug('plgData',$plugin_param[$key]);
		$this->storePluginInternalData($plugin_param[$key]);

    }



    /**
    * Calculate the variant price by The plugin
    * override calculateModificators() in calculatorh.
    * Eg. recalculate price by a quantity set in the plugin
    * You must reimplement modifyPrice() in your plugin
    * or price is returned defaut custom_price
    */
    // 	 public function plgVmCalculatePluginVariant( $product, $field,$selected,$row){
    public function getCustomVariant($product, &$productCustomsPrice,$selected,$row){
		if ($productCustomsPrice->custom_element !==$this->_name) return ;
		vmPlugin::plgVmGetDeclaredPluginParams('vmcustom',$productCustomsPrice->custom_element,$productCustomsPrice->custom_jplugin_id);
		VmTable::bindParameterable($productCustomsPrice,'custom_params',$this->_varsToPushParam);

		static $pluginFields;
		if (!isset($pluginFields)) {
				 $pluginFields = JRequest::getVar('customPlugin',null );
				if ($pluginFields ==  null) $pluginFields = json_decode( $product->customPlugin, true);
		}
		return $pluginFields[$productCustomsPrice->virtuemart_custom_id][$this->_name] ;

    }

    /**
     * convert param for render and
     * display The plugin in cart
     * @ $view is "Module" for see in module, "" for see in cart
     */
    public function GetPluginInCart($product){
    	//$plgName = $productCustom->value;

		foreach($product->param as $k => $plg){
			if (key($plg)== $this->_name)
			return	$plg[$this->_name];
		}
    	return null ;

    }


	/**
	 * render the plugin with param  to display on product edit
	 * called by customfields inputTypePlugin
	 *
	 */
	public function plgVmSelectSearchableCustom(&$selectList)
	{
		return null;
	}

	/**
	 * render the plugin with param  to display on product edit
	 * called by customfields inputTypePlugin
	 *
	 */
	public function plgVmAddToSearch(&$where,$searchplugin)
	{

	}

	/**
	 * render the plugin with param  to display on product edit
	 * called by customfields inputTypePlugin
	 *
	 */
	public function GetNameByCustomId($custom_id)
	{
		static $custom_element ;
		if (isset($custom_element)) return $custom_element;
		$db = & JFactory::getDBO();
		$q = 'SELECT `custom_element` FROM `#__virtuemart_customs` WHERE `virtuemart_custom_id`='.(int)$custom_id;
		$db->setQuery($q);
		$custom_element = $db->loadResult();
		return $custom_element;

	}

}
