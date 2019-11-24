"use strict";
document.addEventListener("DOMContentLoaded", inicio);

function inicio() {
    document.querySelector("#form-comentario").addEventListener('submit', addComentario);

    let app = new Vue({
        el: "#template-vue-comentarios",
        data: {
            subtitle: "Ingrese Su Comentario",
            comentarios: [],
            auth: true,
            promedio: 0,
        }
    });

    function getComentario() {
        fetch("api/comentario")
            .then(response => response.json())
            .then(comentarios => {
                app.comentarios = comentarios;
            })
            .catch(error => console.log('Error en get de la api ' + error));
    }

    function addComentario(e) {
        e.preventDefault();
        
        let data = {
            comentarios: document.querySelector("textarea[name=comentario]").value,
            puntaje: document.querySelector("input[name=puntaje]").value,
            fecha: getFechaActual(),
            id_usuario: document.querySelector("input[name=usuario]").value
        }
        fetch("api/comentario", {
            method: 'POST',
            headers: { 'content-type': 'application/json' },
            body: JSON.stringify(data)
        })
            .then(response => {
                getComentario();
            })
            .catch(error => console.log(error));
    }


    function getFechaActual(){
        let fechaActual = new Date();
        let dd = fechaActual.getDate();
        let mm = fechaActual.getMonth()+1;
        let yyyy = fechaActual.getFullYear();

        return dd+'/'+mm+'/'+yyyy;
    }
    getComentario();
}