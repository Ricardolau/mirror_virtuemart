<?php
/**
*
* Description
*
* @package	VirtueMart
* @subpackage
* @author Max Milbers
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* @version $Id: media_edit.php 3049 2011-04-17 07:01:44Z Milbo $
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');
vmJsApi::JvalideForm();
AdminUIHelper::startAdminArea();
?>
<form name="adminForm" id="adminform" method="post" action="">
<fieldset>
<legend><?php echo JText::_('COM_VIRTUEMART_PRODUCT_CUSTOM_FIELD'); ?></legend>
<?php
$this->customfields->addHidden('view','custom');
$this->customfields->addHidden('task','');
$this->customfields->addHidden(JUtility::getToken(),1);
if ($this->custom->custom_parent_id) $this->customfields->addHidden('custom_parent_id',$this->custom->custom_parent_id);
$attribute_id = JRequest::getVar('attribute_id', '');
if(!empty($attribute_id)) $this->customfields->addHidden('attribute_id',$attribute_id);

echo $this->customfields->displayCustomFields('',$this->custom); ?>
<table class="adminform" id="custom_plg">
	<tr>
		<td class="labelcell">Choix du plugin</td>
		<td><?php echo $this->plugins ?></td>
		<td></td>
	</tr>
	<td><div id="plugin-Container"><div></td>
</table>
	</fieldset>
</form>
<script type="text/javascript">
function submitbutton(pressbutton) {
	if (pressbutton=='cancel') submitform(pressbutton);
	if (jQuery('#adminform').validationEngine('validate')== true) submitform(pressbutton);
	else return false ;
}
jQuery('#custom_plg').hide();
jQuery('#field_type').change(function () { 
	var $selected = jQuery(this).val();
	if ($selected == "E" ) jQuery('#custom_plg').show();
	else jQuery('#custom_plg').hide();

});
</script>
<?php AdminUIHelper::endAdminArea(); ?>