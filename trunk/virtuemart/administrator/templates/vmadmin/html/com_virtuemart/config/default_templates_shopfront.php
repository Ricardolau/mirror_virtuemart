<?php
/**
 *
 * Description
 *
 * @package    VirtueMart
 * @subpackage Config
 * @author Max Milbers
 * @link https://virtuemart.net
 * @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id: default_templates.php 7073 2013-07-15 16:24:50Z Milbo $
 */
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');
$params = VmConfig::loadConfig();

?>
<?php
$type = 'checkbox';

?>

<div class="uk-card uk-card-small uk-card-vm">
	<div class="uk-card-header">
		<div class="uk-card-title">
						<span class="md-color-cyan-600 uk-margin-small-right"
								uk-icon="icon: git-branch; ratio: 1.2"></span>
			<?php echo vmText::_('COM_VIRTUEMART_ADMIN_CFG_SHOPFRONT_DEPRECATED'); ?>
		</div>
	</div>
	<div class="uk-card-body">
		<?php
		echo VmuikitHtml::row('booleanlist', 'COM_VIRTUEMART_ADMIN_CFG_LEGACYLAYOUTS', 'legacylayouts', VmConfig::get('legacylayouts', 1));
		echo VmuikitHtml::row('genericlist', 'COM_VIRTUEMART_ADMIN_CFG_MAIN_LAYOUT', $this->vmLayoutList, 'vmlayout', 'size=1', 'value', 'text', VmConfig::get('vmlayout', 0));
		echo VmuikitHtml::row('booleanlist', 'COM_VIRTUEMART_ADMIN_CFG_SHOW_CATEGORIES', 'show_categories', VmConfig::get('show_categories', 1));
		echo VmuikitHtml::row('input', 'COM_VIRTUEMART_ADMIN_CFG_CATEGORIES_PER_ROW', 'homepage_categories_per_row', VmConfig::get('homepage_categories_per_row', 3), 'class="input-mini"', '', 4);
		echo VmuikitHtml::row('input', 'COM_VIRTUEMART_ADMIN_CFG_PRODUCTS_PER_ROW', 'homepage_products_per_row', VmConfig::get('homepage_products_per_row', 3), 'class="input-mini"', '', 4);
		?>
	</div>
</div>

