<?php
/**
 * Basic model for VMF (VirtueMart Frame)
 * @package 	VirtueMart Frame
 * @author		Max Milbers
 * @copyright 	Copyright (C) 2015 VirtueMart Team and the authors. All rights reserved.
 * @license 	LGPL Lesser General Public License version 2, or later see LICENSE.txt
 * @version 	$Id: about.php 2641 2010-11-09 19:25:13Z milbo $
 */

if(!interface_exists('vIObject'))
	require(VMPATH_ADMIN .'/vmf/vinterfaces.php');

if(!class_exists('vObject')) require(VMPATH_ADMIN .'/vmf/vobject.php');
if(!class_exists('vRequest')) require(VMPATH_ADMIN .'/helpers/vrequest.php');
if(!class_exists('vPath')) require(VMPATH_ADMIN .'/vmf/filesystem/vpath.php');

abstract class vBasicModel extends vObject implements vILoadable, vICacheable{

	protected $_cache = array();
	/**
	 * The event to trigger when cleaning cache.
	 *
	 * @var      string
	 * @since    11.1
	 */
	protected $event_clean_cache = null;

	public function __construct($cidName='cid', $config=array()){

		$this->_name = $this->getName();

		$this->state = new vObject;

		$this->event_clean_cache = 'onContentCleanCache';

		$this->_cidName = $cidName;

	}

	protected static $_loadedClasses = array();

	public static function getInstance($type, $prefix = '', $config = array(), $new = true) {

		vmSetStartTime('getInstance');
		$type = preg_replace('/[^A-Z0-9_\.-]/i', '', $type);
		$type = strtolower($type);
		$class = $prefix . ucfirst($type);

		if (self::loader($type, $prefix,$class)){
			if($new or !isset(self::$_loadedClasses[$class])){
				if($prefix=='Table'){
					self::$_loadedClasses[$class] = new $class(vFactory::$_db);
				} else {
					self::$_loadedClasses[$class] = new $class($config);
				}
				//vmTime('getInstance '.(int)$single.' '.$prefix.' '.$type,'getInstance');
			}

			return self::$_loadedClasses[$class];
		} else {
			vmWarn(vmText::sprintf('JLIB_APPLICATION_ERROR_MODELCLASS_NOT_FOUND', $class));
			return false;
		}
	}

	public static function loader($type, $prefix, $class){

		if (!class_exists($class)){
			$filename = $type . '.php';
			//foreach(self::$_paths[$prefix] as $p) {
				//vmdebug('Testing for '.$p.DS.$filename);
				if($pf = vPath::find(self::$_paths[$prefix],$filename)){
					require $pf;
					if (class_exists($class)) return true;
				}
			//}
		} else {
			return true;
		}
		VmConfig::$echoDebug = 1;
		vmdebug('loader file not found '.$pf,self::$_paths[$prefix]);
		return false;
	}

	/**
	 * Add a directory where vModel should search for ...
	 */
	static $_paths = array();
	public static function addIncludePath($path, $prefix = '') {

		if (empty($path)){
			vmError('empty path in addIncludePath','empty path in addIncludePath');
			return false;
		}
		if(empty($prefix)){
			VmConfig::$echoDebug=1;
			vmTrace('addIncludePath empty $prefix');
		}
		if (!isset(self::$_paths[$prefix])) self::$_paths[$prefix] = array();
		$path = vRequest::filterPath($path);
		if (!in_array($path, self::$_paths[$prefix])) {
			array_unshift(self::$_paths[$prefix], $path);
		}

		return self::$_paths[$prefix];
	}


	public function emptyCache(){
		$this->_cache = array();
	}

}