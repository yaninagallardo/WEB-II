<?php

require_once('libs/Smarty.class.php');

class SeriesView {

    function __construct(){
    }

    public function displaySeries($series,$generos, $user){    
        $smarty = new Smarty();
        $smarty->assign('titulo',"Mostrar Series");
        $smarty->assign('lista_series',$series);
        $smarty->assign('lista_generos',$generos);
        $smarty->assign("user", $user);
        // $smarty->debugging = true;
        $smarty->display('templates/ver_series.tpl');
    }

    public function mostrarSeries($array, $usere){
        $smarty=new Smarty();
        $smarty->assign('titulo',"Series disponibles");
        $smarty->assign('lista',$array);
        $smarty->assign("user", $user);
        $smarty->display('templates/listaSeries.tpl');
    }


    public function infoSerie($serie,$comentarios, $user){
        $smarty= new Smarty();
        $smarty->assign('titulo',"Información de serie");
        $smarty->assign('ser', $serie);
        $smarty->assign("user", $user);
        $smarty->assign('lista_comentarios',$comentarios);
        $smarty->display('templates/serie.tpl');
    }

   
}

?>