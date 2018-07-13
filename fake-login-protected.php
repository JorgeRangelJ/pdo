<?php

$user = null;
$query = null;

if (!empty($_POST)) {
	require_once 'config.php';
	$query = "SELECT * FROM users WHERE email=:email AND password=:password ";
	$prepared = $pdo->prepare($query);
	$prepared->execute([
		'email' => $_POST['email'],
		'password' => md5($_POST['password'])
	]);
	$user = $prepared->fetch(PDO::FETCH_ASSOC);
	// jorge@gmail.com' OR 1=1;--
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
		<h1>Fake Login</h1>
		<a href="index.php">Home</a>
		<form action="fake-login-protected.php" method="post">
			<label for="email">Email</label>
			<input type="text" name="email" id="email">
			<br>
			<label for="password">Password</label>
			<input type="password" name="password" id="password">
			<br>
			<input type="submit" value="fake-login">
		</form>
		<h2>Query</h2>
		<div>
			<?php
				print_r($query);
			?>
		</div>
		<h2>User Data</h2>
		<div>
			<?php
				print_r($user);
			?>
		</div>
	</div>
</body>
</html>	