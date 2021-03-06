<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: product.product_price_form.php,v 1.7 2005/06/22 19:50:41 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage HTML
* @copyright (C) 2004-2005 Soeren Eberhardt
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*/
mm_showMyFileName( __FILE__ );

$title = $PHPSHOP_LANG->_PHPSHOP_PRICE_FORM_LBL.'<br/>';

$product_id = mosgetparam($_REQUEST, 'product_id', 0);
$product_price_id = mosgetparam($_REQUEST, 'product_price_id', 0);
$product_parent_id = mosgetparam($_REQUEST, 'product_parent_id');
$return_args = mosgetparam($_REQUEST, 'return_args');

$db = new ps_DB;
/* If Updating a Price */
if (!empty($product_price_id)) {
  /* Get field values for update */
  $q  = "SELECT * FROM #__pshop_product_price WHERE product_price_id='$product_price_id' ";
  $db->query($q); 
  $db->next_record();
} 
/* If Adding a new Price */
elseif (empty($vars["error"])) {
  /* Set default currency for product price */
  $default["product_currency"] = $ps_vendor->get_field($ps_vendor_id,"vendor_currency");
}

if (!empty($vars["product_price_id"])) {
  $product_price_id = $vars["product_price_id"];
  if (empty($product_parent_id)) {
    $title .= $PHPSHOP_LANG->_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT . " ";
  } else {
    $title .= $PHPSHOP_LANG->_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM . " ";
  }
}
else {
  if (empty($product_parent_id)) {
    $title .= $PHPSHOP_LANG->_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT . " ";
  } else {
    $title .= $PHPSHOP_LANG->_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM . " ";
  }
}

$url = $_SERVER['PHP_SELF'] . "?page=$modulename.product_form&product_id=$product_id&product_parent_id=$product_parent_id";
$title .= "<a href=\"" . $sess->url($url) . "\">". $ps_product->get_field($product_id,"product_name"). "</a>"; 

//First create the object and let it print a form heading
$formObj = &new formFactory( $title );
//Then Start the form
$formObj->startForm();

?>

<table class="adminForm">
    <tr> 
      <td valign="top" colspan="2"> 
        </td>
    </tr>
    <tr> 
      <td width="23%" height="20" valign="middle" > 
        <div align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_FORM_PRICE_NET ?>:</strong></div>
      </td>
      <td width="77%" height="20" > 
        <input type="text" class="inputbox" name="product_price" onkeyup="updateGross();" value="<?php $db->sp("product_price"); ?>" size="10" maxlength="10" />
      </td>
    </tr>
    <tr> 
      <td width="29%" ><strong><div align="right">
        <?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_FORM_PRICE_GROSS ?>:</div></strong>
      </td>
      <td width="71%" ><input type="text" class="inputbox" onkeyup="updateNet();" name="product_price_incl_tax" size="10" /></td>
    </tr>
    <tr> 
      <td width="23%" height="10" valign="middle" > 
        <div align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_PRICE_FORM_CURRENCY ?>:</strong></div>
      </td>
      <td width="77%" height="10" > 
        <?php $ps_html->list_currency("product_currency",$db->sf("product_currency")) ?>
      </td>
    </tr>
    <tr> 
      <td width="23%" height="10" valign="middle" > 
        <div align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_PRICE_FORM_GROUP ?>:</strong></div>
      </td>
      <td width="77%" height="10" >
          <?php 
            $ps_shopper_group->list_shopper_groups("shopper_group_id", $db->sf("shopper_group_id"),$db->sf("product_id"));
          ?>
      </td>
    </tr>
    <tr> 
      <td colspan="2" height="2">&nbsp;</td>
    </tr>
    <tr> 
      <td width="23%" height="10" valign="middle" > 
        <div align="right"><strong>Quantity Start:</strong></div>
      </td>
      <td width="77%" height="10" ><input type="text" value="<?php echo $db->f("price_quantity_start") ?>" size="11" name="price_quantity_start" /></td>
    </tr>
    <tr> 
      <td width="23%" height="10" valign="middle" ><div align="right"><strong>Quantity End:</strong></div>
      </td>
      <td width="77%" height="10" ><input type="text" value="<?php echo $db->f("price_quantity_end") ?>" size="11" name="price_quantity_end" /></td>
    </tr>
    <tr> 
      <td colspan="2" height="22">&nbsp;</td>
    </tr>
  </table>
<?php
// Add necessary hidden fields
$formObj->hiddenField( 'product_price_id', $product_price_id );
$formObj->hiddenField( 'product_id', $product_id );
$formObj->hiddenField( 'product_parent_id', $product_parent_id );
$formObj->hiddenField( 'return_args', $return_args );

$funcname = !empty($product_price_id) ? "productPriceUpdate" : "productPriceAdd";

// finally close the form:
$formObj->finishForm( $funcname, $modulename.'.product_price_list', $option );
?>

<script type="text/javascript">
// borrowed from OSCommerce with small modifications. 
// All rights reserved.

<?php
$tax_rate = $ps_product->get_product_taxrate( $product_id );
echo "var tax_rate=$tax_rate;";
?>

function doRound(x, places) {
  return Math.round(x * Math.pow(10, places)) / Math.pow(10, places);
}

function getTaxRate() {

    return tax_rate;

}

function updateGross() {
  var taxRate = getTaxRate();
  
  var r = new RegExp("\,", "i");
  document.adminForm.product_price.value = document.adminForm.product_price.value.replace( r, "." );
  
  var grossValue = document.adminForm.product_price.value;
  
  if (taxRate > 0) {
    grossValue = grossValue * (taxRate + 1);
  }

  document.adminForm.product_price_incl_tax.value = doRound(grossValue, 5);
}

function updateNet() {
  var taxRate = getTaxRate();
  
  var r = new RegExp("\,", "i");
  document.adminForm.product_price_incl_tax.value = document.adminForm.product_price_incl_tax.value.replace( r, "." );
  
  var netValue = document.adminForm.product_price_incl_tax.value;

  if (taxRate > 0) {
    netValue = netValue / (taxRate + 1);
  }

  document.adminForm.product_price.value = doRound(netValue, 5);
}
updateGross();
</script>
