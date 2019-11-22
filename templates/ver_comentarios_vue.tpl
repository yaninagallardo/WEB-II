{literal}
<div class="box-comentarios d-flex flex-column bd-highlight mb-3"  >
        <label class="titulo-box">{{subtitle}}</label>
        <div class="comentario border border-primary media">
                <div class="div-media media-body">
                        <div class="box-estrella"   v-for="comentarios in comentario">
                            {for $let=1 to comentarios.puntaje}
                                <label class="estrella">★</label>
                            {/for}                                               
                        </div>
                        <div class="coment-user">
                            <label class="subtitulos ans mt-0">Usuario:</label>
                            <label class="info-comentario">{{comentarios.nombre}}</label>
                        </div>
                        <label class="info-comentario">{{comentarios.fecha}}</label>
                        <label class="subtitulos ans mt-0" >Comentario: </label>
                        <p class="info-comentario">{{comentarios.comentario}}</p>
                </div>
        </div>
</div>
{/literal}