<?php

error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('error_reporting',  E_ALL);

define("IMG_PATH", $_SERVER["DOCUMENT_ROOT"]."/themes/default/images/models/");
define("CASCADE_PATH", $_SERVER["DOCUMENT_ROOT"]."/api/opencv/cascades/haarcascades/");

if(!isset($_GET['model'] || !file_exists(IMG_PATH.$_GET['model'])) { echo("Model not found"); die; }

var_dump(face_count(IMG_PATH.$_GET['model'], CASCADE_PATH.'haarcascade_frontalface_alt.xml'));
var_dump(face_detect(IMG_PATH.$_GET['model'], CASCADE_PATH.'haarcascade_frontalface_alt.xml'));

?>