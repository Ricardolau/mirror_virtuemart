<?php
/**
 * Credit Card controller
 *
 * @package	VirtueMart
 * @subpackage CreditCard
 * @author Rick Glunt 
 * @copyright Copyright (c) 2009 VirtueMart Team. All rights reserved.
 */

defined( '_JEXEC' ) or die( 'Direct Access to this location is not allowed.' );

jimport('joomla.application.component.controller');

/**
 * Credit Card Controller
 *
 * @package    VirtueMart
 * @subpackage CreditCard
 * @author Rick Glunt 
 */
class VirtuemartControllerCreditcard extends JController
{
	/**
	 * Method to display the view
	 *
	 * @access	public
	 */
	function __construct() {
		parent::__construct();
		
		// Register Extra tasks
		$this->registerTask( 'add',  'edit' );			
	
	    $document =& JFactory::getDocument();
	    $document->addStyleSheet(JURI::base().'components/com_virtuemart/assets/css/vm.css');
	    
		$document =& JFactory::getDocument();				
		$viewType	= $document->getType();
		$view =& $this->getView('creditcard', $viewType);		

		// Push a model into the view					
		$model =& $this->getModel('creditcard');
		if (!JError::isError($model)) {
			$view->setModel($model, true);
		}	
	}
	
	/**
	 * Display the credit card view
	 *
	 * @author Rick Glunt	 
	 */
	function display() {			
		parent::display();
	}
	
	
	/**
	 * Handle the edit task
	 *
     * @author Rick Glunt
	 */
	function edit()
	{	
		JRequest::setVar('controller', 'creditcard');
		JRequest::setVar('view', 'creditcard');
		JRequest::setVar('layout', 'edit');
		JRequest::setVar('hidemenu', 1);		
		
		parent::display();
	}		
	
	
	/**
	 * Handle the cancel task
	 *
	 * @author Rick Glunt
	 */
	function cancel()
	{
		$msg = JText::_('Operation Canceled!!');
		
		$this->setRedirect('index.php?option=com_virtuemart&view=creditcard', $msg);
	}	
	
	
	/**
	 * Handle the save task
	 *
	 * @author Rick Glunt	 
	 */	
	function save()
	{
		$model =& $this->getModel( 'creditcard' );		
		
		if ($model->store()) {
			$msg = JText::_('Credit card saved!');
		}
		else {
			$msg = JText::_($model->getError());
		}
		
		$this->setRedirect('index.php?option=com_virtuemart&view=creditcard', $msg);
	}	
	
	
	/**
	 * Handle the remove task
	 *
	 * @author Rick Glunt	 
	 */		
	function remove()
	{
		$model = $this->getModel('creditcard');
		if (!$model->delete()) {
			$msg = JText::_('Error: One or more credit cards could not be deleted!');
		}
		else {
			$msg = JText::_( 'Credit cards Deleted!');
		}
	
		$this->setRedirect( 'index.php?option=com_virtuemart&view=creditcard', $msg);
	}	
	
	
	/**
	 * Handle the publish task
	 *
	 * @author Rick Glunt	 
	 */		
	function publish()
	{
		$model = $this->getModel('creditcard');
		if (!$model->publish(true)) {
			$msg = JText::_('Error: One or more credit cards could not be published!');
		}
	
		$this->setRedirect( 'index.php?option=com_virtuemart&view=creditcard', $msg);
	}		
	
	
	/**
	 * Handle the publish task
	 *
	 * @author Rick Glunt	 
	 */		
	function unpublish()
	{
		$model = $this->getModel('creditcard');
		if (!$model->publish(false)) {
			$msg = JText::_('Error: One or more credit cards could not be unpublished!');
		}
	
		$this->setRedirect( 'index.php?option=com_virtuemart&view=creditcard', $msg);
	}	
}
?>
