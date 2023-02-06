<?php   
    include("ConsultarDb.php");

    $consultarDb = new ConsultarDb();
    
    print_r($consultarDb->consultar("usuario"));

    






?>