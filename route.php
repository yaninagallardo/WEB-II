<?php
require_once "Controllers/SeriesController.php";
require_once "Controllers/LoginController.php";
require_once "Controllers/AdminController.php";

$action = $_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("URL_SERIES", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/series');
define("URL_LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
define("URL_LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');
define("URL_ADMIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/ventAdmin');

$controller = new SeriesController();

if($action == ''){
    $controller->GetSeries();
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);

        if($partesURL[0] == "series"){
            $controller->GetSeries();
        }elseif($partesURL[0] == "login") {
            $controllerUser = new LoginController();
            $controllerUser->GetLogin();
        }elseif($partesURL[0] == "iniciarSesion") {
            $controllerUser = new LoginController();
            $controllerUser->IniciarSesion();
        }elseif($partesURL[0] == "logout") {
            $controllerUser = new LoginController();
            $controllerUser->Logout();
        }elseif($partesURL[0] == "ventAdmin") {
            $controllerAdmin = new AdminController();
            $controllerAdmin->GetSeries();
        }
    }
}

?>