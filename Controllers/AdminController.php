<?php
require_once "./Models/SeriesModel.php";
require_once "./Models/CapitulosModel.php";
require_once "./Views/AdminView.php";

class AdminController{
    private $model;
    private $modelCap;
    private $view;

    function __construct(){
        $this->model=new SeriesModel();
        $this->modelCap=new CapitulosModel();
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
            time()- $_SESSION['LAST_ACTIVITY'] > 5){
                header("Location: " . URL_LOGOUT);
                die();
            }
        $_SESSION['LAST_ACTIVITY'] = time();
    }
   
    public function GetSeries(){
        // $this->checkLogginIn();
        $series=$this->model->GetSeries();
        $capitulos=$this->modelCap->GetCapitulos();
        $this->view->DisplaySeries($series,$capitulos); 
    }

    public function InsertarSerie(){
        $this->checkLogginIn();
        $this->model->InsertarSerie($_POST['nombre'],$_POST['sinopsis'],$_POST['url_img'],$_POST['actor'],$_POST['tipo']);
        header("Location: " . URL_ADMIN);
    }
    public function BorrarSerie($id){
        $this->checkLogginIn();
        $this->model->BorrarSerie($id);
        header("Location: " . URL_ADMIN);
    }

    public function EditarSerie($id){
        
    }
}
?>