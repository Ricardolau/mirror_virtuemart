<?php
/**
 * Administrator menu bottom
 *
 * @package VirtueMart
 * @subpackage Sublayouts  build tabs end
 * @author Max Milbers
 * @copyright Copyright (c) 2004 - ${PHING.VM.COPYRIGHT} VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
 *
 * @version $Id$
 *
 */
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die ();


// $vmView todo
if (!isset(VmConfig::$installed)) {
	VmConfig::$installed = false;
}
if (!VmConfig::$installed) {
	return false;
}
/** @var TYPE_NAME $viewData */
$vmView = $viewData['vmView'];
$currentView = JRequest::getVar('view');
$moduleId = vRequest::getInt('module_id', 0);
$menuItems = vmuikitAdminUIHelper::_getAdminMenu($moduleId);

$app = JFactory::getApplication();
$isSite = $app->isSite();


?>
<div class="vmuikit-menu-bottom  uk-child-width-1-1 uk-grid-small" uk-grid>
	<div>
			<div class="uk-card uk-card-small uk-card-body uk-card-secondary uk-text-center">VirtueMart <?php echo vmVersion::$RELEASE . ' ' . vmVersion::$REVISION ?></div>
	</div>
	<div>
			<div class="uk-card uk-card-small uk-card-body uk-card-secondary">
				<ul class="uk-subnav uk-flex uk-flex-center uk-child-width-1-5" data-uk-grid>
					<li>
						<a href="https://virtuemart.net" target="_blank" class="uk-icon-link" uk-icon="icon: home" uk-tooltip="Home"></a>
					</li>
					<li>
						<a href="https://www.facebook.com/virtuemart" target="_blank" class="uk-icon-link" uk-icon="icon: facebook" uk-tooltip="Facebook"></a>
					</li>
					<li>
						<a href="https://extensions.virtuemart.net" target="_blank" class="uk-icon-link" uk-icon="icon: more"
								uk-tooltip="Extensions"></a>
					</li>

					<li>
						<a href="#" class="uk-icon-link" uk-tooltip="Forum" uk-icon="icon: comments"></a>
					</li>
				</ul>
			</div>
	</div>
	<div>
		<div class="uk-card uk-card-small uk-card-secondary uk-card-body">
			<div class="uk-text-center">
				<div class="uk-margin-small uk-text-bold">Like VirtueMart?</div>
				<div>Become a Supporter</div>
				<div>Reliable Security and Advanced Development thanks to our members</div>

				<div class="uk-margin-small">
					<a href="http://extensions.virtuemart.net/support-updates/virtuemart-membership" target="_blank" >
						<button class="uk-button uk-button-small uk-button-secondary">Buy now</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
