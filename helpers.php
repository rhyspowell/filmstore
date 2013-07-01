<?php

global $host,$database,$user,$password;

include 'dbconnect.php';

function sec_session_start() {
        $session_name = 'sec_session_id'; // Set a custom session name
        $secure = false; // Set to true if using https.
        $httponly = true; // This stops javascript being able to access the session id. 
 
        ini_set('session.use_only_cookies', 1); // Forces sessions to only use cookies. 
        $cookieParams = session_get_cookie_params(); // Gets current cookies params.
        session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly); 
        session_name($session_name); // Sets the session name to the one set above.
        session_start(); // Start the php session
        session_regenerate_id(true); // regenerated the session, delete the old one.     
}

function dbconnect($host,$database,$user,$password) {
	try
		{
		  $pdo = new PDO('mysql:host='.$host.';'.$database."'", $user,
		    $password);
		  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $pdo->exec('SET NAMES "utf8"');
		}
	catch (PDOException $e)
		{
		  $error = 'Unable to connect to the database server.';
		  echo $error . $e;
		  //include 'error.html.php';
		  exit();
		}
}
?>