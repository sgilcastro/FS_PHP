<?PHP
echo "Hola mundo";
?>

<?PHP
/*Variable local */

$z = 9;
function myTest1() {
    $z = 5;
    echo "<p>Variable x inside function is: $z</p>";
}

myTest1();

echo "<p>Variable x outside function is: $z</p>";

?>

<?PHP
/*Variable global. Ejemplo 1 de 2*/

$x = 5;
$y = 10;
function myTest2(){
    global $x, $y;
    $y = $x + $y;
}

myTest2();
echo "<br>";
echo $y; // outputs 15

/*Variable global. Ejemplo 2 de 2*/

$a = 5;
$b = 10;

function myTest3() {
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

myTest3();
echo "<br>";
echo $b; // outputs 15
echo "<br>";
?>


<?PHP

/*Variable Static */
        function myTest4(){
            static $x = 0;
            echo $x;
            $x++;
        }

        echo "<br>";
        myTest4();
        echo "<br>";
        myTest4();
        echo "<br>";
        myTest4();
        echo "<br>";
        myTest4();
        echo "<br>";
?>


<?PHP
        function myTest5(){
            $x = 0;
            echo $x;
            $x++;
        }

        echo "<br>";
        myTest5();
        echo "<br>";
        myTest5();
        echo "<br>";
        myTest5();
        echo "<br>";
?>