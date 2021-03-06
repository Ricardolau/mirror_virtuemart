<?php
if(  !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version $Id: shop.cart.php 1095 2007-12-19 20:19:16Z soeren_nb $
* @package VirtueMart
* @subpackage html
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
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
require_once(CLASSPATH . 'vmFavourites.class.php' );
$vmFavourites = new vmFavourites;

$theme = new $GLOBALS['VM_THEMECLASS']();

?> 
<h3>Favourites List</h3>
<?php 

if ($auth['user_id']) { 
	if(isset($_SESSION['favourites'])) {
		$vmFavourites->addFavourite($_SESSION['favourites']);
		
	}

}
else {
		// user is not logged in
	echo $theme->fetch( 'checkout/login_registration.tpl.php' );
	}

?>