<?php
header("Content-Type: text/html;charset=UTF-8");

// Create connection
require ('config.php');
$conn = mysqli_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


$results=mysqli_query($conn, $_REQUEST['q']) or die(mysql_error());



MostrarTabla($results);

function MostrarTabla($z){
	echo "<table border='1'>";
	while ($row=mysqli_fetch_assoc($z)) {
		echo "<tr>";
		foreach($row as $value) {
			echo "<td>";
			echo $value;
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
};

mysqli_close($conn);
?>
