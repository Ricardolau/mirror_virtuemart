<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: ps_manufacturer_category.php,v 1.3 2005/01/27 19:33:40 soeren_nb Exp $
* @package mambo-phpShop
*
* @copyright (C) 2004-2005 Soeren Eberhardt
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*/

/****************************************************************************
*
* CLASS DESCRIPTION
*                   
* ps_manufacturer_category
*
* The class is is used to manage the manufacturer categories in your store.
* 
* properties:  
* 	
*       error - the error message returned by validation if any
* methods:
*       validate_add()
*	validate_delete()
*	validate_update()
*       add()
*       update()
*       delete()
*	
*
*************************************************************************/
 class ps_manufacturer_category {
   var $classname = "ps_manufacturer_category";
   var $error;
   
  /**************************************************************************
  ** name: validate_add()
  ** created by: soeren
  ** description:
  ** parameters:
  ** returns:
  ***************************************************************************/  
   function validate_add($d) {
     
     $db = new ps_DB;
     
     if (!$d["mf_category_name"]) {
       $this->error = "ERROR:  You must enter a name for the manufacturer category.";
       return False;	
     }
    
    else {
       $q = "SELECT count(*) as rowcnt from #__pshop_manufacturer_category where";
       $q .= " mf_category_name='" .  $d["mf_category_name"] . "'";
       $db->setQuery($q);
       $db->query();
       $db->next_record();
       if ($db->f("rowcnt") > 0) {
          $this->error = "The given manufacturer category name already exists.";
          return False;
       }      
     }
     return True;    
   }
  
  /**************************************************************************
  ** name: validate_delete()
  ** created by: soeren
  ** description:
  ** parameters:
  ** returns:
  ***************************************************************************/   
  function validate_delete($d) {
    
    if (!$d["mf_category_id"]) {
      $this->error = "ERROR:  Please select a manufacturer category to delete.";
      return False;
    }
    else {
      return True;
    }
  }
  
  /**************************************************************************
  ** name: validate_update
  ** created by: soeren
  ** description:
  ** parameters:
  ** returns:
  ***************************************************************************/   
  function validate_update($d) {
    
    if (!$d["mf_category_name"]) {
      $this->error = "ERROR:  You must enter a name for the manufacturer category.";
      return false;	
    }
    
   return true;
  }
  
  
  /**************************************************************************
   * name: add()
   * created by: soeren
   * description: creates a new manufacturer record
   * parameters:
   * returns:
   **************************************************************************/
  function add(&$d) {
    
    $db = new ps_DB;
    
    if (!$this->validate_add($d)) {
      $d["error"] = $this->error;
      return false;
    }
    $q = "INSERT INTO #__pshop_manufacturer_category (mf_category_name, mf_category_desc)";
    $q .= " VALUES ('";
    $q .= $d["mf_category_name"] . "','";
    $q .= $d["mf_category_desc"]. "')";
    $db->setQuery($q);
    $db->query();
    $db->next_record();
    return True;

  }
  
  /**************************************************************************
   * name: update()
   * created by: soeren
   * description: updates manufacturer information
   * parameters:
   * returns:
   **************************************************************************/
  function update(&$d) {
    $db = new ps_DB;
    $timestamp = time();

    if (!$this->validate_update($d)) {
      $d["error"] = $this->error;
      return False;	
    }
    $q = "UPDATE #__pshop_manufacturer_category set ";
    $q .= "mf_category_name='" . $d["mf_category_name"]."',";
    $q .= "mf_category_desc='" .$d["mf_category_desc"] . "' ";
    $q .= "WHERE mf_category_id='".$d["mf_category_id"]."'";
    $db->setQuery($q);
    $db->query();
    $db->next_record();
    return True;
  }

  /**************************************************************************
   * name: delete()
   * created by: soeren
   * description: Should delete a manufacturer record.
   * parameters: 
   * returns:
   **************************************************************************/
  function delete(&$d) {
    $db = new ps_DB;
    
    if (!$this->validate_delete($d)) {
      $d["error"]=$this->error;
      return False;
    }
    $q = "DELETE from #__pshop_manufacturer_category where mf_category_id='" . $d["mf_category_id"] . "'";
    $db->setQuery($q);
    $db->query();
    $db->next_record();
    return True;
  }
  
    /**************************************************************************
   * name: list_category()
   * created by: soeren
   * description: Creates a list of Manufacturer Categories to be used in a drop down list
   * parameters:
   * returns: array of values
   **************************************************************************/
  function list_category($mf_category_id='0') {
    global $PHPSHOP_LANG;
    
    $db = new ps_DB;
    
    $q = "SELECT count(*) as rowcnt FROM #__pshop_manufacturer_category ORDER BY mf_category_name";
    $db->query($q);
    $db->next_record();
    $rowcnt = $db->f("rowcnt");


    $q = "SELECT * FROM #__pshop_manufacturer_category ORDER BY mf_category_name";
    $db->query($q);                                                                                     
    $code = "<select name=\"mf_category_id\" class=\"inputbox\">\n";
    if ( $rowcnt > 1) {
      $code .= "<option value=\"0\">".$PHPSHOP_LANG->_PHPSHOP_SELECT."</option>\n";      
    }   
    while ($db->next_record()) {
      $code .= "  <option value=\"" . $db->f("mf_category_id") . "\"";
      if ($db->f("mf_category_id") == $mf_category_id) { 
        $code .= " selected=\"selected\" "; 
      }
      $code .= ">" . $db->f("mf_category_name") . "</option>\n";
    }
    $code .= "</select>\n";
    
    echo $code;
  }

}

?>
