<?php
$array = array(
    'id_usuario' => '1',
    '0' => '1',
    'nombre_usuario' => 'superusuario',
    '1' => 'superusuario',
    'apellido_usuario' => 'Administrador',
    '2' => 'Administrador',
    'correo_usuario' => '131d2f680a7430382e755f8441342e',
    '3' => '131d2f680a7430382e755f8441342e',
    'contrasena' => '131d2f680a40',
    '4' => '131d2f680a40',
    'cedula_usuario' => '61',
    '5' => '61',
    'oficina_id' => '33',
    '6' => '33',
    'tipo_usuario_id' => '1',
    '7' => '1',
    'telefono_usuario' => '',
    '8' => '',
    'usuario_activado' => '1',
    '9' => '1',
    'fecha_reg' => '2017-12-01 00:00:00',
    '10' => '2017-12-01 00:00:00',
);

file_put_contents('bbdd/user.json', json_encode($array));

$fileContent = file_get_contents('bbdd/user.json');

echo "<pre>";
print_r(json_decode($fileContent, true)); 
echo "</pre>";
?>