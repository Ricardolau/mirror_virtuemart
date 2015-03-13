<?php
/**
 * @version $Id: checkout.paybox_url_http.php
 * @package VirtueMart
 * @subpackage html
 * * Version: ${PHING.VM.RELEASE}
 * valerie Isaksen valerie@virtuemart.net
 * @copyright Copyright (C) 2004-${PHING.VM.PHING.VM.YEAR} Soeren Eberhardt. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
 *
 *
 */

if ($_POST) {

	global $mosConfig_absolute_path, $mosConfig_live_site, $mosConfig_lang, $database,
	       $mosConfig_mailfrom, $mosConfig_fromname;

	/*** access Joomla's configuration file ***/
	$my_path = dirname(__FILE__);

	if (file_exists($my_path . "/../../../../configuration.php")) {
		$absolute_path = dirname($my_path . "/../../../../configuration.php");
		require_once($my_path . "/../../../../configuration.php");
	} else {
		die("Joomla Configuration File not found!");
	}

	$absolute_path = realpath($absolute_path);

	// Set up the appropriate CMS framework
	if (class_exists('jconfig')) {
		define('_JEXEC', 1);
		define('JPATH_BASE', $absolute_path);
		define('DS', DIRECTORY_SEPARATOR);

		// Load the framework
		require_once(JPATH_BASE . DS . 'includes' . DS . 'defines.php');
		require_once(JPATH_BASE . DS . 'includes' . DS . 'framework.php');

		// create the mainframe object
		$mainframe = &JFactory::getApplication('site');

		// Initialize the framework
		$mainframe->initialise();

		// load system plugin group
		JPluginHelper::importPlugin('system');

		// trigger the onBeforeStart events
		$mainframe->triggerEvent('onBeforeStart');
		// Adjust the live site path
		$mosConfig_live_site = str_replace('/administrator/components/com_virtuemart', '', $mosConfig_live_site);
	}

	// load Joomla Language File
	if (file_exists($absolute_path . '/language/' . $mosConfig_lang . '.php')) {
		require_once($absolute_path . '/language/' . $mosConfig_lang . '.php');
	} elseif (file_exists($absolute_path . '/language/english.php')) {
		require_once($absolute_path . '/language/english.php');
	}
	/*** END of Joomla config ***/


	/*** VirtueMart part ***/
	$mosConfig_absolute_path = JPATH_BASE;

	require_once(JPATH_BASE . '/administrator/components/com_virtuemart/virtuemart.cfg.php');
	include_once(ADMINPATH . 'compat.joomla1.5.php');
	require_once(ADMINPATH . 'global.php');
	require_once(CLASSPATH . 'ps_main.php');

	/* @MWM1: Logging enhancements (file logging & composite logger). */
	$vmLogIdentifier = "notify.php";
	require_once(CLASSPATH . "Log/LogInit.php");

	/* Load the PayPal Configuration File */
	require_once(CLASSPATH . 'payment/ps_paybox.cfg.php');
	require_once(CLASSPATH . 'payment/ps_paybox.php');
	$PAYBOX_LANG =& new ps_paybox_Language();

	$paybox_data = $_POST;

	if (!payboxHelper::isPayboxResponseValid($paybox_data, true, false)) {
		return FALSE;
	}

	$order_id = $paybox_data['R'];

	$qv = "SELECT order_id , order_status FROM  #__{vm}_orders ";
	$qv .= "WHERE order_id='" . $order_id . "'";
	$dbo = new ps_DB;
	$dbo->query($qv);
	$dbo->next_record();
	$d['order_id'] = $dbo->f("order_id");
	$d["current_order_status"] = $dbo->f("order_status") . "-" .  'paybox_conf_status_success_' .paybox_conf_debit_type;

	$d['notify_customer'] = "N";
	$d['include_comment'] = "Y";

	/* get Shop Item Id */
	$dbShop = new ps_DB;
	$dbShop->query("SELECT id FROM #__menu WHERE link='index.php?option=com_virtuemart' AND published=1 AND access=0");
	if ($dbShop->next_record()) {
		$Itemid = $dbShop->f("id");
	} else {
		$Itemid = 1;
	}

	if ($paybox_data['E'] == '00000') {
			$d['order_status'] =paybox_conf_status_success;
		$d['order_comment'] = addslashes($PAYBOX_LANG->_('PS_PAYBOX_PAYMENT_STATUS_CONFIRMED')." ".$paybox_data['S']);
	} else {
		// the Payment wasn't successful.
		$d['order_status'] = paybox_conf_status_canceled;
		$d['order_comment'] = str_replace("<br />", "\n", $PAYBOX_LANG->_('PS_PAYBOX_PAYMENT_STATUS_CANCELLED') . " " . $paybox_data['E'] . ": " . addslashes($PAYBOX_LANG->_($paybox_data['E'])));
	}
	$d['comments'] .= "<br />" . $PAYBOX_LANG->_('PS_PAYBOX_RESPONSE_S') . ' ' . $paybox_data['S'];

	require_once(CLASSPATH . 'ps_order.php');
	$ps_order = new ps_order;
	$ps_order->order_status_update($d);
}

?>
