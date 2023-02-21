<?php
/*
Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.
Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, 
genera un valor aleatori per a l'objecte a què se li aplica el mètode.
Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.
Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.
A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus.
*/  
class PokerDice {
    protected $figuras = ["As","K","Q","J","7","8"];
    protected $cara;
    protected $figura;
    protected static $tiradas = 0;
    protected $contador;
    //protected $todosDados = [];

    public function __construct (){
    }
    public function getFigura(){
        return $this->figura;
    }
    public function throw(){
        $numAleatorio = rand(0,5);
        $this->cara = $numAleatorio;
        $this->getTotalThrows();
        $this->contador=++self::$tiradas; // cada vez que se lanza el dado, se cuenta el lanzamiento 
        return $this->shapeName();

    }

    public function shapeName(){
        $this->figura = $this->figuras[$this->cara];
        return $this->figura;
    }
    public function getTotalThrows(){
        //$this->todosDados[]=$this->figura;
        //$this->contador = count($this->todosDados);
        return $this->contador;
    }


}


?>