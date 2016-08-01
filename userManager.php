<?php
session_start();
include "models/class.Database.php";
include "models/class.User.php";
$db = new Database();
$user = new User($db);
?>