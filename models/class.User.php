<?php

class User{
	private $db;
	function __construct($_db){
		$this->db = $_db;
	}

	function AddUser($name, $mail, $password, $salt, $admin){
	$this->db->query("INSERT INTO users VALUES('NULL', '$name', '$mail', '$password', '$salt', '$admin')")
		or die("Query error: " . $db->error);
	}

	function GetUser($userId, $username, $usermail){
		if($username != null){
		$result = $this->db->connection->query("SELECT * FROM users WHERE userName = '$username'")
			or die("Query error: " . $this->db->error);
		}
		if($usermail != null){
			$result = $this->db->connection->query("SELECT * FROM users WHERE userMail = '$usermail'")
			or die("Query error: " . $this->db->error);
		}
		if($userId != null){
			$result = $this->db->connection->query("SELECT * FROM users WHERE userId = '$userId'")
			or die("Query error: " . $this->db->error);
		}
		return $result;
	}
}
?>