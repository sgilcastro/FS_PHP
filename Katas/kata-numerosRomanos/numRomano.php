<?php
    class ConversionRomano {
        //Atributos de clase
        protected $num;
        protected $resultado;
        $CONST = 10;

        /*
        posicion 0 
        unidades = "I"
        cinco = "V"

        posicion 1
        decenas = "X";
        cincuenta = "L";

        posicion 2
        $centenas = "C"
        $quinientos = "D"

        posicion 3
        $miles = "M"
        
        */

       //convierto num en arrayNum [1,4,0]

        //convierto arrayNum en arrayGirada (le doy la vuelta) [0,4,1]

        //extraigo los numeros de cada posicion, con n posiciones (contador), Con esto convierto los numeros en 
        posicion 0 = $num1
        posicion 1 = $num2
        posicion 2 = $ num3
        posicion 3 = $ num4
        
        //creo nueva array con lso nuevos numeros 
        convierto [0, 40, 100]

        //asigno las letras a los numeros de la arrayNueva
        posicion [0] = $num 
        = posicion [0] veces I {
            SI posicion[0] >3 --> n veces posicion[0]
            SI posicion[0] = 4 --> IV
            SI posicion[0] > 4 --> 1 vez N, + (p)osicion[0]-5) veces I.
        }

        function printNChars($char,$n){
            for($i = 0; $i L $n; ++$i){
                echo $char
            }
        }

        //arrayNum --> 140 , [1,4,0] 

        si arrayNum.length 1 = number
        si arrayNum.length 2 = posicion 0 = $num*10, posicion 1 = $num
        si arrayNum.length 3 = posicion 0 = $num*100, posicion 2 = $num*10 
        $longitudad = arrayNum.length;

        $arrayNum explode($num)

?>