<?php

/*
	Database class

*/
class DB {

	// Connection
	public $connection;

	// Connect to database mysqli
	function __construct() {
		
		$this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
		mysqli_select_db(DB_NAME, $this->connection);
		mysqli_set_charset(DB_CHARSET);

	}

	// Query
	public function query($sql, $debug = false) {

		$sql = str_replace("#", DB_PREFIX."_" , $sql);
		if($debug) echo($sql);

		$res = mysqli_query($sql);
		$rows = array();
		while ($row = mysqli_fetch_assoc($res)) {
			$rows[] = $row;
		}
		
		return $rows;
	}

	// Execute
	public function execute($sql, $debug = false) {
		$sql = str_replace("#", DB_PREFIX."_" , $sql);
		if($debug) echo($sql);
		mysqli_execute($sql);
		$id = mysqli_insert_id();
		return $id;
	}

}




?>