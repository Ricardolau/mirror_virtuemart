<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : swedish.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
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
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'F�rnamn',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Efternamn',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Mellannamn',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'F�retagsnamn',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Adress 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Adress 2',
	'PHPSHOP_USER_FORM_CITY' => 'Ort',
	'PHPSHOP_USER_FORM_STATE' => 'Stat/Provins/Region',
	'PHPSHOP_USER_FORM_ZIP' => 'Postnummer',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Land',
	'PHPSHOP_USER_FORM_PHONE' => 'Telefon',
	'PHPSHOP_USER_FORM_PHONE2' => 'Mobil',
	'PHPSHOP_USER_FORM_FAX' => 'Fax',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Aktiv',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Inst�llning leveransmetod',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Bild',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Ladda upp bild',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Butiksnamn',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Butikens f�retagsnamn',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Adress 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Adress 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Ort',
	'PHPSHOP_STORE_FORM_STATE' => 'Stat/Provins/Region',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'Land',
	'PHPSHOP_STORE_FORM_ZIP' => 'Postnummer',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Valuta',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Efternamn',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'F�rnamn',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Mellannamn',
	'PHPSHOP_STORE_FORM_TITLE' => 'Titel',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Telefon 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Telefon 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Beskrivning',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Betalningsmetoder',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Namn',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Kod',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Kundgrupp',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Betalningsmetodtyp',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Formul�r Betalningsmetod',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Namn Betalningsmetod',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Kundgrupp',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Rabatt',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Kod',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Sortering',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Betalningsmetodtyp',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Kreditkort',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Anv�nd betalningsprocessor',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Bankdebitering',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Endast adress / Postf�rskott',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Statistik',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Kunder',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'aktiva Produkter',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'inaktiva Produkter',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Nya Ordrar',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Nya Kunder',
	'PHPSHOP_CREDITCARD_NAME' => 'Krditkortsnamn',
	'PHPSHOP_CREDITCARD_CODE' => 'Kreditkort - Kortkod',
	'PHPSHOP_YOUR_STORE' => 'Din Butik',
	'PHPSHOP_CONTROL_PANEL' => 'Kontrollpanel',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Visa/�ndra L�senord/Transaktionsnyckel',
	'PHPSHOP_TYPE_PASSWORD' => 'Ange ditt l�senord',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Aktuell Transaktionsnyckel',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'Tranaktionsnyckeln �r �ndrad.',
	'VM_PAYMENT_CLASS_NAME' => 'Betalningsklassens namn',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(ex. <strong>ps_netbanx</strong>) :<br />
		default: ps_payment<br />
		<em>V�lj ps_payment om du inte vet vaddu skall v�lja!</em>',
	'VM_PAYMENT_EXTRAINFO' => 'Extra Betalningsinformation',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'Visas p� sidan med orderbekr�ftelsen. Kan vara: HTML Form Code fr�n din Betalningsleverant�r, Tips till kunden etc.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Accepterade Kreditkort',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'F�r att �ndra rabbaten till en kostnad kan du anv�nda negativa v�rden h�r (Exempel: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Maximalt rabattv�rde',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Minsta rabattv�rde',
	'VM_PAYMENT_FORM_FORMBASED' => 'HTML-Form baserad (ex. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Exportmoduler',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Namn',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Beskrivning',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'Accepterade vautor',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'Denna lista definierar alla valutor som accepteras vid betalning i denna butik. <strong>OBS!:</strong> Alla valutor som v�ljs h�r kan anv�ndas vid utcheckningen! Om du inte vill det s� v�l ditt lands valuta (=default).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Forml�r Exportmodul',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Exportmodulnamn',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Beskrivning',
	'VM_EXPORT_CLASS_NAME' => 'ExportKlassnamn',
	'VM_EXPORT_CLASS_NAME_TIP' => '(ex. <strong>ps_orders_csv</strong>) :<br /> default: ps_xmlexport<br /> <i>L�mna tomt om du inte vet vad som skall fyllas i!</i>',
	'VM_EXPORT_CONFIG' => 'Export Extra inst�llningar',
	'VM_EXPORT_CONFIG_TIP' => 'Skapa Exportinst�llningar f�r anv�ndardefinerade exportmoduler eller ange extra inst�llningar. Koden m�ste vara gilitig PHP-kod.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Namn',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Version',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'F�rfattare',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Butikens adressformat',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'Du kan anv�nda f�ljande platsh�llare h�r',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Butikens datumformat',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'FEL!: Betalningsmetodens ID inte angiven.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Inst�llningar Fraktmodul',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Kunde inte instantiera Klassen {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>
