<?php
/**
*
* Credit Card View
*
* @package	VirtueMart
* @subpackage CreditCard
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
 * HTML View class for maintaining the list of Credit Cards
 *
 * @package	VirtueMart
 * @subpackage CreditCard
 * @author RickG
 */
class VirtuemartViewCreditcard extends JView {

	function display($tpl = null) {

		// Load the helper(s)
		$this->loadHelper('adminui');
		$this->loadHelper('shopFunctions');

		$model = $this->getModel();

        $creditcard = $model->getCreditCard();

		$viewName=ShopFunctions::SetViewTitle();
		$this->assignRef('viewName',$viewName);
 
		$layoutName = JRequest::getWord('layout', 'default');
		if ($layoutName == 'edit') {
			$this->loadHelper('shopFunctions');
			$vendorList= ShopFunctions::renderVendorList($creditcard->virtuemart_vendor_id);
			$this->assignRef('vendorList', $vendorList);

			$this->assignRef('creditcard',	$creditcard);

			ShopFunctions::addStandardEditViewCommands();
        }
        else {
			$creditcards = $model->getCreditCards(false);
			$this->assignRef('creditcards',	$creditcards);

			ShopFunctions::addStandardDefaultViewCommands();
			$lists = ShopFunctions::addStandardDefaultViewLists($model);


		}

		parent::display($tpl);
	}

}
// pure php no closing tag
