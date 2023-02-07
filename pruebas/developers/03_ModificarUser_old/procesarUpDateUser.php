<?php   
    include("UpDateUser.php");

    $newDato = "Pepita";
    $posicionUser=1;
    $posicionCampo=1;
   
    $upDateUser1 = new UpDateUser();
    
    $upDateUser1->upDateUser($newDato, $posicionUser, $posicionCampo);
    
?>