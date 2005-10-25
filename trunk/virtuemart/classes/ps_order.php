<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
*
* @version $Id: ps_order.php,v 1.6 2005/10/22 06:04:37 soeren_nb Exp $
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


/****************************************************************************
*
* CLASS DESCRIPTION
*                   
* ps_order
*
* The class handles orders from an adminstrative perspective.  Order
* processing is handled in the ps_process_order.
* 
*************************************************************************/
class ps_order {
  var $classname = "ps_order";
  var $error;
  

  /**************************************************************************
   * name: find
   * created by: pablo
   * description: find an order by its order_id
   * parameters:
   * returns:
   **************************************************************************/
  function find(&$d, $start=0) {
    $db = new ps_DB;
    

    $q = "SELECT * from #__{vm}_orders where ";
    $q .= "order_id = '" . $d["order_id"] . "'";
    $db->query($q);
    if ($db->next_record()) {
      return True;
    }
    else {
      $d["error"] = "ORDER NOT FOUND:  The order number you entered was not found.";
      return False;
    }
  }


   /**************************************************************************
   * name: order_status_update
   * created by: pablo, download-mod by Uli
   * description: changes the status of an order.  Can be 3 statuses:
   *              default: P - pending
   *                       C - complete
   *                       X - canceled
   * parameters:
   * returns:
   **************************************************************************/
  function order_status_update(&$d) {

    $db = new ps_DB;
    $timestamp = time();
    if( empty($_REQUEST['include_comment']))
      $include_comment="N";
    
    // get the current order status
    $curr_order_status = @$d["current_order_status"];
    $notify_customer = empty($d['notify_customer']) ? "N" : $d['notify_customer'];
    if( $notify_customer=="Y" ) $notify_customer=1; else $notify_customer=0;

    $d['order_comment'] = empty($d['order_comment']) ? "" : $d['order_comment'];
    
    // When the order is set to "confirmed", we can capture 
    // the Payment with authorize.net
    if( $curr_order_status=="P" && $d["order_status"]=="C") {
      $q = "SELECT order_number,payment_class,order_payment_trans_id FROM #__{vm}_payment_method,#__{vm}_order_payment,#__{vm}_orders WHERE ";
      $q .= "#__{vm}_order_payment.order_id='".$d['order_id']."' ";
      $q .= "AND #__{vm}_orders.order_id='".$d['order_id']."' ";
      $q .= "AND #__{vm}_order_payment.payment_method_id=#__{vm}_payment_method.payment_method_id";
      $db->query( $q );
      $db->next_record();
      $payment_class = $db->f("payment_class");
      if( $payment_class=="ps_authorize" ) {
        require_once( CLASSPATH."payment/ps_authorize.cfg.php");
        if( AN_TYPE == 'AUTH_ONLY' ) {
          require_once( CLASSPATH."payment/ps_authorize.php");
          $authorize =& new ps_authorize();
          $d["order_number"] = $db->f("order_number");
          if( !$authorize->capture_payment( $d )) {
            return false;
          }
        }
      }
    }
    
    $q = "UPDATE #__{vm}_orders SET";
    $q .= " order_status='" . $d["order_status"] . "' ";
    $q .= ", mdate='" . $timestamp . "' ";
    $q .= "WHERE order_id='" . $d["order_id"] . "'";
    $db->query($q);
    
    // Update the Order History.
    $q = "INSERT INTO #__{vm}_order_history ";
    $q .= "(order_id,order_status_code,date_added,customer_notified,comments) VALUES (";
    $q .= "'".$d["order_id"] . "', '" . $d["order_status"] . "', NOW(), '$notify_customer', '".$d['order_comment']."')";
    $db->query($q);
    
    // Do we need to re-update the Stock Level?
    if( ($d["order_status"] == "X" || $d["order_status"]=="R" ||
        $d["order_status"] == "x" || $d["order_status"]=="r") &&
        CHECK_STOCK == '1' &&
        $curr_order_status != $d["order_status"]
      ) {
      // Get the order items and update the stock level
      // to the number before the order was placed
      $q = "SELECT product_id, product_quantity FROM #__{vm}_order_item WHERE order_id='".$d["order_id"]."'";
      $db->query( $q );
      $dbu = new ps_DB;
      // Now update each ordered product
      while( $db->next_record() ) {
        $q = "UPDATE #__{vm}_product SET product_in_stock=product_in_stock+".$db->f("product_quantity")
            .",product_sales=product_sales-".$db->f("product_quantity")." WHERE product_id='".$db->f("product_id")."'";
        $dbu->query( $q );
      }
    }

    if (ENABLE_DOWNLOADS == '1') {
      ##################
      ## DOWNLOAD MOD
      $this->mail_download_id( $d );
    }
    
    if( !empty($notify_customer) ) {
      $this->notify_customer( $d );
    }
    return true;
}
  /**************************************************************************
  * name: mail_download_id
  * created by: uli & soeren
  * description: mails the Download-ID to the customer 
  *              or deletes the Download-ID from the product_downloads table
  * parameters: 
  * returns:$return_info
  **************************************************************************/
  function mail_download_id( &$d ){
  
    global $mosConfig_live_site, $mosConfig_absolute_path, $db,
           $VM_LANG, $mosConfig_smtpauth, $mosConfig_mailer,
           $mosConfig_smtpuser, $mosConfig_smtppass, $mosConfig_smtphost;
    
    $url = $mosConfig_live_site."/index.php?option=com_virtuemart&page=shop.downloads";
    
    if ($d["order_status"]==ENABLE_DOWNLOAD_STATUS) {
      $dbw = new ps_DB; 
      $dbw_2 = new ps_DB;
      $q = "SELECT * FROM #__{vm}_product_download WHERE";
      $q .= " order_id = '" . $d["order_id"] . "'";
      $dbw->query($q);
      $dbw->next_record();
      $userid = $dbw->f("user_id");
      $download_id = $dbw->f("download_id");
      $datei=$dbw->f("file_name");
      $dbw_2->query($q);
       
      if ($download_id) {

       $dbv = new ps_DB;
       $q = "SELECT * FROM #__{vm}_vendor ";
       $q .= "WHERE vendor_id='1'";
       $dbv->query($q);
       $dbv->next_record();
       
       require_once( CLASSPATH . 'phpmailer/class.phpmailer.php');
       $mail = new mShop_PHPMailer();
       $mail->PluginDir = CLASSPATH ."phpmailer/";
       $mail->SetLanguage("en", CLASSPATH ."phpmailer/language/");
       $mail->From =  $dbv->f("contact_email");
       $mail->FromName = $dbv->f("vendor_name");
       $mail->AddReplyTo($dbv->f("contact_email"), $dbv->f("vendor_name"));
       
       $db = new ps_DB;
       $q="SELECT first_name,last_name, user_email FROM #__{vm}_user_info WHERE user_id = '$userid' AND address_type='BT'";
       $db->query($q);
       $db->next_record();

       $message = _HI . $db->f("first_name") . " " . $db->f("last_name") . "\n\n";
       $message .= $VM_LANG->_PHPSHOP_DOWNLOADS_SEND_MSG_1.".\n";
       $message .= $VM_LANG->_PHPSHOP_DOWNLOADS_SEND_MSG_2."\n\n";
       
       while($dbw_2->next_record()) {
          $message .= $dbw_2->f("file_name").": ".$dbw_2->f("download_id") 
                            . "\n$url&download_id=".$dbw_2->f("download_id")."\n\n";
        }
        
       $message .= $VM_LANG->_PHPSHOP_DOWNLOADS_SEND_MSG_3.": ".DOWNLOAD_MAX."\n";
       $expire = ((DOWNLOAD_EXPIRE / 60) / 60) / 24;
       $message .= str_replace("{expire}", $expire, $VM_LANG->_PHPSHOP_DOWNLOADS_SEND_MSG_4);
       $message .= "\n\n____________________________________________________________\n";
       $message .= $VM_LANG->_PHPSHOP_DOWNLOADS_SEND_MSG_5."\n";        
       $message .= $dbv->f("vendor_name") . " \n" . $mosConfig_live_site."\n\n".$dbv->f("contact_email") . "\n";
       $message .= "____________________________________________________________\n";
       $message .= $VM_LANG->_PHPSHOP_DOWNLOADS_SEND_MSG_6 . $dbv->f("vendor_name");


        $mail->Body = $message;
        $mail->Subject = $VM_LANG->_PHPSHOP_DOWNLOADS_SEND_SUBJ;

       switch( $mosConfig_mailer ) {
      
          case "mail":  
              $mail->IsMail();
              break;
                              
          /*** tell the mailer objects to use SMTP ***/
          case "smtp":  
              $mail->IsSMTP();
              $mail->Host = $mosConfig_smtphost;
              $mail->SMTPAuth = $mosConfig_smtpauth=='1' ? true : false;
      
              if ($mosConfig_smtpauth=='1') {
                  $mail->Username = $mosConfig_smtpuser;
                  $mail->Password = $mosConfig_smtppass;     
              }
              break;
                              
          case "sendmail":  
              $mail->IsSendmail();
              break;
                              
          default:        
              $mail->IsMail();
              break;
       }
       $mail->AddAddress($db->f("user_email"));
       if ($mail->Send()) {
       
          $_REQUEST['mosmsg'] = $VM_LANG->_PHPSHOP_DOWNLOADS_SEND_MSG. " ". $db->f("first_name") . " " . $db->f("last_name") . " ".$db->f("user_email");

       }

     else {
     
          $_REQUEST['mosmsg'] = $VM_LANG->_PHPSHOP_DOWNLOADS_ERR_SEND." ". $db->f("first_name") . " " . $db->f("last_name") . " ".$db->f("user_email")." (". $mail->ErrorInfo.")";
       }
    }
   }

##---------------------------updated 03/28/2004-----------------------------------

   elseif ($d["order_status"]==DISABLE_DOWNLOAD_STATUS) {
      $q = "DELETE FROM #__{vm}_product_download WHERE order_id=" . $d["order_id"];
      $db->query($q);
      $db->next_record();
   }

    return true;
  }

