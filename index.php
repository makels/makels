<?php

/*
	Index project file
*/

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('error_reporting',  E_ALL);
// End error

require_once("define.php");
require_once("includes.php");


// TODO: Сделать нормальный вывод
$app = new App();
$app->run();

?>