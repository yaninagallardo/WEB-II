

<a href="login">
    <button type="button" class="btn-iniciarsesion">Iniciar Sesión</button>
</a>

{include file="header.tpl"}

<h1 class="titulo">Series Destacadas</h1>
<ul class="row">
    {foreach from=$lista_series item=serie}
        <li class="card text-white bg-info mb-3" class="margenImgIndex">
            <img class="card altura" src={$serie->url_img} alt="Card">
            <div class="card-body">
                <h5 class="card-title">{$serie->nombre}</h5>
                <a href="" class="btn btn-primary">Ver informacion</a>
            </div>
        </li>
    {/foreach}
</ul>

{include file="footer.tpl"}
