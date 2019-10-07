<?php
require_once "./Models/SeriesModel.php";
require_once "./Views/AdminView.php";

class AdminController{
    private $model;
    private $view;

    function __construct(){
        $this->model=new SeriesModel();
        $this->view=new AdminView();
    }
    
    public function GetSeries(){
       $series=$this->model->GetSeries();
       $this->view->DisplaySeries($series); 
    }
}
?>