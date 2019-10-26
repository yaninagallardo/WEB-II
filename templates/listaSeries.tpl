{include file="head.tpl"}

{* lista series ordenadas por categoria y luego por nombre de serie *}
<h1 class="titulo">Lista De Series</h1>
        <table class="table-admin" >
        <thead>
            <tr>
            <th>Genero</th>
            <th>Titulo</th>
            <th>Sinopsis</th>
            <th>Actor</th>
            </tr>
        </thead>
        <tbody>
        {foreach from=$lista item=gen}
            <tr>
            <td>{$gen->nombreGen}</td>
            <td>{$gen->nombre}</td>
            <td>{$gen->sinopsis}</td>
            <td>{$gen->actor_principal}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>

{include file="footer.tpl"}