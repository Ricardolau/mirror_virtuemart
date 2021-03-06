<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: admin.user_address_form.php,v 1.5 2005/08/26 09:37:33 dvorakz Exp $
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
if( isset($_VERSION)) {
 $mainframe->setPageTitle( $PHPSHOP_LANG->_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL );
}
$user_info_id = mosGetParam( $_REQUEST, 'user_info_id' );
$missing = mosGetParam( $vars, 'missing' );
$missing_style = "color: Red; font-weight: Bold;";

if (!empty( $missing )) {
    echo "<script type=\"text/javascript\">alert('"._CONTACT_FORM_NC."'); </script>\n";
}
?>
<h2><?php echo $PHPSHOP_LANG->_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL ?></h2>
<?php if (!empty($user_info_id)) {
   $q = "SELECT * from #__pshop_user_info ";
   $q .= "WHERE #__pshop_user_info.user_info_id='$user_info_id' ";
   $db->query($q);
   $db->next_record();
}
echo "<fieldset>
        <legend><span class=\"sectiontableheader\">".$PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL."</span></legend>";
        
echo "<br />".$PHPSHOP_LANG->_PHPSHOP_SHIPTO_TEXT. "<br /><br /><br />";
?> 
<div style="width:90%;" class="adminform">
<!-- Registration form -->
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="adminForm">
  <div style="float:left;width:30%;text-align:right;<?php if (stristr($missing,'address_type_name')) echo $missing_style ?>">
    <?php echo "<label for=\"address_type_name\">".$PHPSHOP_LANG->_PHPSHOP_USER_FORM_ADDRESS_LABEL."</label>*" ?>:</div>
  <div style="float:left;width:60%;">
    <input type="text" class="inputbox" id="address_type_name" name="address_type_name" value="<?php $db->sp("address_type_name") ?>" maxlength="64" size="16" />
  </div>
  <br/><br/>
  
  <div style="float:left;width:30%;text-align:right;<?php if (stristr($missing,'first_name')) echo $missing_style ?>">
    <?php echo "<label for=\"first_name\">".$PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_FIRST_NAME."</label>*"  ?>:</div>
  <div style="float:left;width:60%;"> 
    <input type="text" id="first_name" name="first_name" size="40" value="<?php $db->sp("first_name") ?>" class="inputbox" />
  </div>
<br/><br/>
 
  <div style="float:left;width:30%;text-align:right;<?php if (stristr($missing,'last_name')) echo $missing_style ?>" >
  <?php echo "<label for=\"last_name\">".$PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_LAST_NAME."</label>*" ?>:</div>
  <div style="float:left;width:60%;"> 
    <input type="text" id="last_name" name="last_name" size="40" value="<?php $db->sp("last_name") ?>" class="inputbox" />
  </div>
<br/><br/>
 
  <div style="float:left;width:30%;text-align:right;">
    <?php echo "<label for=\"middle_name\">".$PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME."</label>"  ?>:</div>
  <div style="float:left;width:60%;"> 
    <input type="text" id="middle_name" name="middle_name" size="40" value="<?php $db->sp("middle_name") ?>" class="inputbox" />
  </div>
  <br/><br/>
  <div style="float:left;width:30%;text-align:right;" >
    <?php echo "<label for=\"company\">".$PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_COMPANY_NAME."</label>" ?>:</div>
  <div style="float:left;width:60%;"> 
    <input type="text" id="company" name="company" size="40" value="<?php $db->sp("company") ?>" class="inputbox" />
  </div>
<br/><br/>
 
  <div style="float:left;width:30%;text-align:right;<?php if (stristr($missing,'address_1')) echo $missing_style ?>">
  <?php echo "<label for=\"address_1\">".$PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_ADDRESS_1."</label>*" ?>:</div>
  <div style="float:left;width:60%;"> 
    <input type="text" id="address_1" name="address_1" size="40" value="<?php $db->sp("address_1") ?>" class="inputbox" />
  </div>
