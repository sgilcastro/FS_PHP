<?php

class Jugador {

    public $nombre = "";
    public $edad = 0;
    public $altura = 0.0;
    public $peso = 0.0;
    public $posicion = ""; //base, escolta, alero, alero-pivot, pivot

    public function __construct ($nombre, $edad, $altura, $peso, $posicion) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->posicion = $posicion;
    }

    
}

?>