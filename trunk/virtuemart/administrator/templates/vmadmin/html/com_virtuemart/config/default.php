<?php
/**
 *
 * Description
 *
 * @package	VirtueMart
 * @subpackage Config
 * @author RickG
 * @link https://virtuemart.net
 * @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id: default.php 9821 2018-04-16 18:04:39Z Milbo $
 */

$document = JFactory::getDocument();
$urlTemplateHtml = JURI::root(TRUE) .'/administrator/templates/vmadmin/html';
$document->addStyleSheet($urlTemplateHtml.'/com_virtuemart/assets/styles.css');
$document->addStyleSheet($urlTemplateHtml.'/com_virtuemart/assets/style2.css');
$document->addStyleSheet($urlTemplateHtml.'/com_virtuemart/assets/menu.css');
$document->addScript($urlTemplateHtml.'/com_virtuemart/assets/script.js');
$document->addScript($urlTemplateHtml.'/com_virtuemart/assets/sidemenu.js');


$app = JFactory::getApplication();
$templatename = $app->getTemplate();

require_once($urlTemplateHtml.'/com_virtuemart/assets/helper.php');
require_once($urlTemplateHtml.'/com_virtuemart/assets/adminui.php');

JHtml::_('behavior.multiselect');
JHtml::_('formbehavior.chosen', 'select');
//JHtml::_('behavior.framework', 'mootools-more.js');
JHtml::_('behavior.tooltip');



// Check to ensure this file is included in Joomla!
defined ( '_JEXEC' ) or die ( 'Restricted access' );

vmJsApi::addJScript('/administrator/components/com_virtuemart/assets/js/jquery.coookie.js');
vmJsApi::addJScript('/administrator/components/com_virtuemart/assets/js/vm2admin.js');
AdminUIHelper_override::startAdminArea($this);
?>

<div class="nr-app nr-app-config">
    <div class="nr-row">

     
        <div class="nr-main-container"><!-- Main bar started -->
	        <div class="nr-main-header">
    	        <h2>Configuration</h2>
        	    <p>Component's Advanced Settings.</p>
            </div>
		   <div class="nr-main-content">
               <form action="index.php" method="post" name="adminForm" id="adminForm">
                <div class="form-horizontal">
                  <ul class="nav nav-tabs" id="tabTabs">
              		  <li class="active"><a href="#globaldata" data-toggle="tab">Shop</a></li>
	                  <li class=""><a href="#contenttypes" data-toggle="tab">Orders</a></li>
      	              <li class=""><a href="#integrations" data-toggle="tab">Shopfront</a></li>
                      <li class=""><a href="#advanced" data-toggle="tab">Templates</a></li>
                 	  <li class=""><a href="#pricing" data-toggle="tab">Pricing</a></li>
	                  <li class=""><a href="#checkout" data-toggle="tab">Checkout</a></li>
    	              <li class=""><a href="#porder_settings" data-toggle="tab">Product Order Settings</a></li>
 	       	          <li class=""><a href="#feeds" data-toggle="tab">Feeds</a></li>
                      <li class=""><a href="#seo_settings" data-toggle="tab">SEO</a></li>
	              </ul>
                  <div class="maincontentdiv"  style="padding:1.5%">
                      <div class="tab-content" id="tabContent">
                        <div id="globaldata" class="tab-pane active">
                             <?php include("default_shop.php")  ?>
                        </div>
                        <div id="contenttypes" class="tab-pane ">
                             <?php include("default_email.php"); ?>
                        </div>
                        <div id="integrations" class="tab-pane ">
                             <?php include("default_shopfront.php"); ?>
                        </div>
                        <div id="advanced" class="tab-pane ">
                             <?php include("default_templates.php"); ?>
                        </div>
                        <div id="pricing" class="tab-pane ">
                             <?php include("default_pricing.php"); ?>
                        </div>
                        <div id="checkout" class="tab-pane ">
                             <?php include("default_checkout.php"); ?>
                        </div>
                        <div id="porder_settings" class="tab-pane ">
                             <?php include("default_product_order.php"); ?>
                        </div>
                        <div id="feeds" class="tab-pane ">
                             <?php include("default_feeds.php"); ?>
                        </div>
                        <div id="seo_settings" class="tab-pane">
                             <?php include("default_sef.php"); ?>
                        </div>
                      </div>
                    <div style="clear:both !important; "></div>
                 </div>
                </div>
    	        
                <!-- Hidden Fields --> <input type="hidden" name="task" value="" /> <input
                    type="hidden" name="option" value="com_virtuemart" /> <input
                    type="hidden" name="view" value="config" />
                <?php
                echo JHtml::_ ( 'form.token' );
                ?>
                </form>
             </div>
          </div><!-- Main bar Ended -->
      </div>
  </div>
                <?php
//AdminUIHelper::endAdminArea ();

?>