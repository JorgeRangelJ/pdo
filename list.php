<?php
	require_once 'config.php';
	$queryResult = $pdo->query("SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
<head>
	<title>DATABASES | PDO</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>List Users</h1>
		<a href="index.php">Home</a>
		<table class="table">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php	while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) { ?>
			<tr>
				<td><?= $row["name"]; ?></td>
				<td><?= $row["email"]; ?></td>
				<td><a href="update.php?id=<?= $row["id"]; ?>">Edit</a></td>
				<td><a href="delete.php?id=<?= $row["id"]; ?>">Delete</a></td>
			</tr>
			<?php	} ?>
		</table>
	</div>
</body>
</html>