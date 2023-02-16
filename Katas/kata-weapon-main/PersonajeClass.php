<?php

   /*- El personaje tiene nombre y unos puntos de vida y de magia que pueden variar.
- También tiene un arma, solo puede tener un arma equipada a la vez.
- Tenemos 3 armas: espada, arco y maza.
- El personaje puede atacar, el efecto del ataque variará en función del arma.
- Al atacar se debe mostrar uno u otro mensaje en función del arma utilizada.

" [nombre_personaje] atacó con la espada! "
" [nombre_personaje] lanzó una flecha!    "
" [nombre_personaje] golpeó con su maza!  " */
   
    class PersonajeClass {
        //Atributos de clase
        protected $nombre;
        protected $puntosVida = 5;
        protected $magia = 5;
        protected $arma = 0;

        //constructor
        public function __construct($nombre){
            $this->nombre = $nombre;
            $this->puntosVida;
            $this->magia;
            $this->arma;
        }

        //getters
        public function getNombre(){
            return $this->nombre;
        }
        public function getArma(){
            return $this->magia;         
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setArma($arma){
            $this->arma = $arma;       
        }

        
        
    }


?>