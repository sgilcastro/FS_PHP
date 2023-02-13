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

        }
        public function usuario()
        {
            $this->data = $this->read()[$this->posicionUser]; 
            echo '<br><br>';
            var_dump($this->data);

        }
        
        public function tareasUsuario()
        {
            $this->data = $this->read()[$this->posicionUser]['tareas']; 
            echo '<br><br>';
            var_dump($this->data);
        }


        public function datoUsuario()
        {
            $this->data = $this->read()[$this->posicionUser][$this->datoUser]; 
            echo '<br><br>';               
            var_dump($this->data);

        }


        public function tarea()
        {
            $this->data = $this->read()[$this->posicionUser]['tareas'][$this->posicionTarea];
            echo '<br><br>';
            var_dump($this->data);
        }


        public function datoTarea()
        {
            $this->data = $this->read()[$this->posicionUser]['tareas'][$this->posicionTarea][$this->datoTarea];  
            echo '<br><br>';    
            var_dump($this->data);

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