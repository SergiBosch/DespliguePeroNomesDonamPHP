<?php
header("Content-Type: text/html;charset=UTF-8");

// Create connection
require ('config.php');
$conn = mysqli_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$insert="INSERT INTO movie
		(movie_name, movie_type, movie_year,movie_leadactor, movie_director) VALUES
	    ('Los miserables', 9, 2012, 11, 12)";


if (mysqli_query($conn, $insert)) {
	echo "Se ha insertado la película con el tipo de película existente <br/>\n";
} else {
	echo "Error $insert" . mysqli_error($conn);
}
mysqli_close($conn);
?>