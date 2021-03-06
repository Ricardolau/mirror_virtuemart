<?php
defined('_JEXEC') or die();
/**
 *
 * @package    VirtueMart
 * @subpackage Plugins  - Elements
 * @author Valérie Isaksen
 * @link http://www.virtuemart.net
 * @copyright Copyright (C) 2004-2015 Virtuemart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id$
 */
vFormHelper::loadFieldClass('list');
jimport('joomla.form.formfield');
class vFormFieldVmOrderState extends vFormFieldList {

	/**
	 * The form field type.
	 *
	 * @var    string
	 * @since  11.1
	 */
	var $type = 'vmOrderState';

	protected function getOptions() {
		VmConfig::loadJLang('com_virtuemart_orders', TRUE);

		$options = array();
		$db = vFactory::getDbo();

		$query = 'SELECT `order_status_code` AS value, `order_status_name` AS text
                 FROM `#__virtuemart_orderstates`
                 WHERE `virtuemart_vendor_id` = 1
                 ORDER BY `ordering` ASC ';

		$db->setQuery($query);
		$values = $db->loadObjectList();
		foreach ($values as $value) {
			$options[] = vHtml::_('select.option', $value->value, vmText::_($value->text));
		}


		return $options;
	}

}