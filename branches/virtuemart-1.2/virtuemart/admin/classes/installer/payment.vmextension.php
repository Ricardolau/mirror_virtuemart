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

class vmInstallerPayment {
	function getTitle() {
		return 'Payment Modules';
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
			$vmLogger->err ( "The name of Payment Module was not found in the package!" );
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
		
		//print_r($package);exit;
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
				$lang_path = JPATH_ADMINISTRATOR . DS . "components" . DS . "com_virtuemart". DS . 'languages' . DS . 'plg_payment_'.$info ['name'];
				$check_file = vmInstaller::install_file ( $package ['dir'], $file_install ['languages'], $lang_path );
			}
			$path = JPATH_ADMINISTRATOR . DS . "components" . DS . "com_virtuemart" . DS . 'plugins'. DS . 'payment';
			$check_file = vmInstaller::install_file ( $package ['dir'], $file_install ['file'], $path );
			
			if ($check_file === 'exists') {
				$vmLogger->err( 'One or more files already exist in the destination directory.');
				return false;
			} else {
				$check_query = vmInstaller::install_query ( $file_install ['query'] );
				
				if ($check_file && $check_query) {
					$src = $package ['dir'] . DS . JFile::getName ( $file );
					$path = JPATH_ADMINISTRATOR . DS . "components" . DS . "com_virtuemart" . DS . "plugins" . DS . "payment"  . DS . $info ['name'] . ".xml";
					
					JFile::copy ( $src, $path );

					$vmLogger->info( $VM_LANG->_('SUCCESSFUL_INSTALL'));
					
				} else {
					vmInstaller::rollback ( $file_install ['file'], $file_install ['query'], $path );
					JFile::delete($package['packagefile']);
					vmRemoveDirectoryR($package['extractdir']);
				}
			}
		}
		return true;
	}

	

	/**
	 * Method uninstaller Payment method
	 *
	 * @static
	 * @param string $paymentname The Name of the Payment Module you want to remove
	 * @return 
	 * @since 1.2.0
	 */
	function uninstall($paymentname) {
		global $vmLogger;
		
		$xml_path = JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_virtuemart' . DS . 'plugins' . DS . 'payment' .  DS . $paymentname . '.xml';
		jimport ( 'joomla.filesystem.file' );
		$path = JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_virtuemart'. DS . 'plugins' . DS . 'payment';
		if (JFile::exists ( $xml_path )) {
			$file_install = vmInstaller::getFile ( $xml_path );
			vmInstaller::rollback ( $file_install ['file'], $file_install ['query'], $path );
			
			$vmLogger->info('Uninstall successful!');
			JFile::delete ( $xml_path );
			return true;
		} else {
			
			$vmLogger->err( 'Can not uninstall this paymentmethod! The XML file not found!');
		}
		return false;
	}
	/**
	 * Method show payment method
	 *
	 * @static
	 * @param 
	 * @return List payment method
	 * @since 1.2.0
	 */
	function get_extension_list() {

		$files = vmReadDirectory ( ADMINPATH . "plugins/payment/", ".php$", true, true );
		$array = array ( );
		foreach ( $files as $file ) {
			$file_info = pathinfo ( $file );
			$filename = $file_info ['basename'];
			if (stristr ( $filename, '.cfg' )) {
				continue;
			}
			if( $filename == 'payment.php' ) continue;
			$array [basename ( $filename, '.php' )] = basename ( $filename, '.php' );
		}
		return $array;
	}
}

?>