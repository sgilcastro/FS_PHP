<?php
   
    abstract class ArmaClass {
        //Atributos de clase
        protected string $nombre;
 
        //constructor
        public function __construct($nombre){
            $this->nombre = $nombre;
        }

        //getters
        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        //Metodos
        public abstract function atacar();

    }




?>