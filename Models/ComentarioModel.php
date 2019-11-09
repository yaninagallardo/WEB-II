<?php

class ComentarioModel{
    private $db;

    function __construct(){
        $this->db=new PDO('mysql:host=localhost;'.'dbname=wikiserie;charset=utf8','root','');
    }

    public function GetCoentarios(){
        $sentencia=$this->db->prepare("SELECT * FROM comentario ORDER BY comentario.fecha AND comentario.puntaje");
        $sentencia->execute();
        $generos=$sentencia->fetchAll(PDO::FETCH_OBJ);

        return $generos;
    }

    public function InsertarGenero($comentario, $puntaje, $fecha, $id_user){
        $sentencia =$this->db->prepare("INSERT INTO genero (comentario, puntaje, fecha, id_usuario) VALUES (?,?,?,?)");
        $sentencia->execute(array($comentario, $puntaje, $fecha, $id_user));
    }

    public function BorrarGenero($id){
        $sentencia = $this->db->prepare("DELETE FROM comentario WHERE id_comentario=?");
        $sentencia-> execute(array($id));
    }

    public function EditarGenero($comentario, $puntaje, $fecha, $id_user, $id){
        $sentencia =$this->db->prepare("UPDATE comentario SET comentario=?, punaje=?, fecha=?, id_usuario=? WHERE id_comentario=?");
        $sentencia->execute(array($comentario, $puntaje, $fecha, $id_user, $id));
    }
}
?>