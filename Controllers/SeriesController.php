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
       $this->view->DisplaySeries($series, $generos); 
    }
    public function GetSerie($id){
        $series=$this->model->BuscarSerie($id);
        $this->view->mostrarSerie();
    }
}
?>