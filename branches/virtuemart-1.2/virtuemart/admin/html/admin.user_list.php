<?php
if( !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version $Id$
* @package VirtueMart
* @subpackage html
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
mm_showMyFileName( __FILE__ );

require_once( CLASSPATH . "pageNavigation.class.php" );
require_once( CLASSPATH . "htmlTools.class.php" );

//require_once( CLASSPATH . "ps_vendor_activation.php" );

	
$list  = "SELECT * FROM #__users AS u LEFT JOIN #__{vm}_user_info AS ui ON u.id=ui.user_id";
$count = "SELECT COUNT(id) as num_rows FROM #__users AS u LEFT JOIN #__{vm}_user_info AS ui ON u.id=ui.user_id";
$q = " WHERE ";
if ( !empty($keyword) ) {	
	$q .= " (u.username LIKE '%$keyword%' OR ";
	$q .= "u.usertype LIKE '%$keyword%' OR ";
	$q .= "u.email LIKE '%$keyword%' OR ";
	$q .= "ui.perms LIKE '%$keyword%' OR ";
	$q .= "ui.company LIKE '%$keyword%' OR ";
	$q .= "ui.last_name LIKE '%$keyword%' OR ";
	$q .= "ui.first_name LIKE '%$keyword%' OR ";
	$q .= "CONCAT( `ui`.`first_name`, ' ', `ui`.`last_name`) LIKE '%$keyword%' OR ";
	$q .= "ui.phone_1 LIKE '%$keyword%' ";
	$q .= ") AND ";
}

$q .= "(ui.address_type='BT' OR ui.address_type IS NULL) ";
$q .= "AND gid <= ".$my->gid;
$q .= " ORDER BY username ";
$list .= $q . " LIMIT $limitstart, " . $limit;
$count .= $q;   

$db->query($count);
$db->next_record();
$num_rows = $db->f("num_rows");

// Create the Page Navigation
$pageNav = new vmPageNav( $num_rows, $limitstart, $limit );

// Create the List Object with page navigation
$listObj = new listFactory( $pageNav );

// print out the search field and a list heading
$listObj->writeSearchHeader($VM_LANG->_('VM_USER_LIST_LBL'), VM_THEMEURL.'images/administration/header/icon-48-user.png', $modulename, "user_list");

// start the list table
$listObj->startTable();

// these are the columns in the table
$columns = Array(  "#" => 'width="20"', 
					'<input type="checkbox" name="toggle" value="" onclick="checkAll('.$num_rows.')" />' => 'width="20"',
					$VM_LANG->_('VM_USER_LIST_USERNAME') => "",
					$VM_LANG->_('VM_USER_LIST_FULL_NAME') => "",
					$VM_LANG->_('VM_USER_LIST_VENDOR') => 'width="8%"',
					$VM_LANG->_('VM_USER_LIST_GROUP') => "",
					$VM_LANG->_('VM_SHOPPER_FORM_GROUP') => "",
					$VM_LANG->_('E_REMOVE') => 'width="5%"'
				);
$listObj->writeTableHeader( $columns );

$db->query($list);
$dbs = new ps_DB;
$i = 0;
while( $db->next_record() ) { 
	
	$user_id = $db->f('id') ? intval($db->f('id')) : intval($db->f('user_id'));
	
	$listObj->newRow();
	
	// The row number
	$listObj->addCell( $pageNav->rowNumber( $i ) );
	
	$condition = $user_id == $my->id ? false : true;
	
	// The Checkbox
	$listObj->addCell( vmCommonHTML::idBox( $i, $user_id, !$condition, "user_id" ) );
	
	
	
	$url = $_SERVER['PHP_SELF'] . "?page=$modulename.user_form&user_id=$user_id";
	$tmp_cell = '<a href="' . $sess->url($url) . '">'. $db->f("username") . "</a>"; 

	$listObj->addCell( $tmp_cell );
	
	$listObj->addCell( $db->f("first_name") . " ". $db->f("middle_name") . " ". $db->f("last_name") );

	$q  = "SELECT * FROM #__{vm}_user_info ";
	$q .= "WHERE user_id = '".$db->f("user_id")."'";
	$dbs->query($q);

	//It would be nice to manage it that the addvendor function and deletevendor function would be accesible here
	//Or a Activate/Deactivate function (ah deactivated vendor cant change shop information, add products, sell products and so on)
	//With the changed datamanagment an activation and deactivation should be possible.
	$tmp_cell = "<a href=\"". $sess->url( $_SERVER['PHP_SELF']."?page=admin.user_list&user_id=".$dbs->f('user_id')."&user_is_vendor=".$dbs->f('user_is_vendor')."&func=changePublishState" );
	$tmp_cell .= $dbs->f('user_is_vendor') ? "&task=unpublish\">" : $tmp_cell .= "&task=publish\">";
	$tmp_cell .= vmCommonHTML::getYesNoIcon( $dbs->f('user_is_vendor') );
	$tmp_cell .= "</a>";
	$listObj->addCell( $tmp_cell );


	$listObj->addCell( $db->f("perms") . ' / ('.$db->f("usertype").')');

	if( $db->f("user_id") ) {
		$q = "SELECT shopper_group_name FROM #__{vm}_shopper_group, #__{vm}_shopper_vendor_xref WHERE ";
		$q .= "#__{vm}_shopper_vendor_xref.user_id=$user_id AND #__{vm}_shopper_vendor_xref.shopper_group_id=#__{vm}_shopper_group.shopper_group_id";
		$dbs->query( $q );
		$dbs->next_record();
		$tmp_cell = $dbs->f("shopper_group_name");
	}
	else
	$tmp_cell = "";
	$listObj->addCell( $tmp_cell );
	
	if( $condition )
		$listObj->addCell( $ps_html->deleteButton( "user_id", $user_id, "userDelete", $keyword, $limitstart ) );
	else
		$listObj->addCell( '' );
		
	$i++;
}

$listObj->writeTable();

$listObj->endTable();

$listObj->writeFooter( $keyword );

?>
