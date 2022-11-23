<?php
class miClase
{
    //Atributos de clase
    public $resultado = 0;

    //Metodos de clase
    public function print($v1, $v2){
        $this->resultado = $v1 + $v2;
        return $this->resultado;
    }
}

$emp1 = new miClase();

echo $emp1->print(5, 5);

?>