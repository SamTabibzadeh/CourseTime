<?php
include_once "userManager.php";
 
$cid = $_POST['cid'];
 
 
$sqlID = "SELECT * FROM courses WHERE courseId = $cid";
 
$rs= $db->connection->query($sqlID);
$variabel = $rs->fetch_assoc();
 
$reviewCourseId = $variabel['courseId'];

if(isset($_SESSION['admin'])){
	$reviewUser = $_SESSION['admin'];
}
else if(isset($_SESSION['name'])){
	$reviewUser = $_SESSION['name'];
}
 
$reviewText = $_POST['msgReview'];
$reviewRate = $_POST['rateReview'];
$reviewDate = date("d-m-Y");
 
$sql1 = "INSERT INTO reviews (rUser, courseID, rText, rDate, rRate) VALUES ('$reviewUser', '$reviewCourseId', '$reviewText', '$reviewDate', $reviewRate)";
 
 
$db->connection->query($sql1);
header("Location: index.php?courseID=$cid");

?>