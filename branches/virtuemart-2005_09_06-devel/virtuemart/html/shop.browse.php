<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: shop.browse.php,v 1.50 2005/09/06 19:28:36 soeren_nb Exp $
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
*
* This is the Main Product Listing File!
*/
mm_showMyFileName( __FILE__ );

global $manufacturer_id,$keyword1,$keyword2,$search_category,$DescOrderBy,$search_limiter,
        $search_op,$orderby,$product_type_id;
        
echo "<h3>".$PHPSHOP_LANG->_PHPSHOP_BROWSE_LBL."</h3>";

$db_browse = new ps_DB;
$dbp = new ps_DB;

/* load important class files */
require_once (CLASSPATH."ps_product.php");
$ps_product = new ps_product;
require_once (CLASSPATH."ps_product_category.php");
$ps_product_category = new ps_product_category;
require_once (CLASSPATH."ps_reviews.php");

$Itemid = mosgetparam($_REQUEST, "Itemid", null);
if (empty($orderby)) $orderby = "#__pshop_product.product_name";
if (empty($category_id)) $category_id = $search_category;


if (!empty($category_id) ) { 
    
    /**
    * PATHWAY - Navigation List
    */
    echo '<div style="text-align:left;">';
    $nav_list = $ps_product_category->get_navigation_list($category_id);
          
    if(isset( $_VERSION ) && @$_REQUEST['output'] != "pdf") {
            $mainframe->appendPathWay( $nav_list );
    }
    else
       echo "<strong>".$nav_list ."</strong><br />";
    
    $child_list = $ps_product_category->get_child_list($category_id);
    if (!empty( $child_list ))
        echo $child_list;
    echo '</div>';
    if (!empty( $child_list ))
        echo '<br style="clear:both;" /><br />';
    
    /**
    * CATEGORY DESCRIPTION
    */
    

    $desc =  $ps_product_category->get_description($category_id); 
    /* Prepend Product Short Description Meta Tag "description" when applicable */
    if(isset( $_VERSION ) && @$_REQUEST['output'] != "pdf") {
        $mainframe->prependMetaTag( "description", substr(strip_tags($desc ), 0, 255) );
    }
    if( trim(str_replace( "<br />", "" , $desc)) != "" ) {
        echo '<div style="width:100%;float:left;">';
        echo $desc;
        echo '</div>
            <br style="clear:both;" /><br />';
    }
}
// NEW: Include the query section from an external file
require_once( PAGEPATH. "shop_browse_queries.php" );

$db_browse->query( $count );

$num_rows = $db_browse->f("num_rows");

/*** when nothing has been found 
* we tell this here and say goodbye */

