<?php   
require 'connect.php';
$username=$_GET["user"];
$consulta=mysqli_query($conexion,"SELECT  * from usuarios where username='$username'");
$datos=mysqli_fetch_assoc($consulta);

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
       <script type="text/javascript" src="js/editar_usuario.js"></script>
    </head>
    <body style="background-color: #ADFF2F;">
        <div class="container-fluid">
           <div class="row">
             <div class="col-md-12" style="margin-top: 20px;">
                <div><a href="plataforma_Administrador.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-list"> MENU</span></button></a> </div>
             </div>
           </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2" align="center" style="margin-top: 20px; background-color: white; ">
                  <legend >Editar Usuario</legend>
                		
                <div align="center">
                           <img src="img/user.png" alt="" width="50" height="50">
                        </div> 
                         <legend align="center">RELLENE LOS CAMPOS CON LOS DATOS QUE DESEE MODIFICAR</legend>
                         <p> Para el ususario :<span style="color: #0000CD;"><?php echo $datos["username"] ; ?></span></p>
                        </div>
 		   </div>
            <div class="row" style="margin-top: 20px;">                 
                <div class="col-md-4 col-md-offset-2 " style=" background-color: white;">
                    <form name="formulario" id="formulariologin" method="post" action="update_usuarios.php" >                                              
                           <div class="form-group">
                            <label>Nombres:</label> 
                            <input type="text" class="form-control" name="nombres" placeholder="<?php echo $datos["nombres"] ;?>" required value="<?php echo $datos["nombres"] ;?>">
                        </div>
                         <div class="form-group">
                            <label>Apellidos:</label> 
                            <input type="text" class="form-control" name="apellidos" placeholder="<?php echo $datos["apellidos"] ;?>" required value="<?php echo $datos["apellidos"] ;?>">
                        </div>
                        <div class="form-group">
                            <label>Tipo 1= Administrador 2= Usuario:</label>	
                            <input type="number" class="form-control" name="tipousuario" placeholder="<?php echo $datos["tipo"] ;?>" required value="<?php echo $datos["tipo"] ;?>">
                        </div>

                </div>
                <div class="col-md-4" style=" background-color: white;">   
                         <div class="form-group">
                            <label>Email:</label> 
                            <input type="text" class="form-control" name="email" placeholder="<?php echo $datos["email"] ;?>" required value="<?php echo $datos["email"] ;?>">
                        </div> 
                        <div class="form-group">                   	                 
                            <label>Password</label>
                            <input type="password" class="form-control" name=password placeholder="<?php echo $datos["PASSWORD"];?>" required value="<?php echo $datos["PASSWORD"] ;?>">
                        </div>
                         <div class="form-group">                                        
                            <label>ESTADO ACTIVO/BLOQUEADO:</label>
                            <input type="text" class="form-control" name=estado placeholder="<?php echo $datos["estado"];?>" required value="<?php echo $datos["estado"] ;?>">
                        </div>      
                        <input type="hidden" name="username" value="<?php echo $datos["username"]; ?>">                   
                        <div align="center">
			            	
			            </div>                            
                             
    </div>
                   
                        
               
           </div>
  <div  class="row" align="center" >  
          <div class="col-md-8 col-md-offset-2" style="background-color: white; padding-bottom: 5px;">   
                  <span id="mensaje"></span>          
                <button class="btn btn-success" onclick="editardatosuser();">Editar Datos</button>
                               
   </div>
 </form>
         </div>  
 	</div>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>