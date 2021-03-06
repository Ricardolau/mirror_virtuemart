<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: product.product_type_parameter_form.php,v 1.3 2005/08/26 12:53:57 dvorakz Exp $
* @package mambo-phpShop
* @subpackage HTML
*
* @author Zdenek Dvorak <Zdenek.Dvorak@seznam.cz>
* @copyright (C) 2005 Zdenek Dvorak
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*/

$product_type_id = mosgetparam($_REQUEST, 'product_type_id', 0);
$parameter_name = mosgetparam($_REQUEST, 'parameter_name', "");
$parameter_type = "";
$task = mosgetparam($_REQUEST, 'task', "");

  $db = new ps_DB;
  
  $q = "SELECT * from #__pshop_product_type ";
  $q .= "WHERE product_type_id='$product_type_id'";
  $db->query($q);
  $db->next_record();
  
?>

<h2><?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL."<br>";
echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_LBL . ": ";
echo $db->f("product_type_name"); ?>
</h2>

<?php 
  if (!$product_type_id || !$db->f("product_type_name")) {
      echo "<span class=\"sectionname\">";
      echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND;
      echo " <a href=\"".$_SERVER['PHP_SELF']."?option=com_phpshop&page=product.product_type_list\"> [";
      echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_LIST_LBL." ]</a>";
      echo "</span>";
  }
  else {
    $edit_parametr = false;  // Parametr not exist and it is created
    if ($parameter_name) {
      $q  = "SELECT * FROM #__pshop_product_type_parameter ";
      $q .= "WHERE product_type_id=".$product_type_id." ";
      $q .= "AND parameter_name='".$parameter_name."'";
      $db->query($q);
      if( $db->next_record() ) {
	  	$parameter_type = $db->f("parameter_type");
		$edit_parametr = true;  // Parametr exist and it is edited
	  }
    }
    elseif (empty($vars["error"])) {
/*      $default["product_type_publish"] = "Y";
      $default["category_flypage"] = "shop.flypage";
      $default["category_browsepage"] = CATEGORY_TEMPLATE;
      $default["products_per_row"] = PRODUCTS_PER_ROW;*/
    }
    
?> 
<!-- import the language module -->
<script type="text/javascript" src="http://inzep.x-team.cz/includes/js/calendar/lang/calendar-en.js"></script>
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:10000;"></div>
<script language="Javascript" src="http://inzep.x-team.cz/includes/js/overlib_mini.js"></script>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" name="adminForm">
  <table width="100%" border="0" cellspacing="0" cellpadding="2" >
    <tr> 
      <td width="25%" nowrap><div align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME ?>
        <?php echo mm_ToolTip($PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION) ?> :</div>
      </td>
      <td width="75%">
        <input type="text" class="inputbox" name="parameter_name" size="60" value="<?php $db->sp('parameter_name') ?>" />
	<input type="hidden" name="parameter_old_name" value="<?php echo $parameter_name ?>" />
        <input type="hidden" name="product_type_id" value="<?php echo $product_type_id ?>" />
        <input type="hidden" name="task" value="<?php echo $task ?>" />
        <input type="hidden" name="page" value="<?php echo $modulename ?>.product_type_parameter_list" />
        <input type="hidden" name="func" value="<?php if ($edit_parametr) { echo "ProductTypeUpdateParam";} else {echo "ProductTypeAddParam";} ?>" />
        <input type="hidden" name="option" value="com_phpshop" />
      </td>
    </tr>
    <tr>
      <td valign="top"><div align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL ?>:</div></td>
      <td width="75%">
		<textarea class="inputbox" name="parameter_label" cols="60" rows="3" ><?php $db->sp("parameter_label") ?></textarea>
      </td>
    </tr>
    <tr> 
      <td width="25%" nowrap valign="top"><div align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION ?>:</div></td>
      <td width="75%" valign="top">
		<?php
//		<textarea class="inputbox" name="parameter_description" cols="60" rows="6" ><?php $db->sp("parameter_description") OTAZNIK></textarea>
		editorArea( 'editor1', $db->f("parameter_description"), 'parameter_description', '450', '200', '60', '6' );
		?>
      </td>
    </tr>
    <tr>
      <td><div align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_MODULE_LIST_ORDER ?>: </div></td>
      <td valign="top"><?php 
        echo $ps_product_type_parameter->list_order_parameter( $db->f("product_type_id"), $db->f("parameter_name"), $db->f("parameter_list_order"));
        echo "<input type=\"hidden\" name=\"currentpos\" value=\"".$db->f("parameter_list_order")."\" />";
        ?>
      </td>
    </tr>
    <tr>
      <td colspan="2"><br /></td>
    </tr>
    <tr>
      <td><div align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE ?>: </div></td>
      <td valign="top">
        <select class="inputbox" name="parameter_type">
	  <option value="I" <?php if ($parameter_type == "I") echo "selected=\"selected\""; ?> > 
	    <?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER ?>
	  </option>
	  <option value="T" <?php if ($parameter_type == "T") echo "selected=\"selected\""; ?> > 
	    <?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT ?>
	  </option>
	  <option value="S" <?php if ($parameter_type == "S") echo "selected=\"selected\""; ?> > 
	    <?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT ?>
	  </option>
	  <option value="F" <?php if ($parameter_type == "F") echo "selected=\"selected\""; ?> > 
	    <?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT ?>
	  </option>
	  <option value="C" <?php if ($parameter_type == "C") echo "selected=\"selected\""; ?> > 
	    <?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR ?>
	  </option>
	  <option value="D" <?php if ($parameter_type == "D") echo "selected=\"selected\""; ?> > 
	    <?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME ?>
	  </option>
	  <option value="A" <?php if ($parameter_type == "A") echo "selected=\"selected\""; ?> > 
	    <?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE ?>
	  </option>
	  <option value="M" <?php if ($parameter_type == "M") echo "selected=\"selected\""; ?> >
	    <?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME ?>
	  </option>
	  <option value="V" <?php if ($parameter_type == "V") echo "selected=\"selected\""; ?> >
	    <?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE ?>
	  </option>
	  <option value="B" <?php if ($parameter_type == "B") echo "selected=\"selected\""; ?> > 
	    <?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK ?>
	  </option>
	</select>
	<input type="hidden" name="parameter_old_type" value="<?php echo $parameter_type ?>" />
      </td>
    </tr>
    <tr> 
      <td width="25%" nowrap valign="top"><div align="right">
        <?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES ?>:</div>
      </td>
      <td width="75%" valign="top">
        <input type="text" class="inputbox" name="parameter_values" size="60" value="<?php $db->sp('parameter_values') ?>" />
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION ?></td>
    </tr>
    <tr> 
      <td width="25%" nowrap valign="top"><div align="right">
        <?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT ?>:</div>
      </td>
      <td width="75%" valign="top">
	    <input type="checkbox" name="parameter_multiselect" value="Y" <?php if ($db->sf("parameter_multiselect")=="Y") echo "checked" ?>/>
      </td>
    </tr>
    <tr>
      <td colspan="2"><br /></td>
    </tr>
    <tr> 
      <td width="25%" nowrap valign="top"><div align="right">
        <?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT ?>:</div></td>
      <td width="75%" valign="top">
        <input type="text" class="inputbox" name="parameter_default" size="60" value="<?php $db->sp('parameter_default') ?>" />
      </td>
    </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>
	    <?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT ?>
	  </td>
	</tr>
    <tr> 
      <td width="25%" nowrap valign="top"><div align="right">
        <?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT ?>:</div></td>
      <td width="75%" valign="top">
        <input type="text" class="inputbox" name="parameter_unit" size="60" value="<?php $db->sp('parameter_unit') ?>" />
      </td>
    </tr>
  </table>
</form>
<?php }
/** Changed Product Type - End*/
?>  
