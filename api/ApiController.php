<?php

    abstract class ApiController {
        protected $modelComentario;
        protected $view;
        private $data; 

        public function __construct() {
            $this->view = new JSONView();
            $this->data = file_get_contents("php://input"); 
            $this->modelComentario = new ComentarioModel();
        }

        function getData(){ 
            return json_decode($this->data); 
        }  

    }

?>