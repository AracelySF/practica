<?php

$mysqli = new mysqli("localhost", "root", "", "practica5");
if ($mysqli->connect_errno) {
	echo "fallo la conexion a mysql: (" . $mysqli->connect_errno .")" . $mysqli->connect_error;
}

?>
     