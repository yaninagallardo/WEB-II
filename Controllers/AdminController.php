<?php
require_once "./Models/SeriesModel.php";
require_once "./Models/GeneroModel.php";
require_once "./Views/AdminView.php";

class AdminController{
    private $model;
    private $modelGen;
    private $view;

    function __construct(){
        $this->model=new SeriesModel();
        $this->modelGen=new GeneroModel();
        $this->view=new AdminView();
    }

    //(NO DEJA INGRESAR)... sin ! antes de isset funciona
    public function checkLogginIn(){
        session_start();

        if(isset($_SESSION['userId'])){
            header("Location: " . URL_LOGIN);
            die();
        }

        if(isset($_SESSION['LAST_ACTIVITY']) &&
            time()- $_SESSION['LAST_ACTIVITY'] > 3600){
                header("Location: " . URL_LOGOUT);
                die();
            }
        $_SESSION['LAST_ACTIVITY'] = time();
    }
    // envia a la vista lista de series y generos
    public function GetSeries(){
        // $this->checkLogginIn();
        $series=$this->model->serieGenero();
        $generos=$this->modelGen->GetGeneros();
        $this->view->DisplaySeries($series,$generos); 
    }

    // ABM GENERO
    public function InsertarGenero(){
        $this->checkLogginIn();
        $this->modelGen->InsertarGenero($_POST['nombre-gen']);
        header("Location: " . URL_ADMIN);
    }

    public function BorrarGenero($id){
        $this->checkLogginIn();
        $this->modelGen->BorrarGenero($id);
        header("Location: " . URL_ADMIN);
    }

    public function EditarGenero(){
        $this->checkLogginIn();
        $id = $_POST['id-genero'];
        $this->modelGen->EditarGenero( $_POST['genero'], $id);
        header("Location: " . URL_ADMIN);
    }

    // ABM SERIE

    public function InsertarSerie(){
        $this->checkLogginIn();
        $g = $_POST['genero'];
        $this->model->InsertarSerie($_POST['nombre'],$_POST['sinopsis'],$_POST['actor'],$_POST['url_img'], $_POST['genero']);
        header("Location: " . URL_ADMIN);
    }

    public function BorrarSerie($id){
        $this->checkLogginIn();
        $this->model->BorrarSerie($id);
        header("Location: " . URL_ADMIN);
    }

    public function EditarSerie(){
        $this->checkLogginIn();
        $id = $_POST['id-serie'];
        $this->model->EditarSerie( $_POST['nombreSerie'], $_POST['sinopsis'], $_POST['actor'], $_POST['img'], $_POST['genero-editar'], $id);
        header("Location: " . URL_ADMIN);
    }
}
?>