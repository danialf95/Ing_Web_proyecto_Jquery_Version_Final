<?php 
session_start();
if(!isset($_SESSION['username']) or !isset($_SESSION['tipo']) or $_SESSION['tipo']!=2)
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
    <body style="background-color:  #FFF8DC;">
        <div class="container-fluid">
           
            <div class="row">
                <div class="col-md-12" align="center" style="font-size: 50px; margin-top: 40px; ">
                  <legend >MODULO DE ADMINISTRACION</legend>
                </div>		
            </div>
 		    <div class="row">
                <div class="col-md-12" align="center" style="font-size: 50px; margin-top: 10px; ">
                  <img src="img/list.png" alt="" width="128" height="128">
                   <div>
                     <a href="Buscar_usuario.php"><button class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Buscar</button></a>
                   </div>
                </div>    
            </div>

     <div class="row">
                <div class="col-md-6" align="center">  			
                   <img src="img/crear.png" alt="">
                   <div>
                     <a href="crear_usuario.php"><button class="btn btn-success"><span class="glyphicon glyphicon-user"></span> Crear</button></a>
                   </div>
                </div>
                <div class="col-md-6" align="center">              
                    <img src="img/editar (2).png" alt="">
                   <div>
                   <a href="editar_usuario.php"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"> Editar</button></a>
                   </div>
                </div>
            </div>


            <div class="row"> 
              <div class="col-md-12" align="center">
                   <img src="img/eliminar.png" alt="">
                   <div>
                     <a href="eliminar_usuario.php"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"> Eliminar</span></button></a>
              </div>			
            </div>
 	</div>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>