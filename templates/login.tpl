<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="./public/css/style.css?3.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>WikiSeries</title>
    </head>
    <body>
        <div class="box-login">
            <a href="series">
                <img src="./public/images/logo1.png" class="logo">
            </a>  
            
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