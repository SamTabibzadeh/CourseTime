<?php
include_once "userManager.php";
$rid = $_POST['rID'];
$ccid = $_POST['ccid'];
 
$sqlD = "DELETE FROM reviews WHERE rId = $rid";
$db->connection->query($sqlD);
 
header("Location: index.php?courseID=$ccid");
 
?>