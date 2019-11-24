<?php
    require_once("./Models/ComentarioModel.php");
    require_once("./api/ApiController.php");
    require_once("./api/JSONView.php");

    class ComentarioApiController extends ApiController{
    
        // public function getComentarios($params = null) {
        //     $comentarios = $this->modelComentario->GetComentarios();
        //     $this->view->response($comentarios, 200);
        // }

        /**
         * Obtiene dado un ID
         * 
         * $params arreglo asociativo con los parámetros del recurso
         */
        public function getComentarios($params = null) {
            // obtiene el parametro de la ruta
            // $id = $params[':ID'];
            
            $comentario = $this->modelComentario->GetComentarios();
            if ($comentario) {
                
                $this->view->response($comentario, 200);   
            } else {
                $this->view->response("No existe comentario con el id={$id}", 404);
            }
        }

        public function deleteComentario($params = []) {
            $comentario_id = $params[':ID'];
            $comentario = $this->modelComentario->GetComentario($comentario_id);

            if ($comentario) {
                $this->modelComentario->BorrarComentario($comentario_id);
                $this->view->response("comentario id=$comentario_id eliminado con éxito", 200);
            }
            else 
                $this->view->response("comentario id=$comentario_id not found", 404);
        }

        
        public function addComentario($params = []) {     
            $comentario = $this->getData(); // la obtengo del body

            // inserta 
            $comentarioId = $this->modelComentario->InsertarComentario($comentario->comentario, $comentario->puntaje, $comentario->fecha, $comentario->id_usuario);

            // obtengo el recien creado
            $comentarioNuevo = $this->modelComentario->GetComentario($comentarioId);
            
            if ($comentarioNuevo)
                $this->view->response($comentarioNuevo, 200);
            else
                $this->view->response("Error al insertar comentario", 500);

        }

        
        public function updateComentario($params = []) {
            $comentario_id = $params[':ID'];
            $comentario = $this->modelComentario->GetComentario($comentario_id);

            if ($comentario) {
                $body = $this->getData();
                $comentario = $body->comentario;
                $puntaje = $body->puntaje;
                $fecha = $body->fecha;
                $id_user= $body->id_usuario;

                $comentario = $this->modelComentario->EditarComentario($comentario, $puntaje, $fecha, $id_user, $comentario_id);
                $this->view->response("comentario id=$comentario_id actualizado con éxito", 200);
            }
            else 
                $this->view->response("comentario id=$comentario_id not found", 404);
        }
    }
?>