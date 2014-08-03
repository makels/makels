<?php

/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsModifier
 */

function smarty_modifier_label($key)
{
	global $app;
	$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'ru';
	$field = "value_$lang";
	$sql = "SELECT `$field` FROM `#translate` WHERE `key`='$key'";

	$res = $app->db->query($sql);
	return count($res) > 0 ? $res[0][$field] : ""; 
}

?>