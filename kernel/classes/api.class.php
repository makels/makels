<?php
/*
	API class
	By Zerg 2014
*/

class Api {

	public $result;

	public function execute($cmd) {

		$cmd = new ApiCommands();

		switch ($cmd) {
			// Test command
			case 'test':
				$this->result = $cmd->test();
				break;
			
			// Set model
			case 'set_model':
				$this->result = $cmd->setModel();
				break;

			// Set model from template
			case 'set_model_template':
				$this->result = $cmd->setModelTemplate();
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