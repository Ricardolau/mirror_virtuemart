<?php 
if( !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
*
* @version $Id: shop.manufacturer_page.php 1755 2009-05-01 22:45:17Z rolandd $
* @package JMart
* @subpackage html
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* JMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_jmart/COPYRIGHT.php for copyright notices and details.
*
* http://joomlacode.org/gf/project/jmart/
*/
mm_showMyFileName( __FILE__ );

$manufacturer_id = intval( vmGet( $_GET, 'manufacturer_id' ));

if( !empty( $manufacturer_id ) ) {

	$q  = "SELECT `manufacturer_id`,`mf_name`,`mf_email`,`mf_desc`,`mf_url` FROM `#__{vm}_manufacturer` WHERE ";
	$q .= "`manufacturer_id`=$manufacturer_id";
	$db->query($q);
	if( !$db->next_record() ) {
		return;
	}

	$mf_name=$db->f("mf_name");
	$mf_email=$db->f("mf_email");
	$mf_desc=$db->f("mf_desc");
	$mf_url = $db->f("mf_url");
	
	$tpl = vmTemplate::getInstance();
	$tpl->set_vars(array('mf_name'=>$db->f("mf_name"),
					'mf_email' => $db->f("mf_email"),
					'mf_desc' => $db->f("mf_desc"),
					'mf_url' => $db->f("mf_url"),
					'db' => $db
					)
	);
	echo $tpl->fetch('pages/shop.manufacturer.tpl.php');

}
?>
