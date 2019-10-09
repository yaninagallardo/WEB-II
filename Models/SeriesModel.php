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

        public function InsertarSerie($nombre,$sinopsis,$actor,$tipo,$img){
            $sentencia =$this->db->prepare("INSERT TO serie(nombre,sinopsis,actor_principal,tipo,img) VALUES(?,?,?,?,?)");
            $sentencia->execute(array($nombre,$sinopsis,$actor,$tipo,$img));
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