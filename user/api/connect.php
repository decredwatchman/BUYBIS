<?php 

$servername = "localhost";
$username = "root";
$db="buybis";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password,$db );


// Check connection
if ($conn->connect_error) {
  echo"Connection Wahala";
    exit;

}