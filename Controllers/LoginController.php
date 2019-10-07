<?php
require_once "./Models/UsuarioModel.php";
require_once "./Views/LoginView.php";

class LoginController{
    private $model;
    private $view;

    function __construct(){
        $this->model=new UsuarioModel();
        $this->view=new LoginView();
    }

    public function IniciarSesion(){
        $password = $_POST['pass'];

        $usuario = $this->model->GetPassword($_POST['user']);

        if (isset($usuario) && $usuario != null && password_verify($password, $usuario->clave)){
            session_start();
            $_SESSION['user'] = $usuario->user;
            $_SESSION['userId'] = $usuario->id;
            header("Location: " . URL_ADMIN);
        }else{
            echo "NO INGRESO";
            // header("Location: " . URL_LOGIN);
        }
    }

    public function GetLogin(){
       $this->view->DisplayLogin(); 
    }

    public function Logout(){
        session_start();
        session_destroy();
        header("Location: " . URL_LOGIN);
    }
}
?>