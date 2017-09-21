<?php
define('PATH', 'c:/xampp/htdocs/AdminLTE/');

spl_autoload_register(function ($className) {
	$class = str_replace("\\", "/", $className . '.php');
	if (file_exists(PATH . $class)) {
		include_once (PATH . $class);
	}
});
