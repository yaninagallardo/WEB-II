<?php

require('libs/Smarty.class.php');


class LoginView {

    function __construct(){

    }

    public function DisplayLogin($tareas){

        $smarty = new Smarty();
        $smarty->assign('titulo',"Mostrar Tareas");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('lista_tareas',$tareas);
        $smarty->display('templates/ver_tareas.tpl');
    }
}

?>
