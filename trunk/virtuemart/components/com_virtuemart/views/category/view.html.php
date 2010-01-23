<?php
/**
*
* Handle the category view
*
* @package	VirtueMart
* @subpackage 
* @author RolandD
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

// Load the view framework
jimport('joomla.application.component.view');

/**
* Handle the category view
*
* @package VirtueMart
* @author RolandD
*/
class VirtuemartViewCategory extends JView {
	
	public function display($tpl = null) {	  	    
		$mainframe = JFactory::getApplication();
		$pathway = $mainframe->getPathway();
		
		/* Set the titles */
		$mainframe->setPageTitle(JText::_('VM_CATEGORY_DETAILS'));
		
		
		$categoryModel = $this->getModel('category');
		$productModel = $this->getModel('productdetails');
	    $categoryId = JRequest::getInt('category_id', 0);
	    $vendorId = 1;
	    
	    $category = $categoryModel->getCategory($categoryId);
	    /* Add the category name to the pathway */
		$pathway->addItem($category->category_name);
	    $this->assignRef('category', $category);
	    
	    /* Load the products in the given category */
	    $products = $productModel->getProductsInCategory($categoryId);
	    $this->assignRef('products', $products);
	    
		parent::display($tpl);
	}
}
?>