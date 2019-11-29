"use strict";
document.addEventListener("DOMContentLoaded", inicio);

function inicio() {
    document.querySelector("#form-comentario").addEventListener('submit', addComentario);
    document.querySelector(".btn-eliminar").addEventListener('click', deleteComentario);

    let app = new Vue({
        el: "#template-vue-comentarios",
        data: {
            subtitle: "Ingrese Su Comentario",
            comentarios: [],
            auth: true,
            promedio: 0,
            admin: false,
        }
    });

    function calcularPromedio() {
        let prom = 0;
        let cont = 0;
        app.comentarios.forEach(element => {
            prom = prom + Number.parseInt(element.puntaje);
            cont++;
        });

        prom = prom / cont;
        app.promedio = prom;
    }

    function getComentario() {
        let id_serie = document.querySelector("input[name=serie]").value;
        
        console.log(id_serie);

        fetch("api/comentario/" + id_serie)
            .then(response => response.json())
            .then(comentarios => {
                if (typeof comentarios === 'object' ) { //esta bien usar typeof????
                    app.comentarios = comentarios;
                    calcularPromedio();
                    isAdmin();
                }
            })
            .catch(error => console.log('Error en get de la api ' + error + ' app ' + app.comentarios));

    }

    function isAdmin(){
        let admin = document.querySelector("input[name=admin]").value;

        if(admin == 1){
            app.admin = true;
        }
    }

    function addComentario(e) {
        e.preventDefault();

        let data = {
            comentario: document.querySelector("textarea[name=comentario]").value,
            puntaje: document.querySelector("input[name=puntaje]").value,
            fecha: getFechaActual(),
            id_usuario: document.querySelector("input[name=usuario]").value,
            id_serie: document.querySelector("input[name=serie]").value
        }
        console.table(data);
        fetch('api/comentario', {
            method: 'POST',
            headers: { 'content-type': 'application/json' },
            body: JSON.stringify(data)
        })
            .then(response => {
                getComentario();
            })
            .catch(error => console.log("error addComentario js " + error));
    }
    function deleteComentario(id) {

        console.log(id);

        fetch('api/comentario/' + id, {
            method: 'DELETE',
            headers: { 'Content-Type': 'application/json' }
        })
            .then(function () {
                getComentarios();
            })
            .catch(error => console.log(error));
    }


    function getFechaActual() {
        let fechaActual = new Date();
        let dd = fechaActual.getDate();
        let mm = fechaActual.getMonth() + 1;
        let yyyy = fechaActual.getFullYear();

        return yyyy + '/' + mm + '/' + dd;
    }
    getComentario();
}