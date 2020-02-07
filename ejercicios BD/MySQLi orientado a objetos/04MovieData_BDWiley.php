<?php
header("Content-Type: text/html;charset=UTF-8");

// Create connection
require ('config.php');
$conn = mysqli_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

//insert data into "movietype" table
$type="INSERT INTO movietype (movietype_label)
      VALUES ('Sci Fi'),
     ('Drama'),
     ('Adventure'),
     ('War'),
     ('Comedy'),
     ('Horror'),
     ('Action'),
     ('Kids')" ;

if (mysqli_query($conn, $type)) {
	echo "New records type created successfully<br/>";
} else {
	echo "Error creating new record: $type" . mysqli_error($conn);
}

//insert data into "people" table
$people="INSERT INTO people
         (people_fullname, people_isactor, people_isdirector)
      VALUES ('Jim Carrey', 1, 0),
     ('Tom Shadyac', 0, 1),
     ('Lawrence Kasdan', 0, 1),
     ('Kevin Kline', 1, 0),
     ('Ron Livingston', 1, 0),
     ('Mike Judge', 0, 1)";

if (mysqli_query($conn, $people)) {
	echo "New records people created successfully<br/>";
} else {
	echo "Error creating new record: $people" . mysqli_error($conn);
}

//insert data into "movie" table
$movie="INSERT INTO movie (movie_name, movie_type, movie_year,
     movie_leadactor, movie_director)
      VALUES ('Bruce Almighty', 5, 2003, 1, 2),
     ('Office Space', 5, 1999, 5, 6),
     ('Grand Canyon', 2, 1991, 4, 3)";

if (mysqli_query($conn, $movie)) {
	echo "New records movie created successfully<br/>";
} else {
	echo "Error creating new record: $movie" . mysqli_error($conn);
}

mysqli_close($conn);

?>