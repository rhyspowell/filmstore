<?php
require("dbconnect.php");
require ("PassHash.php");
$username = "Test";
$password = "test";


$statement = $pdo->prepare("select password from users where user = :name");
$statement->execute(array(':name' => $username));
$row = $statement->fetch();
#echo $row;

#foreach ($row as $key => $value) {
#	echo $key;
#	echo $value;
#}
if (PassHash::check_password($row['password'], $password)) {
	echo "Come on in";
} else {
	echo "bugger off now!!!!";
}

?>