<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
*
* @version $Id$
* @package VirtueMart
* @subpackage languages
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
class vmLanguage extends vmAbstractLanguage {
	var $_VM_CANADAPOST_SEND_LANGUAGE_CODE = 'EN';
	var $_VM_CANADAPOST_FORM_HANDLING_DATE = 'Expected Date of Arrival';
	var $_VM_CANADAPOST_FORM_HANDLING_LBL = 'Handling Charge';
	var $_VM_SHIPPING_METHOD_CANADAPOST_MERCHANT_CPCID = 'Canada Post Merchant ID';
	var $_VM_SHIPPING_METHOD_CANADAPOST_MERCHANT_CPCID_EXPLAIN = 'Your Canada Post Merchant ID';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_SERVER = 'Canada Post Server IP';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_SERVER_EXPLAIN = 'This is the Canada Post Server IP Address - default is 206.191.4.228';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_PORT = 'Canada Post Server Port';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_PORT_EXPLAIN = 'This is the Canada Post Server Port<br /> The server port must be 30000<br /> If you cannot use this port, you will not be able to use this module<br /> check with your hosting company to see if you can access this port first';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_FEDERAL_TAX = 'Canada Post Federal Tax Amount';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_FEDERAL_TAX_EXPLAIN = 'Federal Tax Amount goes here';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_PROVINCIAL_TAX = 'Canada Post Provincal Tax Amount';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_PROVINCIAL_TAX_EXPLAIN = 'Provincal Tax Amount goes here';
	var $_VM_SHIPPING_METHOD_CANADAPOST_ARRIVAL_DATE_EXPLAIN = 'Arrival Date Description';
	var $_VM_SHIPPING_METHOD_CANADAPOST_ARRIVAL_DATE_EXPLAIN_I = 'Description for Arrival Dates';
	var $_VM_SHIPPING_METHOD_CANADAPOST_HANDLING_CHARGE_EXPLAIN = 'Handling Charge Description';
	var $_VM_SHIPPING_METHOD_CANADAPOST_HANDLING_CHARGE_EXPLAIN_I = 'Description for Handling Carges';
        
}
class phpShopLanguage extends vmLanguage { }

/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>