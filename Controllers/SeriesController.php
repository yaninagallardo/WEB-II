<?php
require_once "./Models/SeriesModel.php";
require_once "./Models/GeneroModel.php";
require_once "./Models/ComentarioModel.php";
require_once "./Views/SeriesView.php";

class SeriesController{
    private $model;
    private $modelGen;
    private $modelComen;
    private $view;

    function __construct(){
        $this->model=new SeriesModel();
        $this->modelGen=new GeneroModel();
        $this->modelComen=new ComentarioModel();
        $this->view=new SeriesView();
    }
    public function IsUser(){
        session_start();
        if(isset($_SESSION['user'])){
            $user = $_SESSION['user'];
            return $user;
        }
    }
    public function GetSeries(){
       $series=$this->model->GetSeries();
       $generos=$this->modelGen->GetGeneros();
       $this->view->displaySeries($series, $generos, $this->IsUser()); 
       
    }

    public function GetInfoSerie($id){
        $serie=$this->model->BuscarSerie($id);
        $comentarios=$this->modelComen->GetComentarios($id);
        $porc = $this->porcentajeSerie($comentarios);
        $this->view->infoSerie($serie, $comentarios, $this->IsUser(), $porc);
    }
    public function serieGenero(){   
        $generos=$this->model->serieGenero();
        
        $this->view->mostrarSeries($generos, $this->IsUser()); 
    }

    public function porcentajeSerie($comentarios){
        $punt = 0;
        foreach($comentarios as $comen){
            $punt += $comen->puntaje;
        }

        return $punt / sizeof($comentarios);
    }

    /**DEBUG POR CONSOLA */
    public function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
    }
}
?>