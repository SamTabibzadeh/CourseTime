<?php
require_once "userManager.php";
 
if(isset($_SESSION['name']) || isset($_SESSION['admin'])){ 
 
	if(isset($_SESSION['name'])){
		$username = $_SESSION['name'];
	}
	else{
		$username = $_SESSION['admin'];
	}
 
	?>
	<html>
			<div id='usernamelabel'><?php echo ucfirst($username); ?></div>
			<div id='thumbnailprofile'> <?php include "userimageFinder.php"; ?></div>
			<div id="profileinfo"> <?php include "profileinfo.php"; ?></div> <!--NYYYYYYYYY -->
			<input type="button" Value="Ändra profil" class="loginboxButton profileButton" id="editButton">
			<input type="button" Value="Logga ut" class="loginboxButton profileButton" id="logoutButton">			
		<script src="js/main.js"></script>
	</html>
<?php
}

else { ?>
    <div id="noprofile"> <h3>...till CourseTime!</h3> 
    Vi vill höra vad <i><b>du</b></i> tycker om de kurser du läst. Gå med i gemenskapen och kom i kontakt med andra studenter!  
    </div>
<?php  }
?>