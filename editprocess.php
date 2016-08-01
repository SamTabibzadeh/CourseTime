<?php
require_once "userManager.php";
 
if(isset($_SESSION['name']) || isset($_SESSION['admin'])){
	
	if(isset($_SESSION['name'])){
		$username = $_SESSION['name'];
	}
	else{
		$username = $_SESSION['admin'];
	}
 
	$text = $db->connection->real_escape_string($_POST['editText']);
 
	$profileExist = ("SELECT * FROM profiles WHERE userName = '$username'");
	$profile = $db->connection->query($profileExist);
 
	$rows = $profile->fetch_assoc();
 
	if($rows == null){
		$insertsql = ("INSERT INTO profiles VALUES ('$username', '$text')");
		$newinsert = $db->connection->query($insertsql);
	}
	else{
		$updatesql = ("UPDATE profiles SET profileinfo = '$text' WHERE userName = '$username'");
		$db->connection->query($updatesql);
	}
}
?>