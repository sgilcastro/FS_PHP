<?php

    class DB{

        public $decoded_json;


            public function read(){

                $this->decoded_json = json_decode(file_get_contents('bbdd_new.json'), true);

                return $this->decoded_json;


            }

    }

?>


$users_json = file_get_contents('bbdd_new.json');
            $decoded_json = json_decode($users_json, true);