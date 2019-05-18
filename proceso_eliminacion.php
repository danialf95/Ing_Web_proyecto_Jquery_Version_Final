<?php  
require 'connect.php';
$username=$_GET["user"];
$consulta=mysqli_query($conexion,"DELETE from usuarios where username='$username'");
if(mysqli_affected_rows($conexion)==1)
{
  echo "<script language=Javascript>location.href=\"eliminar_usuario.php\";</script>";
}
else
{
	echo "lo sewntimos no se pudo borrar el registro solicitado";
}
?>