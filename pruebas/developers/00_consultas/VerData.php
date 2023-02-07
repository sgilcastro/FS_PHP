<?php
    include('DB.php');
    class VerData extends DB{

        public $data;
        public $posicionUser = 1;
        public $posicionTarea = 1;
        public $datoUser = 'name';
        public $datoTarea = 'titulo';




        public function usuarios()
        {

            $this->data = $this->read();

        echo '<br>';
                var_dump($this->data);
        echo '<br><br>';
        }
        public function usuario()
        {

            $this->data = $this->read()[$this->posicionUser]; 
            echo '<br><br>';
                var_dump($this->data);
                echo '<br><br>';
        }
        
        public function tareasUsuario()
        {

            $this->data = $this->read()[$this->posicionUser]; 

                echo '<br><br>';
                var_dump($this->data['tareas']);
                echo '<br><br>';
        }


        public function datoUsuario()
        {

            $this->data = $this->read()[$this->posicionUser]; 
                echo '<br><br>';               
                var_dump($this->data[$this->datoUser]);
                echo '<br><br>';


        }


        public function tarea()
        {

            $this->data = $this->read()[$this->posicionUser]; 
                
                echo '<br><br>';
                var_dump($this->data['tareas'][$this->posicionTarea]);
                echo '<br><br>';
        }


        public function datoTarea()
        {

            $this->data = $this->read()[$this->posicionUser];  
                
            var_dump($this->data['tareas'][$this->posicionTarea][$this->datoTarea]);

        }


    }

?>

<?php   

        $object = new VerData();

        $object->usuarios();

        $object->usuario();
        $object->datoUsuario();
        $object->tareasUsuario();
        $object->tarea();
        $object->datoTarea();

?>

