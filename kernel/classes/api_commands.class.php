<?php

/* 
	API COMMANDS Class
*/

class ApiCommands {

	/* 
		Description: Test command
		Request: /api/test?test=123
	*/
	public function test() {
		global $req_test;
		return array('message' => "Api worked !!! ".$req_test);
	}

	/* 
		Description: Set current model
		Request: /api/set_model?file=my_img.png
	*/
	public function setModel() {
		global $req_file;
		if(empty($req_file) || !file_exists(TEMP.$req_file))
			return array( 'err' => ERR_FILE );
		
		$model = new Model();
		$model->createFromFile($req_file); 
		return get_object_vars($model);
	}

	/* 
		Description: Set current model from template
		Request: /api/set_model_template?id=1
	*/
	public function setModelTemplate() {
		global $req_id;
		if(empty($req_id) || !file_exists(TEMP.$req_file))
			return array( 'err' => ERR_FILE );
		
		$model = new Model();
		$model->createFromTmpl($req_id); 
		$this->result = get_object_vars($model);
	}

}

?>