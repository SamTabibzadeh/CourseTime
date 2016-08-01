<?php
require_once "userManager.php";
 
if(isset($_SESSION['name']) || isset($_SESSION['admin'])){ 
 
	if(isset($_SESSION['name'])){
		$username = $_SESSION['name'];
	}
	else{
		$username = $_SESSION['admin'];
	}
 
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
 
	if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        
	        $uploadOk = 1;
	    } 
    else {
        
        $uploadOk = 0;
    }
 
	}
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	    echo "Filen är för stor.";
	    $uploadOk = 0;
	}
 
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Endast jpg, png, jpeg eller gif filer är tillåtna.";
	    $uploadOk = 0;
    }
 
    if ($uploadOk == 0) {
    echo "Något gick fel!";
 
	} 
	else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	    	$imageName = basename( $_FILES["fileToUpload"]["name"]);
	        
	        $sql = ("INSERT INTO images VALUES ('NULL', '$username','$imageName')");
			$db->connection->query($sql); 
			
			echo '<img src="uploads/'.$imageName.'" >';	
	    } 
	    else {
        	echo "Något gick fel!";
    	}
	}
}
 
header('Location: index.php')
?>