<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: product.product_type_list.php,v 1.2 2005/06/22 19:50:41 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage HTML
*
* @author Zdenek Dvorak <Zdenek.Dvorak@seznam.cz>
* @copyright (C) 2005 Zdenek Dvorak
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*/
require_once( CLASSPATH . "pageNavigation.class.php" );
require_once( CLASSPATH . "htmlTools.class.php" );

$q = "SELECT * FROM #__pshop_product_type ";
/*    $q .= "WHERE #__pshop_category_xref.category_parent_id='";
$q .= $category_id . "' AND ";
$q .= "#__pshop_category.category_id=#__pshop_category_xref.category_child_id ";
$q .= "AND #__pshop_category.vendor_id = $ps_vendor_id ";*/
$q .= "ORDER BY product_type_list_order asc ";
$q .= "LIMIT $limitstart, $limit";
$db->setQuery($q);   
$db->query();
$num_rows = $db->num_rows();

// Create the Page Navigation
$pageNav = new vmPageNav( $num_rows, $limitstart, $limit );

// Create the List Object with page navigation
$listObj = new listFactory( $pageNav );

// print out the search field and a list heading
$listObj->writeSearchHeader($PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_LIST_LBL, IMAGEURL."ps_image/categories.gif", $modulename, "product_type_list");

// start the list table
$listObj->startTable();

// these are the columns in the table
$columns = Array(  "#" => "width=\"20\"", 
					"<input type=\"checkbox\" name=\"toggle\" value=\"\" onclick=\"checkAll(".$num_rows.")\" />" => "width=\"20\"",
					$PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_FORM_NAME => 'width="25%"',
					$PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION => 'width="30%"',
					$PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS => 'width="15%"',
					$PHPSHOP_LANG->_PHPSHOP_PRODUCTS_LBL => 'width="15%"',
					$PHPSHOP_LANG->_PHPSHOP_PRODUCT_LIST_PUBLISH => 'width="5%"',
					$PHPSHOP_LANG->_PHPSHOP_MODULE_LIST_ORDER => 'width="5%"',
					_E_REMOVE => "width=\"5%\""
				);
$listObj->writeTableHeader( $columns );


$i = 0;
while ($db->next_record()) {
	$product_count = $ps_product_type->product_count($db->f("product_type_id"));
	$parameter_count = $ps_product_type->parameter_count($db->f("product_type_id"));
	
	$listObj->newRow();
	
	// The row number
	$listObj->addCell( $pageNav->rowNumber( $i ) );
	
	// The Checkbox
	$listObj->addCell( mosHTML::idBox( $i, $db->f("product_type_id"), false, "product_type_id" ) );
	
	$tmp_cell = "<a href=\"". $_SERVER['PHP_SELF'] . "?option=com_phpshop&page=product.product_type_form&product_type_id=" . $db->f("product_type_id") . "\">". $db->f("product_type_name") . "</a>";
	$listObj->addCell( $tmp_cell );
	
	$listObj->addCell(  $db->f("product_type_description"));

	$tmp_cell = $parameter_count . " " . $PHPSHOP_LANG->_PHPSHOP_PARAMETERS_LBL . " <a href=\""
			. $_SERVER['PHP_SELF'] . "?option=com_phpshop&page=product.product_type_parameter_list&product_type_id="
			. $db->f("product_type_id") . "\">[ ".$PHPSHOP_LANG->_PHPSHOP_SHOW." ]</a>";
	$listObj->addCell( $tmp_cell );
	
	$tmp_cell = $product_count ." ". $PHPSHOP_LANG->_PHPSHOP_PRODUCTS_LBL."&nbsp;<a href=\""
			. $_SERVER['PHP_SELF'] . "?option=com_phpshop&page=product.product_list&product_type_id=" . $db->f("product_type_id")
			. "\">[ ".$PHPSHOP_LANG->_PHPSHOP_SHOW." ]</a>";
	$listObj->addCell( $tmp_cell );
      //$listObj->addCell( $db->f("list_order"));

	if ($db->f("product_type_publish")=='Y') { 
		$tmp_cell = "<img src=\"". $mosConfig_live_site ."/administrator/images/tick.png\" border=\"0\" />\n";
	} 
	else { 
		$tmp_cell = "<img src=\"". $mosConfig_live_site ."/administrator/images/publish_x.png\" border=\"0\" />";
	}
	$listObj->addCell( $tmp_cell );  
	
//      echo "<a href=\"javascript: void(0);\" onClick=\"return listItemTask('cb$i','orderdown')\">";
//      echo "Down</a>";	
	$tmp_cell = "<div align=\"center\">"
			. $pageNav->orderUpIcon( $i, $i > 0 )
			. "\n&nbsp;" 
			. $pageNav->orderDownIcon( $i, $db->num_rows(), $i-1 <= $db->num_rows() )
			. "</div>";
	$listObj->addCell( $tmp_cell );  
	
	$listObj->addCell( $ps_html->deleteButton( "product_type_id", $db->f("product_type_id"), "ProductTypeDelete", $keyword, $limitstart ) );

	$i++;
}
$listObj->writeTable();

$listObj->endTable();

$listObj->writeFooter( $keyword );
?>