<?php
/**
*
* Module controller
*
* @package	VirtueMart
* @subpackage Module
* @author Markus Öhler
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
 * Module Controller
 *
 * @package    VirtueMart
 * @subpackage Module
 * @author Markus Öhler
 */
class VirtuemartControllerModule extends JController
{
	/**
	 * Method to display the view
	 *
	 * @access	public
	 */
	function __construct() {
		parent::__construct();

		// Register Extra tasks
		$this->registerTask( 'add', 'edit' );

		$document =& JFactory::getDocument();
		$viewType	= $document->getType();
		$view =& $this->getView('module', $viewType);

		// Push a model into the view
		$model =& $this->getModel('module');
		if (!JError::isError($model)) {
			$view->setModel($model, true);
		}
	}

	/**
	 * Display the shopper group view
	 *
	 * @author Markus Öhler
	 */
	function display() {
		parent::display();
	}


	/**
	 * Handle the edit task
	 *
     * @author Markus Öhler
	 */
	function edit()
	{
		JRequest::setVar('controller', 'module');
		JRequest::setVar('view', 'module');
		JRequest::setVar('layout', 'edit');
		JRequest::setVar('hidemenu', 1);

		parent::display();
	}


	/**
	 * Handle the cancel task
	 *
	 * @author Markus Öhler
	 */
	function cancel()
	{
		$this->setRedirect('index.php?option=com_virtuemart&view=module');
	}


	/**
	 * Handle the save task
	 *
	 * @author Markus Öhler
	 */
	function save()
	{
		$model =& $this->getModel('module');

		if ($model->store()) {
			$msg = JText::_('Module saved!');
		}
		else {
			$msg = JText::_($model->getError());
		}

		$this->setRedirect('index.php?option=com_virtuemart&view=module', $msg);
	}


	/**
	 * Handle the remove task
	 *
	 * @author Markus Öhler
	 */
	function remove()
	{
		$model = $this->getModel('module');
		if (!$model->delete()) {
			$msg = JText::_('Error: One or more modules could not be deleted!');
		}
		else {
			$msg = JText::_( 'Module deleted!');
		}

		$this->setRedirect( 'index.php?option=com_virtuemart&view=module', $msg);
	}

}
// pure php no closing tag
