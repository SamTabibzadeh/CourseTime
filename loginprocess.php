<?php
require_once "userManager.php";
 
$usermail = $db->connection->real_escape_string($_POST['loginmail']);
$password = $db->connection->real_escape_string($_POST['loginpassword']);
 
$userExist = $user->GetUser(null, null, $usermail);
$row = $userExist->fetch_assoc();
if($row['admin'] == 1){
	$salt = $row['userSalt'];
	$salted = md5($password.$salt);
	if($salted == $row['userPass']){
		$_SESSION['admin'] = $row['userName'];
	}
}
else if($row['userId'] != null) {
	$salt = $row['userSalt'];
	$salted = md5($password.$salt);
	if($salted == $row['userPass']){
		$_SESSION['name'] = $row['userName'];
	}
}
else{
	echo "Du uppgav fel e-mail eller lösenord";
}
?>