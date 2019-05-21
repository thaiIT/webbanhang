<?php

namespace webbanhang\Bootstrap;

if (!defined('APP_PATH_ROOT')) {
	die('Can not access');
}

class Autoload 
{
	public function __construct() {
		spl_autoload_register(array($this, '_autoload'));
	}

	public function _autoload($className) {
		$className = str_replace("\\", "/", trim($className,"\\")).'.php';
		require_once $className;
	}
}
