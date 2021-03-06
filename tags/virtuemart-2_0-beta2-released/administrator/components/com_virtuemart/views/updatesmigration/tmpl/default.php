<?php
/**
*
* Description
*
* @package	VirtueMart
* @subpackage UpdatesMigration
* @author Max Milbers
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
AdminMenuHelper::startAdminArea();
JHTML::_('behavior.tooltip');
jimport('joomla.html.pane');
?>
<form action="index.php" method="post" name="adminForm" enctype="multipart/form-data" >
<input type="hidden" name="task" value="" />
<?php
$pane = JPane::getInstance('tabs', array('startOffset'=>0));
echo $pane->startPane('pane');

echo $pane->startPanel(JText::_('VM_UPDATE_VERSION_TAB'), 'update_panel');
echo $this->loadTemplate('update');
echo $pane->endPanel();

echo $pane->startPanel(JText::_('VM_UPDATE_TOOLS_TAB'), 'update_panel');
echo $this->loadTemplate('tools');
echo $pane->endPanel();

echo $pane->endPane();
?>

<!-- Hidden Fields -->
<input type="hidden" name="option" value="com_virtuemart" />
<input type="hidden" name="view" value="updatesMigration" />
</form>
<?php AdminMenuHelper::endAdminArea(); ?>
