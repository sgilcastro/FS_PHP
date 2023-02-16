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

    ?>
