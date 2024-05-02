<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "bkshop";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// echo "Database connected successfully \r\n", PHP_EOL;
} catch (PDOException $e) {
	// echo "Database connection failed: " . $e->getMessage();
}

?>