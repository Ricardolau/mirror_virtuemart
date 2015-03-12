<?php
if (!defined('_VALID_MOS') && !defined('_JEXEC')) {
	die('Direct Access to ' . basename(__FILE__) . ' is not allowed.');
}

/**
 * @version $Id
 * @package VirtueMart
 * @subpackage Payment
 * Version: ${PHING.VM.RELEASE}
 * valerie Isaksen valerie@virtuemart.net
 * @copyright Copyright (C) 2004-${PHING.VM.PHING.VM.YEAR} Soeren Eberhardt. All rights reserved.
 *
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * mambo-phpShop is Free Software.
 * mambo-phpShop comes with absolute no warranty.
 *
 * www.virtuemart.net
 *
 * The ps_paybox class.
 *
 */
class ps_paybox {

	var $classname = "ps_paybox";
	var $payment_code = "PAYBOX";

	/**
	 * Show all configuration parameters for this payment method
	 * @returns boolean False when the Payment method has no configuration
	 */
	function show_configuration() {
		global $VM_LANG, $mosConfig_live_site, $mosConfig_lang;

		$PAYBOX_LANG =& new ps_paybox_Language();
		/** Read current Configuration ***/
		require_once(CLASSPATH . "payment/" . $this->classname . ".cfg.php");
		$db = &new ps_DB;

		?>
		<table>
		<tr>
			<td><strong><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_SHOP_MODE'); ?></strong></td>
			<td>
				<select name="paybox_conf_shop_mode">
					<option <?php if (paybox_conf_shop_mode == 'test') {
						echo "selected=\"selected\"";
					} ?> value="test"><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_SHOP_MODE_TEST') ?></option>
					<option <?php if (paybox_conf_shop_mode == 'production') {
						echo "selected=\"selected\"";
					} ?>
						value="production"><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_SHOP_MODE_PRODUCTION') ?></option>
				</select>
			</td>
			<td><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_SHOP_MODE_TIP'); ?>
			</td>
		</tr>
		<tr>
			<td><strong><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_SITE_ID'); ?></strong></td>
			<td>
				<input type="text" name="paybox_conf_site_id" size="30"
				       value="<?php echo paybox_conf_site_id ?>"/>
			</td>
			<td><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_SITE_ID_TIP'); ?></td>
		</tr>
		<tr>
			<td><strong><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_RANG'); ?></strong></td>
			<td>
				<input type="text" name="paybox_conf_rang" size="30"
				       value="<?php echo paybox_conf_rang ?>"/>
			</td>
			<td><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_RANG_TIP'); ?></td>
		</tr>
		<tr>
			<td><strong><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_IDENTIFIANT'); ?></strong></td>
			<td>
				<input type="text" name="paybox_conf_identifiant" size="30"
				       value="<?php echo paybox_conf_identifiant ?>"/>
			</td>
			<td><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_IDENTIFIANT_TIP'); ?></td>
		</tr>
		<tr>
			<td><strong><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_KEY'); ?></strong></td>
			<td colspan="2">
				<input type="text" name="paybox_conf_key" size="200" value="<?php echo paybox_conf_key ?>"/>

			</td>

		</tr>
		<tr id="paybox_conf_debit_type">
			<td><strong><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_DEBIT_TYPE'); ?></strong></td>
			<td>
				<select name="paybox_conf_debit_type" onchange="updateDiff();">
					<option <?php if (paybox_conf_debit_type == 'authorization_only') {
						echo "selected=\"selected\"";
					} ?>
						value="authorization_only"><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_DEBIT_TYPE_AUTHORIZATION_ONLY') ?></option>
					<option <?php if (paybox_conf_debit_type == 'authorization_capture') {
						echo "selected=\"selected\"";
					} ?>
						value="authorization_capture"><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_DEBIT_TYPE_AUTHORIZATION_CAPTURE') ?></option>
				</select>
			</td>
			<td><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_DEBIT_TYPE_TIP'); ?></td>
		</tr>
		<?php if (paybox_conf_debit_type == 'authorization_only') {
			$display_debit_type = 'block';
		} else {
			$display_debit_type = 'none';
		}
		?>
		<tr id="paybox_conf_diff" style="display: <?php echo $display_debit_type ?>;">
			<td><strong><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_DIFF'); ?></strong></td>
			<td>
				<select name="paybox_conf_diff" ">
				<option <?php if (paybox_conf_diff == 1) {
					echo "selected=\"selected\"";
				} ?> value="1">1
				</option>
				<option <?php if (paybox_conf_diff == 2) {
					echo "selected=\"selected\"";
				} ?> value="2">2
				</option>
				<option <?php if (paybox_conf_diff == 3) {
					echo "selected=\"selected\"";
				} ?> value="3">3
				</option>
				<option <?php if (paybox_conf_diff == 4) {
					echo "selected=\"selected\"";
				} ?> value="4">4
				</option>
				<option <?php if (paybox_conf_diff == 5) {
					echo "selected=\"selected\"";
				} ?> value="4">5
				</option>
				<option <?php if (paybox_conf_diff == 6) {
					echo "selected=\"selected\"";
				} ?> value="6">6
				</option>
				<option <?php if (paybox_conf_diff == 7) {
					echo "selected=\"selected\"";
				} ?> value="7">7
				</option>
				</select>
			</td>
			<td><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_DIFF_TIP'); ?></td>
		</tr>

		<tr>
			<td><strong><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_ACTIVATE_3DSECURE'); ?></strong></td>
			<td><select name="paybox_conf_activate_3dsecure" onchange="updateMinAmount3DS();">
					<option value="inactive" <?php if (paybox_conf_activate_3dsecure == "inactive") {
						echo "selected=\"selected\"";
					} ?>><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_ACTIVATE_3DSECURE_INACTIVE') ?></option>
					<option value="active" <?php if (paybox_conf_activate_3dsecure == "active") {
						echo "selected=\"selected\"";
					} ?>><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_ACTIVATE_3DSECURE_ACTIVE') ?></option>
					<option value="selective" <?php if (paybox_conf_activate_3dsecure == "selective") {
						echo "selected=\"selected\"";
					} ?>><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_ACTIVATE_3DSECURE_SELECTIVE') ?></option>
				</select>
			</td>
			<td><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_ACTIVATE_3DSECURE_TIP'); ?>
			</td>
		</tr>
		<?php if (paybox_conf_activate_3dsecure == 'inactive') {
			$display_debit_type = 'none';
		} else {
			$display_debit_type = 'block';
		}?>
		<tr class="activate_3dsecure" id="paybox_conf_min_amount_3dsecure"
		    style="display: <?php echo $display_debit_type ?>;">
			<td><strong><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_3DSECURE_MIN_AMOUNT'); ?></strong></td>
			<td>
				<input type="text" name="paybox_conf_min_amount_3dsecure" size="30"
				       value="<?php echo paybox_conf_min_amount_3dsecure ?>"/>
			</td>
			<td><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_3DSECURE_MIN_AMOUNT_TIP'); ?></td>
		</tr>
		<!-- tr class="integration subscribe">
			<td><strong><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_INTEGRATION'); ?></strong></td>
			<td>
				<select name="paybox_conf_activate_subscribe" >
					<option value="standard" <?php if (paybox_conf_activate_subscribe == "standard") {
			echo "selected=\"selected\"";
		} ?>><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_INTEGRATION_STANDARD') ?>
					</option>
					<option value="recurring" <?php if (paybox_conf_activate_subscribe == "recurring") {
			echo "selected=\"selected\"";
		} ?>><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_INTEGRATION_RECURRING') ?>
					</option>
				</select>
			</td>
			<td></td>
		</tr -->


		<tr>
			<td><strong><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_STATUS_SUCCESS'); ?></strong></td>
			<td>
				<select name="paybox_conf_status_success">
					<?php
					$q = "SELECT order_status_name,order_status_code FROM #__{vm}_order_status ORDER BY list_order";
					$db->query($q);
					$order_status_code = Array();
					$order_status_name = Array();

					while ($db->next_record()) {
						$order_status_code[] = $db->f("order_status_code");
						$order_status_name[] = $db->f("order_status_name");
					}
					for ($i = 0; $i < sizeof($order_status_code); $i++) {
						echo "<option value=\"" . $order_status_code[$i];
						if (paybox_conf_status_success == $order_status_code[$i]) {
							echo "\" selected=\"selected\">";
						} else {
							echo "\">";
						}
						echo $order_status_name[$i] . "</option>\n";
					}?>
				</select>
			</td>
			<td><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_STATUS_SUCCESS_TIP'); ?>
			</td>
		</tr>


		<tr>
			<td><strong><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_STATUS_CANCEL'); ?></strong></td>
			<td>
				<select name="paybox_conf_status_canceled">
					<?php
					for ($i = 0; $i < sizeof($order_status_code); $i++) {
						echo "<option value=\"" . $order_status_code[$i];
						if (paybox_conf_status_canceled == $order_status_code[$i]) {
							echo "\" selected=\"selected\">";
						} else {
							echo "\">";
						}
						echo $order_status_name[$i] . "</option>\n";
					} ?>
				</select>
			</td>
			<td><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_STATUS_CANCEL_TIP'); ?>
			</td>
		</tr>


		<!--tr>
			<td><strong><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_STATUS_RECURRING'); ?></strong></td>
			<td>
				<select name="status_success_recurring" >
					<?php
		for ($i = 0; $i < sizeof($order_status_code); $i++) {
			echo "<option value=\"" . $order_status_code[$i];
			if (status_success_recurring == $order_status_code[$i]) {
				echo "\" selected=\"selected\">";
			} else {
				echo "\">";
			}
			echo $order_status_name[$i] . "</option>\n";
		} ?>
				</select>
			</td>
			<td><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_STATUS_RECURRING_TIP'); ?>
			</td>
		</tr-->

		<!--tr>
			<td><strong><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_STATUS_RECURRING_END'); ?></strong></td>
			<td>
				<select name="paybox_conf_status_success_recurring_end" >
					<?php
		for ($i = 0; $i < sizeof($order_status_code); $i++) {
			echo "<option value=\"" . $order_status_code[$i];
			if (paybox_conf_status_success_recurring_end == $order_status_code[$i]) {
				echo "\" selected=\"selected\">";
			} else {
				echo "\">";
			}
			echo $order_status_name[$i] . "</option>\n";
		} ?>
				</select>
			</td>
			<td><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_STATUS_RECURRING_END_END'); ?>
			</td>
		</tr-->


		<!--tr>
			<td><strong><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_STATUS_RECURRING_END'); ?></strong></td>
			<td>
				<select name="paybox_conf_status_success_recurring_end" >
					<?php
		for ($i = 0; $i < sizeof($order_status_code); $i++) {
			echo "<option value=\"" . $order_status_code[$i];
			if (paybox_conf_status_success_recurring_end == $order_status_code[$i]) {
				echo "\" selected=\"selected\">";
			} else {
				echo "\">";
			}
			echo $order_status_name[$i] . "</option>\n";
		} ?>
				</select>
			</td>
			<td><?php echo $PAYBOX_LANG->_('PS_PAYBOX_CONF_STATUS_RECURRING_END_END'); ?>
			</td>
		</tr-->


		</table>
		<script type="text/javascript">
			function updateDiff() {
				var paybox_conf_debit_type = document.adminForm.paybox_conf_debit_type.value;
				if (paybox_conf_debit_type === 'authorization_only') {
					document.getElementById('paybox_conf_diff').style.display = '';
				} else {
					document.getElementById('paybox_conf_diff').style.display = 'none';
				}
			}
			function updateMinAmount3DS() {
				var paybox_conf_activate_3dsecure = document.adminForm.paybox_conf_activate_3dsecure.value;
				if (paybox_conf_activate_3dsecure === 'selective') {
					document.getElementById('paybox_conf_min_amount_3dsecure').style.display = '';
				} else {
					document.getElementById('paybox_conf_min_amount_3dsecure').style.display = 'none';
				}
			}
		</script>
	<?php
	}

