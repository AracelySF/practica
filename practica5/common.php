<?php 
	$bd_host = 'localhost';
	$bd_nombrebd = 'practica5';
	$bd_usuario = 'root';
	$bd_contrasena = '';
	
	$bd_conexion = mysqli_connect($bd_host,$bd_usuario,$bd_contrasena,$bd_nombrebd);
		
		if(!$bd_conexion)
		{
			die('Hubo un problema, compruebe la conexion' . mysqli_error());
		}
		
	//or die("Hubo un problema, compruebe la conexion" . mysql_error());
	
	?>