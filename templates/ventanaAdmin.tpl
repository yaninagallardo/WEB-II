<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>WikiSeries</title>
        <link rel="stylesheet" href="public/css/style.css?3.0">
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
                <tr id="{$serie->id}">
                    <td>{$serie->nombre}</td>
                    <td>{$serie->sinopsis}</td>
                    <td>{$serie->actor_principal}</td>
                    <td>{$serie->id_genero}</td>
                    <td>
                        <a href="editar/{$serie->id_serie}">
                            <button type="button" class="btn-admin">Editar</button>
                        </a>
                    </td>
                    <td>
                        <a href="borrar/{$serie->id_serie}">
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
                <tr id="{$gen->id_genero}">
                    <td>{$gen->nombre}</td>
                    <td>
                        <a href="editar/{$gen->id_genero}">
                            <button type="button" class="btn-admin">Editar</button>
                        </a>
                    </td>
                    <td>
                        <a href="borrar/{$cap->id_genero}">
                            <button type="button" class="btn-admin">Borrar</button>
                        </a>
                    </td>
                </tr>
            {/foreach}
            </tbody>
        </table>
        
        <div class="box-nuevaserie">
            <label class="titulo-agregar">AGREGAR SERIE</label>
            <form action="insertarSerie" method="post" class='form-nuevaserie'>
                <input type="text" name="nombre" placeholder="Nombre">
                <textarea name="sinopsis" placeholder="Sinopsis"></textarea>
                <input type="text" name="url_img" placeholder="Dirección de imagen">
                <input type="text" name="actor" placeholder="Actor">
                <select>
                 <option value="">Seleccione una opción</option>
                {foreach from=$lista_generos item=gen}
                    <option value="{$gen->id_genero}" name="genero">{$gen->nombre}</option>
                {/foreach}
                </select>
                <input type="submit" value="Insertar" class="btn-ingreso">
            </form>
        </div>

{include file="footer.tpl"}