<?php

include("Signup.php");

$signup1 = new Signup();

$users = array();
$pepe = array();
$arrayNew = array();

//false=objeto
//true=matriz asociativa

$users_json = file_get_contents('bbdd2.json');
$decoded_json = json_decode($users_json, true);

echo '<br>Este es lo del archivo bbdd2<br>';
echo $users_json;
echo '<br><br>';

$users = $decoded_json['users'];

$newUser = json_encode($signup1->addDataUser(5, "Pepita","MArtinez", "Pmartinez", "email@email.com", "1234"));

echo '<br>Este es lo del archivo bbdd2<br>';
echo $newUser;
echo '<br><br>';

$arrayNew = $signup1->addUser($newUser);

file_put_contents("myfile.json", json_encode($arrayNew));

print_r($arrayNew);


/*
echo "<pre>";
print_r(json_decode($users, true)); 
echo "</pre>";

$signup1->addDataUser(4, "Susana", "Martín", "smartin", "smartin@correo.es", "8970");

$signup1->addDataUser($users);

echo "<pre>";
print_r(json_decode($users, true)); 
echo "</pre>";

/*
addData($id_user, $name, $surname, $user, $email, $pw);

addUser($user);


$objeto=new ObjetoClass();

$objeto->altaUsuario(gjj,khkhk,kljkhjk); 
*/


?>