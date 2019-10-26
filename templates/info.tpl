{include file="head.tpl"}
{include file="logo.tpl"}

{* info de una serie. llamada desde pág principal en btn ver información *}
{foreach from=$serie item=seri}
    <h1 class="titulo">{$seri->nombre}</h1>

    <img src={$seri->img}>
        <div>
            <h2>Sinopsis</h2>
            <p>{$seri->sinopsis}</p>
        </div>
    <div class="personajes">
        <h2 class="tituloActores">Actores</h2>
        <label>{$seri->actor_principal}</label>
    </div>
{/foreach}
{include file="footer.tpl"}