<?php

if (!defined('APP_PATH_ROOT')) {
	die('Can not access');
}

require_once 'bootstrap/autoload.php';

new webbanhang\Bootstrap\Autoload;

$uri = $_SERVER['REQUEST_URI'];
$rootPath = $_SERVER['PHP_SELF'];
$rootFolder = dirname($rootPath);
$strParams = substr($uri, strlen($rootFolder)+1);
if($strParams) {
	$arrParams = explode('/',$strParams);
	$nameController = ucfirst($arrParams[0]); 
	if(!$nameController) {
		$nameController = "Index";
	}
	$nameMethod = ucfirst($arrParams[1]);
	if(!$nameMethod) {
		$nameMethod = "index";
	}
} else {
	$nameController = "Index";
	$nameMethod = "index";
}

$myNameSpace = "App\Controller\\";
$controller = $myNameSpace.$nameController."Controller";
$c = new $controller;
$c->$nameMethod();