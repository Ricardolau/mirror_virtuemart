<?php
/**
 * @package     Joomla.Libraries
 * @subpackage  HTML
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('JPATH_PLATFORM') or die;

/**
 * Utility class for creating HTML Grids
 *
 * @since  1.6
 */
abstract class vHtmlJGrid
{
	/**
	 * Returns an action on a grid
	 *
	 * @param   integer       $i               The row index
	 * @param   string        $task            The task to fire
	 * @param   string|array  $prefix          An optional task prefix or an array of options
	 * @param   string        $text            An optional text to display [unused - @deprecated 4.0]
	 * @param   string        $active_title    An optional active tooltip to display if $enable is true
	 * @param   string        $inactive_title  An optional inactive tooltip to display if $enable is true
	 * @param   boolean       $tip             An optional setting for tooltip
	 * @param   string        $active_class    An optional active HTML class
	 * @param   string        $inactive_class  An optional inactive HTML class
	 * @param   boolean       $enabled         An optional setting for access control on the action.
	 * @param   boolean       $translate       An optional setting for translation.
	 * @param   string        $checkbox	       An optional prefix for checkboxes.
	 *
	 * @return  string  The HTML markup
	 *
	 * @since   1.6
	 */
	public static function action($i, $task, $prefix = '', $text = '', $active_title = '', $inactive_title = '', $tip = false, $active_class = '',
		$inactive_class = '', $enabled = true, $translate = true, $checkbox = 'cb')
	{
		if (is_array($prefix))
		{
			$options = $prefix;
			$active_title = array_key_exists('active_title', $options) ? $options['active_title'] : $active_title;
			$inactive_title = array_key_exists('inactive_title', $options) ? $options['inactive_title'] : $inactive_title;
			$tip = array_key_exists('tip', $options) ? $options['tip'] : $tip;
			$active_class = array_key_exists('active_class', $options) ? $options['active_class'] : $active_class;
			$inactive_class = array_key_exists('inactive_class', $options) ? $options['inactive_class'] : $inactive_class;
			$enabled = array_key_exists('enabled', $options) ? $options['enabled'] : $enabled;
			$translate = array_key_exists('translate', $options) ? $options['translate'] : $translate;
			$checkbox = array_key_exists('checkbox', $options) ? $options['checkbox'] : $checkbox;
			$prefix = array_key_exists('prefix', $options) ? $options['prefix'] : '';
		}

		if ($tip)
		{
			if(VM_USE_BOOTSTRAP === 1){
				JHtml::_('bootstrap.tooltip');

				$title = $enabled ? $active_title : $inactive_title;
				$title = $translate ? vmText::_($title) : $title;
				$title = vHtml::tooltipText($title, '', 0);
			} else {
				JHtml::_('behavior.tooltip');
			}

		}

		if ($enabled)
		{
			if(VM_USE_BOOTSTRAP === 1){
				$html[] = '<a class="btn btn-micro' . ($active_class == 'publish' ? ' active' : '') . ($tip ? ' hasTooltip' : '') . '"';
				$html[] = ' href="javascript:void(0);" onclick="return listItemTask(\'' . $checkbox . $i . '\',\'' . $prefix . $task . '\')"';
				$html[] = $tip ? ' title="' . $title . '"' : '';
				$html[] = '>';
				$html[] = '<span class="icon-' . $active_class . '"></span>';
				$html[] = '</a>';
			} else {
				$html[] = '<a class="jgrid' . ($tip ? ' hasTip' : '') . '"';
				$html[] = ' href="javascript:void(0);" onclick="return listItemTask(\'' . $checkbox . $i . '\',\'' . $prefix . $task . '\')"';
				$html[] = ' title="' . addslashes(vRequest::vmSpecialChars($translate ? vmText::_($active_title) : $active_title)) . '">';
				$html[] = '<span class="state ' . $active_class . '">';
				$html[] = $text ? ('<span class="text">' . ($translate ? vmText::_($text):$text) . '</span>') : '';
				$html[] = '</span>';
				$html[] = '</a>';
			}
		}
		else
		{
			if(VM_USE_BOOTSTRAP === 1){
				$html[] = '<a class="btn btn-micro disabled jgrid' . ($tip ? ' hasTooltip' : '') . '"';
				$html[] = $tip ? ' title="' . $title . '"' : '';
				$html[] = '>';

				if ($active_class == "protected")
				{
					$html[] = '<span class="icon-lock"></span>';
				}
				else
				{
					$html[] = '<span class="icon-' . $inactive_class . '"></span>';
				}

				$html[] = '</a>';
			} else {
				$html[] = '<a class="jgrid' . ($tip ? ' hasTip' : '') . '"';
				$html[] = ' title="' . addslashes(vRequest::vmSpecialChars($translate ? vmText::_($inactive_title) : $inactive_title)) . '">';
				$html[] = '<span class="state ' . $inactive_class . '">';
				$html[] = $text ? ('<span class="text">' . ($translate ? vmText::_($text) : $text) . '</span>') :'';
				$html[] = '</span>';
				$html[] = '</a>';
			}

		}

		return implode($html);
	}

