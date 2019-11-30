<?php require_once 'php_action/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Lecturer details - Studee</title>
	<link rel="icon" href="favicon.png">
	<style type="text/css">
		.manageMember {
			width: 50%;
			margin: auto;
		}

		table {
			width: 100%;
			margin-top: 20px;
		}

	</style>

</head>
<body>
	<br>
	<br>
	<br>
	
<h2 align="center">Shows Lecturer details from the Database...</h2>
<h3 align="center">Feel free to Modify them as YOU please :)</h3>
<div class="manageMember">
	<a href="create.php"><button type="button">Add Lecturer</button></a>
	<table border="1" cellspacing="0" cellpadding="0">
		<thead>
			<tr>
				<th>Name</th>
				<th>Age</th>
				<th>Contact</th>
				<th>Option</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM save_retrieve";
			$result = $connect->query($sql);

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['First Name']." ".$row['Last Name']."</td>
						<td>".$row['Age']."</td>
						<td>".$row['Contact']."</td>
						<td>
							<a href='edit.php?id=".$row['id']."'><button type='button'>Edit</button></a>
							<a href='remove.php?id=".$row['id']."'><button type='button'>Remove</button></a>
						</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
			}
			?>
		</tbody>
	</table>
</div>
<br>
<br>
<h2 style="text-align:center; color:sienna">
<a href="http://localhost:8080/adv-web/home.php" target="_blank">GO BACK HOME!</a>
</h2>
</body>
</html>