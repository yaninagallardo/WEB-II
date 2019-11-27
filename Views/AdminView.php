<?php

require_once('libs/Smarty.class.php');

class AdminView {

    function __construct(){
    }

    public function DisplaySeries($series,$generos,$user){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Mostrar Series");
        $smarty->assign('lista_series',$series);
        $smarty->assign('lista_generos',$generos);
        $smarty->assign('user',$user);
        // $smarty->debugging = true;
        $smarty->display('templates/ventanaAdmin.tpl');
    }

    public function DisplayError($error){
        $smarty=new Smarty();
        $smarty->assign('error',$error);
        $smarty->display('templates/ventanaAdmin.tpl');
    }
}
?>