	function has_configuration() {
		// return false if there's no configuration
		return true;
	}

	/**
	 * Returns the "is_writeable" status of the configuration file
	 * @param void
	 * @returns boolean True when the configuration file is writeable, false when not
	 */
	function configfile_writeable() {
		return is_writeable(CLASSPATH . "payment/" . $this->classname . ".cfg.php");
	}

	/**
	 * Returns the "is_readable" status of the configuration file
	 * @param void
	 * @returns boolean True when the configuration file is writeable, false when not
	 */
	function configfile_readable() {
		return is_readable(CLASSPATH . "payment/" . $this->classname . ".cfg.php");
	}

	/**
	 * Writes the configuration file for this payment method
	 * @param array An array of objects
	 * @returns boolean True when writing was successful
	 */
	function write_configuration(&$d) {
		global $mosConfig_absolute_path, $mosConfig_live_site;
		$my_config_array = array(
			"paybox_conf_shop_mode" => $d['paybox_conf_shop_mode'],
			"paybox_conf_site_id" => $d['paybox_conf_site_id'],
			"paybox_conf_rang" => $d['paybox_conf_rang'],
			"paybox_conf_identifiant" => $d['paybox_conf_identifiant'],
			"paybox_conf_key" => $d['paybox_conf_key'],
			"paybox_conf_debit_type" => $d['paybox_conf_debit_type'],
			"paybox_conf_diff" => $d['paybox_conf_diff'],
			"paybox_conf_activate_3dsecure" => $d['paybox_conf_activate_3dsecure'],
			"paybox_conf_min_amount_3dsecure" => $d['paybox_conf_min_amount_3dsecure'],
			"paybox_conf_status_success" => $d['paybox_conf_status_success'],
			"paybox_conf_status_success_recurring" => $d['paybox_conf_status_success_recurring'],
			"paybox_conf_status_success_recurring_end" => $d['paybox_conf_status_success_recurring_end'],
			"paybox_conf_status_success_recurring_end" => $d['paybox_conf_status_success_recurring_end'],
		);
		$config = "<?php\n";
		$config .= "if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); ";
		foreach ($my_config_array as $key => $value) {
			$config .= "define ('$key', '$value');\n";
		}

		$config .= "?>";

		if ($fp = fopen(CLASSPATH . "payment/" . $this->classname . ".cfg.php", "w")) {
			fputs($fp, $config, strlen($config));
			fclose($fp);

		} else {
			return false;
		}

	}

