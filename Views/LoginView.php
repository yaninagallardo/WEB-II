<?php

require_once('libs/Smarty.class.php');

class LoginView {

    function __construct(){
    }

    public function showLoggin($mensajeError){
        $smarty = new Smarty();
        $smarty->assign('titulo', "Login");
        $smarty->assign('URL_LOGIN',URL_LOGIN);
        $smarty->assign('error', $mensajeError);
        $smarty->display('templates/login.tpl');
    }

    public function DisplayLogin(){
    
        $smarty = new Smarty();
        $smarty->assign('titulo', "Login");
        $smarty->assign('URL_LOGIN',URL_LOGIN);
        $smarty->display('templates/login.tpl');
    }
}

?>
