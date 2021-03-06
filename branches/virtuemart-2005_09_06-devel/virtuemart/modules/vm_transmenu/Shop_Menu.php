<?php
/**
* @version $Id: mod_mbt_transmenu.php
* @copyright (C) 2005 MamboTheme.com
*/
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

class Shop_Menu{
	var $menuObj; 
	var $_params = null;
	var $_db = null;	
	var $children = null;
	var $open = null;
	
	function Shop_Menu( &$database, &$params ){
		$this->_params = $params;
		$this->_db = $database;

		$this->loadMenu();
		$this->createmenuObj();
	}
	
	function createmenuObj (){
			switch ($this->_params->get( 'menutype' )){
				default:
					include_once("transmenu.php");
					$this->menuObj = new TransMenu($this);
				break;
			}
	}
	
	function  loadMenu(){
		global $database, $my, $cur_template, $Itemid;
		global $mosConfig_absolute_path, $mosConfig_live_site, $mosConfig_shownoauth;

		$query  = "SELECT category_id as id, category_parent_id as parent, category_name as name, '' as type,
							CONCAT('index.php?option=com_phpshop&page=shop.browse&category_id=', category_id ) AS link,
							'-1' as browserNav, list_order
								FROM #__pshop_category, #__pshop_category_xref 
								WHERE #__pshop_category.category_publish='Y' 
									AND #__pshop_category.category_id=#__pshop_category_xref.category_child_id 
								ORDER BY name ASC";
		$this->_db->setQuery( $query );
		$rows = $this->_db->loadObjectList( 'id' );

		// establish the hierarchy of the menu
		$this->children = array();
		// first pass - collect children
		foreach ($rows as $v ) {
			$pt = $v->parent;
			$list = @$this->children[$pt] ? $this->children[$pt] : array();
			array_push( $list, $v );
			$this->children[$pt] = $list;
		}
		
		// second pass - collect 'open' menus
		$this->open = array( @$_REQUEST['category_id'] );
	}
		
	function genMenu(){
		$this->beginMenu();
		$this->menuObj->beginMenu();
		$this->genMenuItems (0, 0);
		$this->menuObj->endMenu();
		$this->endMenu();
	}
	
	/*
	$pid: parent id
	$level: menu level
	$pos: position of parent
	*/
	function genMenuItems($pid, $level) {
		if (@$this->children[$pid]) {
			$i = 0;
			foreach ($this->children[$pid] as $row) {
				
				$this->menuObj->genMenuItem( $row, $level, $i);

				// show menu with menu expanded - submenus visible
				$this->genMenuItems( $row->id, $level+1 );
				$i++;
			}
		}
		
	}

	function beginMenu(){
		echo "<!-- Begin menu -->\n";
	}
	function endMenu(){
		echo "<!-- End menu -->\n";
	}
	function hasSubItems($id){
		if (@$this->children[$id]) return true;
		return false;
	}
}
?>
