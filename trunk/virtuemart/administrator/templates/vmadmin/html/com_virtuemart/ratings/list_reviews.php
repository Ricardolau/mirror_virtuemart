<?php
/**
*
* Description
*
* @package	VirtueMart
* @subpackage 	ratings
* @author
* @link https://virtuemart.net
* @copyright Copyright (c) 2004 - Copyright (C) 2004 - 2022 Virtuemart Team. All rights reserved. VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* @version $Id$
*
* @todo decide to allow or not a JEditor here instead of a textarea
* @todo comment length check should also occur on the server side (model?)
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');
$adminTemplate = VMPATH_ROOT . '/administrator/templates/vmadmin/html/com_virtuemart/';
JLoader::register('vmuikitAdminUIHelper', $adminTemplate . 'helpers/vmuikit_adminuihelper.php');
vmuikitAdminUIHelper::startAdminArea($this);
/* Get the component name */
$option = vRequest::getCmd('option');
?>
<form action="index.php" method="post" name="adminForm" id="adminForm">
<div id="header">
	<div id="filterbox">
	<table>
	  <tr>
		 <td align="left" width="100%">
			<?php echo vmText::_('COM_VIRTUEMART_FILTER'); ?>:
			<input type="text" name="filter_ratings" value="<?php echo vRequest::getVar('filter_ratings', ''); ?>" />
			<button onclick="this.form.submit();"><?php echo vmText::_('COM_VIRTUEMART_GO'); ?></button>
			<button onclick="document.adminForm.filter_ratings.value='';"><?php echo vmText::_('COM_VIRTUEMART_RESET'); ?></button>
			 <?php if($this->showVendors()){
				 echo Shopfunctions::renderVendorList(vmAccess::getVendorId());
			 } ?>
		 </td>
	  </tr>
	</table>
	</div>
	<div id="resultscounter"><?php echo $this->pagination->getResultsCounter();?></div>
</div>


