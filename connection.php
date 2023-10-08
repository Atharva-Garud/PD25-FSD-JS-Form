<?php
$host = "localhost";
$username = "atharva";
$password = "atharva123*";
$database = "atharva_test";
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully <br>";
?>