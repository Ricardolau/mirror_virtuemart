<?php
/**
 *
 * Realex payment plugin
 *
 * @author Valerie Isaksen
 * @version $Id$
 * @package VirtueMart
 * @subpackage payment
 * ${PHING.VM.COPYRIGHT}
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
 *
 * http://virtuemart.net
 */
?>
<?php
$get=filter_var_array($_GET, FILTER_SANITIZE_STRING);
$_GET["option"]="com_virtuemart";
$_GET["element"]="realex_hpp_api";

$_REQUEST["option"]="com_virtuemart";
$_REQUEST["element"]="realex_hpp_api";

	$_GET["view"]="pluginresponse";
	$_GET["task"]="pluginresponsereceived";
	$_REQUEST["view"]="pluginresponse";
	$_REQUEST["task"]="pluginresponsereceived";

include("index.php");


?>

