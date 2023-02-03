<?php

    class Tarea {

        public $tarea = array();
        public $titulo = "";
        public $descripcion;
        public $hora_inicio;
        public $hora_fin;
        public $tareas = array();


        function addTarea($titulo, $descripcion, $estado, $hora_inicio, $hora_fin)
        {
            //Obtengo los datos de la bbdd del archivo json y lo decodifico como un array
            $users_json = file_get_contents('bbdd_new.json');
            $decoded_json = json_decode($users_json, true);

            //Debería buscar el elemento del usuario que va añadir la tarea y conseguir la posición y dar con el id_usuario
            //=======================$id_user = ???????????
            //====================== Buscar en $decoded_json o bien nos manda el id_user desde la página que venga,


            //Cuento el numero de elementos del array de tareas de dentro del usuario para saber cual será la posición de la nueva tarea en el array
            $posicionFinalTarea = count($decoded_json);


            //Creo una array de la nueva tarea
            $tarea = array(
            'titulo' => $id_user,
            'descripcion' => $name,
            'estado' => $surname,
            'hora_inicio' => $userName,
            'email' => $email,
            'hora_fin' => $pw,
            );

            //Imprimir para ver el array creada con print_r
            //print_r($user);

            //imprimo el numero de elementos de esa array
            echo '<br>Hay '.$posicionFinalTarea.' tareas.';

            //Añado el array $tarea en el array decodificada $decoded_json de json, indicando la posición que irá:
            //================= Tengo que añadir una array dentro de otra array =====  $decoded_json[id_usuario][$posicionFinal] = $user;
            //========dentro del array $decoded_json del usuario $id_usuario tengo que añadir la array en el elemento 7 o Tareas en la posición $posicionFinalTarea
            
            //echo el nuevo array generado con la nueva tarea;
            echo '<br><br>';
            print_r($decoded_json);

            //Paso ese array a un archivo json nuevo.
            $json = json_encode($decoded_json,JSON_PRETTY_PRINT|JSON_PRESERVE_ZERO_FRACTION);
            $bytes = file_put_contents("bbdd_new.json", $json);

            //este echo lo uso para saber si ha pasado la info o no, me dice los bytes que se han añadido
            echo "<br>The number of bytes written are $bytes.<br>";

            //convierto el nuevo json de nuevo en array
            $users_json_new = file_get_contents('bbdd_new.json');
            $decoded_json_new = json_decode($users_json_new, true);

            // Imprimo el nuevo array decodificada
            echo '<br><br>';
            print_r($decoded_json_new);
            echo '<br><br>';

            //cuento las tareas dentro del array tareas[] del id_usuarios nueva array
            //================ $posicionFinalTarea_new = count($decoded_json_new);

            if ($posicionFinalTarea < $posicionFinalTarea_new){
                return 'Se ha insertado la nueva tarea. Ahora hay '.$posicionFinalTarea_new.' tareas.';
            } else {
                return 'Ha pasado algo chungo por que no se ha añadido la nueva tarea';
            };

        }
        
    }

?>
