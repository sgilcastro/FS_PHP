<?php
$people_json = file_get_contents('people.json');
$decoded_json = json_decode($people_json, true);
$name = $decoded_json['name'];
$countries = $decoded_json['countries'];
foreach($countries as $country) {
    echo $name.' visited '.$country['name'].' in '.$country['year'].'.';
}
/* 
Monty visited Spain in 1982. 
Monty visited Australia in 1996. 
Monty visited Germany in 1987. 
*/


$data = file_get_contents('bbdd.json');
$products = json_decode($data, true);

foreach ($products as $product) {
    echo '<pre>';
    print_r($product);
    echo '</pre>';
}


//para json sencillos {}
$products = json_decode($data, false);

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

//para json sencillos {}
$products = json_decode($data, true);

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



$users_json = file_get_contents('bbdd2.json');
$decoded_json = json_decode($users_json, true);
$users = $decoded_json['users'];
foreach($users as $user) {
    $name = $user['name']; 
    $surname = $user['surname'];
    $tareas = $user['tareas'];
    foreach($tareas as $tarea) {
        echo $name.' tienes que '. $tarea['titulo'].' esta tarea está '.$tarea['estado'].'.<br>';
    }
}
?>

<br>
<br>
<br>

<?php
$people_json = file_get_contents('people2.json');
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