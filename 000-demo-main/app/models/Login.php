<?php
//require("DB.class.php");

class Login extends DB{
 
   

        //public $username = $_POST["user"]
        

        public $username;
        public $pw;
        
        public $dataUser; 
        public $user; 
        public $gate = 0; 
        public $contador = -1;
        public $result;
        public $userResult;
        public $pwResult;  
        public $pasword;
        public $paswordUser;  
        


            public function assignUser(){

                $this->username = $_POST["username"];
                

                return $this->username;

            }

            public function assignPw(){

                $this->pw = $_POST["pw"];

                return $this->pw;
            }

            public function userComprobation(){

                foreach($this->read() as $this->dataUser){
                    
                    $this->user = $this->dataUser['userName'];

                    $this->username = $this->assignUser();
                    
                    if($this->gate != 1){ 

                        $this->contador = $this->contador + 1;
                        
                        if ($this->user === $this->username){

                            $this->userResult = true;
                            $this->gate = 1;
                            
                        }else{

                            $this->userResult = false;;
                            $this->gate  = 0;

                        }      
                    } 
                }

                return $this->userResult;
                
            }



            public function pwComprobation(){

                foreach($this->read() as $variables ){  

                    $this->paswordUser = $this->read()[$this->contador]; 

                    $this->pasword = $this->paswordUser['pw']; 

                    $this->pw = $this->assignPw();
                    
                    if ($this->pasword == $this->pw){
                       
                        $this->pwResult = true;

                    }else{

                        $this->pwResult = false;

                    }
                
                }

                return $this->pwResult;

            }


            public function LoginAction(){

                    if(($this->userComprobation()) && ($this->pwComprobation())){

                        $this->result = header('Location:/web/home');

                    }elseif (($this->userComprobation()) && (!$this->pwComprobation())) {

                        $this->result = header('Location:/web/loginerror');

                    }else{
                        
                        $this->result = header('Location:/web/signuphome');
                    
                    }

                    return $this->result;
                
            }

}

?>

