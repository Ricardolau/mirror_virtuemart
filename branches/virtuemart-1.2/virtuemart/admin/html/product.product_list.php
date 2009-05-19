<?php
if( !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
*
* @version $Id$
* @package VirtueMart
* @subpackage html
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
mm_showMyFileName( __FILE__ );
require_once( CLASSPATH .'ps_product_files.php');
require_once( CLASSPATH .'pageNavigation.class.php' );

global $ps_product, $ps_product_category;

$ps_product = new ps_product();

// uuuh, we are using modern methods.
vmCommonHTML::loadExtjs(); // Having a modal window is good

$keyword = vmGet($_REQUEST, 'keyword' );

//The vmGet didnt worked for this purpose by Max Milbers
$vendor = ps_vendor::get_logged_vendor();

$category_id = vmGet($_REQUEST, 'category_id', 0);//ct, was null

//PARAMETERS
$product_parent_id = vmGet($_REQUEST, 'product_parent_id', 0);//ct, was null
$product_type_id = vmGet($_REQUEST, 'product_type_id', null); // Changed Product Type

//drop down menu to filter on modified
$search_type = vmGet($_REQUEST, 'search_type', "none");//none||product||price||withoutprice

$now = getdate();
$nowstring = $now["hours"].":".$now["minutes"]." ".$now["mday"].".".$now["mon"].".".$now["year"];

$search_date = vmGet($_REQUEST, 'search_date', null); // Changed search by date

if(isset($_REQUEST['search_order']) && @$_REQUEST['search_order'] == '<') {
	$search_order = '<';
}
else {
	$search_order = '>';
}

$filtered = vmGet($_REQUEST, 'filtered', "no");

if ($filtered == "yes"){

	if (vmGet($_REQUEST, 'published', "no") == "on"){
		$showPublishedItems = 1;
	} else {
		$showPublishedItems = 0;
	}

	if (vmGet($_REQUEST, 'unpublished', "no") == "on"){
		$showUnPublishedItems = 1;
	} else {
		$showUnPublishedItems = 0;
	}

}else{

	$showPublishedItems = 1;
	$showUnPublishedItems = 0;

}

$filterOnSpecial = vmGet($_REQUEST, 'on_special');

/*all|instock|lowstock|nostock*/
$stockLimit = vmGet($_REQUEST, 'stock_limit', "all");

$orderby = vmGet($_REQUEST, 'orderby', "product_name");

$sequence = vmGet($_REQUEST, 'sequence', "ASC");

if ((($search_type == "price") || ($search_type == "withoutprice")) && (!empty($search_date))){
	$searchSql = "SELECT DISTINCT p.product_id,product_name,product_sku,vendor_id,
					product_publish,product_parent_id ";
}else{
	$searchSql = "SELECT * ";
}
$countSql = "SELECT COUNT(p.product_id) as num_rows ";

/*NOTE: ALIASES FOR TABLE NAMES*/
$sql = "FROM #__{vm}_product p ";

/*JOIN in the necessary tables for our query*/
//product_price table
if (((($search_type == "price") || ($search_type == "withoutprice")) && (!empty($search_date))) || ($orderby == "product_price")){
	$sql .= "LEFT JOIN #__{vm}_product_price pp ON p.product_id = pp.product_id ";
}

//product_category_xref table
if (!empty($category_id)){
	$sql .= "LEFT JOIN #__{vm}_product_category_xref pcx ON p.product_id = pcx.product_id ";
}

//product_type table
if (!empty($product_type_id)) {
	$sql .= "LEFT JOIN #__{vm}_product_product_type_xref ptx ON p.product_id = ptx.product_id ";
}

/*FILTER products*/
//PRODUCT table
$sql .= "WHERE ";
//these two are ALWAYS to be present!
$sql .= "product_parent_id='" . $product_parent_id ."'";
if (!$perm->check("admin")) {
	$sql .= " AND vendor_id = " . $vendor;
}

if (!empty($search_date)){

	list($time,$date) = explode(" ",$search_date);
	list($d["search_date_hour"],$d["search_date_minute"]) = explode(":",$time);
	list($d["search_date_day"],$d["search_date_month"],$d["search_date_year"]) = explode(".",$date);
	$d["search_date_use"] = true;

	if (process_date_time($d,"search_date",$VM_LANG->_('VM_SEARCH_LBL'))){

		$date = $d["search_date"];

		switch( $search_type ) {
			case "product" : $sql .= " AND p.mdate ". $search_order . " $date "; break;
			case "price" : $sql .= " AND pp.mdate ". $search_order . " $date "; break;
			case "withoutprice": $sql .= " AND pp.mdate IS NULL "; break;
		}
	}else {
		echo "<script type=\"text/javascript\">alert('".$d["error"]."')</script>\n";
	}
}

if ($stockLimit == "instock")
{	$sql .= " AND product_in_stock > low_stock_notification";
} else if ($stockLimit == "lowstock") {
	$sql .= " AND product_in_stock <= low_stock_notification";
} else if ($stockLimit == "nostock"){
	$sql .= " AND product_in_stock <= 0";
} /*else no filter on stock status*/

if ($filterOnSpecial == "on"){
	$sql .= " AND product_special = 'Y'";
}

if ($filtered == "yes"){

	if (($showPublishedItems == 1) && ($showUnPublishedItems == 0)){
		$sql .= " AND product_publish = 'Y'";
	}else if (($showPublishedItems == 0) && ($showUnPublishedItems == 1)){
		$sql .= " AND product_publish != 'Y'";
	} //otherwise show all

}else{
		$sql .= " AND product_publish = 'Y'";
}

if (!empty($keyword))
{
	$sql .= " AND (";
	$sql .= "p.product_name LIKE '%$keyword%'"." OR ";
	$sql .= "p.vendor_id LIKE '%$keyword%'"." OR ";
	$sql .= "p.product_sku LIKE '%$keyword%'"." OR ";
	$sql .= "p.product_s_desc LIKE '%$keyword%'"." OR ";
	$sql .= "p.product_desc LIKE '%$keyword%'";
	$sql .= ")";
}

//product_category_xref table
if (!empty($category_id)){
	$sql .= " AND pcx.category_id = " . $category_id;
}
//product_type table
if (!empty($product_type_id)) {
	$sql .= " AND ptx.product_type_id = ". $product_type_id;
}

if (((($search_type == "price") || ($search_type == "withoutprice")) && (!empty($search_date))) || ($orderby == "product_price")){
	$sql .= " GROUP BY p.product_id,product_name,product_sku,vendor_id, product_publish,product_parent_id ";
}

/*ORDERBY = product_list|product_name|product_price|product_sku|product_cdate|product_sales*/


$searchSql .= $sql . " ORDER BY ";
if ($orderby == "product_name"){$searchSql .= "p.product_name ".$sequence;}
elseif ($orderby == "product_price"){$searchSql .= "pp.product_price ".$sequence;}
elseif ($orderby == "product_sku"){$searchSql .= "p.product_sku ".$sequence;}
elseif ($orderby == "product_cdate"){$searchSql .= "p.cdate ".$sequence;}

$searchSql .= ", product_publish DESC";
$countSql .= $sql . ";";


/*echo "COUNT SQL IS:".$countSql."<br/>";
echo "QUERY SQL IS:".$searchSql."<br/>";
*/

?>

	<!--Product List Header-->
	<!---->
	<?php
		echo '<div class="header" style="background: transparent url(';
		echo VM_THEMEURL.'images/administration/dashboard/product_code.png';
		echo ') no-repeat scroll 0% 0%; -moz-background-clip: -moz-initial; ';
		echo '-moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;
			text-indent: 30px; line-height: 50px; float:left;">';
	?>

		<h2 style="margin: 0px;"><?php echo $VM_LANG->_('VM_PRODUCT_LIST_LBL'); ?></h2>

	</div>

	<div style="float:right;">

		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">

			<!--date filter-->
			<div align="left">
				 <?php echo $VM_LANG->_('VM_PRODUCT_LIST_SEARCH_BY_DATE') ?>&nbsp;
				 <select class="inputbox" name="search_type">
					<option selected value="none"></option>
					<option value="product">
						<?php echo $VM_LANG->_('VM_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT') ?>
					</option>
					<option value="price" <?php echo $search_type == "price" ? 'selected="selected"' : ''; ?>>
						<?php echo $VM_LANG->_('VM_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE') ?>
					</option>
					<option value="withoutprice" <?php echo $search_type == "withoutprice" ? 'selected="selected"' : ''; ?>>
						<?php echo $VM_LANG->_('VM_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE') ?>
					</option>
				</select>
				<select class="inputbox" name="search_order">
					<option value="&lt;">
						<?php echo $VM_LANG->_('VM_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE') ?>
					</option>
					<option value="&gt;" <?php echo $search_order == ">" ? 'selected="selected"' : ''; ?>>
						<?php echo $VM_LANG->_('VM_PRODUCT_LIST_SEARCH_BY_DATE_AFTER') ?>
					</option>
				</select>
				<input class="inputbox" type="text" size="20" name="search_date"
					value="<?php echo vmGet($_REQUEST, 'search_date', $nowstring) ?>" />

			</div>
			<!--//date filter-->

			<!--in/low stock, on special, published, unpublished-->
			<div align="left" style="margin-top: 10px;">
				<?php echo $VM_LANG->_('VM_ALL_STOCK'); ?>:<input type="radio" name="stock_limit" value="all" <?php if ($stockLimit == "all") echo "checked"; ?> />&nbsp;&nbsp;
				<?php echo $VM_LANG->_('VM_PRODUCT_FORM_IN_STOCK') ?>: <input type="radio" name="stock_limit" value="instock" <?php if ($stockLimit == "instock") echo "checked"; ?> />&nbsp;&nbsp;
				<?php echo $VM_LANG->_('VM_LOW_STOCK'); ?>: <input type="radio" name="stock_limit" value="lowstock" <?php if ($stockLimit == "lowstock") echo "checked"; ?> />&nbsp;&nbsp;
				<?php echo $VM_LANG->_('VM_CART_NOSTOCK'); ?>:<input type="radio" name="stock_limit" value="nostock" <?php if ($stockLimit == "nostock") echo "checked"; ?> />
			</div>

			<div align="left" style="margin-top: 10px;">
				<?php echo $VM_LANG->_('VM_PRODUCT_FORM_SPECIAL') ?>: <input type="checkbox" name="on_special" <?php if ($filterOnSpecial == "on") echo "checked"; ?> />
				&nbsp;&nbsp;&nbsp;
				<?php echo $VM_LANG->_('CMN_PUBLISHED') ?>: <input type="checkbox" name="published" <?php if ($showPublishedItems == 1) echo "checked"; ?> />
				&nbsp;
				<?php echo $VM_LANG->_('CMN_UNPUBLISHED') ?>: <input type="checkbox" name="unpublished" <?php if ($showUnPublishedItems == 1) echo "checked"; ?> />
			</div>

			<!--word filter-->
			<div align="left" style="margin-top: 10px;">
				<?php echo $VM_LANG->_('VM_PRODUCT_NAME_TITLE'); ?>
				<input class="inputbox" size="50" name="keyword" value="<?php echo $keyword; ?>" type="text">
			</div>
			<!--//word filter-->

			<!--Category Filter-->
			<div align="left" style="margin-top: 10px;">
				<div style="float:left;">
						<?php echo $VM_LANG->_('VM_FILTER') ?>:
						<select
							class="inputbox"
							id="category_id"
							name="category_id"
							onchange="this.form.submit();"
							<option value="">
								<?php echo $VM_LANG->_('SEL_CATEGORY') ?>
							</option>
						<?php $ps_product_category->list_tree( $category_id ); ?>
						</select>

						<?php

							echo vmToolTip( $VM_LANG->_('VM_PRODUCT_LIST_REORDER_TIP') );

						?>

						<!--SORT BY-->

						&nbsp;&nbsp;
						<?php echo $VM_LANG->_('VM_ORDERBY') ?>:

						<select class="inputbox" name="orderby">

							<option value="product_name" ><?php echo $VM_LANG->_('VM_SELECT') ?></option>

							<option value="product_name" <?php echo $orderby=="product_name" ? "selected=\"selected\"" : "";?>>
							<?php echo $VM_LANG->_('VM_PRODUCT_NAME_TITLE') ?></option>

							<option value="product_price" <?php echo $orderby=="product_price" ? "selected=\"selected\"" : "";?>>
							<?php echo $VM_LANG->_('VM_PRODUCT_PRICE_TITLE') ?></option>

							<option value="product_sku" <?php echo $orderby=="product_sku" ? "selected=\"selected\"" : "";?>>
							<?php echo $VM_LANG->_('VM_CART_SKU') ?></option>

							<option value="product_cdate" <?php echo $orderby=="product_cdate" ? "selected=\"selected\"" : "";?>>
							<?php echo $VM_LANG->_('VM_LATEST') ?></option>

							<!--<option value="product_sales" <?php echo $orderby=="product_sales" ? "selected=\"selected\"" : "";?>>
							<?php echo $VM_LANG->_('VM_SALES') ?></option>-->

						</select>

						<select class="inputbox" name="sequence">

							<option value="ASC" <?php echo $sequence=="ASC" ? "selected=\"selected\"" : "";?>>
								<?php echo $VM_LANG->_('VM_PARAMETER_SEARCH_ASCENDING_ORDER'); ?>
							</option>
						    <option value="DESC" <?php echo $sequence=="DESC" ? "selected=\"selected\"" : "";?>>
						    	<?php echo $VM_LANG->_('VM_PARAMETER_SEARCH_DESCENDING_ORDER'); ?>
							</option>

						</select>

						<?php

						 	$selected = Array( "selected=\"selected\"", "" );
		  					$asc_desc = Array( "DESC", "ASC" );
							$icon = "sort_asc.png";/*|$icon = "sort_desc.png";*/

							echo mm_writeWithJS('&nbsp;<input type="hidden"
								name="DescOrderBy"
								value="'.$asc_desc[0].'" />
								<a href="javascript: document.order.DescOrderBy.value=\''.$asc_desc[1].'\'; document.order.submit()">
								<img src="'. $mosConfig_live_site."/images/M_images/$icon"  .'" border="0" alt="'. $VM_LANG->_('VM_PARAMETER_SEARCH_'.$asc_desc[0].'ENDING_ORDER') .'"
									title="'.$VM_LANG->_('VM_PARAMETER_SEARCH_'.$asc_desc[0].'ENDING_ORDER') .'" width="12" height="12" /></a>',
							      '<select class="inputbox" name="DescOrderBy">
						            <option '.$selected[0].' value="DESC">'.$VM_LANG->_('VM_PARAMETER_SEARCH_DESCENDING_ORDER').'</option>
						            <option '.$selected[1].' value="ASC">'.$VM_LANG->_('VM_PARAMETER_SEARCH_ASCENDING_ORDER').'</option>
							      </select>
							      <input class="button" type="submit" value="'.$VM_LANG->_('VM_SUBMIT').'" />');

						?>

				</div>
				<br/>
				<!--SUBMIT-->
				<div align="right" style="float:right;">
					<input class="button" type="submit" name="search"
						value="<?php echo $VM_LANG->_('VM_SEARCH_TITLE')?>" />
				</div>
				<br style="clear:both;" />

			</div>
			<!--//Category Filter-->

		<!--</form>-->

		<?php

			$formObj = new formFactory();
			$formObj->finishForm("", "product.product_list");

		?>

	</div>

	<br style="clear:both" />

	&nbsp;

<?php

$db = new ps_DB();
$db->query($countSql);
$db->next_record();
$num_rows = $db->f("num_rows");

$GLOBALS['vmLogger']->debug('The query in product.product_list: '.$num_rows);

// Create the Page Navigation
$pageNav = new vmPageNav( $num_rows, $limitstart, $limit );

$limitstart = $pageNav->limitstart;

$searchSql .= " LIMIT $limitstart, " . $limit;

if ($num_rows > 0) {
	$db->query($searchSql);
	$num_rows = $db->num_rows();
}

// Create the List Object with page navigation
$listObj = new listFactory( $pageNav );

// start the list table
$listObj->startTable();

// these are the columns in the table
$columns = Array(  '#' => '',
				"<input type=\"checkbox\" name=\"toggle\" value=\"\" onclick=\"checkAll(".$num_rows.")\" />" => "",
				$VM_LANG->_('VM_PRODUCT_LIST_NAME') => "width=\"30%\"",
				$VM_LANG->_('VM_PRODUCT_LIST_VENDOR_NAME') => "width=\"30%\"",
				$VM_LANG->_('VM_PRODUCT_LIST_MEDIA') => 'width="5%"',
				$VM_LANG->_('VM_PRODUCT_LIST_SKU') => "width=\"15%\"",
				$VM_LANG->_('VM_PRODUCT_PRICE_TITLE') => "width=\"10%\"",
				$VM_LANG->_('VM_CATEGORY') => "width=\"15%\"" );

// Only show reordering fields when a category ID is selected!
if( $category_id ) {
	$columns[$VM_LANG->_('VM_FIELDMANAGER_REORDER')] ="width=\"5%\"";
	$columns[vmCommonHTML::getSaveOrderButton( $num_rows, 'changeordering' )] ='width="8%"';
}
$columns[$VM_LANG->_('VM_MANUFACTURER_MOD')] ="width=\"10%\"";
$columns[$VM_LANG->_('VM_REVIEWS')] ="width=\"10%\"";
$columns[$VM_LANG->_('VM_PRODUCT_LIST_PUBLISH')] ="";
$columns[$VM_LANG->_('VM_PRODUCT_CLONE')] = "";
$columns[$VM_LANG->_('E_REMOVE')] = "width=\"5%\"";
$columns['Id'] = '';

$listObj->writeTableHeader( $columns );

if ($num_rows > 0) {

	$i = 0;
	$db_cat = new ps_DB;
	$dbtmp = new ps_DB;

	while ($db->next_record()) {

		$listObj->newRow();

		// The row number
		$listObj->addCell( $pageNav->rowNumber( $i ) );

		// The Checkbox
		$listObj->addCell( vmCommonHTML::idBox( $i, $db->f("product_id"), false, "product_id" ) );

		$link = $_SERVER['PHP_SELF'] . "?page=$modulename.product_form&limitstart=$limitstart&keyword=".urlencode($keyword) .
						"&product_id=" . $db->f("product_id")."&product_parent_id=".$product_parent_id;
		if( $vmLayout != 'standard' ) {
		$link .= "&no_menu=1&tmpl=component";
		$link = defined('_VM_IS_BACKEND')
						? str_replace('index2.php', 'index3.php', str_replace('index.php', 'index3.php', $link ))
						: str_replace('index.php', 'index2.php', $link );
		}
		$link = $sess->url( $link );

		$text = shopMakeHtmlSafe($db->f("product_name"));

		// The link to the product form / to the child products
		if( $vmLayout == 'standard') {
			$tmpcell = vmCommonHTML::hyperLink( $link, $text, '', 'Edit: '.$text );
		} else {
			$tmpcell = vmCommonHTML::hyperLink($link, $text, '', 'Edit: '.$text, 'onclick="parent.addSimplePanel( \''.$db->getEscaped($db->f("product_name")).'\', \''.$link.'\' );return false;"');
		}
		if( $ps_product->parent_has_children( $db->f("product_id") ) ) {
			$tmpcell .= "&nbsp;&nbsp;&nbsp;<a href=\"";
			$link = $sess->url($_SERVER['PHP_SELF'] . "?page=$modulename.product_list&product_parent_id=" . $db->f("product_id"));
			if( $vmLayout != 'standard' ) {
				$link .= "&no_menu=1&tmpl=component";
				$link = defined('_VM_IS_BACKEND')
							? str_replace('index2.php', 'index3.php', str_replace('index.php', 'index3.php', $link ))
							: str_replace('index.php', 'index2.php', $link );
			}
			$tmpcell .= $link;
			$tmpcell .=  "\">[ ".$VM_LANG->_('VM_PRODUCT_FORM_ITEM_INFO_LBL'). " ]</a>";
		}
		$listObj->addCell( $tmpcell );

		//Product Vendor nick by Max Milbers
		$product_vendor_id = $db->f("vendor_id");
		if($product_vendor_id==0){
			$listObj->addCell( "Set a nick for this vendor!" );
		}else{
			$dbtmp = ps_vendor::get_vendor_fields($product_vendor_id, array("vendor_name"),"");
			if(empty($dbtmp)){
				echo("product.product_list ps_vendor::get_vendor_fields for vendor_name failed ");
			}
			$listObj->addCell( $dbtmp->f("vendor_name") );
		}

		// Product Media Link
		$numFiles = ps_product_files::countFilesForProduct($db->f('product_id'));
		if( $db->f('product_full_image')) $numFiles++;
		if( $db->f('product_thumb_image')) $numFiles++;
		$link = $sess->url( $_SERVER['PHP_SELF']. '?page=product.file_list&product_id='.$db->f('product_id').'&no_menu=1' );
		$link = defined('_VM_IS_BACKEND')
						? str_replace('index2.php', 'index3.php', str_replace('index.php', 'index3.php', $link ))
						: str_replace('index.php', 'index2.php', $link );
		$text = '<img src="'.$mosConfig_live_site.'/includes/js/ThemeOffice/media.png" align="middle" border="0" />&nbsp;('.$numFiles.')';
		$tmpcell = vmPopupLink( $link, $text, 800, 540, '_blank', '', 'screenX=100,screenY=100' );
		$listObj->addCell( $tmpcell );

		// The product sku
		$listObj->addCell( $db->f("product_sku") );

		// The product Price
		$price = $ps_product->getPriceByShopperGroup( $db->f('product_id'), '');
		$tmp_cell = '<span class="editable priceform">'.$GLOBALS['CURRENCY_DISPLAY']->getValue( $price['product_price']).' '.$price['product_currency'];
		$tmp_cell .= '&nbsp;&nbsp;&nbsp;</span>';

		$listObj->addCell( $tmp_cell, 'id="'.$db->f('product_id').'" onclick="showPriceForm(this.id)" title="'.$VM_LANG->_('VM_PRICE_FORM_LBL').'"' );

		// The Categories or the parent product's name
		$tmpcell = "";
		if( empty($product_parent_id) ) {
			$db_cat->query("SELECT #__{vm}_category.category_id, category_name FROM #__{vm}_category,#__{vm}_product_category_xref
							WHERE #__{vm}_category.category_id=#__{vm}_product_category_xref.category_id
							AND #__{vm}_product_category_xref.product_id='".$db->f("product_id") ."'");
			while($db_cat->next_record()) {
				$tmpcell .= $db_cat->f("category_name") . "<br/>";
			}
		}
		else {
			$tmpcell .= $VM_LANG->_('VM_CATEGORY_FORM_PARENT') .": <a href=\"";
			$url = $_SERVER['PHP_SELF'] . "?page=$modulename.product_form&limitstart=$limitstart&keyword=".urlencode($keyword)."&product_id=$product_parent_id";
			$tmpcell .= $sess->url( $url );
			$tmpcell .= "\">".$ps_product->get_field($product_parent_id,"product_name"). "</a>";
		}
		$listObj->addCell( $tmpcell );

		if( $category_id ) {
			$tmp_cell = "<div align=\"center\">"
			. $pageNav->orderUpIcon( $i, $i > 0, "orderup", $VM_LANG->_('CMN_ORDER_UP'), $page, "changeordering" )
			. "\n&nbsp;"
			. $pageNav->orderDownIcon( $i, $db->num_rows(), $i-1 <= $db->num_rows(), 'orderdown', $VM_LANG->_('CMN_ORDER_DOWN'), $page, "changeordering" )
			. "</div>";
			$listObj->addCell( $tmp_cell );

			$listObj->addCell( vmCommonHTML::getOrderingField( $db->f('product_list') ) );
		}
		$listObj->addCell( $ps_product->get_mf_name($db->f("product_id")) );

		$db_cat->query("SELECT count(*) as num_rows FROM #__{vm}_product_reviews WHERE product_id='".$db->f("product_id")."'");
		$db_cat->next_record();
		if ($db_cat->f("num_rows")) {
			$link = $_SERVER["PHP_SELF"]."?option=com_virtuemart&page=product.review_list&product_id=".$db->f("product_id");
			if( $vmLayout != 'standard' ) {
				$link .= "&no_menu=1&tmpl=component";
				$link = defined('_VM_IS_BACKEND')
							? str_replace('index2.php', 'index3.php', str_replace('index.php', 'index3.php', $link ))
							: str_replace('index.php', 'index2.php', $link );
			}
			$tmpcell = $db_cat->f("num_rows")."&nbsp;";
			$tmpcell .= "<a href=\"".$link."\">";
			$tmpcell .= "[".$VM_LANG->_('VM_SHOW')."]</a>";
		}
		else {
			$link = $sess->url( $_SERVER['PHP_SELF'].'?page=product.review_form&product_id='.$db->f('product_id'));
			if( $vmLayout != 'standard' ) {
				$link .= "&no_menu=1&tmpl=component";
				$link = defined('_VM_IS_BACKEND')
							? str_replace('index2.php', 'index3.php', str_replace('index.php', 'index3.php', $link ))
							: str_replace('index.php', 'index2.php', $link );
			}
			$text = '['.$VM_LANG->_('VM_REVIEW_FORM_LBL').']';
			$tmpcell = " - <a href=\"$link\">$text</a>\n";
		}
		$listObj->addCell( $tmpcell );

		$tmpcell = "<a href=\"". $sess->url( $_SERVER['PHP_SELF']."?page=product.product_list&category_id=$category_id&product_id=".$db->f("product_id")."&func=changePublishState" );
		if ($db->f("product_publish")=='N') {
			$tmpcell .= "&task=publish\">";
		}
		else {
			$tmpcell .= "&task=unpublish\">";
		}
		$tmpcell .= vmCommonHTML::getYesNoIcon( $db->f("product_publish"), $VM_LANG->_('CMN_PUBLISH'), $VM_LANG->_('CMN_UNPUBLISH') );
		$tmpcell .= "</a>";
		$listObj->addCell( $tmpcell );

		$tmpcell = "<a title=\"".$VM_LANG->_('VM_PRODUCT_CLONE')."\" onmouseout=\"MM_swapImgRestore();\"  onmouseover=\"MM_swapImage('copy_$i','','". IMAGEURL ."ps_image/copy_f2.gif',1);\" href=\"";
		$url = $_SERVER['PHP_SELF'] . "?page=$modulename.product_form&clone_product=1&limitstart=$limitstart&keyword=".urlencode($keyword)."&product_id=" . $db->f("product_id");
		if( !empty($product_parent_id) )
		$url .= "&product_parent_id=$product_parent_id";
		$tmpcell .= $sess->url( $url );
		$tmpcell .= "\"><img src=\"".IMAGEURL."/ps_image/copy.gif\" name=\"copy_$i\" border=\"0\" alt=\"".$VM_LANG->_('VM_PRODUCT_CLONE')."\" /></a>";
		$listObj->addCell( $tmpcell );

		$listObj->addCell( $ps_html->deleteButton( "product_id", $db->f("product_id"), "productDelete", $keyword, $limitstart ) );

		$listObj->addCell( $db->f('product_id') );

		$i++;

	}

}

$listObj->writeTable();

$listObj->endTable();

/*Limit last search to drop down list */
$listObj->writeSearchHeader("", "", "product", "product_list", true);

/*Build a filter string for use with the writeFooter, based on previously entered data from form at top of page*/
$filter = "&filtered=$filtered";
$filter .= "&product_parent_id=$product_parent_id";
$filter .= "&category_id=$category_id";
$filter .= "&product_type_id=$product_type_id";

$filter .= "&search_type=$search_type";
$filter .= "&search_order=$search_order";
$filter .= "&search_date=$search_date";
$filter .= "&stock_limit=$stockLimit";

if ($showUnPublishedItems == 1){$filter .= "&unpublished=on";}
if ($showPublishedItems == 1){$filter .= "&published=on";}
if ($filterOnSpecial == 1){$filter .= "&on_special=on";}

$filter .= "&keyword=$keyword";

$listObj->writeFooter( $keyword,  $filter);

$path = defined('_VM_IS_BACKEND' ) ? '/administrator/' : '/';

?>
<script type="text/javascript">
var priceDlg = null;
function showPriceForm(prodId) {

    // define some private variables
    var showBtn;
	sUrl = '<?php $sess->purl( $mm_action_url .'index3.php?page=product.ajax_tools&task=getPriceForm&no_html=1', false, false, true ) ?>&product_id=' + prodId;
	callback = { success : function(o) {

				        priceDlg = Ext.Msg.show({
		                    width:300,
		                    height:250,
				           title:'<?php echo $VM_LANG->_('VM_PRICE_FORM_LBL') ?>',
				           msg: o.responseText,
				           buttons: Ext.Msg.OKCANCEL,
				           fn: handleResult
				       });
	}};
	Ext.Ajax.request({method:'GET', url: sUrl, success: callback.success });
}

function handleResult( btn ) {
	switch( btn ) {
		case 'ok':
			submitPriceForm( 'priceForm' );
			break;
		case 'cancel':
			break;
	}
}
function submitPriceForm(formId) {
    // define some private variables
    var dialog, showBtn, hideTask;

    function showDialog( content ) {
    	var msgbox = Ext.Msg.show( {
            		title: '<?php echo $VM_LANG->_('PEAR_LOG_NOTICE') ?>',
            		msg: content,
            		autoCreate: true,
                    width:300,
                    height:150,
                    fn: msgBoxClick,
                    modal: false,
                    resizable: false,
                    buttons: Ext.Msg.OK,
                    shadow:true,
                    animEl:Ext.get( 'vm-toolbar' )
            });
	    // This Dialog shows the result of the price update. We want it to autohide after 3000 seconds
	    // Here we need to use "DelayedTask" because we need to cancel the autohide function if the user clicked
	    // the dialog away
	    hideTask = new Ext.util.DelayedTask(msgbox.hide, msgbox);
	    hideTask.delay( 3000 );
    }

    var msgBoxClick = function(result) {
    	if( result == 'ok' ) {
    		hideTask.cancel();
    	}
    };
    // return a public interface
    var callback = {
    	success: function(o) {
    		//Ext.DomHelper.insertHtml( document.body, o.responseText );

    		showDialog( o.responseText );
    	},
    	failure: function(o) {
    		Ext.Msg.alert('Error!', 'Something went wrong while posting the form data (possibly 404 error).');
    	},
        upload : function(o){
            //Ext.DomHelper.insertHtml( 'beforeEnd', document.body, o.responseText );
    		showDialog( o.responseText );
        }
    };

   	Ext.Ajax.request({method:'POST', url: '<?php echo $_SERVER['PHP_SELF'] ?>', success: callback.success, failure: callback.failure, form: formId});

}
function cancelPriceForm(id) {
	updatePriceField( id );
}
function updatePriceField( id ) {
	sUrl = '<?php  $sess->purl( $mm_action_url .'index3.php?option=com_virtuemart&no_html=1&page=product.ajax_tools&task=getpriceforshoppergroup&formatPrice=1', false, false, true ) ?>&product_id=' + id;
	callback = { success : function(o) { Ext.get("priceform-dlg").innerHTML = o.responseText;	}};
	Ext.Ajax.request({method:'GET', url: sUrl, success:callback.success });
}
function reloadForm( parentId, keyName, keyValue ) {
	sUrl = '<?php  $sess->purl( $mm_action_url .'index3.php?option=com_virtuemart&no_html=1&page=product.ajax_tools&task=getPriceForm', false, false, true ) ?>&product_id='+parentId+'&'+keyName+'='+keyValue;
	callback = { success : function(o) { priceDlg.updateText( o.responseText) }};
	Ext.Ajax.request({method:'GET', url: sUrl, success:callback.success });
}
</script>
<?php
$formName = uniqid('priceForm');
?>
<div id="priceform-dlg"></div>
