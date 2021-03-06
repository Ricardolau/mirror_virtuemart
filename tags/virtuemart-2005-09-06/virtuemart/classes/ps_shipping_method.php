<?php 
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: ps_shipping_method.php,v 1.6 2005/05/31 20:42:34 soeren_nb Exp $
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

class ps_shipping_method {

  var $classname = "ps_shipping_method";
  
  /**************************************************************************
   * name: save()
   * created by: soeren
   * description: 
   * parameters:
   * returns:
   **************************************************************************/
  function save(&$d) {
  
    $ps_vendor_id = $_SESSION["ps_vendor_id"];
    $db = new ps_DB;
    
    include( CLASSPATH."shipping/".$d["shipping_class"].".php" );
    eval( "\$_SHIPPING = new ".$d["shipping_class"]."();");

    
    $_SHIPPING->write_configuration( $d );

    return True;
    
  }



  /**************************************************************************
  ** name: method_list()
  ** created by: soeren
  ** description: list all available shipping methods
  ** parameters:
  ** returns:
  ***************************************************************************/
  function method_list( $payment_method_id="" ) {
    global $mosConfig_absolute_path;
    
    $ps_vendor_id = $_SESSION["ps_vendor_id"];
    $db = new ps_DB;
 
    $row = Array();
    $files = mosReadDirectory( CLASSPATH.'shipping/', '.ini$' );
	if( $files ) {
      require_once( CLASSPATH. 'ps_ini.php' );
      $ShippingModule =& new mShop_ini();
      $i = 0;
      foreach( $files as $file ) {
         $i++;
         $ShippingModule->load( CLASSPATH.'shipping/'.$file );
      }
      return( $ShippingModule->_elements  );
      
    }
    else
      return false;
   
  }
  
  function get_weight( $pid ) {
    global $vendor_country_2_code;
    if( empty($GLOBALS['product_info'][$pid]['weight'] )) {
      if( $vendor_country_2_code=="US" 
          || $vendor_country_2_code=="PR" 
          || $vendor_country_2_code=="DO" 
        ) {
        defined( 'WEIGHT_UOM' ) or define('WEIGHT_UOM', "LB" );
        $GLOBALS['product_info'][$pid]['weight'] = ps_shipping_method::get_weight_LB( $pid );
        return $GLOBALS['product_info'][$pid]['weight'];
      }
      
      else {
        defined( 'WEIGHT_UOM' ) or define('WEIGHT_UOM', "KG" );
        $GLOBALS['product_info'][$pid]['weight'] = ps_shipping_method::get_weight_KG( $pid );
        return $GLOBALS['product_info'][$pid]['weight'];
      }
    }
    else
      return $GLOBALS['product_info'][$pid]['weight'];
  }
  
  /**************************************************************************
  ** name: get_weight_OZ()
  ** created by: Matt Oberpriller
  ** description: Calculate product weight in ounces
  ** parameters: product_id
  ** returns: weight in ounces
  ***************************************************************************/  
  function get_weight_OZ($pid) {
    global $vars;
    $ps_vendor_id = $_SESSION["ps_vendor_id"];
    $db = new ps_DB;

    $q  = "SELECT product_sku,product_parent_id,product_weight,product_weight_uom FROM #__pshop_product ";
    $q .= "WHERE product_id='$pid' ";
    
    $db->query($q);
    $db->next_record();

    if ($db->f("product_weight") == 0 && $db->f("product_parent_id")) {
       $q = "SELECT * from #__pshop_product WHERE product_id='".$db->f("product_parent_id")."'";
       $db->query($q);
       $db->next_record();       
    }

    if ($db->f("product_weight") > 0) {
      if (eregi("LB",$db->f("product_weight_uom")) || eregi("PO",$db->f("product_weight_uom")))
        $weight = $db->f("product_weight") * 16;
      elseif (eregi("KG",$db->f("product_weight_uom")) || eregi("KILO",$db->f("product_weight_uom")))
        $weight = $db->f("product_weight") * 35.27396194958041;
      elseif (eregi("G",$db->f("product_weight_uom")))
        $weight = $db->f("product_weight") * 0.035273961949580414;
      elseif (eregi("OZ",$db->f("product_weight_uom")) || eregi("OU",$db->f("product_weight_uom")))
        $weight = $db->f("product_weight");
      elseif( DEBUG == '1' ) {
        $vars["error"] = "Unknown weight UOM in product " . $db->f("product_sku");
      }
    } elseif( DEBUG == '1' ) {
      $vars["error"] = "Weight not specified for product " . $db->f("product_sku");
    }

    if (!empty($weight))
     return($weight);
    else
     return 0;
  }
  
