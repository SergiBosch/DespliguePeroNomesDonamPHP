<?php
header("Content-Type: text/html;charset=UTF-8");

// Create connection
require ('config.php');
$conn = mysqli_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

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
	echo "</table>\n";
};

$s="show create table movie";
$results = mysqli_query($conn,$s) or die(mysql_error());
MostrarTabla($results);

$drop_foreign="ALTER TABLE movie 
		     DROP FOREIGN KEY fk_movietype_movie,
             DROP FOREIGN KEY fk_leadactor_movie,
             DROP FOREIGN KEY fk_director_movie";
		

$drop_index="ALTER TABLE movie 
		    DROP INDEX fk_movietype_movie,
	        DROP INDEX fk_leadactor_movie,
			DROP INDEX fk_director_movie"; 

if (mysqli_query($conn, $drop_foreign)) {
	echo "Se han eliminado las restricciones de clave ajena <br/>\n";
} else {
	echo "Error al eliminar las restricciones: $drop_foreign". mysqli_error($conn);
}

if (mysqli_query($conn, $drop_index)) {
    echo "Se han eliminado los índices de clave ajena <br/>\n";
} else {
    echo "Error al eliminar las restricciones: $drop_index". mysqli_error($conn);
}

$s2="show create table movie";
$results2 = mysqli_query($conn,$s2) or die(mysql_error());
MostrarTabla($results2);

mysqli_close($conn);
?>