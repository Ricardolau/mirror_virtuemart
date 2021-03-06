<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: ps_product_category.php,v 1.35 2005/09/06 19:28:35 soeren_nb Exp $
* @package mambo-phpShop
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


/****************************************************************************
*
* CLASS DESCRIPTION
*                   
* ps_product_category
*************************************************************************/
class ps_product_category {
  var $classname = "ps_product_category";
  
  /**************************************************************************
  ** name: validate_add()
  ** created by:
  ** description:
  ** parameters:
  ** returns:
  ***************************************************************************/
  function validate_add(&$d) {
    $valid = true;
    if (!$d["category_name"]) {
      $d["error"] = "ERROR:  You must enter a name for the category.";
      $valid = False;	
    }
    
    /** Image Upload Validation **/
    
    // do we have an image URL or an image File Upload?
    if (!empty( $d['category_thumb_image_url'] )) {
      // Image URL
      if (substr( $d['category_thumb_image_url'], 0, 4) != "http") {
        $d['error'] .= "Error: Image URL must begin with http.";
        $valid =  false;
      }
        
      $d["category_thumb_image"] = $d['category_thumb_image_url'];
    }
    else {
        // File Upload
        if (!validate_image( $d, "category_thumb_image", "category")) {
          $valid = false;
        }
    }

    if (!empty( $d['category_full_image_url'] )) {
      // Image URL
      if (substr( $d['category_full_image_url'], 0, 4) != "http") {
        $d['error'] = "Error: Image URL must begin with http.";
        return false;
      }
      $d["category_full_image"] = $d['category_full_image_url'];
    }
    else {
      // File Upload
      if (!validate_image( $d, "category_full_image", "category")) {
        $valid = false;
      }
    }
    
    return $valid;    

  }
 
  /**************************************************************************
  ** name: validate_update()
  ** created by:
  ** description:
  ** parameters:
  ** returns:
  ***************************************************************************/
  function validate_update(&$d) {
    
    $valid = true;

    if (!$d["category_name"]) {
      $d["error"] = "ERROR:  You must enter a name for the category.";
      $valid = False;	
    }
    elseif ($d["category_id"] == $d["category_parent_id"]) {
      $d["error"] = "ERROR:  Category parent cannot be same category.";
      $valid = False;	
    }
    $db =& new ps_DB;
    $q = "SELECT category_thumb_image,category_full_image FROM #__pshop_category WHERE category_id='". $d["category_id"] . "'";
    $db->query( $q );
    $db->next_record();
    
    /** Image Upload Validation **/
    
    // do we have an image URL or an image File Upload?
    if (!empty( $d['category_thumb_image_url'] )) {
      // Image URL
      if (substr( $d['category_thumb_image_url'], 0, 4) != "http") {
        $d['error'] .= "Error: Image URL must begin with http.";
        $valid =  false;
      }
        
      // if we have an uploaded image file, prepare this one for deleting.
      if( $db->f("category_thumb_image") && substr( $db->f("category_thumb_image"), 0, 4) != "http") {
          $_REQUEST["category_thumb_image_curr"] = $db->f("product_thumb_image");
          $d["category_thumb_image_action"] = "delete";
          if (!validate_image( $d, "product_thumb_image", "category")) {
            return false;
          }
      }
      $d["category_thumb_image"] = $d['category_thumb_image_url'];
    }
    else {
        // File Upload
        if (!validate_image( $d, "category_thumb_image", "category")) {
          $valid = false;
        }
    }

    if (!empty( $d['category_full_image_url'] )) {
      // Image URL
      if (substr( $d['category_full_image_url'], 0, 4) != "http") {
        $d['error'] = "Error: Image URL must begin with http.";
        return false;
      }
      // if we have an uploaded image file, prepare this one for deleting.
      if( $db->f("category_full_image") && substr( $db->f("category_thumb_image"), 0, 4) != "http") {
          $_REQUEST["category_full_image_curr"] = $db->f("category_full_image");
          $d["category_full_image_action"] = "delete";
          if (!validate_image( $d, "category_full_image", "category")) {
            return false;
          }
      }
      $d["category_full_image"] = $d['category_full_image_url'];
    }
    else {
      // File Upload
      if (!validate_image( $d, "category_full_image", "category")) {
        $valid = false;
      }
    }
    
    return $valid;
    
  }  
  
  /**************************************************************************
  ** name: validate_delete()
  ** created by:
  ** description:
  ** parameters:
  ** returns:
  ***************************************************************************/
  function validate_delete(&$d) {

    $db = new ps_DB;

    if (!$d["category_id"]) {
      $d["error"] = "ERROR:  Please select a category to delete.";
      return False;
    }

    // Check for children
    $q  = "SELECT * FROM #__pshop_category_xref where category_parent_id='";
    $q .= $d["category_id"] . "'";
    $db->setQuery($q);   $db->query();
    if ($db->next_record()) {
      $d["error"]  = "ERROR: This category has children. ";
      $d["error"] .= "Please delete children first.";
      return False;
    }
    $q = "SELECT category_thumb_image,category_full_image FROM #__pshop_category WHERE category_id='".$d["category_id"] . "'";
    $db->query( $q );
    $db->next_record();
    
    /* Prepare category_thumb_image for Deleting */
    if( !stristr( $db->f("category_thumb_image"), "http") ) {
      $_REQUEST["category_thumb_image_curr"] = $db->f("category_thumb_image");
      $d["category_thumb_image_action"] = "delete";
      if (!validate_image($d,"category_thumb_image","category")) {
        $d["error"] = "Error Deleting Category Images!";
        return false;
      }
    }
    /* Prepare product_full_image for Deleting */
    if( !stristr( $db->f("category_full_image"), "http") ) {
      $_REQUEST["category_full_image_curr"] = $db->f("category_full_image");
      $d["category_full_image_action"] = "delete";
      if (!validate_image($d,"category_full_image","category")) {
        return false;
      }
    }
    return True;
  }

  
  
