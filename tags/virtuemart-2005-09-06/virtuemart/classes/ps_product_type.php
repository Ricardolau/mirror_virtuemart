<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
/** Changed Product Type - Begin*/
/*
* @version $Id: ps_product_type.php,v 1.3 2005/07/01 09:48:58 dvorakz Exp $
* @package mambo-phpShop
* @subpackage classes

* Conversion to Mambo and the rest:
* 	@copyright (C) 2005 Zdenek Dvorak
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
* ps_product_type
*************************************************************************/
class ps_product_type {
  var $classname = "ps_product_type";
  
  /**************************************************************************
  ** name: validate_add()
  ** created by:
  ** description:
  ** parameters:
  ** returns:
  ***************************************************************************/
  function validate_add(&$d) {
    
    if (!$d["product_type_name"]) {
      $d["error"] = "ERROR:  You must enter a name for the Product Type.";
      return False;
    }
    else {
      return True;    
    }
  }
    
  /**************************************************************************
  ** name: validate_delete()
  ** created by: Zdenek Dvorak
  ** description:
  ** parameters:
  ** returns:
  ***************************************************************************/
  function validate_delete(&$d) {

    $db = new ps_DB;

    if (!$d["product_type_id"]) {
      $d["error"] = "ERROR:  Please select a Product Type to delete.";
      return False;
    }

    // Check for products assigned to this Product Type
    $q  = "SELECT * from #__pshop_product_product_type_xref where product_type_id='";
    $q .= $d["product_type_id"] . "'";
    $db->setQuery($q);   $db->query();
    if ($db->next_record()) {
      $d["error"]  = "ERROR: This Product Type has product(s). ";
      $d["error"] .= "Please delete the product(s) from Prodyct Type first.";
      return False;
    }
    return True;
  }

  /**************************************************************************
  ** name: validate_update()
  ** created by:
  ** description:
  ** parameters:
  ** returns:
  ***************************************************************************/
  function validate_update(&$d) {
    
    if (!$d["product_type_name"]) {
      $d["error"] = "ERROR:  You must enter a name for the Product Type.";
      return False;	
    }
    else {
      return True;
    }
  }
  
  
  /**************************************************************************
  ** name: add()
  ** created by: Zdenek Dvorak
  ** description: creates a new Product Type record
  ** parameters:
  ** returns:
  ***************************************************************************/
  function add(&$d) {
    $db = new ps_DB;
	    
    if ($this->validate_add($d)) {
      foreach ($d as $key => $value) {
          if (!is_array($value))
            $d[$key] = addslashes($value);
      }
      // find product_type_id
      $q  = "SELECT MAX(product_type_id) AS product_type_id FROM #__pshop_product_type";
      $db->query( $q );
      $db->next_record();
      $product_type_id = intval($db->f("product_type_id")) + 1;
      
      // Let's find out the last Product Type
      $q = "SELECT MAX(product_type_list_order) AS list_order FROM #__pshop_product_type";
      $db->query( $q );
      $db->next_record();      
      $list_order = intval($db->f("list_order"))+1;
      
      $q = "INSERT into #__pshop_product_type (product_type_id, product_type_name, product_type_description, ";
      $q .= "product_type_publish, product_type_browsepage, product_type_flypage, product_type_list_order) ";
      $q .= "VALUES ('";
      $q .= $product_type_id . "','";
      $q .= $d["product_type_name"] . "','";
      $q .= $d["product_type_description"] . "','";
      if ($d["product_type_publish"] != "Y") {
        $d["product_type_publish"] = "N";
      }
      $q .= $d["product_type_publish"] . "','";
      $q .= $d["product_type_browsepage"] . "','";
      $q .= $d["product_type_flypage"] . "','";
      $q .= $list_order . "')";
      $db->setQuery($q);
      $db->query();

      // Make new table product_type_<id>
      $q = "CREATE TABLE `#__pshop_product_type_";
      $q .= $product_type_id . "` (";
      $q .= "`product_id` int(11) NOT NULL,";
      $q .= "PRIMARY KEY (`product_id`)";
      $q .= ") TYPE=MyISAM;";
      $db->setQuery($q);
      $db->query();
  
      return $product_type_id;
    }
    else {
      return False;
    }

  }

