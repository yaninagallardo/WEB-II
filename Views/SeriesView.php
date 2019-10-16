<?php

require_once('libs/Smarty.class.php');

class SeriesView {

    function __construct(){
    }

    public function DisplaySeries($series,$generos){
        
        $smarty = new Smarty();
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('titulo',"Mostrar Series");
        $smarty->assign('lista_series',$series);
        $smarty->assign('lista_generos',$generos);
        // $smarty->debugging = true;
        $smarty->display('templates/ver_series.tpl');
    }

    public function mostrarSerie(){
        $smarty =new Smarty();
        $smarty->assing('BASE_URL',BASE_URL);
        $smarty->assing('titulo',"Titulo");
        $smarty->assing('serie',$serie);
        $smarty->assing('templates/ver_series.tpl');
    }
}

?>