  /**************************************************************************
  ** name: add()
  ** created by: pablo
  ** description: creates a new category record and a category_xref record
  ** with the appropriate parent and child ids
  ** parameters:
  ** returns:
  ***************************************************************************/
  function add(&$d) {
    $ps_vendor_id = $_SESSION["ps_vendor_id"];
    $hash_secret="PHPShopIsCool";
    $db = new ps_DB;
    $timestamp = time();
	    
    if ($this->validate_add($d)) {
    
      if (!process_images($d)) {
        return false;
      }  
      
      while(list($key,$value)= each($d)) {
          if (!is_array($value))
            $d[$key] = addslashes($value);
      }
      // Let's find out the last category in
      // the level of the new category
      $q = "SELECT MAX(list_order) AS list_order FROM #__pshop_category_xref,#__pshop_category ";
      $q .= "WHERE category_parent_id='".$d["parent_category_id"]."' ";
      $q .= "AND category_child_id=category_id ";
      $db->query( $q );
      $db->next_record();
      
      $list_order = intval($db->f("list_order"))+1;
      
      $q = "INSERT into #__pshop_category (vendor_id, category_name, ";
      $q .= "category_publish, category_description, category_browsepage, products_per_row, ";
      $q .= "category_flypage, category_thumb_image, category_full_image, cdate, mdate, list_order) ";
      $q .= "VALUES ('$ps_vendor_id','";
      $q .= $d["category_name"] . "','";
      if ($d["category_publish"] != "Y") {
        $d["category_publish"] = "N";
      }
      $q .= $d["category_publish"] . "','";
      $q .= $d["category_description"] . "','";
      $q .= $d["category_browsepage"] . "','";
      $q .= $d["products_per_row"] . "','";
      $q .= $d["category_flypage"] . "','";
      $q .= $d["category_thumb_image"] . "','";
      $q .= $d["category_full_image"] . "','";
      $q .= $timestamp . "','";
      $q .= $timestamp . "', '";
      $q .= $list_order . "')";
      $db->setQuery($q);
      $db->query();
  
      $category_id = $db->last_insert_id();
      
      $q = "INSERT into #__pshop_category_xref ";
      $q .= "(category_parent_id, category_child_id) ";
      $q .= "VALUES ('";
      $q .= $d["parent_category_id"] . "','";
      $q .= $category_id . "')";
      $db->setQuery($q);
      $db->query();
  
      return $category_id;
    }
    else {
      return False;
    }

  }

  /**************************************************************************
  ** name: update()
  ** created by: pablo
  ** description: updates category information
  ** parameters:
  ** returns:
  ***************************************************************************/
  function update(&$d) {
    $ps_vendor_id = $_SESSION["ps_vendor_id"];
    
    $db = new ps_DB;
	
    $timestamp = time();
    
    foreach ($d as $key => $value) {
      if (!is_array($value))
        $d[$key] = addslashes($value);
    }
    if ($this->validate_update($d)) {
      if (!process_images($d)) {
        return false;
      }
      $q = "UPDATE #__pshop_category SET ";
      $q .= "category_name='" . $d["category_name"];
      if (!isset($d["category_publish"])) {
        $d["category_publish"] = "N";
      }
      $q .= "',category_publish='" . $d["category_publish"];
      $q .= "',category_description='" . $d["category_description"];
      $q .= "',category_browsepage='" . $d["category_browsepage"];
      $q .= "',products_per_row='" . $d["products_per_row"];
      $q .= "',category_flypage='" . $d["category_flypage"];
      $q .= "',category_thumb_image='" . $d["category_thumb_image"];
      $q .= "',category_full_image='" . $d["category_full_image"];
      $q .= "', mdate='$timestamp";
      $q .= "', list_order='" . $d["list_order"]."'";
      $q .= " WHERE category_id='" . $d["category_id"] . "' ";
      $q .= "AND vendor_id='$ps_vendor_id' ";
      $db->setQuery($q);
      $db->query();

      /*
      ** update #__pshop_category x-reference table with parent-child relationship
      */
      $q = "UPDATE #__pshop_category_xref SET ";
      $q .= "category_parent_id='" . $d["category_parent_id"];
      $q .= "' WHERE category_child_id='" . $d["category_id"] . "'";
      $db->setQuery($q);
      $db->query();
      
      /* Re-Order the category table IF the list_order has been changed */
      if( intval($d['list_order']) != intval($d['currentpos'])) {
        $dbu = new ps_DB;
        
        /* Moved UP in the list order */
        if( intval($d['list_order']) < intval($d['currentpos']) ) {
        
          $q = "SELECT category_id FROM #__pshop_category_xref,#__pshop_category ";
          $q .= "WHERE category_parent_id='".$d["category_parent_id"]."' ";
          $q .= "AND category_child_id=category_id ";
          $q .= "AND category_id <> '" . $d["category_id"] . "' ";
          $q .= "AND list_order >= '" . intval($d["list_order"]) . "'";
          $db->query( $q );
          
          while( $db->next_record() ) {
            $dbu->query("UPDATE #__pshop_category SET list_order=list_order+1 WHERE category_id='".$db->f("category_id")."'");
          }
        }
        /* Moved DOWN in the list order */
        else {
        
          $q = "SELECT category_id FROM #__pshop_category_xref,#__pshop_category ";
          $q .= "WHERE category_parent_id='".$d["category_parent_id"]."' ";
          $q .= "AND category_child_id=category_id ";
          $q .= "AND category_id <> '" . $d["category_id"] . "' ";
          $q .= "AND list_order > '" . intval($d["currentpos"]) . "'";
          $q .= "AND list_order <= '" . intval($d["list_order"]) . "'";
          $db->query( $q );
          
          while( $db->next_record() ) {
            $dbu->query("UPDATE #__pshop_category SET list_order=list_order-1 WHERE category_id='".$db->f("category_id")."'");
          }
        
        }
      } /* END Re-Ordering */
      
      // Problem: When the parent id has changed, the category is 
      // in a new level. We now need to change the list order value
      // of the category to the value: recent MAXIMUM + 1
      if( $d["category_parent_id"] != $d["current_parent_id"] ) {
        // Let's find out the last category in
        // the new level of the category
        $q = "SELECT MAX(list_order) AS list_order FROM #__pshop_category_xref,#__pshop_category ";
        $q .= "WHERE category_parent_id='".$d["category_parent_id"]."' ";
        $q .= "AND category_child_id=category_id ";
        $q .= "AND category_id <> '".$d["category_id"]."'";
        $db->query( $q );
        $db->next_record();
        
        $q = "UPDATE #__pshop_category SET list_order=".$db->f("list_order")."+1 WHERE category_id='".$d["category_id"]."'";
        $db->query( $q );
      }
      return True;
    }
    else {
      return False;	
    }
  }