	/**
	 * Returns a state on a grid
	 *
	 * @param   array         $states     array of value/state. Each state is an array of the form
	 *                                    (task, text, title,html active class, HTML inactive class)
	 *                                    or ('task'=>task, 'text'=>text, 'active_title'=>active title,
	 *                                    'inactive_title'=>inactive title, 'tip'=>boolean, 'active_class'=>html active class,
	 *                                    'inactive_class'=>html inactive class)
	 * @param   integer       $value      The state value.
	 * @param   integer       $i          The row index
	 * @param   string|array  $prefix     An optional task prefix or an array of options
	 * @param   boolean       $enabled    An optional setting for access control on the action.
	 * @param   boolean       $translate  An optional setting for translation.
	 * @param   string        $checkbox   An optional prefix for checkboxes.
	 *
	 * @return  string  The HTML markup
	 *
	 * @since   1.6
	 */
	public static function state($states, $value, $i, $prefix = '', $enabled = true, $translate = true, $checkbox = 'cb')
	{
		if (is_array($prefix))
		{
			$options = $prefix;
			$enabled = array_key_exists('enabled', $options) ? $options['enabled'] : $enabled;
			$translate = array_key_exists('translate', $options) ? $options['translate'] : $translate;
			$checkbox = array_key_exists('checkbox', $options) ? $options['checkbox'] : $checkbox;
			$prefix = array_key_exists('prefix', $options) ? $options['prefix'] : '';
		}

		$state = JArrayHelper::getValue($states, (int) $value, $states[0]);
		$task = array_key_exists('task', $state) ? $state['task'] : $state[0];
		$text = array_key_exists('text', $state) ? $state['text'] : (array_key_exists(1, $state) ? $state[1] : '');
		$active_title = array_key_exists('active_title', $state) ? $state['active_title'] : (array_key_exists(2, $state) ? $state[2] : '');
		$inactive_title = array_key_exists('inactive_title', $state) ? $state['inactive_title'] : (array_key_exists(3, $state) ? $state[3] : '');
		$tip = array_key_exists('tip', $state) ? $state['tip'] : (array_key_exists(4, $state) ? $state[4] : false);
		$active_class = array_key_exists('active_class', $state) ? $state['active_class'] : (array_key_exists(5, $state) ? $state[5] : '');
		$inactive_class = array_key_exists('inactive_class', $state) ? $state['inactive_class'] : (array_key_exists(6, $state) ? $state[6] : '');

		return static::action(
			$i, $task, $prefix, $text, $active_title, $inactive_title, $tip,
			$active_class, $inactive_class, $enabled, $translate, $checkbox
		);
	}

	/**
	 * Returns a isDefault state on a grid
	 *
	 * @param   integer       $value     The state value.
	 * @param   integer       $i         The row index
	 * @param   string|array  $prefix    An optional task prefix or an array of options
	 * @param   boolean       $enabled   An optional setting for access control on the action.
	 * @param   string        $checkbox  An optional prefix for checkboxes.
	 *
	 * @return  string  The HTML markup
	 *
	 * @see     JHtmlJGrid::state()
	 * @since   1.6
	 */
	public static function isdefault($value, $i, $prefix = '', $enabled = true, $checkbox = 'cb')
	{
		if (is_array($prefix))
		{
			$options = $prefix;
			$enabled = array_key_exists('enabled', $options) ? $options['enabled'] : $enabled;
			$checkbox = array_key_exists('checkbox', $options) ? $options['checkbox'] : $checkbox;
			$prefix = array_key_exists('prefix', $options) ? $options['prefix'] : '';
		}

		$states = array(
			0 => array('setDefault', '', 'JLIB_HTML_SETDEFAULT_ITEM', '', 1, 'unfeatured', 'unfeatured'),
			1 => array('unsetDefault', 'JDEFAULT', 'JLIB_HTML_UNSETDEFAULT_ITEM', 'JDEFAULT', 1, 'featured', 'featured'),
		);

		return static::state($states, $value, $i, $prefix, $enabled, true, $checkbox);
	}

	/**
	 * Returns an array of standard published state filter options.
	 *
	 * @param   array  $config  An array of configuration options.
	 *                          This array can contain a list of key/value pairs where values are boolean
	 *                          and keys can be taken from 'published', 'unpublished', 'archived', 'trash', 'all'.
	 *                          These pairs determine which values are displayed.
	 *
	 * @return  string  The HTML markup
	 *
	 * @since   1.6
	 */
	public static function publishedOptions($config = array())
	{
		// Build the active state filter options.
		$options = array();

		if (!array_key_exists('published', $config) || $config['published'])
		{
			$options[] = vHtml::_('select.option', '1', 'JPUBLISHED');
		}

		if (!array_key_exists('unpublished', $config) || $config['unpublished'])
		{
			$options[] = vHtml::_('select.option', '0', 'JUNPUBLISHED');
		}

		if (!array_key_exists('archived', $config) || $config['archived'])
		{
			$options[] = vHtml::_('select.option', '2', 'JARCHIVED');
		}

		if (!array_key_exists('trash', $config) || $config['trash'])
		{
			$options[] = vHtml::_('select.option', '-2', 'JTRASHED');
		}

		if (!array_key_exists('all', $config) || $config['all'])
		{
			$options[] = vHtml::_('select.option', '*', 'JALL');
		}

		return $options;
	}

