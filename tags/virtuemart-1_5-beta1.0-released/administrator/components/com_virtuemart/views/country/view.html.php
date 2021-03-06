<?php
/**
*
* Country View
*
* @package	VirtueMart
* @subpackage Country
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

// Load the view framework
jimport( 'joomla.application.component.view');

/**
 * HTML View class for maintaining the list of countries
 *
 * @package	VirtueMart
 * @subpackage Country
 * @author RickG
 */
class VirtuemartViewCountry extends JView {

    function display($tpl = null) {

		// Load the helper(s)
		$this->loadHelper('adminMenu');

		$model = $this->getModel();
		$zoneModel = $this->getModel('ShippingZone');
		
		$layoutName = JRequest::getVar('layout', 'default');
		
		if ($layoutName == 'edit') {
			$country = $model->getCountry();
			$isNew = ($country->country_id < 1);
		    if ($isNew) {
				JToolBarHelper::title(  JText::_('VM_COUNTRY_LIST_ADD' ).': <small><small>[ New ]</small></small>', 'vm_countries_48');
				JToolBarHelper::divider();
				JToolBarHelper::save();
				JToolBarHelper::cancel();
		    }
		    else {
				JToolBarHelper::title( JText::_('VM_COUNTRY_LIST_ADD' ).': <small><small>[ Edit ]</small></small>', 'vm_countries_48');
				JToolBarHelper::divider();
				JToolBarHelper::save();
				JToolBarHelper::cancel('cancel', 'Close');
		    }

			
		    $this->assignRef('country',	$country);
		    $this->assignRef('shippingZones',	$zoneModel->getShippingZoneSelectList());
		}
		else {
			JToolBarHelper::title( JText::_( 'VM_COUNTRY_LIST_LBL' ), 'vm_countries_48' );
			JToolBarHelper::publishList();
			JToolBarHelper::unpublishList();
			JToolBarHelper::editListX();
			JToolBarHelper::addNewX();

			$pagination = $model->getPagination();
			$this->assignRef('pagination',	$pagination);

			$countries = $model->getCountries(false);
			$this->assignRef('countries',	$countries);
		}
		parent::display($tpl);
    }

}
// pure php no closing tag
