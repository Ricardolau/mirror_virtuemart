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
 * @since  1.5
 */
abstract class vHtmlGrid {

	/**
	 * Additional grid function for custom toggles
	 *
	 * @return string HTML code to write the toggle button
	 */
	public static function toggle( $field, $i, $toggle = 'published', $imgY = 'tick.png', $imgX = 'publish_x.png', $untoggleable = false )
	{

		$img 	= $field ? $imgY : $imgX;
		if ($toggle == 'published') {
			// Stay compatible with grid.published
			$task 	= $field ? 'unpublish' : 'publish';
			$alt 	= $field ? vmText::_('COM_VIRTUEMART_PUBLISHED') : vmText::_('COM_VIRTUEMART_UNPUBLISHED');
			$action = $field ? vmText::_('COM_VIRTUEMART_UNPUBLISH_ITEM') : vmText::_('COM_VIRTUEMART_PUBLISH_ITEM');
			/*if (JVM_VERSION < 3){
				$published = vHtml::_('grid.published', $name, $i );
			} else {
				$published = vHtml::_('jgrid.published', $name->published, $i );
			}*/
		} else {
			$task 	= $field ? $toggle.'.0' : $toggle.'.1';
			$alt 	= $field ? vmText::_('COM_VIRTUEMART_PUBLISHED') : vmText::_('COM_VIRTUEMART_DISABLED');
			$action = $field ? vmText::_('COM_VIRTUEMART_DISABLE_ITEM') : vmText::_('COM_VIRTUEMART_ENABLE_ITEM');
		}

		$img = 'admin/' . $img;

		if ($untoggleable) {
			$attribs='style="opacity: 0.6;"';
		} else {
			$attribs='';
		}
		$image = vHtml::_('image', $img, $alt, $attribs, true);

		if($untoggleable) return $image;

		if (JVM_VERSION < 3){
			return ('<a href="javascript:void(0);" onclick="return listItemTask(\'cb'. $i .'\',\''. $task .'\')" title="'. $action .'">'
			. $image .'</a>');
		} else {
			$icon 	= $field ? 'publish' : 'unpublish';
			return ('<a href="javascript:void(0);" onclick="return listItemTask(\'cb'. $i .'\',\''. $task .'\')" title="'. $action .'">'
			. '<span class="icon-'.$icon.'"><span>' .'</a>');
		}

	}


	/**
	 * Method to sort a column in a grid
	 *
	 * @param   string  $title          The link title
	 * @param   string  $order          The order field for the column
	 * @param   string  $direction      The current direction
	 * @param   string  $selected       The selected ordering
	 * @param   string  $task           An optional task override
	 * @param   string  $new_direction  An optional direction for the new column
	 * @param   string  $tip            An optional text shown as tooltip title instead of $title
	 *
	 * @return  string
	 *
	 * @since   1.5
	 */
	public static function sort($title, $order, $direction = 'asc', $selected = '', $task = null, $new_direction = 'asc', $tip = '') {

		$direction = strtolower($direction);
		$icon = array('arrow-up-3', 'arrow-down-3');
		$index = (int) ($direction == 'desc');

		if ($order != $selected)
		{
			$direction = $new_direction;
		}
		else
		{
			$direction = ($direction == 'desc') ? 'asc' : 'desc';
		}

		$html = '<a href="#" onclick="Joomla.tableOrdering(\'' . $order . '\',\'' . $direction . '\',\'' . $task . '\');return false;"'
			. ' class="hasTooltip" title="' . vHtml::tooltipText(($tip ? $tip : $title), 'JGLOBAL_CLICK_TO_SORT_THIS_COLUMN') . '">';

		if (isset($title['0']) && $title['0'] == '<')
		{
			$html .= $title;
		}
		else
		{
			$html .= vmText::_($title);
		}

		if ($order == $selected)
		{
			$html .= ' <span class="icon-' . $icon[$index] . '"></span>';
		}

		$html .= '</a>';

		return $html;
	}

	/**
	 * Method to check all checkboxes in a grid
	 *
	 * @param   string  $name    The name of the form element
	 * @param   string  $tip     The text shown as tooltip title instead of $tip
	 * @param   string  $action  The action to perform on clicking the checkbox
	 *
	 * @return  string
	 *
	 * @since   3.1.2
	 */
/*	public static function checkall($name = 'checkall-toggle', $tip = 'JGLOBAL_CHECK_ALL', $action = 'Joomla.checkAll(this)')
	{
		vHtml::_('bootstrap.tooltip');

		return '<input type="checkbox" name="' . $name . '" value="" class="hasTooltip" title="' . vHtml::tooltipText($tip)
			. '" onclick="' . $action . '" />';
	}*/