	/**
	 * Returns a checked-out icon
	 *
	 * @param   integer       $i           The row index.
	 * @param   string        $editorName  The name of the editor.
	 * @param   string        $time        The time that the object was checked out.
	 * @param   string|array  $prefix      An optional task prefix or an array of options
	 * @param   boolean       $enabled     True to enable the action.
	 * @param   string        $checkbox    An optional prefix for checkboxes.
	 *
	 * @return  string  The HTML markup
	 *
	 * @since   1.6
	 */
	public static function checkedout($i, $editorName, $time, $prefix = '', $enabled = false, $checkbox = 'cb')
	{
		if(VM_USE_BOOTSTRAP === 1){
			JHtml::_('bootstrap.tooltip');
		} else {
			vHtml::_('behavior.tooltip');
		}

		if (is_array($prefix))
		{
			$options = $prefix;
			$enabled = array_key_exists('enabled', $options) ? $options['enabled'] : $enabled;
			$checkbox = array_key_exists('checkbox', $options) ? $options['checkbox'] : $checkbox;
			$prefix = array_key_exists('prefix', $options) ? $options['prefix'] : '';
		}

		$text = $editorName . '<br />' . vHtml::_('date', $time, vmText::_('DATE_FORMAT_LC')) . '<br />' . vHtml::_('date', $time, 'H:i');
		$active_title = vHtml::tooltipText(vmText::_('JLIB_HTML_CHECKIN'), $text, 0);
		$inactive_title = vHtml::tooltipText(vmText::_('JLIB_HTML_CHECKED_OUT'), $text, 0);

		return static::action(
			$i, 'checkin', $prefix, vmText::_('JLIB_HTML_CHECKED_OUT'), html_entity_decode($active_title, ENT_QUOTES, 'UTF-8'),
			html_entity_decode($inactive_title, ENT_QUOTES, 'UTF-8'), true, 'checkedout', 'checkedout', $enabled, false, $checkbox
		);
	}

	/**
	 * Creates a order-up action icon.
	 *
	 * @param   integer       $i         The row index.
	 * @param   string        $task      An optional task to fire.
	 * @param   string|array  $prefix    An optional task prefix or an array of options
	 * @param   string        $text      An optional text to display
	 * @param   boolean       $enabled   An optional setting for access control on the action.
	 * @param   string        $checkbox  An optional prefix for checkboxes.
	 *
	 * @return  string  The HTML markup
	 *
	 * @since   1.6
	 */
	public static function orderUp($i, $task = 'orderup', $prefix = '', $text = 'JLIB_HTML_MOVE_UP', $enabled = true, $checkbox = 'cb')
	{
		if (is_array($prefix))
		{
			$options = $prefix;
			$text = array_key_exists('text', $options) ? $options['text'] : $text;
			$enabled = array_key_exists('enabled', $options) ? $options['enabled'] : $enabled;
			$checkbox = array_key_exists('checkbox', $options) ? $options['checkbox'] : $checkbox;
			$prefix = array_key_exists('prefix', $options) ? $options['prefix'] : '';
		}

		return static::action($i, $task, $prefix, $text, $text, $text, false, 'uparrow', 'uparrow_disabled', $enabled, true, $checkbox);
	}

	/**
	 * Creates a order-down action icon.
	 *
	 * @param   integer       $i         The row index.
	 * @param   string        $task      An optional task to fire.
	 * @param   string|array  $prefix    An optional task prefix or an array of options
	 * @param   string        $text      An optional text to display
	 * @param   boolean       $enabled   An optional setting for access control on the action.
	 * @param   string        $checkbox  An optional prefix for checkboxes.
	 *
	 * @return  string  The HTML markup
	 *
	 * @since   1.6
	 */
	public static function orderDown($i, $task = 'orderdown', $prefix = '', $text = 'JLIB_HTML_MOVE_DOWN', $enabled = true, $checkbox = 'cb')
	{
		if (is_array($prefix))
		{
			$options = $prefix;
			$text = array_key_exists('text', $options) ? $options['text'] : $text;
			$enabled = array_key_exists('enabled', $options) ? $options['enabled'] : $enabled;
			$checkbox = array_key_exists('checkbox', $options) ? $options['checkbox'] : $checkbox;
			$prefix = array_key_exists('prefix', $options) ? $options['prefix'] : '';
		}

		return static::action($i, $task, $prefix, $text, $text, $text, false, 'downarrow', 'downarrow_disabled', $enabled, true, $checkbox);
	}
}
