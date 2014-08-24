<?php

error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('error_reporting',  E_ALL);

define("IMG_PATH", $_SERVER["DOCUMENT_ROOT"]."/themes/default/images/models/");

if(!isset($_GET['model'] || !file_exists(IMG_PATH.$_GET['model'])) die("Model not found");

var_dump(face_count(IMG_PATH.$_GET['model'], 'cascade.xml'));
var_dump(face_detect(IMG_PATH.$_GET['model'], 'cascade.xml'));

?>