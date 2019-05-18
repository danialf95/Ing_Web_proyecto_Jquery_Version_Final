<?php 
require 'connect.php';
$cedula=$_POST["cedula"];
$nombres=$_POST["nombres"];
$apellidos=$_POST["apellidos"];
$email=$_POST["email"];
$password=$_POST["password"];
$tipo=$_POST["tipousuario"]; 
$saldo=$_POST["saldo"];



if($saldo>100000 and $tipo=="1")
{

$consulta=mysqli_query($conexion,"INSERT INTO usuarios(username,PASSWORD,estado,saldo,intentos,tipo,nombres,apellidos,email)VALUES ('$cedula','$password','A','$saldo','0','$tipo','$nombres','$apellidos','$email')");
		if(mysqli_affected_rows($conexion)==1)
		{
		echo "Usuario Creado Exitosamente";
		}
		else
		{
			echo" Error al registrar comuniquese con Soporte";
		}
}
else{
	if($tipo=="2")
	{
	$consulta=mysqli_query($conexion,"INSERT INTO usuarios(username,PASSWORD,estado,saldo,intentos,tipo,nombres,apellidos,email)VALUES ('$cedula','$password','A','0','0','$tipo','$nombres','$apellidos','$email')");
		if(mysqli_affected_rows($conexion)==1)
		{
		echo "Usuario Creado Exitosamente";
		}
		else
		{
			echo" Error al registrar comuniquese con Soporte";
		}
	}
	else{
	echo" el saldo debe ser mayor a 100000 para abrir la cuenta";
}
}

 ?>