  /**************************************************************************
  * name: notify_customer
  * created by: soeren
  * description: notifies the customer that the Order Status has been changed
  * parameters: $d
  * returns: true
  **************************************************************************/
  function notify_customer( &$d ){
  
    global $mosConfig_live_site, $mosConfig_absolute_path, 
           $VM_LANG, $mosConfig_smtpauth, $mosConfig_mailer,
           $mosConfig_smtpuser, $mosConfig_smtppass, $mosConfig_smtphost;
    
    $url = $mosConfig_live_site."/index.php?option=com_virtuemart&page=account.order_details&order_id=".$d["order_id"];

    $db = new ps_DB;
    $dbv = new ps_DB;
    $q = "SELECT vendor_name,contact_email FROM #__{vm}_vendor ";
    $q .= "WHERE vendor_id='".$_SESSION['ps_vendor_id']."'";
    $dbv->query($q);
    $dbv->next_record();
     
    require_once( CLASSPATH . 'phpmailer/class.phpmailer.php');
    $mail = new mShop_PHPMailer();
    $mail->PluginDir = CLASSPATH . 'phpmailer/';
    $mail->SetLanguage("en", CLASSPATH . 'phpmailer/language/');
    $mail->From =  $dbv->f("contact_email");
    $mail->FromName = $dbv->f("vendor_name");
    $mail->AddReplyTo($dbv->f("contact_email"), $dbv->f("vendor_name"));
      
    $q = "SELECT first_name,last_name,user_email,order_status_name FROM #__{vm}_order_user_info,#__{vm}_orders,#__{vm}_order_status ";
    $q .= "WHERE #__{vm}_orders.order_id = '".$d["order_id"]."' ";
    $q .= "AND #__{vm}_orders.user_id = #__{vm}_order_user_info.user_id ";
    $q .= "AND #__{vm}_orders.order_id = #__{vm}_order_user_info.order_id ";
    $q .= "AND order_status = order_status_code ";
    $db->query($q);
    $db->next_record();
    
    /* MAIL BODY */
    $message = _HI . $db->f("first_name") . " " . $db->f("last_name") . ",\n\n";
    $message .= $VM_LANG->_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1."\n\n";
    
    if( !empty($d['include_comment']) && !empty($d['order_comment']) ) {
      $message .= $VM_LANG->_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL.":\n";
      $message .= $d['order_comment'];
      $message .= "\n____________________________________________________________\n\n";
    }
    
    $message .= $VM_LANG->_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2."\n";
    $message .= "____________________________________________________________\n\n";
    $message .= $db->f("order_status_name");
    $message .= "\n____________________________________________________________\n\n";
    $message .= $VM_LANG->_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3."\n";
    $message .= $url;
    $message .= "\n\n____________________________________________________________\n";      
    $message .= $dbv->f("vendor_name") . " \n";
    $message .= $mosConfig_live_site."\n";
    $message .= $dbv->f("contact_email");

    $message = str_replace( "{order_id}", $d["order_id"], $message );

    $mail->Body = html_entity_decode($message);
    $mail->Subject = str_replace( "{order_id}", $d["order_id"], html_entity_decode($VM_LANG->_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ));

    switch( $mosConfig_mailer ) {
  
      case "mail":  
          $mail->IsMail();
          break;
                          
      /*** tell the mailer objects to use SMTP ***/
      case "smtp":  
          $mail->IsSMTP();
          $mail->Host = $mosConfig_smtphost;
          $mail->SMTPAuth = $mosConfig_smtpauth=='1' ? true : false;
  
          if ($mosConfig_smtpauth=='1') {
              $mail->Username = $mosConfig_smtpuser;
              $mail->Password = $mosConfig_smtppass;     
          }
          break;
                          
      case "sendmail":  
          $mail->IsSendmail();
          break;
                          
      default:        
          $mail->IsMail();
          break;
    }
    $mail->AddAddress($db->f("email"));
    
    /* Send the email */
    if ($mail->Send()) {
      $_REQUEST['mosmsg'] = $VM_LANG->_PHPSHOP_DOWNLOADS_SEND_MSG. " ". $db->f("first_name") . " " . $db->f("last_name") . " ".$db->f("email");
    }
    else {
      $_REQUEST['mosmsg'] = $VM_LANG->_PHPSHOP_DOWNLOADS_ERR_SEND." ". $db->f("first_name") . " " . $db->f("last_name") . " ".$db->f("email")." (". $mail->ErrorInfo.")";
    }
  }


