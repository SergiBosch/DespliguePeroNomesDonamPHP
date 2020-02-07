<?php
header("Content-Type: text/html;charset=UTF-8");

// Create connection
require ('config.php');
$conn = mysqli_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$query="SELECT *
     FROM movie
     ORDER BY movie_id";

echo "<a href='10MostrarTablasFuncion_BDWiley.php?q=$query'>";
echo "Mostrar los datos de la tabla movie";
echo "</a> <br/>\n";

$query2="SELECT *
     FROM movietype
     ORDER BY movietype_id";

echo "<a href='10MostrarTablasFuncion_BDWiley.php?q=$query2'>";
echo "Mostrar los datos de la tabla movietype";
echo "</a> <br/>\n";



$query3="SELECT *
     FROM people
     ORDER BY people_id";

echo "<a href='10MostrarTablasFuncion_BDWiley.php?q=$query3'>";
echo "Mostrar los datos de la tabla people";
echo "</a> <br/>\n";

mysqli_close($conn);

?>