	/**************************************************************************
	 ** name: process_payment()
	 ** returns:
	 ***************************************************************************/
	function process_payment($order_number, $order_total, &$d) {
		return true;
	}

}

class ps_paybox_Language extends vmAbstractLanguage {
	function ps_paybox_Language() {
		global $mosConfig_lang;

		if (file_exists(ADMINPATH . 'languages/paybox/' . $mosConfig_lang . '.php')) {
			require_once(ADMINPATH . 'languages/paybox/' . $mosConfig_lang . '.php');
		} else {
			if (file_exists(ADMINPATH . 'languages/paybox/french.php')) {
				require_once(ADMINPATH . 'languages/paybox/french.php');
			}
		}
		$this->setDebug();
		$this->initModule('paybox', $langvars);

	}

	/**
	 * Translator function
	 * @param string Name of the Class Variable
	 * @param boolean Encode String to HTML entities?
	 * @return string The value of $var (as an HTML Entitiy-encoded string if $htmlentities)
	 */
	function _($var, $htmlentities = false) {

		$module = 'paybox';
		$key = strtoupper($var);
		// if language module not yet loaded, load now
		if (!isset($this->modules[$module])) {
			$this->load($module);
		}
		$text = false;
		if (isset($this->modules[$module][$key])) {
			$text = $this->modules[$module][$key];
		} elseif (isset($this->modules['common'][$key])) {
			$text = $this->modules['common'][$key];
			$module = 'common';
		}
		if ($text !== false) {
			if ($htmlentities) {
				$text = htmlentities($text, ENT_QUOTES, $this->getCharset($module));
				// some symbols are not converted correctly... doing manually
				$text = str_replace(chr(128), '&euro;', $text);
				// enable the use of HTML tags in language file... is this really good?
				$text = str_replace('&lt;', '<', $text);
				$text = str_replace('&gt;', '>', $text);
				return $text;
			} else {
				$text = $this->convert($text, $module);
				return stripslashes($text);
			}
		} elseif ($this->_debug) {
			return "$var is missing in language file.";
		} else {
			return $var;
		}
	}
}

