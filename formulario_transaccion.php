<?php 
require 'connect.php';
session_start();
if(!isset($_SESSION['username']) or !isset($_SESSION['tipo']) or $_SESSION['tipo']!=1)
{
  header('location:index.html');
} 
else
{
$username=$_SESSION['username'];
$consulta=mysqli_query($conexion,"SELECT * from usuarios where username='$username'");
$datos=mysqli_fetch_assoc($consulta);

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
       <script type="text/javascript" src="js/procesar_transaccion.js"></script>
       <script>
        $(document).ready(function (){
          $('.solo-numero').keyup(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
          });
          $('.consignar').keyup(function (){
            $('.retirar').val('');
            var final=parseFloat($('#saldoinicial').val())+parseFloat((this.value));
            $('.final').val(final);
          });
           $('.retirar').keyup(function (){
            $('.consignar').val('');
            var final= $('#saldoinicial').val()-(this.value);
            $('.final').val(final);
          });
        });     
        </script>
       
    </head>
    <body style="background-color: white;">
        <div class="container-fluid">
           <div class="row">
             <div class="col-md-12" style="margin-top: 20px;">
                <div><a href="plataforma_usuario.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-list"> MENU</span></button></a> </div>
             </div>
           </div>
            <div class="row">
                <div class="col-md-12" align="center" style="font-size: 50px; margin-top: 10px; ">
                  <legend >MODULO TRANSACCIONAL </legend>
                </div>		
            </div>
 		
            <div class="row">
                <div class="col-md-4">  			
                </div>
                <div class="col-md-4 " style="margin-top: 20px; background-color: white;">
                    <form name="formulario" id="formulariologin" method="post" action="procesar_transaccion.php" >
                        <div align="center">
                           <img src="img/user.png" alt="" width="50" height="50">
                        </div> 
                           <legend align="center">Ingrese Los Datos</legend> 

                        <div class="form-group">
                            <label>Saldo Actual:</label> 
                            <input type="text"   id="saldoinicial" class="form-control solo-numero " name="inicial" value="<?php echo $datos["saldo"]; ?>"  readonly="false" required>
                        </div>
                         <div class="form-group">
                            <label>Consignar:</label> 
                            <input type="text" class="form-control solo-numero consignar" name="consignacion" placeholder="Ingrese su nombre de usuario" required>
                        </div>
                         <div class="form-group">
                            <label>Retirar:</label> 
                            <input type="text" class="form-control solo-numero retirar" name="retiro" placeholder="Ingrese el saldo a retirar" required>
                        </div>
                      <div class="form-group">
                            <label>Saldo final:</label> 
                            <input type="text" readonly="false" class="form-control final" name="final" placeholder="" required>
                       </div>                                               
			            <div align="center">
			            	<span id="mensaje"></span>
			            </div>
                    </form>
                     <div class="row" style="margin-bottom: 15px;" align="center">
                                <button class="btn btn-success" onclick="procesar();">Realizar Transaccion</button>
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