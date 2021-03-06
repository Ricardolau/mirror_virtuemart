<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: store.users.html.php,v 1.9 2005/06/18 09:01:18 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage HTML
* Contains code from Mambo:
* 	@copyright (C) 2000 - 2004 Miro
* @copyright (C) 2004-2005 Soeren Eberhardt
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*/
mm_showMyFileName( __FILE__ );

class HTML_users {
	function showUsers( &$rows, $pageNav, $search, $option ) {
	global $mosConfig_offset, $db, $PHPSHOP_LANG;
?>
<form action="index2.php" method="post" name="adminForm">
  <table cellpadding="4" cellspacing="0" border="0" width="100%">
    <tr>
      <td width="100%" class="sectionname"><img src="images/user.png" align="middle"><?php echo defined('_ADMIN_USER_MANAGER') ? _ADMIN_USER_MANAGER : "User Manager";?> :: phpShop</td> 
      <td nowrap="nowrap"><?php echo defined('_ADMIN_DISPLAY') ? _ADMIN_DISPLAY : "Display #";?></td>
      <td> <?php echo $pageNav->writeLimitBox(); ?> </td>
      <td><?php echo defined('_ADMIN_SEARCH') ? _ADMIN_SEARCH : "Search"; ?></td>
      <td> <input type="text" name="search" value="<?php echo $search;?>" class="inputbox" onChange="document.adminForm.submit();" />
      </td>
    </tr>
  </table>
  <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
    <tr>
      <th width="2%" class="title">#</td>
      <th width="3%" class="title"> <input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo count($rows); ?>);" />
      </th>
      <th width="20%" class="title"><?php echo($PHPSHOP_LANG->_PHPSHOP_USER_LIST_FULL_NAME);?></th>
      <th width="10%" class="title">
        <a alt="order by username" href="index2.php?page=store.user_list&option=com_phpshop&arg=a.username&order=<?php echo @$_REQUEST['order']=='asc' ? 'desc' : 'asc' ?>">
        <?php echo defined('_ADMIN_USER_ID') ? _ADMIN_USER_ID : "Username";?></th>
      <th width="15%" class="title">
        <a href="index2.php?page=store.user_list&option=com_phpshop&arg=a.perms&order=<?php echo @$_REQUEST['order']=='asc' ? 'desc' : 'asc' ?>">
        <?php echo($PHPSHOP_LANG->_PHPSHOP_USER_LIST_GROUP);?></a></th>
      <th width="15%" class="title"><?php echo($PHPSHOP_LANG->_PHPSHOP_PRICE_FORM_GROUP);?></th>
      <th width="15%" class="title">
        <a href="index2.php?page=store.user_list&option=com_phpshop&arg=a.email&order=<?php echo @$_REQUEST['order']=='asc' ? 'desc' : 'asc' ?>">
        <?php echo defined('_ADMIN_USER_EMAIL') ? _ADMIN_USER_EMAIL : "E-mail";?></th>
      <th width="10%" class="title"><?php echo defined('_ADMIN_USER_ENABLED') ? _ADMIN_USER_ENABLED : "Enabled?";?></th>
    </tr>
<?php
		$k = 0;
		for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row =& $rows[$i];
			$img = $row->block ? 'publish_x.png' : 'tick.png';
			$task = $row->block ? 'unblock' : 'block';
      
      $q = "SELECT shopper_group_name FROM #__pshop_shopper_group, #__pshop_shopper_vendor_xref WHERE ";
      $q .= "#__pshop_shopper_vendor_xref.user_id='".$row->id."' AND #__pshop_shopper_vendor_xref.shopper_group_id=#__pshop_shopper_group.shopper_group_id";
      $db->query( $q );
      $db->next_record();
      $shopper_group_name = $db->f("shopper_group_name");
      
