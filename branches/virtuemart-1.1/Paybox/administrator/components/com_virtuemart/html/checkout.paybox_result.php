<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
* @version $Id: checkout.paybox_result.php
* @package VirtueMart
* @subpackage html
 * Version: ${PHING.VM.RELEASE}
 * valerie Isaksen valerie@virtuemart.net
 * @copyright Copyright (C) 2004-${PHING.VM.PHING.VM.YEAR} Soeren Eberhardt. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
*
*
*/


mm_showMyFileName( __FILE__ );

require_once(  CLASSPATH ."payment/ps_paybox.cfg.php");
require_once(  CLASSPATH ."payment/ps_paybox.php");
$PAYBOX_LANG =& new ps_paybox_Language();

global $mosConfig_absolute_path, $mosConfig_live_site, $mosConfig_lang;
global $VM_LANG, $auth;

$status = vmGet($_REQUEST, 'status' );
$bankauth = vmGet($_REQUEST, 'bankauth' );
$payboxauth = vmGet($_REQUEST, 'payboxauth' );
//$order_id = vmGet($_REQUEST, 'vmref' );
//supprime le prefixe
        $charlist= PAYBOX_PREFIX. "-";
	$order_id1=	 vmGet($_REQUEST,'vmref' ) ;
        $order_id= trim($order_id1, $charlist);
//fin suppression prefixe
$amount = vmGet($_REQUEST, 'amount' );
$pbxerror =  vmGet($_REQUEST, 'pbxerror' );

$qv = "SELECT order_id FROM  #__{vm}_orders ";
$qv .= "WHERE order_id='".$order_id."'";
$qv .= "AND  #__{vm}_orders.user_id='" . $auth["user_id"] . "' ";

$dbo = new ps_DB;
$dbo->query($qv);
$dbo->next_record() ;
$d['order_id'] = $dbo->f("order_id");


if ($status==="ok"  && $pbxerror === "00000" ) {
    ?> 
            <img src="<?php echo IMAGEURL ?>ps_image/button_ok.png" align="center" alt="Success" border="0" />
           <h2><?php echo $PAYBOX_LANG->_('PS_PAYBOX_PAYBOX_THANKYOU') ?></h2>
        <?php
}
elseif ( $status==="cancel" ) {
	?>
    <span class="message"><?php echo $PAYBOX_LANG->_('PS_PAYBOX_PAYMENT_CANCEL') ?></span>
  <?php
}
elseif ( $status==="cancel"  or $status==="deny" ) {
	$error = vmGet($_REQUEST, 'pbxerror' , 0);
	?>
    <span class="message"><?php echo $PAYBOX_LANG->_('PS_PAYBOX_PAYMENT_NOT_SUCCESS') ?></span>
  <?php
  if ( $error != 0) {
  	echo  $error.": ".$PAYBOX_LANG->_($error);
  }
}
   ?> 	

        <br />
        <p><a href="<?php @$sess->purl( SECUREURL."index.php?option=".$option."&page=account.order_details&order_id=".$d['order_id'] ) ?>">
           <?php echo $VM_LANG->_('PHPSHOP_ORDER_LINK') ?></a>
        </p>

