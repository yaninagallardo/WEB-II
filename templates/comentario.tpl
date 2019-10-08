<ul>
    {foreach from=$comentarios item=comentario}
        <li>
            <div>
                <label>{$comentario->nombre}</label>
                <label>{$comentario->temporada}</label>
                <label>{$comentario->capitulo}</label>
                <p>{$comentario->comentario}</p>
            </div>
        </li>
    {/foreach}
</ul>