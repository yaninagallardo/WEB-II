<?php
    require_once("Router.php");
    require_once("./api/GeneroApiController.php");
    require_once("./api/SerieApiController.php");
    require_once("./api/ComentarioApiController.php");
    require_once("./api/UsuarioApiController.php");

    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    // recurso solicitado
    $resource = $_GET["resource"];

    // método utilizado
    $method = $_SERVER["REQUEST_METHOD"];

    // instancia el router
    $router = new Router();

    //ruteo genero
    $router->addRoute("genero", "GET", "GeneroApiController", "getGeneros");
    $router->addRoute("genero/:ID", "GET", "GeneroApiController", "getGenero");
    $router->addRoute("genero/:ID", "DELETE", "GeneroApiController", "deleteGenero");
    $router->addRoute("genero", "POST", "GeneroApiController", "addGenero");
    $router->addRoute("genero/:ID", "PUT", "GeneroApiController", "updateGenero");

    //ruteo serie
    $router->addRoute("serie", "GET", "SerieApiController", "getSeries");
    $router->addRoute("serie/:ID", "GET", "SerieApiController", "getSerie");
    $router->addRoute("serie/:ID", "DELETE", "SerieApiController", "deleteSerie");
    $router->addRoute("serie", "POST", "SerieApiController", "addSerie");
    $router->addRoute("serie/:ID", "PUT", "SerieApiController", "updateSerie");

    //ruteo comentario
    $router->addRoute("comentario", "GET", "ComentarioApiController", "getComentarios");
    $router->addRoute("comentario/:ID", "GET", "ComentarioApiController", "getComentario");
    $router->addRoute("comentario/:ID", "DELETE", "ComentarioApiController", "deleteComentario");
    $router->addRoute("comentario", "POST", "ComentarioApiController", "addComentario");
    $router->addRoute("comentario/:ID", "PUT", "ComentarioApiController", "updateComentario");

    // rutea
    $router->route($resource, $method);

?>