<?php

require('libs/Smarty.class.php');


class LoginView {
    function __construct(){
    }

    public function DisplayLogin($mensaje){
      
        $smarty = new Smarty();
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('mensaje',$mensaje);
        $smarty->display('templates/login.tpl');
    }
}

?>
