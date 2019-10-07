<?php
require_once "./Models/SeriesModel.php";
require_once "./Views/SeriesView.php";

class SeriesController{
    private $model;
    private $view;

    function __construct(){
        $this->model=new SeriesModel();
        $this->view=new SeriesView();
    }
    
    public function GetSeries(){
       $series=$this->model->GetSeries();
       $this->view->DisplaySeries($series); 
    }
    public function GetSerie($id){
        $series=$this->model->BuscarSerie($id);
        $this->view->mostrarSerie();
    }
}
?>