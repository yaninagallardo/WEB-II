<?php
require_once "Controllers/SeriesController.php";
require_once "Controllers/LoginController.php";
require_once "Controllers/AdminController.php";
require_once "Controllers/RegistroController.php";
require_once "Controllers/UsuariosController.php";

$action = $_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("URL_SERIES", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/series');
define("URL_LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
define("URL_LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');
define("URL_ADMIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/ventAdmin');
define("URL_REGISTRO", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/registrarse');
define("URL_USUARIOS", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/listausuarios');


$controller = new SeriesController();
if($action == ''){
    $controller->GetSeries();
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);

        if($partesURL[0] == "series"){
            $controller->GetSeries();
        }elseif($partesURL[0] == "infoSerie"){
            $controller->GetInfoSerie($partesURL[1]);
        }elseif($partesURL[0] =="listaSerie"){
            $controller->serieGenero();
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
        }elseif($partesURL[0] == "insertarSerie") {
            $controllerAdmin = new AdminController();
            $controllerAdmin->InsertarSerie();
        }elseif($partesURL[0] == "borrarSerie") {
            $controllerAdmin = new AdminController();
            $controllerAdmin->BorrarSerie($partesURL[1]);
        }elseif($partesURL[0] == "editarSerie") {
            $controllerAdmin = new AdminController();
            $controllerAdmin->EditarSerie();
        }elseif($partesURL[0] == "insertarGenero") {
            $controllerAdmin = new AdminController();
            $controllerAdmin->InsertarGenero();
        }elseif($partesURL[0] == "borrarGenero") {
            $controllerAdmin = new AdminController();
            $controllerAdmin->BorrarGenero($partesURL[1]);
        }elseif($partesURL[0] == "editarGenero") {
            $controllerAdmin = new AdminController();
            $controllerAdmin->EditarGenero();
        }elseif($partesURL[0] == "registrarse") {
            $controllerReg = new RegistroController();
            $controllerReg->GetRegistro();
        }elseif($partesURL[0] == "registrarusuario") {
            $controllerReg = new RegistroController();
            $controllerReg->RegistrarUsuario();
        }elseif($partesURL[0] == "listausuarios") {
            $controllerUser = new UsuariosController();
            $controllerUser->GetUsuarios();
        }elseif($partesURL[0] == "eliminarusuario") {
            $controllerUser = new UsuariosController();
            $controllerUser->EliminarUsuario($partesURL[1]);
        }elseif($partesURL[0] == "modificarperfil") {
            $controllerUser = new UsuariosController();
            $controllerUser->ModificarPerfil($partesURL[2], $partesURL[1]);
        }
    }
        
    
}
?>