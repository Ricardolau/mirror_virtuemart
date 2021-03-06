<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: admin.module_form.php,v 1.4 2005/01/27 19:34:00 soeren_nb Exp $
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

$module_id = mosGetParam( $_REQUEST, 'module_id' );

if (!empty( $module_id )) {
  $q = "SELECT * from #__pshop_module where module_id='$module_id'";
  $db->query($q);
  $db->next_record();
}
//First create the object and let it print a form heading
$formObj = &new formFactory( $PHPSHOP_LANG->_PHPSHOP_MODULE_FORM_LBL );
//Then Start the form
$formObj->startForm();
?> 
<table class="adminform">
    <tr> 
      <td width="24%" align="right" ><?php echo $PHPSHOP_LANG->_PHPSHOP_MODULE_FORM_NAME ?>:</td>
      <td width="76%" > 
        <input type="text" class="inputbox" name="module_name" value="<?php echo $db->sf("module_name") ?>" size="32" />
      </td>
    </tr>
    <tr> 
      <td width="24%" align="right" ><?php echo $PHPSHOP_LANG->_PHPSHOP_MODULE_FORM_PERMS ?>:</td>
      <td width="76%" > 
        <input type="text" class="inputbox" name="module_perms" value="<?php $db->sp("module_perms") ?>" />
      </td>
    </tr>
    <tr> 
      <td width="24%" align="right" ><?php echo $PHPSHOP_LANG->_PHPSHOP_MODULE_FORM_HEADER ?>:</td>
      <td width="76%" > 
        <input type="text" class="inputbox" name="module_header" value="<?php $db->sp("module_header") ?>" />
      </td>
    </tr>
    <tr> 
      <td width="24%" align="right" ><?php echo $PHPSHOP_LANG->_PHPSHOP_MODULE_FORM_FOOTER ?>:</td>
      <td width="76%" > 
        <input type="text" class="inputbox" name="module_footer" value="<?php $db->sp("module_footer") ?>" />
      </td>
    </tr>
    <tr> 
      <td width="24%" align="right" ><?php echo $PHPSHOP_LANG->_PHPSHOP_MODULE_FORM_MENU ?>:</td>
      <td width="76%" > 
        <select class="inputbox" name="module_publish">
          <option value="y" <?php if ($db->f("module_publish")=="y") echo "selected=\"selected\""?>><?php echo _CMN_YES ?></option>
          <option value="n" <?php if ($db->f("module_publish")=="n") echo "selected=\"selected\""?>><?php echo _CMN_NO ?></option>
        </select>
      </td>
    </tr>
    <tr> 
      <td width="24%" align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_MODULE_FORM_ORDER ?>:</td>
      <td width="76%" > 
        <input type="text" class="inputbox" name="list_order" size="3" maxlength="2" value="<?php $db->sp("list_order") ?>" />
      </td>
    </tr>
    <tr> 
      <td valign="top" colspan="2" >&nbsp; </td>
    </tr>
    <tr> 
      <td valign="top" align="right" ><?php echo $PHPSHOP_LANG->_PHPSHOP_MODULE_FORM_DESCRIPTION ?>:</td>
      <td valign="top" >&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td valign="top" colspan="2" > 
        <textarea name="module_description" cols="50" rows="10"><?php $db->sp("module_description") ?></textarea>
      </td>
    </tr>
    <tr> 
      <td width="24%" >&nbsp;</td>
      <td width="76%" >&nbsp;</td>
    </tr>
    <tr> 
      <td valign="top" colspan="2" align="center">&nbsp;</td>
    </tr>
    
  </table>
<?php
// Add necessary hidden fields
$formObj->hiddenField( 'module_id', $module_id );

$funcname = !empty($module_id) ? "moduleUpdate" : "moduleAdd";

// Write your form with mixed tags and text fields
// and finally close the form:
$formObj->finishForm( $funcname, 'admin.module_list', $option );
?>