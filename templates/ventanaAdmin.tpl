{include file="head.tpl"}
{include file="logo.tpl"}       
{include file="session.tpl"}
    <a  href="listausuarios" class="nav-link">
        <button class="btn btn-danger">Lista de usuarios</button>
        </a>
        <label class="subti-perfil">Perfil Administrador de {$user->nombre}</label>       

        {* Lista series *}
        <table class="table-admin">
            <thead>
                <tr>
                    <th colspan="7">Listado de Series</th>
                </tr>
                <tr class="fila-indicador">
                    <th>Serie</th>
                    <th>Sinopsis</th>
                    <th>Actor</th>
                    <th>Imagen</th>
                    <th>Categoria</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            {foreach from=$lista_series item=serie}
                <tr id={$serie->id_serie}>
                    <td>{$serie->nombre}</td>
                    <td>{$serie->sinopsis}</td>
                    <td>{$serie->actor_principal}</td>
                    <td>{$serie->img}</td>
                    <td id={$serie->id_genero}>{$serie->nombreGen}</td>
                    <td>
                        <a>
                            <button type="button" class="btn-admin btnEditarSer-js" id={$serie->id_serie}>Editar</button>
                        </a>
                    </td>
                    <td>
                        <a href="borrarSerie/{$serie->id_serie}">
                            <button type="button" class="btn-admin">Borrar</button>
                        </a>
                    </td>
                </tr>
            {/foreach}
            </tbody>
        </table>
        
        {* Lista Generos *}
        <table class="table-admin">
            <thead>
                <tr>
                    <th colspan="3">Listado de Categorias</th>
                </tr>
            </thead>
            <tbody>
            {foreach from=$lista_generos item=gen}
                <tr id={$gen->id_genero}>
                    <td class="nombre-gen" >{$gen->nombreGen}</td>
                    <td>
                    <a>
                        <button type="button" class="btn-admin btnEditar-js" id={$gen->id_genero}>Editar</button>
                    </a>
                    </td>
                    <td>
                        <a href="borrarGenero/{$gen->id_genero}">
                            <button type="button" class="btn-admin">Borrar</button>
                        </a>
                    </td>
                </tr>
            {/foreach}
            {include file="editarDatosSerie.tpl"}
            {include file="editarDatosGenero.tpl"}

                <tr>      {* INSERTAR NUEVO GENERO *}
                    <td colspan="3">
                        <form action="insertarGenero" method="POST">
                            <input type="text" name="nombre-gen" required>
                            <input type="submit" value="Insertar" class="btn-ingreso" >
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        
        
        <div class="box-nuevaserie">
            <label class="titulo-agregar">AGREGAR SERIE</label>
            
            {* INSERTAR SERIE *}
            <form action="insertarSerie" method="POST" class='form-nuevaserie' enctype="multipart/form-data" required >
                <input type="text" name="nombre" placeholder="Nombre" required>
                <textarea name="sinopsis" placeholder="Sinopsis" required></textarea>
                <input type="file" name="img" placeholder="Ingrese imagen">
                <input type="text" name="actor" placeholder="Actor" required>
                {* OPCIONES *}
                <select class="opciones" name="genero" required>
                 <option value="" disable>Seleccione una opción</option>
                {foreach from=$lista_generos item=gen}
                    <option value={$gen->id_genero}>{$gen->nombreGen}</option>
                {/foreach}
                </select>
                {if !empty($error)}
                    <label class="msj-error">{$error}</label>
                {/if}
                <input type="submit" value="Insertar" class="btn-ingreso">
            </form>
        </div>

        <script src="public/js/editarSerie.js"></script>
        <script src="public/js/editarGenero.js"></script>
{include file="footer.tpl"}