  /**************************************************************************
   * name: download_request
   * created by: uli
   * description: submits the download-request
   * parameters: 
   * returns:$return_info
   **************************************************************************/
  function download_request(&$d) {
    global  $return_success, $download_id, $VM_LANG;
    $auth  = $_SESSION['auth'];
    
    $db = new ps_DB;
    $download_id = strip_tags( $d["download_id"] );
    
    $q = "SELECT * FROM #__{vm}_product_download WHERE";
    $q .= " download_id = '$download_id'";
    
    $db->query($q);
    $db->next_record();
    
    $download_id = $db->f("download_id");
    $file_name = $db->f("file_name");
    $download_max = $db->f("download_max");
    $end_date = $db->f("end_date");
    $zeit=time();

    if (!$download_id) {
       $d['error'] .= $VM_LANG->_PHPSHOP_DOWNLOADS_ERR_INV;
       mosRedirect("index.php?option=com_virtuemart&page=shop.downloads", $d["error"]);
    }

    elseif ($download_max=="0") {
       $q ="DELETE FROM #__{vm}_product_download";
       $q .=" WHERE download_id = '" . $d["download_id"] . "'";
       $db->query($q);
       $db->next_record();
       $d['error'] .= $VM_LANG->_PHPSHOP_DOWNLOADS_ERR_MAX;
       mosRedirect("index.php?option=com_virtuemart&page=shop.downloads", $d["error"]);
     }

     elseif ($end_date=="0") {
       $end_date=time(u) + DOWNLOAD_EXPIRE;
       $q ="UPDATE #__{vm}_product_download SET";
       $q .=" end_date=$end_date";
       $q .=" WHERE download_id = '" . $d["download_id"] . "'";
       $db->query($q);
       $db->next_record();
     }

     elseif ($zeit > $end_date) {
       $q ="DELETE FROM #__{vm}_product_download";
       $q .=" WHERE download_id = '" . $d["download_id"] . "'";
       $db->query($q);
       $db->next_record();
       $d['error'] .= $VM_LANG->_PHPSHOP_DOWNLOADS_ERR_EXP;
       mosredirect("index.php?option=com_virtuemart&page=shop.downloads", $d["error"]);
     }

     $dl_max = $download_max - 1;

     $q ="UPDATE #__{vm}_product_download SET";
     $q .=" download_max=$dl_max";
     $q .=" WHERE download_id = '" . $d["download_id"] . "'";
     $db->query($q);
     $db->next_record();

     $datei = DOWNLOADROOT . $file_name;
     
     // Check, if file path is correct
     // and file is 
      if ( file_exists( $datei ) ){
        if ( is_readable( $datei ) ) {
          if (ereg('Opera(/| )([0-9].[0-9]{1,2})', $_SERVER['HTTP_USER_AGENT'])) {
            $UserBrowser = "Opera";
          }
          elseif (ereg('MSIE ([0-9].[0-9]{1,2})', $_SERVER['HTTP_USER_AGENT'])) {
            $UserBrowser = "IE";
          } else {
            $UserBrowser = '';
          }
          $mime_type = ($UserBrowser == 'IE' || $UserBrowser == 'Opera') ? 'application/octetstream' : 'application/octet-stream';
          
          // dump anything in the buffer
          @ob_end_clean();
    
          header('Content-Type: ' . $mime_type);
          header('Expires: ' . gmdate('D, d M Y H:i:s') . ' GMT');
    
          if ($UserBrowser == 'IE') {
            header('Content-Disposition: attachment; filename="' . $file_name . '"');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
          } else {
            header('Content-Disposition: attachment; filename="' . $file_name . '"');
            header('Pragma: no-cache');
          }
           /*** Now send the file!! ***/
          readfile( $datei );
    
          exit();
        }
        else {
          $d["error"] = "Sorry, but the requested file can't be read from the Server";
          mosRedirect("index.php?option=com_virtuemart&page=shop.downloads", $d["error"]);
        }
      }
      else {
        $d["error"] = "Sorry, but the requested file wasn't found. Possible Cause: Wrong path";
        mosRedirect("index.php?option=com_virtuemart&page=shop.downloads", $d["error"]);
      }
   }

