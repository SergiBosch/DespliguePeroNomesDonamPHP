<?php
//connect to MySQL; note we've used our own parameters- you should use
//your b for hostname, user, and password

// Create connection
require ('config.php');
$conn=mysqli_connect(SQL_HOST,SQL_USER,SQL_PASS);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br/>";

// Create database
$sql = "CREATE DATABASE wiley CHARACTER SET latin1 COLLATE latin1_spanish_ci";
if (mysqli_query($conn, $sql)) {
	echo "Wiley Database created successfully";
} else {
	echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);


?>
