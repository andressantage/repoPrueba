<?php
include("conexion.php");
$con=conectar();

$numero=$_POST['numero'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];


$sql="INSERT INTO easy VALUES('$numero','$nombre','$correo')";
$query= mysqli_query($con,$sql);
?>

