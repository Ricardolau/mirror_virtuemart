<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: ps_shipping.php,v 1.9 2005/03/01 20:10:42 soeren_nb Exp $
* @package mambo-phpShop
* Contains code from phpEuroShop:
* 	@copyright (C) Ekkehard Domning
*
* Conversion to Mambo and the rest:
* 	@copyright (C) 2004-2005 Soeren Eberhardt
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*/

class ps_shipping {
  var $classname = "ps_shipping";


  /*****************************************
  ** VALIDATION FUNCTIONS for the Carrier
  **
  **
  ********************************************/


  function validate_add(&$d) {
    global $error_msg, $PHPSHOP_LANG;
    $db = new ps_DB;

    $q = "SELECT * FROM #__pshop_shipping_carrier WHERE shipping_carrier_id='" . $d["shipping_carrier_id"] . "'";
    $db->query($q);
    if ($db->next_record()) {
      $d["error"] = $PHPSHOP_LANG->_PHPSHOP_ERR_MSG_CARRIER_EXIST;
      return False;
    }

    return True;
  }

  function validate_delete(&$d) {
    global $PHPSHOP_LANG;
    if (!$d["shipping_carrier_id"]) {
      $d["error"] = $PHPSHOP_LANG->_PHPSHOP_ERR_MSG_CARRIER_ID_REQ;
      return False;
    }

    $db = new ps_DB;
    $q = "SELECT * FROM #__pshop_shipping_rate WHERE shipping_rate_carrier_id='" . $d["shipping_carrier_id"] . "'";
    $db->query($q);
    if ($db->next_record()) {
      $d["error"] = $PHPSHOP_LANG->_PHPSHOP_ERR_MSG_CARRIER_INUSE;
      return False;
    }

    $db = new ps_DB;
    $q = "SELECT * FROM #__pshop_shipping_carrier WHERE shipping_carrier_id='" . $d["shipping_carrier_id"] . "'";
    $db->query($q);
    if (!$db->next_record()) {
      $d["error"] = $PHPSHOP_LANG->_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND;
      return False;
    }

    return True;
  }

  function validate_update(&$d) {
    global $error_msg, $PHPSHOP_LANG;;
    $db = new ps_DB;

    if (!$d["shipping_carrier_id"]) {
      $d["error"] = $PHPSHOP_LANG->_PHPSHOP_ERR_MSG_CARRIER_ID_REQ;
      return False;
    }

    $db = new ps_DB;
    $q = "SELECT * FROM #__pshop_shipping_carrier WHERE shipping_carrier_id='" . $d["shipping_carrier_id"] . "'";
    $db->query($q);
    if (!$db->next_record()) {
      $d["error"] = $PHPSHOP_LANG->_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND;
      return False;
    }

    return True;
  }


  /**************************************************************************
   * name: add()
   * created by: Ekkehard Domning
   * description: creates a new Carrier
   * parameters:
   * returns:
   **************************************************************************/
  function add(&$d) {
  
    $ps_vendor_id = $_SESSION["ps_vendor_id"];
    
    $db = new ps_DB;
    
    $timestamp = time();

    if (!$this->validate_add($d)) {
      return False;
    }

    $q = "INSERT INTO #__pshop_shipping_carrier (shipping_carrier_name, shipping_carrier_list_order) VALUES ('";
    $q .= $d["shipping_carrier_name"] . "','";
    $q .= $d["shipping_carrier_list_order"] . "')";

    $db->query($q);
    $db->next_record();
    return True;

  }

  /**************************************************************************
   * name: update()
   * created by: Ekkehard Domning
   * description: updates function information
   * parameters:
   * returns:
   **************************************************************************/
  function update(&$d) {
    $ps_vendor_id = $_SESSION["ps_vendor_id"];
  
    $db = new ps_DB;
    $timestamp = time();

    if (!$this->validate_update($d)) {
      return False;
    }

    $q = "UPDATE #__pshop_shipping_carrier SET ";
    $q .= "shipping_carrier_name='" . $d["shipping_carrier_name"];
    $q .= "',shipping_carrier_list_order='" . $d["shipping_carrier_list_order"];
    $q .= "' WHERE shipping_carrier_id='" . $d["shipping_carrier_id"]."'";
    $db->query($q);
    $db->next_record();
    return True;
  }

  /**************************************************************************
   * name: delete()
   * created by: Ekkehard Domning
   * description: Should delete an Image and the coresponding files
   * parameters:
   * returns:
   **************************************************************************/
  function delete(&$d) {
    $ps_vendor_id = $_SESSION["ps_vendor_id"];
    $db = new ps_DB;


    if (!$this->validate_delete($d)) {
      return False;
    }

    $q = "DELETE FROM #__pshop_shipping_carrier WHERE shipping_carrier_id='" . $d["shipping_carrier_id"] . "'";
    $db->query($q);
    $db->next_record();
    return True;
  }

