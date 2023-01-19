<?php

    function enteroARomano($numero) {

        $entero = array(1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1);
        $romano = array("M", "CM", "D", "CD", "C", "XC", "L", "XL", "X", "IX", "V", "IV", "I");
        $traduccion = "";

        for ($i = 0; $i < count($entero); $i++) {

            while ($numero >= $entero[$i]) {
                $numero -= $entero[$i];
                $traduccion .= $romano[$i];
            }

        }

        return $traduccion;
    }

    echo "Introduzca un numero entero entre 1 y 3999: ";
    fscanf(STDIN, "%d", $numero);

    if ($numero < 1 || $numero > 3999) { 
        echo "El número entero que has introducido no está dentro del rango 1-3999";
    } else {
        echo "La traducción a número romano del entero " .$numero ." es: " .enteroARomano($numero) .PHP_EOL;
    }
    
?>