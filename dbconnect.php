<?php
$host='localhost';
$user='root';
$password='root';
$database_name='films';

try
{
  $pdo = new PDO('mysql:host=localhost;dbname=films', $user,
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
// Create connection
//$con=mysqli_connect($host,$user,$password,$database_name);

// Check connection
//if (mysqli_connect_errno($con))
//  {
//  echo "Failed to connect to MySQL: " . mysqli_connect_error();
//  }
?>