<?php

class Jugador {

    protected $nombre;
    protected $edad;
    protected $altura;
    protected $peso;
    protected $posicion;

    public function __construct($nombre, $edad, $altura, $peso, $posicion) {
        $this->$nombre = $nombre;
        $this->$edad = $edad;
        $this->$altura = $altura;
        $this->$peso = $peso;
        $this->$peso = $posicion;
    }
   
}



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

?>