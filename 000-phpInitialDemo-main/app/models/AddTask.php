<?php

class AddTask extends DB{

        public $tarea = array();
        public $posicionUser = 3; //======> ¡¡¡¡¡¡OJO necesitamos recibir este dato de algun sitio!!!!!!
        public $titulo = "";
        public $descripcion;
        public $estado;
        public $hora_inicio;
        public $hora_fin;
        public $tareas = array();
        


        function addTask($titulo, $descripcion, $estado, $hora_inicio, $hora_fin)
        {
            $decoded_json = $this->read();

            //Debería buscar el elemento del usuario que va añadir la tarea y conseguir la posición y dar con 
            //la posición del usuario = posicionUser
            //======>$posicionUser = ???????????
            //======>Buscar en $decoded_json o bien nos manda el id_user desde la página que venga,

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

            //imprimo el numero de elementos de esa array
            echo '<br>Hay '.$posicionFinalTarea.' tareas.';

            //========dentro del array $decoded_json del usuario $posicionUser tengo que añadir la array en el elemento 7 
            //o Tareas en la posición $posicionFinalTarea
            
            //Añado el array $tarea en el array decodificada $decoded_json de json, indicando la posición que irá:
            
            $decoded_json = $decoded_json[$this->posicionUser]['tareas'][$posicionFinalTarea] = $tarea;

            
            //echo el nuevo array generado con la nueva tarea;
            echo '<br><br>';
            print_r($decoded_json);

            //Convertimos array a un archivo json nuevo
            $write = $this->write($decoded_json);
            

            //=====>>> NO se si este header es correcto. Al añadir la tarea va de nuevo a 
            header('Location:/web/signuphome');

            //este echo lo uso para saber si ha pasado la info o no, me dice los bytes que se han añadido
            echo "<br>The number of bytes written are $bytes.<br>";

            //convierto el nuevo json de nuevo en array
            
            $decoded_json_new = $this->read();
            
            //cuento las tareas dentro del array tareas[] del id_usuarios nueva array

            $posicionFinalTarea_new = count($decoded_json[$this->posicionUser]['tareas']);

            if ($posicionFinalTarea < $posicionFinalTarea_new){
                return 'Se ha insertado la nueva tarea. Ahora hay '.$posicionFinalTarea_new.' tareas.';
            } else {
                //=====> ¿Aqui iría un error?
                return 'Ha pasado algo chungo por que no se ha añadido la nueva tarea';
            }

        }
        
    }

?>
