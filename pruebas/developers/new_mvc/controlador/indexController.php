<?php
//traemos (invocamos) el modelo, la conexion a la bbdd y las funciones que nos permiten manipular
//mediante consultas a dicha bbdd
require_once("modelo/indexModelo.php");

//creamos clase para poder usar el archivo

class modeloController{

    private $model;
    //constructor
    public function __construct(){
        //hacemos la conexion a nuestra bbdd
        $this->model = new Modelo();
       
    }
    
    //metodo para mostrar un registro
    static function index(){
        //definimos una variable como vamos a usar tabla productos lo poenemos así
        $productos = new Modelo();
        //para extraer datos (está es la condición)
        $dato = $productos->mostrar("productos","1");
        require_once("vista/indexVista.php");
    }

    //nuevo
    static function nuevo(){
        require_once("vista/nuevoVista.php");
    }

    //metodo para mostrar un registro
}