  /**************************************************************************
  ** name: delete()
  ** created by: pablo
  ** description: Should delete a category and and categories under it.
  ** parameters: 
  ** returns:
  ***************************************************************************/
  function delete(&$d) {
    global $ps_product;
    $db =& new ps_DB;
    $dbc =& new ps_DB;
    
    if (!$this->validate_delete($d)) {
      return False;
    }
    // Delete all products from that category
    // We must filter out those products that are in more than one category!
    
    // Case 1: Products are assigned to more than on category
    // so let's only delete the __pshop_product_category_xref entry
    $q = "CREATE TEMPORARY TABLE `#__tmp_prod` AS 
            (SELECT * FROM `#__pshop_product_category_xref` 
            WHERE `category_id`='".$d['category_id']."');";
    $db->query( $q );
    $q = "SELECT #__pshop_product_category_xref.product_id 
          FROM `#__pshop_product_category_xref`, `#__tmp_prod` 
          WHERE #__pshop_product_category_xref.product_id=#__tmp_prod.product_id 
            AND #__pshop_product_category_xref.category_id!='".$d['category_id']."';";
    $db->query( $q );
    if( $db->num_rows() > 0 ) { 
      $i = 0;
      $q = "DELETE FROM #__pshop_product_category_xref WHERE product_id IN (";
      while( $db->next_record() ) {
        $q .= "'".$db->f("product_id")."'";
        if( $i++ < $db->num_rows()-1 )
          $q .= ",";
      }
      $q .= ") AND category_id='".$d['category_id']."'";
      $db->query( $q );
    }
    else {
      // Case 2: Products are assigned to this category only
      $q = "SELECT product_id FROM `#__pshop_product_category_xref` WHERE `category_id`='".$d['category_id']."';";
      $db->query ( $q );
      while( $db->next_record() ) {
        $d['product_id'] = $db->f("product_id");
        $ps_product->delete( $d );
      }
    }
    
    $q = "DELETE FROM #__pshop_category WHERE category_id='" . $d["category_id"] . "'";
    $db->setQuery($q);   $db->query();

    $q  = "DELETE FROM #__pshop_category_xref ";
    $q .= "WHERE category_child_id='" . $d["category_id"] . "'";
    $db->setQuery($q);   $db->query();
    
    /* Delete Image files */
    if (!process_images($d)) {
      return false;
    }
    
    return True;
  }
  
  function getCategoryTreeArray() {
  
    $db = new ps_DB;
    if( empty( $GLOBALS['category_info']['category_tree'])) {
    
      // Get only published categories
      $query  = "SELECT category_id, category_name as name,category_child_id as cid, category_parent_id as pid,list_order FROM #__pshop_category, #__pshop_category_xref 
                WHERE #__pshop_category.category_publish='Y' 
                  AND #__pshop_category.category_id=#__pshop_category_xref.category_child_id 
                ORDER BY #__pshop_category.list_order ASC, #__pshop_category.category_name ASC";
    
      // initialise the query in the $database connector
      // this translates the '#__' prefix into the real database prefix
      $db->query( $query );
      
      $categories = Array();
      // Transfer the Result into a searchable Array
      
      while( $db->next_record() ) {
        $categories[$db->f("cid")]["category_child_id"] = $db->f("cid");
        $categories[$db->f("cid")]["category_parent_id"] = $db->f("pid");
        $categories[$db->f("cid")]["category_name"] = $db->f("name");
        $categories[$db->f("cid")]["list_order"] = $db->f("list_order");
      }
      
      $GLOBALS['category_info']['category_tree'] = $categories;
      return $GLOBALS['category_info']['category_tree'];
    }
    else {
      return $GLOBALS['category_info']['category_tree'];
    }
  }
  
  
  
  /**************************************************************************
  ** name: get_category_tree
  ** created by: Soeren
  ** description: This function is used for the frontend to display a
  **                complete list of top-level categories (by using the <ul> and <li> Elements ONLY)
  **               The current category is highlighted and if it's a subcategory,
  **               its complete branch is shown
  **               This is NOT recursive.
  ** returns: @var String Category Tree
  ***************************************************************************/
  
