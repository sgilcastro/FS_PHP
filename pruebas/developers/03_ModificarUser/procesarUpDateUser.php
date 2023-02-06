<?php   
    include("UpDateUser.php");

    $newDato = "Josefa";
    $posicionUser=1;
    $posicionCampo=1;
   
    $upDateUser = new UpDateUser();
    
    print_r($upDateUser->upDateUser($newDato, $posicionUser, $posicionCampo));
    
?>