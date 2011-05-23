<?php
/**
*
* Manufacturer table
*
* @package	VirtueMart
* @subpackage Manufacturer
* @author Patrick Kohl
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* @version $Id$
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

if(!class_exists('VmTable'))require(JPATH_VM_ADMINISTRATOR.DS.'helpers'.DS.'vmtable.php');

/**
 * Manufacturer table class
 * The class is used to manage the manufacturer table in the shop.
 *
 * @package		VirtueMart
 * @author Max Milbers
 */
class TableManufacturers extends VmTable {

	/** @var int Primary key */
	var $virtuemart_manufacturer_id = 0;
	/** @var string manufacturer name */
	var $mf_name = '';
	var $slug		=  '';
	/** @var string manufacturer email */
	var $mf_email = '';
	/** @var string manufacturer description */
	var $mf_desc = '';
    /** @var int Manufacturer category id */
	var $virtuemart_manufacturercategories_id  = 0;
    /** @var string manufacturer URL */
	var $mf_url = '';

	/** @var int published or unpublished */
	var $published = 1;

	/**
	 * @author Max Milbers
	 * @param $db A database connector object
	 */
	function __construct(&$db)
	{
		parent::__construct('#__virtuemart_manufacturers', 'virtuemart_manufacturer_id', $db);

		$this->setUniqueName('mf_name','COM_VIRTUEMART_MANUFACTURER_NAME_ALREADY_EXISTS');
		$this->setLoggable();
		$this->setSlug('mf_name');
	}

}
// pure php no closing tag
