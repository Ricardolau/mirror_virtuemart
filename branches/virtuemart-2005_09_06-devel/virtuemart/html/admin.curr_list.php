<?php 
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: admin.curr_list.php,v 1.5 2005/01/27 19:34:00 soeren_nb Exp $
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
	$list  = "SELECT * FROM #__pshop_currency WHERE ";
	$count = "SELECT count(*) as num_rows FROM #__pshop_currency WHERE ";
	$q  = "(currency_name LIKE '%$keyword%' OR ";
	$q .= "currency_code LIKE '%$keyword%' ";
	$q .= ") ";
	$q .= "ORDER BY currency_name ";
	$list .= $q . " LIMIT $limitstart, " . $limit;
	$count .= $q;   
}
else {	
	$list  = "SELECT * FROM #__pshop_currency ";
	$list .= "ORDER BY currency_name ";
	$list .= "LIMIT $limitstart, " . $limit;
	$count = "SELECT count(*) as num_rows FROM #__pshop_currency ";
}
$db->query($count);
$db->next_record();
$num_rows = $db->f("num_rows");

// Create the Page Navigation
$pageNav = new vmPageNav( $num_rows, $limitstart, $limit );

// Create the List Object with page navigation
$listObj = new listFactory( $pageNav );

// print out the search field and a list heading
$listObj->writeSearchHeader($PHPSHOP_LANG->_PHPSHOP_CURRENCY_LIST_LBL, IMAGEURL."ps_image/currency.gif", "admin", "curr_list");

// start the list table
$listObj->startTable();


// these are the columns in the table
$columns = Array(  "#" => "width=\"20\"", 
					"<input type=\"checkbox\" name=\"toggle\" value=\"\" onclick=\"checkAll(".$num_rows.")\" />" => "width=\"20\"",
					$PHPSHOP_LANG->_PHPSHOP_CURRENCY_LIST_NAME => "",
					$PHPSHOP_LANG->_PHPSHOP_CURRENCY_LIST_CODE => "",
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
	$listObj->addCell( mosHTML::idBox( $i, $db->f("currency_id"), false, "currency_id" ) );
	
    $tmp_cell = "<a href=\"". $sess->url($_SERVER['PHP_SELF'] ."?page=admin.curr_form&limitstart=$limitstart&keyword=$keyword&currency_id=".$db->f("currency_id"))."\">";
	$tmp_cell .= $db->f("currency_name") ."</a>";
    $listObj->addCell( $tmp_cell );
	
    $listObj->addCell( $db->f("currency_code") );
	
	$listObj->addCell( $ps_html->deleteButton( "currency_id", $db->f("currency_id"), "currencyDelete", $keyword, $limitstart ) );

	$i++;

}
$listObj->writeTable();

$listObj->endTable();

$listObj->writeFooter( $keyword );
?>