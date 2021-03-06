<?php 
/**
* @version $Id: checkout.freepay_result.php,v 1.2 2005/05/22 09:21:15 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage Payment
* @copyright (C) 2004-2005 Soeren Eberhardt
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*
* Freepay Order Confirmation Handler
*/
defined('_VALID_MOS') or die( "Direct access to this location is not allowed.");   

require_once(  CLASSPATH ."payment/ps_pbs.cfg.php");

$sessionid = mosGetParam( $_REQUEST, "sessionid" );
$accept = mosGetParam( $_REQUEST, "accept", "0" );
$transacknum = mosGetParam( $_REQUEST, "transacknum" );

$cookievals = base64_decode( $sessionid );
$orderID = substr( $cookievals, 0, 8 );
$order_id = intval( $orderID );
$phpshopcookie = substr( $cookievals, 8, 32 );
$sessioncookie = substr( $cookievals, 40, 32 );
$md5_check = substr( $cookievals, 72, 32 );

// Check Validity of the Page Load using the MD5 Check
$submitted_hashbase = $orderID . $phpshopcookie . $sessioncookie;

// OK! VALID...
if( $md5_check === md5( $submitted_hashbase . $mosConfig_secret . ENCODE_KEY) ) {

  session_id( $phpshopcookie );
  session_name( 'phpshop' );
  @session_start();
  
  $session = new mosSession( $database );
  if ($session->load( $sessioncookie )) {
      // Session cookie exists, update time in session table
      $session->time = time();
      $session->update();
      $mainframe->_session = $session;
      $my = $mainframe->getUser();
  
      $qv = "SELECT order_id, order_number FROM #__pshop_orders ";
      $qv .= "WHERE order_id='".$order_id."' AND user_id='".$my->id."'";
      $dbo = new ps_DB;
      $dbo->query($qv);
      if($dbo->next_record()) {
        $d['order_id'] = $dbo->f("order_id");
        
        if( empty($_REQUEST['errorcode']) && $accept == "1" ) {
            
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
                Transaction Number: ".urldecode($transacknum)."\n";
                
            require_once ( CLASSPATH . 'ps_order.php' );
            $ps_order= new ps_order;
            $ps_order->order_status_update($d);
            
    ?> 
            <img src="<?php echo IMAGEURL ?>ps_image/button_ok.png" align="center" alt="Success" border="0" />
            <h2><?php echo $PHPSHOP_LANG->_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS ?></h2>
        <?php
        }
        elseif( $accept == "0" ) {
            // the Payment wasn't successful. Maybe the Payment couldn't
            // be verified and is pending
            // UPDATE THE ORDER STATUS to 'INVALID'
            $d['order_status'] = PBS_INVALID_STATUS;
            // Setting this to "Y" = yes is required by Danish Law
            $d['notify_customer'] = "Y";
            $d['include_comment'] = "Y";
            // Notifying the customer about the transaction key and
            // the order Status Update
            $d['order_comment'] = "
                The Payment Transaction was not approved by PBS. \n
                The Transaction has received the following Transaction Number:\n\n
                Transaction Number: ".urldecode($transacknum)."\n";
            require_once ( CLASSPATH . 'ps_order.php' );
            $ps_order= new ps_order;
            $ps_order->order_status_update($d);
            
    ?> 
            <img src="<?php echo IMAGEURL ?>ps_image/button_cancel.png" align="center" alt="Failure" border="0" />
            <h2><?php echo $PHPSHOP_LANG->_PHPSHOP_PAYMENT_ERROR ?></h2>
        <?php
            switch (urldecode($_REQUEST['reason'])) {

                case 1: echo "Error: Transaction declined"; break;
                case 2: echo "Error: Transaction declined"; break;
                case 3: echo "Error: wrong number format"; break;
                case 4: echo "Error: illegal transaction"; break;
                case 5: echo "Error: no answer"; break;
                case 6: echo "Error_system_failure"; break;
                case 7: echo "Error: Card expired"; break;
                case 8: echo "Error: Communication Failure"; break;
                case 9: echo "Error: Internal Failure"; break;
                case 10: echo "Error: Card not registered"; break;
                default: echo "Error: unknown Error";
            }
        }
        ?>
        <br />
        <p><a href="<?php @$sess->purl( SECUREURL."index.php?option=com_phpshop&page=account.order_details&order_id=$order_id" ) ?>">
           <?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_LINK ?></a>
        </p>
        <?php
      }
      else {
        ?>
        <img src="<?php echo IMAGEURL ?>ps_image/button_cancel.png" align="center" alt="Failure" border="0" />
        <span class="message"><? echo $PHPSHOP_LANG->_PHPSHOP_PAYMENT_ERROR ?> (Order not found)</span><?php
      }
  }
  else {
        ?>
        <img src="<?php echo IMAGEURL ?>ps_image/button_cancel.png" align="center" alt="Failure" border="0" />
        <span class="message"><? echo $PHPSHOP_LANG->_PHPSHOP_PAYMENT_ERROR ?> (Session not found)</span><?php
  }
}
else{
        ?>
        <img src="<?php echo IMAGEURL ?>ps_image/button_cancel.png" align="center" alt="Failure" border="0" />
        <span class="message"><? echo $PHPSHOP_LANG->_PHPSHOP_PAYMENT_ERROR ?> (MD5 Check Failure)</span><?php
  }
  ?>
