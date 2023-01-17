<?php

class MiPatronSingleton{
    // Contenedor de la instancia del singleton
    private static $instance;
    // Un constructor privado evita la creación de un nuevo objeto
    
    private function MiPatronSingleton()
    {
        echo 'Objeto creado.';
    }
    // método singleton
    public static function singleton()
    {
        if (!isset(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c;
        }
        return self::$instance;
    }
    // método de ejemplo
    public function holamundo()
    {
        echo 'Hola Mundo';
    }
    // Evita que el objeto se pueda clonar
    public function __clone()
    {
        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
    }
}

// ¿Cómo obtengo una instancia de la clase y cómo uso sus métodos?
$objetoMiPatronSingleton = MiPatronSingleton::singleton();
$objetoMiPatronSingleton->holamundo();

?>