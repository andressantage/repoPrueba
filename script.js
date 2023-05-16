const id='NWDEWLu1aEo'
const canal='UC4EHNmruWnhyVGoGLJHCxgA'
const url1 = 'https://youtube138.p.rapidapi.com/video/comments/?id='+id+'&hl=en&gl=US';//comentarios
const url2 = 'https://youtube138.p.rapidapi.com/video/details/?id='+id+'&hl=en&gl=US';//del video
const url3 = 'https://youtube138.p.rapidapi.com/video/details/?id='+id+'&hl=en&gl=US';//descripcion del video
const url4 = 'https://youtube138.p.rapidapi.com/channel/videos/?id'+id+'hl=en&gl=US';//videos del canal
const url5 = 'https://youtube138.p.rapidapi.com/video/related-contents/?id='+id+'&hl=en&gl=US';//videos relacionados

const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '4b646bcb21msh0c0025e00925973p14199bjsne233f681bf88',
		'X-RapidAPI-Host': 'youtube138.p.rapidapi.com'
	}
};

let vida=''
async function fetchData1() {
    try {
    const response = await fetch(url1, options);
    const result = await response.json();
    for(let i=0;i<3;i++){
      vida+=`
      <div class="s5">
        <img id="a2" src="${result.comments[i].author.avatar[1].url}" alt="">
        <div class="s6">
            <h4>${result.comments[i].author.title}</h4>
            <h2>${result.comments[i].content}</h2>
        </div>                  
      </div>
        
        `
    }
    const agregar=document.getElementById("coment")
    agregar.innerHTML=vida //comentarios agregados
    /* const tituloVideo=document.getElementById("a4")
    const compo2=document.getElementById("a2")
    const compo3=document.getElementById("a3") */
    /* compo1.innerHTML=result.comments[0].content //comentario
    compo2.src=result.comments[0].author.avatar[2].url //imagen del autor
    compo3.innerHTML=result.comments[0].author.title //nombre del autor del comentario */
  } catch (error) {
    console.error(error);
  }
}
fetchData1()
//
async function fetchData2() {
    try {
    const response = await fetch(url2, options);
    const result = await response.json();
    const tituloVideo=document.getElementById("a1")
    const iconoCanal=document.getElementById("a2")
    const nombreCanal=document.getElementById("a3")
    tituloVideo.innerHTML=result.title //titulo del video
    iconoCanal.src=result.author.avatar[2].url //icono del canal
    nombreCanal.innerHTML=result.author.title //nombre del canal
  } catch (error) {
    console.error(error);
  }
}
fetchData2()
////
async function fetchData3() {
    try {
    const response = await fetch(url3, options);
    const result = await response.json();
    const descripcionVideo=document.getElementById("d1")
    /* const compo1=document.getElementById("a1")
    const compo2=document.getElementById("a2")
    const compo3=document.getElementById("a3") */
   /*  const compo4=document.getElementById("a4") */
   descripcionVideo.innerHTML=result.description //descripcion del video
   /*  console.log(result.description) */
   /*  compo2.src=result.contents[0].video.title //imagen del autor
    compo3.innerHTML=result.comments[0].author.title //nombre del autor del comentario */
  } catch (error) {
    console.error(error);
  }
}
fetchData3()
///////////////canal
/* async function fetchData4() {
    try {
    const response = await fetch(url4, options);
    const result = await response.json();
    const compo1=document.getElementById("a1")
    const compo2=document.getElementById("a2")
    const compo3=document.getElementById("a3")
    const compo4=document.getElementById("a4")
    compo4.src='https://www.youtube.com/embed/'+result.contents[24].video.videoId //muestra videos relacionados
  */  /*  compo2.src=result.contents[0].video.title //imagen del autor
    compo3.innerHTML=result.comments[0].author.title //nombre del autor del comentario */
/*   } catch (error) {
    console.error(error);
  }
}
fetchData4() */
/////////////////
async function fetchData5() {
    try {
    const response = await fetch(url5, options);
    const result = await response.json();
    const i1=document.getElementById("i1")
    const i2=document.getElementById("i2")
    const i3=document.getElementById("i3")
    /* i1.innerHTML=result.contents[5].video.title //titulo video */
    i1.src='https://www.youtube.com/embed/'+result.contents[2].video.videoId
    i2.src='https://www.youtube.com/embed/'+result.contents[3].video.videoId
    i3.src='https://www.youtube.com/embed/'+result.contents[5].video.videoId //muestra videos relacionados
   /*  compo2.src=result.contents[0].video.title //imagen del autor
    compo3.innerHTML=result.comments[0].author.title //nombre del autor del comentario */
  } catch (error) {
    console.error(error);
  }
}
fetchData5()