<br/><br/>
 
  <div style="float:left;width:30%;text-align:right;" >
    <?php echo "<label for=\"address_2\">".$PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_ADDRESS_2."</label>" ?>:</div>
  <div style="float:left;width:60%;"> 
    <input type="text" id="address_2" name="address_2" size="40" value="<?php $db->sp("address_2") ?>" class="inputbox" />
  </div>
<br/><br/>
 
  <div style="float:left;width:30%;text-align:right;<?php if (stristr($missing,'city')) echo $missing_style ?>">
  <?php echo "<label for=\"city\">".$PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_CITY."</label>*" ?>:</div>
  <div style="float:left;width:60%;"> 
    <input type="text" id="city" name="city" size="40" value="<?php $db->sp("city") ?>" class="inputbox" />
  </div>
<br/><br/>
 
  <div style="float:left;width:30%;text-align:right;<?php if (stristr($missing,'zip')) echo $missing_style ?>">
  <?php echo "<label for=\"zip\">".$PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_ZIP."</label>*" ?>:</div>
  <div style="float:left;width:60%;"> 
    <input type="text" id="zip" name="zip" size="10" value="<?php $db->sp("zip") ?>" class="inputbox" />
  </div>
<br/><br/>
     
      <div style="float:left;width:30%;text-align:right;<?php if (stristr($missing,'country')) echo $missing_style ?>">
      <?php echo "<label for=\"country_field\">".$PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_COUNTRY."</label>*" ?>:</div>
      <div style="float:left;width:60%;">
        <?php $ps_html->list_country("country", $db->sf("country"), "id=\"country_field\" onchange=\"changeStateList();\"") ?>
      </div>
    <br/><br/>
    <?php 
    if (CAN_SELECT_STATES == '1') {
?>
      <div style="float:left;width:30%;text-align:right;<?php if (stristr($missing,'state')) echo $missing_style ?>">
      <?php echo "<label for=\"state\">".$PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_STATE."</label>" ?>:</div>
      <div style="float:left;width:60%;"> 
        <?php 
        
      echo $ps_html->dynamic_state_lists( "country", "state", $db->sf('country'), $db->sf('state') );
      echo "<noscript>\n";
      $ps_html->list_states("state", $db->sf('state'), "", "id=\"state\"");
      echo "</noscript>\n";
      ?>
      </div>
    <br/><br/>
    <?php } ?>
 
  <div style="float:left;width:30%;text-align:right;<?php if (stristr($missing,'phone_1')) echo $missing_style ?>" >
    <?php echo "<label for=\"phone_1\">".$PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_PHONE."</label>*" ?>:</div>
  <div style="float:left;width:60%;"> 
    <input type="text" id="phone_1" name="phone_1" size="40" value="<?php $db->sp("phone_1") ?>" class="inputbox" />
  </div>
<br/><br/>  
 
  <div style="float:left;width:30%;text-align:right;<?php if (stristr($missing,'phone_2')) echo $missing_style ?>" >
    <?php echo "<label for=\"phone_2\">".$PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_PHONE2."</label>" ?>:</div>
  <div style="float:left;width:60%;"> 
    <input type="text" id="phone_2" name="phone_2" size="40" value="<?php $db->sp("phone_2") ?>" class="inputbox" />
  </div>
<br/><br/>  
 
  <div style="float:left;width:30%;text-align:right;" >
    <?php echo "<label for=\"fax\">".$PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_FAX."</label>" ?>:</div>
  <div style="float:left;width:60%;"> 
    <input type="text" id="fax" name="fax" size="40" value="<?php $db->sp("fax") ?>" class="inputbox" />
  </div>
