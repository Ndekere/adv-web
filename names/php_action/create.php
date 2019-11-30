<?php 

require_once 'db_connect.php';

if($_POST) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];
	$contact = $_POST['contact'];
	
	$sql = "INSERT INTO `save_retrieve`( `First Name`,`Last Name`,`Age`,`Contact`) VALUES ('".$fname."','".$lname."','".$age."','".$contact."')";

	if($connect->query($sql) === TRUE) {
		echo "<p>New Record Successfully Created</p>";
		echo "<a href='../create.php'><button type='button'>Back</button></a>";
		echo "<a href='http://localhost:8080/adv-web/lecturers.php'><button type='button'>Home</button></a>";
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
}

?>