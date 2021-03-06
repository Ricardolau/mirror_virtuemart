<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
/**
*
* @version $Id: shop.cart.tpl.php 663 2007-02-06 13:52:29 +0000 (Tue, 06 Feb 2007) soeren_nb $
* @package VirtueMart
* @subpackage themes
* @copyright Copyright (C) 2004-2006 Soeren Eberhardt. All rights reserved.
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

echo '<h2>Saved '. $VM_LANG->_('PHPSHOP_CART_TITLE') .'</h2>
<!-- Cart Begins here -->
';
include(PAGEPATH. 'savedbasket.php');
echo $basket_html;
echo '<!-- End Cart --><br />
';

if ($cart["idx"]) {
echo '<div align="center">';
echo '<div style="float:left;width: 33%;">'.$replaceSaved.'
    </div>';
echo '<div style="float:left;width: 33%;">'.$mergeSaved.'
    </div>';
echo '<div style="float:left;width: 33%;">'.$deleteSaved.'
    </div>';
    echo '<br style="clear:both;"><br /><hr /><div align="center">';
    
    if( $continue_link != '') {
		?>
		 <a href="<?php echo $continue_link ?>" class="continue_link">
		 	<?php echo "Return"; ?>
		 </a>
		<?php
    }
	  ?>
	</div>
	
	<?php
	// End if statement
}