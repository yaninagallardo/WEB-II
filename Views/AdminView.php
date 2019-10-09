<?php

require_once('libs/Smarty.class.php');

class AdminView {

    function __construct(){
    }

    public function DisplaySeries($series,$capitulos){
        
        $smarty = new Smarty();
        $smarty->assign('titulo',"Mostrar Series");
        $smarty->assign('lista_series',$series);
        $smarty->assign('lista_capitulos',$capitulos);
        // $smarty->debugging = true;
        $smarty->display('templates/ventanaAdmin.tpl');
    }
}
?>