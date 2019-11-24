{include file="head.tpl" }
{include file="logo.tpl"}
{include file="session.tpl"}
 {* 
        INFORMACION DE UN ITEM
 *}
  
    <h1 class="titulo tit-info">{$ser->nombre}</h1>

    {if $ser->img != null}
        <img src={$ser->img} alt={$ser->nombre} class="imagen-infoSerie">
    {else}
        <img src="public/images/img-noDisponible.png" alt="Imagen no disponible">
    {/if}
   
    <label class="font">Calificación promedio: {$porcentaje}</label>
    <label class="font">Actor principal: {$ser->actor_principal}</label>
    <h2 class="titulo">Sinopsis</h2>
    <p class="font">{$ser->sinopsis}</p> 


{include file="vue/ver_comentarios_vue.tpl"}
{include file="comentario.tpl"}
<script src="public/js/comentario.js"></script>
</body>
</html>
