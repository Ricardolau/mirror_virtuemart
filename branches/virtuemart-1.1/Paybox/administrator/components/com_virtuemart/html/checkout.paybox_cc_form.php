<?php
if (!defined('_VALID_MOS') && !defined('_JEXEC')) {
	die('Direct Access to ' . basename(__FILE__) . ' is not allowed.');
}
/**
 * @version $Id:
 * @package VirtueMart
 * @subpackage html
 * Version: ${PHING.VM.RELEASE}
 * valerie Isaksen valerie@virtuemart.net
 * @copyright Copyright (C) 2004-${PHING.VM.PHING.VM.YEAR} Soeren Eberhardt. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
 *
 * The ps_paybox class, containing the payment processing code
 *  for transactions with  PAYBOX Payment Gateways
 *
 *
 *
 */
mm_showMyFileName(__FILE__);

require_once(CLASSPATH . "payment/ps_paybox.cfg.php");
require_once(CLASSPATH . "payment/ps_paybox.php");
$PAYBOX_LANG =& new ps_paybox_Language();

global $mosConfig_absolute_path, $mosConfig_live_site, $mosConfig_lang, $ps_vendor_id, $vendor_country_2_code, $user;
global $VM_LANG, $Itemid;

$amount = $db->f("order_total") * 100;
$isActivate3ds = (paybox_conf_activate_3dsecure == 'active') || (paybox_conf_activate_3dsecure == 'selective' AND ($db->f("order_total") > paybox_conf_min_amount_3dsecure));

$url_ok = SECUREURL . "index.php?option=com_virtuemart&page=checkout.paybox_result&status=ok";
$url_cancelled = SECUREURL . "index.php?option=com_virtuemart&page=checkout.paybox_result&status=cancel";
$url_deny = SECUREURL . "index.php?option=com_virtuemart&page=checkout.paybox_result&status=deny";
$url_error = SECUREURL . "administrator/components/com_virtuemart/html/checkout.paybox_error.php";
// ajout URL http dynamique
$url_http = SECUREURL . "paybox_url_http.php";


if (!$url = payboxHelper::getPayboxServerUrl(paybox_conf_shop_mode)) {
	return false;
}


$post_variables = Array(
	"PBX_SITE" => paybox_conf_site_id,
	"PBX_RANG" => paybox_conf_rang,
	"PBX_IDENTIFIANT" => paybox_conf_identifiant,
	"PBX_TOTAL" => $amount,
	"PBX_DEVISE" => 978,
	"PBX_CMD" => $db->f("order_id"),
	"PBX_PORTEUR" => $dbbt->f('user_email'),
	"PBX_RETOUR" =>payboxHelper::getReturn(),
	"PBX_HASH" => payboxHelper::getHashAlgo(),
	"PBX_TIME" => payboxHelper::getTime(),
	"PBX_LANGUE" => payboxHelper::getLangue(),

	"PBX_EFFECTUE" => $url_ok,
	//	"PBX_ATTENTE"     => $payboxReturnUrls['url_attente'],
	"PBX_ANNULE" => $url_cancelled,
	"PBX_REFUSE" => $url_deny,
	"PBX_ERREUR" => $url_error,
	"PBX_REPONDRE_A" => $url_http,
	"PBX_RUF1" => 'POST',
);


if (paybox_conf_debit_type == 'authorization_only') {
	$post_variables["PBX_DIFF"] = str_pad(paybox_conf_diff, 2, '0', STR_PAD_LEFT);
}

// min_amount_3dsecure is in vendor currency
if (!($isActivate3ds)) {
	$post_variables["PBX_3DS"] = 'N';
}
$post_variables["PBX_HMAC"] = payboxHelper::getHmac($post_variables, paybox_conf_key);

// On zappe la page
if ($page == "checkout.thankyou") {
	$query_string = "?";
	foreach ($post_variables as $name => $value) {
		$query_string .= $name . "=" . urlencode($value) . "&";
	}
	vmRedirect($url . $query_string);
} else {

	echo '<form target="_blank" action="' . PAYBOX_MOD_URL . '" method="post">';
	echo '<input type="image" name="submit" src="' . IMAGEURL . '/payment/paybox.gif" border="0" alt="Paiement avec Paybox!">';

	foreach ($post_variables as $name => $value) {
		echo '<input type="hidden" name="' . $name . '" value="' . $value . '" />';
	}
	echo '</form>';

}

?>

