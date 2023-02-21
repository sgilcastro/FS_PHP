<?php
    class PokerDice {
        //Atributos de clase
        protected $cara;
        protected $figura;

        protected static $numLanzamientos = 0;
    //un atributo de contar tiradas en la clase
        //getters
        public function getTotalLanzarDado() {
            return self::$numLanzamientos;
        }

        //Metodos
         public function lanzarDado() {
            $this->cara = mt_rand(1, 6);
            self::$numLanzamientos++;
            return $this->cara;
        }
        public function darNombreFigura() {
            $this->cara;
            $this->figura = "";

            switch ($this->cara){

                case 1:
                    $this->figura = "As";
                    break;
                case 2:
                    $this->figura = "K";

                    break;
                case 3:
                    $this->figura = "Q";
                    break;
                case 4:
                    $this->figura = "J";
                    break;
                case 5:
                    $this->figura = 8;
                    break;
                case 6:
                    $this->figura = 7;
                    break;
            }
            return $this->figura;
        }
 
    }

?>