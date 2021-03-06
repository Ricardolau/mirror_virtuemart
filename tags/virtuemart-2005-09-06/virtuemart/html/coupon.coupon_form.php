<?php 
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: coupon.coupon_form.php,v 1.4 2005/03/08 19:26:04 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage HTML
*
* @author Soeren Eberhardt
* @copyright (C) 2004-2005 Soeren Eberhardt
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*/
mm_showMyFileName( __FILE__ );

$coupon_id = mosGetParam( $_REQUEST, 'coupon_id', null );
$limitstart = mosgetparam( $_REQUEST, 'limitstart');

if ( $coupon_id ) {
  $q = "SELECT * FROM #__pshop_coupons WHERE coupon_id='$coupon_id'";
  $db->query($q);
  $db->next_record();
  if( $db->f("coupon_type")=="gift") {
    $selected[0] = "selected=\"selected\"";
    $selected[1] = "";
  }
  else {
    $selected[1] = "selected=\"selected\"";
    $selected[0] = "";
  }
  ?>
  <h2><?php echo $PHPSHOP_LANG->_PHPSHOP_COUPON_EDIT_HEADER ?></h2>
  <?php 
}
else {
  $selected[0] = "selected=\"selected\"";
  $selected[1] = "";
  ?>
  <h2><?php echo $PHPSHOP_LANG->_PHPSHOP_COUPON_NEW_HEADER ?></h2>
  <?php 
}
?>
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:10000;"></div>
<script language="Javascript" src="includes/js/overlib_mini.js"></script>
<form method="post" action="<? echo $_SERVER["PHP_SELF"] ?>" name="adminForm">
  <table width="100%" border="0" cellspacing="0" cellpadding="2">
    <tr> 
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td width="24%"><div align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_COUPON_COUPON_HEADER ?>:</div></td>
      <td width="76%"> 
        <input type="text" class="inputbox" name="coupon_code" value="<?php $db->sp("coupon_code") ?>" />
        <?php echo mosToolTip( $PHPSHOP_LANG->_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP ); ?>
      </td>
    </tr>
    <tr> 
      <td width="24%"><div align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_COUPON_PERCENT_TOTAL ?>:</div></td>
      <td width="76%"> 
        <input type="radio" class="inputbox" name="percent_or_total" value="percent" <?php if($db->sf("percent_or_total")=='percent' || empty($coupon_id)) echo "checked=\"checked\""; ?> />
        <?php echo $PHPSHOP_LANG->_PHPSHOP_COUPON_PERCENT ?>&nbsp;&nbsp;&nbsp;
        <?php echo mosToolTip( $PHPSHOP_LANG->_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP ); ?><br />
        <input type="radio" class="inputbox" name="percent_or_total" value="total" <?php if($db->sf("percent_or_total")=='total') echo "checked=\"checked\""; ?> />
        <?php echo $PHPSHOP_LANG->_PHPSHOP_COUPON_TOTAL ?>
      </td>
    </tr>
    <tr> 
      <td width="24%"><div align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_COUPON_TYPE ?>:</div></td>
      <td width="76%">
        <select class="inputbox" name="coupon_type">
          <option value="gift" <?php echo $selected[0] ?>>
            <?php echo $PHPSHOP_LANG->_PHPSHOP_COUPON_TYPE_GIFT ?>
          </option>
          <option value="permanent" <?php echo $selected[1] ?>>
            <?php echo $PHPSHOP_LANG->_PHPSHOP_COUPON_TYPE_PERMANENT ?>
          </option>
        </select>
        <?php echo mosToolTip( $PHPSHOP_LANG->_PHPSHOP_COUPON_TYPE_TOOLTIP ); ?>
      </td>
    </tr>
    <tr> 
      <td width="24%"><div align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_COUPON_VALUE ?>:</div></td>
      <td width="76%"> 
        <input type="text" class="inputbox" name="coupon_value" value="<?php $db->sp("coupon_value"); ?>" />
      </td>
    </tr>
    <tr> 
      <td valign="top" colspan="2" align="right">&nbsp; </td>
    </tr>   
  </table>
<?php 
if (!empty( $coupon_id )) { ?>
  <input type="hidden" name="coupon_id" value="<?php echo $coupon_id ?>" />
  <input type="hidden" name="func" value="<?php echo "couponUpdate"; ?>" />
<?php 
}
else { ?>
  <input type="hidden" name="func" value="<?php echo "couponAdd"; ?>" />
<?php 
} ?>
  <input type="hidden" name="page" value="<?php echo $modulename ?>.coupon_list" />
  <input type="hidden" name="task" value="" />
  <input type="hidden" name="option" value="com_phpshop" />
  <input type="hidden" name="limitstart" value="<?php echo $limitstart ?>" />
</form>

