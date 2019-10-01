<?php


require_once "Controllers/SeriesController.php";

$action = $_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$controller = new SeriesController();

if($action == ''){
    $controller->GetSeries();
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);

        if($partesURL[0] == "series"){
            $controller->GetSeries();
        }
        // elseif($partesURL[0] == "usuario") {
        //     $controllerll->GetLogin();
        // }
    }
}

?>