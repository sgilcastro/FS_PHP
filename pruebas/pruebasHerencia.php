<?php
        //clase padre
        class Shape {
            //Atributos de clase
            protected $ancho;
            protected $alto;
            

            public function __construct ($ancho, $alto) {
                $this->ancho=$ancho;
                $this->alto=$alto;
            }


        }

        //Clase hija
        class Triangulo extends Shape {
        /*El área o superficie de un triángulo cualquiera es igual
        al producto de la base por la altura dividido por dos.*/
            public function area() {
                return $this->area = ($this->ancho*$this->alto)/2;
            }
        }

        //Clase hija 
        class Rectangulo extends Shape {
        /*Para calcular el área de un rectángulo multiplicamos
        el largo por el ancho.*/
            public function area(){

                return $this->area = $this->ancho*$this->alto;
            }
        }

        $s1 = new Triangulo(2, 4);
        echo $s1->area();
        echo '<br>';
        $s2 = new Rectangulo(2, 4);
        echo $s2->area();
        
        //Metodos de clase
            
            /*
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

        
            //Creación y asignación de objetos
            $emp1 = new Employee();
            $emp1->initialize("Susana", 5000);
            echo $emp1->print();
            echo '<br>';
            
            $emp2 = new Employee();
            $emp2->initialize("Pepe", 7000);
            echo $emp2->print();
            echo '<br>';
            */
    ?>