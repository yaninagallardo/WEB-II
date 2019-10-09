<?php
    class CapitulosModel{
        private $db;

        function __construct(){
            $this->db=new PDO('mysql:host=localhost;'.'dbname=wikiserie;charset=utf8','root','');
        }

        public function GetCapitulos(){
            $sentencia=$this->db->prepare("SELECT * FROM capitulos ORDER BY capitulos.temporada");
            $sentencia->execute();
            $capitulos=$sentencia->fetchAll(PDO::FETCH_OBJ);

            return $capitulos;
        }
    }
?>