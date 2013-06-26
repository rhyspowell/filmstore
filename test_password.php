<?php
require("dbconnect.php");
require ("PassHash.php");
$username = "Test";
$password = "test";
$pass_hash = PassHash::hash($password);
$sql = "INSERT INTO users (user,password) values ('$username','$pass_hash')";
$pdo->exec($sql);
// Value:
// $2a$10$eImiTXuWVxfM37uY4JANjOL.oTxqp7WylW7FCzx2Lc7VLmdJIddZq
?>