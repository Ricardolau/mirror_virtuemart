/**
 *
 * Eway payment plugin
 *
 * @author Valérie Isaksen
 * @version $Id$
 * @package VirtueMart
 * @subpackage payment
 * ${PHING.VM.COPYRIGHT}
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
 *
 * http://virtuemart.net
 */

jQuery().ready(function ($) {

    /************/
    /* Handlers */
    /************/
    handleShowOnSandbox = function () {
        var sandbox = $('#params_sandbox').val();

        $('.showOnSandbox ').parents('.control-group').hide();

        if (sandbox==1) {
            $('.showOnSandbox').parents('.control-group').show();
        }
    }

    handleShowOnPre_Auth = function () {
        var Pre_Auth = $('#params_Pre_Auth').val();

        $('.showOnPre_Auth ').parents('.control-group').hide();

        if (Pre_Auth=='Authorisation') {
            $('.showOnPre_Auth').parents('.control-group').show();
        }
    }

    handleShowOnCapture = function () {
        var Pre_Auth = $('#params_Pre_Auth').val();

        $('.showOnCapture ').parents('.control-group').hide();

        if (Pre_Auth=='Capture') {
            $('.showOnCapture').parents('.control-group').show();
        }
    }

    handleShowOnCaptureEnabledPre_Auth= function () {
        var Pre_Auth = $('#params_Pre_Auth').val();
        var status_capture_enabled = $('#params_status_capture_enabled').val();

        $('.showOnCaptureEnabledPre_Auth ').parents('.control-group').hide();

        if (Pre_Auth=='Authorisation' && status_capture_enabled==1) {
            $('.showOnCaptureEnabledPre_Auth').parents('.control-group').show();
        }
    }

    handleShowOnCanceledEnablePre_Auth= function () {
        var Pre_Auth = $('#params_Pre_Auth').val();
        var status_canceled_enabled = $('#params_status_canceled_enabled').val();

        $('.showOnCanceledEnablePre_Auth ').parents('.control-group').hide();

        if (Pre_Auth=='Authorisation' && status_canceled_enabled==1) {
            $('.showOnCanceledEnablePre_Auth').parents('.control-group').show();
        }
    }

    handleShowOnRefundEnabled= function () {
        var status_refund_enabled = $('#params_status_refund_enabled').val();

        $('.showOnRefundEnabled ').parents('.control-group').hide();

        if ( status_refund_enabled==1) {
            $('.showOnRefundEnabled').parents('.control-group').show();
        }
    }
    /**********/
    /* Events */
    /**********/
    $('#params_sandbox').change(function () {
        handleShowOnSandbox();
    });

    $('#params_Pre_Auth').change(function () {
        handleShowOnPre_Auth();
        handleShowOnCapture();
        handleShowOnCanceledEnablePre_Auth();
        handleShowOnCaptureEnabledPre_Auth();
    });

    $('#params_status_capture_enabled').change(function () {
        handleShowOnCaptureEnabledPre_Auth();
    });

    $('#params_status_canceled_enabled').change(function () {
        handleShowOnCanceledEnablePre_Auth();
    });

    $('#params_status_refund_enabled').change(function () {
        handleShowOnRefundEnabled();
    });

    /*****************/
    /* Initial calls */
    /*****************/
    handleShowOnSandbox();
    handleShowOnPre_Auth();
    handleShowOnCapture();
    handleShowOnCaptureEnabledPre_Auth();
    handleShowOnCanceledEnablePre_Auth();
    handleShowOnRefundEnabled();

});
