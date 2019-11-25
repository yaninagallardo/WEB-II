{literal}
<section id="template-vue-comentarios">
    <div class="box-comentarios d-flex flex-column bd-highlight mb-3">
        <label class="titulo-box">Comentarios</label>
        <label class="valoracion">Valoración promedio: {{promedio}}</label>
        <div class="comentario border border-primary media" v-for="comentario in comentarios">
            <div class="div-media media-body">
            <a v-if="admin" id="btn-eliminar">
                <button class="btn-eliminar" value="{{comentario.id_comentario}}">ELIMINAR</button>
            </a>
                <div class="box-estrella" >
                        <label class="estrella"> {{ comentario.puntaje}}★</label>
                    </div>
                </div>
                <label class="info-comentario">{{ comentario.fecha}}</label>
                <div class="coment-user" >
                    <label class="subtitulos ans mt-0">Usuario:</label>
                    <label class="info-comentario"> {{ comentario.nombre }} </label>
                </div>
                
                <label class="subtitulos ans mt-0">Comentario: </label>
                <p class="info-comentario"> {{ comentario.comentario }} </p>
            </div>
        </div>
    </div>
</section>
{/literal}