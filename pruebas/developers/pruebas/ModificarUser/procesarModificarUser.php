
<?php   
    include("ModificarUser.php");

    $newDato = $_POST['newDato'];
    $posicionDato = $_POST['posicionDato'];
    $posicionUser = $_POST['posicionUser'];
    
    $modificarUser = new ModificarUser();
    
    print_r($modificarUser->updateUser($posicionUser, $newDato, $posicionDato));

?>