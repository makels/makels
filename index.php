<?php /* Index project file */
session_start();
define("ABS", $_SERVER["DOCUMENT_ROOT"]);
require_once(ABS."/configs/config.php");

$app = new App();
$app->debug = true;
$app->run();

?>