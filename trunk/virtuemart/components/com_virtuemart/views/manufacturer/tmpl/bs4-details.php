<?php
/**
 *
 * Description
 *
 * @package    VirtueMart
 * @subpackage Manufacturer
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
?>
<div data-vm="main-container">

    <?php // Manufacturer Name
    if (!empty($this->manufacturer->mf_name))
    {
        ?>
        <h1>
            <?php echo $this->manufacturer->mf_name; ?>
        </h1>
        <?php
    } ?>

    <?php // Manufacturer Image
    if (!empty($this->manufacturer->images[0]))
    {
        ?>
        <div class="vm-store-manufacturer-image">
            <?php echo $this->manufacturer->images[0]->displayMediaThumb(
                'class="img-fluid vm-category-thumbnail"', FALSE
            ); ?>
        </div>
    <?php } ?>

    <?php // Manufacturer Description
    if (!empty($this->manufacturer->mf_desc))
    { ?>
        <div class="vm-store-manufacturer-description">
            <?php echo $this->manufacturer->mf_desc ?>
        </div>
    <?php } ?>

    <?php // Manufacturer Link To Products
    if (!empty($this->manufacturer->virtuemart_manufacturer_id))
    {
        // link to the category page which shows the products of this specific manufacturer
        $manufacturerProductsURL = JRoute::_(
            'index.php?option=com_virtuemart&view=category&virtuemart_manufacturer_id=' . $this->manufacturer->virtuemart_manufacturer_id,
            FALSE
        );
        ?>
        <a href="<?php echo $manufacturerProductsURL; ?>"
           title="<?php echo vmText::_($this->manufacturer->mf_name) ?>" class="btn btn-secondary">
            <?php echo vmText::sprintf('COM_VIRTUEMART_PRODUCT_FROM_MF', $this->manufacturer->mf_name); ?>
        </a>
    <?php } ?>

    <?php // Manufacturer URL
    if (!empty($this->manufacturer->mf_url))
    { ?>
        <a href="<?php echo $this->manufacturer->mf_url ?>" target="_blank"
           title="<?php echo vmText::_($this->manufacturer->mf_name) ?>" class="btn btn-outline-secondary">
            <?php echo vmText::_('COM_VIRTUEMART_MANUFACTURER_PAGE') ?>
        </a>
    <?php } ?>
</div>