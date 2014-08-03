<?php /* Index project file */

require_once("/configs/config.php");

$app = new App();
$app->debug = true;
$app->run();

?>