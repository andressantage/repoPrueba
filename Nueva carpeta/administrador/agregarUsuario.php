<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT *  FROM easy";
    $query=mysqli_query($con,$sql);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caddie</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/formulario.css">
</head>
<body style="text-align: center">
	<header>
		<div class="header">
			<h1>encoglis - ImagineMagic</h1>
			</div>
		<nav>
			<ul>
				<li><a href="index.php">INICIO</a></li>
				<li class="principal">
					<a href="#">USUARIO</a>
					<ul>
						<li><a href="caddie.php">Crear usuario</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>

    <div class="Base-formulario" style="text-align: center">
        <div class="formulario">
       
		<h2 class="titulo-f"> DATOS DEL USUARIO</h2>
        
		<form name="form" method="POST" action="insertar.php">
          <label>Nombre:
              <br/>
              <input name="nombre" type="text" placeholder="-" /> </label>
              <br/>
            <label>Correo:
              <br/>
              <input name="correo" type="email" placeholder="-"/> </label>
            <br/>
            <label>Celular: 
              <br/>
              <input name="numero" type="number" placeholder="-"/></label>
              <br/>
            <input type="submit" name="Registrar" value="Registrar"/>
        </form>

		</div>
	</div>

</body>
</html>