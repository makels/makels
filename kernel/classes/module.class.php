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

	// Module root dir
	public $root;

	// Module classes dir
	public $classes;

	// Module templates dir
	public $templates;

	// Module index file
	public $index;

	// Module smarty_vars
	public $smarty_vars = array();

	// Module initialization
	public function init() {
		$this->root = ABS.MODULES."/".$this->name;
		$this->templates = $this->root."/templates";
		$this->classes = $this->root."/classes";
		$this->index = $this->templates."/index.tpl";
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
			$app->smarty->assign("smarty_vars", $this->smarty_vars);
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