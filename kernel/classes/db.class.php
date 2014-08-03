<?php

/*
	Database class

*/
class DB {

	// Connection
	public $connection;

	// Connect to database
	function __construct() {
		
		$this->connection = mysql_connect(DB_HOST, DB_USER, DB_PASS);
		mysql_select_db(DB_NAME, $this->connection);
		mysql_set_charset(DB_CHARSET);

	}

	// Query
	public function query($sql, $debug = false) {

		$sql = str_replace("#", DB_PREFIX."_" , $sql);
		if($debug) echo($sql);

		$res = mysql_query($sql);
		$rows = array();
		while ($row = mysql_fetch_assoc($res)) {
			$rows[] = $row;
		}
		
		return $rows;
	}

	// Execute
	public function execute($sql, $debug = false) {
		$sql = str_replace("#", DB_PREFIX."_" , $sql);
		if($debug) echo($sql);
		mysqli_execute($sql);
		$id = mysql_insert_id();
		return $id;
	}

}




?>