  /**************************************************************************
   * name: carrier_list()
   * created by: Ekkehard Domning
   * description: prints the HTML code of selectable carrier list
   * parameters: $selected_carrier_id, select this Item
   * returns:
   **************************************************************************/
  function carrier_list($select_name, $selected_carrier_id) {
    global $PHPSHOP_LANG;
    
    $db = new ps_DB;
    $html = "<select  class=\"inputbox\" name=$select_name>\n";
    $html .= "<option value=\"\">" . $PHPSHOP_LANG->_PHPSHOP_SELECT . "</OPTION>\n";
    $q = "SELECT * FROM #__pshop_shipping_carrier";
    // Get list of Values
    $db->query($q);
    while ($db->next_record()) {
      $html .= "<option value=";
      $html .= $db->f("shipping_carrier_id");
      if ($db->f("shipping_carrier_id")==$selected_carrier_id) {
         $html .= " selected=\"selected\"";
      }
      $html .= ">";
      $html .= $db->f("shipping_carrier_name");
      $html .= "</option>\n";
    }
    $html .= "</select>\n";
    echo $html;
  }

  /**************************************************************************
   * name: country_multiple_list()
   * created by: Ekkehard Domning
   * description: prints the HTML code of a multiple selectable country list
   * parameters: $selected_countries, a String in the Form "<Country1>;<Country2>"
   *             e.g. "GER;AUT;NED";
   * returns:
   **************************************************************************/
  function country_multiple_list($select_name, $selected_countries) {
     global $PHPSHOP_LANG;
     $db = new ps_DB;

     echo "<select  class=\"inputbox\" multiple size=\"10\" name=\"$select_name\">\n";
     $q = "SELECT * FROM #__pshop_country ORDER BY country_name ASC";
     $db->query($q);
     while ($db->next_record()) {

       echo "<option value=\"" . $db->f("country_3_code") . "\"";
       $pos = strpos($selected_countries, $db->f("country_3_code"));
       if (is_integer($pos)) {
         echo " selected=\"selected\"";
       }
       echo ">" . $db->f("country_name") . "</option>\n";
     }
     echo "</select>\n";
     return True;
   }


// Validate Rates

  function validate_rate_add(&$d) {
    global $error_msg, $PHPSHOP_LANG;;
    $db = new ps_DB;
    
    if (!$d["shipping_rate_carrier_id"]) {
      $d["error"] = $PHPSHOP_LANG->_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ;
      return False;
    }

    $q = "SELECT shipping_carrier_id FROM #__pshop_shipping_carrier WHERE shipping_carrier_id='" . $d["shipping_rate_carrier_id"] . "'";
    $db->query($q);
    if (!$db->next_record()) {
      $d["error"] = $PHPSHOP_LANG->_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV;
      return False;
    }
    if (!$d["shipping_rate_name"]) {
      $d["error"] = $PHPSHOP_LANG->_PHPSHOP_ERR_MSG_RATE_NAME_REQ;
      return False;
    }
    for($i=0;$i<count($d["shipping_rate_country"]);$i++){
      if ($d["shipping_rate_country"][$i] != "") {
        $q = "SELECT * FROM #__pshop_country WHERE country_3_code='" . $d["shipping_rate_country"][$i] . "'";
        $db->query($q);
        if (!$db->next_record()) {
          $d["error"] = sprintf($PHPSHOP_LANG->_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV, $d["shipping_rate_country"][$i]);
          return False;
        }
      }
    }

    if ($d["shipping_rate_weight_start"] == "") {
      $d["error"] = $PHPSHOP_LANG->_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ;
      return False;
    }
    if ($d["shipping_rate_weight_end"] == "") {
      $d["error"] = $PHPSHOP_LANG->_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ;
      return False;
    }
    if ($d["shipping_rate_weight_start"] >= $d["shipping_rate_weight_end"]) {
      $d["error"] = $PHPSHOP_LANG->_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV;
      return False;
    }
    if ($d["shipping_rate_value"] == "") {
      $d["error"] = $PHPSHOP_LANG->_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ;
      return False;
    }
    if ($d["shipping_rate_package_fee"] == "") {
      $d["shipping_rate_package_fee"] = '0';
    }
    $q = "SELECT currency_id FROM #__pshop_currency WHERE currency_id='" . $d["shipping_rate_currency_id"] . "'";
    $db->query($q);
    if (!$db->next_record()) {
      $d["error"] = $PHPSHOP_LANG->_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV;
      return False;
    }

    if (!$d["shipping_rate_list_order"]) {
      $d["shipping_rate_list_order"] = '0';
    }
    return True;
  }

