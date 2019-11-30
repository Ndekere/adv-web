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
	<title>Edit Member</title>
	<link rel="icon" href="favicon.png">
	<style type="text/css">
		fieldset {
			margin: auto;
			margin-top: 100px;
			width: 50%;
		}

		table tr th {
			padding-top: 20px;
		}
	</style>

</head>
<body>

<fieldset>
	<legend>Edit Member</legend>

	<form action="php_action/update.php" method="post">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>First Name</th>
				<td><input type="text" name="fname" placeholder="First Name" value="<?php echo $data['First Name'] ?>" /></td>
			</tr>		
			<tr>
				<th>Last Name</th>
				<td><input type="text" name="lname" placeholder="Last Name" value="<?php echo $data['Last Name'] ?>" /></td>
			</tr>
			<tr>
				<th>Age</th>
				<td><input type="text" name="age" placeholder="Age" value="<?php echo $data['Age'] ?>" /></td>
			</tr>
			<tr>
				<th>Contact</th>
				<td><input type="text" name="contact" placeholder="Contact" value="<?php echo $data['Contact'] ?>" /></td>
			</tr>
			<tr>
				<input type="hidden" name="id" value="<?php echo $data['id']?>" />
				<td><button type="submit">Save Changes</button></td>
				<td><a href="http://localhost:8080/adv-web/lecturers.php"><button type="button">Back</button></a></td>
			</tr>
		</table>
	</form>

</fieldset>
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