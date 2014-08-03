<?php

/*
	Module class
	By Zerg 2014

*/

class Module {

	// Module name
	public $name;

	// Module description
	public $description;

	// Module absolute root dir
	public $root;

	// Module root dir
	public $root_url;

	// Module classes dir
	public $classes;

	// Module absolute templates dir
	public $templates;

	// Module templates dir
	public $templates_url;

	// Module index file
	public $index;

	// Module smarty_vars
	public $mod_vars = array();

	// Module initialization
	public function init() {
		$this->root = ABS.MODULES."/".$this->name;
		$this->root_url = MODULES."/".$this->name;
		$this->templates = $this->root."/templates";
		$this->templates_url = $this->root_url."/templates";
		$this->classes = $this->root."/classes";
		$this->index = $this->templates."/index.tpl";
		
		$this->mod_vars["name"] = $this->name;
		$this->mod_vars["root_dir"] = $this->root;
		$this->mod_vars["root_url"] = $this->root_url;
		$this->mod_vars["templates_dir"] = $this->templates;
		$this->mod_vars["templates_url"] = $this->templates_url;
		
		$this->initClasses();
		$this->main();
	}

	// Module classes initialize
	public function initClasses() {
		if ($handle = opendir($this->classes)) {
	    while (false !== ($file = readdir($handle))) { 
	    		if($file && !empty($file) && $file != "." && $file != "..")
	        	require_once($this->classes."/".$file);
	    }
    	closedir($handle); 
		}
	}

	// Render module
	public function render() {
		global $app;
		if($this->index && !empty($this->index)) {
			$app->smarty->assign("mod_vars", $this->mod_vars);
			$app->smarty->display($this->index);
		}
	}

	// Main exec
	public function main() {
		// Implement into child modules
	}

	public function assign($var, $value) {
		global $app;
		$app->smarty->assign($var, $value);
	}


}

?>