<?php
/**
 *
 * Display form details
 *
 * @package    VirtueMart
 * @subpackage Orders
 * @author Oscar van Eijk, Max Milbers, Valérie Isaksen
 * @link https://virtuemart.net
 * @copyright Copyright (c) 2004 - ${PHING.VM.COPYRIGHT} VirtueMart Team. All rights reserved.
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
JLoader::register('vmuikitAdminUIHelper', $adminTemplate . 'helpers/vmuikit_adminuihelper.php');

vmuikitAdminUIHelper::startAdminArea($this);

vmuikitAdminUIHelper::imitateTabs('start', 'COM_VIRTUEMART_ORDER_PRINT_PO_LBL', 'uk-card-small');

// Get the plugins
VmConfig::importVMPlugins('vmpayment');

$jsOrderStatusShopperEmail = '""';
$j = 'if (typeof Virtuemart === "undefined")
	var Virtuemart = {};
	Virtuemart.confirmDelete = "' . vmText::_('COM_VIRTUEMART_ORDER_DELETE_ITEM_JS', true) . '";
	jQuery(document).ready(function() {
		Virtuemart.onReadyOrderItems();
	});
	var editingItem = 0;';
vmJsApi::addJScript('onReadyOrder', $j);

vmJsApi::addJScript('/administrator/components/com_virtuemart/assets/js/orders.js', false, false);
$unequal = (int)$this->currency->truncate($this->orderbt->toPay - $this->orderbt->paid);
if ($unequal) {
	$icon = 'unpublish';
	$val = '1';
	$text = 'COM_VIRTUEMART_ORDER_SET_PAID';
} else {
	$icon = 'publish';
	$val = '0';
	$text = 'COM_VIRTUEMART_ORDER_SET_UNPAID';
}
$baseUrl = 'index.php?option=com_virtuemart&view=orders&task=callInvoiceView&tmpl=component&virtuemart_order_id=' . $this->orderbt->virtuemart_order_id;
$print_url = $baseUrl . '&layout=invoice';


$linkTogglePaid = 'index.php?option=com_virtuemart&view=orders&task=toggle.paid.' . $val . '&cidName=virtuemart_order_id&virtuemart_order_id[]=' . $this->orderID . '&rtask=edit&' . JSession::getFormToken() . '=1';

?>
<?php // adminForm is the form for the filter only ?>
	<form name='adminForm' id="adminForm">
		<input type="hidden" name="task" value=""/>
		<input type="hidden" name="option" value="com_virtuemart"/>
		<input type="hidden" name="view" value="orders"/>
		<input type="hidden" name="virtuemart_order_id" value="<?php echo $this->orderID; ?>"/>
		<?php echo JHtml::_('form.token'); ?>
		<div id="filterbox" class="filter-bar">
			<?php
			$extras = array();

			$extras[] = adminSublayouts::renderAdminVmSubLayout('print_links',
				array(
					'order' => $this->orderbt,
					'iconRatio' => 1.2,
					'hrefClass' => 'uk-icon-button',
				)

			);

			$unequal = (int)$this->currency->truncate($this->orderbt->toPay - $this->orderbt->paid);
			if ($unequal) {
				$labelPaid = 'COM_VIRTUEMART_ORDER_IS_UNPAID';
				$colorPaidTool = 'md-color-red-600';
				$textPaidAction = 'COM_VIRTUEMART_ORDER_SET_PAID';
				$colorPaidAction = 'md-bg-green-600 md-color-white';
				$valPaid = '1';
			} else {
				$labelPaid = 'COM_VIRTUEMART_ORDER_IS_PAID';
				$colorPaidTool = 'md-color-green-600';
				$textPaidAction = 'COM_VIRTUEMART_ORDER_SET_UNPAID';
				$colorPaidAction = 'md-bg-red-600 md-color-white';
				$valPaid = '0';

			}
			$linkPaid = 'index.php?option=com_virtuemart&view=orders&task=toggle.paid.' . $valPaid . '&cidName=virtuemart_order_id&virtuemart_order_id[]=' . $this->orderID . '&rtask=edit&' . JSession::getFormToken() . '=1';


			$tool['title'] = vmText::_($labelPaid);
			$tool['button'] = $colorPaidTool;
			//$tool['subtitle'] = $texPaid;
			$tool['fields'] = array();
			$tool['footer'] = '
<a href="' . JRoute::_($linkPaid, FALSE) . '" class="uk-button uk-button-small ' . $colorPaidAction . ' uk-text-center">' .
				vmText::_($textPaidAction)
				. '</a>

';

			$tools[] = $tool;

			if (empty($this->orderbt->invoice_locked)) {
				$valLocked = '1';
				$labelLocked = 'COM_VM_ORDER_INVOICE_IS_UNLOCKED';
				$colorLockedTool = 'md-color-green-600  ';
				$textLockedAction = 'COM_VM_ORDER_INVOICE_SET_LOCKED';
				$colorLockedAction = 'md-bg-red-600 md-color-white';
				$iconLocked = 'unlock';
			} else {
				$valLocked = '0';
				$labelLocked = 'COM_VM_ORDER_INVOICE_IS_LOCKED';
				$colorLockedTool = 'md-color-red-600';
				$textLockedAction = 'COM_VM_ORDER_INVOICE_SET_UNLOCKED';
				$colorLockedAction = 'md-bg-green-600 md-color-white';
				$iconLocked = 'lock';
			}
			$linkLocked = 'index.php?option=com_virtuemart&view=orders&task=toggle.invoice_locked.' . $valLocked . '&cidName=virtuemart_order_id&virtuemart_order_id[]=' . $this->orderID . '&rtask=edit&' . JSession::getFormToken() . '=1';

			$tool['title'] = '<span><span uk-icon="icon: ' . $iconLocked . '"; ratio: 1.2"></span>';//vmText::_($labelLocked);
			$tool['button'] = $colorLockedTool;
			//$tool['subtitle'] = $texPaid;
			$tool['fields'] = array();
			$tool['footer'] = '
<a href="' . JRoute::_($linkLocked, FALSE) . '" class="uk-button uk-button-small ' . $colorLockedAction . ' uk-text-center">' .
				vmText::_($textLockedAction)
				. '</a>

';
			$tools[] = $tool;


			echo adminSublayouts::renderAdminVmSubLayout('filterbar',
				array(
					'search' => array(
						'label' => 'COM_VIRTUEMART_ORDER_PRINT_NAME',
						'name' => 'search',
						'value' => vRequest::getVar('filter_coupon')
					),
					'extras' => $extras,
					'tools' => $tools,
				));


			?>

		</div>


	</form>
	<!-- HEADER -->
	<div class="uk-child-width-1-5@xl uk-child-width-1-3@l uk-child-width-1-2@s uk-grid-small uk-grid-match"
			uk-grid>
		<?php // the first card will be displayed alone on mobile ?>
		<!-- order number -->
		<div class="uk-width-1-5@xl uk-width-1-3@l uk-width-1-1@s">
			<div class="uk-card uk-card-small uk-card-vm uk-flex">
				<div class="uk-flex-1">
					<div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-small-top">
						<?php
						$orderLink = JURI::root() . 'index.php?option=com_virtuemart&view=orders&layout=details&order_number=' . $this->orderbt->order_number . '&order_pass=' . $this->orderbt->order_pass;
						?>
						<a href="<?php echo $orderLink ?>" target="_blank"
								class="uk-icon-button md-color-cyan-600"
								uk-tooltip="<?php echo vmText::_('COM_VIRTUEMART_ORDER_VIEW_ORDER_FRONTEND') ?>"
						>
							<span uk-icon="icon: link"></span>
						</a>
					</div>
					<div class="uk-card-body">
						<div>
							<?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_PO_NUMBER') ?>
						</div>
						<div class="uk-card-title">
							<?php echo $this->orderbt->order_number; ?>
						</div>
						<div class="uk-margin-small-top">

							<span uk-icon="icon: lock; ratio: 0.75"
									uk-tooltip="<?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_PO_PASS') ?>"></span>
							<span class=" uk-margin-small-left"><?php echo $this->orderbt->order_pass; ?></span>
						</div>
						<?

						?>
						<div class="uk-margin-small-top">
							<?php
							/*
							echo adminSublayouts::renderAdminVmSubLayout('print_links',
								array(
									'order' => $this->orderbt,
									'iconRatio' => 1.2,
									'hrefClass' => 'uk-icon-button',
								));
							*/
							?>
							<?php
							if ($this->orderbt->invoiceNumbers) {
								?>
								<div class="uk-flex">
									<div class=" uk-width-auto  uk-flex-middle uk-flex uk-flex-center">
										<span uk-icon="icon: file-pdf; ratio: 0.75"
												uk-tooltip="<?php echo vmText::_('COM_VIRTUEMART_INVOICE') ?>">
										</span>
									</div>
									<div class="uk-flex-1 uk-margin-small-left">
										<?php
										foreach ($this->orderbt->invoiceNumbers as $index => $invoiceNumber) {
											?>
											<span class="uk-margin-small-right"><?php echo $invoiceNumber ?></span>
											<?php
										}
										?>
									</div>
								</div>
								<?php
							}
							?>


							<!--
							<a href="" 	class="uk-icon-button md-color-blue-600">
								<span  uk-icon="icon: print; ratio: 1.2"></span>
							</a>
							<a href="" 	class="uk-icon-button md-color-red-600">
								<span  uk-icon="icon: file-pdf; ratio: 1.2"></span>
							</a>
							<a href="" 	class="uk-icon-button md-color-green-600">
								<span  uk-icon="icon: file-text; ratio: 1.2"></span>
							</a>
							-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /order number -->
		<?php
		$userlink = false;
		if ($this->orderbt->virtuemart_user_id) {
			$userlink = JRoute::_('index.php?option=com_virtuemart&view=user&task=edit&virtuemart_user_id[]=' . $this->orderbt->virtuemart_user_id);
			$orderName = $this->orderbt->order_name;
		} else {
			$orderName = $this->orderbt->first_name . ' ' . $this->orderbt->last_name;
		}
		?>
		<!-- user -->
		<div>
			<div class="uk-card uk-card-small uk-card-vm uk-flex">
				<div class="uk-flex-1">
					<div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-small-top">
						<?php
						if ($userlink) {
							?>
							<a href="<?php echo $userlink ?>" target="_blank"
									class="uk-icon-button md-color-cyan-600"
									title="<?php echo vmText::_('COM_VIRTUEMART_ORDER_EDIT_USER') ?>"
									uk-tooltip="<?php echo vmText::_('COM_VIRTUEMART_ORDER_EDIT_USER') ?>"

							>
								<span uk-icon="icon: pencil; ratio: 0.75"></span>
							</a>
							<?php
						}
						?>

					</div>
					<div class="uk-card-body">
						<div>
							<?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_NAME') ?>
						</div>
						<div class="uk-card-title">
							<?php echo $orderName; ?>
						</div>
						<div class="uk-margin-small-top">
							<span uk-icon="icon: location; ratio: 0.75"
									uk-tooltip="<?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_PO_IPADDRESS') ?>"></span>
							<span class=" uk-margin-small-left"><?php echo $this->orderbt->ip_address; ?></span>
						</div>
						<div class="uk-margin-small-top">
							<span uk-icon="icon: world; ratio: 0.75"
									uk-tooltip="<?php echo vmText::_('COM_VIRTUEMART_ORDER_LANGUAGE') ?>"></span>
							<span class=" uk-margin-small-left"><?php echo $this->orderbt->order_language; ?></span>
						</div>


					</div>
				</div>
			</div>
		</div>
		<!-- /user -->
		<!-- total -->
		<div>
			<div class="uk-card uk-card-small uk-card-vm uk-flex">
				<div class="uk-flex-1">
					<div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-small-top">
						<!--<a href="" class="uk-icon-button md-bg-green-600 md-color-white" uk-icon="check"></a>-->

						<a href="#vm-order-items" class="uk-icon-button md-color-cyan-600"
								uk-tooltip="<?php echo vmText::_('COM_VIRTUEMART_ORDER_GOTO_ORDER_ITEMS') ?>"
								uk-scroll
						>
							<span uk-icon="icon: cart"></span>
						</a>

					</div>
					<div class="uk-card-body">
						<div>
							<?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_PO_LBL') ?>
						</div>
						<div class="uk-card-title">
							<?php echo $this->currency->priceDisplay($this->orderbt->order_total); ?>
							<?php
							$unequal = (int)$this->currency->truncate($this->orderbt->toPay - $this->orderbt->paid);
							if ($unequal) {
								$iconPaid = 'unpublish';
								$labelPaid = 'COM_VIRTUEMART_ORDER_IS_UNPAID';
								$colorPaid = 'md-color-red-600';
								$ukIconPaid = 'close';
								$valPaid = '1';
								$textPaid = 'COM_VIRTUEMART_ORDER_SET_PAID';
							} else {
								$iconPaid = 'publish';
								$labelPaid = 'COM_VIRTUEMART_ORDER_IS_PAID';
								$colorPaid = 'md-color-green-600';
								$ukIconPaid = 'check';
								$valPaid = '0';
								$texPaidt = 'COM_VIRTUEMART_ORDER_SET_UNPAID';
							}
							$linkPaid = 'index.php?option=com_virtuemart&view=orders&task=toggle.paid.' . $valPaid . '&cidName=virtuemart_order_id&virtuemart_order_id[]=' . $this->orderID . '&rtask=edit&' . JSession::getFormToken() . '=1';
							if (empty($this->orderbt->invoice_locked)) {
								$iconLocked = 'publish';
								$valLocked = '1';
								$textLocked = 'COM_VM_ORDER_INVOICE_LOCK';
								$textStateLocked = '';
								$ukIconLocked = 'unlock';
								$colorLocked = 'md-color-green-600';
							} else {
								$iconLocked = 'unpublish';
								$valLocked = '0';
								$textLocked = 'COM_VIRTUEMART_INVOICE_UNLOCK';
								$textStateLocked = vmText::_('COM_VM_ORDER_INVOICE_LOCKED');
								$ukIconLocked = 'lock';
								$colorLocked = 'md-color-red-600';
							}
							$linkLocked = 'index.php?option=com_virtuemart&view=orders&task=toggle.invoice_locked.' . $val . '&cidName=virtuemart_order_id&virtuemart_order_id[]=' . $this->orderID . '&rtask=edit&' . JSession::getFormToken() . '=1';

							?>
							<!--
							<a href="<?php echo JRoute::_($linkPaid, FALSE) ?>" class="uk-icon-button <?php echo $colorPaid ?>">
								<span uk-icon="icon: <?php echo $ukIconPaid ?>"; ratio: 1.2"></span>
							</a>
							<a href="<?php echo JRoute::_($linkLocked, FALSE) ?>" class="uk-icon-button <?php echo $colorLocked ?>">
								<span uk-icon="icon: <?php echo $ukIconLocked ?>"; ratio: 1.2"></span>
							</a>
							-->
						</div>
						<div class="uk-margin-small-top">

							<span uk-icon="icon: calendar; ratio: 0.75"
									uk-tooltip="<?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_PO_DATE') ?>"></span>
							<span class=" uk-margin-small-left"><?php echo vmJsApi::date($this->orderbt->created_on, 'LC2', true); ?></span>
						</div>
						<?php
						// TODO
						$this->orderbt->coupon_code = "XYZ";
						if ($this->orderbt->coupon_code) {
							?>
							<div class="uk-margin-small-top">

								<span uk-icon="icon: gift-box; ratio: 0.75"
										uk-tooltip="<?php echo vmText::_('COM_VIRTUEMART_COUPON_CODE') ?>"></span>
								<span class=" uk-margin-small-left"><?php echo $this->orderbt->coupon_code; ?></span>
							</div>
						<?php } ?>


					</div>
				</div>
			</div>
		</div>
		<!-- /total -->
		<div>
			<div class="uk-card uk-card-small uk-card-vm uk-flex">

				<div class="uk-flex-1">
					<div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-small-top">
						<a href="#vm-order-shipment-payment"
								class="uk-icon-button md-color-cyan-600"
								uk-tooltip="<?php echo vmText::_('COM_VIRTUEMART_ORDER_GOTO_SHIPMENT_PAYMENT') ?>"
								uk-scroll
						>
							<span uk-icon="icon: arrow-down; ratio: 1.2"></span>
						</a>
					</div>
					<div class="uk-card-body">
						<div>
							<?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_PAYMENT_LBL') ?>
						</div>
						<div class="uk-card-title">
							<?php
							$model = VmModel::getModel('paymentmethod');
							$payments = $model->getPayments();
							$model = VmModel::getModel('shipmentmethod');
							$shipments = $model->getShipments();
							?>
							<input type="hidden" size="10"
									name="virtuemart_paymentmethod_id"
									value="<?php echo $this->orderbt->virtuemart_paymentmethod_id; ?>"/>
							<!--
							<? echo VmHTML::select("virtuemart_paymentmethod_id", $payments, $this->orderbt->virtuemart_paymentmethod_id, '', "virtuemart_paymentmethod_id", "payment_name"); ?>
							<span id="delete_old_payment" style="display: none;"><br />
								<input id="delete_old_payment" type="checkbox" name="delete_old_payment" value="1" /> <label class='' for="" title="<?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_PAYMENT_DELETE_DESC'); ?>"><?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_PAYMENT_DELETE'); ?></label>
							</span>
							-->
							<?php
							foreach ($payments as $payment) {
								if ($payment->virtuemart_paymentmethod_id == $this->orderbt->virtuemart_paymentmethod_id) {
									echo $payment->payment_name;
								}
							}
							?>
						</div>
						<div>
							<?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_SHIPMENT_LBL') ?>
						</div>
						<div class="uk-card-title">
							<input type="hidden" size="10"
									name="virtuemart_shipmentmethod_id"
									value="<?php echo $this->orderbt->virtuemart_shipmentmethod_id; ?>"/>
							<!--
							<? echo VmHTML::select("virtuemart_shipmentmethod_id", $shipments, $this->orderbt->virtuemart_shipmentmethod_id, '', "virtuemart_shipmentmethod_id", "shipment_name"); ?>
							<span id="delete_old_shipment" style="display: none;"><br />
								<input id="delete_old_shipment" type="checkbox" name="delete_old_shipment" value="1" /> <label class='' for=""><?php echo vmText::_('COM_VIRTUEMART_ORDER_EDIT_CALCULATE'); ?></label>
							</span>
							-->
							<?php
							foreach ($shipments as $shipment) {
								if ($shipment->virtuemart_shipmentmethod_id == $this->orderbt->virtuemart_shipmentmethod_id) {
									echo $shipment->shipment_name;
								}
							}
							?>
						</div>
						<!--
									<div>
										<?php echo vmText::_('COM_VIRTUEMART_DELIVERY_DATE') ?>
									</div>
									<div>
										<input type="text" maxlength="190" class="required"
												value="<?php echo $this->orderbt->delivery_date; ?>"
												size="30" name="delivery_date"
												id="delivery_date_field">
									</div>
									-->
					</div>
				</div>
			</div>
		</div>
		<!-- order status -->
		<div>
			<div class="uk-card uk-card-small uk-card-vm uk-flex">
				<div class="uk-flex-1">
					<div class="uk-position-absolute uk-position-top-right uk-margin-small-right uk-margin-small-top">
						<a href="#vm-order-history"
								class="uk-icon-button md-color-cyan-600"
								uk-tooltip="<?php echo vmText::_('COM_VIRTUEMART_ORDER_GOTO_CHANGE_STATUS') ?>"
								uk-scroll>
							<span uk-icon="icon: commenting; ratio: 0.75"></span>
						</a>
					</div>
					<div class="uk-card-body">
						<div>
							<?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_PO_STATUS') ?>
						</div>
						<div class="uk-card-title">
							<?php echo $this->orderstatuslist[$this->orderbt->order_status]; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /order status -->


	</div>
	<!-- /HEADER -->

	<form action="index.php" method="post" name="orderForm" id="orderForm" class="uk-margin-medium-top">
		<div class="uk-child-width-1-3@l uk-child-width-1-2@m uk-grid uk-grid-small uk-grid-match" uk-grid>

			<!-- BT -->
			<div class="">
				<div class="uk-card   uk-card-small uk-card-vm ">
					<div class="uk-card-header">
						<div class="uk-card-title">
						<span class="md-color-cyan-600 uk-margin-small-right"
								uk-icon="icon: home; ratio: 1.2"></span>
							<?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_BILL_TO_LBL') ?>
						</div>
					</div>
					<div class="uk-card-body">
						<div class="uk-grid-collapse" uk-grid>
							<?php foreach ($this->userfields['fields'] as $_field) { ?>
								<div class="uk-width-1-3@m">
									<div class="">
										<label for="<?php echo $_field['name'] . '_field' ?>">
											<?php echo $_field['title'] ?>
										</label>
									</div>
								</div>
								<div class="uk-width-2-3@m">
									<div class="">
										<?php
										if ($_field['type'] === 'hidden') {
											echo htmlentities($_field['value'], ENT_COMPAT, 'UTF-8', false);
										} else {
											echo $_field['formcode'];
										}
										?>
									</div>
								</div>
							<?php } ?>
						</div>

					</div>
					<div class="uk-card-footer uk-text-center">
						<button class="uk-button uk-button-small uk-button-primary">
							<?php echo vmText::_('COM_VIRTUEMART_SAVE'); ?>
						</button>

						<a href="#" onClick="javascript:Virtuemart.resetOrderHead(event);"
								class="uk-button uk-button-small uk-button-default">
							<?php echo vmText::_('COM_VIRTUEMART_CANCEL'); ?>
						</a>

					</div>
				</div>
			</div>
			<!-- /BT -->
			<!-- ST -->
			<div class="">
				<div class="uk-card   uk-card-small uk-card-vm order-st">
					<div class="uk-card-header">
						<div class="uk-card-title">
						<span class="md-color-cyan-600 uk-margin-small-right"
								uk-icon="icon: location; ratio: 1.2"></span><?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_SHIP_TO_LBL') ?>
						</div>
					</div>
					<div class="uk-card-body">
						<div class="uk-grid-collapse " uk-grid>
							<?php
							if ($this->orderdetails['details']['has_ST'] == false) {
								?>

								<div class="uk-width-1-3@m">
									<div class="">
										<label for="STsameAsBT"><?php echo vmText::_('COM_VM_ST_SAME_AS_BT') ?></label>
									</div>
								</div>
								<div class="uk-width-2-3@m">
									<div class="">
										<input id="STsameAsBT" type="checkbox" checked name="STsameAsBT"
												value="1"/>
									</div>
								</div>


								<?php

							}
							?>
							<?php foreach ($this->shipmentfields['fields'] as $_field) { ?>
								<div class="uk-width-1-3@m">
									<div class="">
										<label for="<?php echo $_field['name'] . '_field' ?>">
											<?php echo $_field['title'] ?>
										</label>
									</div>
								</div>
								<div class="uk-width-2-3@m">
									<div class="">
										<?php
										if ($_field['type'] === 'hidden') {
											echo htmlentities($_field['value'], ENT_COMPAT, 'UTF-8', false);
										} else {
											echo $_field['formcode'];
										}
										?>
									</div>
								</div>
							<?php } ?>
						</div>

					</div>
					<div class="uk-card-footer uk-text-center">
						<button class="uk-button uk-button-small uk-button-primary">
							<?php echo vmText::_('COM_VIRTUEMART_SAVE'); ?>
						</button>
						<a href="#" onClick="javascript:Virtuemart.resetOrderHead(event);"
								class="uk-button uk-button-small uk-button-default"
						>
							<?php echo vmText::_('COM_VIRTUEMART_CANCEL'); ?>
						</a>
					</div>
				</div>
			</div>
			<!-- /ST -->


			<div class="uk-width-1-3@l uk-width-1-1@m">
				<div>
					<div class="uk-child-width-1-1 uk-grid-small" uk-grid>
						<div>
							<div class="uk-card   uk-card-small uk-card-vm" id="vm-order-note">
								<div class="uk-card-header">

									<div class="uk-card-title">
							<span class="md-color-cyan-600 uk-margin-small-right"
									uk-icon="icon: lock; ratio: 1.2"></span>
										<?php echo vmText::_('COM_VIRTUEMART_ORDER_NOTE') ?>
									</div>
								</div>
								<div class="uk-card-body">
								<textarea class="textarea" name="order_note" cols="60"
										rows="2"><?php echo $this->orderbt->order_note ?></textarea>

								</div>
								<div class="uk-card-footer uk-text-center">
									<button class="uk-button uk-button-small uk-button-primary">
										<?php echo vmText::_('COM_VIRTUEMART_SAVE'); ?>
									</button>
									<a href="#" onClick="javascript:Virtuemart.resetOrderHead(event);"
											class="uk-button uk-button-small uk-button-default"
									>
										<?php echo vmText::_('COM_VIRTUEMART_CANCEL'); ?>
									</a>
								</div>
							</div>
						</div>

						<!-- Order status -->
						<div>
							<div class="uk-card   uk-card-small uk-card-vm" id="vm-order-history">
								<div class="uk-card-header">

									<div class="uk-card-title">
							<span class="md-color-cyan-600 uk-margin-small-right"
									uk-icon="icon: commenting; ratio: 1.2"></span>
										<?php echo vmText::_('COM_VIRTUEMART_ORDER_HISTORY') ?>
									</div>
								</div>
								<div class="uk-card-body">
									<table class="uk-table uk-table-small uk-table-stripped">
										<thead>
										<tr>
											<th><?php echo vmText::_('COM_VIRTUEMART_ORDER_HISTORY_DATE_ADDED') ?></th>
											<th><?php echo vmText::_('COM_VIRTUEMART_ORDER_HISTORY_CUSTOMER_NOTIFIED') ?></th>
											<th><?php echo vmText::_('COM_VIRTUEMART_ORDER_LIST_STATUS') ?></th>
											<th><?php echo vmText::_('COM_VIRTUEMART_COMMENT') ?></th>
										</tr>
										</thead>
										<?php
										foreach ($this->orderdetails['history'] as $this->orderbt_event) {
											?>
											<tr>
												<td>
													<?php echo vmJsApi::date($this->orderbt_event->created_on, 'LC2', true); ?>
												</td>
												<?php
												if ($this->orderbt_event->customer_notified == 1) {
													?>
													<td class="uk-text-center">
														<span class="uk-text-success" uk-icon="icon: check"></span>
													</td>
													<?php
												} else {
													?>
													<td class="uk-text-center">
														<span uk-icon="icon: close"></span>
													</td>
													<?php
												}
												if (!isset($this->orderstatuslist[$this->orderbt_event->order_status_code])) {
													if (empty($this->orderbt_event->order_status_code)) {
														$this->orderbt_event->order_status_code = 'unknown';
													}
													$this->orderstatuslist[$this->orderbt_event->order_status_code] = vmText::sprintf('COM_VIRTUEMART_UNKNOWN_ORDER_STATUS', $this->orderbt_event->order_status_code);
												}
												?>
												<td align="center">
													<?php echo $this->orderstatuslist[$this->orderbt_event->order_status_code]; ?>
												</td>
												<td align="center">
													<?php echo $this->orderbt_event->comments; ?>
												</td>
											</tr>
											<?php

										}
										?>
										<?php
										// Load additional plugins
										$_dispatcher = JDispatcher::getInstance();
										$_returnValues1 = $_dispatcher->trigger('plgVmOnUpdateOrderBEPayment', array($this->orderID));
										$_returnValues2 = $_dispatcher->trigger('plgVmOnUpdateOrderBEShipment', array($this->orderID));
										$_returnValues = array_merge($_returnValues1, $_returnValues2);
										$_plg = '';
										foreach ($_returnValues as $_returnValue) {
											if ($_returnValue !== null) {
												?>
												<tr>
													<td colspan="4">
														<?php echo $_returnValue; ?>
													</td>
												</tr>
												<?php
											}
										}
										?>
									</table>

								</div>
								<div class="uk-card-footer uk-text-center">
									<div class="uk-inline">
										<button id="update-status-button"
												class="uk-button uk-button-small uk-button-primary"
												type="button">
											<?php echo vmText::_('COM_VIRTUEMART_ORDER_UPDATE_STATUS') ?>
										</button>
									</div>
								</div>
							</div>
						</div>
						<!-- /Order status -->
					</div>
				</div>


			</div>


		</div>
		<!-- /BT, ST, Order status -->
		<input type="hidden" name="task" value="updateOrderHead"/>
		<input type="hidden" name="option" value="com_virtuemart"/>
		<input type="hidden" name="view" value="orders"/>
		<input type="hidden" name="virtuemart_order_id" value="<?php echo $this->orderID; ?>"/>
		<input type="hidden" name="old_virtuemart_paymentmethod_id"
				value="<?php echo $this->orderbt->virtuemart_paymentmethod_id; ?>"/>
		<input type="hidden" name="old_virtuemart_shipmentmethod_id"
				value="<?php echo $this->orderbt->virtuemart_shipmentmethod_id; ?>"/>
		<?php echo JHtml::_('form.token'); ?>


	</form>

	<!-- Update order status Form -->
	<div uk-dropdown="toggle:#update-status-button; mode:click;boundary: #update-status-button; boundary-align: true">
		<?php echo $this->loadTemplate('editstatus'); ?>
	</div>
	<!-- /Update order status Form -->

	<!-- Order items -->
	<div class="uk-grid uk-grid-medium uk-grid-match" data-uk-grid>
		<div class="uk-width-1-1">
			<div class="uk-card   uk-card-small uk-card-vm">
				<div class="uk-card-header">
					<div class="uk-grid uk-grid-small" id="vm-order-items">
						<div class="uk-width-auto">

							<div class="uk-card-title">
						<span class="md-color-cyan-600 uk-margin-small-right"
								uk-icon="icon: cart; ratio: 1.2"></span>
								<?php echo vmText::_('COM_VIRTUEMART_ORDER_ITEMS') ?>
							</div>
						</div>
						<div class="uk-width-expand">
							<?php if (vmAccess::manager('orders.edit')) { ?>

								<a href="#"
										class="uk-button uk-button-small uk-button-primary uk-margin-small-right enableEdit">
									<span uk-icon="icon: pencil"></span>
									<?php echo vmText::_('COM_VIRTUEMART_ORDER_ITEMS_EDIT'); ?>
								</a>
								<a href="#" id="add-order-item"
										class="uk-button uk-button-small uk-button-primary uk-margin-small-right  orderEdit">
									<span uk-icon="icon: plus-circle"></span>
									<?php echo vmText::_('COM_VIRTUEMART_ORDER_ITEM_NEW'); ?>
								</a>
								<a href="#"
										class="uk-button uk-button-small uk-button-default  uk-margin-small-right cancelEdit orderEdit">
									<span uk-icon="icon: trash"></span>
									<?php echo vmText::_('COM_VIRTUEMART_ORDER_ITEMS_EDIT_CANCEL'); ?>
								</a>
							<?php } ?>

							<?php if (vmAccess::manager('orders.status') or vmAccess::manager('orders.edit')) { ?>
								<a class="uk-button uk-button-small uk-button-primary  updateOrderItemStatus orderEdit"
										href="#">
									<span uk-icon="icon: check"></span>
									<?php echo vmText::_('COM_VIRTUEMART_ORDER_ITEMS_SAVE'); ?></a>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="uk-card-body">
					<div class="">
						<table width="100%" id="order-items-table">
							<tr>
								<td colspan="2">
									<form action="index.php" method="post" name="orderItemForm"
											id="orderItemForm"><!-- Update linestatus form -->
										<table class="adminlist table" id="itemTable">
											<thead>
											<tr>
												<!--<th class="title" width="5%" align="left"><?php echo vmText::_('COM_VIRTUEMART_ORDER_EDIT_ACTIONS') ?></th> -->
												<th class="title" width="3" align="left">#</th>
												<th class="title" width="47"
														align="left"><?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_QUANTITY') ?></th>
												<th class="title" width="*"
														align="left"><?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_NAME') ?></th>
												<th class="title" width="10%"
														align="left"><?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_SKU') ?></th>
												<th class="title"
														width="10%"><?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_ITEM_STATUS') ?></th>
												<th class="title"
														width="50"><?php echo vmText::_('COM_VIRTUEMART_PRODUCT_FORM_PRICE_NET') ?></th>
												<th class="title"
														width="50"><?php echo vmText::_('COM_VIRTUEMART_PRODUCT_FORM_PRICE_BASEWITHTAX') ?></th>
												<th class="title"
														width="50"><?php echo vmText::_('COM_VIRTUEMART_PRODUCT_FORM_PRICE_GROSS') ?></th>
												<th class="title" width="50"><?php
													if (is_array($this->taxBill) and count($this->taxBill) == 1) {
														reset($this->taxBill);
														$t = current($this->taxBill);
														echo shopFunctionsF::getTaxNameWithValue($t->calc_rule_name, $t->calc_value);
													} else {
														echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_PRODUCT_TAX');
													}
													//echo vmText::_('COM_VIRTUEMART_PRODUCT_FORM_PRICE_TAX') ?></th>
												<th class="title"
														width="50"> <?php echo vmText::_('COM_VIRTUEMART_PRODUCT_FORM_PRICE_DISCOUNT') ?></th>
												<th class="title"
														width="5%"><?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_TOTAL') ?></th>
											</tr>
											</thead>
											<?php $i = 1;
											$i = 1;
											$rowColor = 0;
											$nbItems = count($this->orderdetails['items']);
											$this->itemsCounter = 0;


											foreach ($this->orderdetails['items'] as $index => $item) { ?>
												<?php
												$this->item = $item;
												$tmpl = "add-tmpl-" . $index;

												?>
												<tr id="<?php echo $tmpl ?>"
														class="order-item <?php echo $rowColor ?> ">
													<?php //echo vmText::_ ('COM_VIRTUEMART_PRODUCT_PRICE_ORDER');
													echo $this->loadTemplate('item'); ?>
												</tr>

												<?php
											}
											// TODO move that to fillVoidOrderItem, from the table ?
											$emptyItem = new stdClass();
											$emptyItem->product_quantity = 0;
											$emptyItem->virtuemart_order_item_id = 0; // 0-xx-yy : cloned or new order tiem
											$emptyItem->virtuemart_product_id = '';
											$emptyItem->order_item_sku = '';
											$emptyItem->order_item_name = '';
											$emptyItem->order_status = '';
											$emptyItem->product_discountedPriceWithoutTax = '';
											$emptyItem->product_item_price = '';
											$emptyItem->product_basePriceWithTax = '';
											$emptyItem->product_final_price = '';
											$emptyItem->product_tax = '';
											$emptyItem->product_subtotal_discount = '';
											$emptyItem->product_subtotal_with_tax = '';
											$emptyItem->order_status = 'P';
											$emptyItem->linkedit = '';
											$emptyItem->tax_rule = 0;
											$emptyItem->tax_rule_id = array();
											$this->item = $emptyItem;
											?>
											<tr id="add-tmpl" class="removable row<?php echo $rowColor ?>">
												<?php echo $this->loadTemplate('item'); ?>
											</tr>
											<!--/table -->
											<input type="hidden" name="task" value=""/>
											<input type="hidden" name="option" value="com_virtuemart"/>
											<input type="hidden" name="view" value="orders"/>
											<input type="hidden" name="virtuemart_order_id"
													value="<?php echo $this->orderID; ?>"/>
											<input type="hidden" name="virtuemart_paymentmethod_id"
													value="<?php echo $this->orderbt->virtuemart_paymentmethod_id; ?>"/>
											<input type="hidden" name="virtuemart_shipmentmethod_id"
													value="<?php echo $this->orderbt->virtuemart_shipmentmethod_id; ?>"/>
											<input type="hidden" name="order_total"
													value="<?php echo $this->orderbt->order_total; ?>"/>
											<?php echo JHtml::_('form.token'); ?>
									</form> <!-- Update linestatus form -->
											<!--table class="adminlist" cellspacing="0" cellpadding="0" -->
							<tr>
								<td align="left"
										colspan="1">
									<?php $editLineLink = JRoute::_('index.php?option=com_virtuemart&view=orders&orderId=' . $this->orderbt->virtuemart_order_id . '&orderLineId=0&tmpl=component&task=editOrderItem'); ?>
									<!-- <a href="<?php echo $editLineLink; ?>" class="modal"> <?php echo JHtml::_('image', 'administrator/components/com_virtuemart/assets/images/icon_16/icon-16-editadd.png', "New Item"); ?>
				New Item </a>-->
								</td>
								<td align="right" colspan="4">
									<div align="right">
										<strong> <?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_SUBTOTAL') ?>:
										</strong></div>
								</td>
								<td align="right"
										style="padding-right: 5px;"><?php echo $this->currency->priceDisplay($this->orderbt->order_subtotal); ?></td>
								<td align="right" style="padding-right: 5px;">&nbsp;</td>
								<td align="right" style="padding-right: 5px;">&nbsp;</td>
								<td align="right"
										style="padding-right: 5px;"><?php echo $this->currency->priceDisplay($this->orderbt->order_tax); ?></td>
								<td align="right"> <?php echo $this->currency->priceDisplay($this->orderbt->order_discountAmount); ?></td>
								<td width="15%" align="right"
										style="padding-right: 5px;"><?php echo $this->currency->priceDisplay($this->orderbt->order_salesPrice); ?></td>
							</tr>
							<?php
							/* COUPON DISCOUNT */
							//if (VmConfig::get('coupons_enable') == '1') {

							if ($this->orderbt->coupon_discount > 0 || $this->orderbt->coupon_discount < 0) {
								?>
								<tr>
									<td align="right" colspan="5">
										<strong><?php echo vmText::_('COM_VIRTUEMART_COUPON_DISCOUNT') ?></strong></td>
									<td align="right" style="padding-right: 5px;">&nbsp;</td>
									<td align="right" style="padding-right: 5px;">&nbsp;</td>
									<td align="right" style="padding-right: 5px;">&nbsp;</td>
									<td align="right" style="padding-right: 5px;">&nbsp;</td>
									<td align="right" style="padding-right: 5px;">&nbsp;</td>
									<td align="right" style="padding-right: 5px;"><?php
										echo $this->currency->priceDisplay($this->orderbt->coupon_discount); ?>
										<input class='orderEdit' type="text" size="8" name="coupon_discount"
												value="<?php echo $this->orderbt->coupon_discount; ?>"/>
									</td>
								</tr>
								<?php
								//}
							} ?>



							<?php
							foreach ($this->orderdetails['calc_rules'] as $rule) {
								if ($rule->calc_kind == 'DBTaxRulesBill') { ?>
									<tr>
										<td colspan="5" align="right"><?php echo $rule->calc_rule_name ?> </td>
										<td align="right" colspan="3"></td>

										<td align="right">
											<!--
					<?php echo $this->currency->priceDisplay($rule->calc_amount); ?>
					<input class='orderEdit' type="text" size="8" name="calc_rules[<?php echo $rule->calc_kind ?>][<?php echo $rule->virtuemart_order_calc_rule_id ?>][calc_tax]" value="<?php echo $rule->calc_amount; ?>"/>
				-->
										</td>
										<td align="right"><?php echo $this->currency->priceDisplay($rule->calc_amount); ?></td>
										<td align="right" style="padding-right: 5px;">
											<?php echo $this->currency->priceDisplay($rule->calc_amount); ?>
											<input class='orderEdit' type="text" size="8"
													name="calc_rules[<?php echo $rule->calc_kind ?>][<?php echo $rule->virtuemart_order_calc_rule_id ?>]"
													value="<?php echo $rule->calc_amount; ?>"/>
										</td>
									</tr>
									<?php
								} elseif ($rule->calc_kind == 'taxRulesBill') { ?>
									<tr>
										<td colspan="5" align="right"><?php echo $rule->calc_rule_name ?> </td>
										<td align="right" colspan="3"></td>
										<td align="right"><?php echo $this->currency->priceDisplay($rule->calc_amount); ?></td>
										<td align="right"></td>
										<td align="right" style="padding-right: 5px;">
											<?php echo $this->currency->priceDisplay($rule->calc_amount); ?>
											<input class='orderEdit' type="text" size="8"
													name="calc_rules[<?php echo $rule->calc_kind ?>][<?php echo $rule->virtuemart_order_calc_rule_id ?>]"
													value="<?php echo $rule->calc_amount; ?>"/>
										</td>
									</tr>
									<?php
								} elseif ($rule->calc_kind == 'DATaxRulesBill') { ?>
									<tr>
										<td colspan="5" align="right"><?php echo $rule->calc_rule_name ?> </td>
										<td align="right" colspan="3"></td>

										<td align="right"></td>
										<td align="right"><?php echo $this->currency->priceDisplay($rule->calc_amount); ?></td>
										<td align="right" style="padding-right: 5px;">
											<?php echo $this->currency->priceDisplay($rule->calc_amount); ?>
											<input class='orderEdit' type="text" size="8"
													name="calc_rules[<?php echo $rule->calc_kind ?>][<?php echo $rule->virtuemart_order_calc_rule_id ?>]"
													value="<?php echo $rule->calc_amount; ?>"/>
										</td>
									</tr>

									<?php
								}

							}
							?>

							<tr>
								<td align="right" colspan="5">
									<strong><?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_SHIPPING') ?>:</strong>
								</td>
								<td align="right"
										style="padding-right: 5px;"><?php echo $this->currency->priceDisplay($this->orderbt->order_shipment); ?>
									<input class='orderEdit' type="text" size="8" name="order_shipment"
											value="<?php echo $this->orderbt->order_shipment; ?>"/>
								</td>
								<td align="right" style="padding-right: 5px;">&nbsp;</td>
								<td align="right" style="padding-right: 5px;">&nbsp;</td>
								<td align="right"
										style="padding-right: 5px;"><?php echo $this->currency->priceDisplay($this->orderbt->order_shipment_tax); ?>
									<input class='orderEdit' type="text" size="12" name="order_shipment_tax"
											value="<?php echo $this->orderbt->order_shipment_tax; ?>"/>
								</td>
								<td align="right" style="padding-right: 5px;">&nbsp;</td>
								<td align="right"
										style="padding-right: 5px;"><?php echo $this->currency->priceDisplay($this->orderbt->order_shipment + $this->orderbt->order_shipment_tax); ?></td>

							</tr>
							<tr>
								<td align="right" colspan="5">
									<strong><?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_PAYMENT') ?>:</strong></td>
								<td align="right"
										style="padding-right: 5px;"><?php echo $this->currency->priceDisplay($this->orderbt->order_payment); ?>
									<input class='orderEdit' type="text" size="8" name="order_payment"
											value="<?php echo $this->orderbt->order_payment; ?>"/>
								</td>
								<td align="right" style="padding-right: 5px;">&nbsp;</td>
								<td align="right" style="padding-right: 5px;">&nbsp;</td>
								<td align="right"
										style="padding-right: 5px;"><?php echo $this->currency->priceDisplay($this->orderbt->order_payment_tax); ?>
									<input class='orderEdit' type="text" size="12" name="order_payment_tax"
											value="<?php echo $this->orderbt->order_payment_tax; ?>"/>
								</td>
								<td align="right" style="padding-right: 5px;">&nbsp;</td>
								<td align="right"
										style="padding-right: 5px;"><?php echo $this->currency->priceDisplay($this->orderbt->order_payment + $this->orderbt->order_payment_tax); ?></td>

							</tr>
							<?php
							if (is_array($this->taxBill) and count($this->taxBill) != 1) {
								reset($this->taxBill);
								foreach ($this->taxBill as $rule) {
									if ($rule->calc_kind != 'taxRulesBill' and $rule->calc_kind != 'VatTax') {
										continue;
									}
									?>
									<tr>
									<td colspan="5" align="right"><?php echo $rule->calc_rule_name ?> </td>
									<td align="right" colspan="3"></td>
									<td align="right" style="padding-right: 5px;">
										<?php echo $this->currency->priceDisplay($rule->calc_amount);
										/* <input class='orderEdit' type="text" size="8"
												name="calc_rules[<?php echo $rule->calc_kind ?>][<?php echo $rule->virtuemart_calc_id ?>]"
												value="<?php echo $rule->calc_amount; ?>"/>*/
										?>
									</td>
									<td align="right" colspan="2"></td>
									</tr><?php
								}
							}

							?>
							<tr>
								<td align="right" colspan="5">
									<strong><?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_TOTAL') ?>:</strong></td>
								<td align="right" style="padding-right: 5px;">&nbsp;</td>
								<td align="right" style="padding-right: 5px;">&nbsp;</td>
								<td align="right" style="padding-right: 5px;">&nbsp;</td>
								<td align="right" style="padding-right: 5px;">
									<?php echo $this->currency->priceDisplay($this->orderbt->order_billTaxAmount); ?>
									<input class='orderEdit' type="text" size="12" name="order_billTaxAmount"
											value="<?php echo $this->orderbt->order_billTaxAmount; ?>"/>
									<span style="display: block; font-size: 80%;"
											title="<?php echo vmText::_('COM_VIRTUEMART_ORDER_EDIT_CALCULATE_DESC'); ?>">
						<input class='orderEdit' type="checkbox" name="calculate_billTaxAmount" value="1"
								checked/> <label class='orderEdit'
												for="calculate_billTaxAmount"><?php echo vmText::_('COM_VIRTUEMART_ORDER_EDIT_CALCULATE'); ?></label>
					</span>
								</td>
								<td align="right" style="padding-right: 5px;">
									<strong><?php echo $this->currency->priceDisplay($this->orderbt->order_billDiscountAmount); ?></strong>
								</td>
								<td align="right" style="padding-right: 5px;">
									<strong><?php echo $this->currency->priceDisplay($this->orderbt->order_total); ?></strong>
								</td>
							</tr>
							<tr style="border-top-style:double">
								<td align="left" colspan="3" style="padding-right: 5px;">
									<strong><?php echo vmText::_('COM_VM_ORDER_BALANCE') ?></strong></td>

								<?php

								$tp = '';
								$detail = false;
								if (empty($this->orderbt->paid)) {
									$t = vmText::_('COM_VM_ORDER_UNPAID');
									/*echo '<td colspan="1"></td>';
									echo '<td align="left" colspan="2" style="padding-right: 5px;">'.$t.'</td>';
									echo '<td><input class="orderEdit" type="text" size="8" name="paid" value="'.$this->orderbt->paid.'"/></td>';*/
									//echo '</tr>';
								} else {
									if (!$unequal) {
										$t = vmText::_('COM_VM_ORDER_PAID');
									} else {
										if ($unequal > 0.0) {
											$t = vmText::sprintf('COM_VM_ORDER_PARTIAL_PAID', $this->orderbt->paid);
											$detail = true;
										} else {
											$t = vmText::sprintf('COM_VM_ORDER_CREDIT_BALANCE', $this->orderbt->paid);
											$detail = true;
										}
									}
								}
								$trOpen = true;
								$colspan = '5';
								if (empty($this->toRefund) and !$detail) {
									echo '<td align="left" colspan="2" style="padding-right: 5px;">' . $t . '</td>';
									echo '<td align="left" style="padding-right: 5px;">' . $this->orderbt->paid_on . '</td>';
									echo '<td><input class="orderEdit" type="text" size="8" name="paid" value="' . $this->orderbt->paid . '"/></td>';
									echo '</tr>';
									$trOpen = false;
								}

								if (!empty($this->toRefund)) {
									echo '<td colspan="8">' . vmText::_('COM_VM_ORDER_PRODUCTS_TO_REFUND') . '</td>';
									if ($trOpen) {
										echo '</tr>';
										$trOpen = false;
									}
									foreach ($this->toRefund as $index => $item) {

										$tmpl = "refund-tmpl-" . $index;

										echo '<tr id="' . $tmpl . '" class="order-item ' . $rowColor . ' ">';
										echo '<td colspan="3"></td>';
										echo '<td colspan="3">' . $item->order_item_name . '</td>';
										echo '<td colspan="2">' . $item->order_item_sku . '</td>';
										echo '<td>' . $this->currency->priceDisplay($item->product_tax) . '</td>';
										echo '<td></td>';
										echo '<td>' . $this->currency->priceDisplay($item->product_subtotal_with_tax) . '</td>';
										echo '</tr>';
										$this->orderbt->order_total -= $item->product_subtotal_with_tax;
										$colspan1 = '5';
										$colspan2 = '5';
									}
								} else {
									$colspan1 = '3';
									$colspan2 = '4';
								}
								//$colspan = '3';
								if (!empty($this->toRefund) or $detail) {

									if ($unequal > 0.0) {

										if (empty($this->orderbt->paid)) {
											$t = vmText::_('COM_VM_ORDER_UNPAID');
										} else {
											$t = vmText::_('COM_VM_ORDER_PARTIAL_PAID');
										}
										$l = vmText::_('COM_VM_ORDER_OUTSTANDING_AMOUNT');

									} else {
										$t = vmText::_('COM_VM_ORDER_PAID');
										$l = vmText::_('COM_VM_ORDER_BALANCE');
									}
									$totalDiff = (int)$this->currency->truncate($this->orderbt->toPay - $this->orderbt->order_total);

									$tp .= '';
									if ($totalDiff) {
										if (!$trOpen) {
											$tp .= '<tr>';
											$trOpen = true;
										}
										$tp .= '<td colspan="' . $colspan1 . '"></td>';
										$tp .= '<td align="left" colspan="' . $colspan2 . '" style="padding-right: 5px;">' . vmText::_('COM_VM_ORDER_NEW_TOTAL') . '</td>';
										$tp .= '<td>' . $this->currency->priceDisplay($this->orderbt->toPay) . '</td>';

										if ($trOpen) {
											$tp .= '</tr>';
											$trOpen = false;
										}
									}

									if (!$trOpen) {
										$tp .= '<tr>';
										$trOpen = true;
									}
									$tp .= '<td colspan="' . $colspan1 . '"></td>';
									$tp .= '<td align="left" colspan="' . $colspan2 . '" style="padding-right: 5px;">' . $t . '</td>';

									$tp .= '<td>' . $this->currency->priceDisplay($this->orderbt->paid) . '<input class="orderEdit" type="text" size="8" name="paid" value="' . $this->orderbt->paid . '"/></td>';
									//$tp .= '<td align="left" style="padding-right: 5px;">'.$this->orderbt->paid_on.'</td>';
									$tp .= '</tr>';

									$tp .= '<tr>';
									$tp .= '<td colspan="5"></td>';
									$tp .= '<td align="right" colspan="5" style="padding-right: 5px;">' . $l . '</td>';
									$tp .= '<td align="right" >' . $this->currency->priceDisplay(abs($this->orderbt->order_total - $this->orderbt->paid)) . '</td>';
									echo $tp;
								}
								if ($trOpen) {
									echo '</tr>';
									$trOpen = false;
								}

								if ($this->orderbt->user_currency_rate != 1.0) { ?>
							<tr>
								<td align="right" colspan="5">
									<em><?php echo vmText::_('COM_VIRTUEMART_ORDER_USER_CURRENCY_RATE') ?>:</em></td>
								<td align="right" style="padding-right: 5px;">&nbsp;</td>
								<td align="right" style="padding-right: 5px;">&nbsp;</td>
								<td align="right" style="padding-right: 5px;">&nbsp;</td>
								<td align="right" style="padding-right: 5px;">&nbsp;</td>
								<td align="right" style="padding-right: 5px;">&nbsp;</td>
								<td align="right" style="padding-right: 5px;">
									<em><?php echo $this->orderbt->user_currency_rate ?></em></td>
							</tr>
						<?php }
						?>
						</table>
						</td>
						</tr>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Order items -->

	<!-- shipment and payment -->
	<div class="uk-child-width-1-2@m uk-grid uk-grid-small uk-grid-match" uk-grid>

		<!-- Shipment -->
		<div class="">
			<div class="uk-card   uk-card-small uk-card-vm " id="vm-order-shipment-payment">
				<div class="uk-card-header">
					<div class="uk-card-title">
						<span class="md-color-cyan-600 uk-margin-small-right"
								uk-icon="icon: shipment; ratio: 1.2"></span>
						<?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_SHIP_TO_LBL') ?>
					</div>
				</div>
				<div class="uk-card-body">
					<div class="uk-grid-collapse" uk-grid>
						<?php

						$_dispatcher = JDispatcher::getInstance();
						$returnValues = $_dispatcher->trigger('plgVmOnShowOrderBEShipment', array($this->orderID, $this->orderbt->virtuemart_shipmentmethod_id, $this->orderdetails));

						foreach ($returnValues as $returnValue) {
							if ($returnValue !== null) {
								echo $returnValue;
							}
						}
						?>
					</div>

				</div>

			</div>
		</div>
		<!-- /Shipment -->
		<!-- Payment -->
		<div class="">
			<div class="uk-card   uk-card-small uk-card-vm ">
				<div class="uk-card-header">
					<div class="uk-card-title">
						<span class="md-color-cyan-600 uk-margin-small-right"
								uk-icon="icon: credit-card; ratio: 1.2"></span><?php echo vmText::_('COM_VIRTUEMART_ORDER_PRINT_PAYMENT_LBL') ?>
					</div>
				</div>
				<div class="uk-card-body">
					<div class="uk-grid-collapse" uk-grid>
						<?php

						$_dispatcher = JDispatcher::getInstance();
						$_returnValues = $_dispatcher->trigger('plgVmOnShowOrderBEPayment', array($this->orderID, $this->orderbt->virtuemart_paymentmethod_id, $this->orderdetails));

						foreach ($_returnValues as $_returnValue) {
							if ($_returnValue !== null) {
								echo $_returnValue;
							}
						}
						?>
					</div>

				</div>

			</div>
		</div>
		<!-- /Payment -->

	</div>
	<!-- /shipment and payment -->
<?php


//echo $this->loadTemplate('abixalmon');


vmuikitAdminUIHelper::imitateTabs('end');
vmuikitAdminUIHelper::endAdminArea();


/*
<script type="text/javascript">


// jQuery('select#order_items_status').change(function() {
	////selectItemStatusCode
	// var statusCode = this.value;
	// jQuery('.selectItemStatusCode').val(statusCode);
	// return false
// });

</script>*/

vmJsApi::addJScript('/administrator/components/com_virtuemart/assets/js/dynotable.js', false, false);

$j = 'jQuery(document).ready(function ($) {
        jQuery("#order-items-table").dynoTable({
            removeClass: ".order-item-remove", //remove class name in  table
            cloneClass: ".order-item-clone", //Custom cloner class name in  table
            addRowTemplateId: "#add-tmpl", //Custom id for  row template
            addRowButtonId: "#add-order-item", //Click this to add a new order item
            lastRowRemovable:true, //let the table be empty.
            orderable:true, //items can be rearranged
            dragHandleClass: ".order-item-ordering", //class for the click and draggable drag handle
            insertRowPlace: ".order-item", //class for the click and draggable drag handle
            onRowRemove:function () {
            },
            onBeforeRowInsert:function (newTr) {
            	var randomNumber = Math.floor(Math.random() * 100);
            	$(newTr).find("*").andSelf().filter("[name]").each(function () {
            		var name=this.name;
            		var needle = "item_id["
					var newname = name.replace(needle, needle+"0-"+randomNumber+"-");
                    this.name = newname;
                    this.id += randomNumber;
				});
            },
             onRowClone:function () {
            },
            onRowAdd:function (newTr) {
            	$(".orderEdit").show();
				$(".orderView").hide();
            },
            onTableEmpty:function () {
            },
            onRowReorder:function () {
            }
        });
        
      
        
    });';
vmJsApi::addJScript('dynotable_order_item_ini', $j);


vmJsApi::addJScript('vm-order-STsameAsBT', "
		jQuery(document).ready(function($) {

			if ( $('#STsameAsBT').is(':checked') ) {
				$('.order-st').find('button').prop('disabled', true) ;
					$('.order-st').find('input').prop('readonly', true) ;
			} else {
					$('.order-st').find('button').prop('disabled', false) ;
					$('.order-st').find('input').prop('readonly', false) ;
			}
			$('#STsameAsBT').click(function(event) {
				if($(this).is(':checked')){
					$('#STsameAsBT').val('1') ;
					$('.order-st').find('button').prop('disabled', true) ;
					$('.order-st').find('input').prop('readonly', true) ;
				} else {
					$('#STsameAsBT').val('0') ;
					$('.order-st').find('button').prop('disabled', false) ;
					$('.order-st').find('input').prop('readonly', false) ;
				}

			});
		});
	");


?>