  /**************************************************************************
  ** name: update()
  ** created by: Zdenek Dvorak
  ** description: updates Product Type information
  ** parameters:
  ** returns:
  ***************************************************************************/
  function update(&$d) {
    $db = new ps_DB;
	
    foreach ($d as $key => $value) {
      if (!is_array($value))
        $d[$key] = addslashes($value);
    }
    if ($this->validate_update($d)) {
      $q = "update #__pshop_product_type SET ";
      $q .= "product_type_id='" . $d["product_type_id"];
      $q .= "',product_type_name='" . $d["product_type_name"];
      $q .= "',product_type_description='" . $d["product_type_description"];
      if (!isset($d["product_type_publish"])) {
        $d["product_type_publish"] = "N";
      }
      $q .= "',product_type_publish='" . $d["product_type_publish"];
      $q .= "',product_type_browsepage='" . $d["product_type_browsepage"];
      $q .= "',product_type_flypage='" . $d["product_type_flypage"];
      $q .= "',product_type_list_order='" . $d["list_order"]."'";
      $q .= " WHERE product_type_id='" . $d["product_type_id"] . "' ";
      $db->setQuery($q);
      $db->query();

      /* Re-Order the Product Type table IF the list_order has been changed */
      if( intval($d['list_order']) != intval($d['currentpos'])) {
        $dbu = new ps_DB;
        
        /* Moved UP in the list order */
        if( intval($d['list_order']) < intval($d['currentpos']) ) {
        
          $q  = "SELECT product_type_id FROM #__pshop_product_type WHERE ";
          $q .= "product_type_id <> '" . $d["product_type_id"] . "' ";
          $q .= "AND product_type_list_order >= '" . intval($d["list_order"]) . "'";
          $db->query( $q );
          
          while( $db->next_record() ) {
            $dbu->query("UPDATE #__pshop_product_type SET product_type_list_order=product_type_list_order+1 WHERE product_type_id='".$db->f("product_type_id")."'");
          }
        }
        /* Moved DOWN in the list order */
        else {
        
          $q = "SELECT product_type_id FROM #__pshop_product_type WHERE ";
          $q .= "product_type_id <> '" . $d["product_type_id"] . "' ";
          $q .= "AND product_type_list_order > '" . intval($d["currentpos"]) . "'";
          $q .= "AND product_type_list_order <= '" . intval($d["list_order"]) . "'";
          $db->query( $q );
          
          while( $db->next_record() ) {
            $dbu->query("UPDATE #__pshop_product_type SET product_type_list_order=product_type_list_order-1 WHERE product_type_id='".$db->f("product_type_id")."'");
          }
        
        }
      } /* END Re-Ordering */
      
      return True;
    }
    else {
      return False;	
    }
  }

  /**************************************************************************
  ** name: delete()
  ** created by: Zdenek Dvorak
  ** description: Should delete a Product Type and drop table product_type_<id>
  ** parameters: 
  ** returns:
  ***************************************************************************/
  function delete(&$d) {
    $db = new ps_DB;
    
    if (!$this->validate_delete($d)) {
      return False;
    }

    $q = "DELETE FROM #__pshop_product_type WHERE product_type_id='" . $d["product_type_id"] . "'";
    $db->setQuery($q);   $db->query();

    $q  = "DELETE FROM #__pshop_product_product_type_xref ";
    $q .= "WHERE product_type_id='" . $d["product_type_id"] . "'";
    $db->setQuery($q);   $db->query();

    $q  = "DROP TABLE IF EXISTS `#__pshop_product_type_".$d["product_type_id"]."`";
    $db->setQuery($q);   $db->query();
    return True;
  }


  /**************************************************************************
  ** name: product_count()
  ** created by:
  ** description: Calculates and returns number of products in 
  **              a Product Type
  ** parameters:
  ** returns:
  ***************************************************************************/  
  
