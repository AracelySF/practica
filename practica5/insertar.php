<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Conexion a la base de datos Practica5</title>
<style type="text/css">
body {
	background-image: url(imagenes/err.jpg);
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="insert.php">
  <p style="text-align: center; font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; font-size: 24px; color: #BB2F32;"><strong><u style="font-size: 36px">Modulo Inserción de datos
  </u></strong></p>
  <table width="1105" border="1">
    <tbody>
      <tr bgcolor="#C26DD1" style="text-align: center; font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif; font-size: 18px; color: #062760;">
        <td width="251" height="30">&nbsp;</td>
        <td width="165">cliente</td>
        <td width="141">&nbsp;</td>
        <td width="159">cuenta</td>
        <td width="181">&nbsp;</td>
        <td width="168">Cotitular</td>
      </tr>
      <tr>
        <td bgcolor="#E3CEED">Nombre de Cliente</td>
        <td bgcolor="#E3CEED"><input type="text" name="textNoCliente" id="textfield"></td>
        <td bgcolor="#E3CEED">Numero de cuenrta</td>
        <td bgcolor="#E3CEED"><input type="text" name="textNoCuenta" id="textfield6"></td>
        <td bgcolor="#E3CEED">Numero Cotitular</td>
        <td bgcolor="#E3CEED"><input type="text" name="textNoCotitular" id="textfield12"></td>
      </tr>
      <tr>
        <td bgcolor="#E3CEED">Nombre Cliente</td>
        <td bgcolor="#E3CEED"><input type="text" name="textNombreCliente" id="textfield2"></td>
        <td bgcolor="#E3CEED">Tipo Cuenta</td>
        <td bgcolor="#E3CEED"><input type="text" name="textTipoCuenta" id="textfield7"></td>
        <td bgcolor="#E3CEED">Nombre Cotitular</td>
        <td bgcolor="#E3CEED"><input type="text" name="textNombreCotitular" id="textfield13"></td>
      </tr>
      <tr>
        <td bgcolor="#E3CEED">Apellido Paterno</td>
        <td bgcolor="#E3CEED"><input type="text" name="textApellidoPCliente" id="textfield3"></td>
        <td bgcolor="#E3CEED">Fecha Apertura</td>
        <td bgcolor="#E3CEED"><input type="text" name="textFechApertura" id="textfield8"></td>
        <td bgcolor="#E3CEED">Apellido Paterno Cotitular</td>
        <td bgcolor="#E3CEED"><input type="text" name="textApellidoPCotitular" id="textfield14"></td>
      </tr>
      <tr>
        <td bgcolor="#E3CEED">Apelllido Materno</td>
        <td bgcolor="#E3CEED"><input type="text" name="textApellidoMCliente" id="textfield4"></td>
        <td bgcolor="#E3CEED">Saldo Inicial</td>
        <td bgcolor="#E3CEED"><input type="text" name="textSaldoInicial" id="textfield9"></td>
        <td bgcolor="#E3CEED">Apellido Materno Cotitular</td>
        <td bgcolor="#E3CEED"><input type="text" name="textApellidoMCotitular" id="textfield15"></td>
      </tr>
      <tr>
        <td bgcolor="#E3CEED">RFC</td>
        <td bgcolor="#E3CEED"><input type="text" name="textRFCliente" id="textfield5"></td>
        <td bgcolor="#E3CEED">Saldo Actual</td>
        <td bgcolor="#E3CEED"><input type="text" name="textSaldoActual" id="textfield10"></td>
        <td bgcolor="#E3CEED">RFC Cotitular</td>
        <td bgcolor="#E3CEED"><input type="text" name="textApellidoMCotitular" id="textfield16"></td>
      </tr>
      <tr>
        <td bgcolor="#E3CEED">&nbsp;</td>
        <td bgcolor="#E3CEED">&nbsp;</td>
        <td bgcolor="#E3CEED">Numero Sucursal</td>
        <td bgcolor="#E3CEED"><label>
        	<?php
			require("conexion.inc");
			$resultado = $mysqli-> query("SELECT * FROM pr_sucursal");
			$x=1;
			
			echo '<select name="sucursal">';
			while (($fila = $resultado->fetch_assoc()) && ($x <= 5))
				   
			{  
				echo '<option value="'.
					$fila['su_nosucursal']; 
					echo'">'.
					$fila['su_nombresucursal']; 
				    echo'</option>';
					$x++;
				}
			echo '</select>';
			
			
			?>
        	
        </label> 
         </td>
        <td bgcolor="#E3CEED">Parentesco</td>
        <td bgcolor="#E3CEED"><input type="text" name="textParentescoCotitular" id="textfield17"></td>
      </tr>
    </tbody>
  </table>
  <input type="submit" name="button" id="button" value="Enviar">
  <p>&nbsp; </p>
</form>
</body>
</html>