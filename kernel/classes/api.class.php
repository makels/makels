<?php
/*
	API class
	By Zerg 2014
*/

class Api {

	public $result;

	public function execute($cmd) {

		$commands = new ApiCommands();

		switch ($cmd) {

			// Test command
			case 'test':
				$this->result = $commands->test();
				break;
			
			case 'upload':
				$this->result = $commands->upload();
				break;

			// Set model
			case 'set_model':
				$this->result = $commands->setModel();
				break;

			// Set model from template
			case 'set_model_template':
				$this->result = $commands->setModelTemplate();
				break;

			// Set model from webcam
			case 'set_model_webcam':
				$this->result = $commands->setModelWebCam();
				break;

			// Analize model
			case 'analize_model':
				$this->result = $commands->analizeModel();
				break;

			default:
				$this->result = array('err' => ERR_COMMAND );
				break;
		}

		// Prepare response data
		return $this->getResponse();

	}

	// Handling result level
	private function getResponse() {
		return $this->result;
	}

}


?>