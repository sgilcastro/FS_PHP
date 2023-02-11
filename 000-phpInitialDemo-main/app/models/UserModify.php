<?php

class UserModify extends DB
{

    public $user = array();
        public $id_user;
        public $name;
        public $surname;
        public $userName;
        public $email;
        public $pw;
        public $tareas;
        public $userPosition;
        public $result;

        public function session()
        {
    
            $this->userPosition =  $_SESSION["userPosition"];
    
        }


        public function assign()
        {
    
            $this->id_user = $this->read()[$this->userPosition]['id_user'];
            $this->tareas= $this->read()[$this->userPosition]['tareas'];
    
        }




        function UserModify($id_user, $name, $surname, $userName, $email, $pw, $tareas)
        {   
            $this->session();
            $this->assign();

            $decoded_json = $this->read();

            $this->user = array(
                'id_user' => $this->id_user,
                'name' => $name,
                'surname' => $surname,
                'userName' => $userName,
                'email' => $email,
                'pw' => $pw,
                'tareas' => $this->tareas
                );

            $decoded_json[$this->userPosition] = $this->user;

            $write = $this->write($decoded_json);

          header('Location: /web/');

        }


}

?>