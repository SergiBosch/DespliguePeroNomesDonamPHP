<?php
header("Content-Type: text/html;charset=UTF-8");

// Create connection
require ('config.php');
$conn = mysqli_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$people="INSERT INTO people
         (people_fullname, people_isactor, people_isdirector) VALUES
	     ('Hugh Jackman', 1, 0),
         ('Tom Hooper', 0, 1)";

if (mysqli_query($conn, $people)) {
	echo "Se ha insertado actor principal y director<br/>";
} else {
	echo "Error creating new record: $people" . mysqli_error($conn);
}

$movie="INSERT INTO movie
		(movie_name, movie_type, movie_year,movie_leadactor, movie_director) VALUES
	    ('Los miserables', 9, 2012, 11, 12)";

if (mysqli_query($conn, $movie)) {
	echo "Se ha insertado nueva película del actor principal y director insertados anteriormente <br/>\n";
} else {
	echo "Error creating new record: $movie" . mysqli_error($conn);
}
mysqli_close($conn);

?>