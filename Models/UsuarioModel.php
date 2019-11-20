
<?php
class UsuarioModel {
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=wikiserie;charset=utf8', 'root', '');
    }

    public function GetPassword($user){
        $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE user = ?");
        $sentencia->execute(array($user));
        $pass = $sentencia->fetch(PDO::FETCH_OBJ);

        return $pass;
    }

    public function GetUsuario($user){
        $sentencia = $this->db->prepare( "SELECT user FROM usuario WHERE user = ?");
        $sentencia->execute(array($user));
        $usuario = $sentencia->fetch(PDO::FETCH_OBJ);

        return $usuario;
    }

    public function InsertUsuarioInvitado($nombre, $usuario, $pass){
        $sentencia = $this->db->prepare("INSERT INTO usuario (nombre,user,pass,admin) VALUES (?,?,?,'0')");
        $sentencia->execute(array($nombre, $usuario, $pass));
    }
}
?>