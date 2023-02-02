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

    
        function addUser($user){
            return $users[] = $user;
        }

        function addDataUser($id_user, $name, $surname, $userName, $email, $pw)
        {
            $user[0] = $id_user;
            $user[1] = $name;
            $user[2] = $surname;
            $user[3] = $userName;
            $user[4] = $email;
            $user[5] = $pw;
            $tareas[6] = $this->tareas;

            return $user;
        }

        function addDataTarea($tareas, $id_tarea, $titulo, $descripción, $estado, $hora_inicio, $hora_fin){
            $users[6][0] = $tareas;
            $users[6][1] = $id_tarea;
            $users[6][2] = $titulo;
            $users[6][3] = $descripción;
            $users[6][4] = $estado;
            $users[6][5] = $hora_inicio;
            $users[6][6] = $hora_fin;
        }

        function addTarea($tarea){
            return $users[6][] = $tarea;
        }

    }

    


?>