  function get_category_tree( $category_id=0, 
                              $links_css_class="mainlevel", 
                              $list_css_class="mm123", 
                              $highlighted_style="font-style:italic;" ) {
    global $database, $sess;
    
    $categories = ps_product_category::getCategoryTreeArray();
    
    // Copy the Array into an Array with auto_incrementing Indexes
    $key = array_keys($categories);
    $size = sizeOf($key);
    for ($i=0; $i<$size; $i++) 
     $category_tmp[$i] = &$categories[$key[$i]];
    
    $html = "";
    /** FIRST STEP
    * Order the Category Array and build a Tree of it
    **/
    $nrows = count( $category_tmp );
    
    $id_list = array();
    $row_list = array();
    $depth_list = array();
    
    for($n = 0 ; $n < $nrows ; $n++)
     if($category_tmp[$n]["category_parent_id"] == 0)
     { array_push($id_list,$category_tmp[$n]["category_child_id"]);
      array_push($row_list,$n);
      array_push($depth_list,0);
     }
     
    $loop_count = 0;
    while(count($id_list) < $nrows) {
     if( $loop_count > $nrows )
      break;
     $id_temp = array();
     $row_temp = array();
     $depth_temp = array();
     for($i = 0 ; $i < count($id_list) ; $i++) { 
      $id = $id_list[$i];
      $row = $row_list[$i];
      $depth = $depth_list[$i];
      array_push($id_temp,$id);
      array_push($row_temp,$row);
      array_push($depth_temp,$depth);
      for($j = 0 ; $j < $nrows ; $j++)
       if(($category_tmp[$j]["category_parent_id"] == $id)
       && (array_search($category_tmp[$j]["category_child_id"],$id_list) == NULL))
       { array_push($id_temp,$category_tmp[$j]["category_child_id"]);
        array_push($row_temp,$j);
        array_push($depth_temp,$depth + 1);
       }
       if( empty( $categories[@$category_tmp[$j]["category_parent_id"]] )) {
        
          array_push($id_temp,"");
          array_push($row_temp,"");
          array_push($depth_temp,"");
       }
     }
     $id_list = $id_temp;
     $row_list = $row_temp;
     $depth_list = $depth_temp;
     $loop_count++;
    }
    
    /** SECOND STEP
	* Find out if we have subcategories to display
	**/
    $allowed_subcategories = Array();
    if( !empty( $categories[$category_id]["category_parent_id"] ) ) {
      // Find the Root Category of this category
      $root = $categories[$category_id];
      $allowed_subcategories[] = $categories[$category_id]["category_parent_id"];
      // Loop through the Tree up to the root
      while( !empty( $root["category_parent_id"] )) {
        $allowed_subcategories[] = $categories[$root["category_child_id"]]["category_child_id"];
        $root = $categories[$root["category_parent_id"]];
      }
    }
	// Fix the empty Array Fields
	if( $nrows < count( $row_list ) ) {
		$nrows = count( $row_list );
	}
	
    // Now show the categories
    for($n = 0 ; $n < $nrows ; $n++) {

      if( !isset( $row_list[$n] ) || !isset( $category_tmp[$row_list[$n]]["category_child_id"] ) )
        continue;
      if( $category_id == $category_tmp[$row_list[$n]]["category_child_id"])
        $style = $highlighted_style;        
      else
        $style = "";
        
      $allowed = false;
      if( $depth_list[$n] > 0 ) {
        // Subcategory!
        if( isset( $root ) && in_array( $category_tmp[$row_list[$n]]["category_child_id"], $allowed_subcategories )
            || $category_tmp[$row_list[$n]]["category_parent_id"] == $category_id
            || $category_tmp[$row_list[$n]]["category_parent_id"] == @$categories[$category_id]["category_parent_id"]) {
          $allowed = true;
          
        }
      }
      else
        $allowed = true;
        
      if( $allowed ) {
        if( $depth_list[$n] > 0 )
          $css_class = "sublevel";
        else 
          $css_class = $links_css_class;
		$catname = shopMakeHtmlSafe( $category_tmp[$row_list[$n]]["category_name"] );
        $html .= '
          <a title="'.$catname.'" style="display:block;'.$style.'" class="'. $css_class .'" href="'. $sess->url(URL."index.php?page=shop.browse&amp;category_id=".$category_tmp[$row_list[$n]]["category_child_id"]) .'">'
          . str_repeat("&nbsp;&nbsp;&nbsp;",$depth_list[$n]) . $catname
          . ps_product_category::products_in_category( $category_tmp[$row_list[$n]]["category_child_id"] )
          .'</a>';
      }
    }
    
    return $html;
  }
  
  
  /**************************************************************************
  ** name: traverse_tree_down()
  ** created by:
  ** description: It goes through the category table and establishes
  **              the category tree based on the parent-child relationships
  **              defnied in the category_xref table.
  **              This is VERY recursive...
  **
  ** parameters:
  ** returns:
  ***************************************************************************/
  function traverse_tree_down($class="",$category_id="0", $level="0") {
    static $ibg = 0;
    global $sess, $mosConfig_live_site, $PHPSHOP_LANG;
    $ps_vendor_id = $_SESSION["ps_vendor_id"];
    $db = new ps_DB;
    $class = "maintext";
    
    $level++;

    $q = "SELECT * FROM #__pshop_category,#__pshop_category_xref ";
    $q .= "WHERE #__pshop_category_xref.category_parent_id='";
    $q .= $category_id . "' AND ";
    $q .= "#__pshop_category.category_id=#__pshop_category_xref.category_child_id ";
    $q .= "AND #__pshop_category.vendor_id='$ps_vendor_id' ";
    $q .= "ORDER BY list_order asc ";
    $db->setQuery($q);   
    $db->query();
    
    while ($db->next_record()) {
      $product_count = $this->product_count($db->f("category_child_id"));
      if ($level % 2)
          $bgcolor=SEARCH_COLOR_1;
      else
          $bgcolor=SEARCH_COLOR_2;
      $ibg++;
      echo "<tr bgcolor=\"$bgcolor\">\n";
      echo "<td><input style=\"display:none;\" id=\"cb$ibg\" name=\"cb[]\" value=\"".$db->f("category_id")."\" type=\"checkbox\" />&nbsp;$ibg</td><td>";
      for ($i=0; $i<$level; $i++) {
        echo "&nbsp;&nbsp;&nbsp;";
      }
      echo "&#095&#095;|$level|&nbsp;";
      echo "<a href=\"" ;   
      echo $_SERVER['PHP_SELF'] . "?option=com_phpshop&page=product.product_category_form&category_id=" . $db->f("category_child_id"). "&category_parent_id=" . $db->f("category_parent_id");
      echo "\">";
      echo $db->f("category_name") . "</a></td>\n";
      echo "<td>&nbsp;&nbsp;" . $db->f("category_description");
      echo "</td>\n<td>".$product_count ." ". $PHPSHOP_LANG->_PHPSHOP_PRODUCTS_LBL."&nbsp;<a href=\"";
      echo $_SERVER['PHP_SELF'] . "?page=product.product_list&category_id=" . $db->f("category_child_id")."&option=com_phpshop";
      echo "\">[ ".$PHPSHOP_LANG->_PHPSHOP_SHOW." ]</a>\n</td>\n";
      //echo "<td>". $db->f("list_order")."</td>";
      echo "<td>";
      if ($db->f("category_publish")=='N') { 
          echo "<img src=\"". $mosConfig_live_site ."/administrator/images/publish_x.png\" border=\"0\" />";
      } 
      else { 
          echo "<img src=\"". $mosConfig_live_site ."/administrator/images/tick.png\" border=\"0\" />\n";
      } 
      echo "<td width=\"5%\"><div align=\"center\">\n";
      echo mShop_orderUpIcon( $db->row, $db->num_rows(), $ibg ) . "\n&nbsp;" . mShop_orderDownIcon( $db->row, $db->num_rows(), $ibg );
      echo "</div></td>\n";
      echo "<td width=\"5%\">";
      echo "<a class=\"toolbar\" href=\"".$_SERVER['PHP_SELF']."?option=com_phpshop&page=".$_REQUEST['page'] ."&func= productCategoryDelete&category_id=". $db->f("category_id") ."\"";
      echo " onclick=\"return confirm('". $PHPSHOP_LANG->_PHPSHOP_DELETE_MSG ."');\" onmouseout=\"MM_swapImgRestore();\"  onmouseover=\"MM_swapImage('Delete$ibg','','". IMAGEURL ."ps_image/delete_f2.gif',1);\">";
      echo "<img src=\"". IMAGEURL ."ps_image/delete.gif\" alt=\"Delete this record\" name=\"delete$ibg\" align=\"middle\" border=\"0\" /></a></td>\n";
      $this->traverse_tree_down($class, $db->f("category_child_id"), $level);
    }    
  }
  

