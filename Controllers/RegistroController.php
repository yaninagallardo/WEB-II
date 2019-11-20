<?php
require_once "./Models/UsuarioModel.php";
require_once "./Views/RegistroView.php";

class RegistroController{
    private $model;
    private $view;

    function __construct(){
        $this->model = new UsuarioModel();
        $this->view = new RegistroView();
    }

    public function GetRegistro(){
        $this->view->Display(null);
    }

    public function RegistrarUsuario(){
        if(isset($_POST['user'])){
            $user = $this->model->GetUsuario($_POST['user']);
            if(isset($user)){
                $error = "El nombre de usuario ya existe, por favor seleccione otro";
                $this->view->Display($error);
            }else{
                $hash = password_hash($_POST['pass'], PASSWORD_DEFAULT);
                $this->model->InsertUsuarioInvitado($_POST['nombre'],$_POST['user'],$hash);
                header("Location: ", URL_LOGIN);
            }
        } else{
            header("Location: ", URL_REGISTRO);
        }
    }
}
?>