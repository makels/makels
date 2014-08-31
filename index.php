<?php /* Index project file */

// error_reporting(E_ALL);
// ini_set('display_errors', true);
// ini_set('error_reporting',  E_ALL);
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');

session_start();

$url = strtok($_SERVER["REQUEST_URI"],'?');
$path_arr = explode("/", $url);

define("ABS", $_SERVER["DOCUMENT_ROOT"]);

require_once(ABS."/configs/config.php");
$count = extract($_REQUEST, EXTR_PREFIX_ALL, "req");
switch (next($path_arr)) {
	case 'api':
		$api = new Api();
		$result = $api->execute(next($path_arr));
		echo json_encode($result);
		exit;
		break;
	
	default:
		$app = new App();
		$app->debug = true;
		$app->run();
		break;
}

?>