class payboxHelper {

	static function getHmac($post, $payboxKey) {

		$msg = '';

		$msg = payboxHelper::stringifyArray($post);
		$hmac = payboxHelper::generateHMAC($msg, $payboxKey);
		return $hmac;
	}

	static function stringifyArray($array) {
		$string = '';
		foreach ($array as $key => $value) {
			$string .= $key . "=" . $value . '&';
		}
		return substr($string, 0, -1);
	}

	/**
	 * @return string
	 */

	static function getHashAlgo() {

		return "SHA512";
	}

	static private function generateHMAC($msg, $payboxKey) {
		$binKey = pack("H*", $payboxKey);
		$hmac = strtoupper(hash_hmac(payboxHelper::getHashAlgo(), $msg, $binKey));
		return $hmac;
	}

	static private function checkIps() {
		$paybox_ips = array('194.2.122.158', '195.25.7.166', '195.101.99.76');
		if (!in_array($_SERVER['REMOTE_ADDR'], $paybox_ips)) {
			return false;
		}
		return true;
	}

	static function getLangue() {

		$langPaybox = array(
			'fr' => 'FRA',
			'en' => 'GBR',
			'es' => 'ESP',
			'it' => 'ITA',
			'de' => 'DEU',
			'nl' => 'NLD',
			'se' => 'SWE',
			'pt' => 'PRT',
		);
		$lang = JFactory::getLanguage();
		$tag = strtolower(substr($lang->get('tag'), 0, 2));
		if (array_key_exists($tag, $langPaybox)) {
			return $langPaybox[$tag];
		} else {
			return $langPaybox['en'];
		}
	}

