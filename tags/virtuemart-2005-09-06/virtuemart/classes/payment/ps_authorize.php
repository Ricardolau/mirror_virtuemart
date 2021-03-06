<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
/**
* @version $Id: ps_authorize.php,v 1.10 2005/06/23 18:59:09 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage Payment
* @copyright (C) 2004-2005 Soeren Eberhardt
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net

* The ps_authorize class, containing the payment processing code
*  for transactions with authorize.net 
 */

class ps_authorize {

    var $payment_code = "AN";
    var $classname = "ps_authorize";
  
    /**
    * Show all configuration parameters for this payment method
    * @returns boolean False when the Payment method has no configration
    */
    function show_configuration() { 
    
      global $PHPSHOP_LANG, $sess;
      $db =& new ps_DB;
      $payment_method_id = mosGetParam( $_REQUEST, 'payment_method_id', null );
      /** Read current Configuration ***/
      require_once(CLASSPATH ."payment/".$this->classname.".cfg.php");
    ?>
      <table>
        <tr>
            <td><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE ?></strong></td>
            <td>
                <select name="AN_TEST_REQUEST" class="inputbox" >
                <option <?php if (AN_TEST_REQUEST == 'TRUE') echo "selected=\"selected\""; ?> value="TRUE"><?php echo $PHPSHOP_LANG->_PHPSHOP_ADMIN_CFG_YES ?></option>
                <option <?php if (AN_TEST_REQUEST == 'FALSE') echo "selected=\"selected\""; ?> value="FALSE"><?php echo $PHPSHOP_LANG->_PHPSHOP_ADMIN_CFG_NO ?></option>
                </select>
            </td>
            <td><?php echo $PHPSHOP_LANG->_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN ?>
            </td>
        </tr>
        <tr>
            <td><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME ?></strong></td>
            <td>
                <input type="text" name="AN_LOGIN" class="inputbox" value="<? echo AN_LOGIN ?>" />
            </td>
            <td><?php echo $PHPSHOP_LANG->_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN ?>
            </td>
        </tr>
        <tr>
            <td><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY ?></strong></td>
            <td>
                <a id="changekey" href="<?php $sess->purl($_SERVER['PHP_SELF']."?page=store.payment_method_keychange&pshop_mode=admin&payment_method_id=$payment_method_id") ?>" >
                <input onclick="document.location=document.getElementById('changekey').href" type="button" name="" value="<?php echo $PHPSHOP_LANG->_PHPSHOP_CHANGE_TRANSACTION_KEY ?>" /><a/>
            </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_PAYMENT_CVV2 ?></strong></td>
            <td>
                <select name="AN_CHECK_CARD_CODE" class="inputbox">
                <option <?php if (AN_CHECK_CARD_CODE == 'YES') echo "selected=\"selected\""; ?> value="YES">
                <?php echo $PHPSHOP_LANG->_PHPSHOP_ADMIN_CFG_YES ?></option>
                <option <?php if (AN_CHECK_CARD_CODE == 'NO') echo "selected=\"selected\""; ?> value="NO">
                <?php echo $PHPSHOP_LANG->_PHPSHOP_ADMIN_CFG_NO ?></option>
                </select>
            </td>
            <td><?php echo $PHPSHOP_LANG->_PHPSHOP_PAYMENT_CVV2_TOOLTIP ?></td>
        </tr>
        <tr>
            <td><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_PAYMENT_AN_RECURRING ?></strong></td>
            <td>
                <select name="AN_RECURRING" class="inputbox">
                <option <?php if (AN_RECURRING == 'YES') echo "selected=\"selected\""; ?> value="YES">
                <?php echo $PHPSHOP_LANG->_PHPSHOP_ADMIN_CFG_YES ?></option>
                <option <?php if (AN_RECURRING == 'NO') echo "selected=\"selected\""; ?> value="NO">
                <?php echo $PHPSHOP_LANG->_PHPSHOP_ADMIN_CFG_NO ?></option>
                </select>
            </td>
            <td><?php echo $PHPSHOP_LANG->_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP ?>
            </td>
        </tr>
        <tr>
            <td><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE ?></strong></td>
            <td>
               <select name="AN_TYPE" class="inputbox">
                <option <?php if (AN_TYPE == 'AUTH_CAPTURE') echo "selected=\"selected\""; ?> value="AUTH_CAPTURE">AUTH_CAPTURE</option>
                <option <?php if (AN_TYPE == 'AUTH_ONLY') echo "selected=\"selected\""; ?> value="AUTH_ONLY">AUTH_ONLY</option>
               </select>
            </td>
            <td><?php echo $PHPSHOP_LANG->_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN ?>
            </td>
        </tr>
        <tr><td colspan="3"><hr/></td></tr>
        <tr>
            <td><strong>Order Status for successful transactions</strong></td>
            <td>
                <select name="AN_VERIFIED_STATUS" class="inputbox" >
                <?php
                    $q = "SELECT order_status_name,order_status_code FROM #__pshop_order_status ORDER BY list_order";
                    $db->query($q);
                    $order_status_code = Array();
                    $order_status_name = Array();
                    
                    while ($db->next_record()) {
                      $order_status_code[] = $db->f("order_status_code");
                      $order_status_name[] =  $db->f("order_status_name");
                    }
                    for ($i = 0; $i < sizeof($order_status_code); $i++) {
                      echo "<option value=\"" . $order_status_code[$i];
                      if (AN_VERIFIED_STATUS == $order_status_code[$i]) 
                         echo "\" selected=\"selected\">";
                      else
                         echo "\">";
                      echo $order_status_name[$i] . "</option>\n";
                    }?>
                    </select>
            </td>
            <td>Select the order status to which the actual order is set, if the authorize.net Transaction was successful. 
            If using download selling options: select the status which enables the download (then the customer is instantly notified about the download via e-mail).
            </td>
        </tr>
            <tr>
            <td><strong>Order Status for failed transactions</strong></td>
            <td>
                <select name="AN_INVALID_STATUS" class="inputbox" >
                <?php
                    for ($i = 0; $i < sizeof($order_status_code); $i++) {
                      echo "<option value=\"" . $order_status_code[$i];
                      if (AN_INVALID_STATUS == $order_status_code[$i]) 
                         echo "\" selected=\"selected\">";
                      else
                         echo "\">";
                      echo $order_status_name[$i] . "</option>\n";
                    } ?>
                    </select>
            </td>
            <td>Select an order status for failed authorize.net transactions.</td>
        </tr>
      </table>
   <?php
      // return false if there's no configuration
      return true;
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
      return is_writeable( CLASSPATH."payment/".$this->classname.".cfg.php" );
   }
   
