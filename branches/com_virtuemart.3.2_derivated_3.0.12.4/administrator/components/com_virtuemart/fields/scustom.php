<?php
defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');
defined('DS') or define('DS', DIRECTORY_SEPARATOR);
if (!class_exists( 'VmConfig' )) require(JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'helpers'.DS.'config.php');

/**
 * Creates dropdown for selecting a string customfield
 */
class vFormFieldScustom extends vFormField {

	var $type = 'scustom';

	function getInput() {
		VmConfig::loadConfig();
		return vHtml::_('select.genericlist',  $this->_getStringCustoms(), $this->name, 'class="inputbox"   ', 'value', 'text', $this->value, $this->id);
	}

	private function _getStringCustoms() {
		if (!class_exists('VmModel'))
			require(VMPATH_ADMIN . DS . 'helpers' . DS . 'vmmodel.php');
		$cModel = VmModel::getModel('custom');
		$cModel->_noLimit = true;
		$q = 'SELECT `virtuemart_custom_id` AS value, custom_title AS text FROM `#__virtuemart_customs` WHERE custom_parent_id="0" AND field_type = "S" ';
		$q .= ' AND `published`=1';
		$db = vFactory::getDbo();
		$db->setQuery ($q);
		$l = $db->loadObjectList ();
		$eOpt = vHtml::_('select.option', '0', vmText::_('COM_VIRTUEMART_NONE'));
		array_unshift($l,$eOpt);

		return $l;

	}

}