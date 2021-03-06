<?php
/**
 * Module data access object.
 *
 * @package	VirtueMart
 * @subpackage Module
 * @author Markus �hler 
 * @copyright Copyright (c) 2009 VirtueMart Team. All rights reserved.
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

/**
 * Module table.
 *
 * @author Markus �hler
 * @package	VirtueMart
 */
class TableModule extends JTable
{
	/** @var int primary key */
	var $module_id	 = 0;
	
	/** @var string Name of the module */
	var $module_name = '';
	
	/** @var string Description of the module */
	var $module_description  = '';	
	
	/** @var string Permissions of the module; separated by comma */
  var $module_perms  = '';  
  
	/** @var int Flag if module is active */
	var $published  = 0;				
	
    /** @var int Site module or Admin module */
	var $is_admin  = 0;
	
    /** @var int order in which the module is loaded */
	var $list_order = 0;	


	/**
	 * @author Markus �hler
	 * @param $db A database connector object
	 */
	function __construct(&$db)
	{
		parent::__construct('#__vm_module', 'module_id', $db);
	}


	/**
	 * Validates the module record fields.
	 *
	 * @author Markus �hler
	 * @return boolean True if the table buffer contains valid data, false otherwise.
	 */
	function check() 
	{
    if (!$this->module_name) {
			$this->setError(JText::_('Module records must have a name.'));
			return false;
		} 
		
		return true;
	}

}
// pure php no closing tag