  /**
	* Returns the "is_readable" status of the configuration file
	* @param void
	* @returns boolean True when the configuration file is writeable, false when not
	*/
   function configfile_readable() {
      return is_readable( CLASSPATH."payment/".$this->classname.".cfg.php" );
   }   
  /**
	* Writes the configuration file for this payment method
	* @param array An array of objects
	* @returns boolean True when writing was successful
	*/
   function write_configuration( &$d ) {
      
      $my_config_array = array("AN_TEST_REQUEST" => $d['AN_TEST_REQUEST'],
                              "AN_LOGIN" => $d['AN_LOGIN'],
                              "AN_TYPE" => $d['AN_TYPE'],
                              "AN_CHECK_CARD_CODE" => $d['AN_CHECK_CARD_CODE'],
                              "AN_VERIFIED_STATUS" => $d['AN_VERIFIED_STATUS'],
                              "AN_INVALID_STATUS" => $d['AN_INVALID_STATUS'],
                              "AN_RECURRING" => $d['AN_RECURRING']
                            );
      $config = "<?php\n";
      $config .= "defined('_VALID_MOS') or die('Direct Access to this location is not allowed.'); \n\n";
      foreach( $my_config_array as $key => $value ) {
        $config .= "define ('$key', '$value');\n";
      }
      
      $config .= "?>";
  
      if ($fp = fopen(CLASSPATH ."payment/".$this->classname.".cfg.php", "w")) {
          fputs($fp, $config, strlen($config));
          fclose ($fp);
          return true;
     }
     else
        return false;
   }
   