  function product_count($product_type_id) {
    $ps_vendor_id = $_SESSION["ps_vendor_id"];
    
    $db = new ps_DB;
    
    $count  = "SELECT count(*) as num_rows from #__pshop_product,#__pshop_product_product_type_xref WHERE ";
    $q  = "#__pshop_product.vendor_id = '$ps_vendor_id' ";
    $q .= "AND #__pshop_product_product_type_xref.product_type_id='$product_type_id' "; 
    $q .= "AND #__pshop_product.product_id=#__pshop_product_product_type_xref.product_id ";
    $q .= "AND #__pshop_product.product_parent_id='' ";
    //$q .= "ORDER BY product_publish DESC,product_name ";
    $count .= $q;  
    $db->setQuery($count); $db->query();
    $db->next_record();
    return $db->f("num_rows");
  }
  
  /**************************************************************************
  ** name: parameter_count()
  ** created by: Zdenek Dvorak
  ** description: Calculates and returns number of parameters in given 
  **              Product Type
  ** parameters:
  ** returns:
  ***************************************************************************/  
  
  function parameter_count($product_type_id) {
    $db = new ps_DB;

    $count  = "SELECT count(*) as num_rows from #__pshop_product_type_parameter WHERE ";
    $q = "product_type_id='$product_type_id' ";
    $count .= $q;  
    $db->setQuery($count); $db->query();
    $db->next_record();
    return $db->f("num_rows");
  }
 
  /**************************************************************************
  ** name: get_name()
  ** created by: Zdenek Dvorak
  ** description: Returns the Product Type name.
  ** parameters:
  ** returns:
  ***************************************************************************/
  function get_name($product_type_id) {
    $db = new ps_DB;

    $q = "SELECT product_type_name FROM #__pshop_product_type ";
    $q .= "WHERE product_type_id='$product_type_id' ";
    $db->setQuery($q);   $db->query();

    $db->next_record();

    return $db->f("product_type_name");
  }


  /**************************************************************************
  ** name: get_description()
  ** created by: soern
  ** description: Returns the category description.
  ** parameters:
  ** returns:
  ***************************************************************************/
  function get_description($product_type_id) {
    $db = new ps_DB;

    $q = "SELECT product_type_description FROM #__pshop_product_type ";
    $q .= "WHERE product_type_id='$product_type_id' ";
    $db->setQuery($q);   $db->query();

    $db->next_record();

    return $db->f("product_type_description");
  }
  
  /**************************************************************************
  ** name: list_order()
  ** created by: soeren
  ** description: lists all Product Type
  ** parameters:
  ** returns:
  ***************************************************************************/
  function list_order( $product_type_id='0', $list_order=0 ) {

    $db = new ps_DB;
    if (!$product_type_id) {
      return _CMN_NEW_ITEM_LAST;
    }
    else {
        
      $q  = "SELECT product_type_list_order,product_type_name FROM #__pshop_product_type ";
      $q .= "ORDER BY product_type_list_order ASC";
      $db->query( $q );
      
      $html = "<select class=\"inputbox\" name=\"list_order\">\n";
      while( $db->next_record() ) {
        if( $list_order == $db->f("product_type_list_order") )
          $selected = "selected=\"selected\"";
        else
          $selected = "";
        $html .= "<option value=\"".$db->f("product_type_list_order")."\" $selected>"
              .$db->f("product_type_list_order").". ".$db->f("product_type_name")
              ."</option>\n";
      }
      $html .= "</select>\n";
      return $html;
    }
  }
  
