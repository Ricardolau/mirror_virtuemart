<?php
/**
 *
 * User listing view
 *
 * @package	VirtueMart
 * @subpackage User
 * @author Oscar van Eijk
* @link https://virtuemart.net
 * @copyright Copyright (c) 2004 - ${PHING.VM.COPYRIGHT} VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id$
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

$adminTemplate = VMPATH_ROOT . '/administrator/templates/vmadmin/html/com_virtuemart/';
JLoader::register('vmuikitAdminUIHelper', $adminTemplate . 'helpers/vmuikit_adminuihelper.php');
vmuikitAdminUIHelper::startAdminArea($this);
?>
<form action="<?php echo JRoute::_( 'index.php?option=com_virtuemart&view=user' );?>" method="post" name="adminForm" id="adminForm">
	<div id="filterbox" class="filter-bar">
		<?php
		$extras=array();
		$extras[]=$this->searchOptions;
		if(!empty($this->vendors)){
			$extras[]=$this->vendors;
		}


		echo adminSublayouts::renderAdminVmSubLayout('filterbar',
			array(
				'search'=>array(
					'label'=>'COM_VIRTUEMART_FILTER',
					'name'=>'search',
					'value'=>vRequest::getVar('search')
				),
				'extras'=>$extras,
				'resultsCounter'=>$this->pagination->getResultsCounter()
			));


		?>
	</div>

	<div id="editcell">
		<table class="uk-table uk-table-striped uk-table-responsive">
		<thead>
		<tr>
			<th class="admin-checkbox">
				<input type="checkbox" name="toggle" value="" onclick="Joomla.checkAll(this)" />
			</th>

			<th style="width: 20%;"><?php echo $this->sort('ju.username', 'COM_VIRTUEMART_USERNAME'); ?></th>
			<th style="width: 20%;"><?php echo $this->sort('ju.name', 'COM_VIRTUEMART_USER_DISPLAYED_NAME'); ?></th>
			<th style="width: 20%;"><?php echo $this->sort('ju.email', 'COM_VIRTUEMART_EMAIL'); ?></th>
			<th style="width: 20%;"><?php echo $this->sort('shopper_group_name', 'COM_VIRTUEMART_SHOPPERGROUP'); ?></th>
			<th style="width: 120px;"><?php echo vmText::_('COM_VIRTUEMART_ORDERS'); ?></th>
				<?php if(Vmconfig::get('multix','none')!=='none'){ ?>
			<th style="width: 80px;text-align: center;"><?php echo vmText::_('COM_VIRTUEMART_USER_IS_VENDOR'); ?></th>
				<?php } ?>
			<th style="width: 40px;text-align: right;"><?php echo $this->sort('ju.id', 'COM_VIRTUEMART_ID') ?></th>
		</tr>
		</thead>
		<?php
		$k = 0;
		for ($i = 0, $n = count($this->userList); $i < $n; $i++) {
			$row = $this->userList[$i];
			$checked = JHtml::_('grid.id', $i, $row->id);
			$editlink = JROUTE::_('index.php?option=com_virtuemart&view=user&task=edit&virtuemart_user_id[]=' . $row->id);
			$is_vendor = $this->toggle($row->user_is_vendor, $i, 'toggle.user_is_vendor');
				
		?>
		<tr class="row<?php echo $k ; ?>">
			<td class="admin-checkbox">
				<?php echo $checked; ?>
			</td>
			<td>
				<a href="<?php echo $editlink; ?>"><?php echo $row->username; ?></a>
			</td>
			<td>
				<?php echo $row->name; ?>
			</td>
			<td>
				<?php echo $row->email; ?>
			</td>
			<td>
				<?php

				if(!empty($row->shoppergroups)) {
					foreach($row->shoppergroups as $shoppergroup ) {
						echo '<div>'.vmText::_($shoppergroup['shopper_group_name']).'</div>';
					}
				} ?>
			</td>
			<td><?php echo $row->orderCount; ?>
			</td>
			<?php if(Vmconfig::get('multix','none')!=='none'){ ?>
			<td style="text-align: center;">
				<?php echo $is_vendor; ?>
			</td>
			<?php } ?>
			<td style="text-align: right;">
				<?php echo $row->id; ?>
			</td>
		</tr>
		<?php
		$k = 1 - $k;
		}
		?>
		<tfoot>
		<tr>
			<td colspan="11">
				<?php echo $this->pagination->getListFooter(); ?>
			</td>
		</tr>
		</tfoot>
		</table>
	</div>
	<?php echo $this->addStandardHiddenToForm(); ?>
</form>
<?php AdminUIHelper::endAdminArea(); ?>
