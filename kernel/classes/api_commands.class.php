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
		Description: Upload command
		Request: /api/upload
	*/
	public function upload() {
		if(count($_FILES) > 0 && isset($_FILES[0]) && isset($_FILES[0]['tmp_name']) && in_array($_FILES[0]['type'], array("image/jpeg", "image/png", "image/gif"))) {
			$basefile = basename($_FILES[0]['name']);
			$uploadfile = UPLOADS_DIR . "/".session_id(). "_" . $basefile;
			if (move_uploaded_file($_FILES[0]['tmp_name'], $uploadfile)) {
    		return array('url' => UPLOADS_URL . "/" .session_id(). "_" . $basefile, 'file' => session_id(). "_" . $basefile);
			} else return array( 'err' => ERR_FILE );
		} else return array( 'err' => ERR_FILE );
	}

	/* 
		Description: Set current model
		Request: /api/set_model?file=my_img.png
	*/
	public function setModel() {
		global $req_file;
		if(empty($req_file) || !file_exists(UPLOADS_DIR . "/" . $req_file))
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
		global $req_file;
		$model = new Model();
		$model->createFromTmpl($req_file); 
		return get_object_vars($model);
	}

	/* 
		Description: Set current model from webcam
		Request: /api/set_model_webcam
	*/
	public function setModelWebCam() {
		global $req_dataUrl;
		$model = new Model();
		$model->createFromWebCam($req_dataUrl); 
		return get_object_vars($model);
	}

	/* 
		Description: Analize model
		Request: /api/analize_model
	*/
	public function analizeModel() {
		global $req_file;
		$result = array(
			"face_count" => face_count(MODELS_DIR."/".$req_file, CASCADE_PATH.'/haarcascade_frontalface_alt.xml'),
			"face_detect" => face_detect(MODELS_DIR."/".$req_file, CASCADE_PATH.'haarcascade_frontalface_alt.xml')
			);
		return $result;
	}

}

?>