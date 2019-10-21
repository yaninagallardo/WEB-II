"use strict"

let btnEdit = document.querySelector(".btn-admin");
btnEdit.addEventListener("click", mostrarModal);
document.querySelector(".btn-cancelar").addEventListener("click", ocultarModal);


let form = document.querySelector("#box-editarGen");

function mostrarModal() {
    form.classList.add("show-windows");
    form.classList.remove("hidden-windows");

    let nombre=document.querySelector(".nombre-gen").innerHTML;
    let editar = document.querySelector(".input-editar");
    editar.value= nombre;

    document.querySelector(".id-hidden").innerHTML = btnEdit.getAttribute("id");
   
    
}

function ocultarModal(event){
    event.preventDefault();
    form.classList.add("hidden-windows");
    form.classList.remove("show-windows");
}





