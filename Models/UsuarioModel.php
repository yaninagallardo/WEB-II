
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

    public function GetUsuarios(){
        $sentencia = $this->db->prepare( "SELECT * FROM usuario ORDER BY  usuario.admin DESC, usuario.user ");
        $sentencia->execute();
        $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $usuarios;
    }

    public function InsertUsuarioInvitado($nombre, $usuario, $pass){
        $sentencia = $this->db->prepare("INSERT INTO usuario (nombre,user,pass,admin) VALUES (?,?,?,'0')");
        $sentencia->execute(array($nombre, $usuario, $pass));
    }

    public function EliminarUsuario($id){
        $sentencia = $this->db->prepare("DELETE FROM usuario WHERE id_usuario=?");
        $sentencia->execute(array($id));
    }

    public function ModificarPerfil($valorPerfil, $id){
        $sentencia = $this->db->prepare("UPDATE usuario SET admin=? WHERE id_usuario=?");
        $sentencia->execute(array($valorPerfil, $id));
    }
}
?>