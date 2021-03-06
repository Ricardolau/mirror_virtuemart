<?php defined('_JEXEC') or die('Restricted access'); ?>
	<div class="topten-view">
	<?php
	$iTopTen = 1;
	
	
	// calculation of the categories per row
	$topten_products_per_row = 3;	
	$toptencellwidth = floor( 100 / $topten_products_per_row);
	
	echo "<h4>".JText::_('VM_TOPTEN_PRODUCT')."</h4>";
	
	foreach ($this->toptenProducts as $topProduct) {
		
		if ($iTopTen == 1) { // this is an indicator wether a row needs to be opened or not ?>
		<div class="topten-row">
		<?php }
		?>
		
			<!-- Product Listing Output -->
			<div class="width<?php echo $toptencellwidth ?> floatleft">
		
				<div>
					<div class="width30 floatleft center">
					
			<?php
						if ($topProduct->product_thumb_image) {
					echo JHTML::_('link', JRoute::_('index.php?option=com_virtuemart&view=productdetails&product_id='.$topProduct->product_id.'&category_id='.$topProduct->category_id),VmImage::getImageByProduct($topProduct)->displayImage('class="toptenProductImage" border="0"',$topProduct->product_name));
						}
			?>

					</div>
		
					<div class="width70 floatright">
				
						<h3><?php echo JHTML::link(JRoute::_('index.php?option=com_virtuemart&view=productdetails&product_id='.$topProduct->product_id.'&category_id='.$topProduct->category_id), $topProduct->product_name, array('title' => $topProduct->product_name)); ?></h3>
						
						<?php // Product Short Description
						if(!empty($topProduct->product_s_desc)) { ?> 
						<p class="product_s_desc">
						<?php echo $topProduct->product_s_desc; ?>
						</p>
						<?php } ?>
						
						
						<div class="product-price marginbottom12">
<?php	if (VmConfig::get('show_prices') == '1') {
//				if( $topProduct->product_unit && VmConfig::get('vm_price_show_packaging_pricelabel')) {
//						echo "<strong>". JText::_('VM_CART_PRICE_PER_UNIT').' ('.$topProduct->product_unit."):</strong>";
//					} else echo "<strong>". JText::_('VM_CART_PRICE'). ": </strong>";

					
					if( $this->showBasePrice ){
						echo shopFunctionsF::createPriceDiv('basePrice','VM_PRODUCT_BASEPRICE',$topProduct->prices);
						echo shopFunctionsF::createPriceDiv('basePriceVariant','VM_PRODUCT_BASEPRICE_VARIANT',$topProduct->prices);
					}
					echo shopFunctionsF::createPriceDiv('variantModification','VM_PRODUCT_VARIANT_MOD',$topProduct->prices);
					echo shopFunctionsF::createPriceDiv('basePriceWithTax','VM_PRODUCT_BASEPRICE_WITHTAX',$topProduct->prices);
					echo shopFunctionsF::createPriceDiv('discountedPriceWithoutTax','VM_PRODUCT_DISCOUNTED_PRICE',$topProduct->prices);
					echo shopFunctionsF::createPriceDiv('salesPriceWithDiscount','VM_PRODUCT_SALESPRICE_WITH_DISCOUNT',$topProduct->prices);
					echo shopFunctionsF::createPriceDiv('salesPrice','VM_PRODUCT_SALESPRICE',$topProduct->prices);
					echo shopFunctionsF::createPriceDiv('priceWithoutTax','VM_PRODUCT_SALESPRICE_WITHOUT_TAX',$topProduct->prices);
					echo shopFunctionsF::createPriceDiv('discountAmount','VM_PRODUCT_DISCOUNT_AMOUNT',$topProduct->prices);
					echo shopFunctionsF::createPriceDiv('taxAmount','VM_PRODUCT_TAX_AMOUNT',$topProduct->prices);
			} ?>
	</div>
						<div>
						<?php // Product Details Button
						echo JHTML::link(JRoute::_('index.php?option=com_virtuemart&view=productdetails&product_id='.$topProduct->product_id.'&category_id='.$topProduct->category_id), JText::_('PRODUCT_DETAILS'), array('title' => $topProduct->product_name,'class' => 'product-details'));
				?>
						</div>
						

				
		</div>

	
				
					
				<div class="clear"></div>
				</div>
			
			
		</div>

		<?php
		// Do we need to close the current row now?
		if ($iTopTen == $topten_products_per_row) { // If the number of products per row has been reached
			echo "<div class='clear'></div></div>";
			$iTopTen = 1;
		}
		else {
			$iTopTen++;
	} 
			} 
	// Do we need a final closing row tag?
	if ($iTopTen != 1) {
		echo "<div class='clear'></div></div>";
	}
	?>
	<div class="clear"></div>
	</div>