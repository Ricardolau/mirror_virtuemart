<?php
/**
*
* Category View
*
* @package	VirtueMart
* @subpackage Category
* @author RickG, jseros
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2004 - 2011 VirtueMart Team. All rights reserved.
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
jimport( 'joomla.application.component.view');
jimport('joomla.html.pane');

/**
 * HTML View class for maintaining the list of categories
 *
 * @package	VirtueMart
 * @subpackage Category
 * @author RickG, jseros
 */
class VirtuemartViewCategory extends JView {

	function display($tpl = null) {

		// Load the helper(s)
		$this->loadHelper('adminMenu');
		$this->loadHelper('shopFunctions');
		$this->loadHelper('image');

		$model = $this->getModel();
                $layoutName = JRequest::getVar('layout', 'default');
                $mainframe = JFactory::getApplication();
                $option = JRequest::getCmd('option');
                $view = JRequest::getCmd('view');

		if ($layoutName == 'edit') {

	        $category = $model->getCategory('',false);

	       	$model->addImagesToCategories($category);

        	$isNew = ($category->category_id < 1);

			if ( $isNew ) {
				JToolBarHelper::title(  JText::_('COM_VIRTUEMART_CATEGORY_FORM_LBL').JText::_('COM_VIRTUEMART_FORM_NEW'), 'vm_categories_48');
			} else {
				JToolBarHelper::title( JText::_('COM_VIRTUEMART_CATEGORY_FORM_LBL').JText::_('COM_VIRTUEMART_FORM_EDIT'), 'vm_categories_48');

				$relationInfo = $model->getRelationInfo( $category->category_id );
				$this->assignRef('relationInfo', $relationInfo);
			}

			JToolBarHelper::divider();			
			JToolBarHelper::save();
                        JToolBarHelper::apply();
			JToolBarHelper::cancel();

			$parent = $model->getParentCategory( $category->category_id );
			$this->assignRef('parent', $parent);

			if(!class_exists('ShopFunctions'))require(JPATH_VM_ADMINISTRATOR.DS.'helpers'.DS.'shopfunctions.php');
			$templateList = ShopFunctions::renderTemplateList(JText::_('COM_VIRTUEMART_CATEGORY_TEMPLATE_DEFAULT'));

			$this->assignRef('jTemplateList', $templateList);

			if(!class_exists('VirtueMartModelConfig'))require(JPATH_VM_ADMINISTRATOR.DS.'models'.DS.'config.php');
			$categoryLayoutList = VirtueMartModelConfig::getLayoutList('category');
			$this->assignRef('categoryLayouts', $categoryLayoutList);

			$productLayouts = VirtueMartModelConfig::getLayoutList('productdetails');
			$this->assignRef('productLayouts', $productLayouts);

			$categorylist = ShopFunctions::categoryListTree(array($parent->category_id));

			$this->assignRef('category', $category);
			$this->assignRef('categorylist', $categorylist);
        }
        else {
			JToolBarHelper::title( JText::_('COM_VIRTUEMART_CATEGORY_LIST_LBL'), 'vm_categories_48' );
                        JToolBarHelper::publishList();
                        JToolBarHelper::unpublishList();
                        JToolBarHelper::deleteList('', 'remove', 'Delete');			
			JToolBarHelper::editListX();
			JToolBarHelper::addNewX();
			
			/**
			* Commented out for future use
			JToolBarHelper::custom('toggleShared', 'icon-32-new', '', JText::_('COM_VIRTUEMART_CATEGORY_SHARE'), true);
			JToolBarHelper::custom('toggleShared', 'icon-32-new', '', JText::_('COM_VIRTUEMART_CATEGORY_UNSHARE'), true);
			*/
			

			$categories = $model->getCategoryTree(false);
                        $categoriesSorted = $model->sortCategoryTree($categories);

			$pagination = $model->getPagination();

			$lists = array();
			$lists['filter_order'] = $mainframe->getUserStateFromRequest($option.$view.'filter_order', 'filter_order', '', 'cmd');
			$lists['filter_order_Dir'] = $mainframe->getUserStateFromRequest($option.$view.'filter_order_Dir', 'filter_order_Dir', '', 'word');

			$this->assignRef('model',	$model);
			$this->assignRef('pagination',	$pagination);
			$this->assignRef('categories', $categoriesSorted['categories']);
			$this->assignRef('depthList', $categoriesSorted['depth_list']);
			$this->assignRef('rowList',	$categoriesSorted['row_list']);
			$this->assignRef('idList', $categoriesSorted['id_list']);
			$this->assignRef('lists', $lists);
		}


		parent::display($tpl);
	}

}
// pure php no closing tag
