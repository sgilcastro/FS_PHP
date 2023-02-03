<?php

include("Signup.php");

$signup1 = new Signup();

//Obtengo los datos del archivo json y lo decodifico como un array
$users_json = file_get_contents('bbdd2.json');
$decoded_json = json_decode($users_json, true);

// Imprimo el array decodificada
echo '<br><br>';
print_r($decoded_json);
echo '<br><br>';

//Creo un array con los datos del user
$user = $signup1->addDataUser("4", "Susana", "Martín", "smartin", "smartin@correo.es", "8970");

//Imprimo el array creada con print_r
print_r($user);

//Añado el array $user en el array decodificada:
$posicionFinal = count($decoded_json);

//echo $posicionFinal para ver si es correcta;
$decoded_json[$posicionFinal] = $user;

echo '<br><br>';
print_r($decoded_json);
echo '<br><br>';
echo $posicionFinal;


//Quiero pasar ese array a un archivo json nuevo.

$json = json_encode($decoded_json,JSON_PRETTY_PRINT|JSON_PRESERVE_ZERO_FRACTION);

$bytes = file_put_contents("bbdd_new.json", $json);

//este echo lo uso para saber si ha pasado la info o no, me dice los bytes que se han añadido
echo "<br>The number of bytes written are $bytes.<br>";

//convierto el nuevo json de nuevo en array
$users_json_new = file_get_contents('bbdd_new.json');
$decoded_json_new = json_decode($users_json_new, true);

// Imprimo el nuevo array decodificada
echo '<br><br>';
print_r($decoded_json_new);
echo '<br><br>';

//contar la nueva array

echo '<br>'.count($decoded_json_new).'<br>';

//==========para tener objeto en lugar de array del archivo json==========

/*
$users_json = file_get_contents('bbdd2.json');
$decoded_json = json_decode($users_json, false);

echo '<br><br>';
print_r($decoded_json);
echo '<br><br>';

var_dump($decoded_json);
*/

?>