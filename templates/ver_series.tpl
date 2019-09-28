{include file="header.tpl"}
            {foreach from=$lista_series item=serie}
                {* <strike><li>{$tarea->titulo}: {$tarea->descripcion}</li></strike>
            {else}
                <li>{$tarea->titulo}: {$tarea->descripcion} - <a href='finalizar/{$tarea->id}'>Finalizar</a> - <a href='borrar/{$tarea->id}'>Borrar</a></li>
            {/if} *}

                <table>
                    <tr>
                        <td>{$serie->nombre}</td>
                    </tr>
                </table>
            {/foreach}
        </form>
    </body>
</html>
