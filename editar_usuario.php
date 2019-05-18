<?php 	
session_start();
require 'connect.php';
if(isset($_SESSION['username']) and isset($_SESSION['tipo']) and $_SESSION['tipo']==2)
{
$consultas=mysqli_query($conexion,"SELECT * FROM usuarios");
} 
else
{
	 header('location:index.html');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
                   <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       <script type="text/javascript" src="js/loginverificacion.js"></script>
    </head>
    <body style="background-color: #B0C4DE">
        <div class="container-fluid">
           
            <div class="row">
                
                </div>		
            </div>
 		
            <div class="row">                 

    		<div class="col-md-10 col-md-offset-1">
    			<div class="panel-group">
    				<div class="panel panel-success">
    					<div class="panel-heading" align="center">listado De Usuarios</div>
    					<div class="panel-body">
                            <table class="table table-striped table-bordered">
                            <thead style="text-align: center;">
                                <th>Username</th>
                                <th>Password</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Estado</th>
                                <th>Accion</th>
                            </thead>
                                <tbody >
                                <?php 
                                 while ($variable=mysqli_fetch_array($consultas)) {
                                    # code...  
                                    $username=$variable['username'];                                                                                               
                                    echo "<tr>"; 
                                        echo "<td>".$variable['username']."</td>";
                                        echo "<td>".$variable['PASSWORD']."</td>"; 
                                        echo "<td>".$variable['nombres']."</td>"; 
                                        echo "<td>".$variable['apellidos']."</td>"; 
                                        echo "<td>".$variable['estado']."</td>";
                                        echo "<td><a href=\"formulario_editar_usuario.php?user=$username\"><button class=\"btn btn-info\">Editar</button></a></td>";                                           
                                    echo "</tr>";
                                     }                        
                                     
                                  mysqli_close($conexion);
                                 ?>                                     
                                </tbody>
                            </table>               
                        </div>
    				</div>
    			</div>
    		</div>
         

            <div class="row"> 			
            </div>
 	</div>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>