<br/><br/>
        
    <!-- If you wish show a EXTRA FIELD only in account billing address (not in this form) add into condition "false && ".
         For example: if( false && $PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 != "" ) -->
    <!-- EXTRA FIELD 1 - BEGIN - You can move this section into any other position of form. -->
    <?php if( $PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 != "" ) { ?>
      <div style="float:left;width:30%;text-align:right;" >
        <?php echo "<label for=\"extra_field_1\">".$PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1."</label>" ?>:</div>
      <div style="float:left;width:60%;"> 
        <input type="text" id="extra_field_1" name="extra_field_1" size="40" value="<?php $db->sp("extra_field_1"); ?>" class="inputbox" />
      </div>
    <br/><br/>
    <?php } ?>
    <!-- EXTRA FIELD 1 - END -->
    
    <!-- EXTRA FIELD 2 - BEGIN - You can move this section into any other position of form. -->
    <?php if( $PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 != "" ) { ?>
      <div style="float:left;width:30%;text-align:right;" >
        <?php echo "<label for=\"extra_field_2\">".$PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2."</label>" ?>:</div>
      <div style="float:left;width:60%;"> 
        <input type="text" id="extra_field_2" name="extra_field_2" size="40" value="<?php $db->sp("extra_field_2"); ?>" class="inputbox" />
      </div>
    <br/><br/>
    <?php } ?>
    <!-- EXTRA FIELD 2 - END -->
    
    <!-- EXTRA FIELD 3- BEGIN - You can move this section into any other position of form. -->
    <?php if( $PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 != "" ) { ?>
      <div style="float:left;width:30%;text-align:right;" >
        <?php echo "<label for=\"extra_field_3\">".$PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3."</label>" ?>:</div>
      <div style="float:left;width:60%;"> 
        <input type="text" id="extra_field_3" name="extra_field_3" size="40" value="<?php $db->sp("extra_field_3"); ?>" class="inputbox" />
      </div>
    <br/><br/>
    <?php } ?>
    <!-- EXTRA FIELD 3 - END -->
    
    <!-- EXTRA FIELD 4 - BEGIN - You can move this section into any other position of form. -->
    <?php if( $PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 != "" ) { ?>
      <div style="float:left;width:30%;text-align:right;" >
        <?php echo "<label for=\"extra_field_4\">".$PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4."</label>" ?>:</div>
      <div style="float:left;width:60%;"><?php $ps_html->list_extra_field_4($db->sf("extra_field_4"), "id=\"extra_field_4\""); ?></div>
    <br/><br/>
    <?php } ?>
    <!-- EXTRA FIELD 4 - END -->
    
    <!-- EXTRA FIELD 5 BEGIN - You can move this section into any other position of form. -->
    <?php if( $PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 != "" ) { ?>
      <div style="float:left;width:30%;text-align:right;" >
        <?php echo "<label for=\"extra_field_5\">".$PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5."</label>" ?>:</div>
      <div style="float:left;width:60%;"><?php $ps_html->list_extra_field_5($db->sf("extra_field_5"), "id=\"extra_field_5\""); ?></div>
    <br/><br/>
    <?php } ?>
    <!-- EXTRA FIELD 5 - END -->
  
  <br/>  
  <input type="hidden" name="option" value="com_phpshop" />
<?php
   if (!empty($user_info_id)) { ?>
      <input type="hidden" name="func" value="userAddressUpdate" />
      <input type="hidden" name="user_info_id" value="<?php echo $user_info_id ?>" />
<?php 
   }
   else { ?>
      <input type="hidden" name="func" value="userAddressAdd" />
<?php 
    } ?>
  <input type="hidden" name="user_id" value="<?php echo $auth["user_id"] ?>" />
  <input type="hidden" name="address_type" value="ST">
  <input type="hidden" name="page" value="<?php echo $modulename?>.user_list"  />
  <input type="hidden" name="cache" value="0" />
  <input type="hidden" name="task" value="" />
  <input type="hidden" name="user_id" value="<?php echo $_REQUEST['user_id']; ?>" />
  <input type="hidden" name="cid[0]" value="<?php echo $_REQUEST['user_id']; ?>" />
  </form>
  </fieldset>
</div>
  

