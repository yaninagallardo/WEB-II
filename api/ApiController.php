<?php

    abstract class ApiController {
        protected $modelGenero;
        protected $modelSerie;
        protected $view;
        private $data; 

        public function __construct() {
            $this->view = new JSONView();
            $this->data = file_get_contents("php://input"); 
            $this->modelGenero = new GeneroModel();
            $this->modelSerie = new SeriesModel();
        }

        function getData(){ 
            return json_decode($this->data); 
        }  

    }

?>
