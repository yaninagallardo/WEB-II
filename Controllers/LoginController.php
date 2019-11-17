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

        if (isset($usuario) && $usuario != null && password_verify($password, $usuario->pass)){
            session_start();
            $_SESSION['user'] = $usuario->nombre;
            $_SESSION['userId'] = $usuario->id_usuario;

            if($usuario->admin == 1){
                header("Location: " . URL_ADMIN);
            }else {
                header("Location: " . URL_SERIES);
            }
        }else{
            $this->view->showLoggin("*** Usuario y/o consatrseña incorrectos ***");
        }
    }

    public function GetLogin(){
       $this->view->DisplayLogin(); 
    }

    public function Logout(){
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}
?>