<?php

defined('IN_SYS') or exit('Access Denied');


function load() {
	static $loader;
	if(empty($loader)) {
		$loader = new Loader();
	}
	return $loader;
}


class Loader {
	
	private $cache = array();
	
	function func($name) {
		global $_W;
		if (isset($this->cache['func'][$name])) {
			return true;
		}
		$file = CORE_PATH . '/function/' . $name . '.func.php';
		if (file_exists($file)) {
			include $file;
			$this->cache['func'][$name] = true;
			return true;
		} else {
			trigger_error('Load Function ERROR:' . $name, E_USER_ERROR);
			return false;
		}
	}
	
	function model($name) {
		global $_W;
		if (isset($this->cache['model'][$name])) {
			return true;
		}
		$file = CORE_PATH . '/model/' . $name . '.mod.php';
		if (file_exists($file)) {
			include $file;
			$this->cache['model'][$name] = true;
			return true;
		} else {
			trigger_error('Load Model ERROR:' . $name, E_USER_ERROR);
			return false;
		}
	}
	
	function classes($name, $dir = '') {
		global $_W;
		if (isset($this->cache['class'][$name])) {
			return true;
		}
		if($dir != '') {
			$file = CORE_PATH . '/class/' . $dir . '/' . $name . '.class.php';
		}else{
			$file = CORE_PATH . '/class/' . $name . '.class.php';
		}
		if (file_exists($file)) {
			include $file;
			$this->cache['class'][$name] = true;
			return true;
		} else {
			trigger_error('Load Class ERROR:' . $name, E_USER_ERROR);
			return false;
		}
	}
}