      $q = "SELECT first_name, last_name FROM #__users WHERE id='".$row->id."'";
      $db->query( $q );
      $db->next_record();
      $first_name = $db->f("first_name");
      $last_name = $db->f("last_name");
?>
    <tr class="<?php echo "row$k"; ?>">
      <td><?php echo $i+1+$pageNav->limitstart;?></td>
      <td><input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php echo $row->id; ?>" onClick="isChecked(this.checked);" /></td>
      <td><a href="#edit" onClick="return listItemTask('cb<?php echo $i;?>','edit')">
        <?php echo $first_name ." ".$last_name; ?> </a> </td>
      <td><a href="#edit" onClick="return listItemTask('cb<?php echo $i;?>','edit')">
        <?php echo $row->username; ?> </a> </td>
      <td><?php echo $row->perms; ?></td>
      <td><?php echo $shopper_group_name; ?></td>
      <td><a href="mailto:<?php echo $row->email; ?>"><?php echo $row->email; ?></a></td>
      <td width="10%"><a href="javascript: void(0);" onClick="return listItemTask('cb<?php echo $i;?>
','<?php echo $task;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="" /></a></td>
    </tr>
    <?php $k = 1 - $k; } ?>
    <tr align="right">
      <th colspan="3">&nbsp;</th>
      <th colspan="6"> <?php echo $pageNav->writePagesLinks(); ?></th>
    </tr>
    <tr>
      <td align="center" colspan="9"> <?php echo $pageNav->writePagesCounter(); ?></td>
    </tr>
  </table>
  <input type="hidden" name="option" value="<?php echo $option;?>" />
  <input type="hidden" name="task" value="" />
  <input type="hidden" name="page" value="store.user_list" />
  <input type="hidden" name="boxchecked" value="0" />
  <input type="hidden" name="order" value="<? echo $_REQUEST['order'] ?>" />
  <input type="hidden" name="arg" value="<? echo $_REQUEST['arg'] ?>" />
