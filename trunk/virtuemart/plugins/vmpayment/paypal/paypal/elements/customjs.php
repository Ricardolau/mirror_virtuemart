<?php
/**
 *
 * Paypal   payment plugin
 *
 * @author Jeremy Magne
 * @version $Id: paypal.php 7217 2013-09-18 13:42:54Z alatak $
 * @package VirtueMart
 * @subpackage payment
 * Copyright (C) 2004-2014 Virtuemart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
 *
 * http://virtuemart.net
 */


defined('_JEXEC') or die();

if (JVM_VERSION < 3) {
	class JElementCustomjs extends JElement {

		/**
		 * Element name
		 *
		 * @access    protected
		 * @var        string
		 */
		var $_name = 'Customjs';

		function fetchElement($name, $value, &$node, $control_name) {

			JHtml::_('behavior.colorpicker');

			$doc = JFactory::getDocument();
			$doc->addScript(JURI::root(true) . '/plugins/vmpayment/paypal/paypal/assets/js/admin.js');
			$doc->addStyleSheet(JURI::root(true) . '/plugins/vmpayment/paypal/paypal/assets/css/paypal.css');


			return '';
		}

	}

} else {
	jimport('joomla.form.formfield');
	class JFormFieldCustomjs extends JFormField {

		/**
		 * Element name
		 *
		 * @access    protected
		 * @var        string
		 */
		var $_name = 'Customjs';
		protected $type = 'Customjs';

		function getInput() {

			JHtml::_('behavior.colorpicker');

			$doc = JFactory::getDocument();
			$doc->addScript(JURI::root(true) . '/plugins/vmpayment/paypal/paypal/assets/js/admin.js');
			$doc->addStyleSheet(JURI::root(true) . '/plugins/vmpayment/paypal/paypal/assets/css/paypal.css');


			return '';
		}

	}
}