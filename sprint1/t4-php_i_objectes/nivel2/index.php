<?php
   require("PokerDice.php");

   /*
Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.
Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, 
genera un valor aleatori per a l'objecte a què se li aplica el mètode.
Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.
Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.
A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus.

   */

    $dado = new PokerDice();
    $dado->throw();
    $dado->throw();
    $dado->throw();
    $dado1 = new PokerDice();
    $dado1->throw();
    $dado1->throw();
    $tirada = [];


    $x=5;

    for ($i=0;$i<$x;$i++){
        //echo '<br>'.$i.'<br>';
        $dado = new PokerDice();
        $dado->throw();
        $dado->shapeName();
        $tirada[]=$dado->getFigura();
        //var_dump($tirada).'<br>';
    }
    echo '<br><br>La tirada de '.$x.' dados ha sacado las siguientes figuras: ';

    foreach($tirada as $clave=>$valor){
        echo $valor.' ';
    }
    echo '<br><br>';
    echo "Se han lanzado un total de ".$dado->getTotalThrows()." dados.<br><br>";

    echo "La ultima tirada ha salido la figura ".$dado->shapeName().".";

?>