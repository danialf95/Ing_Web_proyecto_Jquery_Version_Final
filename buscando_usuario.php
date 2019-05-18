<?php 
require 'connect.php';
$username=$_POST["username"];
$consulta=mysqli_query($conexion,"SELECT * FROM usuarios where username='$username'");
if(mysqli_num_rows($consulta)==1)
{
$data=mysqli_fetch_assoc($consulta);
$mensaje="<table class=\"table table-striped table-bordered\">
                            <thead style=\"text-align: center;\">
                                <th>Username</th>
                                <th>Password</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Estado</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                                </thead>
                                <tbody>
                                <tr>
                                <td>".$data['username']."</td>
                               <td>".$data['PASSWORD']."</td>
                                <td>".$data['nombres']."</td> 
                                <td>".$data['apellidos']."</td> 
                                <td>".$data['estado']."</td>
                                 <td><a href=\"formulario_editar_usuario.php?user=$username\"><button class=\"btn btn-info\">Editar</button></a></td> 
                                 <td><a href=\"proceso_eliminacion.php?user=$username\"><button class=\"btn btn-danger\">Eliminar</button></a></td>
                                 </tr>
                                  </tbody>
                                </table>
                                ";
}
else
{
	$mensaje="<H1>NO EXISTE USUARIO</H1>";
}
echo $mensaje;

mysqli_close($conexion);
 ?>