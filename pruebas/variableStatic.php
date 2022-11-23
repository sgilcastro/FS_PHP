<?php
function test()
{
    $a = 0;
    echo $a;
    $a++;
}

function test2()
{
    static $a = 0;
    echo $a;
    $a++;
}

function test3()
{
    static $count = 0;
    echo "s" . $count;

    $count++;
    echo $count;

    if ($count < 10) {
        echo "h" . $count;
        test3();
    }


    echo "f" . $count;
}

echo "Test<br>";
test();
echo "<br>";
test();
echo "<br>";
echo "Test2<br>";
test2();
echo "<br>";
test2();
echo "<br>";

echo "Test3<br>";
test3();
echo "<br>";


?>