  /**************************************************************************
  ** name: process_payment()
  ** created by: Soeren
  ** description: process transaction with authorize.net
  ** parameters: $order_number, the number of the order, we're processing here
  **            $order_total, the total $ of the order
  ** returns: 
  ***************************************************************************/
   function process_payment($order_number, $order_total, &$d) {
        
        global $vendor_mail, $vendor_currency, $PHPSHOP_LANG, $database;
      
        $ps_vendor_id = $_SESSION["ps_vendor_id"];
        $auth = $_SESSION['auth'];
        $ps_checkout = new ps_checkout;
      
        /*** Get the Configuration File for authorize.net ***/
        require_once(CLASSPATH ."payment/".$this->classname.".cfg.php");
        
        // Get the Transaction Key securely from the database
        $database->setQuery( "SELECT DECODE(payment_passkey,'".ENCODE_KEY."') as passkey FROM #__pshop_payment_method WHERE payment_class='".$this->classname."' AND shopper_group_id='".$auth['shopper_group_id']."'" );
        $database->loadObject( $transaction );
        if( empty($transaction->passkey)) {
            $d["error"] = $PHPSHOP_LANG->_PHPSHOP_PAYMENT_ERROR;
            return false;
        }
        
        // Get user billing information
        $dbbt = new ps_DB;
        $qt = "SELECT * FROM #__users WHERE id='".$auth["user_id"]."' AND address_type='BT'";
        $dbbt->query($qt);
        $dbbt->next_record();
        $user_info_id = $dbbt->f("user_info_id");
        if( $user_info_id != $d["ship_to_info_id"]) {
            // Get user billing information
            $dbst =& new ps_DB;
            $qt = "SELECT * FROM #__pshop_user_info WHERE user_info_id='".$d["ship_to_info_id"]."' AND address_type='ST'";
            $dbst->query($qt);
            $dbst->next_record();
        }
        else {
            $dbst = $dbbt;
        }

        $host = "secure.authorize.net";
        $port = 443;
        $path = "/gateway/transact.dll";  

        //Authnet vars to send
        $formdata = array (
            'x_version' => '3.1',
            'x_login' => AN_LOGIN,
            'x_tran_key' => $transaction->passkey,
            'x_test_request' => AN_TEST_REQUEST,
            
            // Gateway Response Configuration
            'x_delim_data' => 'TRUE',
            'x_delim_char' => '|',
            'x_relay_response' => 'FALSE',
            
            // Customer Name and Billing Address
            'x_first_name' => substr($dbbt->f("first_name"), 0, 50),
            'x_last_name' => substr($dbbt->f("last_name"), 0, 50),
            'x_company' => substr($dbbt->f("company"), 0, 50),
            'x_address' => substr($dbbt->f("address_1"), 0, 60),
            'x_city' => substr($dbbt->f("city"), 0, 40),
            'x_state' => substr($dbbt->f("state"), 0, 40),
            'x_zip' => substr($dbbt->f("zip"), 0, 20),
            'x_country' => substr($dbbt->f("country"), 0, 60),
            'x_phone' => substr($dbbt->f("phone_1"), 0, 25),
            'x_fax' => substr($dbbt->f("fax"), 0, 25),
            
            // Customer Shipping Address
            'x_ship_to_first_name' => substr($dbst->f("first_name"), 0, 50),
            'x_ship_to_last_name' => substr($dbst->f("last_name"), 0, 50),
            'x_ship_to_company' => substr($dbst->f("company"), 0, 50),
            'x_ship_to_address' => substr($dbst->f("address_1"), 0, 60),
            'x_ship_to_city' => substr($dbst->f("city"), 0, 40),
            'x_ship_to_state' => substr($dbst->f("state"), 0, 40),
            'x_ship_to_zip' => substr($dbst->f("zip"), 0, 20),
            'x_ship_to_country' => substr($dbst->f("country"), 0, 60),            
            
            // Additional Customer Data
            'x_cust_id' => $auth['user_id'],
            'x_customer_ip' => $_SERVER["REMOTE_ADDR"],         
            'x_customer_tax_id' => $dbbt->f("tax_id"),         
            
            // Email Settings
            'x_email' => $dbbt->f("email"),
            'x_email_customer' => 'False',         
            'x_merchant_email' => $vendor_mail,   
            
            // Invoice Information
            'x_invoice_num' => substr($order_number, 0, 20),
            'x_description' => '',
            
            // Transaction Data
            'x_amount' => $order_total,
            'x_currency_code' => $vendor_currency,
            'x_method' => 'CC',
            'x_type' => AN_TYPE,
            'x_recurring_billing' => AN_RECURRING,
            
            'x_card_num' => $_SESSION['ccdata']['order_payment_number'],
            'x_card_code' => $_SESSION['ccdata']['credit_card_code'],
            'x_exp_date' => ($_SESSION['ccdata']['order_payment_expire_month']) . ($_SESSION['ccdata']['order_payment_expire_year']),
            
            // Level 2 data
            'x_po_num' => substr($order_number, 0, 20),
            'x_tax' => substr($d['order_tax'], 0, 15),
            'x_tax_exempt' => "FALSE",
            'x_freight' => $d['order_shipping'],
            'x_duty' => 0
            
        );
        
        //build the post string
        $poststring = '';
        foreach($formdata AS $key => $val){
            $poststring .= urlencode($key) . "=" . urlencode($val) . "&";
        }
        // strip off trailing ampersand
        $poststring = substr($poststring, 0, -1);
        
        if( function_exists( "curl_init" )) {
        
            $CR = curl_init();
            curl_setopt($CR, CURLOPT_URL, "https://".$host.$path);
            curl_setopt($CR, CURLOPT_POST, 1);
            curl_setopt($CR, CURLOPT_FAILONERROR, true); 
            curl_setopt($CR, CURLOPT_POSTFIELDS, $poststring);
            curl_setopt($CR, CURLOPT_RETURNTRANSFER, 1);
             
            // No PEER certificate validation...as we don't have 
            // a certificate file for it to authenticate the host www.ups.com against!
            curl_setopt($CR, CURLOPT_SSL_VERIFYPEER, 0);
            //curl_setopt($CR, CURLOPT_SSLCERT , "/usr/locale/xxxx/clientcertificate.pem");
            
            $result = curl_exec( $CR );
            
            $error = curl_error( $CR );
            if( !empty( $error )) {
              echo curl_error( $CR );
              $html = "<br/><span class=\"message\">".$PHPSHOP_LANG->_PHPSHOP_PAYMENT_INTERNAL_ERROR." authorize.net</span>";
              return false;
            }
            else {
                //echo $result; exit();
            }
            curl_close( $CR );
        }
        else {
        
            $fp = fsockopen("ssl://".$host, $port, $errno, $errstr, $timeout = 60);
            if(!$fp){
                //error tell us
                echo "$errstr ($errno)\n";
            }
            else {
    
                //send the server request
                fputs($fp, "POST $path HTTP/1.1\r\n");
                fputs($fp, "Host: $host\r\n");
                fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
                fputs($fp, "Content-length: ".strlen($poststring)."\r\n");
                fputs($fp, "Connection: close\r\n\r\n");
                fputs($fp, $poststring . "\r\n\r\n");
                
                //Get the response header from the server
                $str = '';
                while(!feof($fp) && !stristr($str, 'content-length')) {
                   $str = fgets($fp, 4096);
                }
                // If didnt get content-lenght, something is wrong, return false.
                if (!stristr($str, 'content-length')) {
                   return false;
                
                }
                $data = "";
                while (!feof($fp)) {
                   $data .= fgets ($fp, 1024);
                }
                $result = trim( $data );
                 /*
                 // Get length of data to be received.
                 $length = trim(substr($str,strpos($str,'content-length') + 15));
                 // Get buffer (blank data before real data)
                 fgets($fp, 4096);
                 // Get real data
                 $data = fgets($fp, $length);
                 fclose($fp);*/
                 
          }
        }
        $response = explode("|", $result);

        // Approved - Success!
        if ($response[0] == '1') {
           $d["order_payment_log"] = $PHPSHOP_LANG->_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS.": ";
           $d["order_payment_log"] .= $response[3];
           // Catch Transaction ID
           $d["order_payment_trans_id"] = $response[6];

           return True;
        } 
        // Payment Declined
        elseif ($response[0] == '2') {
           $d["error"] = $response[3];
           $d["order_payment_log"] = $response[3];
           // Catch Transaction ID
           $d["order_payment_trans_id"] = $response[6];
           return False;
        }
        // Transaction Error
        elseif ($response[0] == '3') {
           $d["error"] = $response[3];
           $d["order_payment_log"] = $response[3];
           // Catch Transaction ID
           $d["order_payment_trans_id"] = $response[6];
           return False;
        }
   }
   
