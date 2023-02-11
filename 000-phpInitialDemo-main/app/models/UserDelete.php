<?php

class UserDelete extends DB
{

        public function session()
        {
    
            $this->userPosition =  $_SESSION["userPosition"];
    
        }

        function Delete()
        {   

            $this->session();

            $decoded_json = $this->read();


           $decoded_json[$this->userPosition] = $user;

           unset($user);

            $write = $this->write($decoded_json);

          header('Location: /web/');

        }


}

?>