<?php
if (! defined ( '_VALID_MOS' ) && ! defined ( '_JEXEC' ))
	die ( 'Direct Access to ' . basename ( __FILE__ ) . ' is not allowed.' );

/**
*
* @version $Id: payment.class.php 27/09/2008
* @package VirtueMart
* @subpackage classes
* @copyright Copyright 2008 HoaNT-Vsmarttech for this class
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/ 

class vmInstallerCurrency_Converter {
	function getTitle() {
		return 'Currency Converter Modules';
	}
	/**
	 * Method to valid the paymentMehod install
	 *
	 * @static
	 * @param $infos the infomation of method $files list of file need to install
	 * @return 
	 * @since 1.2.0
	 */
	function valid_payment($infos, $files, $xml) {
		global $VM_LANG, $vmLogger;
		
		$name = $infos ['name'];
		if ($name == '') {
			$vmLogger->err ( "The name of Currency Converter was not found in the package!" );
			return false;
		}
		$xml_name = $name . ".xml";
		$file_name = $name . ".php";
		if (JFile::getName ( $xml ) != $xml_name) {
			$vmLogger->err ( "The file $name.xml was not found!!" );
			return false;
		}
		
		foreach ( $files as $file ) {
			if (JFile::getName ( $file ) == $file_name) {
				$name = true;
			}
		}
		if ($name == true) {
			return true;
		} else {
			$vmLogger->err ( "The file $file_name was not found!!" );
			return false;
		}
	}
	
	/**
	 * Method to detect the extension type from a package directory
	 *
	 * @static
	 * @param array $package all about the installation
	 * @return 
	 * @since 1.2.0
	 */
	function install($package) {
		global $VM_LANG, $vmLogger;
		
		//print_r($package);
		$files = JFolder::files ( $package ['dir'], '\.xml$', 1, true );
		foreach ( $files as $file ) {
			//Get the information of the XML 
			$info = vmInstaller::getInfo ( $file );
			
			//Get the data of the installation
			$file_install = vmInstaller::getFile ( $file );
			
			//valid the Payment method
			$valid = vmInstallerPayment::valid_payment ( $info, $file_install ['file'], $file );
			
			if (! $valid) {
				return false;
			}
			if( !empty($file_install ['languages'])) {
				$lang_path = JPATH_ADMINISTRATOR . DS . "components" . DS . "com_virtuemart". DS . 'languages' . DS . 'plg_currency_converter_'.$info ['name'];
				$check_file = vmInstaller::install_file ( $package ['dir'], $file_install ['languages'], $lang_path );
			}
			$path = JPATH_ADMINISTRATOR . DS . "components" . DS . "com_virtuemart" . DS . 'plugins'. DS . 'currency_converter';
			$check_file = vmInstaller::install_file ( $package ['dir'], $file_install ['file'], $path );
			
			if ($check_file === 'exists') {
				return false;
			} else {
				$check_query = vmInstaller::install_query ( $file_install ['query'] );
				if ($check_file && $check_query) {
					$src = $package ['dir'] . DS . JFile::getName ( $file );
					$path = JPATH_ADMINISTRATOR . DS . "components" . DS . "com_virtuemart" . DS . "plugins" . DS . "currency_converter"  . DS . $info ['name'] . ".xml";
					
					JFile::copy ( $src, $path );
				}
				if ($check_file && $check_query) {
					echo 'SUCCESSFUL_INSTALL';
					echo "<br>" . $info ['description'];
				} else {
					vmInstaller::rollback ( $file_install ['file'], $file_install ['query'], $path );
				}
			}
		}
		return true;
	}

	

	/**
	 * Method uninstaller currency_converter method
	 *
	 * @static
	 * @param string $paymentname The Name of the Currency Converter you want to remove
	 * @return 
	 * @since 1.2.0
	 */
	function uninstall($paymentname) {
		$xml_path = JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_virtuemart' . DS . 'plugins' . DS . 'currency_converter' .  DS . $paymentname . '.xml';
		jimport ( 'joomla.filesystem.file' );
		$path = JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_virtuemart'. DS . 'plugins' . DS . 'currency_converter';
		if (JFile::exists ( $xml_path )) {
			$file_install = vmInstaller::getFile ( $xml_path );
			vmInstaller::rollback ( $file_install ['file'], $file_install ['query'], $path );
			$url = 'index.php?pshop_mode=admin&page=installer.extension_list&option=com_virtuemart';
			$msg = 'Uninstall successfully!';
			JFile::delete ( $xml_path );
		} else {
			$url = 'index.php?pshop_mode=admin&page=installer.extension_list&option=com_virtuemart';
			$msg = 'Can not uninstall this currency_converter! The XML file was not found!';
		}
		vmRedirect($url, $msg);
	}
	/**
	 * List currency_converter modules
	 *
	 * @static
	 * @return array
	 * @since 1.2.0
	 */
	function get_extension_list() {

		$files = vmReadDirectory ( ADMINPATH . "plugins/currency_converter/", ".php$", true, true );
		$array = array ( );
		foreach ( $files as $file ) {
			$file_info = pathinfo ( $file );
			$filename = $file_info ['basename'];
			$array [basename ( $filename, '.php' )] = basename ( $filename, '.php' );
		}
		return $array;
	}
}

?>