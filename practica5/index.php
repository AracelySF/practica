<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Practica 5 consulta BD</title>
<style type="text/css">
body {
	background-image: url();
	background-color: #34CFD1;
}
</style>
</head>

<body>
<table width="1202" border="1">
  <tbody style="color: #062760; font-size: 18px; font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;">
   <tr>
   	<td colspan = "11" style="text-align: center; font-size: 24px; color: #D90D59;">  <strong>PRACTICA 5</strong></td>
   </tr>
    <tr bgcolor="#C26DD1">
      <td width="85" style="text-align: center">No Cliente</td>
      <td width="209" style="text-align: center">Nombre Completo</td>
      <td width="53" style="text-align: center">RFC</td>
      <td width="111" style="text-align: center">No Cuenta</td>
      <td width="157" style="text-align: center">Saldo Apertura</td>
      <td width="130" style="text-align: center">Saldo actual</td>
      <td width="97" style="text-align: center">Sucursal</td>
      <td width="126" style="text-align: center">CoTitular</td>
      <td width="99" style="text-align: center">Actualizar</td>
      <td width="71" style="text-align: center">Borrar</td>
    </tr>
    <?php
	  require("conexion.inc");
	  $resultado = $mysqli ->query("SELECT * FROM pr_cliente, pr_cuenta, pr_cotitular, pr_sucursal
	  WHERE	pr_cliente.cl_nocliente=pr_cuenta.cl_nocliente and
	  pr_cuenta.su_nosucursal=pr_sucursal.su_nosucursal and
	  pr_cotitular.cl_nocliente=pr_cliente.cl_nocliente;");

	  while($fila = $resultado->fetch_assoc())
	  {		
		  
	  echo '<tr><td width="62" style="text-align: center">'.$no_c=$fila['cl_nocliente'];echo' </td>';
		  
		  
      echo '<td width="88" style="text-align: center">'.$fila['cl_nombre']." ".$fila['cl_apellidop']." 			      ".$fila['cl_apellidom'];echo' </td>'; 
      echo '<td width="67" style="text-align: center">'.$fila['rfc'];echo' </td>';
      echo '<td width="72" style="text-align: center">'.$fila['cu_nocuenta'];echo' </td>';
      echo '<td width="105" style="text-align: center">'.$fila['cu_saldoapertura'];echo' </td>';
      echo '<td width="86" style="text-align: center">'.$fila['cu_saldoactual'];echo' </td>';
      echo '<td width="69" style="text-align: center">'.$fila['su_nombresucursal'];echo' </td>';
      echo '<td width="115" style="text-align: center">'.$fila['co_nombrecotitular'];echo' </td>
	  
	  <td width="84" style="text-align: center"><img src="imagenes/editar.png" width="32" height="32" alt=""/></td>
	  
      <td width="68" style="text-align: center"><a href = "borrar.php?no_c='.$no_c;echo'"/><img src="imagenes/boton-eliminar (1).png" width="32" height="32" alt=""/></td>
	  
    </tr>';
	  }
	  ?>
  </tbody>
</table>

<table width="979" border="1">
  <tbody style="color: #062760; font-size: 18px; font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;">
  </tbody>
</table>

<table width="979" border="1">
  <tbody style="color: #062760; font-size: 18px; font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;">
    
  </tbody>
</table>
<a href="insertar.php"><img src="imagenes/cuaderno (2).png" width="64" height="64" alt=""/></a>
</body>
</html>
