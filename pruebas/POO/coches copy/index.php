<?php
require("Taller.php");
require("Coche.php");
//$cilindrada,$marca,$matricula,$combustible,$color
    //"gasolina","gasoil","híbrido","eléctrico"

    //
$coches = new Taller();

$objeto1 = new Coche(75,"Ford","PR2345","gasolina","blanco");
$objeto2 = new Coche(75,"Ford","2345BCD","gasolina","naranja");
$objeto3 = new Coche(100,"Kia","1234KNE","hibrido","rojo");
$objeto4 = new Coche(60,"Nissan","4567GHE","gasolina","amarillo");
$objeto5 = new Coche(80,"Hyundai","8123RNW","electrico","verde");
$objeto6 = new Coche(125,"Ford","3456KYH","gasoil","gris");


$coches->añadirCoches($objeto1->crearArrayCoche());

var_dump($coches);
echo '<br><br>';

$coches->añadirCoches($objeto2->crearArrayCoche());

var_dump($coches->getCoches());
echo '<br><br>';

echo count($coches->getCoches());

$coches->setCoches($objeto2->crearArrayCoche()[1]=$objeto3->crearArrayCoche());
?>