<?php

/*
	Main application
*/

class App {

	public $smarty = null;

	public function __construct() {
		$this->smarty = new Smarty();
		$this->smarty->template_dir = SMARTY_TEMPLATES;
    $this->smarty->compile_dir  = SMARTY_COMPILES;
    $this->smarty->config_dir   = SMARTY_CONFIGS;
    $this->smarty->cache_dir    = SMARTY_CACHE;
    $this->smarty->caching = false;
	}

	// Run application
	public function run() {
		// TODO: Execute all modules
		$this->initEnvironment();
		$this->smarty->display(SMARTY_TEMPLATES."/index.tpl");
	}

	// Environment initialization
	public function initEnvironment() {

		$smarty_vars = array(
			"script_url" => THEME."/js",
			"style_url" => THEME."/css",
			"images_url" => THEME."/images",
		);

		$this->smarty->assign("smarty_var", $smarty_vars);
	}

}

?>