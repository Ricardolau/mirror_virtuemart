<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: admin.country_list.php,v 1.7 2005/05/08 09:02:24 soeren_nb Exp $
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
	$list  = "SELECT * FROM #__pshop_country WHERE ";
	$count = "SELECT count(*) as num_rows FROM #__pshop_country WHERE ";
	$q  = "(country_name LIKE '%$keyword%' OR ";
	$q .= "country_2_code LIKE '%$keyword%' OR ";
	$q .= "country_3_code LIKE '%$keyword%' ";
	$q .= ") ";
	$q .= "ORDER BY country_name ";
	$list .= $q . " LIMIT $limitstart, " . $limit;
	$count .= $q;   
}
else {
	$list  = "SELECT * FROM #__pshop_country ";
	$list .= "ORDER BY country_name ";
	$list .= "LIMIT $limitstart, " . $limit;
	$count = "SELECT count(*) as num_rows FROM #__pshop_country ";
}
$db->query($count);
$db->next_record();
$num_rows = $db->f("num_rows");

// Create the Page Navigation
$pageNav = new vmPageNav( $num_rows, $limitstart, $limit );

// Create the List Object with page navigation
$listObj = new listFactory( $pageNav );

// print out the search field and a list heading
$listObj->writeSearchHeader($PHPSHOP_LANG->_PHPSHOP_COUNTRY_LIST_LBL, IMAGEURL."ps_image/countries.gif", "admin", "country_list");

// start the list table
$listObj->startTable();

// these are the columns in the table
$columns = Array(  "#" => "", 
					"<input type=\"checkbox\" name=\"toggle\" value=\"\" onclick=\"checkAll(".$num_rows.")\" />" => "",
					$PHPSHOP_LANG->_PHPSHOP_COUNTRY_LIST_NAME => "width=\"30%\"",
					$PHPSHOP_LANG->_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL => "width=\"25%\"",
					$PHPSHOP_LANG->_PHPSHOP_COUNTRY_LIST_3_CODE => "width=\"20%\"",
					$PHPSHOP_LANG->_PHPSHOP_COUNTRY_LIST_2_CODE => "width=\"20%\"",
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
	$listObj->addCell( mosHTML::idBox( $i, $db->f("country_id"), false, "country_id" ) );
	
	$tmp_cell = "<a href=\"". $sess->url($_SERVER['PHP_SELF'] ."?page=admin.country_form&limitstart=$limitstart&keyword=$keyword&country_id=".$db->f("country_id")) ."\">";
	$tmp_cell .= $db->f("country_name") ."</a>&nbsp;&nbsp;";
	$tmp_cell .= "<a href=\"". $sess->url($_SERVER['PHP_SELF'] ."?page=admin.country_state_list&country_id=".$db->f("country_id")) ."\">[ ". $PHPSHOP_LANG->_PHPSHOP_STATE_LIST_MNU ." ]</a>";
	$listObj->addCell( $tmp_cell );
	
	$listObj->addCell( $db->f("zone_id") );
	$listObj->addCell( $db->f("country_3_code") );
	$listObj->addCell( $db->f("country_2_code") );
	
	$listObj->addCell( $ps_html->deleteButton( "country_id", $db->f("country_id"), "countryDelete", $keyword, $limitstart ) );
	
		$i++;
	
}
$listObj->writeTable();

$listObj->endTable();

$listObj->writeFooter( $keyword );
?>