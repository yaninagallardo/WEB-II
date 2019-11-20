<?php

require_once('libs/Smarty.class.php');

class RegistroView {

    function __construct(){
    }

    public function Display($error){
    
        $smarty = new Smarty();
        $smarty->assign("error", $error);
        $smarty->display('templates/registrarse.tpl');
    }
}

?>
