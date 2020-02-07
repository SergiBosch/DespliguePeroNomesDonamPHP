<?php
header("Content-Type: text/html;charset=UTF-8");

// Create connection
require ('config.php');
$conn = mysqli_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$s="show create table movie";
$results = mysqli_query($conn, $s) or die(mysqli_error());

echo "<table border='1'>\n";
while ($rows=mysqli_fetch_assoc($results)) {
	echo "<tr>\n";
	foreach($rows as $value) {
		echo "<td>\n";
		echo $value;
		echo "</td>\n";
	}
	echo "</tr><br>\n";
}
echo "</table>\n";

mysqli_close($conn);
?>