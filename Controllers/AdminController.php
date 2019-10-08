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

    public function InsertarSerie(){
        $this->model->InsertarSerie($_POST['nombre'],$_POST['sinopsis'],$_POST['url_img'],$_POST['actor1'],$_POST['actor2'],$_POST['actor3']);
        header("Location: " . URL_INSERTAR);
    }
    public function BorrarSerie($id){
        $this->model->BorrarSerie($id);
        header("Location: " . URL_ADMIN);
    }

    public function EditarSerie($id){
        echo "no esta listo";
    }
}
?>