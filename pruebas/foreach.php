<?php
$age = array("Peter"=>"35","Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $x_value) {
    echo "Key=".$x.", Value=".$x_value;
    echo "<br>";
}

?>
<?php
function cuadradocubo ($valor,&$cuad,&$cub){
    $cuad = $valor*$valor;
    $cub=$valor*$valor*$valor;
}

cuadradocubo (2,$c1,$c2);
echo "EL cuadrado de 2 es: ".$c1."<br>";
echo "El cubo de 2 es: ".$c2;
?>

<html>
    <body>
        <h1>¿Cuantos años tienes?</h1>
        <select>
            <?php foreach (range(1, 10) as $num): ?>
            <option value="<?php echo $num; ?>"><?php echo $num . ' años'; ?></option>
            <?php endforeach; ?>
        </select>
    </body>
</html>