  /**************************************************************************
  ** name: capture_payment()
  ** created by: Soeren
  ** description: Process a previous transaction with authorize.net, Capture the Payment
  ** parameters: $order_number, the number of the order, we're processing here
  ** returns: 
  ***************************************************************************/
   function capture_payment( &$d ) {
        
        global $vendor_mail, $vendor_currency, $PHPSHOP_LANG, $database;
        /*
        $host = "secure.authorize.net";
        $port = 443;
        $path = "/gateway/transact.dll";  
 CERTIFICATION
Visa Test Account           4007000000027
Amex Test Account           370000000000002
Master Card Test Account    6011000000000012
Discover Test Account       5424000000000015
*/
        $host = "certification.authorize.net";
        $port = 443;
        $path = "/gateway/transact.dll";

        if( empty($d['order_number'])) {
            $d['error'] = "Error: No Order Number provided.";
            return false;
        }
        /*** Get the Configuration File for authorize.net ***/
        require_once(CLASSPATH ."payment/".$this->classname.".cfg.php");
        
        // Get the Transaction Key securely from the database
        $database->setQuery( "SELECT DECODE(payment_passkey,'".ENCODE_KEY."') as passkey FROM #__pshop_payment_method WHERE payment_class='".$this->classname."'" );
        $database->loadObject( $transaction );
        if( empty($transaction->passkey)) {
            $d["error"] = $PHPSHOP_LANG->_PHPSHOP_PAYMENT_ERROR;
            return false;
        }
        $db = new ps_DB;
        $q = "SELECT * FROM #__pshop_orders, #__pshop_order_payment WHERE ";
        $q .= "order_number='".$d['order_number']."' ";
        $q .= "AND #__pshop_orders.order_id=#__pshop_order_payment.order_id";
        $db->query( $q );
        if( !$db->next_record() ) {
            $d['error'] = "Error: Order not found.";
            return false;
        }
        $expire_date = date( "my", $db->f("order_payment_expire") );
        
        // DECODE Account Number
        $dbaccount = new ps_DB;
        $q = "SELECT DECODE(order_payment_number,'".ENCODE_KEY."') 
          AS account_number from #__pshop_order_payment WHERE order_id='".$db->f("order_id")."'";
        $dbaccount->query($q);
        $dbaccount->next_record();
        
        // Get user billing information
        $dbbt = new ps_DB;
        $qt = "SELECT * FROM #__users WHERE id='".$db->f("user_id")."'";
        $dbbt->query($qt);
        $dbbt->next_record();
        $user_info_id = $dbbt->f("user_info_id");
        if( $user_info_id != $db->f("user_info_id")) {
            // Get user billing information
            $dbst =& new ps_DB;
            $qt = "SELECT * FROM #__pshop_user_info WHERE user_info_id='".$db->f("user_info_id")."' AND address_type='ST'";
            $dbst->query($qt);
            $dbst->next_record();
        }
        else {
            $dbst = $dbbt;
        }

        //Authnet vars to send
        $formdata = array (
            'x_version' => '3.1',
            'x_login' => AN_LOGIN,
            'x_tran_key' => $transaction->passkey,
            'x_test_request' => AN_TEST_REQUEST,
            
            // Gateway Response Configuration
            'x_delim_data' => 'TRUE',
            'x_delim_char' => '|',
            'x_relay_response' => 'FALSE',
            
            // Customer Name and Billing Address
            'x_first_name' => substr($dbbt->f("first_name"), 0, 50),
            'x_last_name' => substr($dbbt->f("last_name"), 0, 50),
            'x_company' => substr($dbbt->f("company"), 0, 50),
            'x_address' => substr($dbbt->f("address_1"), 0, 60),
            'x_city' => substr($dbbt->f("city"), 0, 40),
            'x_state' => substr($dbbt->f("state"), 0, 40),
            'x_zip' => substr($dbbt->f("zip"), 0, 20),
            'x_country' => substr($dbbt->f("country"), 0, 60),
            'x_phone' => substr($dbbt->f("phone_1"), 0, 25),
            'x_fax' => substr($dbbt->f("fax"), 0, 25),
            
            // Customer Shipping Address
            'x_ship_to_first_name' => substr($dbst->f("first_name"), 0, 50),
            'x_ship_to_last_name' => substr($dbst->f("last_name"), 0, 50),
            'x_ship_to_company' => substr($dbst->f("company"), 0, 50),
            'x_ship_to_address' => substr($dbst->f("address_1"), 0, 60),
            'x_ship_to_city' => substr($dbst->f("city"), 0, 40),
            'x_ship_to_state' => substr($dbst->f("state"), 0, 40),
            'x_ship_to_zip' => substr($dbst->f("zip"), 0, 20),
            'x_ship_to_country' => substr($dbst->f("country"), 0, 60),            
            
            // Additional Customer Data
            'x_cust_id' => $db->f('user_id'),
            'x_customer_ip' => $dbbt->f("ip_address"),         
            'x_customer_tax_id' => $dbbt->f("tax_id"),         
            
            // Email Settings
            'x_email' => $dbbt->f("email"),
            'x_email_customer' => 'False',         
            'x_merchant_email' => $vendor_mail,   
            
            // Invoice Information
            'x_invoice_num' => substr($d['order_number'], 0, 20),
            'x_description' => '',
            
            // Transaction Data
            'x_amount' => $db->f("order_total"),
            'x_currency_code' => $vendor_currency,
            'x_method' => 'CC',
            'x_type' => 'PRIOR_AUTH_CAPTURE',
            'x_recurring_billing' => AN_RECURRING,
            
            'x_card_num' => $dbaccount->f("account_number"),
            'x_card_code' => $db->f('order_payment_code'),
            'x_exp_date' => $expire_date,
            'x_trans_id' => $db->f("order_payment_trans_id"),
            
            // Level 2 data
            'x_po_num' => substr($d['order_number'], 0, 20),
            'x_tax' => substr($db->f('order_tax'), 0, 15),
            'x_tax_exempt' => "FALSE",
            'x_freight' => $db->f('order_shipping'),
            'x_duty' => 0
            
        );
        
        //build the post string
        $poststring = '';
        foreach($formdata AS $key => $val){
            $poststring .= urlencode($key) . "=" . urlencode($val) . "&";
        }
        // strip off trailing ampersand
        $poststring = substr($poststring, 0, -1);
        
        if( function_exists( "curl_init" )) {
        
            $CR = curl_init();
            curl_setopt($CR, CURLOPT_URL, "https://".$host.$path);
            curl_setopt($CR, CURLOPT_POST, 1);
            curl_setopt($CR, CURLOPT_FAILONERROR, true); 
            curl_setopt($CR, CURLOPT_POSTFIELDS, $poststring);
            curl_setopt($CR, CURLOPT_RETURNTRANSFER, 1);
             
            // No PEER certificate validation...as we don't have 
            // a certificate file for it to authenticate the host www.ups.com against!
            curl_setopt($CR, CURLOPT_SSL_VERIFYPEER, 0);
            //curl_setopt($CR, CURLOPT_SSLCERT , "/usr/locale/xxxx/clientcertificate.pem");
            
            $result = curl_exec( $CR );
            
            $error = curl_error( $CR );
            if( !empty( $error )) {
              echo curl_error( $CR );
              $html = "<br/><span class=\"message\">".$PHPSHOP_LANG->_PHPSHOP_PAYMENT_INTERNAL_ERROR." authorize.net</span>";
              return false;
            }
            else {
                //echo $result; exit();
            }
            curl_close( $CR );
        }
        else {
        
            $fp = fsockopen("ssl://".$host, $port, $errno, $errstr, $timeout = 60);
            if(!$fp){
                //error tell us
                echo "$errstr ($errno)\n";
            }
            else {
    
                //send the server request
                fputs($fp, "POST $path HTTP/1.1\r\n");
                fputs($fp, "Host: $host\r\n");
                fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
                fputs($fp, "Content-length: ".strlen($poststring)."\r\n");
                fputs($fp, "Connection: close\r\n\r\n");
                fputs($fp, $poststring . "\r\n\r\n");
                
                //Get the response header from the server
                $str = '';
                while(!feof($fp) && !stristr($str, 'content-length')) {
                   $str = fgets($fp, 4096);
                }
                // If didnt get content-lenght, something is wrong, return false.
                if (!stristr($str, 'content-length')) {
                   return false;
                
                }
                $data = "";
                while (!feof($fp)) {
                   $data .= fgets ($fp, 1024);
                }
                $result = trim( $data );
                 /*
                 // Get length of data to be received.
                 $length = trim(substr($str,strpos($str,'content-length') + 15));
                 // Get buffer (blank data before real data)
                 fgets($fp, 4096);
                 // Get real data
                 $data = fgets($fp, $length);
                 fclose($fp);*/
                 
          }
        }
        $response = explode("|", $result);
        
        // Approved - Success!
        if ($response[0] == '1') {
           $d["order_payment_log"] = $PHPSHOP_LANG->_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS.": ";
           $d["order_payment_log"] .= $response[3];
           // Catch Transaction ID
           $d["order_payment_trans_id"] = $response[6];
           
           $q = "UPDATE #__pshop_order_payment SET ";
           $q .="order_payment_log='".$d["order_payment_log"]."',";
           $q .="order_payment_trans_id='".$d["order_payment_trans_id"]."' ";
           $q .="WHERE order_id='".$db->f("order_id")."' ";
           $db->query( $q );
           
           return True;
        } 
        // Payment Declined
        elseif ($response[0] == '2') {
           $d["error"] = $response[3];
           $d["order_payment_log"] = $response[3];
           // Catch Transaction ID
           $d["order_payment_trans_id"] = $response[6];
           return False;
        }
        // Transaction Error
        elseif ($response[0] == '3') {
           $d["error"] = $response[3];
           $d["order_payment_log"] = $response[3];
           // Catch Transaction ID
           $d["order_payment_trans_id"] = $response[6];
           return False;
        }
   }
   
}