  /**************************************************************************
  ** name: get_product_count()
  ** created by:
  ** description: Calculates and returns number of products in given category
  **
  ** parameters:
  ** returns:
  ***************************************************************************/  
  
  function product_count($category_id) {
    global $perm;
    $ps_vendor_id = $_SESSION["ps_vendor_id"];
    
    $db = new ps_DB;
    if( !isset($GLOBALS['category_info'][$category_id]['product_count'] )) {
      
      $count  = "SELECT count(#__pshop_product.product_id) as num_rows from #__pshop_product,#__pshop_product_category_xref, #__pshop_category WHERE ";
      $q  = "#__pshop_product.vendor_id = '$ps_vendor_id' ";
      $q .= "AND #__pshop_product_category_xref.category_id='$category_id' "; 
      $q .= "AND #__pshop_category.category_id=#__pshop_product_category_xref.category_id ";
      $q .= "AND #__pshop_product.product_id=#__pshop_product_category_xref.product_id ";
      //$q .= "AND #__pshop_product.product_parent_id='' ";
      if( !$perm->check( "admin,storeadmin") && CHECK_STOCK == "1" && PSHOP_SHOW_OUT_OF_STOCK_PRODUCTS != "1" )
        $q .= "AND product_in_stock > 0 ";
      $count .= $q;  
      $db->query($count);
      $db->next_record();
      $GLOBALS['category_info'][$category_id]['product_count'] = $db->f("num_rows");
    }
    return $GLOBALS['category_info'][$category_id]['product_count'];
  }
  
  /**************************************************************************
  ** name: traverse_tree_up()
  ** created by:
  ** description: It goes through the category table and establishes
  **              the category tree based on the parent-child relationships
  **              defnied in the category_xref table.
  **              This is VERY recursive...
  ** parameters:
  ** returns:
  ***************************************************************************/
  function traverse_tree_up($category_id, $level=0) {
    $ps_vendor_id = $_SESSION["ps_vendor_id"];
    $db = new ps_DB;
    
    $level++;
    $q = "SELECT #__pshop_category.category_name,category_child_id,category_parent_id FROM #__pshop_category, #__pshop_category_xref ";
    $q .= "WHERE #__pshop_category_xref.category_child_id=' ";
    $q .= "$category_id' AND ";
    $q .= "#__pshop_category.category_id=#__pshop_category_xref.category_parent_id ";
    $q .= "AND #__pshop_category.vendor_id = $ps_vendor_id ";
    $db->setQuery($q);   $db->query();
    while ($db->next_record()) {
      if ($level == 1) {
	echo "<option selected=\"selected\" value=\"" . $db->f("category_child_id");
      }
      else {
	echo "<option value=\"" . $db->f("category_child_id");
      }
      echo "\">" . $db->f("category_name") . "</option>";

      $this->traverse_tree_up($db->f("category_parent_id"), $level);
    }    
  }

  /***************************************************************************
  ** name: list_category()
  ** created by: pablo
  ** description: list all categories and has the category with the given
  **              product_id preselected.
  ** parameters:
  ** returns:
  ***************************************************************************/
  function list_category($product_id="",$category_id="",$name = "category_id") {
    $db = new ps_DB;
    global $PHPSHOP_LANG;


    echo "<select class=\"inputbox\" name=$name>\n";

    if ($product_id and !$category_id) {
      $q = "SELECT category_id from #__pshop_product_category_xref WHERE product_id='$product_id'";
      $db->setQuery($q);   $db->query();
      $db->next_record();
      if (!$db->f("category_id")) {
        echo "<option value=\"0\">".$PHPSHOP_LANG->_PHPSHOP_SELECT."</option>\n";
      }
      $this->list_tree($db->f("category_id"));
    } 
    elseif ($category_id) {
      echo "<option value=\"0\">".$PHPSHOP_LANG->_PHPSHOP_SELECT."</option>\n";
      $this->list_tree($category_id);
    } 
    else {
      echo "<option value=\"0\">".$PHPSHOP_LANG->_PHPSHOP_SELECT."</option>\n";
      $this->list_tree();
    }
    
    echo "</select>\n";
    
    return True;
  }
 

