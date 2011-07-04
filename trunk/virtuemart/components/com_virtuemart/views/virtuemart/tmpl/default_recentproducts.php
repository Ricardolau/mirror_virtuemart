<?php
/**
*
* Description
*
* @package	VirtueMart
* @subpackage
* @author
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2004 - 2011 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* @version $Id: view.html.php 3051 2011-04-17 21:04:06Z Milbo $
*/
// Access
defined ( '_JEXEC' ) or die ( 'Restricted access' );

// Category and Columns Counter
$iFeaturedCol = 1;
$iFeaturedProduct = 1;

// Calculating Products Per Row
$featuredProducts_per_row = VmConfig::get ( 'featured_products_per_row', 3 ) ;
$Featuredcellwidth = ' width'.floor ( 100 / $featuredProducts_per_row );

// Separator
$verticalseparator = " vertical-separator";
?>

<div class="recently-view">

	<h4><?php echo JText::_('COM_VIRTUEMART_RECENT_PRODUCTS') ?></h4>

<?php // Start the Output
foreach ( $this->recentProducts as $featProduct ) {

	// Show the horizontal seperator
	if ($iFeaturedCol == 1 && $iFeaturedProduct > $featuredProducts_per_row) { ?>
	<div class="horizontal-separator"></div>
	<?php }

	// this is an indicator wether a row needs to be opened or not
	if ($iFeaturedCol == 1) { ?>
	<div class="row">
	<?php }

	// Show the vertical seperator
	if ($iFeaturedProduct == $featuredProducts_per_row or $iFeaturedProduct % $featuredProducts_per_row == 0) {
		$show_vertical_separator = ' ';
	} else {
		$show_vertical_separator = $verticalseparator;
	}

		// Show Products ?>
		<div class="product floatleft<?php echo $Featuredcellwidth . $show_vertical_separator ?>">
			<div class="spacer">
					<h3>
					<?php // Product Name
					echo JHTML::link ( JRoute::_ ( 'index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=' . $featProduct->virtuemart_product_id . '&virtuemart_category_id=' . $featProduct->virtuemart_category_id ), $featProduct->product_name, array ('title' => $featProduct->product_name ) ); ?>
					</h3>

					<div>
					<?php // Product Image
					if ($featProduct->images) {
						echo JHTML::_ ( 'link', JRoute::_ ( 'index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=' . $featProduct->virtuemart_product_id . '&virtuemart_category_id=' . $featProduct->virtuemart_category_id ), $featProduct->images[0]->displayMediaThumb('class="featuredProductImage" border="0"') );
					}
					?>
					</div>

					<div class="product-price">
					<?php
					if (VmConfig::get ( 'show_prices' ) == '1') {
					//				if( $featProduct->product_unit && VmConfig::get('vm_price_show_packaging_pricelabel')) {
					//						echo "<strong>". JText::_('COM_VIRTUEMART_CART_PRICE_PER_UNIT').' ('.$featProduct->product_unit."):</strong>";
					//					} else echo "<strong>". JText::_('COM_VIRTUEMART_CART_PRICE'). ": </strong>";

					if ($this->showBasePrice) {
						echo $this->currency->createPriceDiv ( 'basePrice', 'COM_VIRTUEMART_PRODUCT_BASEPRICE', $featProduct->prices );
						echo $this->currency->createPriceDiv ( 'basePriceVariant', 'COM_VIRTUEMART_PRODUCT_BASEPRICE_VARIANT', $featProduct->prices );
					}
					echo $this->currency->createPriceDiv ( 'variantModification', 'COM_VIRTUEMART_PRODUCT_VARIANT_MOD', $featProduct->prices );
					echo $this->currency->createPriceDiv ( 'basePriceWithTax', 'COM_VIRTUEMART_PRODUCT_BASEPRICE_WITHTAX', $featProduct->prices );
					echo $this->currency->createPriceDiv ( 'discountedPriceWithoutTax', 'COM_VIRTUEMART_PRODUCT_DISCOUNTED_PRICE', $featProduct->prices );
					echo $this->currency->createPriceDiv ( 'salesPriceWithDiscount', 'COM_VIRTUEMART_PRODUCT_SALESPRICE_WITH_DISCOUNT', $featProduct->prices );
					echo $this->currency->createPriceDiv ( 'salesPrice', 'COM_VIRTUEMART_PRODUCT_SALESPRICE', $featProduct->prices );
					echo $this->currency->createPriceDiv ( 'priceWithoutTax', 'COM_VIRTUEMART_PRODUCT_SALESPRICE_WITHOUT_TAX', $featProduct->prices );
					echo $this->currency->createPriceDiv ( 'discountAmount', 'COM_VIRTUEMART_PRODUCT_DISCOUNT_AMOUNT', $featProduct->prices );
					echo $this->currency->createPriceDiv ( 'taxAmount', 'COM_VIRTUEMART_PRODUCT_TAX_AMOUNT', $featProduct->prices );
					} ?>
					</div>

					<div>
					<?php // Product Details Button
					echo JHTML::link ( JRoute::_( 'index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=' . $featProduct->virtuemart_product_id . '&virtuemart_category_id=' . $featProduct->virtuemart_category_id ), JText::_ ( 'COM_VIRTUEMART_PRODUCT_DETAILS' ), array ('title' => $featProduct->product_name, 'class' => 'product-details' ) );
					?>
					</div>
			</div>
		</div>
	<?php
	$iFeaturedProduct ++;

	// Do we need to close the current row now?
	if ($iFeaturedCol == $featuredProducts_per_row) { ?>
	<div class="clear"></div>
	</div>
		<?php
		$iFeaturedCol = 1;
	} else {
		$iFeaturedCol ++;
	}
}
// Do we need a final closing row tag?
if ($iFeaturedCol != 1) { ?>
	<div class="clear"></div>
	</div>
<?php
}
?>
</div>