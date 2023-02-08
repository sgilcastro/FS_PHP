<?php

class Taskup extends DB
{

    public $tarea = array();
    public $posicionUser = 5; //======> ¡¡¡¡¡¡OJO necesitamos recibir este dato de algun sitio!!!!!!
    public $titulo = "";
    public $descripcion;
    public $estado;
    public $hora_inicio;
    public $hora_fin;
    public $tareas = array();

    function addTask2($titulo, $descripcion, $estado, $hora_inicio, $hora_fin)
    {
        $decoded_json = $this->read();

        //Cuento el numero de elementos del array de tareas de dentro del usuario para saber cual será la posición de la nueva tarea en el array
        $posicionFinalTarea = count($decoded_json[$this->posicionUser]['tareas']);

        //Creo una array de la nueva tarea
        $tarea = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'estado' => $estado,
            'hora_inicio' => $hora_inicio,
            'hora_fin' => $hora_fin,
        );

        //Añado el array $tarea en el array decodificada $decoded_json de json, indicando la posición que irá:
        $decoded_json = $decoded_json[$this->posicionUser]['tareas'][$posicionFinalTarea] = $tarea;

        //Convertimos array a un archivo json nuevo
        $write = $this->write($decoded_json);

        //=====>>> NO se si este header es correcto. Al añadir la tarea va de nuevo a 
        header('Location:/web/home');

    }

    function addTask($titulo, $descripcion, $estado, $hora_inicio, $hora_fin)
    {
        //Obtengo los datos de la bbdd del archivo json y lo decodifico como un array
        $decoded_json = $this->read();

        //Cuento el numero de elementos del array de tareas de dentro del usuario para saber cual será la posición de la nueva tarea en el array
        $posicionFinalTarea = count($decoded_json[$this->posicionUser]['tareas']);


        //Creo una array de la nueva tarea
        $tarea = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'estado' => $estado,
            'hora_inicio' => $hora_inicio,
            'hora_fin' => $hora_fin,
        );

        //Añado el array $tarea en el array decodificada $decoded_json de json, indicando la posición que irá:

        $decoded_json[$this->posicionUser]['tareas'][$posicionFinalTarea] = $tarea;

        //Paso ese array a un archivo json nuevo.
        $write = $this->write($decoded_json);
        
        header('Location:/web/home');

        /*
        //convierto el nuevo json de nuevo en array
        $decoded_json_new = $this->read();
        // Imprimo el nuevo array decodificada
        echo '<br><br>';
        print_r($decoded_json_new);
        echo '<br><br>';
        //cuento las tareas dentro del array tareas[] del id_usuarios nueva array
        $posicionFinalTarea_new = count($this->decoded_json[$this->posicionUser]['tareas']);
        $posicionFinalTarea_new = count($decoded_json_new[$this->posicionUser]['tareas']);
        echo '<br><br>';
        print_r($posicionFinalTarea_new);
        echo '<br><br>';
        if ($posicionFinalTarea < $posicionFinalTarea_new){
        return 'Se ha insertado la nueva tarea. Ahora hay '.$posicionFinalTarea_new.' tareas.';
        } else {
        return 'Ha pasado algo chungo por que no se ha añadido la nueva tarea';
        };
        */



    }


}

?>