  /**************************************************************************
  ** name: get_weight_KG()
  ** created by: Matt Oberpriller
  ** modified by: Soeren
  ** description: Calculate product weight in Kilograms
  ** parameters: product_id
  ** returns: weight in KG
  ***************************************************************************/  
  function get_weight_KG( $pid ) {
    global $vars;
    $ps_vendor_id = $_SESSION["ps_vendor_id"];
    $db = new ps_DB;

    $q  = "SELECT product_sku,product_parent_id,product_weight,product_weight_uom FROM #__pshop_product ";
    $q .= "WHERE product_id='$pid' ";
    
    $db->query($q);
    $db->next_record();

    if ($db->f("product_weight") == 0 && $db->f("product_parent_id")) {
       $q = "SELECT * from #__pshop_product WHERE product_id='".$db->f("product_parent_id")."'";
       $db->query($q);
       $db->next_record();       
    }

    if ($db->f("product_weight") > 0) {
      if (eregi("LB",$db->f("product_weight_uom")) || eregi("PO",$db->f("product_weight_uom")))
        $weight = $db->f("product_weight") * 0.4536;
      elseif (eregi("KG",$db->f("product_weight_uom")) || eregi("KILO",$db->f("product_weight_uom")))
        $weight = $db->f("product_weight");
      elseif (eregi("G",$db->f("product_weight_uom")))
        $weight = $db->f("product_weight") * 0.001;
      elseif (eregi("OZ",$db->f("product_weight_uom")) || eregi("OU",$db->f("product_weight_uom")))
        $weight = $db->f("product_weight") * 0.02835;
      elseif( DEBUG == '1' ) {
        $vars["error"] = "Unknown weight UOM in product " . $db->f("product_sku");
      }
    } elseif( DEBUG == '1' ) {
      $vars["error"] = "Weight not specified for product " . $db->f("product_sku");
    }

    if (!empty($weight))
     return($weight);
    else
     return 0;
  }

  /**************************************************************************
  ** name: get_weight_LB()
  ** created by: Matt Oberpriller
  ** modified by: Soeren
  ** description: Calculate product weight in Pounds
  ** parameters: product_id
  ** returns: weight in LB / PO
  ***************************************************************************/  
  function get_weight_LB( $pid ) {
    global $vars;
    $ps_vendor_id = $_SESSION["ps_vendor_id"];
    $db = new ps_DB;

    $q  = "SELECT product_sku,product_parent_id,product_weight,product_weight_uom FROM #__pshop_product ";
    $q .= "WHERE product_id='$pid' ";
    
    $db->query($q);
    $db->next_record();

    if ($db->f("product_weight") == 0 && $db->f("product_parent_id")) {
       $q = "SELECT * from #__pshop_product WHERE product_id='".$db->f("product_parent_id")."'";
       $db->query($q);
       $db->next_record();       
    }

    if ($db->f("product_weight") > 0) {
      if (eregi("LB",$db->f("product_weight_uom")) || eregi("PO",$db->f("product_weight_uom")))
        $weight = $db->f("product_weight");
      elseif (eregi("KG",$db->f("product_weight_uom")) || eregi("KILO",$db->f("product_weight_uom")))
        $weight = $db->f("product_weight") * 2.20459;
      elseif (eregi("G",$db->f("product_weight_uom")))
        $weight = $db->f("product_weight") * 0.00220459;
      elseif (eregi("OZ",$db->f("product_weight_uom")) || eregi("OU",$db->f("product_weight_uom")))
        $weight = $db->f("product_weight") * 0.0625;
      elseif( DEBUG == '1' ) {
        $vars["error"] = "Unknown weight UOM in product " . $db->f("product_sku");
      }
    } elseif( DEBUG == '1' ) {
      $vars["error"] = "Weight not specified for product " . $db->f("product_sku");
    }

    if (!empty($weight))
     return($weight);
    else
     return 0;
  }
}
?>
