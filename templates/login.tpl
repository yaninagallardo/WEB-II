{include file="head.tpl"}
<div class="box-login">
    {include file="logo.tpl"}
    
    <form action="iniciarSesion" method="post" class="form-login">
        <input type="text" name="user" placeholder="Usuario">
        <input type="password" name="pass" placeholder="Contraseña">
        {if !empty($error)}
            <label class="msj-error">{$error}</label>
        {/if}
        <input type="submit" value="Ingresar" class="btn-ingreso">
    </form>
</div>

{include file="footer.tpl"}