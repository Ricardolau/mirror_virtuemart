<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: product.product_attribute_list.php,v 1.4 2005/01/27 19:34:03 soeren_nb Exp $
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

require_once( CLASSPATH . "pageNavigation.class.php" );
require_once( CLASSPATH . "htmlTools.class.php" );

$product_parent_id = mosgetparam($_REQUEST, 'product_parent_id', 0);
$return_args = mosgetparam($_REQUEST, 'return_args');
$product_id = mosgetparam($_REQUEST, 'product_id', 0);

if (!empty($product_parent_id)) {
  $title = $PHPSHOP_LANG->_PHPSHOP_ATTRIBUTE_LIST_LBL. " - Product:";
} else {
  $title = $PHPSHOP_LANG->_PHPSHOP_ATTRIBUTE_LIST_LBL. " - Item:";
}
$url = $_SERVER['PHP_SELF'] . "?page=$modulename.product_form&product_id=$product_id&product_parent_id=$product_parent_id";
$title .= "<a href=\"" . $sess->url($url) . "\">". $ps_product->get_field($product_id,"product_name") ."</a>"; 

$q = "SELECT * FROM #__pshop_product_attribute_sku WHERE product_id = '$product_id' ";
$q .= "ORDER BY attribute_list,attribute_name";
$db->query($q);

// Create the List Object with page navigation
$listObj = new listFactory();

// print out the search field and a list heading
$listObj->writeSearchHeader( $title, IMAGEURL."ps_image/product_code.png", $modulename, "product_attribute_list");

// start the list table
$listObj->startTable();

// these are the columns in the table
$columns = Array(  "#" => "width=\"20\"", 
					"<input type=\"checkbox\" name=\"toggle\" value=\"\" onclick=\"checkAll(".$db->num_rows().")\" />" => 'width="5%"',
					$PHPSHOP_LANG->_PHPSHOP_ATTRIBUTE_LIST_NAME => 'width="30%"',
					$PHPSHOP_LANG->_PHPSHOP_ATTRIBUTE_LIST_ORDER => 'width="45%"',
					_E_REMOVE => "width=\"5%\""
				);
$listObj->writeTableHeader( $columns );

$i = 0;
while ($db->next_record()) { 
        
	$attribute_name = $db->f("attribute_name");
	$url_att_name = urlencode($attribute_name);
	
	$listObj->newRow();
	
	// The row number
	$listObj->addCell( $i+1 );
	
	// The Checkbox
	$listObj->addCell( mosHTML::idBox( $i, urlencode($db->f("attribute_name"), false, "attribute_name" ) ) );
	
	$url = $_SERVER['PHP_SELF'] . "?page=$modulename.product_attribute_form&limitstart=$limitstart&keyword=$keyword&product_id=" . $product_id . "&attribute_name=" . urlencode($db->f("attribute_name")) . "&return_args=" . urlencode($return_args);
	$tmp_cell = "<a href=\"" . $sess->url($url) . "\">$attribute_name</a>";
	$listObj->addCell( $tmp_cell );
	
    $listObj->addCell( $db->f("attribute_list") );
	
	$listObj->addCell( $ps_html->deleteButton( "attribute_name", $db->f("attribute_name"), "productAttributeDelete", $keyword, $limitstart, "&product_id=$product_id" ) );

	$i++;
}

$listObj->writeTable();

$listObj->writeFooter( "", "&product_id=$product_id&return_args=$return_args" );

$listObj->endTable();

?>