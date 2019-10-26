<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>WikiSeries</title>
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <header>
        <a href="logout">
                <button class="btn-logout">Salir</button>
            </a>
            <a href="series">
                <img src="public/images/logo1.png" class="logo">
            </a>
            
        </header>
        <label class="subti-perfil">Perfil Administrador</label>

        {* Lista series *}
        <table class="table-admin">
            <thead>
                <tr>
                    <th>Serie</th>
                    <th>Sinopsis</th>
                    <th>Actor</th>
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
                    <td>{$serie->id_genero}</td>
                    <td>
                        <a href="editarSerie/{$serie->id_serie}">
                            <button type="button" class="btn-admin" class="btnEditar-js">Editar</button>
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
                    <th colspan="3">Categorias</th>
                </tr>
            </thead>
            <tbody>
            {foreach from=$lista_generos item=gen}
                <tr id={$gen->id_genero}>
                    <td class="nombre-gen" >{$gen->nombreGen}</td>
                    <td>
                    <a>
                        <button type="button" class="btn-admin" id={$gen->id_genero}>Editar</button>
                    </a>
                    </td>
                    <td>
                        <a href="borrarGenero/{$gen->id_genero}">
                            <button type="button" class="btn-admin">Borrar</button>
                        </a>
                    </td>
                </tr>
                {include file="editarDatos.tpl"}
            {/foreach}

            {include file="editarDatos.tpl"}

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
            <form action="insertarSerie" method="POST" class='form-nuevaserie' required>
                <input type="text" name="nombre" placeholder="Nombre" required>
                <textarea name="sinopsis" placeholder="Sinopsis" required></textarea>
                <input type="text" name="url_img" placeholder="Dirección de imagen">
                <input type="text" name="actor" placeholder="Actor" required>

                {* OPCIONES *}
                <select class="opciones" name="genero" required>
                 <option value="" disable>Seleccione una opción</option>
                {foreach from=$lista_generos item=gen}
                    <option value={$gen->id_genero}>{$gen->nombreGen}</option>
                {/foreach}
                </select>

                <input type="submit" value="Insertar" class="btn-ingreso">
            </form>
        </div>

        <script src="public/js/editarGenero.js"></script>
{include file="footer.tpl"}