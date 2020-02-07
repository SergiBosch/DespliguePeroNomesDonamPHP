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
$results=mysqli_query($conn,$query) or die(mysql_error());

$query2="SELECT *
     FROM movietype
     ORDER BY movietype_id";
$results2=mysqli_query($conn,$query2) or die(mysql_error());

$query3="SELECT *
     FROM people
     ORDER BY people_id";
$results3=mysqli_query($conn,$query3) or die(mysql_error());

function MostrarTabla($z){
	echo "<table border='1'>";
	while ($rows=mysqli_fetch_assoc($z)) {
		echo "<tr>";
		foreach($rows as $value) {
			echo "<td>";
			echo $value;
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table><br/>\n";
};

MostrarTabla($results);
MostrarTabla($results2);
MostrarTabla($results3);

mysqli_close($conn);
?>