   /**************************************************************************
   * name: list_order
   * created by: pablo
   * description: shows a listbox of orders which can be used in a form
   * @param string order_status (A = All)
   * @param int secure (0 = Show orders of all users, 1 = Show only orders of the user)
   * returns:
   **************************************************************************/
  function list_order($order_status='A', $secure=0, $view_all=0) {
    global $VM_LANG, $CURRENCY_DISPLAY, $sess;
    
    $ps_vendor_id = $_SESSION["ps_vendor_id"];
    $auth = $_SESSION['auth'];
        
    $db = new ps_DB;
    $dbs = new ps_DB;
    $i = 0;

    $q = "SELECT cdate,order_total,order_status,order_id FROM #__{vm}_orders ";
    $q .= "WHERE vendor_id='$ps_vendor_id' ";
    if ($order_status != "A") {
      $q .= "AND order_status='$order_status' ";
    }
    if ($secure) {
      $q .= "AND user_id='" . $auth["user_id"] . "' "; 
    }
    $q .= "ORDER BY cdate DESC";
    if (!$view_all) {
      $q .= " LIMIT 0, 5 "; 
    }
    $db->query($q);
    if( $db->num_rows() ) {
      echo "<table width=\"100%\" cellpadding=\"4\" cellspacing=\"1\" border=\"0\">\n";
      
      while ($db->next_record()) {
        $dbs->query( "SELECT order_status_name FROM #__{vm}_order_status WHERE order_status_code='".$db->f("order_status")."'");
        $dbs->next_record();
        $order_status = $dbs->f("order_status_name");
        if ($i++ % 2) 
           $class="sectiontableentry1";
        else
           $class="sectiontableentry2";
           
        echo "<tr class=\"$class\" style=\"cursor:pointer;\" onclick=\"window.location='index.php?option=com_virtuemart&page=account.order_details&order_id=".$db->f("order_id")."';\">\n<td>";
        echo "<a href=\"index.php?option=com_virtuemart&page=account.order_details&order_id=".$db->f("order_id")."&Itemid=".@$_REQUEST['Itemid']."\">\n";
        echo "<img src=\"".IMAGEURL."ps_image/goto.png\" height=\"32\" width=\"32\" align=\"middle\" border=\"0\" alt=\"".$VM_LANG->_PHPSHOP_ORDER_LINK."\" />&nbsp;".$VM_LANG->_PHPSHOP_VIEW."</a><br />";
        echo "</td>\n<td>";
        echo "<strong>".$VM_LANG->_PHPSHOP_ORDER_PRINT_PO_DATE.":</strong> " . strftime("%d. %B %Y", $db->f("cdate"));
        echo "<br />";
        echo "<strong>".$VM_LANG->_PHPSHOP_ORDER_PRINT_TOTAL.":</strong> " . $CURRENCY_DISPLAY->getFullValue($db->f("order_total"));
        echo "</td>\n<td>";
        echo "<strong>".$VM_LANG->_PHPSHOP_ORDER_PRINT_PO_STATUS.":</strong> ".$order_status;
        echo "<br />";
        echo "<strong>".$VM_LANG->_PHPSHOP_ORDER_PRINT_PO_NUMBER.":</strong> " . sprintf("%08d", $db->f("order_id"));
        echo "</td>\n</tr>";
      }
      if (!$i) {
        echo "<span style=\"font-style:italic;\">".$VM_LANG->_PHPSHOP_ACC_NO_ORDERS."</span>\n";
      }
      echo "</table>\n";
      if( !$view_all ) {
        $url = $sess->url( URL."index.php?page=account.index&view_all=1" );
        echo "<a href=\"$url\">[ ".$VM_LANG->_PHPSHOP_ALL." ]</a>";
      }
      else {
        $url = $sess->url( URL."index.php?page=account.index&view_all=0" );
        echo "<a href=\"$url\">[ "._CMN_HIDE." ]</a>";
      }
    }    
  }

