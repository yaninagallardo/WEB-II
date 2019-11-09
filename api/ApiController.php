<?php

    abstract class ApiController {
        protected $modelGenero;
        protected $modelSerie;
        protected $modelComentario;
        //protected $modelUser;
        protected $view;
        private $data; 

        public function __construct() {
            $this->view = new JSONView();
            $this->data = file_get_contents("php://input"); 
            $this->modelGenero = new GeneroModel();
            $this->modelSerie = new SeriesModel();
            $this->modelComentario = new ComentarioModel();
            //$this->modelUser = new UsuarioModel();
        }

        function getData(){ 
            return json_decode($this->data); 
        }  

    }

?>
