<?php
      
      error_reporting(E_ALL);
	  ini_set('display_errors', 1);
      
$servername = "localhost";
$username = "D20221101857";
$password = "Aiman2002@";
$dbname = "D20221101857";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>