{include file="head.tpl"}
{include file="logo.tpl"}

{* ESTA VENTANA HACE LO MISMO QUE serie.tpl (ELEGIR UNA Y TRABAJAR EN ESA) info de una serie
  - no toma css declarado en tpl head (en el resto de las tpl si lo toma)
  - al presionar en el logo en lugar de "/series" lleva a "/infoserie/series" (no existe esa URL) 
  - como tampoco toma la ubicacion de las imagenes, creo que podria ser un problema con la ruta de los 
  archivos, pero en el resto de la página si andan asi que quizas en este tpl o antes hay algo que da error en eso.
 *}
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