<?php
defined('_JEXEC') or die();

/**
 * @author Valérie Isaksen
 * @version $Id:$
 * @package VirtueMart
 * @subpackage vmpayment
 * @copyright Copyright (C) 2004-${PHING.VM.COPYRIGHT}   - All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
 *
 * http://virtuemart.net
 */
defined('_JEXEC') or die();
$doc = JFactory::getDocument();
$doc->addStyleSheet(JURI::root(true) . '/plugins/vmpayment/eway/assets/css/eway.css');
?>


<div id="eway-response-page">

	<h1><?php echo $viewData['pageTitle'] ?></h1>

		<p><?php echo $viewData['TransactionID'] ?></p>
	<div class="vieworder">
		<a class="vm-button-correct"
		   href="<?php echo JRoute::_('index.php?option=com_virtuemart&view=orders&layout=details&order_number=' . $viewData["order_number"] . '&order_pass=' . $viewData["order_pass"], false) ?>"><?php echo vmText::_('COM_VIRTUEMART_ORDER_VIEW_ORDER'); ?></a>
	</div>
</div>

