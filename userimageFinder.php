<?php
require_once "userManager.php";
 
if(isset($_SESSION['name'])){
	$username = $_SESSION['name'];
}
if(isset($_SESSION['admin'])){
	$username = $_SESSION['admin'];
}
 
$currentuser = $user->GetUser(null, $username, null);
 
$result = $db->connection->query("SELECT imgName FROM images WHERE imgUser = '$username'");
$imageName = $result->fetch_assoc();
 
if($result->num_rows > 0){
	echo '<img src="uploads/'. $imageName['imgName'] .'"width="85" height="85">';
}
else{
	echo '<img src="uploads/nopic.jpg" width="85" height="85">';
}
 
?>