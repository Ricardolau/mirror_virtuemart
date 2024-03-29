<?php
/**
*
* Description
*
* @package	VirtueMart
* @subpackage Currency
* @author Max Milbers, RickG
* @link https://virtuemart.net
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

AdminUIHelper::startAdminArea($this);
AdminUIHelper::imitateTabs('start','COM_VIRTUEMART_CURRENCY_DETAILS');
?>

<form action="index.php" method="post" name="adminForm" id="adminForm">


<div class="col50">
	<fieldset>
	<legend><?php echo vmText::_('COM_VIRTUEMART_CURRENCY_DETAILS'); ?></legend>
	<table class="admintable">
		<?php echo VmHTML::row('input','COM_VIRTUEMART_CURRENCY_NAME','currency_name',vRequest::vmSpecialChars($this->currency->currency_name),'class="required"'); ?>
		<?php echo VmHTML::row('booleanlist','COM_VIRTUEMART_PUBLISHED','published',$this->currency->published); ?>
		<?php if($this->showVendors()){ echo VmHTML::row('checkbox','COM_VIRTUEMART_SHARED','shared',$this->currency->shared); } ?>
		<?php echo VmHTML::row('input','COM_VIRTUEMART_CURRENCY_EXCHANGE_RATE','currency_exchange_rate',$this->currency->currency_exchange_rate,'class="inputbox"','',6); ?>
		<?php echo VmHTML::row('input','COM_VIRTUEMART_CURRENCY_CODE_2','currency_code_2',$this->currency->currency_code_2,'class="inputbox"','',2,2); ?>
		<?php echo VmHTML::row('input','COM_VIRTUEMART_CURRENCY_CODE_3','currency_code_3',$this->currency->currency_code_3,'class="required"','',3,3); ?>
		<?php echo VmHTML::row('input','COM_VIRTUEMART_CURRENCY_NUMERIC_CODE','currency_numeric_code',$this->currency->currency_numeric_code,'class="inputbox"','',3,3); ?>
		<?php echo VmHTML::row('input','COM_VIRTUEMART_CURRENCY_SYMBOL','currency_symbol',vRequest::vmSpecialChars($this->currency->currency_symbol),'class="required"','',20,20); ?>
		<?php echo VmHTML::row('input','COM_VIRTUEMART_CURRENCY_DECIMALS','currency_decimal_place',vRequest::vmSpecialChars($this->currency->currency_decimal_place),'class="inputbox"','',20,20); ?>
		<?php echo VmHTML::row('input','COM_VIRTUEMART_CURRENCY_DECIMALSYMBOL','currency_decimal_symbol',vRequest::vmSpecialChars($this->currency->currency_decimal_symbol),'class="inputbox"','',10,10); ?>
		<?php echo VmHTML::row('input','COM_VIRTUEMART_CURRENCY_THOUSANDS','currency_thousands',vRequest::vmSpecialChars($this->currency->currency_thousands),'class="inputbox"','',10,10); ?>
		<?php echo VmHTML::row('input','COM_VIRTUEMART_CURRENCY_POSITIVE_DISPLAY','currency_positive_style',vRequest::vmSpecialChars($this->currency->currency_positive_style),'class="inputbox"','',50,50); ?>
		<?php echo VmHTML::row('input','COM_VIRTUEMART_CURRENCY_NEGATIVE_DISPLAY','currency_negative_style',vRequest::vmSpecialChars($this->currency->currency_negative_style),'class="inputbox"','',50,50);

        if($this->showVendors() ){
			echo VmHTML::row('raw','COM_VIRTUEMART_VENDOR', $this->vendorList );
		}
		?>
	</table>
	<?php echo vmText::_('COM_VIRTUEMART_CURRENCY_DISPLAY_EXPL'); ?>
	</fieldset>

</div>
	<input type="hidden" name="virtuemart_currency_id" value="<?php echo $this->currency->virtuemart_currency_id; ?>" />
	<?php echo $this->addStandardHiddenToForm(); ?>
</form>


<?php
AdminUIHelper::imitateTabs('end');
AdminUIHelper::endAdminArea(); ?>