  /**************************************************************************
  ** name: reorder()
  ** created by: Zdenek Dvorak
  ** description: Changes the Product Type List Order
  ** parameters: product_type_id
  ** returns: true if the category has childs; false, if not !!!!!!!!!!!!!!!!!!!
  ***************************************************************************/
  function reorder( &$d ) {
      $cb = mosGetParam( $_POST, 'cb', array(0) );
      
      $db = new ps_DB;
      switch( $d["task"] ) {
        case "orderup":
          $q = "SELECT product_type_list_order FROM #__pshop_product_type ";
          $q .= "WHERE product_type_id='".$cb[0]."' ";
          $db->query($q);
          $db->next_record();
          $currentpos = $db->f("product_type_list_order");
          //$category_parent_id = $db->f("category_parent_id");
          
          // Get the (former) predecessor and update it
          $q  = "SELECT product_type_list_order,product_type_id FROM #__pshop_product_type WHERE ";
          $q .= "product_type_list_order<'". $currentpos . "' ";
	  $q .= "ORDER BY product_type_list_order DESC";
          $db->query($q);
          $db->next_record();
          $pred = $db->f("product_type_id");
	  $pred_pos = $db->f("product_type_list_order");
          
          // Update the Product Type and decrease the list_order
          $q = "UPDATE #__pshop_product_type ";
          $q .= "SET product_type_list_order='".$pred_pos."' ";
          $q .= "WHERE product_type_id='".$cb[0]."'";
          $db->query($q);

          $q = "UPDATE #__pshop_product_type ";
          $q .= "SET product_type_list_order='".intval($pred_pos + 1)."' ";
          $q .= "WHERE product_type_id='$pred'";
          $db->query($q);
          
          break;
          
        case "orderdown":
          $q = "SELECT product_type_list_order FROM #__pshop_product_type ";
          $q .= "WHERE product_type_id='".$cb[0]."' ";
          $db->query($q);
          $db->next_record();
          $currentpos = $db->f("product_type_list_order");
          
          // Get the (former) successor and update it
          $q  = "SELECT product_type_list_order,product_type_id FROM #__pshop_product_type WHERE ";
          $q .= "product_type_list_order>'". $currentpos . "' ";
	  $q .= "ORDER BY product_type_list_order";
          $db->query($q);
          $db->next_record();
          $succ = $db->f("product_type_id");
	  $succ_pos = $db->f("product_type_list_order");
          
          $q = "UPDATE #__pshop_product_type ";
          $q .= "SET product_type_list_order='".$succ_pos."' ";
          $q .= "WHERE product_type_id='".$cb[0]."' ";
          $db->query($q);
          
          $q = "UPDATE #__pshop_product_type ";
          $q .= "SET product_type_list_order='".intval($succ_pos - 1)."' ";
          $q .= "WHERE product_type_id='$succ'";
          $db->query($q);
          
          break;
      }

  }

  /**************************************************************************
  ** name: get_parameter_form()
  ** created by: Zdenek Dvorak
  ** description: Returns the parameter list for form (hiden items)
  ** parameters: product_type_id
  ** returns: HTML
  ***************************************************************************/
  function get_parameter_form($product_type_id='0') {
	$db = new ps_DB;
	$q  = "SELECT * FROM #__pshop_product_type_parameter ";
	$q .= "WHERE product_type_id='$product_type_id'";
	$db->query($q);
	
	$html = "";
	while ($db->next_record()) {
		if ($db->f("parameter_type")!="B") { // not Break line
			$item_name = "product_type_$product_type_id"."_".$db->f("parameter_name");
			if ($db->f("parameter_multiselect")=="Y" && $db->f("parameter_values")) { // Multiple section List of values
				$get_item_value = mosgetparam($_REQUEST, $item_name, array());
				foreach($get_item_value as $value) {
					$html .= "<input type=\"hidden\" id=\"$value\" name=\"".$item_name."[]\"  value=\"".$value."\" />\n";
				}
				$html .= "<input type=\"hidden\" name=\"".$item_name."_comp\"  value=\"";
				$html .= mosgetparam($_REQUEST, $item_name."_comp", "")."\" />\n";
			}
			else {
				$html .= "<input type=\"hidden\" name=\"".$item_name."\"  value=\"";
				$html .= mosgetparam($_REQUEST, $item_name, "");
				$html .= "\" />\n";
				// comparison 
				$html .= "<input type=\"hidden\" name=\"".$item_name."_comp\"  value=\"";
				$html .= mosgetparam($_REQUEST, $item_name."_comp", "");
				$html .= "\" />\n";
			}
		}
	}
	// item for price search
	$html .= "<input type=\"hidden\" name=\"price\" value=\"".mosgetparam($_REQUEST,"price", "")."\" />\n";
	$html .= "<input type=\"hidden\" name=\"price_comp\" value=\"".mosgetparam($_REQUEST,"price_comp", "")."\" />\n";

	return $html;
  }
  
