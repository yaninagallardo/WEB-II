<?php

require_once('libs/Smarty.class.php');


class LoginView {

    function __construct(){
    }

    public function DisplayLogin(){
      
        $smarty = new Smarty();
        $smarty->assign('titulo', "Login");
        $smarty->assign('URL_LOGIN',URL_LOGIN);
        $smarty->display('templates/login.tpl');
    }
}

?>
