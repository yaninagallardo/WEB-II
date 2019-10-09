{include file="header.tpl"}
<h1 class="titulo">{$serie->nombre}</h1>
<article>
     <section> 
        <img src="{$serie->img}">
            <div>
                <h2>Sinopsis</h2>
                    <p>{$serie->sinopsis}</p>
            </div>
    </section>
    <section>
        <div class="personajes">
            <h2 class="tituloActores">Actores</h2>
            <ul class="row">
                <li>
                    <p>{$serie->actor_principal}</p>
                </li>
            </ul>
        </div>
    </section>
</article>
{include file="footer.tpl"}