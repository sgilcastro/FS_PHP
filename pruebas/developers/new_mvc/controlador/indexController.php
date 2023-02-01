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
        require_once("vista/nuevo.php");
    }

    //guardar
    static function guardar(){
        $nombre= $_REQUEST['nombre'];
        $precio= $_REQUEST['precio'];
        $data= "'".$nombre."',".$precio;
        $producto = new Modelo();
        $dato = $producto->insertar("productos",$data);
        header("location:".urlsite);
    }    

    //metodo para mostrar un registro

    //editar
    static function editar(){
        $id = $_REQUEST['id'];
        $producto = new Modelo();
        $dato = $producto->mostrar("productos","id=".$id);
        require_once("vista/editar.php");
    }

    //actualizar
    static function actualizar(){
        $id = $_REQUEST['id'];
        $nombre= $_REQUEST['nombre'];
        $precio= $_REQUEST['precio'];
        $data= "nombre='".$nombre."',precio=".$precio;
        $producto = new Modelo();
        $dato = $producto->actualizar("productos",$data,"id=".$id);
        header("location:".urlsite);
    }    

    //eliminar
    static function eliminar(){
        $id = $_REQUEST['id'];
        $producto = new Modelo();
        $dato = $producto->eliminar("productos","id=".$id);
        header("location:".urlsite);
    }

}