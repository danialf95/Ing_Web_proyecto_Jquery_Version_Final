<?php 
session_start();
require 'connect.php';
if(!isset($_SESSION['username']) or !isset($_SESSION['tipo']) or $_SESSION['tipo']!=1)
{
  header('location:index.html');
} 
else
{
$fecha_inicio=$_POST['fecha_inicio'];
$fecha_fin=$_POST['fecha_fin'];   
$fecha1=strtotime($fecha_inicio);
$rango1=date('Y-m-d',$fecha1);
$fecha2=strtotime($fecha_fin);
$rango2=date('Y-m-d',$fecha2);
$username=$_SESSION['username'];
$consulta=mysqli_query($conexion,"SELECT * from movimientos m  where username='$username' and fecha between '$rango1' and '$rango2'");


/*generacion pdf*/
if(isset($_POST['create_pdf'])){
    $rango1=$_POST['fecha_inicio'];
    $rango2=$_POST['fecha_fin'];
    require_once('tcpdf/tcpdf.php');
   $consulta2=mysqli_query($conexion,"SELECT * from movimientos m  where username='$username' and fecha between '$rango1' and '$rango2'");
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
    
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('CalidadSoftware2017');
    $pdf->SetTitle($_POST['reporte_name']);
    
    $pdf->setPrintHeader(false); 
    $pdf->setPrintFooter(false);
    $pdf->SetMargins(2, 2, 2, false); 
    $pdf->SetAutoPageBreak(true, 20); 
    $pdf->SetFont('Helvetica', '', 10);
    $pdf->addPage();

    $content = '';
    
    $content .= '
        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align:center;">'.$_POST['reporte_name'].'</h1>
        
      <table border="1" cellpadding="7">
        <thead>
          <tr>
                                <th>FECHA</th>
                                <th>HORA</th>
                                <th>ID TRANSACCION</th>                                 
                                <th>RETIRA</th>
                                <th>CONSIGNA</th>
                                <th>VALOR TRANSACCION</th>
                                <th>SALDO INICIAL</th>
                                <th>SALDO FINAL</th>
                                
          </tr>
        </thead>
    ';
    
    
    while ($variable=mysqli_fetch_array($consulta2)) { 
     if($variable['retiro']=='SI'){  $color= '#FAEBD7'; }else{ $color= '#F0F8FF'; }         
    $content .= '
        <tr bgcolor="'.$color.'" >
                                        <td>'.$variable['fecha'].'</td>
                                        <td>'.$variable['hora'].'</td>
                                        <td>'.$variable['idTransaccion'].'</td>                                        
                                        <td>'.$variable['retiro'].'</td>
                                        <td>'.$variable['consignacion'].'</td>
                                        <td>'.$variable['valortransaccion'].'</td>
                                        <td>'.$variable['saldoinicial'].'</td>
                                        <td>'.$variable['saldofinal'].'</td> 
        </tr>
    ';
    }
    
    $content .= '</table>';
    
    $content .= '
        <div class="row padding">
            <div class="col-md-12" style="text-align:center;">
                <span>Pdf Creator </span><a href="http://www.aulacloud.com">By DanielAlfaro_CalidadSoftware</a>
            </div>
        </div>
        
    ';
    
    $pdf->writeHTML($content, true, 0, true, 0); 
    $pdf->lastPage();
    $pdf->output('Reporte.pdf','D');

}

/*-------------------------*/

if(mysqli_num_rows($consulta)>=1)
{
	$var="verdadero";
} 
else
{
echo " <div align=\"center\" style=\"background-color: red;\"><legend >Error no existen datos para este rango de fechas</legend></div>";
echo"<script> alert('POR FAVOR NO GENER EL PDF SALDRA ERROR DEBIDO A QUE NO HAY INFORMACION ');
             
</script> ";
}
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Movimientos</title>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
                   <!-- Latest compiled and minified CSS -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       <script type="text/javascript" src="js/loginverificacion.js"></script>
      
      
    </head>
    <body style="background-color:     ">
        <div class="container-fluid">
           <div class="row" >
             <div class="col-md-12" style="margin-top: 20px;">
                <div><a href="plataforma_usuario.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-list"> MENU</span></button></a> </div>
             </div>
           </div>
            <div class="row">
                <div class="col-md-12" align="center" style="font-size: 50px; margin-top: 10px; ">

                  <legend >LISTADO MOVIMIENTOS</legend>
                </div>		
            </div>
 		
            <div class="row">
                <div class="col-md-12">  
                <table class="table table-striped table-bordered">
                            <thead style="text-align: center;">
                                <th>FECHA</th>
                                <th>HORA</th>
                                <th>ID TRANSACCION</th>                                 
                                <th>RETIRO</th>
                                <th>CONSIGNACION</th>
                                <th>VALOR TRANSACCION</th>
                               <th>SALDO INICIAL</th>
                                <th>SALDO FINAL</th>
                                
                             </thead>
                               <tbody style="background-color: #83F913; ">
                                <?php 
                                 while ($variable=mysqli_fetch_array($consulta)) {
                                    # code...  
                                                                                                                                 
                                    echo "<tr>"; 
                                       echo "<td>".$variable['fecha']."</td>";
                                       echo "<td>".$variable['hora']."</td>";
                                        echo "<td>".$variable['idTransaccion']."</td>";                                         
                                        echo "<td>".$variable['retiro']."</td>"; 
                                        echo "<td>".$variable['consignacion']."</td>";
                                        echo "<td>".$variable['valortransaccion']."</td>"; 
                                        echo "<td>".$variable['saldoinicial']."</td>";
                                        echo "<td>".$variable['saldofinal']."</td>";                                      
                                    echo "</tr>";
                                     }           
                                    
                                     ?>
                                      </tbody>
                                </table>

 			
                </div>
            </div>

            <div class="row"> 	
             <div class="col-md-12" align="right" style="padding-right: 50px;">
                <form  name="solicitud_pdf" method="post">
                    <input type="hidden" name="fecha_inicio" value="<?php echo $rango1 ;?>">
                    <input type="hidden" name="fecha_fin" value="<?php echo $rango2 ;?>">
                    <input type="hidden" name="reporte_name" value="Extracto Movimientos">
                    <input type="submit" id="generator_pdf" name="create_pdf" class="btn btn-danger pull-right" value="Generar PDF" >
                </form>
              </div>		
            </div>
 	</div>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
