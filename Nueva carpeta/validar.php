<?php
$con=mysqli_connect("localhost:3307","root","123","cont");

$username=$_POST['username'];
$contra=$_POST['contra'];
session_start();
$_SESSION['username']=$username;

$consulta="SELECT*FROM usuario WHERE username='$username' and contra='$contra'";
$resultado=mysqli_query($con,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:principal.php");

}else{
    ?>
    <?php
    include("loginerror.php");

  ?>
 
  <?php
}
mysqli_free_result($resultado);
mysqli_close($con);
?>