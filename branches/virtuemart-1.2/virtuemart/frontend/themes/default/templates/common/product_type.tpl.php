<?php if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); ?>
<?php if( empty($product_types)) return; 
/**
	 * Available indexes:
	 * 
	 * $product_types["product_type_name"] => The name of the product type
	 * $product_types["parameters"] => array of the following items
	 * 		$product_types["parameters"]["parameter_label"] => The lablel for the parameter
	 * 		$product_types["parameters"]["parameter_description"] => The description of the parameter
	 * 		$product_types["parameters"]["parameter_tooltip"] => The description of the parameter formed into a tooltip
	 * 		$product_types["parameters"]["parameter_value"] => The value of the parameter
	 * 		$product_types["parameters"]["parameter_unit"] => The unit value of the value
	 * 		$product_types["parameters"]["parameter_name"] => name of the parameter
	 */
?>
    <br /><table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr><td colspan="2"><strong><?php 
    echo $VM_LANG->_('VM_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY').": ".$product_types["product_type_name"];
    ?></strong></td></tr><?php 
    $i = 0;
    foreach($product_types["parameters"] as $product_type_params) {
    	foreach($product_type_params as $attr => $val) {
    		$this->set( $attr, $val);
    	}
    if($i++ % 2) {
    	$bgcolor = 'row0';
    } else {
    	$bgcolor = 'row1';
    }
    ?><tr class="<?php echo $bgcolor;?> height="18">
    <td width="30%"><?php echo $product_type_params["parameter_label"]; 
    if (!empty($product_type_params["parameter_tooltip"])) { ?>
    	&nbsp;<?php echo $product_type_params["parameter_tooltip"]; 
    } ?>
    </td><td><?php echo $product_type_params["parameter_value"]." ".$product_type_params["unit"]; ?>
    </td></tr>
	<?php
    } ?>
    </table>