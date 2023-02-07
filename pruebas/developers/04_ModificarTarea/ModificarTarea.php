<?php

    class ModificarUser{

        public $user = array();
        public $posicionUser = 0;
        public $nombreTareas = 'tareas';
        public $nombreDatoTarea = '';
        

        function updateUser($posicionUser, $newDato, $nombreDatoTarea)
        {
            //Obtengo los datos de la bbdd del archivo json y lo decodifico como un array
            $users_json = file_get_contents('bbdd_new.json');
            $decoded_json = json_decode($users_json, true);

            echo '<br><br>';
            print_r($decoded_json);
            echo '<br><br>';

            $this->user = $decoded_json[$posicionUser][$posicionDato];

            echo 'Vas a modificar el '. $posicionDato ." ".$this->user.' por '.$newDato.' del usuario en la posición '. $posicionUser.'.<br><br>';

            $decoded_json[$posicionUser][$posicionDato] = $newDato;

            echo '<br><br>';
            print_r($decoded_json);
            echo '<br><br>';

            //Paso ese array a un archivo json nuevo.
            $json = json_encode($decoded_json,JSON_PRETTY_PRINT|JSON_PRESERVE_ZERO_FRACTION);
            $bytes = file_put_contents("bbdd_new.json", $json);

            //este echo lo uso para saber si ha pasado la info o no, me dice los bytes que se han añadido
            echo "<br>The number of bytes written are $bytes.<br>";

            
        }
        
    }

?>
