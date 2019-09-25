<?php
require_once "./Models/SeriesModel.php";
require_once "./Views/TareasViews.php";

class SeriesController{
    private $model;
    private $view;

    function __construct(){
        $this->model=new SeriesModel();
        $this->view=new SeriesView();
    }
    
    public function GetTareas(){
       $series=$this->model->GetTareas();
       $this->view->DisplaySeries($series); 
    }
    
?>