  /***************************************************************************
  ** name: list_parents()
  ** created by:
  ** description:
  ** parameters:
  ** returns:
  ***************************************************************************/
  function list_parents($category_id) {
    $db = new ps_DB;
    global $PHPSHOP_LANG;

    echo "<select class=\"inputbox\" name=$name>\n";
    echo "<option value=\"0\">".$PHPSHOP_LANG->_PHPSHOP_SELECT."</option>\n";
    $this->traverse_tree_up($category_id);
    echo "</select>\n";    
  }
  
  /**************************************************************************
  ** name: print_child_list()
  ** created by: soeren
  ** description: creates a bulleted of the childen of this category if they 
  **              exist
  ** parameters: category_id
  ** returns:
  ***************************************************************************/
  function print_child_list($category_id) {
    echo $this->get_child_list($category_id);
  }
  
  /**************************************************************************
  ** name: get_child_list()
  ** created by: pablo
  ** description: creates a bulleted of the childen of this category if they 
  **              exist
  ** parameters: category_id
  ** returns:
  ***************************************************************************/
  function get_child_list($category_id) {
    global $sess, $PHP_SELF, $modulename, $ps_product, $PHPSHOP_LANG;
    $ps_vendor_id = $_SESSION["ps_vendor_id"];
    $db = new ps_DB;
    
    $html = "";
    
    $q = "SELECT category_id, category_thumb_image, category_child_id,category_name FROM #__pshop_category,#__pshop_category_xref ";
    $q .= "WHERE #__pshop_category_xref.category_parent_id='$category_id' ";
    $q .= "AND #__pshop_category.category_id=#__pshop_category_xref.category_child_id ";
    $q .= "AND #__pshop_category.vendor_id='$ps_vendor_id' ";
    $q .= "AND #__pshop_category.category_publish='Y' ";
    $q .= "ORDER BY #__pshop_category.list_order, #__pshop_category.category_name ASC";
    $db->setQuery($q);   
    $db->query();
    
    if( $db->num_rows() > 0 ) {
      $iCol = 1;
      $categories_per_row = 4;
      $cellwidth = intval( 100 / $categories_per_row );
      $html .= $PHPSHOP_LANG->_PHPSHOP_MORE_CATEGORIES.'<br/>';
      $html .= '<table width="100%" cellspacing="0" cellpadding="0">';
      
      while($db->next_record()) {
        if ($iCol == 1) {
          $html.= "<tr>\n";
        }
        $html.= '<td align="center" width="'. $cellwidth .'%" ><br/>
            <a title="'. $db->f("category_name").'" href="'. $sess->url(URL."index.php?option=com_phpshop&amp;page=shop.browse&amp;category_id=".$db->f("category_id")) .'">'; 

        if ( $db->f("category_thumb_image") ) {
           $html.= $ps_product->image_tag( $db->f("category_thumb_image"), "alt=\"".$db->f("category_name")."\"", 0, "category");
           $html.= "<br /><br/>";
        }
        $html.= $db->f("category_name");
        $html.= ps_product_category::products_in_category( $db->f("category_id") );    
           
        $html.= "</a><br/>\n";
        $html .= "</td>\n";

        if ($iCol == $categories_per_row) {
          $html.= "</tr>\n";
          $iCol = 1;
        }
        else
          $iCol++;
	  }
      $html.= "</table>";
    }
      
    return $html;

  }

  /**************************************************************************
  ** name: print_subcategory()
  ** created by:
  ** description:
  ** parameters:
  ** returns:
  ***************************************************************************/
  function print_subcategory($category_id, $css_class = "") {
    echo $this->get_subcategory( $category_id, $css_class );
  }
  
  function get_subcategory( $category_id, $css_class = "" ) {
    global $sess;
    $ps_vendor_id = $_SESSION["ps_vendor_id"];
    
    if( $css_class != "" ) {
      $class= "class=\"$css_class\"";
    }
    else
      $class = "";
      
    $db = new ps_DB;

    $q = "SELECT category_id, category_child_id,category_name FROM #__pshop_category,#__pshop_category_xref ";
    $q .= "WHERE #__pshop_category_xref.category_parent_id='$category_id' ";
    $q .= "AND #__pshop_category.category_id=#__pshop_category_xref.category_child_id ";
    //$q .= "AND #__pshop_category.vendor_id='$ps_vendor_id' ";
    $q .= "AND #__pshop_category.category_publish='Y' ";
    $q .= "ORDER BY #__pshop_category.list_order, #__pshop_category.category_name ASC";
    $db->setQuery($q);   
    $db->query();
    $html = "";
    $nbsp = "&nbsp;&nbsp;&nbsp;"; 
    while($db->next_record()) {
        $html .= "<a style=\"display:block;\" class=\"sublevel\" title=\"".$db->f("category_name")."\" href=\"";
        $html .= $sess->url(URL . "index.php?page=shop.browse&root=$category_id&category_id=" .$db->f("category_child_id"));
        $html .= "\" $class>$nbsp".$db->f("category_name");
        $html .= ps_product_category::products_in_category( $db->f("category_child_id") );
        $html .= "</a>\n";
    }
    
    return $html;
  }

