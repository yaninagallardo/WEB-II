<?php

require('libs/Smarty.class.php');


class SeriesView {

    function __construct(){

    }

    public function DisplaySeries($series){

        $smarty = new Smarty();
        
        $smarty->assign('titulo',"Mostrar Series");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('lista_series',$series);
        $smarty->debugging = true;
        $smarty->display('templates/ver_series.tpl');
    }
}

?>