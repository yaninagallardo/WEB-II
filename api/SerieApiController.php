<?php
    require_once("./Models/SeriesModel.php");
    require_once("./api/ApiController.php");
    require_once("./api/JSONView.php");

    class SerieApiController extends ApiController{
    
        public function getSeries($params = null) {
            $serie = $this->modelSerie->GetSeries();
            $this->view->response($serie, 200);
        }

        /**
         * Obtienes dado un ID
         * 
         * $params arreglo asociativo con los parámetros del recurso
         */
        public function getSerie($params = null) {
            // obtiene el parametro de la ruta
            $id = $params[':ID'];
            
            $serie = $this->modelSerie->BuscarSerie($id);
            
            if ($serie) {
                $this->view->response($serie, 200);   
            } else {
                $this->view->response("No existe la serie con el id={$id}", 404);
            }
        }

        
        public function deleteSerie($params = []) {
            $serie_id = $params[':ID'];
            $serie = $this->modelSerie->BuscarSerie($serie_id);

            if ($serie) {
                $this->modelSerie->BorrarSerie($serie_id);
                $this->view->response("Serie id=$serie_id eliminada con éxito", 200);
            }
            else 
                $this->view->response("Serie id=$serie_id not found", 404);
        }

        
        public function addSerie($params = []) {     
            $serie = $this->getData(); // la obtengo del body

            // inserta 
            $serieId = $this->modelSerie->InsertarSerie($serie->nombre, $serie->sinopsis, $serie->actor_principal, $serie->img, $serie->id_genero);

            // obtengo el recien creado
            $serieNuevo = $this->modelSerie->BuscarSerie($serieId);
            
            if ($serieNuevo)
                $this->view->response($serieNuevo, 200);
            else
                $this->view->response("Error al insertar serie", 500);

        }

        
        public function updateSerie($params = []) {
            $serie_id = $params[':ID'];
            $serie = $this->modelSerie->BuscarSerie($serie_id);

            if ($serie) {
                $body = $this->getData();
                $nombre = $body->nombre;
                $sinopsis = $body->sinopsis;
                $actor = $body->actor_principal;
                $img = $body->img;
                $id_genero = $body->id_genero;
                $serie = $this->modelSerie->EditarSerie($nombre,$sinopsis, $actor, $img, $id_genero, $serie_id);
                $this->view->response("Serie id=$serie_id actualizado con éxito", 200);
            }
            else 
                $this->view->response("Serie id=$serie_id not found", 404);
        }


    }
?>