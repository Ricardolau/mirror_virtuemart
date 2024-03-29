<?php
/**
*
* Description
*
* @package	VirtueMart
* @subpackage
* @author
* @link https://virtuemart.net
* @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* @version $Id: view.html.php 3006 2011-04-08 13:16:08Z Milbo $
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

/**
 * HTML View class for the VirtueMart Component
 *
 * @package		VirtueMart
 * @author
 */
class VirtuemartViewCustom extends VmViewAdmin {

	function display($tpl = null) {

		$model = VmModel::getModel('custom');

		// TODO Make an Icon for custom
		$this->SetViewTitle('PRODUCT_CUSTOM_FIELD');

		$layoutName = vRequest::getCmd('layout', 'default');
		if ($layoutName == 'edit') {
			$this->addStandardEditViewCommands();
			$this->customPlugin = '';

			$this->custom = $model->getCustom();
			$this->fieldTypes = VirtueMartModelCustom::getCustomTypes();

			$this->customfields = VmModel::getModel('customfields');
 			//vmdebug('VirtuemartViewCustom',$this->custom);
			JPluginHelper::importPlugin('vmcustom');
			$retValue = vDispatcher::trigger('plgVmOnDisplayEditCustoms',array($this->custom->virtuemart_custom_id,&$this->customPlugin));

			$this->SetViewTitle('PRODUCT_CUSTOM_FIELD', $this->custom->custom_title);

			$selected=0;
			$this->custom->form = false;
			if(!empty($this->custom->custom_jplugin_id)) {
				vmLanguage::loadJLang('plg_vmpsplugin', false);
				JForm::addFieldPath(VMPATH_ADMIN .'/fields');
				$selected = $this->custom->custom_jplugin_id;
				// Get the payment XML.
				$formFile	= vRequest::filterPath( VMPATH_ROOT .'/plugins/vmcustom/'. $this->custom->custom_element . '/' . $this->custom->custom_element . '.xml');
				if (file_exists($formFile)){

					$form = JForm::getInstance($this->custom->custom_element, $formFile, array(),false, '//vmconfig | //config[not(//vmconfig)]');
					$this->custom->params = new stdClass();
					$varsToPush = vmPlugin::getVarsToPushFromForm($form);
					VmTable::bindParameterableToSubField($this->custom,$varsToPush);
					$props = $this->custom->getProperties();
					$form->bind($props);
					$this->custom->form = $form;

				}
			} else {
				$varsToPush = VirtueMartModelCustom::getVarsToPush($this->custom->field_type);

				if(!empty($varsToPush)){
					JForm::addFieldPath(VMPATH_ADMIN .'/fields');
					$formString = '<vmconfig>'.chr(10).'<fields name="params">'.chr(10).'<fieldset name="extraParams">'.chr(10);

					foreach($varsToPush as $key => $push){
						if ('_' == substr($key, 0, 1)) continue;
						//$default = 0;
						$formString .= '<field
						name="'.$key.'"
        				id="'.$key.'Field"
        				label="COM_VIRTUEMART_CUSTOM_PARAM_'.strtoupper($key).'"
        				description="COM_VIRTUEMART_CUSTOM_PARAM_'.strtoupper($key).'_DESC"
        				default="'.$push[0].'"
						';

						if(isset($push[2])){

							$extra = isset($push[3]['params'])? $push[3]['params']:'';
							$formString .= 'type="'.$push[2].'" '.$extra.'>';
							if(isset($push[3]['options'])){
								if(is_array($push[3]['options'])){
									foreach($push[3]['options'] as $k=>$desc){
										$formString .= '<option value="'.$k.'">'.$desc.'</option>';
									}
								}
							}
						} else if($push[1]=='int'){
							$formString .= 'type="radio" >
    											<option value="0">JNO</option>
    											<option value="1">JYES</option>';
						} else if($push[1]=='string'){
							$formString .= 'type="text" >'.chr(10);
						} else if($push[1]=='area'){
							$formString .= 'type="textarea" cols="10">'.chr(10);
						}
						$formString .= chr(10).'</field>'.chr(10);
					}
					$formString .= '</fieldset>'.chr(10).'</fields>'.chr(10).'</vmconfig>';
					$this->custom->form = JForm::getInstance($this->custom->field_type, $formString, array(),false, '//vmconfig | //config[not(//vmconfig)]');
					$this->custom->params = new stdClass();
					VmTable::bindParameterableToSubField($this->custom,$varsToPush);
					$this->custom->form->bind($this->custom->getProperties());

				}
			}

			$this->addHidden('ordering',$this->custom->ordering);
			$this->pluginList = self::renderInstalledCustomPlugins($selected);

        }
        else {

			JToolbarHelper::custom('createClone', 'copy', 'copy',  vmText::_('COM_VIRTUEMART_CLONE'), true);
			JToolbarHelper::custom('toggle.admin_only.1', 'publish','', vmText::_('COM_VIRTUEMART_TOGGLE_ADMIN'), true);
			JToolbarHelper::custom('toggle.admin_only.0', 'unpublish','', vmText::_('COM_VIRTUEMART_TOGGLE_ADMIN'), true);
			JToolbarHelper::custom('toggle.is_hidden.1', 'publish','', vmText::_('COM_VIRTUEMART_TOGGLE_HIDDEN'), true);
			JToolbarHelper::custom('toggle.is_hidden.0', 'unpublish','', vmText::_('COM_VIRTUEMART_TOGGLE_HIDDEN'), true);

			$this->addStandardDefaultViewCommands();
			$this->addStandardDefaultViewLists($model);
			$this->custom_parent_id = vRequest::getInt('custom_parent_id',false);
			$this->customs = $model->getCustoms($this->custom_parent_id,vRequest::getVar('keyword'));
			$this->pagination = $model->getPagination();
			$model->custom_parent_id = $this->custom_parent_id;
			$this->customsSelect= $model->displayCustomSelection();
		}

		parent::display($tpl);
	}

