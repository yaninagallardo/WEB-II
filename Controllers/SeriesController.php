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
    
    public function GetSeries(){
       $series=$this->model->GetSeries();
       $generos=$this->modelGen->GetGeneros();
       $this->view->displaySeries($series, $generos); 
       
    }

    public function GetInfoSerie($id){
        $serie=$this->model->BuscarSerie($id);
        $comentarios=$this->modelComen->GetComentarios($id);
        $this->console_log($id);
        $this->view->infoSerie($serie, $comentarios);
    }
    public function serieGenero(){   
        $generos=$this->model->serieGenero();
        $this->view->mostrarSeries($generos); 
    }

    /**DEBUG POR CONSOLA */
    public function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
    }
}
?>