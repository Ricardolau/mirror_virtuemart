<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version $Id: norwegian.php 544 2009-03-04 08:29:45Z rued $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* Translation is based on old language file for VM 1.0.
* New translation and cleanup for v1.1 by Odd-Eirik Eriksen (abc@abc-konsult.no), Rune Rasmussen (syntaxerror.no) and Preben O. Sangvik (ResponsPartner.no).
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
	'PHPSHOP_NO_CUSTOMER' => 'Du er enda ikke registrert som kunde i nettbutikken vår, du må derfor fylle inn dine kontaktopplysninger, slik at vi vet hvor varene skal sendes.',
	'PHPSHOP_THANKYOU' => 'Takk for din bestilling!<br />Vi ønsker deg en fantastisk dag, og skulle du være usikker på noe kan du når som helst kontakte oss.',
	'PHPSHOP_EMAIL_SENDTO' => 'En bekreftelse er sendt til e-postadressen du oppgav: ',
	'PHPSHOP_CHECKOUT_NEXT' => 'Neste',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'Fakturainformasjon',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'Firma',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'Navn',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'Adresse',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'E-post',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'Leveringsinformasjon',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'Firma',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'Navn',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'Adresse',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'Telefon',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'Faks',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'Betalingsmåte',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'påkrevd informasjon når kredittkort er valgt',
	'PHPSHOP_PAYPAL_THANKYOU' => 'Takk for din betaling.
        The transaction was successful. You will get a confirmation e-mail for the transaction by PayPal. 
        You can now continue or log in at <a href=http://www.paypal.com>www.paypal.com</a> to see the transaction details.',
	'PHPSHOP_PAYPAL_ERROR' => 'En feil har oppstått under betalingstransaksjonen. Statusen på din ordre kan ikke oppdateres.',
	'PHPSHOP_THANKYOU_SUCCESS' => 'Bestillingen er mottat! Takk for det.',
	'VM_CHECKOUT_TITLE_TAG' => 'Bestilling: Steg %s av %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => 'Ordre-ID er ikke angitt eller er tom!',
	'VM_CHECKOUT_FAILURE' => 'Bestillingen feilet',
	'VM_CHECKOUT_SUCCESS' => 'Bestillingen er vellykket gjennomført',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'Denne siden ligger på nettbutikkens nettsted.',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'The gateway execute the page on the website, and the shows the result SSL Encrypted.',
	'VM_CHECKOUT_CCV_CODE' => 'Credit Card Validation Code',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => 'What\'s the Credit Card Validation Code?',
	'VM_CHECKOUT_MD5_FAILED' => 'MD5 Check failed',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'Ordre ble ikke funnet',
	'PHPSHOP_EPAY_PAYMENT_CARDTYPE' => 'The payment is
created by %s <img
src="/components/com_virtuemart/shop_image/ps_image/epay_images/%s"
border="0">'
); $VM_LANG->initModule( 'checkout', $langvars );
?>