<div style="text-align: left;">
	<table class="adminlist table table-striped" cellspacing="0" cellpadding="0">
	<thead>
	<tr>
		<th width="20"><input type="checkbox" name="toggle" value="" onclick="Joomla.checkAll(this)" /></th>
		<th><?php echo $this->sort('pr.created_on', 'COM_VIRTUEMART_DATE') ; ?></th>
		<th><?php echo $this->sort('product_name') ; ?></th>
		<th width="20%"><?php echo vmText::_('COM_VIRTUEMART_REVIEW_LANGUAGE') ; ?></th>
		<th><?php echo $this->sort('vote', 'COM_VIRTUEMART_RATE_NOM') ; ?></th>
		<th width="20"><?php echo $this->sort('published') ; ?></th>
	</tr>
	</thead>
	<tbody>
	<?php
	if (!empty($this->reviewslist) and count($this->reviewslist) > 0) {
		$i = 2;
		//$k = 0;
		$keyword = vRequest::getCmd('keyword');
		foreach ($this->reviewslist as $key => $review) {

			$checked = JHtml::_('grid.id', $i , $review->virtuemart_rating_review_id ,null, 'virtuemart_rating_review_id');
			$published = JHtml::_('grid.published', $review, $i);
			?>
			<tr class="row<?php echo ($i)%2 ; ?>">
				<!-- Checkbox -->
				<td><?php echo $checked; ?></td>
				<!-- Username + time -->
				<?php $link = 'index.php?option='.$option.'&view=ratings&task=edit_review&virtuemart_rating_review_id='.$review->virtuemart_rating_review_id; ?>
				<td><?php echo JHtml::_('link', $link, $review->customer.' ('.vmJsApi::date($review->created_on,'LC2',true).')', array("title" => vmText::_('COM_VIRTUEMART_RATING_EDIT_TITLE'))); ?></td>
				<!-- Product name TODO Add paren_id in LINK ? not existing here -->
				<?php $link = 'index.php?option='.$option.'&view=product&task=edit&virtuemart_product_id='.$review->virtuemart_product_id ?>
				<td><?php echo JHtml::_('link', JRoute::_($link), $review->product_name, array('title' => vmText::_('COM_VIRTUEMART_EDIT').' '.htmlentities($review->product_name))); ?></td>
				<!-- Stars language -->
				<td width="20%" class="review_language_td_<?php echo $key?>"><?php				
				$modelConfig = VmModel::getModel('config');
				$activeVMLangs = $modelConfig->getActiveVmLanguages();

				echo '<select name="review_language" style="max-width: 100px;" id="sel-review-'.$review->virtuemart_rating_review_id.'" data-rating-review-id="'.$review->virtuemart_rating_review_id.'" class="review_language_select">';
				echo '<option  value="">'.vmText::_('COM_VIRTUEMART_NO_SPECIFIC_LANGUAGE_SELECTED').'</option >';
				foreach ($activeVMLangs as $key => $activeVMLang) {
				    
				    $selected = '';
				    
				    $activeVMLang = strtolower(str_replace('-', '_', $activeVMLang));
				    
				    if($review->review_language == $activeVMLang)  $selected = 'selected="selected"';
				    echo '<option  value="'.$activeVMLang.'::'.$review->virtuemart_rating_id.'" '.$selected.'>'.$activeVMLang.'</option >';
				    
				}
				
				
				echo '</select>';
				
				?></td>		
				<!-- Stars rating -->
				<td align="center">
					
					<?php // echo JHtml::_('image', JURI::root().'/components/com_virtuemart/assets/images/stars/'.round($review->vote).'.gif',$review->vote,array("title" => (vmText::_('COM_VIRTUEMART_RATING_TITLE').' : '. $review->vote . ' :: ' . $this->max_rating)));
					$maxrating = VmConfig::get('vm_maximum_rating_scale', 5);
				    $ratingwidth = round($review->review_rating) * 24;
				    ?>
	
				    <span title="<?php echo (vmText::_("COM_VIRTUEMART_RATING_TITLE").' '. round($review->review_rating) . '/' . $maxrating) ?>" class="ratingbox" style="display:inline-block;">
						<span class="stars-orange" style="width:<?php echo $ratingwidth.'px'; ?>">
						</span>
				    </span>
				
				</td>
				<!-- published -->
				<td><?php echo $published; ?></td>
			</tr>
		<?php
			//$k = 1 - $k;
			$i++;
		}
	}
	?>
	</tbody>
	<tfoot>
		<tr>
		<td colspan="16">
			<?php echo $this->pagination->getListFooter(); ?>
		</td>
		</tr>
	</tfoot>
	</table>
</div>
<!-- Hidden Fields -->
	<input type="hidden" name="layout" value="list_reviews" />
	<input type="hidden" name="virtuemart_product_id" value="<?php echo vRequest::getVar('virtuemart_product_id', 0); ?>" />
	<?php echo $this->addStandardHiddenToForm(null,'listreviews'); ?>
</form>
<?php 
$js = "
jQuery('.review_language_select').change(function () {
    var ratingReviewId = jQuery(this).data('rating-review-id');
    //jQuery('#button'+this.id).remove();
    //jQuery( '<button type=\"submit\" id=\"button'+this.id+'\" class=\"btn update-review-lang\">Save</button>' ).insertAfter( 'select#'+this.id );
    var selLang = jQuery('#'+this.id).find(':selected').text();
    jQuery.ajax({
        type: 'POST',
        url: 'index.php?option=com_virtuemart&view=ratings&task=updateReviewLang&format=json',
        data: {
            ratingReviewId: ratingReviewId,
            selLang: selLang
        }
        }).done(function(data) {
    
           jQuery( '<span class=\"review-msg-'+data.id+'\" style=\"color: green; font-weight: bold;\"> '+data.msg+' </span>' ).insertAfter('#sel-review-'+data.id );
           jQuery('.review-msg-'+data.id).delay(1000).fadeOut(500);
    
    });
    
});
    
    
";
vmJsApi::addJScript('provmtools', $js);
vmuikitAdminUIHelper::endAdminArea();
?>

