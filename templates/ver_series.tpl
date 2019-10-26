

<a href="login">
    <button type="button" class="btn-iniciarsesion">Iniciar Sesión</button>
</a>

{include file="header.tpl"}

<h1 class="titulo">Series Destacadas</h1>
<ul class="row">
    {foreach from=$lista_series item=serie}
        <li class="card text-white bg-info mb-3" class="margenImgIndex" id={$serie->id_genero}>
        {if $serie->img != null}
            <img class="card altura" src={$serie->img} alt="Card">
            {else}
            <img class="card altura" src="public/images/img-noDisponible.png" alt="Imagen no disponible">
            {/if}
            <div class="card-body">
                <h5 class="card-title">{$serie->nombre}</h5>
                <a href="serie/{$serie->id_serie}" class="btn btn-primary">Ver informacion</a>
            </div>
        </li>
    {/foreach}
</ul>

{include file="footer.tpl"}
