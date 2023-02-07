<?php

    class ModificarTarea{

        public $tareas = array();
        public $tarea = array();
        public $tarea_new = array();
        public $dato = "";
        public $datoTarea = '';


        function updateTarea($posicionUser, $posicionTarea, $newDato, $datoTarea)
        {
            //Obtengo los datos de la bbdd del archivo json y lo decodifico como un array
            $users_json = file_get_contents('bbdd_new.json');
            $decoded_json = json_decode($users_json, true);

            //obtengo la lista de tareas

             $this->tareas = $decoded_json[$posicionUser]['tareas']; 

             print_r($this->tareas);
             echo '<br><br>';

            //obtengo la lista de campos de la tarea
             $this->tarea = $decoded_json[$posicionUser]['tareas'][$posicionTarea];

             print_r($this->tarea);
             echo '<br><br>';

             //obtengo el campo que quiero modificar
            $this->dato = $decoded_json[$posicionUser]['tareas'][$posicionTarea][$datoTarea];

            print_r($this->dato);
            echo '<br><br>';

            echo 'Vas a modificar el '.$datoTarea.' "'.$this->dato.'" por "'.$newDato.'".<br><br>';

            //Modifico el dato por el nuevo dato (newDato)
            $decoded_json[$posicionUser]['tareas'][$posicionTarea][$datoTarea] = $newDato;

            //vuelvo a obtener el array con el dato cambiado
            $this->tarea_new = $decoded_json[$posicionUser]['tareas'][$posicionTarea];

            print_r($this->tarea_new);
            echo '<br><br>';

            //Paso ese el array con la modificación a un archivo json nuevo.
            $json = json_encode($decoded_json,JSON_PRETTY_PRINT|JSON_PRESERVE_ZERO_FRACTION);
            $bytes = file_put_contents("bbdd_new.json", $json);

            //este echo lo uso para saber si ha pasado la info o no, me dice los bytes que se han añadido
            echo "<br>The number of bytes written are $bytes.<br>";
            

            /*



            */
            
        }
        
    }

?>
