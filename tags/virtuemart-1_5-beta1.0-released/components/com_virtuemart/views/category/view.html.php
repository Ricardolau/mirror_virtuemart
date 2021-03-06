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
* @todo set meta data
* @todo add full path to breadcrumb
*/
class VirtuemartViewCategory extends JView {
	
	public function display($tpl = null) {
		
		$document = JFactory::getDocument();
		$document->addScript(JURI::base().'components/com_virtuemart/assets/js/vmprices.js');
 
		$mainframe = JFactory::getApplication();
		$pathway = $mainframe->getPathway();
		
		/* Set the helper path */
		$this->addHelperPath(JPATH_COMPONENT_ADMINISTRATOR.DS.'helpers');
		
		/* Load helpers */
		$this->loadHelper('image');
		
		$categoryModel = $this->getModel('category');
		$productModel = $this->getModel('productdetails');
	    $categoryId = JRequest::getInt('category_id', 0);
	    $vendorId = 1;
	    
	    $category = $categoryModel->getCategory($categoryId);
	    
	    /* Add the category name to the pathway */
		$pathway->addItem($category->category_name);
	    $this->assignRef('category', $category);
	    
	    /* Set the titles */
		$document->setTitle($category->category_name);
	    
	    /* Load the products in the given category */
	    $products = $productModel->getProductsInCategory($categoryId);
	    $this->assignRef('products', $products);
	    
	    shopFunctionsF::setLastVisitedCategoryId($categoryId);
	    
	    if(empty($category->category_template)){
	    	$catTpl = VmConfig::get('categorytemplate');
	    }else {
	    	$catTpl = $category->category_template;
	    }
	    shopFunctionsF::setVmTemplate($this,$catTpl,0,$category->category_layout);
	    
		parent::display($tpl);
	}
}


//no closing tag