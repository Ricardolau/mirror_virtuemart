<?php
/**
 *
 * Description
 *
 * @package    VirtueMart
 * @subpackage vendor
 * @author     Patrick Kohl, Max Milbers
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
?>
<div data-vm="main-container">
    <?php // Vendor Name
    if (!empty($this->vendor->vendor_store_name))
    {
        ?>
        <span class="h4">
        <?php echo vmText::_('COM_VIRTUEMART_VENDOR_TOS'); ?>
        </span>
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

    <?php // Vendor TOS
    if (!empty($this->vendor->vendor_terms_of_service))
    { ?>
        <div class="vm-store-manufacturer-description mb-3">
            <?php echo $this->vendor->vendor_terms_of_service; ?>
        </div>
    <?php } ?>

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

    <?php // Vendor Contact Link
    if (!empty($this->vendor->virtuemart_vendor_id))
    {
        $vendorContactLink = JRoute::_(
            'index.php?option=com_virtuemart&view=vendor&layout=details&virtuemart_vendor_id=' .
            $this->vendor->virtuemart_vendor_id,
            FALSE
        );
        ?>
        <a href="<?php echo $vendorContactLink ?>" target="_blank"
           title="<?php echo vmText::_($this->vendor->vendor_store_name) ?>" class="btn btn-outline-secondary">
            <?php echo vmText::_('COM_VIRTUEMART_VENDOR_CONTACT'); ?>
        </a>
    <?php } ?>
</div>