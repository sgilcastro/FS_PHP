<!DOCTYPE html>

<html lang="es">

    <head>
        <title>Sprint 1. Php basicos (Tema 3).</title>
        <meta charset="utf-8">
        <meta name="description" content="Entrega d'exercici: Php basics (Tema 3). Sprint 1. Nivel 1. ejercicios 1, 2, 3, 4 y 5">
        <meta name="author" content="Susana Gil">
        <meta name="keywords" content="php html5">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1"> <!-- Este meta se usa para la visualización en pantallas móviles-->
        
        <!-- <meta name="robots" content="no-index"> esta linea sólo se se usa si no quieres indexar. Por defecto indexa siempre -->
        
        <!-- css reset -->
        <link rel="stylesheet" type="text/css" href="css/normalize.css"> 

        <!-- css mi estilo -->
        <link rel="stylesheet" type="text/css" href="css/styles.css">

    </head>


    <body>
        <?PHP

        /* Variables ejercicio1 */
        $nombre = "Susana";
        $edad = 48;
        $altura = 1.64;
        $paro = "false";

        /* Variables ejercicio2 */
        $hello = "Hello, World!";
        $hello_may = strtoupper($hello);
        $longitud = strlen($hello);
        $invert = strrev($hello);
        $curs = "Este es el curso de PHP";

         /* Variables ejercicio3 */
          define("CONSTANT", "Susana");


       /*Ejercicios*/

        echo "<h1>Exercici 1</h1>";
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


        echo "<h1>Exercici 3</h1>";
        /* Crea una constant que contingui el teu nom i l'imprimeixi per pantalla.
        Has d'imprimir-la amb format de títol i lletra en negreta en HTML.*/
        echo "<h1><b>" . CONSTANT . "</b></h1>";        
        
        ?>

    </body>

</html>