<?php
    include('DB.php');
    class VerTares extends DB{

        public $data;
        public $contador = 0;


        public function data()
        {

            $this->data = $this->read()[$this->contador]; 
                
                var_dump($this->data["tareas"]);

            }
        }
?>

<?php   

        $object = new VerTares();

        $object->data();
	
?>

