<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spectral";

//create a database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check if the connection was successful
if (!$conn) {
	die("connection failed " . mysqli_connect_error());
} 
?>