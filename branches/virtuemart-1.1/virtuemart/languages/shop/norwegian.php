<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version $Id: norwegian.php 458 2008-08-05 10:47:28Z rued $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* Translation is based on old language file for VM 1.0.
* New translation and cleanup for v1.1 by Odd-Eirik Eriksen (abc@abc-konsult.no) and Rune Rasmussen (syntaxerror.no).
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
	'PHPSHOP_BROWSE_LBL' => 'Oversikt',
	'PHPSHOP_FLYPAGE_LBL' => 'Produktdetaljer',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Endre dette produktet',
	'PHPSHOP_DOWNLOADS_START' => 'Start nedlasting',
	'PHPSHOP_DOWNLOADS_INFO' => 'Venligst skriv inn nedlastings-ID\'en du fikk per e-post. Deretter trykker du \'Start nedlasting\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Venligst skriv inn e-postadresse for å få beskjed når dette produktet er på lager igjen.',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Takk for at du venter! <br />Vi vil gi deg beskjed så snart vi får ny vare på lager.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Gi meg melding!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Velg alle kategorier',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Søk i all produktinfo',
	'PHPSHOP_SEARCH_PRODNAME' => 'Kun produktnavn',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Kun produsent/leverandør',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Kun produktbeskrivelse',
	'PHPSHOP_SEARCH_AND' => 'og',
	'PHPSHOP_SEARCH_NOT' => 'ikke',
	'PHPSHOP_SEARCH_TEXT1' => 'Første drop-down-liste lar deg begrense søket til en kategori.',
	'PHPSHOP_SEARCH_TEXT2' => 'Du kan videre legge til et nøkkelord  og velg deretter OG eller IKKE.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Handle mer',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Tilgjengelige bilder for',
	'PHPSHOP_BACK_TO_DETAILS' => 'Tilbake til produktdetaljer',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Kan ikke finne bildet!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Vil du finne produkter etter tekniske parameter?<br />Du kan bruke et forhåndslaget skjema:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Beklager, det er ingen kategori for søket.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Beklager, det er ingen publisert produkttype med dette navnet.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Er lik',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Er ikke lik',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Fulltekstsøk',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Alle valgte',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'En av de valgte',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Nullstill',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Beklager, kan ikke finne produktet du søker!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Antall {unit} per pakken:',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Antall {unit} per boks:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Pris',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Send spørsmål om dette produktet',
	'VM_RECOMMEND_FORM_LBL' => 'Anbefal dette produktet til en venn',
	'PHPSHOP_EMPTY_YOUR_CART' => 'Tøm handlekurv',
	'VM_RETURN_TO_PRODUCT' => 'Tilbake til produkt',
	'EMPTY_CATEGORY' => 'Kategorien er for øyeblikket tom.',
	'ENQUIRY' => 'Henvendelse',
	'NAME_PROMPT' => 'Ditt navn',
	'EMAIL_PROMPT' => 'E-postadresse',
	'MESSAGE_PROMPT' => 'Din melding',
	'SEND_BUTTON' => 'Send',
	'THANK_MESSAGE' => 'Takk for din henvendelse, vi vil kontakte deg så snart som mulig.',
	'PROMPT_CLOSE' => 'Lukk',
	'VM_RECOVER_CART_REPLACE' => 'Erstatt med lagret handlekurv',
	'VM_RECOVER_CART_MERGE' => 'Slå sammen med lagret handlekurv.',
	'VM_RECOVER_CART_DELETE' => 'Slett lagret handlekurv.',
	'VM_EMPTY_YOUR_CART_TIP' => 'Fjern alt innhold fra handlekurv.'
); $VM_LANG->initModule( 'shop', $langvars );
?>
