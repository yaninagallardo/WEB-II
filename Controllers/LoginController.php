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
    
    public function GetLogin(){
    //    $series=$this->model->GetSeries();
       $this->view->DisplayLogin("hola"); 
    }

    /*si es usuario ingresa como administrador de la pagina */
    public function IsUsuario(){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        header("Location: " . BASE_URL);

        if(isset($user)){
            $user=$this->model->GetUsuario($user, $pass);
            if ($user != null){
                $correcto = "correcto";
                $this->view->DisplayLogin($correcto);
                    
            } else {
                echo "incorrecto";//error de usuarios o pass incorrecta
            }
        }
    }
}
?>