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

       /*Ejercicios*/

        echo "<h1>Exercici 1</h1>";
        /* Defineix una variable de cada tipus: integer,double,string i boolean. Després, imprimeix-les per pantalla.*/
        echo "Mi nombre es "
        . $nombre . ". Mido "
        . $altura . " mts. Tengo "
        . $edad . " años. Estoy en paro: "
        . $paro;
        
        ?>

    </body>

</html>