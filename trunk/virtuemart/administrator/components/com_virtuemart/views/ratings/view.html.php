<?php
/**
*
* Description
*
* @package	VirtueMart
* @subpackage	ratings
* @author
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
 * HTML View class for ratings (and customer reviews)
 *
 */
class VirtuemartViewRatings extends JView {
	public $max_rating;

	function display($tpl = null) {

		$mainframe = Jfactory::getApplication();
		$option = JRequest::getWord('option');

		/* Load helpers */
		$this->loadHelper('adminMenu');
		$this->loadHelper('shopFunctions');

		/* Get the review IDs to retrieve (input variable may be cid, cid[] or virtuemart_rating_review_id */
		$cids = JRequest::getVar('cid', array());		
		if (empty($cids)) {
			$cids= JRequest::getVar('virtuemart_rating_review_id',false);
		}
		if ($cids && !is_array($cids)) $cids = array($cids);
		
		
		jimport( 'joomla.utilities.arrayhelper' );
		JArrayHelper::toInteger($cids);
		
		// Figure out maximum rating scale (default is 5 stars)
		$this->max_rating = VmConfig::get('vm_maximum_rating_scale',5);
		$this->assignRef('max_rating', $this->max_rating);

		$model = $this->getModel();
		$viewName=ShopFunctions::SetViewTitle('vm_reviews_48','REVIEW_RATE' );
		$this->assignRef('viewName',$viewName);

		/* Get the task */
		$task = JRequest::getWord('task');
		switch ($task) {
			case 'listreviews':
				/* Get the data */
				$virtuemart_product_id = JRequest::getInt('virtuemart_product_id',0);
				$reviewslist = $model->getReviews($virtuemart_product_id);

				/* Get the pagination */
				$pagination = $this->get('Pagination');
				$lists = array();
				$lists['filter_order'] = $mainframe->getUserStateFromRequest($option.'filter_order', 'filter_order', '', 'cmd');
				$lists['filter_order_Dir'] = $mainframe->getUserStateFromRequest($option.'filter_order_Dir', 'filter_order_Dir', '', 'word');

				/* Assign the data */
				$this->assignRef('reviewslist', $reviewslist);
				$this->assignRef('pagination',	$pagination);
				$this->assignRef('lists',	$lists);
				break;

			case 'edit':
				/* Get the data */
				$rating = $model->getRating($cids);
				ShopFunctions::addStandardEditViewCommands();

				/* Assign the data */
				$this->assignRef('rating', $rating);

				break;
			case 'edit_review':
                            
				/* Get the data */
				$rating = $model->getReview($cids);
				$viewName=ShopFunctions::SetViewTitle('vm_reviews_48','REVIEW_RATE',$rating->product_name." (". $rating->customer.")" );
				$this->assignRef('viewName',$viewName);
				ShopFunctions::addStandardEditViewCommands();

				/* Assign the data */
				$this->assignRef('rating', $rating);

				break;
			default:
				/* Get the data */
				$ratingslist = $model->getRatings();
				/* Assign the data */
//				$this->preprocess($ratingslist);
				$this->assignRef('ratingslist', $ratingslist);

				ShopFunctions::addStandardDefaultViewCommands(false, true);
				$lists = ShopFunctions::addStandardDefaultViewLists($model);
				$this->assignRef('lists', $lists);
				
				break;
		}
		parent::display($tpl);
	}

}
// pure php no closing tag
