<!DOCTYPE html>
<html>
		<form name="loginform" id="loginform" method="POST" action="loginprocess.php">
			<div id="loginresponse">
			</div>
			<div class="loginformRow">
				<label class="formLabel" for="loginmail">E-mail</label>
				<input class="loginformInput" type="text" name="loginmail" id="loginmail">
			</div>
			<div class="loginformRow">
				<label class="formLabel" for="loginpassword">Lösenord</label>
				<input class="loginformInput" type="password" name="loginpassword" id="loginpassword">
			</div>
			<input class="loginboxButton formSubmit" type="button" id="formback" value="Tillbaka">
			<input class="loginboxButton formSubmit" type="submit" id="loginsubmit" value="Logga in">
		</form>
    <script src="js/main.js"></script>
</html>