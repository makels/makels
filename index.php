<?php /* Index project file */
session_start();
require_once("/configs/config.php");

error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('error_reporting',  E_ALL);
echo("OK");
$app = new App();
$app->debug = true;
$app->run();

?>