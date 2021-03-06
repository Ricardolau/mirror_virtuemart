<?php
/**
*
* Description
*
* @package	VirtueMart
* @subpackage 
* @author
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

/* Get the component name */
$option = JRequest::getWord('option');

/* Load some variables */
$search_date = JRequest::getVar('search_date', null); // Changed search by date
$now = getdate();
$nowstring = $now["hours"].":".substr('0'.$now["minutes"], -2).' '.$now["mday"].".".$now["mon"].".".$now["year"];
$search_order = JRequest::getVar('search_order', '>');
$search_type = JRequest::getVar('search_type', 'product');
$category_id = JRequest::getInt('category_id', false);
?>
<form action="index.php" method="post" name="adminForm" id="adminForm">
<div id="header">
<div id="filterbox" style="float: left">
	<table>
		<tr>
			<td align="left" width="100%">
			<?php echo JText::_('VM_FILTER') ?>:
				<select class="inputbox" id="category_id" name="category_id" onchange="document.adminForm.submit(); return false;">
					<option value=""><?php echo JText::_('SEL_CATEGORY') ?></option>
					<?php echo $this->category_tree; ?>
				</select>
				<?php echo JText::_('VM_PRODUCT_LIST_SEARCH_BY_DATE') ?>&nbsp;
					<input type="text" value="<?php echo JRequest::getVar('filter_product'); ?>" name="filter_product" size="25" />
				<?php 
					echo $this->lists['search_type'];
					echo $this->lists['search_order']; 
					echo JHTML::calendar( JRequest::getVar('search_date', $nowstring), 'search_date', 'search_date', '%H.%M %d.%m.%Y', 'size="20"');
				?>
				<button onclick="this.form.submit();"><?php echo JText::_('Go'); ?></button>
				<button onclick="document.adminForm.filter_product.value=''; document.adminForm.search_type.options[0].selected = true;"><?php echo JText::_('Reset'); ?></button>
			</td>
		</tr>
	</table>
	</div>
	<div id="resultscounter" style="float: right;"><?php echo $this->pagination->getResultsCounter();?></div>
