<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "big_cheese";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Remove when done 
echo "Connected successfully";
?>