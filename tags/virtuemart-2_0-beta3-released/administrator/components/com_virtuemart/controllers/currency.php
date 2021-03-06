<?php
/**
*
* Currency controller
*
* @package	VirtueMart
* @subpackage Currency
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

// Load the controller framework
jimport('joomla.application.component.controller');

/**
 * Currency Controller
 *
 * @package    VirtueMart
 * @subpackage Currency
 * @author RickG
 */
class VirtuemartControllerCurrency extends JController {

	/**
	 * Method to display the view
	 *
	 * @access	public
	 * @author
	 */
	function __construct() {
		parent::__construct();

		// Register Extra tasks
		$this->registerTask( 'add',  'edit' );
		$this->registerTask( 'apply',  'save' );

		$document =& JFactory::getDocument();
		$viewType	= $document->getType();
		$view =& $this->getView('currency', $viewType);

		// Push a model into the view
		$model =& $this->getModel('currency');
		if (!JError::isError($model)) {
			$view->setModel($model, true);
		}
	}

	/**
	 * Display the currency view
	 *
	 * @author RickG
	 */
	function display() {
		parent::display();
	}


	/**
	 * Handle the edit task
	 *
     * @author RickG
	 */
	function edit()
	{
		JRequest::setVar('controller', 'currency');
		JRequest::setVar('view', 'currency');
		JRequest::setVar('layout', 'edit');
		JRequest::setVar('hidemenu', 1);

		$document =& JFactory::getDocument();
		$viewType = $document->getType();
		$view =& $this->getView('currency', $viewType);

		$view->setModel( $this->getModel( 'user', 'VirtueMartModel' ));

		parent::display();
	}


	/**
	 * Handle the cancel task
	 *
	 * @author RickG
	 */
	function cancel()
	{
		$this->setRedirect('index.php?option=com_virtuemart&view=currency');
	}


	/**
	 * Handle the save task
	 *
	 * @author Max Milbers
	 */
	function save()
	{
		$model = $this->getModel('currency');

		if ($id = $model->store()) {
			$msg = JText::_('VM_CURRENCY_STORED');
		} else {
			$msg = $model->getError();
		}
		$cmd = JRequest::getCmd('task');
		if($cmd == 'apply') $redirection = 'index.php?option=com_virtuemart&view=currency&task=edit&cid[]='.$id;
		else $redirection = 'index.php?option=com_virtuemart&view=currency';

		$this->setRedirect($redirection, $msg);

	}


	/**
	 * Handle the remove task
	 *
	 * @author RickG
	 */
	function remove()
	{
		$model = $this->getModel('currency');
		if (!$model->delete()) {
			$msg = JText::_('Error: One or more currencies could not be deleted!');
		}
		else {
			$msg = JText::_( 'Currencies Deleted!');
		}

		$this->setRedirect( 'index.php?option=com_virtuemart&view=currency', $msg);
	}


	/**
	 * Handle the publish task
	 *
	 * @author RickG
	 */
	function publish()
	{
		$model = $this->getModel('currency');
		if (!$model->publish(true)) {
			$msg = JText::_('Error: One or more currencies could not be published!');
		}

		$this->setRedirect( 'index.php?option=com_virtuemart&view=currency', $msg);
	}


	/**
	 * Handle the publish task
	 *
	 * @author RickG
	 */
	function unpublish()
	{
		$model = $this->getModel('currency');
		if (!$model->publish(false)) {
			$msg = JText::_('Error: One or more currencies could not be unpublished!');
		}

		$this->setRedirect( 'index.php?option=com_virtuemart&view=currency', $msg);
	}
}
// pure php no closing tag
