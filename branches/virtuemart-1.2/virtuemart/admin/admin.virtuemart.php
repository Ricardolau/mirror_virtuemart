<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
*
* @version $Id$
* @package VirtueMart
* @subpackage core
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

defined( '_VM_IS_BACKEND' ) or define( '_VM_IS_BACKEND', '1' );

include( dirname(__FILE__).'/compat.joomla1.5.php');

global $VM_LANG;

//* INSTALLER SECTION *
include( $mosConfig_absolute_path.'/administrator/components/com_virtuemart/install.virtuemart.php' );
// * END INSTALLER SECTION *

// Load the virtuemart main parse code
require( $mosConfig_absolute_path.'/components/'.$option.'/virtuemart_parser.php' );

$task = vmGet( $_GET, 'task', null);
switch( $task ) {
	case 'extlayout':
		include( $mosConfig_absolute_path.'/components/'.$option.'/js/extlayout.js.php');
		exit;
	case 'toolbar':
		include( ADMINPATH.'toolbar.php');
		exit;
}
// Include The Version File
include_once( ADMINPATH. 'version.php' );
if( !isset( $VMVERSION ) || !is_object( $VMVERSION ) ) {
	$VMVERSION =& new vmVersion();
}

// Start an output buffer if none exists
ob_get_level() or ob_start();

// pages, which are called through index3.php are PopUps, they should not need a menu (but it can be overridden by $_REQUEST['no_menu'])
$no_menu_default = strstr( $_SERVER['PHP_SELF'], 'index3.php') ? 1 : 0;
$no_menu = $_REQUEST['no_menu'] = vmGet( $_REQUEST, 'no_menu', $no_menu_default );

// Display the toolbar?
$no_toolbar = vmGet( $_REQUEST, 'no_toolbar', 0 );

// Display just the naked page without toolbar, menu and footer?
$only_page_default = strstr( $_SERVER['PHP_SELF'], 'index3.php') ? 1 : 0;
$only_page = $_REQUEST['only_page'] = vmGet( $_REQUEST, 'only_page', $only_page_default );

if( empty( $page ) || empty( $_REQUEST['page'])) {
	if( !empty($_REQUEST['amp;page'])) {
		$page = $_REQUEST['amp;page'];
		foreach( $_REQUEST as $key => $val ) {
			if( strstr( $key, 'amp;')) {
				$key = str_replace( 'amp;', '', $key );
				$_REQUEST[$key] = $val;
			}
		}
	}
	else {
		$page = vmget( $_SESSION, 'last_page', 'store.index' );
		
	}
}
$limit = $vm_mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $mosConfig_list_limit );
$limitstart = $vm_mainframe->getUserStateFromRequest( "view{$page}{$product_id}{$category_id}limitstart", 'limitstart', 0 );

if (defined('_DONT_VIEW_PAGE') && !isset($install_type) ) {
    echo "<script type=\"text/javascript\">alert('$error. Your permissions: ".$_SESSION['auth']['perms']."')</script>\n";
}

// renew Page-Information
if( $pagePermissionsOK ) {
	$my_page= explode ( '.', $page );
	$modulename = $my_page[0];
	$pagename = $my_page[1];
}

// Include the Stylesheet
$vm_mainframe->addStyleSheet( VM_THEMEURL.'admin.styles.css' );
$vm_mainframe->addStyleSheet( VM_THEMEURL.'theme.css' );
$vm_mainframe->addScript( $mosConfig_live_site.'/components/'.VM_COMPONENT_NAME.'/js/functions.js' );


if( $only_page != 1 ) {
	
	vmCommonHTML::loadExtjs();
	$vm_mainframe->addScript( $_SERVER['PHP_SELF'].'?option='.$option.'&task=extlayout' );
	$phpscript_url = str_replace( 'index2.php', 'index3.php', str_replace('index.php', 'index3.php', $_SERVER['PHP_SELF']));

	echo '<iframe id="vmPage" src="'.$phpscript_url.'?option=com_virtuemart&amp;page='.$_SESSION['last_page'].'&amp;only_page=1&amp;no_menu=1" style="width:100%; height: 100%; overflow:auto; border: none;padding-left:4px;" name="vmPage"></iframe>';

} else {

	
	echo '<div id="vm-toolbar"></div>';

	if( $no_toolbar != 1 ) {
		include( ADMINPATH.'toolbar.virtuemart.php');
	}
	echo '<div id="vmPage">';
	
	// Load PAGE
	if( !$pagePermissionsOK ) {
		$error = $VM_LANG->_('PHPSHOP_MOD_NO_AUTH');
		include( PAGEPATH. ERRORPAGE .'.php');
		return;
	}
	
	if(file_exists(PAGEPATH.$modulename.".".$pagename.".php")) {
		
		if( $only_page ) {
			if( @$_REQUEST['format'] == 'raw' ) while( @ob_end_clean());
			if( $func ) echo vmCommonHTML::getSuccessIndicator( $ok, $vmDisplayLogger );

			include( PAGEPATH.$modulename.".".$pagename.".php" );
			if( @$_REQUEST['format'] == 'raw' ) {
				$vm_mainframe->close(true);
			}
		} else {
			include( PAGEPATH.$modulename.".".$pagename.".php" );
		}
	}
	else {
		include( PAGEPATH.'store.index.php' );
	}
	
	if( DEBUG == '1' && $no_menu != 1 ) {
	        // Load PAGE
		include( PAGEPATH."shop.debug.php" );
	}
	
	echo '</div>';
	if( stristr($page, '_list') && $page != 'product.file_list' ) {
		echo vmCommonHTML::scriptTag('', 'function listItemClicked(e){
       // find the <a> element that was clicked
       var a = e.getTarget("a");
      try {
        if(a && !a.onclick && a.href.indexOf("javascript:") == -1 && a.href.indexOf("func=") == -1 ) {
            e.preventDefault();
            parent.addSimplePanel( a.title != "" ? a.title : a.innerHTML, a.href );
   		}  
    } catch(e) {}
}
Ext.get("vmPage").mon("click", listItemClicked );');
	}
}
// Render the script and style resources into the document head
$vm_mainframe->close();

?>