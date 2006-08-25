<?php defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); ?>

<?php echo $buttons_header // The PDF, Email and Print buttons ?>
<?php echo $browsepage_header // The heading, the category description ?>
<?php echo $parameter_form // The Parameter search form ?>
<?php echo $orderby_form // The sort-by, order-by form PLUS top page navigation ?>

<div id="product_list" style="width:100%; float:none;">
<?php
$data =array(); // Holds the rows of products
$i = $row = $tmp_row = 0; // Counters
$num_products = count( $products );

foreach( $products as $product ) {
	
		/*** Now echo the filled cell ***/
		if( $tmp_row != $row || $row == 0 ) {
			if ( ($num_products - $i) < $products_per_row ) {
				$cell_count =$num_products - $i;
			}
			else {
				$cell_count = $products_per_row;
			}
			$row++;
			$tmp_row = $row;
		}
		$colspan = $products_per_row - $cell_count + 1;
		if( $cell_count < 1 ) {
			$cell_count = 1;
		}

		echo "<div style=\"margin-right: 5px; width:". intval(round(100/$cell_count)-2) ."%; float:left;\" id=\"".uniqid( "row_" ) ."\">";
		
		foreach( $product as $attr => $val ) {
			// Using this we make all the variables available in the template
			// translated example: $this->set( 'product_name', $product_name );
			$this->set( $attr, $val );
		}
		
		// Parse the product template (usually 'browse_x') for each product
		// and store it in our $data array 
		echo $this->fetch_cache( 'browse/'.$templatefile .'.php' );
		
		$i++;
		if ( ($i) % $products_per_row == 0) {
			$row++;
			/** if yes, close the current "row" ***/
			echo "\n</div><br style=\"clear:both;\" />";
		}
		else {
			echo "\n</div>";
			
		}
		
}
?>
</div>
<br class="clr" /><br />
<?php 
echo $browsepage_footer;

vmThemeAjaxSubmitter( 'form.addtocart_form' );

?>