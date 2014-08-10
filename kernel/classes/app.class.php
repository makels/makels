<?php

/*
	Main application
*/

class App {

	public $lang;

	public $smarty = null;

	public $debug = false;

	public $db = null;

	public $modules = array();

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
		$this->lang = isset($_SESSION["lang"]) ? $_SESSION["lang"] : 'ru';
		$this->initDebugger();
		$this->initDatabase();
		$this->initModules();
		$this->initEnvironment();
		$this->smarty->display(SMARTY_TEMPLATES."/index.tpl");
	}

	// Debugger init
	public function initDebugger() {
		require_once(ABS.CONFIGS."/debug.php");
	}

	// Database init
	public function initDatabase() {
		$this->db = new DB();
	}

	// Modules initialization
	public function initModules() {
		$paths = scandir(ABS.MODULES, 1);
		$sql = sprintf("SELECT * FROM `#modules` WHERE `enable` = 1 ORDER BY priority");
		$res = $this->db->query($sql);
		foreach ($res as $module) {
				$mod_cfg = ABS.MODULES."/".$module['name']."/module.xml";
					if(file_exists($mod_cfg))
						$this->loadModule($module['name'], $mod_cfg);			
		}
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

	// Get module by name
	public function getModule($name) {
		foreach ($this->modules as $module) {
			if($module->name == $name) return $module;
		}
		return null;
	}

	/* PRIVATE */
	private function loadModule($path, $xml_file) {

		$xml = file_get_contents($xml_file);
		$parser = xml_parser_create();
		xml_parse_into_struct($parser, $xml, $vals, $index);
		xml_parser_free($parser);
	
		foreach ($vals as $key => $value) {
			if($value["tag"] == "NAME" && $value["type"] == "complete" && isset($value["value"])) $m_name = $value["value"];
			if($value["tag"] == "DESCRIPTION" && $value["type"] == "complete" && isset($value["value"])) $m_descr = $value["value"];
			// TODO: Add modules config params

		}
		$mod_file = ABS.MODULES.sprintf("/%s/%s.module.php", $path, $m_name);
		if(file_exists($mod_file)) require_once($mod_file);
		$module = new $m_name;
		$module->name = $m_name;
		$module->init();
		$this->modules[] = $module;
	}

}

?>