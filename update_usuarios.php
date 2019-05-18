<?php 
require 'connect.php';
$nombres=$_POST["nombres"];
$apellidos=$_POST["apellidos"];
$email=$_POST["email"];
$password=$_POST["password"];
$tipo=$_POST["tipousuario"]; 
$username=$_POST["username"];
$estado=$_POST["estado"]; 
mysqli_query($conexion,"UPDATE usuarios set nombres='$nombres',apellidos='$apellidos',email='$email',PASSWORD='$password',tipo='$tipo',estado='$estado' where username='$username'");
if(mysqli_affected_rows($conexion)==1)
{
$mensaje="El Registro ha sido Modificado";
echo $mensaje;
echo "<script>location.href=\"plataforma_Administrador.php\";</script>";
}
else
{
echo "<script>location.href=\"editar_usuario.php\";</script>";
}
mysqli_close($conexion);
 ?>