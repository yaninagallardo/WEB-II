     <header>
            {include file="logo.tpl"}
        <nav class="navbar-default">
            <ul class="nav nav-pills">
            {foreach from=$lista_generos item=gen}
                {* REVISAR PARA QUE MUESTRE UN SOLO TIPO *}
                <li> 
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">{$gen->nombreGen }</a>
                    <div class="dropdown-menu ">
                        <a class="dropdown-item" id="categoriaNav" href=""></a>
                    </div>
                </li>
            {/foreach}
                <li>
                    <a href="listaSerie" class="nav-link">Lista De series</a>
                </li>
            </ul>  
        </nav>
    </header>
        