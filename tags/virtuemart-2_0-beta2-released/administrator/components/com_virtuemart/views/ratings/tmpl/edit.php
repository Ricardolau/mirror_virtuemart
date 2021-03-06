<?php
/**
*
* Description
*
* @package	VirtueMart
* @subpackage 	ratings
* @author
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* @version $Id: ratings_edit.php 2233 2010-01-21 21:21:29Z SimonHodgkiss $
*
* @todo decide to allow or not a JEditor here instead of a textarea
* @todo comment length check should also occur on the server side (model?)
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

AdminMenuHelper::startAdminArea();
?>

<form action="index.php" method="post" name="adminForm" id="adminForm">

<div class="col50">
<fieldset class="adminform">
<legend><?php echo JText::_( 'VM_REVIEW' ); ?></legend>
<table class="admintable" summary="<?php echo JText::_('VM_RATING_EDIT_TITLE');?>">
	<tr>
		<td width="24%" align="left" valign="top">
			<?php echo JText::_('VM_RATING_TITLE'); ?>
		</td>
		<td valign="top">
		<!-- Rating stars -->
		<?php
		$rating_options = array();
		for ($i=0;$i<=$this->max_rating;$i++) {
			$text = JHTML::_('image', JURI::root().'/components/com_virtuemart/assets/images/stars/'.$i.'.gif','');
			$rating_options[] = JHTML::_('select.option',$i,$text);
		}
		echo JHTML::_('select.radiolist', $rating_options, 'user_rating', 'id="user_rating" class="inputbox"', 'value', 'text', $this->rating->user_rating);
		?>
		</td>
	</tr>
		<!-- Review comment -->
	<tr>
		<td width="24%" align="left" valign="top">
			<?php echo JTEXT::_('VM_REVIEW'); ?>
        	</td>
		<td width="76%" align="left">
			<textarea onblur="refresh_counter();" onfocus="refresh_counter();" onkeypress="refresh_counter();" rows="20" cols="60" name="comment"><?php echo $this->rating->comment; ?></textarea>
		</td>
	</tr>
	<tr>
		<!-- Show number of typed in characters -->
		<td width="24%" align="left" valign="top"> &nbsp; </td>
		<td width="76%" align="left">
	        <div align="left"><i><?php echo JText::_('VM_REVIEW_COUNT') ?></i>
                	<input type="text" value="150" size="4" class="inputbox" name="counter" maxlength="4" readonly="readonly" />
            	</div>
		</td>
	</tr>
<!-- todo?? To be used with HTML editor (with some more restrictions)
	<tr>
		<td width="24%" align="left" valign="top">
			<?php echo JTEXT::_('VM_REVIEW'); ?>
        	</td>
		<td width="76%" align="left">
	<?php
	$editor = JFactory::getEditor();
	echo $editor->display('comment', $this->rating->comment, '100%', '100', '60', '20',false);?>
	</td>
	</tr>
-->
	<tr>
		<!-- Published status -->
		<td>
			<?php echo JText::_('PUBLISHED'); ?>
		</td>
		<td>
			<?php echo JHTML::_('select.booleanlist', 'published', '', $this->rating->published); ?>
		</td>
	</tr>
</table>
</fieldset>
</div>
<!-- Hidden Fields -->
<input type="hidden" name="task" value="ratings" />
<input type="hidden" name="option" value="com_virtuemart" />
<input type="hidden" name="pshop_mode" value="admin" />
<input type="hidden" name="view" value="ratings" />
<input type="hidden" name="review_id" value="<?php echo $this->rating->review_id; ?>" />
<input type="hidden" name="product_id" value="<?php echo $this->rating->product_id; ?>" />
<input type="hidden" name="userid" value="<?php echo $this->rating->userid; ?>" />
<input type="hidden" name="time" value="<?php echo $this->rating->time; ?>" />
<input type="hidden" name="<?php echo JUtility::getToken(); ?>" value="1" />
</form>
<?php AdminMenuHelper::endAdminArea(); ?>
<script type="text/javascript">
function refresh_counter() {
    var form = document.adminForm;
    form.counter.value = form.comment.value.length;
}
refresh_counter();

function submitbutton(pressbutton) {

	 if (pressbutton == 'cancel') {
		submitform( pressbutton );
		return;
	}
	else {
		if (document.adminForm.counter.value > <?php echo VmConfig::get('comment_max_length'); ?>) alert('<?php echo JText::sprintf('VM_REVIEW_ERR_COMMENT2',VmConfig::get('comment_max_length')); ?>');
		else if (document.adminForm.counter.value < <?php echo VmConfig::get('comment_min_length'); ?>) alert('<?php echo JText::sprintf('VM_REVIEW_ERR_COMMENT1',VmConfig::get('comment_min_length')); ?>');
		else submitform( pressbutton );
		return;
	}
}
</script>