  /** products_in_category
  * Shows the Number of Products in that Special Category
  **/
  function products_in_category( $category_id ) {
    if( PSHOP_SHOW_PRODUCTS_IN_CATEGORY == '1' ) {
      $num = ps_product_category::product_count($category_id);
      if( empty($num) && ps_product_category::has_childs( $category_id )) {
          $db = new ps_DB;
          $q = "SELECT category_child_id FROM #__pshop_category_xref ";
          $q .= "WHERE category_parent_id='$category_id' ";
          $db->query($q);
          while( $db->next_record() ) {
            $num += ps_product_category::product_count($db->f("category_child_id"));
          }
      }
      
      return " ($num) ";
    }
    else
      return ( "" );

  }
  
  /**************************************************************************
  ** name: pathway_separator()
  ** created by: FTW Stroker
  ** description: tests for template/default pathway arrow separator
  ** parameters:
  ** returns: image path for breadcrumb pathway separator
  ***************************************************************************/
	function pathway_separator() {
	  global $mainframe, $mosConfig_absolute_path, $mosConfig_live_site;
	  $imgPath =  'templates/' . $mainframe->getTemplate() . '/images/arrow.png';
	  if (file_exists( "$mosConfig_absolute_path/$imgPath" )){
		  $img = '<img src="' . $mosConfig_live_site . '/' . $imgPath . '" height="9" width="9" border="0" alt="arrow" />';
	  } else {
		  $imgPath = '/images/M_images/arrow.png';
		  if (file_exists( $mosConfig_absolute_path . $imgPath )){
			  $img = '<img src="' . $mosConfig_live_site . '/images/M_images/arrow.png" height="9" width="9" alt="arrow" />';
		  } else {
			  $img = '&gt;';
		  }
	  }
	  return $img;
	}
    
  /**************************************************************************
  ** name: list_all()
  ** created by:
  ** description:
  ** parameters:
  ** returns:
  ***************************************************************************/
  function list_all($name, $category_id, $selected_categories=Array(), $size=1, $toplevel=true, $multiple=false) {

    $db = new ps_DB;

    $q  = "SELECT category_parent_id FROM #__pshop_category_xref ";
    if( $category_id )
      $q .= "WHERE category_child_id='$category_id'";
    $db->setQuery($q);   $db->query();
    $db->next_record();
    $category_id=$db->f("category_parent_id");
    $multiple = $multiple ? "multiple=\"multiple\"" : "";
    
    echo "<select class=\"inputbox\" size=\"$size\" $multiple name=\"$name\">\n";
    if( $toplevel ) {
      echo "<option value=\"0\">Default-Top Level</option>\n";
    }
    $this->list_tree($category_id, '0', '0', $selected_categories);
    echo "</select>\n";
  }
  
  /**************************************************************************
  ** name: list_level()
  ** created by: soeren
  ** description: lists all categories from the defined level
  ** parameters:
  ** returns:
  ***************************************************************************/
  function list_level( $category_parent_id, $category_id='0', $list_order=0 ) {

    $db = new ps_DB;
    if (!$category_id) {
      return _CMN_NEW_ITEM_LAST;
    }
    else {
        
      $q  = "SELECT list_order,category_id,category_name,category_child_id FROM #__pshop_category, #__pshop_category_xref ";
      $q .= "WHERE category_parent_id='$category_parent_id' ";
      $q .= "AND category_child_id=category_id ";
      $q .= "ORDER BY list_order ASC";
      $db->query( $q );
      
      $html = "<select class=\"inputbox\" name=\"list_order\">\n";
      while( $db->next_record() ) {
        if( $list_order == $db->f("list_order") )
          $selected = "selected=\"selected\"";
        else
          $selected = "";
        $html .= "<option value=\"".$db->f("list_order")."\" $selected>"
              .$db->f("list_order").". ".$db->f("category_name")
              ."</option>\n";
      }
      $html .= "</select>\n";
      return $html;
    }
  }
  
  /**************************************************************************
  ** name: list_tree()
  ** created by:
  ** description: Creates OPTIONS fields for a select
  ** parameters:
  ** returns:
  ***************************************************************************/
  function list_tree($category_id="", $cid='0', $level='0', $selected_categories=Array() ) {
  
    $ps_vendor_id = $_SESSION["ps_vendor_id"];
    $db = new ps_DB;
    
    $level++;

    $q = "SELECT category_id, category_child_id,category_name FROM #__pshop_category,#__pshop_category_xref ";
    $q .= "WHERE #__pshop_category_xref.category_parent_id='$cid' ";
    $q .= "AND #__pshop_category.category_id=#__pshop_category_xref.category_child_id ";
    $q .= "AND #__pshop_category.vendor_id ='$ps_vendor_id' ";
    $q .= "ORDER BY #__pshop_category.list_order, #__pshop_category.category_name ASC";
    $db->setQuery($q);   $db->query();

    while ($db->next_record()) {
      $child_id = $db->f("category_child_id");
      if ($child_id != $cid) {
        $selected = ($child_id == $category_id) ? "selected=\"selected\"" : "";
        if( $selected == "" && @$selected_categories[$child_id] == "1") {
          $selected = "selected=\"selected\"";
        }
        echo "<option $selected value=\"$child_id\">\n";
      }
      for ($i=0;$i<$level;$i++) {
        echo "&#151";
      }
      echo "|$level|";
      echo "&nbsp;" . $db->f("category_name") . "</option>";
      $this->list_tree($category_id, $child_id, $level, $selected_categories);
    }    
  }
 
  /**************************************************************************
  ** name: get_name()
  ** created by: jep
  ** description: Returns the category name.
  ** parameters:
  ** returns:
  ***************************************************************************/
  function get_name($product_id) {
    $db = new ps_DB;

    $q = "SELECT #__pshop_category.category_id, category_name FROM #__pshop_category,#__pshop_product_category_xref ";
    $q .= "WHERE product_id='$product_id' ";
    $q .= "AND #__pshop_category.category_id = #__pshop_product_category_xref.category_id ";
    $db->setQuery($q);   $db->query();

    $db->next_record();

    return $db->f("category_name");
  }


