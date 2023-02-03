<?php

    class Signup {

        public $users = array();
        public $user = array();
        public $id_user;
        public $name;
        public $surname;
        public $userName;
        public $email;
        public $pw;
        public $tareas = array();
        public $id_tarea;
        public $titulo;
        public $descripción;
        public $estado;
        public $hora_inicio;
        public $hora_fin;

        function addDataUser($id_user, $name, $surname, $userName, $email, $pw)
        {
            $user[] = $id_user;
            $user[] = $name;
            $user[] = $surname;
            $user[] = $userName;
            $user[] = $email;
            $user[] = $pw;
            $user[] = $this->tareas;

            return $user;
        }
        
        function addUser($user){
            $users_json = file_get_contents('bbdd2.json');
            $decoded_json = json_decode($users_json, true);
            $users = $decoded_json['users'];
            $users[] = $user;
            return $users;
        }
    }

?>
