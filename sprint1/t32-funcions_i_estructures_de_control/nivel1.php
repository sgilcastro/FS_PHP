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
        $edad2 = 48;

        /* Variables ejercicio2 */
        

        /* Variables ejercicio3 */

        /* Variables ejercicio4 */

        /* Variables ejercicio5 */

        /* Variables ejercicio6 */

        ?>


        <h1>Exercici 1</h1>

        <?PHP
        /* Programa una funció que, donat un número qualsevol (per exemple, la teva edat)
        ens digui si és parell o imparell mitjançant un missatge per pantalla.*/

        function parImpar($a) {

            if ($a % 2 == 0) {
                echo "Tu edad es par.<br>";
            } else {
                echo "Tu edad es impar.<br>";
            }
        }

        echo "Tienes " . $edad1 . ". ";
        parImpar($edad1);
        
        echo "Tienes " . $edad2. ". ";
        parImpar($edad2);

        ?>

        <h1>Exercici 2</h1>
        <?PHP
        /* Per jugar a l'"amagatall" se'ns ha demanat un programa que compti fins a 10.
        Però la persona que comptarà és una mica tramposa i ho farà comptant de dos en dos.
        Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte
        per pantalla.*/
        function escondite () {
            $i = 0;
            while ($i <= 10) {
                if ($i % 2 == 0) {
                    echo $i . " ";
                    $i++;
                } else {
                    $i++;
                }
            }
        }

        escondite();
        
        ?>

       <h1>Exercici 3</h1>
        <?PHP
        /* Imagina't que volem que compti fins a un nombre diferent de 10.
        Programa la funció perquè el final del compte estigui parametritzat.*/
        ?>

        <h1>Exercici 4</h1>
        <?PHP
        /* Per prevenir oblits en utilitzar la nostra meravellosa opció "amagatall" establirem un
         paràmetre per defecte igual a 10 a la funció que s'encarrega de fer aquest compte.*/
        ?>

        <h1>Exercici 5</h1>
        <?PHP
        /* Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.
        Condicions:
        Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
        Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
        Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
        Si la nota és menor a 33%, l'estudiant reprovarà.*/
        ?>

        <h1>Exercici 6</h1>
        <?PHP
        /*Charlie em va mossegar el dit!
        Charlie et mossegarà el dit exactament el 50% del temps.
        Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.
        Important
        Consell: pot ser que la funció rand () et resulti útil. */
        ?>

    </body>

</html>