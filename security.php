<?php
session_start();
if (!isset($_SESSION['username'])){
	header("location:http://www.com/members/authentication-failed.php");
	exit();
}
?>