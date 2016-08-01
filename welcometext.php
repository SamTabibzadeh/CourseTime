<?php
session_start();
 
if(isset($_SESSION['admin'])){
	echo "Välkommen " . ucfirst($_SESSION['admin']) . "! All hail the admins!";
}
else if(isset($_SESSION['name'])){
	echo "Välkommen " . ucfirst($_SESSION['name']) . "!";
}
else{
	echo "Registrering lyckades!";
}
?>