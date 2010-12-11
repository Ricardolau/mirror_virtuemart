<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version $Id: norwegian.php 458 2008-08-05 10:47:28Z rued $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* Translation by Rune Rasmussen (syntaxerror.no).
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'UTF-8',
	'VM_HELP_YOURVERSION' => 'Din {product} versjon',
	'VM_HELP_ABOUT' => '<span style="font-weight: bold;">
		VirtueMart</span> er en komplett netthandelsløsning for Mambo og Joomla! i åpen kildekode. 
		Det er en applikasjon som utgis med en komponent, mer enn 8 moduler og programtillegg.
		Den har sine røtter i et nettbutikkskript med navn "phpShop" (Utviklere: Edikon Corp. & the <a href="http://www.virtuemart.org/" target="_blank">phpShop</a>-samfunnet).',
	'VM_HELP_LICENSE_DESC' => 'VirtueMart er lisensiert under <a href="{licenseurl}" target="_blank">{licensename} lisens</a>.',
	'VM_HELP_TEAM' => 'Det er en liten gruppe utviklere som hjelper til med utviklingen av dette butikkskriptet.',
	'VM_HELP_PROJECTLEADER' => 'Prosjektleder',
	'VM_HELP_HOMEPAGE' => 'Hjemmeside',
	'VM_HELP_DONATION_DESC' => 'Vær snill og vurder å gi et lite bidrag til VirtueMart-prosjektet, for å hjelpe oss å frigjøre tid til å jobbe videre med denne komponenten og nye funksjoner.',
	'VM_HELP_DONATION_BUTTON_ALT' => 'Betal via PayPal - det er raskt, gratis og sikkert!'
); $VM_LANG->initModule( 'help', $langvars );
?>
