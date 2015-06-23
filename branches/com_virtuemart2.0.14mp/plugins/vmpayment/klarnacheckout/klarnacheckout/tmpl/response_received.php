<?php

defined('_JEXEC') or die('Restricted access');

/**
 * @author Valérie Isaksen
 * @version $Id$
 * @package VirtueMart
 * @subpackage payment
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


?>

	<div class="post_payment_order_number" style="width: 100%">
		<span class=post_payment_order_number_title"><?php echo vmText::_ ('COM_VIRTUEMART_ORDER_NUMBER'); ?> </span>
		<?php echo  $viewData['order_number']; ?>
	</div>


	<a class="vm-button-correct" href="<?php echo JRoute::_('index.php?option=com_virtuemart&view=orders&layout=details&order_number='.$viewData["order_number"].'&order_pass='.$viewData["order_pass"], false)?>"><?php echo vmText::_('COM_VIRTUEMART_ORDER_VIEW_ORDER'); ?></a>

<?php if ($viewData ['snippet'] )  { ?>
<div><?php echo $viewData ['snippet']; ?>  </div>
<?php } ?>



