<?php
require("dbconnect.php");
require ("PassHash.php");
$username = "rhys";
$password = "rhys";
$pass_hash = PassHash::hash($password);
$sql = $pdo->prepare("INSERT INTO users (user,password) values ('$username','$pass_hash')");
$sql->execute();//$pdo->exec($sql);
// Value:
// $2a$10$eImiTXuWVxfM37uY4JANjOL.oTxqp7WylW7FCzx2Lc7VLmdJIddZq
?>