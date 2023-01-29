<?php

/*
Se trata de crear un programa que transforme numeros de **sistemas decimal, octal, hexadecimal y binario**. Esto es, dado un número en una base concreta, lo transforme al resto de bases.  

Ejemplos


**Input**
- 2 10
- 1011 2

**Output**

- Base binaria: 10 Base octal: 2 Base Hexadecimal: 2
- Base octal: 13 Base Decimal: 11 Base Hexadecimal: B
*/

define("CONSTANT", 2);
$num;
$base;
$numDec;
$numBin;
$numOct;
$numHex;

//De decimal a binario

decbin(int $number): string

$numBin = array(0,1);

for ($i = 0; $i < count($entero); $i++) {

    while ($numero >= $entero[$i]) {
        $numero -= $entero[$i];
        $traduccion .= $romano[$i];
    }

}



function parImpar($a) {

    if($a % 2 == 0) {
        echo . $a . " es par.<br>";
    } else {
        echo . $a . " es impar.<br>";
    }
}

function printIntBinario(int $num) {
    $numBin = [
        '0' => 0,
        '1' => 0
    ];

    if(intdiv($num,2) > 0) {
        $num %= CONSTANT;
    }

}



function resto($x,$y) {
    echo "El resto de X entre Y = " . $x % $y."<br><br>";
}

function contar($num) {
    $num;
    $i = 0;
    while ($i <= $num) {
        echo $i . " ";
            $i = $i + 2;
    }
}

contar($num);


echo . $oquesea . "<br>";

?>