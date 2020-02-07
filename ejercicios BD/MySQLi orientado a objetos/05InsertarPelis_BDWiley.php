<?php
header("Content-Type: text/html;charset=UTF-8");

// Create connection
require ('config.php');
$conn = mysqli_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

//insert people
$people="INSERT INTO people
         (people_fullname, people_isactor, people_isdirector) VALUES 
	     ('Naomi Watts', 1, 0),
         ('Juan Antonio Bayona', 0, 1),
         ('Aida Folch', 1, 0),
         ('Fernando Trueba', 0, 1)";
 
if (mysqli_query($conn, $people)) {
	echo "New record people created successfully<br/>";
} else {
	echo "Error creating new record: $people" . mysqli_error($conn);
}

//insert data into "movie" table
$movie="INSERT INTO movie 
		(movie_name, movie_type, movie_year,movie_leadactor, movie_director) VALUES 
	    ('Lo imposible', 2, 2012, 7, 8),
        ('El artista y la modelo', 2, 2012, 9, 10)";

if (mysqli_query($conn, $movie)) {
	echo "New record movie created successfully<br/>";
} else {
	echo "Error creating new record: $movie" . mysqli_error($conn);
}


mysqli_close($conn);

