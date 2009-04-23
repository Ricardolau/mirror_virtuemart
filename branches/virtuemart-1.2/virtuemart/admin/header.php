<?php 
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
* Header file for the shop administration.
* shows all modules that are available to the user in a dropdown menu
*
* @version $Id: header.php 1702 2009-03-15 02:23:33Z rolandd $
* @package VirtueMart
* @subpackage core
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*
* http://virtuemart.net
*/
mm_showMyFileName( __FILE__ );
include_once( ADMINPATH . "version.php" );

global $error, $page, $ps_product, $ps_product_category;
$product_id = vmGet( $_REQUEST, 'product_id' );
$product_parent_id = vmGet( $_REQUEST, 'product_parent_id' );
$module_id = vmGet( $_REQUEST, 'module_id', 0 );

if( is_array( $product_id ) || $page == 'product.product_list' ) {
    $recent_product_id = "";
}
else {
    $recent_product_id = $product_id;
}
        
$mod = array();
$q = "SELECT module_name,module_perms from #__{vm}_module WHERE module_publish='Y' ";
$q .= "AND module_name <> 'checkout' ORDER BY list_order ASC";
$db->query($q);

while ($db->next_record()) {
    if ($perm->check($db->f("module_perms"))) {
        $mod[] = $db->f("module_name");
	}
}

$vm_mainframe->addStyleSheet( $mosConfig_live_site.'/components/com_virtuemart/js/admin_menu/css/menu.css');
$vm_mainframe->addScript($mosConfig_live_site.'/components/com_virtuemart/js/admin_menu/js/virtuemart_menu.js');
$vm_mainframe->addScript($mosConfig_live_site.'/components/com_virtuemart/js/admin_menu/js/nifty.js');
$vm_mainframe->addScript($mosConfig_live_site.'/components/com_virtuemart/js/admin_menu/js/fat.js');
$vm_mainframe->addScript($mosConfig_live_site.'/components/com_virtuemart/js/functions.js');

if( vmIsJoomla('1.0') && strstr( $_SERVER['PHP_SELF'], 'index3.php')) {
	echo $mainframe->getHead();
}




$menu_items = getAdminMenu($module_id);


