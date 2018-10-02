<?php
/**
 *
 * Description
 *
 * @package    VirtueMart
 * @subpackage vendor
 * @author     Kohl Patrick, Eugen Stranz
 * @link       ${PHING.VM.MAINTAINERURL}
 * @copyright  Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version    $Id: default.php 2701 2011-02-11 15:16:49Z impleri $
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

$min = VmConfig::get('asks_minimum_comment_length', 50);
$max = VmConfig::get('asks_maximum_comment_length', 2000);
?>
    <div data-vm="main-container">
        <?php // Vendor Name
        if (!empty($this->vendor->vendor_store_name))
        {
            ?>
            <h1 class="mb-3">
                <?php echo $this->vendor->vendor_store_name; ?>
            </h1>
        <?php } ?>

        <?php // Vendor Image
        if (!empty($this->vendor->images[0]))
        {
            ?>
            <div class="vm-store-vendor-image mb-3">
                <?php echo $this->vendor->images[0]->displayMediaThumb(
                    'class="img-fluid vm-vendor-thumbnail"', FALSE
                ); ?>
            </div>
        <?php } ?>

        <?php // Vendor Address
        if (!empty($this->vendor->virtuemart_vendor_id))
        {
            ?>
            <div class="vm-store-vendor-address mb-3">
                <?php echo shopFunctionsF::renderVendorAddress($this->vendor->virtuemart_vendor_id); ?>
            </div>
        <?php } ?>

        <form method="post" class="form-validate mb-5" action="<?php echo JRoute::_('index.php'); ?>" name="askform"
              id="askform">
        <span class="h4 d-block">
        <?php echo vmText::_('COM_VIRTUEMART_VENDOR_ASK_QUESTION') ?>
        </span>
            <div class="form-group">
                <label><?php echo vmText::_('COM_VIRTUEMART_USER_FORM_NAME') ?></label>
                <input type="text"
                       class="form-control validate[required,minSize[4],maxSize[64]]"
                       value="<?php echo $this->user->name ?>"
                       name="name" id="name" validation="required name"/>
            </div>
            <div class="form-group">
                <label><?php echo vmText::_('COM_VIRTUEMART_USER_FORM_EMAIL') ?></label>
                <input type="text"
                       class="form-control validate[required,custom[email]]"
                       value="<?php echo $this->user->email ?>"
                       name="email" id="email" validation="required email"/>
            </div>
            <div class="form-group">
                <label><?php echo vmText::sprintf('COM_VIRTUEMART_ASK_COMMENT', $min, $max) ?></label>
                <textarea
                        class="form-control validate[required,minSize[<?php echo $min ?>],maxSize[<?php echo $max ?>]]"
                        id="comment" name="comment" rows="5"></textarea>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-6 col-lg-4 col-xl-3">
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><?php echo vmText::_('COM_VIRTUEMART_ASK_COUNT') ?></span>
                        </div>
                        <input type="text" value="0" class="form-control" id="counter" name="counter"
                               readonly="readonly"/>
                    </div>
                </div>
            </div>
            <?php // captcha addition
            echo $this->captcha;
            ?>

            <input class="btn btn-primary" type="submit" name="submit_ask"
                   value="<?php echo vmText::_('COM_VIRTUEMART_ASK_SUBMIT') ?>"/>

            <input type="hidden" name="view" value="vendor"/>
            <input type="hidden" name="virtuemart_vendor_id" value="<?php echo $this->vendor->virtuemart_vendor_id ?>"/>
            <input type="hidden" name="option" value="com_virtuemart"/>
            <input type="hidden" name="task" value="mailAskquestion"/>
            <?php echo JHtml::_('form.token'); ?>
        </form>


        <?php // Vendor Details Link
        if (!empty($this->vendor->virtuemart_vendor_id))
        {
            $vendorDetailsLink = JRoute::_(
                'index.php?option=com_virtuemart&view=vendor&layout=details&virtuemart_vendor_id=' .
                $this->vendor->virtuemart_vendor_id,
                FALSE
            );
            ?>
            <a href="<?php echo $vendorDetailsLink; ?>"
               title="<?php echo vmText::_($this->vendor->vendor_store_name) ?>" class="btn btn-secondary">
                <?php echo vmText::_('COM_VIRTUEMART_VENDOR_DETAILS'); ?>
            </a>
        <?php } ?>

        <?php // Vendor TOS Link
        if (!empty($this->vendor->virtuemart_vendor_id))
        {
            $vendorTosLink = JRoute::_(
                'index.php?option=com_virtuemart&view=vendor&layout=tos&virtuemart_vendor_id=' .
                $this->vendor->virtuemart_vendor_id,
                FALSE
            );
            ?>
            <a href="<?php echo $vendorTosLink; ?>"
               title="<?php echo vmText::_($this->vendor->vendor_store_name) ?>" class="btn btn-outline-secondary">
                <?php echo vmText::_('COM_VIRTUEMART_VENDOR_TOS'); ?>
            </a>
        <?php } ?>


    </div>

<?php
vmJsApi::JvalideForm();
vmJsApi::addJScript(
    'askform', '
		jQuery(function($){
            jQuery("#askform").validationEngine("attach");
            jQuery("#comment").keyup( function () {
                var result = jQuery(this).val();
                    jQuery("#counter").val( result.length );
            });
		});
	'
);
?>