<!DOCTYPE html>

<html lang="es">

    <head>
        <title>Funcions i Estructures de control (Tema 3).</title>
        <meta charset="utf-8">
        <meta name="description" content=
        "Entrega d'exercici: Funcions i Estructures de control (Tema 3). Sprint 1. Nivel 1.
        Ejercicios 1, 2, 3, 4, 5 y 6">
        <meta name="author" content="Susana Gil">
        <meta name="keywords" content="php html5 funciones controldeflujo">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
        <!-- Este meta se usa para la visualización en pantallas móviles-->

    <body>
        <?PHP

        /* Variables ejercicio1 */
        $a = 0;
        $edad1 = 45;
        $edad2 = 68;

        /* Variables ejercicio2 */
        

        /* Variables ejercicio3 */
        $num = 20;
        /* Variables ejercicio4 */

        /* Variables ejercicio5 */
        $nota = 5;
        /* Variables ejercicio6 */

        ?>


        <h1>Exercici 1</h1>

        <?PHP
        /* Programa una funció que, donat un número qualsevol (per exemple, la teva edat)
        ens digui si és parell o imparell mitjançant un missatge per pantalla.*/

        function parImpar($a) {

            if ($a % 2 == 0) {
                echo "Tienes " . $a . " años. Tu edad es par.<br>";
            } else {
                echo "Tienes " . $a . " años. Tu edad es impar.<br>";
            }
        }

        parImpar($edad2);

        parImpar($edad1);
        
        parImpar(11);


        ?>

        <h1>Exercici 2</h1>
        <?PHP
        /* Per jugar a l'"amagatall" se'ns ha demanat un programa que compti fins a 10.
        Però la persona que comptarà és una mica tramposa i ho farà comptant de dos en dos.
        Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte
        per pantalla.*/
        function escondite() {
            for ($i = 1; ($i <= 10); $i = $i + 2) {
                echo $i . " ";
            }
        }
        escondite();
        
        ?>

       <h1>Exercici 3</h1>
        <?PHP
        /* Imagina't que volem que compti fins a un nombre diferent de 10.
        Programa la funció perquè el final del compte estigui parametritzat.*/

        function contar($num) {
            $num;
            $i = 0;
            while ($i <= $num) {
                if ($i % 2 == 0) {
                    echo $i . " ";
                    $i++;
                } else {
                    $i++;
                }
            }
        }

        contar($num);
        echo "<br>";
        contar(50);

        ?>

        <h1>Exercici 4</h1>

        <?PHP
        /* Per prevenir oblits en utilitzar la nostra meravellosa opció "amagatall" establirem un
         paràmetre per defecte igual a 10 a la funció que s'encarrega de fer aquest compte.*/

         function escondite2($num = 10) {
            for ($i = 1; ($i <= $num); $i++) {
                if ($i % 2 == 0) {
                    echo $i . " ";
                }
            }

            echo "<br>";
                
        }
        escondite2();

        escondite2(20);
        ?>

        <h1>Exercici 5</h1>

        <?PHP
        /* Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.
        Condicions:
        Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
        Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
        Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
        Si la nota és menor a 33%, l'estudiant reprovarà.*/
        
        function grado($nota, $notamax = 10) {

            $porcentaje = ($nota / $notamax) * 100;
            
            if ($porcentaje < 60) {
                if ($porcentaje  < 45)   {
                    if ($porcentaje  < 33) {
                        echo $porcentaje . "%. Tienes que reprobar";
                    } else {
                        echo $porcentaje . "%. Tercera División";
                    }
                } else {
                    echo $porcentaje . "%. Segunda División";
                }
            } else {
                echo $porcentaje . "%. Primera División";
            }

            
            /*
            if ($porcentaje >= 60 && $porcentaje <=100) {
                echo $porcentaje . "%. Primera División";
            } else if ($porcentaje < 60 && $porcentaje >= 45) {
                echo $porcentaje . "%. Segunda División";
            } else if ($porcentaje < 45 && $porcentaje >= 33) {
                echo $porcentaje . "%. Tercera División";
            } else if ($porcentaje >= 0 && $porcentaje < 33) {
                echo $porcentaje . "%. Tienes que reprobar";
            } else {
                echo "Revisa la nota introducida. Tu nota es "
                . $nota . " y no puede ser menor de 0 ni mayor de " . $notamax;
            }*/
        
        }
        
        grado($nota);
        echo "<br>";
        grado(3.5);
        echo "<br>";
        grado(3, 12);
        echo "<br>";
        grado(13);
        echo "<br>";
        grado(-1);
        echo "<br>";

        ?>



        <h1>Exercici 6</h1>
        <?PHP
        /*Charlie em va mossegar el dit!
        Charlie et mossegarà el dit exactament el 50% del temps.
        Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.
        Important
        Consell: pot ser que la funció rand () et resulti útil. */

        /*mt_rand o rand  */
        $mordedura = false;

        function isBitten() {
            $d=mt_rand(1, 2);
            
            //echo $d;
            //echo "<br>";
            
            switch ($d) {
                case 1:
                    $mordedura = true;
                    break;
                case 2:
                    $mordedura = false;
                    break;
            }

            /*
            if ($mordedura = true) {
                echo "Charlie te ha mordido";
            } else {
                echo "Charlie no te ha mordido";
            }*/

            //usando el operador ternario
            echo $mordedura ? "Charlie te ha mordido" : "Charlie no te ha mordido";

        }
        
        isBitten();



        ?>

    </body>

</html>