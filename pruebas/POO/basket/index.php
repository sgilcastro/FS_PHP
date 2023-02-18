<?php

require("Jugador.php");

//$jugador = new Jugador($nombre, $edad, $altura, $peso, $posicion);

$listado = [];

$jugador1 = new Jugador("Susana", 31, 1.90, 85, "alero");
$listado[] = $jugador1;
$jugador2 = new Jugador("Pepe", 25, 2.10, 98, "escolta");
$listado[] = $jugador2;

$jugador3 = new Jugador("Leon", 24, 2.07, 100, "base");
$listado[] = $jugador3;
$jugador4 = new Jugador("Gonzalo", 23, 2.20, 150, "alero-pivot");
$listado[] = $jugador4;
$jugador5 = new Jugador("Jose", 20, 1.95, 99, "base");
$listado[] = $jugador5;
$jugador6 = new Jugador("Roberto", 19, 2.00, 90, "alero");
$listado[] = $jugador6;
$jugador7 = new Jugador("Antonio", 29, 1.97, 85, "escolta");
$listado[] = $jugador7;
$jugador8 = new Jugador("Bermudex", 24, 2.09, 102, "alero");
$listado[] = $jugador8;

var_dump($listado);

echo "<br>";



//base, escolta, alero, alero-pivot, pivot

$listado2 = array($jugador1, $jugador2, $jugador3, $jugador4, $jugador5,$jugador6,$jugador7,$jugador8);
echo "<br>";echo "<br>";

var_dump($listado2);



foreach($listado as $jugadores)
{
    foreach($jugadores as $jugador)
	{
		foreach($jugador as $dato[jugador])
		{
			echo " $dato ";
			
		}

	}
	echo "<br>";
}

?>

<?php
 
$productos = array(	
	
	'Bolígrafo Azul' => array(
		'marca' => "Bic",
		'precio'  => "0.75€",
		'referencia'  => "552BIC12"
	),
	
	'Pegamento' => array(
		'marca' => "Pritt",
		'precio'  => "1.75€",
		'referencia'  => "567PRI13"
	)
);
 
foreach($productos as $producto => $detalles)
{
	echo "<h1> $producto </h1>";
 
    foreach($detalles as $indice => $valor)
	{
		echo "<p> $indice:$valor </p>";
	}
}
 
?>