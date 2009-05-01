<?php

if( !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 

global $VM_LANG;

$langvars = array ( '_VM_LANG_USPS_MACHINABLE' => 'Machinable Packages?',
 '_VM_LANG_USPS_MACHINABLE_TOOLTIP' => 'Can packages be processed on the machine?',
 '_VM_LANG_USPS_QUOTE' => 'Show Delivery Days Quote?',
 '_VM_LANG_USPS_QUOTE_TOOLTIP' => 'Show Delivery Days Quote?',
 '_VM_LANG_USPS_SHIP' => 'Domestic Shipping Options',
 '_VM_LANG_USPS_PADDING_TOOLTIP' => 'Pad the shipping weight to allow weight for shipping materials',
 '_VM_LANG_USPS_SHIP0' => 'USPS Express Mail PO to PO',
 '_VM_LANG_USPS_SHIP1' => 'USPS Express Mail',
 '_VM_LANG_USPS_SHIP2' => 'USPS Express Mail Flat-Rate Envelope',
 '_VM_LANG_USPS_SHIP3' => 'USPS Priority Mail',
 '_VM_LANG_USPS_SHIP4' => 'USPS Priority Mail Flat Rate Envelope',
 '_VM_LANG_USPS_SHIP5' => 'USPS Priority Mail Flat Rate Box',
 '_VM_LANG_USPS_SHIP6' => 'USPS First-Class Mail',
 '_VM_LANG_USPS_SHIP7' => 'USPS Parcel Post',
 '_VM_LANG_USPS_SHIP8' => 'USPS Bound Printed Matter',
 '_VM_LANG_USPS_SHIP9' => 'USPS Media Mail',
 '_VM_LANG_USPS_SHIP10' => 'USPS Library Mail',
 '_VM_LANG_USPS_INTL' => 'International Shipping Options',
 '_VM_LANG_USPS_INTL0' => 'USPS Global Express Guaranteed',
 '_VM_LANG_USPS_INTL1' => 'USPS Global Express Guaranteed Non-Document Rectangular',
 '_VM_LANG_USPS_INTL2' => 'USPS Global Express Non-Rectangular',
 '_VM_LANG_USPS_INTL3' => 'USPS Express Mail International (EMS)',
 '_VM_LANG_USPS_INTL4' => 'USPS Express Mail International (EMS) Flat Rate Envelope',
 '_VM_LANG_USPS_INTL5' => 'USPS Priority Mail International',
 '_VM_LANG_USPS_INTL6' => 'USPS Priority Mail International Flat Rate Envelope',
 '_VM_LANG_USPS_INTL7' => 'USPS Priority Mail International Flat Rate Box',
 '_VM_LANG_USPS_INTL8' => 'USPS First-Class Mail International' );

//define( '_VM_LANG_USPS_INTL9' => 'Currently Not Used - Do Not Select' );

$VM_LANG->initModule( $module, $langvars );