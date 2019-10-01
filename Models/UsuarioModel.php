
<?php
class UsuarioModel {
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=wikiserie;charset=utf8', 'root', '');
    }

    public function GetUsuario($user, $pass){
        $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE user=? AND clave=?");
        $sentencia->execute();
        $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $usuarios;
    }

    public function GetTuplaUsuario($id){
        $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE id=$id");
        $sentencia->execute();
        $usuario = $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $usuario;
    }

    //MODIFICAR SET UPDATE ESTA MAL LA CONSULTA
    // public function SetUsurario($id, $nombre, $apellido, $user, $clave){
    //     $sentencia = $this->db->prepare("UPDATE usuario SET nombre=$nombre, apellido=$apellido, user=$user, clave=$clave WHERE id=?");
    //     $sentencia->execute(array($id));
    // }
}

?>