  /**************************************************************************
  ** name: get_description()
  ** created by: soern
  ** description: Returns the category description.
  ** parameters:
  ** returns:
  ***************************************************************************/
  function get_description($category_id) {
    $db = new ps_DB;

    $q = "SELECT category_id, category_description FROM #__pshop_category ";
    $q .= "WHERE category_id='$category_id' ";
    $db->setQuery($q);   $db->query();

    $db->next_record();

    return $db->f("category_description");
  }
  
  /**************************************************************************
  ** name: has_childs()
  ** created by: soern
  ** description: Returns true if the category has childs
  ** parameters: category_id
  ** returns: true if the category has childs; false, if not
  ***************************************************************************/
  function has_childs($category_id) {
      $db = new ps_DB;
      if( empty( $GLOBALS['category_info'][$category_id]['has_childs'] )) {
        $q = "SELECT category_child_id FROM #__pshop_category_xref ";
        $q .= "WHERE category_parent_id='$category_id' ";
        $db->setQuery($q);   $db->query();
    
        if ($db->num_rows() > 0)
          $GLOBALS['category_info'][$category_id]['has_childs'] = true;
        else
          $GLOBALS['category_info'][$category_id]['has_childs'] = false;
      }
      return $GLOBALS['category_info'][$category_id]['has_childs'];
  }
  
  function navigation_list($category_id) {
    echo $this->get_navigation_list($category_id);
  }
  /* 
  Creates navigation list of categories
  */
  function get_navigation_list($category_id) {
    global $sess, $PHP_SELF, $mosConfig_live_site;
    $db = new ps_DB;
    $dbt = new ps_DB;
    static $i=0;
    static $html = "";
    $q = "SELECT category_id, category_name,category_parent_id FROM #__pshop_category, #__pshop_category_xref WHERE ";
    $q .= "#__pshop_category_xref.category_child_id='$category_id' ";
    $q .= "AND #__pshop_category.category_id='$category_id'";
    $db->setQuery($q);   $db->query();
    $db->next_record();
    if ($db->f("category_parent_id")) {
      $link = "<a href=\"";
      $link .= $sess->url($PHP_SELF . "?page=shop.browse&category_id=$category_id");
      $link .= "\">";
      $link .= $db->f("category_name");
      $link .= "</a>";
      $category_list[$i++] = " ".$this->pathway_separator()." ". $link;
      $this->get_navigation_list($db->f("category_parent_id"));
    }
    else {
      $link = "<a href=\"";
      $link .= $sess->url($PHP_SELF . "?page=shop.browse&category_id=$category_id");
      $link .= "\">";
      $link .= $db->f("category_name");
      $link .= "</a>";
      $category_list[$i++] = $link;
      
    }
    while (list($key, $value) = each($category_list)) {
        $html .= $value;
    }

    return $html; 
  }
  /**************************************************************************
  ** name: reorder()
  ** created by: soern
  ** description: Changes the category List Order
  ** parameters: category_id
  ** returns: true if the category has childs; false, if not
  ***************************************************************************/
  function reorder( &$d ) {
      $cb = mosGetParam( $_POST, 'cb', array(0) );
      
      $db = new ps_DB;
      switch( $d["task"] ) {
        case "orderup":
          $q = "SELECT list_order,category_parent_id FROM #__pshop_category,#__pshop_category_xref ";
          $q .= "WHERE category_id='".$cb[0]."' ";
          $q .= "AND category_child_id='".$cb[0]."' ";
          $db->query($q);
          $db->next_record();
          $currentpos = $db->f("list_order");
          $category_parent_id = $db->f("category_parent_id");
          
          // Get the (former) predecessor and update it
          $q = "SELECT list_order,#__pshop_category.category_id FROM #__pshop_category, #__pshop_category_xref ";
          $q .= "WHERE #__pshop_category_xref.category_parent_id='$category_parent_id' ";
          $q .= "AND #__pshop_category_xref.category_child_id=#__pshop_category.category_id ";
          $q .= "AND list_order='". intval($currentpos - 1) . "'";
          $db->query($q);
          $db->next_record();
          $pred = $db->f("category_id");
          
          // Update the category and decrease the list_order
          $q = "UPDATE #__pshop_category ";
          $q .= "SET list_order=list_order-1 ";
          $q .= "WHERE category_id='".$cb[0]."'";
          $db->query($q);

          $q = "UPDATE #__pshop_category ";
          $q .= "SET list_order=list_order+1 ";
          $q .= "WHERE category_id='$pred'";
          $db->query($q);
          
          break;
          
        case "orderdown":
          $q = "SELECT list_order,category_parent_id FROM #__pshop_category,#__pshop_category_xref ";
          $q .= "WHERE category_id='".$cb[0]."' ";
          $q .= "AND category_child_id='".$cb[0]."' ";
          $db->query($q);
          $db->next_record();
          $currentpos = $db->f("list_order");
          $category_parent_id = $db->f("category_parent_id");
          
          // Get the (former) successor and update it
          $q = "SELECT list_order,#__pshop_category.category_id FROM #__pshop_category, #__pshop_category_xref ";
          $q .= "WHERE #__pshop_category_xref.category_parent_id='$category_parent_id' ";
          $q .= "AND #__pshop_category_xref.category_child_id=#__pshop_category.category_id ";
          $q .= "AND list_order='". intval($currentpos + 1) . "'";
          $db->query($q);
          $db->next_record();
          $succ = $db->f("category_id");
          
          $q = "UPDATE #__pshop_category ";
          $q .= "SET list_order=list_order+1 ";
          $q .= "WHERE category_id='".$cb[0]."' ";
          $db->query($q);
          
          $q = "UPDATE #__pshop_category ";
          $q .= "SET list_order=list_order-1 ";
          $q .= "WHERE category_id='$succ'";
          $db->query($q);
          
          break;
      }

  }

}
?>