  /**************************************************************************
  ** name: get_parameter_order_list()
  ** created by: Zdenek Dvorak
  ** description: Returns html code for show parameters in select ORDER BY
  ** parameters: $product_type_id, $orderby -text of selected item
  ** returns: 
  ***************************************************************************/
  function get_parameter_order_list($product_type_id,$orderby="") {
	$db = new ps_DB;
	$q  = "SELECT * FROM #__pshop_product_type_parameter ";
	$q .= "WHERE product_type_id=$product_type_id ";
	$q .= "AND parameter_type<>'B' "; // NO Break Line
	$q .= "ORDER BY parameter_list_order";
	$db->query($q);
	while ($db->next_record()) {
		$value = "pshop_product_type_".$product_type_id.".".$db->f("parameter_name");
		echo "<option value=\"$value\" ";
		if ($orderby == $value) echo "selected ";
		echo ">".$db->f("parameter_label")."</option>\n";
	}
  }
  
  /**************************************************************************
  ** name: product_in_product_type()
  ** created by: Zdenek Dvorak
  ** description: Returns true if the product is in a Product Type
  ** parameters: product_id
  ** returns: 
  ***************************************************************************/
  function product_in_product_type($product_id) {  
	global $database;
	$db = new ps_DB;
	$q = "SELECT * FROM #__pshop_product_product_type_xref WHERE product_id='$product_id'";
	$db->setQuery( $q );	$db->query();
	return $db->num_rows() > 0;
  }
  
  /**************************************************************************
  ** name: list_product_type()
  ** created by: Zdenek Dvorak
  ** description: Returns html code for show parameters
  ** parameters: product_id
  ** returns: 
  ***************************************************************************/
  function list_product_type($product_id) {
	global $PHPSHOP_LANG, $mosConfig_live_site;

	if (!$this->product_in_product_type($product_id))
		return "";
		
	$dbag = new ps_DB;
	$dba = new ps_DB;
	$dbp = new ps_DB;
	$html = "";

	$q  = "SELECT * FROM #__pshop_product_product_type_xref ";
	$q .= "LEFT JOIN #__pshop_product_type USING (product_type_id) ";
	$q .= "WHERE product_id='$product_id' AND product_type_publish='Y' ";
	$q .= "ORDER BY product_type_list_order";
	$dbag->query( $q );
	$q  = "SELECT * FROM #__pshop_product_type_parameter ";
	$q .= "WHERE product_type_id=";
	while ($dbag->next_record()) { // Show all Product Type
		if ($dbag->f("product_type_flypage")) {
			$flypage_file = PAGEPATH."templates/".$dbag->f("product_type_flypage").".php";
			if (file_exists($flypage_file)) {
				$html .= include($flypage_file);
				continue;
			}
		}
		$html .= "<BR>\n<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\n";
		$html .= "<tr><td colspan=\"2\"><strong>".$PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY. ": ".$dbag->f("product_type_name")."</strong></td></tr>\n";
		// SELECT parameter value of product
		$q2  = "SELECT * FROM #__pshop_product_type_".$dbag->f("product_type_id");
		$q2 .= " WHERE product_id='$product_id'";
		$dbp->query($q2);
		// SELECT parameter of Product Type
		$dba->query($q.$dbag->f("product_type_id")." ORDER BY parameter_list_order");
		$i=0;
		while ($dba->next_record()) {
			if ($i++ % 2)
				$bgcolor=SEARCH_COLOR_1;
			else
				$bgcolor=SEARCH_COLOR_2;
			$html .= "<tr bgcolor=\"$bgcolor\" height=\"18\">\n";
			$html .= "<td width=\"30%\">".$dba->f("parameter_label");
			$parameter_description = $dba->f("parameter_description");
			if (!empty($parameter_description)) {
				$html .= "&nbsp;";
				$html .= mm_ToolTip($parameter_description, $PHPSHOP_LANG->_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION);
			}
			$html .= "</td>\n<td>";
			$html .= $dbp->f($dba->f("parameter_name"))." ".$dba->f("parameter_unit")."</td></tr>\n";
		}
		$html .= "</table>\n";
	}
	return $html;
  }
}
/** Changed Product Type - End*/
?>
