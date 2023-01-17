<?php

/*
Refactoritzar la classe Tigger en un Singleton considerant els següents punts:
- Defineix el mètode getInstance () que no tingui arguments. 
    Aquesta funció és responsable de crear una instància de la classe Tigger només una vegada
    i tornar aquesta única instància cada vegada que es crida.
- Imprimeix en pantalla múltiples vegades el rugit de Tigger.
- Afegeix un mètode getCounter () que retorni el nombre de vegades que Tigger ha realitzat rugits.
*/



class Tigger {
        
        static private $instance = null;
        protected static $numRugidos = 0;

        private function __construct() {
                echo "Building character..." . PHP_EOL;
        }
        
        public function getTotalRugidos(){
                return self::$numRugidos;
                //echo self::$numRugidos . PHP_EOL;
        }

        public function roar() {
                echo "Grrr!" . PHP_EOL;
                self::$numRugidos++;
        }

        public static function getInstance () {
                if (self::$instance == null) {
                        self::$instance = new Tigger();
                }
                return self::$instance;
        }
 
}

//$tigger = new Tigger();
//roar();

$tigger = Tigger::getInstance();
echo "<br>";
$tigger->roar();
$tigger->roar();
$tigger->roar();
$tigger->roar();
echo "<br>";

echo $tigger->getTotalRugidos();

?>