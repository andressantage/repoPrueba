<?php
// Conexión a la base de datos

$conexion = mysqli_connect("localhost:3307", "root", "123", "cont");

// Verificar la conexión
if (mysqli_connect_errno()) {
  echo "Error al conectar a la base de datos: " . mysqli_connect_error();
  exit();
}

// Obtener el contenido del campo oculto
$contenido = $_POST['contenido_guardar'];
$evento = $_POST['co'];

// Insertar el contenido en la tabla
$query = "INSERT INTO tabla (evento,contenido) VALUES ('$evento','$contenido')";
if (mysqli_query($conexion, $query)) {
  header("location:adj.php");/* echo "Contenido guardado correctamente."; */
} else {
  echo "Error al guardar el contenido: " . mysqli_error($conexion);
}
// Cerrar la conexión
mysqli_close($conexion);
?>
