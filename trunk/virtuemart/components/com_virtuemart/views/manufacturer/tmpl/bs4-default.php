<?php
/**
*
* Description
*
* @package	VirtueMart
* @subpackage Manufacturer
* @author Kohl Patrick, Eugen Stranz
* @link ${PHING.VM.MAINTAINERURL}
* @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* @version $Id: default.php 2701 2011-02-11 15:16:49Z impleri $
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

?>
<div data-vm="main-container">
    <?php
    echo ShopFunctionsF::renderVmSubLayoutAsGrid(
        'bs4-manufacturer',
        array (
            'manufacturer' => $this->manufacturers,
            'options' => array (
                'items_per_row' => array (
                    'xs' => VmConfig::get ('manufacturer_per_row', 3),
                    'sm' => VmConfig::get ('manufacturer_per_row', 3),
                    'md' => VmConfig::get ('manufacturer_per_row', 3),
                    'lg' => VmConfig::get ('manufacturer_per_row', 3),
                    'xl' => VmConfig::get ('manufacturer_per_row', 3),
                ),
                'show_vertical_line' => true,
            ),
        )
    );
    ?>
</div>