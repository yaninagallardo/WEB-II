<?php
    class GeneroModel{
        private $db;

        function __construct(){
            $this->db=new PDO('mysql:host=localhost;'.'dbname=wikiserie;charset=utf8','root','');
        }

        public function GetGeneros(){
            $sentencia=$this->db->prepare("SELECT * FROM genero ORDER BY genero.nombreGen");
            $sentencia->execute();
            $generos=$sentencia->fetchAll(PDO::FETCH_OBJ);

            return $generos;
        }
        public function GetGenero($id){
            $sentencia=$this->db->prepare("SELECT * FROM genero WHERE id_genero=? ORDER BY genero.nombreGen");
            $sentencia->execute(array($id));
            $genero=$sentencia->fetchAll(PDO::FETCH_OBJ);

            return $genero;
        }

        public function InsertarGenero($nombre){
            $sentencia =$this->db->prepare("INSERT INTO genero (nombreGen) VALUES (?)");
            $sentencia->execute(array($nombre));
        }

        public function BorrarGenero($id){
            $sentencia = $this->db->prepare("DELETE FROM genero WHERE id_genero=?");
            $sentencia-> execute(array($id));
        }

        public function EditarGenero($nombre, $id){
            $sentencia =$this->db->prepare("UPDATE genero SET nombreGen=? WHERE id_genero=?");
            $sentencia->execute(array($nombre, $id));
        }
    }
?>