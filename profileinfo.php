<?php
require_once "userManager.php";
 
if(isset($_SESSION['name']) || isset($_SESSION['admin'])){ 
 
	if(isset($_SESSION['name'])){
		$username = $_SESSION['name'];
	}
	else{
		$username = $_SESSION['admin'];
	}
 
	$profileExist = ("SELECT * FROM profiles WHERE userName = '$username'");
	$profile = $db->connection->query($profileExist);
 
	$rows = $profile->fetch_assoc();
 
	if($rows != null){
		echo $rows['profileinfo'];
	}
	else{
		echo "";
	}
}