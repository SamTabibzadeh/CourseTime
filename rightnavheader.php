<?php
require_once "userManager.php";
 
if(isset($_SESSION['name']) || isset($_SESSION['admin'])){ 
 
	if(isset($_SESSION['name'])){
		$username = $_SESSION['name'];
	}
	else{
		$username = $_SESSION['admin'];
	}
 
	echo "Mina sidor";
}

else { 
	echo "Välkommen!";
}
?>