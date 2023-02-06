<?php
require("DB.class.php");

class Login extends DB{

        //public $username = $_POST["user"]
        
        public $username = "usuario";
        public $pw = "2222";
        
        public $dataUser; 
        public $user; 
        public $gate = 0; 
        public $contador = -1;
        public $result; 
        public $pasword;
        public $paswordUser;  
        
       
            public function userComprobation(){

                foreach($this->read() as $this->dataUser){
                    
                    $this->user = $this->dataUser['userName'];
                    
                    if($this->gate != 1){ 

                        $this->contador = $this->contador + 1;
                        
                        if ($this->user === $this->username){

                            $this->result = true;
                            $this->gate = 1;
                                
                        }else{

                            $this->result = "Header signup";
                            $this->gate  = 0;

                        }      
                    } 
                }

                return $this->result;
            
            }



            public function pwComprobation(){

                foreach($this->read() as $variables ){  

                    $this->paswordUser = $this->read()[$this->contador]; 

                    $this->pasword = $this->paswordUser['pw']; 
                    
                    if ($this->pasword == $this->pw){
                       
                        $this->result = true;

                    }else{

                        $this->result = "NO lo has logrado";

                    }

                    return $this->result;
                
                }
            }


}

?>

<?php



$objet1 = new Login();


//var_dump($objet1->read());
echo $objet1->userComprobation();
echo $objet1->pwComprobation();


//print_r($objet1->$this->read());

?>