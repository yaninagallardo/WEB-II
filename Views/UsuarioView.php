<?php

require_once('libs/Smarty.class.php');

class UsuarioView {

    function __construct(){
    }

    public function Display($usuarios){
    
        $smarty = new Smarty();
        $smarty->assign("lista_usuarios", $usuarios);
        $smarty->display('templates/listaUsuarios.tpl');
    }
}

?>