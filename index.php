<?php /* Index project file */
session_start();
require_once("/configs/config.php");

$app = new App();
$app->debug = true;
$app->run();

?>