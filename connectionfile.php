<?php
$servername = "localhost";
$username = "root";
$password = "";
$mydatabase ="1st";

// Create connection
$conn = new mysqli($servername, $username, $password, $mydatabase);

// Check connection
if ($conn->connect_error) {
  die("Connection failed =>"  . $conn->connect_error);
}
// echo "Connected successfully =>  ";
?>