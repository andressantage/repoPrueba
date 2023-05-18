<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
<link rel="stylesheet" href="css/z.css">
 <script src="datos/adj.js" defer></script> 
 <script src="datos/igual.js" defer></script> 
</head>
<body>
<br>

<form method="POST" action="2.php">

<section>
<!-- palabra -->   
<div class="a1">
    <p class="fair-style-button" id="a1" onclick="esp()"></p>
</div>

<!-- imagen y audio -->   
<div class="contImg"><img id="k" src="" onclick="reproducirAudio()"/><audio id="audio" src="" autoplay></audio></div>

<!-- cuadro de escribir -->
<div class="cont"><input type="text" class="cont-input" /></div>

<!-- pronunciacion -->
<div class="container">
    <div class="bellow">
        <div class="cont"><h1 type="button" id="a2">_______</h1></div>
    </div>
</div>


<div class="cont">
  <button class="next" id="z1"></button>
  <button class="next" id="z2">0</button>
  <button class="next" id="z3"></button>
</div>

<!-- botones -->
<div class="cont">
  <input type="hidden" name="contenido_guardar" id="contenido_guardar">
  <input type="hidden" name="co" id="b4">
  <button type="submit" class="next" id="b1" name="boton" value="easy"></button>
  <button type="submit" class="next" id="b2" name="boton" value="medium">0</button>
  <button type="submit" class="next" id="b3" name="boton" value="hard"></button>
</div>
</section>
</form>

<div class="cont">
  <button id="j1" class="next"></button>
</div>

<div id="l1" class="cont">
  
</div>


<script>
var l1=document.getElementById('l1')
var j1=document.getElementById('j1')
j1.addEventListener("click",h1)
function h1(){
 l1.innerHTML=`
<form id="formulario" action="imagen/upload.php" method="post" enctype="multipart/form-data">
  <center>
      <input type="hidden" name="co" id="b8">
      <input type="file" name="image">
      <input class="a5" type="submit" value="Upload">
  </center>
</form>
 `
 var contenido = document.getElementById('a1').textContent;
  document.getElementById('b8').value = contenido;
}

// Validar que se haya seleccionado un archivo de imagen antes de enviar el formulario
document.getElementById('formulario').addEventListener('submit', function(event) {
  event.preventDefault();
    var fileInput = document.querySelector('input[type="file"]');
    if (fileInput.value === '') {
      event.preventDefault();
      alert('Please select a file.');
    }

    // Obtener el contenido de la etiqueta <p>
      
    // Asignar el contenido al campo oculto
       
        
    // Enviar el formulario
    this.submit();
});  
</script>
</body>
</html>
