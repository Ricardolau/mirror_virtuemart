<?php
if( !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
*
* @version $Id: version.php 6059 2012-06-06 10:35:14Z alatak $
* @package VirtueMart
* @subpackage core
* @copyright Copyright (C) 2005-2011 VirtueMart Team - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.org
*/
if( class_exists( 'vmVersion' ) ) {

	$shortversion = vmVersion::$PRODUCT . " " . vmVersion::$RELEASE . " " . vmVersion::$DEV_STATUS. " ";

	$myVersion = $shortversion . " [".vmVersion::$CODENAME ."] <br />" . vmVersion::$RELDATE . " "
	. vmVersion::$RELTIME . " " . vmVersion::$RELTZ;

	return;
}

if( !class_exists( 'vmVersion' ) ) {
/** Version information */
class vmVersion {
	/** @var string Product */
	static $PRODUCT = '${PHING.VM.PRODUCT}';
	/** @var int Release Number */
	static $RELEASE = '${PHING.VM.RELEASE}';
	/** @var string Development Status */
	static $DEV_STATUS = '${PHING.VM.DEV_STATUS}';
	/** @var string Codename */
	static $CODENAME = '${PHING.VM.CODENAME}';
	/** @var string Date */
	static $RELDATE = '${PHING.VM.RELDATE}';
	/** @var string Time */
	static $RELTIME = '${PHING.VM.RELTIME}';
	/** @var string Timezone */
	static $RELTZ = '${PHING.VM.RELTZ}';
	/** @var string Revision */
	static $REVISION = 'Revision: ${PHING.VM.REVISION}';
	/** @var string Copyright Text */
	static $COPYRIGHT = 'Copyright (C) 2005-2012 VirtueMart Development Team  - All rights reserved.';
	/** @var string URL */
	static $URL = '<a href="http://virtuemart.net">VirtueMart</a> is a Free Component for Joomla! released under the GNU/GPL2 License.';
}

$shortversion = vmVersion::$PRODUCT . " " . vmVersion::$RELEASE . " " . vmVersion::$DEV_STATUS. " ";

$myVersion = $shortversion .' '.vmVersion::$REVISION. " [".vmVersion::$CODENAME ."] <br />" . vmVersion::$RELDATE . " "
	. vmVersion::$RELTIME . " " . vmVersion::$RELTZ;

}

// pure php no closing tag