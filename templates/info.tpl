{include file="header.tpl"}
<h1 class="titulo">{$serie->nombre}</h1>
<article>
     <section> 
        <img src="{$serie->url_img}">
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
                    <img src={$serie->url_actor1}>
                    <p>{$serie->actor1}</p>
                </li>
                <li>
                    <img src="{$serie->url_actor2}">
                    <p>{$serie->actor2}</p>
                </li>
                <li>
                    <img src="{$serie->url_actor3}">
                    <p>{$serie->actor3}</p>
                </li>
            </ul>
        </div>
    </section>
</article>
{include file="footer.tpl"}