<?php
/**
 *
 * Paypal  payment plugin
 *
 * @author Jeremy Magne
 * @version $Id: paypal.php 7217 2013-09-18 13:42:54Z alatak $
 * @package VirtueMart
 * @subpackage payment
 * ${PHING.VM.COPYRIGHT}
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
 *
 * http://virtuemart.net
 */


defined ('_JEXEC') or die();

class JElementTerm extends JElement {

	/**
	 * Element name
	 *
	 * @access    protected
	 * @var        string
	 */
	var $_name = 'Term';

	function fetchElement ($name, $value, &$node, $control_name) {
		
		$class = ($node->attributes('class') ? 'class="' . $node->attributes('class') . '"' : '');
		$max = ($node->attributes('max') ? intval($node->attributes('max')) : 52);
		
		$options = array();
		for($i=1; $i<=$max; $i++) {
			$options[] = JHTML::_('select.option', $i, $i);
		}

		return JHTML::_ ('select.genericlist', $options, $control_name . '[' . $name . ']', $class, 'value', 'text', $value, $control_name . $name);
	}

}