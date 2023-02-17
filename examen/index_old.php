<?php

<<<<<<< HEAD
include(Jugador.php);
=======
include("Jugador.php");

/*registrar info de jugadors de baloncestp
nombre
edad
altura
peso
posicion (base, escolta, alero, alapivot, pivot)
Registrar 6 jugadores
Porcesos 
mostrar nombre y altura de jugadores de mas de 2 mts de altura
muestra nombre y edad jugadores de menos de 21 años.
 */

>>>>>>> 5de7780161361aa0abc859b91b8b9ffc24dd0475

$jugadores = array();

$jugador1 = new Jugador("Susana", 20, 2.0, 70,'ala pivot');
<<<<<<< HEAD
$jugador2 = new Jugador("Susana", 20, 2.0, 70,'ala pivot');
$jugador3 = new Jugador("Susana", 20, 2.0, 70,'ala pivot');
$jugador4 = new Jugador("Susana", 20, 2.0, 70,'ala pivot');
$jugador5 = new Jugador("Susana", 20, 2.0, 70,'ala pivot');
$jugador6 = new Jugador("Susana", 20, 2.0, 70,'ala pivot');

$jugadores = array($jugador1 ,$jugador2 ,$jugador3 ,$jugador4,$jugador5, $jugador6 );
=======
$jugador2 = new Jugador("Susana", 20, 2.0, 70,'base');
$jugador3 = new Jugador("Pepito", 21, 2.10, 80,'escolta');
$jugador4 = new Jugador("Roberto", 19, 1.99, 78,'alero');
$jugador5 = new Jugador("Pepa", 28, 1.96, 90,'alapivot');
$jugador6 = new Jugador("Ismael", 255, 2.1, 98,'ala pivot');

$jugadores = array(new Jugador("Susana", 20, 2.0, 70,'ala pivot'), new Jugador("Susana", 20, 2.0, 70,'base'),new Jugador("Pepito", 21, 2.10, 80,'escolta'));

var_dump($jugadores[0]);
>>>>>>> 5de7780161361aa0abc859b91b8b9ffc24dd0475

var_dump($jugadores);

$posicion = count($jugadores[0][0])



//('base', 'escolta', 'alero', 'alapivot', 'pivot')
?>