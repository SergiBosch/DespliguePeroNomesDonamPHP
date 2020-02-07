<?php
header("Content-Type: text/html;charset=UTF-8");

// Create connection
require ('config.php');
$conn = mysqli_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


//drop the main database
$drop = "drop database wiley";

if (mysqli_query($conn, $drop)) {
	echo "La base de datos wiley eliminada";
} else {
	echo "La base de datos wiley no se ha podido eliminar: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
