<?php
require_once "userManager.php";
 
if(isset($_SESSION['name']) || isset($_SESSION['admin'])){ ?>
	<html>
		<div></div>
	</html>
<?php
}
else{ ?>
	<html>
		<div id="loginOpen">Logga in / registrera</div>
	</html>
<?php
} 
?>