<?php

class ComentarioModel{
    private $db;

    function __construct(){
        $this->db=new PDO('mysql:host=localhost;'.'dbname=wikiserie;charset=utf8','root','');
    }

    public function GetComentarios($idSerie){
        $sentencia = $this->db->prepare("SELECT * FROM comentario c INNER JOIN usuario u ON c.id_usuario = u.id_usuario WHERE c.id_serie = ? ORDER BY c.fecha AND c.puntaje");
        $sentencia->execute(array($idSerie));
        $comentarios=$sentencia->fetchAll(PDO::FETCH_OBJ);

        return $comentarios;
    }

    public function GetComentario($id){
        $sentencia = $this->db->prepare("SELECT * FROM comentario WHERE id_comentario=?");
        $sentencia->execute(array($id));
        $comentario = $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $comentario;
    }

    public function InsertarComentario($comentario, $puntaje, $fecha, $id_user){
        $sentencia =$this->db->prepare("INSERT INTO comentario (comentario, puntaje, fecha, id_usuario) VALUES (?,?,?,?)");
        $sentencia->execute(array($comentario, $puntaje, $fecha, $id_user));

        return $this->db->lastInsertId();
    }

    public function BorrarComentario($id){
        $sentencia = $this->db->prepare("DELETE FROM comentario WHERE id_comentario=?");
        $sentencia-> execute(array($id));
    }

    public function EditarComentario($comentario, $puntaje, $fecha, $id_user, $id){
        $sentencia =$this->db->prepare("UPDATE comentario SET comentario=?, punaje=?, fecha=?, id_usuario=? WHERE id_comentario=?");
        $sentencia->execute(array($comentario, $puntaje, $fecha, $id_user, $id));
    }
}
?>