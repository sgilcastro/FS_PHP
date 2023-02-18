<?php
require("Coche.php");
//$cilindrada,$marca,$matricula,$combustible,$color
    //"gasolina","gasoil","híbrido","eléctrico"

    //

$objeto1 = new Coche(75,"Ford","PR2345","gasolina","blanco");
$objeto2 = new Coche(75,"Ford","2345BCD","gasolina","naranja");
$objeto3 = new Coche(100,"Kia","1234KNE","hibrido","rojo");
$objeto4 = new Coche(60,"Nissan","4567GHE","gasolina","amarillo");
$objeto5 = new Coche(80,"Hyundai","8123RNW","electrico","verde");
$objeto6 = new Coche(125,"Ford","3456KYH","gasoil","gris");

$coches = [
$objeto1->crearArrayCoche(), 
$objeto2->crearArrayCoche(),
$objeto3->crearArrayCoche(),
$objeto4->crearArrayCoche(),
$objeto5->crearArrayCoche(),
$objeto6->crearArrayCoche()
];

?>
<h1>Coches</h1>

<?php
var_dump($coches);
echo'<br><br>';
?>

<h1>array coches2 posicion 0</h1>

<?php

/*
print_r($coches[0]);
echo'<br><br>';

echo $coches[0]['color'];
echo'<br><br>';

$coches[0]['color'] = 'rojo';

echo $coches[0]['color'];
echo '<br><br>';

print_r($coches[0]);
echo'<br><br>';
*/

$x = count($coches);
echo $x;
echo'<br><br>';

?>

<h1>Cambiar el color de los coches pares</h1>

<?php

for($i=2; $i<=$x;$i=$i+2){
    //echo $i;
    echo $coches[$i-1]['matricula']." - ".$coches[$i-1]['color'];
    $coches[$i-1]['color'] = 'azul';
    echo " ahora es ".$coches[$i-1]['color']. "<br>";
}
?>

<h1>Cambiar el color de los coches impares</h1>

<?php
for($i=1; $i<=$x;$i=$i+2){
    //echo $i;
    echo $coches[$i-1]['matricula']." - ".$coches[$i-1]['color'];
    $coches[$i-1]['color'] = 'rojo';
    echo " ahora es ".$coches[$i-1]['color']. "<br>";
}

recibirArray($coches[$i]);

?>

<h1>Coches con combustible tipo gasolina (While)</h1>

<?php
$i=0;
while($i<$x){
    if($coches[$i]['combustible']=='gasolina'){
        echo $coches[$i]['marca']. "<br>";
        $i++;
    } else {
        $i++;
    }
}
?>

<h1>Coches con combustible tipo gasolina (For)</h1>

<?php
for($i=0; $i<$x;$i++){
    if($coches[$i]['combustible']=='gasolina'){
        echo $coches[$i]['marca']. "<br>";
    } else {
    }
}
echo'<br><br>';
?>

<h1>Listado de coches (Foreach indicando la posición)</h1>

<?php
foreach ($coches as $coche) {
    foreach ($coche as $etiqueta => $valor) {
        echo $etiqueta.": ".$valor . '<br>';
     }
     echo'<br>';
} 
echo'<br><br>';

foreach ($coches as $coche) {
    foreach ($coche as $valor) {
        echo $valor . '<br>';
     }
     echo'<br>';
} 
echo '<br><br>';
?>
<h1>Otros</h1>
<?php
print_r($objeto1);
echo '<br><br>';



$objeto1->setColor('rojo');
$objeto3->setColor('rojo');
$objeto5->setColor('rojo');

$objeto2->setColor('azul');
$objeto4->setColor('azul');
$objeto5->setColor('azul');

print_r($objeto1);
echo '<br><br>';


?>