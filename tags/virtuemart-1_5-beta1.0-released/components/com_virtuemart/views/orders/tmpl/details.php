<?php
/**
*
* Order detail view
*
* @package	VirtueMart
* @subpackage Orders
* @author Oscar van Eijk
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
JHTML::stylesheet('vmpanels.css', JURI::root().'components/com_virtuemart/assets/css/');
?>
<h2><?php echo JText::_('VM_ACC_ORDER_INFO'); ?></h2>

<div style="float: left; max-width:40%; overflow: auto; padding: 0px; margin: 0px; spacing: 0px;">
<?php
echo $this->loadTemplate('order');
?>
</div>

<div style="float: right; max-width:60%; overflow: auto; padding: 0px; margin: 0px; spacing: 0px;">
<?php
echo $this->pane->startPane("order-pane");

echo $this->pane->startPanel( JText::_('VM_ORDER_HISTORY'), 'details_history' );
echo $this->loadTemplate('history');
echo $this->pane->endPanel();

echo $this->pane->startPanel( JText::_('VM_ORDER_ITEM'), 'details_items' );
echo $this->loadTemplate('items');
echo $this->pane->endPanel();

//echo "<pre>\n";
//print_r ($this->orderdetails);
//echo "</pre>\n";
//echo $this->pane->endPanel();

echo $this->pane->endPane();
?>
</div>
<br clear="all"/><br/>