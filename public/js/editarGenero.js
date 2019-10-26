"use strict"

let btnEdit = document.querySelectorAll(".btn-admin");
for(let i=0; i<btnEdit.length;i++){
    btnEdit[i].addEventListener("click", function (){
        let tds = btnEdit[i].closest("tr").querySelector("td");
        let id = btnEdit[i].getAttribute("id");

        mostrarModal(tds, id);
    });
}


document.querySelector(".btn-cancelar").addEventListener("click", ocultarModal);

let form = document.querySelector("#box-editarGen");
/**   método que:
 * agrega a la ventana modal la clase show para hacerla visible
 * toma el nombre que posee el td indicador de género y lo pasa al input de la ventana
 * 
 */
 
function mostrarModal(tds, id) {
    form.classList.add("show-windows");
    form.classList.remove("hidden-windows");

    let nombre = tds.innerHTML;
    let editar = document.querySelector(".input-editar");
    editar.value= nombre;

    document.querySelector(".id-hidden").innerHTML = id;
    document.querySelector(".btn-guardar").setAttribute("value", id);
}

function ocultarModal(event){
    event.preventDefault();
    form.classList.add("hidden-windows");
    form.classList.remove("show-windows");
}




