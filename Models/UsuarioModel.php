
<?php
class UsuarioModel {
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=wikiserie;charset=utf8', 'root', '');
    }

    public function GetPassword($user){
        $sentencia = $this->db->prepare( "SELECT * FROM usuario WHERE user=?");
        $sentencia->execute();
        $pass = $sentencia->fetch(PDO::FETCH_OBJ);

        return $pass;
    }
}

?>