	function renderInstalledCustomPlugins($selected)
	{
		$db = JFactory::getDBO();

		$table = '#__extensions';
		$enable = 'enabled';
		$ext_id = 'extension_id';

		//$q = 'SELECT * FROM `'.$table.'` WHERE `folder` = "vmcustom" AND `'.$enable.'`="1" ';
		$q = 'SELECT * FROM `'.$table.'` WHERE `folder` = "vmcustom" and state="0"';
		$db->setQuery($q);

		$results = $db->loadAssocList($ext_id);

		foreach ($results as $result) {
			$filename = 'plg_' .strtolower ( $result['name']).'.sys';
			vmPlugin::loadJLang($filename,'vmcustom',$result['name']);
		}
		return VmHTML::select( 'custom_jplugin_id', $results, $selected,"",$ext_id, 'name');

		//return JHtml::_('select.genericlist', $result, 'custom_jplugin_id', null, $ext_id, 'name', $selected);
	}

	/**
	 * This displays a custom handler.
	 *
	 * @param string $html atttributes, Just for displaying the fullsized image
	 */
	public function displayCustomFields ($datas) {

		$identify = ''; // ':'.$this->virtuemart_custom_id;

		if ($datas->field_type) {
			$this->addHidden ('field_type', $datas->field_type);
		}
		$this->addHiddenByType ($datas);

		$html = "";
		$model = VmModel::getModel('custom');

		// only input when not set else display
		if ($datas->field_type) {
			$html .= VmHTML::row ('value', 'COM_VIRTUEMART_CUSTOM_FIELD_TYPE', $this->fieldTypes[$datas->field_type]);
		}
		else {
			$html .= VmHTML::row ('select', 'COM_VIRTUEMART_CUSTOM_FIELD_TYPE', 'field_type', $this->getOptions ($this->fieldTypes), $datas->field_type, VmHTML::validate ('R'));
		}
		$html .= VmHTML::row ('input', 'COM_VIRTUEMART_TITLE', 'custom_title', $datas->custom_title,'class="required"');
		$html .= VmHTML::row ('booleanlist', 'COM_VIRTUEMART_SHOW_TITLE', 'show_title', $datas->show_title);
		$html .= VmHTML::row ('booleanlist', 'COM_VIRTUEMART_PUBLISHED', 'published', $datas->published);
		$html .= VmHTML::row ('select', 'COM_VIRTUEMART_CUSTOM_GROUP', 'custom_parent_id', $model->getParentList ($datas->virtuemart_custom_id), $datas->custom_parent_id, '');
		$html .= VmHTML::row ('booleanlist', 'COM_VIRTUEMART_CUSTOM_IS_CART_ATTRIBUTE', 'is_cart_attribute', $datas->is_cart_attribute);
		$html .= VmHTML::row ('booleanlist', 'COM_VIRTUEMART_CUSTOM_IS_CART_INPUT', 'is_input', $datas->is_input);
		$html .= VmHTML::row ('booleanlist', 'COM_VM_CUSTOM_IS_SEARCHABLE', 'searchable', $datas->searchable);
		$html .= VmHTML::row ('input', 'COM_VIRTUEMART_DESCRIPTION', 'custom_desc', $datas->custom_desc);
		// change input by type
		$html .= VmHTML::row ('textarea', 'COM_VIRTUEMART_CUSTOM_DEFAULT', 'custom_value', $datas->custom_value);
		$html .= VmHTML::row ('input', 'COM_VIRTUEMART_CUSTOM_TIP', 'custom_tip', $datas->custom_tip);
		$html .= VmHTML::row ('input', 'COM_VIRTUEMART_CUSTOM_LAYOUT_POS', 'layout_pos', $datas->layout_pos);
		//$html .= VmHTML::row('booleanlist','COM_VIRTUEMART_CUSTOM_GROUP','custom_parent_id',$this->getCustomsList(),  $datas->custom_parent_id,'');
		$html .= VmHTML::row ('booleanlist', 'COM_VIRTUEMART_CUSTOM_ADMIN_ONLY', 'admin_only', $datas->admin_only);
		$typesWList = array('S','M');
		if(empty($datas->field_type) or in_array($datas->field_type,$typesWList)){
			$opt = array( 0 => 'COM_VIRTUEMART_NO', 1 => 'COM_VIRTUEMART_YES', 2 => 'COM_VIRTUEMART_CUSTOM_ADMINLIST');
			$html .= VmHTML::row ('select', 'COM_VIRTUEMART_CUSTOM_IS_LIST', 'is_list', $opt,$datas->is_list,'','value','text',false);
		}
		$html .= VmHTML::row ('booleanlist', 'COM_VIRTUEMART_CUSTOM_IS_HIDDEN', 'is_hidden', $datas->is_hidden);
		$html .= VmHTML::row ('raw', 'COM_VM_CUSTOM_SHOPPERGROUPS', ShopFunctions::renderShopperGroupList($datas->virtuemart_shoppergroup_id));
		$html .= VmHTML::inputHidden ($this->_hidden);

		return $html;
	}
	/**
	 * child classes can add their own options and you can get them with this function
	 *
	 * @param array $optionsarray
	 */
	public function getOptions ($field_types) {

		$options = array();
		foreach ($field_types as $optionName=> $langkey) {
			$options[] = JHtml::_ ('select.option', $optionName, vmText::_ ($langkey));
		}
		return $options;
	}

	/**
	 * Use this to adjust the hidden fields of the displaycustomHandler to your form
	 *
	 * @author Max Milbers
	 * @param string $name for exampel view
	 * @param string $value for exampel custom
	 */
	public function addHidden ($name, $value = '') {

		$this->_hidden[$name] = $value;
	}

	/**
	 * Adds the hidden fields which are needed for the form in every case
	 *
	 * @author Max Milbers
	 * OBSELTE ?
	 */
	private function addHiddenByType ($datas) {

		$this->addHidden ('virtuemart_custom_id', $datas->virtuemart_custom_id);
		$this->addHidden ('option', 'com_virtuemart');

	}
}
// pure php no closing tag