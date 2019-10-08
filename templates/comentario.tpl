<ul>
    {foreach from=$comentarios item=comentario}
        <li>
            <div>
                <h5>{$comentario->nombre}</h5>
                <span>{$comentario->temporada}</span>
                <span>{$comentario->capitulo}</span>
                <p>{$comentario->comentario}</p>
            </div>
        </li>
    {/foreach}
</ul>