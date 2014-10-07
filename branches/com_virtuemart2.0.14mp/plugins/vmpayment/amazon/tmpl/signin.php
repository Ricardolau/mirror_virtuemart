<?php
defined('_JEXEC') or die();

/**
 * @author Valérie Isaksen
 * @version $Id$
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
?>
<?php
JHtml::_('behavior.tooltip');
vmJsApi::jPrice();
static $jsSILoaded = false;
if (!$jsSILoaded) {
	$doc = JFactory::getDocument();

	$signInButton = '<div id=\"amazonSignInButton\"><div id=\"payWithAmazonDiv\" ><img src=\"' . $viewData['buttonWidgetImageURL'] . '\" style=\"cursor: pointer;\"/></div><div id=\"amazonSignInErrorMsg\"></div></div>';

	$doc->addScript(JURI::root(true) . '/plugins/vmpayment/amazon/assets/js/amazon.js');
	if ($viewData['include_amazon_css']) {
		$doc->addStyleSheet(JURI::root(true) . '/plugins/vmpayment/amazon/assets/css/amazon.css');
	}
	$renderAmazonAddressBook = $viewData['renderAmazonAddressBook'] ? 'true' : 'false';

	$doc->addScriptDeclaration("
	//<![CDATA[
jQuery(document).ready( function($) {
	$( '" . $viewData['sign_in_css'] . "' ).append('<div id=\"amazonSignTip\">" . vmText::_('VMPAYMENT_AMAZON_SIGNIN_TIP',true)  . "</div>');
	amazonPayment.showAmazonButton('" . $viewData['sellerId'] . "', '" . $viewData['redirect_page'] . "', " . $renderAmazonAddressBook . ");
	$( '" . $viewData['sign_in_css'] . "' ).append('" . $signInButton . "');
	$( '" . $viewData['sign_in_css'] . "' ).append('<div id=\"amazonSignOr\"><span>" . vmText::_('VMPAYMENT_AMAZON_SIGNIN_OR',true)  . "</span></div>');

});
//]]>
");
	if ($viewData['layout'] == 'cart') {

		$doc->addScriptDeclaration("
	//<![CDATA[
jQuery(document).ready( function($) {
$('#leaveAmazonCheckout').click(function(){
	amazonPayment.leaveAmazonCheckout();
	});
});
//]]>
");


if (vRequest::getWord('view') == 'cart') {
$doc->addScriptDeclaration("

//<![CDATA[
	jQuery(document).ready(function($) {
	jQuery('#checkoutFormSubmit').attr('disabled', 'true');
	jQuery('#checkoutFormSubmit').removeClass( 'vm-button-correct' );
	jQuery('#checkoutFormSubmit').addClass( 'vm-button' );
	jQuery('#checkoutFormSubmit').text( '".vmText::_('VMPAYMENT_AMAZON_CLICK_PAY_AMAZON', true)."' );
	});

//]]>

");
}


	}
}
?>
