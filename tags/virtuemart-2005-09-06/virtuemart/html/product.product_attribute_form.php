<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: product.product_attribute_form.php,v 1.3 2005/01/27 19:34:03 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage HTML
* Contains code from PHPShop(tm):
* 	@copyright (C) 2000 - 2004 Edikon Corporation (www.edikon.com)
*	Community: www.phpshop.org, forums.phpshop.org
* Conversion to Mambo and the rest:
* 	@copyright (C) 2004-2005 Soeren Eberhardt
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*/
mm_showMyFileName( __FILE__ );
?>
<h2><?php echo $PHPSHOP_LANG->_PHPSHOP_ATTRIBUTE_FORM_LBL ?> </h2>

<?php
$product_id = $vars["product_id"];
$product_parent_id = mosgetparam($_REQUEST, 'product_parent_id', 0);
$attribute_name = mosgetparam($_REQUEST, 'attribute_name', 0);

if (!empty($attribute_name)) {
  if (empty($product_parent_id)) {
    echo $PHPSHOP_LANG->_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT . " ";
  } 
  else {
    echo $PHPSHOP_LANG->_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM . " ";
  }
} 
else {

  if (empty($product_parent_id)) {
    echo $PHPSHOP_LANG->_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT . " ";
  } 
  else {
    echo $PHPSHOP_LANG->_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM . " ";
  }
}

$url = $_SERVER['PHP_SELF'] . "?page=$modulename.product_form&product_id=$product_id&product_parent_id=$product_parent_id";
echo "<a href=\"" . $sess->url($url) . "\">";
echo $ps_product->get_field($product_id,"product_name");
echo "</a>"; 

if ($attribute_name) {
  $db = new ps_DB;
  $q = "SELECT * FROM #__pshop_product_attribute_sku WHERE product_id='$product_id' ";
  $q .= "AND attribute_name = '$attribute_name' ";
  $db->query($q); 
  $db->next_record();} ?> 
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" name="adminForm" enctype="multipart/form-data">
  <table width="100%" border="0" cellpadding="2" cellspacing="0">
    <tr> 
      <td valign="top" colspan="2"> 
        <input type="hidden" name="task" value="" />
        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />
        <input type="hidden" name="old_attribute_name" value="<?php echo $attribute_name; ?>" />
        <input type="hidden" name="func" value="<?php if ($attribute_name) { echo "productAttributeUpdate";} else {echo "productAttributeAdd";} ?>" />
        <input type="hidden" name="page" value="<?php echo $modulename?>.product_attribute_list" />
        <input type="hidden" name="return_args" value="<?php echo $return_args; ?>" />
        <input type="hidden" name="option" value="com_phpshop" />
        <?php $limitstart = mosgetparam( $_REQUEST, 'limitstart'); ?>
        <input type="hidden" name="limitstart" value="<?php echo $limitstart ?>" />
</td>
    </tr>
    <tr> 
      <td width="23%" height="20" valign="top"> 
        <div align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_ATTRIBUTE_FORM_NAME ?>:</div>
      </td>
      <td width="77%" height="20"> 
        <input type="text" class="inputbox" name="attribute_name" value="<?php $db->sp("attribute_name"); ?>" size="32" maxlength="255" />
      </td>
    </tr>
    <tr> 
      <td width="23%" height="10" valign="top"> 
        <div align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_ATTRIBUTE_FORM_ORDER ?>:</div>
      </td>
      <td width="77%" height="10"> 
        <input type="text" class="inputbox" name="attribute_list" value="<?php $db->sp("attribute_list"); ?>" size="5" maxlength="11" />
      </td>
    </tr>
    <tr> 
      <td colspan="2" height="2"> </td>
    </tr>
    <tr> 
      <td colspan="2" height="22">&nbsp;</td>
    </tr>
    
  </table>
</form>