</form>
<?php }

	function edituser( &$row, &$lists, $option, $uid ) {
  
		global $my, $acl, $sess, $ps_user, $ps_html, $database, $db, $ps_shopper_group, $PHPSHOP_LANG;
    
    require_once(CLASSPATH.'ps_user.php');
    $ps_user = new ps_user;
    
		$canBlockUser = $acl->acl_check( 'administration', 'edit', 'users', $my->usertype, 'user properties', 'block_user' );
		$canEmailEvents = $acl->acl_check( 'workflow', 'email_events', 'users', $acl->get_group_name( $row->gid, 'ARO' ) );
?>
	<script language="javascript" type="text/javascript">
		function submitbutton(pressbutton) {
			var form = document.adminForm;
			if (pressbutton == 'cancel') {
				submitform( pressbutton );
				return;
			}
			var r = new RegExp("[^0-9A-Za-z]", "i");

			// do field validation
			if (trim(form.name.value) == "") {
				alert( "<?php echo(_REGWARN_NAME);?>" );
			} else if (form.username.value == "") {
				alert( "<?php echo(_REGWARN_UNAME);?>" );
			} else if (r.exec(form.username.value)) {
				alert( "<?php printf(_VALID_AZ09, _USERNAME, 4 );?>" );
			} else if (trim(form.email.value) == "") {
				alert( "<?php echo(_REGWARN_MAIL);?>" );
			} else if (form.gid.value == "") {
				alert( "Please select a User Group!" );
			} else if (trim(form.password.value) != "" && form.password.value != form.password2.value){
				alert( "<?php echo(_REGWARN_VPASS2);?>" );
			} else {
				submitform( pressbutton );
			}
		}
	</script>

<span class="sectionname"><?php echo $row->id ? (defined('_ADMIN_EDIT') ? _ADMIN_EDIT : "Edit") : (defined('_ADMIN_ADD') ? _ADMIN_ADD : "Add");?> User</span><br /> <br />
<table cellpadding="3" cellspacing="0" border="0" width="100%">
  <tr>
    <td width="" class="tabpadding">&nbsp;</td>
    <td id="tab1" class="offtab" onClick="dhtml.cycleTab(this.id)"><?php echo defined('_ADMIN_USER_MANAGER') ? _ADMIN_USER_MANAGER : "User Manager";?></td>
    <td id="tab2" class="offtab" onClick="dhtml.cycleTab(this.id)"><?php echo $PHPSHOP_LANG->_PHPSHOP_USER_FORM_BILLTO_LBL ?></td>
    <td id="tab3" class="offtab" onClick="dhtml.cycleTab(this.id)"><?php echo $PHPSHOP_LANG->_PHPSHOP_ACCOUNT_BANK_TITLE ?></td>
    <td width="90%" class="tabpadding">&nbsp;</td>
  </tr>
</table>

<div id="page1" class="pagetext">
	<form action="index2.php" method="POST" name="adminForm">
	<table cellpadding="4" cellspacing="1" border="0" width="100%" class="adminform">
		<tr>
			<td width="100"><?php echo defined('_ADMIN_NAME') ? _ADMIN_NAME : "Name";?>:</td>
			<td width="85%"><input type="text" name="name" class="inputbox" size="40" value="<?php echo $row->name; ?>" /></td>
		</tr>
		<tr>
			<td><?php echo defined('_ADMIN_USERNAME') ? _ADMIN_USERNAME : "Username";?>:</td>
			<td><input type="text" name="username" class="inputbox" size="40" value="<?php echo $row->username; ?>" /></td>
		<tr>
			<td><?php echo defined('_ADMIN_USER_EMAIL') ? _ADMIN_USER_EMAIL : "e-mail";?>:</td>
			<td><input class="inputbox" type="text" name="email" size="40" value="<?php echo $row->email; ?>" /></td>
		</tr>
		<tr>
			<td><?php echo defined('_ADMIN_USER_PASSWORD') ? _ADMIN_USER_PASSWORD : "New Password";?>:</td>
			<td><input class="inputbox" type="password" name="password" size="40" value="" /></td>
		</tr>
		<tr>
			<td><?php echo defined('_ADMIN_USER_VERIFY_PASSWORD') ? _ADMIN_USER_VERIFY_PASSWORD : "Verify Password";?>:</td>
			<td><input class="inputbox" type="password" name="password2" size="40" value="" /></td>
		</tr>
		<tr>
		  <td valign="top"><?php echo defined('_ADMIN_USER_GROUP') ? _ADMIN_USER_GROUP : "Group";?>:</td>
		  <td><?php echo $lists['gid']; ?></td>
		</tr>
            <tr> 
            <td><?php echo $PHPSHOP_LANG->_PHPSHOP_USER_FORM_PERMS ?>:</td>
            <td > <?php $ps_user->list_perms("perms", $db->sf("perms")) ?> </td>
          </tr>
          <tr> 
            <td> <?php echo $PHPSHOP_LANG->_PHPSHOP_SHOPPER_FORM_GROUP ?>:</td>
            <td><?php
                include_class('shopper');
                $sg_id = $ps_shopper_group->get_shoppergroup_by_id($row->id);
                $ps_shopper_group->list_shopper_groups("shopper_group_id",$sg_id["shopper_group_id"]);?>
            </td>
          </tr>
<?php	if ($canBlockUser) { ?>
		<tr>
		  <td><?php echo defined('_ADMIN_USER_BLOCK') ? _ADMIN_USER_BLOCK : "Block User";?></td>
		  <td><?php echo $lists['block']; ?></td>
		</tr>
<?php	}
		if ($canEmailEvents) { ?>
		<tr>
		  <td><?php echo defined('_ADMIN_USER_SUBS') ? _ADMIN_USER_SUBS : "Receive Submission Emails";?></td>
		  <td><?php echo $lists['sendEmail']; ?></td>
		</tr>
<?php	} ?>
<?php if( $uid ) { ?>
		<tr>
		   <td><?php echo defined('_ADMIN_USER_REG_DATE') ? _ADMIN_USER_REG_DATE : "Register Date";?></td>
		   <td><?php echo $row->registerDate;?></td>
		</tr>
		<tr>
		   <td><?php echo defined('_ADMIN_USER_LAST_VISIT') ? _ADMIN_USER_LAST_VISIT : "Last Visit Date";?></td>
		   <td><?php echo $row->lastvisitDate;?></td>
		</tr>
<?php } ?>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
  </table>
  
  </div>
<div id="page2" class="pagetext"><?php
      
       $q = "SELECT * from #__users ";
       $q .= "WHERE #__users.id='".$uid."' ";
       $db->setQuery($q);
       $db->query();
       $db->next_record();
  
    ?>
    <table border="0" width="100%" cellpadding="4" cellspacing="1" class="adminform">
        <tr> 
            <td width="100"><?php echo $PHPSHOP_LANG->_PHPSHOP_USER_FORM_FIRST_NAME ?>:</td>
            <td width="85%"> 
              <input type="text" class="inputbox" name="first_name" size="40" value="<?php echo $db->f("first_name") ?>">
            </td>
          </tr>
          <tr> 
            <td><?php echo $PHPSHOP_LANG->_PHPSHOP_USER_FORM_LAST_NAME ?>:</td>
            <td> 
              <input type="text" class="inputbox" name="last_name" size="40" value="<?php $db->sp("last_name") ?>">
            </td>
          </tr>
          <tr> 
            <td><?php echo $PHPSHOP_LANG->_PHPSHOP_USER_FORM_MIDDLE_NAME ?>:</td>
            <td > 
              <input type="text" class="inputbox" name="middle_name" size="40" value="<?php $db->sp("middle_name") ?>">
            </td>
          </tr>
          <tr> 
            <td><?php echo $PHPSHOP_LANG->_PHPSHOP_USER_FORM_TITLE ?>:</td>
            <td > <?php $ps_html->list_user_title($db->sf("title")); ?></td>
          </tr>
          <tr> 
            <td><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_USER_FORM_BILLTO_LBL ?></strong></td>
            <td>&nbsp; </td>
          </tr>
          <tr> 
            <td>Customer Number / ID:</td>
            <td > 
              <input type="text" class="inputbox" name="customer_number" size="40" value="<?php echo $ps_shopper_group->get_customer_num($row->id) ?>">
            </td>
          </tr>
          <tr> 
            <td><?php echo $PHPSHOP_LANG->_PHPSHOP_USER_FORM_COMPANY_NAME ?>:</td>
            <td > 
              <input type="text" class="inputbox" name="company" size="40" value="<?php $db->sp("company") ?>">
            </td>
          </tr>
          <tr> 
            <td><?php echo $PHPSHOP_LANG->_PHPSHOP_USER_FORM_ADDRESS_1 ?>: 
            </td>
            <td > 
              <input type="text" class="inputbox" name="address_1" size="40" value="<?php $db->sp("address_1") ?>">
            </td>
          </tr>
          <tr> 
            <td><?php echo $PHPSHOP_LANG->_PHPSHOP_USER_FORM_ADDRESS_2 ?>: 
            </td>
            <td > 
              <input type="text" class="inputbox" name="address_2" size="40" value="<?php $db->sp("address_2") ?>">
            </td>
          </tr>
          <tr> 
            <td><?php echo $PHPSHOP_LANG->_PHPSHOP_USER_FORM_CITY ?>:</td>
            <td > 
              <input type="text" class="inputbox" name="city" size="40" value="<?php $db->sp("city") ?>">
            </td>
          </tr>
          <tr> 
            <td><?php echo $PHPSHOP_LANG->_PHPSHOP_USER_FORM_ZIP ?>:</td>
            <td > 
              <input type="text" class="inputbox" name="zip" size="10" value="<?php $db->sp("zip") ?>">
            </td>
          </tr>
          <tr> 
            <td><?php echo $PHPSHOP_LANG->_PHPSHOP_USER_FORM_COUNTRY ?>:</td>
            <td > 
              <?php $ps_html->list_country("country", $db->sf("country"), "id=\"country_field\" onchange=\"changeStateList();\"") ?>
            </td>
          </tr>
          <tr> 
            <td><?php echo $PHPSHOP_LANG->_PHPSHOP_USER_FORM_STATE ?>:</td>
            <td ><?php
              echo $ps_html->dynamic_state_lists( "country", "state", $db->sf('country'), $db->sf('state') );
              ?>
            </td>
          </tr>
          <tr> 
            <td> <?php echo $PHPSHOP_LANG->_PHPSHOP_USER_FORM_PHONE ?>:</td>
            <td > 
              <input type="text" class="inputbox" name="phone_1" size="40" value="<?php $db->sp("phone_1") ?>">
            </td>
          </tr>
          <tr> 
            <td><?php echo $PHPSHOP_LANG->_PHPSHOP_USER_FORM_FAX ?>:</td>
            <td > 
              <input type="text" class="inputbox" name="fax" size="40" value="<?php $db->sp("fax") ?>">
            </td>
          </tr>
          <tr> 
            <td nowrap>&nbsp; </td>
            <td nowrap>&nbsp;</td>
          </tr>
          <tr> 
            <td><?php if (!empty($row->id)) { ?> 
              <table width="100%" border="0" cellspacing="0" cellpadding="2">
                <tr> 
                  <td ><b><?php echo $PHPSHOP_LANG->_PHPSHOP_USER_FORM_SHIPTO_LBL ?></b><a href="<?php $sess->purl($PHP_SELF . "?page=$modulename/user_address_form&user_id=$user_id") ?>"><br>
                    </a><a href="<?php $sess->purl($PHP_SELF . "?page=store.user_address_form&user_id=".$row->id) ?>" >(<?php echo $PHPSHOP_LANG->_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL ?>) 
                    </a></td>
                </tr>
                <tr> 
                  <td> </td>
                </tr>
                <tr> 
                  <td ><?php
                    $qt = "SELECT * from #__pshop_user_info where user_id='$user_id' ";
                    $qt .= "AND address_type='ST'"; 
                    $dbt = new ps_DB;
                    $dbt->query($qt);
                    if (!$dbt->num_rows()) {
                      echo "No shipping addresses.";
                    }
                    else {
                      while ($dbt->next_record()) {
                        $url = $PHP_SELF . "?page=store.user_address_form&user_id=".$row->id."&user_info_id=" . $dbt->f("user_info_id");
                        echo "&raquo;<a href=" . $sess->url($url) . ">";
                        echo $dbt->f("address_type_name") . "</a><br />";
                      }
                    } ?>
                  </td>
                </tr>
              </table>
              <?php } ?>
              </td><td>&nbsp;</td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>

  </div>
  
  <div id="page3" class="pagetext">
    <table border="0" width="100%" cellpadding="4" cellspacing="1" class="adminform">
      <tr><td colspan="2" nowrap><b><?php echo $PHPSHOP_LANG->_PHPSHOP_ACCOUNT_BANK_TITLE ?> </b></td></tr>
        <tr><td width="100"><?php echo $PHPSHOP_LANG->_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR ?>:</td>
        <td width="85%" ><input type="text" class="inputbox" name="bank_account_nr" size="40" value="<?php $db->sp("bank_account_nr") ?>"></td></tr>
        <tr><td><?php echo $PHPSHOP_LANG->_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE ?>:</td>
        <td><input type="text" class="inputbox" name="bank_sort_code" size="40" value="<?php $db->sp("bank_sort_code") ?>"></td></tr>
        <tr><td><?php echo $PHPSHOP_LANG->_PHPSHOP_ACCOUNT_LBL_BANK_NAME ?>:</td>
        <td><input type="text" class="inputbox" name="bank_name" size="40" value="<?php $db->sp("bank_name") ?>"></td></tr>
        <tr><td><?php echo $PHPSHOP_LANG->_PHPSHOP_ACCOUNT_LBL_BANK_IBAN ?>:</td>
        <td><input type="text" class="inputbox" name="bank_iban" size="40" value="<?php $db->sp("bank_iban") ?>"></td></tr>
        <tr><td><?php echo $PHPSHOP_LANG->_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER ?>:</td>
        <td><input type="text" class="inputbox" name="bank_account_holder" size="40" value="<?php $db->sp("bank_account_holder") ?>"></td></tr>
    </table>
  </div>
  
  
  
  <input type="hidden" name="id" value="<?php echo $row->id; ?>" />
<?php	if (!$canEmailEvents) { ?>
  <input type="hidden" name="sendEmail" value="0" />
<?php } ?>
  <input type="hidden" name="address_type" value="BT" />
  <input type="hidden" name="address_type_name" value="-default-" />
  <input type="hidden" name="option" value="com_phpshop" />
  <input type="hidden" name="page" value="store.user_list" />
  <input type="hidden" name="task" value="" />
</form>
<script language="javascript" type="text/javascript">
	dhtml.cycleTab('tab1');
</script>

<?php }

}?>
