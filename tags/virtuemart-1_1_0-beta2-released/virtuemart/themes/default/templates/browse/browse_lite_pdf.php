<table><tr><td></td></tr></table>
<table width="100%">
  <tr>
	<td><?php echo ps_product::image_tag( $product_thumb_image, 'class="browseProductImage" border="0" title="'.$product_name.'" alt="'.$product_name .'"' ) ?>
       </td>
	<td><h2><?php echo $product_name ?></h2><br><?php echo $product_price ?></td>
  </tr>
  <tr><td colspan="2"><?php echo $product_s_desc ?> <a href="<?php echo $product_flypage ?>">[<?php echo $product_details ?>...]</a></td>
  </tr>
</table>
