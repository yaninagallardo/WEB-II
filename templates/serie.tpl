 {include file="head.tpl" }
 {include file="logo.tpl"}
 {* info de una serie. llamada desde pág principal(ver_series) en btn ver información
  - no toma css declarado en tpl head (en el resto de las tpl si lo toma)
  - al presionar en el logo en lugar de "/series" lleva a "/infoserie/series" (no existe esa URL) 
  - como tampoco toma la ubicacion de las imagenes, creo que podria ser un problema con la ruta de los 
  archivos, pero en el resto de la página si andan asi que quizas en este tpl o antes hay algo que da error en eso.
 *}
<section>
    
        <h1>{$ser->nombre}</h1>

        {if $ser->img != null}
            <img src={$ser->img} alt={$ser->nombre}>
        {else}
            <img src="public/images/img-noDisponible.png" alt="Imagen no disponible">
        {/if}

        <label>Actor principal: {$ser->actor_principal}</label>
        <h2>Sinopsis</h2>
        <p>{$ser->sinopsis}</p>
</section>
{include file="footer.tpl"}
