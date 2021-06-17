<?php
defined('_JEXEC') or  die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/*
* Best selling Products module for VirtueMart
* @version $Id: mod_virtuemart_category.php 1160 2014-05-06 20:35:19Z milbo $
* @package VirtueMart
* @subpackage modules
*
* @copyright (C) 2011-2015 The Virtuemart Team
*
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* VirtueMart is Free Software.
* VirtueMart comes with absolute no warranty.
*
* @link ${PHING.VM.MAINTAINERURL}
*----------------------------------------------------------------------
* This code creates a list of the bestselling products
* and displays it wherever you want
*----------------------------------------------------------------------
*/

if (!class_exists( 'VmConfig' )) require(JPATH_ROOT .'/administrator/components/com_virtuemart/helpers/config.php');

if (!class_exists( 'mod_virtuemart_category' )) require(JPATH_ROOT .'/modules/mod_virtuemart_category/helper.php');

VmConfig::loadConfig();

vmJsApi::jQuery();
vmJsApi::cssSite();

/* ID for jQuery dropdown */
$ID = str_replace('.', '_', substr(microtime(true), -8, 8));
$js="jQuery(document).ready(function() {
		jQuery('#VMmenu".$ID." li.VmClose ul').hide();
		jQuery('#VMmenu".$ID." li .VmArrowdown').click(
		function() {

			if (jQuery(this).parent().next('ul').is(':hidden')) {
				jQuery('#VMmenu".$ID." ul:visible').delay(500).slideUp(500,'linear').parents('li').addClass('VmClose').removeClass('VmOpen');
				jQuery(this).parent().next('ul').slideDown(500,'linear');
				jQuery(this).parents('li').addClass('VmOpen').removeClass('VmClose');
			}
		});
	});
" ;

vmJsApi::addJScript('catClose.'.$ID, $js);

$cache = $params->get( 'vmcache', true );
$cachetime = $params->get( 'vmcachetime', 300 );

$active_category_id = vRequest::getInt('virtuemart_category_id', '0');
$category_id = $params->get('Parent_Category_id', 0);
$layout = $params->get('layout','default');

if($cache){
	//$key = 'products'.$category_id.'.'.$max_items.'.'.$filter_category.'.'.$display_style.'.'.$products_per_row.'.'.$show_price.'.'.$show_addtocart.'.'.$Product_group.'.'.$virtuemart_currency_id.'.'.$category_id.'.'.$filter_manufacturer.'.'.$manufacturer_id;
	$cache	= VmConfig::getCache('mod_virtuemart_category');
	$cache->setCaching(1);
	$cache->setLifeTime($cachetime);
	$db = JFactory::getDbo();
	echo $cache->call( array( 'mod_virtuemart_category', 'displayCatsMod' ), $params, $ID, $active_category_id, $category_id, $layout);
	vmdebug('Use cached mod category');
} else {
	echo mod_virtuemart_category::displayCatsMod($params, $ID, $active_category_id, $category_id);
}

echo vmJsApi::writeJS();
?>