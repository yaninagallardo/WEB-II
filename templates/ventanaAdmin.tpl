
<table>
    <thead>
        <tr>
            <th>Serie</th>
            <th>Sinopsis</th>
            <th>Actor</th>
            <th>Actor</th>
            <th>Actor</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$lista_series item=serie}
        <tr>
            <td>{$serie->nombre}</td>
            <td>{$serie->sinopsis}</td>
            <td>{$serie->arctor1}</td>
            <td>{$serie->actor2}</td>
            <td>{$serie->actor3}</td>
        </tr>
    {/foreach}
        
    </tbody>
</table>
<a href="insertarSerie">
    <button type="button" class="btn-admin">Nueva Serie</button>
</a>
<a href="insertarSerie">
    <button type="button" class="btn-admin">Editar Serie</button>
</a>
<a href="insertarSerie">
    <button type="button" class="btn-admin">Borrar Serie</button>
</a>

{include file="footer.tpl"}