<?php

class Jugador{

    protected $nombre = "";
    protected $edad = 0;
    protected $altura = 0.0;
    protected $peso = 0.0; 
    protected $posicion = "";
    //protected $jugador = array();

    public function __construct(string $nombre, int $edad, float $altura, float $peso, string $posicion) {
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->altura=$altura;
        $this->peso=$peso;
        $this->posicion=$posicion;
     
    }
    
    /*
    //Función que coge los atributos del objeto de esta clase que la use y crea un array jugador.
    public function crearJugador(){
        return $this->jugador[] = array($this->nombre,$this->edad,$this->altura,$this->peso,$this->posicion);
    }
    */

    //Función que convierte el objeto de esta clase que la use en array
    public function arrayConvert(){
        return get_object_vars($this);
    }

    

    function muestraObjeto() {
        foreach ($this as $clave => $valor) {
            echo $clave.' => '.$valor.'<br>';
        }
     }

    

    



}

?>