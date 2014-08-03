<?php
/*
	Debug configuration
*/
global $app;

if($app->debug) {
	error_reporting(E_ALL);
	ini_set('display_errors', true);
	ini_set('error_reporting',  E_ALL);
}

?>