<!DOCTYPE html>
<html>
		<form name="editform" id="editform" method="POST" action="editprocess.php">
			<textarea name ="editText" id="editText" placeholder="Max 255 tecken."></textarea>
			<input class="loginboxButton editsubmit" type="submit" id="loginsubmit" value="Spara">
		</form>
		<form id="imageform" action="uploadimage.php" method="post" enctype="multipart/form-data">
		    <input class="loginboxButton editsubmit" type="file" name="fileToUpload" id="fileToUpload" value="Välj profilbild">
		    <input class="loginboxButton editsubmit" type="submit" value="Ladda upp" name="submit" id="imagesubmit">
		</form>
    <script src="js/main.js"></script>
</html>