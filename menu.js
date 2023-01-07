const menu = document.getElementById("responsiveMenu");
const secciones= document.getElementById("secciones");
menu.addEventListener('click',()=>{
    secciones.classList.toggle("secciones")
    secciones.classList.toggle("secciones2")

})