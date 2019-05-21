<?php

const APP_PATH_ROOT = 'index.php';

const NAME_SPACE_CONTROLLER = 'app\controller\\';

if(file_exists('route/web.php')) {
	require_once 'route/web.php';
	// nhung web.php 
} else {
	echo "updating ....";
}