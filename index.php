<?php
$dbHost = 'localhost';
$dbName = 'cursophp';
$dbUser = 'root';
$dbPass = '';

try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    echo $e->getMessage();
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
		<h1>Databases</h1>
		<ul>
			<li>
				<a href="">Listar Usuarios</a>
			</li>
			<li>
				<a href="">Agregar Usuarios</a>
			</li>
			<li>
				
			</li>
			<li></li>
		</ul>
	</div>
</body>
</html>