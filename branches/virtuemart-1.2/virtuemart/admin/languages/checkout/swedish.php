<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
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
	'PHPSHOP_NO_CUSTOMER' => 'Du �r inte en registrerad anv�ndare. V�nligen fyll i dina uppgifter.',
	'PHPSHOP_THANKYOU' => 'Tack f�r din best�llning!',
	'PHPSHOP_EMAIL_SENDTO' => 'En orderbekr�ftelse har skickats till',
	'PHPSHOP_CHECKOUT_NEXT' => 'N�sta',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'Fakturainformation',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'F�retag',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'Namn',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'Adress',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'E-post',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'Leveransinformation',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'F�retag',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'Namn',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'Adress',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'Telefon',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'Fax',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'Betalningsmetod',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'Information som beh�vs n�r betalning via kreditkort �r valt.',
	'PHPSHOP_PAYPAL_THANKYOU' => 'Tack f�r din betalning. Transaktionen klar. 
                                                                         Du kommer att f� ett bekr�ftelsemail av PayPal. 
                                                                         Du kan nu forts�tta eller logga in p� <a href=http://www.paypal.com>www.paypal.com</a> f�r att se transaktionsdetaljer.',
	'PHPSHOP_PAYPAL_ERROR' => 'Ett fel uppstod under transaktionen. Din orderstatus kunde inte uppdateras.',
	'PHPSHOP_THANKYOU_SUCCESS' => 'Ordern �r registrerad',
	'VM_CHECKOUT_TITLE_TAG' => 'Utcheckning: Steg %s av %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => 'Order-ID �r inte satt eller �r tom!',
	'VM_CHECKOUT_FAILURE' => 'Misslyckad',
	'VM_CHECKOUT_SUCCESS' => 'Klar',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'Denna sida finns p� webbutikens webbplats.',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'Betalfunktionen k�r sidan p� webbplatsen och visar resultatet SSL-krypterat.',
	'VM_CHECKOUT_CCV_CODE' => 'Kreditkortets valideringskod',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => 'Vad �r Kreditkortets valideringskod?',
	'VM_CHECKOUT_MD5_FAILED' => 'MD5-kontroll misslyckades',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'Order ej funnen',
	'VM_CHECKOUT_PBS_APPROVED_ORDERCOMMENT' => '
                Betalningen har godk�nts av PBS. \n
                Transaktionen har f�tt f�ljande transaktionsnummer:\n\n
                Transaktionsnummer: {transactionnumber}\n',
	'VM_CHECKOUT_PBS_NOTAPPROVED_ORDERCOMMENT' => '
                Betalningen har inte godk�nts av PBS. \n
                ransaktionen har f�tt f�ljande transaktionsnummer:\n\n
                Transaktionsnummer: {transactionnumber}\n',
	'VM_CHECKOUT_DD_ERROR_0' => 'Ogiltigt Handlar/f�retagsnummer',
	'VM_CHECKOUT_DD_ERROR_1' => 'Ogiltigt kreditkortsnummer',
	'VM_CHECKOUT_DD_ERROR_2' => 'Ogiltigt belopp',
	'VM_CHECKOUT_DD_ERROR_3' => 'OrderID saknas eller �r ogiltigt',
	'VM_CHECKOUT_DD_ERROR_4' => 'PBS avvisning - (Oftast - ogilitigt kortdata, sp�rrat kort, etc...)',
	'VM_CHECKOUT_DD_ERROR_5' => 'Internt serverfel hos DanDomain eller PBS',
	'VM_CHECKOUT_DD_ERROR_6' => 'E-dankort inte till�tet. Kontakta DanDomain',
	'VM_CHECKOUT_DD_ERROR_DEFAULT' => 'Systemfel',
	'VM_CHECKOUT_FP_ERROR_1' => 'FEL! Transaktionen avvisad',
	'VM_CHECKOUT_FP_ERROR_2' => 'FEL! Transaktionen avvisad',
	'VM_CHECKOUT_FP_ERROR_3' => 'FEL! fel nummerformat',
	'VM_CHECKOUT_FP_ERROR_4' => 'FEL! otill�ten transaktion',
	'VM_CHECKOUT_FP_ERROR_5' => 'FEL! inegt svar',
	'VM_CHECKOUT_FP_ERROR_6' => 'Error_system_failure',
	'VM_CHECKOUT_FP_ERROR_7' => 'FEL! Kortet f�rfallet',
	'VM_CHECKOUT_FP_ERROR_8' => 'FEL! Kommunikationsfel',
	'VM_CHECKOUT_FP_ERROR_9' => 'FEL! Internt Fel',
	'VM_CHECKOUT_FP_ERROR_10' => 'FEL! Kortet ej registrerat',
	'VM_CHECKOUT_FP_ERROR_DEFAULT' => 'FEL! Ok�nt Fel',
	'VM_CHECKOUT_WF_ERROR_1' => 'Transaktionen blev inte godk�nd',
	'VM_CHECKOUT_WF_ERROR_2' => 'M�jligt bedr�geri',
	'VM_CHECKOUT_WF_ERROR_3' => 'Kommunikationsfel',
	'VM_CHECKOUT_WF_ERROR_4' => 'Kort f�rfallet',
	'VM_CHECKOUT_WF_ERROR_5' => 'Internt fel',
	'VM_CHECKOUT_WF_ERROR_6' => 'Ingoltig Transaktion',
	'VM_CHECKOUT_WF_ERROR_7' => 'Systemfel',
	'VM_CHECKOUT_WF_ERROR_8' => 'Felaktigt f�retagsnummer',
	'VM_CHECKOUT_WF_ERROR_9' => 'Kortet finns inte',
	'VM_CHECKOUT_WF_ERROR_10' => 'Kortstr�ngen �r for kort.',
	'VM_CHECKOUT_WF_ERROR_11' => 'Transaktion kan inte genomf�ras med denna terminal',
	'VM_CHECKOUT_WF_ERROR_12' => 'Kort�garen har inte r�ttighet att genomf�ra denna transaktion.',
	'VM_CHECKOUT_WF_ERROR_13' => 'Kortnummeret finns inte',
	'VM_CHECKOUT_WF_ERROR_14' => 'Ok�nt fel',
	'PHPSHOP_EPAY_PAYMENT_CARDTYPE' => 'Betalningen �r
gjord av %s <img
src="/components/com_virtuemart/shop_image/ps_image/epay_images/%s"
border="0">'
); $VM_LANG->initModule( 'checkout', $langvars );
?>
