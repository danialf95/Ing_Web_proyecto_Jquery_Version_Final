

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
                   <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       <script type="text/javascript" src="js/crearusuario.js"></script>
       <script>
        $(document).ready(function (){
          $('.solo-numero').keyup(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
          });          
        }); 
        function activado(){
           $('#saldo').hide();
          } 
           function desactivado(){
           $('#saldo').show();
          }    
        </script>
       
    </head>
    <body style="">
        <div class="container-fluid">
        <div class="row">
             <div class="col-md-12" style="margin-top: 20px;">
                <div><a href="index.html"><button class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"> Volver</span></button></a> </div>
             </div>
           </div>
            <div class="row">
                <div class="col-md-12" align="center" style="font-size: 50px;  ">
                  <legend >Crear Usuario</legend>
                </div>		
            </div>
 		
            <div class="row">
                <div class="col-md-4">  			
                </div>
                <div class="col-md-4 " style="margin-top: 20px; background-color: white;">
                    <form name="formulario" id="formulariologin" method="post" action="autenticacion.php" >
                        <div align="center">
                           <img src="img/user.png" alt="" width="50" height="50">
                        </div> 
                           <legend align="center">Ingrese Los Datos</legend> 

                        <div class="form-group">
                            <label>Cedula:</label> 
                            <input type="text"  class="form-control solo-numero" name="cedula" placeholder="Ingrese su nombre de usuario" required>
                        </div>
                         <div class="form-group">
                            <label>Nombres:</label> 
                            <input type="text" class="form-control" name="nombres" placeholder="Ingrese su nombre de usuario" required>
                        </div>
                         <div class="form-group">
                            <label>Apellidos:</label> 
                            <input type="text" class="form-control" name="apellidos" placeholder="Ingrese su nombre de usuario" required>
                        </div>
                      <div class="form-group">
                            <label>Email:</label> 
                            <input type="text" class="form-control" name="email" placeholder="Ingrese su nombre de usuario" required>
                        </div> 
                        <div class="form-group">                   	                 
                            <label>Password</label>
                            <input type="password" class="form-control" name=password placeholder="Digite su contraseña" required>
                        </div>      
                        <div class="form-group">
                            <label>Saldo Consignado Para Abrir Cuenta :</label> 
                            <input type="text" id="saldo" class="form-control solo-numero" name="saldo" placeholder="Ingrese saldo a consignar" required>
                        </div>                   
                        <div class="form-group" align="center">
	                        <input type="radio" name="tipousuario" value="1" onclick="desactivado();">Usuario<td>
	  						<input type="radio" name="tipousuario" value="2" onclick="activado();">Administrador<td>  
                        </div>
                       
			            <div align="center">
			            	<span id="mensaje"></span>
			            </div>
                    </form>
                     <div class="row" style="margin-bottom: 15px;" align="center">
                                <button class="btn btn-success" onclick="creaciondatos();">Crear Usuario</button>
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