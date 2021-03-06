<?php

/**
 *
 * @package	VirtueMart
 * @subpackage   Models Fields
 * @author Valérie Isaksen
 * @link http://www.virtuemart.net
 * @copyright Copyright (c) 2004 - 2011 VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id$
 */
defined('DS') or define('DS', DIRECTORY_SEPARATOR);
if (!class_exists( 'VmConfig' )) require(JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'helpers'.DS.'config.php');
if(!class_exists('vFormField')) require(VMPATH_ADMIN .DS. 'vmf' .DS. 'form' .DS. 'field.php');

/**
 * Supports a modal product picker.
 *
 *
 */
class vFormFieldVendor extends vFormField {

	var $type = 'vendor';
	
	function getInput() {
		VmConfig::loadConfig();
		VmConfig::loadJLang('com_virtuemart');
		$key = ($this->element['key_field'] ? $this->element['key_field'] : 'value');
		$val = ($this->element['value_field'] ? $this->element['value_field'] : $this->name);
		$model = VmModel::getModel('vendor');

		$vendors = $model->getVendors(true, true, false);
		return vHtml::_('select.genericlist', $vendors, $this->name, 'class="inputbox"  size="1"', 'virtuemart_vendor_id', 'vendor_name', $this->value, $this->id);
	}
}

if(JVM_VERSION>0){
	//could be written abstract with eval
	jimport('joomla.form.formfield');
	class JFormFieldVendor extends vFormFieldVendor{

		public function __construct($form = null){
			parent::__construct($form);
			vBasicModel::addIncludePath(VMPATH_ADMIN.DS.'vmf'.DS.'html','html');
			VmConfig::loadJLang('com_virtuemart');
		}
	}
}
