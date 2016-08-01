<!DOCTYPE html>
<html>
		<form name="registerform" id="registerform" method="POST" action="registerprocess.php">
			<div class="loginformRow">
				<label class="formLabel">E-mail</label>
				<input class="loginformInput" type="text" name="regmail" id="regmail">
			</div>
			<div class="loginformRow">
				<label class="formLabel">Användarnamn</label>
				<input class="loginformInput" type="text" name="regname" id="regname">
			</div>
			<div class="loginformRow">
				<label class="formLabel">Lösenord</label>
				<input class="loginformInput" type="password" name="regpassword" id="regpassword">
			</div>
			<input class="loginboxButton formSubmit" type="button" id="regback" value="Tillbaka">
			<input class="loginboxButton formSubmit" type="submit" id="formregister" value="Registrera">
		</form>
    <script src="js/main.js"></script>
</html>