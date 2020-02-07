<?php
header("Content-Type: text/html;charset=UTF-8");

// Create connection
require ('config.php');
$conn = mysqli_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$d="delete from movie where movie_name='Los miserables'";

if (mysqli_query($conn, $d)) {
	echo "Se ha eliminado la película con el tipo de película inexistente <br/>\n";
} else {
	echo "Error $d" . mysqli_error($conn);
}
mysqli_close($conn);



?>