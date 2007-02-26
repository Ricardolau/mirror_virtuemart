<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
*
* @version $Id$
* @package VirtueMart
* @subpackage html
* @copyright Copyright (C) 2004-2007 Soeren Eberhardt. All rights reserved.
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

$mainframe->setPageTitle( $VM_LANG->_PHPSHOP_USER_FORM_SHIPTO_LBL );

$pathway = "<a class=\"pathway\" href=\"".$sess->url( SECUREURL ."index.php?page=account.index")."\" title=\"".$VM_LANG->_PHPSHOP_ACCOUNT_TITLE."\">"
      .$VM_LANG->_PHPSHOP_ACCOUNT_TITLE."</a> ".vmCommonHTML::pathway_separator().' '
      .$VM_LANG->_PHPSHOP_USER_FORM_SHIPTO_LBL;
$mainframe->appendPathWay( $pathway );
echo "<div>$pathway</div><br/>";
      
$q  = "SELECT * FROM #__{vm}_user_info WHERE ";
$q .= "(address_type='ST' OR address_type='st') ";
$q .= "AND user_id='" . $auth["user_id"] . "'";
$db->query($q);

$theme = vmTemplate::getInstance();
$theme->set('db', $db);
echo $theme->fetch('pages/'.$page.'.tpl.php');
?>
