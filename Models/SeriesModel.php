<?php
    class SeriesModel{
        private $db;
        
        function __construct(){
            $this->db=new PDO('mysql:host=localhost;'.'dbname=wikiserie;charset=utf8','root','');
        }

        public function GetSeries(){
            $sentencia=$this->db->prepare("SELECT * FROM serie ORDER BY serie.nombre");
            $sentencia->execute();
            $series = $sentencia->fetchAll(PDO::FETCH_OBJ);

            return $series;
        }

        public function serieGenero(){
            $sentencia=$this->db->prepare("SELECT * FROM serie INNER JOIN genero ON serie.id_genero=genero.id_genero ORDER BY genero.nombreGen,serie.nombre");
            $sentencia->execute();
            $serie = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $serie;
        }

        public function InsertarSerie($nombre,$sinopsis,$actor,$img,$genero){
            $sentencia =$this->db->prepare("INSERT INTO serie (nombre,sinopsis,actor_principal,img,id_genero) VALUES(?,?,?,?,?)");
            $sentencia->execute(array($nombre,$sinopsis,$actor,$img,$genero));
        }

        public function BorrarSerie($id){
            $sentencia=$this->db->prepare("DELETE FROM serie WHERE id_serie=?");
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