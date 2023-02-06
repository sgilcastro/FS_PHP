<?php

    class Signup {

        public $user = array();
        public $id_user = "";
        public $name;
        public $surname;
        public $userName;
        public $email;
        public $pw;
        public $tareas = array();

        function addUser($name, $surname, $userName, $email, $pw)
        {

            //Obtengo los datos de la bbdd del archivo json y lo decodifico como un array
            $users_json = file_get_contents('bbdd_new.json');
            $decoded_json = json_decode($users_json, true);

            //Cuento el numero de elementos para saber cual será la posición del nuevo user en el array
            //y dar el id usuario.
            $posicionFinal = count($decoded_json);
            $id_user = $posicionFinal + 1;
            //Creo una array del nuevo usuario
            $user = array(
            'id_user' => $id_user,
            'name' => $name,
            'surname' => $surname,
            'userName' => $userName,
            'email' => $email,
            'pw' => $pw,
            'tareas' => $this->tareas
            );
            //Imprimir para ver el array creada con print_r
            //print_r($user);

            //imprimo el numero de elementos
            echo '<br>Hay '.$posicionFinal.' usuarios.';

            //Añado el array $user en el array decodificada $decoded_json de jsno, indicando la posición que irá:
            $decoded_json[$posicionFinal] = $user;
            
            //echo el nuevo array generado con el nuevo user;
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

            //cuento la nueva array
            $posicionFinal_new = count($decoded_json_new);

            if ($posicionFinal < $posicionFinal_new){
                return 'Se ha insertado el nuevo usuario. Ahora hay '.$posicionFinal_new.' usuarios.';
            } else {
                return 'Ha pasado algo chungo por que no se ha añadido el nuevo usuario';
            };

            //==========para tener objeto en lugar de array del archivo json==========

            /*
            $users_json = file_get_contents('bbdd2.json');
            $decoded_json = json_decode($users_json, false);

            echo '<br><br>';
            print_r($decoded_json);
            echo '<br><br>';

            var_dump($decoded_json);
            */


        }
        
    }

?>
