<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsFunction
 */

function smarty_function_module($params)
{
	global $app;
	if(isset($params["name"])) {
		$module = $app->getModule($params["name"]);
		if($module) {
			$module->smarty_vars = $params;
			$module->render();
		}
	}
}

?>