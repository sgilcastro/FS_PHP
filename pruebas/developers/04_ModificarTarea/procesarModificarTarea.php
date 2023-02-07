
<?php   
    include("ModificarUser.php");

    $newDato = $_POST['newDato'];

    $posicionDato = $_POST['nombreDatoTarea'];
    $posicionUser = $_POST['posicionUser'];
    
    $modificarUser = new ModificarUser();
    
    print_r($modificarUser->updateUser($posicionUser, $newDato, $posicionDato));

?>