<?php
/*
	Model class
	By Zerg 2014
*/

class Model {

	// Id Model
	public $id;

	// Canvas
	public $canvas;

	// Load model from file
	public function createFromFile($file) {
		$this->id = session_id();
		// TODO: Преобразовать в jpg из uploads и положить в TEMP
	}

	// Load model from template
	public function createFromTpl($id) {
		$this->id = session_id();
		// TODO: Преобразовать в jpg из uploads и положить в TEMP
	}

	/* PRIVATE */
	
}

?>