if ($num_rows == 0 && !empty($keyword)) {
  echo $PHPSHOP_LANG->_PHPSHOP_NO_SEARCH_RESULT;
}
elseif( $num_rows == 0 && empty($product_type_id) ) {
  echo _EMPTY_CATEGORY;
}
/*** NOW START THE PRODUCT LIST ***/
else {


/* Set Dynamic Page Title when applicable */
if(isset( $_VERSION )) {
    if( $category_id ) {
        $db->query( "SELECT category_name FROM #__pshop_category WHERE category_id='$category_id'");
        $db->next_record();
        $mainframe->setPageTitle( $db->f("category_name") );
    }
    elseif( $manufacturer_id) {
        $db->query( "SELECT mf_name FROM #__pshop_manufacturer WHERE manufacturer_id='$manufacturer_id'");
        $db->next_record();
        $mainframe->setPageTitle( $db->f("mf_name") );
    }
    elseif( $keyword ) {
        $mainframe->setPageTitle( html_entity_decode( $PHPSHOP_LANG->_PHPSHOP_SEARCH_TITLE ) );
    }
    else
        $mainframe->setPageTitle( html_entity_decode($PHPSHOP_LANG->_PHPSHOP_BROWSE_LBL) );
}
if (!empty($product_type_id) && @$_REQUEST['output'] != "pdf") {
    ?>
    <div align="right">
    <form action="<?php echo $mm_action_url."index.php?option=com_phpshop&page=shop.parameter_search_form&product_type_id=$product_type_id&Itemid=" . $_REQUEST['Itemid'] ?>" method="post" name="back">
        <?php 
		echo $ps_product_type->get_parameter_form($product_type_id);
        ?>	  
      		<strong><?php
			echo $PHPSHOP_LANG->_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY.": ".$ps_product_type->get_name($product_type_id);
        ?></strong>&nbsp;&nbsp;<br/>
	  <input type="submit" class="button" id="<?php echo $PHPSHOP_LANG->_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS ?>" name="edit" value="<?php echo $PHPSHOP_LANG->_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS ?>" />
	</form></div>
    <?php 
} 
if ( $num_rows > 1 && @$_REQUEST['output'] != "pdf") {
    // Prepare Page Navigation
    if ( $num_rows > $limit  || $num_rows > 5 ) {
        include_once( "includes/pageNavigation.php" );
        $pagenav = new mosPageNav( $num_rows, $limitstart, $limit);
        
        $search_string = $mm_action_url."index.php?option=com_phpshop&page=$modulename.browse&category_id=$category_id&keyword=".urlencode( $keyword )."&manufacturer_id=$manufacturer_id&Itemid=$Itemid";
        $search_string .= !empty($orderby) ? "&orderby=".urlencode($orderby) : "";
        
        if (!empty($keyword1)) {
            $search_string.="&keyword1=".urlencode($keyword1);
            $search_string.="&search_category=$search_category";
            $search_string.="&search_limiter=$search_limiter";
            if (!empty($keyword2)) {
              $search_string.="&keyword2=".urlencode($keyword2);
              $search_string.="&search_op=$search_op";
            }
        }
    }
?>
    <!-- ORDER BY .... FORM -->
    <form action="<?php echo $mm_action_url."index.php" ?>" method="get" name="order">
    <?php echo $PHPSHOP_LANG->_PHPSHOP_ORDERBY ?>: 
      <select class="inputbox" name="orderby" onchange="order.submit()">
        <option value="pshop_product.product_name" >
         <?php echo $PHPSHOP_LANG->_PHPSHOP_SELECT ?></option>
        <option value="pshop_product.product_name" <?php echo $orderby=="pshop_product.product_name" ? "selected=\"selected\"" : "";?>>
        <?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_NAME_TITLE ?></option>
        <?php
          if (_SHOW_PRICES == '1') { ?>
              <option value="pshop_product_price.product_price" <?php echo $orderby=="pshop_product_price.product_price" ? "selected=\"selected\"" : "";?>>
              <?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_PRICE_TITLE ?></option><?php 
          } ?>
      </select>
	  <?php
	  	if ($DescOrderBy == "DESC") {
            $icon = "sort_desc.png";
            $selected = Array( "selected=\"selected\"", "" );
            $asc_desc = Array( "DESC", "ASC" );
        }
        else {
            $icon = "sort_asc.png";
            $selected = Array( "", "selected=\"selected\"" );
            $asc_desc = Array( "ASC", "DESC" );
        }
        echo mm_writeWithJS('<input type="hidden" name="DescOrderBy" value="'.$asc_desc[0].'" /><a href="#" onclick="document.order.DescOrderBy.value=\''.$asc_desc[1].'\'; order.submit()"><img src="'. $mosConfig_live_site."/images/M_images/$icon"  .'" border="0" alt="'. $PHPSHOP_LANG->_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER .'" title="'.$PHPSHOP_LANG->_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER .'" width="12" height="12"/></a>',
                            '<select class="inputbox" name="DescOrderBy">
                                <option '.$selected[0].' value="DESC">'.$PHPSHOP_LANG->_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER.'</option>
                                <option '.$selected[1].' value="ASC">'.$PHPSHOP_LANG->_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER.'</option>
                            </select>
                            <input class="button" type="submit" value="'.$PHPSHOP_LANG->_PHPSHOP_SUBMIT.'" />');
            
		?>
        <input type="hidden" name="Itemid" value="<?php echo @$_REQUEST['Itemid'] ?>" />
        <input type="hidden" name="option" value="com_phpshop" />
        <input type="hidden" name="page" value="shop.browse" />
        <input type="hidden" name="category_id" value="<?php echo $category_id ?>" />
        <input type="hidden" name="manufacturer_id" value="<?php echo $manufacturer_id ?>" />
        <input type="hidden" name="keyword" value="<?php echo urlencode( $keyword ) ?>" />
        <input type="hidden" name="keyword1" value="<?php echo urlencode( $keyword1 ) ?>" />
        <input type="hidden" name="keyword2" value="<?php echo urlencode( $keyword2 ) ?>" />
<?php 
    if( !empty( $product_type_id ))
        echo $ps_product_type->get_parameter_form($product_type_id);
   
    if( PSHOP_SHOW_TOP_PAGENAV =='1' && ($num_rows > $limit || $num_rows > 5)) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;"._PN_DISPLAY_NR."&nbsp;&nbsp;";
        //echo "<form action=\"$search_string\" method=\"post\">";
        $pagenav->writeLimitBox( $search_string );
        echo "<noscript><input type=\"submit\" value=\"".$PHPSHOP_LANG->_PHPSHOP_SUBMIT."\" /></noscript></form>";
    }
    else
        echo "</form>\n";
    if( PSHOP_SHOW_TOP_PAGENAV =='1' && $num_rows > $limit ) {
        // PAGE NAVIGATION AT THE TOP
        echo "<br/><div style=\"text-align:center;\">";
        echo sefReltoAbs($pagenav->writePagesLinks( $search_string ));
        echo "</div><br/>";
    }
} 
$use_tables = @$_REQUEST['output'] == "pdf" ? true : false;

if( $use_tables )
    echo '<table width="100%"><tr>';
else
    echo '<div id="product_list" style="width:100%; float:none;">';

  $i = 0;
  $row = 0;
  $tmp_row = 0;
  $db_browse->query( $list );
  $db_browse->next_record();
  
  $products_per_row = (!empty($category_id)) ? $db_browse->f("products_per_row") : PRODUCTS_PER_ROW; 
  if( $products_per_row < 1 )
	$products_per_row = 1;
  /** 
  *   Read the template file into a String variable.
  *   Then replace the placeholders with HTML formatted product details
  *
  * function read_file( $file, $defaultfile='') ***/
  if(@$_REQUEST['output'] != "pdf")
    $templatefile = (!empty($category_id)) ? $db_browse->f("category_browsepage") : CATEGORY_TEMPLATE;
  else
    $templatefile = "browse_lite_pdf";

  $template = read_file( PAGEPATH."templates/browse/$templatefile.php", 
                                      PAGEPATH."templates/browse/".CATEGORY_TEMPLATE.".php");
  $db_browse->reset();
  
  /*** Start printing out all products (in that category) ***/
  while ($db_browse->next_record()) {
  
        // If it is item get parent:
        $product_parent_id = $db_browse->f("product_parent_id");
        if ($product_parent_id != 0) {
            $dbp->query("SELECT product_full_image,product_thumb_image,product_name,product_s_desc FROM #__pshop_product WHERE product_id='$product_parent_id'" );
            $dbp->next_record();
        }
    
      // Set the flypage for this product based on the category.
      // If no flypage is set then use the default as set in phpshop.cfg.php
      $flypage = $ps_product->get_flypage($db_browse->f("product_id"));
      
      $url = $sess->url( $mm_action_url."index.php?page=shop.product_details&flypage=$flypage&product_id=" . $db_browse->f("product_id") . "&category_id=" . $db_browse->f("category_id"));
      
      if( $db_browse->f("product_thumb_image") )
	    $product_thumb_image = $db_browse->f("product_thumb_image");
      else {
        if( $product_parent_id != 0 )
            $product_thumb_image = $dbp->f("product_thumb_image"); // Use product_thumb_image from Parent Product
		else
            $product_thumb_image = 0;
      }
	  if( $product_thumb_image ) {
        if( substr( $product_thumb_image, 0, 4) != "http" ) {
            if(PSHOP_IMG_RESIZE_ENABLE == '1')
                $product_thumb_image = $mosConfig_live_site."/components/com_phpshop/show_image_in_imgtag.php?filename=".urlencode($product_thumb_image)."&newxsize=".PSHOP_IMG_WIDTH."&newysize=".PSHOP_IMG_HEIGHT."&fileout=";
            else
                $product_thumb_image = IMAGEURL."product/".$product_thumb_image;
        }
      }
      else
          $product_thumb_image = IMAGEURL.NO_IMAGE;
		  
      if( $db_browse->f("product_full_image") )
	  	$product_full_image = $db_browse->f("product_full_image");
	  else
        if( $product_parent_id != 0 )
            $product_full_image = $dbp->f("product_full_image"); // Use product_full_image from Parent Product
		else
            $product_full_image = "..".NO_IMAGE;
	  if( file_exists( IMAGEPATH."product/$product_full_image" )) {
        $full_image_info = getimagesize( IMAGEPATH."product/$product_full_image" );
        $full_image_width = $full_image_info[0]+40;
        $full_image_height = $full_image_info[1]+40;
      }
      else {
        $full_image_width = $full_image_height = "";
      }
      $product_name = $db_browse->f("product_name");      
      if( $db_browse->f("product_publish") == "N" )
        $product_name .= " ("._CMN_UNPUBLISHED.")";
        
      if( empty($product_name) && $product_parent_id!=0 )
	  	$product_name = $dbp->f("product_name"); // Use product_name from Parent Product
      $product_s_desc = $db_browse->f("product_s_desc");
      if( empty($product_s_desc) && $product_parent_id!=0 )
	  	$product_s_desc = $dbp->f("product_s_desc"); // Use product_s_desc from Parent Product
      $product_details = $PHPSHOP_LANG->_PHPSHOP_FLYPAGE_LBL;
      
      if (PSHOP_ALLOW_REVIEWS == '1' && @$_REQUEST['output'] != "pdf") {
        /** 
        *   Average customer rating: xxxxx
        *   Total votes: x
        */
        $product_rating = $PHPSHOP_LANG->_PHPSHOP_CUSTOMER_RATING .": <br />";
        $product_rating .= ps_reviews::allvotes( $db_browse->f("product_id") ); 
      }
      else 
        $product_rating = "";

      
      /** Price: xx.xx EUR ***/
      if (_SHOW_PRICES == '1') {
        $product_price = $ps_product->show_price( $db_browse->f("product_id") ); 
      } 
      else {
        $product_price = "";
      }
      
      /*** Add-to-Cart Button ***/
      if (USE_AS_CATALOGUE != '1' && $product_price != "" && !stristr( $product_price, $PHPSHOP_LANG->_PHPSHOP_PRODUCT_CALL )) { 
          $form_addtocart = "<form action=\"". $mm_action_url ."index.php\" method=\"post\" name=\"addtocart\" id=\"addtocart".$i."\">\n
                <label for=\"quantity_".$i."\">".$PHPSHOP_LANG->_PHPSHOP_CART_QUANTITY.":</label>\n
                <input id=\"quantity_".$i."\" class=\"inputbox\" type=\"text\" size=\"3\" name=\"quantity\" value=\"1\" />
                <input class=\"button\" type=\"submit\" name=\"submit\" value=\"".$PHPSHOP_LANG->_PHPSHOP_CART_ADD_TO."\" />\n
                <input type=\"hidden\" name=\"category_id\" value=\"". @$_REQUEST['category_id'] ."\" />\n
                <input type=\"hidden\" name=\"product_id\" value=\"". $db_browse->f("product_id") ."\" />\n
                <input type=\"hidden\" name=\"page\" value=\"shop.cart\" />\n
                <input type=\"hidden\" name=\"func\" value=\"cartadd\" />\n
                <input type=\"hidden\" name=\"Itemid\" value=\"$Itemid\" />\n
                <input type=\"hidden\" name=\"option\" value=\"com_phpshop\" />\n
              </form>\n";
      }
      else
        $form_addtocart = "";
      
      /*** Now fill the template 
      * Customizing:
      *   a. Define your own placeholders(e.g. {product_weight} )
      *   b. Add a line below like this (must be below first str_replace call!):
              $product_cell = str_replace( "{product_weight}", $db_browse->f("product_weight"), $product_cell );
      *   c. put the placeholder {product_weight} somewhere in the template (/html/templates)
              <tr><td>Product Weight: {product_weight}</td></tr>
      *   d. save the template file under a new name (e.g. browse_weight.php )
      *   e. Assign the browse page "browse_weight" to the categories,
      *       you want to have using that template file (do that in the category form!) 
      **/
      $product_cell = str_replace( "{product_flypage}", $url, $template );
      $product_cell = str_replace( "{product_thumb_image}", $product_thumb_image, $product_cell );
      $product_cell = str_replace( "{product_full_image}", $product_full_image, $product_cell );
      $product_cell = str_replace( "{full_image_width}", $full_image_width, $product_cell );
      $product_cell = str_replace( "{full_image_height}", $full_image_height, $product_cell );
      
      if( substr( $product_full_image, 0, 4) == "http" )
        $product_cell = str_replace( "{image_url}product/", "", $product_cell );
      
      else
        $product_cell = str_replace( "{image_url}", IMAGEURL, $product_cell );
      
      if( PSHOP_IMG_RESIZE_ENABLE=='1' ) {
          $product_cell = str_replace( "{image_width}", "", $product_cell );
          $product_cell = str_replace( "{image_height}", "", $product_cell );
      }
      else {
          if( file_exists( str_replace( IMAGEURL, IMAGEPATH, $product_thumb_image))) {
            $arr = @getimagesize( str_replace( IMAGEURL, IMAGEPATH, $product_thumb_image) );
            $height_greater = $arr[0] < $arr[1];
          }
          if( @$height_greater === false ) {
            $product_cell = str_replace( "{image_width}", "width=\"".PSHOP_IMG_WIDTH."\"", $product_cell );
            $product_cell = str_replace( "{image_height}", "", $product_cell );
          }
          else {
            $product_cell = str_replace( "{image_width}", "", $product_cell );
            $product_cell = str_replace( "{image_height}", "height=\"".PSHOP_IMG_HEIGHT."\"", $product_cell );
          }
      }
      $product_cell = str_replace( "{product_name}", shopMakeHtmlSafe( $product_name ), $product_cell );
      $product_cell = str_replace( "{product_s_desc}", $product_s_desc, $product_cell );
      $product_cell = str_replace( "{product_details...}", $product_details, $product_cell );
      $product_cell = str_replace( "{product_rating}", $product_rating, $product_cell );
      $product_cell = str_replace( "{product_price}", $product_price, $product_cell );
      $product_cell = str_replace( "{form_addtocart}", $form_addtocart, $product_cell );
	  $product_cell = str_replace( "{product_sku}", $db_browse->f("product_sku"), $product_cell );
      
      /*** Now echo the filled cell ***/
      if( $tmp_row != $row || $row == 0 ) {
          if ( $db_browse->num_rows() - ($i) < $products_per_row )
            $cell_count = $db_browse->num_rows() - ($i);
          else
            $cell_count = $products_per_row;
          $row++;
          $tmp_row = $row;
      }
      $colspan = $products_per_row - $cell_count + 1;
      if( $use_tables )
        echo "<td colspan=\"$colspan\" width=\"". intval(round(100/$cell_count)-4) ."%\">";
      else
        echo "<div style=\"margin-right: 5px; width:". intval(round(100/$cell_count)-4) ."%; float:left;\" id=\"".uniqid( "row_" ) ."\">";
        
      echo $product_cell; 
      
    $i++;
    /*** START NEXT ROW ??? ***/
    if ( ($i) % $products_per_row == 0) {
        $row++;
        /** if yes, close the current row and print out a horizontal bar ***/
        if( $use_tables )
            echo "\n</td></tr><tr>";
        else
            echo "\n</div><br style=\"clear:both;\" />";
    }
    else {
        if( $use_tables )
            echo "\n</td>";
        else
            echo "\n</div>";
    }
  } /*** END OF while loop ***/

echo '<br style="clear:both;" />';
if( $use_tables )
    echo '</tr></table>';
else
    echo '</div>';
?>
<!-- BEGIN PAGE NAVIGATION -->
<div align="center">
<?php
if ( $num_rows > $limit && @$_REQUEST['output'] != "pdf") {
    if( !isset($pagenav) ) {
        include_once( "includes/pageNavigation.php" );
        $pagenav = new mosPageNav( $num_rows, $limitstart, $limit);
    }
    echo sefReltoAbs($pagenav->writePagesLinks( $search_string ));
}
if( $num_rows > 5 && @$_REQUEST['output'] != "pdf") {
    echo "<br/><br/><form action=\"$search_string\" method=\"post\">"._PN_DISPLAY_NR."&nbsp;&nbsp;";
    $pagenav->writeLimitBox( $search_string );
    echo "<noscript><input class=\"button\" type=\"submit\" value=\"".$PHPSHOP_LANG->_PHPSHOP_SUBMIT."\" /></noscript></form>";
}
?>
</div>
<!-- END PAGE NAVIGATION -->

<?php 
}
return $mainframe;
?>
