<?php 
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: manufacturer.manufacturer_category_form.php,v 1.3 2005/01/27 19:34:02 soeren_nb Exp $
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
?>
<h2><?php echo $PHPSHOP_LANG->_PHPSHOP_MANUFACTURER_CAT_FORM_LBL ?></H2>
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr> 
    <td align="CENTER"> <?php if (isset($mf_category_id)) {
   $q = "SELECT * from #__pshop_manufacturer_category ";
   $q .= "where mf_category_id='$mf_category_id'";
   $db->query($q);
   $db->next_record();
}
?> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr> 
          <td> 
            <form method="post" action="<?php echo $PHP_SELF ?>" name="adminForm">
              <table width="100%" border="0" cellspacing="0" cellpadding="2">
                <tr> 
                  <td width="38%" nowrap align="right"><B><?php echo $PHPSHOP_LANG->_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL ?></b> 
                  </td>
                  <td width="62%">&nbsp;</td>
                </tr>
                <tr> 
                  <td width="38%" nowrap align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_MANUFACTURER_CAT_FORM_NAME ?>:</td>
                  <td width="62%"> 
                    <input type="text" class="inputbox" name="mf_category_name" size="18" value="<?php $db->sp('mf_category_name') ?>" />
                    <input type="hidden" name="mf_category_id" value="<?php echo isset($mf_category_id) ? $mf_category_id : "" ?>" />
                    <input type="hidden" name="func" value="<?php echo isset($mf_category_id) ? "manufacturercategoryupdate" : "manufacturercategoryadd"; ?>" />
                    <input type="hidden" name="page" value="<?php echo $modulename ?>.manufacturer_category_list" />
                    <input type="hidden" name="option" value="com_phpshop" />
                    <input type="hidden" name="task" value="">
                    <?php $limitstart = mosgetparam( $_REQUEST, 'limitstart'); ?>
                    <input type="hidden" name="limitstart" value="<?php echo $limitstart ?>" />                  
                  </td>
                </tr>
                <tr> 
                  <td width="38%" nowrap align="right" valign="top"><?php echo $PHPSHOP_LANG->_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION ?>:</td>
                  <td width="62%" valign="top"> 
                    <textarea name="mf_category_desc" cols="40" rows="2" wrap="virtual"><?php $db->sp('mf_category_desc'); ?></textarea>
                  </td>
                </tr>
                <tr> 
                  <td width="38%" nowrap align="right" valign="top">&nbsp;</td>
                  <td width="62%" valign="top">&nbsp;</td>
                </tr>
              </table>
            </form>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr> 
    <td align="center">&nbsp; </td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
</table>
