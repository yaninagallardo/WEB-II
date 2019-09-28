
<?php
class UsuarioModel {
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=wikiserie;charset=utf8', 'root', '');
    }

    public function GetUsuarios(){
        $sentencia = $this->db->prepare( "select * from usuario");
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
    public function SetUsurario($id, $nombre, $apellido, $user, $clave){
        $sentencia = $this->db->prepare("UPDATE usuario SET nombre=$nombre, apellido=$apellido, user=$user, clave=$clave WHERE id=?");
        $sentencia->execute(array($id));
    }

    /*si es usuario ingresa como administrador de la pagina */
    public function IsUsuario($usuarioIngreso, $passIngreso){
        $sentencia = $this->db->prepare( 'SELECT * FROM usuario WHERE usuario = $usuarioIngreso AND contraseña = $passIngreso');
        $sentencia->execute(['usuario' => $usuarioIngreso, 'contraseña' => $passIngreso]);
        $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);

        if ($usuarios != null){
            return true;//Ingreso como administrador
                
        } else {
            return false;//error de usuarios o pass incorrecta
        }
    }

    public function AgregarUsuario($nombre,$apellido,$usuario,$clave){
        $sentencia = $this->db->prepare("INSERT INTO usuario(nombre, apellido, usuario, clave) VALUES(?,?,?,?)");
        $sentencia->execute(array($nombre,$apellido,$usuario,$clave));
    }

    public function BorrarUsuario($id){
        $sentencia = $this->db->prepare("DELETE FROM usuario WHERE id=?");
        $sentencia->execute(array($id));
    }


}

?>