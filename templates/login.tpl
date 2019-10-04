
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <base href='{$URL_LOGIN}'>
        <link rel="stylesheet" type="text/css" href='./public/css/style.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>WikiSeries</title>
    </head>
    <body>
    <div class='box-login'>
            <form action="iniciarSesion" method="post" class='form-login'>
                <input type="text" name="user" placeholder="Usuario">
                <input type="password" name="pass" placeholder="Contraseña">
                <input type="submit" value="Ingresar">
            </form>
    </div>

{include file="footer.tpl"}