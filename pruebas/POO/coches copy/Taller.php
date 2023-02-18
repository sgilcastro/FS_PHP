<?php

class Taller {
    private $coches = array();

    public function __constructor($coches){
        $this->coches = $coches;
    }
    public function getCoches(){
        return $this->coches;
    }

    public function setCoches(array $coches){
        $this->coches=$coches;
    }

    public function añadirCoches(array $coches){
        $this->coches[]=$coches;
    }


}