  function validate_rate_delete(&$d) {
    global $PHPSHOP_LANG;
    if (!$d["shipping_rate_id"]) {
      $d["error"] = $PHPSHOP_LANG->_PHPSHOP_ERR_MSG_SHIPPING_RATE_ID_REQ;
      return False;
    }
    return True;
  }

  /**************************************************************************
   * name: rate_add()
   * created by: Ekkehard Domning
   * description: creates a new rate entry
   * parameters:
   * returns:
   **************************************************************************/
  function rate_add(&$d) {
    $db = new ps_DB;
    $timestamp = time();

    if (!$this->validate_rate_add($d)) {
      return False;
    }

    $q = "INSERT INTO #__pshop_shipping_rate ";
    $q .= "(shipping_rate_name,shipping_rate_carrier_id,shipping_rate_country,";
    $q .= "shipping_rate_zip_start,shipping_rate_zip_end,shipping_rate_weight_start,";
    $q .= "shipping_rate_weight_end,shipping_rate_value,shipping_rate_package_fee,";
    $q .= "shipping_rate_currency_id,shipping_rate_vat_id,shipping_rate_list_order) ";
    $q .= "VALUES ('";
    $q .= $d["shipping_rate_name"] . "','";
    $q .= $d["shipping_rate_carrier_id"] . "','";
    $src_str = "";
    if(!empty($d["shipping_rate_country"])) {
      for($i=0;$i<count($d["shipping_rate_country"]);$i++){
        if ($d["shipping_rate_country"][$i] != "") {
          $src_str .= $d["shipping_rate_country"][$i] . ";";
        }
      }
      chop($src_str,";");
    }
    $q .= "$src_str','";
    $q .= $d["shipping_rate_zip_start"] . "','";
    $q .= $d["shipping_rate_zip_end"] . "','";
    $q .= $d["shipping_rate_weight_start"] . "','";
    $q .= $d["shipping_rate_weight_end"] . "','";
    $q .= $d["shipping_rate_value"] . "','";
    $q .= $d["shipping_rate_package_fee"] . "','";
    $q .= $d["shipping_rate_currency_id"] . "','";
    $q .= $d["shipping_rate_vat_id"] . "','";
    $q .= $d["shipping_rate_list_order"] . "')";
    $db->query($q);
    $db->next_record();
    return True;
  }

  /**************************************************************************
   * name: rate_update()
   * created by: Ekkehard Domning
   * description: updates a rate entry
   * parameters:
   * returns:
   **************************************************************************/
  function rate_update(&$d) {
    $db = new ps_DB;

    $q = "UPDATE #__pshop_shipping_rate SET ";
    $q .= "shipping_rate_name='" . $d["shipping_rate_name"] . "',";
    $q .= "shipping_rate_carrier_id='" . $d["shipping_rate_carrier_id"] . "',";
    $src_str = "";
    if(!empty($d["shipping_rate_country"])) {
      for($i=0;$i<count($d["shipping_rate_country"]);$i++){
        if ($d["shipping_rate_country"][$i] != "") {
          $src_str .= $d["shipping_rate_country"][$i] . ";";
        }
      }
      chop($src_str);
    }
    $q .= "shipping_rate_country='$src_str',";
    $q .= "shipping_rate_zip_start='" . $d["shipping_rate_zip_start"] . "',";
    $q .= "shipping_rate_zip_end='" . $d["shipping_rate_zip_end"] . "',";
    $q .= "shipping_rate_weight_start='" . $d["shipping_rate_weight_start"] . "',";
    $q .= "shipping_rate_weight_end='" . $d["shipping_rate_weight_end"] . "',";
    $q .= "shipping_rate_value='" . $d["shipping_rate_value"] . "',";
    $q .= "shipping_rate_package_fee='" . $d["shipping_rate_package_fee"] . "',";
    $q .= "shipping_rate_currency_id='" . $d["shipping_rate_currency_id"] . "',";
    $q .= "shipping_rate_vat_id='" . $d["shipping_rate_vat_id"] . "',";
    $q .= "shipping_rate_list_order='" . $d["shipping_rate_list_order"] . "'";
    $q .= " WHERE shipping_rate_id='" . $d["shipping_rate_id"]."'";
    $db->query($q);
    $db->next_record();
    return True;
  }

  /**************************************************************************
   * name: rate_delete()
   * created by: Ekkehard Domning
   * description: removes a shipping rate
   * parameters:
   * returns:
   **************************************************************************/
  function rate_delete(&$d) {
    $db = new ps_DB;

    if (!$this->validate_rate_delete($d)) {
      return False;
    }
    $q = "DELETE FROM #__pshop_shipping_rate WHERE ";
    $q .= "shipping_rate_id = '". $d["shipping_rate_id"] . "'";
    $db->query($q);
    $db->next_record();
    return True;
  }

}

?>
