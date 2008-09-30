<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
* This file provides the Ext Layout for VirtueMart Administration
* It is located here, because this provides an easy way to include it using the standard VirtueMart Call
* and allows to keep the current Session.
*
* @version $Id: compat.joomla1.5.php 1133 2008-01-08 20:40:56Z gregdev $
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

while(@ob_end_clean());

header( 'Content-Type: application/x-javascript');
$module_id = vmGet($_REQUEST, 'module_id');

require_once( CLASSPATH.'menu.class.php' );
$menu_items = vmMenu::getAdminMenu($module_id);
include( ADMINPATH.'version.php');

echo '
if( typeof Ext == "undefined" ) {
	document.location="index2.php?option='.VM_COMPONENT_NAME.'&usefetchscript=0";
}
// Check if this Window is a duplicate and opens in an iframe
if( typeof parent.Ext !== "undefined" && typeof parent.loadPage == "function" ) {
	// then load the pure page, not again the whole VirtueMart Admin interface
	parent.loadPage();
}
function showButtonMenu( btn, e ) {
	btn.showMenu();
}
function hideButtonMenu( btn, e ) {
	btn.hideMenu();
}';
echo '
function vmLayoutInit() {
	if(!Ext.get("vmPage") ) {
		return;
	}
    try{ Ext.get("header-box").hide(); } catch(e) {} // Hide the Admin Menu under Joomla! 1.5
    try{ Ext.get("wrapper").hide(); } catch(e) {} // Hide the Admin Menu under Joomla! 1.0
            
    // initialize state manager, we will use cookies
	Ext.state.Manager.setProvider(new Ext.state.CookieProvider());
	';
	$html = 'var toolbarItems = [';
	$i = 0;
	$itemCount = count( $menu_items );
	foreach( $menu_items as $item ) {
		$html .= '{ xtype:"tbbutton",
		                //listeners: {"mouseover": { fn: showButtonMenu }},
	                    text:"'.$item['title'].'",
			           menu: new Ext.menu.Menu({
			            	items: [';
		$j = 0;
		$linkCount = count( $item['items'] );
		foreach( $item['items'] as $link ) {
			if( $link['name'] == '-' ) {
				$html .= "'-'";
			} else {
				$url = strncmp($link['link'], 'http', 4 ) === 0 ? $link['link'] : $sess->url('index2.php?pshop_mode=admin&'.$link['link'], false, false );
				$title = isset( $link['title'] ) ? ' title="'.$link['title'].'"' : '';
				$html .= '{ text: "'.$VM_LANG->_($link['name']).'",
								itemCls: "'.$link['icon_class'].'",
								style: "padding-left: 0px;font-weight: bold;background-repeat: no-repeat;",
								handler: new Function("loadPage( \''.$url.'\' )")
							}';
			}
			if( ++$j < $linkCount ) $html .= ',';
		}
		$html .= ']
					})
					}';
		if( ++$i < $itemCount ) $html .= ',"-",';
	}
	$html .= '];';
	echo $html;
	
	echo '
    var viewport = new Ext.Viewport({
			layout:"border",
			items:[{
			    region:"center",
			    layout:"fit",
			    items:[{
			        layout:"fit",
			        items:[{
							xtype:"tabpanel",
					        deferredRender:false,
					        activeTab:0,
					        id: "center-panel",
					    	listeners: {
							    "tabchange" : {
							        fn: function(tabpanel, panel) { parent.document.title=panel.title },
							        scope: this
							    }
							 },
					        items:[{
					        	xtype: "panel",
								layout: "fit",
								id: "vmpage-panel",
								title: "'.addslashes($VM_LANG->_('VM_ADMIN_PANELTITLE')).'",
								tbar: [{ xtype: "tbspacer" }],
								closable:false,
								contentEl: "vmPage"
							}]
			              
			          }]
			      }]
			  },{
	        	xtype: "panel",
	        	bbar: toolbarItems,
			    region:"north",
			    height: 105,
			    html:"<div style=\"background: url('.VM_THEMEURL.'images/administration/header_bg.png) repeat-x;\">" +
			    		 "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + 
			    		 "<a href=\"http://virtuemart.net\" target=\"_blank\"><img src=\"'.VM_THEMEURL.'images/administration/header_logo.png\" alt=\"VirtueMart Logo\" /></a>" +
						"<a href=\"index2.php\" title=\"'.$VM_LANG->_('VM_ADMIN_BACKTOJOOMLA').'\" class=\"vmicon vmicon-16-back\" style=\"vertical-align: middle;font-weight:bold;\">'.$VM_LANG->_('VM_ADMIN_BACKTOJOOMLA').'</a>" +
						"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" +
						"</div>"
			  }]
			}
    );
 }';
			
echo '
function loadPage(page){

	if( !page || page == "" ) {
        defaultpage = "index3.php?option=com_virtuemart&page=store.index";
        page = Ext.state.Manager.get( "vmlastpage", defaultpage );
	}
	if( page.indexOf( "virtuemart.net" ) == -1 ) {
        php_self = page.replace(/index2.php/, "index3.php");
        php_self = php_self.replace(/index.php/, "index3.php");
        if( Ext.get("vmPage") ) {
            Ext.get("vmPage").dom.src = php_self + "&only_page=1&no_menu=1";
        }
	} else {
		if( Ext.get("vmPage") ) {
        	Ext.get("vmPage").dom.src = page;
       	}
	}         
    Ext.state.Manager.set("vmlastpage", page );
}
if( Ext.isIE ) {
	Ext.EventManager.addListener( window, "load", vmLayoutInit );
}
else {
	Ext.onReady( vmLayoutInit );
}
';
?>