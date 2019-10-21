<?php
    class SeriesModel{
        private $db;
        
        function __construct(){
            $this->db=new PDO('mysql:host=localhost;'.'dbname=wikiserie;charset=utf8','root','');
        }

        public function GetSeries(){
            $sentencia=$this->db->prepare("SELECT * FROM serie order by serie.nombre");
            $sentencia->execute();
            $series = $sentencia->fetchAll(PDO::FETCH_OBJ);

            return $series;
        }

       /* public function serieGenero($id){
            $sentencia=$this->db->prepare("SELECT * FROM serie INNER JOIN genero ON serie.id_genero=genero.id_genero WHERE serie.id_serie=?");
            $sentencia->execute(array($id));
            $serie = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $serie;
        }*/

        public function seriesGenero($id){
            $sentencia=$this->db->prepare("SELECT * FROM serie,genero WHERE serie.id_genero=genero.id_genero AND serie.id_genero=? ");
            $sentencia->execute(array($id));
            $serie=$sentencia->fetchALL(PDO::FETCH_OBJ);
            return $serie;
        }

        public function InsertarSerie($nombre,$sinopsis,$actor,$img,$genero){
            $sentencia =$this->db->prepare("INSERT TO serie(nombre,sinopsis,actor_principal,img,id_genero) VALUES(?,?,?,?,?)");
            $sentencia->execute(array($nombre,$sinopsis,$actor,$img,$genero));
        }

        public function BorrarSerie($id){
            $sentencia=$this->db->prepare("DELETE * FROM serie WHERE id=?");
            $sentencia->execute(array($id));
        }

        public function BuscarSerie($id){
            $sentencia=$this->db->prepare("SELECT * FROM serie WHERE id=? ");
            $sentencia->execute(array($id));
        }

        public function EditarSerie($id){
            
        }
    }
?>