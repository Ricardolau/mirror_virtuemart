<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
*
* @version $Id: product.mycsv.php,v 1.3 2005/09/29 20:02:18 soeren_nb Exp $
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
mm_showMyFileName( __FILE__ );
?>
<div style="text-align: left; width: 30%;" class="message"><?php echo $VM_LANG->_PHPSHOP_CSV_OUTPUT_CSV_UPLOAD_MESSAGES ?></div>
<br />
<div style="width: 99%">
	<div style="float: left; width: 20%; border: 1px solid #000000; margin-right: 5%;">
		<table style="width: 100%;">
		<tr style="background-color: #DFDFDF;"><td>&nbsp;</td><td><?php echo $VM_LANG->_PHPSHOP_CSV_OUTPUT_COUNT ?></td></tr>
		<?php
		$total = 0;
		foreach ($vars['csv_stats'] as $action => $stats) {
			$action = strtoupper("_PHPSHOP_CSV_OUTPUT_".$action);
			?>
			<tr style="background-color: #EFEFEF;"><td><?php echo $VM_LANG->$action; ?></td><td><?php echo $stats['count']; ?></td></tr>
			<?php $total = $total + $stats['count']; ?>
		<?php } ?>
		<tr style="background-color: #DFDFDF;"><td><?php echo $VM_LANG->_PHPSHOP_CSV_OUTPUT_TOTAL ?></td><td><?php echo $total; ?></td></tr>
		</table>
	</div>
	<div style="float: left; text-align: left; align: center; width: 30%; height: 250px; overflow: auto;";>
		<?php
		foreach ($vars['csv_stats'] as $action => $stats) {
			$action = strtoupper("_PHPSHOP_CSV_OUTPUT_".$action);
			echo "<div style=\"text-align: center; background-color: #EFEFEF;\">".$VM_LANG->$action."</div>";
			echo $stats['message'];
			echo "<br />";
		}
		?>
	</div>
	<div style="float: left; width: 100%; margin-top: 1.0em;">
		<?php echo $VM_LANG->_PHPSHOP_CSV_OUTPUT_FILE_IMPORTED ?><br />
		<img src="<?php echo $my_path ?>query.png" /><a href="<?php $sess->purl($_SERVER['PHP_SELF'] . "?pshop_mode=admin&page=product.csv_upload"); ?>"><?php echo $VM_LANG->_PHPSHOP_PRODUCT_CSV_UPLOAD ?></a>
	</div>
</div>
