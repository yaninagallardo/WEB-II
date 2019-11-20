{if isset($user)}
    <a href="logout">
        <button class="btn-logout">Salir</button>
    </a>
{else}
    <a href="login">
        <button type="button" class="btn-iniciarsesion">Iniciar Sesión</button>
    </a>
{/if}