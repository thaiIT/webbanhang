<?php

namespace App\Controller;

if (!defined('APP_PATH_ROOT')) {
	die('Can not access');
}

Class IndexController 
{
	public function index() 
	{
		echo __CLASS__;
	}
}