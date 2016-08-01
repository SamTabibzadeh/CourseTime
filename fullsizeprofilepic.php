<?php
require_once "userManager.php";
 
if(isset($_SESSION['name']) || isset($_SESSION['admin'])){
	
	if(isset($_SESSION['name'])){
		$username = $_SESSION['name'];
	}
	else{
		$username = $_SESSION['admin'];
	}
	
	$imgpath = ("SELECT * FROM images WHERE imgUser = '$username'");
	$result = $db->connection->query($imgpath);
	$image = $result->fetch_assoc();
	
	if($image == null){
		echo "0";
	}
	else{
		echo '<img src="uploads/'. $image['imgName'] .'">';
	}
}
?>