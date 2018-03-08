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
vmJsApi::addJScript( '/plugins/vmpayment/eway/assets/js/jquery.payform.min.js');
$maskedCard=$viewData['maskedCard'];
?>


<div id="eway-page">
	<div id="eway-payment-logo">
		<img src="<?php echo JURI::root() ?>/plugins/vmpayment/eway/assets/images/eway-logo.png"/>
	</div>
	<h1><?php echo $viewData['pageTitle'] ?></h1>
	<?php if ($viewData['sandbox']) {
		echo '<p><span style="color:red;font-weight:bold">Your payment is set in sandbox mode. No real money is transferred and this is not suitable for live sites.</span></p>';
		echo '<p><span style="color:red;font-weight:bold"><a href="https://go.eway.io/s/article/Test-Credit-Card-Numbers" target="_blank">Test Credit Card Numbers</a></span></p>';
	}
	?>
	<?php if ($viewData['prefill']) {
		echo '<p><span style="color:red;font-weight:bold">Debug is on, and you are using the Sandbox. Values are prefilled. You can change them.</span></p>';
	}
	?>
	<div class="eway-cards">
		<span class="visa"></span>
		<span class="mastercard"></span>
		<span class="amex"></span>
		<span class="discover"></span>
	</div>

	<form method="POST"  action="<?php echo $viewData['FormActionURL'] ?>" id="eway-payment-form" class="eway-payment-form">
		<input type="hidden" name="EWAY_ACCESSCODE" value="<?php echo $viewData['AccessCode'] ?>"/>
		<input type="hidden" name="EWAY_PAYMENTTYPE" value="<?php echo $viewData['payment_type'] ?>"/>
		<div class="transactioncustomer">

			<div class="eway-form-group">
				<label for="eway-cardname" class="eway-control-label"><?php echo vmText::_('VMPAYMENT_EWAY_PAYMENT_CARD_HOLDER') ?></label>
				<input type='text' name='EWAY_CARDNAME' id='eway-cardname'
					   class="eway-form-control"
					   placeholder="<?php echo vmText::_('VMPAYMENT_EWAY_PAYMENT_CARD_HOLDER_PLACE') ?>"
					   value="<?php if ($viewData['prefill']) echo $maskedCard->Name ?>"
				/>
			</div>
			<div class="eway-form-group">
				<label for="eway-cardnumber" class="eway-control-label">
					<?php echo vmText::_('VMPAYMENT_EWAY_PAYMENT_CARD_NUMBER') ?></label>
				<input type="tel" name="EWAY_CARDNUMBER" id='eway-cardnumber' class="eway-form-control cc-number"
					   placeholder="4444333322221111"
					   value="<?php if ($viewData['prefill']) echo $maskedCard->Number ?>"
				/>
			</div>
			<div class="eway-form-group eway-cardexpiry-group">
				<label for="eway-cardexpirymonth" class="eway-control-label">
					<?php echo vmText::_('VMPAYMENT_EWAY_PAYMENT_EXPIRY_DATE') ?></label>
				<div class="eway-cardexpiry-select">
					<select id="eway-cardexpirymonth" class="eway-cardexpirymonth" name="EWAY_CARDEXPIRYMONTH">
						<?php
						$expiry_month = date('m');
						for ($i = 1; $i <= 12; $i++) {
							$month = sprintf('%02d', $i);
							$selected='';
							if ($viewData['prefill']) {
								if ($maskedCard->ExpiryMonth == $i) {
									$selected= " selected='selected'";
								}
							} elseif ($expiry_month == $i) {
								$selected= " selected='selected'";
							}
							?>
							<option value="<?php echo $month?>" "<?php echo $selected?>"><?php echo $month?></option>
						<?php
						}
						?>
					</select>

					<select id="eway-cardexpiryyear" class="eway-cardexpiryyear" name="EWAY_CARDEXPIRYYEAR">
						<?php
						$i = date("y");
						$j = $i + 11;
						for ($i; $i <= $j; $i++) {
							$selected='';
							if ($viewData['prefill']) {
								if ($maskedCard->ExpiryYear == $i) {
									$selected= " selected='selected'";
								}
							} elseif ($expiry_month == $i) {
							$selected= " selected='selected'";
							}
							?>
							<option value="<?php echo $i?>" "<?php echo $selected?>"><?php echo $i?></option>
						<?php
						}
						?>
					</select>
				</div>
			</div>
			<div class="eway-form-group eway-cardstart-group">
				<label for="eway-cardstartmonth" class="eway-control-label">
					<?php echo vmText::_('VMPAYMENT_EWAY_PAYMENT_VALID_FROM_DATE') ?></label>
				<div class="eway-cardstart-select">
					<select id="eway-cardstartmonth" class="eway-cardstartmonth" name="EWAY_CARDSTARTMONTH">
						<?php
						$start_month = "";
						for ($i = 1; $i <= 12; $i++) {
							$month = sprintf('%02d', $i);
							$selected='';
							if ($viewData['prefill']) {
								if ($maskedCard->StartMonth == $i) {
									$selected= " selected='selected'";
								}
							} elseif ($start_month == $i) {
								$selected= " selected='selected'";
							}
							?>
							<option value="<?php echo $month?>" "<?php echo $selected?>"><?php echo $month?></option>
							<?php
						}
						?>
					</select>

					<select id="eway-cardstartyear" class="eway-cardstartyear" name="EWAY_CARDSTARTYEAR">
						<?php
						$i = date("y");
						$j = $i - 11;
						?>
						<option value=""><?php echo vmText::_('VMPAYMENT_EWAY_PAYMENT_VALID_FROM_DATE_SELECT_YEAR') ?></option>
						<?php
						for ($i; $i >= $j; $i--) {
							$selected='';
							if ($viewData['prefill']) {
								if ($maskedCard->StartYear == $i) {
									$selected= " selected='selected'";
								}
							}
							?>
							<option value="<?php echo $i?>" "<?php echo $selected?>"><?php echo $i?></option>
							<?php
						}
						?>
					</select>
				</div>
			</div>
			<div class="eway-form-group eway-cardissuenumber-group">
				<label for="eway-cardissuenumber" class="eway-control-label">
					<?php echo vmText::_('VMPAYMENT_EWAY_PAYMENT_ISSUE_NUMBER') ?></label>
				<input type="tel" name='eway_cardissuenumber' id='eway-cardissuenumber' class="eway-form-control cc-cvc"
					   placeholder="22" maxlength="2"
					   value="<?php if ($viewData['prefill']) echo $maskedCard->IssueNumber ?>"
				/> <!-- This field is optional but highly recommended -->
			</div>
			<div class="eway-form-group eway-cardcvn-group">
				<label for="eway-cardcvn" class="eway-control-label">
					<?php echo vmText::_('VMPAYMENT_EWAY_PAYMENT_CVN') ?></label>
				<input type="tel" name='EWAY_CARDCVN' id='eway-cardcvn'
					   placeholder="123" maxlength="4"
					   class="eway-form-control cc-cvn"
					   value="<?php if ($viewData['prefill']) echo $maskedCard->CVN ?>"
				/>
				<!-- This field is optional but highly recommended -->
			</div>
		</div>
		<div class="button">
			<input type="submit" id="eway-pay-button" class="eway-button" name="btnSubmit"
				   value="<?php echo vmText::_('VMPAYMENT_EWAY_PAYMENT_SUBMIT') ?>"/>
		</div>
	</form>
