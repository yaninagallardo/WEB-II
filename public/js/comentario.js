"use strict";
document.addEventListener("DOOMContentLoaded",inicio);

function inicio(){
    document.querySelector("form-comentario").addEventListener('submit',addComentario);
    let app = new Vue({
        el: "#comentario",
        data: {
            subtitle: "Ingrese Su Comentario",
            comentario: [], 
            auth: true
        }
    });

    function getComentario(){
        fetch("api/comentario")
        .then(response=>response.json)
        .then(comentario=>{app.comentario=comentario;})
        .catch(error=>console.log(error));
    }

    function addComentario(e){
        e.preventDefault();
        let data={
            comentario: document.querySelector("input[name=comentario]").value,
            puntaje:document.querySelector("input[name=puntaje]")
        }
        fetch("api/comentario",{
            method:'POST',
            headers:{'content-type':'application/json'},
            body:JSON.stringify(data)
        })
        .then(response=>{
            getComentario();
        })
        .catch(error=>console.log(error));
    }
    getComentario();
}