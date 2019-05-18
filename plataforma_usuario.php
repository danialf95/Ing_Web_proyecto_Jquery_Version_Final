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
    <body style="background-color: 	white;">
        <div class="container-fluid">
           
            <div class="row">
                <div class="col-md-12" align="center" style="font-size: 50px; margin-top: 80px; ">
                  <legend >MODULO PARA USUARIOS</legend>
                </div>		
            </div>
 		 <div class="row">
                <div class="col-md-6" align="center">  			
                   <img src="img/money.png" alt="" width="" height="">
                   <div style="margin-top: 5px;">
                     <a href="crear_usuario.php"><button class="btn btn-info" disabled><span class="glyphicon glyphicon-user"></span> Consultar Saldo</button></a>
                   </div>
                </div>
                <div class="col-md-6" align="center">              
                    <img src="img/get-money.png" alt="" width="" height="">
                   <div style="margin-top: 5px;">
                   <a href="formulario_transaccion.php"><button class="btn btn-success"><span class="glyphicon glyphicon-usd"> Realizar Transaccion</button></a>
                   </div>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-12" align="center">
            		  <img src="img/receipt.png" alt="" width="" height="">
                   <div style="margin-top: 5px;">
                   <a href="rango_fechas.php"><button class="btn btn-warning"><span class="glyphicon glyphicon-ok"> Ver Movimientos</button></a>
                   </div>
            	</div>
            </div>


 	</div>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>