?>
<div id="vmMenu">
<div id="content-box2">
<div id="content-pad">
  <div class="sidemenu-box">
    <div class="sidemenu-pad">
		<center>
		<?php
		if( !defined('_VM_IS_BACKEND')) {
			echo '<a href="index.php" title="'.$VM_LANG->_('VM_ADMIN_BACKTOJOOMLA').'" class="vmicon vmicon-16-back" style="font-weight:bold;">'.$VM_LANG->_('BACK').'</a>
			<br /><br />'; 
		} else {
			if( $vmLayout == 'standard') {
				$tmpl = vmIsJoomla('1.5', '>=') ? 'component' : '';
				?>
				[ <strong><?php echo $VM_LANG->_('VM_ADMIN_SIMPLE_LAYOUT') ?></strong> | 
				<a href="<?php echo vmGet($_SERVER,'PHP_SELF').'?'.( !empty( $_SERVER['QUERY_STRING'] ) ? vmGet($_SERVER,'QUERY_STRING') : 'option=com_virtuemart&amp;page='.$page ).'&amp;tmpl='.$tmpl ?>&amp;vmLayout=extended"><?php echo $VM_LANG->_('VM_ADMIN_EXTENDED_LAYOUT') ?></a> ]<br />
				<?php
			} else { 
				?>
				[ <a href="<?php echo vmGet($_SERVER,'PHP_SELF').'?'.(!empty( $_SERVER['QUERY_STRING'] ) ? vmGet($_SERVER,'QUERY_STRING') : 'option=com_virtuemart&amp;page='.$page ) ?>&amp;vmLayout=standard"><?php echo $VM_LANG->_('VM_ADMIN_SIMPLE_LAYOUT') ?></a> 
				| <strong><?php echo $VM_LANG->_('VM_ADMIN_EXTENDED_LAYOUT') ?></strong> ]<br /><br />
				<?php
			}
		}
		?>
			<a href="http://virtuemart.net" target="_blank">
				<img align="middle" hspace="15" src="<?php echo IMAGEURL ?>ps_image/menu_logo.gif" alt="VirtueMart Cart Logo" />
			</a>
		
			<h2><?php echo $VM_LANG->_('PHPSHOP_ADMIN')	?></h2>
		</center>
		<div class="status-divider">
		</div>
		<div class="sidemenu" id="masterdiv2">
		<?php
		$modCount = 1;
		foreach( $menu_items as $item ) { ?> 
			<h3 class="title-smenu" title="<?php echo $item['title']; ?>admin" ><?php echo $item['title'] ?></h3>
			<div class="section-smenu">
			<ul><?php 			
			foreach( $item['items'] as $link ) {
				if( $link['name'] == '-' ) {?>
					<li>
					<hr>
					</li><?php 
				} else { 
					$url = strncmp($link['link'], 'http', 4 ) === 0 ? $link['link'] : $sess->url('index2.php?pshop_mode=admin&'.$link['link'], false, false );
					?>
					<li class="item-smenu vmicon <?php echo $link['icon_class']; ?>">
					<a href="<?php echo $url; ?>"><?php echo $VM_LANG->_($link['name']) ? $VM_LANG->_($link['name']) : $link['name'] ?></a>
					</li><?php 
				}
			} ?>
			</ul></div>
			<?php $modCount++;
		} ?></div>
	<div style="text-align:center;">
	<h5><?php echo $VM_LANG->_('VM_YOUR_VERSION') ?></h5>
	<a href="http://virtuemart.net/index2.php?option=com_versions&amp;catid=1&amp;myVersion=<?php echo @$VMVERSION->RELEASE ?>" onclick="javascript:void window.open(this.href, 'win2', 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=580,directories=no,location=no'); return false;" title="<?php echo $VM_LANG->_('VM_VERSIONCHECK_TITLE') ?>" target="_blank">
	<?php echo $VMVERSION->PRODUCT .'&nbsp;' . $VMVERSION->RELEASE .'&nbsp;'. $VMVERSION->DEV_STATUS
	?>
	</a>
	 </div>
      </div>
    </div>
  </div>
</div>
</div>
   
   
<?php 
if( $vmLayout == 'standard') {
	echo '<script type="text/javascript">
		window.onload=function(){
			Fat.fade_all();
			NiftyCheck();
			Rounded("div.sidemenu-box","all","#fff","#f7f7f7","border #ccc");
			Rounded("div.element-box","all","#fff","#fff","border #ccc");
			Rounded("div.toolbar-box","all","#fff","#fbfbfb","border #ccc");
			Rounded("div.submenu-box","all","#fff","#f2f2f2","border #ccc");
	
		}
	</script>';
}
if (!empty($error) && ($page != ERRORPAGE)) {
     echo '<br /><div class="message">'. $error.'</div><br />';
}
$db = new ps_DB(); 

function getAdminMenu($filter_by_module_id=0) {
		global $page, $db, $auth;
		
		$menuArr = array();
		        
		$filter[] = "vmmod.module_publish='Y'";
		$filter[] = "item.published='1'";
		$filter[] = "vmmod.is_admin='1'";
		$filter[] = "FIND_IN_SET('".$auth['perms']."', module_perms )>0";
		if( !empty($filter_by_module_id)) {
			$filter[] = 'vmmod.module_id='.(int)$filter_by_module_id; 
		}
		
		$q = "SELECT vmmod.module_id,module_name,module_perms,id,name,link,depends,icon_class 
					FROM #__{vm}_module vmmod 
					LEFT JOIN #__{vm}_menu_admin item ON vmmod.module_id=item.module_id 
					WHERE  ".implode(' AND ', $filter )."   
					ORDER BY vmmod.list_order,item.ordering";
		$db->query($q);
		
		while( $db->next_record() ) {
		    $menuArr[$db->f('module_name')]['title'] = $GLOBALS['VM_LANG']->_('PHPSHOP_'.strtoupper($db->f('module_name')).'_MOD');
			$menuArr[$db->f('module_name')]['items'][] = array('name' => $db->f('name'),
																		'link' => $db->f('link'),
																		'depends' => $db->f('depends'),
																		'icon_class' => $db->f('icon_class'));
		}
		return $menuArr;
	}
	
	?>
