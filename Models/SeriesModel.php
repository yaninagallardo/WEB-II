<?php
    class SeriesModel{
        private $db;
        
        function __construct(){
            $this->db=new PDO('mysql:host=localhost','dbname=wikiserie','root','');
        }

        public function GetSeries(){
            $sentencia=$this->db->prepare("select * from serie");
            $sentencia->execute();
            $series = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $series;
        }

        public function InsertarSerie($nombre,$sinopcis,$img,$actor1,$actor2,$actor3){
            $sentencia =$this->db->prepare("INSERT TO serie(nombre,sinopcis,img,actor1,actor2,actor3) VALUES(?,?,?,?,?,?)");
            $sentencia->execute(array($nombre,$sinopcis,$img,$actor1,$actor2,$actor3));
        }

        public function BorrarSerie($id){
            $sentencia=$this->db->prepare("DELETE FROM serie WHERE id=?");
            $sentencia->execute(array($id));
        }

        public function EditarSerie(){
            
        }
    }
?>