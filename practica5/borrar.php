<?php
require("conexion.inc");
$no=$_GET["no_c"];
	echo $no;
$resultado = $mysqli ->query("delete from pr_cliente where cl_nocliente = '$no'");
header("location:index.php");
?>