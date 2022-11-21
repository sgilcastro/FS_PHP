<?php

class Employee {
    //Atributos de clase
    public $nombre = "";
    public $salario = 0;


    //Metodos de clase
    
    public function initialize($nombre, $salario){
        $this->$nombre=$nombre;
        $this->$salario=salario;
    }
    
    public function print(){
        
        if (this->salario > 6000){
            return "debes pagar impuestos";
        } else {
            return "no debes pagar impuestos";
        }

    }
}

    //Creación y asignación de objetos
    $emp1 = new Employee();
    echo ($emp1->print(5000));
    echo '<br>';
    $emp2 = new Employee();
    echo ($emp1->print(7000));
    echo '<br>';
?>


class Employee {
        //Atributos de clase
            private $nombre;
            private $salario;

        //Metodos de clase
        public function initialize($nombre, $salario){
            $this->$nombre=$nombre;
            $this->$salario=$salario;
        }

        public function print(){
            $impuestos;
            if ($this->$salario > 6000){
                $impuestos = "debes pagar impuestos";
            } else {
                $impuestos = "no debes pagar impuestos";
            }

            echo $this->$nombre . ", " . $impuestos;
            echo '<br>';
        }
    }

        //Creación y asignación de objetos
        $emp1 = new Employee();
        $emp1->initialize("Pepe", 5000);
        $emp1->print();
 

    ?>