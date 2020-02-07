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
echo "Connected successfully";

mysqli_close($conn);