	/**
	 * Returns Paybox available server URLS
	 * @return string
	 */

	static function getPayboxServerUrl($shop_mode) {

		if ($shop_mode == 'test') {
			$url = 'https://preprod-tpeweb.paybox.com/php/';
		} else {
			$url = 'https://' . payboxHelper::getPayboxServerAvailable() . '/php/';
		}
		return $url;

	}

	static function getPayboxServerAvailable() {

		$servers = array(
			'tpeweb.paybox.com', //serveur primaire
			'tpeweb1.paybox.com' //serveur secondaire
		);
		foreach ($servers as $server) {
			$doc = new DOMDocument();
			$doc->loadHTMLFile('https://' . $server . '/load.html');

			$server_status = "";
			$element = $doc->getElementById('server_status');
			if ($element) {
				$server_status = $element->textContent;
			}
			if ($server_status == "OK") {
				return $server;
			}
		}

		return FALSE;
	}

	public function getReturn() {

		$returnFieldsString = '';
		$returnFields = payboxHelper::getReturnFields();
		foreach ($returnFields as $returnField) {
			$returnFieldsString .= $returnField . ":" . $returnField . ';';
		}
		return substr($returnFieldsString, 0, -1);

	}

	public function getReturnFields() {
		$fields = array(
			'M',
			'R',
			'T',
			'A',
			'B',
			'P',
			'C',
			'S',
			'Y',
			'E',
			'D',
			'I',
			'N',
			'J',
			'H',
			'G',
			'O',
			'F',
			'W',
			'Z',
			'K', // MUST BE THE LAST ONE
		);
		return $fields;
	}

	static function isPayboxResponseValid($paybox_data, $checkIps = false, $useQuery = false) {
		$checkIps = false;
		if ($checkIps) {
			if (($msg = payboxHelper::checkIps()) !== true) {
				return FALSE;
			}
		}
		$unsetNonPayboxData = true;
		if (payboxHelper::checkSignature($paybox_data, $unsetNonPayboxData, $useQuery) != 1) {
			$msg = 'Got a Paybox request with invalid signature';
			return FALSE;
		} else {
		}


		return true;
	}

