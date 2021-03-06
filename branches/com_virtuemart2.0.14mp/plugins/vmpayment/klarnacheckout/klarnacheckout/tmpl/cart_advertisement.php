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

$css =".totalInPaymentCurrency {display:none;}\n";
if ($viewData ['payment_form_position']=='right' ) {
	$doc = JFactory::getDocument()->addStyleSheet(JURI::root(true) . '/plugins/vmpayment/klarnacheckout/klarnacheckout/assets/css/klarnacheckout.css');
}
JFactory::getDocument()->addStyleDeclaration($css);

$js = '
	jQuery(document).ready(function( $ ) {
 $(".checkout-button-top").hide();	});
	';

if ($viewData ['hide_BTST']) {
	$js .= '
	jQuery(document).ready(function( $ ) {
		      $(".billto-shipto").hide();

		      $("#com-form-login").hide();

	});
	';


}
JFactory::getDocument()->addScriptDeclaration($js);
?>
<?php if ($viewData ['message'] )  { ?>
	<h1><?php echo $viewData ['message']; ?>  </h1>
<?php } ?>
<?php if ($viewData ['snippet'] )  { ?>
<div><?php echo $viewData ['snippet']; ?>  </div>
<?php } ?>



