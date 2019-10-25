"use strict"

// BOTON EDITAR

let btnEditar = document.querySelector("#btnEditar-js");

btnEditar.addEventListener("click", function (event) {
    event.preventDefault();
    mostrarEditando(btnEditar);
});


// editar
function mostrarEditando(btn) {
    let id= btn.closest("tr").getAttribute("id");
    let tdsFila = btn.closest("tr").querySelectorAll("td");

    //  valor de td. antes de editar
    let nombreGenero = tdsFila[0].innerHTML;

    //remover valores de la fila para mostrar inputs
    for (let i = 0; i < 2; i++) {
        tdsFila[i].innerHTML = " ";
    }

    // //quita btnEditar y agrega div
    let div = divBtnAceptarCancelar(id);  //metodo//
    tdsFila[1].appendChild(div);

    // //input titulo       
    let inputNombre = document.createElement("input");
    inputNombre.type = "text";
    inputNombre.value = nombreGenero;//traer valor del input
    tdsFila[0].appendChild(inputNombre);
}
    /**
 * crea, da estilo (desde css) y función a los botones aceptar y cancelar contenidos en un div,
 * aparecen cuando se esta editando una fila.
 * Aceptar = oculta input de edicion y actualiza el servidor
 * cancelar = oculta inputs de edicion
 * @param {*} id 
 */
function divBtnAceptarCancelar(id) {

    let divBtns = document.createElement("div");
    let btnAceptar = document.createElement("button");
    btnAceptar.innerHTML = "Aceptar";
    btnAceptar.classList.add("btn");
    btnCancelar.setAttribute("id", id);

    btnAceptar.addEventListener("click", function () {
        let id = btnAceptar.getAttribute("id");
        // ocultarEditando(btnAceptar, id, true);
    });

    let btnCancelar = document.createElement("button");
    btnCancelar.innerHTML = "Cancelar";
    btnCancelar.classList.add("btn");
    btnCancelar.setAttribute("id", id);

    btnCancelar.addEventListener("click", function () {
        let id = btnCancelar.getAttribute("id");
        ocultarEditando(btnCancelar, id, false);
    });

    divBtns.appendChild(btnAceptar);
    divBtns.appendChild(btnCancelar);

    return divBtns;
}

/**
 * al presionar el boton aceptar/cancelar se ejecuta este metodo,
 * El cual oculta inputs de las celdas a editar y agrega sus valores del servicio 
 * Tambien remueve div con btns aceptar y cancelar y agrega boton editar.
 * 
 * Aceptar = envia true (actualiza el objeto en el servicio)
 * Cancelar = envia false
 * @param {*} btn 
 * @param {*} id 
 * @param {*} editarServicio boolean (actualizar o no el servicio)
 */
async function ocultarEditando(btn, id) {
    let tdsFila = btn.closest("tr").querySelectorAll("td");

    let div = tdsFila[1].querySelector("div");

    tdsFila[1].removeChild(div);
    tdsFila[1].appendChild(botonEditar(id));

    //inputs en las celdas
    let nombreGenero = tdsFila[0].querySelector("input");

    //titulo
    tdsFila[2].removeChild(tituloSerie);
    let texto2 = document.createTextNode(filaEditada.thing.titulo);
    tdsFila[2].appendChild(texto2);
   
}
