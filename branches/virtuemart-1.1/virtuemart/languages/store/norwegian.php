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
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Fornavn',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Etternavn',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Mellomnavn',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Firmanavn',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Adresse 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Adresse 2',
	'PHPSHOP_USER_FORM_CITY' => 'Poststed',
	'PHPSHOP_USER_FORM_STATE' => 'Fylke',
	'PHPSHOP_USER_FORM_ZIP' => 'Postnummer',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Land',
	'PHPSHOP_USER_FORM_PHONE' => 'Telefon',
	'PHPSHOP_USER_FORM_PHONE2' => 'Mobil',
	'PHPSHOP_USER_FORM_FAX' => 'Faks',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Aktive',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Konfigurer leveringsmåte',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Stort bilde',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Last opp bilde',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Butikknavn',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Butikknavn',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Adresse 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Adresse 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Poststed',
	'PHPSHOP_STORE_FORM_STATE' => 'Fylke',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'Land',
	'PHPSHOP_STORE_FORM_ZIP' => 'Postnr.',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Valuta',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Etternavn',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Fornavn',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Mellomnavn',
	'PHPSHOP_STORE_FORM_TITLE' => 'Tittel',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Telefon 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Telefon 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Beskrivelse',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Betalingsmåter',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Navn',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Kode',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Kundegruppe',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Betalingstype',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Skjema betalingsmåter',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Navn betalingsmåte',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Kundegruppe',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Rabatt',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Kode',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Vis bestillinger',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Type betalingsmåte',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Kredittkort',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Bruk betalingssystem',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Bankoverføring',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Kun adresse',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Statistikk',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Kunder',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'Aktive produkter',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'Inaktive produkter',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Nye ordrer',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Nye kunder',
	'PHPSHOP_CREDITCARD_NAME' => 'Kredittkortnavn',
	'PHPSHOP_CREDITCARD_CODE' => 'Kredittkortkode',
	'PHPSHOP_YOUR_STORE' => 'Din butikk',
	'PHPSHOP_CONTROL_PANEL' => 'Kontrollpanel',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Vis/endre passord/transaksjonsnøkkel',
	'PHPSHOP_TYPE_PASSWORD' => 'Skriv ditt passord her',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Gjeldende transaksjonsnøkkel',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'Transaksjonsnøklene ble endret.',
	'VM_PAYMENT_CLASS_NAME' => 'Klassenavn for betalingsvalg',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(f.eks. <strong>ps_netbanx</strong>) :<br />
Standard: ps_payment<br />
<i>La stå tom om du ikke er sikker på hva som skal inn her!</i>',
	'VM_PAYMENT_EXTRAINFO' => 'Ekstra betalingsinformasjon',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'Vises på ordrebekreftelsessiden. Kan være: HTML-kode fra din leverandør av betalingsløsning, informasjon til kunden osv.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Godkjente kredittkort',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'Rabatten kan omgjøres til et gebyr ved å bruke en negativ verdi (eksempel: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Maksimalt rabattbeløp',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Minimum rabattbeløp',
	'VM_PAYMENT_FORM_FORMBASED' => 'HTML-skjemabasert (f.eks. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Order Export Module List',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Navn',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Beskrivelse',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'Liste over godkjente valutaer',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'Denne listen definerer hvilke valutaer som kan brukes til betaling i din nettbutikk. <strong>Merk:</strong> Alle valgte valutaer kan brukes ved betaling! Om du ikke vil godta flere valutaer velger du kun norske kroner (forhåndsvalgt).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Export Module Form',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Export Module Name',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Beskrivelse',
	'VM_EXPORT_CLASS_NAME' => 'Export Class Name',
	'VM_EXPORT_CLASS_NAME_TIP' => '(e.g. <strong>ps_orders_csv</strong>) :<br /> default: ps_xmlexport<br /> <i>Leave blank if you\'re not sure what to fill in!</i>',
	'VM_EXPORT_CONFIG' => 'Export Extra Configuration',
	'VM_EXPORT_CONFIG_TIP' => 'Define Export configuration for user-defined export modules or define additional configuration. Code must be valid PHP-Code.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Navn',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Versjon',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Skrevet av',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Format for butikkadresse',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'Du kan bruke følgende plassholdere her',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Butikkens datoformat',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Feil: ID for betalingsmetode ble ikke angitt.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Konfigurer forsendelsesmodul',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Could not instantiate Class {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>
