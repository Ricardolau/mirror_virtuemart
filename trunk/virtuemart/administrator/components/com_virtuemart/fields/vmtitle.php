<?php
/**
 *
 * @author Jeremy Magne
 * @version $Id$
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


defined('_JEXEC') or die();

jimport('joomla.form.formfield');
class JFormFieldVmTitle extends JFormField
{
	/**
	 * Element name
	 *
	 * @access    public
	 * @var        string
	 */
	var $type = 'Vmtitle';

	protected function getLabel()
	{
		$description = $this->element['description'];

		$html = '';
		$class =  $this->class ? 'class="' .  $this->class . '"' : '';
		if (empty($class)) {
			$class.="style=\"font-weight: bold; padding: 5px; background-color: #cacaca; float:none; clear:both;\"";
		}
		if ($this->value) {

			$html .= '<div ' . $class . '>';
			$html .= JText::_($this->value);
			$html .= '</div>';
			if ($description) {
				$html .= $description . '<br/>';
			}
		} else {
			$html .= '<div ' . $class. '>' . $description . '</div>';
		}

		return $html;
	}

	protected function getInput()
	{
		if (empty($this->element['description'])) {
			return '';
		}

		$description = (string)$this->element['description'];
		$class = $this->element['class'] ? ' class="' . trim((string)$this->element['class']) . '"' : '';

		$html = !empty($description) ? vmText::_($description) : '';

		return '<span ' . $class . '>' . $html . '</span>';
	}

}