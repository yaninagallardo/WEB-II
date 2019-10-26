<?php

require_once('libs/Smarty.class.php');

class SeriesView {

    function __construct(){
    }

    public function DisplaySeries($series,$generos){    
        $smarty = new Smarty();
        $smarty->assign('titulo',"Mostrar Series");
        $smarty->assign('lista_series',$series);
        $smarty->assign('lista_generos',$generos);
        // $smarty->debugging = true;
        $smarty->display('templates/ver_series.tpl');
    }

    public function mostrarSeries($array){
        $smarty=new Smarty();
        $smarty->assign('titulo',"Titulo");
        $smarty->assign('lista',$array);
        $smarty->display('templates/listaSeries.tpl');
    }
   
}

?>