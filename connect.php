<?php
require('config.php');
$conexion= new mysqli($localhost,$username,$password,$database);
if(!isset($conexion)) 
{
header('location:index.html');  
}
?>