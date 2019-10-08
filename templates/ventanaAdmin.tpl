<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>WikiSeries</title>
        <link rel="stylesheet" href="public/css/style.css?2.0">
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
        <table class="table-admin">
            <thead>
                <tr>
                    <th>Serie</th>
                    <th>Sinopsis</th>
                    <th>Actor</th>
                    <th>Actor</th>
                    <th>Actor</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            {foreach from=$lista_series item=serie}
                <tr id="{$serie->id}">
                    <td>{$serie->nombre}</td>
                    <td>{$serie->sinopsis}</td>
                    <td>{$serie->arctor1}</td>
                    <td>{$serie->actor2}</td>
                    <td>{$serie->actor3}</td>
                    <td>
                        <a href="editar/{$serie->id}">
                            <button type="button" class="btn-admin">Editar</button>
                        </a>
                    </td>
                    <td>
                        <a href="borrar/{$serie->id}">
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
                <input type="text" name="actor1" placeholder="Actor">
                <input type="text" name="actor2" placeholder="Actor">
                <input type="text" name="actor3" placeholder="Actor">
                <input type="submit" value="Insertar" class="btn-ingreso">
            </form>
        </div>

{include file="footer.tpl"}