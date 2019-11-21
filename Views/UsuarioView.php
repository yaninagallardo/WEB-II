<?php

require_once('libs/Smarty.class.php');

class UsuarioView {

    function __construct(){
    }

    public function Display($usuarios, $user){
    
        $smarty = new Smarty();
        $smarty->assign("lista_usuarios", $usuarios);
        $smarty->assign("user", $user);
        $smarty->display('templates/listaUsuarios.tpl');
    }
}

?>