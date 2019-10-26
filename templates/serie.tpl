 {include file="head.tpl" }
    <div>
    {foreach from=$serie item=ser}
        <h1>{$ser->nombre}</h1>
        <img src="../public/images/arrow-portada-horizontal.png">
        <section>
            <h2>{$ser->actor_principal}</h2>
            <h3>Sinopsis</h3>
            <p>{$ser->sinopsis}</p>
        </section>
    {/foreach}
    </div>
{include file="footer.tpl"}
