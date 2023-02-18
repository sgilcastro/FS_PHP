<?php
class MiClase
{
    public $var1 = 'valor 1';
    public $var2 = 'valor 2';
    public $var3 = 'valor 3';

    public $var4 = array(1,2,3);

    protected $protected = 'variable protegida';
    private   $private   = 'variable privada';



    function iterateVisible() {
       echo "MiClase::iterateVisible:<br>";
       foreach ($this as $clave => $valor) {
           print "$clave => $valor<br>";
       }
    }


    
}

$clase = new MiClase();

foreach($clase as $clave => $valor) {
    print "$clave => $valor<br>";
}
echo "<br>";


$clase->iterateVisible();

?>