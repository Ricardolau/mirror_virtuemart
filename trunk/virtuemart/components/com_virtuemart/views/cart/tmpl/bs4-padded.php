<?php
/**
 *
 * Layout for the add to cart popup
 *
 * @package    VirtueMart
 * @subpackage Cart
 * @author     Max Milbers
 *
 * @link       ${PHING.VM.MAINTAINERURL}
 * @copyright  Copyright (c) 2013 VirtueMart Team. All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version    $Id: cart.php 2551 2010-09-30 18:52:40Z milbo $
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');
?>

<div class="text-center p-3">
    <?php
    if ($this->products)
    {
        foreach ($this->products as $product)
        {
            if ($product->quantity > 0)
            {
                echo '<span class="h5 mb-4 d-block">' . vmText::sprintf(
                        'COM_VIRTUEMART_CART_PRODUCT_ADDED', $product->product_name, $product->quantity
                    ) . '</span>';
            }
            if (!empty($product->errorMsg))
            {
                echo '<span class="h6 mb-4 d-block">' . $product->errorMsg . '</span>';
            }
        }
    }
    ?>
</div>
<div class="text-center p-3">
    <a href="<?php echo $this->cart_link ?>" title="<?php echo vmText::_('COM_VIRTUEMART_CART_SHOW'); ?>"
       class="btn btn-primary mb-3 d-block">
        <?php echo vmText::_('COM_VIRTUEMART_CART_SHOW'); ?>
    </a>
    <a href="<?php echo $this->continue_link ?>" title="<?php echo vmText::_('COM_VIRTUEMART_CONTINUE_SHOPPING'); ?>"
       class="btn btn-outline-primary d-block">
        <?php echo vmText::_('COM_VIRTUEMART_CONTINUE_SHOPPING'); ?>
    </a>
</div>

<?php
// if (VmConfig::get('popup_rel', 1))
// {
//     //VmConfig::$echoDebug=true;
//     if ($this->products and is_array($this->products) and count($this->products) > 0)
//     {
//
//         $product = reset($this->products);
//
//         $customFieldsModel     = VmModel::getModel('customfields');
//         $product->customfields = $customFieldsModel->getCustomEmbeddedProductCustomFields($product->allIds, 'R');
//
//         $customFieldsModel->displayProductCustomfieldFE($product, $product->customfields);
//         if (!empty($product->customfields))
//         {
//             ?>
<!--            <div class="product-related-products">-->
<!--            <h4>--><?php //echo vmText::_('COM_VIRTUEMART_RELATED_PRODUCTS'); ?><!--</h4>-->
<!--            --><?php
//         }
//         foreach ($product->customfields as $rFields)
//         {
//
//             if (!empty($rFields->display))
//             {
//                 ?>
<!--                <div class="product-field product-field-type---><?php //echo $rFields->field_type ?><!--">-->
<!--                    <div class="product-field-display">--><?php //echo $rFields->display ?><!--</div>-->
<!--                </div>-->
<!--            --><?php //}
//         } ?>
<!--        </div>-->
<!--        --><?php
//     }
// }