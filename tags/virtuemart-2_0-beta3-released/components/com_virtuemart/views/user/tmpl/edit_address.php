<?php
/**
 *
 * Enter address data for the cart, when anonymous users checkout
 *
 * @package	VirtueMart
 * @subpackage User
 * @author Oscar van Eijk, Max Milbers
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

// Implement Joomla's form validation
JHTML::_('behavior.formvalidation');
JHTML::stylesheet('vmpanels.css', JURI::root().'components/com_virtuemart/assets/css/');
?>
<script language="javascript">
function myValidator(f, t)
{
	f.task.value=t; //I understand this as method to set the task of the form on the fTask. This is not longer needed, because we use another js method for the cancel button than before.
	if (document.formvalidator.isValid(f)) {
		f.submit();
		return true;
	} else {
		var msg = '<?php echo JText::_('VM_USER_FORM_MISSING_REQUIRED'); ?>';
		alert (msg);
	}
	return false;
}
</script>
<form method="post" id="userForm" name="userForm" class="form-validate">
<!--<form method="post" id="userForm" name="userForm" action="<?php echo JRoute::_( 'index.php' ); ?>" class="form-validate">-->
<div class="floatright">
	<button class="save-button" type="submit" onclick="javascript:return myValidator(userForm, '<?php echo $this->fTask; ?>');" ><?php echo JText::_('Save'); ?></button>
	<button class="cancel-button" type="reset" onclick="window.location.href='<?php echo JRoute::_( 'index.php?option=com_virtuemart&view=cart' ); ?>'" ><?php echo JText::_('Cancel'); ?></button>
</div>
<br style="clear:both;" />

<fieldset>
	<span class="bold">
		<?php echo JText::_('VM_USERFIELDS_FORM_LBL'); ?>
	</span><br /><br />
<?php
	$_k = 0;
	$_set = false;
	$_table = false;
	$_hiddenFields = '';

	if (count($this->userFields['functions']) > 0) {
		echo '<script language="javascript">'."\n";
		echo join("\n", $this->userFields['functions']);
		echo '</script>'."\n";
	}
	for ($_i = 0, $_n = count($this->userFields['fields']); $_i < $_n; $_i++) {
		// Do this at the start of the loop, since we're using 'continue' below!
		if ($_i == 0) {
			$_field = current($this->userFields['fields']);
		} else {
			$_field = next($this->userFields['fields']);
		}

		if ($_field['hidden'] == true) {
			$_hiddenFields .= $_field['formcode']."\n";
			continue;
		}
		if ($_field['type'] == 'delimiter') {
			if ($_set) {
				// We're in Fieldset. Close this one and start a new
				if ($_table) {
					echo '	</table>'."\n";
					$_table = false;
				}
				echo '</fieldset>'."\n";
			}
			$_set = true;
			echo '<fieldset>'."\n";
			echo '	<legend>'."\n";
			echo '		' . $_field['title'];
			echo '	</legend>'."\n";
			continue;
		}

		if (!$_table) {
			// A table hasn't been opened as well. We need one here,
			echo '	<table class="adminform user-details">'."\n";
			$_table = true;
		}
		echo '		<tr>'."\n";
		echo '			<td class="key">'."\n";
		echo '				<label for="'.$_field['name'].'_field">'."\n";
		echo '					'.$_field['title'] . ($_field['required']?' *': '')."\n";
		echo '				</label>'."\n";
		echo '			</td>'."\n";
		echo '			<td>'."\n";
		echo '				'.$_field['formcode']."\n";
		echo '			</td>'."\n";
		echo '		</tr>'."\n";
	}

	if ($_table) {
		echo '	</table>'."\n";
	}
	if ($_set) {
		echo '</fieldset>'."\n";
	}
	echo $_hiddenFields;
?>

</fieldset>
<?php // }
if ($this->userDetails->JUser->get('id') ) { ?>
<fieldset>
	<legend>
		<?php echo JText::_('VM_USER_FORM_SHIPTO_LBL'); ?>
	</legend>
	<a class="vmicon vmicon-16-editadd" href="index.php?option=com_virtuemart&view=user&task=editaddresscart&addrtype=ST&shipto=0&cid[]=<?php echo $this->userDetails->JUser->get('id'); ?>">
		<?php echo JText::_('VM_USER_FORM_ADD_SHIPTO_LBL'); ?>
	</a>

	<table class="adminform user-details">
		<tr>
			<td>
				<?php echo $this->lists['shipTo']; ?>
			</td>
		</tr>
	</table>
</fieldset>
<?php  } ?>
<input type="hidden" name="option" value="com_virtuemart" />
<input type="hidden" name="view" value="user" />
<input type="hidden" name="controller" value="user" />
<input type="hidden" name="task" value="<?php echo $this->fTask; // I remember, we removed that, but why? ?>" />
<input type="hidden" name="address_type" value="<?php echo $this->address_type; ?>" />
<input type="hidden" name="user_info_id" value="<?php echo $this->userInfoID; ?>" />
<?php  echo JHTML::_( 'form.token' ); ?>
</form>
