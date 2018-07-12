<?php
	require_once 'config.php';
	$result = false;
	if (!empty($_POST['id'])) 
	{
		$id = $_POST['id'];
		$newName = $_POST['name'];
		$newEmail = $_POST['email'];
		$sql = "UPDATE users SET name=:name, email=:email WHERE id=:id";
		$query = $pdo->prepare($sql);
		$result = $query->execute([
						'id' => $id,
						'name' => $newName,
						'email' => $newEmail
						]);
		$row["name"] = $newName;
		$row["email"] = $newEmail;
	}
	else
	{
		$id = $_GET['id'];
		$sql = "SELECT * FROM users WHERE id =:id";
		$query = $pdo->prepare($sql);
		$query->execute([
				'id' => $id
					]);	
		$row = $query->fetch(PDO::FETCH_ASSOC);
	}
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
		<h1>Update Users</h1>
		<a href="list.php">Back</a>	
		<?php
			if ($result)
			{
		?>
			<div class="alert alert-success">Success!!!</div>
		<?php
			}
		?>			
		<form action="update.php" method="post">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" value="<?= $row["name"]; ?>">
			<br>
			<label for="email">Email</label>
			<input type="text" name="email" id="email" value="<?= $row["email"]; ?>">
			<br>
			<input type="hidden" name="id" value="<?= $row["id"]; ?>">
			<input type="submit" value="Update">			
		</form>
	</div>
</body>
</html>