  /********************************************************************
  ** name: validate_delete()
  ** created by: gday
  ** description:  Validate form values prior to delete
  ** parameters: $d
  ** returns:  True - validation passed
  **          False - validation failed
  ********************************************************************/
  function validate_delete($order_id) {
    
    $db = new ps_DB;
    
    if(empty( $order_id )) {
       $this->error = "Unable to delete without the order id.";
       return False;
    }
    if( CHECK_STOCK == '1' ) {
      // Get the order items and update the stock level
      // to the number before the order was placed
      $q = "SELECT product_id, product_quantity FROM #__{vm}_order_item WHERE order_id='$order_id'";
      $db->query( $q );
      $dbu = new ps_DB;
      // Now update each ordered product
      while( $db->next_record() ) {
        $q = "UPDATE #__{vm}_product SET product_in_stock=product_in_stock+".$db->f("product_quantity")
            .",product_sales=product_sales-".$db->f("product_quantity")." WHERE product_id='".$db->f("product_id")."'";
        $dbu->query( $q );
      }
    }
    return True;
  }

	/**
	* Controller for Deleting Records.
	*/
	function delete(&$d) {
	
		$record_id = $d["order_id"];
		
		if( is_array( $record_id)) {
			foreach( $record_id as $record) {
				if( !$this->delete_record( $record, $d ))
					return false;
			}
			return true;
		}
		else {
			return $this->delete_record( $record_id, $d );
		}
	}
	/**
	* Deletes one Record.
	*/
	function delete_record( $record_id, &$d ) {
		global $db;
  
		if ($this->validate_delete($record_id)) {
			$q = "DELETE from #__{vm}_orders where order_id='$record_id'";
			$db->query($q);
			$db->next_record();
	
			$q = "DELETE from #__{vm}_order_item where order_id='$record_id'";
			$db->query($q);
			$db->next_record();
	
			$q = "DELETE from #__{vm}_order_payment where order_id='$record_id'";
			$db->query($q);
			$db->next_record();
		  
			$q = "DELETE from #__{vm}_product_download where order_id='$record_id'";
			$db->query($q);
			$db->next_record();
		  
			return True;
		}
		else {
		  return False;
		}
  }
  
