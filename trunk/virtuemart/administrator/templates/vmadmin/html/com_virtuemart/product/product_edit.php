<?php
/**
*
* Description
*
* @package	VirtueMart
* @subpackage
* @author
* @link https://virtuemart.net
* @copyright Copyright (c) 2004 - Copyright (C) 2004 - 2022 Virtuemart Team. All rights reserved. VirtueMart Team. All rights reserved.
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
$adminTemplatePath = '/administrator/templates/vmadmin/html/com_virtuemart/';
JLoader::register('vmuikitAdminUIHelper', $adminTemplate . 'helpers/vmuikit_adminuihelper.php');

vmuikitAdminUIHelper::startAdminArea($this);


vmJsApi::JvalideForm();

?>
<form method="post" name="adminForm"
		action="index.php?option=com_virtuemart&view=product&task=edit&virtuemart_product_id=<?php echo $this->product->virtuemart_product_id; ?>"
		enctype="multipart/form-data"
		id="adminForm" class="uk-form-horizontal">

<?php // Loading Templates in Tabs
$tabarray = array();
$tabarray['information'] = 'COM_VIRTUEMART_PRODUCT_FORM_PRODUCT_INFO_LBL';
$tabarray['description'] = 'COM_VIRTUEMART_PRODUCT_FORM_DESCRIPTION';
$tabarray['status'] = 'COM_VIRTUEMART_PRODUCT_FORM_PRODUCT_STATUS_LBL';
$tabarray['dimensions'] = 'COM_VIRTUEMART_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL';
$tabarray['images'] = 'COM_VIRTUEMART_PRODUCT_FORM_PRODUCT_IMAGES_LBL';
if(!empty($this->product_childs)){
	$tabarray['childs'] = 'COM_VIRTUEMART_PRODUCT_CHILD_LIST';
}

$tabarray['custom'] = 'COM_VIRTUEMART_PRODUCT_FORM_PRODUCT_CUSTOM_TAB';
//$tabarray['emails'] = 'COM_VIRTUEMART_PRODUCT_FORM_EMAILS_TAB';
// $tabarray['customer'] = 'COM_VIRTUEMART_PRODUCT_FORM_CUSTOMER_TAB';


vmuikitAdminUIHelper::buildTabs ( $this,  $tabarray, $this->product->virtuemart_product_id );
// Loading Templates in Tabs END ?>


<!-- Hidden Fields -->

	<?php echo $this->addStandardHiddenToForm(null,'edit'); ?>
<input type="hidden" name="virtuemart_product_id" value="<?php echo $this->product->virtuemart_product_id; ?>" />

</form>


<?php
// templates should be outside the form
echo adminSublayouts::renderAdminVmSubLayout('images_template');
echo adminSublayouts::renderAdminVmSubLayout('relatedcf_template');
echo adminSublayouts::renderAdminVmSubLayout('customcf_template');
?>




<?php vmuikitAdminUIHelper::endAdminArea();
$adminTemplatePath = '/administrator/templates/vmadmin/html/com_virtuemart/';
vmJsApi::addJScript( '/administrator/components/com_virtuemart/assets/js/dynotable.js', false, false );
//vmJsApi::addJScript( '/administrator/components/com_virtuemart/assets/js/products.js', false, false );
vmJsApi::addJScript( $adminTemplatePath . 'assets/js/vmuikit_products.js', false, false );

$app = JFactory::getApplication();
$l = 'index.php?option=com_virtuemart&view=product&task=getData&format=json&virtuemart_product_id='.$this->product->virtuemart_product_id;
$link = 'index.php?option=com_virtuemart&view=ajax&task=getProductData&format=json&virtuemart_product_id='.$this->product->virtuemart_product_id;
if(!VmConfig::isSiteByApp()){
	$jsonLink = JURI::root(false).'administrator/'.$l;
	$vmUikitRelatedLink = JURI::root(false).'administrator/'.$link;
} else {
	$jsonLink = JRoute::_($l);
	$vmUikitRelatedLink = JRoute::_($link);
}

$j = 'if (typeof Virtuemart === "undefined")
	var Virtuemart = {};
	Virtuemart.nextCustom ="'.count($this->product->customfields).'";
	Virtuemart.jsonLink ="'.$jsonLink.'";   
	Virtuemart.vmUikitRelatedLink ="'.$vmUikitRelatedLink.'";
	Virtuemart.virtuemart_product_id ="'.$this->product->virtuemart_product_id.'";
	Virtuemart.urlDomain = "'.JURI::root ().'";
	Virtuemart.msgsent = "'.addslashes (vmText::_ ('COM_VIRTUEMART_PRODUCT_NOTIFY_MESSAGE_SENT')).'";
	Virtuemart.enterSubj = "'.vmText::_ ('COM_VIRTUEMART_PRODUCT_EMAIL_ENTER_SUBJECT').'";
	Virtuemart.enterBody = "'.vmText::_ ('COM_VIRTUEMART_PRODUCT_EMAIL_ENTER_BODY').'";
	Virtuemart.customfields;
	Virtuemart.prdcustomer;
	Virtuemart.edit_status;
	Virtuemart.imagePath = "'.JURI::root(true).$this->imagePath.'";
	Virtuemart.token = "'.JSession::getFormToken().'";
	';

$j .='Virtuemart.productScript = "/administrator/templates/vmadmin/html/com_virtuemart/assets/js/vmuikit_products.js";';


vmJsApi::addJScript('onReadyProduct',$j);

?>








