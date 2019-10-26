<header>
    {include file="logo.tpl"}
    
    <nav class="navbar-default">
        <div class="btn-group" role="group" aria-label="Basic example">
            {foreach from=$lista_generos item=gen}
                <label class="btn btn-secondary">{$gen->nombreGen}</label>
            {/foreach} 
        </div>
    </nav>
</header>
        