</div>
<br clear="all" />
<div style="text-align: left;">
<?php 
$productlist = $this->productlist;
$pagination = $this->pagination;
?>
	<table class="adminlist">
	<thead>
	<tr>
		<th><input type="checkbox" name="toggle" value="" onclick="checkAll('<?php echo count($productlist); ?>')" /></th>
		<th><?php echo JHTML::_('grid.sort', 'VM_PRODUCT_LIST_NAME', 'product_name', $this->lists['filter_order_Dir'], $this->lists['filter_order'] ); ?></th>
		<th><?php echo JHTML::_('grid.sort', 'VM_PRODUCT_LIST_VENDOR_NAME', 'vendor_name', $this->lists['filter_order_Dir'], $this->lists['filter_order'] ); ?></th>
		<th><?php echo JText::_('VM_PRODUCT_LIST_MEDIA'); ?></th>
		<th><?php echo JHTML::_('grid.sort', 'VM_PRODUCT_LIST_SKU', 'product_sku', $this->lists['filter_order_Dir'], $this->lists['filter_order'] ); ?></th>
		<th><?php echo JHTML::_('grid.sort', 'VM_PRODUCT_PRICE_TITLE', 'product_price', $this->lists['filter_order_Dir'], $this->lists['filter_order'] ); ?></th>
		<th><?php echo JHTML::_('grid.sort', 'VM_CATEGORY', 'category_name', $this->lists['filter_order_Dir'], $this->lists['filter_order'] ); ?></th>
		<!-- Only show reordering fields when a category ID is selected! -->
		<?php
		$num_rows = 0;
		if( $category_id ) { ?>
			<th><?php echo JText::_('VM_FIELDMANAGER_REORDER'); ?></th>
			<th><?php echo vmCommonHTML::getSaveOrderButton( $num_rows, 'changeordering' ); ?></th>
		<?php } ?>
		<th><?php echo JHTML::_('grid.sort', 'VM_MANUFACTURER_MOD', 'mf_name', $this->lists['filter_order_Dir'], $this->lists['filter_order'] ); ?></th>
		<th><?php echo JText::_('VM_REVIEWS'); ?></th>
		<th><?php echo JHTML::_('grid.sort', 'VM_PRODUCT_LIST_PUBLISH', 'published', $this->lists['filter_order_Dir'], $this->lists['filter_order'] ); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php
	if (count($productlist) > 0) {
		$i = 0;
		$k = 0;
		$keyword = JRequest::getVar('keyword');
		foreach ($productlist as $key => $product) {
			$checked = JHTML::_('grid.id', $i , $product->product_id);
			$published = JHTML::_('grid.published', $product, $i );
			?>
			<tr class="<?php echo "row$k"; ?>">
				<!-- Checkbox -->
				<td><?php echo $checked; ?></td>
				<!-- Product name -->
				<?php 
				$link = 'index.php?option='.$option.'&view=product&task=edit&product_id='.$product->product_id.'&product_parent_id='.$product->product_parent_id;
				$child_link = '';
				if ($product->product_parent_id == 0 && $product->haschildren) {
					$child_link = '&nbsp;&nbsp;&nbsp;'.JHTML::_('link', JRoute::_('index.php?view=product&product_parent_id='.$product->product_id.'&option='.$option), '[ '.JText::_('VM_PRODUCT_FORM_ITEM_INFO_LBL').' ]');
				}
				?>
				<td><?php echo JHTML::_('link', JRoute::_($link), $product->product_name, array('title' => JText::_('EDIT').' '.$product->product_name)).$child_link; ?></td>
				<!-- Vendor name -->
				<td><?php echo $product->vendor_name; ?></td>
				<!-- Media -->
				<?php
					/* Create URL */
					$link = JRoute::_('index.php?view=media&product_id='.$product->product_id.'&option='.$option);
				?>
				<td><?php echo JHTML::_('link', $link, JHTML::_('image', JURI::root().'includes/js/ThemeOffice/media.png', JTEXT::_('MEDIA_MANAGER')).'<br />('.$product->mediaitems.')');?></td>
				<!-- Product SKU -->
				<td><?php echo $product->product_sku; ?></td>
				<!-- Product price -->
				<td><?php echo $product->product_price_display; ?></td>
				<!-- Category name -->
				<td><?php echo JHTML::_('link', JRoute::_('index.php?page=product.product_category_form&category_id='.$product->category_id.'&category_parent_id='.$product->category_parent_id.'&option='.$option), $product->category_name); ?></td>
				<!-- Reorder only when category ID is present -->
				<?php if( $category_id ) { ?>
					<?php
					$page = '';
					$tmp_cell = "<div align=\"center\">"
					. $pagination->orderUpIcon( $i, $i > 0)
					. "\n&nbsp;"
					. $pagination->orderDownIcon( $i, $pagination->total, $i-1 <= count($productlist))
					. "</div>";
					?>
					<td><?php echo $tmp_cell;?></td>
					
					<td><?php echo vmCommonHTML::getOrderingField( $product->product_list ); ?></td>
				<?php } ?>
				<!-- Manufacturer name -->
				<td><?php echo JHTML::_('link', JRoute::_('index.php?page=manufacturer.manufacturer_form&manufacturer_id='.$product->manufacturer_id.'&option='.$option), $product->mf_name); ?></td>
				<!-- Reviews -->
				<?php $link = 'index.php?option='.$option.'&view=ratings&task=add&product_id='.$product->product_id; ?>
				<td><?php echo JHTML::_('link', $link, $product->reviews.' ['.JText::_('VM_REVIEW_FORM_LBL').']'); ?></td>
				<!-- Published -->
				<td><?php echo $published; ?></td>
			</tr>
		<?php 
			$k = 1 - $k;
			$i++;
		}
	}	
	?>
	</tbody>
	<tfoot>
		<tr>
		<td colspan="16">
			<?php echo $pagination->getListFooter(); ?>
		</td>
		</tr>
	</tfoot>
	</table>
</div>
<!-- Hidden Fields -->
<input type="hidden" name="option" value="com_virtuemart" />
<input type="hidden" name="task" value="product" />
<input type="hidden" name="view" value="product" />
<input type="hidden" name="product_parent_id" value="<?php echo JRequest::getInt('product_parent_id', 0); ?>" />
<input type="hidden" name="pshop_mode" value="admin" />
<input type="hidden" name="page" value="product.product_list" />
<input type="hidden" name="func" value="" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="filter_order" value="<?php echo $this->lists['filter_order']; ?>" />
<input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['filter_order_Dir']; ?>" />
<input type="hidden" name="<?php echo JUtility::getToken(); ?>" value="1" />
</form>
<?php AdminMenuHelper::endAdminArea(); ?> 