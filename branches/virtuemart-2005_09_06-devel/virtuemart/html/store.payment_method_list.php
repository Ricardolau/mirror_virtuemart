<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: store.payment_method_list.php,v 1.8 2005/08/11 19:50:48 soeren_nb Exp $
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
require_once( CLASSPATH . "pageNavigation.class.php" );
require_once( CLASSPATH . "htmlTools.class.php" );

if (!empty($keyword)) {
	$list  = "SELECT * FROM #__pshop_payment_method, #__pshop_shopper_group WHERE ";
	$count = "SELECT count(*) as num_rows FROM #__pshop_payment_method,#__pshop_shopper_group WHERE ";
	$q  = "(#__pshop_payment_method.payment_method_name LIKE '%$keyword%' ";
	$q .= "AND #__pshop_payment_method.vendor_id='$ps_vendor_id' ";
	$q .= "AND #__pshop_payment_method.shopper_group_id=#__pshop_shopper_group.shopper_group_id ";
	$q .= ") ";
	$q .= "ORDER BY #__pshop_payment_method.list_order,#__pshop_payment_method.payment_method_name ";
	$list .= $q . " LIMIT $limitstart, " . $limit;
	$count .= $q;   
}
else {
	$q = "";
	$list  = "SELECT * FROM #__pshop_payment_method,#__pshop_shopper_group WHERE ";
	$count = "SELECT count(*) as num_rows FROM #__pshop_payment_method,#__pshop_shopper_group WHERE ";
	$q .= "#__pshop_payment_method.vendor_id='$ps_vendor_id' ";
	$q .= "AND #__pshop_payment_method.shopper_group_id=#__pshop_shopper_group.shopper_group_id ";
	$list .= $q;
	$list .= "ORDER BY #__pshop_payment_method.list_order,#__pshop_payment_method.payment_method_name ";
	$list .= "LIMIT $limitstart, " . $limit;
	$count .= $q;
}
$db->query($count);
$db->next_record();
$num_rows = $db->f("num_rows");
  
// Create the Page Navigation
$pageNav = new vmPageNav( $num_rows, $limitstart, $limit );

// Create the List Object with page navigation
$listObj = new listFactory( $pageNav );

// print out the search field and a list heading
$listObj->writeSearchHeader($PHPSHOP_LANG->_PHPSHOP_PAYMENT_METHOD_LIST_LBL, IMAGEURL."ps_image/payment.gif", $modulename, "payment_method_list");

// start the list table
$listObj->startTable();

// these are the columns in the table
$columns = Array(  "#" => "width=\"20\"", 
					"<input type=\"checkbox\" name=\"toggle\" value=\"\" onclick=\"checkAll(".$num_rows.")\" />" => "width=\"20\"",
					$PHPSHOP_LANG->_PHPSHOP_PAYMENT_METHOD_LIST_NAME => '',
					$PHPSHOP_LANG->_PHPSHOP_PAYMENT_METHOD_LIST_CODE => '',
					$PHPSHOP_LANG->_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT => '',
					$PHPSHOP_LANG->_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP => '',
					$PHPSHOP_LANG->_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR => '',
					$PHPSHOP_LANG->_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL => '',
					_E_REMOVE => "width=\"5%\""
				);
$listObj->writeTableHeader( $columns );

$db->query($list);
$i = 0;
while ($db->next_record()) { 

	$listObj->newRow();
	
	// The row number
	$listObj->addCell( $pageNav->rowNumber( $i ) );
	
	// The Checkbox
	$listObj->addCell( mosHTML::idBox( $i, $db->f("payment_method_id"), false, "payment_method_id" ) );

	$url = $_SERVER['PHP_SELF'] . "?page=$modulename.payment_method_form&limitstart=$limitstart&keyword=$keyword&payment_method_id=".$db->f("payment_method_id");
	$tmp_cell = "<a href=\"" . $sess->url($url) . "\">". $db->f("payment_method_name")."</a>";
	$listObj->addCell( $tmp_cell );
	
	$listObj->addCell(  $db->f("payment_method_code") );
	
	$listObj->addCell(  $db->f("payment_method_discount"));
    $listObj->addCell(  $db->f("shopper_group_name"));
    
	$enable_processor = $db->f("enable_processor");
	switch($enable_processor) { 
		case "Y": 
			$tmp_cell = $PHPSHOP_LANG->_PHPSHOP_PAYMENT_FORM_USE_PP;
			break;
		case "N":
			$tmp_cell = $PHPSHOP_LANG->_PHPSHOP_PAYMENT_FORM_AO;
			break;
		case "B":
			$tmp_cell = $PHPSHOP_LANG->_PHPSHOP_PAYMENT_FORM_BANK_DEBIT;
			break;
		case "P":
			$tmp_cell = "PayPal related";
			break;
		default:
			$tmp_cell = $PHPSHOP_LANG->_PHPSHOP_PAYMENT_FORM_CC;
			break;
	}
	$listObj->addCell( $tmp_cell );
    
	if ($db->f("payment_enabled")=='N')
		$tmp_cell = '<img src="'. $mosConfig_live_site .'/administrator/images/publish_x.png" border="0" />';
	else 
		$tmp_cell = '<img src="'. $mosConfig_live_site .'/administrator/images/tick.png" border="0" />';
	$listObj->addCell( $tmp_cell );
	
	$listObj->addCell( $ps_html->deleteButton( "payment_method_id", $db->f("payment_method_id"), "paymentMethodDelete", $keyword, $limitstart ) );

	$i++;
}
$listObj->writeTable();

$listObj->endTable();

$listObj->writeFooter( $keyword );
?>