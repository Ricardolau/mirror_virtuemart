<?php
/**
 * Shipping Carrier controller
 *
 * @package	VirtueMart
 * @subpackage ShippingCarrier
 * @author RickG 
 * @copyright Copyright (c) 2009 VirtueMart Team. All rights reserved.
 */

defined( '_JEXEC' ) or die( 'Direct Access to this location is not allowed.' );

jimport('joomla.application.component.controller');

/**
 * Shipping Carrier Controller
 *
 * @package    VirtueMart
 * @subpackage ShippingCarrier
 * @author RickG 
 */
class VirtuemartControllerShippingCarrier extends JController
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
		$viewType	= $document->getType();
		$view =& $this->getView('shippingcarrier', $viewType);		

		// Push a model into the view					
		$model =& $this->getModel('shippingcarrier');
		if (!JError::isError($model)) {
			$view->setModel($model, true);
		}					
	}
	
	/**
	 * Display the shipping carrier view
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
		JRequest::setVar('controller', 'shippingcarrier');
		JRequest::setVar('view', 'shippingcarrier');
		JRequest::setVar('layout', 'edit');
		JRequest::setVar('hidemenu', 1);		
		
		parent::display();
	}		
	
	
	/**
	 * Handle the cancel task
	 *
	 * @author RickG
	 */
	function cancel()
	{
		$this->setRedirect('index.php?option=com_virtuemart&view=shippingcarrier');
	}	
	
	
	/**
	 * Handle the save task
	 *
	 * @author RickG	 
	 */	
	function save()
	{
		$model =& $this->getModel('shippingcarrier');		
		
		if ($model->store()) {
			$msg = JText::_('Shipping Carrier saved!');
		}
		else {
			$msg = JText::_($model->getError());
		}
		
		$this->setRedirect('index.php?option=com_virtuemart&view=shippingcarrier', $msg);
	}	
	
	
	/**
	 * Handle the remove task
	 *
	 * @author RickG	 
	 */		
	function remove()
	{
		$model = $this->getModel('shippingcarrier');
		if (!$model->delete()) {
			$msg = JText::_('Error: One or more shipping carriers could not be deleted!');
		}
		else {
			$msg = JText::_( 'Shipping carriers deleted!');
		}
	
		$this->setRedirect( 'index.php?option=com_virtuemart&view=shippingcarrier', $msg);
	}		
}
?>
