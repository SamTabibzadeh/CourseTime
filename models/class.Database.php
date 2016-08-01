<?php

class Database{
	public $connection;
	private $host;
	private $user;
	private $password;
	private $database;
	function __construct(){
		$host = "localhost:8889";
		$user = "root";
		$password = "root";
		$database = "projekt";
		$this->connection = mysqli_connect($host, $user, $password, $database)
			or die("Error: ({$this->connection->connect_errno}) {$this->connection->connect_error}");
		$this->connection->set_charset('utf8');
	} 


	function query($query){
		return $this->connection->query($query)
			or die("Query error: " . $this->connection->error);
	}
}

?>