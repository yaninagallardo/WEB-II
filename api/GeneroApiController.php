<?php
require_once("./Models/GeneroModel.php");
require_once("./api/ApiController.php");
require_once("./api/JSONView.php");

class GeneroApiController extends ApiController{
  
    public function getGeneros($params = null) {
        $genero = $this->modelGenero->getGeneros();
        $this->view->response($genero, 200);
    }

    /**
     * Obtiene un Genero dado un ID
     * 
     * $params arreglo asociativo con los parámetros del recurso
     */
    public function getGenero($params = null) {
        // obtiene el parametro de la ruta
        $id = $params[':ID'];
        
        $genero = $this->modelGenero->GetGenero($id);
        
        if ($genero) {
            $this->view->response($genero, 200);   
        } else {
            $this->view->response("No existe el genero con el id={$id}", 404);
        }
    }

    // GeneroApiController.php
    public function deleteGenero($params = []) {
        $genero_id = $params[':ID'];
        $genero = $this->modelGenero->GetGenero($genero_id);

        if ($genero) {
            $this->modelGenero->BorrarGenero($task_id);
            $this->view->response("Genero id=$genero_id eliminado con éxito", 200);
        }
        else 
            $this->view->response("Genero id=$genero_id not found", 404);
    }

    // GeneroApiController.php
   public function addGenero($params = []) {     
        $genero = $this->getData(); // la obtengo del body

        // inserta el Genero
        $generoId = $this->modelGenero->InsertarGenero($genero->nombre);

        // obtengo el recien creado
        $generoNuevo = $this->modelGenero->GetGenero($generoId);
        
        if ($generoNuevo)
            $this->view->response($generoNuevo, 200);
        else
            $this->view->response("Error al insertar tarea", 500);

    }

    // GeneroApiController.php
    public function updateGenero($params = []) {
        $genero_id = $params[':ID'];
        $genero = $this->modelGenero->GeGenero($genero_id);

        if ($genero) {
            $body = $this->getData();
            $nombre = $body->nombre;
            $genero = $this->modelGenero->EditarGenero($nombre, $genero_id);
            $this->view->response("Genero id=$genero_id actualizado con éxito", 200);
        }
        else 
            $this->view->response("Genero id=$genero_id not found", 404);
    }


}
?>