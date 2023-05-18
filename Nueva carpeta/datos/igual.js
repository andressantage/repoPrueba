
let lista=[...dic[1]]

function shuffle(array) {
  array.sort(() => Math.random() - 0.5);
}
shuffle(lista);
/* console.log(lista) */

var m=0;

var z1=document.getElementById("z1")
var z2=document.getElementById("z2")
var z3=document.getElementById("z3")

var b1=document.getElementById("b1")
var b2=document.getElementById("b2")
var b3=document.getElementById("b3")
var a1=document.getElementById("a1")
var k=document.getElementById("k")
var a2=document.getElementById("a2")
var audio=document.getElementById("audio")

let p=dic[1].indexOf(lista[m].trim())

k.src=dic[3][p]
audio.src="audio/pronunciation_en_"+dic[1][p].trim()+".mp3"
a1.innerHTML=dic[1][p].trim()

z1.addEventListener("click",d1)
z2.addEventListener("click",d1)
z3.addEventListener("click",d1)
function d1(){
    m++;
    if(m===(dic[1].length)){
        m=0
    }
    var p=dic[1].indexOf(lista[m].trim())
    k.src=dic[3][p]
    z2.innerHTML=m;
    a1.innerHTML=dic[1][p].trim()
    a2.innerHTML="_______"
    myString=dic[1][p].trim()
    if (myString.includes(" ")) {
        myString = myString.replace(/ /g, "_");
    }
    audio.src="audio/pronunciation_en_"+dic[1][p].trim()+".mp3"
}

b1.addEventListener("click",f1)
function f1() {
    document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar que el formulario se envíe

    // Obtener el contenido de la etiqueta <p>
    var contenido = document.getElementById('a1').textContent;

    // Asignar el contenido al campo oculto
    document.getElementById('contenido_guardar').value = contenido;

    // Asignar 
    var b1 = document.getElementById('b1').value;
    document.getElementById('b4').value = b1;

    // Enviar el formulario
    this.submit();
  });
}

b2.addEventListener("click",f2)
function f2() {
    document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar que el formulario se envíe

    // Obtener el contenido de la etiqueta <p>
    var contenido = document.getElementById('a1').textContent;

    // Asignar el contenido al campo oculto
    document.getElementById('contenido_guardar').value = contenido;

    // Asignar 
    var b2 = document.getElementById('b2').value;
    document.getElementById('b4').value = b2;

    // Enviar el formulario
    this.submit();
  });
}

b3.addEventListener("click",f3)
function f3() {
    document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar que el formulario se envíe

    // Obtener el contenido de la etiqueta <p>
    var contenido = document.getElementById('a1').textContent;

    // Asignar el contenido al campo oculto
    document.getElementById('contenido_guardar').value = contenido;

    // Asignar 
    var b3 = document.getElementById('b3').value;
    document.getElementById('b4').value = b3;

    // Enviar el formulario
    this.submit();
  });
}

////////////////////////////////////////////////////////////
function reproducirAudio() {
    var audio = document.getElementById("audio");
    audio.play();
}

function esp(){
    x=a1.innerHTML
    s1=dic[1].indexOf(lista[parseInt(z2.innerHTML)].trim())
    if(x===dic[1][s1].trim()){
        a1.innerHTML=dic[2][s1].trim()
    }else{
        a1.innerHTML=dic[1][s1].trim()
    }   
}

a2.addEventListener("click",f)
function f(){
    x=a2.innerHTML
    s2=dic[1].indexOf(lista[parseInt(z2.innerHTML)].trim())
    if(x==="_______"){
        a2.innerHTML=dic[4][s2]
    }else{
        a2.innerHTML="_______"
    }   
}