	/**
	 * @param $paybox_data
	 * @param bool $unsetNonPayboxData
	 * @param bool $useQuery
	 * @return bool
	 */
	static private function checkSignature($paybox_data, $unsetNonPayboxData = true, $useQuery = true) {
		if (!$useQuery) {
			$query_string = payboxHelper::stringifyArray($paybox_data);
		} else {
			$query_string = $_SERVER['QUERY_STRING'];
		}
		$keyFile = payboxHelper::getKeyFileName();

		$pbxIsValidSignature = payboxHelper::pbxIsValidSignature($keyFile, $query_string);

		return $pbxIsValidSignature;

	}

	/**
	 * @param $keyfile
	 * @param $queryString
	 * @return bool
	 */

	public function pbxIsValidSignature($keyfile, $queryString) {
		//return true;
		$key = payboxHelper::loadKey($keyfile);
		if (!$key) {
			return false;
		}
		$sig = '';
		$queryStringNoSig = "";
		payboxHelper::GetSignedData($queryString, $queryStringNoSig, $sig);
		$sigURLDecoded = payboxHelper::getSignatureDecoded($sig, true);
		$sigURLNotDecoded = payboxHelper::getSignatureDecoded($sig, false);
		$verifySigURLDecoded = openssl_verify($queryStringNoSig, $sigURLDecoded, $key);
		$verifySigURLNotDecoded = openssl_verify($queryStringNoSig, $sigURLNotDecoded, $key);
		openssl_free_key($key);
		// openssl_verify: verification : 1 si valide, 0 si invalide, -1 si erreur
		if ($verifySigURLDecoded or $verifySigURLNotDecoded) {
			return true;
		}
		return false;

	}

	/**
	 * @param        $keyfile
	 * @param bool $pub
	 * @param string $pass
	 * @return bool|resource
	 */
	private function loadKey($keyfile, $public_key = TRUE, $pass = '') {


		$fp = $filedata = $key = FALSE; // initialisation variables
		$fsize = filesize($keyfile); // taille du fichier
		if (!$fsize) {
			$this->pbxError('loadKey :' . 'Key File:' . $keyfile . ' not found');
			return FALSE;
		}
		$fp = fopen($keyfile, 'r'); // ouverture fichier
		if (!$fp) {
			$this->pbxError('Cannot open Key File' . $keyfile);
			return FALSE;
		}
		$filedata = fread($fp, $fsize);
		fclose($fp);
		if (!$filedata) {
			$this->pbxError('Empty Key File' . $keyfile);
			return FALSE;
		}
		if ($public_key) {
			$key = openssl_pkey_get_public($filedata);
		} // recuperation de la cle publique
		else // ou recuperation de la cle privee
		{
			$key = openssl_pkey_get_private(array($filedata, $pass));
		}
		return $key; // renvoi cle ( ou erreur )
	}

	/**
	 * renvoi les donnes signees et la signature
	 * @param $qrystr
	 * @param $data
	 * @param $sig
	 */
	public function GetSignedData($qrystr, &$data, &$sig) {
		$pos = strrpos($qrystr, '&');
		$data = substr($qrystr, 0, $pos);
		$pos = strpos($qrystr, '=', $pos) + 1;
		$sig = substr($qrystr, $pos);
	}


	/**
	 * @param $sig
	 * @param $doDecode
	 * @return string
	 */
	function getSignatureDecoded($sig, $doDecode) {
		if ($doDecode) {
			$sig = urldecode($sig);
		} else {
		}
		$sig = base64_decode($sig); //decodage Base 64
		return $sig;
	}

	/**
	 * @return string
	 */
	static function getKeyFileName() {
		$path = CLASSPATH . "payment/paybox/key/pubkey.pem";
		return $path;
	}

	function getTime() {
		return date("c");
	}


}

?>