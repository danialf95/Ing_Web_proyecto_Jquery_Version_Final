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
       <script type="text/javascript" src="js/buscar_usuario.js"></script>
       <script>
        $(document).ready(function (){
          $('.solo-numero').keyup(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
          });
        });     
        </script>
       
    </head>
    <body style="background-color: white">
        <div class="container-fluid">
           <div class="row">
             <div class="col-md-12" style="margin-top: 20px;">
                <div><a href="plataforma_Administrador.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-list"> MENU</span></button></a> </div>
             </div>
           </div>
            <div class="row">
                <div class="col-md-12" align="center" style="font-size: 50px; margin-top: 10px; ">
                  <legend >Buscar Usuario</legend>
                </div>		
            </div>
 		
            <div class="row">
                <div class="col-md-4">  			
                </div>
                <div class="col-md-4 " style="margin-top: 20px; background-color: white;">
                    <form name="formulario" id="formulariologin" method="post" action="buscando_usuario.php" >
                        <div align="center">
                           <img src="img/user.png" alt="" width="50" height="50">
                        </div> 
                           <legend align="center">Ingrese La Cedula Del usuario  buscar</legend> 

                        <div class="form-group">
                            <label>Cedula:</label> 
                            <input type="number"  class="form-control solo-numero" name="username" placeholder="Ingrese su nombre de usuario" required>
                        </div>
			                               </form>
                     <div class="row" style="margin-bottom: 15px;" align="center">
                                <button class="btn btn-info" onclick="buscardatos();"><span class="glyphicon glyphicon-search"></span> Buscar</button>
                        </div>
                </div>
            </div>

            <div class="row">
            <div class="col-md-8 col-md-offset-2" align="center">                  
                    <div id="mensaje"></div>
                 
            </div> 			
            </div>
 	</div>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>