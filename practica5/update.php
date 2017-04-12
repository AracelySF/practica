<?php
	require("scriptDB.php");


	$nocliente = $_POST['cl_nocliente'];
	$nombre= $_POST['cl_nombre'];
	$apellidop = $_POST['cl_apellidop'];
	$apellidom	= $_POST['cl_apellidom'];
	$rfc= $_POST['rfc'];

	$conexion->query("UPDATE pr_cliente SET cl_nombre='$nombre', cl_apellidop='$apellidop', cl_apellidom='$apellidom', rfc='$rfc'
					  WHERE  cl_nocliente='$nocliente'");

	

	$nocuenta = $_POST['cu_nocuenta'];
	$tipocuenta = $_POST['cu_tipocuenta'];
	$fechaapertura = $_POST['cu_fechaapertura'];
	$saldoapertura = $_POST['cu_saldoapertura'];
	$saldoactual = $_POST['cu_saldoactual'];
	$sucursal = $_POST['sucursal'];

	$conexion->query("UPDATE pr_cuenta SET cu_tipocuenta='$tipocuenta', cu_fechaapertura='$fechaapertura', cu_saldoapertura='$saldoapertura',
					 cu_saldoactual='$saldoactual' WHERE  cu_nocuenta='$nocuenta'");

	$nocotutular = $_POST['co_notitular'];
	$nombrecotutular = $_POST['co_nombrecotitular'];
	$coapellidop = $_POST['co_apellidop'];
	$coapellidom = $_POST['co_apellidom'];
	$corfc = $_POST['co_rfc'];
	$parentesco = $_POST['co_parentesco'];
	
	$conexion->query("UPDATE pr_cotitular SET co_parentesco='$parentesco', co_nombrecotitular='$nombrecotutular', 
					  co_apellidop='$coapellidop', co_apellidom='$coapellidom', co_rfc='$corfc' 
					  WHERE  co_notitular='$nocotutular'");

	header("Location:index.php");
?>