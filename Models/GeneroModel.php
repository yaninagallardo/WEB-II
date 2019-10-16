<?php
    class GeneroModel{
        private $db;

        function __construct(){
            $this->db=new PDO('mysql:host=localhost;'.'dbname=wikiserie;charset=utf8','root','');
        }

        public function GetGeneros(){
            $sentencia=$this->db->prepare("SELECT * FROM genero ORDER BY genero.nombre");
            $sentencia->execute();
            $generos=$sentencia->fetchAll(PDO::FETCH_OBJ);

            return $generos;
        }
    }
?>