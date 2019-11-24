<?php
    require_once("Router.php");
    require_once("./api/ComentarioApiController.php");

    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    // recurso solicitado
    $resource = $_GET["resource"];

    // método utilizado
    $method = $_SERVER["REQUEST_METHOD"];

    // instancia el router
    $router = new Router();

    //ruteo comentario
    $router->addRoute("comentario", "GET", "ComentarioApiController", "getComentarios");
    $router->addRoute("comentario/:ID", "DELETE", "ComentarioApiController", "deleteComentario");
    $router->addRoute("comentario", "POST", "ComentarioApiController", "addComentario");
    $router->addRoute("comentario/:ID", "PUT", "ComentarioApiController", "updateComentario");

    // rutea
    $router->route($resource, $method);

?>