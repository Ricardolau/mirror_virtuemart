<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
*
* @version $Id: template.class.php 1095 2007-12-19 20:19:16Z soeren_nb $
* @package VirtueMart
* @subpackage html
* @copyright Copyright (C) 2008 soeren - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*
*/
global $VM_LANG;

if( vmget($_SESSION,'vm_updatepackage') == null) {
	$vmLogger->err( $VM_LANG->_('VM_UPDATE_NOTDOWNLOADED') );
	return;
}

require_once( CLASSPATH.'update.class.php');

$packageContents = vmUpdate::getPatchContents(vmget($_SESSION,'vm_updatepackage'));
if( $packageContents === false ) {
	$vmLogger->flush(); // An Error should be logged before
	return;
}
vmCommonHTML::loadMooTools();

$formObj = new formFactory( $VM_LANG->_('VM_UPDATE_PREVIEW_LBL') );
$formObj->startForm();

$vm_mainframe->addStyleDeclaration(".writable { color:green;}\n.unwritable { color:red;font-weight:bold; }");

vmUpdate::stepBar(2);
?>
<a name="warning"></a>
<div class="shop_warning">
	<span style="font-style: italic;"><?php echo $VM_LANG->_('VM_UPDATE_WARNING_TITLE') ?></span><br />
	<?php echo $VM_LANG->_('VM_UPDATE_WARNING_TEXT'); ?>
</div>
<div class="shop_info">
	<span style="font-style: italic;"><?php echo $VM_LANG->_('VM_UPDATE_PATCH_DETAILS') ?></span><br />
	<ul>
		<li><?php echo $VM_LANG->_('VM_UPDATE_PATCH_DESCRIPTION') ?>: <?php echo $packageContents['description'] ?></li>
		<li><?php echo $VM_LANG->_('VM_UPDATE_PATCH_DATE') ?>: <?php echo $packageContents['releasedate'] ?></li>
	</ul>
</div>
<table class="adminlist">
	<thead>
	  <tr>
	    <th class="title"><?php echo $VM_LANG->_('VM_UPDATE_PATCH_FILESTOUPDATE') ?></th>
	    <th class="title"><?php echo $VM_LANG->_('VM_UPDATE_PATCH_STATUS') ?></th>
	  </tr>
	  </thead>
	  <tbody>
  <?php
$valid = true;
foreach( $packageContents['fileArr'] as $file ) {
  	if( file_exists($mosConfig_absolute_path.'/'.$file)) {
  		$is_writable = is_writable($mosConfig_absolute_path.'/'.$file );
  	} else {
  		$is_writable = is_writable($mosConfig_absolute_path.'/'.dirname($file) );
  	}
  	if( !$is_writable ) {
  		$valid = false;
  	}
  	echo '<tr><td>'.$file.'</td>';
  	$class = $is_writable ? 'writable' : 'unwritable';
  	$msg = $is_writable ? $VM_LANG->_('VM_UPDATE_PATCH_WRITABLE') : $VM_LANG->_('VM_UPDATE_PATCH_UNWRITABLE');
  	echo '<td class="'.$class.'">'.$msg."</td></tr>\n";
  	
} ?>
  </tbody>
</table>

<?php
if( !empty($packageContents['queryArr'])) {
	echo '<table class="adminlist"><thead><tr><th class="title">' . $VM_LANG->_('VM_UPDATE_PATCH_QUERYTOEXEC') . ':</th></tr></thead>';
	echo '<tbody>';
	foreach($packageContents['queryArr'] as $query) {
		echo '<tr><td><pre>'.$query. "</pre></td></tr>";
	}
	echo '</tbody></table>';
}
if( $valid ) {
	echo '<div align="center">
	<input type="checkbox" name="confirm_update" id="confirm_update">
		<label for="confirm_update">' . $VM_LANG->_('VM_UPDATE_PATCH_CONFIRM_TEXT') . '</label>
		<br /><br />
	<input class="vmicon vmicon32 vmicon-32-apply" type="submit" onclick="return checkConfirm()" value="' . $VM_LANG->_('VM_UPDATE_PATCH_APPLY') . '" name="submitbutton"></div>';
} else {
	echo '<div class="shop_error">' . $VM_LANG->_('VM_UPDATE_PATCH_ERR_UNWRITABLE');
}
$formObj->finishForm('applypatchpackage', 'admin.update_result');
 ?>
 <script type="text/javascript">
 function checkConfirm() {
 	if( document.adminForm.confirm_update.checked ) {
 		return true;
 	}
 	alert( <?php echo $VM_LANG->_('VM_UPDATE_PATCH_PLEASEMARK') ?> );
 	return false;
 }
 </script>
