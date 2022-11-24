<!DOCTYPE html>

<html lang="es">

    <head>
        <title>PHP y objetos Objects (Tema 4).</title>
        <meta charset="utf-8">
        <meta name="description" content=
        "Entrega d'exercici: PHP i Objects (Tema 4). Sprint 1. Nivel 2.
        Ejercicios 1">
        <meta name="author" content="Susana Gil">
        <meta name="keywords" content="php html5 objetos arrays">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
        <!-- Este meta se usa para la visualización en pantallas móviles-->

    </head>

    <body>

        <?php
            include("PokerDice.php");

            //Coche vehiculo1 = new Coche("Kia","Ceed","Rojo",1.6); 
            //Hacer el constructor del dado
            /*
            ArrayList<Vehiculos> listadoVehiculos = new ArrayList<Vehiculos>();
       
            listadoVehiculos.add(new Vehiculos("seat","Panda",1200,"Rojo"));
            listadoVehiculos.add(new Coche("Dacia","Sandero",1300,"blanco",true));
            listadoVehiculos.add(new Moto("Yamaha","Honda-600",600,"rojo",false,2));
            listadoVehiculos.add(new Camion("Man","Correcaminos 20",3000,"verde",true,true));


            */

            $dado1 = new PokerDice();
            $dado2 = new PokerDice();
            $dado3 = new PokerDice();
            $dado4 = new PokerDice();
            $dado5 = new PokerDice();
            $tiradasDado1 = 0;
            $tiradasDado2 = 0;
            $tiradasDado3 = 0;
            $tiradasDado4 = 0;
            $tiradasDado5 = 0;
            $tiradasTotales = 0;
        
            $dado1->lanzarDado();
            $figura1Dado1 = $dado1->darNombreFigura();
            $dado1->lanzarDado();
            $figura2Dado1 = $dado1->darNombreFigura();
            $dado1->lanzarDado();
            $figura3Dado1 = $dado1->darNombreFigura();
            $tiradasDado1 = $dado1->getTotalLanzarDado();
        
            $dado2->lanzarDado();
            $figura1Dado2 = $dado2->darNombreFigura();
            $dado2->lanzarDado();
            $figura2Dado2 = $dado2->darNombreFigura();
            $tiradasDado2 = $dado2->getTotalLanzarDado();
        
            $dado3->lanzarDado();
            $figura1Dado1 = $dado3->darNombreFigura();
            $dado3->lanzarDado();
            $figura2Dado3 = $dado3->darNombreFigura();
            $dado3->lanzarDado();
            $figura3Dado3 = $dado3->darNombreFigura();
            $tiradasDado3 = $dado3->getTotalLanzarDado();
        
            $dado4->lanzarDado();
            $figura1Dado4 = $dado4->darNombreFigura();
            $tiradasDado4 = $dado4->getTotalLanzarDado();
        
        
            $dado5->lanzarDado();
            $figura1Dado5 = $dado5->darNombreFigura();
            $dado5->lanzarDado();
            $figura2Dado5 = $dado5->darNombreFigura();
            $dado5->lanzarDado();
            $figura3Dado5 = $dado5->darNombreFigura();
            $dado4->lanzarDado();
            $figura4Dado5 = $dado5->darNombreFigura();
            $tiradasDado5 = $dado5->getTotalLanzarDado();
 
            echo "Tiradas dado 1: " 
            . $tiradasDado1 . " ==> "
            . $figura1Dado1 . ", " 
            . $figura2Dado1 . ", " 
            . $figura3Dado1 . ".";
            echo "<br>";
        
            echo "Tiradas dado 2: " 
            .  $tiradasDado2 . " ==> " 
            . $figura1Dado2 . ", " 
            . $figura2Dado2 . ".";
            echo "<br>";
        
            echo "Tiradas dado 3: " 
            . $tiradasDado3 . " ==> " 
            . $figura1Dado3 . ", " 
            . $figura2Dado3 . ", " 
            . $figura3Dado3 . ".";
            echo "<br>";
        
            echo "Tiradas dado 4: " 
            . $tiradasDado4 . " ==> " 
            . $figura1Dado4 . ".";
            echo "<br>";
        
            echo "Tiradas dado 5: " 
            . $tiradasDado5 . " ==> " 
            . $figura1Dado5 . ", " 
            . $figura2Dado5 . ", " 
            . $figura3Dado5 . ", "
            . $figura4Dado5 . ".";
            echo "<br>";
        
            $tiradasTotales = ($tiradasDado1
            + $tiradasDado2
            + $tiradasDado3
            + $tiradasDado4
            + $tiradasDado5);
        
            echo "Se han hecho un total de " . $tiradasTotales . " tiradas en total.";
        


        ?>


    </body>
</html>