<?php

/**
 *
 * @author Valérie Isaksen
 * @version $Id:
 * @package VirtueMart
 * @subpackage payment
 * @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
 *
 * http://virtuemart.org
 */
// Check to ensure this file is within the rest of the framework
defined('JPATH_BASE') or die();

/**
 * Fetches pclasses
 *
 */
if (!class_exists('Klarna'))
    require (JPATH_VMKLARNAPLUGIN . DS . 'klarna' . DS . 'api' . DS . 'klarna.php');
if (!class_exists('klarna_virtuemart'))
    require (JPATH_VMKLARNAPLUGIN . DS . 'klarna' . DS . 'helpers' . DS . 'klarna_virtuemart.php');
if (!class_exists('KlarnaHandler'))
    require (JPATH_VMKLARNAPLUGIN . DS . 'klarna' . DS . 'helpers' . DS . 'klarnahandler.php');
if (!class_exists('vmPSPlugin'))
    require(JPATH_VM_PLUGINS . DS . 'vmpsplugin.php');

class JElementKlarnaPclasses extends JElement {

    /**
     * Element name
     *
     * @access       protected
     * @var          string
     */
    var $_name = 'KlarnaPclasses';

    function fetchElement($name, $value, &$node, $control_name) {
//return;
//TODO SELFCALL AJAX
	// Base name of the HTML control.
	$ctrl = $control_name . '[' . $name . ']';


	$html = '  <fieldset id="klarna_pclasses" class="klarna">
            <legend id="pclass_field">PClasses <span id="arrow"><img src="' . JURI::root() . VMKLARNAPLUGINWEBROOT .'klarna/assets/images/expand_arrow.png" /></span></legend>
            <div id="pclasses">';

	$total = 0;
		$handler = new KlarnaHandler ;
		// call klarna server for pClasses
		$methodid = jrequest::getInt('methodid');
		if (!class_exists( 'VmModel' )) require(JPATH_VM_ADMINISTRATOR.DS.'helpers'.DS.'vmmodel.php');
		$model = VmModel::getModel('paymentmethod');
		$payment = $model->getPayment();
		if (!class_exists( 'vmParameters' )) require(JPATH_VM_ADMINISTRATOR.DS.'helpers'.DS.'parameterparser.php');
		$parameters = new vmParameters($payment,  $payment->payment_element , 'plugin' ,'vmpayment');
		$data = $parameters->getParamByName('data');
	$eid_array = KlarnaHandler::getEidSecretArray($data);
	foreach ($eid_array as $country => $eid_data) {
	    try {
		$klarna = new Klarna_virtuemart();
		$klarna->config($eid_data['eid'], $eid_data['secret'], null, null, null, $data->klarna_mode, $data->klarna_pc_type, $data->klarna_pc_uri, ($data->klarna_mode=='klarna_live'));
		$klarna->setCountry($country);
		$pclasses = $klarna->getPClasses();
		$total = $total + count($pclasses);
		if (!count($pclasses) == 0) {

		    $html .='<table class="klarna_pclasses">
                                <thead class="klarna_pclasses_header">
                                    <td class="pclass_id">id</td>
                                    <td class="pclass_description">description</td>
                                    <td class="pclass_number">months</td>
                                    <td class="pclass_number">interest</td>
                                    <td class="pclass_number">handling fee</td>
                                    <td class="pclass_number">start fee</td>
                                    <td class="pclass_number">min amount</td>
                                    <td class="pclass_flag">country</td>
                                </thead>
                            <tbody class="klarna_pclasses_body">';

		    foreach ($klarna->getPClasses() as $pclass) {

			$html .='  <tr>
                                    <td class="pclass_id">' . $pclass->getId() . '</td>
                                    <td class="pclass_description">' . $pclass->getDescription() . '</td>
                                    <td class="pclass_number"><' . $pclass->getMonths() . '</td>
                                    <td class="pclass_number">' . $pclass->getInterestRate() . "%" . '</td>
                                    <td class="pclass_number">' . $pclass->getInvoiceFee() . " " . KlarnaHandler::getCurrencySymbolForCountry($data, $klarna->getCountryCode()) . '</td>
                                    <td class="pclass_number">' . $pclass->getStartFee() . " " . KlarnaHandler::getCurrencySymbolForCountry($data, $klarna->getCountryCode()) . '</td>
                                    <td class="pclass_number">' . $pclass->getMinAmount() . " " . KlarnaHandler::getCurrencySymbolForCountry($data, $klarna->getCountryCode()) . '</td>
                                    <td class="pclass_flag"><img src="'. JURI::root() . VMKLARNAPLUGINWEBROOT . '/klarna/assets/images/share/flags/'. $klarna->getLanguageCode() . '.png" /></td>
                                </tr>';
		    }

		    $html .=' </tbody>
                        </table>';
		}
	    } catch (Exception $e) {
		echo $e;
	    }
	}
	$cid = jrequest::getvar('cid',null,'array');
	if (is_Array($cid)) $vmMethoId = $cid[0];
	else $vmMethoId = $cid;
	$pclassesLink = JURI::root().'administrator/index.php?option=com_virtuemart&view=plugin&type=vmpayment&name=klarna&call=getPclasses&cid='.(int)$vmMethoId;

	if ($total == 0) {

	    $html .='<span class="no_pclasses">No pclasses in database. <a href="' . $pclassesLink . '>Fetch PClasses</a></span>';
	}

	$html .= '</div>
                  </fieldset>
        <span class="update_pclasses">
            <a class="button_klarna" href="' . $pclassesLink . '">Update PClasses</a>
        </span><span id="pclasses_update_msg"></span>
        <div class="clear"></div>';
	$document = &JFactory::getDocument();
	$document->addScriptDeclaration('
		jQuery(function($) {
			$(".update_pclasses a").click( function(e){
				e.preventDefault();
				form = $(this).parents("form") ;

				var datas = $(this).parents("form").serializeArray();
				
				datas.push({"name":"view","value":"plugin"});
				datas.push({"name":"name","value":"klarna"});
				datas.push({"name":"task","value":"plugin"});
				var link = $(this).attr("href");
				$("#pclasses_update_msg").load(link+" #PClassesSuccessResult",datas,function() {
					
				});
				return false;
			});
		});
	');
	
	return $html;
    }

}