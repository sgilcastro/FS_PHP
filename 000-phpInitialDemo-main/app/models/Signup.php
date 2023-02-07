<?php

    class Signup extends DB{

        public $user = array();
        public $id_user = "";
        public $name;
        public $surname;
        public $userName;
        public $email;
        public $pw;
        public $tareas = array();
        public $result;

        function addUser($name, $surname, $userName, $email, $pw)
        {   

            $decoded_json = $this->read();


            $posicionFinal = count($decoded_json);
            $id_user = $posicionFinal + 1;

            $user = array(
                'id_user' => $id_user,
                'name' => $name,
                'surname' => $surname,
                'userName' => $userName,
                'email' => $email,
                'pw' => $pw,
                'tareas' => $this->tareas
                );

            $decoded_json[$posicionFinal] = $user;

            $write = $this->write($decoded_json);

          header('Location: /web/');

        }

    

      
    }
  
?>

