<?php
/**
*
* Product controller
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

// Load the controller framework
jimport('joomla.application.component.controller');

/**
 * Product Controller
 *
 * @package    VirtueMart
 * @author
 */
class VirtuemartControllerAttributes extends JController {

	/**
	 * Method to display the view
	 *
	 * @access	public
	 */
	function __construct() {
		parent::__construct();

		/* Redirect templates to templates as this is the standard call */
		$this->registerTask('edit','add');

		/*  */
		if (JRequest::getInt('product_id') > 0 && !JRequest::getVar('cid', false)) JRequest::setVar('cid', array(JRequest::getInt('product_id')));
	}

	/**
	* Shows the product list screen
	*/
	public function Attributes() {
		/* Create the view object */
		$view = $this->getView('attributes', 'html');

		/* Default model */
		$view->setModel( $this->getModel( 'attributes', 'VirtueMartModel' ), true );

		/* Product model */
		if (JRequest::getInt('product_id') > 0) $view->setModel( $this->getModel( 'product', 'VirtueMartModel' ));

		/* Set the layout */
		$view->setLayout('attributes');

		/* Now display the view. */
		$view->display();
	}

	/**
	 * Shows the product add/edit screen
	 */
	public function Add() {
		/* Create the view object */
		$view = $this->getView('attributes', 'html');

		/* Default model */
		$view->setModel( $this->getModel( 'attributes', 'VirtueMartModel' ), true );

		/* Product model */
		$view->setModel( $this->getModel( 'product', 'VirtueMartModel' ));

		/* Set the layout */
		$view->setLayout('attributes_edit');

		/* Now display the view. */
		$view->display();
	}

	/**
	* Cancellation, redirect to main product list
	*
	* @author RolandD
	*/
	public function Cancel() {
		$mainframe = Jfactory::getApplication();
		$mainframe->redirect('index.php?option=com_virtuemart&view=attributes&product_id='.JRequest::getInt('product_id'));
	}

	/**
	* Save an attribute
	*
	* @author RolandD
	*/
	public function save() {
		$mainframe = Jfactory::getApplication();

		/* Load the view object */
		$view = $this->getView('attributes', 'html');

		$model = $this->getModel('attributes');
		$msgtype = '';
		if ($model->saveAttribute()) $msg = JText::_('ATTRIBUTE_SAVED_SUCCESSFULLY');
		else {
			$msg = JText::_('ATTRIBUTE_NOT_SAVED_SUCCESSFULLY');
			$msgtype = 'error';
		}
		$mainframe->redirect('index.php?option=com_virtuemart&view=attributes&product_id='.JRequest::getInt('product_id'), $msg, $msgtype);
	}

	/**
	* Delete an attribute
	*
	* @author RolandD
	*/
	public function remove() {
		$mainframe = Jfactory::getApplication();

		/* Load the view object */
		$view = $this->getView('attributes', 'html');

		$model = $this->getModel('attributes');
		$msgtype = '';
		if ($model->removeAttribute()) $msg = JText::_('ATTRIBUTE_REMOVED_SUCCESSFULLY');
		else {
			$msg = JText::_('ATTRIBUTE_NOT_REMOVED_SUCCESSFULLY');
			$msgtype = 'error';
		}

		$mainframe->redirect('index.php?option=com_virtuemart&view=attributes&product_id='.JRequest::getInt('product_id'), $msg, $msgtype);
	}
}
// pure php no closing tag
