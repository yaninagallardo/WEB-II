 {include file="headEspecial.tpl" }
 {* info de una serie. llamada desde pág principal(ver_series) en btn ver información
  - problemas con el path, si como ruta a la imagen o css ponemos ../ =esta tpl pero no el resto
  y viceversa
 *}

    
    <h1 class="titulo tit-info">{$ser->nombre}</h1>

    {if $ser->img != null}
        <img src={$ser->img} alt={$ser->nombre} class="imagen-infoSerie">
    {else}
        <img src="public/images/img-noDisponible.png" alt="Imagen no disponible">
    {/if}

    <label class="font">Actor principal: {$ser->actor_principal}</label>
    <h2 class="font">Sinopsis</h2>
    <p class="font">{$ser->sinopsis}</p>

{include file="footer.tpl"}
