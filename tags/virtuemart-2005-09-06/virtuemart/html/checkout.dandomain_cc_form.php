<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: checkout.dandomain_cc_form.php,v 1.2 2005/05/17 20:31:44 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage HTML
* @copyright (C) 2004-2005 Soeren Eberhardt
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*/
mm_showMyFileName( __FILE__ );

require_once(  CLASSPATH ."payment/ps_pbs.cfg.php");

$sessionid = mosGetParam( $_GET, "sessionid" );

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
  }
  
  /** Retrieve Order & Payment Info **/
  $db = new ps_DB;
  $q  = "SELECT order_id,order_total FROM #__pshop_orders ";
  $q .= "WHERE #__pshop_orders.user_id='" . $my->id . "' ";
  $q .= "AND #__pshop_orders.order_id='$order_id' ";
  $db->query($q);
  if ($db->next_record()) {
  
    switch( $_SESSION['vendor_currency'] ) {
      case "DKK":
        $currency_iso_4217 = 208;
        break;
      case "EUR":
        $currency_iso_4217 = 978;
        break;
      case "USD":
        $currency_iso_4217 = 840;
        break;
      default:
        // assume that a danish gateway is used with Danish Krona
        $currency_iso_4217 = 208;
    }
    
    ?>  
    <div id="overDiv" style="position:absolute; visibility:hidden; z-index:10000;"></div>
    <script type="text/javascript" src="<?php echo $mosConfig_live_site ?>/includes/js/overlib_mini.js"></script>
    <script type="text/javascript">
    function check_pbscc_form() {
      // Remove all non-digits from CardNumber
      document.checkout_pbscc_payment.CardNumber.value = document.checkout_pbscc_payment.CardNumber.value.replace(/(\D)+/g,"");
    
      // Remove all non-digits from Control-digits
      document.checkout_pbscc_payment.CVC.value = document.checkout_pbscc_payment.CVC.value.replace(/(\D)+/g,"");
      
      if(document.checkout_pbscc_payment.CardNumber.value.length < 10 ) {
        alert('<?php echo $PHPSHOP_LANG->_PHPSHOP_CHECKOUT_ERR_NO_CCDATE ?>');
        return false;
      }      
      else if(document.checkout_pbscc_payment.CVC.value.length < 3 ) {
        alert('<?php echo _CONTACT_FORM_NC ?>');
        return false;
      }
      return true;
    }
    </script>
            
        <h2><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_PAYINFO_LBL ?></h2>
        <h3>This page is located on the webshop's website.<br/>
        the gateway execute the page on the website, and the shows the result SSL Encrypted.</h3>
    
        &nbsp;<form method="post" action=" https://pay.dandomain.dk/securecapture.asp" name="checkout_pbscc_payment">
    <input type="hidden" name="CurrencyID" value="<?php echo $currency_iso_4217 ?>" />
    <input type="hidden" name="Amount" value="<?php echo str_replace(".", ",", $db->f("order_total")) ?>" />
    <input type="hidden" name="OrderId" value="<?php echo $db->f("order_id") ?>" />
    <?php if( PBS_TEST_MODE == "1" ) { ?>
      <input type="hidden" name="TestMode" value="1" />
    <?php } ?>
    <input type="hidden" name="sessionid" value="<?php echo $sessionid ?>" />
	<input type="hidden" name="OKURL" value="<?php echo $mosConfig_live_site ?>/index.php?option=com_phpshop&page=checkout.dandomain_result&accept=1" />
	<input type="hidden" name="FAILURL" value="<?php echo $mosConfig_live_site ?>/index.php?option=com_phpshop&page=checkout.dandomain_result&accept=0" />
    <input type="hidden" name="MerchantNumber" value="<?php echo PBS_MERCHANT_ID ?>" /> 
    <br/>
    <table>
      <tr>
        <td><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_PO_NUMBER ?>:</td>
        <td><?php printf("%08d", $db->f("order_id")); ?></td>
      </tr>
      <tr>
        <td><?php echo $PHPSHOP_LANG->_PHPSHOP_CART_TOTAL ?>:</td>
        <td><?php echo $CURRENCY_DISPLAY->getFullValue( $db->f("order_total")); ?></td>
      </tr>
      <tr>
        <td colspan="2"><hr/></td>
      </tr>
      <tr>
        <td><?php echo $PHPSHOP_LANG->_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM ?>:</td>
        <td><input class="inputbox" type="text" name="CardNumber" size="20"></td>
      </tr>
      <tr>
        <td><?php echo $PHPSHOP_LANG->_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE ?>:</td>
        <td>
          <select class="inputbox" name="ExpireMonth">
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>&nbsp;&nbsp;
          <select class="inputbox" size="1" name="ExpireYear">
            <option value="05">2005</option>
            <option value="06">2006</option>
            <option value="07">2007</option>
            <option value="08">2008</option>
            <option value="09">2009</option>
            <option value="10">2010</option>
            <option value="11">2011</option>
            <option value="12">2012</option>
            <option value="13">2013</option>
            <option value="14">2014</option>
            <option value="15">2015</option>
            <option value="16">2016</option>
            <option value="17">2017</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Credit Card Validation Code:</td>
        <td><input class="inputbox" type="text" name="CardCVC" size="5" />
        <?php echo mosToolTip($PHPSHOP_LANG->_PHPSHOP_CUSTOMER_CVV2_TOOLTIP, "What\'s the Credit Card Validation Code?"); ?>
        </td>
      </tr>
    </table>
    <p align="center"><input type="submit" name="submit" onclick="return check_pbscc_form();" /></p>
    </form>
    
  <?php
  }
}
else {
?>
      <img src="<?php echo IMAGEURL ?>ps_image/button_cancel.png" align="center" alt="Failure" border="0" />
      <span class="message"><? echo $PHPSHOP_LANG->_PHPSHOP_PAYMENT_ERROR ?> (MD5 Check failed)</span>
<?php
}
?>
