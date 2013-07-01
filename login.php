<?php
require("dbconnect.php");
require ("PassHash.php");
$username = $_POST['username'];
$password = $_POST['password'];

$statement = $pdo->prepare("select password from users where user = :name");
$statement->execute(array(':name' => $username));
$row = $statement->fetch();

if (PassHash::check_password($row['password'], $password)) {
	echo "Come on in";
} else {
	echo "bugger off now!!!!";
}

?>