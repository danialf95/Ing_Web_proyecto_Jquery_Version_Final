<?php 
session_start();
require 'connect.php';
$inicial=$_POST["inicial"];
$consignacion=isset($_POST["consignacion"])? $_POST["consignacion"]:0;
$retiro=isset($_POST["retiro"])?$_POST["retiro"]:0;
$final=isset($_POST["final"])?$_POST["final"]:$_POST["inicial"];
$username=$_SESSION["username"];
if($consignacion!=0)
	{
	$nuevosaldo=$inicial+$consignacion;
	$retira="NO";
	$consigna="SI";
	}
if($retiro!=0)
	{
	$nuevosaldo=$inicial-$retiro; 
	$retira="SI";
	$consigna="NO";
	}
if($nuevosaldo>=0)
	{

	   mysqli_query($conexion,"UPDATE usuarios SET saldo='$nuevosaldo' where username='$username'");
		if(mysqli_affected_rows($conexion)==1)
			{
				if($consignacion!=0)
				{
					$fecha=date("Y-m-d");
					$hora=date("h:i:s");
					 mysqli_query($conexion,"INSERT INTO movimientos (fecha,hora,username,saldoinicial,retiro,consignacion,valortransaccion,saldofinal)values('$fecha','$hora','$username','$inicial','$retira','$consigna','$consignacion',$nuevosaldo)");
				 if(mysqli_affected_rows($conexion)==1)
					 {
						$mensaje="TRANSACCION REALIZADA CON EXITO";
					 }
					 else
			{
				$mensaje="NO SE PUEDE RALIZAR LA TRANSACCION VALORES NO VALIDOS";
			}
				}
				else
				{
					$fecha=date("Y-m-d");
					$hora=date("h:i:s");
					 mysqli_query($conexion,"INSERT INTO movimientos (fecha,hora,username,saldoinicial,retiro,consignacion,valortransaccion,saldofinal)values('$fecha','$hora','$username','$inicial','$retira','$consigna','$retiro',$nuevosaldo)");
					 if(mysqli_affected_rows($conexion)==1)
					 {
						$mensaje="TRANSACCION REALIZADA CON EXITO";
					 }
					 else
						{
							$mensaje="NO SE PUEDE RALIZAR LA TRANSACCION VALORES NO VALIDOS";
						}
				}
               
			}
			else
			{
				$mensaje="NO SE PUEDE RALIZAR LA TRANSACCION VALORES NO VALIDOS";
			}
	}
else
	{
	$mensaje="TRANSACCION NO VALIDA POR SALDO FINAL NEGATIVO";
	}
echo $mensaje;

 ?>
