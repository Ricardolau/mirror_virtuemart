<?php
/**
 *
 * Paypal payment plugin
 *
 * @author Jeremy Magne
 * @version $Id: paypal.php 7217 2013-09-18 13:42:54Z alatak $
 * @package VirtueMart
 * @subpackage payment
 * ${PHING.VM.COPYRIGHT}
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

$payment_name = $viewData['payment_name'];
$responseData = $viewData['responseData'];

?>
<br />
<style>
	.paypal_ordersummary td {padding:10px;}
</style>
<table cellpadding="2" class="paypal_ordersummary">
	<?php 
	echo $this->getHtmlRow('VMPAYMENT_PAYPAL_AIO_API_PAYMENT_NAME', $payment_name);
	if ($viewData['success']) {
		echo $this->getHtmlRow('VMPAYMENT_PAYPAL_AIO_ORDER_NUMBER', $viewData['order_number']);
		if ($viewData['method']->payment_type == '_xclick-subscriptions' || $viewData['method']->payment_type == '_xclick-payment-plan') {
			echo $this->getHtmlRow('VMPAYMENT_PAYPAL_AIO_PROFILEID', $responseData['PROFILEID']);
			echo $this->getHtmlRow('VMPAYMENT_PAYPAL_AIO_PROFILESTATUS', $responseData['STATUS']);
		} else {
			echo $this->getHtmlRow('VMPAYMENT_PAYPAL_AIO_API_AMOUNT', $responseData['AMT'] . ' ' . $responseData['CURRENCYCODE']);
			echo $this->getHtmlRow('VMPAYMENT_PAYPAL_AIO_API_TRANSACTION_ID', $responseData['TRANSACTIONID']);
		}
		//echo $this->getHtmlRow('VMPAYMENT_PAYPAL_AIO_API_AUTHORIZATION_CODE', $responseData['CORRELATIONID']);
	} else {
		for ($i = 0; isset($responseData["L_ERRORCODE".$i]); $i++) {
			echo $this->getHtmlRow('VMPAYMENT_PAYPAL_AIO_API_ERROR_CODE', $responseData["L_ERRORCODE".$i]);
			$message = isset($responseData["L_LONGMESSAGE".$i]) ? $responseData["L_LONGMESSAGE".$i]: $responseData["L_SHORTMESSAGE".$i];
			echo $this->getHtmlRow('VMPAYMENT_PAYPAL_AIO_API_ERROR_DESC', $message);
		}
	}
	?>
</table>
<?php if ($viewData['success']) { ?>
	<br />
	<a class="vm-button-correct" href="<?php echo JRoute::_('index.php?option=com_virtuemart&view=orders&layout=details&order_number='.$responseData['invoice'])?>"><?php echo JText::_('VMPAYMENT_PAYPAL_AIO_VIEW_ORDER'); ?></a>
<?php } ?>