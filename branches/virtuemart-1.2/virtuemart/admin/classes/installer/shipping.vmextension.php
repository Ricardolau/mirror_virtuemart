<?php
if (! defined ( '_VALID_MOS' ) && ! defined ( '_JEXEC' ))
	die ( 'Direct Access to ' . basename ( __FILE__ ) . ' is not allowed.' );

/**
*
* @version $Id: shipping.class.php 27/09/2008
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

class vmInstallerShipping {
	function getTitle() {
		return 'Shipping Modules';
	}
	/**
	 * Method to valid the Shipping method install
	 *
	 * @static
	 * @param $infos the infomation of method $files list of file need to install
	 * @return 
	 * @since 1.2.0
	 */
	function valid_shipping($infos, $files, $xml) {
		global $VM_LANG, $vmLogger;
		
		$name = $infos ['name'];
		if ($name == '') {
			$vmLogger->err ( "The name of Shipping Module not found!" );
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
		if ($name == true ) {
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
			if( empty($file_install)) {
				return false;
			}
			//valid the Shipping method
			$valid = vmInstallerShipping::valid_shipping($info, $file_install ['file'], $file );
			
			if (! $valid) {
				return false;
			}
			if( !empty($file_install ['languages'])) {
				$lang_path = JPATH_ADMINISTRATOR . DS . "components" . DS . "com_virtuemart". DS . 'languages' . DS . 'plg_shipping_'.$info ['name'];
				$check_file = vmInstaller::install_file ( $package ['dir'], $file_install ['languages'], $lang_path );
			}
			$path = JPATH_ADMINISTRATOR . DS . "components" . DS . "com_virtuemart". DS . 'plugins' . DS . 'shipping';
			$check_file = vmInstaller::install_file ( $package ['dir'], $file_install ['file'], $path );
			
			if ($check_file === 'exists') {
				return false;
			} else {
				$check_query = vmInstaller::install_query ( $file_install ['query'] );
				if ($check_file && $check_query) {
					$src = $package ['dir'] . DS . JFile::getName ( $file );
					$path = JPATH_ADMINISTRATOR . DS . "components" . DS . "com_virtuemart" . DS . "plugins" . DS . "shipping" . DS . $info ['name'] . ".xml";
					
					JFile::copy ( $src, $path );
					$vmLogger->info( $VM_LANG->_('SUCCESSFUL_INSTALLATION'));
				} else {
					$vmLogger->info( $VM_LANG->_('FAILED_INSTALLATION'));
					vmInstaller::rollback ( $file_install ['file'], $file_install ['query'], $path );
				}
			}
		}
		return true;
	}
	
	/**
	 * Method uninstaller Shipping method
	 *
	 * @static
	 * @param $paymentname is shipping name want to remove
	 * @return 
	 * @since 1.2.0
	 */
	function uninstall($shippingname) {
		$xml_path = JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_virtuemart' . DS . 'plugins' . DS . 'shipping' . DS . $shippingname . '.xml';
		jimport ( 'joomla.filesystem.file' );
		$path = JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_virtuemart'. DS . 'plugins' . DS . 'shipping';
		if (JFile::exists ( $xml_path )) {
			$file_install = vminstaller::getFile ( $xml_path );
			vminstaller::rollback ( $file_install ['file'], $file_install ['query'], $path );
			$url = 'index.php?pshop_mode=admin&page=installer.extension_list&option=com_virtuemart';
			$msg = 'Uninstall successfully!';
			JFile::delete ( $xml_path );
		} else {
			$url = 'index.php?pshop_mode=admin&page=installer.extension_list&option=com_virtuemart';
			$msg = 'Can not uninstall this Shipping! The XML file not found!';
		}
		vmRedirect($url, $msg);
	}
	
	/**
	 * Method show list of shipping method
	 *
	 * @static
	 * @param 
	 * @return list of shipping method
	 * @since 1.2.0
	 */
	function get_extension_list()
	{
		global $VM_LANG, $vmLogger;
		$files = vmReadDirectory ( ADMINPATH . "plugins/shipping/", ".php$", true, true );
		
		$array = array ( );
		foreach ( $files as $file ) {
			$file_info = pathinfo ( $file );
			$filename = $file_info ['basename'];
			if (stristr ( $filename, '.cfg' )) {
				continue;
			}
			if( !file_exists(ADMINPATH . "plugins/shipping/".basename ( $filename, '.php' ).'.xml')) continue;
			$array [basename ( $filename, '.php' )] = basename ( $filename, '.php' );
		}
		return $array;
	}
}

?>