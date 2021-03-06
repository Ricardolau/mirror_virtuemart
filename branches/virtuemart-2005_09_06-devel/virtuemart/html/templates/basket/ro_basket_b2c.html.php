<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: ro_basket_b2c.html.php,v 1.2 2005/06/24 12:48:46 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage HTML
* @copyright (C) 2004-2005 Soeren Eberhardt
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* mambo-phpShop is Free Software. www.mambo-phpshop.net
* mambo-phpShop comes with absolute no warranty.
*
* This is the Read-Only Basket Template. Its is included
* in the last Step of the Checkout. The difference to the
* normal Basket is: All Update/Delete buttons and the
* quantity Box are missing.
*/
?>
<table width="100%" cellspacing="0" cellpadding="4" border="0">
  <tr align="left" class="sectiontableheader">
	<th><?php echo $PHPSHOP_LANG->_PHPSHOP_CART_NAME ?></th>
	<th><?php echo $PHPSHOP_LANG->_PHPSHOP_CART_SKU ?></th>
	<th><?php echo $PHPSHOP_LANG->_PHPSHOP_CART_PRICE ?></th>
	<th><?php echo $PHPSHOP_LANG->_PHPSHOP_CART_QUANTITY ?></th>
	<th><?php echo $PHPSHOP_LANG->_PHPSHOP_CART_SUBTOTAL ?></th>
  </tr>
<?php foreach( $product_rows as $product ) { ?>
  <tr valign="top" class="<?php echo $product['row_color'] ?>">
	<td><?php echo $product['product_name'] . $product['product_attributes'] ?></td>
    <td><?php echo $product['product_sku'] ?></td>
    <td><?php echo $product['product_price'] ?></td>
    <td><?php echo $product['quantity'] ?></td>
    <td><?php echo $product['subtotal'] ?></td>
  </tr>
<?php } ?>

<!--Begin of SubTotal, Tax, Shipping, Coupon Discount and Total listing -->
  <tr class="sectiontableentry2">
    <td colspan="4" align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_CART_SUBTOTAL ?>:</td> 
    <td><?php echo $subtotal_display ?></td>
  </tr>
<?php if( $payment_discount_before ) { ?>
  <tr class="sectiontableentry2">
    <td colspan="4" align="right"><?php echo $discount_word ?>:
    </td> 
    <td><?php echo $payment_discount_display ?></td>
  </tr>
<?php } 
if( $coupon_discount_before ) { ?>
  <tr>
    <td colspan="4" align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_COUPON_DISCOUNT ?>:
    </td> 
    <td><?php echo $coupon_display ?></td>
  </tr>
<?php 
}
if( $shipping ) { ?>
  <tr class="sectiontableentry1">
	<td colspan="4" align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_SHIPPING ?>: </td> 
	<td ><?php echo $shipping_display ?></td>
  </tr>
<?php } 
if( $payment_discount_after ) { ?>
  <tr class="sectiontableentry2">
    <td colspan="4" align="right"><?php echo $discount_word ?>:
    </td> 
    <td><?php echo $payment_discount_display ?></td>
  </tr>
<?php } 
if( $coupon_discount_after ) { ?>
  <tr>
    <td colspan="4" align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_COUPON_DISCOUNT ?>:
    </td> 
    <td><?php echo $coupon_display ?></td>
  </tr>
<?php 
}
?>
  <tr>
    <td colspan="3">&nbsp;</td>
    <td colspan="2"><hr /></td>
  </tr>
  <tr>
    <td colspan="4" align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_TOTAL ?>: </td>
    <td><strong><?php echo $order_total_display ?></strong>
    </td>
  </tr>
<?php if ( $tax ) { ?>
  <tr class="sectiontableentry2">
	<td colspan="4" align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_TOTAL_TAX ?>: </td> 
	<td><?php echo $tax_display ?></td>
  </tr>
<?php } 
?>
  <tr>
    <td colspan="5"><hr /></td>
  </tr>
</table>
