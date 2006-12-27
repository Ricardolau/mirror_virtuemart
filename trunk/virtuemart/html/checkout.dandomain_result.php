<?php 
/**
* Dandomain Order Confirmation Handler
*
* @version $Id: checkout.dandomain_result.php 431 2006-10-17 21:55:46 +0200 (Di, 17 Okt 2006) soeren_nb $
* @package VirtueMart
* @subpackage html
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
defined('_VALID_MOS') or die( "Direct access to this location is not allowed.");   

require_once(  CLASSPATH ."payment/ps_pbs.cfg.php");
global $mosConfig_secret;

$sessionid = mosGetParam( $_GET, "sessionid" );

$cookievals = base64_decode( $sessionid );
$orderID = substr( $cookievals, 0, 8 );
$order_id = intval( $orderID );
$virtuemartcookie = substr( $cookievals, 8, 32 );
$remote_ip_md5 = substr( $cookievals, 40, 32 );
$md5_check = substr( $cookievals, 72, 32 );

// Check Validity of the Page Load using the MD5 Check
$submitted_hashbase = $orderID . $virtuemartcookie . $remote_ip_md5;

// OK! VALID...
if( !$my->id ) {
	mosNotAuth();
	echo '<br />';
	include( PAGEPATH. 'checkout.login_form.php');
	echo '<br /><br />';
}
elseif( $md5_check === md5( $submitted_hashbase . $mosConfig_secret . ENCODE_KEY) ) {
  
	$qv = "SELECT order_id, order_number FROM #__{vm}_orders ";
    $qv .= "WHERE order_id='".$order_id."' AND user_id='".$my->id."'";
    $dbo = new ps_DB;
    $dbo->query($qv);
    if($dbo->next_record()) {
        $d['order_id'] = $dbo->f("order_id");
        
        if( empty($_GET['errorcode']) ) {
            
            // UPDATE THE ORDER STATUS to 'VALID'
            $d['order_status'] = PBS_VERIFIED_STATUS;
            // Setting this to "Y" = yes is required by Danish Law
            $d['notify_customer'] = "Y";
            $d['include_comment'] = "Y";
            // Notifying the customer about the transaction key and
            // the order Status Update
            $d['order_comment'] = "
                The Payment Transaction was approved by PBS. \n
                The Transaction has received the following Transaction Number:\n\n
                Transaction Number: ".urldecode($_REQUEST['transact'])."\n";
                
            require_once ( CLASSPATH . 'ps_order.php' );
            $ps_order= new ps_order;
            $ps_order->order_status_update($d);
            
    ?> 
            <img src="<?php echo IMAGEURL ?>ps_image/button_ok.png" align="center" alt="Success" border="0" />
            <h2><?php echo $VM_LANG->_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS ?></h2>
        <?php
        }
        else {
            // the Payment wasn't successful. Maybe the Payment couldn't
            // be verified and is pending
            // UPDATE THE ORDER STATUS to 'INVALID'
            $d['order_status'] = PBS_INVALID_STATUS;
            // Setting this to "Y" = yes is required by Danish Law
            $d['notify_customer'] = "Y";
            // Notifying the customer about the transaction key and
            // the order Status Update
            $d['order_comment'] = "
                The Payment Transaction was not approved by PBS. \n
                The Transaction has received the following Transaction Number:\n\n
                Transaction Number: ".urldecode($_REQUEST['transact'])."\n";
            require_once ( CLASSPATH . 'ps_order.php' );
            $ps_order= new ps_order;
            $ps_order->order_status_update($d);
            
    ?> 
            <img src="<?php echo IMAGEURL ?>ps_image/button_cancel.png" align="center" alt="Failure" border="0" />
            <h2><?php echo $VM_LANG->_PHPSHOP_PAYMENT_ERROR ?></h2>
        <?php
            switch (intval(urldecode($_GET['errorcode']))) {
                case 0: echo "Merchant/forretningsnummer ugyldigt"; break; 
                case 1: echo "Ugyldigt kreditkortnummer"; break; 
                case 2: echo "Ugyldigt belob"; break; 
                case 3: echo "OrderID mangler eller er ugyldig"; break; 
                case 4: echo "PBS afvisning - (Oftest - ugyldig kortdata, sp?rret kort osv...)"; break; 
                case 5: echo "Intern server fejl hos DanDomain eller PBS"; break; 
                case 6: echo "E-dankort ikke tilladt. Kontakt DanDomain"; break; 
                default: echo "System fejl"; break; 
            }
        }
        ?>
        <br />
        <p><a href="<?php @$sess->purl( SECUREURL."index.php?option=com_virtuemart&page=account.order_details&order_id=$order_id" ) ?>">
           <?php echo $VM_LANG->_PHPSHOP_ORDER_LINK ?></a>
        </p>
        <?php
      }
      else {
        ?>
        <img src="<?php echo IMAGEURL ?>ps_image/button_cancel.png" align="center" alt="Failure" border="0" />
        <span class="message"><?php echo $VM_LANG->_PHPSHOP_PAYMENT_ERROR ?> (Order not found)</span><?php
      }
}
else {
        ?>
        <img src="<?php echo IMAGEURL ?>ps_image/button_cancel.png" align="center" alt="Failure" border="0" />
        <span class="message"><?php echo $VM_LANG->_PHPSHOP_PAYMENT_ERROR ?> (MD5 Check Failure)</span><?php
  }
  ?>