  function order_print_navigation( $order_id=1 ) {
    global $sess, $modulename;
    
    $navi_db =& new ps_DB;
  
    $navigation = "<br /><div align=\"center\">\n<strong>\n";
    $q = "SELECT order_id FROM #__{vm}_orders WHERE ";
    $q .= "order_id < '$order_id' ORDER BY order_id DESC";
    $navi_db->query($q);
    $navi_db->next_record();
    if ($navi_db->f("order_id")) {
       $url = $_SERVER['PHP_SELF'] . "?page=$modulename.order_print&order_id=";
       $url .= $navi_db->f("order_id");
       $navigation .= "<a class=\"pagenav\" href=\"" . $sess->url($url) . "\">" ._ITEM_PREVIOUS."</a> | ";
    } else
       $navigation .= "<span class=\"pagenav\">" ._ITEM_PREVIOUS." | </span>";
    
    $q = "SELECT order_id FROM #__{vm}_orders WHERE ";
    $q .= "order_id > '$order_id' ORDER BY order_id";
    $navi_db->query($q);
    $navi_db->next_record();
    if ($navi_db->f("order_id")) {
       $url = $_SERVER['PHP_SELF'] . "?page=$modulename.order_print&order_id=";
       $url .= $navi_db->f("order_id");
       $navigation .= "<a class=\"pagenav\" href=\"" . $sess->url($url) ."\">". _ITEM_NEXT."</a>";
    } else
       $navigation .= "<span class=\"pagenav\">"._ITEM_NEXT."</span>";
    
    $navigation .= "\n<strong>\n</div>\n";
    
    return $navigation;
  }
  
}
$ps_order = new ps_order;

?>
