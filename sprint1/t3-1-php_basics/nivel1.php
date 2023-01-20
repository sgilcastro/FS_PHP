<!DOCTYPE html>

<html lang="es">

    <head>
        <title>Sprint 1. Php basicos (Tema 3).</title>
        <meta charset="utf-8">
        <meta name="description" content=
        "Entrega d'exercici: Php basics (Tema 3). Sprint 1. Nivel 1. ejercicios 1, 2, 3, 4 y 5">
        <meta name="author" content="Susana Gil">
        <meta name="keywords" content="php html5">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
        <!-- Este meta se usa para la visualización en pantallas móviles-->
    </head>
    
    <body>
        
        <!-- Variables -->

        <?php
        /* Variables ejercicio1 */
        $nombre = "Susana";
        $edad = 48;
        $altura = 1.64;
        $paro = false;

        /* Variables ejercicio2 */
        $hello = "Hello, World!";
        $hello_may = strtoupper($hello);
        $longitud = strlen($hello);
        $invert = strrev($hello);
        $curs = "Este es el curso de PHP";

         /* Variables ejercicio3 */
          define("CONSTANT", "Susana");

        /* Variables ejercicio4 */
        $X = 5;
        $Y = 4;
        $N = 5.35;
        $M = 2.7;

        /* Variables ejercicio5 */
        $edad_amigos = array(40,46,39,32,48);
        $edad_familia = array(47,7,48);
        
        ?>

        <!-- Ejercicios -->
       
        <h1>Exercici 1</h1>

        <?php
        /* Defineix una variable de cada tipus: integer,double,string i boolean. Després, imprimeix-les per pantalla.*/
        echo "Mi nombre es "
        . $nombre . ". Mido "
        . $altura . " mts. Tengo "
        . $edad . " años. Estoy en paro: "
        . $paro;

        echo "<h1>Exercici 2</h1>";
        
        /*Imprimeix per pantalla Hello, World! utilitzant una variable.*/
       
        echo $hello."<br>";
       
        /*Converteix tots els caràcters del string a majúscules i imprimeix en pantalla.*/
       
        echo $hello_may."<br>";
        
        /*Imprimeix per pantalla la mida (longitud) de la variable.*/
        
        echo $longitud."<br>";

        /*Imprimeix per pantalla el string en ordre invers de caràcters.*/
        echo $invert."<br>";

        /*Crea una nova variable amb el contingut "Aquest és el curs de PHP"
        i imprimeix per pantalla la concatenació de tots dos strings.*/
        echo $hello . " " . $curs;
        ?>

        <h1>Exercici 3</h1>

        <?php
        /* Crea una constant que contingui el teu nom i l'imprimeixi per pantalla.
        Has d'imprimir-la amb format de títol i lletra en negreta en HTML.*/
        
        echo "<h1><b>" . CONSTANT . "</b></h1>";
        
        ?>

        <h1>Exercici 4</h1>
        
        <?php
        /* Declara dues variables X i Y de tipus int, dues variables N i M de tipus double
        i assigna a cadascuna un valor. A continuació, mostra per pantalla per a X i Y:

        El valor de cada variable.
        La suma.
        La resta.
        El producte.
        El mòdul.*/

        echo "<b>Siendo X = " . $X . " y Y = " . $Y . "</b><br>";
        echo "X + Y = " . ($X + $Y) . "<br>";
        echo "X - Y = " . ($X - $Y)."<br>";
        echo "X x Y = " . $X * $Y."<br>";
        echo "El resto de X entre Y = " . $X % $Y."<br><br>";

        /*Per N i M realitzaràs el mateix.*/
        echo "<b>Siendo M = " . $M . " y N = " . $N . "</b><br>";
        echo "N + M = " . ($N + $M) . "<br>";
        echo "N - M = " . ($N - $M) . "<br>";
        echo "N x M = " . $N * $M . "<br>";
        echo "El resto de N entre M = " . $N % $M."<br><br>";

        /*Per a totes les variables (X, Y, N, M)

        El doble de cada variable.
        La suma de totes les variables.
        El producte de totes les variables.*/

        echo "El doble de X es " . ($X * 2) . "<br>";
        echo "El doble de Y es " . ($Y * 2) . "<br>";
        echo "El doble de M es " . ($M * 2) . "<br>";
        echo "El doble de N es " . ($N * 2) . "<br><br>";

        echo "X + Y + M + N = " . ($X + $Y + $M + $N) . "<br><br>";
        
        echo "X x Y x M x N = " . ($X * $Y * $M * $N) . "<br><br>";
        ?>

        <h1>Exercici 5</h1>

        <?php
        /*Crea dos arrays, un que inclogui 5 integers, i un altre que inclogui 3 integers.
        Afegeix un valor més a l'array que conté 3 integers.*/
        
        $edad_familia[] = 33;

        print_r($edad_familia);
        
        echo "<br>";

        /*Mescla els dos arrays i imprimeix la mida de l'array resultant per pantalla. */
        $edades = array_merge($edad_amigos, $edad_familia);

        echo "<br>";
        echo "La longitud de la mezcla de los dos arrays es: " . count($edades) . "(usando count())";
        echo "<br>";
        echo "La longitud de la mezcla de los dos arrays es: " . sizeof($edades). "(usando sizeof()
        que es lo mismo que el count())";
        echo "<br>";

        /*Ara imprimeix per pantalla l'array resultant valor a valor.*/
        
        echo "<br>";
        print_r($edades);

        /*Important

        Pot ser que les funcions var_dump () i / o print_r () et resultin útils per a
        visualitzar el contingut de les teves arrays.
        Per saber més:
        Sobre els Arrays, consulta el PDF corresponent de la carpeta ->PDF's de PHP (Tema 3).
        */

        ?>

    </body>

</html>