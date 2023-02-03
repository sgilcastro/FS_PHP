<?php

    class Signup {

        public $tareas = array();
        public $tarea = array();        
        public $titulo;
        public $descripción;
        public $estado;
        public $hora_inicio;
        public $hora_fin;



        function addDataTarea($tareas, $titulo, $descripción, $estado, $hora_inicio, $hora_fin){
            $tarea[] = $tareas;
            $tarea[] = $id_tarea;
            $tarea[] = $titulo;
            $tarea[] = $descripción;
            $tarea[] = $estado;
            $tarea[] = $hora_inicio;
            $tarea[] = $hora_fin;

            return $tarea;
        }

        //necesito saber a que usuario introducir la tarea

        function addTarea($id_user,$tarea){
            return $users[$id_user][] = $tarea;
        }

    }

    


?>
