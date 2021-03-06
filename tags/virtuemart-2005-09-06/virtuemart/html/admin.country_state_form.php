<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: admin.country_state_form.php,v 1.1 2005/05/08 09:02:24 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage HTML
* @copyright (C) 2005 Soeren Eberhardt
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*/
mm_showMyFileName( __FILE__ );

$state_id = mosGetParam( $_REQUEST, 'state_id', null );
$country_id = mosGetParam( $_REQUEST, 'country_id', null );

if( !empty( $state_id )) {
  $q = "SELECT * FROM #__pshop_state WHERE state_id = '$state_id' AND country_id='$country_id'";
  $db->query($q);
  $db->next_record();
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" name="adminForm">
  <table width="100%" border="0" cellspacing="0" cellpadding="2">
    <tr> 
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td width="24%" align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_STATE_LIST_NAME ?>:</td>
      <td width="76%"> 
        <input type="text" class="inputbox" name="state_name" value="<?php $db->sp("state_name") ?>" />
      </td>
    </tr>
    <tr> 
      <td width="24%" align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_STATE_LIST_2_CODE ?>:</td>
      <td width="76%"> 
        <input type="text" class="inputbox" name="state_2_code" value="<?php $db->sp("state_2_code") ?>" />
      </td>
    </tr>
        <tr> 
      <td width="24%" align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_STATE_LIST_3_CODE ?>:</td>
      <td width="76%"> 
        <input type="text" class="inputbox" name="state_3_code" value="<?php $db->sp("state_3_code") ?>" />
      </td>
    </tr>
    
  </table>  
  <? if (!empty($state_id)) { ?>
  <input type="hidden" name="state_id" value="<?php echo $state_id ?>" />
  <? } ?>
  <input type="hidden" name="func" value="<?php if (!empty($state_id)) echo "stateUpdate"; else echo "stateAdd"; ?>" />
  <input type="hidden" name="country_id" value="<?php echo $country_id; ?>" />
  <input type="hidden" name="page" value="admin.country_state_list" />
  <input type="hidden" name="task" value="" />
  <input type="hidden" name="limitstart" value="<?php echo $limitstart ?>" />
  <input type="hidden" name="option" value="com_phpshop" />
</form>

