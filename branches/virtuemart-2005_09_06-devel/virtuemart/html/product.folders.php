<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
/**
* phpShop dTree menu
* @license GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @author Soeren Eberhardt
* @ Uses dTree Javascript: http://www.destroydrop.com/javascripts/tree/
* @version $Id: product.folders.php,v 1.5 2005/05/26 21:28:07 soeren_nb Exp $
*
* CATEGORY TREE
*/
mm_showMyFileName( __FILE__ );

$jscook_theme = "ThemeXP";
$jscook_tree = "ctThemeXP1";
    
    
/*********************************************************
************* CATEGORY TREE ******************************
*/

$phpShopmenu = new phpShopmenu();
  
// create a unique tree identifier, in case multiple trees are used 
// (max one per module)
$treename = "JSCook".uniqid( "Tree_" );

$menu_htmlcode = "<br/><br/>
<a onclick=\"javascript: ctExpandTree('div_$treename',99);\" style=\"cursor:pointer\">Expand Tree</a>
&nbsp;&nbsp;|&nbsp;&nbsp;
<a onclick=\"javascript: ctCollapseTree('div_$treename');\" style=\"cursor:pointer\">Collapse Tree</a>
<br/>
<div style=\"margin-left:50px;\" id=\"div_$treename\"></div>
<br/><br/>
<script type=\"text/javascript\"><!--
var $treename = 
[
";
$phpShopmenu->traverse_tree_down($menu_htmlcode);
  
$menu_htmlcode .= "];
var treeindex = ctDraw ('div_$treename', $treename, $jscook_tree, '$jscook_theme', 0, 0);
--></script>";


echo "
<script language=\"JavaScript\" type=\"text/javascript\" src=\"$mosConfig_live_site/components/com_phpshop/js/JSCookTree.js\"></script>
<link rel=\"stylesheet\" href=\"$mosConfig_live_site/components/com_phpshop/js/$jscook_theme/theme.css\" type=\"text/css\" />
<script type=\"text/javascript\">var ctThemeXPBase = '$mosConfig_live_site/components/com_phpshop/js/ThemeXP/';</script>
<script language=\"JavaScript\" type=\"text/javascript\" src=\"$mosConfig_live_site/components/com_phpshop/js/$jscook_theme/theme.js\"></script>
";

echo $menu_htmlcode;


class phpShopmenu {
    /***************************************************
    * function traverse_tree_down
    */
    function traverse_tree_down(&$mymenu_content, $category_id='0', $level='0') {
        static $ibg = -1;
        global $database, $module, $mosConfig_live_site;
        $level++;
        $query = "SELECT category_name as cname, category_id as cid, category_child_id as ccid "
        . "FROM #__pshop_category as a, #__pshop_category_xref as b "
         . "WHERE a.category_publish='Y' AND "
         . " b.category_parent_id='$category_id' AND a.category_id=b.category_child_id "
         . "ORDER BY category_parent_id, list_order, category_name ASC";
        $database->setQuery( $query );
        
        $categories = $database->loadObjectList();
        
        if( !( $categories==null ) ) {
          $i = 1;
          foreach ($categories as $category) {
            $ibg++;
            $Treeid = $ibg == 0 ? 1 : $ibg;
            $itemid = isset($_REQUEST['itemid']) ? '&itemid='.$_REQUEST['itemid'] : "";
            $mymenu_content.= ",\n[null,'".$category->cname;
            $mymenu_content.= ps_product_category::products_in_category( $category->cid );
            $mymenu_content.= "','".$_SERVER['PHP_SELF'].'?option=com_phpshop&page=product.product_category_form&category_id='.$category->cid."','_self','".$category->cname."'\n ";
            
            $q = "SELECT #__pshop_product.product_name,#__pshop_product.product_id FROM #__pshop_product, #__pshop_product_category_xref ";
            $q .= "WHERE #__pshop_product.product_id=#__pshop_product_category_xref.product_id ";
            $q .= "AND #__pshop_product_category_xref.category_id='".$category->cid."' ";
            $q .= "ORDER BY #__pshop_product.product_name";
            $database->setQuery( $q );
            $products = $database->loadObjectList();
            $xx = 1;
            foreach( $products as $product ) {
              // get name and link (just to save space in the code later on)
              $mymenu_content.= ",\n[null,'".$product->product_name;
              $url = $_SERVER['PHP_SELF'].'?option=com_phpshop&page=product.product_form&product_id='.$product->product_id;
              $mymenu_content .= "','".$url."','_self','".$product->product_name."']";
              if( $xx++ < sizeof( $products ))
                $mymenu_content .= ",\n";
              else
                $mymenu_content .= "\n";
            }
                
              /* recurse through the subcategories */
              $this->traverse_tree_down($mymenu_content, $category->ccid, $level);
              
              /* let's see if the loop has reached its end */
              if ( $i == sizeof( $categories ) && $level == 1)
                $mymenu_content.= "]";
              else
                $mymenu_content.= "]";
              $i++;
              
                
          }
        }
        else {
            
        }
      }
}
/************* END OF CATEGORY TREE ******************************
*********************************************************
*/
?>
