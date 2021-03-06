<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: order.order_print.php,v 1.16 2005/09/06 19:28:36 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage HTML
* Contains code from PHPShop(tm):
* 	@copyright (C) 2000 - 2004 Edikon Corporation (www.edikon.com)
*	Community: www.phpshop.org, forums.phpshop.org
* Conversion to Mambo and the rest:
* 	@copyright (C) 2004-2005 Soeren Eberhardt
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*/
mm_showMyFileName( __FILE__ );

require_once(CLASSPATH.'ps_product.php');
$ps_product =& new ps_product;

$order_id = mosGetParam( $_REQUEST, 'order_id' );

if (!is_numeric($order_id))
    echo "<h2>The Order ID $order_id is not valid.</h2>";
else {
    
	$q = "SELECT * FROM #__pshop_orders WHERE order_id='$order_id'";
	$db->query($q);
	if( $db->next_record() ) {
	
	  echo ps_order::order_print_navigation( $order_id );
	  
	  $q = "SELECT * FROM #__pshop_order_history WHERE order_id='$order_id' ORDER BY order_status_history_id ASC";
	  $database->setQuery( $q );
	  $order_events = $database->loadObjectList();
	  ?>
	  <table class="adminlist">
		<tr> 
		  <td valign="top" width="35%"> 
			<table width="100%" border="0" cellspacing="0" cellpadding="1">
			  <tr class="sectiontableheader"> 
				<th colspan="2"><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_PO_LBL ?></th>
			  </tr>
			  <tr> 
				<td><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_PO_NUMBER ?>:</strong></td>
				<td><?php printf("%08d", $db->f("order_id"));?></td>
			  </tr>
			  <tr> 
				<td><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_PO_DATE ?>:</strong></td>
				<td><?php echo date("d-M-Y:H:i", $db->f("cdate"));?></td>
			  </tr>
			  <tr> 
				<td><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_PO_STATUS ?>:</strong></td>
				<td><?php $db->p("order_status") ?></td>
			  </tr>
			  <tr>
			  <td><strong>IP-ADDRESS:</strong></td>
			  <td><?php $db->p("ip_address"); ?></td>
			  </tr>
			</table>
		  </td>
		  <td valign="top" width="65%">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
			<?php
			$tab = new mShopTabs( 0, 1, "myTab");
			$tab->startPane( "order_change_pane" );
			$tab->startTab( "Order Status Change", "order_change_pane" );
			?>
			<table class="adminlist">
			 <tr>
			  <th colspan="3"><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_STATUS_CHANGE ?></th>
			 </tr>
			 <tr>
			  <td colspan="3"><?php echo "<strong>".$PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_PO_STATUS .": </strong>";
				  $ps_order_status->list_order_status($db->f("order_status")); ?>
					<input type="submit" class="button" name="Submit" value="Update Status" />
					<input type="hidden" name="page" value="order.order_print" />
					<input type="hidden" name="func" value="orderStatusSet" />
					<input type="hidden" name="option" value="com_phpshop" />
					<input type="hidden" name="current_order_status" value="<?php $db->p("order_status") ?>" />
					<input type="hidden" name="order_id" value="<?php echo $order_id ?>" />
			  </td>
			 </tr>
			 <tr>
			  <td valign="top"><?php echo "<strong>".$PHPSHOP_LANG->_PHPSHOP_COMMENT .": </strong>"; ?>
			  </td>
			  <td>
				<textarea name="order_comment" rows="4" cols="35"></textarea>
			  </td>
			  <td>
				<input type="checkbox" name="notify_customer" checked="checked" value="Y" /> <?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_LIST_NOTIFY ?>
				<br/>
				<input type="checkbox" name="include_comment" checked="checked" value="Y" /> <?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT ?>
				</form>
			  </td>
			 </tr>
			</table>
				<?php
				$tab->endTab();
				$tab->startTab( $PHPSHOP_LANG->_PHPSHOP_ORDER_HISTORY, "order_history_pane" );
				?>
			<table class="adminlist">
			 <tr >
			  <th><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_HISTORY_DATE_ADDED ?></th>
			  <th><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED ?></th>
			  <th><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_LIST_STATUS ?></th>
			  <th><?php echo $PHPSHOP_LANG->_PHPSHOP_COMMENT ?></th>
			 </tr>
			 <?php 
			 foreach( $order_events as $order_event ) {
			  echo "<tr>";
			  echo "<td>".$order_event->date_added."</td>\n";
			  echo "<td align=\"center\"><img alt=\"Status Icon\" src=\"$mosConfig_live_site/administrator/images/";
			  if( $order_event->customer_notified == 1 )
				echo "tick.png";
			  else
				echo "publish_x.png";
			  echo "\" border=\"0\" align=\"center\" /></td>\n";
			  echo "<td>".$order_event->order_status_code."</td>\n";
			  echo "<td>".$order_event->comments."</td>\n";
			  echo "</tr>\n";
			 }
			 ?>
			</table>
			<?php
			$tab->endTab();
			$tab->endPane();
			?>
		  </td>
		</tr>
	  </table>
	  <table class="adminlist">
		<tr> 
		  <td colspan="2">&nbsp; </td>
		</tr><?php
		  $user_id = $db->f("user_id");
		  $dbt = new ps_DB;
		  $qt = "SELECT * from #__pshop_order_user_info WHERE user_id='$user_id' AND order_id='$order_id' ORDER BY address_type ASC"; 
		  $dbt->query($qt);
		  $dbt->next_record();
	   ?> 
		<tr> 
		  <th width="48%" valign="top"><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_BILL_TO_LBL ?></th>
		  <th width="52%" valign="top"><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL ?></th>
		</tr>
		<tr> 
		  <td width="48%" valign="top">
			<table width="100%" border="0" cellspacing="0" cellpadding="1">
			  <tr> 
				<td width="35%" align="right">&nbsp;<?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_NAME ?>:</td>
				<td width="65%"><?php
					if ($dbt->f("title")) {
					  echo $dbt->f("title") . " ";
					}
					echo $dbt->f("first_name") . " ";
					if ($dbt->f("middle_name")) {
					  echo $dbt->f("middle_name") . " ";
					}
					echo $dbt->f("last_name");?>
				</td>
			  </tr>
			  <tr> 
				<td width="35%" align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_COMPANY ?>:</strong></td>
				<td width="65%"><?php $dbt->p("company"); ?></td>
			  </tr>
			  <tr> 
				<td width="35%" align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_ADDRESS_1 ?>:</strong></td>
				<td width="65%"><?php $dbt->p("address_1"); ?></td>
			  </tr>
			  <tr> 
				<td width="35%" align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_ADDRESS_2 ?>:</strong></td>
				<td width="65%"><?php $dbt->p("address_2"); ?></td>
			  </tr>
			  <tr> 
				<td width="35%" align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_CITY ?>:</strong></td>
				<td width="65%"><?php $dbt->p("city");  ?></td>
			  </tr>
			  <tr> 
				<td width="35%" align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_STATE ?>:</strong></td>
				<td width="65%"><?php $dbt->p("state"); ?></td>
			  </tr>
			  <tr> 
				<td width="35%" align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_ZIP ?>:</strong></td>
				<td width="65%"><?php echo $dbt->p("zip"); ?></td>
			  </tr>
			  <tr> 
				<td width="35%" align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_COUNTRY ?>:</strong></td>
				<td width="65%"><?php 
			$country = $dbt->f("country");
			$database->setQuery( "SELECT country_name FROM #__pshop_country WHERE country_3_code = '$country'");
			$country_name = $database->loadResult();
			echo $country_name;
		 ?></td>
			  </tr>
			  <tr> 
				<td width="35%" align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_PHONE ?>:</strong></td>
				<td width="65%"><?php $dbt->p("phone_1"); ?></td>
			  </tr>
			  <tr> 
				<td width="35%" align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_FAX ?>:</strong></td>
				<td width="65%"><?php $dbt->p("fax"); ?></td>
			  </tr>
			  <tr> 
				<td width="35%" align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_EMAIL ?>:</strong></td>
				<td width="65%"><?php $dbt->p("user_email"); ?></td>
			  </tr>
			</table>
		  </td>
		  <td width="52%" valign="top">
	  <?php
	  // Get Ship To Address
	  $dbt->next_record();
	  ?> 
			<table width="100%" border="0" cellspacing="0" cellpadding="1">
			  <tr> 
				<td width="35%" align="right">&nbsp;<?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_NAME ?>:</td>
				<td width="65%"><?php
					if ($dbt->f("title")) {
					  echo $dbt->f("title") . " ";
					}
					echo $dbt->f("first_name") . " ";
					if ($dbt->f("middle_name")) {
					  echo $dbt->f("middle_name") . " ";
					}
					echo $dbt->f("last_name");
				?></td>
			  </tr>
			  <tr> 
				<td width="35%" align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_COMPANY ?>:</strong></td>
				<td width="65%"><?php $dbt->p("company"); ?></td>
			  </tr>
			  <tr> 
				<td width="35%" align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_ADDRESS_1 ?>:</strong></td>
				<td width="65%"><?php $dbt->p("address_1") ?></td>
			  </tr>
			  <tr> 
				<td width="35%" align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_ADDRESS_2 ?>:</strong></td>
				<td width="65%"><?php $dbt->p("address_2")  ?></td>
			  </tr>
			  <tr> 
				<td width="35%" align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_CITY ?>:</strong></td>
				<td width="65%"><?php $dbt->p("city") ?></td>
			  </tr>
			  <tr> 
				<td width="35%" align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_STATE ?>:</strong></td>
				<td width="65%"><?php $dbt->p("state") ?></td>
			  </tr>
			  <tr> 
				<td width="35%" align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_ZIP ?>:</strong></td>
				<td width="65%"><?php $dbt->p("zip") ?></td>
			  </tr>
			  <tr> 
				<td width="35%" align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_COUNTRY ?>:</strong></td>
				<td width="65%"><?php 
			if( $country != $dbt->f("country")) {
				$country = $dbt->f("country");
				$database->setQuery( "SELECT country_name FROM #__pshop_country WHERE country_3_code = '$country'");
				$country_name = $database->loadResult();
			}
			echo $country_name;
			 ?></td>
			  </tr>
			  <tr> 
				<td width="35%" align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_PHONE ?>:</strong></td>
				<td width="65%"><?php $dbt->p("phone_1") ?></td>
			  </tr>
			  <tr> 
				<td width="35%" align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_FAX ?>:</strong></td>
				<td width="65%"><?php $dbt->p("fax") ?></td>
			  </tr>
			</table>
		  </td>
		</tr>
		<tr> 
		  <td colspan="2"><hr/></td>
		</tr>
		<tr> 
		  <td colspan="2"> 
			<table  class="adminlist">
			  <tr > 
				<th width="5%"><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_QUANTITY ?></th>
				<th width="42%"><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_NAME ?></th>
				<th width="9%"><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_SKU ?></th>
				<th width="12%"><?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_FORM_PRICE_NET ?></th>
				<th width="12%"><?php echo $PHPSHOP_LANG->_PHPSHOP_PRODUCT_FORM_PRICE_GROSS ?></th>
				<th width="19%"><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_TOTAL ?></th>
			  </tr>
			  <?php
			  $dbt = new ps_DB;
			  $qt  = "SELECT product_quantity,order_item_name,order_item_sku,product_id,product_item_price,product_final_price, product_attribute
						FROM #__pshop_order_item 
						WHERE #__pshop_order_item.order_id='$order_id' ";
			  $dbt->query($qt);
			  $i = 0;
			  
			  while ($dbt->next_record()){
				if ($i++ % 2) 
				   $bgcolor=SEARCH_COLOR_1;
				else
				  $bgcolor=SEARCH_COLOR_2;
				$t = $dbt->f("product_quantity") * $dbt->f("product_final_price");
				
			  ?>
			  <tr bgcolor="<?php echo $bgcolor; ?>" valign="top"> 
				<td width="5%"> <?php $dbt->p("product_quantity") ?></td>
				<td width="42%"><?php $dbt->p("order_item_name"); 
				  echo "<br /><font size=\"-2\">" . $dbt->f("product_attribute") . "</font>"; 
				  ?>
				</td>
				<td width="9%"><?php  $dbt->p("order_item_sku") ?>&nbsp;</td>
				<td width="12%" align="right"><?php echo $CURRENCY_DISPLAY->getFullValue($dbt->f("product_item_price"));  ?></td>
				<td width="12%" align="right"><?php echo $CURRENCY_DISPLAY->getFullValue($dbt->f("product_final_price"));  ?></td>
				<td width="19%" align="right"><?php echo $CURRENCY_DISPLAY->getFullValue($t); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			  </tr>
			  <?php 
			  } 
			  ?> 
			  <tr> 
				<td colspan="6">&nbsp; </td>
			  </tr>
			  <tr> 
				<td width="5%">&nbsp;</td>
				<td width="42%">&nbsp;</td>
				<td colspan="3"><div align="right"><strong> <?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_SUBTOTAL ?>: </strong></div></td>
				<td width="19%"><div align="right"><?php echo $CURRENCY_DISPLAY->getFullValue($db->f("order_subtotal")); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
			  </tr>
	  <?php
			  /* COUPON DISCOUNT */
			$coupon_discount = $db->f("coupon_discount");
			
	  
			if( PAYMENT_DISCOUNT_BEFORE == '1') {
			  if ($db->f("order_discount") != 0) {
	  ?>
			  <tr>
				 <td width="5%">&nbsp;</td>
				<td width="42%">&nbsp;</td>
				<td colspan="3"><div  align="right"><strong><?php 
				  if( $db->f("order_discount") > 0)
					echo $PHPSHOP_LANG->_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT;
				  else
					echo $PHPSHOP_LANG->_PHPSHOP_FEE;
					?>:</div></strong></td>
				<td width="19%"><div  align="right"><?php
					  if ($db->f("order_discount") > 0 )
					 echo "-" . $CURRENCY_DISPLAY->getFullValue(abs($db->f("order_discount")));
				elseif ($db->f("order_discount") < 0 )
					 echo "+" . $CURRENCY_DISPLAY->getFullValue(abs($db->f("order_discount"))); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
				  </td>
			  </tr>
			  
			  <?php 
			  } 
			  if( $coupon_discount > 0 || $coupon_discount < 0) {
	  ?>
			  <tr>
				<td colspan="5"><div align="right"><?php echo $PHPSHOP_LANG->_PHPSHOP_COUPON_DISCOUNT ?>:</div>
				</td> 
				<td><div align="right"><?php
				  echo "- ".$CURRENCY_DISPLAY->getFullValue( $coupon_discount ); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
				</td>
			  </tr>
			  <?php
			  }
			}
	  ?>
			  
			  <tr> 
				<td width="5%">&nbsp;</td>
				<td width="42%">&nbsp;</td>
				<td colspan="3"><div align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_TOTAL_TAX ?>: </div></strong></td>
				<td width="19%"><div align="right"><?php echo $CURRENCY_DISPLAY->getFullValue($db->f("order_tax")) ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
			  </tr>
			  <tr> 
				<td width="5%">&nbsp;</td>
				<td width="42%">&nbsp;</td>
				<td colspan="3"><div align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_SHIPPING ?>: </div></strong></td>
				<td width="19%"><div align="right"><?php echo $CURRENCY_DISPLAY->getFullValue($db->f("order_shipping")) ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
			  </tr>
			  <tr> 
				<td width="5%">&nbsp;</td>
				<td width="42%">&nbsp;</td>
				<td colspan="3"><div align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_SHIPPING_TAX ?>: </div></strong></td>
				<td width="19%"><div align="right"><?php echo $CURRENCY_DISPLAY->getFullValue($db->f("order_shipping_tax")) ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
			  </tr>
	  <?php
			if( PAYMENT_DISCOUNT_BEFORE != '1') {
			  if ($db->f("order_discount") != 0) {
	  ?>
			  <tr> 
				<td width="5%">&nbsp;</td>
				<td width="42%">&nbsp;</td>
				<td colspan="3"><div align="right"><strong><?php 
				  if( $db->f("order_discount") > 0)
					echo $PHPSHOP_LANG->_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT;
				  else
					echo $PHPSHOP_LANG->_PHPSHOP_FEE;
					?>:</strong></div></td>
				<td width="19%"><div align="right"><?php
					  if ($db->f("order_discount") > 0 )
					 echo "-" . $CURRENCY_DISPLAY->getFullValue(abs($db->f("order_discount")));
				elseif ($db->f("order_discount") < 0 )
					 echo "+" . $CURRENCY_DISPLAY->getFullValue(abs($db->f("order_discount"))); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
				  </td>
			  </tr>
			  
			  <?php 
			  } 
			  if( $coupon_discount > 0 || $coupon_discount < 0) {
	  ?>
			  <tr> 
				<td width="5%">&nbsp;</td>
				<td width="42%">&nbsp;</td>
				<td colspan="3"><div align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_COUPON_DISCOUNT ?>:</div></strong>
				</td> 
				<td><div align="right"><?php
				  echo "- ".$CURRENCY_DISPLAY->getFullValue( $coupon_discount ); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
				</td>
			  </tr>
			  <?php
			  }
			}
	  ?>
			  <tr>
				<td width="5%">&nbsp;</td>
				<td width="42%">&nbsp;</td>
				<td colspan="3"><div align="right"><strong><?php echo $PHPSHOP_LANG->_PHPSHOP_CART_TOTAL ?>:</div> </strong></td>
				<td width="19%"><div align="right"><strong><?php echo $CURRENCY_DISPLAY->getFullValue($db->f("order_total")); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></strong>
				  </td>
			  </tr>
			</table>
		  </td>
		</tr>
		<tr>
		<td colspan="2">
		 <table width="100%">
			<tr class="sectiontableheader"> 
				
			  <?php if( $db->f("ship_method_id") ) { ?>
			  <td valign="top">
				<table class="adminlist">
				  <tr>
					<th ><?php 
							$details = explode( "|", $db->f("ship_method_id"));
							echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_SHIPPING_LBL ?>
					</th>
				  </tr>
				  <tr> 
					<td width="50%">
					  <strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL ?>: </strong>
						<?php  echo $details[1]; ?>&nbsp;</td>
	  
				  <tr>
					<td width="50%">
					  <strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL ?>: </strong>
					  <?php echo $details[2]; ?></td>
					
				  </tr>
				  <tr>
					<td width="50%">
					  <strong><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL ?>: </strong>
					<?php echo $CURRENCY_DISPLAY->getFullValue($details[3]); ?>
					</td>
				  </tr>
				</table>
			  </td>
			  <?php 
			  } ?>
			  
			  <!-- Customer Note -->
			  <td valign="top">
				<table class="adminlist">
				  <tr>
					<th><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE ?></th>
				  </tr>
				  <tr>
				  <td valign="top" width="50%" rowspan="4"><?php
					  if( $db->f("customer_note") ) {
						echo nl2br( $db->f("customer_note") );
					  }
					  else
						echo " ./. ";
						  
					  ?>&nbsp;
					</td>
				  </tr>
				</table>
			  </td>
			  
			  <!-- Payment Information -->
			  <td valign="top">
				<table class="adminlist">
				  <tr class="sectiontableheader"> 
					<th width="13%"><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_PAYMENT_LBL ?></th>
					<th width="40%"><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME ?></th>
					<th width="30%"><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER;
						$dbpm =& new ps_DB;
						$q  = "SELECT * FROM #__pshop_payment_method, #__pshop_order_payment WHERE #__pshop_order_payment.order_id='$order_id' ";
						$q .= "AND #__pshop_payment_method.payment_method_id=#__pshop_order_payment.payment_method_id";
						$dbpm->query($q);
						$dbpm->next_record();
					   
						// DECODE Account Number
						$dbaccount =& new ps_DB;
					   $q = "SELECT DECODE(order_payment_number,'".ENCODE_KEY."') 
							as account_number from #__pshop_order_payment  
							where order_id='".$order_id."'";
						$dbaccount->query($q);
						$dbaccount->next_record();
					  ?> 
					  </th>
					<th width="17%"><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_EXPIRE_DATE ?></th>
				  </tr>
				  <tr> 
					<td width="13%"><?php $dbpm->p("payment_method_name");?> </td>
					<td width="40%"><?php $dbpm->p("order_payment_name");?></td>
					<td width="30%"><?php $dbaccount->p("account_number");?></td>
					<td width="17%"><?php echo date("M-Y", $dbpm->f("order_payment_expire")); ?></td>
				  </tr>
				  <tr> 
				  <tr class="sectiontableheader"> 
					<th colspan="4"><?php echo $PHPSHOP_LANG->_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL ?></th>
				  </tr>
				  <tr> 
					<td colspan="4"><?php if($dbpm->f("order_payment_log")) echo $dbpm->f("order_payment_log"); else echo "./."; ?></td>
				  </tr>
				</table>
			  </td>
			  
			</tr>
		  </table>
		 </td>
		</tr>
		<tr> 
		  <td colspan="2">&nbsp;</td>
		</tr>
	  </table>
	<?php
	}
	else
	  echo "Order not found! It may have been deleted.";
}
?>