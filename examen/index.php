<?php

include(Jugador.php);

$jugadores = array();

$jugador1 = new Jugador("Susana", 20, 2.0, 70,'ala pivot');
$jugador2 = new Jugador("Susana", 20, 2.0, 70,'ala pivot');
$jugador3 = new Jugador("Susana", 20, 2.0, 70,'ala pivot');
$jugador4 = new Jugador("Susana", 20, 2.0, 70,'ala pivot');
$jugador5 = new Jugador("Susana", 20, 2.0, 70,'ala pivot');
$jugador6 = new Jugador("Susana", 20, 2.0, 70,'ala pivot');

$jugadores = array($jugador1 ,$jugador2 ,$jugador3 ,$jugador4,$jugador5, $jugador6 );

var_dump($jugadores);




//('base', 'escolta', 'alero', 'alapivot', 'pivot')
?>