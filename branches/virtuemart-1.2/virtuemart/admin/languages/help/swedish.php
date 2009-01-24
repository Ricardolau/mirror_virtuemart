<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : swedish.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @translators Mia Steen, First Solutions & Stefan Gagner, Mei Ya Service, http://www.mei-ya.se
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
	'CHARSET' => 'ISO-8859-1',
	'VM_HELP_YOURVERSION' => 'Din {produkt} version',
	'VM_HELP_ABOUT' => '<span style="font-weight: bold;">
		VirtueMart</span> �r en fullst�ndig Open Source E-Commerce l�sning f�r Mambo och Joomla!. 
		Det �r en applikation som best�r av en Komponent, mer �n 8 Moduler och Mambots/Plugin:er.
		Den har sitt ursprung i ett Kundvagnsskript kallat "phpShop" (F�rf: Edikon Corp. & <a href="http://www.virtuemart.org/" target="_blank">phpShop</a> community).',
	'VM_HELP_LICENSE_DESC' => 'VirtueMart �r licensierad under <a href="{licenseurl}" target="_blank">{licensename} Licens</a>.',
	'VM_HELP_TEAM' => 'Det �r ett litet team utvecklare som hj�lps �t att utveckla detta Kundvagsnsskript.',
	'VM_HELP_PROJECTLEADER' => 'Projektledare',
	'VM_HELP_HOMEPAGE' => 'Hemsida',
	'VM_HELP_DONATION_DESC' => 'G�r g�rna en donation till VirtueMart-projektet f�r att hj�lpa oss forts�tta arbetet med denna komponent och att skapa nya funktioner.',
	'VM_HELP_DONATION_BUTTON_ALT' => 'Betala med PayPal - det �r snabbt, gratis och s�kert!'
); $VM_LANG->initModule( 'help', $langvars );
?>
