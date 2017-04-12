<?php
$ip = "localhost";
$usuario ="root";
$password = "";


$conexion = mysql_connect($ip, $usuario, $password);
$selection_bd = mysql_select_db('practica5',$conexion);
if((!$conexion) & (!$selection_bd))
{
	die('Hubo un problema, compruebe la conexion' . mysql_error());
}
echo 'la conexion ha sido exitosa';
mysql_close($conexion);

?>