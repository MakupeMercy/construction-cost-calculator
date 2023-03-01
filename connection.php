<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'dreamhouse';

// Create connection
$dbconn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$dbconn) {
  die("Connection failed: " . mysqli_connect_error());
}


?>



