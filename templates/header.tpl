<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
        <link rel="stylesheet"  type="text/css" href="./public/css/style.css?3.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>WikiSeries</title>
    </head>
    <body>
        <header>
            <a href="series">
                <img src="./public/images/logo1.png" class="logo">
            </a>
        <nav class="navbar-default">
            <ul class="nav nav-pills">
            {foreach from=$lista_generos item=gen}
                {* REVISAR PARA QUE MUESTRE UN SOLO TIPO *}
                <li>  
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">{$gen->nombre}</a>
                    <div class="dropdown-menu ">
                        <a class="dropdown-item" id="categoriaNav" href=""></a>
                    </div>
                </li>
            {/foreach}
            </ul>  
        </nav>
    </header>
    <body>
        