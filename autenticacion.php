<?php 
session_start();
require 'connect.php';
$username=$_POST["username"];
$password=$_POST["password"]; 
$consulta=mysqli_query($conexion,"SELECT * FROM usuarios where username='$username'");
$datos=mysqli_fetch_assoc($consulta);
if($datos["username"]== $username and $datos["PASSWORD"]==$password and $datos["estado"]=='A')
{
    $update=mysqli_query($conexion,"UPDATE usuarios SET intentos=0 where username='$username'");
	if($datos["tipo"]==1)
	{
		 $mensaje="Bienvenido usuario";
		 $_SESSION['username']=$datos["username"];
		 $_SESSION['tipo']=$datos["tipo"];

	}
	if($datos["tipo"]==2)
	{
		$mensaje="Bienvenido Administrador";
		$_SESSION['username']=$datos["username"];
		 $_SESSION['tipo']=$datos["tipo"];
	}
}
else 
{
	if($datos["estado"]<>"B")
		{
					   if($datos["intentos"]>=3  )
					   {
					     $mensaje="su cuenta ha sido bloqueada";
					     $update=mysqli_query($conexion,"UPDATE usuarios SET estado='B' where username='$username'");
					   }

					else
					{   
						$update=mysqli_query($conexion,"UPDATE usuarios SET intentos=intentos+1 where username='$username'");
						$numero=$datos["intentos"]+1;
						$mensaje="Intento fallido numero ".$numero;
					}  
	    }
else
{
 $mensaje="su cuenta ha sido bloqueada"; 
}
}

//$mensaje="ola";
echo $mensaje;
mysqli_close($conexion);
?>