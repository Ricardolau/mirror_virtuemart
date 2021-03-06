<?php
/**
*
* Description
*
* @package	VirtueMart
* @subpackage ShippingRate
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


<div class="col50">
	<fieldset class="adminform">
	<legend><?php echo JText::_('Shipping Rate Details'); ?></legend>
	<table class="admintable">			
		<tr>
			<td width="110" class="key">
				<label for="title">
					<?php echo JText::_( 'VM_RATE_FORM_NAME' ); ?>:
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="shipping_rate_name" id="shipping_rate_name" size="50" value="<?php echo $this->rate->shipping_rate_name; ?>" />				
			</td>
		</tr>					
		<tr>
			<td width="110" class="key">
				<label for="title">
					<?php echo JText::_( 'VM_RATE_FORM_LIST_ORDER' ); ?>:
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="shipping_rate_list_order" id="shipping_rate_list_order" size="3" value="<?php echo $this->rate->shipping_rate_list_order; ?>" />				
			</td>
		</tr>		
		<tr>
			<td width="110" class="key">
				<label for="title">
					<?php echo JText::_( 'VM_RATE_FORM_CARRIER' ); ?>:
				</label>
			</td>
			<td>
				<?php echo JHTML::_('Select.genericlist', $this->carriers, 'shipping_rate_carrier_id', '', 'shipping_carrier_id', 'shipping_carrier_name', $this->rate->shipping_rate_carrier_id); ?>			
			</td>
		</tr>					
		<tr>
			<td width="110" class="key">
				<label for="title">
					<?php echo JText::_( 'VM_RATE_FORM_COUNTRY' ); ?>:
				</label>
			</td>
			<td>
				<?php echo JHTML::_('Select.genericlist', $this->countries, 'shipping_rate_country[]', 'multiple size=10', 'country_id', 'country_name', $this->rate->shipping_rate_country); ?>			
			</td>
		</tr>		
		<tr>
			<td width="110" class="key">
				<label for="title">
					<?php echo JText::_( 'VM_RATE_FORM_ZIP_START' ); ?>:
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="shipping_rate_zip_start" id="shipping_rate_zip_start" size="10" value="<?php echo $this->rate->shipping_rate_zip_start; ?>" />				
			</td>
		</tr>					
		<tr>
			<td width="110" class="key">
				<label for="title">
					<?php echo JText::_( 'VM_RATE_FORM_ZIP_END' ); ?>:
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="shipping_rate_zip_end" id="shipping_rate_zip_end" size="10" value="<?php echo $this->rate->shipping_rate_zip_end; ?>" />				
			</td>
		</tr>				
		<tr>
			<td width="110" class="key">
				<label for="title">
					<?php echo JText::_( 'VM_RATE_FORM_WEIGHT_START' ); ?>:
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="shipping_rate_weight_start" id="shipping_rate_weight_start" size="10" value="<?php echo $this->rate->shipping_rate_weight_start; ?>" />				
			</td>
		</tr>					
		<tr>
			<td width="110" class="key">
				<label for="title">
					<?php echo JText::_( 'VM_RATE_FORM_WEIGHT_END' ); ?>:
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="shipping_rate_weight_end" id="shipping_rate_weight_end" size="10" value="<?php echo $this->rate->shipping_rate_weight_end; ?>" />				
			</td>
		</tr>
		<tr>
			<td width="110" class="key">
				<label for="title">
					<?php echo JText::_( 'VM_RATE_FORM_VALUE' ); ?>:
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="shipping_rate_value" id="shipping_rate_value" size="10" value="<?php echo $this->rate->shipping_rate_value; ?>" />				
			</td>
		</tr>					
		<tr>
			<td width="110" class="key">
				<label for="title">
					<?php echo JText::_( 'VM_RATE_FORM_PACKAGE_FEE' ); ?>:
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="shipping_rate_package_fee" id="shipping_rate_package_fee" size="10" value="<?php echo $this->rate->shipping_rate_package_fee; ?>" />				
			</td>
		</tr>	
		<tr>
			<td width="110" class="key">
				<label for="title">
					<?php echo JText::_( 'VM_RATE_FORM_CURRENCY' ); ?>:
				</label>
			</td>
			<td>
				<?php echo JHTML::_('Select.genericlist', $this->currencies, 'shipping_rate_currency_id', '', 'currency_id', 'currency_name', $this->rate->shipping_rate_currency_id); ?>							
			</td>
		</tr>					
		<tr>
			<td width="110" class="key">
				<label for="title">
					<?php echo JText::_( 'VM_RATE_FORM_VAT_ID' ); ?>:
				</label>
			</td>
			<td>
				<?php echo $this->taxRates;
				//echo JHTML::_('Select.genericlist', $this->taxRates, 'shipping_rate_vat_id', '', 'calc_id', 'calc_value', $this->rate->shipping_rate_vat_id); 
				?>											
			</td>
		</tr>										
	</table>
	</fieldset>
</div>

	<input type="hidden" name="option" value="com_virtuemart" />
	<input type="hidden" name="shipping_rate_id" value="<?php echo $this->rate->shipping_rate_id; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="controller" value="shippingrate" />
</form>


<?php AdminMenuHelper::endAdminArea(); ?> 