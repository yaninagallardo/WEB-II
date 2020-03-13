{* comentarios si no hay en la bd trae mensaje, por lo tanto no toma null *}
<input class="hidden-windows" value={$user->admin} name=admin>

<section id="template-vue-comentarios">
    <div class="box-comentarios d-flex flex-column bd-highlight mb-3">
        <label class="titulo-box">Comentarios</label>
        {literal}
        <label class="valoracion">Valoración promedio: {{promedio}}</label>
        <div class="comentario border border-primary media"  v-for="comentario in comentarios">
            <div class="div-media media-body">
            
                <button class="btn-eliminar" v-if="admin" v-on:click="deleteComentario({{comentario.id_comentario}})">ELIMINAR</button>
           
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
{/literal}
</section>
