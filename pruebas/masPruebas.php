<?php

class Employee {
    //Atributos de clase
    private $nombre;
    private $salario;


    //Metodos de clase
    
    public function initialize($nombre, $salario) {
        $this->nombre=$nombre;
        $this->salario=$salario;
    }
    
    public function print() {
        if ($this->salario > 6000) {
            return $this->nombre . " debes pagar impuestos";
        } else {
            return $this->nombre . " no debes pagar impuestos";
        }

    }
}
    //Creación y asignación de objetos
    $emp1 = new Employee();
    $emp1->initialize("Susana", 5000);
    echo $emp1->print();
    echo '<br>';
    
    $emp2 = new Employee();
    $emp2->initialize("Pepe", 7000);
    echo $emp2->print();
    echo '<br>';
?>