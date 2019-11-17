<div class="box-comentarios d-flex flex-column bd-highlight mb-3"  >
    <label class="titulo-box">Comentarios: </label>
    {foreach from= $lista_comentarios item=comentario}
    {* <div>
        <label class="text-warning">Fecha:</label>
        {if $comentario->fecha != null}
        <label class="text-primary">{$comentario->fecha}</label>
        {/if}

        <label class="text-warning">Usuario:</label>
        <label class="text-primary">{$comentario->nombre}</label>

        <label class="text-warning">Puntaje:</label>
        <label class="text-primary">{$comentario->puntaje}</label>

        <label class="text-warning">Comentario: </label>
        <p class="text-primary">{$comentario->comentario}</p>
    </div> *}

    <div class="comentario border border-primary media">
        <div class="div-media media-body">
        <div class="box-estrella">
                {for $let=1 to $comentario->puntaje}
                    <label class="estrella">★</label>
                {/for}
            </div>
            <div class="coment-user">
                <label class="subtitulos ans mt-0">Usuario:</label>
                <label class="info-comentario">{$comentario->nombre}</label>
            </div>

            <label class="info-comentario">{$comentario->fecha}</label>
           
            <label class="subtitulos ans mt-0" >Comentario: </label>
            <p class="info-comentario">{$comentario->comentario}</p>
        </div>
    </div>
    {/foreach}
</div>
