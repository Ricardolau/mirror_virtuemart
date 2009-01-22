<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translators:Stefan Gagner, Mei Ya Service, http://www.mei-ya.se & Mia Steen, 1st Solution http://www.1stsolution.se
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
	'PHPSHOP_BROWSE_LBL' => 'Bl�ddra',
	'PHPSHOP_FLYPAGE_LBL' => 'Produktuppgifter',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => '�ndra denna produkt',
	'PHPSHOP_DOWNLOADS_START' => 'Starta Nedladdning',
	'PHPSHOP_DOWNLOADS_INFO' => 'Ange det Nedladdnings-ID du f�tt via epost och klicka p� \'Starta Nedladdning\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Ange din epostadress nedan f�r att f� meddelande n�r denna produkt �ter finns i lager. 
		Vi kommer inte att vidarebefordra, hyra ut eller s�lja denna adress. Den kommer endast att anv�ndas f�r meddelanden om lagerstatus.<br /><br />Tack s� mycket!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Tack f�r att du v�ntar! <br />Du f�r meddelande s� snart vi gjort inventering.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Meddela mig!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'S�k alla Kategorier',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'S�k all produktinformation',
	'PHPSHOP_SEARCH_PRODNAME' => 'Endast Produktnamn',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Endast Tillverkare/�terf�rs�ljare',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Endast produktbeskrivning',
	'PHPSHOP_SEARCH_AND' => 'och',
	'PHPSHOP_SEARCH_NOT' => 'inte',
	'PHPSHOP_SEARCH_TEXT1' => 'I den f�rsta rullgardinslistan kan du begr�nsa din s�kning till en kategori. 
        I den andra rullgardinslistan kan du s�ka en s�rskild produktinformation (ex. Namn). 
        N�r du gjort detta (eller l�mnat ALLA som standard), kan du ange ett s�kord. ',
	'PHPSHOP_SEARCH_TEXT2' => ' Du kan ytterligare f�rfina din s�kning genom att ange ett andra s�kord och v�lja OCH eller INTE. 
        V�lja OCH inneb�r att b�da s�korden m�ste finnas i produkten f�r att den skall visas. 
        V�lja INTE inneb�r att endast det f�rsta skall finnas och inte det andra.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Forts�tt handla',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Tillg�ngliga bilder f�r',
	'PHPSHOP_BACK_TO_DETAILS' => 'Tillbaka till Produktuppgifterna',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Bilden ej funnen!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'S�ka efter produkter med tekniska parametrar?<BR>Du kan anv�nda f�rberedda formul�r:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Ledsen. Det finns ingen kategori att s�ka.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Ledsen. Det finns inga publicerade produktertyper med detta namn.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Liknar',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Liknar INTE',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'FulltextS�kning',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Alla markerade',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'N�gon markerad',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => '�terst�ll formul�r',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Ledsen. Produkten du fr�gat efter kunde inte hittas!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Antal {unit} i f�rpackning:',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Antal {unit} i kartong:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Pris per enhet',
	'VM_PRODUCT_ENQUIRY_LBL' => 'St�ll en fr�ga om denna produkt',
	'VM_RECOMMEND_FORM_LBL' => 'Rekommendera denna produkt till en v�n',
	'PHPSHOP_EMPTY_YOUR_CART' => 'T�m korgen',
	'VM_RETURN_TO_PRODUCT' => '�terv�nd till produkt',
	'EMPTY_CATEGORY' => 'Denna kategori har inga varor nu.',
	'ENQUIRY' => 'F�rfr�gan',
	'NAME_PROMPT' => 'Ange ditt namn',
	'EMAIL_PROMPT' => 'Epostadress',
	'MESSAGE_PROMPT' => 'Skriv ett meddelande',
	'SEND_BUTTON' => 'Skicka',
	'THANK_MESSAGE' => 'Tack f�r din f�rfr�gan. Vi kommer att kontakta dig snarast m�jligt.',
	'PROMPT_CLOSE' => 'St�ng',
	'VM_RECOVER_CART_REPLACE' => 'Ers�tt varukorg med sparad korg',
	'VM_RECOVER_CART_MERGE' => 'L�gg sparad varukorg till aktuell korg',
	'VM_RECOVER_CART_DELETE' => 'Ta bort sparad varukorg',
	'VM_EMPTY_YOUR_CART_TIP' => 'T�m varukorgen',
	'VM_SAVED_CART_TITLE' => 'Sparad Varukorg',
	'VM_SAVED_CART_RETURN' => 'Tillbaka'
); $VM_LANG->initModule( 'shop', $langvars );
?>
