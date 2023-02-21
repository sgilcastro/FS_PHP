<?php

/*
Crea un projecte Bancs, afegeix al projecte una classe Account amb atributs per número de compte, 
nom i cognoms del client/a i el saldo actual. Defineix en la classe els següents mètodes:
- Constructor que inicialitzi els atributs.
- Crea el mètode deposit($amount) que permet ingressar una quantitat al compte.
- Crea el mètode withdraw($amount) que permet retirar una quantitat del compte sempre que hi hagi saldo, 
si no n'hi ha, el mètode haurà de retornar un missatge d'error.
- Getters i Setters.
Crea una petita interfície amb ajuda d'HTML I CSS que permeti ingressar una quantitat i dipositar o retirar el saldo del compte.
Fes les validacions pertinents per assegurar que la quantitat ingressada per l'usuari/ària és correcta.


*/
    class AccountClass {
        //Atributos de clase
        protected $numCuenta;
        protected $nombreCliente;
        protected $apellidoCliente;
        protected $saldoActual = 500;
        protected $respuesta;
        protected $amount;

        //constructor
        public function __construct($numCuenta, $nombreCliente, $apellidoCliente){
            $this->numCuenta = $numCuenta;
            $this->nombreCliente = $nombreCliente;
            $this->apellidoCliente = $apellidoCliente;
            $this->saldoActual;
        }

        //getters
        public function getNumCuenta(){
            return $this->numCuenta;
        }
        public function getNombreCliente(){
            return $this->nombreCliente;               
        }
        public function getApellidoCliente(){
            return $this->apellidoCliente;         
        }

        public function getNombreApellido(){
            return $this->nombreCliente. ' '. $this->apellidoCliente;
        }
        public function getSaldoActual(){
            return $this->saldoActual;            
        }

        //setters
        public function setNumCuenta($numCuenta){
            $this->numCuenta = $numCuenta;

        }
        public function setNombreCliente($nombreCliente){
            $this->nombreCliente = $nombreCliente;
        
        }
        public function setApellidoCliente($apellidoCliente){
            $this->apellidoCliente = $apellidoCliente;
     
        }

        public function setSaldoActual($saldoActual){
            $this->saldoActual = $saldoActual;
        }
        
    
        //Metodos
        //Crea el mètode deposit($amount) que permet ingressar una quantitat al compte.
        public function deposit ($amount) {
            //ingresar una cantidad en la cuenta $saldoActual + $amount
            $this->amount = $amount;
            $this->saldoActual = $this->saldoActual + $amount;
            return $this->saldoActual;
        }
        //- Crea el mètode withdraw($amount) que permet retirar una quantitat del compte sempre que hi hagi saldo, 
        //si no n'hi ha, el mètode haurà de retornar un missatge d'error.
        public function withdraw($amount) {
            //permet retirar una quantitat del compte sempre que hi hagi saldo, si no n'hi ha, el mètode haurà de retornar un missatge d'error.
            $this->amount = $amount;
            $this->saldoActual = $this->saldoActual - $amount;
            return $this->saldoActual;
        }
        
    }

?>