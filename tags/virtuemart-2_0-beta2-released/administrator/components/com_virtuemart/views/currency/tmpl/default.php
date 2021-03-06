<?php
/**
*
* Description
*
* @package	VirtueMart
* @subpackage Currency
* @author RickG
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* @version $Id$
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

AdminMenuHelper::startAdminArea();

?>

<form action="index.php" method="post" name="adminForm">
    <div id="editcell">
	<table class="adminlist">
	    <thead>
		<tr>
		    <th width="10">
			<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->currencies); ?>);" />
		    </th>
		    <th >
			<?php echo JText::_( 'VM_CURRENCY_LIST_NAME' ); ?>
		    </th>
		    <th width="80">
			<?php echo JText::_( 'VM_CURRENCY_LIST_EXCHANGE_RATE' ); ?>
		    </th>
		    <th width="10">
			<?php echo JText::_( 'VM_CURRENCY_LIST_SYMBOL' ); ?>
		    </th>
		    <th width="10">
			<?php echo JText::_( 'VM_CURRENCY_LIST_CODE_2' ); ?>
		    </th>
		    <th width="20">
			<?php echo JText::_( 'VM_CURRENCY_LIST_CODE_3' ); ?>
		    </th>
<?php /*		    <th >
				<?php echo JText::_( 'VM_CURRENCY_START_DATE' ); ?>
			</th>
			<th >
				<?php echo JText::_( 'VM_CURRENCY_END_DATE' ); ?>
			</th> */?>
			<th width="10">
				<?php echo JText::_( 'PUBLISHED' ); ?>
			</th>
		<?php /*	<th width="10">
				<?php echo JText::_( 'VM_CALC_SHARED' ); ?>
			</th> */ ?>
		</tr>
	    </thead>
	    <?php
	    $k = 0;
	    for ($i=0, $n=count( $this->currencies ); $i < $n; $i++) {
		$row =& $this->currencies[$i];

		$checked = JHTML::_('grid.id', $i, $row->currency_id);
		$published = JHTML::_('grid.published', $row, $i);
		$editlink = JROUTE::_('index.php?option=com_virtuemart&controller=currency&task=edit&cid[]=' . $row->currency_id);
		?>
	    <tr class="<?php echo "row$k"; ?>">
		<td width="10">
			<?php echo $checked; ?>
		</td>
		<td align="left">
		    <a href="<?php echo $editlink; ?>"><?php echo $row->currency_name; ?></a>
		</td>
		<td align="left">
			<?php echo $row->exchange_rate; ?>
		</td>
		<td align="left">
			<?php echo $row->currency_symbol; ?>
		</td>
		<td align="left">
			<?php echo $row->currency_code_2; ?>
		</td>
		<td align="left">
			<?php echo $row->currency_code; ?>
		</td>
<?php /*		<td>
			<?php
			$publish_up ='';
			if(strcmp($row->publish_up,'0000-00-00 00:00:00')){
				$date = JFactory::getDate($row->publish_up, $this->tzoffset);
				$publish_up = $date->toFormat($this->dateformat);
			}
			echo $publish_up = JText::_('VM_NEVER');?>
		</td>
		<td>
			<?php
				if (!strcmp($row->publish_down,'0000-00-00 00:00:00')) {
					$endDate = JText::_('VM_NEVER');
				} else {
					$date = JFactory::getDate($row->publish_down,$this->tzoffset);
					$endDate = $date->toFormat($this->dateformat);
				}
			echo $endDate
		</td> */ ?>
		<td align="center">
			<?php echo $published; ?>
		</td>
		<?php /*
		<td align="center">
			<?php echo $row->shared; ?>
		</td>	*/?>
	    </tr>
		<?php
		$k = 1 - $k;
	    }
	    ?>
	    <tfoot>
		<tr>
		    <td colspan="10">
			<?php echo $this->pagination->getListFooter(); ?>
		    </td>
		</tr>
	    </tfoot>
	</table>
    </div>

    <input type="hidden" name="option" value="com_virtuemart" />
    <input type="hidden" name="controller" value="currency" />
    <input type="hidden" name="view" value="currency" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
</form>



<?php AdminMenuHelper::endAdminArea(); ?>