<h1>Leer JSON - echos y prints de json convertido en array</h1>

<h2>bbdd.json</h2>

<h3>Matriz asociativa: imprime valores uno a uno</h3>

<p>json_decode() devolvió una matriz asociativa porque el valor del segundo parámetro se estableció en true.</p>

<?php

$data = file_get_contents('bbdd/bbdd.json');

//json_decode() devolvió una matriz asociativa porque el valor del segundo parámetro se estableció en true.
//para json sencillos {}

$products = json_decode($data,true);

$bytes = file_put_contents("bbdd/bbdd.php", $products);
echo 'JSON transformado en matriz (true)<br>';
var_dump($products);
?>

<br><br>

<?php
echo $products['id_user'].'<br>';
// "id_user":"1"
echo $products['name'].'<br>';
// "name":"Susana"
echo $products['surname'].'<br>';
// "surname":"Gil"
echo $products['user'].'<br>'; 
// "user": "sgil"
echo $products['email'].'<br>'; 
// "email": "susanagilcastro@gmail.com"
echo $products['pw'].'<br>';
// "pw": ""

?>

<h3>Objeto: imprime valores uno a uno</h3>
<p>json_decode() devolvió un objeto porque el valor del segundo parámetro se estableció en false.</p>

<?php
//json_decode() devolvió un objeto porque el valor del segundo parámetro se estableció en false. 
$products = json_decode($data, false);
echo 'JSON transformado en objeto (false)<br>';
var_dump($products);
?>

<br><br>

<?php
echo $products->id_user.'<br>';
// "id_user":"1"
echo $products->name.'<br>';
// "name":"Susana"
echo $products->surname.'<br>';
// "surname":"Gil"
echo $products->user.'<br>'; 
// "user": "sgil"
echo $products->email.'<br>'; 
// "email": "susanagilcastro@gmail.com"
echo $products->pw.'<br>';
// "pw": ""
?>

<h3>Registro unico</h3>
<p>Imprime valores del registro automaticamente</p>

<?php

//false=objeto
//true=matriz asociativa

$products = json_decode($data, true);

foreach ($products as $product) {
    echo '<pre>';
    print_r($product);
    echo '</pre>';
}

$products = json_decode($data, false);

foreach ($products as $product) {
    echo '<pre>';
    print_r($product);
    echo '</pre>';
}

?>

<h2>1 registro + anidada - people.json</h2>
<p>True, bbdd/people.json</p>

<?php

$people_json = file_get_contents('bbdd/people.json');
$decoded_json = json_decode($people_json, true);

$name = $decoded_json['name'];
$countries = $decoded_json['countries'];

foreach($countries as $country) {
    echo $name.' visited '.$country['name'].' in '.$country['year'].'.<br>';
}

/* 
Monty visited Spain in 1982. 
Monty visited Australia in 1996. 
Monty visited Germany in 1987. 
*/
?>

<br>
<h2>varios registros + anidada --> people2.json</h2>
<br>

<?php
$people_json = file_get_contents('bbdd/people2.json');
$decoded_json = json_decode($people_json, true);
$customers = $decoded_json['customers'];
foreach($customers as $customer) {
    $name = $customer['name'];
    $countries = $customer['countries'];
    foreach($countries as $country) {
        echo $name.' visited '.$country['name'].' in '.$country['year'].'. <br>';
    }
}


?>

<h2>BBDD users + tareas json</h2>
<p></p>

<?php

$users_json = file_get_contents('bbdd/bbdd2.json');
$decoded_json = json_decode($users_json, true);



$users = $decoded_json['users'];

var_dump($users);
?>

<br><br>

<?php
foreach($users as $user) {
    $name = $user['name']; 
    $surname = $user['surname'];
    $tareas = $user['tareas'];
    foreach($tareas as $tarea) {
        echo $name.' tienes que '. $tarea['titulo'].' esta tarea está '.$tarea['estado'].'.<br>';
    }
}
?>