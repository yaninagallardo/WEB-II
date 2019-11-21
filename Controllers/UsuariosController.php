<?php
require_once "./Models/UsuarioModel.php";
require_once "./Views/UsuarioView.php";

class UsuariosController{
    private $model;
    private $view;

    function __construct(){
        $this->model = new UsuarioModel();
        $this->view = new UsuarioView();
    }

    public function GetUsuarios(){
        $usuarios = $this->model-> GetUsuarios();
        $this->view->Display($usuarios);
    }

    public function EliminarUsuario($id){
        $this->model->EliminarUsuario($id);
        header("Location: " . URL_USUARIOS);
    }

    public function ModificarPerfil($valorPerfil, $id){
        $this->model->ModificarPerfil($valorPerfil, $id);
        header("Location: " . URL_USUARIOS);
    }

    /**DEBUG POR CONSOLA */
    public function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
    }
}
?>