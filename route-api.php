<?php
require_once("Router.php");
require_once("./api/GeneroApiController.php");

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// recurso solicitado
$resource = $_GET["resource"];

// método utilizado
$method = $_SERVER["REQUEST_METHOD"];

// instancia el router
$router = new Router();

// arma la tabla de ruteo
$router->addRoute("genero", "GET", "GeneroApiController", "getGeneros");
$router->addRoute("genero/:ID", "GET", "GeneroApiController", "getGenero");
$router->addRoute("genero/:ID", "DELETE", "GeneroApiController", "deleteGenero");
$router->addRoute("genero", "POST", "GeneroApiController", "addGenero");
$router->addRoute("genero/:ID", "PUT", "GeneroApiController", "updateGenero");


// rutea
$router->route($resource, $method);

?>