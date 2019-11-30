<?php 

require_once 'db_connect.php';

if($_POST) {
	$id = $_POST['id'];
//SET active = 2
	$sql = "DELETE from save_retrieve  WHERE id = {$id}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Successfully removed!!</p>";
		echo "<a href='http://localhost:8080/adv-web/lecturers.php'><button type='button'>Back</button></a>";
	} else {
		echo "Error updating record : " . $connect->error;
	}

	$connect->close();
}

?>