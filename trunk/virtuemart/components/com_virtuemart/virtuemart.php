<?php
if( !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
*
* @version $Id$
* @package VirtueMart
* @subpackage core
* @author Max Milbers
* @copyright Copyright (C) 2009-22 by the authors of the VirtueMart Team listed at /administrator/com_virtuemart/copyright.php - All rights reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/

/* Require the config */

if (!class_exists( 'VmConfig' )) require(JPATH_ROOT .'/administrator/components/com_virtuemart/helpers/config.php');

VmConfig::loadConfig();
vRequest::setRouterVars();

vmRam('Start');
//vmTime('joomla start until Vm is called','joomlaStart');
vmSetStartTime('vmStart');

vmLanguage::loadJLang('com_virtuemart', true);

//$_controller = vRequest::getCmd('view', vRequest::getCmd('controller', 'category')) ;
$_controller = vRequest::getCmd('view', false) ;    //Old legacy, that 'view' is priorised


$task = vRequest::getCmd('task','') ;

vmdebug('Controller and Task in main controller',$_controller, $task);

$trigger = 'onVmSiteController';
// 	$task = vRequest::getCmd('task',vRequest::getCmd('layout',$_controller) );		$this makes trouble!


$session = JFactory::getSession();
$manage = vRequest::getCmd('manage',$session->get('manage', false,'vm'));
if(!$manage) $session->set('manage', 0,'vm');

$feViews = array('askquestion','cart','invoice','pdf','pluginresponse','productdetails','recommend','vendor','vmplg');
$app = JFactory::getApplication();
if($manage and $task!='feed' and !in_array($_controller,$feViews)){

	if	( shopFunctionsF::isFEmanager() ) {
		vmdebug('I am a FE-Manager');
		$session->set('manage', 1,'vm');
		vRequest::setVar('manage','1');
		vRequest::setVar('tmpl','component') ;

		//vmLanguage::loadJLang('com_virtuemart');
		$jlang = vmLanguage::getLanguage();
		$tag = $jlang->getTag();
		$jlang->load('', JPATH_ADMINISTRATOR,$tag,true);
		vmLanguage::loadJLang('com_virtuemart');
		$basePath = VMPATH_ADMIN;
		$trigger = 'onVmAdminController';


		vmJsApi::jQuery(false);
		vmJsApi::loadBECSS();

		if(JVM_VERSION<4){
			$router = $app->getRouter();
			$router->setMode(0);
		}


		if(empty($_controller)){
			$_controller = vRequest::getCmd('controller', 'virtuemart');
			vRequest::setVar('view',$_controller);
		}
	} else {
		$session->set('manage', 0,'vm');
		vRequest::setVar('manage',0);
		$basePath = VMPATH_SITE;
		$app->redirect('index.php?option=com_virtuemart', vmText::_('COM_VIRTUEMART_RESTRICTED_ACCESS') );
	}

} else{

	if(empty($_controller)){
		$_controller = vRequest::getCmd('controller', 'category');
		vRequest::setVar('view',$_controller);
	}
	vmJsApi::jQuery();
	vmJsApi::jSite();
	vmJsApi::cssSite();
	$basePath = VMPATH_SITE;
}


// controller alias
if ($_controller=='pluginresponse') {
	$_controller='vmplg';
}
/* Create the controller name */
$_class = 'VirtuemartController'.ucfirst($_controller);

if (file_exists($basePath.'/controllers/'.$_controller.'.php')) {
	if (!class_exists($_class)) {
		require ($basePath.'/controllers/'.$_controller.'.php');
	}
}
else {
	// try plugins
	JPluginHelper::importPlugin('vmextended');
	$rets = vDispatcher::trigger($trigger, array($_controller));

	foreach($rets as $ret){
		if($ret) return true;
	}
	vmError('Tried to load controller '.$_controller.' on base path '.$basePath.'. No File available '.$_class);
}


if (class_exists($_class)) {
    $controller = new $_class();

    $controller->execute($task);

    //vmTime($_class.' Finished task '.$task,'Start');
    vmRam('End');
    vmRamPeak('Peak');
	vmTime('"'.$_class.'" Finished task '.$task.' in '.$basePath,'vmStart');
    /* Redirect if set by the controller */
    $controller->redirect();
} else {
    vmDebug('VirtueMart controller not found: '. $_class);
    if (VmConfig::get('handle_404',1)) {
		header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
		$basePath = VMPATH_SITE;
		if (file_exists($basePath.'/controllers/category.php')) {
			if (!class_exists($_class)) {
				require ($basePath.'/controllers/category.php');
			}
		}
		$controller = new VirtueMartControllerCategory();
		$controller->execute($task);
		$controller->redirect();

    } else {
		throw new RuntimeException(sprintf('VirtueMart controller not found `%s`.', $_class), 404);
    }
}
