<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: product.product_price_list.php,v 1.7 2005/06/23 18:59:16 soeren_nb Exp $
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

if( is_array( $product_id ))
	$product_id = (int)$product_id[0];

$product_parent_id = mosgetparam($_REQUEST, 'product_parent_id', 0);
$return_args = mosgetparam($_REQUEST, 'return_args');

if (empty($product_parent_id)) {
  $title = $PHPSHOP_LANG->_PHPSHOP_PRODUCT_LBL;
} else {
  $title = $PHPSHOP_LANG->_PHPSHOP_PRODUCT_FORM_ITEM_LBL;
}
$title .=  "<br/>". $PHPSHOP_LANG->_PHPSHOP_PRICE_LIST_FOR_LBL."&nbsp;&nbsp;";
$url = $_SERVER['PHP_SELF'] . "?page=$modulename.product_form&product_id=$product_id&product_parent_id=$product_parent_id";
$title .=  "<a href=\"" . $sess->url($url) . "\">". $ps_product->get_field($product_id,"product_name")."</a>"; 


$count = "SELECT COUNT(*) ";
$list = "SELECT shopper_group_name,product_price_id,product_price,product_currency,price_quantity_start,price_quantity_end ";
$q = "FROM #__pshop_shopper_group,#__pshop_product_price ";
$q .= "WHERE product_id = '$product_id' ";
if( !$perm->check("admin"))
  $q .= "AND #__pshop_shopper_group.vendor_id = '$ps_vendor_id' ";
$q .= "AND #__pshop_shopper_group.shopper_group_id = #__pshop_product_price.shopper_group_id ";
$q .= "ORDER BY shopper_group_name,price_quantity_start, product_price ";
$list .= $q . "LIMIT $limitstart, $limit";
$count .= $q;
$db->query($count);
$num_rows = $db->num_rows();

// Create the Page Navigation
$pageNav = new vmPageNav( $num_rows, $limitstart, $limit );

// Create the List Object with page navigation
$listObj = new listFactory( $pageNav );

// print out the search field and a list heading
$listObj->writeSearchHeader($title, IMAGEURL."ps_image/product_code.png", $modulename, "product_list");

// start the list table
$listObj->startTable();

// these are the columns in the table
$columns = Array(  "#" => "width=\"20\"", 
					"<input type=\"checkbox\" name=\"toggle\" value=\"\" onclick=\"checkAll(".$num_rows.")\" />" => "width=\"20\"",
					$PHPSHOP_LANG->_PHPSHOP_PRICE_LIST_GROUP_NAME => '',
					$PHPSHOP_LANG->_PHPSHOP_PRICE_LIST_PRICE => '',
					$PHPSHOP_LANG->_PHPSHOP_PRODUCT_LIST_CURRENCY => '',
					$PHPSHOP_LANG->_PHPSHOP_PRODUCT_LIST_QUANTITY_START => 'width="50"',
					$PHPSHOP_LANG->_PHPSHOP_PRODUCT_LIST_QUANTITY_END => 'width="50"',
					_E_REMOVE => "width=\"5%\""
				);
$listObj->writeTableHeader( $columns );

$db->query( $list );
$i = 0;
while ($db->next_record()) {

	$listObj->newRow();
	
	// The row number
	$listObj->addCell( $pageNav->rowNumber( $i ) );
	
	// The Checkbox
	$listObj->addCell( mosHTML::idBox( $i, $db->f("product_price_id"), false, "product_price_id" ) );
	
	$url = $_SERVER['PHP_SELF'] . "?page=$modulename.product_price_form&limitstart=$limitstart&keyword=$keyword&product_price_id=" . $db->f("product_price_id") . "&product_id=$product_id&product_parent_id=$product_parent_id&return_args=" . urlencode($return_args);
	$tmp_cell = "<a href=" . $sess->url($url) . ">". $db->f("shopper_group_name"). "</a>";
	$listObj->addCell( $tmp_cell );
	
	$listObj->addCell( $db->f("product_price"));
	$listObj->addCell( $db->f("product_currency"));
	$listObj->addCell( $db->f("price_quantity_start"));
	$listObj->addCell( $db->f("price_quantity_end"));
	
	$listObj->addCell( $ps_html->deleteButton( "product_price_id", $db->f("product_price_id"), "productPriceDelete", $keyword, $limitstart ) );

	$i++;
}
$listObj->writeTable();

$listObj->endTable();

$listObj->writeFooter( $keyword, "&product_id=$product_id&product_parent_id=$product_parent_id&return_args=$return_args" );
?>