<?php
require_once("config.php");

//Para saber la versión del código de php --> phpinfo();

//para ver si trabaja correctamente hacemos un var_dump para que imprima la urlsite indicada en el index --> 

var_dump(urlsite);

require_once("controlador/indexController.php");

//ejecutar el controlador e invocamos un metodo

// modeloController::index();

if(isset($_GET['m'])):
    $metodo = $_GET['m'];
    if(method_exists(modeloController,$metodo)):
        modeloController::{$metodo}();
    endif;
else:
    modeloController::index();
endif;

?>