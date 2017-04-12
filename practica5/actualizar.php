<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style type="text/css">
body {
	background-image: url(imagen/FONDO.jpg);
}
</style>
</head>
<body>
<form  action="update.php" method="post">
  <p style="text-align: center; color: #13BC06; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight: 400;"><strong>Modulo Actualizar Datos
  </strong></p>
  <table width="1119" border="1" align="center">
    <tbody>
     
      <tr>
        <td width="142" style="color: #06FF32">&nbsp;</td>
        <td width="144" style="color: #06FF32">Cliente</td>
        <td width="222" style="color: #06FF32">&nbsp;</td>
        <td width="144" style="color: #06FF32">Cuenta</td>
        <td width="282" style="color: #06FF32">&nbsp;</td>
        <td width="145" style="color: #06FF32">Cotitular</td>
      </tr>
      <?php
		$no = $_GET["n"];
		require("scriptDB.php");
		$resultado = $conexion->query("SELECT * FROM pr_cliente,pr_cuenta, pr_cotitular, pr_sucursal 
									   where pr_cliente.cl_nocliente=pr_cuenta.cl_nocliente and 
									   pr_cuenta.su_nosucursal=pr_sucursal.su_nosucursal and
									   pr_cotitular.cl_cliente=pr_cliente.cl_nocliente and
									   pr_cliente.cl_nocliente='$no'");
		$fila = $resultado->fetch_assoc();
      echo '<tr>
      	<td style="color: #06FF32">Numero de cliente:</td>
        <td style="color: #06FF32"><input type="text" name="cl_nocliente" id="cl_nocliente" value="'.$fila['cl_nocliente'].'"></td>
        <td style="color: #06FF32">Numero de cuenta:</td>
        <td style="color: #06FF32"><input type="text" name="cu_nocuenta" id="cu_nocuenta" value="'.$fila['cu_nocuenta'].'"></td>
        <td style="color: #06FF32">Numero Cotitular:</td>
        <td style="color: #06FF32"><input type="text" name="co_notitular" id="co_notitular" value="'.$fila['co_notitular'].'"></td>
      </tr>
      <tr>
        <td style="color: #06FF32">Nombre Cliente:</td>
        <td style="color: #06FF32"><input type="text" name="cl_nombre" id="cl_nombre" value="'.$fila['cl_nombre'].'"></td>
        <td style="color: #06FF32">Tipo de cuenta:</td>
        <td style="color: #06FF32"><input type="text" name="cu_tipocuenta" id="cu_tipocuenta" value="'.$fila['cu_tipocuenta'].'"></td>
        <td style="color: #06FF32">Nombre Cotitular:</td>
        <td style="color: #06FF32"><input type="text" name="co_nombrecotitular" id="co_nombrecotitular" value="'.$fila['co_nombrecotitular'].'"></td>
      </tr>
      <tr>
        <td style="color: #06FF32">Apellido paterno:</td>
        <td style="color: #06FF32"><input type="text" name="cl_apellidop" id="cl_apellidop" value="'.$fila['cl_apellidop'].'"></td>
        <td style="color: #06FF32">Fecha Apertura:</td>
        <td style="color: #06FF32"><input type="text" name="cu_fechaapertura" id="cu_fechaapertura" value="'.$fila['cu_fechaapertura'].'"></td>
        <td style="color: #06FF32">Apellido paterno Cotitular:</td>
        <td style="color: #06FF32"><input type="text" name="co_apellidop" id="co_apellidop" value="'.$fila['co_apellidop'].'"></td>
      </tr>
      <tr>
        <td style="color: #06FF32">Apellido Materno:</td>
        <td style="color: #06FF32"><input type="text" name="cl_apellidom" id="cl_apellidom" value="'.$fila['cl_apellidom'].'"></td>
        <td style="color: #06FF32">Saldo Inicial:</td>
        <td style="color: #06FF32"><input type="text" name="cu_saldoapertura" id="cu_saldoapertura" value="'.$fila['cu_saldoapertura'].'"></td>
        <td style="color: #06FF32">Apellido Materno Contitular:</td>
        <td style="color: #06FF32"><input type="text" name="co_apellidom" id="co_apellidom" value="'.$fila['co_apellidom'].'"></td>
      </tr>
      <tr>
        <td style="color: #06FF32">RFC:</td>
        <td style="color: #06FF32"><input type="text" name="rfc" id="rfc" value="'.$fila['rfc'].'"></td>
        <td style="color: #06FF32">Saldo Actual:</td>
        <td style="color: #06FF32"><input type="text" name="cu_saldoactual" id="cu_saldoactual" value="'.$fila['cu_saldoactual'].'"></td>
        <td style="color: #06FF32">REC Cotitular:</td>
        <td style="color: #06FF32"><input type="text" name="co_rfc" id="co_rfc" value="'.$fila['co_rfc'].'"></td>
      </tr>';
	  ?>
      <tr>
        <td style="color: #06FF32">&nbsp;</td>
        <td style="color: #06FF32">&nbsp;</td>
        <td style="color: #06FF32">Numero Sucursal:</td>
		  <td style="color: #06FF32"><label>
		  	<?php
			  	require("scriptDB.php");
			  	$consulta="SELECT*FROM pr_sucursal";
			  	$resultado= mysqli_query($conexion,$consulta);
			  
				  $x=1;
				  echo '<select name="sucursal">';
				  while(($fila = mysqli_fetch_row($resultado)) && ($x<=5)){
					  echo '<option value= "'.$fila[0] ; echo '">'.$fila[1]; echo '</option>';
					  $x++;
				  }
				  echo '</select>';
			  ?>
		  </label>
        </td>
        <?php
		$no = $_GET["n"];
		require("scriptDB.php");
		$resultado = $conexion->query("SELECT * FROM pr_cliente,pr_cuenta, pr_cotitular, pr_sucursal 
									   where pr_cliente.cl_nocliente=pr_cuenta.cl_nocliente and 
									   pr_cuenta.su_nosucursal=pr_sucursal.su_nosucursal and
									   pr_cotitular.cl_cliente=pr_cliente.cl_nocliente and
									   pr_cliente.cl_nocliente='$no'");
		$fila = $resultado->fetch_assoc();
         echo '<td style="color: #06FF32">Parentesco:</td>
        <td style="color: #06FF32"><input type="text" name="co_parentesco" id="co_parentesco" value="'.$fila['co_parentesco'].'"></td>';
			?>
      </tr>
      
    </tbody>
  </table>
  <p style="text-align: center">
    <input type="submit" name="button" id="button" value="Actualizar Datos">  
  </p>
</form>
</body>
</html>