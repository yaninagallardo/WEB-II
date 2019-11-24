{literal}
<section id="template-vue-comentarios">
    <div class="box-comentarios d-flex flex-column bd-highlight mb-3">
        <label class="titulo-box">Comentarios</label>
        <div class="comentario border border-primary media" v-for="comentario in comentarios">
            <div class="div-media media-body">
                <div class="box-estrella" >
                        <label class="estrella" v-for="sa in comentario.puntaje">★</label>
                    </div>
                </div>
                <div class="coment-user" >
                    <label class="subtitulos ans mt-0">Usuario:</label>
                    <label class="info-comentario"> {{ comentario.nombre }} </label>
                </div>
                <label class="info-comentario">{{ comentario.fecha}}</label>
                <label class="subtitulos ans mt-0">Comentario: </label>
                <p class="info-comentario"> {{ comentario.comentario }} </p>
            </div>
        </div>
    </div>
</section>
{/literal}