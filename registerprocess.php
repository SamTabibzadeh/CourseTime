<?php
	require_once "userManager.php";
 
	$username = $db->connection->real_escape_string(trim($_POST['regname']));
	$usermail = $db->connection->real_escape_string(trim($_POST['regmail']));
	$userpass = $db->connection->real_escape_string(trim($_POST['regpassword']));
	$salt = uniqid(mt_rand(), true);
	$saltedpass = md5($userpass.$salt);
 
	$nameAvailable = $user->GetUser(null, $username, null);
	$mailAvailable = $user->GetUser(null, null, $usermail);
	
	if($nameAvailable->num_rows < 1){
		if($mailAvailable->num_rows < 1){
			$user->AddUser($username, $usermail, $saltedpass, $salt);
		}
		else{
			echo "Mail redan registrerad.";
		}
	}
	else{
		echo "Användarnamnet används redan.";
	}
 
?>