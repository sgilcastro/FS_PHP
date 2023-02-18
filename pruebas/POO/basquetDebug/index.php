<?php

require("Jugador.php");

$jugadores1 = array();
$jugadores2 = array();
$jugadores3 = array();

$jugador1 = new Jugador("Susana", 31, 1.90, 85, "alero");
$jugador2 = new Jugador("Antonio", 18, 2.18, 96, "base");
$jugador3 = new Jugador("Pepito", 21, 2.10, 80,'escolta');
$jugador4 = new Jugador("Roberto", 19, 1.99, 78,'alero');
$jugador5 = new Jugador("Pepa", 28, 1.96, 90,'alapivot');
$jugador6 = new Jugador("Ismael", 23, 2.12, 98,'ala pivot');
$jugador7 = new Jugador("Eduardo", 20, 2.0, 98,'ala pivot');
$jugador8 = new Jugador("Jose", 16, 2.05, 98,'ala pivot');

?>

<h1>Jugador 1</h1>
<br>

<?php
print_r($jugador1);
echo '<br><br>';
print_r($jugador1->arrayConvert());
echo '<br><br>';
var_dump($jugador1);
echo '<br><br>';
var_dump(($jugador1->arrayConvert()));

echo '<br><br>';
echo $jugador1->muestraObjeto();

?>

<h1>Jugadores1</h1>

<?php
/*

$jugadores1[] = $jugador1->crearJugador();
$jugadores1[] = $jugador2->crearJugador();
$jugadores1[] = $jugador3->crearJugador();
$jugadores1[] = $jugador4->crearJugador();
$jugadores1[] = $jugador5->crearJugador();
$jugadores1[] = $jugador6->crearJugador();
$jugadores1[] = $jugador7->crearJugador();
$jugadores1[] = $jugador8->crearJugador();
*/
/*/
$jugadores1 = array(
    $jugador1->crearJugador(), 
    $jugador2->crearJugador(), 
    $jugador3->crearJugador(), 
    $jugador4->crearJugador(), 
    $jugador5->crearJugador(),
    $jugador6->crearJugador(),
    $jugador7->crearJugador(),
    $jugador8->crearJugador()
);


print_r($jugadores1);
echo '<br>';
echo '<br>';
var_dump($jugadores1);
echo '<br>';
echo '<br>';
print_r($jugadores1[1]);
echo '<br>';
echo '<br>';
print_r($jugadores1[1][0]);
*/
?>

<h1>Jugadores2</h1>

<?php


$jugadores2 = [
    $jugador1->arrayConvert(), 
    $jugador2->arrayConvert(), 
    $jugador3->arrayConvert(), 
    $jugador4->arrayConvert(), 
    $jugador5->arrayConvert(),
    $jugador6->arrayConvert(),
    $jugador7->arrayConvert(),
    $jugador8->arrayConvert()
];

print_r($jugadores2);
echo '<br>';
echo '<br>';

print_r($jugadores2[1]);
echo '<br>';
echo '<br>';

echo "<br>";

foreach (($jugadores2) as $jugadores => $jugador) {
    echo $jugadores.' => '.$jugador.'<br>';

foreach (($jugadores2[1]) as $clave => $valor) {
    echo $clave.' => '.$valor.'<br>';
}
}
print_r($jugadores2[1]['altura']);
echo '<br>';
echo '<br>';

?>

<h1>Jugadores mas altos de 2 metros</h1>

<?php


$x = count($jugadores2);
$i = 0;

echo $i."<br>";

while ($i<$x){
    
    echo $i." <br>";
    if ($jugadores2[$i]['altura']>2.0){
        echo $jugadores2[$i]['nombre']." - ".$jugadores2[$i]['altura']."<br>";
        $i++;
    } else {
        $i++;
    }

}

?>

<h1>Jugadores menores de 21 años</h1>

<?php

$j=0;

while ($j<$x){
    
    echo $j." <br>";
    if ($jugadores2[$j]['edad']<21){
        echo $jugadores2[$j]['nombre']." - ".$jugadores2[$j]['edad']."<br>";
        $j++;
    } else {
        $j++;
    }

}




?>