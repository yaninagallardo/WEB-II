<?php
    require_once("./Models/UsuarioModel.php");
    require_once("./api/ApiController.php");
    require_once("./api/JSONView.php");

    // es necesario hacerlo igual a los demas o cambia en algo
    class UsuarioApiController extends ApiController{
    
        public function getUsuario($params = null) {
            $comentarios = $this->modelComentario->GetComentarios();
            $this->view->response($comentarios, 200);
        }


    }
?>