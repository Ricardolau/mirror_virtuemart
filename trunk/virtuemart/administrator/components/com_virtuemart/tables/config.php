<?php
/**
*
* Configuration table
*
* @package	VirtueMart
* @subpackage Config
* @author RickG
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

/**
 * Coupon table class
 * The class is is used to manage the coupons in the shop.
 *
 * @package	VirtueMart
 * @subpackage Config
 * @author RickG
 */
class TableConfig extends JTable {

	/** @var int Primary key */
	var $config_id			= 0;
	/** @var config */
	var $config       		= 0;
        /** @var boolean */
	var $checked_out	= 0;
	/** @var time */
	var $checked_out_time	= 0;
	/**
	 * @author RickG
	 * @param $db A database connector object
	 */
	function __construct(&$db)
	{
		parent::__construct('#__virtuemart_configs', 'config_id', $db);
	}


	/**
	 * Validates the config record fields.
	 *
	 * @author RickG
	 * @return boolean True if the table buffer is contains valid data, false otherwise.
	 */
	function check()
	{
		return true;
	}

}
// pure php no closing tag
