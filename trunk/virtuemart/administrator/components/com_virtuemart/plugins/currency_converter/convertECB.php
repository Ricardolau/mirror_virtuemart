<?php
if( !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
* ECB Currency Converter Module
*
* @version $Id$
* @package VirtueMart
* @subpackage classes
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.org
*/

/**
 * This class uses the currency rates provided by an XML file from the European Central Bank
 * Requires cURL or allow_url_fopen
 */
class convertECB {

	var $document_address = 'https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml';

	var $info_address = 'https://www.ecb.int/stats/eurofxref/';
	var $supplier = 'European Central Bank';

	/**
	 * Converts an amount from one currency into another using
	 * the rate conversion table from the European Central Bank
	 *
	 * @param float $amountA
	 * @param string $currA defaults to $vendor_currency
	 * @param string $currB defaults to
	 * @return mixed The converted amount when successful, false on failure
	 */
	function convert( $amountA, $currA='', $currB='', $a2rC = true, $relatedCurrency = 'EUR') {

		if($currA==$currB){
			return $amountA;
		}

		static $globalCurrencyConverter = false;
		if(!$globalCurrencyConverter){
			$cache = VmConfig::getCache('convertECB');

			$cache->setLifeTime(360); // check 4 time per day
			$cache->setCaching(1); //enable caching

			$globalCurrencyConverter = $cache->get( array( 'convertECB', 'getSetExchangeRates' ),array($this->document_address ));
		}

		if(!$globalCurrencyConverter ){
			return $amountA;
		} else {
			$valA = isset( $globalCurrencyConverter[$currA] ) ? $globalCurrencyConverter[$currA] : 1.0;
			$valB = isset( $globalCurrencyConverter[$currB] ) ? $globalCurrencyConverter[$currB] : 1.0;

			$val = (float)$amountA * (float)$valB / (float)$valA;

			return $val;
		}
	}

	static function getSetExchangeRates($ecb_filename){

			$archive = true;
			setlocale(LC_TIME, "en-GB");
			$now = time() + 3600; // Time in ECB (Germany) is GMT + 1 hour (3600 seconds)
			if (date("I")) {
				$now += 3600; // Adjust for daylight saving time
			}
			$weekday_now_local = gmdate('w', $now); // week day, important: week starts with sunday (= 0) !!
			$date_now_local = gmdate('Ymd', $now);
			$time_now_local = gmdate('Hi', $now);
			$time_ecb_update = '1415';
			if( is_writable(VMPATH_ROOT .'/cache') ) {
				$store_path = VMPATH_ROOT .'/cache';
			}
			else {
				$store_path = VMPATH_ROOT .'/media';
			}

			$archivefile_name = $store_path.'/daily.xml';

			$val = '';

			if(file_exists($archivefile_name) && filesize( $archivefile_name ) > 0 ) {
				// timestamp for the Filename
				$file_datestamp = date('Ymd', filemtime($archivefile_name));

				// check if today is a weekday - no updates on weekends
				if( date( 'w' ) > 0 && date( 'w' ) < 6
				// compare filedate and actual date
				&& $file_datestamp != $date_now_local
				// if localtime is greater then ecb-update-time go on to update and write files
				&& $time_now_local > $time_ecb_update) {
					$curr_filename = $ecb_filename;
				}
				else {
					$curr_filename = $archivefile_name;
					$last_updated = $file_datestamp;
					$archive = false;
				}
			}
			else {
				$curr_filename = $ecb_filename;
			}

			if( !is_writable( $store_path )) {
				$archive = false;
				vmError( "The file $archivefile_name can't be created. The directory $store_path is not writable" );
			}

			if( $curr_filename == $ecb_filename ) {
				// Fetch the file from the internet
				if (!$contents = VmConnector::handleCommunication( $curr_filename )) {
					if (isset($file_datestamp)) {
						$contents = @file_get_contents( $curr_filename );
					}
				} else $last_updated = date('Ymd');

			}
			else {
				$contents = @file_get_contents( $curr_filename );
			}
			if( $contents ) {
				// if archivefile does not exist
				if( $archive ) {
					// now write new file
					file_put_contents( $archivefile_name, $contents );
				}

				$contents = str_replace ("<Cube currency='USD'", " <Cube currency='EUR' rate='1'/> <Cube currency='USD'", $contents);

				/* XML Parsing */
				$xmlDoc = new DomDocument();

				if( !$xmlDoc->loadXML($contents) ) {
					//todo
					vmError('Failed to parse the Currency Converter XML document.');
					vmError('The content: '.$contents);
					//					$GLOBALS['product_currency'] = $vendor_currency;
					return false;
				}

				$currency_list = $xmlDoc->getElementsByTagName( "Cube" );
				// Loop through the Currency List
				$length = $currency_list->length;
				for ($i = 0; $i < $length; $i++) {
					$currNode = $currency_list->item($i);
					if(!empty($currNode) && !empty($currNode->attributes->getNamedItem("currency")->nodeValue)){
						$currency[$currNode->attributes->getNamedItem("currency")->nodeValue] = $currNode->attributes->getNamedItem("rate")->nodeValue;
						unset( $currNode );
					}

				}
				$globalCurrencyConverter = $currency;
			}
			else {
				$globalCurrencyConverter = false;
				vmError( 'Failed to retrieve the Currency Converter XML document.');
// 				return false;
			}

			return $globalCurrencyConverter;
	}

}
// pure php no closing tag
