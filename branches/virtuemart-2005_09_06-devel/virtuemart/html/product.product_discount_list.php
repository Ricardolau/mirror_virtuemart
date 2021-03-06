<?php 
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: product.product_discount_list.php,v 1.2 2005/01/27 19:34:03 soeren_nb Exp $
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
	$list  = "SELECT * FROM #__pshop_product_discount WHERE ";
	$count = "SELECT count(*) as num_rows FROM #__pshop_product_discount WHERE ";
	$q  = "(start_date LIKE '%$keyword%' OR ";
	$q .= "end_date LIKE '%$keyword%' OR ";
	$q .= "amount LIKE '%$keyword%' ";
	$q .= ") ";
	$q .= "ORDER BY amount ";
	$list .= $q . " LIMIT $limitstart, " . SEARCH_ROWS;
	$count .= $q;   
}
else {
	$list  = "SELECT * FROM #__pshop_product_discount ";
	$list .= "ORDER BY amount ";
	$list .= "LIMIT $limitstart, " . SEARCH_ROWS;
	$count = "SELECT count(*) as num_rows FROM #__pshop_product_discount ";
}
$db->query($count);
$db->next_record();
$num_rows = $db->f("num_rows");

// Create the Page Navigation
$pageNav = new vmPageNav( $num_rows, $limitstart, $limit );

// Create the List Object with page navigation
$listObj = new listFactory( $pageNav );

// print out the search field and a list heading
$listObj->writeSearchHeader($PHPSHOP_LANG->_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL, IMAGEURL."ps_image/percentage.png", $modulename, "product_discount_list");

// start the list table
$listObj->startTable();

// these are the columns in the table
$columns = Array(  "#" => "width=\"20\"", 
					"<input type=\"checkbox\" name=\"toggle\" value=\"\" onclick=\"checkAll(".$num_rows.")\" />" => "width=\"20\"",
					$PHPSHOP_LANG->_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT => '',
					$PHPSHOP_LANG->_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE => '',
					$PHPSHOP_LANG->_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE => '',
					$PHPSHOP_LANG->_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE => '',
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
	$listObj->addCell( mosHTML::idBox( $i, $db->f("discount_id"), false, "discount_id" ) );

	$tmp_cell = '<a href="'.$sess->url( $_SERVER['PHP_SELF'].'?page=product.product_discount_form&discount_id='.$db->f("discount_id") ).'">'.$db->f("amount").'</a>';
	$listObj->addCell( $tmp_cell );
	
    $tmp_cell = $db->f("is_percent")=='1' ? $PHPSHOP_LANG->_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT : $PHPSHOP_LANG->_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL;
	$listObj->addCell( $tmp_cell );
	
	if($db->f("start_date")) 
		$tmp_cell = strftime("%Y-%m-%d", $db->f("start_date"));
	else
		$tmp_cell = "-";
	$listObj->addCell( $tmp_cell );
	
    if($db->f("end_date")) 
		$tmp_cell = strftime("%Y-%m-%d", $db->f("end_date"));
	else
		$tmp_cell = "-";
	$listObj->addCell( $tmp_cell );
	
	$listObj->addCell( $ps_html->deleteButton( "discount_id", $db->f("discount_id"), "discountDelete", $keyword, $limitstart ) );

	$i++;

}
$listObj->writeTable();

$listObj->endTable();

$listObj->writeFooter( $keyword );

?>