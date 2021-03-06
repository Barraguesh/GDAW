<?php
session_start();
//Configuración global
require_once 'config/global.php';

//Cargamos el controlador y ejecutamos la accion
if (isset($_GET["controller"])) {
    // Cargamos la instancia del controlador correspondiente
    $controllerObj=cargarControlador($_GET["controller"]);
    // Lanzamos la acción
    lanzarAccion($controllerObj);
} else {
    // Cargamos la instancia del controlador por defecto
    $controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
    // Lanzamos la acción
    lanzarAccion($controllerObj);
}


function cargarControlador($controller)
{
    switch ($controller) {
        case 'vino':
            $strFileController='controller/VinoController.php';
            require_once $strFileController;
            $controllerObj=new VinoController();
            break;
        
        default:
            $strFileController='controller/BodegaController.php';
            require_once $strFileController;
            $controllerObj=new BodegaController();
            break;
    }
    return $controllerObj;
}

function lanzarAccion($controllerObj)
{
    if (isset($_GET["action"])) {
        $controllerObj->run($_GET["action"]);
    } else {
        $controllerObj->run(ACCION_DEFECTO);
    }
}
