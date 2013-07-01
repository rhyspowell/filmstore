<?php

#global $host,$database,$user,$password;
try {
	echo "in database connection";
	$pdo = new PDO("mysql:host=$host;dbname=$database", $user,$password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');
	}
catch (PDOException $e)
            {
              $error = 'Cant connect to database: ' . $e->getMessage();
              echo $error . $e;
              exit();
            }
?>