	/**
	 * Method to create a checkbox for a grid row.
	 *
	 * @param   integer  $rowNum      The row index
	 * @param   integer  $recId       The record id
	 * @param   boolean  $checkedOut  True if item is checke out
	 * @param   string   $name        The name of the form element
	 * @param   string   $stub        The name of stub identifier
	 *
	 * @return  mixed    String of html with a checkbox if item is not checked out, null if checked out.
	 *
	 * @since   1.5
	 */
	public static function id($rowNum, $recId, $checkedOut = false, $name = 'cid', $stub = 'cb')
	{
		return $checkedOut ? '' : '<input type="checkbox" id="' . $stub . $rowNum . '" name="' . $name . '[]" value="' . $recId
			. '" onclick="Joomla.isChecked(this.checked);" />';
	}

	/**
	 * Displays a checked out icon.
	 *
	 * @param   object   &$row        A data object (must contain checkedout as a property).
	 * @param   integer  $i           The index of the row.
	 * @param   string   $identifier  The property name of the primary key or index of the row.
	 *
	 * @return  string
	 *
	 * @since   1.5
	 */
	public static function checkedOut(&$row, $i, $identifier = 'id')
	{
		$user = vFactory::getUser();
		$userid = $user->get('id');

		if ($row instanceof vTable)
		{
			$result = $row->isCheckedOut($userid);
		}
		else
		{
			$result = false;
		}

		if ($result)
		{
			return static::_checkedOut($row);
		}
		else
		{
			if ($identifier == 'id')
			{
				return vHtml::_('grid.id', $i, $row->$identifier);
			}
			else
			{
				return vHtml::_('grid.id', $i, $row->$identifier, $result, $identifier);
			}
		}
	}


	/**
	 * Method to create a select list of states for filtering
	 * By default the filter shows only published and unpublished items
	 *
	 * @param   string  $filter_state  The initial filter state
	 * @param   string  $published     The vmText string for published
	 * @param   string  $unpublished   The vmText string for Unpublished
	 * @param   string  $archived      The vmText string for Archived
	 * @param   string  $trashed       The vmText string for Trashed
	 *
	 * @return  string
	 *
	 * @since   1.5
	 */
	public static function state($filter_state = '*', $published = 'Published', $unpublished = 'Unpublished', $archived = null, $trashed = null)
	{
		$state = array('' => '- ' . vmText::_('JLIB_HTML_SELECT_STATE') . ' -', 'P' => vmText::_($published), 'U' => vmText::_($unpublished));

		if ($archived)
		{
			$state['A'] = vmText::_($archived);
		}

		if ($trashed)
		{
			$state['T'] = vmText::_($trashed);
		}

		return vHtml::_(
			'select.genericlist',
			$state,
			'filter_state',
			array(
				'list.attr' => 'class="inputbox" size="1" onchange="Joomla.submitform();"',
				'list.select' => $filter_state,
				'option.key' => null
			)
		);
	}

	/**
	 * Method to create an icon for saving a new ordering in a grid
	 *
	 * @param   array   $rows   The array of rows of rows
	 * @param   string  $image  The image [UNUSED]
	 * @param   string  $task   The task to use, defaults to save order
	 *
	 * @return  string
	 *
	 * @since   1.5
	 */
	public static function order($rows, $image = 'filesave.png', $task = 'saveOrder')
	{
		return '<a href="javascript:saveOrder('
			. (count($rows) - 1) . ', \'' . $task . '\')" rel="tooltip" class="saveOrder btn btn-micro pull-right" title="'
			. vmText::_('JLIB_HTML_SAVE_ORDER') . '"><span class="icon-menu-2"></span></a>';
	}

	/**
	 * Method to create a checked out icon with optional overlib in a grid.
	 *
	 * @param   object   &$row     The row object
	 * @param   boolean  $overlib  True if an overlib with checkout information should be created.
	 *
	 * @return  string   HTMl for the icon and overlib
	 *
	 * @since   1.5
	 */
	protected static function _checkedOut(&$row, $overlib = true)
	{
		$hover = '';

		if ($overlib)
		{
			vHtml::_('bootstrap.tooltip');

			$date = vHtml::_('date', $row->checked_out_time, vmText::_('DATE_FORMAT_LC1'));
			$time = vHtml::_('date', $row->checked_out_time, 'H:i');

			$hover = '<span class="editlinktip hasTooltip" title="' . vHtml::tooltipText('JLIB_HTML_CHECKED_OUT', $row->editor) . '<br />' . $date . '<br />'
				. $time . '">';
		}

		return $hover . vHtml::_('image', 'admin/checked_out.png', null, null, true) . '</span>';
	}

}
