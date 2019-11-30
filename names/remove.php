<?php 

require_once 'php_action/db_connect.php';

if($_GET['id']) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM save_retrieve WHERE id = {$id}";
	$result = $connect->query($sql);
	$data = $result->fetch_assoc();

	$connect->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Remove Member</title>
	<link rel="icon" href="favicon.png">
</head>
<body>

<h3>Do you really want to remove ?</h3>
<form action="php_action/remove.php" method="post">

	<input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
	<button type="submit">Save Changes</button>
	<a href="http://localhost:8080/adv-web/lecturers.php"><button type="button">Back</button></a>
</form>
<br>
<br>
<h2 style="text-align:center; color:sienna">
<a href="http://localhost:8080/adv-web/home.php" target="_blank">GO BACK HOME!</a>
</h2>
</body>
</html>

<?php
}
?>