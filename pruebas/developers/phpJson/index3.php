<?php

include("Signup.php");

$signup1 = new Signup();
$users = array();

$users = file_get_contents('json/bbdd2.php');
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