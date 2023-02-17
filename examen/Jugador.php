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

