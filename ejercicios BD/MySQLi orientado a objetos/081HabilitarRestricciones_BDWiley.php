<?php
header("Content-Type: text/html;charset=UTF-8");

// Create connection
require ('config.php');
$conn = mysqli_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


$set="SET FOREIGN_KEY_CHECKS=1";//habilitar las restricciones

if (mysqli_query($conn, $set)) {
	echo "Se han habilitado las restricciones <br/>\n";
} else {
	echo "Error al habilitar restricciones: $set" . mysqli_error($conn);
}
mysqli_close($conn);
?>