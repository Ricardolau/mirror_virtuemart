<?php 
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version $Id: menuBar.class.php 1510 2008-08-08 19:11:42Z soeren_nb $
* @package VirtueMart
* @subpackage classes
* @copyright Copyright (C) 2008 soeren - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/

class vmMenu {
	/**
	 * Assembles the Adminsitrator Menu Items into an array
	 *
	 * @param int $filter_by_module_id
	 * @return array
	 */
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
}
?>