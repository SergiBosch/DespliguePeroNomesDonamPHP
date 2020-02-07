<?php
header("Content-Type: text/html;charset=UTF-8");

// Create connection
require ('config.php');
$conn = mysqli_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

//create "movie" table
$movie = "CREATE TABLE movie (
  movie_id int(11) NOT NULL auto_increment,
  movie_name varchar(255) NOT NULL,
  movie_type tinyint(2) NOT NULL default 0,
  movie_year int(4) NOT NULL default 0,
  movie_leadactor int(11) NOT NULL default 0,
  movie_director int(11) NOT NULL default 0,
  PRIMARY KEY  (movie_id)
 )" ;

if (mysqli_query($conn, $movie)) {
	echo "Table movie created successfully<br/>";
} else {
	echo "Error creating table: " . mysqli_error($conn);
}



//create "movietype" table
$movietype = "CREATE TABLE movietype (
  movietype_id tinyint(2) NOT NULL auto_increment,
  movietype_label varchar(100) NOT NULL,
  PRIMARY KEY  (movietype_id)
)"  ;

if (mysqli_query($conn, $movietype)) {
	echo "Table movietype created successfully<br/>";
} else {
	echo "Error creating table: " . mysqli_error($conn);
}

//create "people" table
$people = "CREATE TABLE people (
  people_id int(11) NOT NULL auto_increment,
  people_fullname varchar(255) NOT NULL,
  people_isactor tinyint(1) NOT NULL default 0,
  people_isdirector tinyint(1) NOT NULL default 0,
  PRIMARY KEY  (people_id)
)" ;

if (mysqli_query($conn, $people)) {
	echo "Table people created successfully<br/>";
} else {
	echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);


?>