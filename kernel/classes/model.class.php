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

	// Url model
	public $url;

	// Image File
	public $file;

	// Load model from file
	public function createFromFile($file) {

		$this->id = session_id();
		$this->file = $this->createJpg($file);
		$this->url = MODELS_URL . "/" . $this->file;
	}

	// Load model from template
	public function createFromTmpl($file) {
		$this->id = session_id();
		copy(MODELS_TMPL_DIR. "/" .$file, UPLOADS_DIR . "/" .$this->id . "_" . $file);
		$this->file = $this->createJpg($this->id . "_" . $file);
		$this->url = MODELS_URL . "/" . $this->file;
	}

	public function createFromWebCam($dataUrl) {
		$this->id = session_id();
		$parts = explode(',', $dataUrl); 
    $data = base64_decode($parts[1]);
    $file_name =  $this->id .'_webcam.png';
    file_put_contents(UPLOADS_DIR .  "/" . $file_name, $data);
    $this->file = $this->createJpg($file_name);
		$this->url = MODELS_URL . "/" . $this->file;
	}

	/* PRIVATE */
	private function createJpg($file) {

		$filename = UPLOADS_DIR . "/" .$file;

		switch (end(explode(".", $filename))) {
			case 'jpg':
				$img = imagecreatefromjpeg($filename);
				break;

			case 'jpeg':
				$img = imagecreatefromjpeg($filename);
				break;

			case 'png':
				$img = imagecreatefrompng($filename);
				break;
			
			case 'gif':
				$img = imagecreatefromgif($filename);
				break;
			
		}

		$conv_name = MODELS_DIR . "/" . $this->id . ".jpg";
		imagejpeg($img, $conv_name);
		imagedestroy($img);

		return $this->id . ".jpg";

	}
}

?>