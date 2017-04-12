<?php

require("conexion.inc");
$noCliente = $_POST['textNoCliente'];
$nombre = $_POST['textNombreCliente'];
$apellidoP = $_POST['textApellidoPCliente'];
$apellidoM = $_POST['textApellidoMCliente'];
$rfc = $_POST['textRFCliente'];


$noCuenta = $_POST['textNoCuenta'];
$tipoCuenta = $_POST['textTipoCuenta'];
$fechaApertura = $_POST['textFechApertura'];
$saldoApertura = $_POST['textSaldoInicial'];
$saldoActual = $_POST['textSaldoActual'];
$sucursal = $_POST['sucursal'];


$noCotitular = $_POST['textNoCotitular'];
$nombreCotitular = $_POST['textNombreCotitular'];
$coApellidoP = $_POST['textApellidoPCotitular'];
$coApellidoM = $_POST['textApellidoMCotitular'];
$coRFC = $_POST['textApellidoMCotitular'];
$parentesco = $_POST['textParentescoCotitular'];

$mysqli ->query("INSERT INTO pr_cliente values('$noCliente','$nombre','$apellidoP','$apellidoM','$rfc')");

$mysqli ->query ("INSERT INTO pr_cuenta values('$noCuenta','$tipoCuenta','$fechaApertura','$saldoApertura','$saldoActual','$noCliente','$sucursal')");

$mysqli ->query ("INSERT INTO pr_cotitular values('$noCotitular','$parentesco','$nombreCotitular','$coApellidoP','$coApellidoM','$coRFC','$noCliente')");

header("Location: index.php");
?>

