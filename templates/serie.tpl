{include file="head.tpl" }
{include file="logo.tpl"}
 {* 
        INFORMACION DE UN ITEM
 *}
  
    <h1 class="titulo tit-info">{$ser->nombre}</h1>

    {if $ser->img != null}
        <img src={$ser->img} alt={$ser->nombre} class="imagen-infoSerie">
    {else}
        <img src="public/images/img-noDisponible.png" alt="Imagen no disponible">
    {/if}
    <iframe class="video-iframe" width="560" height="315" src="https://www.youtube.com/embed/yXvyJDqqQec" frameborder="0" 
    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
    <label class="font">Actor principal: {$ser->actor_principal}</label>
    <h2 class="titulo">Sinopsis</h2>
    <p class="font">{$ser->sinopsis}</p>

{include file="ver_comentarios.tpl"}
{include file="footer.tpl"}
