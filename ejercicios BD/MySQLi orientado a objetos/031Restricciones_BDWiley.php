<?php
header("Content-Type: text/html;charset=UTF-8");

// Create connection
require ('config.php');
$conn = mysqli_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql="ALTER TABLE movie 
		ADD CONSTRAINT fk_movietype_movie FOREIGN KEY (movie_type) 
		REFERENCES movietype(movietype_id) ON DELETE CASCADE,
		ADD CONSTRAINT fk_leadactor_movie FOREIGN KEY (movie_leadactor) 
		REFERENCES people(people_id) ON DELETE CASCADE,
		ADD CONSTRAINT fk_director_movie FOREIGN KEY (movie_director) 
		REFERENCES people(people_id) ON DELETE CASCADE";


// ON DELETE CASCADE
// ON UPDATE CASCADE
// ON DELETE SET NULL
// ON UPDATE SET NULL
// ON DELETE RESTRICT
// ON UPDATE RESTRICT
// ON DELETE NO ACTION
// ON UPDATE NO ACTION
// SHOW INNODB STATUS

if (mysqli_query($conn, $sql)) {
	echo "Se han añadido la restricción de clave ajena de movie_type, movie_leadactor y movie_director<br/>";
} else {
	echo "Error : " . mysqli_error($conn);
}

mysqli_close($conn);
?>
