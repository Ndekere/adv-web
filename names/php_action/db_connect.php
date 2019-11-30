<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studee";

// create connection
$connect = new mysqli($servername, $username, $password, $dbname);

// check connection
if($connect->connect_error) {
	die("connection failed : " . $connect->connect_error);
} else {
	// echo "Successfully Connected";
}

?>