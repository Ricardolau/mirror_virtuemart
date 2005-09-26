<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/* $Id: product.specialprod.php,v 1.1 2005/09/06 20:04:22 soeren_nb Exp $
* 
* @package mambo-phpShop
* @subpackage HTML
* @Copyright (C) 2000 - 2003 Mr PHP
* @license GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version $Revision: 1.1 $
*
* 
* www.mambo-phpshop.net
*
* ----------------------------------------------------------------------
 Special Products Manager
 ----------------------------------------------------------------------
 Module designed by 
 W: www.mrphp.com.au
 E: info@mrphp.com.au
 P: +61 418 436 690
 ----------------------------------------------------------------------*/
mm_showMyFileName( __FILE__ );

require_once( CLASSPATH . "pageNavigation.class.php" );
require_once( CLASSPATH . "htmlTools.class.php" );

$category_id = mosGetParam( $_REQUEST, 'category_id' );
$filter = mosgetparam($_REQUEST, 'filter', "featured_and_discounted" );

$qfilter = " AND (product_special='Y' OR product_discount_id > 0) ";

switch( $filter ) {
	case "all":
		$qfilter = "";
		break;
	case "featured":
		$qfilter = " AND (product_special='Y') ";
		break;
	case "discounted":
		$qfilter = " AND (product_discount_id > 0) ";
		break;
	case "featured_and_discounted":
		$qfilter = " AND (product_special='Y' OR product_discount_id > 0) ";
		break;
}
// Check to see if this is a search or a browse by category
// Default is to show all products
if (!empty( $category_id )) {
	$list  = "SELECT * FROM #__pshop_product, #__pshop_product_category_xref WHERE ";
	$count  = "SELECT count(*) as num_rows FROM #__pshop_product,
                product_category_xref, category WHERE ";
	//$q  = "product.vendor_id = '$ps_vendor_id' ";
	$q = "#__pshop_product_category_xref.category_id='$category_id' ";
	$q .= "AND #__pshop_product.product_id=#__pshop_product_category_xref.product_id ";
	$q .= $qfilter;
	$q .= "ORDER BY product_name ";
	$list .= $q . " LIMIT $limitstart, $limit";
	$count .= $q;
}
elseif (!empty($keyword)) {
	$list  = "SELECT * FROM #__pshop_product WHERE ";
	$count = "SELECT count(*) as num_rows FROM #__pshop_product WHERE ";
	//$q  = "product.vendor_id = '$ps_vendor_id' ";
	$q = "(#__pshop_product.product_name LIKE '%$keyword%' OR ";
	$q .= "#__pshop_product.product_sku LIKE '%$keyword%' OR ";
	$q .= "#__pshop_product.product_s_desc LIKE '%$keyword%' OR ";
	$q .= "#__pshop_product.product_desc LIKE '%$keyword%'";
	$q .= ") ";
	$q .= $qfilter;
	$q .= "ORDER BY product_name ";
	$list .= $q . " LIMIT $limitstart, $limit";
	$count .= $q;
}
else {
	$list  = "SELECT * FROM #__pshop_product ";
	$count = "SELECT count(*) as num_rows FROM #__pshop_product ";
	$q = "WHERE 1=1 ";
	$q .= $qfilter;
	$q .= "ORDER BY product_name ";
	$list .= $q . " LIMIT $limitstart, $limit";
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
$listObj->writeSearchHeader($PHPSHOP_LANG->_('_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL'), IMAGEURL."ps_image/product_code.png", $modulename, "specialprod");

echo '<strong>'.$PHPSHOP_LANG->_PHPSHOP_FILTER.':</strong>&nbsp;&nbsp;';
if($filter != "all") echo '<a href="'.$sess->url($_SERVER['PHP_SELF']."?page=$page&filter=all").'" title="'.$PHPSHOP_LANG->_PHPSHOP_LIST_ALL_PRODUCTS.'">';
echo $PHPSHOP_LANG->_PHPSHOP_LIST_ALL_PRODUCTS;
if ($filter != 'all') echo '</a>';

echo '&nbsp;&nbsp;|&nbsp;&nbsp;';
if ($filter != 'featured_and_discounted') echo '<a href="'.$sess->url($_SERVER['PHP_SELF']."?page=$page&filter=featured_and_discounted").'" title="'.$PHPSHOP_LANG->_PHPSHOP_HIDE_OUT_OF_STOCK.'">';
echo $PHPSHOP_LANG->_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED;
if ($filter != 'featured_and_discounted') echo '</a>';

echo '&nbsp;&nbsp;|&nbsp;&nbsp;';
if ($filter != 'featured') echo '<a href="'.$sess->url($_SERVER['PHP_SELF']."?page=$page&filter=featured").'" title="'.$PHPSHOP_LANG->_PHPSHOP_HIDE_OUT_OF_STOCK.'">';
echo $PHPSHOP_LANG->_PHPSHOP_SHOW_FEATURED;
if ($filter != 'featured') echo '</a>';

echo '&nbsp;&nbsp;|&nbsp;&nbsp;';
if ($filter != 'discounted') echo '<a href="'.$sess->url($_SERVER['PHP_SELF']."?page=$page&filter=discounted").'" title="'.$PHPSHOP_LANG->_PHPSHOP_HIDE_OUT_OF_STOCK.'">';
echo $PHPSHOP_LANG->_PHPSHOP_SHOW_DISCOUNTED;
if ($filter != 'discounted') echo '</a>';

echo '<br /><br />';

// start the list table
$listObj->startTable();

// these are the columns in the table
$columns = Array(  "#" => "width=\"20\"", 
					$PHPSHOP_LANG->_PHPSHOP_PRODUCT_LIST_NAME => '',
					$PHPSHOP_LANG->_PHPSHOP_PRODUCT_LIST_SKU => '',
					$PHPSHOP_LANG->_PHPSHOP_PRODUCT_INVENTORY_PRICE => '',
					$PHPSHOP_LANG->_PHPSHOP_FEATURED => '',
					$PHPSHOP_LANG->_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT => '',
					$PHPSHOP_LANG->_PHPSHOP_FILEMANAGER_PUBLISHED => ''
				);
$listObj->writeTableHeader( $columns );

$db->query($list);

$i = 0;
while ($db->next_record()) {

	$listObj->newRow();
	
	// The row number
	$listObj->addCell( $pageNav->rowNumber( $i ) );
	
	$url = $_SERVER['PHP_SELF']."?page=$modulename.product_form&product_id=" . $db->f("product_id");
	if ($db->f("product_parent_id")) {
		$url .= "&product_parent_id=" . $db->f("product_parent_id");
	}
	$tmp_cell = "<a href=\"" . $sess->url($url) . "\">". $db->f("product_name")."</a>";
	$listObj->addCell( $tmp_cell );
	
	$listObj->addCell( $db->f("product_sku") );
	
	$price=$ps_product->get_price($db->f("product_id"));
	if ($price) {
		if (!empty($price["item"])) {
			$tmp_cell = $CURRENCY_DISPLAY->getFullValue( $price["product_price"] );
		} else {
			$tmp_cell = "none";
		}
	} else {
		$tmp_cell = "none";
	}
	$listObj->addCell( $tmp_cell );
       
	$listObj->addCell( vmCommonHTML::getYesNoIcon( $db->f("product_special"), "On Special?" ));
	
	$listObj->addCell( $db->f("product_discount_id") );
	
	$listObj->addCell( vmCommonHTML::getYesNoIcon( $db->f("product_publish"), "Published?" ) );
    
	$i++;
}

$listObj->writeTable();

$listObj->endTable();

$listObj->writeFooter( $keyword );

?>