<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
/**
* Currency Converter Live Module 
* 
* @version $Id: currency_convert.php,v 1.2 2005/09/27 17:48:50 soeren_nb Exp $
* @package VirtueMart
* @subpackage classes
* @copyright Copyright (C) 2004-2005 Soeren Eberhardt. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
$GLOBALS['converter_array'] = '';

/**
 * Converts an amount from one currency into another using
 * the rate conversion table from the European Central Bank
 *
 * @param float $amountA
 * @param string $currA defaults to $vendor_currency
 * @param string $currB defaults to $GLOBALS['product_currency'] (and that defaults to $vendor_currency)
 * @return mixed The converted amount when successful, false on failure
 */
function convertECB( $amountA, $currA='', $currB='' ) {
	global $mosConfig_cachepath, $mosConfig_live_site, $mosConfig_absolute_path,
			$mosConfig_offset, $vendor_currency, $vmLogger;

	// global $vendor_currency is DEFAULT!
	if( !$currA ) {
		$currA = $vendor_currency;
	}
	if( !$currB ) {
		$currB = $GLOBALS['product_currency'];
	}
	// If both currency codes match, do nothing
	if( $currA == $currB ) {		
		return $amountA;
	}
	if( $GLOBALS['converter_array'] == '') {
		setlocale(LC_TIME, "en-GB");
		$now = time() + 3600; // Time in ECB (Germany) is GMT + 1 hour (3600 seconds)
		if (date("I")) {
			$now += 3600; // Adjust for daylight saving time
		}
		$weekday_now_local = gmdate('w', $now); // week day, important: week starts with sunday (= 0) !!
		$date_now_local = gmdate('Ymd', $now);
		$time_now_local = gmdate('Hi', $now);
		$time_ecb_update = '1415';
		if( is_writable($mosConfig_cachepath) ) {
			$store_path = $mosConfig_cachepath;
		}
		else {
			$store_path = $mosConfig_absolute_path."/media";
		}
		  
		$archivefile_name = $store_path.'/daily.xml';
		$ecb_filename = 'http://www.ecb.int/stats/eurofxref/eurofxref-daily.xml';
		$val = '';
		$archive = 'yes';
	
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
			  	$archive = '';	
	    	}
		}
		else {
			$curr_filename = $ecb_filename;
		}
		  
		if( !is_writable( $store_path )) {
		  $archive = '';
		  $vmLogger->debug( "The file $archivefile_name can't be created. The directory $store_path is not writable" );
		}
		if( $curr_filename == $ecb_filename ) {
			// Fetch the file from the internet
			require_once( CLASSPATH.'connectionTools.class.php');
			$contents = vmConnector::handleCommunication( $curr_filename );
		}
		else {
			$contents = @file_get_contents( $curr_filename );
		}
		if( $contents ) {
			// if archivefile does not exist
			if($archive == 'yes') {
				// now write new file
				file_put_contents( $archivefile_name, $contents );
			}
	
			$contents = str_replace ("<Cube currency='USD'", " <Cube currency='EUR' rate='1'/> <Cube currency='USD'", $contents);
			
			/* XML Parsing */
			require_once( $mosConfig_absolute_path. '/includes/domit/xml_domit_lite_include.php' );
			$xmlDoc =& new DOMIT_Lite_Document();
			if( !$xmlDoc->parseXML( $contents, false, true ) ) {
				$vmLogger->err( 'Failed to parse the Currency Converter XML document.');
				return false;
			}
			
			$currency_list = $xmlDoc->getElementsByTagName( "Cube" );
			// Loop through the Currency List
			for ($i = 0; $i < $currency_list->getLength(); $i++) {
				$currNode =& $currency_list->item($i);
				$currency[$currNode->getAttribute("currency")] = $currNode->getAttribute("rate");
				unset( $currNode );
			}
			$GLOBALS['converter_array'] = $currency;
		}
		else {
			$GLOBALS['converter_array'] = -1;
			$vmLogger->err( 'Failed to retrieve the Currency Converter XML document.');
			return false;
		}
	}
	$valA = isset( $GLOBALS['converter_array'][$currA] ) ? $GLOBALS['converter_array'][$currA] : 1;
	$valB = isset( $GLOBALS['converter_array'][$currB] ) ? $GLOBALS['converter_array'][$currB] : 1;
	
	if ($valA) {
		$val = $amountA * $valB / $valA;
	} 
	else {
		$val = 0;
	}
	$vmLogger->debug('Converted '.$amountA.' '.$currA.' to '.$val.' '.$currB);
	
	return $val;
} // end function convertecb

?>
