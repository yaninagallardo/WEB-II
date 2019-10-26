<?php
require_once "./Models/SeriesModel.php";
require_once "./Models/GeneroModel.php";
require_once "./Views/SeriesView.php";

class SeriesController{
    private $model;
    private $modelGen;
    private $view;

    function __construct(){
        $this->model=new SeriesModel();
        $this->modelGen=new GeneroModel();
        $this->view=new SeriesView();
    }
    
    public function GetSeries(){
       $series=$this->model->GetSeries();
       $generos=$this->modelGen->GetGeneros();
       $this->view->displaySeries($series, $generos); 
    }

    public function GetInfoSerie($id){
        $serie=$this->model->BuscarSerie($id);
        $this->view->infoSerie($serie);
    }
    public function serieGenero(){   
        $generos=$this->model->serieGenero();
        $this->view->mostrarSeries($generos); 
    }
}
?>