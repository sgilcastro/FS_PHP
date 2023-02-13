
<?php   
    include("ModificarTarea.php");

    $newDato = $_POST['newDato'];
    $posicionTarea = $_POST['posicionTarea'];   
    $datoTarea = $_POST['datoTarea'];
    $posicionUser = $_POST['posicionUser'];

    $objeto = new ModificarTarea();
    
    print_r($objeto->updateTarea($posicionUser, $posicionTarea, $newDato, $datoTarea));

?>
