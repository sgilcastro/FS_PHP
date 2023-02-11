<?php

class Taskup extends DB
{

    public $tarea = array();
    public $userPosition; 
    public $titulo = "";
    public $descripcion;
    public $estado;
    public $hora_inicio;
    public $hora_fin;
    public $tareas = array();


    public function session()
    {

        $this->userPosition =  $_SESSION["userPosition"];

    }


    function addTask($titulo, $descripcion, $estado, $hora_inicio, $hora_fin)
    {

        $this->session();
       
        $decoded_json = $this->read();
        
        $posicionFinalTarea = count($decoded_json[$this->userPosition]['tareas']);

        $tarea = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'estado' => $estado,
            'hora_inicio' => $hora_inicio,
            'hora_fin' => $hora_fin,
        );

        $decoded_json[$this->userPosition]['tareas'][$posicionFinalTarea] = $tarea;

        $write = $this->write($decoded_json);
        
        header('Location:/web/home');

    }

}

?>