<?php
defined('_JEXEC') or die();

/**
 * @author Valérie Isaksen
 * @version $Id:$
 * @package VirtueMart
 * @subpackage vmpayment
 * @copyright Copyright (C) 2004-${PHING.VM.COPYRIGHT}   - All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
 *
 * http://virtuemart.net
 */
defined('_JEXEC') or die();
$doc = JFactory::getDocument();
$doc->addStyleSheet(JURI::root(true) . '/plugins/vmpayment/eway/assets/css/eway.css');
if ($viewData['index']) {
	$id = 'payment-id-' . $viewData['virtuemart_paymentmethod_id'] . '-' . $viewData['index'];
	$inputId = 'input-id-' . $viewData['virtuemart_paymentmethod_id'] . '-' . $viewData['index'];
} else {
	$id = 'payment-id-' . $viewData['virtuemart_paymentmethod_id'];
	$inputId='';
}
?>


<label for="<?php echo $id ?>">
	<span class="vmpayment">
		<input type="radio" <?php echo $viewData['dynUpdate'] ?>
		   class="eway-select-<?php echo $viewData['virtuemart_paymentmethod_id'] ?>" name="virtuemart_paymentmethod_id"
		   data-eway="<?php echo $viewData['maskedCard'] ?>"
		   data-ewayindex="<?php echo $viewData['index'] ?>"
		   id="<?php echo $id ?>"
		   value="<?php echo $viewData['virtuemart_paymentmethod_id'] ?>" <?php echo $viewData['checked'] ?> >
		<?php echo $viewData['pluginName'] ?>
		<?php echo $viewData['costDisplay'] ?>
		<?php if ($viewData['sandbox']) { ?>
			<span style="color:red;font-weight:bold">Sandbox (<?php echo $viewData['virtuemart_paymentmethod_id'] ?>)</span>
		<?php } ?>
		<?php if ($viewData['doIssueNumber']) { ?>
		<div class="eway-display-form">
			<div class="eway-display-issuenumber">
				<?php echo vmText::_('VMPAYMENT_EWAY_PAYMENT_ISSUE_NUMBER') ?>
				<input type="text"
					id="<?php echo $inputId ?>"
					name="issueNumber-<?php echo $viewData['virtuemart_paymentmethod_id'] ?>"
					class="eway-display-input"
					data-issueNumber="<?php echo $viewData['IssueNumber'] ?>"
					placeholder="123" maxlength="4"
					value="<?php echo $viewData['IssueNumber'] ?>"
				/>
			</div>
		</div>
		<?php } ?>
	</span>
</label>
