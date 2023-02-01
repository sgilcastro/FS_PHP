<!DOCTYPE html>

<html lang="es">

    <head>
        <title>PHP y objetos Objects (Tema 4).</title>
        <meta charset="utf-8">
        <meta name="description" content=
        "Entrega d'exercici: PHP i Objects (Tema 4). Sprint 1. Nivel 1.
        Ejercicios 1">
        <meta name="author" content="Susana Gil">
        <meta name="keywords" content="php html5 objetos">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
        <!-- Este meta se usa para la visualización en pantallas móviles-->

    </head>

    <body>

        <?php
            require("Shape.php");
            require("Triangulo.php");
            require("Rectangulo.php");
            //include --> te da warning - 
            //require --> peta el fichero - usarlo cuando es algo que tiene que usarse si o si

            $s1 = new Triangulo(2, 4);
            echo "El area del triangulo es: " . $s1->area();
            echo '<br>';

            $s2 = new Rectangulo(2, 4);
            echo "El area del rectangulo es: " . $s2->area();
            echo '<br>';

        ?>


    </body>
</html>