</div>


<script type="text/javascript" src="https://api.ewaypayments.com/JSONP/v3/js"></script>


<script>
	jQuery(document).ready(function( $ ) {
        $('#eway-cardnumber-formatted').payform('formatCardNumber');
        $('#eway-cardcvn').payform('formatCardCVC');

        $.fn.toggleInputError = function (erred) {
            this.parent('.eway-form-group').toggleClass('eway-error', erred);
            return this;
        };
        $('#eway-payment-form').submit(function (e) {

            var cardType = $.payform.parseCardType($('#eway-cardnumber').val());
            var validCardNumber = $.payform.validateCardNumber($('#eway-cardnumber').val());
            var validCardCVC = $.payform.validateCardCVC($('#eway-cardcvn').val(), cardType);
            $('#eway-cardnumber').toggleInputError(!validCardNumber);
            $('#eway-cardcvn').toggleInputError(!validCardCVC);

            if (!validCardNumber || !validCardCVC) {
                // Stop the form from submitting
                e.preventDefault();
                return false;
            }

            $('#eway-cardnumber').val($('#eway-cardnumber').val().replace(/\s/g, ""));

            Virtuemart.ewayAjax();
        });


        Virtuemart.ewayAjax = function () {

            var form = $("#eway-payment-form");

            form.ewayAjax();

            function ewayAjax(e) {

                // call eWAY to process the request
                eWAY.process(
                    $("#eway-payment-form"),
                    {
                        autoRedirect: false,
                        onComplete: function (data) {
                            // this is a callback to hook into when the requests completes
                            window.location.replace(data.RedirectUrl);
                        },
                        onError: function (e) {
                            // this is a callback you can hook into when an error occurs
                            alert('There was an error processing the request');
                        },
                        onTimeout: function (e) {
                            // this is a callback you can hook into when the request times out
                            alert('The request has timed out.');
                        }
                    }
                );
                // Stop the form from submitting
                e.preventDefault();
            }
        }


    });
</script>


